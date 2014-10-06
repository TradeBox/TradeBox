<?php 
include('header.php');
$id_category=$_GET['id'];
?>
<div id="module">
			<div class="container">
				<div class="caption">
					Редактиране на под-категория 
				</div>
			</div>
		</div>
				<div id="content">
			<div class="container">
<div id="orderform">
   	     <ul class="floatingBlocks">
		   	 <li style="width: 100%; border-right: none;">
			 
			 <div class="caption">
					<?
					$name_of_cat=mysql_fetch_array(mysql_query("SELECT * FROM sub_categories WHERE id = '$id_category'"));
echo "$name_of_cat[name]";
					?>
				</div>
			 
<link href="LEAP3Account%20&amp;%20Billing2_files/subaccounts.css" rel="stylesheet" type="text/css">


<table class="dataTable expandableDetails">
	<tbody>
			<tr>
				<th>Име</th>
				<th>Категория</th>
				<th>Информация</th>
				<th></th>
			</tr>
			<?php 
			if(isset($_POST['edit'])){
			$catee=$_POST['category_s'];
			$nam=$_POST['name_cat'];
			$inf=$_POST['info_cat'];
			$namename=$name_of_cat['name'];
			add_to_archive('Редактиране на Под-категория /'.$namename.'/ като /'.$nam.'/.');
			mysql_query("UPDATE sub_categories SET cat_id='$catee', name='$nam', info='$inf' WHERE id='$id_category' ");
			}
			$name_of_cat=mysql_fetch_array(mysql_query("SELECT * FROM sub_categories WHERE id = '$id_category'"));
			?>
			<form action="" method="post" >
			<tr style="cursor:pointer" >
				<th><input type="text" name="name_cat" value="<?php echo "$name_of_cat[name]"; ?>"></input></th>
				<th>
				<select name="category_s"><? 
					$cat=mysql_query("SELECT * FROM categories");
					while($optcat=mysql_fetch_array($cat)){
					?>
						<option  value="<? echo "$optcat[id]"; ?>"><? echo "$optcat[name]"; ?></option><?
						}
						?>
					</select>
				</th>
				
				<th><input type="text" name="info_cat" value="<?php echo "$name_of_cat[info]"; ?>"></input></th>
				<th><center><input class="gray" style=" margin-top: 0px;" value="Редактиране" type="submit" name='edit'></center></th>
			</tr>
			</form>
			
			<? ?>
			
			<tr>
				<td colspan="3">
					
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