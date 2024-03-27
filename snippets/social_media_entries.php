<?php

$containerClasses = (isset($containerClasses)) ? $containerClasses : '';
$containerId = (isset($containerId)) ? ' id="' . $containerId . '"' : '';
$itemClasses = (isset($itemClasses)) ? $itemClasses : '';
$linkClasses = (isset($linkClasses)) ? ' class="' . $linkClasses . '"' : '';
$iconClasses = (isset($iconClasses)) ? $iconClasses : '';

$items = (isset($items)) ? $items : $site->socialMediaLinks()->toStructure();

?>
<?php if ($items->count() > 0) : ?>
    <ul class="<?= $containerClasses ?>" <?= $containerId ?>>
        <?php foreach ($items as $item) : ?>
            <li class="<?= $itemClasses ?>">
                <a href="<?= $item->url() ?>" target="<?= $item->target()->toString() ?>" <?= $linkClasses ?>>
                    <?php snippet('social_media_icon', ['platform' => $item->platform()->toString(), 'classes' => $iconClasses,]) ?>
                </a>
            </li>
        <?php endforeach ?>
    </ul>
<?php endif ?>