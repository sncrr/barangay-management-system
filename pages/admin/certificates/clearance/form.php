<?php
$pageTitle = 'Barangay Clearance Form';

if (isset($additionalCss)) {
    array_push(
        $additionalCss,
        '/styles/form.css'
    );
} else {
    $additionalCss = [
        '/styles/form.css'
    ];
}
include $_SERVER['DOCUMENT_ROOT'] . '/layouts/admin.php';
?>

<head>
    <title>Barangay Clearance</title>
</head>

<div class="wrapper">
    <div class="page-title">
        Barangay Clearance Form
    </div>
    <div class="content">
        <form class="form">
            <div class="form-control">
                <div class="label">
                    <label>SURNAME</label>
                </div>
                <div class="input">
                    <input type="text" />
                </div>
            </div>
            <div class="form-control">
                <div class="label">
                    <label>FIRSTNAME</label>
                </div>
                <div class="input">
                    <input type="text" />
                </div>
            </div>
            <div class="form-control">
                <div class="label">
                    <label>MIDDLENAME</label>
                </div>
                <div class="input">
                    <input type="text" />
                </div>
            </div>
            <div class="form-control full-width">
                <div class="label">
                    <label>ADDRESS</label>
                </div>
                <div class="input">
                    <input type="text" />
                </div>
            </div>
            <div class="form-control">
                <div class="label">
                    <label>DATE OF BIRTH</label>
                </div>
                <div class="input">
                    <input type="text" />
                </div>
            </div>
            <div class="form-control">
                <div class="label">
                    <label>AGE</label>
                </div>
                <div class="input">
                    <input type="text" />
                </div>
            </div>
            <div class="form-control">
                <div class="label">
                    <label>STATUS</label>
                </div>
                <div class="input">
                    <input type="text" />
                </div>
            </div>
            <div class="form-control">
                <div class="label">
                    <label>CONTACT NO</label>
                </div>
                <div class="input">
                    <input type="text" />
                </div>
            </div>
            <div class="form-control">
                <div class="label">
                    <label>PLACE OF BIRTH</label>
                </div>
                <div class="input">
                    <input type="text" />
                </div>
            </div>
        </form>
    </div>
</div>