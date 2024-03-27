# Kirby social media links

## Setup

Add the `socialMediaTab: social_media_entries` tab to your `site.yml` blueprint.

Example:

```yml
title: Site

tabs:
  content:
    label:
      en: Content
      de: Inhalt
    icon: text
    sections:
      pages:
        type: pages
      files:
        type: files
  socialMediaTab: social_media_entries
```

## Blueprint usage

Add `socialMedia: social_media_links` to a blueprint to use social links based on this plugin for a field.

Example:

```yml
person:
  label:
    en: Person
    de: Person
  type: structure
  fields:
    name:
      label:
        en: Person name
        de: Name der Person
      type: text
      width: 1/2
      required: true
    socialMedia: social_media_links
```

## Snippet usage

```php
<?php snippet('social_media_entries'); ?>
```

### Variables

| Variable           | Default                                                        | Description                                                                                                                                                           |
| ------------------ | -------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `containerClasses` | `''` _(String)_                                                | Classes that are applied to the `ul` container.                                                                                                                       |
| `containerId`      | `''` _(String)_                                                | ID that is applied to the container.                                                                                                                                  |
| `itemClasses`      | `''` _(String)_                                                | Classes that are applied to the `li` element.                                                                                                                         |
| `linkClasses`      | `''` _(String)_                                                | Classes that are applied to the `a` element.                                                                                                                          |
| `iconClasses`      | `''` _(String)_                                                | Classes that are applied to the `svg` element.                                                                                                                        |
| `items`            | `$site->socialMediaLinks()->toStructure()` _(Kirby Structure)_ | Social Media Entries to be used. Has to be resolved to Kirby Structure via `toStructure()`. Defaults to site-wide definition of social media entries when left empty. |

---
