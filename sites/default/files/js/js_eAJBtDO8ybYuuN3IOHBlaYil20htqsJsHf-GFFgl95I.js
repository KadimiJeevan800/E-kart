console.log("Its Working fine....");


/**
 * Code Related to Header section of the website
 * 
 * Creating Drop down menu for the primary - menu bar
 * 
 */


//JS Hamberger code for menu links
function myFunction() {
    var x = document.getElementById("myTopnavm");
    if (x.className === "topnav") {
      x.className += " mobile responsive";
    } else {
      x.className = "topnav";
    }
  }

  var element=document.getElementById("toggle");
  var flag=0;
  // document.getElementById("2").classList.add("none");
  document.getElementById("mobilev").classList.add("none");
  document.getElementById("mobile-v").style.display="none";
  element.addEventListener('click',()=>
  {
    // alert("Clicked event");
    if(flag==0)
    {
  
      document.getElementById("arrow").classList.add("rotate");
      document.getElementById("mobilev").classList.add("active");
      document.getElementById("mobile-v").style.display="block";
      // document.getElementById("mobilev").classList.toggle("active");
      document.getElementById("mobilev").classList.remove("none");
      flag=1;

    }
    else
    {
     
      document.getElementById("arrow").classList.remove("rotate");
      document.getElementById("mobilev").classList.add("none");
      
      document.getElementById("mobilev").classList.remove("active");
      flag=0;
        // document.getElementById("mobile-v").style.display="none";
   
      
    }

  })


 var dl= document.getElementsByClassName("dropbtn");
 console.log(dl[0])

 
 // toggle effect for icon in mobile verison of menu 

 function myFunction(x) {
  x.classList.toggle("change");
}


//Dropdown for menu in mobile version 

var acc = document.getElementsByClassName("dropbtn");
var i;
var f=1;
var prev=null;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", 
  function() {
    // this.classList.toggle("acti");
    var panel = this.nextElementSibling;
       

    if(prev == null )
    {
      if (panel.style.display === "block") {
        panel.style.display = "none";
      } else {
        panel.style.display = "block";
      }
      if(f==1)
      {
        prev=panel;
        // f=0;
      }

    }
    else
    {
      prev.style.display="none";
      if (panel.style.display === "block") {
        panel.style.display = "none";
      } else {
        panel.style.display = "block";
      }
    }
    
    if(prev== panel  )
    {
      if(f==1)
      {
        f=0;
      }
      else{
        prev=null;
        panel.style.display = "none";
        console.log("null");
        f=0;
      }
     
    }
     else{
      prev=panel;
      console.log("prev");
    }

 
  });
}




//search form code

var searchform =document.getElementById("search");
searchform.style.display="none";
var searchbtn= document.getElementById("search-btn");

console.log(searchbtn);
searchbtn.addEventListener('click',()=>
{

    searchform.style.display="block";
})

var searchcross= document.getElementById("search-x");

searchcross.addEventListener('click',()=>
{
  searchform.style.display="none";
})



// Slide Show JS Code
let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
    dots[i].style.backgroundColor = "black" ;
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].style.backgroundColor = "#ffff"
  setTimeout(showSlides, 5000); // Change image every 2 seconds
}




;
