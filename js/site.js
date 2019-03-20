// @author Maik Basso <maik@maikbasso.com.br>

//on page load
window.onload = function(){
    
    // on click button menu
    $("#main-menu-button").click(function(){
        
        if($("#main-menu")){
            
            if($('#bar1').hasClass('bar-h')){
                $('.menu-mobile .bar-h').addClass('bar-v').removeClass('bar-h');
                //console.log("bar-h");
            }
            else{
                $('.menu-mobile .bar-v').addClass('bar-h').removeClass('bar-v');
                //console.log("bar-v");
            }
            
            $("#main-menu").toggle();
        }
        
    });
    
    // resize Page Header if it is not a index page
    if(!document.URL.includes("index")){
        $('.page-header').addClass('page-header-other').removeClass('page-header');
    }
};