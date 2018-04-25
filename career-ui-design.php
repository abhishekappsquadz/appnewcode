<!DOCTYPE html>
<html lang="en" itemscope itemtype="http://schema.org/WebPage">
    <head>
        <title>Top Mobile App Development Company India, USA, UK &amp; UAE - AppSquadz</title>
        <meta name="description" content="AppSquadz is one of the top mobile app development companies in India, USA, UK &amp; UAE focusing on iPhone, iPad &amp; Android applications. Offer web development services across the globe." />
        <?php include("./include/head.php");?>
        <?php include('./include/globaljs.php'); ?>   
    </head>
    <body itemscope itemprop='mainEntity' itemtype='http://schema.org/Organization' class=''>
        <progress id="progressbar" value="0" style="display:none"></progress>
        <?php include("./include/header.php"); ?>
        <!-- end-of header-section -->
        <section class="innerpage-banner selected custom-banner" style="background:url(img/banners/career-detail-bnr.png) no-repeat center top;  background-size: cover;">
            <div class="container">
                <div class="in-banner-content career-banner-pd fadeInUp animated3">
                    <div class="careeBnrIcon"> <span class="careerIcon ui-ux transition "></span> </div>
                    <h1><?php echo $results[0]['profile'];?></h1>
                    <p>Creative. Adaptive. Web crafter</p>
                    <div class="btn-section"> <a href="#career-detail-sec" class="comman-btn cbss">see the details</a> </div>
                </div>
            </div>
        </section>
        <section class="support-content-block blue-bg process-page">
            <div class="container">
                <div class="col-md-12">
                    <div class="process-blue-block fadeInUp animated3">
                        <div class="col-md-12">
                            <div class="row">
                                <h2><?php echo $results[0]['quote_head']."!";?></h2>
                                <p class="marT15"><?php echo $results[0]['quote'];?>.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="location_sec" id="career-detail-sec">
            <div class="container">
                <div class="location_inr_block">
                    <ul>
                        <li>
                            <div class="loc-col">
                                <span class="careerIcon location_icon"></span>
                                <div class="location_Name">Location <span>Noida</span></div>
                            </div>
                        </li>
                        <li>
                            <div class="loc-col">
                                <span class="careerIcon depart_icon"></span>
                                <div class="location_Name">Department <span><?php echo $results[0]['department'];?></span></div>
                            </div>
                        </li>
                        <li>
                            <div class="loc-col">
                                <span class="careerIcon jobtype_icon"></span>
                                <div class="location_Name">Job-Type <span><?php echo $results[0]['job_type'];?></span></div>
                            </div>
                        </li>
                        <li>
                            <a href="cdn-cgi/l/email-protection.html#48203a082327263b3c29263c21262e27662b2725" class="apply_Now_btn">Apply Now</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row" id="col-manage-block-heights1">
                <div class="col-sm-6">
                    <div class="duties col-block-height">
                        <h5>Requirements and Duties:</h5>
                        <ul>
                            <?php
                                //echo $results[0]['req_duties'];
                                 $a=explode(",",$results[0]['req_duties']);
                                 //print_r($a);
                                foreach($a as $b)
                                {
                                echo'<li>'. $b.'<br>'.'</li>';
                                }
                                ?>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="duties col-block-height">
                        <h5>Skill and Ability:</h5>
                        <ul>
                            <?php
                                //echo $results[0]['req_duties'];
                                 $a=explode(",",$results[0]['skills']);
                                 //print_r($a);
                                foreach($a as $b)
                                {
                                echo'<li>'. $b.'<br>'.'</li>';
                                }
                                ?>
                        </ul>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <section class="web-dev pdT41" id="tech-lead">
            <div class="text-center">
                <div class="kpProgram">
                    <div class="container">
                        <div class="main-content-block">
                            <h2>We don’t offer jobs. We offer careers.</h2>
                            <div class="title-bar">In a work culture that defines companionships </div>
                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-3 col-sm-4">
                                    <span class="partnersIcon  crossIcon  empFirst transition "></span>
                                    <h2>Employees First</h2>
                                    <p>That’s when you weigh mind over matter</p>
                                </div>
                                <div class="col-md-3 col-sm-4">
                                    <span class="partnersIcon   crossIcon  adv_resors transition "></span>
                                    <h2>Advanced Resources</h2>
                                    <p>Mac Screens and Android or iOS devices for the team</p>
                                </div>
                                <div class="col-md-3 col-sm-4">
                                    <span class="partnersIcon  crossIcon  pos_env transition "></span>
                                    <h2>Positive Environment</h2>
                                    <p>As bright and spirited as it gets</p>
                                </div>
                                <div class="col-md-3 col-sm-4">
                                    <span class="partnersIcon  crossIcon gb_proj transition "></span>
                                    <h2>Groundbreaking Projects</h2>
                                    <p>Grateful opportunities for your career</p>
                                </div>
                                <div class="col-md-3 col-sm-4">
                                    <span class="partnersIcon  crossIcon opn_comm transition "></span>
                                    <h2>Open Communication</h2>
                                    <p>Open discussions during retreats and meetings</p>
                                </div>
                                <div class="col-md-3 col-sm-4">
                                    <span class="partnersIcon  crossIcon trng_dev  transition "></span>
                                    <h2>Training & Development</h2>
                                    <p>Programs designed to amplify your ability and skills </p>
                                </div>
                                <div class="col-md-3 col-sm-4">
                                    <span class="partnersIcon  crossIcon rewrd_bnft transition "></span>
                                    <h2>Rewards & Benefits</h2>
                                    <p>To make you feel approved and recognized</p>
                                </div>
                                <div class="col-md-3 col-sm-4">
                                    <span class="partnersIcon crossIcon fun_connect transition "></span>
                                    <h2>Fun Connect</h2>
                                    <p>Annual picnics, festivities, Friday fun and surprise activities</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="sounds-good">
            <div class="container">
                <div class="sounds_inr-block">
                    <div class="row">
                        <div class="col-sm-12">
                            <h2>Counting on you!</h2>
                            <p>For everything that makes it a companionship to last for long.</p>
                            <div class="col_bottom">
                                <a href="cdn-cgi/l/email-protection.html#640c16240f0b0a1710050a100d0a020b4a070b09" class="apply_btn1 transition">Apply Now</a>
                                <div class="addthis_inline_share_toolbox_igcq"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="page_top"> <a href="javascript:void(0);" id="gotop"></a> </div>
        <div class="clearfix"></div>
        <!--footer section-->
        <?php include('./include/footer.php'); ?>         
    </body>
</html>