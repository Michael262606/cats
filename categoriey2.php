<?php

error_reporting(E_ALL);

include_once 'db.php';
include_once 'categoriey.php';

function get_categories($conn) {
    
    $sql = "SELECT * FROM categories";

    $result = mysqli_query($conn, $sql);

    $categories = mysqli_fetch_all ($result, MYSQLI_ASSOC);

    return $categories;
}

include_once 'categoriey3.php';

function get_posts($conn) {
    
    $sql = "SELECT * FROM posts";

    $result = mysqli_query($conn, $sql);

    $posts = mysqli_fetch_all ($result, MYSQLI_ASSOC);

    return $posts;
}
    ?>