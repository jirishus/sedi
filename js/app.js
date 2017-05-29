/* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
function myFunction() {
 var topNav = document.getElementById("myTopnav");
 if (topNav.className === "topnav") {
     topNav.className += " responsive";
 } else {
     topNav.className = "topnav";
 }
}