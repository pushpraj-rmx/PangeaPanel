<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include $_SERVER['DOCUMENT_ROOT'] . '/PangeaPanel/includes/config/config.php';
include $_SERVER['DOCUMENT_ROOT'] . '/PangeaPanel/includes/functions/db.php';

$sql = "SELECT * FROM users";
$result = $db_conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "Full Name" . $row['full_name'] . "Email : " . $row['email'].'<br>';
    }
} else {
    echo '0 results.';
}
