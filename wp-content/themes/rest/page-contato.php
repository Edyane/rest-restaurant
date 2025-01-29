<?php
// Template Name: Contato
?>
<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<section class="container contato">
			<h2 class="subtitulo"><?php the_title(); ?></h2>

			<div class="grid-16">
				<a href="https://www.google.com.br/maps" target="_blank">
				<img src="<?php the_field('foto_do_mapa'); ?>" alt="<?php the_field('foto_do_mapa_descricao'); ?>">
			</div>

			<div class="grid-1-3 contato-item">
				<h2><?php the_field('titulo_dados'); ?></h2>
				<p><?php the_field('telefone'); ?></p>
				<p><?php the_field('email'); ?></p>
				<p><?php the_field('facebook'); ?></p>
			</div>
			<div class="grid-1-3 contato-item">
				<h2><?php the_field('titulo_horarios'); ?></h2>
				<p><?php the_field('texto_dia_horario'); ?></p>
				<p><?php the_field('texto_sabado_horario'); ?></p>
				<p><?php the_field('texto_domingo_horario'); ?></p>
			</div>
			<div class="grid-1-3 contato-item">
				<h2>Endereço</h2>
				<p>Rua Marechal, 29</p>
				<p>Copacabana - Rio de Janeiro</p>
				<p>Brasil - Terra - Via Láctea</p>
			</div>
		</section>
<?php endwhile; else: endif; ?>

<?php get_footer(); ?>