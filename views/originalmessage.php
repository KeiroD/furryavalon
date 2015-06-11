<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
	<link rel="stylesheet" type="text/css" href="./css/reset.css" />
	<link rel="stylesheet" type="text/css" href="./css/text.css" />
	<link rel="stylesheet" type="text/css" href="./css/960.css" />
	<link rel="stylesheet" type="text/css" href="./css/custom.css" />
	<style type="text/css">

	::selection { background-color: #fefefe; }
	::-moz-selection { background-color: #fefefe; }

	body {
		background-color: #fefefe;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #204D02;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body {
		margin: 0 15px 0 15px;
	}

	p.footer {
		text-align: center;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

	#container {
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}
	</style>
</head>
<body>

<div id="container">
	<h1>Welcome to CodeIgniter!</h1>

	<header class="container_16">
			<div class="grid_4">
				<a href="http://furryavalon.net"><img class="logo_placeholder" src="./img/transparent.png" alt="furryavalon logo placehold" /></a>
			</div>
			<div class="grid_12">
				<h2>FurryAvalon</h2>
				<h3>The Latest In Furry Technology</h3>
			</div>
			<hr />
		</header>
		<nav>
			<div class="container_16">
                                <div class="grid_2 dropdown">
                                        <a href="">Community <small>v</small></a>

                                        <ul>
                                                <li><a href="http://irc.furryavalon.net:9000" target="_blank">IRC Webchat</a></li>
                                                <li><a href="http://furryavalon.net/forums" target="_blank">Forums</a></li>
                                        </ul>
                                </div>
				<div class="grid_2">
					<a href="http://blog.furryavalon.net">Admin Blog</a>
				</div>
				<div class="grid_2">
					<a href="about.html">About Us</a>
				</div>
			</div>
		</nav>
		<div class="container_16">
			<hr />
			<div class="grid_2 empty">&nbsp;</div>
			<div class="grid_12 mainbar">
				<article class="submission-single-article">
					<h5>Welcome to FurryAvalon!</h5>
					<small>Created by Keiro on March 30th, 2014</small>
					<p>It's been a while since we posted an update, but it was long over-due. Our website's design has been rendered down to the most basic and simplest form of our website.<br><br>Why, do you ask?<br><br>Good question. It's for two reasons -- first and foremost, the lack of developers. I myself am a Systems Administrator. I am not a back-end developer, nor am I a front-end developer. I maintain systems. That is my thing, ergo I have not had much luck in finding someone willing to work with myself and with a friend, Karros.<br><br> Secondly, however, we are only two persons and we need more help in enabling the functionality that we want to provide. We have plans. Oh yes, lots of plans for FurryAvalon. We need your help in bringing that plan to fruition. You can see what we want to do at <a href="https://trello.com/b/Af8WvtkP/furryavalon">Trello</a>. If you know anyone that can help us with bringing our vision to life, we would like to talk to them!</p>
					<p>That said, I'd like to say on behalf of myself and Karros, creator of Dragonfox Studios, a warm thank you for coming to check out our website and what we have currently available.</p>
					<h5>An Update on the Site</h5>
					<small>Created by Keiro on May 5th, 2014</small>
					<p>The header links have been updated accordingly to more closely fit what we have available. However, I'd like to note that at this time, the Forums is inaccessible to everyone but myself and Karros until we feel that the forums is ready to accept users and the like.</p>
				</article>
			</div>
		</div>
	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  '<strong>FurryAvalon</strong> is running on <strong>CodeIgniter Version ' . CI_VERSION . '</strong>' : '' ?></p>
</div>

</body>
</html>
