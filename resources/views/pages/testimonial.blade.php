    <!-- testimonial Section Start -->
    <div id="testimonial" class="section" data-stellar-background-ratio="0.1">
      <div class="container">
        <div class="section-header">
          <h2 class="section-title">{{$title}}</h2>
          <hr class="lines">
          <p class="section-subtitle">{{$desc}}</p>
        </div>
      </div>

      <div class="container">
        <div class="row justify-content-md-center">
          <div class="col-md-12">
            <div class="touch-slider owl-carousel owl-theme">
              @foreach($items as $item)
              <div class="testimonial-item">
                <img src="{{$item->image}}" alt="{{$item->name}}" />
                <div class="testimonial-text">
                  <p>{{$item->testimony}}</p>
                  <h3>{{$item->name}}</h3>
                  <span>{{$item->title}}</span>
                </div>
              </div>
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- testimonial Section Start -->

