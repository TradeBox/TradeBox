<? 
include('header.php');
?>

<div id="module">
			<div class="container">
				<div class="caption">
					Продукти
				</div>
			</div>
		</div>
				<div id="content">
			<div class="container">
<script type="text/javascript" src="LEAP3Account%20&amp;%20Billing2_files/modal_addsubaccount.js"></script>
<link rel="stylesheet" type="text/css" href="LEAP3Account%20&amp;%20Billing2_files/modal_addsubaccount.css">
<div style="display: none;" class="modal" id="addSubAccount">
	<div class="header">
		<img class="close" src="LEAP3Account%20&amp;%20Billing2_files/close.png">
		Add Sub Account
	</div>
	<div class="body">
		<form method="post" action="/account/actn/subAcct-create/">
			<ul>
				<li>
					<label>
						Email
					</label>
					<input name="email" type="email">
					<label>
						First Name
					</label>
					<input name="first" type="text">
					<label>
						Last Name
					</label>
					<input name="last" type="text">
				</li>
				<li>
					<label>
						Password
					</label>
					<input name="password" type="password">
					<label>
						Description
					</label>
					<textarea name="description"></textarea>
				</li>
			</ul>
			<input style="float: right;" class="green" value="Create Account" type="submit">
		</form>
	</div>
</div>
<link href="LEAP3Account%20&amp;%20Billing2_files/subaccounts.css" rel="stylesheet" type="text/css">


<table class="dataTable expandableDetails">
	<thead>
		<tr>
			<th colspan="7">
				<input class="gray addSubAccount" style="float: right; margin-top: 12px;" value="Сортирай" type="button">
				Подреждане
			</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<th>ID</th>
			<th>Сериен Номер</th>
			<th>Име</th>
			<th>Цена</th>
			<th>Наличност</th>
			<th></th>
			<th></th>
		</tr>
<? 
				$check_if_empty=mysql_num_rows(mysql_query("SELECT * FROM products"));
				if($check_if_empty!=0){
				
				$mysql_s=mysql_query("SELECT * FROM products");
				while($red=mysql_fetch_array($mysql_s)){ $br++;
			if($br%2==0) {$bgcolor = "#F4F4F4";} else {$bgcolor = "#FFFFFF";}
			if($red['promo']==1){$bgcolor = "#FEE388";}
			if($red['amount']==0){$bgcolor = "#E50101";}
			?>
			<tr class="main" style="background-color: <?php echo $bgcolor; ?>" onMouseOver="this.style.background='#CBF791'" onMouseOut="this.style.background='<?php echo $bgcolor; ?>'">
			<th><?php echo "$red[id]"; ?></th>
			<th><?php echo "$red[serial_no]"; ?></th>
			<th><?php echo "$red[name]"; ?></th>
			<th><? if($red['promo']==1){ echo "<img src='other/promo.gif' width='35px' />"."$red[promo_price]"."лв. (Стара цена:".$red['price']."лв.)";}else{ ?><?php echo "$red[price]"; ?>лв.<? } ?></th>
			<th><?php echo "$red[amount]"; ?>бр.</th>
			<th><center><a href="product_edit.php?id=<?php echo "$row[id]"; ?>"><img src="other/edit.png" width="20px"  /></a></center></th>
			<th><center><a href="product_dell.php?id=<?php echo "$row[id]"; ?>"><img src="other/delete.png" width="20px"  /></a></center></th>
		</tr>
	
	<? }}else{ ?>
					<tr>
				<td colspan="7">
					This account currently has no sub accounts.
				</td>
			</tr> <? } ?>
					</tbody>
</table>

		</div>
	</div>
	
	<? 
include('footer.php');
?>
