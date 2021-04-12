# V1Clock

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**timer** | [**\Swagger\Client\Model\V1Timer**](V1Timer.md) | Timer specifies whih timers are attached to the vmi. | [optional] 
**timezone** | **string** | Timezone sets the guest clock to the specified timezone. Zone name follows the TZ environment variable format (e.g. &#39;America/New_York&#39;). | [optional] 
**utc** | [**\Swagger\Client\Model\V1ClockOffsetUTC**](V1ClockOffsetUTC.md) | UTC sets the guest clock to UTC on each boot. If an offset is specified, guest changes to the clock will be kept during reboots and are not reset. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


