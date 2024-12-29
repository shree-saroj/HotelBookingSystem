<?php

require "./../../Inc/essentials.php";
require "./../../Inc/db_config.php";
validateAdminLogin();
if (isset($_POST["getGeneralData"])) {
    $query = "SELECT * FROM `tbsettings` WHERE `id` = ?";
    $value = [1];
    $result = executeSelectQuery($query, $value, 'i');
    $data = mysqli_fetch_assoc($result);
    $jsonData = json_encode($data);
    echo ($jsonData);
}
if (isset($_POST["updateGeneralData"])) {
    $sanitizedInput = sanitizeInput($_POST);
    $query = "UPDATE `tbsettings` SET `siteTitle`= ?,`siteAbout`= ? WHERE `id` = ?";
    $value = [$sanitizedInput['siteTitleFromModal'], $sanitizedInput["stieAboutFromModal"], 1];
    $result = executeUpdateQuery($query, $value, 'ssi');
    $jsonData = json_encode($result);
    echo ($jsonData);
}
if (isset($_POST['shutdownWebsite'])) {
    $sanitizedInput = sanitizeInput($_POST);
    $query = "UPDATE `tbsettings` SET `shutdown` = ? WHERE `id` = ?";
    $value = [$sanitizedInput['status'], 1];
    $result = executeUpdateQuery($query, $value, 'ii');
    // $jsonData = json_encode($result);
    echo ($result);
}
if (isset($_POST['getContactsData'])) {
    $query = "SELECT * FROM `tbhoteldetails` WHERE `id` = ?";
    $value = [1];
    $result = executeSelectQuery($query, $value, 'i');
    $data = mysqli_fetch_assoc($result);
    $jsonData = json_encode($data);
    echo ($jsonData);
}
if (isset($_POST["updateContactsData"])) {
    $sanitizedInput = sanitizeInput($_POST);
    $query = "UPDATE `tbhoteldetails` SET `hotelId`=? ,`address`=?,`phone`=?,`email`=?,`socials`=?,`gmap`=?,`iframe`=? WHERE `id` =?";
    $value = [1, $sanitizedInput['setAddress'], $_POST['setPhoneNumber'], $sanitizedInput['setEmail'], $_POST['setSocialLinks'], $sanitizedInput['setGMapLink'], $sanitizedInput['setIFrameLink'], 1];
    $result = executeUpdateQuery($query, $value, 'issssssi');
    $jsonData = json_encode($result);
    echo ($jsonData);
}
