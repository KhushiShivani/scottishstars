<footer id="colophon" class="site-footer footer-primary">
    <div class="top-footer">
       <div class="container">
          <div class="row">
             <div class="col-lg-3 col-md-6">
                <aside class="widget widget_text">
                   <h3 class="widget-title">
                      About Travel
                   </h3>
                   <div class="textwidget widget-text">
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.
                   </div>
                   <div class="award-img">
                      <a href="#"><img src="assets/images/logo6.png" alt=""></a>
                      <a href="#"><img src="assets/images/logo2.png" alt=""></a>
                   </div>
                </aside>
             </div>
             <div class="col-lg-3 col-md-6">
                <aside class="widget widget_text">
                   <h3 class="widget-title">CONTACT INFORMATION</h3>
                   <div class="textwidget widget-text">
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                      <ul>
                         <li>
                            <a href="#">
                               <i class="fas fa-phone-alt"></i>
                               +01 (977) 2599 12
                            </a>
                         </li>
                         <li>
                            <a href="#">
                               <i class="fas fa-envelope"></i>
                               <span class="__cf_email__" data-cfemail="91f2fefce1f0ffe8d1f5fefcf0f8ffbff2fefc">[email&#160;protected]</span>
                            </a>
                         </li>
                         <li>
                            <i class="fas fa-map-marker-alt"></i>
                            3146  Koontz, California
                         </li>
                      </ul>
                   </div>
                </aside>
             </div>
             <div class="col-lg-3 col-md-6">

             </div>
             <div class="col-lg-3 col-md-6">

             </div>
          </div>
       </div>
    </div>
    <div class="buttom-footer">
       <div class="container">
          <div class="row align-items-center">
             <div class="col-md-5">
                <div class="footer-menu">
                   <ul>
                      <li>
                         <a href="#">Privacy Policy</a>
                      </li>
                      <li>
                         <a href="#">Term & Condition</a>
                      </li>
                      <li>
                         <a href="#">FAQ</a>
                      </li>
                   </ul>
                </div>
             </div>
             <div class="col-md-2 text-center">
                <div class="footer-logo">
                   <a href="#"><img src="assets/images/travele-logo.png" alt=""></a>
                </div>
             </div>
             <div class="col-md-5">
                <div class="copy-right text-right">Copyright © 2022 ScottishStar. All rights reserved</div>
             </div>
          </div>
       </div>
    </div>
 </footer>
 <a id="backTotop" href="#" class="to-top-icon">
    <i class="fas fa-chevron-up"></i>
 </a>
 <!-- custom search field html -->
    <div class="header-search-form">
       <div class="container">
          <div class="header-search-container">
             <form class="search-form" action="{{url('search-items')}}" method="post"  >
                @csrf
                <input type="text" name="search_term" placeholder="Enter your text..." autocomplete="off">
             </form>
             <a href="#" class="search-close">
                <i class="fas fa-times"></i>
             </a>
          </div>
       </div>
    </div>
 <!-- header html end -->
</div>

<!-- JavaScript -->
<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script src="{{asset('frontend/assets/js/jquery.js')}}"></script>
<script src="{{asset('frontend/assets/js/waypoints.min.js')}}"></script>
<script src="{{asset('frontend/assets/vendors/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('frontend/assets/vendors/jquery-ui/jquery-ui.min.js')}}"></script>
<script src="{{asset('frontend/assets/vendors/countdown-date-loop-counter/loopcounter.js')}}"></script>
<script src="{{asset('frontend/assets/js/jquery.counterup.js')}}"></script>
<script src="{{asset('frontend/assets/vendors/modal-video/jquery-modal-video.min.js')}}"></script>
<script src="{{asset('frontend/assets/vendors/masonry/masonry.pkgd.min.js')}}"></script>
<script src="{{asset('frontend/assets/vendors/lightbox/dist/js/lightbox.min.js')}}"></script>
<script src="{{asset('frontend/assets/vendors/slick/slick.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/jquery.slicknav.js')}}"></script>
<script src="{{asset('frontend/assets/js/custom.min.js')}}"></script>
</body>
</html>
