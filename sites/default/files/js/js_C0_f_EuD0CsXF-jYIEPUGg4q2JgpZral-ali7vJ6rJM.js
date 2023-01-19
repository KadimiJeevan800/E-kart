console.log("Its Working fine....");



document.getElementById("show").classList.add("display-none");


const divs = document.querySelectorAll('.menu-item-has-children');
const show= document.getElementById("show");

divs.forEach(el => el.addEventListener('mousemove', event => {

display_menubar()

}));

show.addEventListener('mousemove', display_menubar() );

show.addEventListener('mouseout', hide_menubar());

divs.forEach(el => el.addEventListener('mouseleave', event => {
    hide_menubar()
    }));



function myFunction() {
    var x = document.getElementById("show");
    if (x.className === "topnav") {
      x.className += " mobile responsive";
    } else {
      x.className = "topnav";
    }
  }



function display_menubar()
{
    document.getElementById('show').classList.add("active");
    document.getElementById('show').classList.remove("display-none");
}

function hide_menubar()
{   
    document.getElementById('show').classList.remove("active");
    document.getElementById('show').classList.add("display-none");
}
;
