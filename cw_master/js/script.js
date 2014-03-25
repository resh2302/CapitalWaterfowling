jQuery.fn.timelinr = function(options){
	// default plugin settings
	settings = jQuery.extend({
		
		datesSpeed: 				'slow',			// value: integer between 100 and 1000 (recommended) or 'slow', 'normal' or 'fast'; default to normal
				
	}, options);