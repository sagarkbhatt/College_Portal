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
        <script src='../navigatiomenu.php'></script>
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
                	<br>
                    <br>
                	<center><h1>PWD</h1></center>
                    <br>
                    <br>
                    <center><h2>Person with Disabilities undet MHRD scheme</h2></center>
                    <br>
                    <br>
                    <?php
					include 'connection.php';
					$srno=1;
					$result;
					if($result=mysql_query("select * from pwd;"))
					{	
				
					echo "<table class='cssTable'>";
                     echo  "<tr><td>Sr. No.</td><td>Name Of The Trade</td></tr>";
					   
					   while($row=mysql_fetch_array($result)){
						   echo "<tr>";
						   echo "<td>$srno</td>";
						 
						   echo "<td>".$row['nameoftrade']."</td>";
						   echo "</tr>";
						   $srno=$srno+1;
						   }
					echo "</table>";
					mysql_close($con);
					}
					?>
					
					
                    <br>
                    <br>
                    <center><p style="font-size:16px">Download for more details : <a href="#"><strong>PWD.rar</strong></a></p></center>
                    <br>
                    <br>
                    <br>
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
				<center><b>Copyright © 2014 Dr. S. & S. S. Ghandhy College of Engineering & Technology,Surat</b\></center>
			</div>				
        </div>
    </body>
</html>
