<?php
@session_start();
function get_publish_article()
{
    $data = array();

    $sql = "SELECT * FROM `article` WHERE `publish` = 1";

    $query = mysqli_query($_SESSION['link'], $sql);
    if ($query) {
        if (mysqli_num_rows($query) > 0) {
            while ($row = mysqli_fetch_assoc($query)) {
                $data[] = $row;
            }
        }
    } else {
        echo "wrong" . mysqli_error($_SESSION['link']);
    }
    return $data;
}

function get_article($id)
{
    $result = null;

    $sql = "SELECT * FROM `article` WHERE `publish` = 1 AND `id` = {$id}";

    $query = mysqli_query($_SESSION['link'], $sql);
    if ($query) {
        if (mysqli_num_rows($query) == 1) {
            $result = mysqli_fetch_assoc($query);
        }
    } else {
        echo "wrong" . mysqli_error($_SESSION['link']);
    }
    return  $result;
}
