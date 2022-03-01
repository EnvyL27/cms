<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <title>Chamb - Responsive E-commerce HTML5 Template</title>
      <title>@yield('title')</title> 
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!--enable mobile device-->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!--fontawesome css-->
      <link rel="stylesheet" href="assets/css/font-awesome.min.css">
      <!--bootstrap css-->
      <link rel="stylesheet" href="assets/css/bootstrap.min.css">
      <!--animate css-->
      <link rel="stylesheet" href="assets/css/animate-wow.css">
      <!--main css-->
      <link rel="stylesheet" href="assets/css/style.css">
      <link rel="stylesheet" href="assets/css/bootstrap-select.min.css">
      <link rel="stylesheet" href="assets/css/slick.min.css">
      <link rel="stylesheet" href="assets/css/select2.min.css">
      <!--responsive css-->
      <link rel="stylesheet" href="assets/css/responsive.css">

      <link rel="stylesheet" type="assets/text/css" href="{{ asset('/css/app.css') }}">
   </head>
   <body>
            <header id="header" class="top-head">
                    <!-- Static navbar -->
                    <nav class="navbar navbar-default">
                        <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-4 col-sm-12 left-rs">
                                <div class="navbar-header">
                                    <button type="button" id="top-menu" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false"> 
                                    <span class="sr-only">Toggle navigation</span> 
                                    <span class="icon-bar"></span> 
                                    <span class="icon-bar"></span> 
                                    <span class="icon-bar"></span> 
                                    </button>
                                    <a href="/" class="navbar-brand"><img src="assets/images/logo.png" alt="" /></a>
                                </div>
                                <form class="navbar-form navbar-left web-sh">
                                    <div class="form">
                                    <input type="text" class="form-control" placeholder="Search for products or companies">
                                    </div>
                                </form>
                            </div>
                            <div class="col-md-8 col-sm-12">
                                <div class="right-nav">
                                    <div class="login-sr">
                                    <div class="login-signup">
                                        <ul>
                                            <li><a href="#">Login</a></li>
                                            <li><a class="custom-b" href="#">Sign up</a></li>
                                        </ul>
                                    </div>
                                    </div>
                                    <div class="help-r hidden-xs">
                                    <div class="help-box">
                                        <ul>
                                            <li> <a data-toggle="modal" data-target="#myModal" href="#"> <span>Change</span> <img src="assets/images/flag.png" alt="" /> </a> </li>
                                            <li> <a href="#"><img class="h-i" src="assets/images/help-icon.png" alt="" /> Help </a> </li>
                                        </ul>
                                    </div>
                                    </div>
                                    <div class="nav-b hidden-xs">
                                    <div class="nav-box">
                                        <ul>
                                            <li><a href="/howitworks">How it works</a></li>
                                            <li><a href="/about-us">Chamb for Business</a></li>
                                        </ul>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                        </nav>
      </header>
       @yield('content')
       @yield('footer')
            <footer>
                <div class="main-footer">
                    <div class="container">
                    <div class="row">
                        <div class="footer-top clearfix">
                            <div class="col-md-2 col-sm-6">
                                <h2>Start a free
                                account today
                                </h2>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="form-box">
                                <input type="text" placeholder="Enter yopur e-mail" />
                                <button>Continue</button>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <div class="help-box-f">
                                <h4>Question? Call us on 12 34 56 78 for help</h4>
                                <p>Easy setup - no payment fees - up to 100 products for free</p>
                                </div>
                            </div>
                        </div>
                        <div class="footer-link-box clearfix">
                            <div class="col-md-6 col-sm-6">
                                <div class="left-f-box">
                                <div class="col-sm-4">
                                    <h2>SELL ON chamb</h2>
                                    <ul>
                                        <li><a href="#">Create account</a></li>
                                        <li><a href="/howitworks">How it works suppliers</a></li>
                                        <li><a href="/pricing">Pricing</a></li>
                                        <li><a href="#">FAQ for Suppliers</a></li>
                                    </ul>
                                </div>
                                <div class="col-sm-4">
                                    <h2>BUY ON chamb</h2>
                                    <ul>
                                        <li><a href="#">Create account</a></li>
                                        <li><a href="#">How it works buyers</a></li>
                                        <li><a href="#">Categories</a></li>
                                        <li><a href="#">FAQ for buyers</a></li>
                                    </ul>
                                </div>
                                <div class="col-sm-4">
                                    <h2>COMPANY</h2>
                                    <ul>
                                        <li><a href="/about-us">About chamb</a></li>
                                        <li><a href="#">Contact us</a></li>
                                        <li><a href="#">Press</a></li>
                                        <li><a href="#">Careers</a></li>
                                        <li><a href="#">Terms of use</a></li>
                                    </ul>
                                </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="right-f-box">
                                <h2>INDUSTRIES</h2>
                                <ul class="col-sm-4">
                                    <li><a href="#">Textiles</a></li>
                                    <li><a href="#">Furniture</a></li>
                                    <li><a href="#">Leather</a></li>
                                    <li><a href="#">Agriculture</a></li>
                                    <li><a href="#">Food & drinks</a></li>
                                </ul>
                                <ul class="col-sm-4">
                                    <li><a href="#">Office</a></li>
                                    <li><a href="#">Decoratives</a></li>
                                    <li><a href="#">Electronics</a></li>
                                    <li><a href="#">Machines</a></li>
                                    <li><a href="#">Building</a></li>
                                </ul>
                                <ul class="col-sm-4">
                                    <li><a href="#">Cosmetics</a></li>
                                    <li><a href="#">Health</a></li>
                                    <li><a href="#">Jewelry</a></li>
                                    <li><a href="#">See all here</a></li>
                                </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="copyright">
                    <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <p><img width="90" src="assets/images/logo.png" alt="#" style="margin-top: -5px;" /> All Rights Reserved. Company Name © 2018</p>
                        </div>
                        <div class="col-md-4">
                            <ul class="list-inline socials">
                                <li>
                                <a href="">
                                <i class="fa fa-facebook" aria-hidden="true"></i>
                                </a>
                                </li>
                                <li>
                                <a href="">
                                <i class="fa fa-twitter" aria-hidden="true"></i>
                                </a>
                                </li>
                                <li>
                                <a href="">
                                <i class="fa fa-instagram" aria-hidden="true"></i>
                                </a>
                                </li>
                                <li>
                                <a href="#">
                                <i class="fa fa-linkedin" aria-hidden="true"></i>
                                </a>
                                </li>
                            </ul>
                            <ul class="right-flag">
                                <li><a href="#"><img src="assets/images/flag.png" alt="" /> <span>Change</span></a></li>
                            </ul>
                        </div>
                    </div>
                    </div>
                </div>
                </footer>
            <!--main js--> 
            <script src="assets/js/jquery-1.12.4.min.js"></script>
            <!--bootstrap js--> 
            <script src="assets/js/bootstrap.min.js"></script> 
            <script src="assets/js/bootstrap-select.min.js"></script>
            <script src="assets/js/slick.min.js"></script>
            <script src="assets/js/index.js"></script>
            <script src="assets/js/wow.min.js"></script> 
            <!--custom js--> 
            <script src="assets/js/custom.js"></script>
   </body>
</html>