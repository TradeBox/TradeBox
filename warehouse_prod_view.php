<? 
include('header.php');
?>

<div id="module">
			<div class="container">
				<div class="caption">
					Продукт „<?
					$pr_id=$_GET['id'];
					$ss=mysql_fetch_array(mysql_query("SELECT * FROM products WHERE id = '$pr_id'"));
					echo $ss[name];
					?>“
				</div>
				<a href="stock_note_add.php" style=" background-color: rgb(127, 182, 18);
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
    text-shadow: 0 1px 0 rgb(91, 133, 8);">Добави нов продукт</a>
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
					 Списък Обекти
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
			$mysql_store=mysql_query("SELECT * FROM stores");
			while($red=mysql_fetch_array($mysql_store)){
			$store_id=$red['id'];$dff=0;
			$ssa=mysql_query("SELECT * FROM warehouse WHERE prod_id='$pr_id'");
			while($propp=mysql_fetch_array($ssa)){
			$propp_idstore=$propp['store_id'];
			if($propp_idstore==$store_id){  
			$dff = $dff + $propp['quantity'];
			}
			}
			?>
			
			<tr class="main" style="background-color: <?php echo $bgcolor; ?>" onMouseOver="this.style.background='#CBF791'" onMouseOut="this.style.background='<?php echo $bgcolor; ?>'">
			<td><?php echo "$red[id]"; ?></td>
			<td><b><?php echo $red[name]; ?></b><br><span style="font-size: 12px"><?php echo $red['city']." - ".$red['address'];  ?> </span> </td>
			<td><?  ?></td>
			<td><center><? echo $dff; if($ss[measure]=="на литър") echo " литра";
			if($ss[measure]=="на брой") echo " броя";if($ss[measure]=="на метър") echo " метра";if($ss[measure]=="на килограм") echo " килограма"; ?></center></td>
			<td><center><a class="gray" style=" color: #464661;
    padding: 7px 15px;" href="warehouse_list.php?id=<?php echo "$red[id]"; ?>">Управление</a></center></td>
		</tr>
	<?
}
	?>

					<tr>
				<td colspan="7">
				
				</td>
			</tr>
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
