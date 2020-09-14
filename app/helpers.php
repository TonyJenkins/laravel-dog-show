<?php

function current_user () {

    return auth () -> user ();
}

function paragraphs_as_html ($str, $margin) {

    if ($margin) {
        $open_tag = "<p class=\"mb-{$margin}\">";
    }
    else {
        $open_tag = "<p>";
    }

    return $open_tag . str_replace ("\n\n", $open_tag . "</p>", $str) . "</p>";

}

function fake_image_url ($id, $size) {

    return "https://placedog.net/{$size}/{$size}/g?id=" . $id;

}

