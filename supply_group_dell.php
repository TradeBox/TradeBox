<?php session_start();
include('../DBconnect/dbconnect.php');
$id_group=$_GET['id'];
include('archive_add.php');

$name_cat=mysql_fetch_array(mysql_query("SELECT * FROM supply_groups WHERE id='$id_group'"));
$ime=$name_cat['group_name'];
$checking_prod=mysql_num_rows(mysql_query("SELECT * FROM suppliers WHERE grupa='$id_group'"));
if($checking_prod==0){
mysql_query("DELETE FROM supply_groups WHERE id='$id_group'");
add_to_archive('Потребителят Изтри група /'.$ime.'/.');
}

header("Location: supply_groups.php");
?>