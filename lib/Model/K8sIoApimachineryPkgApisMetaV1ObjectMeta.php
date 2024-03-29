<?php
/**
 * K8sIoApimachineryPkgApisMetaV1ObjectMeta
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
 * K8sIoApimachineryPkgApisMetaV1ObjectMeta Class Doc Comment
 *
 * @category Class
 * @description ObjectMeta is metadata that all persisted resources must have, which includes all objects users must create.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class K8sIoApimachineryPkgApisMetaV1ObjectMeta implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'k8s.io.apimachinery.pkg.apis.meta.v1.ObjectMeta';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'annotations' => 'map[string,string]',
        'cluster_name' => 'string',
        'deletion_grace_period_seconds' => 'int',
        'deletion_timestamp' => '\Swagger\Client\Model\K8sIoApimachineryPkgApisMetaV1Time',
        'finalizers' => 'string[]',
        'generate_name' => 'string',
        'generation' => 'int',
        'labels' => 'map[string,string]',
        'managed_fields' => '\Swagger\Client\Model\K8sIoApimachineryPkgApisMetaV1ManagedFieldsEntry[]',
        'name' => 'string',
        'namespace' => 'string',
        'owner_references' => '\Swagger\Client\Model\K8sIoApimachineryPkgApisMetaV1OwnerReference[]',
        'resource_version' => 'string',
        'self_link' => 'string',
        'uid' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'annotations' => null,
        'cluster_name' => null,
        'deletion_grace_period_seconds' => 'int64',
        'deletion_timestamp' => null,
        'finalizers' => null,
        'generate_name' => null,
        'generation' => 'int64',
        'labels' => null,
        'managed_fields' => null,
        'name' => null,
        'namespace' => null,
        'owner_references' => null,
        'resource_version' => null,
        'self_link' => null,
        'uid' => null
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
        'annotations' => 'annotations',
        'cluster_name' => 'clusterName',
        'deletion_grace_period_seconds' => 'deletionGracePeriodSeconds',
        'deletion_timestamp' => 'deletionTimestamp',
        'finalizers' => 'finalizers',
        'generate_name' => 'generateName',
        'generation' => 'generation',
        'labels' => 'labels',
        'managed_fields' => 'managedFields',
        'name' => 'name',
        'namespace' => 'namespace',
        'owner_references' => 'ownerReferences',
        'resource_version' => 'resourceVersion',
        'self_link' => 'selfLink',
        'uid' => 'uid'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'annotations' => 'setAnnotations',
        'cluster_name' => 'setClusterName',
        'deletion_grace_period_seconds' => 'setDeletionGracePeriodSeconds',
        'deletion_timestamp' => 'setDeletionTimestamp',
        'finalizers' => 'setFinalizers',
        'generate_name' => 'setGenerateName',
        'generation' => 'setGeneration',
        'labels' => 'setLabels',
        'managed_fields' => 'setManagedFields',
        'name' => 'setName',
        'namespace' => 'setNamespace',
        'owner_references' => 'setOwnerReferences',
        'resource_version' => 'setResourceVersion',
        'self_link' => 'setSelfLink',
        'uid' => 'setUid'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'annotations' => 'getAnnotations',
        'cluster_name' => 'getClusterName',
        'deletion_grace_period_seconds' => 'getDeletionGracePeriodSeconds',
        'deletion_timestamp' => 'getDeletionTimestamp',
        'finalizers' => 'getFinalizers',
        'generate_name' => 'getGenerateName',
        'generation' => 'getGeneration',
        'labels' => 'getLabels',
        'managed_fields' => 'getManagedFields',
        'name' => 'getName',
        'namespace' => 'getNamespace',
        'owner_references' => 'getOwnerReferences',
        'resource_version' => 'getResourceVersion',
        'self_link' => 'getSelfLink',
        'uid' => 'getUid'
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
        $this->container['annotations'] = isset($data['annotations']) ? $data['annotations'] : null;
        $this->container['cluster_name'] = isset($data['cluster_name']) ? $data['cluster_name'] : null;
        $this->container['deletion_grace_period_seconds'] = isset($data['deletion_grace_period_seconds']) ? $data['deletion_grace_period_seconds'] : null;
        $this->container['deletion_timestamp'] = isset($data['deletion_timestamp']) ? $data['deletion_timestamp'] : null;
        $this->container['finalizers'] = isset($data['finalizers']) ? $data['finalizers'] : null;
        $this->container['generate_name'] = isset($data['generate_name']) ? $data['generate_name'] : null;
        $this->container['generation'] = isset($data['generation']) ? $data['generation'] : null;
        $this->container['labels'] = isset($data['labels']) ? $data['labels'] : null;
        $this->container['managed_fields'] = isset($data['managed_fields']) ? $data['managed_fields'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['namespace'] = isset($data['namespace']) ? $data['namespace'] : null;
        $this->container['owner_references'] = isset($data['owner_references']) ? $data['owner_references'] : null;
        $this->container['resource_version'] = isset($data['resource_version']) ? $data['resource_version'] : null;
        $this->container['self_link'] = isset($data['self_link']) ? $data['self_link'] : null;
        $this->container['uid'] = isset($data['uid']) ? $data['uid'] : null;
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
     * Gets annotations
     *
     * @return map[string,string]
     */
    public function getAnnotations()
    {
        return $this->container['annotations'];
    }

    /**
     * Sets annotations
     *
     * @param map[string,string] $annotations Annotations is an unstructured key value map stored with a resource that may be set by external tools to store and retrieve arbitrary metadata. They are not queryable and should be preserved when modifying objects. More info: http://kubernetes.io/docs/user-guide/annotations
     *
     * @return $this
     */
    public function setAnnotations($annotations)
    {
        $this->container['annotations'] = $annotations;

        return $this;
    }

    /**
     * Gets cluster_name
     *
     * @return string
     */
    public function getClusterName()
    {
        return $this->container['cluster_name'];
    }

    /**
     * Sets cluster_name
     *
     * @param string $cluster_name The name of the cluster which the object belongs to. This is used to distinguish resources with same name and namespace in different clusters. This field is not set anywhere right now and apiserver is going to ignore it if set in create or update request.
     *
     * @return $this
     */
    public function setClusterName($cluster_name)
    {
        $this->container['cluster_name'] = $cluster_name;

        return $this;
    }

    /**
     * Gets deletion_grace_period_seconds
     *
     * @return int
     */
    public function getDeletionGracePeriodSeconds()
    {
        return $this->container['deletion_grace_period_seconds'];
    }

    /**
     * Sets deletion_grace_period_seconds
     *
     * @param int $deletion_grace_period_seconds Number of seconds allowed for this object to gracefully terminate before it will be removed from the system. Only set when deletionTimestamp is also set. May only be shortened. Read-only.
     *
     * @return $this
     */
    public function setDeletionGracePeriodSeconds($deletion_grace_period_seconds)
    {
        $this->container['deletion_grace_period_seconds'] = $deletion_grace_period_seconds;

        return $this;
    }

    /**
     * Gets deletion_timestamp
     *
     * @return \Swagger\Client\Model\K8sIoApimachineryPkgApisMetaV1Time
     */
    public function getDeletionTimestamp()
    {
        return $this->container['deletion_timestamp'];
    }

    /**
     * Sets deletion_timestamp
     *
     * @param \Swagger\Client\Model\K8sIoApimachineryPkgApisMetaV1Time $deletion_timestamp DeletionTimestamp is RFC 3339 date and time at which this resource will be deleted. This field is set by the server when a graceful deletion is requested by the user, and is not directly settable by a client. The resource is expected to be deleted (no longer visible from resource lists, and not reachable by name) after the time in this field, once the finalizers list is empty. As long as the finalizers list contains items, deletion is blocked. Once the deletionTimestamp is set, this value may not be unset or be set further into the future, although it may be shortened or the resource may be deleted prior to this time. For example, a user may request that a pod is deleted in 30 seconds. The Kubelet will react by sending a graceful termination signal to the containers in the pod. After that 30 seconds, the Kubelet will send a hard termination signal (SIGKILL) to the container and after cleanup, remove the pod from the API. In the presence of network partitions, this object may still exist after this timestamp, until an administrator or automated process can determine the resource is fully terminated. If not set, graceful deletion of the object has not been requested.  Populated by the system when a graceful deletion is requested. Read-only. More info: https://git.k8s.io/community/contributors/devel/sig-architecture/api-conventions.md#metadata
     *
     * @return $this
     */
    public function setDeletionTimestamp($deletion_timestamp)
    {
        $this->container['deletion_timestamp'] = $deletion_timestamp;

        return $this;
    }

    /**
     * Gets finalizers
     *
     * @return string[]
     */
    public function getFinalizers()
    {
        return $this->container['finalizers'];
    }

    /**
     * Sets finalizers
     *
     * @param string[] $finalizers Must be empty before the object is deleted from the registry. Each entry is an identifier for the responsible component that will remove the entry from the list. If the deletionTimestamp of the object is non-nil, entries in this list can only be removed. Finalizers may be processed and removed in any order.  Order is NOT enforced because it introduces significant risk of stuck finalizers. finalizers is a shared field, any actor with permission can reorder it. If the finalizer list is processed in order, then this can lead to a situation in which the component responsible for the first finalizer in the list is waiting for a signal (field value, external system, or other) produced by a component responsible for a finalizer later in the list, resulting in a deadlock. Without enforced ordering finalizers are free to order amongst themselves and are not vulnerable to ordering changes in the list.
     *
     * @return $this
     */
    public function setFinalizers($finalizers)
    {
        $this->container['finalizers'] = $finalizers;

        return $this;
    }

    /**
     * Gets generate_name
     *
     * @return string
     */
    public function getGenerateName()
    {
        return $this->container['generate_name'];
    }

    /**
     * Sets generate_name
     *
     * @param string $generate_name GenerateName is an optional prefix, used by the server, to generate a unique name ONLY IF the Name field has not been provided. If this field is used, the name returned to the client will be different than the name passed. This value will also be combined with a unique suffix. The provided value has the same validation rules as the Name field, and may be truncated by the length of the suffix required to make the value unique on the server.  If this field is specified and the generated name exists, the server will NOT return a 409 - instead, it will either return 201 Created or 500 with Reason ServerTimeout indicating a unique name could not be found in the time allotted, and the client should retry (optionally after the time indicated in the Retry-After header).  Applied only if Name is not specified. More info: https://git.k8s.io/community/contributors/devel/sig-architecture/api-conventions.md#idempotency
     *
     * @return $this
     */
    public function setGenerateName($generate_name)
    {
        $this->container['generate_name'] = $generate_name;

        return $this;
    }

    /**
     * Gets generation
     *
     * @return int
     */
    public function getGeneration()
    {
        return $this->container['generation'];
    }

    /**
     * Sets generation
     *
     * @param int $generation A sequence number representing a specific generation of the desired state. Populated by the system. Read-only.
     *
     * @return $this
     */
    public function setGeneration($generation)
    {
        $this->container['generation'] = $generation;

        return $this;
    }

    /**
     * Gets labels
     *
     * @return map[string,string]
     */
    public function getLabels()
    {
        return $this->container['labels'];
    }

    /**
     * Sets labels
     *
     * @param map[string,string] $labels Map of string keys and values that can be used to organize and categorize (scope and select) objects. May match selectors of replication controllers and services. More info: http://kubernetes.io/docs/user-guide/labels
     *
     * @return $this
     */
    public function setLabels($labels)
    {
        $this->container['labels'] = $labels;

        return $this;
    }

    /**
     * Gets managed_fields
     *
     * @return \Swagger\Client\Model\K8sIoApimachineryPkgApisMetaV1ManagedFieldsEntry[]
     */
    public function getManagedFields()
    {
        return $this->container['managed_fields'];
    }

    /**
     * Sets managed_fields
     *
     * @param \Swagger\Client\Model\K8sIoApimachineryPkgApisMetaV1ManagedFieldsEntry[] $managed_fields ManagedFields maps workflow-id and version to the set of fields that are managed by that workflow. This is mostly for internal housekeeping, and users typically shouldn't need to set or understand this field. A workflow can be the user's name, a controller's name, or the name of a specific apply path like \"ci-cd\". The set of fields is always in the version that the workflow used when modifying the object.
     *
     * @return $this
     */
    public function setManagedFields($managed_fields)
    {
        $this->container['managed_fields'] = $managed_fields;

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
     * @param string $name Name must be unique within a namespace. Is required when creating resources, although some resources may allow a client to request the generation of an appropriate name automatically. Name is primarily intended for creation idempotence and configuration definition. Cannot be updated. More info: http://kubernetes.io/docs/user-guide/identifiers#names
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets namespace
     *
     * @return string
     */
    public function getNamespace()
    {
        return $this->container['namespace'];
    }

    /**
     * Sets namespace
     *
     * @param string $namespace Namespace defines the space within which each name must be unique. An empty namespace is equivalent to the \"default\" namespace, but \"default\" is the canonical representation. Not all objects are required to be scoped to a namespace - the value of this field for those objects will be empty.  Must be a DNS_LABEL. Cannot be updated. More info: http://kubernetes.io/docs/user-guide/namespaces
     *
     * @return $this
     */
    public function setNamespace($namespace)
    {
        $this->container['namespace'] = $namespace;

        return $this;
    }

    /**
     * Gets owner_references
     *
     * @return \Swagger\Client\Model\K8sIoApimachineryPkgApisMetaV1OwnerReference[]
     */
    public function getOwnerReferences()
    {
        return $this->container['owner_references'];
    }

    /**
     * Sets owner_references
     *
     * @param \Swagger\Client\Model\K8sIoApimachineryPkgApisMetaV1OwnerReference[] $owner_references List of objects depended by this object. If ALL objects in the list have been deleted, this object will be garbage collected. If this object is managed by a controller, then an entry in this list will point to this controller, with the controller field set to true. There cannot be more than one managing controller.
     *
     * @return $this
     */
    public function setOwnerReferences($owner_references)
    {
        $this->container['owner_references'] = $owner_references;

        return $this;
    }

    /**
     * Gets resource_version
     *
     * @return string
     */
    public function getResourceVersion()
    {
        return $this->container['resource_version'];
    }

    /**
     * Sets resource_version
     *
     * @param string $resource_version An opaque value that represents the internal version of this object that can be used by clients to determine when objects have changed. May be used for optimistic concurrency, change detection, and the watch operation on a resource or set of resources. Clients must treat these values as opaque and passed unmodified back to the server. They may only be valid for a particular resource or set of resources.  Populated by the system. Read-only. Value must be treated as opaque by clients and . More info: https://git.k8s.io/community/contributors/devel/sig-architecture/api-conventions.md#concurrency-control-and-consistency
     *
     * @return $this
     */
    public function setResourceVersion($resource_version)
    {
        $this->container['resource_version'] = $resource_version;

        return $this;
    }

    /**
     * Gets self_link
     *
     * @return string
     */
    public function getSelfLink()
    {
        return $this->container['self_link'];
    }

    /**
     * Sets self_link
     *
     * @param string $self_link SelfLink is a URL representing this object. Populated by the system. Read-only.  DEPRECATED Kubernetes will stop propagating this field in 1.20 release and the field is planned to be removed in 1.21 release.
     *
     * @return $this
     */
    public function setSelfLink($self_link)
    {
        $this->container['self_link'] = $self_link;

        return $this;
    }

    /**
     * Gets uid
     *
     * @return string
     */
    public function getUid()
    {
        return $this->container['uid'];
    }

    /**
     * Sets uid
     *
     * @param string $uid UID is the unique in time and space value for this object. It is typically generated by the server on successful creation of a resource and is not allowed to change on PUT operations.  Populated by the system. Read-only. More info: http://kubernetes.io/docs/user-guide/identifiers#uids
     *
     * @return $this
     */
    public function setUid($uid)
    {
        $this->container['uid'] = $uid;

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


