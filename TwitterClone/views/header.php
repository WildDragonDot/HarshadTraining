<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/css/bootstrap.min.css" integrity="sha384-AysaV+vQoT3kOAXZkl02PThvDr8HYKPZhNT5h/CXfBThSRXQ6jW5DO2ekP5ViFdi" crossorigin="anonymous">
	  
	  <link rel="stylesheet" href="style.css">
  </head>
  <body>
	  <nav class="navbar navbar-light bg-faded">
  <a class="navbar-brand" href="index.php">Twitter</a>
  <ul class="nav navbar-nav">
    <li class="nav-item active">
      <a class="nav-link" href="?page=timeline">Your Timeline</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="?page=yourtweets">Your Tweets</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="?page=publicprofiles">Public Profiles</a>
    </li>
   
  </ul>
  <div class="form-inline float-xs-right">
	  
	  <?php 
	  
	  	if(isset($_SESSION['id'])) { 
	  ?>
	  
	  
    <a class="btn btn-outline-success" href="?function=logout">Logout</a>
	  
	  <?php } else{ ?>
    
    <button class="btn btn-outline-success" data-toggle="modal" data-target="#myModal">Login/Sign Up</button>
	  
	  <?php } ?>
  </div>
</nav>