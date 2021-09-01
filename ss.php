<?php 
session_start();

    if(!isset($_SESSION['User']))
    {
      echo "<script>alert('You must login first.');window.location='index2.php';</script>";
    }
    else{
    isset($_SESSION['User']);
}
$mysqli = new mysqli('localhost','root','','yearbook') or die(mysqli_error($mysqli));


if(isset($_POST['save2'])){
	$id= $_POST['id'];
	$fname = $_POST['firstname'];
	$mname = $_POST['middlename'];
	$lname = $_POST['lastname'];
	$password = $_POST['position'];
	$year = $_POST['year'];
	$image = addslashes(file_get_contents($_FILES['f1']['tmp_name']));

	$mysqli->query("UPDATE tab2 SET image1='$image', fname='$fname', mname='$mname', lname='$lname', position='$password', year='$year' WHERE id='$id'") or die($mysqli->error());
	echo "<script>alert('Edit Successfully!');window.location='data7.php';</script>";
}

if(isset($_POST['save3'])){
	$id= $_POST['id'];
	$fname = $_POST['firstname'];
	$mname = $_POST['middlename'];
	$lname = $_POST['lastname'];
	$password = $_POST['position'];
	$year = $_POST['year'];

	$mysqli->query("UPDATE tab3 SET id='$id', fname='$fname', mname='$mname', lname='$lname', position='$password', year='$year' WHERE id='$id'") or die($mysqli->error());
	echo "<script>alert('Edit Successfully!');window.location='tabs3.php';</script>";
}



if(isset($_POST['save8'])){
	$id= $_POST['id'];
	$fname = $_POST['firstname'];
	$mname = $_POST['middlename'];
	$lname = $_POST['lastname'];
	$year = $_POST['year'];

	$mysqli->query("UPDATE shs SET id='$id', fname='$fname', mname='$mname', lname='$lname', year='$year' WHERE id='$id'") or die($mysqli->error());
	echo "<script>alert('Edit Successfully!');window.location='data9.php';</script>";
}
/*
if(isset($_POST['save9'])){
	$id= $_POST['id'];
	$fname = $_POST['firstname'];
	$mname = $_POST['middlename'];
	$lname = $_POST['lastname'];
	$year = $_POST['year'];

	$mysqli->query("UPDATE shs SET id='$id', lname='$lname',  fname='$fname', mname='$mname', year='$year' WHERE id='$id'") or die($mysqli->error());
	echo "<script>alert('Edit Successfully!');window.location='tabs9.php';</script>";
}*/


if(isset($_POST['save10'])){
	$id= $_POST['id'];
	$fname = $_POST['firstname'];
	$mname = $_POST['middlename'];
	$lname = $_POST['lastname'];
	$year = $_POST['year'];

	$mysqli->query("UPDATE tab10 SET id='$id', lname='$lname',  fname='$fname', mname='$mname', year='$year' WHERE id='$id'") or die($mysqli->error());
	echo "<script>alert('Edit Successfully!');window.location='tabs10.php';</script>";
}

if(isset($_POST['save11'])){
	$id= $_POST['id'];
	$de= $_POST['dess'];
	$year = $_POST['year'];

	$mysqli->query("UPDATE tab11 SET id='$id', description='$de', year='$year' WHERE id='$id'") or die($mysqli->error());
	echo "<script>alert('Edit Successfully!');window.location='data0.php';</script>";
}


?>