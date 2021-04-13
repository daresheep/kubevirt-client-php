# K8sIoApiCoreV1PersistentVolumeClaimSpec

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**access_modes** | **string[]** | AccessModes contains the desired access modes the volume should have. More info: https://kubernetes.io/docs/concepts/storage/persistent-volumes#access-modes-1 | [optional] 
**data_source** | [**\Swagger\Client\Model\K8sIoApiCoreV1TypedLocalObjectReference**](K8sIoApiCoreV1TypedLocalObjectReference.md) | This field can be used to specify either: * An existing VolumeSnapshot object (snapshot.storage.k8s.io/VolumeSnapshot) * An existing PVC (PersistentVolumeClaim) * An existing custom resource that implements data population (Alpha) In order to use custom resource types that implement data population, the AnyVolumeDataSource feature gate must be enabled. If the provisioner or an external controller can support the specified data source, it will create a new volume based on the contents of the specified data source. | [optional] 
**resources** | [**\Swagger\Client\Model\K8sIoApiCoreV1ResourceRequirements**](K8sIoApiCoreV1ResourceRequirements.md) | Resources represents the minimum resources the volume should have. More info: https://kubernetes.io/docs/concepts/storage/persistent-volumes#resources | [optional] 
**selector** | [**\Swagger\Client\Model\K8sIoApimachineryPkgApisMetaV1LabelSelector**](K8sIoApimachineryPkgApisMetaV1LabelSelector.md) | A label query over volumes to consider for binding. | [optional] 
**storage_class_name** | **string** | Name of the StorageClass required by the claim. More info: https://kubernetes.io/docs/concepts/storage/persistent-volumes#class-1 | [optional] 
**volume_mode** | **string** | volumeMode defines what type of volume is required by the claim. Value of Filesystem is implied when not included in claim spec. | [optional] 
**volume_name** | **string** | VolumeName is the binding reference to the PersistentVolume backing this claim. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


