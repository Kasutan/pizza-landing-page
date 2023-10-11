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
			'adresse' => "",
			"ville" => "",
			"tel" => ""
		),array(
			"image"=> "9",
			'nom' =>"Pizançon",
			'adresse' => "",
			"ville" => "",
			"tel" => ""
		),array(
			"image"=> "10",
			'nom' =>"Pont de l'Isère",
			'adresse' => "",
			"ville" => "Pont-de-l'Isère",
			"tel" => ""
		),array(
			"image"=> "11",
			'nom' =>"Romans",
			'adresse' => "",
			"ville" => "Romans-sur-Isère",
			"tel" => ""
		),array(
			"image"=> "12",
			'nom' =>"Valence",
			'adresse' => "",
			"ville" => "Valence",
			"tel" => ""
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

