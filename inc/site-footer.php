<?php


/**
 * Formulaire newsletter + menus + logo Footer
 *
 */
add_action( 'tha_footer_top', 'kasutan_main_footer' );
function kasutan_main_footer() {
	
	
		printf('<div class="footer-logo">%s</div>', wp_get_attachment_image(13, 'full'));

		?>
		<div class="footer-restaurants">
			<p class="footer-intro">C'est 6 restaurants en Auvergne-Rhône-Alpes</p>
			<p>Peyrins | Pizançon | Romans-sur-Isère | Pont de l'Isère | Valence | Étoile-sur-Rhône</p>
		</div>

		

	<?php
}


/**
* Copyright et liens légaux
*
*/
add_action( 'tha_footer_bottom', 'kasutan_copyright' );
function kasutan_copyright() {
	
}