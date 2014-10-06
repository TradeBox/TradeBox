<?php include("header.php"); ?>
<div id="module">
   <div class="container">
		<div class="caption">
					Управление на групи
		</div>
		<a href="customer_groups_add.php"><input type="button" style="margin: 10px; float: right" class="green addPaypalSubscription" value="Създай група"></a>
	</div>
</div>
<div id="content">
 <div class="container">
      <div id="orderform">
   	     <ul class="floatingBlocks">
		   	 <li style="width: 100%; border-right: none;">
			
				
				
				<div class="caption">
					Списък групи
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
							
							<th>Отстъпка</th>
							<th>Дата на обновяване</th><th></th><th></th>
						</tr>
					<?php $con = mysql_query("SELECT * FROM customer_groups ORDER BY id DESC"); $br = 0;
					      while($row = mysql_fetch_array($con)) { $br++; if($br%2==0) {$bgcolor = "#F4F4F4";} else {$bgcolor = "#FFFFFF";} 
						  ?>
					<tr class="main" style="background-color: <?php echo $bgcolor; ?>" onMouseOver="this.style.background='#CBF791'" onMouseOut="this.style.background='<?php echo $bgcolor; ?>'">
					
							<td ><img class="indicator" src="images_2/triangle_closed.png">  <b> <?php echo $row['group_name']; ?></b></td>
							<td><?php echo $row['discount']; ?></td>
							<td><?php echo $row['update_date']; ?></td>
							<td><center><a href="customer_group_edit.php?id=<?php echo "$row[id]"; ?>"><img src="other/edit.png" width="20px"  /></a></center></td>
							<td><center><a href="customer_group_dell.php?id=<?php echo "$row[id]"; ?>"><img src="other/delete.png" width="20px"  /></a></center></td>
							
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