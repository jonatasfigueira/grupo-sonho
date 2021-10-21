// slide home
 
jQuery(document).ready(function($){
        $('#slider').flexslider({
        slideshow: true,
        animation: "fade",
        controlNav: false,
        // directionNav: false,
        // animationLoop: true,
        // slideshowSpeed: 100,
        slideshowSpeed: 15000,            
        animationSpeed: 1000,  
        animationLoop: true,           
        touch: true,
        video: true,
        /* reload video on navigation */
        // before: function(){ $('video').each( function() { $(this).get(0).load(); }); } //remover comentário se optar por colocar vídeo no slide.
        });
    })(jQuery);   
        function pauseslider() { $('#slider').flexslider("pause"); }
        function playslider() { $('#slider').flexslider("play"); }
        function resumeslider() { $('#slider').flexslider("next"); $('#slider').flexslider("play"); }

//file button
(function($) {
    $('#input01').jfilestyle()

    $('#input02').jfilestyle({
        text : 'Arquivo',
        placeholder: 'Adicione seu Currículo',
        dragdrop: false
    });

    $('#input03').jfilestyle({
        input : false
    });
    $('#input04').jfilestyle({
        onChange : function (e) {
            alert(e)
        }
    });

    $('#input06').jfilestyle({
        inputSize : '100px'
    });
    
    $('#input07').jfilestyle({
        placeholder: 'My text placeholder'
    });
    $('#input08').jfilestyle();

    $('#clear').click(function() {
        $('#input08').jfilestyle('clear');
    });

    $('#input09').jfilestyle();

    $('#toggleInput').click(function() {
        var fs = $('#input09');
        if (fs.jfilestyle('input'))
            fs.jfilestyle('input', false);
        else
            fs.jfilestyle('input', true);
    });

    $('#input10').jfilestyle();

    $('#theme').click(function() {
        var fs = $('#input10');
        if (fs.jfilestyle('theme') == 'default') {
            $(this).html('Default theme');
            fs.jfilestyle('theme', 'blue');
        } else {
            $(this).html('Blue theme');
            fs.jfilestyle('theme', 'default');
        }
    });
    

    $('#input12').jfilestyle({
        theme : 'red'
    });

    $('#input13').jfilestyle();
    $('#input14').jfilestyle({disabled: true});
    $('#input15').jfilestyle({buttonBefore: true});

    $('#destroy').click(function() {
        if ($('#input12').data('jfilestyle')) {
            $('#input12').jfilestyle('destroy');
            $(this).html('Construct');
        } else {
            $('#input12').jfilestyle();
            $(this).html('Destroy');
        }
    });

    $('.test').jfilestyle();
    
})(jQuery);   

//slide coleções
jQuery(document).ready(function($){
    if( $('#bg_slideshow').length > 0 ) {
        var slider = $('#bg_slideshow').flexslider({
            controlNav: true,
            directionNav: false,
            manualControls:  jQuery('#bg_slides_controls').length > 0 ? '#bg_slides_controls .slider_pages' : false,
            animationSpeed: 1200,
            start: function(slider) {
                
            }
        });
        jQuery('.bg_slides_nav').click(function(){
            if( jQuery(this).attr('id') == 'bg_slides_next' ) {
                slider.flexslider('next');
            } else {
                slider.flexslider('prev');
            }
        });
    }
});
 
 //cidades e estados | lojista//
(function($) {
    $.getJSON('https://sonhodenene.com.br/wp-content/themes/sonhodenene/estados_cidades.json', function (data) {
        var items = [];
        var options = '<option value="">Estado</option>';	
        $.each(data, function (key, val) {
            options += '<option value="' + val.nome + '">' + val.nome + '</option>';
        });					
        $("#estados").html(options);				
        $("#estados").change(function () {				
            var options_cidades = '';
            var str = "";					
            $("#estados option:selected").each(function () {
                str += $(this).text();
            });
            $.each(data, function (key, val) {
                if(val.nome == str) {							
                    $.each(val.cidades, function (key_city, val_city) {
                        options_cidades += '<option value="' + val_city + '">' + val_city + '</option>';
                    });							
                }
            });
            $("#cidades").html(options_cidades);
        }).change();		
    });
})(jQuery);        

//cidades e estados | contato //

(function($) {
    $.getJSON('https://sonhodenene.com.br/wp-content/themes/sonhodenene/estados_cidades.json', function (data) {
        var items = [];
        var options = '<option value="">Estado</option>';	
        $.each(data, function (key, val) {
            options += '<option value="' + val.nome + '">' + val.nome + '</option>';
        });					
        $("#estados-contato").html(options);				
        $("#estados-contato").change(function () {				
            var options_cidades = '';
            var str = "";					
            $("#estados-contato option:selected").each(function () {
                str += $(this).text();
            });
            $.each(data, function (key, val) {
                if(val.nome == str) {							
                    $.each(val.cidades, function (key_city, val_city) {
                        options_cidades += '<option value="' + val_city + '">' + val_city + '</option>';
                    });							
                }
            });
            $("#cidades-contato").html(options_cidades);
        }).change();		
    });
})(jQuery);

//cidades e estados | representante //
(function($) {
    $.getJSON('https://sonhodenene.com.br/wp-content/themes/sonhodenene/estados_cidades-representante.json', function (data) {
        var items = [];
        var options = '<option value="">Estado</option>';	
        $.each(data, function (key, val) {
            options += '<option value="' + val.nome + '">' + val.nome + '</option>';
        });					
        $("#estados-representante").html(options);				
        $("#estados-representante").change(function () {				
            var options_cidades = '';
            var str = "";					
            $("#estados-representante option:selected").each(function () {
                str += $(this).text();
            });
            $.each(data, function (key, val) {
                if(val.nome == str) {							
                    $.each(val.cidades, function (key_city, val_city) {
                        options_cidades += '<option value="' + val_city + '">' + val_city + '</option>';
                    });							
                }
            });
            $("#cidades-representante").html(options_cidades);
        }).change();		
    });
})(jQuery);

//cidades e estados | emprego //
(function($) {
    $.getJSON('https://sonhodenene.com.br/wp-content/themes/sonhodenene/estados_cidades-emprego.json', function (data) {
        var items = [];
        var options = '<option value="">Estado</option>';	
        $.each(data, function (key, val) {
            options += '<option value="' + val.nome + '">' + val.nome + '</option>';
        });					
        $("#estados-emprego").html(options);				
        $("#estados-emprego").change(function () {				
            var options_cidades = '';
            var str = "";					
            $("#estados-emprego option:selected").each(function () {
                str += $(this).text();
            });
            $.each(data, function (key, val) {
                if(val.nome == str) {							
                    $.each(val.cidades, function (key_city, val_city) {
                        options_cidades += '<option value="' + val_city + '">' + val_city + '</option>';
                    });							
                }
            });
            $("#cidades-emprego").html(options_cidades);
        }).change();		
    });
})(jQuery);

jQuery(document).ready(function($){  
    $('input').change(function(){
      var label = $(this).parent().find('span'); 
      if(typeof(this.files) !='undefined'){ // fucking IE      
        if(this.files.length == 0){
          label.removeClass('withFile').text(label.data('default'));
        }
        else{
          var file = this.files[0]; 
          var name = file.name;
          var size = (file.size / 1048576).toFixed(3); //size in mb 
          label.addClass('withFile').text(name + ' (' + size + 'mb)');
        }
      }
      else{
        var name = this.value.split("\\");
            label.addClass('withFile').text(name[name.length-1]);
      }
      return false;
    });  
});