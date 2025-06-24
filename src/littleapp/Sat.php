<?php

namespace zlphp\wx\littleapp;

use zlphp\wx\Curl;

class Sat
{
    public static function get()
    {
        $iniFile = WxLittleAppConfig::$wxLittleAppConfigPath . '/wx_littleapp_stable_access_token.ini';
        if (!file_exists($iniFile)) {
            return self::set($iniFile);
        }
        $atoken = parse_ini_file($iniFile);
        $time = time();
        if ($time - $atoken['addtime'] < $atoken['expires_in']) {
            return $atoken['access_token'];
        } else {
            return self::set($iniFile);
        }
    }

    private static function set($fileurl)
    {
        $url = WxLittleAppConfig::$saturl . '?grant_type=' . WxLittleAppConfig::$grant_type . '&appid=' . WxLittleAppConfig::$appid . '&secret=' . WxLittleAppConfig::$secret;
        $s = Curl::_get($url);
        $ss = json_decode($s, true);
        // print_r($ss);
        if (isset($ss['errcode'])) return $ss;
        $handle = fopen($fileurl, 'w');
        $gloat = $ss['access_token'];
        if ($handle) {
            foreach ($ss as $key => $value) {
                fwrite($handle, $key . ' = ' . $value);
                fwrite($handle, "\r\n");
            }
            fwrite($handle, 'addtime = ' . time());
        }
        fclose($handle);
        return $gloat;
        // return $ss;
    }
}
