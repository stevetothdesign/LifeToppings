/* jQuery Example: Display Hidden Div Based on Scrollbar Position and Page Load */
/* Created by: techNerdia.com */
	
$(document).ready(function(){

 
 $("img").each(function(){
     var $this = $(this);
     if ($this.width() > $this.height()) {
         $this.addClass("landscape");
     }
		 else {
		 	 $this.addClass("portrait");
		 }
 });
});

