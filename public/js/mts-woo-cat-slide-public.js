(function( $ ) {
	'use strict';

	/**
	 * All of the code for your public-facing JavaScript source
	 * should reside in this file.
	 *
	 * Note: It has been assumed you will write jQuery code here, so the
	 * $ function reference has been prepared for usage within the scope
	 * of this function.
	 *
	 * This enables you to define handlers, for when the DOM is ready:
	 *
	 * $(function() {
	 *
	 * });
	 *
	 * When the window is loaded:
	 *
	 * $( window ).load(function() {
	 *
	 * });
	 *
	 * ...and/or other possibilities.
	 *
	 * Ideally, it is not considered best practise to attach more than a
	 * single DOM-ready or window-load handler for a particular page.
	 * Although scripts in the WordPress core, Plugins and Themes may be
	 * practising this, we should strive to set a better example in our own work.
	 */

	 	document.addEventListener('DOMContentLoaded', () => {
  
		  //------ Slider Begin
			const CaroS = document.querySelector('.Carousel-slider');
			const CaroSlider = new MicroSlider(CaroS, { indicators: false, indicatorText: '' });
			const hammer = new Hammer(CaroS);
			const CaroSTimer = 2000;
			let CaroAutoplay = setInterval(() => CaroSlider.next(), CaroSTimer);
		    
		  //------- Mouseenter Event
			CaroS.onmouseenter = function(e) {
				clearInterval(CaroAutoplay); 
				console.log(e.type + ' mouse detected');
			}
		  
		  //----- Mouseleave Event
			CaroS.onmouseleave = function(e) {
				clearInterval(CaroAutoplay); 
				CaroAutoplay = setInterval(() => CaroSlider.next(), CaroSTimer);
				console.log(e.type + ' mouse detected');
			}
		  
		  //----- Mouseclick Event
			CaroS.onclick = function(e) {
				clearInterval(CaroAutoplay); 
				console.log(e.type + ' mouse detected');
			}
		  
		  //------ Gesture Tap Event
			hammer.on('tap', function(e) {
				clearInterval(CaroAutoplay);
				console.log(e.type + ' gesture detected');
			});
		  
		  //----- Gesture Swipe Event
			hammer.on('swipe', function(e) {
				clearInterval(CaroAutoplay); 
				CaroAutoplay = setInterval(() => CaroSlider.next(), CaroSTimer);
				console.log(e.type + ' gesture detected');
			});

		  let slideLink = document.querySelectorAll('.slider-item');
		  if (slideLink && slideLink !== null && slideLink.length > 0){
		    slideLink.forEach( el => el.addEventListener('click', e => {
		      e.preventDefault();
		      let href = el.dataset.href;
		      let target = el.dataset.target;
		      // if (href !== '#') window.open(href, target);
		      if (href !== '#') window.location.href = href;
		    }));
		  }
		  
		  //---- Slider End
		  
		});


})( jQuery );
