<?php

namespace zlphp\wx\store;

class WxStoreConfig
{
    public static $grant_type = WX_STORE_GRANT;
    public static $appid = WX_STORE_APPID;
    public static $secret = WX_STORE_APPSECRET;

    public static $wxStoreConfigPath = __DIR__;            //定义 应用目录

    public static $aturl = 'https://api.weixin.qq.com/cgi-bin/token';
    public static $saturl = 'https://api.weixin.qq.com/cgi-bin/stable_token';
}
