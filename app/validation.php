<?php
use Core\ValidationEngine;

function validate($data = [], $template = []) {
    $validation = ValidationEngine::getInstance();
    return $validation->make($data, $template);
}