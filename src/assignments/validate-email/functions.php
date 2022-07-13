<?php

function is_valid_email($email) {
    if (!preg_match("/^[a-zA-Z]+@[a-zA-Z]+\.[a-zA-Z]+$/", $email)) {
        return false;
    }
    return true;
}
