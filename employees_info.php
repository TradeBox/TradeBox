<? include('header.php'); ?>
		<div id="module">
<div class="container">
<div class="caption"> Служител </div>
<input class="green" type="button" onclick="newcat.style.display='table-row'" value="Добави категория" style="float: right; margin-top: 12px;">
</div>
</div>
		<? $ID=$_GET['id']; 
		   $sele=mysql_query("SELECT * FROM employees WHERE id = '$ID'");
		   $employe=mysql_fetch_array($sele);
		?>
		
		<div id="content">
			<div class="container">
			<?php 
			if(isset($_POST['submit'])){
				$name=$_POST['name'];
				$obekt=$_POST['obekt'];
				$address=$_POST['address'];
				$work=$_POST['work'];
				$phone=$_POST['phone'];
				$username=$_POST['username'];
				$password=$_POST['password'];
				$email=$_POST['email'];
				
				$one=$_POST['one'];
				$two=$_POST['two'];
				$three=$_POST['three'];
				$four=$_POST['four'];
				$all=$one.",".$two.",".$three.",".$four;
				
				mysql_query("UPDATE employees SET username='$username',password='$password',email='$email',store_id='$obekt',ful_name='$name',address_store='$address',function='$work',phone='$phone',privileges='$all' WHERE id='$ID'");
				add_to_archive('Редактиран служител '.$name.'');
				
				
			}
			
			?>
			<form action='' method="post">
<div id="info">
	<ul class="floatingBlocks">
		<li style="height: auto;">
			<div class="caption">
				Информация за служителя
			</div>
			
			<table>
				<tbody><tr>
					<th>Име</th>
					<td>
						<input type="text" value="<? echo "$employe[ful_name]"; ?>" name='name'></input>
					</td>
				</tr>
				<tr>
					<th>Обект</th>
					<td>
						<select id="" name="obekt" >
													
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
					<td>
						<input type="text" value="<? echo "$employe[address_store]"; ?>" name='address'></input>
					</td>
				</tr>
				<tr>
					<th>Длъжност</th>
					<td>
						<input type="text" value="<? echo "$employe[function]"; ?>" name='work'></input>
					</td>
				</tr>
				<tr>
					<th>Телефон</th>
					<td>
						<input type="text" value="<? echo "$employe[phone]"; ?>" name='phone'></input>
					</td>
				</tr>
				
				<tr>
					<th>API Key</th>
					<td>
						397dcf7714124736373193de4375c0c1
					</td>
				</tr>
                <tr>
                    <th> Enable Two Factor Authentication</th>
                    <td>
              
                    </td>
                </tr>
			</tbody></table>
		</li>
		<li style="height: 235px;">
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
						<table>
						<tr>
					<td align="right" colspan="2">
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
						<tr>
					<td>
					<input id='myCheck1'  type="checkbox" name="one" value="1">1</input>
					</td>
					<td>
					<input id='myCheck2'  type="checkbox" name="two" 
					value="2" >2</input>
					</td>
				</tr>
				<tr>
					<td><input id='myCheck3'  type="checkbox" name="three" value="3" >3</input>
					</td>
					<td>
						<input id='myCheck4'  type="checkbox" name="four" value="4" >4</input>
					</td>
				</tr>
				
						</table>
					</td>
				</tr>
			</tbody></table>
		</li>
	</ul>
	</div></div></div>
		<? include('footer.php'); ?>