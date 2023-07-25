<?php

Kirby::plugin('vendor/pluginname', [
    'blueprints' => [
        'blocks/pluginname' => __DIR__ . '/blueprints/blocks/pluginname.yml',
    ],
    'snippets' => [
        'blocks/pluginname' => __DIR__ . '/snippets/blocks/pluginname.php'
    ],
]);
