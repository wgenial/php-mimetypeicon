## PHP Mime Type Icon

Site that provides mime type icons

[![Packagist](https://img.shields.io/packagist/v/wgenial/php-mimetypeicon.svg)](https://packagist.org/packages/wgenial/php-mimetypeicon)

## Install
```
composer require wgenial/php-mimetypeicon
```

## Usage
```php
<?php
require __DIR__ . '/vendor/autoload.php';

use WGenial\PHPMimeTypeIcon\PHPMimeTypeIcon;

echo "<img src='". PHPMimeTypeIcon::getURI('file1.zip',16) ."'>";
echo "<img src='". PHPMimeTypeIcon::getURI('file2.txt',22) ."'>";
echo "<img src='". PHPMimeTypeIcon::getURI('file2.docx',24) ."'>";
echo "<img src='". PHPMimeTypeIcon::getURI('file3.xml',32) ."'>";
echo "<img src='". PHPMimeTypeIcon::getURI('file4.html',48) ."'>";
echo "<img src='". PHPMimeTypeIcon::getURI('file5.js',64) ."'>";
echo "<img src='". PHPMimeTypeIcon::getURI('https://upload.wikimedia.org/wikipedia/commons/2/26/Logo-composer-transparent.png',96) ."'>";
echo "<img src='". PHPMimeTypeIcon::getURI('https://en.wikipedia.org/wiki/PHP#/media/File:PHP-logo.svg','scalable') ."'>";
echo "<img style='width:120px;height:120px;' src='". PHPMimeTypeIcon::getURI('file6.xlsx','scalable') ."'>";
echo "<img style='width:180px;height:180px;' src='". PHPMimeTypeIcon::getURI('https://media.giphy.com/media/13hxeOYjoTWtK8/giphy.gif','scalable') ."'>";
```

## Dependency
* [wgenial/php-mimetyper](https://packagist.org/packages/wgenial/php-mimetyper)

## Authors
* [@giovanigenerali](https://github.com/giovanigenerali)
* [@wgenial](https://github.com/wgenial)