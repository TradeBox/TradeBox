<?php include("header.php"); ?>
<div id="module">
   <div class="container">
		<div class="caption">
					Управление на обекти
		</div>
		<a href="store_add.php"><input type="button" style="margin: 10px; float: right" class="green addPaypalSubscription" value="Добави нов обект"></a>
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
							<th>Работно време
							
							
							</th>
						</tr>
					<?php $con = mysql_query("SELECT * FROM stores ORDER BY id DESC"); $br = 0;
					      while($row = mysql_fetch_array($con)) { $bgcolor2 = "#F4F4F4"; $bgcolor = "#FFFFFF";
						 
						  ?>
					<tr class="main" style="background-color: <?php echo $bgcolor; ?>" onMouseOver="this.style.background='#CBF791'" onMouseOut="this.style.background='<?php echo $bgcolor; ?>'">
					         <td><img style="<?php if($row['img'] != "") echo " border:3px solid #585858"; ?>" src="<?php echo $row['img']; if($row['img'] == "") echo "images_2/icon_cloud.png";?>" width="65"></td>
							<td style="font-size: 12px"><img  class="indicator" src="images_2/triangle_closed.png">  <b style="font-size: 15px"> <?php echo $row['name']; ?></b> <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; (<?php echo $row['warehouse']; ?>) </td>
							<td><?php echo $row['city']; ?></td>
							
							<td><?php echo $row['phone']; ?></td>
							<td><span> <?php  
							 if(date("l") != 'Saturday' AND date( "l") != 'Sunday') {
						     $from = mb_substr($row['open_time_week'], 3, 5, 'UTF-8');
							 $to = mb_substr($row['open_time_week'], 12, 5, 'UTF-8'); } 
							 else if (date("l") == 'Saturday'){
							 $from = mb_substr($row['open_time_sat'], 3, 5, 'UTF-8');
							 $to = mb_substr($row['open_time_sat'], 12, 5, 'UTF-8');
							 }
							 else if (date("l") == 'Sunday'){
							 $from = mb_substr($row['open_time_sun'], 3, 5, 'UTF-8');
							 $to = mb_substr($row['open_time_sun'], 12, 5, 'UTF-8');
							 }
															 
if (time() >= strtotime($from) AND time() <= strtotime($to) ) {
  	echo "<b style='color: green'>Отворен</b>";
}else {echo "<b style='color: red'>Затворено</b>";} ?></td>
							<td align="center" style="text-align: center"><b>Пон-Пет:</b> <br><?php echo $row['open_time_week']; ?>
							<br><b>Събота:</b><br> <?php echo $row['open_time_sat']; ?><br><b>Неделя:</b><br> <?php echo $row['open_time_sun']; ?>
							</td>
							
						</tr>
						<tr class="main" style="background-color: <?php echo $bgcolor2; ?>" >
					         <td style="padding: 2px 14px; height: 35px"  colspan="5"></td>
							
							<td  align="center" style="text-align: center; padding: 2px 14px;  height: 35px"> <a href="store_edit.php?id=<?php echo $row['id']; ?>"><input value="Промени обекта" class="gray" id="showAddPaymentMethodCC" type="button"></a></td>
							
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