<? 
include('../DBconnect/dbconnect.php');
if($_POST['id']){
$id=$_POST['id'];
$cat=mysql_fetch_array(mysql_query("SELECT * FROM products WHERE id='$id'"));
if(!empty($cat['price'])){
		list($part1, $part2) = explode('.', $cat['price']);
		if(empty($part1)){
		$part1=0;
		}
		if(empty($part2)){
		$part2=0;
		}
			echo "<input type='text' style='width:50px;' value=".$part1." name='price'></input>.<input type='text' style='width:50px;' value=".$part2." name='price'></input>лв.";
			if(!empty($cat['measure'])){ echo " / ".$cat['measure']; }else{ echo "/ на броя";}
			}else{
			echo "<input type='text' value='' name='price'>/ Броя</input>";
			}
} 
?>