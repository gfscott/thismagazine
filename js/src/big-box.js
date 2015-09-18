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