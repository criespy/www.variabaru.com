<?

/* Developed by : ORANGE visual communication - www.myorangespot.com */

if(!empty($HTTP_POST_VARS['sender_mail']) || !empty($HTTP_POST_VARS['sender_message']) || !empty($HTTP_POST_VARS['sender_subject']) || !empty($HTTP_POST_VARS['sender_name']) || !empty($HTTP_POST_VARS['sender_phone']))
{
	$to = "dommy@sapulidi.com";
	$subject = stripslashes($HTTP_POST_VARS['sender_subject']);
	$body = stripslashes($HTTP_POST_VARS['sender_message']);
	$body .= "\n\n---------------------------\n";
	$body .= "Mail sent by: " . $HTTP_POST_VARS['sender_name'] . " <" . $HTTP_POST_VARS['sender_mail']  . ">, phone: " . $HTTP_POST_VARS['sender_phone'] . "\n";
	$header = "From: " . $HTTP_POST_VARS['sender_name'] . " <" . $HTTP_POST_VARS['sender_mail'] . ">\n";
	$header .= "Reply-To: " . $HTTP_POST_VARS['sender_name'] . " <" . $HTTP_POST_VARS['sender_mail'] . ">\n";
	$header .= "X-Mailer: PHP/" . phpversion() . "\n";
	$header .= "X-Priority: 1";
	if(@mail($to, $subject, $body, $header))
	{
		echo "output=sent";
	} else {
		echo "output=error";
	}
} else {
	echo "output=error";
}
?>