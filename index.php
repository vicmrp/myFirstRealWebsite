<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<?php
	function baggrund() {
		$tal = rand(0,2);
		if ($tal == 0) {
			echo "m4a1.jpg";
		} elseif ($tal == 1) {
			echo "ak47_art.jpg";
		} elseif ($tal == 2) {
			echo "awp_car.jpg";
		}
	}  
	function test() {
		echo "";
	}
	?>  
	<nav class="navbar navbar-inverse">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="http://vezit.dk">vezit.dk</a>
			</div>
			<ul class="nav navbar-nav">
				<li class="active"><a href="http://steamcommunity.com/id/vezit" target="_blank">Link til min Steamprofil</a></li>
			</ul>
		</div>
	</nav>
	<div class="container">
		<div class="jumbotron">
			<h1 style="font-family: csgo_font;">Bootstrap Tutorial</h1>      
		</div>   
	</div>
</body>
<style>
	body:after{
	      content:"";
	      position:fixed; /* stretch a fixed position to the whole screen */
	      top:0;
	      height:100vh; /* fix for mobile browser address bar appearing disappearing */
	      left:0;
	      right:0;
	      z-index:-1; /* needed to keep in the background */
	      background: url("billeder/<?php baggrund();?>") center center;
	      -webkit-background-size: cover;
	      -moz-background-size: cover;
	      -o-background-size: cover;
	      background-size: cover;
	      @font-face {
		    font-family: csgo_font;
		    src: url("font/cs_reguler.ttf");
			}
	}
</style>
</html>