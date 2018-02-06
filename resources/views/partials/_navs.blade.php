	<!-- Default Bootstrap Navbar -->
	<nav class="navbar navbar-expand-lg navbar-light bg-light mb-4">
		<a class="navbar-brand" href="/">Laravel blog</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>


		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				<li class=" nav-item {{ Request::is('/') ? "active" : ""}}">
					<a class="nav-link" href="/">Home</a>
				</li>
				<li class="nav-item {{ Request::is('blog') ? "active" : ""}}">
					<a class="nav-link" href="/blog">Blog</a>
				</li>
				<li class="nav-item {{ Request::is('about') ? "active" : ""}}">
					<a class="nav-link" href="/about">About</a>
				</li>
				<li class="nav-item {{ Request::is('contact') ? "active" : ""}}">
					<a class="nav-link" href="/contact">Contact</a>
				</li>
			</ul>
			<ul class="navbar-nav ml-auto">
				<li class="nav-item dropdown navbar-right">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							@if (Auth::guest())
							My Account
							@else
							{{ Auth::user()->name }}
							@endif
						</a>
					<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
						@if (Auth::guest())
							<a class="dropdown-item" href="{{ route('login') }}">Login</a>
							<a class="dropdown-item" href="{{ route('register') }}">Register</a>
						@else
							<a class="dropdown-item" href="{{ route('logout') }}"
								onclick="event.preventDefault();
										 document.getElementById('logout-form').submit();">
								Logout
							</a>

							<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
								{{ csrf_field() }}
							</form>
							<a class="dropdown-item" href="#">Action</a>
							<a class="dropdown-item" href="#">Another action</a>
							<a class="dropdown-item" href="#">Something else here</a>
						@endif
						
					</div>
				</li>
			</ul>
		</div>

	</nav>