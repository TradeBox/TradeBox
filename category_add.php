<?php 
include('header.php');
?>
<div id="module">
			<div class="container">
				<div class="caption">
					Категории продукти
				</div>
				
				<input class="green" style="float: right; margin-top: 12px;" value="Добави категория" type="button" onclick="newcat.style.display='table-row'">
				<?php 
				$check_if_empty=mysql_num_rows(mysql_query("SELECT * FROM categories"));
				if($check_if_empty==0){
				?>
				<label style="float:right; font-size:15px;color:#FF9900"><i>Все още няма добавена категория!</i></label>
				<?php }
				?>
			</div>
		</div>
	<div id="content">
 <div class="container">
      <div id="orderform">
   	     <ul class="floatingBlocks">
		   	 <li style="width: 100%; border-right: none;">
<div id="newcat" style="display: none;  height: 282px;" class="modal" id="addSubAccount">
	<div class="header">
		<img class="close" src="other/close.png" width="20" onclick="newcat.style.display='none'">
		Добавяне на нова категория
	</div>
	<div class="body">
	<?php 
	if(isset($_POST['submit_cat'])){
	$name_categ=$_POST['name_cat'];
	$info_categ=$_POST['info_cat'];
	mysql_query("INSERT INTO categories (name,info,active) VALUES ('$name_categ','$info_categ','1')");
	add_to_archive('Потребителят добави нова категория');
	}
	?>
	<script src="cat_validate.js"></script>
		<form method="post" action="" onsubmit="return validate()">
			<ul>
				<li>
					<label>
						Име на Категория
					</label>
					<input id="name_cat" name="name_cat" type="text">
					<label>
						Информация за категорията
					</label>
					<textarea name="info_cat" type="text"></textarea>
				</li>
			</ul>
			<input style="float: right;" class="green" value="Добави" name="submit_cat" type="submit">
		</form>
		
		
	</div>
</div>

<div class="caption">
					Списък категории
				</div>






<link href="LEAP3Account%20&amp;%20Billing2_files/subaccounts.css" rel="stylesheet" type="text/css">


<table class="dataTable expandableDetails">
	<tbody>
	<tr>
				<th>Име</th>
				<th>Информация</th>
				<th></th>
				<th></th>
			</tr>
	
			<?php 
			
			if($check_if_empty==0){
			}else{
			$br=0;
			$con=mysql_query("SELECT * FROM categories");
			while($row=mysql_fetch_array($con)){  $br++;
			if($br%2==0) {$bgcolor = "#F4F4F4";} else {$bgcolor = "#FFFFFF";}
			
			?>
			<tr class="main" style="background-color: <?php echo $bgcolor; ?>" onMouseOver="this.style.background='#CBF791'" onMouseOut="this.style.background='<?php echo $bgcolor; ?>'">
				<td><?php echo "$row[name]"; ?></td>
				<td><?php
				$sss=$row['info'];
				$infos=substr($sss,0, 32);
				echo "$infos ..."; 
				$idc=$row['id'];
				
					?></td>
				<td><center><a href="category_edit.php?id=<?php echo "$row[id]"; ?>"><img src="other/edit.png" width="20px"  /></a></center></td>
				<td><center><a href="category_dell.php?id=<?php echo "$row[id]"; ?>"><img src="other/delete.png" width="20px" /></a></center></td>
			</tr>
			
			
			<? 
			} }?>
				<? if($check_if_empty==0){ ?>
			<tr>
				<td colspan="4">
				
			<i>Няма добавена категория</i>
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