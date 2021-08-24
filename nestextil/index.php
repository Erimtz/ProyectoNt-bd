<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>NesTextil.co</title>
    <link rel="stylesheet" href="estilos.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="owlcarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="owlcarousel/owl.theme.default.min.css">
    <script src="https://kit.fontawesome.com/8753d338f4.js" crossorigin="anonymous"></script>

</head>

<body>
    <?php
    // (A) SAVE SURVEY FORM ON SUBMIT
    if (isset($_POST['email'])) {
      require "newsletter-save.php";
    }
    ?>
<header>
    <div class="oferta">20% de descuento en todos los productos!</div>
    <div class="contenedor"> 
        <div class="menu">   
        <a href="/nestextil"><p>NesTextil</p></a>
        <nav>
            <ul>
                <li id="button1" class="menu-li"><a href="/nestextil/productos.html" target="_blank">Mujer</a></li>
                <li id="button2" class="menu-li"><a href="/nestextil/accesorios.html" target="_blank">Accesorios</a></li>
                <li id="button3" class="menu-li"><i class="fab fa-sistrix"></i></li>    
                <li id="button4" class="menu-li"><i class="far fa-heart"></i></li>
                <li id="button5" class="menu-li"><i class="fas fa-shopping-bag"></i></li>
                <li id="button6" class="menu-li"><a href="/nestextil/registro.php" target="_blank"><i class="far fa-user"></i></a></li>
                <li id="buttonMobile" class="menu-li-mobile"><i class="fas fa-bars"></i></li>
            </ul>
        </nav>
        </div>

        <div class="titular">
            <h1>Hola Comodidad</h1>
            <h2>Nueva realidad, nueva pijama</h2>
            <button class="btn"><a href="/nestextil/diseños.html" target="_blank">DESCUBRE NUEVOS DISEÑOS AQUÍ</a></button>
        </div>
    </div> 
</header>

<section>
    <div class="contenedor">
    <h3>Envíos gratis por pedidos superiores a $150.000</h3>
<div class="owl-carousel">
    <div> <img src="img/capsula1.jpg"> </div>
    <div> <img src="img/capsula2.jpg"> </div>
    <div> <img src="img/capsula3.jpg"> </div>
    <div> <img src="img/capsula4.jpg"> </div>
  </div>
    </div> 
</section>

<section id="nestienda">
    <div class="contenedor">
        <h3>Conoce nuestra tienda</h3>
        <div class="contenedor-tienda"></div>
        <div class="tienda"> 
          <img src="img/tienda1.jpg">
          <img src="img/tienda2.jpg">
          <img src="img/tienda3.jpg">
        </div>
    </div>
</section>

<section class="banner">
    <div class="banner-novedades">
        <span class="banner-correo">
            <i class="far fa-envelope-open"></i>
        </span>
        <h3 class="banner-titulo">ENTÉRATE DE LAS ULTIMAS NOVEDADES</h3>
    </div>

    <div class="banner-formulario">
        <form method="post" class="suscripcion-formulario">
            <div class="subscripcion-formulario">
                <input type="email" name="email" class="subscripcion-formulario-input" placeholder="Ingresá tu correo electronico">
                <!-- <button class="subscripcion-formulario-send"><a class="mail" href="mailto:example@email.com">Suscribirme</a></button> -->
                <input type="submit" class="subscripcion-formulario-send" value="Suscribirme" >
            </div>
        </form>
    </div>

    <div>
        <a class="redes" href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram"></i></a>&nbsp;&nbsp;
    
        <a class="redes" href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook-f"></i></a>&nbsp;&nbsp;
            
        <a class="redes" href="https://www.whatsapp.com/" target="_blank"><i class="fab fa-whatsapp"></i></a>&nbsp;&nbsp;
    </div>
</section>

<script src="owlcarousel/jquery.min.js"></script>
<script src="owlcarousel/owl.carousel.min.js"></script>
<script>
    $('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:4
        }
    }
})
</script>
</body>

    <footer>
        <div>
            <span  class="piePagina">Todos los derechos reservados a Erika Martinez</span>
        </div>
    </footer>

</html>