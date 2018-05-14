@extends("layouts.app")
@section("content")
<div id="app">
	<section class="section">
		<div class="container">
			<div class="columns">
				<div class="column is-3">
					<aside class="menu">
						<p class="menu-label">Menu </p>
						<ul class="menu-list">

							<li>
								<router-link to='/'  exact >General Settings</router-link>
							</li>

							<li>
								<router-link to='Menu'  :components='components' >Menu</router-link>
							</li>

							<li v-for='component in components'>
								<router-link :to="component.class"   exact> @{{component.class}}</router-link>
							</li>

						</ul>
					</aside>
				</div>
				<div class="column ">
					<router-view class='animated fadeIn ' ></router-view>
				</div>
			</div>
		</div>
	</section>
</div>
@endsection

@section("footer-scripts")
<link rel="stylesheet" href="{{url("css/animate.css")}}">
<script src="{{url('js/app.js')}}"></script>
@endsection