var document, window;
var toggle = document.getElementById("nav-mobile-toggle");
var menu = document.getElementById("nav-mobile");
toggle.addEventListener('click', function(){
   menu.classList.toggle("show_nav"); 
});
window.addEventListener('resize', function(){
    menu.classList.remove("show_nav"); 
});
//document.body.addEventListener('click', function() {
//    alert('hi');
//    if(menu.classList.contains("show_nav")) {
//        menu.classList.remove("show_nav");
//    }
//});