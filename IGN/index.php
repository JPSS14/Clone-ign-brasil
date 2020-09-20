<?php
ob_start();
define("BASE", "http://localhost/Clone/IGN/");
define("THEME", "IGN");
define("THEME_PATH", __DIR__ . "/Themes/" . THEME);
define("THEME_LINK", BASE . "/Theme/" . THEME);

$configBase = BASE;
$configUrl = explode("/", strip_tags(filter_input(INPUT_GET, "url", FILTER_DEFAULT)));
$configUrl[0] = (!empty($configUrl[0]) ? $configUrl[0] : "index");
$configThemePath = THEME_PATH;
$configThemeLink = THEME_LINK;
$configSiteName = "IGN";
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//db.onlinewebfonts.com/c/4629c048a3822d4fed2b0472eb3e708f?family=ARS+Maquette+Pro+Light" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="Styles/boot.css">
    <link rel="stylesheet" href="Themes/IGN/style.css">
    <title>Sony fechará fábrica em Manaus em 2021</title>
</head>

<body>
    <!-- HEADER -->
    <?php
    require($configThemePath . "/header.php");
    ?>
    <!-- /HEADER -->

    <article class="news_article">
        <header class="news_article_header">
            <a class="news_article_link_content" href="#">SONY</a>
            <h1 class="news_article_header_title">Sony fechará fábrica em Manaus em 2021</h1>
            <p class="news_article_header_subtitle">Empresa vai parar de comercializar TVs, câmeras digitais e produtos de áudio no país</p>
            <!-- <a href="#">Facebook</a>
            <a href="#">Twitter</a>
            <a href="#">+</a> -->
            <div class="news_article_header_author">
                <img class="news_article_header_author_img" src="<?= BASE . "/Uploads/autor1.webp" ?>">
                <p class="news_article_header_author_info">by <a href="#">Bruno Yonezawa</a></p>
                <p class="news_article_header_update">Atualizado 15 de Setembro de 2020 às 11:00</p>
                <p class="news_article_header_create">Publicado 15 de Setembro de 2020 às 10:48</p>
            </div>
        </header>

        <p class="news_article_content_f">
            A Sony anunciou, na última segunda-feira (14), que fechará a fábrica na Zona Franca de Manaus em março de 2021 e que encerrará a venda de TVs, câmeras digitais e produtos de áudio (fones de ouvido, home theaters, speakers) em meados do ano que vem.
        </p>
        <p class="news_article_content">
            As outras extensões do grupo no país, como games, soluções profissionais, música e cinema, permanecerão ativas. A venda do PS4 e PS5 continuará, por exemplo, via distribuidor local -- os consoles da marca não são montados no país desde 2017.
        </p>

        <p class="news_article_content"><strong>PS5 - Primeiras imagens do console</strong></p>

        <div class="img_slide">
            <img id="main-img" class="main-img" src="<?= $configBase . "/Uploads/ps5-3.jpg" ?>" alt="PS5-1" title="PS5-1">
            <div class="img_slide_alternative">
                <?php
                for ($i = 1; $i < 5; $i++) {
                ?>
                    <img class="alternative-img" src="<?= $configBase . "/Uploads/ps5-". $i .".jpg" ?>" alt="PS5" title="PS5" onclick="changeImage('main-img', '<?= $configBase . '/Uploads/ps5-'. $i .'.jpg' ?>');">
                <?php
                }
                ?>
            </div>
        </div>

        <p class="news_article_content">
            Além disso, a Sony promete que continuará mantendo a operação local "para oferecer todo suporte ao consumidor para os produtos sob a sua responsabilidade comercial de acordo com as leis aplicáveis e sua política de garantia de produtos".
        </p>
        <p class="news_article_content">
            O grupo Sony operou no Brasil ao longo de 48 anos. Segundo a empresa, a medida foi tomada "considerando o ambiente recente de mercado e a tendência esperada para os negócios". A companhia também diz: "A decisão visa fortalecer a estrutura e a sustentabilidade de seus negócios, para responder às rápidas mudanças no ambiente externo."
        </p>
        <p class="news_article_content">
            As informações vêm por meio de uma carta da Sony direcionada a varejistas, parceiros, fornecedores e funcionários. A apuração foi realizada pelo Interfaces.
        </p>
    </article>
</body>

<script type="text/javascript">
    function changeImage(object, newImage) {
        document.getElementById(object).src = newImage;
    }
</script>

</html>
<?php
ob_end_flush();
?>