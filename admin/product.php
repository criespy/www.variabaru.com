<?php
include("include/secure.php");
?>
<div style="float:left">
<center>
<table align="center" style="font-family:Verdana, Arial, Helvetica, sans-serif; font-size:10px" border="1" cellpadding="3" cellspacing="0" width="300" height="50">
	<tr>
		<td align="center"><form name="search" method="post" action="admin.php?page=product">Search : <input name="kw" /> &nbsp;<input type="submit" value="GO!" /></form></td>
	</tr>
</table>
<br>
<table style="font-family:Verdana, Arial, Helvetica, sans-serif; font-size:10px;" border="1" cellpadding="3" cellspacing="0" width="750">
<tr><td colspan="6">&nbsp;<b>View Product</b></td>
<td colspan="2" align="center"><input type="button" onClick="window.location = 'admin.php?page=product2'" value="Add New Product"></td></tr>
<tr style="background-image:url(images/orangebg_right_top.gif); font-weight:bold" valign="middle" align="center">
	<td>No</td>
	<td>Part Number</td>
	<td>Part Name</td>
	<td>Brand</td>
	<td>Type</td>	
	<td>Price</td>
	<td>Stock</td>
	<td width="60">Delete</td>	
</tr>
<?php 
if ($_POST[kw]==''){
	$sql=mysql_query("select * from tblproduct order by category, type, partname");
}
else{
	$sql=mysql_query("select * from tblproduct where brand LIKE '%$_POST[kw]%' OR category LIKE '%$_POST[kw]%' OR type LIKE '%$_POST[kw]%' OR partname LIKE '%$_POST[kw]%' order by category, type, partname");
}
$jml = mysql_num_rows($sql);

if($jml<>0){
	$x=0;
	while($field=mysql_fetch_array($sql)){
    $x++;		
		if (fmod($x, 2)=='0'){
			$warna="style=\"background-image:url(images/bluebg_left.gif);\"";
		}
		else{
			$warna="";
		}
?>
<tr align="justify" <?php echo $warna ?> valign="middle" align="center">
	<td width="30"><?=$x?></td>
	<td align="center"><a href="itemdetail.php?id=<?=$field['id']?>" onClick="NewWindow(this.href,'name','600','400','no','false');return false"><?=$field['partnumber']?></a></td>	
	<td align="center"><?=$field['partname']?></td>
	<td align="center"><?=$field['brand']?></td>
	<td align="center"><?=$field['type']?></td>
	<td align="center" width="60"><?=$field['price']?></td>
	<td align="center" width="50"><?=$field['stock']?></td>
	<td align="center"><a href="delete.php?what=product&id=<?=$field['id']?>" target="_top" onClick="return confirm('Are you sure?')"><img src="images/delete.png" border="0" height="16" width="16" title="Delete" /></a></td>
  </tr>
<?php
	}
}
else{
	echo "<tr align=\"center\"><td colspan=\"10\"><strong>No Product!</strong></td></tr>";
}
?>
</table>
</center>
</div>