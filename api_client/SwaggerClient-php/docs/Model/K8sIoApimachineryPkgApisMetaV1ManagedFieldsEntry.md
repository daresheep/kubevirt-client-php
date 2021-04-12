# K8sIoApimachineryPkgApisMetaV1ManagedFieldsEntry

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**api_version** | **string** | APIVersion defines the version of this resource that this field set applies to. The format is \&quot;group/version\&quot; just like the top-level APIVersion field. It is necessary to track the version of a field set because it cannot be automatically converted. | [optional] 
**fields_type** | **string** | FieldsType is the discriminator for the different fields format and version. There is currently only one possible value: \&quot;FieldsV1\&quot; | [optional] 
**fields_v1** | [**\Swagger\Client\Model\K8sIoApimachineryPkgApisMetaV1FieldsV1**](K8sIoApimachineryPkgApisMetaV1FieldsV1.md) | FieldsV1 holds the first JSON version format as described in the \&quot;FieldsV1\&quot; type. | [optional] 
**manager** | **string** | Manager is an identifier of the workflow managing these fields. | [optional] 
**operation** | **string** | Operation is the type of operation which lead to this ManagedFieldsEntry being created. The only valid values for this field are &#39;Apply&#39; and &#39;Update&#39;. | [optional] 
**time** | [**\Swagger\Client\Model\K8sIoApimachineryPkgApisMetaV1Time**](K8sIoApimachineryPkgApisMetaV1Time.md) | Time is timestamp of when these fields were set. It should always be empty if Operation is &#39;Apply&#39; | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


