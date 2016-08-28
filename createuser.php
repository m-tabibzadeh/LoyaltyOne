<?php

$host="loyaltyone-db.cyulwrzcj76k.us-west-2.rds.amazonaws.com:3306"; // Host name
$username="loyaltyone"; // Mysql username
$password="loyaltyone"; // Mysql password
$db_name="login_user"; // Database name
$tbl_name="auth"; // Table name

// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");

// username and password sent from form
$myusername=$_POST['email'];
$mypassword=$_POST['pass'];

// Create new user in database

$sql="insert into auth (user, pass) values ('$myusername' ,'$mypassword')";
mysql_query($sql);

header("location:index.html");

?>
