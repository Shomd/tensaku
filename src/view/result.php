<?php require_once('../data.php') ?>
<!DOCTYPE html>
<html lang="jp">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>SearchPlaceOfRestaurant</title>
  <link rel="stylesheet" type="text/css" href="../css/result.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
</head>

<body>
 

    <div class="container" id="container">
  
    </div>
   
 
  

  

  <script>
    let jsonData = <?php echo $json; ?>;
    try {
      const data = JSON.parse(jsonData);
      const shops = data.results.shop;
      console.log(shops);


      //JSONの内容を一覧表示
      function viewHtml() {
        let html = '';

        for (let i = 0; i < shops.length; i++) {

          let viewHtml = '<div class = "mainContainer">' +
            '<div class="photo">' +
            '<a href="' + shops[i].coupon_urls.pc + '">' + '<img src="' + shops[i].photo.pc.m + '">' + '</a>' +
            '</div>' +
            '<div class="storeDetail">' +
            '<h1 class="shopName">' +
            '<a href="' + shops[i].coupon_urls.pc + '">' + '店名：' + shops[i].name + '</a>' + '</h1>' +
            '<p class="address">' + '住所：' + shops[i].address + '</p>' +
            '<p class="access">' + 'アクセス：' + shops[i].access + '</p>' +
            '<p class="open">' + '営業日：' + shops[i].open + '</p>' +
            '<p class="close">' + '定休日：' + shops[i].close + '</p>' +
            '</div>' +
            '</div>';
          html += viewHtml

          document.getElementById('container').innerHTML = html;
        };
      }
      viewHtml();
      if (shops > 10){
        const i = Math.floor(shops / 10) + 1;
        const start = i+1;

      }

    } catch (error) {
      alert("エラーが発生しました");
    };
  </script>
  
  <a href="http://webservice.recruit.co.jp/"><img src="http://webservice.recruit.co.jp/banner/hotpepper-s.gif" alt="ホットペッパー Webサービス" width="135" height="17" border="0" title="ホットペッパー Webサービス"></a>

</body>

</html>