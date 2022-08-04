<?php

ini_set('display_errors', 1); ini_set('display_startup_errors', 1); error_reporting(E_ALL);
echo '
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        <link rel="stylesheet" href="../style.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

    ';
echo "<div class='container'>";
echo "<h1> update user </h1>";

//var_dump($_GET);
//var_dump($_POST);
$update_id = $_GET["id"];
############### Prepare hoppies
$userhoppies= "";
if(isset($_POST["hoppies"])) {
    $hoppies = $_POST["hoppies"];
    # put the hoppies
    $userhoppies=implode(",",$hoppies);
}
//var_dump($userhoppies);
$edited_userdata= "{$update_id}:{$_POST['username']}:{$_POST['email']}:{$_POST['password']}:{$_POST['gender']}:{$userhoppies}\n";


## replace the old line with new line

$allusers = file("users.txt");  # read file into an array

foreach ($allusers as $index=>$user){
        $userinfo = trim($user,"\n");
        $userinfo= explode(":", $userinfo);
        if ($userinfo[0]==$update_id){
            echo "userfoumd";
                $allusers[$index]= $edited_userdata;
            break;
        }
}
var_dump($allusers);# this array contains the updated data



$fileobj = fopen("users.txt", "w");
foreach ($allusers as $user){
    $user= trim($user, "\n");
    fwrite($fileobj, $user.PHP_EOL);
}

header("Location:userstable.php");

