<?php
ini_set('display_errors', 1); ini_set('display_startup_errors', 1); error_reporting(E_ALL);
echo '
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

    ';
echo "<div class='container'>";

echo "<h1> Logining into iti web site </h1>";

var_dump($_POST);

if(empty($_POST["email"]) or empty($_POST["password"])){
    echo " <h2 style='color: red'> Please fill in both email and password </h2>";
    $errors= [];
    $old_data = [];
    if(empty($_POST["email"])){
        $errors["email"]="email required";
    }else{
        $old_data["email"]=$_POST["email"];
    }

    if(empty($_POST["password"])){
        $errors["password"]="password required";
    }else{
        $old_data["password"]=$_POST["password"];
    }
    var_dump($errors);
    $formerros = json_encode($errors);  # convert the array to json object and put it in a string
    var_dump($formerros);

    if(count($old_data)>0){
        $old_data = json_encode($old_data);
        header("Location:loginform.php?errors={$formerros}&old={$old_data}");
    }else{
        header("Location:loginform.php?errors={$formerros}");
    }

}else{
    echo "<h1 style='color: green'> Logged in successed </h1>";
}
