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
            color:red;
            background-color:yellow;
        }
        
    </style>
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
                        <a href="{{url('/index')}}">
                            <img src="img/logo.jpg" height="75px" alt="">
                        </a>
                    </div>
                    <nav class="nav-menu mobile-menu">
                        <ul>
                            <li><a href="{{url('/index')}}">Home</a></li>
                            <li><a href="{{url('/about')}}">About</a></li>
                            <li><a href="{{url('/services')}}">Services</a></li>
                            <li><a href="{{url('/pricing')}}">Pricing</a></li>
                            <li><a href="{{url('/portfolio')}}">Portfolio</a></li>
                            <!-- <li><a href="./blog.html">Blog</a></li>
                            <li><a href="#">Pages</a>
                                <ul class="dropdown">
                                    <li><a href="./gallery.html">Gallery</a></li>
                                    <li><a href="./portfolio-details.html">Portfolio Details</a></li>
                                    <li><a href="./blog-details.html">Blog Details</a></li>
                                </ul>
                            </li> -->
                            <li class="active"><a href="{{url('/contact')}}">Contact</a></li>
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
                        <span>Contact</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Contact Section Begin -->
    <div class="map">
        <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3685.3270552568865!2d88.3428206!3d22.529418099999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a027747f177413d%3A0x9c80c8c46f7c6525!2s14%2C%20Balaram%20Bose%20Ghat%20Rd%2C%20Patuapara%2C%20Bhowanipore%2C%20Kolkata%2C%20West%20Bengal%20700025!5e0!3m2!1sen!2sin!4v1693594920260!5m2!1sen!2sin"
            height="635" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>
    <section class="contact-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="contact-text">
                        <h3>Get in touch</h3>
                        <p>Photography captures moments in time, but it's the emotion behind each frame that truly connects us. Through the lens, we get in touch with the essence of the human experience.</p>
                        <div class="ct-item">
                            <div class="ct-icon">
                                <i class="fa fa-map-marker"></i>
                            </div>
                            <div class="ct-text">
                                <h5>Address</h5>
                                <p> Building More, GP Block, Sector V, Bidhannagar, Kolkata, West Bengal 700091
</p>
                            </div>
                        </div>
                        <div class="ct-item">
                            <div class="ct-icon">
                                <i class="fa fa-mobile"></i>
                            </div>
                            <div class="ct-text">
                                <h5>Phone</h5>
                                <ul>
                                    <li>+91 6289977525</li>
                                    <li>+91 87776 44951</li>
                                    <li>+91 70761 63434</li>
                                </ul>
                            </div>
                        </div>
                        <div class="ct-item">
                            <div class="ct-icon">
                                <i class="fa fa-envelope"></i>
                            </div>
                            <div class="ct-text">
                                <h5>Email</h5>
                                <p>Photography Service Provider@ gmail.com</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="contact-form">
                        <h3>Work with Me!</h3>
                        <form action="{{url('/smallform')}}" method="post">
                            
                            @csrf
                            <input type="text" placeholder="Name" name="name">
                            <input type="text" placeholder="Email" name="email">
                            <input type="text" placeholder="Phone"name="phone">
                            <textarea placeholder="Message" name="message"></textarea>
                            <button type="submit" class="site-btn">Submit</button>
                        </form>

                        @if(session('massage'))
                         <span id="s1" >
                        <strong>{{session('massage')}}</strong>
                        </span>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->

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
                            <a href="https://www.facebook.com/parlsbanerjee"><i class="fa fa-facebook"></i></a>
                            <a href="https://twitter.com/PayelBanerjee__"><i class="fa fa-twitter"></i></a>
                            <a href="https://www.youtube.com/channel/UCSy7TiY2JMmQ2aNqywjDSbw"><i class="fa fa-youtube-play"></i></a>
                            <a href="https://www.instagram.com/payelbanerjee___"><i class="fa fa-instagram"></i></a>
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
                        <p><a href="https://mail.google.com/mail/u/1/#inbox?compose=GTvVlcSGMTGbhbfcDhwVVrqBBJrlzKFZQlxwwznxBrzQFqKFXSxmwpJkzzBBXMldFXHdZPrnFlkDt">parlsbanerjee@gmail.com</a></p>
                        <p><a href="https://mail.google.com/mail/u/0/?tab=rm&ogbl#inbox?compose=GTvVlcSMVxbxZhkSWpPGkSSgBMvnZvqLZmLGHRrSJFQNKGfKJFLGdzqlxFjXQgvldZrxwBVNhgLzk">masudhassan1996@gmail.com</a></p>
                        <p><a href="https://mail.google.com/mail/u/0/?tab=rm&ogbl#drafts?compose=DmwnWrRnZVhxWxfDdLjQSSwxBfZXjQQsbLbGMqfJrbNqJCKtKXVrqjWMZSLBRWmdnqBCdbkDptjV">payelbaidya97@gmail.com</a></p>   
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