# V1Features

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**acpi** | [**\Swagger\Client\Model\V1FeatureState**](V1FeatureState.md) | ACPI enables/disables ACPI inside the guest. Defaults to enabled. | [optional] 
**apic** | [**\Swagger\Client\Model\V1FeatureAPIC**](V1FeatureAPIC.md) | Defaults to the machine type setting. | [optional] 
**hyperv** | [**\Swagger\Client\Model\V1FeatureHyperv**](V1FeatureHyperv.md) | Defaults to the machine type setting. | [optional] 
**kvm** | [**\Swagger\Client\Model\V1FeatureKVM**](V1FeatureKVM.md) | Configure how KVM presence is exposed to the guest. | [optional] 
**pvspinlock** | [**\Swagger\Client\Model\V1FeatureState**](V1FeatureState.md) | Notify the guest that the host supports paravirtual spinlocks. For older kernels this feature should be explicitly disabled. | [optional] 
**smm** | [**\Swagger\Client\Model\V1FeatureState**](V1FeatureState.md) | SMM enables/disables System Management Mode. TSEG not yet implemented. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


