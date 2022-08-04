<?php

ini_set('display_errors', 1); ini_set('display_startup_errors', 1); error_reporting(E_ALL);
    echo '
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

    ';
    echo "<div class='container'>";
    echo "<h1> Thank you for posting your information, Save data in the file  </h1>";
    var_dump($_POST);
    # 1- CHECK the gender
    $userhoppies= "";
    if(isset($_POST["hoppies"])) {
        $hoppies = $_POST["hoppies"];
        # put the hoppies
       $userhoppies=implode(",",$hoppies);
    }
    var_dump($userhoppies);
    ############## ACCEPT DATA FROM THE FORM

    # 1- prepare string for saving
    $id = time();
    var_dump($id);  # time stamp of the insertation
    ## id , username, email , password, gender , hoppies
    # each line in the file represent user

    $userdata= "{$id}:{$_POST['username']}:{$_POST['email']}:{$_POST['password']}:{$_POST['gender']}:{$userhoppies}\n";
//    var_dump($userdata);

    $fileobject = fopen("users.txt", "a");
    fwrite($fileobject, $userdata);
    fclose($fileobject);

    echo "</div>";


//    var_dump(file("users.txt"));

# redirect to another page

    header("Location:userstable.php");



