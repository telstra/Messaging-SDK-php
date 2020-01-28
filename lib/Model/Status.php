<?php
/**
 * Status
 *
 * PHP version 5
 *
 * @category Class
 * @package  Telstra_Messaging
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Telstra Messaging API
 *
 * The API specification for Telstra Messaging API
 *
 * The version of the OpenAPI document: 2.2.9
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.2.3-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Telstra_Messaging\Model;
use \Telstra_Messaging\ObjectSerializer;

/**
 * Status Class Doc Comment
 *
 * @category Class
 * @package  Telstra_Messaging
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Status
{
    /**
     * Possible values of this enum
     */
    const PEND = 'PEND';
    const SENT = 'SENT';
    const DELIVRD = 'DELIVRD';
    const EXPIRED = 'EXPIRED';
    const DELETED = 'DELETED';
    const UNDVBL = 'UNDVBL';
    const REJECTD = 'REJECTD';
    const UNKNOWN = 'Unknown';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::PEND,
            self::SENT,
            self::DELIVRD,
            self::EXPIRED,
            self::DELETED,
            self::UNDVBL,
            self::REJECTD,
            self::UNKNOWN,
        ];
    }
}


