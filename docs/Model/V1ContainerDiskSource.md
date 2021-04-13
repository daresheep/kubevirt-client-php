# V1ContainerDiskSource

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**image** | **string** | Image is the name of the image with the embedded disk. | 
**image_pull_policy** | **string** | Image pull policy. One of Always, Never, IfNotPresent. Defaults to Always if :latest tag is specified, or IfNotPresent otherwise. Cannot be updated. More info: https://kubernetes.io/docs/concepts/containers/images#updating-images | [optional] 
**image_pull_secret** | **string** | ImagePullSecret is the name of the Docker registry secret required to pull the image. The secret must already exist. | [optional] 
**path** | **string** | Path defines the path to disk file in the container | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


