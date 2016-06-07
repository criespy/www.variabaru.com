<?php
class mail {
	public function __construct() {
	}
  
  public function sendmail($to_email, $to_name, $subject, $msg){
    require_once('PHPMailer/class.phpmailer.php');
    $mail = new PHPMailer();
    $mail->SetFrom("cs@musclemanjam.com", "CS Musclemanjam");
    $mail->AddReplyTo("cs@musclemanjam.com", "CS Musclemanjam");
    $mail->Subject    = $subject;
    $mail->MsgHTML($msg);
    $mail->AddAddress($to_email, $to_name);

    if(!$mail->Send()) {
      echo "Mailer Error: " . $mail->ErrorInfo;
      return 0;
    } else {
      return 1;
    }
  }
  
  public function sendEmail($to_, $toname_, $subject_, $msg_, $from_, $fromname_) {
		// multiple recipients
		$to = $to_;
		
		// subject
		$subject = $subject_;

		// message
		$message = $msg_;

		// To send HTML mail, the Content-type header must be set
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

		// Additional headers
		$headers .= 'To: '.$to_. "\r\n";
		$headers .= 'From: '.$from_."\r\n";

		// Mail it
		$status = mail($to, $subject, $message, $headers);
    return $status;
	}
}


?>

