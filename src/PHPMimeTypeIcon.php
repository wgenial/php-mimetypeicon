<?php

namespace WGenial\PHPMimeTypeIcon;

use MimeTyper\Repository\MimeDbRepository;

class PHPMimeTypeIcon
{
  static public function getURI($file, $size)
  {
    $icons_assets_path = __DIR__ . "/../vendor/wgenial/php-mimetypeicon/icons";

    $mime = new MimeDbRepository();

    $file_extension = pathinfo($file, PATHINFO_EXTENSION);
    $file_mimetype = !empty($file_mimetype) && $mime->findType(strtolower($file_extension));

    $icon_name = !empty($file_mimetype) ? preg_replace("/\//", "-", $file_mimetype) : "none";
    $icon_extension = (($size == "scalable") ? ".svg" : ".png");

    $icon = $icons_assets_path . "/" . $size . "/" . $icon_name . $icon_extension;
    $icon_fallback = $icons_assets_path . "/" . $size . "/none" . $icon_extension;

    return file_exists($icon) ? $icon : $icon_fallback;
  }
}
