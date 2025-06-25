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

    //推客帐号 Users::
    public static $get_promoter_register_and_bind_status_url = 'https://api.weixin.qq.com/channels/ec/promoter/get_promoter_register_and_bind_status?access_token=';
    public static $set_sharer_commission_info_url = 'https://api.weixin.qq.com/channels/ec/promoter/set_sharer_commission_info?access_token=';
    public static $get_bind_sharer_list_url = 'https://api.weixin.qq.com/channels/ec/promoter/get_bind_sharer_list?access_token=';
    public static $get_bind_talent_list_url = 'https://api.weixin.qq.com/channels/ec/promoter/get_bind_talent_list?access_token=';
    public static $get_bind_shop_list_url = 'https://api.weixin.qq.com/channels/ec/promoter/get_bind_shop_list?access_token=';
    public static $get_bind_shop_promoter_list_url = 'https://api.weixin.qq.com/channels/ec/promoter/get_bind_shop_promoter_list?access_token=';

    //推客推广商品获取 ShareProducts::
    public static $set_sharer_product_commission_info_url = 'https://api.weixin.qq.com/channels/ec/promoter/set_sharer_product_commission_info?access_token=';
    public static $get_sharer_product_commission_info_url = 'https://api.weixin.qq.com/channels/ec/promoter/get_sharer_product_commission_info?access_token=';
    public static $get_promote_product_list_url = 'https://api.weixin.qq.com/channels/ec/promoter/get_promote_product_list?access_token=';
    public static $get_promote_product_detail_url = 'https://api.weixin.qq.com/channels/ec/promoter/get_promote_product_detail?access_token=';
    public static $get_product_promotion_link_info_url = 'https://api.weixin.qq.com/channels/ec/promoter/get_product_promotion_link_info?access_token=';
    public static $get_product_promotion_qrcode_info_url = 'https://api.weixin.qq.com/channels/ec/promoter/get_product_promotion_qrcode_info?access_token=';
    public static $get_promoter_single_product_promotion_info_url = 'https://api.weixin.qq.com/channels/ec/promoter/get_promoter_single_product_promotion_info?access_token=';
    
    //带货机构推广券接口 Coupon::
    public static $get_public_coupon_list_url = 'https://api.weixin.qq.com/channels/ec/promoter/get_public_coupon_list?access_token=';
    public static $get_cooperative_coupon_list_url = 'https://api.weixin.qq.com/channels/ec/promoter/get_cooperative_coupon_list?access_token=';
    public static $get_coupon_detail_url = 'https://api.weixin.qq.com/channels/ec/promoter/get_coupon_detail?access_token=';
    public static $get_coupon_short_link_url = 'https://api.weixin.qq.com/channels/ec/promoter/get_coupon_short_link?access_token=';
    public static $get_coupon_qr_code_url = 'https://api.weixin.qq.com/channels/ec/promoter/get_coupon_qr_code?access_token=';
    public static $get_coupon_promoter_share_link_url = 'https://api.weixin.qq.com/channels/ec/promoter/get_coupon_promoter_share_link?access_token=';
    
    //直播推广 Live::
    public static $get_live_record_list_url = 'https://api.weixin.qq.com/channels/ec/promoter/get_live_record_list?access_token=';
    public static $get_live_notice_record_list_url = 'https://api.weixin.qq.com/channels/ec/promoter/get_live_notice_record_list?access_token=';
    public static $get_live_record_qr_code_url = 'https://api.weixin.qq.com/channels/ec/promoter/get_live_record_qr_code?access_token=';
    public static $get_live_notice_record_qr_code_url = 'https://api.weixin.qq.com/channels/ec/promoter/get_live_notice_record_qr_code?access_token=';
    public static $get_live_commission_product_list_url = 'https://api.weixin.qq.com/channels/ec/promoter/get_live_commission_product_list?access_token=';
    public static $get_live_notice_reservation_info_url = 'https://api.weixin.qq.com/channels/ec/promoter/get_live_notice_reservation_info?access_token=';
    public static $getqrcode_url = 'https://api.weixin.qq.com/channels/ec/league/headsupplier/liveprotection/getqrcode?access_token=';
    public static $get_shop_live_record_list_url = 'https://api.weixin.qq.com/channels/ec/promoter/get_shop_live_record_list?access_token=';
    public static $get_shop_live_notice_record_list_url = 'https://api.weixin.qq.com/channels/ec/promoter/get_shop_live_notice_record_list?access_token=';
    public static $get_shop_live_record_qr_code_url = 'https://api.weixin.qq.com/channels/ec/promoter/get_shop_live_record_qr_code?access_token=';
    public static $get_shop_live_notice_record_qr_code_url = 'https://api.weixin.qq.com/channels/ec/promoter/get_shop_live_notice_record_qr_code?access_token=';
    public static $get_shop_live_commission_product_list_url = 'https://api.weixin.qq.com/channels/ec/promoter/get_shop_live_commission_product_list?access_token=';

    //短视频推广 Feed::
    public static $get_feed_list_url = 'https://api.weixin.qq.com/channels/ec/promoter/get_feed_list?access_token=';
    public static $get_feed_promotion_info_url = 'https://api.weixin.qq.com/channels/ec/promoter/get_feed_promotion_info?access_token=';
    public static $get_shop_feed_list_url = 'https://api.weixin.qq.com/channels/ec/promoter/get_shop_feed_list?access_token=';
    public static $get_shop_feed_promotion_info_url = 'https://api.weixin.qq.com/channels/ec/promoter/get_shop_feed_promotion_info?access_token=';

    //公众号文章推广 Article::
    public static $get_talent_biz_article_list_url = 'https://api.weixin.qq.com/channels/ec/promoter/get_talent_biz_article_list?access_token=';
    public static $get_shop_mp_article_list_url = 'https://api.weixin.qq.com/channels/ec/promoter/get_shop_mp_article_list?access_token=';

    //线索订单相关 Clue::
    public static $clue_list_get_url = 'https://api.weixin.qq.com/channels/ec/league/headsupplier/clue/list/get?access_token=';
    public static $clue_get_detail_url = 'https://api.weixin.qq.com/channels/ec/league/headsupplier/clue/get?access_token=';
    

    //达人橱窗管理 HeadWindow::
    public static $add_url = 'https://api.weixin.qq.com/channels/ec/league/headsupplier/window/add?access_token=';
    public static $getall_url = 'https://api.weixin.qq.com/channels/ec/league/headsupplier/window/getall?access_token=';
    public static $remove_url = 'https://api.weixin.qq.com/channels/ec/league/headsupplier/window/remove?access_token=';
    public static $getdetail_url = 'https://api.weixin.qq.com/channels/ec/league/headsupplier/window/getdetail?access_token=';
    public static $get_auth_url = 'https://api.weixin.qq.com/channels/ec/league/headsupplier/windowauth/get?access_token=';
    public static $auth_status_url = 'https://api.weixin.qq.com/channels/ec/league/headsupplier/windowauth/status/get?access_token=';
    
    //达人推广商品获取 HeadProduct::
    public static $get_selectionproducts_list_url = 'https://api.weixin.qq.com/channels/ec/league/headsupplier/selectionproducts/list/get?access_token=';
    public static $get_cooperativeitem_list_url = 'https://api.weixin.qq.com/channels/ec/league/headsupplier/cooperativeitem/list/get?access_token=';
    public static $get_promotiondetail_url = 'https://api.weixin.qq.com/channels/ec/league/headsupplier/item/promotiondetail/get?access_token=';
    public static $add_subitem_url = 'https://api.weixin.qq.com/channels/ec/league/headsupplier/subitem/add?access_token=';
    public static $get_subitem_list_url = 'https://api.weixin.qq.com/channels/ec/league/headsupplier/subitem/list/get?access_token=';
    public static $add_cooperativeitem_url = 'https://api.weixin.qq.com/channels/ec/league/headsupplier/cooperativeitem/add?access_token=';
    
    //公共API BaseApi::
    public static $clear_quota_url = 'https://api.weixin.qq.com/cgi-bin/clear_quota?access_token=';
    public static $clear_quota_appsecret_url = 'https://api.weixin.qq.com/cgi-bin/clear_quota/v2';
    public static $get_productdetail_url = 'https://api.weixin.qq.com/channels/ec/league/headsupplier/productdetail/get?access_token=';
    public static $subscribe_url = 'https://api.weixin.qq.com/channels/ec/league/headsupplier/subscription/subscribe?access_token=';
    public static $unsubscribe_url = 'https://api.weixin.qq.com/channels/ec/league/headsupplier/subscription/unsubscribe?access_token=';
    public static $getsubscribe_url = 'https://api.weixin.qq.com/channels/ec/league/headsupplier/subscription/getsubscribe?access_token=';
    public static $get_category_all_url = 'https://api.weixin.qq.com/channels/ec/category/league/all?access_token=';
    
    public static $get_order_url = 'https://api.weixin.qq.com/channels/ec/league/headsupplier/order/get?access_token=';
    public static $get_order_list_url = 'https://api.weixin.qq.com/channels/ec/league/headsupplier/order/list/get?access_token=';

    public static $get_balance_url = 'https://api.weixin.qq.com/channels/ec/league/headsupplier/funds/balance/get?access_token=';
    public static $get_flowdetail_url = 'https://api.weixin.qq.com/channels/ec/league/headsupplier/funds/flowdetail/get?access_token=';
    public static $get_flowlist_url = 'https://api.weixin.qq.com/channels/ec/league/headsupplier/funds/flowlist/get?access_token=';
    
    public static $get_shop_detail_url = 'https://api.weixin.qq.com/channels/ec/league/headsupplier/shop/get?access_token=';
    public static $get_shop_list_url = 'https://api.weixin.qq.com/channels/ec/league/headsupplier/shop/list/get?access_token=';
}
