# V1FeatureHyperv

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**evmcs** | [**\Swagger\Client\Model\V1FeatureState**](V1FeatureState.md) | EVMCS Speeds up L2 vmexits, but disables other virtualization features. Requires vapic. Defaults to the machine type setting. | [optional] 
**frequencies** | [**\Swagger\Client\Model\V1FeatureState**](V1FeatureState.md) | Frequencies improves the TSC clock source handling for Hyper-V on KVM. Defaults to the machine type setting. | [optional] 
**ipi** | [**\Swagger\Client\Model\V1FeatureState**](V1FeatureState.md) | IPI improves performances in overcommited environments. Requires vpindex. Defaults to the machine type setting. | [optional] 
**reenlightenment** | [**\Swagger\Client\Model\V1FeatureState**](V1FeatureState.md) | Reenlightenment enables the notifications on TSC frequency changes. Defaults to the machine type setting. | [optional] 
**relaxed** | [**\Swagger\Client\Model\V1FeatureState**](V1FeatureState.md) | Relaxed instructs the guest OS to disable watchdog timeouts. Defaults to the machine type setting. | [optional] 
**reset** | [**\Swagger\Client\Model\V1FeatureState**](V1FeatureState.md) | Reset enables Hyperv reboot/reset for the vmi. Requires synic. Defaults to the machine type setting. | [optional] 
**runtime** | [**\Swagger\Client\Model\V1FeatureState**](V1FeatureState.md) | Runtime improves the time accounting to improve scheduling in the guest. Defaults to the machine type setting. | [optional] 
**spinlocks** | [**\Swagger\Client\Model\V1FeatureSpinlocks**](V1FeatureSpinlocks.md) | Spinlocks allows to configure the spinlock retry attempts. | [optional] 
**synic** | [**\Swagger\Client\Model\V1FeatureState**](V1FeatureState.md) | SyNIC enables the Synthetic Interrupt Controller. Defaults to the machine type setting. | [optional] 
**synictimer** | [**\Swagger\Client\Model\V1SyNICTimer**](V1SyNICTimer.md) | SyNICTimer enables Synthetic Interrupt Controller Timers, reducing CPU load. Defaults to the machine type setting. | [optional] 
**tlbflush** | [**\Swagger\Client\Model\V1FeatureState**](V1FeatureState.md) | TLBFlush improves performances in overcommited environments. Requires vpindex. Defaults to the machine type setting. | [optional] 
**vapic** | [**\Swagger\Client\Model\V1FeatureState**](V1FeatureState.md) | VAPIC improves the paravirtualized handling of interrupts. Defaults to the machine type setting. | [optional] 
**vendorid** | [**\Swagger\Client\Model\V1FeatureVendorID**](V1FeatureVendorID.md) | VendorID allows setting the hypervisor vendor id. Defaults to the machine type setting. | [optional] 
**vpindex** | [**\Swagger\Client\Model\V1FeatureState**](V1FeatureState.md) | VPIndex enables the Virtual Processor Index to help windows identifying virtual processors. Defaults to the machine type setting. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


