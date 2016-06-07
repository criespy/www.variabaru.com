<?php
$sql4 = "DELETE FROM tblcounter WHERE DATE(tgl) < DATE(NOW())";
mysql_query($sql4);

$sql = mysql_query("SELECT count(1) as jml FROM tblcounter where DATE(tgl) = DATE(NOW()) AND ip = '".$_SERVER["REMOTE_ADDR"]."'");
$field = mysql_fetch_array($sql);

if($field[jml]==0){
  $sql2 = "INSERT INTO tblcounter SET ip = '".$_SERVER['REMOTE_ADDR']."', tgl = NOW()";
  mysql_query($sql2);
  
  $sql3 = "UPDATE tblconfig SET counter = counter+1 where id = 1";
  mysql_query($sql3);
}

$sql5 = mysql_query("SELECT counter FROM tblconfig WHERE id = 1");
$field5 = mysql_fetch_array($sql5);
$visitor = 1000+$field5[counter];
?>