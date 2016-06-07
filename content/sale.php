<script>
function validate_cart(x){
	if(x.qty.value==''){
		var msg = 'Please enter Quantity!';
		return msg;
	}
	else if(x.qty.value*1!=x.qty.value){
		var msg = 'Quantity must be numeric!';
		return msg;
	}
	else if(x.qty.value<=0){
		var msg = 'Minimum quantity is 1 item!';
		return msg;
	}
	return '';
}

function submit_cart(x){
	var error_msg = validate_cart(x);
	if(error_msg==''){
		x.submit();
	}
	else{
		alert(error_msg);
		x.qty.select();
	}
}
</script>
<td align="center" valign="top">
<table id="Table_3" width="522" height="225" border="0" cellpadding="0" cellspacing="0">
<tr>
<td height="9" align="right"><img width="9" height="30" alt="" src="images/box_011.png"></td>
<td height="9" background="images/box_021.png" class="body9"><div align="left" style="margin: 5px 5px 3px;" class="shadow">SALE ITEMS</div></td>
<td height="9" align="right"><img width="9" height="30" alt="" src="images/box_031.png"></td>
</tr>
                  <tr>
                    <td background="images/box_04.png"><img src="images/box_04.png" width="9" height="9" alt=""></td>
                    <td bgcolor="#FFFFFF"><table width="503" border="0" align="center" cellpadding="0" cellspacing="0">
                        <tr>
                          <td align="center"><div align="center" style="margin:3px 3px 0px 3px; height:700px; padding-right:5px; overflow-y: scroll; scrollbar-arrow-color: #FF0000; scrollbar-track-color:#FFFFFF; scrollbar-face-color:#FFFFFF; scrollbar-3dlight-color: #FFFFFF; scrollbar-highlight-color:#FFFFFF; scrollbar-shadow-color:#CCCCCC; scrollbar-darkshadow-Color:#FFFFFF;">
<?php
$sql=mysql_query("select * from tbltodayitem where type = 2 order by id desc");
$z=0;
while($field=mysql_fetch_array($sql)){
	$z++;
?>
														<table width="100%" border="0" cellspacing="0" cellpadding="0">
                              <tr>
                                <td width="250"><table width="97%" height="200px" border="0" cellspacing="1" cellpadding="1">
                                    <tr>
                                      <td bgcolor="#CCCCCC"><table width="100%" height="100%" border="0" cellspacing="0" cellpadding="0">
                                          <tr>
                                            <td align="center" valign="middle" bgcolor="#FFFFFF"><img src="images/otherprod/<?=$field["img"]?>" width="230" height="230"></td>
                                          </tr>
                                      </table></td>
                                    </tr>
                                </table></td>
                                <td align="center" valign="top"><table width="98%" cellpadding="0" cellspacing="0">
                                    <tr>
                                      <td colspan="3"><strong class="body2"><?=$field["name"]?></strong></td>
                                    </tr>
                                    <tr>
                                      <td colspan="3"><div align="center" style="margin:3px 0px 3px 0px; background-color:#CCCCCC"><img src="images/spacer.gif" width="1" height="1"></div></td>
                                    </tr>
                                    <tr>
                                      <td>Category </td>
                                      <td width="7">: </td>
                                      <td><strong><?=$field["category"]?></strong></td>
                                    </tr>
                                    <tr>
                                      <td>Brand</td>
                                      <td width="7">: </td>
                                      <td><strong><?=$field["brand"]?></strong></td>
                                    </tr>
                                    <tr valign="top">
                                      <td>Price</td>
                                      <td>: </td>
                                      <td>Rp.<?=number_format($field["price"],0,',','.')?></td>
                                    </tr>
                                    <tr valign="top">
                                      <td>Status</td>
                                      <td>: </td>
                                      <td class="body7"><?=$field["stock"]?></td>
                                    </tr>
                                    <tr valign="top">
                                      <td colspan="3"><div align="center" style="margin:3px 0px 3px 0px; background-color:#CCCCCC"><img src="images/spacer.gif" width="1" height="1"></div></td>
                                    </tr>
                                    <tr valign="top">
                                      <td class="body6">Details</td>
                                      <td width="7">: </td>
                                      <td>&nbsp;</td>
                                    </tr>
                                    <tr valign="top">
                                      <td colspan="3"><div align="justify" style=""><?=$field["detail"]?></div></td>
                                    </tr>
                                    <tr>
                                      <td colspan="3" align="right"><div align="center" style="margin:3px 0px 3px 0px; background-color:#CCCCCC"><img src="images/spacer.gif" width="1" height="1"></div></td>
                                    </tr>
                                    <tr>
                                      <td colspan="3" align="right"><table width="100%" border="0" align="center" cellpadding="1" cellspacing="1">
                                          <tr>
                                            <td width="35%" class="body6">Quantity</td>
                                            <td>:</td>
                                            <td valign="top"><table width="95%" border="0" cellpadding="0" cellspacing="0">
                                                <tr>
                                                  <form action="addcart.php" method="post" name="cart<?=$z?>">
																									<input type="hidden" name="img" value="images/otherprod/<?=$field["img"]?>"/>
																									<input type="hidden" name="tipe" value="saleitem"/>
																									<input type="hidden" name="namabrg" value="<?=$field["name"]?>"/>
																									<input type="hidden" name="cat" value="<?=$field["category"]?>"/>
																									<input type="hidden" name="brand" value="<?=$field["brand"]?>"/>
																									<input type="hidden" name="price" value="<?=$field["price"]?>"/>
																									<input type="hidden" name="detail" value="<?=$field["detail"]?>"/>
																									<td width="49%"><input name="qty" type="text" class="body5" id="qtt" size="3" maxlength="6" style="height:15px; width:50px"></td>
																									<td width="51%" align="right"><a href="#" onClick="submit_cart(document.cart<?=$z?>);">Add to Chart</a></td>
																									</form>
                                                </tr>
                                            </table></td>
                                          </tr>
                                      </table></td>
                                    </tr>
                                  </table>
                                    <table width="237" height="57" border="0" cellspacing="1" cellpadding="1">
                                      <tr>
                                        <td>&nbsp;</td>
                                      </tr>
                                  </table></td>
                              </tr>
                            </table>
                            <br>
                            <div align="center" style="margin:3px 0px 3px 0px; background-color:#CCCCCC"><img src="images/spacer.gif" width="1" height="1"></div>
                            <br>
<?php
}
?>
                          </div>
                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                              <tr>
                                <td height="13" align="center"><img src="images/spacer.gif" width="1" height="1"></td>
                              </tr>
                            </table></td>
                        </tr>
                    </table></td>
                    <td background="images/box_08.png"><img src="images/box_08.png" width="9" height="9" alt=""></td>
                  </tr>
                  <tr>
                    <td><img src="images/box_09.png" width="9" height="9" alt=""></td>
                    <td background="images/box_10.png"><img src="images/box_10.png" width="9" height="9" alt=""></td>
                    <td><img src="images/box_11.png" width="9" height="9" alt=""></td>
                  </tr>
                </table>
</td>