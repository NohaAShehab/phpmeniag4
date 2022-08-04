<?php

echo '
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

    ';
echo "<div class='container'>";

echo "<h1> 1-loops  </h1>";

echo "<li> For loop: predefined number of times </li>";

//for ($i=0; $i<5; $i++){  #used when you know the number of times
//    echo "<li> {$i}</li>";
//}

echo "<li> while loop : stop condition</li>";

//
//$x=5;
//while($x>0){
//    echo "hi {$x}<br>";
//    $x --;
//}


//echo "<li> while loop : the code in the do block will be executed at least one time </li>";
//
//$y=10;
//do{
//    print("value is greater than 10");
//}while($y>10);
####################################Arrays ###############################

echo "<li> Dealing with array </li>";

$names = ["Ahmed", 'Somia', "Menna", "Nour", "Abdelnaby", "Mohamed", "Radwa", "Ali"];
//print_r($names);
//
//var_dump($names);
$arr_len = count($names);
var_dump($arr_len);

echo "<h1> PHP track Students </h1>";

# use loops

//for($i=0; $i<$arr_len; $i++){
//    echo "<li> {$names[$i]} </li>";
//}

//$counter=0;
//while($counter<8){
//    echo "<li> {$names[$counter]} </li>";
//    $counter ++;
//}


###########################

echo "<h1> foreach loop </h1>";

//foreach ($names as $n){
//    echo "<li> {$n} </li>";
//}

########################3 Array types
echo "<h1> Array types </h1>"; #index from 0
# items are accesd throught the index, index from zero
echo "<h2 style='color: purple'> Indexed array </h2>";
//var_dump($names);

echo "<h2 style='color: purple'> Associative array </h2>";

## use  keys instead of index to access the elements inside it
/*
 * No index but keys
 *
 * */

$info = [
  "name"=>"noha",
  "track"=> "opensource",
  "course"=>"PHP"
];

var_dump($info);

//echo $info["name"];
echo "<h3 style='color: darkred'> display associative array values </h3>";
foreach ($info as $n){
    echo "<li> {$n} </li>";
}

echo "<h3 style='color: darkred'> display associative array key and value </h3>";
foreach ($info as $key=>$n){
    echo "<li>{$key}: {$n} </li>";
}


foreach ($names as $i=>$value){
    echo "<li>{$i}: {$value} </li>";
}
















