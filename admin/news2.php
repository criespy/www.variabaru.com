<?php
include("include/secure.php");
?>
<script language="javascript">
function check(){
	if (document.news.title.value == ''){
    alert('Please enter Title!');
    document.news.title.focus();
    return false;
	}
}
</script>
<body>
<form action="add.php?what=news" method="post" onSubmit="return check()" name="news" enctype="multipart/form-data">
<table cellpadding="0" cellspacing="0" border="1" width="750">
	<tr>
		<td align="center" colspan="3" style="font-size:14px" background="images/bg-gold.gif" style="background-position:center">
		<strong>Add New News</strong></td>
	</tr>
	<tr>
		<td colspan="3" style="font-size:14px">
			<table border="0" cellspacing="3" style="vertical-align:top">
				<tr>
					<td><strong>Title</strong></td><td><strong>&nbsp;:&nbsp;</strong></td>
          <td><input type="text" name="title" id="title" size="119" /> <font color="red">*</font></td>				
				</tr>
				<tr>
					<td><strong>News</strong></td><td><strong>&nbsp;:&nbsp;</strong></td>
          <td><textarea name="news" id="news" cols="100" rows="30"></textarea> <font color="red">*</font></td>				
				</tr>
				<tr>
					<td><strong>Image</strong></td><td><strong>&nbsp;:&nbsp;</strong></td>
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