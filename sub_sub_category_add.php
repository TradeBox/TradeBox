<?php 
include('header.php');
?>
<script type="text/javascript">
	$(document).ready(function()
	{
		$(".category_aja").change(function()
		{
			var id=$(this).val();
			var dataString = 'id='+ id;

			$.ajax
			({
			type: "POST",
			url: "ajax_categ.php",
			data: dataString,
			cache: false,
			success: function(html)
				{
					$(".category_ajasub").html(html);
				}
			});

		});

	});
</script> 

<div id="module">
			<div class="container">
				<div class="caption">
					Под-под-категории продукти
				</div>
					
				<input class="green" style="float: right; margin-top: 12px;" value="Добавяне" type="button" onclick="newcat.style.display='table-row'">
				<?php 
				$check_if_empty=mysql_num_rows(mysql_query("SELECT * FROM sub_sub_categories"));
				if($check_if_empty==0){
				?>
				<label style="float:right; font-size:15px;color:#FF9900"><i>Все още няма добавена Под-под-категория!</i></label>
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
					Списък Под-под-категории
				</div>
			
			
			
<div id="newcat" style="display: none;  height: 388px;" class="modal" id="addSubAccount">
	<div class="header">
		<img class="close" src="other/close.png" width="20" onclick="newcat.style.display='none'">
		Добавяне на нова Под-под-категория
	</div>
	<div class="body" style="min-height:240px">
	<?php 
	if(isset($_POST['submit_cat'])){
	$cat_idc=$_POST['category_s'];
	$cat_ids=$_POST['category_ss'];
	$name_categ=$_POST['name_cat'];
	$info_categ=$_POST['info_cat'];
	mysql_query("INSERT INTO sub_sub_categories (cat_id,subcat_id,name,info,active) VALUES ('$cat_idc','$cat_ids','$name_categ','$info_categ','1')");
	add_to_archive('Потребителят добави нова Под-под-категория');
	}
	?>
	<script src="cat_validate.js"></script>
		<form method="post" action="" onsubmit="return validate()">
			<ul>
				<li>
					<label>
						Категория към която спада
					</label>
					<select class="category_aja" name="category_s"><? 
					$cat=mysql_query("SELECT * FROM categories");
					while($optcat=mysql_fetch_array($cat)){
					?>
						<option  value="<? echo "$optcat[id]"; ?>"><? echo "$optcat[name]"; ?></option><?
						}
						?>
					</select>
					<label>
						Под-категория към която спада
					</label>
					<select class="category_ajasub" name="category_ss"><?
					$cat=mysql_fetch_array(mysql_query("SELECT * FROM categories"));
					$catnow=$cat['id'];
					$scat=mysql_query("SELECT * FROM sub_categories WHERE cat_id='$catnow'");
					while($sq=mysql_fetch_array($scat)){
					?>
						<option  value="<? echo "$sq[id]"; ?>"><? echo "$sq[name]"; ?></option><? } ?>
					</select>
					<label>
						Име на Под-под-категория
					</label>
					<input id="name_cat" name="name_cat" type="text">
					<label>
						Информация за Под-под-категорията
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
	<thead>
		<tr>
			<th colspan="6">
			
			</th>
		</tr>
	</thead>
	<tbody>
	<tr>
				<th>Име</th>
				<th>Категория</th>
				<th>Под-категория</th>
				<th>Информация</th>
				<th></th>
				<th></th>
			</tr>
	
			<?php 
			
			if($check_if_empty==0){
			}else{
			$br=0;
			$con=mysql_query("SELECT * FROM sub_sub_categories");
			while($row=mysql_fetch_array($con)){ $br++;
			if($br%2==0) {$bgcolor = "#F4F4F4";} else {$bgcolor = "#FFFFFF";}
			
			?>
			<tr class="main" style="background-color: <?php echo $bgcolor; ?>" onMouseOver="this.style.background='#CBF791'" onMouseOut="this.style.background='<?php echo $bgcolor; ?>'">
				
				<td><?php echo "$row[name]"; ?></td>
				<td><?php 
				$iiid=$row['cat_id'];
				$sd=mysql_fetch_array(mysql_query("SELECT * FROM categories WHERE id='$iiid'"));
				echo "$sd[name]"; ?></td>
				<td><?php 
				$iiid=$row['subcat_id'];
				$sd=mysql_fetch_array(mysql_query("SELECT * FROM sub_categories WHERE id='$iiid'"));
				echo "$sd[name]"; ?></td>
				<td><?php
				$sss=$row['info'];
				$infos=substr($sss,0, 32);
				echo "$infos ..."; 
				$idc=$row['id'];
				
					?></td>
				<td><center><a href="sub_sub_category_edit.php?id=<?php echo "$row[id]"; ?>"><img src="other/edit.png" width="20px"  /></a></center></td>
				<td><center><a href="sub_sub_category_dell.php?id=<?php echo "$row[id]"; ?>"><img src="other/delete.png" width="20px" /></a></center></td>
			</tr>
			
			
			<? 
			} }?>
			
			<tr>
				<td colspan="6">
					<? if($check_if_empty==0){ ?>
			<i>Няма добавена Под-под-категория</i><? } ?>
				</td>
			</tr>
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