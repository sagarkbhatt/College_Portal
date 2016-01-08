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
                	<center><h1>Electrical Staff</h1></center>
                    <br>
                    <br>
                    <br>
                   <?php
					include 'connection.php';
					
					$result=mysql_query("select * from electrical;");
					if(!$result){
						die("error".mysql_error());
					}
					echo "<table class='cssTable'>
                       <tr><td>Sr No.</td><td>Name</td><td>Gender</td><td>Qualification</td><td>Experience(Years)</td><td>Post</td><td>E-Mail ID</td></tr>";
					    $srno=1;
					   while($row=mysql_fetch_array($result)){
					  
						   echo "<tr>";
						   echo "<td>".$srno."</td>";
						   echo "<td>".$row['name']."</td>";
						   echo "<td>".$row['gender']."</td>";
						   echo "<td>".$row['qualification']."</td>";
						   echo "<td>".$row['experience']."</td>";
						   echo "<td>".$row['post']."</td>";
						   echo "<td>".$row['emailid']."</td>";
						   echo "</tr>";
							$srno++;
						   }
					echo "</table>";
					
					?>
				   
                    <br>
                    <br>
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
