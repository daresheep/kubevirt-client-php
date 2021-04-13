<?php
/**
 * V1VirtualMachineSpec
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
 * V1VirtualMachineSpec Class Doc Comment
 *
 * @category Class
 * @description VirtualMachineSpec describes how the proper VirtualMachine should look like
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class V1VirtualMachineSpec implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'v1.VirtualMachineSpec';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'data_volume_templates' => '\Swagger\Client\Model\V1DataVolumeTemplateSpec[]',
        'run_strategy' => 'string',
        'running' => 'bool',
        'template' => '\Swagger\Client\Model\V1VirtualMachineInstanceTemplateSpec'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'data_volume_templates' => null,
        'run_strategy' => null,
        'running' => null,
        'template' => null
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
        'data_volume_templates' => 'dataVolumeTemplates',
        'run_strategy' => 'runStrategy',
        'running' => 'running',
        'template' => 'template'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'data_volume_templates' => 'setDataVolumeTemplates',
        'run_strategy' => 'setRunStrategy',
        'running' => 'setRunning',
        'template' => 'setTemplate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'data_volume_templates' => 'getDataVolumeTemplates',
        'run_strategy' => 'getRunStrategy',
        'running' => 'getRunning',
        'template' => 'getTemplate'
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
        $this->container['data_volume_templates'] = isset($data['data_volume_templates']) ? $data['data_volume_templates'] : null;
        $this->container['run_strategy'] = isset($data['run_strategy']) ? $data['run_strategy'] : null;
        $this->container['running'] = isset($data['running']) ? $data['running'] : null;
        $this->container['template'] = isset($data['template']) ? $data['template'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['template'] === null) {
            $invalidProperties[] = "'template' can't be null";
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
     * Gets data_volume_templates
     *
     * @return \Swagger\Client\Model\V1DataVolumeTemplateSpec[]
     */
    public function getDataVolumeTemplates()
    {
        return $this->container['data_volume_templates'];
    }

    /**
     * Sets data_volume_templates
     *
     * @param \Swagger\Client\Model\V1DataVolumeTemplateSpec[] $data_volume_templates dataVolumeTemplates is a list of dataVolumes that the VirtualMachineInstance template can reference. DataVolumes in this list are dynamically created for the VirtualMachine and are tied to the VirtualMachine's life-cycle.
     *
     * @return $this
     */
    public function setDataVolumeTemplates($data_volume_templates)
    {
        $this->container['data_volume_templates'] = $data_volume_templates;

        return $this;
    }

    /**
     * Gets run_strategy
     *
     * @return string
     */
    public function getRunStrategy()
    {
        return $this->container['run_strategy'];
    }

    /**
     * Sets run_strategy
     *
     * @param string $run_strategy Running state indicates the requested running state of the VirtualMachineInstance mutually exclusive with Running
     *
     * @return $this
     */
    public function setRunStrategy($run_strategy)
    {
        $this->container['run_strategy'] = $run_strategy;

        return $this;
    }

    /**
     * Gets running
     *
     * @return bool
     */
    public function getRunning()
    {
        return $this->container['running'];
    }

    /**
     * Sets running
     *
     * @param bool $running Running controls whether the associatied VirtualMachineInstance is created or not Mutually exclusive with RunStrategy
     *
     * @return $this
     */
    public function setRunning($running)
    {
        $this->container['running'] = $running;

        return $this;
    }

    /**
     * Gets template
     *
     * @return \Swagger\Client\Model\V1VirtualMachineInstanceTemplateSpec
     */
    public function getTemplate()
    {
        return $this->container['template'];
    }

    /**
     * Sets template
     *
     * @param \Swagger\Client\Model\V1VirtualMachineInstanceTemplateSpec $template Template is the direct specification of VirtualMachineInstance
     *
     * @return $this
     */
    public function setTemplate($template)
    {
        $this->container['template'] = $template;

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

