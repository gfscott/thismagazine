(function(){
  
  var showComments = document.querySelector(".Comments-reveal");
  
  if( showComments ){
    
    showComments.addEventListener("click", function(e) {
      // prevent usual anchor behaviour
      e.preventDefault();
      
      // Show Comments section
      document.querySelector(".Comments.is-hidden").classList.remove("is-hidden");
      
      // hide the button itself
      this.style.display = "none";
      
      // load Disqus
      addDisqus();      
      
    });
    
  }
  
  
})();


/* * * CONFIGURATION VARIABLES * * */
var disqus_shortname = 'thismagazine';

/* * * DON'T EDIT BELOW THIS LINE * * */
function addDisqus() {
    var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
    dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
    (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
};