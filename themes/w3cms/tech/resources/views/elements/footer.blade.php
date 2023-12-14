   
<!--    footer star -->
<div class="footer">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-4">
               <div class="pe-5">
                <a href="{{ url('/') }}"><img src="{{ theme_asset('img/icon.png') }}"  alt="{{ __('Footer Logo') }}" class="img-fluid mb-4"></a>
                <p>We are a team of highly skilled and experienced IT professionals who are dedicated to delivering innovative and reliable solutions that meet the unique needs of your business.</p>
                <div class="social">

					<a target="_blank" href="{{ config('Social.facebook') }}"> <i class="fa-brands fa-facebook-f"></i></a>
					<a target="_blank" href="{{ config('Social.twitter') }}"> <i class="fa-brands fa-twitter"></i></a>
					<a target="_blank" href="{{ config('Social.linkedin') }}"> <i class="fa-brands fa-linkedin-in"></i></a>
					<a target="_blank" href="{{ config('Social.instagram') }}"> <i class="fa-brands fa-instagram"></i></a>
                </div>
                </div>
            </div>
            <div class="col-lg-2">
                <h4 class="mb-4">Our Services </h4>
                <ul>
                    <li><a href="#"><i class="fa-solid fa-angles-right"></i> &nbsp; Marketing Strategy </a></li> 
                    <li><a href="#"><i class="fa-solid fa-angles-right"></i> &nbsp; Interior Design </a></li> 
                    <li><a href="#"><i class="fa-solid fa-angles-right"></i> &nbsp; Digital Services </a></li> 
                    <li><a href="#"><i class="fa-solid fa-angles-right"></i> &nbsp; Digital Services </a></li> 
                    <li><a href="#"><i class="fa-solid fa-angles-right"></i> &nbsp; Product Selling </a></li> 
                    <li><a href="#"><i class="fa-solid fa-angles-right"></i> &nbsp; Product Design </a></li> 
                    <li><a href="#"><i class="fa-solid fa-angles-right"></i> &nbsp; Social Marketing </a></li>  
                </ul>
            </div>
            <div class="col-lg-3">
               <div class="ps-sm-5 ps-0"> 
                   <h4 class="mb-4">Our Services </h4>
                <ul>
                    <li><i class="fa-solid fa-angles-right"></i> &nbsp; <a href="about.html">About Us</a></li>
                    <li><i class="fa-solid fa-angles-right"></i> &nbsp; <a href="contact.html">Contact Us</a></li>
                    <li><i class="fa-solid fa-angles-right"></i> &nbsp; <a href="#">Projects </a></li>
                    <li><i class="fa-solid fa-angles-right"></i> &nbsp; <a href="#">Careers </a></li>
                    <li><i class="fa-solid fa-angles-right"></i> &nbsp; <a href="#">News</a></li>
                    <li><i class="fa-solid fa-angles-right"></i> &nbsp; <a href="#">Privacy Policy </a></li>
                    <li><i class="fa-solid fa-angles-right"></i> &nbsp; <a href="#">Terms of Use</a></li>
                </ul>
                </div>
            </div>
            <div class="col-lg-3">
                <h4 class="mb-4">Contact Info </h4>
                <ul>
                    <li class="address">
                        <i class="fa-solid fa-location-dot"></i> 
                        818 SW 3RD Ave,#161, <br>
                        london Portland, OR</li>
                    <li class="address"> 
                        <i class="fa-regular fa-envelope"></i>
                        <a href="mailto:info@example.com"> info@example.com</a> <br>
                        <a href="mailto:info@example.com">info@example.com </a>
                    </li>
                    <li class="address">
                        <i class="fa-solid fa-phone"></i>
                        <a href="tel:97430057012">+974 30057012 </a> <br>
                        <a href="tel:97430057012">+974 30007213</a>
                    </li>
                </ul>
            </div>
        </div>
        <hr>
        <div class="row pt-3">
            <div class="col-lg-12 text-center">
                <p class="mb-0">{!! config('Site.copyright') !!}</p>
            </div>
        </div>
    </div>
</div>
<!--    footer end  -->
