<aside class="leftBlock" class="col-md-4">
            <ul>
               <li>
                  <a href="<?php echo base_url();?>welcome/Gallery">
                  <span><em class="searchicon"></em></span>
                  <small class="aline">Matches by Comman Interest</small>
                  </a>
               </li>
               <li>
                  <a href="<?php echo base_url();?>welcome/onlinelist">
                  <span><em class="searchicon"></em></span>
                  <small>Online Now <span id="online_counts"> () </span> </small>
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
                  <small>Who Likes You</small>
                  <strong class="redDot" id="like_home " style="color: red;"><?php echo $countlike->total_like_n_superl; ?></strong>
                  </a>
               </li>
               <li>
                  <a href="<?php echo base_url();?>welcome/messagelist">
                  <span><em class="inboxicon"></em></span>
                  <small>Messages</small>
                  <strong class="redDot" id="inb_home" style="display:none;"></strong>
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