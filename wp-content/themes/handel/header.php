<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
    <link rel="stylesheet" href="style.css">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php 
//Pegando url da imagem
$img_url = get_stylesheet_directory_uri() . '/img'; // Url para pegar a imagem
$cart_count = WC()->cart->get_cart_contents_count(); // url par pegar as informações do carrinho
?>   
<header class="header container">
    <a href="/"><img src="<?php echo $img_url; ?>/handel.svg" alt="Handel" /></a>
    <div class="busca">
        <form action="<?php bloginfo('url'); ?>/loja/" method="get">
            <input type="text" name="s" id="s" placeholder="Buscar" value="<?php the_search_query(); ?>" /> 
            <input type="text" name="post_type" value="product" class="hidden" />
            <input type="submit" id="searchbutton" value="Buscar" />
        </form>
    </div>
    <div class="conta">
        <a href="/handel/minha-conta" class="minha-conta">Minha conta</a>
        <a href="/handel/carrinho" class="carrinho">Carrinho
            <?php if($cart_count) { ?>
                <spam class="carrinho-count"><?php echo $cart_count; ?></spam>
            <?php } ?>
        </a>
    </div>
</header>

<?php

wp_nav_menu([
    'menu' => 'categorias',
    'container' => 'nav',
    'container_class' => 'menu-categorias',
])

?>