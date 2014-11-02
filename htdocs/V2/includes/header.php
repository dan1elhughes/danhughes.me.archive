<!DOCTYPE html>
<?php 
/* Change the following values to automatically change all links. If hosted on own domain, use "/" for rootpath. Otherwise enter subfolder. */
$rooturl="workshop.xes.io";
$rootpath="/danhughes.me.archive/V2/";

$navigationlinks = array(
    "Home" => "",
    "About" => "about/",
    "Contact" => "contact/"
);

?>
<html>
	<head>
		<meta charset="UTF-8">

		<link href="<?php echo $rootpath;?>includes/style.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo $rootpath;?>includes/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />

		<link rel="icon" type="image/png" href="<?php echo $rootpath;?>images/logo.png" />
		<link rel="apple-touch-icon" href="<?php echo $rootpath;?>images/me.jpg" />

		<link rel="author" href="https://plus.google.com/100101734729968276703/"/>

		<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>		

		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="author" content="Dan Hughes">
		<meta name="description" content="Home of a web designer, session musican, DJ and gamer.">

		<meta property="og:image" content="<?php echo $rooturl.$rootpath;?>images/fblogo.jpg" />
		<meta property="og:title" content="Dan Hughes" />
		<meta property="og:description" content="Home of a web developer, session musican, DJ and gamer." />
		<meta property="og:url" content="<?php echo $rooturl.$rootpath;?>" />
		
		<title>Dan Hughes | Home of a web designer, session musican, DJ and gamer</title>
	</head>
	<body>
		<nav>
			<div id="title">
				<a href="<?php echo $rootpath;?>">dan hughes</a>
			</div>
				<ul id="navigation"><?php
					foreach ($navigationlinks as $k => $v) {
						echo "\n\t\t\t\t\t<li><a href=".$rootpath.$v.">$k</a></li>";
					}
					echo "\n";?>
				</ul>
			<span id="pull"><i class="icon-reorder"></i></span>
		</nav>
	<div id="content">