<? 
include('header.php');
?>
	
		<div id="content">
			<div class="container">
			<?php 
			if(isset($_GET['id'])){
			$id=$_GET['id'];
			if(isset($_POST['submit'])){
			$name=$_POST['name'];
			$discount=$_POST['discount'];
			$group_info=$_POST['group_info'];
			$update_date=$_POST['update_date'];
			mysql_query("UPDATE supply_groups SET group_name='$name',discount='$discount',group_info='$group_info',update_date='$update_date' WHERE id='$id'");
				add_to_archive('Потребителят редактира Група '.$name.'');
			}
			$edd=mysql_fetch_array(mysql_query("SELECT * FROM supply_groups WHERE id='$id'"));
			
			}
			
			
			?>
<form method="post" action="">

<div id="orderform">
	<div id="server">
		Редактиране на Група "<? echo $edd['group_name']; ?>"
		<span id="type"></span>
	</div>
	<ul class="floatingBlocks" style="width:75.6%">
		<li style="width: 100%;">
			<div class="caption">
				<img src="other/icon_cloud.png" alt="Server Configuration">
				Данни за група
			</div>
			<div class="description">
				Редактирайте данните за гупата
			</div>
			<table>
				<tbody>
				<tr>
					<th>Име</th>
					<td>
						<input style="" id="name" name="name" value="<? echo $edd['group_name']; ?>" type="text">
					</td>
				</tr>
				<tr>
					<th>Процент отстъпка</th>
					<td>
						<input style="" id="discount" name="discount" value="<? echo $edd['discount']; ?>" type="text">
					</td>
				</tr>
				<tr>
					<th>Информация</th>
					<td>
						<input style="" id="group_info" name="group_info" value="<? echo $edd['group_info']; ?>" type="text">
					</td>
				</tr>
				<tr>
					<th>Дата на обновяване</th>
					<td>
						<input style="" id="update_date" name="update_date" value="<? echo $edd['update_date']; ?>" type="text">
					</td>
					
				</tr><tr><td colspan=2><input style=" -moz-border-bottom-colors: none;
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
    text-shadow: 0 1px 0 white;" name="submit" value="Редакция" type="submit"></td></tr>	
			</tbody></table>
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