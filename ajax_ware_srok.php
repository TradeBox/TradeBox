<? 
include('../DBconnect/dbconnect.php');
if($_POST['id']){
$id=$_POST['id'];
$cat=mysql_fetch_array(mysql_query("SELECT * FROM products WHERE id='$id'"));
if($cat['expire']==1){			
			echo "<input type='text' value='' name='expire'></option>";
			}else{
			echo "Продуктът е без срок на годност!";
			}
} 
?>