<?
function insertNav($pageName){
	$homeClass = '';
	$aboutClass = '';
	$listenClass = '';
	$licenseClass = '';
	$contactClass = '';
	$placementsClass = '';
	$linksClass = '';

	switch($pageName){
		case 'home':
			$homeClass = 'selected';
		break;
		case 'about':
			$aboutClass = 'selected';
		break;
		case 'listen':
			$listenClass = 'selected';
		break;
		case 'license':
			$licenseClass = 'selected';
		break;
		case 'contact':
			$contactClass = 'selected';
		break;
		case 'placements':
			$placementsClass = 'selected';
		break;
		case 'links':
			$linksClass = 'selected';
		break;
	}

	if($pageName=='stores'){
		$hrefPrefix = '../';
	}
?>

		<ul id="nav-primary">
			<li class="first <?=$homeClass?>" id="nav-home"><a href="home.php">Home</a></li>
			<li class="<?=$aboutClass?>" id="nav-about"><a href="about.php">About Us</a></li>
			<li class="<?=$listenClass?>" id="nav-listen"><a href="listen.php">Listen to Music</a></li>
			<li class="<?=$licenseClass?>" id="nav-license"><a href="license.php">License a Song</a></li>
			<li class="<?=$contactClass?>" id="nav-contact"><a href="contact.php">Contact Us</a></li>
			<li class="<?=$placementsClass?>" id="nav-placements"><a href="placements.php">Recent Placements</a></li>
			<li class="<?=$linksClass?>" id="nav-links"><a href="links.php">links</a></li>
		</ul>
<?
}
?>
