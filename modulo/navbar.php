<style type="text/css">
  
@media only screen and (min-width: 992px) {
.less {
  display: none;   !important;
 }
}
@media only screen and (max-width: 992px) {
.less2 {
  display: none;   !important;
 }
}
</style>
<script>
      $(window).scroll(function() {
        if ($("#menu").offset().top > 600) {
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





<nav id="menu" class="navbar justify-content-between  fixed-top backnav" >
    <div class="container-fluid">
   <a class="navbar-brand less2" href="#"><img src="img/logo.png" class="img-fluid" style="margin-left: 0%;"></a>
    <div class="row" style="margin-right: 0%;">    
          <div class="dropdown">
            <a class="dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              MAJOCK CONSULTING<i class="fas fa-arrow-circle-down" style="margin-left: 2px;"></i>
            </a>
            <div class="dropdown-menu text-center" aria-labelledby="dropdownMenuButton" style=" margin-top: 17px; left: -15px;">
              <a class="dropdown-item" href="#">¿Quines Somos?</a>
              <a class="dropdown-item" href="#">Nuestro Equipo</a>
            </div>
          </div>
      <a class="navbar-brand" href="#">SERVICIOS</a>
      <a class="navbar-brand" href="#">PRODUCTOS</a>
      <a class="navbar-brand" href="#">PROYECTOS</a>
      <a class="navbar-brand" href="#">SOPORTE</a>
      <a class="navbar-brand" href="#">BLOG</a>
      <a class="navbar-brand" href="#">CONTACTOS</a>
      <a class="navbar-brand" href="#">English</a>
    </div>
</nav>



<!-- 
<nav  id="menu2" class="navbar justify-content-between fixed-top backnav less2" style="display: block;">
  <div class="container-fluid" align="right">
   <a class="navbar-brand less2" href="#"><img src="img/logo.png" class="img-fluid"></a>

  <form class="form-inline">

        <div class="btn-group animated fadeInRight">
          <button type="button" class="btn btn-secondary dropdown-toggle" style="border-top-left-radius: 20px; height: 70px; width: 176px;" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
           <i class="fas fa-microphone  fa-1x"></i><i class="ml-3 mr-3" style="font-size: 16px;">3295650</i><i class="fas fa-bars  fa-1x"></i>
          </button>
          <div class="dropdown-menu dropdown-menu-left">
            <button class="dropdown-item" type="button">Contactos</button>
            <div class="dropdown-divider"></div>
            <button class="dropdown-item" type="button">Servicios</button>
            <div class="dropdown-divider"></div>
            <button class="dropdown-item" type="button">Productos</button>
            <div class="dropdown-divider"></div>
            <button class="dropdown-item" type="button">Proyectos</button>
            <div class="dropdown-divider"></div>
            <button class="dropdown-item" type="button">Soporte</button>
            <div class="dropdown-divider"></div>
            <button class="dropdown-item" type="button">Nuestro blog</button>
            <div class="dropdown-divider"></div>
            <button class="dropdown-item" type="button">Majock Consulting</button>
          </div>
        </div>
    </div>
  </form>
  </div>
</nav>
 -->

