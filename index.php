<?php
require_once 'php/email.php';
require_once 'php/email/vendor/autoload.php';

if ($_POST) {
  $msg =  '<p>Olá, aqui é o robo do seu site e vi aqui no meu banco de dados que tem gente interessada no seu negócio !</p> <br> <p>Olá, eu sou <strong>'.$_POST['nome'].'</strong>, e meu email é o <strong>'.$_POST['email'].'</strong> e tenho uma mensagem:</p> <br> '.$_POST['msg'].'.';

  $mail = 'contato@drglacus.com.br';
  $nome = $_POST['nome'];

  enviar($msg, $mail, $nome, $nome);
}
?>

<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="description" content="Sou Dr. Glacus Arantes, seu ortodontista em São Paulo, Mogi das Cruzes e Amparo">
    <meta name="keywords" content="Dentista, dentistas, Ortodontia, Invisalign">
    <meta name="author" content="Lucas Amaral Machado www.linkedin.com/in/lucas-amaral-a99737162">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-title" content="Dr. Glacus Arantes">
    <meta name="application-name" content="Dr. Glacus Arantes">
    <meta name="robots" content="index,follow">

    <link rel="url" href="https://drglacus.com.br/">
    <link rel="canonical" href="https://drglacus.com.br/">

    <meta property="og:type" content="page">
    <meta property="og:title" content="Dr. Glacus Arantes">
    <meta property="og:description" content="Sou Dr. Glacus Arantes, seu ortodontista em São Paulo, Mogi das Cruzes e Amparo">
    <meta property="og:url" content="https://drglacus.com.br/">
    <meta property="og:locale" content="pt_BR">

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="images/fav/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/fav/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/fav/favicon-16x16.png">
    <link rel="mask-icon" href="images/fav/safari-pinned-tab.svg" color="#000000">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">

    <link rel="manifest" href="images/fav/site.webmanifest">

    <title>Dr. Glacus Arantes</title>

    <!-- Pandora framework (editado por Lucas Amaral) -->
    <link rel="stylesheet" href="css/vendor/icomoon/style.css">
    <link rel="stylesheet" href="css/vendor/owl.carousel.min.css">
    <link rel="stylesheet" href="css/vendor/animate.min.css">
    <link rel="stylesheet" href="css/vendor/aos.css">
    <link rel="stylesheet" href="css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="css/vendor/jquery.fancybox.min.css">

    <link rel="stylesheet" href="css/style.css">

  </head>
  <body data-spy="scroll" data-target=".site-nav-target" data-offset="200">

    <nav class="unslate_co--site-mobile-menu">
      <div class="close-wrap d-flex">
        <a href="#" class="d-flex ml-auto js-menu-toggle">
          <span class="close-label">Close</span>
          <div class="close-times">
            <span class="bar1"></span>
            <span class="bar2"></span>
          </div>
        </a>
      </div>
      <div class="site-mobile-inner"></div>
    </nav>


    <div class="unslate_co--site-wrap">

      <div class="unslate_co--site-inner">

        <div class="lines-wrap">
          <div class="lines-inner">
            <div class="lines"></div>
          </div>
        </div>

      <nav class="unslate_co--site-nav site-nav-target">

        <div class="container">

          <div class="row align-items-center justify-content-between text-left">
            <div class="col-md-5 text-right">
              <ul class="site-nav-ul js-clone-nav text-left d-none d-lg-inline-block">
                <li class="has-children"><a href="#home-section" class="nav-link">Home</a></li>

                <!--<li><a href="#portfolio-section" class="nav-link">Portfolio</a></li>-->
                <li><a href="#about-section" class="nav-link">Sobre</a></li>
              </ul>
            </div>
            <div class="site-logo pos-absolute">
              <a href="index.html" class="unslate_co--site-logo">Dr Glacus<span>.</span></a>
            </div>
            <div class="col-md-5 text-right text-lg-left">
              <ul class="site-nav-ul js-clone-nav text-left d-none d-lg-inline-block">
                <li><a href="#services-section" class="nav-link">Técnicas</a></li>
                <li><a href="#contact-section" class="nav-link">Contato</a></li>
              </ul>

              <ul class="site-nav-ul-none-onepage text-right d-inline-block d-lg-none">
                <li><a href="#" class="js-menu-toggle">Menu</a></li>
              </ul>

            </div>
          </div>
        </div>
      </nav>

      <div class="cover-v1 jarallax overlay" style="background-image: url('images/fundo.jpg');" id="home-section">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-7 mx-auto text-center">
              <h2 class="subheading gsap-reveal-hero text-white">Sou Dr. Glacus Arantes, seu ortodontista em São Paulo, Mogi das Cruzes e Amparo</h2>
            </div>
          </div>
        </div>

        <a href="#portfolio-section" class="mouse-wrap smoothscroll">
          <span class="mouse">
            <span class="scroll"></span>
          </span>

          <span class="mouse-label">Scroll</span>
        </a>

      </div>

      <div class="unslate_co--section" id="about-section">
        <div class="container">

          <div class="section-heading-wrap text-center mb-5">
            <h2 class="heading-h2 text-center divider"><span class="gsap-reveal">Sobre Mim</span></h2>
            <span class="gsap-reveal"><img src="images/divider.png" alt="divider" width="76"></span>
          </div>


          <div class="row mt-5 justify-content-between">
            <div class="col-lg-7 mb-5 mb-lg-0" data-aos="fade-up">
              <figure class="dotted-bg gsap-reveal-img">
                <img src="images/sobre.png" alt="Image" class="img-fluid">
              </figure>
            </div>
            <div class="col-lg-4 pr-lg-5">
              <h3 class="mb-4 heading-h3"><span class="gsap-reveal"></span></h3>
              <p class="lead gsap-reveal">Formado pela UMC desde 1995. Ortodontista desde 1997. Doutor pela FM-USP em 2007. Proprietário da Dr Glacus Arantes Ortodontia - prestadora de serviços Odontológicos e Ortodônticos desde 2010.</p>
            </div>
          </div>
        </div>
      </div>

      <div class="unslate_co--section" id="services-section">
        <div class="container">

          <div class="section-heading-wrap text-center mb-5">
            <h2 class="heading-h2 text-center divider">Técnicas</h2>
            <img src="images/divider.png" alt="divider" width="76">
          </div>

          <div class="row gutter-v3">
            <div class="col-md-6 col-lg-4 mb-4">
              <div class="feature-v1" data-aos="fade-up" data-aos-delay="0">
                <div class="wrap-icon mb-3">
                  <img src="images/svg/Img_3.svg" alt="Image" width="45">
                </div>
                <h3>Invisalign <br> (Alinhadores Invisíveis)</h3>
              </div>
            </div>

            <div class="col-md-6 col-lg-4 mb-4">
              <div class="feature-v1" data-aos="fade-up" data-aos-delay="100">
                <div class="wrap-icon mb-3">
                  <img src="images/svg/Img_2.svg" alt="Icon" width="45">
                </div>
                <h3>Ortodontia fixa Roth<br> MBT e Autoligáveis</h3>
              </div>
            </div>

            <div class="col-md-6 col-lg-4 mb-4">
              <div class="feature-v1" data-aos="fade-up" data-aos-delay="200">
                <div class="wrap-icon mb-3">
                  <img src="images/svg/Img_4.svg" alt="Image" class="img-fluid" width="45">
                </div>
                <h3>Ortopedia Funcional<br> (aparelhos móveis)</h3>
              </div>
            </div>

            <div class="col-md-6 col-lg-4 mb-4">
              <div class="feature-v1" data-aos="fade-up" data-aos-delay="0">
                <div class="wrap-icon mb-3">
                  <img src="images/svg/Img_1.svg" alt="Image" width="45">
                </div>
                <h3>Preparos para Cirurgia Ortognática</h3>

              </div>
            </div>
          </div>

        </div>
      </div>

      <div class="unslate_co--section" id="contact-section">
        <div class="container">
          <div class="section-heading-wrap text-center mb-5">
            <h2 class="heading-h2 text-center divider"><span class="gsap-reveal">Contate-nos</span></h2>
            <span class="gsap-reveal"><img src="images/divider.png" alt="divider" width="76"></span>
          </div>


          <div class="row justify-content-between">

            <div class="col-md-6">
              <form method="post" class="form-outline-style-v1" id="contactForm">
                <div class="form-group row mb-0">

                  <div class="col-lg-6 form-group gsap-reveal">
                    <label for="name">Nome</label>
                    <input name="nome" type="text" class="form-control" id="name">
                  </div>
                  <div class="col-lg-6 form-group gsap-reveal">
                    <label for="email">Email</label>
                    <input name="email" type="email" class="form-control" id="email">
                  </div>
                  <div class="col-lg-12 form-group gsap-reveal">
                    <label for="message">Escreva Sua Mensagem...</label>
                    <textarea name="msg" id="message" cols="30" rows="7" class="form-control"></textarea>
                  </div>
                </div>
                <div class="form-group row gsap-reveal">
                    <div class="col-md-12 d-flex align-items-center">
                      <input type="submit" class="btn btn-outline-pill btn-custom-light mr-3" value="Enviar">
                      <span class="submitting"></span>
                    </div>
                  </div>
              </form>
              <div id="form-message-warning" class="mt-4"></div>
              <div id="form-message-success">
                Sua mensagem foi enviada!
              </div>

            </div>

            <div class="col-md-4">
              <div class="contact-info-v1">
                <div class="gsap-reveal d-block">
                  <span class="d-block contact-info-label">Email</span>
                  <a href="#" class="contact-info-val">contato@drglacus.com.br</a>
                </div>
                <div class="gsap-reveal d-block">
                  <span class="d-block contact-info-label">Contato</span>
                  <a href="https://api.whatsapp.com/send?phone=5511956623125" target="_blank" class="contact-info-val">WhatsApp: (11) 95662-3125</a><br />
                  <p class="contact-info-val">Tel: (11) 4799-8575</p>
                </div>
                <div class="gsap-reveal d-block">
                  <span class="d-block contact-info-label">Atende Em</span>
                  <address class="contact-info-val">São Paulo - SP</address>
                  <address class="contact-info-val">Mogi Das Cuzes - SP</address>
                  <address class="contact-info-val">Amparo - SP</address>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
      </div>

      <footer class="unslate_co--footer unslate_co--section">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-md-7">

              <div class="footer-site-logo"><a href="#">Dr Glacus<span>.</span></a></div>

              <ul class="footer-site-social">
                <li><a target="_blank" href="https://www.instagram.com/drglacusarantes/">Instagram</a></li>
              </ul>
              <p class="site-copyright">
                <small>&copy; 2020 <a href="#">Portfolio Dr Glacus Arantes </a>. todos direitos reservados. <br> Feito com <span class="icon-heart text-danger"></span> por <a target="_blank" href="https://www.linkedin.com/in/lucas-amaral-a99737162/">Lucas Amaral</a>.</small>
              </p>

            </div>
          </div>
        </div>
      </footer>
    </div>

    <!-- Loader -->
    <div id="unslate_co--overlayer"></div>
    <div class="site-loader-wrap">
      <div class="site-loader dark"></div>
    </div>

    <script src="js/scripts-dist.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>
