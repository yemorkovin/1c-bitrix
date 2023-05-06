<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetTitle("О нас");
$APPLICATION->SetPageProperty('TITLE', 'О нас');
?>

<!-- О нас -->
<section class="who-area-are pad-90" id="about_us">
    <div class="container">
        <h2 class="title-1">
        	  <?$APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            "",
                            Array(
                                "AREA_FILE_SHOW" => "file",
                                "PATH" => SITE_TEMPLATE_PATH."/includes/about/about_h2.php"
                            )
                        );?>
        </h2>
        <div class="row">
            <div class="col-md-7">
                <div class="who-we">
                	  <?$APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            "",
                            Array(
                                "AREA_FILE_SHOW" => "file",
                                "PATH" => SITE_TEMPLATE_PATH."/includes/about/about_txt.php"
                            )
                        );?>

                </div>
            </div>
            <div class="col-md-5">
                <div class="about-bg">
                  <?$APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            "",
                            Array(
                                "AREA_FILE_SHOW" => "file",
                                "PATH" => SITE_TEMPLATE_PATH."/includes/about/about_img.php"
                            )
                        );?>
                </div>
            </div>
        </div>
    </div>
</section>
<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>