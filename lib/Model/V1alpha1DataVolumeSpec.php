<?php
/**
 * V1alpha1DataVolumeSpec
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
 * V1alpha1DataVolumeSpec Class Doc Comment
 *
 * @category Class
 * @description DataVolumeSpec defines the DataVolume type specification
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class V1alpha1DataVolumeSpec implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'v1alpha1.DataVolumeSpec';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'checkpoints' => '\Swagger\Client\Model\V1alpha1DataVolumeCheckpoint[]',
        'content_type' => 'string',
        'final_checkpoint' => 'bool',
        'preallocation' => 'bool',
        'pvc' => '\Swagger\Client\Model\K8sIoApiCoreV1PersistentVolumeClaimSpec',
        'source' => '\Swagger\Client\Model\V1alpha1DataVolumeSource'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'checkpoints' => null,
        'content_type' => null,
        'final_checkpoint' => null,
        'preallocation' => null,
        'pvc' => null,
        'source' => null
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
        'checkpoints' => 'checkpoints',
        'content_type' => 'contentType',
        'final_checkpoint' => 'finalCheckpoint',
        'preallocation' => 'preallocation',
        'pvc' => 'pvc',
        'source' => 'source'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'checkpoints' => 'setCheckpoints',
        'content_type' => 'setContentType',
        'final_checkpoint' => 'setFinalCheckpoint',
        'preallocation' => 'setPreallocation',
        'pvc' => 'setPvc',
        'source' => 'setSource'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'checkpoints' => 'getCheckpoints',
        'content_type' => 'getContentType',
        'final_checkpoint' => 'getFinalCheckpoint',
        'preallocation' => 'getPreallocation',
        'pvc' => 'getPvc',
        'source' => 'getSource'
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
        $this->container['checkpoints'] = isset($data['checkpoints']) ? $data['checkpoints'] : null;
        $this->container['content_type'] = isset($data['content_type']) ? $data['content_type'] : null;
        $this->container['final_checkpoint'] = isset($data['final_checkpoint']) ? $data['final_checkpoint'] : null;
        $this->container['preallocation'] = isset($data['preallocation']) ? $data['preallocation'] : null;
        $this->container['pvc'] = isset($data['pvc']) ? $data['pvc'] : null;
        $this->container['source'] = isset($data['source']) ? $data['source'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['pvc'] === null) {
            $invalidProperties[] = "'pvc' can't be null";
        }
        if ($this->container['source'] === null) {
            $invalidProperties[] = "'source' can't be null";
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
     * Gets checkpoints
     *
     * @return \Swagger\Client\Model\V1alpha1DataVolumeCheckpoint[]
     */
    public function getCheckpoints()
    {
        return $this->container['checkpoints'];
    }

    /**
     * Sets checkpoints
     *
     * @param \Swagger\Client\Model\V1alpha1DataVolumeCheckpoint[] $checkpoints Checkpoints is a list of DataVolumeCheckpoints, representing stages in a multistage import.
     *
     * @return $this
     */
    public function setCheckpoints($checkpoints)
    {
        $this->container['checkpoints'] = $checkpoints;

        return $this;
    }

    /**
     * Gets content_type
     *
     * @return string
     */
    public function getContentType()
    {
        return $this->container['content_type'];
    }

    /**
     * Sets content_type
     *
     * @param string $content_type DataVolumeContentType options: \"kubevirt\", \"archive\"
     *
     * @return $this
     */
    public function setContentType($content_type)
    {
        $this->container['content_type'] = $content_type;

        return $this;
    }

    /**
     * Gets final_checkpoint
     *
     * @return bool
     */
    public function getFinalCheckpoint()
    {
        return $this->container['final_checkpoint'];
    }

    /**
     * Sets final_checkpoint
     *
     * @param bool $final_checkpoint FinalCheckpoint indicates whether the current DataVolumeCheckpoint is the final checkpoint.
     *
     * @return $this
     */
    public function setFinalCheckpoint($final_checkpoint)
    {
        $this->container['final_checkpoint'] = $final_checkpoint;

        return $this;
    }

    /**
     * Gets preallocation
     *
     * @return bool
     */
    public function getPreallocation()
    {
        return $this->container['preallocation'];
    }

    /**
     * Sets preallocation
     *
     * @param bool $preallocation Preallocation controls whether storage for DataVolumes should be allocated in advance.
     *
     * @return $this
     */
    public function setPreallocation($preallocation)
    {
        $this->container['preallocation'] = $preallocation;

        return $this;
    }

    /**
     * Gets pvc
     *
     * @return \Swagger\Client\Model\K8sIoApiCoreV1PersistentVolumeClaimSpec
     */
    public function getPvc()
    {
        return $this->container['pvc'];
    }

    /**
     * Sets pvc
     *
     * @param \Swagger\Client\Model\K8sIoApiCoreV1PersistentVolumeClaimSpec $pvc PVC is the PVC specification
     *
     * @return $this
     */
    public function setPvc($pvc)
    {
        $this->container['pvc'] = $pvc;

        return $this;
    }

    /**
     * Gets source
     *
     * @return \Swagger\Client\Model\V1alpha1DataVolumeSource
     */
    public function getSource()
    {
        return $this->container['source'];
    }

    /**
     * Sets source
     *
     * @param \Swagger\Client\Model\V1alpha1DataVolumeSource $source Source is the src of the data for the requested DataVolume
     *
     * @return $this
     */
    public function setSource($source)
    {
        $this->container['source'] = $source;

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


