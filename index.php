<?php get_header(); ?>

<main>
    <section id="home" class="hero">
        <h2>Encontre o Colchão dos Seus Sonhos</h2>
        <p>Qualidade e conforto garantidos para o seu descanso perfeito!</p>
        <button>Compre Agora</button>
    </section>

    <section id="produtos" class="produtos">
        <h2>Nossos Produtos</h2>
        <div class="produto-item">
            <img src="<?php echo get_template_directory_uri(); ?>/images/colchao1.jpg" alt="Colchão Conforto">
            <h3>Colchão Conforto</h3>
            <p>Descrição do produto aqui.</p>
            <button>Detalhes</button>
        </div>
        <div class="produto-item">
            <img src="<?php echo get_template_directory_uri(); ?>/images/colchao2.jpg" alt="Colchão Luxo">
            <h3>Colchão Luxo</h3>
            <p>Descrição do produto aqui.</p>
            <button>Detalhes</button>
        </div>
        <!-- Adicione mais produtos conforme necessário -->
    </section>

    <section id="sobre" class="sobre">
        <h2>Sobre Nós</h2>
        <p>Informações sobre a empresa, missão, visão e valores.</p>
    </section>

    <section id="contato" class="contato">
        <h2>Contato</h2>
        <p>Entre em contato conosco através do email ou telefone.</p>
    </section>
</main>

<?php get_footer(); ?>