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
  };
