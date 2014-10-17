<? 
include('header.php');
?>
		<div id="content">
			<div class="container">

<form method="post" action="stock_note_complete.php">

<div id="orderform">
	<div id="server">
		Нова стокова разписка
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
					<th>Доставчик</th>
					<td>
						<select name="supplier"  >
													<option value="">
                               Моля изберете                             </option>
													<?php 
													$con=mysql_query("SELECT * FROM suppliers"); 
													while($row=mysql_fetch_array($con)){?>
													<option value="<?php echo "$row[id]"; ?>">
                                <?php echo "$row[name]"; ?>                             </option>
								
								<? } ?>
												</select>
						
					</td>
				</tr>
				<tr>
					<th>Обект</th>
					<td>
					<select class="obekt" name="obekt" >
													<option value="">
                               Моля изберете                             </option>
													<?php 
													$con=mysql_query("SELECT * FROM stores"); 
													while($row=mysql_fetch_array($con)){?>
													<option value="<?php echo "$row[id]"; ?>">
                                <?php echo "$row[name]"; ?>                             </option>
								
								<? } ?>
												</select>
					</td>
				</tr>
				<tr>
					<th>Адрес на Обекта</th>
					<td >
					<div class='adres' name='adres'></div>
					</td>
				</tr>
				<tr>
					<th></th>
					<td>
						
					</td>
				</tr>
				<tr>
					<th></th>
					<td>
						
					</td>
				</tr>
				<tr>
					<th></th>
					<td>
						<input class="gray" style="float:right" name="submit" value="Напред" type="submit">
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