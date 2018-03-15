<style type="text/css">
  
@media only screen and (min-width: 1160px) {
.less {
  display: none;   !important;
 }
}
@media only screen and (max-width: 1160px) {
.less2 {
  display: none;   !important;
 }
}
</style>
<script>
      $(window).scroll(function() {
        if ($("#menu").offset().top > 100) {
            $("#menu").addClass("luis");
        } else {
            $("#menu").removeClass("luis");
        }
      });
</script>
<style>
.luis{
      background-color: black;
}
</style>



<nav id="menu" class="navbar justify-content-between  fixed-top backnav less2" >
    <div class="container-fluid mx-5">
   <a class="navbar-brand less2" href="#"><img src="img/logo.png" class="img-fluid" style="margin-left: 0%;"></a>

    <div class="row" style="margin-right: 0%;">  

        <ul class="nav">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">MAJOCK CONSULTING</a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="#">¿Quienes Somos?</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Nuestro Equipo</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">SERVICIOS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">PRODUCTOS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">SOPORTE</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">BLOG</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contacto.php">CONTACTOS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" style="color: #2cb8c7;">English</a>
          </li>
        </ul>

    </div>
</nav>



<!--movil menus-->

<nav  id="menu2" class="fixed-top backnav less" style="height: 50px;">
    <div class="row">
      <div class="col-6 offset-6" align="right">
        <div class="btn-group animated fadeInRight right">
          <button type="button" class="btn btn-secondary dropdown-toggle" style="border-top-left-radius: 20px; height: 50px; width: 160px;" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
           <i class="fas fa-microphone  fa-1x"></i><i class="ml-3 mr-3" style="font-size: 16px;">3295650</i><span class="mp-5"><i class="fas fa-bars  fa-1x"></i></span>
          </button>
          <div class="dropdown-menu dropdown-menu-left" style="top: 98%;">
            <button class="dropdown-item" type="button"><a href="contacto.php" class="text-white">Contactos</a></button>
            <div class="dropdown-divider"></div>
            <button class="dropdown-item" type="button"> Servicios</button>
            <div class="dropdown-divider"></div>
            <button class="dropdown-item" type="button">Productos</button>
            <div class="dropdown-divider"></div>
            <button class="dropdown-item" type="button">Soporte</button>
            <div class="dropdown-divider"></div>
            <button class="dropdown-item" type="button">Nuestro blog</button>
            <div class="dropdown-divider"></div>
            <button class="dropdown-item" type="button">Majock Consulting</button>
          </div>
        </div>   
      </div>
    </div>
</nav>
