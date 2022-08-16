<header class="theme-header transparent-header">
		<div class="header-navigation navigation-style-v1">
			<div class="nav-overlay"></div>
			<div class="container-fluid">
				<div class="primary-menu">
					<div class="site-branding">
						<a href="{{ route('home') }}" class="brand-logo"><img src="{{ asset('/images/logo/logo-1.png') }} " alt="Site Logo"></a>
					</div>
					<div class="nav-menu">
						<div class="navbar-close"><i class="far fa-times"></i></div>
						<div class="nav-search">
							<form>
								<div class="form_group">
									<input type="email" class="form_control" placeholder="Search Here" name="email" required>
									<button class="search-btn"><i class="fas fa-search"></i></button>
								</div>
							</form>
						</div>
						<nav class="main-menu">
							<ul>
								<li class="menu-item has-children"><a href="index.html#" class="active nav-link">Demos</a>
									<ul class="sub-menu">
										<li class="has-children"><a href="index.html#">Multipage</a>
											<ul class="sub-menu">
												<li><a href="index.html">Creative Agency</a></li>
												<li><a href="index-2.html">Digital Agency</a></li>
												<li><a href="index-3.html">Design Studio</a></li>
												<li><a href="index-3-dark.html">Design Studio Dark</a></li>
											</ul>
										</li>
										<li class="has-children"><a href="index.html#">Onepage</a>
											<ul class="sub-menu">
												<li><a href="onepage-index-1.html">Creative Agency</a></li>
												<li><a href="onepage-index-2.html">Digital Agency</a></li>
												<li><a href="onepage-index-3.html">Design Studio</a></li>
												<li><a href="onepage-index-3-dark.html">Design Studio Dark</a></li>
											</ul>
										</li>
									</ul>
								</li>
								<li class="menu-item has-children"><a href="index.html#" class="nav-link">Services</a>
									<ul class="sub-menu">
										<li><a href="services.html">Our Service</a></li>
										<li><a href="service-details.html">Service Details</a></li>
									</ul>
								</li>
								<li class="menu-item has-children"><a href="index.html#" class="nav-link">Portfolio</a>
									<ul class="sub-menu">
										<li><a href="projects.html">Our Portfolio</a></li>
										<li><a href="project-details.html">Portfolio Details</a></li>
									</ul>
								</li>
								<li class="menu-item has-children"><a href="index.html#" class="nav-link">Pages</a>
									<ul class="sub-menu">
										<li><a href="{{ route('about') }}">About Us</a></li>
										<li><a href="team.html">Our Team</a></li>
										<li><a href="team-details.html">Team Details</a></li>
									</ul>
								</li>
								<li class="menu-item has-children"><a href="index.html#" class="nav-link">Blog</a>
									<ul class="sub-menu">
										<li><a href="blogs.html">Our Blog</a></li>
										<li><a href="blog-details.html">Blog Details</a></li>
									</ul>
								</li>
								<li class="menu-item"><a href="contact.html" class="nav-link">Contact</a></li>
							</ul>
						</nav>
					</div>
					<div class="header-right-nav">
						<ul>
							<li class="bar-item">
								<a href="index.html#"><img src="{{ asset('/images/dot.png') }}" alt="dot"></a>
							</li>
							<li class="navbar-toggle-btn">
								<div class="navbar-toggler"> <span></span> <span></span> <span></span> </div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</header>