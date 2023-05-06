<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();

use Bitrix\Main\Page\Asset;
?>
<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
	
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title><?$APPLICATION->ShowTitle();?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">

    <!-- Шрифты -->
    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">

    <?php 
		Asset::getInstance()->addCss(SITE_TEMPLATE_PATH."/assets/css/bootstrap.min.css");
		Asset::getInstance()->addCss(SITE_TEMPLATE_PATH."/assets/css/owl.carousel.css");
		Asset::getInstance()->addCss(SITE_TEMPLATE_PATH."/assets/css/animate-text.css");
		Asset::getInstance()->addCss(SITE_TEMPLATE_PATH."/assets/css/magnific-popup.css");
		Asset::getInstance()->addCss(SITE_TEMPLATE_PATH."/assets/css/et-line.css");
		Asset::getInstance()->addCss(SITE_TEMPLATE_PATH."/assets/css/pe-icon-7-stroke.css");
		Asset::getInstance()->addCss(SITE_TEMPLATE_PATH."/assets/css/font-awesome.min.css");
		Asset::getInstance()->addCss(SITE_TEMPLATE_PATH."/assets/css/responsive.css");
		Asset::getInstance()->addCss(SITE_TEMPLATE_PATH."/assets/style.css");

		Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/assets/js/vendor/modernizr-2.8.3.min.js");

    ?>
    <?$APPLICATION->ShowHead();?>
</head>
<body>
<div id="panel">
			<?$APPLICATION->ShowPanel();?>
		</div>

<!--[if lt IE 8]>
<p class="browserupgrade">Вы используете <strong>устаревший</strong> браузер. Пожалуйста
    <a href="http://browsehappy.com/">обновите его</a>
</p>
<![endif]-->

<!-- Линия с контактами -->
<div class="header-top-area bg-color ptb-10 hidden-xs <?= ($APPLICATION->GetCurDir() === '/')? 'bread-none':'bread-block' ?>">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <div class="welcome">
                    <span>
                        <?$APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            "",
                            Array(
                                "AREA_FILE_SHOW" => "file",
                                "PATH" => SITE_TEMPLATE_PATH."/includes/header_email.php"
                            )
                        );?>
                    </span>
                    <span>
                        <?$APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            "",
                            Array(
                                "AREA_FILE_SHOW" => "file",
                                "PATH" => SITE_TEMPLATE_PATH."/includes/header_phone.php"
                            )
                        );?>
                    </span>
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

<!-- Шапка сайта (меню) -->
<header id="sticky-header" class="header-area header-wrapper <?= ($APPLICATION->GetCurDir() === '/')? 'transparent-header':'white-bg' ?>">
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

                    <div class="col-md-10 col-sm-9 col-xs-4 text-right dark-menu">
                    <!-- Меню (основное) -->
                        <?$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"top_menu", 
	array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "left",
		"DELAY" => "N",
		"MAX_LEVEL" => "2",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "N",
		"MENU_CACHE_USE_GROUPS" => "N",
		"ROOT_MENU_TYPE" => "top",
		"USE_EXT" => "N",
		"COMPONENT_TEMPLATE" => "top_menu"
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

<!-- Хлебные крошки (навигация) -->
<div class="breadcrumb-area brand-bg ptb-100 <?= ($APPLICATION->GetCurDir() === '/')? 'bread-none':'bread-block' ?>">
    <div class="container width-100">
        <div class="row z-index">
            <div class="col-md-7 col-sm-6">
                <div class="breadcrumb-title">
                    <h2 class="white-text"><?=$APPLICATION->ShowTitle(false)?></h2>
                </div>
            </div>
            <div class="col-md-5 col-sm-6">
                <div class="breadcrumb-menu">
                    <ol class="breadcrumb text-right">
                        <li>
                            <a href="index.html">Главная</a>
                        </li>
                        <li>
                            <a href="#">О нас</a>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>