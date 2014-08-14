<?php session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by TEMPLATED
http://templated.co
Released for free under the Creative Commons Attribution License

Name       : Straightedge 
Description: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20130920

-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>輔仁大學關懷流浪動物志工團隊</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800" rel="stylesheet" />
<link href="default.css" rel="stylesheet" type="text/css" media="all" />
<link href="fonts.css" rel="stylesheet" type="text/css" media="all" />

<!--[if IE 6]><link href="default_ie6.css" rel="stylesheet" type="text/css" /><![endif]-->



<!-- Start WOWSlider.com HEAD section -->
	<link rel="stylesheet" type="text/css" href="engine1//style.css" media="screen" />
	<script type="text/javascript" src="engine1//jquery.js"></script>
<!-- End WOWSlider.com HEAD section -->

</head>
<body>
<div id="header-wrapper">
	<div id="header" class="container">
		<div id="logo">
			<h1><a href="#">FJU Doggy Club</a></h1>
		</div>
		<div id="menu">
			<ul>
				<li class="current_page_item"><a href="dc_homepage.php" accesskey="1" title="">首頁</a></li>
				<li ><a href="dc_journal.php" accesskey="2" title="">愛狗日誌</a></li>
				<li><a href="dc_knowledge.php" accesskey="3" title="">知識管理</a></li>
				<li><a href="dc_map.php" accesskey="4" title="">校狗地圖</a></li>
				<?php 
				if (isset($_SESSION['account'])&&$_SESSION['level']=='0') {
					print("<li><a href=\"dc_member.php\" accesskey=\"5\" title=\"\">會員專區</a></li>");
				}?>
				
				<li><a href="dc_contact.php" accesskey="6" title="">連絡我們</a></li>
			</ul>
		</div>
	</div>
</div>


<!-- Start WOWSlider.com BODY section id=wowslider-container1 -->
	<div id="wowslider-container1">
	<div class="ws_images"><ul>
<li><img src="data1/images/fju1.jpg" alt="" title="" id="wows1_0"/></li>
<li><img src="data1/images/fju2.jpg" alt="" title="" id="wows1_1"/></li>
<li><img src="data1/images/fju3.jpg" alt="" title="" id="wows1_2"/></li>
</ul></div>
<div class="ws_bullets"><div>
<a href="#" title=""><img src="data1/tooltips/fju1.jpg" alt=""/>1</a>
<a href="#" title=""><img src="data1/tooltips/fju2.jpg" alt=""/>2</a>
<a href="#" title=""><img src="data1/tooltips/fju3.jpg" alt=""/>3</a>
</div></div><span class="wsl"><a href="http://wowslider.com/vh">html slideshow</a> by WOWSlider.com v5.6</span>
	<a href="#" class="ws_frame"></a>
	<div class="ws_shadow"></div>
	</div>
	<script type="text/javascript" src="engine1//wowslider.js"></script>
	<script type="text/javascript" src="engine1//script.js"></script>
<!-- End WOWSlider.com BODY section -->


<div id="banner-wrapper">
	<div id="banner" class="container">
		<div class="box-left">
			<h2>輔仁大學關懷流浪動物志工團隊</h2>
			<span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				  輔仁大學關懷流浪動物志工團隊，英文：FJU Doggy Club，<br>
				  俗稱：愛狗社。愛狗社支援輔大周邊社區的流浪動物問題。輔大<br>
				  周邊時有流浪動物生病、被遺棄、甚至受虐的情況，一經通報，<br>
				  愛狗社會立即伸出援手，提供救助與認養管道。援助範圍甚至遠<br>
				  至盲人重建院一帶。</span> </div>			  		
</div>

	

<div id="test" >
	<?php
		if (!isset($_SESSION['account'])){
			print("<p2>會員登入</p2><br><br>
			<form action=\"index.php/login\" method=\"post\">
			帳號：<input type=\"text\" name=\"account\"><br>
			密碼：<input type=\"password\" name=\"pwd\"/><br>
    		<input type=\"submit\" name=\"submit\" value=\"登入\" />
      		<input type=\"reset\" name=\"reset\" value=\"重填\" />
			</form>");
				
			if (isset($_GET['login'])) {
				if ($_GET['login']=='error') {
					print("<p style=\"color:red\">帳號密碼有錯誤！請您重輸入一次</p>");						}
			}
		}
		else{
				print("<p2>".$_SESSION['name']."</p2>"."&nbsp;&nbsp;您好<br><br>");	
				print("<a  style=\"text-decoration:none;color:blue;\" href=\"index.php/login/logout\">登出</a>");
		}
	?>		
</div>



<div id="wrapper">
	<div id="page" class="container">
		<div id="content">
			
			<div class="title">
				<h2>標題1</h2>
			</div>
			<p>內容1</p>
			
			<div id="onecolumn">
				<div class="title">
					<h2>標題2</h2>
				</div>
				<p>內容2</p>	
			</div>

		</div>	
	</div>
</div>



<div id="copyright" class="container">
	<p>&copy; 輔仁大學關懷流浪動物志工團隊</a>.</p>
</div>


</body>
</html>

