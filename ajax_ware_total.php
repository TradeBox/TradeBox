<? 
include('../DBconnect/dbconnect.php');
if($_POST['id']){
$id=$_POST['id'];
$cdd=$_POST['broq4a'];
$sq=mysql_fetch_array(mysql_query("SELECT * FROM warehouse WHERE serial_barcode='$id'"));
$prid=$sq['prod_id'];
if($prid!=null){
		$cat=mysql_fetch_array(mysql_query("SELECT * FROM products WHERE id='$prid'"));			
		echo "<input type='text' id='obshto".$cdd."' name='obshto".$cdd."' value='$cat[price]'>";
	}
}
?>