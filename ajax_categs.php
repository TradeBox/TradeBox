<? 
include('../DBconnect/dbconnect.php');
if($_POST['id']){
$id=$_POST['id'];


					$cat=mysql_query("SELECT * FROM sub_sub_categories WHERE subcat_id='$id'");
					echo "<option value=''>Избери</option>";
					while($optcat=mysql_fetch_array($cat)){
					echo "<option value='$optcat[id]'>$optcat[name]</option>";
					}
} 
?>