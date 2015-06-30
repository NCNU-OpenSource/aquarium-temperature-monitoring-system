<!DOCTYPE html>
<html>
<head><meta charset="UTF-8">
<title>Home</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- Custom Theme files -->
<script src="js/jquery.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfont-->
<link href='http://fonts.useso.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.useso.com/css?family=Source+Sans+Pro:200,300,400,600,700,900,200italic,300italic,400italic,600italic,700italic,900italic' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
				});
			});
		</script>
</head>
<body>
 <!-- header-section-starts -->
    <div class="header">
		<div class="header-banner">
			<div class="container">
				<div class="top-menu">
				    <span class="menu"> </span>
	
				    </div>
		 <!--script-nav-->
		 <script>
		 $("span.menu").click(function(){
		 $(".top-menu ul").slideToggle("slow" , function(){
		 });
		 });
		 </script>
				<div class="header-banner-info text-center">
					<a href="#"><img src="images/logo.png" alt="" /></a>
					<h3>TEMPERATURE</h3>
					<h1>魚缸現在溫度是 <span>
						<?php
$con=mysql_connect("localhost","root","0000") or die('Error with MySQL connection');
mysql_query("SET NAMES 'utf8'");
mysql_select_db("Project");
$sql = "SELECT * FROM `DS18B20` ORDER BY  `measurement_id` DESC LIMIT 1 ";
$result = mysql_query($sql) or die('MySQL query error');
				
						while($row = mysql_fetch_array($result)){
        echo $row['value'];}
        
        
        ?>
					</span> </h1>
					<p>
					</p>
					<span class="line"></span>					 
					
					<label></label>
					<ul class="details">
						<li>Goal Of Temperature     :     <a href="#">28</a></li>
						
					</ul>
				</div>
			</div>
		</div>
	</div>
			
			
		
	
    </div>
</body>
</html>
