<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>FurryAvalon | Home</title>
	<link rel="stylesheet" type="text/css" href="./css/reset.css" />
	<link rel="stylesheet" type="text/css" href="./css/text.css" />
	<link rel="stylesheet" type="text/css" href="./css/960.css" />
	<link rel="stylesheet" type="text/css" href="./css/custom.css" />
</head>
<body>

<div id="container">
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
					<a href="/about">About Us</a>
				</div>
			</div>
		</nav>
		<div class="container_16">
			<hr />
			<div class="grid_2 empty">&nbsp;</div>
			<div class="grid_12 mainbar">
				<article class="submission-single-article">
					<h5>Welcome to FurryAvalon!</h5><br>
					<h6>What is FurryAvalon Up to Now?</h6
					<small>Created by Keiro on June 10th, 2015</small>
                                        <p>We are rebuilding FurryAvalon from the ground-up, code-wise with <a href="http://codeigniter.com">CodeIgniter</a>. If you
					you wish to check out our code, please see <a href="http://github.com/KeiroD/furryavalon">FurryAvalon's Github</a>.</p>
					<p>FurryAvalon v1 will not be written by us. We've hired <a href="http://modulesbakery.com">ModulesBakery</a> to do the v1 code for us. From there, we will maintain our code and eventually migrate to v2 based on CodeIgniter.</p>
					<h5>Update on FurryAvalon</h5>
					<small>Created by Keiro on March 30th, 2014</small>
					<p>It's been a while since we posted an update, but it was long over-due. Our website's design has been rendered down to the most basic and simplest form of our website.<br><br>Why, do you ask?<br><br>Good question. It's for two reasons -- first and foremost, the lack of developers. I myself am a Systems Administrator. I am not a back-end developer, nor am I a front-end developer. I maintain systems. That is my thing, ergo I have not had much luck in finding someone willing to work with myself and with a friend, Karros.<br><br> Secondly, however, we are only two persons and we need more help in enabling the functionality that we want to provide. We have plans. Oh yes, lots of plans for FurryAvalon. We need your help in bringing that plan to fruition. You can see what we want to do at <a href="https://trello.com/b/Af8WvtkP/furryavalon">Trello</a>. If you know anyone that can help us with bringing our vision to life, we would like to talk to them!</p>
					<p>That said, I'd like to say on behalf of myself and Karros, creator of Dragonfox Studios, a warm thank you for coming to check out our website and what we have currently available.</p>
				</article>
			</div>
		</div>
	<p class="footer">Content &copy; <a href="http://furryavalon.net">FurryAvalon Network</a>, Design by <a href="http://dragonfox.net">Dragonfox Studios</a> 2013&#8212;Present <br>Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo (ENVIRONMENT === 'development') ? '<strong>FurryAvalon</strong> is running on <strong>CodeIgniter Version ' . CI_VERSION . '</strong>' : '' ?></p>
</div>

</body>
</html>
