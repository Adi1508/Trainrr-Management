<?php
$link=mysql_connect("localhost","root","");
mysql_select_db("project",$link);
session_start();
 ?>
<?php
if($_SESSION['ses1']=="")
{
	header('location:Login.php');
}
 ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Trainee Manage</title>

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
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $_SESSION["ses3"]; ?><b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="Logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>

            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
              <ul class="nav navbar-nav side-nav">
                <li>
                    <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i>Administrator<i class="fa fa-fw fa-caret-down"></i></a>
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
                    <a href="main_loggedin.php"><i class="fa fa-fw fa-dashboard"></i>Home</a>
                </li>

                  <li>
                      <a href="addtrainee.php"><i class="fa fa-fw fa-table"></i>Trainee Manager</a>
                  </li>
                  <li>
                      <a href="managefee.php"><i class="fa fa-fw fa-table"></i> Manage Fee</a>
                  </li>
                  <li>
                      <a href="add_enquiry.php"><i class="fa fa-fw fa-table"></i> Manage Enquiry</a>
                  </li>
                  <li>
                      <a href="manage_admin.php"><i class="fa fa-fw fa-table"></i>Manage Admin</a>
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
                              <a href="add_duration.php">Duration</a>
                          </li>
                      </ul>
                  </li>
              </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <div class="jumbotron">
                  <div class="container">

                    <div class="col-lg-12">
                          <div class="panel panel-primary">
                            <div class="panel-heading">
                               <table>
							<tr>
                                <td><h3 class="panel-title" align="center">Trainee Details</h3></td>

								<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								<a href="addtrainee.php"><button type="button" class="btn btn btn-success">Add New Trainee</button></td></tr></table></a>
                            </div>


                            <div class="panel-body">
                          <div class="row">
                      <!--  <div class="col-lg-6">
                          <a href="addtrainee.php"><button type="button" class="btn btn btn-primary">Add New Trainee</button></a>
                      </div> -->

                      <div class="col-lg-14">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>S.No</th>
                                <th>Name</th>
                                <th>Father Name</th>
                                <th>Mobile Number</th>
                                <th>Email-ID</th>
                                <th>Course Duration</th>
                                <th>Address</th>
                                <th>Date of Joining</th>
                                <th>Date of Birth</th>
                                <th>Course</th>
                                
                                <th>Image</th>
                                <th>Gender</th>
                                <th>Fee</th>
                                <th>Action</th>

                            </tr>
                        </thead>
                        <div class="panel-body">
                        <?php
                        $query="select * from traineerecords";
                        $row=mysql_query($query);
                        $count=1;
                        while($data=mysql_fetch_array($row))
                        {
                        ?>
                        <tbody>
                        <tr>
                        <td><?php echo $count; ?></td>
                        <td><?php echo $data["name"]; ?></td>
                        <td><?php echo $data["fname"]; ?></td>
                        <td><?php echo $data["mobile"]; ?></td>
                        <td><?php echo $data["email"]; ?></td>
                        <td><?php echo $data["courseduration"]; ?></td>
                        <td><?php echo $data["address"]; ?></td>
                        <td><?php echo $data["doj"]; ?></td>
                        <td><?php echo $data["dob"]; ?></td>
                        <td><?php echo $data["course"]; ?></td>
                        <td><?php echo $data["image"]; ?></td>
                        <td><?php echo $data["gender"]; ?></td>
                        <td><?php echo $data["fee"]; ?></td>
                        <td><a href="Edit_trainee.php?abc=<?php echo $data['id'] ?>">Edit</br></a>
                                        <a href="delete.php?xyz=<?php echo $data['id']; ?>">Delete</br></a></td>
                        </tr>
                        </tbody>
                        <?php
                        $count++;
                        }
                        ?>
                    </table>
                </div>
              </div>
              </div>
            </div>
            </div>
          </div>


  </div>

                  </div>
                </div>


                        <!-- MY CODE -->


                <!-- /.row -->
<!--my7 inserted table-->










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
