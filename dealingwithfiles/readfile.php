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
    # when you try to open file with mode read (r) if the file is not exists --> warining
    $fileobj=fopen("myinfo.txt", "r"); #resource object --> that you can use to handle the file operartions
    var_dump($fileobj);

    if($fileobj){
        ### I want to read data from the file
        $f_size=filesize("myinfo.txt");  # return with file size in bytes
        ### fread($resource_obj , filesize in byte)
//        # 1- read file content into one string
//        $filedata=fread($fileobj, $f_size); # return with the file conent in a string
//        var_dump($filedata);
        ### to close the file
//        echo $filedata;

            ############## to read the file line by line
//            $lines = fgets($fileobj); # read first line
//            var_dump($lines);
//            $lines = fgets($fileobj); # read first line
//            var_dump($lines);
//
//            while (!feof($fileobj)){
//                $line = fgets($fileobj); # read first line
//                var_dump($line);
//            }
//
//
//        fclose($fileobj);

    }


    #################3 to read file into an array --> each line as element in the array

    $lines = file("myinfo.txt");
    var_dump($lines);