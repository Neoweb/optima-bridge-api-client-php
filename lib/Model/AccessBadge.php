<?php
/**
 * AccessBadge
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  OptimaBridge\Client
 * @author   Quentin GUERIN (quentin.guerin@neoweb.fr)
 * @link     https://openapi-generator.tech
 */

/**
 * Optima-Bridge API Specification
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: 1.0.0
 * Contact: quentin.guerin@neoweb.fr
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.2.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OptimaBridge\Client\Model;

use \ArrayAccess;
use \OptimaBridge\Client\ObjectSerializer;

/**
 * AccessBadge Class Doc Comment
 *
 * @category Class
 * @package  OptimaBridge\Client
 * @author   Quentin GUERIN (quentin.guerin@neoweb.fr)
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AccessBadge implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AccessBadge';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'uid' => 'int',
        'licence_plate' => 'string',
        'starting_date' => '\DateTime',
        'expiration_date' => '\DateTime',
        'kind' => 'string',
        'make' => 'string',
        'model' => 'string',
        'owner' => '\OptimaBridge\Client\Model\Owner'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'uid' => 'int64',
        'licence_plate' => null,
        'starting_date' => 'date-time',
        'expiration_date' => 'date-time',
        'kind' => null,
        'make' => null,
        'model' => null,
        'owner' => null
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
        'uid' => 'uid',
        'licence_plate' => 'licence_plate',
        'starting_date' => 'starting_date',
        'expiration_date' => 'expiration_date',
        'kind' => 'kind',
        'make' => 'make',
        'model' => 'model',
        'owner' => 'owner'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'uid' => 'setUid',
        'licence_plate' => 'setLicencePlate',
        'starting_date' => 'setStartingDate',
        'expiration_date' => 'setExpirationDate',
        'kind' => 'setKind',
        'make' => 'setMake',
        'model' => 'setModel',
        'owner' => 'setOwner'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'uid' => 'getUid',
        'licence_plate' => 'getLicencePlate',
        'starting_date' => 'getStartingDate',
        'expiration_date' => 'getExpirationDate',
        'kind' => 'getKind',
        'make' => 'getMake',
        'model' => 'getModel',
        'owner' => 'getOwner'
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

    const KIND_VOITURE = 'Voiture';
    const KIND_CAMION = 'Camion';
    const KIND_VHICULE_UTILITAIRE = 'Véhicule utilitaire';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getKindAllowableValues()
    {
        return [
            self::KIND_VOITURE,
            self::KIND_CAMION,
            self::KIND_VHICULE_UTILITAIRE,
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
        $this->container['uid'] = $data['uid'] ?? null;
        $this->container['licence_plate'] = $data['licence_plate'] ?? null;
        $this->container['starting_date'] = $data['starting_date'] ?? null;
        $this->container['expiration_date'] = $data['expiration_date'] ?? null;
        $this->container['kind'] = $data['kind'] ?? null;
        $this->container['make'] = $data['make'] ?? null;
        $this->container['model'] = $data['model'] ?? null;
        $this->container['owner'] = $data['owner'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getKindAllowableValues();
        if (!is_null($this->container['kind']) && !in_array($this->container['kind'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'kind', must be one of '%s'",
                $this->container['kind'],
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
     * Gets uid
     *
     * @return int|null
     */
    public function getUid()
    {
        return $this->container['uid'];
    }

    /**
     * Sets uid
     *
     * @param int|null $uid uid
     *
     * @return self
     */
    public function setUid($uid)
    {
        $this->container['uid'] = $uid;

        return $this;
    }

    /**
     * Gets licence_plate
     *
     * @return string|null
     */
    public function getLicencePlate()
    {
        return $this->container['licence_plate'];
    }

    /**
     * Sets licence_plate
     *
     * @param string|null $licence_plate licence_plate
     *
     * @return self
     */
    public function setLicencePlate($licence_plate)
    {
        $this->container['licence_plate'] = $licence_plate;

        return $this;
    }

    /**
     * Gets starting_date
     *
     * @return \DateTime|null
     */
    public function getStartingDate()
    {
        return $this->container['starting_date'];
    }

    /**
     * Sets starting_date
     *
     * @param \DateTime|null $starting_date starting_date
     *
     * @return self
     */
    public function setStartingDate($starting_date)
    {
        $this->container['starting_date'] = $starting_date;

        return $this;
    }

    /**
     * Gets expiration_date
     *
     * @return \DateTime|null
     */
    public function getExpirationDate()
    {
        return $this->container['expiration_date'];
    }

    /**
     * Sets expiration_date
     *
     * @param \DateTime|null $expiration_date expiration_date
     *
     * @return self
     */
    public function setExpirationDate($expiration_date)
    {
        $this->container['expiration_date'] = $expiration_date;

        return $this;
    }

    /**
     * Gets kind
     *
     * @return string|null
     */
    public function getKind()
    {
        return $this->container['kind'];
    }

    /**
     * Sets kind
     *
     * @param string|null $kind kind
     *
     * @return self
     */
    public function setKind($kind)
    {
        $allowedValues = $this->getKindAllowableValues();
        if (!is_null($kind) && !in_array($kind, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'kind', must be one of '%s'",
                    $kind,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['kind'] = $kind;

        return $this;
    }

    /**
     * Gets make
     *
     * @return string|null
     */
    public function getMake()
    {
        return $this->container['make'];
    }

    /**
     * Sets make
     *
     * @param string|null $make make
     *
     * @return self
     */
    public function setMake($make)
    {
        $this->container['make'] = $make;

        return $this;
    }

    /**
     * Gets model
     *
     * @return string|null
     */
    public function getModel()
    {
        return $this->container['model'];
    }

    /**
     * Sets model
     *
     * @param string|null $model model
     *
     * @return self
     */
    public function setModel($model)
    {
        $this->container['model'] = $model;

        return $this;
    }

    /**
     * Gets owner
     *
     * @return \OptimaBridge\Client\Model\Owner|null
     */
    public function getOwner()
    {
        return $this->container['owner'];
    }

    /**
     * Sets owner
     *
     * @param \OptimaBridge\Client\Model\Owner|null $owner owner
     *
     * @return self
     */
    public function setOwner($owner)
    {
        $this->container['owner'] = $owner;

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
     * @return mixed|null
     */
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
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
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


