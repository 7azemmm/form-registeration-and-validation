<?php

//echo $_POST['password'];

$conn=mysqli_connect('localhost','root','','shop');
$query="SELECT * FROM `customers`"; // takes two parameters connection + query 
$result=mysqli_query($conn,$query);

while($row=mysqli_fetch_assoc($result)){
    echo "ID:" .row['id']."<br/>";
    echo "name:" .row['name']."<br/>";
    echo "username:" .row['username']."<br/>";
    echo "email:" .row['email']."<br/>";
    echo "password:" .row['password']."<br/>";

}


/*if (isset($_POST['email']) && !empty($_POST['email'])){
    echo $_POST['email'];
}else{
    echo "enter an email please";
}*/



?>