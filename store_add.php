<?php include("header.php"); ?>
<?php include("store_add_complete.php"); ?>
<div id="module">
   <div class="container">
		<div class="caption">
					Добавяне на нов обект
		</div>
		
		
	</div>
</div>
<div id="content">
 <div class="container">
    <script src="validate.js"></script>
	<form method="POST" action=""  enctype="multipart/form-data">
       <div id="orderform">
   	     <ul class="floatingBlocks">
		   	 <?php if ( $reg_complete == 1) { ?>
		   <li style="width: 100%; border: 1px solid rgb(218, 218, 218); padding: 25px 5px 20px;">
			  <div class="caption">
			      <img src="images_2/icon_cloud.png">
				
			   Обектът е добавен успешно!
			</div>
			
			<table>
			
						
						<tr><th></th>
				<td style="padding: 0 0 0 0">
				
				<input class="gray addSubAccount" type="button" value="Добавяне на нов обект" style="float: right; margin-top: 3px;">
				 <input class="gray addSubAccount" type="button" value="Списък обекти" style="float: right; margin-top: 3px;">
				 <input class="gray addSubAccount" type="button" value="Нов потребител" style="float: right; margin-top: 3px;">
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
					<td align="right" style="text-align: right; padding-right: 15px; font-size: 16px">
						<label><input style="transform: scale(1.2, 1.2); -moz-transform: scale(1.2, 1.2); -ms-transform: scale(1.2, 1.2);
-webkit-transform: scale(1.2, 1.2); -o-transform: scale(1.2, 1.2); " id="warehouse" name="warehouse"  type="radio" checked="checked"  value="0"> 

Търговски обект</label>&nbsp;&nbsp;&nbsp;
<label>
 <input id="warehouse" style="transform: scale(1.2, 1.2); -moz-transform: scale(1.2, 1.2); -ms-transform: scale(1.2, 1.2); -webkit-transform: scale(1.2, 1.2); -o-transform: scale(1.2, 1.2); " name="warehouse" type="radio"  value="1"> Склад</label>
					</td>
				</tr>
				<tr>
					<th>Име на обекта*:</th>
					<td>
						<input id="name" name="name"  type="text">
					</td>
				</tr>
				<tr>
					<th>Град:</th>
					<td>
						<input id="city" name="city"  type="text" >
					</td>
				</tr>
				<tr>
					<th>Адрес:</th>
					<td>
						<input id="address" name="address"  type="text" >
					</td>
				</tr>
					<tr>
					<th>Телефон:</th>
					<td>
						<input id="phone" name="phone" style="width: 50%" type="text" >
					</td>
				</tr>
				<tr>
					<th>Снимка на обекта:</th>
					<td>
						<input type="file" name="file" id="file">
					</td>
				</tr>
				<tr>
					<th>Работно време</th>
					<td>
						
					</td>
				</tr>
			
				<tr>
					<th>Пон-Пет:</th>
					<td>
						от 
						<select name="weekh" style="width: 9%">
  <option value="00">00</option>  <option value="01">01</option>
  <option value="02">02</option>  <option value="03">03</option>
  <option value="04">04</option>  <option value="05">05</option>
  <option value="06">06</option>  <option value="07">07</option>
  <option value="08">08</option>  <option value="09">09</option>
  <option value="10">10</option>  <option value="11">11</option>
  <option value="12">12</option>  <option value="13">13</option>
  <option value="14">14</option>  <option value="15">15</option>
  <option value="16">16</option>  <option value="17">17</option>
  <option value="18">18</option>  <option value="19">19</option>
  <option value="20">20</option>  <option value="21">21</option>
  <option value="22">22</option>  <option value="23">23</option>
</select> <b> : </b>  <select name="weekm" style="width: 9%">
  <option value="00">00</option>    <option value="05">00</option>
  <option value="10">10</option>  <option value="15">15</option>
  <option value="20">20</option>  <option value="25">25</option>
  <option value="30">30</option>  <option value="35">35</option>
  <option value="40">40</option>  <option value="45">45</option>
  <option value="50">50</option>  <option value="55">55</option>
  <option value="60">60</option>
  
</select>  до  	<select name="weekh2"  style="width: 9%">
  <option value="00">00</option>  <option value="01">01</option>
  <option value="02">02</option>  <option value="03">03</option>
  <option value="04">04</option>  <option value="05">05</option>
  <option value="06">06</option>  <option value="07">07</option>
  <option value="08">08</option>  <option value="09">09</option>
  <option value="10">10</option>  <option value="11">11</option>
  <option value="12">12</option>  <option value="13">13</option>
  <option value="14">14</option>  <option value="15">15</option>
  <option value="16">16</option>  <option value="17">17</option>
  <option value="18">18</option>  <option value="19">19</option>
  <option value="20">20</option>  <option value="21">21</option>
  <option value="22">22</option>  <option value="23">23</option>
</select> <b> : </b><select name="weekm2" style="width: 9%">
   <option value="00">00</option>    <option value="05">00</option>
  <option value="10">10</option>  <option value="15">15</option>
  <option value="20">20</option>  <option value="25">25</option>
  <option value="30">30</option>  <option value="35">35</option>
  <option value="40">40</option>  <option value="45">45</option>
  <option value="50">50</option>  <option value="55">55</option>
  <option value="60">60</option>
  
</select> 
					</td>
				</tr>
				
				<tr>
					<th>Събота:</th>
					<td>
						от 
						<select name="sath" style="width: 9%">
  <option value="00">00</option>  <option value="01">01</option>
  <option value="02">02</option>  <option value="03">03</option>
  <option value="04">04</option>  <option value="05">05</option>
  <option value="06">06</option>  <option value="07">07</option>
  <option value="08">08</option>  <option value="09">09</option>
  <option value="10">10</option>  <option value="11">11</option>
  <option value="12">12</option>  <option value="13">13</option>
  <option value="14">14</option>  <option value="15">15</option>
  <option value="16">16</option>  <option value="17">17</option>
  <option value="18">18</option>  <option value="19">19</option>
  <option value="20">20</option>  <option value="21">21</option>
  <option value="22">22</option>  <option value="23">23</option>
</select> <b> : </b><select  name="satm"  style="width: 9%">
  <option value="00">00</option>    <option value="05">00</option>
  <option value="10">10</option>  <option value="15">15</option>
  <option value="20">20</option>  <option value="25">25</option>
  <option value="30">30</option>  <option value="35">35</option>
  <option value="40">40</option>  <option value="45">45</option>
  <option value="50">50</option>  <option value="55">55</option>
  <option value="60">60</option>
  
</select>  до  	<select  name="sath2"  style="width: 9%">
    <option value="00">00</option>  <option value="01">01</option>
  <option value="02">02</option>  <option value="03">03</option>
  <option value="4">04</option>  <option value="05">05</option>
  <option value="06">06</option>  <option value="07">07</option>
  <option value="08">08</option>  <option value="09">09</option>
  <option value="10">10</option>  <option value="11">11</option>
  <option value="12">12</option>  <option value="13">13</option>
  <option value="14">14</option>  <option value="15">15</option>
  <option value="16">16</option>  <option value="17">17</option>
  <option value="18">18</option>  <option value="19">19</option>
  <option value="20">20</option>  <option value="21">21</option>
  <option value="22">22</option>  <option value="23">23</option>
</select> <b> : </b><select  name="satm2"  style="width: 9%">
   <option value="00">00</option>    <option value="05">00</option>
  <option value="10">10</option>  <option value="15">15</option>
  <option value="20">20</option>  <option value="25">25</option>
  <option value="30">30</option>  <option value="35">35</option>
  <option value="40">40</option>  <option value="45">45</option>
  <option value="50">50</option>  <option value="55">55</option>
  <option value="60">60</option>
  
</select> 
					</td>
				</tr><tr>
					<th>Неделя:</th>
					<td>
						от 
						<select name="sunh"  style="width: 9%">
  <option value="00">00</option>  <option value="01">01</option>
  <option value="02">02</option>  <option value="03">03</option>
  <option value="04">04</option>  <option value="05">05</option>
  <option value="06">06</option>  <option value="07">07</option>
  <option value="08">08</option>  <option value="09">09</option>
  <option value="10">10</option>  <option value="11">11</option>
  <option value="12">12</option>  <option value="13">13</option>
  <option value="14">14</option>  <option value="15">15</option>
  <option value="16">16</option>  <option value="17">17</option>
  <option value="18">18</option>  <option value="19">19</option>
  <option value="20">20</option>  <option value="21">21</option>
  <option value="22">22</option>  <option value="23">23</option>
</select> <b> : </b><select  name="sunm"  style="width: 9%">
  <option value="00">00</option>    <option value="05">00</option>
  <option value="10">10</option>  <option value="15">15</option>
  <option value="20">20</option>  <option value="25">25</option>
  <option value="30">30</option>  <option value="35">35</option>
  <option value="40">40</option>  <option value="45">45</option>
  <option value="50">50</option>  <option value="55">55</option>
  <option value="60">60</option>
  
</select>  до  	<select  name="sunh2"  style="width: 9%">
    <option value="00">00</option>  <option value="01">01</option>
  <option value="02">02</option>  <option value="03">03</option>
  <option value="04">04</option>  <option value="05">05</option>
  <option value="06">06</option>  <option value="07">07</option>
  <option value="08">08</option>  <option value="09">09</option>
  <option value="10">10</option>  <option value="11">11</option>
  <option value="12">12</option>  <option value="13">13</option>
  <option value="14">14</option>  <option value="15">15</option>
  <option value="16">16</option>  <option value="17">17</option>
  <option value="18">18</option>  <option value="19">19</option>
  <option value="20">20</option>  <option value="21">21</option>
  <option value="22">22</option>  <option value="23">23</option>
</select> <b> : </b><select  name="sunm2"  style="width: 9%">
   <option value="00">00</option>    <option value="05">00</option>
  <option value="10">10</option>  <option value="15">15</option>
  <option value="20">20</option>  <option value="25">25</option>
  <option value="30">30</option>  <option value="35">35</option>
  <option value="40">40</option>  <option value="45">45</option>
  <option value="50">50</option>  <option value="55">55</option>
  <option value="60">60</option>
  
</select> 
					</td>
				</tr>
				
						<tr><th></th>
				<td style="padding: 0 0 0 0">
				 <input class="gray addSubAccount" type="submit" value="Добави обекта" style="float: right; margin-top: 3px;">
				  </td> </tr>
				
			</table>
		</li>
			
				<?php } ?>
				</form>
	</div>
				<?php
				include('footer.php');
				?>