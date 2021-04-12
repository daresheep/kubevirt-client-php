# V1VirtualMachineInstanceStatus

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**active_pods** | **map[string,string]** | ActivePods is a mapping of pod UID to node name. It is possible for multiple pods to be running for a single VMI during migration. | [optional] 
**conditions** | [**\Swagger\Client\Model\V1VirtualMachineInstanceCondition[]**](V1VirtualMachineInstanceCondition.md) | Conditions are specific points in VirtualMachineInstance&#39;s pod runtime. | [optional] 
**evacuation_node_name** | **string** | EvacuationNodeName is used to track the eviction process of a VMI. It stores the name of the node that we want to evacuate. It is meant to be used by KubeVirt core components only and can&#39;t be set or modified by users. | [optional] 
**guest_os_info** | [**\Swagger\Client\Model\V1VirtualMachineInstanceGuestOSInfo**](V1VirtualMachineInstanceGuestOSInfo.md) | Guest OS Information | [optional] 
**interfaces** | [**\Swagger\Client\Model\V1VirtualMachineInstanceNetworkInterface[]**](V1VirtualMachineInstanceNetworkInterface.md) | Interfaces represent the details of available network interfaces. | [optional] 
**launcher_container_image_version** | **string** | LauncherContainerImageVersion indicates what container image is currently active for the vmi. | [optional] 
**migration_method** | **string** | Represents the method using which the vmi can be migrated: live migration or block migration | [optional] 
**migration_state** | [**\Swagger\Client\Model\V1VirtualMachineInstanceMigrationState**](V1VirtualMachineInstanceMigrationState.md) | Represents the status of a live migration | [optional] 
**node_name** | **string** | NodeName is the name where the VirtualMachineInstance is currently running. | [optional] 
**phase** | **string** | Phase is the status of the VirtualMachineInstance in kubernetes world. It is not the VirtualMachineInstance status, but partially correlates to it. | [optional] 
**qos_class** | **string** | The Quality of Service (QOS) classification assigned to the virtual machine instance based on resource requirements See PodQOSClass type for available QOS classes More info: https://git.k8s.io/community/contributors/design-proposals/node/resource-qos.md | [optional] 
**reason** | **string** | A brief CamelCase message indicating details about why the VMI is in this state. e.g. &#39;NodeUnresponsive&#39; | [optional] 
**volume_status** | [**\Swagger\Client\Model\V1VolumeStatus[]**](V1VolumeStatus.md) | VolumeStatus contains the statuses of all the volumes | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


