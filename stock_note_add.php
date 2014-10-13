<? 
include('header.php');
?>
		<div id="content">
			<div class="container">
			<?php 
			if(isset($_POST['submit']) AND !empty($_POST['name'])){
			$name=$_POST['name'];
			$cat_id=$_POST['categoriq'];
			$subcat_id=$_POST['podkategoriq'];
			$subsubcat_id=$_POST['podpodkategoriq'];
			$info=$_POST['info'];
			$pricelev=$_POST['pricelev'];
			$pricestot=$_POST['pricestot'];
			$price=$pricelev.".".$pricestot;
			$mqrka=$_POST['mqrka'];
			$expire = $_POST['expire'];
			
			
			mysql_query("INSERT INTO products (name,cat_id,subcat_id,subsubcat_id,price,info,measure, expire) VALUES ('$name','$cat_id','$subcat_id','$subsubcat_id','$price','$info','$mqrka', '$expire')") or die (mysql_query());
			
			add_to_archive('Потребителят добави нов Продукт '.$name.'');
			}
			
			
			?>
<form method="post" action="">

<div id="orderform">
	<div id="server">
		Нова стокова разписка
		<span id="type"></span>
		<a href="product_list.php"><input type="button" style="margin: 10px; float: right" class="green addPaypalSubscription" value="Списък продукти"></a>
	</div>
	<ul class="floatingBlocks" style="width:75.6%">
		<li style="width: 100%;">
			<div class="caption">
				<img src="other/icon_cloud.png" alt="Server Configuration">
				Данни стокова разписка
			</div>
			<div class="description">
				Попълнете данните за стокова разписка
			</div>
			<table>
				<tbody>
				<tr>
					<th>Доставчик</th>
					<td>
						<input style="" id="name" name="name" value="" type="text">
					</td>
				</tr>
				<tr>
					<th>Обект</th>
					<td>
					<select class="obekt" name="obekt" >
													<option value="">
                               Моля изберете                             </option>
													<?php 
													$con=mysql_query("SELECT * FROM stores"); 
													while($row=mysql_fetch_array($con)){?>
													<option value="<?php echo "$row[id]"; ?>">
                                <?php echo "$row[name]"; ?>                             </option>
								
								<? } ?>
												</select>
					</td>
				</tr>
				<tr>
					<th>Адрес на Обекта</th>
					<td >
					<div class='adres' name='adres'></div>
					</td>
				</tr>
				<tr>
					<th></th>
					<td>
						
					</td>
				</tr>
				<tr>
					<th></th>
					<td>
						
					</td>
				</tr>
				<tr>
					<th></th>
					<td>
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
    text-shadow: 0 1px 0 white;" name="submit" value="Напред" type="submit">
					</td> 
				</tr>
				
				
			</tbody></table>
		</li>
			</form>	
											
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