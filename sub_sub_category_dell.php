<?php session_start();
include('../DBconnect/dbconnect.php');
$id_category=$_GET['id'];
include('archive_add.php');

$name_cat=mysql_fetch_array(mysql_query("SELECT * FROM sub_sub_categories WHERE id='$id_category'"));
$ime=$name_cat['name'];
$checking_prod=mysql_num_rows(mysql_query("SELECT * FROM products WHERE sub_cat_id='$id_category'"));
if($checking_prod==0){
mysql_query("DELETE FROM sub_sub_categories WHERE id='$id_category'");
add_to_archive('Потребителят Изтри Под-под-категория /'.$ime.'/.');
}

header("Location: sub_sub_category_add.php");
?>