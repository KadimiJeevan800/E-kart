console.log("Menu.js file ready");
(function ($, Drupal) {

    'use strict';
  
    Drupal.behaviors.menu = {
      attach: function (context, settings) {
        
         //Slide search bar for mobile version 
         if (context !== document) {
          return;
      }

      var f=0;
      var af=1;
      var prev=null;

      var $myradar = $(context).find('.navbar').once('.dropdown');
      if ($myradar.length) {

    
        //Mobile menu bar opening and closing functionality
        $(".dropbtn").click(function(event){
          console.log("Clicked...");
          // var clickedBtnID = $(this).attr('id');
          $(".dropdown-content").hide();

          $(".dropbtn").addClass("arrow-0");
          $(this).next().show();
          $(this).removeClass("arrow-0");
          $(this).addClass("arrow-90");
          // if(af==0)
          // {
          //   af=1;
          //   $(this).addClass("arrow-0");
            
          //   $(this).removeClass("arrow-90");
          // }

          // else
          // {
          //   $(this).addClass("arrow-90");
          //   $(this).removeClass("arrow-0");
          //   af=0;
          // }
         
          if(prev== this  && f!=1)
          {
            $(prev).next().hide();
            $(prev).addClass("arrow-0");
            f=1;
          }
          else{
            f=0;
          }
          prev=this;
          
        });
      } 
     
      }
    }
  })(jQuery, Drupal);