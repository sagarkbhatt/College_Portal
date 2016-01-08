<?php
session_start();
if(!isset($_SESSION['myusername'])){
header("location:login.html");
}
?>
<?php
	include_once("connection.php");
//for insert
	if(isset($_POST["id"]))
	{
		if(!($_POST["u"]==""))
				{
					
					$id=$_POST["id"];
					$shortmsg=$_POST["shortmsg"];
					$message=$_POST["message"];
					$u=$_POST["u"];
					$query4="update msgfromprinci set id='$id',shortmsg='$shortmsg',message='$message' where id='$u'";
					

					if($res4=mysql_query($query4))
					{
						echo "<script type='text/javascript'>
						alert('Record Successfully Updated!');
							window.location='principlesmsg.php';
							</script>";
					} 
					else
					{
						echo "<script>alert('Error')</script>";
						header("location:principlesmsg.php");
					}
				}
		else
		{
			$id=$_POST["id"];
			$shortmsg=$_POST["shortmsg"];
			$message=$_POST["message"];
			$query="insert msgfromprinci set id ='$id',shortmsg='$shortmsg',message='$message'";
			
			if($res=mysql_query($query))
			{
			echo "<script type='text/javascript'>alert('Record Successfully Added!');
					window.location='principlesmsg.php';
				</script>";
			}
			else
			{
			echo "<script>alert('Error line 18')</script>";
			}
		}
					
	}

	
?>

<!Doctype html>
<html lang="en">
	<head>
    	<link rel="stylesheet" type="text/css" href="../css/style.css">
        <link rel="stylesheet" type="text/css" href="../css/style_1.css">
        <link rel="stylesheet" type="text/css" href="../css/validation.css">
        <link rel="stylesheet" type="text/css" href="../css/cssTable.css">
        <link rel="stylesheet" type="text/css" href="../css/adminTable.css">
        <link rel="stylesheet" type="text/css" href="../css/cssbtn.css">
        <script type='text/javascript' src='../Jquery/jquery-1.8.3.min.js'></script>
		<script type='text/javascript' src='../Jquery/menu.js'></script>
        <script type='text/javascript' src='../Jquery/princi-script.js'></script>
        <script src='../Jquery/jquery-1.8.3.min.js'></script>
		
   		<meta charset="utf-8">
    	<title>Welcome to Dr. S. &amp; S. S. Ghandhy College of Engineering &amp; Technology,Surat</title>
		
    </head>
	
    <?php
  	
		$id="";
		$shortmsg="";
		$message="";
		//code for delete record
      if(isset($_GET["u"]))
	  {
		  if(isset($_GET["del"]))
		{
		  $u_id=$_REQUEST["u"];
		  $query2="delete from msgfromprinci where id='$u_id'";
		  if(mysql_query($query2)){
		  
		  echo "<script type='text/javascript'>alert('Record Successfully Deleted!');
					window.location='principlesmsg.php';
				</script>";
		  }
		}
		}
		//code for filling textbox
		
		if(isset($_REQUEST["u"]))
		  
		  {
		  
		  $u_id=$_REQUEST["u"];
		  $query3="select * from msgfromprinci where id='$u_id'";
		 
		  $res3=mysql_query($query3);
		  $row;
		  while($row=mysql_fetch_array($res3))
		  {
			  $id=$row["id"];
			  $shortmsg=$row["shortmsg"];
			  $message=$row["message"];
		  }
	  }
	  
	  
		
	  
	 ?>
	 <!--End of code-->
    <body bgcolor="#5A5A5A">
    	<div class="container">
        	<div class="logo">
				<iframe src="../logo/logo.html" width="960" height="150" frameborder="0" scrolling="no" allowTransparency="true"></iframe>
            </div>
            
            <div class="info">
            	
                <div class="space">
                </div>
                <div class="content">
                <?php include 'adminpanel.php'; ?>
				<!-- Form for save,update--->
			
                <form method="POST" action="principlesmsg.php" id="frprinciple">
                    <table align="center" cellspacing="0" style="margin-bottom:10px;">
                        <tr>
	                        <td colspan="3"><font size="+3"><center>Message From Principle's Desk</center></font></td>
                        </tr>
                        <tr>
                           	<td colspan="3" style="text-align:left; color:#F00"><font size="2">Fields Marked With * Are Mandatory !</font></td>
                        </tr>
                        <tr>
                        	<td>ID</td>
                        	<td><input type="text" name="id" id="id" value="<?php echo $id?>"/></td>
                            <td style="min-width:150px;"><span class="val_id"><strong>*</strong></span></td>
                        </tr>
						<tr>
                        	<td>Short Message</td>
                        	<td><textarea name="shortmsg" id="shortmsg" cols="30" rows="2" maxlength="70"><?php echo $shortmsg?></textarea></td>
							<td><span class="val_shortmsg"><strong>*</strong></span></td>
                        </tr>
						<tr>
                        	<td>Whole Message</td>
                        	<td><textarea name="message" id="messsge" cols="30" rows="5" maxlength="1000"><?php echo $message?></textarea></td>
							<td><span class="val_Message"><strong>*</strong></span></td>
                        </tr>
                        <tr>
                        	<td colspan="2"><input type="submit" id="save" name="save" value="Save Record" /></td>
							<td><input type="hidden" id="update" name="u" value="<?php echo $id?>" /></td>
                        </tr>
                    </table>
               	</form>
               <!--- End of Form-->
    			
				<br><br><br>
                
				<!--- Table for Edit--->	
				<form method="get">
                <table align="center" cellspacing="0" style="margin-bottom:10px;">
                	<tr>
						<td width="30px"></td>
                        <td width="100px">ID.</td>
                        <td width="350px">Short Message</td>
						<td width="350px">Whole Message</td>
                     </tr>
              
					<?php
					 $query1="select * from msgfromprinci";
				     $res1=mysql_query($query1);
                      while($row1=mysql_fetch_array($res1))
                      {
						  
                    ?>

					<tr>
                    	<td><input type="radio" name="u" value="<?php echo $row1['id'];?>" </td>                     
                        <td><?php echo $row1["id"];?></td>
                        <td style="max-width:200px;text-align:justify"><?php echo $row1["shortmsg"];?></td>
                        <td style="max-width:300px;text-align:justify"><?php echo $row1["message"];?></td>
                    </tr>
					
					
			
					
					<?php
					  }
					?>
				<tr >
				<td></td>
                <td></td>
				<td><input type="submit" value="Edit Record" name=""></td>
				<td><input type="submit" value="Delete Record" name="del"></td>
				</tr>
				
				</table>
				</form>
				
			<br><br><br>
				
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
