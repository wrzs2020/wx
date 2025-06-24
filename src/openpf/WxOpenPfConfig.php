<?php

namespace zlphp\wx\openpf;

class WxOpenPfConfig
{
    public static $grant_type = WX_OPENPF_GRANT;
    public static $appid = WX_OPENPF_APPID;
    public static $secret = WX_OPENPF_APPSECRET;

    public static $wxOpenPfConfigPath = __DIR__;            //定义 应用目录

    public static $aturl = 'https://api.weixin.qq.com/cgi-bin/token';
    public static $saturl = 'https://api.weixin.qq.com/cgi-bin/stable_token';
}
