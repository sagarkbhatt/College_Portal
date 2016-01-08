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
			?>			</div>
            <div class="info">
            	
                <div class="space">
                </div>
                <div class="content">
                    <br><br><br><br>
                    <center><img src="../images/principle_photo.jpg" alt="principle's Photo" width="286" height="286"></center>
                    <br>
                    <strong><p style="font-size:18px;font-family:'Century Gothic';text-align:center;color:#00279D">Mr. H. I. Patel</p></strong>
                    <br>
                    <strong><p style="font-size:16px;font-family:'Century Gothic'">Principle Says :</p></strong>
                    <p style="text-align:justify; font-size:14px; margin-left:20px;margin-right:20px; color:#333">
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <?php
                        include '../GhandhyCollege/connection.php';
                        
                        
                        $result=mysql_query("select * from msgfromprinci;");
                        if(!$result){
                            die("error".mysql_error());
                        }
                        while($row1=mysql_fetch_array($result)){
                            echo $row1['message'];
                        }
                        ?>
                    </p>
					<br><br><br><br>
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
				<center><b>Copyright © 2014 Dr. S. & S. S. Ghandhy College of Engineering & Technology,Surat</b\></center>
			</div>				
        </div>
    </body>
</html>
