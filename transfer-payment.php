<!DOCTYPE html>
<html lang="en">
<title>Transfer Payment | Backpacker Transfers</title>
<?php include 'header.php'; ?>
<body>

<div class="container">
<div id="bw-payment-page">

<header class="navbar" role="banner" id="bw-header">
  <div class="container">
    <div class="navbar-header">
      <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bw-navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>
    <nav class="collapse navbar-collapse bw-navbar-collapse" role="navigation" id="header-responsive">
      <ul class="nav navbar-nav social header">
        <li><a href="#">Search</a></li>
        <li><a href="#">Booking Review</a></li>
        <li><a href="#">Select New Transfer</a></li>
        <li><a class="bw-active" href="#">Summary &amp; Payment</a><div class="arrow-down"></div></li>
        <li><a href="#">Confirmation</a></li>
      </ul>
    </nav>
  </div>
</header> 

<div class="row">
  <div class="col-xs-12">
    <h4 class="bw-green">Transfer Change Summary</h4>
    <hr />
  </div>
</div> <!--/.row-->

<div class="row">
  <div class="col-xs-12">
    <div class="table-responsive">
     <table class="table table-bordered table-curved" id="bw-search-results-select-transfer-table">
        <tr>
          <th>Transfer Date</th>
          <th>From / Pick Up</th>
          <th>Pick Up time</th>
          <th>To / Drop off</th>
          <th>Drop Off Time</th>
          <th>Change Price / Adult</th>
          <th>Number of Adults</th>
          <th>Change Price / Child</th>
          <th>Number of Children</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>28 October 2010</td>
          <td><strong>JFK Int. Airport</strong></td>
          <td>11:45 pm</td>
          <td><strong>Base Backpackers</strong></td>
          <td>11:45 pm</td>
          <td>USD 25.00</td>
          <td>1</td>
          <td>USD 15.00</td>
          <td>1</td>
        </tr>
        <tr>
          <td>28 October 2010</td>
          <td><strong>Base Backpackers</strong></td>
          <td>11:45 pm</td>
          <td><strong>JFK Int. Airport</strong></td>
          <td>11:45 pm</td>
          <td>USD 25.00</td>
          <td>1</td>
          <td>USD 15.00</td>
          <td>1</td>
        </tr>
      </tbody>
    </table>
  </div> <!--/.table-responsive-->
  </div>
</div> <!--/.row-->

<div class="row">
  <div class="col-xs-12">
    <ul class="list-inline text-right" id="bw-promotion-code">
      <li><p>Got a Promotion Code?  Enter it here:</p></li>
      <li><input type="text" id="bw-promotion-code-input"></li>
      <li><a href="#">Apply</a></li>
      <li><img class="img-centered" src="images/icon_question-mark.png"></li>
    </ul>
  </div>
</div> <!--/.row-->

<div class="row">
  <div class="col-xs-12">
    <h4 class="bw-green">Enter Traveller's Contact Details</h4>
    <hr />
  </div>
</div> <!--/.row-->

<div class="row">
<form id="bw-payment-form">
  <div class="col-xs-12 col-sm-5">
    <div class="form-group">
      <label for="bw-payment-form-first-name">First Name: <span class="booking-widget-asterisk">&#10045;</span></label>
      <input type="text" class="form-control" id="bw-payment-form-first-name" required>
    </div> <!--/.form-group-->
  </div>
  <div class="col-xs-12 col-sm-5">
    <div class="form-group">
      <label for="bw-payment-form-sur-name">Sur Name: <span class="booking-widget-asterisk">&#10045;</span></label>
      <input type="text" class="form-control" id="bw-payment-form-sur-name" required>
    </div> <!--/.form-group-->
  </div>

  <div class="col-xs-12 col-sm-5">
    <div class="form-group">
      <label for="bw-payment-form-telephone">Telephone / Mobile Number: <span class="booking-widget-asterisk">&#10045;</span></label>
      <input type="text" class="form-control" id="bw-payment-form-telephone" required>
    </div> <!--/.form-group-->
  </div>
  <div class="col-xs-12 col-sm-5">
    <div class="form-group">
      <label for="bw-payment-form-email">Email: <span class="booking-widget-asterisk">&#10045;</span></label>
      <input type="email" class="form-control" id="bw-payment-form-email" required>
    </div> <!--/.form-group-->
  </div>

  <div class="col-xs-12 col-sm-5">
    <div class="form-group">
      <label for="bw-payment-form-email-confirmation">Re-enter Email: <span class="booking-widget-asterisk">&#10045;</span></label>
      <input type="text" class="form-control" id="bw-payment-form-email-confirmation" required>
    </div> <!--/.form-group-->
  </div>
  <div class="col-xs-12 col-sm-5">
    <div class="form-group">
      <label for="bw-payment-form-house">House No: <span class="booking-widget-asterisk">&#10045;</span></label>
      <input type="text" class="form-control" id="bw-payment-form-house" required>
    </div> <!--/.form-group-->
  </div>

  <div class="col-xs-12 col-sm-5">
    <div class="form-group">
      <label for="bw-payment-form-street-no">Street No: <span class="booking-widget-asterisk">&#10045;</span></label>
      <input type="text" class="form-control" id="bw-payment-form-street-no" required>
    </div> <!--/.form-group-->
  </div>
  <div class="col-xs-12 col-sm-5">
    <div class="form-group">
      <label for="bw-payment-street-name">Street Name: <span class="booking-widget-asterisk">&#10045;</span></label>
      <input type="text" class="form-control" id="bw-payment-street-name" required>
    </div> <!--/.form-group-->
  </div>

  <div class="col-xs-12 col-sm-5">
    <div class="form-group">
      <label for="bw-payment-form-city">City: <span class="booking-widget-asterisk">&#10045;</span></label>
      <input type="text" class="form-control" id="bw-payment-form-city" required>
    </div> <!--/.form-group-->
  </div>
  <div class="col-xs-12 col-sm-5">
    <div class="form-group">
      <label for="bw-payment-state">State: <span class="booking-widget-asterisk">&#10045;</span></label>
      <input type="text" class="form-control" id="bw-payment-state" required> 
    </div> <!--/.form-group-->
  </div>

  <div class="col-xs-12 col-sm-5">
    <div class="form-group">
      <label for="bw-payment-form-pincode">Pincode: <span class="booking-widget-asterisk">&#10045;</span></label>
      <input type="text" class="form-control" id="bw-payment-form-pincode" required>
    </div> <!--/.form-group-->
  </div>
  <div class="col-xs-12 col-sm-5">
    <div class="form-group">
      <label for="bw-payment-country">Country: <span class="booking-widget-asterisk">&#10045;</span></label>
      <select class="form-control" id="bw-payment-country" required> 
        <option value="">Country...</option>
        <option value="AF">Afghanistan</option>
        <option value="AL">Albania</option>
        <option value="DZ">Algeria</option>
        <option value="AS">American Samoa</option>
        <option value="AD">Andorra</option>
        <option value="AG">Angola</option>
        <option value="AI">Anguilla</option>
        <option value="AG">Antigua &amp; Barbuda</option>
        <option value="AR">Argentina</option>
        <option value="AA">Armenia</option>
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
        <option value="BO">Bolivia</option>
        <option value="BL">Bonaire</option>
        <option value="BA">Bosnia &amp; Herzegovina</option>
        <option value="BW">Botswana</option>
        <option value="BR">Brazil</option>
        <option value="BC">British Indian Ocean Ter</option>
        <option value="BN">Brunei</option>
        <option value="BG">Bulgaria</option>
        <option value="BF">Burkina Faso</option>
        <option value="BI">Burundi</option>
        <option value="KH">Cambodia</option>
        <option value="CM">Cameroon</option>
        <option value="CA">Canada</option>
        <option value="IC">Canary Islands</option>
        <option value="CV">Cape Verde</option>
        <option value="KY">Cayman Islands</option>
        <option value="CF">Central African Republic</option>
        <option value="TD">Chad</option>
        <option value="CD">Channel Islands</option>
        <option value="CL">Chile</option>
        <option value="CN">China</option>
        <option value="CI">Christmas Island</option>
        <option value="CS">Cocos Island</option>
        <option value="CO">Colombia</option>
        <option value="CC">Comoros</option>
        <option value="CG">Congo</option>
        <option value="CK">Cook Islands</option>
        <option value="CR">Costa Rica</option>
        <option value="CT">Cote D'Ivoire</option>
        <option value="HR">Croatia</option>
        <option value="CU">Cuba</option>
        <option value="CB">Curacao</option>
        <option value="CY">Cyprus</option>
        <option value="CZ">Czech Republic</option>
        <option value="DK">Denmark</option>
        <option value="DJ">Djibouti</option>
        <option value="DM">Dominica</option>
        <option value="DO">Dominican Republic</option>
        <option value="TM">East Timor</option>
        <option value="EC">Ecuador</option>
        <option value="EG">Egypt</option>
        <option value="SV">El Salvador</option>
        <option value="GQ">Equatorial Guinea</option>
        <option value="ER">Eritrea</option>
        <option value="EE">Estonia</option>
        <option value="ET">Ethiopia</option>
        <option value="FA">Falkland Islands</option>
        <option value="FO">Faroe Islands</option>
        <option value="FJ">Fiji</option>
        <option value="FI">Finland</option>
        <option value="FR">France</option>
        <option value="GF">French Guiana</option>
        <option value="PF">French Polynesia</option>
        <option value="FS">French Southern Ter</option>
        <option value="GA">Gabon</option>
        <option value="GM">Gambia</option>
        <option value="GE">Georgia</option>
        <option value="DE">Germany</option>
        <option value="GH">Ghana</option>
        <option value="GI">Gibraltar</option>
        <option value="GB">Great Britain</option>
        <option value="GR">Greece</option>
        <option value="GL">Greenland</option>
        <option value="GD">Grenada</option>
        <option value="GP">Guadeloupe</option>
        <option value="GU">Guam</option>
        <option value="GT">Guatemala</option>
        <option value="GN">Guinea</option>
        <option value="GY">Guyana</option>
        <option value="HT">Haiti</option>
        <option value="HW">Hawaii</option>
        <option value="HN">Honduras</option>
        <option value="HK">Hong Kong</option>
        <option value="HU">Hungary</option>
        <option value="IS">Iceland</option>
        <option value="IN">India</option>
        <option value="ID">Indonesia</option>
        <option value="IA">Iran</option>
        <option value="IQ">Iraq</option>
        <option value="IR">Ireland</option>
        <option value="IM">Isle of Man</option>
        <option value="IL">Israel</option>
        <option value="IT">Italy</option>
        <option value="JM">Jamaica</option>
        <option value="JP">Japan</option>
        <option value="JO">Jordan</option>
        <option value="KZ">Kazakhstan</option>
        <option value="KE">Kenya</option>
        <option value="KI">Kiribati</option>
        <option value="NK">Korea North</option>
        <option value="KS">Korea South</option>
        <option value="KW">Kuwait</option>
        <option value="KG">Kyrgyzstan</option>
        <option value="LA">Laos</option>
        <option value="LV">Latvia</option>
        <option value="LB">Lebanon</option>
        <option value="LS">Lesotho</option>
        <option value="LR">Liberia</option>
        <option value="LY">Libya</option>
        <option value="LI">Liechtenstein</option>
        <option value="LT">Lithuania</option>
        <option value="LU">Luxembourg</option>
        <option value="MO">Macau</option>
        <option value="MK">Macedonia</option>
        <option value="MG">Madagascar</option>
        <option value="MY">Malaysia</option>
        <option value="MW">Malawi</option>
        <option value="MV">Maldives</option>
        <option value="ML">Mali</option>
        <option value="MT">Malta</option>
        <option value="MH">Marshall Islands</option>
        <option value="MQ">Martinique</option>
        <option value="MR">Mauritania</option>
        <option value="MU">Mauritius</option>
        <option value="ME">Mayotte</option>
        <option value="MX">Mexico</option>
        <option value="MI">Midway Islands</option>
        <option value="MD">Moldova</option>
        <option value="MC">Monaco</option>
        <option value="MN">Mongolia</option>
        <option value="MS">Montserrat</option>
        <option value="MA">Morocco</option>
        <option value="MZ">Mozambique</option>
        <option value="MM">Myanmar</option>
        <option value="NA">Nambia</option>
        <option value="NU">Nauru</option>
        <option value="NP">Nepal</option>
        <option value="AN">Netherland Antilles</option>
        <option value="NL">Netherlands (Holland, Europe)</option>
        <option value="NV">Nevis</option>
        <option value="NC">New Caledonia</option>
        <option value="NZ">New Zealand</option>
        <option value="NI">Nicaragua</option>
        <option value="NE">Niger</option>
        <option value="NG">Nigeria</option>
        <option value="NW">Niue</option>
        <option value="NF">Norfolk Island</option>
        <option value="NO">Norway</option>
        <option value="OM">Oman</option>
        <option value="PK">Pakistan</option>
        <option value="PW">Palau Island</option>
        <option value="PS">Palestine</option>
        <option value="PA">Panama</option>
        <option value="PG">Papua New Guinea</option>
        <option value="PY">Paraguay</option>
        <option value="PE">Peru</option>
        <option value="PH">Philippines</option>
        <option value="PO">Pitcairn Island</option>
        <option value="PL">Poland</option>
        <option value="PT">Portugal</option>
        <option value="PR">Puerto Rico</option>
        <option value="QA">Qatar</option>
        <option value="ME">Republic of Montenegro</option>
        <option value="RS">Republic of Serbia</option>
        <option value="RE">Reunion</option>
        <option value="RO">Romania</option>
        <option value="RU">Russia</option>
        <option value="RW">Rwanda</option>
        <option value="NT">St Barthelemy</option>
        <option value="EU">St Eustatius</option>
        <option value="HE">St Helena</option>
        <option value="KN">St Kitts-Nevis</option>
        <option value="LC">St Lucia</option>
        <option value="MB">St Maarten</option>
        <option value="PM">St Pierre &amp; Miquelon</option>
        <option value="VC">St Vincent &amp; Grenadines</option>
        <option value="SP">Saipan</option>
        <option value="SO">Samoa</option>
        <option value="AS">Samoa American</option>
        <option value="SM">San Marino</option>
        <option value="ST">Sao Tome &amp; Principe</option>
        <option value="SA">Saudi Arabia</option>
        <option value="SN">Senegal</option>
        <option value="RS">Serbia</option>
        <option value="SC">Seychelles</option>
        <option value="SL">Sierra Leone</option>
        <option value="SG">Singapore</option>
        <option value="SK">Slovakia</option>
        <option value="SI">Slovenia</option>
        <option value="SB">Solomon Islands</option>
        <option value="OI">Somalia</option>
        <option value="ZA">South Africa</option>
        <option value="ES">Spain</option>
        <option value="LK">Sri Lanka</option>
        <option value="SD">Sudan</option>
        <option value="SR">Suriname</option>
        <option value="SZ">Swaziland</option>
        <option value="SE">Sweden</option>
        <option value="CH">Switzerland</option>
        <option value="SY">Syria</option>
        <option value="TA">Tahiti</option>
        <option value="TW">Taiwan</option>
        <option value="TJ">Tajikistan</option>
        <option value="TZ">Tanzania</option>
        <option value="TH">Thailand</option>
        <option value="TG">Togo</option>
        <option value="TK">Tokelau</option>
        <option value="TO">Tonga</option>
        <option value="TT">Trinidad &amp; Tobago</option>
        <option value="TN">Tunisia</option>
        <option value="TR">Turkey</option>
        <option value="TU">Turkmenistan</option>
        <option value="TC">Turks &amp; Caicos Is</option>
        <option value="TV">Tuvalu</option>
        <option value="UG">Uganda</option>
        <option value="UA">Ukraine</option>
        <option value="AE">United Arab Emirates</option>
        <option value="GB">United Kingdom</option>
        <option value="US">United States of America</option>
        <option value="UY">Uruguay</option>
        <option value="UZ">Uzbekistan</option>
        <option value="VU">Vanuatu</option>
        <option value="VS">Vatican City State</option>
        <option value="VE">Venezuela</option>
        <option value="VN">Vietnam</option>
        <option value="VB">Virgin Islands (Brit)</option>
        <option value="VA">Virgin Islands (USA)</option>
        <option value="WK">Wake Island</option>
        <option value="WF">Wallis &amp; Futana Is</option>
        <option value="YE">Yemen</option>
        <option value="ZR">Zaire</option>
        <option value="ZM">Zambia</option>
        <option value="ZW">Zimbabwe</option>
      </select>
    </div> <!--/.form-group-->
  </div>
</form>
</div> <!--/.row-->

<div class="row">
  <div class="col-xs-12">
    <h4 class="bw-green">Payment Information</h4>
    <hr />
  </div>
</div> <!--/.row-->

<div class="row">
  <div class="col-xs-12 col-sm-7" id="bw-payment-options">
    <div class="radio">
      <label>
        <input type="radio" name="bw-payment-optionsRadios" id="bw-payment-credit-card" checked>
        <img src="images/payment_cards.png" alt="credit cards">
      </label>
    </div>
    <div class="radio">
      <label>
        <input type="radio" name="bw-payment-optionsRadios" id="bw-payment-paypal" value="option2">
        <img src="images/payment_paypal.png" alt="paypal">
        Save time. Checkout securely. Pay without sharing your financial information. 
      </label>
    </div> <!--/.radio-->
  </div>

  <div class="col-xs-12 col-sm-5 pull-right">
    <table class="table table-bordered" id="bw-payment-pricing-table">
      <tr>
        <td><span>Additional Baggage</span>
          <select class="form-control">
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
          </select>
        </td>
        <td></td>
        <td class="question-mark"><img class="img-centered" src="images/icon_question-mark.png"></td>
      </tr>
      <tr>
        <td>Booking Fee:</td>
        <td></td>
        <td class="question-mark"><img class="img-centered" src="images/icon_question-mark.png"></td>
      </tr>
      <tr>
        <td>Total Price:</td>
        <td>USD</td>
      </tr>
    </table>
    <a class="pull-right" href="#">Change Currency</a>
  </div>
</div> <!--/.row-->

<div class="row">
  <div class="col-xs-12">
    <h4 class="bw-green">Comments to the Operator</h4>
    <hr />
  </div>
</div> <!--/.row-->

<div class="row">
  <div class="col-xs-12 col-sm-8 col-lg-6">
    <p>Please enter your enquiries and requests to the operator</p>
    <textarea class="form-control" rows="3"></textarea>
  </div>
</div>

<hr />

<div class="row">
  <div class="col-sm-6">
    <a href="#"><img class="booking-widget-btn" src="images/button_cancel-start-again.png" alt="cancel and start again"></a>
  </div>
  <div class="col-sm-6 text-right">
    <a href="#"><img class="booking-widget-btn" src="images/button_book-now.png" alt="book now"></a>
  </div>
</div> <!--/.row-->

<!-- Javascript
    ================================================== -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>

</body>
</html>