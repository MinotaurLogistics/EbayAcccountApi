# Deposit

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**amount** | [**\Swagger\EbayAccountClient\Model\Amount**](Amount.md) |  | [optional] 
**due_in** | [**\Swagger\EbayAccountClient\Model\TimeDuration**](TimeDuration.md) |  | [optional] 
**payment_methods** | [**\Swagger\EbayAccountClient\Model\PaymentMethod[]**](PaymentMethod.md) | For deposits (which are applicable to only motor listings), the paymentMethodType must be set to &#39;PAYPAL&#39; and you must also populate the fields in the recipientAccountReference object. Required if your motor vehicles listing requires a deposit. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


