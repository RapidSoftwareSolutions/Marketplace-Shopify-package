<?php 
return array (
  'package' => 'Shopify',
  'tagline' => 'powerfull platform for ecommerce',
  'description' => 'Shopify is platform for ecommerce.',
  'image' => 'https://logo.clearbit.com/shopify.com?s=128',
  'repo' => 'https://github.com/RapidSoftwareSolutions/Marketplace-Shopify-package',
  'keywords' => 
  array (
    0 => 'API',
    1 => 'ecommerce',
    2 => 'service',
    3 => 'Shopify',
  ),
  'accounts' => 
  array (
    'domain' => 'shopify.com',
    'credentials' => 
    array (
      0 => 'shopName',
      1 => 'clientId',
      2 => 'clientSecret',
      3 => 'code',
    ),
  ),
  'blocks' => 
  array (
    0 => 
    array (
      'name' => 'getAccessToken',
      'description' => 'Get access token from code provided in the redirect described.',
      'args' => 
      array (
        0 => 
        array (
          'name' => 'shopName',
          'type' => 'credentials',
          'info' => 'Domain of your shop.',
          'required' => true,
        ),
        1 => 
        array (
          'name' => 'clientId',
          'type' => 'credentials',
          'info' => 'The API Key for the app.',
          'required' => true,
        ),
        2 => 
        array (
          'name' => 'clientSecret',
          'type' => 'credentials',
          'info' => 'The Shared Secret for the app (Credential sets).',
          'required' => true,
        ),
        3 => 
        array (
          'name' => 'code',
          'type' => 'credentials',
          'info' => 'The authorization code provided in the redirect described.',
          'required' => true,
        ),
      ),
      'callbacks' => 
      array (
        0 => 
        array (
          'name' => 'error',
          'info' => 'Error',
        ),
        1 => 
        array (
          'name' => 'success',
          'info' => 'Success',
        ),
      ),
    ),
    1 => 
    array (
      'name' => 'getAbandonedCheckoutsCount',
      'description' => 'Get a count of checkouts.',
      'args' => 
      array (
        0 => 
        array (
          'name' => 'shopName',
          'type' => 'credentials',
          'info' => 'Domain of your shop.',
          'required' => true,
        ),
        1 => 
        array (
          'name' => 'accessToken',
          'type' => 'String',
          'info' => 'API access token that can be used to access the shop’s data as long as the client is installed.',
          'required' => true,
        ),
        2 => 
        array (
          'name' => 'sinceId',
          'type' => 'Number',
          'info' => 'Restrict results to after the specified ID.',
          'required' => false,
        ),
        3 => 
        array (
          'name' => 'createdAtMin',
          'type' => 'String',
          'info' => 'Show checkouts created after date (format: 2014-04-25T16:15:47-04:00).',
          'required' => false,
        ),
        4 => 
        array (
          'name' => 'createdAtMax',
          'type' => 'String',
          'info' => 'Show checkouts created before date (format: 2014-04-25T16:15:47-04:00).',
          'required' => false,
        ),
        5 => 
        array (
          'name' => 'updatedAtMin',
          'type' => 'String',
          'info' => 'Show checkouts last updated after date (format: 2014-04-25T16:15:47-04:00).',
          'required' => false,
        ),
        6 => 
        array (
          'name' => 'updatedAtMax',
          'type' => 'String',
          'info' => 'Show checkouts last updated before date (format: 2014-04-25T16:15:47-04:00).',
          'required' => false,
        ),
        7 => 
        array (
          'name' => 'status',
          'type' => 'String',
          'info' => 'open - All open abandoned checkouts (default), closed - Show only closed abandoned checkouts.',
          'required' => false,
        ),
      ),
      'callbacks' => 
      array (
        0 => 
        array (
          'name' => 'error',
          'info' => 'Error',
        ),
        1 => 
        array (
          'name' => 'success',
          'info' => 'Success',
        ),
      ),
    ),
    2 => 
    array (
      'name' => 'getAbandonedCheckouts',
      'description' => 'List all abandoned checkouts.',
      'args' => 
      array (
        0 => 
        array (
          'name' => 'shopName',
          'type' => 'credentials',
          'info' => 'Domain of your shop.',
          'required' => true,
        ),
        1 => 
        array (
          'name' => 'accessToken',
          'type' => 'String',
          'info' => 'API access token that can be used to access the shop’s data as long as the client is installed.',
          'required' => true,
        ),
        2 => 
        array (
          'name' => 'limit',
          'type' => 'Number',
          'info' => 'Amount of results (default: 50) (maximum: 250).',
          'required' => false,
        ),
        3 => 
        array (
          'name' => 'page',
          'type' => 'Number',
          'info' => 'Page to show (default: 1).',
          'required' => false,
        ),
        4 => 
        array (
          'name' => 'sinceId',
          'type' => 'Number',
          'info' => 'Restrict results to after the specified ID.',
          'required' => false,
        ),
        5 => 
        array (
          'name' => 'createdAtMin',
          'type' => 'String',
          'info' => 'Show checkouts created after date (format: 2014-04-25T16:15:47-04:00).',
          'required' => false,
        ),
        6 => 
        array (
          'name' => 'createdAtMax',
          'type' => 'String',
          'info' => 'Show checkouts created before date (format: 2014-04-25T16:15:47-04:00).',
          'required' => false,
        ),
        7 => 
        array (
          'name' => 'updatedAtMin',
          'type' => 'String',
          'info' => 'Show checkouts last updated after date (format: 2014-04-25T16:15:47-04:00).',
          'required' => false,
        ),
        8 => 
        array (
          'name' => 'updatedAtMax',
          'type' => 'String',
          'info' => 'Show checkouts last updated before date (format: 2014-04-25T16:15:47-04:00).',
          'required' => false,
        ),
        9 => 
        array (
          'name' => 'status',
          'type' => 'String',
          'info' => 'open - All open abandoned checkouts (default), closed - Show only closed abandoned checkouts.',
          'required' => false,
        ),
      ),
      'callbacks' => 
      array (
        0 => 
        array (
          'name' => 'error',
          'info' => 'Error',
        ),
        1 => 
        array (
          'name' => 'success',
          'info' => 'Success',
        ),
      ),
    ),
    3 => 
    array (
      'name' => 'createCheckout',
      'description' => 'Create a new Checkout.',
      'args' => 
      array (
        0 => 
        array (
          'name' => 'shopName',
          'type' => 'credentials',
          'info' => 'Domain of your shop.',
          'required' => true,
        ),
        1 => 
        array (
          'name' => 'accessToken',
          'type' => 'String',
          'info' => 'API access token that can be used to access the shop’s data as long as the client is installed.',
          'required' => true,
        ),
        2 => 
        array (
          'name' => 'email',
          'type' => 'String',
          'info' => 'The customer\'s email address.',
          'required' => false,
        ),
        3 => 
        array (
          'name' => 'lineItemsVariantId',
          'type' => 'Number',
          'info' => 'The id of the product variant.',
          'required' => false,
        ),
        4 => 
        array (
          'name' => 'lineItemsQuantity',
          'type' => 'Number',
          'info' => 'The number of products that were purchased.',
          'required' => false,
        ),
      ),
      'callbacks' => 
      array (
        0 => 
        array (
          'name' => 'error',
          'info' => 'Error',
        ),
        1 => 
        array (
          'name' => 'success',
          'info' => 'Success',
        ),
      ),
    ),
    4 => 
    array (
      'name' => 'getSingleCheckout',
      'description' => 'Get a single Checkout.',
      'args' => 
      array (
        0 => 
        array (
          'name' => 'shopName',
          'type' => 'credentials',
          'info' => 'Domain of your shop.',
          'required' => true,
        ),
        1 => 
        array (
          'name' => 'accessToken',
          'type' => 'String',
          'info' => 'API access token that can be used to access the shop’s data as long as the client is installed.',
          'required' => true,
        ),
        2 => 
        array (
          'name' => 'token',
          'type' => 'String',
          'info' => 'Unique identifier for a particular checkout.',
          'required' => true,
        ),
      ),
      'callbacks' => 
      array (
        0 => 
        array (
          'name' => 'error',
          'info' => 'Error',
        ),
        1 => 
        array (
          'name' => 'success',
          'info' => 'Success',
        ),
      ),
    ),
    5 => 
    array (
      'name' => 'updateCheckout',
      'description' => 'Modify an existing Checkout.',
      'args' => 
      array (
        0 => 
        array (
          'name' => 'shopName',
          'type' => 'credentials',
          'info' => 'Domain of your shop.',
          'required' => true,
        ),
        1 => 
        array (
          'name' => 'accessToken',
          'type' => 'String',
          'info' => 'API access token that can be used to access the shop’s data as long as the client is installed.',
          'required' => true,
        ),
        2 => 
        array (
          'name' => 'token',
          'type' => 'String',
          'info' => 'Unique identifier for a particular checkout.',
          'required' => true,
        ),
        3 => 
        array (
          'name' => 'email',
          'type' => 'String',
          'info' => 'The customer\'s email address.',
          'required' => false,
        ),
        4 => 
        array (
          'name' => 'shippingAddressFirstName',
          'type' => 'String',
          'info' => 'The first name of the person associated with the payment method.',
          'required' => false,
        ),
        5 => 
        array (
          'name' => 'shippingAddressLastName',
          'type' => 'String',
          'info' => 'The last name of the person associated with the payment method.',
          'required' => false,
        ),
        6 => 
        array (
          'name' => 'shippingAddressAddress1',
          'type' => 'String',
          'info' => 'The street address of the shipping address.',
          'required' => false,
        ),
        7 => 
        array (
          'name' => 'shippingAddressCity',
          'type' => 'String',
          'info' => 'The city of the shipping address.',
          'required' => false,
        ),
        8 => 
        array (
          'name' => 'shippingAddressProvinceCode',
          'type' => 'String',
          'info' => 'The two-letter abbreviation of the state or province of the shipping address.',
          'required' => false,
        ),
        9 => 
        array (
          'name' => 'shippingAddressCountryCode',
          'type' => 'String',
          'info' => 'The two-letter code for the country of the shipping address.',
          'required' => false,
        ),
        10 => 
        array (
          'name' => 'shippingAddressPhone',
          'type' => 'String',
          'info' => 'The phone number at the shipping address.',
          'required' => false,
        ),
        11 => 
        array (
          'name' => 'shippingAddressZip',
          'type' => 'String',
          'info' => 'The zip or postal code of the shipping address.',
          'required' => false,
        ),
        12 => 
        array (
          'name' => 'reservationTime',
          'type' => 'Number',
          'info' => 'The reservation time in seconds for the products in the line items. This can be set up to 5 minutes, or 1 hour depending on the authentication type used.',
          'required' => false,
        ),
      ),
      'callbacks' => 
      array (
        0 => 
        array (
          'name' => 'error',
          'info' => 'Error',
        ),
        1 => 
        array (
          'name' => 'success',
          'info' => 'Success',
        ),
      ),
    ),
    6 => 
    array (
      'name' => 'getShippingRates',
      'description' => 'Get a list of available shipping rates for the specified checkout. Implementers need to poll this API until rates become available. Each shipping rate will also contain the checkout\'s subtotal_price, total_tax and total_price in the event that this shipping rate is selected. This can be used to update the UI without performing a road-trip to API.',
      'args' => 
      array (
        0 => 
        array (
          'name' => 'shopName',
          'type' => 'credentials',
          'info' => 'Domain of your shop.',
          'required' => true,
        ),
        1 => 
        array (
          'name' => 'accessToken',
          'type' => 'String',
          'info' => 'API access token that can be used to access the shop’s data as long as the client is installed.',
          'required' => true,
        ),
        2 => 
        array (
          'name' => 'token',
          'type' => 'String',
          'info' => 'Unique identifier for a particular checkout.',
          'required' => true,
        ),
      ),
      'callbacks' => 
      array (
        0 => 
        array (
          'name' => 'error',
          'info' => 'Error',
        ),
        1 => 
        array (
          'name' => 'success',
          'info' => 'Success',
        ),
      ),
    ),
    7 => 
    array (
      'name' => 'getSingleCheckoutPayments',
      'description' => 'Retreive a list of Payments on a particular Checkout.',
      'args' => 
      array (
        0 => 
        array (
          'name' => 'shopName',
          'type' => 'credentials',
          'info' => 'Domain of your shop.',
          'required' => true,
        ),
        1 => 
        array (
          'name' => 'accessToken',
          'type' => 'String',
          'info' => 'API access token that can be used to access the shop’s data as long as the client is installed.',
          'required' => true,
        ),
        2 => 
        array (
          'name' => 'token',
          'type' => 'String',
          'info' => 'Unique identifier for a particular checkout.',
          'required' => true,
        ),
      ),
      'callbacks' => 
      array (
        0 => 
        array (
          'name' => 'error',
          'info' => 'Error',
        ),
        1 => 
        array (
          'name' => 'success',
          'info' => 'Success',
        ),
      ),
    ),
    8 => 
    array (
      'name' => 'createPayment',
      'description' => 'Create a new payment.',
      'args' => 
      array (
        0 => 
        array (
          'name' => 'shopName',
          'type' => 'credentials',
          'info' => 'Domain of your shop.',
          'required' => true,
        ),
        1 => 
        array (
          'name' => 'accessToken',
          'type' => 'String',
          'info' => 'API access token that can be used to access the shop’s data as long as the client is installed.',
          'required' => true,
        ),
        2 => 
        array (
          'name' => 'token',
          'type' => 'String',
          'info' => 'Unique identifier for a particular checkout.',
          'required' => true,
        ),
        3 => 
        array (
          'name' => 'requestDetailsIpAddress',
          'type' => 'String',
          'info' => 'The IP address of the customer.',
          'required' => false,
        ),
        4 => 
        array (
          'name' => 'requestDetailsAcceptLanguage',
          'type' => 'String',
          'info' => 'A string identifying the customer\'s preferred language, formatted according to the Accept-Language header as defined in RFC2616 Section 14.4.',
          'required' => false,
        ),
        5 => 
        array (
          'name' => 'requestDetailsUserAgent',
          'type' => 'String',
          'info' => 'A string identifying the customer\'s user agent.',
          'required' => false,
        ),
        6 => 
        array (
          'name' => 'amount',
          'type' => 'String',
          'info' => 'Amount of payment.',
          'required' => false,
        ),
        7 => 
        array (
          'name' => 'sessionId',
          'type' => 'String',
          'info' => 'Represents the id that was returned by the card vault.',
          'required' => false,
        ),
      ),
      'callbacks' => 
      array (
        0 => 
        array (
          'name' => 'error',
          'info' => 'Error',
        ),
        1 => 
        array (
          'name' => 'success',
          'info' => 'Success',
        ),
      ),
    ),
    9 => 
    array (
      'name' => 'getSinglePayment',
      'description' => 'Get a single Checkout.',
      'args' => 
      array (
        0 => 
        array (
          'name' => 'shopName',
          'type' => 'credentials',
          'info' => 'Domain of your shop.',
          'required' => true,
        ),
        1 => 
        array (
          'name' => 'accessToken',
          'type' => 'String',
          'info' => 'API access token that can be used to access the shop’s data as long as the client is installed.',
          'required' => true,
        ),
        2 => 
        array (
          'name' => 'token',
          'type' => 'String',
          'info' => 'Unique identifier for a particular checkout.',
          'required' => true,
        ),
      ),
      'callbacks' => 
      array (
        0 => 
        array (
          'name' => 'error',
          'info' => 'Error',
        ),
        1 => 
        array (
          'name' => 'success',
          'info' => 'Success',
        ),
      ),
    ),
    10 => 
    array (
      'name' => 'countCheckoutPayments',
      'description' => 'Count the number of Payments attempted on a Checkout.',
      'args' => 
      array (
        0 => 
        array (
          'name' => 'shopName',
          'type' => 'credentials',
          'info' => 'Domain of your shop.',
          'required' => true,
        ),
        1 => 
        array (
          'name' => 'accessToken',
          'type' => 'String',
          'info' => 'API access token that can be used to access the shop’s data as long as the client is installed.',
          'required' => true,
        ),
        2 => 
        array (
          'name' => 'token',
          'type' => 'String',
          'info' => 'Unique identifier for a particular checkout.',
          'required' => true,
        ),
      ),
      'callbacks' => 
      array (
        0 => 
        array (
          'name' => 'error',
          'info' => 'Error',
        ),
        1 => 
        array (
          'name' => 'success',
          'info' => 'Success',
        ),
      ),
    ),
    11 => 
    array (
      'name' => 'storeCreditCardInVault',
      'description' => 'Create a payment session.',
      'args' => 
      array (
        0 => 
        array (
          'name' => 'shopName',
          'type' => 'credentials',
          'info' => 'Domain of your shop.',
          'required' => true,
        ),
        1 => 
        array (
          'name' => 'accessToken',
          'type' => 'String',
          'info' => 'API access token that can be used to access the shop’s data as long as the client is installed.',
          'required' => true,
        ),
        2 => 
        array (
          'name' => 'creditCardNumber',
          'type' => 'String',
          'info' => 'Credit card number.',
          'required' => true,
        ),
        3 => 
        array (
          'name' => 'creditCardFirstName',
          'type' => 'String',
          'info' => 'Credit card owner first name.',
          'required' => true,
        ),
        4 => 
        array (
          'name' => 'creditCardLastName',
          'type' => 'String',
          'info' => 'Credit card owner last name.',
          'required' => true,
        ),
        5 => 
        array (
          'name' => 'creditCardMonth',
          'type' => 'String',
          'info' => 'Credit card expiry date month.',
          'required' => true,
        ),
        6 => 
        array (
          'name' => 'creditCardYear',
          'type' => 'String',
          'info' => 'Credit card expiry date year.',
          'required' => true,
        ),
        7 => 
        array (
          'name' => 'creditCardVerificationValue',
          'type' => 'String',
          'info' => 'Credit card verification value.',
          'required' => true,
        ),
      ),
      'callbacks' => 
      array (
        0 => 
        array (
          'name' => 'error',
          'info' => 'Error',
        ),
        1 => 
        array (
          'name' => 'success',
          'info' => 'Success',
        ),
      ),
    ),
    12 => 
    array (
      'name' => 'addProductToCollection',
      'description' => 'Add a product to a collection.',
      'args' => 
      array (
        0 => 
        array (
          'name' => 'shopName',
          'type' => 'credentials',
          'info' => 'Domain of your shop.',
          'required' => true,
        ),
        1 => 
        array (
          'name' => 'accessToken',
          'type' => 'String',
          'info' => 'API access token that can be used to access the shop’s data as long as the client is installed.',
          'required' => true,
        ),
        2 => 
        array (
          'name' => 'productId',
          'type' => 'Number',
          'info' => 'The unique numeric identifier for the product.',
          'required' => true,
        ),
        3 => 
        array (
          'name' => 'collectionId',
          'type' => 'Number',
          'info' => 'The id of the custom collection containing the product.',
          'required' => true,
        ),
      ),
      'callbacks' => 
      array (
        0 => 
        array (
          'name' => 'error',
          'info' => 'Error',
        ),
        1 => 
        array (
          'name' => 'success',
          'info' => 'Success',
        ),
      ),
    ),
    13 => 
    array (
      'name' => 'removeProductFromCollection',
      'description' => 'Remove a product from a collection.',
      'args' => 
      array (
        0 => 
        array (
          'name' => 'shopName',
          'type' => 'credentials',
          'info' => 'Domain of your shop.',
          'required' => true,
        ),
        1 => 
        array (
          'name' => 'accessToken',
          'type' => 'String',
          'info' => 'API access token that can be used to access the shop’s data as long as the client is installed.',
          'required' => true,
        ),
        2 => 
        array (
          'name' => 'collectId',
          'type' => 'Number',
          'info' => 'A unique numeric identifier for the collect.',
          'required' => true,
        ),
      ),
      'callbacks' => 
      array (
        0 => 
        array (
          'name' => 'error',
          'info' => 'Error',
        ),
        1 => 
        array (
          'name' => 'success',
          'info' => 'Success',
        ),
      ),
    ),
    14 => 
    array (
      'name' => 'getCollects',
      'description' => 'List all collects or only those for specific products or collections.',
      'args' => 
      array (
        0 => 
        array (
          'name' => 'shopName',
          'type' => 'credentials',
          'info' => 'Domain of your shop.',
          'required' => true,
        ),
        1 => 
        array (
          'name' => 'accessToken',
          'type' => 'String',
          'info' => 'API access token that can be used to access the shop’s data as long as the client is installed.',
          'required' => true,
        ),
        2 => 
        array (
          'name' => 'productId',
          'type' => 'Number',
          'info' => 'The unique numeric identifier for the product.',
          'required' => false,
        ),
        3 => 
        array (
          'name' => 'collectionId',
          'type' => 'Number',
          'info' => 'The id of the custom collection containing the product.',
          'required' => false,
        ),
        4 => 
        array (
          'name' => 'page',
          'type' => 'Number',
          'info' => 'Page to show (default: 1).',
          'required' => false,
        ),
        5 => 
        array (
          'name' => 'limit',
          'type' => 'Number',
          'info' => 'Amount of results (default: 50) (maximum: 250).',
          'required' => false,
        ),
        6 => 
        array (
          'name' => 'fields',
          'type' => 'String',
          'info' => 'Comma-separated list of fields to include in the response.',
          'required' => false,
        ),
      ),
      'callbacks' => 
      array (
        0 => 
        array (
          'name' => 'error',
          'info' => 'Error',
        ),
        1 => 
        array (
          'name' => 'success',
          'info' => 'Success',
        ),
      ),
    ),
    15 => 
    array (
      'name' => 'getCollectsCount',
      'description' => 'Get a count of all collects or only those for specific products or collections.',
      'args' => 
      array (
        0 => 
        array (
          'name' => 'shopName',
          'type' => 'credentials',
          'info' => 'Domain of your shop.',
          'required' => true,
        ),
        1 => 
        array (
          'name' => 'accessToken',
          'type' => 'String',
          'info' => 'API access token that can be used to access the shop’s data as long as the client is installed.',
          'required' => true,
        ),
        2 => 
        array (
          'name' => 'productId',
          'type' => 'Number',
          'info' => 'The unique numeric identifier for the product.',
          'required' => false,
        ),
        3 => 
        array (
          'name' => 'collectionId',
          'type' => 'Number',
          'info' => 'The id of the custom collection containing the product.',
          'required' => false,
        ),
      ),
      'callbacks' => 
      array (
        0 => 
        array (
          'name' => 'error',
          'info' => 'Error',
        ),
        1 => 
        array (
          'name' => 'success',
          'info' => 'Success',
        ),
      ),
    ),
    16 => 
    array (
      'name' => 'getSingleCollect',
      'description' => 'Get the collect with a certain id, or for a given product AND collection.',
      'args' => 
      array (
        0 => 
        array (
          'name' => 'shopName',
          'type' => 'credentials',
          'info' => 'Domain of your shop.',
          'required' => true,
        ),
        1 => 
        array (
          'name' => 'accessToken',
          'type' => 'String',
          'info' => 'API access token that can be used to access the shop’s data as long as the client is installed.',
          'required' => true,
        ),
        2 => 
        array (
          'name' => 'collectionId',
          'type' => 'Number',
          'info' => 'The id of the custom collection containing the product.',
          'required' => true,
        ),
        3 => 
        array (
          'name' => 'fields',
          'type' => 'String',
          'info' => 'Comma-separated list of fields to include in the response.',
          'required' => false,
        ),
      ),
      'callbacks' => 
      array (
        0 => 
        array (
          'name' => 'error',
          'info' => 'Error',
        ),
        1 => 
        array (
          'name' => 'success',
          'info' => 'Success',
        ),
      ),
    ),
    17 => 
    array (
      'name' => 'getCustomCollections',
      'description' => 'Get a list of all custom collections that contain a given product.',
      'args' => 
      array (
        0 => 
        array (
          'name' => 'shopName',
          'type' => 'credentials',
          'info' => 'Domain of your shop.',
          'required' => true,
        ),
        1 => 
        array (
          'name' => 'accessToken',
          'type' => 'String',
          'info' => 'API access token that can be used to access the shop’s data as long as the client is installed.',
          'required' => true,
        ),
        2 => 
        array (
          'name' => 'limit',
          'type' => 'Number',
          'info' => 'Amount of results (default: 50) (maximum: 250).',
          'required' => false,
        ),
        3 => 
        array (
          'name' => 'page',
          'type' => 'Number',
          'info' => 'Page to show (default: 1).',
          'required' => false,
        ),
        4 => 
        array (
          'name' => 'ids',
          'type' => 'String',
          'info' => 'A comma-separated list of collection ids.',
          'required' => false,
        ),
        5 => 
        array (
          'name' => 'sinceId',
          'type' => 'Number',
          'info' => 'Restrict results to after the specified ID.',
          'required' => false,
        ),
        6 => 
        array (
          'name' => 'title',
          'type' => 'String',
          'info' => 'Show custom collections with given title.',
          'required' => false,
        ),
        7 => 
        array (
          'name' => 'productId',
          'type' => 'Number',
          'info' => 'Show custom collections that includes given product.',
          'required' => false,
        ),
        8 => 
        array (
          'name' => 'handle',
          'type' => 'String',
          'info' => 'Filter by custom collection handle.',
          'required' => false,
        ),
        9 => 
        array (
          'name' => 'updatedAtMin',
          'type' => 'String',
          'info' => 'Show custom collections last updated after date (format: 2014-04-25T16:15:47-04:00).',
          'required' => false,
        ),
        10 => 
        array (
          'name' => 'updatedAtMax',
          'type' => 'String',
          'info' => 'Show custom collections last updated before date (format: 2014-04-25T16:15:47-04:00).',
          'required' => false,
        ),
        11 => 
        array (
          'name' => 'publishedAtMin',
          'type' => 'String',
          'info' => 'Show custom collections published after date (format: 2014-04-25T16:15:47-04:00).',
          'required' => false,
        ),
        12 => 
        array (
          'name' => 'publishedAtMax',
          'type' => 'String',
          'info' => 'Show custom collections published before date (format: 2014-04-25T16:15:47-04:00).',
          'required' => false,
        ),
        13 => 
        array (
          'name' => 'publishedStatus',
          'type' => 'String',
          'info' => 'published - Show only published custom collections, unpublished - Show only unpublished custom collections, any - Show all custom collections (default).',
          'required' => false,
        ),
        14 => 
        array (
          'name' => 'fields',
          'type' => 'String',
          'info' => 'comma-separated list of fields to include in the response.',
          'required' => false,
        ),
      ),
      'callbacks' => 
      array (
        0 => 
        array (
          'name' => 'error',
          'info' => 'Error',
        ),
        1 => 
        array (
          'name' => 'success',
          'info' => 'Success',
        ),
      ),
    ),
    18 => 
    array (
      'name' => 'getCustomCollectionsCount',
      'description' => 'Get a count of all custom collections that contain a given product.',
      'args' => 
      array (
        0 => 
        array (
          'name' => 'shopName',
          'type' => 'credentials',
          'info' => 'Domain of your shop.',
          'required' => true,
        ),
        1 => 
        array (
          'name' => 'accessToken',
          'type' => 'String',
          'info' => 'API access token that can be used to access the shop’s data as long as the client is installed.',
          'required' => true,
        ),
        2 => 
        array (
          'name' => 'title',
          'type' => 'String',
          'info' => 'Count custom collections with given title.',
          'required' => false,
        ),
        3 => 
        array (
          'name' => 'productId',
          'type' => 'Number',
          'info' => 'Count custom collections that includes given product.',
          'required' => false,
        ),
        4 => 
        array (
          'name' => 'updatedAtMin',
          'type' => 'String',
          'info' => 'Count custom collections last updated after date (format: 2014-04-25T16:15:47-04:00).',
          'required' => false,
        ),
        5 => 
        array (
          'name' => 'updatedAtMax',
          'type' => 'String',
          'info' => 'Count custom collections last updated before date (format: 2014-04-25T16:15:47-04:00).',
          'required' => false,
        ),
        6 => 
        array (
          'name' => 'publishedAtMin',
          'type' => 'String',
          'info' => 'Show custom collections published after date (format: 2014-04-25T16:15:47-04:00).',
          'required' => false,
        ),
        7 => 
        array (
          'name' => 'publishedAtMax',
          'type' => 'String',
          'info' => 'Show custom collections published before date (format: 2014-04-25T16:15:47-04:00).',
          'required' => false,
        ),
        8 => 
        array (
          'name' => 'publishedStatus',
          'type' => 'String',
          'info' => 'published - Show only published custom collections, unpublished - Show only unpublished custom collections, any - Show all custom collections (default).',
          'required' => false,
        ),
      ),
      'callbacks' => 
      array (
        0 => 
        array (
          'name' => 'error',
          'info' => 'Error',
        ),
        1 => 
        array (
          'name' => 'success',
          'info' => 'Success',
        ),
      ),
    ),
    19 => 
    array (
      'name' => 'getSingleCustomCollection',
      'description' => 'Get a single custom collection.',
      'args' => 
      array (
        0 => 
        array (
          'name' => 'shopName',
          'type' => 'credentials',
          'info' => 'Domain of your shop.',
          'required' => true,
        ),
        1 => 
        array (
          'name' => 'accessToken',
          'type' => 'String',
          'info' => 'API access token that can be used to access the shop’s data as long as the client is installed.',
          'required' => true,
        ),
        2 => 
        array (
          'name' => 'collectionId',
          'type' => 'Number',
          'info' => 'The id of the custom collection containing the product.',
          'required' => true,
        ),
        3 => 
        array (
          'name' => 'fields',
          'type' => 'String',
          'info' => 'Comma-separated list of fields to include in the response.',
          'required' => false,
        ),
      ),
      'callbacks' => 
      array (
        0 => 
        array (
          'name' => 'error',
          'info' => 'Error',
        ),
        1 => 
        array (
          'name' => 'success',
          'info' => 'Success',
        ),
      ),
    ),
    20 => 
    array (
      'name' => 'createCustomCollection',
      'description' => 'Create a new custom collection.',
      'args' => 
      array (
        0 => 
        array (
          'name' => 'shopName',
          'type' => 'credentials',
          'info' => 'Domain of your shop.',
          'required' => true,
        ),
        1 => 
        array (
          'name' => 'accessToken',
          'type' => 'String',
          'info' => 'API access token that can be used to access the shop’s data as long as the client is installed.',
          'required' => true,
        ),
        2 => 
        array (
          'name' => 'title',
          'type' => 'String',
          'info' => 'Collections title.',
          'required' => true,
        ),
        3 => 
        array (
          'name' => 'imageSrc',
          'type' => 'File',
          'info' => 'Image associated with the custom collection.',
          'required' => false,
        ),
        4 => 
        array (
          'name' => 'collectsProductId',
          'type' => 'Number',
          'info' => 'The unique numeric identifier for the product.',
          'required' => false,
        ),
        5 => 
        array (
          'name' => 'published',
          'type' => 'Boolean',
          'info' => 'Is published collection.',
          'required' => false,
        ),
      ),
      'callbacks' => 
      array (
        0 => 
        array (
          'name' => 'error',
          'info' => 'Error',
        ),
        1 => 
        array (
          'name' => 'success',
          'info' => 'Success',
        ),
      ),
    ),
    21 => 
    array (
      'name' => 'updateCustomCollection',
      'description' => 'Update an existing custom collection.',
      'args' => 
      array (
        0 => 
        array (
          'name' => 'shopName',
          'type' => 'credentials',
          'info' => 'Domain of your shop.',
          'required' => true,
        ),
        1 => 
        array (
          'name' => 'accessToken',
          'type' => 'String',
          'info' => 'API access token that can be used to access the shop’s data as long as the client is installed.',
          'required' => true,
        ),
        2 => 
        array (
          'name' => 'collectionId',
          'type' => 'Number',
          'info' => 'The id of the custom collection containing the product.',
          'required' => true,
        ),
        3 => 
        array (
          'name' => 'handle',
          'type' => 'String',
          'info' => 'A human-friendly unique string for the custom collection automatically generated from its title. This is used in shop themes by the Liquid templating language to refer to the custom collection. Limit of 255 characters.',
          'required' => false,
        ),
        4 => 
        array (
          'name' => 'title',
          'type' => 'String',
          'info' => 'Collections title.',
          'required' => false,
        ),
        5 => 
        array (
          'name' => 'imageSrc',
          'type' => 'File',
          'info' => 'Image associated with the custom collection.',
          'required' => false,
        ),
        6 =>
        array (
            'name' => 'collectsProductId',
            'type' => 'Number',
            'info' => 'The unique numeric identifier for the product.',
            'required' => false,
        ),
        7 => 
        array (
          'name' => 'published',
          'type' => 'Boolean',
          'info' => 'Is published collections.',
          'required' => false,
        ),
      ),
      'callbacks' => 
      array (
        0 => 
        array (
          'name' => 'error',
          'info' => 'Error',
        ),
        1 => 
        array (
          'name' => 'success',
          'info' => 'Success',
        ),
      ),
    ),
    22 => 
    array (
      'name' => 'deleteCustomCollection',
      'description' => 'Remove custom collection.',
      'args' => 
      array (
        0 => 
        array (
          'name' => 'shopName',
          'type' => 'credentials',
          'info' => 'Domain of your shop.',
          'required' => true,
        ),
        1 => 
        array (
          'name' => 'accessToken',
          'type' => 'String',
          'info' => 'API access token that can be used to access the shop’s data as long as the client is installed.',
          'required' => true,
        ),
        2 => 
        array (
          'name' => 'collectionId',
          'type' => 'Number',
          'info' => 'The id of the custom collection containing the product.',
          'required' => true,
        ),
      ),
      'callbacks' => 
      array (
        0 => 
        array (
          'name' => 'error',
          'info' => 'Error',
        ),
        1 => 
        array (
          'name' => 'success',
          'info' => 'Success',
        ),
      ),
    ),
    23 => 
    array (
      'name' => 'getCustomers',
      'description' => 'Retrieve all customers of a shop.',
      'args' => 
      array (
        0 => 
        array (
          'name' => 'shopName',
          'type' => 'credentials',
          'info' => 'Domain of your shop.',
          'required' => true,
        ),
        1 => 
        array (
          'name' => 'accessToken',
          'type' => 'String',
          'info' => 'API access token that can be used to access the shop’s data as long as the client is installed.',
          'required' => true,
        ),
        2 => 
        array (
          'name' => 'ids',
          'type' => 'String',
          'info' => 'A comma-separated list of customer ids.',
          'required' => false,
        ),
        3 => 
        array (
          'name' => 'sinceId',
          'type' => 'Number',
          'info' => 'Restrict results to after the specified ID.',
          'required' => false,
        ),
        4 => 
        array (
          'name' => 'createdAtMin',
          'type' => 'String',
          'info' => 'Show customers created after date (format: 2014-04-25T16:15:47-04:00).',
          'required' => false,
        ),
        5 => 
        array (
          'name' => 'createdAtMax',
          'type' => 'String',
          'info' => 'Show customers created before date (format: 2014-04-25T16:15:47-04:00).',
          'required' => false,
        ),
        6 => 
        array (
          'name' => 'updatedAtMin',
          'type' => 'String',
          'info' => 'Show customers last updated after date (format: 2014-04-25T16:15:47-04:00).',
          'required' => false,
        ),
        7 => 
        array (
          'name' => 'updatedAtMax',
          'type' => 'String',
          'info' => 'Show customers last updated before date (format: 2014-04-25T16:15:47-04:00).',
          'required' => false,
        ),
        8 => 
        array (
          'name' => 'limit',
          'type' => 'Number',
          'info' => 'Amount of results (default: 50) (maximum: 250).',
          'required' => false,
        ),
        9 => 
        array (
          'name' => 'page',
          'type' => 'Number',
          'info' => 'Page to show (default: 1).',
          'required' => false,
        ),
        10 => 
        array (
          'name' => 'fields',
          'type' => 'String',
          'info' => 'comma-separated list of fields to include in the response.',
          'required' => false,
        ),
      ),
      'callbacks' => 
      array (
        0 => 
        array (
          'name' => 'error',
          'info' => 'Error',
        ),
        1 => 
        array (
          'name' => 'success',
          'info' => 'Success',
        ),
      ),
    ),
    24 => 
    array (
      'name' => 'searchCustomers',
      'description' => 'Search customers.',
      'args' => 
      array (
        0 => 
        array (
          'name' => 'shopName',
          'type' => 'credentials',
          'info' => 'Domain of your shop.',
          'required' => true,
        ),
        1 => 
        array (
          'name' => 'accessToken',
          'type' => 'String',
          'info' => 'API access token that can be used to access the shop’s data as long as the client is installed.',
          'required' => true,
        ),
        2 => 
        array (
          'name' => 'order',
          'type' => 'String',
          'info' => 'Field and direction to order results by (default: last_order_date DESC).',
          'required' => false,
        ),
        3 => 
        array (
          'name' => 'query',
          'type' => 'String',
          'info' => 'Text to search customers.',
          'required' => false,
        ),
        4 => 
        array (
          'name' => 'page',
          'type' => 'Number',
          'info' => 'Page to show (default: 1).',
          'required' => false,
        ),
        5 => 
        array (
          'name' => 'limit',
          'type' => 'Number',
          'info' => 'Amount of results (default: 50) (maximum: 250).',
          'required' => false,
        ),
        6 => 
        array (
          'name' => 'fields',
          'type' => 'String',
          'info' => 'comma-separated list of fields to include in the response.',
          'required' => false,
        ),
      ),
      'callbacks' => 
      array (
        0 => 
        array (
          'name' => 'error',
          'info' => 'Error',
        ),
        1 => 
        array (
          'name' => 'success',
          'info' => 'Success',
        ),
      ),
    ),
    25 => 
    array (
      'name' => 'getSingleCustomer',
      'description' => 'Get a single customer.',
      'args' => 
      array (
        0 => 
        array (
          'name' => 'shopName',
          'type' => 'credentials',
          'info' => 'Domain of your shop.',
          'required' => true,
        ),
        1 => 
        array (
          'name' => 'accessToken',
          'type' => 'String',
          'info' => 'API access token that can be used to access the shop’s data as long as the client is installed.',
          'required' => true,
        ),
        2 => 
        array (
          'name' => 'customerId',
          'type' => 'String',
          'info' => 'The id of the customer.',
          'required' => true,
        ),
        3 => 
        array (
          'name' => 'fields',
          'type' => 'String',
          'info' => 'Comma-separated list of fields to include in the response.',
          'required' => false,
        ),
      ),
      'callbacks' => 
      array (
        0 => 
        array (
          'name' => 'error',
          'info' => 'Error',
        ),
        1 => 
        array (
          'name' => 'success',
          'info' => 'Success',
        ),
      ),
    ),
    26 => 
    array (
      'name' => 'createCustomer',
      'description' => 'Create a new customer.',
      'args' => 
      array (
        0 => 
        array (
          'name' => 'shopName',
          'type' => 'credentials',
          'info' => 'Domain of your shop.',
          'required' => true,
        ),
        1 => 
        array (
          'name' => 'accessToken',
          'type' => 'String',
          'info' => 'API access token that can be used to access the shop’s data as long as the client is installed.',
          'required' => true,
        ),
        2 => 
        array (
          'name' => 'firstName',
          'type' => 'String',
          'info' => 'The customer\'s first name.',
          'required' => true,
        ),
        3 => 
        array (
          'name' => 'lastName',
          'type' => 'String',
          'info' => 'The customer\'s last name.',
          'required' => true,
        ),
        4 => 
        array (
          'name' => 'email',
          'type' => 'String',
          'info' => 'The email address of the customer.',
          'required' => false,
        ),
        5 => 
        array (
          'name' => 'phone',
          'type' => 'String',
          'info' => 'The phone number for the customer. Valid formats can be of different types, for example: 6135551212, +16135551212, 555-1212, (613)555-1212, +1 613-555-1212.',
          'required' => false,
        ),
        6 => 
        array (
          'name' => 'verifiedEmail',
          'type' => 'Boolean',
          'info' => 'States whether or not the email address has been verified.',
          'required' => false,
        ),
        7 => 
        array (
          'name' => 'sendEmailInvite',
          'type' => 'Boolean',
          'info' => 'If true, Invite E-mail will be send.',
          'required' => false,
        ),
        8 => 
        array (
          'name' => 'sendEmailWelcome',
          'type' => 'Boolean',
          'info' => 'If true, Welcome E-mail will be send.',
          'required' => false,
        ),
      ),
      'callbacks' => 
      array (
        0 => 
        array (
          'name' => 'error',
          'info' => 'Error',
        ),
        1 => 
        array (
          'name' => 'success',
          'info' => 'Success',
        ),
      ),
    ),
    27 => 
    array (
      'name' => 'updateCustomer',
      'description' => 'Update a customer.',
      'args' => 
      array (
        0 => 
        array (
          'name' => 'shopName',
          'type' => 'credentials',
          'info' => 'Domain of your shop.',
          'required' => true,
        ),
        1 => 
        array (
          'name' => 'accessToken',
          'type' => 'String',
          'info' => 'API access token that can be used to access the shop’s data as long as the client is installed.',
          'required' => true,
        ),
        2 => 
        array (
          'name' => 'customerId',
          'type' => 'String',
          'info' => 'The id of the customer.',
          'required' => true,
        ),
        3 => 
        array (
          'name' => 'firstName',
          'type' => 'String',
          'info' => 'The customer\'s first name.',
          'required' => false,
        ),
        4 => 
        array (
          'name' => 'lastName',
          'type' => 'String',
          'info' => 'The customer\'s last name.',
          'required' => false,
        ),
        5 => 
        array (
          'name' => 'email',
          'type' => 'String',
          'info' => 'The email address of the customer.',
          'required' => false,
        ),
        6 => 
        array (
          'name' => 'tags',
          'type' => 'String',
          'info' => 'Tags are additional short descriptors formatted as a string of comma-separated values. For example, if an article has three tags: tag1, tag2, tag3.',
          'required' => false,
        ),
        7 => 
        array (
          'name' => 'note',
          'type' => 'String',
          'info' => 'A note about the customer.',
          'required' => false,
        ),
      ),
      'callbacks' => 
      array (
        0 => 
        array (
          'name' => 'error',
          'info' => 'Error',
        ),
        1 => 
        array (
          'name' => 'success',
          'info' => 'Success',
        ),
      ),
    ),
    28 => 
    array (
      'name' => 'createAccountActivationURL',
      'description' => 'This endpoint allows you to generate and retrieve an account activation URL for a customer who is not yet enabled. This is useful if you\'ve imported a large number of customers and want to send them activation emails all at once (using this approach, you\'ll need to generate and send the activation emails yourself). The account activation URL generated by this endpoint is one time use and will expire after 7 days. If you make a new POST request to this endpoint, a new URL will be generated which will be again valid for 7 days, but the previous URL will no longer be valid.',
      'args' => 
      array (
        0 => 
        array (
          'name' => 'shopName',
          'type' => 'credentials',
          'info' => 'Domain of your shop.',
          'required' => true,
        ),
        1 => 
        array (
          'name' => 'accessToken',
          'type' => 'String',
          'info' => 'API access token that can be used to access the shop’s data as long as the client is installed.',
          'required' => true,
        ),
        2 => 
        array (
          'name' => 'customerId',
          'type' => 'String',
          'info' => 'The id of the customer.',
          'required' => true,
        ),
      ),
      'callbacks' => 
      array (
        0 => 
        array (
          'name' => 'error',
          'info' => 'Error',
        ),
        1 => 
        array (
          'name' => 'success',
          'info' => 'Success',
        ),
      ),
    ),
    29 => 
    array (
      'name' => 'deleteCustomer',
      'description' => 'Delete a customer. A customer can\'t be deleted if they have existing orders.',
      'args' => 
      array (
        0 => 
        array (
          'name' => 'shopName',
          'type' => 'credentials',
          'info' => 'Domain of your shop.',
          'required' => true,
        ),
        1 => 
        array (
          'name' => 'accessToken',
          'type' => 'String',
          'info' => 'API access token that can be used to access the shop’s data as long as the client is installed.',
          'required' => true,
        ),
        2 => 
        array (
          'name' => 'customerId',
          'type' => 'String',
          'info' => 'The id of the customer.',
          'required' => true,
        ),
      ),
      'callbacks' => 
      array (
        0 => 
        array (
          'name' => 'error',
          'info' => 'Error',
        ),
        1 => 
        array (
          'name' => 'success',
          'info' => 'Success',
        ),
      ),
    ),
    30 => 
    array (
      'name' => 'getCustomersCount',
      'description' => 'Get a count of all customers.',
      'args' => 
      array (
        0 => 
        array (
          'name' => 'shopName',
          'type' => 'credentials',
          'info' => 'Domain of your shop.',
          'required' => true,
        ),
        1 => 
        array (
          'name' => 'accessToken',
          'type' => 'String',
          'info' => 'API access token that can be used to access the shop’s data as long as the client is installed.',
          'required' => true,
        ),
      ),
      'callbacks' => 
      array (
        0 => 
        array (
          'name' => 'error',
          'info' => 'Error',
        ),
        1 => 
        array (
          'name' => 'success',
          'info' => 'Success',
        ),
      ),
    ),
    31 => 
    array (
      'name' => 'getCustomerOrders',
      'description' => 'Get all orders belonging to this customer.',
      'args' => 
      array (
        0 => 
        array (
          'name' => 'shopName',
          'type' => 'credentials',
          'info' => 'Domain of your shop.',
          'required' => true,
        ),
        1 => 
        array (
          'name' => 'accessToken',
          'type' => 'String',
          'info' => 'API access token that can be used to access the shop’s data as long as the client is installed.',
          'required' => true,
        ),
        2 => 
        array (
          'name' => 'customerId',
          'type' => 'String',
          'info' => 'The id of the customer.',
          'required' => true,
        ),
      ),
      'callbacks' => 
      array (
        0 => 
        array (
          'name' => 'error',
          'info' => 'Error',
        ),
        1 => 
        array (
          'name' => 'success',
          'info' => 'Success',
        ),
      ),
    ),
    32 => 
    array (
      'name' => 'getEvents',
      'description' => 'Get the events from a particular product.',
      'args' => 
      array (
        0 => 
        array (
          'name' => 'shopName',
          'type' => 'credentials',
          'info' => 'Domain of your shop.',
          'required' => true,
        ),
        1 => 
        array (
          'name' => 'accessToken',
          'type' => 'String',
          'info' => 'API access token that can be used to access the shop’s data as long as the client is installed.',
          'required' => true,
        ),
        2 => 
        array (
          'name' => 'objectType',
          'type' => 'String',
          'info' => 'Name type of object of event (products, orders).',
          'required' => false,
        ),
        3 => 
        array (
          'name' => 'objectTypeId',
          'type' => 'String',
          'info' => 'Type identifier of object of event.',
          'required' => false,
        ),
        4 => 
        array (
          'name' => 'limit',
          'type' => 'Number',
          'info' => 'Amount of results (default: 50) (maximum: 250).',
          'required' => false,
        ),
        5 => 
        array (
          'name' => 'page',
          'type' => 'Number',
          'info' => 'Page to show (default: 1).',
          'required' => false,
        ),
        6 => 
        array (
          'name' => 'sinceId',
          'type' => 'Number',
          'info' => 'Restrict results to after the specified ID.',
          'required' => false,
        ),
        7 => 
        array (
          'name' => 'createdAtMin',
          'type' => 'String',
          'info' => 'Show events created at or after date and time (format: 2014-04-25T16:15:47-04:00).',
          'required' => false,
        ),
        8 => 
        array (
          'name' => 'createdAtMax',
          'type' => 'String',
          'info' => 'Show events created at or before date and time (format: 2014-04-25T16:15:47-04:00).',
          'required' => false,
        ),
        9 => 
        array (
          'name' => 'filter',
          'type' => 'String',
          'info' => 'Only show events specified in filter.',
          'required' => false,
        ),
        10 => 
        array (
          'name' => 'verb',
          'type' => 'String',
          'info' => 'Only show events of a certain kind.',
          'required' => false,
        ),
        11 => 
        array (
          'name' => 'fields',
          'type' => 'String',
          'info' => 'comma-separated list of fields to include in the response.',
          'required' => false,
        ),
      ),
      'callbacks' => 
      array (
        0 => 
        array (
          'name' => 'error',
          'info' => 'Error',
        ),
        1 => 
        array (
          'name' => 'success',
          'info' => 'Success',
        ),
      ),
    ),
    33 => 
    array (
      'name' => 'getSingleEvent',
      'description' => 'The unique numeric identifier for the event.',
      'args' => 
      array (
        0 => 
        array (
          'name' => 'shopName',
          'type' => 'credentials',
          'info' => 'Domain of your shop.',
          'required' => true,
        ),
        1 => 
        array (
          'name' => 'accessToken',
          'type' => 'String',
          'info' => 'API access token that can be used to access the shop’s data as long as the client is installed.',
          'required' => true,
        ),
        2 => 
        array (
          'name' => 'eventId',
          'type' => 'Number',
          'info' => 'The unique numeric identifier for the event.',
          'required' => true,
        ),
        3 => 
        array (
          'name' => 'fields',
          'type' => 'String',
          'info' => 'Comma-separated list of fields to include in the response.',
          'required' => false,
        ),
      ),
      'callbacks' => 
      array (
        0 => 
        array (
          'name' => 'error',
          'info' => 'Error',
        ),
        1 => 
        array (
          'name' => 'success',
          'info' => 'Success',
        ),
      ),
    ),
    34 => 
    array (
      'name' => 'getEventByType',
      'description' => '.',
      'args' => 
      array (
        0 => 
        array (
          'name' => 'shopName',
          'type' => 'credentials',
          'info' => 'Domain of your shop.',
          'required' => true,
        ),
        1 => 
        array (
          'name' => 'accessToken',
          'type' => 'String',
          'info' => 'API access token that can be used to access the shop’s data as long as the client is installed.',
          'required' => true,
        ),
        2 => 
        array (
          'name' => 'objectType',
          'type' => 'String',
          'info' => 'Name type of object of event (products, orders).',
          'required' => true,
        ),
        3 => 
        array (
          'name' => 'objectTypeId',
          'type' => 'String',
          'info' => 'The unique numeric identifier of the object.',
          'required' => true,
        ),
        4 => 
        array (
          'name' => 'limit',
          'type' => 'Number',
          'info' => 'Amount of results (default: 50) (maximum: 250).',
          'required' => false,
        ),
        5 => 
        array (
          'name' => 'page',
          'type' => 'Number',
          'info' => 'Page to show (default: 1).',
          'required' => false,
        ),
        6 => 
        array (
          'name' => 'sinceId',
          'type' => 'Number',
          'info' => 'Restrict results to after the specified ID.',
          'required' => false,
        ),
        7 => 
        array (
          'name' => 'createdAtMin',
          'type' => 'String',
          'info' => 'Show events created at or after date and time (format: 2014-04-25T16:15:47-04:00).',
          'required' => false,
        ),
        8 => 
        array (
          'name' => 'createdAtMax',
          'type' => 'String',
          'info' => 'Show events created at or before date and time (format: 2014-04-25T16:15:47-04:00).',
          'required' => false,
        ),
        9 => 
        array (
          'name' => 'filter',
          'type' => 'String',
          'info' => 'Only show events specified in filter.',
          'required' => false,
        ),
        10 => 
        array (
          'name' => 'verb',
          'type' => 'String',
          'info' => 'Only show events of a certain kind.',
          'required' => false,
        ),
        11 => 
        array (
          'name' => 'fields',
          'type' => 'String',
          'info' => 'comma-separated list of fields to include in the response.',
          'required' => false,
        ),
      ),
      'callbacks' => 
      array (
        0 => 
        array (
          'name' => 'error',
          'info' => 'Error',
        ),
        1 => 
        array (
          'name' => 'success',
          'info' => 'Success',
        ),
      ),
    ),
    35 => 
    array (
      'name' => 'getEventsCount',
      'description' => '.',
      'args' => 
      array (
        0 => 
        array (
          'name' => 'shopName',
          'type' => 'credentials',
          'info' => 'Domain of your shop.',
          'required' => true,
        ),
        1 => 
        array (
          'name' => 'accessToken',
          'type' => 'String',
          'info' => 'API access token that can be used to access the shop’s data as long as the client is installed.',
          'required' => true,
        ),
        2 => 
        array (
          'name' => 'createdAtMin',
          'type' => 'String',
          'info' => 'Count events created at or after date and time (format: 2014-04-25T16:15:47-04:00).',
          'required' => false,
        ),
        3 => 
        array (
          'name' => 'createdAtMax',
          'type' => 'String',
          'info' => 'Count events created at or before date and time (format: 2014-04-25T16:15:47-04:00).',
          'required' => false,
        ),
      ),
      'callbacks' => 
      array (
        0 => 
        array (
          'name' => 'error',
          'info' => 'Error',
        ),
        1 => 
        array (
          'name' => 'success',
          'info' => 'Success',
        ),
      ),
    ),
    36 => 
    array (
      'name' => 'getProducts',
      'description' => 'Get a list of products.',
      'args' => 
      array (
        0 => 
        array (
          'name' => 'shopName',
          'type' => 'credentials',
          'info' => 'Domain of your shop.',
          'required' => true,
        ),
        1 => 
        array (
          'name' => 'accessToken',
          'type' => 'String',
          'info' => 'API access token that can be used to access the shop’s data as long as the client is installed.',
          'required' => true,
        ),
        2 => 
        array (
          'name' => 'ids',
          'type' => 'String',
          'info' => 'A comma-separated list of product ids.',
          'required' => false,
        ),
        3 => 
        array (
          'name' => 'limit',
          'type' => 'Number',
          'info' => 'Amount of results (default: 50) (maximum: 250).',
          'required' => false,
        ),
        4 => 
        array (
          'name' => 'page',
          'type' => 'Number',
          'info' => 'Page to show (default: 1).',
          'required' => false,
        ),
        5 => 
        array (
          'name' => 'sinceId',
          'type' => 'Number',
          'info' => 'Restrict results to after the specified ID.',
          'required' => false,
        ),
        6 => 
        array (
          'name' => 'title',
          'type' => 'String',
          'info' => 'Filter by product title.',
          'required' => false,
        ),
        7 => 
        array (
          'name' => 'vendor',
          'type' => 'String',
          'info' => 'Filter by product vendor.',
          'required' => false,
        ),
        8 => 
        array (
          'name' => 'handle',
          'type' => 'String',
          'info' => 'Filter by product handle.',
          'required' => false,
        ),
        9 => 
        array (
          'name' => 'productType',
          'type' => 'String',
          'info' => 'Filter by product type.',
          'required' => false,
        ),
        10 => 
        array (
          'name' => 'collectionId',
          'type' => 'Number',
          'info' => 'Filter by collection id.',
          'required' => false,
        ),
        11 => 
        array (
          'name' => 'createdAtMin',
          'type' => 'String',
          'info' => 'Show products created after date (format: 2014-04-25T16:15:47-04:00).',
          'required' => false,
        ),
        12 => 
        array (
          'name' => 'createdAtMax',
          'type' => 'String',
          'info' => 'Show products created before date (format: 2014-04-25T16:15:47-04:00).',
          'required' => false,
        ),
        13 => 
        array (
          'name' => 'updatedAtMin',
          'type' => 'String',
          'info' => 'Show products last updated after date (format: 2014-04-25T16:15:47-04:00).',
          'required' => false,
        ),
        14 => 
        array (
          'name' => 'updatedAtMax',
          'type' => 'String',
          'info' => 'Show products last updated before date (format: 2014-04-25T16:15:47-04:00).',
          'required' => false,
        ),
        15 => 
        array (
          'name' => 'publishedAtMin',
          'type' => 'String',
          'info' => 'Show products published after date (format: 2014-04-25T16:15:47-04:00).',
          'required' => false,
        ),
        16 => 
        array (
          'name' => 'publishedAtMax',
          'type' => 'String',
          'info' => 'Show products published before date (format: 2014-04-25T16:15:47-04:00).',
          'required' => false,
        ),
        17 => 
        array (
          'name' => 'publishedStatus',
          'type' => 'String',
          'info' => 'published - Show only published products, unpublished - Show only unpublished products, any - Show all products (default).',
          'required' => false,
        ),
        18 => 
        array (
          'name' => 'fields',
          'type' => 'String',
          'info' => 'comma-separated list of fields to include in the response.',
          'required' => false,
        ),
      ),
      'callbacks' => 
      array (
        0 => 
        array (
          'name' => 'error',
          'info' => 'Error',
        ),
        1 => 
        array (
          'name' => 'success',
          'info' => 'Success',
        ),
      ),
    ),
    37 => 
    array (
      'name' => 'getProductsCount',
      'description' => 'Get a count of all products of a given collection.',
      'args' => 
      array (
        0 => 
        array (
          'name' => 'shopName',
          'type' => 'credentials',
          'info' => 'Domain of your shop.',
          'required' => true,
        ),
        1 => 
        array (
          'name' => 'accessToken',
          'type' => 'String',
          'info' => 'API access token that can be used to access the shop’s data as long as the client is installed.',
          'required' => true,
        ),
        2 => 
        array (
          'name' => 'vendor',
          'type' => 'String',
          'info' => 'Filter by product vendor.',
          'required' => false,
        ),
        3 => 
        array (
          'name' => 'productType',
          'type' => 'String',
          'info' => 'Filter by product type.',
          'required' => false,
        ),
        4 => 
        array (
          'name' => 'collectionId',
          'type' => 'Number',
          'info' => 'Filter by collection id.',
          'required' => false,
        ),
        5 => 
        array (
          'name' => 'createdAtMin',
          'type' => 'String',
          'info' => 'Show products created after date (format: 2014-04-25T16:15:47-04:00).',
          'required' => false,
        ),
        6 => 
        array (
          'name' => 'createdAtMax',
          'type' => 'String',
          'info' => 'Show products created before date (format: 2014-04-25T16:15:47-04:00).',
          'required' => false,
        ),
        7 => 
        array (
          'name' => 'updatedAtMin',
          'type' => 'String',
          'info' => 'Show products last updated after date (format: 2014-04-25T16:15:47-04:00).',
          'required' => false,
        ),
        8 => 
        array (
          'name' => 'updatedAtMax',
          'type' => 'String',
          'info' => 'Show products last updated before date (format: 2014-04-25T16:15:47-04:00).',
          'required' => false,
        ),
        9 => 
        array (
          'name' => 'publishedAtMin',
          'type' => 'String',
          'info' => 'Show products published after date (format: 2014-04-25T16:15:47-04:00).',
          'required' => false,
        ),
        10 => 
        array (
          'name' => 'publishedAtMax',
          'type' => 'String',
          'info' => 'Show products published before date (format: 2014-04-25T16:15:47-04:00).',
          'required' => false,
        ),
        11 => 
        array (
          'name' => 'publishedStatus',
          'type' => 'String',
          'info' => 'published - Show only published products, unpublished - Show only unpublished products, any - Show all products (default).',
          'required' => false,
        ),
      ),
      'callbacks' => 
      array (
        0 => 
        array (
          'name' => 'error',
          'info' => 'Error',
        ),
        1 => 
        array (
          'name' => 'success',
          'info' => 'Success',
        ),
      ),
    ),
    38 => 
    array (
      'name' => 'getSingleProduct',
      'description' => 'Get a single product.',
      'args' => 
      array (
        0 => 
        array (
          'name' => 'shopName',
          'type' => 'credentials',
          'info' => 'Domain of your shop.',
          'required' => true,
        ),
        1 => 
        array (
          'name' => 'accessToken',
          'type' => 'String',
          'info' => 'API access token that can be used to access the shop’s data as long as the client is installed.',
          'required' => true,
        ),
        2 => 
        array (
          'name' => 'productId',
          'type' => 'Number',
          'info' => 'The unique numeric identifier for the product.',
          'required' => true,
        ),
        3 => 
        array (
          'name' => 'fields',
          'type' => 'String',
          'info' => 'Comma-separated list of fields to include in the response.',
          'required' => false,
        ),
      ),
      'callbacks' => 
      array (
        0 => 
        array (
          'name' => 'error',
          'info' => 'Error',
        ),
        1 => 
        array (
          'name' => 'success',
          'info' => 'Success',
        ),
      ),
    ),
    39 => 
    array (
      'name' => 'createProduct',
      'description' => 'Create a new product.',
      'args' => 
      array (
        0 => 
        array (
          'name' => 'shopName',
          'type' => 'credentials',
          'info' => 'Domain of your shop.',
          'required' => true,
        ),
        1 => 
        array (
          'name' => 'accessToken',
          'type' => 'String',
          'info' => 'API access token that can be used to access the shop’s data as long as the client is installed.',
          'required' => true,
        ),
        2 => 
        array (
          'name' => 'title',
          'type' => 'String',
          'info' => 'The name of the product. In a shop\'s catalog, clicking on a product\'s title takes you to that product\'s page. On a product\'s page, the product\'s title typically appears in a large font.',
          'required' => true,
        ),
        3 => 
        array (
          'name' => 'bodyHtml',
          'type' => 'String',
          'info' => 'The description of the product, complete with HTML formatting.',
          'required' => false,
        ),
        4 => 
        array (
          'name' => 'productType',
          'type' => 'String',
          'info' => 'A categorization that a product can be tagged with, commonly used for filtering and searching.',
          'required' => false,
        ),
        5 => 
        array (
          'name' => 'imageSrc',
          'type' => 'File',
          'info' => 'Image associated with the product.',
          'required' => false,
        ),
        6 => 
        array (
          'name' => 'vendor',
          'type' => 'String',
          'info' => 'The name of the vendor of the product.',
          'required' => false,
        ),
        7 => 
        array (
          'name' => 'variants',
          'type' => 'Array',
          'info' => 'Array of JSON objects. List of variant objects, each one representing a slightly different version of the product. For example, if a product comes in different sizes and colors, each size and color permutation (such as \'small black\', \'medium black\', \'large blue\'), would be a variant.',
          'required' => false,
        ),
        8 => 
        array (
          'name' => 'tags',
          'type' => 'String',
          'info' => 'A categorization that a product can be tagged with, commonly used for filtering and searching. Each comma-separated tag has a character limit of 255.',
          'required' => false,
        ),
        9 => 
        array (
          'name' => 'published',
          'type' => 'Boolean',
          'info' => 'Is published product.',
          'required' => false,
        ),
      ),
      'callbacks' => 
      array (
        0 => 
        array (
          'name' => 'error',
          'info' => 'Error',
        ),
        1 => 
        array (
          'name' => 'success',
          'info' => 'Success',
        ),
      ),
    ),
    40 => 
    array (
      'name' => 'updateProduct',
      'description' => 'Update a product and associated variants and images.',
      'args' => 
      array (
        0 => 
        array (
          'name' => 'shopName',
          'type' => 'credentials',
          'info' => 'Domain of your shop.',
          'required' => true,
        ),
        1 => 
        array (
          'name' => 'accessToken',
          'type' => 'String',
          'info' => 'API access token that can be used to access the shop’s data as long as the client is installed.',
          'required' => true,
        ),
        2 => 
        array (
          'name' => 'productId',
          'type' => 'Number',
          'info' => 'The unique numeric identifier for the product.',
          'required' => true,
        ),
        3 => 
        array (
          'name' => 'title',
          'type' => 'String',
          'info' => 'The name of the product. In a shop\'s catalog, clicking on a product\'s title takes you to that product\'s page. On a product\'s page, the product\'s title typically appears in a large font.',
          'required' => false,
        ),
        4 => 
        array (
          'name' => 'bodyHtml',
          'type' => 'String',
          'info' => 'The description of the product, complete with HTML formatting.',
          'required' => false,
        ),
        5 => 
        array (
          'name' => 'productType',
          'type' => 'String',
          'info' => 'A categorization that a product can be tagged with, commonly used for filtering and searching.',
          'required' => false,
        ),
        6 => 
        array (
          'name' => 'vendor',
          'type' => 'String',
          'info' => 'The name of the vendor of the product.',
          'required' => false,
        ),
        7 => 
        array (
          'name' => 'variants',
          'type' => 'Array',
          'info' => 'Array of JSON objects. List of variant objects, each one representing a slightly different version of the product. For example, if a product comes in different sizes and colors, each size and color permutation (such as \'small black\', \'medium black\', \'large blue\'), would be a variant..',
          'required' => false,
        ),
        8 => 
        array (
          'name' => 'tags',
          'type' => 'String',
          'info' => 'A categorization that a product can be tagged with, commonly used for filtering and searching. Each comma-separated tag has a character limit of 255.',
          'required' => false,
        ),
        9 => 
        array (
          'name' => 'published',
          'type' => 'Boolean',
          'info' => 'Is published product.',
          'required' => false,
        ),
      ),
      'callbacks' => 
      array (
        0 => 
        array (
          'name' => 'error',
          'info' => 'Error',
        ),
        1 => 
        array (
          'name' => 'success',
          'info' => 'Success',
        ),
      ),
    ),
    41 => 
    array (
      'name' => 'deleteProduct',
      'description' => 'Remove a product from the shop.',
      'args' => 
      array (
        0 => 
        array (
          'name' => 'shopName',
          'type' => 'credentials',
          'info' => 'Domain of your shop.',
          'required' => true,
        ),
        1 => 
        array (
          'name' => 'accessToken',
          'type' => 'String',
          'info' => 'API access token that can be used to access the shop’s data as long as the client is installed.',
          'required' => true,
        ),
        2 => 
        array (
          'name' => 'productId',
          'type' => 'Number',
          'info' => 'The unique numeric identifier for the product.',
          'required' => true,
        ),
      ),
      'callbacks' => 
      array (
        0 => 
        array (
          'name' => 'error',
          'info' => 'Error',
        ),
        1 => 
        array (
          'name' => 'success',
          'info' => 'Success',
        ),
      ),
    ),
    42 => 
    array (
      'name' => 'getProductImages',
      'description' => 'Get all product images.',
      'args' => 
      array (
        0 => 
        array (
          'name' => 'shopName',
          'type' => 'credentials',
          'info' => 'Domain of your shop.',
          'required' => true,
        ),
        1 => 
        array (
          'name' => 'accessToken',
          'type' => 'String',
          'info' => 'API access token that can be used to access the shop’s data as long as the client is installed.',
          'required' => true,
        ),
        2 => 
        array (
          'name' => 'productId',
          'type' => 'Number',
          'info' => 'The unique numeric identifier for the product.',
          'required' => true,
        ),
        3 => 
        array (
          'name' => 'sinceId',
          'type' => 'Number',
          'info' => 'Restrict results to after the specified ID.',
          'required' => false,
        ),
        4 => 
        array (
          'name' => 'fields',
          'type' => 'String',
          'info' => 'comma-separated list of fields to include in the response.',
          'required' => false,
        ),
      ),
      'callbacks' => 
      array (
        0 => 
        array (
          'name' => 'error',
          'info' => 'Error',
        ),
        1 => 
        array (
          'name' => 'success',
          'info' => 'Success',
        ),
      ),
    ),
    43 => 
    array (
      'name' => 'getProductImagesCount',
      'description' => 'Get a count of all product images.',
      'args' => 
      array (
        0 => 
        array (
          'name' => 'shopName',
          'type' => 'credentials',
          'info' => 'Domain of your shop.',
          'required' => true,
        ),
        1 => 
        array (
          'name' => 'accessToken',
          'type' => 'String',
          'info' => 'API access token that can be used to access the shop’s data as long as the client is installed.',
          'required' => true,
        ),
        2 => 
        array (
          'name' => 'productId',
          'type' => 'Number',
          'info' => 'The unique numeric identifier for the product.',
          'required' => true,
        ),
        3 => 
        array (
          'name' => 'sinceId',
          'type' => 'Number',
          'info' => 'Restrict results to after the specified ID.',
          'required' => false,
        ),
        4 => 
        array (
          'name' => 'createdAtMin',
          'type' => 'String',
          'info' => 'Count articles created after date (format: 2014-04-25T16:15:47-04:00).',
          'required' => false,
        ),
        5 => 
        array (
          'name' => 'createdAtMax',
          'type' => 'String',
          'info' => 'Count articles created before date (format: 2014-04-25T16:15:47-04:00).',
          'required' => false,
        ),
        6 => 
        array (
          'name' => 'updatedAtMin',
          'type' => 'String',
          'info' => 'Count articles last updated after date (format: 2014-04-25T16:15:47-04:00).',
          'required' => false,
        ),
        7 => 
        array (
          'name' => 'updatedAtMax',
          'type' => 'String',
          'info' => 'Count articles last updated before date (format: 2014-04-25T16:15:47-04:00).',
          'required' => false,
        ),
        8 => 
        array (
          'name' => 'publishedAtMin',
          'type' => 'String',
          'info' => 'Count articles published after date (format: 2014-04-25T16:15:47-04:00).',
          'required' => false,
        ),
        9 => 
        array (
          'name' => 'publishedAtMax',
          'type' => 'String',
          'info' => 'Count articles published before date (format: 2014-04-25T16:15:47-04:00).',
          'required' => false,
        ),
      ),
      'callbacks' => 
      array (
        0 => 
        array (
          'name' => 'error',
          'info' => 'Error',
        ),
        1 => 
        array (
          'name' => 'success',
          'info' => 'Success',
        ),
      ),
    ),
    44 => 
    array (
      'name' => 'getSingleProductImage',
      'description' => 'Get a single product image by id.',
      'args' => 
      array (
        0 => 
        array (
          'name' => 'shopName',
          'type' => 'credentials',
          'info' => 'Domain of your shop.',
          'required' => true,
        ),
        1 => 
        array (
          'name' => 'accessToken',
          'type' => 'String',
          'info' => 'API access token that can be used to access the shop’s data as long as the client is installed.',
          'required' => true,
        ),
        2 => 
        array (
          'name' => 'productId',
          'type' => 'Number',
          'info' => 'The unique numeric identifier for the product.',
          'required' => true,
        ),
        3 => 
        array (
          'name' => 'imageId',
          'type' => 'Number',
          'info' => 'A unique numeric identifier for the product image.',
          'required' => true,
        ),
        4 => 
        array (
          'name' => 'fields',
          'type' => 'String',
          'info' => 'Comma-separated list of fields to include in the response.',
          'required' => false,
        ),
      ),
      'callbacks' => 
      array (
        0 => 
        array (
          'name' => 'error',
          'info' => 'Error',
        ),
        1 => 
        array (
          'name' => 'success',
          'info' => 'Success',
        ),
      ),
    ),
    45 => 
    array (
      'name' => 'createProductImage',
      'description' => 'Create a new product image.',
      'args' => 
      array (
        0 => 
        array (
          'name' => 'shopName',
          'type' => 'credentials',
          'info' => 'Domain of your shop.',
          'required' => true,
        ),
        1 => 
        array (
          'name' => 'accessToken',
          'type' => 'String',
          'info' => 'API access token that can be used to access the shop’s data as long as the client is installed.',
          'required' => true,
        ),
        2 => 
        array (
          'name' => 'productId',
          'type' => 'Number',
          'info' => 'The unique numeric identifier for the product.',
          'required' => true,
        ),
        3 => 
        array (
          'name' => 'imageSrc',
          'type' => 'File',
          'info' => 'Specifies the location of the product image.',
          'required' => true,
        ),
        4 => 
        array (
          'name' => 'filename',
          'type' => 'String',
          'info' => 'Custom image file name.',
          'required' => false,
        ),
        5 => 
        array (
          'name' => 'position',
          'type' => 'String',
          'info' => 'The order of the product image in the list. The first product image is at position 1 and is the \'main\' image for the product.',
          'required' => false,
        ),
        6 => 
        array (
          'name' => 'metafieldsKey',
          'type' => 'String',
          'info' => 'Identifier for the metafield (maximum of 30 characters).',
          'required' => false,
        ),
        7 => 
        array (
          'name' => 'metafieldsValue',
          'type' => 'String',
          'info' => 'Information to be stored as metadata.',
          'required' => false,
        ),
        8 => 
        array (
          'name' => 'metafieldsValueType',
          'type' => 'String',
          'info' => 'States whether the information in the value is stored as a \'string\' or \'integer\'.',
          'required' => false,
        ),
        9 => 
        array (
          'name' => 'metafieldsNamespace',
          'type' => 'String',
          'info' => 'Container for a set of metadata. Namespaces help distinguish between metadata you created against metadata created by another individual with a similar namespace (maximum of 20 characters).',
          'required' => false,
        ),
        10 => 
        array (
          'name' => 'variantIds',
          'type' => 'String',
          'info' => 'comma-separated list of variant ids associated with the image.',
          'required' => false,
        ),
      ),
      'callbacks' => 
      array (
        0 => 
        array (
          'name' => 'error',
          'info' => 'Error',
        ),
        1 => 
        array (
          'name' => 'success',
          'info' => 'Success',
        ),
      ),
    ),
    46 => 
    array (
      'name' => 'updateProductImage',
      'description' => 'Modify an existing product image.',
      'args' => 
      array (
        0 => 
        array (
          'name' => 'shopName',
          'type' => 'credentials',
          'info' => 'Domain of your shop.',
          'required' => true,
        ),
        1 => 
        array (
          'name' => 'accessToken',
          'type' => 'String',
          'info' => 'API access token that can be used to access the shop’s data as long as the client is installed.',
          'required' => true,
        ),
        2 => 
        array (
          'name' => 'productId',
          'type' => 'Number',
          'info' => 'The unique numeric identifier for the product.',
          'required' => true,
        ),
        3 => 
        array (
          'name' => 'imageId',
          'type' => 'Number',
          'info' => 'A unique numeric identifier for the product image.',
          'required' => true,
        ),
        4 => 
        array (
          'name' => 'position',
          'type' => 'String',
          'info' => 'The order of the product image in the list. The first product image is at position 1 and is the \'main\' image for the product.',
          'required' => false,
        ),
        5 => 
        array (
          'name' => 'metafieldsKey',
          'type' => 'String',
          'info' => 'Identifier for the metafield (maximum of 30 characters).',
          'required' => false,
        ),
        6 => 
        array (
          'name' => 'metafieldsValue',
          'type' => 'String',
          'info' => 'Information to be stored as metadata.',
          'required' => false,
        ),
        7 => 
        array (
          'name' => 'metafieldsValueType',
          'type' => 'String',
          'info' => 'States whether the information in the value is stored as a \'string\' or \'integer\'.',
          'required' => false,
        ),
        8 => 
        array (
          'name' => 'metafieldsNamespace',
          'type' => 'String',
          'info' => 'Container for a set of metadata. Namespaces help distinguish between metadata you created against metadata created by another individual with a similar namespace (maximum of 20 characters).',
          'required' => false,
        ),
        9 => 
        array (
          'name' => 'variantIds',
          'type' => 'String',
          'info' => 'comma-separated list of variant ids associated with the image.',
          'required' => false,
        ),
      ),
      'callbacks' => 
      array (
        0 => 
        array (
          'name' => 'error',
          'info' => 'Error',
        ),
        1 => 
        array (
          'name' => 'success',
          'info' => 'Success',
        ),
      ),
    ),
    47 => 
    array (
      'name' => 'deleteProductImage',
      'description' => 'Delete a product image.',
      'args' => 
      array (
        0 => 
        array (
          'name' => 'shopName',
          'type' => 'credentials',
          'info' => 'Domain of your shop.',
          'required' => true,
        ),
        1 => 
        array (
          'name' => 'accessToken',
          'type' => 'String',
          'info' => 'API access token that can be used to access the shop’s data as long as the client is installed.',
          'required' => true,
        ),
        2 => 
        array (
          'name' => 'productId',
          'type' => 'Number',
          'info' => 'The unique numeric identifier for the product.',
          'required' => true,
        ),
        3 => 
        array (
          'name' => 'imageId',
          'type' => 'Number',
          'info' => 'A unique numeric identifier for the product image.',
          'required' => true,
        ),
      ),
      'callbacks' => 
      array (
        0 => 
        array (
          'name' => 'error',
          'info' => 'Error',
        ),
        1 => 
        array (
          'name' => 'success',
          'info' => 'Success',
        ),
      ),
    ),
    48 => 
    array (
      'name' => 'getProductVariants',
      'description' => 'Get a list of product variants.',
      'args' => 
      array (
        0 => 
        array (
          'name' => 'shopName',
          'type' => 'credentials',
          'info' => 'Domain of your shop.',
          'required' => true,
        ),
        1 => 
        array (
          'name' => 'accessToken',
          'type' => 'String',
          'info' => 'API access token that can be used to access the shop’s data as long as the client is installed.',
          'required' => true,
        ),
        2 => 
        array (
          'name' => 'productId',
          'type' => 'Number',
          'info' => 'The unique numeric identifier for the product.',
          'required' => true,
        ),
        3 => 
        array (
          'name' => 'limit',
          'type' => 'Number',
          'info' => 'Amount of results (default: 50) (maximum: 250).',
          'required' => false,
        ),
        4 => 
        array (
          'name' => 'page',
          'type' => 'Number',
          'info' => 'Page to show (default: 1).',
          'required' => false,
        ),
        5 => 
        array (
          'name' => 'sinceId',
          'type' => 'Number',
          'info' => 'Restrict results to after the specified ID.',
          'required' => false,
        ),
        6 => 
        array (
          'name' => 'fields',
          'type' => 'String',
          'info' => 'comma-separated list of fields to include in the response.',
          'required' => false,
        ),
      ),
      'callbacks' => 
      array (
        0 => 
        array (
          'name' => 'error',
          'info' => 'Error',
        ),
        1 => 
        array (
          'name' => 'success',
          'info' => 'Success',
        ),
      ),
    ),
    49 => 
    array (
      'name' => 'getProductVariantsCount',
      'description' => 'Get a count of product variants.',
      'args' => 
      array (
        0 => 
        array (
          'name' => 'shopName',
          'type' => 'credentials',
          'info' => 'Domain of your shop.',
          'required' => true,
        ),
        1 => 
        array (
          'name' => 'accessToken',
          'type' => 'String',
          'info' => 'API access token that can be used to access the shop’s data as long as the client is installed.',
          'required' => true,
        ),
        2 => 
        array (
          'name' => 'productId',
          'type' => 'Number',
          'info' => 'The unique numeric identifier for the product.',
          'required' => true,
        ),
      ),
      'callbacks' => 
      array (
        0 => 
        array (
          'name' => 'error',
          'info' => 'Error',
        ),
        1 => 
        array (
          'name' => 'success',
          'info' => 'Success',
        ),
      ),
    ),
    50 => 
    array (
      'name' => 'getSingleProductVariant',
      'description' => 'Get a single product variant by id.',
      'args' => 
      array (
        0 => 
        array (
          'name' => 'shopName',
          'type' => 'credentials',
          'info' => 'Domain of your shop.',
          'required' => true,
        ),
        1 => 
        array (
          'name' => 'accessToken',
          'type' => 'String',
          'info' => 'API access token that can be used to access the shop’s data as long as the client is installed.',
          'required' => true,
        ),
        2 => 
        array (
          'name' => 'variantId',
          'type' => 'Number',
          'info' => 'The unique numeric identifier for the product variant.',
          'required' => true,
        ),
      ),
      'callbacks' => 
      array (
        0 => 
        array (
          'name' => 'error',
          'info' => 'Error',
        ),
        1 => 
        array (
          'name' => 'success',
          'info' => 'Success',
        ),
      ),
    ),
    51 => 
    array (
      'name' => 'createProductVariant',
      'description' => 'Create a new product variant.',
      'args' => 
      array (
        0 => 
        array (
          'name' => 'shopName',
          'type' => 'credentials',
          'info' => 'Domain of your shop.',
          'required' => true,
        ),
        1 => 
        array (
          'name' => 'accessToken',
          'type' => 'String',
          'info' => 'API access token that can be used to access the shop’s data as long as the client is installed.',
          'required' => true,
        ),
        2 => 
        array (
          'name' => 'productId',
          'type' => 'Number',
          'info' => 'The unique numeric identifier for the product.',
          'required' => true,
        ),
        3 => 
        array (
          'name' => 'variant',
          'type' => 'JSON',
          'info' => 'JSON Object with pair key - value for variant.',
          'required' => true,
        ),
      ),
      'callbacks' => 
      array (
        0 => 
        array (
          'name' => 'error',
          'info' => 'Error',
        ),
        1 => 
        array (
          'name' => 'success',
          'info' => 'Success',
        ),
      ),
    ),
    52 => 
    array (
      'name' => 'updateProductVariant',
      'description' => 'Update an existing product variant.',
      'args' => 
      array (
        0 => 
        array (
          'name' => 'shopName',
          'type' => 'credentials',
          'info' => 'Domain of your shop.',
          'required' => true,
        ),
        1 => 
        array (
          'name' => 'accessToken',
          'type' => 'String',
          'info' => 'API access token that can be used to access the shop’s data as long as the client is installed.',
          'required' => true,
        ),
        2 => 
        array (
          'name' => 'variantId',
          'type' => 'Number',
          'info' => 'The unique numeric identifier for the product variant.',
          'required' => true,
        ),
        3 => 
        array (
          'name' => 'variant',
          'type' => 'JSON',
          'info' => 'JSON Object with pair key - value for variant.',
          'required' => true,
        ),
      ),
      'callbacks' => 
      array (
        0 => 
        array (
          'name' => 'error',
          'info' => 'Error',
        ),
        1 => 
        array (
          'name' => 'success',
          'info' => 'Success',
        ),
      ),
    ),
    53 => 
    array (
      'name' => 'deleteProductVariant',
      'description' => 'Delete a product variant.',
      'args' => 
      array (
        0 => 
        array (
          'name' => 'shopName',
          'type' => 'credentials',
          'info' => 'Domain of your shop.',
          'required' => true,
        ),
        1 => 
        array (
          'name' => 'accessToken',
          'type' => 'String',
          'info' => 'API access token that can be used to access the shop’s data as long as the client is installed.',
          'required' => true,
        ),
        2 => 
        array (
          'name' => 'productId',
          'type' => 'Number',
          'info' => 'The unique numeric identifier for the product.',
          'required' => true,
        ),
        3 => 
        array (
          'name' => 'variantId',
          'type' => 'Number',
          'info' => 'The unique numeric identifier for the product variant.',
          'required' => true,
        ),
      ),
      'callbacks' => 
      array (
        0 => 
        array (
          'name' => 'error',
          'info' => 'Error',
        ),
        1 => 
        array (
          'name' => 'success',
          'info' => 'Success',
        ),
      ),
    ),
    54 => 
    array (
      'name' => 'getOrderRefunds',
      'description' => 'Retrieve a list of Refunds for an Order.',
      'args' => 
      array (
        0 => 
        array (
          'name' => 'shopName',
          'type' => 'credentials',
          'info' => 'Domain of your shop.',
          'required' => true,
        ),
        1 => 
        array (
          'name' => 'accessToken',
          'type' => 'String',
          'info' => 'API access token that can be used to access the shop’s data as long as the client is installed.',
          'required' => true,
        ),
        2 => 
        array (
          'name' => 'orderId',
          'type' => 'Number',
          'info' => 'The unique numeric identifier for the refund. This one is used for API purposes.',
          'required' => true,
        ),
        3 => 
        array (
          'name' => 'fields',
          'type' => 'String',
          'info' => 'comma-separated list of fields to include in the response.',
          'required' => false,
        ),
      ),
      'callbacks' => 
      array (
        0 => 
        array (
          'name' => 'error',
          'info' => 'Error',
        ),
        1 => 
        array (
          'name' => 'success',
          'info' => 'Success',
        ),
      ),
    ),
    55 => 
    array (
      'name' => 'getOrderSingleRefund',
      'description' => 'Retrieve a specific refund.',
      'args' => 
      array (
        0 => 
        array (
          'name' => 'shopName',
          'type' => 'credentials',
          'info' => 'Domain of your shop.',
          'required' => true,
        ),
        1 => 
        array (
          'name' => 'accessToken',
          'type' => 'String',
          'info' => 'API access token that can be used to access the shop’s data as long as the client is installed.',
          'required' => true,
        ),
        2 => 
        array (
          'name' => 'orderId',
          'type' => 'Number',
          'info' => 'The unique numeric identifier for the refund. This one is used for API purposes.',
          'required' => true,
        ),
        3 => 
        array (
          'name' => 'refundId',
          'type' => 'Number',
          'info' => 'The unique numeric identifier for the refund. This one is used for API purposes.',
          'required' => true,
        ),
        4 => 
        array (
          'name' => 'fields',
          'type' => 'String',
          'info' => 'comma-separated list of fields to include in the response.',
          'required' => false,
        ),
      ),
      'callbacks' => 
      array (
        0 => 
        array (
          'name' => 'error',
          'info' => 'Error',
        ),
        1 => 
        array (
          'name' => 'success',
          'info' => 'Success',
        ),
      ),
    ),
    56 => 
    array (
      'name' => 'calculateRefund',
      'description' => 'Calculate refund transactions based on line items and shipping. The returned response can be used to create a Refund. Note that returned transactions are of the kind "suggested_refund", which must to be changed to "refund" in order for them to be accepted.',
      'args' => 
      array (
        0 => 
        array (
          'name' => 'shopName',
          'type' => 'credentials',
          'info' => 'Domain of your shop.',
          'required' => true,
        ),
        1 => 
        array (
          'name' => 'accessToken',
          'type' => 'String',
          'info' => 'API access token that can be used to access the shop’s data as long as the client is installed.',
          'required' => true,
        ),
        2 => 
        array (
          'name' => 'orderId',
          'type' => 'Number',
          'info' => 'The unique numeric identifier for the refund. This one is used for API purposes.',
          'required' => true,
        ),
        3 => 
        array (
          'name' => 'shippingFullRefund',
          'type' => 'Boolean',
          'info' => 'Boolean, set to true to refund all remaining shipping.',
          'required' => false,
        ),
        4 => 
        array (
          'name' => 'shippingAmount',
          'type' => 'String',
          'info' => 'Set specific amount of shipping to refund. Takes precedence over full_refund.',
          'required' => false,
        ),
        5 => 
        array (
          'name' => 'refundLineItems',
          'type' => 'Array',
          'info' => 'Array of JSON objects, of line item IDs and quantities to refund.',
          'required' => false,
        ),
      ),
      'callbacks' => 
      array (
        0 => 
        array (
          'name' => 'error',
          'info' => 'Error',
        ),
        1 => 
        array (
          'name' => 'success',
          'info' => 'Success',
        ),
      ),
    ),
    57 => 
    array (
      'name' => 'createOrderRefund',
      'description' => 'Create a Refund for an existing Order. It is highly suggested that you use the calculate endpoint to produce the transactions to submit.',
      'args' => 
      array (
        0 => 
        array (
          'name' => 'shopName',
          'type' => 'credentials',
          'info' => 'Domain of your shop.',
          'required' => true,
        ),
        1 => 
        array (
          'name' => 'accessToken',
          'type' => 'String',
          'info' => 'API access token that can be used to access the shop’s data as long as the client is installed.',
          'required' => true,
        ),
        2 => 
        array (
          'name' => 'orderId',
          'type' => 'Number',
          'info' => 'The unique numeric identifier for the refund. This one is used for API purposes.',
          'required' => true,
        ),
        3 => 
        array (
          'name' => 'restock',
          'type' => 'Boolean',
          'info' => 'Boolean, whether or not to add the line items back to the store inventory.',
          'required' => false,
        ),
        4 => 
        array (
          'name' => 'notify',
          'type' => 'Boolean',
          'info' => 'Boolean, set to true to send a refund notification to the customer.',
          'required' => false,
        ),
        5 => 
        array (
          'name' => 'note',
          'type' => 'String',
          'info' => 'An optional comment attached to a refund.',
          'required' => false,
        ),
        6 => 
        array (
          'name' => 'discrepancyReason',
          'type' => 'String',
          'info' => 'An optional comment, used if there is a discrepancy between calculated and actual refund amounts (one of: restock, damage, customer, other).',
          'required' => false,
        ),
        7 => 
        array (
          'name' => 'shippingFullRefund',
          'type' => 'Boolean',
          'info' => 'Boolean, set to true to refund all remaining shipping.',
          'required' => false,
        ),
        8 => 
        array (
          'name' => 'shippingAmount',
          'type' => 'String',
          'info' => 'Set specific amount of shipping to refund. Takes precedence over full_refund.',
          'required' => false,
        ),
        9 => 
        array (
          'name' => 'refundLineItems',
          'type' => 'Array',
          'info' => 'Array of JSON objects. Array of line item IDs and quantities to refund.',
          'required' => false,
        ),
        10 => 
        array (
          'name' => 'transactions',
          'type' => 'Array',
          'info' => 'Array of JSON objects. Array of transactions to process as refunds.',
          'required' => false,
        ),
      ),
      'callbacks' => 
      array (
        0 => 
        array (
          'name' => 'error',
          'info' => 'Error',
        ),
        1 => 
        array (
          'name' => 'success',
          'info' => 'Success',
        ),
      ),
    ),
    58 => 
    array (
      'name' => 'getSingleShop',
      'description' => 'Get the configuration of the shop account.',
      'args' => 
      array (
        0 => 
        array (
          'name' => 'shopName',
          'type' => 'credentials',
          'info' => 'Domain of your shop.',
          'required' => true,
        ),
        1 => 
        array (
          'name' => 'accessToken',
          'type' => 'String',
          'info' => 'API access token that can be used to access the shop’s data as long as the client is installed.',
          'required' => true,
        ),
        2 => 
        array (
          'name' => 'fields',
          'type' => 'String',
          'info' => 'comma-separated list of fields to include in the response.',
          'required' => false,
        ),
      ),
      'callbacks' => 
      array (
        0 => 
        array (
          'name' => 'error',
          'info' => 'Error',
        ),
        1 => 
        array (
          'name' => 'success',
          'info' => 'Success',
        ),
      ),
    ),
    59 => 
    array (
      'name' => 'getTransactions',
      'description' => 'Get the Representation of all money transfers.',
      'args' => 
      array (
        0 => 
        array (
          'name' => 'shopName',
          'type' => 'credentials',
          'info' => 'Domain of your shop.',
          'required' => true,
        ),
        1 => 
        array (
          'name' => 'accessToken',
          'type' => 'String',
          'info' => 'API access token that can be used to access the shop’s data as long as the client is installed.',
          'required' => true,
        ),
        2 => 
        array (
          'name' => 'orderId',
          'type' => 'Number',
          'info' => 'The unique numeric identifier for the refund. This one is used for API purposes.',
          'required' => true,
        ),
        3 => 
        array (
          'name' => 'sinceId',
          'type' => 'Number',
          'info' => 'Restrict results to after the specified ID.',
          'required' => false,
        ),
        4 => 
        array (
          'name' => 'fields',
          'type' => 'String',
          'info' => 'comma-separated list of fields to include in the response.',
          'required' => false,
        ),
      ),
      'callbacks' => 
      array (
        0 => 
        array (
          'name' => 'error',
          'info' => 'Error',
        ),
        1 => 
        array (
          'name' => 'success',
          'info' => 'Success',
        ),
      ),
    ),
    60 => 
    array (
      'name' => 'getTransactionsCount',
      'description' => 'Count all a given order’s money transfers.',
      'args' => 
      array (
        0 => 
        array (
          'name' => 'shopName',
          'type' => 'credentials',
          'info' => 'Domain of your shop.',
          'required' => true,
        ),
        1 => 
        array (
          'name' => 'accessToken',
          'type' => 'String',
          'info' => 'API access token that can be used to access the shop’s data as long as the client is installed.',
          'required' => true,
        ),
        2 => 
        array (
          'name' => 'orderId',
          'type' => 'Number',
          'info' => 'The unique numeric identifier for the refund. This one is used for API purposes.',
          'required' => true,
        ),
      ),
      'callbacks' => 
      array (
        0 => 
        array (
          'name' => 'error',
          'info' => 'Error',
        ),
        1 => 
        array (
          'name' => 'success',
          'info' => 'Success',
        ),
      ),
    ),
    61 => 
    array (
      'name' => 'getSingleTransaction',
      'description' => 'Get the Representation of a specific transaction.',
      'args' => 
      array (
        0 => 
        array (
          'name' => 'shopName',
          'type' => 'credentials',
          'info' => 'Domain of your shop.',
          'required' => true,
        ),
        1 => 
        array (
          'name' => 'accessToken',
          'type' => 'String',
          'info' => 'API access token that can be used to access the shop’s data as long as the client is installed.',
          'required' => true,
        ),
        2 => 
        array (
          'name' => 'orderId',
          'type' => 'Number',
          'info' => 'The unique numeric identifier for the refund. This one is used for API purposes.',
          'required' => true,
        ),
        3 => 
        array (
          'name' => 'transactionId',
          'type' => 'Number',
          'info' => 'A unique numeric identifier for the transaction.',
          'required' => true,
        ),
        4 => 
        array (
          'name' => 'fields',
          'type' => 'String',
          'info' => 'comma-separated list of fields to include in the response.',
          'required' => false,
        ),
      ),
      'callbacks' => 
      array (
        0 => 
        array (
          'name' => 'error',
          'info' => 'Error',
        ),
        1 => 
        array (
          'name' => 'success',
          'info' => 'Success',
        ),
      ),
    ),
    62 => 
    array (
      'name' => 'createTransaction',
      'description' => 'Capture a previously authorized order.',
      'args' => 
      array (
        0 => 
        array (
          'name' => 'shopName',
          'type' => 'credentials',
          'info' => 'Domain of your shop.',
          'required' => true,
        ),
        1 => 
        array (
          'name' => 'accessToken',
          'type' => 'String',
          'info' => 'API access token that can be used to access the shop’s data as long as the client is installed.',
          'required' => true,
        ),
        2 => 
        array (
          'name' => 'orderId',
          'type' => 'Number',
          'info' => 'The unique numeric identifier for the refund. This one is used for API purposes.',
          'required' => true,
        ),
        3 => 
        array (
          'name' => 'kind',
          'type' => 'String',
          'info' => 'The kind of transaction: authorization - Money that the customer has agreed to pay. Authorization period lasts for up to 7 to 30 days (depending on your payment service) while a store awaits for a customer\'s capture. capture - Transfer of money that was reserved during the authorization of a shop. sale - The combination of authorization and capture, performed in one single step. void - The cancellation of a pending authorization or capture. refund - The partial or full return of the captured money to the customer.',
          'required' => true,
        ),
        4 => 
        array (
          'name' => 'amount',
          'type' => 'String',
          'info' => 'The amount of money that the transaction was for.',
          'required' => false,
        ),
      ),
      'callbacks' => 
      array (
        0 => 
        array (
          'name' => 'error',
          'info' => 'Error',
        ),
        1 => 
        array (
          'name' => 'success',
          'info' => 'Success',
        ),
      ),
    ),
    63 => 
    array (
      'name' => 'createUsageCharge',
      'description' => 'Create a new charge.',
      'args' => 
      array (
        0 => 
        array (
          'name' => 'shopName',
          'type' => 'credentials',
          'info' => 'Domain of your shop.',
          'required' => true,
        ),
        1 => 
        array (
          'name' => 'accessToken',
          'type' => 'String',
          'info' => 'API access token that can be used to access the shop’s data as long as the client is installed.',
          'required' => true,
        ),
        2 => 
        array (
          'name' => 'applicationChargeId',
          'type' => 'Number',
          'info' => 'A unique numeric identifier for the application charge.',
          'required' => true,
        ),
        3 => 
        array (
          'name' => 'description',
          'type' => 'String',
          'info' => 'The name of the usage charge.',
          'required' => false,
        ),
        4 => 
        array (
          'name' => 'price',
          'type' => 'String',
          'info' => 'The price of the usage charge.',
          'required' => false,
        ),
      ),
      'callbacks' => 
      array (
        0 => 
        array (
          'name' => 'error',
          'info' => 'Error',
        ),
        1 => 
        array (
          'name' => 'success',
          'info' => 'Success',
        ),
      ),
    ),
    64 => 
    array (
      'name' => 'getSingleUsageCharge',
      'description' => 'Retrieve a single charge.',
      'args' => 
      array (
        0 => 
        array (
          'name' => 'shopName',
          'type' => 'credentials',
          'info' => 'Domain of your shop.',
          'required' => true,
        ),
        1 => 
        array (
          'name' => 'accessToken',
          'type' => 'String',
          'info' => 'API access token that can be used to access the shop’s data as long as the client is installed.',
          'required' => true,
        ),
        2 => 
        array (
          'name' => 'applicationChargeId',
          'type' => 'Number',
          'info' => 'A unique numeric identifier for the application charge.',
          'required' => true,
        ),
        3 => 
        array (
          'name' => 'chargeId',
          'type' => 'Number',
          'info' => 'A unique numeric identifier for the usage charge.',
          'required' => true,
        ),
        4 => 
        array (
          'name' => 'fields',
          'type' => 'String',
          'info' => 'comma-separated list of fields to include in the response.',
          'required' => false,
        ),
      ),
      'callbacks' => 
      array (
        0 => 
        array (
          'name' => 'error',
          'info' => 'Error',
        ),
        1 => 
        array (
          'name' => 'success',
          'info' => 'Success',
        ),
      ),
    ),
    65 => 
    array (
      'name' => 'getUsageCharges',
      'description' => 'All past and present usage charges requests are retrieved by this request.',
      'args' => 
      array (
        0 => 
        array (
          'name' => 'shopName',
          'type' => 'credentials',
          'info' => 'Domain of your shop.',
          'required' => true,
        ),
        1 => 
        array (
          'name' => 'accessToken',
          'type' => 'String',
          'info' => 'API access token that can be used to access the shop’s data as long as the client is installed.',
          'required' => true,
        ),
        2 => 
        array (
          'name' => 'applicationChargeId',
          'type' => 'Number',
          'info' => 'A unique numeric identifier for the application charge.',
          'required' => true,
        ),
        3 => 
        array (
          'name' => 'fields',
          'type' => 'String',
          'info' => 'comma-separated list of fields to include in the response.',
          'required' => false,
        ),
      ),
      'callbacks' => 
      array (
        0 => 
        array (
          'name' => 'error',
          'info' => 'Error',
        ),
        1 => 
        array (
          'name' => 'success',
          'info' => 'Success',
        ),
      ),
    ),
    66 => 
    array (
      'name' => 'getSmartCollections',
      'description' => 'Get a list of all smart collections that contain a given product.',
      'args' => 
      array (
        0 => 
        array (
          'name' => 'shopName',
          'type' => 'credentials',
          'info' => 'Domain of your shop.',
          'required' => true,
        ),
        1 => 
        array (
          'name' => 'accessToken',
          'type' => 'String',
          'info' => 'API access token that can be used to access the shop’s data as long as the client is installed.',
          'required' => true,
        ),
        2 => 
        array (
          'name' => 'limit',
          'type' => 'Number',
          'info' => 'Amount of results (default: 50) (maximum: 250).',
          'required' => false,
        ),
        3 => 
        array (
          'name' => 'page',
          'type' => 'Number',
          'info' => 'Page to show (default: 1).',
          'required' => false,
        ),
        4 => 
        array (
          'name' => 'ids',
          'type' => 'String',
          'info' => 'A comma-separated list of collection ids.',
          'required' => false,
        ),
        5 => 
        array (
          'name' => 'sinceId',
          'type' => 'Number',
          'info' => 'Restrict results to after the specified ID.',
          'required' => false,
        ),
        6 => 
        array (
          'name' => 'title',
          'type' => 'String',
          'info' => 'Show smart collections with given title.',
          'required' => false,
        ),
        7 => 
        array (
          'name' => 'productId',
          'type' => 'Number',
          'info' => 'Show smart collections that includes given product.',
          'required' => false,
        ),
        8 => 
        array (
          'name' => 'handle',
          'type' => 'String',
          'info' => 'Filter by smart collection handle.',
          'required' => false,
        ),
        9 => 
        array (
          'name' => 'updatedAtMin',
          'type' => 'String',
          'info' => 'Show smart collections last updated after date (format: 2014-04-25T16:15:47-04:00).',
          'required' => false,
        ),
        10 => 
        array (
          'name' => 'updatedAtMax',
          'type' => 'String',
          'info' => 'Show smart collections last updated before date (format: 2014-04-25T16:15:47-04:00).',
          'required' => false,
        ),
        11 => 
        array (
          'name' => 'publishedAtMin',
          'type' => 'String',
          'info' => 'Show smart collections published after date (format: 2014-04-25T16:15:47-04:00).',
          'required' => false,
        ),
        12 => 
        array (
          'name' => 'publishedAtMax',
          'type' => 'String',
          'info' => 'Show smart collections published before date (format: 2014-04-25T16:15:47-04:00).',
          'required' => false,
        ),
        13 => 
        array (
          'name' => 'publishedStatus',
          'type' => 'String',
          'info' => 'published - Show only published smart collections, unpublished - Show only unpublished smart collections, any - Show all smart collections (default).',
          'required' => false,
        ),
        14 => 
        array (
          'name' => 'fields',
          'type' => 'String',
          'info' => 'comma-separated list of fields to include in the response.',
          'required' => false,
        ),
      ),
      'callbacks' => 
      array (
        0 => 
        array (
          'name' => 'error',
          'info' => 'Error',
        ),
        1 => 
        array (
          'name' => 'success',
          'info' => 'Success',
        ),
      ),
    ),
    67 => 
    array (
      'name' => 'getSmartCollectionsCount',
      'description' => 'Get a count of all smart collections that contain a given product.',
      'args' => 
      array (
        0 => 
        array (
          'name' => 'shopName',
          'type' => 'credentials',
          'info' => 'Domain of your shop.',
          'required' => true,
        ),
        1 => 
        array (
          'name' => 'accessToken',
          'type' => 'String',
          'info' => 'API access token that can be used to access the shop’s data as long as the client is installed.',
          'required' => true,
        ),
        2 => 
        array (
          'name' => 'title',
          'type' => 'String',
          'info' => 'Show smart collections with given title.',
          'required' => false,
        ),
        3 => 
        array (
          'name' => 'productId',
          'type' => 'Number',
          'info' => 'Show smart collections that includes given product.',
          'required' => false,
        ),
        4 => 
        array (
          'name' => 'updatedAtMin',
          'type' => 'String',
          'info' => 'Show smart collections last updated after date (format: 2014-04-25T16:15:47-04:00).',
          'required' => false,
        ),
        5 => 
        array (
          'name' => 'updatedAtMax',
          'type' => 'String',
          'info' => 'Show smart collections last updated before date (format: 2014-04-25T16:15:47-04:00).',
          'required' => false,
        ),
        6 => 
        array (
          'name' => 'publishedAtMin',
          'type' => 'String',
          'info' => 'Show smart collections published after date (format: 2014-04-25T16:15:47-04:00).',
          'required' => false,
        ),
        7 => 
        array (
          'name' => 'publishedAtMax',
          'type' => 'String',
          'info' => 'Show smart collections published before date (format: 2014-04-25T16:15:47-04:00).',
          'required' => false,
        ),
        8 => 
        array (
          'name' => 'publishedStatus',
          'type' => 'String',
          'info' => 'published - Show only published smart collections, unpublished - Show only unpublished smart collections, any - Show all smart collections (default).',
          'required' => false,
        ),
      ),
      'callbacks' => 
      array (
        0 => 
        array (
          'name' => 'error',
          'info' => 'Error',
        ),
        1 => 
        array (
          'name' => 'success',
          'info' => 'Success',
        ),
      ),
    ),
    68 => 
    array (
      'name' => 'getSingleSmartCollection',
      'description' => 'Get a single smart collection.',
      'args' => 
      array (
        0 => 
        array (
          'name' => 'shopName',
          'type' => 'credentials',
          'info' => 'Domain of your shop.',
          'required' => true,
        ),
        1 => 
        array (
          'name' => 'accessToken',
          'type' => 'String',
          'info' => 'API access token that can be used to access the shop’s data as long as the client is installed.',
          'required' => true,
        ),
        2 => 
        array (
          'name' => 'smartCollectionId',
          'type' => 'Number',
          'info' => 'The unique numeric identifier for the smart collection.',
          'required' => true,
        ),
        3 => 
        array (
          'name' => 'fields',
          'type' => 'String',
          'info' => 'comma-separated list of fields to include in the response.',
          'required' => false,
        ),
      ),
      'callbacks' => 
      array (
        0 => 
        array (
          'name' => 'error',
          'info' => 'Error',
        ),
        1 => 
        array (
          'name' => 'success',
          'info' => 'Success',
        ),
      ),
    ),
    69 => 
    array (
      'name' => 'createSmartCollection',
      'description' => 'Create a new smart collection.',
      'args' => 
      array (
        0 => 
        array (
          'name' => 'shopName',
          'type' => 'credentials',
          'info' => 'Domain of your shop.',
          'required' => true,
        ),
        1 => 
        array (
          'name' => 'accessToken',
          'type' => 'String',
          'info' => 'API access token that can be used to access the shop’s data as long as the client is installed.',
          'required' => true,
        ),
        2 => 
        array (
          'name' => 'title',
          'type' => 'String',
          'info' => 'The name of the smart collection. Limit of 255 characters.',
          'required' => true,
        ),
        3 => 
        array (
          'name' => 'bodyHtml',
          'type' => 'String',
          'info' => 'The description of the smart collection, complete with HTML markup. Many templates display this on their smart collection page.',
          'required' => false,
        ),
        4 => 
        array (
          'name' => 'imageSrc',
          'type' => 'File',
          'info' => 'The collection image.',
          'required' => false,
        ),
        5 => 
        array (
          'name' => 'published',
          'type' => 'Boolean',
          'info' => 'Is published collection.',
          'required' => false,
        ),
        6 => 
        array (
          'name' => 'rules',
          'type' => 'Array',
          'info' => 'Array of JSON objects. The list of rules that define what products go into the smart collection.',
          'required' => false,
        ),
      ),
      'callbacks' => 
      array (
        0 => 
        array (
          'name' => 'error',
          'info' => 'Error',
        ),
        1 => 
        array (
          'name' => 'success',
          'info' => 'Success',
        ),
      ),
    ),
    70 => 
    array (
      'name' => 'updateSmartCollection',
      'description' => 'Update an existing smart collection.',
      'args' => 
      array (
        0 => 
        array (
          'name' => 'shopName',
          'type' => 'credentials',
          'info' => 'Domain of your shop.',
          'required' => true,
        ),
        1 => 
        array (
          'name' => 'accessToken',
          'type' => 'String',
          'info' => 'API access token that can be used to access the shop’s data as long as the client is installed.',
          'required' => true,
        ),
        2 => 
        array (
          'name' => 'smartCollectionId',
          'type' => 'Number',
          'info' => 'The unique numeric identifier for the smart collection.',
          'required' => true,
        ),
        3 => 
        array (
          'name' => 'title',
          'type' => 'String',
          'info' => 'The name of the smart collection. Limit of 255 characters.',
          'required' => false,
        ),
        4 => 
        array (
          'name' => 'bodyHtml',
          'type' => 'String',
          'info' => 'The description of the smart collection, complete with HTML markup. Many templates display this on their smart collection page.',
          'required' => false,
        ),
        5 => 
        array (
          'name' => 'imageSrc',
          'type' => 'File',
          'info' => 'The collection image.',
          'required' => false,
        ),
        6 => 
        array (
          'name' => 'published',
          'type' => 'Boolean',
          'info' => 'Is published collection.',
          'required' => false,
        ),
        7 => 
        array (
          'name' => 'rules',
          'type' => 'Array',
          'info' => 'Array of JSON objects. The list of rules that define what products go into the smart collection.',
          'required' => false,
        ),
      ),
      'callbacks' => 
      array (
        0 => 
        array (
          'name' => 'error',
          'info' => 'Error',
        ),
        1 => 
        array (
          'name' => 'success',
          'info' => 'Success',
        ),
      ),
    ),
    71 => 
    array (
      'name' => 'updateProductsInSmartCollection',
      'description' => 'Change the manual ordering of products in the SmartCollection.',
      'args' => 
      array (
        0 => 
        array (
          'name' => 'shopName',
          'type' => 'credentials',
          'info' => 'Domain of your shop.',
          'required' => true,
        ),
        1 => 
        array (
          'name' => 'accessToken',
          'type' => 'String',
          'info' => 'API access token that can be used to access the shop’s data as long as the client is installed.',
          'required' => true,
        ),
        2 => 
        array (
          'name' => 'smartCollectionId',
          'type' => 'Number',
          'info' => 'The unique numeric identifier for the smart collection.',
          'required' => true,
        ),
        3 => 
        array (
          'name' => 'products',
          'type' => 'Array',
          'info' => 'Array of product ids in the order you want them arranged. (Applies only when sort_order is set to "manual").',
          'required' => false,
        ),
        4 => 
        array (
          'name' => 'sortOrder',
          'type' => 'String',
          'info' => 'The type of sorting to apply. Valid values are listed in the Properties section above. (default: (current value)).',
          'required' => false,
        ),
      ),
      'callbacks' => 
      array (
        0 => 
        array (
          'name' => 'error',
          'info' => 'Error',
        ),
        1 => 
        array (
          'name' => 'success',
          'info' => 'Success',
        ),
      ),
    ),
    72 => 
    array (
      'name' => 'deleteSmartCollection',
      'description' => 'Remove Smart iPods smart collection.',
      'args' => 
      array (
        0 => 
        array (
          'name' => 'shopName',
          'type' => 'credentials',
          'info' => 'Domain of your shop.',
          'required' => true,
        ),
        1 => 
        array (
          'name' => 'accessToken',
          'type' => 'String',
          'info' => 'API access token that can be used to access the shop’s data as long as the client is installed.',
          'required' => true,
        ),
        2 => 
        array (
          'name' => 'smartCollectionId',
          'type' => 'Number',
          'info' => 'The unique numeric identifier for the smart collection.',
          'required' => true,
        ),
      ),
      'callbacks' => 
      array (
        0 => 
        array (
          'name' => 'error',
          'info' => 'Error',
        ),
        1 => 
        array (
          'name' => 'success',
          'info' => 'Success',
        ),
      ),
    ),
  ),
  'custom' => 
  array (
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
    ),
    'updateProductVariant' => 
    array (
      'dictionary' => 
      array (
        'shopName' => 'shopName',
        'accessToken' => 'accessToken',
        'variantId' => 'id',
        'variant' => 'variant',
        'title' => 'title'
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
      'method' => 'PUTGET',
      'wrap' => '',
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
  ),
);