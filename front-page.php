<?php get_header(); ?>

<main class="main-content">
    
    <section class="hero-slider">
        <div class="hero-slide active" style="background-image: linear-gradient(rgba(11, 42, 74, 0.7), rgba(0, 0, 0, 0.8)), url('<?php echo get_template_directory_uri(); ?>/assets/img/background.png');">
            <div class="hero-content">
                <h1>Moda que Define Você</h1>
                <p>Estilo e presença em cada peça. Descubra o nosso catálogo!</p>
                <a href="<?php echo get_permalink( wc_get_page_id( 'shop' ) ); ?>" class="btn hero-btn">Comprar Agora</a>
            </div>
        </div>
    </section>

    <section class="section features-section">
        <div class="card-grid" style="display: flex !important; justify-content: center !important; flex-wrap: wrap !important; gap: 40px !important; text-align: center;">
            
            <div class="card" style="padding: 40px 20px; border: none; background: transparent; max-width: 350px;">
                <i class='bx bx-check-shield' style="font-size: 3rem; color: var(--cor-primaria); margin-bottom: 15px;"></i>
                <h3 style="font-family: var(--fonte-titulos); font-size: 1.2rem; margin-bottom: 10px;">Qualidade Premium</h3>
                <p style="font-family: var(--fonte-principal); color: var(--cor-letras-secundaria);">Tecidos selecionados para máxima durabilidade.</p>
            </div>
            
            <div class="card" style="padding: 40px 20px; border: none; background: transparent; max-width: 350px;">
                <i class='bx bx-package' style="font-size: 3rem; color: var(--cor-primaria); margin-bottom: 15px;"></i>
                <h3 style="font-family: var(--fonte-titulos); font-size: 1.2rem; margin-bottom: 10px;">Envio Rápido</h3>
                <p style="font-family: var(--fonte-principal); color: var(--cor-letras-secundaria);">Entregamos para todo o Brasil com agilidade e segurança.</p>
            </div>
            
        </div>
    </section>

    <section class="section categories-section">
        <div class="section-header">
            <div>
                <h2 class="section-title">Compre por Categoria</h2>
                <p class="section-subtitle">Encontre o estilo perfeito para o seu momento!</p>
            </div>
        </div>
        <div class="categories-grid">
            <a href="<?php echo get_post_type_archive_link('product'); ?>?product_cat=bones" class="category-card">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/bones.jpg" alt="Bonés">
                <div class="category-content">
                    <h3>Bonés</h3>
                    <span>Ver tudo <i class='bx bx-right-arrow-alt'></i></span>
                </div>
            </a>
            <a href="<?php echo get_post_type_archive_link('product'); ?>?product_cat=camisetas" class="category-card">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/camisetas.jpg" alt="Camisetas">
                <div class="category-content">
                    <h3>Camisetas</h3>
                    <span>Ver tudo <i class='bx bx-right-arrow-alt'></i></span>
                </div>
            </a>
            <a href="<?php echo get_post_type_archive_link('product'); ?>?product_cat=calcas" class="category-card">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/calcas.jpg" alt="Calças">
                <div class="category-content">
                    <h3>Calças</h3>
                    <span>Ver tudo <i class='bx bx-right-arrow-alt'></i></span>
                </div>
            </a>
        </div>
    </section>

    <section class="section">
        <div class="section-header">
            <div>
                <h2 class="section-title">Novidades na Loja</h2>
                <p class="section-subtitle">Confira os últimos lançamentos!</p>
            </div>
            <a href="<?php echo get_permalink( wc_get_page_id( 'shop' ) ); ?>" class="see-more-link">Ver loja completa <i class='bx bx-right-arrow-alt'></i></a>
        </div>
        
        <?php echo do_shortcode('[products limit="4" columns="4" orderby="date" order="DESC"]'); ?>
    </section>

    <section class="cta-banner" style="background-image: linear-gradient(rgba(11, 42, 74, 0.7), rgba(0, 0, 0, 0.8)), url('<?php echo get_template_directory_uri(); ?>/assets/img/background.png');">
        <div class="cta-overlay"></div>
        <div class="cta-content">
            <h2>ESTILO E PRESENÇA</h2>
            <p>Eleve seu estilo com nossas peças premium. Conforto, atitude e design impecável em cada detalhe.</p>
            <a href="<?php echo get_permalink( wc_get_page_id( 'shop' ) ); ?>" class="btn">Explorar Agora</a>
        </div>
    </section>

    <section class="section">
        <div class="section-header">
            <div>
                <h2 class="section-title">Mais Vendidos</h2>
                <p class="section-subtitle">As escolhas favoritas da nossa comunidade!</p>
            </div>
        </div>
        
        <?php echo do_shortcode('[products limit="4" columns="4" best_selling="true"]'); ?>
    </section>

    <section class="newsletter-section">
        <div class="newsletter-container">
            <div class="newsletter-text">
                <h2>Faça parte do Clube XFLEX</h2>
                <p>Receba ofertas exclusivas, cupons de desconto e fique por dentro dos próximos lançamentos antes de todo mundo.</p>
            </div>
            
            <div class="newsletter-form-wrapper">
                <?php echo do_shortcode('[mc4wp_form id=113]'); ?>
            </div>
            
        </div>
    </section>

</main>

<?php get_footer(); ?>