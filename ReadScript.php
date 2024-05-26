<?php
require_once "Dbconn.php";
$fetchedData = fetch_data($conn);

function fetch_data($connection) {
    $query = "SELECT * FROM students";
    $exec = mysqli_query($connection, $query);
    if (mysqli_num_rows($exec) > 0) {
        return mysqli_fetch_all($exec, MYSQLI_ASSOC);
    } else {
        return [];
    }
}
?>