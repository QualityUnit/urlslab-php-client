<?php
/**
 * DomainDataRetrievalAugmentRequestWithURLContext
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * URLSLAB API
 *
 * optimize your website with SEO
 *
 * The version of the OpenAPI document: 1.0.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.3.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * DomainDataRetrievalAugmentRequestWithURLContext Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class DomainDataRetrievalAugmentRequestWithURLContext implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'domain.dataRetrieval.AugmentRequestWithURLContext';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'urls' => 'string[]',
        'top_k_chunks' => 'int',
        'prompt' => 'object',
        'generation_strategy' => 'string',
        'mode_name' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'urls' => null,
        'top_k_chunks' => 'int32',
        'prompt' => null,
        'generation_strategy' => null,
        'mode_name' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'urls' => false,
		'top_k_chunks' => true,
		'prompt' => false,
		'generation_strategy' => true,
		'mode_name' => true
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

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
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'urls' => 'urls',
        'top_k_chunks' => 'topKChunks',
        'prompt' => 'prompt',
        'generation_strategy' => 'generationStrategy',
        'mode_name' => 'modeName'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'urls' => 'setUrls',
        'top_k_chunks' => 'setTopKChunks',
        'prompt' => 'setPrompt',
        'generation_strategy' => 'setGenerationStrategy',
        'mode_name' => 'setModeName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'urls' => 'getUrls',
        'top_k_chunks' => 'getTopKChunks',
        'prompt' => 'getPrompt',
        'generation_strategy' => 'getGenerationStrategy',
        'mode_name' => 'getModeName'
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

    public const MODE_NAME__4_1106_PREVIEW = 'gpt-4-1106-preview';
    public const MODE_NAME__4_32K = 'gpt-4-32k';
    public const MODE_NAME__3_5_TURBO_16K = 'gpt-3.5-turbo-16k';
    public const MODE_NAME__3_5_TURBO_1106 = 'gpt-3.5-turbo-1106';
    public const MODE_NAME__4 = 'gpt-4';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getModeNameAllowableValues()
    {
        return [
            self::MODE_NAME__4_1106_PREVIEW,
            self::MODE_NAME__4_32K,
            self::MODE_NAME__3_5_TURBO_16K,
            self::MODE_NAME__3_5_TURBO_1106,
            self::MODE_NAME__4,
        ];
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
        $this->setIfExists('urls', $data ?? [], null);
        $this->setIfExists('top_k_chunks', $data ?? [], null);
        $this->setIfExists('prompt', $data ?? [], null);
        $this->setIfExists('generation_strategy', $data ?? [], null);
        $this->setIfExists('mode_name', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['urls'] === null) {
            $invalidProperties[] = "'urls' can't be null";
        }
        if ($this->container['prompt'] === null) {
            $invalidProperties[] = "'prompt' can't be null";
        }
        $allowedValues = $this->getModeNameAllowableValues();
        if (!is_null($this->container['mode_name']) && !in_array($this->container['mode_name'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'mode_name', must be one of '%s'",
                $this->container['mode_name'],
                implode("', '", $allowedValues)
            );
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
     * Gets urls
     *
     * @return string[]
     */
    public function getUrls()
    {
        return $this->container['urls'];
    }

    /**
     * Sets urls
     *
     * @param string[] $urls urls
     *
     * @return self
     */
    public function setUrls($urls)
    {
        if (is_null($urls)) {
            throw new \InvalidArgumentException('non-nullable urls cannot be null');
        }
        $this->container['urls'] = $urls;

        return $this;
    }

    /**
     * Gets top_k_chunks
     *
     * @return int|null
     */
    public function getTopKChunks()
    {
        return $this->container['top_k_chunks'];
    }

    /**
     * Sets top_k_chunks
     *
     * @param int|null $top_k_chunks top_k_chunks
     *
     * @return self
     */
    public function setTopKChunks($top_k_chunks)
    {
        if (is_null($top_k_chunks)) {
            array_push($this->openAPINullablesSetToNull, 'top_k_chunks');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('top_k_chunks', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['top_k_chunks'] = $top_k_chunks;

        return $this;
    }

    /**
     * Gets prompt
     *
     * @return object
     */
    public function getPrompt()
    {
        return $this->container['prompt'];
    }

    /**
     * Sets prompt
     *
     * @param object $prompt prompt
     *
     * @return self
     */
    public function setPrompt($prompt)
    {
        if (is_null($prompt)) {
            throw new \InvalidArgumentException('non-nullable prompt cannot be null');
        }
        $this->container['prompt'] = $prompt;

        return $this;
    }

    /**
     * Gets generation_strategy
     *
     * @return string|null
     */
    public function getGenerationStrategy()
    {
        return $this->container['generation_strategy'];
    }

    /**
     * Sets generation_strategy
     *
     * @param string|null $generation_strategy generation_strategy
     *
     * @return self
     */
    public function setGenerationStrategy($generation_strategy)
    {
        if (is_null($generation_strategy)) {
            array_push($this->openAPINullablesSetToNull, 'generation_strategy');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('generation_strategy', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['generation_strategy'] = $generation_strategy;

        return $this;
    }

    /**
     * Gets mode_name
     *
     * @return string|null
     */
    public function getModeName()
    {
        return $this->container['mode_name'];
    }

    /**
     * Sets mode_name
     *
     * @param string|null $mode_name mode_name
     *
     * @return self
     */
    public function setModeName($mode_name)
    {
        if (is_null($mode_name)) {
            array_push($this->openAPINullablesSetToNull, 'mode_name');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('mode_name', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $allowedValues = $this->getModeNameAllowableValues();
        if (!is_null($mode_name) && !in_array($mode_name, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'mode_name', must be one of '%s'",
                    $mode_name,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['mode_name'] = $mode_name;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
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


