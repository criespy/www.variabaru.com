<?php
//copyright by: IndoBizMedia
include("include/mine.php");
session_start();
$jml = count($_SESSION['vb_cart']);
if($_POST['submit']=='Check Out' && $jml>0){
	$sql = mysql_query("SELECT * FROM tblconfig where id =1");
	$field = mysql_fetch_array($sql);
	$from='order@variabaru.com';
	$to=$field[email];
	$subject="VariaBaru Order ".date("d - M - Y");
	$body="<b>VariaBaru Order:</b> <br/>
					Buyer Name: $_POST[name] <br/>
					Buyer Address: $_POST[address] <br />
					Buyer Email: $_POST[email] <br />
					Buyer Phone: $_POST[phone] <br />
					Buyer Note: $_POST[note] <br /><br />
					Order Details: <br />
					<table border=\"1\" cellspacing=\"0\" cellpadding=\"2\"><tr style=\"font-weight:bold\"><td>No</td><td>Nama Barang</td><td>Kategori</td><td>Merk</td><td>Quantity</td></tr>";
	for($k=0;$k<$jml;$k++){
		$z = $k+1;
		$body.="<tr><td>".$z."</td><td>".$_SESSION['vb_cart'][$k][1]."</td><td>".$_SESSION['vb_cart'][$k][2]."</td><td>".$_SESSION['vb_cart'][$k][3]."</td><td>".$_SESSION['vb_cart'][$k][5]."</td></tr>";
	}
	$body.="</table>";
	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	$headers .= "From: $from";
	mail($to,$subject,$body,$headers);
	
	$name = mysql_escape_string(trim($_POST['name']));
  $address = mysql_escape_string(trim($_POST['address']));
  $email = mysql_escape_string(trim($_POST['email']));
  $phone = mysql_escape_string(trim($_POST['phone']));
	$flag = 2;
  $sql2 = "INSERT INTO tblcustomer SET name = '$name', address = '$address', email = '$email', phone = '$phone', flag = '$flag', d_posting = DATE(NOW())";
	mysql_query($sql2);
	$_SESSION['vb_cart'] = array();
	header("location:index.php?page=product");
}
else
	header("location:index.php?page=cart");
?>