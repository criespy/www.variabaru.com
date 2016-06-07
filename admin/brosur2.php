<?php
include("include/secure.php");
?>
<script language="javascript">
function check(){
	if (document.brosur.title.value == ''){
    alert('Please enter Title!');
    document.brosur.title.focus();
    return false;
	}
}
</script>
<body>
<form action="add.php?what=brosur" method="post" onSubmit="return check()" name="brosur" enctype="multipart/form-data">
<table cellpadding="0" cellspacing="0" border="1" width="550">
	<tr>
		<td align="center" colspan="3" style="font-size:14px" background="images/bg-gold.gif" style="background-position:center">
		<strong>Add New Catalogue</strong></td>
	</tr>
	<tr>
		<td colspan="3" style="font-size:14px">
			<table border="0" cellspacing="3" style="vertical-align:top">
				<tr>
					<td><strong>Title</strong></td><td><strong>&nbsp;:&nbsp;</strong></td>
          <td><input type="text" name="title" id="title"/> <font color="red">*</font></td>				
				</tr>
				<tr>
					<td><strong>Content</strong></td><td><strong>&nbsp;:&nbsp;</strong></td>
          <td><textarea name="content" id="content" cols="50" rows="6"></textarea> <font color="red">*</font></td>				
				</tr>
				<tr>
					<td><strong>File</strong></td><td><strong>&nbsp;:&nbsp;</strong></td>
          <td><input type="file" name="img" id="img"/> <font color="red">*</font></td>				
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