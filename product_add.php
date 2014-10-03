<? 
include('header.php');
?>
	
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
					<th>Сериен Номер</th>
					<td>
						<input style="" id="serial" name="serial" value="" type="text">
					</td>
				</tr>
				<tr>
					<th>Име</th>
					<td>
						<input style="" id="name" name="name" value="" type="text">
					</td>
				</tr>
				<tr>
					<th>Към категория</th>
					<td>
						<select id="" name="categoriq">
													
													<?php 
													$con=mysql_query("SELECT * FROM categories"); 
													while($row=mysql_fetch_array($con)){?>
													<option value="<?php echo "$row[id]"; ?>">
                                <?php echo "$row[name]"; ?>                             </option>
								<? } ?>
												</select>
					</td>
				</tr>
				<tr>
					<th>Към под-категория</th>
					<td>
						<select id="" name="podcategoriq">
							<?php 
													$con1=mysql_query("SELECT * FROM sub_categories"); 
													while($row1=mysql_fetch_array($con1)){?>
													<option value="<?php echo "$row1[id]"; ?>">
                                <?php echo "$row1[name]"; ?>                             </option>
								<? } ?>
						</select>
					</td>
				</tr>
				<tr>
					<th>Към под-под-категория</th>
					<td>
						<select id="" name="podpodcategoriq">
							<?php 
													$con2=mysql_query("SELECT * FROM sub_sub_categories"); 
													while($row2=mysql_fetch_array($con2)){?>
													<option value="<?php echo "$row2[id]"; ?>">
                                <?php echo "$row2[name]"; ?>                             </option>
								<? } ?>
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
				<tr>
					<th>Количество</th>
					<td>
						<input style="" id="amount" name="amount" value="" type="text">
					</td>
				</tr>
				<tr>
					<th>Срок на годност</th>
					<td>
						<input style="" id="end_date" name="end_date" value="0000-00-00" type="text">
					</td>
				</tr>
				
			</tbody></table>
		</li>
				<li style="width: 100%; padding: 67px 0px 0px;">
			<div class="caption">
				<img src="other/globe.png" alt="">
				Промoции
			</div>
			<ul class="checkboxes">
														
														<li>
						<input name="active" value="1" type="checkbox">
												<span class="mgmtName">В наличност</span>
											</li>
											<li>
						<input name="promo" value="1" type="checkbox">
												<span class="mgmtName">На промоция</span>
												
											</li>
														<li>	<span class="mgmtName">Промоционална цена:</span>
						<input name="promo_price" value="" type="text">
											
											</li>
											<li>	
											</li>
											<li>	
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
    text-shadow: 0 1px 0 white;" name="submit" value="Добавяне" type="submit">
											
											</li>
							</ul>
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