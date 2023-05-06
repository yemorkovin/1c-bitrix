<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>

<!-- Основные направления -->
<section class="service-area pt-90 pb-60 bg-color">
    <div class="container">
        <div class="row">
            <div class="section-heading text-center mb-70">
                <h2>
                	<?$APPLICATION->IncludeComponent(
						"bitrix:main.include",
						"",
						Array(
							"AREA_FILE_SHOW" => "file",
							"PATH" => SITE_TEMPLATE_PATH."/includes/index/index_ser.php"
						)
					);?>
                </h2>
                <p>
                	<?$APPLICATION->IncludeComponent(
						"bitrix:main.include",
						"",
						Array(
							"AREA_FILE_SHOW" => "file",
							"PATH" => SITE_TEMPLATE_PATH."/includes/index/index_ser_txt.php"
						)
					);?>
                </p>
            </div>
        </div>
        <div class="row">
        	<?foreach($arResult["ITEMS"] as $arItem):?>

            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="single-service brand-hover radius-4 mb-30 text-center">
                    <div class="service-icon">
                    	<?= $arItem["DETAIL_TEXT"]?>
                    </div>
                    <div class="service-text">
                        <h3><?= $arItem["NAME"]?></h3>
                        <p><?= $arItem["PREVIEW_TEXT"]?></p>
                    </div>
                </div>
            </div> 
            <?endforeach;?>  
        </div>
    </div>
</section>