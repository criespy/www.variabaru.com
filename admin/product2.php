<?php
include("include/secure.php");
?>
<script language="javascript">
function check(){
	if (document.product.prod_id.value == ''){
    alert('Please enter Prod ID!');
    document.product.prod_id.focus();
    return false;
	}
}
</script>
<body>
<form action="add.php?what=product" method="post" onSubmit="return check()" name="product" enctype="multipart/form-data">
<table cellpadding="0" cellspacing="0" border="1" width="550">
	<tr>
		<td align="center" colspan="3" style="font-size:14px" background="images/bg-gold.gif" style="background-position:center">
		<strong>Add New Product</strong></td>
	</tr>
	<tr>
		<td colspan="3" style="font-size:14px">
			<table border="0" cellspacing="3" style="vertical-align:top">
				<tr>
					<td><strong>Part Number</strong></td><td><strong>&nbsp;:&nbsp;</strong></td>
          <td><input type="text" name="partnumber" id="partnumber"/> <font color="red">*</font></td>				
				</tr>
				<tr>
					<td><strong>Part Name</strong></td><td><strong>&nbsp;:&nbsp;</strong></td>
          <td><input type="text" name="partname" id="partname"/> <font color="red">*</font></td>				
				</tr>
				<tr>
					<td><strong>Brand</strong></td><td><strong>&nbsp;:&nbsp;</strong></td>
          <td><input type="text" name="brand" id="brand"/> <font color="red">*</font></td>				
				</tr>
				<tr>
					<td><strong>Type</strong></td><td><strong>&nbsp;:&nbsp;</strong></td>
          <td><input type="text" name="type" id="type"/> <font color="red">*</font></td>				
				</tr>				
				<tr>
					<td><strong>Price</strong></td><td><strong>&nbsp;:&nbsp;</strong></td>
          <td><input type="text" name="price" id="price"/> <font color="red">*</font></td>				
				</tr>
				<tr>
					<td><strong>Stock</strong></td><td><strong>&nbsp;:&nbsp;</strong></td>
          <td><input type="text" name="stock" id="stock"/> <font color="red">*</font></td>				
				</tr>
				<tr>
					<td><strong>Image</strong></td><td><strong>&nbsp;:&nbsp;</strong></td>
          <td><input type="file" name="img" id="img"/> <font color="red">*</font></td>				
				</tr>
				<tr>
					<td><strong>Category</strong></td><td><strong>&nbsp;:&nbsp;</strong></td>
          <td><select name="category">
<?php
$sqlz=mysql_query("select * from tblcat order by cat");
while($fieldz=mysql_fetch_array($sqlz)){
?>
<option value="<?=$fieldz[cat]?>"><?=$fieldz[cat]?></option>
<?php
}
?>
							</select> <font color="red">*</font></td>				
				</tr>
				<tr>
					<td><strong>Description</strong></td><td><strong>&nbsp;:&nbsp;</strong></td>
          <td><textarea name="ket" id="ket" cols="50" rows="6"></textarea> <font color="red">*</font></td>				
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