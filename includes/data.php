<?php

function get_data($url) {
    $url = "http://reddit.com/" . $url . ".json";
    $raw = file_get_contents($url);    
    return json_decode($raw);
}

// that was easy ;)
function get_posts() {
    return get_data("");
}

function get_post($id) {
    return get_data("by_id/$id");
}

function get_comments($id) {
    return get_data("comments/$id");
}