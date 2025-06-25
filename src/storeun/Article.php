<?php

namespace zlphp\wx\storeun;

use zlphp\wx\Curl;

class Article
{
    //获取某个带货者可推广文章列表
    public static function get_talent_biz_article_list($arr)
    {
        $url = WxStoreunConfig::$get_talent_biz_article_list_url . At::get();
        $sign = json_encode($arr, 320);
        $curlBack = Curl::to($url, $sign);
        return json_decode($curlBack, true);
    }
    //获取小店关联账号的文章列表
    public static function get_shop_mp_article_list($arr)
    {
        $url = WxStoreunConfig::$get_shop_mp_article_list_url . At::get();
        $sign = json_encode($arr, 320);
        $curlBack = Curl::to($url, $sign);
        return json_decode($curlBack, true);
    }
}
