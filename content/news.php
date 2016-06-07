<td align="center" valign="top">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr>
	<td align="center"><!-- ImageReady Slices (HotItem.psd) -->
			<table id="Table_3" width="522" height="225" border="0" cellpadding="0" cellspacing="0">
<tr>
<td height="9" align="right"><img width="9" height="30" alt="" src="images/box_011.png"></td>
<td height="9" background="images/box_021.png" class="body9"><div align="left" style="margin: 5px 5px 3px;" class="shadow">NEWS</div></td>
<td height="9" align="right"><img width="9" height="30" alt="" src="images/box_031.png"></td>
</tr>
				<tr>
					<td background="images/box_04.png"><img src="images/box_04.png" width="9" height="9" alt=""></td>
					<td bgcolor="#FFFFFF"><table width="503" border="0" align="center" cellpadding="0" cellspacing="0">
							<tr>
								<td align="center"><div align="center" style="margin:3px 3px 0px 3px; height:600px; padding-right:5px; overflow-y: scroll; scrollbar-arrow-color: #FF0000; scrollbar-track-color:#FFFFFF; scrollbar-face-color:#FFFFFF; scrollbar-3dlight-color: #FFFFFF; scrollbar-highlight-color:#FFFFFF; scrollbar-shadow-color:#CCCCCC; scrollbar-darkshadow-Color:#FFFFFF;">
<?php
$sql=mysql_query("select ns.*, date_format(ns.tgl, '%d/%m/%Y') as tgl2 from tblnews ns order by tgl desc LIMIT 5");
while($field=mysql_fetch_array($sql)){
?>
									<table width="100%" border="0" cellspacing="3" cellpadding="3">
										<tr>
											<td width="110" valign="top"><table width="97%" height="99%" border="0" cellspacing="1" cellpadding="1">
													<tr>
														<td bgcolor="#CCCCCC" valign="top"><table width="100%" height="100%" border="0" cellspacing="0" cellpadding="0">
																<tr>
																	<td align="center" valign="top" bgcolor="#FFFFFF"><img src="images/news/<?=$field["img"]?>" width="135" height="100"></td>
																</tr>
														</table></td>
													</tr>
											</table></td>
											<td valign="top"><DIV align="justify" style="margin:3px 0px 5px 5px;font-size:12px;"><STRONG class="body2" style="font-size:13px;"><?=$field["title"]?> - <?=$field["tgl2"]?></STRONG><BR>
												<?=$field["news"]?></DIV></td>
											</tr>
									</table><hr />
<?php
}
?>
								</div>
									<div align="center" style="margin:3px 0px 3px 0px; background-color:#CCCCCC"><img src="images/spacer.gif" width="1" height="1"></div>
</td>
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
		<!-- End ImageReady Slices --></td>
</tr>
</table></td>