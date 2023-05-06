<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();
?>
<!-- Футер -->
<footer class="footer-style-2">
    <div class="footer-top-area brand-bg pad-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="footer-widget footer-widget-center text-center">
                        <!-- Лого + текст -->
                        <div class="footer-logo">
                            <a href="#">
                                <img src="img/logo/logo-white.png" alt=""/>
                            </a>
                        </div>
                        <p>Если вы похожи на большинство компаний, у вас нет маркетингового бюджета в миллион
                           долларов<br>
                           или своей команды разработки. Но это не значит, что у вас не может быть<br>
                           сайта мирового класса. И мы вам в этом поможем!</p>

                        <!-- Соц. сети -->
                        <div class="social-icon">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-google-plus"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                            <a href="#"><i class="fa fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- нижнее меню -->
    <div class="footer-bottom-area pad-20 brand-bg footer-border">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-5 col-sm-12">
                    <div class="copyright white-text">
                        <p>We Coders © 2018</p>
                    </div>
                </div>

               
                <?$APPLICATION->IncludeComponent(
					"bitrix:menu", 
					"bottom_menu", 
					array(
						"ALLOW_MULTI_SELECT" => "N",
						"DELAY" => "N",
						"MAX_LEVEL" => "1",
						"MENU_CACHE_GET_VARS" => array(
						),
						"MENU_CACHE_TIME" => "3600",
						"MENU_CACHE_TYPE" => "N",
						"MENU_CACHE_USE_GROUPS" => "N",
						"ROOT_MENU_TYPE" => "bottom",
						"USE_EXT" => "N",
						"COMPONENT_TEMPLATE" => "bottom_menu"
					),
					false
				);?>
            </div>
        </div>
    </div>
</footer>


<!-- Скрипиты (JS) -->
<!-- jQuery js -->
<script src="<?=SITE_TEMPLATE_PATH?>/assets/js/vendor/jquery-1.12.0.min.js"></script>
<!-- bootstrap js -->
<script src="<?=SITE_TEMPLATE_PATH?>/assets/js/bootstrap.min.js"></script>
<!-- owl.carousel js -->
<script src="<?=SITE_TEMPLATE_PATH?>/assets/js/owl.carousel.min.js"></script>
<!-- counterup js -->
<script src="<?=SITE_TEMPLATE_PATH?>/assets/js/jquery.counterup.min.js"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/assets/js/waypoints.min.js"></script>
<!-- magnific-popup js -->
<script src="<?=SITE_TEMPLATE_PATH?>/assets/js/jquery.magnific-popup.min.js"></script>
<!-- mixitup js -->
<script src="<?=SITE_TEMPLATE_PATH?>/assets/js/jquery.mixitup.min.js"></script>
<!-- mixitup js -->
<script src="<?=SITE_TEMPLATE_PATH?>/assets/js/jquery.meanmenu.js"></script>
<!-- jquery.nav js -->
<script src="<?=SITE_TEMPLATE_PATH?>/assets/js/jquery.nav.js"></script>
<!-- jquery.nav js -->
<script src="<?=SITE_TEMPLATE_PATH?>/assets/js/jquery.parallax-1.1.3.js"></script>
<!-- animate text js -->
<script src="<?=SITE_TEMPLATE_PATH?>/assets/js/animate-text.js"></script>
<!-- plugins js -->
<script src="<?=SITE_TEMPLATE_PATH?>/assets/js/plugins.js"></script>
<!-- main js -->
<script src="<?=SITE_TEMPLATE_PATH?>/assets/js/main.js"></script>
</body>
</html>
