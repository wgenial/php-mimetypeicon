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

## ToDo
**Extension** | **MIME Type**
--- | ---
~~.doc~~ | ~~application/msword~~
.dot | application/msword
~~.docx~~ | ~~application/vnd.openxmlformats-officedocument.wordprocessingml.document~~
.dotx | application/vnd.openxmlformats-officedocument.wordprocessingml.template
.docm | application/vnd.ms-word.document.macroEnabled.12
.dotm | application/vnd.ms-word.template.macroEnabled.12
~~.xls~~ | ~~application/vnd.ms-excel~~
.xlt |  application/vnd.ms-excel
.xla |  application/vnd.ms-excel
~~.xlsx~~ | ~~application/vnd.openxmlformats-officedocument.spreadsheetml.sheet~~
.xltx | application/vnd.openxmlformats-officedocument.spreadsheetml.template
~~.xlsm~~ | ~~application/vnd.ms-excel.sheet.macroEnabled.12~~
.xltm | application/vnd.ms-excel.template.macroEnabled.12
.xlam | application/vnd.ms-excel.addin.macroEnabled.12
.xlsb | application/vnd.ms-excel.sheet.binary.macroEnabled.12
~~.ppt~~ |  ~~application/vnd.ms-powerpoint~~
.pot |  application/vnd.ms-powerpoint
.pps |  application/vnd.ms-powerpoint
.ppa |  application/vnd.ms-powerpoint
.pptx | application/vnd.openxmlformats-officedocument.presentationml.presentation
.potx | application/vnd.openxmlformats-officedocument.presentationml.template
.ppsx | application/vnd.openxmlformats-officedocument.presentationml.slideshow
.ppam | application/vnd.ms-powerpoint.addin.macroEnabled.12
.pptm | application/vnd.ms-powerpoint.presentation.macroEnabled.12
.potm | application/vnd.ms-powerpoint.template.macroEnabled.12
.ppsm | application/vnd.ms-powerpoint.slideshow.macroEnabled.12
.mdb |  application/vnd.ms-access


## Dependency
* [wgenial/php-mimetyper](https://packagist.org/packages/wgenial/php-mimetyper)

## Authors
* [@giovanigenerali](https://github.com/giovanigenerali)
* [@wgenial](https://github.com/wgenial)