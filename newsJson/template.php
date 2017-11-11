<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<div class="newslist">

	<div class="clear"></div>      
  <?if($arParams["DISPLAY_TOP_PAGER"]):?>
	  <div align="left"><?=$arResult["NAV_STRING"]?></div><br />
  <?endif;?>


<div class="clear"></div>
<ul class="news_wrap">
<?foreach($arResult["ITEMS"] as $cell=>$arElement):?>
<li class="news_box">
	<a class="news_title" href="<?=$arElement["DETAIL_PAGE_URL"]?>"><?=$arElement["NAME"]?></a>
	<div class="clear"></div>
	<div class="news_container">
	<a class="news_img" href="<?=$arElement["DETAIL_PAGE_URL"]?>">
	<?
		if($arElement["PREVIEW_PICTURE"]["SRC"] == "") $src = $arElement["DETAIL_PICTURE"]["SRC"];
		else $src = $arElement["PREVIEW_PICTURE"]["SRC"];
	?> 
		<img src="<?=$src?>" width="180" height="76" alt="<?=$arElement["NAME"]?>" title="<?=$arElement["NAME"]?>">
	</a>
	<div class="news_text">
	<?=$arElement["PREVIEW_TEXT"]?>
	</div>
	</div>
	<div class="clear"></div>
	<ul class="news_info">
		<li class="news_tag">
		<?=$arElement["ACTIVE_FROM"]?>
		</li>
		<li class="news_tag">
		просмотров: <?=$arElement["PROPERTIES"]["VIEWS"]["VALUE"] ?>
		</li>
		<li class="news_tag">
		<?php
			$section = CIBlockSection::GetByID($arElement['IBLOCK_SECTION_ID']);
			if ($section) {
				$section = $section->GetNext();
				echo '<a href="./?SECTION_ID=' . $arElement['IBLOCK_SECTION_ID'] . '" >' . $section['NAME'] . '</a>';
			}
		?>
		</li>
	</ul>
</li>
<?endforeach; // foreach($arResult["ITEMS"] as $arElement):?>
</ul>
<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?><br><?=$arResult["NAV_STRING"]?>
<?endif;?>       
<div class="clear"></div>  
</div>
