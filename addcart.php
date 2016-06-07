<?php
//copyright by: IndoBizMedia
session_start();
if($_POST['tipe']!=''){
	if(!is_array($_SESSION['vb_cart']))
		$_SESSION['vb_cart'] = array();
	//tipe, namabrg, cat, brand, price, qty, img, detail
	$entry = array($_POST['tipe'],$_POST['namabrg'],$_POST['cat'],$_POST['brand'],$_POST['price'],$_POST['qty'],$_POST['img'],$_POST['detail']);
	array_push($_SESSION['vb_cart'], $entry);

	if($_GET['pop']==1)
		echo "<script>parent.history.back();window.opener.location = 'index.php?page=cart';window.close();</script>";
	else
		header("location:index.php?page=cart");
	//print_r($_SESSION['vb_cart']);
	//session_destroy();
}
elseif($_GET['act']=='reset'){
	$_SESSION['vb_cart'] = array();
	header("location:index.php");
}
elseif($_GET['act']=='del'){
	array_splice($_SESSION['vb_cart'], $_GET['id'], 1);
	header("location:index.php?page=cart");
}
else
	header("location:index.php?page=cart");
?>