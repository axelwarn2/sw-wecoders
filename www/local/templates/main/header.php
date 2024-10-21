<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();

use Bitrix\Main\Page\Asset;

$asset = Asset::getInstance();

$asset->addCss(SITE_TEMPLATE_PATH . "/assets/css/bootstrap.min.css");
$asset->addCss(SITE_TEMPLATE_PATH . "/assets/css/owl.carousel.css");
$asset->addCss(SITE_TEMPLATE_PATH . "/assets/css/animate-text.css");
$asset->addCss(SITE_TEMPLATE_PATH . "/assets/css/magnific-popup.css");
$asset->addCss(SITE_TEMPLATE_PATH . "/assets/css/et-line.css");
$asset->addCss(SITE_TEMPLATE_PATH . "/assets/css/pe-icon-7-stroke.css");
$asset->addCss(SITE_TEMPLATE_PATH . "/assets/css/shortcode/shortcodes.css");
$asset->addCss(SITE_TEMPLATE_PATH . "/assets/css/meanmenu.min.css");
$asset->addCss(SITE_TEMPLATE_PATH . "/assets/css/font-awesome.min.css");
$asset->addCss(SITE_TEMPLATE_PATH . "/assets/style.css");
$asset->addCss(SITE_TEMPLATE_PATH . "/assets/css/responsive.css");

$asset->addJs(SITE_TEMPLATE_PATH . "/assets/js/vendor/modernizr-2.8.3.min.js");
$asset->addJs(SITE_TEMPLATE_PATH . "/assets/js/vendor/jquery-1.12.0.min.js");
$asset->addJs(SITE_TEMPLATE_PATH . "/assets/js/bootstrap.min.js");
$asset->addJs(SITE_TEMPLATE_PATH . "/assets/js/owl.carousel.min.js");
$asset->addJs(SITE_TEMPLATE_PATH . "/assets/js/jquery.counterup.min.js");
$asset->addJs(SITE_TEMPLATE_PATH . "/assets/js/waypoints.min.js");
$asset->addJs(SITE_TEMPLATE_PATH . "/assets/js/jquery.magnific-popup.min.js");
$asset->addJs(SITE_TEMPLATE_PATH . "/assets/js/jquery.mixitup.min.js");
$asset->addJs(SITE_TEMPLATE_PATH . "/assets/js/jquery.meanmenu.js");
$asset->addJs(SITE_TEMPLATE_PATH . "/assets/js/jquery.nav.js");
$asset->addJs(SITE_TEMPLATE_PATH . "/assets/js/jquery.parallax-1.1.3.js");
$asset->addJs(SITE_TEMPLATE_PATH . "/assets/js/animate-text.js");
$asset->addJs(SITE_TEMPLATE_PATH . "/assets/js/plugins.js");
$asset->addJs(SITE_TEMPLATE_PATH . "/assets/js/js/main.js");

$asset->addString('<meta name="viewport" content="width=device-width, initial-scale=1">');
$asset->addString('<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">');
?>

<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
	<?$APPLICATION->ShowHead();?>
    <title><?$APPLICATION->ShowTitle();?></title>
    <link rel="shortcut icon" type="image/x-icon" href="<?=SITE_TEMPLATE_PATH?>/assets/img/favicon.png">
</head>
<body>
<?=$APPLICATION->ShowPanel();?>
<!--[if lt IE 8]>
<p class="browserupgrade">Вы используете <strong>устаревший</strong> браузер. Пожалуйста
    <a href="http://browsehappy.com/">обновите его</a>
</p>
<![endif]-->

<!-- Линия с контактами -->
<?php if($APPLICATION->GetCurDir() !== '/'):?>
<div class="header-top-area bg-color ptb-10 hidden-xs">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <div class="welcome">
                    <span><?$APPLICATION->IncludeComponent(
                        "bitrix:main.include","",
                        Array(
                            "AREA_FILE_SHOW" => "file",
                            "PATH" => SITE_TEMPLATE_PATH . "/includes/header_email.php"
                        )
                    );?>
                    </span>
                    <span><?$APPLICATION->IncludeComponent(
                        "bitrix:main.include", "",
                        Array(
                            "AREA_FILE_SHOW" => "file",
                            "PATH" => SITE_TEMPLATE_PATH . "/includes/header_phone.php"
                        )
                    );?></span>
                </div>
            </div>
            <div class="col-md-6 col-sm-6">
                <div class="social-icon-header text-right">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-linkedin"></i></a>
                    <a href="#"><i class="fa fa-google-plus"></i></a>
                    <a href="#"><i class="fa fa-youtube"></i></a>
                    <a href="#"><i class="fa fa-dribbble"></i></a>
                    <a href="#"><i class="fa fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php endif;?>

<!-- Шапка сайта (меню) -->
<header id="sticky-header" class="header-area header-wrapper <?= $APPLICATION->GetCurDir() === '/' ? 'transparent-header' : 'white-bg'?>">
    <!-- Меню (для десктопа) -->
    <div class="header-middle-area full-width">
        <div class="container">
            <div class="full-width-mega-dropdown">
                <div class="row">
                    <!-- Логотип -->
                    <div class="col-md-2 col-sm-3 col-xs-8">
                        <div class="logo ptb-22">
                            <a href="index.html">
                                <img src="<?=SITE_TEMPLATE_PATH?>/assets/img/logo/logo.png" alt="main logo">
                            </a>
                        </div>
                    </div>

                    <!-- Меню (основное) -->
                    <div class="col-md-10 col-sm-9 col-xs-4 text-right dark-menu">

                    <?$APPLICATION->IncludeComponent("bitrix:menu", 
                    "top", 
                    Array(
                        "ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
                            "CHILD_MENU_TYPE" => "subtop",	// Тип меню для остальных уровней
                            "DELAY" => "N",	// Откладывать выполнение шаблона меню
                            "MAX_LEVEL" => "2",	// Уровень вложенности меню
                            "MENU_CACHE_GET_VARS" => array(	// Значимые переменные запроса
                                0 => "",
                            ),
                            "MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
                            "MENU_CACHE_TYPE" => "N",	// Тип кеширования
                            "MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
                            "ROOT_MENU_TYPE" => "top",	// Тип меню для первого уровня
                            "USE_EXT" => "Y",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
                        ),
                        false
                    );?>

                        <!-- Поиск -->
                        <div class="header-right">
                            <div class="header-search">
                                <div class="search-wrapper">
                                    <a href="javascript:void(0);" class="search-open">
                                        <i class="pe-7s-search"></i>
                                    </a>
                                    <div class="search-inside animated bounceInUp">
                                        <i class="icon-close search-close fa fa-times"></i>
                                        <div class="search-overlay"></div>
                                        <div class="position-center-center">
                                            <div class="search">
                                                <form>
                                                    <input type="search" placeholder="Поиск по сайту">
                                                    <button type="submit"><i class="fa fa-search"></i></button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Меню (для мобилки) -->
    <div class="mobile-menu-area visible-xs">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mobile-menu">
                        <nav id="dropdown">
                            <ul>
                                <li>
                                    <a href="index.html">Главная</a>
                                </li>
                                <li>
                                    <a href="about_us.html">О нас</a>
                                </li>
                                <li>
                                    <a href="services.html">Услуги</a>
                                    <ul>
                                        <li>
                                            <a href="services_landing.html">Лендинг</a>
                                        </li>
                                        <li>
                                            <a href="services_online_shop.html">Интернет-магазин</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>                                    <a href="portfolio.html">Портфолио</a>                                </li>

                                <li>
                                    <a href="blog.html">Блог</a>
                                </li>
                                <li>
                                    <a href="contacts.html">Контакты</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<?php if($APPLICATION->GetCurDir() !== '/'):?>
<!-- Хлебные крошки (навигация) -->
<div class="breadcrumb-area brand-bg ptb-100">
    <div class="container width-100">
        <div class="row z-index">
            <div class="col-md-7 col-sm-6">
                <div class="breadcrumb-title">
                    <h2 class="white-text"><?= $APPLICATION->ShowTitle(false);?></h2>
                </div>
            </div>
            <?$APPLICATION->IncludeComponent(
        "bitrix:breadcrumb",
            "top_navigate",
            Array(
                "PATH" => "",
                "SITE_ID" => "s1",
                "START_FROM" => "0"
                )
            );?>
        </div>
    </div>
</div>
<?php endif;?>
