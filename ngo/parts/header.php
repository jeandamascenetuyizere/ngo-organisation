<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
    <link rel="stylesheet" href="lightbox.css">
   <style>
         .body-button{
            border:none;
            float:left;
            background:none;
        }
        .body-button:hover{
            color:white;
            background:blue;
            text-decoration:bold;
        }
        body{
        
        }
    </style>
</head>
<div class="container-lg" style="background-color: black; color: white;">

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header" style="background:none">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
    <a href="#"style="text-decoration:none;"><h1 style="font-family: 'Times New Roman', Times, serif;color:white; margin-top:2vh;">NGO-MIS</h1></a> 
    </div>
    <div class="collapse navbar-collapse" id="myNavbar" style="margin-top:8px; color:white;"> 
      <ul class="nav navbar-nav">
        <li class="inactive"><a href="index.php">Home</a></li>
        <li class="inactive"><a href="index.php">About us</a></li>
        <li><a href="#" data-toggle="modal" data-target="#service">Services</a></li>
        <li><a href="#" data-toggle="modal" data-target="#contactUs">Contact Us</a></li>
		<li>
  <form class="example" action="#" style="margin-top:10px;">
  <input type="text" placeholder="Search.." name="search2" style="height:33px;border-radius:5px; ">
  <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
</form>
</li>
</ul>
      <ul class="nav navbar-nav navbar-right">
      <li><a href="pages/signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="pages/Login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li> 
      </ul>
    </div>
  </div>
</nav>  
</div> 

 <?php 
include_once('parts/footer.php')
    ?>
    </body>
</html>
