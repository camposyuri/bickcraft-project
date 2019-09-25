<?php get_header(); ?>


<section class="section-home banner-home">
    <div class="container text-center py-3 py-md-5">
        <h1 class="text-white pt-5 title-home text-uppercase">Bicicletas feitas a mãos</h1>
        <div class="col-md-6 m-auto py-3">
            <hr class="hr-col">
            <span class="text-white span-format">“não tenha nada em sua casa que você não considere útil ou acredita ser bonito”</span>
            <hr class="hr-col">
        </div>
        <p class="text-white text-uppercase pt-3">William Morris</p>
        <div class="col-md-12 d-flex justify-content-center">
            <a href="#" class="btn btn-home text-uppercase">Orçamento</a>
        </div>
    </div>
</section>

<section class="section-home-products py-5">
    <div class="container pt-3">
        <h1 class="text-center text-uppercase title-home-products">Produtos</h1>
        <hr class="hr-col">
        <div class="row">
            <div class="col-md-4 pt-3">
                <div class="card">
                    <img class="card-img-top img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/passeio.png"
                         alt="Imagem de capa do card">
                    <div class="card-body">
                        <h6 class="title-card-products text-uppercase text-center">Passeio</h6>
                        <hr class="hr-col">
                        <p class="card-text pt-3">Ainda assim, existem dúvidas a respeito de como a necessidade de renovação</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 pt-3">
                <div class="card">
                    <img class="card-img-top img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/esporte.png"
                         alt="Imagem de capa do card">
                    <div class="card-body">
                        <h6 class="title-card-products text-uppercase text-center">Esporte</h6>
                        <hr class="hr-col">
                        <p class="card-text pt-3">Ainda assim, existem dúvidas a respeito de como a necessidade de renovação</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 pt-3">
                <div class="card">
                    <img class="card-img-top img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/retro.png"
                         alt="Imagem de capa do card">
                    <div class="card-body">
                        <h6 class="title-card-products text-uppercase text-center">Retro</h6>
                        <hr class="hr-col">
                        <p class="card-text pt-3">Ainda assim, existem dúvidas a respeito de como a necessidade de renovação</p>
                    </div>
                </div>
            </div>

            <p class="text-center m-auto py-3 paragraph-text">clique aqui e veja os detalhes dos produtos</p>
            <div class="col-md-12 d-flex justify-content-center">
                <a href="#" class="btn btn-products text-uppercase">Produtos</a>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>




