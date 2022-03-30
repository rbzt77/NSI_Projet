<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Orbitron" />
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Kalam" />
<link rel="stylesheet" href="pageWeb.css">
<link rel="icon" href= https://i.pinimg.com/originals/dc/03/16/dc0316784f9c37d2a2b54766344739df.png>
<title>Radio BZT</title>
<meta charset="utf-8">
</head>

<body>
<h1>
<h1 class=grand-titre ><font face="Orbitron">RADIO BZT</font><center>
<img src="https://www.animatedimages.org/data/media/599/animated-radio-image-0070.gif" title="fond" width="300" height="200">
</center>
</h1>
<center>
	<p><font face="Kalam" color="blue" size="6">Tous les Titres disponibles: </font></p>
	<table>
		<tr>
			<td><font face="Kalam" color="red" size="4">
				<?php
				$scandir = system("ls /home/pi/fm_transmitter/musiques/");
				foreach($scandir as $musiques){
    				echo "$musiques<br/>";
				}
				?>
			</font></td>
		</tr>
	</table>
<center>
<br>
<table>
	<tr>
		<th>
		<form action="config.php" method="POST">
			<div class="case">
                <label for="titre"><font face="Kalam">Titre : </font></label>
                <input type="text" id="titre" name="titre"  >
            </div>
			
			<div class="case">
                <label for="frequence"><font face="Kalam">Fréquence : </font></label>
                <input type="float" id="frequence" name="frequence"  >
            </div>

            <div class="submit" >
                <input type="image" align="right" width="200" height="200"img src="https://pluspng.com/img-png/play-button-png-play-button-icon-png-image-18904-512.png">
                <p><font color="red">Play</font></p>
            </div>
        </form>
		</th>

		
			<th><form action="stop.php" method="POST">
			<div class="submit">
				<input type="image" align="top" width="200" height="175" img src="https://images.vexels.com/media/users/3/131706/isolated/preview/80c52538116b504f0d45858a707d0c4f-pause-flat-button-by-vexels.png">
				<p><font color="red">Pause</font></p>
			</div>
		</form>
		</th>
		</tr>
</table>
</center>
</body>
</html>
  
