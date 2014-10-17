<? 
include('../DBconnect/dbconnect.php');
if($_POST['id']){
$cdd=$_POST['broq4a'];
$sid=$_POST['id'];
if(strlen($sid) != 13){
echo "<option value=''>
                               Избери                             </option>";
							   $con=mysql_query("SELECT * FROM products"); 
													while($row=mysql_fetch_array($con)){
echo "<option value='$row[id]'>$row[name]</option>";
}
}else{
$sq=mysql_fetch_array(mysql_query("SELECT * FROM warehouse WHERE serial_barcode='$sid'"));
$prid=$sq['prod_id'];
$check=mysql_fetch_array(mysql_query("SELECT * FROM products WHERE id = '$prid'"));
if(empty($check['id'])){
echo "<option value=''>
                               Избери                             </option>";
							   $con=mysql_query("SELECT * FROM products"); 
													while($row=mysql_fetch_array($con)){
echo "<option value='$row[id]'>$row[name]</option>";
}
}else{
echo "<option value='$prid'>$check[name]</option>";
}
}
}
?>