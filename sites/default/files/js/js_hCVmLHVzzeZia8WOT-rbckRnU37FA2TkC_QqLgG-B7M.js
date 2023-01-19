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
  document.getElementById("2").classList.add("none");
  element.addEventListener('click',()=>
  {
    // alert("Clicked event");
    if(flag==0)
    {
      document.getElementById("2").classList.add("active");
      document.getElementById("1").classList.add("none");
      document.getElementById("2").classList.remove("none");
      document.getElementById("1").classList.remove("active");
      flag=1;

    }
    else
    {
      document.getElementById("1").classList.add("active");
      document.getElementById("2").classList.add("none");
      document.getElementById("2").classList.remove("active");
      document.getElementById("1").classList.remove("none");
      flag=0;
    }

  });
