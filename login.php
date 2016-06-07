<?php 
session_start();
if ($_POST[login]=='true'){
	include("include/mine.php");
	$uname = mysql_real_escape_string(trim($_POST[username]));
	$encpass = base64_encode(mysql_real_escape_string(trim($_POST[password])));
	$sql = mysql_query("SELECT username FROM tblconfig where username = '$uname' AND password = '$encpass'");
  $field = mysql_fetch_array($sql);	
	
	if ($field[username]<>'')	{
		$varia_admin_ = 1;
		session_register("varia_admin_");
		echo "<script>window.location = 'admin.php?page=home'</script>";
	}
	else{
		echo "<script>alert('Login Failed!');window.location = 'javascript:history.back(1);'</script>";
	}
}
?>

<html>
<head>
	<title>Varia Baru :: Login</title>
	<script language="JavaScript" type="text/javascript">
		<!--
		// break out of frames
		if (self.parent.frames.length != 0) {
			self.parent.location=document.location;
		}
        function updateFields(el) {
            if (el.checked) {
                document.loginForm.username.disabled = true;
                document.loginForm.password.disabled = true;
            }
            else {
                document.loginForm.username.disabled = false;
                document.loginForm.password.disabled = false;
                document.loginForm.username.focus();
            }
        }
		//-->
	</script>
    <link rel="stylesheet" href="images/global.css" type="text/css">
    <link rel="stylesheet" href="images/login.css" type="text/css">
</head>

<body style="font-family:Verdana, Arial, Helvetica, sans-serif; background-image:url(images/orangebg_left.gif)" onLoad="document.loginForm.username.focus();">

<form action="login.php" name="loginForm" method="post" onSubmit="return check();">

<input type="hidden" name="login" value="true">

<div align="center">
    <!-- BEGIN login box -->
    <div id="jive-loginBox">

        <div id="jive-loginLogo">
        <a href="http://www.variabaru.com/"><embed width="438" height="62" align="middle" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" allowscriptaccess="sameDomain" name="logo" swliveconnect="true" bgcolor="#ffffff" wmode="transparent" quality="high" menu="false" src="swf/logo.swf"/></a>
        </div>
        <div id="jive-loginHeader"><strong><h3>Secure Login</h3></strong></div><br>



        <div align="center" id="jive-loginTable">

            <div style="text-align: center; width: 380px;">
            <table cellpadding="0" cellspacing="0" border="0" align="center">
                <tr>
                    <td align="right" class="loginFormTable">

                        <table cellpadding="2" cellspacing="0" border="0">
                        <noscript>
                            <tr>
                                <td colspan="3">
                                    <table cellpadding="0" cellspacing="0" border="0">
                                    <tr valign="top">
                                        <td><img src="images/error-16x16.gif" width="16" height="16" border="0" alt="" vspace="2"></td>
                                        <td><div class="jive-error-text" style="padding-left:5px; color:#cc0000;">Error: You don't have JavaScript enabled. This tool uses JavaScript and much of it will not work correctly without it enabled. Please turn JavaScript back on and reload this page.</div></td>
                                    </tr>
                                    </table>
                                </td>
                            </tr>
                        </noscript>
                        
                        <tr>
                            <td><input type="text" name="username" size="16" maxlength="50" id="u01" style="height:30; font-size:18px; color:#000000; font-family:Verdana, Arial, Helvetica, sans-serif"></td>
                            <td><input type="password" name="password" size="16" maxlength="50" id="p01" style="height:30; font-size:18px; color:#000000; font-family:Verdana, Arial, Helvetica, sans-serif"></td>
                            <td align="center"><input type="submit" value="&nbsp; Login &nbsp;" style="height:30; font-size:18px; color:#000000; font-family:Verdana, Arial, Helvetica, sans-serif"></td>
                        </tr>
                        <tr valign="top">
                            <td class="jive-login-label"><label for="u01"><strong>username</strong></label></td>
                            <td class="jive-login-label"><label for="p01"><strong>password</strong></label></td>
                            <td>&nbsp;</td>
                        </tr>
                        </table>
                    </td>
                </tr>
            </table>
            </div>
        </div>

    </div>
    <!-- END login box -->
</div>
</form>
<br /><br /><center><b><font size="2">Powered by:</font></b><br /><a href="http://www.indobizmedia.com/" target="_blank" title="Powered by IndoBizMedia"><img src="images/ibm.png" border="0" /></a></center>

<script language="JavaScript" type="text/javascript">
<!--
function check(){
  if (document.loginForm.username.value == ''){
    alert('Please enter username!');
    document.loginForm.username.focus();
    return false;
  }
	else if(document.loginForm.password.value == ''){
		alert('Please enter password!');
    document.loginForm.password.focus();
		return false;
  }
}
//-->
</script>

</body>
</html>