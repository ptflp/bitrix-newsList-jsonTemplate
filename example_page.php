<?
require_once($_SERVER['DOCUMENT_ROOT'] . "/bitrix/modules/main/include/prolog_before.php");
?>
<?
$APPLICATION->IncludeComponent(
	"bitrix:catalog.section", 
	"newsJson", 
	array(
		"IBLOCK_TYPE" => "news",
		"IBLOCK_ID" => "14",
		"SECTION_ID" => $_REQUEST["SECTION_ID"],
		"ELEMENT_SORT_FIELD" => "active_from",
		"ELEMENT_SORT_ORDER" => "desc",
		"DETAIL_URL" => "/news/detail.php?SECTION_ID=#SECTION_ID#&ELEMENT_ID=#ID#",
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"PAGE_ELEMENT_COUNT" => $_REQUEST["COUNT"],
		"CACHE_TYPE" => "Y",
		"CACHE_TIME" => "36000",
		"DISPLAY_TOP_PAGER" => "Y",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"PAGER_SHOW_ALWAYS" => "Y",
		"PAGER_TEMPLATE" => "orange",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "Y",
	),
	false
);?> 