<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);?>

<?if (!empty($arResult)):?>
    <section class="recipes">
        <?=$arResult['DETAIL_TEXT']?>
    </section>
<?endif?>
