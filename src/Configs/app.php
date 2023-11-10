<?php

use App\Installer\Database\MySqlSetup;

return [
    'min_php_version' => '8.1',

    'repository' => 'https://github.com/Ethan930717/kimoji-dev',

    'database_installers' => [
        /**
         * Map to the Installer class
         */
        'MySql' => MySqlSetup::class,
    ],

    /*
     * Dynamically set configuration defaults and placeholders
     *
     * These do NOT need policy classes
     */

    /* Main Server */
    'server_name' => 'KIMOJI',
    'ip' => '',
    'hostname' => 'kimoji.club',
    'ssl' => true,
    'owner' => '',
    'owner_email' => '',
    'password' => '',

    /* Database */
    'database_driver' => 'MySql',

    'db' => 'kimoji',
    'dbuser' => 'kimoji',
    'dbpass' => '',
    'dbrootpass' => '',

    /* Mail */
    'mail_driver' => 'smtp',
    'mail_host' => 'smtp.gmail.com',
    'mail_port' => '',
    'mail_username' => '',
    'mail_password' => '',
    'mail_from_name' => 'KIMOJI',

    /* Chat */
    'echo-port' => '',

    /* API Keys */
    'tmdb-key' => '',
];
