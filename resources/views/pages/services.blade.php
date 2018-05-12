    <!-- Services Section Start -->
    <section id="services" class="section">
      <div class="container">
        <div class="section-header">
          <h2 class="section-title wow fadeIn" data-wow-duration="1000ms" data-wow-delay="0.3s">{{$title}}</h2>
          <hr class="lines wow zoomIn" data-wow-delay="0.3s">
          <p class="section-subtitle wow fadeIn" data-wow-duration="1000ms" data-wow-delay="0.3s">{{$desc}}</p>
        </div>
        <d  iv class="row">
          @foreach($items as $item)
          <div class="col-md-4 col-sm-6">
            <div class="item-boxes wow fadeInDown" data-wow-delay="0.2s">
              <div class="icon">
                <i class="{{$item->icon}}"></i>
              </div>
              <h4>{{$item->title}}</h4>
              <p>{{$item->shortDesc}}</p>
            </div>
          </div>
          @endforeach
        </div>
        </div>
      </div>
    </section>
    <!-- Services Section End -->

