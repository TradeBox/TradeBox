<?php session_start();
include('../DBconnect/dbconnect.php');
$user_id=$_SESSION['user_id'];
include('archive_add.php');
if(empty($user_id)){ header("Location: login.php"); } ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml"><head>
		<script src="other/dc.js" async="" type="text/javascript"></script><script src="other/dc.js" async="" type="text/javascript"></script><script src="other/dc.js" async="" type="text/javascript"></script><script src="other/233685.js" id="hs-analytics"></script><script src="other/dc.js" async="" type="text/javascript"></script><script id="undefined" src="other/inpage_linkid.js" async="" type="text/javascript"></script><script src="other/ga.js" async="" type="text/javascript"></script><script src="other/gtm.js" async=""></script><script src="other/gtm.js" async=""></script><script type="text/javascript">var NREUMQ=NREUMQ||[];NREUMQ.push(["mark","firstbyte",new Date().getTime()]);</script><title>LEAP3 :: Solutions Center</title>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta name="robots" content="index,follow">
		<meta name="googlebot" content="noarchive">
		<meta name="description" content="LEAP3 Platform">
		<meta name="author" content="SingleHop, LLC">
		<meta name="publisher" content="SingleHop, LLC">
		<meta name="revisit-after" content="1 days">
        <link rel="icon" type="image/png" href="favicon.png">
		<link href="other/global.css" rel="stylesheet" type="text/css">
		<link href="other/buttons.css" rel="stylesheet" type="text/css">
		<link href="other/overrides.css" rel="stylesheet" type="text/css">
		<link href="other/inputs.css" rel="stylesheet" type="text/css">
		<link href="other/optionMenus.css" rel="stylesheet" type="text/css">
		<link href="other/dataTables.css" rel="stylesheet" type="text/css">
		<link href="other/modal.css" rel="stylesheet" type="text/css">
		<link href="other/toolbar.css" rel="stylesheet" type="text/css">
		<link href="other/select2slider.css" rel="stylesheet" type="text/css">
		<link href="other/expandableDetails.css" rel="stylesheet" type="text/css">
        <link href="other/jquery-ui-1.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" type="text/css" href="other/floatingBlockLayout.css">
<link rel="stylesheet" type="text/css" href="other/orderform.css">

		<!--[if IE]><script type="text/javascript" src="/resources/global/js/lib/excanvas.js"></script><![endif]-->
		<script src="other/jquery.js" type="text/javascript"></script>
		<script src="other/jquery-ui.js" type="text/javascript"></script>
		
        	<link media="all" href="other/notifications.css" type="text/css" rel="stylesheet"><script src="other/roundtrip.js" type="text/javascript" async="true"></script><script src="other/roundtrip.js" type="text/javascript" async="true"></script><script src="other/roundtrip.js" type="text/javascript" async="true"></script><script src="other/HL3NMJBQOFEHDEFZY3KPL3" type="text/javascript" async="true"></script><script src="other/HL3NMJBQOFEHDEFZY3KPL3_002" type="text/javascript" async="true"></script><script src="other/HL3NMJBQOFEHDEFZY3KPL3" type="text/javascript" async="true"></script><script src="other/roundtrip.js" type="text/javascript" async="true"></script><script src="other/HL3NMJBQOFEHDEFZY3KPL3_002" type="text/javascript" async="true"></script><div style="width: 1px; height: 1px; display: inline;">
			
</div></head>
	<body><div id="notifications"><div class="container"><input class="gray close_button" value="Dismiss" _leap_action="close" type="button"><ul class="messages"></ul></div></div>

		
		<!-- Google Tag Manager -->
		<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-83K3"
		height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
		<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
		new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
		j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
		'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
		})(window,document,'script','dataLayer','GTM-83K3');</script>
		<!-- End Google Tag Manager -->
		

		<div id="transparency">

		</div>
				<div id="header">
			<div class="container">
				<div id="logo">
					<img src="logo_white_shadows1.png" height="35">
				</div>
                <div id="version">
                    Corporate
                </div>
																	<div id="user">
					<div id="username" onmouseover="usermenu.style.display='block'" onmouseout="usermenu.style.display='none'" >
						ProHost LTD (<span style="font-size: 10px;">Pavel Peev</span>)
					</div>
					<div onmouseover="usermenu.style.display='block'" onmouseout="usermenu.style.display='none'" id='usermenu' class="user_menu">
						<ul>
							<li>
								<a href="">Account Settings</a>
							</li>
                            														<li>
								<a href="">Help</a>
							</li>
							<li>
								<a href="log_out.php">Logout</a>
							</li>
						</ul>
					</div>
                    <!-- removing events, ticket 2650
					<div id="events">
						<img src="/resources/leap3/imgs/global/header_events.png" />
					</div>
					-->
				</div>
			</div>
		</div>
		<div id="eventsbar">
			<div class="container">
				<ul>
					<li>
						<div class="header">
							<div class="icon">
								<img src="other/notifications_tickets.png">
							</div>
							Ticket Responses
							<div class="events_num">
								0
							</div>
						</div>
						<ul class="body">
													</ul>
					</li>
					<li>
						<div class="header">
							<div class="icon">
								<img src="other/notifications_invoices.png">
							</div>
							Invoices
							<div class="events_num">
								0
							</div>
						</div>
						<ul class="body">
													</ul>
					</li>
					<li>
						<div class="header">
							<div class="icon">
								<img src="other/icon_cloud.png" style="height: 19px; margin-top: 2px;">
							</div>
							Virtual Machines
							<div class="events_num">
								0
							</div>
						</div>
						<ul class="body">
													</ul>
					</li><li>
						<div class="header">
							<div class="icon">
								<img src="other/icon_server_single.png" style="height: 19px; margin-top: 3px;">
							</div>
							Servers
							<div class="events_num">
								0
							</div>
						</div>
						<ul class="body">
													</ul>
					</li>
				</ul>
			</div>
		</div>
		<div id="toolbar">
			<div class="container" style="overflow: visible;">
				<ul id="toolbarlinks">
	<li>
		<a href="" onmouseover="submenu1.style.display='block'" onmouseout="submenu1.style.display='none'">Продажби</a>
		<ul id="submenu1" onmouseover="submenu1.style.display='block'" onmouseout="submenu1.style.display='none'">
										<li>
					<div class="header">
						Affiliates
					</div>
					<div class="body">
						<a href="http://leap3.singlehop.com/affiliates/home/">Summary</a>
                        <a href="http://leap3.singlehop.com/affiliates/creatives/">Creatives</a>
						<a href="http://leap3.singlehop.com/affiliates/payout/">Payout History</a>
						<a href="http://leap3.singlehop.com/affiliates/validations/">Pending Commissions</a>
						<a href="http://leap3.singlehop.com/affiliates/sales/">Validated Commissions</a>
					</div>
				</li>
						<li>
				<div class="header">
					SingleHop
				</div>
				<div class="body">
					<a href="http://singlehop.com/">SingleHop.com</a>
					<a href="http://singlehop.com/blog/">Official Blog</a>
					<a href="http://singlehop.com/about/press.php">Press Releases</a>
					<a href="http://singlehop.com/about/events/">Event Schedule</a>
					<a href="http://community.singlehop.com/">Our Community</a>
					<a href="http://twitter.com/singlehop">Twitter @SingleHop</a>
					<a href="http://facebook.com/singlehop">Facebook</a>
				</div>
			</li>
			<li>
				<div class="header">
					SingleHop
				</div>
				<div class="body">
					<a href="http://singlehop.com/">SingleHop.com</a>
					<a href="http://singlehop.com/blog/">Official Blog</a>
					<a href="http://singlehop.com/about/press.php">Press Releases</a>
					<a href="http://singlehop.com/about/events/">Event Schedule</a>
					<a href="http://community.singlehop.com/">Our Community</a>
					<a href="http://twitter.com/singlehop">Twitter @SingleHop</a>
					<a href="http://facebook.com/singlehop">Facebook</a>
				</div>
			</li>
		</ul>
	</li>
			<li>
			<a href="" onmouseover="submenu2.style.display='block'" onmouseout="submenu2.style.display='none'" >Клиенти</a>
			<ul id="submenu2" onmouseover="submenu2.style.display='block'" onmouseout="submenu2.style.display='none'">
										<li>
					<div class="header">
						Affiliates
					</div>
					<div class="body">
						<a href="http://leap3.singlehop.com/affiliates/home/">Summary</a>
                        <a href="http://leap3.singlehop.com/affiliates/creatives/">Creatives</a>
						<a href="http://leap3.singlehop.com/affiliates/payout/">Payout History</a>
						<a href="http://leap3.singlehop.com/affiliates/validations/">Pending Commissions</a>
						<a href="http://leap3.singlehop.com/affiliates/sales/">Validated Commissions</a>
					</div>
				</li>
						<li>
				<div class="header">
					SingleHop
				</div>
				<div class="body">
					<a href="http://singlehop.com/">SingleHop.com</a>
					<a href="http://singlehop.com/blog/">Official Blog</a>
					<a href="http://singlehop.com/about/press.php">Press Releases</a>
					<a href="http://singlehop.com/about/events/">Event Schedule</a>
					<a href="http://community.singlehop.com/">Our Community</a>
					<a href="http://twitter.com/singlehop">Twitter @SingleHop</a>
					<a href="http://facebook.com/singlehop">Facebook</a>
				</div>
			</li>
			<li>
				<div class="header">
					SingleHop
				</div>
				<div class="body">
					<a href="http://singlehop.com/">SingleHop.com</a>
					<a href="http://singlehop.com/blog/">Official Blog</a>
					<a href="http://singlehop.com/about/press.php">Press Releases</a>
					<a href="http://singlehop.com/about/events/">Event Schedule</a>
					<a href="http://community.singlehop.com/">Our Community</a>
					<a href="http://twitter.com/singlehop">Twitter @SingleHop</a>
					<a href="http://facebook.com/singlehop">Facebook</a>
				</div>
			</li>
		</ul>
		</li>
				<li>
			<a href="" onmouseover="submenu3.style.display='block'" onmouseout="submenu3.style.display='none'">Продукти</a>
			<ul id="submenu3" onmouseover="submenu3.style.display='block'" onmouseout="submenu3.style.display='none'">
										<li>
					<div class="header">
						Affiliates
					</div>
					<div class="body">
						<a href="category_add.php">Категории</a>
                        <a href="sub_category_add.php">Под-категории</a>
						<a href="sub_sub_category_add.php">Под-под-категории</a>
						<a href="http://leap3.singlehop.com/affiliates/validations/">Pending Commissions</a>
						<a href="http://leap3.singlehop.com/affiliates/sales/">Validated Commissions</a>
					</div>
				</li>
						<li>
				<div class="header">
					SingleHop
				</div>
				<div class="body">
					<a href="http://singlehop.com/">SingleHop.com</a>
					<a href="http://singlehop.com/blog/">Official Blog</a>
					<a href="http://singlehop.com/about/press.php">Press Releases</a>
					<a href="http://singlehop.com/about/events/">Event Schedule</a>
					<a href="http://community.singlehop.com/">Our Community</a>
					<a href="http://twitter.com/singlehop">Twitter @SingleHop</a>
					<a href="http://facebook.com/singlehop">Facebook</a>
				</div>
			</li>
			<li>
				<div class="header">
					SingleHop
				</div>
				<div class="body">
					<a href="http://singlehop.com/">SingleHop.com</a>
					<a href="http://singlehop.com/blog/">Official Blog</a>
					<a href="http://singlehop.com/about/press.php">Press Releases</a>
					<a href="http://singlehop.com/about/events/">Event Schedule</a>
					<a href="http://community.singlehop.com/">Our Community</a>
					<a href="http://twitter.com/singlehop">Twitter @SingleHop</a>
					<a href="http://facebook.com/singlehop">Facebook</a>
				</div>
			</li>
		</ul>
		</li>
				<li>
			<a href="" onmouseover="submenu4.style.display='block'" onmouseout="submenu4.style.display='none'">Склад</a>
			<ul id="submenu4" onmouseover="submenu4.style.display='block'" onmouseout="submenu4.style.display='none'">
										<li>
					<div class="header">
						Affiliates
					</div>
					<div class="body">
						<a href="http://leap3.singlehop.com/affiliates/home/">Summary</a>
                        <a href="http://leap3.singlehop.com/affiliates/creatives/">Creatives</a>
						<a href="http://leap3.singlehop.com/affiliates/payout/">Payout History</a>
						<a href="http://leap3.singlehop.com/affiliates/validations/">Pending Commissions</a>
						<a href="http://leap3.singlehop.com/affiliates/sales/">Validated Commissions</a>
					</div>
				</li>
						<li>
				<div class="header">
					SingleHop
				</div>
				<div class="body">
					<a href="http://singlehop.com/">SingleHop.com</a>
					<a href="http://singlehop.com/blog/">Official Blog</a>
					<a href="http://singlehop.com/about/press.php">Press Releases</a>
					<a href="http://singlehop.com/about/events/">Event Schedule</a>
					<a href="http://community.singlehop.com/">Our Community</a>
					<a href="http://twitter.com/singlehop">Twitter @SingleHop</a>
					<a href="http://facebook.com/singlehop">Facebook</a>
				</div>
			</li>
			<li>
				<div class="header">
					SingleHop
				</div>
				<div class="body">
					<a href="http://singlehop.com/">SingleHop.com</a>
					<a href="http://singlehop.com/blog/">Official Blog</a>
					<a href="http://singlehop.com/about/press.php">Press Releases</a>
					<a href="http://singlehop.com/about/events/">Event Schedule</a>
					<a href="http://community.singlehop.com/">Our Community</a>
					<a href="http://twitter.com/singlehop">Twitter @SingleHop</a>
					<a href="http://facebook.com/singlehop">Facebook</a>
				</div>
			</li>
		</ul>
		</li>
				<li>
			<a href="" onmouseover="submenu5.style.display='block'" onmouseout="submenu5.style.display='none'">Разходи</a>
			<ul id="submenu5" onmouseover="submenu5.style.display='block'" onmouseout="submenu5.style.display='none'">
										<li>
					<div class="header">
						Affiliates
					</div>
					<div class="body">
						<a href="http://leap3.singlehop.com/affiliates/home/">Summary</a>
                        <a href="http://leap3.singlehop.com/affiliates/creatives/">Creatives</a>
						<a href="http://leap3.singlehop.com/affiliates/payout/">Payout History</a>
						<a href="http://leap3.singlehop.com/affiliates/validations/">Pending Commissions</a>
						<a href="http://leap3.singlehop.com/affiliates/sales/">Validated Commissions</a>
					</div>
				</li>
						<li>
				<div class="header">
					SingleHop
				</div>
				<div class="body">
					<a href="http://singlehop.com/">SingleHop.com</a>
					<a href="http://singlehop.com/blog/">Official Blog</a>
					<a href="http://singlehop.com/about/press.php">Press Releases</a>
					<a href="http://singlehop.com/about/events/">Event Schedule</a>
					<a href="http://community.singlehop.com/">Our Community</a>
					<a href="http://twitter.com/singlehop">Twitter @SingleHop</a>
					<a href="http://facebook.com/singlehop">Facebook</a>
				</div>
			</li>
			<li>
				<div class="header">
					SingleHop
				</div>
				<div class="body">
					<a href="http://singlehop.com/">SingleHop.com</a>
					<a href="http://singlehop.com/blog/">Official Blog</a>
					<a href="http://singlehop.com/about/press.php">Press Releases</a>
					<a href="http://singlehop.com/about/events/">Event Schedule</a>
					<a href="http://community.singlehop.com/">Our Community</a>
					<a href="http://twitter.com/singlehop">Twitter @SingleHop</a>
					<a href="http://facebook.com/singlehop">Facebook</a>
				</div>
			</li>
		</ul>
		</li>
		<li>
		<a href="#" onmouseover="submenu6.style.display='block'" onmouseout="submenu6.style.display='none'">Доставчици</a>
		<ul id="submenu6" onmouseover="submenu6.style.display='block'" onmouseout="submenu6.style.display='none'">
										<li>
					<div class="header">
						Affiliates
					</div>
					<div class="body">
						<a href="http://leap3.singlehop.com/affiliates/home/">Summary</a>
                        <a href="http://leap3.singlehop.com/affiliates/creatives/">Creatives</a>
						<a href="http://leap3.singlehop.com/affiliates/payout/">Payout History</a>
						<a href="http://leap3.singlehop.com/affiliates/validations/">Pending Commissions</a>
						<a href="http://leap3.singlehop.com/affiliates/sales/">Validated Commissions</a>
					</div>
				</li>
						<li>
				<div class="header">
					SingleHop
				</div>
				<div class="body">
					<a href="http://singlehop.com/">SingleHop.com</a>
					<a href="http://singlehop.com/blog/">Official Blog</a>
					<a href="http://singlehop.com/about/press.php">Press Releases</a>
					<a href="http://singlehop.com/about/events/">Event Schedule</a>
					<a href="http://community.singlehop.com/">Our Community</a>
					<a href="http://twitter.com/singlehop">Twitter @SingleHop</a>
					<a href="http://facebook.com/singlehop">Facebook</a>
				</div>
			</li>
			<li>
				<div class="header">
					SingleHop
				</div>
				<div class="body">
					<a href="http://singlehop.com/">SingleHop.com</a>
					<a href="http://singlehop.com/blog/">Official Blog</a>
					<a href="http://singlehop.com/about/press.php">Press Releases</a>
					<a href="http://singlehop.com/about/events/">Event Schedule</a>
					<a href="http://community.singlehop.com/">Our Community</a>
					<a href="http://twitter.com/singlehop">Twitter @SingleHop</a>
					<a href="http://facebook.com/singlehop">Facebook</a>
				</div>
			</li>
		</ul>
	</li>
	<li>
		<a href="#" onmouseover="submenu7.style.display='block'" onmouseout="submenu7.style.display='none'">Служители</a>
		<ul id="submenu7" onmouseover="submenu7.style.display='block'" onmouseout="submenu7.style.display='none'">
										<li>
					<div class="header">
						Affiliates
					</div>
					<div class="body">
						<a href="http://leap3.singlehop.com/affiliates/home/">Summary</a>
                        <a href="http://leap3.singlehop.com/affiliates/creatives/">Creatives</a>
						<a href="http://leap3.singlehop.com/affiliates/payout/">Payout History</a>
						<a href="http://leap3.singlehop.com/affiliates/validations/">Pending Commissions</a>
						<a href="http://leap3.singlehop.com/affiliates/sales/">Validated Commissions</a>
					</div>
				</li>
						<li>
				<div class="header">
					SingleHop
				</div>
				<div class="body">
					<a href="http://singlehop.com/">SingleHop.com</a>
					<a href="http://singlehop.com/blog/">Official Blog</a>
					<a href="http://singlehop.com/about/press.php">Press Releases</a>
					<a href="http://singlehop.com/about/events/">Event Schedule</a>
					<a href="http://community.singlehop.com/">Our Community</a>
					<a href="http://twitter.com/singlehop">Twitter @SingleHop</a>
					<a href="http://facebook.com/singlehop">Facebook</a>
				</div>
			</li>
			<li>
				<div class="header">
					SingleHop
				</div>
				<div class="body">
					<a href="http://singlehop.com/">SingleHop.com</a>
					<a href="http://singlehop.com/blog/">Official Blog</a>
					<a href="http://singlehop.com/about/press.php">Press Releases</a>
					<a href="http://singlehop.com/about/events/">Event Schedule</a>
					<a href="http://community.singlehop.com/">Our Community</a>
					<a href="http://twitter.com/singlehop">Twitter @SingleHop</a>
					<a href="http://facebook.com/singlehop">Facebook</a>
				</div>
			</li>
		</ul>
	</li>
</ul>			</div>
		</div>
		