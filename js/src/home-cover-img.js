// Script to move the homepage widget displaying the latest cover to be more visible

var cover = document.querySelector(".Wrap-home-cover");
// proceed only if the widget is seen on page.
if( cover ){
  
  var slot = document.querySelectorAll(".Home-feature")[3];
  
  slot.parentNode.insertBefore(cover, slot);
  
}