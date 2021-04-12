# V1Interface

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**boot_order** | **int** | BootOrder is an integer value &gt; 0, used to determine ordering of boot devices. Lower values take precedence. Each interface or disk that has a boot order must have a unique value. Interfaces without a boot order are not tried. | [optional] 
**bridge** | [**\Swagger\Client\Model\V1InterfaceBridge**](V1InterfaceBridge.md) |  | [optional] 
**dhcp_options** | [**\Swagger\Client\Model\V1DHCPOptions**](V1DHCPOptions.md) | If specified the network interface will pass additional DHCP options to the VMI | [optional] 
**mac_address** | **string** | Interface MAC address. For example: de:ad:00:00:be:af or DE-AD-00-00-BE-AF. | [optional] 
**macvtap** | [**\Swagger\Client\Model\V1InterfaceMacvtap**](V1InterfaceMacvtap.md) |  | [optional] 
**masquerade** | [**\Swagger\Client\Model\V1InterfaceMasquerade**](V1InterfaceMasquerade.md) |  | [optional] 
**model** | **string** | Interface model. One of: e1000, e1000e, ne2k_pci, pcnet, rtl8139, virtio. Defaults to virtio. | [optional] 
**name** | **string** | Logical name of the interface as well as a reference to the associated networks. Must match the Name of a Network. | 
**pci_address** | **string** | If specified, the virtual network interface will be placed on the guests pci address with the specified PCI address. For example: 0000:81:01.10 | [optional] 
**ports** | [**\Swagger\Client\Model\V1Port[]**](V1Port.md) | List of ports to be forwarded to the virtual machine. | [optional] 
**slirp** | [**\Swagger\Client\Model\V1InterfaceSlirp**](V1InterfaceSlirp.md) |  | [optional] 
**sriov** | [**\Swagger\Client\Model\V1InterfaceSRIOV**](V1InterfaceSRIOV.md) |  | [optional] 
**tag** | **string** | If specified, the virtual network interface address and its tag will be provided to the guest via config drive | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


