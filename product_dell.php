<? session_start();
include('../DBconnect/dbconnect.php');
$id_prod=$_GET['id'];
include('archive_add.php');

$name_prod=mysql_fetch_array(mysql_query("SELECT * FROM products WHERE id='$id_prod'"));
$ime=$name_prod['name'];
mysql_query("DELETE FROM products WHERE id='$id_prod'");
add_to_archive('Потребителят Изтри продукт /'.$ime.'/.');

header("Location: product_list.php");
 ?>