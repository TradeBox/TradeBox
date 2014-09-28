<?php session_start();
include('../DBconnect/dbconnect.php');
$userid=$_SESSION['user_id'];

function get_client_ip() {
    $ipaddress = '';
    if (getenv('HTTP_CLIENT_IP'))
        $ipaddress = getenv('HTTP_CLIENT_IP');
    else if(getenv('HTTP_X_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
    else if(getenv('HTTP_X_FORWARDED'))
        $ipaddress = getenv('HTTP_X_FORWARDED');
    else if(getenv('HTTP_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_FORWARDED_FOR');
    else if(getenv('HTTP_FORWARDED'))
       $ipaddress = getenv('HTTP_FORWARDED');
    else if(getenv('REMOTE_ADDR'))
        $ipaddress = getenv('REMOTE_ADDR');
    else
        $ipaddress = 'UNKNOWN';
    return $ipaddress;
}
	$browserAgent = $_SERVER['HTTP_USER_AGENT'];
	$ipadd=get_client_ip();
	mysql_query("INSERT INTO archive (who,action,ip,os) VALUES ('$userid','Потребителят Излезе от системата','$ipadd','$browserAgent')");

session_destroy();
header("Location: login.php"); 



?>