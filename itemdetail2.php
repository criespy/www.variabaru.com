<?php 
include("include/mine.php");
$sql1=mysql_query("select * from tbltodayitem where id = '". $_GET["id"] . "'");
$field=mysql_fetch_array($sql1);
?>
<html>
<head>
<title>VARIA BARU - <?=$field["name"]?></title>
<!-- WEBSITE KEYWORD and DESCRIPTIONS for search engine to find -->
<meta name="description" content="Varia Baru">
<meta name="keywords" content="Varia, Baru">
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
//-->
</script>
</head>
<body bgcolor="#FFFFFF" background="images/fiber.jpg" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" onLoad="MM_preloadImages('images/btnOver_04.jpg','images/btnOver_06.jpg','images/btnOver_07.jpg','images/btnOver_08.jpg','images/btnOver_09.jpg','images/btnOver_10.jpg','images/btnOver_11.jpg','images/btnOver_12.jpg','images/btnPdf02.jpg')">

<!-- ImageReady Slices (member-index.psd) -->
<table id="Table_17" width="27" height="27" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td height="9" colspan="3" align="right" background="images/bgTitle_01.png"><div align="center" class="body4" style="margin:10px 8px 5px 8px"><?=$field["name"]?></div></td>
  </tr>
  <tr>
    <td width="9" height="9" background="images/box_04.png"><img src="images/box_04.png" width="9" height="9" alt=""></td>
    <td valign="top" bgcolor="#FFFFFF"><table width="582" height="362" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td valign="top"><div align="center" style="margin:3px 0px 3px 0px; background-color:#000066"><img src="images/spacer.gif" width="1" height="1"></div>
            <table width="100%" border="0" cellpadding="2" cellspacing="2">
              <tr>
                <td valign="top"><table width="100%" height="100%" border="0" cellspacing="1" cellpadding="1">
                  <tr>
                    <td width="40%" align="center" valign="top"><img src="images/otherprod/<?=$field["img"]?>" width="300" height="202"></td>
                    <td valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td><strong class="body2">Classification</strong></td>
                      </tr>
                      <tr>
                        <td><div style="margin:3px 3px 0px 5px; height:180px; padding-right:5px; overflow-y: scroll; scrollbar-arrow-color: #003399; scrollbar-track-color:#FFFFFF; scrollbar-face-color:#FFFFFF; scrollbar-3dlight-color: #FFFFFF; scrollbar-highlight-color:#FFFFFF; scrollbar-shadow-color:#CCCCCC; scrollbar-darkshadow-Color:#FFFFFF;">
                          <table width="98%" border="0" align="center" cellpadding="1" cellspacing="1">
                            <tr>
                              <td width="50%" valign="top">Name</td>
                              <td valign="top">:</td>
                              <td valign="top"><div align="right"><?=$field["name"]?></div></td>
                            </tr>
                          </table>													
                          <table width="98%" border="0" align="center" cellpadding="1" cellspacing="1">
                            <tr>
                              <td width="50%" valign="top">Category</td>
                              <td valign="top">:</td>
                              <td valign="top"><div align="right"><strong><?=$field["category"]?></strong></div></td>
                            </tr>
                          </table>
                          <table width="98%" border="0" align="center" cellpadding="1" cellspacing="1">
                            <tr>
                              <td width="50%" valign="top">Brand</td>
                              <td valign="top">:</td>
                              <td valign="top"><div align="right"><strong><?=$field["brand"]?></strong></div></td>
                            </tr>
                          </table>
                          <table width="98%" border="0" align="center" cellpadding="1" cellspacing="1">
                            <tr>
                              <td width="50%" valign="top">Price</td>
                              <td valign="top">:</td>
                              <td valign="top"><div align="right">Rp. <?=$field["price"]?>,-</div></td>
                            </tr>
                          </table>
                          <table width="98%" border="0" align="center" cellpadding="1" cellspacing="1">
                            <tr>
                              <td width="50%" valign="top">Status</td>
                              <td valign="top">:</td>
                              <td valign="top"><div align="right"><?=$field["stock"]?></div></td>
                            </tr>
                          </table>
                          </div>
                          <div align="center" style="margin:3px 0px 3px 0px; background-color:#CCCCCC"><img src="images/spacer.gif" width="1" height="1"></div>
</td>
                      </tr>
                      
                    </table></td>
                  </tr>
                </table></td>
              </tr>
              
              <tr>
                <td><table width="100%" border="0" cellpadding="1" cellspacing="1">
                    
                    <tr>
                      <td bgcolor="#FFFFFF"><div align="left" style="margin:2px 2px 2px 2px"><strong class="body2">Detail</strong></div>
                      <div align="justify" style="margin:3px 3px 3px 3px; height:53px; padding-right:5px; overflow-y: scroll; scrollbar-arrow-color: #003399; scrollbar-track-color:#FFFFFF; scrollbar-face-color:#FFFFFF; scrollbar-3dlight-color: #FFFFFF; scrollbar-highlight-color:#FFFFFF; scrollbar-shadow-color:#CCCCCC; scrollbar-darkshadow-Color:#FFFFFF;"><?=$field["detail"]?></div></td>
                    </tr>
                </table></td>
              </tr>
            </table></td>
      </tr>
      <tr>
        <td height="5" valign="bottom"><div align="center" style="margin:3px 0px 3px 0px; background-color:#000066"><img src="images/spacer.gif" width="1" height="1"></div>
          <table width="99%" border="0" align="center" cellpadding="1" cellspacing="1">
          <tr>
            <td width="20%"><div align="left"><a href="javascript:window.print()">Print This Page</a></div></td>
            <td width="86%"><div align="right">Copyright &copy; <?=date("Y")?> <strong>VARIA BARU</strong></div></td>
          </tr>
        </table></td>
      </tr>
    </table></td>
    <td width="9" height="9" background="images/box_08.png"><img src="images/box_08.png" width="9" height="9" alt=""></td>
  </tr>
  <tr>
    <td width="9" height="9"><img src="images/box_09.png" width="9" height="9" alt=""></td>
    <td width="9" height="9" background="images/box_10.png"><img src="images/box_10.png" width="9" height="9" alt=""></td>
    <td width="9" height="9"><img src="images/box_11.png" width="9" height="9" alt=""></td>
  </tr>
</table>
</body>
</html>