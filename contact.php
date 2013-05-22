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
				<p>For non-licensing inquiries, please contact Abby North at 310-459-4707 or submit the form below.</p>
				<br /><br />
				<form name="contact" id="form-contact" method="post" action="contact-submit.php">
					<span class="indicator-required">* required</span>
					<div class="fieldset" id="fieldset-name">
						<label for="name">Name<em>*</em></label>
						<input type="text" name="name" id="input-name"/>
					</div>
					<div class="fieldset" id="fieldset-email">
						<label for="email">Email<em>*</em></label>
						<input type="text" name="email" id="input-email"/>
					</div>
					<div class="fieldset" id="fieldset-phone">
						<label for="phone">Phone</label>
						<input type="text" name="phone" id="input-phone"/>
					</div>
					<div class="fieldset" id="fieldset-comments">
						<label for="comments">Comments<em>*</em></label>
						<textarea name="comments"></textarea>
					</div>
					<div class="fieldset" id="fieldset-buttons">
						<button class="btn btn-submit">Contact Us</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<?include "include-script-footer-global.php";?>
</body>
</html>
