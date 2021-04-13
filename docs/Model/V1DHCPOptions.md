# V1DHCPOptions

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**boot_file_name** | **string** | If specified will pass option 67 to interface&#39;s DHCP server | [optional] 
**ntp_servers** | **string[]** | If specified will pass the configured NTP server to the VM via DHCP option 042. | [optional] 
**private_options** | [**\Swagger\Client\Model\V1DHCPPrivateOptions[]**](V1DHCPPrivateOptions.md) | If specified will pass extra DHCP options for private use, range: 224-254 | [optional] 
**tftp_server_name** | **string** | If specified will pass option 66 to interface&#39;s DHCP server | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


