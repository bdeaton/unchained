<!DOCTYPE html>
<html>
<head>
	<?include "include-head-global.php";?>
    <link href="css/contact.css?ver=<?=time();?>" media="screen" rel="stylesheet" type="text/css" />
</head>
<body>
<div class="content-container">
	<div class="content-col content-primary">
		<h1><a class="logo-main" href="index.php">Unchained Melody Publishing LLC</a></h1>
		<p class="text-tagline">"One copyright, one phone call. A simple and quick licensing process."</p>
		<?
			include "include-nav.php";
			insertNav('contact');
		?>
		<em class="divider-primary"></em>
		<?include "include-trivia.php";?>
	</div>
	<div class="content-col content-secondary">
		<?include "include-social.php";?>
		<div class="content-wrapper">
			<h2>Contact Us</h2>
			<div class="content-main">
<?php
if(isset($_POST['email'])) {
    // EDIT THE 2 LINES BELOW AS REQUIRED
    //$email_to = "bdeaton@gmail.com,potchie.ads@gmail.com";
    $email_to = "abby@umpubllc.com,rezaret@umpubllc.com,bdeaton@gmail.com";
    $email_subject = "unchainedmelodypublishing.com: Contact Form Submission";
     
    // validation expected data exists
    if(!isset($_POST['name']) ||
        !isset($_POST['email']) ||
        !isset($_POST['comments'])) {
        died('We are sorry, but there appears to be a problem with the form you submitted.<br />');       
    }
     
    $name = $_POST['name']; // required
    $email_from = $_POST['email']; // required
    $phone = $_POST['phone']; // not required
    $comments = $_POST['comments']; // required
     
    $error_message = "";
    $errorCount = 0;
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
  if(!preg_match($email_exp,$email_from)) {
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
    $errorCount = $errorCount + 1;
  }
    $string_exp = "/^[A-Za-z .'-]+$/";
  if(!preg_match($string_exp,$name)) {
    $error_message .= 'The Name you entered does not appear to be valid.<br />';
    $errorCount = $errorCount + 1;
  }
  if(strlen($comments) < 2) {
    $error_message .= 'The Comments you entered do not appear to be valid.<br />';
    $errorCount = $errorCount + 1;
  }
  if(strlen($error_message) > 0) {
  	   died($error_message,$errorCount);
  }
    $email_message = "Contact form details below.\n\n";
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
     
    $email_message .= "Name: ".clean_string($name)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "Phone: ".clean_string($phone)."\n";
    $email_message .= "Comments: ".clean_string($comments)."\n";
     
     
// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);  
?>
				<p>Thank you for contacting us. We will be in touch with you very soon.</p>
<?php
}
    function died($error,$errorCount) {
    	$errorHeader = 'We are very sorry, but there was an error found with the form you submitted.';
    	if($errorCount>1){
    		$errorHeader = 'We are very sorry, but there were '.$errorCount.' errors found with the form you submitted.';
    	}
?>
				<p><?=$errorHeader?></p>
				<p><?=$error?></p>
				<p>Please go back and fix these errors.</p>
<?
        die();
    }

?>
			</div>
		</div>
	</div>
</div>
<?include "include-script-footer-global.php";?>
</body>
</html>
