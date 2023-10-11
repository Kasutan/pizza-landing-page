<?php 
if ( ! defined( 'ABSPATH' ) ) exit;
add_shortcode( 'corleone-restaurants', 'kasutan_corleone_restaurants' );
function kasutan_corleone_restaurants($atts) {
	
	$restos=[
		array(
			"image"=> "7",
			'nom' =>"Étoile-sur-Rhône",
			'adresse' => "2 route Beauvallon l'Alouette",
			"ville" => "26800 Étoile-sur-Rhône",
			"tel" => "04 75 05 45 56"
		),
		array(
			"image"=> "8",
			'nom' =>"Peyrins",
			'adresse' => "825 route de Mours",
			"ville" => "26380 Peyrins",
			"tel" => "04 75 47 05 24"
		),array(
			"image"=> "9",
			'nom' =>"Pizançon",
			'adresse' => "90 rue du 19 Mars 1962",
			"ville" => "26300 Pizançon",
			"tel" => "04 75 45 86 83"
		),array(
			"image"=> "10",
			'nom' =>"Pont de l'Isère",
			'adresse' => "8 avenue du 45ème Parallèle",
			"ville" => "26600 Pont-de-l'Isère",
			"tel" => "04 75 55 96 34"
		),array(
			"image"=> "11",
			'nom' =>"Romans",
			'adresse' => "75 rue Parmentier", 
			"ville" => "26100 Romans-sur-Isère",
			"tel" => "04 75 48 75 69"
		),array(
			"image"=> "12",
			'nom' =>"Valence",
			'adresse' => "Plateau des Couleures, Pl. Pierre Lubat",
			"ville" => "26000 Valence",
			"tel" => "04 75 40 63 77"
		)
		];
		

	
	ob_start();
		echo '<ul class="restaurants">';
			$num=1;
			foreach($restos as $resto) {
				echo '<li class="resto">';
					$tel=$resto['tel'];
					$tel_formate=kasutan_formate_tel($tel);
					$ville=$resto['ville'];
					$nom=$resto['nom'];
					
					printf('<div class="image">%s</div>',wp_get_attachment_image($resto['image'], 'medium_large'));
					printf('<h3>Corleone %s</h3>',$nom);

					printf('<p class="adresse">%s <br> %s</p>',$resto['adresse'],$ville);
					printf('<a href="tel:%s" class="tel mobile" data-ville="%s" target="_blank">Tél.&nbsp;: %s</a>',$tel_formate,$nom,$tel);
					printf('<button class="control-tel" data-ville="%s" aria-controls="#tel-desktop-%s" aria-expanded="false">Afficher le numéro</button>',$nom,$num);
					printf('<p class="tel desktop" id="tel-desktop-%s">Tél.&nbsp;: %s</p>',$num, $tel);
					
				echo '</li>';
				$num++;
			}
		echo '</ul>';

	return ob_get_clean();
}

function kasutan_formate_tel($tel) {
	$tel=str_replace(' ','',$tel);
	$tel=substr($tel,1);
	$tel='+33'.$tel;
	return $tel;
}

