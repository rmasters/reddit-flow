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

// fullname is like t*_[id], name in get_posts()' output
// also returns voting info
function get_post($fullname) {
    return get_data("by_id/$fullname");
}

function get_comments($fullname) {
    return get_data("comments/$fullname");
}