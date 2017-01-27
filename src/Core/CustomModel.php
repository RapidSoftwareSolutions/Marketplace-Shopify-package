<?php

namespace Core;

if ( ! defined( 'RAPID_IN' ) ) exit( 'No direct script access allowed' );

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
        foreach($lineItemsList as $oneFiled){
            if(isset($param[$oneFiled])&&strlen($param[$oneFiled])>0) {
                $lineItems[$oneFiled] = intval($param[$oneFiled]);
                unset($param[$oneFiled]);
            } }
        if(count($lineItems)>0){
            $param['line_items'][] = $lineItems;
        }
        if(isset($blockCustom['wrap'])&&strlen($blockCustom['wrap'])>0){
            $result[$blockCustom['wrap']] = $param;
        }else{
            $result = $param;
        }

        return json_encode($result);
    }

    public static function updateCheckout($param, $blockCustom, $vendorUrl)
    {
        $result = [];
        $shippingAddress = [];
        $shippingAddressList = ['first_name', 'last_name', 'address1', 'city', 'province_code', 'country_code', 'phone', 'zip'];
        foreach($shippingAddressList as $oneFiled){
            if(isset($param[$oneFiled])&&strlen($param[$oneFiled])>0) {
                $shippingAddress[$oneFiled] = intval($param[$oneFiled]);
                unset($param[$oneFiled]);
            } }
        if(count($shippingAddress)>0){
            $param['shipping_address'] = $shippingAddress;
        }
        if(isset($blockCustom['wrap'])&&strlen($blockCustom['wrap'])>0){
            $result[$blockCustom['wrap']] = $param;
        }else{
            $result = $param;
        }

        return json_encode($result);
    }

    public static function createPayment($param, $blockCustom, $vendorUrl)
    {
        $result = [];
        $requestDetails = [];
        $requestDetailsList = ['ip_address', 'accept_language', 'user_agent'];
        foreach($requestDetailsList as $oneFiled){
            if(isset($param[$oneFiled])&&strlen($param[$oneFiled])>0) {
                $requestDetails[$oneFiled] = intval($param[$oneFiled]);
                unset($param[$oneFiled]);
            } }
        if(count($requestDetails)>0){
            $param['request_details'] = $requestDetails;
        }
        $param["unique_token"] = "client-side-idempotency-token";
        if(isset($blockCustom['wrap'])&&strlen($blockCustom['wrap'])>0){
            $result[$blockCustom['wrap']] = $param;
        }else{
            $result = $param;
        }

        return json_encode($result);
    }

    public static function createCustomCollection($param, $blockCustom, $vendorUrl)
    {
        $result = [];
        if(isset($param['imageSrc'])&&strlen($param['imageSrc'])>0) {
            $param['image']['src'] = $param['imageSrc'];
            unset($param['imageSrc']);
        }
        if(isset($param['collectsProductId'])&&strlen($param['collectsProductId'])>0) {
            $param['collects'][]["product_id"] = $param['collectsProductId'];
            unset($param['collectProductIds']);
        }
        if(isset($blockCustom['wrap'])&&strlen($blockCustom['wrap'])>0){
            $result[$blockCustom['wrap']] = $param;
        }else{
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
        if(isset($param['objectType'])){
            $typeId = [];
            if(isset($param['objectType'])) $typeId[] = $param['objectType'];
            if(isset($param['objectTypeId'])) $typeId[] = $param['objectTypeId'];
            $urlPart = implode('/', $typeId);
        }
        if(strlen($urlPart)>0) $urlPart = $urlPart . '/';
        $vendorUrl = str_replace('[[objectTypeId]]', $urlPart, $vendorUrl);

        return json_encode($param);
    }

    public static function createProduct($param, $blockCustom, $vendorUrl)
    {
        $result = [];
        if(isset($param['imageSrc'])&&strlen($param['imageSrc'])>0) {
            $param['image']['src'] = $param['imageSrc'];
            unset($param['imageSrc']);
        }
        if(isset($blockCustom['wrap'])&&strlen($blockCustom['wrap'])>0){
            $result[$blockCustom['wrap']] = $param;
        }else{
            $result = $param;
        }

        var_dump($result);
        exit();
        return json_encode($result);
    }

    public static function createProductImage($param, $blockCustom, $vendorUrl)
    {
        $result = [];
        $metafields = [];
        $metafieldsList = ['variant_id', 'quantity'];
        foreach($metafieldsList as $oneFiled){
            if(isset($param[$oneFiled])&&strlen($param[$oneFiled])>0) {
                $metafields[$oneFiled] = intval($param[$oneFiled]);
                unset($param[$oneFiled]);
            } }
        if(count($metafields)>0){
            $param['metafields'] = $metafields;
        }
        if(isset($param['imageSrc'])&&strlen($param['imageSrc'])>0) {
            $param['image']['src'] = $param['imageSrc'];
            unset($param['imageSrc']);
        }
        if(isset($param['variant_ids'])&&strlen($param['variant_ids'])>0) {
            $variantIds = explode(',', $param['variant_ids']);
            array_walk($variantIds, function(&$val, $key){
                $val = trim($val);
            });
            $param['variant_ids'] = $variantIds;
        }
        if(isset($blockCustom['wrap'])&&strlen($blockCustom['wrap'])>0){
            $result[$blockCustom['wrap']] = $param;
        }else{
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
        foreach($shippingList as $oneFiled){
            if(isset($param[$oneFiled])&&strlen($param[$oneFiled])>0) {
                $shipping[$oneFiled] = intval($param[$oneFiled]);
                unset($param[$oneFiled]);
            } }
        if(count($shipping)>0){
            $param['shipping'] = $shipping;
        }
        if(isset($blockCustom['wrap'])&&strlen($blockCustom['wrap'])>0){
            $result[$blockCustom['wrap']] = $param;
        }else{
            $result = $param;
        }

        return json_encode($result);
    }

    public static function createOrderRefund($param, $blockCustom, $vendorUrl)
    {
        $result = [];
        $shipping = [];
        $shippingList = ['full_refund', 'amount'];
        foreach($shippingList as $oneFiled){
            if(isset($param[$oneFiled])&&strlen($param[$oneFiled])>0) {
                $shipping[$oneFiled] = intval($param[$oneFiled]);
                unset($param[$oneFiled]);
            } }
        if(count($shipping)>0){
            $param['shipping'] = $shipping;
        }
        if(isset($blockCustom['wrap'])&&strlen($blockCustom['wrap'])>0){
            $result[$blockCustom['wrap']] = $param;
        }else{
            $result = $param;
        }

        return json_encode($result);
    }

    public static function createSmartCollection($param, $blockCustom, $vendorUrl)
    {
        if(isset($param['imageSrc'])&&strlen($param['imageSrc'])>0) {
            $param['image']['src'] = $param['imageSrc'];
            unset($param['imageSrc']);
        }
        if(isset($blockCustom['wrap'])&&strlen($blockCustom['wrap'])>0){
            $result[$blockCustom['wrap']] = $param;
        }else{
            $result = $param;
        }

        return json_encode($result);
    }

    public static function updateSmartCollection($param, $blockCustom, $vendorUrl)
    {
        return self::createSmartCollection($param, $blockCustom, $vendorUrl);
    }
}