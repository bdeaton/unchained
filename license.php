<!DOCTYPE html>
<html>
<head>
	<?include "include-head-global.php";?>
    <link href="css/license.css?ver=<?=time();?>" media="screen" rel="stylesheet" type="text/css" />
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
			<h2>License Inquiries</h2>
			<div class="content-main">
				<p>For license inquiries, please contact Jonathan Rosner at <a href="tel:3236461085">323-646-1085</a> or submit the form below.</p>
				<br /><br />
				<form name="license" id="form-license" method="post" action="license-submit.php">
					<span class="indicator-required">* required</span>
					<div class="fieldset" id="fieldset-licensee">
						<label for="licensee">Licensee<em>*</em></label>
						<input type="text" name="licensee" id="input-licensee"/>
					</div>
					<div class="fieldset" id="fieldset-name">
						<label for="name">Contact Name<em>*</em></label>
						<input type="text" name="name" id="input-name"/>
					</div>
					<div class="fieldset" id="fieldset-email">
						<label for="email">Contact Email<em>*</em></label>
						<input type="text" name="email" id="input-email"/>
					</div>
					<div class="fieldset" id="fieldset-phone">
						<label for="phone">Contact Phone</label>
						<input type="text" name="phone" id="input-phone"/>
					</div>
					


					<div class="fieldset" id="fieldset-production">
						<label for="production">Production Name<em>*</em></label>
						<input type="text" name="production" id="input-production"/>
					</div>
					<div class="fieldset" id="fieldset-media">
						<label for="media">Media (Initial Forms of Exhibition)<em>*</em></label>
						<input type="text" name="media" id="input-media"/>
					</div>
					<div class="fieldset fieldset-textarea" id="fieldset-description">
						<label for="description">Scene Description<em>*</em></label>
						<textarea name="description"></textarea>
					</div>

					
					<div class="fieldset" id="fieldset-artist">
						<label for="artist">Artist/Master<em>*</em></label>
						<input type="text" name="artist" id="input-artist"/>
					</div>
					<div class="fieldset" id="fieldset-type">
						<label for="type">Type of Use/Length<em>*</em></label>
						<input type="text" name="type" id="input-type"/>
					</div>
					<div class="fieldset" id="fieldset-term">
						<label for="term">Term<em>*</em></label>
						<input type="text" name="term" id="input-term"/>
					</div>
					<div class="fieldset" id="fieldset-territory">
						<label for="territory">Territory<em>*</em></label>
						<input type="text" name="territory" id="input-territory"/>
					</div>
					<div class="fieldset" id="fieldset-date">
						<label for="date">Release/Air Date<em>*</em></label>
						<input type="text" name="date" id="input-date"/>
					</div>
				
					
					<div class="fieldset fieldset-textarea" id="fieldset-options">
						<label for="options">Options (Media/Term/Territory)</label>
						<textarea name="options"></textarea>
					</div>
					
					
					
					
					<div class="fieldset" id="fieldset-buttons">
						<button class="btn btn-submit">Submit Inquiry</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<?include "include-script-footer-global.php";?>
</body>
</html>
