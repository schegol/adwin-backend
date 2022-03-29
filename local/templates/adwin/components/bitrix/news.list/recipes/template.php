<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);?>

<?if (!empty($arResult['ITEMS'])):?>
    <section class="recipes">
        <h2 class="recipes__heading">
            <?=GetMessage('NEWS_LIST_RECIPES_BLOCK_HEADING')?>
        </h2>
        <div class="recipes__list">
            <?foreach ($arResult['ITEMS'] as $arItem):
                $new = false;
                if ($arItem['PROPERTIES']['NEW']['VALUE'] == 'Y')
                    $new = true;
            ?>
                <div class="recipes__item<?=$new ? ' recipes__item--new': ''?>">
                    <?if ($new):?>
                        <span class="recipes__new-tag"><?=GetMessage('NEWS_LIST_RECIPES_NEW')?></span>
                    <?endif?>
                    <a class="recipes__item-img-link" href="<?=$arItem['DETAIL_PAGE_URL']?>">
                        <img class="recipes__item-img" src="<?=$arItem['PREVIEW_PICTURE']['SRC']?>" alt="<?=GetMessage('NEWS_LIST_RECIPES_IMG_ALT', array ('#NAME#' => $arItem['NAME']))?>" width="380" height="305">
                    </a>
                    <a class="recipes__item-title" href="<?=$arItem['DETAIL_PAGE_URL']?>"><?=$arItem['NAME']?></a>
                    <p class="recipes__item-props">
                        <?if (strlen($arItem['PROPERTIES']['INGREDIENTS']['VALUE']) > 0):?>
                            <span class="recipes__item-prop recipes__item-prop--ingredients"><?=$arItem['PROPERTIES']['INGREDIENTS']['VALUE']?></span>
                        <?endif?>

                        <?if (strlen($arItem['PROPERTIES']['TIME']['VALUE']) > 0):?>
                            <span class="recipes__item-prop recipes__item-prop--time"><?=$arItem['PROPERTIES']['TIME']['VALUE']?></span>
                        <?endif?>

                        <?if (strlen($arItem['PROPERTIES']['BOOKMARKS']['VALUE']) > 0):?>
                            <span class="recipes__item-prop recipes__item-prop--bookmarks"><?=$arItem['PROPERTIES']['BOOKMARKS']['VALUE']?></span>
                        <?endif?>
                    </p>
                </div>
            <?endforeach?>
        </div>
    </section>
<?endif?>
