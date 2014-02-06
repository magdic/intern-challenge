
<?php include 'model/dbconnect.php'; ?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../docs-assets/ico/favicon.png">

    <title>Intern Challenge</title>

    <!-- Bootstrap core CSS -->
    <link href="bower_components/bootstrap/dist/css/bootstrap.css" rel="stylesheet">

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
          <a class="navbar-brand" href="/intern-challenge">Intern Challenge</a>
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
                <li class="active"><a href="results"><span class="glyphicon glyphicon-th"></span> All Results</a></li>
                <li><a href="#"><span class="glyphicon glyphicon-user"></span> Specific Member</a></li>
              </ul>
            </li>
          </ul>
        </div><!--/.navbar-collapse -->
      </div>
    </div>

   </br></br></br></br>

    <div class="container">
      <!-- Example row of columns -->
      <div class="panel panel-primary">
        <!-- Default panel contents -->
        <div class="panel-heading">Panel Resulsts</div>
        <div class="panel-body">
          <p>Some default panel content here. Nulla vitae elit libero, a pharetra augue. Aenean lacinia bibendum nulla sed consectetur. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
        </div>

        <!-- Table -->
        <table class="table">
          <thead>
            <tr>
              <th>Name</th>
              <th>Assistance</th>
              <th>Verses</th>
              <th>Points</th>
            </tr>
          </thead>
          <tbody>
           
			<?php $query = mysql_query("SELECT * FROM member LEFT JOIN points ON member.idmember=points.idmember ORDER BY points DESC") or die(mysql_error());
            	while ($row = mysql_fetch_array($query)) {
            		$id = $row['idmember']; ?>

            <tr>
                <td><?php echo $row['mbname']; echo ' '.$row['mbsurname']; ?></td>
                <td><?php $asistance = $row['mbasistencia']; $asisresult = $asistance * 50; echo $asisresult; ?></td>
                <td><?php $verses = $row['mbverses']; $veresult = $verses * 150; echo $veresult; ?></td>
                <td><?php $points =  $row['points']; echo $asisresult + $veresult + $points; ?></td>
            </tr>
			<?php } ?>

          </tbody>
        </table>
      </div>
      
      </div>

      <hr>
    <div class="container">
      <footer>
        <p>&copy; Company 2013</p>
      </footer>
    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  </body>
</html>



