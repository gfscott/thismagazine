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