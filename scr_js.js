
jQuery(document).ready(function(){
var doc_height = jQuery(document).height();
var height_half = doc_height /4 ;
jQuery(window).scroll(function() {
  
  
   if(jQuery(this).scrollTop()>= height_half) {
       jQuery('.scr_container').show(700);
       jQuery('.scr_container').click(function(){
        jQuery(".scr_container").slideUp(900);
       });
   }
    else{
   jQuery('.scr_container').hide(1000); }


   
  

});



});
