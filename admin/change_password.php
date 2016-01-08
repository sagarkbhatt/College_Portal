<?php
session_start();
if(!isset($_SESSION['myusername'])){
header("location:login.html");
}
?>
<?php
$_SESSION["userId"] = "1";
include 'connection.php';
if(count($_POST)>0) {
$result = mysql_query("SELECT * from admin WHERE ID='" . $_SESSION["userId"] . "'");
$row=mysql_fetch_array($result);
if($_POST["currentPassword"] == $row["pass"]) {
mysql_query("UPDATE admin set pass='" . $_POST["newPassword"] . "' WHERE ID='" . $_SESSION["userId"] . "'");
$message = "Password Changed";
} else $message = "Current Password is not correct";
}
?>
<html>
<head>
<title>Change Password</title>
<link rel="stylesheet" type="text/css" href="styles.css" />

<link rel="stylesheet" type="text/css" href="../css/cssbtn.css">
<script>
function validatePassword() {
var currentPassword,newPassword,confirmPassword,output = true;

currentPassword = document.frmChange.currentPassword;
newPassword = document.frmChange.newPassword;
confirmPassword = document.frmChange.confirmPassword;

if(!currentPassword.value) {
	currentPassword.focus();
	document.getElementById("currentPassword").innerHTML = "required";
	output = false;
}
else if(!newPassword.value) {
	newPassword.focus();
	document.getElementById("newPassword").innerHTML = "required";
	output = false;
}
else if(!confirmPassword.value) {
	confirmPassword.focus();
	document.getElementById("confirmPassword").innerHTML = "required";
	output = false;
}
if(newPassword.value != confirmPassword.value) {
	newPassword.value="";
	confirmPassword.value="";
	newPassword.focus();
	document.getElementById("confirmPassword").innerHTML = "not same";
	output = false;
} 	
return output;
}
</script>
</head>
<body bgcolor="#EDE9E9" >
<form name="frmChange" method="post" action="" onSubmit="return validatePassword()">
<table align="center">
<tr>
  <td>
  <?php	include 'adminpanel.php'; ?>
  </td>
  </tr>
  </table>
<br/><br/>
<div style="width:500px; margin-left:auto; margin-right:auto; ">

<div class="message"><?php if(isset($message)) { echo $message; } ?></div>
<table border="0" cellpadding="10" cellspacing="0" width="500" align="center" class="tblSaveForm">
<tr class="tableheader">
<td colspan="2">Change Password</td>
</tr>
<tr>
<td width="40%"><label>Current Password</label></td>
<td width="60%"><input type="password" name="currentPassword" class="txtField"/><span id="currentPassword"  class="required"></span></td>
</tr>
<tr>
<td><label>New Password</label></td>
<td><input type="password" name="newPassword" class="txtField"/><span id="newPassword" class="required"></span></td>
</tr>
<td><label>Confirm Password</label></td>
<td><input type="password" name="confirmPassword" class="txtField"/><span id="confirmPassword" class="required"></span></td>
</tr>
<tr>
<td colspan="2"><input type="submit" name="submit" value="Submit" class="btnSubmit"></td>
</tr>

</table>

</div>
</form>
</body></html>