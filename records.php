<html>
<head>
<link href=".\CSS\materialize.css" type="text/css" rel="stylesheet">
<link href=".\CSS\records.css" type="text/css" rel="stylesheet">
</head>
<body>
<div id="header">
<h1>RECORD</h1>
</div>
<form method="post" enctype="multipart/form-data">
	<div id="content">
			<div id="name">
				NAME
			</div>
			<div id="input1">
				<div id="ip1">
				<input type="text" name="nfn" style="font-size:20px;width:450px; padding:10px; margin-left:30px;" placeholder="First Name" required>
				<input type="text" name="nln" style="font-size:20px;width:450px; padding:10px;" placeholder="Last Name" required>
				</div>
			</div>
			<div id="fname">
				FATHER NAME
			</div>
			<div id="input2">
				<div id="ip2">
				<input type="text" name="ffn" style="font-size:20px;width:450px; padding:10px; margin-left:30px;" placeholder="First Name" required>
				<input type="text" name="fln" style="font-size:20px;width:450px; padding:10px;" placeholder="Last Name" required>
				</div>
			</div>
			<div id="gender">
				<div id="gen">
					GENDER
				</div>
							<p>
							  <input class="with-gap" name="q1"  type="radio" id="test1" value="Male" />
							  <label for="test1" style="font-size:20px;">Male</label>
							</p>
							<p>
							  <input class="with-gap" name="q1" type="radio" id="test2" value="Female" />
							  <label for="test2" style="font-size:20px;">Female</label>
							</p>
							<p>
							  <input class="with-gap" name="q1" type="radio" id="test3" value="Others" />
							  <label for="test3" style="font-size:20px;">Other</label>
							</p>
			</div>
			
			<div id="dob">
				DATE OF BIRTH
			</div>
			<div id="input3">
				<input type="date" style="font-size:20px;width:435px; padding:10px; margin-left:20px;" name="dob" required>
			</div>
			
			<!-- <div class="file-field input-field">
				<div class="btn">
					<span>File</span>
					<input type="file">
				</div>
				<div class="file-path-wrapper">
					<input class="file-path validate" type="text">
				</div>
			</div>-->
			
			<div id="addr">
				ENTER ADDRESS
			</div>
			<div id="input4">
				<input type="text" name="adr" style="font-size:20px;width:450px; padding:10px; margin-left:30px;" placeholder="Enter Address" required>
			</div>
			<div id="but">
			 <button class="btn" type="submit" name="sub">Submit
			</button>
			</div>
	</div>
</form>
	
	<?php
	$link=mysql_connect("localhost","root","");
	mysql_select_db("project",$link);
	
	if(isset($_POST["sub"]))
	{
		$name1=$_POST["nfn"];
		$name2=$_POST["nln"];
		$fname1=$_POST["ffn"];
		$fname2=$_POST["fln"];
		$q1=$_POST["q1"];
		$dob=$_POST["dob"];
		$addr=$_POST["adr"];
		
		$query="insert into records set namefirst='$name1', namelast='$name2', fnamefirst='$fname1', fnamelast='$fname2', dob='$dob', address='$addr', gender='$q1'";
	    $row=mysql_query($query);
	
	if($row > 0)
	{
		echo "<script>alert('Success')</script>";
	}
	else
	{
		echo "<script>alert('Failure')</script>";
	}
	}
	?>
	<footer></footer>
</body>
</html>