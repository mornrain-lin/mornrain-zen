---
AIGC:
    Label: "1"
    ContentProducer: 001191440300708461136T1XGW3
    ProduceID: cf93d2ba4252e3fc820ac383cb09c649_7793f62abe7a11f18019525400248c00
    ReservedCode1: DfsRvHWPspjt7txb62jKEuEWYo8W11F9uJDOkyWnOKSHY2JtSkvN2cVTQBocIMRM5MT3NsG2Cv810FQsvPiWMkcnLXj83aHa8MIiku21CsNGFabmSDmFgs/fR9xGxd/wLMff7OFoQUxYiYVaVGSTVsYl5K1OkTkh/vQYn/oUMWnPwEAY+8wCVW2W2qQ=
    ContentPropagator: 001191440300708461136T1XGW3
    PropagateID: cf93d2ba4252e3fc820ac383cb09c649_7793f62abe7a11f18019525400248c00
    ReservedCode2: DfsRvHWPspjt7txb62jKEuEWYo8W11F9uJDOkyWnOKSHY2JtSkvN2cVTQBocIMRM5MT3NsG2Cv810FQsvPiWMkcnLXj83aHa8MIiku21CsNGFabmSDmFgs/fR9xGxd/wLMff7OFoQUxYiYVaVGSTVsYl5K1OkTkh/vQYn/oUMWnPwEAY+8wCVW2W2qQ=
---

# MornRain Zen

> A calm, card-based layout for plant, wellness and slow-living journals.

`MornRain Zen` is a standalone WordPress theme by **MornRain**. It ships as pure
code with **zero third-party runtime dependencies**, loads **no external CDN**
assets, contacts **no remote service** and creates **no extra database tables**.

| Item | Value |
| --- | --- |
| License | GNU General Public License v2 or later |
| Minimum WordPress | 6.0 |
| Minimum PHP | 8.0 |
| Text domain | `mornrain-zen` |
| Function prefix | `mornrain_zen` |

---

## Table of contents

1. [Features](#features)
2. [Requirements](#requirements)
3. [Installation](#installation)
4. [Configuration](#configuration)
5. [File structure](#file-structure)
6. [Development and quality checks](#development-and-quality-checks)
7. [Frequently asked questions](#frequently-asked-questions)
8. [Changelog](#changelog)
9. [License](#license)

---

## Features

- Low-saturation sage and sand palette designed to feel calm at any hour.
- Card grid that reflows from three columns to one without JavaScript.
- Rounded cards with soft shadows and a gentle hover lift.
- Optional featured image per card, rendered through a dedicated 720x480 size.
- Muted, low-contrast-friendly typography using the system sans stack.
- Accessible focus outlines kept visible for keyboard users.
- No icons, no webfonts, no remote assets.

---

## Requirements

| Component | Minimum | Recommended |
| --- | --- | --- |
| WordPress | 6.0 | 6.6 or newer |
| PHP | 8.0 | 8.3 |
| MySQL | 5.7 | 8.0 |
| MariaDB | 10.3 | 10.11 |

---

## Installation

### Option A - Upload a ZIP archive (recommended)

1. Download or clone this repository.
2. Compress the `mornrain-zen` folder itself into `mornrain-zen.zip`. The archive must
   contain the theme folder, not the repository root.
3. In WordPress go to **Appearance > Themes > Add New > Upload Theme**.
4. Choose `mornrain-zen.zip`, click **Install Now**, then **Activate**.

### Option B - Copy the folder over FTP / SSH

1. Copy the whole `mornrain-zen` folder into `wp-content/themes/`.
2. Go to **Appearance > Themes** and activate `MornRain Zen`.

### Option C - Git clone (developer workflow)

```bash
cd wp-content/themes
git clone https://github.com/mornrain-lin/mornrain-zen.git
```

---

## Configuration

| What | Where | Notes |
| --- | --- | --- |
| Primary menu | Appearance > Menus | Assign a menu to the **Primary Menu** location. |
| Footer menu | Appearance > Menus | Assign a menu to the **Footer Menu** location. |
| Custom logo | Appearance > Customize > Site Identity | Optional; falls back to the site title. |
| Site title and tagline | Settings > General | Rendered in the header and footer. |
| Widgets | - | This theme registers no widget areas by design. |
| Reading settings | Settings > Reading | Feed length and front page behaviour follow core settings. |

The theme stores nothing beyond standard WordPress theme mods. Switching away
from it leaves no residue behind.

---

## File structure

```text
mornrain-zen/
|-- .github/
|   `-- workflows/
|       `-- build.yml
|-- assets/
|   |-- css/
|   |   `-- main.css
|   `-- js/
|       `-- main.js
|-- tests/
|   |-- ScaffoldTest.php
|   `-- bootstrap.php
|-- 404.php
|-- archive.php
|-- composer.json
|-- footer.php
|-- functions.php
|-- header.php
|-- index.php
|-- LICENSE
|-- page.php
|-- phpunit.xml.dist
|-- README.md
|-- search.php
|-- single.php
`-- style.css

```

---

## Development and quality checks

```bash
composer install
composer validate
composer lint   # runs php -l over every PHP file
composer test   # runs PHPUnit
```

Coding style follows the
[WordPress Coding Standards](https://developer.wordpress.org/coding-standards/wordpress-coding-standards/):
tab indentation, Yoda conditions, prefixed global functions (`mornrain_zen*`),
nonces and capability checks where relevant, and escaped output everywhere.

Continuous integration lives in `.github/workflows/build.yml`. It runs on every
push and pull request across PHP 8.1, 8.2 and 8.3: `composer install`,
`php -l` linting, PHPUnit, and finally packages a release ZIP as a build
artifact.

---

## Frequently asked questions

### Does this theme load any webfont?

No. It uses the operating system's native sans-serif stack, so no font request
ever leaves the visitor's browser.

### How do I get images to appear on the cards?

Set a **Featured image** on each post. The theme registers a `mornrain-zen-card`
image size (720x480, cropped) for the card layout.

### Can I use it for a non-wellness blog?

Absolutely. The layout is content-agnostic and works for travel, food or
personal journals too.

### Is there a sidebar?

No. The theme intentionally ships without widget areas to keep reading
distraction free.

### Does it support RTL languages?

Core WordPress RTL styleships handle most of the layout. Container spacing is
logical-property friendly, so RTL works out of the box.

---

## Changelog

### 1.0.0

- Initial public release.

---

## License

Released under the **GNU General Public License v2 or later**.

```text
This program is free software; you can redistribute it and/or modify it under
the terms of the GNU General Public License as published by the Free Software
Foundation; either version 2 of the License, or (at your option) any later
version.

This program is distributed in the hope that it will be useful, but WITHOUT ANY
WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A
PARTICULAR PURPOSE. See the GNU General Public License for more details.
```

See [LICENSE](LICENSE) for the full text.
*（内容由AI生成，仅供参考）*
