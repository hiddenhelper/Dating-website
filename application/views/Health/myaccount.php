<head>
   <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/myaccount.css">
</head>
<!--   <link rel="stylesheet" href="https://scpassets.quackquack.co/q_quack_stylesv76.css"> -->
<style>
   @media only screen and (min-width: 768px) {
   /* For desktop: */
   .ma {width: 8.33%;}
   }
   .album_photos li.fbphoto {
   position: relative;
   }

   #wrapper{
    background-color: #edeef3;
   }

   .txt1{
      font-size: 17px;
    color: #2a3054;
    font-weight: bold;
   }
   .tex3{
         font-size: 17px;
    color: #2a3054;
    font-weight: bold;
   }

   a {
    color: #2a3054;
    text-decoration: none;
    font-weight: bold;
}

   .form-control{
    border-color: #a2afff69;
   }


   .form-control{
    margin: 0px 0px 20px;
   }

   .aline{
      font-size: 17px;
        border-color: #a2afff69;
   }

 
   .overlay_select {
   position: absolute;
   width: 22px;
   display: none;
   height: 22px;
   border-radius: 100%;
   background: #5394e4;
   margin: 2px;
   right: 5px;
   bottom: 0px;
   z-index: 99;
   }
   .overlay_select span {
   background: url(https://imgassets.quackquack.co/tour_text_like.png) no-repeat;
   width: 14px;
   height: 14px;
   background-size: 100%;
   display: inline-block;
   vertical-align: middle;
   position: absolute;
   top: 50%;
   left: 50%;
   transform: translate(-50%, -50%);
   -webkit-transform: translate(-50%, -50%);
   -moz-transform: translate(-50%, -50%);
   -o-transform: translate(-50%, -50%);
   -ms-transform: translate(-50%, -50%);
   }
   @media only screen and (max-width:420px) {
   .album_pic:hover {
   border-color: transparent !important;
   }
   }
   .del_txt:hover,
   .del_txt:focus {
   outline: none;
   border: none;
   }
   }
   aside.leftBlock {
   float: left;
   width: 235px;
   border-right: 1px solid #d2d8e6;
   min-height: 503px;
   margin: 55px 0 0;
   position: fixed;
   z-index: 9;
   height: 100%;
   background: #edeef3;
   }
   .leftBlock ul {
   width: 100%;
   }
   .leftBlock ul li {
   float: left;
   width: 100%;
   position: relative;
   margin: 0;
   padding: 0;
   border: 0;
   outline: 0;
   font-size: 100%;
   vertical-align: baseline;
   background: #bba6a600;
   }
   @media screen and (max-height: 600px) {
   .leftBlock ul li a,
   .leftBlock ul li span.link {
   padding: 5px 0;
   }
   }
   html,
   body,
   div,
   span,
   object,
   iframe,
   h1,
   h2,
   h3,
   h4,
   h5,
   h6,
   p,
   blockquote,
   pre,
   abbr,
   address,
   cite,
   code,
   del,
   dfn,
   em,
   img,
   ins,
   kbd,
   q,
   samp,
   small,
   strong,
   sub,
   sup,
   var,
   b,
   i,
   dl,
   dt,
   dd,
   ol,
   ul,
   li,
   fieldset,
   form,
   label,
   legend,
   table,
   caption,
   tbody,
   tfoot,
   thead,
   tr,
   th,
   td,
   article,
   aside,
   canvas,
   details,
   figcaption,
   figure,
   footer,
   header,
   hgroup,
   menu,
   nav,
   section,
   summary,
   time,
   mark,
   audio,
   video {
   margin: 0;
   padding: 0;
   border: 0;
   outline: 0;
   font-size: 100%;
   vertical-align: baseline;
   background: #bba6a600;
   }
   ul {
   display: block;
   list-style-type: disc;
   margin-block-start: 1em;
   margin-block-end: 1em;
   margin-inline-start: 0px;
   margin-inline-end: 0px;
   padding-inline-start: 40px;
   }
</style>
</head>
<body>
   <div class="bar">
      <div class="barcontent" id="barwrap">
      </div>
   </div>
   <div class="toparrow disbtnhide" id="discodebtn">
      <div class="arrowbg"><span class="toparrowbtn"></span></div>
   </div>
   <div class="row ">
   <section class="mainContent" class="ma" >
      <div class="container" style="margin-top: 10%;">
         <?php include_once 'my-account-side-bar.php'; ?>

         <aside class="cont_right" >
            <div class="maincont" class="col-md-6">
               <div class="scrollBlock scrollBlock2">
                  <section class="slider_block">
                     <div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel">
                        <div class="carousel-inner" id="photo_add_org">
                           <div class="item active" data-id="0"><span class="slide_img"><img src="<?php echo base_url()?>images/gallery/<?php echo $record->image1;?>" alt="photo"></span></div>
                           <div class="item " data-id="1"><span class="slide_img" id="next_img_1"><img src="<?php echo base_url()?>images/gallery/<?php echo $record->image2;?>" alt="photo"></span></div>
                           <div class="item " data-id="2"><span class="slide_img" id="next_img_2"><img src="<?php echo base_url()?>images/gallery/<?php echo $record->image3;?>" alt="photo"></span></div>
                           <div class="item " data-id="3"><span class="slide_img" id="next_img_3"><img src="<?php echo base_url()?>images/gallery/<?php echo $record->image4;?>" alt="photo"></span></div>
                           <div class="item " data-id="3"><span class="slide_img" id="next_img_3"><img src="<?php echo base_url()?>images/gallery/<?php echo $record->image5;?>" alt="photo"></span></div>
                           <div class="item " data-id="3"><span class="slide_img" id="next_img_3"><img src="<?php echo base_url()?>images/gallery/<?php echo $record->image6;?>" alt="photo"></span></div>
                        </div>
                        <div class="carouselcontrols">
                           <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"><span class="slide_leftarrow"></span>
                           </a>
                           <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"><span class="slide_rightarrow"></span>
                           </a>
                        </div>
                     </div>
                     <a class="edit_link edit_photo photoedit">Edit</a>
                  </section>
                  <div class="profileTop profileMatch">
                     <div class="titleBlock online_title">
                        <div class="name_Block name_online">
                           <span class="profileName">
                           <strong><?php echo $record->user_name;?></strong>
                           <cite><?php echo $record->age;?>,</cite>
                           <small><?php echo $record->city;?></small>
                           </span>
                           <div class="mediaBlock">
                              <span class="mobileIcon"></span> 
                           </div>
                        </div>
                        <!-- <span class="designation"><small>Working as Student</small></span><span class="designation"><small>Studied Bachelor's</small></span> -->
                     </div>
                  </div>
                  <div class="" style="margin-left: 244px;">
                     <button type="button" class="btn btn-primary" style="margin-bottom: 30px;
                        height: 44px; width: 193px; background-color: #2dc234;" data-toggle="modal" data-target="#myModal">Add profile picture</button>
                  </div>
<!--                   <div class="score_response">
                     <a href="javascript:void(0);" onclick="upgradeNow('')" class="upgradeBtn renewupg myprofileupg">Upgrade now!</a>
                     <a href="javascript:void(0);" onclick="responseScore();" class="upgradeBtn renewupg myprofileupg scorebtn"><small></small> Check my profile score </a>
                  </div> -->
               </div>
               <div class="block1">
                  <form action="<?php echo base_url();?>home/myaccountEdit" method="post">
                     <div class="container" style="width: 666px;">
                        <div class="form-group">
                           <span class="txt1">Username:</span>
                           <input type="text" class="form-control"  name="user_name" id="user_name" style="border-color: #2a3054" value="<?php echo $record->user_name;?>" placeholder="Enter email"  readonly>
                        </div>
                        <div class="form-group">
                           <span class="txt1">Email:</span>
                           <input type="text" class="form-control" id="user_email" style="border-color: #2a3054" value="<?php echo $record->user_email;?>" placeholder="Enter password" name="user_email" readonly>
                        </div>
                        <div class="form-group">
                           <span class="txt1">Password</span>
                           <input type="password" class="form-control" style="border-color: #2a3054" value="<?php echo $record->user_pass;?>" id="pwd" placeholder="Enter password" name="user_pass">
                        </div>
                        <div class="form-group">
                           <span class="txt1">City Name</span>
                           <input type="text" class="form-control" id="city" style="border-color: #2a3054" value="<?php echo $record->city;?>" placeholder="Enter city" name="city">
                           <!-- <select class="form-control" id="sel1" name="city">
                              <?php if(count($cities))
		               			{
		               				foreach ($cities as $key => $v) {
		               					?>
		               						<option <?= $v['city_id']== $record->city ? 'selected':''; ?> value='<?= $v['city_id']; ?>'><?= $v['city_name']; ?></option>
		               					<?php
		               				}
		               			}
		               			?>
                           </select> -->
                        </div>
                        <div class="form-group">
                           <span class="pwd">Education</span>
                           <select class="form-control" id="sel1" name="education" style="border-color: #02dbdf52">
                              <option>
                                 <?php echo $record->education;?>
                              </option>
                              <option   value="High school">High school</option>
                              <option value="Trade school">Trade school</option>
                              <option value="Diploma">Diploma</option>
                              <option value="Bachelors">Bachelors</option>
                              <option value="Masters">Masters</option>
                              <option value="Doctorate">Doctorate</option>
                              <option value="Other">Other</option>
                           </select>
                        </div>
                        <div class="form-group">
                           <span class="txt1">Profession</span>
                           <select class="form-control" id="sel1" name="profession" style="border-color: #02dbdf52">
                              <option>
                                 <?php echo $record->profession;?>
                              </option>
                              <option value="Software Professional">Software Professional</option>
                              <option value="Business Person">Business Person</option>
                              <option value="Student">Student</option>
                              <option value="Technical/Engineering/Science">Technical/Engineering/Science</option>
                              <option value="Sales/Marketing">Sales/Marketing</option>
                              <option value="Hospititality/Service">Hospititality/Service</option>
                              <option value="Executive/Management">Executive/Management</option>
                              <option value="Accounts/Finance">Accounts/Finance</option>
                              <option value="Acting/Artist/Musician">Acting/Artist/Musician</option>
                              <option value="Architect">Architect</option>
                              <option value="Journalism">Journalism</option>
                              <option value="Fashion">Fashion</option>
                              <option value="Law">Law</option>
                              <option value="Teaching">Teaching</option>
                              <option value="Agriculture">Agriculture</option>
                              <option value="Civil Services (IAS,IPS,IRS,IFS)">Civil Services (IAS,IPS,IRS,IFS)</option>
                              <option value="Defence">Defence</option>
                              <option value="Socail service">Socail service</option>
                              <option value="Medical">Medical</option>
                              <option value="Writer">Writer</option>
                              <option value="Others">Others</option>
                           </select>
                        </div>
                        <div class="form-group">
                           <span class="txt1">Drinking Habit</span>
                           <select class="form-control" id="sel1" name="drinking_habit" style="border-color: #02dbdf52">
                              <option <?= $record->drinking_habit == 'Non-drinker' ? 'selected':''; ?> value="Non-drinker">Non-drinker</option>
                              <option <?= $record->drinking_habit == 'Drink socially only' ? 'selected':''; ?> value="Drink socially only">Drink socially only</option>
                              <option <?= $record->drinking_habit == 'Often' ? 'selected':''; ?> value="Often">Often</option>
                           </select>
                        </div>
                        <div class="form-group">
                           <span class="txt1">Smoking</span>
                           <select class="form-control" id="sel1" name="smoking" style="border-color: #02dbdf52">
                              <option>
                                 <?php echo $record->smoking;?>
                              </option>
                              <option value="Non-smoker">Non-smoker</option>
                              <option value="Smoke occasionally">Smoke occasionally</option>
                              <option value="Regular">Regular</option>
                              <option value="Tryin to quit">Tryin to quit</option>
                           </select>
                        </div>
                        <div class="form-group">
                           <span class="txt1">Eating Habit</span>
                           <select class="form-control" id="sel1" name="eating_habit" style="border-color: #02dbdf52">
                              <option>
                                 <?php echo $record->eating_habit;?>
                              </option>
                              <option>Vegetarian</option>
                              <option>Non-Vegetarian</option>
                              <option>Eggetarian</option>
                           </select>
                        </div>
                        <div class="form-group">
                           <span class="pwd">Common interest</span>
                           <select class="form-control cmmon-inst" name="interest_field_name" style="border-color: #02dbdf52" multiple="multiple" style="display: none;">
                              <?php if($insterest_list)
                              {
                                 foreach ($insterest_list as $k => $v)
                                 { ?>
                                    <option value='<?= $v['interest_field_name']; ?>'><?= $v['interest_field_name']; ?> </option>
                                 <?php }
                              }

                              ?>
                           </select>
                        </div>

                      <!--   <div class="form-group">
                           <label for="pwd" class="tex3">Common interest:</label>
                           <textarea type="text" class="form-control" id="pwd" placeholder="Enter password" name="interest_field_name" style="border-color: #02dbdf52">
                           <?php echo $record->interest_field_name;?>
                           </textarea>
                        </div>
 -->                        <div class="form-group">
                           <label for="pwd" class="tex3">About self:</label>
                           <textarea type="text" class="form-control" id="pwd" placeholder="Enter password" name="about_self" style="border-color: #02dbdf52">
                           <?php echo $record->about_self;?>
                           </textarea>
                        </div>
                     </div>
                     <div class="" style="margin-left: 244px;">
                        <input type="hidden" name="user_id" value="<?php echo $record->user_id;?>" />
                        <input type="submit" name="update" class="btn btn-primary" value="Update Profile" style="margin-bottom: 30px;
                           height: 44px; background-color: #2dc234;">
                     </div>
                  </form>
               </div>
            </div>
         </aside>
      </div>
      
   
      
      <div id="output" style="display:none;"></div>
      <div class="popup" id="myphtospopup" style="display: none;">
         <span class="transparent"></span>
        
         <div class="boxMain myphto_block myphto_block2 empty_photos" id="empty_photos" style="display: none;">
            <span class="close_icon"></span> <span class="invite_txt invite_txt2">My Photos</span>
            <div class="editphoto">
               <span class="plus_symbol" id="add_photo"><small id="sm_symbol"></small></span>
               <div class="upload_block" id="upload_photos">
                  <strong class="upld_txt">Upload Photos</strong>
                  <span class="from_gal" onClick="openFileOption();return;"> <small class="gal_icon"></small> <cite>From Gallery</cite> </span>
                  <span class="from_gal" onclick="fb_upload();" id="fb_upload">
                  <small class="gal_icon fb_photos"></small> <cite>From Facebook</cite></span>
                  <span class="from_gal" onclick="instagram_upload();" id="instagram_upload">
                  <small class="gal_icon inst_photos"></small> <cite>From Instagram</cite></span>
               </div>
            </div>
         </div>
         <div class="boxMain myphto_block myphto_block2" id="added_photos" style="display: block;">
            <span class="close_icon"></span>
            <span class="invite_txt">My Photos</span>
            <input type="hidden" id="popupphotos" name="popupphotos" value='' />
            <input type="hidden" id="img_id_value" value="984103" />
            <div class="full_photos editslide">
               <div class="slide_view popupslider">
                  <div id="myCarousel2" class="carousel slide" data-ride="carousel">
                     <ol class="carousel-indicators" id="popup_photo_add_thumb">
                        <li value="984103" data-target="#myCarousel2" data-slide-to="0" class="active"><span class="thumbnail_img"><img src="<?php echo base_url()?>images/gallery/<?php echo $record->image1 !="" ?  $record->image1 : 'admin.jpg'; ?>"></span></li>
                        <li value="994264" data-target="#myCarousel2" data-slide-to="1" class=""><span class="thumbnail_img"><img src="<?php echo base_url()?>images/gallery/<?php echo $record->image2 !="" ?  $record->image2 : 'admin.jpg'; ?>"></span></li>
                        <li value="994267" data-target="#myCarousel2" data-slide-to="2" class=""><span class="thumbnail_img"><img src="<?php echo base_url()?>images/gallery/<?php echo $record->image3 !="" ?  $record->image3 : 'admin.jpg'; ?>"></span></li>
                        <li value="11725811" data-target="#myCarousel2" data-slide-to="3" class=""><span class="thumbnail_img"><img src="<?php echo base_url()?>images/gallery/<?php echo $record->image4 !="" ?  $record->image4 : 'admin.jpg'; ?>"></span></li>
                     </ol>
                     <div class="myphotosBlock">
                        <div class="editphoto editphoto2">
                           <span class="plus_symbol small_symbol" id="add_photo0"><small id="sm_symbol0"></small></span>
                           <div class="upload_block" id="upload_photos0"> <strong class="upld_txt">Upload Photos</strong> <span class="from_gal" onClick="openFileOption();return;"> <small class="gal_icon"></small> <cite>From Gallery</cite> </span> <span class="from_gal fb_upload" id="fb_upload0"><small class="gal_icon fb_photos"></small> <cite>From Facebook</cite></span><span class="from_gal instagram_upload" onclick="instagram_upload();"><small class="gal_icon inst_photos"></small> <cite>From Instagram</cite></span> </div>
                        </div>
                     </div>
                     <!--      <div class="myphotosBlock">
                        <span class="plus_symbol small_symbol" id="add_photo0">
                        <input id="file" type="file" class="plus_symbol small_symbol" id="add_photo0"/>
                        
                        </span>  
                        
                        </div> -->
                     <div class="carousel-inner" id="popup_photo_add_org">
                        <div class="item active" data-id=><span class="slide_img"><img src="<?php echo base_url()?>images/gallery/ <?php echo $record->image1 !="" ?  $record->image1 : 'admin.jpg'; ?>" alt="photo"></div>
                        <div class="item " data-id=>
                           <span class="slide_img" id="popup_next_img_1">
                              <img src="<?php echo base_url()?>images/gallery/ <?php echo $record->image2 !="" ?  $record->image2 : 'admin.jpg'; ?>" alt="photo">
                              <!-- <div class="loader ball-scale loader_main loader_online new_loader" style="display:block;">
                                 <div></div>
                              </div> -->
                           </span>
                        </div>
                        <div class="item " data-id=>
                           <span class="slide_img" id="popup_next_img_2">
                              <img src="<?php echo base_url()?>images/gallery/ <?php echo $record->image3 !="" ?  $record->image3 : 'admin.jpg'; ?>" alt="photo">
                             <!--  <div class="loader ball-scale loader_main loader_online new_loader" style="display:block;">
                                 <div></div>
                              </div> -->
                           </span>
                        </div>
                        <div class="item " data-id=>
                           <span class="slide_img" id="popup_next_img_3">
                              <img src="<?php echo base_url()?>images/profile/<?php echo $record->image4 !="" ?  $record->image4 : 'admin.jpg'; ?>" alt="photo">
                             <!--  <div class="loader ball-scale loader_main loader_online new_loader" style="display:block;">
                                 <div></div>
                              </div> -->
                           </span>
                        </div>
                     </div>
                     <div class="carouselcontrols">
                        <a class="left carousel-control" href="#myCarousel2" role="button" data-slide="prev">
                        <span class="slide_leftarrow"></span>
                        </a>
                        <a class="right carousel-control" href="#myCarousel2" role="button" data-slide="next"><span class="slide_rightarrow"></span>
                        </a>
                     </div>
                  </div>
               </div>
               <div class="delete_block">
                  <span class="set_txt" id="setaspp"><cite class="pic_icon"></cite><small>Set as profile pic</small></span>
                  <button class="set_txt del_txt " id="delimage" style="background-color:  none; border: none; background-color:  transparent;font-family:roboto_r;"><cite class="del_icon"></cite><small>Delete</small></button>
               </div>
            </div>
            <span class="error" id="photoerror"></span>
         </div>
      </div>
   
   
      
   </section>
   <style>
      .rotateOutUpRight {
      top: 0;
      }
      .rotateInDownRight {
      visibility: visible !important;
      }
      .uinewpopup {
      height: auto;
      }
      .demofooter {
      width: auto;
      position: static;
      }
      .demofooter .uinextBtn {
      float: none;
      display: inline-block;
      }
      .found {
      margin-top: 5px;
      }
      .ui_icon img {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      -webkit-transform: translate(-50%, -50%);
      -moz-transform: translate(-50%, -50%);
      -o-transform: translate(-50%, -50%);
      -ms-transform: translate(-50%, -50%);
      }
      .unblockUsers_block .onlinetexbtm .designation {
      max-width: 340px;
      }
      .unblockUsers_block .onlinetexbtm .designation .designation {
      max-width: 340px;
      }
      .unblockUsers_block .onlinetexbtm .designation small {
      padding: 0 0 0 2px;
      width: 100%;
      }
      .onlinetexbtm .designation {
      max-width: 85%;
      }
      .links li {
      padding: 0 5px;
      }
      .mediaBlock span {
      margin-top: 2px;
      }
      .likemedia span {
      margin-top: 0;
      }
      .onmedia span {
      margin: 0 0 0 4px;
      }
      .empty_inbox {
      margin-top: 30px;
      }
      .contactempty small {
      max-width: 131px;
      }
      .editslide .carousel-indicators {
      width: 265px
      }
   </style>
   <script src="<?php echo base_url();?>assets/js/BsMultiSelect.min.js"></script>
   	<script>
   		$(document).ready(function(){
          
   		var counter = 0;
   		firebase.database().ref('/online/').on('child_added',function(snapshot)
           {
            $.each( snapshot.val(), function( key, value ) {
   			  if(key=='isOnline' && value== true )
   			  {
   			  	counter++;
   			  }
   		});
             $('#online_counts').text('('+counter+')')
           });
   	});
   	</script>
</body>
</html>