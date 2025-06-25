<?php

namespace zlphp\wx\storeun;

use zlphp\wx\Curl;

class BaseApi
{
    //重置API调用次数
    public static function clear_quota($arr)
    {
        $url = WxStoreunConfig::$clear_quota_url . At::get();
        $sign = json_encode($arr, 320);
        $curlBack = Curl::to($url, $sign);
        return json_decode($curlBack, true);
    }
    //使用AppSecret重置 API 调用次数
    public static function clear_quota_appsecret($arr)
    {
        $url = WxStoreunConfig::$clear_quota_appsecret_url . '?appid=' . WxStoreunConfig::$appid . '&secret=' . WxStoreunConfig::$secret;
        $sign = json_encode($arr, 320);
        $curlBack = Curl::to($url, $sign);
        return json_decode($curlBack, true);
    }



    //获取商品基础详情
    public static function get_productdetail($arr)
    {
        $url = WxStoreunConfig::$get_productdetail_url . At::get();
        $sign = json_encode($arr, 320);
        $curlBack = Curl::to($url, $sign);
        return json_decode($curlBack, true);
    }
    //机构订阅商品
    public static function subscribe($arr)
    {
        $url = WxStoreunConfig::$subscribe_url . At::get();
        $sign = json_encode($arr, 320);
        $curlBack = Curl::to($url, $sign);
        return json_decode($curlBack, true);
    }
    //取消商品订阅
    public static function unsubscribe($arr)
    {
        $url = WxStoreunConfig::$unsubscribe_url . At::get();
        $sign = json_encode($arr, 320);
        $curlBack = Curl::to($url, $sign);
        return json_decode($curlBack, true);
    }
    //获取订阅的商品列表
    public static function getsubscribe($arr)
    {
        $url = WxStoreunConfig::$getsubscribe_url . At::get();
        $sign = json_encode($arr, 320);
        $curlBack = Curl::to($url, $sign);
        return json_decode($curlBack, true);
    }



    //获取所有类目
    public static function get_category_all($arr)
    {
        $url = WxStoreunConfig::$get_category_all_url . At::get();
        $sign = json_encode($arr, 320);
        $curlBack = Curl::to($url, $sign);
        return json_decode($curlBack, true);
    }



    //获取佣金单详情
    public static function get_order($arr)
    {
        $url = WxStoreunConfig::$get_order_url . At::get(); 
        $sign = json_encode($arr, 320);
        $curlBack = Curl::to($url, $sign);
        return json_decode($curlBack, true);
    }
    //获取佣金单列表
    public static function get_order_list($arr)
    {
        $url = WxStoreunConfig::$get_order_list_url . At::get(); 
        $sign = json_encode($arr, 320);
        $curlBack = Curl::to($url, $sign);
        return json_decode($curlBack, true);
    }



    //获取机构账户余额
    public static function get_balance($arr)
    {
        $url = WxStoreunConfig::$get_balance_url . At::get(); 
        $sign = json_encode($arr, 320);
        $curlBack = Curl::to($url, $sign);
        return json_decode($curlBack, true);
    }
    //获取资金流水详情
    public static function get_flowdetail($arr)
    {
        $url = WxStoreunConfig::$get_flowdetail_url . At::get(); 
        $sign = json_encode($arr, 320);
        $curlBack = Curl::to($url, $sign);
        return json_decode($curlBack, true);
    }
    //获取资金流水列表
    public static function get_flowlist($arr)
    {
        $url = WxStoreunConfig::$get_flowlist_url . At::get(); 
        $sign = json_encode($arr, 320);
        $curlBack = Curl::to($url, $sign);
        return json_decode($curlBack, true);
    }



    //获取合作小店详情
    public static function get_shop_detail($arr)
    {
        $url = WxStoreunConfig::$get_shop_detail_url . At::get(); 
        $sign = json_encode($arr, 320);
        $curlBack = Curl::to($url, $sign);
        return json_decode($curlBack, true);
    }
    //获取合作小店列表
    public static function get_shop_list($arr)
    {
        $url = WxStoreunConfig::$get_shop_list_url . At::get(); 
        $sign = json_encode($arr, 320);
        $curlBack = Curl::to($url, $sign);
        return json_decode($curlBack, true);
    }
}
