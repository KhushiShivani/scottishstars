@include('layouts.header')

<main id="content" class="site-main">
    <!-- Inner Banner html start-->
    <section class="inner-banner-wrap">
       <div class="inner-baner-container" style="background-image: url({{asset('frontend/assets/images/inner-banner.jpg')}});">
          <div class="container">
             <div class="inner-banner-content">
                <h1 class="inner-title">{{$search_key}}</h1>
             </div>
          </div>
       </div>
       <div class="inner-shape"></div>
    </section>
    <section>
        <div class="container">
            <div class="row">
                @foreach ($search_result as $item)
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
    </section>
</main>

@include('layouts.footer')
