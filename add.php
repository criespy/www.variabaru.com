<?php
include("include/secure.php");
include("include/mine.php");

if($_GET['what']=="news"){
  $title = mysql_escape_string(trim($_POST['title']));
	$news = trim($_POST['news']);
  $news = str_replace("\n", "<br />", $news); 
  $img = $_FILES["img"]["name"];
  
  if(!empty($img)){
    $ext_tmp = explode(".",$img);
    $ext = strtolower($ext_tmp[1]);
    
    if ($_FILES["img"]["size"] < 1024000){
      $types = array('gif','jpg','jpeg','png');
      if (!in_array($ext,$types)){
        echo "<script>alert('Maaf, file berformat \"$ext\" tidak diperbolehkan!');self.location = 'javascript:history.back(-1)';</script>";
        exit();
      }
      else{
        $photo_file_name = "news".rand(00000000,99999999).".jpg";
        if (file_exists("images/news/" . $photo_file_name)) {
          $photo_file_name = "news".rand(00000000,99999999).".jpg";
        }
        $hasil = move_uploaded_file($_FILES["img"]["tmp_name"], "images/news/" . $photo_file_name);      
      }
    }
    else{
      echo "<script>alert('Maaf, ukuran Image tidak boleh lebih besar dari 1MB!');self.location = 'javascript:history.back(-1)';</script>";
      exit();
    }
  }
  
  $sql = "INSERT INTO tblnews SET title = '$title', news = '$news', img = '$photo_file_name', tgl = DATE(NOW())";
	mysql_query($sql);  
  echo "<script>self.location = 'admin.php?page=news';</script>"; 
}
elseif($_GET['what']=="product"){
  $partnumber = mysql_escape_string(trim($_POST['partnumber']));
  $brand = mysql_escape_string(trim($_POST['brand']));
  $category = mysql_escape_string(trim($_POST['category']));
  $partname = mysql_escape_string(trim($_POST['partname']));
  $price = mysql_escape_string(trim($_POST['price']));
  $stock = mysql_escape_string(trim($_POST['stock']));
  $type = mysql_escape_string(trim($_POST['type']));
  $img = $_FILES["img"]["name"];
	$ket = trim($_POST['ket']);
  $ket = str_replace("\n", "<br />", $ket); 
  
  if(!empty($img)){
    $ext_tmp = explode(".",$img);
    $ext = strtolower($ext_tmp[1]);
    
    if ($_FILES["img"]["size"] < 1024000){
      $types = array('gif','jpg','jpeg','png');
      if (!in_array($ext,$types)){
        echo "<script>alert('Maaf, file berformat \"$ext\" tidak diperbolehkan!');self.location = 'javascript:history.back(-1)';</script>";
        exit();
      }
      else{
        $photo_file_name = "prod".rand(00000000,99999999).".jpg";
        if (file_exists("images/products/" . $photo_file_name)) {
          $photo_file_name = "prod".rand(00000000,99999999).".jpg";
        }
        $hasil = move_uploaded_file($_FILES["img"]["tmp_name"], "images/products/" . $photo_file_name);      
      }
    }
    else{
      echo "<script>alert('Maaf, ukuran Image tidak boleh lebih besar dari 1MB!');self.location = 'javascript:history.back(-1)';</script>";
      exit();
    }
  }  
  $sql = "INSERT INTO tblproduct SET partnumber = '$partnumber', brand = '$brand', category = '$category', 
					partname = '$partname', price = '$price', stock = '$stock', type = '$type', img = '$photo_file_name', ket = '$ket'";
	mysql_query($sql);  
  echo "<script>self.location = 'admin.php?page=product';</script>"; 
}
elseif($_GET['what']=="brosur"){
  $title = mysql_escape_string(trim($_POST['title']));
	$content = trim($_POST['content']);
  $content = str_replace("\n", "<br />", $content); 
  $img = $_FILES["img"]["name"];
  
  if(!empty($img)){
    $ext_tmp = explode(".",$img);
    $ext = strtolower($ext_tmp[1]);
    
    if ($_FILES["img"]["size"] < 1024000){
			$photo_file_name = "catalogue".rand(0000,9999).".".$ext;
			if (file_exists("brosur/" . $photo_file_name)) {
				$photo_file_name = "catalogue".rand(0000,9999).".".$ext;
			}
			$hasil = move_uploaded_file($_FILES["img"]["tmp_name"], "brosur/" . $photo_file_name);
    }
    else{
      echo "<script>alert('Maaf, ukuran file tidak boleh lebih besar dari 1MB!');self.location = 'javascript:history.back(-1)';</script>";
      exit();
    }
  }
  
  $sql = "INSERT INTO tblbrosur SET title = '$title', content = '$content', filename = '$photo_file_name', tgl = DATE(NOW())";
	mysql_query($sql);  
  echo "<script>self.location = 'admin.php?page=brosur';</script>"; 
}
elseif($_GET['what']=="homeproduct"){
  $name = mysql_escape_string(trim($_POST['name']));
  $category = mysql_escape_string(trim($_POST['category']));
  $brand = mysql_escape_string(trim($_POST['brand']));
  $price = mysql_escape_string(trim($_POST['price']));
  $stock = mysql_escape_string(trim($_POST['stock']));
  $type = mysql_escape_string(trim($_POST['type']));
  $img = $_FILES["img"]["name"];
	$detail = trim($_POST['detail']);
  $detail = str_replace("\n", "<br />", $detail); 
  
  if(!empty($img)){
    $ext_tmp = explode(".",$img);
    $ext = strtolower($ext_tmp[1]);
    
    if ($_FILES["img"]["size"] < 1024000){
      $types = array('gif','jpg','jpeg','png');
      if (!in_array($ext,$types)){
        echo "<script>alert('Maaf, file berformat \"$ext\" tidak diperbolehkan!');self.location = 'javascript:history.back(-1)';</script>";
        exit();
      }
      else{
        $photo_file_name = "otherprod".rand(00000000,99999999).".jpg";
        if (file_exists("images/otherprod/" . $photo_file_name)) {
          $photo_file_name = "otherprod".rand(00000000,99999999).".jpg";
        }
        $hasil = move_uploaded_file($_FILES["img"]["tmp_name"], "images/otherprod/" . $photo_file_name);      
      }
    }
    else{
      echo "<script>alert('Maaf, ukuran Image tidak boleh lebih besar dari 1MB!');self.location = 'javascript:history.back(-1)';</script>";
      exit();
    }
  }  
  $sql = "INSERT INTO tbltodayitem SET name = '$name', brand = '$brand', 
					category = '$category', price = '$price', stock = '$stock', 
					type = '$type', img = '$photo_file_name', detail = '$detail'";
	mysql_query($sql);  
  echo "<script>self.location = 'admin.php?page=homeproduct';</script>"; 
}
elseif($_GET['what']=="cat"){
  $cat = mysql_escape_string(trim($_POST['cat']));
  $sql = "INSERT INTO tblcat SET cat = '$cat'";
	mysql_query($sql);  
  echo "<script>self.location = 'admin.php?page=category';</script>"; 
}
elseif($_GET['what']=="network"){
  $cabang = mysql_escape_string(trim($_POST['cabang']));
  $alamat = mysql_escape_string(trim($_POST['alamat']));
  $telp = mysql_escape_string(trim($_POST['telp']));
  $prov = mysql_escape_string(trim($_POST['prov']));
  $sql = "INSERT INTO tblnetwork SET cabang = '$cabang', alamat = '$alamat', telp = '$telp', prov = '$prov'";
	mysql_query($sql);  
  echo "<script>self.location = 'admin.php?page=network';</script>"; 
}
elseif($_GET['what']=="service"){
  $title = mysql_escape_string(trim($_POST['title']));
	$content = trim($_POST['content']);
  $content = str_replace("\n", "<br />", $content); 
  $img = $_FILES["img"]["name"];
  
  if(!empty($img)){
    $ext_tmp = explode(".",$img);
    $ext = strtolower($ext_tmp[1]);
    
    if ($_FILES["img"]["size"] < 1024000){
      $types = array('gif','jpg','jpeg','png');
      if (!in_array($ext,$types)){
        echo "<script>alert('Maaf, file berformat \"$ext\" tidak diperbolehkan!');self.location = 'javascript:history.back(-1)';</script>";
        exit();
      }
      else{
        $photo_file_name = "service".rand(00000000,99999999).".jpg";
        if (file_exists("images/" . $photo_file_name)) {
          $photo_file_name = "service".rand(00000000,99999999).".jpg";
        }
        $hasil = move_uploaded_file($_FILES["img"]["tmp_name"], "images/" . $photo_file_name);      
      }
    }
    else{
      echo "<script>alert('Maaf, ukuran Image tidak boleh lebih besar dari 1MB!');self.location = 'javascript:history.back(-1)';</script>";
      exit();
    }
  }
  
  $sql = "INSERT INTO tblservice SET title = '$title', content = '$content', img = '$photo_file_name'";
	mysql_query($sql);  
  echo "<script>self.location = 'admin.php?page=service';</script>"; 
}
?>
