# CategoryType

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**default** | **bool** | Specifies the default policy for a marketplaceId and categoryTypes.name pair. Sellers can create multiple policies for any marketplaceId and categoryTypes.name combination. For example, you can create multiple fulfillment policies for one marketplace, where they all target the same category type name. However, only one policy can be the default for any marketplaceId and name combination, and eBay designates the first policy created for a combination as the default. If set to true, this policy is the default policy for the associated categoryTypes.name and marketplaceId pair. Note: eBay considers the status of this field only when you create listings through the Web flow. If you create listings using the APIs, you must specifically set the policies you want applied to a listing in the payload of the call you use to create the listing. If you use the Web flow to create item listings, eBay uses the default policy for the marketplace and category type specified, unless you override the default. For more on default policies, see Changing the default policy for a category type. | [optional] 
**name** | **string** | The category type to which the policy applies (motor vehicles or non-motor vehicles). Restrictions: The MOTORS_VEHICLES category type is not valid for return policies. eBay flows do not support the return of motor vehicles. Only the ALL_EXCLUDING_MOTORS_VEHICLES category type is supported for sellers who opt-in to the managed payments program. Managed payments does not currently support the sale of motor vehicles. For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/api-docs/sell/account/types/api:CategoryTypeEnum&#39;&gt;eBay API documentation&lt;/a&gt; | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


