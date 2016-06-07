<td align="center" valign="top">
<table id="Table_3" width="522" height="225" border="0" cellpadding="0" cellspacing="0">
<tr>
<td height="9" align="right"><img width="9" height="30" alt="" src="images/box_011.png"></td>
<td height="9" background="images/box_021.png" class="body9"><div align="left" style="margin: 5px 5px 3px;" class="shadow">GALLERY</div></td>
<td height="9" align="right"><img width="9" height="30" alt="" src="images/box_031.png"></td>
</tr>
                  <tr>
                    <td background="images/box_04.png"><img src="images/box_04.png" width="9" height="9" alt=""></td>
                    <td bgcolor="#FFFFFF"><table width="503" border="0" align="center" cellpadding="0" cellspacing="0">
                        <tr>
                          <td align="center"><div align="center" style="margin:3px 3px 0px 3px; height:700px; padding-right:5px; overflow-y: scroll; scrollbar-arrow-color: #FF0000; scrollbar-track-color:#FFFFFF; scrollbar-face-color:#FFFFFF; scrollbar-3dlight-color: #FFFFFF; scrollbar-highlight-color:#FFFFFF; scrollbar-shadow-color:#CCCCCC; scrollbar-darkshadow-Color:#FFFFFF;">
<?php
$sql=mysql_query("select * from tbltodayitem where type = 1 order by id desc");
$z=0;
while($field=mysql_fetch_array($sql)){
	$z++;
?>
														<table width="100%" border="0" cellspacing="0" cellpadding="0">
                              <tr>
                                <td width="300" valign="top"><table width="97%" height="99%" border="0" cellspacing="1" cellpadding="1">
                                    <tr>
                                      <td bgcolor="#CCCCCC"><table width="100%" height="100%" border="0" cellspacing="0" cellpadding="0">
                                          <tr>
                                            <td align="center" valign="middle" bgcolor="#FFFFFF"><img src="images/otherprod/<?=$field["img"]?>" width="300" height="175"></td>
                                          </tr>
                                      </table></td>
                                    </tr>
                                </table></td>
                                <td align="center" valign="top"><table width="98%" align="right" cellpadding="0" cellspacing="0">
                                    <tr>
                                      <td colspan="3"><strong class="body2"><?=$field["name"]?></strong></td>
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
                                    <!--<tr valign="top">
                                      <td>Price</td>
                                      <td>: </td>
                                      <td>Rp.<?=number_format($field["price"],0,',','.')?></td>
                                    </tr>-->
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
                                      <td colspan="3" align="right"><table width="86%" border="0" cellpadding="0" cellspacing="0">
                                        <tr>
                                          <td width="51%" align="right"><a href="index.php?page=contact">Contact Us</a></td>
                                        </tr>
                                      </table></td>
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
                    <td width="9" height="9"><img src="images/box_09.png" width="9" height="9" alt=""></td>
                    <td width="9" height="9" background="images/box_10.png"><img src="images/box_10.png" width="9" height="9" alt=""></td>
                    <td width="9" height="9"><img src="images/box_11.png" width="9" height="9" alt=""></td>
                  </tr>
                </table>
</td>