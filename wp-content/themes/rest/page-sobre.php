<?php
// Template Name: Sobre
?>
<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<section class="container sobre">
			<h2 class="subtitulo"><?php the_title(); ?></h2>

			<div class="grid-8">
				<img src="<?php the_field('foto_rest'); ?>" alt="<?php the_field('foto_rest_descricao'); ?>">
			</div>

			<div class="grid-8">
				<h2><?php the_field('titulo_da_historia'); ?></h2>
				<p><?php the_field('texto_da_historia'); ?></p>
				<h2>Visão</h2>
				<p>Nossa visão é ser o restaurante de referência do bairro, um local onde todos se sintam acolhidos e conectados, seja para uma refeição rápida ou para celebrar momentos especiais.</p>
				<h2>Valores</h2>
				<p>Acreditamos que um bom ambiente começa com um sorriso e a sensação de pertencimento. Nosso restaurante é um espaço onde todos são bem-vindos, e nossa missão é promover a união e o carinho entre os membros da nossa comunidade.</p>
			</div>
		</section>
<?php endwhile; else: endif; ?>
<?php get_footer(); ?>