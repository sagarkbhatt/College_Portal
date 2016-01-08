<?php
	include 'connection.php';
	//code for update
	if(!($_REQUEST["insert"]==""))
		{
				if(!($_REQUEST["u"]==""))
				{		
					$name=$_POST["txtname"];
					$designation=$_POST["txtdesignation"];
					$eduqualificat=$_POST["txteduqualificat"];
					$exp=$_POST["txtexperience"];
					$contactno=$_POST["txtcontactno"];
					$email=mysql_real_escape_string($_POST['txtemailid']);								
					$u=$_POST["u"];				
		
					$query4="update placement set name='$_POST[txtname]',designation='$_POST[txtdesignation]',eduqualificat='$_POST[txteduqualificat]',experience='$_POST[txtexperience]',contactno='$_POST[txtcontactno]',emailid='$email' where id=".$_REQUEST['u'].";";				
					
						if(mysql_query($query4))
						{
						echo "<script type='text/javascript'>alert('Record Successfully Updated!');
						window.location='placement.php';
						</script>";
						} 
						else
						{
						echo "<script type='text/javascript'>alert('Error in Query!');
						window.location='placement.php';
					</script>";
						}
				}
			else 
			{
				//code for insert	
				if(!($_REQUEST["insert"]==""))
				{		
					$email=mysql_real_escape_string($_POST['txtemailid']);
					$query="insert into placement(name,designation,eduqualificat,experience,emailid,contactno) values ('$_POST[txtname]','$_POST[txtdesignation]','$_POST[txteduqualificat]','$_POST[txtexperience]','$email','$_POST[txtcontactno]');";
					if(!mysql_query($query))
					{
						die("error".mysql_error());
						header("location:placement.php");
					}
					else
					{
					echo "<script type='text/javascript'>alert('Record Successfully Added!');
						window.location='placement.php';
					</script>";
					}
				}
			}
		}
	mysql_close($con);
?>