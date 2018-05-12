    <!-- Portfolio Section -->
    <section id="portfolios" class="section">
      <!-- Container Starts -->
      <div class="container">
        <div class="section-header">
          <h2 class="section-title">{{$title}}</h2>
          <hr class="lines">
          <p class="section-subtitle">{{$desc}}</p>
        </div>
        <div class="row">
          <div class="col-md-12">
            <!-- Portfolio Controller/Buttons -->
            <div class="controls text-center">
              <a class="filter active btn btn-common" data-filter="all">
                All
              </a>
              @foreach($category as $cat)
              <a class="filter btn btn-common" data-filter=".{{$cat}}">
                {{$cat}}
              </a>
              @endforeach
            <!-- Portfolio Controller/Buttons Ends-->
          </div>

          <!-- Portfolio Recent Projects -->
          <div id="portfolio" class="row">
            @foreach($items as $item)
            <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix {{$item->category}} ">
              <div class="portfolio-item">
                <div class="shot-item">
                  <img src="{{$item->image}}" alt="" />
                  <a class="overlay lightbox" href="{{$item->image}}">
                    <i class="lnr lnr-eye item-icon"></i>
                  </a>
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </div>
      <!-- Container Ends -->
    </section>
    <!-- Portfolio Section Ends -->

   <!-- Start Video promo Section -->
    <section class="video-promo section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8">
              <div class="video-promo-content text-center">
                <h2 class="wow zoomIn" data-wow-duration="1000ms" data-wow-delay="100ms">Watch Our Intro video</h2>
                <p class="wow zoomIn" data-wow-duration="1000ms" data-wow-delay="100ms">Aliquam vestibulum cursus felis. In iaculis iaculis sapien ac condimentum. Vestibulum congue posuere lacus, id tincidunt nisi porta sit amet. Suspendisse et sapien varius, pellentesque dui non, semper orci.</p>
                <a href="https://www.youtube.com/watch?v=IXoMDwh4Cq8" class="video-popup wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="0.3s"><i class="lnr lnr-film-play"></i></a>
              </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Video Promo Section -->
