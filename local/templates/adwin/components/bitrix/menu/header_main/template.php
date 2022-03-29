<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);?>

<?if (!empty($arResult)):?>
    <nav class="header__menu header-menu">
        <ul class="header-menu__list">
            <?foreach($arResult as $arItem):?>
                <li class="header-menu__item">
                    <a class="header-menu__link" href="<?=$arItem['LINK']?>"><?=$arItem['TEXT']?></a>
                </li>
            <?endforeach?>
        </ul>
    </nav>
<?endif?>
