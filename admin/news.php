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
					$text=$_POST["text"];
					$link=$_POST["link"];
					$color=$_POST["color"];
					$u=$_POST["u"];
					$query4="update news set id='$id',text='$text',link='$link',color='$color' where id='$u'";
					

					if($res4=mysql_query($query4))
					{
						echo "<script type='text/javascript'>alert('Record Successfully Updated!');
							window.location='news.php';
							</script>";
					} 
					else
					{
						echo "<script>alert('Error')</script>";
						header("location:news.php");
					}
				}
		else
		{
			$id=$_POST["id"];
			$text=$_POST["text"];
			$link=$_POST["link"];
			$color=$_POST["color"];
			$query="insert news set id='$id',text='$text',link='$link',color='$color'";
			
			if($res=mysql_query($query))
			{
			echo "<script type='text/javascript'>alert('Record Successfully Added!');
					window.location='news.php';
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
        <script type='text/javascript' src='../Jquery/news-script.js'></script>
        <script src='../Jquery/jquery-1.8.3.min.js'></script>
		
   		<meta charset="utf-8">
    	<title>Welcome to Dr. S. &amp; S. S. Ghandhy College of Engineering &amp; Technology,Surat</title>
		
    </head>
	
    <?php
  	
		$id="";
		$text="";
		$link="";
		$color="";
		//code for delete record
      if(isset($_GET["u"]))
	  {
		  if(isset($_GET["del"]))
		{
		  $u_id=$_REQUEST["u"];
		  $query2="delete from news where id='$u_id'";
		  if(mysql_query($query2)){
		  
		  echo "<script type='text/javascript'>alert('Record Successfully Deleted!');
					window.location='news.php';
				</script>";
		  }
		}
		}
		//code for filling textbox
		
		if(isset($_REQUEST["u"]))
		  
		  {
		  
		  $u_id=$_REQUEST["u"];
		  $query3="select * from news where id='$u_id'";
		 
		  $res3=mysql_query($query3);
		  $row;
		  while($row=mysql_fetch_array($res3))
		  {
			  $id=$row["id"];
			  $text=$row["text"];
			  $link=$row["link"];
			  $color=$row["color"];
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
			
                <form method="POST" action="news.php" id="frmnews">
                    <table align="center" cellspacing="0" style="margin-bottom:10px;">
                        <tr>
	                        <td colspan="3"><font size="+3"><center>News</center></font></td>
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
                        	<td>News Text</td>
                        	<td><input type="text" name="text" id="text" value="<?php echo $text?>"/></td>
							<td><span class="val_text"><strong>*</strong></span></td>
                        </tr>
                        <tr>
                        	<td>News Link</td>
                        	<td><input type="text" name="link" id="link" value="<?php echo $link?>"/></td>
							<td><span class="val_link"><strong>*</strong></span></td>
                        </tr>
                        <tr>
                        	<td>Link Color</td>
                        	<td>
                            	<select name="color">
									<option value="">--Select Any Color--</option>
                                    <option value="red" <?php if($color == "red") { ?> selected="selected" <?php } ?> >Red</option>
                                    <option value="blue" <?php if($color == "blue") { ?> selected="selected" <?php } ?>>Blue</option>
                                    <option value="green" <?php if($color == "green") { ?> selected="selected" <?php } ?>>Green</option>
                                    <option value="yellow" <?php if($color == "yellow") { ?> selected="selected" <?php } ?>>Yellow</option>
                                </select> 
                            </td>
							<td><span class="val_color"><strong>*</strong></span></td>
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
                        <td width="350px">News Text</td>
						<td width="350px">News Link</td>
                        <td width="350px">Link Color</td>
                     </tr>
              
					<?php
					 $query1="select * from news";
				     $res1=mysql_query($query1);
					 while($row1=mysql_fetch_array($res1))
                      {
						  
                    ?>

					<tr>
                    	<td><input type="radio" name="u" value="<?php echo $row1['id'];?>" </td>                     
                        <td><?php echo $row1["id"];?></td>
                        <td><?php echo $row1["text"];?></td>
                        <td><?php echo $row1["link"];?></td>
                        <td><?php echo $row1["color"];?></td>
                    </tr>
					
					
			
					
					<?php
					  }
					?>
				<tr >
				<td></td>
				<td colspan="2"><input type="submit" value="Edit Record" name=""></td>
				<td colspan="2"><input type="submit" value="Delete Record" name="del"></td>
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
