<? 
include('../DBconnect/dbconnect.php');
if($_POST['id']){
$id=$_POST['id'];
$cdd=$_POST['broq4a'];
$sq=mysql_fetch_array(mysql_query("SELECT * FROM warehouse WHERE serial_barcode='$id'"));
$prid=$sq['prod_id'];
$cat=mysql_fetch_array(mysql_query("SELECT * FROM products WHERE id='$prid'"));
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
			
			echo "<input type='text' value='1' style='width:60px' name='quantity".$cdd."' id='quantity".$cdd."' 
			onkeydown='if (event.keyCode == 38) {  
					quant= this.value;
					quant++;
					return this.value = quant;
						} 
						if (event.keyCode == 40) {  
					quant= this.value;
					quant--;
					return this.value = quant;
						} '
			>$nnn</input>";
			}else{
			echo "<input type='text' value='1' style='width:60px' name='quantity".$cdd."' id='quantity".$cdd."' onkeydown='if (event.keyCode == 38) {  
					quant= this.value;
					quant++;
					return this.value = quant;
						} 
						if (event.keyCode == 40) {  
					quant= this.value;
					quant--;
					return this.value = quant;
						} '
						>Броя</input>";
			}
}
?>