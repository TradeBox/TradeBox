<? include('header.php'); ?>
		<div id="module">
<div class="container">
<div class="caption"> Потребител </div>
<a href="employees.php"><input type="button" style="margin: 10px; float: right" class="green addPaypalSubscription" value="Потребители"></a></div>
</div>
		<? $ID=$_GET['id']; 
		   $sele=mysql_query("SELECT * FROM users WHERE id = '$ID'");
		   $employe=mysql_fetch_array($sele);
		?>
		
		<div id="content">
			<div class="container">
			<?php 
			if(isset($_POST['submit'])){
				$name=$_POST['fname'];
				$obekt=$_POST['obekt'];
	
				$phone=$_POST['phone'];
				$username=$_POST['username'];
				$password=$_POST['password'];
				$email=$_POST['email'];
				
				$one=$_POST['one'];
				$two=$_POST['two'];
				$three=$_POST['three'];
				$all=$one.",".$two.",".$three;
				
				mysql_query("UPDATE users SET username='$username',password='$password',email='$email',store_id='$obekt',full_name='$name',phone='$phone' WHERE id='$ID'");
				add_to_archive('Редактиран Потребител '.$name.'');
				
				
			}
			
			?>
			<form action='' method="post">
<div id="info">
	<ul class="floatingBlocks">
		<li style="height: 346px">
			<div class="caption">
				Информация за потребителя
			</div>
			
			<table>
				<tbody><tr>
					<th>Име</th>
					<td>
						<input type="text" value="<? echo "$employe[full_name]"; ?>" name='fname'></input>
					</td>
				</tr>
				<tr>
					<th>Обект</th>
					<td>
						<select class="obekt" name="obekt" >
													
													<?php 
													$con=mysql_query("SELECT * FROM stores"); 
													while($row=mysql_fetch_array($con)){?>
													<option value="<?php echo "$row[id]"; ?>" <? 
													$ff=$row['id'];
													$ss=$employe['store_id'];
if($ff==$ss){
$adresasega=$row['address'];
?> selected <?
}

													?>>
                                <?php echo "$row[name]"; ?>                             </option>
								<? } ?>
												</select>
					</td>
				</tr>
				<tr>
					<th>Адрес на Обекта</th>
					<td>
					<div class='adres' name='adres'><?php echo "$adresasega"; ?></div>
					</td>
				</tr>
				<tr>
					<th>Телефон</th>
					<td>
						<input type="text" value="<? echo "$employe[phone]"; ?>" name='phone'></input>
					</td>
				</tr>
				
			
        
			</tbody></table>
		</li>
		<li style="height: 346px">
		<div class="caption"> Данни за Вход </div>
			<input style="float: right; margin: -45px 10px;" value="Редактирай" class="gray" name="submit"  type="submit">
			<table>
				<tbody><tr>
					<th>Потребителско име</th>
					<td><input type="text" value="<? echo "$employe[username]"; ?>" name='username'></input></td>
				</tr>
				<tr>
					<th>Парола</th>
					<td>
						<input type="password" value="<? echo "$employe[password]"; ?>" name='password'></input>
					</td>
				</tr>
				<tr>
					<th>E-mail</th>
					<td>
						<input type="text" value="<? echo "$employe[email]"; ?>" name='email'></input>
					</td>
				</tr>
				
				<tr>
					<th>Привилегии</th>
					<td>
					<script>
function myFunction() {
    var x = document.getElementById("myCheck1");
    x.checked = true;
	 var x = document.getElementById("myCheck2");
    x.checked = true;
	 var x = document.getElementById("myCheck3");
    x.checked = true;
	 var x = document.getElementById("myCheck4");
    x.checked = true;
}
</script>
					<div style="float:left;"><input name="all" type="checkbox" onclick="myFunction()" >Избери Всички</input></div>
					</td>
				</tr><tr>
						<th>
					<td>
					<input id='myCheck1'  type="checkbox" <? 
					$priv=$employe['privileges'];
					if (strpos($priv,'1') !== false){ echo "checked='checked'"; } ?> name="one" value="1">Редакция</input>
					</td>
					</th>
				</tr>
				<tr>
						<th><td>
					<input id='myCheck2' <? 
					if (strpos($priv,'2') !== false){ echo "checked='checked'"; }  ?>   type="checkbox" name="two" 
					value="2" >Изтриване</input>
					</td></th>
				</tr>
				<tr>
						<th>
					<td><input id='myCheck3' <? if (strpos($priv,'3') !== false){ echo "checked='checked'"; } ?>  type="checkbox" name="three" value="3" >Добавяне</input>
					</td></th>
				</tr>
			
		
			
			</tbody></table>
		</li>
	</ul>
	</div></div></div>
		<? include('footer.php'); ?>