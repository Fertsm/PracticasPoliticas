<?php
include 'assets/js/funcionesg.php'
?>
<!doctype html>
<html class="no-js" lang="zxx">
<head>
<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>Nuevas Tecnologías Aplicadas a IoT </title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="manifest" href="site.webmanifest">
<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

<!-- CSS here -->
<link rel="stylesheet" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/css/owl.carousel.min.css">
<link rel="stylesheet" href="assets/css/ticker-style.css">
<link rel="stylesheet" href="assets/css/flaticon.css">
<link rel="stylesheet" href="assets/css/slicknav.css">
<link rel="stylesheet" href="assets/css/animate.min.css">
<link rel="stylesheet" href="assets/css/magnific-popup.css">
<link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
<link rel="stylesheet" href="assets/css/themify-icons.css">
<link rel="stylesheet" href="assets/css/slick.css">
<link rel="stylesheet" href="assets/css/nice-select.css">
<link rel="stylesheet" href="assets/css/style.css">
<style>
/*** MAIN MENU - ESSENTIAL STYLES ***/
.menu-toggle{display:none;}
#menu-main-navigation{display:block;}

.srt-menu, .srt-menu * {
    margin:         0;
    padding:        0;
    list-style:     none;
}
.srt-menu ul {
    position:       absolute;
    display:none;
    width:          12em; /* left offset of submenus need to match (see below) */
}
.srt-menu ul li {
    width:          100%;
}
.srt-menu li:hover {
    visibility:     inherit; /* fixes IE7 'sticky bug' */
}
.srt-menu li {
    float:          left;
    position:       relative;
    margin-left:1px;
}
.srt-menu li li {
    margin-left:0px;
}
.srt-menu a {
    display:        block;
    position:       relative;
}
.srt-menu li:hover ul,
.srt-menu li.sfHover ul {
    display:block;
    left:           0;
    top:            45px; /* match top ul list item height */
    z-index:        99;
    -webkit-box-shadow:  2px 3px 2px 0px rgba(00, 00, 00, .3);
    box-shadow:  2px 3px 2px 0px rgba(00, 00, 00, .3);
}
ul.srt-menu li:hover li ul,
ul.srt-menu li.sfHover li ul {
    top:            -999em;
}
ul.srt-menu li li:hover ul,
ul.srt-menu li li.sfHover ul {
    left:           12em; /* match ul width */
    top:            0;
}
ul.srt-menu li li:hover li ul,
ul.srt-menu li li.sfHover li ul {
    top:            -999em;
}
ul.srt-menu li li li:hover ul,
ul.srt-menu li li li.sfHover ul {
    left:           12em; /* match ul width */
    top:            0;
}

/*** DEMO1 SKIN ***/
#topnav, .srt-menu {
float:right;
margin: .35em 0 0 0;
}
.srt-menu a {
    text-decoration:none;
}
.srt-menu li a {
    background:#ff2143;
    margin:0; 
    padding:10px 20px;
    height:45px;
}
.srt-menu a, .srt-menu a:visited  { /* visited pseudo selector so IE6 applies text colour*/
    color:          #000;    
}
.srt-menu li li a {
    border-top:     1px solid rgba(255,0,0);
        background:     #ff2143; /*fallback for old IE*/
        background:#ff2143;
        color:  #000;
        padding-left:0px;
        height:auto;
    }
.srt-menu li li a:visited{color:#000;}
.srt-menu li li li a,
.srt-menu li.current * li a{
    padding-left:-10px;
    background:#ff2143;
    color: #fff;
}

.srt-menu li:hover > a,
.srt-menu li.current a{ 
    color:#fff;
    background:#ff2143;
}
.srt-menu li li:hover > a{
    color:#fff;
    background:#ff2143;
}    
</style> 

<style type="text/css">

.input-error{
    margin-bottom: 0;
    display: none;
}

.input-error-activo{
    display: block;
    color: red;
}
.check{
    display: inline-block;
}
.mensaje{
    height: 45px;
    line-height: 45px;
    background-color: red;
    padding: 0 15px;
    border-radius: 5px;
    color: black;
    display: none;

}

.mensaje-activo{
 display: block;
}

.mensaje-exito{
    height: 45px;
    line-height: 45px;
    background-color: green;
    padding: 0 15px;
    border-radius: 5px;
    color: black;
    display: none;

}

.mensaje-exito-activo{
    display: block;
}

#message{
width: 100%;
padding: 10px;
border: 1px solid;
height: 200px;
}
.estilo1 {
    font-size: 20px;
    border-bottom: 1px solid #FA7;
    color: purple;
}
.estilo2 {
    font-size: 14px;
    border-top: 2px solid #4C9;
    color: magenta;
}

</style>
</head>

<body>
<!-- Preloader Start -->
<div id="preloader-active">
<div class="preloader d-flex align-items-center justify-content-center">
<div class="preloader-inner position-relative">
<div class="preloader-circle"></div>
<div class="preloader-img pere-text">
<img src="assets/img/logo/logo1.png" alt="">
</div>
</div>
</div>
</div>
<!-- Preloader Start -->
<header>
<!-- Header Start -->
<div class="header-area">
<div class="main-header ">
<div class="header-top black-bg d-none d-sm-block">
<div class="container">
<div class="col-xl-12">
<div class="row d-flex justify-content-between align-items-center">
<div class="header-info-left">
<ul>     
<li class="title"><span class="flaticon-energy"></span> IoT</li>
<li>Nuevas tecnologías aplicadas a IoT</li>
</ul>
</div>
<div class="header-info-right">
<ul class="header-date">
<li><span class="flaticon-calendar"></span> +52 447 151 36 39</li>
</ul>
</div>
</div>
</div>
</div>
</div>
<div class="header-mid white-bg">
<div class="container">
<div class="row d-flex align-items-center">
<!-- Logo -->
<div class="col-xl-3 col-lg-3 col-md-3 d-none d-md-block">
<div class="logo">
<a href="index.html"><img src="assets/img/logo/logo1.png" alt=""></a>
</div>
</div>
<div class="col-xl-9 col-lg-9 col-md-9" >
<!-- BUSQUEDAS PROGRAMABLES  -->
<div class="gcse-search"></div>

</div>
</div>
</div>
</div>
<div class="header-bottom header-sticky">
<div class="container">
<div class="row align-items-center">
<div class="col-xl-8 col-lg-8 col-md-12 header-flex">
<!-- sticky -->
<div class="sticky-logo">
<a href="index.html"><img src="assets/img/logo/logo1.png" alt=""></a>
</div>
<!-- Main-menu -->
<div class="main-menu d-none d-md-block">
<nav id="topnav" role="navigation">  
             <div class="menu-toggle">Menu</div>             
             <ul class="srt-menu" id="menu-main-navigation">
              <li class="current"><a href="index.html">Inicio</a></li>
              <li><a href="#">Tecnologías</a>
                <ul>
                  <li><a href="conoce_iot.html">Conoce IoT</a></li>
                  <li><a href="tecnologías_iot.html">Nuevas tecnologías IoT</a></li>
                  <li><a href="ofrece_iot.php">¿Qué nos ofrece?</a></li>
                  <li><a href="proporciona_iot.html">IoT en mi empresa </a></li>
                  <li><a href="comoacedo.php">¿Cómo accedo a IoT?</a></li>
               </ul>
            </li>
            <li><a href="#">¿Donde encuentro IoT?</a>
             <ul>
               <li><a href="empresas.html">Empresas</a></li>
               <li><a href="donde_encuentro_iot.php">Empresas más poderosas</a></li>
            </ul>
         </li>
         <li><a href="#">áreas</a>
          <ul>
            <li><a href="#">Agricultura</a>
              <ul>
                <li><a href="agricultura.html">IoT en Agricultura</a></li>
                <li><a href="soluciones_agricultura.html">Soluciones IoT para Agricultura</a></li>
             </ul>
          </li>

          <li><a href="#">Hogar</a>
           <ul>
             <li><a href="hogar.html">IoT en el Hogar</a></li>
             <li><a href="control_hogar.html">Elementos IoT en el Hogar</a></li>

          </ul>
       </li>


       <li><a href="#">Seguridad</a>
          <ul>
            <li><a href="seguridad.html">En el hogar</a></li>
            <li><a href="aparatos_seguridad.php">Aparatos de seguridad IoT</a></li>
         </ul>
      </li>
      <li><a href="#">Salud</a>
       <ul>
         <li><a href="salud.html">IoT en la salud</a></li>
         <li><a href="pastillas_inteligentes.html">Pastillas y aparatos </a></li>

      </ul>
   </li> 
   <li><a href="#">Educación</a>
    <ul>
      <li><a href="educacion.html">IoT en la educación</a></li>
      <li><a href="articuloedu.php">Potencial de los dispocitivos</a></li>
      <li><a href="educacionsuperior.html"> IoT en educación superior</a></li>

   </ul>
</li> 
<li><a href="logistica_transporte.php">Transporte y Logistica </a>
</li>
<li><a href="medioambiente_iot.php">IoT y el Medioambiente  </a>
</li>
</ul>
<li><a href="contact.php">Contacto</a></li>


</ul>
</nav>
</div>
</div>             
<div class="col-xl-4 col-lg-4 col-md-4">
<div class="header-right f-right d-none d-lg-block">
<!-- Heder social -->
                                <ul class="header-social">    
                                    <li><a href="/redes.html"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="/redes.html"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="/redes.html"><i class="fab fa-instagram"></i></a></li>
                                    <li> <a href="/redes.html"><i class="fab fa-youtube"></i></a></li>
                                    <li> <a href="/admin/index.php"><img src="/13.png" width="25px"></a></li>
                                </ul>
                                <!-- Search Nav -->

</div>
</div>
<!-- Mobile Menu -->
<div class="col-12">
<div class="mobile_menu d-block d-md-none"></div>
</div>
</div>
</div>
</div>
</div>
</div>
<!-- Header End -->
</header>

</head>

<div>
<nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="index.html">Inicio</a></li>
<li class="breadcrumb-item active" aria-current="page">Contacto</li>
</ol>
</nav>
</div>
<main>

<!-- ================ contact section start ================= -->
<section class="contact-section">
<div class="container">
<div class="d-none d-sm-block mb-5 pb-4">
<div class="container">
<div class="row">
<div class="col-lg-8 posts-list">
<div class="comments-area" id="area_comentarios" >
<center><h1>Comentarios</h1><center>

<?php echo $mostrar;  ?>

</div>
</div>
</div>
</div>      
</div>



<div class="row">
    <div class="col-12">
        <h1 class="contact-title">¡Ponte en contacto con nosotros!</h1>
    </div>
    <div class="col-lg-8">
        <form class="form-contact contact_form" action="#" method="post" id="formulario">
            <div class="row">

                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="name">Nombre: <span>*</span></label>
                        <input class="form-control valid" name="name" id="name" type="text" value="" size="50" required>
                        <p class="input-error" id="error-name">Nombre invalido solo se aceptan letras y espacios</p>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="name">Número de teléfono: <span>*</span></label>
                        <input class="form-control valid" name="telefono" id="telefono" type="phone" value="" size="12"   required>
                        <p class="input-error" id="error-telefono">Número de teléfono incorrecto solo se aceptan números</p>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="name">Correo electrónico: <span>*</span></label>
                        <input class="form-control valid" name="email" id="email" type="email"  value="" size="50" required>
                        <p class="input-error" id="error-correo">Correo electrónico invalido debe contener @ y .</p>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <label for="message">Mensaje: <span>*</span></label>
                        <input type="text" class="form-control w-100" name="message" value="" id="message" cols="30" rows="9" size="50" required>
                        <p class="input-error" id="error-comentario">Debe contener al menos 50 caracteres</p>
                    </div>
                </div>
                <label for="terminos">
                    <input type="checkbox" name="terminos" value="" class="check" id="terminos">
                    Acepta los terminos y condiciones.
                </label>
            </div>

            <center><div>
              <input name="submit" type="submit" id="btn_comentario" value="Enviar"> 
              &nbsp;
              <input name="reset" type="reset" value="Cancelar">   
          </div></center>
          <br>
          <br>
          <div class="mensaje" id="no-exito">
           <p><b><i>Error:</i> Llena correctamente los campos del formulario</b></p> 
       </div>
       <div class="mensaje-exito" id="exito">
           <p><b><i>Gracias!</i> por enviar tu comentario</b></p> 
       </div>
   </form>
</div>
<div class="col-lg-3 offset-lg-1">
    <div class="media contact-info">
        <span class="contact-info__icon"><i class="ti-home"></i></span>
        <div class="media-body">
            <h3>Maravatío, Michoacán.</h3>
            <p>México, CA 91770</p>
        </div>
    </div>
    <div class="media contact-info">
        <span class="contact-info__icon"><i class="ti-tablet"></i></span>
        <div class="media-body">
            <h3>+52 4471263245</h3>
            <p>Lunes a viernes de 9am a 6pm</p>
        </div>
    </div>
    <div class="media contact-info">
        <span class="contact-info__icon"><i class="ti-email"></i></span>
        <div class="media-body">
            <h3>tecnologiasiott@gmail.com</h3>
            <p>Envianos tu consulta en cualquier momento!</p>
        </div>
    </div>
</div>
</div>
</div>
</section>
<!-- ================ contact section end ================= -->
</main>
<footer>
    <!-- Footer Start-->
    <div class="footer-main footer-bg">
        <div class="footer-area footer-padding">
            <div class="container">
                <div class="row d-flex justify-content-between">
                    <div class="col-xl-3 col-lg-3 col-md-5 col-sm-8">
                        <div class="single-footer-caption mb-50">
                            <div class="single-footer-caption mb-30">
                                <!-- logo -->
                                <div class="footer-logo">
                                    <a href="index.html"><img src="assets/img/logo/logo_footer.png" alt=""></a>
                                </div>
                                <div class="footer-tittle">
                                    <div class="footer-pera">
                                        <p class="info1">Universidad Tecnologíca del Oriente de Michoacán UTOM
                                        Ing. Tecnologías de la Información</p>
                                        <p class="info2">Maravatío de Ocampo,Michoacán México</p>
                                        <p class="info2">Telefono: +52 (447) 151 36 39, +52 (447) 101 50 28 </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-5 col-sm-7">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Conoce más sobre...</h4>
                            </div>
                            <!-- Popular post -->
                            <div class="whats-right-single mb-20">
                                <div class="whats-right-img">
                                    <img src="assets/img/gallery/segur.jpg" alt="" width="86px" height="80px">
                                </div>
                                <div class="whats-right-cap">
                                    <h4><a href="details.html">IoT en Seguridad</a></h4>

                                </div>
                            </div>
                            <!-- Popular post -->
                            <div class="whats-right-single mb-20">
                                <div class="whats-right-img">
                                    <img src="assets/img/gallery/empresita.jpg" alt="" width="86px" height="80px">
                                </div>
                                <div class="whats-right-cap">
                                    <h4><a href="details.html">Iot en mi empresa</a></h4>

                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-5 col-sm-7">
                        <div class="single-footer-caption mb-50">
                            <div class="banner">
                                <img src="assets/img/gallery/footer.png" width="200px" height="300px" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer-bottom aera -->
        <div class="footer-bottom-area footer-bg">
            <div class="container">
                <div class="footer-border">
                    <div class="row d-flex align-items-center">
                        <div class="col-xl-12 ">
                            <div class="footer-copy-right text-center">
                                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                  Copyright &copy;<script>document.write(new Date().getFullYear());</script> Todos los derechos reservados| Esta página fue creada  <i class="fa fa-heart" aria-hidden="true"></i> por <a>Ferts, Gabii</a>
                                  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <!-- Footer End-->
  </footer> 
  <!-- Search model Begin -->
  <div class="search-model-box">
    <div class="d-flex align-items-center h-100 justify-content-center">
        <div class="search-close-btn">+</div>
        <form class="search-model-form">
            <input type="text" id="search-input" placeholder="Searching key.....">
        </form>
    </div>
</div>
<!-- Search model end -->

<!-- JS here -->

<script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
<!-- Jquery, Popper, Bootstrap -->
<script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>

<script src="./assets/js/popper.min.js"></script>
<script src="./assets/js/bootstrap.min.js"></script>
<!-- Jquery Mobile Menu -->
<script src="./assets/js/jquery.slicknav.min.js"></script>

<!-- Jquery Slick , Owl-Carousel Plugins -->
<script src="./assets/js/owl.carousel.min.js"></script>
<script src="./assets/js/slick.min.js"></script>
<!-- Date Picker -->
<script src="./assets/js/gijgo.min.js"></script>
<!-- One Page, Animated-HeadLin -->
<script src="./assets/js/wow.min.js"></script>
<script src="./assets/js/animated.headline.js"></script>
<script src="./assets/js/jquery.magnific-popup.js"></script>

<!-- Scrollup, nice-select, sticky -->
<script src="./assets/js/jquery.scrollUp.min.js"></script>
<script src="./assets/js/jquery.nice-select.min.js"></script>
<script src="./assets/js/jquery.sticky.js"></script>

<!-- contact js -->
<script src="./assets/js/contact.js"></script>
<script src="./assets/js/jquery.form.js"></script>
<script src="./assets/js/jquery.validate.min.js"></script>
<script src="./assets/js/mail-script.js"></script>
<script src="./assets/js/jquery.ajaxchimp.min.js"></script>    
<!-- Jquery Plugins, main Jquery -->  
<script src="./assets/js/plugins.js"></script>
<script src="./assets/js/main.js"></script>
<script src="./assets/js/funcionesg.js"></script>
<script src="./assets/js/validacionesg.js"></script>



</body>
</html>
