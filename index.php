<?php

require '/workspace/kirby/bootstrap.php';

$kirby = new Kirby([
    'roots' => [
        'index'   => '/workspace',
        'content' => '/workspace/content',
        'site'    => '/workspace/site',
        'media'    => '/workspace/media',
    ],
]);

echo (new Kirby)->render();
