<?php

namespace zlphp\wx\mp;

use classbase\Curl;
use classbase\To;

class WxMpQr
{
    private static function url()
    {
        $url = "https://api.weixin.qq.com/cgi-bin/qrcode/create?access_token=";
        $url .= WxMpAt::get();
        return $url;
    }

    public static function ls($val, $time = 2592000)
    {
        if (gettype($val) == "string") {
            $json = '{"expire_seconds":' . $time . ', "action_name": "QR_STR_SCENE", "action_info": {"scene": {"scene_str": ' . $val . '}}}';
        } else {
            $json = '{"expire_seconds":' . $time . ', "action_name": "QR_SCENE", "action_info": {"scene": {"scene_id":' . $val . '}}}';
        }
        $ticket = Curl::_post($json, self::url());
        print_r($ticket);
        return;
        $ticket = To::json_array($ticket);
        $url = "https://mp.weixin.qq.com/cgi-bin/showqrcode?ticket=" . urlencode($ticket['ticket']);
        return $url;
    }

    public static function yj($val)
    {
        if (gettype($val) == "string") {
            $json = '{"action_name": "QR_LIMIT_STR_SCENE", "action_info": {"scene": {"scene_str":' . $val . '}}}';
        } else {
            $json = '{"action_name": "QR_LIMIT_SCENE", "action_info": {"scene": {"scene_id":' . $val . '}}}';
        }
        $ticket = Curl::_post($json, self::url(), true);
        $ticket = To::json_array($ticket);
        $url = "https://mp.weixin.qq.com/cgi-bin/showqrcode?ticket=" . urlencode($ticket['ticket']);
        return $url;
    }
}
