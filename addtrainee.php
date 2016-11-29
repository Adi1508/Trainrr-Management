<?php
$link=mysql_connect("localhost","root","");
mysql_select_db("project",$link);
session_start();
error_reporting(0);
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
  <title> Add Trainee </title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

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
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">ADD TRAINEE</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">



                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $_SESSION["ses3"]; ?> <b class="caret"></b></a>
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
                    <a href="main_loggedin.php"><i class="fa fa-fw  fa-home"></i>Home</a>
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
                              <a href="add_duration.php">Duration</a>
                          </li>
                      </ul>
                  </li>
              </ul>
            </div>
        </nav>

        <div id="page-wrapper">
            <div class="container-fluid">

                        <!-- MY CODE -->
                        <form method="post" enctype="multipart/form-data">
                        <div class="jumbotron">
                          <div class="container">

                            <div class="row">
                              <div class="col-lg-6">
                                <div class="form-group">
                                  <label>Name</label>
                                  <input class="form-control" type="text" name="nm" placeholder="Enter name">
                                </div>
                                <div class="form-group">
                                  <label>Father Name</label>
                                  <input class="form-control" type="text" name="fm" placeholder="Enter father name">
                                </div>
                                <div class="form-group">
                                  <label>Mobile Number</label>
                                  <input class="form-control" type="number" name="mb" placeholder="Enter mobile number">
                                </div>
                                <div class="form-group">
                                  <label>Email-ID</label>
                                  <input class="form-control" type="email" name="em" placeholder="Enter email">
                                </div>
                                <div class="form-group">
                                  <label>Duration Choice</label>
                                  <select class="form-control" name="duration">
                                  <?php
                                  $query="select * from duration";
                                  $row=mysql_query($query);
                                    while($data=mysql_fetch_array($row))
                                    {
                                    ?>

                                      <option value = <?php echo $data['duration'] ?>><?php echo $data['duration'] ?></option>

                                  <?php
                                }
                                 ?>
                                 </select>
                              </div>
                             <div class="form-group">
                             <label>Address</label>
                             <textarea class="form-control"  name="add" rows="6" id="addr"></textarea>
                             </div>
                             <div class="form-group">
                               <label>Select Gender </label>
                               <label class="radio-inline">
                                 <input type="radio" name="gen" id="optionsRadiosInline1" value="Male">Male
                               </label>
                               <label class="radio-inline">
                                 <input type="radio" name="gen" id="optionsRadiosInline2" value="Female">Female
                               </label>
                             </div>
                           </div>

                           <div class="col-lg-6">
                             <div class="form-group">
                               <label>Date Of Joining</label>
                               <input class="form-control" type="date"  name="doj">
                             </div>
                             <div class="form-group">
                               <label>Date Of Birth</label>
                               <input class="form-control" type="date"  name="dob">
                             </div>
                             <div class="form-group">
                               <label>Select Course</label>
                                 <select multiple=""  class="form-control" name="course" value="<?php echo $row['course'] ?>">
                                   <?php
                                   $query=mysql_query("select * from course");
                                   while($row=mysql_fetch_array($query))
                                   {
                                     ?>
                                     <option value = <?php echo $row['course'] ?>><?php echo $row['course'] ?></option>
                                     <?php
                                   }
                                   ?>
                                 </select>
                             </div>
                             </br>
                             <div class="form-group">
                                  <label>Centre Choice</label>
                                  <select class="form-control" name="centre">
                                  <?php
                                  $query="select * from center";
                                  $row=mysql_query($query);
                                    while($data=mysql_fetch_array($row))
                                    {
                                    ?>

                                      <option value = <?php echo $data['centre'] ?>><?php echo $data['centre'] ?></option>

                                  <?php
                                }
                                 ?>
                                 </select>
                              </div>


                             <!--<ol class="breadcrumb">
                                              <h4>
                                                 IMAGE
                                              </h4>
                                            </ol>
                                            <div>
                                            <input  type="file" name="image"></div>-->
                                            </br>
                         	<label>Total Fee</label>
                         <div class="form-group input-group">
                             <span class="input-group-addon">Rs.</span>
                                 <input type="text" class="form-control" name="fee" placeholder="Total Fee">
                             <span class="input-group-addon">.00</span>
                         </div>
                              <p id="buttons">
                              <button type="submit" name="submit" class="btn btn-success">Submit</button>
                              <a href="addtrainee.php"><button type="button" class="btn btn-danger">Reset</button></a>
                              </p>
                    </div>
                  </div>
                </div>
              </div>
            </form>
            <?php
            if(isset($_POST["submit"]))
            {
              $name=$_POST["nm"];
              $fname=$_POST["fm"];
              $mobile=$_POST["mb"];
              $email=$_POST["em"];
              $coursedur=$_POST["duration"];
              $address=$_POST["add"];
              $gen=$_POST["gen"];
              $doj=$_POST["doj"];
              $dob=$_POST["dob"];
           
              $centre=$_POST["centre"];
               $course = implode(",",$_POST["course"]);
              $fee=$_POST["fee"];
              $nam=substr($name,0,4);
              $mob=substr($mobile,6);
              $uid=$nam.$mob;
              
              $img=$_FILES["image"]["name"];
           $temp_img=$_FILES['image']['tmp_name'];

          $type=$_FILES["image"]["type"];
          $size=$_FILES["image"]["size"];
          $store=$_FILES["image"]["tmp_name"];
           $arr= explode('.',$img);
         $k=end($arr);
         $formate=array("jpg","png","gif","jpeg",);

         if(in_array("$k",$formate))

          move_uploaded_file($store,"upload/".$img);

              $query="insert into traineerecords set name='$name', uid='$uid', fname='$fname', mobile='$mobile', email='$email',
                      courseduration='$coursedur', address='$address', doj='$doj', dob='$dob', course='$course',centre='$centre',image='$img', gender='$gen',
                      fee='$fee'";
              $row=mysql_query($query);
              if($row>0)
              {
                echo "<script>alert('Record Added Successfully')</script>";
              }
              else {
                echo "<script>alert('Record Addition Failure')</script>";
              }

            }
             ?>
            <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="ckeditor\ckeditor.js" type="text/javascript"></script>
    <script src="//cdn.ckeditor.com/4.4.7/full/ckeditor.js"></script>
	<script type="text/javascript">
    	$(function()
		{
			CKEDITOR.replace('addr');
			}
		);

    </script>
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
