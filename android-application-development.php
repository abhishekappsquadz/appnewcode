<!DOCTYPE html>
<html lang="en" itemscope itemtype="http://schema.org/WebPage">
    <head>
        <meta name="description" content="AppSquadz is one of the top mobile app development companies in India, USA, UK &amp; UAE focusing on iPhone, iPad &amp; Android applications. Offer web development services across the globe." />
        <title>Top Mobile App Development Company India, USA, UK &amp; UAE - AppSquadz</title>
        <?php include("./include/head.php")?>
        <?php include('./include/globaljs.php'); ?>  
    </head>
    <progress id="progressbar" value="0" style="display:none"></progress>
    <?php 
      include('query_helper.php');
      $query="select * from app_reviews where status=1 OR status=3";
      $result=fetch_data_by_custom_query($query);
      //print_r($result);
      $query_app_list="SELECT * FROM app_list where id>0 and status=1 order by create_date DESC  limit 10";                  
      $results_app_list=fetch_data_by_custom_query($query_app_list);
      ?>
    <body itemscope itemprop='mainEntity' itemtype='http://schema.org/Organization' class=''>
        <?php include('include/header.php'); ?>
        
      <section class="innerpage-banner mobile-banner-height selected Page-scrolling-fixed-banner android-bg new_comp" >
         <div class="container">
            <div class="in-banner-content fadeInUp animated3">
               <h1>TOP ANDROID APP DEVELOPMENT COMPANY</h1>
               <p>ONE STOP SOLUTION FOR ALL THINGS ANDROID</p>
               <div class="btn-section "> <a href="javascript:void(0)" class="blue-new-btn connectBtn cs_req_btn get_proj">Get Estimation For Your Project</a> </div>
            </div>
            <div class="pb-content-block mobile-m-t fadeInUp animated3 new_our" style ="text-align: center;">
                <p class="footer-text ur_and"><a href="portfoliosb47b.html?i=&amp;p=49&amp;a=w">View Our Android App Portfolio</a></p>
            </div>
         </div>
      </section>
      <section>
        <div class="container">
          <div class="row deliv_exc chatInr">
          <div class="row">             
            <h2 >THE SQUAD WHICH DELIVERS EXCELLENCE</h2>      
            <div class="col-sm-6 col-md-6">
              <div class="delivers">
                <p>Having a terrific <b>android application development</b> journey with major successes along our way, we have a come to form a hardworking, talented and dedicated squad with members who are up-to-date with all the recent buzz in the market. With technology evolving exponentially, the android market has grown by leaps and bounds over the past few years. Every enterprise today has an Android
                application to mark their digital presence.</p>
                <p>Ever since it’s inception in 2008, in 10 years, the Android market has grown by a large number. Today it is the largest developer’s community with an exponentially growing user base.</p>
                <p>At <a href="https://www.appsquadz.com" target="_blank"><b>AppSquadz Technologies</b></a> we develop highly functional and intuitive applications which match your enterprise completely. Owing to our experience and understanding of mobile applications, we guarantee a seamless android application which is innovative and
                inventive.</p>
              </div>
            </div>
                <div class="col-sm-6 col-md-6">
                    <div class="del_mob">
                        <img src="img/top-app-developers.png" alt="">
                    </div>
                </div>
            </div>
            <div class="row android_new">    
                <div class="col-sm-6 col-md-6">
                  <div class="del_mob">
                        <img src="img/development.png" alt="" class="img-responsive">
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 an-android">
                  <h3>Why Your Business Needs An Android Application?</h3>
                  <p>Android apps have become a need of the hour. Apps are no loner just pretty icons on our phones, they are a complete industry. More so, they have become the brand faces for any enterprise’s digital occurrence.</p>
                  <div class="business-need">
                      
                      <ul class="featureList">
                        <li><p>Large User Base - Occupies 80% of market</p></li>
                        <li><p>40% of the world population uses Android</p></li>
                        <li><p>Vast developers community</p></li>
                        <li><p>App Market on various platforms - PlayStore, Amazon, Samsung</p></li>
                        <li><p>Easy to integrate</p></li>
                        <li><p>Open Source</p></li>
                      </ul>
                    </div>
                </div>
              </div>
          </div>
        </div>
      </section>
      
<section class="development-processz-block flo_of">
  <div class="container">
    <div class="main-content-block rows fadeInUp animated3">
      <h3>Flow of Events</h3>
      <!-- <div class="title-bar">"Our diverse expertise optimizes your app for maximum results"</div> -->
    </div>
    <section class="development-process-block technologiesProvide android-page flow_events">
      <div class="development-tabing-block">
        <div class="banner-blocks">
          <ul class="nav nav-tabs first_pro" role="tablist">
            <li role="presentation" class="first-tab banner-block ">
              <div class="center-block  banner-block-active"> <a href="#discover" role="tab" data-toggle="tab">
                <span class="transition discover"><img src="media/discover.png" alt=""></span> </a> 
              </div>
            </li>
            <li role="presentation" class="second-tab">
              <div class="center-block"><a href="#define" role="tab" data-toggle="tab">
                <span class="transition"><img src="media/define.png" alt=""></span> </a>
              </div>
            </li>
            <li role="presentation" class="third-tab banner-block">
              <div class="center-block"><a href="#design" role="tab" data-toggle="tab">
                <span class="transition"><img src="media/design.png" alt=""></span> </a>
              </div>
            </li>
            <li role="presentation" class="four-tab banner-block">
              <div class="center-block"><a href="#develop" role="tab" data-toggle="tab">
                <span class="transition"><img src="media/devlop.png" alt=""></span> </a>
              </div>
            </li>
            <li role="presentation" class="fivth-tab banner-block">
              <div class="center-block"><a href="#deliver" role="tab" data-toggle="tab">
                <span class="transition"><img src="media/deliver.png" alt=""></span> </a>
              </div>
            </li>
          </ul>
        </div>
        <script>
          var header = document.getElementsByClassName("first_pro")[0];
            var btns = header.getElementsByClassName("center-block");
            for (var i = 0; i < btns.length; i++) {
              btns[i].addEventListener("click", function() {
                var current = document.getElementsByClassName("banner-block-active");
                current[0].className = current[0].className.replace(" banner-block-active", "");
                this.className += " banner-block-active";
              });
            }
     
        </script>
        <div class="tab-content of_desc">
          <div class="tab-pane active cus-fadeInUp animated3" id="discover">
            <div class="container">
              <div class="main-content-block">
                <div class="application-option">
                  <ul>
                    <li>
                      <h3>Discover</h3>
                      <span>Get in touch with our sales team and begin working on the idea you have. Business Requirement document is prepared to form an accurate road map of expectations and deliverables.</span> 
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane cus-fadeInUp animated3" id="define">
            <div class="container">
              <div class="main-content-block">
                <div class="application-option">
                  <ul>
                    <li>
                      <h3>Define</h3>
                      <span>Thorough research towards the technology and detailed specifications. Wireframes drawn for a step by step guide to the functioning of the application.</span> 
                    </li>                              
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane cus-fadeInUp animated3" id="design">
            <div class="container">
              <div class="main-content-block">
                <div class="application-option">
                  <ul>
                    <li>
                      <h3>Design</h3>
                      <span>Complete mock up defining the complete look and feel of the application along with the creative graphics which enhance UI & UX of the application.</span> 
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane cus-fadeInUp animated3" id="develop">
            <div class="container">
              <div class="main-content-block">
                <div class="application-option">
                  <ul>
                    <li>
                      <h3>Develop</h3>
                      <span>The application is coded and made fully functional. Project is divided into milestones for uniform communication and easy navigation. Testing done to identify and corrects bugs & defects.</span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane cus-fadeInUp animated3" id="deliver">
            <div class="container">
              <div class="main-content-block">
                <div class="application-option">
                  <ul>
                    <li>
                      <h3>Deliver</h3>
                      <span>App is made live on various platforms. Analytics and marketing support is provided along with 6-12 months of free bug related support.</span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>     
  </div> 
</section>
<section class="AppSquadz-Brings main-content-block selected">
	<div class="container">
		<h3>WHAT APPSQUADZ BRINGS TO THE TABLE</h3>
    <div class="row equal">
      <div class="wave-bg"></div>
      <div class="col-xs-6 col-sm-6 col-md-3">
        <div class="b-features-column">
          <div class="features-column-icon">
            <i class="fa fa-dashboard"></i>
          </div>
          <h6 class="features-column-title">
            Creative UX/UI Designs
          </h6>
          <div class="features-column-text">                                                
          </div>                                        
        </div>
      </div>
      <div class="col-xs-6 col-sm-6 col-md-3">
        <div class="b-features-column">
          <div class="features-column-icon">
            <i class="fa fa-gears"></i>
          </div>
          <h6 class="features-column-title">
            Native App Development
          </h6>
          <div class="features-column-text">                                                
          </div>                                    
        </div>
      </div>
      <div class="col-xs-6 col-sm-6 col-md-3">
        <div class="b-features-column">
          <div class="features-column-icon">
            <i class="fa fa-plug"></i>
          </div>
          <h6 class="features-column-title">
            Hybrid App Development
          </h6>
          <div class="features-column-text">                                                
          </div>                                        
        </div>
      </div>
      <div class="col-xs-6 col-sm-6 col-md-3">
        <div class="b-features-column">
          <div class="features-column-icon">
            <i class="fa fa-arrows-alt"></i>
          </div>
          <h6 class="features-column-title">
            App Porting/Redesign
          </h6>
          <div class="features-column-text">                                                
          </div>                                          
        </div>
      </div>
      <div class="col-xs-6 col-sm-6 col-md-3">
        <div class="b-features-column">
          <div class="features-column-icon">
            <i class="fa fa-dashboard"></i>
          </div>
          <h6 class="features-column-title">
            Widget Development
          </h6>
          <div class="features-column-text">                                                
          </div>                                              
        </div>
      </div>
      <div class="col-xs-6 col-sm-6 col-md-3">
        <div class="b-features-column">
          <div class="features-column-icon">
            <i class="fa fa-wifi"></i>
          </div>
          <h6 class="features-column-title">
            NFC integration
          </h6>
          <div class="features-column-text">                                              
          </div>                                
        </div>
      </div>
      <div class="col-xs-6 col-sm-6 col-md-3">
        <div class="b-features-column">
          <div class="features-column-icon">
            <i class="fa fa-retweet"></i>
          </div>
          <h6 class="features-column-title">
            Beacon integration
          </h6>
          <div class="features-column-text">                                              
          </div>                                
        </div>
      </div>
      <div class="col-xs-6 col-sm-6 col-md-3">
        <div class="b-features-column">
          <div class="features-column-icon">
            <i class="fa fa-rss"></i>
          </div>
          <h6 class="features-column-title">
            RFID solutions
          </h6>
          <div class="features-column-text">                                              
          </div>                                
        </div>
      </div>
      <div class="col-xs-6 col-sm-6 col-md-3">
        <div class="b-features-column">
          <div class="features-column-icon">
            <i class="fa fa-bluetooth"></i>
          </div>
          <h6 class="features-column-title">
            Bluetooth integration
          </h6>
          <div class="features-column-text">                                              
          </div>                                
        </div>
      </div>
      <div class="col-xs-6 col-sm-6 col-md-3">
        <div class="b-features-column">
          <div class="features-column-icon">
            <i class="fa fa-map-marker"></i>
          </div>
          <h6 class="features-column-title">
            Geo-location services 
          </h6>
          <div class="features-column-text">                                              
          </div>                                
        </div>
      </div>
      <div class="col-xs-6 col-sm-6 col-md-3">
        <div class="b-features-column">
          <div class="features-column-icon">
            <i class="fa fa-video-camera"></i>
          </div>
          <h6 class="features-column-title">
            Audio/Video live streaming integration
          </h6>
          <div class="features-column-text">                                              
          </div>                                
        </div>
      </div>
      <div class="col-xs-6 col-sm-6 col-md-3">
        <div class="b-features-column">
          <div class="features-column-icon">
            <i class="fa fa-suitcase"></i>
          </div>
          <h6 class="features-column-title">
            Support, Maintenance &amp; Optimisation.
          </h6>
          <div class="features-column-text">                                              
          </div>                                
        </div>
      </div>
    </div>
  </div>
</section>
       <section id="overflow-slide_2" class="support-content-block dark-blue btmarrow custom-support-section pdB37 selected">
         <div class="container">
            <div class="col-md-12">
               <div class="process-blue-block topTech  aw-cl-logo-con">
                  <div class="col-md-10 col-md-offset-1">
                     <div class="row">
                        <h2 class="font36">Leveraging The Best Technologies</h2>
                       <p>Our tech stack is what defines us. We make sure we use only the latest technology for the development of your ideas into functional applications. We make sure to incorporate the recent technological advancements to develop the most amazing mobile applications.</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="development-process-block technologiesProvide android-page">
         <div class="development-tabing-block">
            <div class="tablist-block">
               <ul class="nav nav-tabs" role="tablist">
                  <li role="presentation" class="first-tab active">
                     <div class="center-block"> <a href="#languages" role="tab" data-toggle="tab"> <i class="iconbgNone iconfontclr icon-shell-alt"></i> <br>
                        <span class="transition">Languages</span> </a> 
                     </div>
                  </li>
                  <li role="presentation" class="second-tab">
                     <div class="center-block"><a href="#frameworks" role="tab" data-toggle="tab"> <i class="framework"></i> <br>
                        <span class="transition">Frameworks</span> </a>
                     </div>
                  </li>
                  <li role="presentation" class="third-tab">
                     <div class="center-block"><a href="#ide" role="tab" data-toggle="tab"> <i class="ide"></i> <br>
                        <span class="transition">IDE</span> </a>
                     </div>
                  </li>
                  <li role="presentation" class="four-tab">
                     <div class="center-block"><a href="#database" role="tab" data-toggle="tab"> <i class="iconbgNone iconfontclr icon-database"></i> <br>
                        <span class="transition">Database</span> </a>
                     </div>
                  </li>
               </ul>
            </div>
            <div class="tab-content">
               <div class="tab-pane active cus-fadeInUp animated3" id="languages">
                  <div class="container">
                     <div class="main-content-block">
                        <div class="application-option">
                           <ul>
                              <li>
                                 <!--<a href="java-application-development.html">-->
                                    <figure><img alt="Java" src="img/logo/android/java.png"></figure>
                                    <span>Java</span> 
                                 </a>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="tab-pane cus-fadeInUp animated3" id="frameworks">
                  <div class="container">
                     <div class="main-content-block">
                        <div class="application-option">
                           <ul>
                              <li>
                                 <figure><img alt="RetroFit" src="img/logo/android/retrofit.png"></figure>
                                 <span>RetroFit</span> 
                              </li>
                              <li>
                                 <figure><img alt="Volley" src="img/logo/android/volley.png"></figure>
                                 <span>Volley</span> 
                              </li>
                              <li>
                                 <figure><img alt="Dagger2" src="img/logo/android/dagger2.png"></figure>
                                 <span>Dagger2</span> 
                              </li>
                              <li>
                                 <figure><img alt="Gradle" src="img/logo/android/gradle.png"></figure>
                                 <span>Gradle</span> 
                              </li>
                              <li>
                                 <figure><img alt="Glide" src="img/logo/android/glide.png"></figure>
                                 <span>Glide</span> 
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="tab-pane cus-fadeInUp animated3" id="ide">
                  <div class="container">
                     <div class="main-content-block">
                        <div class="application-option">
                           <ul>
                              <li>
                                 <figure><img alt="Android Studio" src="img/logo/android/android-studio.png"></figure>
                                 <span>Android Studio</span> 
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="tab-pane cus-fadeInUp animated3" id="database">
                  <div class="container">
                     <div class="main-content-block">
                        <div class="application-option">
                           <ul>
                              <li>
                                 <figure><img alt="SQLite" src="img/logo/android/sql-lite.png"></figure>
                                 <span>SQLite</span>
                              </li>
                              <li>
                                 <figure><img alt="Realm" src="img/logo/android/realm.png"></figure>
                                 <span>Realm</span> 
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
</section>
<section id="overflow-slide_1" class="chatSolution selected">
         <div class="container">
            <div class="chatInr pre_solu">
               <!--<span class="chatsub-top-Title">Highest technology standards for Android applications</span>-->
               <h3>PRE-BUILT SOLUTIONS</h3>
               <!-- <p>Size of your business is immaterial - If you want an app, we will make it for you<br /> we've developed Android apps for all</p>
               <p>At AppSquadz we develop high functional and intuitive applications which match your enterprise completely. Owing to our experience and understanding of mobile applications, we can guarantee a seamless android application which is innovative and inventive. Business with us determines a win-win situation for you!</p>
               <h3>Solutions We Offer for Android Applications:</h3> -->
               <!--<ul>
                <li>Ecommerce</li>
                <li>Retail & B2B</li>
                <li>Taxi Sharing & Ride booking</li>
                <li>On-demand</li>
                <li>Instant messaging and chat</li>
                <li>AR/VR/IOT</li>
                <li>Health and fitness</li>
                <li>Enterprise</li>
                <li>Gaming</li>
                <li>News</li>
                </ul> -->
            </div>
                       
            <div class="mobile-solution">
               <ul>
                  <li>
                     <div class="chatOption boxShedow">
                        <!--<span class="careerIcon msg_comm transition"></span>-->
                        <img src="img\android-apps-icons\taxi-travel.png" alt="">
                        <div class="chatOptionName">Taxi & Travel</div>
                     </div>
                  </li>
                  <li>
                     <div class="chatOption boxShedow">
                       <!-- <span class="careerIcon android_chat transition"></span>-->
                        <img src="img\android-apps-icons\logistics.png" alt="">
                        <div class="chatOptionName">Logistics</div>
                     </div>
                  </li>
                  <li>
                     <div class="chatOption boxShedow">
                        <!--<span class="careerIcon nfc transition"></span>-->
                        <img src="img\android-apps-icons\food-ordering.png" alt="">
                        <div class="chatOptionName">Food Ordering</div>
                     </div>
                  </li>
                  
                  <li>
                     <div class="chatOption boxShedow">
                       <!-- <span class="careerIcon multimedia_iPhone  transition"></span>-->
                        <img src="img\android-apps-icons\dating.png" alt="">
                        <div class="chatOptionName">Dating</div>
                     </div>
                  </li>
                   <li>
                     <div class="chatOption boxShedow">
                        <!--<span class="careerIcon android_weather transition"></span>-->
                         <img src="img\android-apps-icons\health-fitness.png" alt="">
                        <div class="chatOptionName">Health & Fitness</div>
                        
                     </div>
                  </li>
                  <li>
                     <div class="chatOption boxShedow">
                        <!--<span class="careerIcon android_health transition"></span>-->
                        <img src="img\android-apps-icons\events.png" alt="">
                        <div class="chatOptionName">Events</div>
                      </div>
                  </li>
                  <li>
                     <div class="chatOption boxShedow">
                      <!--  <span class="careerIcon voip  transition"></span>-->
                      <img src="img\android-apps-icons\on-demand-services.png" alt="">
                        <div class="chatOptionName">On-demand Services</div>
                        
                     </div>
                  </li>
                  <li>
                     <div class="chatOption boxShedow">
                       <!-- <span class="careerIcon android_news transition"></span>-->
                        <img src="img\android-apps-icons\social-networking.png" alt="">
                        <div class="chatOptionName">Social Networking</div>
                     </div>
                  </li>
                  <li> 
                     <div class="chatOption boxShedow">
                       <!-- <span class="careerIcon gps_Loc transition"></span>-->
                        <img src="img\android-apps-icons\finance-management.png" alt="">
                        <div class="chatOptionName">Finance Management</div>
                     </div>
                  </li>
                  <li>
                     <div class="chatOption boxShedow">
                       <!-- <span class="careerIcon mob_game transition"></span>-->
                        <img src="img\android-apps-icons\elearning-etraining.png" alt="">
                        <div class="chatOptionName">eLearning and eTraining</div>
                     </div>
                  </li>
                 
                  <li>
                     <div class="chatOption boxShedow">
                       <!-- <span class="careerIcon utility_app transition"></span>-->
                        <img src="img\android-apps-icons\b2b-ecommerce.png" alt="">
                        <div class="chatOptionName">B2B & Ecommerce</div>
                     </div>
                  </li>
                  <li>
                     <div class="chatOption boxShedow">
                       <!-- <span class="careerIcon ar transition"></span>-->
                       <img src="img\android-apps-icons\news-magazine.png" alt="">
                        <div class="chatOptionName">News & Magazine</div>
                      </div>
                  </li>

               </ul>

            </div>
            <div class="clearfix"></div>
            <div class="btnRow mt40"> <a href="#overflow-slide_6" class="blue-new-btn transition cbss">Talk to Our Android Expert</a> </div>
         </div>
      </section>
<section>
    	<div class="container-fluid and_roid  pre_right">
          <div class="row">
            <div class="col-sm-8 col-md-8">
            	<div class="container">
                <div class="bill_pay">
                    <h3>How We Fit The Bill?</h3>
                    <ul class="featureList to_bil">
                        <li>We have developed over 300+ android applications and are still continuing work. </li>
                        <li>We have adopted upcoming trends and changes like AR, VR, IOT in our
                           mobile application development.</li>
                        <li>We maintain a structural flow of information and processing along with
                            transparent communication over BaseCamp to avoid miscommunication.
                        </li>
                        <li>Our services are economical and won’t burn a hole in your budget. </li>
                        <li>Our squad is driven towards developing applications that work like a charm.
                       </li>
                         <li>At AppSquadz, our development projects are divided into various phases and the milestones are achieved with rapid development.</li>
                        <li>We don’t deploy any app before we know it’s safe for your use!</li>
                       <li>Our services are not restricted to India, they are available throughout the world with branches in USA, UK, Saudi Arabia & Thailand. </li>
                      <li>We aren’t rigid with our engagement models, you can let us know what you
                        want and we can work it out from there or you can choose on of our many
                       pre-existing models. </li>
                    </ul>
                 </div>
              </div>
            </div>
            <div class="col-sm-4 col-md-4">
              <div class="requestquate req_form">
                  <form>
                      <div class="reqtext"><span>Request a</span> Free Quote</div>
                      <div class="requestquateinner">                         
                         <div id="pick" style="display:none; text_align:center; ">
                           <input type="button" class="type-btn" style="" id="error" value="">
                          </div>
                         <p>All fields are required*</p>
                         <input type="text" id="name" name="name" value="" placeholder="Name" required="">
                         <input type="text" id="email" name="email" value="" placeholder="Email" required="">
                         <input type="text" id="phone" name="phone" pattern="" value="" placeholder="Phone Number" required="">
                         <select name="data[Contacts][category]" class="form-control effect-16 request_19" tabindex="0" id="ContactsCategory">
                            <option value="">Choose any</option>
                            <option value="Enterprise Software Solutions">Enterprise Software Solutions</option>
                            <option value="Creating a Mobile App">Creating a Mobile App</option>
                            <option value="Web Development">Web Development</option>
                            <option value="Dedicated Team Service">Dedicated Team Service</option>
                            <option value="IT Consulting Services">IT Consulting Services</option>
                            <option value="Enhancing an Existing Product">Enhancing an Existing Product</option>
                            <option value="Partnership Opportunities">Partnership Opportunities</option>
                            <option value="Others">Others</option>
                         </select>
                         <input type="text" id="skypeId" name="skypeId" pattern="" value="" placeholder="Skype Id"> 
                         <select name="data[Contacts][budget]" class="form-control effect-16 request_19" tabindex="0" id="ContactsBudget">
                            <option value="">Choose any</option>
                            <option value="Less than $5,000">Less than $5,000</option>
                            <option value="$5,000 - $10,000">$5,000 - $10,000</option>
                            <option value="$10,000 - $25,000">$10,000 - $25,000</option>
                            <option value="$25,000 - $50,000">$25,000 - $50,000</option>
                            <option value="$50,000 - $1,00,000">$50,000 - $1,00,000</option>
                            <option value="$100,000+">$100,000+</option>
                         </select>
                         <textarea name="message" class="" id="message"></textarea>
                         <!-- <input type="button" name="get_in_touch" id="submit">  -->
                         <button type="button" class="btn btn_subm">Submit</button>
                      </div>
                   </form>
              </div>
            </div>
          </div>
      </div>
      </section>
      <!-- <section id="overflow-slide_2" class="support-content-block blue-bg btmarrow custom-support-section pdB37 selected">
         <div class="container">
            <div class="col-md-12">
               <div class="process-blue-block topTech  aw-cl-logo-con">
                  <div class="col-md-10 col-md-offset-1">
                     <div class="row">
                        <h2 class="font36">A Leading Mobile Application Development Company</h2>
                        <span class="topnewTitle"></span>
                        <p class="mt30">Having a terrific <a href="hire-android-developer.html">android application development </a>journey with major successes along our way, we have a come to form a hardworking, talented and dedicated team who are up-to-date with all the recent buzz in the market. If that is what you are looking for? Then contact us.</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section> -->
      <!-- <section class="development-process-block technologiesProvide android-page">
         <div class="development-tabing-block">
            <div class="tablist-block">
               <ul class="nav nav-tabs" role="tablist">
                  <li role="presentation" class="first-tab active">
                     <div class="center-block"> <a href="#languages" role="tab" data-toggle="tab"> <i class="iconbgNone iconfontclr icon-shell-alt"></i> <br>
                        <span class="transition">Languages</span> </a> 
                     </div>
                  </li>
                  <li role="presentation" class="second-tab">
                     <div class="center-block"><a href="#frameworks" role="tab" data-toggle="tab"> <i class="framework"></i> <br>
                        <span class="transition">Frameworks</span> </a>
                     </div>
                  </li>
                  <li role="presentation" class="third-tab">
                     <div class="center-block"><a href="#ide" role="tab" data-toggle="tab"> <i class="ide"></i> <br>
                        <span class="transition">IDE</span> </a>
                     </div>
                  </li>
                  <li role="presentation" class="four-tab">
                     <div class="center-block"><a href="#database" role="tab" data-toggle="tab"> <i class="iconbgNone iconfontclr icon-database"></i> <br>
                        <span class="transition">Database</span> </a>
                     </div>
                  </li>
               </ul>
            </div>
            <div class="tab-content">
               <div class="tab-pane active cus-fadeInUp animated3" id="languages">
                  <div class="container">
                     <div class="main-content-block">
                        <div class="application-option">
                           <ul>
                              <li>
                                 <a href="java-application-development.html">
                                    <figure><img alt="Java" src="img/logo/java.png"></figure>
                                    <span>Java</span> 
                                 </a>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="tab-pane cus-fadeInUp animated3" id="frameworks">
                  <div class="container">
                     <div class="main-content-block">
                        <div class="application-option">
                           <ul>
                              <li>
                                 <figure><img alt="RetroFit" src="img/logo/retrofit2.png"></figure>
                                 <span>RetroFit</span> 
                              </li>
                              <li>
                                 <figure><img alt="Volley" src="img/logo/Volley.png"></figure>
                                 <span>Volley</span> 
                              </li>
                              <li>
                                 <figure><img alt="Dagger2" src="img/logo/dagger2.png"></figure>
                                 <span>Dagger2</span> 
                              </li>
                              <li>
                                 <figure><img alt="Gradle" src="img/logo/android_gradle.png"></figure>
                                 <span>Gradle</span> 
                              </li>
                              <li>
                                 <figure><img alt="Glide" src="img/logo/glide.png"></figure>
                                 <span>Glide</span> 
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="tab-pane cus-fadeInUp animated3" id="ide">
                  <div class="container">
                     <div class="main-content-block">
                        <div class="application-option">
                           <ul>
                              <li>
                                 <figure><img alt="Android Studio" src="img/logo/android_studio.png"></figure>
                                 <span>Android Studio</span> 
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="tab-pane cus-fadeInUp animated3" id="database">
                  <div class="container">
                     <div class="main-content-block">
                        <div class="application-option">
                           <ul>
                              <li>
                                 <figure><img alt="SQLite" src="img/logo/sqlite.png"></figure>
                                 <span>SQLite</span>
                              </li>
                              <li>
                                 <figure><img alt="Realm" src="img/logo/realm.png"></figure>
                                 <span>Realm</span> 
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>-->
      
      
      <!-- <section class="home-portfolio-block blue-bg" id="home-portfolio-block"> -->

    <section class="home-portfolio-block">
      <div class="main-content-block fadeInUp animated3">
        <h2 class="text-uppercase">Let our work speak for itself</h2>
        <!-- <div class="title-bar"></div> -->
      </div>
      <div id="w">
        <br>
        <div class="container">
          <div id="port_modal"> </div>
          <!--22jan-->
          <!-- <div class="main-content-block fadeInUp animated3">
            <h1>Our clients</h1>
            </div> -->                
          <div class="crsl-items fadeInUp animated3" data-navigation="navbtns">
            <div class="crsl-wrap">
              <?php foreach($results_app_list as $result_app_list){?>
              <div class="crsl-item">
                <div class="mobile-porfolio-grid transition round10" data-id="<?php echo $result_app_list['id'];?>">
                  <!--portfolio-->
                  <div class="mobile-client-logo">
                    <img src="uploads/app_logos/<?php echo $result_app_list['logo'];?>" style="" class="" onerror="" alt="LUV ViD">
                  </div>
                  <div class="mobile-client-name"><?php echo $result_app_list['app_name'];?></div>
                  <div class="mobile-clientProject">
                    <?php
                      $query_categories1='select app_app_category.category from app_app_category join
                       `app_apps_categories` on `app_apps_categories`.`fk_category_id`=app_app_category.id WHERE app_apps_categories.fk_app_id="'.$result_app_list['id'].'"';
                       $query_categories=fetch_data_by_custom_query($query_categories1);
                       $t=count($query_categories);
                      foreach($query_categories as $a){ $t--; ?>
                    <?php echo ($t==1?','.$a['category']:$a['category']);?>
                    <?php } 
                      ?>
                  </div>
                  <div class="text-center devices mobile">
                    <div>
                      <img src="uploads/app_thumb_image/<?php echo $result_app_list['app_thumb_image'];?>" style="" class="" onerror="" alt="Taste Of Bihar"> 
                    </div>
                  </div>
                  <div class="mobilegrid-hover">
                    <div class="mobileproject-descrption">
                      <div class="mobilep-des-info">
                        <p><?php echo $result_app_list['description'];?>.</p>
                      </div>
                      <div class="mobile-casestudy" style="display: none"></div>
                      <div class="project-feature-btn">
                        <ul>
                          <center>
                            <?php if(!empty($result_app_list['website_url'])){?>
                            <li class="transition"><span><a target="_blank" href="<?php echo $result_app_list['website_url']; ?>">Website</a></span></li>
                            <?php }?>
                            <?php if(!empty($result_app_list['ios_app'])){?>
                            <li class="transition"><span><a target="_blank" href="<?php echo $result_app_list['ios_app']; ?>">IPHONE</a></span></li>
                            <?php }?>   
                            <?php if(!empty($result_app_list['android_app'])){?>     
                            <li class="transition"><span><a target="_blank" href="<?php echo $result_app_list['android_app']; ?>">Android</a></span></li>
                            <?php }?>
                          </center>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <?php }?>
              <!-- post #5 -->
            </div>
            <!-- @end .crsl-wrap -->
          </div>
          <!-- @end .crsl-items -->
        </div>
      </div>
      <!-- @end #w -->
      <br>
      <nav class="slidernav">
        <div id="navbtns" class="clearfix">
          <a href="#" class="previous"><i style="margin-top: 7px;" class="fa fa-chevron-left" aria-hidden="true"></i></a>
          <a href="#" class="next"><i style="margin-top: 7px;" class="fa fa-chevron-right" aria-hidden="true"></i></a>
        </div>
      </nav>
      <div class="btnRow">
        <a href="portfolios.php" class="comman-btn transition">VIEW More PROJECTS</a> 
      </div>
    </section>

      </section>
      <section class="proposal-block selected">
         <div class="text-center ptb70 fadeInUp animated3">
            <div class="font32 flight " style="color:#fff"><h3>HAVE AN AWESOME IDEA? LET'S DISCUSS THE PROJECT!</h3></div>
            <p> We will provide a quick analysis and <b>free</b> proposal for it. Don’t worry, it is secure and confidential.</p>
            <div class="btn-section mt30"> <a href="javascript:void(0)" class="blue-new-btn connectBtn cs_req_btn">Request a quote</a> </div>
         </div>
      </section>
      <div class="page_top"> <a href="javascript:void(0);" id="gotop"></a> </div>
      <div class="clearfix"></div>
    
        <!-- -footer-section- -->
        <?php include('./include/footer.php'); ?>         
    </body>
</html>