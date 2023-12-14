    <!--   header start -->
    <nav id="navbar" class="navbar nav navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                <p class="h3"> 
                <img src="{{ DzHelper::siteLogo() }}" alt="{{ __('Dark theme site logo') }}" class="img-fluid white"> 
                    <img src="{{ theme_asset('img/icon-3.png') }}" alt="" class="img-fluid black"> 
				</p> 
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class=""> <i class="fa-solid fa-bars"></i> </span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link "  href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Company
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="about.html">About Us </a></li>
                            <li><a class="dropdown-item" href="team.html">Our Team </a></li> 
                            <li><a class="dropdown-item" href="team-details.html">Team Details</a></li> 
                            <li><a class="dropdown-item" href="why-choose-us.html">Whay Choose Us</a></li> 
                            <li><a class="dropdown-item" href="case-study.html">Case Study</a></li> 
                            <li><a class="dropdown-item" href="case-study-details.html">Case Study Details</a></li> 
                            <li><a class="dropdown-item" href="portfolio.html">Portfolio</a></li> 
                            <li><a class="dropdown-item" href="pricing.html">Pricing</a></li> 
                            <li><a class="dropdown-item" href="faq.html">FAQ</a></li> 
                            <li><a class="dropdown-item" href="error.html">Error</a></li> 
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link "  href="service.html">Service</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link "  href="it-service.html">It Solution</a>
                    </li> 
                    <li class="nav-item">
                        <a class="nav-link "  href="blog.html"> Blog</a>
                    </li> 
                    <li class="nav-item">
                        <a class="nav-link "  href="contact.html"> Contact</a>
                    </li> 
                    <li class="nav-item">
                        <a class="nav-link btn-one px-4" aria-current="page" href="#home">Get Started</a>
                    </li>
                </ul> 
            </div>
        </div>
    </nav> 
    <!--   header end -->
