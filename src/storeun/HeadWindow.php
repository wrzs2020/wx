<?php

namespace zlphp\wx\storeun;

use zlphp\wx\Curl;

class HeadWindow
{
    //添加机构商品到橱窗
    public static function add($arr)
    {
        $url = WxStoreunConfig::$add_url . At::get();
        $sign = json_encode($arr, 320);
        $curlBack = Curl::to($url, $sign);
        return json_decode($curlBack, true);
    }
    //查询橱窗上机构商品列表
    public static function getall($arr)
    {
        $url = WxStoreunConfig::$getall_url . At::get();
        $sign = json_encode($arr, 320);
        $curlBack = Curl::to($url, $sign);
        return json_decode($curlBack, true);
    }
    //从橱窗移除机构商品
    public static function remove($arr)
    {
        $url = WxStoreunConfig::$remove_url . At::get();
        $sign = json_encode($arr, 320);
        $curlBack = Curl::to($url, $sign);
        return json_decode($curlBack, true);
    }
    //查询橱窗上机构商品详情
    public static function getdetail($arr)
    {
        $url = WxStoreunConfig::$getdetail_url . At::get();
        $sign = json_encode($arr, 320);
        $curlBack = Curl::to($url, $sign);
        return json_decode($curlBack, true);
    }
    //获取达人橱窗授权链接
    public static function get_auth($arr)
    {
        $url = WxStoreunConfig::$get_auth_url . At::get();
        $sign = json_encode($arr, 320);
        $curlBack = Curl::to($url, $sign);
        return json_decode($curlBack, true);
    }
    //获取达人橱窗授权状态
    public static function auth_status($arr)
    {
        $url = WxStoreunConfig::$auth_status_url . At::get();
        $sign = json_encode($arr, 320);
        $curlBack = Curl::to($url, $sign);
        return json_decode($curlBack, true);
    }
}
