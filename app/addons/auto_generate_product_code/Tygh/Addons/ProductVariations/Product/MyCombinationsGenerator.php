<?php

namespace Tygh\Addons\ProductVariations\Product;

class MyCombinationsGenerator extends CombinationsGenerator
{
    protected function generateProductCode($product_code)
    {
        $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
        $randomString = '';
        for ($i = 0; $i < 14; $i++) {
            $randomString .= $characters[rand(0, strlen($characters) - 1)];
        }
        return $randomString;
    }
}