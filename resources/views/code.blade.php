<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en"><!--<![endif]--><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">

	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>Takoradi Technical University | Admissions Portal</title>
	<meta name="description" content="">
	<meta name="author" content="">
  <!-- include the BotDetect layout stylesheet -->
   <link href="{{ captcha_layout_stylesheet_url() }}" type="text/css" rel="stylesheet">

	<!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
        <style>
            .country{
       background: #eee;
    position: relative;
    padding-left: 16px;
    padding-right: 16px;
    border-radius: 3px;
    color: #888;
    font-family: "Roboto", Helvetica, Arial, sans-serif;
    font-weight: normal;
    font-size: 16px;
    width: 100%;
    height: 48px;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
    }
        </style>
	<!-- CSS
  ================================================== -->
	<link rel="stylesheet" href="public/assets/base.css">
	<link rel="stylesheet" href="public/assets/skeleton.css">
	<link rel="stylesheet" href="public/assets/11_form_page.css">
	<link rel="stylesheet" href="public/assets/layout_11.css">
  <link rel="stylesheet" href="public/assets/box.css">


	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	 
    
<script type="text/javascript" charset="utf-8" async="" src="public/assets/button.js"></script></head>

<body>



	<!-- Primary Page Layout
	================================================== -->


<!-- Part 1: #Header -->


<div class="pixfort_form_11">

<div class="header_style">
	<div class="container">
		<div class="sixteen columns">
                    <img class="image-responsive"alt="logo" style="width:auto;height:110px;margin-top: -45px"  src="public/assets/logo.png" alt="">
                     <div class="htext_style">ADMISSIONS PORTAL</div>
          </div>
	</div><!-- container -->
</div>

</div>


<!-- Part 2: #Video & Contact -->


<div class="pixfort_form_11">

<div class="why_section">
	<div class="container">

  		<div class="nine columns alpha">
             <h3 class="title_st">INTERNATIONAL APPLICANTS </h3>
            <p>All International Applicants for the <?php echo (date("Y") ) ."/".(date("Y")+1);?> Academic year admission are required to fill the form on the right side of the page after which email of the PIN CODE and SERIAL NUMBER will be send so that they can fill their forms . The procedure for the online application process is as follows:</p>
                                 
                                  <p><strong>I</strong>. In completing the online form, applicants will be required to upload their passport size photograph (not more than 500KB) with a white background.</p>
                                <p><strong>II. </strong>Applicants are advised to check thoroughly all details entered before they finally submit their online applications. A form, once submitted, can be viewed, but cannot be edited.</p>
                                <p><strong>III.</strong> Applicants should print out application summary; attach result slips,certificates and all other relevant documents.</p>
                                <p><strong>VI. </strong>All applicants are advised to provide correct Phone numbers and Email addresses in order to receive Admission notifications
                                <p><strong>VII. </strong>The application documents as specified (III) above should sent by post to  
                                <p></p>
                                
             
          </div>

          <div class="seven columns  omega">
                @if(Session::has('success'))
    <div style="text-align: center;color:red" class="uk-alert uk-alert-success" data-uk-alert="">
        {!! Session::get('success') !!} 
    </div>
    @endif
    @if(Session::has('error'))
    <div style="text-align: center" class="uk-alert uk-alert-danger" data-uk-alert="">
       {!! Session::get('error') !!}
    </div>
    @endif

    @if (count($errors) > 0)


    <div class="uk-alert uk-alert-danger  uk-alert-close" style="background-color: red;color: white" data-uk-alert="">

        <ul>
            @foreach ($errors->all() as $error)
            <li>{!!$error  !!} </li>
            @endforeach
        </ul>
    </div>

    @endif
              
    
    
    <div class="text_input">
    				<div class="headtext_style">Fill this form to get your PIN and SERIAL CODE</div>
                                <form action="foreign/validate/code" method="POST">
    				<input type="hidden" name="_token" value="{!! csrf_token() !!}"> 
                                   
    				<div class="contact_st">
    					<fieldset id="contact_form">
    						<div id="result"></div>

                                                <input   name="name" required="" id="name" placeholder="Enter Your Full Name" type="text">

                                                <input  name="phone" required="" id="number" placeholder="Enter Your Phone Number" type="text">

    						<input name="email" id="email" placeholder="Enter Your Email" type="email">
                                                <select class="country"required=""name="country"><option value="">Choose Country</option><option value="Afghanistan">Afghanistan</option><option value="Albania">Albania</option><option value="Algeria">Algeria</option><option value="American Samoa">American Samoa</option><option value="Andorra">Andorra</option><option value="Angola">Angola</option><option value="Anguilla">Anguilla</option><option value="Antarctica">Antarctica</option><option value="Antigua and Barbuda">Antigua and Barbuda</option><option value="Argentina">Argentina</option><option value="Armenia">Armenia</option><option value="Australia">Australia</option><option value="Austria">Austria</option><option value="Azerbaijan">Azerbaijan</option><option value="Bahamas">Bahamas</option><option value="Bahrain">Bahrain</option><option value="Bangladesh">Bangladesh</option><option value="Barbados">Barbados</option><option value="Belarus">Belarus</option><option value="Belgium">Belgium</option><option value="Belize">Belize</option><option value="Benin">Benin</option><option value="Bermuda">Bermuda</option><option value="Bhutan">Bhutan</option><option value="Bolivia">Bolivia</option><option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option><option value="Botswana">Botswana</option><option value="Bouvet Island">Bouvet Island</option><option value="Brazil">Brazil</option><option value="British Indian Ocean Territory">British Indian Ocean Territory</option><option value="Brunei">Brunei</option><option value="Bulgaria">Bulgaria</option><option value="Burkina Faso">Burkina Faso</option><option value="Burundi">Burundi</option><option value="Cambodia">Cambodia</option><option value="Cameroon">Cameroon</option><option value="Canada">Canada</option><option value="Cape Verde">Cape Verde</option><option value="Cayman Islands">Cayman Islands</option><option value="Central African Republic">Central African Republic</option><option value="Chad">Chad</option><option value="Chile">Chile</option><option value="China">China</option><option value="Christmas Island">Christmas Island</option><option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option><option value="Colombia">Colombia</option><option value="Comoros">Comoros</option><option value="Congo">Congo</option><option value="Congo, The Democratic Republic of the">Congo, The Democratic Republic of the</option><option value="Cook Islands">Cook Islands</option><option value="Costa Rica">Costa Rica</option><option value="C&ocirc;te d&rsquo;Ivoire">C&ocirc;te d&rsquo;Ivoire</option><option value="Croatia">Croatia</option><option value="Cuba">Cuba</option><option value="Cyprus">Cyprus</option><option value="Czech Republic">Czech Republic</option><option value="Denmark">Denmark</option><option value="Djibouti">Djibouti</option><option value="Dominica">Dominica</option><option value="Dominican Republic">Dominican Republic</option><option value="East Timor">East Timor</option><option value="Ecuador">Ecuador</option><option value="Egypt">Egypt</option><option value="El Salvador">El Salvador</option><option value="Equatorial Guinea">Equatorial Guinea</option><option value="Eritrea">Eritrea</option><option value="Estonia">Estonia</option><option value="Ethiopia">Ethiopia</option><option value="Falkland Islands">Falkland Islands</option><option value="Faroe Islands">Faroe Islands</option><option value="Fiji Islands">Fiji Islands</option><option value="Finland">Finland</option><option value="France">France</option><option value="French Guiana">French Guiana</option><option value="French Polynesia">French Polynesia</option><option value="French Southern territories">French Southern territories</option><option value="Gabon">Gabon</option><option value="Gambia">Gambia</option><option value="Georgia">Georgia</option><option value="Germany">Germany</option><option value="Gibraltar">Gibraltar</option><option value="Greece">Greece</option><option value="Greenland">Greenland</option><option value="Grenada">Grenada</option><option value="Guadeloupe">Guadeloupe</option><option value="Guam">Guam</option><option value="Guatemala">Guatemala</option><option value="Guinea">Guinea</option><option value="Guinea-Bissau">Guinea-Bissau</option><option value="Guyana">Guyana</option><option value="Haiti">Haiti</option><option value="Heard Island and McDonald Islands">Heard Island and McDonald Islands</option><option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option><option value="Honduras">Honduras</option><option value="Hong Kong">Hong Kong</option><option value="Hungary">Hungary</option><option value="Iceland">Iceland</option><option value="India">India</option><option value="Indonesia">Indonesia</option><option value="Iran">Iran</option><option value="Iraq">Iraq</option><option value="Ireland">Ireland</option><option value="Israel">Israel</option><option value="Italy">Italy</option><option value="Jamaica">Jamaica</option><option value="Japan">Japan</option><option value="Jordan">Jordan</option><option value="Kazakstan">Kazakstan</option><option value="Kenya">Kenya</option><option value="Kiribati">Kiribati</option><option value="Kuwait">Kuwait</option><option value="Kyrgyzstan">Kyrgyzstan</option><option value="Laos">Laos</option><option value="Latvia">Latvia</option><option value="Lebanon">Lebanon</option><option value="Lesotho">Lesotho</option><option value="Liberia">Liberia</option><option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option><option value="Liechtenstein">Liechtenstein</option><option value="Lithuania">Lithuania</option><option value="Luxembourg">Luxembourg</option><option value="Macao">Macao</option><option value="Macedonia">Macedonia</option><option value="Madagascar">Madagascar</option><option value="Malawi">Malawi</option><option value="Malaysia">Malaysia</option><option value="Maldives">Maldives</option><option value="Mali">Mali</option><option value="Malta">Malta</option><option value="Marshall Islands">Marshall Islands</option><option value="Martinique">Martinique</option><option value="Mauritania">Mauritania</option><option value="Mauritius">Mauritius</option><option value="Mayotte">Mayotte</option><option value="Mexico">Mexico</option><option value="Micronesia, Federated States of">Micronesia, Federated States of</option><option value="Moldova">Moldova</option><option value="Monaco">Monaco</option><option value="Mongolia">Mongolia</option><option value="Montserrat">Montserrat</option><option value="Morocco">Morocco</option><option value="Mozambique">Mozambique</option><option value="Myanmar">Myanmar</option><option value="Namibia">Namibia</option><option value="Nauru">Nauru</option><option value="Nepal">Nepal</option><option value="Netherlands">Netherlands</option><option value="Netherlands Antilles">Netherlands Antilles</option><option value="New Caledonia">New Caledonia</option><option value="New Zealand">New Zealand</option><option value="Nicaragua">Nicaragua</option><option value="Niger">Niger</option><option value="Nigeria">Nigeria</option><option value="Niue">Niue</option><option value="Norfolk Island">Norfolk Island</option><option value="North Korea">North Korea</option><option value="Northern Mariana Islands">Northern Mariana Islands</option><option value="Norway">Norway</option><option value="Oman">Oman</option><option value="Pakistan">Pakistan</option><option value="Palau">Palau</option><option value="Palestine">Palestine</option><option value="Panama">Panama</option><option value="Papua New Guinea">Papua New Guinea</option><option value="Paraguay">Paraguay</option><option value="Peru">Peru</option><option value="Philippines">Philippines</option><option value="Pitcairn">Pitcairn</option><option value="Poland">Poland</option><option value="Portugal">Portugal</option><option value="Puerto Rico">Puerto Rico</option><option value="Qatar">Qatar</option><option value="R&eacute;union">R&eacute;union</option><option value="Romania">Romania</option><option value="Russian Federation">Russian Federation</option><option value="Rwanda">Rwanda</option><option value="Saint Helena">Saint Helena</option><option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option><option value="Saint Lucia">Saint Lucia</option><option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option><option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option><option value="Samoa">Samoa</option><option value="San Marino">San Marino</option><option value="Sao Tome and Principe">Sao Tome and Principe</option><option value="Saudi Arabia">Saudi Arabia</option><option value="Senegal">Senegal</option><option value="Seychelles">Seychelles</option><option value="Sierra Leone">Sierra Leone</option><option value="Singapore">Singapore</option><option value="Slovakia">Slovakia</option><option value="Slovenia">Slovenia</option><option value="Solomon Islands">Solomon Islands</option><option value="Somalia">Somalia</option><option value="South Africa">South Africa</option><option value="South Georgia and the South Sandwich Islands">South Georgia and the South Sandwich Islands</option><option value="South Korea">South Korea</option><option value="Spain">Spain</option><option value="Sri Lanka">Sri Lanka</option><option value="Sudan">Sudan</option><option value="Suriname">Suriname</option><option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option><option value="Swaziland">Swaziland</option><option value="Sweden">Sweden</option><option value="Switzerland">Switzerland</option><option value="Syria">Syria</option><option value="Taiwan">Taiwan</option><option value="Tajikistan">Tajikistan</option><option value="Tanzania">Tanzania</option><option value="Thailand">Thailand</option><option value="Togo">Togo</option><option value="Tokelau">Tokelau</option><option value="Tonga">Tonga</option><option value="Trinidad and Tobago">Trinidad and Tobago</option><option value="Tunisia">Tunisia</option><option value="Turkey">Turkey</option><option value="Turkmenistan">Turkmenistan</option><option value="Turks and Caicos Islands">Turks and Caicos Islands</option><option value="Tuvalu">Tuvalu</option><option value="Uganda">Uganda</option><option value="Ukraine">Ukraine</option><option value="United Arab Emirates">United Arab Emirates</option><option value="United Kingdom">United Kingdom</option><option value="United States">United States</option><option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option><option value="Uruguay">Uruguay</option><option value="Uzbekistan">Uzbekistan</option><option value="Vanuatu">Vanuatu</option><option value="Venezuela">Venezuela</option><option value="Vietnam">Vietnam</option><option value="Virgin Islands, British">Virgin Islands, British</option><option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option><option value="Wallis and Futuna">Wallis and Futuna</option><option value="Western Sahara">Western Sahara</option><option value="Yemen">Yemen</option><option value="Yugoslavia">Yugoslavia</option><option value="Zambia">Zambia</option><option value="Zimbabwe">Zimbabwe</option></select>
                                                 <div class="form-group{{ $errors->has('CaptchaCode') ? ' has-error' : '' }}">
              <label class="col-md-4 control-label"></label>

              <div class="col-md-6">
                {!! captcha_image_html('RegisterCaptcha') !!}
                <input type="text" class="form-control" name="CaptchaCode" id="CaptchaCode">

                @if ($errors->has('CaptchaCode'))
                  <span class="help-block">
                    <strong>{{ $errors->first('CaptchaCode') }}</strong>
                  </span>
                @endif
              </div>
            </div>
                                                
                                           
    					</fieldset>

     <button class="subscribe_btn" id="subscribe_btn_11">SUBMIT FORM</button>
    				</div>
                                </form>
                  <h6 class="note_st">*Note: This is only for Foreign Applicants.</h6>
      		</div>
          </div>

	</div><!-- container -->
</div>

</div>

<!-- ========================================================================================================= -->
<!-- The Confirmation Page Popup -->
<div id="hidden_pix_11" class="confirm_page confirm_page_11">
  <div class="pixfort_form_11">
  
  <div class="confirm_header">Thank You Very Much!</div>
  <div class="confirm_text">
     </div>

   
</div>
</div>
<!-- ========================================================================================================= -->



<!-- Part 3: #Footer -->


<div class="pixfort_form_11">

<div class="foot_st">
	<div class="container ">
        <div class="sixteen columns bg_foot">
            <div class="seven columns alpha">
                <span class="rights_st">   Copyright <?php echo date("Y");?> | TTU - Ghana
                        <span class="pixfort_st">Powered by TPconnect </span>
                </span>
            </div>


             
	    </div><!-- container -->
    </div>
</div>

</div>





<!-- JavaScript
  ================================================== -->

<script src="public/assets/cbgapi.loaded_1" async=""></script><script src="public/assets/cbgapi.loaded_0" async=""></script><script type="text/javascript" async="" src="public/assets/platform.js" gapi_processed="true"></script><script id="twitter-wjs" src="public/assets/widgets.js"></script><script src="public/assets/jquery-1.js" type="text/javascript"></script> <!-- jQuery -->
<script src="public/assets/jquery.js" type="text/javascript"></script> <!-- jQuery easing -->
<script type="text/javascript" src="public/assets/jquery_002.js"></script>
<script src="public/assets/custom.js" type="text/javascript"></script>



<script>
!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');
  </script> <script type="text/javascript">
(function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/platform.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
  </script>

<!-- End Document
================================================== -->

<iframe name="oauth2relay1407180378" id="oauth2relay1407180378" src="public/assets/postmessageRelay.htm" style="width: 1px; height: 1px; position: absolute; top: -100px;" tabindex="-1" aria-hidden="true"></iframe><iframe id="rufous-sandbox" scrolling="no" allowtransparency="true" allowfullscreen="true" style="position: absolute; visibility: hidden; display: none; width: 0px; height: 0px; padding: 0px; border: medium none;" title="Twitter analytics iframe" frameborder="0"></iframe></body></html>