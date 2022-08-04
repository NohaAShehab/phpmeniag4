<?php


ini_set('display_errors', 1); ini_set('display_startup_errors', 1); error_reporting(E_ALL);
echo '
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        <link rel="stylesheet" href=../style.css>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

    ';
echo "<div class='container'>";

echo "<h1> Read from a file  </h1>";
### to deal with file
### 1- open file
### fopen(filename, mode_to_open_the_file)
### r---> read from file, w--> write into a file , a --> append data to the file
# when you try to open file with mode write (w) if the file is not exists -->
# PHP Will try to create it ,,,
# if the file exists --> it will open the file for writing starting from the begining of the file
## (remove old data )
//$fileobj=fopen("mycv.txt", "w");
//#resource object --> that you can use to handle the file operartions
//var_dump($fileobj);
//
//if($fileobj){
//    fwrite($fileobj, "My name is Ahmed\n");
//    fwrite($fileobj, "I studies at faculty of engineering".PHP_EOL);
//    fwrite($fileobj, "I lives in Fayom");
//
//    fclose($fileobj);
//}

#################### append
# when you try to open file with mode write (a) if the file is not exists -->
# PHP Will try to create it ,,,
# if the file exists --> it will open the file for writing starting from the end of the file
## (keep old data )
$fileobj=fopen("mycv.txt", "a");
fwrite($fileobj, "testing new line\n");

fclose($fileobj);


var_dump(file("mycv.txt"));

