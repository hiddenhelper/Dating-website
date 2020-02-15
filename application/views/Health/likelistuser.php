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
         <aside class="leftBlock" class="col-md-4">
            <ul>
               <li>
                  <a href="">
                  <span><em class="searchicon"></em></span>
                  <small>matches by common interest</small>
                  </a>
               </li>
               <li>
                  <a href="">
                  <span><em class="searchicon"></em></span>
                  <small>New and Online </small>
                  </a>
               </li>
               <li>
                  <a href="<?php echo base_url();?>welcome/Search_girl">
                  <span><em class="searchicon"></em></span>
                  <small>Search</small>
                  </a>
               </li>
               <li>
                  <a href="<?php echo base_url();?>welcome/likelist/<?php echo $record->user_id; ?>">
                  <span><em class="likesicon"></em></span>
                  <small>Likes You</small>
                  <strong class="redDot" id="like_home " style="color: red;"><?php echo $countlike->total_like_n_superl; ?></strong>
                  </a>
               </li>
               <li>
                  <a href="#">
                  <span><em class="inboxicon"></em></span>
                  <small>Messages</small>
                  <strong class="redDot" id="inb_home" style="display:none;"></strong>
                  </a>
               </li>
               <li>
                  <a href="">
                  <span><em class="visitorsicon"></em></span>
                  <small>Notification</small>
                  <strong class="redDot" id="visiter_home" style="display:none;"></strong>
                  </a>
               </li>
            </ul>
            
            <div class="rotate_testim">
               <div class="circle test" style="margin-right:5px;">
                  <div class="quotes webicons"></div>
               </div>
               <div class="mmbu">Testimonials</div>
               <div class="like_profilies">
                  <div style="float:left; width:186px;">
                     <div style="float:left; width:186px; padding-top:6px;" class="utx">However, over all, this site seems to work and that too in the Indian scenario. I am looking forward to trying more features on the site.</div>
                     <div style="float:left; width:186px; padding-top:12px;text-align:right" class="mtx"> - Nitinsal23</div>
                  </div>
               </div>
            </div>
         </aside>
      <style type="text/css">
         .content .contentMain {
         margin-left:90%;
         }
         .content {
         float: left;
         width: 730px;
         margin: -363px 0 0 237px;
         position: relative;
         }
      </style>
      <aside class="content contentMain" id="online_cont" style="display: block;   margin-left:26%;">
         <div class="scrollable" id="mainCont">
         <div class="listBlock">
            <ul class="profileList" id="container">
               <div class="container-fluid">
                  <div class="row">
                    <?php if(count($liked_users))
                            {
                                foreach ($liked_users as $key => $value) {

                                    ?>
                                    <div class="col-md-4">
                                        <li class="item" id="profile_li_0">
                                           <div class="profileBlock">
                                              <div class="profileMain" id="your_image_0" onclick="profile_popup(this.id,0,0,1,0)">
                                                 <div class="profileTop" style="padding-top: 1px;height: auto;">
                                                    <div class="titleBlock online_title">
                                                       <div class="name_Block name_online">
                                                          <span class="profileName profilenew">
                                                          <strong><?= $value['user_name']; ?></strong><small>, <?= $value['age']; ?>, <?= $value['city_name']; ?></small>
                                                          <span class="mediaBlock onmedia likemedia">
                                                          <span class="mobileIcon"></span>                           </span></span>
                                                       </div>
                                                       <span class="designation">
                                                       <span class='designation'><small><?= $value['profession']; ?></small></span>                               </span>
                                                    </div>
                                                 </div>
                                                 <figure class="profilePic" >
                                                    <span style="background:url(https://usrimg.quackquack.co/quack_15627245102652438485931.jpg) no-repeat left top;background-size:cover;background-position: 50% 25%;width: 100%;height: 254px;display:block;"></span>
                                                 </figure>
                                              </div>
                                              <div class="iconsBlock visico_block likeico_block" id="iconsblock_0">
                                                 <div class="diswrap" id="dislike_id_0" onclick="profile_dislike_fn(this.id)"><span class="dislikeIcon dislikeIcon1"><small class="dislikeico_img"></small></span><cite class="ico_txt">Skip</cite></div>
                                                 <span class="msgIcon msgIcon1" id="msg_id_0"><small class="msgicon_img"></small></span>
                                                 <div class="diswrap likewrap" id="like_id_0" onclick="profile_like_btn(this.id)"><span class="likeIcon likeIcon1"><small class="likeico_img"></small></span><cite class="ico_txt">Like</cite></div>
                                              </div>
                                              <div class="iconsBlock" style="display:none">
                                                 <div class="msgIcon msgIcon1 msg_single"><small class="msgsingle"></small><cite>Message</cite></div>
                                              </div>
                                              <div class="animate_block">
                                                 <div class="circle" id="smallcircle1_0"></div>
                                                 <span class="icon dislike" id="smalldislike_0"></span>
                                                 <div class="circle3" id="smallcircle3_0"></div>
                                                 <span class="icon like" id="smalllike_0"></span>
                                                 <div class="circle2" id="smallcircle4_0"></div>
                                                 <span class="icon suplike" id="smallmsg_0"></span>
                                              </div>
                                           </div>
                                        </li>
                                     </div>
                                   <?php
                                }
                            }
                        ?>
                  </div>
                  <input type="hidden" id="count_loop" value="0">
            </ul>
            </div>
         </div>
      </aside>
      <div class="popup" id="scorepopup" style="display:none">
      </div>
   </section>
   
   <div class="popup" id="freeupgpopup" style="display:none;"></div>
   <style>

      small {

        color: #2a3054;

        font-weight: bold; 

    }
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
   
   <script type="text/javascript">
      $('#flexslider1').flexslider({
          animation: "fade",
          directionNav: false,
          slideshow: 2000
      });
      $('#flexslider2').flexslider({
          animation: "fade",
          directionNav: false,
          slideshow: 2000
      });
   </script>
</body>
</html>