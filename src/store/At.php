<?php

namespace zlphp\wx\store;

use zlphp\wx\Curl;

class At
{
    public static function get()
    {
        $iniFile = WxStoreConfig::$wxStoreConfigPath . '/wx_store_access_token.ini';
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
        $url = WxStoreConfig::$aturl . '?grant_type=' . WxStoreConfig::$grant_type . '&appid=' . WxStoreConfig::$appid . '&secret=' . WxStoreConfig::$secret;
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
