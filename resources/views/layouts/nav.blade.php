      <!-- Navbar Start -->
      <nav class="navbar navbar-expand-lg fixed-top scrolling-navbar indigo">
        <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <a href="#" class="navbar-brand"><img class="img-fulid" src="{{$settings['logo']}}" alt=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-navbar" aria-controls="main-navbar" aria-expanded="false" aria-label="Toggle navigation">
              <i class="lnr lnr-menu"></i>
            </button>
          </div>
          <div class="collapse navbar-collapse" id="main-navbar">
            <ul class="navbar-nav mr-auto w-100 justify-content-end">
              <li class="nav-item">
                <a class="nav-link page-scroll" href="#hero-area">HOME</a>
              </li>
              @foreach($menu as $k=>$item )

                @if($item->status)

                  <li class="nav-item">
                    <a class="nav-link page-scroll" href="/#{{$components[$k]['id']}}">{{strtoupper($k)}}</a>
                  </li>

                @endif

              @endforeach

            </ul>

          </div>
        </div>

        <!-- Mobile Menu Start -->
        <ul class="mobile-menu">
           <li>
              <a class="page-scroll" href="/#hero-area">HOME</a>
            </li>
            @foreach($menu as $k => $item)

              @if($item->status)

                <li class="nav-item">
                  <a class="nav-link page-scroll" href="/#{{$components[$k]['id']}}">{{strtoupper($k)}}</a>
                </li>

              @endif

            @endforeach
        </ul>
        <!-- Mobile Menu End -->

      </nav>
      <!-- Navbar End -->
