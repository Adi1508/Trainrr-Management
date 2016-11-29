<?php
$link=mysql_connect("localhost","root","");
mysql_select_db("project",$link);
session_start();
?>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login</title>

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

                <a class="navbar-brand">ADMIN LOGIN</a>
            </div>
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
                    <a href="login.php"><i class="fa fa-fw  fa-home"></i>Home</a>
                </li>

                  <li>
                      <a href="addtrainee.php"><i class="fa fa-fw fa-tasks"></i>Trainee Manager</a>
                  </li>
                  <li>
                      <a href="managefee.php"><i class="fa fa-fw fa-tasks"></i> Manage Fee</a>
                  </li>
                  <li>
                      <a href="add_enquiry.php"><i class="fa fa-fw fa-tasks"></i> Manage Enquiry</a>
                  </li>
                  <li>
                      <a href="manage_admin.php"><i class="fa fa-fw fa-tasks"></i>Manage Admin</a>
                  </li>
                  <li>
                      <a href="javascript:;" data-toggle="collapse" data-target="#demo1"><i class="fa fa-fw fa-arrows-v"></i>Master Entry <i class="fa fa-fw fa-caret-down"></i></a>
                      <ul id="demo1" class="collapse">
                          <li>
                                <a href="addcentre.php">Center</a>
                          </li>
                          <li>
                              <a href="addcourse.php">Course</a>
                          </li>
                          <li>
                              <a href="add_type.php">Type</a>
                          </li>
                          <li>
                              <a href="add_duration.php">Duration</a>
                          </li>
                      </ul>
                  </li>
              </ul>
            </div>
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">
              <div class="jumbotron" style="margin:auto">
                <div class="container" style="margin:auto">

              <h1>LOGIN</h1>

              <form method="post" enctype="multipart/form-data">

                <div class="form-group">

                  <input class="form-control" type="text" style="width:500px"  name="nm" placeholder="Enter name" required>
                </div>
                <div class="form-group">

                  <input class="form-control" type="password" style="width:500px" name="ps" placeholder="Enter password" required>
                </div>
              			<button type="submit" name="action" class="btn btn-success">Login</button>
              </form>
              <?php
              if(isset($_POST["action"]))
              {
              	$x=$_POST["nm"];
              	$y=$_POST["ps"];
              	$_SESSION["ses1"]=$x;
              	$_SESSION["ses2"]=$y;
              	$query="select * from signup where email='$x' and password='$y'";
              	$row=mysql_query($query);
              	$data=mysql_fetch_array($row);
                $z=$data["name"];
                $_SESSION["ses3"]=$z;
              	if($data>0)
              	{
              	echo "<script>window.location.href='main_loggedin.php'</script>";
              	}
              	else
                {
                  echo "<script>alert('failure')</script>";
                }
              }
              ?>
            </div>
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
