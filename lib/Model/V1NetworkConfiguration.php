<?php
/**
 * V1NetworkConfiguration
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
 * V1NetworkConfiguration Class Doc Comment
 *
 * @category Class
 * @description NetworkConfiguration holds network options
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class V1NetworkConfiguration implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'v1.NetworkConfiguration';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'default_network_interface' => 'string',
        'permit_bridge_interface_on_pod_network' => 'bool',
        'permit_slirp_interface' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'default_network_interface' => null,
        'permit_bridge_interface_on_pod_network' => null,
        'permit_slirp_interface' => null
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
        'default_network_interface' => 'defaultNetworkInterface',
        'permit_bridge_interface_on_pod_network' => 'permitBridgeInterfaceOnPodNetwork',
        'permit_slirp_interface' => 'permitSlirpInterface'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'default_network_interface' => 'setDefaultNetworkInterface',
        'permit_bridge_interface_on_pod_network' => 'setPermitBridgeInterfaceOnPodNetwork',
        'permit_slirp_interface' => 'setPermitSlirpInterface'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'default_network_interface' => 'getDefaultNetworkInterface',
        'permit_bridge_interface_on_pod_network' => 'getPermitBridgeInterfaceOnPodNetwork',
        'permit_slirp_interface' => 'getPermitSlirpInterface'
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
        $this->container['default_network_interface'] = isset($data['default_network_interface']) ? $data['default_network_interface'] : null;
        $this->container['permit_bridge_interface_on_pod_network'] = isset($data['permit_bridge_interface_on_pod_network']) ? $data['permit_bridge_interface_on_pod_network'] : null;
        $this->container['permit_slirp_interface'] = isset($data['permit_slirp_interface']) ? $data['permit_slirp_interface'] : null;
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
     * Gets default_network_interface
     *
     * @return string
     */
    public function getDefaultNetworkInterface()
    {
        return $this->container['default_network_interface'];
    }

    /**
     * Sets default_network_interface
     *
     * @param string $default_network_interface default_network_interface
     *
     * @return $this
     */
    public function setDefaultNetworkInterface($default_network_interface)
    {
        $this->container['default_network_interface'] = $default_network_interface;

        return $this;
    }

    /**
     * Gets permit_bridge_interface_on_pod_network
     *
     * @return bool
     */
    public function getPermitBridgeInterfaceOnPodNetwork()
    {
        return $this->container['permit_bridge_interface_on_pod_network'];
    }

    /**
     * Sets permit_bridge_interface_on_pod_network
     *
     * @param bool $permit_bridge_interface_on_pod_network permit_bridge_interface_on_pod_network
     *
     * @return $this
     */
    public function setPermitBridgeInterfaceOnPodNetwork($permit_bridge_interface_on_pod_network)
    {
        $this->container['permit_bridge_interface_on_pod_network'] = $permit_bridge_interface_on_pod_network;

        return $this;
    }

    /**
     * Gets permit_slirp_interface
     *
     * @return bool
     */
    public function getPermitSlirpInterface()
    {
        return $this->container['permit_slirp_interface'];
    }

    /**
     * Sets permit_slirp_interface
     *
     * @param bool $permit_slirp_interface permit_slirp_interface
     *
     * @return $this
     */
    public function setPermitSlirpInterface($permit_slirp_interface)
    {
        $this->container['permit_slirp_interface'] = $permit_slirp_interface;

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


