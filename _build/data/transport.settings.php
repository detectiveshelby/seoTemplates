<?php
/** @var modX $modx */
/** @var array $sources */

$settings = array();

$tmp = array(
    'placeholder_prefix' => array(
        'xtype' => 'textfield',
        'value' => 'st_',
        'area' => 'seotemplates_main',
    ),
);

foreach ($tmp as $k => $v) {
    /** @var modSystemSetting $setting */
    $setting = $modx->newObject('modSystemSetting');
    $setting->fromArray(array_merge(
        array(
            'key' => 'seotemplates_' . $k,
            'namespace' => PKG_NAME_LOWER,
        ), $v
    ), '', true, true);

    $settings[] = $setting;
}
unset($tmp);

return $settings;
