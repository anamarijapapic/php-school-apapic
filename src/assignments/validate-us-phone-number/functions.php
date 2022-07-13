<?php

function is_valid_phone_number($phoneNumber) {
    if (!preg_match("/^\((\d){3}\)\s(\d){3}-(\d){4}$/", $phoneNumber)) {
        return false;
    }
    return true;
}
