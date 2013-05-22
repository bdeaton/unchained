<!DOCTYPE html>
<html>
<head>
	<?include "include-head-global.php";?>
</head>
<body>
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
				<p>Search and audition various master recordings of "Unchained Melody." Please <a href="#">contact us</a> for links to download the audio files.
				</p>
				<style>
				#listen-filter{
					overflow:hidden;
					font-size:17px;
					color:#090909;
					margin-top:6px;
				}
					#listen-filter li{
						float:left;
						width: 20%;
						overflow:hidden;
					}
					#listen-filter li.first{
						margin-left:0;
					}
						#listen-filter li label{
							display: block;
							text-transform:uppercase;
							float: left;
						}
						#listen-filter li select{
							float: left;
							clear:both;
							width: 95%;
							font-size: 11px;
							height: 17px;
							margin-bottom: 8px;
							padding: 0;
						}
						#listen-filter li#filter-item-tempos select{
							width:100%;	
						}
				</style>
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
<style>
table{
	width:100%;
	border:10px solid #c6c3c3;
	table-spacing:10px;
	font-size:11px;
}
	table thead{
		background-color:#a39f9f;
		color:#fff;
		text-transform:uppercase;
	}
		table thead tr{
		
		}
			table thead tr th{
				border-right:1px solid #c6c3c3;
				padding:11px 11px 12px;
			}
	table tbody{
		color:#090909;
	}
		table tbody tr{
		
		}
			table tbody tr td{
				border-right:1px solid #c6c3c3;
				padding:4px 11px;
			}
			table tbody tr td.col-download{
				padding:0;
			}
			
			audio{
				float: left;
				margin: 0;
				padding: 0;
				width: 200px;
				height: 28px;
			}
			table tbody tr td a{
				text-transform:lowercase;
				text-decoration:underline;
				color:inherit;
			}
</style>
				<table id="listen-details">
					<thead>
						<tr>
							<th>Artist</th>
							<th>Instrument</th>
							<th>Tempo</th>
							<th>Genre</th>
							<th>Decade</th>
							<th>Name</th>
							<th>Download</th>
							<th>Sample</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Alex North</td>
							<td>Electric Guitar</td>
							<td>Grave</td>
							<td>Acoustic</td>
							<td>1900s</td>
							<td>Text Track 1</td>
							<td class="col-download"><audio src="audio/onion.mp3" controls="controls">Your browser does not support the audio element.</audio></td>
							<td><a href="audio/download.php?file=onion.mp3">Download Track</a></td>
						</tr>
						<tr>
							<td>Alex North</td>
							<td>Electric Guitar</td>
							<td>Grave</td>
							<td>Acoustic</td>
							<td>1900s</td>
							<td>Text Track 1</td>
							<td class="col-download"><audio src="audio/onion.mp3" controls="controls">Your browser does not support the audio element.</audio></td>
							<td><a href="audio/download.php?file=onion.mp3">Download Track</a></td>
						</tr>
						<tr>
							<td>Alex North</td>
							<td>Electric Guitar</td>
							<td>Grave</td>
							<td>Acoustic</td>
							<td>1900s</td>
							<td>Text Track 1</td>
							<td class="col-download"><audio src="audio/onion.mp3" controls="controls">Your browser does not support the audio element.</audio></td>
							<td><a href="audio/download.php?file=onion.mp3">Download Track</a></td>
						</tr>
						<tr>
							<td>Alex North</td>
							<td>Electric Guitar</td>
							<td>Grave</td>
							<td>Acoustic</td>
							<td>1900s</td>
							<td>Text Track 1</td>
							<td class="col-download"><audio src="audio/onion.mp3" controls="controls">Your browser does not support the audio element.</audio></td>
							<td><a href="audio/download.php?file=onion.mp3">Download Track</a></td>
						</tr>
						<tr>
							<td>Alex North</td>
							<td>Electric Guitar</td>
							<td>Grave</td>
							<td>Acoustic</td>
							<td>1900s</td>
							<td>Text Track 1</td>
							<td class="col-download"><audio src="audio/onion.mp3" controls="controls">Your browser does not support the audio element.</audio></td>
							<td><a href="audio/download.php?file=onion.mp3">Download Track</a></td>
						</tr>
						<tr>
							<td>Alex North</td>
							<td>Electric Guitar</td>
							<td>Grave</td>
							<td>Acoustic</td>
							<td>1900s</td>
							<td>Text Track 1</td>
							<td class="col-download"><audio src="audio/onion.mp3" controls="controls">Your browser does not support the audio element.</audio></td>
							<td><a href="audio/download.php?file=onion.mp3">Download Track</a></td>
						</tr>
					</tbody>
				</table>
			
			</div>
		</div>
	</div>
</div>
<?include "include-script-footer-global.php";?>
</body>
</html>
