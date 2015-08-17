<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>FurryAvalon | Central System Registry</title>
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
				<div class="grid_3 dropdown">
                                        <a href="">About Us <small>v</small></a>
                                        <ul>
                                        <li><a href="/history">Our History</a></li>
                                        <li><a href="/c_chuck">Chainsaw Chuck's Bio</a></li>
                                        <li><a href="/csr">Central System Registry</a></li>
					</ul>
                                </div>
			</div>
		</nav>
		<div class="container_16">
			<hr />
			<div class="grid_2 empty">&nbsp;</div>
			<div class="grid_12 mainbar">
				<article class="submission-single-article">
					<h5>Welcome to FurryAvalon's Central System Registry!</h5><br>
					<h6>What is the Central System Registry?</h6>
					<small>Created by Keiro on June 10th, 2015</small>
                                        <p>Welcome to the Central Systems Registry of FA-NOC (FurryAvalon Network Operations Center) where you'll find all the systems registered at the facility in which FurryAvalon's Network Operations Center's main network infrastructure and services are operated from.</p>
					<span class="field-title"><h5>Hostnames on the local Network:</h5></span>
					<p>
<span class="field-data">-Central Plexus - Router that controls the main network infrastructure. (cplexus.heimkoma.com)<br>
-Kaiya - Avatar of the Heimkoma Services and FurryAvalon Network. (kaiya.heimkoma.com)<br>
-Time - Time server for the general public. - (time.heimkoma.com and time.furryavalon.net but points at <br>cplexus.heimkoma.com)<br>
-Deer - FurryAvalon's second IRC server. (deer.yoto-oh.furryavalon.net)<br>
-Spark - IM system much like Yahoo. (spark.heimkoma.com)<br>
-FTP - FTP system, fairly self-explanatory. (ftp.heimkoma.com)<br>
-Trimatrix07 - Main network for Heimkoma Services/FurryAvalon Network, legacy hostname. (trimatrix07.heimkoma.com points at cplexus.heimkoma.com)</span>
<span class="field-title">Hostnames at remote FurryAvalon Network.:</span>
<span class="field-data"><br>
-IRC - Main IRC server. (irc.furryavalon.net, hosted by <a href="http://vultr.com">Vultr</a>.)<br>
-FurryAvalon - Main Website. (furryavalon.net, also hosted by <a href="http://vultr.com">Vultr</a>.)
</span>
<span class="field-title">Subdomains delegated to Remote Users:</span>
<span class="field-data"><br>None.</span>
<span class="field-title">Legal:</span>
<span class="field-data"><br>All subdomains and domains are the property of FurryAvalon. Abuse found on any services attached to any
domains and subdomains is subject to legal proceedings. All users are expected to follow the policy of the Network.
</div>
				</article>
			</div>
		</div>
	<p class="footer">Content &copy; <strong>FurryAvalon Network</strong> and is hosted by <a href="http://eidolonhost.com">EidolonHost</a>. Site Design by <a href="http://dragonfox.net">Dragonfox Studios</a> 2013&#8212;Present.<br>Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo (ENVIRONMENT === 'development') ? '<strong>FurryAvalon</strong> is running on <strong>CodeIgniter Version ' . CI_VERSION . '</strong>' : '' ?></p>
		</div>
</body>
</html>
