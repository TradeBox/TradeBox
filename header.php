<?php session_start();
include('../DBconnect/dbconnect.php');
$user_id=$_SESSION['user_id'];
include('archive_add.php');
if(empty($user_id)){ header("Location: login.php"); } ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml"><head>
		
		<title>TradeBox</title>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta name="robots" content="index,follow">
		<meta name="googlebot" content="noarchive">
		<meta name="description" content="TradeBox">
		<meta name="author" content="TradeBox, ltd">
		<meta name="publisher" content="TradeBox, ltd">
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
		
		
        	<link media="all" href="other/notifications.css" type="text/css" rel="stylesheet">
			
			<script type="text/javascript" src="other/jquery.min.js"></script>
<script type="text/javascript">
	$(document).ready(function()
	{
		$(".obekt").change(function()
		{
			var id=$(this).val();
			var dataString = 'id='+ id;

			$.ajax
			({
			type: "POST",
			url: "ajax_address.php",
			data: dataString,
			cache: false,
			success: function(html)
				{
					$(".adres").html(html);
				}
			});

		});

	});
</script> 
</head>
	<body>
	
	
				<div id="header" style="box-shadow: 0 0 3px 2px rgba(30, 30, 30, 0.7);
margin-top:3px;">
			<div class="container">
				<div id="logo">
					<img src="logo_small_white.png">
				</div>
                <div id="version">
                    Corporate
                </div>
																	<div id="user">
			<?
			$log_name=mysql_fetch_array(mysql_query("SELECT * FROM users WHERE id='$user_id'"));	
			$full_names=$log_name['full_name'];
			$store_ids=$log_name['store_id'];
			$stoooor=mysql_fetch_array(mysql_query("SELECT * FROM stores WHERE id='$store_ids'"));	
			$firma=$stoooor['name'];
			if(empty($firma)){ 
			$firma=$log_name['username'];
			}
			if(empty($full_names)){ 
			$full_names=$log_name['full_names'];
			}
			?>
					<div id="username" onmouseover="usermenu.style.display='block'" onmouseout="usermenu.style.display='none'" >
						<?  echo $firma;?> (<span style="font-size: 10px;"><?  echo $full_names;?></span>)
					</div>
					<div onmouseover="usermenu.style.display='block'" onmouseout="usermenu.style.display='none'" id='usermenu' class="user_menu">
						<ul>
							<li>
								<a href="users_info.php?id=<? echo "$log_name[id]"; ?>">Account Settings</a>
							</li>
							<li>
								<a href="users.php">Accounts</a>
							</li>
                            														<li>
								<a href="">Help</a>
							</li>
							<li>
								<a href="log_out.php">Logout</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div id="toolbar">
			<div class="container" style="overflow: visible;">
				<ul id="toolbarlinks">
	<li>
		<a style="cursor:pointer;" onmouseover="submenu1.style.display='block'" onmouseout="submenu1.style.display='none'">Продажби</a>
		<ul id="submenu1" onmouseover="submenu1.style.display='block'" onmouseout="submenu1.style.display='none'">
										<li>
					<div class="header">
						Продажби
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
				&nbsp;&nbsp;&nbsp;&nbsp;
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
					&nbsp;&nbsp;&nbsp;&nbsp;
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
			<a style="cursor:pointer;" onmouseover="submenu2.style.display='block'" onmouseout="submenu2.style.display='none'" >Клиенти</a>
			<ul id="submenu2" onmouseover="submenu2.style.display='block'" onmouseout="submenu2.style.display='none'">
										<li>
					<div class="header">
						Клиенти
					</div>
					<div class="body">
						<a href="customer_view.php">Клиенти</a>
                        <a href="customer_groups.php">Групи</a>
						<a href="http://leap3.singlehop.com/affiliates/payout/">Payout History</a>
						<a href="http://leap3.singlehop.com/affiliates/validations/">Pending Commissions</a>
						<a href="http://leap3.singlehop.com/affiliates/sales/">Validated Commissions</a>
					</div>
				</li>
						<li>
				<div class="header">
				&nbsp;&nbsp;&nbsp;&nbsp;
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
				&nbsp;&nbsp;&nbsp;&nbsp;
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
			<a style="cursor:pointer;" onmouseover="submenu3.style.display='block'" onmouseout="submenu3.style.display='none'">Продукти</a>
			<ul id="submenu3" onmouseover="submenu3.style.display='block'" onmouseout="submenu3.style.display='none'">
										<li>
					<div class="header">
						Продукти
					</div>
					<div class="body">
						<a href="category_add.php">Категории</a>
                        <a href="sub_category_add.php">Под-категории</a>
						<a href="sub_sub_category_add.php">Под-под-категории</a>
						<a href="product_add.php">Нов продукт</a>
						<a href="product_list.php">Всички продукти</a>
					</div>
				</li>
						<li>
				<div class="header">
					&nbsp;&nbsp;&nbsp;&nbsp;
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
					&nbsp;&nbsp;&nbsp;&nbsp;
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
			<a style="cursor:pointer;" onmouseover="submenu4.style.display='block'" onmouseout="submenu4.style.display='none'">Склад</a>
			<ul id="submenu4" onmouseover="submenu4.style.display='block'" onmouseout="submenu4.style.display='none'">
										<li>
					<div class="header">
						Склад
					</div>
					<div class="body">
						<a href="stock_note_add.php">Стокови разписки</a>
                        <a href="warehouse_list.php">Склад</a>
						<a href="http://leap3.singlehop.com/affiliates/payout/">Payout History</a>
						<a href="http://leap3.singlehop.com/affiliates/validations/">Pending Commissions</a>
						<a href="http://leap3.singlehop.com/affiliates/sales/">Validated Commissions</a>
					</div>
				</li>
						<li>
				<div class="header">
				&nbsp;&nbsp;&nbsp;&nbsp;
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
					&nbsp;&nbsp;&nbsp;&nbsp;
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
			<a style="cursor:pointer;" onmouseover="submenu5.style.display='block'" onmouseout="submenu5.style.display='none'">Разходи</a>
			<ul id="submenu5" onmouseover="submenu5.style.display='block'" onmouseout="submenu5.style.display='none'">
										<li>
					<div class="header">
						Разходи
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
					&nbsp;&nbsp;&nbsp;&nbsp;
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
					&nbsp;&nbsp;&nbsp;&nbsp;
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
		<a style="cursor:pointer;" onmouseover="submenu6.style.display='block'" onmouseout="submenu6.style.display='none'">Доставчици</a>
		<ul id="submenu6" onmouseover="submenu6.style.display='block'" onmouseout="submenu6.style.display='none'">
										<li>
					<div class="header">
						Доставчици
					</div>
					<div class="body">
						<a href="supply_view.php">Доставчици лист</a>
                         <a href="supply_groups.php">Групи</a>
						<a href="http://leap3.singlehop.com/affiliates/payout/">Payout History</a>
						<a href="http://leap3.singlehop.com/affiliates/validations/">Pending Commissions</a>
						<a href="http://leap3.singlehop.com/affiliates/sales/">Validated Commissions</a>
					</div>
				</li>
						<li>
				<div class="header">
					&nbsp;&nbsp;&nbsp;&nbsp;
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
				&nbsp;&nbsp;&nbsp;&nbsp;
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
		<a style="cursor:pointer;" onmouseover="submenu7.style.display='block'" onmouseout="submenu7.style.display='none'">Служители</a>
		<ul id="submenu7" onmouseover="submenu7.style.display='block'" onmouseout="submenu7.style.display='none'">
										<li>
					<div class="header">
						Служители
					</div>
					<div class="body">
						<a href="employees.php">Служители</a>
                        <a href="http://leap3.singlehop.com/affiliates/creatives/">Creatives</a>
						<a href="http://leap3.singlehop.com/affiliates/payout/">Payout History</a>
						<a href="http://leap3.singlehop.com/affiliates/validations/">Pending Commissions</a>
						<a href="http://leap3.singlehop.com/affiliates/sales/">Validated Commissions</a>
					</div>
				</li>
						<li>
				<div class="header">
				&nbsp;&nbsp;&nbsp;&nbsp;
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
					&nbsp;&nbsp;&nbsp;&nbsp;
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
		