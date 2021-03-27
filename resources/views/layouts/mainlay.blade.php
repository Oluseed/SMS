<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <meta name="author" content="Baron, Cysteine"/>
        <meta property="og:image" content="{{ asset('imgs/logo.jpg') }}"/>
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
                <img src="{{ asset('imgs/logo.jpg') }}" alt="LOGO" title="School Logo"/>
            </div>
            <h2>WELCOME TO OUR HOMEPAGE</h2>
            <br/>
            <aside id="header_aside">
                <span id="motto">for learning and academic excellence.</span>
            </aside>
        </header>

        <section id="body">
            @yield('content')
            <marquee style="background:#0c3b79;color:white;">Student Management System</marquee>
        </section>
        <footer id="footer">
    		<ul>
    		    <li>Contact Info </li>
        		<li>Privacy Policy</li>
        		<li>About Us </li>
        		<li>Terms Of Service </li>
    		</ul>
		  
		    <p>&copy; All rights reserved 2020.</p>
		</footer>

    </body>
</html>