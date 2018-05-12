<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin Dashboard</title>
	<link rel="stylesheet" href="{{url('css/bulma.min.css')}}">
	<link rel="stylesheet" href="{{url('css/app.css')}}">
	<link rel="author" href="humans.txt">
</head>
<body>
	<div id="app">
		<nav class="navbar" role="navigation" aria-label="main navigation">
			<div class="navbar-brand">
				<h1>
				<a class="navbar-item" href="https://bulma.io">
					Admin Dashboard
				</a>

				</h1>

				<a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false">
					<span aria-hidden="true"></span>
					<span aria-hidden="true"></span>
					<span aria-hidden="true"></span>
				</a>
			</div>
			<div class="navbar-menu">
			</div>
				<div class="navbar-end">
					<div class="navbar-item has-dropdown is-hoverable">
						<a href="#" class="navbar-link">Profile</a>
						<div class="navbar-dropdown is-boxed">
							<a href="#" class="navbar-item">Logout</a>
						</div>
					</div>
				</div>
		</nav>
		<section class="section">

			<div class="container">

				<div class="columns">
					<div class="column is-3">
						<aside class="menu">
							<p class="menu-label">Menu Label</p>
							<ul class="menu-list">
								<li><router-link to='/'  exact >General Settings</router-link></li>

								<li><router-link to='Menu'  :components='components' >Menu</router-link></li>

								<li v-for='component in components'>
									<router-link :to="component.class"   exact> @{{component.class}}</router-link>
								</li>
							</ul>
						</aside>
					</div>
					<!-- <div class="is-1"></div> -->
					<div class="column ">
							<router-view class='animated fadeIn ' ></router-view>
					</div>
				</div>


			</div>
		</section>

	</div>
	<link rel="stylesheet" href="{{url("css/animate.css")}}">
	<script src="{{url('js/app.js')}}"></script>
</body>
</html>
