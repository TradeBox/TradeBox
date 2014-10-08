<? 
include('../DBconnect/dbconnect.php');
if($_POST['id']){
$id=$_POST['id'];
$aj=mysql_fetch_array(mysql_query("SELECT address FROM stores WHERE id='$id'"));
echo "$aj[address]";

} 
?>