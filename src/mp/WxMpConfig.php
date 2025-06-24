<?php

namespace zlphp\wx\mp;

class WxMpConfig
{
    public static $grant_type = WX_MP_GRANT;
    public static $appid = WX_MP_APPID;
    public static $secret = WX_MP_APPSECRET;

    public static $wxMpConfigPath = __DIR__;            //定义 应用目录

    public static $aturl = 'https://api.weixin.qq.com/cgi-bin/token';
    public static $saturl = 'https://api.weixin.qq.com/cgi-bin/stable_token';
}
