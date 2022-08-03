<?php
echo '
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

    ';
echo "<div class='container'>";

    $name = 'Noha';  # string

    $_email = 'noha@gmail.com';

    $password1 = "34455"; #string

    $year = 2022; #int

    var_dump($name); // diplay full information about the variable
    echo $name; // print the value of the variable
    # echo print only simple variable not the arrays, objects , ....
    echo "<br>";
    echo $year;

    $arr = [3,4,5,6];
    echo "<br> {$arr}";
    echo "<br> {$arr[0]}";
    var_dump($arr);
    print_r($arr);


    ////////////////////////
    $a=  10;
    $b = 12;
    $c = $a + $b;
    var_dump($c);

    ///
    $FIRSTNAME=  'NOHa';
    $lastname = 'Shehab';
    $fullname = $FIRSTNAME. $lastname;
    var_dump($fullname);
