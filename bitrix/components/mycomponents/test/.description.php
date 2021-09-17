<?

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

$arComponentDescription = array(
    "NAME" => GetMessage("NAME_TEST"),
    "DESCRIPTION" => GetMessage("DESCRIPTION_TEST"),
    "ICON" => "/images/news_all.gif",
    "COMPLEX" => "Y",
    "PATH" => array(
        "ID" => "mycomponents",
        "SORT" => 2000,
        "NAME" => GetMessage("NAME_PATH_TEST")
        )
);

?>