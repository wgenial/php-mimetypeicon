<?php
 
  namespace WGenial\PHPMimeTypeIcon;

  use MimeTyper\Repository\MimeDbRepository;

  class PHPMimeTypeIcon {

    static public function getURI($file, $size)
    {
      $icons_assets_path = "/vendor/wgenial/php-mimetypeicon/icons";
      $mime = new MimeDbRepository();
      $file_extension = pathinfo($file, PATHINFO_EXTENSION);
      $file_mimetype = $mime->findType($file_extension);
      $file_mimetype = !empty($file_mimetype) ? preg_replace("/\//","-", strtolower($file_mimetype)) : "application-octet-stream";
      $icon_extension = (($size == "scalable") ? ".svg" : ".png");
      $icon = $icons_assets_path ."/". $size ."/". $file_mimetype . $icon_extension;
      return $icon;
    }

  }