<? 
include('header.php');
?>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="other/jquery.plugin.js"></script>
<script src="other/jquery.datepick.js"></script>
<link href="other/jquery.datepick.css" rel="stylesheet">
<script>
$(function() {
	$('#popupDatepicker').datepick();
	$('#inlineDatepicker').datepick({onSelect: showDate});
});

function showDate(date) {
	alert('The date chosen is ' + date);
}
</script>


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
	$(document).ready(function()
	{
		$(".barkoc").change(function()
		{
			var id=$(this).val();
			var dataString = 'id='+ id;

			$.ajax
			({
			type: "POST",
			url: "ajax_ware_bar.php",
			data: dataString,
			cache: false,
			success: function(html)
				{
					$(".prod").html(html);
				
				}
			}); 
			
			var id=$(this).val();
			var dataString = 'id='+ id;

			$.ajax
			({
			type: "POST",
			url: "ajax_ware_srok.php",
			data: dataString,
			cache: false,
			success: function(html)
				{
					$(".srok").html(html);
				}
			});
			var id=$(this).val();
			var dataString = 'id='+ id;

			$.ajax
			({
			type: "POST",
			url: "ajax_ware_cena.php",
			data: dataString,
			cache: false,
			success: function(html)
				{
					$(".cena").html(html);
				}
			});
				
			var id=$(this).val();
			var dataString = 'id='+ id;

			$.ajax
			({
			type: "POST",
			url: "ajax_ware_quantity.php",
			data: dataString,
			cache: false,
			success: function(html)
				{
					$(".quan").html(html);
				}
			});


		});

	});
	
	
	$('#pavel input').bind('keypress', function(e) {
	var code = e.keyCode || e.which;
 if(code == 13) { //Enter keycode
   //Do something \
   alert('NAaa');
 }
});
</script> 




		<div id="content">
			<div class="container">
<? 
if(isset($_POST['submit'])){
			$supplier = $_POST['supplier'];	
			$prod = $_POST['prod'];
			$serial_bar = $_POST['serial_bar']; 
			$price = $_POST['price'];
			$expire = $_POST['expire'];
			$expire_group =  $_POST['expire_group'];
			$quantity = $_POST['quantity']; 
			$stock_note = $_GET['stid'];
			
			mysql_query("INSERT INTO warehouse (prod_id,serial_barcode,quantity,price,expire,expire_group,stock_note) VALUES ('$prod','$serial_bar','$price','$quantity','$expire','$expire_group','$stock_note')") or die (mysql_query());
			
			add_to_archive('Потребителят добави продукт към Наличност No: '.$_GET['stid'].' !');
			
	
			}

$block='none';
?>
<form method="post" onsubmit="newRow.style.display='<? $block='block'; echo "$block"; ?>'"  action="">

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
			<table style="border: 1px solid">
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
					<input onkeydown="if (event.keyCode == 13) {
						newRow1.style.visibility='visible';
						foc = document.getElementById('barkoc1');
						foc.focus();
					}" class="barkoc" id="pavel" type="text" value="" autofocus name="serial_bar" ></input>
					</td>
					<td>
					<select class="prod" name="prod" >
													<option value="">Избери</option>
													<?php 
													$con=mysql_query("SELECT * FROM products"); 
													while($row=mysql_fetch_array($con)){?>
													<option value="<?php echo "$row[id]"; ?>">
                                <?php echo "$row[name]"; ?>                             </option>
								
								<? } ?>
					</select>
					</td>
					<td class="quan">
					<input type="text" value="" style="width:60px" name="quantity" ></input>
					</td>
					<td class="cena">
					
					</td>
					
					<td class="srok">
					<input type='text' id='popupDatepicker'>
					</td>
					<td>
						<input type='text' value='' name='expire_group'></input>
					</td>
				</tr>
			
			<tr id="newRow1" style="visibility:collapse;">
					<td>
					<input id="barkoc1" type="text" maxlength="13" value="" autofocus name="serial_bar1" ></input>
					</td>
					<td>
					<select class="prod1" name="prod1" >
													<option value="">Избери</option>
													<?php 
													$con=mysql_query("SELECT * FROM products"); 
													while($row=mysql_fetch_array($con)){?>
													<option value="<?php echo "$row[id]"; ?>">
                                <?php echo "$row[name]"; ?>                             </option>
								
								<? } ?>
					</select>
					</td>
					<td class="quan1">
					<input type="text" value="" style="width:60px" name="quantity1" ></input>
					</td>
					<td class="cena1">
					
					</td>
					
					<td class="srok1">
					<input type='text' id='popupDatepicker1'>
					</td>
					<td>
						<input type='text' value='' name='expire_group1'></input>
					</td>
				</tr>
				<tr>
				<td colspan="6">
						<input style="float:right" class="gray" type='button' value='Добави продуктите' name=''></input>
					</td>
				</tr>
				
			</tbody></table>
		</li>
			</form>	
											
							</ul>
		
		</div>
	</div>
	<? 
include('footer.php');
?>