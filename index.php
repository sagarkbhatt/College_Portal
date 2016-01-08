<!Doctype html>
<html lang="en">
    <head>
		
        <link rel="stylesheet" style="text/css" href="css/style.css">
        <link rel="stylesheet" style="text/css" href="css/menu.css">
        <link rel="stylesheet" style="text/css" href="css/footer.css">
        <link rel="stylesheet" style="text/css" href="css/tables.css">
        <link rel="stylesheet" style="text/css" href="css/infomenu.css">
        <link rel="stylesheet" style="text/css" href="css/tabs-slideshow.css">
        <link rel="stylesheet" style="text/css" href="css/cssreadmore.css">
        <link rel="stylesheet" style="text/css" href="css/image.css">	
        <script type="text/javascript" src="Jquery/jquery-1.2.3.min.js"></script>
		<script type="text/javascript" src="Jquery/menu.js"></script>
		<script src='Jquery/jquery-1.8.3.min.js'></script>
		<script src='Jquery/jquery.elevatezoom.js'></script>
       	<meta charset="utf-8">
        <meta namep="created" content="Sun, 04 Aug 2013 05:43:52 GMT">
        <meta name="description" content="">
        <meta name="keywords" content="">
        <title>Welcome to Dr. S. &amp; S. S. Ghandhy College of Engineering &amp; Technology,Surat</title>	
    </head>
    <body bgcolor="#5A5A5A">
        <div class="container">
            <div class="logo">
                <iframe src="logo/logo.html" width="960" height="150" frameborder="0" scrolling="no" allowTransparency="true"></iframe>
            </div>
            <div class="nav">
            <?php include 'navigatiomenu.php';
			?>
                				
            </div>			
            <div class="info">
                <div id="infomenu">
                <ul>
                    <li class=""> <a href="admin/login.html">Administration</a> </li>
                    <li class=""> <a href="GhandhyCollege/hostel.php">Facilities</a> </li>	
                    <li class=""> <a href="GhandhyCollege/RTI.php">RTI</a> </li>
                    <li class=""> <a href="http://www.gtu.ac.in/Results.asp">Results</a> </li>
                    <li class=""> <a href="http://www.gtu.ac.in/student.asp">Student Corner</a> </li>                    							
                    <li class=""> <a href="http://14.139.122.69/instinfo/hist.jsp">Student History</a> </li>
                    <li class=""> <a href="GhandhyCollege/feedback.php">Feedback</a> </li>
                    <li class=""> <a href="GhandhyCollege/Contact_Us.php">Contact us</a> </li>
                </ul>
                </div>
                <div class="content">
                    <div class="slideshow">					
                        <div class="images">					
                        <marquee direction="right" behavior="alternate" scrollamount="2" onmouseover="this.stop();" onmouseout="this.start();">
                        <img src="images/home.jpg" name="slide" width="597px" height="300px" />
                        <img src="images/home.jpg" name="slide" width="597px" height="300px" />		
                        </marquee> 
                        </div>						
                    </div>
                    <div class="block">
                    	<div class="library">
                        	<center><img src="images/bool_library.jpg" width="100" height="100" align="middle"></center>
                            <center><p style="font-size:18px;color:#900"><strong>Better Library Facilities</strong></p></center>
                            <p style="font-size:14px;color:#000;text-align:justify; margin-left:10px;margin-right:10px">More then 23000 Books, Internal Book search software..</p>
                            <a href="GhandhyCollege/library.php" class="cssreadmore">Read More</a>                            
                        </div>
                        <div class="NCC">
                        	<center><img src="images/ncc_logo.jpg" width="90" height="100" align="middle"></center>
                            <center><p style="font-size:18px;color:#900"><strong>NCC</strong></p></center>
                            <p style="font-size:14px;color:#000;text-align:justify;margin-left:10px;margin-right:10px">Good facilities of NCC services and camps....</p>
                            <a href="#" class="cssreadmore">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="RightPanel">
                    <div class="desktag">
						<img src="images/instituteprofilr.png" alt="Institute Profile" width="178px" height="50px">
                    </div>
                    <div class="desk">
                    	<strong><p style="font-size:15px; text-align:center;color:#18365f;">From H. I. Patel - Principal's desk</p></strong>
                        <strong>
                        	<p style="text-align:justify; margin-left:3px;margin-right:7px; color:#333">
                        		<?php
								include 'GhandhyCollege/connection.php';
								
								
								$result=mysql_query("select * from msgfromprinci;");
								if(!$result){
									die("error".mysql_error());
								}
								while($row1=mysql_fetch_array($result)){
									echo $row1['shortmsg'];
								}
								?>
                            </p>
                        </strong>
                        <a href="GhandhyCollege/principlesmsg.php" class="cssreadmore">Read More</a>
                    </div>
                 	<div class="newsflashtag">
                    	<img src="images/newsflash.png" alt="News Flash" width="178px" height="50px">
                    </div>              
                    <div class="newsflash"> 
                        <div class="marquee">
                        <marquee direction="up" onmouseover="this.stop();" scrollamount="1" onmouseout="this.start();" overflow:"hidden" align="center" height="320px">
						<?php
						include 'GhandhyCollege/connection.php';
						
						
						$result=mysql_query("select * from news;");
						if(!$result){
							die("error".mysql_error());
						}
						
						   
						while($row=mysql_fetch_array($result)){
						 echo "<center><p class='col4'><a style='color:".$row['color'].";' href=newslink/".$row['link'].">".$row['text']."</a></p></center>";

						   }
					
					?>
                        
                        </marquee>
                        </div>
                    </div>
                </div>
            </div>
            <div id=footer style="border:0px">
				<?php include 'footer.php';
				?>
			</div>
			<div class="copyright">
				<center><b>Copyright © 2014 Dr. S. & S. S. Ghandhy College of Engineering & Technology,Surat</b\></center>
			</div>
        </div>
    </body>
</html>
