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
    'options' => [
      'platforms' => [
        'About_Me' => 'About Me',
        'Bluesky' => 'Bluesky',
        'Discord' => 'Discord',
        'Discourse' => 'Discourse',
        'Facebook_Gaming' => 'Facebook Gaming',
        'Facebook_Live' => 'Facebook Live',
        'Facebook' => 'Facebook',
        'GitHub' => 'GitHub',
        'GitLab' => 'GitLab',
        'Google_Maps' => 'Google Maps',
        'Google_Play' => 'Google Play',
        'Instagram' => 'Instagram',
        'LinkedIn' => 'LinkedIn',
        'Mastodon' => 'Mastodon',
        'Meta' => 'Meta',
        'Pinterest' => 'Pinterest',
        'Signal' => 'Signal',
        'Slack' => 'Slack',
        'Telegram' => 'Telegram',
        'TikTok' => 'TikTok',
        'Twitch' => 'Twitch',
        'Twitter' => 'Twitter',
        'WhatsApp' => 'WhatsApp',
        'X' => 'X',
        'Xing' => 'Xing',
        'YouTube_Gaming' => 'YouTube Gaming',
        'YouTube_Music' => 'YouTube Music',
        'YouTube_Shorts' => 'YouTube Shorts',
        'YouTube' => 'YouTube',
      ]
    ]
]);
