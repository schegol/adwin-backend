<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);?>

<?if (!empty($arResult)):?>
    <ul class="header__image-menu image-menu">
        <?foreach($arResult as $arItem):?>
            <li class="image-menu__item">
                <a class="image-menu__link" href="<?=$arItem['LINK']?>">
                    <img class="image-menu__img" src="<?=$arItem['PARAMS']['IMG']?>" alt="<?=GetMessage('MENU_HEADER_IMAGE_IMG_ALT', array ('#NAME#' => $arItem['TEXT']))?>" width="446" height="233">
                    <h2 class="image-menu__title"><?=$arItem['TEXT']?></h2>
                </a>
            </li>
        <?endforeach?>
    </ul>
<?endif?>
