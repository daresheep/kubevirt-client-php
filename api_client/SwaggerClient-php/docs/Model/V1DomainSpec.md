# V1DomainSpec

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**chassis** | [**\Swagger\Client\Model\V1Chassis**](V1Chassis.md) | Chassis specifies the chassis info passed to the domain. | [optional] 
**clock** | [**\Swagger\Client\Model\V1Clock**](V1Clock.md) | Clock sets the clock and timers of the vmi. | [optional] 
**cpu** | [**\Swagger\Client\Model\V1CPU**](V1CPU.md) | CPU allow specified the detailed CPU topology inside the vmi. | [optional] 
**devices** | [**\Swagger\Client\Model\V1Devices**](V1Devices.md) | Devices allows adding disks, network interfaces, and others | 
**features** | [**\Swagger\Client\Model\V1Features**](V1Features.md) | Features like acpi, apic, hyperv, smm. | [optional] 
**firmware** | [**\Swagger\Client\Model\V1Firmware**](V1Firmware.md) | Firmware. | [optional] 
**io_threads_policy** | **string** | Controls whether or not disks will share IOThreads. Omitting IOThreadsPolicy disables use of IOThreads. One of: shared, auto | [optional] 
**machine** | [**\Swagger\Client\Model\V1Machine**](V1Machine.md) | Machine type. | [optional] 
**memory** | [**\Swagger\Client\Model\V1Memory**](V1Memory.md) | Memory allow specifying the VMI memory features. | [optional] 
**resources** | [**\Swagger\Client\Model\V1ResourceRequirements**](V1ResourceRequirements.md) | Resources describes the Compute Resources required by this vmi. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


