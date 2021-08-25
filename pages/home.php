<h1 class="text-center">Home</h1>
<section class="row mt-3 mb-3">
    <h3 class="text-center">Sobre nós</h3>
    <article class="sobre-nos">
        <div class="foto">
            <img src="images/home1.png" class="sobre-nos-img" alt="Sobre Nós">
        </div>
        <div class="content">
            <p>A Doceria Docinho oferece os melhores doces caseiros. Temos 3 lojas para melhor atende-los, além da nossa loja virtual que estamos reformulando para tornar a sua experiência de navegação melhor e mais segura.Dedicamos todo o nosso carinho e amor em cada pedacinho de doce, pensando sempre em nossos clientes..</p> 
        </div>
    </article>
</section>

<div class="row">
    <h3 class="text-center mb-3">Conheça nossos principais produtos</h3>
    <section class="produtos">
        <?php foreach ($produtos as $produto): ?>
                <article class="card-produto">
                    <div class="card-produto-header">
                    <img class="img-responsive produto-img" src="images/<?=$produto['img'];?>" alt="<?=$produto['nome'];?>">
                        <a href="?page=produto&id=<?=$produto['id'];?>"><div class="card-title"><h4><?=$produto['nome'];?></h4></div></a>
                        <a href="?page=produto&id=<?=$produto['id'];?>" class="btn btn-primary">Saiba Mais</a>
                    </div>
                    
                </article>
        <?php endforeach; ?>
    </section>
</div>
