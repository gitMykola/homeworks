<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="en-US" xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<title>Mykola Borodyn Homeworks</title>
		<link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<link rel="stylesheet" href="assets/homeworks/css/homeworks.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script src="assets/homeworks/js/homeworks.js"></script>
</head>
	<body>
	<nav class="navbar navbar-inverse">
	  <div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>                        
			</button>
		  <a class="navbar-brand" href="#">Homeworks</a>
		</div>
		<div class="collapse navbar-collapse" id="myNavbar">
		<ul class="nav navbar-nav">
		  <li class="w3-padding w3-text-light-grey w3-xlarge">Welcome</a></li>
		</ul>
		<ul class="nav navbar-nav navbar-right">
		  <li id="loginBlock">
			<a class="w3-large w3-padding" href="#"><span class="glyphicon glyphicon-log-in w3-padding"></span>Login</a>
			<form class="slideForm" method=post action="" onsubmit="validForm(this)">
				<label for="loginName" class="col-sm-12">login:</label>
							<input type="text" id="loginName" name=login>
				<label for="loginPass" class="col-sm-12">password:</label>
							<input type="password" id="loginPass" name=passcode>	
				<button class="w3-border" type=submit >Apply</button>
				<label class="w3-border w3-right" onclick="$(this.parentNode).slideToggle();">Cancel</label>				
			</form>
		  </li>
		</ul>
		</div>
	  </div>
	</nav>
		<div class="container">

		</div>	
		<div id="modal" class="text-center hw-invisible">
			<h1 class="message"></h1>
			<a href="#" onclick="$(this.parentNode).fadeOut();">Continue create tasks</a>
			<a href="http://klimatcontrol.com.ua/task/create" onclick="$(this.parentNode).fadeOut();">New task</a>
			<a href="http://klimatcontrol.com.ua/task/admin" onclick="$(this.parentNode).fadeOut();">Back to tasks list</a>
			<span class="glyphicon glyphicon-remove w3-xlarge" onclick="$(this.parentNode).fadeOut();"></span>
		</div>
	</body>
</html>	