<?php 
include('header.php');
$id_category=$_GET['id'];
include("sub_category_dell.php");
	if(isset($_POST['edit'])){
			$catee=$_POST['category_s'];
			$nam=$_POST['name_cat'];
			$inf=$_POST['info_cat'];
			$namename=$name_of_cat['name'];
			add_to_archive('Редактиране на Под-категория /'.$namename.'/ като /'.$nam.'/.');
			mysql_query("UPDATE sub_categories SET cat_id='$catee', name='$nam', info='$inf' WHERE id='$id_category' ");
			}
?>
<div id="module">
			<div class="container">
				<div class="caption">
					Редактиране на под-категория 
				</div>
					<a href="sub_category_add.php">
				<input class="green" style="float: right; margin-top: 12px;" value="< Списък под-категории" type="button"></a>
			</div>
		</div>
				<div id="content">
			<div class="container">
<div id="orderform">
   	     <ul class="floatingBlocks">
		 <?php if (empty($delete)) { ?>
		   	 <li style="width: 100%; border-right: none;">
			 
			 <div class="caption">
					<?	$name_of_cat=mysql_fetch_array(mysql_query("SELECT * FROM sub_categories WHERE id = '$id_category'")); echo "$name_of_cat[name]";
					?>
				</div>
			 
<link href="LEAP3Account%20&amp;%20Billing2_files/subaccounts.css" rel="stylesheet" type="text/css">


<table class="dataTable expandableDetails">
	<tbody>
			<tr>
				<th>Име</th>
				<th>Категория към която спада</th>
				<th>Информация</th>
				<th></th>
			</tr>
			
			<form action="" method="post" >
			<tr style="cursor:pointer; background: #FFF" >
				<th><input type="text" name="name_cat" value="<?php echo $name_of_cat[name]; ?>"></input></th>
				<th>
				<select name="category_s"><? 
					$cat=mysql_query("SELECT * FROM categories");
					while($optcat=mysql_fetch_array($cat)){
					?>
						<option <?php if ($name_of_cat[cat_id] == $optcat[id]) echo "selected='selected'"; ?> value="<? echo $optcat[id]; ?>"><? echo $optcat[name]; ?></option>
						<?	}	?>
					</select>
				</th>
				
				<th><input type="text" name="info_cat" value="<?php echo "$name_of_cat[info]"; ?>"></input></th>
				<th><center><input class="gray" style=" margin-top: 0px;" value="Запази промените" type="submit" name='edit'></center></th>
			</tr>
			</form>
			
		<form action="?delete=<?php echo $name_of_cat['id']; ?>&id=<?php echo $name_of_cat['id']; ?>" method="post">
			<tr>
				<td colspan="3" style="border-bottom: none">	</td>
			</tr>
			<tr style="background-color:#FFF"><td colspan="3" style="padding: 0 0">
				<input class="gray addSubAccount" type="submit" value="Изтрий под-категорията" style="float: left; margin-top: 3px; background-color: rgb(248, 96, 89); color: white; text-shadow: none; font-family: Arial"> </td></tr>
				<tr><td colspan="3" style="padding: 0 0">
				 <label><input type="checkbox" name="delete_category" value="<?php echo $id_category; ?>"> <b>Потвърждавам,</b> че желая да премахна тази под-категория.</label></td></tr>
			</form>
			
			<tr>
				<td colspan="3">
					
				</td>
			</tr>
					</tbody>
</table>

</li>
<?php }  else { ?>

<li style="width: 100%; border: 1px solid rgb(218, 218, 218); padding: 25px 5px 20px;">
			  <div class="caption">
			      <img src="images_2/icon_cloud.png"> ПОД-КАТЕГОРИЯТА Е ПРЕМАХНАТА УСПЕШНО!</div>
			
			<table>
				
			<tr>
					<th></th>  </tr></table >  </li> <?php } ?>
		</ul>
	</div>
		</div>
	</div>
<?php 
include('footer.php');
?>