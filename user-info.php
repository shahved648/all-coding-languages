<?php
session_start();
$connection = mysqli_connect('localhost','root'); 
if ($connection) {
	echo 'Connection Successful';
}

else {
	echo'No connection';
}

mysqli_select_db($connection,'userinfodata');

$user = $_POST['user'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$comments = $_POST['comments'];

$query = "insert into userdata (user,email,mobile,comment)
values('$user','$email','$mobile','$comments')";

mysqli_query($connection,$query);




?>