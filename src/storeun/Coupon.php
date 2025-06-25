<?php

namespace zlphp\wx\storeun;

use zlphp\wx\Curl;

class Coupon
{
    //获取公开机构券
    public static function get_public_coupon_list($arr)
    {
        $url = WxStoreunConfig::$get_public_coupon_list_url . At::get();
        $sign = json_encode($arr, 320);
        $curlBack = Curl::to($url, $sign);
        return json_decode($curlBack, true);
    }
    //获取公开机构券
    public static function get_cooperative_coupon_list($arr)
    {
        $url = WxStoreunConfig::$get_cooperative_coupon_list_url . At::get();
        $sign = json_encode($arr, 320);
        $curlBack = Curl::to($url, $sign);
        return json_decode($curlBack, true);
    }
    //获取券ID对应的详情内容
    public static function get_coupon_detail($arr)
    {
        $url = WxStoreunConfig::$get_coupon_detail_url . At::get();
        $sign = json_encode($arr, 320);
        $curlBack = Curl::to($url, $sign);
        return json_decode($curlBack, true);
    }
    //获取某个券ID对应的推广短链
    public static function get_coupon_short_link($arr)
    {
        $url = WxStoreunConfig::$get_coupon_short_link_url . At::get();
        $sign = json_encode($arr, 320);
        $curlBack = Curl::to($url, $sign);
        return json_decode($curlBack, true);
    }
    //获取某个券ID对应的推广二维码
    public static function get_coupon_qr_code($arr)
    {
        $url = WxStoreunConfig::$get_coupon_qr_code_url . At::get();
        $sign = json_encode($arr, 320);
        $curlBack = Curl::to($url, $sign);
        return json_decode($curlBack, true);
    }
    //获取某个券ID对应的小程序内嵌微信小店优惠券推广参数
    public static function get_coupon_promoter_share_link($arr)
    {
        $url = WxStoreunConfig::$get_coupon_promoter_share_link_url . At::get();
        $sign = json_encode($arr, 320);
        $curlBack = Curl::to($url, $sign);
        return json_decode($curlBack, true);
    }
}
