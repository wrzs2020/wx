<?php

namespace zlphp\wx\finder;

class WxFinderConfig
{
    public static $grant_type = WX_FINDER_GRANT;
    public static $appid = WX_FINDER_APPID;
    public static $secret = WX_FINDER_APPSECRET;

    public static $wxFinderConfigPath = __DIR__;            //定义 应用目录

    public static $aturl = 'https://api.weixin.qq.com/cgi-bin/token';
    public static $saturl = 'https://api.weixin.qq.com/cgi-bin/stable_token';
}
