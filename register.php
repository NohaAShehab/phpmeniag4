<?php

    echo '
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

    ';
    echo "<div class='container'>";


    echo "<h1> Thank you for posting your information </h1>";

    /*
     * if you are using method get to send data to the php server
     * you will find the data you send in a special super global variable $_GET

     */

//    var_dump($_GET);  #Associative array ---> use keyword to access its elements

//    echo "Your name is";
//    echo $_GET["username"];
//    echo "<br>";
//
//    echo "Your email is ";
//    echo $_GET["email"];

    /*
    * if you are using method get to send data to the php server
    * you will find the data you send in a special super global variable $_GET
     * and you can find it also $_REQUEST

    */

//    echo "<br> -----------------------";
//    var_dump($_REQUEST);

//
//    echo "<br>Your Name is {$_REQUEST['username']}";
//    echo "<br>Your email is {$_REQUEST['email']}";
//    echo "<br>Your password is {$_REQUEST['password']}";


    echo "<h1> Getting data from Post Method </h1>";

    /*
     * if you are using method POST to send data to the php server
     * you will find the data you send in a special super global variable $_POST
     * and in $_REQUEST

     */
//    var_dump($_GET);
//    var_dump($_POST);
//    var_dump($_REQUEST);

    # 1- CHECK the gender
    if($_POST["gender"]=="male"){
        echo "Thank you Mr {$_REQUEST['username']}";
    }elseif ($_POST["gender"]=="female"){
        echo "Thank you Miss {$_REQUEST['username']}";
    }





    echo "</div>";
