<html>
<head>
<title>Bootstrap Grid</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
<style type="text/css">
.h-divider{
margin-top:5px;
margin-bottom:5px;
height:1px;
width:100%;
border-top:1px solid gray;
}
</style>
</head>
<body>
<div class="container">

<div class="row">
<div class="col-xs-6">Col 1</div>
<div class="col-xs-6">Col 2</div>

<div class="">
<div class="col-xs-6">
<div>
<input type="text" placeholder="First Name*" class="form_styles input_box" id="first_name" name="first_name" validation="required">
</div>
</div>
<div class="col-xs-6">
<div>

<input type="text" class="form_styles input_box" placeholder="Last Name*" id="last_name" name="last_name" validation="required">
</div>
</div>
</div>

<div class="">
<div class="col-xs-6">
<div>

<input type="text" placeholder="Email*" class="form_styles input_box" id="email" name="email" validation="required">
</div>
</div>

<div class="col-xs-6">
<div>

<input type="text" placeholder="Organization/Company*" class="form_styles input_box" id="organization" name="organization" validation="required">
</div>
</div>
</div>

<div class=" --with-inner-label">
<div class="col-xs-6">
<div>

<input type="text" placeholder="Telephone*" class="form_styles input_box" id="phone_number" name="phone_number" validation="required">
</div>
</div>

<div class="col-xs-6 contact-sales-form__col-6--with-inner-label">

<label class="form_desc contact-sales-form__label">Country*:  <span class="required">*</span></label>

<div>
<select class="select_box form_styles" name="Country" placeholder="Country" title="Country" id="country_select" validation="required">
<option value="" selected="selected">Select...</option>
<option value="Afghanistan">
Afghanistan
</option>
<option value="Albania">
Albania
</option>
<option value="Algeria">
Algeria
</option>
<option value="American Samoa">
American Samoa
</option>
<option value="Andorra">
Andorra
</option>
<option value="Angola">
Angola
</option>
<option value="Anguilla">
Anguilla
</option>
<option value="Antarctica">
Antarctica
</option>
<option value="Antigua and Barbuda">
Antigua and Barbuda
</option>
<option value="Argentina">
Argentina
</option>
<option value="Armenia">
Armenia
</option>
<option value="Aruba">
Aruba
</option>
<option value="Australia">
Australia
</option>
<option value="Austria">
Austria
</option>
<option value="Azerbaijan">
Azerbaijan
</option>
<option value="Bahamas">
Bahamas
</option>
<option value="Bahrain">
Bahrain
</option>
<option value="Bangladesh">
Bangladesh
</option>
<option value="Barbados">
Barbados
</option>
<option value="Belarus">
Belarus
</option>
<option value="Belgium">
Belgium
</option>
<option value="Belize">
Belize
</option>
<option value="Benin">
Benin
</option>
<option value="Bermuda">
Bermuda
</option>
<option value="Bhutan">
Bhutan
</option>
<option value="Bolivia">
Bolivia
</option>
<option value="Bosnia and Herzegovina">
Bosnia and Herzegovina
</option>
<option value="Botswana">
Botswana
</option>
<option value="Bouvet Island">
Bouvet Island
</option>
<option value="Brazil">
Brazil
</option>
<option value="British Indian Ocean Territory">
British Indian Ocean Territory
</option>
<option value="British Virgin Islands">
British Virgin Islands
</option>
<option value="Brunei Darussalam">
Brunei Darussalam
</option>
<option value="Bulgaria">
Bulgaria
</option>
<option value="Burkina Faso">
Burkina Faso
</option>
<option value="Burundi">
Burundi
</option>
<option value="Cambodia">
Cambodia
</option>
<option value="Cameroon">
Cameroon
</option>
<option value="Canada">
Canada
</option>
<option value="Cape Verde">
Cape Verde
</option>
<option value="Cayman Islands">
Cayman Islands
</option>
<option value="Central African Republic">
Central African Republic
</option>
<option value="Chad">
Chad
</option>
<option value="Chile">
Chile
</option>
<option value="China">
China
</option>
<option value="Christmas Island">
Christmas Island
</option>
<option value="Cocos(Keeling) Islands">
Cocos(Keeling) Islands
</option>
<option value="Colombia">
Colombia
</option>
<option value="Comoros">
Comoros
</option>
<option value="Congo">
Congo
</option>
<option value="Cook Islands">
Cook Islands
</option>
<option value="Costa Rica">
Costa Rica
</option>
<option value="CoteD&#39;Ivoire">
CoteD&#39;Ivoire
</option>
<option value="Croatia">
Croatia
</option>
<option value="Cuba">
Cuba
</option>
<option value="Cyprus">
Cyprus
</option>
<option value="Czech Republic">
Czech Republic
</option>
<option value="Denmark">
Denmark
</option>
<option value="Djibouti">
Djibouti
</option>
<option value="Dominica">
Dominica
</option>
<option value="Dominican Republic">
Dominican Republic
</option>
<option value="East Timor">
East Timor
</option>
<option value="Ecuador">
Ecuador
</option>
<option value="Egypt">
Egypt
</option>
<option value="El Salvador">
El Salvador
</option>
<option value="Equatorial Guinea">
Equatorial Guinea
</option>
<option value="Eritrea">
Eritrea
</option>
<option value="Estonia">
Estonia
</option>
<option value="Ethiopia">
Ethiopia
</option>
<option value="Falk land Islands (Malvinas)">
Falkl and Islands (Malvinas)
</option>
<option value="Faroe Islands">
Faroe Islands
</option>
<option value="Fiji">
Fiji
</option>
<option value="Finland">
Finland
</option>
<option value="France">
France
</option>
<option value="French Guiana">
French Guiana
</option>
<option value="French Polynesia">
French Polynesia
</option>
<option value="French Southern Territories">
French Southern Territories
</option>
<option value="Gabon">
Gabon
</option>
<option value="Gambia">
Gambia
</option>
<option value="Georgia">
Georgia
</option>
<option value="Germany">
Germany
</option>
<option value="Ghana">
Ghana
</option>
<option value="Gibraltar">
Gibraltar
</option>
<option value="Greece">
Greece
</option>
<option value="Greenland">
Greenland
</option>
<option value="Grenada">
Grenada
</option>
<option value="Guadeloupe">
Guadeloupe
</option>
<option value="Guam">
Guam
</option>
<option value="Guatemala">
Guatemala
</option>
<option value="Guinea">
Guinea
</option>
<option value="Guinea-Bissau">
Guinea-Bissau
</option>
<option value="Guyana">
Guyana
</option>
<option value="Haiti">
Haiti
</option>
<option value="Heard Island and Mcdonald Islands">
Heard Island and Mcdonald Islands
</option>
<option value="Honduras">
Honduras
</option>
<option value="Hong Kong">
Hong Kong
</option>
<option value="Hungary">
Hungary
</option>
<option value="Iceland">
Iceland
</option>
<option value="India">
India
</option>
<option value="Indonesia">
Indonesia
</option>
<option value="Iran, Islamic republic of">
Iran, Islamic Republic of
</option>
<option value="Iraq">
Iraq
</option>
<option value="Ireland">
Ireland
</option>
<option value="Israel">
Israel
</option>
<option value="Italy">
Italy
</option>
<option value="Jamaica">
Jamaica
</option>
<option value="Japan">
Japan
</option>
<option value="Jordan">
Jordan
</option>
<option value="Kazakhstan">
Kazakhstan
</option>
<option value="Kenya">
Kenya
</option>
<option value="Kiribati">
Kiribati
</option>
<option value="Korea, Republic of">
Korea, Republic of
</option>
<option value="Kuwait">
Kuwait
</option>
<option value="Kyrgyzstan">
Kyrgyzstan
</option>
<option value="Laos">
Laos
</option>
<option value="Latvia">
Latvia
</option>
<option value="Lebanon">
Lebanon
</option>
<option value="Lesotho">
Lesotho
</option>
<option value="Liberia">
Liberia
</option>
<option value="Libya">
Libya
</option>
<option value="Liechtenstein">
Liechtenstein
</option>
<option value="Lithuania">
Lithuania
</option>
<option value="Luxembourg">
Luxembourg
</option>
<option value="Macau">
Macau
</option>
<option value="Republic of Macedonia">
Republic of Macedonia
</option>
<option value="Madagascar">
Madagascar
</option>
<option value="Malawi">
Malawi
</option>
<option value="Malaysia">
Malaysia
</option>
<option value="Maldives">
Maldives
</option>
<option value="Mali">
Mali
</option>
<option value="Malta">
Malta
</option>
<option value="Marshall Islands">
Marshall Islands
</option>
<option value="Martinique">
Martinique
</option>
<option value="Mauritania">
Mauritania
</option>
<option value="Mauritius">
Mauritius
</option>
<option value="Mayotte">
Mayotte
</option>
<option value="Mexico">
Mexico
</option>
<option value="Federated States of Micronesia">
Federated States of Micronesia
</option>
<option value="Moldova">
Moldova
</option>
<option value="Monaco">
Monaco
</option>
<option value="Mongolia">
Mongolia
</option>
<option value="Montenegro">
Montenegro
</option>
<option value="Montserrat">
Montserrat
</option>
<option value="Morocco">
Morocco
</option>
<option value="Mozambique">
Mozambique
</option>
<option value="Myanmar">
Myanmar
</option>
<option value="Namibia">
Namibia
</option>
<option value="Nauru">
Nauru
</option>
<option value="Nepal">
Nepal
</option>
<option value="Netherlands">
Netherlands
</option>
<option value="Netherlands Antilles">
Netherlands Antilles
</option>
<option value="New Caledonia">
New Caledonia
</option>
<option value="New Zealand">
New Zealand
</option>
<option value="Nicaragua">
Nicaragua
</option>
<option value="Niger">
Niger
</option>
<option value="Nigeria">
Nigeria
</option>
<option value="Niue">
Niue
</option>
<option value="Norfolk Island">
Norfolk Island
</option>
<option value="North Korea">
North Korea
</option>
<option value="Northern Mariana Islands">
Northern Mariana Islands
</option>
<option value="Norway">
Norway
</option>
<option value="Oman">
Oman
</option>
<option value="Pakistan">
Pakistan
</option>
<option value="Palau">
Palau
</option>
<option value="State of Palestine">
State of Palestine
</option>
<option value="Panama">
Panama
</option>
<option value="Papua New Guinea">
Papua New Guinea
</option>
<option value="Paraguay">
Paraguay
</option>
<option value="Peru">
Peru
</option>
<option value="Philippines">
Philippines
</option>
<option value="Pitcairn">
Pitcairn
</option>
<option value="Poland">
Poland
</option>
<option value="Portugal">
Portugal
</option>
<option value="Puerto Rico">
Puerto Rico
</option>
<option value="Qatar">
Qatar
</option>
<option value="Reunion">
Reunion
</option>
<option value="Romania">
Romania
</option>
<option value="Russian Federation">
Russian Federation
</option>
<option value="Rwanda">
Rwanda
</option>
<option value="Saint Kitts and Nevis">
Saint Kitts and Nevis
</option>
<option value="Saint Lucia">
Saint Lucia
</option>
<option value="Saint Pierre and Miquelon">
Saint Pierre and Miquelon
</option>
<option value="Saint Vincent and The Grenadines">
Saint Vincent and The Grenadines
</option>
<option value="Samoa">
Samoa
</option>
<option value="San Marino">
San Marino
</option>
<option value="Sao Tome and Principe">
Sao Tome and Principe
</option>
<option value="Saudi Arabia">
Saudi Arabia
</option>
<option value="Senegal">
Senegal
</option>
<option value="Serbia">
Serbia
</option>
<option value="Seychelles">
Seychelles
</option>
<option value="Sierra Leone">
Sierra Leone
</option>
<option value="Singapore">
Singapore
</option>
<option value="Slovakia">
Slovakia
</option>
<option value="Slovenia">
Slovenia
</option>
<option value="Solomon Islands">
Solomon Islands
</option>
<option value="Somalia">
Somalia
</option>
<option value="South Africa">
South Africa
</option>
<option value="South Georgia and the South Sandwich Islands">
South Georgia and the South Sandwich Islands
</option>
<option value="South Sudan">
South Sudan
</option>
<option value="Spain">
Spain
</option>
<option value="Sri Lanka">
Sri Lanka
</option>
<option value="St. Helena">
St. Helena
</option>
<option value="Sudan">
Sudan
</option>
<option value="Suriname">
Suriname
</option>
<option value="Svalbard and Jan Mayen Islands">
Svalbard and Jan Mayen Islands
</option>
<option value="Swaziland">
Swaziland
</option>
<option value="Sweden">
Sweden
</option>
<option value="Switzerland">
Switzerland
</option>
<option value="Syrian Arab Republic">
Syrian Arab Republic
</option>
<option value="Taiwan">
Taiwan
</option>
<option value="Tajikistan">
Tajikistan
</option>
<option value="United Republic Of Tanzania">
United Republic Of Tanzania
</option>
<option value="Thailand">
Thailand
</option>
<option value="Togo">
Togo
</option>
<option value="Tokelau">
Tokelau
</option>
<option value="Tonga">
Tonga
</option>
<option value="Trinidad and Tobago">
Trinidad and Tobago
</option>
<option value="Tunisia">
Tunisia
</option>
<option value="Turkey">
Turkey
</option>
<option value="Turkmenistan">
Turkmenistan
</option>
<option value="Turks and Caicos Islands">
Turks and Caicos Islands
</option>
<option value="Tuvalu">
Tuvalu
</option>
<option value="Uganda">
Uganda
</option>
<option value="Ukraine">
Ukraine
</option>
<option value="United Arab Emirates">
United Arab Emirates
</option>
<option value="United Kingdom">
United Kingdom
</option>
<option value="United States Minor Outlying Islands">
United States Minor Outlying Islands
</option>
<option value="United States of America">
United States of America
</option>
<option value="Uruguay">
Uruguay
</option>
<option value="Uzbekistan">
Uzbekistan
</option>
<option value="Vanuatu">
Vanuatu
</option>
<option value="Vatican City">
Vatican City
</option>
<option value="Venezuela">
Venezuela
</option>
<option value="Vietnam">
Vietnam
</option>
<option value="Virgin Islands, US">
Virgin Islands, US
</option>
<option value="Wallis and Futuna Islands">
Wallis and Futuna Islands
</option>
<option value="Western Sahara">
Western Sahara
</option>
<option value="Yemen">
Yemen
</option>
<option value="Zambia">
Zambia
</option>
<option value="Zimbabwe">
Zimbabwe
</option>
<option value="Not Available">
Not Available
</option>
</select>
</div>
</div>
</div>

<div class=" --with-inner-label">

<div class="col-xs-6 contact-sales-form__col-6--with-inner-label">

<label class="form_desc contact-sales-form__label">Who would you like to contact within DXC?*:  <span class="required">*</span></label>
<div>
<select class="select_box form_styles" name="Relationships" placeholder="Who would you like to contact within DXC?" title="By Relationships" id="Relationships" validation="required" onchange="checkForRedirect(this);">

<option value="Prospective Client" selected="selected">Sales</option>
<option value="Client">Solutions Expert</option>
<option value="Partner/Consultant">Partner Relations</option>
<option value="Investor/Shareholder">Investor Relations</option>
<option value="HR/Careers">HR/Careers</option>
<option value="Press/Analyst">PR/Media</option>
<option value="Other">Other</option>
</select>
</div>
</div>
<div class="col-xs-6">
<div>
</div>
</div>
</div>

<div class="cell_form">
<div>

<textarea placeholder="Comment*" class="form_styles textarea_box" name="comment" id="comment" validation="required"></textarea>
</div>
</div>

</div>
<div class="cell_form btn_submit contact-sales-form__btn-submit">
<button type="submit" name="formSubmit" class="css3button elqSubmit btn btn-primary" id="formSubmit">Submit</button>

</div>

</div>
<div class="h-divider">
</div>

</div>
</body>
</html>