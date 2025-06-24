<?php

namespace zlphp\wx\littleapp;

class WxLittleAppConfig
{
    public static $grant_type = WX_LITTLEAPP_GRANT;
    public static $appid = WX_LITTLEAPP_APPID;
    public static $secret = WX_LITTLEAPP_APPSECRET;

    public static $wxLittleAppConfigPath = __DIR__;            //定义 应用目录

    public static $aturl = 'https://api.weixin.qq.com/cgi-bin/token';
    public static $saturl = 'https://api.weixin.qq.com/cgi-bin/stable_token';
}
