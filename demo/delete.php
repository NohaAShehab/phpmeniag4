<?php

ini_set('display_errors', 1); ini_set('display_startup_errors', 1); error_reporting(E_ALL);
echo '
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        <link rel="stylesheet" href="../style.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

    ';
echo "<div class='container'>";

echo '<h1> Delete a user </h1>';

var_dump($_GET);
$deleted_user = $_GET["id"];  # get the id from the url
#####

## I need to get the line with the given id

######### 1- read file in an array
$allusers = file("users.txt");
################# 2- search about the user with same id
foreach ($allusers as $index=>$u){
    $user = trim($u, "\n");
    $user = explode(":", $user);
    if ($user[0]==$deleted_user){
        echo "User found";
        unset($allusers[$index]); # remove the string form the array
        break;
    }
}
//var_dump($allusers);
## I need to remove the line from the file
### I will remove the line form the users array

#### write the new array to the file
    $fileobj = fopen("users.txt", "w");
    foreach ($allusers as $user){
        $user= trim($user, "\n");
        fwrite($fileobj, $user.PHP_EOL);
    }

    header("Location:userstable.php");
