<?php

defined('BOOTSTRAP') or die('Access denied');

use Tygh\Tygh;
use Tygh\Addons\AdvancedImport\Presets\MyImporter;
use Tygh\Addons\ProductVariations\Product\MyCombinationsGenerator;

Tygh::$app['addons.advanced_import.presets.importer'] = static function ($app) {
    return new MyImporter($app['addons.advanced_import.schemas_manager'], $app['addons.advanced_import.modifiers.caching_modifier_parser']);
};

Tygh::$app['addons.product_variations.product.compbinations_generator'] = function ($app) {
    return new MyCombinationsGenerator($app['addons.product_variations.product.repository']);
};

fn_register_hooks(
    'update_product_pre'
);
