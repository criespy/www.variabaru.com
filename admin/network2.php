<?php
include("include/secure.php");
?>
<script language="javascript">
function check(){
	if (document.network.cabang.value == ''){
    alert('Please enter Cabang!');
    document.network.cabang.focus();
    return false;
	}
}
</script>
<body>
<form action="add.php?what=network" method="post" onSubmit="return check()" name="network">
<table cellpadding="0" cellspacing="0" border="1" width="550">
	<tr>
		<td align="center" colspan="3" style="font-size:14px" background="images/bg-gold.gif" style="background-position:center">
		<strong>Add New Network</strong></td>
	</tr>
	<tr>
		<td colspan="3" style="font-size:14px">
			<table border="0" cellspacing="3" style="vertical-align:top">
				<tr>
					<td><strong>Nama Cabang</strong></td><td><strong>&nbsp;:&nbsp;</strong></td>
          <td><input type="text" name="cabang" id="cabang"/> <font color="red">*</font></td>				
				</tr>
				<tr>
					<td><strong>Alamat</strong></td><td><strong>&nbsp;:&nbsp;</strong></td>
          <td><input type="text" name="alamat" id="alamat"/> <font color="red">*</font></td>				
				</tr>
				<tr>
					<td><strong>Telp</strong></td><td><strong>&nbsp;:&nbsp;</strong></td>
          <td><input type="text" name="telp" id="telp"/> <font color="red">*</font></td>				
				</tr>
				<tr>
					<td><strong>Prov</strong></td><td><strong>&nbsp;:&nbsp;</strong></td>
          <td>
					<select name="prov">
					<option value="1">Aceh</option>
					<option value="2">Sumatera Utara</option>
					<option value="3">Riau</option>
					<option value="4">Sumatera Barat</option>
					<option value="5">Bengkulu</option>
					<option value="6">Jambi</option>
					<option value="7">Sumatera Selatan</option>
					<option value="8">Lampung</option>
					<option value="9">Jawa Barat</option>
					<option value="10">Jawa Tengah</option>
					<option value="11">Jawa Timur</option>
					<option value="12">Kalimantan Barat</option>
					<option value="13">Kalimantan Tengah</option>
					<option value="14">Kalimantan Selatan</option>
					<option value="15">Kalimantan Timur</option>
					<option value="16">Bali</option>
					<option value="17">Nusa Tenggara</option>
					<option value="18">Sulawesi Barat</option>
					<option value="19">Sulawesi Selatan</option>
					<option value="20">Sulawesi Tenggara</option>
					<option value="21">Sulawesi Tengah</option>
					<option value="22">Sulawesi Utara</option>
					<option value="23">Maluku</option>
					<option value="24">Irian Jaya</option>
					<option value="25">DKI Jakarta</option>
					</select>
					<font color="red">*</font></td>				
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