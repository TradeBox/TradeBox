<?php 
if (!empty($_POST['delete_category']) AND !empty($_GET['delete'] ) AND $_POST['delete_category'] == $_GET['delete'] ) { 
$id_category=$_GET['delete'];

$name_cat=mysql_fetch_array(mysql_query("SELECT * FROM sub_sub_categories WHERE id='$id_category'"));
$ime=$name_cat['name'];
$checking_prod=mysql_num_rows(mysql_query("SELECT * FROM products WHERE subsubcat_id='$id_category'"));
if($checking_prod==0){
mysql_query("DELETE FROM sub_sub_categories WHERE id='$id_category'"); $delete = $_GET['delete']; 
add_to_archive('Потребителят Изтри Под-под-категория /'.$ime.'/.');
}

}
?>