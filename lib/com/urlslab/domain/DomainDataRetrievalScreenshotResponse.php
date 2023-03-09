<?php
/**
 * DomainDataRetrievalScreenshotResponse
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * URLSLAB API
 *
 * optimize your website with SEO
 *
 * OpenAPI spec version: 1.0.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.41
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\com.urlslab.domain;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * DomainDataRetrievalScreenshotResponse Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DomainDataRetrievalScreenshotResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'domain.dataRetrieval.ScreenshotResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'domain_id' => 'string',
'url_id' => 'string',
'screenshot_id' => 'int',
'url_title' => 'string',
'url_meta_description' => 'string',
'screenshot_status' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'domain_id' => null,
'url_id' => null,
'screenshot_id' => 'int64',
'url_title' => null,
'url_meta_description' => null,
'screenshot_status' => null    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'domain_id' => 'domainId',
'url_id' => 'urlId',
'screenshot_id' => 'screenshotID',
'url_title' => 'urlTitle',
'url_meta_description' => 'urlMetaDescription',
'screenshot_status' => 'screenshotStatus'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'domain_id' => 'setDomainId',
'url_id' => 'setUrlId',
'screenshot_id' => 'setScreenshotId',
'url_title' => 'setUrlTitle',
'url_meta_description' => 'setUrlMetaDescription',
'screenshot_status' => 'setScreenshotStatus'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'domain_id' => 'getDomainId',
'url_id' => 'getUrlId',
'screenshot_id' => 'getScreenshotId',
'url_title' => 'getUrlTitle',
'url_meta_description' => 'getUrlMetaDescription',
'screenshot_status' => 'getScreenshotStatus'    ];

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
        return self::$swaggerModelName;
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
        $this->container['domain_id'] = isset($data['domain_id']) ? $data['domain_id'] : null;
        $this->container['url_id'] = isset($data['url_id']) ? $data['url_id'] : null;
        $this->container['screenshot_id'] = isset($data['screenshot_id']) ? $data['screenshot_id'] : null;
        $this->container['url_title'] = isset($data['url_title']) ? $data['url_title'] : null;
        $this->container['url_meta_description'] = isset($data['url_meta_description']) ? $data['url_meta_description'] : null;
        $this->container['screenshot_status'] = isset($data['screenshot_status']) ? $data['screenshot_status'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['domain_id'] === null) {
            $invalidProperties[] = "'domain_id' can't be null";
        }
        if ($this->container['url_id'] === null) {
            $invalidProperties[] = "'url_id' can't be null";
        }
        if ($this->container['screenshot_status'] === null) {
            $invalidProperties[] = "'screenshot_status' can't be null";
        }
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
     * Gets domain_id
     *
     * @return string
     */
    public function getDomainId()
    {
        return $this->container['domain_id'];
    }

    /**
     * Sets domain_id
     *
     * @param string $domain_id domain_id
     *
     * @return $this
     */
    public function setDomainId($domain_id)
    {
        $this->container['domain_id'] = $domain_id;

        return $this;
    }

    /**
     * Gets url_id
     *
     * @return string
     */
    public function getUrlId()
    {
        return $this->container['url_id'];
    }

    /**
     * Sets url_id
     *
     * @param string $url_id url_id
     *
     * @return $this
     */
    public function setUrlId($url_id)
    {
        $this->container['url_id'] = $url_id;

        return $this;
    }

    /**
     * Gets screenshot_id
     *
     * @return int
     */
    public function getScreenshotId()
    {
        return $this->container['screenshot_id'];
    }

    /**
     * Sets screenshot_id
     *
     * @param int $screenshot_id screenshot_id
     *
     * @return $this
     */
    public function setScreenshotId($screenshot_id)
    {
        $this->container['screenshot_id'] = $screenshot_id;

        return $this;
    }

    /**
     * Gets url_title
     *
     * @return string
     */
    public function getUrlTitle()
    {
        return $this->container['url_title'];
    }

    /**
     * Sets url_title
     *
     * @param string $url_title url_title
     *
     * @return $this
     */
    public function setUrlTitle($url_title)
    {
        $this->container['url_title'] = $url_title;

        return $this;
    }

    /**
     * Gets url_meta_description
     *
     * @return string
     */
    public function getUrlMetaDescription()
    {
        return $this->container['url_meta_description'];
    }

    /**
     * Sets url_meta_description
     *
     * @param string $url_meta_description url_meta_description
     *
     * @return $this
     */
    public function setUrlMetaDescription($url_meta_description)
    {
        $this->container['url_meta_description'] = $url_meta_description;

        return $this;
    }

    /**
     * Gets screenshot_status
     *
     * @return string
     */
    public function getScreenshotStatus()
    {
        return $this->container['screenshot_status'];
    }

    /**
     * Sets screenshot_status
     *
     * @param string $screenshot_status screenshot_status
     *
     * @return $this
     */
    public function setScreenshotStatus($screenshot_status)
    {
        $this->container['screenshot_status'] = $screenshot_status;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange] 
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
    #[\ReturnTypeWillChange] 
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
    #[\ReturnTypeWillChange] 
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
    #[\ReturnTypeWillChange] 
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
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
