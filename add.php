<?php
require_once('model/auth.php');
include('model/dbconnect.php');
//Array to store validation errors
$errmsg_arr = array();
if (!isset($_SESSION)) {
session_start();

}


 
//Validacion de bandera de error
$errflag = false;
//Funcion para recibir valores del form. Previene SQL injection
function clean($str)
	{
		$str = @trim($str);
		if(get_magic_quotes_gpc())
			{
			$str = stripslashes($str);
			}
		return mysql_real_escape_string($str);
	}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../docs-assets/ico/favicon.png">

    <title>Add Member | Intern Challenge</title>

    <!-- Bootstrap core CSS -->
    <link href="bower_components/bootstrap/dist/css/bootstrap.css" rel="stylesheet">
    <link href="bower_components/bootstrap/dist/css/datepicker.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="jumbotron.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../docs-assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="app">Project name</a>
        </div>
        <div class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
            <li class="active"><a href="app">Home</a></li>
            <li><a href="about">About</a></li>
            <li><a href="#contact">Contact</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Administrator <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="add"><span class="glyphicon glyphicon-plus"></span> Add new member</a></li>
                <li><a href="actions"><span class="glyphicon glyphicon-pencil"></span> Admin Actions</a></li>
                <li class="divider"></li>
                <li class="dropdown-header"><span class="glyphicon glyphicon-stats"></span> See Results</li>
                <li><a href="results"><span class="glyphicon glyphicon-th"></span> All Results</a></li>
                <li><a href="#"><span class="glyphicon glyphicon-user"></span> Specific Member</a></li>
              </ul>
            </li>
          </ul>

        </div><!--/.navbar-collapse -->
      </div>
    </div>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h1>Add a new member!</h1>
        <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
        <p><a class="btn btn-primary btn-lg" role="button">Learn more &raquo;</a></p>
      </div>
    </div>

    <div class="container">
      
      <!-- Form -->
      <form role="form" action="model/addmember.php" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label for="exampleInputname">Name</label>
    <input type="input" class="form-control" id="mbname" name="mbname" placeholder="Enter a name">
  </div>
  <div class="form-group">
    <label for="exampleInputsurname">Surname</label>
    <input type="input" class="form-control" id="mbsurname" name="mbsurname" placeholder="Enter a Surname">
  </div>    	    	
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="mbemail" name="mbemail" placeholder="Enter email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Phone</label>
    <input type="input" class="form-control" id="mbphone" name="mbphone" placeholder="Phone">
  </div>

<div class="form-group">
    <label class="control-label">Birthday Date</label>
    <div class="input-append date" id="dpYears" data-date="12-02-2012" data-date-format="mm/dd/yyyy" data-date-viewmode="years">
        <input class="form-control" size="16" type="input" value="Select a Birthday Date" id="mbdate" name="mbdate"readonly>
        <span class="add-on"><i id="birth-icon" class="glyphicon glyphicon-calendar"></i></span>
    </div>
</div>


  <button type="submit" class="btn btn-success">Submit</button>
</form>



      <hr>

      <footer>
        <p>&copy; Company 2013</p>
      </footer>
    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-1.10.1.min.js"></script>
    <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="bower_components/bootstrap/dist/js/bootstrap-datepicker.js"></script>
    <script src="bower_components/bootstrap/dist/js/datapickers.js"></script>
    
  </body>
</html>
