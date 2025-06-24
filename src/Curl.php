<?php

namespace zlphp\wx;

class Curl
{
    public static function to($url, $array = false,  $header = array('Content-Type:application/json'), $h = false, $second = 20)
    {
        //初始化curl
        $ch = curl_init();
        //设置超时
        curl_setopt($ch, CURLOPT_TIMEOUT, $second);
        curl_setopt($ch, CURLOPT_URL, $url);
        //设置header输出
        curl_setopt($ch, CURLOPT_HEADER, $h);
        // header设置( 'Content-Type:text/xml; charset=utf-8' );
        curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
        //要求结果为字符串且输出到屏幕上
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        //post提交方式
        if ($array) {
            curl_setopt($ch, CURLOPT_POST, TRUE);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $array);
        }
        //运行curl
        $data = curl_exec($ch);
        curl_close($ch);
        return $data;
    }
    //作用：以post方式提交xml到对应的接口url 默认不使用证书
    public static function _post($xml, $url, $header = false, $second = 10)
    {

        //初始化curl
        $ch = curl_init();
        //设置超时
        curl_setopt($ch, CURLOPT_TIMEOUT, $second);
        //这里设置代理，如果有的话
        //curl_setopt( $ch, CURLOPT_PROXY, '8.8.8.8' );
        //curl_setopt( $ch, CURLOPT_PROXYPORT, 8080 );
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
        //设置header
        curl_setopt($ch, CURLOPT_HEADER, $header);
        //要求结果为字符串且输出到屏幕上
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        //post提交方式
        curl_setopt($ch, CURLOPT_POST, TRUE);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $xml);
        //运行curl
        $data = curl_exec($ch);
        //curl_close( $ch );
        if ($data) {
            return $data;
        } else {
            $error = curl_errno($ch);
            return false;
        }
    }

    public static function _get($url, $second = 10)
    {
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl, CURLOPT_TIMEOUT, $second);
        // 设置超时限制防止死循环
        curl_setopt($curl, CURLOPT_HEADER, 0);
        // 显示返回的Header区域内容
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        // 跳过证书检查
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
        // 从证书中检查SSL加密算法是否存在
        curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
        // 跟踪重定向
        $data = curl_exec($curl);
        curl_close($curl);
        return $data;
    }
    public static function aliget($url)
    {
        $headerArray = array('Content-type:application/json;', 'Accept:application/json');
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headerArray);
        $output = curl_exec($ch);
        curl_close($ch);
        $output = json_decode($output, true);
        return $output;
    }
}
