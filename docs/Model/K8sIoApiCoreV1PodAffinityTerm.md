# K8sIoApiCoreV1PodAffinityTerm

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**label_selector** | [**\Swagger\Client\Model\K8sIoApimachineryPkgApisMetaV1LabelSelector**](K8sIoApimachineryPkgApisMetaV1LabelSelector.md) | A label query over a set of resources, in this case pods. | [optional] 
**namespaces** | **string[]** | namespaces specifies which namespaces the labelSelector applies to (matches against); null or empty list means \&quot;this pod&#39;s namespace\&quot; | [optional] 
**topology_key** | **string** | This pod should be co-located (affinity) or not co-located (anti-affinity) with the pods matching the labelSelector in the specified namespaces, where co-located is defined as running on a node whose value of the label with key topologyKey matches that of any node on which any of the selected pods is running. Empty topologyKey is not allowed. | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


