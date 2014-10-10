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
			<?php 
			if(isset($_POST['submit'])){
			$name=$_POST['name'];
			$cat_id=$_POST['categoriq'];
			$subcat_id=$_POST['podcategoriq'];
			$subsubcat_id=$_POST['podpodcategoriq'];
			$info=$_POST['info'];
			$pricelev=$_POST['pricelev'];
			$pricestot=$_POST['pricestot'];
			$price=$pricelev.".".$pricestot;
			$mqrka=$_POST['mqrka'];
			if($mqrka==1){
$mqrka="на брой";
}
if($mqrka==2){
$mqrka="на метър";
}
if($$mqrka==3){
$mqrka="на литър";
}
if($mqrka==4){
$mqrka="на килограм";
}
			
			mysql_query("INSERT INTO products (name,cat_id,subcat_id,subsubcat_id,price,info,measure) VALUES ('$name','$cat_id','$subcat_id','$subsubcat_id','$price','$info','$mqrka')");
			add_to_archive('Потребителят добави нов Продукт '.$name.'');
			}
			
			
			?>
<form method="post" action="">

<div id="orderform">
	<div id="server">
		Добавяне на Нов Продукт
		<span id="type"></span>
		<a href="product_list.php"><input type="button" style="margin: 10px; float: right" class="green addPaypalSubscription" value="Списък продукти"></a>
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
					<th>Наименование</th>
					<td>
						<input style="" id="name" name="name" value="" type="text">
					</td>
				</tr>
				<tr>
					<th>Категория</th>
					<td>
						<select class="category_aja" name="categoriq">
						<option  value="">Избери</option><? 
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
					<th>Под-категория</th>
					<td>
						<select class="category_ajasub" name="podkategoriq">
						<option  value="">Избери</option>
					</select>
					</td>
				</tr>
				<tr>
					<th>Под-под-категория</th>
					<td>
						<select class="category_ajasubsub" name="podpodkategoriq">
						<option  value="">Избери</option>
					</select>
					</td>
				</tr>
				<tr>
					<th>Информация</th>
					<td>
						<textarea cols="5" rows="4" style="" id="info" name="info" value=""></textarea>
					</td>
				</tr>
				<tr>
					<th>Цена</th>
					<td>
						<input style="height: 41px;
    width: 50px;" id="price" name="pricelev" value="00" type="text"><span style="font-size:33px" >,</span><input style="height: 41px;
    width: 41px;" id="price" name="pricestot" value="00" type="text"> лв./ <span class="mqrka"  >на брой</span>
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
					<th >Мерна единица</th>
					<td><select name="mqrka" style="width:200px" class="mqrkaizbor">
						<option  value="" selected>Избери</option>
						<option  value="1">брой</option>
						<option  value="2">дължина</option>
						<option  value="3">обем</option>
						<option  value="4">тегло</option>
					</select></td>
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
							</td></tr></table>	</form>			
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

		</div>
	</div>
	<? 
include('footer.php');
?>