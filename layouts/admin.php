<?php

if (isset($additionalCss)) {
    array_push(
        $additionalCss,
        '/styles/admin.css',
        '/styles/sidebar.css'
    );
} else {
    $additionalCss = [
        '/styles/admin.css',
        '/styles/sidebar.css'
    ];
}

include $_SERVER['DOCUMENT_ROOT'] . '/layouts/base.php';
include $_SERVER['DOCUMENT_ROOT'] . '/layouts/sidebar.php';
