<? 
include('../DBconnect/dbconnect.php');
if($_POST['id']){
$id=$_POST['id'];
$cdd=$_POST['broq4a'];
$sq=mysql_fetch_array(mysql_query("SELECT * FROM warehouse WHERE serial_barcode='$id'"));
$prid=$sq['prod_id'];
$cat=mysql_fetch_array(mysql_query("SELECT * FROM products WHERE id='$prid'"));
if($cat['expire']==1){			
			echo "<input type='text' id='popupDatepicker' name='".$cdd."'>";
			}else{
			echo "Продуктът е без срок на годност!";
			}
} 
?>