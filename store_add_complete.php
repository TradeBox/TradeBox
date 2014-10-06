  <?php if (!empty($_POST['name']) AND !empty($_POST['city'] )) {
  $name=$_POST['name']; 
  $address=$_POST['address']; 
  $city=$_POST['city']; 
  $phone=$_POST['phone']; 

  $warehouse = $_POST['warehouse'];
  
  $weekh=$_POST['weekh']; 
  $weekm=$_POST['weekm'];
  $weekh2=$_POST['weekh2']; 
  $weekm2=$_POST['weekm2']; 
  
  $sath=$_POST['sath']; 
  $satm=$_POST['satm'];
  $sath2=$_POST['sath2']; 
  $satm2=$_POST['satm2']; 
  
  
  $sunh=$_POST['sunh']; 
  $sunm=$_POST['sunm'];
  $sunh2=$_POST['sunh2']; 
  $sunm2=$_POST['sunm2'];  
  
$allowedExts = array("gif", "jpeg", "jpg", "png");
$temp = explode(".", $_FILES["file"]["name"]);
$extension = end($temp);

if ((($_FILES["file"]["type"] == "image/gif")
|| ($_FILES["file"]["type"] == "image/jpeg")
|| ($_FILES["file"]["type"] == "image/jpg")
|| ($_FILES["file"]["type"] == "image/pjpeg")
|| ($_FILES["file"]["type"] == "image/x-png")
|| ($_FILES["file"]["type"] == "image/png"))
&& ($_FILES["file"]["size"] < 200000)
&& in_array($extension, $allowedExts)) {
  if ($_FILES["file"]["error"] > 0) {
    //echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
  } else {
    //echo "Upload: " . $_FILES["file"]["name"] . "<br>";
   // echo "Type: " . $_FILES["file"]["type"] . "<br>";
   // echo "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
    //echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br>";
    if (file_exists("store-images/" . $_FILES["file"]["name"])) {
    //  echo $_FILES["file"]["name"] . " already exists. ";
    } else {
      move_uploaded_file($_FILES["file"]["tmp_name"],
      "store-images/" . $_FILES["file"]["name"]);
  $img = "store-images/" . $_FILES["file"]["name"];
    }
  }
} else {
 // echo "Invalid file";
}

mysql_query
  ("INSERT INTO stores (name , city , address ,phone, img , warehouse , date , open_time_week , open_time_sat, open_time_sun) 
     VALUES  ('$name', '$city' , '$address' ,'$phone', '$img', $warehouse, NOW(), 'от $weekh:$weekm до $weekh2:$weekm2', 'от $sath:$satm до $sath2:$satm2',  'от $sunh:$sunm до $sunh2:$sunm2')") or die (mysql_error());
$reg_complete = 1;
add_to_archive("Добави обект: $name .");


   } 
      ?>