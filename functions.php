<?php
function get_orders(){
    global $db;
    $query = mysqli_query($db, "SELECT * FROM vitrin_tbl ORDER BY id DESC");
    $orders = array();
    while ($row = mysqli_fetch_array($query)) {
        $orders[] = $row;
    }
    return $orders;
}