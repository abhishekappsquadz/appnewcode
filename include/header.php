

<div id="header-section">
    <div class="start-a-project rq-ud-form closed">
        <div class="start-projectinner">
            <div class="container-fluid"  style="background-color: #005fbb;">
                <div class="col-sm-12">
                    <header class="popup-header">
                        <a href="/appsquadz/index.php" tabindex="-1"><img src="img/logo.png?1487942963" alt="Logo"></a> 
                        <div class="circCont close-button">
                            <button type="button" class="circle" data-animation="showShadow" data-remove="3000" data-from="req-a-quote"></button>
                        </div>
                    </header>
                </div>
            </div>
            <!--current (request quote)-->
            <form  action="contact_us.php" id="get_in_touch" name="get_in_touch" onsubmit="return validateGetintouch()" enctype="multipart/form-data" novalidate="novalidate" method="post" accept-charset="utf-8">
                <div style="display:none;"><input type="hidden" name="_method" value="POST" /></div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12  rq-head" style="background-color: #005fbb;">
                            <div class="main-heading section-heading">
                                <div> <img src="img/namaste.png" alt="Namaste AppSquadz" width="60px"> </div>
                                <div class="section-title">
                                    <h2>Gets in touch to get the ball rolling</h2>
                                    <h3>We’re eager to work with you. Please share your project goals and contact information. We respond to 97% of messages within 1-2 business day. <strong>Really!</strong></h3>
                                    <br><br>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 mt60 rq-main-form-block">
                            <div class="popup-box got-an-idea" id="gotn-idea">
                                <div class="section-heading">
                                    <div class="section-title">
                                        <h2>Tell us something about you</h2>
                                    </div>
                                </div>
                                <div class="popup-form gotanidea-form">
                                    <!-- 
                                        <input type="hidden" name="data[Contacts][country]" value="India" id="ContactsCountry2" />
                                        <input type="hidden" name="data[Contacts][city]" value="Gurgaon" id="ContactsCity2" />
                                        <input type="hidden" name="data[Contacts][zip]" value="" id="ContactsZip2" />
                                        <input type="hidden" name="data[Contacts][state]" value="" id="ContactsState2" />
                                        <input type="hidden" name="data[Contacts][ip]" value="" id="ContactsIp2" />
                                        <input type="hidden" name="data[Contacts][type]" value="request-quote" id="ContactsType2" />
                                        <input type="hidden" name="data[Contacts][calling_code]" value="+91" id="ContactsCallingCode2" />
                                        <input type="hidden" name="data[Contacts][source]" value="https://www.appsquadz.com/" id="ContactsSource2" />
                                    -->
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12">
                                            <div class="form-group input-effect">
                                                <div>
                                                    <input name="name" class="effect-16 form-control LoNotSensitive"  placeholder="" autocomplete="off" tabindex="0" id="name" type="text" /> <label>Your Name*</label>
                                                    <input type="hidden" name="page" value="letstalk">
                                                    <input type="hidden" name="by_website" value="New_Appsquadz">
                                                    <span class="focus-border"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group marT50">
                                                <!-- 
                                                    <div class="form-group-country">
                                                        <div name="country" id="" data-input-name="country" data-selected-country="IN" tabindex="-1"></div>
                                                        <label>Country*</label>
                                                        <span class="focus-border"></span>
                                                    </div> 
                                                -->
                                                <div class="form-group">
                                                    <!-- <div id="country_id2" data-input-name="country"></div> -->
                                                    <div class="bfh-selectbox bfh-countries" data-country="IN" data-flags="true"></div>
                                                </div>
                                            </div>
                                            <!-- <script>
                                                $('#country_id2').flagStrap();
                                            </script> -->
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group input-effect marT50">
                                                <div>
                                                    <input name="email" class="effect-16 form-control LoNotSensitive" placeholder="" autocomplete="off" tabindex="0" id="ContactsEmail2" type="email" /> 
                                                    <label>Your Email*</label>
                                                    <span class="focus-border"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group input-effect mobile-number marT50">
                                                <div class="phonenumber-filed">
                                                    <input name="mobile" class="effect-16 form-control LoNotSensitive" placeholder="" autocomplete="off" tabindex="0" id="ContactsPhone2" type="tel" /> 
                                                    <label>Phone Number*</label>
                                                    <span class="focus-border"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group input-effect marT50">
                                                <div>
                                                    <input name="skype_whatsapp" class="effect-16 form-control LoNotSensitive" placeholder="" autocomplete="off" tabindex="0" id="ContactsSkypeid2" type="text" /> <label>Skype ID/Whatsapp No.</label>
                                                    <span class="focus-border"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="section-heading mt90">
                                        <div class="section-title">
                                            <h2>Tell us something about your project</h2>
                                        </div>
                                    </div>
                                    <div class="popup-form gotanidea-form">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="form-group input-effect">
                                                    <div id="content" class="common-textarea">
                                                        <textarea name="message" class="form-control effect-16 LoNotSensitive" onkeyup="textAreaAdjust(this)" tabindex="0" id="ContactsMessage2"></textarea> <label>What’s your project all about?*</label>
                                                        <span class="focus-border"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="rq-looking-for">
                                            <div class="section-heading mt50">
                                                <div class="section-title">
                                                    <h2>What are you looking for?*</h2>
                                                </div>
                                            </div>
                                            <div class="row marT40">
                                                <div class="col-md-4 col-sm-4">
                                                    <div class="checkbox2">
                                                        <label>
                                                        <input type="checkbox" multiple name="category" value="Enterprise Software Solutions" id="ContactsCategory_1" /> <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
                                                        Enterprise Software Solutions
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-sm-4">
                                                    <div class="checkbox2">
                                                        <label>
                                                        <input type="checkbox" name="category" value="Creating a Mobile App" id="ContactsCategory_2" /> <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
                                                        Creating a Mobile App
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-sm-4">
                                                    <div class="checkbox2">
                                                        <label>
                                                        <input type="checkbox" name="category" value="Web Development" id="ContactsCategory_3" /> <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
                                                        Web Development
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4 col-sm-4">
                                                    <div class="checkbox2">
                                                        <label>
                                                        <input type="checkbox" name="category" value="Dedicated Team Service" id="ContactsCategory_4" /> <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
                                                        Dedicated Team Service
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-sm-4">
                                                    <div class="checkbox2">
                                                        <label>
                                                        <input type="checkbox" name="category" value="IT Consulting Services" id="ContactsCategory_5" /> <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
                                                        IT Consulting Services
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-sm-4">
                                                    <div class="checkbox2">
                                                        <label>
                                                        <input type="checkbox" name="category" value="Partnership Opportunities" id="ContactsCategory_7" /><span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
                                                        Partnership Opportunities
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4 col-sm-4">
                                                    <div class="checkbox2">
                                                        <label>
                                                        <input type="checkbox" name="category" value="Enhancing an Existing Product" id="ContactsCategory_6" /> <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
                                                        Enhancing an Existing Products
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-sm-4">
                                                    <div class="checkbox2">
                                                        <label>
                                                        <input type="checkbox" name="category" value="Enhancing an Existing Product" id="ContactsCategory_6" /> <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
                                                        Others
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row marT20 rq-select-boxes">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <div class="select">
                                                        <select name="budget" class="form-control" tabindex="0" id="ContactsBudget2">
                                                            <option value="">Select your budget range*</option>
                                                            <option value="Less than $5,000">Less than $5,000</option>
                                                            <option value="$5,000 - $10,000">$5,000 - $10,000</option>
                                                            <option value="$10,000 - $25,000">$10,000 - $25,000</option>
                                                            <option value="$25,000 - $50,000">$25,000 - $50,000</option>
                                                            <option value="$50,000 - $1,00,000">$50,000 - $1,00,000</option>
                                                            <option value="$100,000+">$100,000+</option>
                                                        </select>
                                                        <div class="select__arrow"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <div class="select">
                                                        <select name="preferences" class="form-control" tabindex="0" id="ContactsTimeFrame">
                                                            <option value="">When do you want to get started?*</option>
                                                            <option value="Immediately">Immediately</option>
                                                            <option value="Within a Month">Within a Month</option>
                                                            <option value="1-3 Months">1-3 Months</option>
                                                            <option value="3-6 Months">3-6 Months</option>
                                                            <option value="6+ Months">6+ Months</option>
                                                        </select>
                                                        <div class="select__arrow"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group upoad-check-option full-block">
                                            <div class="row marT60 rq-attech-file">
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <div class="uploadFile">
                                                            <!-- <input name="files" id="inquire_quote_files" name="file" type="file" class="file-upload" multiple tabindex="0" />-->
                                                            <input name="file" name="file" id="inquire_quote_files" class="file-upload" multiple="" tabindex="0" type="file">  
                                                            <label>
                                                            <i class="add-file"></i><strong>Attach any files you feel would be useful<br /> <span>(Attach Filesget (doc, xls, pdf, txt, ppt and zip files only, max Size 10MB)</span></strong>
                                                            </label>
                                                            <div id="progress-wrp2" style="display:none">
                                                                <div class="progress-bar"></div >
                                                                <div class="status"></div>
                                                            </div>
                                                            <div class='add-file-output' id="output2"></div>
                                                            <div class='add-file-output' id="file_err_msg" style="color:#F00"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--new-->
                                                <div class="col-sm-12" style="margin-top:20px">
                                                    <div class="checkbox" style="margin-right:130px;">
                                                        <div class="cus-control-group">
                                                            <label class="cus-control cus-control--checkbox">
                                                            <i style="font-color:blue"class="add-file"> Yes, send me a Mutual NDA (Non-Disclosure Agreement)</i>
                                                            <input type="checkbox" name="send_nda" tabindex="0" value="1" id="ContactsNda"> <span class="cus-control__indicator"></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row marT60 rq-attech-file">
                                            <h3>"We check our email everyday and reply even if we're at dinner"</h3>
                                        </div>
                                        <div class="row marT50 rq-btn-block">
                                            <!-- <div class="col-md-5 col-sm-6">
                                                <div id="RecaptchaField2" class="captcha" style="width:306px"></div>
                                                </div> -->
                                            <div class="col-md-7 col-sm-12">
                                                <input type="submit" name="submit" value="submit" style="border: none; margin-left: 160px;" class="comman-btn blue-new-btn nextButton" tabindex="0"></input>
                                                <!-- <button type="submit" style="border: none; margin-left: 160px;" name="submit" value="submit" class="blue-new-btn nextButton" tabindex="0">Let&#039;s go!</button> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12" style="background-color: #101e2a; padding: 40px 19px;">
                            <div class="container">
                                <div class="footer-part1" id="footer-part1" >
                                    <center>
                                        <img src="img/icons/taj.png">
                                        <a href="/appsquadz/mobile-app-development-company-in-india.php"><span><i class="fa fa-map-marker fa-1x" aria-hidden="true" style="color: #009afb;"></i></span> India</a> <br><br><br>
                                        <p>H 35 , Sector 63, <br> Noida, India - 201301 <br> +91-9717270746,<br> +91-120-4238296</p>
                                    </center>
                                </div>
                                <div class="footer-part1" id="footer-part1">
                                    <center>
                                        <img src="img/icons/us.png" width="13%;">
                                        <a href="/appsquadz/mobile-app-development-company-in-usa.php"><span><i class="fa fa-map-marker fa-1x" aria-hidden="true" style="color: #009afb;"></i></span> USA</a>
                                        <br><br><br>
                                        <p>H 35 , Sector 63, <br> 426, Harrison ave,New Jersey, USA 07029 <br>+1-877-659-9068</p>
                                    </center>
                                </div>
                                <div class="footer-part1" id="footer-part1">
                                    <center>
                                        <img src="img/icons/uk.png" width="40%">
                                        <a href="/appsquadz/mobile-app-development-company-in-uk.php"><span><i class="fa fa-map-marker fa-1x" aria-hidden="true" style="color: #009afb;"></i></span> UK</a>
                                        <br><br><br>
                                        <p>816A, Stockport Road, <br>Manchester - <br>M19 3BS <br>+44-203-807-3810</p>
                                    </center>
                                </div>
                                <div class="footer-part1" id="footer-part1">
                                    <center>
                                        <img src="img/icons/aus.png" width="41%"> 
                                        <a href="/appsquadz/mobile-app-development-company-in-uae.php"><span><i class="fa fa-map-marker fa-1x" aria-hidden="true" style="color: #009afb;"></i></span> UAE</a><br><br><br>
                                        <p>Al Yahar Street,Al Khalidiya, Landmark Etisala Tower <br> Abu Dhabi - 33408 <br>+91-9717270746</p>
                                    </center>
                                </div>
                                <div class="footer-part1" id="footer-part1">
                                    <center>
                                        <img src="img/icons/thai.png"> 
                                        <br>
                                        <a href="/appsquadz/mobile-app-development-company-in-thailand.php"><span><i class="fa fa-map-marker fa-1x" aria-hidden="true" style="color: #009afb;"></i></span> Thailand</a><br><br>
                                        <p>279/16, Moo 3, Sankampaeng <br>Chiang Mai 50130 <br>+66-0946430863</p>
                                    </center>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <input type="hidden" name="data[Contacts][step_value]" id="step_value" value="" />
            </form>
        </div>
    </div>
    <!-- BUG CANT EXPLAIN WHY BG GOES WHITE ON THAT LINE -->
    <!-- <p class="pinned--bottom-right">
        Or send us an email at: <a href="/appsquadz/cdn-cgi/l/email-protection.php#e291838e8791a2898d8c9196838c968b8c848dcc818d8f"><span class="__cf_email__" data-cfemail="b2c1d3ded7c1f2d9dddcc1c6d3dcc6dbdcd4dd9cd1dddf">sales@appsquadz.com</span></a>
        </p> -->
    <div class="start-a-project--bg"></div>
    <div class="custom-navbar mobile-nav ">
        <nav class="animated3 navbar">
            <div class="navigation">
                <div class="nav-grid"><a href="javascript:void(0)" class=""><span></span></a></div>
                <div id="navbar-m" class="navbar-collapse navigation-part">
                    <div class="com-info">
                        <ul>
                            <li>
                                <a href="/appsquadz/cdn-cgi/l/email-protection.php#9ceffdf0f9efdcf7f3f2efe8fdf2e8f5f2faf3b2fff3f1">
                                <i class="fa fa-envelope-o" aria-hidden="true"></i><span class="__cf_email__" data-cfemail="691a08050c1a290206071a1d08071d00070f06470a0604">[email&#160;protected]</span>
                                </a>
                            </li>
                            <li class="number">
                                <a href="javascript:void(0)">
                                <i class="fa fa-phone" aria-hidden="true"></i>&nbsp;
                                <i class="fa fa-caret-down" aria-hidden="true"></i>
                                </a>
                                <div class="com-info-inquiry-dd">
                                    <div class="com-info-inquiry">
                                        <div class="con-heading">AppSquadz Contacts</div>
                                        <div class="inquiry-block">
                                            <div class="img sales-inq"></div>
                                            <div class="inqSal">For Sales Inquiry</div>
                                            <div class="inqSal"> <a href="/appsquadz/email:919717270746">sales@appsquadz.com</a></div>
                                            <ul>
                                                <li class="flag3"><a href="/appsquadz/tel:919717270746">+91-9717270746 (INDIA)</a></li>
                                                <li class="flag1"><a href="/appsquadz/tel:18776599068">+1-877-659-9068 (US)</a></li>
                                                <!-- li class="flag0"><a href="/appsquadz/tel:1888-866-0067">+1-888-866-0067</a> (Toll Free)</li> -->
                                                <li class="flag2"><a href="/appsquadz/tel:442038073810">+44-203-807-3810 (UK)</a></li>
                                                <li class="flag2"><a href="/appsquadz/tel:442038073810">+91-9717270746 (UAE)</a></li>
                                                <li class="flag2"><a href="/appsquadz/tel:442038073810">+66-0946430863 (THAILAND)</a></li>
                                            </ul>
                                            <span>(If we don’t pick up, <a class="cs_req_btn" href="javascript:void(0)">drop inquiry.</a>)</span>
                                            <span>(Response Time - 24 Hours)</span>
                                        </div>
                                        <div class="inquiry-block">
                                            <div class="img hr-inq"></div>
                                            <div class="inqSal">For HR Inquiry</div>
                                            <div class="inqSal"> <a href="/appsquadz/email:919717270746">hr@appsquadz.com</a></div>
                                            <ul>
                                                <li class="flag3">
                                                    <a href="/appsquadz/tel:911204238296">+91-120-4238296</a>
                                                </li>
                                            </ul>
                                            <span>(If we don’t pick up, <a href="/appsquadz/cdn-cgi/l/email-protection.php#caa2b88aa1a5a4b9beaba4bea3a4aca5e4a9a5a7">drop inquiry.</a>)</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <ul class="menu-links">
                        <li class="submenu">
                            <a href="javascript:void(0)" class="transition">Why AppSquadz <i class="fa fa-caret-down" aria-hidden="true"></i></a>
                            <div class="dropdown">
                                <div class="sub-menu-section">
                                    <div class="container">
                                        <div class="col-md-12">
                                            <div class="sub-menu-center-block rows">
                                                <div class="btn-block">
                                                    <a href="/appsquadz/careers.php" class="comman-btn">Join our team</a> <br />
                                                    <a href="/appsquadz/partnership.php" class="comman-btn mt14">Become a Partner</a> 
                                                </div>
                                                <div class="sub-menu-sec highlight-link show-only-iphone">
                                                    <ul>
                                                        <li>
                                                            <a href="/appsquadz/careers.php" class="">Join our team</a> 
                                                        </li>
                                                        <li>
                                                            <a href="/appsquadz/partnership.php" class="">Become a Partner</a> 
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="sub-menu-sec">
                                                    <div class="menuHeadTitle">Why AppSquadz</div>
                                                    <ul>
                                                        <li> <a href="/appsquadz/about-us.php">About Us</a></li>
                                                        <li><a href="/appsquadz/appsquadz-team.php">Our Team</a></li>
                                                        <li><a href="/appsquadz/Development-Methodology.php">Our Process</a></li>
                                                        <li><a href="/appsquadz/Infrastructure.php">Our Infrastructure</a></li>
                                                        <li><a href="/appsquadz/investor-relation.php">Investor Relationships</a></li>
                                                        <li><a href="/appsquadz/partner.php">Partners Relationships</a></li>
                                                        <li><a href="/appsquadz/Infrastructure.php">Company Profile</a></li>
                                                        <li><a href="/appsquadz/Infrastructure.php">Our Vision &amp; Mission</a></li>
                                                        <li><a href="/appsquadz/mobile-application-development.php">Mobile App Development Company</a></li>
                                                    </ul>
                                                </div>
                                                <div class="sub-menu-sec without-heading">
                                                    <div class="menuHeadTitle">&nbsp;</div>
                                                    <ul>
                                                        <li><a href="/appsquadz/business-engagement.php">Business Engagement Models</a></li>
                                                        <li><a href="/appsquadz/Quality-Relationship.php">Quality Relationships</a></li>
                                                        <li><a href="/appsquadz/Design-Methodology.php">Design Methodology</a> </li>
                                                        <li><a href="/appsquadz/Development-Methodology.php">Development Methodology</a></li>
                                                        <li><a href="/appsquadz/Project-Communication.php.php">Project Communication</a></li>
                                                    </ul>
                                                </div>
                                                <div class="sub-menu-sec without-heading">
                                                    <div class="menuHeadTitle">&nbsp;</div>
                                                    <ul>
                                                        <li><a href="/appsquadz/testimonials.php">Client Reviews</a> </li>
                                                        <li><a href="/appsquadz/testimonials.php">Partner Reviews</a> </li>
                                                        <li><a href="/appsquadz/our-clients.php">Our Clients</a></li>
                                                        <li><a href="/appsquadz/our-partners.php">Our Partners</a></li>
                                                        <li><a href="/appsquadz/certifications-awards.php">Awards &amp; Memberships</a> </li>
                                                    </ul>
                                                </div>
                                                <div class="sub-menu-sec without-heading">
                                                    <div class="menuHeadTitle">&nbsp;</div>
                                                    <ul>
                                                        <li><a href="/appsquadz/media-interviews.php">Press &amp; Media</a></li>
                                                        <li><a href="/appsquadz/blog/index.php">Our Blog</a></li>
                                                        <li><a href="/appsquadz/media-interviews.php">Career With Us</a></li>
                                                        <li><a href="/appsquadz/media-interviews.php">FAQs</a></li>
                                                        <li><a href="/appsquadz/media-interviews.php">Contact Us</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0)" class="transition">Services <i class="fa fa-caret-down" aria-hidden="true"></i></a>
                            <div class="dropdown">
                                <div class="sub-menu-section">
                                    <div class="container">
                                        <div class="col-md-12">
                                            <div class="sub-menu-center-block cus-full-block rows">
                                                <div class="sub-menu-sec highlight-link">
                                                    <ul>
                                                        <li><a href="/appsquadz/startup-app-development-company.php">Startups</a></li>
                                                        <li><a href="/appsquadz/enterprise-app-development.php">SMEs</a></li>
                                                        <li><a href="/appsquadz/enterprise-app-development.php">Enterprise</a></li>
                                                    </ul>
                                                </div>
                                                <div class="sub-menu-sec">
                                                    <div class="menuHeadTitle"><a>Mobile</a></div>
                                                    <ul>
                                                        <li>
                                                            <a href="/appsquadz/mobile-application-development.php">Mobile App Development</a> 
                                                        </li>
                                                        <li class="ssub-menu"><a href="/appsquadz/iphone-application-development.php">iPhone</a><span> | </span><a href="/appsquadz/android-app-development.php">Android</a> </li>
                                                    </ul>
                                                    <ul class="mt16">
                                                        <li><a href="/appsquadz/cross-platform-app-development.php">Cross Platform App Development</a></li>
                                                        <li class="ssub-menu"><a href="/appsquadz/phonegap-application-development.php">PhoneGap</a><span>|</span> <a href="/appsquadz/xamarin-application-development.php">Xamarin</a></li>
                                                    </ul>
                                                    <ul class="mt16">
                                                        <li><a href="/appsquadz/app-prototyping-strategy.php">App Prototype and Strategy</a></li>
                                                        <li><a href="/appsquadz/website-design.php">UI &amp; UX Designing</a></li>
                                                        <li><a href="/appsquadz/mobile-app-maintenance-support-services.php">Support &amp; Maintenance</a></li>
                                                    </ul>
                                                </div>
                                                <div class="sub-menu-sec">
                                                    <div class="menuHeadTitle"><a>Web</a></div>
                                                    <ul>
                                                        <li><a href="/appsquadz/web-development.php">Web Development</a></li>
                                                        <li class="ssub-menu"><a href="/appsquadz/php-web-development.php">PHP</a><span>|</span> <a href="/appsquadz/asp-dotnet-development.php">.NET</a> <span>|</span> <a href="java-application-development.php">JAVA</a></li>
                                                    </ul>
                                                    <ul class="mt16">
                                                        <li><a href="/appsquadz/opensource-cms-development.php">Opensource Development</a></li>
                                                        <li class="ssub-menu"><a href="/appsquadz/wordpress-cms-development.php">WordPress</a> <span>|</span> <a href="joomla-cms-development.php">Joomla</a> <span>|</span><a href="/appsquadz/drupal-cms-development.php">Drupal</a></li>
                                                    </ul>
                                                    <ul class="mt16">
                                                        <li><a href="/appsquadz/ecommerce-web-development.php">Ecommerce &amp; CMS</a></li>
                                                        <li class="ssub-menu"><a href="/appsquadz/magento-ecommerce-development.php">Magento</a><span>|</span> <a href="/appsquadz/wordpress-cms-development.php">WordPress</a> </li>
                                                    </ul>
                                                </div>
                                                <div class="sub-menu-sec">
                                                    <div class="menuHeadTitle"><a tabindex="-1">Emerging Technologies</a></div>
                                                    <ul>
                                                        <li><a href="/appsquadz/wearable-devices-app-development.php">Wearable App Development</a></li>
                                                        <li><a href="/appsquadz/cloud-application-development.php">Cloud Computing</a></li>
                                                        <li><a href="/appsquadz/iot-application-development.php">IoT Development</a></li>
                                                    </ul>
                                                    <ul class="mt16">
                                                        <li><a href="/appsquadz/consulting-services.php">Consulting Services</a> </li>
                                                        <li><a href="/appsquadz/software-maintenance-support.php">Software Maintenance &amp; Support</a></li>
                                                        <li><a href="/appsquadz/enterprise-app-development.php">Enterprise Software Development</a></li>
                                                        <li><a href="/appsquadz/hire-dedicated-developer.php">Staff Augmentation &amp; Dedicated Teams</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0)" class="transition">Solutions <i class="fa fa-caret-down" aria-hidden="true"></i></a>
                            <div class="dropdown">
                                <div class="sub-menu-section">
                                    <div class="container">
                                        <div class="col-md-12">
                                            <div class="sub-menu-center-block rows">
                                                <div class="btn-block">
                                                    <a href="/appsquadz/testimonials.php" class="comman-btn">What Clients Say</a> <br />
                                                    <a href="/appsquadz/case-study.php" class="comman-btn mt14">View Case Studies</a> 
                                                    <a href="/appsquadz/case-study.php" class="comman-btn mt14">Portfolio</a> 
                                                </div>
                                                <div class="sub-menu-sec highlight-link show-only-iphone">
                                                    <ul>
                                                        <li>
                                                            <a href="/appsquadz/testimonials.php" class="">What Clients Say</a> 
                                                        </li>
                                                        <li>
                                                            <a href="/appsquadz/case-study.php" class="">View Case Studies</a> 
                                                        </li>
                                                        <li>
                                                            <a href="/appsquadz/case-study.php" class="">Portfolio</a> 
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="sub-menu-sec">
                                                    <div class="menuHeadTitle">Solutions</div>
                                                    <ul>
                                                        <li><a href="/appsquadz/on-demand-app-development.php">On-Demand Solutions</a></li>
                                                        <li><a href="/appsquadz/chat-messaging-app-development.php">Chat Solution</a></li>
                                                        <li><a href="/appsquadz/classified-app-development.php">Classified App Solution</a></li>
                                                        <li><a href="/appsquadz/directory-app-development.php">Directory App Solution</a></li>
                                                    </ul>
                                                </div>
                                                <div class="sub-menu-sec">
                                                    <div class="menuHeadTitle"><a href="/appsquadz/industries-we-serve.php">Industries We Serve</a></div>
                                                    <ul>
                                                        <li><a href="/appsquadz/real-estate-property.php">Real Estate &amp; Property</a></li>
                                                        <li><a href="/appsquadz/on-demand-app-development.php">On-Demand Solutions</a></li>
                                                        <li><a href="/appsquadz/dating-social-networking.php">Social Networking</a></li>
                                                        <li><a href="/appsquadz/food-restaurant.php">Food &amp; Restaurant</a></li>
                                                        <li><a href="/appsquadz/banking-finance.php">Banking, Finance &amp;amp; Insurance</a></li>
                                                        <li><a href="/appsquadz/education-elearning.php">Education &amp;amp; eLearning</a></li>
                                                        <li><a href="/appsquadz/ecommerce-shopping.php">Ecommerce, Retail &amp; B2B</a></li>
                                                    </ul>
                                                </div>
                                                <div class="sub-menu-sec without-heading">
                                                    <div class="menuHeadTitle">&nbsp;</div>
                                                    <ul>
                                                        <li><a href="/appsquadz/travel-hospitality.php">Travel &amp; Hospitality</a></li>
                                                        <li><a href="/appsquadz/media-entertainment.php">Media &amp; Entertainment</a></li>
                                                        <li><a href="/appsquadz/healthcare-fitness.php">Healthcare &amp; Fitness</a></li>
                                                        <li><a href="/appsquadz/automotive-transportation.php">Transport &amp; Automotive</a></li>
                                                        <li><a href="/appsquadz/gaming-leisure.php">Gaming &amp; Leisure</a></li>
                                                        <li><a href="/appsquadz/directory-app-development.php">Directory &amp; Organization</a></li>
                                                        <li><a href="/appsquadz/event-tickets-portal-development.php">Event &amp; Tickets</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="show-iphone">
                            <a href="/appsquadz/portfolios.php" class="transition">Work</a> 
                        </li>
                        <li class="show-tablet">
                            <a href="/appsquadz/portfolios.php" class="transition">Work</a> 
                        </li>
                        <li>
                            <a href="/appsquadz/resources.php" class="transition">Resources</a>
                        </li>
                        <li>
                            <a href="/appsquadz/contact-us.php" class="transition">Contact</a> 
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <header class="selected">
        <div class="header-inset">
            <div class="logo desktop">
                <a href="/appsquadz/index.php" itemprop="url"><img itemprop="logo" src="img/logo.png" alt="logo" /></a>
            </div>
            <div class="logo mobile"><a href="/appsquadz/index.php" itemprop="url"><img itemprop="logo" src="img/stiklogo.png" alt="logo" /></a></div>
            <div class="custom-navbar desktop-nav">
                <nav class="navbar">
                    <div class="navigation">
                        <div id="navbar-w" class="navbar-collapse navigation-part">
                            <div class="com-info">
                                <div class="inquiry-btn"> 
                                    <a href="javascript:void(0)" class="transition" id="inquireNow">Let's Talk</a> 
                                </div>
                                <ul>
                                    <li class="number">
                                        <a href="javascript:void(0)"><i class="fa fa-phone" aria-hidden="true"></i>&nbsp;<i class="fa fa-caret-down" aria-hidden="true"></i></a>
                                        <div class="com-info-inquiry-dd">
                                            <div class="com-info-inquiry">
                                                <div class="con-heading">AppSquadz Contacts</div>
                                                <div class="inquiry-block">
                                                    <div class="inqSal"> For Sales Inquiry</div>
                                                    <div class="inqSal"> <a href="/appsquadz/email:919717270746">sales@appsquadz.com</a></div>
                                                    <ul>
                                                        <li class="flag3"><a href="/appsquadz/tel:919717270746">+91-9717270746 (INDIA)</a></li>
                                                        <li class="flag1"><a href="/appsquadz/tel:18776599068">+1-877-659-9068 (US)</a></li>
                                                        <!-- li class="flag0"><a href="/appsquadz/tel:1888-866-0067">+1-888-866-0067</a> (Toll Free)</li> -->
                                                        <li class="flag2"><a href="/appsquadz/tel:442038073810">+44-203-807-3810 (UK)</a></li>
                                                        <li class="flag2"><a href="/appsquadz/tel:442038073810">+91-9717270746 (UAE)</a></li>
                                                        <li class="flag2"><a href="/appsquadz/tel:442038073810">+66-0946430863 (THAILAND)</a></li>
                                                    </ul>
                                                    <span>(If we don’t pick up, <a class="cs_req_btn" href="javascript:void(0)">drop inquiry.</a>)</span>
                                                </div>
                                                <div class="inquiry-block">
                                                    <div class="inqSal">For HR Inquiry</div>
                                                    <div class="inqSal"> <a href="/appsquadz/email:919717270746">hr@appsquadz.com</a></div>
                                                    <ul>
                                                        <li class="flag3"><a href="/appsquadz/tel:911204238296">+91-120-4238296</a></li>
                                                    </ul>
                                                    <span>(If we don’t pick up, <a href="/appsquadz/cdn-cgi/l/email-protection.php#bfd7cdffd4d0d1cccbded1cbd6d1d9d091dcd0d2">drop inquiry.</a>)</span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li itemprop="email"> <a href="/appsquadz/"><i class="fa fa-envelope-o" aria-hidden="true"></i> <span class="__cf_email__" >sales@appsquadz.com</span></a> </li>
                                    <li itemprop="email"> <a href="/appsquadz/blog.php"><i class="fxa fa-envelope-ox" aria-hidden="true"></i><span class="__cf_email__">Blog</a> </li>
                                    <li itemprop="email"> <a href="/appsquadz/testimonials.php"><i class="xfa fa-envelope-ox" aria-hidden="true"></i><span class="__cf_email__" >Testimonials</a> </li>
                                    <li itemprop="email"> <a href="/appsquadz/portfolios.php"><i class="xfa fa-envelope-ox" aria-hidden="true"></i><span class="__cf_email__" >Our Fresh Work</a> </li>
                                    <li itemprop="email"> <a href="/appsquadz/https://calendly.com/appsquadz/meeting"><span class="" >Schedule a Meeting</a></li>
                                    </span>
                                </ul>
                            </div>
                            <ul class="menu-links">
                                <li class="submenu">
                                    <a href="javascript:void(0)" class="transition">Why AppSquadz
                                    <i class="fa fa-caret-down" aria-hidden="true"></i>
                                    </a>
                                    <div class="dropdown">
                                        <div class="sub-menu-section">
                                            <div class="container">
                                                <div class="col-md-12">
                                                    <div class="sub-menu-center-block rows">
                                                        <div class="btn-block">
                                                            <a href="/appsquadz/careers.php" class="comman-btn">Join our team</a> <br />
                                                            <a href="/appsquadz/partnership.php" class="comman-btn mt14">Partner With us</a> 
                                                            <a href="/appsquadz/partnership.php" class="comman-btn mt14">Portfolio</a> 
                                                        </div>
                                                        <div class="sub-menu-sec">
                                                            <div class="menuHeadTitle">Why AppSquadz</div>
                                                            <ul>
                                                                <li> <a href="/appsquadz/about-us.php">About Us</a></li>
                                                                <li><a href="/appsquadz/appsquadz-team.php">Our Team</a></li>
                                                                <li><a href="/appsquadz/Development-Methodology.php">Our Process</a></li>
                                                                <li><a href="/appsquadz/Infrastructure.php">Our Infrastructure</a></li>
                                                                <li><a href="/appsquadz/investor-relation.php">Investor Relationships</a></li>
                                                                <li><a href="/appsquadz/partner.php">Partners Relationships</a></li>
                                                                <li><a href="/appsquadz/company-profile.php">Company Profile</a></li>
                                                                <li><a href="/appsquadz/appsquadz-vision-and-mission.php">Our Vision & Mission</a></li>
                                                                <li><a href="/appsquadz/value-for-money.php">Value For Money</a></li>
                                                                <li><a href="/appsquadz/prompt-communication.php">Prompt Communication</a></li>
                                                                <li><a href="/appsquadz/mobile-application-development.php">Mobile App Development Company</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="sub-menu-sec without-heading">
                                                            <div class="menuHeadTitle">&nbsp;</div>
                                                            <ul>
                                                                <li><a href="/appsquadz/business-engagement.php">Business Engagement Models</a></li>
                                                                <li><a href="/appsquadz/Quality-Relationship.php">Quality Relationships</a></li>
                                                                <li><a href="/appsquadz/Design-Methodology.php">Design Methodology</a> </li>
                                                                <li><a href="/appsquadz/Development-Methodology.php">Development Methodology</a></li>
                                                                <li><a href="/appsquadz/Project-Communication.php">Project Communication</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="sub-menu-sec without-heading">
                                                            <div class="menuHeadTitle">&nbsp;</div>
                                                            <ul>
                                                                <li><a href="/appsquadz/testimonials.php">Client Reviews</a> </li>
                                                                <li><a href="/appsquadz/testimonials.php">Partner Reviews</a> </li>
                                                                <li><a href="/appsquadz/our-clients.php">Our Clients</a></li>
                                                                <li><a href="/appsquadz/our-partners.php">Our Partners</a></li>
                                                                <li><a href="/appsquadz/certifications-awards.php">Awards &amp; Memberships</a> </li>
                                                            </ul>
                                                        </div>
                                                        <div class="sub-menu-sec without-heading">
                                                            <div class="menuHeadTitle">&nbsp;</div>
                                                            <ul>
                                                                <li><a href="/appsquadz/media-interviews.php">Press &amp; Media</a></li>
                                                                <li><a href="/appsquadz/blog/index.php">Our Blog</a></li>
                                                                <li><a href="/appsquadz/careers.php">Career With Us</a></li>
                                                                <li><a href="/appsquadz/faq.php">FAQs</a></li>
                                                                <li><a href="/appsquadz/contact-us.php">Contact Us</a></li>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="sub-menu-sec without-heading">
                                                            <div class="menuHeadTitle">Our Presense</div>
                                                            <ul>
                                                                <li><a href="/appsquadz/mobile-app-development-company-in-india.php">India</a></li>
                                                                <li><a href="/appsquadz/mobile-app-development-company-in-usa.php">United States</a></li>
                                                                <li><a href="/appsquadz/mobile-app-development-company-in-uk.php">United Kingdom</a></li>
                                                                <li><a href="/appsquadz/mobile-app-development-company-in-uae.php">UAE</a></li>
                                                                <li><a href="/appsquadz/mobile-app-development-company-in-thailand.php">Thailand</a></li>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div style = "height:70px; width:100% ; background:#077BEA ;margin-top:-8px">
                                            <div class="container">
                                                <div class="partner-with" style="float: left;">
                                                    <a href="/appsquadz/#"><img src="img/partner/partner.png"><span style="color: #fff;">Partner with us</span></a>
                                                </div>
                                                <div class="partner-with" style="float: left;">
                                                    <a href="/appsquadz/#"><img src="img/partner/carear.png"><span style="color: #fff;">Career with us</span></a>
                                                </div>
                                                <div class="partner-with" style="float: left;">
                                                    <a href="/appsquadz/#"><img src="img/partner/clintspeak.png"><span style="color: #fff;">Client Speak</span></a>
                                                </div>
                                                <div class="partner-with" style="float: left;">
                                                    <a href="/appsquadz/#"><img src="img/partner/portfolio.png"> <span style="color: #fff;">Portfolio</span></a>
                                                </div>
                                                <div class="celibration" style="float: right;">
                                                    <a href="/appsquadz/#"><img src="img/partner/celebrate.png"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0)" class="transition">Services <i class="fa fa-caret-down" aria-hidden="true"></i></a>
                                    <div class="dropdown">
                                        <div class="sub-menu-section">
                                            <div class="container">
                                                <div class="col-md-12">
                                                    <div class="sub-menu-center-block cus-full-block rows">
                                                        <div class="sub-menu-sec highlight-link">
                                                            <ul>
                                                                <li><a href="/appsquadz/startup-app-development-company.php">Startups</a></li>
                                                                <li><a href="/appsquadz/smes-app-development.php">SMEs</a></li>
                                                                <li><a href="/appsquadz/enterprise-app-development.php">Enterprise</a></li>
                                                                <li><a href="/appsquadz/government-it-app-development.php">Government IT</a></li>
                                                                <li><a href="/appsquadz/ngo-app-development.php">NGO's</a></li>
                                                            </ul>
                                                            <div class="btn-block" style="margin-top: 250px;">
                                                                <a style="min-width: 177px;" href="/appsquadz/careers.php" class="comman-btn btn-block-2">Join our team</a> <br/>
                                                                <a style="min-width: 177px;" href="/appsquadz/partnership.php" class="comman-btn mt14 btn-block-2">Partner With us</a> 
                                                                <a style="min-width: 177px;" href="/appsquadz/partnership.php" class="comman-btn mt14 btn-block-2">Portfolio</a> 
                                                            </div>
                                                        </div>
                                                        <div class="sub-menu-sec">
                                                            <div class="menuHeadTitle"><a>Mobile</a></div>
                                                            <ul>
                                                                <li><a href="/appsquadz/android-apps-developer.php">Android Apps</a></li>
                                                                <li class="ssub-menu"> <a href="/appsquadz/android-application-development.php">Android Apps Development</a> </li>
                                                                <li class="ssub-menu"> <a href="/appsquadz/android-wear-application-development.php">Android Wear Apps Development</a> </li>
                                                                <li class="ssub-menu"> <a href="/appsquadz/android-game-development.php">Android Games Development</a> </li>
                                                            </ul>
                                                            <ul class="mt16">
                                                                <li><a href="/appsquadz/iphone-apps-developer.php">iPhone Apps </a></li>
                                                                <li class="ssub-menu"> <a href="/appsquadz/iphone-application-development.php">iPhone Apps Development</a> </li>
                                                                <li class="ssub-menu"> <a href="/appsquadz/apple-watch-application-development.php">Apple Watch Apps Development</a> </li>
                                                                <li class="ssub-menu"> <a href="/appsquadz/iphone-games-development.php">iPhone Games Development</a> </li>
                                                            </ul>
                                                            <ul class="mt16">
                                                                <li><a href="/appsquadz/ipad-apps-developer.php">iPad Apps </a></li>
                                                                <li class="ssub-menu"> <a href="/appsquadz/ipad-apps-development.php">iPad Apps Development</a> </li>
                                                                <li class="ssub-menu"> <a href="/appsquadz/ipad-games-development.php">iPad Games Development</a> </li>
                                                            </ul>
                                                            <ul class="mt16">
                                                                <li><a href="/appsquadz/cross-platform-app-development.php">Cross Platform App Development</a></li>
                                                                <li class="ssub-menu"><a href="/appsquadz/phonegap-application-development.php">PhoneGap</a> <span>|</span><a href="/appsquadz/xamarin-application-development.php">Xamarin</a><span>|</span><a href="/appsquadz/ionic-application-development.php">Ionic</a> <span>|</span><a href="/appsquadz/kotlin-application-development.php">Kotlin</a> <span>|</span><a href="/appsquadz/titanium-application-development.php">Titanium</a><span>|</span><a href="/appsquadz/opengl-application-development.php">OpenGL</a><span>|</span><a href="/appsquadz/andengine-application-development.php">AndEngine</a><span>|</span><a href="/appsquadz/react-native-application-development.php">React Native</a> <span>|</span><a href="/appsquadz/unity-application-development.php">Unity</a> <span>|</span><a href="/appsquadz/snecha-application-development.php">Snecha</a><span>|</span><a href="/appsquadz/adobe-air-application-development.php">Adobe Air</a><span>|</span><a href="/appsquadz/cocos2d-application-development.php">Cocos2d</a></li>
                                                            </ul>
                                                            <ul class="mt16">
                                                                <li><a href="/appsquadz/app-prototyping-strategy.php">App Prototype and Strategy</a></li>
                                                                <li><a href="/appsquadz/ui-ux-design.php">UI &amp; UX Designing</a></li>
                                                                <li><a href="/appsquadz/mobile-app-maintenance-support-services.php">Support &amp; Maintenance</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="sub-menu-sec">
                                                            <div class="menuHeadTitle"><a>Web</a></div>
                                                            <ul>
                                                                <li>
                                                                    <a href="/appsquadz/web-development.php">Web Development</a> 
                                                                </li>
                                                                <li class="ssub-menu"><a href="/appsquadz/php-web-development.php">PHP</a><span>|</span> <a href="java-application-development.php">JAVA</a>  <span>|</span><a href="/appsquadz/angular-js-app-development.php">Angular JS</a> <span>|</span><a href="/appsquadz/node-js-app-development.php">Node JS</a> <span>|</span><a href="/appsquadz/react-js-app-development.php">React JS</a> <span>|</span><a href="/appsquadz/ruby-on-rails-development.php">Ruby On Rails </a> <span>|</span><a href="/appsquadz/python-development.php">Python</a> <span>|</span><a href="/appsquadz/django-development.php">Django</a> </li>
                                                            </ul>
                                                            <ul class="mt16">
                                                                <li><a href="/appsquadz/framework-development.php">Framework Development</a></li>
                                                                <li class="ssub-menu"> <a href="/appsquadz/laravel-web-development.php">Laravel</a> <span>|</span> <a href="/appsquadz/php-zend-development.php">Zend</a><span>|</span> <a href="/appsquadz/php-yii-development.php">Yii</a><span>|</span> <a href="/appsquadz/codeigniter-development.php">CodeIgnitor</a><span>|</span> <a href="/appsquadz/cakephp-development.php">CakePHP</a><span>|</span> <a href="/appsquadz/symfony-web-development.php">Symfony</a></li>
                                                            </ul>
                                                            <ul class="mt16">
                                                                <li><a href="/appsquadz/opensource-cms-development.php">Opensource Development</a></li>
                                                                <li class="ssub-menu"><a href="joomla-cms-development.php">Joomla</a> <span>|</span><a href="/appsquadz/drupal-cms-development.php">Drupal</a> <span>|</span><a href="/appsquadz/wordpress-cms-development.php">WordPress</a> <span>|</span> <a href="/appsquadz/moodle-application-development.php">Moodle</a><span>|</span> <a href="/appsquadz/open-mrs-application-development.php">Open MRS</a></li>
                                                            </ul>
                                                            <ul class="mt16">
                                                                <li><a href="/appsquadz/ecommerce-web-development.php">Ecommerce &amp; CMS</a></li>
                                                                <li class="ssub-menu"><a href="/appsquadz/magento-ecommerce-development.php">Magento</a><span>|</span> <a href="/appsquadz/woo-commerce-development.php">WooCommerce</a> <span>|</span> <a href="/appsquadz/shopify-ecommerce-development.php">Shopify</a><span>|</span> <a href="/appsquadz/prestashop-ecommerce-development.php">PrestaShop</a><span>|</span> <a href="/appsquadz/openkart-ecommerce-development.php">OpenKart</a><span>|</span> <a href="/appsquadz/oscommerce-development.php">OSCommerce</a><span>|</span> <a href="/appsquadz/ubercart-development.php">Ubercart</a> </li>
                                                            </ul>
                                                            <ul class="mt16">
                                                                <li><a href="/appsquadz/frontend-designing-development.php">Frontend Designing</a></li>
                                                                <li class="ssub-menu"><a href="/appsquadz/html5-web-development.php">HTML5/CSS </a><span>|</span> <a href="/appsquadz/responsive-web-development.php">Responsive Web</a><span>|</span> <a href="/appsquadz/psd-to-html5-development.php">PSD to HTML5</a>  </li>
                                                            </ul>
                                                            <ul class="mt16">
                                                                <li><a href="/appsquadz/microsoft-technologies-development.php">Microsoft Technologis</a></li>
                                                                <li class="ssub-menu"><a href="/appsquadz/asp-dotnet-development.php">.Net </a><span>|</span> <a href="/appsquadz/c-sharp-development.php">C#</a><span>|</span> <a href="/appsquadz/sharepoint-development.php">Sharepoint</a></li>
                                                            </ul>
                                                            <ul class="mt16">
                                                                <li><a >Other Services</a></li>
                                                                <li class="ssub-menu"><a href="/appsquadz/dotnetnuke-development.php">DotNetNuke</a><span>|</span> <a href="/appsquadz/salesforce-development.php">Sales Force</a><span>|</span> <a href="/appsquadz/parse-development.php">Parse</a><span>|</span> <a href="/appsquadz/mysql-development.php">MySql</a><span>|</span> <a href="/appsquadz/mango-db-development.php">Mango DB</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="sub-menu-sec">
                                                            <div class="menuHeadTitle"><a>Digital Marketing Services</a></div>
                                                            <ul>
                                                                <li><a href="/appsquadz/seo-services.php">SEO Services</a></li>
                                                                <li><a href="/appsquadz/ppc-campaign-management.php">PPC Campaign Mgmt</a></li>
                                                                <li><a href="/appsquadz/social-media-marketing.php">Social Media Marketing</a></li>
                                                                <!-- <li><a href="/appsquadz/seo-packages.php">SEO Packages</a></li> -->
                                                                <li><a href="/appsquadz/content-marketing.php">Content Marketing</a></li>
                                                                <li><a href="/appsquadz/brand-and-reputation-management.php">Brand  &amp; Reputation Mgmt</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="sub-menu-sec">
                                                            <div class="menuHeadTitle"><a>Emerging Technologies</a></div>
                                                            <ul>
                                                                <li><a href="/appsquadz/live-streaming-app-development.php">Live Streaming (Wowza, Adobe Media &amp; WebRTC )</a></li>
                                                                <li><a href="/appsquadz/wearable-devices-app-development.php">Wearable App Development</a></li>
                                                                <li><a href="/appsquadz/cloud-application-development.php">Cloud Computing</a></li>
                                                                <li><a href="/appsquadz/iot-application-development.php">IoT Development</a></li>
                                                                <li><a href="/appsquadz/ibeacon-application-development.php">iBeacon App Development</a></li>
                                                                <li><a href="/appsquadz/iwatch-application-development.php">iWatch App Development</a></li>
                                                                <li><a href="/appsquadz/ar-vr-application-development.php">AR/VR App Development</a></li>
                                                                <li><a href="/appsquadz/ai-chatbot-application-development.php">AI &amp; Chatbot Development</a></li>
                                                                <li><a href="/appsquadz/bitcoin-application-development.php">Blockchain/Bitcoin App Development</a></li>
                                                                <li><a href="/appsquadz/pos-rfid-application-development.php">POS(Point of Sale) App-RFID Card</a></li>
                                                                <li><a href="/appsquadz/amazon-web-services.php">Amazon Web Services (AWS)</a> </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0)" class="transition">Solutions <i class="fa fa-caret-down" aria-hidden="true"></i></a>
                                    <div class="dropdown">
                                        <div class="sub-menu-section">
                                            <div class="container">
                                                <div class="col-md-12">
                                                    <div class="sub-menu-center-block rows">
                                                        <div class="btn-block">
                                                            <a href="/appsquadz/testimonials.php" class="comman-btn">What Clients Say</a> <br />
                                                            <a href="/appsquadz/case-study.php" class="comman-btn mt14">View Case Studies</a> 
                                                            <a href="/appsquadz/case-study.php" class="comman-btn mt14">Portfolio</a> 
                                                        </div>
                                                        <div class="sub-menu-sec">
                                                            <div class="menuHeadTitle">Solutions</div>
                                                            <ul>
                                                                <li><a href="/appsquadz/ecommerce-solutions.php">eCommerce Solutions</a></li>
                                                                <li><a href="/appsquadz/taxi-and-ride-sharing-app-development.php">Taxi &amp; Ride Sharing App Solutions</a></li>
                                                                <li><a href="/appsquadz/on-demand-app-development.php">On Demand App Solutions</a></li>
                                                                <li><a href="/appsquadz/chat-messaging-app-development.php">Instant Messaging / Chat App Solution</a></li>
                                                                <li><a href="/appsquadz/live-stream-app-development.php">Live Streaming App Solution</a></li>
                                                                <li><a href="/appsquadz/classified-app-development.php">Classified App Solution</a></li>
                                                                <li><a href="/appsquadz/directory-app-development.php">Directory App Solution</a></li>
                                                                <li><a href="/appsquadz/voip-app-development.php">VoIP (Voice over Internet Protocol)</a></li>
                                                                <li><a href="/appsquadz/location-tracking-app-development.php">Location Tracking App Solution</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="sub-menu-sec">
                                                            <div class="menuHeadTitle"><a href="/appsquadz/industries-we-serve.php">Industries We Serve</a></div>
                                                            <ul>
                                                                <li><a href="/appsquadz/e-governance-app-development.php">E-Governance</a></li>
                                                                <li><a href="/appsquadz/government-it-app-development.php">Government IT</a></li>
                                                                <li><a href="/appsquadz/non-profit-orgnaization-app-development.php">Non-Profit Organization</a></li>
                                                                <li><a href="/appsquadz/video-streaming-and-confrencing-app-development.php">Video Streaming &amp; Conferencing</a></li>
                                                                <li><a href="/appsquadz/taxi-booking-ride-sharing-app-development.php">Taxi Booking &amp; Ride Sharing</a></li>
                                                                <li><a href="/appsquadz/transport-logistics-app-development.php">Transport &amp; Logistics</a></li>
                                                                <li><a href="/appsquadz/food-and-beverages-app-development.php">Food &amp; Beverages</a></li>
                                                                <li><a href="/appsquadz/healthcare-fitness-app-development.php">Healthcare &amp; Fitness</a></li>
                                                                <li><a href="/appsquadz/real-estate-property-app-development.php">Real Estate &amp; Property</a></li>
                                                                <li><a href="/appsquadz/social-networking-app-development.php">Social Networking</a></li>
                                                                <li><a href="/appsquadz/banking-finance-app-development.php">Banking, Finance &amp; Insurance</a></li>
                                                                <li><a href="/appsquadz/education-elearning-app-development.php">Education</a></li>
                                                                <li><a href="/appsquadz/elearning-app-development.php">eLearning &amp; eTraining</a></li>
                                                                <li><a href="/appsquadz/ecommerce-retail-b2b-app-development.php">mEcommerce, Retail &amp; B2B</a></li>
                                                                <li><a href="job-portal-and-recruiting-app-development.php">Job Portal &amp; Recruitment</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="sub-menu-sec without-heading">
                                                            <div class="menuHeadTitle">&nbsp;</div>
                                                            <ul>
                                                                <li><a href="/appsquadz/news-magazine-app-development.php">News &amp; Magazine</a></li>
                                                                <li><a href="/appsquadz/travel-hospitality-app-development.php">Travel &amp; Hospitality</a></li>
                                                                <li><a href="/appsquadz/map-and-navigation-app-development.php">Map &amp; Navigation</a></li>
                                                                <li><a href="/appsquadz/dating-app-development.php">Dating</a></li>
                                                                <li><a href="/appsquadz/automotive-transportation-app-development.php">Automotive</a></li>
                                                                <li><a href="/appsquadz/gaming-leisure-app-development.php">Gaming &amp; Leisure</a></li>
                                                                <li><a href="/appsquadz/event-tickets-portal-development.php">Event &amp; Tickets</a></li>
                                                                <li><a href="/appsquadz/marketing-and-classified-app-development.php">Marketing &amp; Classified</a></li>
                                                                <li><a href="/appsquadz/maternity-app-development.php">Matrimony</a></li>
                                                                <li><a href="/appsquadz/rfid-and-bluetooh-app-development.php">RFID &amp; Bluetooth Solution</a></li>
                                                                <li><a href="/appsquadz/ocr-app-development.php">OCR Apps</a></li>
                                                                <li><a href="/appsquadz/kiosk-app-development.php">KIOSK Based Solution</a></li>
                                                                <li><a href="/appsquadz/mlm--app-development.php">MLM Software</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div style = "height:70px; width:100% ; background:#077BEA ;margin-top:-8px">
                                            <div class="container">
                                                <div class="partner-with" style="float: left;">
                                                    <a href="/appsquadz/#"><img src="img/partner/partner.png"> <span style="color: #fff;">Partner with us</span></a>
                                                </div>
                                                <div class="partner-with" style="float: left;">
                                                    <a href="/appsquadz/#"><img src="img/partner/carear.png"> <span style="color: #fff;">Career with us</span></a>
                                                </div>
                                                <div class="partner-with" style="float: left;">
                                                    <a href="/appsquadz/#"><img src="img/partner/clintspeak.png"> <span style="color: #fff;">Client Speak</span></a>
                                                </div>
                                                <div class="partner-with" style="float: left;">
                                                    <a href="/appsquadz/#"><img src="img/partner/portfolio.png"> <span style="color: #fff;">Portfolio</span></a>
                                                </div>
                                                <div class="celibration" style="float: right;">
                                                    <a href="/appsquadz/#"><img src="img/partner/celebrate.png"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0)" class="transition">Hire Us
                                    <i class="fa fa-caret-down" aria-hidden="true"></i>
                                    </a>
                                    <div class="dropdown">
                                        <div class="sub-menu-section">
                                            <div class="container">
                                                <div class="col-md-12">
                                                    <div class="sub-menu-center-block rows">
                                                        <div class="btn-block">
                                                            <a href="/appsquadz/hire-dedicated-developer.php" class="comman-btn">Hire Developer</a> <br />
                                                            <a href="/appsquadz/case-study.php" class="comman-btn mt14">View Case Studies</a> 
                                                            <a href="/appsquadz/partnership.php" class="comman-btn mt14">Portfolio</a>
                                                            <br> 
                                                            <div class="" style="width: 30%; margin-left: -22px;">
                                                                <a style="text-align: left; color: #fff;">* 24x7 Technical Support</a>
                                                                <a style="text-align: left; color: #fff;">* 100% Confidentiality Assured (Strick NDA)</a>
                                                                <a style="text-align: left; color: #fff;">* 100% Moneyback Gurantee</a>
                                                            </div>
                                                        </div>
                                                        <div class="sub-menu-sec">
                                                            <div class="menuHeadTitle">Pick a Skill</div>
                                                            <ul>
                                                                <li> <a href="/appsquadz/hire-android-developer.php">Hire Android Developer</a></li>
                                                                <li> <a href="/appsquadz/hire-ios-developer.php">Hire iPhone Developer</a></li>
                                                                <li> <a href="/appsquadz/hire-ipad-developer.php">Hire iPad Developer</a></li>
                                                                <li> <a href="/appsquadz/hire-phonegap-developer.php">Hire Phonegap Developer</a></li>
                                                                <li> <a href="/appsquadz/hire-kotlin-developer.php">Hire Kotlin Developer</a></li>
                                                                <li> <a href="/appsquadz/hire-ionic-developer.php">Hire Ionic Developer</a></li>
                                                                <li> <a href="/appsquadz/hire-xamarin-developer.php">Hire Xamarin Developer</a></li>
                                                                <li> <a href="/appsquadz/hire-sencha-developer.php">Hire Sencha Developer</a></li>
                                                                <li> <a href="/appsquadz/hire-react-native-developer.php">Hire React Native Developer</a></li>
                                                                <li> <a href="/appsquadz/hire-cross-platform-developer.php">Hire Cross Platform Developer</a></li>
                                                                <li> <a href="/appsquadz/hire-unity3d-developer.php">Hire Unity 3D Developer</a></li>
                                                                <li> <a href="/appsquadz/hire-opengl-developer.php">Hire OpenGL Developer</a></li>
                                                                <li> <a href="/appsquadz/hire-and-engine-developer.php">Hire AndEngine Developer</a></li>
                                                                <li> <a href="/appsquadz/hire-html5-developer.php">Hire HTML5 Developer</a></li>
                                                                <li> <a href="/appsquadz/hire-game-developer.php">Hire Game Developer</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="sub-menu-sec">
                                                            <div class="menuHeadTitle">&nbsp;</div>
                                                            <ul>
                                                                <li> <a href="/appsquadz/hire-php-developer.php">Hire PHP Developer</a></li>
                                                                <li> <a href="/appsquadz/hire-java-developer.php">Hire Java Developer</a></li>
                                                                <li> <a href="/appsquadz/hire-asp-dot-net-developer.php">Hire .Net Developer</a></li>
                                                                <li> <a href="/appsquadz/hire-paython-developer.php">Hire Python Developer</a></li>
                                                                <li> <a href="/appsquadz/hire-node-js-developer.php">Hire Node JS Developer</a></li>
                                                                <li> <a href="/appsquadz/hire-ruby-on-rails-developer.php">Hire Ruby On Rails Developer</a></li>
                                                                <li> <a href="/appsquadz/hire-django-developer.php">Hire Django Developer</a></li>
                                                                <li> <a href="/appsquadz/hire-drupal-developer.php">Hire Drupal Developer</a></li>
                                                                <li> <a href="/appsquadz/hire-joomla-developer.php">Hire Joomla Developer</a></li>
                                                                <li> <a href="/appsquadz/hire-magento-developer.php">Hire Magento Developer</a></li>
                                                                <li> <a href="/appsquadz/hire-wordpress-developer.php">Hire Wordpress Developer</a></li>
                                                                <li> <a href="/appsquadz/hire-cms-developer.php">Hire CMS Developer</a></li>
                                                                <li> <a href="/appsquadz/hire-html-developer.php">Hire HTML Developer</a></li>
                                                                <li> <a href="/appsquadz/hire-e-commerce-developer.php">Hire e-Commerce Developer</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="sub-menu-sec without-heading">
                                                            <div class="menuHeadTitle">&nbsp;</div>
                                                            <ul>
                                                                <li> <a href="/appsquadz/hire-mobile-app-developer.php">Dedicated Mobile App Developer</a></li>
                                                                <li> <a href="/appsquadz/hire-web-developer.php">Dedicated Web Developer</a></li>
                                                                <li> <a href="/appsquadz/hire-project-manager.php">Dedicated Project Manager</a></li>
                                                                <li> <a href="/appsquadz/hire-business-analyst.php">Dedicated Business Analyst</a></li>
                                                                <li> <a href="/appsquadz/hire-ui-ux-developer.php">Dedicated UI/UX Designer </a></li>
                                                                <li> <a href="/appsquadz/hire-qa-tester.php">Dedicated QA Tester</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="sub-menu-sec without-heading">
                                                            <div class="menuHeadTitle">&nbsp;</div>
                                                            <ul>
                                                                <li> <a href="/appsquadz/how-it-works.php"><b>How it Works?</b></a></li>
                                                                <li> <a href="/appsquadz/offshore-model.php"><b>OFFSHORE Model</b></a></li>
                                                                <li> <a href="/appsquadz/onshore-model.php"><b>ONSHORE Model</b></a></li>
                                                                <li> <a href="/appsquadz/hybrid-model.php"><b>HYBRID Model</b></a></li>
                                                                <li> <a href="/appsquadz/contact-us.php"><b>#2 Week Free Trial - Connect Us</b></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div style = "height:70px; width:100% ; background:#077BEA ;margin-top:-8px">
                                            <div class="container">
                                                <div class="partner-with" style="float: left;">
                                                    <a href="/appsquadz/#"><img src="img/partner/partner.png"> <span style="color: #fff;">Partner with us</span></a>
                                                </div>
                                                <div class="partner-with" style="float: left;">
                                                    <a href="/appsquadz/#"><img src="img/partner/carear.png"> <span style="color: #fff;">Career with us</span></a>
                                                </div>
                                                <div class="partner-with" style="float: left;">
                                                    <a href="/appsquadz/#"><img src="img/partner/clintspeak.png"> <span style="color: #fff;">Client Speak</span></a>
                                                </div>
                                                <div class="partner-with" style="float: left;">
                                                    <a href="/appsquadz/#"><img src="img/partner/portfolio.png"> <span style="color: #fff;">Portfolio</span></a>
                                                </div>
                                                <div class="celibration" style="float: right;">
                                                    <img src="img/partner/celebrate.png">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <a href="/appsquadz/portfolios.php" class="transition">Portfolio</a> 
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0)" class="transition">Case Studies
                                    <i class="fa fa-caret-down" aria-hidden="true"></i>
                                    </a>
                                    <div class="dropdown">
                                        <div class="sub-menu-section">
                                            <div class="container">
                                                <div class="col-md-12">
                                                    <div class="sub-menu-center-block rows">
                                                        <div class="btn-block">
                                                            <a href="/appsquadz/partnership.php" class="comman-btn mt14">Portfolio</a> 
                                                        </div>
                                                        <div class="sub-menu-sec">
                                                            <div class="menuHeadTitle">Checkout our success stories</div>
                                                            <ul>
                                                                <li> <a href="/appsquadz/case-study/taxi-for-sure-case-study.php">Taxi For Sure <b>(Acquired by OLA)</b></a></li>
                                                                <li> <a href="/appsquadz/case-study/chalklit-case-study.php">Chalklit <b>(Funded by Google)</b></a></li>
                                                                <li> <a href="/appsquadz/case-study/grab-taxi-case-study.php">Grab Taxi</a></li>
                                                                <li> <a href="/appsquadz/case-study/havells-mkonnect-case-study.php">Havells mKonnect App</a></li>
                                                                <li> <a href="/appsquadz/case-study/emedicoz-case-study.php">eMedicoz (DAMS) - eLearning , Course &amp; Tutorial</a></li>
                                                                <li> <a href="/appsquadz/case-study/gullak-case-study.php">Gullak <b>(2M+ Downloads)</b></a></li>
                                                                <li> <a href="/appsquadz/case-study/hangman-case-study.php">Hangman <b>(10M+ Downloads)</b></a></li>
                                                                <li> <a href="/appsquadz/case-study/news-hunt-case-study.php">News Hunt <b>(50M+ Downloads)</b></a></li>
                                                                <li> <a href="/appsquadz/case-study/amar-ujala-case-study.php">Amar Ujala <b>(No#1 Newspaper in India)</b></a></li>
                                                                <li> <a href="/appsquadz/case-study/innerchef-food-app-case-study.php">Innerchef - Food App</a></li>
                                                                <li> <a href="/appsquadz/case-study/jiffy-shopping-app-case-study.php">Jiffy - Shopping App</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="sub-menu-sec without-heading">
                                                            <div class="menuHeadTitle">&nbsp;</div>
                                                            <ul>
                                                                <li> <a href="/appsquadz/case-study/coca-cola-survey-app-case-study.php">Coca Cola (Survey App)</a></li>
                                                                <li> <a href="/appsquadz/case-study/tupelo-life-case-study.php">Tupelo Life</a></li>
                                                                <li> <a href="/appsquadz/case-study/udemy-case-study.php">Udemy Online Courses</a></li>
                                                                <li> <a href="/appsquadz/case-study/simpli-learn-case-study.php">Simpli Learn</a></li>
                                                                <li> <a href="/appsquadz/case-study/speaking-tree-case-study.php">Speaking Tree</a></li>
                                                                <li> <a href="/appsquadz/case-study/lazada-case-study.php">Lazada <b>(50M+ Downloads)</b></a></li>
                                                                <li> <a href="/appsquadz/case-study/tm-travel-case-study.php">TM Travel</a></li>
                                                                <li> <a href="/appsquadz/case-study/traveloka-case-study.php">Traveloka</a></li>
                                                                <li> <a href="/appsquadz/case-study/hitwe-case-study.php">Hitwe-Dating App</a></li>
                                                                <li> <a href="/appsquadz/case-study/mico-case-study.php">Mico</a></li>
                                                                <li> <a href="/appsquadz/case-study/lovoo-case-study.php">Lovoo - Free Dating App</a></li>
                                                                <li> <a href="/appsquadz/case-study/dolly-case-study.php">Dolly - On Demand</a></li>
                                                                <li> <a href="/appsquadz/case-study/nearify-case-study.php">Nearify - Discover Events</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="sub-menu-sec without-heading">
                                                            <div class="menuHeadTitle">Government Projects</div>
                                                            <ul>
                                                                <li> <a href="/appsquadz/case-study/urja-case-study.php">Urja - Power Finance Ministry</a></li>
                                                                <li> <a href="/appsquadz/case-study/steelmint-case-study.php">SteelMint - Steel Authority of India</a></li>
                                                                <li> <a href="/appsquadz/case-study/himachal-forest-department-case-study.php">Himachal Forest Department</a></li>
                                                                <li> <a href="/appsquadz/case-study/drdo-case-study.php">E-Nasika - DRDO</a></li>
                                                                <li> <a href="/appsquadz/case-study/nabha-power-plant-case-study.php">Nabha Power Plant</a></li>
                                                                <li> <a href="/appsquadz/case-study/taste-of-bihar-case-study.php">Taste Of Bihar - Bihar Government</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div style = "height:70px; width:100% ; background:#077BEA ;margin-top:-8px">
                                            <div class="container">
                                                <div class="partner-with" style="float: left;">
                                                    <a href="/appsquadz/#"><img src="img/partner/partner.png"> <span style="color: #fff;">Partner with us</span></a>
                                                </div>
                                                <div class="partner-with" style="float: left;">
                                                    <a href="/appsquadz/#"><img src="img/partner/carear.png"> <span style="color: #fff;">Career with us</span></a>
                                                </div>
                                                <div class="partner-with" style="float: left;">
                                                    <a href="/appsquadz/#"><img src="img/partner/clintspeak.png"> <span style="color: #fff;">Client Speak</span></a>
                                                </div>
                                                <div class="partner-with" style="float: left;">
                                                    <a href="/appsquadz/#"><img src="img/partner/portfolio.png"> <span style="color: #fff;">Portfolio</span></a>
                                                </div>
                                                <div class="celibration" style="float: right;">
                                                    <img src="img/partner/celebrate.png">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li><a href="/appsquadz/contact-us.php" class="transition">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
            <div class="clearfix"></div>
        </div>
    </header>
</div>