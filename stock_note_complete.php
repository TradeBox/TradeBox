<?php session_start();
include('../DBconnect/dbconnect.php');
$user_id=$_SESSION['user_id'];
include('archive_add.php');	
	
			if(isset($_POST['submit'])){
			$supplier = $_POST['supplier'];	
			$obekt = $_POST['obekt'];
			
			
			mysql_query("INSERT INTO stock_note (supply_id,store_id,user_id) VALUES ('$supplier','$obekt','$user_id')") or die (mysql_query());
			
			add_to_archive('Потребителят добави нова Стокова разписка!');
			
			$mysql=mysql_fetch_array(mysql_query("SELECT * FROM stock_note ORDER BY id DESC"));
			$stid=$mysql['id'];
		header("Location: ware_add.php?stid=$stid&suply=$supplier");
			
			}
			?>