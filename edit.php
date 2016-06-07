<?php
session_start();
include("include/secure.php");
include("include/mine.php");

if($_GET['what']=="home"){
	$newarrival = trim($_POST['newarrival']);
  $newarrival = str_replace("\n", "<br />", $newarrival);
	$runtext = trim($_POST['runtext']);
  $runtext = str_replace("\n", "<br />", $runtext);
	
	$txt_img1 = trim($_POST['txt_img1']);
	$txt_img2 = trim($_POST['txt_img2']);
	$txt_img3 = trim($_POST['txt_img3']);
	$txt_img4 = trim($_POST['txt_img4']);

	if($_FILES["img1"]["name"]!=''){
		$img_file_name = "home".rand(00000000,99999999).".jpg";
		if (file_exists("images/sparepart/" . $img_file_name)) {
			$img_file_name = "home".rand(00000000,99999999).".jpg";
		}
		$hasil = move_uploaded_file($_FILES["img1"]["tmp_name"], "images/sparepart/" . $img_file_name);    
		$img1 = " , img1 = '".$img_file_name."' ";
	}
	
	if($_FILES["img2"]["name"]!=''){
		$img2_file_name = "home".rand(00000000,99999999).".jpg";
		if (file_exists("images/sparepart/" . $img2_file_name)) {
			$img2_file_name = "home".rand(00000000,99999999).".jpg";
		}
		$hasil = move_uploaded_file($_FILES["img2"]["tmp_name"], "images/sparepart/" . $img2_file_name);    
		$img2 = " , img2 = '".$img2_file_name."' ";
	}
	
	if($_FILES["img3"]["name"]!=''){
		$img3_file_name = "home".rand(00000000,99999999).".jpg";
		if (file_exists("images/sparepart/" . $img3_file_name)) {
			$img3_file_name = "home".rand(00000000,99999999).".jpg";
		}
		$hasil = move_uploaded_file($_FILES["img3"]["tmp_name"], "images/sparepart/" . $img3_file_name);    
		$img3 = " , img3 = '".$img3_file_name."' ";
	}
	
	if($_FILES["img4"]["name"]!=''){
		$img4_file_name = "home".rand(00000000,99999999).".jpg";
		if (file_exists("images/sparepart/" . $img4_file_name)) {
			$img4_file_name = "home".rand(00000000,99999999).".jpg";
		}
		$hasil = move_uploaded_file($_FILES["img4"]["tmp_name"], "images/sparepart/" . $img4_file_name);    
		$img4 = " , img4 = '".$img4_file_name."' ";
	}
	
	if($_FILES["bannermid"]["name"]!=''){
		$bannermid_file_name = "ads".rand(00000000,99999999).".jpg";
		if (file_exists("images/" . $bannermid_file_name)) {
			$bannermid_file_name = "ads".rand(00000000,99999999).".jpg";
		}
		$hasil = move_uploaded_file($_FILES["bannermid"]["tmp_name"], "images/" . $bannermid_file_name);    
		$bannermid = " , bannermid = '".$bannermid_file_name."' ";
	}
	
	$sql = "UPDATE tblhome SET newarrival = '$newarrival', runtext = '$runtext', txt_img1 = '$txt_img1', txt_img2 = '$txt_img2', txt_img3 = '$txt_img3', txt_img4 = '$txt_img4' $img1 $img2 $img3 $img4 $bannermid   where id = 1";
	mysql_query($sql);
  echo "<script>self.location = 'admin.php?page=home';</script>"; 
}
elseif($_GET['what']=="about"){
	$about = trim($_POST['about']);
  $about = str_replace("\n", "<br />", $about);

	if($_FILES["imgabout"]["name"]!=''){
		$imgabout_file_name = "about".rand(00000000,99999999).".jpg";
		if (file_exists("images/" . $imgabout_file_name)) {
			$imgabout_file_name = "about".rand(00000000,99999999).".jpg";
		}
		$hasil = move_uploaded_file($_FILES["imgabout"]["tmp_name"], "images/" . $imgabout_file_name);    
		$imgabout = " , imgabout = '".$imgabout_file_name."' ";
	}
		
	$sql = "UPDATE tblhome SET about = '$about' $imgabout where id = 1";
	mysql_query($sql);
  echo "<script>self.location = 'admin.php?page=about';</script>"; 
}
elseif($_GET['what']=="config"){
	$username = mysql_escape_string(trim($_POST['username']));
	$email = mysql_escape_string(trim($_POST['email']));
	$password = base64_encode(mysql_escape_string(trim($_POST['password'])));
	$address = trim($_POST['address']);
  $address = str_replace("\n", "<br />", $address);

	if($_FILES["imgcontact"]["name"]!=''){
		$imgcontact_file_name = "contact".rand(00000000,99999999).".jpg";
		if (file_exists("images/" . $imgcontact_file_name)) {
			$imgcontact_file_name = "contact".rand(00000000,99999999).".jpg";
		}
		$hasil = move_uploaded_file($_FILES["imgcontact"]["tmp_name"], "images/" . $imgcontact_file_name);    
		$imgcontact = " , imgcontact = '".$imgcontact_file_name."' ";
	}
		
	$sql = "UPDATE tblconfig SET email = '$email', username = '$username', password = '$password', address = '$address' $imgcontact where id = 1";
	mysql_query($sql);
  echo "<script>self.location = 'admin.php?page=config';</script>"; 
}
?>
