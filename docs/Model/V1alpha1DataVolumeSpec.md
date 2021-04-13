# V1alpha1DataVolumeSpec

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**checkpoints** | [**\Swagger\Client\Model\V1alpha1DataVolumeCheckpoint[]**](V1alpha1DataVolumeCheckpoint.md) | Checkpoints is a list of DataVolumeCheckpoints, representing stages in a multistage import. | [optional] 
**content_type** | **string** | DataVolumeContentType options: \&quot;kubevirt\&quot;, \&quot;archive\&quot; | [optional] 
**final_checkpoint** | **bool** | FinalCheckpoint indicates whether the current DataVolumeCheckpoint is the final checkpoint. | [optional] 
**preallocation** | **bool** | Preallocation controls whether storage for DataVolumes should be allocated in advance. | [optional] 
**pvc** | [**\Swagger\Client\Model\K8sIoApiCoreV1PersistentVolumeClaimSpec**](K8sIoApiCoreV1PersistentVolumeClaimSpec.md) | PVC is the PVC specification | 
**source** | [**\Swagger\Client\Model\V1alpha1DataVolumeSource**](V1alpha1DataVolumeSource.md) | Source is the src of the data for the requested DataVolume | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


