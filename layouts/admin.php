<?php

if (isset($additionalCss)) {
    array_push(
        $additionalCss,
        '/styles/admin/admin.css',
        '/styles/admin/sidebar.css',
        '/styles/admin/header.css'
    );
} else {
    $additionalCss = [
        '/styles/admin/admin.css',
        '/styles/admin/sidebar.css',
        '/styles/admin/header.css',
    ];
}

include $_SERVER['DOCUMENT_ROOT'] . '/layouts/base.php';
include $_SERVER['DOCUMENT_ROOT'] . '/layouts/admin/sidebar.php';
include $_SERVER['DOCUMENT_ROOT'] . '/layouts/admin/header.php';
