<?php

$conn = mysqli_connect("localhost", "root", "", "dbtokomotor");

function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $err = mysqli_error($conn);
    if ($err) {
        echo $err;
        die;
    }
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
};
