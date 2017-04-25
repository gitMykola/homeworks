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
		<link rel="stylesheet" href="/css/homeworks.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script src="/js/homeworks.js"></script>
</head>
	<body>
	<nav class="navbar navbar-inverse">
	  <div class="container-fluid">
		<div class="navbar-header">
		  <a class="navbar-brand" href="#">Homeworks</a>
		</div>
		<ul class="nav navbar-nav">
		  <li class="w3-padding w3-text-light-grey w3-xlarge">Admin</a></li>
		</ul>
		<ul class="nav navbar-nav navbar-right">
		  <li><a href="http://klimatcontrol.com.ua/task/admin" title="Back to task list">
		  <span class="glyphicon glyphicon-of"></span>Back to task list</a></li>
		</ul>
	  </div>
	</nav>
		<div class="container">
			<div class="text-center col-sm-6">
				<div class="create-item col-sm-6 w3-large">
					<label for="userName" >Name:</label>
					<input type="text" id="userName" class="col-sm-12">
				  </div>
				<div class="create-item col-sm-6 w3-large">
					<label for="eMail">Email:</label>
					<input type="email" id="eMail" class="col-sm-12">
				  </div>
				<div class="create-item col-sm-12 w3-large w3-padding-16">
					<label for="text">Task text:</label>
					<textarea id="text" class="col-sm-12" rows="3"></textarea>
				  </div>
				<div class="create-item col-sm-12 w3-large">
							<label for="status">Task status:</label>
							<input type="checkbox" id="status" value="">
						  </div> 
			</div>
			<div class="col-sm-6">
				 <div class="create-item col-sm-12 text-center w3-margin">
					<img src="" id="image" height="280">
					<canvas class="hidden" id="canvas" width="360" height="280"></canvas>
					<input class="hidden" type="file" id="inputImage">
					<label id="labelImage" for="inputImage" class="col-sm-12 w3-border w3-hover-text-grey w3-padding w3-margin">Task image(select file)</label>
				  </div>
			</div>	
			<button type="submit" class="btn btn-primary col-sm-12 w3-margin w3-large" onclick="Create()">Create</button>
		</div>	
		<div id="modal" class="text-center taskInv">
			<h1 class="message"></h1>
			<a href="#" onclick="$(this.parentNode).fadeOut();">Continue create tasks</a>
			<a href="http://klimatcontrol.com.ua/task/create" onclick="$(this.parentNode).fadeOut();">New task</a>
			<a href="http://klimatcontrol.com.ua/task/admin" onclick="$(this.parentNode).fadeOut();">Back to tasks list</a>
			<span class="glyphicon glyphicon-remove w3-xlarge" onclick="$(this.parentNode).fadeOut();"></span>
		</div>
	</body>
</html>	