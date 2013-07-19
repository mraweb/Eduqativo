// link externo
$(document).ready(function(){
    $("a[rel=external]").attr('target','_blank');
});

// desabilitar skype
jQuery(document).ready(function(){
    jQuery('head').append('<meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE" />')
});

// Link box-pdr
$(document).ready(function(){
    $(".noticias, .participe, .pag-clipping li, .pag-noticias article, #transparencia li").click(function(){
        window.location=$(this).find("a").attr("href");return false;
    });
});

jQuery(document).ready(function() {
    jQuery('.padrao').jcarousel({
        scroll:5
    });
});

// facebook
(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/pt_BR/all.js#xfbml=1&appId=277634635592368";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));


/// nav
jQuery(document).ready(function() {
    var menus = jQuery('.nav-menu li');
    menus.on('mouseenter keyup mouseleave keydown',function(e) {
        clearTimeout($.data(this, 'timer'));
        if(e.type == 'mouseenter' || e.type == 'keyup'){
            if(jQuery(this).find('ul').hasClass('sub')){
                jQuery(this).find('a').eq(0).addClass('current-menu');
            }
        $.data(this, 'timer', setTimeout($.proxy(function() {
            jQuery('.sub', this).stop(true, true).fadeIn('slow');
        }, this), 100));
            
        } else if(e.type == 'mouseleave'){
            jQuery(this).find('a').eq(0).removeClass('current-menu');
            jQuery('.sub', this).stop(true, true).fadeOut();

        } else if(e.type == 'keydown'){
            var totalLi = jQuery(this).find('.sub');
            var qtLi = totalLi.length-1;
            jQuery(this).find('a').eq(0).removeClass('current-menu');
            jQuery(this).find('.sub').eq(qtLi).focusout(function(){
                jQuery('.sub').stop(true, true).fadeOut('slow');
            });
        }
    });
});

/// Accordion
$(document).ready(function() {
    $('#accordion > div').hide(); 
     
    $('#accordion > h2').click(function(e){
        e.preventDefault();
        $(this).next('div').slideToggle()
        .siblings('div:visible').slideUp();
    });
});