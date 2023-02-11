<?php

$load_release_hash = function () {
    $map = get_template_directory().'/anticache.json';
    if (!file_exists($map)) {
        return '';
    }
    $content = json_decode(file_get_contents($map));
    if (!is_object($content) || !isset($content->anticache)) {
        return '';
    }

    return $content->anticache;
};

define('ANTICACHE_HASH', $load_release_hash());
// define('RICH_POST_TYPE', 'rich');
// define('REGULAR_POST_TYPE', 'regular');

// define('MAGAZINE_CATEGORY', 'magazine-category');


define( 'COMPANY_PAGE', 'company');
define( 'ABOUT_PAGE', 'about');
define( 'SERVICE_PAGE', 'service');
define( 'TIPS_PAGE', 'tips');
define( 'CONTACT_PAGE', 'contact');
