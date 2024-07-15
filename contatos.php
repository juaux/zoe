<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Zoe</title>
<!-- Stylesheets -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/revolution-slider.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<link href="css/responsive.css" rel="stylesheet">
<!--[if lt IE 9]><script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body>
<div class="page-wrapper">
 	
    
    <!-- Main Header -->
    <header class="main-header">
    	<!--Header Top-->
        <div class="header-top">
        	<div class="container">
            	<div class="row clearfix">
                
                	<div class="col-md-6 col-sm-6 col-xs-12 top-left">
                    	<div class="clearfix">
                        	<div class="pull-left phone-num"><span class="icon flaticon-telephone51"></span>Call us : <a href="#">+49 123 456 789</a></div>
                            <div class="pull-left email"><span class="icon flaticon-mail115"></span>Send email : <a href="support@email.de">support@email.de</a></div>
                        </div>
                    </div>
                    
                    <div class="col-md-6 col-sm-6 col-xs-12 top-right">
                        <div class="social-links"><a href="#" class="fa fa-facebook-f"></a>  <a href="#" class="fa fa-instagram"></a> <a href="#" class="fa fa-youtube-play"></a></div>
                    </div>
                    
                </div>
            </div>
        </div>
        
        <!--Header Lower-->
        <!--Header Lower-->
        <?php include("menu.php"); ?>

        <!--Header Lower End-->
        <!--Header Lower End-->
        
    </header>
    <!--End Main Header -->
    
    
    <!--Sidebar Navigation-->
    
    <!--Sidebar Nav End-->
    
    
    <!--Bread Crumb-->
    
    
    <!--Contact Us Section-->
    <div class="sidebar-page">
    	<div class="auto-container">
        	
            <div class="row clearfix">
                
                <div class="col-md-9 col-sm-6 col-xs-12">
                    <section class="contact-section">
                        <div class="sec-title">
                        <h2>Contante <strong>nos</strong></h2>

                        </div>
                            
                        <!--Map Area-->
                        <div class="map-section">
                            <div class="map-container" id="map-location"></div>
                        </div>
                        <br>
                        
                        <div class="form">
                            
                            <form id="contact-form" method="post" action="sendemail.php">
                                <div class="row clearfix">
                                    <div class="form-group col-md-4 col-sm-12 col-xs-12">
                                        <div class="form-group-inner">
                                            <div class="icon-box"><label for="your-name"><span class="icon flaticon-user168"></span></label></div>
                                            <div class="field-outer">
                                                <input type="text" name="username" id="your-name" placeholder="Your Name">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-4 col-sm-12 col-xs-12">
                                        <div class="form-group-inner">
                                            <div class="icon-box"><label for="your-email"><span class="icon flaticon-new100"></span></label></div>
                                            <div class="field-outer">
                                                <input type="email" name="email" id="your-email" placeholder="Email">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-4 col-sm-12 col-xs-12">
                                        <div class="form-group-inner">
                                            <div class="icon-box"><label for="your-subject"><span class="icon flaticon-edition2"></span></label></div>
                                            <div class="field-outer">
                                                <input type="text" name="subject" id="your-subject" placeholder="Subject">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-group-inner">
                                            <textarea name="message" placeholder="Your Message"></textarea>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group col-md-12 col-sm-12 col-xs-12 text-right">
                                        <button class="hvr-bounce-to-right" type="submit" name="submit-form">Enviar Menssagem &ensp; <span class="icon flaticon-envelope32"></span></button>
                                    </div>
                                </div>
                            </form>
                            
                        </div>
                    
                    </section>
                </div>
                
                <!--Sidebar-->	
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <aside class="sidebar">
               

                        
                      
                        
                        <?php include ("fale.php");?> 

                
                    
                </div>  
                <!--Sidebar-->
                
            </div>
        </div>
    </div>
    
    
    <!--Main Footer-->
    <?php include ("footer.php"); ?>

    
</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top"><span class="fa fa-arrow-up"></span></div>


<script src="js/jquery.js"></script> 
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/scrollbar.js"></script>
<script src="js/validate.js"></script>
<script src="//maps.google.com/maps/api/js?sensor=true"></script>
<script src="js/googlemaps.js"></script>
<script src="js/wow.js"></script>
<script src="js/script.js"></script>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var $_Tawk_API={},$_Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='//embed.tawk.to/569cfc09aeafd72017dd6ea9/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www..com/analytics.js','ga');

  ga('create', 'UA-15521914-3', 'auto');
  ga('send', 'pageview');

</script>

</body>
</html>