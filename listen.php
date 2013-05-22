<?php include("include-detect.php"); ?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="keywords" content="" />
    <link href='http://fonts.googleapis.com/css?family=Unica+One|Quicksand' rel='stylesheet' type='text/css'>
    <link href="css/reset-min.css" media="screen" rel="stylesheet" type="text/css" />
    <link href="css/base.css?ver=<?=time();?>" media="screen" rel="stylesheet" type="text/css" />
    <link href="css/content.css?ver=<?=time();?>" media="screen" rel="stylesheet" type="text/css" />
	<script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.min.js"></script>

    <link href="css/listen.css?ver=<?=time();?>" media="screen" rel="stylesheet" type="text/css" />
</head>
<body class="<?php echo $clientClasses ?>">
<div class="content-container">
	<div class="content-col content-primary">
		<h1><a class="logo-main" href="home.php">Unchained Melody Publishing LLC</a></h1>
		<p class="text-tagline">"One copyright, one phone call. A simple and quick licensing process."</p>
		
		<ul id="nav-primary">
			<li class="first " id="nav-home"><a href="home.php">Home</a></li>
			<li class="" id="nav-about"><a href="about.php">About Us</a></li>
			<li class="selected" id="nav-listen"><a href="listen.php">Listen to Music</a></li>
			<li class="" id="nav-license"><a href="license.php">License a Song</a></li>
			<li class="" id="nav-contact"><a href="contact.php">Contact Us</a></li>
			<li class="" id="nav-placements"><a href="placements.php">Recent Placements</a></li>
			<li class="" id="nav-blog"><a href="http://umpub.wordpress.com/">Blog</a></li>
		</ul>
		<em class="divider-primary"></em>
				<div id="burst-trivia">
			<h4>Trivia:</h4>
			<p>Todd Duncan performed Unchained Melody in the obscure film, Unchained, scored by Alex North.</p>
			<ul data-current="0" data-upper="2">
				<li data-index="0">Todd Duncan performed Unchained Melody in the obscure film, Unchained, scored by Alex North.</li>
				<li data-index="1">More than 670 artists have recorded versions of Unchained Melody.</li>
				<li data-index="2">In the UK, Jimmy Young, The Righteous Brothers, Al Hibber, Liberace, Les Baxter, Robson and Jerome, and most recently Gareth Gates have all had hits with versions of this song.</li>
			</ul>
		</div>

	</div>
	<div class="content-col content-secondary">
				<ul id="social-links">
			<li class="first" id="social-facebook"><a href="http://www.facebook.com/unchained" target="social"></a></li>
			<li id="social-twitter"><a href="http://www.twitter.com/unchained" target="social"></a></li>
		</ul>

		<div class="content-wrapper">
			<h2>Listen To Music</h2>
			<div class="content-main">
				<ul id="listen-filter" style="display:none;">
					<li class="first" id="filter-item-artists">
						<label for="select-filter-artists" class="filter-label">Artists</label>
						<select name="select-filter-artists" id="select-filter-artists">
							<option value="artistsAll">All Artists</option>
							<option value="artists1">Artist 1</option>
						</select>
					</li>
					<li id="filter-item-instruments">
						<label for="select-filter-instruments" class="filter-label">Instruments</label>
						<select name="select-filter-instruments" id="select-filter-instruments">
							<option value="instrumentsAll">All Instruments</option>
							<option value="instruments1">Instrument 1</option>
						</select>
					</li>
					<li id="filter-item-genres">
						<label for="select-filter-genres" class="filter-label">Genres</label>
						<select name="select-filter-genres" id="select-filter-genres">
							<option value="genresAll">All Genres</option>
							<option value="genres1">Genre 1</option>
						</select>
					</li>
					<li id="filter-item-decades">
						<label for="select-filter-decades" class="filter-label">Decades</label>
						<select name="select-filter-decades" id="select-filter-decades">
							<option value="decadesAll">All Decades</option>
							<option value="decades1">Decade 1</option>
						</select>
					</li>
					<li id="filter-item-tempos">
						<label for="select-filter-tempos" class="filter-label">Tempos</label>
						<select name="select-filter-tempos" id="select-filter-tempos">
							<option value="temposAll">All Tempos</option>
							<option value="tempos1">Tempo 1</option>
						</select>
					</li>
				</ul>			
				<table id="listen-details">
					<thead>
						<tr>
							<th>Artist</th>
							<th>Instrument</th>
							<th>Tempo</th>
							<th>Genre</th>
							<th>Decade</th>
							<th>Name</th>
							<th>Sample</th>
							<th>Download</th>
						</tr>
					</thead>
					<tbody>
						<tr>
    					    <td class="table-col1">Air Supply</td>
    					    <td class="table-col2"></td>
		    			    <td class="table-col3">60-69</td>
			    		    <td class="table-col4">Pop</td>
				    	    <td class="table-col5">1990s</td>
					        <td class="table-col6">Unchained Melody</td>
					        <td class="col-listen table-col7"><audio src="audio/<?=$audioExt?>/Unchained Melody_Air Supply.<?=$audioExt?>" controls="controls">Your browser does not support the audio element.</audio></td>
    					    <td class="table-col8"><a href="audio/download.php?file=mp3/Unchained Melody_Air Supply.mp3">Download Track</a></td>
		    			</tr>
						<tr>
    					    <td class="table-col1">Al Green</td>
    					    <td class="table-col2"></td>
		    			    <td class="table-col3">50-59</td>
			    		    <td class="table-col4">R&B</td>
				    	    <td class="table-col5">1970s</td>
					        <td class="table-col6">Unchained Melody</td>
					        <td class="col-listen table-col7"><audio src="audio/<?=$audioExt?>/Unchained Melody_Al Green.<?=$audioExt?>" controls="controls">Your browser does not support the audio element.</audio></td>
    					    <td class="table-col8"><a href="audio/download.php?file=mp3/Unchained Melody_Al Green.mp3">Download Track</a></td>
		    			</tr>
						<tr>
    					    <td class="table-col1">Al Hibbler</td>
    					    <td class="table-col2"></td>
		    			    <td class="table-col3">80-89</td>
			    		    <td class="table-col4">R&B</td>
				    	    <td class="table-col5">1950s</td>
					        <td class="table-col6">Unchained Melody</td>
					        <td class="col-listen table-col7"><audio src="audio/<?=$audioExt?>/Unchained Melody_Al Hibbler.<?=$audioExt?>" controls="controls">Your browser does not support the audio element.</audio></td>
    					    <td class="table-col8"><a href="audio/download.php?file=mp3/Unchained Melody_Al Hibbler.mp3">Download Track</a></td>
		    			</tr>
						<tr>
    					    <td class="table-col1">Amici Forever</td>
    					    <td class="table-col2"></td>
		    			    <td class="table-col3">50-59</td>
			    		    <td class="table-col4">Opera</td>
				    	    <td class="table-col5">2000s</td>
					        <td class="table-col6">Senza Catene</td>
					        <td class="col-listen table-col7"><audio src="audio/<?=$audioExt?>/Senza Catene (Unchained Melody)_Amici Forever.<?=$audioExt?>" controls="controls">Your browser does not support the audio element.</audio></td>
    					    <td class="table-col8"><a href="audio/download.php?file=mp3/Senza Catene (Unchained Melody)_Amici Forever.mp3">Download Track</a></td>
		    			</tr>
						<tr>
    					    <td class="table-col1">Barry Manilow</td>
    					    <td class="table-col2"></td>
		    			    <td class="table-col3">80-89</td>
			    		    <td class="table-col4">Pop</td>
				    	    <td class="table-col5">2000s</td>
					        <td class="table-col6">Unchained Melody</td>
					        <td class="col-listen table-col7"><audio src="audio/<?=$audioExt?>/Unchained Melody_Barry Manilow.<?=$audioExt?>" controls="controls">Your browser does not support the audio element.</audio></td>
    					    <td class="table-col8"><a href="audio/download.php?file=mp3/Unchained Melody_Barry Manilow.mp3">Download Track</a></td>
		    			</tr>
						<tr>
    					    <td class="table-col1">Bing Crosby</td>
    					    <td class="table-col2"></td>
		    			    <td class="table-col3">100-109</td>
			    		    <td class="table-col4">Pop</td>
				    	    <td class="table-col5">1990s</td>
					        <td class="table-col6">Unchained Melody</td>
					        <td class="col-listen table-col7"><audio src="audio/<?=$audioExt?>/Unchained Melody_Bing Crosby.<?=$audioExt?>" controls="controls">Your browser does not support the audio element.</audio></td>
    					    <td class="table-col8"><a href="audio/download.php?file=mp3/Unchained Melody_Bing Crosby.mp3">Download Track</a></td>
		    			</tr>
						<tr>
    					    <td class="table-col1">Candi Sosa</td>
    					    <td class="table-col2"></td>
		    			    <td class="table-col3">90-99</td>
			    		    <td class="table-col4">Latin</td>
				    	    <td class="table-col5">2010s</td>
					        <td class="table-col6">Unchained Melody Mariachi</td>
					        <td class="col-listen table-col7"><audio src="audio/<?=$audioExt?>/Unchained Melody Mariachi_Candi Sosa.<?=$audioExt?>" controls="controls">Your browser does not support the audio element.</audio></td>
    					    <td class="table-col8"><a href="audio/download.php?file=mp3/Unchained Melody Mariachi_Candi Sosa.mp3">Download Track</a></td>
		    			</tr>
						<tr>
    					    <td class="table-col1">Cesar Espinoza</td>
    					    <td class="table-col2">Pan Flute</td>
		    			    <td class="table-col3"></td>
			    		    <td class="table-col4">Latin</td>
				    	    <td class="table-col5"></td>
					        <td class="table-col6">Unchained Melody</td>
					        <td class="col-listen table-col7"><audio src="audio/<?=$audioExt?>/Unchained Melody_Cesar Espinoza.<?=$audioExt?>" controls="controls">Your browser does not support the audio element.</audio></td>
    					    <td class="table-col8"><a href="audio/download.php?file=mp3/Unchained Melody_Cesar Espinoza.mp3">Download Track</a></td>
		    			</tr>
						<tr>
    					    <td class="table-col1">Cody Kahmar</td>
    					    <td class="table-col2"></td>
		    			    <td class="table-col3">70-79</td>
			    		    <td class="table-col4">Americana</td>
				    	    <td class="table-col5">2010s</td>
					        <td class="table-col6">Unchained Melody Americana</td>
					        <td class="col-listen table-col7"><audio src="audio/<?=$audioExt?>/Unchained Melody Americana_Cody Kahmar.<?=$audioExt?>" controls="controls">Your browser does not support the audio element.</audio></td>
    					    <td class="table-col8"><a href="audio/download.php?file=mp3/Unchained Melody Americana_Cody Kahmar.mp3">Download Track</a></td>
		    			</tr>
						<tr>
    					    <td class="table-col1">Conway Twitty</td>
    					    <td class="table-col2"></td>
		    			    <td class="table-col3">100-109</td>
			    		    <td class="table-col4">Pop</td>
				    	    <td class="table-col5">1960s</td>
					        <td class="table-col6">Unchained Melody</td>
					        <td class="col-listen table-col7"><audio src="audio/<?=$audioExt?>/Unchained Melody_Conway Twitty.<?=$audioExt?>" controls="controls">Your browser does not support the audio element.</audio></td>
    					    <td class="table-col8"><a href="audio/download.php?file=mp3/Unchained Melody_Conway Twitty.mp3">Download Track</a></td>
		    			</tr>
						<tr>
    					    <td class="table-col1">Daniel Ho</td>
    					    <td class="table-col2"></td>
		    			    <td class="table-col3"></td>
			    		    <td class="table-col4">World</td>
				    	    <td class="table-col5">2010s</td>
					        <td class="table-col6">Unchained Melody Hawaiian</td>
					        <td class="col-listen table-col7"><audio src="audio/<?=$audioExt?>/Unchained Melody (Slack Key Instrumental)_Daniel Ho.<?=$audioExt?>" controls="controls">Your browser does not support the audio element.</audio></td>
    					    <td class="table-col8"><a href="audio/download.php?file=mp3/Unchained Melody (Slack Key Instrumental)_Daniel Ho.mp3">Download Track</a></td>
		    			</tr>
						<tr>
    					    <td class="table-col1">Diana Ross & The Supremes</td>
    					    <td class="table-col2"></td>
		    			    <td class="table-col3">70-79</td>
			    		    <td class="table-col4">R&B</td>
				    	    <td class="table-col5">1960s</td>
					        <td class="table-col6">Unchained Melody</td>
					        <td class="col-listen table-col7"><audio src="audio/<?=$audioExt?>/Unchained Melody_The Supremes & Diana Ross.<?=$audioExt?>" controls="controls">Your browser does not support the audio element.</audio></td>
    					    <td class="table-col8"><a href="audio/download.php?file=mp3/Unchained Melody_The Supremes & Diana Ross.mp3">Download Track</a></td>
		    			</tr>
						<tr>
    					    <td class="table-col1">Dionne Warwick</td>
    					    <td class="table-col2"></td>
		    			    <td class="table-col3">70-79</td>
			    		    <td class="table-col4">Soul</td>
				    	    <td class="table-col5">1960s</td>
					        <td class="table-col6">Unchained Melody</td>
					        <td class="col-listen table-col7"><audio src="audio/<?=$audioExt?>/Unchained Melody_Dionne Warwick.<?=$audioExt?>" controls="controls">Your browser does not support the audio element.</audio></td>
    					    <td class="table-col8"><a href="audio/download.php?file=mp3/Unchained Melody_Dionne Warwick.mp3">Download Track</a></td>
		    			</tr>
						<tr>
    					    <td class="table-col1">Donny Osmond</td>
    					    <td class="table-col2"></td>
		    			    <td class="table-col3"></td>
			    		    <td class="table-col4">Pop</td>
				    	    <td class="table-col5">1970s</td>
					        <td class="table-col6">Unchained Melody</td>
					        <td class="col-listen table-col7"><audio src="audio/<?=$audioExt?>/Unchained Melody_Donny Osmond.<?=$audioExt?>" controls="controls">Your browser does not support the audio element.</audio></td>
    					    <td class="table-col8"><a href="audio/download.php?file=mp3/Unchained Melody_Donny Osmond.mp3">Download Track</a></td>
		    			</tr>
						<tr>
    					    <td class="table-col1">Duane Eddy</td>
    					    <td class="table-col2">Electric Guitar</td>
		    			    <td class="table-col3">80-89</td>
			    		    <td class="table-col4">Rock</td>
				    	    <td class="table-col5">1960s</td>
					        <td class="table-col6">Unchained Melody</td>
					        <td class="col-listen table-col7"><audio src="audio/<?=$audioExt?>/Unchained Melody_Duane Eddy.<?=$audioExt?>" controls="controls">Your browser does not support the audio element.</audio></td>
    					    <td class="table-col8"><a href="audio/download.php?file=mp3/Unchained Melody_Duane Eddy.mp3">Download Track</a></td>
		    			</tr>
						<tr>
    					    <td class="table-col1">Elvis Presley</td>
    					    <td class="table-col2"></td>
		    			    <td class="table-col3">70-79</td>
			    		    <td class="table-col4">Rock</td>
				    	    <td class="table-col5">1970s</td>
					        <td class="table-col6">Unchained Melody</td>
					        <td class="col-listen table-col7"><audio src="audio/<?=$audioExt?>/Unchained Melody_Elvis Presley.<?=$audioExt?>" controls="controls">Your browser does not support the audio element.</audio></td>
    					    <td class="table-col8"><a href="audio/download.php?file=mp3/Unchained Melody_Elvis Presley.mp3">Download Track</a></td>
		    			</tr>
						<tr>
    					    <td class="table-col1">Engelbert Humperdinck</td>
    					    <td class="table-col2"></td>
		    			    <td class="table-col3">60-69</td>
			    		    <td class="table-col4">Pop</td>
				    	    <td class="table-col5">1990s</td>
					        <td class="table-col6">Unchained Melody</td>
					        <td class="col-listen table-col7"><audio src="audio/<?=$audioExt?>/Unchained Melody_Engelbert Humperdinck.<?=$audioExt?>" controls="controls">Your browser does not support the audio element.</audio></td>
    					    <td class="table-col8"><a href="audio/download.php?file=mp3/Unchained Melody_Engelbert Humperdinck.mp3">Download Track</a></td>
		    			</tr>
						<tr>
    					    <td class="table-col1">Gareth Gates</td>
    					    <td class="table-col2"></td>
		    			    <td class="table-col3"></td>
			    		    <td class="table-col4">Pop</td>
				    	    <td class="table-col5">2000s</td>
					        <td class="table-col6">Unchained Melody</td>
					        <td class="col-listen table-col7"><audio src="audio/<?=$audioExt?>/Unchained Melody_Gareth Gates.<?=$audioExt?>" controls="controls">Your browser does not support the audio element.</audio></td>
    					    <td class="table-col8"><a href="audio/download.php?file=mp3/Unchained Melody_Gareth Gates.mp3">Download Track</a></td>
		    			</tr>
						<tr>
    					    <td class="table-col1">George Benson</td>
    					    <td class="table-col2"></td>
		    			    <td class="table-col3">70-79</td>
			    		    <td class="table-col4">R&B</td>
				    	    <td class="table-col5">1970s</td>
					        <td class="table-col6">Unchained Melody</td>
					        <td class="col-listen table-col7"><audio src="audio/<?=$audioExt?>/Unchained Melody_George Benson.<?=$audioExt?>" controls="controls">Your browser does not support the audio element.</audio></td>
    					    <td class="table-col8"><a href="audio/download.php?file=mp3/Unchained Melody_George Benson.mp3">Download Track</a></td>
		    			</tr>
						<tr>
    					    <td class="table-col1">George Kahumoku Jr</td>
    					    <td class="table-col2"></td>
		    			    <td class="table-col3">60-69</td>
			    		    <td class="table-col4">World</td>
				    	    <td class="table-col5">2010s</td>
					        <td class="table-col6">Unchained Melody English</td>
					        <td class="col-listen table-col7"><audio src="audio/<?=$audioExt?>/Unchained Melody (Slack Key English)_George Kahumoku Jr.<?=$audioExt?>" controls="controls">Your browser does not support the audio element.</audio></td>
    					    <td class="table-col8"><a href="audio/download.php?file=mp3/Unchained Melody (Slack Key English)_George Kahumoku Jr.mp3">Download Track</a></td>
		    			</tr>
						<tr>
    					    <td class="table-col1">George Kahumoku Jr</td>
    					    <td class="table-col2"></td>
		    			    <td class="table-col3">60-69</td>
			    		    <td class="table-col4">World</td>
				    	    <td class="table-col5">2010s</td>
					        <td class="table-col6">Unchained Melody Hawaiian</td>
					        <td class="col-listen table-col7"><audio src="audio/<?=$audioExt?>/Unchained Melody (Slack Key Hawaiian)_George Kahumoku Jr.<?=$audioExt?>" controls="controls">Your browser does not support the audio element.</audio></td>
    					    <td class="table-col8"><a href="audio/download.php?file=mp3/Unchained Melody (Slack Key Hawaiian)_George Kahumoku Jr.mp3">Download Track</a></td>
		    			</tr>
						<tr>
    					    <td class="table-col1">George Kahumoku Jr</td>
    					    <td class="table-col2"></td>
		    			    <td class="table-col3">60-69</td>
			    		    <td class="table-col4">World</td>
				    	    <td class="table-col5">2010s</td>
					        <td class="table-col6">Unchained Melody Hawaiian</td>
					        <td class="col-listen table-col7"><audio src="audio/<?=$audioExt?>/Unchained Melody Hawaiian_George Kahumoku Jr.<?=$audioExt?>" controls="controls">Your browser does not support the audio element.</audio></td>
    					    <td class="table-col8"><a href="audio/download.php?file=mp3/Unchained Melody Hawaiian_George Kahumoku Jr.mp3">Download Track</a></td>
		    			</tr>
						<tr>
    					    <td class="table-col1">Gerry and The Pacemakers</td>
    					    <td class="table-col2"></td>
		    			    <td class="table-col3">70-79</td>
			    		    <td class="table-col4">Pop</td>
				    	    <td class="table-col5">1960s</td>
					        <td class="table-col6">Unchained Melody</td>
					        <td class="col-listen table-col7"><audio src="audio/<?=$audioExt?>/Unchained Melody_Gerry and the Pacemakers.<?=$audioExt?>" controls="controls">Your browser does not support the audio element.</audio></td>
    					    <td class="table-col8"><a href="audio/download.php?file=mp3/Unchained Melody_Gerry and the Pacemakers.mp3">Download Track</a></td>
		    			</tr>
						<tr>
    					    <td class="table-col1">Gheorghe Zamfir</td>
    					    <td class="table-col2">Pan Flute</td>
		    			    <td class="table-col3"></td>
			    		    <td class="table-col4">Easy Listening</td>
				    	    <td class="table-col5">2000s</td>
					        <td class="table-col6">Unchained Melody</td>
					        <td class="col-listen table-col7"><audio src="audio/<?=$audioExt?>/Unchained Melody_Georghe Zamfir.<?=$audioExt?>" controls="controls">Your browser does not support the audio element.</audio></td>
    					    <td class="table-col8"><a href="audio/download.php?file=mp3/Unchained Melody_Georghe Zamfir.mp3">Download Track</a></td>
		    			</tr>
						<tr>
    					    <td class="table-col1">Guy Lombardo</td>
    					    <td class="table-col2"></td>
		    			    <td class="table-col3"></td>
			    		    <td class="table-col4"></td>
				    	    <td class="table-col5"></td>
					        <td class="table-col6">Unchained Melody</td>
					        <td class="col-listen table-col7"><audio src="audio/<?=$audioExt?>/Unchained Melody_Guy Lombardo.<?=$audioExt?>" controls="controls">Your browser does not support the audio element.</audio></td>
    					    <td class="table-col8"><a href="audio/download.php?file=mp3/Unchained Melody_Guy Lombardo.mp3">Download Track</a></td>
		    			</tr>
						<tr>
    					    <td class="table-col1">Harry Belafonte</td>
    					    <td class="table-col2"></td>
		    			    <td class="table-col3">50</td>
			    		    <td class="table-col4">Pop</td>
				    	    <td class="table-col5">1950s</td>
					        <td class="table-col6">Unchained Melody</td>
					        <td class="col-listen table-col7"><audio src="audio/<?=$audioExt?>/Unchained Melody_Harry Belafonte.<?=$audioExt?>" controls="controls">Your browser does not support the audio element.</audio></td>
    					    <td class="table-col8"><a href="audio/download.php?file=mp3/Unchained Melody_Harry Belafonte.mp3">Download Track</a></td>
		    			</tr>
						<tr>
    					    <td class="table-col1">Il Divo</td>
    					    <td class="table-col2"></td>
		    			    <td class="table-col3">60-69</td>
			    		    <td class="table-col4">Opera</td>
				    	    <td class="table-col5">2000s</td>
					        <td class="table-col6">Senza Catene</td>
					        <td class="col-listen table-col7"><audio src="audio/<?=$audioExt?>/Unchained Melody_Il Divo.<?=$audioExt?>" controls="controls">Your browser does not support the audio element.</audio></td>
    					    <td class="table-col8"><a href="audio/download.php?file=mp3/Unchained Melody_Il Divo.mp3">Download Track</a></td>
		    			</tr>
						<tr>
    					    <td class="table-col1">John Williams and the Boston Pops Orchestra</td>
    					    <td class="table-col2"></td>
		    			    <td class="table-col3">60-69</td>
			    		    <td class="table-col4">Classical</td>
				    	    <td class="table-col5">2000s</td>
					        <td class="table-col6">Unchained Melody</td>
					        <td class="col-listen table-col7"><audio src="audio/<?=$audioExt?>/Unchained Melody_Boston Pops.<?=$audioExt?>" controls="controls">Your browser does not support the audio element.</audio></td>
    					    <td class="table-col8"><a href="audio/download.php?file=mp3/Unchained Melody_Boston Pops.mp3">Download Track</a></td>
		    			</tr>
						<tr>
    					    <td class="table-col1">Joni Mitchell</td>
    					    <td class="table-col2"></td>
		    			    <td class="table-col3">60-69</td>
			    		    <td class="table-col4">Pop</td>
				    	    <td class="table-col5">1980s</td>
					        <td class="table-col6">Chinese Cafe/Unchained Melody</td>
					        <td class="col-listen table-col7"><audio src="audio/<?=$audioExt?>/Chinese Cafe_Unchained Melody_Joni Mitchell.<?=$audioExt?>" controls="controls">Your browser does not support the audio element.</audio></td>
    					    <td class="table-col8"><a href="audio/download.php?file=mp3/Chinese Cafe_Unchained Melody_Joni Mitchell.mp3">Download Track</a></td>
		    			</tr>
						<tr>
    					    <td class="table-col1">June Valli</td>
    					    <td class="table-col2"></td>
		    			    <td class="table-col3">50-59</td>
			    		    <td class="table-col4">Pop</td>
				    	    <td class="table-col5">1950s</td>
					        <td class="table-col6">Unchained Melody</td>
					        <td class="col-listen table-col7"><audio src="audio/<?=$audioExt?>/Unchained Melody_June Valli.<?=$audioExt?>" controls="controls">Your browser does not support the audio element.</audio></td>
    					    <td class="table-col8"><a href="audio/download.php?file=mp3/Unchained Melody_June Valli.mp3">Download Track</a></td>
		    			</tr>
						<tr>
    					    <td class="table-col1">Karen Akers</td>
    					    <td class="table-col2"></td>
		    			    <td class="table-col3">50-59</td>
			    		    <td class="table-col4"></td>
				    	    <td class="table-col5">1990s</td>
					        <td class="table-col6">Unchained Melody</td>
					        <td class="col-listen table-col7"><audio src="audio/<?=$audioExt?>/Unchained Melody_Karen Akers.<?=$audioExt?>" controls="controls">Your browser does not support the audio element.</audio></td>
    					    <td class="table-col8"><a href="audio/download.php?file=mp3/Unchained Melody_Karen Akers.mp3">Download Track</a></td>
		    			</tr>
						<tr>
    					    <td class="table-col1">Katie Carpenter</td>
    					    <td class="table-col2"></td>
		    			    <td class="table-col3">80-89</td>
			    		    <td class="table-col4">Pop</td>
				    	    <td class="table-col5">2010s</td>
					        <td class="table-col6">Unchained Melody</td>
					        <td class="col-listen table-col7"><audio src="audio/<?=$audioExt?>/Unchained Melody Celtic_Katie Carpenter.<?=$audioExt?>" controls="controls">Your browser does not support the audio element.</audio></td>
    					    <td class="table-col8"><a href="audio/download.php?file=mp3/Unchained Melody Celtic_Katie Carpenter.mp3">Download Track</a></td>
		    			</tr>
						<tr>
    					    <td class="table-col1">Lauren Alaina</td>
    					    <td class="table-col2"></td>
		    			    <td class="table-col3">60-69</td>
			    		    <td class="table-col4">Pop</td>
				    	    <td class="table-col5">2010s</td>
					        <td class="table-col6">Unchained Melody</td>
					        <td class="col-listen table-col7"><audio src="audio/<?=$audioExt?>/Unchained Melody (American Idol Performance)_Lauren Alaina.<?=$audioExt?>" controls="controls">Your browser does not support the audio element.</audio></td>
    					    <td class="table-col8"><a href="audio/download.php?file=mp3/Unchained Melody (American Idol Performance)_Lauren Alaina.mp3">Download Track</a></td>
		    			</tr>
						<tr>
    					    <td class="table-col1">LeAnn Rimes</td>
    					    <td class="table-col2"></td>
		    			    <td class="table-col3">70-79</td>
			    		    <td class="table-col4">Country</td>
				    	    <td class="table-col5">1990s</td>
					        <td class="table-col6">Unchained Melody</td>
					        <td class="col-listen table-col7"><audio src="audio/<?=$audioExt?>/Unchained Melody_LeAnn Rimes.<?=$audioExt?>" controls="controls">Your browser does not support the audio element.</audio></td>
    					    <td class="table-col8"><a href="audio/download.php?file=mp3/Unchained Melody_LeAnn Rimes.mp3">Download Track</a></td>
		    			</tr>
						<tr>
    					    <td class="table-col1">Ledisi</td>
    					    <td class="table-col2"></td>
		    			    <td class="table-col3"></td>
			    		    <td class="table-col4"></td>
				    	    <td class="table-col5"></td>
					        <td class="table-col6">Unchained Melody</td>
					        <td class="col-listen table-col7"><audio src="audio/<?=$audioExt?>/Unchained Melody_Ledisi.<?=$audioExt?>" controls="controls">Your browser does not support the audio element.</audio></td>
    					    <td class="table-col8"><a href="audio/download.php?file=mp3/Unchained Melody_Ledisi.mp3">Download Track</a></td>
		    			</tr>
						<tr>
    					    <td class="table-col1">Lena Horne</td>
    					    <td class="table-col2"></td>
		    			    <td class="table-col3">60-69</td>
			    		    <td class="table-col4">Soul</td>
				    	    <td class="table-col5">1960s</td>
					        <td class="table-col6">Unchained Melody</td>
					        <td class="col-listen table-col7"><audio src="audio/<?=$audioExt?>/Unchained Melody_Lena Horne.<?=$audioExt?>" controls="controls">Your browser does not support the audio element.</audio></td>
    					    <td class="table-col8"><a href="audio/download.php?file=mp3/Unchained Melody_Lena Horne.mp3">Download Track</a></td>
		    			</tr>
						<tr>
    					    <td class="table-col1">Les Baxter</td>
    					    <td class="table-col2"></td>
		    			    <td class="table-col3">70-79</td>
			    		    <td class="table-col4"></td>
				    	    <td class="table-col5">1950s</td>
					        <td class="table-col6">Unchained Melody</td>
					        <td class="col-listen table-col7"><audio src="audio/<?=$audioExt?>/Unchained Melody_Les Baxter.<?=$audioExt?>" controls="controls">Your browser does not support the audio element.</audio></td>
    					    <td class="table-col8"><a href="audio/download.php?file=mp3/Unchained Melody_Les Baxter.mp3">Download Track</a></td>
		    			</tr>
						<tr>
    					    <td class="table-col1">Liberace</td>
    					    <td class="table-col2">Piano</td>
		    			    <td class="table-col3">60-69</td>
			    		    <td class="table-col4"></td>
				    	    <td class="table-col5">1950s</td>
					        <td class="table-col6">Unchained Melody</td>
					        <td class="col-listen table-col7"><audio src="audio/<?=$audioExt?>/Unchained Melody_Liberace.<?=$audioExt?>" controls="controls">Your browser does not support the audio element.</audio></td>
    					    <td class="table-col8"><a href="audio/download.php?file=mp3/Unchained Melody_Liberace.mp3">Download Track</a></td>
		    			</tr>
						<tr>
    					    <td class="table-col1">Lykke Li</td>
    					    <td class="table-col2"></td>
		    			    <td class="table-col3"></td>
			    		    <td class="table-col4"></td>
				    	    <td class="table-col5"></td>
					        <td class="table-col6">Unchained Melody</td>
					        <td class="col-listen table-col7"><audio src="audio/<?=$audioExt?>/Unchained Melody_Lykke Li.<?=$audioExt?>" controls="controls">Your browser does not support the audio element.</audio></td>
    					    <td class="table-col8"><a href="audio/download.php?file=mp3/Unchained Melody_Lykke Li.mp3">Download Track</a></td>
		    			</tr>
						<tr>
    					    <td class="table-col1">Neil Diamond</td>
    					    <td class="table-col2"></td>
		    			    <td class="table-col3"></td>
			    		    <td class="table-col4"></td>
				    	    <td class="table-col5">1990s</td>
					        <td class="table-col6">Unchained Melody</td>
					        <td class="col-listen table-col7"><audio src="audio/<?=$audioExt?>/Unchained Melody_Neil Diamond.<?=$audioExt?>" controls="controls">Your browser does not support the audio element.</audio></td>
    					    <td class="table-col8"><a href="audio/download.php?file=mp3/Unchained Melody_Neil Diamond.mp3">Download Track</a></td>
		    			</tr>
						<tr>
    					    <td class="table-col1">North Shore</td>
    					    <td class="table-col2"></td>
		    			    <td class="table-col3"></td>
			    		    <td class="table-col4"></td>
				    	    <td class="table-col5"></td>
					        <td class="table-col6">Unchained Melody</td>
					        <td class="col-listen table-col7"><audio src="audio/<?=$audioExt?>/Unchained Melody_North Shore.<?=$audioExt?>" controls="controls">Your browser does not support the audio element.</audio></td>
    					    <td class="table-col8"><a href="audio/download.php?file=mp3/Unchained Melody_North Shore.mp3">Download Track</a></td>
		    			</tr>
						<tr>
    					    <td class="table-col1">Patti Labelle and the Bluebelles</td>
    					    <td class="table-col2"></td>
		    			    <td class="table-col3"></td>
			    		    <td class="table-col4"></td>
				    	    <td class="table-col5">1960s</td>
					        <td class="table-col6">Unchained Melody</td>
					        <td class="col-listen table-col7"><audio src="audio/<?=$audioExt?>/Unchained Melody_Patti Labelle and the Bluebelles.<?=$audioExt?>" controls="controls">Your browser does not support the audio element.</audio></td>
    					    <td class="table-col8"><a href="audio/download.php?file=mp3/Unchained Melody_Patti Labelle and the Bluebelles.mp3">Download Track</a></td>
		    			</tr>
						<tr>
    					    <td class="table-col1">Perry Como</td>
    					    <td class="table-col2"></td>
		    			    <td class="table-col3"></td>
			    		    <td class="table-col4"></td>
				    	    <td class="table-col5">1990s</td>
					        <td class="table-col6">Unchained Melody</td>
					        <td class="col-listen table-col7"><audio src="audio/<?=$audioExt?>/Unchained Melody_Perry Como.<?=$audioExt?>" controls="controls">Your browser does not support the audio element.</audio></td>
    					    <td class="table-col8"><a href="audio/download.php?file=mp3/Unchained Melody_Perry Como.mp3">Download Track</a></td>
		    			</tr>
						<tr>
    					    <td class="table-col1">Peter Sellers Spike Milligan</td>
    					    <td class="table-col2"></td>
		    			    <td class="table-col3"></td>
			    		    <td class="table-col4"></td>
				    	    <td class="table-col5"></td>
					        <td class="table-col6">Unchained Melody</td>
					        <td class="col-listen table-col7"><audio src="audio/<?=$audioExt?>/Unchained Melody_Peter Sellers.<?=$audioExt?>" controls="controls">Your browser does not support the audio element.</audio></td>
    					    <td class="table-col8"><a href="audio/download.php?file=mp3/Unchained Melody_Peter Sellers.mp3">Download Track</a></td>
		    			</tr>
						<tr>
    					    <td class="table-col1">Ricky Nelson</td>
    					    <td class="table-col2"></td>
		    			    <td class="table-col3"></td>
			    		    <td class="table-col4"></td>
				    	    <td class="table-col5">1950s</td>
					        <td class="table-col6">Unchained Melody</td>
					        <td class="col-listen table-col7"><audio src="audio/<?=$audioExt?>/Unchained Melody_Ricky Nelson.<?=$audioExt?>" controls="controls">Your browser does not support the audio element.</audio></td>
    					    <td class="table-col8"><a href="audio/download.php?file=mp3/Unchained Melody_Ricky Nelson.mp3">Download Track</a></td>
		    			</tr>
						<tr>
    					    <td class="table-col1">Robson and Jerome</td>
    					    <td class="table-col2"></td>
		    			    <td class="table-col3"></td>
			    		    <td class="table-col4"></td>
				    	    <td class="table-col5">1990s</td>
					        <td class="table-col6">Unchained Melody</td>
					        <td class="col-listen table-col7"><audio src="audio/<?=$audioExt?>/Unchained Melody_Robson & Jerome.<?=$audioExt?>" controls="controls">Your browser does not support the audio element.</audio></td>
    					    <td class="table-col8"><a href="audio/download.php?file=mp3/Unchained Melody_Robson & Jerome.mp3">Download Track</a></td>
		    			</tr>
						<tr>
    					    <td class="table-col1">Roger Williams</td>
    					    <td class="table-col2"></td>
		    			    <td class="table-col3"></td>
			    		    <td class="table-col4"></td>
				    	    <td class="table-col5">1950s</td>
					        <td class="table-col6">Unchained Melody</td>
					        <td class="col-listen table-col7"><audio src="audio/<?=$audioExt?>/Unchained Melody_Roger Williams.<?=$audioExt?>" controls="controls">Your browser does not support the audio element.</audio></td>
    					    <td class="table-col8"><a href="audio/download.php?file=mp3/Unchained Melody_Roger Williams.mp3">Download Track</a></td>
		    			</tr>
						<tr>
    					    <td class="table-col1">Roy Orbison</td>
    					    <td class="table-col2"></td>
		    			    <td class="table-col3"></td>
			    		    <td class="table-col4"></td>
				    	    <td class="table-col5">1960s</td>
					        <td class="table-col6">Unchained Melody</td>
					        <td class="col-listen table-col7"><audio src="audio/<?=$audioExt?>/Unchained Melody_Roy Orbison.<?=$audioExt?>" controls="controls">Your browser does not support the audio element.</audio></td>
    					    <td class="table-col8"><a href="audio/download.php?file=mp3/Unchained Melody_Roy Orbison.mp3">Download Track</a></td>
		    			</tr>
						<tr>
    					    <td class="table-col1">Sarah McLachlan</td>
    					    <td class="table-col2"></td>
		    			    <td class="table-col3"></td>
			    		    <td class="table-col4"></td>
				    	    <td class="table-col5"></td>
					        <td class="table-col6">Unchained Melody</td>
					        <td class="col-listen table-col7"><audio src="audio/<?=$audioExt?>/Unchained Melody_Sarah McLachlan.<?=$audioExt?>" controls="controls">Your browser does not support the audio element.</audio></td>
    					    <td class="table-col8"><a href="audio/download.php?file=mp3/Unchained Melody_Sarah McLachlan.mp3">Download Track</a></td>
		    			</tr>
						<tr>
    					    <td class="table-col1">Sha Na Na</td>
    					    <td class="table-col2"></td>
		    			    <td class="table-col3"></td>
			    		    <td class="table-col4"></td>
				    	    <td class="table-col5"></td>
					        <td class="table-col6">Unchained Melody</td>
					        <td class="col-listen table-col7"><audio src="audio/<?=$audioExt?>/Unchained Melody_Sha Na Na.<?=$audioExt?>" controls="controls">Your browser does not support the audio element.</audio></td>
    					    <td class="table-col8"><a href="audio/download.php?file=mp3/Unchained Melody_Sha Na Na.mp3">Download Track</a></td>
		    			</tr>
						<tr>
    					    <td class="table-col1">Sonny and Cher</td>
    					    <td class="table-col2"></td>
		    			    <td class="table-col3"></td>
			    		    <td class="table-col4"></td>
				    	    <td class="table-col5">1960s</td>
					        <td class="table-col6">Unchained Melody</td>
					        <td class="col-listen table-col7"><audio src="audio/<?=$audioExt?>/Unchained Melody_Sonny & Cher.<?=$audioExt?>" controls="controls">Your browser does not support the audio element.</audio></td>
    					    <td class="table-col8"><a href="audio/download.php?file=mp3/Unchained Melody_Sonny & Cher.mp3">Download Track</a></td>
		    			</tr>
						<tr>
    					    <td class="table-col1">Susan Boyle</td>
    					    <td class="table-col2"></td>
		    			    <td class="table-col3"></td>
			    		    <td class="table-col4"></td>
				    	    <td class="table-col5">2010s</td>
					        <td class="table-col6">Unchained Melody</td>
					        <td class="col-listen table-col7"><audio src="audio/<?=$audioExt?>/Unchained Melody_Susan Boyle.<?=$audioExt?>" controls="controls">Your browser does not support the audio element.</audio></td>
    					    <td class="table-col8"><a href="audio/download.php?file=mp3/Unchained Melody_Susan Boyle.mp3">Download Track</a></td>
		    			</tr>
						<tr>
    					    <td class="table-col1">The B-Team</td>
    					    <td class="table-col2"></td>
		    			    <td class="table-col3"></td>
			    		    <td class="table-col4">A Cappella</td>
				    	    <td class="table-col5">2010s</td>
					        <td class="table-col6">Unchained Melody A Cappella</td>
					        <td class="col-listen table-col7"><audio src="audio/<?=$audioExt?>/Unchained Melody a Cappella_The B-Team.<?=$audioExt?>" controls="controls">Your browser does not support the audio element.</audio></td>
    					    <td class="table-col8"><a href="audio/download.php?file=mp3/Unchained Melody a Cappella_The B-Team.mp3">Download Track</a></td>
		    			</tr>
						<tr>
    					    <td class="table-col1">The Catalinas</td>
    					    <td class="table-col2"></td>
		    			    <td class="table-col3"></td>
			    		    <td class="table-col4">Pop</td>
				    	    <td class="table-col5"></td>
					        <td class="table-col6">Unchained Melody</td>
					        <td class="col-listen table-col7"><audio src="audio/<?=$audioExt?>/Unchained Melody_Catalinas.<?=$audioExt?>" controls="controls">Your browser does not support the audio element.</audio></td>
    					    <td class="table-col8"><a href="audio/download.php?file=mp3/Unchained Melody_Catalinas.mp3">Download Track</a></td>
		    			</tr>
						<tr>
    					    <td class="table-col1">The Drifters</td>
    					    <td class="table-col2"></td>
		    			    <td class="table-col3"></td>
			    		    <td class="table-col4">R&B</td>
				    	    <td class="table-col5"></td>
					        <td class="table-col6">Unchained Melody</td>
					        <td class="col-listen table-col7"><audio src="audio/<?=$audioExt?>/Unchained Melody (Re-Recorded)_The Drifters.<?=$audioExt?>" controls="controls">Your browser does not support the audio element.</audio></td>
    					    <td class="table-col8"><a href="audio/download.php?file=mp3/Unchained Melody (Re-Recorded)_The Drifters.mp3">Download Track</a></td>
		    			</tr>
						<tr>
    					    <td class="table-col1">The Fleetwoods</td>
    					    <td class="table-col2"></td>
		    			    <td class="table-col3"></td>
			    		    <td class="table-col4">Pop</td>
				    	    <td class="table-col5">1950s</td>
					        <td class="table-col6">Unchained Melody</td>
					        <td class="col-listen table-col7"><audio src="audio/<?=$audioExt?>/Unchained Melody (A Capella Version)_The Fleetwoods.<?=$audioExt?>" controls="controls">Your browser does not support the audio element.</audio></td>
    					    <td class="table-col8"><a href="audio/download.php?file=mp3/Unchained Melody (A Capella Version)_The Fleetwoods.mp3">Download Track</a></td>
		    			</tr>
						<tr>
    					    <td class="table-col1">The Lennon Sisters</td>
    					    <td class="table-col2"></td>
		    			    <td class="table-col3"></td>
			    		    <td class="table-col4"></td>
				    	    <td class="table-col5"></td>
					        <td class="table-col6">Unchained Melody</td>
					        <td class="col-listen table-col7"><audio src="audio/<?=$audioExt?>/Unchained Melody_The Lennon Sisters.<?=$audioExt?>" controls="controls">Your browser does not support the audio element.</audio></td>
    					    <td class="table-col8"><a href="audio/download.php?file=mp3/Unchained Melody_The Lennon Sisters.mp3">Download Track</a></td>
		    			</tr>
						<tr>
    					    <td class="table-col1">The Lettermen</td>
    					    <td class="table-col2"></td>
		    			    <td class="table-col3"></td>
			    		    <td class="table-col4"></td>
				    	    <td class="table-col5">1960s</td>
					        <td class="table-col6">Unchained Melody</td>
					        <td class="col-listen table-col7"><audio src="audio/<?=$audioExt?>/Unchained Melody_The Lettermen.<?=$audioExt?>" controls="controls">Your browser does not support the audio element.</audio></td>
    					    <td class="table-col8"><a href="audio/download.php?file=mp3/Unchained Melody_The Lettermen.mp3">Download Track</a></td>
		    			</tr>
						<tr>
    					    <td class="table-col1">The Manhattan Transfer</td>
    					    <td class="table-col2"></td>
		    			    <td class="table-col3"></td>
			    		    <td class="table-col4"></td>
				    	    <td class="table-col5">1980s</td>
					        <td class="table-col6">Unchained Melody</td>
					        <td class="col-listen table-col7"><audio src="audio/<?=$audioExt?>/Unchained Melody_Manhattan Transfer.<?=$audioExt?>" controls="controls">Your browser does not support the audio element.</audio></td>
    					    <td class="table-col8"><a href="audio/download.php?file=mp3/Unchained Melody_Manhattan Transfer.mp3">Download Track</a></td>
		    			</tr>
						<tr>
    					    <td class="table-col1">The Platters</td>
    					    <td class="table-col2"></td>
		    			    <td class="table-col3">50-59</td>
			    		    <td class="table-col4"></td>
				    	    <td class="table-col5">1960s</td>
					        <td class="table-col6">Unchained Melody</td>
					        <td class="col-listen table-col7"><audio src="audio/<?=$audioExt?>/Unchained Melody_The Platters.<?=$audioExt?>" controls="controls">Your browser does not support the audio element.</audio></td>
    					    <td class="table-col8"><a href="audio/download.php?file=mp3/Unchained Melody_The Platters.mp3">Download Track</a></td>
		    			</tr>
						<tr>
    					    <td class="table-col1">The Righteous Brothers</td>
    					    <td class="table-col2"></td>
		    			    <td class="table-col3"></td>
			    		    <td class="table-col4"></td>
				    	    <td class="table-col5">1960s</td>
					        <td class="table-col6">Unchained Melody</td>
					        <td class="col-listen table-col7"><audio src="audio/<?=$audioExt?>/Unchained Melody_The Righteous Brothers.<?=$audioExt?>" controls="controls">Your browser does not support the audio element.</audio></td>
    					    <td class="table-col8"><a href="audio/download.php?file=mp3/Unchained Melody_The Righteous Brothers.mp3">Download Track</a></td>
		    			</tr>
						<tr>
    					    <td class="table-col1">Todd Duncan</td>
    					    <td class="table-col2"></td>
		    			    <td class="table-col3"></td>
			    		    <td class="table-col4"></td>
				    	    <td class="table-col5">1950s</td>
					        <td class="table-col6">Unchained Melody</td>
					        <td class="col-listen table-col7"><audio src="audio/<?=$audioExt?>/Unchained Melody_Todd Duncan.<?=$audioExt?>" controls="controls">Your browser does not support the audio element.</audio></td>
    					    <td class="table-col8"><a href="audio/download.php?file=mp3/Unchained Melody_Todd Duncan.mp3">Download Track</a></td>
		    			</tr>
						<tr>
    					    <td class="table-col1">Tom Jones</td>
    					    <td class="table-col2"></td>
		    			    <td class="table-col3"></td>
			    		    <td class="table-col4"></td>
				    	    <td class="table-col5"></td>
					        <td class="table-col6">Unchained Melody</td>
					        <td class="col-listen table-col7"><audio src="audio/<?=$audioExt?>/Unchained Melody_Tom Jones.<?=$audioExt?>" controls="controls">Your browser does not support the audio element.</audio></td>
    					    <td class="table-col8"><a href="audio/download.php?file=mp3/Unchained Melody_Tom Jones.mp3">Download Track</a></td>
		    			</tr>
						<tr>
    					    <td class="table-col1">Toots Hibbert</td>
    					    <td class="table-col2"></td>
		    			    <td class="table-col3"></td>
			    		    <td class="table-col4"></td>
				    	    <td class="table-col5">2010s</td>
					        <td class="table-col6">Unchained Melody</td>
					        <td class="col-listen table-col7"><audio src="audio/<?=$audioExt?>/Unchained Melody Reggae_Toots Hibbert.<?=$audioExt?>" controls="controls">Your browser does not support the audio element.</audio></td>
    					    <td class="table-col8"><a href="audio/download.php?file=mp3/Unchained Melody Reggae_Toots Hibbert.mp3">Download Track</a></td>
		    			</tr>
						<tr>
    					    <td class="table-col1">U2</td>
    					    <td class="table-col2"></td>
		    			    <td class="table-col3"></td>
			    		    <td class="table-col4"></td>
				    	    <td class="table-col5">2000s</td>
					        <td class="table-col6">Unchained Melody</td>
					        <td class="col-listen table-col7"><audio src="audio/<?=$audioExt?>/Unchained Melody_U2.<?=$audioExt?>" controls="controls">Your browser does not support the audio element.</audio></td>
    					    <td class="table-col8"><a href="audio/download.php?file=mp3/Unchained Melody_U2.mp3">Download Track</a></td>
		    			</tr>
						<tr>
    					    <td class="table-col1">Vito and the Salutations</td>
    					    <td class="table-col2"></td>
		    			    <td class="table-col3"></td>
			    		    <td class="table-col4"></td>
				    	    <td class="table-col5">1960s</td>
					        <td class="table-col6">Unchained Melody</td>
					        <td class="col-listen table-col7"><audio src="audio/<?=$audioExt?>/Unchained Melody_Vito & the Salutations.<?=$audioExt?>" controls="controls">Your browser does not support the audio element.</audio></td>
    					    <td class="table-col8"><a href="audio/download.php?file=mp3/Unchained Melody_Vito & the Salutations.mp3">Download Track</a></td>
		    			</tr>
						<tr>
    					    <td class="table-col1">Willie Nelson</td>
    					    <td class="table-col2"></td>
		    			    <td class="table-col3"></td>
			    		    <td class="table-col4"></td>
				    	    <td class="table-col5">1970s</td>
					        <td class="table-col6">Unchained Melody</td>
					        <td class="col-listen table-col7"><audio src="audio/<?=$audioExt?>/Unchained Melody_Willie Nelson.<?=$audioExt?>" controls="controls">Your browser does not support the audio element.</audio></td>
    					    <td class="table-col8"><a href="audio/download.php?file=mp3/Unchained Melody_Willie Nelson.mp3">Download Track</a></td>
		    			</tr>
		    		</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
<script src="js/global.js?ver=<?=time();?>"></script>
<script src="js/trivia.js?ver=<?=time();?>"></script>
</body>
</html>

