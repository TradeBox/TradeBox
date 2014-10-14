<? 
include('../DBconnect/dbconnect.php');
if($_POST['id']){
$sid=$_POST['id'];
$broi=strlen($sid);
if($broi=='10'){
$sq=mysql_fetch_array(mysql_query("SELECT * FROM warehouse WHERE serial_barcode='$sid'"));
$prid=$sq['prod_id'];
$check=mysql_fetch_array(mysql_query("SELECT * FROM products WHERE id = '$prid'"));
echo "<option value='$prid'>".$check['name']."</option>"
}
} 
?>