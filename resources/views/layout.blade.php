<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- LINKS -->
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-solid-rounded/css/uicons-solid-rounded.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-brands/css/uicons-brands.css'>
    <link rel="stylesheet" href="/css/website.css">

    <!-- SCRIPTS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.2/Observer.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.2/ScrollToPlugin.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.2/ScrollTrigger.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.2/TextPlugin.min.js"></script>
    <script src="/js/website.js"></script>

    <title>{{ $page_title }}</title>
</head>
<body>

    <!-- OVERLAY MENU START -->

    <div class="overlay_menu">
        <menu>
            <ul class="menu_overlay grid_wrapper">
                <li>
                    @if ($page_name === "home")
                        <a href="/" class="links {!! $home = "active" !!}">home</a>
                    @else
                        <a href="/" class="links">home</a>
                    @endif
                </li>
                <li>
                    @if ($page_name === "about")
                        <a href="/about-us" class="links {!! $about = "active" !!}">about us</a>
                    @else
                        <a href="/about-us" class="links">about us</a>
                    @endif
                </li>
                <li>
                    <a href="/#services" class="links">services</a>
                </li>
                <li>
                    <a href="/#how_it_works" class="links">how it works</a>
                </li>
                <li>
                    <a href="/#benefits" class="links">benefits</a>
                </li>
                <li>
                    @if ($page_name === "contact")
                        <a href="/contact-us" class="links {!! $contact = "active" !!}">let's talk</a>
                    @else
                        <a href="/contact-us" class="links">let's talk</a>
                    @endif
                </li>
            </ul>
        </menu>
    </div>

    <!-- OVERLAY MENU END -->
    
    <!-- HEADER SECTION START -->

    <header>
        <div class="container">
            <div class="flex_wrapper header_wrapper">
                <div class="logo_wrapper">
                    <img class="logo" src="/imgs/Fuliver-Logo.png" alt="Fuliver Logo">
                </div>
                <menu>
                    <ul class="flex_wrapper menu_links">
                        <li>
                            @if ($page_name === "home")
                                <a href="/" class="links {!! $home = "active" !!}">home</a>
                            @else
                                <a href="/" class="links">home</a>
                            @endif
                        </li>
                        <li>
                            @if ($page_name === "about")
                                <a href="/about-us" class="links {!! $about = "active" !!}">about us</a>
                            @else
                                <a href="/about-us" class="links">about us</a>
                            @endif
                        </li>
                        <li>
                            <a href="/#services" class="links">services</a>
                        </li>
                        <li>
                            <a href="/#how_it_works" class="links">how it works</a>
                        </li>
                        <li>
                            <a href="/#benefits" class="links">benefits</a>
                        </li>
                    </ul>
                </menu>
                <button class="contact_us">let's talk</button>
                <div class="flex_wrapper signing_links">
                    <a href="">sign in</a>
                    <p>|</p>
                    <a href="">sign up</a>
                </div>
                <div class="burger_menu">
                    <svg height="60" width="60">
                        <linearGradient id="linearColors">
                            <stop offset="0%" stop-color="#046DFB"></stop>
                            <stop offset="100" stop-color="#D9092C"></stop>
                        </linearGradient>
                        <circle cx="30" cy="30" r="27" stroke="url(#linearColors)" transform="rotate(-90 30 30)" stroke-dasharray="169" stroke-dashoffset="169" stroke-width="3" fill="transparent" />
                    </svg>
                    <button class="menu_button">
                        <div class="bar"></div>
                        <div class="bar"></div>
                        <div class="bar"></div>
                    </button>
                </div>
            </div>
        </div>
        <div class="scroll_progress"></div>
    </header>

    <!-- HEADER SECTION END -->

    @yield('page')

    <!-- FOOTER SECTION START -->

    <footer>
        <div class="container">
            <div class="grid_wrapper footer_wrapper">
                <div class="grid_wrapper fuliver_recap">
                    <img src="/imgs/Fuliver-Icon-White.png" alt="">
                    <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt</p>
                </div>
                <div class="quick_links grid_wrapper footer_links">
                    <h4>Quick Links</h4>
                    <ul class="grid_wrapper">
                        <li>
                            <a href="">about us</a>
                        </li>
                        <li>
                            <a href="">services</a>
                        </li>
                        <li>
                            <a href="">how it works</a>
                        </li>
                        <li>
                            <a href="">benefits</a>
                        </li>
                    </ul>
                </div>
                <div class="help_center grid_wrapper footer_links">
                    <h4>help center</h4>
                    <ul class="grid_wrapper">
                        <li>
                            <a href="">FAQ</a>
                        </li>
                        <li>
                            <a href="">support center</a>
                        </li>
                        <li>
                            <a href="">contact us</a>
                        </li>
                    </ul>
                </div>
                <div class="legal grid_wrapper footer_links">
                    <h4>legal</h4>
                    <ul class="grid_wrapper">
                        <li>
                            <a href="">privacy</a>
                        </li>
                        <li>
                            <a href="">terms</a>
                        </li>
                    </ul>
                </div>
                <div class="social_media grid_wrapper footer_links">
                    <h4>social media</h4>
                    <ul class="flex_wrapper">
                        <a href="">
                            <li class="flex_wrapper"><i class="fi fi-brands-facebook"></i></li>
                        </a>
                        <a href="">
                            <li class="flex_wrapper"><i class="fi fi-brands-twitter"></i></li>
                        </a>
                        <a href="">
                            <li class="flex_wrapper"><i class="fi fi-brands-linkedin"></i></li>
                        </a>
                        <a href="">
                            <li class="flex_wrapper"><i class="fi fi-brands-youtube"></i></li>
                        </a>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <!-- FOOTER SECTION END -->

    <!-- FLASH MESSAGE START -->

    @if (Session::has('flash_message')) 

        <div id="flash_message" class="flex_wrapper">
            <div class="grid_wrapper message_container">
                <div class="grid_wrapper message_wrapper">
                    <div class="grid_wrapper message_title">
                        <script src="https://cdn.lordicon.com/xdjxvujz.js"></script>
                        <lord-icon
                            src="https://cdn.lordicon.com/lupuorrc.json"
                            trigger="loop"
                            colors="primary:#046dfb,secondary:#d9092c"
                            style="width:150px;height:150px">
                        </lord-icon>
                    </div>
                    <div class="grid_wrapper message_body">
                        <p class="">Thank you dear <span class="message_from">{{ session('flash_message') }}</span> for contacting us!</p>
                        <p>Your message has been successfully recieved, we will reply to your message <b>ASAP</b>! Meanwhile, feel free to explore our website and we will always be available to support you.</p>
                    </div>
                    <div class="grid_wrapper message_footer">
                        <button id="close_message">Close Message</button>
                    </div>
                </div>
            </div>
        </div>
        
    @endif

    <!-- FLASH MESSAGE END -->

</body>
</html>