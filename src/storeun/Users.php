<?php

namespace zlphp\wx\storeun;

use zlphp\wx\Curl;

class Users
{
    //获取推客的注册状态，以及和机构的绑定状态
    public static function get_promoter_register_and_bind_status($arr)
    {
        $url = WxStoreunConfig::$get_promoter_register_and_bind_status_url . At::get();
        $sign = json_encode($arr, 320);
        $curlBack = Curl::to($url, $sign);
        return json_decode($curlBack, true);
    }
    //设置推客的分佣模式和分佣比例
    public static function set_sharer_commission_info($arr)
    {
        $url = WxStoreunConfig::$set_sharer_commission_info_url . At::get();
        $sign = json_encode($arr, 320);
        $curlBack = Curl::to($url, $sign);
        return json_decode($curlBack, true);
    }
    //获取机构绑定的推客信息
    public static function get_bind_sharer_list($arr)
    {
        $url = WxStoreunConfig::$get_bind_sharer_list_url . At::get();
        $sign = json_encode($arr, 320);
        $curlBack = Curl::to($url, $sign);
        return json_decode($curlBack, true);
    }
    //获取合作的带货者列表
    public static function get_bind_talent_list($arr)
    {
        $url = WxStoreunConfig::$get_bind_talent_list_url . At::get();
        $sign = json_encode($arr, 320);
        $curlBack = Curl::to($url, $sign);
        return json_decode($curlBack, true);
    }
    //获取合作的小店列表
    public static function get_bind_shop_list($arr)
    {
        $url = WxStoreunConfig::$get_bind_shop_list_url . At::get();
        $sign = json_encode($arr, 320);
        $curlBack = Curl::to($url, $sign);
        return json_decode($curlBack, true);
    }
    //获取合作的小店列表
    public static function get_bind_shop_promoter_list($arr)
    {
        $url = WxStoreunConfig::$get_bind_shop_promoter_list_url . At::get();
        $sign = json_encode($arr, 320);
        $curlBack = Curl::to($url, $sign);
        return json_decode($curlBack, true);
    }
}
