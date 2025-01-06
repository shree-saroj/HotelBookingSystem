<?php

define("UPLOADS_DIR", $_SERVER['DOCUMENT_ROOT'].'/HotelBookingSystem/Assets/images/');
define("ABOUT_FOLDER", 'about/');
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

function uploadImage($image, $folder)
{
    $valid_mime = ['image/jpeg', 'image/png', 'image/jpg', 'image/webp'];
    $img_mime = $image['type'];
    if (!in_array($img_mime, $valid_mime)) {
        return 'inv_img';
    } else if (($image['size'] / (1024 * 1024)) > 2) {
        return 'inv_size';
    } else {
        $ext = pathinfo($image['name'], PATHINFO_EXTENSION);
        $rName = 'IMG_' . random_int(11111, 99999).".$ext";
        $img_path = UPLOADS_DIR . $folder . $rName;
        if (move_uploaded_file($image['tmp_name'], $img_path)) {
            return $rName;
        } else {
            return 'upload_failed';
        }
    }
}
