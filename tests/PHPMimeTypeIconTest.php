<?php

namespace WGenial\PHPMimeTypeIconTest;

use WGenial\PHPMimeTypeIcon\PHPMimeTypeIcon;

class PHPMimeTypeIconTest extends \PHPUnit\Framework\TestCase
{

  public function testInvalidFileName()
  {
    $icon = PHPMimeTypeIcon::getURI('*', 16);
    $this->assertStringContainsStringIgnoringCase("none.png", $icon);
  }

  public function testInvalidFileExtension()
  {
    $icon = PHPMimeTypeIcon::getURI('file.*', 16);
    $this->assertStringContainsStringIgnoringCase("none.png", $icon);
  }

  public function testInvalidSizeIntegerParam()
  {
    $icon = PHPMimeTypeIcon::getURI('file.php', 0);
    $this->assertStringContainsStringIgnoringCase("none.svg", $icon);
  }

  public function testInvalidSizeStringParam()
  {
    $icon = PHPMimeTypeIcon::getURI('file.php', "16");
    $this->assertStringContainsStringIgnoringCase("none.png", $icon);
  }

  public function testInvalidAssetsPath()
  {
    $icon = PHPMimeTypeIcon::getURI('file.php', 100);
    $this->assertStringContainsStringIgnoringCase("none.png", $icon);
  }
}
