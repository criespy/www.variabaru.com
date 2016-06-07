<?php
include("include/secure.php");
?>
<script language="javascript">
function check(){
	if (document.cat.cat.value == ''){
    alert('Please enter Category!');
    document.cat.cat.focus();
    return false;
	}
}
</script>
<body>
<form action="add.php?what=cat" method="post" onSubmit="return check()" name="cat" enctype="multipart/form-data">
<table cellpadding="0" cellspacing="0" border="1" width="550">
	<tr>
		<td align="center" colspan="3" style="font-size:14px" background="images/bg-gold.gif" style="background-position:center">
		<strong>Add New Category</strong></td>
	</tr>
	<tr>
		<td colspan="3" style="font-size:14px">
			<table border="0" cellspacing="3" style="vertical-align:top">
				<tr>
					<td><strong>Category</strong></td><td><strong>&nbsp;:&nbsp;</strong></td>
          <td><input type="text" name="cat" id="cat"/> <font color="red">*</font></td>				
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