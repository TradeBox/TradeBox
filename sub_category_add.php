<?php 
include('header.php');
?>
<div id="module">
			<div class="container">
				<div class="caption">
					Под-категории продукти
				</div>
				<input class="green" style="float: right; margin-top: 12px;" value="Добави нова под-категория" type="button" onclick="newcat.style.display='table-row'">
				<?php 
				$check_if_empty=mysql_num_rows(mysql_query("SELECT * FROM sub_categories"));
				if($check_if_empty==0){
				?>
				<label style="float:right; font-size:15px;color:#FF9900"><i>Все още няма добавена под-категория!</i></label>
				<?php }
				?>
			</div>
			
			
		</div>
				<div id="content">
				
			<div class="container">
			
			
			
			<div id="orderform">
   	     <ul class="floatingBlocks">
		   	 <li style="width: 100%; border-right: none;">
			 
			 	
				
<div class="caption">
					Списък под-категории
				</div>
			
<div id="newcat" style="display: none;  height: 335px;" class="modal" id="addSubAccount">
	<div class="header">
		<img class="close" src="other/close.png" width="20" onclick="newcat.style.display='none'">
		Добавяне на нова Под-категория
	</div>
	<div class="body">
	<?php 
	if(isset($_POST['submit_cat'])){
	$cat_idc=$_POST['category_s'];
	$name_categ=$_POST['name_cat'];
	$info_categ=$_POST['info_cat'];
	mysql_query("INSERT INTO sub_categories (cat_id,name,info,active) VALUES ('$cat_idc','$name_categ','$info_categ','1')");
	add_to_archive('Потребителят добави нова Под-категория');
	}
	?>
	<script src="cat_validate.js"></script>
		<form method="post" action="" onsubmit="return validate()">
			<ul>
				<li>
					<label>
						Категория към която спада
					</label>
					<select name="category_s"><? 
					$cat=mysql_query("SELECT * FROM categories");
					while($optcat=mysql_fetch_array($cat)){
					?>
						<option  value="<? echo "$optcat[id]"; ?>"><? echo "$optcat[name]"; ?></option><?
						}
						?>
					</select>
					<label>
						Име на Под-категория
					</label>
					<input id="name_cat" name="name_cat" type="text">
					<label>
						Информация за под-категорията
					</label>
					<textarea name="info_cat" type="text"></textarea>
				</li>
			</ul>
			<input style="float: right;" class="green" value="Добави" name="submit_cat" type="submit">
		</form>
		
		
	</div>
</div>








<link href="LEAP3Account%20&amp;%20Billing2_files/subaccounts.css" rel="stylesheet" type="text/css">


<table class="dataTable expandableDetails">
	<tbody>
	<tr>	    <th>Основна категория</th>
				<th>Име на под-категорията</th>
			
				
				<th width="95" style="line-height: 18px; text-align: center; padding: 0 5px;">Продукти <br><span style="font-size: 13px; font-weight: normal">(брой)</span></th>
				<th width="60"  style="line-height: 18px; text-align: center; padding: 0 5px;">Под-пoд-категории <br><span style="font-size: 13px; font-weight: normal">(брой)</span></th>
				<th width="60"></th>
			
			</tr>
	
			<?php 
			
			if($check_if_empty==0){
			}else{
			$br=0;
			$con=mysql_query("SELECT * FROM sub_categories");
			while($row=mysql_fetch_array($con)){  $br++;
			if($br%2==0) {$bgcolor = "#F4F4F4";} else {$bgcolor = "#FFFFFF";}
			$broi_produkti = mysql_result(mysql_query("SELECT COUNT(*) FROM products WHERE subcat_id=$row[id]"), 0);
			$broi_podkategorii = mysql_result(mysql_query("SELECT COUNT(*) FROM sub_sub_categories WHERE subcat_id=$row[id]"), 0);
			?>
			<tr class="main" style="background-color: <?php echo $bgcolor; ?>" onMouseOver="this.style.background='#CBF791'" onMouseOut="this.style.background='<?php echo $bgcolor; ?>'">
				<td style=" padding: 5px 14px 5px;">  <?php 
				$iiid=$row['cat_id'];
				$sd=mysql_fetch_array(mysql_query("SELECT * FROM categories WHERE id='$iiid'"));
				echo "$sd[name]"; ?> <b style="margin-top: 5px">»</b></td>
				<td><b><?php echo $row[name]; ?></b></td>
				
				
					
					<td align="center"  style = "text-align: center; padding: 9px 10px; font-size: 13px"><a style="color: rgb(75, 75, 75);" href="">
					<b style="font-size: 19px;"><?php echo $broi_produkti; ?></b><br>(виж всички)</a></td>
					<td align="center"  style = "text-align: center; padding: 9px 10px; font-size: 13px"><a style="color: rgb(75, 75, 75);"  href="">
					<b style="font-size: 19px;"><?php echo $broi_podkategorii; ?></b><br>(виж всички)</a></td>
				<td style="padding: 0 5px;"><center><a href="sub_category_edit.php?id=<?php echo "$row[id]"; ?>"><input value="Управление" class="gray" id="showAddPaymentMethodCC" type="button"></a></center></td>
				
			</tr>
			
			
			<? 
			} }?>
				<? if($check_if_empty==0){ ?>
			<tr>
				<td colspan="5">
				
			<i>Няма добавена под-категория</i>
				</td>
			</tr><? } ?>
					</tbody>
</table>

</li>
		</ul>
	</div>
		</div>
	</div>
<?php 
include('footer.php');
?>