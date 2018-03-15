<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Protfolio Gallery</title>
  <link href='https://fonts.googleapis.com/css?family=Lato:400,300,700,900' rel='stylesheet' type='text/css'>

      <link rel="stylesheet" href="css/bootstrap.css">
<style type="text/css">
		#portfolio {  
		    margin: 1rem 0;
		    -webkit-column-count: 3; 
		    -moz-column-count: 3;
		    column-count: 3;
		    -webkit-column-gap: 1rem;
		    -moz-column-gap: 1rem;
		    column-gap: 1rem;
		    -webkit-column-width: 33.33333333333333%;
		    -moz-column-width: 33.33333333333333%;
		    column-width: 33.33333333333333%;
		}
		.tile { 
		    -webkit-transform: scale(0);
		    transform: scale(0);
		    -webkit-transition: all 350ms ease;
		    transition: all 350ms ease;
		}
		.tile:hover { 
		}
		.scale-anm {
		  transform: scale(1);
		}
		.tile img {
		    max-width: 100%;
		    width: 100%;
		    height: auto;
		    margin-bottom: 1rem;
		}
		::-moz-focus-inner {
		  border: 0;
		  padding: 0;
		}
</style>

  
</head>

<body>

  <div class="toolbar mb2 mt2">
  <button class="btn fil-cat" href="" data-rel="all">All</button>
  <button class="btn fil-cat" data-rel="web">Websites</button>
  <button class="btn fil-cat" data-rel="flyers">Flyers</button>
  <button class="btn fil-cat" data-rel="bcards">Business Cards</button>
</div> 
 
<div id="portfolio">
  <div class="tile scale-anm web all">
        <img src="http://demo.themerain.com/charm/wp-content/uploads/2015/04/2-mon_1092-300x234.jpg" alt="" />
  </div>
  <div class="tile scale-anm bcards all">
    <img src="http://demo.themerain.com/charm/wp-content/uploads/2015/04/jti-icons_08-300x172.jpg" alt="" />
  </div>
  <div class="tile scale-anm web all">
    <img src="http://demo.themerain.com/charm/wp-content/uploads/2015/04/emi_haze-300x201.jpg" alt="" />
  </div>
  <div class="tile scale-anm web all">
            <img src="http://demo.themerain.com/charm/wp-content/uploads/2015/04/codystretch-300x270.jpg" alt="" />
  </div>
  <div class="tile scale-anm flyers all">
        <img src="https://placeholdit.imgix.net/~text?txtsize=33&txt=350%C3%97190&w=350&h=190" alt="" />
  </div>
  <div class="tile scale-anm bcards all">
            <img src="https://placeholdit.imgix.net/~text?txtsize=19&txt=200%C3%97290&w=200&h=290" alt="" />
  </div>
  <div class="tile scale-anm flyers all">
    <img src="http://demo.themerain.com/charm/wp-content/uploads/2015/04/jti-icons_08-300x172.jpg" alt="" />
  </div>
  <div class="tile scale-anm flyers all">
    <img src="http://demo.themerain.com/charm/wp-content/uploads/2015/04/transmission_01-300x300.jpg" alt="" />
  </div>
  <div class="tile scale-anm web all">
        <img src="https://placeholdit.imgix.net/~text?txtsize=19&txt=200%C3%97290&w=200&h=290" alt="" />
  </div>
  <div class="tile scale-anm flyers all">
           <img src="https://placeholdit.imgix.net/~text?txtsize=19&txt=200%C3%97290&w=200&h=290" alt="" /> 
  </div>
  <div class="tile scale-anm web all">
        <img src="http://demo.themerain.com/charm/wp-content/uploads/2015/04/the-ninetys-brand_02-300x300.jpg" alt="" />
  </div>
  <div class="tile scale-anm bcards all">
            <img src="http://demo.themerain.com/charm/wp-content/uploads/2015/04/15-dia_1092-1-300x300.jpg" alt="" />
  </div>
  <div class="tile scale-anm web all">
       <img src="https://placeholdit.imgix.net/~text?txtsize=33&txt=350%C3%97190&w=350&h=190" alt="" /> 
  </div>
  <div class="tile scale-anm bcards all">
          <img src="http://demo.themerain.com/charm/wp-content/uploads/2015/04/emi_haze-300x201.jpg" alt="" />  
  </div>
  <div class="tile scale-anm web all">
            <img src="http://demo.themerain.com/charm/wp-content/uploads/2015/04/transmission_01-300x300.jpg" alt="" />
  </div> 
  <div class="tile scale-anm web all">
      <img src="https://placeholdit.imgix.net/~text?txtsize=33&txt=350%C3%97190&w=350&h=190" alt="" />  
  </div> 
  <div class="tile scale-anm bcards all">     
            <img src="https://placeholdit.imgix.net/~text?txtsize=19&txt=200%C3%97290&w=200&h=290" alt="" />
  </div>
</div>

<div style="clear:both;"></div>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>

  

<script type="text/javascript">
	$(function() {
		var selectedClass = "";
		$(".fil-cat").click(function(){ 
		selectedClass = $(this).attr("data-rel"); 
     $("#portfolio").fadeTo(100, 0.1);
		$("#portfolio div").not("."+selectedClass).fadeOut().removeClass('scale-anm');
    setTimeout(function() {
      $("."+selectedClass).fadeIn().addClass('scale-anm');
      $("#portfolio").fadeTo(300, 1);
    }, 300); 
		
	});
});
</script>




</body>

</html>