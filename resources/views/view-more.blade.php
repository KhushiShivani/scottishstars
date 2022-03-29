@include('layouts.header')

<main id="content" class="site-main">
    <!-- Inner Banner html start-->
    <section class="inner-banner-wrap">
       <div class="inner-baner-container" style="background-image: url({{asset('frontend/assets/images/inner-banner.jpg')}});">
          <div class="container">
             <div class="inner-banner-content">
                <h1 class="inner-title">Package Detail</h1>
             </div>
          </div>
       </div>
       <div class="inner-shape"></div>
    </section>
    <!-- Inner Banner html end-->
    <div class="single-tour-section">
       <div class="container">
          <div class="row">
             <div class="col-lg-8">
                <div class="single-tour-inner">
                   <h2>{{$data['title']}}</h2>
                   <figure class="feature-image">
                      <img src="{{asset($data['single_img'])}}" alt="{{$data['title']}}">
                      <div class="package-meta text-center">
                         <ul>

                            <li>
                               <i class="fas fa-user-friends"></i>
                               Category: {{$data->category['title']}}
                            </li>

                            <li>
                               <i class="fas fa-map-marked-alt"></i>
                               {{$data->sub_category['title']}}
                            </li>
                         </ul>
                      </div>
                   </figure>
                   <div class="tab-container">
                      <ul class="nav nav-tabs" id="myTab" role="tablist">
                         <li class="nav-item">
                            <a class="nav-link active" id="overview-tab" data-toggle="tab" href="#overview" role="tab" aria-controls="overview" aria-selected="true">DESCRIPTION</a>
                         </li>


                         {{-- <li class="nav-item">
                            <a class="nav-link" id="map-tab" data-toggle="tab" href="#map" role="tab" aria-controls="map" aria-selected="false">Map</a>
                         </li> --}}
                      </ul>
                      <div class="tab-content" id="myTabContent">
                         <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview-tab">
                            <div class="overview-content">
                              <span>{!! $data['description'] !!}</span>
                            </div>
                         </div>

                         {{-- <div class="tab-pane" id="map" role="tabpanel" aria-labelledby="map-tab">
                            <div class="map-area">
                               <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d60998820.06503915!2d95.3386452160086!3d-21.069765827214972!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2b2bfd076787c5df%3A0x538267a1955b1352!2sAustralia!5e0!3m2!1sen!2snp!4v1579777829477!5m2!1sen!2snp" height="450" allowfullscreen=""></iframe>
                            </div>
                         </div> --}}
                      </div>
                   </div>
                   <div class="single-tour-gallery">
                      <h3>GALLERY / PHOTOS</h3>
                      <div class="single-tour-slider">
                          @php
                              $image = explode(",",$data['gallery']);
                          @endphp
                          @foreach ($image as $item)
                            <div class="single-tour-item">
                                <figure class="feature-image">
                                <img src="{{asset($item)}}" alt="">
                                </figure>
                            </div>
                          @endforeach


                      </div>
                   </div>
                </div>
             </div>
             <div class="col-lg-4">

             </div>
          </div>
       </div>
    </div>
    <!-- subscribe section html start -->
    @include('package')
    <!-- subscribe html end -->
 </main>

@include('layouts.footer')
