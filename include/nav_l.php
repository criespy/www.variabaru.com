        <td width="186" align="right" valign="top">
				<table width="3" cellspacing="0" cellpadding="0" border="0">
          <tbody>
					<tr>
            <td height="9" align="right"><img width="9" height="30" alt="" src="images/box_011.png"></td>
            <td height="9" background="images/box_021.png" align="right" class="body9"><div align="center" style="margin: 5px 5px 3px;" class="shadow">SEARCH</div></td>
            <td height="9" align="right"><img width="9" height="30" alt="" src="images/box_031.png"></td>
          </tr>
          <tr>
            <td width="9" height="9" background="images/box_04.png" align="center"><img width="9" height="9" alt="" src="images/box_04.png"></td>
            <td bgcolor="#ffffff" align="center"><table width="159" height="27" cellspacing="0" cellpadding="0" border="0">
              <tbody><tr><form action="index.php?page=search" method="post" name="frmsearch">
                <td valign="middle" bgcolor="#ffffff" align="center"><input type="text" size="20" value="Search" onClick="this.value=''" id="Search" class="body3" name="kw">
                    <input type="submit" value="Go" id="Go" class="body3" name="Go"></td>
              </form></tr>
            </tbody></table></td>
            <td width="9" height="9" background="images/box_08.png" align="center"><img width="9" height="9" alt="" src="images/box_08.png"></td>
          </tr>
          <tr>
            <td width="9" height="9"><img src="images/box_09.png" width="9" height="9" alt=""></td>
            <td width="9" height="9" background="images/box_10.png"><img src="images/box_10.png" width="9" height="9" alt=""></td>
            <td width="9" height="9"><img src="images/box_11.png" width="9" height="9" alt=""></td>
          </tr>
        </tbody></table>
				<table id="Table_" width="27" height="27" border="0" cellpadding="0" cellspacing="0">
          <tr>
              <td height="9" align="right"><img width="9" height="30" alt="" src="images/box_011.png"></td>
              <td height="9" background="images/box_021.png" align="right" class="body9"><div align="center" style="margin: 5px 5px 3px;" class="shadow">Shop by Categories</div></td>
              <td height="9" align="right"><img width="9" height="30" alt="" src="images/box_031.png"></td>
            </tr>
          <tr>
            <td width="9" height="9" background="images/box_04.png"><img src="images/box_04.png" width="9" height="9" alt=""></td>
            <td bgcolor="#FFFFFF"><table width="159" height="27" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td align="center" valign="middle" bgcolor="#FFFFFF"><select name="jumpMenu" class="body3" id="jumpMenu" onChange="MM_jumpMenu('parent',this,0)">
                    <option>Browse Our Categories...</option>
<?php
$sqlz=mysql_query("select * from tblcat order by cat");
while($fieldz=mysql_fetch_array($sqlz)){
?>
                    <option value="<?=urlencode($fieldz[cat])?>"><?=$fieldz[cat]?></option>
<?php
}
?>
                </select></td>
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
          <table width="90%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td align="center">
							<a onmouseover="MM_swapImage('btnNetwork','','images/menu_09b.png',1)" onmouseout="MM_swapImgRestore()" href="index.php?page=network"><img width="177" height="124" border="0" name="btnNetwork" alt="Our Network Links" src="images/menu_09.png"></a></td>
            </tr>
          </table>
          <table id="Table_4" width="177" height="67" border="0" cellpadding="0" cellspacing="0">
            <tr>
              <td colspan="3"><img src="images/about_01.png" width="177" height="22" alt=""></td>
            </tr>
            <tr>
              <td background="images/about_02.png"><img src="images/about_02.png" width="9" height="36" alt=""></td>
              <td bgcolor="#EC2E05"><table width="100%" height="36" border="0" cellpadding="1" cellspacing="1">
                  <tr>
                    <td valign="top" class="body1"><p align="left" class="bodyWhite10px"><?=$field['abtsim']?><span style="margin:5px 5px 5px 5px">... <a href="index.php?page=about">readmore</a></span></p></td>
                  </tr>
              </table></td>
              <td background="images/about_04.png"><img src="images/about_04.png" width="9" height="36" alt=""></td>
            </tr>
            <tr>
              <td><img src="images/about_05.png" width="9" height="9" alt=""></td>
              <td><img src="images/about_06.png" width="159" height="9" alt=""></td>
              <td><img src="images/about_07.png" width="9" height="9" alt=""></td>
            </tr>
          </table>
          <table width="90%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td align="center"><img src="images/guarantee_19.png" width="159" height="65"></td>
            </tr>
          </table>
          <table id="Table_5" width="177" height="57" border="0" cellpadding="0" cellspacing="0">
            <tr>
              <td colspan="2"><img src="images/pdf_01.png" width="115" height="7" alt=""></td>
              <td rowspan="3"><img src="images/pdf_02.png" width="61" height="57" alt=""></td>
              <td rowspan="3"><img src="images/pdf_03.png" width="1" height="57" alt=""></td>
            </tr>
            <tr>
              <td rowspan="2"><img src="images/pdf_04.png" width="3" height="50" alt=""></td>
              <td><a href="index.php?page=download" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image65','','images/pdf2_05.png',1)"><img src="images/pdf_05.png" name="Image65" width="112" height="45" border="0"></a></td>
            </tr>
            <tr>
              <td><img src="images/pdf_06.png" width="112" height="5" alt=""></td>
            </tr>
          </table>
          <table width="90%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td align="right"><a href="index.php?page=contact"><img border="0" src="images/cs_27.png" width="177" height="70"></a></td>
            </tr>
          </table>
          <table width="90%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td align="right"><a href="index.php?page=service"><img src="images/homeinstal_28.png" width="177" height="72" border="0"></a></td>
            </tr>
          </table></td>