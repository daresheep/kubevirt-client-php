# V1CloudInitConfigDriveSource

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**network_data** | **string** | NetworkData contains config drive inline cloud-init networkdata. | [optional] 
**network_data_base64** | **string** | NetworkDataBase64 contains config drive cloud-init networkdata as a base64 encoded string. | [optional] 
**network_data_secret_ref** | [**\Swagger\Client\Model\K8sIoApiCoreV1LocalObjectReference**](K8sIoApiCoreV1LocalObjectReference.md) | NetworkDataSecretRef references a k8s secret that contains config drive networkdata. | [optional] 
**secret_ref** | [**\Swagger\Client\Model\K8sIoApiCoreV1LocalObjectReference**](K8sIoApiCoreV1LocalObjectReference.md) | UserDataSecretRef references a k8s secret that contains config drive userdata. | [optional] 
**user_data** | **string** | UserData contains config drive inline cloud-init userdata. | [optional] 
**user_data_base64** | **string** | UserDataBase64 contains config drive cloud-init userdata as a base64 encoded string. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


