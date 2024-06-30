<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .container{
            background: #790;
            width: 80%;
            margin:auto;
            padding: 20px;
        }
    </style>
</head>
<body>

    <div class="container">
    <h1>conditonal uses if else statement</h1>
        this is container
        <?php
        
        $age=7;
        echo "<br/>";
        if($age>18){
            echo"you can go party now";

        }
        else if ($age==7) {
            echo"you are 7 years old";
           
        }
        else{
            echo"can't go party";
        };

        echo "<br/> array uses<br/> ";

        $item=array("banana","apple","car");
        
         echo $item[0];
         echo count($item);

         echo "<br/><br/><br/> LOOP Uses here <br/>";
          $a=1;
          while ($a <= 10) {
            # code...
            echo "<br/> this is while loop=";
            echo $a;
            $a++;
          }

          echo "<br/><br/><br/> LOOP using array <br/>";
            
          $a=0;
          while ($a < count($item)) {
            # code...
            echo "<br/> this is while loop using array=";
            echo $item[$a];
            $a++;
          }

          echo "<br/><br/><br/> LOOP using array <br/>";
          $b=0;
          do {
            echo"<br>this is Do while loop";
            $b++;
            # code...
          } while ($b <= 10);

          echo "<br/><br/><br/> LOOP using array <br/>";
           $i;
          for ($i=0; $i <4 ; $i++) { 
            # code...
            echo"<br>helllo this is Do while Loop";
            echo $i;
          }

          echo "<br/><br/><br/> For Each loop <br/>";

          $itemeach=array("hello","babay","mahi");

          foreach ($itemeach as $value) {
            # code...
            echo "<br>This is for each=";
            echo $value;
          }
         
          echo "<br/><br/><br/> Function uses <br/>"; 

          function hello($numbers){
             echo "hello pryanka";
             echo $numbers;
          }

          hello(34);
          hello(94);
        ?>
    </div>
</body>
</html>