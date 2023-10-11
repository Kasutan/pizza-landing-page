(function($) {

	$( document ).ready(function() {

		//https://matomo.org/faq/reports/implement-event-tracking-with-matomo/

		$('.intro a').click(function(e) {
			console.log('evenement Matomo clic sur lien de commande');
			_paq.push(['trackEvent', 'Clic', 'Clic sur lien de commande', 'Clic sur lien de commande']);
		});
		$('.control-tel').click(function(e) {
			if($(this).attr('aria-expanded')=='false') {
				var ville=$(this).attr('data-ville');
				console.log('evenement Matomo desktop pour ville',ville);
				_paq.push(['trackEvent', 'Clic', 'Clic pour afficher numéro en desktop', ville]);

				var tel=$($(this).attr('aria-controls'));
				$(this).attr('aria-expanded','true');
				$(tel).slideDown('slow');
			}
		});

		$('.tel.mobile').click(function(e) {
			var ville=$(this).attr('data-ville');
			console.log('evenement Matomo mobile pour ville',ville);
			_paq.push(['trackEvent', 'Clic', 'Clic pour appeler numéro en mobile', ville]);

		});

	}); //fin document ready
})( jQuery );
