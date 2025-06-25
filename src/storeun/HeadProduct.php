<?php

namespace zlphp\wx\storeun;

use zlphp\wx\Curl;

class HeadProduct
{
    //获取机构选品广场商品列表
    public static function get_selectionproducts_list($arr)
    {
        $url = WxStoreunConfig::$get_selectionproducts_list_url . At::get();
        $sign = json_encode($arr, 320);
        $curlBack = Curl::to($url, $sign);
        return json_decode($curlBack, true);
    }
    //获取合作商品列表
    public static function get_cooperativeitem_list($arr)
    {
        $url = WxStoreunConfig::$get_cooperativeitem_list_url . At::get();
        $sign = json_encode($arr, 320);
        $curlBack = Curl::to($url, $sign);
        return json_decode($curlBack, true);
    }
    //获取商品推广参数详情
    public static function get_promotiondetail($arr)
    {
        $url = WxStoreunConfig::$get_promotiondetail_url . At::get();
        $sign = json_encode($arr, 320);
        $curlBack = Curl::to($url, $sign);
        return json_decode($curlBack, true);
    }
    //配置达人佣金率
    public static function add_subitem($arr)
    {
        $url = WxStoreunConfig::$add_subitem_url . At::get();
        $sign = json_encode($arr, 320);
        $curlBack = Curl::to($url, $sign);
        return json_decode($curlBack, true);
    }
    //获取机构配置达人佣金计划列表
    public static function get_subitem_list($arr)
    {
        $url = WxStoreunConfig::$get_subitem_list_url . At::get();
        $sign = json_encode($arr, 320);
        $curlBack = Curl::to($url, $sign);
        return json_decode($curlBack, true);
    }
    //机构添加合作商品
    public static function add_cooperativeitem($arr)
    {
        $url = WxStoreunConfig::$add_cooperativeitem_url . At::get();
        $sign = json_encode($arr, 320);
        $curlBack = Curl::to($url, $sign);
        return json_decode($curlBack, true);
    }
}
