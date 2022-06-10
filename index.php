<html lang="pt-br">
<?php 
session_start();
include("Controller/protect.php");
tstlog();
?>
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Animate on scroll-->
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
  <!-- CSS Custom -->
  <link rel="stylesheet" type="text/css" href="css/custom.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.css">
  <!-- JS Custom-->
  <script type="text/javascript" src="js/custom.js"></script>
  <title>Assistência Técnica</title>
</head>
<body class="custom">
  <!-- Nav -->
  <?php 
  include("View/nav.php");
  ?>

  <!-- Imagem 1 -->
  <div class=" position-relative overflow-hidden py-5">
    <div class="col col-sm-12">
      <img src="Imagens/loja/iphones.jpg" class="img-fluid" style="height: 580px; width: 100%;">
      <div data-aos="fade-in" data-aos-duration="900" class="text-white" style="position: absolute; top: 28%; left: 6%;">
        <h1 class="display-3">L&E Assistência</h1>
        <p class="lead fw-normal">A melhor assistência técnica especializada<br> em reparos de celulares do Ceará.</p>
        <p class="font-italic text-muted">Realize o login para realizar um orçamento.</p>
        <a href="View/login.php"><button class="custom">Login</button></a>
      </div>
    </div>
  </div>

  <!-- Containner 1 -->
  <div class="container-fluid py-5">
    <div class="row">
     <!--LINHA 1-->  
     <div class="container">
      <div class="row">
        <div class="col-lg-12 col-ms-12 col-md-12">

          <!-- AJUDA RÁPIDA -->
          <div class="col-lg-12 col-md-12 col-sm-12" data-aos="fade-up" data-aos-duration="2000">
            <div class="d-flex justify-content-center">
              <div class="col-8 offset-1">
                <h1 class="d-flex justify-content-center col-11">Ajuda rápida</h1><br>
                <p class="font-italic text-muted d-flex justify-content-center col-11">Selecione qual problema seu aparelho possui.</p>
                <br>
                <a href="View/bateria.php"><button class="custom2"><i class="bi bi-battery custom2" style="font-size: 48px;"></i><br>Bateria / Não liga</button></a>
                <a href="#"><button class="custom2"><i class="bi bi-speedometer2 custom2" style="font-size: 48px;"></i><br>Aparelho lento</button></a>
                <a href="#"><button class="custom2"><i class="bi bi-sim custom2" style="font-size: 48px;"></i><br>Sim card não funciona</button></a>
                <a href="#"><button class="custom2"><i class="bi bi-phone custom2" style="font-size: 48px;"></i><br>Tela</button></a>
                <a href="#"><button class="custom2"><i class="bi bi-volume-mute custom2" style="font-size: 48px;"></i><br>Problemas no áudio</button></a>
                <a href="#"><button class="custom2"><i class="bi bi-camera custom2" style="font-size: 48px;"></i><br>Câmera</button></a>
                <a href="#"><button class="custom2"><i class="bi bi-wifi custom2" style="font-size: 48px;"></i><br>Wi-fi</button></a>
                <a href="#"><button class="custom2"><i class="bi bi-geo-alt custom2" style="font-size: 48px;"></i><br>GPS / Localização</button></a>
              </div>
            </div> 
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div id="about-area" class="d-flex justify-content-center">
  <div class="container">
    <h1 class="display-3 text-center py-2">Nossos serviços.</h1>
    <div class="row mx-auto">
      <div data-aos="fade-right" data-aos-duration="1700" class="col-lg-6 col-md-12 col-sm-12">
        <img class="custom" src="Imagens/loja/s21.jpg" style="width: 100%;" alt="Celular">
      </div>
      <div data-aos="fade-left" data-aos-duration="1700" class="col-lg-5 col-md-12 col-sm-12 offset-1 py-4">
        <div class="row py-3">
          <div class="col-6 text-center">
            <i class="bi bi-camera" style="font-size: 70px;"></i>
            <h4>Reparo na câmera</h4>
          </div>
          <div class="col-6 text-center">
            <i class="bi bi-phone" style="font-size: 70px;"></i>
            <h4>Troca de tela</h4>
          </div>
        </div>
        <div class="row py-4">
          <div class="col-6 text-center">
            <i class="bi bi-battery" style="font-size: 70px;"></i>
            <h4>Troca de bateria</h4>
          </div>
          <div class="col-6 text-center">
            <i class="bi bi-cpu" style="font-size: 70px;"></i>
            <h4>Reparo na placa mãe</h4>
          </div>
        </div>
        <div class="row py-4">
          <div class="col-6 text-center">
            <i class="bi bi-fingerprint" style="font-size: 70px;"></i>
            <h4>Troca de touch Id</h4>
          </div>
          <div class="col-6 text-center">
            <i class="bi bi-plus" style="font-size: 70px;"></i>
            <h4>E muito mais</h4>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div id="about-area" class="d-flex justify-content-center py-5">
  <div class="container">
    <div class="row mx-auto">
      <div data-aos="fade-left" data-aos-duration="1700" class="col-lg-6 col-md-12 col-sm-12">
        <h4 class="display-3">Quebrou?</h4>
        <p></p>
        <p>Somos a empresa certa para te ajuda, temos os melhores técnicos e preços da região, sempre pensando no melhor para você.</p>
        <p>Solicite um orçamento conosco.</p>
        <div>
            <a href="View/login.php"><button class="custom text-white" style="background-color: black;">Login</button></a>    
        </div>        
      </div>
      <div data-aos="fade-right" data-aos-duration="1700" class="col-lg-6 col-md-12 col-sm-12">
        <img class="custom" src="Imagens/loja/celularquebrado.png" style="height: 380px" alt="Celular">
      </div>
    </div>
  </div>
</div> 

<div id="about-area" class="d-flex justify-content-center">
  <div class="container">
    <div class="row mx-auto">
      <div data-aos="fade-right" data-aos-duration="1700" class="col-lg-6 col-md-12 col-sm-12">
        <img class="custom" src="Imagens/loja/assistenciafoto.jpg" style="height: 380px" alt="Empresa">
      </div>
      <div data-aos="fade-left" data-aos-duration="1700" class="col-lg-5 col-md-12 col-sm-12 offset-1 py-4">
        <h4 class="display-3">Conheça nossa empresa</h4>
        <ul id="about-list">
          <li><i></i> Trabalhamos com as melhores práticas do mercado.</li>
          <li><i></i> Alta responsabilidade com seu equipamento.</li>
          <li><i></i> Os melhores profissionais da região.</li>
          <li><i></i> Trabalhamos com Apple, Motorola, Sansung, LG e várias outras marcas.</li>
          <li><i></i> Estamos localizados na Rua Inexistente, 123, Girilândia.</li>
        </ul>
      </div>
    </div>
  </div>
</div>  

<!--Team-->
<div class="container py-5">
  <div class="row mb-4 text-center" data-aos="fade-up-left" data-aos-duration="1000">
    <h2 class="display-4 font-weight-light">Nossa equipe</h2>
    <p class="font-italic text-muted">Contamos com os melhores profissionais da região para melhor serviço para você.</p>
  </div>

  <div class="row text-center">
    <!-- Team item-->
    <div class="col-xl-3 col-sm-6 mb-5" data-aos="flip-left" data-aos-duration="1700">
      <div class="bg-white rounded shadow-sm py-5 px-4"><img src="Imagens/loja/lais.jpeg" alt="" style="height: 100px; width: 100px;" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
        <h5 class="mb-0">Laís Vieira</h5><span class="small text-uppercase text-muted">CEO</span>
        <ul class="social mb-0 list-inline mt-3">
          <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-facebook-f"></i></a></li>
          <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-twitter"></i></a></li>
          <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-instagram"></i></a></li>
          <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-linkedin"></i></a></li>
        </ul>
      </div>
    </div>
    <!-- End-->

    <!-- Team item-->
    <div class="col-xl-3 col-sm-6 mb-5" data-aos="flip-left" data-aos-duration="1700">
      <div class="bg-white rounded shadow-sm py-5 px-4"><img src="Imagens/loja/eduardo.jpg" alt="" style="height: 100px; width: 100px;" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
        <h5 class="mb-0">Eduardo Nobre</h5><span class="small text-uppercase text-muted">CEO</span>
        <ul class="social mb-0 list-inline mt-3">
          <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-facebook-f"></i></a></li>
          <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-twitter"></i></a></li>
          <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-instagram"></i></a></li>
          <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-linkedin"></i></a></li>
        </ul>
      </div>
    </div>
    <!-- End-->

    <!-- Team item-->
    <div class="col-xl-3 col-sm-6 mb-5" data-aos="flip-left" data-aos-duration="1700">
      <div class="bg-white rounded shadow-sm py-5 px-4"><img src="Imagens/loja/dalker.png" alt="" style="height: 100px; width: 100px;" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
        <h5 class="mb-0">Dalker Pinheiro</h5><span class="small text-uppercase text-muted">Gerente</span>
        <ul class="social mb-0 list-inline mt-3">
          <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-facebook-f"></i></a></li>
          <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-twitter"></i></a></li>
          <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-instagram"></i></a></li>
          <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-linkedin"></i></a></li>
        </ul>
      </div>
    </div>
    <!-- End-->

    <!-- Team item-->
    <div class="col-xl-3 col-sm-6 mb-5" data-aos="flip-left" data-aos-duration="1700">
      <div class="bg-white rounded shadow-sm py-5 px-4"><img src="Imagens/loja/fernando.png" alt="" style="height: 100px; width: 100px;" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
        <h5 class="mb-0">Fernando Pessoa</h5><span class="small text-uppercase text-muted">Gerente</span>
        <ul class="social mb-0 list-inline mt-3">
          <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-facebook-f"></i></a></li>
          <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-twitter"></i></a></li>
          <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-instagram"></i></a></li>
          <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-linkedin"></i></a></li>
        </ul>
      </div>
    </div>
    <!-- End-->

  </div>
</div>
<!-- WhatsApp Link -->
<div>
  <a data-toggle="tooltip" data-placement="top" title="Estamos Online!" class="whatsapp-link" href="https://api.whatsapp.com/send?phone=558899185458&text=Olá,%20gostaria%20de%20mais%20informações!" target="_blank"><i class="fa fa-whatsapp"></i></a>
</div>

<!-- Footer -->
<?php 
include("View/footer.php");
?> 
<!-- Bootstrap Script -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
  AOS.init();
</script>

</body>
</html>