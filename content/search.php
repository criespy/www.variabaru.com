<td align="center" valign="top">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr>
	<td align="center"><!-- ImageReady Slices (HotItem.psd) -->
			<table id="Table_3" width="522" height="225" border="0" cellpadding="0" cellspacing="0">
<tr>
<td height="9" align="right"><img width="9" height="30" alt="" src="images/box_011.png"></td>
<td height="9" background="images/box_021.png" class="body9"><div align="left" style="margin: 5px 5px 3px;" class="shadow">SEARCH RESULTS</div></td>
<td height="9" align="right"><img width="9" height="30" alt="" src="images/box_031.png"></td>
</tr>
				<tr>
					<td background="images/box_04.png"><img src="images/box_04.png" width="9" height="9" alt=""></td>
					<td bgcolor="#FFFFFF"><table width="503" border="0" align="center" cellpadding="0" cellspacing="0">
							<tr>
								<td align="center"><div align="center" style="margin:3px 3px 0px 3px; height:565px; padding-right:5px; overflow-y: scroll; scrollbar-arrow-color: #FF0000; scrollbar-track-color:#FFFFFF; scrollbar-face-color:#FFFFFF; scrollbar-3dlight-color: #FFFFFF; scrollbar-highlight-color:#FFFFFF; scrollbar-shadow-color:#CCCCCC; scrollbar-darkshadow-Color:#FFFFFF;">
<?php
$sql=mysql_query("select * from tblproduct where brand LIKE '%$_POST[kw]%' OR category LIKE '%$_POST[kw]%' OR type LIKE '%$_POST[kw]%' OR partname LIKE '%$_POST[kw]%' order by category, type, partname");
while($field=mysql_fetch_array($sql)){
?>
									<table width="100%" border="0" cellspacing="0" cellpadding="2">
										<tr>
											<td width="100"><table width="97%" height="99%" border="0" cellspacing="1" cellpadding="1">
													<tr>
														<td bgcolor="#CCCCCC"><table width="100%" height="100%" border="0" cellspacing="0" cellpadding="0">
																<tr>
																	<td align="center" valign="middle" bgcolor="#FFFFFF"><a href="itemdetail.php?id=<?=$field['id']?>" onClick="NewWindow(this.href,'name','600','400','no','false');return false"><img border="0" src="images/products/<?=$field["img"]?>" width="100" height="67"></a></td>
																</tr>
														</table></td>
													</tr>
											</table></td>
											<td><DIV align="justify" style="margin:3px 0px 5px 5px"><p><STRONG class="body2"><?=$field["partname"]?></STRONG><BR><?=$field["ket"]?></p></DIV></td>
										</tr>
										<tr>
										<td colspan="2"><hr></td>
										</tr>
									</table>
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
		<!-- End ImageReady Slices --></td>
</tr>
</table></td>