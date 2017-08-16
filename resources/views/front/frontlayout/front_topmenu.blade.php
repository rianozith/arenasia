			<span class="menu"></span>
			  <ul>
				 <li class="active"><a href="{{url('/')}}">HOME</a></li>
				 <li><a href="{{url('/about')}}">ABOUT US</a></li>
				 <li><a href="{{url('/gallery')}}">GALLERY</a></li>
				 <li><a href="{{url('/404')}}">TRAINING</a></li>
				 <li><a href="{{url('/news')}}">NEWS & EVENTS</a></li>
				 <li><a href="{{url('/contact')}}">CONTACT</a></li>
				 @if (Route::has('login'))
	                	@if (Auth::check())
	                        <li><a href="{{url('/dashboard')}}">DASHBOARD</a></li>
	                    @else
				 			<li><a href="{{url('/login')}}">LOGIN</a></li>
	                        {{-- <a href="{{ url('/register') }}">Register</a> --}}
	                    @endif
	                </div>
	            @endif
			 </ul>	