@extends("layouts.master")


@section("content")
    <!-- Header Section Start -->
    <header id="hero-area" data-stellar-background-ratio="0.5">
      <div class="container">
        @include("layouts.nav")
        <div class="row justify-content-md-center">
          <div class="col-md-10">
            <div class="contents text-center">
              <h1 class="wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="0.3s">{{$settings['htitle']}}</h1>
              <p class="lead  wow fadeIn" data-wow-duration="1000ms" data-wow-delay="800ms">{{$settings['lead']}} </p>
              <a href="{{$settings['ctaUrl']}}" class="btn btn-common wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="400ms">{{ $settings['ctaText']}}</a>
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- Header Section End -->



	@foreach($menu as $class => $page)
		@if($page->status)
      <?php  echo app("App\Http\Controllers\Components\\$class")->index(); ?>
		@endif
	@endforeach


@endsection


