<?php

$containerClasses = (isset($containerClasses)) ? $containerClasses : '';
$containerId = (isset($containerId)) ? ' id="' . $containerId . '"' : '';
$itemClasses = (isset($itemClasses)) ? $itemClasses : '';
$linkClasses = (isset($linkClasses)) ? ' class="' . $linkClasses . '"' : '';
$iconClasses = (isset($iconClasses)) ? $iconClasses : '';
$listAttributes = (isset($listAttributes)) ? $listAttributes : '';
$itemAttributes = (isset($itemAttributes)) ? $itemAttributes : '';

$items = (isset($items)) ? $items : $site->socialMediaLinks()->toStructure();

?>
<?php if ($items->count() > 0) : ?>
    <ul class="<?= $containerClasses ?>" <?= $containerId ?> <?= $listAttributes ?>>
        <?php foreach ($items as $item) : ?>
            <li class="<?= $itemClasses ?>" <?= $itemAttributes ?>>
                <a href="<?= $item->url() ?>" target="<?= $item->target()->toString() ?>" <?= $linkClasses ?> aria-label="<?= $item->platform()->toString() ?> Link">
                    <?php snippet('social_media_icon', ['platform' => $item->platform()->toString(), 'classes' => $iconClasses]) ?>
                </a>
            </li>
        <?php endforeach ?>
    </ul>
<?php endif ?>