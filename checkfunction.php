<?php

ini_set('display_errors', 1); ini_set('display_startup_errors', 1); error_reporting(E_ALL);
echo '
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

    ';
echo "<div class='container'>";
//// 1-
//$n;
//echo "<h1> Isset, check if the variable has value or not?  </h1>";
//    var_dump(isset($n)); #false
//
//echo "<h1> empty: check if the variable is empty or not ?  </h1>";
//    var_dump(empty($n)); # true


//// 2- I didn't define the variable
//
//echo "<h1> Isset, check if the variable has value or not?  </h1>";
//var_dump(isset($n)); # false
//
//echo "<h1> empty: check if the variable is empty or not ?  </h1>";
//var_dump(empty($n)); # true

// 3-
//$s = "";
//echo "<h1> Isset, check if the variable has value or not?  </h1>";
//var_dump(isset($s)); #true
//
//echo "<h1> empty: check if the variable is empty or not ?  </h1>";
//var_dump(empty($s)); # true

##  0, false,"", '', []
## falsy values --> when one of these values appeared in a context
### empty true , isset true

# ################################################################

//$s = null; # ==== $s;
//echo "<h1> Isset, check if the variable has value or not?  </h1>";
//var_dump(isset($s)); #false
//
//echo "<h1> empty: check if the variable is empty or not ?  </h1>";
//var_dump(empty($s)); # true

#######################################
$name="Ahmed";
echo "<h1> Isset, check if the variable has value or not?  </h1>";
var_dump(isset($name)); #true

echo "<h1> empty: check if the variable is empty or not ?  </h1>";
var_dump(empty($name)); #false

