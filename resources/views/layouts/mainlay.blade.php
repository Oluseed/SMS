<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <meta name="csrf-token" content="{{ csrf_token() }}"/>
        <meta name="author" content="Baron, Cysteine"/>
        <meta property="og:image" content="https://sms.oluseed.com/imgs/logo.jpg"/>
        <meta name="description" content="{{ $metadata['description'] }}"/>
        <meta name="keywords" content="{{ $metadata['keywords'] }}"/>
        <title>{{ $metadata['title'] ?? 'SRMS' }}</title>
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet"/>
        <link rel="stylesheet" href="css/main.css"/>
        <script src="https://code.jquery.com/jquery-3.1.1.js"></script>
        <script src="https://kit.fontawesome.com/06a287e153.js" crossorigin="anonymous"></script>
        <script src="{{ asset('js/srms.js') }}"></script>
    </head>

    <body>
        <header id="header">
            <div>
                <img src="./imgs/logo.jpg" alt="LOGO" title="School Logo"/>
            </div>
            <h2>WELCOME TO OUR HOMEPAGE</h2>
            <br/>
            <aside id="header_aside">
                <span id="motto">for learning and academic excellence.</span>
            </aside>
        </header>
        
        <div id="nav_pics">
            <div>
                <ul class="top_nav">
                    <a href="{{ route('home') }}">
                        <li>HOME</li>
                    </a>
                    <a href="{{ route('school.portal') }}">
                        <li>e-Portal</li>
                    </a>
                    <a href="{{ route('select.school') }}">
                        <li>Select School</li>
                    </a>
                    <a href="#">
                        <li>General Info</li>
                    </a>
                    <a href="#">
                        <li>About Us</li>
                    </a>
                </ul>
            </div>
        </div>

        <section>
            @yield('content')
            <marquee style="background:#0c3b79;color:white;">Student Management System</marquee>
        </section>
        <footer id="footer">
            <div class="footer-grid">
        		<ul>
        		    <h4>More From Us</h4>
        		    <li> &#10004; Contact Info </li>
            		<li> &#10004; Privacy Policy</li>
            		<li> &#10004; About Us </li>
            		<li> &#10004; Terms Of Service </li>
        		</ul>
        		<ul>
        		    <h4>Our Head Office</h4>
        		    <li><i class="fa fa-map-marker-alt"></i> 123 Street, New York, USA</li>
        		    <li><i class="fa fa-phone-alt"></i> +012 345 67890</li>
        		    <li><i class="fa fa-envelope"></i> oluseed@gmail.com</li>
        		</ul>
            </div>
    		<div class="footer-socials">
    		    <a href="#" class="flex-box">
    		        <i class="fab fa-twitter" ></i>
    		    </a>
    		    <a href="#" class="flex-box">
    		        <i class="fab fa-facebook-f"></i>
    		    </a>
    		    <a href="#" class="flex-box yout">
    		        <i class="fab fa-youtube" ></i>
    		    </a>
    		    <a href="#" class="flex-box inst">
    		        <i class="fab fa-instagram"></i>
    		    </a>
    		    <a href="#" class="flex-box likd">
    		        <i class="fab fa-linkedin-in"></i>
    		    </a>
    		</div>
		    <p>&copy; All rights reserved 2020.</p>
		</footer>
		
		
        <script>
var pic = [
    "./imgs/roll0.jpg",
    "./imgs/roll1.jpg", 
    "./imgs/roll2.jpg",
    "./imgs/roll3.jpeg",
    "./imgs/roll4.jpeg",
    "./imgs/roll5.jpeg"
];
var p = document.getElementById("nav_pics");
var num = 0;

function next(){
	num++;
	if (num >= pic.length){
		num = 0;
	}
	p.style.background = "url("+pic[num]+")";
};
function prev(){
	num--;
	if (num < 0){
		num = pic.length - 1;
	}
	p.style.background = "url("+pic[num]+")";
};
setInterval(next, 3000);
        </script>
    </body>
</html>