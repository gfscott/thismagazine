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
