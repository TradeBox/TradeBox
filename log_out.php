<?php session_start();
include('../DBconnect/dbconnect.php');
$userid=$_SESSION['user_id'];
include('archive_add.php');

		add_to_archive('Потребителят Излезе от системата.');

session_destroy();
header("Location: login.php"); 



?>