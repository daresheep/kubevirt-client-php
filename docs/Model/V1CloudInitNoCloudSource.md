# V1CloudInitNoCloudSource

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**network_data** | **string** | NetworkData contains NoCloud inline cloud-init networkdata. | [optional] 
**network_data_base64** | **string** | NetworkDataBase64 contains NoCloud cloud-init networkdata as a base64 encoded string. | [optional] 
**network_data_secret_ref** | [**\Swagger\Client\Model\K8sIoApiCoreV1LocalObjectReference**](K8sIoApiCoreV1LocalObjectReference.md) | NetworkDataSecretRef references a k8s secret that contains NoCloud networkdata. | [optional] 
**secret_ref** | [**\Swagger\Client\Model\K8sIoApiCoreV1LocalObjectReference**](K8sIoApiCoreV1LocalObjectReference.md) | UserDataSecretRef references a k8s secret that contains NoCloud userdata. | [optional] 
**user_data** | **string** | UserData contains NoCloud inline cloud-init userdata. | [optional] 
**user_data_base64** | **string** | UserDataBase64 contains NoCloud cloud-init userdata as a base64 encoded string. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


