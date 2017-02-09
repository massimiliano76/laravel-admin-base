<?php

/**
 * Created by Byte Net IT Company.
 *
 * Helper app functions. PHP version 7.1
 *
 * @package ByteNet\LaravelAdminBase
 * @author  Byte Net <office@bytenet.rs>
 * @license http://bytenet.rs/licenses/btnt-license-v1-0 BTNT-License v1.0
 * @link    http://bytenet.rs Byte Net IT company
 */

if (! function_exists('mb_ucfirst')) {
    /**
     * Make upper capital first letter of given string
     *
     * @param string $str String for manipulation
     * @return string String with upper capital first letter
     */
    function mb_ucfirst($str) {
        $fc = mb_strtoupper(mb_substr($str, 0, 1));
        return $fc.mb_substr($str, 1);
    }
}