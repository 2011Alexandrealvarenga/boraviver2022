jQuery(document).ready(function(){
//     alert('olaaa');

    // acessibilidade
    // footer
    jQuery(".item-link-rodape").click(function() {
        console.log('footer')
        jQuery('html, body').animate({
            scrollTop: $(".footer").offset().top
        }, 1500);
    });
    // menu
    jQuery(".item-link-menu").click(function() {
        console.log('menu')
        jQuery('html, body').animate({
            scrollTop: $(".header-navbar").offset().top
        }, 1500);
    });
    // conteudo
    jQuery(".item-link-conteudo").click(function() {
        console.log('conteudo')
        jQuery('html, body').animate({
            scrollTop: $(".ir-para-conteudo").offset().top
        }, 1500);
    });

    // alterar fonte
    var $affectedElements = $("li, a, p, h1, h2, h3, h4, h5, h6, span, input, label, button"); 

    $affectedElements.each( function(){
    var $this = $(this);
    $this.data("orig-size", $this.css("font-size") );
    });

    $("#btn-increase").click(function(){changeFontSize(1);})
    $("#btn-decrease").click(function(){changeFontSize(-1);})

    function changeFontSize(direction){
        $affectedElements.each( function(){
            var $this = $(this);
            $this.css( "font-size" , parseInt($this.css("font-size"))+direction );
        });
    }
    $('#contraste').click(function(){ $('a, li, p, h1, h2, h3, h4, h5, h6, span, body, svg, nav, .card, .duvidas, .indicator, button .principal-cards ').toggleClass('fundo svg-bg ::placeholder');})
    
   

})