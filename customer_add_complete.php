  <?php if (!empty($_POST['name']) AND !empty($_POST['city'] )) {
  $name=$_POST['name']; 
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
  $customer_type = $_POST['customer_type'];
  $who_reg = $_SESSION['user_id'];

  //Проверка за вече съществуваща фирма 
  $con = mysql_query("SELECT id FROM customers WHERE eik = '$eik'"); $check = mysql_num_rows($con);

  if ($check == 0) {
mysql_query
  ("INSERT INTO customers (name , eik , dds_number , address , city , region , post_code , country, manager, contact_name , contact_phone, contact_phone_2, contact_fax , contact_email , contact_website , contact_info , iban , bic_code , bank_name, grupa, reg_date, dude_or_not, who_reg) 
     VALUES  
      ('$name', '$eik' , '$dds_number' , '$address', '$city', '$region', '$post_code', '$country', '$manager', '$contact_name' , '$contact_phone' , '$contact_phone_2' , '$contact_fax', '$contact_email', '$contact_website', '$contact_info', '$iban', '$bic_code', '$bank_name', '$grupa', NOW(), '$customer_type', '$who_reg')") or die (mysql_error());
$reg_complete = 1;
add_to_archive("Добави нов клиент.");
}

   } 
      ?>