    <!-- Features Section Start -->
    <section id="features" class="section" data-stellar-background-ratio="0.2">
      <div class="container">
        <div class="section-header">
          <h2 class="section-title">{{$title}}</h2>
          <hr class="lines">
          <p class="section-subtitle">{{$desc}}</p>
        </div>
        <div class="row">
          <div class="col-lg-8 col-md-12 col-xs-12">
            <div class="container">
              <div class="row">
                @foreach($items as $item)
                 <div class="col-lg-6 col-sm-6 col-xs-12 box-item">
                    <span class="icon">
                      <i class=" lnr {{$item->icon}}"></i>
                    </span>
                    <div class="text">
                      <h4>{{$item->title}}</h4>
                      <p>{{$item->shortDesc}}</p>
                    </div>
                  </div>
                  @endforeach
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-xs-12">
            <div class="show-box">
              <img class="img-fulid" src="img/features/feature.png" alt="">
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Features Section End -->
