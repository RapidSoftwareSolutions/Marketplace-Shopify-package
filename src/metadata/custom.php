<?php 
return array (
  'getAccessToken' => 
  array (
    'dictionary' => 
    array (
      'shopName' => 'shopName',
      'clientId' => 'client_id',
      'clientSecret' => 'client_secret',
      'code' => 'code',
    ),
    'vendorUrl' => 'https://{{shopName}}.myshopify.com/admin/oauth/access_token',
    'method' => 'POST',
    'wrap' => '',
  ),
  'getAbandonedCheckoutsCount' => 
  array (
    'dictionary' => 
    array (
      'shopName' => 'shopName',
      'accessToken' => 'accessToken',
      'sinceId' => 'since_id',
      'createdAtMin' => 'created_at_min',
      'createdAtMax' => 'created_at_max',
      'updatedAtMin' => 'updated_at_min',
      'updatedAtMax' => 'updated_at_max',
      'status' => 'status',
    ),
    'vendorUrl' => 'https://{{shopName}}.myshopify.com/admin/checkouts/count.json',
    'method' => 'GET',
    'wrap' => '',
  ),
  'getAbandonedCheckouts' => 
  array (
    'dictionary' => 
    array (
      'shopName' => 'shopName',
      'accessToken' => 'accessToken',
      'limit' => 'limit',
      'page' => 'page',
      'sinceId' => 'since_id',
      'createdAtMin' => 'created_at_min',
      'createdAtMax' => 'created_at_max',
      'updatedAtMin' => 'updated_at_min',
      'updatedAtMax' => 'updated_at_max',
      'status' => 'status',
    ),
    'vendorUrl' => 'https://{{shopName}}.myshopify.com/admin/checkouts.json',
    'method' => 'GET',
    'wrap' => '',
  ),
  'createCheckout' => 
  array (
    'dictionary' => 
    array (
      'shopName' => 'shopName',
      'accessToken' => 'accessToken',
      'email' => 'email',
      'lineItemsVariantId' => 'variant_id',
      'lineItemsQuantity' => 'quantity',
    ),
    'vendorUrl' => 'https://{{shopName}}.myshopify.com/admin/checkouts.json',
    'method' => 'POST',
    'wrap' => 'checkout',
    'custom' => true,
  ),
  'getSingleCheckout' => 
  array (
    'dictionary' => 
    array (
      'shopName' => 'shopName',
      'accessToken' => 'accessToken',
      'token' => 'token',
    ),
    'vendorUrl' => 'https://{{shopName}}.myshopify.com/admin/checkouts/{{token}}.json',
    'method' => 'GET',
    'wrap' => '',
  ),
  'updateCheckout' => 
  array (
    'dictionary' => 
    array (
      'shopName' => 'shopName',
      'accessToken' => 'accessToken',
      'token' => 'token',
      'email' => 'email',
      'shippingAddressFirstName' => 'first_name',
      'shippingAddressLastName' => 'last_name',
      'shippingAddressAddress1' => 'address1',
      'shippingAddressCity' => 'city',
      'shippingAddressProvinceCode' => 'province_code',
      'shippingAddressCountryCode' => 'country_code',
      'shippingAddressPhone' => 'phone',
      'shippingAddressZip' => 'zip',
      'reservationTime' => 'reservation_time',
    ),
    'vendorUrl' => 'https://{{shopName}}.myshopify.com/admin/checkouts/{{token}}.json',
    'method' => 'PUT',
    'wrap' => 'checkout',
    'custom' => true,
  ),
  'getShippingRates' => 
  array (
    'dictionary' => 
    array (
      'shopName' => 'shopName',
      'accessToken' => 'accessToken',
      'token' => 'token',
    ),
    'vendorUrl' => 'https://{{shopName}}.myshopify.com/admin/checkouts/{{token}}/shipping_rates.json',
    'method' => 'GET',
    'wrap' => '',
  ),
  'getSingleCheckoutPayments' => 
  array (
    'dictionary' => 
    array (
      'shopName' => 'shopName',
      'accessToken' => 'accessToken',
      'token' => 'token',
    ),
    'vendorUrl' => 'https://{{shopName}}.myshopify.com/admin/checkouts/{{token}}/payments.json',
    'method' => 'GET',
    'wrap' => '',
  ),
  'createPayment' => 
  array (
    'dictionary' => 
    array (
      'shopName' => 'shopName',
      'accessToken' => 'accessToken',
      'token' => 'token',
      'requestDetailsIpAddress' => 'ip_address',
      'requestDetailsAcceptLanguage' => 'accept_language',
      'requestDetailsUserAgent' => 'user_agent',
      'amount' => 'amount',
      'sessionId' => 'session_id',
    ),
    'vendorUrl' => 'https://{{shopName}}.myshopify.com/admin/checkouts/{{token}}/payments.json',
    'method' => 'POST',
    'wrap' => 'payment',
    'custom' => true,
  ),
  'getSinglePayment' => 
  array (
    'dictionary' => 
    array (
      'shopName' => 'shopName',
      'accessToken' => 'accessToken',
      'token' => 'token',
    ),
    'vendorUrl' => 'https://{{shopName}}.myshopify.com/admin/checkouts/{{token}}.json',
    'method' => 'GET',
    'wrap' => '',
  ),
  'countCheckoutPayments' => 
  array (
    'dictionary' => 
    array (
      'shopName' => 'shopName',
      'accessToken' => 'accessToken',
      'token' => 'token',
    ),
    'vendorUrl' => 'https://{{shopName}}.myshopify.com/admin/checkouts/{{token}}/payments/count.json',
    'method' => 'GET',
    'wrap' => '',
  ),
  'storeCreditCardInVault' => 
  array (
    'dictionary' => 
    array (
      'shopName' => 'shopName',
      'accessToken' => 'accessToken',
      'creditCardNumber' => 'number',
      'creditCardFirstName' => 'first_name',
      'creditCardLastName' => 'last_name',
      'creditCardMonth' => 'month',
      'creditCardYear' => 'year',
      'creditCardVerificationValue' => 'verification_value',
    ),
    'vendorUrl' => 'https://elb.deposit.shopifycs.com/sessions',
    'method' => 'POST',
    'wrap' => 'credit_card',
  ),
  'addProductToCollection' => 
  array (
    'dictionary' => 
    array (
      'shopName' => 'shopName',
      'accessToken' => 'accessToken',
      'productId' => 'product_id',
      'collectionId' => 'collection_id',
    ),
    'vendorUrl' => 'https://{{shopName}}.myshopify.com/admin/collects.json',
    'method' => 'POST',
    'wrap' => 'collect',
  ),
  'removeProductFromCollection' => 
  array (
    'dictionary' => 
    array (
      'shopName' => 'shopName',
      'accessToken' => 'accessToken',
      'collectId' => 'collectId',
    ),
    'vendorUrl' => 'https://{{shopName}}.myshopify.com/admin/collects/{{collectId}}.json',
    'method' => 'DELETE',
    'wrap' => '',
  ),
  'getCollects' => 
  array (
    'dictionary' => 
    array (
      'shopName' => 'shopName',
      'accessToken' => 'accessToken',
      'productId' => 'product_id',
      'collectionId' => 'collection_id',
      'page' => 'page',
      'limit' => 'limit',
      'fields' => 'fields',
    ),
    'vendorUrl' => 'https://{{shopName}}.myshopify.com/admin/collects.json',
    'method' => 'GET',
    'wrap' => '',
  ),
  'getCollectsCount' => 
  array (
    'dictionary' => 
    array (
      'shopName' => 'shopName',
      'accessToken' => 'accessToken',
      'productId' => 'product_id',
      'collectionId' => 'collection_id',
    ),
    'vendorUrl' => 'https://{{shopName}}.myshopify.com/admin/collects/count.json',
    'method' => 'GET',
    'wrap' => '',
  ),
  'getSingleCollect' => 
  array (
    'dictionary' => 
    array (
      'shopName' => 'shopName',
      'accessToken' => 'accessToken',
      'collectionId' => 'collectionId',
      'fields' => 'fields',
    ),
    'vendorUrl' => 'https://{{shopName}}.myshopify.com/admin/collects/{{collectionId}}.json',
    'method' => 'GET',
    'wrap' => '',
  ),
  'getCustomCollections' => 
  array (
    'dictionary' => 
    array (
      'shopName' => 'shopName',
      'accessToken' => 'accessToken',
      'limit' => 'limit',
      'page' => 'page',
      'ids' => 'ids',
      'sinceId' => 'since_id',
      'title' => 'title',
      'productId' => 'product_id',
      'handle' => 'handle',
      'updatedAtMin' => 'updated_at_min',
      'updatedAtMax' => 'updated_at_max',
      'publishedAtMin' => 'published_at_min',
      'publishedAtMax' => 'published_at_max',
      'publishedStatus' => 'published_status',
      'fields' => 'fields',
    ),
    'vendorUrl' => 'https://{{shopName}}.myshopify.com/admin/custom_collections.json',
    'method' => 'GET',
    'wrap' => '',
  ),
  'getCustomCollectionsCount' => 
  array (
    'dictionary' => 
    array (
      'shopName' => 'shopName',
      'accessToken' => 'accessToken',
      'title' => 'title',
      'productId' => 'product_id',
      'updatedAtMin' => 'updated_at_min',
      'updatedAtMax' => 'updated_at_max',
      'publishedAtMin' => 'published_at_min',
      'publishedAtMax' => 'published_at_max',
      'publishedStatus' => 'published_status',
    ),
    'vendorUrl' => 'https://{{shopName}}.myshopify.com/admin/custom_collections/count.json',
    'method' => 'GET',
    'wrap' => '',
  ),
  'getSingleCustomCollection' => 
  array (
    'dictionary' => 
    array (
      'shopName' => 'shopName',
      'accessToken' => 'accessToken',
      'collectionId' => 'collectionId',
      'fields' => 'fields',
    ),
    'vendorUrl' => 'https://{{shopName}}.myshopify.com/admin/custom_collections/{{collectionId}}.json',
    'method' => 'GET',
    'wrap' => '',
  ),
  'createCustomCollection' => 
  array (
    'dictionary' => 
    array (
      'shopName' => 'shopName',
      'accessToken' => 'accessToken',
      'title' => 'title',
      'imageSrc' => 'imageSrc',
      'collectsProductId' => 'collectsProductId',
      'published' => 'published',
    ),
    'vendorUrl' => 'https://{{shopName}}.myshopify.com/admin/custom_collections.json',
    'method' => 'POST',
    'wrap' => 'custom_collection',
    'custom' => true,
  ),
  'updateCustomCollection' => 
  array (
    'dictionary' => 
    array (
      'shopName' => 'shopName',
      'accessToken' => 'accessToken',
      'collectionId' => 'collectionId',
      'handle' => 'handle',
      'title' => 'title',
      'imageSrc' => 'imageSrc',
      'collectsProductId' => 'collectsProductId',
      'published' => 'published',
    ),
    'vendorUrl' => 'https://{{shopName}}.myshopify.com/admin/custom_collections/{{collectionId}}.json',
    'method' => 'PUT',
    'wrap' => 'custom_collection',
    'custom' => true,
  ),
  'deleteCustomCollection' => 
  array (
    'dictionary' => 
    array (
      'shopName' => 'shopName',
      'accessToken' => 'accessToken',
      'collectionId' => 'collectionId',
    ),
    'vendorUrl' => 'https://{{shopName}}.myshopify.com/admin/custom_collections/{{collectionId}}.json',
    'method' => 'DELETE',
    'wrap' => '',
  ),
  'getCustomers' => 
  array (
    'dictionary' => 
    array (
      'shopName' => 'shopName',
      'accessToken' => 'accessToken',
      'ids' => 'ids',
      'sinceId' => 'since_id',
      'createdAtMin' => 'created_at_min',
      'createdAtMax' => 'created_at_max',
      'updatedAtMin' => 'updated_at_min',
      'updatedAtMax' => 'updated_at_max',
      'limit' => 'limit',
      'page' => 'page',
      'fields' => 'fields',
    ),
    'vendorUrl' => 'https://{{shopName}}.myshopify.com/admin/customers.json',
    'method' => 'GET',
    'wrap' => '',
  ),
  'searchCustomers' => 
  array (
    'dictionary' => 
    array (
      'shopName' => 'shopName',
      'accessToken' => 'accessToken',
      'order' => 'order',
      'query' => 'query',
      'page' => 'page',
      'limit' => 'limit',
      'fields' => 'fields',
    ),
    'vendorUrl' => 'https://{{shopName}}.myshopify.com/admin/customers/search.json',
    'method' => 'GET',
    'wrap' => '',
  ),
  'getSingleCustomer' => 
  array (
    'dictionary' => 
    array (
      'shopName' => 'shopName',
      'accessToken' => 'accessToken',
      'customerId' => 'customerId',
      'fields' => 'fields',
    ),
    'vendorUrl' => 'https://{{shopName}}.myshopify.com/admin/customers/{{customerId}}.json',
    'method' => 'GET',
    'wrap' => '',
  ),
  'createCustomer' => 
  array (
    'dictionary' => 
    array (
      'shopName' => 'shopName',
      'accessToken' => 'accessToken',
      'firstName' => 'first_name',
      'lastName' => 'last_name',
      'email' => 'email',
      'phone' => 'phone',
      'verifiedEmail' => 'verified_email',
      'sendEmailInvite' => 'send_email_invite',
      'sendEmailWelcome' => 'send_email_welcome',
    ),
    'vendorUrl' => 'https://{{shopName}}.myshopify.com/admin/customers.json',
    'method' => 'POST',
    'wrap' => 'customer',
  ),
  'updateCustomer' => 
  array (
    'dictionary' => 
    array (
      'shopName' => 'shopName',
      'accessToken' => 'accessToken',
      'customerId' => 'id',
      'firstName' => 'firstName',
      'lastName' => 'lastName',
      'email' => 'email',
      'tags' => 'tags',
      'note' => 'note',
    ),
    'vendorUrl' => 'https://{{shopName}}.myshopify.com/admin/customers/{{customerId}}.json',
    'method' => 'PUT',
    'wrap' => 'customer',
  ),
  'createAccountActivationURL' => 
  array (
    'dictionary' => 
    array (
      'shopName' => 'shopName',
      'accessToken' => 'accessToken',
      'customerId' => 'customerId',
    ),
    'vendorUrl' => 'https://{{shopName}}.myshopify.com/admin/customers/{{customerId}}/account_activation_url.json',
    'method' => 'POST',
    'wrap' => '',
  ),
  'deleteCustomer' => 
  array (
    'dictionary' => 
    array (
      'shopName' => 'shopName',
      'accessToken' => 'accessToken',
      'customerId' => 'customerId',
    ),
    'vendorUrl' => 'https://{{shopName}}.myshopify.com/admin/customers/{{customerId}}.json',
    'method' => 'DELETE',
    'wrap' => '',
  ),
  'getCustomersCount' => 
  array (
    'dictionary' => 
    array (
      'shopName' => 'shopName',
      'accessToken' => 'accessToken',
    ),
    'vendorUrl' => 'https://{{shopName}}.myshopify.com/admin/customers/count.json',
    'method' => 'GET',
    'wrap' => '',
  ),
  'getCustomerOrders' => 
  array (
    'dictionary' => 
    array (
      'shopName' => 'shopName',
      'accessToken' => 'accessToken',
      'customerId' => 'customer_id',
    ),
    'vendorUrl' => 'https://{{shopName}}.myshopify.com/admin/orders.json',
    'method' => 'GET',
    'wrap' => '',
  ),
  'getEvents' => 
  array (
    'dictionary' => 
    array (
      'shopName' => 'shopName',
      'accessToken' => 'accessToken',
      'objectType' => 'objectType',
      'objectTypeId' => 'objectTypeId',
      'limit' => 'limit',
      'page' => 'page',
      'sinceId' => 'since_id',
      'createdAtMin' => 'created_at_min',
      'createdAtMax' => 'created_at_max',
      'filter' => 'filter',
      'verb' => 'verb',
      'fields' => 'fields',
    ),
    'vendorUrl' => 'https://{{shopName}}.myshopify.com/admin/[[objectTypeId]]events.json',
    'method' => 'GET',
    'wrap' => '',
    'custom' => true,
  ),
  'getSingleEvent' => 
  array (
    'dictionary' => 
    array (
      'shopName' => 'shopName',
      'accessToken' => 'accessToken',
      'eventId' => 'eventId',
      'fields' => 'fields',
    ),
    'vendorUrl' => 'https://{{shopName}}.myshopify.com/admin/events/{{eventId}}.json',
    'method' => 'GET',
    'wrap' => '',
  ),
  'getEventByType' => 
  array (
    'dictionary' => 
    array (
      'shopName' => 'shopName',
      'accessToken' => 'accessToken',
      'objectType' => 'objectType',
      'objectTypeId' => 'objectTypeId',
      'limit' => 'limit',
      'page' => 'page',
      'sinceId' => 'since_id',
      'createdAtMin' => 'created_at_min',
      'createdAtMax' => 'created_at_max',
      'filter' => 'filter',
      'verb' => 'verb',
      'fields' => 'fields',
    ),
    'vendorUrl' => 'https://{{shopName}}.myshopify.com/admin/{{objectType}}/{{objectTypeId}}/events.json',
    'method' => 'GET',
    'wrap' => '',
  ),
  'getEventsCount' => 
  array (
    'dictionary' => 
    array (
      'shopName' => 'shopName',
      'accessToken' => 'accessToken',
      'createdAtMin' => 'created_at_min',
      'createdAtMax' => 'created_at_max',
    ),
    'vendorUrl' => 'https://{{shopName}}.myshopify.com/admin/events/count.json',
    'method' => 'GET',
    'wrap' => '',
  ),
  'getProducts' => 
  array (
    'dictionary' => 
    array (
      'shopName' => 'shopName',
      'accessToken' => 'accessToken',
      'ids' => 'ids',
      'limit' => 'limit',
      'page' => 'page',
      'sinceId' => 'since_id',
      'title' => 'title',
      'vendor' => 'vendor',
      'handle' => 'handle',
      'productType' => 'product_type',
      'collectionId' => 'collection_id',
      'createdAtMin' => 'created_at_min',
      'createdAtMax' => 'created_at_max',
      'updatedAtMin' => 'updated_at_min',
      'updatedAtMax' => 'updated_at_max',
      'publishedAtMin' => 'published_at_min',
      'publishedAtMax' => 'published_at_max',
      'publishedStatus' => 'published_status',
      'fields' => 'fields',
    ),
    'vendorUrl' => 'https://{{shopName}}.myshopify.com/admin/products.json',
    'method' => 'GET',
    'wrap' => '',
  ),
  'getProductsCount' => 
  array (
    'dictionary' => 
    array (
      'shopName' => 'shopName',
      'accessToken' => 'accessToken',
      'vendor' => 'vendor',
      'productType' => 'product_type',
      'collectionId' => 'collection_id',
      'createdAtMin' => 'created_at_min',
      'createdAtMax' => 'created_at_max',
      'updatedAtMin' => 'updated_at_min',
      'updatedAtMax' => 'updated_at_max',
      'publishedAtMin' => 'published_at_min',
      'publishedAtMax' => 'published_at_max',
      'publishedStatus' => 'published_status',
    ),
    'vendorUrl' => 'https://{{shopName}}.myshopify.com/admin/products/count.json',
    'method' => 'GET',
    'wrap' => '',
  ),
  'getSingleProduct' => 
  array (
    'dictionary' => 
    array (
      'shopName' => 'shopName',
      'accessToken' => 'accessToken',
      'productId' => 'productId',
      'fields' => 'fields',
    ),
    'vendorUrl' => 'https://{{shopName}}.myshopify.com/admin/products/{{productId}}.json',
    'method' => 'GET',
    'wrap' => '',
  ),
  'createProduct' => 
  array (
    'dictionary' => 
    array (
      'shopName' => 'shopName',
      'accessToken' => 'accessToken',
      'title' => 'title',
      'body_html' => 'bodyHtml',
      'product_type' => 'productType',
      'imageSrc' => 'imageSrc',
      'vendor' => 'vendor',
      'variants' => 'variants',
      'tags' => 'tags',
      'published' => 'published',
    ),
    'vendorUrl' => 'https://{{shopName}}.myshopify.com/admin/products.json',
    'method' => 'POST',
    'wrap' => 'product',
    'custom' => true,
  ),
  'updateProduct' => 
  array (
    'dictionary' => 
    array (
      'shopName' => 'shopName',
      'accessToken' => 'accessToken',
      'productId' => 'id',
      'title' => 'title',
      'bodyHtml' => 'body_html',
      'productType' => 'product_type',
      'vendor' => 'vendor',
      'variants' => 'variants',
      'tags' => 'tags',
      'published' => 'published',
    ),
    'vendorUrl' => 'https://{{shopName}}.myshopify.com/admin/products/{{productId}}.json',
    'method' => 'PUT',
    'wrap' => 'product',
  ),
  'deleteProduct' => 
  array (
    'dictionary' => 
    array (
      'shopName' => 'shopName',
      'accessToken' => 'accessToken',
      'productId' => 'productId',
    ),
    'vendorUrl' => 'https://{{shopName}}.myshopify.com/admin/products/{{productId}}.json',
    'method' => 'DELETE',
    'wrap' => '',
  ),
  'getProductImages' => 
  array (
    'dictionary' => 
    array (
      'shopName' => 'shopName',
      'accessToken' => 'accessToken',
      'productId' => 'productId',
      'sinceId' => 'since_id',
      'fields' => 'fields',
    ),
    'vendorUrl' => 'https://{{shopName}}.myshopify.com/admin/products/{{productId}}/images.json',
    'method' => 'GET',
    'wrap' => '',
  ),
  'getProductImagesCount' => 
  array (
    'dictionary' => 
    array (
      'shopName' => 'shopName',
      'accessToken' => 'accessToken',
      'productId' => 'productId',
      'sinceId' => 'since_id',
      'createdAtMin' => 'created_at_min',
      'createdAtMax' => 'created_at_max',
      'updatedAtMin' => 'updated_at_min',
      'updatedAtMax' => 'updated_at_max',
      'publishedAtMin' => 'published_at_min',
      'publishedAtMax' => 'published_at_max',
    ),
    'vendorUrl' => 'https://{{shopName}}.myshopify.com/admin/products/{{productId}}/images/count.json',
    'method' => 'GET',
    'wrap' => '',
  ),
  'getSingleProductImage' => 
  array (
    'dictionary' => 
    array (
      'shopName' => 'shopName',
      'accessToken' => 'accessToken',
      'productId' => 'productId',
      'imageId' => 'imageId',
      'fields' => 'fields',
    ),
    'vendorUrl' => 'https://{{shopName}}.myshopify.com/admin/products/{{productId}}/images/{{imageId}}.json',
    'method' => 'GET',
    'wrap' => '',
  ),
  'createProductImage' => 
  array (
    'dictionary' => 
    array (
      'shopName' => 'shopName',
      'accessToken' => 'accessToken',
      'productId' => 'productId',
      'imageSrc' => 'src',
      'filename' => 'filename',
      'position' => 'position',
      'metafieldsKey' => 'key',
      'metafieldsValue' => 'value',
      'metafieldsValueType' => 'value_type',
      'metafieldsNamespace' => 'namespace',
      'variantIds' => 'variant_ids',
    ),
    'vendorUrl' => 'https://{{shopName}}.myshopify.com/admin/products/{{productId}}/images.json',
    'method' => 'POST',
    'wrap' => 'image',
    'custom' => true,
  ),
  'updateProductImage' => 
  array (
    'dictionary' => 
    array (
      'shopName' => 'shopName',
      'accessToken' => 'accessToken',
      'productId' => 'id',
      'imageId' => 'imageId',
      'position' => 'position',
      'metafieldsKey' => 'key',
      'metafieldsValue' => 'value',
      'metafieldsValueType' => 'value_type',
      'metafieldsNamespace' => 'namespace',
      'variantIds' => 'variant_ids',
    ),
    'vendorUrl' => 'https://{{shopName}}.myshopify.com/admin/products/{{productId}}/images/{{imageId}}.json',
    'method' => 'PUT',
    'wrap' => 'image',
    'custom' => true,
  ),
  'deleteProductImage' => 
  array (
    'dictionary' => 
    array (
      'shopName' => 'shopName',
      'accessToken' => 'accessToken',
      'productId' => 'productId',
      'imageId' => 'imageId',
    ),
    'vendorUrl' => 'https://{{shopName}}.myshopify.com/admin/products/{{productId}}/images/{{imageId}}.json',
    'method' => 'DELETE',
    'wrap' => '',
  ),
  'getProductVariants' => 
  array (
    'dictionary' => 
    array (
      'shopName' => 'shopName',
      'accessToken' => 'accessToken',
      'productId' => 'productId',
      'limit' => 'limit',
      'page' => 'page',
      'sinceId' => 'since_id',
      'fields' => 'fields',
    ),
    'vendorUrl' => 'https://{{shopName}}.myshopify.com/admin/products/{{productId}}/variants.json',
    'method' => 'GET',
    'wrap' => '',
  ),
  'getProductVariantsCount' => 
  array (
    'dictionary' => 
    array (
      'shopName' => 'shopName',
      'accessToken' => 'accessToken',
      'productId' => 'productId',
    ),
    'vendorUrl' => 'https://{{shopName}}.myshopify.com/admin/products/{{productId}}/variants/count.json',
    'method' => 'GET',
    'wrap' => '',
  ),
  'getSingleProductVariant' => 
  array (
    'dictionary' => 
    array (
      'shopName' => 'shopName',
      'accessToken' => 'accessToken',
      'variantId' => 'variantId',
    ),
    'vendorUrl' => 'https://{{shopName}}.myshopify.com/admin/variants/{{variantId}}.json',
    'method' => 'GET',
    'wrap' => '',
  ),
  'createProductVariant' => 
  array (
    'dictionary' => 
    array (
      'shopName' => 'shopName',
      'accessToken' => 'accessToken',
      'productId' => 'productId',
      'variant' => 'variant',
    ),
    'vendorUrl' => 'https://{{shopName}}.myshopify.com/admin/products/{{productId}}/variants.json',
    'method' => 'POST',
    'wrap' => '',
    'custom' => true,
  ),
  'updateProductVariant' => 
  array (
    'dictionary' => 
    array (
      'shopName' => 'shopName',
      'accessToken' => 'accessToken',
      'variantId' => 'variantId',
      'variant' => 'variant',
    ),
    'vendorUrl' => 'https://{{shopName}}.myshopify.com/admin/variants/{{variantId}}.json',
    'method' => 'PUT',
    'wrap' => '',
    'custom' => true,
  ),
  'deleteProductVariant' => 
  array (
    'dictionary' => 
    array (
      'shopName' => 'shopName',
      'accessToken' => 'accessToken',
      'productId' => 'productId',
      'variantId' => 'variantId',
    ),
    'vendorUrl' => 'https://{{shopName}}.myshopify.com/admin/products/{{productId}}/variants/{{variantId}}.json',
    'method' => 'DELETE',
    'wrap' => '',
  ),
  'getOrderRefunds' => 
  array (
    'dictionary' => 
    array (
      'shopName' => 'shopName',
      'accessToken' => 'accessToken',
      'orderId' => 'orderId',
      'fields' => 'fields',
    ),
    'vendorUrl' => 'https://{{shopName}}.myshopify.com/admin/orders/{{orderId}}/refunds.json',
    'method' => 'GET',
    'wrap' => '',
  ),
  'getOrderSingleRefund' => 
  array (
    'dictionary' => 
    array (
      'shopName' => 'shopName',
      'accessToken' => 'accessToken',
      'orderId' => 'orderId',
      'refundId' => 'refundId',
      'fields' => 'fields',
    ),
    'vendorUrl' => 'https://{{shopName}}.myshopify.com/admin/orders/{{orderId}}/refunds/{{refundId}}.json',
    'method' => 'GET',
    'wrap' => '',
  ),
  'calculateRefund' => 
  array (
    'dictionary' => 
    array (
      'shopName' => 'shopName',
      'accessToken' => 'accessToken',
      'orderId' => 'orderId',
      'shippingFullRefund' => 'full_refund',
      'shippingAmount' => 'amount',
      'refundLineItems' => 'refund_line_items',
    ),
    'vendorUrl' => 'https://{{shopName}}.myshopify.com/admin/orders/{{orderId}}/refunds/calculate.json',
    'method' => 'POST',
    'wrap' => 'refund',
    'custom' => true,
  ),
  'createOrderRefund' => 
  array (
    'dictionary' => 
    array (
      'shopName' => 'shopName',
      'accessToken' => 'accessToken',
      'orderId' => 'orderId',
      'restock' => 'restock',
      'notify' => 'notify',
      'note' => 'note',
      'discrepancyReason' => 'discrepancy_reason',
      'shippingFullRefund' => 'full_refund',
      'shippingAmount' => 'amount',
      'refundLineItems' => 'refund_line_items',
      'transactions' => 'transactions',
    ),
    'vendorUrl' => 'https://{{shopName}}.myshopify.com/admin/orders/{{orderId}}/refunds.json',
    'method' => 'POST',
    'wrap' => 'refund',
    'custom' => true,
  ),
  'getSingleShop' => 
  array (
    'dictionary' => 
    array (
      'shopName' => 'shopName',
      'accessToken' => 'accessToken',
      'fields' => 'fields',
    ),
    'vendorUrl' => 'https://{{shopName}}.myshopify.com/admin/shop.json',
    'method' => 'GET',
    'wrap' => '',
  ),
  'getTransactions' => 
  array (
    'dictionary' => 
    array (
      'shopName' => 'shopName',
      'accessToken' => 'accessToken',
      'orderId' => 'orderId',
      'sinceId' => 'since_id',
      'fields' => 'fields',
    ),
    'vendorUrl' => 'https://{{shopName}}.myshopify.com/admin/orders/{{orderId}}/transactions.json',
    'method' => 'GET',
    'wrap' => '',
  ),
  'getTransactionsCount' => 
  array (
    'dictionary' => 
    array (
      'shopName' => 'shopName',
      'accessToken' => 'accessToken',
      'orderId' => 'orderId',
    ),
    'vendorUrl' => 'https://{{shopName}}.myshopify.com/admin/orders/{{orderId}}/transactions/count.json',
    'method' => 'GET',
    'wrap' => '',
  ),
  'getSingleTransaction' => 
  array (
    'dictionary' => 
    array (
      'shopName' => 'shopName',
      'accessToken' => 'accessToken',
      'orderId' => 'orderId',
      'transactionId' => 'transactionId',
      'fields' => 'fields',
    ),
    'vendorUrl' => 'https://{{shopName}}.myshopify.com/admin/orders/{{orderId}}/transactions/{{transactionId}}.json',
    'method' => 'GET',
    'wrap' => '',
  ),
  'createTransaction' => 
  array (
    'dictionary' => 
    array (
      'shopName' => 'shopName',
      'accessToken' => 'accessToken',
      'orderId' => 'orderId',
      'kind' => 'kind',
      'amount' => 'amount',
    ),
    'vendorUrl' => 'https://{{shopName}}.myshopify.com/admin/orders/{{orderId}}/transactions.json',
    'method' => 'POST',
    'wrap' => 'transaction',
  ),
  'createUsageCharge' => 
  array (
    'dictionary' => 
    array (
      'shopName' => 'shopName',
      'accessToken' => 'accessToken',
      'applicationChargeId' => 'applicationChargeId',
      'description' => 'description',
      'price' => 'price',
    ),
    'vendorUrl' => 'https://{{shopName}}.myshopify.com/admin/recurring_application_charges/{{applicationChargeId}}/usage_charges.json',
    'method' => 'POST',
    'wrap' => 'usage_charge',
  ),
  'getSingleUsageCharge' => 
  array (
    'dictionary' => 
    array (
      'shopName' => 'shopName',
      'accessToken' => 'accessToken',
      'applicationChargeId' => 'applicationChargeId',
      'chargeId' => 'chargeId',
      'fields' => 'fields',
    ),
    'vendorUrl' => 'https://{{shopName}}.myshopify.com/admin/recurring_application_charges/{{applicationChargeId}}/usage_charges/{{chargeId}}.json',
    'method' => 'GET',
    'wrap' => '',
  ),
  'getUsageCharges' => 
  array (
    'dictionary' => 
    array (
      'shopName' => 'shopName',
      'accessToken' => 'accessToken',
      'applicationChargeId' => 'applicationChargeId',
      'fields' => 'fields',
    ),
    'vendorUrl' => 'https://{{shopName}}.myshopify.com/admin/recurring_application_charges/{{applicationChargeId}}/usage_charges.json',
    'method' => 'GET',
    'wrap' => '',
  ),
  'getSmartCollections' => 
  array (
    'dictionary' => 
    array (
      'shopName' => 'shopName',
      'accessToken' => 'accessToken',
      'limit' => 'limit',
      'page' => 'page',
      'ids' => 'ids',
      'sinceId' => 'since_id',
      'title' => 'title',
      'productId' => 'product_id',
      'handle' => 'handle',
      'updatedAtMin' => 'updated_at_min',
      'updatedAtMax' => 'updated_at_max',
      'publishedAtMin' => 'published_at_min',
      'publishedAtMax' => 'published_at_max',
      'publishedStatus' => 'published_status',
      'fields' => 'fields',
    ),
    'vendorUrl' => 'https://{{shopName}}.myshopify.com/admin/smart_collections.json',
    'method' => 'GET',
    'wrap' => '',
  ),
  'getSmartCollectionsCount' => 
  array (
    'dictionary' => 
    array (
      'shopName' => 'shopName',
      'accessToken' => 'accessToken',
      'title' => 'title',
      'productId' => 'product_id',
      'updatedAtMin' => 'updated_at_min',
      'updatedAtMax' => 'updated_at_max',
      'publishedAtMin' => 'published_at_min',
      'publishedAtMax' => 'published_at_max',
      'publishedStatus' => 'published_status',
    ),
    'vendorUrl' => 'https://{{shopName}}.myshopify.com/admin/smart_collections/count.json',
    'method' => 'GET',
    'wrap' => '',
  ),
  'getSingleSmartCollection' => 
  array (
    'dictionary' => 
    array (
      'shopName' => 'shopName',
      'accessToken' => 'accessToken',
      'smartCollectionId' => 'smartCollectionId',
      'fields' => 'fields',
    ),
    'vendorUrl' => 'https://{{shopName}}.myshopify.com/admin/smart_collections/{{smartCollectionId}}.json',
    'method' => 'GET',
    'wrap' => '',
  ),
  'createSmartCollection' => 
  array (
    'dictionary' => 
    array (
      'shopName' => 'shopName',
      'accessToken' => 'accessToken',
      'title' => 'title',
      'bodyHtml' => 'body_html',
      'imageSrc' => 'src',
      'published' => 'published',
      'rules' => 'rules',
    ),
    'vendorUrl' => 'https://{{shopName}}.myshopify.com/admin/smart_collections.json',
    'method' => 'POST',
    'wrap' => 'smart_collection',
    'custom' => true,
  ),
  'updateSmartCollection' => 
  array (
    'dictionary' => 
    array (
      'shopName' => 'shopName',
      'accessToken' => 'accessToken',
      'smartCollectionId' => 'smartCollectionId',
      'title' => 'title',
      'bodyHtml' => 'body_html',
      'imageSrc' => 'src',
      'published' => 'published',
      'rules' => 'rules',
    ),
    'vendorUrl' => 'https://{{shopName}}.myshopify.com/admin/smart_collections/{{smartCollectionId}}.json',
    'method' => 'PUT',
    'wrap' => 'smart_collection',
    'custom' => true,
  ),
  'updateProductsInSmartCollection' => 
  array (
    'dictionary' => 
    array (
      'shopName' => 'shopName',
      'accessToken' => 'accessToken',
      'smartCollectionId' => 'smartCollectionId',
      'products' => 'products',
      'sortOrder' => 'sortOrder',
    ),
    'vendorUrl' => 'https://{{shopName}}.myshopify.com/admin/smart_collections/{{smartCollectionId}}/order.json',
    'method' => 'PUT',
    'wrap' => '',
    'custom' => true,
  ),
  'deleteSmartCollection' => 
  array (
    'dictionary' => 
    array (
      'shopName' => 'shopName',
      'accessToken' => 'accessToken',
      'smartCollectionId' => 'smartCollectionId',
    ),
    'vendorUrl' => 'https://{{shopName}}.myshopify.com/admin/smart_collections/{{smartCollectionId}}.json',
    'method' => 'DELETE',
    'wrap' => '',
  ),
);