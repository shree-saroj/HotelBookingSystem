<?php

function validateAdminLogin()
{
    session_start();
    if (!(isset($_SESSION["admin_login"]) && $_SESSION["admin_login"] == true)) {
        redirect("index.php");
        exit;
    }
    // session_regenerate_id(true);
}

function redirect($url)
{
    echo "<script>window.location.href='$url';</script>";
}

function alert($type, $message)
{
    $alertTypes = [
        "success" => "alert-success",
        "error"   => "alert-danger",
        "info"    => "alert-primary",
        "warning" => "alert-warning",
    ];
    if (!isset($alertTypes[$type])) {
        echo <<<alert
        <div class="alert alert-danger alert-dismissible fade show custom-alert" role="alert">
        <strong class="me-2">Invalid Alert Type</strong>
        <button type="button" class="btn-close shadow-none" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        alert;
    } else {
        $bs_Class = $alertTypes[$type];

        echo <<<alert
        <div class="alert $bs_Class alert-dismissible fade show custom-alert" role="alert">
        <strong class="me-2">$message</strong>
        <button type="button" class="btn-close shadow-none" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        alert;
    }
}
