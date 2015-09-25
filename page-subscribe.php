<?php get_header(); ?>

<div class="Wrap-content Wrap-page Wrap-subscribe">

  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    
    <h1 class="Page-hed"><?php the_title(); ?></h1>
          
    <div class="Page-text">
      <?php the_content(); ?>
    </div>
        
  <?php endwhile; else : ?>
  	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
  <?php endif; ?>
  
  <hr>
  
  <div class="Subscribe-wrap">
  
    <div class="Option-wrap Option-1" data-step="1">
  		<h2 class="Option-hed">Who is this subscription for?</h2>
    		<a class="Option" href="#self" data-key="who" data-val="self">It’s for myself!</a>
    		<a class="Option" href="#gift" data-key="who" data-val="gift">It’s a gift for someone else!</a>
  	</div>
  	
  	<div class="Option-wrap Option-2 is-hidden" data-step="2">
  		<h2 class="Option-hed">OK! And for how long?</h2>
    		<a class="Option" href="#1yr" data-key="duration" data-val="1">One year (6 issues)</a>
    		<a class="Option Option-bestdeal" href="#2yr" data-key="duration" data-val="2">Two years (12 issues)</a>
  	</div>
  	
  	<div class="Option-wrap Option-3 is-hidden" data-step="3">
  		<h2 class="Option-hed">Great! Is the mailing address in Canada?</h2>
    		<a class="Option" href="#canada" data-key="location" data-val="ca">Yes!</a>
    		<a class="Option" href="#intl" data-key="location" data-val="intl">Nope, it’s outside Canada.</a>
  	</div>
  	
  	<div id="Address-form-ca" class="Wrap-address Option-wrap Option-4 " data-step="4">
  		
  		<h2 class="Option-hed">Super! What’s the mailing address?</h2>
  		
  		<form class="Address" action="null">
  		
    		<label class="Address-label Address-name-label" for="name">Name: </label>
    		<input class="Address-input Address-name" type="text" name="name">
    		<span class="Address-need Address-need--req">(Required)</span>
    		
    		<label class="Address-label Address-street-label Address-street-label--primary" for="address1">Street Address:</label>
    		<input class="Address-input Address-street Address-street--primary" type="text" name="address1">
    		<span class="Address-need Address-need--req">(Required)</span>
    		
    		<label class="Address-label Address-street-label Address-street-label--secondary" for="address2">Street Address 2:</label>
    		<input class="Address-input Address-street Address-street--secondary" type="text" name="address2">
    		<span class="Address-need Address-need--opt">(Optional)</span>
    		
    		<label class="Address-label Address-city-label " for="city">City:</label>
    		<input class="Address-input Address-city" type="text" name="city">
    		<span class="Address-need Address-need--req">(Required)</span>
    		
    		<label class="Address-label Address-province-label" for="province">Province:</label>
    		<select class="Address-input Address-province" name="province">
      		<option> - Select Province/State - </option>
        	<option value="AB">Alberta</option>
        	<option value="BC">British Columbia</option>
        	<option value="MB">Manitoba</option>
        	<option value="NB">New Brunswick</option>
        	<option value="NL">Newfoundland and Labrador</option>
        	<option value="NS">Nova Scotia</option>
        	<option value="NT">Northwest Territories</option>
        	<option value="NU">Nunavut</option>
        	<option value="ON">Ontario</option>
        	<option value="PE">Prince Edward Island</option>
        	<option value="QC">Quebec</option>
        	<option value="SK">Saskatchewan</option>
        	<option value="YT">Yukon</option>
    		</select>
    		<span class="Address-need Address-need--req">(Required)</span>
    		
    		<label class="Address-label Address-postcode-label " for="city">Postal Code:</label>
    		<input class="Address-input Address-postcode" type="text" name="postcode">
    		<span class="Address-need Address-need--req">(Required)</span>
    		
    		
    		<div class="Sub-price is-hidden">Total: <span id="sub-price-amount" class="Sub-price--total">$26.66</span></div>
    		
    		<input id="Address-submit" class="Address-submit" type="submit" value="Pay Now!" class="Checkout">
    		
  		</form>
  		
  	</div> 	
  	    		
  </div>

  
  
  <hr>
  
  <p><em>This Magazine</em> is published six times a year. Please allow 6-8 weeks for delivery of your first issue. Plus GST/HST where applicable.</p>
  
  <hr>
  
  <h2>Other ways to subscribe</h2>
		
		<p>Nervous about subscribing online? You don’t need to be, but we completely understand if you are. You can also subscribe by:</p>
		
		<table class="Sub-methods">
      <tr class="Sub-method--row">
        <td class="Sub-method--name">Email</td>
        <td class="Sub-method--details">Send your subscription order to circ@thismagazine.ca</td>
      </tr>
      <tr class="Sub-method--row">
        <td class="Sub-method--name">Mail</td>
        <td class="Sub-method--details">Send your order plus a cheque or money order (payable to “This Magazine”) to:
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
    
    <p>Please review our <a href="#">policy statement</a>.</p>
  
  

</div>

<script src="https://cdn.polyfill.io/v2/polyfill.min.js?features=Array.prototype.indexOf" async></script>
<script>
	
	// Object to hold buyer details
	var buyer = {};
	// get all the options on the page
  var options = document.querySelectorAll(".Option");
  
  // loop through the options and perform some functions when clicked
  for ( i = 0; i < options.length; i++ ){
    options[i].onclick = function(e){
      
      // Vars: opt is the option; key and val grab those data-attributes from the links
      // keep track of steps as well. On step 3, decision time
      var opt = this,
          step = opt.parentNode.getAttribute("data-step");
          key = opt.getAttribute("data-key"),
          val = opt.getAttribute("data-val");
      
      // add that key/val pair to the buyer object
      buyer[key] = val;     
      
      // if it's step three it's time to do some other stuff.
      if ( step == 3 ) {
        
        if ( buyer.location == "ca" ) {
          
          var addressForm = document.getElementById("Address-form-ca");
          addressForm.classList.remove("is-hidden");
          
          e.preventDefault();
          
        }
        
        
      } else {
      
      
      opt.classList.add("is-selected");
      opt.parentNode.classList.add("is-completed");
      opt.parentNode.nextElementSibling.classList.remove("is-hidden");
      
      e.preventDefault();
      
      }
      
    }
  }
  
  
  // function to refresh price when province changes
  (function priceRefresh() {
    
    // find out the province selector
    var prov = document.querySelector(".Address-province");
    // on change...
    prov.onchange = function(){
      
      var theProvince = prov.value;
      var thePrice    = document.getElementById("sub-price-amount");
      
      // DRY constructor to make the prices
      var priceConstructor = function(tax, total){
        return '$26.66 <span class="Sub-price-tax">+ $' + tax + ' tax</span> = <span class="Sub-price-total--final">$' + total + '</span>';
      }
      
      // various cases for provincial tax rates. This is brutal
      if( ["AB", "NT", "NU", "YT"].indexOf(theProvince) > -1 ) {
        thePrice.innerHTML = priceConstructor(1.33, 27.99);
      } else if ( ["MN", "NB", "NL", "ON"].indexOf(theProvince) > -1 ) {
        thePrice.innerHTML = priceConstructor(3.46, 30.12);
      } else if ( theProvince == "SK" ) {
        thePrice.innerHTML = priceConstructor(2.67, 29.34);
      } else if ( theProvince == "BC" ) {
        thePrice.innerHTML = priceConstructor(3.19, 29.86);
      } else if ( theProvince == "PE" ){
        thePrice.innerHTML = priceConstructor(3.73, 30.39);
      } else if ( theProvince == "QC" ){
        thePrice.innerHTML = priceConstructor(3.99, 30.65);
      } else if ( theProvince == "NS" ){
        thePrice.innerHTML = priceConstructor(4.00, 30.66);
      }
    
      document.querySelector(".Sub-price").classList.remove("is-hidden");
      
    }
    
  })();
  
  
  
  
   
    		
	
</script>

<?php get_footer(); ?>