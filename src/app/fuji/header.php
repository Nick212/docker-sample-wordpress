<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">

	<meta name="description" content="Imóveis em Extrema-MG - Casas - Lotes - Chácaras - Sítios -Terrenos. Financiamento próprio. Loteamentos. Aceitamos seu automóvel.">
  <meta name="keywords" content="imobiliária, imobiliaria, venda, compra,imovel, aluguel, extrema, minas gerais, loteamento,loteamentos, casas, chácaras, sítios, lotes, lote, sitios, chacaras,">
  <meta name="author" content="Imobiliária Fuji">
  
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

<!--mudar a cor do navegador -->
<!-- Chrome, Firefox OS and Opera -->
<meta name="theme-color" content="#E53935" />
<!-- Windows Phone -->
<meta name="msapplication-navbutton-color" content="#E53935" />
<!-- iOS Safari -->
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="#E53935">
  
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>

    <title>
      <?php bloginfo('name'); ?> <?php bloginfo('description'); ?>
    </title>
    
    <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" />
  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri(); ?>/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="<?php echo get_template_directory_uri(); ?>/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="<?php echo get_template_directory_uri(); ?>/css/style-mobile.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/vendor/owl-carousel/owl.carousel.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/vendor/owl-carousel/owl.theme.default.css">
  <!-- <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/vendor/owl-carousel/owl.transactions.css"> -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/vendor/owl-carousel/animate.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/vendor/owl-carousel/owl.carousel.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/vendor/old/owl.transitions.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/vendor/owl-carousel/animate.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
  <link type="text/css" rel="stylesheet" media="all" href="<?php echo get_template_directory_uri(); ?>/vendor/jsphotocradle-master/skins/lightglass/skin.css" />

<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">-->
  <?php  wp_head();?>
	
</head>
<body>

    <nav class="" style="background-color:#02233c;    height: 48px;    line-height: 48px;">
        <div class=" nav-wrapper" style="padding: 0px 60px;">
            
            <a id="phone-header" href="#" class="left animated  bounceIn" style="">
            <i class="material-icons small" style="height: 0px;color: white;line-height: 50px;">local_phone</i><span style="margin-top: -5px;     margin-left: 30px;">(35) 3435-1620</span>
            </a>
            <a id="phone-header-2" href="#" class="animated  bounceIn" style="display:none;  margin: 0px 10px 0px 0px;height: 48px;
            line-height: 48px;">
            <!-- <i class="material-icons small" style="height: 0px;color: white;line-height: 50px;">local_phone</i> -->
            <img style="    width: 45px;padding-top: 7px;    width: 30px;"
             src="<?php echo get_template_directory_uri(); ?>/img/whats.png" alt="">
            <span style="display: block; z-index: 99999999; margin-top: -55px;    position: absolute;    margin-left: 33px;    width: 130px;  ">(35) 9 9216-9425</span>
            </a>
            

            <ul id="nav-mobile" class="right hide-on-med-and-down">
				 <li>
                    <a href="/perguntas-frequentes">Perguntas Frequentes</a>
                </li>
                <li>
                    <a href="/empresa">Empresa</a>
                </li>
                <li>
                    <a href="/extrema">Extrema</a>
                </li>
                <li>
                    <a href="/monte-fuji">
                        <!-- <i class="fa fa-user" aria-hidden="true"></i> -->
                        Monte Fuji
                    </a>
                </li>
                <li class="anuncie-agora">
                    <a href="/fale-conosco">
                        <!-- <i class="fa fa-user" aria-hidden="true"></i> -->
                        Anuncie Agora
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    
  <nav id="nav-mobile-2" style="background-color:#E53935 !important; height: 70px; line-height: 70px;">
    <div class="nav-wrapper">
      <a href="/" class="brand-logo">
        <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" class="animated fadeInLeft" alt="" style="width: 100px;">
      </a>
      <a href="#" data-activates="mobile-demo" class="button-collapse right">
          <i style="    line-height: 70px;" class="material-icons">menu</i>
      </a>
      <ul class="right hide-on-med-and-down">
      </ul>
      <ul class="side-nav" id="mobile-demo">
        <li><a href="/">Início</a></li>
        <li><a href="/casas">Casas</a></li>
        <li><a href="/chacaras">Chácaras</a></li>
        <li><a href="/lotes">Lotes</a></li>
        <li><a href="/sitios">Sítios</a></li>
        <li><a href="/terrenos">Terrenos</a></li>
        <li><a href="/loteamentos">Loteamentos</a></li>
        <li><a href="/locacao">Locação</a></li>
        <hr>
        <li><a href="/fale-conosco">Fale Conosco</a></li>
        <hr>
        
		  <li><a href="/perguntas-frequentes">Perguntas Frequentes</a></li>
        <li><a href="/empresa">Empresa</a></li>
        <li><a href="/extrema">Extrema</a></li>
        <li><a href="/monte-fuji">Monte Fuji</a></li>
      </ul>
    </div>
  </nav>

      <section id="parallax-container" style="display: none;">
        <div class="parallax-container" >
            <div class="parallax">
                <img class="animated fadeIn" src="<?php echo get_template_directory_uri(); ?>/img/monte-fuji2.jpg">
            </div>
        </div>
        <div style=" width: 450px;  margin-top: -455px; margin-bottom: 45px;margin-left: 50px;">
                <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" class="animated fadeInLeft" alt="" style="width: 450px;">
        </div>
        <div style="        width: 350px; border-radius: 54px;     margin-top: -355px; margin-bottom: 45px;margin-left: 50px;right: 90px;    position: absolute;    ">
            <a href="https://www.facebook.com/Imobiliaria.Fuji/" target="_blank">
                <img class="animated jackInTheBox" src="<?php echo get_template_directory_uri(); ?>/img/produtos/banner_inferior2.jpg" class="animated bouceIn" alt="" style="width: 350px;border-radius:100px;">
            </a>
                
        </div>
        <div class="animated fadeInRight" style="
        width: 575px;
    /* border-radius: 54px; */
    /* border-radius: 54px 0px 0px 54px; */
    margin-top: -180px;
    margin-bottom: 45px;
    margin-left: 50px;
    /* right: 92px; */
    right: 0px;
    position: absolute;
    /*background-color: #f75451f2;*/
    color: #f8fbf5;
    opacity: 0.9;
    padding-left: 40px;
    /*border-bottom: 4px solid white;*/
    -webkit-text-stroke-width: 2px;
    -webkit-text-stroke-color: red;
    ">
            <h4 style="
            font-size: 60px;
    text-shadow: 7px 2px 11px #000;
    font-weight: 800;
    letter-spacing: -4px;
    margin-bottom :0px;
            ">
                <img style="    width: 45px;
                " src="<?php echo get_template_directory_uri(); ?>/img/whats.png" alt="">
                <span style="font-size: 45px;">(35)</span> 9 9216-9425
            </h4>
            <h4 style="
            font-size: 60px;
    text-shadow: 7px 2px 11px #000;
    font-weight: 800;
    letter-spacing: -4px;
    margin-top :0px;
    margin-left: 0px;
    margin-top: -5px;
            ">
            <!-- <i class="material-icons small" style="height: 0px;color: white;line-height: 50px;">local_phone</i> -->
            Tel: <span style="font-size: 45px;">(35)</span> 3435-1620
            </h4>
        </div>
    </section>



     <section id="menu-desk" class="row" style="margin-bottom: 0px;">
        <nav class="nav-extended red darken-1" style="height: 78px; ">
            <div class="container">
                <div class="nav-content">
                    <ul class="tabs tabs-transparent">
                        <li class="tab">
                            <a class="waves-effect" href="/" >Início</a>
                        </li>
                        <li class="tab">
                            <a class="waves-effect" href="/casas">Casas</a>
                        </li>
                        <li class="tab">
                            <a class="waves-effect" href="/chacaras">Chácaras</a>
                        </li>
                        <li class="tab">
                            <a class="waves-effect" href="/lotes">Lotes</a>
                        </li>
                        <li class="tab">
                            <a class="waves-effect" href="/sitios">Sítios</a>
                        </li>
                        <li class="tab">
                            <a class="waves-effect" href="/terrenos">Terrenos</a>
                        </li>
                        <li class="tab">
                            <a class="waves-effect" href="/loteamentos">Loteamentos</a>
                        </li>
                        <li class="tab">
                            <a class="waves-effect" href="/locacao">Locação</a>
                        </li>
                        <li class="tab">
                            <a class="waves-effect" href="/fale-conosco">Fale Conosco</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        
    </section>
<div class="whatsapp-fixo animated jackInTheBox">
	<a href="https://api.whatsapp.com/send?phone=5535992169425" target="_blank">
	<img src="http://imobiliariafuji.com.br/wp-content/themes/fuji/img/whats.png" width="25" height="ALTURA" alt="" style="position: relative;top: 5px;">
		Fale Conosco pelo WhatsApp
	</a>
</div>