<?php

//$host="localhost"; // Host name 
/*$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="college"; // Database name 


// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");
*/
include 'connection.php';
// username and password sent from form 
$myusername=$_POST['txtusername']; 
$mypassword=$_POST['txtpass']; 
$tbl_name="admin"; // Table name 
// To protect MySQL injection 
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myusername = mysql_real_escape_string($myusername);
$mypassword = mysql_real_escape_string($mypassword);
$sql="SELECT * FROM $tbl_name WHERE username='$myusername' and pass='$mypassword'";
$result=mysql_query($sql);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1){

session_start();

$_SESSION['myusername']=$myusername;
$_SESSION['password']=$mypassword;
 
header("location:adminsite.php");
}
else {
header("location:login.html");
}
?>