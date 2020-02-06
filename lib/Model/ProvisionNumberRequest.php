<?php
/**
 * ProvisionNumberRequest
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
 * The Telstra Messaging API specification
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

use \ArrayAccess;
use \Telstra_Messaging\ObjectSerializer;

/**
 * ProvisionNumberRequest Class Doc Comment
 *
 * @category Class
 * @package  Telstra_Messaging
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ProvisionNumberRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ProvisionNumberRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'active_days' => 'int',
        'notify_url' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'active_days' => 'int32',
        'notify_url' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'active_days' => 'activeDays',
        'notify_url' => 'notifyURL'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'active_days' => 'setActiveDays',
        'notify_url' => 'setNotifyUrl'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'active_days' => 'getActiveDays',
        'notify_url' => 'getNotifyUrl'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['active_days'] = isset($data['active_days']) ? $data['active_days'] : null;
        $this->container['notify_url'] = isset($data['notify_url']) ? $data['notify_url'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets active_days
     *
     * @return int|null
     */
    public function getActiveDays()
    {
        return $this->container['active_days'];
    }

    /**
     * Sets active_days
     *
     * @param int|null $active_days The number of days before for which this number is provisioned.
     *
     * @return $this
     */
    public function setActiveDays($active_days)
    {
        $this->container['active_days'] = $active_days;

        return $this;
    }

    /**
     * Gets notify_url
     *
     * @return string|null
     */
    public function getNotifyUrl()
    {
        return $this->container['notify_url'];
    }

    /**
     * Sets notify_url
     *
     * @param string|null $notify_url A notification URL that will be POSTed to whenever a new message (i.e. a reply to a message sent) arrives at this destination address.  If this is not provided then you can use the Get /sms or /mms API to poll for reply messages.  If you are using a domain URL you must include the forward slash at the end of the URL (e.g. http://www.example.com/).  *Please note that the notification URLs and the Get /sms or /mms call are exclusive. If a notification URL has been set then the GET call will not provide any useful information.*
     *
     * @return $this
     */
    public function setNotifyUrl($notify_url)
    {
        $this->container['notify_url'] = $notify_url;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


