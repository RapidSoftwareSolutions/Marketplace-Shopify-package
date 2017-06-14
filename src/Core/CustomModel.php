<?php

namespace Core;

if (!defined('RAPID_IN')) exit('No direct script access allowed');

/**
 * Custom Model
 */
class CustomModel
{
    public static function createCheckout($param, $blockCustom, $vendorUrl)
    {
        $result = [];
        $lineItems = [];
        $lineItemsList = ['variant_id', 'quantity'];
        foreach ($lineItemsList as $oneFiled) {
            if (isset($param[$oneFiled]) && strlen($param[$oneFiled]) > 0) {
                $lineItems[$oneFiled] = intval($param[$oneFiled]);
                unset($param[$oneFiled]);
            }
        }
        if (count($lineItems) > 0) {
            $param['line_items'][] = $lineItems;
        }
        if (isset($blockCustom['wrap']) && strlen($blockCustom['wrap']) > 0) {
            $result[$blockCustom['wrap']] = $param;
        } else {
            $result = $param;
        }

        return json_encode($result);
    }

    public static function updateCheckout($param, $blockCustom, $vendorUrl)
    {
        $result = [];
        $shippingAddress = [];
        $shippingAddressList = ['first_name', 'last_name', 'address1', 'city', 'province_code', 'country_code', 'phone', 'zip'];
        foreach ($shippingAddressList as $oneFiled) {
            if (isset($param[$oneFiled]) && strlen($param[$oneFiled]) > 0) {
                $shippingAddress[$oneFiled] = intval($param[$oneFiled]);
                unset($param[$oneFiled]);
            }
        }
        if (count($shippingAddress) > 0) {
            $param['shipping_address'] = $shippingAddress;
        }
        if (isset($blockCustom['wrap']) && strlen($blockCustom['wrap']) > 0) {
            $result[$blockCustom['wrap']] = $param;
        } else {
            $result = $param;
        }

        return json_encode($result);
    }

    public static function createPayment($param, $blockCustom, $vendorUrl)
    {
        $result = [];
        $requestDetails = [];
        $requestDetailsList = ['ip_address', 'accept_language', 'user_agent'];
        foreach ($requestDetailsList as $oneFiled) {
            if (isset($param[$oneFiled]) && strlen($param[$oneFiled]) > 0) {
                $requestDetails[$oneFiled] = intval($param[$oneFiled]);
                unset($param[$oneFiled]);
            }
        }
        if (count($requestDetails) > 0) {
            $param['request_details'] = $requestDetails;
        }
        $param["unique_token"] = "client-side-idempotency-token";
        if (isset($blockCustom['wrap']) && strlen($blockCustom['wrap']) > 0) {
            $result[$blockCustom['wrap']] = $param;
        } else {
            $result = $param;
        }

        return json_encode($result);
    }

    public static function createCustomCollection($param, $blockCustom, $vendorUrl)
    {
        $result = [];
        if (isset($param['imageSrc']) && strlen($param['imageSrc']) > 0) {
            $param['image']['src'] = $param['imageSrc'];
            unset($param['imageSrc']);
        }
        if (isset($param['collectsProductId']) && strlen($param['collectsProductId']) > 0) {
            $param['collects'][]["product_id"] = $param['collectsProductId'];
            unset($param['collectProductIds']);
        }
        if (isset($blockCustom['wrap']) && strlen($blockCustom['wrap']) > 0) {
            $result[$blockCustom['wrap']] = $param;
        } else {
            $result = $param;
        }

        return json_encode($result);
    }

    public static function updateCustomCollection($param, $blockCustom, $vendorUrl)
    {
        return self::createCustomCollection($param, $blockCustom, $vendorUrl);
    }

    public static function getEvents($param, $blockCustom, &$vendorUrl)
    {
        $urlPart = '';
        if (isset($param['objectType'])) {
            $typeId = [];
            if (isset($param['objectType'])) $typeId[] = $param['objectType'];
            if (isset($param['objectTypeId'])) $typeId[] = $param['objectTypeId'];
            $urlPart = implode('/', $typeId);
        }
        if (strlen($urlPart) > 0) $urlPart = $urlPart . '/';
        $vendorUrl = str_replace('[[objectTypeId]]', $urlPart, $vendorUrl);

        self::createDate($param, 'createdAtMin');
        self::createDate($param, 'createdAtMax');
        self::createStringFromList($param, 'fields');

        return json_encode($param);
    }

    public static function createProduct($param, $blockCustom, $vendorUrl)
    {
        $result = [];
        if (isset($param['imageSrc']) && strlen($param['imageSrc']) > 0) {
            $param['image']['src'] = $param['imageSrc'];
            unset($param['imageSrc']);
        }
        self::createStringFromList($param, 'tags');
        if (isset($blockCustom['wrap']) && strlen($blockCustom['wrap']) > 0) {
            $result[$blockCustom['wrap']] = $param;
        } else {
            $result = $param;
        }

        return json_encode($result);
    }

    public static function createProductImage($param, $blockCustom, $vendorUrl)
    {
        $result = [];
        $metafields = [];
        $metafieldsList = ['variant_id', 'quantity'];
        foreach ($metafieldsList as $oneFiled) {
            if (isset($param[$oneFiled]) && strlen($param[$oneFiled]) > 0) {
                $metafields[$oneFiled] = intval($param[$oneFiled]);
                unset($param[$oneFiled]);
            }
        }
        if (count($metafields) > 0) {
            $param['metafields'] = $metafields;
        }
        if (!empty($param['variant_ids']) && !is_array($param['variant_ids'])) {
            $variantIds = explode(',', $param['variant_ids']);
            array_walk($variantIds, function (&$val, $key) {
                $val = trim($val);
            });
            $param['variant_ids'] = $variantIds;
        }
        $test = file_get_contents($param['src']);
        $test2 = base64_encode($test);
        unset($param['shopName'], $param['productId']);
        if (isset($blockCustom['wrap']) && strlen($blockCustom['wrap']) > 0) {
            $result[$blockCustom['wrap']] = $param;
        } else {
            $result = $param;
        }

        return json_encode($result);
    }

    public static function updateProductImage($param, $blockCustom, $vendorUrl)
    {
        return self::createProductImage($param, $blockCustom, $vendorUrl);
    }

    public static function updateProductVariant($param, $blockCustom, $vendorUrl)
    {
        $result['id'] = $param['id'];
        $result['variant'] = $param['variant'];

        return json_encode($result);
    }

    public static function calculateRefund($param, $blockCustom, $vendorUrl)
    {
        $result = [];
        $shipping = [];
        $shippingList = ['full_refund', 'amount'];
        foreach ($shippingList as $oneFiled) {
            if (isset($param[$oneFiled]) && strlen($param[$oneFiled]) > 0) {
                $shipping[$oneFiled] = intval($param[$oneFiled]);
                unset($param[$oneFiled]);
            }
        }
        if (count($shipping) > 0) {
            $param['shipping'] = $shipping;
        }
        if (isset($blockCustom['wrap']) && strlen($blockCustom['wrap']) > 0) {
            $result[$blockCustom['wrap']] = $param;
        } else {
            $result = $param;
        }

        return json_encode($result);
    }

    public static function createOrderRefundByTransaction($param, $blockCustom, $vendorUrl)
    {
        $result = [];
        $shipping = [];
        $shippingList = ['full_refund'];
        foreach ($shippingList as $oneFiled) {
            if (isset($param[$oneFiled]) && strlen($param[$oneFiled]) > 0) {
                $shipping[$oneFiled] = intval($param[$oneFiled]);
                unset($param[$oneFiled]);
            }
        }
        if (isset($param['shippingAmount']) && strlen($param['shippingAmount']) > 0) {
            $shipping['amount'] = intval($param['shippingAmount']);
            unset($param['shippingAmount']);
        }
        if (count($shipping) > 0) {
            $param['shipping'] = $shipping;
        }
        if (isset($blockCustom['wrap']) && strlen($blockCustom['wrap']) > 0) {
            $result[$blockCustom['wrap']] = $param;
        } else {
            $result = $param;
        }

        return json_encode($result);
    }

    public static function createOrderRefundByItems($param, $blockCustom, $vendorUrl)
    {
        $result = [];
        $shipping = [];
        $shippingList = ['full_refund'];
        foreach ($shippingList as $oneFiled) {
            if (isset($param[$oneFiled]) && strlen($param[$oneFiled]) > 0) {
                $shipping[$oneFiled] = intval($param[$oneFiled]);
                unset($param[$oneFiled]);
            }
        }
        if (isset($param['shippingAmount']) && strlen($param['shippingAmount']) > 0) {
            $shipping['amount'] = intval($param['shippingAmount']);
            unset($param['shippingAmount']);
        }
        if (count($shipping) > 0) {
            $param['shipping'] = $shipping;
        }
        if (isset($blockCustom['wrap']) && strlen($blockCustom['wrap']) > 0) {
            $result[$blockCustom['wrap']] = $param;
        } else {
            $result = $param;
        }

        return json_encode($result);
    }

    public static function createSmartCollection($param, $blockCustom, $vendorUrl)
    {
        if (isset($param['imageSrc']) && strlen($param['imageSrc']) > 0) {
            $param['image']['src'] = $param['imageSrc'];
            unset($param['imageSrc']);
        }
        if (isset($blockCustom['wrap']) && strlen($blockCustom['wrap']) > 0) {
            $result[$blockCustom['wrap']] = $param;
        } else {
            $result = $param;
        }

        return json_encode($result);
    }

    public static function updateSmartCollection($param, $blockCustom, $vendorUrl)
    {
        return self::createSmartCollection($param, $blockCustom, $vendorUrl);
    }

    public static function getAbandonedCheckoutsCount($param, $blockCustom, $vendorUrl)
    {
        self::createDate($param, 'createdAtMin');
        self::createDate($param, 'createdAtMax');
        self::createDate($param, 'updatedAtMin');
        self::createDate($param, 'updatedAtMax');

        return json_encode($param);
    }

    public static function getAbandonedCheckouts($param, $blockCustom, $vendorUrl)
    {
        self::createDate($param, 'createdAtMin');
        self::createDate($param, 'createdAtMax');
        self::createDate($param, 'updatedAtMin');
        self::createDate($param, 'updatedAtMax');

        return json_encode($param);
    }

    public static function getSingleCollect($param, $blockCustom, $vendorUrl)
    {
        self::createStringFromList($param, 'fields');

        return json_encode($param);
    }

    public static function getCustomCollections($param, $blockCustom, $vendorUrl)
    {
        self::createStringFromList($param, 'ids');
        self::createStringFromList($param, 'fields');

        self::createDate($param, 'updatedAtMin');
        self::createDate($param, 'updatedAtMax');
        self::createDate($param, 'publishedAtMin');
        self::createDate($param, 'publishedAtMax');

        return json_encode($param);
    }

    public static function getCustomCollectionsCount($param, $blockCustom, $vendorUrl)
    {
        self::createDate($param, 'updatedAtMin');
        self::createDate($param, 'updatedAtMax');
        self::createDate($param, 'publishedAtMin');
        self::createDate($param, 'publishedAtMax');

        return json_encode($param);
    }

    public static function getSingleCustomCollection($param, $blockCustom, $vendorUrl)
    {
        self::createStringFromList($param, 'fields');

        return json_encode($param);
    }

    public static function getCustomers($param, $blockCustom, $vendorUrl)
    {
        self::createStringFromList($param, 'ids');
        self::createStringFromList($param, 'fields');

        self::createDate($param, 'createdAtMin');
        self::createDate($param, 'createdAtMax');
        self::createDate($param, 'updatedAtMin');
        self::createDate($param, 'updatedAtMax');

        return json_encode($param);
    }

    public static function searchCustomers($param, $blockCustom, $vendorUrl)
    {
        self::createStringFromList($param, 'fields');

        return json_encode($param);
    }

    public static function getSingleCustomer($param, $blockCustom, $vendorUrl)
    {
        self::createStringFromList($param, 'fields');

        return json_encode($param);
    }

    public static function getSingleEvent($param, $blockCustom, $vendorUrl)
    {
        self::createStringFromList($param, 'fields');

        return json_encode($param);
    }

    public static function getEventByType($param, $blockCustom, $vendorUrl)
    {
        self::createStringFromList($param, 'fields');

        self::createDate($param, 'createdAtMin');
        self::createDate($param, 'createdAtMax');

        return json_encode($param);
    }

    public static function getEventsCount($param, $blockCustom, $vendorUrl)
    {
        self::createDate($param, 'createdAtMin');
        self::createDate($param, 'createdAtMax');

        return json_encode($param);
    }

    public static function getProducts($param, $blockCustom, $vendorUrl)
    {
        self::createStringFromList($param, 'ids');
        self::createStringFromList($param, 'fields');

        self::createDate($param, 'createdAtMin');
        self::createDate($param, 'createdAtMax');
        self::createDate($param, 'updatedAtMin');
        self::createDate($param, 'updatedAtMax');
        self::createDate($param, 'publishedAtMin');
        self::createDate($param, 'publishedAtMax');

        return json_encode($param);
    }

    public static function getProductsCount($param, $blockCustom, $vendorUrl)
    {
        self::createDate($param, 'createdAtMin');
        self::createDate($param, 'createdAtMax');
        self::createDate($param, 'updatedAtMin');
        self::createDate($param, 'updatedAtMax');
        self::createDate($param, 'publishedAtMin');
        self::createDate($param, 'publishedAtMax');

        return json_encode($param);
    }

    public static function getSingleProduct($param, $blockCustom, $vendorUrl)
    {
        self::createStringFromList($param, 'fields');

        return json_encode($param);
    }

    public static function updateProduct($param, $blockCustom, $vendorUrl)
    {
        self::createStringFromList($param, 'tags');

        return json_encode([$blockCustom['wrap'] => $param]);
    }

    public static function getProductImages($param, $blockCustom, $vendorUrl)
    {
        self::createStringFromList($param, 'fields');

        return json_encode($param);
    }

    public static function getProductImagesCount($param, $blockCustom, $vendorUrl)
    {
        self::createDate($param, 'createdAtMin');
        self::createDate($param, 'createdAtMax');
        self::createDate($param, 'createdAtMax');
        self::createDate($param, 'createdAtMax');
        self::createDate($param, 'publishedAtMin');
        self::createDate($param, 'publishedAtMax');

        return json_encode($param);
    }

    public static function getSingleProductImage($param, $blockCustom, $vendorUrl)
    {
        self::createStringFromList($param, 'fields');

        return json_encode($param);
    }

    public static function getProductVariants($param, $blockCustom, $vendorUrl)
    {
        self::createStringFromList($param, 'fields');

        return json_encode($param);
    }

    public static function getSingleShop($param, $blockCustom, $vendorUrl)
    {
        self::createStringFromList($param, 'fields');

        return json_encode($param);
    }

    public static function getTransactions($param, $blockCustom, $vendorUrl)
    {
        self::createStringFromList($param, 'fields');

        return json_encode($param);
    }

    public static function getSingleTransaction($param, $blockCustom, $vendorUrl)
    {
        self::createStringFromList($param, 'fields');

        return json_encode($param);
    }

    public static function getSingleUsageCharge($param, $blockCustom, $vendorUrl)
    {
        self::createStringFromList($param, 'fields');

        return json_encode($param);
    }

    public static function getUsageCharges($param, $blockCustom, $vendorUrl)
    {
        self::createStringFromList($param, 'fields');

        return json_encode($param);
    }

    public static function getSmartCollections($param, $blockCustom, $vendorUrl)
    {
        self::createStringFromList($param, 'ids');
        self::createStringFromList($param, 'fields');

        self::createDate($param, 'updatedAtMin');
        self::createDate($param, 'updatedAtMax');
        self::createDate($param, 'publishedAtMin');
        self::createDate($param, 'publishedAtMax');

        return json_encode($param);
    }

    public static function getSmartCollectionsCount($param, $blockCustom, $vendorUrl)
    {
        self::createDate($param, 'updatedAtMin');
        self::createDate($param, 'updatedAtMax');
        self::createDate($param, 'publishedAtMin');
        self::createDate($param, 'publishedAtMax');

        return json_encode($param);
    }

    public static function getSingleSmartCollection($param, $blockCustom, $vendorUrl)
    {
        self::createStringFromList($param, 'fields');

        return json_encode($param);
    }

    public static function getAllApplicationCharges($param, $blockCustom, $vendorUrl)
    {
        if (!empty($param['fields'])) {
            $param['fields'] = implode(',', $param['fields']);
        }

        unset($param['shopName']);

        return json_encode($param);
    }

    private static function createDate(&$param, $argName)
    {
        if (!empty($param[$argName])) {
            $date = \DateTime::createFromFormat('Y-m-d H:i:s', $param[$argName]);
            if ($date instanceof \DateTime) {
                $param[$argName] = $date->format(\DateTime::ISO8601);
            }
        }
    }

    private static function createStringFromList(&$param, $argName)
    {
        if (!empty($param[$argName]) && is_array($param[$argName])) {
            $param[$argName] = implode(',', $param[$argName]);
        }
    }
}