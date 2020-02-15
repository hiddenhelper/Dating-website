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
   color: #02dbdf;
   font-weight: bold;
   }
   .tex3{
   font-size: 17px;
   color: #02dbdf;
   font-weight: bold;
   }
   a {
   color: #02dbdf;
   text-decoration: none;
   font-weight: bold;
   }
   .form-control{
   border-color: #02dbdf52;
   }
   .form-control{
   margin: 0px 0px 20px;
   }
   .aline{
   font-size: 17px;
   border-color: #02dbdf52;
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
<!--  messagelist css -->
<style type="text/css">
   body {
   margin: 0 auto;
   max-width: 100%;
   }
   .container #insert {
   border: 1px solid #efefef;
   background-color: #ffffff;
   border-radius: 5px;
   padding: 10px;
   margin: 0px 0;
   width: 100%;
   }
   .darker {
   border-color: #ccc;
   background-color: #ddd;
   width: 100%;
   }
   .container::after {
   content: "";
   clear: both;
   display: table;
   }
   .container img {
   float: left;
   max-width: 60px;
   width: 50%;
   margin-right: 20px;
   border-radius: 50%;
   }
   .container img.right {
   float: right;
   margin-left: 20px;
   margin-right:0;
   }
   .time-right {
   float: right;
   color: #aaa;
   }
   .time-left {
   float: left;
   color: #999;
   }
   .w3-green{
   background-color: #4caf50;
   }
   .content-c{
   margin-top: 0%;
   font-weight: bold;
   }
   .content-c span{
   margin-top: 0%;
   font-weight: bold;
   }
   .leftBlock{
   color: ##2a3054;
   font-size: 20px;
   }
</style>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
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
         <aside class="cont_right"  style=" margin: -337px 7px 4px 282px;">
            <div class="maincont" class="col-md-6">
               <div class="block1">
               </div>
            </div>
         </aside>
      </div>
   </section>
   <input type="hidden" name="insta_access" id="insta_access" />
   <div id="fb-root"></div>
   <div class="popup" id="freeupgpopup" style="display:none;"></div>
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
      small{
      font-size: 100%;
      }
      .contactempty small {
      max-width: 131px;
      }
      .editslide .carousel-indicators {
      width: 265px
      }
   </style>
   <div class="upgBlock" style="z-index:9999">
      <div class="upgRight upgRight2" id="upgRight2" style="visibility:hidden;">
         <span class="upgArrow"></span>
         <strong class="upgTitle">Consider Premium Membership</strong>
         <div id="upgicoimg">
            <div class="upgList" id="upgList">
               <ul>
                  <li>Send Personalized Messages</li>
                  <li>Initiate chats</li>
                  <li>See who Likes you</li>
                  <li>View profile visitors</li>
                  <li>Unlock Interest Booster</li>
                  <li>And many more features..</li>
               </ul>
               <a href="javascript:void(0);" onclick="upgradeNow('https://www.quackquack.in/qq/upgrade/?from=qqrightframe_upgrade&event=Desktop_Upgrade_Header')" class="upgradeBtn renewupg upgnowBtn">UPGRADE NOW! → </a>
            </div>
         </div>
      </div>
   </div>
   <input type="hidden" id="topupgrade" value="" />
   <input type="hidden" id="topupgrade1" value="" />
   <div style="position: fixed; bottom: 0;left: 0; z-index: 9999;">
      <div id="snotify" class="snotify" style="position: relative;">
      </div>
   </div>
   <input type="hidden" id="load_notifications" value="1" />
   <div class="popup" id="req_done_today" style="display: none;">
      <span class="transparent"></span>
      <div class="lightbox">
         <div class="popupcont">
            <div class="boxMain doneBlock">
               <span class="close_icon close_icon2 req_done_but"></span>
               <span class="done_txt" id="done_title">Done for today!</span>
               <figure style="margin:15px auto;" class="clockimgnew"></figure>
               <p id="req_done_text"></p>
               <span class="okBtn"><input type="button" class="btn req_done_but" value="OK"></span>
            </div>
         </div>
      </div>
   </div>
   <script>
      $(document).ready(function(){
        var conditions  = false;
        var sender_user  = "<?= $record->user_id; ?>";

        var urls = "<?= base_url('images/profile/'); ?>";
        var base_url = "<?= base_url(); ?>";
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



        firebase.database().ref('/chat_history/'+sender_user).on('child_added',function(snapshot)
        {
          var data = snapshot.val();

          var roomStr = data.roomId;
          var res = roomStr.split("_");

          var _user_id = res[0]; 
          var _user_id1 = res[1]; 

          var currentDate = new Date(data.time);
          var date = currentDate.getDate();
          var month = currentDate.getMonth(); //Be careful! January is 0 not 1
          var year = currentDate.getFullYear();
          var dateString = date + "/" +(month + 1) + "/" + year;
          var times =   currentDate.toTimeString();
          var times1 =  times.split(":");
          var formattedTime = times1[0] + ':' + times1[1];
          if(data.image !="")
          {
            var imgURL = urls+data.image; 
          }else{
            var imgURL = urls+'dmi.jpg'; 
          }
          firebase.database().ref('/chat_room/'+data.roomId).on('child_added',function(snapshot)
          {
            var dataRoom = snapshot.val();
            if(Object.keys(dataRoom).length >1)
            {
              conditions = true;
            }
          });
        

          if(data.senderId == sender_user)
          {
              var append = `<a href="${base_url+'welcome/chats/'+_user_id}"> <div class="container" id="insert">
                                  <img src='${imgURL}'" alt="Avatar" style="width:100%;">
                                  <span class="content-c" style="color: red;">${data.historyName}</span>
                                   <p class="content-c">You: ${data.message}</p>
                                  <span class="time-right">${dateString+" "+formattedTime}  </span>
                                </div>
                            </a>`;
          $('.maincont').append(append);
          }else{
              var append = `<a href="${base_url+'welcome/chats/'+_user_id1}"> <div class="container" id="insert">
                                  <img src='${imgURL}'" alt="Avatar" style="width:100%;">
                                  <span class="content-c" style="color: red;">${data.historyName}</span>
                                   <p class="content-c"> ${data.message}</p>
                                  <span class="time-right">${dateString}</span>
                                </div>
                                 </a>`;
              $('.maincont').append(append);
          }
        });
      });
   </script>
</body>
</html>