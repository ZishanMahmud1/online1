<?php

	$employee_name = $_GET["name"];

	$leave_start = $_GET["startdate"];
	$leave_end= $_GET["enddate"];




	require_once('db_connect.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");



	