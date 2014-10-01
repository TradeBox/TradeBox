<?php 
include('header.php');
$id_category=$_GET['id'];
?>
<div id="module">
			<div class="container">
				<div class="caption">
					Редактиране на Под-под-категория <?
					$name_of_cat=mysql_fetch_array(mysql_query("SELECT * FROM sub_sub_categories WHERE id = '$id_category'"));
echo "$name_of_cat[name]";
					?>
				</div>
			</div>
		</div>
				<div id="content">
			<div class="container">

<link href="LEAP3Account%20&amp;%20Billing2_files/subaccounts.css" rel="stylesheet" type="text/css">


<table class="dataTable expandableDetails">
	<tbody>
			<tr>
				<th>Име</th>
				<th>Категория</th>
				<th>Под-категория</th>
				<th>Информация</th>
				<th></th>
			</tr>
			<?php 
			if(isset($_POST['edit'])){
			$catee=$_POST['category_s'];
			$cateee=$_POST['category_ss'];
			$nam=$_POST['name_cat'];
			$inf=$_POST['info_cat'];
			$namename=$name_of_cat['name'];
			add_to_archive('Редактиране на Под-под-категория /'.$namename.'/ като /'.$nam.'/.');
			mysql_query("UPDATE sub_sub_categories SET cat_id='$catee', subcat_id='$cateee', name='$nam', info='$inf' WHERE id='$id_category' ");
			}
			$name_of_cat=mysql_fetch_array(mysql_query("SELECT * FROM sub_sub_categories WHERE id = '$id_category'"));
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
				<th>
				<select name="category_ss"><? 
					$cats=mysql_query("SELECT * FROM sub_categories");
					while($optcats=mysql_fetch_array($cats)){
					?>
						<option  value="<? echo "$optcats[id]"; ?>"><? echo "$optcats[name]"; ?></option><?
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
				<td colspan="4">
					
				</td>
			</tr>
					</tbody>
</table>

		</div>
	</div>
<?php 
include('footer.php');
?>