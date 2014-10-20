<? 
include('../DBconnect/dbconnect.php');
if($_POST['id']){
$id=$_POST['id'];
$cdd=$_POST['broq4a'];
$sq=mysql_fetch_array(mysql_query("SELECT * FROM warehouse WHERE serial_barcode='$id'"));
$prid=$sq['prod_id'];
if($prid!=null){
$cat=mysql_fetch_array(mysql_query("SELECT * FROM products WHERE id='$prid'"));
if(!empty($cat['price'])){
		list($part1, $part2) = explode('.', $cat['price']);
		if(empty($part1)){
		$part1=0;
		}
		if(empty($part2)){
		$part2='00';
		}
			echo "<input type='text' style='width:80px;' value=".$part1.".".$part2." name='price".$cdd."'></input>лв.";
			if(!empty($cat['measure'])){ echo " / ".$cat['measure']; }else{ echo "/ на броя";}
			}else{
			echo "<input type='text' value='' name='price'>/ Броя</input>";
			}
}else{
$cat=mysql_fetch_array(mysql_query("SELECT * FROM products WHERE id='$id'"));
if(!empty($cat['price'])){
		list($part1, $part2) = explode('.', $cat['price']);
		if(empty($part1)){
		$part1=0;
		}
		if(empty($part2)){
		$part2='00';
		}
			echo "<input type='text' style='width:80px;' value=".$part1.".".$part2." name='price".$cdd."'></input>лв.";
			if(!empty($cat['measure'])){ echo " / ".$cat['measure']; }else{ echo "/ на броя";}
			}else{
			echo "<input type='text' value='' name='price'>/ Броя</input>";
			}
			}
} 
?>