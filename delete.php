<?php

$link=mysql_connect("localhost","root","");
mysql_select_db("project",$link);
$id=$_GET['xyz'];
$query="delete from traineerecords where id='$id'";
$data=mysql_query($query);
if($data > 0)
{
echo "<script> window.location.href='traineemanage.php'</script>";
}
echo "<script>alert('Try Again')</script>";
?>
