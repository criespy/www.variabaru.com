<?php 
include("include/mine.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>VARIA BARU GALLERY</title>
<link href="Scripts/links.css" rel="stylesheet" type="text/css" />

<!-- ########################################################################################### -->
<link rel="stylesheet" type="text/css" href="Scripts/gallerystyle.css" />
<!-- Do not edit IE conditional style below -->
<!--[if gte IE 5.5]>
<style type="text/css">
#motioncontainer {
width:expression(Math.min(this.offsetWidth, maxwidth)+'px');
}
</style>
<![endif]-->
<!-- End Conditional Style -->
<script type="text/javascript" src="Scripts/motiongallery.js">
/***********************************************
* CMotion Image Gallery- © Dynamic Drive DHTML code library (www.dynamicdrive.com)
* Visit http://www.dynamicDrive.com for hundreds of DHTML scripts
* This notice must stay intact for legal use
* Modified by Jscheuer1 for autowidth and optional starting positions
***********************************************/
</script>
<!-- ########################################################################################### -->

</head>

<body>

<!-- ########################################################################################### -->
<div id="motioncontainer" style="position:relative; overflow:hidden;">
<div id="motiongallery" style="position:absolute;left:0;top:0;white-space: nowrap;">

<nobr id="trueContainer">
<?php
$sql=mysql_query("select name, brand, img from tbltodayitem where type = 1 order by id desc");
$z=0;
while($field=mysql_fetch_array($sql)){
	$z++;
?>
<a href="index.php?page=hot" title="<?=$field["brand"]?> - <?=$field["name"]?>" target="_parent"><img src="images/otherprod/<?=$field["img"]?>" border=0 width=316 height=185></a> 
<?php
}
?>
</nobr></div>
</div>
<!-- ########################################################################################### -->

</body>
</html>
