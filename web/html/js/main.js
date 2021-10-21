// Header Fixed

$(document).scroll(function() {
	if( $(this).scrollTop() > 200 ) {
		$("header").addClass("header-small");
	} else if( $(this).scrollTop() < 200 ) {
		$("header").removeClass("header-small");
	}
});


// carossel  
$(document).ready(function() {
     var owl = $("#noticia-carousel");
     owl.owlCarousel({
       items: 4,
       itemsDesktop: [1000, 3],
       itemsDesktopSmall: [900, 2],
       itemsTablet: [600, 1],
       itemsMobile: true,
       pagination: false
     });
     $(".next").click(function() {
       owl.trigger('owl.next');
     })
     $(".prev").click(function() {
       owl.trigger('owl.prev');
     })
   });    

//   $(document).ready(function() {
//     var owl = $("#cliente-carousel");
//     owl.owlCarousel({
//       items: 1,
//       itemsDesktop: [1000, 1],
//       itemsDesktopSmall: [900, 1],
//       itemsTablet: [600, 1],
//       itemsMobile: true,
//       pagination: true
//     });
//     $(".next").click(function() {
//       owl.trigger('owl.next');
//     })
//     $(".prev").click(function() {
//       owl.trigger('owl.prev');
//     })
//   });

//video coleção

( function() {

    var youtube = document.querySelectorAll( ".youtube" );
    
    for (var i = 0; i < youtube.length; i++) {
        
        var source = "https://img.youtube.com/vi/"+ youtube[i].dataset.embed +"/hqdefault.jpg";
        
        var image = new Image();
                image.src = source;
                image.addEventListener( "load", function() {
                    youtube[ i ].appendChild( image );
                }( i ) );
        
                youtube[i].addEventListener( "click", function() {

                    var iframe = document.createElement( "iframe" );

                            iframe.setAttribute( "frameborder", "0" );
                            iframe.setAttribute( "allowfullscreen", "" );
                            iframe.setAttribute( "src", "https://www.youtube.com/embed/"+ this.dataset.embed +"?rel=0&showinfo=0&autoplay=1" );

                            this.innerHTML = "";
                            this.appendChild( iframe );
                } );    
    };
    
} )();
//menu hamburguer
$('.mobile-btn').click(function(){
  $(this).toggleClass('active')
  $('.menu-mobile').toggleClass('active')
});

// Parallax
if('ontouchstart' in window == false){
  $('body').mousemove(function(e){
    var moveX = (e.pageX * -1 / 25);
    var moveY = (e.pageY * -1 / 25);
    $('.paralax-lojista').css('background-position', moveX + 'px ' + moveY + 'px');
  });
}
if('ontouchstart' in window == false){
  $('body').mousemove(function(e){
    var moveX = (e.pageX * -1 / 25);
    var moveY = (e.pageY * -1 / 25);
    $('.paralax-lojista-form').css('background-position', moveX + 'px ' + moveY + 'px');
  });
}
if('ontouchstart' in window == false){
  $('body').mousemove(function(e){
    var moveX = (e.pageX * -1 / 25);
    var moveY = (e.pageY * -1 / 25);
    $('.paralax-representante').css('background-position', moveX + 'px ' + moveY + 'px');
  });
}
if('ontouchstart' in window == false){
  $('body').mousemove(function(e){
    var moveX = (e.pageX * -1 / 25);
    var moveY = (e.pageY * -1 / 25);
    $('.paralax-representante-form').css('background-position', moveX + 'px ' + moveY + 'px');
  });
}
if('ontouchstart' in window == false){
  $('body').mousemove(function(e){
    var moveX = (e.pageX * -1 / 25);
    var moveY = (e.pageY * -1 / 25);
    $('.paralax-job').css('background-position', moveX + 'px ' + moveY + 'px');
  });
}

// mapa - contato 
jQuery(document).ready(function($){
	//set your google maps parameters
	var $latitude = -8.2932345,
		$longitude = -35.9615825,
		$map_zoom = 14;
 
	//google map custom marker icon - .png fallback for IE11
	var is_internetExplorer11= navigator.userAgent.toLowerCase().indexOf('trident') > -1;
	var $marker_url = ( is_internetExplorer11 ) ? 'img/icon-location_sn.png' : 'img/icon-location_sn.svg';
		
	//define the basic color of your map, plus a value for saturation and brightness
	var	$main_color = '#2d313f',
		$saturation= -20,
		$brightness= 5;

	//we define here the style of the map
	var style= [ 
		{
			//set saturation for the labels on the map
			elementType: "labels",
			stylers: [
				{saturation: $saturation}
			]
		},  
	    {	//poi stands for point of interest - don't show these lables on the map 
			featureType: "poi",
			elementType: "labels",
			stylers: [
				{visibility: "off"}
			]
		},
		{
			//don't show highways lables on the map
	        featureType: 'road.highway',
	        elementType: 'labels',
	        stylers: [
	            {visibility: "off"}
	        ]
	    }, 
		{ 	
			//don't show local road lables on the map
			featureType: "road.local", 
			elementType: "labels.icon", 
			stylers: [
				{visibility: "off"} 
			] 
		},
		{ 
			//don't show arterial road lables on the map
			featureType: "road.arterial", 
			elementType: "labels.icon", 
			stylers: [
				{visibility: "off"}
			] 
		},
		{
			//don't show road lables on the map
			featureType: "road",
			elementType: "geometry.stroke",
			stylers: [
				{visibility: "off"}
			]
		}, 
		//style different elements on the map
		{ 
			featureType: "transit", 
			elementType: "geometry.fill", 
			stylers: [
				{ hue: $main_color },
				{ visibility: "on" }, 
				{ lightness: $brightness }, 
				{ saturation: $saturation }
			]
		}, 
		{
			featureType: "poi",
			elementType: "geometry.fill",
			stylers: [
				{ hue: $main_color },
				{ visibility: "on" }, 
				{ lightness: $brightness }, 
				{ saturation: $saturation }
			]
		},
		{
			featureType: "poi.government",
			elementType: "geometry.fill",
			stylers: [
				{ hue: $main_color },
				{ visibility: "on" }, 
				{ lightness: $brightness }, 
				{ saturation: $saturation }
			]
		},
		{
			featureType: "poi.sport_complex",
			elementType: "geometry.fill",
			stylers: [
				{ hue: $main_color },
				{ visibility: "on" }, 
				{ lightness: $brightness }, 
				{ saturation: $saturation }
			]
		},
		{
			featureType: "poi.attraction",
			elementType: "geometry.fill",
			stylers: [
				{ hue: $main_color },
				{ visibility: "on" }, 
				{ lightness: $brightness }, 
				{ saturation: $saturation }
			]
		},
		{
			featureType: "poi.business",
			elementType: "geometry.fill",
			stylers: [
				{ hue: $main_color },
				{ visibility: "on" }, 
				{ lightness: $brightness }, 
				{ saturation: $saturation }
			]
		},
		{
			featureType: "transit",
			elementType: "geometry.fill",
			stylers: [
				{ hue: $main_color },
				{ visibility: "on" }, 
				{ lightness: $brightness }, 
				{ saturation: $saturation }
			]
		},
		{
			featureType: "transit.station",
			elementType: "geometry.fill",
			stylers: [
				{ hue: $main_color },
				{ visibility: "on" }, 
				{ lightness: $brightness }, 
				{ saturation: $saturation }
			]
		},
		{
			featureType: "landscape",
			stylers: [
				{ hue: $main_color },
				{ visibility: "on" }, 
				{ lightness: $brightness }, 
				{ saturation: $saturation }
			]
			
		},
		{
			featureType: "road",
			elementType: "geometry.fill",
			stylers: [
				{ hue: $main_color },
				{ visibility: "on" }, 
				{ lightness: $brightness }, 
				{ saturation: $saturation }
			]
		},
		{
			featureType: "road.highway",
			elementType: "geometry.fill",
			stylers: [
				{ hue: $main_color },
				{ visibility: "on" }, 
				{ lightness: $brightness }, 
				{ saturation: $saturation }
			]
		}, 
		{
			featureType: "water",
			elementType: "geometry",
			stylers: [
				{ hue: $main_color },
				{ visibility: "on" }, 
				{ lightness: $brightness }, 
				{ saturation: $saturation }
			]
		}
	];
		
	//set google map options
	var map_options = {
      	center: new google.maps.LatLng($latitude, $longitude),
      	zoom: $map_zoom,
      	panControl: false,
      	zoomControl: false,
      	mapTypeControl: false,
      	streetViewControl: false,
      	mapTypeId: google.maps.MapTypeId.ROADMAP,
      	scrollwheel: false,
      	styles: style,
    }
    //inizialize the map
	var map = new google.maps.Map(document.getElementById('google-container'), map_options);
	//add a custom marker to the map				
	var marker = new google.maps.Marker({
	  	position: new google.maps.LatLng($latitude, $longitude),
	    map: map,
	    visible: true,
	 	icon: $marker_url,
	});

	//add custom buttons for the zoom-in/zoom-out on the map
	function CustomZoomControl(controlDiv, map) {
		//grap the zoom elements from the DOM and insert them in the map 
	  	var controlUIzoomIn= document.getElementById('cd-zoom-in'),
	  		controlUIzoomOut= document.getElementById('cd-zoom-out');
	  	controlDiv.appendChild(controlUIzoomIn);
	  	controlDiv.appendChild(controlUIzoomOut);

		// Setup the click event listeners and zoom-in or out according to the clicked element
		google.maps.event.addDomListener(controlUIzoomIn, 'click', function() {
		    map.setZoom(map.getZoom()+1)
		});
		google.maps.event.addDomListener(controlUIzoomOut, 'click', function() {
		    map.setZoom(map.getZoom()-1)
		});
	}

	var zoomControlDiv = document.createElement('div');
 	var zoomControl = new CustomZoomControl(zoomControlDiv, map);

  	//insert the zoom div on the top left of the map
  	map.controls[google.maps.ControlPosition.LEFT_TOP].push(zoomControlDiv);
});
 

// accordion

(function($) {
    $('.accordion > li:eq(0) a').addClass('active').next().slideDown();

    $('.accordion a').click(function(j) {
        var dropDown = $(this).closest('li').find('p');

        $(this).closest('.accordion').find('p').not(dropDown).slideUp();

        if ($(this).hasClass('active')) {
            $(this).removeClass('active');
        } else {
            $(this).closest('.accordion').find('a.active').removeClass('active');
            $(this).addClass('active');
        }

        dropDown.stop(false, true).slideToggle();

        j.preventDefault();
    });
})(jQuery);
