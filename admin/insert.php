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
		<script type="text/javascript" src="../Jquery/staff-script.js"></script>
		<meta charset="utf-8">
		<title>Welcome to Dr. S. &amp; S. S. Ghandhy College of Engineering &amp; Technology,Surat</title>
            
	</head>
	<?php
		include 'connection.php';
		$id="";
		$name="";
		$gender="";
		$qualification="";
		$experience="";
		$post="";
		$emailid="";
		$branch="";
		if(isset($_REQUEST["update"]))	  //Assign values While Editing Redcords
		{
			$u_id=$_GET["radio"];
			$branch=$_REQUEST['hidden'];
			$query3="select * from $branch where id='$u_id'";
			$result="";			 
			if($result=mysql_query($query3))
			{
				if($row1=mysql_fetch_array($result))
				{
					$id=$row1["id"];
					$name=$row1["name"];
					$gender=$row1["gender"];
					$qualification=$row1["qualification"];
					$experience=$row1["experience"];
					$post=$row1["post"];
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
				$branch=$_REQUEST["hidden"];
				$query2="delete from $branch where id=$u_id";
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
                    <br>
                    <form action="insert_script.php" method="post" id="frmstaff" >
                        <?php	include 'adminpanel.php'; ?>
						<table align="center" cellspacing="0" style="margin-bottom:10px;">
                            <tr>
                                <td colspan="3" style="text-align:center"><font size="+3" >Staff Detail</font></td>
                            </tr>
                            <tr>
                            	<td colspan="3" style="text-align:left; color:#F00"><font size="2">Fields Marked With * Are Mandatory !</font></td>
                            </tr>
                            <tr>
                                <td>Select Branch</td>
                                <td>
                                    <select name="branch" id="combo">
                                        <option value="" selected>--Select any branch--</option>
                                        <option value="civil" <?php if($branch == "civil") { ?> selected="selected" <?php } ?> >Civil</option>
                                        <option value="mechanical" <?php if($branch == "mechanical") { ?> selected="selected" <?php } ?> >Mechanical</option>
                                        <option value="electrical" <?php if($branch == "electrical") { ?> selected="selected" <?php } ?> >Electrical</option>
                                        <option value="automobile" <?php if($branch == "automobile") { ?> selected="selected" <?php } ?> >Automobile</option>
                                        <option value="metallurgy" <?php if($branch == "metallurgy") { ?> selected="selected" <?php } ?> >Metallurgy</option>
                                        <option value="powerelectronics" <?php if($branch == "powerelectronics") { ?> selected="selected" <?php } ?> >Power Electronics</option>
                                        <option value="textilemanufacturing" <?php if($branch == "textilemanufacturing") { ?> selected="selected" <?php } ?> >Textile Manufacturing</option>
                                        <option value="textileprocessing" <?php if($branch == "textileprocessing") { ?> selected="selected" <?php } ?> >Textile Processing</option>
                                        <option value="it" <?php if($branch == "it") { ?> selected="selected" <?php } ?> >It</option>
                                        <option value="general" <?php if($branch == "genral") { ?> selected="selected" <?php } ?> >General</option>
                                        <option value="appliedsciencestaff" <?php if($branch == "appliedsciencestaff") { ?> selected="selected" <?php } ?> >Applied Sciene</option>
                                        <option value="officestaff" <?php if($branch == "officestaff") { ?> selected="selected" <?php } ?> >Office Staff</option>
                                    </select>
                                </td>
                                <td style="min-width:150px;"><span class="val_branch"><strong>*</strong></span></td>
                            </tr>
                            <tr>
                                <td>Id</td>
                                <td><input type="text" value="<?php echo $id?>" name="id"></td>
                                <td><span class="val_id"><strong>*</strong></span></td>
                            </tr>
                            <tr>
                                <td>Name</td>
                                <td><input type="text" value="<?php echo $name?>" name="name"></td>
                                <td><span class="val_name"><strong>*</strong></span></td>
                            </tr>
                            <tr>
                                <td>Gender</td>
                                <td>
                                    <select name="gender">
                                        <option value="">--Select gender--</option>
                                        <option value="Male" <?php if($gender == "Male") { ?> selected="selected" <?php } ?> >Male</option>
                                        <option value="Female" <?php if($gender == "Female"){?> selected="selected" <?php }?> >Female</option>
                                    </select>
                                </td>
                                <td><span class="val_gender"><strong>*</strong></span></td>
                            </tr>
                            <tr>
                                <td>Qualification</td>
                                <td><input type="text" value="<?php echo $qualification?>" name="qualification"></td>
                                <td><span class="val_qualification"><strong>*</strong></span></td>
                            </tr>
                            <tr>
                                <td>Experience</td>
                                <td><input type="text" value="<?php echo $experience?>" name="exp"></td>
                                <td><span class="val_exp"><strong>*</strong></span></td>
                            </tr>
                            <tr>
                                <td>Post</td>
                                <td><input type="text" value="<?php echo $post?>" name="post"></td>
                                <td><span class="val_post"><strong>*</strong></span></td>
                            </tr>
                             <tr>
                                <td>Email-Id</td>
                                <td><input type="text" value="<?php echo $emailid?>" name="emailid"></td>
                                <td><span class="val_email"><strong>*</strong></span></td>
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
                                    
                    <form name="update" action="">
                        <table align="center" width="100%">
                            <tr>
                                <td>Select Branch</td>
                                <td>
                                    <select name="branch">
                                        <option value="">--Select Branch--</option>
                                        <option value="civil">Civil</option>
                                        <option value="mechanical">Mechanical</option>
                                        <option value="electrical">Electrical</option>
                                        <option value="automobile">Automobile</option>
                                        <option value="metallurgy">Metallurgy</option>
                                        <option value="powerelectronics">PowerElectronics</option>
                                        <option value="textilemanufacturing">TextileManufacturing</option>
                                        <option value="textileprocessing">TextileProcessing</option>
                                        <option value="it">It</option>
                                        <option value="general">General</option>
                                        <option value="appliedsciencestaff">AppliedScieneStaff</option>
                                        <option value="officestaff">OfficeStaff</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2"><input type="submit" value="Search Records" name="select"/></td>
                            </tr>
                        </table>
                    </form>
                    
                    <form name="update_delete" action="">
                        <table  width="100%">
                            <tr>
                                <td></td>
                                <td>Id</td>
                                <td>Name</td>
                                <td>Gender</td>
                                <td>Qualification</td>
                                <td>Experience</td>
                                <td>Post</td>
                                <td>Email-Id</td>
                            </tr>
                            <?php
                                include 'connection.php';
                                if(isset($_GET['branch']))
                                {
                                    if(isset($_GET['select']))
                                    {
                                        $branch=$_REQUEST['branch'];
                                        $query="select * from $branch";                
                                        $res1=mysql_query($query);                                                                                 
                                        while($row1=mysql_fetch_array($res1))
                                        {
                            ?>
                            <tr>
                                <td><input type="radio" name="radio" value="<?php echo $row1["id"];?>"</td>                
                                <td><?php echo $row1["id"];?></td>
                                <td><?php echo $row1["name"];?></td>
                                <td><?php echo $row1["gender"];?></td>
                                <td><?php echo $row1["qualification"];?></td>
                                <td><?php echo $row1["experience"];?></td>
                                <td><?php echo $row1["post"];?></td>
                                <td><?php echo $row1["emailid"];?></td>
                                
                            </tr>
                            <?php
                                        }
                            ?>
                            <tr>
                                <td><input type="hidden" value="<?php echo $branch;?>" name='hidden'/></td>
                                <td colspan="4"><input type="submit" value="Edit Record" name="update"/></td>
                                <td colspan="3"><input type="submit" value="Delete Record" name="delete"/></td>
                            </tr>
                            <?php
                                    }
                                }    
                            ?>    
                        </table>
                    </form>
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
