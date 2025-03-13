<?php

namespace Tygh\Addons\AdvancedImport\Presets;

class MyImporter extends Importer
{
    public function prepareImportItems(
        array $items_list,
        array $fields,
              $object_type,
              $rewrite_value = false,
        array $remapping_schema = null
    ) {
        foreach ($items_list as &$item)
        {
            if (empty($item['Product code'])) {
                $item['Product code'] = generateRandomString();
            }
        }
        return parent::prepareImportItems($items_list, $fields, $object_type, $rewrite_value, $remapping_schema);
    }
}