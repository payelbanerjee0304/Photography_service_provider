<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="PhotoPhile">
    <meta name="keywords" content="Phozogy, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PhotoPhile</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Quantico:400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <style type="text/css">
        #s1{
            color: red;
            font-family: "Times New Roman", Times, serif;
            font-weight: bold;
            text-shadow: 1px 1px 2px black, 0 0 1em yellow, 0 0 0.2em yellow;
            font-size: 5em;
        }
        #s2{
            color: red;
            font-family: "Times New Roman", Times, serif;
            font-weight: bold;
            text-shadow: 1px 1px 2px black, 0 0 1em yellow, 0 0 0.2em yellow;
            font-size: 3.5em;
        }
        #p1, #p2{
			
			text-padding: 10px 20px;
			color: #F3FDDE;
            text-shadow: 1px 1px 2px black, 0 0 100em #0007F0, 0 0 0.2em #0007F0;
            opacity: 0.9;
            font-family: "Times New Roman", Times, serif;
            font-size: 25px;
		}
        </style>
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <header class="header-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="logo">
                        <a href="">
                            <img src="img/logo.jpeg" height="75px"  alt="">
                        </a>
                    </div>
                    <nav class="nav-menu mobile-menu">
                        <ul>
                            <li class="active"><a href="{{url('/index')}}">Home</a></li>
                            <li><a href="{{url('/about')}}">About</a></li>
                            <li><a href="{{url('/services')}}">Services</a></li>
                            <li><a href="{{url('/pricing')}}">Pricing</a></li>
                            <li><a href="{{url('/portfolio')}}">Portfolio</a></li>
                            <li><a href="{{url('/contact')}}">Contact</a></li>
                            <li></li>
                        </ul>
                    </nav>
                    <div class="right-btn"><a href="{{url('/login')}}" class="primary-btn">Sign In</a></div>
                    <div id="mobile-menu-wrap"></div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header End -->

    <!-- Hero Section Begin -->
    <section class="hero-section">
        <div class="hs-slider owl-carousel">
            <div class="hs-item set-bg" data-setbg="img/hero/123.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="hs-text">
                                <h2 id='s1'><br>PhotoPhile</h2>
                                <p id= "p1">Unlock the Beauty of Every Moment: <br>Welcome to our website, where we transform life's snapshots into timeless masterpieces.</p>
                                <a href="{{url('/signin')}}" class="primary-btn">Contact us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hs-item set-bg" data-setbg="img/hero/12345.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="hs-text">
                                <h2 id='s2'>Turn Clicks Into Stories...</h2>
                                <p id="p2">Capturing Memories, Creating Art: <br>Join us at PhotoPhile <br>for a visual journey that turns ordinary moments into extraordinary memories.</p>
                                <a href="{{url('/signin')}}" class="primary-btn">Contact us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Services Section Begin -->
    <section class="services-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="services-item">
                        <img src="img/services/service-1.jpg" alt="">
                        <h3>Shooting</h3>
                        <p>Shooting in photography and videography is the foundational act of capturing moments or scenes through the lens, where lighting, composition, and timing come together to create the raw material for visual storytelling, setting the stage for the editing and post-production processes that follow. It's the initial step that defines the potential of a project's visual impact.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="services-item">
                        <img src="img/services/service-2.jpg" alt="">
                        <h3>Videos</h3>
                        <p><br>Videography is the art of capturing and preserving moments, stories, and events through moving images, using a combination of technical skills, creativity, and narrative expertise to convey powerful messages and emotions to the audience, making it an essential medium for storytelling and communication in the digital age.<br></p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="services-item">
                        <img src="img/services/service-3.jpg" alt="">
                        <h3>Editing</h3>
                        <p>Editing in photography and videography is the art of enhancing and refining raw footage or images, transforming them into polished, impactful visuals through adjustments in color, composition, effects, and storytelling, bringing the creator's vision to life. It plays a pivotal role in shaping the final narrative, evoking emotions, and delivering a compelling message to the audience.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services Section End -->

    <!-- Categories Section Begin -->
    <section class="categories-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="section-title">
                        <h2>Categories</h2>
                        <p>Categories in photography provide a diverse canvas for artists to capture the world,<br> from the raw beauty of nature in landscape shots to the intricate emotions of human subjects in portrait photography. Each category offers a unique perspective and endless creative possibilities.</p>
                    </div>
                </div>
            </div>
            <div class="categories-slider owl-carousel">
                <div class="cs-item">
                    <div class="cs-pic set-bg" data-setbg="img/categories/cat-1.jpg"></div>
                    <div class="cs-text">
                        <h4>Macro Photography</h4>
                        <span>Tiny details magnified.</span>
                    </div>
                </div>
                <div class="cs-item">
                    <div class="cs-pic set-bg" data-setbg="img/categories/cat-2.jpg"></div>
                    <div class="cs-text">
                        <h4>Landscape Photography</h4>
                        <span>Scenic world exploration.</span>
                    </div>
                </div>
                <div class="cs-item">
                    <div class="cs-pic set-bg" data-setbg="img/categories/cat-3.jpg"></div>
                    <div class="cs-text">
                        <h4>Potrait Photography</h4>
                        <span>Capturing individual essence.</span>
                    </div>
                </div>
                <div class="cs-item">
                    <div class="cs-pic set-bg" data-setbg="img/categories/cat-4.jpg"></div>
                    <div class="cs-text">
                        <h4>Street Photography</h4>
                        <span>Urban life snapshots.</span>
                    </div>
                </div>
                <div class="cs-item">
                    <div class="cs-pic set-bg" data-setbg="img/categories/cat-5.jpg"></div>
                    <div class="cs-text">
                        <h4>Wildlife Photography</h4>
                        <span>Capturing nature's wonders.</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Categories Section End -->

    <!-- Portfolio Section Begin -->
    <section class="portfolio-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Our latest works</h2>
                    </div>
                    <div class="filter-controls">
                        <ul>
                            <li class="active" data-filter="*">All</li>
                            <li data-filter=".fashion">Fashion</li>
                            <li data-filter=".lifestyle">Lifestyle</li>
                            <li data-filter=".natural">Natural</li>
                            <li data-filter=".wedding">Wedding</li>
                            <li data-filter=".videos">Street</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 p-0">
                    <div class="portfolio-filter">
                        <div class="pf-item set-bg fashion" data-setbg="img/portfolio/pf-1.jpg">
                            <a href="img/portfolio/pf-1.jpg" class="pf-icon image-popup"><span class="icon_plus"></span></a>
                            <div class="pf-text">
                                <h4>COLORS SPEAK</h4>
                                <span>Fashion</span>
                            </div>
                        </div>
                        <div class="pf-item large-width large-height set-bg lifestyle"
                            data-setbg="img/portfolio/pf-2.jpg">
                            <a href="img/portfolio/pf-2.jpg" class="pf-icon image-popup"><span class="icon_plus"></span></a>
                            <div class="pf-text">
                                <h4>COLORS SPEAK</h4>
                                <span>Lifestyle</span>
                            </div>
                        </div>
                        <div class="pf-item large-width set-bg natural" data-setbg="img/portfolio/pf-3.jpg">
                            <a href="img/portfolio/pf-3.jpg" class="pf-icon image-popup"><span class="icon_plus"></span></a>
                            <div class="pf-text">
                                <h4>COLORS SPEAK</h4>
                                <span>Natural</span>
                            </div>
                        </div>
                        <div class="pf-item large-height set-bg wedding" data-setbg="img/portfolio/pf-4.jpg">
                            <a href="img/portfolio/pf-4.jpg" class="pf-icon image-popup"><span class="icon_plus"></span></a>
                            <div class="pf-text">
                                <h4>COLORS SPEAK</h4>
                                <span>Wedding</span>
                            </div>
                        </div>
                        <div class="pf-item set-bg lifestyle" data-setbg="img/portfolio/pf-7.jpg">
                            <a href="img/portfolio/pf-7.jpg" class="pf-icon image-popup"><span class="icon_plus"></span></a>
                            <div class="pf-text">
                                <h4>COLORS SPEAK</h4>
                                <span>Lifestyle</span>
                            </div>
                        </div>
                        <div class="pf-item set-bg natural" data-setbg="img/portfolio/pf-8.jpg">
                            <a href="img/portfolio/pf-8.jpg" class="pf-icon image-popup"><span class="icon_plus"></span></a>
                            <div class="pf-text">
                                <h4>COLORS SPEAK</h4>
                                <span>Natural</span>
                            </div>
                        </div>
                        <div class="pf-item set-bg videos" data-setbg="img/portfolio/pf-5.jpg">
                            <a href="img/portfolio/pf-5.jpg" class="pf-icon image-popup"><span class="icon_plus"></span></a>
                            <div class="pf-text">
                                <h4>COLORS SPEAK</h4>
                                <span>Street</span>
                            </div>
                        </div>
                        <div class="pf-item set-bg fashion" data-setbg="img/portfolio/pf-6.jpg">
                            <a href="img/portfolio/pf-6.jpg" class="pf-icon image-popup"><span class="icon_plus"></span></a>
                            <div class="pf-text">
                                <h4>COLORS SPEAK</h4>
                                <span>Fashion</span>
                            </div>
                        </div>
                        <div class="pf-item large-width set-bg videos" data-setbg="img/portfolio/pf-10.jpg">
                            <a href="img/portfolio/pf-10.jpg" class="pf-icon image-popup"><span class="icon_plus"></span></a>
                            <div class="pf-text">
                                <h4>COLORS SPEAK</h4>
                                <span>Street</span>
                            </div>
                        </div>
                        <div class="pf-item set-bg fashion" data-setbg="img/portfolio/pf-11.jpg">
                            <a href="img/portfolio/pf-11.jpg" class="pf-icon image-popup"><span class="icon_plus"></span></a>
                            <div class="pf-text">
                                <h4>COLORS SPEAK</h4>
                                <span>Fashion</span>
                            </div>
                        </div>
                        <div class="pf-item large-width large-height set-bg wedding"
                            data-setbg="img/portfolio/pf-9.jpg">
                            <a href="img/portfolio/pf-9.jpg" class="pf-icon image-popup"><span class="icon_plus"></span></a>
                            <div class="pf-text">
                                <h4>COLORS SPEAK</h4>
                                <span>Wedding</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Portfolio Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer-section">
        <div class="container text-center">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="fs-about">
                        <div class="fa-logo">
                            <a href="#">
                                <img src="img/logo.jpeg" height="100px" alt="">
                            </a>
                        </div>
                        <p>We are here to create the best memories</p>
                        <div class="fa-social">
                            <a  target="_blank" rel="noopener" href="https://www.facebook.com/parlsbanerjee"><i class="fa fa-facebook"></i></a>
                            <a  target="_blank" rel="noopener" href="https://twitter.com/PayelBanerjee__"><i class="fa fa-twitter"></i></a>
                            <a  target="_blank" rel="noopener" href="https://www.youtube.com/channel/UCSy7TiY2JMmQ2aNqywjDSbw"><i class="fa fa-youtube-play"></i></a>
                            <a  target="_blank" rel="noopener" href="https://www.instagram.com/payelbanerjee___"><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="fs-widget">
                        <h5>Instagram</h5>
                        <div class="fw-instagram">
                            <img src="img/instagram/insta-1.jpg" alt="">
                            <img src="img/instagram/insta-2.jpg" alt="">
                            <img src="img/instagram/insta-3.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="fs-widget">
                        <h5>Quick links</h5>
                        <ul>
                            <li><a href="{{url('/index')}}">Home</a></li>
                            <li><a href="{{url('/about')}}">About</a></li>
                            <li><a href="{{url('/contact')}}">Contact</a></li>
                        </ul>
                        <ul>
                            <li><a href="{{url('/pricing')}}">Pricing</a></li>
                            <li><a href="{{url('/portfolio')}}">Portfolio</a></li>
                            <li><a href="{{url('/services')}}">Services</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="fs-widget">
                        <h5>Get in Touch</h5>
                        <p>Mail us to know more about our deliverables:</p>
                        <p><a  target="_blank" rel="noopener" href="https://mail.google.com/mail/u/1/#inbox?compose=GTvVlcSGMTGbhbfcDhwVVrqBBJrlzKFZQlxwwznxBrzQFqKFXSxmwpJkzzBBXMldFXHdZPrnFlkDt">parlsbanerjee@gmail.com</a></p>
                        <p><a  target="_blank" rel="noopener" href="https://mail.google.com/mail/u/0/?tab=rm&ogbl#inbox?compose=GTvVlcSMVxbxZhkSWpPGkSSgBMvnZvqLZmLGHRrSJFQNKGfKJFLGdzqlxFjXQgvldZrxwBVNhgLzk">masudhassan1996@gmail.com</a></p>
                        <p><a  target="_blank" rel="noopener" href="https://mail.google.com/mail/u/0/?tab=rm&ogbl#drafts?compose=DmwnWrRnZVhxWxfDdLjQSSwxBfZXjQQsbLbGMqfJrbNqJCKtKXVrqjWMZSLBRWmdnqBCdbkDptjV">payelbaidya97@gmail.com</a></p>   
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="copyright-text">
                        <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Search model Begin -->
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch">+</div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here.....">
            </form>
        </div>
    </div>
    <!-- Search model end -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/masonry.pkgd.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>