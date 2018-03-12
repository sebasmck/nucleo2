@extends('partials.layout')

<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>WorldCup Statistics</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    </head>

    <body>
        

    <body> 
    <!-- banner -->
    <div class="w3ls-banner">
        <div class="w3lsbanner-info">
            <!-- header -->
            <div class="header">
                <div class="container">  
                    <div class="header-mdl agileits-logo"><!-- header-two --> 
                        <h1><a href="index.html">The winner Team</a></h1> 
                    </div>
                    <div class="header-nav"><!-- header-three -->   
                        <nav class="navbar navbar-default">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button> 
                            </div>
                            <!-- top-nav -->
                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                <ul class="nav navbar-nav cl-effect-16">
                                    <li><a href="index.html" class="active" data-hover="Home">Home</a></li>
                                    <li><a href="{{ route('login') }}" data-hover="About">Ingresa</a></li> 
                                    <li><a href="contact.html" data-hover="Contact">Contactanos</a></li>
                                </ul>  
                                <div class="clearfix"> </div>   
                            </div>
                        </nav>    
                    </div>  
                </div>  
            </div>  
            <!-- //header --> 
            <!-- banner-text -->
            <div class="banner-text agileinfo"> 
                <div class="container">
                    <div class="agileitsbnr-textinfo">  
                        <h2></h2>
                    
                    </div>
                    <!-- arrow bounce --> 
                    
                    <!-- //arrow bounce --> 
                </div>
            </div>
            <!-- //banner-text -->  
        </div>  
    </div>  
    <!-- //banner -->
<!-- welcome -->
    <div class="about-3">
            <div class="wthree_head_section">
                <h3 class="w3l_header">Bienvenido al Club!</h3>
                <p>Mira las estadisticas y enterate de quien sera el siguiente campeon del mundo!</p>
            </div>
        <div class="container">
            <div class="d-flex">
                
                <div class="about1"> 
                    <h4>Crea tu propia cuenta, unete al club y enterate de las ultimas noticias.</h4>

                    <p class="details">Con tu membresia recibe:</p>
                    <ul class="about-list">
                        <li><i class="fa fa-arrow-right" aria-hidden="true"></i>Soporte tecnico las 24 horas</li>
                        <li><i class="fa fa-arrow-right" aria-hidden="true"></i>Acceso a contenido premium</li>
                        <li><i class="fa fa-arrow-right" aria-hidden="true"></i>Estadisticas basadas en marcadores de los ultimos años</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- //welcome -->  
<!-- feedback -->
    <div class="feedback section-w3ls about-w3ls">
        <div class="feedback-agileinfo">
            <div class="container">
            <div class="wthree_head_section">
                <h3 class="w3l_header ggg">Testimonios</h3>
                <p class="hhh">Algunos de nuestros miembros te saludan!</p>
            </div>
                <div class="agileits-feedback-grids">
                    <div id="owl-demo" class="owl-carousel owl-theme">
                        <div class="item">
                            <div class="feedback-info">
                                <div class="feedback-top">
                                    <p> Excelente sistema, me ha ayudado con los ultimos mundiales!</p>
                                </div>
                                <div class="feedback-grids">
                                    <div class="feedback-img">
                                        <img src="images/t1.jpg" alt="" />
                                    </div>
                                    <div class="feedback-img-info">
                                        <h5>Mary Jane</h5>
                                        <p>Junio 28</p>
                                    </div>
                                    <div class="clearfix"> </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="feedback-info">
                                <div class="feedback-top">
                                    <p> Estadisticas muy acertadas, felicitaciones! </p>
                                </div>
                                <div class="feedback-grids">
                                    <div class="feedback-img">
                                        <img src="images/t2.jpg" alt="" />
                                    </div>
                                    <div class="feedback-img-info">
                                        <h5>Peter</h5>
                                        <p>Agosto 20</p>
                                    </div>
                                    <div class="clearfix"> </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="feedback-info">
                                <div class="feedback-top">
                                    <p> Como es posible ??? gran trabajo! </p>
                                </div>
                                <div class="feedback-grids">
                                    <div class="feedback-img">
                                        <img src="images/t3.jpg" alt="" />
                                    </div>
                                    <div class="feedback-img-info">
                                        <h5>Steven</h5>
                                        <p>Enero 10</p>
                                    </div>
                                    <div class="clearfix"> </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="feedback-info">
                                <div class="feedback-top">
                                    <p> He ganado miles de dolares, gracias equipo!! </p>
                                </div>
                                <div class="feedback-grids">
                                    <div class="feedback-img">
                                        <img src="images/t4.jpg" alt="" />
                                    </div>
                                    <div class="feedback-img-info">
                                        <h5>Mary Jane</h5>
                                        <p>Febrero 20</p>
                                    </div>
                                    <div class="clearfix"> </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="feedback-info">
                                <div class="feedback-top">
                                    <p> El soporte es increible, servicio 24/7 </p>
                                </div>
                                <div class="feedback-grids">
                                    <div class="feedback-img">
                                        <img src="images/t1.jpg" alt="" />
                                    </div>
                                    <div class="feedback-img-info">
                                        <h5>Guptill</h5>
                                        <p>Junio 10</p>
                                    </div>
                                    <div class="clearfix"> </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="feedback-info">
                                <div class="feedback-top">
                                    <p> Un sistema Facil de usar, amigable con todos ! </p>
                                </div>
                                <div class="feedback-grids">
                                    <div class="feedback-img">
                                        <img src="images/t2.jpg" alt="" />
                                    </div>
                                    <div class="feedback-img-info">
                                        <h5> Wilson</h5>
                                        <p>Diciembre 2</p>
                                    </div>
                                    <div class="clearfix"> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- //feedback -->

<!-- pricing -->
    <div class="w3ls-section wthree-pricing">   
        <div class="container">
            <div class="wthree_head_section">
                <h3 class="w3l_header">Registrate!</h3>
                <p>Bienvenido al club, unete para recibir toda la informacion del mundial 2018!</p>
            </div>
            <div class="pricing-grids-info">
                                <div class="pricing-grid grid-three" style="margin-left: 25%;">
                                    <div class="w3ls-top">
                                        <h3>Amateur</h3> 
                                    </div>
                                    <div class="w3ls-bottom">
                                        <ul class="count">
                                            <li>Disfruta de las estadisticas y usala a tu favor!</li>
                                        </ul>
                                        <h4> 50<span class="sup">$</span> </h4>
                                        <div class="more">
                                            <a href="{{ route('register') }}">Join Now</a>         
                                        </div>
                                    </div>
                                </div>

                                <div class="zb pricing-grid grid-four">
                                    <div class="w3ls-top">
                                        <h3>Pro!</h3> 
                                    </div>
                                    <div class="w3ls-bottom">
                                        <ul class="count">
                                            <li>Contenido premium, listo para ti!</li>
                                        </ul>
                                        <h4> 99.99<span class="sup">$</span> </h4>
                                        <div class="more">
                                            <a href="{{ route('register') }}">Join Now</a>             
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix"> </div> 
                <!--End-slider-script-->
            </div>
        </div>  
    </div>  
    <!--//pricing-->    
        <!-- footer -->
    <div class="footer">
    <div class="container">
        <div class="f-bg-w3l">
        <div class="col-md-4 w3layouts_footer_grid">
                    <h2>Contactanos,     <span>Es gratis!</span></h2>
                        <ul class="con_inner_text">
                            <li><span class="fa fa-map-marker" aria-hidden="true"></span> Universidad el Bosque <label> Bogota</label></li>
                            <li><span class="fa fa-envelope-o" aria-hidden="true"></span> <a href="mailto:info@example.com">sfarias@unbosque.edu.co</a></li>+1-929-625-4005</li>
                        </ul>
                        <br>
                    <ul class="social_agileinfo">
                        <li><a href="#" class="w3_facebook"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#" class="w3_twitter"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#" class="w3_instagram"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="#" class="w3_google"><i class="fa fa-google-plus"></i></a></li>
                    </ul>
                </div>

                <div class="col-md-4 w3layouts_footer_grid">
                    <h2>Subscribe <span>Newsletter</span></h2>
                    <p>By subscribing to our mailing list you will always get latest news from us.</p>
                    <form action="#" method="post">
                        <input type="email" name="Email" placeholder="Enter your email..." required="">
                        <button class="btn1"><i class="fa fa-envelope-o" aria-hidden="true"></i></button>
                        <div class="clearfix"> </div>
                    </form>
                </div>
                <div class="col-md-4 w3layouts_footer_grid">
                    <h3>Latest <span>Events</span></h3>
                      <ul class="con_inner_text midimg">
                        <li><a href="#"><img src="images/g5.jpg" alt="" class="img-responsive" /></a></li>
                        <li><a href="#"><img src="images/g6.jpg" alt="" class="img-responsive" /></a></li>
                        <li><a href="#"><img src="images/g7.jpg" alt="" class="img-responsive" /></a></li>
                        <li><a href="#"><img src="images/g8.jpg" alt="" class="img-responsive" /></a></li>
                        <li><a href="#"><img src="images/g9.jpg" alt="" class="img-responsive" /></a></li>
                        <li><a href="#"><img src="images/g10.jpg" alt="" class="img-responsive" /></a></li>
                         <li><a href="#"><img src="images/g12.jpg" alt="" class="img-responsive" /></a></li>
                        <li><a href="#"><img src="images/g11.jpg" alt="" class="img-responsive" /></a></li>
                     </ul>
                    
                </div>
                <div class="clearfix"> </div>
            </div>
            </div>
    </div>
    
</body>




    </body>
</html>
