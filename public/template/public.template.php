<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style/public.style.css">
    <link rel="stylesheet" media="screen and (min-width: 1600px)" href="style/l-public.style.css"/>
    <link rel="stylesheet" media="screen and (min-width: 2000px)" href="style/xl-public.style.css"/>
    <link rel="stylesheet" media="screen and (max-width: 850px)" href="style/m-public.style.css"/>
    <link rel="stylesheet" media="screen and (max-width: 700px)" href="style/s-public.style.css"/>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;0,800;1,600&display=swap"
          rel="stylesheet">
    <title><?= $pageTitle ?? 'Antiques Dealer' ?></title><!--(public) is to del-->
</head>
<body>
<div id="background"></div>
<div id="background-dark"></div>
<header>
    <nav>
        <ul>
            <li><a href="?page=presentation">Présentation</a></li>
            <li><a href="?page=items">Catalogue<em> &#9660</em></a></li>
            <li><a href="?page=promotions">Promotions</a></li>
            <li><a href="?page=shops#shop-box">Magasins</a></li>
            <li><a href="?page=home#h-form">Contact</a></li>

        </ul>
    </nav>
    <div id="logo">
        <a href="?page=home"><img src="icon/AD@2x.png" alt=""></a>
    </div>
<!--    <a href="?page=home">-->
<!--        <h1>Antiques</h1>-->
<!--        <h1>Dealer</h1>-->
<!--    </a>-->
<!--    <div id="support">-->
<!--        <div>-->
<!--            <h4>"Trouvez la pièce d'<em class="italic-bold">exeption</em><br>et de <em-->
<!--                        class="italic-bold">collection</em> qui vous manque"</h4>-->
<!--            <p class="gold-txt"><a class="gold-txt" href="">Voir les articles disponibles</a></p>-->
<!--        </div>-->
<!--    </div>-->

</header>

<main>
    <?php
    if (isset($_GET['error'])) {
        echo $_GET['error'];
    }
    echo $pageContent;
    ?>
</main>
<footer>
    <a href="?page=login" style="">Connect as administrator</a>
</footer>
<script>

</script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
</body>
</html>