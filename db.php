<?php

//echo $_POST['password'];

$conn=mysqli_connect("localhost","root","","shop");
$query="SELECT * FROM `customers`"; // takes two parameters connection + query 
$result=mysqli_query($conn,$query);

while($row=mysqli_fetch_assoc($result)){
    echo "ID:" .$row['id']."<br/>";
    echo "name:" .$row['name']."<br/>";
    echo "username:" .$row['username']."<br/>";
    echo "email:" .$row['email']."<br/>";
    echo "password:" .$row['password']."<br/>";
    echo str_repeat("*",50)."<br/>";

}

mysqli_free_result($result);
mysqli_close($conn);

?>