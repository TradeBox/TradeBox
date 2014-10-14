<? 
include('header.php');
?>

<script type="text/javascript">
	$(document).ready(function()
	{
		$(".prod").change(function()
		{
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

		});

	});
</script> <script type="text/javascript">
	$(document).ready(function()
	{
		$(".prod").change(function()
		{
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

		});

	});
</script> <script type="text/javascript">
	$(document).ready(function()
	{
		$(".prod").change(function()
		{
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
</script> 
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

		});

	});
</script> 
		<div id="content">
			<div class="container">
<? 
if(isset($_POST['submit'])){
			$supplier = $_POST['supplier'];	
			$obekt = $_POST['obekt'];
			
			
			mysql_query("INSERT INTO warehouse (supply_id,store_id,user_id) VALUES ('$supplier','$obekt','$user_id')") or die (mysql_query());
			
			add_to_archive('Потребителят добави продукт към стокова разписка No: '.$_GET['stid'].' !');
			
			$mysql=mysql_fetch_array(mysql_query("SELECT * FROM stock_note ORDER BY id DESC"));
			$stid=$mysql['id'];
		header("Location: ware_add.php?stid=$stid");
			
			}



?>
<form method="post" action="">

<div id="orderform">
	<div id="server">
		Продукти
		<span id="type"></span>
		<a href="product_list.php"><input type="button" style="margin: 10px; float: right" class="green addPaypalSubscription" value="Списък продукти"></a>
	</div>
	<ul class="floatingBlocks" style="width:75.6%">
		<li style="width: 100%;">
			<div class="caption">
				<img src="other/icon_cloud.png" alt="Server Configuration">
				Данни стокова разписка
			</div>
			<div class="description">
				Попълнете данните за стокова разписка
			</div>
			<table>
				<tbody>
				<tr>
					<th>Продукт</th>
					<td>
						<select class="prod" name="prod" >
													<option value="">
                               Избери                             </option>
													<?php 
													$con=mysql_query("SELECT * FROM products"); 
													while($row=mysql_fetch_array($con)){?>
													<option value="<?php echo "$row[id]"; ?>">
                                <?php echo "$row[name]"; ?>                             </option>
								
								<? } ?>
												</select>
					</td>
				</tr>
				<tr>
					<th>Сериен Номер (Баркод)</th>
					<td>
					<input class="barkoc" type="text" value="" name="serial_bar" ></input>
					</td>
				</tr>
				<tr>
					<th>Количество</th>
					<td class="quan">
					<input type="text" value="" style="width:60px" name="quantity" ></input>
					</td>
				</tr>
				<tr>
					<th>Цена</th>
					<td class="cena">
					
					</td>
				</tr>
				<tr>
					<th>Срок на Годност</th>
					<td class="srok">
						
					</td>
				</tr>
				<tr>
					<th>Партида</th>
					<td>
						<input type='text' value='' name='expire_group'></input>
					</td>
				</tr>
				<tr>
					<th></th>
					<td>
						<input class="gray" style="float:right" name="submit" value="Добави" type="submit">
					</td> 
				</tr>
				
				
			</tbody></table>
		</li>
			</form>	
											
							</ul>
		
	<div id="options" class="optionMenu">
		<div class="caption active">
			Меню
		</div>
		<ul>
			<li>
				<a href="">
	<img src="other/icon_server_single.png" alt="">Добави продукт
</a>
<a href="http://leap3.singlehop.com/solutions/dynamic-servers/">
	<img src="other/icon_dynamic.png" alt="Dynamic"> Dynamic Servers
</a>
<a href="http://leap3.singlehop.com/solutions/public-cloud/">
	<img src="other/icon_cloud.png" alt="Public Cloud"> Public Cloud
</a>
<!-- Removing Hosted Apps Ticket 2458
<a href="/solutions/hosted-apps/">
	<img src="/resources/leap3/imgs/solutions/icon_hostedapps.png" alt="Hosted Apps" /> Hosted Apps
</a>
-->
<a href="http://leap3.singlehop.com/solutions/virtual-load-balancer/">
	<img src="other/icon_vlb.png" alt="Load Balancer"> Load Balancer
</a>				<a href="http://leap3.singlehop.com/solutions/existing/">
					<img> Existing Solutions
				</a>
			</li>
		</ul>
				<ul data-prices="hourly" id="total" class="ignore" style="margin-top: 30px;">
			<li class="caption">Bandwidth &amp; Mgmt Services</li>
			<li data-price="month">
				$<span>0.0000</span> / Month
			</li>
			<li class="caption">Online</li>
			<li data-price="online">
				$<span>0.0605</span> / Hour
			</li>
			<li class="caption">Offline</li>
			<li data-price="offline">
				$<span>0.0055</span> / Hour
			</li>
		</ul>
		<div style="display: none;" data-prices="monthly" id="total">
			$<span>0.00</span> / Month
		</div>
	</div>
</div>

		</div>
	</div>
	<? 
include('footer.php');
?>