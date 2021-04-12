# V1Volume

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**cloud_init_config_drive** | [**\Swagger\Client\Model\V1CloudInitConfigDriveSource**](V1CloudInitConfigDriveSource.md) | CloudInitConfigDrive represents a cloud-init Config Drive user-data source. The Config Drive data will be added as a disk to the vmi. A proper cloud-init installation is required inside the guest. More info: https://cloudinit.readthedocs.io/en/latest/topics/datasources/configdrive.html | [optional] 
**cloud_init_no_cloud** | [**\Swagger\Client\Model\V1CloudInitNoCloudSource**](V1CloudInitNoCloudSource.md) | CloudInitNoCloud represents a cloud-init NoCloud user-data source. The NoCloud data will be added as a disk to the vmi. A proper cloud-init installation is required inside the guest. More info: http://cloudinit.readthedocs.io/en/latest/topics/datasources/nocloud.html | [optional] 
**config_map** | [**\Swagger\Client\Model\V1ConfigMapVolumeSource**](V1ConfigMapVolumeSource.md) | ConfigMapSource represents a reference to a ConfigMap in the same namespace. More info: https://kubernetes.io/docs/tasks/configure-pod-container/configure-pod-configmap/ | [optional] 
**container_disk** | [**\Swagger\Client\Model\V1ContainerDiskSource**](V1ContainerDiskSource.md) | ContainerDisk references a docker image, embedding a qcow or raw disk. More info: https://kubevirt.gitbooks.io/user-guide/registry-disk.html | [optional] 
**data_volume** | [**\Swagger\Client\Model\V1DataVolumeSource**](V1DataVolumeSource.md) | DataVolume represents the dynamic creation a PVC for this volume as well as the process of populating that PVC with a disk image. | [optional] 
**downward_api** | [**\Swagger\Client\Model\V1DownwardAPIVolumeSource**](V1DownwardAPIVolumeSource.md) | DownwardAPI represents downward API about the pod that should populate this volume | [optional] 
**empty_disk** | [**\Swagger\Client\Model\V1EmptyDiskSource**](V1EmptyDiskSource.md) | EmptyDisk represents a temporary disk which shares the vmis lifecycle. More info: https://kubevirt.gitbooks.io/user-guide/disks-and-volumes.html | [optional] 
**ephemeral** | [**\Swagger\Client\Model\V1EphemeralVolumeSource**](V1EphemeralVolumeSource.md) | Ephemeral is a special volume source that \&quot;wraps\&quot; specified source and provides copy-on-write image on top of it. | [optional] 
**host_disk** | [**\Swagger\Client\Model\V1HostDisk**](V1HostDisk.md) | HostDisk represents a disk created on the cluster level | [optional] 
**name** | **string** | Volume&#39;s name. Must be a DNS_LABEL and unique within the vmi. More info: https://kubernetes.io/docs/concepts/overview/working-with-objects/names/#names | 
**persistent_volume_claim** | [**\Swagger\Client\Model\K8sIoApiCoreV1PersistentVolumeClaimVolumeSource**](K8sIoApiCoreV1PersistentVolumeClaimVolumeSource.md) | PersistentVolumeClaimVolumeSource represents a reference to a PersistentVolumeClaim in the same namespace. Directly attached to the vmi via qemu. More info: https://kubernetes.io/docs/concepts/storage/persistent-volumes#persistentvolumeclaims | [optional] 
**secret** | [**\Swagger\Client\Model\V1SecretVolumeSource**](V1SecretVolumeSource.md) | SecretVolumeSource represents a reference to a secret data in the same namespace. More info: https://kubernetes.io/docs/concepts/configuration/secret/ | [optional] 
**service_account** | [**\Swagger\Client\Model\V1ServiceAccountVolumeSource**](V1ServiceAccountVolumeSource.md) | ServiceAccountVolumeSource represents a reference to a service account. There can only be one volume of this type! More info: https://kubernetes.io/docs/tasks/configure-pod-container/configure-service-account/ | [optional] 
**sysprep** | [**\Swagger\Client\Model\V1SysprepSource**](V1SysprepSource.md) | Represents a Sysprep volume source. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


