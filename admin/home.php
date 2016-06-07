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
$newarrival = str_replace("<br />", "\n", $field['newarrival']);
$runtext = str_replace("<br />", "\n", $field['runtext']);
?>
<form action="edit.php?what=home&id=1" method="post" onSubmit="return check()" name="home" enctype="multipart/form-data">
<table cellpadding="0" cellspacing="0" border="1" width="550">
	<tr>
		<td align="center" colspan="3" style="font-size:14px" background="images/bg-gold.gif" style="background-position:center">
		<strong>Edit Content Home</strong></td>
	</tr>
	<tr>
		<td colspan="3" style="font-size:14px">
			<table border="0" cellspacing="3" style="vertical-align:top">
				<tr>
					<td><strong>New Arrival Text</strong></td><td><strong>&nbsp;:&nbsp;</strong></td>
          <td><textarea name="newarrival" id="newarrival" cols="50" rows="6"><?=$newarrival?></textarea> <font color="red">*</font></td>				
				</tr>
				<tr>
					<td><strong>Big Image</strong></td><td><strong>&nbsp;:&nbsp;</strong></td>
          <td><input type="file" name="img4" id="img4" value="<?=$field['img4']?>" /> <font color="red">*</font>&nbsp;<input name="txt_img4" value="<?=$field['txt_img4']?>" /></td>				
				</tr>
        <tr>
					<td><strong>Image 1</strong></td><td><strong>&nbsp;:&nbsp;</strong></td>
          <td><input type="file" name="img1" id="img1" value="<?=$field['img1']?>" /> <font color="red">*</font>&nbsp;<input name="txt_img1" value="<?=$field['txt_img1']?>" /></td>				
				</tr>
        <tr>
					<td><strong>Image 2</strong></td><td><strong>&nbsp;:&nbsp;</strong></td>
          <td><input type="file" name="img2" id="img2" value="<?=$field['img2']?>" /> <font color="red">*</font>&nbsp;<input name="txt_img2" value="<?=$field['txt_img2']?>" /></td>				
				</tr>
				<tr>
					<td><strong>Image 3</strong></td><td><strong>&nbsp;:&nbsp;</strong></td>
          <td><input type="file" name="img3" id="img3" value="<?=$field['img3']?>" /> <font color="red">*</font>&nbsp;<input name="txt_img3" value="<?=$field['txt_img3']?>" /></td>				
				</tr>
        <tr>
					<td><strong>Running Text</strong></td><td><strong>&nbsp;:&nbsp;</strong></td>
          <td><textarea name="runtext" id="runtext" cols="50" rows="6"><?=$runtext?></textarea> <font color="red">*</font></td>				
				</tr>
				<tr>
					<td><strong>Banner Ad</strong></td><td><strong>&nbsp;:&nbsp;</strong></td>
          <td><input type="file" name="bannermid" id="bannermid" value="<?=$field['bannermid']?>" /> <font color="red">*</font></td>				
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