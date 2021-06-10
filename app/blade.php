<?php
use Core\BladeEngine;

function view($view, $args = []) {
    $blade = BladeEngine::getInstance(__DIR__ . '/views', __DIR__ . '/views-cache');
    return $blade->make($view, $args);
}