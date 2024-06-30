<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 <h1>PHP (Hypertext preprocessor)</h1>
    <?php
  define('Py',2002);
    echo "In PHP, a variable starts with the $ sign";

    $var1=32;
    $var2=21;
    echo"<br>";//for new line
    echo $var=$var1+$var2;

    $newvar=$var1;
     $newvar+=1;
     echo"<br/>";
     echo $newvar;

     echo"<br/>";
     echo Py;
     echo "comparision oprator 4==6";
     echo"<br/>";

     echo var_dump(4==6);
     echo var_dump(4!=6);
     echo var_dump(4<=6);
     echo var_dump(4>=6);

     
     echo"<br/>";
     echo Py;
     echo"This is data type in php";
     /*string
     integer
     boolean
     float
     array
     objet
     */
    echo"<br/>";

    $str="This is stringg";
    echo var_dump($str);
    echo"<br/> this is int <br/>";
    $var=45;
    echo var_dump($var);
     
    //constant, use the define() function.
//define(name, value, case-insensitive);

echo"constant uses";

echo Py;
    ?>
</body>
</html>