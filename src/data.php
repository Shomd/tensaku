<?php

$api_key = "7d92864e483e55f6";

// フォームより緯度、経度、範囲の値を取得
$latitude = $_POST["latitude"];
$longitude = $_POST["longitude"];
$range = $_POST["range"];

// ホットペッパーapi
$url = "http://webservice.recruit.co.jp/hotpepper/gourmet/v1/?key=".$api_key."&lat=".$latitude."&lng=".$longitude."&range=".$range."&count=100&format=json";

// 情報取得
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$res = curl_exec($ch);
// $data = json_decode($res,false);
$json = json_encode($res, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
file_put_contents('test.json' , $json);
curl_close($ch);


// 結果表示
// for($i = 0; $i < count($data->results->shop); $i++){
//     echo $i." 店名: ".$data->results->shop[$i]->name.'<br>';
//     echo "住所: ".$data->results->shop[$i]->address.'<br>';
//     echo "交通アクセス: ".$data->results->shop[$i]->access.'<br>';
//     echo "営業時間: ".$data->results->shop[$i]->open.'<br>';
//     echo "店休日: ".$data->results->shop[$i]->close.'<br>';
//     echo "最寄り駅: ".$data->results->shop[$i]->station_name.'<br>';
// }
?>