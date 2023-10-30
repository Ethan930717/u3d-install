<?php

use App\Installer\Database\MySqlSetup;

return [
    'min_php_version' => '8.1',

    'repository' => 'https://github.com/HDInnovations/UNIT3D-Community-Edition.git',

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
    'owner' => 'hudan717',
    'owner_email' => 'dahupt@gmail.com',
    'password' => 'Hudan@717',

    /* Database */
    'database_driver' => 'MySql',

    'db' => 'kimoji',
    'dbuser' => 'hudan717',
    'dbpass' => 'Hudan@717',
    'dbrootpass' => 'Hudan@717',

    /* Mail */
    'mail_driver' => 'smtp',
    'mail_host' => 'smtp.gmail.com',
    'mail_port' => '',
    'mail_username' => 'kimoji.club@gmail.com',
    'mail_password' => 'dlibznknsfsgnmea',
    'mail_from_name' => 'KIMOJI',

    /* Chat */
    'echo-port' => '',

    /* API Keys */
    'tmdb-key' => '107492d808d58cb5f5fae5005c7d764d',
];
