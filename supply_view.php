<?php include("header.php"); ?>
<div id="module">
   <div class="container">
		<div class="caption">
					Управление на Доставчици
		</div>
		<a href="supply_add.php"><input type="button" style="margin: 10px; float: right" class="green addPaypalSubscription" value="Регистрирай Доставчик"></a>
	</div>
</div>
<div id="content">
 <div class="container">
      <div id="orderform">
   	     <ul class="floatingBlocks">
		   	 <li style="width: 100%; border-right: none;">
				<div style="width: 320px; float: right; margin: -57px 10px;">
				<table>
				<tr>
				<td style=" padding: 9px 0 3px 5px;"><input type="text" style="margin: 0 0; height: 30px; width: 220px; color: #D1CCCC" OnMouseOut="if (this.value == '') {this.value = 'Име / Еик / Адрес / Телефон';}"
 onMouseOver="if (this.value == 'Име / Еик / Адрес / Телефон') {this.value = '';}" value="Име / Еик / Адрес / Телефон"  name="search_supply"></td>
				
				
				<td style=" padding: 9px 0 3px 5px;"><input  value="Търси" style="margin: 0 0;" class="gray" id="showAddPaymentMethodACH" type="button"></td>
				</tr>
				<tr><td style="font-size: 12px; margin: 0 0; padding: 0 0; text-align: right; vertical-align: middle; line-height: 15px" align="right" colspan="2"><a href="" style="color: #262B23">[Подробно търсене]</a></td></tr>
				</table>
				</div>
				
				
				<div class="caption">
					Списък Доставчици
				</div>
				<style>
					.expandableDetails .details td {
						width: 30% !important;
					}
				</style>
				<table class="dataTable expandableDetails" style="margin: 10px !important; width: 98% !important;">
					<tbody>
						<tr>
							<th>Име</th>
							<th>Град</th>
							<th>МОЛ</th>
							<th>Телефон</th>
							<th>Обект</th>
							<th></th>
						</tr>
					<?php $con = mysql_query("SELECT * FROM suppliers ORDER BY id DESC"); $br = 0;
					      while($row = mysql_fetch_array($con)) { $br++; if($br%2==0) {$bgcolor = "#F4F4F4";} else {$bgcolor = "#FFFFFF";} 
						  $who_reg = $row['who_reg']; $con2 = mysql_query("SELECT info_name FROM users WHERE id = $who_reg"); $row2= mysql_fetch_array($con2);
						  ?>
					<tr class="main" style="background-color: <?php echo $bgcolor; ?>" onMouseOver="this.style.background='#CBF791'" onMouseOut="this.style.background='<?php echo $bgcolor; ?>'">
					
							<td ><img class="indicator" src="images_2/triangle_closed.png">  <b> <?php echo $row['name']; ?></b> (<?php echo $row['eik']; ?>)</td>
							<td><?php echo $row['city']; ?></td>
							<td><?php echo $row['manager']; ?></td>
							<td><?php echo $row['contact_phone']; ?></td>
							<td><?php echo $row2['info_name']; ?></td>
							<td><a href="supply_info.php?id=<?php echo $row['id']; ?>"><input value="Напред" class="gray" id="showAddPaymentMethodCC" type="button"></a></td>
							
						</tr>
					<?php } ?>
										</tbody>
				</table>

			</li>
		</ul>
	</div>
				<?php
				include('footer.php');
				?>