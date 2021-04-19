<?php 
session_start();
include '../model.php';
$class=$_GET['class'];

echo GetStudentByClass($class);
	?>