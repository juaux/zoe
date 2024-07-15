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
    <aside id="side-navigation">
    	<button type="button" class="toggle-nav"><span class="fa fa-bars"></span></button>
            
        <div class="sidebar-inner">
            <!--Logo-->
            <div class="logo"><a href="#"><img src="images/logo.png" alt=""></a></div>
            
            <!--Main Navigation-->
            
        </div>
    </aside>
    <!--Sidebar Nav End-->
    
    
    <!--Bread Crumb-->
    <div class="bread-crumb">
    	<div class="auto-container">
        	Pages  &ensp;<span class="fa fa-angle-right"></span>&ensp; <a href="#" class="ative">Gallery Version One</a>
        </div>
    </div>
    

    <section id="project-version-one">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="gallery-filter">
                        <li data-filter="all">
                            <span>Todos</span>
                        </li>
                        <li data-filter=".child">
                            <span>Cursos</span>
                        </li>
                        <li data-filter=".charity">
                            <span>Mulher</span>
                        </li>
                        <li data-filter=".children">
                            <span>Combate depressão</span>
                        </li>
                        <li data-filter=".volunteering">
                            <span>Autismo</span>
                        </li>
                        
                    </ul>
                </div>
            </div>
           01
<div class="albery-container">
02
 
03
  <div class="albery-wrapper">
04
 
05
    <div class="albery-item">
06
      <img src="img/1.jpg" alt="">
07
    </div>
08
    <div class="albery-item">
09
      <img src="img/2.jpg" alt="">
10
    </div>
11
    <div class="albery-item">
12
      <img src="img/3.jpg" alt="">
13
    </div>
14
    <div class="albery-item">
15
      <img src="img/4.jpg" alt="">
16
    </div>
17
    <div class="albery-item">
18
      <img src="img/5.jpg" alt="">
19
    </div>
20
 
21
  </div>
22
 
23
  <div class="move-right">
24
    <a href="#" id="rightArrow">▶</a>
25
  </div>
26
  <div class="move-left">
27
    <a href="#" id="leftArrow">◀</a>
28
  </div>
29
 
30
</div>
2. Insert a group of small images to the thumbnail carousel.

01
<div class="pagination-container">
02
  <div class="pagination-wrapper">
03
    <div class="pagination-item" data-item="1">
04
      <img src="img/1_thumb.jpg" alt="">
05
    </div>
06
    <div class="pagination-item" data-item="2">
07
      <img src="img/2_thumb.jpg" alt="">
08
    </div>
09
    <div class="pagination-item" data-item="3">
10
      <img src="img/3_thumb.jpg" alt="">
11
    </div>
12
    <div class="pagination-item" data-item="4">
13
      <img src="img/4_thumb.jpg" alt="">
14
    </div>
15
    <div class="pagination-item" data-item="5">
16
      <img src="img/5_thumb.jpg" alt="">
17
    </div>
18
  </div>
19
</div>
3. Import the jQuery Albery plugin's files into the document.

1
<link rel="stylesheet" href="css/albery.css">
2
<script src="https://code.jquery.com/jquery-3.3.1.min.js"
3
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
4
        crossorigin="anonymous"></script>
5
<script src="js/albery.js"></script>
4. Initialize the gallery & carousel by calling the function on the image container.

1
$(".albery-container").albery();
5. Set the width of the images & animation speed in milliseconds.

1
$(".albery-container").albery({
2
  speed: 500,// default: 200
3
  imgWidth: 400,// default: 600
4
});
6. Customize the thumbnail carousel.

1
$(".albery-container").albery({
2
  paginationBorder: 5,
3
  paginationItemWidth: 116
4
});
Changelog:
    </section>
    
    
    <!--Parallax Section-->
      <?php include("parallax.php"); ?>

    
    
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
<script src="js/scrollbar.js"></script>
<script src="js/wow.js"></script>
<script src="js/jquery.mixitup.min.js"></script> <!-- MixIt UP JS -->
<script src="js/jquery.fancybox.pack.js"></script> <!-- FancyBox -->
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