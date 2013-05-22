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
			insertNav('license');
		?>
		<em class="divider-primary"></em>
		<?include "include-trivia.php";?>
	</div>
	<div class="content-col content-secondary">
		<?include "include-social.php";?>
		<div class="content-wrapper">
			<h2>License Inquiry</h2>
			<div class="content-main">
<?php
if(isset($_POST['email'])) {
    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "abby@umpubllc.com,rosner@umpubllc.com,bdeaton@gmail.com";
    //$email_to = "bdeaton@gmail.com";
    $email_subject = "unchainedmelodypublishing.com: License Inquiry";
     
    // validation expected data exists
    if(!isset($_POST['licensee']) ||
        !isset($_POST['name']) ||
        !isset($_POST['email']) ||
		!isset($_POST['production']) ||
		!isset($_POST['media']) ||
		!isset($_POST['description']) ||
		!isset($_POST['artist']) ||
		!isset($_POST['type']) ||
		!isset($_POST['term']) ||
		!isset($_POST['territory']) ||
		!isset($_POST['date'])) {
        died('We are sorry, but there appears to be a problem with the form you submitted.<br />');       
    }
     
    $licensee = $_POST['licensee']; // required
    $name = $_POST['name']; // required
    $email_from = $_POST['email']; // required
    $phone = $_POST['phone']; // not required
    $production = $_POST['production']; // required
     
    $media = $_POST['media']; // required
	$description = $_POST['description']; // required
	$artist = $_POST['artist']; // required
	$type = $_POST['type']; // required
	$term = $_POST['term']; // required
	$territory = $_POST['territory']; // required
	$date = $_POST['date']; // required
	$options = $_POST['options']; // required
    
    
    
    $error_message = "";
    $errorCount = 0;
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
  
    if(!preg_match($email_exp,$email_from)) {
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
    $errorCount = $errorCount + 1;
  }
    $string_exp = "/^[A-Za-z .'-]+$/";
  if(!preg_match($string_exp,$licensee)) {
    $error_message .= 'The Licensee you entered does not appear to be valid.<br />';
    $errorCount = $errorCount + 1;
  }
  if(!preg_match($string_exp,$name)) {
    $error_message .= 'The Name you entered does not appear to be valid.<br />';
    $errorCount = $errorCount + 1;
  }
  if(strlen($production) < 2) {
    $error_message .= 'The Production you entered does not appear to be valid.<br />';
    $errorCount = $errorCount + 1;
  }

  if(strlen($media) < 2) {
    $error_message .= 'The Media you entered does not appear to be valid.<br />';
    $errorCount = $errorCount + 1;
  }
  if(strlen($description) < 2) {
    $error_message .= 'The Description you entered does not appear to be valid.<br />';
    $errorCount = $errorCount + 1;
  }
  if(strlen($artist) < 2) {
    $error_message .= 'The Artist you entered does not appear to be valid.<br />';
    $errorCount = $errorCount + 1;
  }
  if(strlen($type) < 2) {
    $error_message .= 'The Type you entered does not appear to be valid.<br />';
    $errorCount = $errorCount + 1;
  }
  if(strlen($term) < 2) {
    $error_message .= 'The Term you entered does not appear to be valid.<br />';
    $errorCount = $errorCount + 1;
  }
  if(strlen($territory) < 2) {
    $error_message .= 'The Territory you entered does not appear to be valid.<br />';
    $errorCount = $errorCount + 1;
  }
  if(strlen($date) < 2) {
    $error_message .= 'The Date you entered does not appear to be valid.<br />';
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
     
    $email_message .= "Licensee: ".clean_string($licensee)."\n";
    $email_message .= "Name: ".clean_string($name)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "Phone: ".clean_string($phone)."\n";
    $email_message .= "Production: ".clean_string($production)."\n";
    $email_message .= "Media: ".clean_string($media)."\n";
    $email_message .= "Description: ".clean_string($description)."\n";
    $email_message .= "Artist: ".clean_string($artist)."\n";
    $email_message .= "Type: ".clean_string($type)."\n";
    $email_message .= "Term: ".clean_string($term)."\n";
    $email_message .= "Territory: ".clean_string($territory)."\n";
    $email_message .= "Date: ".clean_string($date)."\n";
    $email_message .= "Options: ".clean_string($options)."\n";

    
     
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
