<?php

defined('BOOTSTRAP') or die('Access denied');

use Tygh\Tygh;
use Tygh\Registry;
use Tygh\Addons\AdvancedImport\Presets\MyImporter;

Tygh::$app['addons.advanced_import.presets.importer'] = static function ($app) {
    return new MyImporter($app['addons.advanced_import.schemas_manager'], $app['addons.advanced_import.modifiers.caching_modifier_parser']);
};
