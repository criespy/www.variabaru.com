<?php
if($_GET['page']=='')
	$_GET['page'] = "home";
	
switch ($_GET['page']){

// default
default:
include('admin/home.php');
break; 

case $_GET['page']:
$page = $_GET['page'].".php";
include('admin/'.$page);
break;

// delete
case "delete":
include("delete.php?what=" . $_GET[what] . "&id=" . $_GET[id]);
break; 

}

?>