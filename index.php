<?php get_header(); ?>
    <img class="img-responsive" src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />    
    <div class="conteudo">
        <main>
            <section class="slide">
            Slide
            </section>
            <section class="servicos">
            Serviços
            </section>
            <section class="meio">
                <div class="barra-lateral">
                Barra lateral
                </div>
                <div class="noticias">
                <!-- Loop Wordpress -->
                <?php 
						// Se houver algum post executa condicao
						if(have_posts()) :
							// Enquanto houver algum post, chame o post de determinada maneira
							while (have_posts()) : the_post();
					?>
                    <?php get_template_part('content', get_post_format()) ?>        
					<?php 
					endwhile;
					else:
					 ?>
						<p>Nao tem nada ainda pra mostrar</p>
					<?php 
					endif;
					?>
                </div>
            </section>
            <section class="mapa">
            Mapa
            </section>
        </main>
    </div>
<?php get_footer(); ?>