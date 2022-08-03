
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Day01</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

</head>
<body>
    

    <div class="container"> 

        <h1> Hello world from PHP file </h1>
        <p> In the php file you can write , html , css , js </p>

        <p> You can wirte php script anywhere </p> 

        <?php 

            echo "This is my first php line"; 

        ?>

        <h2>-----------------------------------------</h2>


        <?php

            // echo "hello <br>"; 

            // echo 'world';

            // echo "hello ";
            // echo "<br>"; 
            // echo 'world';

            // echo "<h2>-----------------------------------------</h2>";
            // echo "<br>comments in php "; 
            // this is a comment 
            # this is another comment 
            /**
             * this 
             * is 
             * a multi-line comment
            */



        ?>

        <h1> Go dymanic </h1>

        <?php 

            echo "Now is "; 

            echo date('H:i , jS F Y');

            var_dump($_GET);
        ?>


























    </div>
<!--    <script>-->
<!---->
<!--        alert("Hello World,,,,,,,,,,,,,,,,,,,,,,,,,,")-->
<!--    </script>-->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>


