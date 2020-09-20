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

    <!-- ARTICLE -->
    <?php
    require($configThemePath . "/news-article.php");
    ?>
    <!-- /ARTICLE -->
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