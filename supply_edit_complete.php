  <?php if (!empty($_POST['c_name']) AND !empty($_POST['city'] )) {
  
  
  $id = $_GET['id'];
  $name=$_POST['c_name']; 
  $eik= $_POST['eik'];
  $dds_number= $_POST['dds_number'];
  $address=$_POST['address']; 
  $city=$_POST['city']; 
  $manager=$_POST['manager']; 

  
  $contact_name=$_POST['contact_name']; 
  $contact_phone=$_POST['contact_phone'];
  $contact_phone_2=$_POST['contact_phone_2']; 
  $contact_fax=$_POST['contact_fax']; 
  $contact_email=$_POST['contact_email']; 
  $contact_website=$_POST['contact_website'];   
  $contact_info=$_POST['contact_info'];   
  $region=$_POST['region']; 
  $post_code=$_POST['post_code']; 
  $country=$_POST['country']; 
  
  $iban=$_POST['iban'];   
  $bic_code=$_POST['bic_code']; 
  $bank_name=$_POST['bank_name'];   
  
  $grupa=$_POST['grupa'];
  $supply_type = $_POST['supply_type'];
  $who_reg = $_SESSION['user_id'];

  //Проверка за вече съществуваща фирма 
  $con = mysql_query("SELECT id FROM suppliers WHERE eik = '$eik' AND id != $id"); $check = mysql_num_rows($con);
  if ($check == 0) {
mysql_query
  ("UPDATE suppliers SET name = '$name', eik = '$eik', dds_number = '$dds_number' , address='$address' , city='$city' , region='$region' , post_code='$post_code' , country='$country', manager='$manager', contact_name='$contact_name' , contact_phone='$contact_phone', contact_phone_2='$contact_phone_2', contact_fax='$contact_fax' , contact_email='$contact_email' , contact_website='$contact_website' , contact_info='$contact_info', grupa='$grupa' WHERE id = $id") or die (mysql_error());
$reg_complete = 1;
add_to_archive("Потребителят Редактира клиент: № $id - $name.");
}
   } 
   
   
if (!empty($_POST['add_comment'])) {
  $add_comment = $_POST['add_comment']; 
  $id = $_GET['id'];
  $who = $_SESSION['user_id'];
  mysql_query("INSERT INTO supply_comment (supply_id, comment, date, who) VALUES ('$id', '$add_comment', NOW(), '$who')") or die (mysql_error());
  add_to_archive("Потребителят добави бележка към клиент: № $id - $name.");
 }  
   
      ?>