<td align="center" valign="top">
<table width="3" cellspacing="0" cellpadding="0" border="0">
          <tbody>
<tr>
<td height="9" align="right"><img width="9" height="30" alt="" src="images/box_011.png"></td>
<td height="9" background="images/box_021.png" class="body9"><div align="left" style="margin: 5px 5px 3px;" class="shadow">SERVICES</div></td>
<td height="9" align="right"><img width="9" height="30" alt="" src="images/box_031.png"></td>
</tr>
          <tr>
            <td width="9" height="9" background="images/box_04.png" align="center"><img width="9" height="9" alt="" src="images/box_04.png"></td>
            <td bgcolor="#ffffff" align="center"><table width="503" cellspacing="0" cellpadding="0" border="0" align="center">
              <tbody><tr>
                <td align="center"><table width="95%" cellspacing="0" cellpadding="0" border="0" align="center">
                  <tbody><tr>
                    <td><img width="503" height="150" src="images/audio.jpg"><br>
                        <br>
<?php
$sql=mysql_query("select * from tblservice");
$z=0;
while($field=mysql_fetch_array($sql)){
	$z++;
?>
<table width="3" cellspacing="0" cellpadding="0" border="0">
	<tbody><tr>
		<td height="9" align="right"><img width="9" height="30" alt="" src="images/boxbiru_01.png"></td>
		<td height="9" background="images/boxbiru_02.png" align="right" class="body9"><div align="center" style="margin: 5px 5px 3px;" class="shadow"><?=$field["title"]?></div></td>
		<td height="9" align="right"><img width="9" height="30" alt="" src="images/boxbiru_03.png"></td>
	</tr>
	<tr>
		<td width="9" height="9" background="images/box_04.png" align="center"><img width="1" height="1" alt="" src="images/spacer.gif"></td>
		<td bgcolor="#ffffff" align="center"><table width="485" height="58" cellspacing="0" cellpadding="0" border="0">
				<tbody><tr>
					<td valign="top"><table width="100%" cellspacing="0" cellpadding="0" border="0">
						<tbody><tr>
							<td width="110" valign="top"><table width="97%" height="99%" cellspacing="1" cellpadding="1" border="0">
									<tbody><tr>
										<td bgcolor="#cccccc" valign="top"><table width="100%" height="100%" cellspacing="0" cellpadding="0" border="0">
												<tbody><tr>
													<td valign="top" bgcolor="#ffffff" align="center"><img width="135" height="100" src="images/<?=$field["img"]?>"></td>
												</tr>
										</tbody></table></td>
									</tr>
							</tbody></table></td>
							<td valign="top"><div align="justify" style="margin: 0px 10px 2px;">
								<?=$field["content"]?></div>
								<!--<div align="right" style="margin: 3px 10px 3px 5px;"><a href="index.php?page=service_det">ReadMore</a></div>--></td>
						</tr>
					</tbody></table>
						</td>
				</tr>
		</tbody></table></td>
		<td width="9" height="9" background="images/box_08.png" align="center"><img width="1" height="1" alt="" src="images/spacer.gif"></td>
	</tr>
<tr>
<td width="9" height="9"><img src="images/box_09.png" width="9" height="9" alt=""></td>
<td width="9" height="9" background="images/box_10.png"><img src="images/box_10.png" width="9" height="9" alt=""></td>
<td width="9" height="9"><img src="images/box_11.png" width="9" height="9" alt=""></td>
</tr>
</tbody></table>
<div align="center"><img width="1" height="5" src="images/spacer.gif"><br></div>
<?php
}
?>
</td>
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
        </tbody></table></td>


