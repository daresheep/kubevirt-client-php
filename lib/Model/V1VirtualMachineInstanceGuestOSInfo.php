<?php
/**
 * V1VirtualMachineInstanceGuestOSInfo
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
 * V1VirtualMachineInstanceGuestOSInfo Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class V1VirtualMachineInstanceGuestOSInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'v1.VirtualMachineInstanceGuestOSInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'kernel_release' => 'string',
        'kernel_version' => 'string',
        'machine' => 'string',
        'name' => 'string',
        'pretty_name' => 'string',
        'version' => 'string',
        'version_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'kernel_release' => null,
        'kernel_version' => null,
        'machine' => null,
        'name' => null,
        'pretty_name' => null,
        'version' => null,
        'version_id' => null
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
        'id' => 'id',
        'kernel_release' => 'kernelRelease',
        'kernel_version' => 'kernelVersion',
        'machine' => 'machine',
        'name' => 'name',
        'pretty_name' => 'prettyName',
        'version' => 'version',
        'version_id' => 'versionId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'kernel_release' => 'setKernelRelease',
        'kernel_version' => 'setKernelVersion',
        'machine' => 'setMachine',
        'name' => 'setName',
        'pretty_name' => 'setPrettyName',
        'version' => 'setVersion',
        'version_id' => 'setVersionId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'kernel_release' => 'getKernelRelease',
        'kernel_version' => 'getKernelVersion',
        'machine' => 'getMachine',
        'name' => 'getName',
        'pretty_name' => 'getPrettyName',
        'version' => 'getVersion',
        'version_id' => 'getVersionId'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['kernel_release'] = isset($data['kernel_release']) ? $data['kernel_release'] : null;
        $this->container['kernel_version'] = isset($data['kernel_version']) ? $data['kernel_version'] : null;
        $this->container['machine'] = isset($data['machine']) ? $data['machine'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['pretty_name'] = isset($data['pretty_name']) ? $data['pretty_name'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['version_id'] = isset($data['version_id']) ? $data['version_id'] : null;
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
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id Guest OS Id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets kernel_release
     *
     * @return string
     */
    public function getKernelRelease()
    {
        return $this->container['kernel_release'];
    }

    /**
     * Sets kernel_release
     *
     * @param string $kernel_release Guest OS Kernel Release
     *
     * @return $this
     */
    public function setKernelRelease($kernel_release)
    {
        $this->container['kernel_release'] = $kernel_release;

        return $this;
    }

    /**
     * Gets kernel_version
     *
     * @return string
     */
    public function getKernelVersion()
    {
        return $this->container['kernel_version'];
    }

    /**
     * Sets kernel_version
     *
     * @param string $kernel_version Kernel version of the Guest OS
     *
     * @return $this
     */
    public function setKernelVersion($kernel_version)
    {
        $this->container['kernel_version'] = $kernel_version;

        return $this;
    }

    /**
     * Gets machine
     *
     * @return string
     */
    public function getMachine()
    {
        return $this->container['machine'];
    }

    /**
     * Sets machine
     *
     * @param string $machine Machine type of the Guest OS
     *
     * @return $this
     */
    public function setMachine($machine)
    {
        $this->container['machine'] = $machine;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name Name of the Guest OS
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets pretty_name
     *
     * @return string
     */
    public function getPrettyName()
    {
        return $this->container['pretty_name'];
    }

    /**
     * Sets pretty_name
     *
     * @param string $pretty_name Guest OS Pretty Name
     *
     * @return $this
     */
    public function setPrettyName($pretty_name)
    {
        $this->container['pretty_name'] = $pretty_name;

        return $this;
    }

    /**
     * Gets version
     *
     * @return string
     */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
     * Sets version
     *
     * @param string $version Guest OS Version
     *
     * @return $this
     */
    public function setVersion($version)
    {
        $this->container['version'] = $version;

        return $this;
    }

    /**
     * Gets version_id
     *
     * @return string
     */
    public function getVersionId()
    {
        return $this->container['version_id'];
    }

    /**
     * Sets version_id
     *
     * @param string $version_id Version ID of the Guest OS
     *
     * @return $this
     */
    public function setVersionId($version_id)
    {
        $this->container['version_id'] = $version_id;

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


