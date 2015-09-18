(function youtubeEmbed(){
  
"use strict";  
  
// get all the youtube embeds!
// NOTE there's a function in the site-specific plugin adding a .Youtube-embed class to all oembed iframes.

var allEmbeds = document.querySelectorAll(".Youtube-embed");

// if there are embeds, do stuff. otherwise forget it
if ( allEmbeds.length > 0 ) {
  
  // loop through all the videos
  for ( var i = 0; i < allEmbeds.length; i++ ) {
    
    // operate on this video
    var video   = allEmbeds[i];
    // get the parent. By default in Wordpress this is a paragraph element!
    var vParent  = video.parentNode;
    
    // create a wrapper div
    var wrap    = document.createElement("div");
    
    // insert it before the parent P tag
    vParent.parentNode.insertBefore(wrap, vParent);
    // ... then we can delete the parent node. it's done with
    vParent.remove();
    
    
    // move the video inside the wrapper
    wrap.appendChild(video);
    
    // This uses the intrinsic ratio method
    // http://alistapart.com/article/creating-intrinsic-ratios-for-video        
        
    video.removeAttribute("width");
    video.removeAttribute("height");
    
    video.style.width = "100%";
    video.style.height = "100%";
    video.style.top = "0";
    video.style.left = "0";
    video.style.position = "absolute";
    
    wrap.style.position = "relative";
    wrap.style.paddingTop = "56.25%";
    
  }
    
  
} else return;

})();