<?php
/**
 * General Configuration
 *
 * All of your system's general configuration settings go in here. You can see a
 * list of the available settings in vendor/craftcms/cms/src/config/GeneralConfig.php.
 *
 * @see craft\config\GeneralConfig
 */

return [
    // Global settings
    '*' => [
        // Craft defined config settings
        'defaultSearchTermOptions' => [
            'subLeft' => true,
            'subRight' => true,
        ],
        'enableCsrfProtection' => false,
        'generateTransformsBeforePageLoad' => true,
        'omitScriptNameInUrls' => true,
        'securityKey' => getenv('SECURITY_KEY'),
        'usePathInfo' => true,

        // Aliases parsed in sites’ settings, volumes’ settings, and Local volumes’ settings
        'aliases' => [
            '@basePath' => getenv('BASE_PATH'),
            '@baseUrl' => getenv('BASE_URL'),
        ],
        // Custom site-specific config settings
        'custom' => [
            'craftEnv' => CRAFT_ENVIRONMENT,
        ]
    ],

    // Local (development) environment
    'local' => [
        // Craft defined config settings
        'allowUpdates' => true,
        'backupOnUpdate' => true,
        'devMode' => true,
        'enableTemplateCaching' => false,
        'isSystemOn' => true,
        // Aliases parsed in sites’ settings, volumes’ settings, and Local volumes’ settings
        'aliases' => [
        ],
        // Custom site-specific config settings
        'custom' => [
        ]
    ],

    // Staging environment settings
    'staging' => [
        // Base site URL
        'siteUrl' => null,
    ],

    // Production environment settings
    'production' => [
        // Base site URL
        'siteUrl' => null,
    ],
];
