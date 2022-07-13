<?php

function is_valid_hex_code($phoneNumber) {
    if (!preg_match("/^#[a-fA-F0-9]{6}$/", $phoneNumber)) {
        return false;
    }
    return true;
}
