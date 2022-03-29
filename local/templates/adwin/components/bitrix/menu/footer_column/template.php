<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);?>

<?if (!empty($arResult)):?>
    <ul class="footer-menu__list">
        <?foreach($arResult as $arItem):?>
            <li class="footer-menu__item">
                <a class="footer-menu__link" href="<?=$arItem['LINK']?>"><?=$arItem['TEXT']?></a>
            </li>
        <?endforeach?>
    </ul>
<?endif?>
