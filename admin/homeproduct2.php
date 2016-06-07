<?php
include("include/secure.php");
?>
<script language="javascript">
function check(){
	if (document.product.name.value == ''){
    alert('Please enter Prod Name!');
    document.product.name.focus();
    return false;
	}
}
</script>
<body>
<form action="add.php?what=homeproduct" method="post" onSubmit="return check()" name="product" enctype="multipart/form-data">
<table cellpadding="0" cellspacing="0" border="1" width="550">
	<tr>
		<td align="center" colspan="3" style="font-size:14px" background="images/bg-gold.gif" style="background-position:center">
		<strong>Add New Other Product</strong></td>
	</tr>
	<tr>
		<td colspan="3" style="font-size:14px">
			<table border="0" cellspacing="3" style="vertical-align:top">
				<tr>
					<td><strong>Product</strong></td><td><strong>&nbsp;:&nbsp;</strong></td>
          <td><input type="text" name="name" id="name"/> <font color="red">*</font></td>				
				</tr>				
				<tr>
					<td><strong>Category</strong></td><td><strong>&nbsp;:&nbsp;</strong></td>
          <td><input type="text" name="category" id="category"/> <font color="red">*</font></td>				
				</tr>
				<tr>
					<td><strong>Brand</strong></td><td><strong>&nbsp;:&nbsp;</strong></td>
          <td><input type="text" name="brand" id="brand"/> <font color="red">*</font></td>				
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
					<td><strong>Description</strong></td><td><strong>&nbsp;:&nbsp;</strong></td>
          <td><textarea name="detail" id="detail" cols="50" rows="6"></textarea> <font color="red">*</font></td>				
				</tr>
				<tr>
					<td><strong>Type Product</strong></td><td><strong>&nbsp;:&nbsp;</strong></td>
          <td><select name="type">
							<option value="0">Hot Items</option>
							<option value="1">Gallery</option>
							<option value="2">Sale Item</option></select> <font color="red">*</font>
					</td>				
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