<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learning PHP</title>
</head>
<body>
    <div class="container">
        this is my PHP website.
        <?php
        echo "<br>";
        echo "hello world using php";
        echo "<br>";
        $variable1 = 10;
        $variable2 = 20;
        echo $variable1+$variable2;
        echo"<br>";
        $var1 = (true and false);
        echo var_dump($var1);
        echo"<br>";
        $var2 = (true or false);
        echo var_dump($var2);
         echo"<br>";
        $var3 = (true xor false);
        echo var_dump($var3);
         ?>
    </div>
</body>
</html>