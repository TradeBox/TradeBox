<?php
$link = mysql_connect('localhost', 'tradebox_Trade','x*BhWrG@-WKo') or die (mysql_error());
mysql_set_charset('utf8',$link);
$db_selected = mysql_select_db('tradebox_database', $link) or die (mysql_error());
?>