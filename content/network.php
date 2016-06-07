<td align="center" valign="top"><table width="3" border="0" cellspacing="0" cellpadding="0">
<tr>
<td height="9" align="right"><img width="9" height="30" alt="" src="images/box_011.png"></td>
<td height="9" background="images/box_021.png" class="body9"><div align="left" style="margin: 5px 5px 3px;" class="shadow">NETWORK</div></td>
<td height="9" align="right"><img width="9" height="30" alt="" src="images/box_031.png"></td>
</tr>
	<td width="9" height="9" align="center" background="images/box_04.png"></td>
	
<td bgcolor="#ffffff" align="center"><table width="503" cellspacing="0" cellpadding="0" border="0" align="center">
              <tbody><tr>
                <td align="center"><table width="95%" cellspacing="0" cellpadding="0" border="0" align="center">
                  <tbody><tr>
                    <td>
                    <!--<img width="503" height="150" src="images/network503.jpg">-->
                    <object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" width="503" height="200" id="Main" align="middle">
				<param name="movie" value="images/network.swf" />
				<param name="quality" value="high" />

				<param name="play" value="true" />
				<param name="loop" value="true" />
				<param name="wmode" value="window" />
				<param name="scale" value="showall" />
				<param name="menu" value="true" />

				<param name="devicefont" value="false" />
				<param name="salign" value="" />
				<param name="allowScriptAccess" value="sameDomain" />

				<!--[if !IE]>-->
				<object type="application/x-shockwave-flash" data="images/network.swf" width="503" height="200">
					<param name="movie" value="images/network.swf" />
					<param name="quality" value="high" />
					<param name="play" value="true" />
					<param name="loop" value="true" />
					<param name="wmode" value="window" />
					<param name="scale" value="showall" />
					<param name="menu" value="true" />

					<param name="devicefont" value="false" />
					<param name="salign" value="" />
					<param name="allowScriptAccess" value="sameDomain" />
				<!--<![endif]-->
					<a href="http://www.adobe.com/go/getflash">

						<img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" />
					</a>
				<!--[if !IE]>-->

				</object>
				<!--<![endif]-->
			</object>

                    <br>
                        
										
										
<table width="100%" cellspacing="0" cellpadding="0" border="0">
                          <tbody><tr>
                            <td align="center"><div align="center" style="margin: 3px;"> <strong class="body8">DAFTAR PERWAKILAN PT. VARIA BARU</strong><br>
                              </div>
                                 <div align="center" style="margin: 3px 3px 0px;">
                                   <table width="500" cellspacing="0" cellpadding="0" border="0">
                                     <tbody><tr>
                                       <td bgcolor="#cccccc"><table width="100%" cellspacing="1" cellpadding="2" border="0">
                                           <tbody><tr>
                                             <td width="25" valign="middle" bgcolor="#ffffff" align="center" class="body2">No</td>
                                             <td valign="middle" bgcolor="#ffffff" align="center" class="body2">NAMA CABANG &amp; ALAMAT</td>
                                           </tr>
                                       </tbody></table></td>
                                     </tr>
                                   </tbody></table>
                                   </div>
                                 <div align="center" style="margin: 0px 3px 5px; height: 259px; padding-right: 5px; overflow-y: scroll;">
                                   <table width="100%" cellspacing="0" cellpadding="0" border="0" align="center">
                                    <tbody><tr>
                                      <td bgcolor="#cccccc"><table width="100%" cellspacing="1" cellpadding="2" border="0">
                                          <tbody>
<?php
if($_GET["id"]>0 && $_GET["id"]<50){
	$sql=mysql_query("select * from tblnetwork WHERE prov = ".$_GET["id"]." order by cabang");
} else {
	$sql=mysql_query("select * from tblnetwork WHERE prov = 25 order by cabang");
}
$z=0;
while($field=mysql_fetch_array($sql)){
	$z++;
?>
																					<tr>
                                            <td width="25" valign="middle" bgcolor="#ffffff" align="center"><?=$z?></td>
                                            <td valign="middle" bgcolor="#ffffff" align="center"><strong><?=$field["cabang"]?><br>
                                            </strong><?=$field["alamat"]?><br>
                                              Telp. <?=$field["telp"]?></td>
                                            </tr>
<?php
}
if($z==0)
echo "<tr><td colspan=2 bgcolor=\"#ffffff\">No Data.</td></tr>";
?>
                                      </tbody></table></td>
                                    </tr>
                                  </tbody></table></div>
                               </td>
                          </tr>
                        </tbody></table>
                                   </div>																	
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
	
	<td width="9" height="9" align="center" background="images/box_08.png"><img src="images/box_08.png" width="9" height="9" alt=""></td>
</tr>
<tr>
	<td width="9" height="9" align="center"><img src="images/box_09.png" width="9" height="9" alt=""></td>
	<td width="9" height="9" align="center" background="images/box_10.png"><img src="images/box_10.png" width="9" height="9" alt=""></td>
	<td width="9" height="9" align="center"><img src="images/box_11.png" width="9" height="9" alt=""></td>
</tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
	<tr>
		<td align="center"><!-- ImageReady Slices (news.psd) -->
				<table id="Table_01" width="523" height="38" border="0" cellpadding="0" cellspacing="0">
					<tr>
						<td><img src="images/news_01.png" width="13" height="13" alt=""></td>
						<td background="images/news_02.png"><img src="images/news_02.png" width="13" height="13" alt=""></td>
						<td><img src="images/news_03.png" width="13" height="13" alt=""></td>
					</tr>
					<tr>
						<td background="images/news_04.png"><img src="images/news_04.png" width="13" height="12" alt=""></td>
						<td><table width="497" height="15" border="0" cellspacing="0" cellpadding="0">
								<tr>
									<td align="center" bgColor="white"><b><marquee scrolldelay="100" onmouseover="this.stop();" onmouseout="this.start();"><?=$field['runtext']?></marquee></b></td>
								</tr>
						</table></td>
						<td background="images/news_06.png"><img src="images/news_06.png" width="13" height="12" alt=""></td>
					</tr>
					<tr>
						<td><img src="images/news_07.png" width="13" height="13" alt=""></td>
						<td background="images/news_08.png"><img src="images/news_08.png" width="13" height="13" alt=""></td>
						<td><img src="images/news_09.png" width="13" height="13" alt=""></td>
					</tr>
				</table>
			<!-- End ImageReady Slices --></td>
	</tr>
</table>
<table width="3" cellspacing="0" cellpadding="0" border="0">
						<tbody><tr>
              <td height="9" align="right"><img width="9" height="30" alt="" src="images/box_011.png"></td>
              <td height="9" background="images/box_021.png" align="right" class="body9"><div align="left" style="margin: 5px 5px 3px;" class="shadow">GALLERY</div></td>
              <td height="9" align="right"><img width="9" height="30" alt="" src="images/box_031.png"></td>
            </tr>
            <tr>
              <td width="9" height="9" background="images/box_04.png" align="center"><img width="9" height="9" alt="" src="images/box_04.png"></td>
              <td bgcolor="#ffffff" align="center"><iframe width="503" height="185" frameborder="0" scrolling="no" vspace="0" hspace="0" marginheight="0" marginwidth="0" src="hotitem-content.php" id="hotitem"></iframe></td>
              <td width="9" height="9" background="images/box_08.png" align="center"></td>
            </tr>
            <tr>
						<td><img src="images/box_09.png" width="9" height="9" alt=""></td>
						<td background="images/box_10.png"><img src="images/box_10.png" width="9" height="9" alt=""></td>
						<td><img src="images/box_11.png" width="9" height="9" alt=""></td>
					</tr>
          </tbody></table>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
	<tr>
		<td align="center"><!-- ImageReady Slices (sparepart.psd) -->
				

				<table width="3" cellspacing="0" cellpadding="0" border="0">
            <tbody><tr>
              <td height="9" align="right"><img width="9" height="30" alt="" src="images/box_011.png"></td>
              <td height="9" background="images/box_021.png" align="right" class="body9"><div align="left" style="margin: 5px 5px 3px;" class="shadow">SALE ITEM - DISKON sampai dengan 90%</div></td>
              <td height="9" align="right"><img width="9" height="30" alt="" src="images/box_031.png"></td>
            </tr>
            <tr>
              <td width="9" height="9" background="images/box_04.png" align="center"><img width="9" height="9" alt="" src="images/box_04.png"></td>
              <td bgcolor="#ffffff" align="center"><table width="505" height="58" cellspacing="0" cellpadding="0" border="0">
                <tbody><tr>
                  <td>
									<script type="text/javascript">

/***********************************************
* Conveyor belt slideshow script- &copy; Dynamic Drive DHTML code library (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for full source code
***********************************************/


//Specify the slider's width (in pixels)
var sliderwidth="500px"
//Specify the slider's height
var sliderheight="58px"
//Specify the slider's slide speed (larger is faster 1-10)
var slidespeed=2
//configure background color:
slidebgcolor="#FFFFFF"

//Specify the slider's images
var leftrightslide=new Array()
var finalslide=''
<?php
$sql=mysql_query("select name, brand, img from tbltodayitem where type = 2 order by id desc");
$c=0;
while($field=mysql_fetch_array($sql)){
	
?>
leftrightslide[<?=$c?>]='<a href="index.php?page=sale" title="<?=$field["brand"]?> - <?=$field["name"]?>"><img src="images/otherprod/<?=$field["img"]?>" border=0 width=60 height=60></a>'
<?php
	$c++;
}
?>
//Specify gap between each image (use HTML):
var imagegap=" "

//Specify pixels gap between each slideshow rotation (use integer):
var slideshowgap=3


////NO NEED TO EDIT BELOW THIS LINE////////////

var copyspeed=slidespeed
leftrightslide='<nobr>'+leftrightslide.join(imagegap)+'</nobr>'
var iedom=document.all||document.getElementById
if (iedom)
document.write('<span id="temp" style="visibility:hidden;position:absolute;top:-100px;left:-9000px">'+leftrightslide+'</span>')
var actualwidth=''
var cross_slide, ns_slide

function fillup(){
if (iedom){
cross_slide=document.getElementById? document.getElementById("test2") : document.all.test2
cross_slide2=document.getElementById? document.getElementById("test3") : document.all.test3
cross_slide.innerHTML=cross_slide2.innerHTML=leftrightslide
actualwidth=document.all? cross_slide.offsetWidth : document.getElementById("temp").offsetWidth
cross_slide2.style.left=actualwidth+slideshowgap+"px"
}
else if (document.layers){
ns_slide=document.ns_slidemenu.document.ns_slidemenu2
ns_slide2=document.ns_slidemenu.document.ns_slidemenu3
ns_slide.document.write(leftrightslide)
ns_slide.document.close()
actualwidth=ns_slide.document.width
ns_slide2.left=actualwidth+slideshowgap
ns_slide2.document.write(leftrightslide)
ns_slide2.document.close()
}
lefttime=setInterval("slideleft()",30)
}
window.onload=fillup

function slideleft(){
if (iedom){
if (parseInt(cross_slide.style.left)>(actualwidth*(-1)+8))
cross_slide.style.left=parseInt(cross_slide.style.left)-copyspeed+"px"
else
cross_slide.style.left=parseInt(cross_slide2.style.left)+actualwidth+slideshowgap+"px"

if (parseInt(cross_slide2.style.left)>(actualwidth*(-1)+8))
cross_slide2.style.left=parseInt(cross_slide2.style.left)-copyspeed+"px"
else
cross_slide2.style.left=parseInt(cross_slide.style.left)+actualwidth+slideshowgap+"px"

}
else if (document.layers){
if (ns_slide.left>(actualwidth*(-1)+8))
ns_slide.left-=copyspeed
else
ns_slide.left=ns_slide2.left+actualwidth+slideshowgap

if (ns_slide2.left>(actualwidth*(-1)+8))
ns_slide2.left-=copyspeed
else
ns_slide2.left=ns_slide.left+actualwidth+slideshowgap
}
}


// if (iedom||document.layers){
// with (document){
// document.write('<table border="0" cellspacing="0" cellpadding="0"><td>')
// if (iedom){
// write('<div style="position:relative;width:'+sliderwidth+';height:'+sliderheight+';overflow:hidden">')
// write('<div style="position:absolute;width:'+sliderwidth+';height:'+sliderheight+';background-color:'+slidebgcolor+'" onMouseover="copyspeed=0" onMouseout="copyspeed=slidespeed">')
// write('<div id="test2" style="position:absolute;left:0px;top:0px"></div>')
// write('<div id="test3" style="position:absolute;left:-1000px;top:0px"></div>')
// write('</div></div>')
// }
// else if (document.layers){
// write('<ilayer width='+sliderwidth+' height='+sliderheight+' name="ns_slidemenu" bgColor='+slidebgcolor+'>')
// write('<layer name="ns_slidemenu2" left=0 top=0 onMouseover="copyspeed=0" onMouseout="copyspeed=slidespeed"></layer>')
// write('<layer name="ns_slidemenu3" left=0 top=0 onMouseover="copyspeed=0" onMouseout="copyspeed=slidespeed"></layer>')
// write('</ilayer>')
// }
// document.write('</td></table>')
// }
// }
							</script>
									<span style="visibility: hidden; position: absolute; top: -100px; left: -9000px;" id="temp"><nobr><a href="sparepart.html"><img border="0" src="images/sparepart/alarm-panther.jpg"></a> <a href="sparepart.html"><img border="0" src="images/sparepart/bonet-bintik-kia-carens.jpg"></a> <a href="sparepart.html"><img border="0" src="images/sparepart/bonet-carbon-look-panther.jpg"></a> <a href="sparepart.html"><img border="0" src="images/sparepart/bonet-carbon-look-trajet.jpg"></a> <a href="sparepart.html"><img border="0" src="images/sparepart/bonet-egr-honda-crv.jpg"></a> <a href="sparepart.html"><img border="0" src="images/sparepart/bonet-mitsubishi-kuda.jpg"></a> <a href="sparepart.html"><img border="0" src="images/sparepart/bonet-taruna.jpg"></a> <a href="sparepart.html"><img border="0" src="images/sparepart/bonet-vitara.jpg"></a> <a href="sparepart.html"><img border="0" src="images/sparepart/bull-bar-kijang-kapsul.jpg"></a> <a href="sparepart.html"><img border="0" src="images/sparepart/rear-step-avanza-pu.jpg"></a> <a href="sparepart.html"><img border="0" src="images/sparepart/sbm-avanza-vitro-carbon.jpg"></a> <a href="sparepart.html"><img border="0" src="images/sparepart/sbm-avanza-vitro-carbon-look.jpg"></a> <a href="sparepart.html"><img border="0" src="images/sparepart/tail-lamp-panther-carbon.jpg"></a> <a href="sparepart.html"><img border="0" src="images/sparepart/tail-lamp-panther-hitam.jpg"></a></nobr></span><table cellspacing="0" cellpadding="0" border="0"><tbody><tr><td><div style="position: relative; width: 500px; height: 58px; overflow: hidden;"><div onmouseout="copyspeed=slidespeed" onmouseover="copyspeed=0" style="position: absolute; width: 500px; height: 58px; background-color: rgb(255, 255, 255);"><div style="position: absolute; left: -550px; top: 0px;" id="test2"><nobr><a href="sparepart.html"><img border="0" src="images/sparepart/alarm-panther.jpg"></a> <a href="sparepart.html"><img border="0" src="images/sparepart/bonet-bintik-kia-carens.jpg"></a> <a href="sparepart.html"><img border="0" src="images/sparepart/bonet-carbon-look-panther.jpg"></a> <a href="sparepart.html"><img border="0" src="images/sparepart/bonet-carbon-look-trajet.jpg"></a> <a href="sparepart.html"><img border="0" src="images/sparepart/bonet-egr-honda-crv.jpg"></a> <a href="sparepart.html"><img border="0" src="images/sparepart/bonet-mitsubishi-kuda.jpg"></a> <a href="sparepart.html"><img border="0" src="images/sparepart/bonet-taruna.jpg"></a> <a href="sparepart.html"><img border="0" src="images/sparepart/bonet-vitara.jpg"></a> <a href="sparepart.html"><img border="0" src="images/sparepart/bull-bar-kijang-kapsul.jpg"></a> <a href="sparepart.html"><img border="0" src="images/sparepart/rear-step-avanza-pu.jpg"></a> <a href="sparepart.html"><img border="0" src="images/sparepart/sbm-avanza-vitro-carbon.jpg"></a> <a href="sparepart.html"><img border="0" src="images/sparepart/sbm-avanza-vitro-carbon-look.jpg"></a> <a href="sparepart.html"><img border="0" src="images/sparepart/tail-lamp-panther-carbon.jpg"></a> <a href="sparepart.html"><img border="0" src="images/sparepart/tail-lamp-panther-hitam.jpg"></a></nobr></div><div style="position: absolute; left: 332px; top: 0px;" id="test3"><nobr><a href="sparepart.html"><img border="0" src="images/sparepart/alarm-panther.jpg"></a> <a href="sparepart.html"><img border="0" src="images/sparepart/bonet-bintik-kia-carens.jpg"></a> <a href="sparepart.html"><img border="0" src="images/sparepart/bonet-carbon-look-panther.jpg"></a> <a href="sparepart.html"><img border="0" src="images/sparepart/bonet-carbon-look-trajet.jpg"></a> <a href="sparepart.html"><img border="0" src="images/sparepart/bonet-egr-honda-crv.jpg"></a> <a href="sparepart.html"><img border="0" src="images/sparepart/bonet-mitsubishi-kuda.jpg"></a> <a href="sparepart.html"><img border="0" src="images/sparepart/bonet-taruna.jpg"></a> <a href="sparepart.html"><img border="0" src="images/sparepart/bonet-vitara.jpg"></a> <a href="sparepart.html"><img border="0" src="images/sparepart/bull-bar-kijang-kapsul.jpg"></a> <a href="sparepart.html"><img border="0" src="images/sparepart/rear-step-avanza-pu.jpg"></a> <a href="sparepart.html"><img border="0" src="images/sparepart/sbm-avanza-vitro-carbon.jpg"></a> <a href="sparepart.html"><img border="0" src="images/sparepart/sbm-avanza-vitro-carbon-look.jpg"></a> <a href="sparepart.html"><img border="0" src="images/sparepart/tail-lamp-panther-carbon.jpg"></a> <a href="sparepart.html"><img border="0" src="images/sparepart/tail-lamp-panther-hitam.jpg"></a></nobr></div></div></div></td></tr></tbody></table></td>
                </tr>
              </tbody></table></td>
              <td width="9" height="9" background="images/box_08.png" align="center"><img width="9" height="9" alt="" src="images/box_08.png"></td>
            </tr>
            <tr>
						<td><img src="images/box_09.png" width="9" height="9" alt=""></td>
						<td background="images/box_10.png"><img src="images/box_10.png" width="9" height="9" alt=""></td>
						<td><img src="images/box_11.png" width="9" height="9" alt=""></td>
					</tr>
          </tbody></table>
				
				
			<!-- End ImageReady Slices --></td>
	</tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
	<tr>
		<td align="center"><!-- ImageReady Slices (special-offer.psd) -->
			<!-- End ImageReady Slices --></td>
	</tr>
</table></td>