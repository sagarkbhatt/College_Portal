<!Doctype html>
<html lang="en">
	<head>
    	<link rel="stylesheet" type="text/css" href="../css/style.css">
        <link rel="stylesheet" type="text/css" href="../css/style_1.css">
        <link rel="stylesheet" type="text/css" href="../css/cssTable.css">
        <link rel="stylesheet" style="text/css" href="../css/menu.css">
        <link rel="stylesheet" style="text/css" href="../css/footer.css">
        <script type='text/javascript' src='../Jquery/jquery-1.8.3.min.js'></script>
		<script type='text/javascript' src='../Jquery/menu.js'></script>
        <script src='../Jquery/jquery-1.8.3.min.js'></script>
		<script src='../Jquery/jquery.elevatezoom.js'></script>
        <style type="text/css">
        	p
			{
				font-family:"Lucida Sans Unicode";
				font-size:14px;
				color:#272727;
				text-align:justify;
			}
			h1
			{
				font-size:32px;
				color:#003A75;
			}
			td
			{
				padding:10px;
				font-size:14px;
				color:#333;
			}
			.feedback input[type=text]{
				width:275px;
			}
        </style>
   		<meta charset="utf-8">
    	<title>Welcome to Dr. S. &amp; S. S. Ghandhy College of Engineering &amp; Technology,Surat</title>
    </head>
    
    <body bgcolor="#5A5A5A">
    	<div class="container">
        	<div class="logo">
				<iframe src="../logo/logo.html" width="960" height="150" frameborder="0" scrolling="no" allowTransparency="true"></iframe>
            </div>
            <div class="nav">
				<?php include 'navigatiomenu.php';
				?>			
            </div>
            <div class="info">
            	
                <div class="space">
                </div>
                <div class="content">
                    <?php
						function spamcheck($field)
						{
							// Sanitize e-mail address
							$field=filter_var($field, FILTER_SANITIZE_EMAIL);
							// Validate e-mail address
							if(filter_var($field, FILTER_VALIDATE_EMAIL))
							{
								return TRUE;
								}
							else
								{
								return FALSE;
							}
						}
					?>
					<?php
						// display form if user has not clicked submit
						if (!isset($_POST["submit"]))
						{
					?>
                    <br><br>
                    <p style="font-family:'Century Gothic';font-size:24px;color:#333;text-align:center"><strong>Feedback Form</strong></p>
					<div class="feedback">
                        <br>
                        <form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
                            <table>
                                <tr>	
                                    <td>From :</td>
                                    <td> <input type="text" name="from" placeholder="Enter Your Email Here!"><br></td>
                                </tr>
                                <tr>
                                    <td>Subject :</td>
                                    <td><input type="text" name="subject"><br></td>
                                </tr>
                                <tr>
                                    <td>Message :</td>
                                    <td> <textarea rows="10" cols="35" name="message"></textarea><br></td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <input type="submit" name="submit" value="Submit Feedback">
                                    </td>
                                </tr>
                            </table>
                        </form>
                    </div>
					<?php 
						}
						else
						// the user has submitted the form
						{
							// Check if the "from" input field is filled out
							if (isset($_POST["from"]))
							{
								// Check if "from" email address is valid
								$mailcheck = spamcheck($_POST["from"]);
								if ($mailcheck==FALSE)
								{
									echo "<script type='text/javascript'>alert('Invalid Input!');
										window.location='feedback.php';
										</script>";	
								}
								else
								{
									$from = $_POST["from"]; // sender
									$subject = $_POST["subject"];
									$message = $_POST["message"];
									// message lines should not exceed 70 characters (PHP rule), so wrap it
									$message = wordwrap($message, 70);
									// send mail
									mail("admin@gandhycollegesurat.net16.net",$subject,$message,"From: $from\n");
									echo "<script type='text/javascript'>alert('Thank you for sending us feedback.');
										window.location='../index.php';
										</script>";	
								}
							}
						}
					?>
                    <br>
            	</div>
                <div class="space">
                </div>
            </div>
            <div id=footer style="border:0px">
				<?php
					include 'footer.php';
				?>
			</div>
			<div class="copyright">
				<center><b>Copyright © 2013 Dr. S. & S. S. Ghandhy College of Engineering & Technology,Surat</b\></center>
			</div>				
        </div>
    </body>
</html>
