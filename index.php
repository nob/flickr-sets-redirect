<?php
require_once ('mdetect.php');
if (preg_match('@^/([0-9]+)/?$@', $_SERVER['REQUEST_URI'], $matches)) {
    $ui = new uagent_info();
    if ($ui->DetectMobileQuick() == $ui->true) {
        header("Location: http://m.flickr.com/#/photos/noboru/sets/$matches[1]/");
    } else {
        header("Location: http://www.flickr.com/photos/noboru/sets/$matches[1]/");
    }
} else {
    header("Location: http://www.flickr.com/photos/noboru/sets/");
}
