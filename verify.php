<?php 
session_start();
$page = "index";

if($_POST['username']!='' && $_POST['passwd']!=''){
	include("include/mine.php");
	$username = mysql_escape_string(trim($_POST['username']));
	$encpass = base64_encode(mysql_escape_string(trim($_POST['passwd'])));
  
  $sql       = mysql_query("SELECT id, name FROM tblboard where email = '$username' AND password = '$encpass' AND type = 2");
  $field = mysql_fetch_array($sql);	

	if($username=='admin' && $encpass=='cm90YXJ5MTIz'){
    $_SESSION['rot_id']=1;
    $_SESSION['rot_admin']=1;
    $_SESSION['rot_username']='admin';
    echo "<script>window.location = 'index.php'</script>";
	}
  elseif($username=='rotarac' && $encpass=='MTIzNDU='){
    $_SESSION['rot_admin2']=1;
    $_SESSION['rot_username']='Admin Rotarac';
    echo "<script>window.location = 'index.php'</script>";
	}
	else{
    if($field[id]!=''){
      $_SESSION['rot_id']=$field[id];
      $_SESSION['rot_username']=$field[name];
      echo "<script>window.location = 'index.php'</script>";
    }
    else
      echo "<script>document.location = '".$page.".php?err=2'</script>";
	}
}
else{
  echo "<script>document.location = '".$page.".php?err=2'</script>";
}
?>