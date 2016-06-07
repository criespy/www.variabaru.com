<td align="center" valign="top">
<table width="3" cellspacing="0" cellpadding="0" border="0">
          <tbody>
<tr>
<td height="9" align="right"><img width="9" height="30" alt="" src="images/box_011.png"></td>
<td height="9" background="images/box_021.png" class="body9"><div align="left" style="margin: 5px 5px 3px;" class="shadow">PRODUCTS</div></td>
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
<table border="0" align="center" cellpadding="2" cellspacing="0">
<tr><td><font size="4"><b><center>Select Product Category:</center></b></font></td></tr>
<?php
$_GET["cat"] =strip_tags($_GET["cat"]);
$_GET["cat"] = addslashes($_GET["cat"]);

$q=0;
$sql_cat0=mysql_query("SELECT cat FROM tblcat");
$sql_cat1=mysql_query("SELECT cat FROM tblcat");
$jml0 = mysql_num_rows($sql_cat1);
while($field_cat0=mysql_fetch_array($sql_cat0)){
$q++;
	if($q==1 || $q%2==1)
		echo "<tr>";
?>
<td><table width="3" cellspacing="0" cellpadding="0" border="0">
	<tbody><tr>
		<td height="9" align="right"><img width="9" height="30" alt="" src="images/boxbiru_01.png"></td>
		<td onmouseover="this.style.cursor='pointer'" onclick="document.location='index.php?page=product&cat=<?=$field_cat0["cat"]?>'" height="9" background="images/boxbiru_02.png" align="right" class="body9"><div align="center" style="margin: 5px 5px 3px;width:175px" class="shadow"><?=$field_cat0["cat"]?></div></td>
		<td height="9" align="right"><img width="9" height="30" alt="" src="images/boxbiru_03.png"></td>
	</tr>
</table></td>
<?php
	if($q%2==0 || $q==$jml0)
		echo "</tr>";
}
?>
</table><br />
<?php
if($_GET["cat"]!=''){
	$sql_cat=mysql_query("select cat from tblcat where cat = '".$_GET["cat"]."' order by cat");
	while($field_cat=mysql_fetch_array($sql_cat)){
?>
<table width="3" cellspacing="0" cellpadding="0" border="0">
	<tbody><tr>
		<td height="9" align="right"><img width="9" height="30" alt="" src="images/boxbiru_01.png"></td>
		<td height="9" background="images/boxbiru_02.png" align="right" class="body9"><div align="center" style="margin: 5px 5px 3px;" class="shadow"><?=$field_cat["cat"]?></div></td>
		<td height="9" align="right"><img width="9" height="30" alt="" src="images/boxbiru_03.png"></td>
	</tr>
	<tr>
		<td width="9" height="9" background="images/box_04.png" align="center"><img width="1" height="1" alt="" src="images/spacer.gif"></td>
		<td bgcolor="#ffffff" align="center"><div align="center" style="margin: 5px 3px; height: 265px; padding-right: 5px; overflow-y: scroll;">
		<table width="455" height="58" cellspacing="0" cellpadding="0" border="0">
				<tbody><tr>
					<td><table width="100%" cellspacing="4" cellpadding="3" border="0">
						<tbody>
<?php
$z=0;
$sql=mysql_query("select * from tblproduct where category = '".$field_cat['cat']."' order by id desc");
$sql2=mysql_query("select * from tblproduct where category = '".$field_cat['cat']."' order by id desc");
$jml = mysql_num_rows($sql2);
while($field=mysql_fetch_array($sql)){
$z++;
	if($z==1 || $z%4==1)
		echo "<tr>";
?>
							<td align="left" width="95" valign="top"><table width="95" cellspacing="0" cellpadding="0" border="0">
									<tbody><tr>
										<td height="80"><img width="100" height="67" src="images/products/<?=$field["img"]?>"></td>
									</tr>
									<tr>																					
										<td><table width="90%" cellspacing="0" cellpadding="0" border="0" align="center">
												<tbody><tr>
													<td valign="top" class="body2"><?=$field["type"]?></td>
												</tr>
											</tbody></table>
												<table width="90%" cellspacing="0" cellpadding="0" border="0" align="center">
													<tbody><tr>
														<td valign="top"><strong><?=$field["partname"]?></strong></td>
													</tr>
												</tbody></table>
											<table width="90%" cellspacing="0" cellpadding="0" border="0" align="center">
													<tbody><tr>
														<td valign="top"><div align="right"><a onclick="NewWindow(this.href,'name','600','400','no','false');return false" href="itemdetail.php?id=<?=$field["id"]?>">view</a></div></td>
													</tr>
											</tbody></table></td>																							
									</tr>
							</tbody></table></td>
<?php
	if($z%4==0 || $z==$jml)
		echo "</tr>";
}
?>
</tbody></table>
</td>
				</tr>
		</tbody></table></div></td>
		<td width="9" height="9" background="images/box_06.png" align="center"><img width="1" height="1" alt="" src="images/spacer.gif"></td>
	</tr>
<tr>
<td width="9" height="9"><img src="images/box_09.png" width="9" height="9" alt=""></td>
<td width="9" height="9" background="images/box_10.png"><img src="images/box_10.png" width="9" height="9" alt=""></td>
<td width="9" height="9"><img src="images/box_11.png" width="9" height="9" alt=""></td>
</tr>
</tbody></table>
<?php
	}
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