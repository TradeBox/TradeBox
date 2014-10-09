<? include('header.php');   $ID=$_GET['id']; ?>
		<div id="module">
<div class="container">
<div class="caption"> Потребител </div>
<a href="users.php"><input type="button" style="margin: 10px; float: right" class="green addPaypalSubscription" value="Списък потребители"></a></div>
</div>
		<? 
		   
		    if (!empty($_POST['delete_user']) AND !empty($_GET['delete'] ) AND $_POST['delete_user'] == $_GET['delete'] ) { 
  $delete = $_GET['delete']; 
  $koi=mysql_fetch_array(mysql_query("SELECT username FROM users WHERE id = '$delete'"));
  $iztritiq=$koi['username'];
   add_to_archive("Изтрит Потребител $iztritiq.");
   mysql_query("DELETE FROM users WHERE id = '$delete'") or die (mysql_error());
  }
  if (empty($delete)) {

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
				
				$email=$_POST['email'];
				$one=$_POST['one'];
				$two=$_POST['two'];
				$three=$_POST['three'];
				$all=$one.",".$two.",".$three;
				
				if(!empty($_POST['password'])){
				$password=$_POST['password'];
				$crypted_pass=md5($password);
				mysql_query("UPDATE users SET username='$username',password='$crypted_pass',email='$email',store_id='$obekt',full_name='$name',phone='$phone' WHERE id='$ID'");
				}else{
				mysql_query("UPDATE users SET username='$username',email='$email',store_id='$obekt',full_name='$name',phone='$phone' WHERE id='$ID'");
				}
				add_to_archive('Редактиран Потребител '.$name.'');
			}
			
			?>
			<form action='' method="post">
<div id="info">
	<ul class="floatingBlocks">
		<li style="height: 404px">
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
				<tr>
					<th></th>
					<td>
					</td>
				</tr><tr>
					<th></th>
					<td>
					</td>
				</tr><tr>
					<th></th>
					<td>
					</td>
				</tr>
				
			
        
			</tbody></table>
		</li>
		<li style="height: 404px">
		<div class="caption"> Данни за Вход </div>
			
			<table>
				<tbody><tr>
					<th>Потребителско име</th>
					<td><input type="text" value="<? echo "$employe[username]"; ?>" name='username'></input></td>
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
					if (strpos($priv,'2') !== false){ echo "checked='checked'"; }
					?>   type="checkbox" name="two" 
					value="2" >Изтриване</input>
					</td></th>
				</tr>
				<tr>
						<th>
					<td><input id='myCheck3' <? if (strpos($priv,'3') !== false){ echo "checked='checked'"; } ?>  type="checkbox" name="three" value="3" >Добавяне</input>
					</td></th>
				</tr>
			<tr>
						<th>
					<td><input style="float: right; margin: 0px 10px;" value="Редактирай" class="gray" name="submit"  type="submit">
			
					</td></th>
				</tr>
				</form>
				
		
			</tbody></table>
		</li>
		
	</ul>
		<form action="?delete=<?php echo $employe['id']; ?>&id=<?php echo $employe['id']; ?>" method="POST"><table >
				<tr><th></th>
				<td style="padding: 0 0 0 0" align="left"><table>
				<tr><td style="padding: 0 0">
				<input class="gray" type="submit" value="Изтрий потребителя" style="float: left; margin-top: 3px; background-color: rgb(248, 96, 89); color: white; text-shadow: none; font-family: Arial"> </td></tr>
				<tr><td style="padding: 0 0">
				 <label><input type="checkbox" name="delete_user" value="<?php echo $employe['id']; ?>"> <b>Потвърждавам,</b> че желая да премахна този потребител.</label></td></tr></table>
				  
				  </td> </tr></table></form>
		<?php } else { ?>
		<div id="content">
			<div class="container">
			<ul><li style="width: 100%; border: 1px solid rgb(218, 218, 218); padding: 25px 5px 20px;">
			  <div class="caption">
			      <img src="images_2/icon_cloud.png"> ПОТРЕБИТЕЛЯ Е ПРЕМАХНАТ УСПЕШНО!</div>
			
			<table>
				
			<tr>
					<th></th>  </tr></table >    <?php } ?>
		</li></ul>
	</div></div></div>
		<? include('footer.php'); ?>