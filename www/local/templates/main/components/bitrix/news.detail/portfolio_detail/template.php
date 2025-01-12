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
<?php if (!empty($arResult['ID'])): ?>
    <div class="single-portfolio-area pt-90 pb-60">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="portfolio-details">
                        <h3><?= $arResult["NAME"] ?? ''; ?></h3>
                        <?php if (!empty($arResult['PROPERTIES']['DESCRIPTION']['VALUE'])): ?>
                            <?php foreach ($arResult['PROPERTIES']['DESCRIPTION']['VALUE'] as $keyValue => $propValue): ?>

                                <?php if (!empty($arResult['PROPERTIES']['DESCRIPTION']['DESCRIPTION'][$keyValue])): ?>
                                    <span class="text-colort-blue">
                                        <?= $arResult['PROPERTIES']['DESCRIPTION']['DESCRIPTION'][$keyValue]; ?>
                                    </span>
                                <?php endif; ?>

                                <?php if (!empty($propValue)): ?>
                                    <p><?= $propValue['TEXT']; ?></p>
                                <?php endif; ?>

                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                </div>

                <?php if (!empty($arResult['PROPERTIES']['ADD_INFO']['VALUE'])): ?>
                    <div class="col-md-5">
                        <div class="portfolio-meta">
                            <ul>
                                <?php foreach ($arResult['PROPERTIES']['ADD_INFO']['VALUE'] as $keyValue => $propValue): ?>
                                    <li>
                                        <span><b><?= $propValue ?? ''; ?>:</b></span> <?= $arResult['PROPERTIES']['ADD_INFO']['DESCRIPTION'][$keyValue] ?? ''; ?>
                                    </li>
                                <?php endforeach; ?>
                            </ul>

                            <?php if ($arResult['PROPERTIES']['LINK']['VALUE']): ?>
                                <a href="<?= $arResult['PROPERTIES']['LINK']['DESCRIPTION'] ?? ''; ?>" class="btn mt-30">
                                    <?= $arResult['PROPERTIES']['LINK']['VALUE'] ?>
                                </a>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <?php if (!empty($arResult['PROPERTIES']['GALLERY']['VALUE'])): ?>
        <div class="img-gallery-area pt-30 pb-60">
            <div class="container">
                <div class="row">
                    <?php foreach ($arResult['PROPERTIES']['PHOTOS'] as $photo): ?>
                        <div class="col-md-6 col-sm-4">
                            <div class="img-gallery hover-bg-opacity mb-30">
                                <a class="image-link" href="<?= $photo['SRC']; ?>">
                                    <img src="<?= $photo['SRC'] ?>" alt="" /></a>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    <?php endif; ?>

<?php else: ?>
    <div class="single-portfolio-area pt-90 pb-60">
        Элемент не найден
    </div>
<?php endif; ?>
