<?php
include("header.php");
?>
				<div id="module">
			<div class="container">
				<div class="caption">
					Добавяне на нов клиент
				</div>
			</div>
		</div>
				<div id="content">
			<div class="container">
<div id="orderform">

	<ul class="floatingBlocks">
		<li style="width: 100%;">
			<div class="caption">
			<img src="images_2/icon_cloud.png">
				
				Основни данни
			</div>
			<form method="POST" action="register_complete.php">
			<table>
				<tr>
					<th>Име:</th>
					<td>
						<input " id="name" name="name"  type="text">
					</td>
				</tr>
				<tr>
					<th>ЕИК:</th>
					<td>
						<input " id="eik" name="eik"  type="text">
					</td>
				</tr>
				<tr>
					<th>ДДС_Номер:</th>
					<td>
						<input " id="dds_number" name="dds_number"  type="text">
					</td>
				</tr>
				<tr>
					<th>Адрес:</th>
					<td>
						<input " id="address" name="address"  type="text">
					</td>
				</tr>
				<tr>
					<th>Град:</th>
					<td>
						<input " id="city" name="city"  type="text">
					</td>
				</tr>
				<tr>
					<th>Облaст:</th>
					<td>
						<input " id="region" name="region"  type="text">
					</td>
				</tr>
				<tr>
					<th>Пощенски код:</th>
					<td>
						<input " id="post_code" name="post_code"  type="text">
					</td>
				</tr>
				<tr>
					<th>Държава:</th>
					<td>
						<input " id="country" name="country"  type="text">
					</td>
				</tr>
				<tr>
					<th>Управител:</th>
					<td>
						<input " id="manager" name="manager"  type="text">
					</td>
				</tr>
				
					
				
			</table>
		</li>
				<li style="width: 100%;">
			<div class="caption">
				<img src="LEAP3%20%20%20Solutions%20Center_files/globe.png" alt="">
				Данни за контакт
			</div>
			<table>
				<tr>
					<th>Име за контакт:</th>
					<td>
						<input " id="contact_name" name="contact_name"  type="text">
					</td>
				</tr>
				<tr>
					<th>Телефон за контакт:</th>
					<td>
						<input " id="contact_phone" name="contact_phone"  type="text">
					</td>
				</tr>
				<tr>
					<th>Телефон за контакт 2:</th>
					<td>
						<input " id="contact_phone_2" name="contact_phone_2"  type="text">
					</td>
				</tr>
				<tr>
					<th>Факс за контакт:</th>
					<td>
						<input " id="contact_fax" name="contact_fax"  type="text">
					</td>
				</tr>
				<tr>
					<th>E-mail за контакт:</th>
					<td>
						<input " id="contact_email" name="contact_email" type="text">
					</td>
				</tr>
				<tr>
					<th>Уебсайт за контакт:</th>
					<td>
						<input " id="contact_website" name="contact_website" type="text">
					</td>
				</tr>
				<tr>
					<th>Бележки:</th>
					<td>
						<input " id="contact_info" name="contact_info"  type="text">
					</td>
				</tr>
				<tr></table>
		</li>
				<li style="width: 100%; padding: 67px 0px 0px;">
			<div class="caption">
				<img src="LEAP3%20%20%20Solutions%20Center_files/globe.png" alt="">
				Банкови данни
			</div>
			<table>
			<th>Iban:</th>
					<td>
						<input " id="iban" name="iban" type="text">
					</td>
				</tr>
				<tr>
					<th>BIC код:</th>
					<td>
						<input " id="bic_code" name="bic_code"  type="text">
					</td>
				</tr>
				<tr>
					<th>Име на банката:</th>
					<td>
						<input " id="bank_name" name="bank_name"  type="text">
					</td>
				</tr>
				<tr>
					<th>Групи:</th>
					<td>
						 <select name="grupa">
  <option value="normalen_klient">Нормален Клиент</option>
  <option value="redoven_klient">Редовен Клиент</option>
  <option value="nov_klient">Нов Клиент</option>
</select>

					</td>
				</tr>
				<td>
				 <input class="gray addSubAccount" type="submit" value="Регистрация" style="float: right; margin-top: 12px;">
				  </td>
				</table>
				</form>
	</div>
				<?php
				include('footer.php');
				?>