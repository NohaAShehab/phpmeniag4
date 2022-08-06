<?php


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
echo '
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        <link rel="stylesheet" href="../style.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

    ';
    echo "<div class='container'>";

    echo "<h1> Connect to databases </h1>";

    # 1- set connention creditd  PDO, Php data object
    $dbuser= 'itiphp';
    $dbpassword = 'Iti123456789_';
    $dsn = "mysql:dbname=phpcrud;host=127.0.0.1;port=3306";
    # 2- connect to database
    $db=new PDO($dsn, $dbuser, $dbpassword);

    var_dump($db);


    if($db){
        echo "<h3 class=''> Connected to database successed </h3>";

        echo "<h4> Prepared statemnt </h4>";
        ################# write quires in a string
//        $query= "Create table `phpcrud`.`students`(`id` int auto_increment primary key,
//            `username` varchar(40), `email` varchar(40), `password` varchar(100),
//            `gender` enum('male','female'), `hoppies` varchar(100), `img` varchar(200))";
//
//        ####### prepare the query
//        $stmt=$db->prepare($query);  # stmt object
//        var_dump($stmt);
//        # execute the statemnt
//        $res=$stmt->execute();
//        var_dump($res);
        ############################################ Insert into table ##########################################
        echo  "<h2 class='text-center'>Insert into table </h2>";

//        $insertQeury="Insert into `phpcrud`.`students` (`username`,`email`, `password`, `gender`, `img` )
//        values ('Ahmed', 'ahmed@gmail.com','iti', 'male', 'img1.png')";
//
//        $inststmt=$db->prepare($insertQeury);

//        $res=$inststmt->execute();
//        var_dump($res);
//
//        # get the inserted id of the element
//
//        $inserted_id = $db->lastInsertId();
//        var_dump($inserted_id);
        ##############################################################
//        $username ='Noha';
//        $email = 'noha@gmail.com';
//        $pass = 'iti';
//        $img = 'im.png';
//        $gender = 'female';
//        $insertQeury="Insert into `phpcrud`.`students` (`username`,`email`, `password`, `gender`, `img` )
//        values (:name, :useremail, :userpassword, :gender,:userimg)";
//
//        $inststmt=$db->prepare($insertQeury);
//        $inststmt->bindParam(":name", $username);
//        $inststmt->bindParam(":useremail", $email);
//        $inststmt->bindParam(":userpassword", $pass);
//        $inststmt->bindParam(":gender", $gender);
//        $inststmt->bindParam(":userimg", $img);

//        $res=$inststmt->execute();
//        var_dump($res);
////
////        # get the inserted id of the element
////
//        $inserted_id = $db->lastInsertId();
//        var_dump($inserted_id);

        #################################################update ################################
//        echo  "<h2 class='text-center'>update table </h2>";
//
//        $username='updated';
//        $hoppies = 'reading,writing';
//        $id= 4;
//        $updateQuery = "Update `phpcrud`.`students`
//            set `username`=:newusername, `hoppies`=:userhoppies
//                where id=:userid
//            ";
//        $updatestmt = $db->prepare($updateQuery);
//        $updatestmt->bindParam(":newusername", $username);
//        $updatestmt->bindParam(":userhoppies", $hoppies);
//        $updatestmt->bindParam(":userid", $id);
//
//        $res =$updatestmt->execute();
//        var_dump($res);  # represent if the query is ok -->;
//
//        var_dump($updatestmt->rowCount());

        ######## ################### delete

        echo  "<h2 class='text-center'>Delete from table </h2>";
//        $id = 4;
//        $deletequery = "delete from `phpcrud`.`students`  where id=:deleted_user";
//
//        $delstmt = $db->prepare($deletequery);
//        $delstmt->bindParam(":deleted_user", $id);
//        $res=$delstmt->execute();
//        var_dump($res);
//        var_dump($delstmt->rowCount());

        ###########################################


        echo  "<h2 class='text-center'>Select from database </h2>";

        $selQuery = "Select * from `phpcrud`.`students` ";
        $sel_stmt = $db->prepare($selQuery);
        $res=$sel_stmt->execute();
        var_dump($res);
        $rows = $sel_stmt->fetchAll(PDO::FETCH_ASSOC);
//        $rows=$sel_stmt->fetchAll(PDO::FETCH_ASSOC);
//        var_dump($rows);  # rows in array --> each element in the array represnt row in associative arrray


        #################
        echo "<table class='table table-primary'>
      <thead>
        <tr>
          <th>ID</th> <th>Username</th><th>Email</th> <th>Password</th><th>Gender</th><th>Hoppies</th>
          <th>Image</th>
          <th>Edit</th> <th>Delete</th>
        </tr>
      </thead>
      <tbody>";
//
        foreach ($rows as $row){

            echo "<tr> <td>{$row['id']}</td>
                        <td>{$row['username']}</td>
                        <td>{$row['email']}</td>
                        <td>{$row['password']}</td>
                        <td>{$row['gender']}</td>
                        <td>{$row['hoppies']}</td>
                        <td>{$row['img']}</td>
            </tr>";
        }
        echo "</tbody> </table>";





    }

