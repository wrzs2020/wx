<?php

namespace zlphp\wx\storeun;

use zlphp\wx\Curl;

class ShareProducts
{
    //设置推客的单个商品的分佣比例信息
    public static function set_sharer_product_commission_info($arr)
    {
        $url = WxStoreunConfig::$set_sharer_product_commission_info_url . At::get();
        $sign = json_encode($arr, 320);
        $curlBack = Curl::to($url, $sign);
        return json_decode($curlBack, true);
    }
    //获取设置的推客单个商品的分佣比例
    public static function get_sharer_product_commission_info($arr)
    {
        $url = WxStoreunConfig::$get_sharer_product_commission_info_url . At::get();
        $sign = json_encode($arr, 320);
        $curlBack = Curl::to($url, $sign);
        return json_decode($curlBack, true);
    }
    //获取可以推广的商品列表
    public static function get_promote_product_list($arr)
    {
        $url = WxStoreunConfig::$get_promote_product_list_url . At::get();
        $sign = json_encode($arr, 320);
        $curlBack = Curl::to($url, $sign);
        return json_decode($curlBack, true);
    }
    //获取合作商品详情
    public static function get_promote_product_detail($arr)
    {
        $url = WxStoreunConfig::$get_promote_product_detail_url . At::get();
        $sign = json_encode($arr, 320);
        $curlBack = Curl::to($url, $sign);
        return json_decode($curlBack, true);
    }
    //获取推客对某个商品的推广短链
    public static function get_product_promotion_link_info($arr)
    {
        $url = WxStoreunConfig::$get_product_promotion_link_info_url . At::get();
        $sign = json_encode($arr, 320);
        $curlBack = Curl::to($url, $sign);
        return json_decode($curlBack, true);
    }
    //获取推客对某个商品的推广二维码
    public static function get_product_promotion_qrcode_info($arr)
    {
        $url = WxStoreunConfig::$get_product_promotion_qrcode_info_url . At::get();
        $sign = json_encode($arr, 320);
        $curlBack = Curl::to($url, $sign);
        return json_decode($curlBack, true);
    }
    //获取某个推客某个商品的内嵌商品卡片product_promotion_link
    public static function get_promoter_single_product_promotion_info($arr)
    {
        $url = WxStoreunConfig::$get_promoter_single_product_promotion_info_url . At::get();
        $sign = json_encode($arr, 320);
        $curlBack = Curl::to($url, $sign);
        return json_decode($curlBack, true);
    }
}
