<?php

namespace zlphp\wx\storeun;

class WxStoreunConfig
{
    public static $grant_type = WX_STOREUN_GRANT;
    public static $appid = WX_STOREUN_APPID;
    public static $secret = WX_STOREUN_APPSECRET;

    public static $wxStoreunConfigPath = __DIR__;            //定义 应用目录

    public static $aturl = 'https://api.weixin.qq.com/cgi-bin/token';
    public static $saturl = 'https://api.weixin.qq.com/cgi-bin/stable_token';
}
