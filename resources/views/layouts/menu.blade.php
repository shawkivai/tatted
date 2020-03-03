<!DOCTYPE html>
<html lang="en-US">
    
<!-- Mirrored from demo.webisir.com/the-tattooist/index-one-page by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 03 Mar 2020 16:39:45 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
        <meta charset="utf-8">   
        <title>Tatted - Tattoo Removal Service</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
        <link rel="shortcut icon" href="favicon.ico">
        <link rel="stylesheet" href="css/main.css">
    </head>
    <body class="one-page">

        <div class="wrapper">

            <header id="master-header" class="full-screen overlayed">

                <div class="bg-overlay"></div>
                <div id="media-container"></div>
                <div class="top-header">
                    <div class="container">

                        <!-- ============ Main Navigation - START ============ -->

                        <a id="nav-toggle" href="#"><span></span></a>
                        <nav id="nav-menu">
                            <ul>   
                                <li><a title="Last Works" href="#last-works">Last Works</a></li>
                                <li><a title="Services" href="#services">Services</a></li>
                                <li><a title="Artists" href="#artists">Artists</a></li>
                                <li><a title="Contact Us" href="#contacts">Contact Us</a></li>
                                <li><a title="Appointment" href="#appointment"><i class="fa fa-thumb-tack"></i>Appointment</a></li>
                            </ul>
                        </nav>

                         <!-- ============ Main Navigation - END ============ -->
                        
                    </div>

                </div>

                <div id="brand">

                    <h1 id="logo"><img src="img/logo-big.png" alt="The Tattooist - Tattoo Studio"></h1>        
                    <div class="info">
                        <span>Tattoos</span><img src="img/divider.png" alt=""><span>Piercings</span>              
                    </div>

                </div>

            </header>

        <div id="app">
            <main class="py-4">
                @yield('content')

                @include('layouts.footer')
            </main>
        </div>
</body>
</html>
