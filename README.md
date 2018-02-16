## PHP Mime Type Icon

```php
<?php
	require __DIR__ . '/vendor/autoload.php';
	
	use WGenial\PHPMimeTypeIcon\PHPMimeTypeIcon;

	echo "<img src='". PHPMimeTypeIcon::getURI('file1.zip','16') ."'>";
	echo "<img src='". PHPMimeTypeIcon::getURI('file2.txt','22') ."'>";
	echo "<img src='". PHPMimeTypeIcon::getURI('file2.docx','24') ."'>";
	echo "<img src='". PHPMimeTypeIcon::getURI('file3.xml','32') ."'>";
	echo "<img src='". PHPMimeTypeIcon::getURI('file4.html','48') ."'>";
	echo "<img src='". PHPMimeTypeIcon::getURI('file5.js','64') ."'>";
	echo "<img src='". PHPMimeTypeIcon::getURI('https://upload.wikimedia.org/wikipedia/commons/2/26/Logo-composer-transparent.png','96') ."'>";
	echo "<img src='". PHPMimeTypeIcon::getURI('https://en.wikipedia.org/wiki/PHP#/media/File:PHP-logo.svg','scalable') ."'>";
	echo "<img style='width:180px;height:180px;' src='". PHPMimeTypeIcon::getURI('https://en.wikipedia.org/wiki/PHP#/media/File:PHP-logo.svg','scalable') ."'>";
```