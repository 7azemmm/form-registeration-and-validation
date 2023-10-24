<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
$errorarr=array();
if(isset($_GET['error_fields'])){
 $errorarr=explode(",", $_GET['error_fields']);
}
?>
   <form action="process_db.php" method="post">
    <label for="name"> Name:</label>
    <input type="text" name="name" id="name" ><?php if(in_array("name",$errorarr)) echo "please enter a name"; ?> <br>
    <label for="email"> Email</label>
    <input type="email" name="email" id="email"><?php if(in_array("email",$errorarr)) echo "please enter an email"; ?> <br>
    <label for="password"> password</label>
    <input type="password" name="password" id="password"> <?php if(in_array("password",$errorarr)) echo "please enter a proper password"; ?> <br>
    <label for="gender"> gender</label>
    <input type="radio" name="gender" value="male"> Male
    <input type="radio" name="gender" value="female"> Female
    <input type="submit" name="submit" value="register">
   
 
   </form>

</body>
</html>