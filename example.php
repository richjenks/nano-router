<?php

// Get current route
$r = require 'router.php';

// Get user info
if ($r[0] === 'user' && is_int($r[1])) new User($r[1]);

// Render a static page
elseif (in_array($r[0] ['about', 'contact']) new Page($r);

// Call an API
elseif ($r[0] === 'api' && $_SERVER['REQUEST_METHOD'] === 'POST') {
    $api = new API($r);
    echo $api->getJson();
}

// Throw 404
else new Page(404);