<?php
/**
 * V1FeatureHyperv
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
 * V1FeatureHyperv Class Doc Comment
 *
 * @category Class
 * @description Hyperv specific features.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class V1FeatureHyperv implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'v1.FeatureHyperv';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'evmcs' => '\Swagger\Client\Model\V1FeatureState',
        'frequencies' => '\Swagger\Client\Model\V1FeatureState',
        'ipi' => '\Swagger\Client\Model\V1FeatureState',
        'reenlightenment' => '\Swagger\Client\Model\V1FeatureState',
        'relaxed' => '\Swagger\Client\Model\V1FeatureState',
        'reset' => '\Swagger\Client\Model\V1FeatureState',
        'runtime' => '\Swagger\Client\Model\V1FeatureState',
        'spinlocks' => '\Swagger\Client\Model\V1FeatureSpinlocks',
        'synic' => '\Swagger\Client\Model\V1FeatureState',
        'synictimer' => '\Swagger\Client\Model\V1SyNICTimer',
        'tlbflush' => '\Swagger\Client\Model\V1FeatureState',
        'vapic' => '\Swagger\Client\Model\V1FeatureState',
        'vendorid' => '\Swagger\Client\Model\V1FeatureVendorID',
        'vpindex' => '\Swagger\Client\Model\V1FeatureState'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'evmcs' => null,
        'frequencies' => null,
        'ipi' => null,
        'reenlightenment' => null,
        'relaxed' => null,
        'reset' => null,
        'runtime' => null,
        'spinlocks' => null,
        'synic' => null,
        'synictimer' => null,
        'tlbflush' => null,
        'vapic' => null,
        'vendorid' => null,
        'vpindex' => null
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
        'evmcs' => 'evmcs',
        'frequencies' => 'frequencies',
        'ipi' => 'ipi',
        'reenlightenment' => 'reenlightenment',
        'relaxed' => 'relaxed',
        'reset' => 'reset',
        'runtime' => 'runtime',
        'spinlocks' => 'spinlocks',
        'synic' => 'synic',
        'synictimer' => 'synictimer',
        'tlbflush' => 'tlbflush',
        'vapic' => 'vapic',
        'vendorid' => 'vendorid',
        'vpindex' => 'vpindex'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'evmcs' => 'setEvmcs',
        'frequencies' => 'setFrequencies',
        'ipi' => 'setIpi',
        'reenlightenment' => 'setReenlightenment',
        'relaxed' => 'setRelaxed',
        'reset' => 'setReset',
        'runtime' => 'setRuntime',
        'spinlocks' => 'setSpinlocks',
        'synic' => 'setSynic',
        'synictimer' => 'setSynictimer',
        'tlbflush' => 'setTlbflush',
        'vapic' => 'setVapic',
        'vendorid' => 'setVendorid',
        'vpindex' => 'setVpindex'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'evmcs' => 'getEvmcs',
        'frequencies' => 'getFrequencies',
        'ipi' => 'getIpi',
        'reenlightenment' => 'getReenlightenment',
        'relaxed' => 'getRelaxed',
        'reset' => 'getReset',
        'runtime' => 'getRuntime',
        'spinlocks' => 'getSpinlocks',
        'synic' => 'getSynic',
        'synictimer' => 'getSynictimer',
        'tlbflush' => 'getTlbflush',
        'vapic' => 'getVapic',
        'vendorid' => 'getVendorid',
        'vpindex' => 'getVpindex'
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
        $this->container['evmcs'] = isset($data['evmcs']) ? $data['evmcs'] : null;
        $this->container['frequencies'] = isset($data['frequencies']) ? $data['frequencies'] : null;
        $this->container['ipi'] = isset($data['ipi']) ? $data['ipi'] : null;
        $this->container['reenlightenment'] = isset($data['reenlightenment']) ? $data['reenlightenment'] : null;
        $this->container['relaxed'] = isset($data['relaxed']) ? $data['relaxed'] : null;
        $this->container['reset'] = isset($data['reset']) ? $data['reset'] : null;
        $this->container['runtime'] = isset($data['runtime']) ? $data['runtime'] : null;
        $this->container['spinlocks'] = isset($data['spinlocks']) ? $data['spinlocks'] : null;
        $this->container['synic'] = isset($data['synic']) ? $data['synic'] : null;
        $this->container['synictimer'] = isset($data['synictimer']) ? $data['synictimer'] : null;
        $this->container['tlbflush'] = isset($data['tlbflush']) ? $data['tlbflush'] : null;
        $this->container['vapic'] = isset($data['vapic']) ? $data['vapic'] : null;
        $this->container['vendorid'] = isset($data['vendorid']) ? $data['vendorid'] : null;
        $this->container['vpindex'] = isset($data['vpindex']) ? $data['vpindex'] : null;
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
     * Gets evmcs
     *
     * @return \Swagger\Client\Model\V1FeatureState
     */
    public function getEvmcs()
    {
        return $this->container['evmcs'];
    }

    /**
     * Sets evmcs
     *
     * @param \Swagger\Client\Model\V1FeatureState $evmcs EVMCS Speeds up L2 vmexits, but disables other virtualization features. Requires vapic. Defaults to the machine type setting.
     *
     * @return $this
     */
    public function setEvmcs($evmcs)
    {
        $this->container['evmcs'] = $evmcs;

        return $this;
    }

    /**
     * Gets frequencies
     *
     * @return \Swagger\Client\Model\V1FeatureState
     */
    public function getFrequencies()
    {
        return $this->container['frequencies'];
    }

    /**
     * Sets frequencies
     *
     * @param \Swagger\Client\Model\V1FeatureState $frequencies Frequencies improves the TSC clock source handling for Hyper-V on KVM. Defaults to the machine type setting.
     *
     * @return $this
     */
    public function setFrequencies($frequencies)
    {
        $this->container['frequencies'] = $frequencies;

        return $this;
    }

    /**
     * Gets ipi
     *
     * @return \Swagger\Client\Model\V1FeatureState
     */
    public function getIpi()
    {
        return $this->container['ipi'];
    }

    /**
     * Sets ipi
     *
     * @param \Swagger\Client\Model\V1FeatureState $ipi IPI improves performances in overcommited environments. Requires vpindex. Defaults to the machine type setting.
     *
     * @return $this
     */
    public function setIpi($ipi)
    {
        $this->container['ipi'] = $ipi;

        return $this;
    }

    /**
     * Gets reenlightenment
     *
     * @return \Swagger\Client\Model\V1FeatureState
     */
    public function getReenlightenment()
    {
        return $this->container['reenlightenment'];
    }

    /**
     * Sets reenlightenment
     *
     * @param \Swagger\Client\Model\V1FeatureState $reenlightenment Reenlightenment enables the notifications on TSC frequency changes. Defaults to the machine type setting.
     *
     * @return $this
     */
    public function setReenlightenment($reenlightenment)
    {
        $this->container['reenlightenment'] = $reenlightenment;

        return $this;
    }

    /**
     * Gets relaxed
     *
     * @return \Swagger\Client\Model\V1FeatureState
     */
    public function getRelaxed()
    {
        return $this->container['relaxed'];
    }

    /**
     * Sets relaxed
     *
     * @param \Swagger\Client\Model\V1FeatureState $relaxed Relaxed instructs the guest OS to disable watchdog timeouts. Defaults to the machine type setting.
     *
     * @return $this
     */
    public function setRelaxed($relaxed)
    {
        $this->container['relaxed'] = $relaxed;

        return $this;
    }

    /**
     * Gets reset
     *
     * @return \Swagger\Client\Model\V1FeatureState
     */
    public function getReset()
    {
        return $this->container['reset'];
    }

    /**
     * Sets reset
     *
     * @param \Swagger\Client\Model\V1FeatureState $reset Reset enables Hyperv reboot/reset for the vmi. Requires synic. Defaults to the machine type setting.
     *
     * @return $this
     */
    public function setReset($reset)
    {
        $this->container['reset'] = $reset;

        return $this;
    }

    /**
     * Gets runtime
     *
     * @return \Swagger\Client\Model\V1FeatureState
     */
    public function getRuntime()
    {
        return $this->container['runtime'];
    }

    /**
     * Sets runtime
     *
     * @param \Swagger\Client\Model\V1FeatureState $runtime Runtime improves the time accounting to improve scheduling in the guest. Defaults to the machine type setting.
     *
     * @return $this
     */
    public function setRuntime($runtime)
    {
        $this->container['runtime'] = $runtime;

        return $this;
    }

    /**
     * Gets spinlocks
     *
     * @return \Swagger\Client\Model\V1FeatureSpinlocks
     */
    public function getSpinlocks()
    {
        return $this->container['spinlocks'];
    }

    /**
     * Sets spinlocks
     *
     * @param \Swagger\Client\Model\V1FeatureSpinlocks $spinlocks Spinlocks allows to configure the spinlock retry attempts.
     *
     * @return $this
     */
    public function setSpinlocks($spinlocks)
    {
        $this->container['spinlocks'] = $spinlocks;

        return $this;
    }

    /**
     * Gets synic
     *
     * @return \Swagger\Client\Model\V1FeatureState
     */
    public function getSynic()
    {
        return $this->container['synic'];
    }

    /**
     * Sets synic
     *
     * @param \Swagger\Client\Model\V1FeatureState $synic SyNIC enables the Synthetic Interrupt Controller. Defaults to the machine type setting.
     *
     * @return $this
     */
    public function setSynic($synic)
    {
        $this->container['synic'] = $synic;

        return $this;
    }

    /**
     * Gets synictimer
     *
     * @return \Swagger\Client\Model\V1SyNICTimer
     */
    public function getSynictimer()
    {
        return $this->container['synictimer'];
    }

    /**
     * Sets synictimer
     *
     * @param \Swagger\Client\Model\V1SyNICTimer $synictimer SyNICTimer enables Synthetic Interrupt Controller Timers, reducing CPU load. Defaults to the machine type setting.
     *
     * @return $this
     */
    public function setSynictimer($synictimer)
    {
        $this->container['synictimer'] = $synictimer;

        return $this;
    }

    /**
     * Gets tlbflush
     *
     * @return \Swagger\Client\Model\V1FeatureState
     */
    public function getTlbflush()
    {
        return $this->container['tlbflush'];
    }

    /**
     * Sets tlbflush
     *
     * @param \Swagger\Client\Model\V1FeatureState $tlbflush TLBFlush improves performances in overcommited environments. Requires vpindex. Defaults to the machine type setting.
     *
     * @return $this
     */
    public function setTlbflush($tlbflush)
    {
        $this->container['tlbflush'] = $tlbflush;

        return $this;
    }

    /**
     * Gets vapic
     *
     * @return \Swagger\Client\Model\V1FeatureState
     */
    public function getVapic()
    {
        return $this->container['vapic'];
    }

    /**
     * Sets vapic
     *
     * @param \Swagger\Client\Model\V1FeatureState $vapic VAPIC improves the paravirtualized handling of interrupts. Defaults to the machine type setting.
     *
     * @return $this
     */
    public function setVapic($vapic)
    {
        $this->container['vapic'] = $vapic;

        return $this;
    }

    /**
     * Gets vendorid
     *
     * @return \Swagger\Client\Model\V1FeatureVendorID
     */
    public function getVendorid()
    {
        return $this->container['vendorid'];
    }

    /**
     * Sets vendorid
     *
     * @param \Swagger\Client\Model\V1FeatureVendorID $vendorid VendorID allows setting the hypervisor vendor id. Defaults to the machine type setting.
     *
     * @return $this
     */
    public function setVendorid($vendorid)
    {
        $this->container['vendorid'] = $vendorid;

        return $this;
    }

    /**
     * Gets vpindex
     *
     * @return \Swagger\Client\Model\V1FeatureState
     */
    public function getVpindex()
    {
        return $this->container['vpindex'];
    }

    /**
     * Sets vpindex
     *
     * @param \Swagger\Client\Model\V1FeatureState $vpindex VPIndex enables the Virtual Processor Index to help windows identifying virtual processors. Defaults to the machine type setting.
     *
     * @return $this
     */
    public function setVpindex($vpindex)
    {
        $this->container['vpindex'] = $vpindex;

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


