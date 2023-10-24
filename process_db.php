<?php

$error_fields=array();

if(!(isset($_POST['name']) && !empty($_POST['name']))){
   $error_fields[]="name";
}
if(!(isset($_POST['email']) && filter_input(INPUT_POST , 'email',FILTER_VALIDATE_EMAIL) )){
    $error_fields[]="email";
 }
 if(!(isset($_POST['password']) && strlen($_POST['password']) > 5 )){
    $error_fields[]="password";
 }

 if($error_fields){
   header("Location:index.php?error_fields=". implode("," , $error_fields));
   exit;
 }


 // ESTABLISH CONNECTION
 $conn=mysqli_connect('localhost','root','','shop');

 // GET THE DATA

 $name=mysqli_escape_string($conn,$_POST['name']);
 $email=mysqli_escape_string($conn,$_POST['email']);
 $password=mysqli_escape_string($conn,$_POST['password']);

 $query="INSERT INTO `customers`( `name`, `email`, `password`) VALUES ('$name','$email','$password')";



mysqli_query($conn,$query);
if(mysqli_query($conn,$query)){
    echo"DONE , YOU ARE REGISTERED";
}
else{
    echo $query;
    echo mysqli_error($conn);
}
mysqli_close($conn);





?>
