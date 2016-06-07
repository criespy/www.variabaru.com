<?php
$sql = mysql_query("SELECT * FROM tblconfig where id =1");
$field = mysql_fetch_array($sql);
if($_POST['email']!='' && $_POST['msg']!='' && $_POST['name']!=''){
	$from=$_POST[email];
	$to=$field[email];
	$subject="Contact Message";
	$body="New Contact Message: ".date("d - m - Y")."<br/>
					Sender name: $_POST[name]<br/>
					Sender email: $from <br/>
					Sender Phone: $_POST[phone] <br/>
					Subject: $subject<br/>
					Message: $_POST[msg]";
	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	$headers .= "From: $from";
	mail($to,$subject,$body,$headers);
	
	$name = mysql_escape_string(trim($_POST['name']));
  $address = '';
  $email = mysql_escape_string(trim($_POST['email']));
  $phone = mysql_escape_string(trim($_POST['phone']));
	$flag = 1;
  $sql2 = "INSERT INTO tblcustomer SET name = '$name', address = '$address', email = '$email', phone = '$phone', flag = '$flag', d_posting = DATE(NOW())";
	mysql_query($sql2);	
	
	echo "<script>document.location='index.php?page=contact</script>'";
}
?>
<script language="javascript">
function validate(){
	if(document.getElementById("Name").value=='Name' || document.getElementById("Name").value==''){
		alert('Silakan isi nama anda!');
		return false;
	}
	else if(document.getElementById("Email").value=='Email' || document.getElementById("Email").value==''){
		alert('Silakan isi email anda!');
		return false;
	}	
	else if(document.getElementById("Phone").value=='Phone' || document.getElementById("Phone").value==''){
		alert('Silakan isi telepon anda!');
		return false;
	}
	
	if(document.getElementById("Email").value!='Email' && document.getElementById("Email").value!=''){
		var re = /^([_a-z0-9-]+)(\.[_a-z0-9-]+)*@([a-z0-9-]+)(\.[a-z0-9-]+)*(\.[a-z]{2,4})$/;
		if(!document.getElementById("Email").value.match(re)) {
			alert('Maaf, Email anda tidak valid!');
			return false;
		}
	}
	return true;
}
</script>
<td align="center" valign="top">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td align="center"><!-- ImageReady Slices (HotItem.psd) -->
                <table id="Table_3" width="522" height="225" border="0" cellpadding="0" cellspacing="0">
<tr>
<td height="9" align="right"><img width="9" height="30" alt="" src="images/box_011.png"></td>
<td height="9" background="images/box_021.png" class="body9"><div align="left" style="margin: 5px 5px 3px;" class="shadow">CONTACT US</div></td>
<td height="9" align="right"><img width="9" height="30" alt="" src="images/box_031.png"></td>
</tr>
<tr>
<td width="9" height="9" background="images/box_04.png"><img src="images/box_04.png" width="9" height="9" alt=""></td>
<td bgcolor="#FFFFFF"><table width="503" border="0" align="center" cellpadding="0" cellspacing="0">
<tr>
<td align="center"><table width="90%" border="0" align="center" cellpadding="0" cellspacing="0">
<tr>
<td><img src="images/<?=$field[imgcontact]?>" width="452" height="150"><br>
<br>
<table width="100%" border="0" cellspacing="5" cellpadding="5">
<tr>
<td width="8%">&nbsp;</td>
<td width="92%"><DIV align="justify"><span class="body2">SHOWROOM &amp; MARKETING OFFICE</span><BR>
<?=$field[address]?>
<br/>Email: <a href="mailto:<?=$field[email]?>"><?=$field[email]?></a></DIV></td>
</tr>
</table>
<br>
</td>
</tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr>
<td height="7" align="center">..................................................................................................................................................................</td>
</tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr>
<td height="7" align="center"><img src="images/spacer.gif" width="1" height="1"></td>
</tr>
</table><br>
<h3 style="text-align:left;padding-left:10px">Send us message</h3>
<script>
function cekField(x){
  if(document.getElementById(x).value==''){
  	document.getElementById(x).value = x;
  }
}
function cekKlik(x){
  if(document.getElementById(x).value==x){
  	document.getElementById(x).value = '';
  }
}
</script>
<form method="post" action="index.php?page=contact" name="contact" onSubmit="return validate();">
<table width="50" border="0" cellspacing="0" cellpadding="4">
<tr>
<td style="width:20px"><input id="Name" name="name" value="Name" onClick="cekKlik('Name')" onBlur="cekField('Name')" size="28"> <font color="red" face="verdana"><sup>*)</sup></font></td>
<td style="width:20px"><input id="Email" name="email" value="Email" onClick="cekKlik('Email')" onBlur="cekField('Email')" size="28"> <font color="red" face="verdana"><sup>*)</sup></font></td>
</tr>
<tr>
<td style="width:20px"><input id="Phone" name="phone" value="Phone" onClick="cekKlik('Phone')" onBlur="cekField('Phone')" size="28"> <font color="red" face="verdana"><sup>*)</sup></font></td>
<td style="width:20px"><input id="Subject" name="Subject" value="Subject" onClick="cekKlik('Subject')" onBlur="cekField('Subject')" size="28"></td>
</tr>
<tr>
<td colspan="2"><textarea name="msg" id="Message" cols="53" rows="5" onClick="cekKlik('Message')" onBlur="cekField('Message')">Message</textarea></td>
</tr>
<tr>
<td colspan="2"><input type="submit" value="Send" /></td>
</tr>
</table>
</form>
<br/><br/>
</td>
</tr>
</table></td>
<td width="9" height="9" background="images/box_08.png"><img src="images/box_08.png" width="9" height="9" alt=""></td>
</tr>
<tr>
<td width="9" height="9"><img src="images/box_09.png" width="9" height="9" alt=""></td>
<td width="9" height="9" background="images/box_10.png"><img src="images/box_10.png" width="9" height="9" alt=""></td>
<td width="9" height="9"><img src="images/box_11.png" width="9" height="9" alt=""></td>
</tr>
</table>
              <!-- End ImageReady Slices --></td>
          </tr>
        </table></td>