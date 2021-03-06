<?php
/**
 * Configuration file generated by ZF Apigility Admin
 *
 * The previous config file has been stored in application.config.old
 */

// Allows use of application both in WP and in Apigility.
$module_path = defined( 'RESTFULWP_PATH' ) ? RESTFULWP_PATH : './';

return array(
    'modules' => array(
        'Application',
        'ZF\\DevelopmentMode',
        'ZF\\Apigility',
        'ZF\\Apigility\\Provider',
        'ZF\\Apigility\\Documentation',
        'AssetManager',
        'ZF\\ApiProblem',
        'ZF\\Configuration',
        'ZF\\MvcAuth',
        'ZF\\OAuth2',
        'ZF\\Hal',
        'ZF\\ContentNegotiation',
        'ZF\\ContentValidation',
        'ZF\\Rest',
        'ZF\\Rpc',
        'ZF\\Versioning',
        'WordPress',
    ),
    'module_listener_options' => array(
        'module_paths' => array(
            $module_path . 'module',
            $module_path . 'vendor',
        ),
        'config_glob_paths' => array(
            '/Users/matt/Repositories/RESTful-WP_API/config/autoload/{,*.}{global,local}.php',
        ),
        'config_cache_key' => 'application.config.cache',
        'config_cache_enabled' => true,
        'module_map_cache_key' => 'application.module.cache',
        'module_map_cache_enabled' => true,
        'cache_dir' => 'data/cache/',
    ),
);
