<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>A string is a sequence of characters, like "Hello world!".</h1>

    <?php
    $str="This priyanka";
    echo $str;

    $lenn=strlen($str);
    echo "This is length of This =".$lenn;
    echo"<br>";
    echo "This is length of This =".strrev($str);
    echo "This is length of This =".strpos($str,"priyanka");
    echo"<br>";
    echo "This is replace of This =".str_replace($str ,"pri","shriyanka");



    ?>
</body>
</html>