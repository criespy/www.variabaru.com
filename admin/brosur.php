<?php
include("include/secure.php");
?>
<div style="float:left">
<center>
<table align="center" style="font-family:Verdana, Arial, Helvetica, sans-serif; font-size:10px" border="1" cellpadding="3" cellspacing="0" width="300" height="50">
	<tr>
		<td align="center"><form name="search" method="post" action="admin.php?page=brosur">Search : <input name="kw" /> &nbsp;<input type="submit" value="GO!" /></form></td>
	</tr>
</table>
<br>
<table style="font-family:Verdana, Arial, Helvetica, sans-serif; font-size:10px;" border="1" cellpadding="3" cellspacing="0" width="750">
<tr><td colspan="4">&nbsp;<b>View Catalogue</b></td>
<td align="center"><input type="button" onClick="window.location = 'admin.php?page=brosur2'" value="Add New catalogue"></td></tr>
<tr style="background-image:url(images/orangebg_right_top.gif); font-weight:bold" valign="middle" align="center">
	<td>No</td>
	<td>Title</td>
	<td>Content</td>
	<td>Date</td>
	<td width="60">Delete</td>	
</tr>
<?php 
if ($_POST[kw]==''){
	$sql=mysql_query("select * from tblbrosur order by tgl desc LIMIT 10");
}
else{
	$sql=mysql_query("select * from tblbrosur where title LIKE '%$_POST[kw]%' OR content LIKE '%$_POST[kw]%' order by tgl desc");
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
	<td align="center"><a href="brosur/<?=$field['filename']?>" target="_blank"><?=$field['title']?></a></td>
	<td align="center"><?=$field['content']?></td>
	<td align="center" width="80"><?=$field['tgl']?></td>
	<td align="center"><a href="delete.php?what=brosur&id=<?=$field['id']?>" target="_top" onClick="return confirm('Are you sure?')"><img src="images/delete.png" border="0" height="16" width="16" title="Delete" /></a></td>
  </tr>
<?php
	}
}
else{
	echo "<tr align=\"center\"><td colspan=\"10\"><strong>No Catalogue!</strong></td></tr>";
}
?>
</table>
</center>
</div>