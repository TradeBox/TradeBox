<?php include("header.php"); 
include("supply_edit_complete.php");

$id = $_GET['id'];
$con = mysql_query("SELECT * FROM suppliers WHERE id = $id");
$row = mysql_fetch_array($con);
 	 $who_reg = $row['who_reg']; $con2 = mysql_query("SELECT info_name FROM users WHERE id = $who_reg"); $row2= mysql_fetch_array($con2);
	 
	 
?>

<div id="content">
			<div class="container">
<form method="post" action="" name="edit" id="edit">

<div id="orderform">
	<div id="server">
		<?php echo $row['name']; ?>
		<span id="type" style="font-size: 16px">(<?php echo $row['eik']; ?>)</span>
	</div>
	<ul style="width:727px" class="floatingBlocks">
		<li style="width: 100%; padding: 65px 5px 10px;">
			<div class="caption">
				<img src="other/icon_cloud.png" alt="Server Configuration">
				Основни данни
			</div>
			<div style="color: #282828" class="description">
				<?php echo $row2['info_name']; ?>
			</div>
			<table>
				<tbody>
				
				<tr>
					<th>Име</th>
					<td>
						<input disabled style="color: red;" id="c_name" name="c_name" value="<?php echo $row['name']; ?>" type="text">
					</td>
				</tr><tr>
					<th>ЕИК/егн</th>
					<td>
						<input disabled id="eik" name="eik" value="<?php echo $row['eik']; ?>" type="text">
					</td>
				</tr>
			
					<tr>
					<th>МОЛ</th>
					<td>
						<input disabled id="manager" name="manager" value="<?php echo $row['manager']; ?>" type="text">
					</td>
				</tr>
				
				
			    <tr>
					<th>Адрес</th>
					<td>
						<input disabled id="address" name="address" value="<?php echo $row['address']; ?>" type="text">
					</td>
				</tr>
					
				<tr>
					<th>Град</th>
					<td>
						<input disabled  id="city" name="city" value="<?php echo $row['city']; ?>" type="text">
					</td>
				</tr>		
				<tr>
					<th>ДДС номер</th>
					<td>
						<input disabled id="dds_number" name="dds_number" value="<?php echo $row['dds_number']; ?>" type="text">
					</td>
				</tr>
				<tr><th style="padding: 2px 0 0 5px;"></th>
				<td style="padding: 2px 0 0 5px;">
			<script type="text/javascript">
			function edit_supply () { 
			document.getElementById('redakt').style.visibility="visible";
			document.getElementById('redakt').disabled=false;
			document.getElementById('redyes').style.visibility="hidden";
			
		    document.getElementById('redakt2').style.visibility="visible";
			document.getElementById('redakt2').disabled=false;
			document.getElementById('redyes2').style.visibility="hidden";
			
			 eik.disabled=false;  city.disabled=false;    dds_number.disabled=false; 
			 c_name.disabled=false; address.disabled=false; manager.disabled=false;
			 contact_name.disabled=false; 		 contact_phone.disabled=false; 
			 contact_phone_2.disabled=false; 	 contact_fax.disabled=false; 
			 contact_email.disabled=false; 		 region.disabled=false; 
			 post_code.disabled=false; 			 country.disabled=false; 
			 contact_website.disabled=false;     grupa.disabled=false; 
			}
			</script>
    			<input class="gray addSubAccount" type="button" name="redyes" id="redyes" value="Редактирай Доставчика" onclick="edit_supply()" 
				 style="float: right; margin-top: 3px;">
				 <input class="gray addSubAccount" type="submit" name="redakt" id="redakt" disabled value="Запази промените" style="float: right; margin-top: 3px; visibility:hidden;">
				
				  </td> </tr>
			</tbody></table>
		</li>
				<li style="width: 100%;">
			<div class="caption">
				<img src="other/globe.png" alt="">
				Данни за контакт 
			</div>
			
			<table>
				<tbody>
				<tr>
					<th>Име за контакт:</th>
					<td>
						<input disabled id="contact_name" name="contact_name" value="<?php echo $row['contact_name']; ?>"  type="text">
					</td>
				</tr>
				<tr>
					<th>Телефон за контакт:</th>
					<td>
						<input disabled id="contact_phone" name="contact_phone" value="<?php echo $row['contact_phone']; ?>"   type="text">
					</td>
				</tr>
				<tr>
					<th>Телефон за контакт 2:</th>
					<td>
						<input disabled id="contact_phone_2" name="contact_phone_2" value="<?php echo $row['contact_phone_2']; ?>"   type="text">
					</td>
				</tr>
				<tr>
					<th>Факс за контакт:</th>
					<td>
						<input disabled id="contact_fax" name="contact_fax"  value="<?php echo $row['contact_fax']; ?>"  type="text">
					</td>
				</tr>
				<tr>
					<th>E-mail:</th>
					<td>
						<input disabled id="contact_email" name="contact_email"  value="<?php echo $row['contact_email']; ?>" type="text">
					</td>
				</tr>	<tr>
					<th>Облaст:</th>
					<td>
						<input disabled id="region" name="region"  value="<?php echo $row['region']; ?>"  type="text">
					</td>
				</tr>
				<tr>
					<th>Пощенски код:</th>
					<td>
						<input disabled id="post_code" name="post_code"  value="<?php echo $row['post_code']; ?>"  type="text">
					</td>
				</tr>
				<tr>
					<th>Държава:</th>
					<td>
						<input disabled id="country" name="country"  value="<?php echo $row['country']; ?>"  type="text">
					</td>
				</tr>
				<tr>
					<th>Уебсайт:</th>
					<td>
						<input disabled id="contact_website" name="contact_website" value="<?php echo $row['contact_website']; ?>"  type="text">
					</td>
				</tr>
			
				<tr>
				<tr>
					<th>Групa:</th>
					<td>
						 <select disabled name="grupa">
  <option value="normalen_klient">Нормален Доставчик</option>
  <option value="redoven_klient">Редовен Доставчик</option>
  <option value="nov_klient">Нов Доставчик</option>
</select>

					</td>
				</tr><tr><th></th>
				<td>
				<input class="gray addSubAccount" type="button" name="redyes2" id="redyes2" value="Редактирай Доставчика" onclick="edit_supply()" 
				 style="float: right; margin-top: 3px;">
				 <input class="gray addSubAccount" type="submit" name="redakt2" id="redakt2" disabled value="Запази промените" style="float: right; margin-top: 3px; visibility:hidden;">
				  </td> </tr>
			</tbody></table>
		</li></form>
			
				
				<li style="width: 100%; padding: 67px 0px 0px;">
			<div class="caption">
				<img src="LEAP3%20%20%20Solutions%20Center_files/globe.png" alt="">
				Бележки
			</div>
			<ul class="checkboxes">
															<?php $con3 = mysql_query("SELECT * FROM supply_comment WHERE supply_id	= $id ORDER BY id DESC");
 $check_comments = mysql_num_rows($con3);		if ( $check_comments == 0) {	?><li>
						
												<center>- Няма добавени бележки - </center>
											</li><?php } else { while($row3 = mysql_fetch_array($con3)) { ?>
														
														<li>
							<img src="other/icon_server_single.png" width="20">
												<span class="mgmtName"> (<?php echo $row3['date']; ?>)</span>
																			-  <?php echo $row3['comment']; ?>
											</li> <?php } } ?>
											
											<li>
					<img src="other/icon_server_single.png" width="20">
												<span class="mgmtName"> Нова бележка:</span>
													<form action="" method="post">
													<textarea name="add_comment"></textarea>
													<input class="gray addSubAccount" type="submit" value="Добави бележка" style="float: right; margin-top: 3px;">
													</form>
											</li>
													
							</ul>
		</li>
	</ul>
	<div id="options" class="optionMenu">
		<div class="caption active">
			Информация Доставчик
		</div>
		<ul>
			<li>
				<a href="http://leap3.singlehop.com/solutions/dedicated-servers/">
	<img src="images_2/icon_cloud.png" alt="Dedicated"> Продажби
</a>
<a href="http://leap3.singlehop.com/solutions/dynamic-servers/">
	<img src="other/icon_cloud.png" alt="Dynamic"> Фактури  
</a>
<a href="http://leap3.singlehop.com/solutions/public-cloud/">
	<img src="other/icon_cloud.png" alt="Public Cloud"> Поръчки
</a>

<a href="http://leap3.singlehop.com/solutions/existing/">
					<img src="other/icon_cloud.png" alt="Public Cloud">  Договори / Оферти
				</a>
				<a href="http://leap3.singlehop.com/solutions/existing/">
					<img src="other/icon_cloud.png" alt="Public Cloud">  Рекламации
				</a>
			</li>
		</ul>
				<ul data-prices="hourly" id="total" class="ignore" style="margin-top: 30px;">
			<li class="caption">Фактури за плащане</li>
			<li data-price="month">
				<span>2 бр.</span> / 54.78 лв.
			</li>
			<li class="caption">Проформа-фактури</li>
			<li data-price="online">
				<span>0 бр.</span> / 0.00 лв.
			</li>
			<li class="caption">Стокови разписки</li>
			<li data-price="offline">
				<span>1 бр.</span> / 122.00 лв.
			</li>
		</ul>
		<div style="display: none;" data-prices="monthly" id="total">
			$<span>0.00</span> / Month
		</div>
		<input style="display: none;" onclick="javascript:return confirm('Continuing will purchase this public cloud instance and add it to your account.');" id="finalize" value="Deploy Component" class="green" type="submit">
	</div>
</div>

		</div></div>
				<?php
				include('footer.php');
				?>