<?php include("header.php"); ?>
<?php include("supply_add_complete.php"); ?>
<div id="module">
   <div class="container">
		<div class="caption">
					Добавяне на нов Доставчик
		</div>
		
		
	</div>
</div>
<div id="content">
 <div class="container">
    <script src="validate.js"></script>
	<form method="POST" action=""  onsubmit="return validate()">
       <div id="orderform">
   	     <ul class="floatingBlocks">
		   	 <?php if ( $reg_complete == 1) { ?>
		   <li style="width: 100%; border: 1px solid rgb(218, 218, 218); padding: 25px 5px 20px;">
			  <div class="caption">
			      <img src="images_2/icon_cloud.png">
				
			   Доставчикът е добавен успешно!
			</div>
			
			<table>
			
						
						<tr><th></th>
				<td style="padding: 0 0 0 0">
				
				<input class="gray addSubAccount" type="button" value="Добавяне на нов Доставчик" style="float: right; margin-top: 3px;">
				 <input class="gray addSubAccount" type="button" value="Списък Доставчики" style="float: right; margin-top: 3px;">
				 <input class="gray addSubAccount" type="button" value="Нова продажба" style="float: right; margin-top: 3px;">
				  </td> </tr>
				
			</table>
		</li>
		 <?php } ?>
		 
		 <?php if ( $reg_complete != 1) { ?>
	        <li style="width: 100%; border: 1px solid rgb(218, 218, 218); padding: 25px 5px 20px;">
			  <div class="caption">
			      <img src="images_2/icon_cloud.png">
				
				Основни данни
			</div>
			
			<table>
			<tr>
					<th></th>
					<td align="right" style="text-align: right; padding-right: 15px">
						<input style="transform: scale(1.2, 1.2); -moz-transform: scale(1.2, 1.2); -ms-transform: scale(1.2, 1.2);
-webkit-transform: scale(1.2, 1.2); -o-transform: scale(1.2, 1.2); " id="supply_type" name="supply_type"  type="radio" checked="checked"  value="personal"   onClick="document.getElementById('dds_number').disabled = true; document.getElementById('manager').disabled = true; document.getElementById('dds_number').value = 'Полето е активно само за Юредически лица'; document.getElementById('manager').value = 'Полето е активно само за Юредически лица';"  > Физическо лице &nbsp;&nbsp;&nbsp; <input id="supply_type" style="transform: scale(1.2, 1.2); -moz-transform: scale(1.2, 1.2); -ms-transform: scale(1.2, 1.2); -webkit-transform: scale(1.2, 1.2); -o-transform: scale(1.2, 1.2); " name="supply_type" onClick="document.getElementById('dds_number').disabled = false; document.getElementById('dds_number').value = ''; document.getElementById('manager').disabled = false; document.getElementById('manager').value = ''; "  type="radio"  value="company"> Юридическо лице 
					</td>
				</tr>
				<tr>
					<th>Име*:</th>
					<td>
						<input id="name" name="name"  type="text">
					</td>
				</tr>
				<tr>
					<th>ЕИК / (егн):</th>
					<td>
						<input id="eik" name="eik"  type="text" >
					</td>
				</tr>
				<tr>
					<th>ДДС Номер:</th>
					<td>
						<input id="dds_number" name="dds_number"  type="text" value="Полето е активно само за Юредически лица"  disabled="disabled">
					</td>
				</tr>
				<tr>
					<th>Адрес*:</th>
					<td>
						<input id="address" name="address"  type="text">
					</td>
				</tr>
				<tr>
					<th>Град*:</th>
					<td>
						<input id="city" name="city"  type="text">
					</td>
				</tr>
			
				<tr>
					<th>МОЛ:</th>
					<td>
						<input id="manager" name="manager"  type="text" disabled="disabled" value="Полето е активно само за Юредически лица">
					</td>
				</tr>
				
						<tr><th></th>
				<td style="padding: 0 0 0 0">
				 <input class="gray addSubAccount" type="submit" value="Регистрация" style="float: right; margin-top: 3px;">
				  </td> </tr>
				
			</table>
		</li>
				<li style="width: 100%; margin-top: 15px; border: 1px solid rgb(218, 218, 218);">
			<div class="caption">
				<img src="images_2/globe.png" alt="">
				Данни за контакт
			</div>
			<table>
				<tr>
					<th>Име за контакт:</th>
					<td>
						<input id="contact_name" name="contact_name"  type="text">
					</td>
				</tr>
				<tr>
					<th>Телефон за контакт:</th>
					<td>
						<input id="contact_phone" name="contact_phone"  type="text">
					</td>
				</tr>
				<tr>
					<th>Телефон за контакт 2:</th>
					<td>
						<input id="contact_phone_2" name="contact_phone_2"  type="text">
					</td>
				</tr>
				<tr>
					<th>Факс за контакт:</th>
					<td>
						<input id="contact_fax" name="contact_fax"  type="text">
					</td>
				</tr>
				<tr>
					<th>E-mail:</th>
					<td>
						<input id="contact_email" name="contact_email" type="text">
					</td>
				</tr>	<tr>
					<th>Облaст:</th>
					<td>
						<input id="region" name="region"  type="text">
					</td>
				</tr>
				<tr>
					<th>Пощенски код:</th>
					<td>
						<input id="post_code" name="post_code"  type="text">
					</td>
				</tr>
				<tr>
					<th>Държава:</th>
					<td>
						<input id="country" name="country"  type="text">
					</td>
				</tr>
				<tr>
					<th>Уебсайт:</th>
					<td>
						<input id="contact_website" name="contact_website" type="text">
					</td>
				</tr>
				<tr>
					<th>Бележки:</th>
					<td>
						<input id="contact_info" name="contact_info"  type="text">
					</td>
				</tr>
				<tr>
				<tr>
					<th>Групи:</th>
					<td>
						 <select name="grupa">
  <option value="normalen_klient">Нормален Доставчик</option>
  <option value="redoven_klient">Редовен Доставчик</option>
  <option value="nov_klient">Нов Доставчик</option>
</select>

					</td>
				</tr>
				<tr><th></th>
				<td>
				 <input class="gray addSubAccount" type="submit" value="Регистрация" style="float: right; margin-top: 3px;">
				  </td> </tr>
				
				</table>
		</li>
				<li style="width: 100%; padding: 67px 0px 0px; ; margin-top: 15px; border: 1px solid rgb(218, 218, 218);">
			<div class="caption">
				<img src="images_2/globe.png" alt="">
				Банкови данни
			</div>
			<table>
			<th>IBAN:</th>
					<td>
						<input id="iban" name="iban" type="text">
					</td>
				</tr>
				<tr>
					<th>BIC код:</th>
					<td>
						<input id="bic_code" name="bic_code"  type="text">
					</td>
				</tr>
				<tr>
					<th>Име на банката:</th>
					<td>
						<input id="bank_name" name="bank_name"  type="text">
					</td>
				</tr>
				<tr><th></th>
				<td>
				 <input class="gray addSubAccount" type="submit" value="Регистрация" style="float: right; margin-top: 3px;">
				  </td> </tr>
				</table></li> 
				<?php } ?>
				</form>
	</div>
				<?php
				include('footer.php');
				?>