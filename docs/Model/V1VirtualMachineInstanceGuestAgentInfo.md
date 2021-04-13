# V1VirtualMachineInstanceGuestAgentInfo

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**api_version** | **string** | APIVersion defines the versioned schema of this representation of an object. Servers should convert recognized schemas to the latest internal value, and may reject unrecognized values. More info: https://git.k8s.io/community/contributors/devel/sig-architecture/api-conventions.md#resources | [optional] 
**fs_info** | [**\Swagger\Client\Model\V1VirtualMachineInstanceFileSystemInfo**](V1VirtualMachineInstanceFileSystemInfo.md) | FSInfo is a guest os filesystem information containing the disk mapping and disk mounts with usage | [optional] 
**guest_agent_version** | **string** | GAVersion is a version of currently installed guest agent | [optional] 
**hostname** | **string** | Hostname represents FQDN of a guest | [optional] 
**kind** | **string** | Kind is a string value representing the REST resource this object represents. Servers may infer this from the endpoint the client submits requests to. Cannot be updated. In CamelCase. More info: https://git.k8s.io/community/contributors/devel/sig-architecture/api-conventions.md#types-kinds | [optional] 
**os** | [**\Swagger\Client\Model\V1VirtualMachineInstanceGuestOSInfo**](V1VirtualMachineInstanceGuestOSInfo.md) | OS contains the guest operating system information | [optional] 
**timezone** | **string** | Timezone is guest os current timezone | [optional] 
**user_list** | [**\Swagger\Client\Model\V1VirtualMachineInstanceGuestOSUser[]**](V1VirtualMachineInstanceGuestOSUser.md) | UserList is a list of active guest OS users | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


