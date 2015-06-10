jQuery(document).ready(function() {
	
	if ($(window).width() > 768) {
		$('#parallax .parallax-layer').parallax({
			mouseport : $('#parallax')
		});
		
		jQuery('.parallax-layer')
		.parallax({}, {xparallax: '0.05'}, {xparallax: '0.2'}, {xparallax: '0.3'}, {xparallax: '0.4'}, {xparallax: '0.6'}, {xparallax: '0.8'});
		
	}
		
		
	});