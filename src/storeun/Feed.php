<?php

namespace zlphp\wx\storeun;

use zlphp\wx\Curl;

class Feed
{
    //获取带货者推广的短视频信息
    public static function get_feed_list($arr)
    {
        $url = WxStoreunConfig::$get_feed_list_url . At::get();
        $sign = json_encode($arr, 320);
        $curlBack = Curl::to($url, $sign);
        return json_decode($curlBack, true);
    }
    //生成短视频的内嵌小程序推广信息
    public static function get_feed_promotion_info($arr)
    {
        $url = WxStoreunConfig::$get_feed_promotion_info_url . At::get();
        $sign = json_encode($arr, 320);
        $curlBack = Curl::to($url, $sign);
        return json_decode($curlBack, true);
    }
    //获取小店关联账号的短视频列表
    public static function get_shop_feed_list($arr)
    {
        $url = WxStoreunConfig::$get_shop_feed_list_url . At::get();
        $sign = json_encode($arr, 320);
        $curlBack = Curl::to($url, $sign);
        return json_decode($curlBack, true);
    }
    //生成小店关联账号的短视频内嵌小程序推广信
    public static function get_shop_feed_promotion_info($arr)
    {
        $url = WxStoreunConfig::$get_shop_feed_promotion_info_url . At::get();
        $sign = json_encode($arr, 320);
        $curlBack = Curl::to($url, $sign);
        return json_decode($curlBack, true);
    }
}
