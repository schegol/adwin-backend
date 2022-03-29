<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <?
    $page = $APPLICATION->GetCurPage();
    $APPLICATION->ShowHead();
    use Bitrix\Main\Page\Asset;
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH.'/css/style.min.css');
    ?>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?$APPLICATION->ShowTitle();?></title>
</head>
<body>
    <?$APPLICATION->ShowPanel()?>

    <header class="header">
        <div class="header__top-block">
            <div class="header__top-block-container">
                <a class="header__logo logo"<?=$page == '/' ? : ' href="/"'?>>
                    <?$APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "",
                        Array(
                            "AREA_FILE_SHOW" => "file",
                            "AREA_FILE_SUFFIX" => "",
                            "EDIT_TEMPLATE" => "",
                            "PATH" => "/include/header_logo.php"
                        )
                    );?>
                </a>
                <div class="header__menu-block">
                    <?$APPLICATION->IncludeComponent(
                        "bitrix:menu",
                        "header_main",
                        Array(
                            "ALLOW_MULTI_SELECT" => "N",
                            "CHILD_MENU_TYPE" => "left",
                            "DELAY" => "N",
                            "MAX_LEVEL" => "1",
                            "MENU_CACHE_GET_VARS" => array(""),
                            "MENU_CACHE_TIME" => "3600",
                            "MENU_CACHE_TYPE" => "N",
                            "MENU_CACHE_USE_GROUPS" => "Y",
                            "ROOT_MENU_TYPE" => "header_main",
                            "USE_EXT" => "N"
                        )
                    );?>
                    <a class="header__btn" href="#"><?=GetMessage('HEADER_CTA_BTN')?></a>
                </div>
            </div>
        </div>
        <div class="header__bottom-block">
            <div class="header__bottom-block-container">
                <h1 class="header__page-heading">
                    <?$APPLICATION->ShowTitle()?>
                </h1>
                <p class="header__page-description">
                    <?$APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "",
                        Array(
                            "AREA_FILE_SHOW" => "file",
                            "AREA_FILE_SUFFIX" => "",
                            "EDIT_TEMPLATE" => "",
                            "PATH" => "/include/header_desc.php"
                        )
                    );?>
                </p>
                <?$APPLICATION->IncludeComponent(
                    "bitrix:menu",
                    "header_image",
                    Array(
                        "ALLOW_MULTI_SELECT" => "N",
                        "CHILD_MENU_TYPE" => "left",
                        "DELAY" => "N",
                        "MAX_LEVEL" => "1",
                        "MENU_CACHE_GET_VARS" => array(""),
                        "MENU_CACHE_TIME" => "3600",
                        "MENU_CACHE_TYPE" => "N",
                        "MENU_CACHE_USE_GROUPS" => "Y",
                        "ROOT_MENU_TYPE" => "header_image",
                        "USE_EXT" => "N"
                    )
                );?>
            </div>
        </div>
    </header>
    <main class="main">
        <div class="main__container">
