<!-- Arreglo de las palabras traducidas en Español y Nahualt-->

<?php 
	
	$array = array(
		'cuatochin' => 'conejo',
		'yalhuaya' => 'ayer',
		'atl' => 'agua',
		'tlitl' => 'fuego',
		'cuamezah' => 'mesa',
		'tlaxcalyoyomitl' => 'servilleta'
	);

	$array1 = array(
		'conejo' => 'cuatochin',
		'ayer' => 'yalhuaya',
		'agua' => 'atl',
		'fuego' => 'tlitl',
		'mesa' => 'cuamezah',
		'servilleta' => 'tlaxcalyoyomitl'
	);

	$audio = array(	'media/audios/palabra/cuatochin.mp3' => 'conejo',
				  	'media/audios/palabra/yalhuaya.mp3' => 'ayer',
				  	'media/audios/palabra/atl.mp3' => 'agua',
				  	'media/audios/palabra/tlitl.mp3' => 'fuego',
				  	'media/audios/palabra/cuamezah.mp3' => 'mesa',
				  	'media/audios/palabra/tlaxcalyoyomitl.mp3' => 'servilleta' );

	$audio1 = array('media/audios/palabra/cuatochin.mp3' => 'cuatochin',
				  	'media/audios/palabra/yalhuaya.mp3' => 'yalhuaya',
				  	'media/audios/palabra/atl.mp3' => 'atl',
				  	'media/audios/palabra/tlitl.mp3' => 'tlitl',
				  	'media/audios/palabra/cuamezah.mp3' => 'cuamezah',
				  	'media/audios/palabra/tlaxcalyoyomitl.mp3' => 'tlaxcalyoyomitl');


	if ($_POST['idioma']=="1"){
		while ($palabra_traducida = current($array) && $audio_palabra = current($audio)) {
			if ($palabra_traducida == strtolower($_POST['txto']) && $audio_palabra == strtolower($_POST['txto'])) {
				include 'header-principal.php';
				echo "<div align='center'>
						<div>
							<h1><b>Palabra Traducida: </b></h1>
							<br/>
							<h2>".key($array)."</h2>
						</div>
						<div>
							<audio controls>
								<source src='".key($audio)."' type='audio/mpeg'>
							</audio>
						</div>
					  </div>
					 </body>
					</html>";
			} 
			next($array);
			next($audio);
			if (	strtolower($_POST['txto']) <> "conejo" && strtolower($_POST['txto']) <> "ayer" && 
					strtolower($_POST['txto']) <> "agua" && strtolower($_POST['txto']) <> "fuego" && 
					strtolower($_POST['txto']) <> "mesa" && strtolower($_POST['txto']) <> "servilleta") {
				include 'header-principal.php';
				echo "<div align='center'>
						<h1><b>No existe la palabra en el traductor</b></h1>
					  </div>
					 </body>
					</html>";
				break;
			}
		}

	} 
	else {
		while ($palabra_traducida = current($array1) && $audio_palabra = current($audio1)) {
			if ($palabra_traducida == strtolower($_POST['txto']) && $audio_palabra == strtolower($_POST['txto'])) {
				include 'header-principal.php';
				echo "<div align='center'>
						<div>
							<h1><b>Palabra Traducida: </b></h1>
							<br/>
							<h2>".key($array1)."</h2>
						</div>
						<div>
							<audio controls>
								<source src='".key($audio1)."' type='audio/mpeg'>
							</audio>
						</div>
					  </div>
					 </body>
					</html>";
			}
			next($array1);
			next($audio1);
			if (	strtolower($_POST['txto']) <> "cuatochin" && strtolower($_POST['txto']) <> "yalhuaya" && 
					strtolower($_POST['txto']) <> "atl" && strtolower($_POST['txto']) <> "tlitl" && 
					strtolower($_POST['txto']) <> "cuamezah" && strtolower($_POST['txto']) <> "tlaxcalyoyomitl") {
				include 'header-principal.php';
				echo "<div align='center'>
						<h1><b>No existe la palabra en el traductor</b></h1>
					  </div>
					 </body>
					</html>";
				break;
			}
		}
	}
 ?>