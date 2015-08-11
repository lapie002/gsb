
var lapage = $(document);

lapage.ready(function(){
	$('.formConnect').fadeTo('fast',0);
	
        $('.divConnexion').toggle(100);
        
        $('.liste_articles').toggle(100);
	
	/*	Connexion	*/
    
    $('.btnConnect').click(function() {
    	/*$('.divConnexion').animate({
            "paddingTop":"15px",
            "height":"40px"
        });*/
        $('.divConnexion').toggle(200);
        $('.formConnect').fadeTo('fast',1);
    });
    
    /*      menu      */
    $('.divMenuA').mouseenter(function() {
    	$(this).css({
            "backgroundImage":"linear-gradient(#F2CFD6, #F62423)",
            /*"background": "#ff6600",*/
            "opacity":"0.9",
            "color":"#000000"
        });
    });
    
    $('.divMenuA').mouseleave(function() {
    	$(this).css({
            "background": "#F62423",
            "opacity":"1",
            "color":"#ffffff"
        }); 
    });
    
    $('.rubrique').click(function() {
	$(this).next().toggle(500);
    });
    
    
});