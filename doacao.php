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
      <?php include("menu.php"); ?>

<!--Header Lower End-->
        
    </header>
    <!--End Main Header -->
    
    
    <!--Sidebar Navigation-->
	
    <!--Sidebar Nav End-->
    
    
    <!--Bread Crumb-->
    <div class="bread-crumb">
    	<div class="auto-container">
        </div>
    </div>
    





    <!--Contact Us Section-->
    <section class="contact-section clearfix">
        <div class="auto-container">
            <div class="col-md-8 col-md-offset-2">
                <div class="sec-title">
                    <h2>Faça uma Doção</h2>
                </div>
                <div class="sec-text">
                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. <br>At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                </div>
                <div class="form">
                    
                    <form id="contact-form" class="donation-form" method="post" action="sendemail.php">
                        <div class="row clearfix">
                            <div class="form-group col-md-4 col-sm-6 col-xs-12">
                                <label for="yourf-name">Primeiro Nome</label>
                                <div class="form-group-inner">
                                    <div class="field-outer">
                                        <input type="text" name="username" id="yourf-name" placeholder="">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group col-md-4 col-sm-6 col-xs-12">
                                <label for="yourf-name">Sobrenome Nome</label>
                                <div class="form-group-inner">                                
                                    <div class="field-outer">
                                        <input type="text" name="username" id="yourl-name" placeholder=" ">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group col-md-4 col-sm-12 col-xs-12">
                                <label for="your-email">Email</label>
                                <div class="form-group-inner">
                                    <div class="field-outer">
                                        <input type="text" name="email" id="your-email" placeholder="Email">
                                    </div>
                                </div>
                            </div>
                            <!--<div class="form-group col-md-6 col-sm-12 col-xs-12">
                                <label for="your-email">Donation Type</label>
                                <div class="form-group-inner radio">
                                    <div class="field-outer ">
                                        <span><input type="radio"> One time</span>
                                        <span><input type="radio"> Weekly</span>
                                        <span><input type="radio"> Monthly</span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group col-md-6 col-sm-12 col-xs-12">
                                <label for="your-email">Donation Amount</label>
                                <div class="form-group-inner radio">
                                    <div class="field-outer ">
                                        <span><input type="radio"> 10 USD</span>
                                        <span><input type="radio"> 50 USD</span>
                                        <span><input type="radio"> 100 USD</span>
                                    </div>
                                </div>
                            </div>-->
                            <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                <label for="your-email">Número do Cartão</label>
                                <div class="form-group-inner">
                                    <div class="field-outer">
                                        <input type="text" placeholder="Your Card Number">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group col-md-6 col-sm-12 col-xs-12">
                                <label for="your-email">Validade</label>
                                <div class="form-group-inner">
                                    <div class="field-outer">
                                        <input type="text" placeholder="">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group col-md-6 col-sm-12 col-xs-12">
                                <label for="your-email">CVC</label>
                                <div class="form-group-inner">
                                    <div class="field-outer">
                                        <input type="text" placeholder="CVC">
                                    </div>
                                </div>
                            </div>
                            <!--<div class="form-group col-md-12 col-sm-12 col-xs-12">
                                <label for="your-email">Eu estou doando para: </label>
                                <div class="form-group-inner">
                                    <div class="field-outer">
                                        <select>
                                            <option value="1">Zoe</option>
                                            
                                        </select>
                                    </div>
                                </div>
                            </div>-->
                            <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group-inner">
                                    <textarea name="message" placeholder=""></textarea>
                                </div>
                            </div>
                            
                            <div class="form-group col-md-12 col-sm-12 col-xs-12 text-right">
                                <button class="hvr-bounce-to-right" type="submit" name="submit-form">Enviar Menssagem &ensp; <span class="icon flaticon-envelope32"></span></button>
                            </div>
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
    </section>



    <!--Fact Counter-->
   

    <?php include ("indicadores.php"); ?>




    
    
    <!--Client Logos-->
    <section class="sponsors-section">
    	<div class="container">
        	<ul class="slider">
            	<li><a href="#"><img src="images/clients/logo-6.png" alt="" title=""></a></li>
                <li><a href="#"><img src="images/clients/logo-7.png" alt="" title=""></a></li>
                <li><a href="#"><img src="images/clients/logo-8.png" alt="" title=""></a></li>
                <li><a href="#"><img src="images/clients/logo-9.png" alt="" title=""></a></li>
                <li><a href="#"><img src="images/clients/logo-10.png" alt="" title=""></a></li>
            </ul>
        </div>
    </section>
    
    
    <!--Main Footer-->
    <?php include ("footer.php"); ?>

    
</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top"><span class="fa fa-arrow-up"></span></div>


<script src="js/jquery.js"></script> 
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.easing.min.js"></script>
<script src="js/jquery-parallax.js"></script>
<script src="js/scrollbar.js"></script>
<script src="js/jquery.countdown.js"></script>
<script src="js/wow.js"></script>
<script src="js/validate.js"></script>
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