<?php
function path($file) { return "../templates/{$file}.php"; }

session_start();
$route = strtolower(filter_input(INPUT_GET, 'route', FILTER_UNSAFE_RAW));

if (!$route) {
    require_once path('foyer');
    die;
}

// if ($route === 'artist' or $route === 'painting') { // if artist/painting search is incomplete, load explore page
//     require_once path('traverse');
//     die;
// }

if (preg_match('/^artists\/(\d+)$/', $route, $matches)) {
    $artistId = $matches[1];
    require_once path('artist') . '?user_id=' . $artistId;
    die;
}

if (preg_match('/^paintings\/(\d+)$/', $route, $matches)) {
    $paintingId = $matches[1];
    require_once path('painting') . '?user_id=' . $paintingId;
    die;
}

if (file_exists(path($route))) {
    require_once path($route);
    die;
}

require_once path('404');
?>
