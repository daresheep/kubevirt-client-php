<?php
/**
 * V1alpha1DataVolumeSource
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
 * V1alpha1DataVolumeSource Class Doc Comment
 *
 * @category Class
 * @description DataVolumeSource represents the source for our Data Volume, this can be HTTP, Imageio, S3, Registry or an existing PVC
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class V1alpha1DataVolumeSource implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'v1alpha1.DataVolumeSource';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'blank' => '\Swagger\Client\Model\V1alpha1DataVolumeBlankImage',
        'http' => '\Swagger\Client\Model\V1alpha1DataVolumeSourceHTTP',
        'imageio' => '\Swagger\Client\Model\V1alpha1DataVolumeSourceImageIO',
        'pvc' => '\Swagger\Client\Model\V1alpha1DataVolumeSourcePVC',
        'registry' => '\Swagger\Client\Model\V1alpha1DataVolumeSourceRegistry',
        's3' => '\Swagger\Client\Model\V1alpha1DataVolumeSourceS3',
        'upload' => '\Swagger\Client\Model\V1alpha1DataVolumeSourceUpload',
        'vddk' => '\Swagger\Client\Model\V1alpha1DataVolumeSourceVDDK'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'blank' => null,
        'http' => null,
        'imageio' => null,
        'pvc' => null,
        'registry' => null,
        's3' => null,
        'upload' => null,
        'vddk' => null
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
        'blank' => 'blank',
        'http' => 'http',
        'imageio' => 'imageio',
        'pvc' => 'pvc',
        'registry' => 'registry',
        's3' => 's3',
        'upload' => 'upload',
        'vddk' => 'vddk'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'blank' => 'setBlank',
        'http' => 'setHttp',
        'imageio' => 'setImageio',
        'pvc' => 'setPvc',
        'registry' => 'setRegistry',
        's3' => 'setS3',
        'upload' => 'setUpload',
        'vddk' => 'setVddk'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'blank' => 'getBlank',
        'http' => 'getHttp',
        'imageio' => 'getImageio',
        'pvc' => 'getPvc',
        'registry' => 'getRegistry',
        's3' => 'getS3',
        'upload' => 'getUpload',
        'vddk' => 'getVddk'
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
        $this->container['blank'] = isset($data['blank']) ? $data['blank'] : null;
        $this->container['http'] = isset($data['http']) ? $data['http'] : null;
        $this->container['imageio'] = isset($data['imageio']) ? $data['imageio'] : null;
        $this->container['pvc'] = isset($data['pvc']) ? $data['pvc'] : null;
        $this->container['registry'] = isset($data['registry']) ? $data['registry'] : null;
        $this->container['s3'] = isset($data['s3']) ? $data['s3'] : null;
        $this->container['upload'] = isset($data['upload']) ? $data['upload'] : null;
        $this->container['vddk'] = isset($data['vddk']) ? $data['vddk'] : null;
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
     * Gets blank
     *
     * @return \Swagger\Client\Model\V1alpha1DataVolumeBlankImage
     */
    public function getBlank()
    {
        return $this->container['blank'];
    }

    /**
     * Sets blank
     *
     * @param \Swagger\Client\Model\V1alpha1DataVolumeBlankImage $blank blank
     *
     * @return $this
     */
    public function setBlank($blank)
    {
        $this->container['blank'] = $blank;

        return $this;
    }

    /**
     * Gets http
     *
     * @return \Swagger\Client\Model\V1alpha1DataVolumeSourceHTTP
     */
    public function getHttp()
    {
        return $this->container['http'];
    }

    /**
     * Sets http
     *
     * @param \Swagger\Client\Model\V1alpha1DataVolumeSourceHTTP $http http
     *
     * @return $this
     */
    public function setHttp($http)
    {
        $this->container['http'] = $http;

        return $this;
    }

    /**
     * Gets imageio
     *
     * @return \Swagger\Client\Model\V1alpha1DataVolumeSourceImageIO
     */
    public function getImageio()
    {
        return $this->container['imageio'];
    }

    /**
     * Sets imageio
     *
     * @param \Swagger\Client\Model\V1alpha1DataVolumeSourceImageIO $imageio imageio
     *
     * @return $this
     */
    public function setImageio($imageio)
    {
        $this->container['imageio'] = $imageio;

        return $this;
    }

    /**
     * Gets pvc
     *
     * @return \Swagger\Client\Model\V1alpha1DataVolumeSourcePVC
     */
    public function getPvc()
    {
        return $this->container['pvc'];
    }

    /**
     * Sets pvc
     *
     * @param \Swagger\Client\Model\V1alpha1DataVolumeSourcePVC $pvc pvc
     *
     * @return $this
     */
    public function setPvc($pvc)
    {
        $this->container['pvc'] = $pvc;

        return $this;
    }

    /**
     * Gets registry
     *
     * @return \Swagger\Client\Model\V1alpha1DataVolumeSourceRegistry
     */
    public function getRegistry()
    {
        return $this->container['registry'];
    }

    /**
     * Sets registry
     *
     * @param \Swagger\Client\Model\V1alpha1DataVolumeSourceRegistry $registry registry
     *
     * @return $this
     */
    public function setRegistry($registry)
    {
        $this->container['registry'] = $registry;

        return $this;
    }

    /**
     * Gets s3
     *
     * @return \Swagger\Client\Model\V1alpha1DataVolumeSourceS3
     */
    public function getS3()
    {
        return $this->container['s3'];
    }

    /**
     * Sets s3
     *
     * @param \Swagger\Client\Model\V1alpha1DataVolumeSourceS3 $s3 s3
     *
     * @return $this
     */
    public function setS3($s3)
    {
        $this->container['s3'] = $s3;

        return $this;
    }

    /**
     * Gets upload
     *
     * @return \Swagger\Client\Model\V1alpha1DataVolumeSourceUpload
     */
    public function getUpload()
    {
        return $this->container['upload'];
    }

    /**
     * Sets upload
     *
     * @param \Swagger\Client\Model\V1alpha1DataVolumeSourceUpload $upload upload
     *
     * @return $this
     */
    public function setUpload($upload)
    {
        $this->container['upload'] = $upload;

        return $this;
    }

    /**
     * Gets vddk
     *
     * @return \Swagger\Client\Model\V1alpha1DataVolumeSourceVDDK
     */
    public function getVddk()
    {
        return $this->container['vddk'];
    }

    /**
     * Sets vddk
     *
     * @param \Swagger\Client\Model\V1alpha1DataVolumeSourceVDDK $vddk vddk
     *
     * @return $this
     */
    public function setVddk($vddk)
    {
        $this->container['vddk'] = $vddk;

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


