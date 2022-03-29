<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);?>

<?if (!empty($arResult['ITEMS'])):?>
    <div class="footer__social social">
        <h2 class="social__heading"><?=GetMessage('NEWS_LIST_FOOTER_SOCIAL_BLOCK_HEADING')?></h2>
        <ul class="social__list">
            <?foreach ($arResult['ITEMS'] as $arItem):?>
                <li class="social__item">
                    <a class="social__link" href="<?=$arItem['PROPERTIES']['LINK']['VALUE']?>" target="_blank">
                        <img class="social__img" src="<?=CFile::GetPath($arItem['PROPERTIES']['ICON']['VALUE'])?>" alt="<?=GetMessage('NEWS_LIST_FOOTER_SOCIAL_ICON_ALT', array ('#NAME#' => $arItem['NAME']))?>" width="52" height="52">
                    </a>
                </li>
            <?endforeach?>
        </ul>
    </div>
<?endif?>
