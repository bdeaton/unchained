<!DOCTYPE html>
<html>
<head>
	<?include "include-head-global.php";?>
    <link href="css/placements.css?ver=<?=time();?>" media="screen" rel="stylesheet" type="text/css" />
</head>
<body id="page-placements">
<div class="content-container">
	<div class="content-col content-primary">
		<h1><a class="logo-main" href="index.php">Unchained Melody Publishing LLC</a></h1>
		<p class="text-tagline">"One copyright, one phone call. A simple and quick licensing process."</p>
		<?
			include "include-nav.php";
			insertNav('placements');
		?>
		<em class="divider-primary"></em>
		<?include "include-trivia.php";?>
	</div>
	<div class="content-col content-secondary">
		<?include "include-social.php";?>
		<div class="content-wrapper">
			<h2>Recent Placements</h2>
			<div class="content-main">
				<ul>
					<li class="first">
						<a class="video-thumbnail" href="http://www.youtube.com/watch?v=P2Mqjdlh9Yg#t=0h0m36s"><img src="http://img.youtube.com/vi/P2Mqjdlh9Yg/1.jpg" width="120" alt="" /></a>
						<a class="video-description" href="http://www.youtube.com/watch?v=P2Mqjdlh9Yg#t=0h0m36s">HBO's Phil Spector Movie Trailer (HD): Al Pacino and Helen Mirren</a>
					</li>
					<li>
						<a class="video-thumbnail" href="http://www.youtube.com/watch?v=nvasEi3lBvo"><img src="http://img.youtube.com/vi/P2Mqjdlh9Yg/1.jpg" width="120" alt="" /></a>
						<a class="video-description" href="http://www.youtube.com/watch?v=nvasEi3lBvo">Full Performance of "Unchained Melody" from "Girls (and Boys) On Film" | GLEE</a>
					</li>
					<li>
						<a class="video-thumbnail" href="http://www.youtube.com/watch?v=jgdVRBiLIYQ"><img src="http://img.youtube.com/vi/jgdVRBiLIYQ/1.jpg" width="120" alt="" /></a>
						<a class="video-description" href="http://www.youtube.com/watch?v=jgdVRBiLIYQ">Johnny Depp in the Vicar of Dibley 1999</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>
<?include "include-script-footer-global.php";?>
</body>
</html>
