<?php
error_reporting(1);
include("config.php");
include("query_helper.php");
$base_path = getcwd(); 
$base_url = "http://www.new.appsquadz.com/";
$path=$_SERVER['SCRIPT_FILENAME'];
// $path=explode('/',$_SERVER['SCRIPT_FILENAME']);
// array_pop($path); 
// $final =implode('/',$path); 
// echo '<pre>'; print_r($_SERVER);
									// $final=$base_url;
									// $servername = "localhost";
									// $username = "fourtfsa_amit";
									// $password = "amit@appsquadz";
									// $dbname = "fourtfsa_appsquadz_main_db";
									// $conn = new mysqli($servername, $username, $password, $dbname);
									// if ($conn->connect_error) {
										// die("Connection failed: " . $conn->connect_error);
									// }
$page=$_GET['page'];
$lim= ($page*3)-3;

//$sql="select * from app_reviews  where status=2 OR status=3" join app_list on app_list.id=app_reviews.app_id where id=".$_POST['id']." ";
// working 100%
 // echo $query = "SELECT app_reviews.id,type_of_review,validated_by,client_name,logo,client_company_name,designation,overall_rating,review_description from app_reviews  where status=1 OR status=3
 // join app_list on app_list.id=app_reviews.app_id order by app_reviews.id desc limit $lim,3";
 
 //echo $query="SELECT app_reviews.status,app_reviews.id,type_of_review,validated_by,client_name,logo,client_company_name,designation,overall_rating,review_description from app_reviews
 //join app_list on app_list.id=app_reviews.app_id 
 //where app_reviews.status='2' OR app_reviews.status='3' order by app_reviews.id desc limit 0,3";

$query="SELECT app_reviews.status,app_reviews.id,type_of_review,validated_by,
client_name,logo,client_company_name,designation,overall_rating,review_description
 from app_reviews join app_list on app_list.id=app_reviews.app_id 
 
 WHERE app_reviews.status= 2 OR app_reviews.status= 3 order by app_reviews.id desc limit $lim,3";
// JOIN app_validaters ON app_validaters.id = app_reviews.validated_by  
 $result = $conn->query($query);
//print_r($result);
$num_of_rows=mysqli_num_rows($result);
$total_pages=$num_of_rows/2;
while ($project = $result->fetch_array(MYSQLI_ASSOC)) {
    $testimonals[] = $project;	
} 
foreach($testimonals as $testimonal) {
	//print_r($testimonals);die;
                                if($testimonal['type_of_review'] == '1'){
                                    if($testimonal['validated_by'] == '0'){

                        ?>
                        <div class="col-md-4 col-sm-4 col-xs-12 count-list">
                            <div class="nd-testimonial-block transition text-center">
                                <div class="tm-project-logo"><img src="<?php echo $final.'uploads/app_logos/'.$testimonal['logo'];?>" style="" class="" onerror="" alt="SnaPak" style="width: 100px; height: 100px;"></div>
                                <div class="tm-project-name fbold"><?php echo $testimonal['client_name']; ?></div>
                                <div class="tm-client-post fsemibold"><?php echo $testimonal['client_company_name']; ?>, <?php echo $testimonal['designation']; ?></div>
                                <div class="tm-star">
                                    <ul>
									
									<?php 
										for($i=0; $i<=$testimonal['overall_rating'];$i++)
										{
										echo('<li> <a href="javascript:void(0)" class="active"><i class="fa fa-star" aria-hidden="true"></i></a> </li>');
										}
										?>
                                    </ul>
                                </div>
                                <div class="tm-project-discription">
                                    <p class="flight"><span>"</span><?php echo $testimonal['review_description']; ?><span>"</span></p>
                                </div>
                                <div class="tm-button">
                                    <a href="javascript:void(0)" class="fbold transition cs_req_btn">Get a quote
                                        <i class="zmdi zmdi-chevron-right zmdi-hc-fw transition"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <?php } 
                        else{
							//dont delete
							//$validater_query 	            = "select image from app_validaters where id=".$testimonal['validated_by'];
							// $validater_img_fire 			= $conn->query($validater_query)->fetch_array(MYSQLI_ASSOC);
							// $validate_image                 = $base_url."uploads/validators_images/".$validater_img_fire['image'];
                        
						?>
                        <div class="col-md-4 col-sm-6 count-list">
                            <div class="nd-testimonial-block transition text-center">
                                <div class="tm-project-logo">
                                   <img src="<?php echo $final.'uploads/app_logos/'.$testimonal['logo'];?>"  class="" onerror="" alt="Readers Rescue" style="width: 100px; height: 100px;">
                                </div>
                                <div class="tm-project-name fbold"><?php echo $testimonal['client_name']; ?></div>
                                <div class="tm-client-post fsemibold"><?php echo $testimonal['client_company_name']; ?>, <?php echo $testimonal['designation']; ?></div>
                                <div class="tm-star">
                                    <ul>
                                        <?php 
										for($i=0; $i<$testimonal['rating'];$i++)
										{
										echo('<li> <a href="javascript:void(0)" class="active"><i class="fa fa-star" aria-hidden="true"></i></a> </li>');
										}
										?>
                                    </ul>
                                </div>
                                <div class="tm-project-discription">
                                    <p class="flight"><span>"</span><?php echo $testimonal['review_description']; ?>
                                        <span>"</span>
                                    </p>
                                </div>

                                <div class="tm-validby fsemibold">Validated By :
                                 <?php

///$survey = fetch_data_by_custom_query("SELECT * 
////FROM app_survey_question
//JOIN app_survey_heading ON app_survey_heading.id = app_survey_question.fk_survey_heading_id
//WHERE fk_testimonial_id =$id");
                                       
                                // $query_images = fetch_data_by_custom_query("SELECT app_reviews.validated_by, app_validaters.validater, app_reviews.id,
                                  //app_validaters.image
                                 //FROM app_reviews
                                 //JOIN app_validaters ON app_validaters.id = app_reviews.validated_by
                                // WHERE app_reviews.id =51");
                                 // forreach($query_images as $query_image ) {
                                 ?>
                                <?php 
                                 
                                $get_rev_query = "SELECT app_reviews.validated_by, app_validaters.validater, app_reviews.id,
                                            app_validaters.image
                                            FROM app_reviews
                                            JOIN app_validaters ON app_validaters.id = app_reviews.validated_by
                                             WHERE app_reviews.id ='".$testimonal['id']."'";
                                             //$query="SELECT * FROM CountryInfo WHERE Name = '".$name."'";
                                             
                                             $get_rev_res = $conn->query($get_rev_query)->fetch_array(MYSQLI_ASSOC);
                         //print_r($get_rev_res);
                        

                                  //  if($get_rev_res['validated_by']==1){?>
                                  
                                  <?php if($get_rev_res['validated_by']!=0)?>
                                        <img src="uploads/validators_images/<?php echo $get_rev_res['image']; ?>" alt="validater logodfdfd" width="140px" height="26px"></div>
                                             <?php//}?>
                                             
                                             <div class="tm-button">
                                <a href="survay.php?val_id=<?php echo $testimonal['validated_by'];?>&id=<?php echo $testimonal['id'];?>" class="fbold transition">View Survey<i class="zmdi zmdi-chevron-right zmdi-hc-fw transition"></i></a>
                                </div>
                            </div>
                        </div>
                        <?php
                        }
                        } 
                        if($testimonal['type_of_review'] == '2'){
                        ?>
                         <div class="col-md-4 col-sm-6 count-list">
                            <div class="nd-testimonial-block video transition text-center">
                                <div class="tm-video-block" style="background:#000 url(<?php echo $testimonal['video_thumbnail_link']; ?>)">
                                </div>
                                <div class="tm-video-play" id="vidwrap-16" onclick="play(this);" data-att="<?php echo $testimonal['video_link']; ?>?autoplay=1&amp;controls=1&amp;showinfo=0&amp;modestbranding=0&amp;enablejsapi=1&amp;rel=0">
                                    <i class="zmdi zmdi-play-circle-outline zmdi-hc-fw transition"></i>
                                </div>
                                <div class="tm-video-detail">
                                    <div class="tm-project-name fbold"><?php echo $testimonal['client_name']; ?></div>
                                    <div class="tm-client-post fsemibold"><?php echo $testimonal['client_company_name']; ?>, <?php echo $testimonal['designation']; ?></div>
                                    <div class="tm-star">
                                        <ul>
                                            <li> <a href="javascript:void(0)" class="active"><i class="fa fa-star" aria-hidden="true"></i></a> </li><li> <a href="javascript:void(0)" class="active"><i class="fa fa-star" aria-hidden="true"></i></a> </li><li> <a href="javascript:void(0)" class="active"><i class="fa fa-star" aria-hidden="true"></i></a> </li><li> <a href="javascript:void(0)" class="active"><i class="fa fa-star" aria-hidden="true"></i></a> </li><li> <a href="javascript:void(0)" class="active"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php  }
						} ?>