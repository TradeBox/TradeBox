<?php include("header.php"); ?>
<div id="module">
   <div class="container">
		<div class="caption">
					Управление на потребители
		</div>
		<a href="users_add.php"><input type="button" style="margin: 10px; float: right" class="green addPaypalSubscription" value="Добави потребител"></a>
	</div>
</div>
<div id="content">
 <div class="container">
      <div id="orderform">
   	     <ul class="floatingBlocks">
		   	 <li style="width: 100%; border-right: none;">
			
				
				
				<div class="caption">
					Списък потребители
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
							
							<th>Обект</th>
							<th>Адрес</th>
					
							<th>Телефон</th>
							<th></th>
						</tr>
					<?php $con = mysql_query("SELECT * FROM users WHERE status_admin = 0 ORDER BY id DESC"); $br = 0;
					      while($row = mysql_fetch_array($con)) { $br++; if($br%2==0) {$bgcolor = "#F4F4F4";} else {$bgcolor = "#FFFFFF";} 
						  ?>
					<tr class="main" style="background-color: <?php echo $bgcolor; ?>" onMouseOver="this.style.background='#CBF791'" onMouseOut="this.style.background='<?php echo $bgcolor; ?>'">
					
							<td ><img class="indicator" src="images_2/triangle_closed.png">  <b> <?php echo $row['full_name']; ?></b></td>
							<td><?php
									$idstore=$row['store_id'];
									$namestore=mysql_fetch_array(mysql_query("SELECT * FROM stores WHERE id='$idstore'"));
							echo $namestore['name']; ?></td>
							<td><?php echo $namestore['address']; ?></td>
			
							<td><?php echo $row['phone']; ?></td>
							<td><center><a class="gray" style="   padding: 7px 15px;color:#464661" href="users_info.php?id=<?php echo "$row[id]"; ?>">Редактиране</a></center></td>
							
							
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