    <!-- Team section Start -->
    <section id="team" class="section">
      <div class="container">
        <div class="section-header">
          <h2 class="section-title">{{$title}}</h2>
          <hr class="lines">
          <p class="section-subtitle">{{$desc}}</p>
        </div>
        <div class="row">
          @foreach($items as $item)
          <div class="col-lg-3 col-md-6 col-xs-12">
            <div class="single-team">
              <img src="{{$item->image}}" alt="">
              <div class="team-details">
                <div class="team-inner">
                  <h4 class="team-title">{{$item->name}}</h4>
                  <p>{{$item->title}}</p>
                  <ul class="social-list">
                    <li class="facebook"><a href="{{$item->facebook}}"><i class="fa fa-facebook"></i></a></li>
                    <li class="twitter"><a href="{{$item->twitter}}"><i class="fa fa-twitter"></i></a></li>
                    <li class="google-plus"><a href="{{$item->google}}"><i class="fa fa-google-plus"></i></a></li>
                    <li class="linkedin"><a href="{{$item->linkedin}}"><i class="fa fa-linkedin"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </section>
    <!-- Team section End -->

