@extends('app-front')
@section('content')
<div id="contactus" class="detail row">
	<div class="title col-md-12 clear-fix">Contact Us</div>
	<div class="passage-wrap row">
		<div class="passage col-md-8">
			<p>Need to know more about Move by Playette&trade;?<p>
			<p>Need to contact us? We'd love to hear from you. Phone us during regular business hours or send us an email any time and we'll get back to you.</p>
			<p><strong>Phone: </strong>+61 3 9553 0024</p>
			<p><strong>Fax: </strong>+61 3 9553 0036</p>
			<p><strong>Email: </strong>orders@dalegroup.com.au</p>

		</div>
		<div class="col-md-4 de-image"><img class="img-responsive" src="/img/Stockists_50K.jpg"></div>
		<div class="queryForm col-xs-12 col-sm-12 col-md-8">
				<form>
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
					<div class="form-group">
						<label for="firstName">First Name*</label>
						<input type="text" class="form-control" name="firstName" id="firstName" placeholder="First Name">
					</div>
					<div class="form-group">
						<label for="lastName">Last Name*</label>
						<input type="text" class="form-control" name="lastName" id="lastName" placeholder="Last Name">
					</div>
					<div class="form-group">
						<label for="email">E-mail*</label>
						<input type="text" class="form-control" name="email" id="email" placeholder="Email">
					</div>
					<div class="form-group">
						<label for="country">Country</label>
						<select id="country" class="form-control" name="country">
							<option value="		Afghanistan">		Afghanistan</option><option value="		Albania">		Albania</option><option value="		Algeria">		Algeria</option><option value="		Andorra">		Andorra</option><option value="		Angola">		Angola</option><option value="		Antigua and Barbuda">		Antigua and Barbuda</option><option value="		Argentina">		Argentina</option><option value="		Armenia">		Armenia</option><option value="		Australia">		Australia</option><option value="		Austria">		Austria</option><option value="		Azerbaijan">		Azerbaijan</option><option value="		Bahamas">		Bahamas</option><option value="		Bahrain">		Bahrain</option><option value="		Bangladesh">		Bangladesh</option><option value="		Barbados">		Barbados</option><option value="		Belarus">		Belarus</option><option value="		Belgium">		Belgium</option><option value="		Belize">		Belize</option><option value="		Benin">		Benin</option><option value="		Bhutan">		Bhutan</option><option value="		Bolivia">		Bolivia</option><option value="		Bosnia and Herzegovina">		Bosnia and Herzegovina</option><option value="		Botswana">		Botswana</option><option value="		Brazil">		Brazil</option><option value="		Brunei">		Brunei</option><option value="		Bulgaria">		Bulgaria</option><option value="		Burkina Faso">		Burkina Faso</option><option value="		Burundi">		Burundi</option><option value="		Cambodia">		Cambodia</option><option value="		Cameroon">		Cameroon</option><option value="		Canada">		Canada</option><option value="		Cape Verde">		Cape Verde</option><option value="		Central African Republic">		Central African Republic</option><option value="		Chad">		Chad</option><option value="		Chile">		Chile</option><option value="		China">		China</option><option value="		Colombi">		Colombi</option><option value="		Comoros">		Comoros</option><option value="		Congo (Brazzaville)">		Congo (Brazzaville)</option><option value="		Congo">		Congo</option><option value="		Costa Rica">		Costa Rica</option><option value="		Cote d'Ivoire">		Cote d'Ivoire</option><option value="		Croatia">		Croatia</option><option value="		Cuba">		Cuba</option><option value="		Cyprus">		Cyprus</option><option value="		Czech Republic">		Czech Republic</option><option value="		Denmark">		Denmark</option><option value="		Djibouti">		Djibouti</option><option value="		Dominica">		Dominica</option><option value="		Dominican Republic">		Dominican Republic</option><option value="		East Timor (Timor Timur)">		East Timor (Timor Timur)</option><option value="		Ecuador">		Ecuador</option><option value="		Egypt">		Egypt</option><option value="		El Salvador">		El Salvador</option><option value="		Equatorial Guinea">		Equatorial Guinea</option><option value="		Eritrea">		Eritrea</option><option value="		Estonia">		Estonia</option><option value="		Ethiopia">		Ethiopia</option><option value="		Fiji">		Fiji</option><option value="		Finland">		Finland</option><option value="		France">		France</option><option value="		Gabon">		Gabon</option><option value="		Gambia The">		Gambia The</option><option value="		Georgia">		Georgia</option><option value="		Germany">		Germany</option><option value="		Ghana">		Ghana</option><option value="		Greece">		Greece</option><option value="		Grenada">		Grenada</option><option value="		Guatemala">		Guatemala</option><option value="		Guinea">		Guinea</option><option value="		Guinea-Bissau">		Guinea-Bissau</option><option value="		Guyana">		Guyana</option><option value="		Haiti">		Haiti</option><option value="		Honduras">		Honduras</option><option value="		Hungary">		Hungary</option><option value="		Iceland">		Iceland</option><option value="		India">		India</option><option value="		Indonesia">		Indonesia</option><option value="		Iran">		Iran</option><option value="		Iraq">		Iraq</option><option value="		Ireland">		Ireland</option><option value="		Israel">		Israel</option><option value="		Italy">		Italy</option><option value="		Jamaica">		Jamaica</option><option value="		Japan">		Japan</option><option value="		Jordan">		Jordan</option><option value="		Kazakhstan">		Kazakhstan</option><option value="		Kenya">		Kenya</option><option value="		Kiribati">		Kiribati</option><option value="		Korea North">		Korea North</option><option value="		Korea South">		Korea South</option><option value="		Kuwait">		Kuwait</option><option value="		Kyrgyzstan">		Kyrgyzstan</option><option value="		Laos">		Laos</option><option value="		Latvia">		Latvia</option><option value="		Lebanon">		Lebanon</option><option value="		Lesotho">		Lesotho</option><option value="		Liberia">		Liberia</option><option value="		Libya">		Libya</option><option value="		Liechtenstein">		Liechtenstein</option><option value="		Lithuania">		Lithuania</option><option value="		Luxembourg">		Luxembourg</option><option value="		Macedonia">		Macedonia</option><option value="		Madagascar">		Madagascar</option><option value="		Malawi">		Malawi</option><option value="		Malaysia">		Malaysia</option><option value="		Maldives">		Maldives</option><option value="		Mali">		Mali</option><option value="		Malta">		Malta</option><option value="		Marshall Islands">		Marshall Islands</option><option value="		Mauritania">		Mauritania</option><option value="		Mauritius">		Mauritius</option><option value="		Mexico">		Mexico</option><option value="		Micronesia">		Micronesia</option><option value="		Moldova">		Moldova</option><option value="		Monaco">		Monaco</option><option value="		Mongolia">		Mongolia</option><option value="		Morocco">		Morocco</option><option value="		Mozambique">		Mozambique</option><option value="		Myanmar">		Myanmar</option><option value="		Namibia">		Namibia</option><option value="		Nauru">		Nauru</option><option value="		Nepa">		Nepa</option><option value="		Netherlands">		Netherlands</option><option value="		New Zealand">		New Zealand</option><option value="		Nicaragua">		Nicaragua</option><option value="		Niger">		Niger</option><option value="		Nigeria">		Nigeria</option><option value="		Norway">		Norway</option><option value="		Oman">		Oman</option><option value="		Pakistan">		Pakistan</option><option value="		Palau">		Palau</option><option value="		Panama">		Panama</option><option value="		Papua New Guinea">		Papua New Guinea</option><option value="		Paraguay">		Paraguay</option><option value="		Peru">		Peru</option><option value="		Philippines">		Philippines</option><option value="		Poland">		Poland</option><option value="		Portugal">		Portugal</option><option value="		Qatar">		Qatar</option><option value="		Romania">		Romania</option><option value="		Russia">		Russia</option><option value="		Rwanda">		Rwanda</option><option value="		Saint Kitts and Nevis">		Saint Kitts and Nevis</option><option value="		Saint Lucia">		Saint Lucia</option><option value="		Saint Vincent">		Saint Vincent</option><option value="		Samoa">		Samoa</option><option value="		San Marino">		San Marino</option><option value="		Sao Tome and Principe">		Sao Tome and Principe</option><option value="		Saudi Arabia">		Saudi Arabia</option><option value="		Senegal">		Senegal</option><option value="		Serbia and Montenegro">		Serbia and Montenegro</option><option value="		Seychelles">		Seychelles</option><option value="		Sierra Leone">		Sierra Leone</option><option value="		Singapore">		Singapore</option><option value="		Slovakia">		Slovakia</option><option value="		Slovenia">		Slovenia</option><option value="		Solomon Islands">		Solomon Islands</option><option value="		Somalia">		Somalia</option><option value="		South Africa">		South Africa</option><option value="		Spain">		Spain</option><option value="		Sri Lanka">		Sri Lanka</option><option value="		Sudan">		Sudan</option><option value="		Suriname">		Suriname</option><option value="		Swaziland">		Swaziland</option><option value="		Sweden">		Sweden</option><option value="		Switzerland">		Switzerland</option><option value="		Syria">		Syria</option><option value="		Taiwan">		Taiwan</option><option value="		Tajikistan">		Tajikistan</option><option value="		Tanzania">		Tanzania</option><option value="		Thailand">		Thailand</option><option value="		Togo">		Togo</option><option value="		Tonga">		Tonga</option><option value="		Trinidad and Tobago">		Trinidad and Tobago</option><option value="		Tunisia">		Tunisia</option><option value="		Turkey">		Turkey</option><option value="		Turkmenistan">		Turkmenistan</option><option value="		Tuvalu">		Tuvalu</option><option value="		Uganda">		Uganda</option><option value="		Ukraine">		Ukraine</option><option value="		United Arab Emirates">		United Arab Emirates</option><option value="		United Kingdom">		United Kingdom</option><option selected="selected" value="		United States">		United States</option><option value="		Uruguay">		Uruguay</option><option value="		Uzbekistan">		Uzbekistan</option><option value="		Vanuatu">		Vanuatu</option><option value="		Vatican City">		Vatican City</option><option value="		Venezuela">		Venezuela</option><option value="		Vietnam">		Vietnam</option><option value="		Yemen">		Yemen</option><option value="		Zambia">		Zambia</option><option value="		Zimbabwe">		Zimbabwe</option>
						</select>
					</div>
					<div class="form-group">
						<label for="telephone">Telephone</label>
						<input type="text" class="form-control" name="telephone" id="telephone" placeholder="Telephone">
					</div>
					<div class="form-group">
						<label for="type">Inquiry *</label>
						<select class="form-control" id="type" name="type">
							<option selected="selected" value>Please Select</option>
							<option value="">Webmaster</option>
							<option>Payment Inquiries</option>
							<option>Refund/Return Inquiries</option>
							<option>Product Inquiry</option>
							<option>General</option>
							<option>Trade Inquiry</option>
						</select>
					</div>
					<div class="form-group">
						<label for="message">Message *</label>
						<textarea class="form-control" name="message" placeholder="Message" rows="5"></textarea>
					</div>
					<div class="g-recaptcha form-group" data-sitekey="6Lcj2g4TAAAAAONnhhStFLJ0ZchtwWaxaoNPkwwB"></div>
					<button type="submit" class="btn btn-primary btn-lg btn-block">Submit</button>
				</form>
</div>
	</div>
</div>
@endsection
