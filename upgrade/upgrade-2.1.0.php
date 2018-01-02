<?php

if (!defined('_TB_VERSION_')) {
    return;
}

function upgrade_module_2_1_0($module)
{
    Configuration::updateValue('NEW_PRODUCTS_TTL', 300); // Cache for max 5 minutes

    $module->clearCache();

    return true;
}
