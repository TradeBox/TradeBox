<? 
include('header.php');
?>
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
		<div id="content">
			<div class="container">
			<?php 
			if(isset($_POST['submit'])){
			$serial=$_POST['serial'];
			$name=$_POST['name'];
			$cat_id=$_POST['categoriq'];
			$subcat_id=$_POST['podcategoriq'];
			$subsubcat_id=$_POST['podpodcategoriq'];
			$info=$_POST['info'];
			$price=$_POST['price'];
			$weight=$_POST['weight'];
			$ml=$_POST['ml'];
			$amount=$_POST['amount'];
			$active=$_POST['active'];
			$promo=$_POST['promo'];
			$end_date=$_POST['end_date'];
			$promo_price=$_POST['promo_price'];
			mysql_query("INSERT INTO products (serial_no,name,cat_id,subcat_id,subsubcat_id,price,info,weight,active,promo,end_date,ml,promo_price,user_id,amount,bought) VALUES ('$serial','$name','$cat_id','$subcat_id','$subsubcat_id','$price','$info','$weight','$active','$promo','$end_date','$ml','$promo_price','$user_id','$amount','0')");
			add_to_archive('Потребителят добави нов Продукт '.$name.'');
			}
			
			
			?>
<form method="post" action="">

<div id="orderform">
	<div id="server">
		Добавяне на Нов Продукт
		<span id="type"></span>
	</div>
	<ul class="floatingBlocks" style="width:75.6%">
		<li style="width: 100%;">
			<div class="caption">
				<img src="other/icon_cloud.png" alt="Server Configuration">
				Данни за продукт
			</div>
			<div class="description">
				Попълнете данните за вашия продукт
			</div>
			<table>
				<tbody>
				<tr>
					<th>Име</th>
					<td>
						<input style="" id="name" name="name" value="" type="text">
					</td>
				</tr>
				<tr>
					<th>Към категория</th>
					<td>
						<select class="category_aja" name="categoriq"><? 
					$cat=mysql_query("SELECT * FROM categories");
					while($optcat=mysql_fetch_array($cat)){
					?>
						<option  value="<? echo "$optcat[id]"; ?>"><? echo "$optcat[name]"; ?></option><?
						}
						?>
					</select>
					</td>
				</tr>
				<tr>
					<th>Към под-категория</th>
					<td>
						<select class="category_ajasub" name="podkategoriq"><?
					$cata=mysql_fetch_array(mysql_query("SELECT * FROM categories"));
					$catnowa=$cata['id'];
					$scata=mysql_query("SELECT * FROM sub_categories WHERE cat_id='$catnowa'");
					while($sqa=mysql_fetch_array($scata)){
					?>
						<option  value="<? echo "$sqa[id]"; ?>"><? echo "$sqa[name]"; ?></option><? } ?>
					</select>
					</td>
				</tr>
				<tr>
					<th>Към под-под-категория</th>
					<td>
						<select class="category_ajasubsub" name="podpodkategoriq">
						<option  value="">Избери</option>
					</select>
					</td>
				</tr>
				<tr>
					<th>Информация</th>
					<td>
						<input style="" id="info" name="info" value="" type="text">
					</td>
				</tr>
				<tr>
					<th>Цена</th>
					<td>
						<input style="" id="price" name="price" value="" type="text">
					</td>
				</tr>
				
				
			</tbody></table>
		</li>
				<li style="width: 100%;">
			<div class="caption">
				<img src="other/globe.png" alt="">
				Допълнително
			</div>
			<div class="description">
				Добавете допълнителни данни за вашия продукт
			</div>
			<table>
				<tbody><tr>
					<th>Тегло</th>
					<td id="storage_sliders">
						<input style="" id="weight" name="weight" value="" type="text">
					</td>
				</tr>
				<tr>
					<th>Милилитри</th>
					<td>
						<input style="" id="ml" name="ml" value="" type="text">
					</td>
				</tr>
				
			</tbody></table>
		</li>
			
											<li style="width:100%"><table>
<tr><td ></td ><td>											
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
	cursor:pointer;
    padding: 0 40px;
    text-align: center;
	float:right;
    text-decoration: none;
    text-shadow: 0 1px 0 white;" name="submit" value="Добавяне" type="submit">
							</td></tr></table>				
											</li>
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
<!-- Removing Hosted Apps Ticket 2458
<a href="/solutions/hosted-apps/">
	<img src="/resources/leap3/imgs/solutions/icon_hostedapps.png" alt="Hosted Apps" /> Hosted Apps
</a>
-->
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
</form>
		</div>
	</div>
	<? 
include('footer.php');
?>