<?php
session_start();
include("include/mine.php");
include("include/calc.php");

$sql = mysql_query("SELECT hm.*, left(hm.about,178) as abtsim FROM tblhome hm where id = 1");
$field = mysql_fetch_array($sql);
//$meeting_place_org = $field['meeting_place'];
//$meeting_place = str_replace("<br />", "\n", $field['meeting_place']);
?>
<html>
<head>
<title>VARIA BARU</title>

<!-- WEBSITE KEYWORD and DESCRIPTIONS for search engine to find -->
<meta name="description" content="Varia Baru">
<meta name="keywords" content="varia baru, aksesories mobil, tape mobil, raja aksesories, bumper mobil, audio mobil, cd audio mobil, lcd tv mobil, speaker mobil, kaca film, cover ban, alarm mobil, central lock">
<meta name="robots" content="noarchive"> <!--to prevent search engines from using a cache copy of your page-->

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<script src="Scripts/AC_RunActiveContent.js" type="text/javascript"></script>
<link href="Scripts/links.css" rel="stylesheet" type="text/css" media="all">
<link rel="shortcut icon" href="images/favicon.ico">
<script type="text/javascript">
<!--
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}
function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='index.php?page=product&cat="+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
var win = null;
function NewWindow(mypage,myname,w,h,scroll,size){
	LeftPosition = (screen.width) ? (screen.width-w)/2 : 0;
	TopPosition = (screen.height) ? (screen.height-h)/2 : 0;
	settings =
	'height='+h+',width='+w+',top='+TopPosition+',left='+LeftPosition+',scrollbars='+scroll+',resizable='+size+''
	win = window.open(mypage,myname,settings)
}

//-->
</script>
</head>
<body bgcolor="#FFFFFF" background="images/fiber.jpg" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" onLoad="MM_preloadImages('images/btnOver_04.jpg','images/btnOver_06.jpg','images/btnOver_07.jpg','images/btnOver_08.jpg','images/btnOver_09.jpg','images/btnOver_10.jpg','images/btnOver_11.jpg','images/btnOver_12.jpg','images/btnPdf02.jpg','images/btn2_06.jpg','images/btn2_08.jpg','images/btn2_10.jpg','images/pdf2_05.png','images/btn2_12.jpg','images/btn2_16.jpg','images/btn2_20.jpg')">
<table width="900" height="100%" border="0" align="center" cellpadding="0" cellspacing="0" style="background-image:url(images/bg-bwh2.jpg); background-position:bottom">
  <tr>
    <td height="75" valign="top"><table width="100%" height="100" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td width="233"><img src="images/lamp-left.png" width="233" height="62"></td>
        <td><br>
            <table width="438" height="62" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td><script language="JavaScript">
<!--
var isInternetExplorer = navigator.appName.indexOf("Microsoft") != -1;
// Handle all the FSCommand messages in a Flash movie.
function logo_DoFSCommand(command, args) {
	var logoObj = isInternetExplorer ? document.all.logo : document.logo;
	//
	// Place your code here.
	//
}
// Hook for Internet Explorer.
if (navigator.appName && navigator.appName.indexOf("Microsoft") != -1 && navigator.userAgent.indexOf("Windows") != -1 && navigator.userAgent.indexOf("Windows 3.1") == -1) {
	document.write('<script language=\"VBScript\"\>\n');
	document.write('On Error Resume Next\n');
	document.write('Sub logo_FSCommand(ByVal command, ByVal args)\n');
	document.write('	Call logo_DoFSCommand(command, args)\n');
	document.write('End Sub\n');
	document.write('</script\>\n');
}
//-->
                    </script>
                    <!--url's used in the movie-->
                    <!--text used in the movie-->
                    <script type="text/javascript">
AC_FL_RunContent( 'codebase','http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,0,0','id','logo','width','438','height','62','align','middle','src','swf/logo','menu','false','quality','high','wmode','transparent','bgcolor','#ffffff','swliveconnect','true','name','logo','allowscriptaccess','sameDomain','pluginspage','http://www.macromedia.com/go/getflashplayer','movie','swf/logo' ); //end AC code
                    </script>
                    <noscript>
                    <object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,0,0" id="logo" width="438" height="62" align="middle">
                      <param name="allowScriptAccess" value="sameDomain" />
                      <param name="movie" value="swf/logo.swf" />
                      <param name="menu" value="false" />
                      <param name="quality" value="high" />
                      <param name="wmode" value="transparent" />
                      <param name="bgcolor" value="#ffffff" />
                      <embed src="swf/logo.swf" menu="false" quality="high" wmode="transparent" bgcolor="#ffffff" width="438" height="62" swLiveConnect=true id="logo" name="logo" align="middle" allowScriptAccess="sameDomain" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />        
                    </object>
                  </noscript></td>
              </tr>
          </table></td>
        <td width="229"><img src="images/lamp-right.png" width="229" height="62"></td>
      </tr>
    </table>
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td height="7" align="center"><img src="images/spacer.gif" width="1" height="1"></td>
        </tr>
      </table></td>
  </tr>