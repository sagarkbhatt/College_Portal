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
        <link rel="stylesheet" type="text/css" href="../css/validation.css">
		<link rel="stylesheet" type="text/css" href="../css/style_1.css">
		<link rel="stylesheet" type="text/css" href="../css/cssTable.css">
		<link rel="stylesheet" type="text/css" href="../css/adminTable.css">
		<link rel="stylesheet" type="text/css" href="../css/cssbtn.css">
		<script type='text/javascript' src='../Jquery/jquery-1.8.3.min.js'></script>
		<script type='text/javascript' src='../Jquery/menu.js'></script>
		<script src='../Jquery/jquery-1.8.3.min.js'></script>
		<script type="text/javascript" src="../Jquery/placement-script.js"></script>
		<meta charset="utf-8">
		<title>Welcome to Dr. S. &amp; S. S. Ghandhy College of Engineering &amp; Technology,Surat</title>
            
	</head>
	<?php
		include 'connection.php';
		$id="";
		$name="";
		$designation="";
		$eduqualification="";
		$experience="";
		$emailid="";
		$contactno="";
		if(isset($_REQUEST["update"]))	  //Assign values While Editing Redcords
		{
			$u_id=$_GET["radio"];
			$query3="select * from placement where ID='$u_id'";
			$result="";			 
			if($result=mysql_query($query3))
			{
				if($row1=mysql_fetch_array($result))
				{
					$id=$row1["ID"];
					$name=$row1["name"];
					$designation=$row1["designation"];
					$eduqualification=$row1["eduqualificat"];
					$experience=$row1["experience"];
					$contactno=$row1["contactno"];
					$emailid = $row1["emailid"];
				}
				else
				{
					echo "<script>alert('Something went wrong..,Please try again!')</script>";
				}
			}
		}	  
	?>
	<?php
    //code for delete record
		if(isset($_REQUEST["delete"]))
		{ 
			{
				$u_id=$_REQUEST["radio"];
				$query2="delete from placement where ID=$u_id";
				if(mysql_query($query2))
				{
					echo "<script>alert('Record Successfully Deleted!');</script>";
				}
				else
				{
					echo "<script>alert('Error');</script>";
				}
			}
		}
    ?>
    <body bgcolor="#5A5A5A">
    	<div class="container">
        	<div class="logo">
				<iframe src="../logo/logo.html" width="960" height="150" frameborder="0" scrolling="no" allowTransparency="true"></iframe>
            </div>     
            <div class="info">
            	
                <div class="space">
                </div>
                <div class="content">
                    
                    	<?php	include 'adminpanel.php'; ?>
                    
                    <form action="placement_script.php" method="post" id="frmplacement" >
                        <table align="center" cellspacing="0" style="margin-bottom:10px;">
                            <tr>
                                <td colspan="3" style="text-align:center"><font size="+3" >Placements</font></td>
                            </tr>
                            <tr>
                            	<td colspan="3" style="text-align:left; color:#F00"><font size="2">Fields Marked With * Are Mandatory !</font></td>
                            </tr>
                            <tr>
                        	    <td>Name</td>
                            	<td><input type="text" name="txtname" value="<?php echo $name?>" /></td>
	                            <td style="min-width:150px;"><span class="val_name"><strong>*</strong></span></td>
    	                    </tr>
                            <tr>
                                <td>Designation</td>
                                <td><input type="text" name="txtdesignation" value="<?php echo $designation?>" />
                                <td><span class="val_designation"><strong>*</strong></span></td>
                            </tr>
                            <tr>
                                <td>Education Qualification</td>
                                <td><input type="text" name="txteduqualificat" value="<?php echo $eduqualification?>" /></td>
                                <td><span class="val_eduqualificat"><strong>*</strong></span></td>
                            </tr>
                            <tr>
                                <td>Experience</td>
                                <td><input type="text" name="txtexperience" value="<?php echo $experience?>" /></td>
                                <td><span class="val_experience"><strong>*</strong></span></td>
                            </tr>
                            <tr>
                                <td>Email ID</td>
                                <td><input type="text" name="txtemailid" value="<?php echo $emailid?>" /></td>
                                <td><span class="val_emailid"><strong>*</strong></span></td>
                            </tr>
                            <tr>
                                <td>Contact No.</td>
                                <td><input type="text" name="txtcontactno" value="<?php echo $contactno?>" /></td>
                                <td><span class="val_contactno"><strong>*</strong></span></td>
                            </tr>
                            <tr>
                                <td><input type="submit" name="insert" value="Save Record "></td>
                                <td colspan="2"><input type="hidden" name="u" value="<?php echo $id?>"></td>
                            </tr>
                        </table>
                    </form>
                    <br>
                    <br>
                    <br>
                                   
                    <form name="update_delete" action="">
                        <table  width="100%">
                            <tr>
                                <td></td>
                                <td>Name</td>
                                <td>Designation</td>
                                <td>Education Qualification</td>
                                <td>Experience</td>
                                <td>Email-ID</td>
                                <td>Contact No.</td>
                            </tr>
                            <?php
                                include 'connection.php';
                                $query="select * from placement";                
                                $res1=mysql_query($query);                                                                                 
                                while($row1=mysql_fetch_array($res1))
				                {
                            ?>
                            <tr>
                                <td><input type="radio" name="radio" value="<?php echo $row1["ID"];?>"</td>                
                                <td><?php echo $row1["name"];?></td>
                                <td><?php echo $row1["designation"];?></td>
                                <td><?php echo $row1["eduqualificat"];?></td>
                                <td><?php echo $row1["experience"];?></td>
                                <td><?php echo $row1["emailid"];?></td>
                                <td><?php echo $row1["contactno"];?></td>
                                
                            </tr>
                            <?php
                                 }
                            ?>
                            <tr>
                                <td colspan="4"><center><input type="submit" value="Edit Record" name="update"/></center></td>
                                <td colspan="3"><center><input type="submit" value="Delete Record" name="delete"/></center></td>
                            </tr>   
                        </table>
                    </form>
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
