<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Myshop</title>
    <link rel="stylesheet" href="styles/site.css">
</head>
<body>
<header>
    <div id ="headerInside">
        <div id="logo"></div>
        <div id="companyname">Brand</div>
        <div id="navwrap">
            <a href="/">Main</a>
            <a href="index.php?page=shop">Shop</a>
        </div>
    </div>
</header>
<div id="content">
    <?php
    $page = $_GET['page'];

    if (!isset($page)) {
        require('templates/main.php');
    } elseif ($page == 'shop') {
        require('templates/shop.php');
    }

    ?>
</div>

<footer>
    <div id="footerInside">

        <div id="contacts">
            <div class="contactWrap">

                info@brandshop.ru
            </div>
            <div class="contactWrap">

                8 800 000 00 00
            </div>
            <div class="contactWrap">

                Adress Shop
            </div>
        </div>

        <div id="footerNav">
            <a href="/">Main</a>
            <a href="index.php?page=shop">Shop</a>
        </div>

        <div id="social">
            <img class="socialItem" src="images/vk-social-logotype.svg">
            <img class="socialItem" src="images/google-plus-social-logotype.svg">
            <img class="socialItem" src="images/facebook-logo.svg">
        </div>

        <div id="copyrights">&copy; Brand</div>
    </div>
</footer>

</body>
</html>