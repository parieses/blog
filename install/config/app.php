<?php

return [
    'url'      => dirname($_SERVER['SCRIPT_NAME']),
    'index'    => 'index.php?route=',
    'timezone' => 'UTC',
    'key'      => hash('md5', 'Anchor Installer ' . VERSION),
    'language' => 'zh_CN',
    'encoding' => 'UTF-8'
];
