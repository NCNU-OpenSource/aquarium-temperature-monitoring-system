<!DOCTYPE html>
<html>
<head>
<title>Single</title>
<!-- jQuery-->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<!--theme-style-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Kappe Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--fonts-->
<link href='http://fonts.useso.com/css?family=Roboto:400,300,100,500,700,900' rel='stylesheet' type='text/css'>
<!--//fonts-->

</head>
<body>
	<div class="header">
		<div class="header-left header-left3">
			<div class="logo">
				<a href="index.php"><img src="images/logo.png" alt=""></a>
			</div>		
		</div>
		<!---->
		<div class="header-top">
			<div class="logo-in">
				<a href="index.php"><img src="images/logo.png" alt=""></a>
			</div>
			<div class="top-nav-in">
			<span class="menu"><img src="images/menu.png" alt=""> </span>
				
				<script>
					$("span.menu").click(function(){
						$(".top-nav-in ul").slideToggle(500, function(){
						});
					});
			</script>

			</div>
			<div class="clear"> </div>
		</div>
			<!---->
		<div class="content">
			<div class="single">
				<div class="single-top">
					<script src="js/responsiveslides.min.js"></script>
					<script>
						$(function () {
						  $("#slider4").responsiveSlides({
							auto: true,
							speed: 500,
							namespace: "callbacks",
								pager: true,
						  });
						});
					</script>
					<h2>我的個人資料</h2>
				
				<div class="top-single">

				<div class="grid-single">
					<div class="your-single">
						姓名 :卓明煊
						<br/><br/>
						●   缸面長:60cm
						<br/><br/>
						●   缸面寬:30cm
						<br/><br/>
						●   缸面高:40cm
						<br/><br/>
						●   底砂高度:5cm
						<br/><br/>
						●   缸面厚:0.5cm
						<br/><br/>
						●   水離缸面:5cm
						<br/><br/>
						●   水離缸面:5cm
						<br/><br/>
						●   鋪入底砂類型:黑土類
						<br/><br/>
						●   室內溫度:
						<?php
$con=mysql_connect("localhost","root","0000") or die('Error with MySQL connection');
mysql_query("SET NAMES 'utf8'");
mysql_select_db("Project");
$sql = "SELECT * FROM `DS18B20` ORDER BY  `measurement_id` DESC LIMIT 1 ";
$result = mysql_query($sql) or die('MySQL query error');
				
						while($row = mysql_fetch_array($result)){
        echo $row['value'];
    }					
						?>
		
						<br/><br/>
						●   預定魚缸的室內温度:27

						<br/><br/>
						
					</div>
					
					
				</div>
				
				<div class="clear"> </div>
			</div>
				</div>
				<!--<div class="single-in">
					<div class="info">
					<h3>Project Info</h3>
						<ul class="likes">
							<li><a href="#"><i > </i>premiumlayers</a></li>
							<li><span><i class="like"> </i>138 Likes</span></li>
							<li><span><i class="dec"> </i>25 December, 2013</span></li>
							<li><a href="#"><i class="comment"> </i>4 Comments</a></li>

						</ul>
					</div>
					<div class="tags">
					<h3>Tags</h3>
						<ul class="tag">
							<li><a href="#">web design</a></li>
							<li><a href="#">photography</a></li>
							<li><a href="#">development</a></li>
							<li><a href="#">php</a></li>
							<li><a href="#">ecommerce</a></li>
							<li><a href="#">graphic</a></li>
						</ul>
					</div>
					
					<div class="archive">
					<h3>Archives</h3>
						<ul class="archive-grid">
							<li><a href="#">December 2013 (24)</a></li>
							<li><a href="#">November 2013 (7)</a></li>
							<li><a href="#">September 2013 (2)</a></li>
							<li><a href="#">March 2013 (22)</a></li>
							<li><a href="#">January 2013 (11)</a></li>

						</ul>
					</div>
				</div>
				<div class="clear"> </div>
			</div>
		</div>-->
		<div class="clear"> </div>
				<p class="footer-class-in">Copyright &copy; 2015.Company name All rights reserved.<a target="_blank" href="http://sc.chinaz.com/moban/">&#x7F51;&#x9875;&#x6A21;&#x677F;</a></p>

	</div>
</body>
</html>
