<?php
	include 'connection.php';
	//code for update
	if(!($_REQUEST["insert"]==""))
		{
				if(!($_REQUEST["u"]==""))
				{		
					$u=$_POST["u"];				
		
					$query4="update tender set ID='$_POST[txtid]',name='$_POST[txtname]',description='$_POST[txtdescription]' where ID=".$_REQUEST['u'].";";				
					
						if(mysql_query($query4))
						{
						echo "<script type='text/javascript'>alert('Record Successfully Updated!');
						window.location='tender.php';
						</script>";
						} 
						else
						{
						echo "<script type='text/javascript'>alert('Error in Query!');
						window.location='tender.php';
					</script>";
						}
				}
			else 
			{
				//code for insert	
				if(!($_REQUEST["insert"]==""))
				{		
					$query="insert into tender(ID,name,description) values ('$_POST[txtid]','$_POST[txtname]','$_POST[txtdescription]');";
					if(!mysql_query($query))
					{
						die("error".mysql_error());
						header("location:tender.php");
					}
					else
					{
					echo "<script type='text/javascript'>alert('Record Successfully Added!');
						window.location='tender.php';
					</script>";
					}
				}
			}
		}
	mysql_close($con);
?>