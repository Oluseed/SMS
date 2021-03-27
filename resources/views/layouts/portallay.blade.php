<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="author" content="Baron, Cysteine"/>
        <meta property="og:image" content="{{ asset('/../imgs/logo.jpg') }}"/>
        <meta name="description" content="{{ $metadata['description'] }}"/>
        <meta name="keywords" content="{{ $metadata['keywords'] }}"/>
        <title>{{ $school->school_name.' '.$metadata['title'] ?? 'SRMS' }}</title>
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet"/>
        <link rel="stylesheet" href="{{ asset('css/main.css') }}"/>
        <script src="https://code.jquery.com/jquery-3.1.1.js"></script>
        <script src="https://kit.fontawesome.com/06a287e153.js" crossorigin="anonymous"></script>
        <script src="{{ asset('js/srms.js') }}"></script>
    </head>

    <body>
        <header id="header">
            <div>
                <img src="{{ asset('/../imgs/logo.jpg') }}" alt="LOGO" title="School Logo"/>
            </div>
            <h2>{{ $school->school_name }}</h2>
            <br/>
            <nav id="header_nav">
                <ul>
                    <li><a href="{{ route('home') }}"><i class="fas fa-home"></i> HOME</a></li>
                </ul>
            </nav>
            <aside id="header_aside">
                <span id="motto">{{ $school->school_motto }}.</span>
                @hasSection('status')
                    @yield('status')
                @endif
            </aside>
        </header>

        <section id="{{ $metadata['body_pics'] ?? 'body'}}">
        @hasSection('intro_box')
            <div class="intro_box">
                @yield('intro_box')
            </div>
        @endif

        @hasSection('form')
            <div id="form_1">
                @yield('form')
            </div>
        @endif
        
        @hasSection('nav')
            <div id="nav">
                @yield('nav')
            </div>
        @endif

        @hasSection('content')
            <section class="content">
                @yield('content')
            </section>
        @endif

        @hasSection('content_queweek')
            @yield('content_queweek')
        @endif

        @hasSection('bottom_box')
            @yield('bottom_box')
        @endif
            <br>
            <br>
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