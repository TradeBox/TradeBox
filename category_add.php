<?php 
include('header.php');
?>
<div id="module">
			<div class="container">
				<div class="caption">
					Категории продукти
				</div>
			</div>
		</div>
				<div id="content">
			<div class="container">
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








<link href="LEAP3Account%20&amp;%20Billing2_files/subaccounts.css" rel="stylesheet" type="text/css">


<table class="dataTable expandableDetails">
	<thead>
		<tr>
			<th colspan="4">
				
				<input class="gray" style="float: right; margin-top: 12px;" value="Добавяне" type="button" onclick="newcat.style.display='table-row'">
				<?php 
				$check_if_empty=mysql_num_rows(mysql_query("SELECT * FROM categories"));
				if($check_if_empty==0){
				?>
				<label style="float:right; font-size:15px;color:#FF9900"><i>Все още няма добавена категория!</i></label>
				<?php }
				?>
				Списък категории
			</th>
		</tr>
	</thead>
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
			$bro=0;
			$con=mysql_query("SELECT * FROM categories");
			while($row=mysql_fetch_array($con)){ $bro++;
			?>
			<tr style="cursor:pointer"
			<?php if($bro%2==0){
			echo "style='background:#F4F4F4'";
			?>      
			onmouseout="row<? echo "$bro"; ?>.style.background='#F4F4F4'" 
			<?php 
			}else{ 
			?>  
			onmouseout="row<?php echo "$bro"; ?>.style.background='none'"
			<?
			}
			?>	  
			id="row<?php echo "$bro"; ?>" onmouseover="row<?php echo "$bro"; ?>.style.background='#CBF791'" >
				<th><?php echo "$row[name]"; ?></th>
				<th><?php
				$sss=$row['info'];
				$infos=substr($sss,0, 32);
				echo "$infos ..."; 
				$idc=$row['id'];
				
					?></th>
				<th><center><a href="category_edit.php?id=<?php echo "$row[id]"; ?>"><img src="other/edit.png" width="20px"  /></a></center></th>
				<th><center><a href="category_dell.php?id=<?php echo "$row[id]"; ?>"><img src="other/delete.png" width="20px" /></a></center></th>
			</tr>
			
			
			<? 
			} }?>
			
			<tr>
				<td colspan="4">
					<? if($check_if_empty==0){ ?>
			<i>Няма добавена категория</i><? } ?>
				</td>
			</tr>
					</tbody>
</table>

		</div>
	</div>
<?php 
include('footer.php');
?>