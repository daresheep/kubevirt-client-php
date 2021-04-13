# V1Memory

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**guest** | [**\Swagger\Client\Model\K8sIoApimachineryPkgApiResourceQuantity**](K8sIoApimachineryPkgApiResourceQuantity.md) | Guest allows to specifying the amount of memory which is visible inside the Guest OS. The Guest must lie between Requests and Limits from the resources section. Defaults to the requested memory in the resources section if not specified. | [optional] 
**hugepages** | [**\Swagger\Client\Model\V1Hugepages**](V1Hugepages.md) | Hugepages allow to use hugepages for the VirtualMachineInstance instead of regular memory. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


