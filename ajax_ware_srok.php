<? 
include('../DBconnect/dbconnect.php');
if($_POST['id']){
$id=$_POST['id'];
$cdd=$_POST['broq4a'];
$sq=mysql_fetch_array(mysql_query("SELECT * FROM warehouse WHERE serial_barcode='$id'"));
$prid=$sq['prod_id'];
if($prid!=null){
$cat=mysql_fetch_array(mysql_query("SELECT * FROM products WHERE id='$prid'"));
if($cat['expire']==1){			
			echo "<input type='text' id='popupDatepicker' name='expire".$cdd."' value='$sq[expire]'>";
			}else{
			echo "Продуктът е без срок на годност!";
			}
			
			}else{
			
$cat=mysql_fetch_array(mysql_query("SELECT * FROM products WHERE id='$id'"));
if($cat['expire']==1){			
			echo "<input type='text' id='popupDatepicker' name='expire".$cdd."'>";
			}else{
			echo "Продуктът е без срок на годност!";
			}
			}
} 
?>