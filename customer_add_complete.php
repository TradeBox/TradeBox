  <?php
  $name=$_POST['name']; 
  $name_en= $_POST['name_en']; 
  $eik= $_POST['eik'];
  $dds_number= $_POST['dds_number'];
  $address=$_POST['address']; 
  $address_en=$_POST['address_en']; 
  $city=$_POST['city']; 
  $city_en=$_POST['city_en']; 
  $region=$_POST['region']; 
  $region_en=$_POST['region_en'];
  $post_code=$_POST['post_code']; 
  $country=$_POST['country']; 
  $country_en=$_POST['country_en']; 
  $manager=$_POST['manager']; 
  $manager_en=$_POST['manager_en']; 
  
  $contact_name=$_POST['contact_name']; 
  $contact_phone=$_POST['contact_phone'];
  $contact_phone_2=$_POST['contact_phone_2']; 
  $contact_fax=$_POST['contact_fax']; 
  $contact_email=$_POST['contact_email']; 
  $contact_website=$_POST['contact_website'];   
  $contact_info=$_POST['contact_info'];   
  
  $iban=$_POST['iban'];   
  $bic_code=$_POST['bic_code']; 
  $bank_name=$_POST['bank_name'];   
  $grupa=$_POST['grupa'];

  mysql_query("INSERT INTO customers (name , name_en , eik , dds_number , address , address_en , city , city_en , region , region_en , post_code , country , country_en , manager , manager_en , contact_name , contact_phone , contact_phone_2 , contact_fax , contact_email , contact_website , contact_info , iban , bic_code , bank_name, grupa )
  VALUES 
('$name' , '$name_en' , '$eik' , $dds_number , '$address' , '$address_en' , '$city' , '$city_en' , '$region' , '$region_en' , '$post_code' , '$country' , '$country_en' , '$manager' , '$manager_en' , '$contact_name' , '$contact_phone' , '$contact_phone_2' , '$contact_fax' , '$contact_email' , '$contact_website' , '$contact_info' , '$iban' , '$bic_code' , '$bank_name' , '$grupa' )") or die (mysql_error());