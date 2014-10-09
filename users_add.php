<? include('header.php'); ?>
	
	<div id="module">
<div class="container">
<div class="caption"> Добавяне на потребител </div><a href="users.php"><input type="button" style="margin: 10px; float: right" class="green addPaypalSubscription" value="Списък потребители"></a>
</div>
</div>
		
		<div id="content">
			<div class="container">
			<?php 
			if(isset($_POST['submit'])){
				$name=$_POST['fname'];
				$obekt=$_POST['obekt'];
				$phone=$_POST['phone'];
				$date=date(Ymd);
				$username=$_POST['username'];
				$password=$_POST['password'];
				$crypted_pass=md5($password);
				$email=$_POST['email'];
				
				$one=$_POST['one'];
				$two=$_POST['two'];
				$three=$_POST['three'];
				$all=$one.",".$two.",".$three;
				
				mysql_query("INSERT INTO users (username,password,email,date_reg,status_admin,store_id,full_name,phone) VALUES ('$username','$crypted_pass','$email','$date','0','$obekt','$name','$phone')")or die();
				add_to_archive('Добавен нов потребител '.$name.'');
				
				
			}
			
			?>
			<form action='' method="post">
<div id="info">
	<ul class="floatingBlocks">
		<li style="height: 404px">
			<div class="caption">
				Информация за потребител
			</div>
			
			<table>
				<tbody><tr>
					<th>Име</th>
					<td>
						<input type="text" value="" name='fname'></input>
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
					<th>Телефон</th>
					<td>
						<input type="text" value="" name='phone'></input>
					</td>
				</tr>
				
			
			</tbody></table>
		</li>
		<li style="height: 404px">
		<div class="caption"> Данни за Вход </div>
			<table>
				<tbody><tr>
					<th>Потребителско име</th>
					<td><input type="text" value="" name='username'></input></td>
				</tr>
				<tr>
					<th>Парола</th>
					<td>
						<input type="password" value="" name='password'></input>
					</td>
				</tr>
				<tr>
					<th>E-mail</th>
					<td>
						<input type="text" value="" name='email'></input>
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
				</tr>
				</tr>
						<tr><th>
					<td>
					<input id='myCheck1'  type="checkbox" name="one" value="1">Редакция</input>
					</td>
				</th>
				</tr>
				<tr>
						<th><td>
					<input id='myCheck2'  type="checkbox" name="two" 
					value="2" >Изтриване</input>
					</td></th>
				</tr>
				<tr>
						<th>
					<td><input id='myCheck3'  type="checkbox" name="three" value="3" >Добавяне</input>
					</td></th>
				</tr>
			<tr>
						<th>
					<td><input style="float: right; margin: 0px 10px;" value="Добавяне" class="gray" name="submit"  type="submit">
			
					</td></th>
				</tr>
						
	
			</tbody></table>
		</li>
	</ul>
	</div></div></div></form>
		<? include('footer.php'); ?>