$(function(){
    
    let wasAnimated = false ; 
    
    $(".navbar a:not('.dropdownSelect'), footer a , .button-link , .portfolio").on("click" , function(event){
        
        event.preventDefault() ; 
        const hash = this.hash ; 
        
        $('body,html').animate({scrollTop: $(hash).offset().top} , 900 , function(){window.location.hash = hash;}) ;
        
    }) ;
    
    $('.profile-button').click ( function(){
        
        if (!wasAnimated) 
            {
                $('#information').fadeIn(200) ; 
                wasAnimated = true ; 
            }
        else
            {
                $('#information').fadeOut(200) ; 
                wasAnimated = false ; 
            }
    
        
    }) ;
    
    $('#contact-form').submit(function(e){
        
        e.preventDefault() ; 
        
        $('.comment').empty() ; 
        
        const postData = $('#contact-form').serialize() ; 
        
        $.ajax ({
            type: "POST" ,
            url: "php/contact.php" ,
            dataType: "json" ,
            data: postData , 
            success: function(result) {
                
                if (result.isSuccess)
                    { 
                        document.getElementById('#contact-form').removeChild(document.getElementById('#thank-you')) ; 
                        $("#contact-form").append("<p class='thank-you'>Merci de m'avoir contacter</p>") ;
                        $('#contact-form')[0].reset() ; 
                    }
                
                else
                {
                    $("#firstname + .comment").html(result.firstnameERROR) ;
                    $("#name + .comment").html(result.nameERROR) ;
                    $("#email + .comment").html(result.emailERROR) ;
                    $("#phone + .comment").html(result.phoneERROR) ;
                    $("#message + .comment").html(result.firstnameERROR) ;
                }
            }
        }) ;
        
        
    }) ;
    
 
}) ;