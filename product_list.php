<? 
include('header.php');
?>

<div id="module">
			<div class="container">
				<div class="caption">
					Продукти
				</div>
				<a href="product_add.php" style=" background-color: rgb(127, 182, 18);
    border: 1px solid rgb(98, 141, 13);
    border-radius: 3px;
    box-shadow: 1px 1px 1px rgba(5, 5, 5, 0.15);
    color: white;
    cursor: pointer;
    float: right;
    font-family: Helvetica,Arial;
    font-size: 13px;
    font-style: normal;
    font-weight: 700;
    height: 15px;
    line-height: 12px;
    margin-top: 12px;
    padding: 7px 15px;
    text-align: center;
    text-decoration: none;
    text-shadow: 0 1px 0 rgb(91, 133, 8);">Добави продукт</a>
			</div>
		</div>
				<div id="content">
			<div class="container">
			
			<div id="orderform">
   	     <ul class="floatingBlocks">
		   	 <li style="width: 100%; border-right: none;">
			 <div style="width: auto; float: right; margin: -57px 10px;">
				<table>
				<tr>
				<td style=" padding: 5px 0 3px 5px;"><input type="text" style="margin: 0 0; height: 30px; width: 220px; color: #D1CCCC" OnMouseOut="if (this.value == '') {this.value = 'ID / Име / Описание / Цена';}"
 onMouseOver="if (this.value == 'ID / Име / Описание / Цена') {this.value = '';}" value="ID / Име / Описание / Цена"  name="search_customer">
 	/ 
	          <select id="" style="width: auto" name="categoriq">
				  <option value="0">Избери категория</option>									
													
													<?php 
													$con=mysql_query("SELECT * FROM categories"); 
													while($row=mysql_fetch_array($con)){?>
<option value="<?php echo "$row[id]"; ?>" <?php 	if($cat_id==$row['id']){ echo "selected"; }	?>	>
                                <?php echo "$row[name]"; ?>                             </option>
								<? } ?>
												</select>
 </td>
				
				
				<td style=" padding: 5px 0 3px 5px;"><input  value="Търси" style="margin: 0 0;" class="gray" id="showAddPaymentMethodACH" type="button"></td>
				</tr>
				<tr><td style="font-size: 12px; margin: 0 0; padding: 0 0; text-align: right; vertical-align: middle; line-height: 15px" align="right" colspan="2"><a href="" style="color: #262B23">Всички продукти в: <b>"Хлебни продукти"</b> / (Може да изберете под-категория) </a></td></tr>
				</table>
				</div>
			 
			  <div class="caption">
					 Списък продукти
				</div>



<table class="dataTable expandableDetails">
	<tbody>
		<tr>
			<th width="30">ID</th>
			<th>Име</th>
			<th width="75">Цена</th>
			<th width="40">Наличност</th>
			<th width="60"></th>
		</tr>
<? 
				$check_if_empty=mysql_num_rows(mysql_query("SELECT * FROM products"));
				
				if($check_if_empty!=0){
				$mysql_s=mysql_query("SELECT * FROM products");
				while($red=mysql_fetch_array($mysql_s)){ $br++; $category_all = "";
			if($br%2==0) {$bgcolor = "#F4F4F4";} else {$bgcolor = "#FFFFFF";}
			if($red[cat_id] != 0) {
			$con2 = mysql_query("SELECT name FROM categories WHERE id = $red[cat_id]"); $cat_name = mysql_fetch_assoc($con2); 
			$category_all = $cat_name['name']; }
			if($red[subcat_id] != 0) {
			$con2 = mysql_query("SELECT name FROM sub_categories WHERE id = $red[subcat_id]"); $cat_name = mysql_fetch_assoc($con2); 
			$category_all .= " > ".$cat_name['name']; }
			if($red[subsubcat_id] != 0) {
			$con2 = mysql_query("SELECT name FROM sub_sub_categories WHERE id = $red[subsubcat_id]"); $cat_name = mysql_fetch_assoc($con2); 
			$category_all .= " > ".$cat_name['name']; }
			
			
			?>
			<tr class="main" style="background-color: <?php echo $bgcolor; ?>" onMouseOver="this.style.background='#CBF791'" onMouseOut="this.style.background='<?php echo $bgcolor; ?>'">
			<td><?php echo "$red[id]"; ?></td>
			<td><b><?php echo "$red[name]"; ?></b><br><span style="font-size: 12px"><?php echo $category_all;  ?> </span> </td>
			<td><? if($red['promo']==1){ echo "<img src='other/promo.gif' width='35px' />"."$red[promo_price]"."лв. (Стара цена:".$red['price']."лв.)";}else{ ?><?php echo "$red[price]"; ?> лв.<? } ?></td>
			<td>5 бр.</td>
			<td><center><a class="gray" style=" color: #464661;
    padding: 7px 15px;" href="product_edit.php?id=<?php echo "$red[id]"; ?>">Управление</a></center></td>
		</tr>
	
	<? }}else{ ?>
					<tr>
				<td colspan="7">
					This account currently has no sub accounts.
				</td>
			</tr> <? } ?>
					</tbody>
</table>

</li>
		</ul>
	</div>
		</div>
	</div>
	
	<? 
include('footer.php');
?>
