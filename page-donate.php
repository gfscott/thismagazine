<?php get_header(); ?>

<div class="Wrap-content Wrap-page Wrap-donate">

  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    
    <h1 class="Page-hed"><?php the_title(); ?></h1>
          
    <div class="Page-text">
      <?php the_content(); ?>
    </div>
        
  <?php endwhile; else : ?>
  	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
  <?php endif; ?>
  
  <hr>
  
  <div class="Donate-wrap">

    <h2>Would you like to make a one-time gift, or an ongoing monthly donation?</h2>
    
    <div id="step-1" class="Donate-step">
      
      <label for="is-once">
        <input id="is-once" name="is_once" value="true" data-key="giftType" data-value="once" type="radio" class="Pick Pick-how">
        <span>A One-Time Gift!</span>
      </label>
    
      <label for="is-monthly">
        <input id="is-monthly" name="is_once" value="false" data-key="giftType" data-value="monthly" type="radio" class="Pick Pick-how">
        <span>A Monthly Donation!</span>
      </label>
    
    </div>
    
    <!-- ONE-TIME-GIFT -->
    <div id="once" class="Donate-opts">
      
      <h2>Fantastic! We really appreciate it. How much are you able to give?</h2>
      
      <form  action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank">
        
        <div class="Donate-inputs">
        
          <label for="Onetime-25">
            <input id="Onetime-25" name="Onetime-amount" value="25.00" type="radio" class="Onetime-opt Onetime-opt-set Onetime-25">
            <span>$25</span>
          </label>
          
          <label for="Onetime-50">
            <input id="Onetime-50" name="Onetime-amount" value="50.00" type="radio" class="Onetime-opt Onetime-opt-set Onetime-50">
            <span>$50</span>
          </label>
          
          <label for="Onetime-100">
            <input id="Onetime-100" name="Onetime-amount" value="100.00" type="radio" class="Onetime-opt Onetime-opt-set Onetime-100">
            <span>$100</span>
          </label>
          
          <label for="Onetime-250">
            <input id="Onetime-250" name="Onetime-amount" value="250.00" type="radio" class="Onetime-opt Onetime-opt-set Onetime-250">
            <span>$250</span>
          </label>
          
          <label id="Onetime-other-label" for="Onetime-other">
            <input id="Onetime-other" name="Onetime-amount" value="" type="radio" class="Onetime-opt Onetime-other">
            <span>Other Amount</span>
          </label>
        
        </div>
        
        <!-- Input for the user to write in their own. Hidden unless other is selected -->
        <label for"Onetime-other-amount" class="Wrap-onetime-other is-hidden">
          <span>Thanks! How much would you like to donate? <strong>$</strong></span>
          <input id="Onetime-other-amount" name="Onetime-amount" value="" type="text" class="Monthly-opt Monthly-other-amount"><span></span>
        </label>
        
        <!-- PayPal Required Fields -->
        <!-- Documentation: https://developer.paypal.com/docs/classic/paypal-payments-standard/integration-guide/Appx_websitestandard_htmlvariables/  -->
        <input type="hidden" name="address_override" value="0"> <!-- Yes, we want to override with the subscription form inputs -->
        <input type="hidden" name="cmd" value="_xclick"> <!-- mandatory, otherwise paypal won't accept the form -->
        <input type="hidden" name="return" value="http://this.org/donate/thanks/"> <!-- Back to the thanks page when finished -->
        <input type="hidden" name="cancel_return" value="http://this.org/donate/"> <!-- If they don't complete, come back and offer to start again -->
        <input type="hidden" name="rm" value="1"> <!-- On return to the thanks page, include no payment details -->
        <input type="hidden" name="business" value="8JPDFKTHGSLR2"> <!-- PayPal merchant ID -->
        <input type="hidden" name="lc" value="CA"> <!-- country language setting for checkout page -->
        <input type="hidden" name="currency_code" value="CAD"> <!-- currency setting. CAD only -->
        <input type="hidden" name="no_shipping" value="1"> <!-- shipping address is required -->
        <input type="hidden" name="no_note" value="1"> <!-- no gift note -->
        <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1"> <!-- tracking for paypal -->
        
        <input type="hidden" name="item_name" value="Donation to Red Maple Foundation">
        <input type="hidden" id="Paypal-onetime-amount" name="amount" value="">
        
        <input id="Onetime-checkout" type="submit" value="Donate Now" class="Onetime-submit is-hidden" disabled>
        
        </form>
      
      </div>
    
    
      <!-- MONTHLY DONATION -->
      <div id="monthly" class="Donate-opts">
        
        <h2>Amazing! Monthly giving is a <em>huge</em> help. How much would you like to give?</h2>
        
        <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank">
          
          <div class="Donate-inputs">
          
            <label for="Monthly-5">
              <input id="Monthly-5" name="Monthly-amount" value="5.00" type="radio" class="Monthly-opt Monthly-opt-set Monthly-5">
              <span>$5</span>
            </label>
            
            <label for="Monthly-10">
              <input id="Monthly-10" name="Monthly-amount" value="10.00" type="radio" class="Monthly-opt Monthly-opt-set Monthly-10">
              <span>$10</span>
            </label>
            
            <label for="Monthly-15">
              <input id="Monthly-15" name="Monthly-amount" value="15.00" type="radio" class="Monthly-opt Monthly-opt-set Monthly-15">
              <span>$15</span>
            </label>
            
            <label for="Monthly-20">
              <input id="Monthly-20" name="Monthly-amount" value="20.00" type="radio" class="Monthly-opt Monthly-opt-set Monthly-20">
              <span>$20</span>
            </label>
            
            <label for="Monthly-other">
              <input id="Monthly-other" name="Monthly-amount" value="" type="radio" class="Monthly-opt Monthly-other">
              <span>Other</span>
            </label>
          
          </div>
          
          <label for"Monthly-other-amount" class="Wrap-monthly-other is-hidden">
            <span>Thanks! How much would you like to donate? <strong>$</strong></span>
            <input id="Monthly-other-amount" name="amount" value="" type="text" class="Monhtly-opt Monthly-other-amount"><span></span>
          </label>        
          
          <!-- PayPal Required Fields -->
          <!-- Documentation: https://developer.paypal.com/docs/classic/paypal-payments-standard/integration-guide/Appx_websitestandard_htmlvariables/  -->
          <input type="hidden" name="address_override" value="0"> <!-- Yes, we want to override with the subscription form inputs -->
          <input type="hidden" name="cmd" value="_xclick-subscriptions"> <!-- mandatory, otherwise paypal won't accept the form -->
          <input type="hidden" name="return" value="http://this.org/donate/thanks/"> <!-- Back to the thanks page when finished -->
          <input type="hidden" name="cancel_return" value="http://this.org/donate/"> <!-- If they don't complete, come back and offer to start again -->
          <input type="hidden" name="rm" value="1"> <!-- On return to the thanks page, include no payment details -->
          <input type="hidden" name="business" value="8JPDFKTHGSLR2"> <!-- PayPal merchant ID -->
          <input type="hidden" name="lc" value="CA"> <!-- country language setting for checkout page -->
          <input type="hidden" name="currency_code" value="CAD"> <!-- currency setting. CAD only -->
          <input type="hidden" name="no_shipping" value="1"> <!-- shipping address is required -->
          <input type="hidden" name="no_note" value="1"> <!-- no gift note -->
          <input type="hidden" name="src" value="1"> <!-- indicates this is a recurring payment -->
          <input type="hidden" name="p3" value="1"> <!-- indicates the payment recurs once per period -->
          <input type="hidden" name="t3" value="M"> <!-- indicates the period is months. Therefore, once per month -->
          
          
          <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1"> <!-- tracking for paypal -->
  
          <input type="hidden" name="item_name" value="Donation to Red Maple Foundation">
          <input type="hidden" id="Paypal-monthly-amount" name="a3" value=""> <!-- for usual checkout this is "amount" but for recurring payments it's a3 -->
          
          <input id="Monthly-checkout" type="submit" value="Donate Now" class="Monthly-submit is-hidden" disabled>
          
        </form>
        
      </div>    
        
    </div>

  <hr>
  
  <p><em>This Magazine</em> is published six times a year. Please allow 6-8 weeks for delivery of your first issue. Plus GST/HST where applicable.</p>
  
  <hr>
  
  <h2>Other ways to donate</h2>
		
		<p>Nervous about donating online? You don’t need to be, but we completely understand if you are. You can also support us by:</p>
		
		<table class="Sub-methods">
      <tr class="Sub-method--row">
        <td class="Sub-method--name">Email</td>
        <td class="Sub-method--details">Send your donation order to publisher@thismagazine.ca</td>
      </tr>
      <tr class="Sub-method--row">
        <td class="Sub-method--name">Mail</td>
        <td class="Sub-method--details">Send a cheque or money order (payable to “This Magazine”) to:
<pre>
This Magazine
#417-401 Richmond Street West
Toronto, ON M5V 3A8
</pre>
        </td>
      </tr>
      <tr class="Sub-method--row">
        <td class="Sub-method--name">Phone</td>
        <td class="Sub-method--details">Call us at 1-877-999-8447 or 416-979-9429</td>
      </tr>
    </table>
    
    <p>This Magazine is published by the Red Maple Foundation. Charitable Registration No. 11911 3140 RR0001</p>
  
  

</div>

<script src="https://cdn.polyfill.io/v2/polyfill.js?features=Array.prototype.indexOf,document.querySelector,Element.prototype.classList,Event"></script>
<script>
  
  "use strict";
  
  //----------------------------------------------------------------------------
  // Object to hold donor information
  // We assume a default option and change as selections are made
  var donor = {
    giftType: "once",
    
  };
  
  (function (){
    
    // first, hide the two arrays of gift amounts so we can get the gift-type first
    var once = document.getElementById("once");
    var monthly = document.getElementById("monthly");
    
    function hideOptions() {    
      // add the is-hidden class to both!
      once.classList.add("is-hidden");
      monthly.classList.add("is-hidden");
    };
    
    hideOptions();
        
    var PickHow = document.querySelectorAll(".Pick-how");
    
    for ( var i = 0; i < PickHow.length; i++ ) {
      
      var pick = PickHow[i];
      pick.addEventListener("click", function(){
        
        var thePick = this;
        
        donor.giftType = thePick.getAttribute("data-value");
        
        // reset both to hidden, then show the one selected. 
        hideOptions();
        document.getElementById(donor.giftType).classList.remove("is-hidden");
        
        // call the refresher function to make sure all inputs are updated with any new info
        refresher();        
        
      })
      
    }
  
    //--------------------------------------------------------------------------
    // Function to update all inputs with most current values. Call early and often
    function refresher(){
      
      // console.log(donor);
      
    };
    
    //-------------------------------------------------------------------------
    // Function to call when the donation amount has been selected (but NOT if they're writing in their own amount
    
    (function amountChecker() {
      
      // get the set of elements for the set donation amounts
      var oneAmt = document.querySelectorAll(".Onetime-opt-set");
      var monAmt = document.querySelectorAll(".Monthly-opt-set");
      
      // loop the one-time donation options
      for ( var i = 0; i < oneAmt.length; i++ ) {
        
        var theAmt = oneAmt[i];
        theAmt.addEventListener("click", function(){
          document.getElementById("Paypal-onetime-amount").value = this.value;
          checkoutOnetime();
        });
        
      };
      
      
      // loop the monthly donation options
      for ( var i = 0; i < monAmt.length; i++ ) {
        
        var theAmt = monAmt[i];
        theAmt.addEventListener("click", function(){
          document.getElementById("Paypal-monthly-amount").value = this.value;
          checkoutMonthly();
        });
        
      };
      
    
    })();
    
    
    
    
    //-------------------------------------------------------------------------
    // Function to do two things: 
    // - check that the "other" field is a number PayPal will accept
    // - update the "amount" option with the number
    
    (function otherChecker() {
      
      var oneOther = document.getElementById("Onetime-other-amount");
      var monOther = document.getElementById("Monthly-other-amount");
      
      // Onetime      
      oneOther.onkeyup = function() {
        
        var oneOtherVal = this.value;
        var oneOtherErr = document.getElementById("Onetime-other-error");
        
        if( isNaN(oneOtherVal) ) {
          
          this.classList.add("otherAmountError");
          document.getElementById("Onetime-other").value = "";
          
        } else {
          
          this.classList.remove("otherAmountError");
          
          // then update the proper amount input with the correct value
          document.getElementById("Onetime-other").value = oneOtherVal;
          document.getElementById("Paypal-onetime-amount").value = oneOtherVal;
          checkoutOnetime();
          
        }
                
      }
      
      // Monthly
      monOther.onkeyup = function() {
        
        var monOtherVal = this.value;
        var monOtherErr = document.getElementById("Monthly-other-error");
        
        if( isNaN(monOtherVal) ) {
          
          this.classList.add("otherAmountError");
          document.getElementById("Monthly-other").value = "";
          
        } else {
          
          this.classList.remove("otherAmountError");
          
          // then update the proper amount input with the correct value
          document.getElementById("Monthly-other").value = monOtherVal;
          document.getElementById("Paypal-monthly-amount").value = monOtherVal;
          checkoutMonthly();
        }
                
      }      
      
      
    })();
    
    
    //--------------------------------------------------------------------------
    // Functions to show and enable checkout button when ready
    
    function checkoutOnetime(){
      var oneCheckout = document.getElementById("Onetime-checkout");
      oneCheckout.classList.remove("is-hidden");
      oneCheckout.removeAttribute("disabled");
      
    };
    
    function checkoutMonthly(){
      var monCheckout = document.getElementById("Monthly-checkout");
      monCheckout.classList.remove("is-hidden");
      monCheckout.removeAttribute("disabled");
    };
    
    
    //--------------------------------------------------------------------------
    // Function to check whether the "Other Amount" option(s) have been checked
    
    // One time other option
    var onceOther = document.getElementById("Onetime-other");
    onceOther.onclick = function(){
      
      // parentNode, since the enclosing label is what has the .is-hidden class active
      var onceOtherAmount = document.getElementById("Onetime-other-amount").parentNode;
      onceOtherAmount.classList.remove("is-hidden");
      // then set the name="amount" on the input that will actually hold the donation amount
      onceOtherAmount.setAttribute("name", "amount");
    }
    
    // Monthly other option
    var monthlyOther = document.getElementById("Monthly-other");
    monthlyOther.onclick = function(){
      
      // parentNode, since the enclosing label is what has the .is-hidden class active
      var monthlyOtherAmount = document.getElementById("Monthly-other-amount").parentNode;
      monthlyOtherAmount.classList.remove("is-hidden");
      
    }
    
    
    
    
  })();
  
  
  
  
/*
  
  "use strict";
  
  //----------------------------------------------------------------------------
  // Object to hold all buyer information.
  // We assume a default option and change as selections are made.
  var buyer = {
    who: "self",
    duration: "1",
    country: "CA",
    optout: "off",
    price: {
      base: 26.66,
      tax: "0",
      taxType: "",
      total: ""
    }
  };
  
  
  // function to call when new information has been added
  function refresher() {
    
    // console.log(buyer);
    
    // test the location    
    // by default, we assume a Canadian buyer. the other options 
    if ( buyer.country === "intl") {
      
      document.getElementById("ca-province").classList.add("is-hidden");
      document.getElementById("intl-state").classList.remove("is-hidden");
      document.getElementById("intl-country").classList.remove("is-hidden");
            
    } else if ( buyer.country === "CA" ) {
      
      document.getElementById("ca-province").classList.remove("is-hidden");
      document.getElementById("intl-state").classList.add("is-hidden");
      document.getElementById("intl-country").classList.add("is-hidden");
      
    }
    
    
    // Set the hidden input values with the required data
    // 
  
    // Refresh the price
    updatePrice();
    updateItem();
    updateState();
    updateGiftMsg();
    
  };

  
  //----------------------------------------------------------------------------
  // Hide steps and then reveal as necessary
  // Execute right away
  (function(){
    
    var steps = document.querySelectorAll(".Subscribe-step");
    for ( var i = 0; i < steps.length; i++ ){
      
      var step = steps[i];
          step.classList.add("is-hidden");
      
      document.getElementById("step-1").classList.remove("is-hidden");
      
      step.addEventListener("click", function(){
        
        var thisStep = this;
        
        if ( thisStep.id != "step-4") {
        
        thisStep.classList.add("is-completed");
        thisStep.nextElementSibling.classList.remove("is-hidden");
        
        }
        
      });            
    }
    
  })();
  
  
  
  //----------------------------------------------------------------------------
  
  function updatePrice(){
    
    // calculate the price using the data-attributes on the individual province options
    if( buyer.country == "CA" ){
          
      // find the province selector
      var prov = document.querySelector(".Address-province");      
      var theProvince = prov.value;
      
      
      // if this is a 2 year subscription, alter prices accordingly
      if ( buyer.duration == 2 ) {        
        
        buyer.price.base    = 40.94;
        buyer.price.tax     = parseFloat(prov.options[prov.selectedIndex].getAttribute('data-tax2'));
        buyer.price.taxType = prov.options[prov.selectedIndex].getAttribute('data-taxtype');
        buyer.price.total   = buyer.price.base + buyer.price.tax;
        
      
      // otherwise this is a one-year sub
      } else {
        
        buyer.price.base    = 26.66;
        buyer.price.tax     = parseFloat(prov.options[prov.selectedIndex].getAttribute('data-tax1'));
        buyer.price.taxType = prov.options[prov.selectedIndex].getAttribute('data-taxtype');
        buyer.price.total   = buyer.price.base + buyer.price.tax;
        
      } 
    
    // if it's not canada it's international
    } else {
      
      if ( buyer.duration == 2 ) {
      
        buyer.price.base = 120.00;
        buyer.price.tax = 0;
        buyer.price.total = buyer.price.base;
      
      } else {
        
        buyer.price.base = 60.00;
        buyer.price.tax = 0;
        buyer.price.total = buyer.price.base;
        
      }
      
    }
    
    // update the amount to send to paypal
    var payPalPrice     = document.getElementById("paypal_amount");
    var payPalTax       = document.getElementById("paypal_tax");
    payPalPrice.value   = buyer.price.base.toString();
    payPalTax.value     = buyer.price.tax.toString();
    
    // once it's done the calculation, then call the function to display the total
    updatePriceDisplay();
    
  };
  
  //----------------------------------------------------------------------------
  // Update the display of the price on the page
  
  function updatePriceDisplay(){
    
    var prov        = document.querySelector(".Address-province");
    var state       = document.querySelector(".Address-state");
    var priceHolder = document.querySelector(".Sub-price");
    var thePrice    = document.getElementById("sub-price-amount");
    
    if ( prov.value.length > 0 && buyer.price.total > 0 || state.value.length > 0 && buyer.price.total > 0 ) {
      
      if ( buyer.country === "CA" ) {
      
        thePrice.innerHTML = "$" + buyer.price.total.toFixed(2);
        priceHolder.classList.remove("is-hidden");
      
      } else {
        
        thePrice.innerHTML = "CAD$" + buyer.price.total.toFixed(2);
        priceHolder.classList.remove("is-hidden");
        
      }
    }

    
  };
  
  //----------------------------------------------------------------------------
  // Update the "state" value
  
  function updateState() {
    
    var payPalState = document.getElementById("paypal_state");
    
    if ( buyer.country === "CA" ){
      
      payPalState.value = buyer.province;
      
    } else {
      
      payPalState.value = buyer.stateOther;
      
    }
    
  }
  
  //----------------------------------------------------------------------------
  // Update the description value
  
  function updateItem() {
    
    var payPalItem = document.getElementById("paypal_item");
    
    if ( buyer.duration === "2" ) {
      
      payPalItem.value = "Two-Year Subscription";
      
    } else if ( buyer.duration === "1" ) {
      
      payPalItem.value = "One-Year Subscription"
      
    }
    
    
  }
  
  //----------------------------------------------------------------------------
  // Update a helpful gift message to let people know they're filling in the recipient's address, not their own
  
  function updateGiftMsg(){
    
    var giftNotice = document.getElementById("Gift-notice");
    
    if( buyer.who === "gift" ) {
      
      giftNotice.innerHTML = "Since this is a gift, make sure you enter the <strong>recpient’s</strong> name and address! PayPal will look after your billing details in a moment.";
      
    } else giftNotice.innerHTML = "";
    
  }    
  
  //----------------------------------------------------------------------------
  // get all the options on the page
  var pickers = document.querySelectorAll(".Pick");
  
  // function to set options in the buyer object
  for ( var i = 0; i < pickers.length; i++ ) {
    var pick = pickers[i];
    pick.addEventListener("change", function(){
      var picked = this;
      var key = picked.getAttribute("data-key");
      var val = picked.getAttribute("data-value");      
      
      buyer[key] = val;
      
      refresher();
      
    });
  };
  
  //----------------------------------------------------------------------------
  // subscriber input information
  var address = document.querySelectorAll(".Address-input, .Address-select");
  
  for ( var i = 0; i < address.length; i++ ){
    
    var addressLine = address[i];
    addressLine.addEventListener("change", function(){
      var theLine = this;
      var key = theLine.getAttribute("name");
      var val = theLine.value;
      
      // update the buyer data
      buyer[key] = val;
      
      if ( key === "optout") {
        
        if ( document.querySelector(".Address-optout").checked ) {
          buyer.optout = "on";
        } else {
          buyer.optout = "off";
        }
        
      }
      
      refresher();
      
    });
    
  }
*/

</script>

<?php get_footer(); ?>