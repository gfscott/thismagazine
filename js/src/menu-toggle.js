

(function(){
  
  var toggle  = document.getElementById("Nav-toggle");
  var menu    = document.querySelector(".Wrap-nav-primary");
  
  if(toggle){
    
    toggle.addEventListener("click", function(e){
      
      e.preventDefault();
      menu.classList.toggle("is-hidden");   
      toggle.classList.toggle("js-toggled-open");
      
    });
    
  }
  
})();