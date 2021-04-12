<?php
/**
 * K8sIoApimachineryPkgApisMetaV1APIResource
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
 * K8sIoApimachineryPkgApisMetaV1APIResource Class Doc Comment
 *
 * @category Class
 * @description APIResource specifies the name of a resource and whether it is namespaced.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class K8sIoApimachineryPkgApisMetaV1APIResource implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'k8s.io.apimachinery.pkg.apis.meta.v1.APIResource';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'categories' => 'string[]',
        'group' => 'string',
        'kind' => 'string',
        'name' => 'string',
        'namespaced' => 'bool',
        'short_names' => 'string[]',
        'singular_name' => 'string',
        'storage_version_hash' => 'string',
        'verbs' => 'string[]',
        'version' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'categories' => null,
        'group' => null,
        'kind' => null,
        'name' => null,
        'namespaced' => null,
        'short_names' => null,
        'singular_name' => null,
        'storage_version_hash' => null,
        'verbs' => null,
        'version' => null
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
        'categories' => 'categories',
        'group' => 'group',
        'kind' => 'kind',
        'name' => 'name',
        'namespaced' => 'namespaced',
        'short_names' => 'shortNames',
        'singular_name' => 'singularName',
        'storage_version_hash' => 'storageVersionHash',
        'verbs' => 'verbs',
        'version' => 'version'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'categories' => 'setCategories',
        'group' => 'setGroup',
        'kind' => 'setKind',
        'name' => 'setName',
        'namespaced' => 'setNamespaced',
        'short_names' => 'setShortNames',
        'singular_name' => 'setSingularName',
        'storage_version_hash' => 'setStorageVersionHash',
        'verbs' => 'setVerbs',
        'version' => 'setVersion'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'categories' => 'getCategories',
        'group' => 'getGroup',
        'kind' => 'getKind',
        'name' => 'getName',
        'namespaced' => 'getNamespaced',
        'short_names' => 'getShortNames',
        'singular_name' => 'getSingularName',
        'storage_version_hash' => 'getStorageVersionHash',
        'verbs' => 'getVerbs',
        'version' => 'getVersion'
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
        $this->container['categories'] = isset($data['categories']) ? $data['categories'] : null;
        $this->container['group'] = isset($data['group']) ? $data['group'] : null;
        $this->container['kind'] = isset($data['kind']) ? $data['kind'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['namespaced'] = isset($data['namespaced']) ? $data['namespaced'] : null;
        $this->container['short_names'] = isset($data['short_names']) ? $data['short_names'] : null;
        $this->container['singular_name'] = isset($data['singular_name']) ? $data['singular_name'] : null;
        $this->container['storage_version_hash'] = isset($data['storage_version_hash']) ? $data['storage_version_hash'] : null;
        $this->container['verbs'] = isset($data['verbs']) ? $data['verbs'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['kind'] === null) {
            $invalidProperties[] = "'kind' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['namespaced'] === null) {
            $invalidProperties[] = "'namespaced' can't be null";
        }
        if ($this->container['singular_name'] === null) {
            $invalidProperties[] = "'singular_name' can't be null";
        }
        if ($this->container['verbs'] === null) {
            $invalidProperties[] = "'verbs' can't be null";
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
     * Gets categories
     *
     * @return string[]
     */
    public function getCategories()
    {
        return $this->container['categories'];
    }

    /**
     * Sets categories
     *
     * @param string[] $categories categories is a list of the grouped resources this resource belongs to (e.g. 'all')
     *
     * @return $this
     */
    public function setCategories($categories)
    {
        $this->container['categories'] = $categories;

        return $this;
    }

    /**
     * Gets group
     *
     * @return string
     */
    public function getGroup()
    {
        return $this->container['group'];
    }

    /**
     * Sets group
     *
     * @param string $group group is the preferred group of the resource.  Empty implies the group of the containing resource list. For subresources, this may have a different value, for example: Scale\".
     *
     * @return $this
     */
    public function setGroup($group)
    {
        $this->container['group'] = $group;

        return $this;
    }

    /**
     * Gets kind
     *
     * @return string
     */
    public function getKind()
    {
        return $this->container['kind'];
    }

    /**
     * Sets kind
     *
     * @param string $kind kind is the kind for the resource (e.g. 'Foo' is the kind for a resource 'foo')
     *
     * @return $this
     */
    public function setKind($kind)
    {
        $this->container['kind'] = $kind;

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
     * @param string $name name is the plural name of the resource.
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets namespaced
     *
     * @return bool
     */
    public function getNamespaced()
    {
        return $this->container['namespaced'];
    }

    /**
     * Sets namespaced
     *
     * @param bool $namespaced namespaced indicates if a resource is namespaced or not.
     *
     * @return $this
     */
    public function setNamespaced($namespaced)
    {
        $this->container['namespaced'] = $namespaced;

        return $this;
    }

    /**
     * Gets short_names
     *
     * @return string[]
     */
    public function getShortNames()
    {
        return $this->container['short_names'];
    }

    /**
     * Sets short_names
     *
     * @param string[] $short_names shortNames is a list of suggested short names of the resource.
     *
     * @return $this
     */
    public function setShortNames($short_names)
    {
        $this->container['short_names'] = $short_names;

        return $this;
    }

    /**
     * Gets singular_name
     *
     * @return string
     */
    public function getSingularName()
    {
        return $this->container['singular_name'];
    }

    /**
     * Sets singular_name
     *
     * @param string $singular_name singularName is the singular name of the resource.  This allows clients to handle plural and singular opaquely. The singularName is more correct for reporting status on a single item and both singular and plural are allowed from the kubectl CLI interface.
     *
     * @return $this
     */
    public function setSingularName($singular_name)
    {
        $this->container['singular_name'] = $singular_name;

        return $this;
    }

    /**
     * Gets storage_version_hash
     *
     * @return string
     */
    public function getStorageVersionHash()
    {
        return $this->container['storage_version_hash'];
    }

    /**
     * Sets storage_version_hash
     *
     * @param string $storage_version_hash The hash value of the storage version, the version this resource is converted to when written to the data store. Value must be treated as opaque by clients. Only equality comparison on the value is valid. This is an alpha feature and may change or be removed in the future. The field is populated by the apiserver only if the StorageVersionHash feature gate is enabled. This field will remain optional even if it graduates.
     *
     * @return $this
     */
    public function setStorageVersionHash($storage_version_hash)
    {
        $this->container['storage_version_hash'] = $storage_version_hash;

        return $this;
    }

    /**
     * Gets verbs
     *
     * @return string[]
     */
    public function getVerbs()
    {
        return $this->container['verbs'];
    }

    /**
     * Sets verbs
     *
     * @param string[] $verbs verbs is a list of supported kube verbs (this includes get, list, watch, create, update, patch, delete, deletecollection, and proxy)
     *
     * @return $this
     */
    public function setVerbs($verbs)
    {
        $this->container['verbs'] = $verbs;

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
     * @param string $version version is the preferred version of the resource.  Empty implies the version of the containing resource list For subresources, this may have a different value, for example: v1 (while inside a v1beta1 version of the core resource's group)\".
     *
     * @return $this
     */
    public function setVersion($version)
    {
        $this->container['version'] = $version;

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

