<?php
get_header(); ?>
<div class="parallax_slider_outer first-section element-in-view" style="height: 862px; margin-top:0px;background:#f4f4f4;">
	<div class="small-12 large-12 columns" role="main">
	Nube/ Mapa contenido
	9eiwjtijew8i9thj8r4
	eiwjtuitr
	</div>
</div>
<!-- inicio noticias relevantes -->
<div id="full-width" class="clearfix f9f9f9-div ">
    <div class="row2 top">
            <div class="small-12 large-12 columns">
	         <h4 class="encabezados">Noticias relevantes</h4>
	    </div>
	    <div class="top" role="main">	
		<?php $the_query = new WP_Query('showposts=5'.'&paged='.$paged); ?>
		<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
		<div class="large-2 columns">
		<article class="notas-relevantes" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<a class="custom-thumbnail-class"><?php the_post_thumbnail(); ?></a>
		<div class="cont-relevantes">
		<p class="fecha"><?php the_time('j. M. Y ') ?></p>
		<p class="resumen-notas" href="<?php the_permalink() ?>"><?php the_title(); ?></a>
		<div class="sep-green"></div>
		<a class="leerMas" href="<?php the_permalink() ?>">Leer m&aacute;s</a>
		</div>
		</article>
		</div>
		<?php endwhile;?>
	   </div>
   </div>
<div class="row">Ver todas las noticias</div>
</div><!-- fin noticias relevantes -->

<!-- inicio sentencias recientes -->
<div id="full-width" class="clearfix EDEDED-div ">
    <div class="row2 top">	
        <div class="small-9 large-9 columns">
	            
	    <div class="top" role="main">
		<h4 class="encabezados">Sentencias recientes</h4> 
		<?php $the_query = new WP_Query('showposts=3'.'&paged='.$paged); ?>
		<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
		<div class="large-4 columns">
		<article class="notas-relevantes" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<a class="custom-thumbnail-class"><?php the_post_thumbnail(); ?></a>
		<div class="cont-relevantes">
		<p class="fecha"><?php the_time('j. M. Y ') ?></p>
		<p class="resumen-notas" href="<?php the_permalink() ?>"><?php the_title(); ?></a>
		<div class="sep-green"></div>
		<a class="leerMas" href="<?php the_permalink() ?>">Leer m&aacute;s</a>
		</div>
		</article>
		</div>
		<?php endwhile;?>
	   </div>
	</div>
        <div class="small-3 large-3 columns">
		<h4 class="encabezados pleca-titulosb">Bolet&iacute;n de noticias</h4>
		<h4 class="encabezados pleca-titulosb">Publicaciones</h4> 
	</div>
	 
   </div>
           
</div><!-- fin sentencias recientes -->

<?php get_footer(); ?>
