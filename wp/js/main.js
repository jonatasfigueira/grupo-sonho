// Header Fixed
jQuery(function($){
	$(document).scroll(function() {
		if( $(this).scrollTop() > 200 ) {
			$("header").addClass("header-small");
		} else if( $(this).scrollTop() < 200 ) {
			$("header").removeClass("header-small");
		}
	});
});  

//video coleção
(function() {
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

jQuery(function($){
	$('.mobile-btn').click(function(){
			$(this).toggleClass('active')
			$('.menu-mobile').toggleClass('active')
	});
})

// Parallax

if('ontouchstart' in window == false){
  jQuery(function($){
    $('body').mousemove(function(e){
    var moveX = (e.pageX * -1 / 25);
    var moveY = (e.pageY * -1 / 25);
    $('.paralax-lojista').css('background-position', moveX + 'px ' + moveY + 'px');
  });
  })  
}

if('ontouchstart' in window == false){
    jQuery(function($){
  $('body').mousemove(function(e){
    var moveX = (e.pageX * -1 / 25);
    var moveY = (e.pageY * -1 / 25);
    $('.paralax-lojista-form').css('background-position', moveX + 'px ' + moveY + 'px');
  });
    })
}

if('ontouchstart' in window == false){
    jQuery(function($){
  $('body').mousemove(function(e){
    var moveX = (e.pageX * -1 / 25);
    var moveY = (e.pageY * -1 / 25);
    $('.paralax-representante').css('background-position', moveX + 'px ' + moveY + 'px');
  });
    })
}

if('ontouchstart' in window == false){
    jQuery(function($){
  $('body').mousemove(function(e){
    var moveX = (e.pageX * -1 / 25);
    var moveY = (e.pageY * -1 / 25);
    $('.paralax-representante-form').css('background-position', moveX + 'px ' + moveY + 'px');
  });
    })
}

if('ontouchstart' in window == false){
    jQuery(function($){
  $('body').mousemove(function(e){
    var moveX = (e.pageX * -1 / 25);
    var moveY = (e.pageY * -1 / 25);
    $('.paralax-job').css('background-position', moveX + 'px ' + moveY + 'px');
  });
    })
}

//Mascaras de validação
//    jQuery.noConflict();
    (function($){
       $(".data").mask("99/99/9999");
       $(".telefone").mask("(099) 99999-9999");
       $(".cpf").mask("999.999.999-99",{placeholder:"___.___.___-__"});
       $(".inscestadual").mask("999.999.999");
       $(".cep").mask("99999-999"); 
       $(".cnpj").mask("99.999.999/9999-99");
//       $("#placa").mask("aaa - 9999");  
    })(jQuery);

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