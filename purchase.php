<script src="https://cdnjs.cloudflare.com/ajax/libs/punycode/1.4.1/punycode.min.js"></script>
<script src="https://cdn.jotfor.ms/static/prototype.forms.js" type="text/javascript"></script>
<script src="https://cdn.jotfor.ms/static/jotform.forms.js?3.3.17891" type="text/javascript"></script>
<script src="https://cdn.jotfor.ms/js/payments/paypalcomplete.js?v=3.3.17891" type="text/javascript"></script>
<script src="https://cdn.jotfor.ms/js/payments/paymentUtils.js?v=3.3.17891" type="text/javascript"></script>
<script src="https://cdn.jotfor.ms/js/libraries/promise-polyfill.js"></script>
<script src="https://cdn.jotfor.ms/js/payments/payment_form_embedded.js?v=3.3.17891" type="text/javascript"></script>
<script type="text/javascript">
   JotForm.setConditions([{"action":[{"id":"action_1581690116457","visibility":"Hide","isError":false,"field":"10"}],"id":"1581690133174","index":"0","link":"Any","priority":"0","terms":[{"id":"term_1581690116457","field":"17","operator":"isEmpty","value":"","isError":false}],"type":"field"},{"action":[{"id":"action_0_1581690045611","visibility":"Hide","isError":false,"field":"10"}],"id":"1581689801697","index":"1","link":"Any","priority":"1","terms":[{"id":"term_0_1581690045611","field":"17","operator":"equals","value":"Yes","isError":false}],"type":"field"},{"action":[{"field":"11","visibility":"Show","id":"action_1_1581689802691"}],"id":"1581689543679","index":"2","link":"Any","priority":"2","terms":[{"field":"15","operator":"equals","value":"Yes"}],"type":"field"},{"action":[{"field":"18","visibility":"Show","id":"action_0_1581945983644","isError":false}],"id":"1581689543680","index":"3","link":"Any","priority":"3","terms":[{"field":"15","operator":"equals","value":"Yes","id":"term_0_1581945983644","isError":false}],"type":"field"},{"action":[{"field":"10","visibility":"Show","id":"action_3_1581689802691"}],"id":"1581689543681","index":"4","link":"Any","priority":"4","terms":[{"field":"15","operator":"equals","value":"Yes"}],"type":"field"}]);
	JotForm.init(function(){
      setTimeout(function() {
          $('input_3').hint('ex: myname@example.com');
       }, 20);
if (window.JotForm && JotForm.accessible) $('input_18').setAttribute('tabindex',0);
if (window.JotForm && JotForm.accessible) $('input_14').setAttribute('tabindex',0);
      productID = {"0":"input_19_1001","1":"input_19_1002","2":"input_19_1003"};
      paymentType = "product";
      JotForm.setCurrencyFormat('USD',true, 'point');
      JotForm.totalCounter({"input_19_1001":{"price":"1","quantityField":"input_19_quantity_1001_0"},"input_19_1002":{"price":"5","quantityField":"input_19_quantity_1002_0"},"input_19_1003":{"price":"10","quantityField":"input_19_quantity_1003_0"}});
      $$('.form-product-custom_quantity').each(function(el, i){el.observe('blur', function(){isNaN(this.value) || this.value < 1 ? this.value = '0' : this.value = parseInt(this.value)})});
      $$('.form-product-custom_quantity').each(function(el, i){el.observe('focus', function(){this.value == 0 ? this.value = '' : this.value})});
      JotForm.handleProductLightbox();
	JotForm.newDefaultTheme = false;
      JotForm.alterTexts({"couponApply":"Apply","couponBlank":"Please enter a coupon.","couponChange":"","couponEnter":"Enter coupon","couponExpired":"Coupon is expired. Please try another one.","couponInvalid":"Coupon is invalid.","couponValid":"Coupon is valid.","shippingShipping":"Shipping","taxTax":"Tax","totalSubtotal":"Subtotal","totalTotal":"Total"}, true);
    /*INIT-END*/
	});

   JotForm.prepareCalculationsOnTheFly([null,{"name":"clickTo","qid":"1","text":"Product Order Form","type":"control_head"},{"name":"fullName2","qid":"2","text":"Full Name","type":"control_fullname"},{"name":"email3","qid":"3","text":"E-mail","type":"control_email"},{"name":"billingAddress","qid":"4","text":"Billing Address","type":"control_address"},{"name":"contactNumber","qid":"5","text":"Contact Number","type":"control_phone"},null,null,null,null,{"name":"shippingAdress","qid":"10","text":"Shipping Adress","type":"control_address"},{"name":"recipientsFull","qid":"11","text":"Recipient's Full Name","type":"control_fullname"},null,{"name":"submit","qid":"13","text":"Submit Order","type":"control_button"},{"name":"specialInstructions","qid":"14","text":"Special Instructions","type":"control_textarea"},{"name":"sendGift15","qid":"15","text":"Send Gift?","type":"control_radio"},null,{"name":"isShipping17","qid":"17","text":"Is shipping address same as billing address?","type":"control_radio"},{"name":"giftMessage","qid":"18","text":"Gift Message","type":"control_textarea"},{"name":"myProducts","qid":"19","text":"My Products","type":"control_paypalcomplete"},{"name":"paymentMethods","qid":"20","text":"Payment Methods","type":"control_paymentmethods"}]);
   setTimeout(function() {
JotForm.paymentExtrasOnTheFly([null,{"name":"clickTo","qid":"1","text":"Product Order Form","type":"control_head"},{"name":"fullName2","qid":"2","text":"Full Name","type":"control_fullname"},{"name":"email3","qid":"3","text":"E-mail","type":"control_email"},{"name":"billingAddress","qid":"4","text":"Billing Address","type":"control_address"},{"name":"contactNumber","qid":"5","text":"Contact Number","type":"control_phone"},null,null,null,null,{"name":"shippingAdress","qid":"10","text":"Shipping Adress","type":"control_address"},{"name":"recipientsFull","qid":"11","text":"Recipient's Full Name","type":"control_fullname"},null,{"name":"submit","qid":"13","text":"Submit Order","type":"control_button"},{"name":"specialInstructions","qid":"14","text":"Special Instructions","type":"control_textarea"},{"name":"sendGift15","qid":"15","text":"Send Gift?","type":"control_radio"},null,{"name":"isShipping17","qid":"17","text":"Is shipping address same as billing address?","type":"control_radio"},{"name":"giftMessage","qid":"18","text":"Gift Message","type":"control_textarea"},{"name":"myProducts","qid":"19","text":"My Products","type":"control_paypalcomplete"},{"name":"paymentMethods","qid":"20","text":"Payment Methods","type":"control_paymentmethods"}]);}, 20); 
</script>
<link href="https://cdn.jotfor.ms/static/formCss.css?3.3.17891" rel="stylesheet" type="text/css" />
<link type="text/css" media="print" rel="stylesheet" href="https://cdn.jotfor.ms/css/printForm.css?3.3.17891" />
<link type="text/css" rel="stylesheet" href="https://cdn.jotfor.ms/css/styles/nova.css?3.3.17891" />
<link type="text/css" rel="stylesheet" href="https://cdn.jotfor.ms/themes/CSS/566a91c2977cdfcd478b4567.css?themeRevisionID=5dca5ac9a5e86d17235d90c1"/>
<link type="text/css" rel="stylesheet" href="https://cdn.jotfor.ms/css/styles/payment/styles.css?3.3.17891" />
<style type="text/css">
@import (css) '@{buttonFontLink}';

    .form-label-left{
        width:150px;
    }
    .form-line{
        padding-top:12px;
        padding-bottom:12px;
    }
    .form-label-right{
        width:150px;
    }
    .form-all{
        width:690px;
        color:#555 !important;
        font-family:"Lucida Grande", "Lucida Sans Unicode", "Lucida Sans", Verdana, sans-serif;
        font-size:14px;
    }
    .form-radio-item label, .form-checkbox-item label, .form-grading-label, .form-header{
        color: false;
    }

</style>

<style type="text/css" id="form-designer-style">
    /* Injected CSS Code */
.form-label.form-label-auto {
        
      display: block;
      float: none;
      text-align: left;
      width: 100%;
    
      }
    /* Injected CSS Code */
</style>
<?php include("HEAD.PHP"); ?>
<body>
	<!-- header-section-starts -->  
     <?php include("top-nav.php"); ?>
		
	<div class="full">
    <div class="col-md-4 top-nav" style="position:relative;background: #464b64;">
			<?php include("left-nav.php"); ?>
		

    <div class="col-md-8 main">
	<br>
	<br>
<form action="/action_page.php">
  <div class="container">
    <h1 style="text-align:center; font-weight:600; font-size:50px;">Register</h1>
    <p style="text-align:center; font-weight:600;">Please fill Your Seller Profile.</p>
    <hr>

    <ul class="form-section page-section">
      <li id="cid_1" class="form-input-wide" data-type="control_head">
        <div class="class="form-section page-section"">
          <div class="class="form-section page-section">
            <h1 id="header_1" class="form-header" data-component="header">
              Product Order Form
            </h1>
          </div>
        
      </li>
      <li class="form-line" data-type="control_fullname" id="id_2">
        <label class="form-label form-label-top" id="label_2" for="first_2"> Full Name </label>
        <div id="cid_2" class="form-input-wide">
          <div data-wrapper-react="true" class="form-input-wide">
            <span class="form-sub-label-container " style="vertical-align:top" data-input-type="first">
              <input type="text" id="first_2" name="q2_fullName2[first]" class="form-textbox" size="10" value="" data-component="first" aria-labelledby="label_2 sublabel_2_first" />
              <label class="form-sub-label" for="first_2" id="sublabel_2_first" style="min-height:13px" aria-hidden="false"> First Name </label>
            </span>
            <span class="form-sub-label-container " style="vertical-align:top" data-input-type="last">
              <input type="text" id="last_2" name="q2_fullName2[last]" class="form-textbox" size="15" value="" data-component="last" aria-labelledby="label_2 sublabel_2_last" />
              <label class="form-sub-label" for="last_2" id="sublabel_2_last" style="min-height:13px" aria-hidden="false"> Last Name </label>
            </span>
          </div>
        </div>
      </li>
      <li class="form-line" data-type="control_email" id="id_3" class="form-input-wide">
        <label class="form-label form-label-top" id="label_3" for="input_3"> E-mail </label>
        <div id="cid_3" class="form-input-wide">
          <input type="email" id="input_3" name="q3_email3" class="form-textbox validate[Email]" size="30" value="" placeholder="ex: myname@example.com" data-component="email" aria-labelledby="label_3" />
        </div>
      </li>
      <li class="form-line" data-type="control_phone" id="id_5">
        <label class="form-label form-label-top" id="label_5" for="input_5_area"> Contact Number </label>
        <div id="cid_5" class="form-input-wide">
          <div data-wrapper-react="true" class="form-input-wide">
            <span class="form-sub-label-container " style="vertical-align:top" data-input-type="areaCode">
              <input type="tel" id="input_5_area" name="q5_contactNumber[area]" class="form-textbox" size="6" value="" data-component="areaCode" aria-labelledby="label_5 sublabel_5_area" />
              <span class="phone-separate" aria-hidden="true">
                 -
              </span>
              <label class="form-sub-label" for="input_5_area" id="sublabel_5_area" style="min-height:13px" aria-hidden="false"> Area Code </label>
            </span>
            <span class="form-sub-label-container " style="vertical-align:top" data-input-type="phone">
              <input type="tel" id="input_5_phone" name="q5_contactNumber[phone]" class="form-textbox" size="12" value="" data-component="phone" aria-labelledby="label_5 sublabel_5_phone" />
              <label class="form-sub-label" for="input_5_phone" id="sublabel_5_phone" style="min-height:13px" aria-hidden="false"> Phone Number </label>
            </span>
          </div>
        </div>
      </li>
      <li class="form-line" data-type="control_address" id="id_4">
        <label class="form-label form-label-top" id="label_4" for="input_4_addr_line1"> Billing Address </label>
        <div id="cid_4" class="form-input-wide">
          <div summary="" class="form-address-table jsTest-addressField">
            <div class="form-address-line-wrapper jsTest-address-line-wrapperField">
              <span colSpan="2" class="form-address-line form-address-street-line jsTest-address-lineField">
                <span class="form-sub-label-container " style="vertical-align:top">
                  <input type="text" id="input_4_addr_line1" name="q4_billingAddress[addr_line1]" class="form-textbox form-address-line" value="" data-component="address_line_1" aria-labelledby="label_4 sublabel_4_addr_line1" required="" />
                  <label class="form-sub-label" for="input_4_addr_line1" id="sublabel_4_addr_line1" style="min-height:13px" aria-hidden="false"> Street Address </label>
                </span>
              </span>
            </div>
            <div class="form-address-line-wrapper jsTest-address-line-wrapperField">
              <span colSpan="2" class="form-address-line form-address-street-line jsTest-address-lineField">
                <span class="form-sub-label-container " style="vertical-align:top">
                  <input type="text" id="input_4_addr_line2" name="q4_billingAddress[addr_line2]" class="form-textbox form-address-line" size="46" value="" data-component="address_line_2" aria-labelledby="label_4 sublabel_4_addr_line2" />
                  <label class="form-sub-label" for="input_4_addr_line2" id="sublabel_4_addr_line2" style="min-height:13px" aria-hidden="false"> Street Address Line 2 </label>
                </span>
              </span>
            </div>
            <div class="form-address-line-wrapper jsTest-address-line-wrapperField">
              <span class="form-address-line form-address-city-line jsTest-address-lineField">
                <span class="form-sub-label-container " style="vertical-align:top">
                  <input type="text" id="input_4_city" name="q4_billingAddress[city]" class="form-textbox form-address-city" size="21" value="" data-component="city" aria-labelledby="label_4 sublabel_4_city" required="" />
                  <label class="form-sub-label" for="input_4_city" id="sublabel_4_city" style="min-height:13px" aria-hidden="false"> City </label>
                </span>
              </span>
              <span class="form-address-line form-address-state-line jsTest-address-lineField">
                <span class="form-sub-label-container " style="vertical-align:top">
                  <input type="text" id="input_4_state" name="q4_billingAddress[state]" class="form-textbox form-address-state" size="22" value="" data-component="state" aria-labelledby="label_4 sublabel_4_state" required="" />
                  <label class="form-sub-label" for="input_4_state" id="sublabel_4_state" style="min-height:13px" aria-hidden="false"> State / Province </label>
                </span>
              </span>
            </div>
            <div class="form-address-line-wrapper jsTest-address-line-wrapperField">
              <span class="form-address-line form-address-zip-line jsTest-address-lineField">
                <span class="form-sub-label-container " style="vertical-align:top">
                  <input type="text" id="input_4_postal" name="q4_billingAddress[postal]" class="form-textbox form-address-postal" size="10" value="" data-component="zip" aria-labelledby="label_4 sublabel_4_postal" required="" />
                  <label class="form-sub-label" for="input_4_postal" id="sublabel_4_postal" style="min-height:13px" aria-hidden="false"> Postal / Zip Code </label>
                </span>
              </span>
              <span class="form-address-line form-address-country-line jsTest-address-lineField">
                <span class="form-sub-label-container " style="vertical-align:top">
                  <select class="form-dropdown form-address-country noTranslate" name="q4_billingAddress[country]" id="input_4_country" data-component="country" required="" aria-labelledby="label_4 sublabel_4_country">
                    <option value=""> Please Select </option>
                    <option value="United States"> United States </option>
                    <option value="Afghanistan"> Afghanistan </option>
                    <option value="Albania"> Albania </option>
                    <option value="Algeria"> Algeria </option>
                    <option value="American Samoa"> American Samoa </option>
                    <option value="Andorra"> Andorra </option>
                    <option value="Angola"> Angola </option>
                    <option value="Anguilla"> Anguilla </option>
                    <option value="Antigua and Barbuda"> Antigua and Barbuda </option>
                    <option value="Argentina"> Argentina </option>
                    <option value="Armenia"> Armenia </option>
                    <option value="Aruba"> Aruba </option>
                    <option value="Australia"> Australia </option>
                    <option value="Austria"> Austria </option>
                    <option value="Azerbaijan"> Azerbaijan </option>
                    <option value="The Bahamas"> The Bahamas </option>
                    <option value="Bahrain"> Bahrain </option>
                    <option value="Bangladesh"> Bangladesh </option>
                    <option value="Barbados"> Barbados </option>
                    <option value="Belarus"> Belarus </option>
                    <option value="Belgium"> Belgium </option>
                    <option value="Belize"> Belize </option>
                    <option value="Benin"> Benin </option>
                    <option value="Bermuda"> Bermuda </option>
                    <option value="Bhutan"> Bhutan </option>
                    <option value="Bolivia"> Bolivia </option>
                    <option value="Bosnia and Herzegovina"> Bosnia and Herzegovina </option>
                    <option value="Botswana"> Botswana </option>
                    <option value="Brazil"> Brazil </option>
                    <option value="Brunei"> Brunei </option>
                    <option value="Bulgaria"> Bulgaria </option>
                    <option value="Burkina Faso"> Burkina Faso </option>
                    <option value="Burundi"> Burundi </option>
                    <option value="Cambodia"> Cambodia </option>
                    <option value="Cameroon"> Cameroon </option>
                    <option value="Canada"> Canada </option>
                    <option value="Cape Verde"> Cape Verde </option>
                    <option value="Cayman Islands"> Cayman Islands </option>
                    <option value="Central African Republic"> Central African Republic </option>
                    <option value="Chad"> Chad </option>
                    <option value="Chile"> Chile </option>
                    <option value="China"> China </option>
                    <option value="Christmas Island"> Christmas Island </option>
                    <option value="Cocos (Keeling) Islands"> Cocos (Keeling) Islands </option>
                    <option value="Colombia"> Colombia </option>
                    <option value="Comoros"> Comoros </option>
                    <option value="Congo"> Congo </option>
                    <option value="Cook Islands"> Cook Islands </option>
                    <option value="Costa Rica"> Costa Rica </option>
                    <option value="Cote d&#x27;Ivoire"> Cote d&#x27;Ivoire </option>
                    <option value="Croatia"> Croatia </option>
                    <option value="Cuba"> Cuba </option>
                    <option value="Curacao"> Curacao </option>
                    <option value="Cyprus"> Cyprus </option>
                    <option value="Czech Republic"> Czech Republic </option>
                    <option value="Democratic Republic of the Congo"> Democratic Republic of the Congo </option>
                    <option value="Denmark"> Denmark </option>
                    <option value="Djibouti"> Djibouti </option>
                    <option value="Dominica"> Dominica </option>
                    <option value="Dominican Republic"> Dominican Republic </option>
                    <option value="Ecuador"> Ecuador </option>
                    <option value="Egypt"> Egypt </option>
                    <option value="El Salvador"> El Salvador </option>
                    <option value="Equatorial Guinea"> Equatorial Guinea </option>
                    <option value="Eritrea"> Eritrea </option>
                    <option value="Estonia"> Estonia </option>
                    <option value="Ethiopia"> Ethiopia </option>
                    <option value="Falkland Islands"> Falkland Islands </option>
                    <option value="Faroe Islands"> Faroe Islands </option>
                    <option value="Fiji"> Fiji </option>
                    <option value="Finland"> Finland </option>
                    <option value="France"> France </option>
                    <option value="French Polynesia"> French Polynesia </option>
                    <option value="Gabon"> Gabon </option>
                    <option value="The Gambia"> The Gambia </option>
                    <option value="Georgia"> Georgia </option>
                    <option value="Germany"> Germany </option>
                    <option value="Ghana"> Ghana </option>
                    <option value="Gibraltar"> Gibraltar </option>
                    <option value="Greece"> Greece </option>
                    <option value="Greenland"> Greenland </option>
                    <option value="Grenada"> Grenada </option>
                    <option value="Guadeloupe"> Guadeloupe </option>
                    <option value="Guam"> Guam </option>
                    <option value="Guatemala"> Guatemala </option>
                    <option value="Guernsey"> Guernsey </option>
                    <option value="Guinea"> Guinea </option>
                    <option value="Guinea-Bissau"> Guinea-Bissau </option>
                    <option value="Guyana"> Guyana </option>
                    <option value="Haiti"> Haiti </option>
                    <option value="Honduras"> Honduras </option>
                    <option value="Hong Kong"> Hong Kong </option>
                    <option value="Hungary"> Hungary </option>
                    <option value="Iceland"> Iceland </option>
                    <option value="India"> India </option>
                    <option value="Indonesia"> Indonesia </option>
                    <option value="Iran"> Iran </option>
                    <option value="Iraq"> Iraq </option>
                    <option value="Ireland"> Ireland </option>
                    <option value="Israel"> Israel </option>
                    <option value="Italy"> Italy </option>
                    <option value="Jamaica"> Jamaica </option>
                    <option value="Japan"> Japan </option>
                    <option value="Jersey"> Jersey </option>
                    <option value="Jordan"> Jordan </option>
                    <option value="Kazakhstan"> Kazakhstan </option>
                    <option value="Kenya"> Kenya </option>
                    <option value="Kiribati"> Kiribati </option>
                    <option value="North Korea"> North Korea </option>
                    <option value="South Korea"> South Korea </option>
                    <option value="Kosovo"> Kosovo </option>
                    <option value="Kuwait"> Kuwait </option>
                    <option value="Kyrgyzstan"> Kyrgyzstan </option>
                    <option value="Laos"> Laos </option>
                    <option value="Latvia"> Latvia </option>
                    <option value="Lebanon"> Lebanon </option>
                    <option value="Lesotho"> Lesotho </option>
                    <option value="Liberia"> Liberia </option>
                    <option value="Libya"> Libya </option>
                    <option value="Liechtenstein"> Liechtenstein </option>
                    <option value="Lithuania"> Lithuania </option>
                    <option value="Luxembourg"> Luxembourg </option>
                    <option value="Macau"> Macau </option>
                    <option value="Macedonia"> Macedonia </option>
                    <option value="Madagascar"> Madagascar </option>
                    <option value="Malawi"> Malawi </option>
                    <option value="Malaysia"> Malaysia </option>
                    <option value="Maldives"> Maldives </option>
                    <option value="Mali"> Mali </option>
                    <option value="Malta"> Malta </option>
                    <option value="Marshall Islands"> Marshall Islands </option>
                    <option value="Martinique"> Martinique </option>
                    <option value="Mauritania"> Mauritania </option>
                    <option value="Mauritius"> Mauritius </option>
                    <option value="Mayotte"> Mayotte </option>
                    <option value="Mexico"> Mexico </option>
                    <option value="Micronesia"> Micronesia </option>
                    <option value="Moldova"> Moldova </option>
                    <option value="Monaco"> Monaco </option>
                    <option value="Mongolia"> Mongolia </option>
                    <option value="Montenegro"> Montenegro </option>
                    <option value="Montserrat"> Montserrat </option>
                    <option value="Morocco"> Morocco </option>
                    <option value="Mozambique"> Mozambique </option>
                    <option value="Myanmar"> Myanmar </option>
                    <option value="Nagorno-Karabakh"> Nagorno-Karabakh </option>
                    <option value="Namibia"> Namibia </option>
                    <option value="Nauru"> Nauru </option>
                    <option value="Nepal"> Nepal </option>
                    <option value="Netherlands"> Netherlands </option>
                    <option value="Netherlands Antilles"> Netherlands Antilles </option>
                    <option value="New Caledonia"> New Caledonia </option>
                    <option value="New Zealand"> New Zealand </option>
                    <option value="Nicaragua"> Nicaragua </option>
                    <option value="Niger"> Niger </option>
                    <option value="Nigeria"> Nigeria </option>
                    <option value="Niue"> Niue </option>
                    <option value="Norfolk Island"> Norfolk Island </option>
                    <option value="Turkish Republic of Northern Cyprus"> Turkish Republic of Northern Cyprus </option>
                    <option value="Northern Mariana"> Northern Mariana </option>
                    <option value="Norway"> Norway </option>
                    <option value="Oman"> Oman </option>
                    <option value="Pakistan"> Pakistan </option>
                    <option value="Palau"> Palau </option>
                    <option value="Palestine"> Palestine </option>
                    <option value="Panama"> Panama </option>
                    <option value="Papua New Guinea"> Papua New Guinea </option>
                    <option value="Paraguay"> Paraguay </option>
                    <option value="Peru"> Peru </option>
                    <option value="Philippines"> Philippines </option>
                    <option value="Pitcairn Islands"> Pitcairn Islands </option>
                    <option value="Poland"> Poland </option>
                    <option value="Portugal"> Portugal </option>
                    <option value="Puerto Rico"> Puerto Rico </option>
                    <option value="Qatar"> Qatar </option>
                    <option value="Republic of the Congo"> Republic of the Congo </option>
                    <option value="Romania"> Romania </option>
                    <option value="Russia"> Russia </option>
                    <option value="Rwanda"> Rwanda </option>
                    <option value="Saint Barthelemy"> Saint Barthelemy </option>
                    <option value="Saint Helena"> Saint Helena </option>
                    <option value="Saint Kitts and Nevis"> Saint Kitts and Nevis </option>
                    <option value="Saint Lucia"> Saint Lucia </option>
                    <option value="Saint Martin"> Saint Martin </option>
                    <option value="Saint Pierre and Miquelon"> Saint Pierre and Miquelon </option>
                    <option value="Saint Vincent and the Grenadines"> Saint Vincent and the Grenadines </option>
                    <option value="Samoa"> Samoa </option>
                    <option value="San Marino"> San Marino </option>
                    <option value="Sao Tome and Principe"> Sao Tome and Principe </option>
                    <option value="Saudi Arabia"> Saudi Arabia </option>
                    <option value="Senegal"> Senegal </option>
                    <option value="Serbia"> Serbia </option>
                    <option value="Seychelles"> Seychelles </option>
                    <option value="Sierra Leone"> Sierra Leone </option>
                    <option value="Singapore"> Singapore </option>
                    <option value="Slovakia"> Slovakia </option>
                    <option value="Slovenia"> Slovenia </option>
                    <option value="Solomon Islands"> Solomon Islands </option>
                    <option value="Somalia"> Somalia </option>
                    <option value="Somaliland"> Somaliland </option>
                    <option value="South Africa"> South Africa </option>
                    <option value="South Ossetia"> South Ossetia </option>
                    <option value="South Sudan"> South Sudan </option>
                    <option value="Spain"> Spain </option>
                    <option value="Sri Lanka"> Sri Lanka </option>
                    <option value="Sudan"> Sudan </option>
                    <option value="Suriname"> Suriname </option>
                    <option value="Svalbard"> Svalbard </option>
                    <option value="eSwatini"> eSwatini </option>
                    <option value="Sweden"> Sweden </option>
                    <option value="Switzerland"> Switzerland </option>
                    <option value="Syria"> Syria </option>
                    <option value="Taiwan"> Taiwan </option>
                    <option value="Tajikistan"> Tajikistan </option>
                    <option value="Tanzania"> Tanzania </option>
                    <option value="Thailand"> Thailand </option>
                    <option value="Timor-Leste"> Timor-Leste </option>
                    <option value="Togo"> Togo </option>
                    <option value="Tokelau"> Tokelau </option>
                    <option value="Tonga"> Tonga </option>
                    <option value="Transnistria Pridnestrovie"> Transnistria Pridnestrovie </option>
                    <option value="Trinidad and Tobago"> Trinidad and Tobago </option>
                    <option value="Tristan da Cunha"> Tristan da Cunha </option>
                    <option value="Tunisia"> Tunisia </option>
                    <option value="Turkey"> Turkey </option>
                    <option value="Turkmenistan"> Turkmenistan </option>
                    <option value="Turks and Caicos Islands"> Turks and Caicos Islands </option>
                    <option value="Tuvalu"> Tuvalu </option>
                    <option value="Uganda"> Uganda </option>
                    <option value="Ukraine"> Ukraine </option>
                    <option value="United Arab Emirates"> United Arab Emirates </option>
                    <option value="United Kingdom"> United Kingdom </option>
                    <option value="Uruguay"> Uruguay </option>
                    <option value="Uzbekistan"> Uzbekistan </option>
                    <option value="Vanuatu"> Vanuatu </option>
                    <option value="Vatican City"> Vatican City </option>
                    <option value="Venezuela"> Venezuela </option>
                    <option value="Vietnam"> Vietnam </option>
                    <option value="British Virgin Islands"> British Virgin Islands </option>
                    <option value="Isle of Man"> Isle of Man </option>
                    <option value="US Virgin Islands"> US Virgin Islands </option>
                    <option value="Wallis and Futuna"> Wallis and Futuna </option>
                    <option value="Western Sahara"> Western Sahara </option>
                    <option value="Yemen"> Yemen </option>
                    <option value="Zambia"> Zambia </option>
                    <option value="Zimbabwe"> Zimbabwe </option>
                    <option value="other"> Other </option>
                  </select>
                  <label class="form-sub-label" for="input_4_country" id="sublabel_4_country" style="min-height:13px" aria-hidden="false"> Country </label>
                </span>
              </span>
            </div>
          </div>
        </div>
      </li>
      <li class="form-line" data-type="control_radio" id="id_17">
        <label class="form-label form-label-top form-label-auto" id="label_17" for="input_17"> Is shipping address same as billing address? </label>
        <div id="cid_17" class="form-input-wide">
          <div class="form-single-column" role="group" aria-labelledby="label_17" data-component="radio">
            <span class="form-radio-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <input type="radio" class="form-radio" id="input_17_0" name="q17_isShipping17" value="Yes" />
              <label id="label_input_17_0" for="input_17_0"> Yes </label>
            </span>
            <span class="form-radio-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <input type="radio" class="form-radio" id="input_17_1" name="q17_isShipping17" value="No" />
              <label id="label_input_17_1" for="input_17_1"> No </label>
            </span>
          </div>
        </div>
      </li>
      <li class="form-line form-field-hidden" style="display:none;" data-type="control_address" id="id_10">
        <label class="form-label form-label-top" id="label_10" for="input_10undefined"> Shipping Adress </label>
        <div id="cid_10" class="form-input-wide">
          <div summary="" class="form-address-table jsTest-addressField">
            <div class="form-address-line-wrapper jsTest-address-line-wrapperField">
              <span colSpan="2" class="form-address-line form-address-street-line jsTest-address-lineField">
                <span class="form-sub-label-container " style="vertical-align:top">
                  <input type="text" id="input_10_addr_line1" name="q10_shippingAdress[addr_line1]" class="form-textbox form-address-line" value="" data-component="address_line_1" aria-labelledby="label_10 sublabel_10_addr_line1" />
                  <label class="form-sub-label" for="input_10_addr_line1" id="sublabel_10_addr_line1" style="min-height:13px" aria-hidden="false"> Street Address </label>
                </span>
              </span>
            </div>
            <div class="form-address-line-wrapper jsTest-address-line-wrapperField">
              <span colSpan="2" class="form-address-line form-address-street-line jsTest-address-lineField">
                <span class="form-sub-label-container " style="vertical-align:top">
                  <input type="text" id="input_10_addr_line2" name="q10_shippingAdress[addr_line2]" class="form-textbox form-address-line" size="46" value="" data-component="address_line_2" aria-labelledby="label_10 sublabel_10_addr_line2" />
                  <label class="form-sub-label" for="input_10_addr_line2" id="sublabel_10_addr_line2" style="min-height:13px" aria-hidden="false"> Street Address Line 2 </label>
                </span>
              </span>
            </div>
            <div class="form-address-line-wrapper jsTest-address-line-wrapperField">
              <span class="form-address-line form-address-city-line jsTest-address-lineField">
                <span class="form-sub-label-container " style="vertical-align:top">
                  <input type="text" id="input_10_city" name="q10_shippingAdress[city]" class="form-textbox form-address-city" size="21" value="" data-component="city" aria-labelledby="label_10 sublabel_10_city" />
                  <label class="form-sub-label" for="input_10_city" id="sublabel_10_city" style="min-height:13px" aria-hidden="false"> City </label>
                </span>
              </span>
              <span class="form-address-line form-address-state-line jsTest-address-lineField">
                <span class="form-sub-label-container " style="vertical-align:top">
                  <input type="text" id="input_10_state" name="q10_shippingAdress[state]" class="form-textbox form-address-state" size="22" value="" data-component="state" aria-labelledby="label_10 sublabel_10_state" />
                  <label class="form-sub-label" for="input_10_state" id="sublabel_10_state" style="min-height:13px" aria-hidden="false"> State / Province </label>
                </span>
              </span>
            </div>
            <div class="form-address-line-wrapper jsTest-address-line-wrapperField">
              <span class="form-address-line form-address-zip-line jsTest-address-lineField">
                <span class="form-sub-label-container " style="vertical-align:top">
                  <input type="text" id="input_10_postal" name="q10_shippingAdress[postal]" class="form-textbox form-address-postal" size="10" value="" data-component="zip" aria-labelledby="label_10 sublabel_10_postal" />
                  <label class="form-sub-label" for="input_10_postal" id="sublabel_10_postal" style="min-height:13px" aria-hidden="false"> Postal / Zip Code </label>
                </span>
              </span>
              <span class="form-address-line form-address-country-line jsTest-address-lineField">
                <span class="form-sub-label-container " style="vertical-align:top">
                  <select class="form-dropdown form-address-country noTranslate" name="q10_shippingAdress[country]" id="input_10_country" data-component="country" required="" aria-labelledby="label_10 sublabel_10_country">
                    <option value=""> Please Select </option>
                    <option value="United States"> United States </option>
                    <option value="Afghanistan"> Afghanistan </option>
                    <option value="Albania"> Albania </option>
                    <option value="Algeria"> Algeria </option>
                    <option value="American Samoa"> American Samoa </option>
                    <option value="Andorra"> Andorra </option>
                    <option value="Angola"> Angola </option>
                    <option value="Anguilla"> Anguilla </option>
                    <option value="Antigua and Barbuda"> Antigua and Barbuda </option>
                    <option value="Argentina"> Argentina </option>
                    <option value="Armenia"> Armenia </option>
                    <option value="Aruba"> Aruba </option>
                    <option value="Australia"> Australia </option>
                    <option value="Austria"> Austria </option>
                    <option value="Azerbaijan"> Azerbaijan </option>
                    <option value="The Bahamas"> The Bahamas </option>
                    <option value="Bahrain"> Bahrain </option>
                    <option value="Bangladesh"> Bangladesh </option>
                    <option value="Barbados"> Barbados </option>
                    <option value="Belarus"> Belarus </option>
                    <option value="Belgium"> Belgium </option>
                    <option value="Belize"> Belize </option>
                    <option value="Benin"> Benin </option>
                    <option value="Bermuda"> Bermuda </option>
                    <option value="Bhutan"> Bhutan </option>
                    <option value="Bolivia"> Bolivia </option>
                    <option value="Bosnia and Herzegovina"> Bosnia and Herzegovina </option>
                    <option value="Botswana"> Botswana </option>
                    <option value="Brazil"> Brazil </option>
                    <option value="Brunei"> Brunei </option>
                    <option value="Bulgaria"> Bulgaria </option>
                    <option value="Burkina Faso"> Burkina Faso </option>
                    <option value="Burundi"> Burundi </option>
                    <option value="Cambodia"> Cambodia </option>
                    <option value="Cameroon"> Cameroon </option>
                    <option value="Canada"> Canada </option>
                    <option value="Cape Verde"> Cape Verde </option>
                    <option value="Cayman Islands"> Cayman Islands </option>
                    <option value="Central African Republic"> Central African Republic </option>
                    <option value="Chad"> Chad </option>
                    <option value="Chile"> Chile </option>
                    <option value="China"> China </option>
                    <option value="Christmas Island"> Christmas Island </option>
                    <option value="Cocos (Keeling) Islands"> Cocos (Keeling) Islands </option>
                    <option value="Colombia"> Colombia </option>
                    <option value="Comoros"> Comoros </option>
                    <option value="Congo"> Congo </option>
                    <option value="Cook Islands"> Cook Islands </option>
                    <option value="Costa Rica"> Costa Rica </option>
                    <option value="Cote d&#x27;Ivoire"> Cote d&#x27;Ivoire </option>
                    <option value="Croatia"> Croatia </option>
                    <option value="Cuba"> Cuba </option>
                    <option value="Curacao"> Curacao </option>
                    <option value="Cyprus"> Cyprus </option>
                    <option value="Czech Republic"> Czech Republic </option>
                    <option value="Democratic Republic of the Congo"> Democratic Republic of the Congo </option>
                    <option value="Denmark"> Denmark </option>
                    <option value="Djibouti"> Djibouti </option>
                    <option value="Dominica"> Dominica </option>
                    <option value="Dominican Republic"> Dominican Republic </option>
                    <option value="Ecuador"> Ecuador </option>
                    <option value="Egypt"> Egypt </option>
                    <option value="El Salvador"> El Salvador </option>
                    <option value="Equatorial Guinea"> Equatorial Guinea </option>
                    <option value="Eritrea"> Eritrea </option>
                    <option value="Estonia"> Estonia </option>
                    <option value="Ethiopia"> Ethiopia </option>
                    <option value="Falkland Islands"> Falkland Islands </option>
                    <option value="Faroe Islands"> Faroe Islands </option>
                    <option value="Fiji"> Fiji </option>
                    <option value="Finland"> Finland </option>
                    <option value="France"> France </option>
                    <option value="French Polynesia"> French Polynesia </option>
                    <option value="Gabon"> Gabon </option>
                    <option value="The Gambia"> The Gambia </option>
                    <option value="Georgia"> Georgia </option>
                    <option value="Germany"> Germany </option>
                    <option value="Ghana"> Ghana </option>
                    <option value="Gibraltar"> Gibraltar </option>
                    <option value="Greece"> Greece </option>
                    <option value="Greenland"> Greenland </option>
                    <option value="Grenada"> Grenada </option>
                    <option value="Guadeloupe"> Guadeloupe </option>
                    <option value="Guam"> Guam </option>
                    <option value="Guatemala"> Guatemala </option>
                    <option value="Guernsey"> Guernsey </option>
                    <option value="Guinea"> Guinea </option>
                    <option value="Guinea-Bissau"> Guinea-Bissau </option>
                    <option value="Guyana"> Guyana </option>
                    <option value="Haiti"> Haiti </option>
                    <option value="Honduras"> Honduras </option>
                    <option value="Hong Kong"> Hong Kong </option>
                    <option value="Hungary"> Hungary </option>
                    <option value="Iceland"> Iceland </option>
                    <option value="India"> India </option>
                    <option value="Indonesia"> Indonesia </option>
                    <option value="Iran"> Iran </option>
                    <option value="Iraq"> Iraq </option>
                    <option value="Ireland"> Ireland </option>
                    <option value="Israel"> Israel </option>
                    <option value="Italy"> Italy </option>
                    <option value="Jamaica"> Jamaica </option>
                    <option value="Japan"> Japan </option>
                    <option value="Jersey"> Jersey </option>
                    <option value="Jordan"> Jordan </option>
                    <option value="Kazakhstan"> Kazakhstan </option>
                    <option value="Kenya"> Kenya </option>
                    <option value="Kiribati"> Kiribati </option>
                    <option value="North Korea"> North Korea </option>
                    <option value="South Korea"> South Korea </option>
                    <option value="Kosovo"> Kosovo </option>
                    <option value="Kuwait"> Kuwait </option>
                    <option value="Kyrgyzstan"> Kyrgyzstan </option>
                    <option value="Laos"> Laos </option>
                    <option value="Latvia"> Latvia </option>
                    <option value="Lebanon"> Lebanon </option>
                    <option value="Lesotho"> Lesotho </option>
                    <option value="Liberia"> Liberia </option>
                    <option value="Libya"> Libya </option>
                    <option value="Liechtenstein"> Liechtenstein </option>
                    <option value="Lithuania"> Lithuania </option>
                    <option value="Luxembourg"> Luxembourg </option>
                    <option value="Macau"> Macau </option>
                    <option value="Macedonia"> Macedonia </option>
                    <option value="Madagascar"> Madagascar </option>
                    <option value="Malawi"> Malawi </option>
                    <option value="Malaysia"> Malaysia </option>
                    <option value="Maldives"> Maldives </option>
                    <option value="Mali"> Mali </option>
                    <option value="Malta"> Malta </option>
                    <option value="Marshall Islands"> Marshall Islands </option>
                    <option value="Martinique"> Martinique </option>
                    <option value="Mauritania"> Mauritania </option>
                    <option value="Mauritius"> Mauritius </option>
                    <option value="Mayotte"> Mayotte </option>
                    <option value="Mexico"> Mexico </option>
                    <option value="Micronesia"> Micronesia </option>
                    <option value="Moldova"> Moldova </option>
                    <option value="Monaco"> Monaco </option>
                    <option value="Mongolia"> Mongolia </option>
                    <option value="Montenegro"> Montenegro </option>
                    <option value="Montserrat"> Montserrat </option>
                    <option value="Morocco"> Morocco </option>
                    <option value="Mozambique"> Mozambique </option>
                    <option value="Myanmar"> Myanmar </option>
                    <option value="Nagorno-Karabakh"> Nagorno-Karabakh </option>
                    <option value="Namibia"> Namibia </option>
                    <option value="Nauru"> Nauru </option>
                    <option value="Nepal"> Nepal </option>
                    <option value="Netherlands"> Netherlands </option>
                    <option value="Netherlands Antilles"> Netherlands Antilles </option>
                    <option value="New Caledonia"> New Caledonia </option>
                    <option value="New Zealand"> New Zealand </option>
                    <option value="Nicaragua"> Nicaragua </option>
                    <option value="Niger"> Niger </option>
                    <option value="Nigeria"> Nigeria </option>
                    <option value="Niue"> Niue </option>
                    <option value="Norfolk Island"> Norfolk Island </option>
                    <option value="Turkish Republic of Northern Cyprus"> Turkish Republic of Northern Cyprus </option>
                    <option value="Northern Mariana"> Northern Mariana </option>
                    <option value="Norway"> Norway </option>
                    <option value="Oman"> Oman </option>
                    <option value="Pakistan"> Pakistan </option>
                    <option value="Palau"> Palau </option>
                    <option value="Palestine"> Palestine </option>
                    <option value="Panama"> Panama </option>
                    <option value="Papua New Guinea"> Papua New Guinea </option>
                    <option value="Paraguay"> Paraguay </option>
                    <option value="Peru"> Peru </option>
                    <option value="Philippines"> Philippines </option>
                    <option value="Pitcairn Islands"> Pitcairn Islands </option>
                    <option value="Poland"> Poland </option>
                    <option value="Portugal"> Portugal </option>
                    <option value="Puerto Rico"> Puerto Rico </option>
                    <option value="Qatar"> Qatar </option>
                    <option value="Republic of the Congo"> Republic of the Congo </option>
                    <option value="Romania"> Romania </option>
                    <option value="Russia"> Russia </option>
                    <option value="Rwanda"> Rwanda </option>
                    <option value="Saint Barthelemy"> Saint Barthelemy </option>
                    <option value="Saint Helena"> Saint Helena </option>
                    <option value="Saint Kitts and Nevis"> Saint Kitts and Nevis </option>
                    <option value="Saint Lucia"> Saint Lucia </option>
                    <option value="Saint Martin"> Saint Martin </option>
                    <option value="Saint Pierre and Miquelon"> Saint Pierre and Miquelon </option>
                    <option value="Saint Vincent and the Grenadines"> Saint Vincent and the Grenadines </option>
                    <option value="Samoa"> Samoa </option>
                    <option value="San Marino"> San Marino </option>
                    <option value="Sao Tome and Principe"> Sao Tome and Principe </option>
                    <option value="Saudi Arabia"> Saudi Arabia </option>
                    <option value="Senegal"> Senegal </option>
                    <option value="Serbia"> Serbia </option>
                    <option value="Seychelles"> Seychelles </option>
                    <option value="Sierra Leone"> Sierra Leone </option>
                    <option value="Singapore"> Singapore </option>
                    <option value="Slovakia"> Slovakia </option>
                    <option value="Slovenia"> Slovenia </option>
                    <option value="Solomon Islands"> Solomon Islands </option>
                    <option value="Somalia"> Somalia </option>
                    <option value="Somaliland"> Somaliland </option>
                    <option value="South Africa"> South Africa </option>
                    <option value="South Ossetia"> South Ossetia </option>
                    <option value="South Sudan"> South Sudan </option>
                    <option value="Spain"> Spain </option>
                    <option value="Sri Lanka"> Sri Lanka </option>
                    <option value="Sudan"> Sudan </option>
                    <option value="Suriname"> Suriname </option>
                    <option value="Svalbard"> Svalbard </option>
                    <option value="eSwatini"> eSwatini </option>
                    <option value="Sweden"> Sweden </option>
                    <option value="Switzerland"> Switzerland </option>
                    <option value="Syria"> Syria </option>
                    <option value="Taiwan"> Taiwan </option>
                    <option value="Tajikistan"> Tajikistan </option>
                    <option value="Tanzania"> Tanzania </option>
                    <option value="Thailand"> Thailand </option>
                    <option value="Timor-Leste"> Timor-Leste </option>
                    <option value="Togo"> Togo </option>
                    <option value="Tokelau"> Tokelau </option>
                    <option value="Tonga"> Tonga </option>
                    <option value="Transnistria Pridnestrovie"> Transnistria Pridnestrovie </option>
                    <option value="Trinidad and Tobago"> Trinidad and Tobago </option>
                    <option value="Tristan da Cunha"> Tristan da Cunha </option>
                    <option value="Tunisia"> Tunisia </option>
                    <option value="Turkey"> Turkey </option>
                    <option value="Turkmenistan"> Turkmenistan </option>
                    <option value="Turks and Caicos Islands"> Turks and Caicos Islands </option>
                    <option value="Tuvalu"> Tuvalu </option>
                    <option value="Uganda"> Uganda </option>
                    <option value="Ukraine"> Ukraine </option>
                    <option value="United Arab Emirates"> United Arab Emirates </option>
                    <option value="United Kingdom"> United Kingdom </option>
                    <option value="Uruguay"> Uruguay </option>
                    <option value="Uzbekistan"> Uzbekistan </option>
                    <option value="Vanuatu"> Vanuatu </option>
                    <option value="Vatican City"> Vatican City </option>
                    <option value="Venezuela"> Venezuela </option>
                    <option value="Vietnam"> Vietnam </option>
                    <option value="British Virgin Islands"> British Virgin Islands </option>
                    <option value="Isle of Man"> Isle of Man </option>
                    <option value="US Virgin Islands"> US Virgin Islands </option>
                    <option value="Wallis and Futuna"> Wallis and Futuna </option>
                    <option value="Western Sahara"> Western Sahara </option>
                    <option value="Yemen"> Yemen </option>
                    <option value="Zambia"> Zambia </option>
                    <option value="Zimbabwe"> Zimbabwe </option>
                    <option value="other"> Other </option>
                  </select>
                  <label class="form-sub-label" for="input_10_country" id="sublabel_10_country" style="min-height:13px" aria-hidden="false"> Country </label>
                </span>
              </span>
            </div>
          </div>
        </div>
      </li>
      <li class="form-line" data-type="control_radio" id="id_15">
        <label class="form-label form-label-top" id="label_15" for="input_15"> Send Gift? </label>
        <div id="cid_15" class="form-input-wide">
          <div class="form-single-column" role="group" aria-labelledby="label_15" data-component="radio">
            <span class="form-radio-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <input type="radio" class="form-radio" id="input_15_0" name="q15_sendGift15" value="Yes" />
              <label id="label_input_15_0" for="input_15_0"> Yes </label>
            </span>
            <span class="form-radio-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <input type="radio" class="form-radio" id="input_15_1" name="q15_sendGift15" value="No" />
              <label id="label_input_15_1" for="input_15_1"> No </label>
            </span>
          </div>
        </div>
      </li>
      <li class="form-line form-field-hidden" style="display:none;" data-type="control_fullname" id="id_11">
        <label class="form-label form-label-top" id="label_11" for="first_11"> Recipient's Full Name </label>
        <div id="cid_11" class="form-input-wide">
          <div data-wrapper-react="true">
            <span class="form-sub-label-container " style="vertical-align:top" data-input-type="first">
              <input type="text" id="first_11" name="q11_recipientsFull[first]" class="form-textbox" size="10" value="" data-component="first" aria-labelledby="label_11 sublabel_11_first" />
              <label class="form-sub-label" for="first_11" id="sublabel_11_first" style="min-height:13px" aria-hidden="false"> First Name </label>
            </span>
            <span class="form-sub-label-container " style="vertical-align:top" data-input-type="last">
              <input type="text" id="last_11" name="q11_recipientsFull[last]" class="form-textbox" size="15" value="" data-component="last" aria-labelledby="label_11 sublabel_11_last" />
              <label class="form-sub-label" for="last_11" id="sublabel_11_last" style="min-height:13px" aria-hidden="false"> Last Name </label>
            </span>
          </div>
        </div>
      </li>
      <li class="form-line form-field-hidden" style="display:none;" data-type="control_textarea" id="id_18">
        <label class="form-label form-label-top form-label-auto" id="label_18" for="input_18"> Gift Message </label>
        <div id="cid_18" class="form-input-wide">
          <textarea id="input_18" class="form-textarea" name="q18_giftMessage" cols="40" rows="6" data-component="textarea" aria-labelledby="label_18"></textarea>
        </div>
      </li>
      <li class="form-line" data-type="control_textarea" id="id_14">
        <label class="form-label form-label-top" id="label_14" for="input_14"> Special Instructions </label>
        <div id="cid_14" class="form-input-wide">
          <textarea id="input_14" class="form-textarea" name="q14_specialInstructions" cols="40" rows="6" data-component="textarea" aria-labelledby="label_14"></textarea>
        </div>
      </li>
      <li class="form-line" data-type="control_paypalcomplete" id="id_19" data-payment="true">
        <label class="form-label form-label-top form-label-auto" id="label_19" for="input_19"> My Products </label>
        <div id="cid_19" class="form-input-wide">
          <div data-wrapper-react="true">
            <div data-wrapper-react="true">
              <input type="hidden" name="simple_fpc" data-payment_type="paypalcomplete" data-component="payment1" value="19" />
              <input type="hidden" name="payment_total_checksum" id="payment_total_checksum" data-component="payment2" />
              <div id="image-overlay" class="overlay-content" style="display:none">
                <img id="current-image" />
                <span class="lb-prev-button">
                  prev
                </span>
                <span class="lb-next-button">
                  next
                </span>
                <span class="lb-close-button">
                  ( X )
                </span>
                <span class="image-overlay-product-container">
                  <ul class="form-overlay-item" hasicon="false" hasimages="true" iconvalue="">
                    <li class="image-overlay-image">
                      <img src="https://www.jotform.com/uploads/EdwardWrighton/form_files/sample6.jpg?nc=1" />
                    </li>
                  </ul>
                  <ul class="form-overlay-item" hasicon="false" hasimages="true" iconvalue="">
                    <li class="image-overlay-image">
                      <img src="https://www.jotform.com/uploads/EdwardWrighton/form_files/sample8 copy.jpg?nc=1" />
                    </li>
                  </ul>
                  <ul class="form-overlay-item" hasicon="false" hasimages="true" iconvalue="">
                    <li class="image-overlay-image">
                      <img src="https://www.jotform.com/uploads/EdwardWrighton/form_files/sample9.jpg?nc=1" />
                    </li>
                  </ul>
                </span>
              </div>
              <div data-wrapper-react="true">
                <span class="form-product-item hover-product-item">
                  <img src="https://www.jotform.com/uploads/EdwardWrighton/form_files/sample6.jpg?nc=1" alt="product" class="form-product-image-with-options" width="50" style="height:auto;vertical-align:middle" />
                  <div data-wrapper-react="true" class="form-product-item-detail">
                    <input type="checkbox" class="form-checkbox " id="input_19_1001" name="q19_myProducts[][id]" value="1001" />
                    <label for="input_19_1001" class="form-product-container">
                      <span data-wrapper-react="true">
                        <span class="form-product-name" id="product-name-input_19_1001">
                          T-Shirt
                        </span>
                        <span class="form-product-details">
                          <b>
                            <span data-wrapper-react="true">
                              $
                              <span id="input_19_1001_price">
                                1.00 
                              </span>
                            </span>
                          </b>
                        </span>
                      </span>
                      <div class="form-product-description" id="product-name-description-input_19_1001">
                      </div>
                    </label>
                    <br/>
                    <br/>
                    <span class="form-sub-label-container " style="vertical-align:top">
                      <label class="form-sub-label" for="input_19_quantity_1001_0" style="min-height:13px" aria-hidden="false"> Quantity </label>
                      <select class="form-dropdown" name="q19_myProducts[special_1001][item_0]" id="input_19_quantity_1001_0">
                        <option value="1"> 1 </option>
                        <option value="2"> 2 </option>
                        <option value="3"> 3 </option>
                        <option value="4"> 4 </option>
                        <option value="5"> 5 </option>
                        <option value="6"> 6 </option>
                        <option value="7"> 7 </option>
                        <option value="8"> 8 </option>
                        <option value="9"> 9 </option>
                        <option value="10"> 10 </option>
                      </select>
                    </span>
                    <span class="form-sub-label-container " style="vertical-align:top">
                      <label class="form-sub-label" for="input_19_custom_1001_1" style="min-height:13px" aria-hidden="false"> Color </label>
                      <select class="form-dropdown" name="q19_myProducts[special_1001][item_1]" id="input_19_custom_1001_1">
                        <option value="Green"> Green </option>
                        <option value="Blue"> Blue </option>
                        <option value="Red"> Red </option>
                        <option value="Yellow"> Yellow </option>
                        <option value="Magenta"> Magenta </option>
                        <option value="Grey"> Grey </option>
                      </select>
                    </span>
                    <span class="form-sub-label-container " style="vertical-align:top">
                      <label class="form-sub-label" for="input_19_custom_1001_2" style="min-height:13px" aria-hidden="false"> T-Shirt Size </label>
                      <select class="form-dropdown" name="q19_myProducts[special_1001][item_2]" id="input_19_custom_1001_2">
                        <option value="XS"> XS </option>
                        <option value="S"> S </option>
                        <option value="M"> M </option>
                        <option value="L"> L </option>
                        <option value="XL"> XL </option>
                        <option value="XXL"> XXL </option>
                        <option value="XXXL"> XXXL </option>
                      </select>
                    </span>
                  </div>
                </span>
                <br/>
                <span class="form-product-item hover-product-item">
                  <img src="https://www.jotform.com/uploads/EdwardWrighton/form_files/sample8%20copy.jpg?nc=1" alt="product" class="form-product-image-with-options" width="50" style="height:auto;vertical-align:middle" />
                  <div data-wrapper-react="true" class="form-product-item-detail">
                    <input type="checkbox" class="form-checkbox " id="input_19_1002" name="q19_myProducts[][id]" value="1002" />
                    <label for="input_19_1002" class="form-product-container">
                      <span data-wrapper-react="true">
                        <span class="form-product-name" id="product-name-input_19_1002">
                          Sweatshirt
                        </span>
                        <span class="form-product-details">
                          <b>
                            <span data-wrapper-react="true">
                              $
                              <span id="input_19_1002_price">
                                5.00 
                              </span>
                            </span>
                          </b>
                        </span>
                      </span>
                      <div class="form-product-description" id="product-name-description-input_19_1002">
                      </div>
                    </label>
                    <br/>
                    <br/>
                    <span class="form-sub-label-container " style="vertical-align:top">
                      <label class="form-sub-label" for="input_19_quantity_1002_0" style="min-height:13px" aria-hidden="false"> Quantity </label>
                      <select class="form-dropdown" name="q19_myProducts[special_1002][item_0]" id="input_19_quantity_1002_0">
                        <option value="1"> 1 </option>
                        <option value="2"> 2 </option>
                        <option value="3"> 3 </option>
                        <option value="4"> 4 </option>
                        <option value="5"> 5 </option>
                        <option value="6"> 6 </option>
                        <option value="7"> 7 </option>
                        <option value="8"> 8 </option>
                        <option value="9"> 9 </option>
                        <option value="10"> 10 </option>
                      </select>
                    </span>
                    <span class="form-sub-label-container " style="vertical-align:top">
                      <label class="form-sub-label" for="input_19_custom_1002_1" style="min-height:13px" aria-hidden="false"> Color </label>
                      <select class="form-dropdown" name="q19_myProducts[special_1002][item_1]" id="input_19_custom_1002_1">
                        <option value="Green"> Green </option>
                        <option value="Blue"> Blue </option>
                        <option value="Red"> Red </option>
                        <option value="Black"> Black </option>
                        <option value="Magenta"> Magenta </option>
                      </select>
                    </span>
                    <span class="form-sub-label-container " style="vertical-align:top">
                      <label class="form-sub-label" for="input_19_custom_1002_2" style="min-height:13px" aria-hidden="false"> Sweatshirt Size </label>
                      <select class="form-dropdown" name="q19_myProducts[special_1002][item_2]" id="input_19_custom_1002_2">
                        <option value="XS"> XS </option>
                        <option value="S"> S </option>
                        <option value="M"> M </option>
                        <option value="L"> L </option>
                        <option value="XL"> XL </option>
                        <option value="XXL"> XXL </option>
                        <option value="XXXL"> XXXL </option>
                      </select>
                    </span>
                  </div>
                </span>
                <br/>
                <span class="form-product-item hover-product-item">
                  <img src="https://www.jotform.com/uploads/EdwardWrighton/form_files/sample9.jpg?nc=1" alt="product" class="form-product-image-with-options" width="50" style="height:auto;vertical-align:middle" />
                  <div data-wrapper-react="true" class="form-product-item-detail">
                    <input type="checkbox" class="form-checkbox " id="input_19_1003" name="q19_myProducts[][id]" value="1003" />
                    <label for="input_19_1003" class="form-product-container">
                      <span data-wrapper-react="true">
                        <span class="form-product-name" id="product-name-input_19_1003">
                          Shoes
                        </span>
                        <span class="form-product-details">
                          <b>
                            <span data-wrapper-react="true">
                              $
                              <span id="input_19_1003_price">
                                10.00 
                              </span>
                            </span>
                          </b>
                        </span>
                      </span>
                      <div class="form-product-description" id="product-name-description-input_19_1003">
                      </div>
                    </label>
                    <br/>
                    <br/>
                    <span class="form-sub-label-container " style="vertical-align:top">
                      <label class="form-sub-label" for="input_19_quantity_1003_0" style="min-height:13px" aria-hidden="false"> Quantity </label>
                      <select class="form-dropdown" name="q19_myProducts[special_1003][item_0]" id="input_19_quantity_1003_0">
                        <option value="1"> 1 </option>
                        <option value="2"> 2 </option>
                        <option value="3"> 3 </option>
                        <option value="4"> 4 </option>
                        <option value="5"> 5 </option>
                        <option value="6"> 6 </option>
                        <option value="7"> 7 </option>
                        <option value="8"> 8 </option>
                        <option value="9"> 9 </option>
                        <option value="10"> 10 </option>
                      </select>
                    </span>
                    <span class="form-sub-label-container " style="vertical-align:top">
                      <label class="form-sub-label" for="input_19_custom_1003_1" style="min-height:13px" aria-hidden="false"> Shoe Size </label>
                      <select class="form-dropdown" name="q19_myProducts[special_1003][item_1]" id="input_19_custom_1003_1">
                        <option value="8"> 8 </option>
                        <option value="8.5"> 8.5 </option>
                        <option value="9"> 9 </option>
                        <option value="9.5"> 9.5 </option>
                        <option value="10"> 10 </option>
                        <option value="10.5"> 10.5 </option>
                        <option value="11"> 11 </option>
                        <option value="11.5"> 11.5 </option>
                        <option value="12"> 12 </option>
                        <option value="13"> 13 </option>
                        <option value="14"> 14 </option>
                      </select>
                    </span>
                  </div>
                </span>
                <br/>
                <span class="form-payment-total">
                  <b>
                    <span id="total-text">
                      Total
                    </span>
                     
                    <span class="form-payment-price">
                      <span data-wrapper-react="true">
                        $
                        <span id="payment_total">
                          0.00 
                        </span>
                      </span>
                    </span>
                  </b>
                </span>
              </div>
            </div>
          </div>
        </div>
      </li>
      <li class="form-line" data-type="control_paymentmethods" id="id_20">
        <label class="form-label form-label-top" id="label_20" for="input_20"> Payment Methods </label>
        <div id="cid_20" class="form-input-wide">
          <div class="payment-methods-area">
            <div data-wrapper-react="true" class="paypalcomplete-payment-wrapper" data-sandbox="enabled" data-currency="USD" data-auth-only="No" data-show-spb="true" data-show-card-fields="true">
              <div id="paypal-commerce-platform-container">
                <div class="paypal-toggle-buttons">
                  <div class="paypal-toggle">
                    <div id="paypal-card-fields">
                      <div class="payment-method-container" data-id="paypal-card-fields">
                        <input type="radio" name="paypal-payment-method" data-id="paypal-card-fields" id="paypal-card-fields-input" />
                        <label for="paypal-card-fields-input">
                          <span class="CC_ico">
                          </span>
                          Debit or Credit Card
                        </label>
                      </div>
                    </div>
                    <div id="paypal-smart-buttons">
                      <div class="payment-method-container" data-id="paypal-smart-buttons">
                        <input type="radio" name="paypal-payment-method" data-id="paypal-smart-buttons" id="paypal-smart-buttons-input" />
                        <label for="paypal-smart-buttons-input">  </label>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="paypal-toggle-content " render-paypal-type="">
                  <div class="content-area">
                    <div id="paypal-credit-card-fields">
                      <div class="paypal-commerce-platform">
                        <div class="paypal-content">
                          <table class="form-address-table payment-form-table" style="border:0" cellPadding="0" cellSpacing="0">
                            <tbody>
                              <tr>
                                <td width="50%">
                                  <span class="form-sub-label-container " style="vertical-align:top">
                                    <input type="text" id="19_cc_firstName" name="q19_myProducts[cc_firstName]" class="form-textbox cc_firstName" size="20" value="" data-component="cc_firstName" />
                                    <label class="form-sub-label" for="19_cc_firstName" id="sublabel_cc_firstName" style="min-height:13px;margin:0 0 3px 0" aria-hidden="false"> First Name </label>
                                  </span>
                                </td>
                                <td width="50%">
                                  <span class="form-sub-label-container " style="vertical-align:top">
                                    <input type="text" id="19_cc_lastName" name="q19_myProducts[cc_lastName]" class="form-textbox cc_lastName" size="20" value="" data-component="cc_lastName" />
                                    <label class="form-sub-label" for="19_cc_lastName" id="sublabel_cc_lastName" style="min-height:13px;margin:0 0 3px 0" aria-hidden="false"> Last Name </label>
                                  </span>
                                </td>
                              </tr>
                              <tr>
                                <td width="50%">
                                  <span class="form-sub-label-container " style="vertical-align:top">
                                    <div class="form-textbox cc_numberMount cc_number">
                                    </div>
                                    <label class="form-sub-label" for="19_cc_number" id="sublabel_cc_number" style="min-height:13px;margin:0 0 3px 0" aria-hidden="false"> Credit Card Number </label>
                                  </span>
                                </td>
                                <td width="50%">
                                  <span class="form-sub-label-container " style="vertical-align:top">
                                    <div class="form-textbox cc_ccvMount cc_ccv">
                                    </div>
                                    <label class="form-sub-label" for="19_cc_ccv" id="sublabel_cc_ccv" style="min-height:13px;margin:0 0 3px 0" aria-hidden="false"> Security Code </label>
                                  </span>
                                </td>
                              </tr>
                              <tr>
                                <td width="50%">
                                  <span class="form-sub-label-container " style="vertical-align:top">
                                    <div class="form-textbox cc_cardExpiryMount cc_card_expiry">
                                    </div>
                                    <label class="form-sub-label" for="19_cc_card_expiry" id="sublabel_cc_card_expiry" style="min-height:13px;margin:0 0 3px 0" aria-hidden="false"> Card Expiration </label>
                                  </span>
                                </td>
                                <td width="50%">
                                  <tr style="display:none">
                                    <td>
                                      <input id="paypal_complete_dummy" style="display:none" />
                                    </td>
                                  </tr>
                                </td>
                              </tr>
                              <div id="payments-sdk__contingency-lightbox">
                              </div>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                    <div id="paypal-spb-area">
                      <p>Please click one of the PayPal options to complete payment and <b>submit</b> the form.</p>
                      <div id="paypal-button-container" style="pointer-events:">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <input type="hidden" id="input_20_payment_method" name="q20_paymentMethods[payment_method]" class="" value="" data-component="payment_method" />
          </div>
        </div>
      </li>
      <li class="form-line" data-type="control_button" id="id_13">
        <div id="cid_13" class="form-input-wide">
          <div style="text-align:center" data-align="center" class="form-buttons-wrapper form-buttons-center   jsTest-button-wrapperField">
            <button id="input_13" type="submit" class="form-submit-button submit-button jf-form-buttons jsTest-submitField" data-component="button" data-content="">
              Submit Order
            </button>
          </div>
        </div>
      </li>
      <li style="display:none">
        Should be Empty:
        <input type="text" name="website" value="" />
      </li>
    </ul>
  
  <script>
  JotForm.showJotFormPowered = "new_footer";
  </script>
  <script>
  JotForm.poweredByText = "Powered by JotForm";
  </script>
  <input type="hidden" id="simple_spc" name="simple_spc" value="201412284255447" />
  <script type="text/javascript">
  document.getElementById("si" + "mple" + "_spc").value = "201412284255447-201412284255447";
  </script>
 
</form>