(function layoutBigbox(){
  
  // look for paragraphs in an article.
  var articlePs   = document.querySelectorAll(".Wrap-text p");
  
  // if the article is long enough, we'll insert an ad
  if ( articlePs.length > 5 ) {
    
    // adID is the ID attr of the DoubleClick div
    // var adID        = "div-gpt-ad-1442538440237-1";
    
    // a wrapper for the bigbox
    var holder      = document.querySelector(".Wrap-bigbox");
    
    // the div that will actually become the ad
    var Bigbox      = document.querySelector(".Bigbox-placeholder");
    
    // select a point in the first third-ish of the article
    // in most cases this should not conflict with the donation appeal, which is around the two-thirds mark
    var thirdish    = Math.floor( articlePs.length * 0.333 );    
    // we'll insert the ad after the third(ish) paragraph.
    var insertion   = articlePs[thirdish];
    
    
    // reminder: insertBefore is the preferred way to do this; it places the element between paragraphs, instead of appending, which puts it inside the paragraph
    // https://developer.mozilla.org/en-US/docs/Web/API/Node/insertBefore
    insertion.parentNode.insertBefore(holder, insertion);
    
    // tell the world that it's done
    holder.classList.add("js-rendered");

    // deprecating the dynamic rendering, it's just too unpredictable
    // by default the big box is display:none until the .js-rendered class is added
    // add the ID after placement so Google can render the ad.
    // Bigbox.setAttribute("id", adID);
    
  } else return;
  
})();
// Via https://gist.github.com/jrivero/949141
// found on http://snipplr.com/view/36790/jscookies--my-simple-easy-pure-js-javascript-cookies-function/

// create my jsCookies function
var jsCookies = {

	// this gets a cookie and returns the cookies value, if no cookies it returns blank ""
	get: function(c_name) {
		if (document.cookie.length > 0) {
			var c_start = document.cookie.indexOf(c_name + "=");
			if (c_start != -1) {
				c_start = c_start + c_name.length + 1;
				var c_end = document.cookie.indexOf(";", c_start);
				if (c_end == -1) {
					c_end = document.cookie.length;
				}
				return unescape(document.cookie.substring(c_start, c_end));
			}
		}
		return "";
	},

	// this sets a cookie with your given ("cookie name", "cookie value", "good for x days")
	set: function(c_name, value, expiredays) {
		var exdate = new Date();
		exdate.setDate(exdate.getDate() + expiredays);
		document.cookie = c_name + "=" + escape(value) + ((expiredays == null) ? "" : "; expires=" + exdate.toUTCString());
	},

	// this checks to see if a cookie exists, then returns true or false
	check: function(c_name) {
		c_name = jsCookies.get(c_name);
		if (c_name != null && c_name != "") {
			return true;
		} else {
			return false;
		}
	}

};
// end my jsCookies function

// USAGE - get    ::   jsCookies.get("cookie_name_here");  [returns the value of the cookie]
// USAGE - set    ::   jsCookies.set("cookie_name", "cookie_value", 5 );  [give name, val and # of days til expiration]
// USAGE - check  ::   jsCookies.check("cookie_name_here");  [returns only true or false if the cookie exists or not]
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
/*!
* The donation widget is added to the page at the bottom. This script detatches it and shifts it so it's embedded in the article flow
*/
(function layoutDonation(){
  
  "use strict";
    
    var articleParagraphs = document.querySelectorAll(".Wrap-text p");
    var appeal            = document.querySelector(".Widget-donate");
    
    // only proceed if it’s an article page with paragraphs
    if ( appeal && articleParagraphs.length > 3 ) {
    
      var articleLength = articleParagraphs.length;
      var insertionPoint = Math.floor(articleLength * 0.75);
          insertionPoint = articleParagraphs[insertionPoint];
      
      appeal.classList.add("js-layout");
      // Deprecated this because it inserted INSIDE the paragraph.
      // insertionPoint.appendChild(appeal);
      // Preferred method: insertBefore
      // https://developer.mozilla.org/en-US/docs/Web/API/Node/insertBefore
      insertionPoint.parentNode.insertBefore(appeal, insertionPoint);
    
    } else return;
  
})();
// Script to move the homepage widget displaying the latest cover to be more visible

var cover = document.querySelector(".Wrap-home-cover");
// proceed only if the widget is seen on page.
if( cover ){
  
  var slot = document.querySelectorAll(".Home-feature")[3];
  
  slot.parentNode.insertBefore(cover, slot);
  
}


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
/**
* Script: Share Tools
* Related File: partials/share-tools.php
*
* This script controls the behaviour of the share tools on article pages.
* This uses the Responsible Share Button behaviour, as implemented by Jon Suh:
* https://jonsuh.com/blog/social-share-links/
**/

function windowPopup(url, width, height) {
  // Calculate the position of the popup so
  // it’s centered on the screen.
  var left = (screen.width / 2) - (width / 2),
      top = (screen.height / 2) - (height / 2);

  window.open(
    url,
    "",
    "menubar=no,toolbar=no,resizable=yes,scrollbars=yes,width=" + width + ",height=" + height + ",top=" + top + ",left=" + left
  );
}

var jsSocialShares = document.querySelectorAll(".Share-button--popup");
if (jsSocialShares) {
  [].forEach.call(jsSocialShares, function(anchor) {
    anchor.addEventListener("click", function(e) {
      e.preventDefault();
      windowPopup(this.href, 600, 400);
    });
  });
}

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
//# sourceMappingURL=script.js.map
