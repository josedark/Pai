<html>
<head>
  <title> ChikiMundo</title>
   <meta charset="utf-8">
   <link href="imagene/icono.ico" type="image/x-icon" rel="shortcut icon">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<link rel="stylesheet" type="text/css" href="css/responsive.css">
	<link rel="stylesheet" type="text/css" href="css/iconos.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

<script>
    $(document).ready(function(){
      var menu=1;
      $("#inicio").css({"height":$(window).height()+"px"});
       $("#abrir_menu,#cerrar_menu").click(function(){
           if( menu==1)
    	        {
           $("#menu").css({"left":"0"});
           menu=0;

    	        }else
    	             {
    		           $("#menu").css({"left":"-100%"});
                    menu=1;


    	}


     });
       $(function(){
      $('a[href*=#]').click(function() {
      if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'')
         && location.hostname == this.hostname) {
             var $target = $(this.hash);
             $target = $target.length && $target || $('[name=' + this.hash.slice(1) +']');
             if ($target.length) {
                 var targetOffset = $target.offset().top;
                 $('html,body').animate({scrollTop: targetOffset}, 1000);
                 return false;
            }
       }
   });  
});



});



</script>

</head>

<body>
	<header>
     <section id ="logo">

        <h2> ChikiMundo lml(~_~)lml  </h2>
        <span  id="abrir_menu" class="icon-menu"></span>


     </section>

     <section id="menu" >
        
       <nav> <span id="cerrar_menu" class="icon-cross"></span></nav> 
       <ul> 

             <a href="#" >Anime</a>
             <a href="#"> Musica</a>
             <a href="#"> Programacion</a>
          
             <a href="acerca"> Acerca</a>


     </ul>

     </section>


	</header>

  <section id="inicio">

  <center>

      <img src="imagene/logo.png"><br/>
      <a href="acerca">Conocer -->Mas</a>
  </center>
</section>

<section id="acerca" >
 <center>
<section id="acercas_main">
  <h3>METEMPSICOSIS    </h3>
  <p>Del ancho mar sonoro, fui pez en los cristales 
que tuve los reflejos de gemas y metales 
por eso amo la espuma, los agrios peñascales 
las brisas salitrosas, los vividos corales 

Después aleve mi hora de tintes caprichosos 
magnéticas pupilas, colmillos venenosos 
por eso amo las ciénagas, los parajes umbrosos 
los húmedos crepúsculos, los bosques calurosos 

Tórneme luego en águila de porte audaz y fiero 
tuve alas poderosas y garras de fino acero 
por eso amo la nube, el alto pico austero 
el espacio sin limites y el aire vocinglero

Hoy convertido en hombre por ordenes oscuras 
siento en mi ser los gérmenes de existencia futuras 
Vidas que han de encumbrarse a mayores alturas 
o que han de convertirse en génesis impuras

A que lejana estrella voy a tender el vuelo 
cuando se llegue la hora de buscar otro cielo 
A que astro de ventura o planeta de duelo 
ira a posarse mi alma cuando deje este suelo

O descendiendo en breve por secretas razones 
de la terrestre vida todos los escalones 
aguardaré en le limbo de largas gestaciones 
el sagrado momento de nuevas ascensiones
</p>



</section>


 </center>


</section>
</body>
</html>
