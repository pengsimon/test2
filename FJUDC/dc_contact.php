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
<title>FJU Doggy Club 連絡我們</title>
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
				<li ><a href="dc_homepage.php" accesskey="1" title="">首頁</a></li>
				<li ><a href="dc_journal.php" accesskey="2" title="">愛狗日誌</a></li>
				<li><a href="dc_knowledge.php" accesskey="3" title="">知識管理</a></li>
				<li><a href="dc_map.php" accesskey="4" title="">校狗地圖</a></li>
				<?php 
				if (isset($_SESSION['account'])&&$_SESSION['level']=='0') {
					print("<li><a href=\"dc_member.php\" accesskey=\"5\" title=\"\">會員專區</a></li>");
				}?>
				<li class="current_page_item"><a href="dc_contact.php" accesskey="6" title="">連絡我們</a></li>
			</ul>
		</div>
	</div>
</div>

<div id="banner-wrapper">
	<div id="banner" class="container">
		<div class="box-left">
			<h2>標題</h2>
			<span>內容</span> </div>
			
</div>
<div id="wrapper">
	<div id="page" class="container">
		<div id="content">	
		</div>
		
		<div id="sidebar">
		</div>
			
		</div>
		</div>
</div>

<div id="copyright" class="container">
	<p>&copy; Untitled. All rights reserved. | Photos by <a href="http://fotogrph.com/">Fotogrph</a> | Design by <a href="http://templated.co" rel="nofollow">TEMPLATED</a>.</p>
</div>
</body>
</html>
