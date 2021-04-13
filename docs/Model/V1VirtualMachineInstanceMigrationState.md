# V1VirtualMachineInstanceMigrationState

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**abort_requested** | **bool** | Indicates that the migration has been requested to abort | [optional] 
**abort_status** | **string** | Indicates the final status of the live migration abortion | [optional] 
**completed** | **bool** | Indicates the migration completed | [optional] 
**end_timestamp** | [**\Swagger\Client\Model\K8sIoApimachineryPkgApisMetaV1Time**](K8sIoApimachineryPkgApisMetaV1Time.md) | The time the migration action ended | [optional] 
**failed** | **bool** | Indicates that the migration failed | [optional] 
**migration_uid** | **string** | The VirtualMachineInstanceMigration object associated with this migration | [optional] 
**mode** | **string** | Lets us know if the vmi is currently running pre or post copy migration | [optional] 
**source_node** | **string** | The source node that the VMI originated on | [optional] 
**start_timestamp** | [**\Swagger\Client\Model\K8sIoApimachineryPkgApisMetaV1Time**](K8sIoApimachineryPkgApisMetaV1Time.md) | The time the migration action began | [optional] 
**target_direct_migration_node_ports** | **map[string,int]** | The list of ports opened for live migration on the destination node | [optional] 
**target_node** | **string** | The target node that the VMI is moving to | [optional] 
**target_node_address** | **string** | The address of the target node to use for the migration | [optional] 
**target_node_domain_detected** | **bool** | The Target Node has seen the Domain Start Event | [optional] 
**target_pod** | **string** | The target pod that the VMI is moving to | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


