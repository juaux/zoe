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
        	Cursos  &ensp;<span class="fa fa-angle-right"></span>&ensp; <a href="#" class="ative">Cadastro</a>
        </div>
    </div>
    





    <!--Contact Us Section-->
        <section class="contact-section clearfix">
        <div class="auto-container">

            <div class="col-md-8 col-md-offset-2">
                <div class="sec-title">
                    <h2>Cadastro</h2>
                </div>
                <div class="sec-text"></div>

                <div class="form">

                <?php 
                    include('processa_cadastro.php');
                ?>

                    <form id="contact-form" class="donation-form" method="post">
                        <div class="row clearfix">
                            <div class="form-group col-md-4 col-sm-12 col-xs-12">
                                <label for="yourf-name">Cursos</label>
                                <div class="form-group-inner">
                                    <div class="field-outer">
                                        <select name="curso">
                                            <option value="">Escolha um curso</option>
                                            <option value="Jiu Jitsu">Jiu Jitsu</option>
                                            <option value="Capoeira">Capoeira</option>
                                            <option value="Karatê">Karatê</option>
                                            <option value="Informatica">Informatica</option>
                                            <option value="Culinaria">Culinaria</option>
                                            <option value="Moda">Moda</option>
                                            <option value="Manutençao de micro">Manutençao de micro</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="form-group col-md-6 col-sm-12 col-xs-12">
                                <label for="your-email">Data</label>
                                <div class="form-group-inner">
                                    <div class="field-outer">
                                        <input type="text" placeholder="Data" name="data" />
                                    </div>
                                </div>
                            </div>

                            <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                <label for="yourf-name">Nome Completo</label>
                                <div class="form-group-inner">
                                    <div class="field-outer">
                                        <input type="text" name="nome" id="yourf-name" placeholder="Nome"  />
                                    </div>
                                </div>
                            </div>

                            <div class="form-group col-md-4 col-sm-12 col-xs-12">
                                <label for="yourf-name">Data de Nascimento</label>
                                <div class="form-group-inner">
                                    <div class="field-outer">
                                        <input type="text" name="data_nasc" id="yourf-name" placeholder="Data">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group col-md-2 col-sm-12 col-xs-12">
                                <label for="yourf-name">Idade</label>
                                <div class="form-group-inner">
                                    <div class="field-outer">
                                        <input type="text" name="idade" id="yourf-name" placeholder="Idade">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group col-md-6 col-sm-12 col-xs-12">
                                <label for="your-email">RG</label>
                                <div class="form-group-inner">
                                    <div class="field-outer">
                                        <input type="text" name="rg" placeholder="RG">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group col-md-6 col-sm-12 col-xs-12">
                                <label for="your-email">CPF</label>
                                <div class="form-group-inner">
                                    <div class="field-outer">
                                        <input type="text" name="cpf" placeholder="CPF">
                                    </div>
                                </div>
                            </div>                            

                            <div class="form-group col-md-2 col-sm-12 col-xs-12">
                                <label for="yourf-name">CEP</label>
                                <div class="form-group-inner">
                                    <div class="field-outer">
                                        <input type="text" name="cep" id="yourf-name" placeholder="CEP">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group col-md-6 col-sm-12 col-xs-12">
                                <label for="yourf-name">Endereço</label>
                                <div class="form-group-inner">
                                    <div class="field-outer">
                                        <input type="text" name="endereco" id="yourf-name" placeholder="Endereço">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group col-md-6 col-sm-12 col-xs-12">
                                <label for="yourf-name">Bairro</label>
                                <div class="form-group-inner">
                                    <div class="field-outer">
                                        <input type="text" name="bairro" id="yourf-name" placeholder="Bairro">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group col-md-6 col-sm-12 col-xs-12">
                                <label for="yourf-name">Cidade</label>
                                <div class="form-group-inner">
                                    <div class="field-outer">
                                        <input type="text" name="cidade" id="yourf-name" placeholder="Cidade">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group col-md-6 col-sm-12 col-xs-12">
                                <label for="yourf-name">UF</label>
                                <div class="form-group-inner">
                                    <div class="field-outer">
                                        <input type="text" name="uf" id="yourf-name" placeholder="UF">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                <label for="yourf-name">Telefone</label>
                                <div class="form-group-inner">
                                    <div class="field-outer">
                                        <input type="text" name="telefone" id="yourf-name" placeholder="Telefone">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                <label for="yourf-name">Email</label>
                                <div class="form-group-inner">
                                    <div class="field-outer">
                                        <input type="email" name="email" id="yourf-name" placeholder="Email" required />
                                    </div>
                                </div>
                            </div>

                            <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                <div label for="yourf-name">Pais:
                                </div>

                                <label for="yourf-name">Nome do Pai</label>
                                <div class="form-group-inner">
                                    <div class="field-outer">
                                        <input type="text" name="nome_pai" id="yourf-name" placeholder="Pai">
                                    </div>
                                </div>
                                
                            </div>

                            <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                <label for="yourf-name">Nome da Mãe</label>
                                <div class="form-group-inner">
                                    <div class="field-outer">
                                        <input type="text" name="nome_mae" id="yourf-name" placeholder="Mãe">
                                    </div>
                                </div>
                            </div>
                            
                                
                            <div class="form-group col-md-6 col-sm-12 col-xs-12">
                                <label for="yourf-name">Responsavel</label>
                                <div class="form-group-inner">
                                    <div class="field-outer">
                                        <input type="text" name="responsavel" id="yourf-name" placeholder="Nome do Responsável">
                                    </div>
                                </div>
                            </div>
                                
                            
                            <div class="form-group col-md-6 col-sm-12 col-xs-12">
                                <label for="yourf-name">Telefone do Responsável</label>
                                <div class="form-group-inner">
                                    <div class="field-outer">
                                        <input type="text" name="responsavel_tel" id="yourf-name" placeholder="Telefone do Responsável">
                                    </div>
                                </div>
                            </div>
                                
                            <div class="form-group col-md-6 col-sm-12 col-xs-12">
                                <label for="yourf-name">Escolha uma senha de acesso</label>
                                <div class="form-group-inner">
                                    <div class="field-outer">
                                        <input type="password" name="senha" id="yourf-name" placeholder="Senha">
                                    </div>
                                </div>
                            </div>

                            <input type="file" name="imagem">

                            
                            </div>
                                                        
                            <div class="form-group col-md-12 col-sm-12 col-xs-12 text-right">
                                <button class="hvr-bounce-to-right" type="submit">OK &ensp;</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>



    <!--Fact Counter-->
   





    
    
    
    
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