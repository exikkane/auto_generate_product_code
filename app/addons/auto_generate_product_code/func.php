<?php

function fn_auto_generate_product_code_update_product_pre(&$product_data, $product_id, $lang_code, $can_update)
{
    if (empty($product_data['product_code'])) {
        $product_data['product_code'] = generateRandomString();
    }
}

function generateRandomString() {
    $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
    $randomString = '';
    for ($i = 0; $i < 14; $i++) {
        $randomString .= $characters[rand(0, strlen($characters) - 1)];
    }
    return $randomString;
}