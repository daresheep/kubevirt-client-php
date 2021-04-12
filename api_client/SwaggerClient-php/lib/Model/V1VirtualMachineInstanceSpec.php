<?php
/**
 * V1VirtualMachineInstanceSpec
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
 * V1VirtualMachineInstanceSpec Class Doc Comment
 *
 * @category Class
 * @description VirtualMachineInstanceSpec is a description of a VirtualMachineInstance.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class V1VirtualMachineInstanceSpec implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'v1.VirtualMachineInstanceSpec';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'access_credentials' => '\Swagger\Client\Model\V1AccessCredential[]',
        'affinity' => '\Swagger\Client\Model\K8sIoApiCoreV1Affinity',
        'dns_config' => '\Swagger\Client\Model\K8sIoApiCoreV1PodDNSConfig',
        'dns_policy' => 'string',
        'domain' => '\Swagger\Client\Model\V1DomainSpec',
        'eviction_strategy' => 'string',
        'hostname' => 'string',
        'liveness_probe' => '\Swagger\Client\Model\V1Probe',
        'networks' => '\Swagger\Client\Model\V1Network[]',
        'node_selector' => 'map[string,string]',
        'priority_class_name' => 'string',
        'readiness_probe' => '\Swagger\Client\Model\V1Probe',
        'scheduler_name' => 'string',
        'subdomain' => 'string',
        'termination_grace_period_seconds' => 'int',
        'tolerations' => '\Swagger\Client\Model\K8sIoApiCoreV1Toleration[]',
        'volumes' => '\Swagger\Client\Model\V1Volume[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'access_credentials' => null,
        'affinity' => null,
        'dns_config' => null,
        'dns_policy' => null,
        'domain' => null,
        'eviction_strategy' => null,
        'hostname' => null,
        'liveness_probe' => null,
        'networks' => null,
        'node_selector' => null,
        'priority_class_name' => null,
        'readiness_probe' => null,
        'scheduler_name' => null,
        'subdomain' => null,
        'termination_grace_period_seconds' => 'int64',
        'tolerations' => null,
        'volumes' => null
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
        'access_credentials' => 'accessCredentials',
        'affinity' => 'affinity',
        'dns_config' => 'dnsConfig',
        'dns_policy' => 'dnsPolicy',
        'domain' => 'domain',
        'eviction_strategy' => 'evictionStrategy',
        'hostname' => 'hostname',
        'liveness_probe' => 'livenessProbe',
        'networks' => 'networks',
        'node_selector' => 'nodeSelector',
        'priority_class_name' => 'priorityClassName',
        'readiness_probe' => 'readinessProbe',
        'scheduler_name' => 'schedulerName',
        'subdomain' => 'subdomain',
        'termination_grace_period_seconds' => 'terminationGracePeriodSeconds',
        'tolerations' => 'tolerations',
        'volumes' => 'volumes'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'access_credentials' => 'setAccessCredentials',
        'affinity' => 'setAffinity',
        'dns_config' => 'setDnsConfig',
        'dns_policy' => 'setDnsPolicy',
        'domain' => 'setDomain',
        'eviction_strategy' => 'setEvictionStrategy',
        'hostname' => 'setHostname',
        'liveness_probe' => 'setLivenessProbe',
        'networks' => 'setNetworks',
        'node_selector' => 'setNodeSelector',
        'priority_class_name' => 'setPriorityClassName',
        'readiness_probe' => 'setReadinessProbe',
        'scheduler_name' => 'setSchedulerName',
        'subdomain' => 'setSubdomain',
        'termination_grace_period_seconds' => 'setTerminationGracePeriodSeconds',
        'tolerations' => 'setTolerations',
        'volumes' => 'setVolumes'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'access_credentials' => 'getAccessCredentials',
        'affinity' => 'getAffinity',
        'dns_config' => 'getDnsConfig',
        'dns_policy' => 'getDnsPolicy',
        'domain' => 'getDomain',
        'eviction_strategy' => 'getEvictionStrategy',
        'hostname' => 'getHostname',
        'liveness_probe' => 'getLivenessProbe',
        'networks' => 'getNetworks',
        'node_selector' => 'getNodeSelector',
        'priority_class_name' => 'getPriorityClassName',
        'readiness_probe' => 'getReadinessProbe',
        'scheduler_name' => 'getSchedulerName',
        'subdomain' => 'getSubdomain',
        'termination_grace_period_seconds' => 'getTerminationGracePeriodSeconds',
        'tolerations' => 'getTolerations',
        'volumes' => 'getVolumes'
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
        $this->container['access_credentials'] = isset($data['access_credentials']) ? $data['access_credentials'] : null;
        $this->container['affinity'] = isset($data['affinity']) ? $data['affinity'] : null;
        $this->container['dns_config'] = isset($data['dns_config']) ? $data['dns_config'] : null;
        $this->container['dns_policy'] = isset($data['dns_policy']) ? $data['dns_policy'] : null;
        $this->container['domain'] = isset($data['domain']) ? $data['domain'] : null;
        $this->container['eviction_strategy'] = isset($data['eviction_strategy']) ? $data['eviction_strategy'] : null;
        $this->container['hostname'] = isset($data['hostname']) ? $data['hostname'] : null;
        $this->container['liveness_probe'] = isset($data['liveness_probe']) ? $data['liveness_probe'] : null;
        $this->container['networks'] = isset($data['networks']) ? $data['networks'] : null;
        $this->container['node_selector'] = isset($data['node_selector']) ? $data['node_selector'] : null;
        $this->container['priority_class_name'] = isset($data['priority_class_name']) ? $data['priority_class_name'] : null;
        $this->container['readiness_probe'] = isset($data['readiness_probe']) ? $data['readiness_probe'] : null;
        $this->container['scheduler_name'] = isset($data['scheduler_name']) ? $data['scheduler_name'] : null;
        $this->container['subdomain'] = isset($data['subdomain']) ? $data['subdomain'] : null;
        $this->container['termination_grace_period_seconds'] = isset($data['termination_grace_period_seconds']) ? $data['termination_grace_period_seconds'] : null;
        $this->container['tolerations'] = isset($data['tolerations']) ? $data['tolerations'] : null;
        $this->container['volumes'] = isset($data['volumes']) ? $data['volumes'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['domain'] === null) {
            $invalidProperties[] = "'domain' can't be null";
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
     * Gets access_credentials
     *
     * @return \Swagger\Client\Model\V1AccessCredential[]
     */
    public function getAccessCredentials()
    {
        return $this->container['access_credentials'];
    }

    /**
     * Sets access_credentials
     *
     * @param \Swagger\Client\Model\V1AccessCredential[] $access_credentials Specifies a set of public keys to inject into the vm guest
     *
     * @return $this
     */
    public function setAccessCredentials($access_credentials)
    {
        $this->container['access_credentials'] = $access_credentials;

        return $this;
    }

    /**
     * Gets affinity
     *
     * @return \Swagger\Client\Model\K8sIoApiCoreV1Affinity
     */
    public function getAffinity()
    {
        return $this->container['affinity'];
    }

    /**
     * Sets affinity
     *
     * @param \Swagger\Client\Model\K8sIoApiCoreV1Affinity $affinity If affinity is specifies, obey all the affinity rules
     *
     * @return $this
     */
    public function setAffinity($affinity)
    {
        $this->container['affinity'] = $affinity;

        return $this;
    }

    /**
     * Gets dns_config
     *
     * @return \Swagger\Client\Model\K8sIoApiCoreV1PodDNSConfig
     */
    public function getDnsConfig()
    {
        return $this->container['dns_config'];
    }

    /**
     * Sets dns_config
     *
     * @param \Swagger\Client\Model\K8sIoApiCoreV1PodDNSConfig $dns_config Specifies the DNS parameters of a pod. Parameters specified here will be merged to the generated DNS configuration based on DNSPolicy.
     *
     * @return $this
     */
    public function setDnsConfig($dns_config)
    {
        $this->container['dns_config'] = $dns_config;

        return $this;
    }

    /**
     * Gets dns_policy
     *
     * @return string
     */
    public function getDnsPolicy()
    {
        return $this->container['dns_policy'];
    }

    /**
     * Sets dns_policy
     *
     * @param string $dns_policy Set DNS policy for the pod. Defaults to \"ClusterFirst\". Valid values are 'ClusterFirstWithHostNet', 'ClusterFirst', 'Default' or 'None'. DNS parameters given in DNSConfig will be merged with the policy selected with DNSPolicy. To have DNS options set along with hostNetwork, you have to specify DNS policy explicitly to 'ClusterFirstWithHostNet'.
     *
     * @return $this
     */
    public function setDnsPolicy($dns_policy)
    {
        $this->container['dns_policy'] = $dns_policy;

        return $this;
    }

    /**
     * Gets domain
     *
     * @return \Swagger\Client\Model\V1DomainSpec
     */
    public function getDomain()
    {
        return $this->container['domain'];
    }

    /**
     * Sets domain
     *
     * @param \Swagger\Client\Model\V1DomainSpec $domain Specification of the desired behavior of the VirtualMachineInstance on the host.
     *
     * @return $this
     */
    public function setDomain($domain)
    {
        $this->container['domain'] = $domain;

        return $this;
    }

    /**
     * Gets eviction_strategy
     *
     * @return string
     */
    public function getEvictionStrategy()
    {
        return $this->container['eviction_strategy'];
    }

    /**
     * Sets eviction_strategy
     *
     * @param string $eviction_strategy EvictionStrategy can be set to \"LiveMigrate\" if the VirtualMachineInstance should be migrated instead of shut-off in case of a node drain.
     *
     * @return $this
     */
    public function setEvictionStrategy($eviction_strategy)
    {
        $this->container['eviction_strategy'] = $eviction_strategy;

        return $this;
    }

    /**
     * Gets hostname
     *
     * @return string
     */
    public function getHostname()
    {
        return $this->container['hostname'];
    }

    /**
     * Sets hostname
     *
     * @param string $hostname Specifies the hostname of the vmi If not specified, the hostname will be set to the name of the vmi, if dhcp or cloud-init is configured properly.
     *
     * @return $this
     */
    public function setHostname($hostname)
    {
        $this->container['hostname'] = $hostname;

        return $this;
    }

    /**
     * Gets liveness_probe
     *
     * @return \Swagger\Client\Model\V1Probe
     */
    public function getLivenessProbe()
    {
        return $this->container['liveness_probe'];
    }

    /**
     * Sets liveness_probe
     *
     * @param \Swagger\Client\Model\V1Probe $liveness_probe Periodic probe of VirtualMachineInstance liveness. VirtualmachineInstances will be stopped if the probe fails. Cannot be updated. More info: https://kubernetes.io/docs/concepts/workloads/pods/pod-lifecycle#container-probes
     *
     * @return $this
     */
    public function setLivenessProbe($liveness_probe)
    {
        $this->container['liveness_probe'] = $liveness_probe;

        return $this;
    }

    /**
     * Gets networks
     *
     * @return \Swagger\Client\Model\V1Network[]
     */
    public function getNetworks()
    {
        return $this->container['networks'];
    }

    /**
     * Sets networks
     *
     * @param \Swagger\Client\Model\V1Network[] $networks List of networks that can be attached to a vm's virtual interface.
     *
     * @return $this
     */
    public function setNetworks($networks)
    {
        $this->container['networks'] = $networks;

        return $this;
    }

    /**
     * Gets node_selector
     *
     * @return map[string,string]
     */
    public function getNodeSelector()
    {
        return $this->container['node_selector'];
    }

    /**
     * Sets node_selector
     *
     * @param map[string,string] $node_selector NodeSelector is a selector which must be true for the vmi to fit on a node. Selector which must match a node's labels for the vmi to be scheduled on that node. More info: https://kubernetes.io/docs/concepts/configuration/assign-pod-node/
     *
     * @return $this
     */
    public function setNodeSelector($node_selector)
    {
        $this->container['node_selector'] = $node_selector;

        return $this;
    }

    /**
     * Gets priority_class_name
     *
     * @return string
     */
    public function getPriorityClassName()
    {
        return $this->container['priority_class_name'];
    }

    /**
     * Sets priority_class_name
     *
     * @param string $priority_class_name If specified, indicates the pod's priority. If not specified, the pod priority will be default or zero if there is no default.
     *
     * @return $this
     */
    public function setPriorityClassName($priority_class_name)
    {
        $this->container['priority_class_name'] = $priority_class_name;

        return $this;
    }

    /**
     * Gets readiness_probe
     *
     * @return \Swagger\Client\Model\V1Probe
     */
    public function getReadinessProbe()
    {
        return $this->container['readiness_probe'];
    }

    /**
     * Sets readiness_probe
     *
     * @param \Swagger\Client\Model\V1Probe $readiness_probe Periodic probe of VirtualMachineInstance service readiness. VirtualmachineInstances will be removed from service endpoints if the probe fails. Cannot be updated. More info: https://kubernetes.io/docs/concepts/workloads/pods/pod-lifecycle#container-probes
     *
     * @return $this
     */
    public function setReadinessProbe($readiness_probe)
    {
        $this->container['readiness_probe'] = $readiness_probe;

        return $this;
    }

    /**
     * Gets scheduler_name
     *
     * @return string
     */
    public function getSchedulerName()
    {
        return $this->container['scheduler_name'];
    }

    /**
     * Sets scheduler_name
     *
     * @param string $scheduler_name If specified, the VMI will be dispatched by specified scheduler. If not specified, the VMI will be dispatched by default scheduler.
     *
     * @return $this
     */
    public function setSchedulerName($scheduler_name)
    {
        $this->container['scheduler_name'] = $scheduler_name;

        return $this;
    }

    /**
     * Gets subdomain
     *
     * @return string
     */
    public function getSubdomain()
    {
        return $this->container['subdomain'];
    }

    /**
     * Sets subdomain
     *
     * @param string $subdomain If specified, the fully qualified vmi hostname will be \"<hostname>.<subdomain>.<pod namespace>.svc.<cluster domain>\". If not specified, the vmi will not have a domainname at all. The DNS entry will resolve to the vmi, no matter if the vmi itself can pick up a hostname.
     *
     * @return $this
     */
    public function setSubdomain($subdomain)
    {
        $this->container['subdomain'] = $subdomain;

        return $this;
    }

    /**
     * Gets termination_grace_period_seconds
     *
     * @return int
     */
    public function getTerminationGracePeriodSeconds()
    {
        return $this->container['termination_grace_period_seconds'];
    }

    /**
     * Sets termination_grace_period_seconds
     *
     * @param int $termination_grace_period_seconds Grace period observed after signalling a VirtualMachineInstance to stop after which the VirtualMachineInstance is force terminated.
     *
     * @return $this
     */
    public function setTerminationGracePeriodSeconds($termination_grace_period_seconds)
    {
        $this->container['termination_grace_period_seconds'] = $termination_grace_period_seconds;

        return $this;
    }

    /**
     * Gets tolerations
     *
     * @return \Swagger\Client\Model\K8sIoApiCoreV1Toleration[]
     */
    public function getTolerations()
    {
        return $this->container['tolerations'];
    }

    /**
     * Sets tolerations
     *
     * @param \Swagger\Client\Model\K8sIoApiCoreV1Toleration[] $tolerations If toleration is specified, obey all the toleration rules.
     *
     * @return $this
     */
    public function setTolerations($tolerations)
    {
        $this->container['tolerations'] = $tolerations;

        return $this;
    }

    /**
     * Gets volumes
     *
     * @return \Swagger\Client\Model\V1Volume[]
     */
    public function getVolumes()
    {
        return $this->container['volumes'];
    }

    /**
     * Sets volumes
     *
     * @param \Swagger\Client\Model\V1Volume[] $volumes List of volumes that can be mounted by disks belonging to the vmi.
     *
     * @return $this
     */
    public function setVolumes($volumes)
    {
        $this->container['volumes'] = $volumes;

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


