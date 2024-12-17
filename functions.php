<?php 

function dd($variable) {
    echo "<pre>";
    var_dump($variable);
    echo "</pre>";

    die();
};

function urlIs($input) {
    return $_SERVER['REQUEST_URI'] === $input;
};

function authorize($condition, $status = Response::FORBIDDEN) {
    if (! $condition) {
        abort($status);
    }
};

