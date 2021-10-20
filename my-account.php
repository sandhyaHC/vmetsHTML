<?php include("header.php") ?>
<?php include("Header-Menu.php") ?>

<div class="my_account">
	<div class="my_acount_banner">
		<div class="wrapper account_wrapper">
			<h2>My Account</h2>
			<div class="participants_tabs_box account_tabs_box hall_agenda_tabs_box">
				<ul class="tabs_nav_box nav p-0 d-flex" id="ex1" role="tablist">
				    <li class="nav-item" role="presentation">
						<a class="nav-link active" id="Basic1" data-mdb-toggle="tab" href="#Basic" role="tab" aria-controls="Basic1" aria-selected="true">
							Basic Information
						</a>
					</li>
					<li class="nav-item" role="presentation">
						<a class="nav-link" id="Basic2" data-mdb-toggle="tab" href="#Match" role="tab" aria-controls="Basic2" aria-selected="false">
							Match Making
						</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="my_account_content tab-content" id="ex1-content">
		<div class="tab-pane fade show active" id="Basic" role="tabpanel" aria-labelledby="Basic1">
			<div class="account_form_box">
				<div class="row">
					<div class="my_account_pofile col-12">
						<div class="my_account_pofile_img pofile_upload_box">
							<div class="fav_icon_upload_preview_box">
								<div class="fav_icon_upload_preview_img" id="fav_icon_upload_image_preview" style="background:url(img/account_pofile_img.png)no-repeat center;">
								</div>
								<span class="fav_icon_upload_text">
									<input type="file" id="fav_icon_image_upload" accept=".png, .jpg, .jpeg"> 
									<strong>
										<svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M18.3515 1.41888C17.1532 0.220642 15.2106 0.220642 14.0123 1.41888L1.8483 13.5829C1.76494 13.6663 1.70474 13.7696 1.67332 13.8831L0.0737083 19.658C0.00792354 19.8948 0.0747736 20.1484 0.248424 20.3223C0.422341 20.4959 0.675892 20.5628 0.912663 20.4973L6.6876 18.8974C6.80106 18.866 6.9044 18.8058 6.98776 18.7224L19.1515 6.55808C20.3479 5.35904 20.3479 3.41799 19.1515 2.21895L18.3515 1.41888ZM3.33391 14.0261L13.2892 4.07051L16.4999 7.28118L6.54432 17.2368L3.33391 14.0261ZM2.69258 15.313L5.25765 17.8784L1.70954 18.8614L2.69258 15.313ZM18.1874 5.59395L17.4643 6.31705L14.2534 3.10612L14.9767 2.38302C15.6423 1.71744 16.7215 1.71744 17.3871 2.38302L18.1874 3.18309C18.8519 3.84946 18.8519 4.92785 18.1874 5.59395V5.59395Z" fill="white">
											</path>
										</svg>
									</strong>
								</span>
							</div>
						</div>
			      	</div>
					<div class="col-12 input_box">
						<label>Full Name</label>
						<input type="text">
					</div>
					<div class="col-12 input_box">
						<label>Email</label>
						<input type="email">
					</div>
					<div class="input_box input_phone_number col-12">
		      		<label for="">Phone Number</label>
		      		<div class="input_phone_number_country  d-flex justify-content-start flex-wrap align-items-center">
		      			<div class="input_phone_number">
			      			<select  id="countryCode" name="countryCode">
							    <option data-countrycode="AF" value="93">🇦🇫 (+93)</option>
							    <option data-countrycode="AL" value="355">🇦🇽 (+355)</option>
							    <option data-countrycode="DZ" value="213">🇩🇿 (+213)</option>
							    <option data-countrycode="AD" value="376">🇦🇩 (+376)</option>
							    <option data-countrycode="AO" value="244">🇦🇴 (+244)</option>
							    <option data-countrycode="AI" value="1264">🇦🇮 (+1264)</option>
							    <option data-countrycode="AG" value="1268">🇦🇬 (+1268)</option>
							    <option data-countrycode="AR" value="54">🇦🇷 (+54)</option>
							    <option data-countrycode="AM" value="374">🇦🇲 (+374)</option>
							    <option data-countrycode="AW" value="297">🇦🇼 (+297)</option>
							    <option data-countrycode="AC" value="247">🇦🇨 (+247)</option>
							    <option data-countrycode="AU" value="61">🇦🇺 (+61)</option>
							    <option data-countrycode="AT" value="43">🇦🇹 (+43)</option>
							    <option data-countrycode="AZ" value="994">🇦🇿 (+994)</option>
							    <option data-countrycode="BS" value="1242">🇧🇸 (+1242)</option>
							    <option data-countrycode="BH" value="973">🇧🇭 (+973)</option>
							    <option data-countrycode="BD" value="880">🇧🇩 (+880)</option>
							    <option data-countrycode="BB" value="1246">🇧🇧 (+1246)</option>
							    <option data-countrycode="BY" value="375">🇧🇾 (+375)</option>
							    <option data-countrycode="BE" value="32">🇧🇪 (+32)</option>
							    <option data-countrycode="BZ" value="501">🇧🇿 (+501)</option>
							    <option data-countrycode="BJ" value="229">🇧🇯 (+229)</option>
							    <option data-countrycode="BM" value="1441">🇧🇲 (+1441)</option>
							    <option data-countrycode="BT" value="975">🇧🇹 (+975)</option>
							    <option data-countrycode="BO" value="591">🇧🇴 (+591)</option>
							    <option data-countrycode="BQ" value="599">🇧🇶 (+599)</option>
							    <option data-countrycode="BA" value="387">🇧🇦 (+387)</option>
							    <option data-countrycode="BW" value="267">🇧🇼 (+267)</option>
							    <option data-countrycode="BR" value="55">🇧🇷 (+55)</option>
							    <option data-countrycode="IO" value="246">🇮🇴 (+246)</option>
							    <option data-countrycode="BN" value="673">🇧🇳 (+673)</option>
							    <option data-countrycode="BG" value="359">🇧🇬 (+359)</option>
							    <option data-countrycode="BF" value="226">🇧🇫 (+226)</option>
							    <option data-countrycode="BI" value="257">🇧🇮 (+257)</option>
							    <option data-countrycode="KH" value="855">🇰🇭 (+855)</option>
							    <option data-countrycode="CM" value="237">🇨🇲 (+237)</option>
							    <option data-countrycode="CA" value="1">🇨🇦 (+1)</option>
							    <option data-countrycode="CV" value="238">🇨🇻 (+238)</option>
							    <option data-countrycode="KY" value="1345">🇰🇾 (+1345)</option>
							    <option data-countrycode="CF" value="236">🇨🇫 (+236)</option>
							    <option data-countrycode="TD" value="235">🇹🇩 (+235)</option>
							    <option data-countrycode="CL" value="56">🇨🇱 (+56)</option>
							    <option data-countrycode="CN" value="86">🇨🇳 (+86)</option>
							    <option data-countrycode="CO" value="57">🇨🇴 (+57)</option>
							    <option data-countrycode="KM" value="269">🇰🇲 (+269)</option>
							    <option data-countrycode="CG" value="242">🇨🇬 (+242)</option>
							    <option data-countrycode="CD" value="243">🇨🇩 (+243)</option>
							    <option data-countrycode="CK" value="682">🇨🇰 (+682)</option>
							    <option data-countrycode="CR" value="506">🇨🇷 (+506)</option>
							    <option data-countrycode="HR" value="385">🇭🇷 (+385)</option>
							    <option data-countrycode="CU" value="53">🇨🇺 (+53)</option>
							    <option data-countrycode="CW" value="5999">🇨🇼 (+5999)</option>
							    <option data-countrycode="CY" value="357">🇨🇾 (+357)</option>
							    <option data-countrycode="CZ" value="420">🇨🇿 (+420)</option>
							    <option data-countrycode="DK" value="45">🇩🇰 (+45)</option>
							    <option data-countrycode="DJ" value="253">🇩🇯 (+253)</option>
							    <option data-countrycode="DM" value="1767">🇩🇲 (+1767)</option>
							    <option data-countrycode="DO" value="1809">🇩🇴 (+1809)</option>
							    <option data-countrycode="TL" value="670">🇹🇱 (+670)</option>
							    <option data-countrycode="EC" value="593">🇪🇨 (+593)</option>
							    <option data-countrycode="EG" value="20">🇪🇬 (+20)</option>
							    <option data-countrycode="SV" value="503">🇸🇻 (+503)</option>
							    <option data-countrycode="GQ" value="240">🇬🇶 (+240)</option>
							    <option data-countrycode="ER" value="291">🇪🇷 (+291)</option>
							    <option data-countrycode="EE" value="372">🇪🇪 (+372)</option>
							    <option data-countrycode="SZ" value="268">🇸🇿 (+268)</option>
							    <option data-countrycode="ET" value="251">🇪🇹 (+251)</option>
							    <option data-countrycode="FK" value="500">🇫🇰 (+500)</option>
							    <option data-countrycode="FO" value="298">🇫🇴 (+298)</option>
							    <option data-countrycode="FJ" value="679">🇫🇯 (+679)</option>
							    <option data-countrycode="FI" value="358">🇫🇮 (+358)</option>
							    <option data-countrycode="FR" value="33">🇫🇷 (+33)</option>
							    <option data-countrycode="GF" value="594">🇬🇫 (+594)</option>
							    <option data-countrycode="PF" value="689">🇵🇫 (+689)</option>
							    <option data-countrycode="GA" value="241">🇬🇦 (+241)</option>
							    <option data-countrycode="GM" value="220">🇬🇲 (+220)</option>
							    <option data-countrycode="GE" value="995">🇬🇪 (+995)</option>
							    <option data-countrycode="DE" value="49">🇩🇪 (+49)</option>
							    <option data-countrycode="GH" value="233">🇬🇭 (+233)</option>
							    <option data-countrycode="GI" value="350">🇬🇮 (+350)</option>
							    <option data-countrycode="GR" value="30">🇬🇷 (+30)</option>
							    <option data-countrycode="GL" value="299">🇬🇱 (+299)</option>
							    <option data-countrycode="GD" value="1473">🇬🇩 (+1473)</option>
							    <option data-countrycode="GP" value="590">🇬🇵 (+590)</option>
							    <option data-countrycode="GU" value="1671">🇬🇺 (+1671)</option>
							    <option data-countrycode="GT" value="502">🇬🇹 (+502)</option>
							    <option data-countrycode="GN" value="224">🇬🇳 (+224)</option>
							    <option data-countrycode="GW" value="245">🇬🇼 (+245)</option>
							    <option data-countrycode="GY" value="592">🇬🇾 (+592)</option>
							    <option data-countrycode="HT" value="509">🇭🇹 (+509)</option>
							    <option data-countrycode="HN" value="504">🇭🇳 (+504)</option>
							    <option data-countrycode="HK" value="852">🇭🇰 (+852)</option>
							    <option data-countrycode="HU" value="36">🇭🇺 (+36)</option>
							    <option data-countrycode="IS" value="354">🇮🇸 (+354)</option>
							    <option selected="" data-countrycode="IN" value="91">🇮🇳 (+91)</option>
							    <option data-countrycode="ID" value="62">🇮🇩 (+62)</option>
							    <option data-countrycode="IR" value="98">🇮🇷 (+98)</option>
							    <option data-countrycode="IQ" value="964">🇮🇶 (+964)</option>
							    <option data-countrycode="IE" value="353">🇮🇪 (+353)</option>
							    <option data-countrycode="IL" value="972">🇮🇱 (+972)</option>
							    <option data-countrycode="IT" value="39">🇮🇹 (+39)</option>
							    <option data-countrycode="CI" value="225">🇨🇮 (+225)</option>
							    <option data-countrycode="JM" value="1876">🇯🇲 (+1876)</option>
							    <option data-countrycode="JP" value="81">🇯🇵 (+81)</option>
							    <option data-countrycode="JO" value="962">🇯🇴 (+962)</option>
							    <option data-countrycode="KZ" value="7">🇰🇿 (+7)</option>
							    <option data-countrycode="KE" value="254">🇰🇪 (+254)</option>
							    <option data-countrycode="KI" value="686">🇰🇮 (+686)</option>
							    <option data-countrycode="KP" value="850">🇰🇵 (+850)</option>
							    <option data-countrycode="KR" value="82">🇰🇷 (+82)</option>
							    <option data-countrycode="XK" value="383">🇽🇰 (+383)</option>
							    <option data-countrycode="KW" value="965">🇰🇼 (+965)</option>
							    <option data-countrycode="KG" value="996">🇰🇬 (+996)</option>
							    <option data-countrycode="LA" value="856">🇱🇦 (+856)</option>
							    <option data-countrycode="LV" value="371">🇱🇻 (+371)</option>
							    <option data-countrycode="LB" value="961">🇱🇧 (+961)</option>
							    <option data-countrycode="LS" value="266">🇱🇸 (+266)</option>
							    <option data-countrycode="LR" value="231">🇱🇷 (+231)</option>
							    <option data-countrycode="LY" value="218">🇱🇾 (+218)</option>
							    <option data-countrycode="LI" value="423">🇱🇮 (+423)</option>
							    <option data-countrycode="LT" value="370">🇱🇹 (+370)</option>
							    <option data-countrycode="LU" value="352">🇱🇺 (+352)</option>
							    <option data-countrycode="MO" value="853">🇲🇴 (+853)</option>
							    <option data-countrycode="MK" value="389">🇲🇰 (+389)</option>
							    <option data-countrycode="MG" value="261">🇲🇬 (+261)</option>
							    <option data-countrycode="MW" value="265">🇲🇼 (+265)</option>
							    <option data-countrycode="MY" value="60">🇲🇾 (+60)</option>
							    <option data-countrycode="MV" value="960">🇲🇻 (+960)</option>
							    <option data-countrycode="ML" value="223">🇲🇱 (+223)</option>
							    <option data-countrycode="MT" value="356">🇲🇹 (+356)</option>
							    <option data-countrycode="MH" value="692">🇲🇭 (+692)</option>
							    <option data-countrycode="MQ" value="596">🇲🇶 (+596)</option>
							    <option data-countrycode="MR" value="222">🇲🇷 (+222)</option>
							    <option data-countrycode="MU" value="230">🇲🇺 (+230)</option>
							    <option data-countrycode="YT" value="262">🇾🇹 (+262)</option>
							    <option data-countrycode="MX" value="52">🇲🇽 (+52)</option>
							    <option data-countrycode="FM" value="691">🇫🇲 (+691)</option>
							    <option data-countrycode="MD" value="373">🇲🇩 (+373)</option>
							    <option data-countrycode="MC" value="377">🇲🇨 (+377)</option>
							    <option data-countrycode="MN" value="976">🇲🇳 (+976)</option>
							    <option data-countrycode="ME" value="382">🇲🇪 (+382)</option>
							    <option data-countrycode="MS" value="1664">🇲🇸 (+1664)</option>
							    <option data-countrycode="MA" value="212">🇲🇦 (+212)</option>
							    <option data-countrycode="MZ" value="258">🇲🇿 (+258)</option>
							    <option data-countrycode="MN" value="95">🇲🇲 (+95)</option>
							    <option data-countrycode="NA" value="264">🇳🇦 (+264)</option>
							    <option data-countrycode="NR" value="674">🇳🇷 (+674)</option>
							    <option data-countrycode="NP" value="977">🇳🇵 (+977)</option>
							    <option data-countrycode="NL" value="31">🇳🇱 (+31)</option>
							    <option data-countrycode="NC" value="687">🇳🇨 (+687)</option>
							    <option data-countrycode="NZ" value="64">🇳🇿 (+64)</option>
							    <option data-countrycode="NI" value="505">🇳🇮 (+505)</option>
							    <option data-countrycode="NE" value="227">🇳🇪 (+227)</option>
							    <option data-countrycode="NG" value="234">🇳🇬 (+234)</option>
							    <option data-countrycode="NU" value="683">🇳🇺 (+683)</option>
							    <option data-countrycode="NF" value="672">🇳🇫 (+672)</option>
							    <option data-countrycode="NP" value="1670">🇲🇵 (+1670)</option>
							    <option data-countrycode="NO" value="47">🇳🇴 (+47)</option>
							    <option data-countrycode="OM" value="968">🇴🇲 (+968)</option>
							    <option data-countrycode="PK" value="92">🇵🇰 (+92)</option>
							    <option data-countrycode="PW" value="680">🇵🇼 (+680)</option>
							    <option data-countrycode="PS" value="970">🇵🇸 (+970)</option>
							    <option data-countrycode="PA" value="507">🇵🇦 (+507)</option>
							    <option data-countrycode="PG" value="675">🇵🇬 (+675)</option>
							    <option data-countrycode="PY" value="595">🇵🇾 (+595)</option>
							    <option data-countrycode="PE" value="51">🇵🇪 (+51)</option>
							    <option data-countrycode="PH" value="63">🇵🇭 (+63)</option>
							    <option data-countrycode="PL" value="48">🇵🇱 (+48)</option>
							    <option data-countrycode="PT" value="351">🇵🇹 (+351)</option>
							    <option data-countrycode="PR" value="1787">🇵🇷 (+1787)</option>
							    <option data-countrycode="QA" value="974">🇶🇦 (+974)</option>
							    <option data-countrycode="RE" value="262">🇷🇪 (+262)</option>
							    <option data-countrycode="RO" value="40">🇷🇴 (+40)</option>
							    <option data-countrycode="RU" value="7">🇷🇺 (+7)</option>
							    <option data-countrycode="RW" value="250">🇷🇼 (+250)</option>
							    <option data-countrycode="WS" value="685">🇼🇸 (+685)</option>
							    <option data-countrycode="SM" value="378">🇸🇲 (+378)</option>
							    <option data-countrycode="ST" value="239">🇸🇹 (+239)</option>
							    <option data-countrycode="SA" value="966">🇸🇦 (+966)</option>
							    <option data-countrycode="SN" value="221">🇸🇳 (+221)</option>
							    <option data-countrycode="CS" value="381">🇷🇸 (+381)</option>
							    <option data-countrycode="SC" value="248">🇸🇨 (+248)</option>
							    <option data-countrycode="SL" value="232">🇸🇱 (+232)</option>
							    <option data-countrycode="SG" value="65">🇸🇬 (+65)</option>
							    <option data-countrycode="SK" value="421">🇸🇰 (+421)</option>
							    <option data-countrycode="SI" value="386">🇸🇮 (+386)</option>
							    <option data-countrycode="SB" value="677">🇸🇧 (+677)</option>
							    <option data-countrycode="SO" value="252">🇸🇴 (+252)</option>
							    <option data-countrycode="ZA" value="27">🇿🇦 (+27)</option>
							    <option data-countrycode="SS" value="211">🇸🇸 (+211)</option>
							    <option data-countrycode="ES" value="34">🇪🇸 (+34)</option>
							    <option data-countrycode="LK" value="94">🇱🇰 (+94)</option>
							    <option data-countrycode="SH" value="290">🇸🇭 (+290)</option>
							    <option data-countrycode="KN" value="1869">🇰🇳 (+1869)</option>
							    <option data-countrycode="SC" value="1758">🇱🇨 (+1758)</option>
							    <option data-countrycode="PM" value="508">🇵🇲 (+508)</option>
							    <option data-countrycode="SD" value="249">🇸🇩 (+249)</option>
							    <option data-countrycode="SR" value="597">🇸🇷 (+597)</option>
							    <option data-countrycode="SE" value="46">🇸🇪 (+46)</option>
							    <option data-countrycode="CH" value="41">🇨🇭 (+41)</option>
							    <option data-countrycode="SI" value="963">🇸🇾 (+963)</option>
							    <option data-countrycode="TW" value="886">🇹🇼 (+886)</option>
							    <option data-countrycode="TJ" value="992">🇹🇯 (+992)</option>
							    <option data-countrycode="TZ" value="255">🇹🇿 (+255)</option>
							    <option data-countrycode="TH" value="66">🇹🇭 (+66)</option>
							    <option data-countrycode="TG" value="228">🇹🇬 (+228)</option>
							    <option data-countrycode="TK" value="690">🇹🇰 (+690)</option>
							    <option data-countrycode="TO" value="676">🇹🇴 (+676)</option>
							    <option data-countrycode="TT" value="1868">🇹🇹 (+1868)</option>
							    <option data-countrycode="TN" value="216">🇹🇳 (+216)</option>
							    <option data-countrycode="TR" value="90">🇹🇷 (+90)</option>
							    <option data-countrycode="TM" value="993">🇹🇲 (+993)</option>
							    <option data-countrycode="TC" value="1649">🇹🇨 (+1649)</option>
							    <option data-countrycode="TV" value="688">🇹🇻 (+688)</option>
							    <option data-countrycode="UG" value="256">🇺🇬 (+256)</option>
							    <option data-countrycode="UA" value="380">🇺🇦 (+380)</option>
							    <option data-countrycode="AE" value="971">🇦🇪 (+971)</option>
							    <option data-countrycode="GB" value="44">🇬🇧 (+44)</option>
							    <option data-countrycode="US" value="1">🇺🇸 (+1)</option>
							    <option data-countrycode="UY" value="598">🇺🇾 (+598)</option>
							    <option data-countrycode="UZ" value="998">🇺🇿 (+998)</option>
							    <option data-countrycode="VU" value="678">🇻🇺 (+678)</option>
							    <option data-countrycode="VA" value="39">🇻🇦 (+39)</option>
							    <option data-countrycode="VE" value="58">🇻🇪 (+58)</option>
							    <option data-countrycode="VN" value="84">🇻🇳 (+84)</option>
							    <option data-countrycode="VG" value="1284">🇻🇬 (+1284)</option>
							    <option data-countrycode="VI" value="1340">🇻🇮 (+1340)</option>
							    <option data-countrycode="WF" value="681">🇼🇫 (+681)</option>
							    <option data-countrycode="EH" value="967">🇪🇭 (+212)</option>
							    <option data-countrycode="YE" value="967">🇾🇪 (+967)</option>
							    <option data-countrycode="ZM" value="260">🇿🇲 (+260)</option>
							    <option data-countrycode="ZW" value="263">🇿🇼 (+263)</option>
							</select>
						</div>
		      			<input class="input_phone_name" type="tel" id="phone" name="phone">
		      		</div>
		      	</div>
					<div class="col-12 input_box">
						<label>Company</label>
						<input type="text">
					</div>
					<div class="col-12 input_box">
						<label>Designation</label>
						<input type="text">
					</div>
					<div class="col-12 gender_box">
						<div class="radio_btn d-flex align-items-center">
							<h4>Gender</h4>
							<div class="form-check">
								<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" autocompleted="">
								<label class="form-check-label" for="flexRadioDefault1">Male</label>
							</div>     
							<div class="form-check">
								<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" autocompleted="">
								<label class="form-check-label" for="flexRadioDefault2">Female </label>
							</div>
						</div>
					</div>
					<div class="col-12 input_box select_box">
						<label>Age</label>
						<select>
							<option selected="" value="Select">Select</option>
							<option selected="" value="10">10</option>
							<option selected="" value="20">20</option>
							<option selected="" value="30">30</option>
						</select>
					</div>
					<div class="address_box p-0">
						<div class="pl-15 pb-15">
							<h4>Address</h4>
						</div>	
						<div class="row m-0">
							<div class="col-12 input_box">
								<label>Address Line 1</label>
								<input type="text">
							</div>
							<div class="col-12 input_box">
								<label>Address Line 2</label>
								<input type="text">
							</div>
							<div class="col-12 col-md-6 input_box">
								<label>City</label>
								<input type="text">
							</div>
							<div class="col-12 input_box  col-md-6">
								<div class="select_box">
									<label>Country</label>
									<select>
										<option selected="" value="Select Country">Select Country</option>
										<option selected="" value="1">1</option>
										<option selected="" value="2">2</option>
										<option selected="" value="3">3</option>
									</select>
								</div>
							</div>
						</div>
					</div>
					<div class="address_box social_media_form NetworkingFormBox p-0">
						<div class="networking_title_box pl-15 pb-30">
							<div class="networking_title d-flex justify-content-between align-items-center">
								<h4>Networking</h4>
								<div class="toogle_switch_box ml-20">
									<input type="checkbox" id="switch_box_1" autocompleted="">
									<label for="switch_box_1"></label>
								</div>
							</div>	
							<p>Let Vmeets know when you’re typically available to accept meetings.</p>	
						</div>	
						<div class="row m-0 pb-15">
							<label for="" class="pb-10">Available Dates</label>
							<div class="col-6">
								<div class="input_check_box">
									<input type="checkbox" id="info_Airline-Transportation_new">
									<label for="info_Airline-Transportation_new">01/02/2021</label>
								</div>
							</div>
							<div class="CenterLine">-</div>
							<div class="col-6">
								<div class="input_check_box">
									<input type="checkbox" id="info_Airline-Transportation_new_2">
									<label for="info_Airline-Transportation_new_2">02/02/2021</label>
								</div>
							</div>
						</div>
						<div class="row m-0">
							<label for="" class="pb-10">Available Dates</label>
							<div class="col-6 input_box">
								<div class="select_box">
									<select>
										<option selected="" value="Select Country">Select Country</option>
										<option selected="" value="09:00 AM">09:00 AM</option>
										<option selected="" value="10:00 AM">10:00 AM</option>
										<option selected="" value="11:00 AM">11:00 AM</option>
									</select>
								</div>
							</div>
							<div class="CenterLine">-</div>
							<div class="col-6 input_box">
								<div class="select_box">
									<select>
										<option selected="" value="Select Country">Select Country</option>
										<option selected="" value="09:00 AM">09:00 AM</option>
										<option selected="" value="10:00 AM">10:00 AM</option>
										<option selected="" value="11:00 AM">11:00 AM</option>
									</select>
								</div>
							</div>
						</div>
					</div>


					<div class="address_box social_media_form p-0">
						<div class="pl-15 pb-15">
							<h4>Social Media</h4>
						</div>	
						<div class="row m-0">
							<div class="col-12 input_box">
								<label>LinkedIn</label>
								<input type="text">
							</div>
							<div class="col-12 input_box">
								<label>Instragram</label>
								<input type="text">
							</div>
							<div class="col-12 input_box">
								<label>Twitter</label>
								<input type="text">
							</div>
							<div class="col-12 input_box">
								<label>Facebook</label>
								<input type="text">
							</div>
						</div>
					</div>
					<div class="col-12">
						<a href="#." class="blue_btn mt-30" >
							Save Changes
						</a>
					</div>
				</div>
			</div>
		</div>
		<div class="tab-pane fade" id="Match" role="tabpanel" aria-labelledby="Basic2">
			<div class="account_form_box">
				<div class="custom_checkbox_list">
					<div class="title">
						<h3>Products and solutions I offer</h3>
					</div>
					<div class="input_check_box">
		      			<input type="checkbox" id="Auto-Approve-1">
		      			<label for="Auto-Approve-1">Government</label>
		      		</div>
		      		<div class="input_check_box">
		      			<input type="checkbox" id="Auto-Approve-2">
		      			<label for="Auto-Approve-2">Construction</label>
		      		</div>
		      		<div class="input_check_box">
		      			<input type="checkbox" id="Semi-Government">
		      			<label for="Semi-Government">Semi-Government</label>
		      		</div>
		      		<div class="input_check_box">
		      			<input type="checkbox" id="Technology-Solution-Provider">
		      			<label for="Technology-Solution-Provider">Technology Solution Provider</label>
		      		</div>
		      		<div class="input_check_box">
		      			<input type="checkbox" id="Tourism-Authority">
		      			<label for="Tourism-Authority">Tourism Authority</label>
		      		</div>
		      		<div class="input_check_box">
		      			<input type="checkbox" id="Consultant">
		      			<label for="Consultant">Consultant</label>
		      		</div>
		      		<div class="input_check_box">
		      			<input type="checkbox" id="Hotel">
		      			<label for="Hotel">Hotel Owner / Operator</label>
		      		</div>
		      		<div class="input_check_box">
		      			<input type="checkbox" id="Industry-Association">
		      			<label for="Industry-Association">Industry Association</label>
		      		</div>
		      		<div class="input_check_box">
		      			<input type="checkbox" id="Airline-Transportation">
		      			<label for="Airline-Transportation">Airline / Transportation</label>
		      		</div>
		      		<div class="input_check_box">
		      			<input type="checkbox" id="Media">
		      			<label for="Media">Media</label>
		      		</div>
		      		<div class="input_check_box">
		      			<input type="checkbox" id="Travel-Booking-Agent">
		      			<label for="Travel-Booking-Agent">Travel / Booking Agent</label>
		      		</div>
		      		<div class="input_check_box">
		      			<input type="checkbox" id="Other">
		      			<label for="Other">Other</label>
		      		</div>
				</div>
				<div class="custom_checkbox_list">
					<div class="title">
						<h3>Products and solutions I seek</h3>
					</div>
					<div class="input_check_box">
		      			<input type="checkbox" id="info_Auto-Approve-1">
		      			<label for="info_Auto-Approve-1">Government</label>
		      		</div>
		      		<div class="input_check_box">
		      			<input type="checkbox" id="info_Auto-Approve-2">
		      			<label for="info_Auto-Approve-2">Construction</label>
		      		</div>
		      		<div class="input_check_box">
		      			<input type="checkbox" id="info_Semi-Government">
		      			<label for="info_Semi-Government">Semi-Government</label>
		      		</div>
		      		<div class="input_check_box">
		      			<input type="checkbox" id="info_Technology-Solution-Provider">
		      			<label for="info_Technology-Solution-Provider">Technology Solution Provider</label>
		      		</div>
		      		<div class="input_check_box">
		      			<input type="checkbox" id="info_Tourism-Authority">
		      			<label for="info_Tourism-Authority">Tourism Authority</label>
		      		</div>
		      		<div class="input_check_box">
		      			<input type="checkbox" id="info_Consultant">
		      			<label for="info_Consultant">Consultant</label>
		      		</div>
		      		<div class="input_check_box">
		      			<input type="checkbox" id="info_Hotel">
		      			<label for="info_Hotel">Hotel Owner / Operator</label>
		      		</div>
		      		<div class="input_check_box">
		      			<input type="checkbox" id="info_Industry-Association">
		      			<label for="info_Industry-Association">Industry Association</label>
		      		</div>
		      		<div class="input_check_box">
		      			<input type="checkbox" id="info_Airline-Transportation">
		      			<label for="info_Airline-Transportation">Airline / Transportation</label>
		      		</div>
		      		<div class="input_check_box">
		      			<input type="checkbox" id="info_Media">
		      			<label for="info_Media">Media</label>
		      		</div>
		      		<div class="input_check_box">
		      			<input type="checkbox" id="info_Travel-Booking-Agent">
		      			<label for="info_Travel-Booking-Agent">Travel / Booking Agent</label>
		      		</div>
		      		<div class="input_check_box">
		      			<input type="checkbox" id="info_Other">
		      			<label for="info_Other">Other</label>
		      		</div>
				</div>
				<a href="#." class="blue_btn">
					Save Changes
				</a>
			</div>
		</div>

	</div>
</div>	
		
<?php include("footer.php") ?>