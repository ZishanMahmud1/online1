<?php

	$employee_name = $_GET["name"];

	$leave_start = $_GET["startdate"];
	$leave_end= $_GET["enddate"];




	require_once('db_connect.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");


 $result=mysqli_query( $connect, "INSERT INTO leave_entry VALUES ( NULL, '$employee_name', '$leave_start','$leave_end','PENDING','NULL' )" )

		or die("Can not execute query");



	echo "Record inserted:<br> f0 = $f0 <br> f1 = $f1";



	echo "<p><a href=read.php>READ all records</a>";

?>
	