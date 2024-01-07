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
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <header class="header-section header-normal">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="logo">
                        <a href="./index.html">
                        <img src="img/logo.jpeg" height="75px" alt="">
                        </a>
                    </div>
                    <nav class="nav-menu mobile-menu">
                        <ul>
                            <li><a href="{{url('/index')}}">Home</a></li>
                            <li><a href="{{url('/about')}}">About</a></li>
                            <li><a href="{{url('/services')}}">Services</a></li>
                            <li  class="active"><a href="{{url('/pricing')}}">Pricing</a></li>
                            <li><a href="{{url('/portfolio')}}">Portfolio</a></li>
                            <li><a href="{{url('/contact')}}">Contact</a></li>
                        </ul>
                    </nav>
                    <div class="right-btn"><a href="{{url('/login')}}" class="primary-btn">Sign In</a></div>
                    <div id="mobile-menu-wrap"></div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header End -->

    <!-- Breadcrumb Begin -->
    <div class="breadcrumb-option spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="bo-links">
                        <a href="{{url('/index')}}"><i class="fa fa-home"></i> Home</a>
                        <span>Pricing</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Pricing Section Begin -->
    <section class="pricing-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="section-title pricing-title">
                        <h2>service & optimal price</h2>
                        <p>Service excellence meets optimal pricing, <br>when value-driven solutions and affordability converge, ensuring clients receive top-notch quality without breaking the bank</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="pricing-item">
                        <div class="pi-price">
                            <h2>5000&#8377</h2>
                            <span>1 hour</span>
                        </div>
                        <div class="pi-title">
                            <h3>Basic</h3>
                        </div>
                        <div class="pi-text">
                            <ul>
                                <li>up to 30 photos</li>
                                <li>Preferred for</li>
                                <li>Small parties</li>
                                <li>Family gatherings</li>
                                <li>No Stylist/Print</li>
                            </ul>
                            <a href="{{url('/signin')}}" class="primary-btn">Get appointment</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="pricing-item">
                        <div class="pi-price">
                            <h2>20K &#8377</h2>
                            <span>3 hours</span>
                        </div>
                        <div class="pi-title">
                            <h3>Standard</h3>
                        </div>
                        <div class="pi-text">
                            <ul>
                                <li>upto 200 photos</li>
                                <li>Preferred for</li>
                                <li>Office occations</li>
                                <li>Birthday/Anniversary</li>
                                <li>Extra charges for print</li>
                            </ul>
                            <a href="{{url('/signin')}}" class="primary-btn">Get appointment</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="pricing-item">
                        <div class="pi-price">
                            <h2>50K &#8377</h2>
                            <span>24 hours</span>
                        </div>
                        <div class="pi-title">
                            <h3>Extended</h3>
                        </div>
                        <div class="pi-text">
                            <ul>
                                <li>upto 1000 photos</li>
                                <li>Preferred for</li>
                                <li>One day Shoot/Wedding 1day</li>
                                <li>Canvera album</li>
                                <li>300 retouched photos</li>
                            </ul>
                            <a href="{{url('/signin')}}" class="primary-btn">Get appointment</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="pricing-item">
                        <div class="pi-price">
                            <h2>1Lakh &#8377</h2>
                            <span>50 hours</span>
                        </div>
                        <div class="pi-title">
                            <h3>Ultimate</h3>
                        </div>
                        <div class="pi-text">
                            <ul>
                                <li>upto 1500 photos</li>
                                <li>Preferred for</li>
                                <li>Projects/Outdoor shoots</li>
                                <li>300 retouched photos</li>
                                <li>5mins cinematic videos</li>
                            </ul>
                            <a href="{{url('/signin')}}" class="primary-btn">Get appointment</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Pricing Section End -->

    <!-- Services Option Section Begin -->
    <section class="services-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="section-title">
                        <h2>frequently asked questions</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="so-item">
                        <div class="so-title">
                            <div class="so-number">01</div>
                            <h5>Filming and Editing</h5>
                        </div>
                        <p>Filming captures the raw essence of a moment, while editing transforms it into a captivating story, where creativity meets precision.</p>
                    </div>
                    <div class="so-item">
                        <div class="so-title">
                            <div class="so-number">02</div>
                            <h5>Engagement photography</h5>
                        </div>
                        <p>Photography freezes the love-filled moments before 'I do,' preserving the joy, anticipation, and connection of a couple's journey toward a shared future.</p>
                    </div>
                    <div class="so-item">
                        <div class="so-title">
                            <div class="so-number">03</div>
                            <h5>Comercial photography</h5>
                        </div>
                        <p>Commercial photography is the art of crafting compelling visuals that not only showcase products and brands but also convey their unique stories, leaving a lasting impact on viewers and potential customers.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="so-item">
                        <div class="so-title">
                            <div class="so-number">04</div>
                            <h5>Social media photography</h5>
                        </div>
                        <p>Social media photography is the art of creating visually captivating content that stops the scroll, fuels engagement, and shares stories in the universal language of images, connecting people across the digital world.</p>
                    </div>
                    <div class="so-item">
                        <div class="so-title">
                            <div class="so-number">02</div>
                            <h5>Event Photography</h5>
                        </div>
                        <p>Photography preserves the memories of special occasions, capturing candid moments and genuine emotions, so that every smile, laughter, and heartfelt gesture can be relived for years to come.</p>
                    </div>
                    <div class="so-item">
                        <div class="so-title">
                            <div class="so-number">06</div>
                            <h5>personal photography</h5>
                        </div>
                        <p>Personal photography is an intimate journey through the lens, where each click reveals a piece of one's unique perspective, emotions, and cherished memories, frozen in time for personal reflection and sharing.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services Option Section End -->

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