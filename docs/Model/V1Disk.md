# V1Disk

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**boot_order** | **int** | BootOrder is an integer value &gt; 0, used to determine ordering of boot devices. Lower values take precedence. Each disk or interface that has a boot order must have a unique value. Disks without a boot order are not tried if a disk with a boot order exists. | [optional] 
**cache** | **string** | Cache specifies which kvm disk cache mode should be used. Supported values are: CacheNone, CacheWriteThrough. | [optional] 
**cdrom** | [**\Swagger\Client\Model\V1CDRomTarget**](V1CDRomTarget.md) | Attach a volume as a cdrom to the vmi. | [optional] 
**dedicated_io_thread** | **bool** | dedicatedIOThread indicates this disk should have an exclusive IO Thread. Enabling this implies useIOThreads &#x3D; true. Defaults to false. | [optional] 
**disk** | [**\Swagger\Client\Model\V1DiskTarget**](V1DiskTarget.md) | Attach a volume as a disk to the vmi. | [optional] 
**floppy** | [**\Swagger\Client\Model\V1FloppyTarget**](V1FloppyTarget.md) | Attach a volume as a floppy to the vmi. | [optional] 
**io** | **string** | IO specifies which QEMU disk IO mode should be used. Supported values are: native, default, threads. | [optional] 
**lun** | [**\Swagger\Client\Model\V1LunTarget**](V1LunTarget.md) | Attach a volume as a LUN to the vmi. | [optional] 
**name** | **string** | Name is the device name | 
**serial** | **string** | Serial provides the ability to specify a serial number for the disk device. | [optional] 
**tag** | **string** | If specified, disk address and its tag will be provided to the guest via config drive metadata | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


