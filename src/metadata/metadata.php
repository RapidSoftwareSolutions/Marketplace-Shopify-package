<?php
return [
    'package' => 'Shopify',
    'tagline' => 'powerfull platform for ecommerce',
    'description' => 'Shopify is platform for ecommerce.',
    'image' => 'https://logo.clearbit.com/shopify.com?s=128',
    'repo' => 'https://github.com/RapidSoftwareSolutions/Marketplace-Shopify-package',
    'keywords' =>
        [
            'API',
            'ecommerce',
            'service',
            'Shopify',
        ],
    'accounts' =>
        [
            'domain' => 'shopify.com',
            'credentials' =>
                [
                    'clientId',
                    'clientSecret',
                ],
        ],
    'blocks' =>
        [
            [
                'name' => 'getAccessToken',
                'description' => 'Get access token from code provided in the redirect described.',
                'args' =>
                    [
                        [
                            'name' => 'clientId',
                            'type' => 'credentials',
                            'info' => 'The API Key for the app.',
                            'required' => true,
                        ],
                        [
                            'name' => 'clientSecret',
                            'type' => 'credentials',
                            'info' => 'The Shared Secret for the app (Credential sets).',
                            'required' => true,
                        ],
                        [
                            'name' => 'code',
                            'type' => 'String',
                            'info' => 'The authorization code provided in the redirect described.',
                            'required' => true,
                        ],
                        [
                            'name' => 'shopName',
                            'type' => 'String',
                            'info' => 'Domain of your shop.',
                            'required' => true,
                        ],
                    ],
                'callbacks' =>
                    [
                        [
                            'name' => 'error',
                            'info' => 'Error',
                        ],
                        [
                            'name' => 'success',
                            'info' => 'Success',
                        ],
                    ],
            ],
            [
                'name' => 'getAbandonedCheckoutsCount',
                'description' => 'Get a count of abandoned checkouts.',
                'args' =>
                    [
                        [
                            'name' => 'shopName',
                            'type' => 'String',
                            'info' => 'Domain of your shop.',
                            'required' => true,
                        ],
                        [
                            'name' => 'accessToken',
                            'type' => 'String',
                            'info' => 'API access token that can be used to access the shop’s data as long as the client is installed.',
                            'required' => true,
                        ],
                        [
                            'name' => 'sinceId',
                            'type' => 'Number',
                            'info' => 'Restrict results to after the specified ID.',
                            'required' => false,
                        ],
                        [
                            'name' => 'createdAtMin',
                            'type' => 'String',
                            'info' => 'Show checkouts created after date (format: 2014-04-25T16:15:47-04:00).',
                            'required' => false,
                        ],
                        [
                            'name' => 'createdAtMax',
                            'type' => 'String',
                            'info' => 'Show checkouts created before date (format: 2014-04-25T16:15:47-04:00).',
                            'required' => false,
                        ],
                        [
                            'name' => 'updatedAtMin',
                            'type' => 'String',
                            'info' => 'Show checkouts last updated after date (format: 2014-04-25T16:15:47-04:00).',
                            'required' => false,
                        ],
                        [
                            'name' => 'updatedAtMax',
                            'type' => 'String',
                            'info' => 'Show checkouts last updated before date (format: 2014-04-25T16:15:47-04:00).',
                            'required' => false,
                        ],
                        [
                            'name' => 'status',
                            'type' => 'String',
                            'info' => 'Takes: open - All open abandoned checkouts (default], closed - Show only closed abandoned checkouts.',
                            'required' => false,
                        ],
                    ],
                'callbacks' =>
                    [
                        [
                            'name' => 'error',
                            'info' => 'Error',
                        ],
                        [
                            'name' => 'success',
                            'info' => 'Success',
                        ],
                    ],
            ],
            [
                'name' => 'getAbandonedCheckouts',
                'description' => 'List all abandoned checkouts.',
                'args' =>
                    [
                        [
                            'name' => 'shopName',
                            'type' => 'String',
                            'info' => 'Domain of your shop.',
                            'required' => true,
                        ],
                        [
                            'name' => 'accessToken',
                            'type' => 'String',
                            'info' => 'API access token that can be used to access the shop’s data as long as the client is installed.',
                            'required' => true,
                        ],
                        [
                            'name' => 'limit',
                            'type' => 'Number',
                            'info' => 'Amount of results (default: 50) (maximum: 250).',
                            'required' => false,
                        ],
                        [
                            'name' => 'page',
                            'type' => 'Number',
                            'info' => 'Page to show (default: 1).',
                            'required' => false,
                        ],
                        [
                            'name' => 'sinceId',
                            'type' => 'Number',
                            'info' => 'Restrict results to after the specified ID.',
                            'required' => false,
                        ],
                        [
                            'name' => 'createdAtMin',
                            'type' => 'String',
                            'info' => 'Show checkouts created after date (format: 2014-04-25T16:15:47-04:00).',
                            'required' => false,
                        ],
                        [
                            'name' => 'createdAtMax',
                            'type' => 'String',
                            'info' => 'Show checkouts created before date (format: 2014-04-25T16:15:47-04:00).',
                            'required' => false,
                        ],
                        [
                            'name' => 'updatedAtMin',
                            'type' => 'String',
                            'info' => 'Show checkouts last updated after date (format: 2014-04-25T16:15:47-04:00).',
                            'required' => false,
                        ],
                        [
                            'name' => 'updatedAtMax',
                            'type' => 'String',
                            'info' => 'Show checkouts last updated before date (format: 2014-04-25T16:15:47-04:00).',
                            'required' => false,
                        ],
                        [
                            'name' => 'status',
                            'type' => 'String',
                            'info' => 'Takes: open - All open abandoned checkouts (default], closed - Show only closed abandoned checkouts.',
                            'required' => false,
                        ],
                    ],
                'callbacks' =>
                    [
                        [
                            'name' => 'error',
                            'info' => 'Error',
                        ],
                        [
                            'name' => 'success',
                            'info' => 'Success',
                        ],
                    ],
            ],
            [
                'name' => 'createCheckout',
                'description' => 'Create a new Checkout.',
                'args' =>
                    [
                        [
                            'name' => 'shopName',
                            'type' => 'String',
                            'info' => 'Domain of your shop.',
                            'required' => true,
                        ],
                        [
                            'name' => 'accessToken',
                            'type' => 'String',
                            'info' => 'API access token that can be used to access the shop’s data as long as the client is installed.',
                            'required' => true,
                        ],
                        [
                            'name' => 'email',
                            'type' => 'String',
                            'info' => 'The customer\'s email address.',
                            'required' => false,
                        ],
                        [
                            'name' => 'lineItemsVariantId',
                            'type' => 'Number',
                            'info' => 'The id of the product variant.',
                            'required' => false,
                        ],
                        [
                            'name' => 'lineItemsQuantity',
                            'type' => 'Number',
                            'info' => 'The number of products that were purchased.',
                            'required' => false,
                        ],
                    ],
                'callbacks' =>
                    [
                        [
                            'name' => 'error',
                            'info' => 'Error',
                        ],
                        [
                            'name' => 'success',
                            'info' => 'Success',
                        ],
                    ],
            ],
            [
                'name' => 'getCheckouts',
                'description' => 'Retreive a list of Checkout.',
                'args' =>
                    [
                        [
                            'name' => 'shopName',
                            'type' => 'String',
                            'info' => 'Domain of your shop.',
                            'required' => true,
                        ],
                        [
                            'name' => 'accessToken',
                            'type' => 'String',
                            'info' => 'API access token that can be used to access the shop’s data as long as the client is installed.',
                            'required' => true,
                        ],
                    ],
                'callbacks' =>
                    [
                        [
                            'name' => 'error',
                            'info' => 'Error',
                        ],
                        [
                            'name' => 'success',
                            'info' => 'Success',
                        ],
                    ],
            ],
            [
                'name' => 'updateCheckout',
                'description' => 'Modify an existing Checkout.',
                'args' =>
                    [
                        [
                            'name' => 'shopName',
                            'type' => 'String',
                            'info' => 'Domain of your shop.',
                            'required' => true,
                        ],
                        [
                            'name' => 'accessToken',
                            'type' => 'String',
                            'info' => 'API access token that can be used to access the shop’s data as long as the client is installed.',
                            'required' => true,
                        ],
                        [
                            'name' => 'token',
                            'type' => 'String',
                            'info' => 'Unique identifier for a particular checkout.',
                            'required' => true,
                        ],
                        [
                            'name' => 'email',
                            'type' => 'String',
                            'info' => 'The customer\'s email address.',
                            'required' => false,
                        ],
                        [
                            'name' => 'shippingAddressFirstName',
                            'type' => 'String',
                            'info' => 'The first name of the person associated with the payment method.',
                            'required' => false,
                        ],
                        [
                            'name' => 'shippingAddressLastName',
                            'type' => 'String',
                            'info' => 'The last name of the person associated with the payment method.',
                            'required' => false,
                        ],
                        [
                            'name' => 'shippingAddressAddress1',
                            'type' => 'String',
                            'info' => 'The street address of the shipping address.',
                            'required' => false,
                        ],
                        [
                            'name' => 'shippingAddressCity',
                            'type' => 'String',
                            'info' => 'The city of the shipping address.',
                            'required' => false,
                        ],
                        [
                            'name' => 'shippingAddressProvinceCode',
                            'type' => 'String',
                            'info' => 'The two-letter abbreviation of the state or province of the shipping address.',
                            'required' => false,
                        ],
                        [
                            'name' => 'shippingAddressCountryCode',
                            'type' => 'String',
                            'info' => 'The two-letter code for the country of the shipping address.',
                            'required' => false,
                        ],
                        [
                            'name' => 'shippingAddressPhone',
                            'type' => 'String',
                            'info' => 'The phone number at the shipping address.',
                            'required' => false,
                        ],
                        [
                            'name' => 'shippingAddressZip',
                            'type' => 'String',
                            'info' => 'The zip or postal code of the shipping address.',
                            'required' => false,
                        ],
                        [
                            'name' => 'reservationTime',
                            'type' => 'Number',
                            'info' => 'The reservation time in seconds for the products in the line items. This can be set up to 5 minutes, or 1 hour depending on the authentication type used.',
                            'required' => false,
                        ],
                    ],
                'callbacks' =>
                    [
                        [
                            'name' => 'error',
                            'info' => 'Error',
                        ],
                        [
                            'name' => 'success',
                            'info' => 'Success',
                        ],
                    ],
            ],
            [
                'name' => 'getShippingRates',
                'description' => 'Get a list of available shipping rates for the specified checkout. Implementers need to poll this API until rates become available. Each shipping rate will also contain the checkout\'s subtotal_price, total_tax and total_price in the event that this shipping rate is selected. This can be used to update the UI without performing a road-trip to API.',
                'args' =>
                    [
                        [
                            'name' => 'shopName',
                            'type' => 'String',
                            'info' => 'Domain of your shop.',
                            'required' => true,
                        ],
                        [
                            'name' => 'accessToken',
                            'type' => 'String',
                            'info' => 'API access token that can be used to access the shop’s data as long as the client is installed.',
                            'required' => true,
                        ],
                        [
                            'name' => 'token',
                            'type' => 'String',
                            'info' => 'Unique identifier for a particular checkout.',
                            'required' => true,
                        ],
                    ],
                'callbacks' =>
                    [
                        [
                            'name' => 'error',
                            'info' => 'Error',
                        ],
                        [
                            'name' => 'success',
                            'info' => 'Success',
                        ],
                    ],
            ],
            [
                'name' => 'getSingleCheckoutPayments',
                'description' => 'Retreive a list of Payments on a particular Checkout.',
                'args' =>
                    [
                        [
                            'name' => 'shopName',
                            'type' => 'String',
                            'info' => 'Domain of your shop.',
                            'required' => true,
                        ],
                        [
                            'name' => 'accessToken',
                            'type' => 'String',
                            'info' => 'API access token that can be used to access the shop’s data as long as the client is installed.',
                            'required' => true,
                        ],
                        [
                            'name' => 'token',
                            'type' => 'String',
                            'info' => 'Unique identifier for a particular checkout.',
                            'required' => true,
                        ],
                    ],
                'callbacks' =>
                    [
                        [
                            'name' => 'error',
                            'info' => 'Error',
                        ],
                        [
                            'name' => 'success',
                            'info' => 'Success',
                        ],
                    ],
            ],
            [
                'name' => 'createPayment',
                'description' => 'Create a new payment.',
                'args' =>
                    [
                        [
                            'name' => 'shopName',
                            'type' => 'String',
                            'info' => 'Domain of your shop.',
                            'required' => true,
                        ],
                        [
                            'name' => 'accessToken',
                            'type' => 'String',
                            'info' => 'API access token that can be used to access the shop’s data as long as the client is installed.',
                            'required' => true,
                        ],
                        [
                            'name' => 'token',
                            'type' => 'String',
                            'info' => 'Unique identifier for a particular checkout.',
                            'required' => true,
                        ],
                        [
                            'name' => 'requestDetailsIpAddress',
                            'type' => 'String',
                            'info' => 'The IP address of the customer.',
                            'required' => false,
                        ],
                        [
                            'name' => 'requestDetailsAcceptLanguage',
                            'type' => 'String',
                            'info' => 'A string identifying the customer\'s preferred language, formatted according to the Accept-Language header as defined in RFC2616 Section 14.4.',
                            'required' => false,
                        ],
                        [
                            'name' => 'requestDetailsUserAgent',
                            'type' => 'String',
                            'info' => 'A string identifying the customer\'s user agent.',
                            'required' => false,
                        ],
                        [
                            'name' => 'amount',
                            'type' => 'String',
                            'info' => 'Amount of payment.',
                            'required' => false,
                        ],
                        [
                            'name' => 'sessionId',
                            'type' => 'String',
                            'info' => 'Represents the id that was returned by the card vault.',
                            'required' => false,
                        ],
                    ],
                'callbacks' =>
                    [
                        [
                            'name' => 'error',
                            'info' => 'Error',
                        ],
                        [
                            'name' => 'success',
                            'info' => 'Success',
                        ],
                    ],
            ],
            [
                'name' => 'getSinglePayment',
                'description' => 'Get a single Payment.',
                'args' =>
                    [
                        [
                            'name' => 'shopName',
                            'type' => 'String',
                            'info' => 'Domain of your shop.',
                            'required' => true,
                        ],
                        [
                            'name' => 'accessToken',
                            'type' => 'String',
                            'info' => 'API access token that can be used to access the shop’s data as long as the client is installed.',
                            'required' => true,
                        ],
                        [
                            'name' => 'token',
                            'type' => 'String',
                            'info' => 'Unique identifier for a particular checkout.',
                            'required' => true,
                        ],
                    ],
                'callbacks' =>
                    [
                        [
                            'name' => 'error',
                            'info' => 'Error',
                        ],
                        [
                            'name' => 'success',
                            'info' => 'Success',
                        ],
                    ],
            ],
            [
                'name' => 'countCheckoutPayments',
                'description' => 'Count the number of Payments attempted on a Checkout.',
                'args' =>
                    [
                        [
                            'name' => 'shopName',
                            'type' => 'String',
                            'info' => 'Domain of your shop.',
                            'required' => true,
                        ],
                        [
                            'name' => 'accessToken',
                            'type' => 'String',
                            'info' => 'API access token that can be used to access the shop’s data as long as the client is installed.',
                            'required' => true,
                        ],
                        [
                            'name' => 'token',
                            'type' => 'String',
                            'info' => 'Unique identifier for a particular checkout.',
                            'required' => true,
                        ],
                    ],
                'callbacks' =>
                    [
                        [
                            'name' => 'error',
                            'info' => 'Error',
                        ],
                        [
                            'name' => 'success',
                            'info' => 'Success',
                        ],
                    ],
            ],
            [
                'name' => 'storeCreditCardInVault',
                'description' => 'Create a payment session.',
                'args' =>
                    [
                        [
                            'name' => 'shopName',
                            'type' => 'String',
                            'info' => 'Domain of your shop.',
                            'required' => true,
                        ],
                        [
                            'name' => 'accessToken',
                            'type' => 'String',
                            'info' => 'API access token that can be used to access the shop’s data as long as the client is installed.',
                            'required' => true,
                        ],
                        [
                            'name' => 'creditCardNumber',
                            'type' => 'String',
                            'info' => 'Credit card number.',
                            'required' => true,
                        ],
                        [
                            'name' => 'creditCardFirstName',
                            'type' => 'String',
                            'info' => 'Credit card owner first name.',
                            'required' => true,
                        ],
                        [
                            'name' => 'creditCardLastName',
                            'type' => 'String',
                            'info' => 'Credit card owner last name.',
                            'required' => true,
                        ],
                        [
                            'name' => 'creditCardMonth',
                            'type' => 'String',
                            'info' => 'Credit card expiry date month.',
                            'required' => true,
                        ],
                        [
                            'name' => 'creditCardYear',
                            'type' => 'String',
                            'info' => 'Credit card expiry date year.',
                            'required' => true,
                        ],
                        [
                            'name' => 'creditCardVerificationValue',
                            'type' => 'String',
                            'info' => 'Credit card verification value.',
                            'required' => true,
                        ],
                    ],
                'callbacks' =>
                    [
                        [
                            'name' => 'error',
                            'info' => 'Error',
                        ],
                        [
                            'name' => 'success',
                            'info' => 'Success',
                        ],
                    ],
            ],
            [
                'name' => 'addProductToCollection',
                'description' => 'Add a product to a collection.',
                'args' =>
                    [
                        [
                            'name' => 'shopName',
                            'type' => 'String',
                            'info' => 'Domain of your shop.',
                            'required' => true,
                        ],
                        [
                            'name' => 'accessToken',
                            'type' => 'String',
                            'info' => 'API access token that can be used to access the shop’s data as long as the client is installed.',
                            'required' => true,
                        ],
                        [
                            'name' => 'productId',
                            'type' => 'Number',
                            'info' => 'The unique numeric identifier for the product.',
                            'required' => true,
                        ],
                        [
                            'name' => 'collectionId',
                            'type' => 'Number',
                            'info' => 'The id of the custom collection containing the product.',
                            'required' => true,
                        ],
                    ],
                'callbacks' =>
                    [
                        [
                            'name' => 'error',
                            'info' => 'Error',
                        ],
                        [
                            'name' => 'success',
                            'info' => 'Success',
                        ],
                    ],
            ],
            [
                'name' => 'removeProductFromCollection',
                'description' => 'Remove a product from a collection.',
                'args' =>
                    [
                        [
                            'name' => 'shopName',
                            'type' => 'String',
                            'info' => 'Domain of your shop.',
                            'required' => true,
                        ],
                        [
                            'name' => 'accessToken',
                            'type' => 'String',
                            'info' => 'API access token that can be used to access the shop’s data as long as the client is installed.',
                            'required' => true,
                        ],
                        [
                            'name' => 'collectId',
                            'type' => 'Number',
                            'info' => 'A unique numeric identifier for the collect.',
                            'required' => true,
                        ],
                    ],
                'callbacks' =>
                    [
                        [
                            'name' => 'error',
                            'info' => 'Error',
                        ],
                        [
                            'name' => 'success',
                            'info' => 'Success',
                        ],
                    ],
            ],
            [
                'name' => 'getCollects',
                'description' => 'List all collects or only those for specific products or collections.',
                'args' =>
                    [
                        [
                            'name' => 'shopName',
                            'type' => 'String',
                            'info' => 'Domain of your shop.',
                            'required' => true,
                        ],
                        [
                            'name' => 'accessToken',
                            'type' => 'String',
                            'info' => 'API access token that can be used to access the shop’s data as long as the client is installed.',
                            'required' => true,
                        ],
                        [
                            'name' => 'productId',
                            'type' => 'Number',
                            'info' => 'The unique numeric identifier for the product.',
                            'required' => false,
                        ],
                        [
                            'name' => 'collectionId',
                            'type' => 'Number',
                            'info' => 'The id of the custom collection containing the product.',
                            'required' => false,
                        ],
                        [
                            'name' => 'page',
                            'type' => 'Number',
                            'info' => 'Page to show (default: 1).',
                            'required' => false,
                        ],
                        [
                            'name' => 'limit',
                            'type' => 'Number',
                            'info' => 'Amount of results (default: 50) (maximum: 250).',
                            'required' => false,
                        ],
                        [
                            'name' => 'fields',
                            'type' => 'String',
                            'info' => 'Comma-separated list of fields to include in the response.',
                            'required' => false,
                        ],
                    ],
                'callbacks' =>
                    [
                        [
                            'name' => 'error',
                            'info' => 'Error',
                        ],
                        [
                            'name' => 'success',
                            'info' => 'Success',
                        ],
                    ],
            ],
            [
                'name' => 'getCollectsCount',
                'description' => 'Get a count of all collects or only those for specific products or collections.',
                'args' =>
                    [
                        [
                            'name' => 'shopName',
                            'type' => 'String',
                            'info' => 'Domain of your shop.',
                            'required' => true,
                        ],
                        [
                            'name' => 'accessToken',
                            'type' => 'String',
                            'info' => 'API access token that can be used to access the shop’s data as long as the client is installed.',
                            'required' => true,
                        ],
                        [
                            'name' => 'productId',
                            'type' => 'Number',
                            'info' => 'The unique numeric identifier for the product.',
                            'required' => false,
                        ],
                        [
                            'name' => 'collectionId',
                            'type' => 'Number',
                            'info' => 'The id of the custom collection containing the product.',
                            'required' => false,
                        ],
                    ],
                'callbacks' =>
                    [
                        [
                            'name' => 'error',
                            'info' => 'Error',
                        ],
                        [
                            'name' => 'success',
                            'info' => 'Success',
                        ],
                    ],
            ],
            [
                'name' => 'getSingleCollect',
                'description' => 'Get the collect with a certain id, or for a given product AND collection.',
                'args' =>
                    [
                        [
                            'name' => 'shopName',
                            'type' => 'String',
                            'info' => 'Domain of your shop.',
                            'required' => true,
                        ],
                        [
                            'name' => 'accessToken',
                            'type' => 'String',
                            'info' => 'API access token that can be used to access the shop’s data as long as the client is installed.',
                            'required' => true,
                        ],
                        [
                            'name' => 'collectId',
                            'type' => 'Number',
                            'info' => 'The id of the collect to retrieve.',
                            'required' => true,
                        ],
                        [
                            'name' => 'fields',
                            'type' => 'String',
                            'info' => 'Comma-separated list of fields to include in the response.',
                            'required' => false,
                        ],
                    ],
                'callbacks' =>
                    [
                        [
                            'name' => 'error',
                            'info' => 'Error',
                        ],
                        [
                            'name' => 'success',
                            'info' => 'Success',
                        ],
                    ],
            ],
            [
                'name' => 'getCustomCollections',
                'description' => 'Get a list of all custom collections that contain a given product.',
                'args' =>
                    [
                        [
                            'name' => 'shopName',
                            'type' => 'String',
                            'info' => 'Domain of your shop.',
                            'required' => true,
                        ],
                        [
                            'name' => 'accessToken',
                            'type' => 'String',
                            'info' => 'API access token that can be used to access the shop’s data as long as the client is installed.',
                            'required' => true,
                        ],
                        [
                            'name' => 'limit',
                            'type' => 'Number',
                            'info' => 'Amount of results (default: 50) (maximum: 250).',
                            'required' => false,
                        ],
                        [
                            'name' => 'page',
                            'type' => 'Number',
                            'info' => 'Page to show (default: 1).',
                            'required' => false,
                        ],
                        [
                            'name' => 'ids',
                            'type' => 'String',
                            'info' => 'A comma-separated list of collection ids.',
                            'required' => false,
                        ],
                        [
                            'name' => 'sinceId',
                            'type' => 'Number',
                            'info' => 'Restrict results to after the specified ID.',
                            'required' => false,
                        ],
                        [
                            'name' => 'title',
                            'type' => 'String',
                            'info' => 'Show custom collections with given title.',
                            'required' => false,
                        ],
                        [
                            'name' => 'productId',
                            'type' => 'Number',
                            'info' => 'Show custom collections that includes given product.',
                            'required' => false,
                        ],
                        [
                            'name' => 'handle',
                            'type' => 'String',
                            'info' => 'Filter by custom collection handle.',
                            'required' => false,
                        ],
                        [
                            'name' => 'updatedAtMin',
                            'type' => 'String',
                            'info' => 'Show custom collections last updated after date (format: 2014-04-25T16:15:47-04:00).',
                            'required' => false,
                        ],
                        [
                            'name' => 'updatedAtMax',
                            'type' => 'String',
                            'info' => 'Show custom collections last updated before date (format: 2014-04-25T16:15:47-04:00).',
                            'required' => false,
                        ],
                        [
                            'name' => 'publishedAtMin',
                            'type' => 'String',
                            'info' => 'Show custom collections published after date (format: 2014-04-25T16:15:47-04:00).',
                            'required' => false,
                        ],
                        [
                            'name' => 'publishedAtMax',
                            'type' => 'String',
                            'info' => 'Show custom collections published before date (format: 2014-04-25T16:15:47-04:00).',
                            'required' => false,
                        ],
                        [
                            'name' => 'publishedStatus',
                            'type' => 'String',
                            'info' => 'Takes: published - Show only published custom collections, unpublished - Show only unpublished custom collections, any - Show all custom collections (default).',
                            'required' => false,
                        ],
                        [
                            'name' => 'fields',
                            'type' => 'String',
                            'info' => 'Comma-separated list of fields to include in the response.',
                            'required' => false,
                        ],
                    ],
                'callbacks' =>
                    [
                        [
                            'name' => 'error',
                            'info' => 'Error',
                        ],
                        [
                            'name' => 'success',
                            'info' => 'Success',
                        ],
                    ],
            ],
            [
                'name' => 'getCustomCollectionsCount',
                'description' => 'Get a count of all custom collections.',
                'args' =>
                    [
                        [
                            'name' => 'shopName',
                            'type' => 'String',
                            'info' => 'Domain of your shop.',
                            'required' => true,
                        ],
                        [
                            'name' => 'accessToken',
                            'type' => 'String',
                            'info' => 'API access token that can be used to access the shop’s data as long as the client is installed.',
                            'required' => true,
                        ],
                        [
                            'name' => 'title',
                            'type' => 'String',
                            'info' => 'Count custom collections with given title.',
                            'required' => false,
                        ],
                        [
                            'name' => 'productId',
                            'type' => 'Number',
                            'info' => 'Count custom collections that includes given product.',
                            'required' => false,
                        ],
                        [
                            'name' => 'updatedAtMin',
                            'type' => 'String',
                            'info' => 'Count custom collections last updated after date (format: 2014-04-25T16:15:47-04:00).',
                            'required' => false,
                        ],
                        [
                            'name' => 'updatedAtMax',
                            'type' => 'String',
                            'info' => 'Count custom collections last updated before date (format: 2014-04-25T16:15:47-04:00).',
                            'required' => false,
                        ],
                        [
                            'name' => 'publishedAtMin',
                            'type' => 'String',
                            'info' => 'Show custom collections published after date (format: 2014-04-25T16:15:47-04:00).',
                            'required' => false,
                        ],
                        [
                            'name' => 'publishedAtMax',
                            'type' => 'String',
                            'info' => 'Show custom collections published before date (format: 2014-04-25T16:15:47-04:00).',
                            'required' => false,
                        ],
                        [
                            'name' => 'publishedStatus',
                            'type' => 'String',
                            'info' => 'Takes: published - Show only published custom collections, unpublished - Show only unpublished custom collections, any - Show all custom collections (default).',
                            'required' => false,
                        ],
                    ],
                'callbacks' =>
                    [
                        [
                            'name' => 'error',
                            'info' => 'Error',
                        ],
                        [
                            'name' => 'success',
                            'info' => 'Success',
                        ],
                    ],
            ],
            [
                'name' => 'getSingleCustomCollection',
                'description' => 'Get a single custom collection.',
                'args' =>
                    [
                        [
                            'name' => 'shopName',
                            'type' => 'String',
                            'info' => 'Domain of your shop.',
                            'required' => true,
                        ],
                        [
                            'name' => 'accessToken',
                            'type' => 'String',
                            'info' => 'API access token that can be used to access the shop’s data as long as the client is installed.',
                            'required' => true,
                        ],
                        [
                            'name' => 'collectionId',
                            'type' => 'Number',
                            'info' => 'The id of the custom collection containing the product.',
                            'required' => true,
                        ],
                        [
                            'name' => 'fields',
                            'type' => 'String',
                            'info' => 'Comma-separated list of fields to include in the response.',
                            'required' => false,
                        ],
                    ],
                'callbacks' =>
                    [
                        [
                            'name' => 'error',
                            'info' => 'Error',
                        ],
                        [
                            'name' => 'success',
                            'info' => 'Success',
                        ],
                    ],
            ],
            [
                'name' => 'createCustomCollection',
                'description' => 'Create a new custom collection.',
                'args' =>
                    [
                        [
                            'name' => 'shopName',
                            'type' => 'String',
                            'info' => 'Domain of your shop.',
                            'required' => true,
                        ],
                        [
                            'name' => 'accessToken',
                            'type' => 'String',
                            'info' => 'API access token that can be used to access the shop’s data as long as the client is installed.',
                            'required' => true,
                        ],
                        [
                            'name' => 'title',
                            'type' => 'String',
                            'info' => 'Collections title.',
                            'required' => true,
                        ],
                        [
                            'name' => 'imageSrc',
                            'type' => 'File',
                            'info' => 'Image associated with the custom collection.',
                            'required' => false,
                        ],
                        [
                            'name' => 'collectsProductId',
                            'type' => 'Number',
                            'info' => 'The unique numeric identifier for the product.',
                            'required' => false,
                        ],
                        [
                            'name' => 'published',
                            'type' => 'Boolean',
                            'info' => 'Is published collection.',
                            'required' => false,
                        ],
                    ],
                'callbacks' =>
                    [
                        [
                            'name' => 'error',
                            'info' => 'Error',
                        ],
                        [
                            'name' => 'success',
                            'info' => 'Success',
                        ],
                    ],
            ],
            [
                'name' => 'updateCustomCollection',
                'description' => 'Update an existing custom collection.',
                'args' =>
                    [
                        [
                            'name' => 'shopName',
                            'type' => 'String',
                            'info' => 'Domain of your shop.',
                            'required' => true,
                        ],
                        [
                            'name' => 'accessToken',
                            'type' => 'String',
                            'info' => 'API access token that can be used to access the shop’s data as long as the client is installed.',
                            'required' => true,
                        ],
                        [
                            'name' => 'collectionId',
                            'type' => 'Number',
                            'info' => 'The id of the custom collection containing the product.',
                            'required' => true,
                        ],
                        [
                            'name' => 'handle',
                            'type' => 'String',
                            'info' => 'A human-friendly unique string for the custom collection automatically generated from its title. This is used in shop themes by the Liquid templating language to refer to the custom collection. Limit of 255 characters.',
                            'required' => false,
                        ],
                        [
                            'name' => 'title',
                            'type' => 'String',
                            'info' => 'Collections title.',
                            'required' => false,
                        ],
                        [
                            'name' => 'imageSrc',
                            'type' => 'File',
                            'info' => 'Image associated with the custom collection.',
                            'required' => false,
                        ],
                        [
                            'name' => 'collectsProductId',
                            'type' => 'Number',
                            'info' => 'The unique numeric identifier for the product.',
                            'required' => false,
                        ],
                        [
                            'name' => 'published',
                            'type' => 'Boolean',
                            'info' => 'Is published collections.',
                            'required' => false,
                        ],
                    ],
                'callbacks' =>
                    [
                        [
                            'name' => 'error',
                            'info' => 'Error',
                        ],
                        [
                            'name' => 'success',
                            'info' => 'Success',
                        ],
                    ],
            ],
            [
                'name' => 'deleteCustomCollection',
                'description' => 'Remove custom collection.',
                'args' =>
                    [
                        [
                            'name' => 'shopName',
                            'type' => 'String',
                            'info' => 'Domain of your shop.',
                            'required' => true,
                        ],
                        [
                            'name' => 'accessToken',
                            'type' => 'String',
                            'info' => 'API access token that can be used to access the shop’s data as long as the client is installed.',
                            'required' => true,
                        ],
                        [
                            'name' => 'collectionId',
                            'type' => 'Number',
                            'info' => 'The id of the custom collection containing the product.',
                            'required' => true,
                        ],
                    ],
                'callbacks' =>
                    [
                        [
                            'name' => 'error',
                            'info' => 'Error',
                        ],
                        [
                            'name' => 'success',
                            'info' => 'Success',
                        ],
                    ],
            ],
            [
                'name' => 'getCustomers',
                'description' => 'Retrieve all customers of a shop.',
                'args' =>
                    [
                        [
                            'name' => 'shopName',
                            'type' => 'String',
                            'info' => 'Domain of your shop.',
                            'required' => true,
                        ],
                        [
                            'name' => 'accessToken',
                            'type' => 'String',
                            'info' => 'API access token that can be used to access the shop’s data as long as the client is installed.',
                            'required' => true,
                        ],
                        [
                            'name' => 'ids',
                            'type' => 'String',
                            'info' => 'A comma-separated list of customer ids.',
                            'required' => false,
                        ],
                        [
                            'name' => 'sinceId',
                            'type' => 'Number',
                            'info' => 'Restrict results to after the specified ID.',
                            'required' => false,
                        ],
                        [
                            'name' => 'createdAtMin',
                            'type' => 'String',
                            'info' => 'Show customers created after date (format: 2014-04-25T16:15:47-04:00).',
                            'required' => false,
                        ],
                        [
                            'name' => 'createdAtMax',
                            'type' => 'String',
                            'info' => 'Show customers created before date (format: 2014-04-25T16:15:47-04:00).',
                            'required' => false,
                        ],
                        [
                            'name' => 'updatedAtMin',
                            'type' => 'String',
                            'info' => 'Show customers last updated after date (format: 2014-04-25T16:15:47-04:00).',
                            'required' => false,
                        ],
                        [
                            'name' => 'updatedAtMax',
                            'type' => 'String',
                            'info' => 'Show customers last updated before date (format: 2014-04-25T16:15:47-04:00).',
                            'required' => false,
                        ],
                        [
                            'name' => 'limit',
                            'type' => 'Number',
                            'info' => 'Amount of results (default: 50) (maximum: 250).',
                            'required' => false,
                        ],
                        [
                            'name' => 'page',
                            'type' => 'Number',
                            'info' => 'Page to show (default: 1).',
                            'required' => false,
                        ],
                        [
                            'name' => 'fields',
                            'type' => 'String',
                            'info' => 'Comma-separated list of fields to include in the response.',
                            'required' => false,
                        ],
                    ],
                'callbacks' =>
                    [
                        [
                            'name' => 'error',
                            'info' => 'Error',
                        ],
                        [
                            'name' => 'success',
                            'info' => 'Success',
                        ],
                    ],
            ],
            [
                'name' => 'searchCustomers',
                'description' => 'Search customers.',
                'args' =>
                    [
                        [
                            'name' => 'shopName',
                            'type' => 'String',
                            'info' => 'Domain of your shop.',
                            'required' => true,
                        ],
                        [
                            'name' => 'accessToken',
                            'type' => 'String',
                            'info' => 'API access token that can be used to access the shop’s data as long as the client is installed.',
                            'required' => true,
                        ],
                        [
                            'name' => 'order',
                            'type' => 'String',
                            'info' => 'Field and direction to order results by (default: last_order_date DESC).',
                            'required' => false,
                        ],
                        [
                            'name' => 'query',
                            'type' => 'String',
                            'info' => 'Text to search customers.',
                            'required' => false,
                        ],
                        [
                            'name' => 'page',
                            'type' => 'Number',
                            'info' => 'Page to show (default: 1).',
                            'required' => false,
                        ],
                        [
                            'name' => 'limit',
                            'type' => 'Number',
                            'info' => 'Amount of results (default: 50) (maximum: 250).',
                            'required' => false,
                        ],
                        [
                            'name' => 'fields',
                            'type' => 'String',
                            'info' => 'Comma-separated list of fields to include in the response.',
                            'required' => false,
                        ],
                    ],
                'callbacks' =>
                    [
                        [
                            'name' => 'error',
                            'info' => 'Error',
                        ],
                        [
                            'name' => 'success',
                            'info' => 'Success',
                        ],
                    ],
            ],
            [
                'name' => 'getSingleCustomer',
                'description' => 'Get a single customer.',
                'args' =>
                    [
                        [
                            'name' => 'shopName',
                            'type' => 'String',
                            'info' => 'Domain of your shop.',
                            'required' => true,
                        ],
                        [
                            'name' => 'accessToken',
                            'type' => 'String',
                            'info' => 'API access token that can be used to access the shop’s data as long as the client is installed.',
                            'required' => true,
                        ],
                        [
                            'name' => 'customerId',
                            'type' => 'String',
                            'info' => 'The id of the customer.',
                            'required' => true,
                        ],
                        [
                            'name' => 'fields',
                            'type' => 'String',
                            'info' => 'Comma-separated list of fields to include in the response.',
                            'required' => false,
                        ],
                    ],
                'callbacks' =>
                    [
                        [
                            'name' => 'error',
                            'info' => 'Error',
                        ],
                        [
                            'name' => 'success',
                            'info' => 'Success',
                        ],
                    ],
            ],
            [
                'name' => 'createCustomer',
                'description' => 'Create a new customer.',
                'args' =>
                    [
                        [
                            'name' => 'shopName',
                            'type' => 'String',
                            'info' => 'Domain of your shop.',
                            'required' => true,
                        ],
                        [
                            'name' => 'accessToken',
                            'type' => 'String',
                            'info' => 'API access token that can be used to access the shop’s data as long as the client is installed.',
                            'required' => true,
                        ],
                        [
                            'name' => 'firstName',
                            'type' => 'String',
                            'info' => 'The customer\'s first name.',
                            'required' => true,
                        ],
                        [
                            'name' => 'lastName',
                            'type' => 'String',
                            'info' => 'The customer\'s last name.',
                            'required' => true,
                        ],
                        [
                            'name' => 'email',
                            'type' => 'String',
                            'info' => 'The email address of the customer.',
                            'required' => false,
                        ],
                        [
                            'name' => 'phone',
                            'type' => 'String',
                            'info' => 'The phone number for the customer. Valid formats can be of different types, for example: 6135551212, +16135551212, 555-1212, (613)555-1212, +1 613-555-1212.',
                            'required' => false,
                        ],
                        [
                            'name' => 'verifiedEmail',
                            'type' => 'Boolean',
                            'info' => 'States whether or not the email address has been verified.',
                            'required' => false,
                        ],
                        [
                            'name' => 'sendEmailInvite',
                            'type' => 'Boolean',
                            'info' => 'If true, Invite E-mail will be send.',
                            'required' => false,
                        ],
                        [
                            'name' => 'sendEmailWelcome',
                            'type' => 'Boolean',
                            'info' => 'If true, Welcome E-mail will be send.',
                            'required' => false,
                        ],
                    ],
                'callbacks' =>
                    [
                        [
                            'name' => 'error',
                            'info' => 'Error',
                        ],
                        [
                            'name' => 'success',
                            'info' => 'Success',
                        ],
                    ],
            ],
            [
                'name' => 'updateCustomer',
                'description' => 'Update a customer.',
                'args' =>
                    [
                        [
                            'name' => 'shopName',
                            'type' => 'String',
                            'info' => 'Domain of your shop.',
                            'required' => true,
                        ],
                        [
                            'name' => 'accessToken',
                            'type' => 'String',
                            'info' => 'API access token that can be used to access the shop’s data as long as the client is installed.',
                            'required' => true,
                        ],
                        [
                            'name' => 'customerId',
                            'type' => 'String',
                            'info' => 'The id of the customer.',
                            'required' => true,
                        ],
                        [
                            'name' => 'firstName',
                            'type' => 'String',
                            'info' => 'The customer\'s first name.',
                            'required' => false,
                        ],
                        [
                            'name' => 'lastName',
                            'type' => 'String',
                            'info' => 'The customer\'s last name.',
                            'required' => false,
                        ],
                        [
                            'name' => 'email',
                            'type' => 'String',
                            'info' => 'The email address of the customer.',
                            'required' => false,
                        ],
                        [
                            'name' => 'tags',
                            'type' => 'String',
                            'info' => 'Tags are additional short descriptors formatted as a string of comma-separated values. For example, if an article has three tags: tag1, tag2, tag3.',
                            'required' => false,
                        ],
                        [
                            'name' => 'note',
                            'type' => 'String',
                            'info' => 'A note about the customer.',
                            'required' => false,
                        ],
                    ],
                'callbacks' =>
                    [
                        [
                            'name' => 'error',
                            'info' => 'Error',
                        ],
                        [
                            'name' => 'success',
                            'info' => 'Success',
                        ],
                    ],
            ],
            [
                'name' => 'createAccountActivationURL',
                'description' => 'This endpoint allows you to generate and retrieve an account activation URL for a customer who is not yet enabled. This is useful if you\'ve imported a large number of customers and want to send them activation emails all at once (using this approach, you\'ll need to generate and send the activation emails yourself). The account activation URL generated by this endpoint is one time use and will expire after 7 days. If you make a new POST request to this endpoint, a new URL will be generated which will be again valid for 7 days, but the previous URL will no longer be valid.',
                'args' =>
                    [
                        [
                            'name' => 'shopName',
                            'type' => 'String',
                            'info' => 'Domain of your shop.',
                            'required' => true,
                        ],
                        [
                            'name' => 'accessToken',
                            'type' => 'String',
                            'info' => 'API access token that can be used to access the shop’s data as long as the client is installed.',
                            'required' => true,
                        ],
                        [
                            'name' => 'customerId',
                            'type' => 'String',
                            'info' => 'The id of the customer.',
                            'required' => true,
                        ],
                    ],
                'callbacks' =>
                    [
                        [
                            'name' => 'error',
                            'info' => 'Error',
                        ],
                        [
                            'name' => 'success',
                            'info' => 'Success',
                        ],
                    ],
            ],
            [
                'name' => 'deleteCustomer',
                'description' => 'Delete a customer. A customer can\'t be deleted if they have existing orders.',
                'args' =>
                    [
                        [
                            'name' => 'shopName',
                            'type' => 'String',
                            'info' => 'Domain of your shop.',
                            'required' => true,
                        ],
                        [
                            'name' => 'accessToken',
                            'type' => 'String',
                            'info' => 'API access token that can be used to access the shop’s data as long as the client is installed.',
                            'required' => true,
                        ],
                        [
                            'name' => 'customerId',
                            'type' => 'String',
                            'info' => 'The id of the customer.',
                            'required' => true,
                        ],
                    ],
                'callbacks' =>
                    [
                        [
                            'name' => 'error',
                            'info' => 'Error',
                        ],
                        [
                            'name' => 'success',
                            'info' => 'Success',
                        ],
                    ],
            ],
            [
                'name' => 'getCustomersCount',
                'description' => 'Get a count of all customers.',
                'args' =>
                    [
                        [
                            'name' => 'shopName',
                            'type' => 'String',
                            'info' => 'Domain of your shop.',
                            'required' => true,
                        ],
                        [
                            'name' => 'accessToken',
                            'type' => 'String',
                            'info' => 'API access token that can be used to access the shop’s data as long as the client is installed.',
                            'required' => true,
                        ],
                    ],
                'callbacks' =>
                    [
                        [
                            'name' => 'error',
                            'info' => 'Error',
                        ],
                        [
                            'name' => 'success',
                            'info' => 'Success',
                        ],
                    ],
            ],
            [
                'name' => 'getCustomerOrders',
                'description' => 'Get all orders belonging to this customer.',
                'args' =>
                    [
                        [
                            'name' => 'shopName',
                            'type' => 'String',
                            'info' => 'Domain of your shop.',
                            'required' => true,
                        ],
                        [
                            'name' => 'accessToken',
                            'type' => 'String',
                            'info' => 'API access token that can be used to access the shop’s data as long as the client is installed.',
                            'required' => true,
                        ],
                        [
                            'name' => 'customerId',
                            'type' => 'String',
                            'info' => 'The id of the customer.',
                            'required' => true,
                        ],
                    ],
                'callbacks' =>
                    [
                        [
                            'name' => 'error',
                            'info' => 'Error',
                        ],
                        [
                            'name' => 'success',
                            'info' => 'Success',
                        ],
                    ],
            ],
            [
                'name' => 'getEvents',
                'description' => 'Get the events from a particular product.',
                'args' =>
                    [
                        [
                            'name' => 'shopName',
                            'type' => 'String',
                            'info' => 'Domain of your shop.',
                            'required' => true,
                        ],
                        [
                            'name' => 'accessToken',
                            'type' => 'String',
                            'info' => 'API access token that can be used to access the shop’s data as long as the client is installed.',
                            'required' => true,
                        ],
                        [
                            'name' => 'objectType',
                            'type' => 'String',
                            'info' => 'Name type of object of event (products, orders).',
                            'required' => false,
                        ],
                        [
                            'name' => 'objectTypeId',
                            'type' => 'String',
                            'info' => 'Type identifier of object of event.',
                            'required' => false,
                        ],
                        [
                            'name' => 'limit',
                            'type' => 'Number',
                            'info' => 'Amount of results (default: 50) (maximum: 250).',
                            'required' => false,
                        ],
                        [
                            'name' => 'page',
                            'type' => 'Number',
                            'info' => 'Page to show (default: 1).',
                            'required' => false,
                        ],
                        [
                            'name' => 'sinceId',
                            'type' => 'Number',
                            'info' => 'Restrict results to after the specified ID.',
                            'required' => false,
                        ],
                        [
                            'name' => 'createdAtMin',
                            'type' => 'String',
                            'info' => 'Show events created at or after date and time (format: 2014-04-25T16:15:47-04:00).',
                            'required' => false,
                        ],
                        [
                            'name' => 'createdAtMax',
                            'type' => 'String',
                            'info' => 'Show events created at or before date and time (format: 2014-04-25T16:15:47-04:00).',
                            'required' => false,
                        ],
                        [
                            'name' => 'filter',
                            'type' => 'String',
                            'info' => 'Only show events specified in filter.',
                            'required' => false,
                        ],
                        [
                            'name' => 'verb',
                            'type' => 'String',
                            'info' => 'Only show events of a certain kind.',
                            'required' => false,
                        ],
                        [
                            'name' => 'fields',
                            'type' => 'String',
                            'info' => 'Comma-separated list of fields to include in the response.',
                            'required' => false,
                        ],
                    ],
                'callbacks' =>
                    [
                        [
                            'name' => 'error',
                            'info' => 'Error',
                        ],
                        [
                            'name' => 'success',
                            'info' => 'Success',
                        ],
                    ],
            ],
            [
                'name' => 'getSingleEvent',
                'description' => 'Get a single Event.',
                'args' =>
                    [
                        [
                            'name' => 'shopName',
                            'type' => 'String',
                            'info' => 'Domain of your shop.',
                            'required' => true,
                        ],
                        [
                            'name' => 'accessToken',
                            'type' => 'String',
                            'info' => 'API access token that can be used to access the shop’s data as long as the client is installed.',
                            'required' => true,
                        ],
                        [
                            'name' => 'eventId',
                            'type' => 'Number',
                            'info' => 'The unique numeric identifier for the event.',
                            'required' => true,
                        ],
                        [
                            'name' => 'fields',
                            'type' => 'String',
                            'info' => 'Comma-separated list of fields to include in the response.',
                            'required' => false,
                        ],
                    ],
                'callbacks' =>
                    [
                        [
                            'name' => 'error',
                            'info' => 'Error',
                        ],
                        [
                            'name' => 'success',
                            'info' => 'Success',
                        ],
                    ],
            ],
            [
                'name' => 'getEventByType',
                'description' => 'Retrieve event by type.',
                'args' =>
                    [
                        [
                            'name' => 'shopName',
                            'type' => 'String',
                            'info' => 'Domain of your shop.',
                            'required' => true,
                        ],
                        [
                            'name' => 'accessToken',
                            'type' => 'String',
                            'info' => 'API access token that can be used to access the shop’s data as long as the client is installed.',
                            'required' => true,
                        ],
                        [
                            'name' => 'objectType',
                            'type' => 'String',
                            'info' => 'Name type of object of event (products, orders).',
                            'required' => true,
                        ],
                        [
                            'name' => 'objectTypeId',
                            'type' => 'String',
                            'info' => 'The unique numeric identifier of the object.',
                            'required' => true,
                        ],
                        [
                            'name' => 'limit',
                            'type' => 'Number',
                            'info' => 'Amount of results (default: 50) (maximum: 250).',
                            'required' => false,
                        ],
                        [
                            'name' => 'page',
                            'type' => 'Number',
                            'info' => 'Page to show (default: 1).',
                            'required' => false,
                        ],
                        [
                            'name' => 'sinceId',
                            'type' => 'Number',
                            'info' => 'Restrict results to after the specified ID.',
                            'required' => false,
                        ],
                        [
                            'name' => 'createdAtMin',
                            'type' => 'String',
                            'info' => 'Show events created at or after date and time (format: 2014-04-25T16:15:47-04:00).',
                            'required' => false,
                        ],
                        [
                            'name' => 'createdAtMax',
                            'type' => 'String',
                            'info' => 'Show events created at or before date and time (format: 2014-04-25T16:15:47-04:00).',
                            'required' => false,
                        ],
                        [
                            'name' => 'filter',
                            'type' => 'String',
                            'info' => 'Only show events specified in filter.',
                            'required' => false,
                        ],
                        [
                            'name' => 'verb',
                            'type' => 'String',
                            'info' => 'Only show events of a certain kind.',
                            'required' => false,
                        ],
                        [
                            'name' => 'fields',
                            'type' => 'String',
                            'info' => 'Comma-separated list of fields to include in the response.',
                            'required' => false,
                        ],
                    ],
                'callbacks' =>
                    [
                        [
                            'name' => 'error',
                            'info' => 'Error',
                        ],
                        [
                            'name' => 'success',
                            'info' => 'Success',
                        ],
                    ],
            ],
            [
                'name' => 'getEventsCount',
                'description' => 'Receive a count of all Events.',
                'args' =>
                    [
                        [
                            'name' => 'shopName',
                            'type' => 'String',
                            'info' => 'Domain of your shop.',
                            'required' => true,
                        ],
                        [
                            'name' => 'accessToken',
                            'type' => 'String',
                            'info' => 'API access token that can be used to access the shop’s data as long as the client is installed.',
                            'required' => true,
                        ],
                        [
                            'name' => 'createdAtMin',
                            'type' => 'String',
                            'info' => 'Count events created at or after date and time (format: 2014-04-25T16:15:47-04:00).',
                            'required' => false,
                        ],
                        [
                            'name' => 'createdAtMax',
                            'type' => 'String',
                            'info' => 'Count events created at or before date and time (format: 2014-04-25T16:15:47-04:00).',
                            'required' => false,
                        ],
                    ],
                'callbacks' =>
                    [
                        [
                            'name' => 'error',
                            'info' => 'Error',
                        ],
                        [
                            'name' => 'success',
                            'info' => 'Success',
                        ],
                    ],
            ],
            [
                'name' => 'getProducts',
                'description' => 'Get a list of products.',
                'args' =>
                    [
                        [
                            'name' => 'shopName',
                            'type' => 'String',
                            'info' => 'Domain of your shop.',
                            'required' => true,
                        ],
                        [
                            'name' => 'accessToken',
                            'type' => 'String',
                            'info' => 'API access token that can be used to access the shop’s data as long as the client is installed.',
                            'required' => true,
                        ],
                        [
                            'name' => 'ids',
                            'type' => 'String',
                            'info' => 'A comma-separated list of product ids.',
                            'required' => false,
                        ],
                        [
                            'name' => 'limit',
                            'type' => 'Number',
                            'info' => 'Amount of results (default: 50) (maximum: 250).',
                            'required' => false,
                        ],
                        [
                            'name' => 'page',
                            'type' => 'Number',
                            'info' => 'Page to show (default: 1).',
                            'required' => false,
                        ],
                        [
                            'name' => 'sinceId',
                            'type' => 'Number',
                            'info' => 'Restrict results to after the specified ID.',
                            'required' => false,
                        ],
                        [
                            'name' => 'title',
                            'type' => 'String',
                            'info' => 'Filter by product title.',
                            'required' => false,
                        ],
                        [
                            'name' => 'vendor',
                            'type' => 'String',
                            'info' => 'Filter by product vendor.',
                            'required' => false,
                        ],
                        [
                            'name' => 'handle',
                            'type' => 'String',
                            'info' => 'Filter by product handle.',
                            'required' => false,
                        ],
                        [
                            'name' => 'productType',
                            'type' => 'String',
                            'info' => 'Filter by product type.',
                            'required' => false,
                        ],
                        [
                            'name' => 'collectionId',
                            'type' => 'Number',
                            'info' => 'Filter by collection id.',
                            'required' => false,
                        ],
                        [
                            'name' => 'createdAtMin',
                            'type' => 'String',
                            'info' => 'Show products created after date (format: 2014-04-25T16:15:47-04:00).',
                            'required' => false,
                        ],
                        [
                            'name' => 'createdAtMax',
                            'type' => 'String',
                            'info' => 'Show products created before date (format: 2014-04-25T16:15:47-04:00).',
                            'required' => false,
                        ],
                        [
                            'name' => 'updatedAtMin',
                            'type' => 'String',
                            'info' => 'Show products last updated after date (format: 2014-04-25T16:15:47-04:00).',
                            'required' => false,
                        ],
                        [
                            'name' => 'updatedAtMax',
                            'type' => 'String',
                            'info' => 'Show products last updated before date (format: 2014-04-25T16:15:47-04:00).',
                            'required' => false,
                        ],
                        [
                            'name' => 'publishedAtMin',
                            'type' => 'String',
                            'info' => 'Show products published after date (format: 2014-04-25T16:15:47-04:00).',
                            'required' => false,
                        ],
                        [
                            'name' => 'publishedAtMax',
                            'type' => 'String',
                            'info' => 'Show products published before date (format: 2014-04-25T16:15:47-04:00).',
                            'required' => false,
                        ],
                        [
                            'name' => 'publishedStatus',
                            'type' => 'String',
                            'info' => 'Takes: published - Show only published products, unpublished - Show only unpublished products, any - Show all products (default).',
                            'required' => false,
                        ],
                        [
                            'name' => 'fields',
                            'type' => 'String',
                            'info' => 'Comma-separated list of fields to include in the response.',
                            'required' => false,
                        ],
                    ],
                'callbacks' =>
                    [
                        [
                            'name' => 'error',
                            'info' => 'Error',
                        ],
                        [
                            'name' => 'success',
                            'info' => 'Success',
                        ],
                    ],
            ],
            [
                'name' => 'getProductsCount',
                'description' => 'Get a count of all products of a given collection.',
                'args' =>
                    [
                        [
                            'name' => 'shopName',
                            'type' => 'String',
                            'info' => 'Domain of your shop.',
                            'required' => true,
                        ],
                        [
                            'name' => 'accessToken',
                            'type' => 'String',
                            'info' => 'API access token that can be used to access the shop’s data as long as the client is installed.',
                            'required' => true,
                        ],
                        [
                            'name' => 'vendor',
                            'type' => 'String',
                            'info' => 'Filter by product vendor.',
                            'required' => false,
                        ],
                        [
                            'name' => 'productType',
                            'type' => 'String',
                            'info' => 'Filter by product type.',
                            'required' => false,
                        ],
                        [
                            'name' => 'collectionId',
                            'type' => 'Number',
                            'info' => 'Filter by collection id.',
                            'required' => false,
                        ],
                        [
                            'name' => 'createdAtMin',
                            'type' => 'String',
                            'info' => 'Show products created after date (format: 2014-04-25T16:15:47-04:00).',
                            'required' => false,
                        ],
                        [
                            'name' => 'createdAtMax',
                            'type' => 'String',
                            'info' => 'Show products created before date (format: 2014-04-25T16:15:47-04:00).',
                            'required' => false,
                        ],
                        [
                            'name' => 'updatedAtMin',
                            'type' => 'String',
                            'info' => 'Show products last updated after date (format: 2014-04-25T16:15:47-04:00).',
                            'required' => false,
                        ],
                        [
                            'name' => 'updatedAtMax',
                            'type' => 'String',
                            'info' => 'Show products last updated before date (format: 2014-04-25T16:15:47-04:00).',
                            'required' => false,
                        ],
                        [
                            'name' => 'publishedAtMin',
                            'type' => 'String',
                            'info' => 'Show products published after date (format: 2014-04-25T16:15:47-04:00).',
                            'required' => false,
                        ],
                        [
                            'name' => 'publishedAtMax',
                            'type' => 'String',
                            'info' => 'Show products published before date (format: 2014-04-25T16:15:47-04:00).',
                            'required' => false,
                        ],
                        [
                            'name' => 'publishedStatus',
                            'type' => 'String',
                            'info' => 'Takes: published - Show only published products, unpublished - Show only unpublished products, any - Show all products (default).',
                            'required' => false,
                        ],
                    ],
                'callbacks' =>
                    [
                        [
                            'name' => 'error',
                            'info' => 'Error',
                        ],
                        [
                            'name' => 'success',
                            'info' => 'Success',
                        ],
                    ],
            ],
            [
                'name' => 'getSingleProduct',
                'description' => 'Get a single product.',
                'args' =>
                    [
                        [
                            'name' => 'shopName',
                            'type' => 'String',
                            'info' => 'Domain of your shop.',
                            'required' => true,
                        ],
                        [
                            'name' => 'accessToken',
                            'type' => 'String',
                            'info' => 'API access token that can be used to access the shop’s data as long as the client is installed.',
                            'required' => true,
                        ],
                        [
                            'name' => 'productId',
                            'type' => 'Number',
                            'info' => 'The unique numeric identifier for the product.',
                            'required' => true,
                        ],
                        [
                            'name' => 'fields',
                            'type' => 'String',
                            'info' => 'Comma-separated list of fields to include in the response.',
                            'required' => false,
                        ],
                    ],
                'callbacks' =>
                    [
                        [
                            'name' => 'error',
                            'info' => 'Error',
                        ],
                        [
                            'name' => 'success',
                            'info' => 'Success',
                        ],
                    ],
            ],
            [
                'name' => 'createProduct',
                'description' => 'Create a new product.',
                'args' =>
                    [
                        [
                            'name' => 'shopName',
                            'type' => 'String',
                            'info' => 'Domain of your shop.',
                            'required' => true,
                        ],
                        [
                            'name' => 'accessToken',
                            'type' => 'String',
                            'info' => 'API access token that can be used to access the shop’s data as long as the client is installed.',
                            'required' => true,
                        ],
                        [
                            'name' => 'title',
                            'type' => 'String',
                            'info' => 'The name of the product. In a shop\'s catalog, clicking on a product\'s title takes you to that product\'s page. On a product\'s page, the product\'s title typically appears in a large font.',
                            'required' => true,
                        ],
                        [
                            'name' => 'bodyHtml',
                            'type' => 'String',
                            'info' => 'The description of the product, complete with HTML formatting.',
                            'required' => false,
                        ],
                        [
                            'name' => 'productType',
                            'type' => 'String',
                            'info' => 'A categorization that a product can be tagged with, commonly used for filtering and searching.',
                            'required' => false,
                        ],
                        [
                            'name' => 'imageSrc',
                            'type' => 'File',
                            'info' => 'Image associated with the product.',
                            'required' => false,
                        ],
                        [
                            'name' => 'vendor',
                            'type' => 'String',
                            'info' => 'The name of the vendor of the product.',
                            'required' => false,
                        ],
                        [
                            'name' => 'variants',
                            'type' => 'Array',
                            'info' => 'Array of JSON objects. List of variant objects, each one representing a slightly different version of the product. For example, if a product comes in different sizes and colors, each size and color permutation (such as \'small black\', \'medium black\', \'large blue\'], would be a variant.',
                            'required' => false,
                        ],
                        [
                            'name' => 'tags',
                            'type' => 'String',
                            'info' => 'A categorization that a product can be tagged with, commonly used for filtering and searching. Each comma-separated tag has a character limit of 255.',
                            'required' => false,
                        ],
                        [
                            'name' => 'published',
                            'type' => 'Boolean',
                            'info' => 'Is published product.',
                            'required' => false,
                        ],
                    ],
                'callbacks' =>
                    [
                        [
                            'name' => 'error',
                            'info' => 'Error',
                        ],
                        [
                            'name' => 'success',
                            'info' => 'Success',
                        ],
                    ],
            ],
            [
                'name' => 'updateProduct',
                'description' => 'Update a product and associated variants and images.',
                'args' =>
                    [
                        [
                            'name' => 'shopName',
                            'type' => 'String',
                            'info' => 'Domain of your shop.',
                            'required' => true,
                        ],
                        [
                            'name' => 'accessToken',
                            'type' => 'String',
                            'info' => 'API access token that can be used to access the shop’s data as long as the client is installed.',
                            'required' => true,
                        ],
                        [
                            'name' => 'productId',
                            'type' => 'Number',
                            'info' => 'The unique numeric identifier for the product.',
                            'required' => true,
                        ],
                        [
                            'name' => 'title',
                            'type' => 'String',
                            'info' => 'The name of the product. In a shop\'s catalog, clicking on a product\'s title takes you to that product\'s page. On a product\'s page, the product\'s title typically appears in a large font.',
                            'required' => false,
                        ],
                        [
                            'name' => 'bodyHtml',
                            'type' => 'String',
                            'info' => 'The description of the product, complete with HTML formatting.',
                            'required' => false,
                        ],
                        [
                            'name' => 'productType',
                            'type' => 'String',
                            'info' => 'A categorization that a product can be tagged with, commonly used for filtering and searching.',
                            'required' => false,
                        ],
                        [
                            'name' => 'vendor',
                            'type' => 'String',
                            'info' => 'The name of the vendor of the product.',
                            'required' => false,
                        ],
                        [
                            'name' => 'variants',
                            'type' => 'Array',
                            'info' => 'Array of JSON objects. List of variant objects, each one representing a slightly different version of the product. For example, if a product comes in different sizes and colors, each size and color permutation (such as \'small black\', \'medium black\', \'large blue\'], would be a variant..',
                            'required' => false,
                        ],
                        [
                            'name' => 'tags',
                            'type' => 'String',
                            'info' => 'A categorization that a product can be tagged with, commonly used for filtering and searching. Each comma-separated tag has a character limit of 255.',
                            'required' => false,
                        ],
                        [
                            'name' => 'published',
                            'type' => 'Boolean',
                            'info' => 'Is published product.',
                            'required' => false,
                        ],
                    ],
                'callbacks' =>
                    [
                        [
                            'name' => 'error',
                            'info' => 'Error',
                        ],
                        [
                            'name' => 'success',
                            'info' => 'Success',
                        ],
                    ],
            ],
            [
                'name' => 'deleteProduct',
                'description' => 'Remove a product from the shop.',
                'args' =>
                    [
                        [
                            'name' => 'shopName',
                            'type' => 'String',
                            'info' => 'Domain of your shop.',
                            'required' => true,
                        ],
                        [
                            'name' => 'accessToken',
                            'type' => 'String',
                            'info' => 'API access token that can be used to access the shop’s data as long as the client is installed.',
                            'required' => true,
                        ],
                        [
                            'name' => 'productId',
                            'type' => 'Number',
                            'info' => 'The unique numeric identifier for the product.',
                            'required' => true,
                        ],
                    ],
                'callbacks' =>
                    [
                        [
                            'name' => 'error',
                            'info' => 'Error',
                        ],
                        [
                            'name' => 'success',
                            'info' => 'Success',
                        ],
                    ],
            ],
            [
                'name' => 'getProductImages',
                'description' => 'Get all product images.',
                'args' =>
                    [
                        [
                            'name' => 'shopName',
                            'type' => 'String',
                            'info' => 'Domain of your shop.',
                            'required' => true,
                        ],
                        [
                            'name' => 'accessToken',
                            'type' => 'String',
                            'info' => 'API access token that can be used to access the shop’s data as long as the client is installed.',
                            'required' => true,
                        ],
                        [
                            'name' => 'productId',
                            'type' => 'Number',
                            'info' => 'The unique numeric identifier for the product.',
                            'required' => true,
                        ],
                        [
                            'name' => 'sinceId',
                            'type' => 'Number',
                            'info' => 'Restrict results to after the specified ID.',
                            'required' => false,
                        ],
                        [
                            'name' => 'fields',
                            'type' => 'String',
                            'info' => 'Comma-separated list of fields to include in the response.',
                            'required' => false,
                        ],
                    ],
                'callbacks' =>
                    [
                        [
                            'name' => 'error',
                            'info' => 'Error',
                        ],
                        [
                            'name' => 'success',
                            'info' => 'Success',
                        ],
                    ],
            ],
            [
                'name' => 'getProductImagesCount',
                'description' => 'Get a count of all product images.',
                'args' =>
                    [
                        [
                            'name' => 'shopName',
                            'type' => 'String',
                            'info' => 'Domain of your shop.',
                            'required' => true,
                        ],
                        [
                            'name' => 'accessToken',
                            'type' => 'String',
                            'info' => 'API access token that can be used to access the shop’s data as long as the client is installed.',
                            'required' => true,
                        ],
                        [
                            'name' => 'productId',
                            'type' => 'Number',
                            'info' => 'The unique numeric identifier for the product.',
                            'required' => true,
                        ],
                        [
                            'name' => 'sinceId',
                            'type' => 'Number',
                            'info' => 'Restrict results to after the specified ID.',
                            'required' => false,
                        ],
                        [
                            'name' => 'createdAtMin',
                            'type' => 'String',
                            'info' => 'Count articles created after date (format: 2014-04-25T16:15:47-04:00).',
                            'required' => false,
                        ],
                        [
                            'name' => 'createdAtMax',
                            'type' => 'String',
                            'info' => 'Count articles created before date (format: 2014-04-25T16:15:47-04:00).',
                            'required' => false,
                        ],
                        [
                            'name' => 'updatedAtMin',
                            'type' => 'String',
                            'info' => 'Count articles last updated after date (format: 2014-04-25T16:15:47-04:00).',
                            'required' => false,
                        ],
                        [
                            'name' => 'updatedAtMax',
                            'type' => 'String',
                            'info' => 'Count articles last updated before date (format: 2014-04-25T16:15:47-04:00).',
                            'required' => false,
                        ],
                        [
                            'name' => 'publishedAtMin',
                            'type' => 'String',
                            'info' => 'Count articles published after date (format: 2014-04-25T16:15:47-04:00).',
                            'required' => false,
                        ],
                        [
                            'name' => 'publishedAtMax',
                            'type' => 'String',
                            'info' => 'Count articles published before date (format: 2014-04-25T16:15:47-04:00).',
                            'required' => false,
                        ],
                    ],
                'callbacks' =>
                    [
                        [
                            'name' => 'error',
                            'info' => 'Error',
                        ],
                        [
                            'name' => 'success',
                            'info' => 'Success',
                        ],
                    ],
            ],
            [
                'name' => 'getSingleProductImage',
                'description' => 'Get a single product image by id.',
                'args' =>
                    [
                        [
                            'name' => 'shopName',
                            'type' => 'String',
                            'info' => 'Domain of your shop.',
                            'required' => true,
                        ],
                        [
                            'name' => 'accessToken',
                            'type' => 'String',
                            'info' => 'API access token that can be used to access the shop’s data as long as the client is installed.',
                            'required' => true,
                        ],
                        [
                            'name' => 'productId',
                            'type' => 'Number',
                            'info' => 'The unique numeric identifier for the product.',
                            'required' => true,
                        ],
                        [
                            'name' => 'imageId',
                            'type' => 'Number',
                            'info' => 'A unique numeric identifier for the product image.',
                            'required' => true,
                        ],
                        [
                            'name' => 'fields',
                            'type' => 'String',
                            'info' => 'Comma-separated list of fields to include in the response.',
                            'required' => false,
                        ],
                    ],
                'callbacks' =>
                    [
                        [
                            'name' => 'error',
                            'info' => 'Error',
                        ],
                        [
                            'name' => 'success',
                            'info' => 'Success',
                        ],
                    ],
            ],
            [
                'name' => 'createProductImage',
                'description' => 'Create a new product image.',
                'args' =>
                    [
                        [
                            'name' => 'shopName',
                            'type' => 'String',
                            'info' => 'Domain of your shop.',
                            'required' => true,
                        ],
                        [
                            'name' => 'accessToken',
                            'type' => 'String',
                            'info' => 'API access token that can be used to access the shop’s data as long as the client is installed.',
                            'required' => true,
                        ],
                        [
                            'name' => 'productId',
                            'type' => 'Number',
                            'info' => 'The unique numeric identifier for the product.',
                            'required' => true,
                        ],
                        [
                            'name' => 'imageSrc',
                            'type' => 'File',
                            'info' => 'Specifies the location of the product image.',
                            'required' => true,
                        ],
                        [
                            'name' => 'filename',
                            'type' => 'String',
                            'info' => 'Custom image file name.',
                            'required' => false,
                        ],
                        [
                            'name' => 'position',
                            'type' => 'String',
                            'info' => 'The order of the product image in the list. The first product image is at position 1 and is the \'main\' image for the product.',
                            'required' => false,
                        ],
                        [
                            'name' => 'metafieldsKey',
                            'type' => 'String',
                            'info' => 'Identifier for the metafield (maximum of 30 characters).',
                            'required' => false,
                        ],
                        [
                            'name' => 'metafieldsValue',
                            'type' => 'String',
                            'info' => 'Information to be stored as metadata.',
                            'required' => false,
                        ],
                        [
                            'name' => 'metafieldsValueType',
                            'type' => 'String',
                            'info' => 'States whether the information in the value is stored as a \'string\' or \'integer\'.',
                            'required' => false,
                        ],
                        [
                            'name' => 'metafieldsNamespace',
                            'type' => 'String',
                            'info' => 'Container for a set of metadata. Namespaces help distinguish between metadata you created against metadata created by another individual with a similar namespace (maximum of 20 characters).',
                            'required' => false,
                        ],
                        [
                            'name' => 'variantIds',
                            'type' => 'String',
                            'info' => 'Comma-separated list of variant ids associated with the image.',
                            'required' => false,
                        ],
                    ],
                'callbacks' =>
                    [
                        [
                            'name' => 'error',
                            'info' => 'Error',
                        ],
                        [
                            'name' => 'success',
                            'info' => 'Success',
                        ],
                    ],
            ],
            [
                'name' => 'updateProductImage',
                'description' => 'Modify an existing product image.',
                'args' =>
                    [
                        [
                            'name' => 'shopName',
                            'type' => 'String',
                            'info' => 'Domain of your shop.',
                            'required' => true,
                        ],
                        [
                            'name' => 'accessToken',
                            'type' => 'String',
                            'info' => 'API access token that can be used to access the shop’s data as long as the client is installed.',
                            'required' => true,
                        ],
                        [
                            'name' => 'productId',
                            'type' => 'Number',
                            'info' => 'The unique numeric identifier for the product.',
                            'required' => true,
                        ],
                        [
                            'name' => 'imageId',
                            'type' => 'Number',
                            'info' => 'A unique numeric identifier for the product image.',
                            'required' => true,
                        ],
                        [
                            'name' => 'position',
                            'type' => 'String',
                            'info' => 'The order of the product image in the list. The first product image is at position 1 and is the \'main\' image for the product.',
                            'required' => false,
                        ],
                        [
                            'name' => 'metafieldsKey',
                            'type' => 'String',
                            'info' => 'Identifier for the metafield (maximum of 30 characters).',
                            'required' => false,
                        ],
                        [
                            'name' => 'metafieldsValue',
                            'type' => 'String',
                            'info' => 'Information to be stored as metadata.',
                            'required' => false,
                        ],
                        [
                            'name' => 'metafieldsValueType',
                            'type' => 'String',
                            'info' => 'States whether the information in the value is stored as a \'string\' or \'integer\'.',
                            'required' => false,
                        ],
                        [
                            'name' => 'metafieldsNamespace',
                            'type' => 'String',
                            'info' => 'Container for a set of metadata. Namespaces help distinguish between metadata you created against metadata created by another individual with a similar namespace (maximum of 20 characters).',
                            'required' => false,
                        ],
                        [
                            'name' => 'variantIds',
                            'type' => 'String',
                            'info' => 'Comma-separated list of variant ids associated with the image.',
                            'required' => false,
                        ],
                    ],
                'callbacks' =>
                    [
                        [
                            'name' => 'error',
                            'info' => 'Error',
                        ],
                        [
                            'name' => 'success',
                            'info' => 'Success',
                        ],
                    ],
            ],
            [
                'name' => 'deleteProductImage',
                'description' => 'Delete a product image.',
                'args' =>
                    [
                        [
                            'name' => 'shopName',
                            'type' => 'String',
                            'info' => 'Domain of your shop.',
                            'required' => true,
                        ],
                        [
                            'name' => 'accessToken',
                            'type' => 'String',
                            'info' => 'API access token that can be used to access the shop’s data as long as the client is installed.',
                            'required' => true,
                        ],
                        [
                            'name' => 'productId',
                            'type' => 'Number',
                            'info' => 'The unique numeric identifier for the product.',
                            'required' => true,
                        ],
                        [
                            'name' => 'imageId',
                            'type' => 'Number',
                            'info' => 'A unique numeric identifier for the product image.',
                            'required' => true,
                        ],
                    ],
                'callbacks' =>
                    [
                        [
                            'name' => 'error',
                            'info' => 'Error',
                        ],
                        [
                            'name' => 'success',
                            'info' => 'Success',
                        ],
                    ],
            ],
            [
                'name' => 'getProductVariants',
                'description' => 'Get a list of product variants.',
                'args' =>
                    [
                        [
                            'name' => 'shopName',
                            'type' => 'String',
                            'info' => 'Domain of your shop.',
                            'required' => true,
                        ],
                        [
                            'name' => 'accessToken',
                            'type' => 'String',
                            'info' => 'API access token that can be used to access the shop’s data as long as the client is installed.',
                            'required' => true,
                        ],
                        [
                            'name' => 'productId',
                            'type' => 'Number',
                            'info' => 'The unique numeric identifier for the product.',
                            'required' => true,
                        ],
                        [
                            'name' => 'limit',
                            'type' => 'Number',
                            'info' => 'Amount of results (default: 50) (maximum: 250).',
                            'required' => false,
                        ],
                        [
                            'name' => 'page',
                            'type' => 'Number',
                            'info' => 'Page to show (default: 1).',
                            'required' => false,
                        ],
                        [
                            'name' => 'sinceId',
                            'type' => 'Number',
                            'info' => 'Restrict results to after the specified ID.',
                            'required' => false,
                        ],
                        [
                            'name' => 'fields',
                            'type' => 'String',
                            'info' => 'Comma-separated list of fields to include in the response.',
                            'required' => false,
                        ],
                    ],
                'callbacks' =>
                    [
                        [
                            'name' => 'error',
                            'info' => 'Error',
                        ],
                        [
                            'name' => 'success',
                            'info' => 'Success',
                        ],
                    ],
            ],
            [
                'name' => 'getProductVariantsCount',
                'description' => 'Get a count of product variants.',
                'args' =>
                    [
                        [
                            'name' => 'shopName',
                            'type' => 'String',
                            'info' => 'Domain of your shop.',
                            'required' => true,
                        ],
                        [
                            'name' => 'accessToken',
                            'type' => 'String',
                            'info' => 'API access token that can be used to access the shop’s data as long as the client is installed.',
                            'required' => true,
                        ],
                        [
                            'name' => 'productId',
                            'type' => 'Number',
                            'info' => 'The unique numeric identifier for the product.',
                            'required' => true,
                        ],
                    ],
                'callbacks' =>
                    [
                        [
                            'name' => 'error',
                            'info' => 'Error',
                        ],
                        [
                            'name' => 'success',
                            'info' => 'Success',
                        ],
                    ],
            ],
            [
                'name' => 'getSingleProductVariant',
                'description' => 'Get a single product variant by id.',
                'args' =>
                    [
                        [
                            'name' => 'shopName',
                            'type' => 'String',
                            'info' => 'Domain of your shop.',
                            'required' => true,
                        ],
                        [
                            'name' => 'accessToken',
                            'type' => 'String',
                            'info' => 'API access token that can be used to access the shop’s data as long as the client is installed.',
                            'required' => true,
                        ],
                        [
                            'name' => 'variantId',
                            'type' => 'Number',
                            'info' => 'The unique numeric identifier for the product variant.',
                            'required' => true,
                        ],
                    ],
                'callbacks' =>
                    [
                        [
                            'name' => 'error',
                            'info' => 'Error',
                        ],
                        [
                            'name' => 'success',
                            'info' => 'Success',
                        ],
                    ],
            ],
            [
                'name' => 'createProductVariant',
                'description' => 'Create a new product variant.',
                'args' =>
                    [
                        [
                            'name' => 'shopName',
                            'type' => 'String',
                            'info' => 'Domain of your shop.',
                            'required' => true,
                        ],
                        [
                            'name' => 'accessToken',
                            'type' => 'String',
                            'info' => 'API access token that can be used to access the shop’s data as long as the client is installed.',
                            'required' => true,
                        ],
                        [
                            'name' => 'productId',
                            'type' => 'Number',
                            'info' => 'The unique numeric identifier for the product.',
                            'required' => true,
                        ],
                        [
                            'name' => 'variant',
                            'type' => 'JSON',
                            'info' => 'JSON Object with pair key - value for variant.',
                            'required' => true,
                        ],
                    ],
                'callbacks' =>
                    [
                        [
                            'name' => 'error',
                            'info' => 'Error',
                        ],
                        [
                            'name' => 'success',
                            'info' => 'Success',
                        ],
                    ],
            ],
            [
                'name' => 'updateProductVariant',
                'description' => 'Update an existing product variant.',
                'args' =>
                    [
                        [
                            'name' => 'shopName',
                            'type' => 'String',
                            'info' => 'Domain of your shop.',
                            'required' => true,
                        ],
                        [
                            'name' => 'accessToken',
                            'type' => 'String',
                            'info' => 'API access token that can be used to access the shop’s data as long as the client is installed.',
                            'required' => true,
                        ],
                        [
                            'name' => 'variantId',
                            'type' => 'Number',
                            'info' => 'The unique numeric identifier for the product variant.',
                            'required' => true,
                        ],
                        [
                            'name' => 'variant',
                            'type' => 'JSON',
                            'info' => 'JSON Object with pair key - value for variant.',
                            'required' => true,
                        ],
                    ],
                'callbacks' =>
                    [
                        [
                            'name' => 'error',
                            'info' => 'Error',
                        ],
                        [
                            'name' => 'success',
                            'info' => 'Success',
                        ],
                    ],
            ],
            [
                'name' => 'deleteProductVariant',
                'description' => 'Delete a product variant.',
                'args' =>
                    [
                        [
                            'name' => 'shopName',
                            'type' => 'String',
                            'info' => 'Domain of your shop.',
                            'required' => true,
                        ],
                        [
                            'name' => 'accessToken',
                            'type' => 'String',
                            'info' => 'API access token that can be used to access the shop’s data as long as the client is installed.',
                            'required' => true,
                        ],
                        [
                            'name' => 'productId',
                            'type' => 'Number',
                            'info' => 'The unique numeric identifier for the product.',
                            'required' => true,
                        ],
                        [
                            'name' => 'variantId',
                            'type' => 'Number',
                            'info' => 'The unique numeric identifier for the product variant.',
                            'required' => true,
                        ],
                    ],
                'callbacks' =>
                    [
                        [
                            'name' => 'error',
                            'info' => 'Error',
                        ],
                        [
                            'name' => 'success',
                            'info' => 'Success',
                        ],
                    ],
            ],
            [
                'name' => 'getOrderRefunds',
                'description' => 'Retrieve a list of Refunds for an Order.',
                'args' =>
                    [
                        [
                            'name' => 'shopName',
                            'type' => 'String',
                            'info' => 'Domain of your shop.',
                            'required' => true,
                        ],
                        [
                            'name' => 'accessToken',
                            'type' => 'String',
                            'info' => 'API access token that can be used to access the shop’s data as long as the client is installed.',
                            'required' => true,
                        ],
                        [
                            'name' => 'orderId',
                            'type' => 'Number',
                            'info' => 'The unique numeric identifier for the refund. This one is used for API purposes.',
                            'required' => true,
                        ],
                    ],
                'callbacks' =>
                    [
                        [
                            'name' => 'error',
                            'info' => 'Error',
                        ],
                        [
                            'name' => 'success',
                            'info' => 'Success',
                        ],
                    ],
            ],
            [
                'name' => 'getOrderSingleRefund',
                'description' => 'Retrieve a specific refund.',
                'args' =>
                    [
                        [
                            'name' => 'shopName',
                            'type' => 'String',
                            'info' => 'Domain of your shop.',
                            'required' => true,
                        ],
                        [
                            'name' => 'accessToken',
                            'type' => 'String',
                            'info' => 'API access token that can be used to access the shop’s data as long as the client is installed.',
                            'required' => true,
                        ],
                        [
                            'name' => 'orderId',
                            'type' => 'Number',
                            'info' => 'The unique numeric identifier for the refund. This one is used for API purposes.',
                            'required' => true,
                        ],
                        [
                            'name' => 'refundId',
                            'type' => 'Number',
                            'info' => 'The unique numeric identifier for the refund. This one is used for API purposes.',
                            'required' => true,
                        ],
                    ],
                'callbacks' =>
                    [
                        [
                            'name' => 'error',
                            'info' => 'Error',
                        ],
                        [
                            'name' => 'success',
                            'info' => 'Success',
                        ],
                    ],
            ],
            [
                'name' => 'calculateRefund',
                'description' => 'Calculate refund transactions based on line items and shipping. The returned response can be used to create a Refund. Note that returned transactions are of the kind "suggested_refund", which must to be changed to "refund" in order for them to be accepted.',
                'args' =>
                    [
                        [
                            'name' => 'shopName',
                            'type' => 'String',
                            'info' => 'Domain of your shop.',
                            'required' => true,
                        ],
                        [
                            'name' => 'accessToken',
                            'type' => 'String',
                            'info' => 'API access token that can be used to access the shop’s data as long as the client is installed.',
                            'required' => true,
                        ],
                        [
                            'name' => 'orderId',
                            'type' => 'Number',
                            'info' => 'The unique numeric identifier for the refund. This one is used for API purposes.',
                            'required' => true,
                        ],
                        [
                            'name' => 'shippingFullRefund',
                            'type' => 'Boolean',
                            'info' => 'Boolean, set to true to refund all remaining shipping.',
                            'required' => false,
                        ],
                        [
                            'name' => 'shippingAmount',
                            'type' => 'String',
                            'info' => 'Set specific amount of shipping to refund. Takes precedence over full_refund.',
                            'required' => false,
                        ],
                        [
                            'name' => 'refundLineItems',
                            'type' => 'Array',
                            'info' => 'Array of JSON objects, of line item IDs and quantities to refund.',
                            'required' => false,
                        ],
                    ],
                'callbacks' =>
                    [
                        [
                            'name' => 'error',
                            'info' => 'Error',
                        ],
                        [
                            'name' => 'success',
                            'info' => 'Success',
                        ],
                    ],
            ],
            [
                'name' => 'createOrderRefundByTransaction',
                'description' => 'Refund single or several transactions from an existing order.',
                'args' =>
                    [
                        [
                            'name' => 'shopName',
                            'type' => 'String',
                            'info' => 'Domain of your shop.',
                            'required' => true,
                        ],
                        [
                            'name' => 'accessToken',
                            'type' => 'String',
                            'info' => 'API access token that can be used to access the shop’s data as long as the client is installed.',
                            'required' => true,
                        ],
                        [
                            'name' => 'orderId',
                            'type' => 'Number',
                            'info' => 'The unique numeric identifier for the order. This one is used for API purposes.',
                            'required' => true,
                        ],
                        [
                            'name' => 'transactions',
                            'type' => 'Array',
                            'info' => 'Array of JSON objects. Array of transactions to process as refunds.',
                            'required' => true,
                        ],
                        [
                            'name' => 'restock',
                            'type' => 'Boolean',
                            'info' => 'Boolean, whether or not to add the line items back to the store inventory.',
                            'required' => false,
                        ],
                        [
                            'name' => 'notify',
                            'type' => 'Boolean',
                            'info' => 'Boolean, set to true to send a refund notification to the customer.',
                            'required' => false,
                        ],
                        [
                            'name' => 'note',
                            'type' => 'String',
                            'info' => 'An optional comment attached to a refund.',
                            'required' => false,
                        ],
                        [
                            'name' => 'discrepancyReason',
                            'type' => 'String',
                            'info' => 'An optional comment, used if there is a discrepancy between calculated and actual refund amounts (one of: restock, damage, customer, other).',
                            'required' => false,
                        ],
                        [
                            'name' => 'shippingFullRefund',
                            'type' => 'Boolean',
                            'info' => 'Boolean, set to true to refund all remaining shipping.',
                            'required' => false,
                        ],
                        [
                            'name' => 'shippingAmount',
                            'type' => 'String',
                            'info' => 'Set specific amount of shipping to refund. Takes precedence over full_refund.',
                            'required' => false,
                        ],
                    ],
                'callbacks' =>
                    [
                        [
                            'name' => 'error',
                            'info' => 'Error',
                        ],
                        [
                            'name' => 'success',
                            'info' => 'Success',
                        ],
                    ],
            ],
            [
                'name' => 'createOrderRefundByItems',
                'description' => 'Description: Refund single or several items from an existing order.',
                'args' =>
                    [
                        [
                            'name' => 'shopName',
                            'type' => 'String',
                            'info' => 'Domain of your shop.',
                            'required' => true,
                        ],
                        [
                            'name' => 'accessToken',
                            'type' => 'String',
                            'info' => 'API access token that can be used to access the shop’s data as long as the client is installed.',
                            'required' => true,
                        ],
                        [
                            'name' => 'orderId',
                            'type' => 'Number',
                            'info' => 'The unique numeric identifier for the order. This one is used for API purposes.',
                            'required' => true,
                        ],
                        [
                            'name' => 'refundLineItems',
                            'type' => 'Array',
                            'info' => 'Array of JSON objects. Array of line item IDs and quantities to refund.',
                            'required' => true,
                        ],
                        [
                            'name' => 'restock',
                            'type' => 'Boolean',
                            'info' => 'Boolean, whether or not to add the line items back to the store inventory.',
                            'required' => false,
                        ],
                        [
                            'name' => 'notify',
                            'type' => 'Boolean',
                            'info' => 'Boolean, set to true to send a refund notification to the customer.',
                            'required' => false,
                        ],
                        [
                            'name' => 'note',
                            'type' => 'String',
                            'info' => 'An optional comment attached to a refund.',
                            'required' => false,
                        ],
                        [
                            'name' => 'discrepancyReason',
                            'type' => 'String',
                            'info' => 'An optional comment, used if there is a discrepancy between calculated and actual refund amounts (one of: restock, damage, customer, other).',
                            'required' => false,
                        ],
                        [
                            'name' => 'shippingFullRefund',
                            'type' => 'Boolean',
                            'info' => 'Boolean, set to true to refund all remaining shipping.',
                            'required' => false,
                        ],
                        [
                            'name' => 'shippingAmount',
                            'type' => 'String',
                            'info' => 'Set specific amount of shipping to refund. Takes precedence over full_refund.',
                            'required' => false,
                        ],
                    ],
                'callbacks' =>
                    [
                        [
                            'name' => 'error',
                            'info' => 'Error',
                        ],
                        [
                            'name' => 'success',
                            'info' => 'Success',
                        ],
                    ],
            ],
            [
                'name' => 'getSingleShop',
                'description' => 'Get the configuration of the shop account.',
                'args' =>
                    [
                        [
                            'name' => 'shopName',
                            'type' => 'String',
                            'info' => 'Domain of your shop.',
                            'required' => true,
                        ],
                        [
                            'name' => 'accessToken',
                            'type' => 'String',
                            'info' => 'API access token that can be used to access the shop’s data as long as the client is installed.',
                            'required' => true,
                        ],
                        [
                            'name' => 'fields',
                            'type' => 'String',
                            'info' => 'Comma-separated list of fields to include in the response.',
                            'required' => false,
                        ],
                    ],
                'callbacks' =>
                    [
                        [
                            'name' => 'error',
                            'info' => 'Error',
                        ],
                        [
                            'name' => 'success',
                            'info' => 'Success',
                        ],
                    ],
            ],
            [
                'name' => 'getTransactions',
                'description' => 'Get the Representation of all money transfers.',
                'args' =>
                    [
                        [
                            'name' => 'shopName',
                            'type' => 'String',
                            'info' => 'Domain of your shop.',
                            'required' => true,
                        ],
                        [
                            'name' => 'accessToken',
                            'type' => 'String',
                            'info' => 'API access token that can be used to access the shop’s data as long as the client is installed.',
                            'required' => true,
                        ],
                        [
                            'name' => 'orderId',
                            'type' => 'Number',
                            'info' => 'The unique numeric identifier for the refund. This one is used for API purposes.',
                            'required' => true,
                        ],
                        [
                            'name' => 'sinceId',
                            'type' => 'Number',
                            'info' => 'Restrict results to after the specified ID.',
                            'required' => false,
                        ],
                        [
                            'name' => 'fields',
                            'type' => 'String',
                            'info' => 'Comma-separated list of fields to include in the response.',
                            'required' => false,
                        ],
                    ],
                'callbacks' =>
                    [
                        [
                            'name' => 'error',
                            'info' => 'Error',
                        ],
                        [
                            'name' => 'success',
                            'info' => 'Success',
                        ],
                    ],
            ],
            [
                'name' => 'getTransactionsCount',
                'description' => 'Count all a given order’s money transfers.',
                'args' =>
                    [
                        [
                            'name' => 'shopName',
                            'type' => 'String',
                            'info' => 'Domain of your shop.',
                            'required' => true,
                        ],
                        [
                            'name' => 'accessToken',
                            'type' => 'String',
                            'info' => 'API access token that can be used to access the shop’s data as long as the client is installed.',
                            'required' => true,
                        ],
                        [
                            'name' => 'orderId',
                            'type' => 'Number',
                            'info' => 'The unique numeric identifier for the refund. This one is used for API purposes.',
                            'required' => true,
                        ],
                    ],
                'callbacks' =>
                    [
                        [
                            'name' => 'error',
                            'info' => 'Error',
                        ],
                        [
                            'name' => 'success',
                            'info' => 'Success',
                        ],
                    ],
            ],
            [
                'name' => 'getSingleTransaction',
                'description' => 'Get the Representation of a specific transaction.',
                'args' =>
                    [
                        [
                            'name' => 'shopName',
                            'type' => 'String',
                            'info' => 'Domain of your shop.',
                            'required' => true,
                        ],
                        [
                            'name' => 'accessToken',
                            'type' => 'String',
                            'info' => 'API access token that can be used to access the shop’s data as long as the client is installed.',
                            'required' => true,
                        ],
                        [
                            'name' => 'orderId',
                            'type' => 'Number',
                            'info' => 'The unique numeric order identifier. This one is used for API purposes.',
                            'required' => true,
                        ],
                        [
                            'name' => 'transactionId',
                            'type' => 'Number',
                            'info' => 'A unique numeric identifier for the transaction.',
                            'required' => true,
                        ],
                        [
                            'name' => 'fields',
                            'type' => 'String',
                            'info' => 'Comma-separated list of fields to include in the response.',
                            'required' => false,
                        ],
                    ],
                'callbacks' =>
                    [
                        [
                            'name' => 'error',
                            'info' => 'Error',
                        ],
                        [
                            'name' => 'success',
                            'info' => 'Success',
                        ],
                    ],
            ],
            [
                'name' => 'createTransaction',
                'description' => 'Create new transaction.',
                'args' =>
                    [
                        [
                            'name' => 'shopName',
                            'type' => 'String',
                            'info' => 'Domain of your shop.',
                            'required' => true,
                        ],
                        [
                            'name' => 'accessToken',
                            'type' => 'String',
                            'info' => 'API access token that can be used to access the shop’s data as long as the client is installed.',
                            'required' => true,
                        ],
                        [
                            'name' => 'orderId',
                            'type' => 'Number',
                            'info' => 'The unique numeric identifier for the refund. This one is used for API purposes.',
                            'required' => true,
                        ],
                        [
                            'name' => 'kind',
                            'type' => 'String',
                            'info' => 'Permitted values are: authorization, capture, sale, void, refund.',
                            'required' => true,
                        ],
                        [
                            'name' => 'amount',
                            'type' => 'String',
                            'info' => 'The amount of money that the transaction was for.',
                            'required' => false,
                        ],
                    ],
                'callbacks' =>
                    [
                        [
                            'name' => 'error',
                            'info' => 'Error',
                        ],
                        [
                            'name' => 'success',
                            'info' => 'Success',
                        ],
                    ],
            ],
            [
                'name' => 'createUsageCharge',
                'description' => 'Create a new charge.',
                'args' =>
                    [
                        [
                            'name' => 'shopName',
                            'type' => 'String',
                            'info' => 'Domain of your shop.',
                            'required' => true,
                        ],
                        [
                            'name' => 'accessToken',
                            'type' => 'String',
                            'info' => 'API access token that can be used to access the shop’s data as long as the client is installed.',
                            'required' => true,
                        ],
                        [
                            'name' => 'applicationChargeId',
                            'type' => 'Number',
                            'info' => 'A unique numeric identifier for the application charge.',
                            'required' => true,
                        ],
                        [
                            'name' => 'description',
                            'type' => 'String',
                            'info' => 'The name of the usage charge.',
                            'required' => false,
                        ],
                        [
                            'name' => 'price',
                            'type' => 'String',
                            'info' => 'The price of the usage charge.',
                            'required' => false,
                        ],
                    ],
                'callbacks' =>
                    [
                        [
                            'name' => 'error',
                            'info' => 'Error',
                        ],
                        [
                            'name' => 'success',
                            'info' => 'Success',
                        ],
                    ],
            ],
            [
                'name' => 'getSingleUsageCharge',
                'description' => 'Retrieve a single charge.',
                'args' =>
                    [
                        [
                            'name' => 'shopName',
                            'type' => 'String',
                            'info' => 'Domain of your shop.',
                            'required' => true,
                        ],
                        [
                            'name' => 'accessToken',
                            'type' => 'String',
                            'info' => 'API access token that can be used to access the shop’s data as long as the client is installed.',
                            'required' => true,
                        ],
                        [
                            'name' => 'applicationChargeId',
                            'type' => 'Number',
                            'info' => 'A unique numeric identifier for the application charge.',
                            'required' => true,
                        ],
                        [
                            'name' => 'chargeId',
                            'type' => 'Number',
                            'info' => 'A unique numeric identifier for the usage charge.',
                            'required' => true,
                        ],
                        [
                            'name' => 'fields',
                            'type' => 'String',
                            'info' => 'Comma-separated list of fields to include in the response.',
                            'required' => false,
                        ],
                    ],
                'callbacks' =>
                    [
                        [
                            'name' => 'error',
                            'info' => 'Error',
                        ],
                        [
                            'name' => 'success',
                            'info' => 'Success',
                        ],
                    ],
            ],
            [
                'name' => 'getUsageCharges',
                'description' => 'All past and present usage charges requests are retrieved by this request.',
                'args' =>
                    [
                        [
                            'name' => 'shopName',
                            'type' => 'String',
                            'info' => 'Domain of your shop.',
                            'required' => true,
                        ],
                        [
                            'name' => 'accessToken',
                            'type' => 'String',
                            'info' => 'API access token that can be used to access the shop’s data as long as the client is installed.',
                            'required' => true,
                        ],
                        [
                            'name' => 'applicationChargeId',
                            'type' => 'Number',
                            'info' => 'A unique numeric identifier for the application charge.',
                            'required' => true,
                        ],
                        [
                            'name' => 'fields',
                            'type' => 'String',
                            'info' => 'Comma-separated list of fields to include in the response.',
                            'required' => false,
                        ],
                    ],
                'callbacks' =>
                    [
                        [
                            'name' => 'error',
                            'info' => 'Error',
                        ],
                        [
                            'name' => 'success',
                            'info' => 'Success',
                        ],
                    ],
            ],
            [
                'name' => 'getSmartCollections',
                'description' => 'Get a list of all smart collections that contain a given product.',
                'args' =>
                    [
                        [
                            'name' => 'shopName',
                            'type' => 'String',
                            'info' => 'Domain of your shop.',
                            'required' => true,
                        ],
                        [
                            'name' => 'accessToken',
                            'type' => 'String',
                            'info' => 'API access token that can be used to access the shop’s data as long as the client is installed.',
                            'required' => true,
                        ],
                        [
                            'name' => 'limit',
                            'type' => 'Number',
                            'info' => 'Amount of results (default: 50) (maximum: 250).',
                            'required' => false,
                        ],
                        [
                            'name' => 'page',
                            'type' => 'Number',
                            'info' => 'Page to show (default: 1).',
                            'required' => false,
                        ],
                        [
                            'name' => 'ids',
                            'type' => 'String',
                            'info' => 'A comma-separated list of collection ids.',
                            'required' => false,
                        ],
                        [
                            'name' => 'sinceId',
                            'type' => 'Number',
                            'info' => 'Restrict results to after the specified ID.',
                            'required' => false,
                        ],
                        [
                            'name' => 'title',
                            'type' => 'String',
                            'info' => 'Show smart collections with given title.',
                            'required' => false,
                        ],
                        [
                            'name' => 'productId',
                            'type' => 'Number',
                            'info' => 'Show smart collections that includes given product.',
                            'required' => false,
                        ],
                        [
                            'name' => 'handle',
                            'type' => 'String',
                            'info' => 'Filter by smart collection handle.',
                            'required' => false,
                        ],
                        [
                            'name' => 'updatedAtMin',
                            'type' => 'String',
                            'info' => 'Show smart collections last updated after date (format: 2014-04-25T16:15:47-04:00).',
                            'required' => false,
                        ],
                        [
                            'name' => 'updatedAtMax',
                            'type' => 'String',
                            'info' => 'Show smart collections last updated before date (format: 2014-04-25T16:15:47-04:00).',
                            'required' => false,
                        ],
                        [
                            'name' => 'publishedAtMin',
                            'type' => 'String',
                            'info' => 'Show smart collections published after date (format: 2014-04-25T16:15:47-04:00).',
                            'required' => false,
                        ],
                        [
                            'name' => 'publishedAtMax',
                            'type' => 'String',
                            'info' => 'Show smart collections published before date (format: 2014-04-25T16:15:47-04:00).',
                            'required' => false,
                        ],
                        [
                            'name' => 'publishedStatus',
                            'type' => 'String',
                            'info' => 'Takes: published - Show only published smart collections, unpublished - Show only unpublished smart collections, any - Show all smart collections (default).',
                            'required' => false,
                        ],
                        [
                            'name' => 'fields',
                            'type' => 'String',
                            'info' => 'Comma-separated list of fields to include in the response.',
                            'required' => false,
                        ],
                    ],
                'callbacks' =>
                    [
                        [
                            'name' => 'error',
                            'info' => 'Error',
                        ],
                        [
                            'name' => 'success',
                            'info' => 'Success',
                        ],
                    ],
            ],
            [
                'name' => 'getSmartCollectionsCount',
                'description' => 'Get a count of all smart collections that contain a given product.',
                'args' =>
                    [
                        [
                            'name' => 'shopName',
                            'type' => 'String',
                            'info' => 'Domain of your shop.',
                            'required' => true,
                        ],
                        [
                            'name' => 'accessToken',
                            'type' => 'String',
                            'info' => 'API access token that can be used to access the shop’s data as long as the client is installed.',
                            'required' => true,
                        ],
                        [
                            'name' => 'title',
                            'type' => 'String',
                            'info' => 'Show smart collections with given title.',
                            'required' => false,
                        ],
                        [
                            'name' => 'productId',
                            'type' => 'Number',
                            'info' => 'Show smart collections that includes given product.',
                            'required' => false,
                        ],
                        [
                            'name' => 'updatedAtMin',
                            'type' => 'String',
                            'info' => 'Show smart collections last updated after date (format: 2014-04-25T16:15:47-04:00).',
                            'required' => false,
                        ],
                        [
                            'name' => 'updatedAtMax',
                            'type' => 'String',
                            'info' => 'Show smart collections last updated before date (format: 2014-04-25T16:15:47-04:00).',
                            'required' => false,
                        ],
                        [
                            'name' => 'publishedAtMin',
                            'type' => 'String',
                            'info' => 'Show smart collections published after date (format: 2014-04-25T16:15:47-04:00).',
                            'required' => false,
                        ],
                        [
                            'name' => 'publishedAtMax',
                            'type' => 'String',
                            'info' => 'Show smart collections published before date (format: 2014-04-25T16:15:47-04:00).',
                            'required' => false,
                        ],
                        [
                            'name' => 'publishedStatus',
                            'type' => 'String',
                            'info' => 'Takes: published - Show only published smart collections, unpublished - Show only unpublished smart collections, any - Show all smart collections (default).',
                            'required' => false,
                        ],
                    ],
                'callbacks' =>
                    [
                        [
                            'name' => 'error',
                            'info' => 'Error',
                        ],
                        [
                            'name' => 'success',
                            'info' => 'Success',
                        ],
                    ],
            ],
            [
                'name' => 'getSingleSmartCollection',
                'description' => 'Get a single smart collection.',
                'args' =>
                    [
                        [
                            'name' => 'shopName',
                            'type' => 'String',
                            'info' => 'Domain of your shop.',
                            'required' => true,
                        ],
                        [
                            'name' => 'accessToken',
                            'type' => 'String',
                            'info' => 'API access token that can be used to access the shop’s data as long as the client is installed.',
                            'required' => true,
                        ],
                        [
                            'name' => 'smartCollectionId',
                            'type' => 'Number',
                            'info' => 'The unique numeric identifier for the smart collection.',
                            'required' => true,
                        ],
                        [
                            'name' => 'fields',
                            'type' => 'String',
                            'info' => 'Comma-separated list of fields to include in the response.',
                            'required' => false,
                        ],
                    ],
                'callbacks' =>
                    [
                        [
                            'name' => 'error',
                            'info' => 'Error',
                        ],
                        [
                            'name' => 'success',
                            'info' => 'Success',
                        ],
                    ],
            ],
            [
                'name' => 'createSmartCollection',
                'description' => 'Create a new smart collection.',
                'args' =>
                    [
                        [
                            'name' => 'shopName',
                            'type' => 'String',
                            'info' => 'Domain of your shop.',
                            'required' => true,
                        ],
                        [
                            'name' => 'accessToken',
                            'type' => 'String',
                            'info' => 'API access token that can be used to access the shop’s data as long as the client is installed.',
                            'required' => true,
                        ],
                        [
                            'name' => 'title',
                            'type' => 'String',
                            'info' => 'The name of the smart collection. Limit of 255 characters.',
                            'required' => true,
                        ],
                        [
                            'name' => 'bodyHtml',
                            'type' => 'String',
                            'info' => 'The description of the smart collection, complete with HTML markup. Many templates display this on their smart collection page.',
                            'required' => false,
                        ],
                        [
                            'name' => 'imageSrc',
                            'type' => 'File',
                            'info' => 'The collection image.',
                            'required' => false,
                        ],
                        [
                            'name' => 'published',
                            'type' => 'Boolean',
                            'info' => 'Is published collection.',
                            'required' => false,
                        ],
                        [
                            'name' => 'rules',
                            'type' => 'Array',
                            'info' => 'Array of JSON objects. The list of rules that define what products go into the smart collection.',
                            'required' => false,
                        ],
                    ],
                'callbacks' =>
                    [
                        [
                            'name' => 'error',
                            'info' => 'Error',
                        ],
                        [
                            'name' => 'success',
                            'info' => 'Success',
                        ],
                    ],
            ],
            [
                'name' => 'updateSmartCollection',
                'description' => 'Update an existing smart collection.',
                'args' =>
                    [
                        [
                            'name' => 'shopName',
                            'type' => 'String',
                            'info' => 'Domain of your shop.',
                            'required' => true,
                        ],
                        [
                            'name' => 'accessToken',
                            'type' => 'String',
                            'info' => 'API access token that can be used to access the shop’s data as long as the client is installed.',
                            'required' => true,
                        ],
                        [
                            'name' => 'smartCollectionId',
                            'type' => 'Number',
                            'info' => 'The unique numeric identifier for the smart collection.',
                            'required' => true,
                        ],
                        [
                            'name' => 'title',
                            'type' => 'String',
                            'info' => 'The name of the smart collection. Limit of 255 characters.',
                            'required' => false,
                        ],
                        [
                            'name' => 'bodyHtml',
                            'type' => 'String',
                            'info' => 'The description of the smart collection, complete with HTML markup. Many templates display this on their smart collection page.',
                            'required' => false,
                        ],
                        [
                            'name' => 'imageSrc',
                            'type' => 'File',
                            'info' => 'The collection image.',
                            'required' => false,
                        ],
                        [
                            'name' => 'published',
                            'type' => 'Boolean',
                            'info' => 'Is published collection.',
                            'required' => false,
                        ],
                        [
                            'name' => 'rules',
                            'type' => 'Array',
                            'info' => 'Array of JSON objects. The list of rules that define what products go into the smart collection.',
                            'required' => false,
                        ],
                    ],
                'callbacks' =>
                    [
                        [
                            'name' => 'error',
                            'info' => 'Error',
                        ],
                        [
                            'name' => 'success',
                            'info' => 'Success',
                        ],
                    ],
            ],
            [
                'name' => 'reorderSmartCollectionProducts',
                'description' => 'Change the manual ordering of products in the SmartCollection.',
                'args' =>
                    [
                        [
                            'name' => 'shopName',
                            'type' => 'String',
                            'info' => 'Domain of your shop.',
                            'required' => true,
                        ],
                        [
                            'name' => 'accessToken',
                            'type' => 'String',
                            'info' => 'API access token that can be used to access the shop’s data as long as the client is installed.',
                            'required' => true,
                        ],
                        [
                            'name' => 'smartCollectionId',
                            'type' => 'Number',
                            'info' => 'The unique numeric identifier for the smart collection.',
                            'required' => true,
                        ],
                        [
                            'name' => 'products',
                            'type' => 'Array',
                            'info' => 'Array of product ids in the order you want them arranged. (Applies only when sort_order is set to "manual").',
                            'required' => false,
                        ],
                        [
                            'name' => 'sortOrder',
                            'type' => 'String',
                            'info' => 'The type of sorting to apply. Valid values are listed in the Properties section above. (default: (current value)).',
                            'required' => false,
                        ],
                    ],
                'callbacks' =>
                    [
                        [
                            'name' => 'error',
                            'info' => 'Error',
                        ],
                        [
                            'name' => 'success',
                            'info' => 'Success',
                        ],
                    ],
            ],
            [
                'name' => 'deleteSmartCollection',
                'description' => 'Remove SmartCollection from the database.',
                'args' =>
                    [
                        [
                            'name' => 'shopName',
                            'type' => 'String',
                            'info' => 'Domain of your shop.',
                            'required' => true,
                        ],
                        [
                            'name' => 'accessToken',
                            'type' => 'String',
                            'info' => 'API access token that can be used to access the shop’s data as long as the client is installed.',
                            'required' => true,
                        ],
                        [
                            'name' => 'smartCollectionId',
                            'type' => 'Number',
                            'info' => 'The unique numeric identifier for the smart collection.',
                            'required' => true,
                        ],
                    ],
                'callbacks' =>
                    [
                        [
                            'name' => 'error',
                            'info' => 'Error',
                        ],
                        [
                            'name' => 'success',
                            'info' => 'Success',
                        ],
                    ],
            ],
        ],
    'custom' =>
        [
            'getAccessToken' =>
                [
                    'dictionary' =>
                        [
                            'shopName' => 'shopName',
                            'clientId' => 'client_id',
                            'clientSecret' => 'client_secret',
                            'code' => 'code',
                        ],
                    'vendorUrl' => 'https://{{shopName}}.myshopify.com/admin/oauth/access_token',
                    'method' => 'POST',
                    'wrap' => '',
                ],
            'getAbandonedCheckoutsCount' =>
                [
                    'dictionary' =>
                        [
                            'shopName' => 'shopName',
                            'accessToken' => 'accessToken',
                            'sinceId' => 'since_id',
                            'createdAtMin' => 'created_at_min',
                            'createdAtMax' => 'created_at_max',
                            'updatedAtMin' => 'updated_at_min',
                            'updatedAtMax' => 'updated_at_max',
                            'status' => 'status',
                        ],
                    'vendorUrl' => 'https://{{shopName}}.myshopify.com/admin/checkouts/count.json',
                    'method' => 'GET',
                    'wrap' => '',
                    'custom' => true
                ],
            'getAbandonedCheckouts' =>
                [
                    'dictionary' =>
                        [
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
                        ],
                    'vendorUrl' => 'https://{{shopName}}.myshopify.com/admin/checkouts.json',
                    'method' => 'GET',
                    'wrap' => '',
                    'custom' => true
                ],
            'createCheckout' =>
                [
                    'dictionary' =>
                        [
                            'shopName' => 'shopName',
                            'accessToken' => 'accessToken',
                            'email' => 'email',
                            'lineItemsVariantId' => 'variant_id',
                            'lineItemsQuantity' => 'quantity',
                        ],
                    'vendorUrl' => 'https://{{shopName}}.myshopify.com/admin/checkouts.json',
                    'method' => 'POST',
                    'wrap' => 'checkout',
                    'custom' => true,
                ],
            'getCheckouts' =>
                [
                    'dictionary' =>
                        [
                            'shopName' => 'shopName',
                            'accessToken' => 'accessToken',
                        ],
                    'vendorUrl' => 'https://{{shopName}}.myshopify.com/admin/checkouts.json',
                    'method' => 'GET',
                    'wrap' => '',
                ],
            'updateCheckout' =>
                [
                    'dictionary' =>
                        [
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
                        ],
                    'vendorUrl' => 'https://{{shopName}}.myshopify.com/admin/checkouts/{{token}}.json',
                    'method' => 'PUT',
                    'wrap' => 'checkout',
                    'custom' => true,
                ],
            'getShippingRates' =>
                [
                    'dictionary' =>
                        [
                            'shopName' => 'shopName',
                            'accessToken' => 'accessToken',
                            'token' => 'token',
                        ],
                    'vendorUrl' => 'https://{{shopName}}.myshopify.com/admin/checkouts/{{token}}/shipping_rates.json',
                    'method' => 'GET',
                    'wrap' => '',
                ],
            'getSingleCheckoutPayments' =>
                [
                    'dictionary' =>
                        [
                            'shopName' => 'shopName',
                            'accessToken' => 'accessToken',
                            'token' => 'token',
                        ],
                    'vendorUrl' => 'https://{{shopName}}.myshopify.com/admin/checkouts/{{token}}/payments.json',
                    'method' => 'GET',
                    'wrap' => '',
                ],
            'createPayment' =>
                [
                    'dictionary' =>
                        [
                            'shopName' => 'shopName',
                            'accessToken' => 'accessToken',
                            'token' => 'token',
                            'requestDetailsIpAddress' => 'ip_address',
                            'requestDetailsAcceptLanguage' => 'accept_language',
                            'requestDetailsUserAgent' => 'user_agent',
                            'amount' => 'amount',
                            'sessionId' => 'session_id',
                        ],
                    'vendorUrl' => 'https://{{shopName}}.myshopify.com/admin/checkouts/{{token}}/payments.json',
                    'method' => 'POST',
                    'wrap' => 'payment',
                    'custom' => true,
                ],
            'getSinglePayment' =>
                [
                    'dictionary' =>
                        [
                            'shopName' => 'shopName',
                            'accessToken' => 'accessToken',
                            'token' => 'token',
                        ],
                    'vendorUrl' => 'https://{{shopName}}.myshopify.com/admin/checkouts/{{token}}.json',
                    'method' => 'GET',
                    'wrap' => '',
                ],
            'countCheckoutPayments' =>
                [
                    'dictionary' =>
                        [
                            'shopName' => 'shopName',
                            'accessToken' => 'accessToken',
                            'token' => 'token',
                        ],
                    'vendorUrl' => 'https://{{shopName}}.myshopify.com/admin/checkouts/{{token}}/payments/count.json',
                    'method' => 'GET',
                    'wrap' => '',
                ],
            'storeCreditCardInVault' =>
                [
                    'dictionary' =>
                        [
                            'shopName' => 'shopName',
                            'accessToken' => 'accessToken',
                            'creditCardNumber' => 'number',
                            'creditCardFirstName' => 'first_name',
                            'creditCardLastName' => 'last_name',
                            'creditCardMonth' => 'month',
                            'creditCardYear' => 'year',
                            'creditCardVerificationValue' => 'verification_value',
                        ],
                    'vendorUrl' => 'https://elb.deposit.shopifycs.com/sessions',
                    'method' => 'POST',
                    'wrap' => 'credit_card',
                ],
            'addProductToCollection' =>
                [
                    'dictionary' =>
                        [
                            'shopName' => 'shopName',
                            'accessToken' => 'accessToken',
                            'productId' => 'product_id',
                            'collectionId' => 'collection_id',
                        ],
                    'vendorUrl' => 'https://{{shopName}}.myshopify.com/admin/collects.json',
                    'method' => 'POST',
                    'wrap' => 'collect',
                ],
            'removeProductFromCollection' =>
                [
                    'dictionary' =>
                        [
                            'shopName' => 'shopName',
                            'accessToken' => 'accessToken',
                            'collectId' => 'collectId',
                        ],
                    'vendorUrl' => 'https://{{shopName}}.myshopify.com/admin/collects/{{collectId}}.json',
                    'method' => 'DELETE',
                    'wrap' => '',
                ],
            'getCollects' =>
                [
                    'dictionary' =>
                        [
                            'shopName' => 'shopName',
                            'accessToken' => 'accessToken',
                            'productId' => 'product_id',
                            'collectionId' => 'collection_id',
                            'page' => 'page',
                            'limit' => 'limit',
                            'fields' => 'fields',
                        ],
                    'vendorUrl' => 'https://{{shopName}}.myshopify.com/admin/collects.json',
                    'method' => 'GET',
                    'wrap' => '',
                ],
            'getCollectsCount' =>
                [
                    'dictionary' =>
                        [
                            'shopName' => 'shopName',
                            'accessToken' => 'accessToken',
                            'productId' => 'product_id',
                            'collectionId' => 'collection_id',
                        ],
                    'vendorUrl' => 'https://{{shopName}}.myshopify.com/admin/collects/count.json',
                    'method' => 'GET',
                    'wrap' => '',
                ],
            'getSingleCollect' =>
                [
                    'dictionary' =>
                        [
                            'shopName' => 'shopName',
                            'accessToken' => 'accessToken',
                            'collectId' => 'collectId',
                            'fields' => 'fields',
                        ],
                    'vendorUrl' => 'https://{{shopName}}.myshopify.com/admin/collects/{{collectId}}.json',
                    'method' => 'GET',
                    'wrap' => '',
                    'custom' => true
                ],
            'getCustomCollections' =>
                [
                    'dictionary' =>
                        [
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
                        ],
                    'vendorUrl' => 'https://{{shopName}}.myshopify.com/admin/custom_collections.json',
                    'method' => 'GET',
                    'wrap' => '',
                    'custom' => true,
                ],
            'getCustomCollectionsCount' =>
                [
                    'dictionary' =>
                        [
                            'shopName' => 'shopName',
                            'accessToken' => 'accessToken',
                            'title' => 'title',
                            'productId' => 'product_id',
                            'updatedAtMin' => 'updated_at_min',
                            'updatedAtMax' => 'updated_at_max',
                            'publishedAtMin' => 'published_at_min',
                            'publishedAtMax' => 'published_at_max',
                            'publishedStatus' => 'published_status',
                        ],
                    'vendorUrl' => 'https://{{shopName}}.myshopify.com/admin/custom_collections/count.json',
                    'method' => 'GET',
                    'wrap' => '',
                    'custom' => true
                ],
            'getSingleCustomCollection' =>
                [
                    'dictionary' =>
                        [
                            'shopName' => 'shopName',
                            'accessToken' => 'accessToken',
                            'collectionId' => 'collectionId',
                            'fields' => 'fields',
                        ],
                    'vendorUrl' => 'https://{{shopName}}.myshopify.com/admin/custom_collections/{{collectionId}}.json',
                    'method' => 'GET',
                    'wrap' => '',
                    'custom' => true
                ],
            'createCustomCollection' =>
                [
                    'dictionary' =>
                        [
                            'shopName' => 'shopName',
                            'accessToken' => 'accessToken',
                            'title' => 'title',
                            'imageSrc' => 'imageSrc',
                            'collectsProductId' => 'collectsProductId',
                            'published' => 'published',
                        ],
                    'vendorUrl' => 'https://{{shopName}}.myshopify.com/admin/custom_collections.json',
                    'method' => 'POST',
                    'wrap' => 'custom_collection',
                    'custom' => true,
                ],
            'updateCustomCollection' =>
                [
                    'dictionary' =>
                        [
                            'shopName' => 'shopName',
                            'accessToken' => 'accessToken',
                            'collectionId' => 'collectionId',
                            'handle' => 'handle',
                            'title' => 'title',
                            'imageSrc' => 'imageSrc',
                            'collectsProductId' => 'collectsProductId',
                            'published' => 'published',
                        ],
                    'vendorUrl' => 'https://{{shopName}}.myshopify.com/admin/custom_collections/{{collectionId}}.json',
                    'method' => 'PUT',
                    'wrap' => 'custom_collection',
                    'custom' => true,
                ],
            'deleteCustomCollection' =>
                [
                    'dictionary' =>
                        [
                            'shopName' => 'shopName',
                            'accessToken' => 'accessToken',
                            'collectionId' => 'collectionId',
                        ],
                    'vendorUrl' => 'https://{{shopName}}.myshopify.com/admin/custom_collections/{{collectionId}}.json',
                    'method' => 'DELETE',
                    'wrap' => '',
                ],
            'getCustomers' =>
                [
                    'dictionary' =>
                        [
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
                        ],
                    'vendorUrl' => 'https://{{shopName}}.myshopify.com/admin/customers.json',
                    'method' => 'GET',
                    'wrap' => '',
                    'custom' => true
                ],
            'searchCustomers' =>
                [
                    'dictionary' =>
                        [
                            'shopName' => 'shopName',
                            'accessToken' => 'accessToken',
                            'order' => 'order',
                            'query' => 'query',
                            'page' => 'page',
                            'limit' => 'limit',
                            'fields' => 'fields',
                        ],
                    'vendorUrl' => 'https://{{shopName}}.myshopify.com/admin/customers/search.json',
                    'method' => 'GET',
                    'wrap' => '',
                    'custom' => true
                ],
            'getSingleCustomer' =>
                [
                    'dictionary' =>
                        [
                            'shopName' => 'shopName',
                            'accessToken' => 'accessToken',
                            'customerId' => 'customerId',
                            'fields' => 'fields',
                        ],
                    'vendorUrl' => 'https://{{shopName}}.myshopify.com/admin/customers/{{customerId}}.json',
                    'method' => 'GET',
                    'wrap' => '',
                    'custom' => true
                ],
            'createCustomer' =>
                [
                    'dictionary' =>
                        [
                            'shopName' => 'shopName',
                            'accessToken' => 'accessToken',
                            'firstName' => 'first_name',
                            'lastName' => 'last_name',
                            'email' => 'email',
                            'phone' => 'phone',
                            'verifiedEmail' => 'verified_email',
                            'sendEmailInvite' => 'send_email_invite',
                            'sendEmailWelcome' => 'send_email_welcome',
                        ],
                    'vendorUrl' => 'https://{{shopName}}.myshopify.com/admin/customers.json',
                    'method' => 'POST',
                    'wrap' => 'customer',
                ],
            'updateCustomer' =>
                [
                    'dictionary' =>
                        [
                            'shopName' => 'shopName',
                            'accessToken' => 'accessToken',
                            'customerId' => 'id',
                            'firstName' => 'firstName',
                            'lastName' => 'lastName',
                            'email' => 'email',
                            'tags' => 'tags',
                            'note' => 'note',
                        ],
                    'vendorUrl' => 'https://{{shopName}}.myshopify.com/admin/customers/{{customerId}}.json',
                    'method' => 'PUT',
                    'wrap' => 'customer',
                    'custom' => true
                ],
            'createAccountActivationURL' =>
                [
                    'dictionary' =>
                        [
                            'shopName' => 'shopName',
                            'accessToken' => 'accessToken',
                            'customerId' => 'customerId',
                        ],
                    'vendorUrl' => 'https://{{shopName}}.myshopify.com/admin/customers/{{customerId}}/account_activation_url.json',
                    'method' => 'POST',
                    'wrap' => '',
                ],
            'deleteCustomer' =>
                [
                    'dictionary' =>
                        [
                            'shopName' => 'shopName',
                            'accessToken' => 'accessToken',
                            'customerId' => 'customerId',
                        ],
                    'vendorUrl' => 'https://{{shopName}}.myshopify.com/admin/customers/{{customerId}}.json',
                    'method' => 'DELETE',
                    'wrap' => '',
                ],
            'getCustomersCount' =>
                [
                    'dictionary' =>
                        [
                            'shopName' => 'shopName',
                            'accessToken' => 'accessToken',
                        ],
                    'vendorUrl' => 'https://{{shopName}}.myshopify.com/admin/customers/count.json',
                    'method' => 'GET',
                    'wrap' => '',
                ],
            'getCustomerOrders' =>
                [
                    'dictionary' =>
                        [
                            'shopName' => 'shopName',
                            'accessToken' => 'accessToken',
                            'customerId' => 'customer_id',
                        ],
                    'vendorUrl' => 'https://{{shopName}}.myshopify.com/admin/orders.json',
                    'method' => 'GET',
                    'wrap' => '',
                ],
            'getEvents' =>
                [
                    'dictionary' =>
                        [
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
                        ],
                    'vendorUrl' => 'https://{{shopName}}.myshopify.com/admin/[[objectTypeId]]events.json',
                    'method' => 'GET',
                    'wrap' => '',
                    'custom' => true,
                ],
            'getSingleEvent' =>
                [
                    'dictionary' =>
                        [
                            'shopName' => 'shopName',
                            'accessToken' => 'accessToken',
                            'eventId' => 'eventId',
                            'fields' => 'fields',
                        ],
                    'vendorUrl' => 'https://{{shopName}}.myshopify.com/admin/events/{{eventId}}.json',
                    'method' => 'GET',
                    'wrap' => '',
                    'custom' => true
                ],
            'getEventByType' =>
                [
                    'dictionary' =>
                        [
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
                        ],
                    'vendorUrl' => 'https://{{shopName}}.myshopify.com/admin/{{objectType}}/{{objectTypeId}}/events.json',
                    'method' => 'GET',
                    'wrap' => '',
                    'custom' => true
                ],
            'getEventsCount' =>
                [
                    'dictionary' =>
                        [
                            'shopName' => 'shopName',
                            'accessToken' => 'accessToken',
                            'createdAtMin' => 'created_at_min',
                            'createdAtMax' => 'created_at_max',
                        ],
                    'vendorUrl' => 'https://{{shopName}}.myshopify.com/admin/events/count.json',
                    'method' => 'GET',
                    'wrap' => '',
                    'custom' => true
                ],
            'getProducts' =>
                [
                    'dictionary' =>
                        [
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
                        ],
                    'vendorUrl' => 'https://{{shopName}}.myshopify.com/admin/products.json',
                    'method' => 'GET',
                    'wrap' => '',
                    'custom' => true
                ],
            'getProductsCount' =>
                [
                    'dictionary' =>
                        [
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
                        ],
                    'vendorUrl' => 'https://{{shopName}}.myshopify.com/admin/products/count.json',
                    'method' => 'GET',
                    'wrap' => '',
                    'custom' => true
                ],
            'getSingleProduct' =>
                [
                    'dictionary' =>
                        [
                            'shopName' => 'shopName',
                            'accessToken' => 'accessToken',
                            'productId' => 'productId',
                            'fields' => 'fields',
                        ],
                    'vendorUrl' => 'https://{{shopName}}.myshopify.com/admin/products/{{productId}}.json',
                    'method' => 'GET',
                    'wrap' => '',
                    'custom' => true
                ],
            'createProduct' =>
                [
                    'dictionary' =>
                        [
                            'shopName' => 'shopName',
                            'accessToken' => 'accessToken',
                            'title' => 'title',
                            'bodyHtml' => 'body_html',
                            'productType' => 'product_type',
                            'imageSrc' => 'imageSrc',
                            'vendor' => 'vendor',
                            'variants' => 'variants',
                            'tags' => 'tags',
                            'published' => 'published',
                        ],
                    'vendorUrl' => 'https://{{shopName}}.myshopify.com/admin/products.json',
                    'method' => 'POST',
                    'wrap' => 'product',
                    'custom' => true,
                ],
            'updateProduct' =>
                [
                    'dictionary' =>
                        [
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
                        ],
                    'vendorUrl' => 'https://{{shopName}}.myshopify.com/admin/products/{{productId}}.json',
                    'method' => 'PUT',
                    'wrap' => 'product',
                    'custom' => true
                ],
            'deleteProduct' =>
                [
                    'dictionary' =>
                        [
                            'shopName' => 'shopName',
                            'accessToken' => 'accessToken',
                            'productId' => 'productId',
                        ],
                    'vendorUrl' => 'https://{{shopName}}.myshopify.com/admin/products/{{productId}}.json',
                    'method' => 'DELETE',
                    'wrap' => '',
                ],
            'getProductImages' =>
                [
                    'dictionary' =>
                        [
                            'shopName' => 'shopName',
                            'accessToken' => 'accessToken',
                            'productId' => 'productId',
                            'sinceId' => 'since_id',
                            'fields' => 'fields',
                        ],
                    'vendorUrl' => 'https://{{shopName}}.myshopify.com/admin/products/{{productId}}/images.json',
                    'method' => 'GET',
                    'wrap' => '',
                    'custom' => true
                ],
            'getProductImagesCount' =>
                [
                    'dictionary' =>
                        [
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
                        ],
                    'vendorUrl' => 'https://{{shopName}}.myshopify.com/admin/products/{{productId}}/images/count.json',
                    'method' => 'GET',
                    'wrap' => '',
                    'custom' => true
                ],
            'getSingleProductImage' =>
                [
                    'dictionary' =>
                        [
                            'shopName' => 'shopName',
                            'accessToken' => 'accessToken',
                            'productId' => 'productId',
                            'imageId' => 'imageId',
                            'fields' => 'fields',
                        ],
                    'vendorUrl' => 'https://{{shopName}}.myshopify.com/admin/products/{{productId}}/images/{{imageId}}.json',
                    'method' => 'GET',
                    'wrap' => '',
                    'custom' => true
                ],
            'createProductImage' =>
                [
                    'dictionary' =>
                        [
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
                        ],
                    'vendorUrl' => 'https://{{shopName}}.myshopify.com/admin/products/{{productId}}/images.json',
                    'method' => 'POST',
                    'wrap' => 'image',
                    'custom' => true,
                ],
            'updateProductImage' =>
                [
                    'dictionary' =>
                        [
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
                        ],
                    'vendorUrl' => 'https://{{shopName}}.myshopify.com/admin/products/{{productId}}/images/{{imageId}}.json',
                    'method' => 'PUT',
                    'wrap' => 'image',
                    'custom' => true,
                ],
            'deleteProductImage' =>
                [
                    'dictionary' =>
                        [
                            'shopName' => 'shopName',
                            'accessToken' => 'accessToken',
                            'productId' => 'productId',
                            'imageId' => 'imageId',
                        ],
                    'vendorUrl' => 'https://{{shopName}}.myshopify.com/admin/products/{{productId}}/images/{{imageId}}.json',
                    'method' => 'DELETE',
                    'wrap' => '',
                ],
            'getProductVariants' =>
                [
                    'dictionary' =>
                        [
                            'shopName' => 'shopName',
                            'accessToken' => 'accessToken',
                            'productId' => 'productId',
                            'limit' => 'limit',
                            'page' => 'page',
                            'sinceId' => 'since_id',
                            'fields' => 'fields',
                        ],
                    'vendorUrl' => 'https://{{shopName}}.myshopify.com/admin/products/{{productId}}/variants.json',
                    'method' => 'GET',
                    'wrap' => '',
                    'custom' => true
                ],
            'getProductVariantsCount' =>
                [
                    'dictionary' =>
                        [
                            'shopName' => 'shopName',
                            'accessToken' => 'accessToken',
                            'productId' => 'productId',
                        ],
                    'vendorUrl' => 'https://{{shopName}}.myshopify.com/admin/products/{{productId}}/variants/count.json',
                    'method' => 'GET',
                    'wrap' => '',
                ],
            'getSingleProductVariant' =>
                [
                    'dictionary' =>
                        [
                            'shopName' => 'shopName',
                            'accessToken' => 'accessToken',
                            'variantId' => 'variantId',
                        ],
                    'vendorUrl' => 'https://{{shopName}}.myshopify.com/admin/variants/{{variantId}}.json',
                    'method' => 'GET',
                    'wrap' => '',
                ],
            'createProductVariant' =>
                [
                    'dictionary' =>
                        [
                            'shopName' => 'shopName',
                            'accessToken' => 'accessToken',
                            'productId' => 'productId',
                            'variant' => 'variant',
                        ],
                    'vendorUrl' => 'https://{{shopName}}.myshopify.com/admin/products/{{productId}}/variants.json',
                    'method' => 'POST',
                    'wrap' => '',
                ],
            'updateProductVariant' =>
                [
                    'dictionary' =>
                        [
                            'shopName' => 'shopName',
                            'accessToken' => 'accessToken',
                            'variantId' => 'id',
                            'variant' => 'variant',
                            'title' => 'title'
                        ],
                    'vendorUrl' => 'https://{{shopName}}.myshopify.com/admin/variants/{{variantId}}.json',
                    'method' => 'PUT',
                    'wrap' => '',
                    'custom' => true,
                ],
            'deleteProductVariant' =>
                [
                    'dictionary' =>
                        [
                            'shopName' => 'shopName',
                            'accessToken' => 'accessToken',
                            'productId' => 'productId',
                            'variantId' => 'variantId',
                        ],
                    'vendorUrl' => 'https://{{shopName}}.myshopify.com/admin/products/{{productId}}/variants/{{variantId}}.json',
                    'method' => 'DELETE',
                    'wrap' => '',
                ],
            'getOrderRefunds' =>
                [
                    'dictionary' =>
                        [
                            'shopName' => 'shopName',
                            'accessToken' => 'accessToken',
                            'orderId' => 'orderId',
                        ],
                    'vendorUrl' => 'https://{{shopName}}.myshopify.com/admin/orders/{{orderId}}/refunds.json',
                    'method' => 'GET',
                    'wrap' => '',
                ],
            'getOrderSingleRefund' =>
                [
                    'dictionary' =>
                        [
                            'shopName' => 'shopName',
                            'accessToken' => 'accessToken',
                            'orderId' => 'orderId',
                            'refundId' => 'refundId',
                        ],
                    'vendorUrl' => 'https://{{shopName}}.myshopify.com/admin/orders/{{orderId}}/refunds/{{refundId}}.json',
                    'method' => 'GET',
                    'wrap' => '',
                ],
            'calculateRefund' =>
                [
                    'dictionary' =>
                        [
                            'shopName' => 'shopName',
                            'accessToken' => 'accessToken',
                            'orderId' => 'orderId',
                            'shippingFullRefund' => 'full_refund',
                            'shippingAmount' => 'amount',
                            'refundLineItems' => 'refund_line_items',
                        ],
                    'vendorUrl' => 'https://{{shopName}}.myshopify.com/admin/orders/{{orderId}}/refunds/calculate.json',
                    'method' => 'POST',
                    'wrap' => 'refund',
                    'custom' => true,
                ],
            'createOrderRefundByTransaction' =>
                [
                    'dictionary' =>
                        [
                            'shopName' => 'shopName',
                            'accessToken' => 'accessToken',
                            'orderId' => 'orderId',
                            'transactions' => 'transactions',
                            'restock' => 'restock',
                            'notify' => 'notify',
                            'note' => 'note',
                            'discrepancyReason' => 'discrepancy_reason',
                            'shippingFullRefund' => 'full_refund',
                            'shippingAmount' => 'shippingAmount',
                        ],
                    'vendorUrl' => 'https://{{shopName}}.myshopify.com/admin/orders/{{orderId}}/refunds.json',
                    'method' => 'POST',
                    'wrap' => 'refund',
                    'custom' => true,
                ],
            'createOrderRefundByItems' =>
                [
                    'dictionary' =>
                        [
                            'shopName' => 'shopName',
                            'accessToken' => 'accessToken',
                            'orderId' => 'orderId',
                            'refundLineItems' => 'refund_line_items',
                            'restock' => 'restock',
                            'notify' => 'notify',
                            'note' => 'note',
                            'discrepancyReason' => 'discrepancy_reason',
                            'shippingFullRefund' => 'full_refund',
                            'shippingAmount' => 'shippingAmount',
                        ],
                    'vendorUrl' => 'https://{{shopName}}.myshopify.com/admin/orders/{{orderId}}/refunds.json',
                    'method' => 'POST',
                    'wrap' => 'refund',
                    'custom' => true,
                ],
            'getSingleShop' =>
                [
                    'dictionary' =>
                        [
                            'shopName' => 'shopName',
                            'accessToken' => 'accessToken',
                            'fields' => 'fields',
                        ],
                    'vendorUrl' => 'https://{{shopName}}.myshopify.com/admin/shop.json',
                    'method' => 'GET',
                    'wrap' => '',
                    'custom' => true
                ],
            'getTransactions' =>
                [
                    'dictionary' =>
                        [
                            'shopName' => 'shopName',
                            'accessToken' => 'accessToken',
                            'orderId' => 'orderId',
                            'sinceId' => 'since_id',
                            'fields' => 'fields',
                        ],
                    'vendorUrl' => 'https://{{shopName}}.myshopify.com/admin/orders/{{orderId}}/transactions.json',
                    'method' => 'GET',
                    'wrap' => '',
                ],
            'getTransactionsCount' =>
                [
                    'dictionary' =>
                        [
                            'shopName' => 'shopName',
                            'accessToken' => 'accessToken',
                            'orderId' => 'orderId',
                        ],
                    'vendorUrl' => 'https://{{shopName}}.myshopify.com/admin/orders/{{orderId}}/transactions/count.json',
                    'method' => 'GET',
                    'wrap' => '',
                    'custom' => true
                ],
            'getSingleTransaction' =>
                [
                    'dictionary' =>
                        [
                            'shopName' => 'shopName',
                            'accessToken' => 'accessToken',
                            'orderId' => 'orderId',
                            'transactionId' => 'transactionId',
                            'fields' => 'fields',
                        ],
                    'vendorUrl' => 'https://{{shopName}}.myshopify.com/admin/orders/{{orderId}}/transactions/{{transactionId}}.json',
                    'method' => 'GET',
                    'wrap' => '',
                    'custom' => true
                ],
            'createTransaction' =>
                [
                    'dictionary' =>
                        [
                            'shopName' => 'shopName',
                            'accessToken' => 'accessToken',
                            'orderId' => 'orderId',
                            'kind' => 'kind',
                            'amount' => 'amount',
                        ],
                    'vendorUrl' => 'https://{{shopName}}.myshopify.com/admin/orders/{{orderId}}/transactions.json',
                    'method' => 'POST',
                    'wrap' => 'transaction',
                ],
            'createUsageCharge' =>
                [
                    'dictionary' =>
                        [
                            'shopName' => 'shopName',
                            'accessToken' => 'accessToken',
                            'applicationChargeId' => 'applicationChargeId',
                            'description' => 'description',
                            'price' => 'price',
                        ],
                    'vendorUrl' => 'https://{{shopName}}.myshopify.com/admin/recurring_application_charges/{{applicationChargeId}}/usage_charges.json',
                    'method' => 'POST',
                    'wrap' => 'usage_charge',
                ],
            'getSingleUsageCharge' =>
                [
                    'dictionary' =>
                        [
                            'shopName' => 'shopName',
                            'accessToken' => 'accessToken',
                            'applicationChargeId' => 'applicationChargeId',
                            'chargeId' => 'chargeId',
                            'fields' => 'fields',
                        ],
                    'vendorUrl' => 'https://{{shopName}}.myshopify.com/admin/recurring_application_charges/{{applicationChargeId}}/usage_charges/{{chargeId}}.json',
                    'method' => 'GET',
                    'wrap' => '',
                    'custom' => true
                ],
            'getUsageCharges' =>
                [
                    'dictionary' =>
                        [
                            'shopName' => 'shopName',
                            'accessToken' => 'accessToken',
                            'applicationChargeId' => 'applicationChargeId',
                            'fields' => 'fields',
                        ],
                    'vendorUrl' => 'https://{{shopName}}.myshopify.com/admin/recurring_application_charges/{{applicationChargeId}}/usage_charges.json',
                    'method' => 'GET',
                    'wrap' => '',
                    'custom' => true
                ],
            'getSmartCollections' =>
                [
                    'dictionary' =>
                        [
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
                        ],
                    'vendorUrl' => 'https://{{shopName}}.myshopify.com/admin/smart_collections.json',
                    'method' => 'GET',
                    'wrap' => '',
                    'custom' => true
                ],
            'getSmartCollectionsCount' =>
                [
                    'dictionary' =>
                        [
                            'shopName' => 'shopName',
                            'accessToken' => 'accessToken',
                            'title' => 'title',
                            'productId' => 'product_id',
                            'updatedAtMin' => 'updated_at_min',
                            'updatedAtMax' => 'updated_at_max',
                            'publishedAtMin' => 'published_at_min',
                            'publishedAtMax' => 'published_at_max',
                            'publishedStatus' => 'published_status',
                        ],
                    'vendorUrl' => 'https://{{shopName}}.myshopify.com/admin/smart_collections/count.json',
                    'method' => 'GET',
                    'wrap' => '',
                    'custom' => true
                ],
            'getSingleSmartCollection' =>
                [
                    'dictionary' =>
                        [
                            'shopName' => 'shopName',
                            'accessToken' => 'accessToken',
                            'smartCollectionId' => 'smartCollectionId',
                            'fields' => 'fields',
                        ],
                    'vendorUrl' => 'https://{{shopName}}.myshopify.com/admin/smart_collections/{{smartCollectionId}}.json',
                    'method' => 'GET',
                    'wrap' => '',
                    'custom' => true
                ],
            'createSmartCollection' =>
                [
                    'dictionary' =>
                        [
                            'shopName' => 'shopName',
                            'accessToken' => 'accessToken',
                            'title' => 'title',
                            'bodyHtml' => 'body_html',
                            'imageSrc' => 'src',
                            'published' => 'published',
                            'rules' => 'rules',
                        ],
                    'vendorUrl' => 'https://{{shopName}}.myshopify.com/admin/smart_collections.json',
                    'method' => 'POST',
                    'wrap' => 'smart_collection',
                    'custom' => true,
                ],
            'updateSmartCollection' =>
                [
                    'dictionary' =>
                        [
                            'shopName' => 'shopName',
                            'accessToken' => 'accessToken',
                            'smartCollectionId' => 'smartCollectionId',
                            'title' => 'title',
                            'bodyHtml' => 'body_html',
                            'imageSrc' => 'src',
                            'published' => 'published',
                            'rules' => 'rules',
                        ],
                    'vendorUrl' => 'https://{{shopName}}.myshopify.com/admin/smart_collections/{{smartCollectionId}}.json',
                    'method' => 'PUT',
                    'wrap' => 'smart_collection',
                    'custom' => true,
                ],
            'reorderSmartCollectionProducts' =>
                [
                    'dictionary' =>
                        [
                            'shopName' => 'shopName',
                            'accessToken' => 'accessToken',
                            'smartCollectionId' => 'smartCollectionId',
                            'products' => 'products',
                            'sortOrder' => 'sortOrder',
                        ],
                    'vendorUrl' => 'https://{{shopName}}.myshopify.com/admin/smart_collections/{{smartCollectionId}}/order.json',
                    'method' => 'PUTGET',
                    'wrap' => ''
                ],
            'deleteSmartCollection' =>
                [
                    'dictionary' =>
                        [
                            'shopName' => 'shopName',
                            'accessToken' => 'accessToken',
                            'smartCollectionId' => 'smartCollectionId',
                        ],
                    'vendorUrl' => 'https://{{shopName}}.myshopify.com/admin/smart_collections/{{smartCollectionId}}.json',
                    'method' => 'DELETE',
                    'wrap' => '',
                ],
        ],
];
