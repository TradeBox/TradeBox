<?php
function add_to_archive($action="Неразпознато действие") {
  function get_client_ip_2() {
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
	$ipadd=get_client_ip_2();
	$who = $_SESSION['user_id'];
  
 	mysql_query("INSERT INTO archive (who,action,ip,os) VALUES ('$who','$action','$ipadd','$browserAgent')");

}
?>