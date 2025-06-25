<?php

namespace zlphp\wx\storeun;

use zlphp\wx\Curl;

class Clue
{
    //推客机构获取内容推广的自营商品订单列表
    public static function clue_list_get($arr)
    {
        $url = WxStoreunConfig::$clue_list_get_url . At::get();
        $sign = json_encode($arr, 320);
        $curlBack = Curl::to($url, $sign);
        return json_decode($curlBack, true);
    }
    //推客机构获取内容推广的自营商品订单详情
    public static function clue_get_detail($arr)
    {
        $url = WxStoreunConfig::$clue_get_detail_url . At::get();
        $sign = json_encode($arr, 320);
        $curlBack = Curl::to($url, $sign);
        return json_decode($curlBack, true);
    }
}
