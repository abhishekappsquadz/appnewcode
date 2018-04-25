<?php 
    include('query_helper.php');
    $query="SELECT app_team_employees.name,app_team_employees.designation,app_team_employees.description,app_team_employees.image,app_team_employees.linked_link,app_team_employees.level,app_team_employees.quote
     FROM `app_team_employees`JOIN app_team on app_team_employees.team_id = app_team.id ORDER BY `app_team_employees`.`preference` ASC"; 
    $results=fetch_data_by_custom_query($query);
?>

<!DOCTYPE html>
<html lang="en" itemscope itemtype="http://schema.org/WebPage">
    <head>
        <meta name="description" content="AppSquadz is one of the top mobile app development companies in India, USA, UK &amp; UAE focusing on iPhone, iPad &amp; Android applications. Offer web development services across the globe." />
        <title>Top Mobile App Development Company India, USA, UK &amp; UAE - AppSquadz</title>
        <?php include("./include/head.php")?>
        <?php include('./include/globaljs.php'); ?>  
    </head>
    <progress id="progressbar" value="0" style="display:none"></progress>
    <body itemscope itemprop='mainEntity' itemtype='http://schema.org/Organization' class=''>
        <?php include('include/header.php'); ?>
        <section class="innerpage-banner mobile-banner-height selected casestudy-banner Page-scrolling-fixed-banner" >
            <div class="container">
                <div class="in-banner-content fadeInUp animated3">
                    <h1>It’s about the thoughts and souls<br /> that work behind AppSquadz</h1>
                    <p>Welcome to a constant STATE of INNOVATION </p>
                    <div class="btn-section "> <a href="contact-us.html" class="blue-new-btn connectBtn">Connect with Our Team</a> </div>
                </div>
            </div>
        </section>
        <section id="overflow-slide_1" class="aboutSection pdb9 hire-experts-Platform-block selected">
            <div class="container">
                <div class="main-content-block new-main-content-block rows fadeInUp animated3">
                    <div class="s-title-bar marginB10">Best Place, Best People, Best Results</div>
                    <h2>Enthusiastic, Professional &amp; Qualified</h2>
                    <h6 class="teamHead marginT10">We’re a team of 100+ people who all are masters of what they do.</h6>
                    <p>We love what we do, and we love who we do it with. Half of us work on core development, designing and quality analysis, and the other half manage the project on the whole. The people who work at AppSquadz share the vision and values of our community. </p>
                </div>
                <div class="clearfix"></div>
            </div>
        </section>
        <section class="ourMangement">
            <div class="missionStatement">
                <h3>“Meet Our Team of Lateral Thinkers.<br />
                    We Rise by Lifting Our Fellows, Our Partners and Our Clients.”
                </h3>
                <span class="teamsubtitle">Senior Management</span>
            </div>
            <ul id="col-manage-block-heights1" class="mangementlist">
                <?php 		  foreach($results as $result) {
                    if($result['level']=="top_level"){
                    ?>
                <center>
                    <li>
                        <div class="mangeProfile dynmaicBg" style="background-image:url('uploads/member_images/<?php echo $result['image'];?>');border-radius:50%;margin-left:50px;margin-right:50px;">
                            <!--<div class="teamHover">
                                <div class="tital_head"><?php echo $result['quote'];?></div>
                                </div>-->
                        </div>
                        <div class="management_info col-block-height">
                            <div class="manageName">
                                <?php echo $result['name'];?>
                            </div>
                            <div class="designation"> <?php echo $result['designation'];?></div>
                            <?php if($result['linked_link']){?>
                            <div class="socialLink">
                                <ul>
                                    <li><a href="<?php echo $result['linked_link'];?>" target="blank" class="linkedin"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                            <?php }?>
                            <div class="clearfix"></div>
                            <p><?php echo $result['description'];?></p>
                        </div>
                    </li>
                </center>
                <?php  }}?>			
            </ul>
            <div class="clearfix"></div>
        </section>
        <div class="clearfix"></div>
        <section class="leaderShipTeam">
            <div class="container">
                <h2>Leading, the Offshore Development Way </h2>
                <p>AppSquadz leaders go along with the team and mentor the team members to discover their skills and what they love to do because they believe that each of us has a personal calling that’s as unique as a fingerprint. They nurture and enhance everyone around. </p>
                <div id="col-manage-block-heights2" class="row leaderShip">
                    <?php foreach($results as $result) {
                        if($result['level']=="mid_level"){?>
                    <div class="col-sm-3">
                        <div class="teamMamber">
                            <div class="teamImg">
                                <img style="border-radius:50%" alt="Project Manager" src="uploads/member_images/<?php echo $result['image']?>" />
                            </div>
                            <div class="infoDetail">
                                <div class="manageName"> <?php echo $result['name'];?>  </div>
                                <div class="designation"><?php echo $result['designation'];?></div>
                                <div class="socialLink">
                                    <ul>
                                        <!--<li style="list-style-type: none;"><a href="<?php echo $result['linked_link'];?>" target="blank" class="linkedin"><i class="fa fa-linkedin"></i></a></li>-->
                                    </ul>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <?php } } ?>
                </div>
            </div>
        </section>
        <section class="join_team">
            <div class="container">
                <div class="join-content">
                    <h2>Ready for more than just another job?</h2>
                    <p>WE'RE ALWAYS INTERESTED IN MEETING NEW PEOPLE WITH A SIMILAR PASSION AND EXPERIENCE OF WORKING WITH TECHNOLOGY AND TURNING OUR CLIENT’S VISION INTO A PROFITABLE BUSINESS OPPORTUNITY.
                        GREAT CARRERS BEGIN HERE!
                    </p>
                    <div class="btn-section "> <a href="careers.html" class="blue-new-btn connectBtn">JOIN OUR TEAM</a> </div>
                </div>
            </div>
        </section>
        <!-- -footer-section- -->
        <?php include('./include/footer.php'); ?>         
    </body>
</html>