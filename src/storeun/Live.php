<?php

namespace zlphp\wx\storeun;

use zlphp\wx\Curl;

class Live
{
    //获取带货者的直播列表
    public static function get_live_record_list($arr)
    {
        $url = WxStoreunConfig::$get_live_record_list_url . At::get();
        $sign = json_encode($arr, 320);
        $curlBack = Curl::to($url, $sign);
        return json_decode($curlBack, true);
    }
    //获取带货者的直播预约列表
    public static function get_live_notice_record_list($arr)
    {
        $url = WxStoreunConfig::$get_live_notice_record_list_url . At::get();
        $sign = json_encode($arr, 320);
        $curlBack = Curl::to($url, $sign);
        return json_decode($curlBack, true);
    }
    //为某个推客生成单个直播的推广二维码
    public static function get_live_record_qr_code($arr)
    {
        $url = WxStoreunConfig::$get_live_record_qr_code_url . At::get();
        $sign = json_encode($arr, 320);
        $curlBack = Curl::to($url, $sign);
        return json_decode($curlBack, true);
    }
    //为某个推客生成单个直播预约的推广二维码
    public static function get_live_notice_record_qr_code($arr)
    {
        $url = WxStoreunConfig::$get_live_notice_record_qr_code_url . At::get();
        $sign = json_encode($arr, 320);
        $curlBack = Curl::to($url, $sign);
        return json_decode($curlBack, true);
    }
    //生成某个达人平台的用于直播预约的推广参数
    public static function get_live_notice_promoter_share_link($arr)
    {
        $url = WxStoreunConfig::$get_live_notice_promoter_share_link_url . At::get();
        $sign = json_encode($arr, 320);
        $curlBack = Curl::to($url, $sign);
        return json_decode($curlBack, true);
    }
    //生成某个达人平台的用于直播预约的推广参数
    public static function get_shop_live_notice_promoter_share_link($arr)
    {
        $url = WxStoreunConfig::$get_shop_live_notice_promoter_share_link_url . At::get();
        $sign = json_encode($arr, 320);
        $curlBack = Curl::to($url, $sign);
        return json_decode($curlBack, true);
    }
    //获取某个带货者当前直播的带货商品列表
    public static function get_live_commission_product_list($arr)
    {
        $url = WxStoreunConfig::$get_live_commission_product_list_url . At::get();
        $sign = json_encode($arr, 320);
        $curlBack = Curl::to($url, $sign);
        return json_decode($curlBack, true);
    }
    //获取直播预约的单个推客的推广预约人数
    public static function get_live_notice_reservation_info($arr)
    {
        $url = WxStoreunConfig::$get_live_notice_reservation_info_url . At::get();
        $sign = json_encode($arr, 320);
        $curlBack = Curl::to($url, $sign);
        return json_decode($curlBack, true);
    }
    //获取直播大场保护的提报二维码
    public static function getqrcode($arr)
    {
        $url = WxStoreunConfig::$getqrcode_url . At::get();
        $sign = json_encode($arr, 320);
        $curlBack = Curl::to($url, $sign);
        return json_decode($curlBack, true);
    }
    //获取小店关联账号的直播列表
    public static function get_shop_live_record_list($arr)
    {
        $url = WxStoreunConfig::$get_shop_live_record_list_url . At::get();
        $sign = json_encode($arr, 320);
        $curlBack = Curl::to($url, $sign);
        return json_decode($curlBack, true);
    }
    //获取小店关联账号的预约直播列表
    public static function get_shop_live_notice_record_list($arr)
    {
        $url = WxStoreunConfig::$get_shop_live_notice_record_list_url . At::get();
        $sign = json_encode($arr, 320);
        $curlBack = Curl::to($url, $sign);
        return json_decode($curlBack, true);
    }
    //为推客生成小店关联账号直播的推广二维码
    public static function get_shop_live_record_qr_code($arr)
    {
        $url = WxStoreunConfig::$get_shop_live_record_qr_code_url . At::get();
        $sign = json_encode($arr, 320);
        $curlBack = Curl::to($url, $sign);
        return json_decode($curlBack, true);
    }
    //为推客生成小店关联账号直播预约的推广二维码
    public static function get_shop_live_notice_record_qr_code($arr)
    {
        $url = WxStoreunConfig::$get_shop_live_notice_record_qr_code_url . At::get();
        $sign = json_encode($arr, 320);
        $curlBack = Curl::to($url, $sign);
        return json_decode($curlBack, true);
    }
    //获取小店关联账号的当前直播的自营商品列表
    public static function get_shop_live_commission_product_list($arr)
    {
        $url = WxStoreunConfig::$get_shop_live_commission_product_list_url . At::get();
        $sign = json_encode($arr, 320);
        $curlBack = Curl::to($url, $sign);
        return json_decode($curlBack, true);
    }
}
