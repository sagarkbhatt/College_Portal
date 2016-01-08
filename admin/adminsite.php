<?php
session_start();
if(!isset($_SESSION['myusername'])){
header("location:login.html");
}
?>
<!Doctype html>
<html lang="en">
	<head>
    	<link rel="stylesheet" type="text/css" href="../css/style.css">
        <link rel="stylesheet" type="text/css" href="../css/style_1.css">
        <link rel="stylesheet" type="text/css" href="../css/cssTable.css">
        <link rel="stylesheet" type="text/css" href="../css/admintable.css">
        <link rel="stylesheet" type="text/css" href="../css/cssbtn.css">
        <link rel="stylesheet" type="text/css" href="../css/cssbtnadmin.css">
        <script type='text/javascript' src='../Jquery/jquery-1.8.3.min.js'></script>
		<script type='text/javascript' src='../Jquery/menu.js'></script>
        <script src='../Jquery/jquery-1.8.3.min.js'></script>
		
   		<meta charset="utf-8">
    	<title>Welcome to Dr. S. &amp; S. S. Ghandhy College of Engineering &amp; Technology,Surat</title>
		<script type='text/javascript'>
		function destroySession(){
        $.ajax({
           url: "logout.php"
        });
     }
		</script>
    </head>
    
    <body bgcolor="#ffffff" onbeforeunload='destroySession()'>
    	<div class="container">
        	<div class="logo">
				<iframe src="../logo/logo.html" width="960" height="150" frameborder="0" scrolling="no" allowTransparency="true"></iframe>
            </div>
            
            <div class="info">
            	
                <div class="space">
                </div>
                <div class="content">
                <br><br>
				<a href="logout.php" class="btnlogout" style="margin-left:680px;">Logout</a>
				<br><br><br><br>
				<h2>Welcome to Dr. S. & S. S. Ghandhy College Of Diploma Engineering And Technology</h2>
				<br><br> 
				<center><h1>Administration Site</h1></center>
				<br><br><br>   
				<table align="center" style="border-width:0px;background-color:white;"><tr><td>
                <a href="insert.php" class="cssbtnadmin" >Staff Detail</a></td>
				<td>
                <a href="news.php" class="cssbtnadmin" >News Detail</a></td>
				<td>
                <a href="placement.php" class="cssbtnadmin" >Placement Detail</a>
				</td>
				</tr>
				<tr>
				<td>
                <a href="tender.php" class="cssbtnadmin">Tender Detail</a></td>
				
				<td>
                <a href="pwd.php" class="cssbtnadmin" >Project Detail</a></td>
				<td>
                <a href="principlesmsg.php" class="cssbtnadmin" >Principle's Message</a></td>
				</tr>
				<tr>
				<td colspan="3" width="100%" style="text-align:right;">
				<a href="change_password.php"><b>Change password</b></a>
				</td>
				</tr>
				
				
				</table>
				<br>
				<br>
				<br>
				
				
            	</div>
                <div class="space">
                </div>
            </div>
         
			<div class="copyright">
				<center><b>Copyright © 2014 Dr. S. & S. S. Ghandhy College of Engineering & Technology,Surat</b\></center>
			</div>
        </div>
    </body>
</html>
