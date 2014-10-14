<? 
include('../DBconnect/dbconnect.php');
if($_POST['id']){
$id=$_POST['id'];
$cat=mysql_fetch_array(mysql_query("SELECT * FROM products WHERE id='$id'"));
if(!empty($cat['measure'])){
	if($cat['measure']=="на брой"){
	$nnn="Броя";
	}
	if($cat['measure']=="на литър"){
	$nnn="Литра";
	}
	if($cat['measure']=="на метър"){
	$nnn="Метра";
	}
	if($cat['measure']=="на килограм"){
	$nnn="Килограма";
	}
			
			echo "<input type='text' value='' style='width:60px' name='quantity' >$nnn</input>";
			}else{
			echo "<input type='text' value='' style='width:60px' name='quantity' >Броя</input>";
			}
}
?>