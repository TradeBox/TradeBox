<?php include("header.php"); ?>
<div id="module">
   <div class="container">
		<div class="caption">
					Управление на обекти
		</div>
		<a href="store_add.php"><input type="button" style="margin: 10px; float: right" class="green addPaypalSubscription" value="Добави обект"></a>
	</div>
</div>
<div id="content">
 <div class="container">
      <div id="orderform">
   	     <ul class="floatingBlocks">
		   	 <li style="width: 100%; border-right: none;">
				<div style="width: 320px; float: right; margin: -57px 10px;">
				
				</div>
				
				
				<div class="caption">
					Списък обекти
				</div>
				<style>
					.expandableDetails .details td {
						width: 30% !important;
					}
				</style>
				<table class="dataTable expandableDetails" style="margin: 10px !important; width: 98% !important;">
					<tbody>
						<tr>
						    <th></th>
							<th>Име</th>
							<th>Град</th>
							<th>Телефон</th>
							<th>Статус</th>
							<th>Работно време</th>
						</tr>
					<?php $con = mysql_query("SELECT * FROM stores ORDER BY id DESC"); $br = 0;
					      while($row = mysql_fetch_array($con)) { $br++; if($br%2==0) {$bgcolor = "#F4F4F4";} else {$bgcolor = "#FFFFFF";} 
						  
						  ?>
					<tr class="main" style="background-color: <?php echo $bgcolor; ?>" onMouseOver="this.style.background='#CBF791'" onMouseOut="this.style.background='<?php echo $bgcolor; ?>'">
					         <td><img src="<?php echo $row['img']; if($row['img'] == "") echo "images_2/icon_cloud.png";?>" width="45"></td>
							<td ><img class="indicator" src="images_2/triangle_closed.png">  <b> <?php echo $row['name']; ?></b> </td>
							<td><?php echo $row['city']; ?></td>
							
							<td><?php echo $row['phone']; ?></td>
							<td><span style="color: green">Отворен</td>
							<td><a href="customer_info.php?id=<?php echo $row['id']; ?>"><input value="Напред" class="gray" id="showAddPaymentMethodCC" type="button"></a></td>
							
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