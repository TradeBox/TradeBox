<?php 
function delete($id="",$table="") {
 	mysql_query("DELETE FROM '$table' WHERE id='$id'");
}
?>