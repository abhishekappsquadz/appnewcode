<?php 
    include('query_helper.php');
    $query="SELECT * from app_hiring ORDER BY id DESC"; 
    $results=fetch_data_by_custom_query($query);
    ?>
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
        <section class="innerpage-banner selected custom-banner">
            <div class="container">
                <div class="in-banner-content career-banner-pd fadeInUp animated3">
                    <p class="banner-upper-content">Turn Your Technical Obsession into</p>
                    <h1>A Promising Career</h1>
                    <p>People just like you work here. It’s amazing what we accomplish when we’re here together!</p>
                    <div class="btn-section"> <a href="#career-hiring" class="comman-btn cbss">see current opportunities</a> </div>
                </div>
            </div>
        </section>
        <section class="aw-cl-logo-block">
            <div class="">
                <ul class="nav nav-tabs selected">
                    <li role="presentation" class="support-section active"> <a href="#career-hiring" class="common-client-survey" name="career-hiring" role="tab" data-toggle="tab">Current Openings</a></li>
                    <li role="presentation" class="support-section"><a href="#valueculture" class="common-client-survey" name="valueculture" role="tab" data-toggle="tab">Our Culture </a></li>
                    <li role="presentation" class="support-section"><a href="#tech-lead" class="common-client-survey" name="tech-lead" role="tab" data-toggle="tab">Why Join AppSquadz</a></li>
                    <li role="presentation" class="support-section"><a href="#hiring-process-sec" class="common-client-survey" name="hiring-process-sec" role="tab" data-toggle="tab">Hiring Process</a></li>
                </ul>
            </div>
        </section>
        <div class="career-hiring" id="career-hiring">
            <div class="container">
                <div class="main-content-block pdT18">
                    <h2>We’re Hiring! Your skills are valued</h2>
                    <div class="title-bar">Choose your area of interest and create something people love to use every day</div>
                </div>
                <div class=" row text-center marT61 hiring_skilled">
                    <?php foreach($results as $result){?>
                    <div class="col-sm-3">
                        <div class="career-text imghvr-hinge-up career-text-index">
                            <span><img src="uploads/job_profile_images/<?php echo $result['icon']?>"></img></span>
                            <h3><?php echo $result['profile'];?></h3>
                            <div class="figcaption">
                                <a href="career-ui-design.php?id=<?php echo $result['id']?>" class="apply_btn transition">More Info</a>
                            </div>
                        </div>
                    </div>
                    <?php }?>
                </div>
            </div>
        </div>
        <div class="valueculture" id="valueculture">
            <div class="container">
                <div class="col-sm-12 text-center">
                    <h2 class="valueheading">Our Values Shape Our Culture</h2>
                    <P class="value-subheading">We give employees the freedom to be awesome</P>
                </div>
                <div class="col-sm-10 col-sm-offset-1 text-center">
                    <P class="value-subtext">Like a lot of startups and enterprises, AppSquadz is filled with highly motivated and thought-driven individuals who believe that our values are the essence of who we are and the way we work day in, day out. We inspire human connections- be it with employees, clients and partners. Our actions are rooted in three core values:</P>
                </div>
                <div class="valuecul-content-block">
                    <div class="col-sm-4 col-xs-12 text-center">
                        <div class="padtop58"><img src="img/passion.png" alt="Integrity"></div>
                        <h2 class="phd-head">Integrity</h2>
                        <div class="phd-sub">Trust has to be at the center of what we do. If it’s not, it won’t show up to our clients and prospects, to our partners who want to build deep relations with us. Yes, we have targets that we want to hit, but we take actions that build trust with colleagues and external</div>
                    </div>
                    <div class="col-sm-4 col-xs-12 text-center">
                        <div class="padtop58"><img src="img/helpfullness.png" alt="Passion"></div>
                        <h2 class="phd-head">Passion</h2>
                        <div class="phd-sub">We go that extra distance in all our activities and stand up for what we believe in. Each member at AppSquadz steadfastly pushes oneself and fellows for results, actively encourages, supports and motivates others. We take pride in doing a good job and exceeding expectations.</div>
                    </div>
                    <div class="col-sm-4 col-xs-12 text-center">
                        <div class="padtop58"><img src="img/dependability.png" alt="Accountability"></div>
                        <h2 class="phd-head">Accountability</h2>
                        <div class="phd-sub">A work culture that values responsibility and accountability is what we encourage within our teams. Everyone here is willing to take responsibility of their own actions. Because ultimately when team members consistently demonstrate ownership, trust is formed.</div>
                    </div>
                </div>
                <div class="btnRow">
                    <div class="btnRow">
                        <a href="cdn-cgi/l/email-protection.html#38504a785357564b4c59564c51565e57165b5755" class="bcm_btn transition">Join Our Team</a> 
                    </div>
                </div>
            </div>
        </div>
        <section class="web-dev light-gray-bg tech-lead" id="tech-lead">
            <div class="text-center">
                <div class="kpProgram">
                    <div class="container">
                        <div class="main-content-block">
                            <h2>Why Should You Join Us</h2>
                            <div class="title-bar">All things @AppSquadz, All in Single Best Place </div>
                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-3 col-sm-4">
                                    <span class="partnersIcon crossIcon empFirst transition "></span>
                                    <h2>Employee First</h2>
                                    <p>You are not an ordinary employee but an asset </p>
                                </div>
                                <div class="col-md-3 col-sm-4">
                                    <span class="partnersIcon crossIcon adv_resors transition "></span>
                                    <h2>Advanced Resources</h2>
                                    <p>Mac Screens and Android or iOS devices for the team</p>
                                </div>
                                <div class="col-md-3 col-sm-4">
                                    <span class="partnersIcon crossIcon pos_env transition "></span>
                                    <h2>Positive Environment</h2>
                                    <p>As bright and spirited as it gets to work and learn</p>
                                </div>
                                <div class="col-md-3 col-sm-4">
                                    <span class="partnersIcon crossIcon gb_proj transition "></span>
                                    <h2>Groundbreaking Projects</h2>
                                    <p>Grateful opportunities for your career</p>
                                </div>
                                <div class="col-md-3 col-sm-4">
                                    <span class="partnersIcon crossIcon opn_comm transition "></span>
                                    <h2>Transparent &amp; Open Communication</h2>
                                    <p>Open discussions during retreats and meetings</p>
                                </div>
                                <div class="col-md-3 col-sm-4">
                                    <span class="partnersIcon crossIcon trng_dev  transition "></span>
                                    <h2>Training &amp; Development</h2>
                                    <p>Programs designed to amplify your ability and skills</p>
                                </div>
                                <div class="col-md-3 col-sm-4">
                                    <span class="partnersIcon crossIcon rewrd_bnft transition "></span>
                                    <h2>Rewards &amp; Benefits</h2>
                                    <p>To make you feel approved and recognized</p>
                                </div>
                                <div class="col-md-3 col-sm-4">
                                    <span class="partnersIcon crossIcon fun_connect transition "></span>
                                    <h2>Fun Connect</h2>
                                    <p>Annual picnics, festival celebrations,Friday fun and Connect activities</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6 padtblr0">
                    <div class="careerbanner1"></div>
                    <div class="cb-textbox">
                        <h3>Have the career you've always dreamed of.</h3>
                        <p>We want you to realize your potential.</p>
                        <a href="cdn-cgi/l/email-protection.html#bbd3c9fbd0d4d5c8cfdad5cfd2d5ddd495d8d4d6" class="blue-new-btn cb-btn">Apply Form</a> 
                    </div>
                </div>
                <div class="col-sm-3 padtblr0">
                    <div class="careerbanner2"></div>
                </div>
                <div class="col-sm-3 padtblr0">
                    <div class="careerbanner3"></div>
                </div>
            </div>
        </div>
        <section class="hiring-process" id="hiring-process-sec">
            <div class="container">
                <div class="main-content-block">
                    <h2>Our Tech Hiring Process</h2>
                    <div class="title-bar">If it’s your chance, give your best shot.</div>
                </div>
                <div class="row pdT66">
                    <div class="col-sm-3">
                        <div class="initial_intraction">
                            <div class="initial_intr_bg box-gradient">
                                <div class="initial_intr_bg-inr">
                                    <div class="slideNo">
                                        01<i class="fa fa-circle active" aria-hidden="true"></i><span>/05</span>
                                    </div>
                                    <h4>Initial Interaction</h4>
                                </div>
                            </div>
                            <p> A one on one personal interview with the HR Manager is the first step of the selection process. </p>
                        </div>
                    </div>
                    <div class="col-sm-3 rightArrow">
                        <div class="initial_intraction">
                            <div class="initial_intr_bg box-gradient">
                                <div class="initial_intr_bg-inr">
                                    <div class="slideNo">
                                        02<i class="fa fa-circle active" aria-hidden="true"></i><span>/05</span>
                                    </div>
                                    <h4>Technical Interview</h4>
                                </div>
                            </div>
                            <p>It’s time to exhibit your technical skills before the Tech Expert judged on subject knowledge</p>
                        </div>
                    </div>
                    <div class="col-sm-3 rightArrow">
                        <div class="initial_intraction">
                            <div class="initial_intr_bg box-gradient">
                                <div class="initial_intr_bg-inr">
                                    <div class="slideNo">
                                        03<i class="fa fa-circle active" aria-hidden="true"></i><span>/05</span>
                                    </div>
                                    <h4>Real-time Assignment</h4>
                                </div>
                            </div>
                            <p>For practical technical assessment, you may have to answer a range of puzzles and out-of-the-box problems</p>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="initial_intraction">
                            <div class="initial_intr_bg box-gradient">
                                <div class="initial_intr_bg-inr">
                                    <div class="slideNo">
                                        04<i class="fa fa-circle active" aria-hidden="true"></i><span>/05</span>
                                    </div>
                                    <h4>Final HR Discussion</h4>
                                </div>
                            </div>
                            <p>Once you pass the technical round, final discussions on salary, workplace ethics take place</p>
                        </div>
                    </div>
                </div>
                <div class="offer_rollout">
                    <h3>Offer Rollout !</h3>
                </div>
            </div>
            <div class="offer_bg">
                <div class="offer-circle">
                    <span class="partnersIcon thumbsup transition "></span>
                </div>
                <div class="container">
                    <div class="carrer-join-heading">
                        <h2>Hey! Come and join us!</h2>
                        <p>Be a part of the most happening team around!</p>
                        <p class="getBoardTitle">We are in search of brilliant iOS & Android Developers, ingenious graphic designers and solution-oriented Project Managers to work with us on the various challenging and innovative projects of our clients. If you are ready to become a part of our brainy, tech-savvy team, get in touch with me now.</p>
                    </div>
                    <div class="text-center">
                        <div class="careers-hr-info">
                            <div class="chr-img">
                                <a href="https://www.linkedin.com/in/divya-chaudhary-34a35a101/" target="_blank" class="linkedin-link">
                                <img src="img/divya.jpg" alt="Sr. HR Manager">
                                <i class="fa fa-linkedin" aria-hidden="true"></i>
                                </a>
                            </div>
                            <div class="chr-detail">
                                <ul>
                                    <li><strong>Divya Chaudhary</strong> <br> <span>Sr. HR Manager</span></li>
                                    <li><strong>P:</strong> +91-120-4238296</li>
                                    <li><strong>E:</strong> <a href="cdn-cgi/l/email-protection.html#462e34062d292835322728322f2820296825292b"><span class="__cf_email__" data-cfemail="19716b597276776a6d78776d70777f76377a7674">hr@appsquadz.com</span></a><br /></li>
                                </ul>
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