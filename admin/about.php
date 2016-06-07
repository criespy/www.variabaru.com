<?php
include("include/secure.php");
?>
<script language="javascript">
function check(){
	// if (document.salesman.nama.value == ''){
    // alert('Please enter full name!');
    // document.salesman.nama.focus();
    // return false;
	// }
}
</script>
<body>
<?php 
$sql1=mysql_query("select * from tblhome where id = 1");
$field=mysql_fetch_array($sql1);
$about = str_replace("<br />", "\n", $field['about']);
?>
<form action="edit.php?what=about&id=1" method="post" onSubmit="return check()" name="about" enctype="multipart/form-data">
<table cellpadding="0" cellspacing="0" border="1" width="550">
	<tr>
		<td align="center" colspan="3" style="font-size:14px" background="images/bg-gold.gif" style="background-position:center">
		<strong>Edit Content About Us</strong></td>
	</tr>
	<tr>
		<td colspan="3" style="font-size:14px">
			<table border="0" cellspacing="3" style="vertical-align:top">
				<tr>
					<td><strong>About Us Text</strong></td><td><strong>&nbsp;:&nbsp;</strong></td>
          <td><textarea name="about" id="about" cols="50" rows="6"><?=$about?></textarea> <font color="red">*</font></td>				
				</tr>
				<tr>
					<td><strong>Big Image</strong></td><td><strong>&nbsp;:&nbsp;</strong></td>
          <td><input type="file" name="imgabout" id="imgabout" value="<?=$field['imgabout']?>" /> <font color="red">*</font></td>				
				</tr>
				<tr>				
					<td align="center" colspan="3"><strong><input type="submit" name="submit" value="Submit" />&nbsp;&nbsp;
          <input type="reset" name="reset" value="Reset" /></strong></td>
				</tr>				
			</table>
		</td>
	</tr>
</table>
</form>