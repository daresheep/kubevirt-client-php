<?php
/**
 * V1VirtualMachineStatus
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
 * V1VirtualMachineStatus Class Doc Comment
 *
 * @category Class
 * @description VirtualMachineStatus represents the status returned by the controller to describe how the VirtualMachine is doing
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class V1VirtualMachineStatus implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'v1.VirtualMachineStatus';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'conditions' => '\Swagger\Client\Model\V1VirtualMachineCondition[]',
        'created' => 'bool',
        'ready' => 'bool',
        'snapshot_in_progress' => 'string',
        'state_change_requests' => '\Swagger\Client\Model\V1VirtualMachineStateChangeRequest[]',
        'volume_requests' => '\Swagger\Client\Model\V1VirtualMachineVolumeRequest[]',
        'volume_snapshot_statuses' => '\Swagger\Client\Model\V1VolumeSnapshotStatus[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'conditions' => null,
        'created' => null,
        'ready' => null,
        'snapshot_in_progress' => null,
        'state_change_requests' => null,
        'volume_requests' => null,
        'volume_snapshot_statuses' => null
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
        'conditions' => 'conditions',
        'created' => 'created',
        'ready' => 'ready',
        'snapshot_in_progress' => 'snapshotInProgress',
        'state_change_requests' => 'stateChangeRequests',
        'volume_requests' => 'volumeRequests',
        'volume_snapshot_statuses' => 'volumeSnapshotStatuses'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'conditions' => 'setConditions',
        'created' => 'setCreated',
        'ready' => 'setReady',
        'snapshot_in_progress' => 'setSnapshotInProgress',
        'state_change_requests' => 'setStateChangeRequests',
        'volume_requests' => 'setVolumeRequests',
        'volume_snapshot_statuses' => 'setVolumeSnapshotStatuses'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'conditions' => 'getConditions',
        'created' => 'getCreated',
        'ready' => 'getReady',
        'snapshot_in_progress' => 'getSnapshotInProgress',
        'state_change_requests' => 'getStateChangeRequests',
        'volume_requests' => 'getVolumeRequests',
        'volume_snapshot_statuses' => 'getVolumeSnapshotStatuses'
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
        $this->container['conditions'] = isset($data['conditions']) ? $data['conditions'] : null;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['ready'] = isset($data['ready']) ? $data['ready'] : null;
        $this->container['snapshot_in_progress'] = isset($data['snapshot_in_progress']) ? $data['snapshot_in_progress'] : null;
        $this->container['state_change_requests'] = isset($data['state_change_requests']) ? $data['state_change_requests'] : null;
        $this->container['volume_requests'] = isset($data['volume_requests']) ? $data['volume_requests'] : null;
        $this->container['volume_snapshot_statuses'] = isset($data['volume_snapshot_statuses']) ? $data['volume_snapshot_statuses'] : null;
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
     * Gets conditions
     *
     * @return \Swagger\Client\Model\V1VirtualMachineCondition[]
     */
    public function getConditions()
    {
        return $this->container['conditions'];
    }

    /**
     * Sets conditions
     *
     * @param \Swagger\Client\Model\V1VirtualMachineCondition[] $conditions Hold the state information of the VirtualMachine and its VirtualMachineInstance
     *
     * @return $this
     */
    public function setConditions($conditions)
    {
        $this->container['conditions'] = $conditions;

        return $this;
    }

    /**
     * Gets created
     *
     * @return bool
     */
    public function getCreated()
    {
        return $this->container['created'];
    }

    /**
     * Sets created
     *
     * @param bool $created Created indicates if the virtual machine is created in the cluster
     *
     * @return $this
     */
    public function setCreated($created)
    {
        $this->container['created'] = $created;

        return $this;
    }

    /**
     * Gets ready
     *
     * @return bool
     */
    public function getReady()
    {
        return $this->container['ready'];
    }

    /**
     * Sets ready
     *
     * @param bool $ready Ready indicates if the virtual machine is running and ready
     *
     * @return $this
     */
    public function setReady($ready)
    {
        $this->container['ready'] = $ready;

        return $this;
    }

    /**
     * Gets snapshot_in_progress
     *
     * @return string
     */
    public function getSnapshotInProgress()
    {
        return $this->container['snapshot_in_progress'];
    }

    /**
     * Sets snapshot_in_progress
     *
     * @param string $snapshot_in_progress SnapshotInProgress is the name of the VirtualMachineSnapshot currently executing
     *
     * @return $this
     */
    public function setSnapshotInProgress($snapshot_in_progress)
    {
        $this->container['snapshot_in_progress'] = $snapshot_in_progress;

        return $this;
    }

    /**
     * Gets state_change_requests
     *
     * @return \Swagger\Client\Model\V1VirtualMachineStateChangeRequest[]
     */
    public function getStateChangeRequests()
    {
        return $this->container['state_change_requests'];
    }

    /**
     * Sets state_change_requests
     *
     * @param \Swagger\Client\Model\V1VirtualMachineStateChangeRequest[] $state_change_requests StateChangeRequests indicates a list of actions that should be taken on a VMI e.g. stop a specific VMI then start a new one.
     *
     * @return $this
     */
    public function setStateChangeRequests($state_change_requests)
    {
        $this->container['state_change_requests'] = $state_change_requests;

        return $this;
    }

    /**
     * Gets volume_requests
     *
     * @return \Swagger\Client\Model\V1VirtualMachineVolumeRequest[]
     */
    public function getVolumeRequests()
    {
        return $this->container['volume_requests'];
    }

    /**
     * Sets volume_requests
     *
     * @param \Swagger\Client\Model\V1VirtualMachineVolumeRequest[] $volume_requests VolumeRequests indicates a list of volumes add or remove from the VMI template and hotplug on an active running VMI.
     *
     * @return $this
     */
    public function setVolumeRequests($volume_requests)
    {
        $this->container['volume_requests'] = $volume_requests;

        return $this;
    }

    /**
     * Gets volume_snapshot_statuses
     *
     * @return \Swagger\Client\Model\V1VolumeSnapshotStatus[]
     */
    public function getVolumeSnapshotStatuses()
    {
        return $this->container['volume_snapshot_statuses'];
    }

    /**
     * Sets volume_snapshot_statuses
     *
     * @param \Swagger\Client\Model\V1VolumeSnapshotStatus[] $volume_snapshot_statuses VolumeSnapshotStatuses indicates a list of statuses whether snapshotting is supported by each volume.
     *
     * @return $this
     */
    public function setVolumeSnapshotStatuses($volume_snapshot_statuses)
    {
        $this->container['volume_snapshot_statuses'] = $volume_snapshot_statuses;

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

