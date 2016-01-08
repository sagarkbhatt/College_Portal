<?php

$host="sql207.0fees.us"; // Host name 
$username="0fe_14912186"; // Mysql username 
$password="mywork123456"; // Mysql password 
$db_name="0fe_14912186_college"; // Database name 


// Connect to server and select databse.
$con = mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");
?>