console.log("Hello From slide.js");

(function ($, Drupal) {

    'use strict';

    Drupal.behaviors.sliding = {
      attach: function (context, settings) {
        
        //Toggle Effect for mobile version menu
        $(context).find("#toggle").once("#toggle").each(function () {       
        $( ("#toggle")).click(()=>{
          $("#mobile-v").slideToggle("slow");
        });
        });

        //For Search Button,content Sliding effect
        $(context).find("#search-btn").once("#search-btn").each(function () {
   
          $("#search").hide();
          $( ("#search-btn")).click(function(){
            console.log("clicked search button");
            $("#search").slideToggle("slow");
          });
          //Search cross button functionality
          $("#search-x",context).click(()=>
          {
            $("#search").hide();
          });
  
          });

        // $( once("#toggle",context)).click(()=>
        // {
        //   $("#mobile-v",context).slideToggle("slow");
        // });

      }
    }     
  })(jQuery, Drupal);