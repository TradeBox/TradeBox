<? include('header.php'); ?>
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
<script type="text/javascript">
	$(document).ready(function()
	{
		$(".category_ajasub").change(function()
		{
			var id=$(this).val();
			var dataString = 'id='+ id;
			$.ajax
			({
			type: "POST",
			url: "ajax_categs.php",
			data: dataString,
			cache: false,
			success: function(html)
				{
					$(".category_ajasubsub").html(html);
				}
			});
		});
	});
</script>
<script type="text/javascript">
	$(document).ready(function()
	{
		$(".mqrkaizbor").change(function()
		{
			var id=$(this).val();
			var dataString = 'id='+ id;
			$.ajax
			({
			type: "POST",
			url: "ajax_mqrka.php",
			data: dataString,
			cache: false,
			success: function(html)
				{
					$(".mqrka").html(html);
				}
			});
		});
	});
</script> 
 
		<div id="content">
			<div class="container">
			<?php 	$idp=$_GET['id'];
		
  if (!empty($_POST['delete_store']) AND !empty($_GET['delete'] ) AND $_POST['delete_store'] == $_GET['delete'] ) { 
  $delete = $_GET['delete']; 
  mysql_query("DELETE FROM products WHERE id = $delete") or die (mysql_error());
   
  }
				if (empty($delete)) {
			if (!empty($_POST['name'])) {
			$name=$_POST['name'];
			$cat_id=$_POST['categoriq'];
			$subcat_id=$_POST['podcategoriq'];
			$subsubcat_id=$_POST['podpodcategoriq'];
			$info=$_POST['info'];
			$pricelev=$_POST['pricelev'];
			$pricestot=$_POST['pricestot'];
			$price=$pricelev.".".$pricestot;
			$mqrka=$_POST['mqrka'];
			$expire=$_POST['expire'];
			
			mysql_query("UPDATE products SET name='$name',cat_id='$cat_id',subcat_id='$subcat_id',subsubcat_id='$subsubcat_id',price='$price',info='$info',measure='$mqrka', expire='$expire' WHERE id = $idp ") or die(mysql_error());
			add_to_archive('Потребителят Редактира продукт '.$name.'');
		
			}
			if(isset($_GET['id'])){
			$ediii=mysql_fetch_array(mysql_query("SELECT * FROM products WHERE id='$idp'"));
			$name=$ediii['name'];
			$cat_id=$ediii['cat_id'];
			$subcat_id=$ediii['subcat_id'];
			$subsubcat_id=$ediii['subsubcat_id'];
			$info=$ediii['info'];
			$price=$ediii['price'];
			$mqrka=$ediii['measure'];
			list($part1, $part2) = explode('.', $price);
			}
			?>
<form method="post" action="">
<div id="orderform">
	<div id="server">
		Редактиране на продукт 
		<span id="type"></span><a href="product_list.php"><input type="button" style="margin: 10px; float: right" class="green addPaypalSubscription" value="Списък продукти"></a>
	</div>
	<ul class="floatingBlocks" style="width:75.6%">
		<li style="width: 100%;">
			<div class="caption">
				<img src="other/icon_cloud.png" alt="Server Configuration">
				<?php echo "$name"; ?>
			</div>
			<div class="description">
				Промяна на данните за вашия продукт
			</div>
			<table>
				<tbody>
				<tr>
					<th>Име</th>
					<td>
						<input style="" id="name" name="name" value="<?php echo "$name"; ?>" type="text">
					</td>
				</tr>
				<tr>
					<th>Категория</th>
					<td>
						<select class="category_aja"  id="" name="categoriq">
													<?php 
													$con=mysql_query("SELECT * FROM categories"); 
													while($row=mysql_fetch_array($con)){?>
<option value="<?php echo "$row[id]"; ?>" <?php 	if($cat_id==$row['id']){ echo "selected"; }	?>	>
                                <?php echo "$row[name]"; ?>                             </option>
								<? } ?>
												</select>
					</td>
				</tr>
				<tr>
					<th>Под-категория</th>
					<td>
						<select class="category_ajasub" id="" name="podcategoriq">
							<?php 
													$con1=mysql_query("SELECT * FROM sub_categories WHERE cat_id = $cat_id "); 
													while($row1=mysql_fetch_array($con1)){?>
			<option value="<?php echo "$row1[id]"; ?>" <?php if($subcat_id==$row1['id']){?> selected <?php	}	?> >
												                                <?php echo "$row1[name]"; ?>                             </option>
								<? } ?>
						</select>
					</td>
				</tr>
				<tr>
					<th>Под-под-категория</th>
					<td>
						<select class="category_ajasubsub" name="podpodcategoriq">
							<?php 
													$con2=mysql_query("SELECT * FROM sub_sub_categories WHERE subcat_id=$subcat_id"); 
													while($row2=mysql_fetch_array($con2)){?>
													<option value="<?php echo "$row2[id]"; ?>"
													
													<?php 
													if($subsubcat_id==$row2['id']){
													?>   
													selected
													<?
													}
													?>
													
													>
                                <?php echo "$row2[name]"; ?>                             </option>
								<? } ?>
						</select>
					</td>
				</tr>
				<tr>
					<th>Информация</th>
					<td>
						<textarea cols="5" rows="4" style="" id="info" name="info" value=""><?php echo "$info"; ?></textarea>
					</td>
				</tr>
				<tr>
					<th>Цена</th>
					<td>
						<input style="height: 41px;
    width: 50px;" id="price" name="pricelev" value="<? echo "$part1"; if(empty($part1)){echo "0";} ?>" type="text"><span style="font-size:33px" >,</span><input style="height: 41px;
    width: 41px;" id="price" name="pricestot" value="<? echo "$part2"; if(empty($part2)){echo "00";} ?>" type="text"> лв./ <span class="mqrka" ><? echo "$mqrka"; ?></span>
					</td>
				</tr></tbody></table>
		</li>
				<li style="width: 100%;">
			<div class="caption">
				<img src="other/globe.png" alt="">
				Допълнително
			</div>
			<div class="description">
				Променете допълнителни данни за вашия продукт
			</div>
			<table>
				<tbody>
				<tr>
					<th >Мерна единица</th>
					<td><select style="width:200px" class="mqrkaizbor" name="mqrka">
						<option <?php if ($mqrka == 'на брой') echo "selected"; ?>  value="на брой">брой</option>
						<option <?php if ($mqrka == 'на метър') echo "selected"; ?>   value="на метър">дължина</option>
						<option <?php if ($mqrka == 'на литър') echo "selected"; ?>  value="на литър">обем</option>
						<option <?php if ($mqrka == 'на килограм') echo "selected"; ?>    value="на килограм">тегло</option>
					</select></td>
				</tr>
				<tr>
					<th >Срок на годност</th>
					<td><select name="expire" style="width:300px">
						<option  value="0" <?php if ($ediii['expire'] == 0) echo "selected"; ?>>Не, продукта няма срок на годност</option>
						<option  value="1" <?php if ($ediii['expire'] == 1) echo "selected"; ?>>Да, продуктът има срок на годност</option>
						</select></td>
				</tr></tbody></table>
		</li>	<li style="width:100%;padding:10px">	
						<input style=" -moz-border-bottom-colors: none;
    -moz-border-left-colors: none;
    -moz-border-right-colors: none;
    -moz-border-top-colors: none;
    background-color: rgb(230, 230, 230);
    border-color: darkGray #a0a0a0 #959595;
    border-image: none;
    border-left: 1px solid #a0a0a0;
    border-radius: 3px;
    border-right: 1px solid #a0a0a0;
    border-style: solid;
    border-width: 1px;
    box-shadow: 0 1px 4px -2px black, 0 1px 0 white inset;
    color: #333;
    font: bold 12px/14px helvetica,arial,sans-serif;
    height: 30px;
    padding: 0 40px;
    text-align: center;
	float:right;
    text-decoration: none;
    text-shadow: 0 1px 0 white;" name="submit" value="Редактиране" type="submit"></form></li><li style="width:100%">
											 <form action="?delete=<?php echo "$idp"; ?>&id=<?php echo "$idp"; ?>" method="POST">
				<tr><th></th>
				<td style="padding: 0 0 0 0" align="left"><table>
				<tr><td style="padding: 0 0">
				<input class="gray addSubAccount" type="submit" value="Изтрий продукт" style="float: left; margin-top: 3px; background-color: rgb(248, 96, 89); color: white; text-shadow: none; font-family: Arial"> </td></tr>
				<tr><td style="padding: 0 0">
				 <label><input type="checkbox" name="delete_store" value="<?php echo "$idp"; ?>"> <b>Потвърждавам,</b> че желая да премахна този продукт.</label></td></tr>
				 
				 </table>
				  
				  </td> </tr></form>
										</li>	
											<?php } else { ?>											
		<div id="content">
			<div class="container">
			<div id="orderform">
	<div id="server">
		Изтрит продукт <?php echo "$name"; ?>
		<span id="type"></span><a href="product_list.php"><input type="button" style="margin: 10px; float: right" class="green addPaypalSubscription" value="Списък продукти"></a>
	</div>
	<ul class="floatingBlocks" style="width:75.6%">
			<li style="width: 100%; border: 1px solid rgb(218, 218, 218); padding: 25px 5px 20px;">
			  <div class="caption">
			      <img src="images_2/icon_cloud.png"> ПРОДУКТЪТ Е ПРЕМАХНАТ УСПЕШНО!</div>
						<table>
							<tr>
					<th></th>  </tr></table >    
		</li>
				<?php } ?>		
	</ul>
	<div id="options" class="optionMenu">
		<div class="caption active">
			Меню
		</div>
		<ul>
			<li>
				<a href="">
	<img src="other/icon_server_single.png" alt="">Добави продукт
</a>
<a href="http://leap3.singlehop.com/solutions/dynamic-servers/">
	<img src="other/icon_dynamic.png" alt="Dynamic"> Dynamic Servers
</a>
<a href="http://leap3.singlehop.com/solutions/public-cloud/">
	<img src="other/icon_cloud.png" alt="Public Cloud"> Public Cloud
</a>
<a href="http://leap3.singlehop.com/solutions/virtual-load-balancer/">
	<img src="other/icon_vlb.png" alt="Load Balancer"> Load Balancer
</a>				<a href="http://leap3.singlehop.com/solutions/existing/">
					<img> Existing Solutions
				</a>
			</li>
		</ul>
				<ul data-prices="hourly" id="total" class="ignore" style="margin-top: 30px;">
			<li class="caption">Bandwidth &amp; Mgmt Services</li>
			<li data-price="month">
				$<span>0.0000</span> / Month
			</li>
			<li class="caption">Online</li>
			<li data-price="online">
				$<span>0.0605</span> / Hour
			</li>
			<li class="caption">Offline</li>
			<li data-price="offline">
				$<span>0.0055</span> / Hour
			</li>
		</ul>
		<div style="display: none;" data-prices="monthly" id="total">
			$<span>0.00</span> / Month
		</div>
	</div>
</div>

		</div>
	</div>
	<? 
include('footer.php');
?>