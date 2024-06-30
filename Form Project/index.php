<?php
$insert = false;
if(isset($_POST['name'])){
$server = "localhost";
$username = "root";
$password = "";
$database = "tripform";

$con = mysqli_connect($server,$username,$password);

if(!$con){
    die("connection to the database due to yhe" .mysqli_connect_error());
}

//echo "success connection database priyanka";

$name = $_POST['name'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$other = $_POST['dt'];
$sql = "INSERT INTO `tripform`.`tripform` (`name`, `age`, `gender`, `email`, `phone`, `other`, `dt`) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$dt', current_timestamp());";
//echo $sql;

if($con->query($sql) == true){
   // echo "successfully inserted";
   $insert=true;
}
else{
    echo "Error : $sql <br> $con->error";
  
}
echo "<script>alert('submit'); </script>";

$con->close();

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Travel form</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Playwrite+MX:wght@100..400&display=swap" rel="stylesheet">
<link rel="stylesheet" href="style.css">
</head>
<body>
    <img class="bg" src="imgtarvle.avif" alt="bg-img">
    <div class="container">
    <h1>Welcome to The  travel With <span class="priH1">Priyanka</span> !!</h1>
    <p>Enter your details and submit the form to conform your participation in your trip with owr team </p>
<?php
if($insert == true){
echo "Thanks for Submitting the form.we are happy to see you joining us for the US trip...";
}
?>
    <form action="" method="post">
        <input type="text" name="Name" id="Name" placeholder="Enter your name...">
        <input type="text" name="Age" id="Age" placeholder="Enter your Age...">
        <input type="text" name="Gender" id="Gender" placeholder="Enter your Gender...">
        <input type="text" name="Email" id="Email" placeholder="Enter your Email...">
        <input type="text" name="Phone" id="Phone" placeholder="Enter your Phone...">
        <textarea name="dt" id="dt" rows="3" cols="50" placeholder="Enter message here"></textarea>
        <button class="btn">Submit</button>
       
    </form>
</div>

<script src="script.js"></>
<!--INSERT INTO `tripform` (`SNO.`, `name`, `age`, `gender`, `email`, `phone`, `other`, `dt`) VALUES ('1', 'pri', '21', 'female', 'priyankakuma@j12gmail.com', '12345678902', 'this is mysql', current_timestamp());-->
</body>
</html>