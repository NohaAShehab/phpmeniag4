<?php
ini_set('display_errors', 1); ini_set('display_startup_errors', 1); error_reporting(E_ALL);
echo '
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        <link rel="stylesheet" href="../style.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

    ';
echo "<div class='container'>";

$user_id = $_GET["id"];
//var_dump($user_id);

## get the userinfo related to this user
$allusers = file("users.txt");
foreach ($allusers as $index=>$user){
    $userinfo = trim($user, "\n");
    $userinfo = explode(":", $userinfo);
    if($userinfo[0]==$user_id){
        $edited_user = $userinfo;
        break;
    }
}

    $swimming= false;
    $reading =false;
    $cooking= false;
    if($edited_user[5]){
        ###
        $hoppies=trim($edited_user[5],"\n");
        $hoppies = explode(",", $hoppies);
        foreach ($hoppies as $hoppy){
            if ($hoppy=="swimming"){
                $swimming=true;
            }elseif ($hoppy=="reading"){
                $reading=true;
            }elseif ($hoppy=="cooking"){
                $cooking=true;
            }
        }
    }
?>
<h1> Edit User </h1>
<form action="update.php?id=<?php echo $edited_user[0];?>" method="POST">

    <div class="mb-3">
        <label class="form-label">Name</label>
        <input type="text" name="username" class="form-control"  value="<?php echo $edited_user[1]; ?>" >
    </div>
    <div class="mb-3">
        <label class="form-label">Email</label>
        <input type="email" class="form-control" name="email"  value="<?php echo $edited_user[2]; ?>" >
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" class="form-control" name="password"  value="<?php echo $edited_user[3]; ?>"
               id="exampleInputPassword1">
    </div>
    <!--        <button type="submit" class="btn btn-primary">Submit</button>-->
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Gender</label>
        <div class="form-check form-check-inline">
            <?php
                if($edited_user[4]=="male") {
                    echo '
                   <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" 
                   value="male" checked>';
                }else{
                   echo'<input class="form-check-input" type="radio" name="gender" id="inlineRadio1"
                   value="male">';
                }
             ?>
            <label class="form-check-label" for="inlineRadio1">Male</label>
        </div>
        <div class="form-check form-check-inline">
            <?php
            if($edited_user[4]=="female") {
                echo '<input class="form-check-input" type="radio" name="gender" id="inlineRadio1" 
                   value="female" checked>';
            }else{
                echo'<input class="form-check-input" type="radio" name="gender" id="inlineRadio1"
                   value="female">';
            }
            ?>
            <label class="form-check-label" for="inlineRadio2">Female</label>
        </div>
    </div>

    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Hoppies</label>

        <div class="form-check">
            <?php
                if($cooking){
                    echo '<input class="form-check-input" type="checkbox"  name="hoppies[]" value="cooking" checked >';
                }else{
                    echo '<input class="form-check-input" type="checkbox"  name="hoppies[]" value="cooking" >';
                }
            ?>
            <label class="form-check-label" >
                Cooking
            </label>
        </div>

        <div class="form-check">
            <?php
            if($reading){
                echo '<input class="form-check-input" type="checkbox"  
                name="hoppies[]" value="reading" checked >';
            }else{
                echo '<input class="form-check-input" type="checkbox" 
                name="hoppies[]" value="reading" >';
            }
            ?>

            <label class="form-check-label" >
                Reading
            </label>
        </div>

        <div class="form-check">
            <?php
            if($swimming){
                echo '<input class="form-check-input" type="checkbox"  name="hoppies[]" 
                value="swimming" checked >';
            }else{
                echo '<input class="form-check-input" type="checkbox"  name="hoppies[]" 
                value="swimming" >';
            }
            ?>
            <label class="form-check-label" >
                Swimming
            </label>
        </div>
    </div>
    <input type="submit" class="btn btn-primary">
</form>

