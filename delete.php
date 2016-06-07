<?php
session_start();
include("include/secure.php");
include("include/mine.php");

if($_GET['what']=="news"){
  $sql = "DELETE FROM tblnews WHERE id = '$_GET[id]'";
  mysql_query($sql);
  echo "<script>self.location = 'admin.php?page=news';</script>"; 
}
elseif($_GET['what']=="product"){
  $sql = "DELETE FROM tblproduct WHERE id = '$_GET[id]'";
  mysql_query($sql);
  echo "<script>self.location = 'admin.php?page=product';</script>"; 
}
elseif($_GET['what']=="brosur"){
  $sql = "DELETE FROM tblbrosur WHERE id = '$_GET[id]'";
  mysql_query($sql);
  echo "<script>self.location = 'admin.php?page=brosur';</script>"; 
}
elseif($_GET['what']=="cat"){
  $sql = "DELETE FROM tblcat WHERE id = '$_GET[id]'";
  mysql_query($sql);
  echo "<script>self.location = 'admin.php?page=category';</script>"; 
}
elseif($_GET['what']=="network"){
  $sql = "DELETE FROM tblnetwork WHERE id = '$_GET[id]'";
  mysql_query($sql);
  echo "<script>self.location = 'admin.php?page=network';</script>"; 
}
elseif($_GET['what']=="service"){
  $sql = "DELETE FROM tblservice WHERE id = '$_GET[id]'";
  mysql_query($sql);
  echo "<script>self.location = 'admin.php?page=service';</script>"; 
}
elseif($_GET['what']=="homeproduct"){
  $sql = "DELETE FROM tbltodayitem WHERE id = '$_GET[id]'";
  mysql_query($sql);
  echo "<script>self.location = 'admin.php?page=homeproduct';</script>"; 
}
elseif($_GET['what']=="customer"){
  $sql = "DELETE FROM tblcustomer WHERE id = '$_GET[id]'";
  mysql_query($sql);
  echo "<script>self.location = 'admin.php?page=customer';</script>"; 
}
?>