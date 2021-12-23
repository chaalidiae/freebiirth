<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="keywords" content="HTML,CSS,XML,JavaScript">
    <meta name="author" content="Ecology Theme">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FreeBiirth - Education WebSite</title>
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}" type="image/x-icon">
    <!-- Goole Font -->
    <link href="https://fonts.googleapis.com/css?family=Rubik:400,500,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700,900" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/assets/bootstrap.min.css') }}">
    <!-- Font awsome CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/assets/font-awesome.min.css') }}">    
    <link rel="stylesheet" href="{{ asset('assets/css/assets/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/assets/magnific-popup.css') }}">    
    <!-- owl carousel -->
    <link rel="stylesheet" href="{{ asset('assets/css/assets/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/assets/owl.theme.css') }}">     
    <link rel="stylesheet" href="{{ asset('assets/css/assets/animate.css') }}"> 
    <!-- Slick Carousel -->
    <link rel="stylesheet" href="{{ asset('assets/css/assets/slick.css') }}">  
    <link rel="stylesheet" href="{{ asset('assets/css/assets/preloader.css') }}"/>    

    <!-- Revolution Slider -->
    <link rel="stylesheet" href="{{ asset('assets/css/assets/revolution/layers.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/assets/revolution/navigation.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/assets/revolution/settings.css') }}">    
    <!-- Mean Menu-->
    <link rel="stylesheet" href="{{ asset('assets/css/assets/meanmenu.css') }}">
    <!-- main style-->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">    
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/demo.css') }}">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    @livewireStyles
</head>
<body>
<header class="header_four">
<!-- Preloader -->
<div id="preloader">
    <div id="status">&nbsp;</div>
</div>    
    <div class="header_top">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-lg-12">
                    <div class="info_wrapper">
                        <div class="contact_info">                   
        					<ul class="list-unstyled">
                                <li><i class="flaticon-phone-receiver"></i>+000-2356-222</li>
        						<li><i class="flaticon-mail-black-envelope-symbol"></i>contact@yourdomain.com</li>
        					</ul>                    
                        </div>
                        <div class="login_info">
                             <ul class="d-flex">
                                <li class="nav-item"><a href="#" class="nav-link sign-in js-modal-show"><i class="flaticon-user-male-black-shape-with-plus-sign"></i>Sign Up</a></li>
                                <li class="nav-item"><a href="#" class="nav-link join_now js-modal-show"><i class="flaticon-padlock"></i>Lon In</a></li>
                            </ul>
                            <a href="#" title="" class="apply_btn">Apply Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="edu_nav">
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-light bg-faded">
                <a class="navbar-brand" href="index-2.html"><img src="{{ asset('assets/images/logo.png') }}" alt="logo"></a>
                <div class="collapse navbar-collapse main-menu" id="navbarSupportedContent">
                    <ul class="navbar-nav nav lavalamp ml-auto menu">
                        <li class="nav-item"><a href="{{ route('home') }}" class="nav-link active">Home</a>
                            <ul class="navbar-nav nav mx-auto">
                                <li class="nav-item"><a href="index-2.html" class="nav-link">Home Version 01</a></li>
                                <li class="nav-item"><a href="index-3.html" class="nav-link">Home Version 02</a></li>
                                <li class="nav-item"><a href="index-4.html" class="nav-link">Home Version 03</a></li>
                                <li class="nav-item"><a href="index-5.html" class="nav-link">Home Version 04</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a href="{{ route('about') }}" class="nav-link">About</a></li>
                        <li class="nav-item"><a href="{{ route('courses') }}" class="nav-link">Courses</a>
                            <ul class="navbar-nav nav mx-auto">
                                <li class="nav-item"><a href="{{ route('courses') }}" class="nav-link">Courses</a></li>
                                <li class="nav-item"><a href="course-details.html" class="nav-link">Courses Details</a></li>
                            </ul> 
                        </li>
                        <li class="nav-item"><a href="blog.html" class="nav-link">Blog</a>
                            <ul class="navbar-nav nav mx-auto">
                                <li class="nav-item"><a href="blog.html" class="nav-link">Blog List</a></li> 
                                <li class="nav-item"><a href="blog-2.html" class="nav-link">Blog Grid One</a></li> 
                                <li class="nav-item"><a href="blog-3.html" class="nav-link">Blog Grid Two</a></li>
                                <li class="nav-item"><a href="blog-details.html" class="nav-link">Blog Details</a></li>
                            </ul> 
                        </li>
                        <li class="nav-item"><a href="#" class="nav-link">Pages</a>
                            <ul class="navbar-nav nav mx-auto">
                                <li class="nav-item"><a href="#" class="nav-link dropdown_icon">Courses</a>
                                    <ul class="navbar-nav nav mx-auto">
                                        <li class="nav-item"><a href="course.html" class="nav-link">Courses</a></li>
                                        <li class="nav-item"><a href="course-details.html" class="nav-link">Courses Details</a></li>
                                    </ul>    
                                </li>                                 
                                <li class="nav-item"><a href="#" class="nav-link dropdown_icon">Events</a>
                                    <ul class="navbar-nav nav mx-auto">
                                        <li class="nav-item"><a href="event.html" class="nav-link">Event</a></li>
                                        <li class="nav-item"><a href="event-details.html" class="nav-link">Event Details</a></li>
                                    </ul>    
                                </li>                                
                                <li class="nav-item"><a href="#" class="nav-link dropdown_icon">Blog</a>
                                    <ul class="navbar-nav nav mx-auto">
                                        <li class="nav-item"><a href="blog.html" class="nav-link">Blog List</a></li> 
                                        <li class="nav-item"><a href="blog-2.html" class="nav-link">Blog Grid One</a></li> 
                                        <li class="nav-item"><a href="blog-3.html" class="nav-link">Blog Grid Two</a></li>
                                        <li class="nav-item"><a href="blog-details.html" class="nav-link">Blog Details</a></li>
                                    </ul>    
                                </li> 
                                <li class="nav-item"><a href="become-a-teacher.html" class="nav-link">Become A Teacher</a></li>
                                <li class="nav-item"><a href="teacher-profile.html" class="nav-link">Teachers Profile</a></li>
                                <li class="nav-item"><a href="team.html" class="nav-link">Teachers Page</a></li>
                                <li class="nav-item"><a href="forgot-password.html" class="nav-link">Forgot Password</a></li>
                            </ul>                            
                        </li>     
                        <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
                    </ul>
                </div>
                <div class="mr-auto search_area ">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item"><i class="search_btn flaticon-magnifier"></i>
                            <div id="search">
                                <button type="button" class="close">×</button>
                                 <form>
                                     <input type="search" value="" placeholder="Search here...."  required/>
                                 </form>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav><!-- END NAVBAR -->
        </div> 
    </div>
</header> <!--  End header section-->

{{ $slot }}

<footer>
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-3 col-md-3 col-lg-3 p-0 ">
                <div class="shape_wrapper">
                    <img src="{{ asset('assets/images/shapes/bubble_shpe_1.png') }}" alt="" class="shape_t_1"> 
                    <img src="{{ asset('assets/images/shapes/round_shpae_1.png') }}" alt="" class="shape_t_2">
                </div>   
            </div>
            <div class="col-12 col-sm-9 col-md-9 col-lg-9 p-0 become_techer_wrapper">
                <div class="become_a_teacher">
                    <div class="title">
                        <h2>Become A Instructor</h2>
                        <p>Lorem ipsum dolor sit amet mollis felis dapibus arcu donec viverra. Pede phasellus eget. Etiam maecenas vel vici quis dictum rutrum nec nisi et.</p>  
                    </div><!-- ends: .section-header -->
                    <div class="get_s_btn">
                        <a href="#" title="">Get Started Now</a>
                    </div>
                    <img src="{{ asset('assets/images/shapes/bubble_shpe_2.png') }}" alt="" class="shape_t_1"> 
                </div>                                
            </div>
        </div>
        <div class="footer_top">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="footer_single_col footer_intro">
                        <img src="{{ asset('assets/images/logo2.png') }}" alt="" class="f_logo">
                        <p>Ante amet vitae vulputate odio nulla vel pretium pulvinar aenean. Rhoncus eget adipiscing etiam arcu. Ultricies justo ipsum nec amet.</p>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-2">
                    <div class="footer_single_col">
                        <h3>Useful Links</h3>
                        <ul class="location_info quick_inf0">
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Developers</a></li>
                            <li><a href="#">Services</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>                         
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-2">
                    <div class="footer_single_col information">
                        <h3>information</h3>
                        <ul class="quick_inf0">
                            <li><a href="#">Campus Tour</a></li>
                            <li><a href="#">Student Life</a></li>
                            <li><a href="#">Scholarship</a></li>
                            <li><a href="#">Admission</a></li>
                            <li><a href="#">Leadership</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="footer_single_col contact">
                        <h3>Contact Us</h3>
                        <p>Fell free to get in touch us via Phone or send us a message.</p>
                        <div class="contact_info">
                            <span>+000 124 325</span> 
                            <span class="email">info@yourdomain.com</span>
                        </div>
                        <ul class="social_items d-flex list-unstyled">
                            <li><a href="#"><i class="fab fa-facebook-f fb-icon"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter twitt-icon"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin-in link-icon"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram ins-icon"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="round_shape">
        <span class="shape_1"></span> 
        <span class="shape_2"></span> 
        <span class="shape_3"></span> 
        <span class="shape_4"></span> 
        <span class="shape_5"></span> 
        <span class="shape_6"></span>
    </div>
    <img src="{{ asset('assets/images/shapes/footer_bg_shpe_1.png') }}" alt="" class="shapes1_footer">
</footer><!-- End Footer -->

<section id="scroll-top" class="scroll-top">
    <h2 class="disabled">Scroll to top</h2>
    <div class="to-top pos-rtive">
        <a href="#"><i class = "flaticon-right-arrow"></i></a>
    </div>
</section>

    <!-- JavaScript -->
    <script src="{{ asset('assets/js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <!-- Revolution Slider -->
    <script src="{{ asset('assets/js/assets/revolution/jquery.themepunch.revolution.min.js') }}"></script>
    <script src="{{ asset('assets/js/assets/revolution/jquery.themepunch.tools.min.js') }}"></script> 
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>     
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>   
    <script src="{{ asset('assets/js/slick.min.js') }}"></script>   
    <script src="{{ asset('assets/js/jquery.meanmenu.min.js') }}"></script>  
    <!-- Counter Script -->
    <script src="{{ asset('assets/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>    
    <script src="{{ asset('assets/js/wow.min.js') }}"></script> 
    <script src="{{ asset('assets/js/custom.js') }}"></script> 
    <!-- Revolution Extensions -->
    <script src="{{ asset('assets/js/assets/revolution/extensions/revolution.extension.actions.min.js') }}"></script>
    <script src="{{ asset('assets/js/assets/revolution/extensions/revolution.extension.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/assets/revolution/extensions/revolution.extension.kenburn.min.js') }}"></script>
    <script src="{{ asset('assets/js/assets/revolution/extensions/revolution.extension.layeranimation.min.js') }}"></script>
    <script src="{{ asset('assets/js/assets/revolution/extensions/revolution.extension.migration.min.js') }}"></script>
    <script src="{{ asset('assets/js/assets/revolution/extensions/revolution.extension.navigation.min.js') }}"></script>
    <script src="{{ asset('assets/js/assets/revolution/extensions/revolution.extension.parallax.min.js') }}"></script>
    <script src="{{ asset('assets/js/assets/revolution/extensions/revolution.extension.slideanims.min.js') }}"></script>
    <script src="{{ asset('assets/js/assets/revolution/extensions/revolution.extension.video.min.js') }}"></script>
    <script src="{{ asset('assets/js/assets/revolution/revolution.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/demo.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>
    @livewireScripts


    <!-- =========================================================
         STYLE SWITCHER | ONLY FOR DEMO NOT INCLUDED IN MAIN FILES
    ============================================================== -->
    <div class="demo-style-switch" id="switch-style">
        <a id="toggle-switcher" class="switch-button" title="Change Styles"><span class="fa fa-cog fa-spin"></span></a>
        <div class="switched-options">
            <div class="config-title">
                <a class="navbar-brand" href="index-2.html"><img src="{{ asset('assets/images/logo.png') }}" alt="logo"></a>
                <p>Education Template</p>
                
            </div>
            <div class="demos">
                <div><a href="index-2.html" data-toggle="tooltip" data-placement="top" title="Home Style One"><img class="main-image img-fluid" src="{{ asset('demo/index_1.png') }}" alt=""/></a></div>
                <div><a href="index-3.html" data-toggle="tooltip" data-placement="top" title="Home Style Two"><img class="main-image img-fluid" src="{{ asset('demo/index_2.png') }}" alt=""/></a></div>
                <div><a href="index-4.html" data-toggle="tooltip" data-placement="top" title="Home Style Three"><img class="main-image img-fluid" src="{{ asset('demo/index_3.png') }}" alt=""/></a></div>
                <ul class="list-unstyled clearfix">
                    <li><a href="about.html" data-toggle="tooltip" data-placement="top" title="About Page"><img src="{{ asset('demo/about.png') }}" alt="" class="img-fluid"></a></li>
                    <li><a href="blog.html" data-toggle="tooltip" data-placement="top" title="Blog Page"><img src="{{ asset('demo/blog.png') }}" alt="" class="img-fluid"></a></li>
                    <li><a href="blog-details.html" data-toggle="tooltip" data-placement="top" title="Blog Details Page"><img src="{{ asset('demo/blog_details.png') }}" alt="" class="img-fluid"></a></li>
                    <li><a href="event.html" data-toggle="tooltip" data-placement="top" title="Event Page"><img src="{{ asset('demo/event.png') }}" alt="" class="img-fluid"></a></li>
                    <li><a href="event-details.html" data-toggle="tooltip" data-placement="top" title="Event Deiails"><img src="{{ asset('demo/event_details.png') }}" alt="" class="img-fluid"></a></li>
                    <li><a href="teacher-profile.html" data-toggle="tooltip" data-placement="top" title="Teacher Profile"><img src="{{ asset('demo/teacher_pro.png') }}" alt="" class="img-fluid"></a></li>
                    <li><a href="course.html" data-toggle="tooltip" data-placement="top" title="Courses Page"><img src="{{ asset('demo/course.png') }}" alt="" class="img-fluid"></a></li>
                    <li><a href="course-details.html" data-toggle="tooltip" data-placement="top" title="Courses Details"><img src="{{ asset('demo/course_details.png') }}" alt="" class="img-fluid"></a></li>
                    <li><a href="team.html" data-toggle="tooltip" data-placement="top" title="Team Page"><img src="{{ asset('demo/team.png') }}" alt="" class="img-fluid"></a></li>
                    <li><a href="contact.html" data-toggle="tooltip" data-placement="top" title="Contact Page"><img src="{{ asset('demo/contact.png') }}" alt="" class="img-fluid"></a></li>
                </ul>
            </div>
        </div>
    </div>
</body>
</html>
