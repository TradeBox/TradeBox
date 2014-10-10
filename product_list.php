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
			  <div class="caption">
					 Списък продукти
				</div>
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
	<tbody>
		<tr>
			<th>ID</th>
			<th>Име</th>
			<th>Цена</th>
			<th>Наличност</th>
			<th></th>
		</tr>
<? 
				$check_if_empty=mysql_num_rows(mysql_query("SELECT * FROM products"));
				if($check_if_empty!=0){
				
				$mysql_s=mysql_query("SELECT * FROM products");
				while($red=mysql_fetch_array($mysql_s)){ $br++;
			if($br%2==0) {$bgcolor = "#F4F4F4";} else {$bgcolor = "#FFFFFF";}
			?>
			<tr class="main" style="background-color: <?php echo $bgcolor; ?>" onMouseOver="this.style.background='#CBF791'" onMouseOut="this.style.background='<?php echo $bgcolor; ?>'">
			<td><?php echo "$red[id]"; ?></td>
	
			<td><?php echo "$red[name]"; ?></td>
			<td><? if($red['promo']==1){ echo "<img src='other/promo.gif' width='35px' />"."$red[promo_price]"."лв. (Стара цена:".$red['price']."лв.)";}else{ ?><?php echo "$red[price]"; ?>лв.<? } ?></td>
			<td>5бр.</td>
			<td><center><a class="gray" style=" color: #464661;
    padding: 7px 15px;" href="product_edit.php?id=<?php echo "$red[id]"; ?>">Редакция</a></center></td>
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
