<?php
/**
 * V1LogVerbosity
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * KubeVirt API
 *
 * This is KubeVirt API an add-on for Kubernetes.
 *
 * OpenAPI spec version: 1.0.0
 * Contact: kubevirt-dev@googlegroups.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.19
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * V1LogVerbosity Class Doc Comment
 *
 * @category Class
 * @description LogVerbosity sets log verbosity level of  various components
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class V1LogVerbosity implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'v1.LogVerbosity';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'node_verbosity' => 'map[string,int]',
        'virt_api' => 'int',
        'virt_controller' => 'int',
        'virt_handler' => 'int',
        'virt_launcher' => 'int',
        'virt_operator' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'node_verbosity' => 'int32',
        'virt_api' => 'int32',
        'virt_controller' => 'int32',
        'virt_handler' => 'int32',
        'virt_launcher' => 'int32',
        'virt_operator' => 'int32'
    ];

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
        'node_verbosity' => 'nodeVerbosity',
        'virt_api' => 'virtAPI',
        'virt_controller' => 'virtController',
        'virt_handler' => 'virtHandler',
        'virt_launcher' => 'virtLauncher',
        'virt_operator' => 'virtOperator'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'node_verbosity' => 'setNodeVerbosity',
        'virt_api' => 'setVirtApi',
        'virt_controller' => 'setVirtController',
        'virt_handler' => 'setVirtHandler',
        'virt_launcher' => 'setVirtLauncher',
        'virt_operator' => 'setVirtOperator'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'node_verbosity' => 'getNodeVerbosity',
        'virt_api' => 'getVirtApi',
        'virt_controller' => 'getVirtController',
        'virt_handler' => 'getVirtHandler',
        'virt_launcher' => 'getVirtLauncher',
        'virt_operator' => 'getVirtOperator'
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
        $this->container['node_verbosity'] = isset($data['node_verbosity']) ? $data['node_verbosity'] : null;
        $this->container['virt_api'] = isset($data['virt_api']) ? $data['virt_api'] : null;
        $this->container['virt_controller'] = isset($data['virt_controller']) ? $data['virt_controller'] : null;
        $this->container['virt_handler'] = isset($data['virt_handler']) ? $data['virt_handler'] : null;
        $this->container['virt_launcher'] = isset($data['virt_launcher']) ? $data['virt_launcher'] : null;
        $this->container['virt_operator'] = isset($data['virt_operator']) ? $data['virt_operator'] : null;
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
     * Gets node_verbosity
     *
     * @return map[string,int]
     */
    public function getNodeVerbosity()
    {
        return $this->container['node_verbosity'];
    }

    /**
     * Sets node_verbosity
     *
     * @param map[string,int] $node_verbosity NodeVerbosity represents a map of nodes with a specific verbosity level
     *
     * @return $this
     */
    public function setNodeVerbosity($node_verbosity)
    {
        $this->container['node_verbosity'] = $node_verbosity;

        return $this;
    }

    /**
     * Gets virt_api
     *
     * @return int
     */
    public function getVirtApi()
    {
        return $this->container['virt_api'];
    }

    /**
     * Sets virt_api
     *
     * @param int $virt_api virt_api
     *
     * @return $this
     */
    public function setVirtApi($virt_api)
    {
        $this->container['virt_api'] = $virt_api;

        return $this;
    }

    /**
     * Gets virt_controller
     *
     * @return int
     */
    public function getVirtController()
    {
        return $this->container['virt_controller'];
    }

    /**
     * Sets virt_controller
     *
     * @param int $virt_controller virt_controller
     *
     * @return $this
     */
    public function setVirtController($virt_controller)
    {
        $this->container['virt_controller'] = $virt_controller;

        return $this;
    }

    /**
     * Gets virt_handler
     *
     * @return int
     */
    public function getVirtHandler()
    {
        return $this->container['virt_handler'];
    }

    /**
     * Sets virt_handler
     *
     * @param int $virt_handler virt_handler
     *
     * @return $this
     */
    public function setVirtHandler($virt_handler)
    {
        $this->container['virt_handler'] = $virt_handler;

        return $this;
    }

    /**
     * Gets virt_launcher
     *
     * @return int
     */
    public function getVirtLauncher()
    {
        return $this->container['virt_launcher'];
    }

    /**
     * Sets virt_launcher
     *
     * @param int $virt_launcher virt_launcher
     *
     * @return $this
     */
    public function setVirtLauncher($virt_launcher)
    {
        $this->container['virt_launcher'] = $virt_launcher;

        return $this;
    }

    /**
     * Gets virt_operator
     *
     * @return int
     */
    public function getVirtOperator()
    {
        return $this->container['virt_operator'];
    }

    /**
     * Sets virt_operator
     *
     * @param int $virt_operator virt_operator
     *
     * @return $this
     */
    public function setVirtOperator($virt_operator)
    {
        $this->container['virt_operator'] = $virt_operator;

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
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


