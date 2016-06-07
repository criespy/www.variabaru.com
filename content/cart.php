<?php
$jml = count($_SESSION['vb_cart']);
if($jml>0)
	$disabled = "";
else
	$disabled = "onClick=\"alert('Sorry, your shopping cart currently empty.');return false;\"";
?>
<script language="javascript">
function validate(x){
	if(x.name.value==''){
		var msg = 'Please enter your name!';
		return msg;
	}
	else if(x.address.value==''){
		var msg = 'Please enter your address!';
		return msg;
	}
	else if(x.email.value==''){
		var msg = 'Please enter your email!';
		return msg;
	}
	else if(x.phone.value==''){
		var msg = 'Please enter your phone number!';
		return msg;
	}
		
	if(x.email.value!=''){
		var re = /^([_a-z0-9-]+)(\.[_a-z0-9-]+)*@([a-z0-9-]+)(\.[a-z0-9-]+)*(\.[a-z]{2,4})$/;
		if(!x.email.value.match(re)) {
			var msg = 'Please enter valid email!';
			return msg;
		}
	}
	return '';
}

function checkout(x){
	var error_msg = validate(x);
	if(error_msg==''){
		x.submit();
	}
	else{
		alert(error_msg);
		return false;
	}
	return true;
}
</script>
<td align="center" valign="top">
<table width="3" cellspacing="0" cellpadding="0" border="0">
          <tbody><tr>
            <td height="9" align="right"><img width="9" height="30" alt="" src="images/boxbiru_01.png"></td>
            <td height="9" background="images/boxbiru_02.png" class="body9"><div align="center" style="margin: 5px 5px 3px;" class="shadow">MY CART BOX</div></td>
            <td height="9" align="right"><img width="9" height="30" alt="" src="images/boxbiru_03.png"></td>
          </tr>
          <tr>
            <td width="9" height="9" background="images/box_04.png" align="center"><img width="9" height="9" alt="" src="images/box_04.png"></td>
            <td bgcolor="#ffffff" align="center"><table width="504" cellspacing="0" cellpadding="0" border="0">
                <tbody><tr>
                  <td width="185" valign="bottom"><img width="185" height="186" alt="" src="images/chart.jpg"></td>
                  <td><div align="left" style="margin: 5px 5px 25px;"><span class="body8">TRANSACTIONS REQUEST FORM</span><br>
                  </div>
                    <div align="left" style="margin: 5px 5px 5px 7px;">
											<form action="checkout.php" method="post" name="frmdata">
                      <table width="98%" cellspacing="0" cellpadding="0">
                        <tbody>
                        <tr>
                          <td width="60">Name</td>
                          <td width="5"> : </td>
                          <td><input type="text" style="height: 15px; width: 200px;" size="3" id="name" class="body5" name="name"> <font color="red">*</font></td>
                        </tr>
                        <tr>
                          <td>Address</td>
                          <td width="5"> : </td>
                          <td><input type="text" style="height: 15px; width: 200px;" size="3" id="address" class="body5" name="address"> <font color="red">*</font></td>
                        </tr>
                        <tr valign="top">
                          <td>Phone No.</td>
                          <td width="5"> : </td>
                          <td><input type="text" style="height: 15px; width: 200px;" size="3" id="phone" class="body5" name="phone"> <font color="red">*</font></td>
                        </tr>
                        <tr valign="top">
                          <td>Email.</td>
                          <td width="5"> : </td>
                          <td><input type="text" style="height: 15px; width: 200px;" size="3" id="email" class="body5" name="email"> <font color="red">*</font></td>
                        </tr>
                        
                        <tr valign="top">
                          <td>Note</td>
                          <td width="5"> : </td>
                          <td><input type="text" style="height: 15px; width: 200px;" size="3" id="note" class="body5" name="note"></td>
                        </tr>
                        <tr valign="top">
                          <td colspan="3"><div align="center" style="margin: 3px 0px; background-color: rgb(204, 204, 204);"><img width="1" height="1" src="images/spacer.gif"></div></td>
                        </tr>

                        <tr>
                          <td align="right" colspan="3"><div align="left" style="margin: 5px;"> Untuk pertanyaan lebih lanjut, silahkan hubungi Marketing Kami di 021-5656677 / 021-5656655. Selamat berbelanja :)<br>
                          </div>
                            <div align="center" style="margin: 3px 0px; background-color: rgb(204, 204, 204);"><img width="1" height="1" src="images/spacer.gif"></div>
                            <div align="right" style="margin: 5px 40px 5px 5px;">
                              <input type="button" value="Term of Payment" id="term" class="body2" name="term" onClick="document.location='index.php?page=payment'">
                              <input type="button" value="Continue Shopping" id="cont" class="body2" name="cont" onClick="document.location='index.php?page=product'">
                              <input type="button" value="Clear Shopping Cart" id="clear" class="body2" name="clear" onClick="if(confirm('Are you sure want to reset your shopping cart?')){document.location='addcart.php?act=reset';}else{return false;};">
&nbsp;&nbsp;&nbsp;<input type="submit" value="Check Out" id="submit" class="body2" name="submit" <?=$disabled?> onClick="return checkout(document.frmdata);">
                            </div></td>
                        </tr>
                      </tbody></table>
											</form>
                      <br>
                    </div>  
                    </td>
                </tr>
            </tbody></table></td>
            <td width="9" height="9" background="images/box_08.png" align="center"><img width="9" height="9" alt="" src="images/box_08.png"></td>
          </tr>
<tr>
<td width="9" height="9"><img src="images/box_09.png" width="9" height="9" alt=""></td>
<td width="9" height="9" background="images/box_10.png"><img src="images/box_10.png" width="9" height="9" alt=""></td>
<td width="9" height="9"><img src="images/box_11.png" width="9" height="9" alt=""></td>
</tr>
        </tbody></table>
				
<table width="3" cellspacing="0" cellpadding="0" border="0">
          <tbody><tr>
            <td height="9" align="right"><img width="9" height="30" alt="" src="images/boxbiru_01.png"></td>
            <td height="9" background="images/boxbiru_02.png" class="body9"><div align="center" style="margin: 5px 5px 3px;" class="shadow">Details Cart Box</div></td>
            <td height="9" align="right"><img width="9" height="30" alt="" src="images/boxbiru_03.png"></td>
          </tr>
          <tr>
            <td width="9" height="9" background="images/box_04.png" align="center"><img width="9" height="9" alt="" src="images/box_04.png"></td>
            <td bgcolor="#ffffff" align="center"><table width="503" cellspacing="0" cellpadding="0" border="0" align="center">
              <tbody><tr>
                <td align="center"><table width="95%" cellspacing="0" cellpadding="0" border="0" align="center">
                  <tbody><tr>
                    <td><div align="center" style="margin: 5px 3px; height: 350px; padding-right: 5px; overflow-y: scroll;">
                      <table width="476" cellspacing="0" cellpadding="0" border="0" align="center">
                            <tbody><tr>
                              <td align="center">
<?php
if($jml>0){
	for($k=0;$k<$jml;$k++){
?>
															<table width="100%" cellspacing="0" cellpadding="0" border="0">
                                <tbody><tr>
                                  <td width="160"><table width="97%" height="150px" cellspacing="1" cellpadding="1" border="0">
                                      <tbody><tr>
                                        <td bgcolor="#cccccc"><table width="100%" height="100%" cellspacing="0" cellpadding="0" border="0">
                                            <tbody><tr>
                                              <td valign="middle" bgcolor="#ffffff" align="center"><img width="150" height="150" src="<?=$_SESSION['vb_cart'][$k][6]?>"></td>
                                            </tr>
                                        </tbody></table></td>
                                      </tr>
                                  </tbody></table></td>
                                  <td valign="top" align="center"><table width="98%" cellspacing="0" cellpadding="0">
                                    <tbody><tr>
                                      <td colspan="3"><table width="100%" cellspacing="0" cellpadding="0" border="0">
                                          <tbody><tr>
                                            <td><strong class="body2"><?=$_SESSION['vb_cart'][$k][1]?></strong></td>
                                            <td width="11" class="body6"><a href="addcart.php?act=del&id=<?=$k?>" onClick="return confirm('Are you sure?');" title="Remove item"><img width="11" height="13" border="0" alt="Delete Item" src="images/delete.gif"></a></td>
                                          </tr>
                                      </tbody></table></td>
                                    </tr>
                                    <tr>
                                      <td colspan="3"><div align="center" style="margin: 3px 0px; background-color: rgb(204, 204, 204);"><img width="1" height="1" src="images/spacer.gif"></div></td>
                                    </tr>
                                    <tr>
                                      <td>Category </td>
                                      <td width="7">: </td>
                                      <td><strong><?=$_SESSION['vb_cart'][$k][2]?></strong></td>
                                    </tr>
                                    <tr>
                                      <td>Brand</td>
                                      <td width="7">: </td>
                                      <td><strong><?=$_SESSION['vb_cart'][$k][3]?></strong></td>
                                    </tr>
                                    <!--<tr valign="top">
                                      <td>Price</td>
                                      <td width="5"> : </td>
                                      <td><?=$_SESSION['vb_cart'][$k][4]?></td>
                                    </tr>-->
                                    <tr valign="top">
                                      <td>Quantity</td>
                                      <td width="5"> : </td>
                                      <td class="body7"><?=$_SESSION['vb_cart'][$k][5]?></td>
                                    </tr>
                                    <tr valign="top">
                                      <td colspan="3"><div align="center" style="margin: 3px 0px; background-color: rgb(204, 204, 204);"><img width="1" height="1" src="images/spacer.gif"></div></td>
                                    </tr>
                                    <tr valign="top">
                                      <td><strong>Details</strong></td>
                                      <td width="7">: </td>
                                      <td>&nbsp;</td>
                                    </tr>
                                    <tr valign="top">
                                      <td colspan="3"><div align="justify" style=""><?=$_SESSION['vb_cart'][$k][7]?></div></td>
                                    </tr>
                                    <tr>
                                      <td align="right" colspan="3"><div align="center" style="margin: 3px 0px; background-color: rgb(204, 204, 204);"><img width="1" height="1" src="images/spacer.gif"></div></td>
                                    </tr>
                                    <tr>
                                      <td align="right" colspan="3">&nbsp;</td>
                                    </tr>
                                  </tbody></table></td>
                                </tr>
                              </tbody></table>
                              <br><div align="center" style="margin: 3px 0px; background-color: rgb(204, 204, 204);"><img width="1" height="1" src="images/spacer.gif"></div>
<?php
	}
}else{
	echo "Empty";
}
?>
                                <table width="100%" cellspacing="0" cellpadding="0" border="0">
                                    <tbody><tr>
                                      <td height="13" align="center"><img width="1" height="1" src="images/spacer.gif"></td>
                                    </tr>
                                </tbody></table></td>
                            </tr>
                          </tbody></table>
                          </div></td>
                  </tr>
                </tbody></table>
                  <table width="100%" cellspacing="0" cellpadding="0" border="0">
                      <tbody><tr>
                        <td height="7" align="center"><img width="1" height="1" src="images/spacer.gif"></td>
                      </tr>
                    </tbody></table>
                  </td>
              </tr>
            </tbody></table></td>
            <td width="9" height="9" background="images/box_08.png" align="center"><img width="9" height="9" alt="" src="images/box_08.png"></td>
          </tr>
<tr>
<td width="9" height="9"><img src="images/box_09.png" width="9" height="9" alt=""></td>
<td width="9" height="9" background="images/box_10.png"><img src="images/box_10.png" width="9" height="9" alt=""></td>
<td width="9" height="9"><img src="images/box_11.png" width="9" height="9" alt=""></td>
</tr>
        </tbody></table>
</td>
