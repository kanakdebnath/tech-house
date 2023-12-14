@extends('layout.default')

@section('content')

  
<!--     banner start-->
<div class="banner"  style="background-image: linear-gradient(90deg,rgba(17, 0, 80, 0.60) 0%,rgba(17, 0, 80, 0.70) 100%),url({{ theme_asset('img/banner-2.jpg') }})!important;">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 mx-auto pt-5">
                <h5>Discover a better way to do business with our comprehensive IT services </h5>
                <h1 class="my-4 fw-bold">Drive Growth and Innovation with Our Comprehensive IT Services </h1>
                <div class="my-5">
                    <a href="#" class="btn-one me-sm-4 me-0">Explore Our Solutions &nbsp; <i class="fa-solid fa-arrow-right-long"></i></a>
                    <a href="contact.html" class="btn-two">Contact Us Now &nbsp; <i class="fa-solid fa-arrow-right-long"></i></a>  
                </div>
            </div>
        </div>
    </div>
</div>
<!--     banner end-->
    
    
<!--feature start-->
    <div class="feature pb-5 mb-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-3">
                    <div class="shadow p-4 rounded">
                       <div class="icon">
                           <i class="fa-solid fa-shield-halved"></i>
                       </div>
                        <h3>Security</h3>
                        <p class="mb-0">Keep your data secure with our top-of-the-line security features.</p>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="shadow p-4 rounded">
                       <div class="icon">
                           <i class="fa-solid fa-scale-balanced"></i>
                       </div>
                        <h3>Scalability</h3>
                        <p class="mb-0">As your business grows, so do your IT needs. Our solution is designed to scale with you</p>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="shadow p-4 rounded">
                        <div class="icon">
                            <i class="fa-regular fa-heart"></i>
                        </div>
                        <h3>Reliability</h3>
                        <p class="mb-0">Downtime is not an option. Our solution is built to deliver maximum uptime and reliability</p>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="shadow p-4 rounded">
                        <div class="icon">
                            <i class="fa-solid fa-users"></i>
                        </div>
                        <h3>Ease of Use</h3>
                        <p class="mb-0">Our intuitive interface makes it easy to manage your IT infrastructure, even if you're not a tech expert. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!--feature end-->
    
<!--    About start-->
<div class="container py-0 py-sm-5 my-5 about">
    <div class="row py-5 my-5">
        <div class="col-lg-6">
            <div class="img-box">
                <img src="{{ theme_asset('img/angle.png') }}" alt="" class="img-fluid one">
                <img src="{{ theme_asset('img/about.jpg') }}" alt="" class="img-fluid two">
            </div>
        </div>
        <div class="col-lg-6">
           <p class="fw-bold cor2">About Us <span class="bor ms-3"></span></p>
            <h2 class="h1 fw-bold">Empowering Your Business with Innovative <span class="cor">  Technology Solutions</span></h2>
            <h5 class="lh-lg mb-4">Expert IT Consulting, Software Development, Cloud Solutions, and More at TechNetify IT Solutions.</h5>
            
            <p>Welcome to TechNetify IT Solutions, your one-stop-shop for all your technology needs. We are a team of highly skilled and experienced IT professionals who are dedicated to delivering innovative and reliable solutions that meet the unique needs of your business.  </p>
            <p>At TechNetify, we understand that technology is constantly evolving, and keeping up with the latest trends and advancements can be challenging. That's why we're here to help. Our team of experts stays up-to-date with the latest developments in the tech industry, so you can rest assured that you're getting the best possible advice and solutions. </p>
             
            <div class="mt-5">
                <a href="#" class="btn-one">More Details &nbsp; <i class="fa-solid fa-arrow-right-long"></i></a>
            </div>
        </div>
    </div>
</div>
<!--    About end-->
     
<!-- services start    -->
<div class="services">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-12 text-center">
                <p class="fw-bold">Services<span class="bor2 ms-3"></span></p>
                <h2 class="h1 mb-5">Streamline Your Business with our IT Solutions</h2>
            </div>
            <div class="col-lg-4">
                <div class="card-one">
                    <p class="cor mb-4"><i class="fa-solid fa-arrow-right-long"></i></p>
                    <h3 class="mb-4">Cloud Services</h3>
                    <p>With our cloud services, you can securely store, manage, and access your business data from anywhere in the world. Our cloud solutions are scalable and customizable to meet your specific business needs.</p>
                    <div class="mt-4 h1 cor">
                        <i class="fa-solid fa-cloud-arrow-up"></i>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card-one">
                    <p class="cor mb-4"><i class="fa-solid fa-arrow-right-long"></i></p>
                    <h3>Cybersecurity</h3>
                    <p>Protect your business against cyber threats with our comprehensive cybersecurity solutions. We offer a range of services including threat detection, incident response, and security awareness training. </p>
                    <div class="mt-4 h1 cor">
                        <i class="fa-solid fa-file-shield"></i>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card-one">
                    <p class="cor mb-4"><i class="fa-solid fa-arrow-right-long"></i></p>
                    <h3>Network Solutions </h3>
                    <p>Our network solutions are designed to keep your business connected and running smoothly. From setting up and maintaining your network infrastructure to providing reliable internet connectivity, we have you covered. </p>
                    <div class="mt-4 h1 cor">
                        <i class="fa-solid fa-network-wired"></i>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card-one">
                    <p class="cor mb-4"><i class="fa-solid fa-arrow-right-long"></i></p>
                    <h3>Software Development </h3>
                    <p>Custom software development is our specialty. We work closely with our clients to create software that meets their unique business requirements. Our developers are skilled in a variety of programming languages and frameworks. </p>
                    <div class="mt-4 h1 cor">
                        <i class="fa-brands fa-uncharted"></i>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card-one">
                    <p class="cor mb-4"><i class="fa-solid fa-arrow-right-long"></i></p>
                    <h3>IT Consulting </h3>
                    <p>Get expert advice and guidance on your IT strategy with our IT consulting services. We offer assessments, audits, and roadmaps to help you optimize your IT investments and improve business performance. 
                    </p>
                    <div class="mt-4 h1 cor">
                        <i class="fa-regular fa-handshake"></i>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card-one">
                    <p class="cor mb-4"><i class="fa-solid fa-arrow-right-long"></i></p>
                    <h3>Managed Services </h3>
                    <p> Take the hassle out of IT management with our managed services. We offer proactive monitoring, maintenance, and support for your IT systems, ensuring they are always up-to-date and performing at their best. </p>
                    <div class="mt-4 h1 cor">
                        <i class="fa-solid fa-people-roof"></i>
                    </div>
                </div>
            </div> 
        </div>
    </div>
</div>
<!-- services end    -->
     
<!--   team start  -->
<div class="container py-5 my-5 team">
    <div class="row g-4">
        <div class="col-lg-12 text-center">
            <p class="fw-bold">Team Member<span class="bor2 ms-3"></span></p>
            <h2 class="h1 mb-5">Meet Our Team</h2>
        </div>
        <div class="col-lg-3">
            <div class="t-card">
                <img src="{{ theme_asset('img/team1.jpg') }}" alt="" class="img-fluid">
                <div class="info">
                    <h4>John Smith</h4>
                    <p class="cor2">Marketing Manager</p>
                    <div class="social mt-2">
                        <a href="#"> <i class="fa-brands fa-facebook-f"></i></a>
                        <a href="#"> <i class="fa-brands fa-twitter"></i></a>
                        <a href="#"> <i class="fa-brands fa-linkedin-in"></i></a>
                        <a href="#"> <i class="fa-brands fa-instagram"></i></a> 
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="t-card">
                <img src="{{ theme_asset('img/team2.jpg') }}" alt="" class="img-fluid">
                <div class="info">
                    <h4>David Nguyen </h4>
                    <p class="cor2">Software Engineer</p>
                    <div class="social mt-2">
                        <a href="#"> <i class="fa-brands fa-facebook-f"></i></a>
                        <a href="#"> <i class="fa-brands fa-twitter"></i></a>
                        <a href="#"> <i class="fa-brands fa-linkedin-in"></i></a>
                        <a href="#"> <i class="fa-brands fa-instagram"></i></a> 
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="t-card">
                <img src="{{ theme_asset('img/team3.jpg') }}" alt="" class="img-fluid">
                <div class="info">
                    <h4>Sarah Lee </h4>
                    <p class="cor2">Product Designer</p>
                    <div class="social mt-2">
                        <a href="#"> <i class="fa-brands fa-facebook-f"></i></a>
                        <a href="#"> <i class="fa-brands fa-twitter"></i></a>
                        <a href="#"> <i class="fa-brands fa-linkedin-in"></i></a>
                        <a href="#"> <i class="fa-brands fa-instagram"></i></a> 
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="t-card">
                <img src="{{ theme_asset('img/team4.jpg') }}" alt="" class="img-fluid">
                <div class="info">
                    <h4>Emily Chen </h4>
                    <p class="cor2">Customer Support Specialist</p>
                    <div class="social mt-2">
                        <a href="#"> <i class="fa-brands fa-facebook-f"></i></a>
                        <a href="#"> <i class="fa-brands fa-twitter"></i></a>
                        <a href="#"> <i class="fa-brands fa-linkedin-in"></i></a>
                        <a href="#"> <i class="fa-brands fa-instagram"></i></a> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--   team end  -->
 
    <!--Case Study start -->
    <div class="container-fluid p-5">
        <div class="row">
            <div class="col-lg-12 text-center">
                <p class="fw-bold">Case Study<span class="bor2 ms-3"></span></p>
                <h2 class="h1 mb-5"> A Case Study on the Benefits of Adopting a Customizable </h2>
            </div>
        </div>
        <div class="row">
            <div class="owl-carousel owl-theme owl-loaded owl-drag">
                <div class="case-card">
                    <div class="card-img">
                        <img src="{{ theme_asset('img/portfolio/01.jpg') }}" alt="Example Image">
                        <div class="overlay"></div>
                        <div class="card-text">
                            <p class="h5">Overview</p>
                            <h3>Scope & Timeline</h3>
                        </div>
                    </div>
                </div>
                <div class="case-card">
                    <div class="card-img">
                        <img src="{{ theme_asset('img/portfolio/02.jpg') }}" alt="Example Image">
                        <div class="overlay"></div>
                        <div class="card-text">
                            <p class="h5">Challenges</p>
                            <h3>Business Impact</h3>
                        </div>
                    </div>
                </div>
                <div class="case-card">
                    <div class="card-img">
                        <img src="{{ theme_asset('img/portfolio/03.jpg') }}" alt="Example Image">
                        <div class="overlay"></div>
                        <div class="card-text">
                            <p class="h5">Solutions</p>
                            <h3>IT Services Provided</h3>
                        </div>
                    </div>
                </div>
                <div class="case-card">
                    <div class="card-img">
                        <img src="{{ theme_asset('img/portfolio/04.jpg') }}" alt="Example Image">
                        <div class="overlay"></div>
                        <div class="card-text">
                            <p class="h5">Implementation</p>
                            <h3>Integration Process Steps</h3>
                        </div>
                    </div>
                </div>
                <div class="case-card">
                    <div class="card-img">
                        <img src="{{ theme_asset('img/portfolio/05.jpg') }}" alt="Example Image">
                        <div class="overlay"></div>
                        <div class="card-text">
                            <p class="h5">Results</p>
                            <h3>Improved Efficiency & Savings</h3>
                        </div>
                    </div>
                </div>
                <div class="case-card">
                    <div class="card-img">
                        <img src="{{ theme_asset('img/portfolio/06.jpg') }}" alt="Example Image">
                        <div class="overlay"></div>
                        <div class="card-text"> 
                            <p class="h5">Testimonials</p>
                            <h3>Praise for TechNetify</h3>
                        </div>
                    </div>
                </div>
                <div class="case-card">
                    <div class="card-img">
                        <img src="{{ theme_asset('img/portfolio/07.jpg') }}" alt="Example Image">
                        <div class="overlay"></div>
                        <div class="card-text">
                            <p class="h5">Future Plans</p>
                            <h3>Support & Expansion Goals</h3>
                        </div>
                    </div>
                </div> 
            </div> 
        </div>
    </div>
    <!--Case Study end  -->

    <!--Working Process end  -->
    <div class="container py-5 my-5">
        <div class="row">
            <div class="col-lg-12 text-center">
                <p class="fw-bold">Features Case <span class="bor2 ms-3"></span></p>
                <h2 class="h1 mb-5"> Our Working Process  </h2>
            </div>
        </div>
        <div class="row g-4">
<div class="col-lg-3">
    <div class="process-card"> 
    <span>1</span>
    <div class="mt-5"> 
    <h3>Discover</h3>
    <p>We ask questions to understand your unique business needs and give you a chance to get to know us and how we can help
    you.
</p>
</div>
</div>
</div>
<div class="col-lg-3">
    <div class="process-card">
        <span>2</span>
        <div class="mt-5">
            <h3>Access</h3>
            <p>An IT specialist will make an on-site visit to review all IT hardware, overall security, and logical structure of your
            network. 
            </p>
        </div>
    </div>
</div>
<div class="col-lg-3">
    <div class="process-card">
        <span>3</span>
        <div class="mt-5">
            <h3>Advise</h3>
            <p>Our team will collect and review all relevant information, then present to you a comprehensive plan for the future. 
            </p>
        </div>
    </div>
</div>
<div class="col-lg-3">
    <div class="process-card">
        <span>4</span>
        <div class="mt-5">
            <h3>Onboard</h3>
            <p>Once we get your approval, the team will implement the agreed upon solution and measure the results. From there, we will
            make new recommendations. 
            </p>
        </div>
    </div>
</div>
        </div> 
        </div> 
    <!--Working Process Study end  -->

    <!--Counter start  -->
    <div class="counter" style="background:#110050 url({{ theme_asset('img/bg-shape.png') }});"> 
    <div class="container  p-5">
        <div class="row g-4  text-center">
            <div class="col-lg-3">
               <div class="count-card">
                <div class="icon">
                <i class="fa-solid fa-comment-dots"></i>
                </div>
                <p class="display-1 fw-bold">280</p>
                <p class="h5">Our Branchs </p>
               </div>
            </div>
            <div class="col-lg-3">
                <div class="count-card mt-5">
                    <div class="icon color-2">
                        <i class="fa-solid fa-comment-dots"></i>
                    </div>
                    <p class="display-1 fw-bold">782</p>
                    <p class="h5">Projects Done  </p>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="count-card">
                    <div class="icon color-3">
                        <i class="fa-solid fa-comment-dots"></i>
                    </div>
                    <p class="display-1 fw-bold">1M</p>
                    <p class="h5">Happy Users </p>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="count-card mt-5">
                    <div class="icon color-4">
                        <i class="fa-solid fa-comment-dots"></i>
                    </div>
                    <p class="display-1 fw-bold">100</p>
                    <p class="h5">Awards</p>
                </div>
            </div>
        </div>
        </div>
    </div>
<!--Counter end  -->

    <!--TESTIMONIAL start-->
    <div class="testimonial py-5">
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-12 text-center">
                <p class="fw-bold"> Testimonial <span class="bor2 ms-3"></span></p>
                <h2 class="h1 mb-5"> What Says
                    Our Happy Clients  </h2>
            </div>
        </div>
        <div class="row">
            <div class="owl-two owl-carousel owl-theme owl-loaded owl-drag"> 
               
                <div class="ts-card">
                    <div class="rating mb-2">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <h4>Amazing product</h4>
                    <p>On your bike mate for quaint burke naff daft
                        bite,
                        your arm give us bell blimey barmy crack school.</p>
                        
                    <div class="d-flex">
                        <div class="flex-shrink-0">
                            <img src="{{ theme_asset('img/user-1.png') }}" alt="...">
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <h5 class="mb-0">Fig Nelson</h5>
                            <p>Manager</p>
                        </div>
                    </div>
                </div>
                
                <div class="ts-card">
                    <div class="rating mb-2">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <h4>Top notch support</h4>
                    <p>On your bike mate for quaint burke naff daft
                        bite,
                        your arm give us bell blimey barmy crack school.</p>

                    <div class="d-flex">
                        <div class="flex-shrink-0">
                            <img src="{{ theme_asset('img/user-2.png') }}" alt="...">
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <h5 class="mb-0">Eleanor Fant</h5>
                            <p>Developer</p>
                        </div>
                    </div>
                </div>
                
                <div class="ts-card">
                    <div class="rating mb-2">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <h4>Featured customer</h4>
                    <p>On your bike mate for quaint burke naff daft
                        bite,
                        your arm give us bell blimey barmy crack school.</p>

                    <div class="d-flex">
                        <div class="flex-shrink-0">
                            <img src="{{ theme_asset('img/user-3.png') }}" alt="...">
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <h5 class="mb-0">Hilary Ouse</h5>
                            <p>Customer</p>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        </div>
    </div>
    <!--TESTIMONIAL end-->
    
<!--    blog start-->
    
    <div class="container py-5 my-5">
        <div class="row mb-5">
            <div class="col-lg-6">
                <p class="fw-bold"> Blog <span class="bor2 ms-3"></span></p>
                <h2 class="h1 ">Read Our Latest News Feed </h2>
            </div>
            <div class="col-lg-6 text-end">
                <a href="#" class="btn-one">See All Blogs</a>
            </div>
        </div>
        <div class="row g-4">
            <div class="col-lg-4">
                <div class="blog-card">
                    <div class="top d-flex justify-content-between">
                        <div class=" ">
                            <i class="fa-solid fa-calendar-days"></i> &nbsp;
                            <span> 20 th Mar 2023 </span>
                        </div>
                        <div class="float-end">
                            <i class="fa-regular fa-comments"></i> &nbsp;
                            <span> 10 Comments </span>
                        </div>
                    </div>
                    <img src="{{ theme_asset('img/blog/blog-1.jpg') }}" alt="" class="img-fluid">
                    <div class="p-4">
                        <h4>Why
                            startup turn to Jenny
                            for their websites.</h4>
                        <p>Matie boy owt to do with bevvy blok
                            haggle
                            nice
                            one starkers give us.</p>
                        <a href="#">Read More &nbsp; <i class="fa-solid fa-arrow-right-long"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="blog-card">
                    <div class="top d-flex justify-content-between">
                        <div class=" ">
                            <i class="fa-solid fa-calendar-days"></i> &nbsp;
                            <span> 20 th Mar 2023 </span>
                        </div>
                        <div class="float-end">
                            <i class="fa-regular fa-comments"></i> &nbsp;
                            <span> 10 Comments </span>
                        </div>
                    </div>
                    <img src="{{ theme_asset('img/blog/blog-2.png') }}" alt="" class="img-fluid">
                    <div class="p-4">
                        <h4>How to
                            organize your
                            article
                            links with Jenny</h4>
                        <p>Matie boy owt to do with bevvy blok
                            haggle
                            nice
                            one starkers give us.</p>
                        <a href="#">Read More &nbsp; <i class="fa-solid fa-arrow-right-long"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="blog-card">
                    <div class="top d-flex justify-content-between">
                        <div class=" ">
                            <i class="fa-solid fa-calendar-days"></i> &nbsp;
                            <span> 20 th Mar 2023 </span>
                        </div>
                        <div class="float-end">
                            <i class="fa-regular fa-comments"></i> &nbsp;
                            <span> 10 Comments </span>
                        </div>
                    </div>
                    <img src="{{ theme_asset('img/blog/blog-3.png') }}" alt="" class="img-fluid">
                    <div class="p-4">
                        <h4>In house
                            Design Thinking
                            How I deal with it?</h4>
                        <p>Matie boy owt to do with bevvy blok
                            haggle
                            nice
                            one starkers give us.</p>
                        <a href="#">Read More &nbsp; <i class="fa-solid fa-arrow-right-long"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
     
    <!--    blog end-->
@endsection