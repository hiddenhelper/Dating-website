<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</aside>
  <?php foreach ($data as $row) { ?>
<aside class="cont_right" id="mainCont">
    <div class="maincont" style="display: block;" id="profile_0">
        <div class="scrollBlock">
        <section class="slider_block">
                        <div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel" data-interval="false">
                            <div class="carousel-inner" id="photo_add_org">
                                <?php 
                                    if($row->image1 =="")
                                    {
                                        if(strtolower($row->gender) =='male')
                                        { ?>
                                            <div class="item active" data-id="0"><span class="slide_img"><img src="<?php echo base_url()?>images/gallery/admin.jpg" alt="photo"></span></div>
                                    <?php
                                        }else{ ?>
                                            <div class="item active" data-id="0"><span class="slide_img"><img src="<?php echo base_url()?>images/gallery/female.jpg" alt="photo"></span></div>
                                        <?php } 
                                    }else{ ?>
                                    <div class="item active" data-id="0"><span class="slide_img"><img src="<?php echo base_url()?>images/gallery/<?php echo $row->image1;?>" alt="photo"></span></div>
                                    <div class="item " data-id="1"><span class="slide_img" id="next_img_1"><img style=""src="<?php echo base_url()?>images/gallery/<?php echo $row->image2;?>" alt="photo"></span>
                                    </div>

                                    <div class="item " data-id="2"><span class="slide_img" id="next_img_2"><img src="<?php echo base_url()?>images/gallery/<?php echo $row->image3;?>" alt="photo"></span></div>

                                    <div class="item " data-id="3"><span class="slide_img" id="next_img_3"><img src="<?php echo base_url()?>images/gallery/<?php echo $row->image4;?>" alt="photo"></span></div>

                                    <div class="item " data-id="3"><span class="slide_img" id="next_img_3"><img src="<?php echo base_url()?>images/gallery/<?php echo $row->image5;?>" alt="photo"></span></div>

                                    <div class="item " data-id="3"><span class="slide_img" id="next_img_3"><img src="<?php echo base_url()?>images/gallery/<?php echo $row->image6;?>" alt="photo"></span></div>

                                      <?php  } ?>
                                

                            </div>
                            <div class="carouselcontrols">
                                <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"><span class="slide_leftarrow"></span>
                                  </a>
                                <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"><span class="slide_rightarrow"></span>
                                </a>
                            </div>

                        </div>
                  
                    </section>
            <div class="profileTop profileMatch">
                <div class="titleBlock">
                        <div class="name_Block" style="font-size:0;">
                        <span class="profileName">
                          <strong><?php echo $row->user_name;?></strong>
                            <small>, <?php echo $row->age;?>, Bhopal</small>
                             </span>
                        <div class="mediaBlock">
                            <span  class=""></span></div>
                        </div>
                        <div class="custom-class">
                            <h5> <a href="<?= !$this->session->userdata('logged_in') ? base_url('welcome/Login') : base_url('welcome/chats/'.$row->user_id) ; ?>"> Private Messaeg </a> </h5>
                        </div>
                 </div>


            <div class="block1"><strong class="title_cont" style="font-weight: bold;">Verification</strong>
                <div class="verifyBlock">
                    <div class="verify verify2"><div class="mediaBlock">
                            <span  class=""></span></div>
                        <div class="varCont"><span>Mobile</span><strong><small>Verified</small><em class="tickIcon"></em></strong></div>
                    </div>
                </div>
            </div>
            <div class="block1">
            <ul class="list">

               <li><span class="txt1">About my self</span><small class="txt2"><strong><textarea rows="4" cols="50" maxlength="2000" readonly><?php echo $row->about_self;?></textarea></strong></small>
               </li>
           </ul>
           </div>

            <div class="interestsBlock interests_home" id="common_interest_block_2106040389635570">
                <strong class="title_cont" style=" color: #2a3054">Interests</strong>
                <ul class="inter_list" id="interest_more_2106040389635570">
                    <strong><textarea rows="4" cols="43" maxlength="2000" readonly><?php echo $row->interest_field_name;?></textarea></strong>
                <!--     <li class=""><span>Photography</span></li>
                    <li class=""><span>Games</span></li>
                    <li class=""><span>Travelling</span></li> -->
                </ul>
            </div>
            <div class="block1">
                <ul class="list">
                    <li>
                    <span class="txt1">Education:</span><small class="txt2"><strong><textarea rows="2" cols="43" maxlength="2000" readonly><?php echo $row->education;?></textarea></strong></small></li>
                    <li>
                    <span class="txt1">Profession:</span><small class="txt2">
                    <strong><textarea rows="2" cols="43" maxlength="2000" readonly><?php echo $row->profession;?></textarea></strong></small>
                    </li>
                    <li><span class="txt1">Drinking Habit</span><small class="txt2"><strong><textarea rows="2" cols="43" maxlength="2000" readonly><?php echo $row->drinking_habit;?></textarea></strong></small></li>
                    <li><span class="txt1">Smoking Habit</span><small class="txt2"><strong><textarea rows="2" cols="43" maxlength="2000" readonly><?php echo $row->smoking;?></textarea></strong></small></li>
                    <li><span class="txt1">Eating Habit</span><small class="txt2"><strong><textarea rows="2" cols="43" maxlength="2000" readonly><?php echo $row->eating_habit;?></textarea></strong></small></li>

                   
                      <li><span class="txt1"></span><small class="txt2"><strong></strong></small></li>
                      <li><span class="txt1"></span><small class="txt2"><strong></strong></small></li>
                </ul>
     
         
          <div class="btmblock" style="position: fixed;
    width: 100%;
    bottom: 0;
    left: 0;
    z-index: 9">
    <section class="container" style="width: 960px;
    margin: 0 auto; ">
        <div class="icons_block newico_block" style="    clear: both;
    padding: 13px 0;
    width: 708px;
    clear: both;
    margin: 10px 182px 0 0;
    float: right;
    text-align: center;
    border-radius: 0 0 6px 6px;
    font-size: 0;
    border-top: 1px solid #edeef3;
    background: #edeef3;
    font-size: 0;">
    <a href="<?= !$this->session->userdata('logged_in') ? base_url('welcome/Login') : "javascript:void(0)"; ?>">
    <span class="dislike_ico" id="dislike_0" onclick="dislike_fun(this.id)"><img style="height: 46px; width: 52px; margin-top: 43%;" src="<?php echo base_url();?>images/icon/like.png"></strong>  <p>Video Chat</p></span>
          </a>
              <a href="<?= !$this->session->userdata('logged_in') ? base_url('welcome/Login') : "javascript:void(0)"; ?>">
              <span class="dislike_ico" id="dislike_0" onclick="dislike_fun(this.id)"><img style="height: 46px; width: 52px;margin-top: 43%;"src="<?php echo base_url();?>images/icon/superlike.png"></strong><p>Like</p></span>
             </a>
            <a href="<?= !$this->session->userdata('logged_in') ? base_url('welcome/Login') : "javascript:void(0)"; ?>">
                <span class="dislike_ico" id="dislike_0" onclick="dislike_fun(this.id)"><img style="height: 46px; width: 52px;margin-top: 43%;" src="<?php echo base_url();?>images/icon/unlike.png"></strong><p>Video Clips</p></span>
        </a>
        </div>
    </section>
    </div>
</div>
        
            </div>

        </div>
    </div>
    
  
    
</aside>
<?php }?>



</body>

</html>


 <style type="text/css">

    #wrapper {
       background-color:#edeef3;
    }
 	.abcd{
 		 position: static;
 	}

    textarea{
        font-size: 17px;
        border-color: #bac2ef;
    }

    strong{
        font-size: 22px;
    }

 </style>

<style type="text/css">
.custom-class {
    height: 40px;
    width: 35%;
    background-color: #2dc234;
    float: right;
    text-align: center;
    padding: -23px;
    margin-top: -22px;
    padding-bottom: 11px;
    text-align: center;
    margin-right: 20%;
    border-radius: 5px;
}
	

.cont_right{background:#fdffff;float:left;height:100%;margin:45px 0 0 250px;width:708px;border-radius:8px 8px 0 0;position:relative;box-shadow:1px 3px 3px #c4c7d1;padding:0;}
.empty_screen{float:left;margin:0 0 0 250px;width:708px;}
.empty_likesyou{margin-top:-10px;}
.empty_inbox{margin-top:25px;margin-left:0;position:absolute;z-index:99;}
.empty_inbox .nomatches{box-shadow:none;}
.empty_visitors{margin-top:-10px;z-index:999;position:relative;}
.empty_skip{margin-top:-10px;}
.slider_block{background:#2d3238;margin:10px auto 0;width:98%;}
.btmblock{position:absolute;bottom:0;width:100%;}
.interestsBlock{clear:both;width:100%;padding:15px 20px 0 0;box-sizing:border-box;}
.interests_home{padding:22px 20px 0 20px;}
.scrollpanel{width:100%;}
.jspContainer{overflow:hidden;position:relative;}
.jspPane{position:absolute;width:100% !important;}
.jspVerticalBar{position:absolute;top:0;right:0;width:3px;height:100%;background:#d2d8e6;border-radius:4px;}
.jspHorizontalBar{position:absolute;bottom:0;left:0;height:0px;background:#fff;display:none;}
.jspVerticalBar *,.jspHorizontalBar *{margin:0;padding:0;}
.jspCap{display:none;}
.jspHorizontalBar .jspCap{float:left;}
.jspTrack{background:#d2d8e6;position:relative;}
.jspDrag{background:#5394e4;position:relative;top:0;left:0;cursor:pointer;}
.jspHorizontalBar .jspTrack,.jspHorizontalBar .jspDrag{float:left;height:100%;}
.jspArrow{background:#50506d;text-indent:-20000px;display:block;cursor:pointer;}
.jspArrow.jspDisabled{cursor:default;background:#80808d;}
.jspVerticalBar .jspArrow{height:16px;}
.jspHorizontalBar .jspArrow{width:16px;float:left;height:100%;}
.jspVerticalBar .jspArrow:focus{outline:none;}
.jspCorner{background:#eeeef4;float:left;height:100%;}
.chatRight{padding-right:5px;}
.carousel{position:relative;}
.carousel-inner{position:relative;width:100%;overflow:hidden;}
.carousel-inner>.item{position:relative;display:none;-webkit-transition:.6s ease-in-out left;-o-transition:.6s ease-in-out left;transition:.6s ease-in-out left;}
.carousel-inner>.active,.carousel-inner>.next,.carousel-inner>.prev{display:block;}
.carousel-inner>.active{left:0;}
.carousel-inner>.next,.carousel-inner>.prev{position:absolute;top:0;width:100%;}
.carousel-inner>.next{left:100%;}
.carousel-inner>.prev{left:-100%;}
.carousel-inner>.next.left,.carousel-inner>.prev.right{left:0;}
.carousel-inner>.active.left{left:-100%;}
.carousel-inner>.active.right{left:100%;}
.carousel-control{position:absolute;top:0;bottom:0;left:0;width:15%;font-size:20px;color:#fff;opacity:.5;}
.carousel-indicators{position:absolute;bottom:-2px;left:0;z-index:9999;width:100%;text-align:center;list-style:none;font-size:0;}
.carousel-indicators li{display:inline-block;width:30px;height:46px;margin:0 6px;text-indent:-999px;cursor:pointer;border-bottom:2px solid rgba(0,0,0,0);}
.carousel-indicators .active{border-bottom:3px solid #5394e4;}
.slide_img{position:relative;width:100%;height:240px;float:left;display:block;cursor:pointer;}
.carousel-caption{position:absolute;right:15%;bottom:20px;left:15%;z-index:10;padding-top:20px;padding-bottom:20px;color:#fff;text-align:center;text-shadow:0 1px 2px rgba(0, 0, 0, .6);}
.carousel-caption .btn{text-shadow:none;}
.carousel-inner{overflow:hidden;position:relative;width:100%;}
.carousel{width:340px;height:240px;margin:0 0 0 180px;}
.carousel-indicators li .thumbnail_img{border:2px solid #ffffff;border-radius:50%;cursor:pointer;height:30px;overflow:hidden;position:relative;display:block;width:30px;background:#eee;background-size:cover !important;background-position:50%,25% !important;text-indent:-999px;}
.carousel-indicators li.active .thumbnail_img{border:2px solid #ffffff;border-radius:50%;display:block;margin:0;position:relative;text-indent:-999px;}
.carousel-inner > .item{position:relative;}
.carousel-indicators li img{max-width:100%;display:block;}
.carousel-inner > .item img{max-width:85%;max-height:100%;left:0;top:0;right:0;bottom:0;margin:auto;position:absolute;}
.content{float:left;width:730px;margin:55px 0 0 237px;position:relative;}
.profileList{clear:both;width:100%;}
.profileList li{width:338px;padding:20px 15px 0 15px;}
.contentMain{margin-left:237px;}
.profileBlock, .chatProfiles{background:#fdffff;width:100%;box-sizing:border-box;border-radius:6px;-webkit-border-radius:6px;position:relative;float:left;overflow:hidden;clear:both;box-shadow:0 0 6px #beccec;}
.scrollable .profileBlock{box-shadow:4px 4px 4px -3px #bebfc3;border:1px solid #e6e7eb;border:none;}
.profileDemo{position:relative;width:100%;float:left;}
.circlehover{border-radius:6px;-webkit-border-radius:6px;overflow:hidden;position:absolute;width:100%;height:100%;background:rgba(0,0,0,0);top:0;left:0;display:none;}
.circlehover.hover{display:block;}
.profileMain{padding:9px 9px 0 9px;width:100%;box-sizing:border-box;clear:both;cursor:pointer;}
.profileTop{clear:both;width:100%;height:80px;display:table;}
.profileTop.profileMatch{height:auto;}
.prf_pic{float:none;display:table-cell;vertical-align:middle;}
.profileMatch{float:left;margin:12px 0 0 20px;padding:0;}
.titleBlock{float:left;padding:0 18px 0 0;width:100%;box-sizing:border-box;}
.profileName{float:left;overflow:hidden;text-overflow:ellipsis;white-space:nowrap;max-width:79%;line-height:22px;padding:1px 0 0;}
.profileName strong{font-size:18px;color:#2d2d2d;font-family:roboto_m;font-weight:normal;}
.profileName cite, .profileName small{font-size:15px;color:#2d2d2d;font-style:normal;font-family:roboto_m;}
.designation{color:#2d2d2d;line-height:23px;max-height:23px;display:block;overflow:hidden;text-overflow:ellipsis;float:left;width:98%;white-space:nowrap;font-size:15px;}
.mediaBlock{float:left;margin:-3px 0 0;}
.mediaBlock span{background:url("https://imgassets.quackquack.co/icons-spritev13.png") no-repeat -215px -5px;width:26px;height:26px;float:right;margin:4px 0 0 7px;}
.mediaBlock span.fbIcon{background-position:-245px -5px;}
.mediaBlock span.mobileIcon{background-position:-215px -5px;}
.profilePic{clear:both;float:left;width:100%;margin:9px 0 0;height:254px;overflow:hidden;background:#2d3238;position:relative;}
.profilePic img{margin:auto;position:absolute;left:0;top:0;right:0;margin:auto;bottom:0;}
.profileBlock h3{font-size:20px;color:#333;padding:8px 0 0;font-family:roboto_r;clear:both;line-height:22px;}
.profileBlock h3 span{color:#5394e4;font-size:13px;text-transform:uppercase;padding:0 0 0 10px;}
.profileBlock p{font-size:15px;color:#333;line-height:22px;padding:8px 0 0;text-align:left;}
.profileBlock p.interestCont{padding-top:0;}
.profileBlock p span{border:1px solid #e4e6ec;color:#757575;font-size:15px;float:left;line-height:27px;padding:0 10px;margin:8px 10px 0 0;height:27px;border-radius:15px;color:#717171;}
.profileBlock p.interestCont span{float:none;display:inline-block;vertical-align:middle;}
.profileBlock p span.common{border:1px solid #333;color:#333;}
.profileBlock p b{color:#5394e4;}
.sent_block{background:#f6f9f8;color:#717387;font-size:0;text-align:center;line-height:67px;display:block;clear:both;margin:10px 0 0;border-radius:0 0 6px 6px;position:absolute;left:0;width:100%;bottom:0;}
.sent_block .smiley{background:url("https://imgassets.quackquack.co/icons-spritev13.png") no-repeat -116px -187px;width:25px;height:25px;display:inline-block;vertical-align:middle;}
.sent_block small{display:inline-block;font-size:15px;vertical-align:middle;padding:0 0 0 7px;}
.btmblock{position:fixed;width:100%;bottom:0;left:0;z-index:9;}


.icons_block{width:707px;text-align:center;border-radius:0 0 6px 6px;font-size:0;font-size:0;margin-top: -86px;
    margin-left: 171px;}


.icons_block span{width:198px;display:inline-block;height:25px;position:relative;cursor:pointer;text-align:center;background:#878d93;border-radius:40px;padding:20px 0;margin:-31px 79px;vertical-align:middle;}
.icons_block span.msg_ico{background:#30b21f;}
.icons_block span.like_ico{background:#5595e4;}
.icons_block span:hover{background:#5e6062;}
.icons_block span.msg_ico:hover{background:#339113;}
.icons_block span.like_ico:hover{background:#4777d8;}
.icons_block span small{background:url("") no-repeat -277px -49px;display:inline-block;width:20px;height:20px;vertical-align:middle;}
.icons_block span strong{padding:0 10px;display:inline-block;font-size:15px;color:#fff;vertical-align:middle;line-height:25px;}
.icons_block span.msg_ico small{background-position:-215px -39px;width:29px;height:36px;margin-top:-8px;}
.icons_block span.msg_ico strong{line-height:30px;height:36px;margin-top:-2px;}
.icons_block span.like_ico small{background-position:-248px -49px;width:27px;height:20px;}
@-webkit-keyframes bounceIn{from, 20%, 40%, 60%, 80%, to{-webkit-animation-timing-function:cubic-bezier(0.215, 0.610, 0.355, 1.000);animation-timing-function:cubic-bezier(0.215, 0.610, 0.355, 1.000);}
 0%{opacity:0;-webkit-transform:scale3d(.3, .3, .3);transform:scale3d(.3, .3, .3);}
 20%{-webkit-transform:scale3d(1.1, 1.1, 1.1);transform:scale3d(1.1, 1.1, 1.1);}
 40%{-webkit-transform:scale3d(.9, .9, .9);transform:scale3d(.9, .9, .9);}
 80%{-webkit-transform:scale3d(.97, .97, .97);transform:scale3d(.97, .97, .97);}
 to{opacity:1;-webkit-transform:scale3d(.7, .7, .7);transform:scale3d(.7, .7, .7);}
}
@keyframes bounceIn{from, 20%, 40%, 60%, 80%, to{-webkit-animation-timing-function:cubic-bezier(0.215, 0.610, 0.355, 1.000);animation-timing-function:cubic-bezier(0.215, 0.610, 0.355, 1.000);}
 0%{opacity:0;-webkit-transform:scale3d(.3, .3, .3);transform:scale3d(.3, .3, .3);}
 20%{-webkit-transform:scale3d(1.1, 1.1, 1.1);transform:scale3d(1.1, 1.1, 1.1);}
 40%{-webkit-transform:scale3d(.9, .9, .9);transform:scale3d(.9, .9, .9);}
 80%{-webkit-transform:scale3d(.97, .97, .97);transform:scale3d(.97, .97, .97);}
 to{opacity:1;-webkit-transform:scale3d(1, 1, 1);transform:scale3d(1, 1, 1);}
}
.zoom{-webkit-transform:scale3d(1.4, 1.4, 1.4);transform:scale3d(1.4, 1.4, 1.4);-moz-transition:all 0.45s cubic-bezier(0.5, 0, 0, 1.5), background 0.35s cubic-bezier(0.5, 0, 0, 3);-o-transition:all 0.45s cubic-bezier(0.5, 0, 0, 1.5), background 0.35s cubic-bezier(0.5, 0, 0, 3);-webkit-transition:all 0.55s cubic-bezier(0.5, 0, 0, 1.5), background 0.35s cubic-bezier(0.5, 0, 0, 3);transition:all 0.55s cubic-bezier(0.5, 0, 0, 1.5), background 0.35s cubic-bezier(0.5, 0, 0, 3);}
.bounceIn{-webkit-animation-name:bounceIn;animation-name:bounceIn;}
.iconsBlock span.dislikeIcon small{width:28px;height:28px;}
.iconsBlock span.superlikeIcon small{height:31px;width:40px;}
.iconsBlock span.likeIcon small{width:32px;height:28px;}
.iconsBlock span.likeIcon:before{border-right:none;}
.iconsBlock span:hover small{-webkit-transform:scale3d(1.4, 1.4, 1.4);transform:scale3d(1.4, 1.4, 1.4);-moz-transition:all 0.45s cubic-bezier(0.5, 0, 0, 1.5), background 0.35s cubic-bezier(0.5, 0, 0, 3);-o-transition:all 0.45s cubic-bezier(0.5, 0, 0, 1.5), background 0.35s cubic-bezier(0.5, 0, 0, 3);-webkit-transition:all 0.55s cubic-bezier(0.5, 0, 0, 1.5), background 0.35s cubic-bezier(0.5, 0, 0, 3);transition:all 0.55s cubic-bezier(0.5, 0, 0, 1.5), background 0.35s cubic-bezier(0.5, 0, 0, 3);}
.scrollable{position:relative;width:747px;}
.scrollable.showScroll::after{position:absolute;content:'';top:19px;right:4px;height:90%;width:3px;background:#d2d8e6;}
.scrollable .content-wrapper{width:100%;height:85%;padding-right:50%;overflow-y:scroll;}
.scroller{z-index:5;cursor:pointer;position:absolute;width:3px;border-radius:5px;background:#5394e4;top:0px;right:3px;-webkit-transition:top .08s;-moz-transition:top .08s;-ms-transition:top .08s;-o-transition:top .08s;transition:top .08s;margin:19px 0 0;}
.profileLeft{position:absolute;left:0;top:-20px;width:335px;}
.profileDesc{width:730px;background:#fdffff;width:100%;box-sizing:border-box;padding:9px;border-radius:6px;position:relative;float:left;box-shadow:4px 4px 4px -3px #bebfc3;height:429px;margin:40px 0 0;}
.profileRight{float:right;width:352px;margin:0 -3px 0 0;}
.profileCont{background:none;box-shadow:none;padding-left:0;overflow:inherit;}
.scrollable2{width:330px;padding:0 24px 0 0;height:400px;}
.slider{margin:0 auto;width:340px;height:350px;clear:both;overflow:hidden;}
.dropDownBlock{position:absolute;left:0;width:262px;top:42px;min-height:200px;background:#fdffff;border-radius:8px;z-index:9999999;border:1px solid #d6dcea;box-shadow:0 0 6px #d2d8e6;display:none;}
.upgradeBlock{border:1px solid #d6dcea;width:100%;height:118px;border-radius:8px 8px 0 0;padding:0 12px;box-sizing:border-box;color:#fff;}
.upgradeBlock a{text-transform:uppercase;font-size:21px;font-weight:600;display:block;background:#ff6000;height:50px;border-radius:25px;margin:25px 0 0;color:#fff;line-height:50px;text-align:center;text-transform:uppercase;}
.upgradeBlock strong a{color:#fff;}
.upgradeBlock a:hover{background:#c74b00;}
.upgradeBlock span{display:block;font-size:13px;line-height:18px;clear:both;font-family:roboto_r;color:#2d2d2d;text-align:center;padding:5px 0 0;}
.block1{clear:both;padding:26px 20px 0;}
.list, .interestList{padding:5px 0 0;float:left;width:100%;}
.interestList{padding:0 0 4px;}
.interestList span{border:1px solid #e4e6ec;color:#757575;font-size:15px;float:left;line-height:27px;padding:0 10px;margin:8px 10px 0 0;height:27px;border-radius:15px;color:#717171;}
.edit_int,.edit_edu,.edit_prof{margin:25px 0 0;max-height:230px;padding-top:0;float:left;overflow:auto;position:relative;width:100%;}
.edit_int li,.edit_edu li,.edit_prof li{background:#fff;border:1px solid #e5e7ed;border-radius:20px;color:#2d2d2d;cursor:pointer;float:left;height:35px;line-height:35px;margin:0 15px 15px 0;padding:0 15px;}
.edit_int li.active,.edit_edu li.active,.edit_prof li.active{background:#5394e4;color:#fff;border-color:#5394e4;}
.list li{clear:both;color:#717387;padding:0 0 26px;overflow:hidden;}
.list li:last-child{padding-bottom:0;}
.list li span.txt1{display:block;font-size:17px;width:100%;box-sizing:border-box;color:#2a3054;;padding:0 0 0 0;line-height:20px; font-weight: bold;}
.list li small.txt2{float:left;font-size:16px;width:85%;color:#2d2d2d;padding:3px 0 0;line-height:20px;}
.list li span strong, .list li small strong{color:#2d2d2d;font-family:roboto_m;font-weight:normal;font-size:17px;}
.graytxt{color:#717387;}
.bluetxt{color:#5394e4;}
.interestList span.bluetxt{color:#333;border-color:#333;}
.profileLeft .profileBlock{box-shadow:none;border:1px solid #dee3f0;min-height:469px;}
.iconsBlock2{padding:10px 0 10px;position:absolute;bottom:0;}
.dropList{text-align:center;}
.dropList li{display:inline-block;margin:0 8px;width:42px;padding:15px 0 0;cursor:pointer;border-top:2px solid #fdffff;-webkit-transition-duration:0.3s;transition-duration:0.3s;}
.dropList li:hover{border-top:2px solid #5394e4;}
.dropList li span{background:url("https://imgassets.quackquack.co/icons-spritev13.png") no-repeat -91px -5px;display:block;margin:0 auto;width:25px;height:25px;}
.dropList li .profileIcon{background-position:-5px -184px;}
.dropList li .settingsIcon{background-position:-30px -184px;}
.dropList li .helpIcon{background-position:-58px -184px;}
.dropList li .logoutIocn{background-position:-86px -184px;}
.dropList li:hover .profileIcon{background-position:-5px -215px;}
.dropList li:hover .settingsIcon{background-position:-30px -215px;}
.dropList li:hover .helpIcon{background-position:-58px -215px;}
.dropList li:hover .logoutIocn{background-position:-86px -215px;}
.dropList li strong{font-family:roboto_r;font-size:11px;color:#767e98;display:block;padding:10px 0 0;}
.dropList li:hover strong{color:#5394e4;}
.verifyBlock{clear:both;}
.verify{float:left;width:190px;padding:6px 0 0;}
.mob_icon{background:url("https://imgassets.quackquack.co/icons-spritev13.png") no-repeat -5px -132px;width:45px;height:45px;display:inline-block;vertical-align:middle;}
.mob_icon.active{background-position:-5px -82px;}
.fb_icon{background:url("https://imgassets.quackquack.co/icons-spritev13.png") no-repeat -55px -132px;display:inline-block;vertical-align:middle;width:45px;height:45px;}
.fb_icon.active{background-position:-55px -82px;}
.varCont{display:inline-block;vertical-align:middle;width:122px;padding:0 0 0 10px;}
.verify_mob{float:left;padding:10px 0 0;width:190px;padding:6px 15px 6px 15px;}
.mobCont{float:left;width:122px;padding:0 0 0 10px;display:inline-block;vertical-align:middle;float:none;}
.varCont span{font-size:15px;color:#757575;}
.mobCont span{font-size:15px;color:#2d2d2d;}
.varCont strong{color:#2d2d2d;font-size:15px;display:block;line-height:20px;font-family:roboto_m;font-weight:normal;}
.mobCont strong{color:#5394e4;font-size:15px;display:block;line-height:20px;}
.varCont strong small{float:left;}
.tickIcon{background:url("https://imgassets.quackquack.co/icons-spritev13.png") no-repeat -293px -5px;float:left;width:18px;height:18px;margin:2px 0 0 6px;}
.verify2{width:175px;}
.verify2 .varCont{width:114px;}
.closeIcon{position:absolute;top:-23px;right:0;width:18px;height:18px;cursor:pointer;}
.closeIcon:hover{opacity:0.6;}
.scrollpanel{float:left;}
.scrollpanel .sp-scrollbar{width:3px;background-color:#d2d8e6;cursor:pointer;display:none;border-radius:6px;}
.scrollpanel:hover .sp-scrollbar{width:6px;display:block;}
.scrollpanel .sp-scrollbar .sp-thumb{background-color:#5394e4;transition:height 0.2s ease-in-out;border-radius:6px;}
.scrollpanel .sp-scrollbar.active .sp-thumb{background-color:#5394e4;}
.content .sp-scrollbar{margin:20px 0 0;}
.details2{padding:10px 5px 0 0;}
.new_ribbon{background:rgba(255,56,70,0.7);position:absolute;left:0;bottom:0;min-width:32px;height:32px;padding:0 9px;color:#fff;float:right;bottom:0;line-height:32px;font-size:13px;text-align:center;}
.new_ribbon:after{content:'';line-height:0;font-size:0;width:0;height:0;border-top:0 solid transparent;border-bottom:32px solid rgba(255,56,70,0.7);border-right:30px solid transparent;position:absolute;top:0;right:-30px;}
.green_ribbon{background:rgba(2,113,254,0.7);}
.online_ribbon{background-position:left -109px;}
.green_ribbon:after{border-bottom:32px solid rgba(2,113,254,0.7);border-bottom:32px solid rgba(2,113,254,0.7);}
.last_time{position:absolute;bottom:-20px;color:#8f929a;right:0;}
.inboxContent .iconsBlock2 span{width:165px;}
.visitors li .profileBlock{margin:0 0 20px;overflow:inherit;float:left;}
.inboxContent{position:relative;margin-top:72px;margin-left:252px;width:706px;}
.msgContent{margin-top:72px;margin-left:252px;width:706px;}
.requests{clear:both;width:100%;position:relative;}
.norequests{clear:both;width:100%;text-align:center;}
.norequests p{width:320px;display:block;padding:60px 0 0;margin:0 auto;font-size:20px;color:#636367;line-height:26px;}
.norequests p.noreq{padding:20px 0 0;}
.norequests p.noreq cite{color:#000;font-style:normal;}
.norequests p.noreq strong{width:35px;padding:0 6px;display:inline-block;vertical-align:middle;}
.reqImg{display:block;width:100%;padding:40px 0 0;max-height:140px;}
.reqImg img{margin:0 auto;}
.playBtn{display:block;width:250px;height:50px;margin:0 auto;background:#fe3845;color:#fff;font-size:20px;line-height:48px;margin:35px auto 0 auto;clear:both;border-radius:6px;cursor:pointer;text-transform:uppercase;}
.playBtn:hover{background:#f92323;}
.requestsBlock{height:390px;background:#fdffff;width:706px;box-sizing:border-box;padding:9px;border-radius:6px;position:relative;float:right;box-shadow:4px 4px 4px -3px #bebfc3;}
.nomsgs p{padding-top:40px;}
.nomsgs .playBtn{margin-top:20px;}
.chatLeft{float:left;width:269px;position:relative;border-right:1px solid #e5e9f2;}
.chatProfiles{clear:both;width:100%;height:489px;box-shadow:none;border-radius:0 0 0 6px;}
.chatProfiles li{float:left;width:270px;cursor:pointer;box-sizing:border-box;border-bottom:1px solid #f2f3f6;}
.chatProfiles li.loadList{border:none;}
.chatProfiles li.loadList:hover{background:#fff;}
.msgList{padding:15px 10px 15px 10px;float:left;width:100%;box-sizing:border-box;}
.chatImg, .msgPic{float:left;width:40px;height:40px;overflow:hidden;border-radius:50%;background:#eee;position:relative;background-size:cover !important;background-position:50% 25% !important;}
.chatImg img{position:absolute;left:0;top:0;right:0;bottom:0;margin:auto;}
.chatCont{float:left;width:190px;padding:0px 0 0 14px;}
.chatContTop{clear:both;color:#1d1d26;font-size:17px;}
.chatName{float:left;max-width:90px;white-space:nowrap;overflow:hidden;font-family:roboto_m;text-overflow:ellipsis;}
.chatName.unread{font-weight:700;}
.age{float:left;margin:0 0 0 3px;font-family:roboto_r;}
.age.unread{font-weight:700;}
.unread_icon{float:right;width:10px;height:10px;background:#5695e4;border-radius:10px;margin:6px 0 0 3px;}
.unread_icon2{float:left;margin:4px 0 0 6px;}
.time_last{float:right;color:#abb2c3;font-size:12px;font-style:normal;font-family:roboto_r;}
.msg{width:90%;float:left;white-space:nowrap;text-overflow:ellipsis;overflow:hidden;font-size:13px;line-height:25px;max-height:22px;}
.msg.unread{font-weight:700;}
.chatProfiles li.activeChat .msgList, .chatProfiles li:hover ,.chatProfiles li.activeChat{background:#eaedf5;}
.readmsg, .readmsg .chatContTop, .readmsg .age{color:#626367;font-family:roboto_r;}
.line-clamp{height:5.6em;line-height:1.4em;overflow:hidden;position:relative;line-height:18px;max-height:38px;height:auto;white-space:inherit;}
.line-clamp:after{background:linear-gradient(to right, rgba(255, 255, 255, 0), #FFFFFF 50%) repeat scroll 0 0 rgba(0, 0, 0, 0);bottom:0;content:"...";font-weight:bold;padding:0 20px 1px 45px;position:absolute;top:20px;right:0;}
.chatProfiles li.activeChat .msgList .line-clamp:after , .chatProfiles li.activeChat .line-clamp:after{background:none;}
.chatProfiles li:hover .line-clamp:after{background:linear-gradient(to right, rgba(234, 237, 245, 0), #eaedf5 50%) repeat scroll 0 0 rgba(0, 0, 0, 0);}
.scrollable3{height:475px;width:304px;}
.chatLeft .sp-scrollbar{right:4px !important;}
@-webkit-keyframes ball-scale{0%{-webkit-transform:scale(0);transform:scale(0);}
 100%{-webkit-transform:scale(1);transform:scale(1);opacity:0;}
}
@keyframes ball-scale{0%{-webkit-transform:scale(0);transform:scale(0);}
 100%{-webkit-transform:scale(1);transform:scale(1);opacity:0;}
}
.ball-scale > div{background-color:#639ee6;border-radius:100%;margin:2px;-webkit-animation-fill-mode:both;animation-fill-mode:both;display:inline-block;height:60px;width:60px;-webkit-animation:ball-scale 1s 0s ease-in-out infinite;animation:ball-scale 1s 0s ease-in-out infinite;}
.circle4{position:absolute;left:0;top:0;height:645px;width:623px;z-index:99;margin:auto;-webkit-transform:scale(0);transform:scale(0);}
.circle4.ball-scale2{background:rgba(241,113,123,0.9);border-radius:100%;display:inline-block;height:645px;width:623px;margin:-48px 0 0 -144px;-webkit-transform:scale(1);transform:scale(1);transition:all 400ms ease-in-out;-webkit-transition:all 400ms ease-in-out;-o-transition:all 400ms ease-in-out;-moz-transition:all 400ms ease-in-out;-ms-transition:all 400ms ease-in-out;}
.circle4_big{position:absolute;left:0;top:0;height:1290px;width:1246px;z-index:99;margin:auto;-webkit-transform:scale(0);transform:scale(0);}
.circle4_big.ball-scale3{background:rgba(241,113,123,0.9);border-radius:100%;display:inline-block;height:1290px;width:1246px;margin:-350px 0 0 -350px;-webkit-transform:scale(1);transform:scale(1);transition:all 400ms ease-in-out;-webkit-transition:all 400ms ease-in-out;-o-transition:all 400ms ease-in-out;-moz-transition:all 400ms ease-in-out;-ms-transition:all 400ms ease-in-out;}
.msgCont{float:right;width:438px;position:relative;}
.loader{display:block;width:60px;height:60px;margin:auto;position:fixed;z-index:999999999;top:0;margin:auto;left:0;right:0;display:block;bottom:0;}
.msgsloader{position:relative;bottom:0;margin:15px 0 0 105px;left:0;width:35px;height:35px;}
.newMsgloader{left:30%;width:100%;}
.ball-scale.msgsloader > div{width:35px;height:35px;}
.contloader{position:relative;bottom:0;margin:9px 0 0 195px;left:0;width:35px;height:35px;display:none;}
.ball-scale.contloader > div{width:35px;height:35px;}
.inbox_show{overflow-y:inherit;overflow-x:hidden;}
.ball-scale > div.loadermain{float:left;margin:35px 0 0 126px;}
.upgradeBtn{background:#09dade;float:right;min-width:100px;text-align:center;height:34px;line-height:34px;margin:6px 20px 0 0;color:#fff;font-weight:600;padding:0 10px;border-radius:5px;}
.upgradeBtn:hover{background:#09dade;}
.msgtop{clear:both;overflow:hidden;padding:10px 11px 11px;width:100%;color:#1d283d;background:#f8fafe;box-sizing:border-box;line-height:35px;border-radius:10px 10px 0 0;border-bottom:1px solid #e5e9f2;}
.msgPic{width:40px;height:40px;}
.msgName{font-size:18px;padding:0 0 0 8px;vertical-align:middle;}
.msgage{font-size:13px;font-family:roboto_r;vertical-align:middle;position:relative;font-weight:normal;top:0px;}
.msgCity{font-size:13px;vertical-align:middle;position:relative;top:0px;}
.age{font-weight:normal;font-family:roboto_r;}
.msgContent .profileDesc{padding-right:0;}
.viewLink{float:right;border:1px solid #dee3f0;width:90px;height:33px;line-height:33px;text-align:center;color:#575f6e;border-radius:5px;font-size:13px;margin:3px 0 0;}
.viewLink:hover{background:#f3f4f9;}
.chatConversation{float:left;width:434px;background:#fff;margin:0;position:fixed;bottom:29px;}
.chatMsg{width:382px;float:left;border:1px solid #d5d7dc;border-radius:4px;padding:10px;height:45px;margin:0 0 10px 10px;box-sizing:border-box;}
.smileyIcon{float:left;background:url("https://imgassets.quackquack.co/icons-spritev13.png") no-repeat -254px -284px;width:25px;height:25px;cursor:pointer;}
.smileyIcon:hover{background-position:-254px -312px;}
.gifIcon{background:url('https://imgassets.quackquack.co/gificons.png') no-repeat -3px -3px;background-size:60px 32px;width:28px;height:28px;display:inline-block;vertical-align:middle;float:left;margin-left:10px;}
.gifIcon:active, .gifIcon:hover{background:url('https://imgassets.quackquack.co/gificons.png') no-repeat -31px -3px;background-size:60px 32px;width:28px;height:28px;display:inline-block;vertical-align:middle;}
.gifimg_wrap{width:32%;padding:2px;display:inline-block;vertical-align:middle;text-align:center;position:relative;border-radius:6px;overflow:hidden;cursor:pointer;}
.gyf_titl{position:absolute;top:2px;left:2px;right:2px;bottom:2px;background:rgba(0,0,0,0.3);border-radius:6px;}
.gifimg_wrap .gyf_titl span{position:absolute;top:50%;left:50%;transform:translate(-50%,-50%);color:#ffffff;font-size:16px;text-transform:uppercase;text-shadow:0px 0px 2px rgba(0,0,0,0.4);}
.gifimg_wrap .gyf_img{background-size:cover !important;width:100%;height:100px;overflow:hidden;border-radius:6px;}
.textField{background:none;float:left;margin:0 0 0 10px;width:295px;height:25px;line-height:25px;color:#000;border:none;font-size:13px;}
.sendBtn{float:left;background:url("https://imgassets.quackquack.co/icons-spritev13.png") no-repeat -222px -345px;width:27px;height:25px;margin:8px 0 0 10px;border:none;outline:none;cursor:pointer;}
.sendBtn:hover{background-position:-252px -345px;}
.loader2{bottom:0;top:inherit;position:fixed;left:56%;}
.user_img{background:#eee;border-radius:50%;float:right;height:40px;margin:0;overflow:hidden;position:absolute;right:10px;width:40px;top:25px;background-size:cover !important;background-position:50% 25% !important;}
.user_img img{bottom:0;height:auto;margin:auto;max-width:100%;position:absolute;right:0;top:0;}
.user_msg{background:#d8e1f9;border-radius:5px;display:inline-block;margin:0 41px 0 0;max-width:270px;min-height:38px;min-width:95px;padding:0 0 2px;position:relative;border:1px solid #bec8e0;padding:10px 14px;box-sizing:border-box;}
.messages_block{clear:both;float:right;padding:25px 0 0 30px;position:relative;}
.messages_block .user_msg{margin-right:57px;}
.user_msg strong img{display:inline-block;float:none;margin:0 2px;vertical-align:top;}
.chattingText{margin:0;margin-bottom:20px;}
.msgArea{padding:0 0 20px;position:relative;}
.sender_block{float:left;padding:25px 0 0 57px;}
.sender_block .user_msg{background:#fff;border:1px solid #e5e7ed;}
.sender_block .user_img{left:10px;padding-left:0;right:auto;}
.user_msg strong{color:#585858;display:block;font-family:roboto_m;font-weight:normal;overflow:hidden;color:#2d2d2d;padding:4px 0 1px 0;font-size:15px;line-height:18px;}
.user_msg .msg_time{color:#a3a3a3;float:right;padding:2px 0 3px 10px;text-align:right;font-size:11px;line-height:15px;}
.usermsg_gf{padding-right:11px;overflow:hidden;}
.usermsg_gf strong img{display:inline-block;margin:0;width:260px;}
.emoticonimg{width:auto !important;min-height:auto !important;}
.usermsg_gf strong{margin:0;padding:0;}
.usermsg_gf .msg_time{padding:3px 5px;padding-left:0;}
.nomatches{float:left;width:100%;text-align:center;background:#fdffff;margin:12px 0 0;width:708px;border-radius:8px;position:relative;box-shadow:1px 3px 3px #c4c7d1;padding:60px 0 50px;}
.nomatchImg{display:block;}
.nomatchImg img{margin:0 auto;}
.nomatches p{color:#636367;display:block;font-size:16px;line-height:24px;margin:0 auto;padding:34px 0 0;width:356px;}
.automsgBlock{width:544px;margin:auto;box-sizing:border-box;padding:0px 97px 10px;border-radius:10px;position:relative;}
.automsgBlock h3{text-align:center;font-size:22px;color:#202c44;font-family:roboto_r;}
.fieldBlock{background:#f3f4f9;border:1px solid #b9c6ed;border-radius:4px;width:100%;padding:0 20px;height:50px;margin:26px 0 0;line-height:30px;position:relative;box-sizing:border-box;}
.fieldBlock:hover{border-color:#5796e5;}
.fieldBlock label{float:left;font-size:15px;color:#8f929a;font-family:roboto_r;line-height:50px;width:127px;}
.searchField{background:#f3f4f9;float:left;height:48px;line-height:48px;overflow:hidden;position:relative;width:63px;}
.searchField select{background:none;border:none;color:#2d2d2d;cursor:pointer;float:left;font-size:15px;height:48px;min-width:31px;position:relative;text-indent:0;z-index:99;width:130%;}
.searchField::after{border-bottom:1px solid #999eab;border-right:1px solid #999eab;content:" ";height:6px;position:absolute;right:8px;top:21px;transform:rotate(42deg);width:6px;}
.automsgBlock .searchField::after{right:2px;}
.mypreferDesc .searchField::after{right:4px;}
.searchField2{float:right;}
.differ{float:left;margin:0 0 0 30px;font-style:normal;color:#8f929a;font-size:14px;line-height:50px;font-size:15px;color:#8f929a;}
.cityField{width:179px;}
.interestField{width:190px;cursor:pointer;}
.interestField:after{transform:rotate(315deg);}
.submitBtn{background:#5394e4;width:100%;height:50px;margin:18px 0 0;display:block;line-height:50px;cursor:pointer;cursor:pointer;border-radius:5px;}
.mypreferBlock .submitBtn{margin:26px 0 0;}
.submitBtn:hover{background:#367cd3;}
.submitBtn input{display:block;font-size:22px;line-height:50px;color:#fff;text-align:center;width:100%;border:none;cursor:pointer;background:none;outline:none;text-transform:uppercase;}
.txt_msg{color:#727a8a;text-align:center;display:block;padding:10px 0 0;clear:both;font-size:15px;line-height:18px;}
.morecontent span{display:none;}
.circle, .circle2, .circle3{border-radius:10px;width:0px;height:0px;position:absolute;bottom:0;left:0;background:rgba(126,129,146,0.9);opacity:1;-webkit-transition:all 100ms cubic-bezier(0.000, 0.995, 0.990, 1.000);-moz-transition:all 100ms cubic-bezier(0.000, 0.995, 0.990, 1.000);-ms-transition:all 100ms cubic-bezier(0.000, 0.995, 0.990, 1.000);-o-transition:all 100ms cubic-bezier(0.000, 0.995, 0.990, 1.000);transition:all 100ms cubic-bezier(0.000, 0.995, 0.990, 1.000);z-index:9999;}
.circle_big, .circle2_big, .circle3_big{border-radius:10px;width:0px;height:0px;position:absolute;bottom:35px;left:0;background:rgba(126,129,146,0.9);opacity:1;-webkit-transition:all 300ms cubic-bezier(0.000, 0.995, 0.990, 1.000);-moz-transition:all 300ms cubic-bezier(0.000, 0.995, 0.990, 1.000);-ms-transition:all 300ms cubic-bezier(0.000, 0.995, 0.990, 1.000);-o-transition:all 300ms cubic-bezier(0.000, 0.995, 0.990, 1.000);transition:all 300ms cubic-bezier(0.000, 0.995, 0.990, 1.000);z-index:999999;}
.circle2{background:rgba(48,178,31,0.9);}
.circle3{background:rgba(100,158,230,0.9);}
.circle.expand, .circle2.expand, .circle3.expand{width:708px;height:100%;bottom:0;left:0;-webkit-transition:all 100ms cubic-bezier(0.000, 0.995, 0.990, 1.000);-moz-transition:all 100ms cubic-bezier(0.000, 0.995, 0.990, 1.000);-ms-transition:all 100ms cubic-bezier(0.000, 0.995, 0.990, 1.000);-o-transition:all 100ms cubic-bezier(0.000, 0.995, 0.990, 1.000);transition:all 100ms cubic-bezier(0.000, 0.995, 0.990, 1.000);z-index:999999;}
.circle_big.expand, .circle2_big.expand, .circle3_big.expand{width:1246px;height:1290px;bottom:-100px;left:-288px;-webkit-transition:all 500ms cubic-bezier(0.000, 0.995, 0.990, 1.000);-moz-transition:all 500ms cubic-bezier(0.000, 0.995, 0.990, 1.000);-ms-transition:all 500ms cubic-bezier(0.000, 0.995, 0.990, 1.000);-o-transition:all 500ms cubic-bezier(0.000, 0.995, 0.990, 1.000);transition:all 500ms cubic-bezier(0.000, 0.995, 0.990, 1.000);}
.circle2{left:0;width:0;}
.circle2.expand{left:0;}
.circle3.expand{right:0;left:inherit;}
.circle2_big{left:360px;width:0;}
.circle2_big.expand{left:-300px;}
.circle3_big.expand{right:-288px;left:inherit;}
.dislike{background:url("https://imgassets.quackquack.co/icons-spritev13.png") no-repeat -181px -170px;width:70px;height:70px;position:absolute;left:0;right:0;top:0;bottom:0;opacity:0;margin:auto;}
.icon{background:url("https://imgassets.quackquack.co/icons-spritev13.png") no-repeat -181px -170px;width:0px;height:0px;position:absolute;left:0;right:0;top:0;bottom:0;opacity:0;margin:0 auto;-webkit-transition:all 350ms cubic-bezier(0.000, 0.995, 0.990, 1.000);-moz-transition:all 350ms cubic-bezier(0.000, 0.995, 0.990, 1.000);-ms-transition:all 350ms cubic-bezier(0.000, 0.995, 0.990, 1.000);-o-transition:all 350ms cubic-bezier(0.000, 0.995, 0.990, 1.000);transition:all 350ms cubic-bezier(0.000, 0.995, 0.990, 1.000);z-index:999999;}
.dislike{background-position:-181px -170px;z-index:999999;}
.like{background-position:-254px -159px;width:90px;z-index:999999;}
.suplike{background-position:-224px -162px;z-index:999999;}
.icon.animate{font-size:21px;opacity:1;width:70px;height:70px;-webkit-transition:all 200ms cubic-bezier(0.000, 0.995, 0.990, 1.000);-moz-transition:all 200ms cubic-bezier(0.000, 0.995, 0.990, 1.000);-ms-transition:all 200ms cubic-bezier(0.000, 0.995, 0.990, 1.000);-o-transition:all 200ms cubic-bezier(0.000, 0.995, 0.990, 1.000);transition:all 200ms cubic-bezier(0.000, 0.995, 0.990, 1.000);}
.like.animate{width:90px;}
.suplike.animate{background:url("https://imgassets.quackquack.co/msgIconnew.png") no-repeat left top;background-size:100px 115px;width:100px;height:115px;margin-top:-60px;margin-left:75px;}
.found{color:#757575;font-size:15px;display:block;text-align:center;padding:20px 0;float:none;cursor:pointer;width:450px;margin:26px auto 0 auto;border-top:1px solid #e7e8e8;}
.found:hover{color:#626161;}
.found a{color:#5394e4;font-size:15px;}
.popup{position:fixed;width:100%;height:100%;top:0;left:0;z-index:99999999;}
.transparent{position:absolute;width:100%;height:100%;top:0;left:0;background:rgba(0,0,0,0.8);display:block;}
.lightbox{display:table;width:100%;height:100%;}
.popupcont{display:table-cell;vertical-align:middle;}
.abusiveBlock{background:#f3f4f9;border-radius:10px;width:550px;min-height:337px;box-sizing:border-box;margin:auto;overflow:inherit;position:absolute;left:50%;top:50%;transform:translate(-50%,-50%);padding:40px 0 40px;}
.abusiveBlock h4{font-size:25px;font-family:roboto_l;text-align:center;}
.reportCont{clear:both;padding:70px 0 0;}
.report{float:left;width:275px;position:relative;cursor:pointer;}
.report:after{border-right:1px solid #cbced6;position:absolute;top:10px;right:0;content:' ';height:70px;}
.rep_user{background:url("https://imgassets.quackquack.co/report-icons.png") no-repeat -3px -3px;width:62px;height:82px;display:block;margin:0 auto;}
.report:hover{opacity:0.6;}
.block_user{background-position:-66px -3px;width:67px;height:82px;}
.block:after{content:none;}
.report cite{font-size:15px;color:#2c3449;display:block;text-align:center;font-style:normal;padding:15px 0 0;}
.close_icon,.inter_close, .close_citypop{background:url("https://imgassets.quackquack.co/testing-sprite2.png") no-repeat -3px -3px;background-size:45px 87px;cursor:pointer;height:39px;position:absolute;right:-14px;top:-14px;width:39px;z-index:99;}
.close_icon:hover,.inter_close:hover, .close_citypop:hover{background-position:-3px -45px;}
.listhob{padding:8px 0 0;}
.abusiveBlock p{font-size:15px;line-height:26px;clear:both;padding:48px 25px 0;color:#2d2d2d;text-align:center;}
.thankumsg{min-height:inherit;padding:40px 0;}
.abusiveBlock p.thank_msg{font-size:50px;}
.btns_btm{clear:both;padding:48px 0 0;text-align:center;font-size:0;}
.btn{display:inline-block;background:#5394e4;border:none;width:157px;height:55px;font-size:22px;color:#fff;text-align:center;margin:0 7px;cursor:pointer;padding:0;font-family:'Roboto', sans-serif;border-radius:5px;}
.btn:hover{background:#367cd3;}
.gray_btn{background:#bbc5d1;}
.gray_btn:hover{background:#93a1b1;}
.reportBlock{width:478px;padding:40px 0;}
.reportMain{padding:0 30px;}
.reportMain p{font-size:15px;color:#2d2d2d;line-height:26px;padding:25px 0 0;}
.select_photo{border:1px solid #d9dbe1;background:#fff;width:100%;border-radius:4px;height:49px;line-height:49px;box-sizing:border-box;margin:25px 0 0;}
.select_photo select{height:49px;line-height:49px;padding:0 15px;font-size:14px;}
.select_photo::after{right:16px;top:17px;}
.areaField{border:1px solid #d9dbe1;background:#fff;width:100%;border-radius:4px;height:98px;line-height:24px;resize:none;font-family:'Roboto', sans-serif;margin:25px 0 0;padding:8px 15px;font-size:15px;box-sizing:border-box;}
textarea:focus{border-color:#5394e4;}
.min_char{display:block;float:right;color:#8f929a;font-size:13px;padding:5px 0 0;}
.min_char strong{color:#5394e4;font-family:roboto_r;}
.report_btn{width:100%;margin:26px 0 0;text-transform:uppercase;}
.profileDesc .profileMain{cursor:default;}
.error{display:block;padding:5px 0 0;font-size:14px;color:#f00;clear:both;line-height:18px;}
.match_happen{width:445px;margin:auto;z-index:999999;position:absolute;transform:translate(-50%,-50%);left:50%;top:50%;}
.like_txt{float:left;color:#fff;width:145px;padding:0 10px 0 0;font-size:24px;text-align:right;line-height:26px;-webkit-animation-duration:1s;animation-duration:1s;-webkit-animation-fill-mode:both;animation-fill-mode:both;}
.happenleft{background:#fff;border-radius:6px;min-height:253px;padding:0 0 8px;float:left;width:258px;box-shadow:0 0 30px rgba(60,108,222,0.3);position:relative;-webkit-animation-duration:0.8s;animation-duration:0.8s;-webkit-animation-fill-mode:both;animation-fill-mode:both;}
.match_pic{width:120px;height:120px;overflow:hidden;display:block;position:relative;border-radius:50%;margin:30px auto 0;background:#eee;background-size:cover !important;background-position:50%, 25% !important;border:4px solid #fff;}
.match_pic img{position:absolute;left:0;top:0;right:0;bottom:0;margin:auto;}
.match_name{display:block;text-align:center;padding:10px 0 0;font-size:20px;color:#000;clear:both;}
.match_name span{display:inline-block;max-width:180px;white-space:nowrap;overflow:hidden;text-overflow:ellipsis;vertical-align:top;}
.match_name strong{font-family:roboto_r;font-weight:normal;display:inline-block;vertical-align:top;}
.place{color:#8f929a;display:block;font-size:15px;text-align:center;padding:7px 15px 0;clear:both;}
.profession{padding:12px 15px 0;line-height:19px;}
.happenright{margin:-193px 0 0 20px;}
.matched_icon{width:58px;height:58px;background:#5595e4;position:absolute;left:-17px;top:-15px;border-radius:50%;-webkit-animation-duration:1.5s;animation-duration:1.5s;-webkit-animation-fill-mode:both;animation-fill-mode:both;}
.matched_icon em{background:url("https://imgassets.quackquack.co/icons-spritev13.png") no-repeat -249px -49px;width:28px;height:22px;display:block;margin:19px 0 0 16px;}
.match_btm{clear:both;padding:30px 0 0;}
.match_btm a{float:left;background:#dfe6fa;height:60px;line-height:60px;width:207px;border-radius:4px;text-align:center;-webkit-animation-duration:.5s;animation-duration:.5s;-webkit-animation-fill-mode:both;animation-fill-mode:both;}
.match_btm a:hover{background:#bcc4dc;}
.match_btm a.send_msg{float:right;background:#5394e4;color:#fff;}
.match_btm a.send_msg:hover{background:#4082d4;}
.matchIcon{background:url("https://imgassets.quackquack.co/icons-spritev13.png") no-repeat -233px -246px;width:27px;height:26px;display:inline-block;vertical-align:middle;margin-bottom:1px;}
.match_btm a cite{font-style:normal;font-size:19px;display:inline-block;vertical-align:middle;padding:0 0 0 8px;}
.sendIcon{background-position:-197px -250px;margin:6px 0 0;width:27px;height:27px;}
@-webkit-keyframes slideInLeft{0%{opacity:0;-webkit-transform:translateX(-2000px);}
 60%{opacity:1;-webkit-transform:translateX(20px);}
 80%{-webkit-transform:translateX(-10px);}
 100%{-webkit-transform:translateX(0);}
}
@keyframes slideInLeft{0%{opacity:0;-webkit-transform:translateX(-2000px);}
 60%{opacity:1;-webkit-transform:translateX(20px);}
 80%{-webkit-transform:translateX(-10px);}
 100%{-webkit-transform:translateX(0);}
}
.slideInLeft{-webkit-animation-name:slideInLeft;animation-name:slideInLeft;-webkit-animation-duration:1s;animation-duration:1s;-webkit-animation-fill-mode:both;animation-fill-mode:both;}
@-webkit-keyframes slideInRight{0%{opacity:0;-webkit-transform:translateX(2000px);}
 60%{opacity:1;-webkit-transform:translateX(-30px);}
 80%{-webkit-transform:translateX(10px);}
 100%{-webkit-transform:translateX(0);}
}
@keyframes slideInRight{0%{opacity:0;-webkit-transform:translateX(2000px);}
 60%{opacity:1;-webkit-transform:translateX(-30px);}
 80%{-webkit-transform:translateX(10px);}
 100%{-webkit-transform:translateX(0);}
}
.slideInRight{-webkit-animation-name:slideInRight;animation-name:slideInRight;-webkit-animation-duration:1s;animation-duration:1s;-webkit-animation-fill-mode:both;animation-fill-mode:both;}
@-webkit-keyframes bounceInUp{from, 60%, 75%, 90%, to{-webkit-animation-timing-function:cubic-bezier(0.215, 0.61, 0.355, 1);animation-timing-function:cubic-bezier(0.215, 0.61, 0.355, 1);}
 from{opacity:0;-webkit-transform:translate3d(0, 3000px, 0);transform:translate3d(0, 3000px, 0);}
 60%{opacity:1;-webkit-transform:translate3d(0, -20px, 0);transform:translate3d(0, -20px, 0);}
 75%{-webkit-transform:translate3d(0, 10px, 0);transform:translate3d(0, 10px, 0);}
 90%{-webkit-transform:translate3d(0, -5px, 0);transform:translate3d(0, -5px, 0);}
 to{-webkit-transform:translate3d(0, 0, 0);transform:translate3d(0, 0, 0);}
}
@keyframes bounceInUp{from, 60%, 75%, 90%, to{-webkit-animation-timing-function:cubic-bezier(0.215, 0.61, 0.355, 1);animation-timing-function:cubic-bezier(0.215, 0.61, 0.355, 1);}
 from{opacity:0;-webkit-transform:translate3d(0, 3000px, 0);transform:translate3d(0, 3000px, 0);}
 60%{opacity:1;-webkit-transform:translate3d(0, -20px, 0);transform:translate3d(0, -20px, 0);}
 75%{-webkit-transform:translate3d(0, 10px, 0);transform:translate3d(0, 10px, 0);}
 90%{-webkit-transform:translate3d(0, -5px, 0);transform:translate3d(0, -5px, 0);}
 to{-webkit-transform:translate3d(0, 0, 0);transform:translate3d(0, 0, 0);}
}
.bounceInUp{-webkit-animation-name:bounceInUp;animation-name:bounceInUp;-webkit-animation-duration:0.8s;animation-duration:0.8s;-webkit-animation-fill-mode:both;animation-fill-mode:both;}
@keyframes zoominout{0%{transform:scale(0);}
 50%{transform:scale(1.3);}
 100%{transform:scale(1);}
}
@-webkit-keyframes zoominout{0%{transform:scale(0);}
 50%{transform:scale(1.3);}
 100%{transform:scale(1);}
}
.zoominout{animation:zoominout 0.5s;-webkit-animation-fill-mode:both;animation-fill-mode:both;animation-delay:0.5s;}
@-webkit-keyframes zoomIn{from{opacity:0;-webkit-transform:scale3d(.3, .3, .3);transform:scale3d(.3, .3, .3);}
 50%{opacity:1;}
}
@keyframes zoomIn{from{opacity:0;-webkit-transform:scale3d(.3, .3, .3);transform:scale3d(.3, .3, .3);}
 50%{opacity:1;}
}
.zoomIn{-webkit-animation-name:zoomIn;animation-name:zoomIn;}
.boxMain{background:#f3f4f9;margin:auto;border-radius:6px;left:50%;margin:auto;position:absolute;top:50%;transform:translate(-50%, -50%);-moz-transform:translate(-50%, -50%);-webkit-transform:translate(-50%, -50%);-o-transform:translate(-50%, -50%);border-radius:6px;}
.doneBlock{width:400px;text-align:Center;background:#f2f4f9;border-radius:13px;}
.done_txt{font-size:25px;font-family:roboto_r;display:block;padding:20px 0;color:#4c9ed9;text-transform:uppercase;}
.clock{display:block;padding:0;background:#f2f4f9;border-radius:50%;margin:-45px 0 0 80px;float:left;width:245px;clear:both;}
.clock img{margin:-13px auto 0;}
.doneBlock p{font-size:20px;line-height:24px;clear:both;color:#2d2d2d;padding:0 20px;}
.profileDesc .fullslider ul.slides li img{max-height:100%;}
.blue_txt{color:#5394e4;font-size:25px;line-height:65px;border-radius:13px;display:block;text-align:center;position:relative;z-index:9999;padding:22px 0 0;background:#fff;}
.updateLink{background:#fe3845;height:55px;line-height:55px;border-radius:13px;font-size:14px;display:block;width:100%;float:left;margin:-19px 0 0;padding:19px 0 0;position:relative;z-index:999;text-align:left;text-transform:uppercase;}
.updateLink:hover{background:#d8232f;}
.updateLink strong{font-family:roboto_m;font-weight:normal;float:left;width:240px;color:#fff;padding:0 0 0 35px;font-size:16px;}
.updateLink small{color:#f3fe44;float:right;font-size:18px;padding:0 30px 0 14px;text-align:right;width:80px;}
.updateLink2{background:#5394e4;z-index:99;}
.updateLink2:hover{background:#2d75ce;}
.updateLink3{background:#ebf1ff;z-index:9;}
.updateLink3:hover{background:#d2dcf3;}
.updateLink3 strong{color:#495368;}
.updateLink3 small{color:#fe3845;}
.okBtn{padding:25px 0 30px;display:block;}
.invite_block{width:400px;padding:0 30px 37px;box-sizing:border-box;text-align:center;background:#f0f2f7;}
.invite_txt{font-size:24px;display:block;color:#202c44;text-align:center;}
.invite_block p{color:#717387;font-size:13px;line-height:23px;padding:20px 0 0;}
.mediaLink{background:#3b5998;display:block;width:100%;border-radius:4px;height:53px;line-height:53px;color:#fff;margin:20px 0 0;font-size:20px;}
.mediaLink:hover{background:#25468a;}
.mediaLink strong{font-family:roboto_r;margin:0 0 0 -45px;}
.mediaLink small{float:left;background:url("https://imgassets.quackquack.co/icons-spritev13.png") no-repeat -309px -35px;width:35px;height:33px;margin:10px 0 0 20px;font-family:roboto_l;}
.mediaLink2{background:#fe3845;}
.mediaLink3{background:#46cc5b;}
.mediaLink2:hover{background:#ea2532;}
.mediaLink3:hover{background:#2ebe45;}
.mediaLink small.email_icon{background:url("https://imgassets.quackquack.co/icons-spritev13.png") no-repeat -11px -254px;width:37px;height:26px;margin-top:13px;}
.mediaLink small.copy_icon{background:url("https://imgassets.quackquack.co/icons-spritev13.png") no-repeat -53px -246px;width:37px;height:34px;margin-top:12px;}
.fullview{width:570px;}
.popupTop{clear:both;width:100%;text-align:center;padding:25px 0 0;}
.popupTop strong{font-size:22px;color:#000;}
.popupTop small{font-size:15px;color:#757575;}
.popupTop cite{font-style:normal;color:#757575;}
.btns_btm2{padding:18px 0 0;}
.btns_btm2 input{width:170px;height:52px;line-height:52px;margin:0;text-transform:uppercase;float:left;}
.btns_btm2 input.update_btn{float:right;}
.hover_block{position:absolute;right:-313px;top:-100px;width:305px;padding:0 0 0 15px;display:none;}
.inter_list{float:left;width:100%;box-sizing:border-box;}
.inter_list li{float:left;color:#2d2d2d;padding:0 15px;height:30px;line-height:30px;font-size:0;border:1px solid #e4e6ec;border-radius:30px;margin:15px 15px 0 0;width:auto;}
.inter_list li.active{border:1px solid #333;}
.inter_list li .fb_ico{background:url("https://imgassets.quackquack.co/icons-spritev13.png") no-repeat -275px -5px;width:13px;height:13px;display:inline-block;margin:0 4px;vertical-align:middle;}
.inter_list li span{display:inline-block;margin:0 4px;vertical-align:middle;font-size:18px;color:#757575;}
.inter_list li.active span{color:#2d2d2d;}
.fbcf_list li{float:left;width:33.3%;margin-top:10px;}
.fbcf_list li strong{color:#2d2d2d;line-height:23px;font-family:roboto_m;font-weight:normal;float:none;vertical-align:middle;display:inline-block;width:100%;font-size:15px;margin-top:3px;}
.title_cont{font-size:17px;color:#ff1004;font-weight: bold;}
.title_cont .com_int{color:#5394e4;font-size:14px;font-family:roboto_r;}
.triangle{position:relative;display:block;width:15px;z-index:9999;}
.triangle:after{content:"";position:absolute;width:0;height:0;top:108px;left:3px;box-sizing:border-box;border:11px solid #fff;transform-origin:0 0;transform:rotate(45deg);box-shadow:-3px 3px 3px 0 rgba(212,218,231,0.6);}
.field_main:hover .hover_block{display:block;}
.auto_block{width:400px;text-align:Center;padding-bottom:25px;background:#f2f4f9;border-radius:6px;}
.upg_now{width:294px;margin:0 auto;background:#fe8101;}
.upg_now:hover{background:#e87a09;}
.pay_block{width:400px;margin:0 auto;position:relative;z-index:9999;}
.subscribe{background:#bfffce;border-radius:5px 5px 0 0;width:293px;margin:0 auto;height:45px;line-height:45px;text-align:center;display:block;}
.payment_mode{background:#f3f4f9;border-radius:6px;width:100%;overflow:hidden;padding:30px 40px;box-sizing:border-box;}
.pay_title{display:block;width:100%;text-align:center;color:#5394e4;font-size:19px;font-family:roboto_r;text-transform:uppercase;}
.cards_list{padding:10px 0 30px;float:left;width:100%;box-sizing:border-box;}
.cards_list li{float:left;margin:20px 0 0;width:100%;box-shadow:2px 2px 2px -2px rgb(190, 191, 195);}
.cards_list li span{background:#fff;border:1px solid #d6d8dd;border-radius:3px;display:block;font-size:16px;line-height:47px;text-align:center;color:#202c44;cursor:pointer;text-transform:none;font-family:roboto_r;}
.cards_list li:hover span{border:1px solid #bbcde6;background:#d3e1f5;}
.photo-verify{background:#ff3845;height:32px;border-radius:18px;line-height:32px;color:#fff;text-align:center;width:220px;left:50%;bottom:20px;font-family:roboto_r;display:block;position:absolute;z-index:99;margin:0 0 0 -110px;}
.coupon{display:block;text-align:center;text-transform:none;clear:both;}
.coupon a{color:#5394e4;font-size:15px;}
.coupon_apply{display:block;float:left;width:100%;}
.coupon_filed{background:none;border:1px dashed #d5d6da;width:100%;padding:8px 20px 8px 20px;font-size:15px;color:#d5d6da;height:54px;box-sizing:border-box;margin:25px 0 0;font-family:'Roboto', sans-serif;}
.prem_btn{background:#0394de;border:none;border-radius:0 1px 1px 0;color:#ffffff;cursor:pointer;float:right;font:400 16px/40px 'Roboto', sans-serif;padding:0 15px;text-transform:uppercase;}
.coupon_apply .apply_btn{margin-top:25px;}
::-webkit-input-placeholder{color:#ababab;position:relative;opacity:1;}
:-moz-placeholder{color:#ababab;position:relative;opacity:1;}
::-moz-placeholder{color:#ababab;position:relative;opacity:1;}
:-ms-input-placeholder{color:#ababab;position:relative;opacity:1;}
.applied{clear:both;display:none;}
.applied small{font-size:14px;color:#1f7602;float:left;padding:13px 0 0;}
.remove_btn{width:auto;padding:0;}
.pay_field{float:left;box-sizing:border-box;width:100%;padding:18px 0 0;}
.pay_field label{font-size:16px;color:#2d2d2d;display:block;clear:both;}
.field{display:block;border:1px solid #d6d8dd;border-radius:3px;height:49px;box-sizing:border-box;padding:5px 16px;width:100%;float:left;font-size:16px;margin:6px 0 0;line-height:39px;}
.expire .pay_field{width:47%;}
.expire .pay_field2{float:right;}
.field::-webkit-input-placeholder{color:#cccdd1;position:relative;opacity:1;}
.field::-moz-input-placeholder{color:#cccdd1;position:relative;opacity:1;}
.field::-moz-placeholder{color:#cccdd1;position:relative;opacity:1;}
.field:-ms-input-placeholder{color:#cccdd1;position:relative;opacity:1;}
.makeBtn{background:#ff8100;border:none;outline:none;width:100%;height:55px;margin:21px 0 20px;float:left;line-height:50px;color:#fff;text-transform:uppercase;text-align:center;font-size:21px;border-radius:6px;cursor:pointer;}
.makeBtn:hover{background:#ff6c00;}
.card_block{float:left;width:100%;padding:12px 0 0;}
.arrow{position:relative;float:left;margin:-30px 0 0 -17px;width:40px;height:40px;border-radius:50%;cursor:pointer;}
.arrow:after{border-bottom:1px solid #2d2d2d;border-right:1px solid #2d2d2d;content:" ";height:13px;position:absolute;left:16px;top:13px;transform:rotate(135deg);width:13px;}
.arrow:hover{background:#e4e6ec;}
.net_banking{padding:0;clear:both;}
.net_banking small{font-size:15px;color:#2d2d2d;}
.list_banks{clear:both;}
.list_banks li{float:left;width:145px;background:#fff;border:1px solid #e5e7ed;border-radius:2px;height:40px;margin:20px 0 0;position:relative;cursor:pointer;}
.list_banks li.selected{border:1px solid #5394e4;}
.list_banks li:hover{border-color:#5394e4;}
.list_banks li span{background:url("https://imgassets.quackquack.co/sprite-banks.png") no-repeat -8px -10px;width:136px;height:22px;position:absolute;left:0;top:0;right:0;bottom:0;margin:auto;}
.list_banks li.icici span{background-position:-8px -46px;width:116px;height:24px;}
.list_banks li.axis span{background-position:-8px -84px;width:92px;height:24px;}
.list_banks li.kotak span{background-position:-8px -123px;width:82px;height:26px;}
.list_banks li.sbi span{background-position:-8px -162px;width:136px;height:25px;}
.list_banks li.yes span{background-position:-8px -202px;width:99px;height:35px;}
.list_banks li:nth-child(even){float:right;}
.wallet_block{min-height:inherit;}
.pay_success{min-height:inherit;text-align:center;position:relative;text-align:center;width:400px;margin:0 auto;overflow:inherit;}
.pay_success .btn{text-transform:uppercase;}
.pay_success p{font-size:21px;line-height:34px;font-family:roboto_l;padding:40px 0 40px;}
.payment_title{font-size:25px;}
.orange_btn{background:#ff8100;}
.orange_btn:hover{background:#ff6600;}
.free_block{min-height:inherit;}
.earn{font-size:15px;display:block;width:100%;text-align:center;padding:25px 0 7px;color:#fe3845;}
.like_fb{background:#fff;border:1px solid #e5e7ed;border-radius:3px;margin:20px 0 0;float:left;padding:10px 15px;width:100%;box-sizing:border-box;cursor:pointer;}
.like_fb:hover{border:1px solid #bbbfce;}
.fbicon{float:left;background:url("https://imgassets.quackquack.co/upgrade-sprite.png") no-repeat -6px -5px;width:36px;height:34px;}
.like_fb small{float:left;color:#202c44;font-size:16px;line-height:34px;font-family:roboto_l;padding:0 0 0 15px;}
.tick_icon{background:url("https://imgassets.quackquack.co/icons-spritev13.png") no-repeat -83px -15px;float:right;height:18px;margin:9px 0 0 6px;width:18px;}
.inviteicon{background-position:-48px -7px;width:37px;height:28px;margin:2px 0 0;}
.invite_frnd small{line-height:18px;}
.like_fb small strong{font-size:13px;color:#8f929a;display:block;}
.referral{font-size:14px;color:#4b9b2f;display:block;padding:20px 0 0;clear:both;line-height:18px;}
.refer_link{font-size:14px;color:#202c44;float:left;margin:11px 0 0;width:170px;clear:both;line-height:19px;word-break:break-all;}
.share_link{float:right;font-size:0px;width:114px;height:40px;border-radius:4px;color:#fff;line-height:40px;margin:7px 0 0;background:#ef8613;text-transform:uppercase;text-align:center;}
.share_link:hover{background:#e87a09;}
.shareicon{background:url("https://imgassets.quackquack.co/share-icon.png") no-repeat left top;display:inline-block;vertical-align:middle;width:22px;height:22px;margin:0 8px 0 0;}
.share_link span{display:inline-block;vertical-align:middle;font-size:17px;}
.makegray_btn{background:#a4a4a4;margin-bottom:0;margin-top:30px;}
.makegray_btn:hover{background:#797878;}
.lightbox .searchField select{width:107%;}
.pay_field .select_photo{margin:13px 0 0;}
.net_banking .select_photo{margin:20px 0 0;}
.addLink{background:#5394e4;font-size:13px;height:26px;line-height:26px;border-radius:20px;width:116px;text-align:center;display:block;margin:33px 0 0 91px;clear:both;float:left;padding:3px 9px;color:#fff;}
.addphotosLink{width:126px;margin:33px 0 0 86px;}
.addLink:hover{background:#2572c0;}
.edit_link{font-size:14px;color:#5394e4;float:right;cursor:pointer;padding:0 0 0 2px;font-weight:normal;}
.edit_link:hover{color:#005ca6;}
.verify_block{width:551px;clear:both;text-align:center;margin:auto;overflow:inherit;padding:0 0 40px;background:#f2f4f9;}
.verifyCont{padding:50px 0 0;text-align:center;width:100%;overflow:hidden;}
.mob_verify{cursor:pointer;float:left;position:relative;text-align:center;width:50%;}
.mobile{background:url("https://imgassets.quackquack.co/myprofile-sprite.png") no-repeat -9px -6px;display:inline-block;height:83px;margin:0;width:83px;}
.mob_verify:hover .mobile{opacity:0.7;}
.mobile.active{background-position:-10px -96px;}
.mobile.active:hover{opacity:1;}
.facebook{background-position:-100px -6px;margin:0;}
.facebook.active{background-position:-104px -93px;}
.facebook.active:hover{opacity:1;}
.mob_verify small{color:#717387;display:block;font-size:15px;line-height:24px;padding:0 0 0 95px;text-align:left;}
.var_now{color:#5394e4;font-size:15px;display:block;line-height:20px;margin:0 0 0 95px;text-align:left;}
.mob_no{color:#2c3449;font-size:15px;padding:0 0 0 95px;text-align:left;display:Block;}
.mob_no cite{font-style:normal;}
.mob_no .tickIcon{float:none;display:inline-block;vertical-align:middle;margin-top:-2px;}
.fb_verify:before{position:absolute;left:0;top:20px;height:87px;border-left:1px solid #cbced6;content:' ';}
.number_block{background:#f2f4f9;border-radius:2px;width:328px;margin:45px auto 0;height:50px;position:relative;}
.phone_verify{padding:0 40px;}
.code{float:left;border-right:1px solid #eaebf1;margin:8px 0 0;height:32px;line-height:32px;width:50px;text-align:center;z-index:999;position:relative;cursor:pointer;color:#2d2d2d;}
.mobile_field{float:left;background:#fff;border:none;outline:none;color:#2d2d2d;width:268px;font-size:15px;padding:0 0 0 57px;margin:-40px 0 0;height:48px;line-height:32px;border:1px solid #d9dade;z-index:99;position:relative;}
.mobile_field:focus{border-color:#5394e4;}
.mobile_field::-webkit-input-placeholder{color:#ababab;position:relative;opacity:1;}
.mobile_field::-moz-input-placeholder{color:#ababab;position:relative;opacity:1;}
.mobile_field::-moz-placeholder{color:#ababab;position:relative;opacity:1;}
.otpBtn{width:328px;border:none;outline:none;margin:20px auto 0;background:#5394e4;}
.otpBtn:hover{background:#3089f8;}
.otp_txt{color:#2d2d2d;font-size:15px;padding:18px 0 0;display:block;}
.mob_btm{padding:18px 0 0;}
.mob_btm .btn{background:#f3f4f9;border:1px solid #a5a5a5;color:#a5a5a5;height:39px;line-height:36px;border-radius:2px;font-size:15px;}
.mob_btm .btn:hover{background:#a5a5a5;color:#fff;}
.verify_block .invite_txt{padding:35px 0 0;}
.otp_field{width:100%;text-align:center;padding:0 8px;box-sizing:border-box;margin:0;}
.bg_block{background:#f3f4f9;width:478px;padding:40px 32px 40px;box-sizing:border-box;text-align:center;}
.bgfield{padding:0 15px;margin:20px 0 0;background:#fff;}
.bgfield:hover, .bgfield:hover .searchField{background:#f3f4f9;}
.bgfield label{width:165px;text-align:left;}
.bgfield .searchField{width:215px;background:#fff;}
.invite_txt2{padding:35px 0 10px;}
.bgfield1{margin-top:25px;}
.saveBtn{width:100%;border:none;outline:none;margin:35px auto 0;background:#5394e4;}
.saveBtn:hover{background:#3c8ced;}
.aboutarea{height:138px;}
.aboutarea::-webkit-input-placeholder, .areaField::-webkit-input-placeholder{color:#ababab;position:relative;opacity:1;}
.aboutarea::-moz-input-placeholder, .areaField::-moz-input-placeholder{color:#ababab;position:relative;opacity:1;}
.aboutarea::-moz-placeholder, .areaField::-moz-placeholder{color:#ababab;position:relative;opacity:1;}
.saveBtn2{margin:35px 0 0;float:left;}
.albums{padding:20px 0 0;text-align:center;max-height:275px;overflow:auto;margin:0 15px;}
.albums li{min-width:110px;display:inline-block;padding:15px 15px 0 15px;vertical-align:top;cursor:pointer;max-width:110px;}
.album_pic{width:75px;height:75px;display:inline-block;background:#eee;overflow:hidden;border-radius:50%;position:relative;border:3px solid #f3f4f9;background-position:50% 25%;background-size:cover;}
.albumphoto span{display:block;width:100px;height:100px;background-position:50% 25%;background-size:cover;}
.album_pic img{position:absolute;left:0;right:0;top:0;bottom:0;margin:auto;}
.album_pic.active, .album_pic:hover{border-color:#5394e4;}
.album_title{color:#202c44;font-size:18px;display:block;max-width:137px;overflow:hidden;text-overflow:ellipsis;white-space:nowrap;}
.count{font-size:15px;color:#8f929a;font-style:normal;display:block;line-height:20px;}
.photo_block{max-width:685px;background:#f3f4f9;text-align:center;padding:0 0 20px;min-width:550px;}
.photo_block2{padding-bottom:45px;}
.album_photos{float:left;margin:0;width:100%;padding:0;max-height:250px;min-height:150px;}
.album_photos li{font-size:0;height:100px;padding-top:25px;}
.arrow_photos{margin:-37px 0 0 25px;}
.upld_btn{width:420px;margin:0 auto;display:block;}
.editphoto{position:relative;width:222px;margin:0 auto;}
.plus_symbol{width:222px;background:#fff;border:1px solid #d9daeb;height:222px;display:block;position:relative;border-radius:50%;margin:65px auto 25px;cursor:pointer;}
.plus_symbol:hover{border-color:#aeb0cd;}
.plus_symbol small{background:url("https://imgassets.quackquack.co/edit-spritev3.png") no-repeat -12px -9px;display:inline-block;height:93px;position:absolute;width:93px;left:0;right:0;top:0;bottom:0;margin:auto;}
.myphto_block{background:#f3f4f9;text-align:center;max-width:665px;z-index:99;padding:30px 0 20px;}
.myphto_block2{max-width:665px;padding-bottom:15px;}
.upload_block{background:#fff;border-radius:8px;width:216px;position:absolute;top:-40px;left:5px;text-align:left;display:none;padding:0 0 17px;box-shadow:0 0 30px rgba(60,108,222,0.3);}
.from_gal{display:block;padding:15px 0 15px 24px;overflow:hidden;cursor:pointer;}
.from_gal:hover{background:#f3f4f9;}
.upld_txt{font-size:16px;color:#5394e4;display:block;padding:28px 0 18px 24px;}
.gal_icon{background:url("https://imgassets.quackquack.co/edit-spritev3.png") no-repeat -125px -14px;float:left;width:34px;height:29px;}
.from_gal cite{font-style:normal;color:#202c44;font-size:16px;line-height:30px;float:left;padding:0 0 0 18px;}
.fb_photos{background-position:-125px -59px;width:33px;height:34px;}
.inst_photos{background-position:-71px -108px;width:33px;height:34px;}
.full_photos{width:665px;position:relative;padding:65px 0 0;}
.small_symbol{width:44px;height:44px;margin:0 4px;z-index:99;}
.small_symbol small{background-position:-173px -10px;width:15px;height:18px;}
.editphoto2{display:inline-block;width:52px;height:50px;}
.photothumb{height:65px;width:262px;margin:20px 0 0 141px;}
.photothumb ul li span{width:41px;height:41px;border:3px solid #fff;margin:0;}
.full_photos .photothumb ul.slides li{height:55px;width:40px;}
.photothumb ul.slides li img{max-width:41px;}
.full_photos .slideshow{margin:10px auto 0;width:440px;height:400px;}
.editphoto2 .upload_block{left:30px;top:30px;z-index:999999;}
.delete_block{width:300px;margin:0 auto;padding:20px 0 0;}
.set_txt{display:inline-block;padding:0 10px;cursor:pointer;}
.set_txt:hover{opacity:0.8;}
.pic_icon{background:url("https://imgassets.quackquack.co/edit-spritev3.png") no-repeat -172px -65px;float:left;width:21px;height:19px;}
.del_icon{background:url("https://imgassets.quackquack.co/edit-spritev3.png") no-repeat -175px -40px;float:left;width:18px;height:17px;}
.set_txt small{float:left;color:#717387;font-size:15px;padding:0 0 0 10px;line-height:16px;}
.invite_txt strong{font-size:15px;color:#5394e4;}
.inter_list2{box-shadow:none;background:none;max-height:230px;padding-top:0;margin:25px 0 0;}
.inter_list2 li{margin:0 15px 15px 0;border-radius:20px;background:#fff;}
.inter_block{width:490px;text-align:center;padding:30px 27px 40px;background:#f3f4f9;min-height:394px;}
.date_block{text-align:center;padding:0 30px 35px;overflow:inherit;}
.loc_main{background:#fff;border:1px solid #d9dbe1;height:48px;border-radius:2px;cursor:pointer;margin:20px 0 0;}
.loc_main:hover{background:#f3f4f9;}
.cat_main{position:relative;}
.loc_icon{background:url("https://imgassets.quackquack.co/edit-spritev3.png") no-repeat -174px -95px;float:left;width:21px;height:25px;margin:13px 0 0 20px;}
.search_txt{float:left;color:#ababab;line-height:48px;font-size:14px;padding:0 0 0 18px;position:relative;width:340px;text-align:left;}
.search_txt:after{border-bottom:1px solid #999eab;border-right:1px solid #999eab;content:" ";height:6px;position:absolute;right:8px;top:21px;transform:rotate(315deg);width:6px;}
.cat_icon{background:url("https://imgassets.quackquack.co/edit-spritev3.png") no-repeat -141px -102px;width:24px;height:25px;margin:13px 0 0 20px;}
.txt_search{font-size:15px;line-height:20px;color:#2d2d2d;padding:14px 0 0;clear:both;text-align:left;}
.cat_txt:after{transform:rotate(42deg);}
.cat_block{background:#fff;border-radius:8px 8px 0 0;width:418px;position:absolute;top:-301px;left:0;text-align:left;display:none;z-index:999;padding:10px 0 10px 0;box-shadow:0 0 20px rgba(60,108,222,0.3);}
.cat_list{height:280px;overflow:auto;}
.cat_list li{padding:12px 0 12px 23px;clear:both;overflow:hidden;cursor:pointer;}
.cat_list li:hover{background:#f3f4f9;}
.cat_list li strong{font-size:18px;font-family:roboto_m;font-weight:normal;padding:0 0 0 20px;float:left;line-height:30px;}
.cat_list li small{width:34px;height:30px;float:left;position:relative;}
.cat_list li small em{position:absolute;left:0;top:0;bottom:0;right:0;width:31px;margin:auto;}
.cat_list li small.food_b em{height:18px;}
.cat_list li small.cafe_b em{background-position:-37px -171px;height:27px;}
.cat_list li small.drinks_b em{background-position:-67px -170px;height:31px;}
.cat_list li small.show_b em{background-position:-99px -170px;height:17px;}
.cat_list li small.shop_b em{background-position:-130px -170px;height:21px;}
.cat_list li small.explore_b em{background-position:-161px -170px;height:28px;}
.cat_list li small.other_b em{background-position:-194px -170px;height:13px;}
.fb_photo{width:80px;height:80px;border-radius:50%;overflow:hidden;display:inline-block;vertical-align:middle;}
.frndz_list strong{float:left;font-family:roboto_r;line-height:52px;font-size:16px;color:#6b6b6b;padding:0 0 0 7px;width:100px;white-space:nowrap;overflow:hidden;text-overflow:ellipsis;}
.no_frnds{display:block;color:#6b6b6b;clear:both;padding:10px 0 0;font-size:16px;line-height:22px;}
.comm_frnds{clear:both;font-size:16px;}
.comm_frnds p{font-size:16px;line-height:22px;padding:8px 0 0;color:#2d2d2d;}
.connect_btn{font-size:14px;color:#3b5998;text-transform:uppercase;border:2px solid #3b5998;border-radius:2px;padding:0 14px;line-height:34px;height:34px;float:left;border-radius:4px;margin:10px 0 0;}
.connect_btn:hover{background:#3b5998;color:#fff;}
.msg_date{color:#9598a1;width:100%;text-align:center;clear:both;font-size:13px;padding:15px 0 0;}
.blue_circle{background:url("https://imgassets.quackquack.co/msg-seen.png") no-repeat left top;width:17px;height:11px;display:inline-block;vertical-align:middle;margin:-1px 7px 0 0;}
.gray_circle{border:2px solid #adaeae;width:8px;height:8px;border-radius:50%;display:inline-block;vertical-align:middle;margin:0 7px 0 0;}
.fill_circle{border:2px solid #5295e4;background:#5295e4;width:8px;height:8px;border-radius:50%;display:inline-block;vertical-align:middle;margin:0 7px 0 0;}
.msg_options{float:right;padding:6px 50px 0 0;}
.msg_view{float:right;font-size:12px;color:#8f929a;line-height:17px;padding:0 0 0 10px;}
.code_list{clear:both;position:absolute;left:0;background:#fff;height:250px;overflow:auto;top:50px;width:100%;box-shadow:0 0 15px rgba(60,108,222,0.3);text-align:left;font-size:14px;display:none;}
.code_list ul{clear:both;}
.code_list ul li{float:left;width:100%;color:#2d2d2d;padding:12px;box-sizing:border-box;font-size:14px;cursor:pointer;}
.code_list ul li:hover{background:#e4e6ec;}
.code_list ul li em{font-style:normal;}
.code_list ul li small{padding:0 0 0 6px;}
.demopopup{position:absolute;bottom:-42px;z-index:9999;width:399px;left:-15px;height:268px;}
.demoBlock{background:#fff;height:148px;width:399px;position:relative;border-radius:8px;}
.transparent2{position:fixed;}
.demo_icon{bottom:-120px;left:10px;position:absolute;}
.demoBlock p{padding:30px 20px 0;font-size:17px;color:#1d283d;line-height:23px;}
.btns_demo{float:left;width:100%;margin:10px 0 0;}
.nextbtn{float:right;background:#5394e4;border:none;border-radius:3px;color:#ffffff;cursor:pointer;font-family:"Roboto", sans-serif;font-size:18px;height:41px;margin:0 20px 0 10px;line-height:41px;padding:0;text-align:center;width:100px;text-transform:uppercase;cursor:pointer;}
.nextbtn:hover{background:#2d79c5;}
.skipbtn{float:right;background:#fff;font-size:18px;color:#b8b8b8;height:41px;line-height:41px;border-radius:3px;width:80px;text-transform:uppercase;text-align:center;cursor:pointer;}
.skipbtn:hover{background:#b8b8b8;color:#fff;}
.arrowbtm{position:absolute;bottom:13px;left:73px;}
.arrowbtm .triangle::after{box-shadow:none;top:0;border:9px solid #ffffff;}
.superlikedemo{left:107px;}
.likedemo{left:210px;}
.clickBlock{position:absolute;top:121px;width:226px;height:176px;left:55px;text-align:Center;border-radius:8px;background:rgba(0,0,0,0.7);}
.clickIcon{background:url("https://imgassets.quackquack.co/demo-sprite.png") no-repeat -15px -6px;width:38px;display:inline-block;height:62px;margin:30px 0 0;}
.txt_click{font-size:20px;display:block;padding:14px 0 0;line-height:25px;color:#fff;}
.txt_click strong{font-weight:700;display:block;width:100%;text-transform:uppercase;}
.holdicon{background-position:-7px -86px;margin:9px 0 0;width:48px;height:83px;}
.sent_block2{position:absolute;bottom:0;width:100%;border-radius:0 0 6px 6px;}
.abusiveBlock2{background:#f3f4f9;border-radius:10px;box-sizing:border-box;margin:auto;min-height:auto;overflow:hidden;padding:35px 0;position:relative;width:550px;}
.showprofile{position:fixed;background:#edeef3;height:100%;margin:70px 0 0 252px;z-index:9999;width:706px;padding:0 5px 0 0;}
.comm_frnds p a.link_con{color:#3b5998;font-family:roboto_r;font-size:16px;}
.comm_frnds p a.link_con:hover{color:#193a7d;}
.mypreferBlock{width:360px;clear:both;float:left;padding:0 30px 38px 20px;}
.mypreferBlock h6, .notifications h6{font-size:20px;color:#202c44;font-family:roboto_r;}
.notifications{clear:both;overflow:hidden;padding:0 30px 38px 20px;}
.sub_block{border-bottom:1px solid #e8eaef;}
.mypreferDesc{padding:0;height:auto;margin:22px 0 0;}
.preferCont{overflow-y:scroll;}
.noteCont{padding:22px 0 0;color:#6b6b6b;position:relative;clear:both;}
.noteTitle{font-size:15px;color:#6b6b6b;display:block;}
.noteCont span small{color:#8f929a;}
.noteCont p{font-size:15px;color:#8f929a;clear:both;line-height:20px;padding:8px 0 0;}
.onoffswitch{position:relative;width:38px;position:absolute;right:0;top:22px;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;}
.onoffswitch-checkbox{display:none;}
.onoffswitch-label{display:block;overflow:hidden;cursor:pointer;border-radius:19px;}
.onoffswitch-inner{display:block;width:200%;margin-left:-100%;transition:margin 0.3s ease-in 0s;}
.onoffswitch-inner:before, .onoffswitch-inner:after{display:block;float:left;width:50%;height:14px;padding:0;line-height:21px;font-size:0px;color:white;box-sizing:border-box;}
.onoffswitch-inner:before{padding-left:10px;content:"";background-color:#ddeafa;color:#FFFFFF;}
.onoffswitch-inner:after{padding-right:10px;background-color:#e8eaef;color:#999999;text-align:right;content:"";}
.onoffswitch-switch{display:block;width:21px;margin:0;background:#A1A1A1;height:21px;position:absolute;top:-3px;bottom:0;right:18px;border-radius:19px;transition:all 0.3s ease-in 0s;}
.onoffswitch-checkbox:checked + .onoffswitch-label .onoffswitch-inner{margin-left:0;}
.onoffswitch-checkbox:checked + .onoffswitch-label .onoffswitch-switch{right:0px;background-color:#5394e4;}
.setTitle{font-size:30px;font-family:roboto_l;clear:both;padding:25px 0 0;}
.tabs2{position:inherit;float:left;padding:25px 0 0 0;}
.tabs2 a{margin:0 30px 0 0;float:left;font-size:17px;color:#838ca8;padding:0 0 6px;border-bottom:2px solid #edeef3;}
.tabs2 a.active{color:#5394e4;border-color:#5394e4;}
.myordersTop{width:500px;margin:30px 0 0 124px;background:#fff;box-sizing:border-box;padding:25px 15px;border-radius:6px;position:relative;float:left;min-height:100px;position:relative;text-align:center;font-size:17px;color:#202c44;box-shadow:4px 4px 4px -3px #bebfc3;}
.renewBtn{width:252px;position:absolute;left:50%;bottom:-25px;background:#ff6000;margin-left:-126px;}
.renewBtn:hover{background:#c74b00;}
.historyBlock{padding:52px 0 0;clear:both;}
.historyBlock h6{font-size:22px;color:#202c44;padding:0 0 0 25px;font-family:roboto_r;}
.boxList{clear:both;padding:20px 15px 0;}
.boxList li{float:left;width:330px;padding:0 0 59px 0;}
.boxList li:nth-child(even){float:right;}
.historyBox{width:100%;background:#fff;box-sizing:border-box;padding:10px 23px 25px 23px;border-radius:6px;position:relative;float:left;min-height:140px;box-shadow:4px 4px 4px -3px #bebfc3;position:relative;}
.historyBox p{clear:both;padding:16px 0 0;}
.historyBox p span{float:left;font-size:15px;color:#8f929a;font-family:roboto_r;width:170px;}
.historyBox p small{font-size:15px;color:#2d2d2d;}
.reorderBtn{font-size:15px;background:#ff6000;position:absolute;left:50%;margin-left:-110px;height:40px;bottom:-20px;border-radius:20px;text-transform:uppercase;width:219px;}
.reorderBtn:hover{background:#c74b00;}
.mypreferBlock .hover_block{right:-322px;}
.links{clear:both;overflow:hidden;text-align:center;padding:16px 0 16px;}
.links li{display:inline-block;padding:0 10px;}
.links li a{font-size:13px;color:#929398;line-height:18px;padding:3px 6px;}
.links li a:hover{color:#616162;}
.custom-checkbox{background:url("https://imgassets.quackquack.co/icons-spritev13.png") no-repeat -266px -246px;display:block;height:22px;margin:2px 12px 0 0;padding:0;vertical-align:top;width:22px;z-index:1;float:left;}
.custom-checkbox.selected{background:url("https://imgassets.quackquack.co/icons-spritev13.png") no-repeat -293px -246px;height:22px;width:22px;}
.custom-checkbox input[type="checkbox"]{cursor:pointer;margin:0;opacity:0;outline:none;position:absolute;z-index:2;height:28px;right:0;width:100%;}
.checkList{background:#f7f7f7;border:1px solid #ccc;border-radius:4px;overflow:hidden;margin:8px 0 25px;padding:0 0 20px;}
.checkList li{float:left;margin:20px 0 0 20px;width:130px;}
.checkList li cite{font-style:normal;font-size:17px;line-height:23px;color:#2d2d2d;}
.checkList li .select_search cite{color:#333;}
.hideprof{padding:25px 0 0;clear:both;}
.checkList li label{width:90%;position:relative;display:block;}
.deletecont{width:535px;overflow:auto;float:left;height:225px;margin:20px 0 0;}
.deletecont label{padding:14px 0 0;cursor:pointer;clear:both;width:100%;display:block;}
.deletecont label small{line-height:20px;padding:0 0 0 15px;vertical-align:top;display:inline-block;font-size:15px;color:#2d2d2d;float:left;width:433px;}
.deleteBlock{width:590px;min-height:457px;padding:24px 51px 32px;background:#f0f2f7;overflow:inherit;}
.deleteBlock h4{line-height:34px;}
.btns_del{clear:both;padding:22px 0 0;text-align:center;}
.keepBtn{line-height:55px;padding:0 25px;text-transform:uppercase;margin:0;width:auto;font-size:21px;display:inline-block;}
.continue_btn{font-size:15px;color:#919294;line-height:55px;padding:0 18px;height:55px;display:inline-block;margin:0 10px 0 15px;border-radius:5px;vertical-align:top;}
.continue_btn:hover{background:#919294;color:#fff;}
.scrollright{position:fixed;right:0;width:40px;height:100%;z-index:9999999;top:0;overflow-y:scroll;}
.slidepop{position:fixed;width:auto;bottom:0;right:0;height:auto;overflow-y:scroll;overflow-x:auto;}
.scrollhide2{margin-right:17px;overflow:hidden;}
.allcards{background:url(https://imgassets.quackquack.co/v-m-ma-card1.png) no-repeat left top;}
.visat2{background-position:-78px -1px;float:left;height:22px;position:absolute;right:31px;width:43px;z-index:99;top:20px;}
.visat1{background-position:-44px -1px;float:left;height:22px;position:absolute;right:22px;width:43px;top:20px;z-index:99;}
.cardNumber{position:relative;}
.visat{background-position:0 0;float:left;height:22px;position:absolute;right:32px;width:43px;z-index:99;top:20px;}
.ct_rupay{width:43px;height:22px;float:left;background-position:-123px 0px;position:absolute;top:22px;z-index:99;right:33px;}
.ct_amex{width:43px;height:22px;float:left;background-position:-172px -1px;position:absolute;z-index:99;right:33px;top:22px;}
.ct_diners{width:43px;height:22px;float:left;background-position:-215px -1px;position:absolute;top:21px;z-index:99;right:29px;}
.ct_jcb{width:43px;height:22px;float:left;background-position:-252px -1px;position:absolute;top:21px;z-index:99;right:30px;}
.debit_block .visat{top:10px;}
.debit_block .visat1{top:10px;}
.debit_block .visat2{top:10px;}
.debit_block .ct_rupay{top:11px;}
.debit_block .ct_amex{top:12px;}
.debit_block .ct_diners{top:11px;}
.debit_block .ct_jcb{top:11px;}
.smilred{position:absolute;margin-top:-117px;border:1px solid #999;background:#fff;margin-left:-43px;padding:5px;width:142px;}
._lers{float:left;line-height:27px;padding-left:6px;width:347px;overflow:hidden;height:27px;}
.tooltip_bg{color:white;text-align:center;background-color:#666666;background-image:-webkit-gradient(linear, left top, left bottom, from(#666666), to(#000000));background-image:-webkit-linear-gradient(top, #666666, #000000);background-image:-moz-linear-gradient(top, #666666, #000000);background-image:-ms-linear-gradient(top, #666666, #000000);background-image:-o-linear-gradient(top, #666666, #000000);background-image:linear-gradient(to bottom, #666666, #000000);filter:progid:DXImageTransform.Microsoft.gradient(GradientType=0, startColorstr=#666666, endColorstr=#000000);font-size:11px;font-family:Arial, Helvetica, sans-serif;margin:0px;padding:10px 5px 0px 5px;font-weight:normal;border:1px solid #000000;}
.close_user{width:17px;height:17px;background-position:-72px -374px;float:left;}
.code_condut{width:205px;margin:12px 10px;padding:10px;float:left;border:1px solid #ccc;background:#f5f4f4;}
.userfont{font-size:0.8em;text-decoration:none;color:#2483b7;}
.userfont:hover{text-decoration:underline;}
.bestskills{width:399px;float:left;word-wrap:break-word;}
.box-shadow{box-shadow:0px 4px 6px -1px #999;-webkit-box-shadow:0px 4px 6px -1px #999;-moz-box-shadow:0px 4px 6px -1px #999;}
.fbphotoloader{position:static;margin:auto;}
.enable_btn{background:#fa5e00;}
.interestCont.more > em{display:inline-block;font-size:0;font-style:normal;vertical-align:middle;}
.activeMenu{color:#5394e4;}
#msglike32{text-transform:uppercase;font-weight:600;}
#msgblue_txt32{font-size:17px;}
.done_btn{width:260px;}
.profileMain .fullslider .slides li{background:#eee;}
.profileDesc .profileBlock h3{color:#757575;font-size:14px;padding:0;}
.moretxtlink{background:url("https://imgassets.quackquack.co/more.png") no-repeat left top;width:32px;height:8px;display:inline-block;}
.date_block .error{padding:0;text-align:left;}
.profileDesc .profileBlock p.dateCont{padding:0;}
.preferedmain, .intermain{padding:8px 0 17px 0;overflow:hidden;}
.var_block1, .listblock1, .ab_block1{padding:8px 0 17px 0;overflow:hidden;}
.list{padding:0;}
.list li.prof{padding:25px 0 0;}
.frndsmain{padding:8px 0 15px;}
.listblock1{padding-top:12px;}
.myprofilecont{width:706px;margin-left:252px;}
.proflist li{padding:0 0 25px;overflow:hidden;}
.settingspage{margin-left:252px;width:706px;}
.proflist li span.txt1{padding:0;width:100%;}
.abBlock{padding:0;}
.novisitors{margin-top:0;}
.abBlock p{padding:0;}
.myslider ul.slides li{margin:0 6px;}
.myslider ul li span{background:#fff;}
.myslider{margin-top:10px;}
.addphotosLin{margin-top:30px;}
.myphotosBlock{right:172px;position:absolute;top:-65px;text-align:center;font-size:0;}
.edu_pop{background:#f3f4f8;padding:40px 0;max-height:280px;width:280px;}
.edu_pop h4{color:#5394e4;font-size:23px;font-family:roboto_l;float:left;width:100%;box-sizing:border-box;padding:0 35px;}
.list_pop{width:100%;margin:25px 0 0;max-height:220px;overflow:auto;display:inline-block;}
.list_pop li{font-size:16px;color:#333;line-height:20px;padding:8px 35px;cursor:pointer;}
.list_pop li:hover, .list_pop li.active{background:#fff;color:#5595e4;}
.about-pop{display:table;}
.hide_popup{background:#f3f4f8;padding:36px 25px 40px;text-align:center;width:340px;}
.hide_popup span.hideimg{display:block;height:120px;padding:25px 0;margin:35px 0 20px;width:100%;}
.hide_popup h4{color:#5394e4;font-size:25px;font-family:roboto_l;float:left;width:100%;text-transform:uppercase;}
.hide_popup strong{color:#202c44;display:block;font-size:22px;line-height:28px;text-transform:uppercase;}
.saveper{float:left;background:#fff;color:#fe3845;font-size:14px;border-radius:16px;padding:0 10px;height:34px;position:absolute;left:173px;top:30px;width:70px;line-height:34px;text-align:center;font-style:normal;}
.boxMain.hide_popup > p{font-size:18px;padding:5px 0 0;}
.fbadd2{display:block;position:absolute;top:0;width:100%;}
.doneBlock .done_txt{padding-bottom:0;}
.invite_block .invite_txt{padding-top:35px;}
.updateLink small em{color:#fff;font-size:12px;font-style:normal;text-transform:none;}
.preferedmain{display:none;}
.invite_popup .done_txt{color:#000;font-size:22px;padding:35px 0 0;}
.invite_popup{padding-bottom:35px;}
.invite_popup .super_slider li span{padding:0;height:215px;position:relative;}
.invite_popup .upg_slide{min-height:333px;width:370px;}
.invite_popup{width:370px;}
.hide_popup .upg_now{margin-top:28px;}
.invite_popup .super_slider .slides img{margin:0 auto;max-width:45%;}
.invite_popup .super_slider .slides img, .super_slider.upg_slide li span img{margin:auto;max-width:45%;position:absolute;left:0;top:0;right:0;bottom:0;}
.edu_pop select{border:none;background:none;width:100%;font-size:16px;color:#333;margin:25px 0 0;line-height:35px;}
.edu_pop select option{padding:8px 35px;cursor:pointer;}
.edu_pop select option:hover{background:#fff;}
.edu_pop select option:active{background:#fff;}
.msgContent .profileDesc.requestsBlock, .inboxContent .profileDesc.requestsBlock{margin:20px 0 0;}
.inboxContent .profileDesc,.msgContent .profileDesc{margin-top:30px;}
.donepic{display:block;width:110px;height:110px;overflow:hidden;border-radius:50%;position:relative;background:#eee;margin:40px auto;}
.donepic img{position:absolute;top:0;left:0;right:0;bottom:0;margin:auto;}
.priorityblock{border-radius:6px;}
.doneBlock p.upgnow-txt{color:#000;font-size:13px;}
.upgdone{background:#fe8101;}
.upgdone:hover{background:#e87a09;}
.novisitorlock{width:706px;float:right;margin-left:15px;}
.com_txt > b{color:#000;font-family:roboto_r;}
.playload{left:230px;}
#otp_resend_msg.otp_txt{position:absolute;bottom:13px;left:0;width:100%;text-align:center;}
.mobfberror{position:absolute;bottom:13px;left:0;width:100%;text-align:center;}
.intererror{position:absolute;bottom:17px;left:0;width:100%;text-align:center;}
.clockimg{margin-top:40px;}
.donetitle{padding-top:30px;display:block;}
.donetitle p{font-size:24px;}
.com_txt2{font-size:18px;}
.upgpaid{width:320px;}
.clockimgpaid{margin-top:50px;margin-bottom:30px;}
.block2{padding-top:26px;}
.block2 p{font-size:15px;color:#2d2d2d;word-break:break-all;line-height:26px;padding:6px 0 0;font-family:roboto_m;}
.carousel-inner > .item{opacity:0;top:0;left:0;width:100%;display:block;position:absolute;z-index:0;-webkit-transition:opacity 0.01s linear;-o-transition:opacity 0.01s linear;transition:opacity 0.01s linear;-webkit-transform:translate3d(0, 0, 0) !important;transform:translate3d(0, 0, 0) !important;background:#2d3238;}
.carousel-inner > .item:first-of-type{position:relative;}
.carousel-inner > .next.left,.carousel-inner > .prev.right{-webkit-transition:opacity 0.2s ease-in-out;-o-transition:opacity 0.2s ease-in-out;transition:opacity 0.2s ease-in-out;opacity:1;left:0;z-index:2;}
.carousel-inner > .active{opacity:1;z-index:3;}
.carousel-inner > .active.left,.carousel-inner > .active.right{z-index:1;}
.carousel-control{z-index:4;}
.popupslider{background:#2d3238;overflow:inherit;}
.popupslider .carousel{margin-left:20px;width:625px;height:370px;}
.popupslider .carousel .slide_img{height:370px;cursor:default;max-width:90%;margin:0 5%;}
.popupslider .carousel-indicators{position:absolute;top:-50px;left:0;width:100%;bottom:inherit;}
.popupslider .carousel-indicators li{display:inline-block;width:35px;height:46px;margin:0 6px;text-indent:-999px;cursor:pointer;border-bottom:2px solid rgba(0,0,0,0);}
.popupslider .carousel-indicators .active{border-bottom:2px solid #5394e4;}
.popupslider .slide_img{position:relative;width:100%;height:240px;float:left;display:block;}
.popupslider .carousel-indicators li .thumbnail_img{border:2px solid #ffffff;cursor:pointer;height:35px;display:block;width:35px;}
.popupslider .carousel-indicators li.active .thumbnail_img{border:2px solid #ffffff;}
.carousel-indicators li .thumbnail_img img{width:100%;position:absolute;left:0;top:0;right:0;bottom:0;margin:auto;}
.carousel-control.left{color:#525b64;display:inline-block;float:none;text-indent:-999px;width:60px;top:0;left:0;height:100%;font-size:0;margin:0 0 0 -179px;}
.carousel-control.left .slide_leftarrow{border-right:2px solid #918f8f;border-bottom:2px solid #918f8f;width:15px;height:15px;transform:rotate(-225deg);-moz-transform:rotate(-225deg);-webkit-transform:rotate(-225deg);-ms-transform:rotate(-225deg);margin:-8px 0 0 25px;position:absolute;top:50%;left:0;}
.carousel-control.right{color:#525b64;display:inline-block;float:none;margin:11px auto;text-indent:-999px;width:60px;top:0;height:100%;font-size:0;left:inherit;margin:0 -172px 0 0;right:0;}
.carouselcontrols{float:left;width:100%;}
.carousel-control.right .slide_rightarrow{border-right:2px solid #918f8f;border-bottom:2px solid #918f8f;width:15px;height:15px;transform:rotate(-45deg);-moz-transform:rotate(-45deg);-webkit-transform:rotate(-45deg);-ms-transform:rotate(-45deg);margin:-8px 26px 0 0;position:absolute;top:50%;right:0;}
.carousel-control.left:hover .slide_leftarrow{border-right:2px solid #fff;border-bottom:2px solid #fff;}
.carousel-control.right:hover .slide_rightarrow{border-right:2px solid #fff;border-bottom:2px solid #fff;}
.popupslider .carousel-control.left{margin:0 0 0 -15px;}
.popupslider .carousel-control.right{margin:0 -15px 0 0;}
.thankyou_img{display:block;background:#f3f4f9;width:120px;height:120px;border:8px solid #30b21f;border-radius:50%;margin:0 auto;position:relative;}
.thankyou_img:after{background:url(https://imgassets.quackquack.co/icons-spritev13.png) no-repeat -4px -287px;position:absolute;width:70px;height:52px;left:0;right:0;top:0;bottom:0;margin:auto;content:' ';}
.thankyou_img img{margin:0 auto;display:block;}
.thankumsg p{font-size:18px;padding:40px 90px 10px;line-height:23px;}
.thnksbtn .btn{width:100%;margin:0;}
.thnksbtn{padding:35px 0 0;}
.message_block{padding:0 20px;}
.message_block .areaField{height:160px;}
.msg_block{padding:40px 0;}
.thnksbtn2 .btn{width:92%;margin:0 4%;}
.thnksbtn2 .btn_new{width:43%;float:left;margin:0;margin-left:0px;margin-left:20px;}
select::-ms-expand{display:none;}
.new_select{line-height:20px;position:absolute;left:15px;top:50%;width:90%;transform:translate(0%, -50%);}
.blockuser{min-height:inherit;padding:40px 0;}
.thankumsg{width:450px;}
.thankumsg .fieldBlock{background:#fff;width:90%;margin:auto;padding:0;height:70px;overflow:hidden;}
.thankumsg .cityField{background:#fff;width:100%;height:70px;}
.msg_title{display:inline-block;width:100%;text-align:center;font-size:22px;margin:20px auto;}
.msg_ptext{text-align:center;display:inline-block;width:100%;margin:15px 0;font-size:16px;}
.iconsBlock{clear:both;padding:13px 0;width:100%;clear:both;margin:10px 0 0;float:left;height:41px;text-align:center;border-radius:0 0 6px 6px;font-size:0;border-top:1px solid #f8faf9;background:#f6f9f8;display:table;}
.iconsBlock span{width:110px;display:inline-block;height:41px;position:relative;cursor:pointer;}
.iconsBlock span:before{position:absolute;content:' ';right:0;border-right:1px solid #e1e2e2;height:67px;top:-11px;}
.iconsBlock span small{margin:auto;display:block;position:absolute;left:0;top:0;right:0;bottom:0;-moz-transition:all 0.45s cubic-bezier(0.5, 0, 0, 1.5), background 0.35s cubic-bezier(0.5, 0, 0, 3);-o-transition:all 0.45s cubic-bezier(0.5, 0, 0, 1.5), background 0.35s cubic-bezier(0.5, 0, 0, 3);-webkit-transition:all 0.55s cubic-bezier(0.5, 0, 0, 1.5), background 0.35s cubic-bezier(0.5, 0, 0, 3);transition:all 0.55s cubic-bezier(0.5, 0, 0, 1.5), background 0.35s cubic-bezier(0.5, 0, 0, 3);}
.zoom{-webkit-transform:scale3d(1.4, 1.4, 1.4);transform:scale3d(1.4, 1.4, 1.4);-moz-transition:all 0.45s cubic-bezier(0.5, 0, 0, 1.5), background 0.35s cubic-bezier(0.5, 0, 0, 3);-o-transition:all 0.45s cubic-bezier(0.5, 0, 0, 1.5), background 0.35s cubic-bezier(0.5, 0, 0, 3);-webkit-transition:all 0.55s cubic-bezier(0.5, 0, 0, 1.5), background 0.35s cubic-bezier(0.5, 0, 0, 3);transition:all 0.55s cubic-bezier(0.5, 0, 0, 1.5), background 0.35s cubic-bezier(0.5, 0, 0, 3);}
.bounceIn{-webkit-animation-name:bounceIn;animation-name:bounceIn;}
.iconsBlock span.dislikeIcon small{width:25px;height:25px;}
.iconsBlock span.superlikeIcon small{height:46px;width:46px;}
.iconsBlock span.likeIcon small{width:32px;height:28px;}
.iconsBlock span.likeIcon:before{border-right:none;}
.iconsBlock span:hover small{-webkit-transform:scale3d(1.4, 1.4, 1.4);transform:scale3d(1.4, 1.4, 1.4);-moz-transition:all 0.45s cubic-bezier(0.5, 0, 0, 1.5), background 0.35s cubic-bezier(0.5, 0, 0, 3);-o-transition:all 0.45s cubic-bezier(0.5, 0, 0, 1.5), background 0.35s cubic-bezier(0.5, 0, 0, 3);-webkit-transition:all 0.55s cubic-bezier(0.5, 0, 0, 1.5), background 0.35s cubic-bezier(0.5, 0, 0, 3);transition:all 0.55s cubic-bezier(0.5, 0, 0, 1.5), background 0.35s cubic-bezier(0.5, 0, 0, 3);}
.showcont{opacity:0;position:fixed;}
.chat_request{float:left;width:674px;margin:25px 0 0 20px;background:#0bca60;position:relative;padding:14px 0;border-radius:5px;}
.arrow-up{width:0;height:0;border-left:12px solid transparent;border-right:12px solid transparent;border-bottom:12px solid #0bca60;position:absolute;top:-12px;left:80px;}
.closebtn{background:url("https://imgassets.quackquack.co/icons-spritev13.png") no-repeat -104px -82px;cursor:pointer;height:39px;position:absolute;right:-14px;top:-14px;width:39px;z-index:99;}
.closebtn:hover{background-position:-104px -125px;}
.close_icon{background:url("https://imgassets.quackquack.co/icons-spritev13.png") no-repeat -104px -82px;cursor:pointer;height:39px;position:absolute;right:-14px;top:-14px;width:39px;z-index:99;}
.close_icon:hover{background-position:-104px -125px;}
.chat_title{color:#fff;font-size:15px;border-bottom:1px solid #21e076;width:160px;font-family:roboto_r;display:block;padding:0 0 10px 18px;}
.chatcont{clear:both;padding:10px 0 0 18px;display:block;float:left;}
.chatcont p{color:#fff;}
.contentMain{z-index:99;padding:0 0 30px;}
.inter_list li.no_list{border:none;color:#757575;font-weight:700;font-size:15px;padding:0 2px;}
.icon{top:50%;margin-top:-35px;position:fixed;left:50%;margin-left:92px;}
#maincont2{overflow-y:scroll;overflow-x:hidden;}
.btmblock2{bottom:0;}
.scrollBlock{display:block;float:left;padding:0 0 90px;width:100%;position:relative;}
.animate_block .circle.expand, .animate_block .circle2.expand,.animate_block .circle3.expand{width:338px;border-radius:6px;}
.animate_block .icon{position:absolute;margin-left:-35px;}
.animate_block .suplike.animate{margin-top:-50px;margin-left:-50px;}
.showcont .scrollBlock{padding:0;}
.maincont{clear:both;width:100%;top:0;left:0;background:#fff;}
.maincont2{display:none;}
.inboxBlock{margin:71px 0 0 250px;float:left;width:708px;position:relative;z-index:99;}
.title_top{display:block;clear:both;color:#202c44;font-size:22px;text-align:center;padding:0 0 2px;}
.inboxCont{margin:10px 0 0;padding:0;border:1px solid #dee3f0;}
.accept_request{background:#c8fbe5;border-radius:6px;clear:both;overflow:hidden;width:682px;float:left;position:relative;border:1px solid #abe0c9;margin:0 0 10px 10px;}
.accept_request2{background:#c8fbe5;border-radius:6px;clear:both;overflow:hidden;width:420px;position:relative;border:1px solid #abe0c9;margin:0 0 10px 10px;}
.accept_main{width:695px;float:left;height:0px;overflow:hidden;-moz-transition:height 0.5s ease;-webkit-transition:height 0.5s ease;-o-transition:height 0.5s ease;transition:height 0.5s ease;background:#fff;}
.accept_request p,.accept_request2 p{clear:both;color:#2d2d2d;font-size:14px;line-height:20px;padding:13px 15px 0 15px;}
.req_btns{clear:both;float:left;width:100%;padding:0 15px 13px 15px;box-sizing:border-box;}
.not_btn{float:right;background:none;border:none;font-size:14px;color:#80b59e;line-height:30px;padding:0 10px;text-transform:uppercase;cursor:pointer;}
.not_btn:hover{color:#639680;}
.send_btn{float:right;background:#5394e4;border:none;font-size:14px;color:#fff;text-transform:uppercase;line-height:30px;padding:0 15px;border-radius:2px;cursor:pointer;}
.send_btn:hover{background:#388bf0;}
.sent_btn,.sent_btn:hover{background:#8dc7e4;}
.mobIcon{background:url("https://imgassets.quackquack.co/icons-spritev13.png") no-repeat -296px -344px;float:left;width:17px;height:25px;cursor:pointer;margin:0 0 0 10px;}
.mobIcon:hover,.mobIcon.active{background:url("https://imgassets.quackquack.co/icons-spritev13.png") no-repeat -315px -344px;}
.red_dot{background:#ff3846;width:6px;height:6px;border:2px solid #fff;border-radius:50%;margin:-5px 0 0 -6px;float:left;}
.msgsBlock{clear:both;width:100%;}
.scrollBlock2{padding-bottom:0;}
.smileys_block{border:1px solid #bec8e0;border-radius:6px;display:inline-block;margin:0 5px 10px 12px;text-align:left;padding:15px 0;float:left;position:relative;background:#fff;z-index:99;}
.cont_right.inboxCont{box-shadow:1px 2px 1px #c4c7d1;}
.smileys_main{background:#ffffff;height:122px;float:left;width:100%;-moz-transition:height 0.5s ease;-webkit-transition:height 0.5s ease;-o-transition:height 0.5s ease;transition:height 0.5s ease;}
.smileys{display:inline-block;margin:auto;padding:0;}
.smiley_span{background:url("https://imgassets.quackquack.co/smileys_sprite.png") no-repeat left top;background-size:32px 480px;display:inline-block;height:31px;margin:4px 8px;width:30px;}
.smile{background-position:-1px -353px;}
.laugh{background-position:-1px -225px;}
.shy{background-position:-1px -321px;}
.tongue{background-position:-2px -384px;}
.amazed{background-position:-1px -449px;}
.cool{background-position:-1px -161px;}
.sad{background-position:-1px -289px;}
.cry{background-position:0 -33px;}
.confused{background-position:-1px -129px;}
.love{background-position:-1px -257px;}
.kiss{background-position:-1px -193px;}
.sweating{background-position:-1px -65px;}
.angry{background-position:-1px -97px;}
.wink{background-position:-1px -417px;}
.load_earlier{color:#5394e4;font-size:14px;width:100%;text-align:center;display:block;padding:15px 0;cursor:pointer;position:relative;}
.load_earlier:hover{color:#2d73ca;}
.load_earlier:after{content:" ";border-top:2px solid #e5e9f2;left:50%;margin:0 0 0 -33px;position:absolute;top:37px;width:68px;}
.intboost_cont{background:#fff;padding:40px 15px 25px;border-radius:0 0 10px 10px;}
.intboost_cont p{color:#000;font-size:18px;}
.intboost_cont ul{padding:10px 0 0 0;overflow:hidden;}
.intboost_cont ul li{color:#000;font-size:15px;margin:11px 0;padding:0 0 0 17px;position:relative;float:left;clear:both;}
.intboost_cont ul li:before{content:' ';color:#343434;width:8px;height:8px;position:absolute;background:#343434;border-radius:50%;top:4px;left:0;}
.intboost_cont ul li strong{color:#000;}
.intbooster{background:#ffee5d;padding:50px 50px;border:1px solid #ddd067;border-radius:10px 10px 0 0;}
.intbooster a{background:#ff6000;box-shadow:1px 1px 2px 0 rgba(0, 0, 0, 0.3);color:#ffffff;margin:18px auto 0;display:block;width:350px;line-height:60px;text-align:center;text-transform:uppercase;font-size:20px;border-radius:5px;}
.intbooster a:hover{background:#c74b00;}
.intbooster h2{color:#010101;font-size:22px;line-height:28px;text-align:center;font-family:roboto_r;}
.intbooster h2 span{color:#fe2b00;font-weight:600;text-transform:uppercase;}
.boostBlock{float:left;position:relative;width:708px;margin:65px 0 0 250px;}
.boost_main{background:#fff;box-shadow:1px 3px 3px #c4c7d1;width:564px;margin:10px auto 0;border-radius:10px;}
.editslide .carousel-indicators li .thumbnail_img{width:44px;height:44px;}
.editslide{padding:85px 0 0;}
.editslide .carousel-indicators{bottom:inherit;left:191px;margin:0;position:absolute;top:-65px;width:262px;text-align:left;}
.editslide .carousel-indicators li{border-bottom:2px solid rgba(0, 0, 0, 0);cursor:pointer;display:inline-block;height:54px;margin:0 2px;text-indent:-999px;width:48px;vertical-align:top;}
.loader_main{position:fixed;left:50%;top:50%;margin:-8px 0 0 90px;}
.edit_photo{margin:-35px 12px 0 0;color:#fff;}
.edit_photo:hover{color:#edeff2;}
.upg_btn{float:right;font-size:14px;color:#202c44;padding:14px 0 6px 0;}
.upg_top{background:#6d7c85;clear:both;overflow:hidden;width:100%;padding:5px 0;text-align:center;}
.upgicon{background:url("https://imgassets.quackquack.co/sprite-upgv5.png") no-repeat -34px -4px;display:inline-block;width:64px;height:64px;position:relative;vertical-align:top;}
.upgimg{display:inline-block;width:64px;height:64px;position:relative;vertical-align:middle;}
.upgimg cite{border-radius:50%;display:block;height:54px;margin:3px 0 0 5px;overflow:hidden;position:relative;width:54px;border:2px solid #fff;}
.upgicon cite{background:url("https://imgassets.quackquack.co/sprite-upgv5.png") no-repeat -5px -4px;width:21px;height:23px;position:absolute;left:0;top:0;bottom:0;right:0;margin:auto;}
.upgicon.icon1 cite{background-position:-6px -1px;height:28px;width:22px;}
.upgicon.icon2 cite{background-position:-6px -30px;width:21px;height:23px;}
.upgicon.icon3 cite{background-position:-6px -57px;width:22px;height:25px;}
.upgicon.icon4 cite{background-position:-5px -86px;width:24px;height:22px;}
.upgicon.icon5 cite{background-position:-5px -146px;width:21px;height:21px;}
.upgicon.icon6 cite{background-position:-5px -113px;width:24px;height:22px;}
.upgicon.icon7 cite{background-position:-3px -173px;width:28px;height:20px;}
.upgicon.icon8 cite{background-position:-34px -172px;width:28px;height:22px;}
.upg_like cite{background-position:-5px -36px;width:18px;height:14px;}
.upg_top span{color:#fff;font-size:18px;color:#fff;line-height:64px;display:inline-block;vertical-align:top;padding:0 0 0 5px;}
.upgtxt{color:#fff;font-size:18px;color:#fff;line-height:64px;display:inline-block;vertical-align:middle;padding:0 0 0 5px;max-width:640px;}
.upg_top .upgtxt2 span{color:#fff;font-size:20px;font-weight:500;color:#fff;line-height:28px;display:block;vertical-align:top;text-align:left;padding:0 0 0 5px;margin:-2px 0 0;}
.upg_top .upgtxt3 span{padding-top:8px;}
.upg_top .upgtxt2 em{font-style:normal;font-size:15px;color:#fff;line-height:21px;display:block;clear:both;padding:0 0 0 5px;text-align:left;}
.upgrade_main{float:left;margin:0;width:100%;position:relative;}
.upg_block1{background:#fff;float:left;height:100%;margin:20px 0 0 0;width:100%;border-radius:8px;border:1px solid #bdc2cf;position:relative;box-shadow:1px 3px 3px #c4c7d1;}
.upg_left{float:left;width:574px;padding:25px 30px 30px 30px;background:#fff;border-radius:8px 0 0 8px;}
.pkg_title{display:block;text-transform:uppercase;font-size:16px;position:relative;padding:0 0 8px;}
.pkg_block .pkg_title{margin:0 0 0 25px;}
.pkg_title:before{position:absolute;content:"";width:135px;color:#000;left:0;bottom:0;border-top:1px solid #000;}
.pkg_details{background:#fdffff;float:left;height:58px;margin:27px 25px 0;width:315px;border:1px solid #d3d8e6;border-radius:5px;line-height:32px;position:relative;box-sizing:border-box;padding:12px 0 12px 26px;cursor:pointer;height:60px;box-sizing:border-box;box-shadow:2px 2px 4px rgba(155, 159, 170, 0.2);}
.pkg_Newblock .pkg_details{padding:12px 0 12px 10px;}
.pkg_details:hover{border-color:#fe6d00;}
.mon_no{float:left;color:#000;font-size:15px;width:155px;line-height:34px;}
.pkg_Newblock .mon_no{line-height:18px;font-size:13px;font-family:roboto_m;}
.upg_plan .mon_no{display:inline-grid;line-height:20px;font-size:12px;margin-top:2px;}
.mon_no cite{font-style:normal;font-size:18px;display:inline-block;}
.mon_no small{display:block;color:#757575;padding:2px 0 0 17px;}
.selected .mon_no small{color:#fff;}
.save_per{color:#479a3a;font-size:12px;border:1px solid #479a3a;border-radius:19px;height:24px;line-height:24px;width:74px;text-align:center;float:left;margin:4px 0 0;}
.sel_code{float:right;text-transform:uppercase;font-size:16px;color:#fe6d00;margin:0 0 0 0;display:none;line-height:32px;}
.selected{background:#ff6000;border-color:#ff6000;}
.selected .mon_no{color:#fff;}
.selected .save_per{color:#fff;border-color:#fff;}
.selected .sel_code{color:#fff;}
.tick_icon{background:url("https://imgassets.quackquack.co/sprite-upgv5.png") no-repeat -43px -74px;height:53px;position:absolute;right:-28px;top:-7px;width:53px;}
.ben_right{float:right;padding:25px 34px 0 0;width:286px;}
.ben_list{width:100%;box-sizing:border-box;float:left;padding:0 0 25px 28px;}
.ben_list li{color:#000;font-size:16px;line-height:16px;float:left;width:100%;padding:21px 0 0;}
.ben_list li small{width:28px;height:30px;display:inline-block;vertical-align:middle;position:relative;}
.ben_list li span{display:inline-block;vertical-align:middle;width:508px;padding:0 0 0 12px;}
.ben_list li small cite{background:url("https://imgassets.quackquack.co/sprite-upgv5.png") no-repeat -5px -3px;width:21px;height:23px;bottom:0;height:24px;left:0;margin:auto;position:absolute;right:0;top:0;}
.ben_list li .send_ico cite{background-position:-2px -1px;height:30px;width:28px;}
.ben_list li .like_ico cite{background-position:-6px -31px;width:22px;height:22px;}
.ben_list li .visit_ico cite{background-position:-6px -57px;width:22px;height:25px;}
.ben_list li .see_ico cite{background-position:-5px -86px;width:24px;height:22px;}
.ben_list li .view_ico cite{background-position:-5px -146px;width:21px;height:21px;}
.ben_list li .msg_ico cite{background-position:-6px -113px;width:21px;top:-1px;height:22px;margin:0 0 0 2px;}
.ben_list li .hide_ico cite{background-position:-3px -173px;height:20px;width:28px;}
.ben_list li .chat_ico cite{background-position:-34px -172px;height:22px;width:28px;}
.pkg_block{float:left;width:360px;padding:23px 0;}
.upgrade_block{float:left;margin:55px 0 0;}
.cards_cont{clear:both;padding:20px 0 0;}
.cards_block{float:left;width:135px;}
.cards_block .tabs{float:left;margin:0;width:100%;}
.cards_block .tabs li{width:100%;}
.cards_block .tabs li a{padding:12px 0 12px 12px;line-height:19px;display:block;border:1px solid #fff;border-right:none;}
.cards_block .tabs li a.active{background:#fff;border:1px solid #d3d8e6;border-radius:5px 0 0 5px;border-right:none;position:relative;margin:0 -1px 0 0;}
.upgradeContent .custom-radio{border:none;width:19px;height:19px;background:url("https://imgassets.quackquack.co/sprite-upgv5.png") no-repeat -105px -4px;}
.upgradeContent .custom-radio{border:none;width:19px;height:19px;background:url("https://imgassets.quackquack.co/sprite-upgv5.png") no-repeat -105px -31px;}
.upgradeContent .custom-radio.selected{background-position:-25px -66px;}
.cards_block ul li cite{color:#767676;font:500 14px/19px roboto_r;padding:0 0 0 10px;}
.cards_block ul li a.active cite,.cards_block ul li:hover a cite{color:#000;}
.card_desc{float:left;width:417px !important;background:#fff;padding:0 0 20px 20px;border:1px solid #d3d8e6;border-radius:5px;min-height:310px;box-shadow:1px 1px 2px rgba(211, 216, 230, 0.8);}
.card_desc .tabBlock{width:413px !important;display:none;height:320px !important;}
.credit_block h6,.cheque_block h6,.select_wallet h6,.net_banking h6{color:#000;font:400 18px/19px roboto_r;}
.upgradeContent .credit_block .custom-radio{width:24px;height:24px;background-position:-91px -71px;float:left;}
.upgradeContent .credit_block .custom-radio.selected{background-position:-63px -71px;}
.select_card{font-size:0;padding:11px 0 0;overflow:hidden;}
.visa_card{float:left;margin:0 30px 0 0;}
.visaIcon{background:url("https://imgassets.quackquack.co/upgrade-img.png") no-repeat -116px -69px;width:47px;height:30px;display:inline-block;margin:0 0 0 6px;}
.masterCard{background-position:-90px -1px;}
.amex{background-position:-90px -37px;}
.cardNumber{clear:both;padding:10px 0 0;}
.credit_block label{float:left;font:400 14px/40px roboto_r;color:#6b7085;cursor:pointer;width:108px;text-align:left;}
.cardField{float:left;box-sizing:border-box;height:40px;display:block;margin:0;width:280px;}
.upi_block{padding:16px 0 0;clear:both;}
.upi_block .cardField{position:relative;width:260px;}
.upi_block .cardField > small{background:#f6f7fa;border-right:1px solid #d3d8e6;height:38px;left:1px;line-height:38px;position:absolute;text-align:center;top:1px;width:39px;}
.upi_block3 .cardField input{padding-left:50px;}
.upi_block label{color:#6b7085;cursor:pointer;display:block;float:left;font:400 14px/37px roboto_r;text-align:left;width:135px;}
.upi_block2 label{line-height:16px;padding:5px 0 0;}
.upi_block2{padding:16px 0 0;}
.upi_cont p{clear:both;font:400 12px/17px roboto_r;padding:20px 0 0;width:100%;}
.cardField input{outline:none;border:1px solid #d3d8e6;display:block;width:100%;padding:5px 10px;box-sizing:border-box;height:40px;color:#000000;font-size:16px;}
.cardField .code_isd input{height:38px;line-height:20px;padding:0;text-align:center;width:38px;border:none;}
.upgradeContent .credit_block .custom-radio input[type="radio"]{width:20px;height:20px;}
.date_block{clear:both;padding:18px 0 0;}
.expiry_date{float:left;width:278px;}
.cvv_field{float:left;width:112px;}
.payment-btn{border:none;width:100%;margin:18px 0 0;cursor:pointer;font-family:roboto_r;}
.conditions{padding:6px 0 0;clear:both;}
.conditions span{float:left;color:#7f7f7f;padding:5px 0 0;}
.conditions .lockIcon{background:url("https://imgassets.quackquack.co/upgrade-img.png") no-repeat -67px 0;float:left;width:20px;height:26px;margin:2px 6px 0 0;}
.conditions strong{float:right;}
.benifits{float:left;width:100%;margin:40px 0 0;background:#fff;box-shadow:0 1px 1px 0 rgba(0, 0, 0, 0.06), 0 0px 5px 0 rgba(0, 0, 0, 0.2);}
.benifit_titles{overflow:hidden;padding:15px 15px;}
.title1{font:400 20px/28px roboto_r;color:#000;float:left;width:534px;}
.title2{color:#0391dc;width:190px;text-align:center;}
.cardNumber2 label{float:left;}
.cardsImgs{float:right;font-size:0;}
.banks_list{clear:both;padding:10px 0 0;}
.banks_list li{border:1px solid #e2e2e2;margin:6px 16px 0 0;float:left;width:118px;height:40px;cursor:pointer;position:relative;}
.banks_list li:before{border:1px solid #44b8f6;position:absolute;width:120px;height:42px;content:' ';left:-2px;top:-2px;display:none;}
.banks_list li:hover:before,.banks_list li.active:before{display:block;}
.banks_list li span{position:absolute;left:0;top:0;right:0;bottom:0;margin:auto;}
.banks_list li label{padding:10px 15px;cursor:pointer;background:#fff;}
.banks_list li .custom-radio{margin:0 15px 0 0;float:left;}
.icici_bank{background:url("https://imgassets.quackquack.co/banks_img.png") no-repeat 0 0;float:left;width:105px;height:26px;}
.hdfc{background-position:0 -29px;height:21px;margin:5px 0 0;}
.axisbank{background-position:0 -50px;}
.sbi{background-position:0 -78px;}
.kotakbank{background-position:0 -105px;}
.yesbank{background-position:0 -137px;height:37px;margin:-9px 0 -3px;}
.mobikwik{background:url("https://imgassets.quackquack.co/banks_img.png") no-repeat 0 -182px;float:left;width:138px;height:42px;margin:0 0 0 10px;}
.citrus{background-position:0 -228px;width:102px;}
.banks_list li:hover{border-color:#44b8f6;}
.cheque_block p{font:400 14px/23px roboto_r;padding:10px 0 0;width:100%;clear:both;}
.select_wallet .custom-radio{margin:10px 0 0;float:left;}
.select_wallet .visa_card{margin:10px 40px 0 0;cursor:pointer;}
.select_wallet .citrusIcon{float:left;}
.select_wallet .payment-btn{margin-top:20px;}
.styled-select{height:40px;width:69px;margin:0;border:1px solid #d3d8e6;float:left;position:relative;overflow:hidden;}
.card_imgs{cursor:pointer;}
.styled-select select{width:140%;height:38px;background:none;border:none;color:#000;font-size:14px;padding:0 0 0 5px;float:left;}
#tab4 .styled-select select{font-size:14px;}
.styled-select::after{border-bottom:2px solid #b6b9c7;border-right:2px solid #b6b9c7;content:" ";height:5px;position:absolute;right:8px;top:14px;transform:rotate(45deg);width:5px;pointer-events:none;}
.custom-radio{width:20px;height:19px;position:relative;z-index:1;top:0;background:#fff;border-radius:50%;float:left;background:url("https://imgassets.quackquack.co/sprite-upgv5.png") no-repeat -104px -3px;}
.custom-radio.selected ,.cards_block .tabs li a.active .custom-radio{background:url("https://imgassets.quackquack.co/sprite-upgv5.png") no-repeat -106px -31px;}
.custom-radio input[type="radio"]{margin:1px;position:absolute;z-index:2;cursor:pointer;outline:none;opacity:0;}
.pkg_title2{width:80px;margin:0 auto;text-align:center;}
.pkg_title2:before{width:85px;left:0;margin:0 0 0 4px;}
.cardType{clear:both;padding:14px 0 10px;overflow:hidden;}
.cards_main{float:left;width:200px;padding:0;}
.cards_main span{background:url("https://imgassets.quackquack.co/sprite-upgv5.png") no-repeat -143px -5px;width:40px;height:24px;float:left;margin:0 8px 0 0;}
.cards_main span.visa{background-position:-143px -6px;}
.cards_main span.master{background-position:-143px -36px;}
.cards_main span.amex{background-position:-143px -65px;}
.cards_main span.meastro{background-position:-143px -95px;}
.cards_main span.rupay{background-position:-143px -125px;}
.cardType label{line-height:20px;width:122px;}
.cvv_field .cardField{width:70px;}
.cvv_field label{width:40px;}
.yearField{margin:0 0 0 10px;}
.update_premium{background:#ff5a19;height:56px;line-height:56px;color:#fff;width:280px;margin:20px 25px 0 0px;border:none;border-radius:5px;font-size:18px;text-transform:uppercase;text-align:center;cursor:pointer;float:right;}
.update_premium:hover{background:#f24805;}
.pull-left{float:left;}
.upi_upg{width:259px;margin:20px 19px 0 0px;}
.select_atm{}
.select_atm h6{color:#6b7085;font-size:14px;padding:16px 0 0;}
.select_atm .styled-select{width:280px;margin:15px 0 0;}
.select_atm .update_premium{margin-left:0;}
.select_wallet2{padding:0;clear:both;}
.benifits{float:left;width:100%;}
.sum_block{float:left;width:284px;margin:44px 0 0;box-sizing:border-box;border:1px solid #d4d8e6;min-height:230px;position:relative;background:#fff;}
.have_dct{color:#0391dc;font:500 14px/26px roboto_r;display:block;padding:26px 0 0 18px;cursor:pointer;float:left;width:100%;}
.dct_code{border:1px solid #0394de;border-radius:2px;width:260px;display:block;background:#fafafa;background:#fafafa;display:none;float:left;margin:15px 10px 0;}
.dct_field{background:none;border:none;outline:none;padding:6px;width:160px;font:400 16px/28px roboto_r;}
.apply_btn{background:#0394de;border:none;cursor:pointer;font:400 16px/40px roboto_r;color:#fff;float:right;border-radius:0 1px 1px 0;padding:0 15px;text-transform:uppercase;}
.title_top2{text-align:left;}
.content2{margin:0;}
.myprefer{margin-bottom:20px;border-radius:8px;}
.pkg_title3{color:#6b7085;text-align:center;padding:16px 0 8px;}
.pkg_title3:before{width:84px;left:50%;border-color:#6b7085;margin:0 0 0 -42px;}
.benifits_block{float:left;width:588px;padding:25px 0 0;border-right:1px solid #d3d7da;}
.no_mon{width:100%;box-sizing:border-box;padding:30px 17px 0 17px;}
.no_mon small{float:left;width:155px;color:#6b7085;font-size:14px;}
.no_mon small cite{display:block;font-style:normal;}
.no_mon strong{float:right;font-size:16px;color:#000;line-height:13px;}
.pay_amt{position:absolute;bottom:0;left:0;background:#6d7c85;padding:15px 18px;box-sizing:border-box;color:#fff;font-size:14px;width:100%;}
.pay_amt small{float:left;}
.pay_amt strong{float:right;font-size:16px;line-height:13px;}
.upg_btm{clear:both;padding:13px 0;}
.btm_cnt{clear:both;overflow:hidden;}
.btm_cnt span{float:left;font-size:12px;color:#6b7085;}
.btm_cnt small{float:right;font-size:12px;color:#6b7085;width:350px;text-align:right;}
.visaImg{background:url("https://imgassets.quackquack.co/sprite-upgv5.png") no-repeat -97px -190px;width:230px;height:38px;float:left;}
.rupee_sym{background:url("https://imgassets.quackquack.co/icons-spritev13.png") no-repeat -15px -490px;width:11px;height:18px;display:inline-block;vertical-align:middle;}
.small_ruppesym{background:url("https://imgassets.quackquack.co/rupee_upg.png")no-repeat -11px -3px;width:11px;height:12px;display:inline-block;}
.rupee_sym2{background:url("https://imgassets.quackquack.co/sprite-upgv5.png") no-repeat -59px -209px;width:9px;display:inline-block;height:16px;vertical-align:top;}
.rupee_sym3{background-position:-48px -209px;height:16px;}
.selected .rupee_sym{background:url("https://imgassets.quackquack.co/sprite-upgv5.png") no-repeat -29px -210px;width:11px;height:16px;display:inline-block;vertical-align:middle;}
.upg_plan.selected .rupee_sym{background-position:0 0;}
.upg_plan.selected .small_ruppesym{background-position:-11px -3px;}
.upg_plan{background:#ffffff;border-radius:4px;border-left:5px solid #f25745;display:inline-block;padding-left:10px;height:65px;}
.upg_plan.selected{border:none;}
.upg_plan:hover{border-color:transparent;}
.upg_plan.selected .mon_no{color:#000;}
.upg_plan.selected .payof{color:#919499;}
.pkg_block .upg_plan1{border-left:5px solid #93cc2f;}
.pkg_block .upg_plan2{border-left:5px solid #f25647;}
.pkg_block .upg_plan3{border-left:5px solid #feb400;}
.pkg_block .upg_plan4{border-left:5px solid #828081;}
.pkg_block .upg_plan5{border-left:5px solid #828081;}
.pkg_block .upg_plan1:active, .pkg_block .upg_plan1:hover, .pkg_block .upg_plan1.selected{box-shadow:0px 0px 0px 2px #93cc2f inset;}
.pkg_block .upg_plan2:active,.pkg_block .upg_plan2:hover, .pkg_block .upg_plan2.selected{box-shadow:0px 0px 0px 2px #f25647 inset;}
.pkg_block .upg_plan3:active,.pkg_block .upg_plan3:hover,.pkg_block .upg_plan3.selected{box-shadow:0px 0px 0px 2px #ffb400 inset;}
.pkg_block .upg_plan4:active,.pkg_block .upg_plan4:hover, .pkg_block .upg_plan4.selected{box-shadow:0px 0px 0px 2px #828081 inset;}
.pkg_block .upg_plan5:active,.pkg_block .upg_plan5:hover, .pkg_block .upg_plan5.selected{box-shadow:0px 0px 0px 2px #828081 inset;}
.best_value{background:#f65249;color:#fff;font-size:12px;border-radius:2px;line-height:22px;position:absolute;top:10px;left:108px;padding:0 5px;}
.most_pop{background:#f98b05;left:96px;}
.permon{display:inline-block;font-size:22px;line-height:18px;float:right;margin-right:10px;text-align:right;margin-top:2px;}
.permon span{font-size:13px;}
.payof{color:#8f9091;font-size:14px;}
.selected .payof{color:#ffffff;}
.dct_success{padding:25px 17px 0 15px;position:relative;float:left;box-sizing:border-box;width:100%;}
.dct_success span{color:#6b7085;padding:0;float:left;font-size:14px;line-height:23px;}
.dct_success strong{float:right;font-size:16px;}
.upgcnt{margin:10px auto 15px;clear:both;overflow:hidden;width:540px;text-align:center;font-size:0;padding:10px 30px 0;overflow:hidden;border-top:1px solid #d6d8e7;}
.upgcnt span{display:inline-block;font-size:12px;color:#6b7085;line-height:33px;vertical-align:top;}
.social_block{display:inline-block;margin:0 0 0 10px;padding:5px 0 0;vertical-align:middle;width:104px;}
.fb-like.fb_iframe_widget{display:inherit;float:left;margin:0 0 0 0;width:118px;border-left:1px solid #d6d8e7;}
.fb-like.fb_iframe_widget span{padding-left:0;}
.social_block2{display:inline-block;margin:0;padding:12px 0 0;vertical-align:middle;width:100%;}
.social_block2 .fb-like.fb_iframe_widget{border-left:1px solid #d6d8e7;display:block;margin:6px auto;width:90px;float:none;}
.cardnofield label{clear:both;display:block;padding:15px 0 0;color:#6b7085;}
.cardnofield .cardField{width:324px;margin:14px 0 0;position:relative;}
.ab_main{box-sizing:border-box;margin:10px 0 30px;padding:0 20px 25px;overflow:hidden;background:#fdffff;border-radius:8px;box-shadow:4px 4px 4px -3px #bebfc3;}
.aboutqq{padding:5px 15px;margin:76px 0 0;}
.aboutqq ul{margin:0;padding:5px;}
.aboutqq h3{clear:both;color:#2d2d2d;font-size:16px;padding:20px 0 0;}
.aboutqq p{color:#2d2d2d;float:left;font-size:15px;line-height:22px;margin:16px 0 0;text-align:justify;}
.aboutqq a{text-decoration:none;color:#7d96d9;}
.aboutqq ul li{color:#2d2d2d;list-style-type:none;list-style-type:numeric;margin:15px 10px;}
.tabs-privacy{width:100%;background:#edeef3;}
.font{font-size:14px;line-height:22px;}
.tab-links{padding:5px 0 0;width:965px;margin:0 auto;text-align:center;position:fixed;}
.tab-links:after{display:block;clear:both;content:'';}
.tabs-privacy{clear:both;width:100%;}
.tab-links li{width:25%;float:left;}
.privacyqq{margin-top:125px;padding:0;}
.tab-links a{padding:15px 0;display:inline-block;border-radius:3px 3px 0px 0px;font-size:16px;font-weight:600;color:#838ca8;background:none;transition:all linear 0.15s;text-decoration:none;}
.tab-links a:hover{color:#5394e4;}
li.active a, li.active a:hover{color:#5394e4;}
.n-text li{margin-top:10px;}
.donts li{margin:10px !important;}
.donts li ul li{margin-bottom:0px !important;}
.tab{display:none;}
.tab.active{display:block;}
 .tab-content{border-radius:3px;text-align:justify;padding:0;margin-top:10px;}
.tab{display:none;}
.tab.active{display:block;}
.donts{padding-left:15px;margin:0px;}
.donts li{list-style-type:numeric;margin:15px 10px;}
.tab-content h3{margin:5px 0;}
.aboutqq ul.tab-links{background:#edeef3;top:68px;padding:5px 0;}
.aboutqq ul.tab-links li{margin:0;width:180px;list-style:none;text-align:left;}
.myphto_block2{padding-top:40px;}
.inboxempty{margin-bottom:-26px;}
.emptychat{padding:35px 0 50px;}
.emptychat p strong{color:#000;font-weight:400;}
.emptychat p img{width:32px;vertical-align:middle;}
.inboxempty small{margin-left:-25px;}
.myphotosBlock .editphoto2{float:left;}
.myphotosBlock .editphoto2 .plus_symbol{z-index:99999;position:relative;}
.icons_block span.accept_btn{background:#0bca60;}
.icons_block span.accept_btn:hover{background:#00b850;}
.chat_icons{padding:13px 50px;width:609px;}
.chat_icons.icons_block span.accept_btn{float:right;}
.minmsg_error,.about_error,.msg_block .error{padding:26px 0 0;position:absolute;text-align:center;width:100%;left:0;}
.not_specify{color:#2d2d2d;float:left;font-size:16px;font-weight:500;line-height:20px;padding:3px 0 0;width:85%;}
.photoedit{position:relative;z-index:99999;}
.name_Block{float:left;width:100%;}
.online_title .name_Block{min-height:28px;}
.online_title .designation{margin:-2px 0 0;}
.online_title{padding:0;}
.btn_vld1{float:left;width:100%;padding:5px 0 0;}
.empty_photos{min-width:550px;min-height:430px;}
.styled-select.select_debit{margin:15px 0 0;width:322px;}
.code_isd{background:#f6f7fa;border-right:1px solid #d3d8e6;height:38px;left:1px;line-height:38px;position:absolute;text-align:center;top:1px;width:39px;}
.cardField input.atm_field{padding-left:50px;}
.ewallet{position:relative;}
.debit_block .styled-select.select_debit{width:278px;margin:0;}
.debitdetails{padding:10px 0 0;clear:both;}
.debit_block .cardNumber{padding:0;}
.debit_block .error{padding:0;}
.debit_block .date_block{padding:10px 0 0;}
.credit_block{float:left;width:100%;}
.cardnofield2 .cardField{margin:0;}
.pkg_details .radio_btn{background:url("https://imgassets.quackquack.co/sprite-upgv5.png") no-repeat -71px -162px;float:right;width:26px;height:27px;margin:3px 12px 0 15px;}
.pkg_details .btn_lft{float:left;margin:3px 12px 0 0px;}
.pkg_details.selected .radio_btn{background-position:-71px -134px;}
.message_block{box-sizing:border-box;float:left;padding:0 20px;width:100%;}
.deleteMsg{width:450px;}
.deleteMsg .thnksbtn{padding:15px 0 0;}
.benifits_block .pkg_title2{margin:0 0 0 28px;}
.testimonialBlock{padding:35px 0;clear:both;overflow:hidden;border-top:1px solid #d6d8e7;}
.flexslider,.flexslider2{float:left;margin:12px 0 0;position:relative;width:100%;}
.flexslider .slides img{height:auto;max-width:100%;}
.flex-viewport{max-height:2000px;}
.flex-control-nav{bottom:-40px;display:none;float:left;margin:25px 0 35px;padding:0;text-align:center;width:100%;z-index:999;}
.flex-control-paging li{display:none;}
.testimonial, .slides{float:left;margin:0;padding:0;width:100%;}
.slides li{display:none;list-style:outside none none;width:100%;}
.slideImg{border-radius:50%;display:inline-block;overflow:hidden;vertical-align:middle;width:86px;height:86px;}
.slideImg img{max-width:100%;}
.test_cont{display:inline-block;margin:0;vertical-align:middle;width:90%;}
.test_cont p{clear:both;color:#474747;font-size:13px;padding:0 0 0 10px;line-height:22px;}
.test_cont span{color:#000000;display:block;float:left;font-size:13px;padding:22px 0 0 10px;width:100%;}
.testimonialBlock h3{color:#000;text-transform:uppercase;float:left;font-size:16px;font-weight:bold;margin:0;padding-left:0;}
.msg_single{background:#30b21f;width:150px;height:46px;padding:8px 0;line-height:30px;margin-top:-5px;cursor:pointer;box-sizing:border-box;border-radius:25px;display:inline-block;}
@keyframes bounceIn4{from, 60%, 80%, to{animation-timing-function:cubic-bezier(0.215, 0.610, 0.355, 1.000);}
 0%{opacity:0;transform:scale3d(.5, .5, .5);}
 60%{opacity:1;transform:scale3d(1.1, 1.1, 1.1);}
 80%{transform:scale3d(.8, .8, .8);}
 to{opacity:1;transform:scale3d(1, 1, 1);}
}
.bounceIn4{-webkit-animation-name:bounceIn4;animation-name:bounceIn4;animation:bounceIn4 0.3s ease;}
.msg_single:hover{background:#339113;}
.msg_single small{display:inline-block;height:20px;vertical-align:top;margin:7px 0 0;width:22px;}
.msg_single cite{color:#ffffff;display:inline-block;font-size:14px;font-style:normal;padding:0 0 0 7px;font-weight:500;text-transform:uppercase;}
.tourBlock{float:left;width:100%;}
.block_demo{position:fixed;bottom:60px;height:370px;width:708px;margin:0 0 0 230px;}
.gotitbtn{border:1px solid #fff;width:200px;text-align:center;display:block;margin:0 auto;height:74px;line-height:74px;font-size:29px;color:#fff;cursor:pointer;}
.gotitbtn:hover{background:#666;}
.popleft{border:none;}
.popcont{padding:10px 0 0;position:relative;width:708px;}
.tourBottom{padding:100px 0 0;clear:both;}
.hidebtm{float:left;width:220px;margin:0 0 0 100px;}
.demotxt{font-size:17px;color:#fff;line-height:20px;display:block;}
.demo_arrow{display:block;background:url("https://imgassets.quackquack.co/demoicon-sprite.png") no-repeat -14px -4px;width:46px;height:114px;margin:10px 0 0 20px;}
.demotxt2{padding:38px 0 0;text-align:center;width:107px;}
.demo_arrow2{background:url("https://imgassets.quackquack.co/demoicon-sprite.png") no-repeat -85px -4px;display:block;height:71px;margin:10px 0 0 40px;width:32px;}
.hidebtm2{margin:0;width:260px;}
.demo_arrow3{background:url("https://imgassets.quackquack.co/demoicon-sprite.png") no-repeat -145px -4px;display:block;height:114px;margin:10px 0 0 10px;width:52px;}
.hidebtm3{margin:0;width:100px;}
.btmblock2.likebtmblock .icons_block span,.btmblock2.skipbtmblock .icons_block span{float:none;}
.loadtxt{width:100px;text-align:center;font-size:13px;padding:0 0 0 12px;}
.album_photos li.fbphoto{height:75px;padding:10px 0 5px;min-width:100px;}
.reportBlock .error{text-align:center;}
#popupdata .carousel-control.right,#content_popup .carousel-control.right{right:15px;}
.tabBlock .error{padding:0 0 0 108px;line-height:22px;}
.tabBlock .net_banking .error,.tabBlock .select_atm .error{padding:0;}
.tabBlock .select_atm.upi_cont .error{padding:0 0 0 136px;}
.foobar-wrapper.top{z-index:99999999;height:0px !important;top:55px !important;}
.booster_title h3{margin:20px 0 0;font-size:15px;text-align:center;width:100%;display:inline-block;color:#717276;font-family:roboto_m;font-weight:normal;}
.foobar-shadow{display:none !important;}
.foobar-container{box-shadow:0px 2px 3px 0px rgba(0, 0, 0, 0.3);}
.rotate_testim{display:inline-block;margin:15px 0;font-family:roboto_r;}
.rotate_testim .utx{font-size:13px;color:#7b7b83;line-height:20px;width:220px !important;font-weight:500;}
.rotate_testim .mtx{font-size:13px;width:220px !important;font-weight:500;}
.mmbu{font-weight:500;line-height:30px;font-size:14px;}
.webicons{background:url(https://imgassets.quackquack.co/icons-spritev13.png) no-repeat -340px -347px;}
.quotes{width:13px;height:12px;margin-left:8px;margin-top:9px;}
.rotate_testim .circle{border-radius:50%;-moz-border-radius:50%;-webkit-border-radius:50%;display:inline-block;position:static;}
.rotate_testim .test{width:29px;height:29px;background:#f46195;float:left;}
.indication{float:right;clear:both;padding:6px 3px 0 0;display:block;}
.indication2{padding-top:5px;}
.txt_unread{float:right;color:#8f929a;font-size:12px;}
.unread_tick{float:right;background:url(https://imgassets.quackquack.co/chatimg3.png) no-repeat -212px -9px;width:12px;margin:0 0 0 5px;height:18px;}
.online_ico{background:#5a97e4;width:10px;height:10px;margin:2px 3px 0 5px;border-radius:10px;float:right;}
.inboxTop{position:absolute;right:0;top:56px;}
.request_icon{float:right;background:url(https://imgassets.quackquack.co/chatimg3.png) no-repeat -212px -8px;width:12px;margin:0px 0 0 5px;height:18px;}
.intb_ico{background: url(https://imgassets.quackquack.co/chatimg3.png) no-repeat -264px -10px;width: 18px;height: 16px;}
.magic_ico{background: url(https://imgassets.quackquack.co/chatimg3.png) no-repeat -234px -10px;width: 18px;height: 16px;}
.charequestmain{float:left;width:100%;}
.chatrequestBlock .user_msg{margin-right:0;max-width:360px;}
.chat_btm{position:fixed;bottom:34px;height:65px;background:#fff;width:438px;border-top:1px solid #e5e7ed;padding:15px 0 0;}
.declineBtn{width:140px;display:inline-block;height:25px;position:relative;cursor:pointer;text-align:center;background:#878d93;border-radius:40px;padding:12px 0;margin:0 30px 0 62px;vertical-align:middle;color:#fff;line-height:25px;font-size:15px;}
.declineBtn:hover{background:#5e6062;}
.acceptBtn{background:#0bca5f;margin:0 62px 0 0;}
.acceptBtn:hover{background:#03b551;}
.progressbox .transparent{z-index:9999999;}
.fbphotoloader{position:inherit;}
.progressbox .loader{position:inherit;}
.fbphotocont{clear:both;width:100%;float:left;margin:-110px 0 0;}
.clr_upg{margin:55px 0 0;float:left;width:100%;}
.coupon_apply{background:#0bca60;color:#fff;font-size:17px;text-align:center;padding:12px 0;}
.error_validcode{padding:0 0 6px 10px;line-height:25px;}
.interest_txt{display:block;width:100%;text-align:center;color:#666;font-size:16px;display:table-cell;vertical-align:middle;float:none;padding:0 10px;}
.icons_block .interest_txt{line-height:65px;display:inline-block;}
#booster_popup .invite_txt{padding:10px 50px 0;}
.msg_single small img{display:none;}
.msg_single small{background:url(https://imgassets.quackquack.co/icons-spritev13.png) no-repeat -151px -25px;background-size:250px 365px;width:22px;height:27px;margin:1px 0 0;}
.btn_vld{margin-bottom:20px;clear:both;width:100%;color:#30b21f;float:left;margin:-20px 0 20px 96px;}
.btn_vld.error{color:#f00;}
.empty_matches{margin-left:0;}
.empty_inbox p img{vertical-align:middle;margin:-8px 2px 0;}
.popup.progressbox{background:rgba(0,0,0,0.7);}
#statustxt{float:left;width:100%;text-align:center;color:#fff;top:50%;position:absolute;margin:33px 0 0;}
.inter_txt{float:left;position:relative;font-size:15px;padding:0 15px 0 6px;line-height:46px;width:157px;}
.inter_txt:after{border-bottom:1px solid #999eab;border-right:1px solid #999eab;content:" ";height:6px;position:absolute;right:2px;top:21px;transform:rotate(-39deg);width:6px;}
.inter_txt small{white-space:nowrap;overflow:hidden;max-width:76px;float:left;text-overflow:ellipsis;}
.interestblock{cursor:pointer;margin-top:15px;}
.demo_main{position:fixed;bottom:78px;height:90px;width:708px;margin:0 0 0 250px;}
.like_demo{animation:bounceIn2 0.2s ease;}
.demo_block{background:#0072ff;border-radius:4px;margin:0 auto;width:525px;position:relative;height:60px;box-shadow:0px 2px 2px 0px rgba(0, 0, 0, 0.35);}
.demo_block{background:#003995;}
.blue_arrow{left:50%;background:url(https://imgassets.quackquack.co/sprite3-demo.png) no-repeat -284px -40px;width:42px;height:20px;position:absolute;bottom:-11px;margin:0 0 0 -20px;}
.demotext{font-size:17px;color:#fff;padding:6px 15px 0 35px;line-height:22px;}
.tick_demno{background:url(https://imgassets.quackquack.co/sprite3-demo.png) no-repeat -308px -8px;width:19px;height:15px;display:inline-block;margin:-2px 1px 0 1px;vertical-align:middle;}
.cross_icon{background:url(https://imgassets.quackquack.co/sprite3-demo.png) no-repeat -281px -6px;width:17px;height:17px;display:inline-block;margin:-2px 1px 0 1px;vertical-align:middle;}
.demo_img{background:url(https://imgassets.quackquack.co/sprite3-demo.png) no-repeat -168px -6px;width:55px;position:absolute;top:-15px;left:-20px;height:50px;}
.demopopup2{position:relative;width:708px;z-index:99;margin:25px 0 10px;float:right;}
.tourBlock{float:left;width:100%;}
.demo_block2{width:400px;height:60px;}
.demo_img2{background-position:-113px -6px;width:50px;height:50px;}
.demo_img3{background-position:-59px -6px;width:50px;height:50px;}
.demo_img4{background-position:-227px -6px;width:50px;height:50px;}
.demo_img5{background-position:-4px -6px;width:50px;height:50px;}
.demo_block3{width:410px;}
.demo_block4{width:400px;}
.demotext2{font-size:17px;color:#fff;line-height:22px;padding:20px 25px 20px 35px;}
.demotext2 a{color:#fff;}
.okbtn{width:88px;height:30px;border:1px solid #fff;border-radius:20px;text-align:center;display:inline-block;vertical-align:top;margin:-5px 0 0 10px;color:#fff;line-height:30px;cursor:pointer;text-transform:uppercase;}
.ok_btn{width:88px;height:30px;background:#0072ff;border:1px solid #fff;border-radius:20px;text-align:center;display:inline-block;vertical-align:top;margin:-39px 0 0 0;color:#fff;line-height:30px;cursor:pointer;position:absolute;right:-190px;}
.okbtn:hover{background:#fff;color:#0072ff;}
.demotext2 strong{font-weight:400;display:inline-block;}
.demotext3{padding-right:0;}
.demotext4{padding-left:45px;padding-top:18px;}
.slideTop{animation:slideTop 0.15s ease;}
@keyframes fadeInUp{from{opacity:0;transform:translate3d(0, 100%, 0);}
 to{opacity:1;transform:none;}
}
@-webkit-keyframes fadeInUp{from{opacity:0;transform:translate3d(0, 100%, 0);}
 to{opacity:1;transform:none;}
}
.bounceIn2{animation:bounceIn2 0.2s ease;}
.bounceIn3{animation:bounceIn2 0.2s ease;}
.fadeInUp{animation-name:fadeInUp;animation-duration:0.2s;animation-fill-mode:both;}
@keyframes slideTop{0%{margin-bottom:-25px;}
 100%{margin-bottom:0;}
}
@-webkit-keyframes slideTop{0%{margin-bottom:-25px;}
 100%{margin-bottom:0;}
}
@keyframes bounceIn2{0%{transform:scale(0.75, 0.75);}
 100%{transform:scale(1.0, 1.0);}
}
@-webkit-keyframes bounceIn2{0%{transform:scale(0.75, 0.75);}
 100%{transform:scale(1.0, 1.0);}
}
@keyframes fadeOut{from{opacity:1;}
 to{opacity:0;}
}
.user_onboarding{position:fixed;bottom:90px;left:25px;right:25px;z-index:8;}
.fadeOut{animation-name:fadeOut;animation-duration:0.2s;animation-fill-mode:both;}
.slideTop .demo_main{height:200px;}
.demo_block.fadeInUp{margin-top:-90px;}
.skip_txt{color:#000;display:block;width:100%;text-align:center;line-height:49px;font-size:15px;}
.skip_txt:hover{color:#6f6f73;}
.inbox-loader{position:absolute;left:268px;}
.chatLeft .jspVerticalBar,.msgsBlock .jspVerticalBar{width:5px;}
.txt_btm{font-size:12px;display:block;width:100%;font-weight:400;}
.msginterest{padding-bottom:35px;}
.freeupgblock{width:911px;padding:45px;box-sizing:border-box;}
.freeright{float:left;margin:0 0 0 45px;width:284px;background:#faf8e4;border:1px solid #e1dfcd;text-align:center;}
.freeLeft{float:left;width:490px;}
.freebox{background:#fdffff;float:left;height:68px;margin:0 0 24px;width:100%;padding:15px 18px 0;box-sizing:border-box;border:1px solid #d3d8e6;cursor:pointer;border-radius:3px;box-shadow:2px 2px 4px rgba(155, 159, 170, 0.2);}
.freebox:hover{border:1px solid #fe6d00;}
.coins{color:#6f6e61;font-size:22px;padding:25px 0;display:block;width:100%;font-weight:400;line-height:35px;display:block;}
.freebtm{border-top:1px solid #e1dfcd;clear:both;line-height:28px;padding:27px 0;}
.u_coins{display:block;width:100%;font-size:22px;font-weight:400;}
.u_coins strong{display:block;font-weight:500;font-size:24px;}
.more_coins{font-size:14px;color:#000;display:block;line-height:19px;}
.fbIcon{float:left;width:55px;margin:2px 0 0;}
.fbIcon em{background:url(https://imgassets.quackquack.co/sprite-upgv5.png) no-repeat -99px -75px;float:left;width:35px;height:34px;}
.frnsIco{margin:6px 0 0;}
.frnsIco em{background:url(https://imgassets.quackquack.co/sprite-upgv5.png) no-repeat -99px -114px;float:left;width:35px;height:30px;}
.boxCont{float:left;width:300px;}
.boxCont small{display:block;font-size:18px;color:#202c44;font-weight:300;}
.boxCont cite{font-size:14px;color:#8f929a;font-style:normal;display:block;padding:6px 0 0;}
.share_btn{background:#ff8100;width:135px;height:50px;border-radius:3px;float:right;margin:-7px 0 0;text-align:center;font-size:0;}
.shareIco{background:url(https://imgassets.quackquack.co/sprite-upgv5.png) no-repeat -102px -145px;width:23px;height:23px;display:inline-block;margin:12px 0 0;}
.freebox:hover .share_btn{background:#e67502;}
.sh_txt{color:#fff;font-size:16px;padding:17px 0 0 7px;font-style:normal;line-height:16px;display:inline-block;vertical-align:top;}
.refcont small{color:#4b9b2f;}
.refcont a{color:#000;display:block;padding:6px 0 0;}
.tickupgIcon{background:url(https://imgassets.quackquack.co/sprite-upgv5.png) no-repeat -62px -75px;width:30px;height:30px;margin:4px 0 0;float:right;}
.sharebox{margin:0;}
.upgLink{display:block;width:100%;clear:both;padding:30px 0 0;}
.upgLink a{background:#a4a4a4;display:block;width:280px;margin:0 auto;height:55px;line-height:55px;border-radius:4px;text-align:center;color:#fff;font-weight:400;font-size:18px;text-transform:uppercase;cursor:pointer;}
.free_error{position:absolute;bottom:16px;width:100%;text-align:center;left:0;}
.upgLink.active{background:#ff8100;}
.bothlike_strip{color:#333;text-align:center;}
.bothlike_strip span{border:2px solid #d2d8e6;padding:10px 30px;border-radius:4px;margin:10px auto;display: inline-block;min-width: 260px;}
.keep_match{cursor:pointer;}
.pkg_details .bestValueImg{background:url('https://imgassets.quackquack.co/sprite-upgv5.png') no-repeat -192px -41px;width:55px;height:32px;float:left;margin-left:8px;}
.pkg_details .mostpopularImg{background:url('https://imgassets.quackquack.co/sprite-upgv5.png') no-repeat -192px -79px;width:70px;height:34px;float:left;}
.pkg_details.selected .bestValueImg{background:url('https://imgassets.quackquack.co/sprite-upgv5.png') no-repeat -191px -3px;width:58px;height:35px;float:left;margin-left:8px;}
.pkg_details.selected .mostpopularImg{background:url('https://imgassets.quackquack.co/sprite-upgv5.png') no-repeat -192px -117px;width:70px;height:34px;float:left;}
.leftBlock ul li a cite.greendot{background:#30b21e;width:10px;height:10px;border-radius:50%;margin:0 0 0 2px;display:inline-block;vertical-align:top;margin:2px 1px 0 0;float:none;}
.onCount{float:left;margin:10px 0 0 3px;}
.leftBlock ul li a .onCount span{width:auto;font-style:normal;color:#727a8a;font-weight:500;background:none;display:inline-block;float:none;position:relative;font-size:15px;vertical-align:top;}
.onlineprofiles li{width:100%;margin:0 0 10px;float:left;padding-top:0;box-sizing:border-box;}
.profiledp{display:inline-block;vertical-align:middle;width:56px;height:56px;background-size:cover !important;background-position:50% 25% !important;border-radius:50%;margin:0;float:none;clear:none;border:1px solid #dcdcdc;}
.onlineprofiles .titleBlock{width:76%;padding:15px 10px;float:none;display:table-cell;vertical-align:middle;}
.onlineprofiles .profileMain{padding-top:0;}
.chatnowLink{background:#30b21e;color:#fff;display:inline-block;vertical-align:middle;width:100px;height:40px;line-height:40px;text-align:center;border-radius:4px;margin:20px 0 0;}
.chatnowLink:hover{background:#19850a;}
.onlineprofiles .profileBlock{border:1px solid #dadbe0;border-radius:3px;}
.onlineprofiles .profileBlock:hover{background:#eaedf5;}
.onlinetitle{padding:16px 0 10px;}
.scrollableonline{width:730px;}
.online_txt{display:block;clear:both;font-size:14px;color:#2d2d2d;font-weight:500;line-height:23px;}
.greendot{background:#30b21e;width:8px;height:8px;border-radius:50%;float:left;margin:8px 5px 0 0;}
.reddot{background:#f93131;}
.onlineprofiles .profileName cite{font-size:20px;font-weight:400;}
.onlinetexbtm{float:left;margin:-2px 0 0;clear:both;width:100%;white-space:nowrap;text-overflow:ellipsis;}
.onlinetexbtm small{float:left;color:#2d2d2d;font-size:15px;font-family:roboto_m;line-height:23px;}
.onlinetexbtm .designation{display:inline-block;margin:0;max-width:60%;}
.onlinetexbtm .designation .designation{max-width:100%;}
.onlineprofiles .mediaBlock span{margin-top:1px;}
.loader_online{top:100%;margin-top:-55px;}
.chatnowLink1{color:#666;font-size:16px;}
.notification{width:244px;height:80px;background:#fff;margin:20px 0 20px 20px;box-sizing:border-box;padding:0 10px 10px 10px;position:relative;border:1px solid #e7e8ed;box-shadow:1px 2px 2px #c4c7d1;cursor:pointer;}
.noteImg{background-size:cover!important;background-position:50% 25% !important;width:60px;height:60px;float:left;}
.noteRight{float:right;width:156px;color:#000;line-height:19px;font-weight:500;}
.noteRight small{display:block;font-size:15px;}
.noteRight span{font-size:13px;display:block;clear:both;}
.noteRight strong{color:#727a8a;font-weight:400;font-size:13px;display:block;}
.notification:hover{background:#f5f5f5;border-color:#d2d8e6;}
.cross{position:relative;left:-25px;top:0;width:10px;height:10px;opacity:1;float:left;margin:0 0 -5px 258px;z-index:999;width:26px;cursor:pointer;padding:5px 0 0;height:10px;}
.cross:hover{opacity:1;}
.cross:before, .cross:after{position:absolute;left:15px;content:' ';height:10px;width:2px;background-color:#333;}
.cross:before{transform:rotate(45deg);}
.cross:after{transform:rotate(-45deg);}
.renew_block{float:right;position:relative;}
.txt_renew{color:#5394e4;display:block;padding:17px 18px 0 0;font-weight:500;cursor:pointer;}
.renew_cont{position:absolute;left:-15px;width:280px;top:36px;}
.renewMain{float:left;background:#fff;width:100%;min-height:100px;border:1px solid #c3cad8;border-radius:4px;box-shadow:0 0 10px #d2d8e6;}
.renewtop{background:#ffc44f;display:block;text-align:center;color:#000;padding:13px 0 13px;float:left;width:100%;border-radius:4px 4px 0 0;}
.renewtop span{font-size:30px;display:block;line-height:40px;}
.renewtop small{font-size:15px;line-height:25px;}
.renewlist{clear:both;padding:0 0 0 15px;}
.renewlist li{clear:both;font-size:14px;color:#000;padding:0 15px 0 20px;position:relative;float:left;width:100%;margin:20px 0 0;line-height:16px;box-sizing:border-box;}
.renewlist li:before{content:'';position:absolute;left:0;top:0;width:10px;height:6px;background:url("https://imgassets.quackquack.co/icons-spritev4.png") no-repeat -338px -5px;width:14px;height:12px;}
.renewlist li small{color:#fe6335;font-weight:500;}
.renewupg{width:250px;padding:0;height:45px;line-height:45px;font-size:20px;float:left;font-weight:400;margin:20px 13px;}
.topArrow{background:url("https://imgassets.quackquack.co/icons-spritev4.png") no-repeat -330px -264px;width:30px;float:left;margin:0 0 -1px 20px;left:20px;position:relative;height:12px;}
.upgtoday{background:#5394e4;color:#fff;}
.renew_cont2{left:-3px;}
.topArrow2{background:url("https://imgassets.quackquack.co/icons-spritev4.png") no-repeat -330px -240px;}
.upgRight{background:#fff;width:220px;position:absolute;right:0;top:92px;border-radius:5px;z-index:0;border:1px solid #fe6335;box-shadow:1px 2px 2px #c4c7d1;transition:all 300ms cubic-bezier(0.86,0,0.07,1);}
.upgRight.nodisplay{opacity:0;}
.upgRight.display{margin:22px 0 0;top:70px;opacity:1;}
.upginter_txt{font-size:15px;color:#000;padding:20px 18px 6px 11px;display:block;line-height:20px;}
.upgArrow{width:0;height:0;border-left:12px solid transparent;border-right:12px solid transparent;border-bottom:12px solid #fe6335;float:right;margin:-12px 25px 0 12px;}
.upgTitle{background:#fe6335;box-sizing:border-box;color:#fff;display:block;font-size:16px;font-weight:500;height:50px;line-height:20px;padding:4px 10px;float:left;text-align:center;top:8px;width:100%;z-index:9999;border-radius:4px 4px 0 0;}
.upgBlock{position:fixed;right:200px;top:75px;z-index:9999;}
.upgRight ul{padding:0 0 0 14px;clear:both;}
.upgRight ul li{box-sizing:border-box;float:left;font-size:13px;font-weight:500;margin:15px 0 0;padding:0 0 0 18px;position:relative;width:100%;}
.upgico{position:relative;float:left;width:100%;width:79px;height:79px;border-radius:50%;z-index:999999999;}
.upgico img{position:relative;z-index:9999;border-radius:50%;display:block;cursor:pointer;}
.upgRight li:before{background:url("https://imgassets.quackquack.co/icons-spritev13.png") no-repeat -338px -20px;content:"";height:12px;left:0;position:absolute;top:2px;width:14px;}
.upgnowBtn{font-size:17px;width:200px;margin:15px 10px;font-weight:500;cursor:pointer;}
.animated-circles{position:absolute;z-index:9;top:79px;}
.animated-circles .circle{background:rgba(255,56,70,0.25);width:79px;height:79px;border-radius:50%;position:absolute;z-index:49;transform:scale(1);-webkit-transform:scale(1);}
.animated-circles.animated .c-1{animation:2000ms scaleToggleOne cubic-bezier(0.25,0.46,0.45,0.94) forwards;}
.animated-circles.animated .c-2{animation:2500ms scaleToggleTwo cubic-bezier(0.25,0.46,0.45,0.94) forwards;}
.animated-circles.animated .c-3{animation:3000ms scaleToggleThree cubic-bezier(0.25,0.46,0.45,0.94) forwards;}
@keyframes scaleToggleOne{0{transform:scale(1);-webkit-transform:scale(1);}
 50%{transform:scale(1.5);-webkit-transform:scale(1.5);}
 100%{transform:scale(1);-webkit-transform:scale(1);}
}
@keyframes scaleToggleTwo{0{transform:scale(1);-webkit-transform:scale(1);}
 20%{transform:scale(1);-webkit-transform:scale(1);}
 60%{transform:scale(1.5);-webkit-transform:scale(1.5);}
 100%{transform:scale(1);-webkit-transform:scale(1);}
}
.animation-stopped .circle{opacity:0!important;}
.upgRight2{-webkit-animation-duration:.5s;animation-duration:.5s;-webkit-animation-fill-mode:both;animation-fill-mode:both;-webkit-transition-timing-function:cubic-bezier(0.86,0,0.07,1);transition-timing-function:cubic-bezier(0.86,0,0.07,1);opacity:0;}
@keyframes rotateInDownRight{from{transform-origin:right top;transform:rotate3d(0, 0, 1, 45deg);opacity:0;}
 to{transform-origin:right top;transform:none;opacity:1;}
}
.rotateInDownRight{animation-name:rotateInDownRight;}
@keyframes rotateOutUpRight{from{transform-origin:right top;opacity:1;}
 to{transform-origin:right top;transform:rotate3d(0, 0, 1, 90deg);opacity:0;}
}
.rotateOutUpRight{animation-name:rotateOutUpRight;z-index:999999;}
.onlineico_block{position:absolute;top:20px;z-index:9999999;right:18px;}
.onlineico_block .online_txt{background:rgba(48,178,31,0.7);color:#fff;border-radius:15px;padding:0 13px;line-height:26px;}
.onlineico_block .online_txt.redtxt{background:rgba(255,56,70,0.7);}
.greendot{background:#fff;}
.uinewpopup{width:306px;background:#5293e5;text-align:center;padding:0 25px 35px;border-radius:5px;position:relative;z-index:99999;margin:auto;height:292px;}
.ui_img{display:block;width:280px;margin:-56px 13px 0;float:left;}
.uinewpopup h3{clear:both;color:#fff;font-size:29px;font-weight:400;padding:25px 0 0;line-height:30px;}
.uinewpopup p{color:#fff;font-size:20px;line-height:28px;padding:13px 0 30px;}
.uinextBtn{background:#fff;cursor:pointer;display:block;width:90%;height:49px;font-size:18px;line-height:18px;padding:16px 16px;margin:0 5%;box-sizing:border-box;border-radius:3px;}
.right-arrow{border-bottom:2px solid #000;border-right:2px solid #000;display:inline-block;height:9px;margin:3px 0 0;transform:rotate(-45deg);vertical-align:top;width:9px;}
.uinextBtn:hover{background:#084693;color:#fff;}
.uinextBtn:hover .right-arrow,.uinextBtn:hover .left-arrow{border-color:#fff;}
.ui_icon{background:#fff none repeat scroll 0 0;border-radius:150px;display:block;height:150px;margin:0 auto;position:relative;width:150px;}
.ui_icon small{background:url("hhttps://imgassets.quackquack.co/newui_sprite.png") no-repeat -7px -12px;background-size:500px 77px;bottom:0;height:52px;left:0;margin:auto;position:absolute;right:0;top:0;width:65px;}
.msgico small{background-position:-85px -7px;height:58px;}
.borderbtm{background:#3968a0 none repeat scroll 0 0;display:block;height:2px;margin:-1px auto 0;position:relative;width:80px;z-index:9999;}
.interico small{background-position:-161px -9px;height:56px;width:57px;}
.profico small{background-position:-228px -8px;height:52px;width:69px;}
.chatico small{background-position:-300px -9px;height:55px;width:54px;}
.accessico small{background-position:-367px -4px;height:61px;width:49px;}
.placeico small{background-position:-425px -7px;height:55px;width:66px;}
.imgBlock{float:left;margin:-50px 0 0;width:100%;}
.demofooter{clear:both;overflow:hidden;width:86%;position:absolute;bottom:30px;left:7%;}
.demofooter .uinextBtn{width:140px;margin:0;float:right;}
.demofooter .uiprevbtn{float:left;}
.left-arrow{border-bottom:2px solid #000;border-right:2px solid #000;display:inline-block;height:9px;margin:4px 0 0;transform:rotate(135deg);vertical-align:top;width:9px;}
.lastpopup h3{padding:13px 0 0;}
.lastpopup p{padding:8px 0 30px;}
.tabs2 .settabs_ryt{float:right;position:relative;margin:0;}
.tabs2 .settabs_ryt a.oldchat{color:#5394e4;font-size:13px;margin-right:0;padding-left:10px;line-height:13px;}
.tabs2 .settabs_ryt a.changepwd{color:#5394e4;font-size:13px;border-right:2px solid #5394e4;padding-bottom:0;margin-right:0;padding-right:10px;padding-left:10px;line-height:13x;}
.settabs{width:100%;}
.changepassword{margin:10px 0 0;width:auto !important;height:auto !important;overflow:hidden !important;}
.changepassword label small{padding-left:0;}
.chagePwdBlock{width:320px;display:inline-block;padding:20px;min-height:380px;}
.chngbtn{height:40px;line-height:40px;width:46%;font-size:16px;margin:0;margin-left:10px;border-radius:3px;}
.chngcancelBtn{background:#bbc5d1;width:46%;height:40px;line-height:40px;font-size:16px;margin:0;margin-right:10px;border-radius:3px;}
.chngcancelBtn:hover, .chngcancelBtn:focus, .chngcancelBtn:active{background:#9dafc5;}
.chagePwdBlock h4{font-weight:400;}
.changepassword label small{width:auto;}
.tabs2 .settabs_ryt a:last-child{border:none;}
.validation_frgt{color:#ff0000;font-size:14px;display:inline-block;width:100%;}
.sccess_footer span{color:#000;text-align:center;display:inline-block;width:100%;font-size:18px;}
.expl_list_pop li:hover, .expl_list_pop li.active{background:none;}
.uinextBtn{font-size:16px;padding:19px 10px;height:55px;}
.uinextBtn:hover a{color:#ffffff;}
.uinewpopup{width:350px;padding:0 40px 35px;border-radius:10px;}
.uinewpopup p{font-size:18px;}
.ui_icon img{width:50px;}
.demofooter .uinextBtn{width:160px;}
.clearfix{clear:both;overflow:hidden;}
.myprofileupg{padding:0;height:45px;line-height:45px;font-size:17px;float:none;font-weight:400;margin:10px auto 0;display:block;width:300px;border-radius:60px;}
.upgvisitor cite{border-radius:50%;overflow:hidden;width:54px;height:54px;}
.inboxbtmBlock{height:55px;bottom:35px;background:#fff;color:#fff;text-align:center;position:fixed;width:438px;z-index:999999;}
.blockedtxt{background:#f53131;margin:1px 3%;display:block;border-radius:60px;min-height:43px;text-align:center;display:table;width:94%;margin:0 0 0 140px;}
.blockedtxt em{display:table-cell;width:100%;line-height:18px;vertical-align:middle;font-style:normal;font-size:14px;padding:6px 8px;}
.unblockUsers_block{width:700px;}
.unblockUsers_block .titleBlock{width:72%;padding-left:10px;display:inline-block;vertical-align:middle;float:none;}
.unblockUsers_block .profilePic{float:none;display:inline-block;vertical-align:middle;}
.unblockUsers_block .profileBlock{padding-bottom:10px;border:1px solid #dadbe0;border-radius:3px;box-shadow:4px 4px 4px -3px #bebfc3;}
.unblockUsers_block .item{display:inline-block;width:100%;margin:4px auto;position:relative;}
.unblockUsers_block .list_Busers{height:400px;overflow-y:auto;width:660px;}
.unblockUsers_block .chatnowLink{margin:0;}
.success_block .succ_msg{top:25%;font-weight:normal;line-height:20px;}
.forward_txt{text-align:center;padding:15px 0;text-transform:uppercase;font-size:13px;font-weight:600;color:#5295e6;cursor:pointer;display:inline-block;width:100%;margin-top:10px;}
.forward_txt span{background:url(https://imgassets.quackquack.co/icons-spritev13.png) -50px -172px;background-size:180px 263px;display:inline-block;width:9px;height:12px;margin-left:4px;}
.profile_options{float:none !important;display:inline-block;vertical-align:middle;}
.profile_options:hover{background:#edeef3;border-radius:100%;}
.profile_opt{width:14px;text-align:center;display:inline-block;transition:all 0.5s ease-in-out;cursor:pointer;vertical-align:middle;margin-top:8px;}
.profile_opt span{background:#333;width:5px;height:5px;margin:1px;display:block;float:left;border-radius:100%;}
.profile_opt{}
.opt_menu{width:150px;background:#f3f4f9;padding:10px;border:1px solid #e5e9f2;position:absolute;right:0px;z-index:9;top:67px;}
.proOpt_wrap{margin-top:10px;}
.opt_menu .optmenu_item .opt_cir{width:60px;height:60px;background:#ccc;box-shadow:0 3px 2px 0px rgba(0,0,0,0.1);border-radius:100%;margin:auto;display:inline-block;vertical-align:middle;text-align:center;}
.opt_menu .optmenu_item p{font-size:13px;line-height:30px;display:inline-block;vertical-align:middle;margin-right:10px;font-family:roboto_m;}
.optmenu_item{text-align:right;}
.opt_menu .optmenu_item .opt1{background:#5394e4;}
.opt_menu .optmenu_item .opt2{background:#ffbf51;}
.opt_menu .optmenu_item .opt3{background:#f76b6c;}
.opt_menu .optmenu_item .opt4{background:#ffcc00;}
.opt_menu .optmenu_item:hover .opt1,.opt_menu .optmenu_item:focus .opt1,.opt_menu .optmenu_item:active .opt1{background:#387bcd;}
.opt_menu .optmenu_item:hover .opt2,.opt_menu .optmenu_item:focus .opt2,.opt_menu .optmenu_item:active .opt2{background:#e8a532;}
.opt_menu .optmenu_item:hover .opt3,.opt_menu .optmenu_item:focus .opt3,.opt_menu .optmenu_item:active .opt3{background:#e44445;}
.opt_menu .optmenu_item:hover .opt4,.opt_menu .optmenu_item:focus .opt4,.opt_menu .optmenu_item:active .opt4{background:#e4b701;}
.opt_menu .optmenu_item .opt_cir span{background:url('https://imgassets.quackquack.co/chat_sprite.png') no-repeat;background-size:144px 36px;display:inline-block;vertical-align:middle;margin-top:12px;width:36px;height:36px;}
.opt_menu .optmenu_item .opt_cir .opticon1{background-position:0px 0px;}
.opt_menu .optmenu_item .opt_cir .opticon2{background-position:-36px 0px;}
.opt_menu .optmenu_item .opt_cir .opticon3{background-position:-72px 0px;}
.opt_menu .optmenu_item .opt_cir .opticon4{background-position:-108px 0px;}
.carousel-indicators.new_indicators{bottom:10px;}
.carousel-indicators.new_indicators .active{background:#4f99e2;background-clip:border-box;background-clip:content-box;padding:2px;margin-bottom:-3px;border:2px solid #4f99e2;width:8px;height:8px;}
.carousel-indicators.new_indicators li{width:10px;height:8px;border-radius:100%;background:#fff;}
.new_fullPhotos{padding:25px 0 0;}
.new_loader{position:absolute;top:50%;left:50%;transform:translate(-50%, -50%);-webkit-transform:translate(-50%, -50%);-moz-transform:translate(-50%, -50%);margin:0;}
.srclist li{position:relative;}
.srclist li.active:after{content:'';display:block;width:5px;height:12px;border:solid #5595e4;border-width:0 2px 2px 0;transform:rotate(45deg);position:absolute;right:25px;top:7px;}
.src_btns input{width:42%;height:48px;line-height:48px;margin:0 3%;text-transform:uppercase;float:left;font-size:18px;}
.src_btns input.gray_btn{margin:0 3% 0 5%;}
.src_btns input.update_btn{margin:0 5% 0 3%;}
.src_btns{padding-top:10px;}
.src_btns2{border-top:1px solid #d6dce8;}
.fieldtxt{font-size:15px;font-weight:500;line-height:50px;color:#2d2d2d;float:left;position:relative;width:214px;}
.searchBlock{background:#fdffff;box-sizing:border-box;padding:0px 107px 38px;border-radius:10px;position:relative;box-shadow:1px 3px 3px #c4c7d1;width:620px;overflow:hidden;padding:0 0 20px;}
.searchBlock .fieldBlock label{width:150px;}
.title_src{padding-bottom:10px;padding-top:15px;}
.srcfield{cursor:pointer;margin:12px 0 0;box-shadow:1px 2px 3px 0px rgba(233,235,241,1);}
.fieldtxt::after{border-bottom:1px solid #999eab;border-right:1px solid #999eab;content:" ";height:6px;position:absolute;right:0;top:21px;transform:rotate(-45deg);width:6px;}
.fieldBlock{border:1px solid #e5e7ed;box-shadow:none;}
.show_block{clear:both;padding:19px 0 0;}
.show_title{font-size:17px;color:#a6a7aa;display:block;margin-left:5px;}
.selopt_block{background:#f3f4f9;border:1px solid #e5e7ed;float:left;width:100%;margin:8px 0 0;border-radius:6px;padding:5px 0 13px;}
.selopt_block ul li{position:relative;padding:0 0 5px;}
.selopt_block ul li input[type=radio]{position:absolute;visibility:hidden;}
.src_pop{padding:25px 0;}
.selopt_block ul li label{display:block;position:relative;font-weight:400;font-size:15px;padding:8px 25px 0 50px;height:22px;line-height:22px;z-index:9;cursor:pointer;}
.selopt_block ul li .check{display:block;position:absolute;border:2px solid #afb3bf;border-radius:100%;height:16px;width:16px;top:8px;left:20px;z-index:5;}
.mp_field{background:#ffffff;}
.mp_field span{line-height:50px;color:#8f929a;}
.mp_field label{text-align:left;}
.mp_field .mp_fieldtxt{width:200px;float:left;text-align:left;color:#000;}
.pull-right{float:right;}
.mp_age{color:#000000;}
.mp_field .hide_btn{text-align:center;background:#ff8100;border-radius:3px;padding:0px 10px;margin-top:4px;line-height:40px;font-size:14px;width:80px;color:#ffffff;cursor:pointer;}
.mp_field .hide_btn:hover{background:#df7101;}
.mp_uname:hover{border-color:#e5e7ed;}
.new_fieldtxt{float:left;width:310px;text-align:left;color:#000 !important;}
.mp_txtfield{line-height:50px;height:50px;margin:0;}
.zip_lable{float:left;margin-top:10px;width:100%;text-align:left;}
.mp_field .hide_toggle{background:#df7101;}
#zipcode{padding:0;height:100%;margin:0;width:100%;}
.selopt_block ul li .check::before{display:block;position:absolute;content:'';border-radius:100%;height:8px;width:8px;top:2px;left:5px;margin:auto;}
.selopt_block input[type=radio]:checked ~ .check{border:2px solid #5496e4;}
.selopt_block input[type=radio]:checked ~ .check::before{border:solid #5496e4;border-width:0 2px 2px 0;transform:rotate(45deg);-webkit-transform:rotate(45deg);-moz-transform:rotate(45deg);-o-transform:rotate(45deg);-ms-transform:rotate(45deg);border-radius:0;height:7px;width:4px;}
.selopt_block input[type=radio]:checked ~ label{color:#5496e4;}
.search_btm{width:620px;margin:30px 0 0;float:left;padding:20px 0 0;}
.srchcont{padding:0 105px 0;}
.search_btm .btn{width:198px;}
.srcity_pop{width:400px;padding:20px 0;}
.srctop{clear:both;padding:0 30px;float:left;margin:20px 0 0;box-sizing:border-box;width:100%;}
.srccityfield{background:#fff;border:1px solid #cdd0df;width:100%;height:40px;}
.txtField{background:none;border:none;outline:none;height:33px;font-size:14px;line-height:30px;float:left;width:300px;margin:5px 0 0;padding:0 10px;box-sizing:border-box;}
.srcBtn{width:30px;height:40px;float:right;background:none;border:none;margin:0 5px 0 0;outline:none;cursor:pointer;}
.srcBtn small{float:left;width:22px;height:24px;background:url(https://imgassets.quackquack.co/icons-spritev13.png) no-repeat -69px -340px;height:29px;width:25px;}
.srctop2{padding:0;margin:20px 25% 10px;width:50%;}
.srctop2 .srccityfield{border-radius:30px;}
.srctop2 .txtField{width:200px;margin:3px 0 0;padding:0 10px;}
.srctop2 .srcBtn small{width:22px;height:24px;background:url(https://imgassets.quackquack.co/icons-spritev13.png) no-repeat -47px -239px;background-size:250px 365px;height:29px;width:22px;margin:11px 0 0 6px;}
.selCities{clear:both;padding:0 30px;}
.selCities span{float:left;font-size:13px;background:#cdd0df;padding:0 10px;line-height:25px;height:25px;color:#000;border-radius:15px;margin:8px 10px 0 0;cursor:pointer;}
.srccities li{position:relative;padding:8px 14px 8px 35px;}
.srccities li.active:before{background:url(https://imgassets.quackquack.co/icons-spritev13.png) no-repeat -22px -347px;right:4px;position:absolute;top:14px;width:19px;height:11px;content:' ';}
.srchgiffield{width:95%;margin:10px auto;}
.srchGyf{width:91%;margin-left:12px;}
#search:focus .srchgiffield{border-color:#5293e3;}
#renew_nowbtn{text-transform:none;}
.success_block{background:#30b21e;position:absolute;width:100%;height:100%;z-index:999;left:0;top:0;}
.succ_msg{color:#fff;font-size:16px;display:inline-block;width:100%;text-align:center;top:40%;position:relative;}
#unblockedBlock{position:relative;}
.no_blockedUsers{position:absolute;font-size:18px;width:100%;text-align:center;top:50%;left:50%;transform:translate(-50%,-50%);-webkit-transform:translate(-50%,-50%);-moz-transform:translate(-50%,-50%);-o-transform:translate(-50%,-50%);-ms-transform:translate(-50%,-50%);}
.topLeft{float:left;width:70%;padding:0 0 0 15px;}
.topLeft h5{font-size:20px;font-weight:400;}
.topLeft span{display:block;padding:6px 0 0;color:#8f929a;font-size:13px;}
.topLeft span a{color:#5895e5;font-size:13px;}
.newmsgblock{padding:0 0 12px;;width:420px;min-height:inherit;}
.defmsgblock{width:400px;min-height:inherit;padding:0 0 15px;}
.msgBtm{background:#f3f4f9;border-radius:0 0 5px 5px;border-top:1px solid #d4d7e6;padding:15px 0 0;}
.msgBtm2{padding:29px 0 14px;}
.msgmiddle{width:100%;text-align:left;padding:20px 0 20px 15px;clear:both;box-sizing:border-box;}
.msgImg{width:60px;height:60px;border-radius:50%;overflow:hidden;display:inline-block;vertical-align:middle;}
.msg_name{display:inline-block;vertical-align:middle;font-size:18px;padding:0 0 0 10px;}
textarea.areamsg{width:84%;box-sizing:border-box;display:inline-block;max-width:100%;line-height:20px;padding:14px 15px 14px;border-radius:5px;max-height:200px;border:1px solid #d4d7e6;background:#fff;margin:3px 0 0 15px;vertical-align:top;resize:none;font-family:roboto_r;font-size:16px;}
.msg_btn{display:inline-block;vertical-align:bottom;padding:0;}
.msg_btn .sendmsg{float:left;background:url(https://imgassets.quackquack.co/chatimg3.png) no-repeat -33px 7px;width:36px;height:49px;margin:0 0 0 0;border:none;outline:none;cursor:pointer;padding:17px 0 0;}
.msg_btn .sendmsg:hover{background-position:-133px 4px;}
.msg_add_ico{background:#515151;width:30px;height:30px;float:right;cursor:pointer;border-radius:40px;margin:5px 15px 0 0;position:relative;}
.msg_add_ico:hover{background:#757575;}
.msg_add_ico small{background:url(https://imgassets.quackquack.co/add_msg_temp4.png) no-repeat left top;position:absolute;width:16px;height:16px;left:0;top:0;right:0;bottom:0;margin:auto;}
.msgtmp{clear:both;}
.msg_txt{font-size:20px;text-align:center;clear:both;border-bottom:1px solid #d4d7e6;padding:20px 0;}
.sendmsg_new{z-index:9999;padding-top:15px;background:#edeef3;right:-2px;}
.defmsg p{padding:16px 25px 0;text-align:left;font-weight:400;color:#000;font-size:17px;}
.def_btm{padding:20px 25px 0;}
.def_btm .gray_btn{float:left;margin:0;width:48%;}
.def_btm .use_btn{float:right;width:48%;margin:0;}
.abusiveBlock p.defsent{color:#31b122;font-size:17px;text-align:center;padding:0 0 4px;font-weight:400;}
.senterror{padding:5px 0 0 15px;}
.def_btm2{padding:20px 0 0;}
.def_btm2 .gray_btn{width:193px;float:left;margin:0;}
.def_btm2 .can_btn{width:193px;margin:0;float:right;}
.srcarrow{}
.srch_box{background:#f3f4f9;float:left;width:92%;height:40px;margin:8px 0 8px 10px;border:1px solid #d3d9e5;border-radius:4px;}
.srch_box small{font-size:15px;color:#000;display:block;line-height:40px;padding:0 0 0 10px;position:relative;cursor:pointer;}
.srch_box:after{border-right:2px solid #90939a;border-top:2px solid #90939a;width:6px;height:6px;transform:rotate(135deg);content:' ';position:absolute;right:28px;top:24px;cursor:pointer;}
.dirmsg{position:relative;width:100%;}
.inb_srch{float:left;width:100%;padding:0 10px 0;box-sizing:border-box;left:0;z-index:99;border-radius:5px 0 0 0;background:#fff;position:relative;}
.defmsg_block{float:left;width:190px;background:#fff;border:1px solid #ccc;border-radius:4px;}
.src_field{float:left;border:none;outline:none;height:40px;padding:10px 5px;box-sizing:border-box;background:none;}
.inbsrc_btn{background:url(https://imgassets.quackquack.co/search-sprite.png) no-repeat -32px 10px;background-size:50px 18px;float:left;width:22px;border:none;height:40px;cursor:pointer;}
.inb_top{padding:8px 0 0;clear:both;height:50px;}
.srcarrow{float:right;width:45px;height:40px;border:1px solid #ccc;border-radius:3px;position:relative;cursor:pointer;background:#f3f4f9;}
.srcarrow span{border-right:2px solid #90939a;border-top:2px solid #90939a;width:6px;height:6px;transform:rotate(-45deg);content:' ';position:absolute;right:17px;top:18px;cursor:pointer;}
.list_btn{height:40px;border:1px solid #ccc;border-radius:3px;position:relative;background:#f3f4f9;}
.srcmsg_list{clear:both;padding:0 5px 9px 0;left:0;position:absolute;top:50px;}
.srcList{float:left;width:100%;background:#fff;padding:0 4px 0 8px;box-sizing:border-box;}
.list_btn{height:40px;border:1px solid #ccc;border-radius:3px;position:relative;background:#f3f4f9;width:100%;display:block;line-height:40px;float:left;margin:6px 0 0;padding:0 0 0 10px;cursor:pointer;box-sizing:border-box;}
.list_btn:hover{color:#5394e4;}
.list_btn.active{color:#5394e4;font-weight:bold;}
.dirno{float:right;width:25px;text-align:center;color:#fff;font-size:11px;margin:6px 8px 0 0;line-height:25px;font-weight:500;}
.dirno cite{width:25px;background:#ff3846;border-radius:20px;height:25px;display:block;font-size:13px;font-style:normal;}
.freeLikes_list{clear:both;background:#faeb52;border-radius:3px;margin:8px;padding:7px 0;}
.imgsList{text-align:center;padding:0 20px 0 0;}
.userlike_txt{text-align:center;display:block;font-size:12px;}
.imgsList li{width:35px;height:35px;display:inline-block;border-radius:50%;overflow:hidden;margin:0 -20px 0 0;border:3px solid #faeb52;position:relative;}
.imgsList li img{max-width:100%;filter:blur(2px);-webkit-filter:blur(2px);-moz-filter:blur(2px);-ms-filter:blur(2px);-o-filter:blur(2px);}
.chatUpgblock{background:#ff8100;position:absolute;width:438px;text-align:center;height:56px;}
.chatUpgblock a{display:block;text-align:center;font-size:16px;font-weight:bold;color:#fff;}
.chatUpgblock a span{text-align:center;display:block;color:#fff;font-size:16px;padding:11px 0 4px;font-weight:400;}
.chatUpgblock a small{display:block;}
.dirmsg_block{float:left;width:100%;text-align:center;padding:20px 0 0;}
.diruser_img{width:140px;height:150px;display:block;clear:both;background:#eee;border-radius:50%;height:140px;margin:0 auto;overflow:hidden;background-size:cover !important;background-position:50% 25% !important;}
.dir_work{display:block;width:100%;font-size:17px;color:#000;text-align:center;padding:5px 0 0;}
.dir_stud{font-size:16px;color:#000;padding:5px 0 0;text-align:center;display:block;clear:both;}
.notinter_btn{width:120px;display:block;margin:-50px auto 0;min-height:50px;margin-top:50px;}
.notinter_btn input{color:#fff;font-size:14px;text-align:center;outline:none;display:block;border:none;width:100%;height:38px;line-height:38px;cursor:pointer;background:#a4a4a4;border-radius:4px;box-shadow:0 1px 3px #a4a4a4;}
.dir_work{float:left;}
.notinter_btn input:hover{background:#8e8d8d;}
.addsBlock{min-height:100%;position:fixed;height:100%;border-radius:6px 6px 0 0;background:#fff;width:706px;}
.addbanner{margin:8px 0 0 8px;}
.ad_banCont{clear:both;padding:15px 8px 0 15px;}
.add_title{display:block;font-size:22px;color:#000;}
.add_caption{display:block;font-size:16px;color:#000;padding:4px 0 0;}
.add_about{color:#6f6f6f;font-size:16px;display:block;padding:30px 0 0;font-style:normal;}
.ad_banCont p{clear:both;font-size:16px;line-height:24px;padding:4px 0 0;}
.skipblk{float:left;width:50%;box-sizing:border-box;position:relative;}
.skipblk:after{width:1px;height:93px;content:' ';position:absolute;right:0;background:#e7e8e8;top:-15px;}
.details_verify{}
.mobico{background:url(https://imgassets.quackquack.co/icons-spritev13.png) no-repeat -5px -132px;width:45px;height:45px;display:inline-block;margin:50px 0 0;}
.detail_top{background:#2d3238;float:left;width:98%;height:240px;margin:8px 1% 0;text-align:center;}
.detail_top small{color:#a4a4a4;display:block;font-size:16px;padding:5px 0 0;}
.detail_top strong{color:#fff;font-weight:400;display:block;font-size:21px;display:block;padding:40px 0 0;}
.detail_top strong.subtxt{padding:85px 0 0;line-height:32px;}
.ditail_num{background:#f6f6f6;border:1px solid #c2c6d2;width:300px;height:45px;display:block;margin:20px auto 0;position:relative;}
.detail_bot{float:left;width:100%;text-align:center;}
.code_detail{height:45px;width:100%;box-sizing:border-box;padding:0 0 0 10px;line-height:45px;text-align:left;z-index:999;position:relative;cursor:pointer;color:#2d2d2d;font-size:16px;display:block;}
.code_detail:after{position:absolute;right:12px;top:14px;border-left:2px solid #8f9299;border-bottom:2px solid #8f9299;transform:rotate(-45deg);content:' ';width:8px;height:8px;}
.detail_mob{background:none;outline:none;display:block;width:100%;border:none;text-align:left;font-size:15px;padding:0 10px;line-height:45px;box-sizing:border-box;}
.otptxt{display:block;font-size:13px;line-height:20px;color:#b8bbc0;padding:5px 0 0;}
.sendotp_btn{display:block;width:300px;margin:0 auto;height:45px;line-height:45px;padding:30px 0 0;}
.sendotp_btn input{background:#28c520;border:none;outline:none;width:100%;height:45px;color:#fff;cursor:pointer;line-height:45px;font-size:16px;border-radius:2px;}
.sendotp_btn input:hover{background:#16ab0e;}
.skip_txt{color:#9999a1;font-size:14px;display:block;width:100px;margin:25px auto 0;height:30px;cursor:pointer;line-height:30px;}
.detail_block{float:left;background:#fff;position:fixed;height:100%;border-radius:6px 6px 0 0;background:#fff;width:706px;}
.otpsub_btn{padding:30px 0 0;}
.otpsub_btn input{background:#5394e4;}
.otpsub_btn input:hover{background:#3d7ac5;}
.otp_btm .btn{width:143px;height:45px;}
.fbver_btn input{background:#3b5999;}
.fbver_btn input:hover{background:#28437d;}
.detail_top .fb_icon{display:inline-block;margin:50px auto 0;float:none;}
.detphoto_ico{width:100px;height:100px;border-radius:100px;border:2px dashed #fff;margin:37px auto 0;display:block;cursor:pointer;}
.white_plus{width:60px;height:2px;display:block;margin:49px 20px;background:#fff;}
.white_plus2{transform:rotate(89deg);margin:-49px 20px;}
.detaislarea{width:43%;height:110px;display:block;margin:25px auto 0;}
.min_char2{float:none;width:300px;text-align:right;margin:0 auto;padding:8px 10px;}
.code_list2{z-index:99999;top:46px;}
.detph_upld{display:block;left:249px;top:16px;padding:0 0 8px;}
.detail_top strong.upld_txt{color:#5394e4;padding:20px 0 6px 20px;}
.detail_top .from_gal{padding:18px 0 10px 24px;}
.error2{padding:0 0 0 200px;text-align:left;}
.detph_upld2{top:175px;}
.deltxt{display:block;text-align:right;margin:5px 57px 0 0;color:#a3a3a3;font-size:12px;}
.resetBtn{background:url(https://imgassets.quackquack.co/skipped_reset.png) no-repeat left top;width:37px;height:41px;background-size:37px 41px;display:block;margin:0 auto;cursor:pointer;}
.resetBtn:hover{-webkit-transform:scale3d(1.3, 1.3, 1.3);transform:scale3d(1.3, 1.3, 1.3);-moz-transition:all 0.45s cubic-bezier(0.5, 0, 0, 1.5), background 0.35s cubic-bezier(0.5, 0, 0, 3);-o-transition:all 0.45s cubic-bezier(0.5, 0, 0, 1.5), background 0.35s cubic-bezier(0.5, 0, 0, 3);-webkit-transition:all 0.55s cubic-bezier(0.5, 0, 0, 1.5), background 0.35s cubic-bezier(0.5, 0, 0, 3);transition:all 0.55s cubic-bezier(0.5, 0, 0, 1.5), background 0.35s cubic-bezier(0.5, 0, 0, 3);}
.resetBtn2{width:46px;height:51px;background-size:46px 51px;margin-top:7px;margin-bottom:7px;}
.leftBlock ul li a cite.chat_msgs{display:block;color:#7983a1;font-size:12px;padding:0 0 0 37px;float:left;width:100%;margin:-14px 0 0;}
.leftBlock ul li a.reqLink small{margin-top:-6px;line-height:31px;}
.leftBlock ul li a.reqLink .redDot{margin-top:-30px;}
.inbox_tabs{float:left;width:100%;padding:10px 0 0;border-bottom:1px solid #eaedf5;}
.reqtab{float:left;width:50%;font-style:normal;box-sizing:border-box;font-size:14px;font-weight:500;line-height:40px;padding:0 0 6px 0;cursor:pointer;border-bottom:2px solid #fff;position:relative;text-align:center;}
.reqtab1:after{width:1px;height:34px;background:#d5d7dc;content:' ';position:absolute;top:0;right:0;}
.reqno{display:inline-block;margin-left:6px;float:none;margin-right:0;}
.reqtab.active{border-bottom:2px solid #5394e4;color:#5394e4;}
.unblockUsers_block .skip_prof{height:400px;overflow-y:auto;width:660px;}
.pop_tabs{float:left;width:100%;padding:0 0 10px;}
.pop_tabs li{float:left;margin:0 22px 5px 0;}
.pop_tabs li a{line-height:30px;display:block;padding:0;border-bottom:2px solid #f3f4f9;font-size:16px;color:#838ca8;font-weight:500;}
.pop_tabs li a.active{border-bottom:2px solid #5394e4;color:#5394e4;}
.inboxMain .chatLeft{width:708px;border:none;z-index:99;}
.inboxMain .chatProfiles li{width:100%;}
.inboxMain .msgCont{width:708px;background:#fff;border-radius:10px 10px 0 0;}
.inboxMain .chatCont{width:510px;padding-top:2px;}
.inboxMain .inboxMainCont{width:708px;position:absolute;top:0;left:0;}
.inboxMain .msgsBlock{background:#fff;}
.inboxMain .chatConversation{width:710px;}
.inboxMain .chatMsg{width:640px;}
.inboxMain .chatConversation{;}
.inboxMain .time_last{padding:11px 0 0;}
.inboxMain .mediaBlock{float:right;}
.inboxMain .mediaBlock span{margin:8px 6px 0 0;}
.inboxMain .user_msg.usermsg_gf{min-width:auto;max-width:auto;}
.inb_arrow{float:left;margin:6px 2px 0 -6px;width:32px;height:32px;}
.inb_arrow:after{width:11px;height:11px;left:12px;top:10px;}
.inboxMain .inbox-loader{left:0;top:400px;}
.sendChatConv{width:100%;background:none;bottom:0px;}
.chtmsg_new{width:88%;margin:5px;padding:0;background:#fff;margin-bottom:10px;}
.chtmsg_new .textField{width:96%;padding:8px;margin:0;}
.chatConv_block{padding-bottom:120px;display:inline-block;width:100%;}
.msgPicBig{width:60px;height:60px;float:none;display:inline-block;vertical-align:middle;}
.newSucc_msg{color:#31b221;display:inline-block;padding:20px 0;border-top:1px solid #d2d8e6;}
.newSucc_msg span{width:100%;display:inline-block;color:#333;margin:10px 0 0;}
.sendmsg_block{padding:0;}
.inbloader{position:fixed;height:100%;width:50%;left:50%;top:0;display:block;z-index:999;margin:20px 0 0 -290px;}
.inbloader .inbox-loader{left:0;}
.newmsg_loader{left:56%;margin:0;transform:translate(-50%,-50%);top:50%;width:auto;}
.inboxMain .mediaBlock.msgmedia{float:none;display:inline;}
.inboxMain .mediaBlock.msgmedia span{margin:0 6px 0 5px;float:none;display:inline-block;vertical-align:middle;}
.inboxMain .msgtop .msgName,.inboxMain .msgtop .msgage,.inboxMain .msgtop .msgCity{font-size:15px;}
.msgtopLeft{float:left;width:440px;display:inline-block;vertical-align:middle;float:none;width:93%;}
.msgconttop{display:inline-block;vertical-align:middle;padding-top:3px;}
.msgstop{display:block;line-height:20px;}
.msgdesignation{display:block;font-size:14px;line-height:14px;padding:0 0 0 8px;}
.max_msgs{display:block;text-align:center;position:fixed;bottom:55px;color:#ff3846;text-align:center;width:708px;padding:6px 0;background:#fff;}
.inboxMain .inboxbtmBlock{height:65px;width:708px;}
.inboxMain .blockedtxt{width:60%;margin-top:12px;}
.inboxMain .textField{width:550px;}
.inboxMain .msg{width:96%;}
.inboxMain .chatName{max-width:150px;}
.inboxMain .chatProfiles{border-radius:8px 10px 0 0;}
.interest_review{background:#f7f7f7;border:1px solid #ccc;border-radius:3px;cursor:pointer;padding:15px 0 15px 15px;margin:10px 0 0;}
.interest_review:hover{background:#f1efef;}
.int_icon{width:46px;height:46px;border:1px solid #5394e4;border-radius:50%;display:inline-block;position:relative;vertical-align:middle;}
.int_icon small{background:url("https://imgassets.quackquack.co/icons-spritev13.png") no-repeat -122px -1px;height:24px;width:25px;position:absolute;left:0;top:0;right:0;bottom:0;margin:auto;}
.interest_review p{display:inline-block;padding:0px 0 0 15px;width:530px;font-weight:400;vertical-align:middle;line-height:22px;}
.interest_review p cite{font-weight:bold;font-style:normal;}
.interest_review p cite.gentxt{font-weight:400;}
.interest_review p strong.intbold{text-transform:uppercase;}
.automsgpopup .fieldBlock,.automsgpopup .searchField{background:#fff;}
.intpopmain{width:600px;border-radius:9px;}
.automsgpopup .automsgBlock{padding:20px 97px 20px;}
.automsgBlock .title_top{padding:10px 0 5px;font-size:24px;}
}
.automsgpopup .edit_int{max-height:260px;}
.automsgpopup .edit_int li{margin-bottom:20px;}
.inter_block .edit_int{max-height:260px;}
.inter_block .edit_int li{margin-bottom:20px;}
.automsgBlock .booster_title h3{font-weight:400;}
.intercont{padding:26px 20px 0;}
.upginter_txtnew{font-size:15px;color:#000;padding:20px 18px 6px 11px;display:block;line-height:20px;clear:both;text-align:center;}
.msgstop strong{font-weight:normal;font-family:roboto_r;top:0;}
.upginter_txtnew strong{color:#ff3846;text-transform:uppercase;}
.upgTitle2{line-height:40px;font-size:19px;}
.mp_listcities{margin-top:10px;}
.seekbar-thumb{width:20px !important;height:20px !important;top:15px;left:15px;opacity:1 !important;background-color:#ffffff !important;cursor:pointer;}
.seekbar-thumb-needle{width:30px !important;height:30px !important;border-radius:100% !important;top:10px !important;left:10px !important;}
.seekbar-negative,.seekbar-positive{height:5px !important;border-radius:10px !important;}
.matches_within{display:inline-block;width:100%;}
.matches_within span{color:#757575;float:left;}
.matches_within .pull-right{float:right;}
.matches_within .miles{color:#5394e4;float:right;font-weight:600;}
.miles_wrap{display:inline-block;width:100%;border-top:1px solid #eee;padding-top:10px;}
.miles_within{height:auto;}
.miles_within:active, .miles_within:hover{border:1px solid #e5e7ed;}
.msgnew_popup{background:#fdffff;float:left;height:100%;margin:0 0 0 0;width:708px;border-radius:8px 8px 0 0;position:relative;min-height:700px;box-shadow:1px 3px 3px #c4c7d1;padding:0;}
.msg_block2{padding:0;}
.message_block2{position:fixed;bottom:10px;width:708px;}
.message_block2 .areaField{height:42px;float:left;width:94%;}
.message_block2 .thnksbtn{float:left;width:40px;padding:25px 0 0;clear:inherit;}
.msgnew_popup .mediaBlock.msgmedia{float:none;display:inline;}
.msgnew_popup .mediaBlock span{margin-top:-1px;}
.explore{margin-top:10px;margin-bottom:25px;padding-left:15px;}
.explore .btn_srch{width:100%;margin:0;text-align:left;font-size:18px;padding-left:15px;box-shadow:4px 4px 4px -3px #bebfc3;position:relative;}
.searchBy{margin-top:40px;overflow:hidden;}
.today_bday p{display:inline-block;font-size:20px;float:none;color:#202c44;font-family:roboto_m;vertical-align:middle;width:65%;}
.morebtn_wrap{width:35%;display:inline-block;text-align:right;float:right;margin:15px 0 0;}
.explore .more_btn{color:#5394e4;padding:8px 15px 8px 15px;border:2px solid #5394e4;border-radius:20px;font-size:14px;display:inline-block;vertical-align:middle;cursor:pointer;font-family:roboto_m;}
.explore .more_btn:hover{background:#5394e4;color:#ffffff;}
.explore_proofiles{margin-top:15px;}
.explore_proofiles .profile_wraper{width:229px;display:inline-block;margin:0 0 0 13px;cursor:pointer;}
.explore_proofiles .profile_wraper:first-child{margin:0;}
.explore_proofiles{font-size:0;}
.explore_proofiles .profile_wraper .profile_pic{display:inline-block;max-height:226px;overflow:hidden;border-radius:6px 6px 0 0;background-size:cover!important;background-position:50% 25%!important;width:100%;height:226px;float:left;border-left:1px solid #d2d8e6;border-top:1px solid #d2d8e6;}
.explore_proofiles .profile_wraper .profile_pic img{}
.explore .slide_rightarrow{border-right:2px solid #ffffff;border-bottom:2px solid #ffffff;width:15px;height:15px;transform:rotate(-45deg);-moz-transform:rotate(-45deg);-webkit-transform:rotate(-45deg);-ms-transform:rotate(-45deg);margin:-8px 26px 0 0;position:absolute;top:25px;right:0;}
.expl_count{width:718px;}
.newcarousel_img{background-size:cover !important;background-position:50% 25% !important;display:inline-block;width:100%;height:100%;}
.explore_block_wrap{display:inline-block;padding:10px;vertical-align:top;}
.explore .srch_photoview{width:315px;display:inline-block;overflow:hidden;box-shadow:4px 4px 4px -3px #bebfc3;background:#ffffff;padding:10px;border-radius:6px;cursor:pointer;}
.explore .addpics{background:#eea518;border-radius:4px;padding:40px 15px 43px 15px;box-shadow:0px 1px 3px 0px rgba(0,0,0,0.3);cursor:pointer;}
.addpics:hover{background:#d39111;}
.searchBy_filter8 .addpics{background:#3b5999;}
.searchBy_filter8 .addpics:hover{background:#2452b4;}
.searchBy_filter13 .addpics{background:#2dc234;}
.searchBy_filter13 .addpics:hover{background:#14b21b;}
.searchBy_filter11 .addpics{background:#4cdcc5;}
.searchBy_filter11 .addpics:hover{background:#28ceb4;}
.addpics p{color:#ffffff;font-size:20px;display:inline-block;position:relative;font-weight:200;line-height:20px;}
.addpics p span{font-size:20px;padding-bottom:3px;font-weight:600;}
.text-uppercase{text-transform:uppercase;}
.addCards .lineTxt{width:30%;height:3px;background:#ffffff;display:block;margin-top:5px;}
.default_pic{width:60px;height:60px;background:#ffffff;border-radius:100%;display:inline-block;float:right;overflow:hidden;box-shadow:0px 1px 3px 0px rgba(0,0,0,0.3);position:relative;top:-15px;}
.default_pic span{position:absolute;left:50%;top:50%;transform:translate(-50%,-50%);background:url(https://imgassets.quackquack.co/search_sprite.png) no-repeat;background-position-x:0%;background-position-y:0%;background-size:auto auto;background-size:120px 30px;width:28px;height:28px;}
.default_pic span.icon_cam{background-position:-1px -4px;width:28px;height:23px;}
.default_pic span.icon_fb{background-position:-69px -1px;width:13px;height:28px;}
.default_pic span.icon_mb{background-position:-96px -1px;width:18px;height:28px;}
.default_pic span.icon_edit{background-position:-31px -4px;width:28px;height:23px;}
.searchBy_age{margin-top:20px;display:inline-block;width:100%;position:relative;}
.searchBy_age .from_age, .searchBy_age .to_age{display:inline-block;}
.searchBy_age .from_age{float:left;}
.agetxt{display:inherit;position:relative;top:20px;padding-left:6px;}
.searchBy_age .from_age span, .searchBy_age .to_age span{color:#959697;font-size:17px;}
.searchBy_age .from_age select, .searchBy_age .to_age select{font-size:80px;font-family:roboto_l;box-shadow:none;border:none;color:#5394e4;background:none;width:142px;cursor:pointer;}
.explore_block{display:inline-block;width:100%;margin-top:20px;}
[class*="icono"]{position:relative;display:inline-block;vertical-align:middle;color:#797978;-webkit-box-sizing:border-box;box-sizing:border-box;}
[class*="icono-arrow1"]{width:16px;height:16px;border-width:2px 2px 0 0;border-style:solid;margin:10px;margin-top:10px;margin-left:10px;}
.ageArrow{position:absolute;left:50%;top:50%;transform:translate(-50%,-50%);-webkit-transform:translate(-50%,-50%);-moz-transform:translate(-50%,-50%);-o-transform:translate(-50%,-50%);margin-top:0px;margin-left:-6px;}
[class*="icono-arrow1"][class*="-left"]{-webkit-transform:rotate(45deg);transform:rotate(45deg);}
[class*="icono-arrow1"]::before{right:0;top:-2px;position:absolute;height:2px;-webkit-box-shadow:inset 0 0 0 32px;box-shadow:inset 0 0 0 32px;-webkit-transform:rotate(-45deg);transform:rotate(-45deg);width:26px;-webkit-transform-origin:right top;transform-origin:right top;}
[class*="icono"]::after, [class*="icono"]::before{content:"";-webkit-box-sizing:border-box;box-sizing:border-box;}
.searchBy_age .from_age, .searchBy_age .to_age{display:inline-block;}
.searchBy_age .to_age{float:right;}
.agetxt{display:inherit;position:relative;top:20px;padding-left:6px;margin-bottom:10px;}
.select_wrap{display:inline-block;width:100px;overflow:hidden;}
.yrs_txt{position:relative;bottom:25px;right:5px;}
.srcnewfield .fieldtxt{width:100%;font-family:roboto_m;}
.srcnewfield .srchbtn{position:absolute;right:10px;top:5px;}
.srcnewfield .fieldtxt::after{content:"";border:none;}
.srchshowBlock ul li{width:47%;float:left;background:#ffffff;border:none;margin:5px;border-radius:6px;padding-bottom:0;}
.srchshowBlock{background:none;border:none;}
.srchshowBlock ul li label{height:auto;padding:10px 15px 10px 33px;}
.srchshowBlock label{border:1px solid #c5c8db;border-radius:6px;font-family:roboto_m;}
.srchshowBlock input[type=radio]:checked ~ label{border:1px solid #5496e4;position:relative;border-radius:4px;}
.srchshowBlock input[type=radio]:checked ~ label:after{border:1px solid #5496e4;content:'';position:absolute;width:100%;height:64px;left:-2px;top:-2px;border-radius:6px 5px 3px 3px;}
.searchnew_btn{margin:0;}
.searchnew_btn .update_btn{width:86%;}
.srchshowBlock{margin-top:0;}
.select_wrap select option{font-size:16px;color:#000;height:100px;}
.srchshowBlock ul li .check{display:block;position:absolute;border-radius:100%;height:16px;width:16px;top:25px;right:10px;z-index:5;}
.iagreePop .agree_conditions h2{font-size:20px;line-height:25px;text-align:left;font-weight:600;}
.cond_list{float:left;width:100%;padding:15px 0 0;}
.cond_list li{background:#ffb400;padding:12px 10px;color:#fff;margin:11px 0 0;position:relative;float:left;clear:both;font-size:14px;}
.cond_list li::after{position:absolute;right:-38px;border:19px solid transparent;width:0;height:0;border-bottom:19px solid #ffb400;content:' ';transform:rotate(90deg);top:0px;}
.agree_code{display:block;clear:both;padding:25px 0 13px;text-align:left;}
.agree_code input[type="checkbox"]{position:relative;height:19px;border:1px solid #757575;display:block;width:25px;border-radius:2px;margin-bottom:10px;float:left;outline:none;}
.agree_code label{display:inline-block;color:#000;padding:6px 0 0 0;font-weight:400;float:left;}
.explore .cnt_btn{margin:20px auto 0;font-size:16px;height:45px;}
.explore .no_btn{background:none;margin-top:0;color:#a1a1a3;font-size:14px;height:55px;}
.explore .no_btn:hover{background:#e8e8e8;}
.cnt_btn{margin:20px auto 0;font-size:16px;height:45px;}
.no_btn{background:none;margin-top:5px;color:#a1a1a3;font-size:14px;height:45px;}
.no_btn:hover{background:#e8e8e8;}
.bt_txt{font-size:14px;color:#a1a1a3;}
.iagreePop .agree_conditions span{padding:0;}
.iagreePop .agree_conditions span{padding:0;}
.explore .bt_txt{font-size:14px;color:#a1a1a3;}
.log_txt{display:block;text-align:center;width:100%;font-size:22px;line-height:26px;}
.photoslist{clear:both;width:100%;text-align:center;padding:20px 0;}
.photo_img{display:inline-block;margin:0 4px;border-radius:50%;overflow:hidden;width:65px;height:65px;}
.able_txt{display:block;font-size:17px;line-height:22px;padding:0 10px;}
.chatConversation.sendChatConv{position:absolute;}
.loader_main.loader_gfimg{position:fixed;left:33%;top:50%;transform:translate(-50%,-50%);-webkit-transform:translate(-50%,-50%);-moz-transform:translate(-50%,-50%);-o-transform:translate(-50%,-50%);}
.newupgrade{background:none;width:410px;}
.upgtop{padding:10px;background:#fbed80;border-radius:10px 10px 0 0;padding:0 0 36px;float:left;width:100%;}
.upgtop h4{font-size:23px;color:#000;text-align:center;margin:17px 0 18px;}
.upgbtm{float:left;width:100%;}
.upgbtmcont{float:left;width:100%;background:#fff;border-radius:0 0 10px 10px;padding:0 13px 35px 13px;box-sizing:border-box;}
.box1{width:110px;background:#fff;border-radius:6px;border:2px solid #c6c6c6;margin:-50px 7px 0 7px;float:left;overflow:hidden;height:160px;cursor:pointer;}
.box1:hover,.box1.active{border-color:#fe2b00;}
.box1.active .amt_box{background:#fff;}
.box1.active{background:#fe2b00;}
.box1.active .time_period{color:#fff;}
.time_period{font-size:12px;text-align:center;display:block;padding:15px 0;font-weight:bold;text-transform:uppercase;}
.time_period small{display:block;text-align:center;font-size:35px;}
.rupees{font-size:20px;font-weight:bold;line-height:82px;text-align:center;display:block;}
.rupees em{font-style:normal;font-size:16px;}
.amt_box{background:#f2f5ff;border-radius:100%;width:240%;min-height:80px;position:relative;margin:0 0 0 -70%;overflow:hidden;height:240px;}
.best_txt{color:#f00;font-size:13px;text-align:center;position:absolute;text-align:center;width:100%;top:64px;}
.upgradebtn{width:200px;display:block;margin:0 auto;}
.upgradebtn a{height:50px;border-radius:50px;color:#fff;margin:-25px 0 0;text-align:center;width:100%;background:#fe2b00;float:left;font-size:17px;line-height:50px;text-transform:uppercase;font-weight:bold;}
.upgradebtn a:hover{background:#c52301;}
.free_upgbtn{display:block;padding:20px 0 0;width:100%;float:left;text-align:center;}
.free_upgbtn a{color:#fff;font-size:15px;color:#fff;text-align:center;text-transform:uppercase;position:relative;padding:5px;}
.free_upgbtn a:after{position:absolute;right:-10px;border-top:2px solid #fff;border-right:2px solid #fff;width:7px;height:7px;content:'';transform:rotate(45deg);top:9px;}
.newupgrade .slides li{display:none;}
.newupgrade .flexslider:after{display:none;}
.newupgrade .slides li:first-child{display:block;}
.upgnewicon{background:#ff8100;width:75px;height:75px;border-radius:70px;display:block;margin:0 auto;position:relative;box-shadow:1px 3px 5px rgba(0,0,0,0.2);}
.newupgrade .slides{min-height:145px;}
.newupgrade .slides li.usrimage .upgnewicon{background:#eee;}
.newupgrade .slides li.usrimage img{max-width:75px;border-radius:50%;height:auto;left:0;min-height:75px;min-width:75px;}
.newupgrade .slides li.usrimage .upgdesc{padding:15px 45px 0 45px;}
.newupgrade .slides li.usrimage .upgdesc em{font-style:normal;display:block;font-size:14px;}
.upgclose{background:url(https://imgassets.quackquack.co/icons-spritev13.png) no-repeat -8px -437px;width:35px;height:35px;float:right;border-radius:50%;margin:-10px -12px -33px 0;position:relative;z-index:99;}
.upgnewicon small{position:absolute;left:0;right:0;top:0;bottom:0;margin:auto;background:url(https://imgassets.quackquack.co/upgrade_popup_icons.png) no-repeat left top;background-size:350px 52px;}
.upgnewicon small.newicon1{background-position:-7px -9px;width:33px;height:32px;}
.upgnewicon small.newicon2{background-position:-44px -7px;width:44px;height:36px;}
.upgnewicon small.newicon3{background-position:-94px -7px;width:36px;height:34px;}
.upgnewicon small.newicon4{background-position:-138px -8px;width:34px;height:34px;}
.upgnewicon small.newicon5{background-position:-178px -8px;width:39px;height:34px;}
.upgnewicon small.newicon6{background-position:-223px -3px;width:38px;height:42px;}
.upgnewicon small.newicon7{background-position:-265px -5px;width:38px;height:39px;}
.upgnewicon small.newicon8{background-position:-310px -7px;width:36px;height:38px;}
.newupgrade .flexslider{margin:0 6%;width:88%;}
.newupgrade .flex-direction-nav{font-size:0;}
.newupgrade .flex-direction-nav li{width:30px;height:30px;float:left;}
.upgdesc{display:block;text-align:center;padding:15px 0 0;font-size:16px;line-height:20px;}
.newupgrade .flex-control-nav,.newupgrade .flex-control-paging li{display:block;}
.newupgrade .flex-control-paging li{display:inline-block;}
.newupgrade .flex-control-paging li a{background-color:#988d4b;border:none;width:6px;height:6px;margin:0 2px;display:inline-block;border-radius:10px;font-size:0;}
.newupgrade .flex-direction-nav{position:absolute;left:0;top:29px;width:100%;}
.newupgrade .flex-direction-nav li.flex-nav-next{float:right;}
.newupgrade .flex-direction-nav li.flex-nav-prev a,.newupgrade .flex-direction-nav li.flex-nav-next a{position:relative;width:30px;height:30px;float:left;}
.newupgrade .flex-direction-nav li.flex-nav-prev a:after{border-left:2px solid #988d4b;border-top:2px solid #988d4b;width:12px;height:12px;float:left;transform:rotate(-45deg);-ms-transform:rotate(-45deg);-o-transform:rotate(-45deg);-webkit-transform:rotate(-45deg);-moz-transform:rotate(-45deg);content:"";}
.newupgrade .flex-direction-nav li.flex-nav-next a:after{border-left:2px solid #988d4b;border-top:2px solid #988d4b;width:12px;height:12px;float:right;transform:rotate(135deg);-ms-transform:rotate(135deg);-o-transform:rotate(135deg);-webkit-transform:rotate(135deg);-moz-transform:rotate(135deg);content:"";}
.newupgrade .flex-direction-nav li:hover a:after{border-color:#f00;}
.newupgrade .flex-control-paging li .flex-active{background:#fd7153;}
.dis_code{display:block;font-size:15px;color:#fff;text-align:center;padding:9px 0 6px;clear:both;background:#30b21f;width:300px;border-radius:10px 10px 0 0;margin:0 auto;}
.dis_code small{color:#fff;padding:0 3px;font-weight:700;}
.newupgrade .flex-control-nav{margin:7px 0 35px;}
.mobileImg{float:left;width:200px;}
.agree_code cite{font-style:normal;line-height:20px;display:block;padding:2px 0 0;}
.sync_txt{display:block;}
.inst_btn{background:rgb(83,93,208);background:-moz-linear-gradient(top, rgba(83,93,208,1) 0%, rgba(92,82,197,1) 6%, rgba(99,75,197,1) 7%, rgba(110,64,186,1) 13%, rgba(118,57,184,1) 15%, rgba(124,56,175,1) 18%, rgba(138,58,171,1) 23%, rgba(143,56,161,1) 26%, rgba(150,57,161,1) 30%, rgba(161,57,156,1) 34%, rgba(173,54,148,1) 41%, rgba(177,53,141,1) 47%, rgba(187,51,136,1) 51%, rgba(192,48,133,1) 55%, rgba(193,50,129,1) 57%, rgba(200,56,118,1) 59%, rgba(208,59,114,1) 63%, rgba(215,68,112,1) 66%, rgba(217,72,105,1) 68%, rgba(219,77,93,1) 69%, rgba(224,84,83,1) 74%, rgba(230,92,79,1) 78%, rgba(235,101,64,1) 83%, rgba(238,106,58,1) 87%, rgba(244,116,55,1) 92%, rgba(244,120,46,1) 96%, rgba(246,124,47,1) 97%, rgba(246,127,47,1) 98%, rgba(247,128,46,1) 100%, rgba(246,127,43,1) 100%);background:-webkit-linear-gradient(top, rgba(83,93,208,1) 0%,rgba(92,82,197,1) 6%,rgba(99,75,197,1) 7%,rgba(110,64,186,1) 13%,rgba(118,57,184,1) 15%,rgba(124,56,175,1) 18%,rgba(138,58,171,1) 23%,rgba(143,56,161,1) 26%,rgba(150,57,161,1) 30%,rgba(161,57,156,1) 34%,rgba(173,54,148,1) 41%,rgba(177,53,141,1) 47%,rgba(187,51,136,1) 51%,rgba(192,48,133,1) 55%,rgba(193,50,129,1) 57%,rgba(200,56,118,1) 59%,rgba(208,59,114,1) 63%,rgba(215,68,112,1) 66%,rgba(217,72,105,1) 68%,rgba(219,77,93,1) 69%,rgba(224,84,83,1) 74%,rgba(230,92,79,1) 78%,rgba(235,101,64,1) 83%,rgba(238,106,58,1) 87%,rgba(244,116,55,1) 92%,rgba(244,120,46,1) 96%,rgba(246,124,47,1) 97%,rgba(246,127,47,1) 98%,rgba(247,128,46,1) 100%,rgba(246,127,43,1) 100%);width:120px;height:40px;color:#fff;line-height:40px;text-align:center;display:block;padding:0 15px;border-radius:5px;margin:5px 0 0;box-shadow:3px 3px 3px -3px #bebfc3;-webkit-box-shadow:3px 3px 3px -3px #bebfc3;-moz-box-shadow:3px 3px 3px -3px #bebfc3;-ms-box-shadow:3px 3px 3px -3px #bebfc3;}
.sliderblock .slides li{background-size:cover!important;background-position:100% 25%!important;height:165px;border-radius:15px;overflow:hidden;}
.sliderblock{padding:20px 0 20px 20px;box-sizing:border-box;}
.sliderblock .flexslider2{margin:10px 0 0;}
.sliderblock .flex-prev{position:absolute;left:0;top:0;width:40px;background:rgba(0,0,0,0.6);height:165px;font-size:0;}
.sliderblock .flex-next{position:absolute;right:0;top:0;width:40px;background:rgba(0,0,0,0.6);font-size:0;height:165px;}
.sliderblock .flexslider2::after{content:none;}
.sliderblock .flex-prev:after{border-left:2px solid #fff;border-bottom:2px solid #fff;font-size:0;position:relative;transform:rotate(45deg);float:left;width:14px;height:14px;margin:70px 0 0 15px;content:' ';}
.sliderblock .flex-next:after{border-left:2px solid #fff;border-bottom:2px solid #fff;font-size:0;position:relative;margin:70px 0 0 7px;transform:rotate(-135deg);float:left;width:14px;height:14px;content:' ';}
.switch{position:relative;display:inline-block;width:36px;height:14px;float:right;margin:0 20px 0 0;}
.switch input{display:none;}
.switchbox{position:absolute;cursor:pointer;top:0;left:0;right:0;bottom:0;background-color:#e9eaef;-webkit-transition:.4s;transition:.4s;}
.switchbox:before{position:absolute;content:"";height:22px;width:22px;left:0;top:-4px;background-color:#a1a1a1;-webkit-transition:.4s;transition:.4s;}
input:checked + .switchbox{background-color:#ddeafa;}
input:focus + .switchbox{box-shadow:0 0 1px #2196F3;}
input:checked + .switchbox:before{-webkit-transform:translateX(16px);-ms-transform:translateX(16px);transform:translateX(16px);}
input:checked + .switchbox:before{background-color:#2196F3;}
.switchbox.round{border-radius:34px;}
.switchbox.round:before{border-radius:50%;}
.insta_block{background:#fff;width:360px;height:418px;padding:10px;box-sizing:border-box;}
.ins_slider{width:100%;}
.ins_slider .carousel-inner > .item{background:none;}
.ins_slider .carousel{width:100%;margin:0;}
.ins_slider .slide_img{width:340px;height:340px;background-size:cover!important;background-position:100% 25%!important;}
.ins_slider .carousel-control.left{margin-left:-70px;color:#fff;}
.ins_slider .carousel-control.right{margin-right:-70px;}
.carousel-control.left .slide_leftarrow,.carousel-control.right .slide_rightarrow{border-color:#fff;}
.carousel-control.left:hover,.carousel-control.right:hover{opacity:1;}
.ph_btm{clear:both;padding:13px 0 0;}
.userphoto{width:40px;height:40px;float:left;background-size:cover !important;background-position:100% 25% !important;border-radius:50%;}
.ph_desc{float:left;width:85%;padding:5px 0 0 10px;}
.phname small{float:left;}
.phname strong{float:right;font-weight:400;color:#75797c;font-size:12px;line-height:16px;}
.userdesc{width:100%;white-space:nowrap;overflow:hidden;text-overflow:ellipsis;float:left;color:#75797c;line-height:18px;font-size:12px;}
.instloader{margin:42px 0 0 25px;display:block;width:60px;}
.flex-direction-nav .flex-disabled{opacity:0!important;filter:alpha(opacity=0);cursor:default;z-index:-1;}
.flexslider2 li{cursor:pointer;}
.upgradeBtn{text-transform:none;}
.upgradeBlock > a{text-transform:none;}
.new_slideImg{width:42px;height:42px;}
.test_cont{width:70%;}
.head_testim{display:inline-block;padding:7px 15px;border-top:1px solid #d6dcea;padding-bottom:4px;width:89%;}
.test_cont p{line-height:15px;font-weight:400;}
.flexslider .slides img{height:100%;max-width:inherit;width:auto;position:relative;left:-10px;}
.flexslider{margin:0;}
.dropList{padding-bottom:15px;}
.flexslider::after{border-bottom:1px solid #999eab;border-right:1px solid #999eab;content:" ";height:6px;position:absolute;right:2px;top:15px;transform:rotate(-39deg);width:6px;}
.renew_cont{top:39px;}
.coupons_wrap{display:table;width:100%;border-top:1px solid #d6dcea;}
.new_txt{background:#ff3646;padding:6px 8px;display:inline-block;color:#fff;border-radius:4px;float:right;margin-top:5px;font-size:11px;}
.cupn_txt{display:inline-block;vertical-align:middle;margin-left:20px;font-size:13px;}
.icon_coupon{background:url(https://imgassets.quackquack.co/icons-spritev13.png) no-repeat -118px -340px;width:30px;height:30px;display:inline-block;vertical-align:middle;margin-left:5px;}
.coupons_wrap a{width:90%;display:inline-block;padding:12px 15px;}
.clockimgnew{background:url(https://imgassets.quackquack.co/icons-spritev13.png) no-repeat -175px -378px;height:140px;width:185px;display:block;}
.emptylikes{border:1px solid #d3d8e6;border-radius:50%;width:125px;height:125px;position:relative;background:#fff;margin:0 auto;}
.emptylikes small{background:url(https://imgassets.quackquack.co/icons-spritev13.png) no-repeat -2px -373px;width:58px;height:48px;display:block;position:absolute;left:0;top:0;right:0;bottom:0;margin:auto;}
.emptychat_icon{background:url(https://imgassets.quackquack.co/icons-spritev13.png) no-repeat -155px -338px;width:32px;height:39px;vertical-align:middle;display:inline-block;margin:-7px 0 0;}
.testimonialBlock .flexslider{margin:12px 0 0;}
.testimonialBlock .flexslider::after{content:none;}
.testimonialBlock .flexslider .slides img{left:0;}
.testimonialBlock .test_cont{width:90%;}
.unblockUsers_block .profileTop{height:inherit;}
.testimg{display:block;width:86px;height:86px;background:url(https://imgassets.quackquack.co/test-sprite.jpg) no-repeat left top;}
.testimg1{background-position:-2px top;}
.testimg2{background-position:-100px top;}
.testimg3{background-position:-311px top;}
.testimg4{background-position:-214px top;}
.dislikeico_img{background:url(https://imgassets.quackquack.co/likeicons-sprite.png) no-repeat -210px -37px;background-size:300px 94px;width:26px;height:26px;}
.likeico_img{background:url(https://imgassets.quackquack.co/likeicons-sprite.png) no-repeat -20px -38px;background-size:300px 94px;width:26px;height:26px;}
.msgicon_img{background:url(https://imgassets.quackquack.co/likeicons-sprite.png) no-repeat -37px top;background-size:130px 41px;width:40px;height:41px;}
.explore_txt{text-align:center;display:block;margin:40px auto 0;color:#757575;text-align:center;position:relative;font-size:21px;width:620px;}
.explore_txt:after{content:'';width:100px;height:2px;background:#d6d7db;position:absolute;left:0;top:9px;}
.explore_txt:before{content:'';width:100px;height:2px;background:#d6d7db;position:absolute;right:0;top:9px;}
.fieldBlock.srcfield{float:left;}
.selopt_block ul li .check.checkmark{left:150px;top:23px;}
.exploreshow{padding:35px 0 0;}
.exploreshow .show_title{color:#959697;}
.all_done_block{display:inline-block;padding-top:18px;padding-bottom:18px;width:705px;border-bottom:1px solid #e8ebf2;}
.all_done_wrap{display:inline-block;width:100%;text-align:center;position:relative;}
.all_done .donetxt{font-size:19px;color:#2dc234;}
.all_done{display:inline-block;border:2px solid #2dc234;border-radius:100px;padding:9px 35px;background:#ffffff;position:relative;z-index:1;}
.all_done_wrap .line{height:2px;width:78%;position:absolute;background:#2dc234;left:11%;top:50%;z-index:0;}
.all_done_block p{font-size:14px;margin-top:9px;display:inline-block;width:100%;text-align:center;color:#868383;}
.alldone_visitors{background:#fefeff;border-radius:4px;box-shadow:1px 1px 4px 0px rgba(0,0,0,0.3);margin:15px;margin-bottom:20px;border:none;padding:20px 0;}
.disc_label{font-size:18px;color:#fe6d00;display:inline-block;float:right;margin-right:10px;font-family:roboto_m;}
.selected .disc_label{color:#ffffff;}
.cards_block.cards_block_new{width:100%;}
.cards_block.cards_block_new .tabs_new{display:inline-block;float:none;}
.cards_block.cards_block_new .tabs_new li{width:15%;display:inline-block;border:2px solid #bcc2d0;padding:15px 0;margin-right:9px;border-radius:6px;text-align:center;color:#000;font-family:roboto_m;font-size:16px;cursor:pointer;}
.cards_block.cards_block_new .tabs_new li:last-child{margin-right:0;}
.cards_block.cards_block_new .tabs_new li:hover{color:#0391dc;border-color:#0391dc;}
.upg_left.upg_fullW{width:94%;background:none;padding:30px;}
.upg_fullW .pkg_title_new{display:inline-block;padding:7px 0 8px;}
.upg_fullW .pmt_summry_block{display:inline-block;float:right;position:relative;height:42px;}
.pmt_summry_block .pay_amt_new{display:inline-block;position:static;background:none;color:#000;float:right;padding:0;font-size:16px;font-family:roboto_m;text-align:right;}
.pmt_summry_block .pay_amt_new span{margin-left:5px;float:none;}
.pmt_summry_block .have_dct_new{width:auto;float:right;padding:0px;font-family:roboto_m;font-size:16px;}
.pmt_summry_block .dct_code_new{float:right;margin:0;width:210px;position:absolute;right:30px;top:0px;}
.pmt_summry_block .dct_code_new .dct_field{width:140px;padding:5px;font:400 14px/20px roboto_r;}
.pmt_summry_block .dct_code_new .prem_btn{font:400 14px/30px 'roboto_r', sans-serif;padding:0 8px;}
.pmt_summry_block .close_dct_code{top:2px;height:25px;width:25px;background:url(https://imgassets.quackquack.co/icons-spritev13.png) no-repeat -96px -75px;background-size:314px 449px;right:-30px;}
.pmt_summry_block .error_validcode{position:relative;top:30px;width:240px;}
.pmt_summry_block .dct_success_new{padding:0;text-align:right;margin-top:-4px;}
.pmt_summry_block .dct_success_new span{float:none;font-size:16px;font-family:roboto_m;color:#000;}
.pmt_summry_block .dct_success_new .pay_amt_new,.pmt_summry_block .dct_success_new .pay_amt_new span{color:#0391dc;font-family:roboto_m;font-size:16px;}
.upg_left.upg_fullW .cards_cont{padding:30px 0 0;}
.thisorthatblock{background:#eff2f4;border-radius:5px;min-height:198px;text-align:center;padding:20px;box-sizing:border-box;margin:12px 0 0;position:relative;width:299px;}
.thisimgblock{float:none;width:100px;padding:0 10px;box-sizing:border-box;display:inline-block;cursor:pointer;}
.thisimgblock img:hover{border:2px solid #005ca6;}
.thisorthatimg{border-radius:100%;height:100px;margin:auto;width:100px;overflow:hidden;}
.thisorthatimg img{border-radius:100%;overflow:hidden;border:2px solid #eff2f4;}
.thisorthatimg span{display:inline-block;width:100px;height:100px;background-size:100px 100px !important;overflow:hidden;border-radius:100%;}
.sel_imgs img{border-radius:100%;overflow:hidden;cursor:pointer;}
#selectedAnswers .sel_imgs_wrap.deselected{cursor:pointer;}
.sel_imgs_wrap span{display:inline-block;width:40px;height:40px;background-size:240px 400px !important;overflow:hidden;border-radius:100%;}
.this_name{font-size:15px;color:#2d2d2d;font-family:roboto_m;}
.thisorthatblock h5{color:#2d2d2d;font-size:17px;margin-bottom:10px;font-family:roboto_m;font-weight:400;}
.orblock{width:16.66666667%;float:none;padding:0 10px;box-sizing:border-box;height:90px;position:relative;display:inline-block;vertical-align:top;}
.this_or{position:absolute;top:50%;left:50%;font-size:18px;transform:translate(-50%,-50%);}
.thisskipbtn{color:#8b8b8b;margin-top:10px;display:inline-block;position:absolute;background:#fff;padding:13px 15px 30px;bottom:-30px;border-radius:100%;left:50%;margin:0 0 0 -26px;font-size:15px;cursor:pointer;}
.thisskipbtn:hover{color:#000;}
.thismain{clear:both;padding:10px 0 0;position:relative;float:left;width:100%;}
.block_cont h5{color:#000;font-size:20px;margin-bottom:15px;}
.thismain2{display:none;}
.deselected span{-webkit-filter:grayscale(100%);filter:grayscale(100%);opacity:0.7;}
.selectedCont{padding:12px 0 0;clear:both;overflow:hidden;display:none;}
.selleft_cont{float:left;line-height:40px;font-family:roboto_m;font-size:15px;color:#2d2d2d;}
.ortxt{margin:0 6px;font-style:normal;}
.desel_txt{text-decoration:line-through;}
.sel_imgs{float:right;}
.sel_imgs span{float:left;width:40px;margin:0 3px;}
.common_cont{background:#eff2f4;border-radius:10px;padding:0 20px 12px;position:relative;margin:4px 0 0;}
.common_cont .sel_imgs img{cursor:inherit;}
.thisshowprofile{padding:0 20px;}
.commontxt{background:#fe3845;border-radius:4px;display:inline-block;color:#fff;padding:5px 10px;position:absolute;top:-16px;right:20px;font-family:roboto_m;}
.profile_name{font-size:18px;padding:10px 0 0 15px;display:block;font-family:roboto_m;clear:both;}
.profile_name cite{font-style:normal;}
.exp_profile{background:#fff;border-radius:6px;}
.profile_city{display:block;clear:both;padding:5px 0 10px 15px;font-size:15px;}
.notmain{position:fixed;z-index:999999;color:white;width:100%;left:0;top:0;bottom:0;display:none;}
.popNotify{background-color:white;color:black;padding:15px;width:340px;left:12%;border-radius:5px;align-items:center;text-align:center;position:absolute;top:1%;box-shadow:2px 2px 3px 0px rgba(0,0,0,0.1);border:1px solid #d2d8e6;}
.allowb,.nothanks{border:none;background-color:transparent;color:#fff;cursor:pointer;padding:5px;width:45%;float:left;font-size:14px;height:40px;outline:none;}
.allowb{background:#ff6000;}
.nothanks{background:#d6d7dc;}
.norif_btns{display:inline-block;width:100%;margin-top:10px;}
.norif_btns .btn.nothanks:hover{background:#cdced0;outline:none;}
.norif_btns .btn.allowb:hover{background:#da5708;outline:none;}
.notif_cnt{width:75%;text-align:left;display:inline-block;vertical-align:middle;}
.notif_cnt p{line-height:20px;font-family:roboto_m;color:#3a4457;font-size:16px;padding-left:10px;}
.notif_img{width:20%;display:inline-block;vertical-align:middle;}
.seen_txt{float:right;clear:both;position:absolute;right:56px;font-size:11px;color:#a3a3a3;}
.dot-falling{position:relative;left:-9999px;width:8px;height:8px;border-radius:20px;background-color:#94959a;color:#94959a;box-shadow:9999px 0 0 0 #94959a;animation:dotFalling 1s infinite linear;animation-delay:.1s;}
.dot-falling::before, .dot-falling::after{content:'';display:inline-block;position:absolute;top:0;left:3px;}
.dot-falling::before{width:8px;height:8px;border-radius:20px;background-color:#94959a;color:#94959a;animation:dotFallingBefore 1s infinite linear;animation-delay:0s;}
.dot-falling::after{width:8px;height:8px;border-radius:20px;background-color:#94959a;color:#94959a;animation:dotFallingAfter 1s infinite linear;animation-delay:.2s;left:-3px;}
@keyframes dotFalling{0%{box-shadow:9999px -9px 0 0 rgba(152, 128, 255, 0);}
 25%, 50%, 75%{box-shadow:9999px 0 0 0 #94959a;}
 100%{box-shadow:9999px 9px 0 0 rgba(152, 128, 255, 0);}
}
@keyframes dotFallingBefore{0%{box-shadow:9984px -9px 0 0 rgba(152, 128, 255, 0);}
 25%, 50%, 75%{box-shadow:9984px 0 0 0 #94959a;}
 100%{box-shadow:9984px 9px 0 0 rgba(152, 128, 255, 0);}
}
@keyframes dotFallingAfter{0%{box-shadow:10014px -9px 0 0 rgba(152, 128, 255, 0);}
 25%, 50%, 75%{box-shadow:10014px 0 0 0 #94959a;}
 100%{box-shadow:10014px 13px 0 0 rgba(152, 128, 255, 0);}
}
.typing{float:left;width:57px;background:url(https://imgassets.quackquack.co/typing-bg.png) no-repeat left top;background-size:57px 31px;height:31px;margin:10px 66px 10px -5px;}
.stage{width:22px;margin:13px 0 0 27px;}
.likeico_block .msgIcon.msgIcon1{display:none;}
.btmblock.btmblock2.likebtmblock .icons_block span{margin:0 55px;}
.newico_block span{width:auto;height:auto;background:none;padding:0px 0;}

/*.newico_block{background:#e7e7e7;
    }*/
.newico_block span.msg_ico{width:250px;text-transform:uppercase;background:#09dade;border-radius:7px;margin:0 55px;}
.newico_block span.msg_ico:hover{background:#005bce;}
.newico_block span.msg_ico small{margin-top:-2px;}
.newico_block span.msg_ico strong{line-height:36px;color:#fff;}
.newico_block span.like_ico{background:none;color:#0271fe;}
.newico_block span.like_ico:hover{background:inherit;}
.newico_block span.like_ico small{background:#0271fe;width:40px;height:40px;display:inline-block;border-radius:50%;position:relative;vertical-align:middle;}
.newico_block span.like_ico small:after{background:url("https://imgassets.quackquack.co/icons-spritev13.png") no-repeat left top;position:absolute;left:0;top:0;bottom:0;right:0;margin:auto;background-size:280px 409px;background-position:-196px -37px;width:20px;height:18px;content:'';}
.newico_block span.dislike_ico small:after{background:url("https://imgassets.quackquack.co/icons-spritev13.png") no-repeat left top;background-size:280px 409px;background-position:-60px -294px;width:16px;height:16px;position:absolute;box-sizing:border-box;content:'';left:0;top:0;right:0;bottom:0;margin:auto;}
.newico_block span.dislike_ico small{position:relative;width:34px;height:34px;background:none;border:3px solid #717171;border-radius:50%;}
.newico_block span strong{color:#0271fe;text-transform:uppercase;padding:0 0 0 7px;}
.newico_block span.dislike_ico strong{color:#71706f;}
.newico_block span.dislike_ico:hover{background:none;}
.newmedia span{background:none;width:auto;height:auto;}
.newmedia span.verify_txt{color:#2dc234;border:2px solid #2dc234;border-radius:3px;font-size:14px;padding:3px 4px 2px;text-align:center;height:16px;text-transform:uppercase;line-height:16px;margin-top:1px;font-family:roboto_m;letter-spacing:.3px;}
.visico_block{background:#fff;border-top:1px solid #e4e4e4;}
.visico_block span:before{display:none;}
.visico_block .msgIcon{width:160px;background:#0271fe;color:#fff;margin:0 27px;font-size:14px;text-transform:uppercase;font-weight:bold;border-radius:3px;line-height:45px;height:45px;}
.visico_block cite{font-style:normal;padding:0 0 0 4px;font-weight:600;}
.likeico_block cite{font-family:roboto_m;font-size:18px;display:inline-block;vertical-align:middle;margin-top:-1px;}
.visico_block .msgicon_img{background:url("https://imgassets.quackquack.co/icons-spritev13.png") no-repeat -133px -23px;background-size:220px 321px;background-size:220px 321px;display:inline-block;width:20px;height:23px;vertical-align:middle;margin:-3px 0 0 0;position:relative;}
.visico_block .dislikeico_img{background:url(https://imgassets.quackquack.co/likeicons-sprite.png) no-repeat -104px -18px;background-size:150px 47px;width:16px;height:14px;}
.visico_block span{vertical-align:middle;}
.visico_block span.dislikeIcon small{width:16px;height:14px;}
.visico_block span.dislikeIcon{width:27px;height:27px;border:2px solid #717171;border-radius:50%;}
.visico_block span.likeIcon{background:#0271fe;width:31px;height:31px;border-radius:50%;}
.visico_block span.likeIcon small{background:url("https://imgassets.quackquack.co/icons-spritev13.png") no-repeat -320px -288px;width:20px;height:15px;}
.visico_block .msg_single{margin:0 auto;display:inline-block;padding:0;}
.likeico_block{background:#fff;border-top:1px solid #e1e3e2;}
.diswrap{font-size:14px;display:inline-block;width:50%;text-transform:uppercase;color:#717171;cursor:pointer;}
.ico_txt{padding:0 0 0 5px;}
.likeico_block{height:auto;}
.likewrap{position:relative;color:#0271fe;}
.likeico_block span{vertical-align:middle;display:inherit;}
.likewrap:after{position:absolute;content:' ';left:0;border-left:1px solid #e1e2e2;height:67px;top:-13px;}
.newlike_block .dislike_ico,.newlike_block .like_ico{display:inline-block;width:50%;margin:0!important;position:relative;}
.newlike_block .like_ico:after{border-left:1px solid #e7e8e8;content:'';position:absolute;left:0;top:-13px;height:91px;}
.likeico_block .interest_txt{line-height:31px;}
.inboxMain .newmedia span{margin:0 0 0 5px;}
.inboxMain .newmedia{float:left;}
.onico_block span.msg_ico{background:#30b21f;border-radius:5px;}
.onico_block span.msg_ico:hover{background:#19850a;}
.onmedia{display:inline-block;vertical-align:top;float:none;margin-top:-1px;}
.profilenew{max-width:99%;}
.visico_block span,.visico_block span:hover,.visico_block span:hover small{transition:none;transform:none;}
.visico_block span small{transition:none;transform:none;}
.visico_block span:hover small{transition:none;}
.today_bday{display:none;}
.exp_new .explore_proofiles{padding-bottom:2px;}
.exp_new .explore_proofiles{margin:0 0 0 -17px;}
.exp_new .morebtn_wrap{display:none;}
.exp_new .profile_wraper{margin:0 0 15px 20px;width:346px;}
.exp_new .explore_proofiles .profile_wraper .profile_pic{height:280px;max-height:280px;border-radius:6px;}
.prof_btm{margin:-64px 0 0;float:left;background:#000000;padding:5px 0 2px;color:#fff;background:-moz-linear-gradient(top, rgba(0,0,0,0.0) 1%, rgba(0,0,0,0.4) 100%);background:-webkit-linear-gradient(top, rgba(0,0,0,0.0) 1%, rgba(0,0,0,0.4) 100%);background:linear-gradient(to bottom, rgba(0,0,0,0.0) 1%, rgba(0,0,0,0.4) 100%);width:100%;border-radius:0 0 6px 6px;}
.exp_new .explore_proofiles .profile_wraper:first-child{margin:0 0 15px 20px;}
.verifytxt{margin:-37px 14px 0;background:#2dc133;float:right;border:2px solid #2dc234;border-radius:3px;font-size:14px;padding:3px 4px 2px;text-align:center;height:16px;text-transform:uppercase;line-height:16px;font-family:roboto_m;color:#fff;letter-spacing:.3px;}
.com_int{clear:both;float:left;width:99%;}
.intBlock2{clear:both;padding:25px 0;width:564px;margin:0 auto;}
.title_int{color:#7f7f7f;font-size:15px;font-family:roboto_m;}
.intBoostCont{background:#fff;box-shadow:1px 3px 3px #c4c7d1;border-radius:5px;margin:8px 0 0;}
.boost_title{padding:16px 0;text-align:center;width:100%;font-size:15px;color:#727a8a;display:block;}
.stat_list{clear:both;overflow:hidden;border-top:1px solid #d1d4dd75;padding:12px 25px;box-sizing:border-box;}
.stat_list span{float:left;font-size:14px;color:#000;font-family:roboto_m;}
.stat_list strong{float:right;font-weight:normal;font-size:14px;font-family:roboto_m;}
.newcoupon_code{font-weight:600;font-size:16px;}
.newcoupon_code span{border:2px dashed #fff;padding:3px 0 3px 10px;border-right:none;margin:0 25px 0 0;position:relative;font-weight:400;}
.newcoupon_code span:after{width:20px;height:29px;background:url(https://imgassets.quackquack.co/sprite-upgv5.png) no-repeat -265px -11px;position:absolute;right:-13px;content:'';top:-2px;}
.newcoupon_code strong{color:#ffff00;font-weight:600;}
.preference_icon{position:absolute;right:10px;width:45px;height:45px;float:left;top:0;z-index:999999;cursor:pointer;}
.preference_icon small{background:url(https://imgassets.quackquack.co/icons-spritev13.png) no-repeat -76px -400px;width:24px;height:24px;float:left;margin:17px 0 0 14px;}
.preference_icon:hover small{background-position:-101px -400px;}
.preferencesblock{min-height:300px;width:400px;padding:18px 20px 20px;box-sizing:border-box;}
.preferencesblock h6{font-size:22px;text-align:center;font-weight:400;margin:0 0 15px;}
.new_myprefer{background:#fff;border:1px solid #e6e6e6;border-radius:8px;float:left;width:100%;margin:5px 0 0;}
.myprefer_cont{padding:0 15px 20px;width:100%;box-sizing:border-box;}
.myprefer_cont .fieldBlock{border:none;border-bottom:1px solid #e5e7ed;box-shadow:none;border-radius:0;margin:5px 0 0;padding:0;background:none;}
.pref_title{font-size:14px;color:#808080;display:block;float:left;width:100%;}
.myprefer_cont .fieldBlock2{border:none;}
.myprefer_cont .searchField{background:none;width:45px;}
.myprefer_cont .fieldBlock label{width:102px;}
.myprefer_cont .searchField select{font-weight:bold;}
.myprefer_cont .cityField{width:227px;}
.myprefer_cont .differ{margin:0 0 0 55px;}
.searchField::after{border-bottom:2px solid #999eab;border-right:2px solid #999eab;top:18px;}
.reach_txt{clear:both;padding:12px 20px 15px 20px;float:left;width:100%;color:#8f929a;font-size:13px;box-sizing:border-box;line-height:17px;border-top:1px solid #e6e6e6;text-align:center;}
.preference_left{float:left;width:162px;padding:5px 0;border-right:1px solid #e6e6e6;}
.pref_cont{float:left;position:relative;width:142px;}
.pref_cont span{font-size:16px;}
.pref_main{float:left;width:100%;padding:15px 17px 14px;box-sizing:border-box;}
.preferencesblock .onoffswitch{top:0;}
.pref_btm{margin:17px 0 0;}
.pref_right{border:none;margin:0 0 0 20px;width:142px;}
.new_myprefer2{margin:5px 0 20px;}
.preferencesblock .submitBtn{margin:8px 0 0;}
.preferencesblock .btn_vld{float:right;width:100%;font-size:14px;text-align:center;margin:-12px 0 8px;}
.notifications2{padding-top:0;border:none;}
.myprefer_cont .miles_within{border:none;}
.SeekBar2{margin:-5px 0 -13px;}
.addCards{margin-top:25px;}
.album_photos li.fbphoto{position:relative;}
.overlay_select{position:absolute;width:22px;display:none;height:22px;border-radius:100%;background:#5394e4;margin:2px;right:5px;bottom:0px;z-index:99;}
.overlay_select span{background:url(https://imgassets.quackquack.co/tour_text_like.png) no-repeat;width:14px;height:14px;background-size:100%;display:inline-block;vertical-align:middle;position:absolute;top:50%;left:50%;transform:translate(-50%,-50%);-webkit-transform:translate(-50%,-50%);-moz-transform:translate(-50%,-50%);-o-transform:translate(-50%,-50%);-ms-transform:translate(-50%,-50%);}
.scorebtn{background:#fff;border:2px solid #09dade;color:#09dade;font-size:17px;font-weight:bold;margin-right:10px;display:inline-block;font-weight:normal;font-family:roboto_m;}
.scorebtn:hover{background:#09dade;color:#fff;}
.scorebtn small{display:inline-block;background:url(https://imgassets.quackquack.co/response_score_sprite.png) no-repeat left -59px;background-size:305px 85px;width:24px;height:24px;vertical-align:middle;margin:-2px 4px 0 2px;}
.scorebtn:hover small{background-position:-24px -59px;}
.upgbtns{text-align:center;}
.upgbtns .myprofileupg{margin:10px 10px 0 10px;display:inline-block;width:290px;font-family:roboto_m;}
.resp_pop{width:660px;padding:20px;background:#f0f2f7;}
.resp_pop p{text-align:center;padding:10px 0 0;font-size:16px;}
.respblock{float:left;width:318px;background:#fff;text-align:left;margin:10px 0 0;min-height:124px;border:1px solid #dadfea;border-radius:8px;}
.respblock2,.respblock4{margin-left:20px;}
.resp_icon{background:url(https://imgassets.quackquack.co/response_score_sprite.png) no-repeat left top;width:73px;height:59px;float:left;background-size:305px 85px;margin:0 5px 0 15px;}
.resp_icon2{background-position:-76px 0;}
.resp_icon3{background-position:-152px 0;}
.resp_icon4{background-position:-228px 0;}
.resp_left{display:table-cell;vertical-align:middle;width:105px;}
.resp_right{float:none;margin:10px;width:202px;display:table-cell;vertical-align:middle;}
.resp_title{display:block;font-size:18px;text-transform:uppercase;font-family:roboto_m;}
.txt_desc{clear:both;padding:6px 0 0;display:block;color:#696969;line-height:16px;}
.add_btn{background:#ff6000;border-radius:3px;color:#fff;font-size:12px;padding:5px 10px;float:left;margin:8px 0 0;overflow:hidden;cursor:pointer;height:21px;line-height:22px;text-transform:uppercase;}
.add_btn:hover{background:#d75404;}
.scorebtm{clear:both;padding:14px 5px;border-top:1px solid #dadfea;overflow:hidden;background:#fff;border-radius:0 0 8px 8px;}
.scorebtm small{width:18%;height:7px;background:#d2d7e5;float:left;margin:0 1%;}
.scorebtm small:first-child{border-radius:8px 0 0 8px;}
.scorebtm small:last-child{border-radius:0 8px 8px 0;}
.scorebtm small.red{background:#e53834;}
.scorebtm small.yellow{background:#ffd500;}
.scorebtm small.pgreen{background:#b8ce01;}
.scorebtm small.green{background:#10c312;}
.score_cont{padding:10px 0 0;clear:both;overflow:hidden;}
.scoretop{height:120px;display:table;}
.potential_block{background:#fff;border:1px solid #bac0ce;border-radius:4px;height:75px;width:92%;margin:15px 4% 0;}
.newbooster_block{padding:20px 0;}
.newbooster_block .poten_cont p{width:250px;padding:0 15px;font-size:15px;}
.refresh_icon{width:49px;display:inline-block;vertical-align:middle;height:75px;border-left:1px solid #b8becb6e;cursor:pointer;}
.refresh_icon small{background:url(https://imgassets.quackquack.co/refresh_icon.png) no-repeat left top;width:30px;height:33px;display:block;background-size:20px 22px;margin:28px 0 0 16px;}
.poten_cont{display:inline-block;vertical-align:middle;width:359px;}
.poten_cont span{float:left;width:100%;padding:0 10px;line-height:20px;box-sizing:border-box;font-size:16px;max-height:60px;overflow:auto;}
.newbooster_block .thnksbtn{padding:18px 0 0;}
.newbooster_block .thnksbtn2 .no_btn{background:#d2d1d6;color:#fff;}
.newbooster_block .thnksbtn2.nobtn{padding:12px 0 0;}
.newbooster_block .thnksbtn2 .no_btn:hover{background:#bfbec1;}
.intbtm_txt{margin:15px 15% 0;color:#6d6e72;text-align:center;font-size:12px;display:block;line-height:15px;}
.booster_popup .newbooster_block .invite_txt{font-family:roboto_m;padding-top:15px!important;}
.newbooster_block .thankyou_img{width:110px;height:110px;}
.newsearch{width:560px;border:1px solid #ced0dd;box-shadow:none;background:#fff;}
.newsearch .searchBy_age{margin:0;}
.newsearch .srchcont{padding:0 25px 0;}
.newsearch .exploreshow{padding:18px 0 0;}
.newsearch .select_wrap{width:74px;overflow:hidden;height:70px;}
.newsearch .searchBy_age .from_age select, .newsearch .searchBy_age .to_age select{font-size:60px;}
.newsearch .fieldBlock{margin:0;border:2px solid #e9ebf1;height:43px;}
.newsearch .srchshowBlock input[type=radio]:checked ~ label:after{border:none;border-width:2px;color:#000;height:44px;}
.newsearch .srchshowBlock input[type=radio]:checked ~ label{border-color:#e9ebf1;border-width:2px;color:#000;}
.newsearch .srchshowBlock input[type=radio] ~ label:hover{border-color:#5496e4;}
.newsearch .srchshowBlock label{border-width:2px;border-color:#e9ebf1;}
.newsearch .selopt_block ul li .check.checkmark{left:10px;top:13px;}
.newsearch .searchnew_btn .update_btn{width:89%;font-size:19px;}
.newsearch .searchnew_btn{padding-bottom:0;padding:3px 0 0;width:100%;}
.newsearch .fieldBlock{height:47px;}
.newsearch #SeekBar{float:left;width:100%;margin-top:0;margin-bottom:-8px;}
.newsearch .fieldBlock.miles_within{height:110px;}
.newsearch .matches_within{float:left;width:100%;}
.newsearch .fieldtxt{line-height:44px;}
.newsearch .btn{height:51px;}
.newsearch .yrs_txt{bottom:14px;}
.newsearch .searchBy_age .from_age span, .newsearch .searchBy_age .to_age span,.newsearch .show_title{font-size:16px;}
.newsearch .srchshowBlock{padding-top:0;}
.new_notif{position:fixed;top:80px;width:240px;z-index:9;right:50px;z-index:999;}
.new_notif2{top:160px;}
.new_notif3{top:240px;}
.new_notif4{top:320px;}
.new_notif_wrap{width:210px;height:75px;border-radius:6px;display:table;padding:0 15px;margin:auto auto 10px auto;background:rgba(32,44,68,0.9);-webkit-animation-duration:1s;animation-duration:1s;-webkit-animation-fill-mode:both;animation-fill-mode:both;}
.new_notif .new_notif_wrap .notif_cnt{display:table-cell;vertical-align:middle;width:100%;}
.new_notif .new_notif_wrap .notif_cnt p{font-size:15px;color:#ffffff;display:inline-block;float:left;line-height:18px;padding-left:15px;}
.new_notif .new_notif_wrap .notif_cnt .redDot{float:right;margin:6px 0 0;height:30px;width:30px;line-height:30px;}
.new_notif .new_notif_wrap .notif_cnt small{width:31px;display:inline-block;float:left;}
.new_notif .new_notif_wrap .notif_cnt .n_icon{background:url('https://imgassets.quackquack.co/notification-iconsv1.png') no-repeat 0 -1px;margin:auto;background-size:100px 29px;width:31px;height:29px;display:block;margin-top:5px;margin-left:auto;margin-right:auto;}
.new_notif .new_notif_wrap .notif_cnt .n_icon2{background-position:-32px 0;width:27px;}
.new_notif .new_notif_wrap .notif_cnt .n_icon3{background-position:-60px 0;width:15px;}
.new_notif .new_notif_wrap .notif_cnt .n_icon4{background-position:-76px 0;width:23px;}
.new_notif .flex-viewport{background:rgba(32, 44, 68, 0.92);border-radius:6px;}
@-webkit-keyframes bounceInDownnote{from, 60%, 90%, to{-webkit-animation-timing-function:cubic-bezier(0.215, 0.61, 1);animation-timing-function:cubic-bezier(0.215, 0.61, 1);}
 0%{opacity:0;-webkit-transform:translate3d(0, -3000px, 0);transform:translate3d(0, -3000px, 0);}
 60%{opacity:1;-webkit-transform:translate3d(0, 25px, 0);transform:translate3d(0, 25px, 0);}
 90%{-webkit-transform:translate3d(0, 5px, 0);transform:translate3d(0, 5px, 0);}
 to{-webkit-transform:translate3d(0, 0, 0);transform:translate3d(0, 0, 0);}
}
@keyframes bounceInDownnote{from, 60%, 90%, to{-webkit-animation-timing-function:cubic-bezier(0.215, 0.61, 1);animation-timing-function:cubic-bezier(0.215, 0.61, 1);}
 0%{opacity:0;-webkit-transform:translate3d(0, -3000px, 0);transform:translate3d(0, -3000px, 0);}
 60%{opacity:1;-webkit-transform:translate3d(0, 25px, 0);transform:translate3d(0, 25px, 0);}
 90%{-webkit-transform:translate3d(0, 5px, 0);transform:translate3d(0, 5px, 0);}
 to{-webkit-transform:translate3d(0, 0, 0);transform:translate3d(0, 0, 0);}
}
.bounceInDownnote{-webkit-animation-name:bounceInDownnote;animation-name:bounceInDownnote;}
.notif_carousel .notif_close{background:#535e70;width:60px;height:5px;display:inline-block;margin:auto;position:absolute;bottom:3px;left:50%;transform:translate(-50%,-50%);-webkit-transform:translate(-50%,-50%);-moz-transform:translate(-50%,-50%);-o-transform:translate(-50%,-50%);border-radius:4px;}
.upgBlock{z-index:0;}
.cross_notif{background-size:200px 38px;background-position:-170px -4px;position:absolute;right:-1px;top:7px;cursor:pointer;width:15px;opacity:0.7;z-index:99999;}
@-webkit-keyframes bounceInUpNote{20%{-webkit-transform:translate3d(0, -10px, 0);transform:translate3d(0, -10px, 0);}
 40%, 45%{opacity:1;-webkit-transform:translate3d(0, 20px, 0);transform:translate3d(0, 20px, 0);}
 to{opacity:0;-webkit-transform:translate3d(0, -2000px, 0);transform:translate3d(0, -2000px, 0);}
}
@keyframes bounceInUpNote{20%{-webkit-transform:translate3d(0, -10px, 0);transform:translate3d(0, -10px, 0);}
 40%, 45%{opacity:1;-webkit-transform:translate3d(0, 20px, 0);transform:translate3d(0, 20px, 0);}
 to{opacity:0;-webkit-transform:translate3d(0, -2000px, 0);transform:translate3d(0, -2000px, 0);}
}
.bounceInUpNote{-webkit-animation-name:bounceInUpNote;animation-name:bounceInUpNote;}
.new_notif a{font-size:0;background:#000;width:6px;height:6px;display:block;border-radius:10px;}
.req_link{color:#5394e4;font-family:roboto_m;cursor:pointer;}
.req_img{width:100px;height:100px;overflow:hidden;border-radius:50%;margin:25px auto 0;}
.reqcont{width:350px;}
.reqcont p{color:#000;font-size:16px;}
.user_btm{background:#f8fafe;float:left;width:100%;text-align:center;width:100%;font-family:roboto_m;border-top:1px solid #e5e9f2;}
.user_btm small{width:50%;line-height:40px;text-align:center;cursor:pointer;float:left;box-sizing:border-box;}
.user_btm small.accbtn{color:#74d08d;border-right:1px solid #e5e9f2;cursor:pointer;}
.user_btm small.denybtn{color:#7a7a7a;}
.user_btm small:hover{background:#f3f4f9;}
.mobile_request .user_msg,.request_pending .user_msg{padding:0;min-width:240px;border-radius:2px;border:1px solid #e5e9f2;}
.mobile_request .user_msg strong,.request_pending strong{padding:10px;}
.mobile_request .msg_time,.request_pending .msg_time{float:right;font-size:11px;color:#a3a3a3;}
.reqpen_txt{background:#edf0f9;line-height:30px;font-size:13px;line-height:40px;display:block;width:100%;color:#3d88e3;text-align:center;display:inline-block;}
.reqcont .submitBtn input{font-size:20px;}
.intstatus_btm{clear:both;padding:20px 107px;overflow:hidden;border-top:1px solid #d1d4dd75;width:350px;margin:0 auto;}
.intstatus_btm .onoffswitch{position:relative;top:0;float:right;}
.status_txt{float:left;color:#f5595a;font-size:14px;}
.status_txt.green{color:#15a134;}
.new_myprefer2{margin-bottom:0;}
.req_photo{background-size:cover!important;background-position:50% 25%!important;display:block;width:100%;height:100px;}
.mobile_request .user_msg,.request_pending .user_msg{overflow:inherit;}
.booster_cont p{padding:25px 16px 0;}
.booster_cont .intbtm_txt{margin:15px 7% 0;font-size:13px;line-height:18px;}
.booster_cont .thnksbtn{padding:25px 0 0;}
#booster_popup .booster_cont .invite_txt{padding:10px 40px 0;}
.leftBlock ul li .preference_icon a small{padding-left:0;margin-top:5px;}
.score_response{text-align:center;clear:both;width:100%;}
.score_response .myprofileupg{display:inline-block;text-align:center;margin:15px 4px 0;}
.safe_cont ul{padding:28px 20px 18px 35px;clear:both;box-sizing:border-box;}
.safe_cont ul li{padding:0 0 10px 0;list-style:disc;margin:0 0 0 10px;font-size:15px;line-height:20px;}
.safe_cont p{padding:0 25px;line-height:19px;font-size:14px;}
.safe_btn{width:300px;}
.safeBlock .btns_btm{padding:15px 0 0;}
.safeBlock{width:430px;padding:30px 0;}
.safe_cont p a{color:#5394e4;}
.interestblock .inter_txt{white-space:nowrap;overflow:hidden;text-overflow:ellipsis;}
.contactList{padding:10px 0 0;}
.contactList li{padding:0;}
.tabs3{padding:0;}
.tabs3 a strong{font-weight:400;color:#fe3845;}
.deny_ico{display:inline-block;background:#feeaeb;border:3px solid #fe3845;border-radius:40px;height:30px;width:30px;vertical-align:middle;margin:0 6px;position:relative;}
.deny_ico:hover{background:#efdfdf;}
.deny_ico small{background:url("https://imgassets.quackquack.co/icons-spritev13.png") no-repeat -131px -389px;width:13px;height:13px;position:absolute;left:0;right:0;bottom:0;top:0;margin:auto;}
.accept_ico{background:#35ba3a;width:36px;height:36px;display:inline-block;vertical-align:middle;border-radius:40px;position:relative;float:right;}
.accept_ico:hover{background:#31a735;}
.accept_ico small{background:url("https://imgassets.quackquack.co/icons-spritev13.png") no-repeat -130px -409px;width:16px;height:13px;position:absolute;left:0;right:0;bottom:0;top:0;margin:auto;}
.profile_icons{display:table-cell;vertical-align:middle;}
.cont_txt{color:#5394e4;font-size:14px;white-space:nowrap;display:block;padding:35px 0 0;}
.contactempty small{max-width:140px;display:block;margin:0 auto;}
.tabs3 a{font-family:roboto_m;}
.empty_contacts{margin-top:0;position:relative;z-index:9;}
.empty_contacts .nomatches{padding:60px 0;}
.inboxMain .list_tabs .emoticonimg{max-width:21px;display:inline-block;vertical-align:middle;}
.contactList .titleBlock{width:78.5%;}
.contacts_header{clear:both;padding:15px 0 0;text-align:center;color:#757575;line-height:30px;}
.contacts_header a{color:#5394e4;}
.contactList .profileBlock{box-shadow:4px 4px 4px -3px #bebfc3;}
.shareBtns{padding:20px 30px 0;}
.shareBtns .btn{width:100%;font-size:16px;text-transform:uppercase;margin:0 0 10px;}
.shareBtns .no_btn{background:#bbc5d1;color:#fff;margin:0;height:55px;}
.shareBtns .no_btn:hover{background:#b6bcc5;}
.sharecontact .safe_cont ul li:last-child{padding-bottom:0;}
.contactList .mediaBlock{float:left;margin:-3px 0 0;}
.contactList .mediaBlock span{margin:2px 0 0 7px;}
.bl_block span.msg_ico{background:#0271fe;}
.bl_block span.msg_ico:hover{background:#005bce;}
.drop_cont{background:#fff;float:right;width:275px;border:1px solid #d1d9e6;position:relative;line-height:33px;font-family:roboto_r;}
.select_txt{display:block;cursor:pointer;}
.select_txt .m_txt{padding:0 0 0 12px;font-weight:400;font-size:14px;font-size:14px;float:left;width: 191px;line-height: 33px;user-select: none;-webkit-user-select:None;-moz-user-select:none;}
.drop_cont ul{float:left;width:100%;position:absolute;top:33px;left:-1px;background:#fff;z-index:9999;border:1px solid #d1d9e6;display:block;border-radius:0 0 6px 6px;display:none;box-shadow:0 3px 4px #d2d8e6;}
.drop_cont ul li{border-bottom:1px solid #d4d8e1;font-size:14px;color:#000;padding:2px 0 2px 9px;line-height:30px;display:block;font-family:roboto_r;cursor:pointer;}
.drop_cont ul li:hover{color:#5394e4;}
.fil_txt{float:left;}
.msg_dropdown{float:right;width:275px;margin:-5px 0 0;position:relative;z-index:999999;}
.fil_txt{float:left;font-size:14px;color:#757575;line-height:33px;}
.drop_cont ul li:last-child{border:none;}
.select_txt.dropup .m_txt{font-family: roboto_m;}
.msg_dropdown .redDot{margin-right:10px;margin-top: 2px;}
.select_txt .redDot{margin-top: 4px;}
.drop_arrow{float:right;border-left:2px solid #858faa;border-bottom:2px solid #858faa;width:5px;height:5px;transform:rotate(-45deg);margin:12px 21px 0 6px;}
.drop_arrow.open{transform:rotate(135deg);margin:15px 21px 0 6px;}
.newmatchpoup .happenleft{background:none;min-height:inherit;width:138px;box-shadow:none;float:none;display:inline-block;height:138px;}
.newmatchpoup .happened{margin:0 -15px 0 0;}
.newmatchpoup .happenright{margin:0 0 0 -15px;}
.newmatch_btm a{background:#3dd1bb;color:#fff;text-transform:uppercase;font-size:20px;height:50px;line-height:50px;width:210px;}
.newmatch_btm a:hover{background:#2dc1ab;}
.match_icon{background:#fff;top:92px;width:60px;height:60px;z-index:99;left:50%;margin:0 0 0 -30px;}
.match_icon em{background:url(https://imgassets.quackquack.co/icons-spritev13.png) no-repeat -89px -363px;width:30px;height:23px;margin:19px 0 0 15px;background-size:280px 409px;}
.newmatchpoup .match_pic{margin-top:0;width:130px;height:130px;}
.match_names,.bothlike_txt{text-align:center;color:#fff;font-size:16px;display:block;width:80%;clear:both;padding:20px 0 0;margin:0 10%;line-height:22px;}
.matched_users{clear:both;width:100%;text-align:center;}
.Larrow{border-left:2px solid #858faa;border-bottom:2px solid #858faa;width:5px;height:5px;transform:rotate(-135deg);margin:11px 12px 0 0;float:left;}
.drop_cont ul li.active{color:#5394e4;font-family:roboto_r;}
.inb_title{float:left;text-align:left;}
.happened{z-index:9;}
.match_names{font-size:18px;}
.msgtop_strip{background:#f3f4f9;font-size:14px;color:#000;padding:15px 0;display:block;width:100%;text-align:center;}
.msginfo_ico{background:url(https://imgassets.quackquack.co/icons-spritev13.png) no-repeat -151px -406px;width:17px;height:15px;display:inline-block;vertical-align:top;margin:0 0 0 4px;cursor:pointer;}
.msgtop_txt{display:inline-block;vertical-align:top;line-height:16px;}
.magicblock{background: rgba(0,0,0,0.4);height: 32px;position: absolute;bottom: 78px;border-radius: 0 6px 6px 0;left: 9px;cursor:pointer;}
.magic_icon{background: url("https://imgassets.quackquack.co/chatimg3.png") no-repeat -317px -11px;width: 17px;height: 21px;float:left;margin:7px 0 0 4px;}
.mag_txt{color: #f7f6f6;line-height: 40px;font-size: 10px;float:left;line-height: 32px;margin: 0 4px;letter-spacing: 0.5px;font-weight: 400;}
.info_ico1{background: url("https://imgassets.quackquack.co/icons-spritev13.png") no-repeat -107px -266px;width: 12px;height: 15px;float:left;margin: 10px 4px 0 0;background-size: 250px 365px;} 
.magic_img{display:block;width: 140px;margin: 35px auto 0;}
.magic_img img{display: block;margin: 0 auto;}
.magicPopup{width: 400px;}
.magicPopup p{padding-top: 35px;}
.boost_ico{background:url(https://imgassets.quackquack.co/chatimg3.png) no-repeat -293px -11px;margin:8px 0 0 6px;}
.request_icon {
    display: inline-block;
    float: none;
}
.drop_right{float:right;height: 33px;width: 70px;}
#infopopup p{padding-top:0;}
.safe_cont2{padding: 0 30px;}
.safe_txt{
  color: #ff2d2c;font-family: roboto_m;
  float:left;
}
.safe_txt small{font-size: 24px;text-transform:uppercase;}
.safe_txt strong{font-size: 13px;display:block;font-weight: 400;}
.number_txt{float: right;font-size: 46px;color: #d6d6d8;margin: -5px 0 0;}
.safeBlock2{width: 380px;padding: 40px 0 17px;min-height: inherit;
}
.imp_block{width: 100%;float:left;}
.safeBlock2 .txt2{font-size: 17px;line-height: 22px;color: #000;padding: 30px 0 0;float: left;width: 100%;text-align: center;min-height: 44px;}
.safe_cont2 p {
    padding: 15px 32px 0;
    line-height: 19px;
    font-size: 13px;width: 100%;box-sizing: border-box;
}
.btns_btm3{padding: 38px 0 0;}
.btns_btm3 .btn{margin: 0;height: 45px;line-height: 45px;font-size: 18px;text-transform: uppercase;width: 100%;}
.number_txt{font-size: 60px;margin: -12px 0 0;}
.newSearch2 .srchshowBlock .check{display:none;
}
.newSearch2 .srchcont{padding: 0 25px 0;
    box-sizing: border-box;
    width: 100%;
    float: left;}
.newSearch2 .searchBy_age .from_age,.newSearch2 .searchBy_age .to_age{width: 210px;text-transform: uppercase;}
.newSearch2 .searchBy_age .from_age span, .newSearch2 .searchBy_age .to_age span{font-size: 15px;box-sizing: border-box;}
.select_wrap{width: 100%;}
.newSearch2 .searchBy_age .from_age select,.newSearch2  .searchBy_age .to_age select{font-size: 15px;width: 110%;color: #000;height: 45px;line-height: 45px;padding: 0 0 0 10px;position: relative;font-weight: 700;}
.sel_years{border: 1px solid #c5c8db;border-radius: 5px;display:block;width: 100%;
    width: 100%;
    margin: 32px 0 0 4px;position: relative;
}
.newSearch2 span.yrs_txt{
  margin: -6px 0 0 40px;position: inherit;float: left;color:#000;
}
.newSearch2 .searchBy_age .select_wrap:after{position: absolute;
 right: -30px;top: 13px;
     border-bottom: 1px solid #757575;
    border-right: 1px solid #757575;
    content: " ";
    height: 6px;
    position: absolute;
    right: 15px;
    top: 18px;
    transform: rotate(45deg);
    width: 6px;
}
.newSearch2 .fieldtxt::after{border-color: #757575; }
.newSearch2 .srchshowBlock ul li{margin: 0;width: 50%;}
.newSearch2 .srchshowBlock label{border: 1px solid rgba(0,0,0,0);}
.newSearch2 .srchshowBlock input[type=radio]:checked ~ label:after{height: 50px;border-radius: 6px;}
.newSearch2 ul{
    border: 1px solid #757575;
    width: 100%;
    height: 52px;
    border-radius: 6px;box-sizing:border-box;
}
.newSearch2 .searchBy_age {float:left;} 
.newSearch2 .sel_city{margin: 25px 0 0;float: left;color:#757575;font-size: 15px;}
.newSearch2 .fieldBlock{border: 1px solid #757575;color:#000;margin: 10px 0 0;}
.newSearch2{width: 500px;}
.newSearch2 .sel_years{margin: 32px 0 0;border: 1px solid #757575;}
.newSearch2 .srchshowBlock ul li label{padding:13px 15px 13px 15px;border-radius: 1px;color:#000;text-align: center;}
.newSearch2 .srchshowBlock ul li:nth-child(2) input[type=radio]:checked ~ label:after{left: inherit;right: -2px;}
.newSearch2 .searchnew_btn{padding: 0 25px;width: 100%;box-sizing: border-box;}
.newSearch2 .searchnew_btn .update_btn{margin: 20px 0 0;width: 100%;}
.newSearch2 .exploreshow{padding: 34px 0 0;}
.newSearch2 .exploreshow .show_title{font-size: 15px;text-transform: uppercase;}
.newSearch2 .agetxt{padding-left:0}
.newSearch2 .selopt_block{padding: 10px 0 0;}
.newSearch2 .fieldBlock.srcfield{padding: 0 14px;}
.new_boostmain .intstatus_btm{background:#fff;border: 1px solid #757575;padding: 20px 30px;width: 500px;box-sizing:border-box;border-radius: 5px;} 
.booster_blockcont{background: #fff;border: 1px solid #757575;width: 500px;box-sizing: border-box;padding: 20px 30px;border-radius: 5px;margin: 0 auto;}
.booster_blockcont .automsgBlock{width: 100%;padding: 0;}


.slidec{position: absolute;top:0;left: 0;width: 100%;background:#f3f4f9;}
.slideblock{position: relative;overflow: hidden;clear: both;min-height: 78px;background:#f3f4f9;}
.slide2 {left: 350px;}
.slideL{
    left: -350px;
    -webkit-animation: slideLeft 0.5s forwards;
    -webkit-animation-delay: 2s;
    animation: slideLeft 0.5s forwards;
    animation-delay: 2s;
}
@-webkit-keyframes slideLeft {
    100% { left: -350px; }
}

@keyframes slideLeft {
    100% { left: -350px; }
}
.safeBlock2 .txt3{line-height: 60px;}
@-webkit-keyframes bounceInLeft {
  from,
  60%,
  75%,
  90%,
  to {
    -webkit-animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
    animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
  }

  0% {
    opacity: 0;
    -webkit-transform: translate3d(-3000px, 0, 0);
    transform: translate3d(-3000px, 0, 0);
  }

  60% {
    opacity: 1;
    -webkit-transform: translate3d(20px, 0, 0);
    transform: translate3d(25px, 0, 0);
  }

  75% {
    -webkit-transform: translate3d(-10px, 0, 0);
    transform: translate3d(-10px, 0, 0);
  }

  90% {
    -webkit-transform: translate3d(5px, 0, 0);
    transform: translate3d(5px, 0, 0);
  }

  to {
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
  }
}

@keyframes bounceInLeft {
  from,
  60%,
  75%,
  90%,
  to {
    -webkit-animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
    animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
  }

  0% {
    opacity: 0;
    -webkit-transform: translate3d(-3000px, 0, 0);
    transform: translate3d(-3000px, 0, 0);
  }

  60% {
    opacity: 1;
    -webkit-transform: translate3d(20px, 0, 0);
    transform: translate3d(25px, 0, 0);
  }

  75% {
    -webkit-transform: translate3d(-10px, 0, 0);
    transform: translate3d(-10px, 0, 0);
  }

  90% {
    -webkit-transform: translate3d(5px, 0, 0);
    transform: translate3d(5px, 0, 0);
  }

  to {
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
  }
}

.bounceInLeft {
  -webkit-animation-name: bounceInLeft;
  animation-name: bounceInLeft;
  -webkit-animation-duration: 1s;
  animation-duration: 1s;
  -webkit-animation-fill-mode: both;
  animation-fill-mode: both;
}
.new_onboard{left: 22px;}
.new_onboard .demo_block{margin: 0;border-radius: 0 10px 10px 0;overflow: hidden;width: 375px;box-shadow: 1px 2px 6px 0px rgba(0, 0, 0, 0.4);}
.lampico{background: url(https://imgassets.quackquack.co/lamp.png) no-repeat left top;background-size: 30px 38px;
    width: 30px;
    height: 38px;
    position: absolute;
    left: 12px;
    top: 10px;}
.new_onboard .demotext4{padding:10px 10px 10px 50px;font-size: 15px;line-height: 20px;}
.new_onboard .demopopup2{margin: 25px 0 30px;overflow: hidden;min-height: 66px;}
.new_onboard .demotext2{padding-left: 50px;padding-top: 18px;font-size: 15px;line-height: 20px;}
.new_onboard .demotext{padding: 18px 15px 0 50px;line-height: 20px;font-size: 15px;}
.new_onboard .like_demo .demotext,.new_onboard .third_demo .demotext2 {
    padding: 10px 15px 0 50px;line-height: 20px;
}
.new_onboard .last_block{padding-right: 0;margin: 25px 0 30px;}
.new_onboard .last_block .demotext2{padding: 9px 10px 0 50px}
.new_onboard .last_block2{margin-bottom: 0;}
.new_onboard .demo_msg_block{margin: 0 auto;width: 525px;overflow: inherit;border-radius: 10px;}

@media only screen and (max-width:420px){.album_pic:hover{border-color:transparent !important;}
}
.del_txt:hover,.del_txt:focus{outline:none;border:none;}
@media screen and (max-width:1540px){.upgBlock{right:100px;}
}
@media screen and (max-width:1380px){.upgBlock{right:50px;}
}
@media screen and (max-width:1200px){.upgBlock{right:0;}
 .dropDownBlock{left:-116px;}
}
@media screen and (max-width:1200px){.dropDownBlock{left:-116px;}
}
@media screen and (max-height:720px){.leftBlock ul li a, .leftBlock ul li span.link{padding:9px 0;}
}
@media screen and (max-height:600px){.leftBlock ul li a, .leftBlock ul li span.link{padding:5px 0;}
 .preference_icon small{margin:13px 0 0 14px;}
}

.btn:hover {
    background: #09dade;
}

      </style>


