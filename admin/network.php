<?php
include("include/secure.php");
?>
<div style="float:left">
<center>
<table align="center" style="font-family:Verdana, Arial, Helvetica, sans-serif; font-size:10px" border="1" cellpadding="3" cellspacing="0" width="300" height="50">
	<tr>
		<td align="center"><form name="search" method="post" action="admin.php?page=network">Search : <input name="kw" /> &nbsp;<input type="submit" value="GO!" /></form></td>
	</tr>
</table>
<br>
<table style="font-family:Verdana, Arial, Helvetica, sans-serif; font-size:10px;" border="1" cellpadding="3" cellspacing="0" width="700">
<tr><td colspan="4">&nbsp;<b>View Network</b></td>
<td align="center"><input type="button" onClick="window.location = 'admin.php?page=network2'" value="Add New Network"></td></tr>
<tr style="background-image:url(images/orangebg_right_top.gif); font-weight:bold" valign="middle" align="center">
	<td>No</td>
	<td>Cabang</td>
	<td>Alamat</td>
	<td>Telp</td>
	<td width="60">Delete</td>	
</tr>
<?php 
if ($_POST[kw]==''){
	$sql=mysql_query("select * from tblnetwork order by cabang");
}
else{
	$sql=mysql_query("select * from tblnetwork where cabang LIKE '%$_POST[kw]%' OR alamat LIKE '%$_POST[kw]%' order by cabang");
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
	<td align="center"><?=$field['cabang']?></td>	
	<td align="center"><?=$field['alamat']?></td>	
	<td align="center"><?=$field['telp']?></td>	
	<td align="center"><a href="delete.php?what=network&id=<?=$field['id']?>" target="_top" onClick="return confirm('Are you sure?')"><img src="images/delete.png" border="0" height="16" width="16" title="Delete" /></a></td>
  </tr>
<?php
	}
}
else{
	echo "<tr align=\"center\"><td colspan=\"10\"><strong>No Network!</strong></td></tr>";
}
?>
</table>
</center>
</div>