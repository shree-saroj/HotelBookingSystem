<?php

// Database configuration
define("DB_HOST", "localhost");
define("DB_USER", "root");
define("DB_PASS", "");
define("DB_NAME", "db_shreehotel");

function getDatabaseConnection()
{
    $connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

    if (!$connection) {
        die("Database connection failed: " . mysqli_connect_error());
    }

    return $connection;
}

$_con = getDatabaseConnection();

function sanitizeInput(array $data)
{
    return array_map(function ($value) {
        $value = trim($value);
        $value = stripslashes($value);
        $value = htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
        $value = strip_tags($value);
        return $value;
    }, $data);
}

function executeSelectQuery(string $sql, array $params = [], string $paramTypes = "")
{
    global $_con;
    $stmt = mysqli_prepare($_con, $sql);
    if (!$stmt) {
        die("Query preparation failed: " . mysqli_error($_con));
    }
    if (!empty($params)) {
        mysqli_stmt_bind_param($stmt, $paramTypes, ...$params);
    }
    if (!mysqli_stmt_execute($stmt)) {
        die("Query execution failed: " . mysqli_error($_con));
    }
    $result = mysqli_stmt_get_result($stmt);
    mysqli_stmt_close($stmt);
    return $result;
}
function executeUpdateQuery(string $sql, array $params, string $paramTypes)
{
    global $_con;
    $stmt = mysqli_prepare($_con, $sql);
    if (!$stmt) {
        die("Query preparation failed: " . mysqli_error($_con));
    }
    mysqli_stmt_bind_param($stmt, $paramTypes, ...$params);
    if (!mysqli_stmt_execute($stmt)) {
        mysqli_stmt_close($stmt);
        die("Query execution failed: " . mysqli_error($_con));
    } else {
        $status = mysqli_stmt_affected_rows($stmt);
        mysqli_stmt_close($stmt);
        return $status;
    }
}
