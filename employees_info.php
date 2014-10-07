<? include('header.php'); ?>
		<div id="module">
<div class="container">
<div class="caption"> Служители </div>
<input class="green" type="button" onclick="newcat.style.display='table-row'" value="Добави категория" style="float: right; margin-top: 12px;">
</div>
</div>
		
		<div id="content">
			<div class="container">
<div id="info">
	<ul class="floatingBlocks">
		<li style="height: auto;">
							<input style="float: right; margin: -45px 10px;" value="Edit Details" class="gray" id="showEditAccount" type="button">
						<input style="float: right; margin: -45px 10px; margin-right: 123px;" value="Change Password" class="gray" id="showEditAccountPwd" type="button">
			<div class="caption">
				Personal Information
			</div>
			<table>
				<tbody><tr>
					<th>Name</th>
					<td>
						Pavel Peev
					</td>
				</tr>
				<tr>
					<th>Company</th>
					<td>
						ProHost LTD
					</td>
				</tr>
				<tr>
					<th>Email</th>
					<td>
						prohost.us@gmail.com
					</td>
				</tr>
				<tr>
					<th>Phone</th>
					<td>
						00359877711139
					</td>
				</tr>
				<tr>
					<th>Client ID</th>
					<td>
						186616
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
                        <form id="two_factor_activate">
                                                            <input id="enable_two_factor" name="enable_two_factor" value="enabled" type="checkbox">
                                                    </form>
                    </td>
                </tr>
			</tbody></table>
		</li>
		<li style="height: 235px;">
			<input style="float: right; margin: -45px 10px;" value="Edit Address" class="gray" id="showEditAccountAddr" type="button">
			<table>
				<tbody><tr>
					<th>Address</th>
					<td>Aleko Konstantinov 65A</td>
				</tr>
				<tr>
					<th>City</th>
					<td>
						Gabrovo
					</td>
				</tr>
				<tr>
					<th>State</th>
					<td>
						
					</td>
				</tr>
				<tr>
					<th>Zip</th>
					<td>
						5300
					</td>
				</tr>
				<tr>
					<th>Country</th>
					<td>
						BG
					</td>
				</tr>
			</tbody></table>
		</li>
	</ul>
	</div></div></div>
		<? include('footer.php'); ?>