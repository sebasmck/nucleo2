<!-- //footer -->
  
    <!-- js --> 
    <script src="{{asset('js/jquery-2.2.3.min.js')}}"></script> 
    <script src="{{asset('js/SmoothScroll.min.js')}}"></script>
    <!-- //js --> 
    <!-- owl carousel -->
    <script src="{{asset('js/owl.carousel.js')}}"></script>
    <script>
        $(document).ready(function () {
            $("#owl-demo").owlCarousel({

                autoPlay: 3000, //Set AutoPlay to 3 seconds
                autoPlay: true,
                items: 3,
                itemsDesktop: [991, 2],
                itemsDesktopSmall: [414, 4]

            });
        }); 
    </script>
    <!-- //owl carousel -->
    <!-- start-smooth-scrolling -->
    <script type="text/javascript" src="{{asset('js/move-top.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/easing.js')}}"></script> 
    <script type="text/javascript">
            jQuery(document).ready(function($) {
                $(".scroll").click(function(event){     
                    event.preventDefault();
            
            $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
                });
            });
    </script>
    <!-- //end-smooth-scrolling --> 
    <!-- smooth-scrolling-of-move-up -->
    <script type="text/javascript">
        $(document).ready(function() {
            /*
            var defaults = {
                containerID: 'toTop', // fading element id
                containerHoverID: 'toTopHover', // fading element hover id
                scrollSpeed: 1200,
                easingType: 'linear' 
            };
            */
            
            $().UItoTop({ easingType: 'easeOutQuart' });
            
        });
    </script>
    <!-- //smooth-scrolling-of-move-up -->  
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="{{asset('js/bootstrap.js')}}"></script>