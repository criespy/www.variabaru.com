<?php
include("include/secure.php");
?>
<div style="float:left">
<center>
<table align="center" style="font-family:Verdana, Arial, Helvetica, sans-serif; font-size:10px" border="1" cellpadding="3" cellspacing="0" width="300" height="50">
	<tr>
		<td align="center"><form name="search" method="post" action="admin.php?page=customer">Search : <input name="kw" /> &nbsp;<input type="submit" value="GO!" /></form></td>
	</tr>
</table>
<br>
<table style="font-family:Verdana, Arial, Helvetica, sans-serif; font-size:10px;" border="1" cellpadding="3" cellspacing="0" width="750">
<tr><td colspan="6" align="center">&nbsp;<b>View Customer & Contact</b></td></tr>
<tr style="background-image:url(images/orangebg_right_top.gif); font-weight:bold" valign="middle" align="center">
	<td>No</td>
	<td>Name</td>
	<td>Email</td>
	<td>Phone</td>
	<td>Address</td>
	<td width="60">Delete</td>	
</tr>
<?php 
if ($_POST[kw]==''){
	$sql=mysql_query("select * from tblcustomer order by name");
}
else{
	$sql=mysql_query("select * from tblcustomer where name LIKE '%$_POST[kw]%' OR address LIKE '%$_POST[kw]%' order by name");
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
	<td width="150" align="center"><?=$field['name']?></td>
	<td width="200" align="center"><a href="mailto:<?=$field['email']?>"><?=$field['email']?></a></td>
	<td width="150" align="center"><?=$field['phone']?></td>
	<td align="center"><?=$field['address']?></td>
	<td align="center"><a href="delete.php?what=customer&id=<?=$field['id']?>" target="_top" onClick="return confirm('Are you sure?')"><img src="images/delete.png" border="0" height="16" width="16" title="Delete" /></a></td>
  </tr>
<?php
	}
}
else{
	echo "<tr align=\"center\"><td colspan=\"6\"><strong>No Customer!</strong></td></tr>";
}
?>
</table>
</center>
</div>