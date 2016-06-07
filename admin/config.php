<?php
include("include/secure.php");
?>
<script language="javascript">
function check(){
	if (document.config.email.value == ''){
    alert('Please enter email!');
    document.config.email.focus();
    return false;
	}
}
</script>
<body>
<?php 
$sql1=mysql_query("select * from tblconfig where id = 1");
$field=mysql_fetch_array($sql1);
$address = str_replace("<br />", "\n", $field['address']);
?>
<form action="edit.php?what=config&id=1" method="post" onSubmit="return check()" name="config" enctype="multipart/form-data">
<table cellpadding="0" cellspacing="0" border="1" width="550">
	<tr>
		<td align="center" colspan="3" style="font-size:14px" background="images/bg-gold.gif" style="background-position:center">
		<strong>Web Configuration</strong></td>
	</tr>
	<tr>
		<td colspan="3" style="font-size:14px">
			<table border="0" cellspacing="3" style="vertical-align:top">
				<tr>
					<td><strong>Contact Us Image</strong></td><td><strong>&nbsp;:&nbsp;</strong></td>
          <td><input type="file" name="imgcontact" id="imgcontact" value="<?=$field['imgcontact']?>" /> <font color="red">*</font></td>				
				</tr>
				<tr>
					<td><strong>Address</strong></td><td><strong>&nbsp;:&nbsp;</strong></td>
          <td><textarea name="address" id="address" cols="50" rows="6"><?=$address?></textarea> <font color="red">*</font></td>				
				</tr>
				<tr>
					<td><strong>Email</strong></td><td><strong>&nbsp;:&nbsp;</strong></td>
          <td><input type="text" name="email" id="email" value="<?=$field['email']?>" /> <font color="red">*</font></td>				
				</tr>
				<tr>
					<td><strong>Username</strong></td><td><strong>&nbsp;:&nbsp;</strong></td>
          <td><input type="text" name="username" id="username" readonly="readonly" value="<?=$field['username']?>" /> <font color="red">*</font></td>				
				</tr>
				<tr>
					<td><strong>Password</strong></td><td><strong>&nbsp;:&nbsp;</strong></td>
          <td><input type="password" name="password" id="password" value="<?=$field['password']?>"/> <font color="red">*</font></td>				
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