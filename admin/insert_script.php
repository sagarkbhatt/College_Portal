<?php
	include 'connection.php';
	//code for update
	if(!($_REQUEST["insert"]==""))
	{
			if(!($_REQUEST["u"]==""))
			{		
				$id=$_POST["id"];
				$name=$_POST["name"];
				$gender=$_POST["gender"];
				$qua=$_POST["qualification"];
				$exp=$_POST["exp"];
				$post=$_POST["post"];
				$branch=$_POST["branch"];
				$email=mysql_real_escape_string($_POST['emailid']);								
				$u=$_POST["u"];
				$query4="update $_POST[branch] set id='$_POST[id]',name='$_POST[name]',gender='$_POST[gender]',qualification='$_POST[qualification]',experience='$_POST[exp]',post='$_POST[post]',emailid='$email' where id=".$_REQUEST['u'].";";				
				
					if(mysql_query($query4))
					{
					echo "<script type='text/javascript'>alert('Record Successfully Updated!');
					window.location='insert.php';
				</script>";
					} 
					else
					{
						echo "<script>alert('Error IN QUERY')</script>";
						//header("location:insert.php");			
					}
			}
		else 
		{
			//code for insert	
			if(!($_REQUEST["insert"]==""))
			{		
				$email=mysql_real_escape_string($_POST['emailid']);
				$query="insert into $_POST[branch](id,name,gender,qualification,experience,post,emailid) values ('$_POST[id]','$_POST[name]','$_POST[gender]','$_POST[qualification]','$_POST[exp]','$_POST[post]','$email');";
				if(!mysql_query($query))
				{
					die("error".mysql_error());
					header("location:insert.php");
				}
				else
				{
				echo "<script type='text/javascript'>alert('Record Successfully Added!');
					window.location='insert.php';
				</script>";
				}
			}
		}
	}
	mysql_close($con);
?>