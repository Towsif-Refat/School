<?php
session_start();
include('../model.php');

if($_SERVER["REQUEST_METHOD"] == "POST"){
	 //echo $_POST['data'];
	echo GetSubForClass($_POST['data']);
}



?>