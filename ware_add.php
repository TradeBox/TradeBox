<? 
include('header.php');

$cdd=0;
?>



<style>

ul.floatingBlocks > li > table:not(.dataTable) th {
    border: 1px solid #ccc; }
	
ul.floatingBlocks > li table:not(.dataTable) td {
  border: 1px solid #ccc;
    color: rgb(110, 110, 110);
    font-size: 15px;
    overflow: auto;
    padding: 16px 7px 7px;
    text-align: left;
    vertical-align: top;
}
</style>

<script type="text/javascript">
$(document).ready(function()	{	$(".barkoc0").change(function()		{ 	
		var id=$(this).val();			$.ajax			({			type: "POST",			url: "ajax_ware_quantity.php",			data: { id: id, broq4a:0 },			cache: false,			success: function(html)				{					$(".quan0").html(html);				}			});	
		var id=$(this).val();					$.ajax			({			type: "POST",			url: "ajax_ware_bar.php",			data:  { id: id, broq4a:0 },			cache: false,			success: function(html)				{					$(".prod0").html(html);				}			}); 			var id=$(this).val();					$.ajax			({			type: "POST",			url: "ajax_ware_srok.php",			data:  { id: id, broq4a:0 },			cache: false,			success: function(html)				{					$(".srok0").html(html);				}			});			var id=$(this).val();				$.ajax			({			type: "POST",			url: "ajax_ware_cena.php",			data:  { id: id, broq4a:0 },			cache: false,			success: function(html)				{					$(".cena0").html(html);				}			});		});	});	
var broi = 0;
function addRows(){
broi++;

  var TABLE = document.getElementById('tableId');
  var BODY = TABLE.getElementsByTagName('tbody')[0];
  var TR = document.createElement('tr');
  
  var TD1 = document.createElement('td');
  TD1.innerHTML = "<input type='text' value='' autofocus  name='serial_bar"+broi+"' class='barkoc"+broi+"' id='serial_bar"+broi+"' ></input>";
  var TD2 = document.createElement('td');
  TD2.innerHTML = "<select type='text' value='' class='prod"+broi+"'  name='prod"+broi+"' ></select>";
  var TD3 = document.createElement('td');
  TD3.innerHTML = "";
  TD3.className="quan"+broi;
  var TD4 = document.createElement('td');
  TD4.innerHTML = "";
  TD4.className="cena"+broi;
  var TD5 = document.createElement('td');
  TD5.innerHTML = "";
  TD5.className="srok"+broi;
  var TD6 = document.createElement('td');
  TD6.innerHTML = "<input type='text' value=''  name='expire_group"+broi+"' ></input><input style='display:none' type='text' value='"+broi+"'  name='broqt_e' ></input>";
  
  
  TR.appendChild (TD1);
  TR.appendChild (TD2);
   TR.appendChild (TD3);
    TR.appendChild (TD4);
	 TR.appendChild (TD5);
	  TR.appendChild (TD6);
  BODY.appendChild(TR);
  
 
 }
 function newscriptajax() {
    var s = document.createElement('script');
    s.type = 'text/javascript';
    var code = '$(document).ready(function()	{	$(".barkoc'+broi+'").change(function()		{ 			var id=$(this).val();			$.ajax			({			type: "POST",			url: "ajax_ware_bar.php",			data: { id: id, broq4a:'+broi+' },			cache: false,			success: function(html)				{					$(".prod'+broi+'").html(html);				}			}); 			var id=$(this).val();					$.ajax			({			type: "POST",			url: "ajax_ware_srok.php",			data: { id: id, broq4a:'+broi+' },			cache: false,			success: function(html)				{					$(".srok'+broi+'").html(html);				}			});			var id=$(this).val();					$.ajax			({			type: "POST",			url: "ajax_ware_cena.php",			data: { id: id, broq4a:'+broi+' },			cache: false,			success: function(html)				{					$(".cena'+broi+'").html(html);				}			});			var id=$(this).val();   			$.ajax			({			type: "POST",			url: "ajax_ware_quantity.php",			data: { id: id, broq4a:'+broi+' },			cache: false,			success: function(html)				{					$(".quan'+broi+'").html(html);				}			});		});	});	';
    try {
      s.appendChild(document.createTextNode(code));
      document.body.appendChild(s);
    } catch (e) {
      s.text = code;
      document.body.appendChild(s);
    }
}

 
function nowfocus(){
foc = document.getElementById('serial_bar'+broi);
foc.focus();
}
</script>



		<div onkeydown="if (event.keyCode == 13) {
						addRows();
						nowfocus();
						newscriptajax();
					}" id="content">
			<div class="container">
<? 
if(isset($_POST['broqt_e'])){
$stock_note = $_GET['stid'];
$supplier = $_POST['supplier'];	
			$broqt_e=$_POST['broqt_e']+1;		
			echo "<script> alert('broq e".$broqt_e."'); </script>";
			$ii=0;
			while($ii<$broqt_e){
			$prod = $_POST['prod'.$ii];
			$serial_bar = $_POST['serial_bar'.$ii]; 
			$price = $_POST['price'.$ii];
			$expire = $_POST['expire'.$ii];
			$expire_group =  $_POST['expire_group'.$ii];
			$quantity = $_POST['quantity'.$ii]; 
			if(!empty($prod) && !empty($quantity)){
			mysql_query("INSERT INTO warehouse (prod_id,serial_barcode,price,quantity,expire,expire_group,stock_note) VALUES ('$prod','$serial_bar','$price','$quantity','$expire','$expire_group','$stock_note')") or die (mysql_query());
			}$ii++;
			}
			
			
			//add_to_archive('Потребителят добави продукт към Наличност No: '.$_GET['stid'].' !');
			
	
			}
?>
<form method="post" name="formata" action="">

<div id="orderform">
	<div id="server">
		Продукти
		<span id="type"></span>
		<a href="product_list.php"><input type="button" style="margin: 10px; float: right" class="green addPaypalSubscription" value="Списък продукти"></a>
	</div>
	<ul class="floatingBlocks" style="width:100%">
		<li style="width: 100%;">
			<div class="caption">
				<img src="other/icon_cloud.png" alt="Server Configuration">
				Продукти в стокова разписка
			</div>
			<div class="description">
				Попълнете данните за стокова разписка
			</div>
			<table id="tableId" style="border: 1px solid">
				<tbody>
				<tr>
					<th>Сериен Номер (Баркод)</th>
					<th>Продукт</th>
					<th>Количество</th>
					<th>Цена</th>
					<th>Срок на Годност</th>
					<th>Партида</th>
				</tr>
				<tr>
					<td>
					<input  class="barkoc0" id="pavel" type="text" value="" autofocus name="serial_bar0" ></input>
					</td>
					<td>
					<select class="prod0" name="prod0" >
													<option value="">Избери</option>
													<?php 
													$con=mysql_query("SELECT * FROM products"); 
													while($row=mysql_fetch_array($con)){?>
													<option value="<?php echo "$row[id]"; ?>">
                                <?php echo "$row[name]"; ?>                             </option>
								
								<? } ?>
					</select>
					</td>
					<td class="quan0">
					<input type="text" value="1" style="width:60px" name="quantity" ></input>
					</td>
					<td class="cena0">
					
					</td>
					
					<td class="srok0">
					<input type='text' name="expire" id='popupDatepicker'>
					</td>
					<td>
						<input type='text' value='' name='expire_group0'></input><input style='display:none' type='text' value='0'  name='broqt_e' ></input>
					</td>
				</tr>
		
			
				
			</tbody></table>
			<script type="text/javascript">
function submitform()
{
  document.forms["formata"].submit();
}
</script>
						<input style="float:right" class="gray" type='button' value='Добави продуктите'
						onClick="submitform()" name="gotovo" />
			
		</li>
			</form>	
											
							</ul>
		
		</div>
	</div>
	<? 
include('footer.php');
?>