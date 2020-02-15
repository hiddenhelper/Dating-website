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
    max-height: 60px;
    width: 50%;
    margin-right: 20px;
    border-radius: 50%;
    margin-top: -32px;
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
       color: #2a3054;
       font-size: 17px;
   
  }


.container{max-width:1170px; margin:auto;}
img{ max-width:100%;}
.inbox_people {
  background: #f8f8f8 none repeat scroll 0 0;
  float: left;
  overflow: hidden;
  width: 40%; border-right:1px solid #c4c4c4;
}
.inbox_msg {
  border: 1px solid #c4c4c4;
  clear: both;
  overflow: hidden;
}
.top_spac{ margin: 20px 0 0;}


.recent_heading {float: left; width:40%;}
.srch_bar {
  display: inline-block;
  text-align: right;
  width: 60%; padding:
}
.headind_srch{ padding:10px 29px 10px 20px; overflow:hidden; border-bottom:1px solid #c4c4c4;}

.recent_heading h4 {
  color: #05728f;
  font-size: 21px;
  margin: auto;
}
.srch_bar input{ border:1px solid #cdcdcd; border-width:0 0 1px 0; width:80%; padding:2px 0 4px 6px; background:none;}
.srch_bar .input-group-addon button {
  background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
  border: medium none;
  padding: 0;
  color: #707070;
  font-size: 18px;
}
.srch_bar .input-group-addon { margin: 0 0 0 -27px;}

.chat_ib h5{ font-size:15px; color:#464646; margin:0 0 8px 0;}
.chat_ib h5 span{ font-size:13px; float:right;}
.chat_ib p{ font-size:14px; color:#989898; margin:auto}
.chat_img {
  float: left;
  width: 11%;
}
.chat_ib {
  float: left;
  padding: 0 0 0 15px;
  width: 88%;
}

.chat_people{ overflow:hidden; clear:both;}
.chat_list {
  border-bottom: 1px solid #c4c4c4;
  margin: 0;
  padding: 18px 16px 10px;
}
.inbox_chat { height: 550px; overflow-y: scroll;}

.active_chat{ background:#ebebeb;}

.incoming_msg_img {
  display: inline-block;
  width: 6%;
}
.received_msg {
  display: inline-block;
  padding: 0 0 0 10px;
  vertical-align: top;
  width: 92%;
 }
 .received_withd_msg p {
  background: #ebebeb none repeat scroll 0 0;
  border-radius: 3px;
  color: #646464;
  font-size: 14px;
  margin: 0;
  padding: 5px 10px 5px 12px;
  width: 100%;
}
.time_date {
  color: #747474;
  display: block;
  font-size: 12px;
  margin: 8px 0 0;
}
.received_withd_msg { width: 57%;}
.mesgs {
  float: left;
  padding: 30px 15px 0 25px;
  width: 96%;
}

 .sent_msg p {
  background: #05728f none repeat scroll 0 0;
  border-radius: 3px;
  font-size: 14px;
  margin: 0; color:#fff;
  padding: 5px 10px 5px 12px;
  width:100%;
}
.outgoing_msg{ overflow:hidden; margin:26px 0 26px;}
.sent_msg {
  float: right;
  width: 46%;
}
.input_msg_write input {
      background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
    border: medium none;
    color: #332f2f;
    font-size: 15px;
    min-height: 72px;
    padding: 8px;
    width: 100%;
    /* height: 100%; */
}

.type_msg {border-top: 1px solid #c4c4c4;position: relative;}
.msg_send_btn {
  background: #05728f none repeat scroll 0 0;
    border: medium none;
    border-radius: 50%;
    color: #fff;
    cursor: pointer;
    font-size: 17px;
    height: 33px;
    position: absolute;
    top: 22px;
    right: 10px;
    width: 35px;
    height: 38px;
}
.messaging { padding: 0 0 50px 0;}
.msg_history {
  height: 516px;
  overflow-y: auto;
}

body,html{
      height: 100%;
      margin: 0;
      background: #7F7FD5;
         background: -webkit-linear-gradient(to right, #91EAE4, #86A8E7, #7F7FD5);
          background: linear-gradient(to right, #91EAE4, #86A8E7, #7F7FD5);
    }

    .chat{
      margin-top: auto;
      margin-bottom: auto;
    }
    .card{
      height: 500px;
      border-radius: 15px !important;
      background-color: rgba(0,0,0,0.4) !important;
    }
    .contacts_body{
      padding:  0.75rem 0 !important;
      overflow-y: auto;
      white-space: nowrap;
    }
    .msg_card_body{
      overflow-y: auto;
    }
    .card-header{
      border-radius: 15px 15px 7 9 !important;
      border-bottom: 0 !important;
    }
   .card-footer{
    border-radius: 0 0 15px 15px !important;
      border-top: 0 !important;
  }
    .container{
      align-content: center;
    }
    .search{
      border-radius: 15px 0 0 15px !important;
      background-color: rgba(0,0,0,0.3) !important;
      border:0 !important;
      color:white !important;
    }
    .search:focus{
         box-shadow:none !important;
           outline:0px !important;
    }
    .type_msg{
      background-color: rgb(239, 230, 230) !important;
      border:0 !important;
      color:white !important;
      height: 75px !important;
      overflow-y: auto;
      border-radius: 10px;
    }
      .type_msg:focus{
         box-shadow:none !important;
           outline:0px !important;
    }
    .attach_btn{
  border-radius: 15px 0 0 15px !important;
  background-color: rgba(0,0,0,0.3) !important;
      border:0 !important;
      color: white !important;
      cursor: pointer;
    }
    .send_btn{
  border-radius: 0 15px 15px 0 !important;
  background-color: rgba(0,0,0,0.3) !important;
      border:0 !important;
      color: white !important;
      cursor: pointer;
    }
    .search_btn{
      border-radius: 0 15px 15px 0 !important;
      background-color: rgba(0,0,0,0.3) !important;
      border:0 !important;
      color: white !important;
      cursor: pointer;
    }
    .contacts{
      list-style: none;
      padding: 0;
    }
    .contacts li{
      width: 100% !important;
      padding: 5px 10px;
      margin-bottom: 15px !important;
    }
  .active{
      background-color: rgba(0,0,0,0.3);
  }
    .user_img{
      height: 70px;
      width: 70px;
      border:1.5px solid #f5f6fa;
    
    }
    .user_img_msg{
      height: 40px;
      width: 40px;
      border:1.5px solid #f5f6fa;
    
    }
  .img_cont{
      position: relative;
      height: 80px;
      width: 90px;
  }
  .img_cont_msg{
      height: 40px;
      width: 40px;
  }
  .online_icon{
    position: absolute;
    height: 15px;
    width: 15px;
    background-color: #4cd137;
    border-radius: 50%;
    bottom: 4.2em;
    right: -35.6em;
    border: 1.5px solid white;
  }
  .offline{
    background-color: #c23616 !important;
  }
  .user_info{
    margin-top: auto;
    margin-bottom: auto;
    margin-left: 100px;
    margin-top: -27px;
    margin-right: -121px;
  }
  .user_info span{
    font-size: 20px;
    color: white;
  }
  .user_info p{
  font-size: 10px;
  color: rgba(255,255,255,0.6);
  }
  .video_cam{
    margin-left: 50px;
    margin-top: 5px;
  }
  .video_cam span{
    color: white;
    font-size: 20px;
    cursor: pointer;
    margin-right: 20px;
  }
  .msg_cotainer{
    margin-top: auto;
    margin-bottom: auto;
    margin-left: 10px;
    border-radius: 25px;
    background-color: #82ccdd;
    padding: 10px;
    position: relative;
  }
  .msg_cotainer_send{
    margin-top: auto;
    margin-bottom: auto;
    margin-right: 10px;
    border-radius: 25px;
    background-color: #78e08f;
    padding: 10px;
    position: relative;
  }
  .msg_time{
    position: absolute;
    left: 0;
    bottom: -15px;
    color: rgba(255,255,255,0.5);
    font-size: 10px;
  }
  .msg_time_send{
    position: absolute;
    right:0;
    bottom: -15px;
    color: rgba(255,255,255,0.5);
    font-size: 10px;
  }
  .msg_head{
    position: relative;
        padding: 10px 9px;

  }
  #action_menu_btn{
    position: absolute;
    right: 10px;
    top: 10px;
    color: white;
    cursor: pointer;
    font-size: 20px;
  }
  .action_menu{
    z-index: 1;
    position: absolute;
    padding: 15px 0;
    background-color: rgba(0,0,0,0.5);
    color: white;
    border-radius: 15px;
    top: 30px;
    right: 15px;
    display: none;
  }
  .action_menu ul{
    list-style: none;
    padding: 0;
  margin: 0;
  }
  .action_menu ul li{
    width: 100%;
    padding: 10px 15px;
    margin-bottom: 5px;
  }
  .action_menu ul li i{
    padding-right: 10px;
  
  }
  .action_menu ul li:hover{
    cursor: pointer;
    background-color: rgba(0,0,0,0.2);
  }
  @media(max-width: 576px){
  .contacts_card{
    margin-bottom: 15px !important;
  }
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
              <div class="mesgs">
                <div class="card-header msg_head">
                  <div class="d-flex bd-highlight" style="margin-top: 32px">
                    <div class="img_cont">
                      <img src=" <?= base_url('images/gallery/'); ?><?= $reciever->image1; ?>" class="rounded-circle user_img">
                      <span class="online_icon"></span>
                      <div class="user_info">
                        <span><?= $reciever->user_name; ?></span>
                     </div>
                    </div>
                  </div>
                </div>
                  <div class="msg_history">
                  </div>
                  <div class="type_msg">
                    <div class="input_msg_write">
                      <input type="text" class="write_msg" placeholder="Type a message" />
                      <button class="msg_send_btn" type="button"><i class="fa fa-paper-plane-o" aria-hidden="true"></i></button>
                    </div>
                  </div>
                </div>
               <div class="block1">
               </div>
            </div>
         </aside>
      </div>
      
   </section>
  
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
  
   <script>
    $(document).ready(function(){
      var recieve_me = false; 
      var send_me = false; 
      var urls = "<?= base_url('images/profile/'); ?>";
      var sender_user  = "<?= $record->user_id; ?>";
      var sender_name  = "<?= $record->user_name; ?>";
      var sender_register_id  = "<?= $record->register_id; ?>";
      var sender_image  = "<?= $record->image1; ?>";

      var reciever_user  = "<?= $reciever->user_id; ?>";
      var reciever_name  = "<?= $reciever->user_name; ?>";
      var reciever_register_id  = "<?= $reciever->register_id; ?>";
      var reciever_image  = "<?= $reciever->image1; ?>";
      

      var counter = 0;
      var counter1 = 0;
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

      firebase.database().ref('/online/'+reciever_user).on('child_added',function(snapshot)
      {
        var data_online = snapshot.val();
        if(data_online.isOnline)
        {
          $('.online_icon').css('background-color', '#4cd137')
        }else{
          $('.online_icon').css('background-color', '#f44336')
        }    
      });

      firebase.database().ref('online/').child(sender_user).set({
        about_self: "<?= $record->about_self; ?>",
        address: "<?= $record->address; ?>",
        city: "<?= $record->city; ?>",
        city_name: "<?= $record->city_name; ?>",
        age: "<?= $record->age; ?>",
        age_status: "<?= $record->age_status; ?>",
        user_id: "<?= $record->user_id; ?>",
        user_name: "<?= $record->user_name; ?>",
        user_email: "<?= $record->user_email; ?>",
        user_mobile: "<?= $record->user_mobile; ?>",
        user_pass: "<?= $record->user_pass; ?>",
        lat: "<?= $record->lat; ?>",
        lng: "<?= $record->lng; ?>",
        gender: "<?= $record->gender; ?>",
        user_status: "<?= $record->user_status; ?>",
        register_id: "<?= $record->register_id; ?>",
        image1: "<?= $record->image1; ?>",
        image2: "<?= $record->image2; ?>",
        image3: "<?= $record->image3; ?>",
        image4: "<?= $record->image4; ?>",
        image5: "<?= $record->image5; ?>",
        image6: "<?= $record->image6; ?>",
        education: "<?= $record->education; ?>",
        location: "<?= $record->location; ?>",
        profession: "<?= $record->profession; ?>",
        drinking_habit: "<?= $record->drinking_habit; ?>",
        smoking: "<?= $record->smoking; ?>",
        eating_habit: "<?= $record->eating_habit; ?>",
        interest_id: "<?= $record->interest_id; ?>",
        interest_field_name: "<?= $record->interest_field_name; ?>",
        like_status: "<?= $record->like_status; ?>",
        create_date_time: "<?= $record->create_date_time; ?>",
        login_time: "<?= $record->login_time; ?>",
        last_login: "<?= $record->last_login; ?>",
        fcm_id: "<?= $record->fcm_id; ?>",
        f_Uid: "<?= $record->f_Uid; ?>",
        isOnline: true,
      });

      $(document).on('click', '.msg_send_btn' , function(e) {
           var msg = $('.write_msg').val();
           $('.write_msg').val('');
           if(msg.trim().length != 0){
           writeUserData(sender_user,reciever_user,reciever_name,sender_name,sender_register_id,reciever_register_id,sender_image,reciever_image,msg);    
           } 
       });

      $(document).on('keypress', 'input.write_msg' , function(e){
        if (e.keyCode == 13 ) {   
              var msg = $(this).val();
            $(this).val('');
           if(msg.trim().length != 0){
            writeUserData(sender_user,reciever_user,reciever_name,sender_name,sender_register_id,reciever_register_id,sender_image,reciever_image,msg);
           }
         }
       });
    

      firebase.database().ref('/chat_room/'+reciever_user+"_"+sender_user).on('child_added',function(snapshot)
      {
        var data = snapshot.val();

        var message =data.message;
        if(reciever_image !="")
        {
          var imgURL = urls+reciever_image; 
        }else{
          var imgURL = urls+'dmi.jpg'; 
        }
        var currentDate = new Date(data.time);
        var date = currentDate.getDate();
        var month = currentDate.getMonth(); //Be careful! January is 0 not 1
        var year = currentDate.getFullYear();
        var dateString = date + "-" +(month + 1) + "-" + year;
        var times =   currentDate.toTimeString();
        var times1 =  times.split(":");
        var formattedTime = times1[0] + ':' + times1[1];
          if(data.senderId == sender_user)
          {
            //send_me = true;
            var mess = `<div class="outgoing_msg">
                        <div class="sent_msg">
                          <p>${message}</p>
                          <span class="time_date">${formattedTime} | ${dateString}</span> </div>
                      </div>`;
            $('.msg_history').append(mess);
           }else{
            //recieve_me = true; 
            var mess = `<div class="incoming_msg">
                        <div class="incoming_msg_img"> <img src="${imgURL}" alt="sunil"> </div>
                        <div class="received_msg">
                          <div class="received_withd_msg">
                            <p>${message}</p>
                            <span class="time_date">${formattedTime} | ${dateString}</span> </div>
                        </div>
                      </div>`;
            $('.msg_history').append(mess);
           }
      });

      firebase.database().ref('/chat_room/'+reciever_user+"_"+sender_user).on('child_added',function(snapshot)
      {
         // var data = snapshot.val();
        // var message = data.message;
        // var senderId = data.senderId;
        // if(data.senderId == sender_user)
        //console.log(snapshot.val());


        $.each( snapshot.val(), function( key, value ) {
          if(key=='senderId' && value== sender_user )
          {
            counter1++;
          }
        });
      


       
        // if(message)
        // {

        // }

        // data.senderId == sender_user

      });
      console.log(counter1);

      
            
    
  });


    function writeUserData(sender_user,reciever_user,reciever_name,sender_name,sender_register_id,reciever_register_id,sender_image,reciever_image,msg) {
      var currentdate = + new Date();
      var ref_chat_history = firebase.database().ref('chat_history/');
      var ref_chat_room = firebase.database().ref('chat_room/');
      var msg_id = ref_chat_room.push().getKey();
      var data_url = "";
      firebase.database().ref('/chat_history/'+sender_user).on('child_added',function(snapshot)
      {
        var data = snapshot.val();
        var roomStr = data.roomId;
        console.log('main', roomStr); 
        if(roomStr == reciever_user+"_"+sender_user)
        {
          data_url = reciever_user+"_"+sender_user;
        }else if (roomStr == sender_user+"_"+reciever_user){
          data_url = sender_user+"_"+reciever_user;
        }else{
          data_url = reciever_user+"_"+sender_user;
        }
      });

      /******INSEART MESSAGES*******/
      ref_chat_history.child(sender_user).child(reciever_user+"_"+sender_user).set({
        historyName: reciever_name,
        image: reciever_image,
        message: msg,
        receiverId:reciever_user,
        register_id: reciever_register_id,
        roomId: reciever_user+"_"+sender_user,
        seen: false,
        senderId: sender_user,
        time: currentdate,
        token: reciever_register_id,
      });

      ref_chat_history.child(reciever_user).child(reciever_user+"_"+sender_user).set({
        historyName: sender_name,
        image: sender_image,
        message: msg,
        receiverId:reciever_user,
        register_id: sender_register_id,
        roomId: reciever_user+"_"+sender_user,
        seen: false,
        senderId: sender_user,
        time: currentdate,
        token: sender_register_id,
      });

      //console.log('url ', data_url);
      ref_chat_room.child(data_url).child(msg_id).set({
        image: sender_image,
        message: msg,
        receiverId:reciever_user,
        senderId: sender_user,
        time: currentdate,
        token: sender_register_id,
      }); 
    }        
  </script>
</body>
</html>