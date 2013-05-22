<?php include("include-detect.php"); ?>
<!DOCTYPE html>
<html>
<head>
	<?include "include-head-global.php";?>
    <link href="css/listen.css?ver=<?=time();?>" media="screen" rel="stylesheet" type="text/css" />
</head>
<body class="<?php echo $clientClasses ?>" >
<div class="content-container">
	<div class="content-col content-primary">
		<h1><a class="logo-main" href="home.php">Unchained Melody Publishing LLC</a></h1>
		<p class="text-tagline">"One copyright, one phone call. A simple and quick licensing process."</p>
		<?
			include "include-nav.php";
			insertNav('listen');
		?>
		<em class="divider-primary"></em>
		<?include "include-trivia.php";?>
	</div>
	<div class="content-col content-secondary">
		<?include "include-social.php";?>
		<div class="content-wrapper">
			<h2>Listen To Music</h2>
			<div class="content-main">
				<ul id="listen-filter">
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
<?php
	$dbPath = "localhost";
	$dbUsername = "unchained";
	$dbPassword = "Rhodes201!";
	if(strtolower(gethostname())=="amanpulo"){
		//echo("DEV<br /><br />");
		$dbUsername = "root";
		$dbPassword = "brian";
	}
	$con = mysql_connect($dbPath,$dbUsername,$dbPassword);

	if ($con){
		mysql_select_db("unchained", $con);
		/*
		$instrument = (int) $_GET['i'];
		$instrumentFilter = ($instrument != null) ? 'and tracks.track_instrument = '.$instrument : '';

		$genre = (int) $_GET['g'];
		$genreFilter = ($genre != null) ? 'and tracks.track_genre = '.$genre : '';

		$decade = (int) $_GET['d'];
		$decadeFilter = ($decade != null) ? 'and tracks.track_decade = '.$decade : '';

		$tempo = (int) $_GET['t'];
		$tempoFilter = ($tempo != null) ? 'and tracks.track_tempo = '.$tempo : '';

		$artist = (int) $_GET['a'];
		$artistFilter = ($artist != null) ? 'and tracks.track_artist = '.$artist : '';
		
		$label = (int) $_GET['l'];
		$labelFilter = ($label != null) ? 'and tracks.track_label = '.$label : '';
		
		$filter = $instrumentFilter." ".$genreFilter." ".$decadeFilter." ".$tempoFilter." ".$artistFilter." ".$labelFilter;
		$filter = "";
		
		
		*/
		
		$result = mysql_query("SELECT * FROM 
				tracks,
				artists,
				labels,
				instruments,
				genres,
				tempos,
				decades
			where
				tracks.track_artist = artists.artist_id and
				tracks.track_label = labels.label_id and
				
				tracks.track_instrument = instruments.instrument_id and
				
				tracks.track_genre = genres.genre_id and
				tracks.track_tempo = tempos.tempo_id and
				tracks.track_decade = decades.decade_id
					
			ORDER BY track_id
		");
		$arr = array();
		$stack = array();
		while($row = mysql_fetch_array($result)){
			//$output =  $row['track_id']." - ".$row['artist_name']." - ".$row['label_name']." - ".$row['instrument_name']." - ".$row['tempo_name']." - ".$row['genre_name']." - ".$row['decade_desc']." - ".$row['track_year']." - ".$row['track_name']." - ".$row['track_url_mp3'];
			//$output = $output."<br /><br />";
			//echo $output;
			
			$audioFilename = $row['track_url_mp3'];
			if($audioExt!="mp3"){
				$audioFilename = $row['track_url_ogg'];
			}
			
			$html = '						<tr>'."\n";
			$html = $html.'    					    <td class="table-col1">'.$row['artist_name'].'</td>'."\n";
			$html = $html.'    					    <td class="table-col2">'.$row['instrument_name'].'</td>'."\n";
			$html = $html.'		    			    <td class="table-col3">'.$row['tempo_name'].'</td>'."\n";
			$html = $html.'			    		    <td class="table-col4">'.$row['genre_name'].'</td>'."\n";
			$html = $html.'				    	    <td class="table-col5">'.$row['decade_desc'].'</td>'."\n";
			$html = $html.'					        <td class="table-col6">'.$row['track_name'].'</td>'."\n";
			$html = $html.'					        <td class="col-listen table-col7"><audio src="audio/mp3/'.$audioFilename.'" controls="controls">Your browser does not support the audio element.</audio></td>'."\n";
			$html = $html.'    					    <td class="table-col8"><a href="audio/download.php?file=mp3/'.$audioFilename.'">Download Track</a></td>'."\n";
			$html = $html.'		    			</tr>'."\n";
			echo $html;
			
			$arr = array('id' => $row['track_id'], 'artist' => $row['artist_name'], 'artistDesc' => $row['artist_desc'], 'artistId' => $row['artist_id'], 'labelId' => $row['label_id'], 'labelName' => $row['label_name'], 'instrument' => $row['instrument_name'], 'instrumentId' => $row['instrument_id'], 'tempo' => $row['tempo_name'], 'tempoId' => $row['tempo_id'], 'genre' => $row['genre_name'], 'genreId' => $row['genre_id'], 'decade' => $row['decade_desc'], 'decadeId' => $row['decade_id'], 'name' => $row['track_name'], 'desc' => $row['track_desc'], 'url' => $row['track_url_mp3']);
			
			//$arr = array(  'id' => $row['track_id']  );

			
			array_push($stack, $arr);
		}
		
		
?>
		    		</tbody>
				</table>
<?
		//echo json_encode($stack);
		mysql_close($con);
	}
	else{
		die('Could not connect: ' . mysql_error());
	}
?>
			</div>
		</div>
	</div>
</div>
<?include "include-script-footer-global.php";?>
</body>
</html>
