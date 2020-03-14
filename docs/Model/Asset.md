# # Asset

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**uuid** | **string** | Record UUID key | [optional] 
**active** | **float** | Record active/deleted flag.   Valid values are [0,1] | [optional] 
**editDate** | **string** | Record last modified timestamp | [optional] [readonly] 
**companyUuid** | **string** | UUID of the Client to which this Asset is attached | [optional] 
**assetCode** | **string** | The unique code printed on this Asset&#39;s attached label (read only) (Read-only) | [optional] 
**assetTypeUuid** | **string** | UUID of an Asset Type which defines the fields that can be stored for this Asset (read only) (Read-only) | [optional] 
**name** | **string** | User-facing description of this asset | [optional] 
**lat** | **float** | Latitude component of the Asset&#39;s location in degrees | [optional] 
**lng** | **float** | Longitude component of the Asset&#39;s location in degrees | [optional] 
**geoTimestamp** | **string** | Timestamp at which the Asset&#39;s location was last updated | [optional] 
**altitude** | **float** | Altitude component of the Asset&#39;s location in metres | [optional] 
**fieldData** | [**\OpenAPI\Client\Model\AssetFieldData[]**](AssetFieldData.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


