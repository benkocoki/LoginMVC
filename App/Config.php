<?php

namespace App;

/**
 * Application configuration
 *
 * PHP version 7.0
 */
class Config
{

    /**
     * Database host
     * @var string
     */
    const DB_HOST = 'localhost';

    /**
     * Database name
     * @var string
     */
    const DB_NAME = 'mvclogin';

    /**
     * Database user
     * @var string
     */
    const DB_USER = 'benkocoki';

    /**
     * Database password
     * @var string
     */
    const DB_PASSWORD = 'jovana82';

    /**
     * Show or hide error messages on screen
     * @var boolean
     */
    const SHOW_ERRORS = true;

    const SECRET_KEY = 'qIsMXa8thQ6SdDSYWQzf5CfL8MNN0Qbq';

    const MAILGUN_API_KEY = 'key-bdd8662b7da2789ff9c4503390cc4bb2';
    const MAILGUN_DOMAIN = 'sandbox50a04a5d5563464f96809e5b0a175d0d.mailgun.org';

}
