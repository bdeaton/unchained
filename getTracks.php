<?php
	$dbPath = "localhost";
	$dbUsername = "unchained";
	$dbPassword = "Rhodes201!";
	if(strtolower(gethostname())=="amanpulo"){
		echo("DEV<br /><br />");
		$dbUsername = "root";
		$dbPassword = "brian";
	}
	$con = mysql_connect($dbPath,$dbUsername,$dbPassword);

	if ($con){
		mysql_select_db("unchained", $con);
		
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
		//$filter = "";
		/*
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
		
?>
<table border="1">
	<thead>
		<tr>
			<th>track_id</th>
			<th>artist_name</th>
			<th>label_name</th>
			<th>instrument_name</th>
			<th>tempo_name</th>
			<th>genre_name</th>
			<th>decade_desc</th>
			<th>track_year</th>
			<th>track_name</th>
			<th>track_url_mp3</th>
		</tr>
	</thead>
<?
		
		while($row = mysql_fetch_array($result)){
			$output =  $row['track_id']." - ".$row['artist_name']." - ".$row['label_name']." - ".$row['instrument_name']." - ".$row['tempo_name']." - ".$row['genre_name']." - ".$row['decade_desc']." - ".$row['track_year']." - ".$row['track_name']." - ".$row['track_url_mp3'];
			$output = $output."<br /><br />";
			//echo $output;

			$html = "<tr>";
			
			$html = $html."<td>".$row['track_id']."</td>";
			$html = $html."<td>".$row['artist_name']."</td>";
			$html = $html."<td>".$row['label_name']."</td>";
			$html = $html."<td>".$row['instrument_name']."</td>";
			$html = $html."<td>".$row['tempo_name']."</td>";
			$html = $html."<td>".$row['genre_name']."</td>";
			$html = $html."<td>".$row['decade_desc']."</td>";
			$html = $html."<td>".$row['track_year']."</td>";
			$html = $html."<td>".$row['track_year']."</td>";
			$html = $html."<td>".$row['track_url_mp3']."</td>";
			
			$html = $html."</tr>";
			echo $html;
			
			$arr = array('id' => $row['track_id'], 'artist' => $row['artist_name'], 'artistDesc' => $row['artist_desc'], 'artistId' => $row['artist_id'], 'labelId' => $row['label_id'], 'labelName' => $row['label_name'], 'instrument' => $row['instrument_name'], 'instrumentId' => $row['instrument_id'], 'tempo' => $row['tempo_name'], 'tempoId' => $row['tempo_id'], 'genre' => $row['genre_name'], 'genreId' => $row['genre_id'], 'decade' => $row['decade_desc'], 'decadeId' => $row['decade_id'], 'name' => $row['track_name'], 'desc' => $row['track_desc'], 'url' => $row['track_url_mp3']);
			
			//$arr = array(  'id' => $row['track_id']  );

			
			array_push($stack, $arr);
		}
		
		
?>
</table>

<?
		echo json_encode($stack);
		mysql_close($con);
	}
	else{
		die('Could not connect: ' . mysql_error());
	}
	
	
?>

