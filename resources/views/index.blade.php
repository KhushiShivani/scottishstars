@include('layouts.header')

@php
use App\Models\Product;

$product = Product::where(['status'=>1])->with(['sub_category'])->get();
// dd($product);
@endphp

<main id="content" class="site-main">
    <!-- Home slider html start -->
    <section class="home-slider-section">
       <div class="home-slider">
          <div class="home-banner-items">
             <div class="banner-inner-wrap" style="background-image: url({{asset('frontend/assets/images/slider-banner-1.jpg')}});"></div>
                <div class="banner-content-wrap">
                   <div class="container">
                      <div class="banner-content text-center">
                         <h2 class="banner-title">TRAVELLING AROUND THE WORLD</h2>
                         {{-- <p>Taciti quasi, sagittis excepteur hymenaeos, id temporibus hic proident ullam, eaque donec delectus tempor consectetur nunc, purus congue? Rem volutpat sodales! Mollit. Minus exercitationem wisi.</p> --}}
                         {{-- <a href="#" class="button-primary">CONTINUE READING</a> --}}
                      </div>
                   </div>
                </div>
             <div class="overlay"></div>
          </div>
          <div class="home-banner-items">
             <div class="banner-inner-wrap" style="background-image: url({{asset('frontend/assets/images/slider-banner-2.jpg')}});"></div>
                <div class="banner-content-wrap">
                   <div class="container">
                      <div class="banner-content text-center">
                         <h2 class="banner-title">EXPERIENCE THE NATURE'S BEAUTY</h2>
                         {{-- <p>Taciti quasi, sagittis excepteur hymenaeos, id temporibus hic proident ullam, eaque donec delectus tempor consectetur nunc, purus congue? Rem volutpat sodales! Mollit. Minus exercitationem wisi.</p> --}}
                         {{-- <a href="#" class="button-primary">CONTINUE READING</a> --}}
                      </div>
                   </div>
                </div>
             <div class="overlay"></div>
          </div>
       </div>
    </section>
    <!-- slider html start -->
    <!-- Home search field html start -->
    {{-- <div class="trip-search-section shape-search-section">
       <div class="slider-shape"></div>
       <div class="container">
          <div class="trip-search-inner white-bg d-flex">
             <div class="input-group">
                <label> Search Destination* </label>
                <input type="text" name="s" placeholder="Enter Destination">
             </div>
             <div class="input-group">
                <label> Pax Number* </label>
                <input type="text" name="s" placeholder="No.of People">
             </div>
             <div class="input-group width-col-3">
                <label> Checkin Date* </label>
                <i class="far fa-calendar"></i>
                <input class="input-date-picker" type="text" name="s" placeholder="MM / DD / YY" autocomplete="off" readonly="readonly">
             </div>
             <div class="input-group width-col-3">
                <label> Checkout Date* </label>
                <i class="far fa-calendar"></i>
                <input class="input-date-picker" type="text" name="s" placeholder="MM / DD / YY" autocomplete="off" readonly="readonly">
             </div>
             <div class="input-group width-col-3">
                <label class="screen-reader-text"> Search </label>
                <input type="submit" name="travel-search" value="INQUIRE NOW">
             </div>
          </div>
       </div>
    </div> --}}
    <!-- search search field html end -->
    <br>
    <section class="destination-section">
       <div class="container">
          <div class="section-heading">
             <div class="row align-items-end">
                <div class="col-lg-7">
                   <h5 class="dash-style">POPULAR DESTINATION</h5>
                   <h2>TOP NOTCH DESTINATION</h2>
                </div>
                <div class="col-lg-5">
                   <div class="section-disc">
                       Aperiam sociosqu urna praesent, tristique, corrupti condimentum asperiores platea ipsum ad arcu. Nostrud. Aut nostrum, ornare quas provident laoreet nesciunt.
                   </div>
                </div>
             </div>
          </div>
          <div class="destination-inner destination-three-column">
             <div class="row">
                <div class="col-lg-12">
                   <div class="row">
                       @foreach ($product as $item)
                       <div class="col-sm-3">
                        <div class="desti-item overlay-desti-item">
                           <figure class="desti-image">
                              <img src="{{asset($item['single_img'])}}" alt="">
                           </figure>
                           <div class="meta-cat bg-meta-cat">
                              <a href="{{url('view-more/?id='.$item['id'])}}">{{$item->sub_category['title']}}</a>
                           </div>
                           <div class="desti-content">
                              <h3>
                                 <a href="{{url('view-more/?id='.$item['id'])}}">{{$item['title']}}</a>
                              </h3>
                              <div class="rating-start" title="Rated 5 out of 4">
                                 <span style="width: 53%"></span>
                              </div>
                           </div>
                        </div>
                     </div>
                       @endforeach


                   </div>
                </div>

             </div>
             {{-- <div class="btn-wrap text-center">
                <a href="#" class="button-primary">MORE DESTINATION</a>
             </div> --}}
          </div>
       </div>
    </section>

    <!-- Home callback section html start -->
    <section class="callback-section">
       <div class="container">
          <div class="row no-gutters align-items-center">
             <div class="col-lg-5">
                <div class="callback-img" style="background-image: url({{asset('frontend/assets/images/img8.jpg')}});">
                   <div class="video-button">
                      <a id="video-container" data-video-id="IUN664s7N-c">
                         <i class="fas fa-play"></i>
                      </a>
                   </div>
                </div>
             </div>
             <div class="col-lg-7">
                <div class="callback-inner">
                   <div class="section-heading section-heading-white">
                      <h5 class="dash-style">CALLBACK FOR MORE</h5>
                      <h2>GO TRAVEL. DISCOVER. REMEMBER US!!</h2>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo. Eaque adipiscing, luctus eleifend.</p>
                   </div>
                   <div class="callback-counter-wrap">
                      <div class="counter-item">
                         <div class="counter-icon">
                           <img src="{{asset('frontend/assets/images/icon1.png')}}" alt="">
                         </div>
                         <div class="counter-content">
                            <span class="counter-no">
                               <span class="counter">500</span>K+
                            </span>
                            <span class="counter-text">
                               Satisfied Clients
                            </span>
                         </div>
                      </div>
                      <div class="counter-item">
                         <div class="counter-icon">
                           <img src="{{asset('frontend/assets/images/icon2.png')}}" alt="">
                         </div>
                         <div class="counter-content">
                            <span class="counter-no">
                               <span class="counter">250</span>K+
                            </span>
                            <span class="counter-text">
                               Satisfied Clients
                            </span>
                         </div>
                      </div>
                      <div class="counter-item">
                         <div class="counter-icon">
                           <img src="{{asset('frontend/assets/images/icon3.png')}}" alt="">
                         </div>
                         <div class="counter-content">
                            <span class="counter-no">
                               <span class="counter">15</span>K+
                            </span>
                            <span class="counter-text">
                               Satisfied Clients
                            </span>
                         </div>
                      </div>
                      <div class="counter-item">
                         <div class="counter-icon">
                           <img src="{{asset('frontend/assets/images/icon4.png')}}" alt="">
                         </div>
                         <div class="counter-content">
                            <span class="counter-no">
                               <span class="counter">10</span>K+
                            </span>
                            <span class="counter-text">
                               Satisfied Clients
                            </span>
                         </div>
                      </div>
                   </div>
                   <div class="support-area">
                      <div class="support-icon">
                         <img src="{{asset('frontend/assets/images/icon5.png')}}" alt="">
                      </div>
                      <div class="support-content">
                         <h4>Our 24/7 Emergency Phone Services</h4>
                         <h3>
                            <a href="#">Call: 123-456-7890</a>
                         </h3>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </section>
    <!-- callback html end -->

    <!-- special html end -->
    <!-- Home special section html start -->
    <section class="best-section">
       <div class="container">
          <div class="row">
             <div class="col-lg-5">
                <div class="section-heading">
                   <h5 class="dash-style">OUR TOUR GALLERY</h5>
                   <h2>BEST TRAVELER'S SHARED PHOTOS</h2>
                   <p>Aperiam sociosqu urna praesent, tristique, corrupti condimentum asperiores platea ipsum ad arcu. Nostrud. Esse? Aut nostrum, ornare quas provident laoreet nesciunt odio voluptates etiam, omnis.</p>
                </div>
                <figure class="gallery-img">
                   <img src="{{asset('frontend/assets/images/img12.jpg')}}" alt="">
                </figure>
             </div>
             <div class="col-lg-7">
                <div class="row">
                   <div class="col-sm-6">
                      <figure class="gallery-img">
                         <img src="{{asset('frontend/assets/images/img13.jpg')}}" alt="">
                      </figure>
                   </div>
                   <div class="col-sm-6">
                      <figure class="gallery-img">
                         <img src="{{asset('frontend/assets/images/img14.jpg')}}" alt="">
                      </figure>
                   </div>
                </div>
                <div class="row">
                   <div class="col-12">
                      <figure class="gallery-img">
                         <img src="{{asset('frontend/assets/images/img15.jpg')}}" alt="">
                      </figure>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </section>
    <!-- best html end -->
    <!-- Home client section html start -->
    <div class="client-section">
       <div class="container">
          <div class="client-wrap client-slider secondary-bg">
             <div class="client-item">
                <figure>
                   <img src="{{asset('frontend/assets/images/logo1.png')}}" alt="">
                </figure>
             </div>
             <div class="client-item">
                <figure>
                   <img src="{{asset('frontend/assets/images/logo2.png')}}" alt="">
                </figure>
             </div>
             <div class="client-item">
                <figure>
                   <img src="{{asset('frontend/assets/images/logo3.png')}}" alt="">
                </figure>
             </div>
             <div class="client-item">
                <figure>
                   <img src="{{asset('frontend/assets/images/logo4.png')}}" alt="">
                </figure>
             </div>
             <div class="client-item">
                <figure>
                   <img src="{{asset('frontend/assets/images/logo5.png')}}" alt="">
                </figure>
             </div>
             <div class="client-item">
                <figure>
                   <img src="{{asset('frontend/assets/images/logo2.png')}}" alt="">
                </figure>
             </div>
          </div>
       </div>
    </div>
    <!-- client html end -->
    <!-- Home subscribe section html start -->
@include('package')
    <!-- subscribe html end -->

     <!-- blog html end -->
     <!-- Home testimonial section html start -->
    <div class="testimonial-section" style="background-image: url({{asset('frontend/assets/images/img23.jpg')}});">
       <div class="container">
          <div class="row">
             <div class="col-lg-10 offset-lg-1">
                <div class="testimonial-inner testimonial-slider">
                   <div class="testimonial-item text-center">
                      <figure class="testimonial-img">
                         <img src="{{asset('frontend/assets/images/img20.jpg')}}" alt="">
                      </figure>
                      <div class="testimonial-content">
                         <p>" Dolorum aenean dolorem minima! Voluptatum? Corporis condimentum ac primis fusce, atque! Vivamus. Non cupiditate natus excepturi, quod quo, aute facere? Deserunt aliquip, egestas ipsum, eu.Dolorum aenean dolorem minima!? Corporis condi mentum acpri! "</p>
                         <cite>
                            Johny English
                            <span class="company">Travel Agent</span>
                         </cite>
                      </div>
                   </div>
                   <div class="testimonial-item text-center">
                      <figure class="testimonial-img">
                         <img src="{{asset('frontend/assets/images/img21.jpg')}}" alt="">
                      </figure>
                      <div class="testimonial-content">
                         <p>" Dolorum aenean dolorem minima! Voluptatum? Corporis condimentum ac primis fusce, atque! Vivamus. Non cupiditate natus excepturi, quod quo, aute facere? Deserunt aliquip, egestas ipsum, eu.Dolorum aenean dolorem minima!? Corporis condi mentum acpri! "</p>
                         <cite>
                            William Housten
                            <span class="company">Travel Agent</span>
                         </cite>
                      </div>
                   </div>
                   <div class="testimonial-item text-center">
                      <figure class="testimonial-img">
                         <img src="{{asset('frontend/assets/images/img22.jpg')}}" alt="">
                      </figure>
                      <div class="testimonial-content">
                         <p>" Dolorum aenean dolorem minima! Voluptatum? Corporis condimentum ac primis fusce, atque! Vivamus. Non cupiditate natus excepturi, quod quo, aute facere? Deserunt aliquip, egestas ipsum, eu.Dolorum aenean dolorem minima!? Corporis condi mentum acpri! "</p>
                         <cite>
                            Alison Wright
                            <span class="company">Travel Guide</span>
                         </cite>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
    <!-- testimonial html end -->
    <!-- Home contact details section html start -->
    <section class="contact-section">
       <div class="container">
          <div class="row">
             <div class="col-lg-4">
                <div class="contact-img" style="background-image: url({{asset('frontend/assets/images/img24.jpg')}});">
                </div>
             </div>
             <div class="col-lg-8">
                <div class="contact-details-wrap">
                   <div class="row">
                      <div class="col-sm-4">
                         <div class="contact-details">
                            <div class="contact-icon">
                               <img src="{{asset('frontend/assets/images/icon12.png')}}" alt="">
                            </div>
                            <ul>
                               <li>
                                  <a href="#"><span class="__cf_email__" data-cfemail="d5a6a0a5a5baa7a195b2b8b4bcb9fbb6bab8">[email&#160;protected]</span></a>
                               </li>
                               <li>
                                  <a href="#"><span class="__cf_email__" data-cfemail="e58c8b838aa5818a88848c8bcb868a88">[email&#160;protected]</span></a>
                               </li>
                               <li>
                                  <a href="#"><span class="__cf_email__" data-cfemail="234d424e4663404c4e53424d5a0d404c4e">[email&#160;protected]</span></a>
                               </li>
                            </ul>
                         </div>
                      </div>
                      <div class="col-sm-4">
                         <div class="contact-details">
                            <div class="contact-icon">
                               <img src="{{asset('frontend/assets/images/icon13.png')}}" alt="">
                            </div>
                            <ul>
                               <li>
                                  <a href="#">+132 (599) 254 669</a>
                               </li>
                               <li>
                                  <a href="#">+123 (669) 255 587</a>
                               </li>
                               <li>
                                  <a href="#">+01 (977) 2599 12</a>
                               </li>
                            </ul>
                         </div>
                      </div>
                      <div class="col-sm-4">
                         <div class="contact-details">
                            <div class="contact-icon">
                               <img src="{{asset('frontend/assets/images/icon14.png')}}" alt="">
                            </div>
                            <ul>
                               <li>
                                  3146 Koontz, California
                               </li>
                               <li>
                                  Quze.24 Second floor
                               </li>
                               <li>
                                  36 Street, Melbourne
                               </li>
                            </ul>
                         </div>
                      </div>
                   </div>
                </div>
                <div class="contact-btn-wrap">
                   <h3>LET'S JOIN US FOR MORE UPDATE !!</h3>
                   {{-- <a href="#" class="button-primary">LEARN MORE</a> --}}
                </div>
             </div>
          </div>
       </div>
    </section>
    <!--  contact details html end -->
 </main>

@include('layouts.footer')
