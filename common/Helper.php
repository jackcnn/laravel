<?php
//public static $appkey="24688190";
//Public static $secret="c6d11887d7d35768833ddc55c2a9e8e7";
//
//public static $adzone_id="147956443";//推广位id
//
//public static $userId = "124102488";//淘宝卡账户ID

function TaobaoKeList()
{
    include "vendor/taobaoke/TopSdk.php";
    $c = new \TopClient;
    $c->appkey = "24688190";
    $c->secretKey = "c6d11887d7d35768833ddc55c2a9e8e7";
    $req = new \TbkUatmFavoritesGetRequest;
    $req->setPageNo("1");
    $req->setPageSize("100");
    $req->setFields("favorites_title,favorites_id,type");
    $req->setType("-1");
    $resp = $c->execute($req);
    return $resp;
}
function Helper()
{
    echo '测试一下能不能用';
}