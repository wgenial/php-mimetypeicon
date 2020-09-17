## PHP Mime Type Icon

Package that provides mime type icons

[![Packagist](https://img.shields.io/packagist/v/wgenial/php-mimetypeicon?style=for-the-badge)](https://packagist.org/packages/wgenial/php-mimetypeicon)
[![PHP Version](https://img.shields.io/packagist/php-v/wgenial/php-mimetypeicon?style=for-the-badge)](https://github.com/wgenial/php-mimetypeicon/blob/master/composer.json#L37)
[![Codacy](https://img.shields.io/codacy/grade/60444fd6081749da8fe6187195936235?style=for-the-badge)](https://app.codacy.com/gh/wgenial/php-mimetypeicon)
[![Travis](https://img.shields.io/travis/wgenial/php-mimetypeicon?style=for-the-badge&label=travis)](https://travis-ci.org/wgenial/php-mimetypeicon)
[![License](https://img.shields.io/packagist/l/wgenial/php-mimetypeicon?style=for-the-badge)](https://github.com/wgenial/php-mimetypeicon/blob/master/LICENSE)

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

## ToDo

| **Extension** | **MIME Type**                                                             |
| ------------- | ------------------------------------------------------------------------- |
| .docm         | application/vnd.ms-word.document.macroEnabled.12                          |
| .dotm         | application/vnd.ms-word.template.macroEnabled.12                          |
| .xlt          | application/vnd.ms-excel                                                  |
| .xla          | application/vnd.ms-excel                                                  |
| .xltx         | application/vnd.openxmlformats-officedocument.spreadsheetml.template      |
| .xltm         | application/vnd.ms-excel.template.macroEnabled.12                         |
| .xlam         | application/vnd.ms-excel.addin.macroEnabled.12                            |
| .xlsb         | application/vnd.ms-excel.sheet.binary.macroEnabled.12                     |
| .pot          | application/vnd.ms-powerpoint                                             |
| .pps          | application/vnd.ms-powerpoint                                             |
| .ppa          | application/vnd.ms-powerpoint                                             |
| .pptx         | application/vnd.openxmlformats-officedocument.presentationml.presentation |
| .potx         | application/vnd.openxmlformats-officedocument.presentationml.template     |
| .ppsx         | application/vnd.openxmlformats-officedocument.presentationml.slideshow    |
| .ppam         | application/vnd.ms-powerpoint.addin.macroEnabled.12                       |
| .pptm         | application/vnd.ms-powerpoint.presentation.macroEnabled.12                |
| .potm         | application/vnd.ms-powerpoint.template.macroEnabled.12                    |
| .ppsm         | application/vnd.ms-powerpoint.slideshow.macroEnabled.12                   |
| .mdb          | application/vnd.ms-access                                                 |

## Dependency

- [wgenial/php-mimetyper](https://packagist.org/packages/wgenial/php-mimetyper)

## Authors

- [@giovanigenerali](https://github.com/giovanigenerali)

## Contributors

- [@eldinomick](https://github.com/eldinomick)
