<?php 
include('../DBconnect/dbconnect.php');
$checks=mysql_query("SELECT * FROM users");
$if1=mysql_num_rows($checks);
if($if1==0){
header("Location: index.php");die(); exit();
}

if(isset($_POST['generate'])){
$correct_email='empty';
$email=$_POST['email'];
		$check_where_user=mysql_query("SELECT * FROM users WHERE email='$email'");
		$check_pass=mysql_num_rows($check_where_user);
		if($check_pass==1){
		
		$usersss=mysql_fetch_array($check_where_user);
		$select_user_id=$usersss['id'];
			$correct_email='correct';
			
		function mt_rand_str ($l, $c = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789') {
		for ($s = '', $cl = strlen($c)-1, $i = 0; $i < $l; $s .= $c[mt_rand(0, $cl)], ++$i);
		return $s;
		}
		
		$randompass=mt_rand_str(10);
		$from = "office@TradeBox.com"; // sender
		$subject = "Нова парола";
		$message = "Новата Ви парола за административния акаунт е:".$randompass."";
		// message lines should not exceed 70 characters (PHP rule), so wrap it
		$message = wordwrap($message, 70);
		// send mail
		mail($email,$subject,$message,"From: $from\n");
		$crypted_new_pass=md5($randompass);
		mysql_query("UPDATE users SET password = '$crypted_new_pass'");
		
					include('archive_add.php');

		add_to_archive('Потребителят си генерира /Забравена парола/.');
		
		
		
		}
		
					}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml"><head>
		<title>TradeBox - Login</title>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8"><script id="undefined" src="other/inpage_linkid.js" async="" type="text/javascript"></script><script src="other/233685.js" id="hs-analytics"></script><script src="other/dc.js" async="" type="text/javascript"></script><script src="other/gtm.js" async=""></script><script type="text/javascript">window.NREUM||(NREUM={}),__nr_require=function(t,n,e){function r(e){if(!n[e]){var o=n[e]={exports:{}};t[e][0].call(o.exports,function(n){var o=t[e][1][n];return r(o?o:n)},o,o.exports)}return n[e].exports}if("function"==typeof __nr_require)return __nr_require;for(var o=0;o<e.length;o++)r(e[o]);return r}({D5DuLP:[function(t,n){function e(t,n){var e=r[t];return e?e.apply(this,n):(o[t]||(o[t]=[]),void o[t].push(n))}var r={},o={};n.exports=e,e.queues=o,e.handlers=r},{}],handle:[function(t,n){n.exports=t("D5DuLP")},{}],G9z0Bl:[function(t,n){function e(){var t=l.info=NREUM.info;if(t&&t.agent&&t.licenseKey&&t.applicationID&&p&&p.body){l.proto="https"===f.split(":")[0]||t.sslForHttp?"https://":"http://",i("mark",["onload",a()]);var n=p.createElement("script");n.src=l.proto+t.agent,p.body.appendChild(n)}}function r(){"complete"===p.readyState&&o()}function o(){i("mark",["domContent",a()])}function a(){return(new Date).getTime()}var i=t("handle"),u=window,p=u.document,s="addEventListener",c="attachEvent",f=(""+location).split("?")[0],l=n.exports={offset:a(),origin:f,features:[]};p[s]?(p[s]("DOMContentLoaded",o,!1),u[s]("load",e,!1)):(p[c]("onreadystatechange",r),u[c]("onload",e)),i("mark",["firstbyte",a()])},{handle:"D5DuLP"}],loader:[function(t,n){n.exports=t("G9z0Bl")},{}]},{},["G9z0Bl"]);</script>
		<meta name="robots" content="index,follow">
		<meta name="googlebot" content="noarchive">
		<meta name="description" content="LEAP3 Platform">
		<meta name="author" content="SingleHop, LLC">
		<meta name="publisher" content="SingleHop, LLC">
		<meta name="revisit-after" content="1 days">
        <link rel="icon" type="image/png" href="favicon.png">
        <link href="other/jquery-ui.css" type="text/css" rel="Stylesheet">
		<link href="other/login.css" rel="stylesheet" type="text/css">
		<link href="other/overrides.css" rel="stylesheet" type="text/css">
        <link href="other/flags.css" media="screen" rel="stylesheet" type="text/css">
        <link href="other/form.css" media="screen" rel="stylesheet" type="text/css">
        <script src="other/form.js" type="text/javascript"></script>
        <script src="other/jquery.js" type="text/javascript"></script>
		<script src="other/jquery-ui.js" type="text/javascript"></script>
        
        <script src="other/extend.js" type="text/javascript"></script>
        <script src="other/leap.js" type="text/javascript"></script>
        <script src="other/ui.js" type="text/javascript"></script>
        <script src="other/alert.js" type="text/javascript"></script>

		<script type="text/javascript" src="other/login.js"></script>
	<script src="other/roundtrip.js" type="text/javascript" async="true"></script><script src="other/HL3NMJBQOFEHDEFZY3KPL3" type="text/javascript" async="true"></script><style class="firebugResetStyles" type="text/css" charset="utf-8">/* See license.txt for terms of usage */
/** reset styling **/
.firebugResetStyles {
    z-index: 2147483646 !important;
    top: 0 !important;
    left: 0 !important;
    display: block !important;
    border: 0 none !important;
    margin: 0 !important;
    padding: 0 !important;
    outline: 0 !important;
    min-width: 0 !important;
    max-width: none !important;
    min-height: 0 !important;
    max-height: none !important;
    position: fixed !important;
    transform: rotate(0deg) !important;
    transform-origin: 50% 50% !important;
    border-radius: 0 !important;
    box-shadow: none !important;
    background: transparent none !important;
    pointer-events: none !important;
    white-space: normal !important;
}
style.firebugResetStyles {
    display: none !important;
}

.firebugBlockBackgroundColor {
    background-color: transparent !important;
}

.firebugResetStyles:before, .firebugResetStyles:after {
    content: "" !important;
}
/**actual styling to be modified by firebug theme**/
.firebugCanvas {
    display: none !important;
}

/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
.firebugLayoutBox {
    width: auto !important;
    position: static !important;
}

.firebugLayoutBoxOffset {
    opacity: 0.8 !important;
    position: fixed !important;
}

.firebugLayoutLine {
    opacity: 0.4 !important;
    background-color: #000000 !important;
}

.firebugLayoutLineLeft, .firebugLayoutLineRight {
    width: 1px !important;
    height: 100% !important;
}

.firebugLayoutLineTop, .firebugLayoutLineBottom {
    width: 100% !important;
    height: 1px !important;
}

.firebugLayoutLineTop {
    margin-top: -1px !important;
    border-top: 1px solid #999999 !important;
}

.firebugLayoutLineRight {
    border-right: 1px solid #999999 !important;
}

.firebugLayoutLineBottom {
    border-bottom: 1px solid #999999 !important;
}

.firebugLayoutLineLeft {
    margin-left: -1px !important;
    border-left: 1px solid #999999 !important;
}

/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
.firebugLayoutBoxParent {
    border-top: 0 none !important;
    border-right: 1px dashed #E00 !important;
    border-bottom: 1px dashed #E00 !important;
    border-left: 0 none !important;
    position: fixed !important;
    width: auto !important;
}

.firebugRuler{
    position: absolute !important;
}

.firebugRulerH {
    top: -15px !important;
    left: 0 !important;
    width: 100% !important;
    height: 14px !important;
    background: url("data:image/png,%89PNG%0D%0A%1A%0A%00%00%00%0DIHDR%00%00%13%88%00%00%00%0E%08%02%00%00%00L%25a%0A%00%00%00%04gAMA%00%00%D6%D8%D4OX2%00%00%00%19tEXtSoftware%00Adobe%20ImageReadyq%C9e%3C%00%00%04%F8IDATx%DA%EC%DD%D1n%E2%3A%00E%D1%80%F8%FF%EF%E2%AF2%95%D0D4%0E%C1%14%B0%8Fa-%E9%3E%CC%9C%87n%B9%81%A6W0%1C%A6i%9A%E7y%0As8%1CT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AATE9%FE%FCw%3E%9F%AF%2B%2F%BA%97%FDT%1D~K(%5C%9D%D5%EA%1B%5C%86%B5%A9%BDU%B5y%80%ED%AB*%03%FAV9%AB%E1%CEj%E7%82%EF%FB%18%BC%AEJ8%AB%FA'%D2%BEU9%D7U%ECc0%E1%A2r%5DynwVi%CFW%7F%BB%17%7Dy%EACU%CD%0E%F0%FA%3BX%FEbV%FEM%9B%2B%AD%BE%AA%E5%95v%AB%AA%E3E5%DCu%15rV9%07%B5%7F%B5w%FCm%BA%BE%AA%FBY%3D%14%F0%EE%C7%60%0EU%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5JU%88%D3%F5%1F%AE%DF%3B%1B%F2%3E%DAUCNa%F92%D02%AC%7Dm%F9%3A%D4%F2%8B6%AE*%BF%5C%C2Ym~9g5%D0Y%95%17%7C%C8c%B0%7C%18%26%9CU%CD%13i%F7%AA%90%B3Z%7D%95%B4%C7%60%E6E%B5%BC%05%B4%FBY%95U%9E%DB%FD%1C%FC%E0%9F%83%7F%BE%17%7DkjMU%E3%03%AC%7CWj%DF%83%9An%BCG%AE%F1%95%96yQ%0Dq%5Dy%00%3Et%B5'%FC6%5DS%95pV%95%01%81%FF'%07%00%00%00%00%00%00%00%00%00%F8x%C7%F0%BE%9COp%5D%C9%7C%AD%E7%E6%EBV%FB%1E%E0(%07%E5%AC%C6%3A%ABi%9C%8F%C6%0E9%AB%C0'%D2%8E%9F%F99%D0E%B5%99%14%F5%0D%CD%7F%24%C6%DEH%B8%E9rV%DFs%DB%D0%F7%00k%FE%1D%84%84%83J%B8%E3%BA%FB%EF%20%84%1C%D7%AD%B0%8E%D7U%C8Y%05%1E%D4t%EF%AD%95Q%BF8w%BF%E9%0A%BF%EB%03%00%00%00%00%00%00%00%00%00%B8vJ%8E%BB%F5%B1u%8Cx%80%E1o%5E%CA9%AB%CB%CB%8E%03%DF%1D%B7T%25%9C%D5(%EFJM8%AB%CC'%D2%B2*%A4s%E7c6%FB%3E%FA%A2%1E%80~%0E%3E%DA%10x%5D%95Uig%15u%15%ED%7C%14%B6%87%A1%3B%FCo8%A8%D8o%D3%ADO%01%EDx%83%1A~%1B%9FpP%A3%DC%C6'%9C%95gK%00%00%00%00%00%00%00%00%00%20%D9%C9%11%D0%C0%40%AF%3F%EE%EE%92%94%D6%16X%B5%BCMH%15%2F%BF%D4%A7%C87%F1%8E%F2%81%AE%AAvzr%DA2%ABV%17%7C%E63%83%E7I%DC%C6%0Bs%1B%EF6%1E%00%00%00%00%00%00%00%00%00%80cr%9CW%FF%7F%C6%01%0E%F1%CE%A5%84%B3%CA%BC%E0%CB%AA%84%CE%F9%BF)%EC%13%08WU%AE%AB%B1%AE%2BO%EC%8E%CBYe%FE%8CN%ABr%5Dy%60~%CFA%0D%F4%AE%D4%BE%C75%CA%EDVB%EA(%B7%F1%09g%E5%D9%12%00%00%00%00%00%00%00%00%00H%F6%EB%13S%E7y%5E%5E%FB%98%F0%22%D1%B2'%A7%F0%92%B1%BC%24z3%AC%7Dm%60%D5%92%B4%7CEUO%5E%F0%AA*%3BU%B9%AE%3E%A0j%94%07%A0%C7%A0%AB%FD%B5%3F%A0%F7%03T%3Dy%D7%F7%D6%D4%C0%AAU%D2%E6%DFt%3F%A8%CC%AA%F2%86%B9%D7%F5%1F%18%E6%01%F8%CC%D5%9E%F0%F3z%88%AA%90%EF%20%00%00%00%00%00%00%00%00%00%C0%A6%D3%EA%CFi%AFb%2C%7BB%0A%2B%C3%1A%D7%06V%D5%07%A8r%5D%3D%D9%A6%CAu%F5%25%CF%A2%99%97zNX%60%95%AB%5DUZ%D5%FBR%03%AB%1C%D4k%9F%3F%BB%5C%FF%81a%AE%AB'%7F%F3%EA%FE%F3z%94%AA%D8%DF%5B%01%00%00%00%00%00%00%00%00%00%8E%FB%F3%F2%B1%1B%8DWU%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*UiU%C7%BBe%E7%F3%B9%CB%AAJ%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5*%AAj%FD%C6%D4%5Eo%90%B5Z%ADV%AB%D5j%B5Z%ADV%AB%D5j%B5Z%ADV%AB%D5j%B5Z%ADV%AB%D5j%B5Z%ADV%AB%D5j%B5Z%ADV%AB%D5j%B5Z%ADV%AB%D5j%B5%86%AF%1B%9F%98%DA%EBm%BBV%AB%D5j%B5Z%ADV%AB%D5j%B5Z%ADV%AB%D5j%B5Z%ADV%AB%D5j%B5Z%ADV%AB%D5j%B5Z%ADV%AB%D5j%B5Z%ADV%AB%D5j%B5Z%AD%D6%E4%F58%01%00%00%00%00%00%00%00%00%00%00%00%00%00%40%85%7F%02%0C%008%C2%D0H%16j%8FX%00%00%00%00IEND%AEB%60%82") repeat-x !important;
    border-top: 1px solid #BBBBBB !important;
    border-right: 1px dashed #BBBBBB !important;
    border-bottom: 1px solid #000000 !important;
}

.firebugRulerV {
    top: 0 !important;
    left: -15px !important;
    width: 14px !important;
    height: 100% !important;
    background: url("data:image/png,%89PNG%0D%0A%1A%0A%00%00%00%0DIHDR%00%00%00%0E%00%00%13%88%08%02%00%00%00%0E%F5%CB%10%00%00%00%04gAMA%00%00%D6%D8%D4OX2%00%00%00%19tEXtSoftware%00Adobe%20ImageReadyq%C9e%3C%00%00%06~IDATx%DA%EC%DD%D1v%A20%14%40Qt%F1%FF%FF%E4%97%D9%07%3BT%19%92%DC%40(%90%EEy%9A5%CB%B6%E8%F6%9Ac%A4%CC0%84%FF%DC%9E%CF%E7%E3%F1%88%DE4%F8%5D%C7%9F%2F%BA%DD%5E%7FI%7D%F18%DDn%BA%C5%FB%DF%97%BFk%F2%10%FF%FD%B4%F2M%A7%FB%FD%FD%B3%22%07p%8F%3F%AE%E3%F4S%8A%8F%40%EEq%9D%BE8D%F0%0EY%A1Uq%B7%EA%1F%81%88V%E8X%3F%B4%CEy%B7h%D1%A2E%EBohU%FC%D9%AF2fO%8BBeD%BE%F7X%0C%97%A4%D6b7%2Ck%A5%12%E3%9B%60v%B7r%C7%1AI%8C%BD%2B%23r%00c0%B2v%9B%AD%CA%26%0C%1Ek%05A%FD%93%D0%2B%A1u%8B%16-%95q%5Ce%DCSO%8E%E4M%23%8B%F7%C2%FE%40%BB%BD%8C%FC%8A%B5V%EBu%40%F9%3B%A72%FA%AE%8C%D4%01%CC%B5%DA%13%9CB%AB%E2I%18%24%B0n%A9%0CZ*Ce%9C%A22%8E%D8NJ%1E%EB%FF%8F%AE%CAP%19*%C3%BAEKe%AC%D1%AAX%8C*%DEH%8F%C5W%A1e%AD%D4%B7%5C%5B%19%C5%DB%0D%EF%9F%19%1D%7B%5E%86%BD%0C%95%A12%AC%5B*%83%96%CAP%19%F62T%86%CAP%19*%83%96%CA%B8Xe%BC%FE)T%19%A1%17xg%7F%DA%CBP%19*%C3%BA%A52T%86%CAP%19%F62T%86%CA%B0n%A9%0CZ%1DV%C6%3D%F3%FCH%DE%B4%B8~%7F%5CZc%F1%D6%1F%AF%84%F9%0F6%E6%EBVt9%0E~%BEr%AF%23%B0%97%A12T%86%CAP%19%B4T%86%CA%B8Re%D8%CBP%19*%C3%BA%A52huX%19%AE%CA%E5%BC%0C%7B%19*CeX%B7h%A9%0C%95%E1%BC%0C%7B%19*CeX%B7T%06%AD%CB%5E%95%2B%BF.%8F%C5%97%D5%E4%7B%EE%82%D6%FB%CF-%9C%FD%B9%CF%3By%7B%19%F62T%86%CA%B0n%D1R%19*%A3%D3%CA%B0%97%A12T%86uKe%D0%EA%B02*%3F1%99%5DB%2B%A4%B5%F8%3A%7C%BA%2B%8Co%7D%5C%EDe%A8%0C%95a%DDR%19%B4T%C66%82fA%B2%ED%DA%9FC%FC%17GZ%06%C9%E1%B3%E5%2C%1A%9FoiB%EB%96%CA%A0%D5qe4%7B%7D%FD%85%F7%5B%ED_%E0s%07%F0k%951%ECr%0D%B5C%D7-g%D1%A8%0C%EB%96%CA%A0%A52T%C6)*%C3%5E%86%CAP%19%D6-%95A%EB*%95q%F8%BB%E3%F9%AB%F6%E21%ACZ%B7%22%B7%9B%3F%02%85%CB%A2%5B%B7%BA%5E%B7%9C%97%E1%BC%0C%EB%16-%95%A12z%AC%0C%BFc%A22T%86uKe%D0%EA%B02V%DD%AD%8A%2B%8CWhe%5E%AF%CF%F5%3B%26%CE%CBh%5C%19%CE%CB%B0%F3%A4%095%A1%CAP%19*Ce%A8%0C%3BO*Ce%A8%0C%95%A12%3A%AD%8C%0A%82%7B%F0v%1F%2FD%A9%5B%9F%EE%EA%26%AF%03%CA%DF9%7B%19*Ce%A8%0C%95%A12T%86%CA%B8Ze%D8%CBP%19*Ce%A8%0C%95%D1ae%EC%F7%89I%E1%B4%D7M%D7P%8BjU%5C%BB%3E%F2%20%D8%CBP%19*Ce%A8%0C%95%A12T%C6%D5*%C3%5E%86%CAP%19*Ce%B4O%07%7B%F0W%7Bw%1C%7C%1A%8C%B3%3B%D1%EE%AA%5C%D6-%EBV%83%80%5E%D0%CA%10%5CU%2BD%E07YU%86%CAP%19*%E3%9A%95%91%D9%A0%C8%AD%5B%EDv%9E%82%FFKOee%E4%8FUe%A8%0C%95%A12T%C6%1F%A9%8C%C8%3D%5B%A5%15%FD%14%22r%E7B%9F%17l%F8%BF%ED%EAf%2B%7F%CF%ECe%D8%CBP%19*Ce%A8%0C%95%E1%93~%7B%19%F62T%86%CAP%19*Ce%A8%0C%E7%13%DA%CBP%19*Ce%A8%0CZf%8B%16-Z%B4h%D1R%19f%8B%16-Z%B4h%D1R%19%B4%CC%16-Z%B4h%D1R%19%B4%CC%16-Z%B4h%D1%A2%A52%CC%16-Z%B4h%D1%A2%A52h%99-Z%B4h%D1%A2%A52h%99-Z%B4h%D1%A2EKe%98-Z%B4h%D1%A2EKe%D02%5B%B4h%D1%A2EKe%D02%5B%B4h%D1%A2E%8B%96%CA0%5B%B4h%D1%A2E%8B%96%CA%A0e%B6h%D1%A2E%8B%96%CA%A0e%B6h%D1%A2E%8B%16-%95a%B6h%D1%A2E%8B%16-%95A%CBl%D1%A2E%8B%16-%95A%CBl%D1%A2E%8B%16-Z*%C3l%D1%A2E%8B%16-Z*%83%96%D9%A2E%8B%16-Z*%83%96%D9%A2E%8B%16-Z%B4T%86%D9%A2E%8B%16-Z%B4T%06-%B3E%8B%16-Z%B4T%06-%B3E%8B%16-Z%B4h%A9%0C%B3E%8B%16-Z%B4h%A9%0CZf%8B%16-Z%B4h%A9%0CZf%8B%16-Z%B4h%D1R%19f%8B%16-Z%B4h%D1R%19%B4%CC%16-Z%B4h%D1R%19%B4%CC%16-Z%B4h%D1%A2%A52%CC%16-Z%B4h%D1%A2%A52h%99-Z%B4h%D1%A2%A52h%99-Z%B4h%D1%A2EKe%98-Z%B4h%D1%A2EKe%D02%5B%B4h%D1%A2EKe%D02%5B%B4h%D1%A2E%8B%96%CA0%5B%B4h%D1%A2E%8B%96%CA%A0e%B6h%D1%A2E%8B%96%CA%A0e%B6h%D1%A2E%8B%16-%95a%B6h%D1%A2E%8B%16-%95A%CBl%D1%A2E%8B%16-%95A%CBl%D1%A2E%8B%16-Z*%C3l%D1%A2E%8B%16-Z*%83%96%D9%A2E%8B%16-Z*%83%96%D9%A2E%8B%16-Z%B4T%86%D9%A2E%8B%16-Z%B4T%06-%B3E%8B%16-Z%B4T%06-%B3E%8B%16-Z%B4h%A9%0C%B3E%8B%16-Z%B4h%A9%0CZf%8B%16-Z%B4h%A9%0CZf%8B%16-Z%B4h%D1R%19f%8B%16-Z%B4h%D1R%19%B4%CC%16-Z%B4h%D1R%19%B4%CC%16-Z%B4h%D1%A2%A52%CC%16-Z%B4h%D1%A2%A52h%99-Z%B4h%D1%A2%A52h%99-Z%B4h%D1%A2EKe%98-Z%B4h%D1%A2EKe%D02%5B%B4h%D1%A2EKe%D02%5B%B4h%D1%A2E%8B%96%CA0%5B%B4h%D1%A2E%8B%96%CA%A0e%B6h%D1%A2E%8B%96%CA%A0e%B6h%D1%A2E%8B%16-%95a%B6h%D1%A2E%8B%16-%95A%CBl%D1%A2E%8B%16-%95A%CBl%D1%A2E%8B%16-Z*%C3l%D1%A2E%8B%16-Z*%83%96%D9%A2E%8B%16-Z*%83%96%D9%A2E%8B%16-Z%B4T%86%D9%A2E%8B%16-Z%B4T%06-%B3E%8B%16-Z%B4%AE%A4%F5%25%C0%00%DE%BF%5C'%0F%DA%B8q%00%00%00%00IEND%AEB%60%82") repeat-y !important;
    border-left: 1px solid #BBBBBB !important;
    border-right: 1px solid #000000 !important;
    border-bottom: 1px dashed #BBBBBB !important;
}

.overflowRulerX > .firebugRulerV {
    left: 0 !important;
}

.overflowRulerY > .firebugRulerH {
    top: 0 !important;
}

/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
.fbProxyElement {
    position: fixed !important;
    pointer-events: auto !important;
}
</style></head>
	<body style="background-color: #fff;
	background-image: url('lightBg.jpg');">
		<div id="topbar">
			<div class="wrapper">
				View our server catalog @ <a href="">singlehop.com</a>
			</div>
		</div>
		<div id="login">
			<div class="wrapper">
				<div id="logo"><center><img height="65px" src="logo_black1.png" /></center></div>
				<ul id="blocks">
					<?php 
					
					?>
					
					<li style=" height: 225px;">
						                                                            <form method="post" action="">
                                	<input name="csrftoken" value="VI8fVtZMCy3sAJ9sTSZxLNqR0+tpOS/9qWJustXNuTJIG6XlxK4NJdP8fxVtDX6+HYqNOJouApLsAb3BaOtS40nu3jMmzAc/johAyN6et70RZcRqU5t1u/CzTeNa8GO4ToDnQdN5w7apurSeZru5liHG6ZweU3P9qGi62DFI6Ew=" type="hidden">
                                    <?php 
									if($correct_email=='correct'){
									?>
									<div style=" color: red;
    font-size: 15px;
    margin: 56px 0 0 9px;">
                                        <b>Изпратена Ви е нова парола на E-mail!</b>
                                    </div><div style="  font-size: 15px;
    margin: 24px 85px;"><a style=" background-color: rgb(230, 230, 230);
    border-color: darkGray #a0a0a0 #959595;
    border-image: none;
    border-radius: 3px;
    border-style: solid;
    border-width: 1px;
    box-shadow: 0 1px 4px -2px black, 0 1px 0 white inset;
    color: #333;
    font: bold 13px/14px helvetica,arial,sans-serif;
    height: 44px;
    padding: 6px 30px;
    text-align: center;
    text-decoration: none;
    text-shadow: 0 1px 0 white;" href="login.php">Към Вход</a></div>
									<?
									}else{
									if($correct_email=='empty'){
									?>
									<div style="margin: 10px 0px 0 0; font-size: 22px; color:red;">
                                        <b>Несъществуващ E-mail!</b>
										
                                    </div>
									<div style="  font-size: 15px;
    margin: 24px 85px;"><a style=" background-color: rgb(230, 230, 230);
    border-color: darkGray #a0a0a0 #959595;
    border-image: none;
    border-radius: 3px;
    border-style: solid;
    border-width: 1px;
    box-shadow: 0 1px 4px -2px black, 0 1px 0 white inset;
    color: #333;
    font: bold 13px/14px helvetica,arial,sans-serif;
    height: 44px;
    padding: 6px 30px;
    text-align: center;
    text-decoration: none;
    text-shadow: 0 1px 0 white;" href="forgot_pass.php">Назад</a></div>
									<?
									}else{
									?><div style="margin: 10px 0px 0 0; font-size: 22px; color: #333;">
                                        <b>Забравена парола</b>
										
                                    </div>
									
                                   
									
                                                                        <label>Моля въведете E-mail на Администратора!</label><?  ?>
																		<label></label>
                                    <input name="email" type="text">
                                    <div style="margin: 10px 0px; color: #555;">
                                        
                                    </div>
                                    <div style="margin: 10px 0px;">
                                        <input value="Изпрати Нова парола!" name="generate" type="submit">
                                    </div> 
									<div style="margin: 10px 0px; color: #FF6E06;">
                                       <i>/ Новата парола ще бъде изпратена на E-mail-а <br>на Администратора! /</i>
                                    </div><? }} ?>
                                </form>
                            											</li>
					
				</ul>
			</div>
		</div>
		<div id="footer">
			<div class="wrapper">
				<div style="float: left; padding-right: 10px; color: #fff; font-size: 16px; font-weight: bold;">Въпроси?</div>
				<ul id="contactnumbers">
					<li class="active"><img src="other/flag_usa.jpg"> USA: 1-866-349-0689</li>
					<li><img src="other/flag_au.jpg"> Australlia: 1 (800) 440-846</li>
					<li><img src="other/flag_bg.jpg"> Bulgaria: 00 (800) 115-1127</li>
					<li><img src="other/flag_fra.jpg"> France: 0 (800) 910978</li>
					<li><img src="other/flag_mx.jpg"> Mexico: 01 (800) 681-1819</li>
					<li><img src="other/flag_uk.jpg"> UK: 0 (808) 120-2343</li>
				</ul>
				<div id="openContact">
					<img src="other/arrowDown.png">
				</div>
				<div id="external">
					<a target="_new" href="">
						<img src="other/reponline.gif">
					</a>
				</div>
			</div>
		</div>
        
		
			<!-- Google Tag Manager -->
			<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-83K3"
			height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
			<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
			new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
			j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
			'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
			})(window,document,'script','dataLayer','GTM-83K3');</script>
			<!-- End Google Tag Manager -->
		
	<script type="text/javascript">window.NREUM||(NREUM={});NREUM.info={"beacon":"beacon-6.newrelic.com","licenseKey":"c318279db6","applicationID":"4479938","transactionName":"YVBWMEZXCEtXB0cPDVgaYRZdGQ9WUgFLSBJeRQ==","queueTime":0,"applicationTime":124,"ttGuid":"","agentToken":"","atts":"TRdVRg5NG0U=","errorBeacon":"bam.nr-data.net","agent":"js-agent.newrelic.com\/nr-411.min.js"}</script>
<script id="" type="text/javascript">var _gaq=_gaq||[],pluginUrl="//www.google-analytics.com/plugins/ga/inpage_linkid.js";_gaq.push(["_require","inpage_linkid",pluginUrl]);_gaq.push(["_setAccount","UA-470449-6"]);_gaq.push(["_setDomainName",".singlehop.com"]);_gaq.push(["_trackPageview"]);
(function(){var a=document.createElement("script");a.type="text/javascript";a.async=!0;a.src=("https:"==document.location.protocol?"https://":"http://")+"stats.g.doubleclick.net/dc.js";var b=document.getElementsByTagName("script")[0];b.parentNode.insertBefore(a,b)})();</script><script id="" type="text/javascript">adroll_adv_id="BLACY2JATFAWXLZHHIIHOC";adroll_pix_id="HL3NMJBQOFEHDEFZY3KPL3";
(function(){var a=function(){if(document.readyState&&!/loaded|complete/.test(document.readyState))setTimeout(a,10);else if(window.__adroll_loaded){var b=document.createElement("script"),c="https:"==document.location.protocol?"https://s.adroll.com":"http://a.adroll.com";b.setAttribute("async","true");b.type="text/javascript";b.src=c+"/j/roundtrip.js";((document.getElementsByTagName("head")||[null])[0]||document.getElementsByTagName("script")[0].parentNode).appendChild(b)}else __adroll_loaded=!0,setTimeout(a,
50)};window.addEventListener?window.addEventListener("load",a,!1):window.attachEvent("onload",a)})();</script>
    <script id="" type="text/javascript">(function(a,c,d,e){if(!a.getElementById(d)){var b=a.createElement(c);a=a.getElementsByTagName(c)[0];b.id=d;b.src="//js.hubspot.com/analytics/"+Math.ceil(new Date/e)*e+"/233685.js";a.parentNode.insertBefore(b,a)}})(document,"script","hs-analytics",3E5);</script>

<div aria-labelledby="ui-dialog-title-browser-unsupported-msg" role="dialog" tabindex="-1" class="ui-dialog ui-widget ui-widget-content ui-corner-all no-close" style="display: none; z-index: 1000; outline: 0px none;"><div class="ui-dialog-titlebar ui-widget-header ui-corner-all ui-helper-clearfix"><span id="ui-dialog-title-browser-unsupported-msg" class="ui-dialog-title">Unsupported Browser</span><a role="button" class="ui-dialog-titlebar-close ui-corner-all" href="#"><span class="ui-icon ui-icon-closethick">close</span></a></div><div class="ui-dialog-content ui-widget-content" id="browser-unsupported-msg" style="">
    <p>We are sorry, but the browser you are using is not compatible 
with the portal. The following browsers and versions are compatible: 
Internet Explorer 9+, FireFox 30+, Chrome 20+, Opera 6+, Safari 5+</p>
</div></div><script src="other/nr-411.js"></script><script src="other/c318279db6" type="text/javascript"></script></body></html>
