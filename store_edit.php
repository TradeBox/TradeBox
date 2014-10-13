<?php  include("header.php");
$id = $_GET['id']; include("store_edit_complete.php"); 

?>
<div id="module">
   <div class="container">
		<div class="caption">
					Управление на обект
		</div>
		
		<a href="store_view.php"><input value="Списък обекти" style="margin: 10px; float: right"  class="green addPaypalSubscription" id="showAddPaymentMethodCC" type="button"></a>
	</div>
</div>
<div id="content">
 <div class="container">
    <script src="validate.js"></script>

       <div id="orderform">
   	     <ul class="floatingBlocks">
		   	
	<?php if (empty($delete)) { $con = mysql_query("SELECT * FROM stores WHERE id = $id"); 
$row = mysql_fetch_array($con);  ?>
	        <li style="width: 100%; border: 1px solid rgb(218, 218, 218); padding: 25px 5px 20px;">
			  <div class="caption">
			      <img src="images_2/icon_cloud.png">
				<?php echo $row['name']; ?>
			</div>
			
			<table>
				<form method="POST" action=""  enctype="multipart/form-data">
			<tr>
					<th></th>
					<td align="right" style="text-align: right; padding-right: 15px; font-size: 16px">
						<label><input style="transform: scale(1.2, 1.2); -moz-transform: scale(1.2, 1.2); -ms-transform: scale(1.2, 1.2);
-webkit-transform: scale(1.2, 1.2); -o-transform: scale(1.2, 1.2); " id="warehouse" name="warehouse"  type="radio" <?php if($row['warehouse'] == 'Търговски обект') echo "checked='checked'"; ?>  value="Търговски обект"> 

Търговски обект</label>&nbsp;&nbsp;&nbsp; 
<label>
  <input id="warehouse" style="transform: scale(1.2, 1.2); -moz-transform: scale(1.2, 1.2); -ms-transform: scale(1.2, 1.2); -webkit-transform: scale(1.2, 1.2); -o-transform: scale(1.2, 1.2); " name="warehouse" type="radio" <?php if($row['warehouse'] == 'Склад') echo "checked='checked'"; ?>   value="Склад"> Склад</label>&nbsp;&nbsp;&nbsp;
<label>
 <input id="warehouse" style="transform: scale(1.2, 1.2); -moz-transform: scale(1.2, 1.2); -ms-transform: scale(1.2, 1.2); -webkit-transform: scale(1.2, 1.2); -o-transform: scale(1.2, 1.2); " name="warehouse" type="radio"  <?php if($row['warehouse'] == 'Офис') echo "checked='checked'"; ?>  value="Офис"> Офис</label>

					</td>
				</tr>
				<tr>
					<th>Име на обекта*:</th>
					<td>
						<input id="name" name="name"  value="<?php echo $row['name']; ?>" type="text">
					</td>
				</tr>
				<tr>
					<th>Град:</th>
					<td>
						<input id="city" name="city"  value="<?php echo $row['city']; ?>"   type="text" >
					</td>
				</tr>
				<tr>
					<th>Адрес:</th>
					<td>
						<input id="address" name="address"  value="<?php echo $row['address']; ?>"   type="text" >
					</td>
				</tr>
					<tr>
					<th>Телефон:</th>
					<td>
						<input id="phone" name="phone"  value="<?php echo $row['phone']; ?>"  style="width: 50%" type="text" >
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
					<?php    $fromH = mb_substr($row['open_time_week'], 3, 2, 'UTF-8');
						     $fromM = mb_substr($row['open_time_week'], 6, 2, 'UTF-8');
							 $toH = mb_substr($row['open_time_week'], 12, 2, 'UTF-8'); 
                             $toM = mb_substr($row['open_time_week'], 15, 2, 'UTF-8'); 							 ?>
						<select name="weekh" style="width: 9%">
  <option value="00" <?php if ($fromH == "00") echo "selected='selected'"; ?> >00</option>  
  <option value="01"  <?php if ($fromH == "01") echo "selected='selected'"; ?>>01</option>
  <option value="02"  <?php if ($fromH == "02") echo "selected='selected'"; ?>>02</option>  
  <option value="03" <?php if ($fromH == "03") echo "selected='selected'"; ?>>03</option>
  <option value="04"  <?php if ($fromH == "04") echo "selected='selected'"; ?>>04</option>  
  <option value="05" <?php if ($fromH == "05") echo "selected='selected'"; ?>>05</option>
  <option value="06"  <?php if ($fromH == "06") echo "selected='selected'"; ?>>06</option>  
  <option value="07" <?php if ($fromH == "07") echo "selected='selected'"; ?>>07</option>
  <option value="08" <?php if ($fromH == "08") echo "selected='selected'"; ?>>08</option>  
  <option value="09" <?php if ($fromH == "09") echo "selected='selected'"; ?>>09</option>
  <option value="10" <?php if ($fromH == "10") echo "selected='selected'"; ?>>10</option>  
  <option value="11" <?php if ($fromH == "11") echo "selected='selected'"; ?>>11</option>
  <option value="12" <?php if ($fromH == "12") echo "selected='selected'"; ?>>12</option> 
  <option value="13" <?php if ($fromH == "13") echo "selected='selected'"; ?>>13</option>
  <option value="14" <?php if ($fromH == "14") echo "selected='selected'"; ?>>14</option> 
  <option value="15" <?php if ($fromH == "15") echo "selected='selected'"; ?>>15</option>
  <option value="16" <?php if ($fromH == "16") echo "selected='selected'"; ?>>16</option>
  <option value="17" <?php if ($fromH == "17") echo "selected='selected'"; ?>>17</option>
  <option value="18" <?php if ($fromH == "18") echo "selected='selected'"; ?>>18</option> 
  <option value="19" <?php if ($fromH == "19") echo "selected='selected'"; ?>>19</option>
  <option value="20" <?php if ($fromH == "20") echo "selected='selected'"; ?>>20</option> 
  <option value="21" <?php if ($fromH == "21") echo "selected='selected'"; ?>>21</option>
  <option value="22" <?php if ($fromH == "22") echo "selected='selected'"; ?>>22</option> 
  <option value="23" <?php if ($fromH == "23") echo "selected='selected'"; ?>>23</option>
</select> <b> : </b>  <select name="weekm" style="width: 9%">
  <option value="00" <?php if ($fromM == "00") echo "selected='selected'"; ?> >00</option>   
  <option value="05" <?php if ($fromM == "05") echo "selected='selected'"; ?> >05</option>
  <option value="10" <?php if ($fromM == "10") echo "selected='selected'"; ?> >10</option>  
  <option value="15" <?php if ($fromM == "15") echo "selected='selected'"; ?> >15</option>
  <option value="20" <?php if ($fromM == "20") echo "selected='selected'"; ?> >20</option> 
  <option value="25" <?php if ($fromM == "25") echo "selected='selected'"; ?> >25</option>
  <option value="30" <?php if ($fromM == "30") echo "selected='selected'"; ?> >30</option>  
  <option value="35" <?php if ($fromM == "35") echo "selected='selected'"; ?> >35</option>
  <option value="40" <?php if ($fromM == "40") echo "selected='selected'"; ?> >40</option>  
  <option value="45" <?php if ($fromM == "45") echo "selected='selected'"; ?> >45</option>
  <option value="50" <?php if ($fromM == "50") echo "selected='selected'"; ?> >50</option>  
  <option value="55" <?php if ($fromM == "55") echo "selected='selected'"; ?> >55</option>
  <option value="60" <?php if ($fromM == "60") echo "selected='selected'"; ?> >60</option>
  
</select>  до  	<select name="weekh2"  style="width: 9%">
  <option value="00" <?php if ($toH == "00") echo "selected='selected'"; ?> >00</option>  
  <option value="01"  <?php if ($toH == "01") echo "selected='selected'"; ?>>01</option>
  <option value="02"  <?php if ($toH == "02") echo "selected='selected'"; ?>>02</option>  
  <option value="03" <?php if ($toH == "03") echo "selected='selected'"; ?>>03</option>
  <option value="04"  <?php if ($toH == "04") echo "selected='selected'"; ?>>04</option>  
  <option value="05" <?php if ($toH == "05") echo "selected='selected'"; ?>>05</option>
  <option value="06"  <?php if ($toH == "06") echo "selected='selected'"; ?>>06</option>  
  <option value="07" <?php if ($toH == "07") echo "selected='selected'"; ?>>07</option>
  <option value="08" <?php if ($toH == "08") echo "selected='selected'"; ?>>08</option>  
  <option value="09" <?php if ($toH == "09") echo "selected='selected'"; ?>>09</option>
  <option value="10" <?php if ($toH == "10") echo "selected='selected'"; ?>>10</option>  
  <option value="11" <?php if ($toH == "11") echo "selected='selected'"; ?>>11</option>
  <option value="12" <?php if ($toH == "12") echo "selected='selected'"; ?>>12</option> 
  <option value="13" <?php if ($toH == "13") echo "selected='selected'"; ?>>13</option>
  <option value="14" <?php if ($toH == "14") echo "selected='selected'"; ?>>14</option> 
  <option value="15" <?php if ($toH == "15") echo "selected='selected'"; ?>>15</option>
  <option value="16" <?php if ($toH == "16") echo "selected='selected'"; ?>>16</option>
  <option value="17" <?php if ($toH == "17") echo "selected='selected'"; ?>>17</option>
  <option value="18" <?php if ($toH == "18") echo "selected='selected'"; ?>>18</option> 
  <option value="19" <?php if ($toH == "19") echo "selected='selected'"; ?>>19</option>
  <option value="20" <?php if ($toH == "20") echo "selected='selected'"; ?>>20</option> 
  <option value="21" <?php if ($toH == "21") echo "selected='selected'"; ?>>21</option>
  <option value="22" <?php if ($toH == "22") echo "selected='selected'"; ?>>22</option> 
  <option value="23" <?php if ($toH == "23") echo "selected='selected'"; ?>>23</option>
</select> <b> : </b>
<select name="weekm2" style="width: 9%">
  <option value="00" <?php if ($toM == "00") echo "selected='selected'"; ?> >00</option>   
  <option value="05" <?php if ($toM == "05") echo "selected='selected'"; ?> >05</option>
  <option value="10" <?php if ($toM == "10") echo "selected='selected'"; ?> >10</option>  
  <option value="15" <?php if ($toM == "15") echo "selected='selected'"; ?> >15</option>
  <option value="20" <?php if ($toM == "20") echo "selected='selected'"; ?> >20</option> 
  <option value="25" <?php if ($toM == "25") echo "selected='selected'"; ?> >25</option>
  <option value="30" <?php if ($toM == "30") echo "selected='selected'"; ?> >30</option>  
  <option value="35" <?php if ($toM == "35") echo "selected='selected'"; ?> >35</option>
  <option value="40" <?php if ($toM == "40") echo "selected='selected'"; ?> >40</option>  
  <option value="45" <?php if ($toM == "45") echo "selected='selected'"; ?> >45</option>
  <option value="50" <?php if ($toM == "50") echo "selected='selected'"; ?> >50</option>  
  <option value="55" <?php if ($toM == "55") echo "selected='selected'"; ?> >55</option>
  <option value="60" <?php if ($toM == "60") echo "selected='selected'"; ?> >60</option>
  
</select> 
					</td>
				</tr>
				
				<tr>
				<?php    $fromH = mb_substr($row['open_time_sat'], 3, 2, 'UTF-8');
						     $fromM = mb_substr($row['open_time_sat'], 6, 2, 'UTF-8');
							 $toH = mb_substr($row['open_time_sat'], 12, 2, 'UTF-8'); 
                             $toM = mb_substr($row['open_time_sat'], 15, 2, 'UTF-8'); 							 ?>
					<th>Събота:</th>
					<td>
						от 
						<select name="sath" style="width: 9%">
<option value="00" <?php if ($fromH == "00") echo "selected='selected'"; ?> >00</option>  
  <option value="01"  <?php if ($fromH == "01") echo "selected='selected'"; ?>>01</option>
  <option value="02"  <?php if ($fromH == "02") echo "selected='selected'"; ?>>02</option>  
  <option value="03" <?php if ($fromH == "03") echo "selected='selected'"; ?>>03</option>
  <option value="04"  <?php if ($fromH == "04") echo "selected='selected'"; ?>>04</option>  
  <option value="05" <?php if ($fromH == "05") echo "selected='selected'"; ?>>05</option>
  <option value="06"  <?php if ($fromH == "06") echo "selected='selected'"; ?>>06</option>  
  <option value="07" <?php if ($fromH == "07") echo "selected='selected'"; ?>>07</option>
  <option value="08" <?php if ($fromH == "08") echo "selected='selected'"; ?>>08</option>  
  <option value="09" <?php if ($fromH == "09") echo "selected='selected'"; ?>>09</option>
  <option value="10" <?php if ($fromH == "10") echo "selected='selected'"; ?>>10</option>  
  <option value="11" <?php if ($fromH == "11") echo "selected='selected'"; ?>>11</option>
  <option value="12" <?php if ($fromH == "12") echo "selected='selected'"; ?>>12</option> 
  <option value="13" <?php if ($fromH == "13") echo "selected='selected'"; ?>>13</option>
  <option value="14" <?php if ($fromH == "14") echo "selected='selected'"; ?>>14</option> 
  <option value="15" <?php if ($fromH == "15") echo "selected='selected'"; ?>>15</option>
  <option value="16" <?php if ($fromH == "16") echo "selected='selected'"; ?>>16</option>
  <option value="17" <?php if ($fromH == "17") echo "selected='selected'"; ?>>17</option>
  <option value="18" <?php if ($fromH == "18") echo "selected='selected'"; ?>>18</option> 
  <option value="19" <?php if ($fromH == "19") echo "selected='selected'"; ?>>19</option>
  <option value="20" <?php if ($fromH == "20") echo "selected='selected'"; ?>>20</option> 
  <option value="21" <?php if ($fromH == "21") echo "selected='selected'"; ?>>21</option>
  <option value="22" <?php if ($fromH == "22") echo "selected='selected'"; ?>>22</option> 
  <option value="23" <?php if ($fromH == "23") echo "selected='selected'"; ?>>23</option>
</select> <b> : </b>
<select  name="satm"  style="width: 9%">
<option value="00" <?php if ($fromM == "00") echo "selected='selected'"; ?> >00</option>   
  <option value="05" <?php if ($fromM == "05") echo "selected='selected'"; ?> >05</option>
  <option value="10" <?php if ($fromM == "10") echo "selected='selected'"; ?> >10</option>  
  <option value="15" <?php if ($fromM == "15") echo "selected='selected'"; ?> >15</option>
  <option value="20" <?php if ($fromM == "20") echo "selected='selected'"; ?> >20</option> 
  <option value="25" <?php if ($fromM == "25") echo "selected='selected'"; ?> >25</option>
  <option value="30" <?php if ($fromM == "30") echo "selected='selected'"; ?> >30</option>  
  <option value="35" <?php if ($fromM == "35") echo "selected='selected'"; ?> >35</option>
  <option value="40" <?php if ($fromM == "40") echo "selected='selected'"; ?> >40</option>  
  <option value="45" <?php if ($fromM == "45") echo "selected='selected'"; ?> >45</option>
  <option value="50" <?php if ($fromM == "50") echo "selected='selected'"; ?> >50</option>  
  <option value="55" <?php if ($fromM == "55") echo "selected='selected'"; ?> >55</option>
  <option value="59" <?php if ($fromM == "59") echo "selected='selected'"; ?> >59</option>
  
</select>  до  	
<select  name="sath2"  style="width: 9%">
     <option value="00" <?php if ($toH == "00") echo "selected='selected'"; ?> >00</option>  
  <option value="01"  <?php if ($toH == "01") echo "selected='selected'"; ?>>01</option>
  <option value="02"  <?php if ($toH == "02") echo "selected='selected'"; ?>>02</option>  
  <option value="03" <?php if ($toH == "03") echo "selected='selected'"; ?>>03</option>
  <option value="04"  <?php if ($toH == "04") echo "selected='selected'"; ?>>04</option>  
  <option value="05" <?php if ($toH == "05") echo "selected='selected'"; ?>>05</option>
  <option value="06"  <?php if ($toH == "06") echo "selected='selected'"; ?>>06</option>  
  <option value="07" <?php if ($toH == "07") echo "selected='selected'"; ?>>07</option>
  <option value="08" <?php if ($toH == "08") echo "selected='selected'"; ?>>08</option>  
  <option value="09" <?php if ($toH == "09") echo "selected='selected'"; ?>>09</option>
  <option value="10" <?php if ($toH == "10") echo "selected='selected'"; ?>>10</option>  
  <option value="11" <?php if ($toH == "11") echo "selected='selected'"; ?>>11</option>
  <option value="12" <?php if ($toH == "12") echo "selected='selected'"; ?>>12</option> 
  <option value="13" <?php if ($toH == "13") echo "selected='selected'"; ?>>13</option>
  <option value="14" <?php if ($toH == "14") echo "selected='selected'"; ?>>14</option> 
  <option value="15" <?php if ($toH == "15") echo "selected='selected'"; ?>>15</option>
  <option value="16" <?php if ($toH == "16") echo "selected='selected'"; ?>>16</option>
  <option value="17" <?php if ($toH == "17") echo "selected='selected'"; ?>>17</option>
  <option value="18" <?php if ($toH == "18") echo "selected='selected'"; ?>>18</option> 
  <option value="19" <?php if ($toH == "19") echo "selected='selected'"; ?>>19</option>
  <option value="20" <?php if ($toH == "20") echo "selected='selected'"; ?>>20</option> 
  <option value="21" <?php if ($toH == "21") echo "selected='selected'"; ?>>21</option>
  <option value="22" <?php if ($toH == "22") echo "selected='selected'"; ?>>22</option> 
  <option value="23" <?php if ($toH == "23") echo "selected='selected'"; ?>>23</option>
</select> <b> : </b>
<select  name="satm2"  style="width: 9%">
    <option value="00" <?php if ($toM == "00") echo "selected='selected'"; ?> >00</option>   
  <option value="05" <?php if ($toM == "05") echo "selected='selected'"; ?> >05</option>
  <option value="10" <?php if ($toM == "10") echo "selected='selected'"; ?> >10</option>  
  <option value="15" <?php if ($toM == "15") echo "selected='selected'"; ?> >15</option>
  <option value="20" <?php if ($toM == "20") echo "selected='selected'"; ?> >20</option> 
  <option value="25" <?php if ($toM == "25") echo "selected='selected'"; ?> >25</option>
  <option value="30" <?php if ($toM == "30") echo "selected='selected'"; ?> >30</option>  
  <option value="35" <?php if ($toM == "35") echo "selected='selected'"; ?> >35</option>
  <option value="40" <?php if ($toM == "40") echo "selected='selected'"; ?> >40</option>  
  <option value="45" <?php if ($toM == "45") echo "selected='selected'"; ?> >45</option>
  <option value="50" <?php if ($toM == "50") echo "selected='selected'"; ?> >50</option>  
  <option value="55" <?php if ($toM == "55") echo "selected='selected'"; ?> >55</option>
  <option value="59" <?php if ($toM == "59") echo "selected='selected'"; ?> >59</option>
  
</select> 
					</td>
				</tr><tr>	<?php    $fromH = mb_substr($row['open_time_sun'], 3, 2, 'UTF-8');
						     $fromM = mb_substr($row['open_time_sun'], 6, 2, 'UTF-8');
							 $toH = mb_substr($row['open_time_sun'], 12, 2, 'UTF-8'); 
                             $toM = mb_substr($row['open_time_sun'], 15, 2, 'UTF-8'); 							 ?>
					<th>Неделя:</th>
					<td>
						от 
						<select name="sunh"  style="width: 9%">
  <option value="00" <?php if ($fromH == "00") echo "selected='selected'"; ?> >00</option>  
  <option value="01"  <?php if ($fromH == "01") echo "selected='selected'"; ?>>01</option>
  <option value="02"  <?php if ($fromH == "02") echo "selected='selected'"; ?>>02</option>  
  <option value="03" <?php if ($fromH == "03") echo "selected='selected'"; ?>>03</option>
  <option value="04"  <?php if ($fromH == "04") echo "selected='selected'"; ?>>04</option>  
  <option value="05" <?php if ($fromH == "05") echo "selected='selected'"; ?>>05</option>
  <option value="06"  <?php if ($fromH == "06") echo "selected='selected'"; ?>>06</option>  
  <option value="07" <?php if ($fromH == "07") echo "selected='selected'"; ?>>07</option>
  <option value="08" <?php if ($fromH == "08") echo "selected='selected'"; ?>>08</option>  
  <option value="09" <?php if ($fromH == "09") echo "selected='selected'"; ?>>09</option>
  <option value="10" <?php if ($fromH == "10") echo "selected='selected'"; ?>>10</option>  
  <option value="11" <?php if ($fromH == "11") echo "selected='selected'"; ?>>11</option>
  <option value="12" <?php if ($fromH == "12") echo "selected='selected'"; ?>>12</option> 
  <option value="13" <?php if ($fromH == "13") echo "selected='selected'"; ?>>13</option>
  <option value="14" <?php if ($fromH == "14") echo "selected='selected'"; ?>>14</option> 
  <option value="15" <?php if ($fromH == "15") echo "selected='selected'"; ?>>15</option>
  <option value="16" <?php if ($fromH == "16") echo "selected='selected'"; ?>>16</option>
  <option value="17" <?php if ($fromH == "17") echo "selected='selected'"; ?>>17</option>
  <option value="18" <?php if ($fromH == "18") echo "selected='selected'"; ?>>18</option> 
  <option value="19" <?php if ($fromH == "19") echo "selected='selected'"; ?>>19</option>
  <option value="20" <?php if ($fromH == "20") echo "selected='selected'"; ?>>20</option> 
  <option value="21" <?php if ($fromH == "21") echo "selected='selected'"; ?>>21</option>
  <option value="22" <?php if ($fromH == "22") echo "selected='selected'"; ?>>22</option> 
  <option value="23" <?php if ($fromH == "23") echo "selected='selected'"; ?>>23</option>
</select> <b> : </b><select  name="sunm"  style="width: 9%">
  <option value="00" <?php if ($fromM == "00") echo "selected='selected'"; ?> >00</option>   
  <option value="05" <?php if ($fromM == "05") echo "selected='selected'"; ?> >05</option>
  <option value="10" <?php if ($fromM == "10") echo "selected='selected'"; ?> >10</option>  
  <option value="15" <?php if ($fromM == "15") echo "selected='selected'"; ?> >15</option>
  <option value="20" <?php if ($fromM == "20") echo "selected='selected'"; ?> >20</option> 
  <option value="25" <?php if ($fromM == "25") echo "selected='selected'"; ?> >25</option>
  <option value="30" <?php if ($fromM == "30") echo "selected='selected'"; ?> >30</option>  
  <option value="35" <?php if ($fromM == "35") echo "selected='selected'"; ?> >35</option>
  <option value="40" <?php if ($fromM == "40") echo "selected='selected'"; ?> >40</option>  
  <option value="45" <?php if ($fromM == "45") echo "selected='selected'"; ?> >45</option>
  <option value="50" <?php if ($fromM == "50") echo "selected='selected'"; ?> >50</option>  
  <option value="55" <?php if ($fromM == "55") echo "selected='selected'"; ?> >55</option>
  <option value="59" <?php if ($fromM == "59") echo "selected='selected'"; ?> >59</option>
  
</select>  до  	<select  name="sunh2"  style="width: 9%">
      <option value="00" <?php if ($toH == "00") echo "selected='selected'"; ?> >00</option>  
  <option value="01"  <?php if ($toH == "01") echo "selected='selected'"; ?>>01</option>
  <option value="02"  <?php if ($toH == "02") echo "selected='selected'"; ?>>02</option>  
  <option value="03" <?php if ($toH == "03") echo "selected='selected'"; ?>>03</option>
  <option value="04"  <?php if ($toH == "04") echo "selected='selected'"; ?>>04</option>  
  <option value="05" <?php if ($toH == "05") echo "selected='selected'"; ?>>05</option>
  <option value="06"  <?php if ($toH == "06") echo "selected='selected'"; ?>>06</option>  
  <option value="07" <?php if ($toH == "07") echo "selected='selected'"; ?>>07</option>
  <option value="08" <?php if ($toH == "08") echo "selected='selected'"; ?>>08</option>  
  <option value="09" <?php if ($toH == "09") echo "selected='selected'"; ?>>09</option>
  <option value="10" <?php if ($toH == "10") echo "selected='selected'"; ?>>10</option>  
  <option value="11" <?php if ($toH == "11") echo "selected='selected'"; ?>>11</option>
  <option value="12" <?php if ($toH == "12") echo "selected='selected'"; ?>>12</option> 
  <option value="13" <?php if ($toH == "13") echo "selected='selected'"; ?>>13</option>
  <option value="14" <?php if ($toH == "14") echo "selected='selected'"; ?>>14</option> 
  <option value="15" <?php if ($toH == "15") echo "selected='selected'"; ?>>15</option>
  <option value="16" <?php if ($toH == "16") echo "selected='selected'"; ?>>16</option>
  <option value="17" <?php if ($toH == "17") echo "selected='selected'"; ?>>17</option>
  <option value="18" <?php if ($toH == "18") echo "selected='selected'"; ?>>18</option> 
  <option value="19" <?php if ($toH == "19") echo "selected='selected'"; ?>>19</option>
  <option value="20" <?php if ($toH == "20") echo "selected='selected'"; ?>>20</option> 
  <option value="21" <?php if ($toH == "21") echo "selected='selected'"; ?>>21</option>
  <option value="22" <?php if ($toH == "22") echo "selected='selected'"; ?>>22</option> 
  <option value="23" <?php if ($toH == "23") echo "selected='selected'"; ?>>23</option>
</select> <b> : </b><select  name="sunm2"  style="width: 9%">
   <option value="00" <?php if ($toM == "00") echo "selected='selected'"; ?> >00</option>   
  <option value="05" <?php if ($toM == "05") echo "selected='selected'"; ?> >05</option>
  <option value="10" <?php if ($toM == "10") echo "selected='selected'"; ?> >10</option>  
  <option value="15" <?php if ($toM == "15") echo "selected='selected'"; ?> >15</option>
  <option value="20" <?php if ($toM == "20") echo "selected='selected'"; ?> >20</option> 
  <option value="25" <?php if ($toM == "25") echo "selected='selected'"; ?> >25</option>
  <option value="30" <?php if ($toM == "30") echo "selected='selected'"; ?> >30</option>  
  <option value="35" <?php if ($toM == "35") echo "selected='selected'"; ?> >35</option>
  <option value="40" <?php if ($toM == "40") echo "selected='selected'"; ?> >40</option>  
  <option value="45" <?php if ($toM == "45") echo "selected='selected'"; ?> >45</option>
  <option value="50" <?php if ($toM == "50") echo "selected='selected'"; ?> >50</option>  
  <option value="55" <?php if ($toM == "55") echo "selected='selected'"; ?> >55</option>
  <option value="59" <?php if ($toM == "59") echo "selected='selected'"; ?> >59</option>
  
</select> 
					</td>
				</tr>
				
						<tr><th></th>
				<td style="padding: 0 0 0 0">
				
				 <input class="gray addSubAccount" type="submit" value="Запази промените" style="float: right; margin-top: 3px;">
				  
				  </td> </tr>
				  </form>
				  <form action="?delete=<?php echo $row['id']; ?>&id=<?php echo $row['id']; ?>" method="POST">
				<tr><th></th>
				<td style="padding: 0 0 0 0" align="left"><table>
				<tr><td style="padding: 0 0">
				<input class="gray addSubAccount" type="submit" value="Изтрий обекта" style="float: left; margin-top: 3px; background-color: rgb(248, 96, 89); color: white; text-shadow: none; font-family: Arial"> </td></tr>
				<tr><td style="padding: 0 0">
				 <label><input type="checkbox" name="delete_store" value="<?php echo $row['id']; ?>"> <b>Потвърждавам,</b> че желая да премахна този обект.</label></td></tr></table>
				  
				  </td> </tr></form>
			</table> 
			
			</li>
			<?php } else { ?>
			<li style="width: 100%; border: 1px solid rgb(218, 218, 218); padding: 25px 5px 20px;">
			  <div class="caption">
			      <img src="images_2/icon_cloud.png"> ОБЕКТЪТ Е ПРЕМАХНАТ УСПЕШНО!</div>
			
			<table>
				
			<tr>
					<th></th>  </tr></table >    		</li><?php } ?>

			
				
				
	</div>
				<?php
				include('footer.php');
				?>