# Shopify Package
Shopify is platform for ecommerce.
* Domain: shopify.com
* Credentials: shopName, clientId, clientSecret, code

## How to get credentials: 
0. Sign up in Shopify as [developer](https://developers.shopify.com/).
1. Navigate to [App section](https://app.shopify.com/services/partners/api_clients).
2. Click "Create a new app", fill all required fields.
3. Your app will appear in ["App" section](https://app.shopify.com/services/partners/api_clients). Open it.
4. In our package we using OAuth authentication, more details about how it work in Shopify you can read [HERE](https://help.shopify.com/api/guides/authentication/oauth).
5. To get access token, which used in all blocks of package as required field, first of all you need redirect the shop owner to this URL:
   * https://{shop}.myshopify.com/admin/oauth/authorize?client_id={api_key}&scope={scopes}&redirect_uri={redirect_uri}&state={nonce}&grant_options[]={option}
   * About link syntax you can read [HERE](https://help.shopify.com/api/guides/authentication/oauth#asking-for-permission)
6. In redirect link, one of parameter will be "code", which we will use next.
7. Finally to get access token use "getAccessToken" block in this package.
9. That's all. Have fun!

## Shopify.getAccessToken
Get access token from code provided in the redirect described.

| Field       | Type       | Description
|-------------|------------|----------
| clientId    | credentials| The API Key for the app.
| clientSecret| credentials| The Shared Secret for the app (Credential sets).
| code        | credentials| The authorization code provided in the redirect described.
| shopName    | String     | Domain of your shop.

## Shopify.getAbandonedCheckoutsCount
Get a count of checkouts.

| Field       | Type       | Description
|-------------|------------|----------
| shopName    | String     | Domain of your shop.
| accessToken | String     | API access token that can be used to access the shop’s data as long as the client is installed.
| sinceId     | Number     | Restrict results to after the specified ID.
| createdAtMin| String     | Show checkouts created after date (format: 2014-04-25T16:15:47-04:00).
| createdAtMax| String     | Show checkouts created before date (format: 2014-04-25T16:15:47-04:00).
| updatedAtMin| String     | Show checkouts last updated after date (format: 2014-04-25T16:15:47-04:00).
| updatedAtMax| String     | Show checkouts last updated before date (format: 2014-04-25T16:15:47-04:00).
| status      | String     | open - All open abandoned checkouts (default), closed - Show only closed abandoned checkouts.

## Shopify.getAbandonedCheckouts
List all abandoned checkouts.

| Field       | Type       | Description
|-------------|------------|----------
| shopName    | String     | Domain of your shop.
| accessToken | String     | API access token that can be used to access the shop’s data as long as the client is installed.
| limit       | Number     | Amount of results (default: 50) (maximum: 250).
| page        | Number     | Page to show (default: 1).
| sinceId     | Number     | Restrict results to after the specified ID.
| createdAtMin| String     | Show checkouts created after date (format: 2014-04-25T16:15:47-04:00).
| createdAtMax| String     | Show checkouts created before date (format: 2014-04-25T16:15:47-04:00).
| updatedAtMin| String     | Show checkouts last updated after date (format: 2014-04-25T16:15:47-04:00).
| updatedAtMax| String     | Show checkouts last updated before date (format: 2014-04-25T16:15:47-04:00).
| status      | String     | open - All open abandoned checkouts (default), closed - Show only closed abandoned checkouts.

## Shopify.createCheckout
Create a new Checkout.

| Field             | Type       | Description
|-------------------|------------|----------
| shopName          | String     | Domain of your shop.
| accessToken       | String     | API access token that can be used to access the shop’s data as long as the client is installed.
| email             | String     | The customer's email address.
| lineItemsVariantId| Number     | The id of the product variant.
| lineItemsQuantity | Number     | The number of products that were purchased.

## Shopify.getSingleCheckout
Get a single Checkout.

| Field      | Type       | Description
|------------|------------|----------
| shopName   | String     | Domain of your shop.
| accessToken| String     | API access token that can be used to access the shop’s data as long as the client is installed.
| token      | String     | Unique identifier for a particular checkout.

## Shopify.updateCheckout
Modify an existing Checkout.

| Field                      | Type       | Description
|----------------------------|------------|----------
| shopName                   | String     | Domain of your shop.
| accessToken                | String     | API access token that can be used to access the shop’s data as long as the client is installed.
| token                      | String     | Unique identifier for a particular checkout.
| email                      | String     | The customer's email address.
| shippingAddressFirstName   | String     | The first name of the person associated with the payment method.
| shippingAddressLastName    | String     | The last name of the person associated with the payment method.
| shippingAddressAddress1    | String     | The street address of the shipping address.
| shippingAddressCity        | String     | The city of the shipping address.
| shippingAddressProvinceCode| String     | The two-letter abbreviation of the state or province of the shipping address.
| shippingAddressCountryCode | String     | The two-letter code for the country of the shipping address.
| shippingAddressPhone       | String     | The phone number at the shipping address.
| shippingAddressZip         | String     | The zip or postal code of the shipping address.
| reservationTime            | Number     | The reservation time in seconds for the products in the line items. This can be set up to 5 minutes, or 1 hour depending on the authentication type used.

## Shopify.getShippingRates
Get a list of available shipping rates for the specified checkout. Implementers need to poll this API until rates become available. Each shipping rate will also contain the checkout's subtotal_price, total_tax and total_price in the event that this shipping rate is selected. This can be used to update the UI without performing a road-trip to API.

| Field      | Type       | Description
|------------|------------|----------
| shopName   | String     | Domain of your shop.
| accessToken| String     | API access token that can be used to access the shop’s data as long as the client is installed.
| token      | String     | Unique identifier for a particular checkout.

## Shopify.getSingleCheckoutPayments
Retreive a list of Payments on a particular Checkout.

| Field      | Type       | Description
|------------|------------|----------
| shopName   | String     | Domain of your shop.
| accessToken| String     | API access token that can be used to access the shop’s data as long as the client is installed.
| token      | String     | Unique identifier for a particular checkout.

## Shopify.createPayment
Create a new payment.

| Field                       | Type       | Description
|-----------------------------|------------|----------
| shopName                    | String     | Domain of your shop.
| accessToken                 | String     | API access token that can be used to access the shop’s data as long as the client is installed.
| token                       | String     | Unique identifier for a particular checkout.
| requestDetailsIpAddress     | String     | The IP address of the customer.
| requestDetailsAcceptLanguage| String     | A string identifying the customer's preferred language, formatted according to the Accept-Language header as defined in RFC2616 Section 14.4.
| requestDetailsUserAgent     | String     | A string identifying the customer's user agent.
| amount                      | String     | Amount of payment.
| sessionId                   | String     | Represents the id that was returned by the card vault.

## Shopify.getSinglePayment
Get a single Checkout.

| Field      | Type       | Description
|------------|------------|----------
| shopName   | String     | Domain of your shop.
| accessToken| String     | API access token that can be used to access the shop’s data as long as the client is installed.
| token      | String     | Unique identifier for a particular checkout.

## Shopify.countCheckoutPayments
Count the number of Payments attempted on a Checkout.

| Field      | Type       | Description
|------------|------------|----------
| shopName   | String     | Domain of your shop.
| accessToken| String     | API access token that can be used to access the shop’s data as long as the client is installed.
| token      | String     | Unique identifier for a particular checkout.

## Shopify.storeCreditCardInVault
Create a payment session.

| Field                      | Type       | Description
|----------------------------|------------|----------
| shopName                   | String     | Domain of your shop.
| accessToken                | String     | API access token that can be used to access the shop’s data as long as the client is installed.
| creditCardNumber           | String     | Credit card number.
| creditCardFirstName        | String     | Credit card owner first name.
| creditCardLastName         | String     | Credit card owner last name.
| creditCardMonth            | String     | Credit card expiry date month.
| creditCardYear             | String     | Credit card expiry date year.
| creditCardVerificationValue| String     | Credit card verification value.

## Shopify.addProductToCollection
Add a product to a collection.

| Field       | Type       | Description
|-------------|------------|----------
| shopName    | String     | Domain of your shop.
| accessToken | String     | API access token that can be used to access the shop’s data as long as the client is installed.
| productId   | Number     | The unique numeric identifier for the product.
| collectionId| Number     | The id of the custom collection containing the product.

## Shopify.removeProductFromCollection
Remove a product from a collection.

| Field      | Type       | Description
|------------|------------|----------
| shopName   | String     | Domain of your shop.
| accessToken| String     | API access token that can be used to access the shop’s data as long as the client is installed.
| collectId  | Number     | A unique numeric identifier for the collect.

## Shopify.getCollects
List all collects or only those for specific products or collections.

| Field       | Type       | Description
|-------------|------------|----------
| shopName    | String     | Domain of your shop.
| accessToken | String     | API access token that can be used to access the shop’s data as long as the client is installed.
| productId   | Number     | The unique numeric identifier for the product.
| collectionId| Number     | The id of the custom collection containing the product.
| page        | Number     | Page to show (default: 1).
| limit       | Number     | Amount of results (default: 50) (maximum: 250).
| fields      | String     | Comma-separated list of fields to include in the response.

## Shopify.getCollectsCount
Get a count of all collects or only those for specific products or collections.

| Field       | Type       | Description
|-------------|------------|----------
| shopName    | String     | Domain of your shop.
| accessToken | String     | API access token that can be used to access the shop’s data as long as the client is installed.
| productId   | Number     | The unique numeric identifier for the product.
| collectionId| Number     | The id of the custom collection containing the product.

## Shopify.getSingleCollect
Get the collect with a certain id, or for a given product AND collection.

| Field       | Type       | Description
|-------------|------------|----------
| shopName    | String     | Domain of your shop.
| accessToken | String     | API access token that can be used to access the shop’s data as long as the client is installed.
| collectionId| Number     | The id of the custom collection containing the product.
| fields      | String     | Comma-separated list of fields to include in the response.

## Shopify.getCustomCollections
Get a list of all custom collections that contain a given product.

| Field          | Type       | Description
|----------------|------------|----------
| shopName       | String     | Domain of your shop.
| accessToken    | String     | API access token that can be used to access the shop’s data as long as the client is installed.
| limit          | Number     | Amount of results (default: 50) (maximum: 250).
| page           | Number     | Page to show (default: 1).
| ids            | String     | A comma-separated list of collection ids.
| sinceId        | Number     | Restrict results to after the specified ID.
| title          | String     | Show custom collections with given title.
| productId      | Number     | Show custom collections that includes given product.
| handle         | String     | Filter by custom collection handle.
| updatedAtMin   | String     | Show custom collections last updated after date (format: 2014-04-25T16:15:47-04:00).
| updatedAtMax   | String     | Show custom collections last updated before date (format: 2014-04-25T16:15:47-04:00).
| publishedAtMin | String     | Show custom collections published after date (format: 2014-04-25T16:15:47-04:00).
| publishedAtMax | String     | Show custom collections published before date (format: 2014-04-25T16:15:47-04:00).
| publishedStatus| String     | published - Show only published custom collections, unpublished - Show only unpublished custom collections, any - Show all custom collections (default).
| fields         | String     | comma-separated list of fields to include in the response.

## Shopify.getCustomCollectionsCount
Get a count of all custom collections that contain a given product.

| Field          | Type       | Description
|----------------|------------|----------
| shopName       | String     | Domain of your shop.
| accessToken    | String     | API access token that can be used to access the shop’s data as long as the client is installed.
| title          | String     | Count custom collections with given title.
| productId      | Number     | Count custom collections that includes given product.
| updatedAtMin   | String     | Count custom collections last updated after date (format: 2014-04-25T16:15:47-04:00).
| updatedAtMax   | String     | Count custom collections last updated before date (format: 2014-04-25T16:15:47-04:00).
| publishedAtMin | String     | Show custom collections published after date (format: 2014-04-25T16:15:47-04:00).
| publishedAtMax | String     | Show custom collections published before date (format: 2014-04-25T16:15:47-04:00).
| publishedStatus| String     | published - Show only published custom collections, unpublished - Show only unpublished custom collections, any - Show all custom collections (default).

## Shopify.getSingleCustomCollection
Get a single custom collection.

| Field       | Type       | Description
|-------------|------------|----------
| shopName    | String     | Domain of your shop.
| accessToken | String     | API access token that can be used to access the shop’s data as long as the client is installed.
| collectionId| Number     | The id of the custom collection containing the product.
| fields      | String     | Comma-separated list of fields to include in the response.

## Shopify.createCustomCollection
Create a new custom collection.

| Field            | Type       | Description
|------------------|------------|----------
| shopName         | String     | Domain of your shop.
| accessToken      | String     | API access token that can be used to access the shop’s data as long as the client is installed.
| title            | String     | Collections title.
| imageSrc         | File       | Image associated with the custom collection.
| collectsProductId| Number     | The unique numeric identifier for the product.
| published        | Boolean    | Is published collection.

## Shopify.updateCustomCollection
Update an existing custom collection.

| Field            | Type       | Description
|------------------|------------|----------
| shopName         | String     | Domain of your shop.
| accessToken      | String     | API access token that can be used to access the shop’s data as long as the client is installed.
| collectionId     | Number     | The id of the custom collection containing the product.
| handle           | String     | A human-friendly unique string for the custom collection automatically generated from its title. This is used in shop themes by the Liquid templating language to refer to the custom collection. Limit of 255 characters.
| title            | String     | Collections title.
| imageSrc         | File       | Image associated with the custom collection.
| collectsProductId| Number     | The unique numeric identifier for the product.
| published        | Boolean    | Is published collections.

## Shopify.deleteCustomCollection
Remove custom collection.

| Field       | Type       | Description
|-------------|------------|----------
| shopName    | String     | Domain of your shop.
| accessToken | String     | API access token that can be used to access the shop’s data as long as the client is installed.
| collectionId| Number     | The id of the custom collection containing the product.

## Shopify.getCustomers
Retrieve all customers of a shop.

| Field       | Type       | Description
|-------------|------------|----------
| shopName    | String     | Domain of your shop.
| accessToken | String     | API access token that can be used to access the shop’s data as long as the client is installed.
| ids         | String     | A comma-separated list of customer ids.
| sinceId     | Number     | Restrict results to after the specified ID.
| createdAtMin| String     | Show customers created after date (format: 2014-04-25T16:15:47-04:00).
| createdAtMax| String     | Show customers created before date (format: 2014-04-25T16:15:47-04:00).
| updatedAtMin| String     | Show customers last updated after date (format: 2014-04-25T16:15:47-04:00).
| updatedAtMax| String     | Show customers last updated before date (format: 2014-04-25T16:15:47-04:00).
| limit       | Number     | Amount of results (default: 50) (maximum: 250).
| page        | Number     | Page to show (default: 1).
| fields      | String     | comma-separated list of fields to include in the response.

## Shopify.searchCustomers
Search customers.

| Field      | Type       | Description
|------------|------------|----------
| shopName   | String     | Domain of your shop.
| accessToken| String     | API access token that can be used to access the shop’s data as long as the client is installed.
| order      | String     | Field and direction to order results by (default: last_order_date DESC).
| query      | String     | Text to search customers.
| page       | Number     | Page to show (default: 1).
| limit      | Number     | Amount of results (default: 50) (maximum: 250).
| fields     | String     | comma-separated list of fields to include in the response.

## Shopify.getSingleCustomer
Get a single customer.

| Field      | Type       | Description
|------------|------------|----------
| shopName   | String     | Domain of your shop.
| accessToken| String     | API access token that can be used to access the shop’s data as long as the client is installed.
| customerId | String     | The id of the customer.
| fields     | String     | Comma-separated list of fields to include in the response.

## Shopify.createCustomer
Create a new customer.

| Field           | Type       | Description
|-----------------|------------|----------
| shopName        | String     | Domain of your shop.
| accessToken     | String     | API access token that can be used to access the shop’s data as long as the client is installed.
| firstName       | String     | The customer's first name.
| lastName        | String     | The customer's last name.
| email           | String     | The email address of the customer.
| phone           | String     | The phone number for the customer. Valid formats can be of different types, for example: 6135551212, +16135551212, 555-1212, (613)555-1212, +1 613-555-1212.
| verifiedEmail   | Boolean    | States whether or not the email address has been verified.
| sendEmailInvite | Boolean    | If true, Invite E-mail will be send.
| sendEmailWelcome| Boolean    | If true, Welcome E-mail will be send.

## Shopify.updateCustomer
Update a customer.

| Field      | Type       | Description
|------------|------------|----------
| shopName   | String     | Domain of your shop.
| accessToken| String     | API access token that can be used to access the shop’s data as long as the client is installed.
| customerId | String     | The id of the customer.
| firstName  | String     | The customer's first name.
| lastName   | String     | The customer's last name.
| email      | String     | The email address of the customer.
| tags       | String     | Tags are additional short descriptors formatted as a string of comma-separated values. For example, if an article has three tags: tag1, tag2, tag3.
| note       | String     | A note about the customer.

## Shopify.createAccountActivationURL
This endpoint allows you to generate and retrieve an account activation URL for a customer who is not yet enabled. This is useful if you've imported a large number of customers and want to send them activation emails all at once (using this approach, you'll need to generate and send the activation emails yourself). The account activation URL generated by this endpoint is one time use and will expire after 7 days. If you make a new POST request to this endpoint, a new URL will be generated which will be again valid for 7 days, but the previous URL will no longer be valid.

| Field      | Type       | Description
|------------|------------|----------
| shopName   | String     | Domain of your shop.
| accessToken| String     | API access token that can be used to access the shop’s data as long as the client is installed.
| customerId | String     | The id of the customer.

## Shopify.deleteCustomer
Delete a customer. A customer can't be deleted if they have existing orders.

| Field      | Type       | Description
|------------|------------|----------
| shopName   | String     | Domain of your shop.
| accessToken| String     | API access token that can be used to access the shop’s data as long as the client is installed.
| customerId | String     | The id of the customer.

## Shopify.getCustomersCount
Get a count of all customers.

| Field      | Type       | Description
|------------|------------|----------
| shopName   | String     | Domain of your shop.
| accessToken| String     | API access token that can be used to access the shop’s data as long as the client is installed.

## Shopify.getCustomerOrders
Get all orders belonging to this customer.

| Field      | Type       | Description
|------------|------------|----------
| shopName   | credentials| Domain of your shop.
| accessToken| String     | API access token that can be used to access the shop’s data as long as the client is installed.
| customerId | String     | The id of the customer.

## Shopify.getEvents
Get the events from a particular product.

| Field       | Type       | Description
|-------------|------------|----------
| shopName    | String     | Domain of your shop.
| accessToken | String     | API access token that can be used to access the shop’s data as long as the client is installed.
| objectType  | String     | Name type of object of event (products, orders).
| objectTypeId| String     | Type identifier of object of event.
| limit       | Number     | Amount of results (default: 50) (maximum: 250).
| page        | Number     | Page to show (default: 1).
| sinceId     | Number     | Restrict results to after the specified ID.
| createdAtMin| String     | Show events created at or after date and time (format: 2014-04-25T16:15:47-04:00).
| createdAtMax| String     | Show events created at or before date and time (format: 2014-04-25T16:15:47-04:00).
| filter      | String     | Only show events specified in filter.
| verb        | String     | Only show events of a certain kind.
| fields      | String     | comma-separated list of fields to include in the response.

## Shopify.getSingleEvent
The unique numeric identifier for the event.

| Field      | Type       | Description
|------------|------------|----------
| shopName   | String     | Domain of your shop.
| accessToken| String     | API access token that can be used to access the shop’s data as long as the client is installed.
| eventId    | Number     | The unique numeric identifier for the event.
| fields     | String     | Comma-separated list of fields to include in the response.

## Shopify.getEventByType
.

| Field       | Type       | Description
|-------------|------------|----------
| shopName    | String     | Domain of your shop.
| accessToken | String     | API access token that can be used to access the shop’s data as long as the client is installed.
| objectType  | String     | Name type of object of event (products, orders).
| objectTypeId| String     | The unique numeric identifier of the object.
| limit       | Number     | Amount of results (default: 50) (maximum: 250).
| page        | Number     | Page to show (default: 1).
| sinceId     | Number     | Restrict results to after the specified ID.
| createdAtMin| String     | Show events created at or after date and time (format: 2014-04-25T16:15:47-04:00).
| createdAtMax| String     | Show events created at or before date and time (format: 2014-04-25T16:15:47-04:00).
| filter      | String     | Only show events specified in filter.
| verb        | String     | Only show events of a certain kind.
| fields      | String     | comma-separated list of fields to include in the response.

## Shopify.getEventsCount
.

| Field       | Type       | Description
|-------------|------------|----------
| shopName    | String     | Domain of your shop.
| accessToken | String     | API access token that can be used to access the shop’s data as long as the client is installed.
| createdAtMin| String     | Count events created at or after date and time (format: 2014-04-25T16:15:47-04:00).
| createdAtMax| String     | Count events created at or before date and time (format: 2014-04-25T16:15:47-04:00).

## Shopify.getProducts
Get a list of products.

| Field          | Type       | Description
|----------------|------------|----------
| shopName       | String     | Domain of your shop.
| accessToken    | String     | API access token that can be used to access the shop’s data as long as the client is installed.
| ids            | String     | A comma-separated list of product ids.
| limit          | Number     | Amount of results (default: 50) (maximum: 250).
| page           | Number     | Page to show (default: 1).
| sinceId        | Number     | Restrict results to after the specified ID.
| title          | String     | Filter by product title.
| vendor         | String     | Filter by product vendor.
| handle         | String     | Filter by product handle.
| productType    | String     | Filter by product type.
| collectionId   | Number     | Filter by collection id.
| createdAtMin   | String     | Show products created after date (format: 2014-04-25T16:15:47-04:00).
| createdAtMax   | String     | Show products created before date (format: 2014-04-25T16:15:47-04:00).
| updatedAtMin   | String     | Show products last updated after date (format: 2014-04-25T16:15:47-04:00).
| updatedAtMax   | String     | Show products last updated before date (format: 2014-04-25T16:15:47-04:00).
| publishedAtMin | String     | Show products published after date (format: 2014-04-25T16:15:47-04:00).
| publishedAtMax | String     | Show products published before date (format: 2014-04-25T16:15:47-04:00).
| publishedStatus| String     | published - Show only published products, unpublished - Show only unpublished products, any - Show all products (default).
| fields         | String     | comma-separated list of fields to include in the response.

## Shopify.getProductsCount
Get a count of all products of a given collection.

| Field          | Type       | Description
|----------------|------------|----------
| shopName       | String     | Domain of your shop.
| accessToken    | String     | API access token that can be used to access the shop’s data as long as the client is installed.
| vendor         | String     | Filter by product vendor.
| productType    | String     | Filter by product type.
| collectionId   | Number     | Filter by collection id.
| createdAtMin   | String     | Show products created after date (format: 2014-04-25T16:15:47-04:00).
| createdAtMax   | String     | Show products created before date (format: 2014-04-25T16:15:47-04:00).
| updatedAtMin   | String     | Show products last updated after date (format: 2014-04-25T16:15:47-04:00).
| updatedAtMax   | String     | Show products last updated before date (format: 2014-04-25T16:15:47-04:00).
| publishedAtMin | String     | Show products published after date (format: 2014-04-25T16:15:47-04:00).
| publishedAtMax | String     | Show products published before date (format: 2014-04-25T16:15:47-04:00).
| publishedStatus| String     | published - Show only published products, unpublished - Show only unpublished products, any - Show all products (default).

## Shopify.getSingleProduct
Get a single product.

| Field      | Type       | Description
|------------|------------|----------
| shopName   | String     | Domain of your shop.
| accessToken| String     | API access token that can be used to access the shop’s data as long as the client is installed.
| productId  | Number     | The unique numeric identifier for the product.
| fields     | String     | Comma-separated list of fields to include in the response.

## Shopify.createProduct
Create a new product.

| Field      | Type       | Description
|------------|------------|----------
| shopName   | String     | Domain of your shop.
| accessToken| String     | API access token that can be used to access the shop’s data as long as the client is installed.
| title      | String     | The name of the product. In a shop's catalog, clicking on a product's title takes you to that product's page. On a product's page, the product's title typically appears in a large font.
| bodyHtml   | String     | The description of the product, complete with HTML formatting.
| productType| String     | A categorization that a product can be tagged with, commonly used for filtering and searching.
| imageSrc   | File       | Image associated with the product.
| vendor     | String     | The name of the vendor of the product.
| variants   | Array      | Array of JSON objects. List of variant objects, each one representing a slightly different version of the product. For example, if a product comes in different sizes and colors, each size and color permutation (such as 'small black', 'medium black', 'large blue'), would be a variant.
| tags       | String     | A categorization that a product can be tagged with, commonly used for filtering and searching. Each comma-separated tag has a character limit of 255.
| published  | Boolean    | Is published product.

#### variants format
```json
[
    {
        "option1": "First",
        "price": "10.00",
        "sku": 123
    },
    {
        "option1": "Second",
        "price": "20.00",
        "sku": "123"
    }
]
```

## Shopify.updateProduct
Update a product and associated variants and images.

| Field      | Type       | Description
|------------|------------|----------
| shopName   | String     | Domain of your shop.
| accessToken| String     | API access token that can be used to access the shop’s data as long as the client is installed.
| productId  | Number     | The unique numeric identifier for the product.
| title      | String     | The name of the product. In a shop's catalog, clicking on a product's title takes you to that product's page. On a product's page, the product's title typically appears in a large font.
| bodyHtml   | String     | The description of the product, complete with HTML formatting.
| productType| String     | A categorization that a product can be tagged with, commonly used for filtering and searching.
| vendor     | String     | The name of the vendor of the product.
| variants   | Array      | Array of JSON objects. List of variant objects, each one representing a slightly different version of the product. For example, if a product comes in different sizes and colors, each size and color permutation (such as 'small black', 'medium black', 'large blue'), would be a variant..
| tags       | String     | A categorization that a product can be tagged with, commonly used for filtering and searching. Each comma-separated tag has a character limit of 255.
| published  | Boolean    | Is published product.

#### variants format
```json
[
    {
        "option1": "First",
        "price": "10.00",
        "sku": 123
    },
    {
        "option1": "Second",
        "price": "20.00",
        "sku": "123"
    }
]
```

## Shopify.deleteProduct
Remove a product from the shop.

| Field      | Type       | Description
|------------|------------|----------
| shopName   | String     | Domain of your shop.
| accessToken| String     | API access token that can be used to access the shop’s data as long as the client is installed.
| productId  | Number     | The unique numeric identifier for the product.

## Shopify.getProductImages
Get all product images.

| Field      | Type       | Description
|------------|------------|----------
| shopName   | String     | Domain of your shop.
| accessToken| String     | API access token that can be used to access the shop’s data as long as the client is installed.
| productId  | Number     | The unique numeric identifier for the product.
| sinceId    | Number     | Restrict results to after the specified ID.
| fields     | String     | comma-separated list of fields to include in the response.

## Shopify.getProductImagesCount
Get a count of all product images.

| Field         | Type       | Description
|---------------|------------|----------
| shopName      | String     | Domain of your shop.
| accessToken   | String     | API access token that can be used to access the shop’s data as long as the client is installed.
| productId     | Number     | The unique numeric identifier for the product.
| sinceId       | Number     | Restrict results to after the specified ID.
| createdAtMin  | String     | Count articles created after date (format: 2014-04-25T16:15:47-04:00).
| createdAtMax  | String     | Count articles created before date (format: 2014-04-25T16:15:47-04:00).
| updatedAtMin  | String     | Count articles last updated after date (format: 2014-04-25T16:15:47-04:00).
| updatedAtMax  | String     | Count articles last updated before date (format: 2014-04-25T16:15:47-04:00).
| publishedAtMin| String     | Count articles published after date (format: 2014-04-25T16:15:47-04:00).
| publishedAtMax| String     | Count articles published before date (format: 2014-04-25T16:15:47-04:00).

## Shopify.getSingleProductImage
Get a single product image by id.

| Field      | Type       | Description
|------------|------------|----------
| shopName   | String     | Domain of your shop.
| accessToken| String     | API access token that can be used to access the shop’s data as long as the client is installed.
| productId  | Number     | The unique numeric identifier for the product.
| imageId    | Number     | A unique numeric identifier for the product image.
| fields     | String     | Comma-separated list of fields to include in the response.

## Shopify.createProductImage
Create a new product image.

| Field              | Type       | Description
|--------------------|------------|----------
| shopName           | String     | Domain of your shop.
| accessToken        | String     | API access token that can be used to access the shop’s data as long as the client is installed.
| productId          | Number     | The unique numeric identifier for the product.
| imageSrc           | File       | Specifies the location of the product image.
| filename           | String     | Custom image file name.
| position           | String     | The order of the product image in the list. The first product image is at position 1 and is the 'main' image for the product.
| metafieldsKey      | String     | Identifier for the metafield (maximum of 30 characters).
| metafieldsValue    | String     | Information to be stored as metadata.
| metafieldsValueType| String     | States whether the information in the value is stored as a 'string' or 'integer'.
| metafieldsNamespace| String     | Container for a set of metadata. Namespaces help distinguish between metadata you created against metadata created by another individual with a similar namespace (maximum of 20 characters).
| variantIds         | String     | comma-separated list of variant ids associated with the image.

## Shopify.updateProductImage
Modify an existing product image.

| Field              | Type       | Description
|--------------------|------------|----------
| shopName           | String     | Domain of your shop.
| accessToken        | String     | API access token that can be used to access the shop’s data as long as the client is installed.
| productId          | Number     | The unique numeric identifier for the product.
| imageId            | Number     | A unique numeric identifier for the product image.
| position           | String     | The order of the product image in the list. The first product image is at position 1 and is the 'main' image for the product.
| metafieldsKey      | String     | Identifier for the metafield (maximum of 30 characters).
| metafieldsValue    | String     | Information to be stored as metadata.
| metafieldsValueType| String     | States whether the information in the value is stored as a 'string' or 'integer'.
| metafieldsNamespace| String     | Container for a set of metadata. Namespaces help distinguish between metadata you created against metadata created by another individual with a similar namespace (maximum of 20 characters).
| variantIds         | String     | comma-separated list of variant ids associated with the image.

## Shopify.deleteProductImage
Delete a product image.

| Field      | Type       | Description
|------------|------------|----------
| shopName   | String     | Domain of your shop.
| accessToken| String     | API access token that can be used to access the shop’s data as long as the client is installed.
| productId  | Number     | The unique numeric identifier for the product.
| imageId    | Number     | A unique numeric identifier for the product image.

## Shopify.getProductVariants
Get a list of product variants.

| Field      | Type       | Description
|------------|------------|----------
| shopName   | String     | Domain of your shop.
| accessToken| String     | API access token that can be used to access the shop’s data as long as the client is installed.
| productId  | Number     | The unique numeric identifier for the product.
| limit      | Number     | Amount of results (default: 50) (maximum: 250).
| page       | Number     | Page to show (default: 1).
| sinceId    | Number     | Restrict results to after the specified ID.
| fields     | String     | comma-separated list of fields to include in the response.

## Shopify.getProductVariantsCount
Get a count of product variants.

| Field      | Type       | Description
|------------|------------|----------
| shopName   | String     | Domain of your shop.
| accessToken| String     | API access token that can be used to access the shop’s data as long as the client is installed.
| productId  | Number     | The unique numeric identifier for the product.

## Shopify.getSingleProductVariant
Get a single product variant by id.

| Field      | Type       | Description
|------------|------------|----------
| shopName   | String     | Domain of your shop.
| accessToken| String     | API access token that can be used to access the shop’s data as long as the client is installed.
| variantId  | Number     | The unique numeric identifier for the product variant.

## Shopify.createProductVariant
Create a new product variant.

| Field      | Type       | Description
|------------|------------|----------
| shopName   | credentials| Domain of your shop.
| accessToken| String     | API access token that can be used to access the shop’s data as long as the client is installed.
| productId  | Number     | The unique numeric identifier for the product.
| variant    | JSON       | JSON Object with pair key - value for variant.

#### variant format
```json
{
    "option1": "Yellow",
    "price": "1.00"
}
```

## Shopify.updateProductVariant
Update an existing product variant.

| Field      | Type       | Description
|------------|------------|----------
| shopName   | String     | Domain of your shop.
| accessToken| String     | API access token that can be used to access the shop’s data as long as the client is installed.
| variantId  | Number     | The unique numeric identifier for the product variant.
| variant    | JSON       | JSON Object with pair key - value for variant, format { "option1": "Yellow", "price": "1.00" }.

#### variant format
```json
{
    "option1": "Yellow",
    "price": "1.00"
}
```

## Shopify.deleteProductVariant
Delete a product variant.

| Field      | Type       | Description
|------------|------------|----------
| shopName   | String     | Domain of your shop.
| accessToken| String     | API access token that can be used to access the shop’s data as long as the client is installed.
| productId  | Number     | The unique numeric identifier for the product.
| variantId  | Number     | The unique numeric identifier for the product variant.

## Shopify.getOrderRefunds
Retrieve a list of Refunds for an Order.

| Field      | Type       | Description
|------------|------------|----------
| shopName   | String     | Domain of your shop.
| accessToken| String     | API access token that can be used to access the shop’s data as long as the client is installed.
| orderId    | Number     | The unique numeric identifier for the refund. This one is used for API purposes.
| fields     | String     | comma-separated list of fields to include in the response.

## Shopify.getOrderSingleRefund
Retrieve a specific refund.

| Field      | Type       | Description
|------------|------------|----------
| shopName   | String     | Domain of your shop.
| accessToken| String     | API access token that can be used to access the shop’s data as long as the client is installed.
| orderId    | Number     | The unique numeric identifier for the refund. This one is used for API purposes.
| refundId   | Number     | The unique numeric identifier for the refund. This one is used for API purposes.
| fields     | String     | comma-separated list of fields to include in the response.

## Shopify.calculateRefund
Calculate refund transactions based on line items and shipping. The returned response can be used to create a Refund. Note that returned transactions are of the kind "suggested_refund", which must to be changed to "refund" in order for them to be accepted.

| Field             | Type       | Description
|-------------------|------------|----------
| shopName          | String     | Domain of your shop.
| accessToken       | String     | API access token that can be used to access the shop’s data as long as the client is installed.
| orderId           | Number     | The unique numeric identifier for the refund. This one is used for API purposes.
| shippingFullRefund| Boolean    | Boolean, set to true to refund all remaining shipping.
| shippingAmount    | String     | Set specific amount of shipping to refund. Takes precedence over full_refund.
| refundLineItems   | Array      | Array of JSON objects, of line item IDs and quantities to refund.

#### refundLineItems format
```json
[
    {
        "line_item_id": 518995019,
        "quantity": 1
    },
    {
        "line_item_id": 518995020,
        "quantity": 1
    }
]
```

## Shopify.createOrderRefund
Create a Refund for an existing Order. It is highly suggested that you use the calculate endpoint to produce the transactions to submit.

| Field             | Type       | Description
|-------------------|------------|----------
| shopName          | String     | Domain of your shop.
| accessToken       | String     | API access token that can be used to access the shop’s data as long as the client is installed.
| orderId           | Number     | The unique numeric identifier for the refund. This one is used for API purposes.
| restock           | Boolean    | Boolean, whether or not to add the line items back to the store inventory.
| notify            | Boolean    | Boolean, set to true to send a refund notification to the customer.
| note              | String     | An optional comment attached to a refund.
| discrepancyReason | String     | An optional comment, used if there is a discrepancy between calculated and actual refund amounts (one of: restock, damage, customer, other).
| shippingFullRefund| Boolean    | Boolean, set to true to refund all remaining shipping.
| shippingAmount    | String     | Set specific amount of shipping to refund. Takes precedence over full_refund.
| refundLineItems   | Array      | Array of JSON objects. Array of line item IDs and quantities to refund.
| transactions      | Array      | Array of JSON objects. Array of transactions to process as refunds.

#### refundLineItems format
```json
[
    {
        "line_item_id": 518995019,
        "quantity": 1
    },
    {
        "line_item_id": 518995020,
        "quantity": 1
    }
]
```

#### transactions format
```json
[
    {
        "parent_id": 801038806,
        "amount": 199.65,
        "kind": "refund",
        "gateway": "bogus"
    }
]
```

## Shopify.getSingleShop
Get the configuration of the shop account.

| Field      | Type       | Description
|------------|------------|----------
| shopName   | String     | Domain of your shop.
| accessToken| String     | API access token that can be used to access the shop’s data as long as the client is installed.
| fields     | String     | comma-separated list of fields to include in the response.

## Shopify.getTransactions
Get the Representation of all money transfers.

| Field      | Type       | Description
|------------|------------|----------
| shopName   | String     | Domain of your shop.
| accessToken| String     | API access token that can be used to access the shop’s data as long as the client is installed.
| orderId    | Number     | The unique numeric identifier for the refund. This one is used for API purposes.
| sinceId    | Number     | Restrict results to after the specified ID.
| fields     | String     | comma-separated list of fields to include in the response.

## Shopify.getTransactionsCount
Count all a given order’s money transfers.

| Field      | Type       | Description
|------------|------------|----------
| shopName   | String     | Domain of your shop.
| accessToken| String     | API access token that can be used to access the shop’s data as long as the client is installed.
| orderId    | Number     | The unique numeric identifier for the refund. This one is used for API purposes.

## Shopify.getSingleTransaction
Get the Representation of a specific transaction.

| Field        | Type       | Description
|--------------|------------|----------
| shopName     | String     | Domain of your shop.
| accessToken  | String     | API access token that can be used to access the shop’s data as long as the client is installed.
| orderId      | Number     | The unique numeric identifier for the refund. This one is used for API purposes.
| transactionId| Number     | A unique numeric identifier for the transaction.
| fields       | String     | comma-separated list of fields to include in the response.

## Shopify.createTransaction
Capture a previously authorized order.

| Field      | Type       | Description
|------------|------------|----------
| shopName   | String     | Domain of your shop.
| accessToken| String     | API access token that can be used to access the shop’s data as long as the client is installed.
| orderId    | Number     | The unique numeric identifier for the refund. This one is used for API purposes.
| kind       | String     | The kind of transaction: authorization - Money that the customer has agreed to pay. Authorization period lasts for up to 7 to 30 days (depending on your payment service) while a store awaits for a customer's capture. capture - Transfer of money that was reserved during the authorization of a shop. sale - The combination of authorization and capture, performed in one single step. void - The cancellation of a pending authorization or capture. refund - The partial or full return of the captured money to the customer.
| amount     | String     | The amount of money that the transaction was for.

## Shopify.createUsageCharge
Create a new charge.

| Field              | Type       | Description
|--------------------|------------|----------
| shopName           | String     | Domain of your shop.
| accessToken        | String     | API access token that can be used to access the shop’s data as long as the client is installed.
| applicationChargeId| Number     | A unique numeric identifier for the application charge.
| description        | String     | The name of the usage charge.
| price              | String     | The price of the usage charge.

## Shopify.getSingleUsageCharge
Retrieve a single charge.

| Field              | Type       | Description
|--------------------|------------|----------
| shopName           | String     | Domain of your shop.
| accessToken        | String     | API access token that can be used to access the shop’s data as long as the client is installed.
| applicationChargeId| Number     | A unique numeric identifier for the application charge.
| chargeId           | Number     | A unique numeric identifier for the usage charge.
| fields             | String     | comma-separated list of fields to include in the response.

## Shopify.getUsageCharges
All past and present usage charges requests are retrieved by this request.

| Field              | Type       | Description
|--------------------|------------|----------
| shopName           | String     | Domain of your shop.
| accessToken        | String     | API access token that can be used to access the shop’s data as long as the client is installed.
| applicationChargeId| Number     | A unique numeric identifier for the application charge.
| fields             | String     | comma-separated list of fields to include in the response.

## Shopify.getSmartCollections
Get a list of all smart collections that contain a given product.

| Field          | Type       | Description
|----------------|------------|----------
| shopName       | String     | Domain of your shop.
| accessToken    | String     | API access token that can be used to access the shop’s data as long as the client is installed.
| limit          | Number     | Amount of results (default: 50) (maximum: 250).
| page           | Number     | Page to show (default: 1).
| ids            | String     | A comma-separated list of collection ids.
| sinceId        | Number     | Restrict results to after the specified ID.
| title          | String     | Show smart collections with given title.
| productId      | Number     | Show smart collections that includes given product.
| handle         | String     | Filter by smart collection handle.
| updatedAtMin   | String     | Show smart collections last updated after date (format: 2014-04-25T16:15:47-04:00).
| updatedAtMax   | String     | Show smart collections last updated before date (format: 2014-04-25T16:15:47-04:00).
| publishedAtMin | String     | Show smart collections published after date (format: 2014-04-25T16:15:47-04:00).
| publishedAtMax | String     | Show smart collections published before date (format: 2014-04-25T16:15:47-04:00).
| publishedStatus| String     | published - Show only published smart collections, unpublished - Show only unpublished smart collections, any - Show all smart collections (default).
| fields         | String     | comma-separated list of fields to include in the response.

## Shopify.getSmartCollectionsCount
Get a count of all smart collections that contain a given product.

| Field          | Type       | Description
|----------------|------------|----------
| shopName       | String     | Domain of your shop.
| accessToken    | String     | API access token that can be used to access the shop’s data as long as the client is installed.
| title          | String     | Show smart collections with given title.
| productId      | Number     | Show smart collections that includes given product.
| updatedAtMin   | String     | Show smart collections last updated after date (format: 2014-04-25T16:15:47-04:00).
| updatedAtMax   | String     | Show smart collections last updated before date (format: 2014-04-25T16:15:47-04:00).
| publishedAtMin | String     | Show smart collections published after date (format: 2014-04-25T16:15:47-04:00).
| publishedAtMax | String     | Show smart collections published before date (format: 2014-04-25T16:15:47-04:00).
| publishedStatus| String     | published - Show only published smart collections, unpublished - Show only unpublished smart collections, any - Show all smart collections (default).

## Shopify.getSingleSmartCollection
Get a single smart collection.

| Field            | Type       | Description
|------------------|------------|----------
| shopName         | String     | Domain of your shop.
| accessToken      | String     | API access token that can be used to access the shop’s data as long as the client is installed.
| smartCollectionId| Number     | The unique numeric identifier for the smart collection.
| fields           | String     | comma-separated list of fields to include in the response.

## Shopify.createSmartCollection
Create a new smart collection.

| Field      | Type       | Description
|------------|------------|----------
| shopName   | String     | Domain of your shop.
| accessToken| String     | API access token that can be used to access the shop’s data as long as the client is installed.
| title      | String     | The name of the smart collection. Limit of 255 characters.
| bodyHtml   | String     | The description of the smart collection, complete with HTML markup. Many templates display this on their smart collection page.
| imageSrc   | File       | The collection image.
| published  | Boolean    | Is published collection.
| rules      | Array      | Array of JSON objects. The list of rules that define what products go into the smart collection.

#### rules format
```json
[
    {
        "column": "variant_price",
        "relation": "less_than",
        "condition": "20"
    }
]
```

## Shopify.updateSmartCollection
Update an existing smart collection.

| Field            | Type       | Description
|------------------|------------|----------
| shopName         | String     | Domain of your shop.
| accessToken      | String     | API access token that can be used to access the shop’s data as long as the client is installed.
| smartCollectionId| Number     | The unique numeric identifier for the smart collection.
| title            | String     | The name of the smart collection. Limit of 255 characters.
| bodyHtml         | String     | The description of the smart collection, complete with HTML markup. Many templates display this on their smart collection page.
| imageSrc         | File       | The collection image.
| published        | Boolean    | Is published collection.
| rules            | Array      | Array of JSON objects. The list of rules that define what products go into the smart collection.

#### rules format
```json
[
    {
        "column": "variant_price",
        "relation": "less_than",
        "condition": "20"
    }
]
```

## Shopify.updateProductsInSmartCollection
Change the manual ordering of products in the SmartCollection.

| Field            | Type       | Description
|------------------|------------|----------
| shopName         | String     | Domain of your shop.
| accessToken      | String     | API access token that can be used to access the shop’s data as long as the client is installed.
| smartCollectionId| Number     | The unique numeric identifier for the smart collection.
| products         | Array      | Array of product ids in the order you want them arranged. (Applies only when sort_order is set to "manual").
| sortOrder        | String     | The type of sorting to apply. Valid values are listed in the Properties section above. (default: (current value)).

#### products format
```json
[
    921728736,
    632910392
]
```

## Shopify.deleteSmartCollection
Remove Smart iPods smart collection.

| Field            | Type       | Description
|------------------|------------|----------
| shopName         | String     | Domain of your shop.
| accessToken      | String     | API access token that can be used to access the shop’s data as long as the client is installed.
| smartCollectionId| Number     | The unique numeric identifier for the smart collection.

