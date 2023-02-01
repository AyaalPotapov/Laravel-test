<nav class="navbar navbar-expand-md">
	<div class="container">
	  	<a href="{{route('home')}}" class="navbar-brand">
			{{__('Милосердие')}}
	  	</a>
	  	<button type="button" class="navbar-toggler"  data-bs-toggle="collapse" data-bs-target="#navbar-collapse" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
		 <span class="navbar-toggler-icon"></span>
	  	</button>
	  	<div class="collapse navbar-collapse" id="navbar-collapse">
			<ul class="navbar-nav me-auto mt-1 mb-md-0">
				<li class="nav-item">
					<a href="{{route('home')}}" class="nav-link {{Route::is('home') ? 'active' : ''}}" aria-current="page">
						{{__('Главная')}}
					</a>
				</li>
			
				<li class="nav-item">
					<a href="{{route('blog')}}" class="nav-link {{Route::is('blog*') ? 'active' : ''}}">
						{{__('Статьи')}}
					</a>
				</li>
			</ul>

			<ul class="navbar-nav ms-auto mt-1 mb-md-0">
				<li class="nav-item">
					<a href="{{route('register')}}" class="nav-link {{Route::is('register') ? 'active' : ''}}" aria-current="page">
						{{__('Регистрация')}}
					</a>
				</li>
			
				<li class="nav-item">
					<a href="{{route('login')}}" class="nav-link {{Route::is('login') ? 'active' : ''}}">
						{{__('вход')}}
					</a>
				</li>
			</ul>
	  	</div>
	</div>
 </nav>
