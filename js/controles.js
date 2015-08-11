var lapage = $(document);

lapage.ready(function(){
    
    $('#lemail').focusout(function() {
    	if(testMail("lemail")){
            $(this).css({
                "background": "#99ff99",
                "boxShadow":"2px 2px 4px #090"
            }); ;
        }else{
            
            $(this).css({
                "background": "#ff9999",
                "boxShadow":"2px 2px 4px #f00"
                
            }); ;
        }
        
    });
    
    $('#lepseudo').focusout(function() {
    	if(testChampsVide("lepseudo")){
            
            $(this).css({
                "background": "#99ff99",
                "boxShadow":"2px 2px 4px #090"
            }); ;
        }else{
            
            $(this).css({
                "background": "#ff9999",
                "boxShadow":"2px 2px 4px #f00"
            }); ;
        }
        
    });
   
});

function testMail(idmail){
	var expreg=/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]{2,}[.][a-zA-Z]{2,4}$/;
	
	var lechamp = $("#"+idmail).val();
        //alert(lechamp);
	
	if(expreg.test(lechamp)){
		//alert("Mail correct");
                return true;
	}else{
		//alert("Mail incorrect");
                return false;
	}
        
}

function testChampsVide(champ){
	var lechamp = $("#"+champ).val();
        //alert(lechamp);
	
	if(lechamp!==""){
		//alert("Mail correct");
                return true;
	}else{
		//alert("Mail incorrect");
                return false;
	}
        
}

