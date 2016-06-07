<?php
$hal = array('home','about','product','service','news','contact','download','special','hot','sale','network','sale','service_det','cart','payment','homeinstall','search');
if(in_array($_GET['page'],$hal)){
	if($_GET['page']=='')
		$_GET['page'] = "home";
		
	switch ($_GET['page']){

	// default
	default:
	include('content/home.php');
	break; 

	case $_GET['page']:
	$page = $_GET['page'].".php";
	include('content/'.$page);
	break;

	// delete
	case "delete":
	include("delete.php?what=" . $_GET[what] . "&id=" . $_GET[id]);
	break; 

	}
}
else{
	include('content/home.php');
}
?>