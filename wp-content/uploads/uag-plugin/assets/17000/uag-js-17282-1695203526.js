document.addEventListener("DOMContentLoaded", function(){ window.addEventListener("DOMContentLoaded", function(){
	var swiper = new Swiper( ".uagb-block-ec8f1dbb .uagb-swiper",
		{"autoplay":{"delay":3000,"disableOnInteraction":false,"pauseOnMouseEnter":true,"stopOnLastSlide":false},"loop":true,"speed":800,"effect":"slide","direction":"horizontal","flipEffect":{"slideShadows":false},"fadeEffect":{"crossFade":true},"pagination":{"el":".uagb-block-ec8f1dbb .swiper-pagination","clickable":true,"hideOnClick":false},"navigation":{"nextEl":".uagb-block-ec8f1dbb .swiper-button-next","prevEl":".uagb-block-ec8f1dbb .swiper-button-prev"}}	);
});

window.addEventListener( 'load', function() {
	UAGBCounter.init( '.uagb-block-59405be6', {"layout":"number","heading":"Tickets Sold","numberPrefix":"","numberSuffix":"Million","startNumber":0,"endNumber":18,"totalNumber":100,"decimalPlaces":0,"animationDuration":1500,"thousandSeparator":",","circleSize":230,"circleStokeSize":8,"isFrontend":true} );
});
window.addEventListener( 'load', function() {
	UAGBCounter.init( '.uagb-block-b703a1e4', {"layout":"number","heading":"Digital Events","numberPrefix":"","numberSuffix":"K+","startNumber":0,"endNumber":20,"totalNumber":155,"decimalPlaces":0,"animationDuration":1500,"thousandSeparator":",","circleSize":230,"circleStokeSize":8,"isFrontend":true} );
});
window.addEventListener( 'load', function() {
	UAGBCounter.init( '.uagb-block-4e3cbceb', {"layout":"number","heading":"Events Partnered","numberPrefix":"","numberSuffix":"K+","startNumber":0,"endNumber":16,"totalNumber":100,"decimalPlaces":0,"animationDuration":1500,"thousandSeparator":",","circleSize":230,"circleStokeSize":8,"isFrontend":true} );
});
 });