<?php

Kirby::plugin('janheise/kirby-social-media-links', [
    'blueprints' => [
        'social_media_entries' => __DIR__ . '/blueprints/social_media_entries.yml',
        'social_media_links' => __DIR__ . '/blueprints/social_media_links.yml',
    ],
    'snippets' => [
        'social_media_entries' => __DIR__ . '/snippets/social_media_entries.php',
        'social_media_icon' => __DIR__ . '/snippets/social_media_icon.php',
    ],
]);
