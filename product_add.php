<? 
include('header.php');
?>
	
		<div id="content">
			<div class="container">
<form method="post" action="/solutions/actn/add//6/publicvm">

<div id="orderform">
	<div id="server">
		Добавяне на Нов Продукт
		<span id="type"></span>
	</div>
	<ul class="floatingBlocks" style="width:75.6%">
		<li style="width: 100%;">
			<div class="caption">
				<img src="other/icon_cloud.png" alt="Server Configuration">
				Данни за продукт
			</div>
			<div class="description">
				Попълнете данните за вашия продукт
			</div>
			<table>
				<tbody><tr>
					<th>Име</th>
					<td>
						<input style="" id="name" name="name" value="" type="text">
					</td>
				</tr>
				<tr>
					<th>Към категория</th>
					<td>
						<select id="datacenter_select" name="choices[datacenter]">
													<option value="dupont" data-cloud-id="218940" selected="selected">
                                Chicago 2 (Recommended)                            </option>
													<option value="ams-1" data-cloud-id="223688">
                                Amsterdam 1                             </option>
													<option value="phoenix" data-cloud-id="239333">
                                Phoenix 1                             </option>
												</select>
						<input id="hidden_cloud_input" name="choices[cloud_id]" value="218940" type="hidden">
					</td>
				</tr>
				<tr>
					<th>Към под-категория</th>
					<td>
						<select id="billingtype" name="choices[billing]">
							<option value="monthly">Monthly (Flat Rate)</option>
							<option value="hourly" selected="selected">Hourly (Usage Based)</option>
						</select>
					</td>
				</tr>
				<tr>
					<th>Към под-под-категория</th>
					<td>
						<select id="billingtype" name="choices[billing]">
							<option value="monthly">Monthly (Flat Rate)</option>
							<option value="hourly" selected="selected">Hourly (Usage Based)</option>
						</select>
					</td>
				</tr>
				<tr>
					<th>Информация</th>
					<td>
						<input style="" id="info" name="info" value="" type="text">
					</td>
				</tr>
				<tr>
					<th>Цена</th>
					<td>
						<input style="" id="price" name="price" value="" type="text">
					</td>
				</tr>
				<tr>
					<th>Storage</th>
					<td id="storage_sliders">
						<div class="slider_container" data-type="san" data-default="25" data-unit="GBs" data-steps="25" data-hourly-online="0.00022" data-hourly-offline="0.00022" data-monthly-default="3.75" data-monthly-upgrade="0.15" data-min="25" data-max="150">
						    <div class="slider ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all"><div style="width: 0%;" class="ui-slider-range ui-slider-range-min ui-widget-header"></div><a style="left: 0%;" class="ui-slider-handle ui-state-default ui-corner-all" href="#"></a></div>
						    <input class="choice" name="choices[storage][san]" value="25" type="hidden">
							<input class="price" value="0.0055000000000000005" type="hidden">
							<span>25 GBs @ $0.0055 / hour online, $0.0055 offline</span>
						</div>
					</td>
				</tr>
				<tr>
					<th>Bandwidth</th>
					<td>
						<select name="choices[]">
																							<option selected="selected" value="21">
									1,000GB Bandwidth
																	</option>
																							<option value="22">
									2,000GB Bandwidth
																			(+$10.00)
																	</option>
																							<option value="6">
									3,000GB Bandwidth
																			(+$20.00)
																	</option>
																							<option value="7">
									4,000GB Bandwidth
																			(+$30.00)
																	</option>
																							<option value="8">
									5,000GB Bandwidth
																			(+$40.00)
																	</option>
																							<option value="11">
									6,000GB Bandwidth
																			(+$50.00)
																	</option>
																							<option value="12">
									7,000GB Bandwidth
																			(+$60.00)
																	</option>
																							<option value="13">
									8,000GB Bandwidth
																			(+$70.00)
																	</option>
																							<option value="14">
									9,000GB Bandwidth
																			(+$80.00)
																	</option>
																							<option value="15">
									10,000GB Bandwidth
																			(+$90.00)
																	</option>
																							<option value="16">
									11,000GB Bandwidth
																			(+$100.00)
																	</option>
																							<option value="17">
									12,000GB Bandwidth
																			(+$110.00)
																	</option>
																							<option value="18">
									13,000GB Bandwidth
																			(+$120.00)
																	</option>
													</select>
					</td>
				</tr>
			</tbody></table>
		</li>
				<li style="width: 100%;">
			<div class="caption">
				<img src="other/globe.png" alt="">
				Additional Services
			</div>
			<div class="description">
				Select and configure OS, control panel and extra software.
			</div>
			<table>
				<tbody><tr>
					<th>Operating System</th>
					<td>
												<select style="display: none;" id="os_select_223688" class="os_select" name="cloud_oses_223688">
																																								<option value="null" disabled="disabled">----------- CENTOS -----------</option>
																<option selected="selected" value="65">
									(AMS) Centos 5 BASE
																	</option>
																							<option value="59">
									(AMS) Centos 6 BASE
																	</option>
																							<option value="66">
									(AMS) Centos 6 Cpanel
																			(+$7.50)
																	</option>
																																	<option value="null" disabled="disabled">----------- DEBIAN -----------</option>
																<option value="97">
									(AMS) Debian Wheezy 7.1
																	</option>
																																	<option value="null" disabled="disabled">----------- UBUNTU -----------</option>
																<option value="69">
									(AMS) Ubuntu 12.04 BASE
																	</option>
																							<option value="70">
									(AMS) Ubuntu 12.04 LAMP
																	</option>
																							<option value="71">
									(AMS) Ubuntu 12.04 PLESK
																	</option>
																							<option value="253">
									(AMS) Ubuntu 13.04
																	</option>
																																	<option value="null" disabled="disabled">----------- RHEL -----------</option>
																<option value="67">
									(AMS) Red Hat Enterprise Linux 5.3
																			(+$20.00)
																	</option>
																							<option value="68">
									(AMS) Red Hat Enterprise Linux 6.3
																			(+$20.00)
																	</option>
																																	<option value="null" disabled="disabled">----------- STANDARD -----------</option>
																<option value="73">
									(AMS) Windows 2008 R2 Standard
																			(+$20.00)
																	</option>
																							<option value="108">
									(AMS) Windows 2012 Standard
																			(+$20.00)
																	</option>
																																	<option value="null" disabled="disabled">----------- ENTERPRISE -----------</option>
																<option value="72">
									(AMS) Windows 2008 R2 Enterprise
																			(+$30.00)
																	</option>
													</select>
												<select style="display: none;" id="os_select_239333" class="os_select" name="cloud_oses_239333">
																																								<option value="null" disabled="disabled">----------- CENTOS -----------</option>
																<option selected="selected" value="268">
									(PHX) Centos 5 BASE
																	</option>
																							<option value="267">
									(PHX) Centos 6 BASE
																	</option>
																							<option value="266">
									(PHX) Centos 6 Cpanel
																			(+$7.50)
																	</option>
																																	<option value="null" disabled="disabled">----------- DEBIAN -----------</option>
																<option value="265">
									(PHX) Debian Wheezy 7.1
																	</option>
																																	<option value="null" disabled="disabled">----------- UBUNTU -----------</option>
																<option value="262">
									(PHX) Ubuntu 12.04 BASE
																	</option>
																							<option value="261">
									(PHX) Ubuntu 12.04 LAMP
																	</option>
																							<option value="260">
									(PHX) Ubuntu 12.04 PLESK
																	</option>
																							<option value="259">
									(PHX) Ubuntu 13.04
																	</option>
																																	<option value="null" disabled="disabled">----------- RHEL -----------</option>
																<option value="264">
									(PHX) Red Hat Enterprise Linux 5.3
																			(+$20.00)
																	</option>
																							<option value="263">
									(PHX) Red Hat Enterprise Linux 6.3
																			(+$20.00)
																	</option>
																																	<option value="null" disabled="disabled">----------- STANDARD -----------</option>
																<option value="257">
									(PHX) Windows 2008 R2 Standard
																			(+$20.00)
																	</option>
																							<option value="256">
									(PHX) Windows 2012 Standard
																			(+$20.00)
																	</option>
																																	<option value="null" disabled="disabled">----------- ENTERPRISE -----------</option>
																<option value="258">
									(PHX) Windows 2008 R2 Enterprise
																			(+$30.00)
																	</option>
													</select>
												<select style="display: none;" id="os_select_240807" class="os_select" name="cloud_oses_240807">
																																								<option value="null" disabled="disabled">----------- CENTOS -----------</option>
																<option selected="selected" value="271">
									(SAC) Centos 5 BASE
																	</option>
																							<option value="272">
									(SAC) Centos 6 BASE
																	</option>
																							<option value="273">
									(SAC) Centos 6 Cpanel
																			(+$7.50)
																	</option>
																																	<option value="null" disabled="disabled">----------- DEBIAN -----------</option>
																<option value="274">
									(SAC) Debian Wheezy 7.1
																	</option>
																																	<option value="null" disabled="disabled">----------- UBUNTU -----------</option>
																<option value="277">
									(SAC) Ubuntu 12.04 BASE
																	</option>
																							<option value="278">
									(SAC) Ubuntu 12.04 LAMP
																	</option>
																							<option value="279">
									(SAC) Ubuntu 12.04 PLESK
																	</option>
																							<option value="280">
									(SAC) Ubuntu 13.04
																	</option>
																																	<option value="null" disabled="disabled">----------- RHEL -----------</option>
																<option value="275">
									(SAC) Red Hat Enterprise Linux 5.3
																			(+$20.00)
																	</option>
																							<option value="276">
									(SAC) Red Hat Enterprise Linux 6.3
																			(+$20.00)
																	</option>
																																	<option value="null" disabled="disabled">----------- STANDARD -----------</option>
																<option value="282">
									(SAC) Windows 2008 R2 Standard
																			(+$20.00)
																	</option>
																							<option value="283">
									(SAC) Windows 2012 Standard
																			(+$20.00)
																	</option>
																																	<option value="null" disabled="disabled">----------- ENTERPRISE -----------</option>
																<option value="281">
									(SAC) Windows 2008 R2 Enterprise
																			(+$30.00)
																	</option>
													</select>
												<select style="display: inline-block;" id="os_select_218940" class="os_select" name="cloud_oses_218940">
																																								<option value="null" disabled="disabled">----------- CENTOS -----------</option>
																<option selected="selected" value="3">
									Centos 5 BASE
																	</option>
																							<option value="21">
									Centos 6 BASE
																	</option>
																							<option value="33">
									Centos 6 Cpanel
																			(+$7.50)
																	</option>
																																	<option value="null" disabled="disabled">----------- DEBIAN -----------</option>
																<option value="93">
									Debian Wheezy 7.1
																	</option>
																																	<option value="null" disabled="disabled">----------- UBUNTU -----------</option>
																<option value="2">
									Ubuntu 12.04 BASE
																	</option>
																							<option value="20">
									Ubuntu 12.04 LAMP
																	</option>
																							<option value="23">
									Ubuntu 12.04 PLESK
																	</option>
																							<option value="95">
									Ubuntu 13.04
																	</option>
																							<option value="1">
									UbuntuTemplate
																	</option>
																																	<option value="null" disabled="disabled">----------- RHEL -----------</option>
																<option value="24">
									Red Hat Enterprise Linux 5.3
																			(+$20.00)
																	</option>
																							<option value="25">
									Red Hat Enterprise Linux 6.3
																			(+$20.00)
																	</option>
																																	<option value="null" disabled="disabled">----------- STANDARD -----------</option>
																<option value="26">
									Windows 2008 R2 Standard
																			(+$20.00)
																	</option>
																							<option value="107">
									Windows 2012 Standard
																			(+$20.00)
																	</option>
																																	<option value="null" disabled="disabled">----------- ENTERPRISE -----------</option>
																<option value="27">
									Windows 2008 R2 Enterprise
																			(+$30.00)
																	</option>
													</select>
						
						<input id="os_hidden_input" name="choices[os]" value="3" type="hidden">
					</td>
				</tr>
			</tbody></table>
		</li>
				<li style="width: 100%; padding: 67px 0px 0px;">
			<div class="caption">
				<img src="other/globe.png" alt="">
				Management
			</div>
			<ul class="checkboxes">
														<li>
						<input name="choices[]" value="10" type="checkbox">
												<span class="mgmtName">R1Soft Backups ($1.50/GB)</span>
																			-  Enterprise-grade high performance disk-to-disk server backup software.
											</li>
														<li>
						<input name="choices[]" value="3" type="checkbox">
												<span class="mgmtName">Server Side Virus Scanning</span>
													<span class="cbprice">(+$5.00)</span>
																			- Node32 Anti-Virus is installed and manages anti-virus software on your server.
											</li>
														<li>
						<input name="choices[]" value="4" type="checkbox">
												<span class="mgmtName">Event Notification</span>
													<span class="cbprice">(+$10.00)</span>
																			- We will alert you when your services aren't available.
											</li>
														<li>
						<input name="choices[]" value="2" type="checkbox">
												<span class="mgmtName">Kernel &amp; OS Updates</span>
													<span class="cbprice">(+$25.00)</span>
																			- Automated updates to your kernel and OS without requiring a restart.
											</li>
														<li>
						<input name="choices[]" value="5" type="checkbox">
												<span class="mgmtName">Quick Reaction</span>
													<span class="cbprice">(+$30.00)</span>
																			- If at anytime your server becomes unreachable, one 
of our on-site DC techs will immediately begin addressing the situation.
											</li>
														<li>
						<input name="choices[]" value="1" type="checkbox">
												<span class="mgmtName">General Managed Services</span>
													<span class="cbprice">(+$69.00)</span>
																			- 24/7/365 on-call and on-demand system administration and support.
											</li>
							</ul>
		</li>
	</ul>
	<div id="options" class="optionMenu">
		<div class="caption active">
			Solutions Center
		</div>
		<ul>
			<li>
				<a href="http://leap3.singlehop.com/solutions/dedicated-servers/">
	<img src="other/icon_server_single.png" alt="Dedicated"> Dedicated Servers
</a>
<a href="http://leap3.singlehop.com/solutions/dynamic-servers/">
	<img src="other/icon_dynamic.png" alt="Dynamic"> Dynamic Servers
</a>
<a href="http://leap3.singlehop.com/solutions/public-cloud/">
	<img src="other/icon_cloud.png" alt="Public Cloud"> Public Cloud
</a>
<!-- Removing Hosted Apps Ticket 2458
<a href="/solutions/hosted-apps/">
	<img src="/resources/leap3/imgs/solutions/icon_hostedapps.png" alt="Hosted Apps" /> Hosted Apps
</a>
-->
<a href="http://leap3.singlehop.com/solutions/virtual-load-balancer/">
	<img src="other/icon_vlb.png" alt="Load Balancer"> Load Balancer
</a>				<a href="http://leap3.singlehop.com/solutions/existing/">
					<img> Existing Solutions
				</a>
			</li>
		</ul>
				<ul data-prices="hourly" id="total" class="ignore" style="margin-top: 30px;">
			<li class="caption">Bandwidth &amp; Mgmt Services</li>
			<li data-price="month">
				$<span>0.0000</span> / Month
			</li>
			<li class="caption">Online</li>
			<li data-price="online">
				$<span>0.0605</span> / Hour
			</li>
			<li class="caption">Offline</li>
			<li data-price="offline">
				$<span>0.0055</span> / Hour
			</li>
		</ul>
		<div style="display: none;" data-prices="monthly" id="total">
			$<span>0.00</span> / Month
		</div>
		<input style="display: none;" onclick="javascript:return confirm('Continuing will purchase this public cloud instance and add it to your account.');" id="finalize" value="Deploy Component" class="green" type="submit">
	</div>
</div>
</form>
		</div>
	</div>
	<? 
include('footer.php');
?>