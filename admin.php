<?php
include("include/secure.php");
if ($_GET[page]=='')
  echo "<script>window.location = 'admin.php?page=home'</script>";
include("include/mine.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<script language="javascript">
function openWin(theURL,winName,features) {
    window.open(theURL,winName,features);
}
function setfocus(field,e){
	if (e.keyCode == 13) document.getElementById(field).focus();
}
function setfinish(field,e){
	if (e.keyCode == 13) document.getElementById(field).click();
}
var win = null;
function NewWindow(mypage,myname,w,h,scroll,size){
LeftPosition = (screen.width) ? (screen.width-w)/2 : 0;
TopPosition = (screen.height) ? (screen.height-h)/2 : 0;
settings =
'height='+h+',width='+w+',top='+TopPosition+',left='+LeftPosition+',scrollbars='+scroll+',resizable='+size+''
win = window.open(mypage,myname,settings)
}
</script>
<script language="JavaScript" type="text/javascript" src="Script/script.js?rc2p"></script>	
<script language="JavaScript" type="text/javascript" src="Script/menu.js?rc2p"></script>	
<title>Varia Baru :: Admin</title>
<!--css main site-->
<link rel="stylesheet" type="text/css" href="images/style.css?rc2" />
<!--css menu2 & daleman-->
<link rel="stylesheet" type="text/css" href="images/site.css?rc2" />
</head>
<body style="background:#CFD4DA url(images/background2.jpg) repeat-x scroll 0%;">

<DIV id=loadingmsg style="BORDER-RIGHT: 1px ridge; BORDER-TOP: 1px ridge; Z-INDEX: 3; LEFT: 421px; BORDER-LEFT: 1px ridge; WIDTH: 251px; BORDER-BOTTOM: 1px ridge; POSITION: absolute; TOP: 153px; HEIGHT: 125px; BACKGROUND-COLOR: #eeeeee">
<CENTER><BR><FONT face=verdana size=3><B><img src="images/loading.gif" width="64" height="64" border="0"><br>
Please Wait</span><br>Loading In Progress...  </B></FONT><BR><BR></CENTER></DIV>

<div id="mainframe">
	<div id="header" class="clearfix" align="center">
		<!--<b></b>-->
	</div>
	<div id="frame">
		<div id="toparea"></div>			
		<div id="bodyarea">
	<h2 class="where" align="center"><strong>Varia Baru :: Administration</strong><br>Welcome Admin</strong></h2>

	<div id="sidemenu">    
		<h3>Manage</h3>
		<ul id="submenu">
			<li <?php if ($_GET[page]=='home') { ?>class="active"<?php } ?>><a href="admin.php?page=home" title="home">Home</a></li>
      <li <?php if ($_GET[page]=='about') { ?>class="active"<?php } ?>><a href="admin.php?page=about" title="about">About</a></li>
      <li <?php if ($_GET[page]=='product') { ?>class="active"<?php } ?>><a href="admin.php?page=product" title="product">Product</a></li>
      <li <?php if ($_GET[page]=='news') { ?>class="active"<?php } ?>><a href="admin.php?page=news" title="news">News</a></li>
      <li <?php if ($_GET[page]=='brosur') { ?>class="active"<?php } ?>><a href="admin.php?page=brosur" title="brosur">Brosur</a></li>
      <li <?php if ($_GET[page]=='homeproduct') { ?>class="active"<?php } ?>><a href="admin.php?page=homeproduct" title="homeproduct">Other Product</a></li>
      <li <?php if ($_GET[page]=='network') { ?>class="active"<?php } ?>><a href="admin.php?page=network" title="network">Network</a></li>
      <li <?php if ($_GET[page]=='category') { ?>class="active"<?php } ?>><a href="admin.php?page=category" title="Category">Category</a></li>
      <li <?php if ($_GET[page]=='service') { ?>class="active"<?php } ?>><a href="admin.php?page=service" title="Service">Service</a></li>
      <li <?php if ($_GET[page]=='customer') { ?>class="active"<?php } ?>><a href="admin.php?page=customer" title="Customer">Customer</a></li>
      <li <?php if ($_GET[page]=='config') { ?>class="active"<?php } ?>><a href="admin.php?page=config" title="Configuration">Configuration</a></li>
			<li><a href="logout.php" title="Admin Logout" target="_top">Logout</a></li>	
 		</ul>
	</div>
	
	<div id="secondarybody">
<?php 
include("include/iframe.php");
?>
	</div>
		</div>
		<div id="footerarea" class="smalltext windowbg">			
			Copyright &copy; <?=date("Y")?> <a href="index.php" style="color:#000000; text-decoration:none">All Rights Reserved.</a><br />
			<a href="http://www.indobizmedia.com" target="_blank">Powered by IndoBizMedia</a>
	
		</div>
	</div>
</div>
	
<SCRIPT>if (document.all) document.all.loadingmsg.style.visibility='hidden';</SCRIPT>
<SCRIPT>if (document.layers) document.loadingmsg.visibility='hidden'</SCRIPT>
<SCRIPT>if (document.getElementById) document.getElementById('loadingmsg').style.visibility='hidden'</SCRIPT>	
</body></html>