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
    
    <div id="step-1" class="Subscribe-step">
      
      <h2>Who is this subscription for?</h2>
      
      <div class="Wrap-picks">
      
        <label for="is-self">
        <input id="is-self" name="is_self" value="true" data-key="who" data-value="self" type="radio" class="Pick Pick-who">
        <span>Myself!</span>
        </label>
      
        <label for="is-gift">
        <input id="is-gift" name="is_self" value="false" data-key="who" data-value="gift" type="radio" class="Pick Pick-who">
        <span>It’s a gift for someone else!</span>
        </label>
      
      </div>
    
    </div>
    
    <div id="step-2" class="Subscribe-step">
      
      <h2>Great! For how long?</h2>
      
      <div class="Wrap-picks">
      
        <label for="is-1year">
        <input id="is-1year" name="is_1year" value="true" data-key="duration" data-value=1 type="radio" class="Pick Pick-length">
        <span>One Year</span>
        </label>
        
        <label for="is-2year">
        <input id="is-2year" name="is_1year" value="false" data-key="duration" data-value=2 type="radio" class="Pick Pick-length">
        <span>Two Years</span>
        </label>
      
      </div>
          
    </div>
    
    <div id="step-3" class="Subscribe-step Subscribe-step--3">
      
      <h2>Super! Is the mailing address in Canada, or elsewhere?</h2>
      
      <div class="Wrap-picks">
        
        <label for="is-canada">
        <input id="is-canada" name="is_canada" value="true" data-key="country" data-value="CA" type="radio" class="Pick Pick-where">
        <span>Canada</span>
        </label>
        
        <label for="is-usa">
        <input id="is-usa" name="is_canada" value="false" data-key="country" data-value="US" type="radio" class="Pick Pick-where">
        <span>U.S.</span>
        </label>
        
        <label for="is-international">
        <input id="is-international" name="is_canada" value="false" data-key="country" data-value="intl" type="radio" class="Pick Pick-where">
        <span>International</span>
        </label>
      
      </div>
      
    </div>
    
    <div id="step-4" class="Subscribe-step">
      
      <h2>OK! All we need now are the address details.</h2>
      <p class="Paypal-notice">All payments are handled securely through PayPal. Once you hit “Pay Now” below, you’ll be taken to PayPal.com to complete the transaction. When it’s complete you’ll be redirected back to our website. Thank you for subscribing!</p>
      
      <form class="Address" method="POST" action="https://www.paypal.com/cgi-bin/webscr" target="_blank">
      
      <p id="Gift-notice"></p>
      
    	<label class="Address-label Address-name-label" for="name">Name: </label>
    	<input class="Address-input Address-name" type="text" name="name" required>
    	<span class="Address-need Address-need--req">(Required)</span>
    	
    	<label class="Address-label Address-street-label Address-street-label--primary" for="address1" required>Street Address:</label>
    	<input class="Address-input Address-street Address-street--primary" type="text" name="address1">
    	<span class="Address-need Address-need--req">(Required)</span>
    	
    	<label class="Address-label Address-street-label Address-street-label--secondary" for="address2">Street Address 2:</label>
    	<input class="Address-input Address-street Address-street--secondary" type="text" name="address2">
    	<span class="Address-need Address-need--opt">(Optional)</span>
    	
    	<label class="Address-label Address-city-label " for="city">City:</label>
    	<input class="Address-input Address-city" type="text" name="city" required>
    	<span class="Address-need Address-need--req">(Required)</span>
    	
      <div id="ca-province">
      	<label class="Address-label Address-province-label" for="province">Province:</label>
      	<select class="Address-select Address-province" name="province">
      		<option value="">Select Province:</option>
        	<option value="AB" data-tax1="1.33" data-tax2="2.05" data-taxtype="GST">Alberta</option>
        	<option value="BC" data-tax1="1.33" data-tax2="2.05" data-taxtype="GST">British Columbia</option>
        	<option value="MB" data-tax1="1.33" data-tax2="2.05" data-taxtype="GST">Manitoba</option>
        	<option value="NB" data-tax1="3.47" data-tax2="5.32" data-taxtype="HST">New Brunswick</option>
        	<option value="NL" data-tax1="3.47" data-tax2="5.32" data-taxtype="HST">Newfoundland and Labrador</option>
        	<option value="NS" data-tax1="4.00" data-tax2="6.14" data-taxtype="HST">Nova Scotia</option>
        	<option value="NT" data-tax1="1.33" data-tax2="2.05" data-taxtype="GST">Northwest Territories</option>
        	<option value="NU" data-tax1="1.33" data-tax2="2.05" data-taxtype="GST">Nunavut</option>
        	<option value="ON" data-tax1="3.47" data-tax2="5.32" data-taxtype="HST">Ontario</option>
        	<option value="PE" data-tax1="3.73" data-tax2="5.73" data-taxtype="HST">Prince Edward Island</option>
        	<option value="QC" data-tax1="1.33" data-tax2="2.05" data-taxtype="GST">Quebec</option>
        	<option value="SK" data-tax1="1.33" data-tax2="2.05" data-taxtype="GST">Saskatchewan</option>
        	<option value="YT" data-tax1="1.33" data-tax2="2.05" data-taxtype="GST">Yukon</option>
      	</select>
      	<span class="Address-need Address-need--req">(Required)</span>
      </div>
      
      <div id="us-state" class="is-hidden">
      	<label class="Address-label Address-province-label" for="us-state">State:</label>
      	<select class="Address-select Address-province" name="usState">
        	<option value="">Select State:</option>
        	<option value="AL">Alabama</option>
        	<option value="AK">Alaska</option>
        	<option value="AZ">Arizona</option>
        	<option value="AR">Arkansas</option>
        	<option value="CA">California</option>
        	<option value="CO">Colorado</option>
        	<option value="CT">Connecticut</option>
        	<option value="DE">Delaware</option>
        	<option value="DC">District Of Columbia</option>
        	<option value="FL">Florida</option>
        	<option value="GA">Georgia</option>
        	<option value="HI">Hawaii</option>
        	<option value="ID">Idaho</option>
        	<option value="IL">Illinois</option>
        	<option value="IN">Indiana</option>
        	<option value="IA">Iowa</option>
        	<option value="KS">Kansas</option>
        	<option value="KY">Kentucky</option>
        	<option value="LA">Louisiana</option>
        	<option value="ME">Maine</option>
        	<option value="MD">Maryland</option>
        	<option value="MA">Massachusetts</option>
        	<option value="MI">Michigan</option>
        	<option value="MN">Minnesota</option>
        	<option value="MS">Mississippi</option>
        	<option value="MO">Missouri</option>
        	<option value="MT">Montana</option>
        	<option value="NE">Nebraska</option>
        	<option value="NV">Nevada</option>
        	<option value="NH">New Hampshire</option>
        	<option value="NJ">New Jersey</option>
        	<option value="NM">New Mexico</option>
        	<option value="NY">New York</option>
        	<option value="NC">North Carolina</option>
        	<option value="ND">North Dakota</option>
        	<option value="OH">Ohio</option>
        	<option value="OK">Oklahoma</option>
        	<option value="OR">Oregon</option>
        	<option value="PA">Pennsylvania</option>
        	<option value="RI">Rhode Island</option>
        	<option value="SC">South Carolina</option>
        	<option value="SD">South Dakota</option>
        	<option value="TN">Tennessee</option>
        	<option value="TX">Texas</option>
        	<option value="UT">Utah</option>
        	<option value="VT">Vermont</option>
        	<option value="VA">Virginia</option>
        	<option value="WA">Washington</option>
        	<option value="WV">West Virginia</option>
        	<option value="WI">Wisconsin</option>
        	<option value="WY">Wyoming</option>
      	</select>
      	<span class="Address-need Address-need--req">(Required)</span>
      </div>
    	
    	<div id="intl-state" class="is-hidden">
        <label class="Address-label Address-state-label" for="state">State or Province:</label>
      	<input class="Address-input Address-state" type="text" name="stateOther">
      	<span class="Address-need Address-need--req">(Required)</span>
    	</div>
    	
    	<label class="Address-label Address-postcode-label " for="city">Postal Code:</label>
    	<input class="Address-input Address-postcode" type="text" name="zip" required>
    	<span class="Address-need Address-need--req">(Required)</span>
    	
    	<div id="intl-country" class="is-hidden">
      	<label class="Address-label Address-country-label" for="country">Country:</label>
      	<select class="Address-select Address-country" name="country">
          <option value="CA">Select country:</option>
          <option value="US">United States</option>
          <option value="AF">Afghanistan</option>
          <option value="AX">&Aring;land Islands</option>
          <option value="AL">Albania</option>
          <option value="DZ">Algeria</option>
          <option value="AS">American Samoa</option>
          <option value="AD">Andorra</option>
          <option value="AO">Angola</option>
          <option value="AI">Anguilla</option>
          <option value="AQ">Antarctica</option>
          <option value="AG">Antigua and Barbuda</option>
          <option value="AR">Argentina</option>
          <option value="AM">Armenia</option>
          <option value="AW">Aruba</option>
          <option value="AU">Australia</option>
          <option value="AT">Austria</option>
          <option value="AZ">Azerbaijan</option>
          <option value="BS">Bahamas</option>
          <option value="BH">Bahrain</option>
          <option value="BD">Bangladesh</option>
          <option value="BB">Barbados</option>
          <option value="BY">Belarus</option>
          <option value="BE">Belgium</option>
          <option value="BZ">Belize</option>
          <option value="BJ">Benin</option>
          <option value="BM">Bermuda</option>
          <option value="BT">Bhutan</option>
          <option value="BO">Bolivia, Plurinational State of</option>
          <option value="BA">Bosnia and Herzegovina</option>
          <option value="BW">Botswana</option>
          <option value="BV">Bouvet Island</option>
          <option value="BR">Brazil</option>
          <option value="IO">British Indian Ocean Territory</option>
          <option value="BN">Brunei Darussalam</option>
          <option value="BG">Bulgaria</option>
          <option value="BF">Burkina Faso</option>
          <option value="BI">Burundi</option>
          <option value="KH">Cambodia</option>
          <option value="CM">Cameroon</option>
          <option value="CV">Cape Verde</option>
          <option value="KY">Cayman Islands</option>
          <option value="CF">Central African Republic</option>
          <option value="TD">Chad</option>
          <option value="CL">Chile</option>
          <option value="CN">China</option>
          <option value="CX">Christmas Island</option>
          <option value="CC">Cocos (Keeling) Islands</option>
          <option value="CO">Colombia</option>
          <option value="KM">Comoros</option>
          <option value="CG">Congo</option>
          <option value="CD">Congo, the Democratic Republic of the</option>
          <option value="CK">Cook Islands</option>
          <option value="CR">Costa Rica</option>
          <option value="CI">C&ocirc;te d'Ivoire</option>
          <option value="HR">Croatia</option>
          <option value="CU">Cuba</option>
          <option value="CY">Cyprus</option>
          <option value="CZ">Czech Republic</option>
          <option value="DK">Denmark</option>
          <option value="DJ">Djibouti</option>
          <option value="DM">Dominica</option>
          <option value="DO">Dominican Republic</option>
          <option value="EC">Ecuador</option>
          <option value="EG">Egypt</option>
          <option value="SV">El Salvador</option>
          <option value="GQ">Equatorial Guinea</option>
          <option value="ER">Eritrea</option>
          <option value="EE">Estonia</option>
          <option value="ET">Ethiopia</option>
          <option value="FK">Falkland Islands (Malvinas)</option>
          <option value="FO">Faroe Islands</option>
          <option value="FJ">Fiji</option>
          <option value="FI">Finland</option>
          <option value="FR">France</option>
          <option value="GF">French Guiana</option>
          <option value="PF">French Polynesia</option>
          <option value="TF">French Southern Territories</option>
          <option value="GA">Gabon</option>
          <option value="GM">Gambia</option>
          <option value="GE">Georgia</option>
          <option value="DE">Germany</option>
          <option value="GH">Ghana</option>
          <option value="GI">Gibraltar</option>
          <option value="GR">Greece</option>
          <option value="GL">Greenland</option>
          <option value="GD">Grenada</option>
          <option value="GP">Guadeloupe</option>
          <option value="GU">Guam</option>
          <option value="GT">Guatemala</option>
          <option value="GG">Guernsey</option>
          <option value="GN">Guinea</option>
          <option value="GW">Guinea-Bissau</option>
          <option value="GY">Guyana</option>
          <option value="HT">Haiti</option>
          <option value="HM">Heard Island and McDonald Islands</option>
          <option value="VA">Holy See (Vatican City State)</option>
          <option value="HN">Honduras</option>
          <option value="HK">Hong Kong</option>
          <option value="HU">Hungary</option>
          <option value="IS">Iceland</option>
          <option value="IN">India</option>
          <option value="ID">Indonesia</option>
          <option value="IR">Iran, Islamic Republic of</option>
          <option value="IQ">Iraq</option>
          <option value="IE">Ireland</option>
          <option value="IM">Isle of Man</option>
          <option value="IL">Israel</option>
          <option value="IT">Italy</option>
          <option value="JM">Jamaica</option>
          <option value="JP">Japan</option>
          <option value="JE">Jersey</option>
          <option value="JO">Jordan</option>
          <option value="KZ">Kazakhstan</option>
          <option value="KE">Kenya</option>
          <option value="KI">Kiribati</option>
          <option value="KP">Korea, Democratic People's Republic of</option>
          <option value="KR">Korea, Republic of</option>
          <option value="KW">Kuwait</option>
          <option value="KG">Kyrgyzstan</option>
          <option value="LA">Lao People's Democratic Republic</option>
          <option value="LV">Latvia</option>
          <option value="LB">Lebanon</option>
          <option value="LS">Lesotho</option>
          <option value="LR">Liberia</option>
          <option value="LY">Libyan Arab Jamahiriya</option>
          <option value="LI">Liechtenstein</option>
          <option value="LT">Lithuania</option>
          <option value="LU">Luxembourg</option>
          <option value="MO">Macao</option>
          <option value="MK">Macedonia, the former Yugoslav Republic of</option>
          <option value="MG">Madagascar</option>
          <option value="MW">Malawi</option>
          <option value="MY">Malaysia</option>
          <option value="MV">Maldives</option>
          <option value="ML">Mali</option>
          <option value="MT">Malta</option>
          <option value="MH">Marshall Islands</option>
          <option value="MQ">Martinique</option>
          <option value="MR">Mauritania</option>
          <option value="MU">Mauritius</option>
          <option value="YT">Mayotte</option>
          <option value="MX">Mexico</option>
          <option value="FM">Micronesia, Federated States of</option>
          <option value="MD">Moldova, Republic of</option>
          <option value="MC">Monaco</option>
          <option value="MN">Mongolia</option>
          <option value="ME">Montenegro</option>
          <option value="MS">Montserrat</option>
          <option value="MA">Morocco</option>
          <option value="MZ">Mozambique</option>
          <option value="MM">Myanmar</option>
          <option value="NA">Namibia</option>
          <option value="NR">Nauru</option>
          <option value="NP">Nepal</option>
          <option value="NL">Netherlands</option>
          <option value="AN">Netherlands Antilles</option>
          <option value="NC">New Caledonia</option>
          <option value="NZ">New Zealand</option>
          <option value="NI">Nicaragua</option>
          <option value="NE">Niger</option>
          <option value="NG">Nigeria</option>
          <option value="NU">Niue</option>
          <option value="NF">Norfolk Island</option>
          <option value="MP">Northern Mariana Islands</option>
          <option value="NO">Norway</option>
          <option value="OM">Oman</option>
          <option value="PK">Pakistan</option>
          <option value="PW">Palau</option>
          <option value="PS">Palestinian Territory, Occupied</option>
          <option value="PA">Panama</option>
          <option value="PG">Papua New Guinea</option>
          <option value="PY">Paraguay</option>
          <option value="PE">Peru</option>
          <option value="PH">Philippines</option>
          <option value="PN">Pitcairn</option>
          <option value="PL">Poland</option>
          <option value="PT">Portugal</option>
          <option value="PR">Puerto Rico</option>
          <option value="QA">Qatar</option>
          <option value="RE">R&eacute;union</option>
          <option value="RO">Romania</option>
          <option value="RU">Russian Federation</option>
          <option value="RW">Rwanda</option>
          <option value="BL">Saint Barth&eacute;lemy</option>
          <option value="SH">Saint Helena, Ascension and Tristan da Cunha</option>
          <option value="KN">Saint Kitts and Nevis</option>
          <option value="LC">Saint Lucia</option>
          <option value="MF">Saint Martin (French part)</option>
          <option value="PM">Saint Pierre and Miquelon</option>
          <option value="VC">Saint Vincent and the Grenadines</option>
          <option value="WS">Samoa</option>
          <option value="SM">San Marino</option>
          <option value="ST">Sao Tome and Principe</option>
          <option value="SA">Saudi Arabia</option>
          <option value="SN">Senegal</option>
          <option value="RS">Serbia</option>
          <option value="SC">Seychelles</option>
          <option value="SL">Sierra Leone</option>
          <option value="SG">Singapore</option>
          <option value="SK">Slovakia</option>
          <option value="SI">Slovenia</option>
          <option value="SB">Solomon Islands</option>
          <option value="SO">Somalia</option>
          <option value="ZA">South Africa</option>
          <option value="GS">South Georgia and the South Sandwich Islands</option>
          <option value="ES">Spain</option>
          <option value="LK">Sri Lanka</option>
          <option value="SD">Sudan</option>
          <option value="SR">Suriname</option>
          <option value="SJ">Svalbard and Jan Mayen</option>
          <option value="SZ">Swaziland</option>
          <option value="SE">Sweden</option>
          <option value="CH">Switzerland</option>
          <option value="SY">Syrian Arab Republic</option>
          <option value="TW">Taiwan, Province of China</option>
          <option value="TJ">Tajikistan</option>
          <option value="TZ">Tanzania, United Republic of</option>
          <option value="TH">Thailand</option>
          <option value="TL">Timor-Leste</option>
          <option value="TG">Togo</option>
          <option value="TK">Tokelau</option>
          <option value="TO">Tonga</option>
          <option value="TT">Trinidad and Tobago</option>
          <option value="TN">Tunisia</option>
          <option value="TR">Turkey</option>
          <option value="TM">Turkmenistan</option>
          <option value="TC">Turks and Caicos Islands</option>
          <option value="TV">Tuvalu</option>
          <option value="UG">Uganda</option>
          <option value="UA">Ukraine</option>
          <option value="AE">United Arab Emirates</option>
          <option value="GB">United Kingdom</option>
          <option value="UM">United States Minor Outlying Islands</option>
          <option value="UY">Uruguay</option>
          <option value="UZ">Uzbekistan</option>
          <option value="VU">Vanuatu</option>
          <option value="VE">Venezuela, Bolivarian Republic of</option>
          <option value="VN">Viet Nam</option>
          <option value="VG">Virgin Islands, British</option>
          <option value="VI">Virgin Islands, U.S.</option>
          <option value="WF">Wallis and Futuna</option>
          <option value="EH">Western Sahara</option>
          <option value="YE">Yemen</option>
          <option value="ZM">Zambia</option>
          <option value="ZW">Zimbabwe</option>
        </select>
      	
    	</div>
    	
    	
    	
      <div class="Sub-price is-hidden">Total: <span id="sub-price-amount" class="Sub-price--total">$26.66</span></div>
    	
    	<label class="Address-label Address-email-label" for="email">Your Email Address: </label>
    	<input class="Address-input Address-email" type="email" name="email" required>
    	<span class="Address-need Address-need--req">(Required)</span>
    	
    	<div class="Wrap-address-optout">
    		<label class="Address-label Address-optout-label" for="optout">Your privacy is important to us. From time to time other like-minded magazines and organizations may ask if they can send special offers to our subscribers. If you do not want your contact information made available, please check here:
      		<input class="Address-input Address-optout" type="checkbox" name="optout">
    		</label>
    	</div>
    	
      <div class="Sub-price is-hidden">Total after tax: <span id="sub-price-amount" class="Sub-price--total">$26.66</span></div>
    	
    	<input id="Address-submit" class="Address-submit" type="submit" value="Pay Now!" class="Checkout">
    	<span class="Address-submit--paypalnotice">When you hit “Pay Now” you’ll be redirected to PayPal.com to complete the transaction.</span>
      
      <!-- PayPal Required Fields -->
      <!-- Documentation: https://developer.paypal.com/docs/classic/paypal-payments-standard/integration-guide/Appx_websitestandard_htmlvariables/  -->
      <input type="hidden" name="address_override" value="1"> <!-- Yes, we want to override with the subscription form inputs -->
      <input type="hidden" name="cmd" value="_xclick"> <!-- mandatory, otherwise paypal won't accept the form -->
      <input type="hidden" name="return" value="http://this.org/subscribe/thanks/"> <!-- Back to the thanks page when finished -->
      <input type="hidden" name="cancel_return" value="http://this.org/subscribe/"> <!-- If they don't complete, come back and offer to start again -->
      <input type="hidden" name="rm" value="1"> <!-- On return to the thanks page, include no payment details -->
      <input type="hidden" name="business" value="8JPDFKTHGSLR2"> <!-- PayPal merchant ID -->
      <input type="hidden" name="lc" value="CA"> <!-- country language setting for checkout page -->
      <input type="hidden" name="currency_code" value="CAD"> <!-- currency setting. CAD only -->
      <input type="hidden" name="no_shipping" value="2"> <!-- shipping address is required -->
      <input type="hidden" name="no_note" value="1"> <!-- no gift note -->
      <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1"> <!-- tracking for paypal -->
        
      <!-- Paypal fields that change dynamically during the subscription fillout process -->
      <input type="hidden" id="paypal_item" name="item_name" value="One-year subscription"> <!-- val -->
      <input type="hidden" id="paypal_state" name="state" value="">
      <input type="hidden" id="paypal_custom_optout" name="custom" value="Privacy option: Contact OK">
      <input type="hidden" id="paypal_amount" name="amount" value="">
      <input type="hidden" id="paypal_tax" name="tax" value="">
    
      <!-- End PayPal -->
    
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
    
</div>

<script src="https://cdn.polyfill.io/v2/polyfill.js?features=Array.prototype.indexOf,document.querySelector,Element.prototype.classList,Event"></script>
<script>
  
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
    
    console.log(buyer);
    
    // test the location    
    // by default, we assume a Canadian buyer. the other options 
    if ( buyer.country === "intl") {
      
      document.getElementById("ca-province").classList.add("is-hidden");
      document.getElementById("us-state").classList.add("is-hidden");
      document.getElementById("intl-state").classList.remove("is-hidden");
      document.getElementById("intl-country").classList.remove("is-hidden");
            
    } else if ( buyer.country === "US" ) {
      
      document.getElementById("us-state").classList.remove("is-hidden");
      document.getElementById("ca-province").classList.add("is-hidden");
      document.getElementById("intl-state").classList.add("is-hidden");
      document.getElementById("intl-country").classList.add("is-hidden");
      
    } else if ( buyer.country === "CA" ) {
      
      document.getElementById("ca-province").classList.remove("is-hidden");
      document.getElementById("us-state").classList.add("is-hidden");
      document.getElementById("intl-state").classList.add("is-hidden");
      document.getElementById("intl-country").classList.add("is-hidden");
      
    }
    
    
    // Set the hidden input values with the required data
    // 
  
    // Refresh the price
    updatePrice();
    updateItem();
    updateState();
    updatePrivacy();
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
    if( buyer.country === "CA" ){
          
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
      
        buyer.price.base = 68.00;
        buyer.price.tax = 0;
        buyer.price.total = buyer.price.base;
      
      } else {
        
        buyer.price.base = 40.00;
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
    
    // only show/update the price if it's greater than zero
    if ( buyer.price.total > 0 ) {
      
      // if the country is canada we have tax stuff to do
      if ( buyer.country === "CA" ) {
        
        // only display once the province has been selected!
        if ( prov.value.length > 0 ) {
          
          thePrice.innerHTML = '<span class="sub-price-amount--base">$' + buyer.price.base.toFixed(2) + '</span> + <span class="sub-price-amount--tax">$' + buyer.price.tax.toFixed(2) + ' ' + buyer.price.taxType + '</span> = <span class="sub-price-amount--total">$' + buyer.price.total.toFixed(2) + '</span>';
          priceHolder.classList.remove("is-hidden");
          
        }       
        
      // if it's not Canada the price is uniform anyway so it doesn't matter. US, Intl prices are same
      } else {
        
        thePrice.innerHTML = "CAD$" + buyer.price.total.toFixed(2);
        priceHolder.classList.remove("is-hidden");
        
      }
      
      
    }
    
    
    /*
if ( prov.value.length > 0 && buyer.price.total > 0 || state.value.length > 0 && buyer.price.total > 0 ) {
      
      if ( buyer.country === "CA" ) {
      
        thePrice.innerHTML = '<span class="sub-price-amount--base">$' + buyer.price.base.toFixed(2) + '</span> + <span class="sub-price-amount--tax">$' + buyer.price.tax.toFixed(2) + ' ' + buyer.price.taxType + '</span> = <span class="sub-price-amount--total">$' + buyer.price.total.toFixed(2) + '</span>';
        priceHolder.classList.remove("is-hidden");
      
      } else {
        
        thePrice.innerHTML = "CAD$" + buyer.price.total.toFixed(2);
        priceHolder.classList.remove("is-hidden");
        
      }
    }
*/

    
  };
  
  //----------------------------------------------------------------------------
  // Update the "state" value
  
  function updateState() {
    
    var payPalState = document.getElementById("paypal_state");
    
    if ( buyer.country === "CA" ){
      
      payPalState.value = buyer.province;
      
    } else if ( buyer.country === "US" ) {
      
      payPalState.value = buyer.usState;
    
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
  // Update the Privacy Opt-out value
  
  function updatePrivacy() {
    
    var payPalPrivacy = document.getElementById("paypal_custom_optout");
    
    if ( buyer.optout === "off" ) {
      
      payPalPrivacy.value = "Privacy option: Contact OK";
      
    } else if ( buyer.optout === "on") {
      
      payPalPrivacy.value = "Privacy option: DO NOT CONTACT";
      
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

</script>

<?php get_footer(); ?>