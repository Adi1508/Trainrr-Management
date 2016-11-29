<?php
$link=mysql_connect("localhost","root","");
mysql_select_db("project",$link);
session_start();
$name="Guest User";
 ?>



<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Welcome</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">

              </div>
                <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $name; ?><b class="caret"></b></a>
                    <ul class="dropdown-menu">

                        <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                        </li>
                        <li class="divider"></li>



                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
              <ul class="nav navbar-nav side-nav">
                <li>
                    <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-users"></i>Administrator<i class="fa fa-fw fa-caret-down"></i></a>
                    <ul id="demo" class="collapse">
                        <li>
                            <a href="Login.php">Login</a>
                        </li>
                        <li>
                            <a href="SignUp.php">Sign-Up</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="Login.php"><i class="fa fa-fw  fa-home"></i>Home</a>
                </li>

                  <li>
                      <a href="Login.php"><i class="fa fa-fw fa-tasks"></i>Trainee Manager</a>
                  </li>
                  <li>
                      <a href="Login.php"><i class="fa fa-fw fa-tasks"></i> Manage Fee</a>
                  </li>
                  <li>
                      <a href="Login.php"><i class="fa fa-fw fa-tasks"></i> Manage Enquiry</a>
                  </li>
                  <li>
                      <a href="Login.php"><i class="fa fa-fw fa-tasks"></i>Manage Admin</a>
                  </li>
                  <li>
                      <a href="javascript:;" data-toggle="collapse" data-target="#demo1"><i class="fa fa-fw fa-arrows-v"></i>Master Entry <i class="fa fa-fw fa-caret-down"></i></a>
                      <ul id="demo1" class="collapse">
                          <li>
                                <a href="Login.php">Center</a>
                          </li>
                          <li>
                              <a href="Login.php">Course</a>
                          </li>
                          <li>
                              <a href="Login.php">Type</a>
                          </li>
                          <li>
                              <a href="Login.php">Duration</a>
                          </li>
                      </ul>
                  </li>
              </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">
                        <!-- MY CODE -->

                        <div class="jumbotron">
                          <div class="container">
                              <h1 >WELCOME</h1>

                    </div>
                  </div>

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
