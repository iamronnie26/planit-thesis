<header id="header" id="home">
		    <div class="container">
		    	<div class="row align-items-center justify-content-between d-flex">
			      <div id="logo">
			        <a href="{{url('/')}}"><h1>P</h1></a>
			      </div>
			      <nav id="nav-menu-container">
			        <ul class="nav-menu">
			          <li class="menu-active"><a href="#home">Home</a></li>
								<li><a href="#about">About</a></li>
								<li><a href="#service">Services</a></li>
			          <li><a href="#contact">Contact</a></li>
			          <li class="menu-has-children"><a href="javascript:void(0);">Account</a>
			            <ul>
									<li><a href="{{route('login')}}">Login</a></li>
			              <li><a href="{{route('register')}}">Signup</a></li>
			            </ul>
			          </li>
			        </ul>
			      </nav><!-- #nav-menu-container -->		    		
		    	</div>
		    </div>
</header><!-- #header -->