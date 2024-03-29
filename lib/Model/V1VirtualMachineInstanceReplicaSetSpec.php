<?php
/**
 * V1VirtualMachineInstanceReplicaSetSpec
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
 * V1VirtualMachineInstanceReplicaSetSpec Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class V1VirtualMachineInstanceReplicaSetSpec implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'v1.VirtualMachineInstanceReplicaSetSpec';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'paused' => 'bool',
        'replicas' => 'int',
        'selector' => '\Swagger\Client\Model\K8sIoApimachineryPkgApisMetaV1LabelSelector',
        'template' => '\Swagger\Client\Model\V1VirtualMachineInstanceTemplateSpec'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'paused' => null,
        'replicas' => 'int32',
        'selector' => null,
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
        'paused' => 'paused',
        'replicas' => 'replicas',
        'selector' => 'selector',
        'template' => 'template'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'paused' => 'setPaused',
        'replicas' => 'setReplicas',
        'selector' => 'setSelector',
        'template' => 'setTemplate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'paused' => 'getPaused',
        'replicas' => 'getReplicas',
        'selector' => 'getSelector',
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
        $this->container['paused'] = isset($data['paused']) ? $data['paused'] : null;
        $this->container['replicas'] = isset($data['replicas']) ? $data['replicas'] : null;
        $this->container['selector'] = isset($data['selector']) ? $data['selector'] : null;
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

        if ($this->container['selector'] === null) {
            $invalidProperties[] = "'selector' can't be null";
        }
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
     * Gets paused
     *
     * @return bool
     */
    public function getPaused()
    {
        return $this->container['paused'];
    }

    /**
     * Sets paused
     *
     * @param bool $paused Indicates that the replica set is paused.
     *
     * @return $this
     */
    public function setPaused($paused)
    {
        $this->container['paused'] = $paused;

        return $this;
    }

    /**
     * Gets replicas
     *
     * @return int
     */
    public function getReplicas()
    {
        return $this->container['replicas'];
    }

    /**
     * Sets replicas
     *
     * @param int $replicas Number of desired pods. This is a pointer to distinguish between explicit zero and not specified. Defaults to 1.
     *
     * @return $this
     */
    public function setReplicas($replicas)
    {
        $this->container['replicas'] = $replicas;

        return $this;
    }

    /**
     * Gets selector
     *
     * @return \Swagger\Client\Model\K8sIoApimachineryPkgApisMetaV1LabelSelector
     */
    public function getSelector()
    {
        return $this->container['selector'];
    }

    /**
     * Sets selector
     *
     * @param \Swagger\Client\Model\K8sIoApimachineryPkgApisMetaV1LabelSelector $selector Label selector for pods. Existing ReplicaSets whose pods are selected by this will be the ones affected by this deployment.
     *
     * @return $this
     */
    public function setSelector($selector)
    {
        $this->container['selector'] = $selector;

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
     * @param \Swagger\Client\Model\V1VirtualMachineInstanceTemplateSpec $template Template describes the pods that will be created.
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


