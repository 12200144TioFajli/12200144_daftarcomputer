<?=$this->extend('template_dashboard')?>

<?=$this->section('konten')?>

<!doctype html>
<html lang="en-id">
    <head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# product: http://ogp.me/ns/product#">
        <script type="text/javascript" src="https://cdn.optimizely.com/js/2865840674.js"></script>
<script>
    var BASE_URL = 'https://www.hp.com/id-en/shop/';
    var require = {
        "baseUrl": "https://id-media.apjonlinecdn.com/static/version1640122770/frontend/HPOLS/stellar/en_AU"
    };
</script>
        <meta charset="utf-8"/><script type="text/javascript">(window.NREUM||(NREUM={})).init={ajax:{deny_list:["bam-cell.nr-data.net"]}};(window.NREUM||(NREUM={})).loader_config={licenseKey:"1a5b7260fe",applicationID:"163144472"};window.NREUM||(NREUM={}),__nr_require=function(t,e,n){function r(n){if(!e[n]){var i=e[n]={exports:{}};t[n][0].call(i.exports,function(e){var i=t[n][1][e];return r(i||e)},i,i.exports)}return e[n].exports}if("function"==typeof __nr_require)return __nr_require;for(var i=0;i<n.length;i++)r(n[i]);return r}({1:[function(t,e,n){function r(){}function i(t,e,n,r){return function(){return s.recordSupportability("API/"+e+"/called"),o(t+e,[u.now()].concat(c(arguments)),n?null:this,r),n?void 0:this}}var o=t("handle"),a=t(10),c=t(11),f=t("ee").get("tracer"),u=t("loader"),s=t(4),d=NREUM;"undefined"==typeof window.newrelic&&(newrelic=d);var p=["setPageViewName","setCustomAttribute","setErrorHandler","finished","addToTrace","inlineHit","addRelease"],l="api-",v=l+"ixn-";a(p,function(t,e){d[e]=i(l,e,!0,"api")}),d.addPageAction=i(l,"addPageAction",!0),d.setCurrentRouteName=i(l,"routeName",!0),e.exports=newrelic,d.interaction=function(){return(new r).get()};var m=r.prototype={createTracer:function(t,e){var n={},r=this,i="function"==typeof e;return o(v+"tracer",[u.now(),t,n],r),function(){if(f.emit((i?"":"no-")+"fn-start",[u.now(),r,i],n),i)try{return e.apply(this,arguments)}catch(t){throw f.emit("fn-err",[arguments,this,t],n),t}finally{f.emit("fn-end",[u.now()],n)}}}};a("actionText,setName,setAttribute,save,ignore,onEnd,getContext,end,get".split(","),function(t,e){m[e]=i(v,e)}),newrelic.noticeError=function(t,e){"string"==typeof t&&(t=new Error(t)),s.recordSupportability("API/noticeError/called"),o("err",[t,u.now(),!1,e])}},{}],2:[function(t,e,n){function r(t){if(NREUM.init){for(var e=NREUM.init,n=t.split("."),r=0;r<n.length-1;r++)if(e=e[n[r]],"object"!=typeof e)return;return e=e[n[n.length-1]]}}e.exports={getConfiguration:r}},{}],3:[function(t,e,n){var r=!1;try{var i=Object.defineProperty({},"passive",{get:function(){r=!0}});window.addEventListener("testPassive",null,i),window.removeEventListener("testPassive",null,i)}catch(o){}e.exports=function(t){return r?{passive:!0,capture:!!t}:!!t}},{}],4:[function(t,e,n){function r(t,e){var n=[a,t,{name:t},e];return o("storeMetric",n,null,"api"),n}function i(t,e){var n=[c,t,{name:t},e];return o("storeEventMetrics",n,null,"api"),n}var o=t("handle"),a="sm",c="cm";e.exports={constants:{SUPPORTABILITY_METRIC:a,CUSTOM_METRIC:c},recordSupportability:r,recordCustom:i}},{}],5:[function(t,e,n){function r(){return c.exists&&performance.now?Math.round(performance.now()):(o=Math.max((new Date).getTime(),o))-a}function i(){return o}var o=(new Date).getTime(),a=o,c=t(12);e.exports=r,e.exports.offset=a,e.exports.getLastTimestamp=i},{}],6:[function(t,e,n){function r(t){return!(!t||!t.protocol||"file:"===t.protocol)}e.exports=r},{}],7:[function(t,e,n){function r(t,e){var n=t.getEntries();n.forEach(function(t){"first-paint"===t.name?p("timing",["fp",Math.floor(t.startTime)]):"first-contentful-paint"===t.name&&p("timing",["fcp",Math.floor(t.startTime)])})}function i(t,e){var n=t.getEntries();if(n.length>0){var r=n[n.length-1];if(f&&f<r.startTime)return;p("lcp",[r])}}function o(t){t.getEntries().forEach(function(t){t.hadRecentInput||p("cls",[t])})}function a(t){if(t instanceof g&&!y){var e=Math.round(t.timeStamp),n={type:t.type};e<=l.now()?n.fid=l.now()-e:e>l.offset&&e<=Date.now()?(e-=l.offset,n.fid=l.now()-e):e=l.now(),y=!0,p("timing",["fi",e,n])}}function c(t){"hidden"===t&&(f=l.now(),p("pageHide",[f]))}if(!("init"in NREUM&&"page_view_timing"in NREUM.init&&"enabled"in NREUM.init.page_view_timing&&NREUM.init.page_view_timing.enabled===!1)){var f,u,s,d,p=t("handle"),l=t("loader"),v=t(9),m=t(3),g=NREUM.o.EV;if("PerformanceObserver"in window&&"function"==typeof window.PerformanceObserver){u=new PerformanceObserver(r);try{u.observe({entryTypes:["paint"]})}catch(h){}s=new PerformanceObserver(i);try{s.observe({entryTypes:["largest-contentful-paint"]})}catch(h){}d=new PerformanceObserver(o);try{d.observe({type:"layout-shift",buffered:!0})}catch(h){}}if("addEventListener"in document){var y=!1,w=["click","keydown","mousedown","pointerdown","touchstart"];w.forEach(function(t){document.addEventListener(t,a,m(!1))})}v(c)}},{}],8:[function(t,e,n){function r(t,e){if(!i)return!1;if(t!==i)return!1;if(!e)return!0;if(!o)return!1;for(var n=o.split("."),r=e.split("."),a=0;a<r.length;a++)if(r[a]!==n[a])return!1;return!0}var i=null,o=null,a=/Version\/(\S+)\s+Safari/;if(navigator.userAgent){var c=navigator.userAgent,f=c.match(a);f&&c.indexOf("Chrome")===-1&&c.indexOf("Chromium")===-1&&(i="Safari",o=f[1])}e.exports={agent:i,version:o,match:r}},{}],9:[function(t,e,n){function r(t){function e(){t(c&&document[c]?document[c]:document[o]?"hidden":"visible")}"addEventListener"in document&&a&&document.addEventListener(a,e,i(!1))}var i=t(3);e.exports=r;var o,a,c;"undefined"!=typeof document.hidden?(o="hidden",a="visibilitychange",c="visibilityState"):"undefined"!=typeof document.msHidden?(o="msHidden",a="msvisibilitychange"):"undefined"!=typeof document.webkitHidden&&(o="webkitHidden",a="webkitvisibilitychange",c="webkitVisibilityState")},{}],10:[function(t,e,n){function r(t,e){var n=[],r="",o=0;for(r in t)i.call(t,r)&&(n[o]=e(r,t[r]),o+=1);return n}var i=Object.prototype.hasOwnProperty;e.exports=r},{}],11:[function(t,e,n){function r(t,e,n){e||(e=0),"undefined"==typeof n&&(n=t?t.length:0);for(var r=-1,i=n-e||0,o=Array(i<0?0:i);++r<i;)o[r]=t[e+r];return o}e.exports=r},{}],12:[function(t,e,n){e.exports={exists:"undefined"!=typeof window.performance&&window.performance.timing&&"undefined"!=typeof window.performance.timing.navigationStart}},{}],ee:[function(t,e,n){function r(){}function i(t){function e(t){return t&&t instanceof r?t:t?u(t,f,a):a()}function n(n,r,i,o,a){if(a!==!1&&(a=!0),!l.aborted||o){t&&a&&t(n,r,i);for(var c=e(i),f=m(n),u=f.length,s=0;s<u;s++)f[s].apply(c,r);var p=d[w[n]];return p&&p.push([b,n,r,c]),c}}function o(t,e){y[t]=m(t).concat(e)}function v(t,e){var n=y[t];if(n)for(var r=0;r<n.length;r++)n[r]===e&&n.splice(r,1)}function m(t){return y[t]||[]}function g(t){return p[t]=p[t]||i(n)}function h(t,e){l.aborted||s(t,function(t,n){e=e||"feature",w[n]=e,e in d||(d[e]=[])})}var y={},w={},b={on:o,addEventListener:o,removeEventListener:v,emit:n,get:g,listeners:m,context:e,buffer:h,abort:c,aborted:!1};return b}function o(t){return u(t,f,a)}function a(){return new r}function c(){(d.api||d.feature)&&(l.aborted=!0,d=l.backlog={})}var f="nr@context",u=t("gos"),s=t(10),d={},p={},l=e.exports=i();e.exports.getOrSetContext=o,l.backlog=d},{}],gos:[function(t,e,n){function r(t,e,n){if(i.call(t,e))return t[e];var r=n();if(Object.defineProperty&&Object.keys)try{return Object.defineProperty(t,e,{value:r,writable:!0,enumerable:!1}),r}catch(o){}return t[e]=r,r}var i=Object.prototype.hasOwnProperty;e.exports=r},{}],handle:[function(t,e,n){function r(t,e,n,r){i.buffer([t],r),i.emit(t,e,n)}var i=t("ee").get("handle");e.exports=r,r.ee=i},{}],id:[function(t,e,n){function r(t){var e=typeof t;return!t||"object"!==e&&"function"!==e?-1:t===window?0:a(t,o,function(){return i++})}var i=1,o="nr@id",a=t("gos");e.exports=r},{}],loader:[function(t,e,n){function r(){if(!T++){var t=P.info=NREUM.info,e=g.getElementsByTagName("script")[0];if(setTimeout(u.abort,3e4),!(t&&t.licenseKey&&t.applicationID&&e))return u.abort();f(O,function(e,n){t[e]||(t[e]=n)});var n=a();c("mark",["onload",n+P.offset],null,"api"),c("timing",["load",n]);var r=g.createElement("script");0===t.agent.indexOf("http://")||0===t.agent.indexOf("https://")?r.src=t.agent:r.src=v+"://"+t.agent,e.parentNode.insertBefore(r,e)}}function i(){"complete"===g.readyState&&o()}function o(){c("mark",["domContent",a()+P.offset],null,"api")}var a=t(5),c=t("handle"),f=t(10),u=t("ee"),s=t(8),d=t(6),p=t(2),l=t(3),v=p.getConfiguration("ssl")===!1?"http":"https",m=window,g=m.document,h="addEventListener",y="attachEvent",w=m.XMLHttpRequest,b=w&&w.prototype,E=!d(m.location);NREUM.o={ST:setTimeout,SI:m.setImmediate,CT:clearTimeout,XHR:w,REQ:m.Request,EV:m.Event,PR:m.Promise,MO:m.MutationObserver};var x=""+location,O={beacon:"bam.nr-data.net",errorBeacon:"bam.nr-data.net",agent:"js-agent.newrelic.com/nr-1212.min.js"},M=w&&b&&b[h]&&!/CriOS/.test(navigator.userAgent),P=e.exports={offset:a.getLastTimestamp(),now:a,origin:x,features:{},xhrWrappable:M,userAgent:s,disabled:E};if(!E){t(1),t(7),g[h]?(g[h]("DOMContentLoaded",o,l(!1)),m[h]("load",r,l(!1))):(g[y]("onreadystatechange",i),m[y]("onload",r)),c("mark",["firstbyte",a.getLastTimestamp()],null,"api");var T=0}},{}],"wrap-function":[function(t,e,n){function r(t,e){function n(e,n,r,f,u){function nrWrapper(){var o,a,s,p;try{a=this,o=d(arguments),s="function"==typeof r?r(o,a):r||{}}catch(l){i([l,"",[o,a,f],s],t)}c(n+"start",[o,a,f],s,u);try{return p=e.apply(a,o)}catch(v){throw c(n+"err",[o,a,v],s,u),v}finally{c(n+"end",[o,a,p],s,u)}}return a(e)?e:(n||(n=""),nrWrapper[p]=e,o(e,nrWrapper,t),nrWrapper)}function r(t,e,r,i,o){r||(r="");var c,f,u,s="-"===r.charAt(0);for(u=0;u<e.length;u++)f=e[u],c=t[f],a(c)||(t[f]=n(c,s?f+r:r,i,f,o))}function c(n,r,o,a){if(!v||e){var c=v;v=!0;try{t.emit(n,r,o,e,a)}catch(f){i([f,n,r,o],t)}v=c}}return t||(t=s),n.inPlace=r,n.flag=p,n}function i(t,e){e||(e=s);try{e.emit("internal-error",t)}catch(n){}}function o(t,e,n){if(Object.defineProperty&&Object.keys)try{var r=Object.keys(t);return r.forEach(function(n){Object.defineProperty(e,n,{get:function(){return t[n]},set:function(e){return t[n]=e,e}})}),e}catch(o){i([o],n)}for(var a in t)l.call(t,a)&&(e[a]=t[a]);return e}function a(t){return!(t&&t instanceof Function&&t.apply&&!t[p])}function c(t,e){var n=e(t);return n[p]=t,o(t,n,s),n}function f(t,e,n){var r=t[e];t[e]=c(r,n)}function u(){for(var t=arguments.length,e=new Array(t),n=0;n<t;++n)e[n]=arguments[n];return e}var s=t("ee"),d=t(11),p="nr@original",l=Object.prototype.hasOwnProperty,v=!1;e.exports=r,e.exports.wrapFunction=c,e.exports.wrapInPlace=f,e.exports.argsToArray=u},{}]},{},["loader"]);</script>
<meta name="title" content="OMEN by HP Gaming Laptop 16-c0099AX  | HP Store Indonesia"/>
<meta name="description" content="

    @font-face {
        font-family: Gothambold;
        font-style: normal;
        font-weight: 700;
        src: url(https://id-files.apjonlinecdn.com/landingpages/npi/hp-omen-16-laptop/rich-content/fonts/GothamBold.ttf) format(&quot;truetype&quot;)
  "/>
<meta name="keywords" content="OMEN by HP Gaming Laptop 16-c0099AX"/>
<meta name="robots" content="INDEX,FOLLOW"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
<meta name="format-detection" content="telephone=no"/>
<title>OMEN by HP Gaming Laptop 16-c0099AX  | HP Store Indonesia</title>
<link  rel="stylesheet" type="text/css"  media="all" href="https://id-media.apjonlinecdn.com/static/version1640122770/frontend/HPOLS/stellar/en_AU/mage/calendar.min.css" />
<link  rel="stylesheet" type="text/css"  media="all" href="https://id-media.apjonlinecdn.com/static/version1640122770/frontend/HPOLS/stellar/en_AU/Magefan_ProductWidget/css/productwidget.min.css" />
<link  rel="stylesheet" type="text/css"  media="all" href="https://id-media.apjonlinecdn.com/static/version1640122770/frontend/HPOLS/stellar/en_AU/Magefan_YouTubeWidget/css/youtubewidget.min.css" />
<link  rel="stylesheet" type="text/css"  media="all" href="https://id-media.apjonlinecdn.com/static/version1640122770/frontend/HPOLS/stellar/en_AU/css/styles-m.min.css" />
<link  rel="stylesheet" type="text/css"  media="all" href="https://id-media.apjonlinecdn.com/static/version1640122770/frontend/HPOLS/stellar/en_AU/Magefan_Blog/css/blog-m.min.css" />
<link  rel="stylesheet" type="text/css"  media="all" href="https://id-media.apjonlinecdn.com/static/version1640122770/frontend/HPOLS/stellar/en_AU/Magefan_Blog/css/blog-new.min.css" />
<link  rel="stylesheet" type="text/css"  media="all" href="https://id-media.apjonlinecdn.com/static/version1640122770/frontend/HPOLS/stellar/en_AU/Magefan_Blog/css/blog-custom.min.css" />
<link  rel="stylesheet" type="text/css"  media="all" href="https://id-media.apjonlinecdn.com/static/version1640122770/frontend/HPOLS/stellar/en_AU/Knowband_Spinandwin/css/front_style.min.css" />
<link  rel="stylesheet" type="text/css"  media="all" href="https://id-media.apjonlinecdn.com/static/version1640122770/frontend/HPOLS/stellar/en_AU/mage/gallery/gallery.min.css" />
<link  rel="stylesheet" type="text/css"  media="all" href="https://id-media.apjonlinecdn.com/static/version1640122770/frontend/HPOLS/stellar/en_AU/Magento_Catalog/css/tooltipster.bundle.min.css" />
<link  rel="stylesheet" type="text/css"  media="screen and (min-width: 768px)" href="https://id-media.apjonlinecdn.com/static/version1640122770/frontend/HPOLS/stellar/en_AU/css/styles-l.min.css" />
<link  rel="stylesheet" type="text/css"  media="print" href="https://id-media.apjonlinecdn.com/static/version1640122770/frontend/HPOLS/stellar/en_AU/css/print.min.css" />
<script  type="text/javascript"  src="https://id-media.apjonlinecdn.com/static/version1640122770/frontend/HPOLS/stellar/en_AU/requirejs/require.min.js"></script>
<script  type="text/javascript"  src="https://id-media.apjonlinecdn.com/static/version1640122770/frontend/HPOLS/stellar/en_AU/requirejs-min-resolver.min.js"></script>
<script  type="text/javascript"  src="https://id-media.apjonlinecdn.com/static/version1640122770/frontend/HPOLS/stellar/en_AU/mage/requirejs/mixins.min.js"></script>
<script  type="text/javascript"  src="https://id-media.apjonlinecdn.com/static/version1640122770/frontend/HPOLS/stellar/en_AU/magepack/requirejs-config-common.min.js"></script>
<script  type="text/javascript"  src="https://id-media.apjonlinecdn.com/static/version1640122770/frontend/HPOLS/stellar/en_AU/magepack/requirejs-config-product.min.js"></script>
<script  type="text/javascript"  src="https://id-media.apjonlinecdn.com/static/version1640122770/frontend/HPOLS/stellar/en_AU/requirejs-config.min.js"></script>
<script  type="text/javascript"  src="https://id-media.apjonlinecdn.com/static/version1640122770/frontend/HPOLS/stellar/en_AU/mage/polyfill.min.js"></script>
<script  type="text/javascript"  src="https://id-media.apjonlinecdn.com/static/version1640122770/frontend/HPOLS/stellar/en_AU/HPOLS_BvReview/js/review.min.js"></script>
<script  type="text/javascript"  src="https://id-media.apjonlinecdn.com/static/version1640122770/frontend/HPOLS/stellar/en_AU/Smile_ElasticsuiteTracker/js/tracking.min.js"></script>
<link  rel="apple-touch-icon" sizes="57x57" href="https://id-media.apjonlinecdn.com/static/version1640122770/frontend/HPOLS/stellar/en_AU/images/icon/57.png" />
<link  rel="apple-touch-icon" sizes="72x72" href="https://id-media.apjonlinecdn.com/static/version1640122770/frontend/HPOLS/stellar/en_AU/images/icon/72.png" />
<link  rel="apple-touch-icon" sizes="114x114" href="https://id-media.apjonlinecdn.com/static/version1640122770/frontend/HPOLS/stellar/en_AU/images/icon/114.png" />
<link  rel="apple-touch-icon" sizes="144x144" href="https://id-media.apjonlinecdn.com/static/version1640122770/frontend/HPOLS/stellar/en_AU/images/icon/144.png" />
<link  rel="apple-touch-icon" sizes="152x152" href="https://id-media.apjonlinecdn.com/static/version1640122770/frontend/HPOLS/stellar/en_AU/images/icon/152.png" />
<link  rel="apple-touch-icon" sizes="167x167" href="https://id-media.apjonlinecdn.com/static/version1640122770/frontend/HPOLS/stellar/en_AU/images/icon/167.png" />
<link  rel="apple-touch-icon" sizes="180x180" href="https://id-media.apjonlinecdn.com/static/version1640122770/frontend/HPOLS/stellar/en_AU/images/icon/180.png" />
<link  rel="icon" sizes="192x192" href="https://id-media.apjonlinecdn.com/static/version1640122770/frontend/HPOLS/stellar/en_AU/images/icon/192.png" />
<link  rel="icon" sizes="128x128" href="https://id-media.apjonlinecdn.com/static/version1640122770/frontend/HPOLS/stellar/en_AU/images/icon/128.png" />
<link  rel="icon" type="image/x-icon" href="https://id-media.apjonlinecdn.com/favicon/default/favicon_10_1.png" />
<link  rel="shortcut icon" type="image/x-icon" href="https://id-media.apjonlinecdn.com/favicon/default/favicon_10_1.png" />
<!-- Logo Structured Data --><script type="application/ld+json">{
    "@context": "http:\/\/schema.org\/",
    "@type": "Organization",
    "url": "https:\/\/www.hp.com\/id-en\/shop\/",
    "logo": "https:\/\/id-media.apjonlinecdn.com\/logo\/stores\/1\/HP_Logo_Halo.png"
}</script><!-- Product Structured Data --><script type="application/ld+json">{
    "@context": "http:\/\/schema.org\/",
    "@type": "Product",
    "name": "OMEN by HP Gaming Laptop 16-c0099AX",
    "description": "@font-face {\r\n        font-family: Gothambold;\r\n        font-style: normal;\r\n        font-weight: 700;\r\n        src: url(https:\/\/id-files.apjonlinecdn.com\/landingpages\/npi\/hp-omen-16-laptop\/rich-content\/fonts\/GothamBold.ttf) format(\"truetype\")\r\n    }\r\n    \r\n    @font-face {\r\n        font-family: Gothammedium;\r\n        font-style: normal;\r\n        font-weight: 700;\r\n        src: url(https:\/\/id-files.apjonlinecdn.com\/landingpages\/npi\/hp-omen-16-laptop\/rich-content\/fonts\/GothamMedium.ttf) format(\"truetype\")\r\n    }\r\n    \r\n    @font-face {\r\n        font-family: Gothambook;\r\n        font-style: normal;\r\n        font-weight: 700;\r\n        src: url(https:\/\/id-files.apjonlinecdn.com\/landingpages\/npi\/hp-omen-16-laptop\/rich-content\/fonts\/gothambook.otf) format(\"truetype\")\r\n    }\r\n    \r\n    .customize .customize-product .customize-product-item-link {\r\n        color: #000000;\r\n    }\r\n    \r\n    .block-content>div>div {\r\n        padding: 0px !important;\r\n    }\r\n    \r\n    sup {\r\n        top: -.5em !important;\r\n        font-size: 55%;\r\n        color: inherit;\r\n        position: relative;\r\n        vertical-align: middle;\r\n    }\r\n    \r\n    .main-section {\r\n        background-color: #FFFFFF;\r\n    }\r\n    \r\n    .main-wrapper {\r\n        width: 100%;\r\n        max-width: 1000px;\r\n        margin: 0 auto;\r\n    }\r\n    \r\n    .main-wrapper .row {\r\n        margin-right: 0px;\r\n        margin-left: 0px;\r\n    }\r\n    \r\n    .pdp-title {\r\n        font-size: 3.229vw;\r\n        font-weight: 500;\r\n        font-family: \"Gothambold\";\r\n        line-height: 3.9vw;\r\n        margin-top: 0px;\r\n        margin-bottom: 10px !important;\r\n        letter-spacing: normal;\r\n    }\r\n    \r\n    .pdp-md-title {\r\n        font-size: 2.188vw;\r\n        font-weight: 500;\r\n        font-family: \"Gothambold\";\r\n        line-height: 2.8vw;\r\n        margin-top: 0px;\r\n        margin-bottom: 10px;\r\n        letter-spacing: normal;\r\n    }\r\n    \r\n    .pdp-sub-title {\r\n        font-size: 1.979vw;\r\n        font-weight: 500;\r\n        font-family: \"Gothambold\";\r\n        line-height: 2.4vw;\r\n        margin-top: 0px;\r\n        margin-bottom: 10px !important;\r\n        letter-spacing: 0.3px;\r\n    }\r\n    \r\n    .pdp-sm-sub-title {\r\n        font-size: 1.250vw;\r\n        font-weight: 500;\r\n        font-family: \"HP Simplified Regular\";\r\n        line-height: 1.7vw;\r\n        margin-top: 0px;\r\n        margin-bottom: 10px !important;\r\n        letter-spacing: 0.3px;\r\n    }\r\n    \r\n    .pdp-texts {\r\n        font-size: 1.458vw;\r\n        font-weight: 500;\r\n        font-family: \"HP Simplified Regular\";\r\n        line-height: 1.9vw;\r\n        margin-bottom: 10px !important;\r\n        letter-spacing: 0.3px;\r\n    }\r\n    \r\n    .pdp-sm-texts {\r\n        font-size: 0.938vw;\r\n        font-weight: 500;\r\n        font-family: \"HP Simplified Regular\";\r\n        line-height: 1.3vw;\r\n        margin-bottom: 10px !important;\r\n        letter-spacing: 0.3px;\r\n    }\r\n    \r\n    .pdp-xs-texts {\r\n        font-size: 0.938vw;\r\n        font-weight: 300;\r\n        font-family: \"HP Simplified Light\";\r\n        line-height: 1.3vw;\r\n        margin: 0px 0px 0px 0px !important;\r\n        letter-spacing: 0.3px;\r\n    }\r\n    \r\n    .black {\r\n        color: #000000;\r\n    }\r\n    \r\n    .yellow {\r\n        color: #feb914;\r\n    }\r\n    \r\n    .white {\r\n        color: #FFFFFF;\r\n    }\r\n    \r\n    .gray {\r\n        color: #666;\r\n    }\r\n    \r\n    .dark-gray {\r\n        color: #595757;\r\n    }\r\n    \r\n    .blue {\r\n        color: #0096d6;\r\n    }\r\n    \r\n    .hero-container {\r\n        position: relative;\r\n    }\r\n    \r\n    .hero-img-mobile {\r\n        display: none;\r\n    }\r\n    \r\n    .hero-section {\r\n        position: relative;\r\n        width: 100%;\r\n        background-color: #ffffff;\r\n    }\r\n    \r\n    .hero-content-texts {\r\n        padding: 50px 20px;\r\n        text-align: center;\r\n        max-width: 100%;\r\n        margin: 0 auto;\r\n    }\r\n    \r\n    .hero-content-product-name {\r\n        position: absolute;\r\n        bottom: 50px;\r\n        margin: auto;\r\n        text-align: center;\r\n        width: 100%;\r\n    }\r\n    \r\n    .hero-banner {\r\n        background-position: center top;\r\n        background-repeat: no-repeat;\r\n        min-height: 1000px;\r\n        \/* background-size: cover; *\/\r\n    }\r\n    \r\n    .hero-img-container {\r\n        text-align: center;\r\n    }\r\n    \r\n    .hero-img-container .hero-img {\r\n        max-width: 100%;\r\n        display: block;\r\n        margin: 0 auto;\r\n    }\r\n    \r\n    .hero-img-container .customize-product-image-photo {\r\n        max-width: 100%;\r\n        height: auto;\r\n        margin-top: 0px;\r\n        margin-bottom: 50px;\r\n    }\r\n    \r\n    .customize-product-desc-features {\r\n        margin-top: 50px;\r\n    }\r\n    \r\n    .customize.product-item-details .customize-product a {\r\n        font-size: 1.979vw;\r\n        font-weight: 500;\r\n        font-family: \"Gothambold\";\r\n        line-height: 2.4vw;\r\n        margin-top: 0px;\r\n        margin-bottom: 10px !important;\r\n        letter-spacing: 0.3px;\r\n    }\r\n    \r\n    .customize-product-desc-features ul {\r\n        padding: 0px;\r\n        margin: 50px 0 0px;\r\n        list-style: none;\r\n        text-align: left;\r\n    }\r\n    \r\n    .customize-product-desc-features ul li {\r\n        background: rgb(250, 19, 89);\r\n        background: linear-gradient(90deg, rgba(250, 19, 89, 1) 0%, rgba(255, 31, 34, 1) 60%, rgba(255, 113, 56, 1) 100%);\r\n        padding: 15px 50px 0px 50px !important;\r\n        font-size: 1.458vw;\r\n        font-weight: 500;\r\n        font-family: \"HP Simplified Regular\";\r\n        margin-bottom: 15px !important;\r\n        letter-spacing: 0.3px;\r\n        display: inline-block;\r\n        color: #FFF;\r\n        min-height: 80px;\r\n        height: auto;\r\n        width: 90%;\r\n        position: relative;\r\n        line-height: 25px !important;\r\n    }\r\n    \r\n    .customize-product-desc-features ul li::after {\r\n        width: 50px;\r\n        height: 100%;\r\n        border: none !important;\r\n        background-color: #ff6936;\r\n        content: \"\";\r\n        position: absolute;\r\n        right: -23px;\r\n        top: 0;\r\n        transform: 90 degree;\r\n        transform: skew(-20deg);\r\n    }\r\n    \r\n    .contents-row {\r\n        padding: 0px 0px 0px 0px;\r\n    }\r\n    \r\n    .contents-row.rows {\r\n        background-color: #f6f6f6;\r\n        padding: 50px 0px 50px 0px;\r\n    }\r\n    \r\n    .contents-row.row-07.rows {\r\n        padding: 50px 0px 0px 0px;\r\n    }\r\n    \r\n    .contents-row.backgrounds {\r\n        background-position: center top;\r\n        background-repeat: no-repeat;\r\n        min-height: 1000px;\r\n        background-size: cover;\r\n        width: 100%;\r\n    }\r\n    \r\n    .content-container {\r\n        padding: 0px 30px;\r\n    }\r\n    \r\n    .content-container.contents {\r\n        padding: 30px 30px;\r\n    }\r\n    \r\n    .product-container {\r\n        padding: 0px 20px;\r\n    }\r\n    \r\n    .product-container img {\r\n        max-width: 100%;\r\n        display: block;\r\n        margin: 0 auto;\r\n    }\r\n    \r\n    .product-container .contents {\r\n        padding: 0px 10px;\r\n    }\r\n    \r\n    .column-content {\r\n        height: 354px;\r\n        display: table;\r\n        width: 100%\r\n    }\r\n    \r\n    .column-container {\r\n        background-color: #FFF;\r\n        background-position: center top;\r\n        background-repeat: no-repeat;\r\n        background-size: cover;\r\n        width: 100%;\r\n        height: inherit;\r\n    }\r\n    \r\n    .column-content .inner {\r\n        display: table-cell;\r\n        vertical-align: middle;\r\n    }\r\n    \r\n    .column-content .inner>* {\r\n        max-width: 400px;\r\n        margin-left: auto;\r\n        margin-right: auto;\r\n        text-align: center;\r\n    }\r\n    \r\n    .products-container .inner {\r\n        border: 1px solid #e8e8e8;\r\n        box-shadow: 0px 1px 2px rgba(0, 0, 0, 0.1);\r\n        padding: 30px 30px;\r\n    }\r\n    \r\n    .products-container .inner img {\r\n        max-width: 100%;\r\n        display: block;\r\n        margin: 0 auto;\r\n        height: auto;\r\n    }\r\n    \r\n    .products-container .inner .contents {\r\n        text-align: center;\r\n        padding: 10px 20px;\r\n    }\r\n    \r\n    .footnotes {\r\n        background-color: #d2d2d2;\r\n        padding: 30px 0px;\r\n    }\r\n    \r\n    .footnotes .footnotes-container {\r\n        padding: 0px 30px;\r\n    }\r\n    \r\n    .footnotes .footnotes-container p {\r\n        font-size: 18px;\r\n        line-height: 28px;\r\n        font-family: 'HP Simplified Regular';\r\n        font-weight: 500;\r\n        color: #595757;\r\n        margin-bottom: 10px;\r\n        word-break: break-all;\r\n    }\r\n    \r\n    .footnotes .footnotes-container ol {\r\n        margin: 0px 15px;\r\n        padding: 0px;\r\n    }\r\n    \r\n    .footnotes .footnotes-container ol li {\r\n        font-size: 18px;\r\n        line-height: 28px;\r\n        font-family: 'HP Simplified Regular';\r\n        font-weight: 500;\r\n        color: #595757;\r\n        margin-bottom: 10px;\r\n        word-break: break-all;\r\n        list-style-type: decimal !important;\r\n    }\r\n    \r\n    .footnotes .footnotes-container ol li a {\r\n        color: #0096d6;\r\n    }\r\n    \r\n    .footnotes .footnotes-container p a {\r\n        color: #0096d6;\r\n    }\r\n    \r\n    .show-mobile {\r\n        display: none;\r\n    }\r\n    \r\n    @media screen and (min-width: 2180px) {\r\n        .show-desktop {\r\n            display: none;\r\n        }\r\n        .show-mobile {\r\n            display: block;\r\n        }\r\n        .backgrounds.b-01,\r\n        .backgrounds.b-05,\r\n        .backgrounds.b-02,\r\n        .backgrounds.b-06,\r\n        .backgrounds.b-07 {\r\n            background-image: none !important;\r\n            min-height: auto !important;\r\n        }\r\n        .customize-product-desc-features ul li::after {\r\n            transform: skew(-9deg);\r\n        }\r\n    }\r\n    \r\n    @media screen and (min-width: 1920px) {\r\n        .pdp-title {\r\n            font-size: 3.229vw;\r\n            line-height: 3.9vw;\r\n        }\r\n        .pdp-md-title {\r\n            font-size: 2.188vw;\r\n            line-height: 2.8vw;\r\n        }\r\n        .pdp-sub-title {\r\n            font-size: 1.979vw;\r\n            line-height: 2.4vw;\r\n        }\r\n        .pdp-sm-sub-title {\r\n            font-size: 1.250vw;\r\n            line-height: 1.7vw;\r\n        }\r\n        .pdp-texts {\r\n            font-size: 1.458vw;\r\n            line-height: 1.9vw;\r\n        }\r\n        .customize-product-desc-features ul li {\r\n            font-size: 1.458vw !important;\r\n            line-height: 1.9vw !important;\r\n        }\r\n        .pdp-sm-texts {\r\n            font-size: 0.938vw;\r\n            line-height: 1.3vw;\r\n        }\r\n        .pdp-xs-texts {\r\n            font-size: 0.938vw;\r\n            line-height: 1.3vw;\r\n        }\r\n    }\r\n    \r\n    @media screen and (max-width: 1400px) {\r\n        .pdp-title {\r\n            font-size: 4.286vw;\r\n            line-height: 5vw;\r\n        }\r\n        .pdp-md-title {\r\n            font-size: 3vw;\r\n            line-height: 3.6vw;\r\n        }\r\n        .pdp-sub-title {\r\n            font-size: 2.429vw;\r\n        }\r\n        .pdp-sm-sub-title {\r\n            font-size: 1.714vw;\r\n            line-height: 2.2vw;\r\n        }\r\n        .pdp-texts {\r\n            font-size: 2vw;\r\n            line-height: 2.6vw;\r\n        }\r\n        .customize-product-desc-features ul li {\r\n            font-size: 2vw !important;\r\n            line-height: 2.6vw !important;\r\n        }\r\n        .pdp-sm-texts {\r\n            font-size: 0.938vw;\r\n            line-height: 1.3vw;\r\n        }\r\n        .pdp-xs-texts {\r\n            font-size: 1.286vw;\r\n            line-height: 1.8vw;\r\n        }\r\n    }\r\n    \r\n    @media screen and (max-width: 1200px) {\r\n        .pdp-title {\r\n            font-size: 5.167vw;\r\n            line-height: 5.5vw;\r\n        }\r\n        .pdp-sub-title {\r\n            font-size: 2.667vw;\r\n            line-height: 3.2vw;\r\n        }\r\n        .pdp-sm-sub-title {\r\n            font-size: 2vw;\r\n            line-height: 2.6vw;\r\n        }\r\n        .pdp-xs-texts {\r\n            font-size: 1.500vw;\r\n            line-height: 2vw;\r\n        }\r\n        .customize-product-desc-features ul li {\r\n            width: 75%;\r\n        }\r\n    }\r\n    \r\n    @media screen and (max-width: 991px) {\r\n        .pdp-title {\r\n            font-size: 6.256vw;\r\n            line-height: 7vw;\r\n        }\r\n        .pdp-md-title {\r\n            font-size: 4.238vw;\r\n            line-height: 4.8vw;\r\n        }\r\n        .pdp-sub-title {\r\n            font-size: 3.431vw;\r\n            line-height: 4.2vw;\r\n        }\r\n        .pdp-texts {\r\n            font-size: 2.825vw;\r\n            line-height: 3.4vw;\r\n        }\r\n        .customize-product-desc-features ul li {\r\n            font-size: 2.825vw !important;\r\n            line-height: 3.4vw !important;\r\n        }\r\n        .pdp-sm-sub-title {\r\n            font-size: 2.422vw;\r\n            line-height: 3vw;\r\n        }\r\n        .pdp-sm-texts {\r\n            font-size: 2.422vw;\r\n            line-height: 3vw;\r\n        }\r\n        .pdp-xs-texts {\r\n            font-size: 1.816vw;\r\n            line-height: 2.4vw;\r\n        }\r\n        .product-container .contents {\r\n            padding: 0px 10px;\r\n        }\r\n        .hero-img-3 {\r\n            margin: 0 auto 0 20px;\r\n        }\r\n    }\r\n    \r\n    @media screen and (max-width: 767px) {\r\n        .show-mobile {\r\n            display: block;\r\n        }\r\n        .show-desktop {\r\n            display: none;\r\n        }\r\n        .backgrounds {\r\n            background-image: none !important;\r\n            min-height: auto !important;\r\n        }\r\n        .pdp-title {\r\n            font-size: 8.083vw;\r\n            line-height: 8.6vw;\r\n        }\r\n        .pdp-md-title {\r\n            font-size: 5.476vw;\r\n            line-height: 6vw;\r\n        }\r\n        .pdp-sub-title,\r\n        .customize.product-item-details .customize-product a {\r\n            font-size: 4.433vw;\r\n            line-height: 5vw;\r\n        }\r\n        .pdp-texts {\r\n            font-size: 3.651vw;\r\n            line-height: 4.6vw;\r\n        }\r\n        .customize-product-desc-features ul li {\r\n            font-size: 3.651vw !important;\r\n            line-height: 4.6vw !important;\r\n        }\r\n        .pdp-sm-texts,\r\n        .pdp-xs-texts {\r\n            font-size: 4.172vw;\r\n            line-height: 4.7vw;\r\n        }\r\n        .pdp-sm-sub-title {\r\n            font-size: 3.129vw;\r\n            line-height: 3.7vw;\r\n        }\r\n        .pdp-xs-texts {\r\n            font-size: 2.347vw;\r\n            line-height: 2.9vw;\r\n        }\r\n        .hero-content-texts {\r\n            padding: 50px 80px;\r\n        }\r\n        .product-container {\r\n            margin-bottom: 30px;\r\n        }\r\n        .content-container {\r\n            padding: 0px 20px;\r\n        }\r\n        .column-content {\r\n            height: auto;\r\n        }\r\n        .column-content>img {\r\n            margin-bottom: 30px;\r\n        }\r\n        .column-content .inner {\r\n            padding: 30px 20px;\r\n        }\r\n        .hero-banner {\r\n            background-position: 45% 75%;\r\n            min-height: 750px;\r\n        }\r\n        .contents-row.rows {\r\n            padding: 50px 0px 0px 0px;\r\n        }\r\n        ul.product-list li {\r\n            font-size: initial;\r\n        }\r\n    }\r\n    \r\n    @media screen and (max-width: 650px) {}\r\n    \r\n    @media screen and (max-width: 560px) {\r\n        .customize-product-desc-features ul li {\r\n            width: 85%;\r\n        }\r\n        .pdp-title {\r\n            font-size: 8vw;\r\n            line-height: 9vw;\r\n        }\r\n        .pdp-md-title {\r\n            font-size: 7vw;\r\n            line-height: 8vw;\r\n        }\r\n        .pdp-sub-title,\r\n        .customize.product-item-details .customize-product a {\r\n            font-size: 6.071vw;\r\n            line-height: 7vw;\r\n        }\r\n        .pdp-texts {\r\n            font-size: 5vw;\r\n            line-height: 6vw;\r\n        }\r\n        .customize-product-desc-features ul li {\r\n            font-size: 5vw !important;\r\n            line-height: 6vw !important;\r\n        }\r\n        .pdp-sm-texts,\r\n        .pdp-xs-texts {\r\n            font-size: 4.5vw;\r\n            line-height: 5.5vw;\r\n        }\r\n        .pdp-sm-sub-title {\r\n            font-size: 4.286vw;\r\n            line-height: 4.8vw;\r\n        }\r\n        .pdp-xs-texts {\r\n            font-size: 3.214vw;\r\n            line-height: 3.8vw;\r\n        }\r\n        .hero-content-texts {\r\n            padding: 50px 20px;\r\n        }\r\n        .content-container.contents {\r\n            padding: 30px 30px;\r\n        }\r\n    }\r\n    \r\n    @media screen and (max-width: 480px) {\r\n        .pdp-md-title {\r\n            font-size: 8vw;\r\n            line-height: 9.6vw;\r\n        }\r\n        .pdp-sub-title,\r\n        .customize.product-item-details .customize-product a {\r\n            font-size: 6vw;\r\n            line-height: 6.6vw;\r\n        }\r\n        .customize-product-desc-features ul li {\r\n            padding: 15px 25px 0px 25px !important;\r\n        }\r\n        .customize-product-desc-features ul li::after {\r\n            background-color: #ff5e33;\r\n            transform: skew(-9deg);\r\n        }\r\n    }\r\n    \r\n    @media screen and (max-width: 375px) {\r\n        .pdp-sm-sub-title {\r\n            font-size: 6.400vw;\r\n            line-height: 7vw;\r\n        }\r\n        .pdp-xs-texts {\r\n            font-size: 4.800vw;\r\n            line-height: 5.4vw;\r\n        }\r\n        .customize-product-desc-features ul li {\r\n            width: 80% !important;\r\n        }\r\n    }\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\nPLAY YOURSELF UP\r\n\r\n\r\n\r\n\r\n{{widget type=\"HPOLS\\Widget\\Block\\Widget\\CustomizeProducts\" show_product_sku=\"0\" product_sku=\"488F4PA\" show_product_image=\"1\" product_image_size=\"original\" show_product_name=\"1\" show_feature_description=\"1\" show_promotion_message=\"0\" show_product_price=\"0\" show_stock_status=\"0\" show_shop_now=\"0\" product_key_url=\"hp-deskjet-ink-advantage-2775-all-in-one-printer-7hz98b\"}}\r\n\r\n\r\n\r\n \r\n\r\n\r\n\r\n\r\nAMD Ryzen\u2122 5000 series processors1\r\nEnjoy elite gaming performance on a thin and light notebook with amazing battery life.\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n \r\n\r\n\r\n\r\n\r\nNVIDIA\u00ae GeForce RTX\u2122 Graphics\r\nTake on the latest games with enhanced Ray Tracing Cores and Tensor Cores, new streaming multiprocessors, and high-speed G6 memory.\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n \r\n\r\n\r\n\r\n\r\nVisually stunning\r\nPlay at your best with a display that combines a 144 Hz refresh rate and a 1080p resolution for smooth, crisp gameplay2.\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n \r\n\r\n\r\n\r\n\r\nHP Flicker-free3\r\nEliminates screen flickering for more comfortable viewing.\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n \r\n\r\n\r\n\r\n\r\nStay cool under pressure\r\nOMEN Tempest Cooling Technology4 prevents overheating with 3-sided venting and 5-way airflow.\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n \r\n\r\n\r\n\r\n\r\nRGB backlit keyboard\r\nBacklight 4 independent zones with different RGB lighting. WASD keys are outlined to highlight key controls.\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n \r\n\r\n\r\n\r\n\r\nOMEN Gaming Hub\r\nCustomize and elevate your gameplay from software enhancements to hardware control, and live services.\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n \r\n\r\n\r\n\r\n\r\nThoughtfully designed\r\nA thin and light design that includes sustainable, recycled materials.5,6,7\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n \r\n\r\n\r\n\r\n\r\nProduct Walkaround\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n \r\n\r\n\r\n\r\n\r\nProduct Build\r\nStarting at 2.3 kg\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n \r\n\r\n\r\n\r\n\r\n\r\nMulti-core is designed to improve performance of certain software products. Not all customers or software applications will necessarily benefit from use of this technology. Performance and clock frequency will vary depending on application workload and your hardware and software configurations. Intel\u2019s numbering, branding and\/or naming is not a measurement of higher performance.\r\nAll performance specifications represent the typical specifications provided by HP's component manufacturers; actual performance may vary either higher or lower.\r\nThe Flicker-free capability eliminates screen flickering through integrating DC-dimming LED backlights.\r\nThermal solution varies by configuration.\r\nPercentage of ocean-bound plastic contained in speaker enclosure varies by product.\r\nPercentage of recycled metal varies by product.\r\nKeyboard keycap contains post-consumer recycled plastic. Percentage of Post consumer recycled contained in each component varies by product.",
    "sku": "488F4PA",
    "url": "https:\/\/www.hp.com\/id-en\/shop\/omen-by-hp-laptop-16-c0099ax-488f4pa.html",
    "image": [
        "https:\/\/id-media.apjonlinecdn.com\/catalog\/product\/2\/1\/21c1_omen_vanellope_16_60w_nonnumpad_4zone_lcd_micasilver_front_1.png",
        "https:\/\/id-media.apjonlinecdn.com\/catalog\/product\/2\/1\/21c1_omen_vanellope_16_60w_nonnumpad_4zone_lcd_micasilver_frontleft_1.png",
        "https:\/\/id-media.apjonlinecdn.com\/catalog\/product\/2\/1\/21c1_omen_vanellope_16_60w_nonnumpad_4zone_lcd_micasilver_frontright_1.png",
        "https:\/\/id-media.apjonlinecdn.com\/catalog\/product\/v\/a\/vanellope_21c1-4_1.png",
        "https:\/\/id-media.apjonlinecdn.com\/catalog\/product\/v\/a\/vanellope_21c1-5_1.png",
        "https:\/\/id-media.apjonlinecdn.com\/catalog\/product\/v\/a\/vanellope_21c1-6_1.png",
        "https:\/\/id-media.apjonlinecdn.com\/catalog\/product\/p\/r\/presenter_thumbnail_omen_vanellope_16_1.png",
        "https:\/\/id-media.apjonlinecdn.com\/catalog\/product\/s\/i\/size_thumbnail_omen_vanellope_16_1.png",
        "https:\/\/id-media.apjonlinecdn.com\/catalog\/product\/p\/o\/ports_thumbnail_omen_vanellope_16_1.png",
        "https:\/\/id-media.apjonlinecdn.com\/catalog\/product\/2\/1\/21c1_amd_omen_vanellope_metal_micasilver_win10_hd_cam_lifestyle-_3__1.jpg",
        "https:\/\/id-media.apjonlinecdn.com\/catalog\/product\/2\/1\/21c1_vanellope_featuregroup1_1.jpg"
    ],
    "offers": {
        "@type": "Offer",
        "priceCurrency": "IDR",
        "price": 24999000,
        "itemOffered": 1,
        "availability": "http:\/\/schema.org\/LimitedAvailability",
        "url": "https:\/\/www.hp.com\/id-en\/shop\/omen-by-hp-laptop-16-c0099ax-488f4pa.html",
        "priceValidUntil": "2021-12-31"
    },
    "mpn": "488F4PA",
    "brand": {
        "@type": "Thing",
        "name": "HP"
    }
}</script>        <meta name='target_country' content='ID'/>
<meta name="page_content" content="Products"/>
<meta name="content_country_applicability" content="ID"/>
<meta name="lifecycle" content="ID"/>
<meta name='language' content='en'/>

<meta name="web_section_id" content="R12088" />
<meta name="magento_page" content="Magento-ID-PDP"/>

<meta name='store_type' content='public' />


<script>
    require(['magentoStorefrontEvents'], function (magentoStorefrontEvents) {
        window.magentoStorefrontEvents = magentoStorefrontEvents;
        magentoStorefrontEvents.context.setStorefrontInstance(
            {"storeUrl":"https:\/\/www.hp.com\/id-en\/shop\/","websiteId":1,"websiteCode":"base","storeId":1,"storeCode":"hp_online_store","storeViewId":1,"storeViewCode":"en","websiteName":"Main Website","storeName":"HP Online Store","storeViewName":"English","baseCurrencyCode":"IDR","storeViewCurrencyCode":"IDR","catalogExtensionVersion":"100.0.2","environmentId":"a7e0dae2-add0-4629-88e6-88de34e73a8c","environment":"Production"}        );
        magentoStorefrontEvents.context.setMagentoExtension({
            magentoExtensionVersion: "7.0.1",
        });
        magentoStorefrontEvents.context.setPage({
            pageType: "Default"
        });
        magentoStorefrontEvents.context.setContext("pageExtended", {
            action: "page-view"
        });
    });
</script>

<script type="text/x-magento-init">
    {
        "*": {
            "dataServicesBase": {
                "isCookieRestrictionModeEnabled": 0,
                "isEnabled": 1            },
            "magentoStorefrontEventCollector": {}
        }
    }
</script>

<link rel="prefetch" as="script" href="https://id-media.apjonlinecdn.com/static/version1640122770/frontend/HPOLS/stellar/en_AU/magepack/bundle-common.min.js"/>

<link rel="prefetch" as="script" href="https://id-media.apjonlinecdn.com/static/version1640122770/frontend/HPOLS/stellar/en_AU/magepack/bundle-product.min.js"/>

    <script>
        require(['jquery'], function ($) {

            var insertStructureData = function (dataCallback, comment) {
                var el = $('<script type="application/ld+json">');
                el.html(JSON.stringify(dataCallback(), null, 2));
                $('head').append(el);
                if (comment) {
                    $(comment).insertBefore(el);
                }
            };
            var htmlEncode = function (content) {
                var res = '';
                res = content.replace(/&/g,"&amp;");
                res = res.replace(/</g,"&lt;");
                res = res.replace(/>/g,"&gt;");
                res = res.replace(/\'/g,"&#39;");
                res = res.replace(/\"/g,"&quot;");
                return res;
            }

            $(document).ready(function () {
                if ($('.breadcrumbs').find('.items .item:not(.back)').length < 1) {
                    return false;
                }
                insertStructureData(function () {
                    var crumbsData = {
                        "@context":"https://schema.org",
                        "@type":"BreadcrumbList",
                        "itemListElement":[]
                    };

                    $('.breadcrumbs').find('.items .item:not(.back)').each(function(idx, el) {
                        var f = $(el).first();
                        var node = {
                            "@type":"ListItem",
                            "position":1 + idx,
                            "name":htmlEncode(f.text().trim())
                        };
                        if (f.attr('href')) {
                            node.item = f.attr('href')
                        }
                        crumbsData.itemListElement.push(node);
                    })

                    return crumbsData;
                }, '<!-- Breadcrumbs Structured Data -->');
            });
        });
    </script>
<!-- OneTrust Cookies Consent Notice start -->

<script src="https://www.hp.com/cma/ng/lib/exceptions/privacy-banner.js" type="text/javascript" charset="UTF-8" data-document-language ="true"></script>

<script type="text/javascript">

function OptanonWrapper() { }

</script>

<!-- OneTrust Cookies Consent Notice end -->
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-N72GKFZ');</script>
<!-- End Google Tag Manager -->
<style>
.catalog-product-view .recommended-product-popup #new-popup-recommended-products .recommended-products .block.related .products.list li {
    width: auto !important;
}
body.catalogsearch-result-index .columns {
    margin: 0 !important;
    padding: 0 !important;
}

body.catalogsearch-result-index .columns .column.main {
    width: 100% !important;
}

.elasticsearch-product-filter>.page-wrapper>#maincontent.page-main>.columns .sidebar.sidebar-main #layered-filter-block.block.filter .block-content.filter-content #narrow-by-list.filter-options .filter-options-title-tooltip {
     display: none;
}

.catalog-product-view #product-deliver .deliver-box>p {
    width: 80%;
}

.promotion-offers-container .toolbar-sorter.sorter select.sorter-options {
    position: initial;
    width: auto;
    opacity: 1;
    display: inline-block;
}

.promotion-offers-container .toolbar-sorter:hover {
    background: none;
}

.promotion-offers-container .toolbar-sorter:hover .sorter-label {
    color: #333;
}

.promotion-offers-container .toolbar-sorter.sorter {
    margin-bottom: 60px !important;
}

.special-offer .block-included .block-content>ul{
    display: flex;
    flex-wrap: wrap;
    justify-content: flex-start;
}
.special-offer .block-included .block-content>ul li.hide{
  display: inline-block !important;
}

@media screen and (max-width: 1280px) {
    .delivery-information .delivery-days>span.stock-available {
        width: 70%;
}
}

@media (max-width: 768px) {
    .catalog-product-view .page-main .product-info-tabs .product-info-tabs-div .button-and-price .product-info-tabs-price .price-suggest .price-wrapper {
        margin-right: 8px;
    }
    .catalog-product-view .page-main .product-info-tabs .product-info-tabs-div .button-and-price .product-info-tabs-price .price-suggest .price-suggest-save {
        display: inline-block;
    }
}
</style>
<script type="text/javascript" src="https://nebula-cdn.kampyle.com/wu/541116/onsite/embed.js" async></script>

<script>
    var mobileValidationRule = '^[0-9]{1}[0-9]{8,13}$',
        vatValidationRule = '^[0-9]{15}$',
        vatNumberLabel = 'NPWP No',
        pinCodeValidationRule = '^[1-9]{1}[0-9]{4}$',
        businessValidationRule = '^$|^[0-9]{11}$',
        streetNumberValidationRule = '',
        streetAddressValidationRule = '',
        buildingNameValidationRule = '',
        enablePinCodeValidation = Boolean(1),
        enableGenerateCityByPinCode = Boolean(1),
        enableGenerateRegionByPinCode = Boolean(1),
        isRequiredMyBranchBankName = Boolean(0),
        isNeedNeftrtgsValidate = Boolean(0),
        isAlwaysShowErrorMessage = Boolean(0),
        abkw = 'countryCode-id-en,OMENbyHP,488F4PA,stock-yes,pickup-yes,processor-amd,HPHomeLaptopPCs,websiteCode-base',
        enableSlideValidation = Boolean(0),
        postcodeMaxLength = '5',
        rplSpecialChar = [],
        postcodeMinLength = '5',
        enableMessageEscaped = true,
        enableNewPdpPopup = true,
        messageEscapedRules = {"href#":"href=","##":"\""},
        customerTaxvatRule = '',
        latamStreetValidationRule = '',
        apartmentValidationRule = '',
        streetNumberMaxLength = '255',
        enableSearchItemsInSearchResults = Boolean(0),
        registrationNumberRule = '',
        specialInstructionsRule = '^[\s\S]{0,103}$/',
        countryId = 'ID',
        isShowPrefixToTelephone = '0';
</script>
<link rel="preconnect" href="https://www.googletagmanager.com" crossorigin="anonymous">
<meta property="og:type" content="product" />
<meta property="og:title"
      content="OMEN by HP Gaming Laptop 16-c0099AX" />
<meta property="og:image"
      content="https://id-media.apjonlinecdn.com/catalog/product/cache/b3b166914d87ce343d4dc5ec5117b502/2/1/21c1_omen_vanellope_16_60w_nonnumpad_4zone_lcd_micasilver_front_1.png" />
<meta property="og:description"
      content="Play yourself up" />
<meta property="og:url" content="https://www.hp.com/id-en/shop/omen-by-hp-laptop-16-c0099ax-488f4pa.html" />
    <meta property="product:price:amount" content="24999000"/>
    <meta property="product:price:currency"
      content="IDR"/>
<link rel="alternate"
      hreflang="en-id"
      href="https://www.hp.com/id-en/shop/omen-by-hp-laptop-16-c0099ax-488f4pa.html" />
    <link rel="canonical" href="https://www.hp.com/id-en/shop/omen-by-hp-laptop-16-c0099ax-488f4pa.html" />
    
<script>(window.BOOMR_mq=window.BOOMR_mq||[]).push(["addVar",{"rua.upush":"false","rua.cpush":"false","rua.upre":"false","rua.cpre":"false","rua.uprl":"false","rua.cprl":"false","rua.cprf":"false","rua.trans":"","rua.cook":"false","rua.ims":"false","rua.ufprl":"false","rua.cfprl":"false","rua.isuxp":"false","rua.texp":"norulematch"}]);</script>
                              <script>!function(e){var n="https://s.go-mpulse.net/boomerang/";if("False"=="True")e.BOOMR_config=e.BOOMR_config||{},e.BOOMR_config.PageParams=e.BOOMR_config.PageParams||{},e.BOOMR_config.PageParams.pci=!0,n="https://s2.go-mpulse.net/boomerang/";if(window.BOOMR_API_key="YJ2XX-MFTTM-QC8YL-NJ6NC-DHH57",function(){function e(){if(!r){var e=document.createElement("script");e.id="boomr-scr-as",e.src=window.BOOMR.url,e.async=!0,o.appendChild(e),r=!0}}function t(e){r=!0;var n,t,a,i,d=document,O=window;if(window.BOOMR.snippetMethod=e?"if":"i",t=function(e,n){var t=d.createElement("script");t.id=n||"boomr-if-as",t.src=window.BOOMR.url,BOOMR_lstart=(new Date).getTime(),e=e||d.body,e.appendChild(t)},!window.addEventListener&&window.attachEvent&&navigator.userAgent.match(/MSIE [67]\./))return window.BOOMR.snippetMethod="s",void t(o,"boomr-async");a=document.createElement("IFRAME"),a.src="about:blank",a.title="",a.role="presentation",a.loading="eager",i=(a.frameElement||a).style,i.width=0,i.height=0,i.border=0,i.display="none",o.appendChild(a);try{O=a.contentWindow,d=O.document.open()}catch(_){n=document.domain,a.src="javascript:var d=document.open();d.domain='"+n+"';void 0;",O=a.contentWindow,d=O.document.open()}if(n)d._boomrl=function(){this.domain=n,t()},d.write("<bo"+"dy onload='document._boomrl();'>");else if(O._boomrl=function(){t()},O.addEventListener)O.addEventListener("load",O._boomrl,!1);else if(O.attachEvent)O.attachEvent("onload",O._boomrl);d.close()}function a(e){window.BOOMR_onload=e&&e.timeStamp||(new Date).getTime()}if(!window.BOOMR||!window.BOOMR.version&&!window.BOOMR.snippetExecuted){window.BOOMR=window.BOOMR||{},window.BOOMR.snippetStart=(new Date).getTime(),window.BOOMR.snippetExecuted=!0,window.BOOMR.snippetVersion=14,window.BOOMR.url=n+"YJ2XX-MFTTM-QC8YL-NJ6NC-DHH57";var i=document.currentScript||document.getElementsByTagName("script")[0],o=i.parentNode,r=!1,d=document.createElement("link");if(d.relList&&"function"==typeof d.relList.supports&&d.relList.supports("preload")&&"as"in d)window.BOOMR.snippetMethod="p",d.href=window.BOOMR.url,d.rel="preload",d.as="script",d.addEventListener("load",e),d.addEventListener("error",function(){t(!0)}),setTimeout(function(){if(!r)t(!0)},3e3),BOOMR_lstart=(new Date).getTime(),o.appendChild(d);else t(!1);if(window.addEventListener)window.addEventListener("load",a,!1);else if(window.attachEvent)window.attachEvent("onload",a)}}(),"".length>0)if(e&&"performance"in e&&e.performance&&"function"==typeof e.performance.setResourceTimingBufferSize)e.performance.setResourceTimingBufferSize();!function(){if(BOOMR=e.BOOMR||{},BOOMR.plugins=BOOMR.plugins||{},!BOOMR.plugins.AK){var n=""=="true"?1:0,t="",a="pc6fc53sasudwyogbg4a-f-67c659790-clientnsv4-s.akamaihd.net",i="false"=="true"?2:1,o={"ak.v":"32","ak.cp":"1158007","ak.ai":parseInt("687787",10),"ak.ol":"0","ak.cr":73,"ak.ipv":4,"ak.proto":"h2","ak.rid":"53e530b7","ak.r":32005,"ak.a2":n,"ak.m":"dsca","ak.n":"essl","ak.bpcip":"120.188.81.0","ak.cport":3707,"ak.gh":"114.4.168.55","ak.quicv":"","ak.tlsv":"tls1.3","ak.0rtt":"","ak.csrc":"-","ak.acc":"","ak.t":"1640368568","ak.ak":"hOBiQwZUYzCg5VSAfCLimQ==RrbV6aA+RBdyl6iZOG+UStH1GIjLkBohnKHV8Ggz0TsrW+t+4OiiiYtFrWTqQUy0P28JVqUBP74WjCYsdKqgYi566J8+1/L+Q7DQ83w+FZYUmX38T8ELjDu5huTBpqeFNhJm8ffJieYtz+ICSfzwCmce4m2D/PHEf0HQXQTHacmycUrma4cvUO6B4K03YdgaT1lKbL0mwUMwB06ySg2pL0cl33Pi2h8quAf9DdxhY5U2PbURLfkyyd60gTqoCu4sE+5zVLZoW6IVmDJF7tsROS+p0BPep87umwPBkdlDpr6jmU8u99h7y3P/X3+Opf/SPWuFpIVhvCMqFqNQY7o02/zo2Fz6s6M0w8U8npLP6lF6ZByG1PaTF57bOWMdZ8fjgpj7WXYXmOJxDYIhJqekwHNDQ5FbMo3HLplokUJ3M8U=","ak.pv":"284","ak.dpoabenc":"","ak.tf":i};if(""!==t)o["ak.ruds"]=t;var r={i:!1,av:function(n){var t="http.initiator";if(n&&(!n[t]||"spa_hard"===n[t]))o["ak.feo"]=void 0!==e.aFeoApplied?1:0,BOOMR.addVar(o)},rv:function(){var e=["ak.bpcip","ak.cport","ak.cr","ak.csrc","ak.gh","ak.ipv","ak.m","ak.n","ak.ol","ak.proto","ak.quicv","ak.tlsv","ak.0rtt","ak.r","ak.acc","ak.t","ak.tf"];BOOMR.removeVar(e)}};BOOMR.plugins.AK={akVars:o,akDNSPreFetchDomain:a,init:function(){if(!r.i){var e=BOOMR.subscribe;e("before_beacon",r.av,null,null),e("onbeacon",r.rv,null,null),r.i=!0}return this},is_complete:function(){return!0}}}}()}(window);</script><script nonce="99c944b08c0cdf6b5a535934a317bed6">bazadebezolkohpepadr="1020980040"</script><script type="text/javascript" src="https://www.hp.com/akam/11/3cdae8a1" nonce="99c944b08c0cdf6b5a535934a317bed6" defer></script></head>
    <body data-container="body"
          data-mage-init='{"loaderAjax": {}, "loader": { "icon": "https://id-media.apjonlinecdn.com/static/version1640122770/frontend/HPOLS/stellar/en_AU/images/loader-2.gif"}}'
        itemtype="http://schema.org/Product" itemscope="itemscope" class="elasticsearch-product-filter hawk-search-product-filter catalog-product-view product-omen-by-hp-laptop-16-c0099ax-488f4pa categorypath-laptops-tablets-personal-laptops-omen-laptops category-omen-laptops page-layout-1column">
        <script type="text/x-magento-init">
        {
            "*": {
                "Knowband_Spinandwin/js/spinandwin": {}
            }
        }
</script>
<script type="text/x-magento-init">
    {
        "*": {
            "Magento_PageBuilder/js/widget-initializer": {
                "config": {"[data-content-type=\"slider\"][data-appearance=\"default\"]":{"Magento_PageBuilder\/js\/content-type\/slider\/appearance\/default\/widget":false},"[data-content-type=\"map\"]":{"Magento_PageBuilder\/js\/content-type\/map\/appearance\/default\/widget":false},"[data-content-type=\"row\"]":{"Magento_PageBuilder\/js\/content-type\/row\/appearance\/default\/widget":false},"[data-content-type=\"tabs\"]":{"Magento_PageBuilder\/js\/content-type\/tabs\/appearance\/default\/widget":false},"[data-content-type=\"slide\"]":{"Magento_PageBuilder\/js\/content-type\/slide\/appearance\/default\/widget":{"buttonSelector":".pagebuilder-slide-button","showOverlay":"hover","dataRole":"slide"}},"[data-content-type=\"banner\"]":{"Magento_PageBuilder\/js\/content-type\/banner\/appearance\/default\/widget":{"buttonSelector":".pagebuilder-banner-button","showOverlay":"hover","dataRole":"banner"}},"[data-content-type=\"buttons\"]":{"Magento_PageBuilder\/js\/content-type\/buttons\/appearance\/inline\/widget":false},"[data-content-type=\"products\"][data-appearance=\"carousel\"]":{"Magento_PageBuilder\/js\/content-type\/products\/appearance\/carousel\/widget":false}},
                "breakpoints": {"desktop":{"conditions":{"min-width":"1024px"},"options":{"products":{"default":{"slidesToShow":"5"}}}},"tablet":{"conditions":{"max-width":"1024px","min-width":"768px"},"options":{"products":{"default":{"slidesToShow":"4"},"continuous":{"slidesToShow":"3"}}}},"mobile":{"conditions":{"max-width":"768px","min-width":"640px"},"options":{"products":{"default":{"slidesToShow":"3"}}}},"mobile-small":{"conditions":{"max-width":"640px"},"options":{"products":{"default":{"slidesToShow":"2"},"continuous":{"slidesToShow":"1"}}}}}            }
        }
    }
</script>

<script type="text/x-magento-init">
    {
        "*": {
            "mage/cookies": {
                "expires": null,
                "path": "\u002Fid\u002Den\u002Fshop",
                "domain": ".www.hp.com",
                "secure": false,
                "lifetime": "86400"
            }
        }
    }
</script>


    <noscript>
        <div class="message global noscript">
            <div class="content">
                <p>
                    <strong>JavaScript seems to be disabled in your browser.</strong>
                    <span>For the best experience on our site, be sure to turn on Javascript in your browser.</span>
                </p>
            </div>
        </div>
    </noscript>
 

<script>
    require.config({
        map: {
            '*': {
                wysiwygAdapter: 'mage/adminhtml/wysiwyg/tiny_mce/tinymce4Adapter'
            }
        }
    });
</script>

<script>
    window.cookiesConfig = window.cookiesConfig || {};
    window.cookiesConfig.secure = true;
</script>
<script>
    require.config({
        paths: {
            googleMaps: 'https\u003A\u002F\u002Fmaps.googleapis.com\u002Fmaps\u002Fapi\u002Fjs\u003Fv\u003D3\u0026key\u003D'
        },
        config: {
            'Magento_PageBuilder/js/utils/map': {
                style: ''
            },
            'Magento_PageBuilder/js/content-type/map/preview': {
                apiKey: '',
                apiKeyErrorMessage: 'You\u0020must\u0020provide\u0020a\u0020valid\u0020\u003Ca\u0020href\u003D\u0027https\u003A\u002F\u002Fwww.hp.com\u002Fid\u002Den\u002Fshop\u002Fadminhtml\u002Fsystem_config\u002Fedit\u002Fsection\u002Fcms\u002F\u0023cms_pagebuilder\u0027\u0020target\u003D\u0027_blank\u0027\u003EGoogle\u0020Maps\u0020API\u0020key\u003C\u002Fa\u003E\u0020to\u0020use\u0020a\u0020map.'
            },
            'Magento_PageBuilder/js/form/element/map': {
                apiKey: '',
                apiKeyErrorMessage: 'You\u0020must\u0020provide\u0020a\u0020valid\u0020\u003Ca\u0020href\u003D\u0027https\u003A\u002F\u002Fwww.hp.com\u002Fid\u002Den\u002Fshop\u002Fadminhtml\u002Fsystem_config\u002Fedit\u002Fsection\u002Fcms\u002F\u0023cms_pagebuilder\u0027\u0020target\u003D\u0027_blank\u0027\u003EGoogle\u0020Maps\u0020API\u0020key\u003C\u002Fa\u003E\u0020to\u0020use\u0020a\u0020map.'
            },
        }
    });
</script>

<script>
    require.config({
        shim: {
            'Magento_PageBuilder/js/utils/map': {
                deps: ['googleMaps']
            }
        }
    });
</script>
    <!-- GOOGLE TAG MANAGER -->
    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MZXB4R4"
                height="0" width="0" style="display:none;visibility:hidden"></iframe>
    </noscript>
    <!-- END GOOGLE TAG MANAGER -->

<script type="text/javascript">

    var lazyLoadingThreshold = 100,
        isLazyLoadingEnabled = Boolean(1),
        isAllowdPage = Boolean(0);

</script>
<script type="text/x-magento-init">
    {
         "*": {
              "Mageplaza_LazyLoading/js/lazyloadingInit": {}
         }
    }
</script>


<style>
    img.mplazyload-icon {
        width: 100% !important;
        height: 100% !important;
        margin: auto auto !important;
        min-height: auto !important;
        min-width: auto !important;
    }

    img.mplazyload-blur {
        transition: 0.3s filter linear;
        -o-transition: 0.3s -o-filter linear;
        -webkit-filter: blur(5px);
        filter: blur(5px);
    }
    #remove-after-loader img.mplazyload-icon,
    .flexslider img.mplazyload-icon{
        height: 36vw !important;
    }
    .desktop-views img.mplazyload-icon{
        height: 10vw !important;
    }
    .product-info-main .product-view-choose-wrap #product-feature ul li .feature-icon img.mplazyload-icon{
        width: 55px !important;
        height: 55px !important;
    }
    .footer-payment-icons-container ul.footer-payment-icons .payment-icon img.mplazyload-icon{
        width: 64px !important;
        height: 64px !important;
    }
    .customer-category-banner-box .top-banner img.mplazyload-icon{
        max-height: 65px !important;
    }
    .category-tabs img.mplazyload-icon{
        max-height: 65px !important;
    }
    .category-tabs .product-image-photo.mplazyload-icon{
        max-height: 100% !important;
    }
    .category-tabs .product-image-photo{
        opacity: 1 !important;
    }
</style>
<script>
    window.dataLayer = [];
</script>
        
                                    <!-- GOOGLE TAG MANAGER -->
                <script type="text/javascript" async>
                    //<![CDATA[
                    (function () {
                        let initAnalytics = function () {
                            window.dataLayer = window.dataLayer || [];
                            (function (w, d, s, l, i) {
                                w[l] = w[l] || [];
                                w[l].push({'gtm.start': new Date().getTime(), event: 'gtm.js'});
                                var f = d.getElementsByTagName(s)[0],
                                    j = d.createElement(s),
                                    dl = l != 'dataLayer' ? '&l=' + l : '';
                                j.async = true;
                                j.src = 'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
                                f.parentNode.insertBefore(j, f);
                            })(window, document, 'script', 'dataLayer', 'GTM-MZXB4R4');
                        };
                        try {
                            window.addEventListener('load', initAnalytics, false);
                        } catch (e) {
                            initAnalytics()
                        }
                    })();
                    //]]>
                </script>
                <!-- END GOOGLE TAG MANAGER -->
            
                            <script type="text/javascript" async>
                    //<![CDATA[
                    (function () {
                        let initAnalytics = function () {
                            window.dataLayer = window.dataLayer || [];
                            (function (w, d, s, l, i) {
                                w[l] = w[l] || [];
                                w[l].push({'gtm.start': new Date().getTime(), event: 'gtm.js'});
                                var f = d.getElementsByTagName(s)[0],
                                    j = d.createElement(s),
                                    dl = l != 'dataLayer' ? '&l=' + l : '';
                                j.async = true;
                                j.src = 'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
                                f.parentNode.insertBefore(j, f);
                            })(window, document, 'script', 'dataLayer', 'GTM-KHWBPWB');
                        };
                        try {
                            window.addEventListener('load', initAnalytics, false);
                        } catch (e) {
                            initAnalytics()
                        }
                    })();
                    //]]>
                </script>
                                                                            <script>
                    //<![CDATA[
                    var dlCurrencyCode = 'IDR';
                    var paymentSuccessData = [];
                    var getCartContentForDataLayer = [];
                    var PLPPageClick = false;
                    var PLPPageLimiterChange = false;
                    var productListPageData = productListPageData || {};
                    var staticImpressions = staticImpressions || {};
                    var pageName5 = '';
                    var pageName6 = '';
                    var customerType = 'guest';
                    var loginStatus = false;
                    //]]>
                </script>
                        
<script type="text/javascript">
    var customerLoggedIn = '';
    var customerId = '';
    pageName5 = 'PDP';
    pageName6 = 'Omen Laptops';
    var productDetails = {"detail":{"actionField":{"list":"pdp"},"products":[{"name":"OMEN by HP Gaming Laptop 16-c0099AX","id":"488F4PA","price":"24999000.00","category":"M7","variant":"In Stock","brand":"HP"}]}};
    var GoogleAnalyze_dataLayer3_coupon = 0;
    var bannerClass = ' .for-desktop';
    var bannerClassOne = '.for-desktop';
    var blockId = '';
    var initDataLayer = {};
</script>
<script type="text/x-magento-init">
    {
        "*": {
            "HPOLS_GoogleTagManager/js/googleTagManagerJs":{}
        }
    }
</script>



<script async type="text/javascript">
    window.bvCallback = function (BV) {
        if (BV.reviews) {
            BV.reviews.on('show', function () {
                            });
        }
        if (BV.questions) {
            BV.questions.on('show', function () {
                            });
        }
    };
</script>
<div id="product-filter-init"></div>

<script type="text/x-magento-init">
    {
        "#product-filter-init": {
            "HPOLS_Elasticsearch/js/init": {
                 "filterItemSelector": "#narrow-by-list .item a, #narrow-by-list .swatch-option-link-layered",
                 "actionsSelector": ".toolbar-products .pages-items .item a",
                 "limiterSelector": ".toolbar-products .field.limiter select#limiter",
                 "priceSelector": ".smile-es-range-slider a.action",
                 "clearButton": ".filter .filter-clear",
                 "removeFilterLink": ".filter-current .item a.action",
                 "productlistSelector": ".hawk-search-product-list",
                 "categoryBreadcrumbs": ".window-banner-container .breadcrumbs",
                 "auto": "1",
                 "filterSelector": "#layered-filter-block",
                 "filterParamSeparator": "=",
                 "isSeoFriendly": "",
                 "_currentUrl": "https://www.hp.com/id-en/shop/omen-by-hp-laptop-16-c0099ax-488f4pa.html",
                 "realParams": {"id":"7651"},
                 "selected": {},
                 "categoryUrlSufix": ".html"
             }
        }
    }
</script>
<div class="page-wrapper">

<script>
    require(['magentoStorefrontEvents'], function (magentoStorefrontEvents) {
        window.magentoStorefrontEvents.context.setContext("recsContext", {
            alternateEnvironmentId: ""
        });
    });
</script>

<script type="text/x-magento-init">
        {
            "*": {
                "Magento_ProductRecommendationsLayout/js/recsFetcher": {}
            }
        }
</script>
<header class="page-header"><div class="header content"><span data-action="toggle-nav" class="action nav-toggle"><span>Toggle Nav</span></span>
<a
    class="logo"
    href="https://www.hp.com/id-en/shop/"
    title="HP&#x20;Online&#x20;Store"
    aria-label="store logo">
    <img src="https://id-media.apjonlinecdn.com/logo/stores/1/HP_Logo_Halo.png"
         title="HP&#x20;Online&#x20;Store"
         alt="HP&#x20;Online&#x20;Store"
                            />
</a>

<div class="block block-search hawk-search" data-toggle="false">
    <div class="block block-title"><strong>Search</strong></div>
    <div class="block block-content">
        <form class="form minisearch" id="search_mini_form" action="https://www.hp.com/id-en/shop/catalogsearch/result/" method="get">
            <div class="field search">
                <label class="label" for="search" data-role="minisearch-label">
                    <span>Search</span>
                </label>
                <div class="actions close">
                    <span class="quick-search-close-icon"></span>
                </div>
                <div class="control">
                    <input id="search"
                           data-mage-init='{"quickHawkSearch":{
                                "formSelector":"#search_mini_form",
                                "url":"https://searchapi-asia.hawksearch.com/api/v2/autocomplete",
                                "destinationSelector":"#search_autocomplete",
                                "templates": {"items":{"title":"Search items","template":"HPOLS_Elasticsearch\/autocomplete\/items"},"term":{"title":"Common searches","template":"Smile_ElasticsuiteCore\/autocomplete\/term"},"product":{"title":"Products","template":"Smile_ElasticsuiteCatalog\/autocomplete\/product"},"brand":{"title":"Brand","template":"HPOLS_Elasticsearch\/autocomplete\/brand"},"buying_guide":{"title":"Buying Guide","template":"HPOLS_Elasticsearch\/autocomplete\/buying_guide"},"landing_pages":{"title":"Content","template":"HPOLS_Elasticsearch\/autocomplete\/landing_pages"},"category":{"title":"Categories","template":"Smile_ElasticsuiteCatalog\/autocomplete\/category"},"product_attribute":{"title":"Attributes","template":"Smile_ElasticsuiteCatalog\/autocomplete\/product-attribute","titleRenderer":"Smile_ElasticsuiteCatalog\/js\/autocomplete\/product-attribute"}},
                                "priceFormat" : {"pattern":"Rp %s","precision":0,"requiredPrecision":0,"decimalSymbol":".","groupSymbol":".","groupLength":3,"integerRequired":false},
                                "clientGuid": "bea1f45ca093431c9f81c11eeff54902",
                                "storeId": "1",
                                "searchUrl": "https://www.hp.com/id-en/shop/catalogsearch/result/index/",
                                "baseUrl": "https://www.hp.com/id-en/shop/"
                                }
                           }'
                           type="text"
                           data-search-submit="false"
                           name="q"
                           value=""
                           placeholder="What are you looking for?"
                           class="input-text"
                           maxlength="128"
                           role="combobox"
                           aria-haspopup="false"
                           aria-autocomplete="both"
                           autocomplete="off"/>

                    <div class="search-btn">
                        <a title="Search"
                           class="action customize-search"
                           id="customize-search"></a>
                    </div>

                    <div class="actions clear">
                        <button hidden type="submit" title="Clear All"
                                class="action search">
                            <span>Clear</span>
                        </button>
                        <a class="quick-search-clear" id="quick-search-clear"></a>
                    </div>

                    <div class="hawk-search-autocomplete-overlay"></div>
                    <div id="search_autocomplete" class="search-autocomplete hawk-search">
                        <div class="no-result-message hidden">
                            <span class="sorry">SORRY!</span>
                            We were unable to find any match for your search, but here are some popular options to get you started                        </div>
                       <div class="hover-left-auto-complete"></div>
                        <div class="search-autocomplete-left">
                            <div id="hot-search-menu-loader" data-role="delivery-loader" class="loading-mask" data-mage-init='{"loader": {}}'>
                                <div class="loader">
                                    <img src="https://id-media.apjonlinecdn.com/static/version1640122770/frontend/HPOLS/stellar/en_AU/images/loader-2.gif"
                                         alt="Loading..."">
                                </div>
                            </div>
                            <div class="top_suggestions_box"></div>
                            <div class="suggested_categories_box"></div>
                            <button class="action primary all-results rightarrow" href="#">
                                <a>See all results</a>
                            </button>
                        </div>
                        <div class="search-autocomplete-right">
                            <div id="hot-search-loader" data-role="delivery-loader" class="loading-mask" data-mage-init='{"loader": {}}'>
                                <div class="loader">
                                    <img src="https://id-media.apjonlinecdn.com/static/version1640122770/frontend/HPOLS/stellar/en_AU/images/loader-2.gif"
                                         alt="Loading...">
                                </div>
                            </div>
                            <div class="products-box"></div>
                            <div class="learn-box"></div>
                                                            <div class="support-box">
                                    <p class="support-label">Support</p>
                                    <div data-content-type="row" data-appearance="contained" data-element="main"><div data-enable-parallax="0" data-parallax-speed="0.5" data-background-images="{}" data-background-type="image" data-video-loop="true" data-video-play-only-visible="true" data-video-lazy-load="true" data-video-fallback-src="" data-element="inner" style="justify-content: flex-start; display: flex; flex-direction: column; background-position: left top; background-size: cover; background-repeat: no-repeat; background-attachment: scroll; border-style: none; border-width: 1px; border-radius: 0px; margin: 0px; padding: 0px;"><div data-content-type="text" data-appearance="default" data-element="main" style="border-style: none; border-width: 1px; border-radius: 0px; margin: 0px; padding: 0px;"><style>
.support-box [data-content-type='row'][data-appearance='contained'] {
    max-width: none;
    margin-left: inherit !important;
    margin-right: inherit !important;
}

.block-search.hawk-search #search_mini_form .search .actions.close {
    z-index: 100;
}

@media only screen and (min-width:768px) {
.catalogsearch-result-index.hawk-search-product-filter .search-result-tabs.hawk-search .suggested-categories .items .item .title {
    font-size: 18px;
}
}
.catalogsearch-result-index.hawk-search-product-filter .search-result-tabs.hawk-search .suggested-categories .items .item .title {
    white-space: normal;
    height: 50px !important;
    line-height: 25px !important;
    margin: 20px 0 0 0;
}
.catalogsearch-result-index.hawk-search-product-filter .result_tab_shop .search-banner {
       text-align: center;
}
.search-autocomplete.hawk-search .search-autocomplete-left {
    box-sizing: initial !important;
}
.search-autocomplete.hawk-search .search-autocomplete-right .products-box .items .product_item {
    box-sizing: initial !important;
}
.search-autocomplete.hawk-search .search-autocomplete-right .learn-box .items .item {
    box-sizing: initial !important;
}
.search-autocomplete.hawk-search .search-autocomplete-right .support-box .items .item {
    box-sizing: initial !important;
}
@media only screen and (max-width: 600px) {
    .block-search.hawk-search #search_mini_form .search .actions .quick-search-close-icon {
        margin-top: 25px !important;
    }
}

@media screen and (min-width: 768px) {
    .search-autocomplete.hawk-search .rightarrow:after {
        top: 17px;
    }
}
</style>
<div class="support-items items">
<div class="item"><a href="https://www.hp.com/id-en/shop/sales/guest/form">
<div class="title">Order Status</div>
</a>
<div class="description"></div>
<a class="see-more-link" href="https://www.hp.com/id-en/shop/sales/guest/form">
<div class="see-more">see more</div>
</a></div>
<div class="item"><a href="https://www.hp.com/id-en/shop/faqs">
<div class="title">FAQ</div>
</a>
<div class="description"></div>
<a class="see-more-link" href="https://www.hp.com/id-en/shop/faqs">
<div class="see-more">see more</div>
</a></div>
<div class="item"><a href="https://support.hp.com/id-en">
<div class="title">Technical Support</div>
</a>
<div class="description"></div>
<a class="see-more-link" href="https://support.hp.com/id-en">
<div class="see-more">see more</div>
</a></div>
</div></div></div></div>                                </div>
                                                    </div>
                        <button class="action primary all-results" href="#">
                            <a>See all results</a>
                        </button>
                    </div>
                                    </div>
            </div>
        </form>
    </div>
</div>

<script type="text/x-magento-init">
    {
        "*": {
            "HPOLS_Search/formMini": {"multipleLanguageClass":"multiple_language"}        }
    }
</script>
<script id="top_suggestions_template" type="text/x-magento-template">
    <p class="top-suggestions-label"><%= heading %></p>
    <div class="top-suggestions-items">
        <% _.each(result, function(item) { %>
            <a href="<%- searchUrl + '?q=' + item.RawValue %>" class="top-suggestions-item" search="<%- item.RawValue %>"
               type="popular">
                <%= item.Value %>
            </a>
        <% }); %>
    </div>
</script>
<script id="suggested_categories_template" type="text/x-magento-template">
    <p class="suggested_categories-label"><%= heading %></p>
    <div class="suggested_categories-items">
        <% _.each(result, function(item) { %>
            <a href="<%- searchUrl + '?q=' + keyword + '&' + item.FieldQSName + '=' + item.FieldQSValue %>"
               class="top-suggestions-item" search="<%- item.FieldQSValue %>"
               data-search-field="<%- item.FieldQSName %>" type="category">
                <%= item.Value %>
            </a>
        <% }); %>
    </div>
</script>
<script id="learn_block_template" type="text/x-magento-template">
    <p class="learn-label"><%= heading %></p>
    <div class="items">
        <% _.each(result, function(item) { %>
            <div class="item count<%- result.length %>">
                <a href="<%- baseUrl + item.Results.Document.url_key %>">
                    <span><%- item.Results.Document.name %></span>
                </a>
            </div>
        <% }); %>
    </div>
</script>
<script id="product_item_template" type="text/x-magento-template">
    <p class="shop-label"><%= heading %></p>
    <div class="items">
        <% _.each(result, function(data, index) { %>
            <a class="product_item count<%- result.length %>" id="product-item-<%- index %>"
               href="<%- baseUrl + data.Results.Document.url_key + '.html' %>">
                <div class="product-image-box">
                    <img width="80"
                         src="<%- data.Results.Document.default_image ? data.Results.Document.default_image : (data.Thumb ? data.Thumb.Url : '') %>">
                </div>
                <div class="product-shop product-item">
                    <div class="f-fix">
                        <div class="product-primary">
                            <div class="product-name"><%- data.ProductName %></div>
                        </div>
                        <div class="product-secondary">
                            <div class="price-box">
                                <% if (data.Results.Document.suggested_retail_price > data.Results.Document['price_sale_sid' + storeId]) { %>
                                    <span class="suggest-retail-price">
                                        <span class="price">
                                            <%= priceUtil.formatPrice(data.Results.Document.suggested_retail_price, priceFormat) %>
                                        </span>
                                    </span>
                                <% } %>
                                <span class="regular-price">
                                    <span class="price">
                                        <%= priceUtil.formatPrice(data.Results.Document['price_sale_sid' + storeId], priceFormat) %>
                                    </span>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        <% }); %>
    </div>
</script>
<script type="text/x-magento-init">
    {
        "*": {
            "HP_HawkSearch/js/google-analytics": {"isActive":true,"banner":[]}        }
    }
</script>
    <div class="sections nav-sections">
                <div class="section-items nav-sections-items" data-mage-init='{"tabs":{"openedState":"active"}}'>
                                            <div class="section-item-title nav-sections-item-title" data-role="collapsible">
                    <a class="nav-sections-item-switch" data-toggle="switch" href="#store.menu">Menu</a>
                </div>
                <div class="section-item-content nav-sections-item-content" id="store.menu" data-role="content">
<nav class="navigation" data-action="navigation">
    <ul data-mage-init='{"menu":{"delay":10, "responsive":true, "expanded":true, "position":{"my":"left top","at":"left bottom"}}}'>
                
        <li class="level0 nav-0 level-top ui-menu-item mobile-offers-menu" role="presentation">
            <span class="offers ui-menu-item-image"></span>
            <a href="https://www.hp.com/id-en/shop/promo-sale.html"
               data-guest-link="offers"
               data-url="https://www.hp.com/id-en/shop/promo-sale.html"
               class="level-top ui-corner-all"
               id="ui-id-0"
               tabindex="-1"
               role="menuitem"
            >
                <span>Latest Offers</span>
            </a>
        </li>

                                <li class="level0 nav-1 first level-top ui-menu-item business-solutions-li" role="presentation">
                <span class="business-solutions ui-menu-item-image"></span>
                <a href="javascript:void(0);"
                   class="level-top ui-corner-all has-dropdown-menu"
                   data-url="https://www.hp.com/id-en/shop/business-solutions.html"
                   aria-haspopup="true"
                   id="ui-id-1"
                   tabindex="-1"
                   role="menuitem">
                    <span>Business Solutions</span>
                </a>
                                    <ul class="level0 submenu ui-menu ui-widget ui-widget-content ui-corner-all" role="menu" aria-expanded="false" aria-hidden="true">
                        <li class="level1 nav-1-dropdown parent ui-menu-item" role="presentation">
                            <div data-content-type="row" data-appearance="full-bleed" data-enable-parallax="0" data-parallax-speed="0.5" data-background-images="{}" data-video-fallback-src="" data-element="main" style="justify-content: flex-start; display: flex; flex-direction: column; background-position: left top; background-size: cover; background-repeat: no-repeat; background-attachment: scroll; border-style: none; border-width: 0px; border-radius: 0px; margin: 0px; padding: 0px;"><div data-content-type="text" data-appearance="default" data-element="main" style="border-style: none; border-width: 0px; border-radius: 0px; margin: 0px; padding: 0px;"><style><!--

.sections.nav-sections .navigation .dropdown-menu>li:nth-child(3) i.icon-offers:before {
color: red;
}
--></style>


<div class="switcher language switcher-language " data-ui-id="language-switcher" id="switcher-language-nav">
    <strong class="label switcher-label"><span>Language</span></strong>
    <div class="actions dropdown options switcher-options">
        <div class="action toggle switcher-trigger">
                                                <a href="#" id="language-option" data-post='{"action":"https:\/\/www.hp.com\/id-en\/shop\/stores\/store\/redirect\/","data":{"___store":"id","___from_store":"en","uenc":"aHR0cHM6Ly93d3cuaHAuY29tL2lkLWlkL3Nob3Avb21lbi1ieS1ocC1sYXB0b3AtMTYtYzAwOTlheC00ODhmNHBhLmh0bWw_X19fc3RvcmU9aWQ,"}}'>
                        Bahasa</a>
                            </div>
    </div>
</div>
<script id="customer-location-template" type="text/x-magento-template">
    <div class="customer-location" style="position: relative;">
        <div data-role="customer-location-loader" class="customer-location-loader loading-mask" data-mage-init='{"loader": {}}'
             style="position: absolute;display:none;">
            <div class="loader">
                <img src="https://id-media.apjonlinecdn.com/static/version1640122770/frontend/HPOLS/stellar/en_AU/images/loader-2.gif" alt="Loading..." style="position: absolute;">
            </div>
        </div>
        My location is:
        <span class="location-city" title="My Location"><%- data.city %><span class="state <%- data.additionalClass %>">, <%- data.state %></span></span>
    </div>
</script>
<script>
    var checkLocationDataUrl = 'https://www.hp.com/id-en/shop/customer/pincode/location/?sections=location';
        var isShowCustomerLocation = false;
</script>
<script type="text/x-magento-init">
        {
            "*": {
                "HPOLS_Customer/js/location": {}
            }
        }
</script>

<script>
    var storeId = "1";
</script>
<script type="text/x-magento-init">
        {
            "*": {
                "Magento_Theme/js/private-store-action": {}
            }
        }
</script>
</div></header><div class="window-banner-container-warp">
    <div class="window-banner-container">
        <div class="breadcrumbs"></div>
    </div>
</div>
<script type="text/x-magento-init">
    {
        ".breadcrumbs": {
            "breadcrumbs": {"categoryUrlSuffix":".html","userCategoryPathInUrl":1,"product":"OMEN by HP Gaming Laptop 16-c0099AX","tag":{"tag0":{"label":" Standard laptop","link":"https:\/\/www.hp.com\/id-en\/shop\/laptops\/omen-laptops.html?hp_facet_formfactor=Standard laptop"},"tag1":{"label":" OMEN by HP","link":"https:\/\/www.hp.com\/id-en\/shop\/laptops\/omen-laptops.html?hp_facet_subbrand=OMEN by HP"}},"tagIds":[0,1]}        }
    }
</script>
<main id="maincontent" class="page-main"><a id="contentarea" tabindex="-1"></a>
<div class="page messages">
<div data-placeholder="messages"></div>
<div data-bind="scope: 'messages'" id="close-c">
    <!-- ko if: cookieMessages && cookieMessages.length > 0 -->
    <div role="alert" data-bind="foreach: { data: cookieMessages, as: 'message' }, afterRender: afterLoaded" class="messages hide">
        <div data-bind="attr: {
            class: 'message-' + message.type + ' ' + message.type + ' message',
            'data-ui-id': 'message-' + message.type
        }">
            <div data-bind="html: $parent.prepareMessageForHtml(message.text)"></div>
            <div class="fl-close">
                <a href="#" data-bind="click: $parent.closeMessage">X</a>
            </div>
        </div>
    </div>
    <!-- /ko -->

    <!-- ko if: messages().messages && messages().messages.length > 0 -->
    <div role="alert" data-bind="foreach: { data: messages().messages, as: 'message' }, afterRender: afterLoaded" class="messages hide">
        <div data-bind="attr: {
            class: 'message-' + message.type + ' ' + message.type + ' message',
            'data-ui-id': 'message-' + message.type
        }">
            <div data-bind="html: $parent.prepareMessageForHtml(message.text)"></div>
            <div class="fl-close">
                <a href="#" data-bind="click: $parent.closeMessage">X</a>
            </div>
        </div>
    </div>
    <!-- /ko -->
</div>
<script type="text/x-magento-init">
    {
        "*": {
            "Magento_Ui/js/core/app": {
                "components": {
                        "messages": {
                            "component": "Magento_Theme/js/view/messages"
                        }
                    }
                }
            }
    }
</script>
</div><div class="columns"><div class="column main"><div class="product-info-main"><div class="page-title-wrapper">
    <h1 class="page-title"
                >
        <span class="base" data-ui-id="page-title-wrapper" >OMEN by HP Gaming Laptop 16-c0099AX</span>    </h1>
    </div>
<div class="product-info-stock-sku">
            <div class="stock available" title="Availability">
            <span>In stock</span>
        </div>
    
    <div class="product attribute sku">
                    <strong class="type">SKU</strong>
                <div class="value "  itemprop="sku">
                            488F4PA                    </div>
    </div>
</div><script>
    var categoryId = '75',
        categoryUrlKey = 'omen-laptops';
</script>
<script>
    require([
        'mage/url'
    ], function(url) {
        return url.setBaseUrl('https://www.hp.com/id-en/shop/');
    })
</script><div class="specific-attribute">
        <span class="title">Colour</span>
        <span class="value">Mica silver cover and base, mica silver aluminum keyboard frame</span>
</div>
    <div id="product-view-choose" class="clearfix product-view-choose-wrap">
                
                            
            
                            <div id="product-feature">
                    <div class="feature-title">Configuration</div>
                    <ul>
                        
            <li class="hp_facet_processorfamily new-feature">

        
        <span class="feature-icon">
            <img  src="https://id-media.apjonlinecdn.com/static/version1640122770/frontend/HPOLS/stellar/en_AU/Magento_Catalog/images/product/placeholder/small_image.jpg"  alt="Processor family"/>
        </span>
        <span class="option-style" title="AMD&#x20;Ryzen&#x2122;&#x20;9&#x20;processor">
            AMD Ryzen™ 9 processor        </span>
    </li>
    
            <li class="hp_facet_os new-feature">

        
        <span class="feature-icon">
            <img  src="https://id-media.apjonlinecdn.com/attribute/swatch/o/s/os2.png"  alt="Operating system"/>
        </span>
        <span class="option-style" title="Windows&#x20;10&#x20;Home&#x20;64">
            Windows 10 Home 64        </span>
    </li>
    
            <li class="hp_facet_hd_01des new-feature">

        
        <span class="feature-icon">
            <img  src="https://id-media.apjonlinecdn.com/attribute/swatch/h/a/hard-disk2.png"  alt="Hard Drive"/>
        </span>
        <span class="option-style" title="512&#x20;GB&#x20;PCIe&#xAE;&#x20;NVMe&#x2122;&#x20;TLC&#x20;M.2&#x20;SSD">
            512 GB PCIe® NVMe™ TLC M.2 SSD        </span>
    </li>
    
            <li class="hp_facet_scrnsizeus new-feature">

        
        <span class="feature-icon">
            <img  src="https://id-media.apjonlinecdn.com/static/version1640122770/frontend/HPOLS/stellar/en_AU/Magento_Catalog/images/product/placeholder/small_image.jpg"  alt="Screen size"/>
        </span>
        <span class="option-style" title="16.1">
            16.1        </span>
    </li>
    
            <li class="hp_facet_graphics new-feature">

        
        <span class="feature-icon">
            <img  src="https://id-media.apjonlinecdn.com/attribute/swatch/g/r/graphics2.png"  alt="Graphics"/>
        </span>
        <span class="option-style" title="AMD&#x20;Radeon">
            AMD Radeon        </span>
    </li>
                        </ul>
                </div>
                    
        <script type="text/x-magento-init">
            {
                 "*": {
                      "Magento_Catalog/js/feature-select": {"related":[]}                 }
            }
        </script>
    </div>
        
<script>
require([
    "jquery",
    'mage/translate',
    'Magento_Ui/js/modal/alert',
    'jquery/validate'
], function($, $t, alert) {
    //view cart event
    var cartUrl = "https://www.hp.com/id-en/shop/checkout/cart/",
        eventType = "click",
        productModalClass = ".catalog-product-popup",
        viewCartClass = ".view-cart",
        continueShoppingClass = ".continue-shopping",
        modalViewCart = productModalClass + " " + viewCartClass,
        modalContinueShopping = productModalClass + " " + continueShoppingClass,
        isConfigurableProduct = Boolean(),
        isBundleProduct = Boolean(),
        isSimpleProduct = Boolean(1);

    $(document).off(eventType, modalViewCart);
    $(document).on(eventType, modalViewCart, function () {
        var form = $(this).closest("form");

        form.find("#return_url").val(cartUrl);
        form.find(continueShoppingClass).eq(0).trigger(eventType);

        return false;
    });

    // Popup continue shopping button event
    $(document).off(eventType, modalContinueShopping);
    $(document).on(eventType, modalContinueShopping, function(e) {
        var className = $(this).attr('class');
        var _this = $(this),
            ajaxClassName = "dynamic product adding",
            disableClass = "disabled",
            dynamicTimer,
            dynamicCartData = getDynamicCartData(),
            recommendedCartData = getRecommendedCartData(_this);

        if (dynamicCartData || recommendedCartData) {
            $(this).addClass(ajaxClassName).addClass(disableClass);
            if (isBundleProduct) {
                var returnUrlNode = $("#return_url");

                if (returnUrlNode.val()) {
                    returnUrlNode.data("cart-url", returnUrlNode.val()).val("");
                }
                dynamicTimer = setInterval(function() {
                    if (!_this.hasClass(disableClass)) {
                        addDynamicProductToCart(_this, cartUrl,className);
                        clearInterval(dynamicTimer);
                    }
                }, 500);
            } else {
                addDynamicProductToCart(_this,'');
            }
        } else {
            closePopup(_this);
        }
    });

    function closePopup(_this) {
        var catalogProductPopup = $(".catalog-product-popup"),
            modalCloseButton = catalogProductPopup.find(".action-close"),
            form = catalogProductPopup.find("form"),
            cartUrl = form.find("#return_url").val();

        modalCloseButton.length > 0 && modalCloseButton.trigger(eventType);

        if ((isSimpleProduct || isConfigurableProduct) && cartUrl) {
            location.href = cartUrl;
        }
        resetRecommendedAddToCart(_this);
    }

    function addDynamicProductToCart(_this, cartUrl) {
        var skuMain = $("input[name='sku']").val();
        var productId = $("input[name='product']").val();
        var ajaxClassName = "dynamic product adding",
            dynamicCartUrl = "https://www.hp.com/id-en/shop/dynamicdiscount/cart/add/",
            dynamicCartData = getDynamicCartData(),
            recommendedCartData = getRecommendedCartData(_this);

        if (recommendedCartData) {
            if (dynamicCartData) {
                dynamicCartData += ',' + recommendedCartData;
            } else {
                dynamicCartData = recommendedCartData;
            }
        }

        $.ajax({
            url: dynamicCartUrl,
            type: 'POST',
            dataType: 'json',
            data: {
                'products': dynamicCartData,
                "main_sku":skuMain,
                'product_id':productId,
                'products_detail':'pdp',
            },
            beforeSend: function() {
                _this.addClass(ajaxClassName);
                $.ajaxSetup({showLoader: true});
                _this.closest("form").find(viewCartClass).attr('disabled', true);
            },
            success: function(response) {
                _this.closest("form").find(viewCartClass).attr('disabled', false);
                _this.removeClass(ajaxClassName).removeClass('disabled');

                if (response.isAddToCart) {
                    // Clear all bubble items
                    // clearBubbleItems();
                    //simple continue
                    cartUrl = !cartUrl ? $("#return_url").val() : cartUrl;
                    var productInfo = response.recommend_products;
                    var localActionValue = window.localStorage.getItem('cart-button');
                    var cookieOfferId = getCookie('spos_offer_id'),
                        offerId = '';
                    if (!_.isEmpty(cookieOfferId) && typeof cookieOfferId !== "undefined" && cookieOfferId !== 'null') {
                        offerId = cookieOfferId;
                    }

                    if (localActionValue == 'view_cart') {
                        window.localStorage.setItem('cart-button', '');
                        var xmethod = "CTAPop-Up|Viewcart";
                    } else {
                        xmethod = "CTAPop-Up|Continueshopping";
                    }
                    if (!!productInfo){
                        $.each(productInfo,function (i,itemInfo) {
                            itemInfo.xsellProdInfo =response.main_message;
                            itemInfo.xsellMethod=xmethod;
                            dataLayer.push({
                                'event': 'e_addToCart',
                                'offerID': offerId,
                                'ecommerce': {
                                    'currencyCode': dlCurrencyCode,
                                    'add': {
                                        'products':itemInfo
                                    }
                                }
                            })
                        });
                    }else{
                        dataLayer.push({
                            'event': 'e_addToCart',
                            'offerID': offerId,
                            'ecommerce': {
                                'currencyCode': dlCurrencyCode,
                                'add': {
                                    'products':response.dataLayerProducts
                                }
                            }
                        })
                    }
                    if (isBundleProduct && cartUrl) {
                        location.href = cartUrl;
                    }

                } else {
                    if (response.messages) {
                        alert({content: response.message});
                        // alert(response.messages);
                    } else {
                        alert({content: errorMsg});
                    }

                    return false;
                }

                closePopup(_this);
            },
            error: function (response) {
                $.ajaxSetup({showLoader: false});

                if (response.messages) {
                    alert(response.messages);
                }

                closePopup(_this);
            }
        });
    }

    /**
     * Collection dynamic count
     * @returns {string}
     */
    function getDynamicCartData() {
        var data = "",
            carePack = $("#product-care-option"),
            dynamicContainerItem = $(".catalog-product-popup .package2 .item .added-item.active");

        if (carePack.size() && carePack.val() !== "0") {
            data = carePack.val() + "|1";
        }

        if (dynamicContainerItem.length > 0) {
            dynamicContainerItem.each(function(key, item) {
                data += data === "" ? "" : ",";
                data += $(item).data("product-sku") + "|" + $(item).find(".input-text.qty").val();
            });
        }

        return data;
    }

    /**
     * get checked recommended product
     * @param _this
     * @returns {string}
     */
    function getRecommendedCartData(_this) {
        var data = "",
            cartItems = _this.parent().find('.recommended_add_to_cart:checked');
        if (cartItems.length > 0) {
            cartItems.each(function(key, item) {
                data += data === "" ? "" : ",";
                data += $(item).val() + "|1";
            });
        }
        return data;
    }

    function getCookie(cookieName) {
        var cookie = " " + document.cookie;
        var search = " " + cookieName + "=";
        var setStr = 'null';
        var offset = 0;
        var end = 0;
        if (cookie.length > 0) {
            offset = cookie.indexOf(search);
            if (offset !== -1) {
                offset += search.length;
                end = cookie.indexOf(";", offset);
                if (end === -1) {
                    end = cookie.length;
                }
                setStr = unescape(cookie.substring(offset, end));
            }
        }
        return (setStr);
    }

    function resetRecommendedAddToCart(_this) {
        _this.parent().find('.recommended_add_to_cart').attr('checked', false);
    }
});
</script>
<script type="text/x-magento-init">
    {
         "*": {
              "Magento_Catalog/js/feature-product": {}
         }
    }
</script>

    <div class="box-tocart similar-button">
        <span class="similar-label">Don't find what you're looking for?</span>
        <button type="button"
                title="View Similar Products"
                class="action tocart to-similar-product"
                id="oos-product-similar-button">View Similar Products</button>
    </div>
    <script type="text/x-magento-init">
    {
         "*": {
              "Magento_Catalog/js/similar-button": {}
         }
    }
    </script>

<div class="product-info-price"><div class="price-box price-final_price" data-role="priceBox" data-product-id="7651" data-price-box="product-id-7651">
    
<span class="price-container price-final_price tax weee" translate="no"
         itemprop="offers" itemscope itemtype="http://schema.org/Offer">
        <span  id="product-price-7651"                data-price-amount="24999000"
        data-price-type="finalPrice"
        class="price-wrapper "
    >        <span class="price">Rp 24.999.000</span>        </span>
    
                <meta itemprop="price" content="24999000" />
        <meta itemprop="priceCurrency" content="IDR" />
        <meta itemprop="availability" content="LimitedAvailability" />
    </span>

</div></div>
<div class="mrp discount mrp-discount">
    </div>
    <div class="msi-staging" style="margin-bottom:10px;">As little as <span class="price">Rp 2.083.250</span> per month – Interest Free, no Deposit –&nbsp;&nbsp;<a class="showplots" href="#">See repayments</a></div>    <div class="plots_pop" style="display:none;clear:both">
        <ul id="myTab">
                            <li class="tabli" data-target="other">OTHER</li>                        </ul>
        <div style="clear:both"></div>
        <!-- No new display method -->
                    <div class="tab-content">
                                    <div class="tab-pane" id="other">
                                                                        <p>
                            <select id="othersel" class="banknamesel">
                                                                    <option value="BCA">
                                        BCA                                    </option>
                                                                    <option value="BRI">
                                        BRI                                    </option>
                                                            </select>
                        </p>
                        <div class="table-flow">
                            <table class="showtable">
                                <thead>
                                <tr>
                                    <td>Total number of installments</td>
                                    <td>Approx amount per month</td>
                                                                            <td>Min</td>                                                                            <td>Max</td>                                </tr>
                                </thead>
                                                                    <tbody data-name="BCA"
                                           style="display:none;">
                                    <tr>
                                        <td>3</td>
                                        <td><span class="price">Rp 8.333.000</span></td>
                                                                                                                                    <td>
                                                    <span class="price">Rp 500.001</span>                                                </td>
                                                                                                                                        <td>
                                                    <span class="price">Rp 19.999.999</span>                                                </td>
                                                                                                                            </tr>
                                    </tbody>
                                                                    <tbody data-name="BRI"
                                           style="display:none;">
                                    <tr>
                                        <td>3</td>
                                        <td><span class="price">Rp 8.333.000</span></td>
                                                                                                                                    <td>
                                                    <span class="price">Rp 500.001</span>                                                </td>
                                                                                                                                        <td>
                                                    <span class="price">Rp 19.999.999</span>                                                </td>
                                                                                                                            </tr>
                                    </tbody>
                                                                    <tbody data-name="BCA"
                                           style="display:none;">
                                    <tr>
                                        <td>6</td>
                                        <td><span class="price">Rp 4.166.500</span></td>
                                                                                                                                    <td>
                                                    <span class="price">Rp 500.001</span>                                                </td>
                                                                                                                                        <td>
                                                    <span class="price">Rp 19.999.999</span>                                                </td>
                                                                                                                            </tr>
                                    </tbody>
                                                                    <tbody data-name="BRI"
                                           style="display:none;">
                                    <tr>
                                        <td>6</td>
                                        <td><span class="price">Rp 4.166.500</span></td>
                                                                                                                                    <td>
                                                    <span class="price">Rp 500.001</span>                                                </td>
                                                                                                                                        <td>
                                                    <span class="price">Rp 19.999.999</span>                                                </td>
                                                                                                                            </tr>
                                    </tbody>
                                                                    <tbody data-name="BCA"
                                           style="display:none;">
                                    <tr>
                                        <td>12</td>
                                        <td><span class="price">Rp 2.083.250</span></td>
                                                                                                                                    <td>
                                                    <span class="price">Rp 20.000.000</span>                                                </td>
                                                                                                                                        <td>
                                                    <span class="price">Rp 200.000.000</span>                                                </td>
                                                                                                                            </tr>
                                    </tbody>
                                                                    <tbody data-name="BRI"
                                           style="display:none;">
                                    <tr>
                                        <td>12</td>
                                        <td><span class="price">Rp 2.083.250</span></td>
                                                                                                                                    <td>
                                                    <span class="price">Rp 20.000.000</span>                                                </td>
                                                                                                                                        <td>
                                                    <span class="price">Rp 200.000.000</span>                                                </td>
                                                                                                                            </tr>
                                    </tbody>
                                                            </table>
                        </div>
                                            </div>
                            </div>
            </div>
    <div class="plots_pop_ts"></div>
<script>
    require([
        'jquery'
    ], function ($) {
        $(function () {
            // This one is only for cart page button
            var itemDetail = $('div .cart-container').find('.cart.item').find('.item-info:eq(0)')
                .find('.product-item-details').find('.showplots');
            if (itemDetail.length) {
                var sku = itemDetail.attr('data-sku');
                var partnerCount = itemDetail.attr('data-count');
                $.ajaxSetup({showLoader: true});
                $.ajax({
                    url: 'https://www.hp.com/id-en/shop/hpols_msi/product/emipop/',
                    type: "POST",
                    data: "isAjax=1&sku=" + sku + '&partnerCount=' + partnerCount,
                    dataType: 'json'
                }).done(function (result) {
                    if (result.error) {
                        $('.product-item-details').find('.showplots').hide();
                    }
                });
            }
        });
        var options = {
            title: 'Installment\u0020Options',
            type: 'popup',
            responsive: true,
            buttons: false,
            modalClass: 'catalog-product-plots_pop'
        };
        $(".showplots").unbind('click').click(function () {
            var sku = $(this).attr('data-sku');
            var partnerCount = $(this).attr('data-count');
            if ($('.plots_pop').length > 0 && $('.plots_pop').html().length > 0) {
                $('.plots_pop').modal(options).modal('openModal');
            } else {
                var url = 'https://www.hp.com/id-en/shop/hpols_msi/product/emipop/';
                $(".plots_pop_ts").load(url + '?sku=' + sku + '&partnerCount=' + partnerCount, function () {
                    $('.plots_pop').modal(options).modal('openModal');
                });
            }
        });
    })
</script>
<script>
    require([
        'jquery'
    ], function ($) {
        $(".tabli").click(function () {
            var rootNode = $(this).closest('.plots_pop');
            rootNode.find(".tabli").each(function () {
                $(this).removeClass('active');
            });
            $(this).addClass('active');
            var cardTypeSel = $('select').hasClass('cardtypesel');
            rootNode.find(".tab-pane").each(function () {
                $(this).removeClass('active');
                $(this).hide();
                if (cardTypeSel) {
                    $(".cardtypesel").change();
                } else {
                    $(".banknamesel").change();
                }
            });
            rootNode.find("#" + $(this).attr('data-target')).addClass('active').show();
        });
        $(".banknamesel").change(function () {
            var pardiv = $(this).closest('.tab-pane'), name = $(this).val(),
                cardTypeSel = $('select').hasClass('cardtypesel');
            var _type = pardiv.find('.cardtypesel').find('option:selected').val();
            if (pardiv[0].id == 'other' || !cardTypeSel) {
                pardiv.find(".showtable").find('tbody').each(function () {
                    if ($(this).attr('data-name') == name) {
                        $(this).show();
                    } else {
                        $(this).hide();
                    }
                });
            } else {
                pardiv.find(".showtable").find('tbody').each(function (i, dex) {
                    if ($(dex).attr('data-name') == name && $(dex).attr('data-type') == _type) {
                        $(dex).show();
                    } else {
                        $(dex).hide();
                    }
                });
            }
        });
        //change cart and bank name and table content
        $(".cardtypesel").change(function () {
            var pardiv = $(this).closest('.tab-pane'), type = $(this).val(), name = [];
            pardiv.find(".showtable").find('tbody').each(function () {
                if ($(this).attr('data-type') == type) {
                    $(this).show();
                    name.push($(this).attr('data-name'));
                } else {
                    $(this).hide();
                }
            });
            $(this).parents('tr').find(".banknamesel").find('option').each(function () {
                if ($.inArray($(this).val(), name) >= 0) {
                    $(this).show();
                    if ($(this).val() == name[0]) {
                        $(this).attr("selected", true);
                    }
                    $(this).change();
                } else {
                    $(this).hide();
                }
            });

            $(this).parents('tr').find(".banknamesel").empty();

            var banknamesel = $(this).parents('tr').find(".banknamesel");

            var optionsValues=[];

            $.each(name,function(optionsIndex){

                    if ($.inArray(name[optionsIndex], optionsValues) >= 0) {

                        return;

                    }

                    optionsValues.push(name[optionsIndex]);

                    banknamesel.append("<option value='"+name[optionsIndex]+"'>"+name[optionsIndex]+"</option>");

            });

            banknamesel.trigger("change");

        });
        $(function () {
            // init display tab
            var target = $('.plots_pop').find('#myTab').find('li:eq(0)');
            target.addClass('active');
            // init display tab pane
            $('.tab-content').find('.tab-pane:eq(0)').addClass('active');
            // init hide other tab
            if (target.data('target') == 'other' && target.hasClass('active')) {
                target.hide();
            }
            // init display table content
            var _bankName = $(".banknamesel").val(), cardTypeSel = $('select').hasClass('cardtypesel');
            if (cardTypeSel) {
                var _cardType = $(".cardtypesel").val();
            }
            $(".showtable").find('tbody').each(function () {
                if (cardTypeSel) {
                    if ($(this).attr('data-type') == _cardType && $(this).attr('data-name') == _bankName) {
                        $(this).show();
                        $(".cardtypesel").change();
                        $(".banknamesel").change();
                    }
                } else {
                    if ($(this).attr('data-name') == _bankName) {
                        $(this).show();
                    }
                }
            });
        });
    })
</script>
<div class="product-add-form simple">
<form data-role="simple-tocart-form"
      action="https://www.hp.com/id-en/shop/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuaHAuY29tL2lkLWVuL3Nob3Avb21lbi1ieS1ocC1sYXB0b3AtMTYtYzAwOTlheC00ODhmNHBhLmh0bWw%2C/product/7651/?___store=en"
      method="post" class="product_addtocart_form"
      id="product_addtocart_form"
            data-type="simple">

    <input type="hidden" name="product" value="7651" />
    <input type="hidden" name="selected_configurable_option" value="" />
    <input type="hidden" name="qty" value="1" />
    <input type="hidden" name="related_product" id="related-products-field" value="" />
    <input type="hidden" name="return_url" id="return_url" value="" />
        <!--    <input type="hidden" name="item"  value="--><!--"-->
    <input name="form_key" type="hidden" value="NsDEXqb9NdJjK3Qy" />                
                        <div class="box-tocart">
                <div class="fieldset">
                                            <div class="field qty">
                            <label class="label" for="qty"><span>Qty</span></label>
                            <div class="control">
                                <input type="number"
                                       name="qty"
                                       id="qty"
                                       maxlength="12"
                                       value="1"
                                       title="Qty" class="input-text qty"
                                       data-validate="{&quot;required-number&quot;:true,&quot;validate-item-quantity&quot;:{&quot;minAllowed&quot;:1,&quot;maxAllowed&quot;:10000}}"/>
                            </div>
                        </div>
                                        <div class="actions">
                                                    <button type="submit"
                                    title="Add to Cart"
                                    class="action primary tocart popup-addtocart-button simple"
                                    id="product-addtocart-button">
                            <span>Add to Cart</span>
                            </button>
                                                                        </div>
                </div>
            </div>
                            <div class="popup-noRelated-content" style="display: none">
                <div class="add-to-cart-popup-title">
                    OMEN by HP Gaming Laptop 16-c0099AX has been added to cart.                </div>
                <div class="recommended-product-popup">

                    <div class="selected-products-popup">
                        <div class="swiper-container">
                            <div class="selected-products-list swiper-wrapper">
                                <div class="added-item active swiper-slide">
                                    <a class="img" href="https://www.hp.com/id-en/shop/omen-by-hp-laptop-16-c0099ax-488f4pa.html" title="OMEN by HP Gaming Laptop 16-c0099AX" target="_blank">
                                        <img src="https://id-media.apjonlinecdn.com/catalog/product/cache/314dec89b3219941707ad62ccc90e585/2/1/21c1_omen_vanellope_16_60w_nonnumpad_4zone_lcd_micasilver_front_1.png"
                                             width="100" alt="OMEN by HP Gaming Laptop 16-c0099AX">
                                        <span class="name">OMEN by HP Gaming Laptop 16-c0099AX</span>
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-button-next"></div>
                        </div>
                        <div class="toolbar">
                            <button type="button"
                                    class="action primary continue-shopping simple-popup-continue-button popup"
                                    title="Continue Shopping">
                                <span>Continue Shopping</span>
                            </button>
                            <a href="https://www.hp.com/id-en/shop/checkout/cart/"
                               title="GO TO CART"
                               class="action primary goShopping">
                                <span>GO TO CART</span>
                            </a>
                        </div>
                    </div>

                </div>

            </div>
            <div class="simple-popup-main-content" style="display: none;">
                <div class="bundle-popup-main-included-gift">
                                        
                                            <div class="add-to-cart-popup-title">
                            OMEN by HP Gaming Laptop 16-c0099AX has been added to cart.                        </div>
                    
                                            <div class="bundle-popup-main">
                            <div class="bundle-popup-item simple-simple">
                                <a class="bundle-img">
                                    <img src="https://id-media.apjonlinecdn.com/catalog/product/cache/314dec89b3219941707ad62ccc90e585/2/1/21c1_omen_vanellope_16_60w_nonnumpad_4zone_lcd_micasilver_front_1.png"
                                         width="100"/>
                                </a>
                                <a class="bundle-name">OMEN by HP Gaming Laptop 16-c0099AX</a>
                                <div class="sort-description">
                                    Play yourself up                                </div>
                                                                    <div class="price-box price-final_price" data-role="priceBox" data-product-id="7651" data-price-box="product-id-7651">
    
<span class="price-container price-final_price tax weee" translate="no"
         itemprop="offers" itemscope itemtype="http://schema.org/Offer">
        <span  id="product-price-7651"                data-price-amount="24999000"
        data-price-type="finalPrice"
        class="price-wrapper "
    >        <span class="price">Rp 24.999.000</span>        </span>
    
                <meta itemprop="price" content="24999000" />
        <meta itemprop="priceCurrency" content="IDR" />
        <meta itemprop="availability" content="LimitedAvailability" />
    </span>

</div>                                                                                                </div>
                        </div>
                                                                <div class="recommended-product-popup">
                            <div class="selected-products-popup">
                                <div class="swiper-container">
                                    <div class="selected-products-list swiper-wrapper">
                                        <div class="added-item swiper-slide">
                                            <a class="img" href="https://www.hp.com/id-en/shop/omen-by-hp-laptop-16-c0099ax-488f4pa.html" title="OMEN by HP Gaming Laptop 16-c0099AX" target="_blank">
                                                <img src="https://id-media.apjonlinecdn.com/catalog/product/cache/314dec89b3219941707ad62ccc90e585/2/1/21c1_omen_vanellope_16_60w_nonnumpad_4zone_lcd_micasilver_front_1.png"
                                                     width="100" alt="OMEN by HP Gaming Laptop 16-c0099AX">
                                                <span class="name">OMEN by HP Gaming Laptop 16-c0099AX</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="selected-product-swiper-button-next"></div>
                                    <div class="selected-product-swiper-button-prev"></div>
                                </div>
                                <div class="toolbar">
                                    <button type="button"
                                            class="action primary continue-shopping simple-popup-continue-button popup"
                                            title="Continue Shopping">
                                        <span>Continue Shopping</span>
                                    </button>
                                    <button type="button"
                                            title="GO TO CART"
                                            class="action primary view-cart simple-popup-view-cart">
                                        <span>GO TO CART</span>
                                    </button>
                                </div>
                            </div>
                            
    <link type="text/css" rel="stylesheet"
          href="https://id-media.apjonlinecdn.com/static/version1640122770/frontend/HPOLS/stellar/en_AU/HPOLS_DynamicDiscount/css/dynamic-discount.min.css" />

    <div id="new-popup-recommended-products" class="product-dynamic-discount">
        <img src="https://id-media.apjonlinecdn.com/static/version1640122770/frontend/HPOLS/stellar/en_AU/images/loader-2.gif"
             alt="Loading...">
    </div>
    <script type="text/javascript">

        var dynamicDiscountArea = window.dynamicDiscountArea || [];

        
        var dynamicDiscountHtml = window.dynamicDiscountHtml || {};
        var productId = '7651';

        require([
            'jquery',
            'Magento_Catalog/js/price-utils'
        ], function ($, priceUtils) {
            function checkDynamicDiscount() {
                var i = dynamicDiscountArea.length;

                if (i > 0 && typeof(dynamicDiscountHtml[productId]) != 'undefined') {
                    while(i--){
                        $(dynamicDiscountArea[i]).html(dynamicDiscountHtml[productId]);
                        dynamicDiscountArea.splice(i,1);
                    }
                }
            }

            var productType = 'simple';
            var configurableProduct = 'configurable';
            $(document).ready(function () {
                var loadId = 'new-popup-recommended-products';
                if (typeof(dynamicDiscountHtml[productId]) != 'undefined') {
                    checkDynamicDiscount();
                } else {
                    $.ajaxSetup({showLoader: false, cache: false});
                    var url = "https://www.hp.com/id-en/shop/hpols_catalog/product/dynamicdiscount/pid/7651/";
                    $.get(url, function (data, status) {
                        if (loadId !== 'new-popup-recommended-products') {
                            dynamicDiscountHtml[productId] = data;
                        }
                        checkDynamicDiscount();
                    });

                    if (loadId === 'new-popup-recommended-products') {
                        var newUrl = "https://www.hp.com/id-en/shop/hpols_catalog/product/dynamicdiscount/pid/7651/addToCartType/newPopup/";
                        $.get(newUrl, function (data, status) {
                            $('#new-popup-recommended-products').html(data);
                        });
                    }

                    // Users select attributes if they are not loaded
                    if (productType === configurableProduct) {
                        var dataPrice = $('.product-add-form.configurable').attr('data-price');
                        if (dataPrice) {
                            var dynamicDiscountMainProductEl = $('.product-dynamic-discount .item.main-product');
                            var dynamicDiscountTotalEl = $('.product-dynamic-discount .product-total .total-price');
                            dynamicDiscountMainProductEl.attr('data-price', dataPrice);
                            dynamicDiscountTotalEl.attr('data-main-product-price', dataPrice);
                            dynamicDiscountTotalEl.attr('data-total-price', dataPrice);
                            dynamicDiscountTotalEl.text(priceUtils.formatPrice(dataPrice));
                        }
                    }
                }
            });

            /*checkDynamicDiscount();*/
        });
    </script>

            <script type="text/x-magento-init">
            {
                "*": {
                    "dynamicDiscountRecommended": {
                        "productCountLimit": "5",
                        "currentProductType": "simple",
                        "addRecommendProductToCartUrl": "https://www.hp.com/id-en/shop/dynamicdiscount/cart/add/",
                        "deleteRecommendProductFromCartUrl": "https://www.hp.com/id-en/shop/checkout/cart/delete/",
                        "configurable": "configurable",
                        "errorMsg": "We can't add those item to your shopping cart right now."
                    }
                }
            }
        </script>
                            </div>
                                    </div>
            </div>
        
            
    <script type="text/x-magento-init">
    {
        "#product_addtocart_form": {
            "Magento_Catalog/product/view/validation": {
                "radioCheckboxClosest": ".nested"
            }
        }
    }


    </script>
    <script>
        require(
            [
                'jquery',
                'HPOLS_Catalog/js/popup',
                'mage/translate'
            ], function ($, $p, $t) {
                var options = {
                    type: 'popup',
                    responsive: true,
                    innerScroll: true,
                    buttons: false,
                    modalClass: 'catalog-product-popup',

                };
                $('.simple-popup-view-cart').click(function () {
                    window.localStorage.setItem('cart-button', 'view_cart');
                });
                var addToCartButtonTextDefault = '\u003C\u0020Continue\u0020Shopping',
                    popupAddToCartBundleButton = $(".popup-addtocart-button.bundle");

                popupAddToCartBundleButton.unbind('click');
                popupAddToCartBundleButton.click(function (e) {
                    e.preventDefault();
                    var bundleOptionsContainerAddCartForm = $('.bundle-options-container .product-add-form'),
                        modalAddCartForm = $('.recommended-product-popup');

                    if (bundleOptionsContainerAddCartForm.length > 0) {
                        bundleOptionsContainerAddCartForm.modal(options).modal('openModal');
                    } else {
                        modalAddCartForm.modal(options).modal('openModal');
                    }

                    $p.bundleHtmlPopulate();
                    var addToCartButton = modalAddCartForm.find('.action.tocart');
                    addToCartButton.find('span').text(addToCartButtonTextDefault);
                    addToCartButton.attr('title', addToCartButtonTextDefault);
                });
            }
        );
    </script>
    
        
    
    </form>
</div>
<!-- For simple product, the submit events of the form will be bind times  -->
<script type="text/x-magento-init">
    {
        ".product_addtocart_form, .form.map.checkout": {
            "popupAddToCart": {
                "disablePopup": 0,
                "newVersionPopup": 1,
                "carePackAddToCartUrl": "https://www.hp.com/id-en/shop/dynamicdiscount/cart/add/"
            }
        }
    }
</script>
<script>
    require([
        'jquery',
        'priceBox'
    ], function($){
        var dataPriceBoxSelector = '[data-role=priceBox]',
            dataProductIdSelector = '[data-product-id=7651]',
            priceBoxes = $(dataPriceBoxSelector + dataProductIdSelector);

        priceBoxes = priceBoxes.filter(function(index, elem){
            return !$(elem).find('.price-from').length;
        });

        priceBoxes.priceBox({'priceConfig': {"productId":"7651","priceFormat":{"pattern":"Rp %s","precision":0,"requiredPrecision":0,"decimalSymbol":".","groupSymbol":".","groupLength":3,"integerRequired":false}}});
    });
</script>

<div id="oos-notify-register" style="display: none;">
    <div class="oos-notify-error-message mage-error"></div><br/>
    <h3>PRODUCT AVAILABILITY NOTICE</h3>
    <div class="oos-notify-form">
        <form class="oos-notify-register form oos-notify-register-form"
              id="oos-notify-register-form" autocomplete="off">
            <div class="field">
                <div class="field oos-notify-register-email _required">
                    <label class="label" for="oos_notify_email">
                        <span>Email</span>
                    </label>
                    <div class="control">
                        <input type="email" name="oos_notify_email" id="oos_notify_email"
                               value= ""
                               title= "Email"
                               class="input-text"
                               data-role="email"
                               data-validate="{required:true, 'validate-email':true}">
                    </div>
                </div>
                <div class="oos-notify-form-warned">
                    <strong class="control-label">
                        Please notify me as soon as new stock arrives</strong>
                    <div class="control-radio" >
                        <div class="radio">
                            <input type="radio"
                                   id="oos-notify-2-week"
                                   data-validate="{'validate-one-required-by-name':true}"
                                   name="oos-notify-register-radios" value="2" checked="checked">
                            <label for="oos-notify-2-week">
                                <span class="oss-notify-radio"></span>
                                <span>Within 2 weeks from today</span>
                            </label>
                        </div>
                        <div class="radio">
                            <input type="radio"
                                   id="oos-notify-4-week"
                                   data-validate="{'validate-one-required-by-name':true}"
                                   name="oos-notify-register-radios"
                                   value="4">
                            <label for="oos-notify-4-week">
                                <span class="oss-notify-radio"></span>
                                <span>Within 4 weeks from today</span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="oos-notify-form-attention">
                    <strong class="control-label">Disclaimer</strong>
                    <br/>
                    <span>Please note that this registration does not act as a product reservation.</span>
                </div>
            </div>
        </form>
    </div>
</div>
<script type="text/x-magento-init">
    {
        ".oos-notify-popupButton": {
            "Magento_Catalog/js/oos_notify_popup": {}
        }
    }
</script>
<script type="text/x-magento-init">
     {
         "*": {
              "HP_SPOS/js/anchor-tag": {
                 "cookie_path": "/id-en/shop",
                 "cookie_expiration": 604800,
                 "cookie_domain": "www.hp.com"
              }
         }
    }
</script>
<div class="additional-message ">
                            
    
    

    
    <div class="free-delivery-container">
        <div class="free-delivery-box">
            <span class="free-delivery">Free, Fast Delivery</span>
        </div>
    </div>
    <div class="line"></div>


    <div class="free-delivery-container">
        <div class="free-delivery-box">
            <span class="free-delivery">Price Match Guarantee - <a color: blue; href="https://www.hp.com/id-en/shop/hp-price-match">Learn More</a></span>
        </div>
    </div>
    <div class="line"></div>



    

    
    
    
    
    
        </div>
<style>
    [v-cloak] { display: none; }
</style>

        <div class="same-day-delivery" data-sku="488F4PA" style='display: none;'>
        <span class="same-day-delivery-available" title="Available for Same Day Delivery"></span>
        <span class="same-day-delivery-description">Same Day Delivery Available</span>
    </div>
<div id="product-deliver" class="checked has-postcode" v-cloak style="position: relative;">
            <div id="delivery-loader" data-role="delivery-loader" class="delivery-loader loading-mask" data-mage-init='{"checkoutLoader": {}}'
             style="position: absolute;display:none;">
            <div class="loader">
                <img src="https://id-media.apjonlinecdn.com/static/version1640122770/frontend/HPOLS/stellar/en_AU/images/loader-2.gif"
                     alt="Loading..."
                     style="position: absolute;">
            </div>
        </div>
        <div class="delivery-change">
            <div class="title standard-delivery selected" data-type="standard-delivery">
                <span>Delivery</span>
                <div class="product-status">
    <span class="product-available" title="In stock" data-stock="1"></span>
</div>            </div>
                                </div>
        <div class="enter-postcode">
            Please check shipping availability in your area by entering your postal code.        </div>
        <div class="deliver-box standard-delivery-box" data-bind="scope: 'pincodeCheck'">
            <div class="shipping-title">Shipping Availability</div>
            <div class="action-close" data-bind="event: {click: closePopup}"></div>
            <div class="input-action">
             <div class="field">
                 <label class="label" for="pincode">
                    <span>
                        Postal code                    </span>
                 </label>
                 <div class="control">
                     <i class="icon"></i>
                     <input type="text" class="checkPinCode"
                            data-bind="visible: showPinInput, value: inputPincode, valueUpdate: 'afterkeydown',
                           event: { keypress: keyEnter, focus: onfocus, blur: onBlur, mouseover: onMouseover, mouseout: onMouseout}"
                            name="pincode" />
                 </div>
             </div>
                <button class="primary checkCodeButton" data-bind="click: checkCode"><span data-bind="text: buttonName"></span></button>
                <input type="hidden" name="sku" value="488F4PA">
                <input type="hidden" name="attributeset" value="HP Home Laptop PCs">
                <input type="hidden" class="hidepinCode" data-bind="click: firstCheckCode">
            </div>
            <p data-bind="visible: unstockdays">
                <span data-bind="text: error,visible: error" class="error"></span>
                <span data-bind="visible: !error()"><span data-bind="text: pincode" style="margin-left: 5px;"></span></span>
            </p>
            <div data-bind="visible: stockdays" class="delivery-information">
                <div class="estimate">Delivery estimate to <span data-bind="text: pincode"></span> is:</div>
                <div class="delivery-days">
                    <!-- Get delivery business days -->
                                            <label class="in-stock-message-icon"></label>
                        <span class="stock stock-available" data-status="product-available" data-stock="In stock">
                        In stock                    </span>
                                        <span class="info" data-bind="text: stockdays"></span>
                </div>
                                    <div class="delivery-charge">Standard Delivery charge: Free</div>
                            </div>
            <div class="pdp same-day-delivery-box">
            </div>
            <div class="pdp next-day-delivery-box">
            </div>
        </div>
                    </div>
<div id="click_and_collect_popup" class="checked"></div>
<script type="text/javascript">
    var pincodeUrls = {
        checkUrl: "https://www.hp.com/id-en/shop/pincode/index/check/",
        clickAndCollectCheckUrl: "https://www.hp.com/id-en/shop/clickandcollect/index/check/"
    };
    var pincodeTrans = {
        invalidCode: "Please enter a valid post code"
    };
    var isProductAvailableForPickup = Boolean(0),
        checkPincodeUrl = 'https://www.hp.com/id-en/shop/pincode/index/getPincode/',
        isEnabledClickAndCollect = Boolean(0),
        isConfigurableProduct = Boolean(),
        checkPinCodeParam = {
            'sku': '488F4PA',
            'productId': '7651',
            'attributeset': 'HP Home Laptop PCs'
        };
    var isShowPointOfSaleContainer = Boolean(0);
    var googleMapIcon = "https://id-media.apjonlinecdn.com/static/version1640122770/frontend/HPOLS/stellar/en_AU/HPOLS_PointOfSale/images/map-icon.png";
</script>
<script type="text/x-magento-init">
{
    "*": {
        "Magento_Ui/js/core/app": {
            "components": {
                "pincodeCheck": {
                    "component": "Magento_Catalog/js/pincode"
                }
            }
        }
    }
}

</script>
<div class="product-social-links"><div class="product-addto-links" data-role="add-to-links">
    

<a href="#" data-post='{"action":"https:\/\/www.hp.com\/id-en\/shop\/catalog\/product_compare\/add\/","data":{"product":"7651","uenc":"aHR0cHM6Ly93d3cuaHAuY29tL2lkLWVuL3Nob3Avb21lbi1ieS1ocC1sYXB0b3AtMTYtYzAwOTlheC00ODhmNHBhLmh0bWw,"}}'
    data-role="compare-product"
    class="action tocompare "
    data-product-id="7651"
    data-category-url-key="laptops"
    data-mage-init='{"checkComparedProduct":{}}'>
    <span>Add to Compare</span>
</a>
<span class="sku">488F4PA</span>
</div>
</div>
    <div class="product attribute overview">
                <div class="value "  itemprop="description">
                            Play yourself up                    </div>
    </div>
</div><div class="product media"><a id="gallery-prev-area" tabindex="-1"></a>
<div class="action-skip-wrapper"><a class="action skip gallery-next-area"
   href="#gallery-next-area">
    <span>
        Skip to the end of the images gallery    </span>
</a>
</div><div class="page-title-wrapper&#x20;product">
    <h1 class="page-title"
                >
        <span class="base" data-ui-id="page-title-wrapper" itemprop="name">OMEN by HP Gaming Laptop 16-c0099AX</span>    </h1>
    </div>
<script type="text/x-magento-init">
    {
        "[data-gallery-role=gallery-placeholder]": {
            "Magento_ProductVideo/js/fotorama-add-video-events": {
                "videoData": [{"mediaType":"image","videoUrl":null,"isBase":true},{"mediaType":"image","videoUrl":null,"isBase":false},{"mediaType":"image","videoUrl":null,"isBase":false},{"mediaType":"image","videoUrl":null,"isBase":false},{"mediaType":"image","videoUrl":null,"isBase":false},{"mediaType":"image","videoUrl":null,"isBase":false},{"mediaType":"image","videoUrl":null,"isBase":false},{"mediaType":"image","videoUrl":null,"isBase":false},{"mediaType":"image","videoUrl":null,"isBase":false},{"mediaType":"image","videoUrl":null,"isBase":false},{"mediaType":"image","videoUrl":null,"isBase":false}],
                "videoSettings": [{"playIfBase":"0","showRelated":"0","videoAutoRestart":"0"}],
                "optionsVideoData": []            }
        }
    }
</script>
<div class="action-skip-wrapper"><a class="action skip gallery-prev-area"
   href="#gallery-prev-area">
    <span>
        Skip to the beginning of the images gallery    </span>
</a>
</div><a id="gallery-next-area" tabindex="-1"></a>
<div class="promotion-message-media-gallery"><div class="gallery-promotions-icons-box">
    

    
    
                <div class="promotion-discount-tags">
                                        
        <!-- Refactor promotion icons tag -->
                
                New Launch            </div>
                
    </div>
<script type="text/x-magento-init">
    {
         "*": {
              "HPOLS_Catalog/js/view/promotion_discounts": {}
         }
    }
</script>
</div>
<div class="gallery-placeholder _block-content-loading" data-gallery-role="gallery-placeholder">
    <div data-role="loader" class="loading-mask">
        <div class="loader">
            <img class="disable-lazyload" src="https://id-media.apjonlinecdn.com/catalog/product/cache/b3b166914d87ce343d4dc5ec5117b502/2/1/21c1_omen_vanellope_16_60w_nonnumpad_4zone_lcd_micasilver_front_1.png"
                 alt="OMEN by HP Gaming Laptop 16-c0099AX">
        </div>
    </div>
</div>
<noscript>
    <style>
        @media (max-width: 768px) {
            .gallery-placeholder .loading-mask {
                height: calc(70vw);
                width: 50vw;
            }
        }
        @media (min-width: 768px) and (max-width: 1280px){
            .gallery-placeholder .loading-mask {
                height: calc(38vw);
                width: 50vw;
            }
            .gallery-placeholder .loader img {
                max-width: 93%;
            }
        }
        @media (min-width: 1280px){
            .gallery-placeholder .loading-mask {
                height: 490px;
                width: 50vw;
            }
            .gallery-placeholder .loader img {
                max-width: 93%;
            }
        }
    </style>
</noscript>
<!--Fix for jumping content. Loader must be the same size as gallery.-->
<script>
    var config = {
            "width": 700,
            "thumbheight": 82,
            "navtype": "slides",
            "height": 560        },
        thumbBarHeight = 0,
        loader = document.querySelectorAll('[data-gallery-role="gallery-placeholder"] [data-role="loader"]')[0];
    if (config.navtype === 'horizontal') {
        thumbBarHeight = config.thumbheight;
    }
    loader.style.paddingBottom = ( config.height / config.width * 100) + "%";
</script>
<script type="text/x-magento-init">
    {
        "[data-gallery-role=gallery-placeholder]": {
            "mage/gallery/gallery": {
                "mixins":["magnifier/magnify"],
                "magnifierOpts": {"fullscreenzoom":"20","top":"","left":"","width":"","height":"","eventType":"hover","enabled":false,"right":""},
                "data": [{"thumb":"https:\/\/id-media.apjonlinecdn.com\/catalog\/product\/cache\/74c1057f7991b4edb2bc7bdaa94de933\/2\/1\/21c1_omen_vanellope_16_60w_nonnumpad_4zone_lcd_micasilver_front_1.png","img":"https:\/\/id-media.apjonlinecdn.com\/catalog\/product\/cache\/b3b166914d87ce343d4dc5ec5117b502\/2\/1\/21c1_omen_vanellope_16_60w_nonnumpad_4zone_lcd_micasilver_front_1.png","full":"https:\/\/id-media.apjonlinecdn.com\/catalog\/product\/cache\/74c1057f7991b4edb2bc7bdaa94de933\/2\/1\/21c1_omen_vanellope_16_60w_nonnumpad_4zone_lcd_micasilver_front_1.png","caption":"OMEN by HP Gaming Laptop 16-c0099AX","position":"6","isMain":true,"type":"image","videoUrl":null},{"thumb":"https:\/\/id-media.apjonlinecdn.com\/catalog\/product\/cache\/74c1057f7991b4edb2bc7bdaa94de933\/2\/1\/21c1_omen_vanellope_16_60w_nonnumpad_4zone_lcd_micasilver_frontleft_1.png","img":"https:\/\/id-media.apjonlinecdn.com\/catalog\/product\/cache\/b3b166914d87ce343d4dc5ec5117b502\/2\/1\/21c1_omen_vanellope_16_60w_nonnumpad_4zone_lcd_micasilver_frontleft_1.png","full":"https:\/\/id-media.apjonlinecdn.com\/catalog\/product\/cache\/74c1057f7991b4edb2bc7bdaa94de933\/2\/1\/21c1_omen_vanellope_16_60w_nonnumpad_4zone_lcd_micasilver_frontleft_1.png","caption":"OMEN by HP Gaming Laptop 16-c0099AX","position":"7","isMain":false,"type":"image","videoUrl":null},{"thumb":"https:\/\/id-media.apjonlinecdn.com\/catalog\/product\/cache\/74c1057f7991b4edb2bc7bdaa94de933\/2\/1\/21c1_omen_vanellope_16_60w_nonnumpad_4zone_lcd_micasilver_frontright_1.png","img":"https:\/\/id-media.apjonlinecdn.com\/catalog\/product\/cache\/b3b166914d87ce343d4dc5ec5117b502\/2\/1\/21c1_omen_vanellope_16_60w_nonnumpad_4zone_lcd_micasilver_frontright_1.png","full":"https:\/\/id-media.apjonlinecdn.com\/catalog\/product\/cache\/74c1057f7991b4edb2bc7bdaa94de933\/2\/1\/21c1_omen_vanellope_16_60w_nonnumpad_4zone_lcd_micasilver_frontright_1.png","caption":"OMEN by HP Gaming Laptop 16-c0099AX","position":"8","isMain":false,"type":"image","videoUrl":null},{"thumb":"https:\/\/id-media.apjonlinecdn.com\/catalog\/product\/cache\/74c1057f7991b4edb2bc7bdaa94de933\/v\/a\/vanellope_21c1-4_1.png","img":"https:\/\/id-media.apjonlinecdn.com\/catalog\/product\/cache\/b3b166914d87ce343d4dc5ec5117b502\/v\/a\/vanellope_21c1-4_1.png","full":"https:\/\/id-media.apjonlinecdn.com\/catalog\/product\/cache\/74c1057f7991b4edb2bc7bdaa94de933\/v\/a\/vanellope_21c1-4_1.png","caption":"OMEN by HP Gaming Laptop 16-c0099AX","position":"9","isMain":false,"type":"image","videoUrl":null},{"thumb":"https:\/\/id-media.apjonlinecdn.com\/catalog\/product\/cache\/74c1057f7991b4edb2bc7bdaa94de933\/v\/a\/vanellope_21c1-5_1.png","img":"https:\/\/id-media.apjonlinecdn.com\/catalog\/product\/cache\/b3b166914d87ce343d4dc5ec5117b502\/v\/a\/vanellope_21c1-5_1.png","full":"https:\/\/id-media.apjonlinecdn.com\/catalog\/product\/cache\/74c1057f7991b4edb2bc7bdaa94de933\/v\/a\/vanellope_21c1-5_1.png","caption":"OMEN by HP Gaming Laptop 16-c0099AX","position":"10","isMain":false,"type":"image","videoUrl":null},{"thumb":"https:\/\/id-media.apjonlinecdn.com\/catalog\/product\/cache\/74c1057f7991b4edb2bc7bdaa94de933\/v\/a\/vanellope_21c1-6_1.png","img":"https:\/\/id-media.apjonlinecdn.com\/catalog\/product\/cache\/b3b166914d87ce343d4dc5ec5117b502\/v\/a\/vanellope_21c1-6_1.png","full":"https:\/\/id-media.apjonlinecdn.com\/catalog\/product\/cache\/74c1057f7991b4edb2bc7bdaa94de933\/v\/a\/vanellope_21c1-6_1.png","caption":"OMEN by HP Gaming Laptop 16-c0099AX","position":"11","isMain":false,"type":"image","videoUrl":null},{"thumb":"https:\/\/id-media.apjonlinecdn.com\/catalog\/product\/cache\/74c1057f7991b4edb2bc7bdaa94de933\/p\/r\/presenter_thumbnail_omen_vanellope_16_1.png","img":"https:\/\/id-media.apjonlinecdn.com\/catalog\/product\/cache\/b3b166914d87ce343d4dc5ec5117b502\/p\/r\/presenter_thumbnail_omen_vanellope_16_1.png","full":"https:\/\/id-media.apjonlinecdn.com\/catalog\/product\/cache\/74c1057f7991b4edb2bc7bdaa94de933\/p\/r\/presenter_thumbnail_omen_vanellope_16_1.png","caption":"OMEN by HP Gaming Laptop 16-c0099AX","position":"12","isMain":false,"type":"image","videoUrl":null},{"thumb":"https:\/\/id-media.apjonlinecdn.com\/catalog\/product\/cache\/74c1057f7991b4edb2bc7bdaa94de933\/s\/i\/size_thumbnail_omen_vanellope_16_1.png","img":"https:\/\/id-media.apjonlinecdn.com\/catalog\/product\/cache\/b3b166914d87ce343d4dc5ec5117b502\/s\/i\/size_thumbnail_omen_vanellope_16_1.png","full":"https:\/\/id-media.apjonlinecdn.com\/catalog\/product\/cache\/74c1057f7991b4edb2bc7bdaa94de933\/s\/i\/size_thumbnail_omen_vanellope_16_1.png","caption":"OMEN by HP Gaming Laptop 16-c0099AX","position":"13","isMain":false,"type":"image","videoUrl":null},{"thumb":"https:\/\/id-media.apjonlinecdn.com\/catalog\/product\/cache\/74c1057f7991b4edb2bc7bdaa94de933\/p\/o\/ports_thumbnail_omen_vanellope_16_1.png","img":"https:\/\/id-media.apjonlinecdn.com\/catalog\/product\/cache\/b3b166914d87ce343d4dc5ec5117b502\/p\/o\/ports_thumbnail_omen_vanellope_16_1.png","full":"https:\/\/id-media.apjonlinecdn.com\/catalog\/product\/cache\/74c1057f7991b4edb2bc7bdaa94de933\/p\/o\/ports_thumbnail_omen_vanellope_16_1.png","caption":"OMEN by HP Gaming Laptop 16-c0099AX","position":"14","isMain":false,"type":"image","videoUrl":null},{"thumb":"https:\/\/id-media.apjonlinecdn.com\/catalog\/product\/cache\/74c1057f7991b4edb2bc7bdaa94de933\/2\/1\/21c1_amd_omen_vanellope_metal_micasilver_win10_hd_cam_lifestyle-_3__1.jpg","img":"https:\/\/id-media.apjonlinecdn.com\/catalog\/product\/cache\/b3b166914d87ce343d4dc5ec5117b502\/2\/1\/21c1_amd_omen_vanellope_metal_micasilver_win10_hd_cam_lifestyle-_3__1.jpg","full":"https:\/\/id-media.apjonlinecdn.com\/catalog\/product\/cache\/74c1057f7991b4edb2bc7bdaa94de933\/2\/1\/21c1_amd_omen_vanellope_metal_micasilver_win10_hd_cam_lifestyle-_3__1.jpg","caption":"OMEN by HP Gaming Laptop 16-c0099AX","position":"15","isMain":false,"type":"image","videoUrl":null},{"thumb":"https:\/\/id-media.apjonlinecdn.com\/catalog\/product\/cache\/74c1057f7991b4edb2bc7bdaa94de933\/2\/1\/21c1_vanellope_featuregroup1_1.jpg","img":"https:\/\/id-media.apjonlinecdn.com\/catalog\/product\/cache\/b3b166914d87ce343d4dc5ec5117b502\/2\/1\/21c1_vanellope_featuregroup1_1.jpg","full":"https:\/\/id-media.apjonlinecdn.com\/catalog\/product\/cache\/74c1057f7991b4edb2bc7bdaa94de933\/2\/1\/21c1_vanellope_featuregroup1_1.jpg","caption":"OMEN by HP Gaming Laptop 16-c0099AX","position":"16","isMain":false,"type":"image","videoUrl":null}],
                "options": {
                    "nav": "dots",
                                            "loop": 1,
                                                                "keyboard": 1,
                                                                "arrows": 1,
                                                                "allowfullscreen": 1,
                                                            "width": "700",
                    "thumbwidth": "88",
                                            "thumbheight": 82,
                                                                "height": 560,
                                                                "transitionduration": 500,
                                        "transition": "slide",
                                            "navarrows": 1,
                                        "navtype": "slides",
                    "navdir": "vertical"
                },
                "fullscreen": {
                    "nav": "thumbs",
                                            "loop": 1,
                                        "navdir": "vertical",
                                        "navtype": "slides",
                                            "arrows": 1,
                                                                                    "transitionduration": 500,
                                        "transition": "slide"
                },
                "breakpoints": {"mobile":{"conditions":{"max-width":"767px"},"options":{"options":{"nav":"dots"}}}}            }
        }
    }
</script>

<script type="text/x-magento-init">
    {
        "*": {
              "Magento_Catalog/js/gallery": {}
         }
    }
</script>
    <div class="promotion-message">
        <div class="title">Special offers</div>
                        <div class="content product-7651">
                                      </div>
                    <div class="option">
            <a class="learn-more product-infor-promotion-message" href="javascript:;">
                Learn More            </a>
        </div>
    </div>

<script type="text/x-magento-init">
    {
         "*": {
                "Magento_Catalog/js/promotiomMessage": {}
         }
    }
</script>
</div>
    <div class="product-main-banner">
        <div data-content-type="row" data-appearance="full-bleed" data-enable-parallax="0" data-parallax-speed="0.5" data-background-images="{}" data-video-fallback-src="" data-element="main" style="justify-content: flex-start; display: flex; flex-direction: column; background-position: left top; background-size: cover; background-repeat: no-repeat; background-attachment: scroll; border-style: none; border-width: 0px; border-radius: 0px; margin: 0px; padding: 0px;"><div data-content-type="text" data-appearance="default" data-element="main" style="border-style: none; border-width: 0px; border-radius: 0px; margin: 0px; padding: 0px;"><style><!--
[lang="en-id"] form .simple-popup-main-content .bundle-popup-main-included-gift #new-popup-recommended-products.product-dynamic-discount .product.actions.product-item-actions>label>span {
     font-size: 16px;
}
@media only screen and (min-width: 768px) {
	.product.detailed .product.items>.item.title>.switch {
		box-sizing: border-box !important;
	}
}
--></style>
<style><!--
.win10ads {
display: block;
float: right;
padding: 15px 0px 15px 15px;
}
--></style>
<div><!-- Windows Banner Start --> <!--div class="win10ads">        <div class="ad-adbutler" id="ad-adbutler-iRx5hIAj"></div>

    <script type="text/x-magento-init">
    {
        "*": {
            "HPOLS_Widget/js/adbulter": {"url":"https:\/\/servedbyadbutler.com\/adserve\/;ID=169583;size=182x22;setID=424392;type=json;click=CLICK_MACRO_PLACEHOLDER","adPlacementId":"ad-adbutler-iRx5hIAj","adHtml":"","keyWords":"websiteCode-base"}        }
    }
</script>
</div--> <!-- Windows Banner End --> <!-- PDP Top Banner [async] -->
<script>// <![CDATA[
if (!window.AdButler){(function(){var s = document.createElement("script"); s.async = true; s.type = "text/javascript";s.src = 'https://servedbyadbutler.com/app.js';var n = document.getElementsByTagName("script")[0]; n.parentNode.insertBefore(s, n);}());}
// ]]></script>
<script>// <![CDATA[
var AdButler = AdButler || {}; AdButler.ads = AdButler.ads || [];
var abkw = window.abkw || '';
var plc275726 = window.plc275726 || 0;
document.write('<'+'div id="placement_275726_'+plc275726+'"><\/'+'div>');
AdButler.ads.push({handler: function(opt){ AdButler.register(169583, 275726, [496,90], 'placement_275726_'+opt.place, opt); }, opt: { place: plc275726++, keywords: abkw, domain: 'servedbyadbutler.com', click:'CLICK_MACRO_PLACEHOLDER' }});
// ]]></script>
</div></div></div>    </div>
</div><div class="product-info-tabs"><div class="product-info-tabs-div" style="display: none">
    <div class="product-info-tabs-name">
        OMEN by HP Gaming Laptop 16-c0099AX    </div>
    <div class="button-and-price">
        <div class="product-info-tabs-price">
                                            <div class="price-box price-final_price" data-role="priceBox" data-product-id="7651" data-price-box="product-id-7651">
    
<span class="price-container price-final_price tax weee" translate="no"
         itemprop="offers" itemscope itemtype="http://schema.org/Offer">
        <span  id="product-price-7651"                data-price-amount="24999000"
        data-price-type="finalPrice"
        class="price-wrapper "
    >        <span class="price">Rp 24.999.000</span>        </span>
    
                <meta itemprop="price" content="24999000" />
        <meta itemprop="priceCurrency" content="IDR" />
        <meta itemprop="availability" content="LimitedAvailability" />
    </span>

</div>                    </div>
                    <div class="product-add-form-tab">
                <button type="button"
                        title="Add to Cart"
                        class="action primary tabs-addtocart"
                        id="product-tabs-addtocart-button">
                    <span>Add to Cart</span>
                </button>
            </div>
            </div>
</div>
<script>
    require([
        'jquery'
    ], function ($){
        //out of stock;notify me;Reserve;Pre-Order Now;Add to Cart
        // $('#product-tabs-addtocart-button').click(function(){
        //     $('#product-addtocart-button').trigger(`click`);
        // })
        $('#product-notify-to-me').click(function(){
            $('.pdp.action.oos-notify-popupButton').trigger(`click`);
        })
    })
</script>
</div><input name="form_key" type="hidden" value="NsDEXqb9NdJjK3Qy" /><script type="text/x-magento-init">
    {
        "*": {
            "Magento_Customer/js/section-config": {
                "sections": {"stores\/store\/switch":["*"],"stores\/store\/switchrequest":["*"],"directory\/currency\/switch":["*"],"*":["messages"],"customer\/account\/logout":["*","recently_viewed_product","recently_compared_product","persistent"],"customer\/account\/loginpost":["*"],"customer\/account\/createpost":["*"],"customer\/account\/editpost":["*"],"customer\/ajax\/login":["checkout-data","cart","captcha"],"catalog\/product_compare\/add":["compare-products"],"catalog\/product_compare\/remove":["compare-products"],"catalog\/product_compare\/clear":["compare-products"],"sales\/guest\/reorder":["cart"],"sales\/order\/reorder":["cart"],"checkout\/cart\/add":["cart","directory-data"],"checkout\/cart\/delete":["cart"],"checkout\/cart\/updatepost":["cart"],"checkout\/cart\/updateitemoptions":["cart"],"checkout\/cart\/couponpost":["cart"],"checkout\/cart\/estimatepost":["cart"],"checkout\/cart\/estimateupdatepost":["cart"],"checkout\/onepage\/saveorder":["cart","checkout-data","last-ordered-items"],"checkout\/sidebar\/removeitem":["cart"],"checkout\/sidebar\/updateitemqty":["cart"],"rest\/*\/v1\/carts\/*\/payment-information":["cart","last-ordered-items","instant-purchase","osc-data"],"rest\/*\/v1\/guest-carts\/*\/payment-information":["cart","osc-data"],"rest\/*\/v1\/guest-carts\/*\/selected-payment-method":["cart","checkout-data","osc-data"],"rest\/*\/v1\/carts\/*\/selected-payment-method":["cart","checkout-data","instant-purchase","osc-data"],"authorizenet\/directpost_payment\/place":["cart","checkout-data"],"wishlist\/index\/add":["wishlist"],"wishlist\/index\/remove":["wishlist"],"wishlist\/index\/updateitemoptions":["wishlist"],"wishlist\/index\/update":["wishlist"],"wishlist\/index\/cart":["wishlist","cart"],"wishlist\/index\/fromcart":["wishlist","cart"],"wishlist\/index\/allcart":["wishlist","cart"],"wishlist\/shared\/allcart":["wishlist","cart"],"wishlist\/shared\/cart":["cart"],"customer_order\/cart\/updatefaileditemoptions":["cart"],"checkout\/cart\/updatefaileditemoptions":["cart"],"customer_order\/cart\/advancedadd":["cart"],"checkout\/cart\/advancedadd":["cart"],"checkout\/cart\/removeallfailed":["cart"],"customer_order\/cart\/addfaileditems":["cart"],"checkout\/cart\/addfaileditems":["cart"],"customer_order\/sku\/uploadfile":["cart"],"multishipping\/checkout\/overviewpost":["cart"],"giftregistry\/index\/cart":["cart"],"giftregistry\/view\/addtocart":["cart"],"paypal\/express\/placeorder":["cart","checkout-data"],"paypal\/payflowexpress\/placeorder":["cart","checkout-data"],"paypal\/express\/onauthorization":["cart","checkout-data"],"customer\/address\/*":["instant-purchase"],"customer\/account\/*":["instant-purchase"],"vault\/cards\/deleteaction":["instant-purchase"],"wishlist\/index\/copyitem":["wishlist"],"wishlist\/index\/copyitems":["wishlist"],"wishlist\/index\/deletewishlist":["wishlist","multiplewishlist"],"wishlist\/index\/createwishlist":["multiplewishlist"],"wishlist\/index\/editwishlist":["multiplewishlist"],"wishlist\/index\/moveitem":["wishlist"],"wishlist\/index\/moveitems":["wishlist"],"wishlist\/search\/addtocart":["cart","wishlist"],"braintree\/paypal\/placeorder":["cart","checkout-data"],"persistent\/index\/unsetcookie":["persistent"],"review\/product\/post":["review"],"rest\/*\/v1\/carts\/*\/update-item":["cart","checkout-data"],"rest\/*\/v1\/guest-carts\/*\/update-item":["cart","checkout-data"],"rest\/*\/v1\/guest-carts\/*\/remove-item":["cart","checkout-data"],"rest\/*\/v1\/carts\/*\/remove-item":["cart","checkout-data"],"hpols_catalog\/product_compare\/removeall":["compare-products"],"orderhistory\/cart\/add":["cart"],"dynamicdiscount\/cart\/add":["cart"],"hawkproxy\/index\/index":["multiplewishlist","requisition"]},
                "clientSideSections": ["checkout-data","cart-data","chatData","osc-data"],
                "baseUrls": ["https:\/\/www.hp.com\/id-en\/shop\/"],
                "sectionNames": ["messages","customer","compare-products","last-ordered-items","cart","directory-data","captcha","wishlist","instant-purchase","multiplewishlist","persistent","review","chatData","welcome-banner","recently_viewed_product","recently_compared_product","product_data_storage","paypal-billing-agreement"]            }
        }
    }
</script>
<script type="text/x-magento-init">
    {
        "*": {
            "Magento_Customer/js/customer-data": {
                "sectionLoadUrl": "https\u003A\u002F\u002Fwww.hp.com\u002Fid\u002Den\u002Fshop\u002Fcustomer\u002Fsection\u002Fload\u002F",
                "expirableSectionLifetime": 60,
                "expirableSectionNames": ["cart","persistent"],
                "cookieLifeTime": "86400",
                "updateSessionUrl": "https\u003A\u002F\u002Fwww.hp.com\u002Fid\u002Den\u002Fshop\u002Fcustomer\u002Faccount\u002FupdateSession\u002F"
            }
        }
    }
</script>
<script type="text/x-magento-init">
    {
        "*": {
            "Magento_Customer/js/invalidation-processor": {
                "invalidationRules": {
                    "website-rule": {
                        "Magento_Customer/js/invalidation-rules/website-rule": {
                            "scopeConfig": {
                                "websiteId": "1"
                            }
                        }
                    }
                }
            }
        }
    }
</script>
<script type="text/x-magento-init">
    {
        "body": {
            "pageCache": {"url":"https:\/\/www.hp.com\/id-en\/shop\/page_cache\/block\/render\/id\/7651\/","handles":["default","catalog_product_view","catalog_product_view_type_simple","catalog_product_view_id_7651","catalog_product_view_sku_488F4PA","product_filter_init","product_filter_toolbar","hawksearch_product_filter_init"],"originalRequest":{"route":"catalog","controller":"product","action":"view","uri":"\/id-en\/shop\/omen-by-hp-laptop-16-c0099ax-488f4pa.html"},"versionCookieName":"private_content_version"}        }
    }
</script>
<script type="text/x-magento-init">
{
    "*": {
        "Magento_Banner/js/model/banner":
            {"sectionLoadUrl":"https:\/\/www.hp.com\/id-en\/shop\/banner\/ajax\/load\/","cacheTtl":30000}        }
}
</script>
<div data-mage-init='{"feedReport":[]}'></div>    <div class="product info detailed">
                <div class="product-data-items" data-mage-init='{"productTabs":{}}'>
            <div class="product-data-titles" id="product-data-titles">
                                                        <div class="data item title " data-content-id="overview">
                        <span class="data switch"  data-content-id="overview">
                            Overview                        </span>
                        <span></span>
                    </div>
                                                                            <div class="data item title " data-content-id="additional">
                        <span class="data switch"  data-content-id="additional">
                            Specifications                        </span>
                        <span></span>
                    </div>
                                                        <div class="data item title " data-content-id="product.tab.offer">
                        <span class="data switch"  data-content-id="product.tab.offer">
                            Special Offer                        </span>
                        <span></span>
                    </div>
                                                        <div class="data item title " data-content-id="bv_reviews">
                        <span class="data switch"  data-content-id="bv_reviews">
                            Reviews                        </span>
                        <span></span>
                    </div>
                                                        <div class="data item title " data-content-id="product.view.tab.related.links">
                        <span class="data switch"  data-content-id="product.view.tab.related.links">
                            Recommended Products                        </span>
                        <span></span>
                    </div>
                                                        <div class="data item title " data-content-id="product.view.tab.ask.question">
                        <span class="data switch"  data-content-id="product.view.tab.ask.question">
                            Ask a Question                        </span>
                        <span></span>
                    </div>
                            </div>
            <div class="product-data-contents">
                                                    <div class="data item content" id="overview">
                    <div class="overview">
    <div class="form-title overview-title">
        <h2>Overview</h2>
    </div>
    <div class="overview-content">
            <div id="selling">
            <div class="block widget block-container block-key-selling-points">
                <div class="block-content">
                    <p>Go beyond with the OMEN by HP 16.1 inch Gaming Laptop. Powered by an AMD processor[1] and mighty graphics, play at your best from anywhere. Expand your gaming world with sharper and smoother visual experiences courtesy of a high resolution and a fast refresh rate display. Stay cool under pressure with OMEN Tempest Cooling Technology[2] that prevents overheating even when your game heats up.</p><h4>Stay cool under pressure</h4><p>With 3-sided venting and 5-way airflow, OMEN Tempest Cooling Technology[2] prevents overheating even when your game heats up.</p><h4>Fast refresh rate during gaming</h4><p>Play at your best with tear-free gameplay at a fast refresh rate and eliminate screen flickering with HP Flicker-free.[3]</p><h4>Customize with OMEN Gaming Hub</h4><p>Your one-stop shop to elevate gameplay, from controlling every little performance to lighting options and more.</p>                </div>
            </div>
        </div>
                    <div class="block widget block-container block-description">
            <!--<div class="block-title">
                <strong></strong>
            </div>-->
            <div class="block-content">
                <div data-content-type="row" data-appearance="contained" data-element="main"><div data-enable-parallax="0" data-parallax-speed="0.5" data-background-images="{}" data-background-type="image" data-video-loop="true" data-video-play-only-visible="true" data-video-lazy-load="true" data-video-fallback-src="" data-element="inner" style="justify-content: flex-start; display: flex; flex-direction: column; background-position: left top; background-size: cover; background-repeat: no-repeat; background-attachment: scroll; border-style: none; border-width: 1px; border-radius: 0px; margin: 0px 0px 10px; padding: 10px;"><div data-content-type="text" data-appearance="default" data-element="main" style="border-style: none; border-width: 1px; border-radius: 0px; margin: 0px; padding: 0px;"><link href="https://id-files.apjonlinecdn.com/landingpages/generic/css/grid/grid-v4.css" rel="stylesheet">
<style>
    @font-face {
        font-family: Gothambold;
        font-style: normal;
        font-weight: 700;
        src: url(https://id-files.apjonlinecdn.com/landingpages/npi/hp-omen-16-laptop/rich-content/fonts/GothamBold.ttf) format("truetype")
    }
    
    @font-face {
        font-family: Gothammedium;
        font-style: normal;
        font-weight: 700;
        src: url(https://id-files.apjonlinecdn.com/landingpages/npi/hp-omen-16-laptop/rich-content/fonts/GothamMedium.ttf) format("truetype")
    }
    
    @font-face {
        font-family: Gothambook;
        font-style: normal;
        font-weight: 700;
        src: url(https://id-files.apjonlinecdn.com/landingpages/npi/hp-omen-16-laptop/rich-content/fonts/gothambook.otf) format("truetype")
    }
    
    .customize .customize-product .customize-product-item-link {
        color: #000000;
    }
    
    .block-content>div>div {
        padding: 0px !important;
    }
    
    sup {
        top: -.5em !important;
        font-size: 55%;
        color: inherit;
        position: relative;
        vertical-align: middle;
    }
    
    .main-section {
        background-color: #FFFFFF;
    }
    
    .main-wrapper {
        width: 100%;
        max-width: 1000px;
        margin: 0 auto;
    }
    
    .main-wrapper .row {
        margin-right: 0px;
        margin-left: 0px;
    }
    
    .pdp-title {
        font-size: 3.229vw;
        font-weight: 500;
        font-family: "Gothambold";
        line-height: 3.9vw;
        margin-top: 0px;
        margin-bottom: 10px !important;
        letter-spacing: normal;
    }
    
    .pdp-md-title {
        font-size: 2.188vw;
        font-weight: 500;
        font-family: "Gothambold";
        line-height: 2.8vw;
        margin-top: 0px;
        margin-bottom: 10px;
        letter-spacing: normal;
    }
    
    .pdp-sub-title {
        font-size: 1.979vw;
        font-weight: 500;
        font-family: "Gothambold";
        line-height: 2.4vw;
        margin-top: 0px;
        margin-bottom: 10px !important;
        letter-spacing: 0.3px;
    }
    
    .pdp-sm-sub-title {
        font-size: 1.250vw;
        font-weight: 500;
        font-family: "HP Simplified Regular";
        line-height: 1.7vw;
        margin-top: 0px;
        margin-bottom: 10px !important;
        letter-spacing: 0.3px;
    }
    
    .pdp-texts {
        font-size: 1.458vw;
        font-weight: 500;
        font-family: "HP Simplified Regular";
        line-height: 1.9vw;
        margin-bottom: 10px !important;
        letter-spacing: 0.3px;
    }
    
    .pdp-sm-texts {
        font-size: 0.938vw;
        font-weight: 500;
        font-family: "HP Simplified Regular";
        line-height: 1.3vw;
        margin-bottom: 10px !important;
        letter-spacing: 0.3px;
    }
    
    .pdp-xs-texts {
        font-size: 0.938vw;
        font-weight: 300;
        font-family: "HP Simplified Light";
        line-height: 1.3vw;
        margin: 0px 0px 0px 0px !important;
        letter-spacing: 0.3px;
    }
    
    .black {
        color: #000000;
    }
    
    .yellow {
        color: #feb914;
    }
    
    .white {
        color: #FFFFFF;
    }
    
    .gray {
        color: #666;
    }
    
    .dark-gray {
        color: #595757;
    }
    
    .blue {
        color: #0096d6;
    }
    
    .hero-container {
        position: relative;
    }
    
    .hero-img-mobile {
        display: none;
    }
    
    .hero-section {
        position: relative;
        width: 100%;
        background-color: #ffffff;
    }
    
    .hero-content-texts {
        padding: 50px 20px;
        text-align: center;
        max-width: 100%;
        margin: 0 auto;
    }
    
    .hero-content-product-name {
        position: absolute;
        bottom: 50px;
        margin: auto;
        text-align: center;
        width: 100%;
    }
    
    .hero-banner {
        background-position: center top;
        background-repeat: no-repeat;
        min-height: 1000px;
        /* background-size: cover; */
    }
    
    .hero-img-container {
        text-align: center;
    }
    
    .hero-img-container .hero-img {
        max-width: 100%;
        display: block;
        margin: 0 auto;
    }
    
    .hero-img-container .customize-product-image-photo {
        max-width: 100%;
        height: auto;
        margin-top: 0px;
        margin-bottom: 50px;
    }
    
    .customize-product-desc-features {
        margin-top: 50px;
    }
    
    .customize.product-item-details .customize-product a {
        font-size: 1.979vw;
        font-weight: 500;
        font-family: "Gothambold";
        line-height: 2.4vw;
        margin-top: 0px;
        margin-bottom: 10px !important;
        letter-spacing: 0.3px;
    }
    
    .customize-product-desc-features ul {
        padding: 0px;
        margin: 50px 0 0px;
        list-style: none;
        text-align: left;
    }
    
    .customize-product-desc-features ul li {
        background: rgb(250, 19, 89);
        background: linear-gradient(90deg, rgba(250, 19, 89, 1) 0%, rgba(255, 31, 34, 1) 60%, rgba(255, 113, 56, 1) 100%);
        padding: 15px 50px 0px 50px !important;
        font-size: 1.458vw;
        font-weight: 500;
        font-family: "HP Simplified Regular";
        margin-bottom: 15px !important;
        letter-spacing: 0.3px;
        display: inline-block;
        color: #FFF;
        min-height: 80px;
        height: auto;
        width: 90%;
        position: relative;
        line-height: 25px !important;
    }
    
    .customize-product-desc-features ul li::after {
        width: 50px;
        height: 100%;
        border: none !important;
        background-color: #ff6936;
        content: "";
        position: absolute;
        right: -23px;
        top: 0;
        transform: 90 degree;
        transform: skew(-20deg);
    }
    
    .contents-row {
        padding: 0px 0px 0px 0px;
    }
    
    .contents-row.rows {
        background-color: #f6f6f6;
        padding: 50px 0px 50px 0px;
    }
    
    .contents-row.row-07.rows {
        padding: 50px 0px 0px 0px;
    }
    
    .contents-row.backgrounds {
        background-position: center top;
        background-repeat: no-repeat;
        min-height: 1000px;
        background-size: cover;
        width: 100%;
    }
    
    .content-container {
        padding: 0px 30px;
    }
    
    .content-container.contents {
        padding: 30px 30px;
    }
    
    .product-container {
        padding: 0px 20px;
    }
    
    .product-container img {
        max-width: 100%;
        display: block;
        margin: 0 auto;
    }
    
    .product-container .contents {
        padding: 0px 10px;
    }
    
    .column-content {
        height: 354px;
        display: table;
        width: 100%
    }
    
    .column-container {
        background-color: #FFF;
        background-position: center top;
        background-repeat: no-repeat;
        background-size: cover;
        width: 100%;
        height: inherit;
    }
    
    .column-content .inner {
        display: table-cell;
        vertical-align: middle;
    }
    
    .column-content .inner>* {
        max-width: 400px;
        margin-left: auto;
        margin-right: auto;
        text-align: center;
    }
    
    .products-container .inner {
        border: 1px solid #e8e8e8;
        box-shadow: 0px 1px 2px rgba(0, 0, 0, 0.1);
        padding: 30px 30px;
    }
    
    .products-container .inner img {
        max-width: 100%;
        display: block;
        margin: 0 auto;
        height: auto;
    }
    
    .products-container .inner .contents {
        text-align: center;
        padding: 10px 20px;
    }
    
    .footnotes {
        background-color: #d2d2d2;
        padding: 30px 0px;
    }
    
    .footnotes .footnotes-container {
        padding: 0px 30px;
    }
    
    .footnotes .footnotes-container p {
        font-size: 18px;
        line-height: 28px;
        font-family: 'HP Simplified Regular';
        font-weight: 500;
        color: #595757;
        margin-bottom: 10px;
        word-break: break-all;
    }
    
    .footnotes .footnotes-container ol {
        margin: 0px 15px;
        padding: 0px;
    }
    
    .footnotes .footnotes-container ol li {
        font-size: 18px;
        line-height: 28px;
        font-family: 'HP Simplified Regular';
        font-weight: 500;
        color: #595757;
        margin-bottom: 10px;
        word-break: break-all;
        list-style-type: decimal !important;
    }
    
    .footnotes .footnotes-container ol li a {
        color: #0096d6;
    }
    
    .footnotes .footnotes-container p a {
        color: #0096d6;
    }
    
    .show-mobile {
        display: none;
    }
    
    @media screen and (min-width: 2180px) {
        .show-desktop {
            display: none;
        }
        .show-mobile {
            display: block;
        }
        .backgrounds.b-01,
        .backgrounds.b-05,
        .backgrounds.b-02,
        .backgrounds.b-06,
        .backgrounds.b-07 {
            background-image: none !important;
            min-height: auto !important;
        }
        .customize-product-desc-features ul li::after {
            transform: skew(-9deg);
        }
    }
    
    @media screen and (min-width: 1920px) {
        .pdp-title {
            font-size: 3.229vw;
            line-height: 3.9vw;
        }
        .pdp-md-title {
            font-size: 2.188vw;
            line-height: 2.8vw;
        }
        .pdp-sub-title {
            font-size: 1.979vw;
            line-height: 2.4vw;
        }
        .pdp-sm-sub-title {
            font-size: 1.250vw;
            line-height: 1.7vw;
        }
        .pdp-texts {
            font-size: 1.458vw;
            line-height: 1.9vw;
        }
        .customize-product-desc-features ul li {
            font-size: 1.458vw !important;
            line-height: 1.9vw !important;
        }
        .pdp-sm-texts {
            font-size: 0.938vw;
            line-height: 1.3vw;
        }
        .pdp-xs-texts {
            font-size: 0.938vw;
            line-height: 1.3vw;
        }
    }
    
    @media screen and (max-width: 1400px) {
        .pdp-title {
            font-size: 4.286vw;
            line-height: 5vw;
        }
        .pdp-md-title {
            font-size: 3vw;
            line-height: 3.6vw;
        }
        .pdp-sub-title {
            font-size: 2.429vw;
        }
        .pdp-sm-sub-title {
            font-size: 1.714vw;
            line-height: 2.2vw;
        }
        .pdp-texts {
            font-size: 2vw;
            line-height: 2.6vw;
        }
        .customize-product-desc-features ul li {
            font-size: 2vw !important;
            line-height: 2.6vw !important;
        }
        .pdp-sm-texts {
            font-size: 0.938vw;
            line-height: 1.3vw;
        }
        .pdp-xs-texts {
            font-size: 1.286vw;
            line-height: 1.8vw;
        }
    }
    
    @media screen and (max-width: 1200px) {
        .pdp-title {
            font-size: 5.167vw;
            line-height: 5.5vw;
        }
        .pdp-sub-title {
            font-size: 2.667vw;
            line-height: 3.2vw;
        }
        .pdp-sm-sub-title {
            font-size: 2vw;
            line-height: 2.6vw;
        }
        .pdp-xs-texts {
            font-size: 1.500vw;
            line-height: 2vw;
        }
        .customize-product-desc-features ul li {
            width: 75%;
        }
    }
    
    @media screen and (max-width: 991px) {
        .pdp-title {
            font-size: 6.256vw;
            line-height: 7vw;
        }
        .pdp-md-title {
            font-size: 4.238vw;
            line-height: 4.8vw;
        }
        .pdp-sub-title {
            font-size: 3.431vw;
            line-height: 4.2vw;
        }
        .pdp-texts {
            font-size: 2.825vw;
            line-height: 3.4vw;
        }
        .customize-product-desc-features ul li {
            font-size: 2.825vw !important;
            line-height: 3.4vw !important;
        }
        .pdp-sm-sub-title {
            font-size: 2.422vw;
            line-height: 3vw;
        }
        .pdp-sm-texts {
            font-size: 2.422vw;
            line-height: 3vw;
        }
        .pdp-xs-texts {
            font-size: 1.816vw;
            line-height: 2.4vw;
        }
        .product-container .contents {
            padding: 0px 10px;
        }
        .hero-img-3 {
            margin: 0 auto 0 20px;
        }
    }
    
    @media screen and (max-width: 767px) {
        .show-mobile {
            display: block;
        }
        .show-desktop {
            display: none;
        }
        .backgrounds {
            background-image: none !important;
            min-height: auto !important;
        }
        .pdp-title {
            font-size: 8.083vw;
            line-height: 8.6vw;
        }
        .pdp-md-title {
            font-size: 5.476vw;
            line-height: 6vw;
        }
        .pdp-sub-title,
        .customize.product-item-details .customize-product a {
            font-size: 4.433vw;
            line-height: 5vw;
        }
        .pdp-texts {
            font-size: 3.651vw;
            line-height: 4.6vw;
        }
        .customize-product-desc-features ul li {
            font-size: 3.651vw !important;
            line-height: 4.6vw !important;
        }
        .pdp-sm-texts,
        .pdp-xs-texts {
            font-size: 4.172vw;
            line-height: 4.7vw;
        }
        .pdp-sm-sub-title {
            font-size: 3.129vw;
            line-height: 3.7vw;
        }
        .pdp-xs-texts {
            font-size: 2.347vw;
            line-height: 2.9vw;
        }
        .hero-content-texts {
            padding: 50px 80px;
        }
        .product-container {
            margin-bottom: 30px;
        }
        .content-container {
            padding: 0px 20px;
        }
        .column-content {
            height: auto;
        }
        .column-content>img {
            margin-bottom: 30px;
        }
        .column-content .inner {
            padding: 30px 20px;
        }
        .hero-banner {
            background-position: 45% 75%;
            min-height: 750px;
        }
        .contents-row.rows {
            padding: 50px 0px 0px 0px;
        }
        ul.product-list li {
            font-size: initial;
        }
    }
    
    @media screen and (max-width: 650px) {}
    
    @media screen and (max-width: 560px) {
        .customize-product-desc-features ul li {
            width: 85%;
        }
        .pdp-title {
            font-size: 8vw;
            line-height: 9vw;
        }
        .pdp-md-title {
            font-size: 7vw;
            line-height: 8vw;
        }
        .pdp-sub-title,
        .customize.product-item-details .customize-product a {
            font-size: 6.071vw;
            line-height: 7vw;
        }
        .pdp-texts {
            font-size: 5vw;
            line-height: 6vw;
        }
        .customize-product-desc-features ul li {
            font-size: 5vw !important;
            line-height: 6vw !important;
        }
        .pdp-sm-texts,
        .pdp-xs-texts {
            font-size: 4.5vw;
            line-height: 5.5vw;
        }
        .pdp-sm-sub-title {
            font-size: 4.286vw;
            line-height: 4.8vw;
        }
        .pdp-xs-texts {
            font-size: 3.214vw;
            line-height: 3.8vw;
        }
        .hero-content-texts {
            padding: 50px 20px;
        }
        .content-container.contents {
            padding: 30px 30px;
        }
    }
    
    @media screen and (max-width: 480px) {
        .pdp-md-title {
            font-size: 8vw;
            line-height: 9.6vw;
        }
        .pdp-sub-title,
        .customize.product-item-details .customize-product a {
            font-size: 6vw;
            line-height: 6.6vw;
        }
        .customize-product-desc-features ul li {
            padding: 15px 25px 0px 25px !important;
        }
        .customize-product-desc-features ul li::after {
            background-color: #ff5e33;
            transform: skew(-9deg);
        }
    }
    
    @media screen and (max-width: 375px) {
        .pdp-sm-sub-title {
            font-size: 6.400vw;
            line-height: 7vw;
        }
        .pdp-xs-texts {
            font-size: 4.800vw;
            line-height: 5.4vw;
        }
        .customize-product-desc-features ul li {
            width: 80% !important;
        }
    }
</style>
<section class="main-section">
<section class="main-wrapper"><!-- ============= HERO SECTION ===============  -->
<section class="hero-section">
<div class="hero-banner" style="background-image: url('https://id-files.apjonlinecdn.com/landingpages/npi/hp-omen-16-laptop/rich-content/amd/images/hero-banner.jpg');">
<div class="row">
<div class="col-md-10 col-md-offset-1 col-sm-12 col-xs-12">
<div class="hero-content-texts">
<h2 class="pdp-title black">PLAY YOURSELF UP</h2>
</div>
</div>
</div>
<div class="row">
<div class="hero-img-container">                <div class="customize-product-item-info">
                                    <div class="customize-product-item-photo-box">
                                                <a href="https://www.hp.com/id-en/shop/omen-by-hp-laptop-16-c0099ax-488f4pa.html" class="product photo product-item-photo" title="OMEN by HP Gaming Laptop 16-c0099AX" tabindex="-1">
                                                                                                                        <span class="customize-product-image-container">
            <span class="customize-product-image-wrapper">
                <img class="customize-product-image-photo"  src="https://id-media.apjonlinecdn.com/catalog/product/cache/b3b166914d87ce343d4dc5ec5117b502/2/1/21c1_omen_vanellope_16_60w_nonnumpad_4zone_lcd_micasilver_front_1.png" width="700" height="560" alt="Center facing">
            </span>
        </span>
                                        
                                                    </a>
                    </div>
                                <div class="customize product-item-details">
                                                                <strong class="customize-product name">
                            <a class="customize-product-item-link" href="https://www.hp.com/id-en/shop/omen-by-hp-laptop-16-c0099ax-488f4pa.html" title="OMEN by HP Gaming Laptop 16-c0099AX">
                                OMEN by HP Gaming Laptop 16-c0099AX                            </a>
                        </strong>
                                                                                                        <div class="customize-product-desc-features">
                                                        <ul><li class="processorfamily">AMD Ryzen&trade; 9 processor</li><li class="osinstalled">Windows 10 Home 64</li><li class="graphicseg_01card_01-graphicseg_02card_01">AMD Radeon&trade; RX 6600M Graphics (8 GB GDDR6 dedicated)</li><li class="memstdes_01">16 GB DDR4-3200 MHz RAM (2 x 8 GB)</li><li class="weightmet">Starting at 2.3 kg</li></ul>                        </div>
                                                                            </div>
            </div>
    

</div>
</div>
</div>
</section>
<!-- ============ HERO SECTION END ==============  --> <!-- ==================== CONTENTS ROW 1 SECTION ==================  -->
<section class="contents-row rows backgrounds" style="background-image: url('https://id-files.apjonlinecdn.com/landingpages/npi/hp-omen-16-laptop/rich-content/amd/images/content-row-background-1.jpg');">
<div class="row">
<div class="col-md-10 col-md-offset-1 col-sm-12 col-xs-12">
<div class="content-container aligned_center">
<h2 class="pdp-md-title black">AMD Ryzen&trade; 5000 series processors<sup>1</sup></h2>
<p class="black pdp-sm-sub-title">Enjoy elite gaming performance on a thin and light <br>notebook with amazing battery life.</p>
</div>
</div>
</div>
<div class="row show-mobile">
<div class="col-md-12 col-sm-12 col-xs-12 no_padding">
<div class="img_container"><img src="https://id-files.apjonlinecdn.com/landingpages/npi/hp-omen-16-laptop/rich-content/amd/images/content-row-img-1-mobile.jpg"></div>
</div>
</div>
</section>
<!-- ================= CONTENTS ROW 1 SECTION END ==================  --> <!-- ================= CONTENTS ROW 2 SECTION ===================  -->
<section class="contents-row rows backgrounds" style="background-image: url('https://id-files.apjonlinecdn.com/landingpages/npi/hp-omen-16-laptop/rich-content/amd/images/content-row-background-2.jpg');">
<div class="row">
<div class="col-md-10 col-md-offset-1 col-sm-12 col-xs-12">
<div class="content-container aligned_center">
<h2 class="pdp-md-title black">NVIDIA&reg; GeForce RTX&trade; Graphics</h2>
<p class="black pdp-sm-sub-title">Take on the latest games with enhanced Ray Tracing Cores and Tensor Cores, new streaming multiprocessors, and high-speed G6 memory.</p>
</div>
</div>
</div>
<div class="row show-mobile">
<div class="col-md-12 col-sm-12 col-xs-12 no_padding">
<div class="img_container"><img src="https://id-files.apjonlinecdn.com/landingpages/npi/hp-omen-16-laptop/rich-content/amd/images/content-row-img-2-mobile.jpg"></div>
</div>
</div>
</section>
<!-- ================== CONTENTS ROW 2 SECTION END =================  --> <!-- ================= CONTENTS ROW 3 SECTION ===================  -->
<section class="contents-row rows backgrounds" style="background-image: url('https://id-files.apjonlinecdn.com/landingpages/npi/hp-omen-16-laptop/rich-content/amd/images/content-row-background-3.jpg');">
<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12">
<div class="content-container aligned_center">
<h2 class="pdp-md-title black">Visually stunning</h2>
<p class="black pdp-sm-sub-title">Play at your best with a display that combines a 144 Hz refresh rate <br class="show-desktop">and a 1080p resolution for smooth, crisp gameplay<sup>2</sup>.</p>
</div>
</div>
</div>
<div class="row show-mobile">
<div class="col-md-12 col-sm-12 col-xs-12 no_padding">
<div class="img_container"><img src="https://id-files.apjonlinecdn.com/landingpages/npi/hp-omen-16-laptop/rich-content/amd/images/content-row-img-3-mobile.jpg"></div>
</div>
</div>
</section>
<!-- ================== CONTENTS ROW 3 SECTION END =================  --> <!-- ================= CONTENTS ROW 4 SECTION ===================  -->
<section class="contents-row rows backgrounds" style="background-image: url('https://id-files.apjonlinecdn.com/landingpages/npi/hp-omen-16-laptop/rich-content/amd/images/content-row-background-4.jpg');">
<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12">
<div class="content-container aligned_center">
<h2 class="pdp-md-title black">HP Flicker-free<sup>3</sup></h2>
<p class="black pdp-sm-sub-title">Eliminates screen flickering for more comfortable viewing.</p>
</div>
</div>
</div>
<div class="row show-mobile">
<div class="col-md-12 col-sm-12 col-xs-12 no_padding">
<div class="img_container"><img src="https://id-files.apjonlinecdn.com/landingpages/npi/hp-omen-16-laptop/rich-content/amd/images/content-row-img-4-mobile.jpg"></div>
</div>
</div>
</section>
<!-- ================== CONTENTS ROW 4 SECTION END =================  --> <!-- ================= CONTENTS ROW 5 SECTION ===================  -->
<section class="contents-row rows backgrounds" style="background-image: url('https://id-files.apjonlinecdn.com/landingpages/npi/hp-omen-16-laptop/rich-content/amd/images/content-row-background-5.jpg');">
<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12">
<div class="content-container aligned_center">
<h2 class="pdp-md-title black">Stay cool under pressure</h2>
<p class="pdp-texts black">OMEN Tempest Cooling Technology<sup>4</sup> prevents <br class="show-desktop">overheating with 3-sided venting and 5-way airflow.</p>
<div class="clear_30h show-mobile"></div>
</div>
</div>
</div>
<div class="row show-mobile">
<div class="col-md-12 col-sm-12 col-xs-12 no_padding">
<div class="img_container"><img src="https://id-files.apjonlinecdn.com/landingpages/npi/hp-omen-16-laptop/rich-content/amd/images/content-row-img-5-mobile.jpg"></div>
</div>
</div>
</section>
<!-- ================== CONTENTS ROW 5 SECTION END =================  --> <!-- ================= CONTENTS ROW 6 SECTION ===================  -->
<section class="contents-row rows backgrounds" style="background-image: url('https://id-files.apjonlinecdn.com/landingpages/npi/hp-omen-16-laptop/rich-content/amd/images/content-row-background-6.jpg');">
<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12">
<div class="content-container aligned_center">
<h2 class="pdp-md-title black">RGB backlit keyboard</h2>
<p class="pdp-texts black">Backlight 4 independent zones with different RGB lighting. <br class="show-desktop">WASD keys are outlined to highlight key controls.</p>
</div>
</div>
</div>
<div class="row show-mobile">
<div class="col-md-12 col-sm-12 col-xs-12 no_padding">
<div class="img_container"><img src="https://id-files.apjonlinecdn.com/landingpages/npi/hp-omen-16-laptop/rich-content/amd/images/content-row-img-6-mobile.jpg"></div>
</div>
</div>
</section>
<!-- ================== CONTENTS ROW 6 SECTION END =================  --> <!-- ================= CONTENTS ROW 7 SECTION ===================  -->
<section class="contents-row rows backgrounds" style="background-image: url('https://id-files.apjonlinecdn.com/landingpages/npi/hp-omen-16-laptop/rich-content/amd/images/content-row-background-7.jpg');">
<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12">
<div class="content-container aligned_center">
<h2 class="pdp-md-title black">OMEN Gaming Hub</h2>
<p class="pdp-texts black">Customize and elevate your gameplay from software <br class="show-desktop">enhancements to hardware control, and live services.</p>
</div>
</div>
</div>
<div class="row show-mobile">
<div class="col-md-12 col-sm-12 col-xs-12 no_padding">
<div class="img_container"><img src="https://id-files.apjonlinecdn.com/landingpages/npi/hp-omen-16-laptop/rich-content/amd/images/content-row-img-7-mobile.jpg"></div>
</div>
</div>
</section>
<!-- ================= CONTENTS ROW 7 SECTION END===================  --> <!-- ================= CONTENTS ROW 8 SECTION ===================  -->
<section class="contents-row rows backgrounds" style="background-image: url('https://id-files.apjonlinecdn.com/landingpages/npi/hp-omen-16-laptop/rich-content/amd/images/content-row-background-8.jpg');">
<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12">
<div class="content-container aligned_center">
<h2 class="pdp-md-title black">Thoughtfully designed</h2>
<p class="pdp-texts black">A thin and light design that includes <br class="show-desktop">sustainable, recycled materials.<sup>5,6,7</sup></p>
</div>
</div>
</div>
<div class="row show-mobile">
<div class="col-md-12 col-sm-12 col-xs-12 no_padding">
<div class="img_container"><img src="https://id-files.apjonlinecdn.com/landingpages/npi/hp-omen-16-laptop/rich-content/amd/images/content-row-img-8-mobile.jpg"></div>
</div>
</div>
</section>
<!-- ================== CONTENTS ROW 8 SECTION END =================  --> <!-- ================= CONTENTS ROW 9 SECTION ===================  -->
<section class="contents-row rows backgrounds" style="background-image: url('https://id-files.apjonlinecdn.com/landingpages/npi/hp-omen-16-laptop/rich-content/amd/images/content-row-background-9.jpg');">
<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12">
<div class="content-container aligned_center">
<h2 class="pdp-md-title black">Product Walkaround</h2>
</div>
</div>
</div>
<div class="row show-mobile">
<div class="col-md-12 col-sm-12 col-xs-12 no_padding">
<div class="img_container"><img src="https://id-files.apjonlinecdn.com/landingpages/npi/hp-omen-16-laptop/rich-content/amd/images/content-row-img-9-mobile.jpg"></div>
</div>
</div>
</section>
<!-- ================== CONTENTS ROW 9 SECTION END =================  --> <!-- ================= CONTENTS ROW 10 SECTION ===================  -->
<section class="contents-row rows backgrounds" style="background-image: url('https://id-files.apjonlinecdn.com/landingpages/npi/hp-omen-16-laptop/rich-content/amd/images/content-row-background-10.jpg');">
<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12">
<div class="content-container aligned_center">
<h2 class="pdp-md-title black">Product Build</h2>
<p class="pdp-texts black">Starting at 2.3 kg</p>
</div>
</div>
</div>
<div class="row show-mobile">
<div class="col-md-12 col-sm-12 col-xs-12 no_padding">
<div class="img_container"><img src="https://id-files.apjonlinecdn.com/landingpages/npi/hp-omen-16-laptop/rich-content/amd/images/content-row-img-10-mobile.jpg"></div>
</div>
</div>
</section>
<!-- ================== CONTENTS ROW 9 SECTION END =================  --> <!-- ================== FOOTER  =================  --><footer class="footnotes">
<div class="main-wrap">
<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12 no_padding">
<div class="footnotes-container">
<ol>
<li>Multi-core is designed to improve performance of certain software products. Not all customers or software applications will necessarily benefit from use of this technology. Performance and clock frequency will vary depending on application workload and your hardware and software configurations. Intel&rsquo;s numbering, branding and/or naming is not a measurement of higher performance.</li>
<li>All performance specifications represent the typical specifications provided by HP's component manufacturers; actual performance may vary either higher or lower.</li>
<li>The Flicker-free capability eliminates screen flickering through integrating DC-dimming LED backlights.</li>
<li>Thermal solution varies by configuration.</li>
<li>Percentage of ocean-bound plastic contained in speaker enclosure varies by product.</li>
<li>Percentage of recycled metal varies by product.</li>
<li>Keyboard keycap contains post-consumer recycled plastic. Percentage of Post consumer recycled contained in each component varies by product.</li>
</ol>
</div>
</div>
</div>
</div>
</footer></section>
</section></div></div></div>            </div>
        </div>
    
    
    <div class="block processor-operating-ksp ">
        
        
        <!-- Graphic block info content -->
            </div>

    
    <!-- Ink KSP block content -->
    
    <!-- Toner KSP block content -->
    
    <!-- aquimio-->
    
    
            <div class="block widget block-container product-desc-features block-desc-feature">
            <div class="block-content">
                                    <ul>
                                                                                                                        <li>AMD Ryzen™ 9 processor</li>
                                                                                                                                                                                    <li>Windows 10 Home 64</li>
                                                                                                                                                                                                                                        <li>16 GB DDR4-3200 MHz RAM (2 x 8 GB)</li>
                                                                                                                                                                                    <li>512 GB PCIe® NVMe™ TLC M.2 SSD</li>
                                                                                                                                                                                    <li>Play yourself up</li>
                                                                                                                                                                                    <li>AMD Radeon™ RX 6600M Graphics (8 GB GDDR6 dedicated)</li>
                                                                                                                                                                                    <li>1 SuperSpeed USB Type-C® 10Gbps signaling rate (DisplayPort™ 1.4, HP Sleep and Charge); 1 SuperSpeed USB Type-A 5Gbps signaling rate (HP Sleep and Charge); 2 SuperSpeed USB Type-A 5Gbps signaling rate; 1 HDMI 2.1; 1 RJ-45; 1 AC smart pin; 1 headphone/microphone combo</li>
                                                                                                                                                                                    <li>Up to 9 hours</li>
                                                                                                                                                                                    <li>1 year (1/1/0) limited warranty includes 1 year of parts and labor. No on-site repair. Terms and conditions vary by country. Certain restrictions and exclusions apply.</li>
                                                                                                        </ul>
                            </div>
        </div>
    
    <div class="block widget block-container">
        <div class="block-content">
                                </div>
    </div>

        
    

    
    
    </div>
</div>
<!-- If the customer changes Block content arbitrarily, it will cause this JS to fail. -->
<script type="text/x-magento-init">
    {
         "*": {
                "Magento_Catalog/js/overview": {}
         }
    }
</script>
<script>
    require([
        'jquery',
        'stellarGlobal'
    ], function ($, stellarGlobal){

        if($(window).width() < 768){
            stellarGlobal = new stellarGlobal();
            stellarGlobal.slideShow('#overview .form-title', true ,'.overview-content');
        } else {
            $('.product-desc-features').find('.block-content')
                .slice(6,$('.product-desc-features').find('.product-feature').length).hide();
        }
    })
</script>
                </div>
                                                                        <div class="data item content" id="additional">
                    <div class="additional-attributes-wrapper table-wrapper" data-mage-init='{"productSpecifications":{}}'>
    <div class="form-title additional-attributes-title">
        <h2>TECHNICAL DETAILS</h2>
    </div>
    <div id="specifications-div">
                <div class="additional-attributes-content">
                                                <div class="content-div ">
                <div class="content">
                    <p class="title">Operating system</p>
                    <p class="con">Windows 10 Home 64</p>
                </div>
            </div>
                                    <div class="content-div ">
                <div class="content">
                    <p class="title">Processor</p>
                    <p class="con">AMD Ryzen™ 9 5900HX (up to 4.6 GHz max boost clock, 16 MB L3 cache, 8 cores, 16 threads)</p>
                </div>
            </div>
                                    <div class="content-div ">
                <div class="content">
                    <p class="title">Memory</p>
                    <p class="con">16 GB DDR4-3200 MHz RAM (2 x 8 GB)</p>
                </div>
            </div>
                                    <div class="content-div show-line">
                <div class="content">
                    <p class="title">Storage</p>
                    <p class="con">16 GB memory; 512 GB SSD storage</p>
                </div>
            </div>
                    </div>
        <div class="more-or-less-specification ">
            <p>see less specs</p>
        </div>
        <div class="more-or-less-icon-specification show"
             id="more-or-less-icon-specification">
            <span class="less"></span>
        </div>
                <div class="additional-attributes-details">
            <div class="pdf">
                <p class="">HP ELITE DRAGONFLY DC1015 (PDF 6MB)</p>
            </div>
            <div class="details">
                                                                                                                        <dl class="prd-spec-grp">
                                <dt>Operating system</dt>
                                <dd data-th="Operating system">
                                    Windows 10 Home 64</dd>
                            </dl>
                                                    <dl class="prd-spec-grp">
                                <dt>Processor</dt>
                                <dd data-th="Processor">
                                    AMD Ryzen™ 9 5900HX (up to 4.6 GHz max boost clock, 16 MB L3 cache, 8 cores, 16 threads)</dd>
                            </dl>
                                                    <dl class="prd-spec-grp">
                                <dt>Processor footnote</dt>
                                <dd data-th="Processor footnote">
                                    [6] Multi-core is designed to improve performance of certain software products. Not all customers or software applications will necessarily benefit from use of this technology. Performance and clock frequency will vary depending on application workload and your hardware and software configurations. AMD’s numbering is not a measurement of clock speed.<br/>[7] Max Boost clock frequency performance varies depending on hardware, software and overall system configuration.</dd>
                            </dl>
                                                    <dl class="prd-spec-grp">
                                <dt>Processor family</dt>
                                <dd data-th="Processor family">
                                    AMD Ryzen™ 9 processor</dd>
                            </dl>
                                                    <dl class="prd-spec-grp">
                                <dt>Chipset</dt>
                                <dd data-th="Chipset">
                                    AMD Integrated SoC</dd>
                            </dl>
                                                    <dl class="prd-spec-grp">
                                <dt>Form factor</dt>
                                <dd data-th="Form factor">
                                    Standard laptop</dd>
                            </dl>
                                                                                                                                    <dl class="prd-spec-grp">
                                <dt>Memory</dt>
                                <dd data-th="Memory">
                                    16 GB DDR4-3200 MHz RAM (2 x 8 GB)</dd>
                            </dl>
                                                    <dl class="prd-spec-grp">
                                <dt>Memory Note</dt>
                                <dd data-th="Memory Note">
                                    Transfer rates up to 3200 MT/s.</dd>
                            </dl>
                                                                                                                                    <dl class="prd-spec-grp">
                                <dt>Internal storage</dt>
                                <dd data-th="Internal storage">
                                    512 GB PCIe® NVMe™ TLC M.2 SSD</dd>
                            </dl>
                                                    <dl class="prd-spec-grp">
                                <dt>Storage type</dt>
                                <dd data-th="Storage type">
                                    SSD</dd>
                            </dl>
                                                    <dl class="prd-spec-grp">
                                <dt>Optical drive</dt>
                                <dd data-th="Optical drive">
                                    Optical drive not included</dd>
                            </dl>
                                                    <dl class="prd-spec-grp">
                                <dt>Cloud service</dt>
                                <dd data-th="Cloud service">
                                    25 GB Dropbox storage for 12 months</dd>
                            </dl>
                                                    <dl class="prd-spec-grp">
                                <dt>Cloud service footnote</dt>
                                <dd data-th="Cloud service footnote">
                                    [1] 25 GB of free Dropbox storage for 12 months from date of registration. For complete details and terms of use, including cancellation policies, visit the Dropbox website at https://www.dropbox.com/help/space/hp-promotion. Internet service required and not included.</dd>
                            </dl>
                                                                                                                                    <dl class="prd-spec-grp">
                                <dt>Display</dt>
                                <dd data-th="Display">
                                    40.9 cm (16.1&quot;) diagonal, FHD (1920 x 1080), 144 Hz, 7 ms response time, IPS, micro-edge, anti-glare, Low Blue Light, 300 nits, 100% sRGB</dd>
                            </dl>
                                                    <dl class="prd-spec-grp">
                                <dt>Graphics</dt>
                                <dd data-th="Graphics">
                                    AMD Radeon™ RX 6600M Graphics (8 GB GDDR6 dedicated)</dd>
                            </dl>
                                                                                                                                    <dl class="prd-spec-grp">
                                <dt>Ports</dt>
                                <dd data-th="Ports">
                                    1 SuperSpeed USB Type-C® 10Gbps signaling rate (DisplayPort™ 1.4, HP Sleep and Charge); 1 SuperSpeed USB Type-A 5Gbps signaling rate (HP Sleep and Charge); 2 SuperSpeed USB Type-A 5Gbps signaling rate; 1 HDMI 2.1; 1 RJ-45; 1 AC smart pin; 1 headphone/microphone combo</dd>
                            </dl>
                                                    <dl class="prd-spec-grp">
                                <dt>External I/O ports footnote</dt>
                                <dd data-th="External I/O ports footnote">
                                    [19] For best results with HP Sleep and Charge, use a USB charging protocol standard cable or cable adapter with an external device.</dd>
                            </dl>
                                                    <dl class="prd-spec-grp">
                                <dt>Expansion slots</dt>
                                <dd data-th="Expansion slots">
                                    1 multi-format SD media card reader</dd>
                            </dl>
                                                                                                                                    <dl class="prd-spec-grp">
                                <dt>Audio features</dt>
                                <dd data-th="Audio features">
                                    Audio by Bang &amp; Olufsen; DTS:X® Ultra; Dual speakers; HP Audio Boost</dd>
                            </dl>
                                                    <dl class="prd-spec-grp">
                                <dt>Webcam</dt>
                                <dd data-th="Webcam">
                                    HP Wide Vision 720p HD camera with integrated dual array digital microphones</dd>
                            </dl>
                                                    <dl class="prd-spec-grp">
                                <dt>Sensors</dt>
                                <dd data-th="Sensors">
                                    IR Thermal sensor</dd>
                            </dl>
                                                                                                                                    <dl class="prd-spec-grp">
                                <dt>Pointing device</dt>
                                <dd data-th="Pointing device">
                                    HP Imagepad with multi-touch gesture support; Precision Touchpad Support</dd>
                            </dl>
                                                    <dl class="prd-spec-grp">
                                <dt>Keyboard</dt>
                                <dd data-th="Keyboard">
                                    Full-size, 4-zone RGB backlit, mica silver keyboard and 26-Key Rollover Anti-Ghosting Key technology</dd>
                            </dl>
                                                                                                                                    <dl class="prd-spec-grp">
                                <dt>Network interface</dt>
                                <dd data-th="Network interface">
                                    Integrated 10/100/1000 GbE LAN</dd>
                            </dl>
                                                    <dl class="prd-spec-grp">
                                <dt>Wireless</dt>
                                <dd data-th="Wireless">
                                    Intel® Wi-Fi 6E AX210 (2x2) and Bluetooth® 5.2 combo (Supporting Gigabit data rate)</dd>
                            </dl>
                                                    <dl class="prd-spec-grp">
                                <dt>Wireless note</dt>
                                <dd data-th="Wireless note">
                                    MU-MIMO supported; Miracast compatible</dd>
                            </dl>
                                                                                                                                    <dl class="prd-spec-grp">
                                <dt>Power supply type</dt>
                                <dd data-th="Power supply type">
                                    230 W AC power adapter</dd>
                            </dl>
                                                    <dl class="prd-spec-grp">
                                <dt>Battery type</dt>
                                <dd data-th="Battery type">
                                    6-cell, 83 Wh Li-ion polymer</dd>
                            </dl>
                                                    <dl class="prd-spec-grp">
                                <dt>Battery life video playback</dt>
                                <dd data-th="Battery life video playback">
                                    Up to 9 hours</dd>
                            </dl>
                                                    <dl class="prd-spec-grp">
                                <dt>Battery weight</dt>
                                <dd data-th="Battery weight">
                                    315 g</dd>
                            </dl>
                                                    <dl class="prd-spec-grp">
                                <dt>Energy Efficiency Compliance</dt>
                                <dd data-th="Energy Efficiency Compliance">
                                    EPEAT® registered</dd>
                            </dl>
                                                    <dl class="prd-spec-grp">
                                <dt>Environmental</dt>
                                <dd data-th="Environmental">
                                    Ocean-bound plastic in speaker enclosure; Contains recycled metal; Keyboard keycaps made with post-consumer recycled plastic</dd>
                            </dl>
                                                    <dl class="prd-spec-grp">
                                <dt>Environmental specification footnote number</dt>
                                <dd data-th="Environmental specification footnote number">
                                    [39] Percentage of ocean-bound plastic contained in each component varies by product.&lt;br/&gt;[40] Percentage of recycled metal varies by product.&lt;br/&gt;[41] Keyboard keycap contains post-consumer recycled plastic. Percentage of Post consumer recycled contained in each component varies by product.</dd>
                            </dl>
                                                                                                                                    <dl class="prd-spec-grp">
                                <dt>Dimensions without stand (W x D x H)</dt>
                                <dd data-th="Dimensions without stand (W x D x H)">
                                    36.92 x 24.8 x 2.3 cm</dd>
                            </dl>
                                                    <dl class="prd-spec-grp">
                                <dt>Dimension note (metric)</dt>
                                <dd data-th="Dimension note (metric)">
                                    Dimensions vary by configuration</dd>
                            </dl>
                                                    <dl class="prd-spec-grp">
                                <dt>Package dimensions (W x D x H)</dt>
                                <dd data-th="Package dimensions (W x D x H)">
                                    6.9 x 55.2 x 34.5 cm</dd>
                            </dl>
                                                    <dl class="prd-spec-grp">
                                <dt>Weight</dt>
                                <dd data-th="Weight">
                                    Starting at 2.3 kg</dd>
                            </dl>
                                                    <dl class="prd-spec-grp">
                                <dt>Weight note (metric)</dt>
                                <dd data-th="Weight note (metric)">
                                    Weight varies by configuration</dd>
                            </dl>
                                                    <dl class="prd-spec-grp">
                                <dt>Package weight</dt>
                                <dd data-th="Package weight">
                                    3.93 kg</dd>
                            </dl>
                                                                                                                                    <dl class="prd-spec-grp">
                                <dt>Product color</dt>
                                <dd data-th="Product color">
                                    Mica silver cover and base, mica silver aluminum keyboard frame</dd>
                            </dl>
                                                    <dl class="prd-spec-grp">
                                <dt>Product design</dt>
                                <dd data-th="Product design">
                                    Paint finish cover and base, sandblasted keyboard frame</dd>
                            </dl>
                                                                                                                                    <dl class="prd-spec-grp">
                                <dt>Software included</dt>
                                <dd data-th="Software included">
                                    McAfee LiveSafe™</dd>
                            </dl>
                                                    <dl class="prd-spec-grp">
                                <dt>Software footnote</dt>
                                <dd data-th="Software footnote">
                                    [2] Free 30 day subscription of McAfee LiveSafe service included. Internet access required and not included. Subscription required after expiration.</dd>
                            </dl>
                                                                                                                                    <dl class="prd-spec-grp">
                                <dt>Warranty</dt>
                                <dd data-th="Warranty">
                                    1 year (1/1/0) limited warranty includes 1 year of parts and labor. No on-site repair. Terms and conditions vary by country. Certain restrictions and exclusions apply.</dd>
                            </dl>
                                                                        </div>
        </div>
    </div>
</div>
<script>
    require([
        'jquery',
        'stellarGlobal'
    ], function ($, stellarGlobal){
        stellarGlobal = new stellarGlobal();
        if($(window).width() < 768){
            stellarGlobal.slideShow('#additional .form-title', true ,'#specifications-div');
        }
        stellarGlobal.moveElement('.promotion-discount-tags', '.page-title-wrapper', true);
    })
</script>
                </div>
                                                    <div class="data item content" id="product.tab.offer">
                    <div class="special-offer">
    <div class="form-title special-offer-title">
        <h2>Special offers</h2>
    </div>
        <div class="promotion-container">
                
                                                <div class="promotion">
                    <div>
                        <div class="product attribute
                        product-7651">
                                                              </div>
                                                    <div class="block widget block-container block-promotion-tc promotion-detail">
                                                                      </div>
                                            </div>
                </div>
                                                                                                                                                        </div>

    
    
                            
</div>
<script>
    require([
        'jquery',
        'stellarGlobal'
    ], function ($, stellarGlobal){
        if($(window).width() < 768){
            stellarGlobal = new stellarGlobal();
            stellarGlobal.slideShow('.special-offer .form-title', true ,'.promotion-container');
        }
    })
</script>
                </div>
                                                    <div class="data item content" id="bv_reviews">
                        <div class="form-title bv-reviews-title">
        <h2>Reviews</h2>
    </div>
    <div id="bv-reviews-content" data-bv-show="reviews"
         data-bv-product-id="488F4PA">
        
<ul id="BVSEOSDK_meta" style="display:none !important;">
   <li data-bvseo="sdk">bvseo_sdk, p_sdk, 3.2.1</li>
   <li data-bvseo="sp_mt">CLOUD, getReviews, 256.89ms</li>
   <li data-bvseo="ct_st">REVIEWS, PRODUCT</li>
   <li data-bvseo="ms">bvseo-msg:  HTTP status code of 404 was returned;</li>
</ul>    </div>
    <script>
        require([
            'jquery',
            'stellarGlobal'
        ], function ($, stellarGlobal){

            if($(window).width() < 768){
                stellarGlobal = new stellarGlobal();
                stellarGlobal.slideShow('#bv_reviews .form-title', true ,'#bv-reviews-content');
            }
        })
    </script>
                </div>
                                                    <div class="data item content" id="product.view.tab.related.links">
                    <div id="product-related-links" class="block widget related">
    <img src="https://id-media.apjonlinecdn.com/static/version1640122770/frontend/HPOLS/stellar/en_AU/images/loader-2.gif" alt="Loading...">
</div>
<script type="text/x-magento-init">
    {
        "[data-role=related-tocart-form]": {
            "popupAddToCart": {
                "disablePopup": 0            }
        }
    }
</script>

<div id="popupBox"></div>
<script>
    require(['jquery', 'HPOLS_Catalog/js/popup'],
        function ($, $p) {

            $(document).ready(function () {
                $.ajaxSetup({showLoader: false, cache: false});
                $("#product-related-links").load('https://www.hp.com/id-en/shop/hpols_catalog/product/relatedlinks/pid/7651/');

                $('body').on('click', '.popup-addtocart', function (e) {
                    e.preventDefault();
                    $p.addPopup($(e.currentTarget));
                });
            });
        }
    );
</script>

<script type="text/x-magento-init">
        {
            "*": {
                "dynamicDiscountRecommended": {
                    "productCountLimit": "5",
                    "currentProductType": "simple",
                    "addRecommendProductToCartUrl": "https://www.hp.com/id-en/shop/dynamicdiscount/cart/add/",
                    "deleteRecommendProductFromCartUrl": "https://www.hp.com/id-en/shop/checkout/cart/delete/",
                    "configurable": "configurable",
                    "errorMsg": "We can't add those item to your shopping cart right now."
                }
            }
        }
</script>
                </div>
                                                    <div class="data item content" id="product.view.tab.ask.question">
                    <style>
    .ask-question-content {
        margin: 0 auto;
        padding: 40px 0;
    }

    .ask-question-form .field > .label {
        padding-left: 0;
        margin-bottom: 0;
        min-width: 200px;
        text-align: left;
        vertical-align: middle;
        color: #000;
        line-height: 40px;
    }

    .ask-question-form .field-container {
        display: flex;
    }

    .ask-question-form .field-container .left-box {
        min-width: 203px;
    }

    .ask-question-form .field-container .right-box {
        background: #f9f9f9;
        padding: 20px 20px 0 20px;
        width: 50%;
        box-sizing: border-box;
    }

    .ask-question-form .field-container .right-box.no-bg {
        background: none;
        padding-left: 0;
    }

    .ask-question-form .field-container .field-content > label {
        padding: 0 0 10px 0;
        display: inline-block;
    }

    .ask-question-form .field-container .field-content .control {
        padding-bottom: 20px;
    }

    .ask-question-form .input-text {
        padding: 10px;
    }

    .ask-question-form .field .input-select {
        height: 40px !important;
        width: 100%;
        border: 1px solid #cccccc;
    }

    .ask-question-form .field > .control {
        display: inline-block;
        width: 30%;
        position: relative;
    }

    .ask-question-form .field.question-description > .control {
        width: 72%;
    }

    .product.detailed .product.items > .item.title {
        min-width: calc(14.3% + 0.8px) !important;
        width: calc(14.3% + 0.8px) !important;
    }

    .pccf.default div.well {
        padding: 0!important;
        box-shadow: none!important;
    }

    .ask-question-container .pccf.default .form-control:focus {
        border-color: #ccc!important;
        box-shadow: none!important;
    }

    .ask-question-container .pccf.default .form-control.mage-error {
        background: #fcc!important;
        border-color: #f00!important;
    }

    @media only screen and (min-width: 768px)  and (max-width: 860px) {
        .product.detailed .product.items > .item.title#tab-label-overview,
        .product.detailed .product.items > .item.title#tab-label-bv_reviews {
            width: 12%!important;
            min-width: 1%!important;
        }

        .product.detailed .product.items > .item.title[aria-controls="product.view.tab.related.links"] {
            width: 16%!important;
        }

        .product.detailed .product.items > .item.title[aria-controls="product.view.tab.buying.guide"] {
            width: 16%!important;
        }

        .product.detailed .product.items > .item.title[aria-controls="product.view.tab.ask.question"] {
            width: 16%!important;
        }
    }

    @media only screen and (min-width: 768px)  and (max-width: 1200px) {
        .product.detailed .product.items > .data.item.title > .switch {
            white-space: normal;
            /*line-height: normal;*/
            /*padding: 23px 5px;*/
            overflow: hidden;
        }
    }

    @media only screen and (max-width: 768px) {
        .pccf.default div.well {
            padding-left: 0!important;
        }
    }

    @media only screen and (max-width: 767px) {
        .product.detailed .product.items > .item.title {
            width: 100% !important;
        }

        .ask-question-form .field > .control {
            width: 100%;
        }

        .ask-question-form .field-container {
            display: block;
        }

        .ask-question-form .field-container .right-box {
            width: 100%;
        }
        .error{
            color:red;
        }
    }
</style>
<script>
    var pinCodeMap = ["10110","10120","10130","10140","10150","10160","10210","10220","10230","10240","10250","10260","10270","10310","10320","10330","10340","10350","10410","10420","10430","10440","10450","10460","10510","10520","10530","10540","10550","10560","10570","10610","10620","10630","10640","10650","10710","10720","10730","10740","10750","11110","11120","11130","11140","11150","11160","11170","11180","11210","11220","11230","11240","11250","11260","11270","11310","11320","11330","11410","11420","11430","11440","11450","11460","11470","11480","11510","11520","11530","11540","11550","11560","11610","11620","11630","11640","11650","11710","11720","11730","11740","11750","11810","11820","11830","11840","11850","12110","12120","12130","12140","12150","12160","12170","12180","12190","12210","12220","12230","12240","12250","12260","12270","12310","12320","12330","12410","12420","12430","12440","12450","12510","12520","12530","12540","12550","12560","12620","12630","12640","12710","12720","12730","12740","12750","12760","12770","12780","12790","12810","12820","12830","12840","12850","12860","12870","12910","12920","12930","12940","12950","12960","12970","12980","13110","13120","13130","13140","13150","13210","13220","13230","13240","13250","13260","13310","13320","13330","13340","13350","13410","13420","13430","13440","13450","13460","13470","13510","13520","13530","13540","13550","13560","13570","13610","13620","13630","13640","13650","13710","13720","13730","13740","13750","13760","13770","13780","13790","13810","13820","13830","13840","13850","13860","13870","13880","13890","13910","13920","13930","13940","13950","13960","14110","14120","14130","14140","14150","14210","14230","14240","14250","14260","14270","14310","14320","14330","14340","14350","14360","14370","14410","14420","14430","14440","14450","14460","14470","14510","14520","14530","14540","15111","15112","15113","15114","15115","15116","15117","15118","15119","15121","15122","15123","15124","15125","15126","15127","15128","15129","15131","15132","15133","15134","15135","15136","15137","15138","15139","15141","15142","15143","15144","15145","15146","15147","15148","15151","15152","15153","15154","15155","15156","15157","15158","15159","15211","15212","15213","15214","15215","15220","15221","15222","15223","15224","15225","15226","15227","15228","15229","15310","15311","15312","15313","15314","15315","15318","15320","15321","15322","15323","15324","15325","15326","15330","15331","15332","15334","15335","15336","15337","15338","15339","15340","15341","15342","15343","15344","15345","15411","15412","15413","15414","15415","15416","15417","15418","15419","15510","15520","15530","15540","15550","15560","15570","15610","15620","15710","15720","15730","15810","15820","16110","16111","16112","16113","16114","16115","16116","16117","16118","16119","16120","16121","16122","16123","16124","16125","16126","16128","16129","16131","16132","16133","16134","16135","16136","16137","16138","16139","16141","16142","16143","16144","16145","16146","16151","16152","16153","16154","16155","16156","16157","16158","16161","16162","16164","16165","16166","16167","16168","16169","16310","16320","16330","16340","16350","16360","16370","16411","16412","16413","16414","16415","16416","16417","16418","16421","16422","16423","16424","16425","16426","16431","16432","16433","16434","16435","16436","16437","16438","16439","16451","16452","16453","16454","16455","16456","16457","16458","16459","16511","16512","16513","16514","16515","16516","16517","16518","16519","16610","16620","16630","16640","16650","16660","16670","16680","16710","16720","16730","16740","16750","16770","16810","16820","16830","16840","16911","16912","16913","16914","16915","16916","16917","16918","16920","16921","16922","16923","16960","16961","16962","16963","16964","16965","16966","16967","16968","16969","17111","17112","17113","17114","17115","17116","17117","17121","17122","17123","17124","17125","17131","17132","17133","17134","17135","17136","17141","17142","17143","17144","17145","17146","17147","17148","17151","17152","17153","17154","17155","17156","17157","17158","17211","17212","17213","17214","17215","17216","17217","17218","17320","17330","17340","17350","17352","17356","17411","17412","17413","17414","17415","17421","17422","17423","17424","17425","17426","17431","17432","17433","17434","17435","17510","17520","17530","17540","17610","17620","17630","17710","17720","17730","20111","20112","20113","20114","20115","20116","20117","20118","20119","20121","20122","20123","20124","20125","20126","20127","20128","20131","20132","20133","20134","20135","20136","20137","20138","20141","20142","20143","20144","20145","20146","20147","20148","20149","20151","20152","20153","20154","20155","20156","20157","20158","20159","20211","20212","20213","20214","20215","20216","20217","20218","20219","20221","20222","20223","20224","20225","20226","20227","20228","20229","20231","20232","20233","20234","20235","20236","20237","20238","20239","20241","20242","20243","20244","20245","20250","20251","20252","20253","20254","20255","20256","20351","20353","20354","20355","20356","20357","20358","20361","20362","20363","20371","20372","20373","20374","20411","20412","20414","20415","20511","20512","20513","20514","20515","20516","20517","20518","20524","20525","20551","20552","20553","20581","20582","20583","20585","20611","20612","20613","20614","20615","20616","20621","20622","20623","20624","20625","20626","20627","20628","20631","20632","20633","20634","20636","20711","20712","20713","20714","20715","20716","20717","20718","20719","20721","20722","20723","20724","20725","20726","20727","20728","20731","20732","20733","20734","20735","20736","20737","20741","20742","20743","20744","20745","20746","20747","20748","20749","20761","20762","20771","20772","20773","20774","20811","20812","20813","20815","20816","20851","20852","20853","20854","20855","20856","20857","20858","20859","20881","20984","20986","20987","20991","20992","20993","20994","20995","20996","20997","20998","21111","21112","21113","21114","21115","21116","21117","21118","21121","21122","21123","21124","21125","21126","21127","21128","21129","21131","21132","21133","21134","21135","21136","21137","21139","21141","21142","21143","21144","21145","21146","21147","21151","21153","21154","21155","21156","21157","21161","21162","21163","21165","21167","21168","21171","21172","21173","21174","21181","21182","21183","21184","21186","21187","21211","21212","21213","21214","21215","21216","21217","21218","21219","21221","21222","21223","21224","21225","21226","21227","21228","21229","21252","21253","21254","21255","21256","21257","21258","21261","21262","21263","21264","21271","21272","21273","21274","21311","21312","21313","21314","21315","21316","21321","21322","21323","21324","21325","21331","21332","21333","21334","21335","21341","21342","21343","21344","21345","21352","21361","21362","21364","21365","21366","21367","21368","21369","21381","21411","21412","21413","21414","21415","21416","21417","21418","21419","21421","21422","21423","21424","21425","21426","21427","21428","21429","21451","21452","21454","21455","21457","21461","21462","21463","21464","21465","21471","21472","21473","21474","21475","22111","22112","22113","22114","22115","22152","22153","22154","22155","22161","22162","22163","22164","22165","22171","22172","22173","22211","22212","22213","22214","22215","22216","22217","22218","22219","22251","22252","22253","22254","22261","22262","22263","22271","22272","22281","22282","22283","22311","22312","22313","22314","22315","22316","22381","22382","22383","22384","22385","22386","22391","22392","22393","22394","22395","22396","22411","22412","22413","22414","22415","22416","22417","22418","22419","22452","22453","22454","22455","22456","22457","22458","22461","22463","22465","22466","22471","22472","22473","22474","22475","22476","22511","22512","22513","22514","22521","22522","22523","22524","22531","22532","22533","22534","22535","22536","22537","22538","22562","22563","22564","22565","22611","22612","22613","22614","22615","22616","22617","22618","22651","22654","22711","22712","22713","22714","22715","22716","22718","22719","22721","22722","22723","22724","22725","22726","22727","22728","22732","22733","22735","22738","22741","22742","22747","22753","22755","22756","22758","22762","22763","22765","22773","22774","22811","22812","22814","22815","22816","22817","22851","22852","22853","22854","22857","22861","22862","22863","22864","22865","22866","22867","22871","22872","22873","22874","22875","22876","22881","22911","22912","22913","22915","22916","22917","22918","22919","22952","22976","22977","22978","22983","22987","22988","22989","22994","22998","23111","23112","23114","23115","23116","23117","23118","23119","23121","23122","23123","23124","23125","23126","23127","23128","23129","23230","23231","23232","23233","23234","23235","23236","23238","23239","23241","23242","23243","23244","23245","23246","23247","23248","23249","23351","23352","23353","23354","23361","23362","23363","23371","23372","23373","23381","23391","23511","23512","23513","23514","23515","23516","23517","23518","23521","23522","23523","23524","23525","23526","23527","23528","23529","23611","23612","23613","23614","23615","23616","23617","23618","23652","23653","23654","23655","23656","23657","23661","23662","23671","23672","23681","23682","23683","23711","23712","23713","23714","23715","23716","23717","23718","23752","23753","23754","23755","23757","23758","23761","23762","23763","23764","23765","23766","23767","23771","23772","23773","23774","23776","23891","23892","23893","23894","23911","23912","23913","23915","23917","23918","23919","23951","23952","24111","24112","24113","24114","24115","24116","24118","24119","24151","24152","24153","24161","24162","24163","24164","24165","24166","24167","24171","24172","24173","24174","24181","24182","24183","24184","24185","24186","24187","24188","24251","24261","24262","24263","24264","24311","24313","24314","24315","24351","24352","24354","24355","24356","24357","24371","24372","24373","24374","24375","24376","24377","24381","24382","24385","24386","24391","24392","24393","24394","24410","24411","24412","24413","24414","24415","24416","24451","24452","24453","24454","24455","24456","24457","24458","24461","24471","24472","24473","24474","24475","24476","24477","24478","24511","24512","24513","24514","24515","24516","24517","24518","24519","24552","24553","24561","24562","24563","24568","24571","24581","24582","24651","24652","24653","24654","24655","24656","24661","24671","24673","24678","24782","24783","24784","24785","24786","24791","25111","25112","25114","25115","25117","25118","25119","25121","25122","25123","25125","25126","25129","25132","25133","25134","25136","25137","25139","25142","25143","25144","25145","25146","25147","25151","25152","25153","25154","25155","25156","25157","25158","25159","25161","25162","25163","25164","25166","25168","25171","25172","25173","25175","25176","25211","25212","25213","25214","25215","25216","25217","25221","25222","25223","25224","25225","25226","25227","25231","25232","25233","25234","25235","25236","25237","25391","25392","25393","25394","25511","25512","25513","25514","25515","25516","25517","25518","25519","25521","25522","25523","25524","25526","25529","25531","25532","25533","25534","25535","25536","25537","25538","25539","25552","25561","25563","25564","25571","25572","25573","25581","25582","25584","25586","25651","25652","25654","25661","25662","25663","25666","25668","25673","25674","26111","26112","26113","26114","26115","26116","26117","26121","26122","26123","26124","26125","26126","26127","26128","26129","26131","26132","26133","26134","26135","26136","26137","26138","26151","26152","26161","26162","26164","26181","26191","26192","26211","26212","26213","26214","26215","26216","26217","26218","26219","26221","26222","26223","26224","26225","26226","26227","26228","26229","26231","26232","26233","26235","26236","26237","26251","26252","26253","26254","26255","26256","26257","26261","26262","26271","26272","26273","26311","26318","26352","26353","26366","26381","26451","26471","26473","26561","26566","26567","26571","26572","26573","27111","27112","27113","27114","27115","27116","27117","27118","27121","27122","27123","27124","27125","27126","27127","27128","27151","27211","27213","27216","27261","27262","27263","27264","27265","27271","27281","27282","27292","27294","27311","27312","27313","27314","27315","27316","27317","27321","27322","27323","27324","27325","27326","27355","27356","27361","27365","27371","27372","27373","27381","27383","27387","27388","27411","27412","27413","27415","27416","27418","27419","27421","27422","27423","27424","27425","27427","27431","27432","27433","27434","27435","27441","27442","27443","27444","27445","27446","27447","27448","27449","27511","27553","27561","27562","27563","27564","27571","27572","27573","27678","27681","27684","27775","27776","27777","27778","27779","28111","28112","28114","28115","28116","28121","28122","28123","28124","28125","28126","28127","28128","28131","28141","28142","28143","28144","28151","28152","28153","28154","28155","28156","28261","28262","28263","28264","28265","28266","28267","28281","28282","28284","28285","28286","28287","28288","28289","28291","28292","28293","28294","28353","28381","28382","28383","28384","28411","28412","28451","28452","28453","28458","28461","28462","28463","28464","28471","28554","28555","28556","28557","28558","28559","28565","28654","28662","28671","28685","28686","28711","28712","28713","28714","28752","28753","28754","28755","28761","28763","28771","28772","28773","28781","28784","28811","28812","28813","28814","28815","28816","28821","28822","28823","28824","28825","28826","28882","28911","28912","28913","28914","28953","28983","28991","28992","29111","29112","29113","29114","29115","29122","29123","29124","29125","29132","29133","29134","29135","29136","29151","29152","29193","29211","29212","29213","29214","29252","29253","29254","29255","29256","29261","29271","29272","29273","29274","29281","29282","29311","29312","29313","29314","29316","29317","29318","29319","29335","29344","29345","29351","29352","29353","29354","29355","29363","29371","29412","29413","29414","29416","29422","29424","29425","29426","29427","29428","29431","29432","29433","29437","29438","29439","29441","29443","29444","29445","29452","29453","29454","29458","29461","29464","29465","29466","29467","29468","29471","29472","29473","29474","29475","29476","29481","29482","29483","29484","29485","29486","29487","29511","29512","29513","29514","29515","29553","29555","29556","29561","29563","29564","29565","29566","29661","29662","29663","29664","29781","29782","29783","29784","29791","29792","29871","29872","29873","29874","29875","30111","30112","30113","30114","30115","30116","30117","30118","30119","30121","30122","30123","30124","30125","30126","30127","30128","30129","30131","30132","30133","30134","30135","30136","30137","30138","30139","30141","30142","30143","30144","30145","30146","30147","30148","30149","30151","30153","30154","30155","30161","30162","30163","30164","30165","30251","30252","30253","30254","30255","30257","30258","30259","30261","30262","30263","30264","30265","30266","30267","30268","30611","30612","30613","30614","30615","30616","30617","30618","30652","30653","30654","30655","30656","30657","30658","30659","30661","30664","30671","30672","30673","30681","30711","30752","30754","30755","30756","30757","30758","30759","30771","30812","30813","30814","30815","30816","30817","30862","30865","30866","30867","30868","30869","30911","30912","30913","30914","30915","30916","30953","30958","30959","30961","30962","30967","30968","30971","30972","30974","30975","31111","31112","31113","31115","31116","31117","31121","31122","31123","31124","31125","31126","31127","31131","31132","31133","31134","31135","31141","31142","31143","31144","31145","31146","31171","31172","31173","31211","31212","31213","31214","31311","31312","31313","31314","31315","31351","31352","31355","31356","31357","31411","31412","31413","31414","31415","31416","31417","31418","31419","31452","31453","31461","31462","31471","31511","31512","31513","31514","31515","31516","31517","31519","31521","31522","31526","31527","31529","31551","31581","31591","31592","31593","31594","31595","31596","31611","31613","31614","31615","31616","31617","31618","31619","31621","31622","31624","31625","31626","31627","31628","31652","31654","31655","31656","31657","31658","31661","31662","31663","31665","31666","31667","31668","31669","31711","31712","31713","32111","32112","32113","32114","32115","32116","32117","32121","32122","32123","32124","32125","32126","32151","32152","32155","32156","32157","32158","32159","32184","32185","32191","32192","32211","32264","32265","32272","32273","32274","32276","32277","32278","32279","32311","32312","32313","32314","32315","32361","32362","32366","32367","32381","32382","32383","32384","32385","32386","32387","33111","33113","33115","33116","33117","33118","33119","33121","33123","33124","33125","33127","33132","33133","33134","33135","33136","33137","33138","33139","33141","33142","33143","33145","33146","33147","33148","33149","33172","33173","33179","33211","33212","33213","33214","33215","33251","33252","33253","33255","33311","33312","33313","33351","33362","33364","33365","33366","33411","33412","33413","33414","33415","33417","33451","33452","33481","33511","33512","33513","33514","33515","33516","33517","33561","33562","33571","33674","33675","33681","33684","33777","33778","33782","33783","33791","34111","34112","34113","34114","34117","34118","34119","34121","34122","34123","34124","34125","34152","34153","34155","34156","34157","34158","34159","34161","34162","34163","34164","34166","34167","34168","34169","34171","34172","34173","34174","34175","34176","34179","34182","34192","34194","34196","34198","34199","34331","34332","34333","34335","34371","34372","34373","34375","34376","34377","34381","34382","34384","34385","34386","34387","34388","34389","34391","34396","34511","34513","34514","34515","34516","34517","34518","34519","34554","34555","34556","34557","34558","34559","34581","34582","34583","34594","34595","34596","34598","34611","34613","34614","34615","34616","34617","34618","34619","34681","34682","34683","34684","34691","34693","34696","34697","34698","34761","34762","34763","34764","34765","34766","34767","34768","34769","34811","34812","34813","34814","34815","34816","34817","34818","34871","34872","34874","34875","34876","34877","34878","34879","34881","34882","34883","34884","34885","35111","35112","35113","35115","35116","35117","35118","35119","35121","35122","35123","35124","35125","35126","35127","35128","35129","35131","35132","35133","35134","35135","35136","35141","35142","35143","35144","35145","35146","35147","35148","35149","35151","35152","35153","35154","35155","35156","35157","35158","35159","35211","35212","35213","35214","35215","35221","35222","35223","35224","35225","35226","35227","35228","35229","35231","35232","35233","35234","35235","35236","35237","35238","35239","35241","35242","35243","35244","35245","35246","35353","35356","35357","35361","35362","35363","35365","35366","35367","35368","35372","35373","35374","35375","35376","35377","35378","35379","35382","35384","35386","35387","35451","35452","35453","35513","35551","35552","35592","35594","35596","35597","35611","35613","35674","35675","35679","35682","35683","35684","35686","36111","36112","36121","36122","36123","36124","36125","36126","36127","36128","36129","36131","36132","36133","36134","36135","36136","36137","36138","36139","36141","36142","36143","36144","36145","36146","36147","36148","36149","36251","36252","36253","36254","36255","36256","36261","36262","36263","36264","36265","36361","36364","36365","36371","36373","36381","36382","36511","36514","36552","36553","36554","36555","36572","36611","36612","36613","36614","36653","36654","36655","36656","36657","36761","36763","36764","36771","36772","36773","37111","37112","37113","37114","37152","37161","37162","37163","37171","37172","37173","37174","37175","37211","37216","37252","37255","37257","37259","37261","37262","37263","37311","37312","37313","37314","37352","37353","37354","37356","37361","37371","37372","37382","37481","37482","37485","37491","37492","37553","37554","37571","37572","37573","38113","38114","38115","38116","38117","38118","38119","38121","38122","38125","38126","38211","38213","38214","38215","38216","38221","38222","38223","38224","38225","38226","38227","38228","38229","38326","38361","38363","38371","38372","38373","38374","38375","38376","38377","38378","38379","38382","38383","38385","38386","38387","38511","38512","38513","38514","38515","38516","38517","38518","38552","38553","38571","38575","38611","38612","38614","38617","38618","38619","38653","38655","38656","38657","38711","38713","38714","38764","38765","38766","38767","38768","38873","38874","38875","38876","38877","38878","38881","38882","38883","38884","38885","38886","38887","38888","38955","38956","38961","38962","38963","38964","38965","39111","39112","39113","39114","39115","39116","39117","39118","39119","39121","39123","39124","39125","39152","39153","39182","39183","39261","39262","39263","39264","39265","39267","39268","39269","39371","39372","39373","39374","40111","40112","40113","40114","40115","40116","40117","40121","40122","40123","40124","40125","40131","40132","40133","40134","40135","40141","40142","40143","40151","40152","40153","40154","40161","40162","40163","40164","40171","40172","40173","40174","40175","40181","40182","40183","40184","40191","40192","40193","40195","40196","40197","40198","40211","40212","40213","40214","40215","40216","40217","40218","40221","40222","40223","40224","40225","40226","40227","40228","40229","40231","40232","40233","40234","40235","40236","40237","40238","40239","40241","40242","40243","40251","40252","40253","40254","40255","40256","40257","40258","40261","40262","40263","40264","40265","40266","40267","40271","40272","40273","40274","40275","40281","40282","40283","40284","40285","40286","40287","40288","40291","40292","40293","40294","40295","40374","40375","40376","40377","40378","40379","40381","40382","40383","40384","40385","40386","40391","40394","40395","40396","40511","40512","40513","40514","40521","40522","40523","40524","40525","40526","40531","40532","40533","40534","40535","40551","40552","40553","40554","40556","40558","40559","40561","40562","40563","40564","40565","40566","40611","40614","40615","40616","40617","40618","40619","40621","40622","40623","40624","40625","40626","40911","40912","40913","40914","40915","40921","40972","40973","41111","41112","41113","41114","41115","41116","41117","41118","41119","41151","41152","41161","41162","41163","41164","41165","41166","41167","41171","41172","41174","41175","41181","41211","41212","41213","41215","41251","41252","41253","41254","41255","41256","41257","41258","41259","41261","41262","41263","41271","41272","41281","41282","41283","41284","41285","41286","41311","41312","41314","41315","41316","41352","41353","41354","41355","41356","41357","41358","41361","41362","41363","41371","41372","41373","41374","41381","41382","41383","41384","41385","42111","42112","42113","42114","42115","42116","42117","42118","42119","42121","42122","42123","42124","42125","42126","42127","42128","42161","42162","42163","42164","42165","42166","42167","42168","42171","42172","42173","42174","42175","42176","42177","42178","42181","42182","42183","42184","42185","42186","42191","42192","42193","42194","42195","42196","42211","42212","42213","42214","42215","42216","42217","42218","42219","42251","42252","42253","42261","42262","42263","42264","42265","42271","42272","42273","42274","42275","42276","42277","42281","42282","42283","42284","42285","42286","42311","42312","42313","42314","42315","42316","42317","42318","42319","42352","42353","42354","42355","42356","42357","42361","42362","42363","42364","42371","42372","42381","42391","42392","42393","42394","42395","42396","42411","42412","42413","42414","42415","42416","42417","42418","42419","42422","42423","42424","42425","42426","42427","42431","42433","42434","42436","42437","42438","42439","42441","42442","42443","42444","42445","42446","42447","42453","42454","42455","43111","43112","43113","43114","43115","43116","43121","43122","43123","43131","43132","43133","43134","43135","43141","43142","43143","43144","43145","43151","43152","43153","43154","43155","43156","43157","43161","43162","43165","43166","43167","43168","43169","43171","43172","43173","43174","43175","43176","43177","43178","43179","43181","43182","43183","43184","43185","43186","43187","43191","43192","43193","43194","43196","43197","43211","43212","43213","43214","43215","43216","43252","43253","43254","43261","43262","43263","43264","43265","43266","43267","43268","43269","43271","43272","43273","43274","43275","43281","43282","43283","43284","43285","43291","43292","43351","43353","43354","43355","43356","43357","43358","43359","43361","43362","43363","43364","43365","43366","43367","43368","44111","44112","44113","44114","44115","44116","44117","44118","44119","44151","44152","44153","44161","44162","44163","44164","44165","44166","44167","44168","44171","44172","44173","44174","44175","44176","44177","44178","44181","44182","44183","44184","44185","44186","44187","44188","44191","44192","44193","45111","45112","45113","45114","45115","45116","45117","45118","45121","45122","45123","45131","45132","45133","45134","45141","45142","45143","45144","45145","45151","45152","45153","45154","45155","45156","45161","45162","45163","45164","45165","45166","45167","45171","45172","45173","45181","45182","45183","45185","45186","45187","45188","45189","45191","45192","45193","45211","45212","45213","45214","45215","45216","45217","45218","45219","45221","45222","45223","45224","45225","45226","45227","45228","45229","45252","45253","45254","45255","45256","45257","45258","45261","45262","45263","45264","45265","45271","45272","45273","45274","45281","45282","45283","45284","45285","45311","45313","45314","45315","45321","45322","45323","45353","45354","45355","45356","45361","45362","45363","45364","45365","45366","45371","45372","45373","45375","45376","45377","45381","45382","45383","45391","45392","45393","45411","45412","45414","45415","45416","45417","45418","45419","45452","45453","45454","45455","45456","45457","45458","45459","45461","45462","45463","45464","45465","45466","45467","45468","45471","45472","45473","45474","45475","45476","45511","45512","45513","45514","45515","45516","45517","45518","45521","45552","45553","45554","45555","45556","45557","45558","45559","45561","45562","45563","45564","45565","45566","45571","45572","45573","45574","45575","45576","45581","45582","45583","45584","45585","45586","45587","45588","45591","45592","45593","45594","45595","45611","45612","45613","45651","45652","46111","46112","46113","46114","46115","46121","46122","46123","46124","46125","46126","46131","46132","46133","46134","46151","46153","46155","46156","46158","46168","46175","46181","46182","46183","46184","46185","46186","46187","46188","46189","46192","46193","46194","46195","46196","46197","46198","46211","46212","46213","46214","46215","46216","46217","46218","46219","46252","46253","46254","46255","46256","46258","46261","46262","46263","46264","46267","46268","46271","46272","46273","46274","46311","46312","46313","46314","46315","46316","46317","46321","46322","46323","46324","46325","46326","46327","46331","46332","46333","46334","46335","46342","46343","46344","46352","46361","46365","46371","46372","46381","46382","46383","46384","46385","46386","46387","46388","46391","46392","46393","46394","46395","46396","46397","46411","46412","46413","46414","46415","46416","46417","46418","46461","46462","46463","46464","46465","46466","46471","46473","46474","46475","50111","50112","50113","50115","50116","50117","50118","50122","50123","50124","50125","50126","50131","50132","50133","50134","50135","50137","50138","50139","50141","50144","50145","50146","50147","50148","50149","50151","50152","50154","50155","50156","50162","50163","50164","50166","50171","50172","50173","50174","50175","50176","50177","50178","50179","50181","50182","50183","50184","50185","50186","50187","50188","50189","50192","50194","50196","50197","50198","50199","50211","50212","50213","50214","50215","50216","50217","50218","50219","50221","50222","50223","50224","50225","50226","50227","50228","50229","50231","50232","50233","50235","50237","50241","50242","50244","50245","50246","50248","50249","50252","50253","50254","50255","50256","50257","50261","50262","50263","50264","50265","50266","50267","50268","50269","50271","50272","50273","50274","50275","50276","50277","50278","50279","50511","50512","50513","50514","50515","50516","50517","50518","50519","50551","50552","50611","50612","50613","50614","50661","50662","50663","50664","50711","50712","50713","50714","50715","50716","50721","50722","50723","50724","50732","50733","50734","50735","50736","50741","50742","50743","50744","50745","50746","50771","50772","50773","50774","50775","50776","50777","51111","51112","51113","51116","51117","51122","51123","51124","51127","51128","51129","51132","51133","51134","51135","51137","51138","51139","51141","51143","51146","51147","51148","51149","51151","51152","51153","51155","51156","51161","51162","51163","51164","51171","51173","51174","51181","51182","51183","51191","51192","51193","51211","51212","51214","51215","51216","51252","51253","51254","51255","51261","51262","51271","51272","51273","51274","51281","51311","51312","51313","51314","51315","51316","51317","51318","51319","51351","51352","51353","51354","51355","51356","51357","51361","51362","51363","51364","51371","51372","51381","51382","51383","52111","52112","52114","52115","52117","52121","52122","52123","52124","52125","52131","52132","52133","52134","52135","52136","52137","52138","52141","52143","52144","52146","52147","52181","52182","52183","52184","52192","52193","52194","52211","52212","52213","52214","52215","52216","52217","52218","52219","52221","52222","52252","52253","52254","52255","52261","52262","52263","52264","52265","52266","52271","52272","52273","52274","52275","52276","52311","52312","52313","52314","52315","52316","52317","52318","52319","52352","52353","52354","52355","52356","52357","52361","52362","52363","52364","52365","52371","52411","52412","52413","52414","52415","52416","52418","52419","52451","52461","52462","52463","52464","52465","52466","52471","52472","52473","53111","53112","53113","53114","53115","53116","53121","53122","53123","53124","53125","53126","53127","53131","53132","53133","53134","53135","53136","53137","53141","53142","53144","53145","53146","53147","53151","53152","53161","53162","53163","53164","53165","53171","53172","53173","53174","53175","53176","53177","53181","53182","53183","53191","53192","53193","53194","53195","53196","53211","53212","53213","53215","53221","53222","53223","53224","53225","53231","53232","53233","53234","53235","53252","53253","53254","53255","53256","53257","53261","53262","53263","53264","53265","53266","53271","53272","53273","53274","53281","53282","53283","53311","53312","53313","53314","53315","53316","53317","53318","53319","53321","53331","53352","53353","53354","53355","53356","53357","53361","53362","53371","53372","53381","53382","53391","53392","53393","53411","53412","53413","53414","53416","53417","53418","53452","53453","53454","53455","53456","53457","53458","53461","53462","53463","53471","53472","53473","53474","53475","53481","53482","54112","54113","54114","54115","54116","54117","54118","54119","54151","54171","54172","54173","54174","54175","54181","54183","54191","54211","54212","54214","54215","54222","54223","54224","54251","54261","54262","54263","54264","54265","54311","54312","54313","54314","54315","54316","54317","54352","54353","54361","54362","54363","54364","54365","54366","54381","54382","54383","54391","54392","54393","54394","54395","54411","54412","54413","54414","54416","54421","54472","54473","54474","55111","55112","55121","55122","55131","55132","55133","55141","55142","55143","55151","55152","55153","55161","55162","55163","55164","55165","55166","55167","55171","55172","55173","55181","55182","55183","55184","55185","55186","55188","55191","55192","55193","55194","55195","55196","55197","55198","55211","55212","55213","55221","55222","55223","55224","55225","55231","55232","55233","55241","55242","55243","55244","55251","55252","55253","55261","55262","55264","55271","55272","55281","55282","55283","55284","55285","55286","55287","55288","55291","55293","55294","55295","55511","55512","55513","55514","55515","55551","55552","55561","55562","55563","55571","55572","55573","55581","55582","55583","55584","55592","55651","55652","55653","55654","55655","55661","55663","55664","55671","55672","55673","55674","55711","55712","55713","55714","55715","55751","55752","55761","55762","55763","55764","55771","55772","55781","55782","55783","55791","55792","55811","55813","55851","55852","55853","55854","55861","55862","55863","55871","55872","55881","55883","55891","55892","55893","56111","56112","56113","56114","56115","56116","56117","56121","56122","56123","56124","56125","56126","56127","56151","56152","56153","56161","56162","56163","56172","56191","56192","56193","56194","56195","56196","56211","56212","56213","56214","56215","56216","56217","56218","56221","56222","56223","56224","56225","56226","56227","56228","56229","56252","56253","56254","56255","56256","56257","56258","56259","56261","56262","56263","56264","56265","56266","56271","56272","56281","56282","56283","56311","56312","56313","56314","56315","56316","56317","56318","56319","56351","56352","56353","56354","56361","56362","56364","56365","56371","56372","56373","56374","56411","56412","56413","56414","56415","56481","56482","56483","56484","56485","56511","56512","56553","57116","57118","57121","57122","57125","57126","57127","57128","57129","57131","57132","57133","57134","57135","57136","57137","57138","57139","57141","57142","57143","57144","57145","57146","57147","57148","57149","57151","57152","57153","57154","57155","57156","57157","57161","57162","57163","57164","57165","57166","57168","57169","57171","57172","57173","57174","57175","57176","57177","57178","57179","57181","57188","57191","57199","57211","57212","57213","57214","57215","57216","57221","57222","57252","57253","57254","57256","57261","57262","57263","57271","57272","57274","57275","57276","57277","57281","57282","57283","57292","57293","57311","57312","57313","57314","57315","57316","57321","57322","57323","57331","57352","57362","57363","57372","57373","57374","57375","57376","57377","57378","57381","57382","57383","57384","57385","57391","57411","57412","57413","57414","57415","57416","57417","57418","57419","57421","57422","57423","57424","57425","57426","57432","57433","57434","57435","57437","57438","57451","57452","57454","57455","57461","57462","57463","57464","57465","57466","57467","57468","57471","57472","57473","57474","57475","57481","57482","57483","57484","57485","57486","57511","57512","57513","57514","57516","57519","57521","57524","57527","57528","57551","57552","57554","57555","57556","57557","57561","57562","57563","57571","57611","57612","57613","57614","57615","57652","57661","57662","57663","57664","57671","57672","57673","57674","57675","57677","57678","57681","57682","57683","57691","57692","57693","57694","57695","57696","57697","57698","57711","57712","57713","57714","57715","57716","57721","57722","57731","57752","57753","57762","57781","57782","57783","57784","57785","57791","57792","57793","57794","58111","58112","58113","58114","58152","58153","58154","58161","58162","58163","58164","58165","58166","58167","58171","58172","58181","58182","58183","58191","58192","58193","58211","58212","58213","58214","58215","58216","58217","58218","58219","58252","58253","58254","58255","58256","58257","58261","58262","58311","58312","58313","58314","58315","58371","58372","58381","58382","58383","58384","59111","59112","59113","59114","59115","59116","59117","59118","59119","59152","59153","59154","59155","59156","59157","59158","59161","59162","59163","59171","59172","59173","59174","59181","59182","59183","59184","59185","59186","59211","59212","59213","59214","59215","59217","59218","59219","59252","59253","59254","59255","59261","59262","59263","59264","59265","59271","59272","59273","59274","59311","59312","59313","59314","59315","59316","59317","59318","59319","59321","59322","59323","59324","59325","59326","59327","59332","59333","59341","59342","59343","59344","59346","59347","59348","59349","59353","59372","59381","59382","59411","59412","59413","59414","59415","59416","59417","59418","59419","59421","59422","59423","59424","59425","59426","59427","59428","59429","59431","59432","59451","59452","59453","59454","59455","59461","59462","59463","59464","59465","59466","59511","59512","59513","59514","59515","59516","59517","59552","59554","59561","59563","59565","59566","59567","59571","59573","59581","59582","59583","60111","60112","60113","60114","60115","60116","60117","60118","60119","60122","60123","60124","60125","60126","60127","60128","60129","60131","60132","60133","60134","60135","60136","60137","60138","60141","60142","60143","60144","60145","60151","60152","60153","60154","60155","60161","60162","60163","60164","60165","60171","60172","60173","60174","60175","60176","60177","60178","60179","60182","60183","60184","60185","60186","60187","60188","60189","60191","60192","60195","60196","60197","60198","60199","60211","60212","60213","60214","60215","60216","60217","60218","60219","60221","60222","60223","60224","60225","60226","60227","60228","60229","60231","60232","60233","60234","60235","60236","60237","60238","60239","60241","60242","60243","60244","60245","60246","60251","60252","60253","60254","60255","60256","60261","60262","60263","60264","60265","60271","60272","60273","60274","60275","60281","60282","60283","60284","60285","60286","60291","60292","60293","60294","60295","60296","60297","60298","60299","61111","61112","61113","61114","61115","61116","61117","61118","61119","61121","61122","61123","61124","61151","61152","61153","61154","61155","61156","61162","61171","61172","61173","61174","61175","61176","61177","61181","61182","61212","61213","61214","61215","61216","61217","61218","61219","61223","61224","61225","61226","61228","61231","61233","61234","61252","61253","61254","61256","61257","61258","61261","61262","61263","61264","61265","61271","61272","61273","61274","61275","61276","61311","61312","61313","61314","61315","61316","61317","61318","61319","61321","61322","61323","61324","61325","61326","61327","61328","61351","61352","61353","61354","61361","61362","61363","61364","61371","61372","61373","61374","61375","61381","61382","61383","61384","61385","61411","61412","61413","61415","61416","61417","61418","61419","61452","61453","61454","61455","61456","61457","61461","61462","61463","61471","61473","61474","61475","61476","61481","61482","61483","61484","61485","62111","62112","62113","62114","62115","62118","62119","62152","62153","62154","62155","62161","62162","62164","62165","62166","62167","62168","62171","62172","62181","62182","62183","62184","62191","62192","62193","62194","62195","62211","62212","62213","62214","62215","62216","62217","62218","62252","62253","62254","62255","62256","62257","62261","62262","62263","62264","62265","62271","62272","62273","62274","62275","62276","62281","62282","62283","62284","62291","62292","62293","62311","62312","62313","62314","62315","62316","62317","62318","62319","62352","62353","62354","62355","62356","62357","62361","62362","62363","62364","62365","62366","62371","62372","62381","62382","62383","62391","63111","63112","63113","63117","63118","63119","63121","63122","63123","63125","63126","63127","63128","63129","63131","63132","63133","63134","63135","63136","63137","63138","63139","63151","63152","63153","63154","63155","63156","63157","63161","63162","63171","63172","63173","63174","63181","63182","63211","63212","63214","63215","63216","63217","63218","63252","63253","63254","63256","63257","63261","63262","63263","63264","63271","63281","63282","63283","63284","63285","63311","63312","63313","63315","63316","63317","63318","63319","63351","63352","63361","63362","63371","63372","63382","63383","63384","63391","63392","63395","63411","63412","63413","63414","63415","63416","63417","63418","63419","63451","63453","63454","63455","63456","63461","63462","63463","63464","63471","63472","63473","63474","63475","63481","63482","63491","63492","63493","63511","63512","63513","63514","63515","63516","63517","63518","63552","63553","63554","63561","63571","63572","63573","63581","63582","63583","63584","64111","64112","64113","64114","64115","64116","64117","64118","64119","64121","64122","64123","64124","64125","64126","64127","64128","64129","64131","64132","64133","64134","64135","64136","64137","64138","64139","64151","64152","64153","64154","64155","64156","64157","64161","64162","64171","64172","64173","64174","64175","64176","64181","64182","64183","64211","64212","64213","64214","64215","64216","64217","64218","64219","64221","64222","64223","64224","64225","64226","64227","64228","64229","64291","64292","64293","64294","64311","64312","64313","64314","64315","64391","64392","64393","64394","64395","64411","64413","64415","64416","64417","64418","64419","64451","64452","64453","64461","64462","64471","64472","64473","64474","64475","64481","64482","64484","65111","65112","65113","65115","65116","65117","65118","65119","65121","65122","65123","65124","65125","65126","65132","65133","65134","65135","65136","65137","65138","65139","65141","65142","65143","65144","65145","65146","65147","65148","65149","65151","65152","65153","65154","65155","65156","65157","65158","65162","65163","65164","65165","65166","65167","65168","65171","65172","65173","65174","65175","65176","65178","65179","65181","65182","65183","65211","65213","65214","65215","65216","65311","65312","65313","65314","65315","65316","65317","65318","65321","65322","65323","65324","65325","65326","65327","65331","65332","65333","65334","65335","65336","65337","65338","65391","65392","65393","66113","66114","66115","66116","66117","66121","66122","66124","66125","66126","66133","66134","66135","66136","66137","66151","66152","66153","66154","66155","66161","66163","66171","66172","66173","66174","66181","66182","66183","66184","66186","66187","66191","66192","66193","66194","66212","66213","66214","66215","66216","66217","66218","66219","66221","66222","66223","66224","66225","66226","66227","66228","66229","66231","66232","66233","66234","66235","66252","66253","66254","66261","66262","66263","66272","66273","66274","66275","66281","66283","66284","66291","66292","66293","66311","66312","66313","66314","66315","66316","66317","66318","66319","66351","66352","66361","66362","66363","66364","66365","66371","66372","66373","66381","66382","67111","67112","67113","67114","67115","67116","67117","67118","67123","67124","67125","67126","67127","67128","67129","67131","67132","67133","67134","67135","67136","67137","67138","67139","67151","67152","67153","67154","67155","67156","67157","67161","67162","67163","67165","67171","67172","67173","67174","67175","67176","67177","67181","67182","67183","67184","67185","67186","67211","67212","67213","67214","67215","67216","67217","67218","67219","67221","67222","67223","67224","67225","67226","67227","67228","67229","67231","67232","67233","67236","67237","67238","67239","67251","67252","67253","67254","67255","67261","67262","67263","67271","67272","67273","67274","67275","67276","67281","67282","67283","67284","67287","67288","67291","67292","67293","67311","67312","67313","67314","67315","67316","67352","67353","67354","67355","67356","67357","67358","67359","67361","67371","67372","67373","67374","67375","67381","67382","67383","68111","68112","68113","68114","68116","68117","68118","68121","68122","68124","68125","68126","68131","68132","68133","68135","68136","68137","68151","68152","68153","68154","68155","68156","68157","68161","68162","68164","68165","68166","68167","68168","68171","68172","68173","68174","68175","68181","68182","68184","68191","68192","68193","68194","68195","68196","68211","68212","68213","68214","68215","68216","68217","68218","68219","68251","68252","68253","68261","68262","68263","68271","68272","68281","68282","68283","68284","68285","68286","68287","68288","68291","68311","68312","68313","68314","68315","68316","68321","68322","68323","68351","68352","68353","68354","68355","68356","68357","68358","68359","68362","68363","68371","68372","68373","68374","68411","68412","68413","68414","68415","68416","68417","68418","68419","68421","68422","68423","68424","68425","68431","68432","68453","68454","68455","68461","68462","68463","68464","68465","68466","68467","68468","68471","68472","68482","68483","68484","68485","68486","68487","68488","69112","69113","69114","69115","69116","69118","69119","69121","69151","69152","69153","69154","69155","69156","69161","69162","69163","69165","69166","69172","69173","69174","69175","69212","69215","69216","69252","69253","69254","69261","69262","69263","69271","69272","69273","69281","69291","69311","69312","69314","69316","69317","69321","69323","69352","69353","69354","69355","69356","69361","69362","69363","69371","69382","69383","69412","69413","69414","69415","69416","69417","69451","69452","69453","69454","69455","69456","69457","69461","69462","69463","69465","69466","69467","69471","69472","69473","69474","69481","69482","69483","69484","69485","69491","69492","69493","70111","70112","70113","70114","70115","70116","70117","70118","70119","70121","70122","70123","70124","70125","70126","70127","70128","70129","70231","70233","70234","70235","70236","70237","70238","70239","70241","70242","70243","70244","70245","70246","70247","70248","70249","70511","70512","70513","70552","70553","70561","70562","70563","70564","70565","70566","70567","70568","70571","70581","70582","70611","70612","70613","70614","70615","70616","70617","70618","70619","70652","70653","70654","70655","70661","70671","70672","70673","70674","70675","70713","70714","70721","70722","70723","70724","70731","70732","70733","70734","70812","70814","70815","70852","70853","70854","70861","70871","70881","70882","70883","71111","71112","71113","71114","71152","71153","71154","71161","71162","71171","71181","71183","71184","71185","71191","71211","71213","71214","71215","71216","71217","71252","71253","71261","71262","71271","71281","71282","71291","71292","71311","71312","71313","71314","71315","71352","71361","71362","71363","71371","71372","71381","71382","71391","71412","71413","71414","71416","71417","71418","71419","71452","71453","71454","71455","71471","71512","71513","71514","71515","71552","71553","71554","71555","71561","71571","71572","71573","71574","71575","71614","71616","71617","71618","71661","71662","71663","71664","71665","71666","72111","72112","72113","72114","72115","72116","72117","72152","72153","72154","72155","72156","72161","72162","72163","72164","72165","72166","72167","72168","72169","72181","72211","72212","72213","72214","72215","72216","72217","72218","72271","72272","72273","72274","72275","73111","73112","73113","73114","73118","73221","73222","73223","73224","73225","73226","73227","73228","73229","73511","73512","73513","73514","73515","73516","73521","73522","73523","73524","73525","73552","73553","73554","73555","73564","73581","73583","73592","73593","73612","73613","73614","73615","73617","73618","73652","73653","73661","73671","73681","73711","73712","73713","73751","73752","73753","73761","73762","73763","73811","73812","73813","73814","73852","73861","73862","73871","73881","73911","73961","73971","73981","73991","74111","74112","74113","74114","74115","74116","74117","74152","74161","74162","74171","74172","74173","74181","74183","74184","74213","74214","74215","74261","74271","74281","74291","74311","74312","74313","74314","74315","74316","74321","74322","74323","74324","74325","74326","74352","74353","74354","74355","74356","74361","74362","74363","74413","74452","74453","74454","74455","74456","74457","74461","74462","74463","74511","74552","74553","74561","74562","74571","74581","74611","74612","74663","74664","74812","74813","74816","74821","74831","74841","74861","74862","74863","74871","74872","74873","74874","75111","75112","75113","75114","75115","75116","75117","75118","75119","75121","75122","75123","75124","75125","75126","75127","75128","75131","75133","75241","75242","75243","75251","75253","75254","75256","75261","75262","75263","75264","75265","75266","75267","75271","75273","75274","75276","75277","75279","75311","75312","75313","75314","75321","75324","75325","75381","75382","75383","75385","75391","75511","75512","75513","75514","75515","75517","75552","75553","75555","75556","75557","75558","75559","75561","75562","75564","75571","75572","75576","75618","75619","75654","75655","75656","75683","75684","75685","75763","75765","75766","75767","75768","75769","75772","75773","75774","75775","75776","75777","75778","75779","76111","76112","76113","76114","76115","76116","76117","76118","76121","76122","76123","76124","76125","76127","76128","76129","76131","76132","76133","76134","76136","76141","76142","76143","76144","76145","76146","76147","76148","76149","76251","76252","76253","76261","76271","76281","76282","76283","76284","76285","77111","77112","77113","77114","77115","77116","77123","77124","77125","77126","77152","77155","77211","77212","77214","77215","77216","77217","77261","77263","77281","77311","77312","77313","77315","77352","77361","77362","77371","77372","77373","77381","77453","77456","77457","77482","77483","77554","77555","77562","77571","77572","77573","78111","78112","78113","78114","78115","78116","78117","78121","78122","78123","78124","78132","78137","78231","78233","78234","78235","78236","78241","78242","78243","78244","78351","78353","78355","78361","78371","78381","78382","78383","78384","78385","78391","78392","78393","78511","78512","78513","78514","78515","78516","78552","78553","78554","78555","78556","78557","78561","78562","78563","78564","78571","78572","78581","78591","78611","78612","78613","78614","78615","78616","78617","78618","78619","78652","78653","78654","78655","78656","78661","78662","78663","78683","78684","78691","78693","78694","78714","78715","78716","78752","78753","78754","78755","78756","78757","78758","78759","78761","78762","78763","78764","78765","78766","78767","78768","78769","78771","78772","78773","78774","78775","78811","78812","78813","78821","78822","78852","78853","78854","78855","78856","78857","78862","78863","78864","78871","78872","78873","78874","78876","78911","78912","78913","78914","78915","78916","78917","78918","78919","79111","79112","79113","79114","79115","79116","79121","79122","79123","79124","79151","79154","79163","79181","79211","79212","79213","79214","79251","79271","79281","79283","79284","79285","79286","79355","79356","79357","79358","79362","79363","79364","79365","79366","79367","79417","79452","79453","79454","79461","79462","79463","79465","79466","79467","79511","79512","79513","79514","79515","79516","79582","79583","79584","79585","79586","79587","79588","79671","79672","79673","79674","79675","79681","79682","80111","80112","80113","80114","80115","80116","80117","80118","80119","80221","80222","80223","80224","80225","80226","80227","80228","80229","80231","80232","80233","80234","80235","80236","80237","80238","80239","80351","80352","80353","80361","80511","80512","80513","80515","80552","80561","80571","80572","80581","80582","80611","80612","80613","80614","80652","80661","80671","80711","80712","80713","80716","80752","80761","80771","80811","80813","80852","80853","80861","80862","80863","80864","80871","81111","81112","81113","81114","81115","81116","81117","81118","81119","81152","81153","81154","81155","81161","81171","81172","81173","82111","82112","82113","82114","82115","82121","82123","82152","82161","82162","82163","82181","82191","82211","82212","82213","82214","82215","82216","82218","82252","82261","82262","83112","83113","83114","83115","83116","83117","83118","83121","83122","83123","83124","83125","83126","83127","83232","83233","83236","83237","83238","83239","83351","83352","83353","83354","83355","83361","83362","83363","83364","83365","83371","83511","83512","83513","83514","83515","83516","83518","83519","83521","83522","83523","83552","83553","83554","83561","83562","83571","83572","83573","83581","83582","83611","83612","83613","83614","83615","83616","83617","83618","83619","83652","83653","83654","83656","83661","83662","83663","83671","83672","84111","84112","84113","84114","84115","84116","84117","84118","84119","84152","84153","84161","84162","84171","84172","84173","84181","84182","84191","84211","84212","84213","84214","84216","84217","84218","84219","84251","84252","84253","84261","84271","84272","84311","84312","84313","84314","84315","84316","84317","84318","84352","84353","84361","84371","84372","84373","84381","84382","84383","84384","84454","84455","84456","84457","84458","85111","85112","85116","85118","85119","85141","85142","85143","85144","85146","85147","85148","85221","85223","85225","85226","85227","85228","85229","85231","85232","85233","85234","85235","85236","85237","85238","85239","85351","85353","85361","85362","85363","85364","85365","85367","85368","85369","85391","85392","85393","85511","85514","85515","85516","85517","85519","85551","85552","85561","85562","85563","85571","85572","85573","85574","85575","85611","85612","85613","85614","85615","85616","85617","85651","85661","85671","85681","85682","85711","85712","85713","85714","85715","85716","85717","85718","85752","85761","85762","85763","85764","85765","85766","85771","85772","85773","85811","85812","85813","85814","85815","85816","85817","85819","85851","85861","85871","85872","85881","85912","85913","85914","85916","85917","85918","85972","85973","85974","85981","85982","85983","86111","86112","86113","86114","86115","86116","86118","86152","86153","86161","86171","86181","86183","86211","86212","86213","86214","86215","86216","86217","86219","86252","86253","86261","86262","86271","86272","86312","86313","86314","86315","86316","86317","86318","86319","86352","86353","86361","86362","86371","86372","86374","86375","86376","86377","86378","86379","86381","86382","86411","86412","86413","86414","86415","86416","86417","86418","86419","86452","86461","86462","86463","86464","86472","86511","86512","86513","86514","86515","86516","86517","86518","86519","86561","86571","86572","86581","86582","86583","86584","86591","86592","86611","86612","86613","86615","86616","86681","86682","86683","86684","86685","86691","86692","86752","86753","86754","86756","86757","87111","87112","87113","87114","87115","87116","87152","87153","87161","87171","87172","87181","87182","87211","87212","87213","87214","87215","87216","87217","87252","87253","87254","87255","87257","87258","87261","87262","87263","87271","87272","87282","87283","87284","90111","90112","90113","90114","90115","90121","90122","90123","90125","90126","90131","90132","90133","90134","90135","90141","90142","90143","90144","90145","90151","90152","90153","90154","90155","90156","90157","90161","90162","90163","90164","90165","90166","90167","90168","90171","90172","90173","90174","90211","90212","90213","90214","90215","90216","90217","90221","90222","90223","90224","90225","90231","90232","90233","90234","90235","90241","90242","90243","90244","90245","90511","90512","90513","90514","90515","90516","90552","90553","90554","90561","90562","90563","90611","90612","90613","90614","90615","90616","90617","90618","90619","90651","90653","90654","90655","90661","90671","90672","90673","90711","90712","90752","90753","90761","90762","90811","90812","90813","90814","90852","90853","90861","90862","90871","90911","90912","90913","90914","90915","90916","90917","90918","90951","90952","90953","90954","90961","90971","90981","90982","90983","90984","90991","90992","90993","91111","91112","91113","91114","91121","91122","91123","91125","91131","91132","91133","91211","91212","91213","91214","91215","91216","91217","91218","91219","91221","91252","91253","91254","91256","91261","91262","91271","91272","91311","91312","91313","91314","91315","91351","91352","91353","91354","91355","91361","91362","91363","91364","91365","91366","91371","91372","91373","91411","91412","91413","91414","91415","91451","91452","91453","91511","91512","91513","91514","91515","91561","91562","91563","91571","91572","91573","91574","91611","91613","91614","91615","91616","91651","91652","91653","91661","91662","91671","91672","91681","91682","91683","91691","91711","91712","91752","91753","91754","91761","91811","91812","91813","91814","91815","91817","91831","91832","91833","91834","91835","91852","91853","91854","91855","91856","91861","91862","91871","91872","91873","91881","91911","91912","91913","91914","91921","91922","91923","91924","91925","91926","91951","91952","91958","91959","91966","91981","91991","91992","91993","91994","91995","91996","91997","91998","91999","92111","92112","92113","92114","92115","92116","92117","92118","92119","92152","92153","92161","92171","92173","92174","92175","92176","92211","92215","92221","92231","92232","92252","92254","92255","92261","92311","92312","92313","92314","92315","92316","92351","92352","92361","92371","92411","92412","92413","92414","92415","92451","92461","92511","92513","92514","92516","92517","92518","92552","92561","92571","92572","92573","92574","92611","92612","92613","92614","92615","92616","92652","92653","92654","92661","92662","92671","92711","92712","92713","92714","92715","92716","92717","92718","92719","92721","92731","92732","92733","92734","92735","92752","92753","92754","92755","92761","92762","92763","92764","92765","92766","92767","92768","92771","92772","92773","92774","92775","92776","92781","92811","92812","92851","92854","92855","92861","92862","92863","92912","92913","92914","92915","92916","92917","92932","92933","92935","92936","92937","92953","92954","92955","92956","92957","92961","92963","92964","92965","92971","92972","92973","92975","92981","92982","92983","92985","93111","93112","93113","93114","93115","93116","93117","93118","93121","93122","93123","93124","93125","93126","93127","93128","93129","93231","93232","93233","93234","93235","93236","93237","93238","93351","93352","93353","93354","93393","93395","93411","93412","93413","93414","93415","93416","93417","93418","93419","93452","93461","93463","93464","93511","93512","93514","93515","93517","93518","93519","93552","93561","93562","93563","93571","93572","93573","93575","93611","93612","93613","93614","93615","93616","93618","93652","93653","93654","93655","93656","93657","93658","93659","93661","93662","93663","93664","93671","93672","93673","93674","93711","93712","93713","93714","93715","93716","93717","93719","93721","93722","93724","93725","93726","93727","93752","93753","93754","93755","93756","93757","93758","93761","93762","93763","93771","93772","93773","93774","93781","93783","93791","93792","93793","93794","93795","93811","93812","93813","93814","93815","93816","93818","93819","93871","93873","93874","93875","93881","93883","93884","93885","93891","93892","93911","93912","93913","93914","93915","93916","93954","93955","93956","93957","93958","94111","94112","94115","94116","94118","94119","94141","94142","94143","94145","94146","94147","94148","94221","94222","94223","94225","94226","94227","94228","94229","94231","94232","94233","94234","94235","94236","94237","94238","94239","94351","94352","94353","94354","94355","94356","94361","94362","94363","94364","94471","94473","94474","94475","94476","94479","94511","94512","94513","94514","94515","94516","94517","94518","94552","94553","94554","94561","94562","94563","94564","94565","94566","94567","94568","94611","94612","94613","94614","94615","94616","94617","94618","94619","94652","94653","94654","94661","94663","94664","94681","94682","94683","94684","94691","94692","94711","94712","94713","94714","94717","94723","94752","94753","94761","94762","94765","94771","94772","94773","94881","94882","94883","94884","94885","94891","94892","94965","94966","94971","94972","94973","94974","94975","94976","95111","95112","95113","95114","95115","95116","95117","95118","95119","95121","95122","95123","95124","95125","95126","95127","95128","95129","95161","95162","95163","95231","95232","95234","95238","95239","95246","95249","95251","95252","95253","95254","95256","95257","95258","95259","95352","95355","95357","95371","95372","95373","95375","95376","95377","95378","95379","95411","95412","95413","95414","95415","95416","95417","95418","95419","95421","95422","95423","95424","95425","95431","95432","95433","95434","95435","95436","95437","95438","95439","95441","95442","95443","95444","95445","95446","95447","95449","95511","95512","95513","95514","95515","95516","95521","95522","95523","95524","95525","95526","95527","95528","95529","95531","95532","95533","95535","95536","95537","95538","95539","95541","95542","95543","95544","95545","95546","95547","95551","95552","95553","95554","95555","95556","95557","95558","95559","95611","95612","95613","95614","95615","95616","95617","95618","95619","95651","95661","95681","95682","95683","95684","95691","95692","95693","95694","95711","95712","95713","95714","95715","95716","95717","95718","95719","95751","95752","95753","95761","95762","95763","95764","95765","95771","95772","95773","95774","95775","95781","95782","95811","95812","95813","95814","95815","95816","95817","95818","95852","95853","95854","95855","95856","95857","95858","95861","95862","95863","95864","95871","95872","95881","95882","95883","95884","95885","95953","95954","95955","95956","95958","95959","95995","95996","95997","95998","95999","96111","96112","96113","96114","96115","96116","96117","96118","96119","96121","96122","96123","96124","96125","96126","96127","96128","96129","96131","96132","96133","96134","96135","96136","96137","96138","96139","96181","96211","96212","96213","96214","96215","96216","96217","96218","96219","96251","96252","96253","96254","96261","96262","96263","96264","96265","96266","96271","96272","96365","96466","96467","96468","96469","96524","96525","96582","96583","96584","96585","97111","97112","97113","97114","97115","97116","97117","97118","97121","97122","97123","97124","97125","97126","97127","97128","97129","97231","97232","97233","97234","97235","97236","97237","97452","97453","97454","97463","97464","97511","97512","97513","97514","97515","97516","97553","97554","97555","97557","97558","97561","97562","97566","97567","97571","97572","97573","97574","97581","97582","97591","97592","97593","97594","97595","97596","97597","97598","97599","97611","97615","97652","97661","97662","97663","97664","97665","97666","97667","97668","97711","97712","97713","97714","97715","97716","97717","97718","97719","97721","97722","97723","97724","97725","97726","97727","97728","97729","97751","97752","97753","97754","97755","97756","97761","97762","97764","97771","97772","97773","97774","97775","97776","97777","97781","97782","97783","97791","97792","97793","97794","97795","97811","97812","97813","97852","97853","97854","97862","97863","98111","98112","98113","98114","98115","98116","98118","98119","98152","98153","98154","98155","98156","98157","98158","98161","98162","98171","98172","98211","98212","98213","98214","98215","98252","98253","98254","98255","98261","98262","98263","98311","98312","98313","98314","98315","98352","98353","98354","98355","98356","98357","98358","98359","98361","98362","98363","98364","98365","98371","98372","98373","98411","98412","98413","98414","98415","98416","98417","98418","98419","98451","98452","98453","98454","98455","98456","98457","98461","98462","98463","98471","98472","98473","98474","98481","98482","98483","98484","98611","98652","98653","98654","98655","98656","98661","98662","98711","98712","98713","98714","98715","98716","98717","98718","98719","98721","98722","98723","98724","98725","98726","98727","98763","98764","98766","98767","98768","98769","98781","98782","98783","98784","98811","98812","98813","98814","98815","98816","98817","98818","98852","98853","98854","98856","98857","98861","98862","98863","98911","98912","98913","98914","98915","98916","98917","98918","98971","98972","98973","98976","99111","99112","99113","99114","99115","99116","99117","99221","99222","99223","99224","99225","99226","99351","99352","99353","99354","99355","99356","99357","99358","99359","99361","99362","99364","99371","99372","99373","99374","99375","99376","99377","99465","99466","99467","99468","99469","99511","99552","99553","99554","99555","99556","99557","99558","99561","99562","99563","99564","99565","99566","99567","99568","99569","99571","99572","99573","99574","99575","99576","99577","99578","99582","99583","99584","99585","99586","99587","99611","99612","99613","99614","99615","99616","99651","99652","99654","99655","99656","99661","99662","99663","99664","99665","99766","99773","99776","99777","99778","99779","99782","99853","99871","99872","99874","99875","99881","99910","99963","99964","99965","99966","99967","99968","99971","99972","99973","99974"];
</script>

<div class="ask-question-container">
        <div class="form-title stellar">
        Ask a Question    </div>
    <div class="show-popup-block pc-contact-form-1">
        <div class="popTitle">
            Ask a Question            <span class="close"></span>
        </div>

            <div id="pccf_form_1"
                 class="pccf default labelabove "
                 style="max-width:2000px;">
                <img class="pccf_loader" src="https://id-media.apjonlinecdn.com/static/version1640122770/frontend/HPOLS/stellar/en_AU/PluginCompany_ContactForms/img/gears-anim.gif" style="position:absolute;left:50%;top:50%;margin-left:-90px;margin-top:-80px" />

                <div class="form-view pccformwrapper well " style="position:relative;visibility:hidden;">
                                            <div class="messages"></div>
                        <div class="form-horizontal pccform" method="post" action="https://www.hp.com/id-en/shop/contactforms/form/submit/" data-mage-init='{"validation":{}}'>
                            <fieldset>    <!-- Form Name --><!-- Text input--><div class="form-group required-control ">  <label class="col-md-3 control-label" for="fulltname">Full Name</label>  <div class="col-md-6">    <input id="fulltname" name="fulltname" type="text" placeholder="Please enter your full name" class="form-control  required-entry  " value="">      </div></div><!-- Text input--><div class="form-group required-control ">  <label class="col-md-3 control-label" for="email">Email</label>  <div class="col-md-6">    <input id="email" name="email" type="text" placeholder="Please enter your email address" class="form-control  required-entry validate-email " value="">      </div></div><!-- Text input--><div class="form-group required-control ">  <label class="col-md-3 control-label" for="phone-number">Phone number</label>  <div class="col-md-6">    <input id="phone-number" name="phone-number" type="text" placeholder="Please enter your phone number" class="form-control  required-entry  " value="">      </div></div><!-- Textarea --><div class="form-group required-control ">  <label class="col-md-3 control-label" for="product">I have an enquiry about this product</label>  <div class="col-md-8">    <textarea id="product" name="product" class="form-control  required-entry  " placeholder="">OMEN by HP Gaming Laptop 16-c0099AX488F4PA</textarea>  </div></div><!-- Textarea --><div class="form-group required-control ">  <label class="col-md-3 control-label" for="message">Enquiry message</label>  <div class="col-md-8">    <textarea id="message" name="message" class="form-control  required-entry  " placeholder="Type your message here"></textarea>  </div></div><div class="form-group ">  <label class="col-md-3 control-label" for="captcha">ReCaptcha</label>  <div class="col-md-8 captcha">      <div class="g-recaptcha" data-sitekey="6LeeUtwZAAAAAD3OtImYt6ea1_5e3Z9D_chCsm0g"></div>  </div></div><!-- Button --><div class="form-group ">  <label class="col-md-3 control-label" for="submitform"></label>  <div class="col-md-6">    <button id="submitform" name="submitform" type="submit" class="btn btn-primary">Submit</button>  </div></div></fieldset>                        </div>
                                        </div>
            </div>
        </div>
    </div>

<script type="text/x-magento-init">
{
    ".pc-contact-form-1": {
        "PluginCompany_ContactForms/js/form": {"formId":"1","theme":"default","recaptchaKey":"6LeeUtwZAAAAAD3OtImYt6ea1_5e3Z9D_chCsm0g","uploadUrl":"https:\/\/www.hp.com\/id-en\/shop\/contactforms\/form\/upload\/form_id\/1\/","removeUrl":"https:\/\/www.hp.com\/id-en\/shop\/contactforms\/form\/removeupload\/form_id\/1\/","hasVCaptcha":false,"visualCaptcha":{"mainUrl":"https:\/\/www.hp.com\/id-en\/shop\/contactforms\/form_visualcaptcha","imgUrl":"https:\/\/id-media.apjonlinecdn.com\/static\/version1640122770\/frontend\/HPOLS\/stellar\/en_AU\/PluginCompany_ContactForms\/js\/lib\/visualcaptcha\/img\/"},"hasReCaptcha":true,"hasUploadField":false,"hasDependendFields":false,"dependentFields":"[]","submitJs":"var pccf = document.getElementsByClassName(\"pccf default\")[0];\r\nvar fieldset = pccf.getElementsByTagName(\"fieldset\")[0];\r\nfieldset.style.display=\"none\";\r\n\r\n\r\n\r\n","beforeSubmitJs":"var pccf = document.getElementsByClassName(\"pccf default\")[0];\r\nvar fieldset = pccf.getElementsByTagName(\"fieldset\")[0];\r\nvar button = pccf.getElementsByTagName(\"button\")[0];\r\nbutton.disabled=true;\r\n\r\n\r\n\r\n","pageloadJs":"\/\/enter javascript here\r\n\r\n\r\n\r\n\r\n","rtl":false,"widget":{"type":"PluginCompany\\ContactForms\\Block\\Form\\Widget\\View","form_id":"1","show_form_as":"form","module_name":"PluginCompany_ContactForms"},"maxUploadSize":16}    }
}
</script>

            <style type="text/css">
            .pccf.default {
  	font-family:'HP Simplified Light'!important;
}
.pccf.default label {
  	font-family:'HP Simplified Light'!important;
  	font-size:1.5rem!important;
  	font-weight:100!important;
}
.pccf.default .btn-primary {
  font-family:'HP Simplified Regular'!important;
  background-color:#0199d5!important;
}
.pccf.default .btn-primary:hover {
  font-family:'HP Simplified Regular'!important;
  background-color:#FFFFFF!important;
  border-color:#000000!important;
  color:#000000!important;
}
.pccf.default .well {
	background-color: transparent!important;;
}
.pccf.default .form-control {
  	border-radius: 0px!important;
}
.pccf.default .form-horizontal .control-label {
  	margin-bottom: 10px!important;
}
.pccf.default .well {
  	border-radius: 0!important;
}
.pccf.default .well {
   border: 0px solid #e3e3e3!important;
}
.pccf.default .form-control {
  	height:40px!important;
}
.product-item .block-content.product-desc-feature-icons .feature-icons {
	padding: 0!important;
}
.overview {
	padding: 0 !important;
}        </style>
    
<script>
    require([
        'jquery',
        'stellarGlobal',
        'Magento_Ui/js/lib/view/utils/dom-observer'
    ], function ($, stellarGlobal, domObserver) {
        if ($('.catalog-product-view').length > 0) {
            var html = "<div class='form-left'></div><div class='form-right'></div>",
                container = $('.catalog-product-view').find('.pccform fieldset');
            container.append(html);
            container.find('div.captcha').prev('label').remove()
            if (!$('.nzStore').length) {
                var formHtml1 = container.find('.form-group').slice(0,3),
                    formHtml2 = container.find('.form-group').slice(3,5),
                    formHtml3 = container.find('.form-group').slice(5,7);
                container.find('.form-left').append(formHtml1);
                container.find('.form-right').append(formHtml2);
                if ($(window).width() > 768) {
                    container.find('.form-left').append(formHtml3);
                } else {
                    container.find('.form-left .form-group').eq(4).remove();
                    container.find('.form-left .form-group').eq(5).remove();
                    container.find('.form-right').append(formHtml3);
                    stellarGlobal = new stellarGlobal();
                    stellarGlobal.showPopup('.ask-question-container .form-title', true ,'.show-popup-block');
                    stellarGlobal.hidePopup('.show-popup-block .close', true, '.show-popup-block');
                }
            }

            container.find('input').each(function () {
                var $parents = $(this).parents('div.form-group');
                $(this).removeAttr('placeholder');
                $(this).on('mouseenter', function () {
                    $parents.addClass('focus');
                }).on('mouseleave', function () {
                    if (!$(this).is(':focus')) {
                        if (!$(this).val()) {
                            $parents.removeClass('focus');
                        }
                    }
                }).on('focus', function () {
                    $parents.addClass('focus');
                }).on('blur', function () {
                    if (!$(this).val()) {
                        $parents.removeClass('focus');
                    }
                    observerClass($(this).attr('id'));
                });
            });
            container.find('textarea').each(function () {
                var $parents = $(this).parents('div.form-group');
                $(this).removeAttr('placeholder');
                $(this).on('mouseenter', function () {
                    $parents.addClass('focus');
                }).on('mouseleave', function () {
                    if (!$(this).is(':focus')) {
                        if (!$(this).val()) {
                            $parents.removeClass('focus');
                        }
                    }
                }).on('focus', function () {
                    $parents.addClass('focus');
                }).on('blur', function () {
                    if (!$(this).val()) {
                        $parents.removeClass('focus');
                    }
                });
            });

            function observerClass(id) {
                setTimeout(function () {
                    var selector = '#' + id;
                    domObserver.get(selector + '.valid', function () {
                        $(selector).siblings('i').remove();
                        $(selector).before('<i class="icon pass-validation-icon"></i>');
                    })
                    domObserver.get(selector + '.mage-error', function () {
                        $(selector).siblings('i').remove();
                        $(selector).before('<i class="icon error-validation-icon"></i>');
                    })
                }, 100);
            }
        }
    })
</script>
</div>
                </div>
                            </div>
        </div>
    </div>

    <div class="register-offer">
        <div data-content-type="row" data-appearance="full-bleed" data-enable-parallax="0" data-parallax-speed="0.5" data-background-images="{}" data-element="main" style="justify-content: flex-start; display: flex; flex-direction: column; background-position: left top; background-size: cover; background-repeat: no-repeat; background-attachment: scroll; border-style: none; border-width: 0px; border-radius: 0px; margin: 0px; padding: 0px;"><div data-content-type="text" data-appearance="default" data-element="main" style="border-style: none; border-width: 0px; border-radius: 0px; margin: 0px; padding: 0px;"><div>
<!--        <div class="ad-adbutler" id="ad-adbutler-fbWWnB1Z"></div>

    <script type="text/x-magento-init">
    {
        "*": {
            "HPOLS_Widget/js/adbulter": {"url":"https:\/\/servedbyadbutler.com\/adserve\/;ID=169583;size=1240x150;setID=275722;type=json;click=CLICK_MACRO_PLACEHOLDER","adPlacementId":"ad-adbutler-fbWWnB1Z","adHtml":"","keyWords":"websiteCode-base"}        }
    }
</script>
-->
<!-- PDP Bottom Banner 1 [async] -->
<script type="text/javascript">if (!window.AdButler){(function(){var s = document.createElement("script"); s.async = true; s.type = "text/javascript";s.src = 'https://servedbyadbutler.com/app.js';var n = document.getElementsByTagName("script")[0]; n.parentNode.insertBefore(s, n);}());}</script>
<script type="text/javascript">
var AdButler = AdButler || {}; AdButler.ads = AdButler.ads || [];
var abkw = window.abkw || '';
var plc275722 = window.plc275722 || 0;
document.write('<'+'div id="placement_275722_'+plc275722+'"><\/'+'div>');
AdButler.ads.push({handler: function(opt){ AdButler.register(169583, 275722, [1240,150], 'placement_275722_'+opt.place, opt); }, opt: { place: plc275722++, keywords: abkw, domain: 'servedbyadbutler.com', click:'CLICK_MACRO_PLACEHOLDER' }});
</script>
</div></div></div>    </div>



<script type="text/x-magento-init">
    {
        "body": {
            "requireCookie": {"noCookieUrl":"https:\/\/www.hp.com\/id-en\/shop\/cookie\/index\/noCookies\/","triggers":[".action.tocart"],"isRedirectCmsPage":true}        }
    }
</script>
<script type="text/x-magento-init">
    {
        "*": {
                "Magento_Catalog/js/product/view/provider": {
                    "data": {"items":{"7651":{"add_to_cart_button":{"post_data":"{\"action\":\"https:\\\/\\\/www.hp.com\\\/id-en\\\/shop\\\/checkout\\\/cart\\\/add\\\/uenc\\\/%25uenc%25\\\/product\\\/7651\\\/?___store=en\",\"data\":{\"product\":\"7651\",\"uenc\":\"%uenc%\"}}","url":"https:\/\/www.hp.com\/id-en\/shop\/checkout\/cart\/add\/uenc\/%25uenc%25\/product\/7651\/?___store=en","required_options":false},"add_to_compare_button":{"post_data":null,"url":"{\"action\":\"https:\\\/\\\/www.hp.com\\\/id-en\\\/shop\\\/catalog\\\/product_compare\\\/add\\\/\",\"data\":{\"product\":\"7651\",\"uenc\":\"aHR0cHM6Ly93d3cuaHAuY29tL2lkLWVuL3Nob3Avb21lbi1ieS1ocC1sYXB0b3AtMTYtYzAwOTlheC00ODhmNHBhLmh0bWw,\"}}","required_options":null},"price_info":{"final_price":24999000,"max_price":24999000,"max_regular_price":24999000,"minimal_regular_price":24999000,"special_price":null,"minimal_price":24999000,"regular_price":24999000,"formatted_prices":{"final_price":"<span class=\"price\">Rp 24.999.000<\/span>","max_price":"<span class=\"price\">Rp 24.999.000<\/span>","minimal_price":"<span class=\"price\">Rp 24.999.000<\/span>","max_regular_price":"<span class=\"price\">Rp 24.999.000<\/span>","minimal_regular_price":null,"special_price":null,"regular_price":"<span class=\"price\">Rp 24.999.000<\/span>"},"extension_attributes":{"msrp":{"msrp_price":"<span class=\"price\">Rp 0<\/span>","is_applicable":"","is_shown_price_on_gesture":"","msrp_message":"","explanation_message":"Our price is lower than the manufacturer&#039;s &quot;minimum advertised price.&quot; As a result, we cannot show you the price in catalog or the product page. <br><br> You have no obligation to purchase the product once you know the price. You can simply remove the item from your cart."},"tax_adjustments":{"final_price":24999000,"max_price":24999000,"max_regular_price":24999000,"minimal_regular_price":24999000,"special_price":24999000,"minimal_price":24999000,"regular_price":24999000,"formatted_prices":{"final_price":"<span class=\"price\">Rp 24.999.000<\/span>","max_price":"<span class=\"price\">Rp 24.999.000<\/span>","minimal_price":"<span class=\"price\">Rp 24.999.000<\/span>","max_regular_price":"<span class=\"price\">Rp 24.999.000<\/span>","minimal_regular_price":null,"special_price":"<span class=\"price\">Rp 24.999.000<\/span>","regular_price":"<span class=\"price\">Rp 24.999.000<\/span>"}},"weee_attributes":[],"weee_adjustment":"<span class=\"price\">Rp 24.999.000<\/span>"}},"images":[{"url":"https:\/\/id-media.apjonlinecdn.com\/catalog\/product\/cache\/9d74524075f5722e40a1490cbcfae5ff\/2\/1\/21c1_omen_vanellope_16_60w_nonnumpad_4zone_lcd_micasilver_front_1.png","code":"recently_viewed_products_grid_content_widget","height":280,"width":280,"label":"Center facing","resized_width":280,"resized_height":210},{"url":"https:\/\/id-media.apjonlinecdn.com\/catalog\/product\/cache\/314dec89b3219941707ad62ccc90e585\/2\/1\/21c1_omen_vanellope_16_60w_nonnumpad_4zone_lcd_micasilver_front_1.png","code":"recently_viewed_products_list_content_widget","height":310,"width":310,"label":"Center facing","resized_width":310,"resized_height":233},{"url":"https:\/\/id-media.apjonlinecdn.com\/catalog\/product\/cache\/d7d52afd56287491cb7a52758a71b450\/2\/1\/21c1_omen_vanellope_16_60w_nonnumpad_4zone_lcd_micasilver_front_1.png","code":"recently_viewed_products_images_names_widget","height":90,"width":75,"label":"Center facing","resized_width":75,"resized_height":56},{"url":"https:\/\/id-media.apjonlinecdn.com\/catalog\/product\/cache\/9d74524075f5722e40a1490cbcfae5ff\/2\/1\/21c1_omen_vanellope_16_60w_nonnumpad_4zone_lcd_micasilver_front_1.png","code":"recently_compared_products_grid_content_widget","height":280,"width":280,"label":"Center facing","resized_width":280,"resized_height":210},{"url":"https:\/\/id-media.apjonlinecdn.com\/catalog\/product\/cache\/314dec89b3219941707ad62ccc90e585\/2\/1\/21c1_omen_vanellope_16_60w_nonnumpad_4zone_lcd_micasilver_front_1.png","code":"recently_compared_products_list_content_widget","height":310,"width":310,"label":"Center facing","resized_width":310,"resized_height":233},{"url":"https:\/\/id-media.apjonlinecdn.com\/catalog\/product\/cache\/d7d52afd56287491cb7a52758a71b450\/2\/1\/21c1_omen_vanellope_16_60w_nonnumpad_4zone_lcd_micasilver_front_1.png","code":"recently_compared_products_images_names_widget","height":90,"width":75,"label":"Center facing","resized_width":75,"resized_height":56}],"url":"https:\/\/www.hp.com\/id-en\/shop\/omen-by-hp-laptop-16-c0099ax-488f4pa.html","id":7651,"name":"OMEN by HP Gaming Laptop 16-c0099AX","type":"simple","is_salable":"1","store_id":1,"currency_code":"IDR","extension_attributes":{"wishlist_button":{"post_data":null,"url":"{\"action\":\"https:\\\/\\\/www.hp.com\\\/id-en\\\/shop\\\/wishlist\\\/index\\\/add\\\/\",\"data\":{\"product\":7651,\"uenc\":\"aHR0cHM6Ly93d3cuaHAuY29tL2lkLWVuL3Nob3Avb21lbi1ieS1ocC1sYXB0b3AtMTYtYzAwOTlheC00ODhmNHBhLmh0bWw,\"}}","required_options":null},"review_html":""}}},"store":"1","currency":"IDR","productCurrentScope":"website"}            }
        }
    }
</script>
<div class="product-recent-view"><!-- BLOCK product.recent.view.list --><script type="text/javascript">
    if(typeof(isLazyLoadingEnabled) !=="undefined" && isLazyLoadingEnabled){
        require([
            'jquery',
            'renderLazyLoad',
            'domReady!'
        ], function ($, renderLazyLoad) {
            $(document).ready(function () {
                renderLazyLoad.initLoading('.mplazyload-icon');
                $(window).load(function() {
                    renderLazyLoad.initLoading('.mplazyload-icon');
                });
            });
        });
    }
</script>

<!-- /BLOCK product.recent.view.list --></div>
    <div class="register-offer bottom">
        <div data-content-type="row" data-appearance="full-bleed" data-enable-parallax="0" data-parallax-speed="0.5" data-background-images="{}" data-element="main" style="justify-content: flex-start; display: flex; flex-direction: column; background-position: left top; background-size: cover; background-repeat: no-repeat; background-attachment: scroll; border-style: none; border-width: 0px; border-radius: 0px; margin: 0px; padding: 0px;"><div data-content-type="text" data-appearance="default" data-element="main" style="border-style: none; border-width: 0px; border-radius: 0px; margin: 0px; padding: 0px;"><div>
<!--        <div class="ad-adbutler" id="ad-adbutler-5ABdic0A"></div>

    <script type="text/x-magento-init">
    {
        "*": {
            "HPOLS_Widget/js/adbulter": {"url":"https:\/\/servedbyadbutler.com\/adserve\/;ID=169583;size=1240x150;setID=275723;type=json;click=CLICK_MACRO_PLACEHOLDER ","adPlacementId":"ad-adbutler-5ABdic0A","adHtml":"","keyWords":"websiteCode-base"}        }
    }
</script>
-->
<!-- PDP Bottom Banner 2 [async] -->
<script type="text/javascript">if (!window.AdButler){(function(){var s = document.createElement("script"); s.async = true; s.type = "text/javascript";s.src = 'https://servedbyadbutler.com/app.js';var n = document.getElementsByTagName("script")[0]; n.parentNode.insertBefore(s, n);}());}</script>
<script type="text/javascript">
var AdButler = AdButler || {}; AdButler.ads = AdButler.ads || [];
var abkw = window.abkw || '';
var plc275723 = window.plc275723 || 0;
document.write('<'+'div id="placement_275723_'+plc275723+'"><\/'+'div>');
AdButler.ads.push({handler: function(opt){ AdButler.register(169583, 275723, [1240,150], 'placement_275723_'+opt.place, opt); }, opt: { place: plc275723++, keywords: abkw, domain: 'servedbyadbutler.com', click:'CLICK_MACRO_PLACEHOLDER' }});
</script>
</div></div></div>    </div>
    <div class="foot-notes">
        <div class="block widget block-foot-notes">
            <div class="block-content">
                <h3>FEATURES</h3>
                <ul><li class="01">[1] Multi-core is designed to improve performance of certain software products. Not all customers or software applications will necessarily benefit from use of this technology. Performance and clock frequency will vary depending on application workload and your hardware and software configurations. AMD’s numbering is not a measurement of clock speed.</li><li class="02">[2] Thermal solution varies by configuration.</li><li class="03">[3] The Flicker-free capability eliminates screen flickering through integrating DC-dimming LED backlights.</li><li class="legaldisclaim_0">Not all features are available in all editions or versions of Windows. Systems may require upgraded and/or separately purchased hardware, drivers and/or software to take full advantage of Windows functionality. See http://www.microsoft.com.</li></ul>            </div>
            <div class="block-content">
                <h3>TECHNICAL DETAILS</h3>
                <ul><li class="01">[1] 25 GB of free Dropbox storage for 12 months from date of registration. For complete details and terms of use, including cancellation policies, visit the Dropbox website at https://www.dropbox.com/help/space/hp-promotion. Internet service required and not included.</li><li class="02">[2] Free 30 day subscription of McAfee LiveSafe service included. Internet access required and not included. Subscription required after expiration.</li><li class="03">[3] Windows MobileMark 18 Battery life will vary depending on various factors including product model, configuration, loaded applications, features, use, wireless functionality, and power management settings. The maximum capacity of the battery will naturally decrease with time and usage. See https://bapco.com/products/mobilemark-2018/ for additional details.</li><li class="05">[5] Recharges your battery up to 50% within 45 minutes when the system is off (using “shut down” command). Recommended for use with the HP adapter provided with the notebook, not recommended with a smaller capacity battery charger. After charging has reached 50% capacity, charging speed will return to normal speed. Charging time may vary +/-10% due to System tolerance. Available on select HP products. See http://store.hp.com for a full list of product features.</li><li class="06">[6] Multi-core is designed to improve performance of certain software products. Not all customers or software applications will necessarily benefit from use of this technology. Performance and clock frequency will vary depending on application workload and your hardware and software configurations. AMD’s numbering is not a measurement of clock speed.</li><li class="07">[7] Max Boost clock frequency performance varies depending on hardware, software and overall system configuration.</li><li class="10">[10] Battery life tested by HP using continuous FHD video playback, 1080p (1920x1080) resolution, 150 nits brightness, system audio level at 17%, player audio level at 100%, played full-screen from local storage, headphone attached, wireless on but not connected. Actual battery life will vary depending on configuration and maximum capacity will naturally decrease with time and usage.</li><li class="18">[18] Percent of active plus nonactive viewing area to active viewing area plus border. Measure with lid vertical to the desk.</li><li class="19">[19] For best results with HP Sleep and Charge, use a USB charging protocol standard cable or cable adapter with an external device.</li><li class="24">[24] Must activate within 180 days of Windows activation.</li><li class="39">[39] Percentage of ocean-bound plastic contained in each component varies by product.</li><li class="40">[40] Percentage of recycled metal varies by product.</li><li class="41">[41] Keyboard keycap contains post-consumer recycled plastic. Percentage of Post consumer recycled contained in each component varies by product.</li></ul>            </div>
                    </div>
    </div>
<script>
    var maxProductCount = 4;
    var emptyHtml = '<div class="add-product">Add <br> Product</div>';
    var defaultComparedProducts = {"count":0,"categoryItems":[{"type":"laptops","name":"Laptops","url_key":"laptops","compare_url":"https:\/\/www.hp.com\/id-en\/shop\/catalog\/product_compare\/index\/category\/laptops\/","remove_all_url":"{\"action\":\"https:\\\/\\\/www.hp.com\\\/id-en\\\/shop\\\/hpols_catalog\\\/product_compare\\\/removeall\\\/\",\"data\":{\"category\":\"laptops\",\"uenc\":\"\"}}","count":0,"items":[]},{"type":"desktops","name":"Desktops","url_key":"desktops","compare_url":"https:\/\/www.hp.com\/id-en\/shop\/catalog\/product_compare\/index\/category\/desktops\/","remove_all_url":"{\"action\":\"https:\\\/\\\/www.hp.com\\\/id-en\\\/shop\\\/hpols_catalog\\\/product_compare\\\/removeall\\\/\",\"data\":{\"category\":\"desktops\",\"uenc\":\"\"}}","count":0,"items":[]},{"type":"printers","name":"Printers","url_key":"printers","compare_url":"https:\/\/www.hp.com\/id-en\/shop\/catalog\/product_compare\/index\/category\/printers\/","remove_all_url":"{\"action\":\"https:\\\/\\\/www.hp.com\\\/id-en\\\/shop\\\/hpols_catalog\\\/product_compare\\\/removeall\\\/\",\"data\":{\"category\":\"printers\",\"uenc\":\"\"}}","count":0,"items":[]},{"type":"designjet","name":"Designjet","url_key":"designjet","compare_url":"https:\/\/www.hp.com\/id-en\/shop\/catalog\/product_compare\/index\/category\/designjet\/","remove_all_url":"{\"action\":\"https:\\\/\\\/www.hp.com\\\/id-en\\\/shop\\\/hpols_catalog\\\/product_compare\\\/removeall\\\/\",\"data\":{\"category\":\"designjet\",\"uenc\":\"\"}}","count":0,"items":[]},{"type":"scanner","name":"Scanner","url_key":"scanner","compare_url":"https:\/\/www.hp.com\/id-en\/shop\/catalog\/product_compare\/index\/category\/scanner\/","remove_all_url":"{\"action\":\"https:\\\/\\\/www.hp.com\\\/id-en\\\/shop\\\/hpols_catalog\\\/product_compare\\\/removeall\\\/\",\"data\":{\"category\":\"scanner\",\"uenc\":\"\"}}","count":0,"items":[]},{"type":"monitors","name":"Monitors","url_key":"monitors","compare_url":"https:\/\/www.hp.com\/id-en\/shop\/catalog\/product_compare\/index\/category\/monitors\/","remove_all_url":"{\"action\":\"https:\\\/\\\/www.hp.com\\\/id-en\\\/shop\\\/hpols_catalog\\\/product_compare\\\/removeall\\\/\",\"data\":{\"category\":\"monitors\",\"uenc\":\"\"}}","count":0,"items":[]},{"type":"accessories","name":"Accessories","url_key":"accessories","compare_url":"https:\/\/www.hp.com\/id-en\/shop\/catalog\/product_compare\/index\/category\/accessories\/","remove_all_url":"{\"action\":\"https:\\\/\\\/www.hp.com\\\/id-en\\\/shop\\\/hpols_catalog\\\/product_compare\\\/removeall\\\/\",\"data\":{\"category\":\"accessories\",\"uenc\":\"\"}}","count":0,"items":[]},{"type":"carepack","name":"Care Pack","url_key":"carepack","compare_url":"https:\/\/www.hp.com\/id-en\/shop\/catalog\/product_compare\/index\/category\/carepack\/","remove_all_url":"{\"action\":\"https:\\\/\\\/www.hp.com\\\/id-en\\\/shop\\\/hpols_catalog\\\/product_compare\\\/removeall\\\/\",\"data\":{\"category\":\"carepack\",\"uenc\":\"\"}}","count":0,"items":[]}]};
    var defaultConfigData = {"defaultCategoryUrlKey":"laptops","tabActiveIndex":{"laptops":0,"desktops":1,"printers":2,"designjet":3,"scanner":4,"monitors":5,"accessories":6,"carepack":7},"disallowCompareCategoryUrlKeys":["ink-toner"],"allowComparePageIdentifiers":["home",""]};
    var currentThemeCode = 'HPOLS/stellar';

    if (!categoryUrlKey) {
        var categoryUrlKey = defaultConfigData.defaultCategoryUrlKey;
    }
    var activeTabIndex = defaultConfigData.tabActiveIndex[categoryUrlKey] ? defaultConfigData.tabActiveIndex[categoryUrlKey] : 0;

    if (!pageIdentifier) {
        var pageIdentifier = '';
    }
        var isHomePage = false;
    </script>
<div class="category-compare-list steller" data-bind="scope: 'compareProductsCustom'" data-role="compare-products">
    <div class="compare-message hide">
        <span class="title"></span>
        <i class="toggle-icon"></i>
    </div>
    <div class="compare-box no-display" data-bind="css: {'no-display': disallowCompare(defaultConfigData, categoryUrlKey, pageIdentifier)}, afterRender: function() {$data.initSidebar()}">
        <div class="compare-header">
            <span class="title">Compare Models</span>
            <i class="toggle-icon"></i>
            <span class="count">
                <span data-bind="text:itemCount"></span>/4            </span>
        </div>
        <div class="category-compare-tabs product data items"
             data-bind="foreach: {data: compareProducts().categoryItems, as: 'category'}, mageInit: {'tabs':{'openedState': 'active', 'active': activeTabIndex}}">
            <div class="data item title"
                 data-bind="attr: {'id': 'tab-label-category.compare.' + url_key + '.list', 'aria-labeledby': 'tab-label-category.compare.' + url_key + '.list-title', 'url-key': url_key, 'list-index': $index}"
                 data-role="collapsible">
                <a class="data switch"
                   tabindex="-1"
                   data-toggle="switch"
                   data-bind="attr: {'id': 'tab-label-category.compare.' + url_key + '.list-title', 'href': '#category.compare.' + url_key + '.list'}">
                    <span data-bind="text: name"></span> (<span class="count" data-bind="text: count"></span>)
                </a>
            </div>
            <div class="data item content" data-role="content"
                 data-bind="attr: {'id': 'category.compare.' + url_key + '.list'}">
                <ul class="compare-list">
                    <!-- ko foreach: items -->
                    <!-- ko if: isEmpty == false -->
                    <li class="item" data-bind="attr: {'data-product-id': id, 'data-product-sku': sku}">
                        <div class="remove-icon" data-bind="attr: {'data-post': remove_url}"></div>
                        <a class="product-item-photo" data-bind="attr: {href: product_url, title: name}">
                            <div class="product-image-container">
                                <img data-bind="attr: {src: image_url, alt: name}" />
                            </div>
                            <div class="product-item-name" data-bind="html: name"></div>
                        </a>
                        <div class="product-item-price" data-bind="html: price"></div>
                    </li>
                    <!-- /ko -->
                    <!-- ko if: isEmpty == true -->
                    <li class="empty" data-product-id=""></li>
                    <!-- /ko -->
                    <!-- /ko -->
                    <li class="compare-action">
                        <div class="has-item" data-bind="style: {display: category.count ? 'block' : 'none'}">
                            <a class="action primary compare-now" target="_blank"
                               data-bind="attr: {href: compare_url, class: count < 2 ? 'action primary compare-now disabled' : 'action primary compare-now'}">
                                <span>Compare now</span>
                            </a>
                            <div class="action primary remove-all" data-bind="attr: {'data-post': remove_all_url, 'data-category-url-key': url_key}">
                                <span>Clear all</span>
                            </div>
                        </div>
                        <div class="no-item" data-bind="style: {display: !category.count ? 'block' : 'none'}">
                            No product added to compare list                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <script type="text/x-magento-init">
        {"[data-role=compare-products]": {"Magento_Ui/js/core/app": {"components":{"compareProductsCustom":{"component":"HPOLS_Catalog\/js\/view\/compare-products"}}}}}
    </script>
</div>
</div></div>

<div data-bind="scope:'product_recommendations_below-main-content'">
    <!-- ko template: getTemplate() --><!-- /ko -->
</div>

<script type="text/x-magento-init">
        {
            "*": {
                "Magento_Ui/js/core/app": {
                    "components": {
                        "product_recommendations_below-main-content": {
                            "component": "Magento_ProductRecommendationsLayout/js/layoutRenderer",
                            "pagePlacement": "below-main-content",
                            "placeholderUrl": "https://id-media.apjonlinecdn.com/static/version1640122770/frontend/HPOLS/stellar/en_AU/Magento_Catalog/images/product/placeholder/image.jpg",
                            "priceFormat": {"pattern":"Rp %s","precision":0,"requiredPrecision":0,"decimalSymbol":".","groupSymbol":".","groupLength":3,"integerRequired":false},
                            "currencyConfiguration": {"currency":"IDR","rate":1},
                            "isAlternateEnvironmentEnabled": false                        }
                    }
                }
            }
        }
</script>
</main>
<div class="switcher store switcher-store hide" id="switcher-store">
    <strong class="label switcher-label"><span>Select Store</span></strong>
    <div class="actions dropdown options switcher-options">
                                    <div class="action toggle switcher-trigger"
                     role="button"
                     tabindex="0"
                     data-mage-init='{"dropdown":{}}'
                     data-toggle="dropdown"
                     data-trigger-keypress-button="true"
                     id="switcher-store-trigger">
                    <div class="flag"></div>
                    <strong>
                        <span>HP Online Store</span>
                    </strong>
                </div>
                            <ul class="dropdown switcher-dropdown" data-target="dropdown">
                                                </ul>
    </div>
</div>

<div class="footer-worldmap">
    <div data-content-type="row" data-appearance="full-bleed" data-enable-parallax="0" data-parallax-speed="0.5" data-background-images="{}" data-video-fallback-src="" data-element="main" style="justify-content: flex-start; display: flex; flex-direction: column; background-position: left top; background-size: cover; background-repeat: no-repeat; background-attachment: scroll; border-style: none; border-width: 0px; border-radius: 0px; margin: 0px; padding: 0px;"><div data-content-type="text" data-appearance="default" data-element="main" style="border-style: none; border-width: 0px; border-radius: 0px; margin: 0px; padding: 0px;"><style><!--
.page-footer .footer-worldmap .js_cselector_trigger.cselector {
    cursor:pointer
}
.page-footer .footer-worldmap .footer-payment-icons-container {
        border-bottom: 1px solid #898888;
        padding: 17px 30px 18px 30px;
    }
    .page-footer .footer-worldmap .footer-payment-icons .payment-icon {
        display: inline-block;
    }
    .footer.content > .add-newsletter-captcha {
        top: 41% !important;
    }
.footer-country-pop .country_holder li {
   margin: 0;
}
.footer-country-pop .country_holder ul {
    margin: 0;
    padding: 0;
    list-style: none none;
}
.footer-country-pop .cselectorbtn:before {
    font-family: HPIcons;

    font-style: normal;
    font-weight: 400;
    font-variant: normal;
    text-transform: none;
    -webkit-font-smoothing: antialiased;
}
--></style>
<div class="footer_container footer_lang_container" style="position: relative;"><span class="js_cselector_trigger cselector" title="Select country / region"><span class="js_cselector_trigger cselector" title="Select country / region"><span class="js_cselector_trigger cselector" title="Select country / region"> <span class="flag flag-id">&nbsp;</span> <span class="screenReading">Indonesia&nbsp;&nbsp;|&nbsp;Order by phone:&nbsp;Home customers </span><a href="tel:007-803-331-5068">007-803-331-5068</a>&nbsp;:&nbsp;Business customers&nbsp;</span><a href="tel:007-803-331-5104">007-803-331-5104</a></span></span>
<div class="footer-country-pop">
<div class="worldmap hf_clf">
<div class="bottom_corner">&nbsp;</div>
<div class="country_holder">
<ul>
<li style="margin-left: 0px;" data-region="1"><a class="link_metrics" title="Africa" href="http://www8.hp.com/emea_africa/en/home.html">Africa</a></li>
<li style="margin-left: 0px;" data-region="1"><a class="link_metrics" title="Afrique" href="http://www8.hp.com/emea_africa/fr/home.html">Afrique</a></li>
<li style="margin-left: 0px;" data-region="1"><a class="link_metrics" title="Albania" href="http://www8.hp.com/al/sq/default.html">Albania</a></li>
<li style="margin-left: 0px;" data-region="1"><a class="link_metrics" title="Algeria" href="http://www8.hp.com/dz/fr/default.html">Algeria</a></li>
<li style="margin-left: 0px;" data-region="0"><a class="link_metrics" title="Am&eacute;rica Central" href="http://www8.hp.com/lamerica_nsc_cnt_amer/es/home.html">Am&eacute;rica Central</a></li>
<li style="margin-left: 0px;" data-region="1"><a class="link_metrics" title="Angola" href="http://www8.hp.com/ao/pt/default.html">Angola</a></li>
<li style="margin-left: 0px;" data-region="0"><a class="link_metrics" title="Argentina" href="http://www8.hp.com/ar/es/home.html">Argentina</a></li>
<li style="margin-left: 0px;" data-region="1"><a class="link_metrics" title="Armenia" href="http://www8.hp.com/am/hy/default.html">Armenia</a></li>
<li style="margin-left: 0px;" data-region="2"><a class="link_metrics" title="Australia" href="http://www8.hp.com/au/en/home.html">Australia</a></li>
<li style="margin-left: 0px;" data-region="1"><a class="link_metrics" title="Az&#601;rbaycan" href="http://www8.hp.com/az/az/default.html">Az&#601;rbaycan</a></li>
<li style="margin-left: 0px;" data-region="2"><a class="link_metrics" title="Bangladesh" href="http://www8.hp.com/bd/bn/default.html">Bangladesh</a></li>
<li style="margin-left: 0px;" data-region="1"><a class="link_metrics" title="Belgi&euml;" href="http://www8.hp.com/be/nl/home.html">Belgi&euml;</a></li>
<li style="margin-left: 0px;" data-region="1"><a class="link_metrics" title="Belgique" href="http://www8.hp.com/be/fr/home.html">Belgique</a></li>
<li style="margin-left: 0px;" data-region="0"><a class="link_metrics" title="Bolivia" href="http://www8.hp.com/bo/es/home.html">Bolivia</a></li>
<li style="margin-left: 132px; margin-top: -364px;" data-region="1"><a class="link_metrics" title="Bosna i Hercegovina" href="http://www8.hp.com/ba/bs/default.html">Bosna i Hercegovina</a></li>
<li style="margin-left: 132px;" data-region="0"><a class="link_metrics" title="Brasil" href="http://www8.hp.com/br/pt/home.html">Brasil</a></li>
<li style="margin-left: 132px;" data-region="0"><a class="link_metrics" title="Canada" href="http://www8.hp.com/ca/en/home.html">Canada</a></li>
<li style="margin-left: 132px;" data-region="0"><a class="link_metrics" title="Canada - French" href="http://www8.hp.com/ca/fr/home.html">Canada - French</a></li>
<li style="margin-left: 132px;" data-region="0"><a class="link_metrics" title="Caribbean" href="http://www8.hp.com/lamerica_nsc_carib/en/home.html">Caribbean</a></li>
<li style="margin-left: 132px;" data-region="1"><a class="link_metrics" title="&#268;esk&aacute; republika" href="http://www8.hp.com/cz/cs/home.html">&#268;esk&aacute; republika</a></li>
<li style="margin-left: 132px;" data-region="0"><a class="link_metrics" title="Chile" href="http://www8.hp.com/cl/es/home.html">Chile</a></li>
<li style="margin-left: 132px;" data-region="0"><a class="link_metrics" title="Colombia" href="http://www8.hp.com/co/es/home.html">Colombia</a></li>
<li style="margin-left: 132px;" data-region="1"><a class="link_metrics" title="Danmark" href="http://www8.hp.com/dk/da/home.html">Danmark</a></li>
<li style="margin-left: 132px;" data-region="1"><a class="link_metrics" title="Deutschland" href="http://www8.hp.com/de/de/home.html">Deutschland</a></li>
<li style="margin-left: 132px;" data-region="0"><a class="link_metrics" title="Ecuador" href="http://www8.hp.com/ec/es/home.html">Ecuador</a></li>
<li style="margin-left: 132px;" data-region="1"><a class="link_metrics" title="Eesti" href="http://www8.hp.com/ee/et/home.html">Eesti</a></li>
<li style="margin-left: 132px;" data-region="1"><a class="link_metrics" title="Espa&ntilde;a" href="http://www8.hp.com/es/es/home.html">Espa&ntilde;a</a></li>
<li style="margin-left: 132px;" data-region="1"><a class="link_metrics" title="France" href="http://www8.hp.com/fr/fr/home.html">France</a></li>
<li style="margin-left: 264px; margin-top: -364px;" data-region="1"><a class="link_metrics" title="Georgia" href="http://www8.hp.com/ge/ge/default.html">Georgia</a></li>
<li style="margin-left: 264px;" data-region="1"><a class="link_metrics" title="Ghana" href="http://www8.hp.com/gh/en/default.html">Ghana</a></li>
<li style="margin-left: 264px;" data-region="2"><a class="link_metrics" title="Hong Kong SAR" href="http://www8.hp.com/hk/en/home.html">Hong Kong SAR</a></li>
<li style="margin-left: 264px;" data-region="1"><a class="link_metrics" title="Hrvatska" href="http://www8.hp.com/hr/hr/home.html">Hrvatska</a></li>
<li style="margin-left: 264px;" data-region="1"><a class="link_metrics" title="Iceland" href="http://www8.hp.com/is/is/default.html">Iceland</a></li>
<li style="margin-left: 264px;" data-region="2"><a class="link_metrics" title="India" href="http://www8.hp.com/in/en/home.html">India</a></li>
<li style="margin-left: 264px;" data-region="2"><a class="link_metrics" title="Indonesia" href="http://www8.hp.com/id/en/home.html">Indonesia</a></li>
<li style="margin-left: 264px;" data-region="1"><a class="link_metrics" title="Ireland" href="http://www8.hp.com/ie/en/home.html">Ireland</a></li>
<li style="margin-left: 264px;" data-region="1"><a class="link_metrics" title="Israel" href="http://www8.hp.com/il/en/home.html">Israel</a></li>
<li style="margin-left: 264px;" data-region="1"><a class="link_metrics" title="Italia" href="http://www8.hp.com/it/it/home.html">Italia</a></li>
<li style="margin-left: 264px;" data-region="1"><a class="link_metrics" title="Kenya" href="http://www8.hp.com/ke/en/default.html">Kenya</a></li>
<li style="margin-left: 264px;" data-region="1"><a class="link_metrics" title="Kosovo" href="http://www8.hp.com/ks/sq/default.html">Kosovo</a></li>
<li style="margin-left: 264px;" data-region="1"><a class="link_metrics" title="Latvija" href="http://www8.hp.com/lv/lv/home.html">Latvija</a></li>
<li style="margin-left: 264px;" data-region="1"><a class="link_metrics" title="Lietuva" href="http://www8.hp.com/lt/lt/home.html">Lietuva</a></li>
<li style="margin-left: 396px; margin-top: -364px;" data-region="1"><a class="link_metrics" title="Magyarorsz&aacute;g" href="http://www8.hp.com/hu/hu/home.html">Magyarorsz&aacute;g</a></li>
<li style="margin-left: 396px;" data-region="2"><a class="link_metrics" title="Malaysia" href="http://www8.hp.com/my/en/home.html">Malaysia</a></li>
<li style="margin-left: 396px;" data-region="1"><a class="link_metrics" title="Malta" href="http://www8.hp.com/mt/en/default.html">Malta</a></li>
<li style="margin-left: 396px;" data-region="0"><a class="link_metrics" title="M&eacute;xico" href="http://www8.hp.com/mx/es/home.html">M&eacute;xico</a></li>
<li style="margin-left: 396px;" data-region="1"><a class="link_metrics" title="Middle East" href="http://www8.hp.com/emea_middle_east/en/home.html">Middle East</a></li>
<li style="margin-left: 396px;" data-region="1"><a class="link_metrics" title="Moldova" href="http://www8.hp.com/md/ro/default.html">Moldova</a></li>
<li style="margin-left: 396px;" data-region="1"><a class="link_metrics" title="Morocco" href="http://www8.hp.com/ma/fr/default.html">Morocco</a></li>
<li style="margin-left: 396px;" data-region="1"><a class="link_metrics" title="Nederland" href="http://www8.hp.com/nl/nl/home.html">Nederland</a></li>
<li style="margin-left: 396px;" data-region="2"><a class="link_metrics" title="New Zealand" href="http://www8.hp.com/nz/en/home.html">New Zealand</a></li>
<li style="margin-left: 396px;" data-region="1"><a class="link_metrics" title="Nigeria" href="http://www8.hp.com/ng/en/default.html">Nigeria</a></li>
<li style="margin-left: 396px;" data-region="1"><a class="link_metrics" title="Norge" href="http://www8.hp.com/no/no/home.html">Norge</a></li>
<li style="margin-left: 396px;" data-region="1"><a class="link_metrics" title="&Ouml;sterreich" href="http://www8.hp.com/at/de/home.html">&Ouml;sterreich</a></li>
<li style="margin-left: 396px;" data-region="2"><a class="link_metrics" title="Pakistan" href="http://www8.hp.com/pk/en/default.html">Pakistan</a></li>
<li style="margin-left: 396px;" data-region="0"><a class="link_metrics" title="Paraguay" href="http://www8.hp.com/py/es/home.html">Paraguay</a></li>
<li style="margin-left: 528px; margin-top: -364px;" data-region="0"><a class="link_metrics" title="Per&uacute;" href="http://www8.hp.com/pe/es/home.html">Per&uacute;</a></li>
<li style="margin-left: 528px;" data-region="2"><a class="link_metrics" title="Philippines" href="http://www8.hp.com/ph/en/home.html">Philippines</a></li>
<li style="margin-left: 528px;" data-region="1"><a class="link_metrics" title="Polska" href="http://www8.hp.com/pl/pl/home.html">Polska</a></li>
<li style="margin-left: 528px;" data-region="1"><a class="link_metrics" title="Portugal" href="http://www8.hp.com/pt/pt/home.html">Portugal</a></li>
<li style="margin-left: 528px;" data-region="0"><a class="link_metrics" title="Puerto Rico" href="http://www8.hp.com/pr/es/home.html">Puerto Rico</a></li>
<li style="margin-left: 528px;" data-region="1"><a class="link_metrics" title="Rom&acirc;nia" href="http://www8.hp.com/ro/ro/home.html">Rom&acirc;nia</a></li>
<li style="margin-left: 528px;" data-region="1"><a class="link_metrics" title="Saudi Arabia" href="http://www8.hp.com/sa/en/home.html">Saudi Arabia</a></li>
<li style="margin-left: 528px;" data-region="1"><a class="link_metrics" title="Schweiz" href="http://www8.hp.com/ch/de/home.html">Schweiz</a></li>
<li style="margin-left: 528px;" data-region="2"><a class="link_metrics" title="Singapore" href="http://www8.hp.com/sg/en/home.html">Singapore</a></li>
<li style="margin-left: 528px;" data-region="1"><a class="link_metrics" title="Slovenija" href="http://www8.hp.com/si/sl/home.html">Slovenija</a></li>
<li style="margin-left: 528px;" data-region="1"><a class="link_metrics" title="Slovensko" href="http://www8.hp.com/sk/sk/home.html">Slovensko</a></li>
<li style="margin-left: 528px;" data-region="1"><a class="link_metrics" title="South Africa" href="http://www8.hp.com/za/en/home.html">South Africa</a></li>
<li style="margin-left: 528px;" data-region="1"><a class="link_metrics" title="Srbija" href="http://www8.hp.com/rs/sr/home.html">Srbija</a></li>
<li style="margin-left: 528px;" data-region="2"><a class="link_metrics" title="Sri Lanka" href="http://www8.hp.com/lk/si/default.html">Sri Lanka</a></li>
<li style="margin-left: 660px; margin-top: -364px;" data-region="1"><a class="link_metrics" title="Suisse" href="http://www8.hp.com/ch/fr/home.html">Suisse</a></li>
<li style="margin-left: 660px;" data-region="1"><a class="link_metrics" title="Suomi" href="http://www8.hp.com/fi/fi/home.html">Suomi</a></li>
<li style="margin-left: 660px;" data-region="1"><a class="link_metrics" title="Sverige" href="http://www8.hp.com/se/sv/home.html">Sverige</a></li>
<li style="margin-left: 660px;" data-region="2"><a class="link_metrics" title="Thailand" href="http://www8.hp.com/th/en/home.html">Thailand</a></li>
<li style="margin-left: 660px;" data-region="1"><a class="link_metrics" title="T&uuml;rkiye" href="http://www8.hp.com/tr/tr/home.html">T&uuml;rkiye</a></li>
<li style="margin-left: 660px;" data-region="1"><a class="link_metrics" title="Turkmenistan" href="http://www8.hp.com/tm/ru/default.html">Turkmenistan</a></li>
<li style="margin-left: 660px;" data-region="1"><a class="link_metrics" title="United Kingdom" href="http://www8.hp.com/uk/en/home.html">United Kingdom</a></li>
<li style="margin-left: 660px;" data-region="0"><a class="link_metrics" title="United States" href="http://www8.hp.com/us/en/home.html">United States</a></li>
<li style="margin-left: 660px;" data-region="0"><a class="link_metrics" title="Uruguay" href="http://www8.hp.com/uy/es/home.html">Uruguay</a></li>
<li style="margin-left: 660px;" data-region="0"><a class="link_metrics" title="Venezuela" href="http://www8.hp.com/ve/es/home.html">Venezuela</a></li>
<li style="margin-left: 660px;" data-region="2"><a class="link_metrics" title="Vietnam" href="http://www8.hp.com/vn/en/home.html">Vietnam</a></li>
<li style="margin-left: 660px;" data-region="1"><a class="link_metrics" title="&Epsilon;&lambda;&lambda;&#940;&delta;&alpha;" href="http://www8.hp.com/gr/el/home.html">&Epsilon;&lambda;&lambda;&#940;&delta;&alpha;</a></li>
<li style="margin-left: 660px;" data-region="1"><a class="link_metrics" title="&#1041;&#1077;&#1083;&#1072;&#1088;&#1091;&#1089;&#1100;" href="http://www8.hp.com/by/ru/home.html">&#1041;&#1077;&#1083;&#1072;&#1088;&#1091;&#1089;&#1100;</a></li>
<li style="margin-left: 660px;" data-region="1"><a class="link_metrics" title="&#1041;&#1098;&#1083;&#1075;&#1072;&#1088;&#1080;&#1103;" href="http://www8.hp.com/bg/bg/home.html">&#1041;&#1098;&#1083;&#1075;&#1072;&#1088;&#1080;&#1103;</a></li>
<li style="margin-left: 792px; margin-top: -364px;" data-region="1"><a class="link_metrics" title="&#1050;&#1072;&#1079;&#1072;&#1093;&#1089;&#1090;&#1072;&#1085;" href="http://www8.hp.com/kz/ru/home.html">&#1050;&#1072;&#1079;&#1072;&#1093;&#1089;&#1090;&#1072;&#1085;</a></li>
<li style="margin-left: 792px;" data-region="1"><a class="link_metrics" title="&#1052;&#1072;&#1082;&#1077;&#1076;&#1086;&#1085;&#1080;&#1112;&#1072;" href="http://www8.hp.com/mk/mk/default.html">&#1052;&#1072;&#1082;&#1077;&#1076;&#1086;&#1085;&#1080;&#1112;&#1072;</a></li>
<li style="margin-left: 792px;" data-region="1"><a class="link_metrics" title="&#1056;&#1086;&#1089;&#1089;&#1080;&#1103;" href="http://www8.hp.com/ru/ru/home.html">&#1056;&#1086;&#1089;&#1089;&#1080;&#1103;</a></li>
<li style="margin-left: 792px;" data-region="1"><a class="link_metrics" title="&#1059;&#1082;&#1088;&#1072;&#1080;&#1085;&#1072;" href="http://www8.hp.com/ua/ru/home.html">&#1059;&#1082;&#1088;&#1072;&#1080;&#1085;&#1072;</a></li>
<li style="margin-left: 792px;" data-region="1"><a class="link_metrics" title="&#1497;&#1513;&#1512;&#1488;&#1500;" href="http://welcome.hp.com/country/il/he/welcome.html">&#1497;&#1513;&#1512;&#1488;&#1500;</a></li>
<li style="margin-left: 792px;" data-region="1"><a class="link_metrics" title="&#1575;&#1604;&#1588;&#1585;&#1602; &#1575;&#1604;&#1571;&#1608;&#1587;&#1591;" href="http://welcome.hp.com/country/emea_middle_east/ar/welcome.html">&#1575;&#1604;&#1588;&#1585;&#1602; &#1575;&#1604;&#1571;&#1608;&#1587;&#1591;</a></li>
<li style="margin-left: 792px;" data-region="1"><a class="link_metrics" title="&#1575;&#1604;&#1605;&#1605;&#1604;&#1603;&#1577; &#1575;&#1604;&#1593;&#1585;&#1576;&#1610;&#1577; &#1575;&#1604;&#1587;&#1593;&#1608;&#1583;&#1610;&#1577;" href="http://www8.hp.com/sa/ar/home.html">&#1575;&#1604;&#1605;&#1605;&#1604;&#1603;&#1577; &#1575;&#1604;&#1593;&#1585;&#1576;&#1610;&#1577; &#1575;&#1604;&#1587;&#1593;&#1608;&#1583;&#1610;&#1577;</a></li>
<li style="margin-left: 792px;" data-region="2"><a class="link_metrics" title="&#3652;&#3607;&#3618;" href="http://www8.hp.com/th/en/home.html">&#3652;&#3607;&#3618;</a></li>
<li style="margin-left: 792px;" data-region="2"><a class="link_metrics" title="&#54620;&#44397;" href="http://welcome.hp.com/country/kr/ko/welcome.html">&#54620;&#44397;</a></li>
<li style="margin-left: 792px;" data-region="2"><a class="link_metrics" title="&#20013;&#21326;&#20154;&#27665;&#20849;&#21644;&#22269;" href="http://welcome.hp.com/country/cn/zh/welcome.html">&#20013;&#21326;&#20154;&#27665;&#20849;&#21644;&#22269;</a></li>
<li style="margin-left: 792px;" data-region="2"><a class="link_metrics" title="&#26085;&#26412;" href="http://welcome.hp.com/country/jp/ja/welcome.html">&#26085;&#26412;</a></li>
<li style="margin-left: 792px;" data-region="2"><a class="link_metrics" title="&#33274;&#28771;" href="http://welcome.hp.com/country/tw/zh/welcome.html">&#33274;&#28771;</a></li>
<li style="margin-left: 792px;" data-region="2"><a class="link_metrics" title="&#39321;&#28207;&#29305;&#21035;&#34892;&#25919;&#21306; - Traditional Chinese" href="http://welcome.hp.com/country/hk/zh/welcome.html">&#39321;&#28207;&#29305;&#21035;&#34892;&#25919;&#21306; - Traditional Chinese</a></li>
</ul>
</div>
<a class="cselectorbtn" title="Close"><span class="screenReading hf_rlv">Close</span></a></div>
</div>
</div>
<!-- Payment Icons -->
<div class="footer-payment-icons-container">
<ul class="footer-payment-icons">
<li class="payment-icon"><img  title="MasterCard" src="https://id-media.apjonlinecdn.com/wysiwyg/icon/master.gif"  alt="MasterCard"></li>
<li class="payment-icon"><img  title="Visa" src="https://id-media.apjonlinecdn.com/wysiwyg/icon/visa.gif"  alt="Visa"></li>
<li class="payment-icon"><img  title="AMEX" src="https://id-media.apjonlinecdn.com/wysiwyg/icon/MicrosoftTeams-image_2_.png"  alt="AMEX"></li>
<li class="payment-icon"><img  title="JCB" src="https://id-media.apjonlinecdn.com/wysiwyg/icon/JCB.gif"  alt="JCB"></li>
<li class="payment-icon"><img  title="Cash On Delivery" src="https://id-media.apjonlinecdn.com/wysiwyg/wysiwyg/icon/cod.gif"  alt="Cash On Delivery"></li>
<li class="payment-icon"><img  title="Bank Transfer" src="https://id-media.apjonlinecdn.com/wysiwyg/wysiwyg/icon/bank_transfer_icon.gif"  alt="Bank Transfer"></li>
<!--li class="payment-icon"><img  title="CCOD (Credit Card on Delivery)" src="https://id-media.apjonlinecdn.com/wysiwyg/icon/CCOD.gif"  alt="CCOD (Credit Card on Delivery)"></li-->
<li class="payment-icon"><img  title="Interest Free" src="https://id-media.apjonlinecdn.com/wysiwyg/wysiwyg/icon/interest_free_icon.gif"  alt="Interest Free" width="70" height="41"></li>
<li class="payment-icon"><img  title="OVO" src="https://id-media.apjonlinecdn.com/wysiwyg/icon/MicrosoftTeams-image_1_.png"  alt="OVO"></li>
<li class="payment-icon"><img  title="DANA" src="https://id-media.apjonlinecdn.com/wysiwyg/icon/MicrosoftTeams-image.png"  alt="DANA"></li>
</ul>
</div>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p></div></div></div>

<script type="text/x-magento-init">
    {
         "*": {
             "Magento_Theme/js/stores": {}
         }
    }
</script><div data-content-type="row" data-appearance="contained" data-element="main"><div data-enable-parallax="0" data-parallax-speed="0.5" data-background-images="{}" data-element="inner" style="justify-content: flex-start; display: flex; flex-direction: column; background-position: left top; background-size: cover; background-repeat: no-repeat; background-attachment: scroll; border-style: none; border-width: 1px; border-radius: 0px; margin: 0px 0px 10px; padding: 10px;"><div data-content-type="text" data-appearance="default" data-element="main" style="border-style: none; border-width: 1px; border-radius: 0px; margin: 0px; padding: 0px;"><style><!--
#YSF-BTN-HOLDER {
            display: none !important;
        }

        @-ms-viewport {
            width: auto !important;
        }
--></style>
<style><!--
.pc-contact-us-new ul,
        .pc-contact-us-new li {
            list-style: none;
            cursor: default;
            box-sizing: content-box;
            font-family: 'HP Simplified Regular', 'Helvetica Neue', Helvetica, Arial, sans-serif;
        }

        .pc-contact-us-new * {
            margin: 0;
            padding: 0;
            box-sizing: content-box;
            font-family: 'HP Simplified Regular', 'Helvetica Neue', Helvetica, Arial, sans-serif;
        }
.pc-contact-us-new.show_right{
right:0;
}
        .pc-contact-us-new {
            display: block;
            top: 60%;
            position: fixed;
            z-index: 9999;
            right: -79px;
            color: #FFFFFF;
            box-sizing: border-box;
            line-height: 1.5;
            font-size: 62.5%;
            box-sizing: content-box;
            font-family: 'HP Simplified Regular', 'Helvetica Neue', Helvetica, Arial, sans-serif;
            transition: all 500ms ease 0s;
        }

        .pc-contact-us-new a {
            text-decoration: none;
            display: flex;
            box-sizing: content-box;
            font-family: 'HP Simplified Regular', 'Helvetica Neue', Helvetica, Arial, sans-serif;
        }

        .pc-contact-us-new p {
            /* cursor: default; */
            text-align: center;
            font-size: 14px;
            padding-bottom: 3px;
            margin: 0;
            box-sizing: content-box;
            font-family: 'HP Simplified Regular', 'Helvetica Neue', Helvetica, Arial, sans-serif;
        }

        .pc-contact-us-new .one-rows {
            border-bottom: 1px solid #ccc;
            background-color: #0197d6;
            padding: 10px 1px;
            position: relative;
            box-shadow: 0px 1px 0px #01aef9 inset;
            border-bottom: 1px solid #036f9c;
            text-align: center;
            box-sizing: content-box;
            font-family: 'HP Simplified Regular', 'Helvetica Neue', Helvetica, Arial, sans-serif;
        }

        .pc-contact-us-new .one-rows>p {
            width: 77px;
            background-color: #0197d6;
            color: #fff;
            margin: 0 !important;
            padding: 0 !important;
            line-height: 15px;
            box-sizing: content-box;
            font-family: 'HP Simplified Regular', 'Helvetica Neue', Helvetica, Arial, sans-serif;
        }

        .pc-contact-us-new .icon_top {
            background: url('https://media.hpstore.cn/wysiwyg/banner/right002.png') no-repeat;
            width: 35px;
            height: 30px;
            margin-top: 6px;
            margin-left: 5px;
            display: inline-block;
            zoom: 1;
            overflow: hidden;
            box-sizing: content-box;
            font-family: 'HP Simplified Regular', 'Helvetica Neue', Helvetica, Arial, sans-serif;
        }

        .pc-contact-us-new .icon_hotline {
            background-position: -6px -11px;
            float: left;
            box-sizing: content-box;
            font-family: 'HP Simplified Regular', 'Helvetica Neue', Helvetica, Arial, sans-serif;
        }

        .pc-contact-us-new .icon_totop {
            transform: none;
            background-position: -6px -280px;
            margin: 0px 20px;
            height: 15px;
            box-sizing: content-box;
            font-family: 'HP Simplified Regular', 'Helvetica Neue', Helvetica, Arial, sans-serif;
        }

        .pc-contact-us-new .QQ_icon {
            background: url('https://media.hpstore.cn/wysiwyg/.thumbs/banner/QQ_icon.png') no-repeat;
            background-size: contain;
            float: left;
            box-sizing: content-box;
            font-family: 'HP Simplified Regular', 'Helvetica Neue', Helvetica, Arial, sans-serif;
        }

        .pc-contact-us-new .payIcon {
            background: url('https://media.hpstore.cn/wysiwyg/.thumbs/banner/payIcon.png') no-repeat;
            background-size: contain;
            float: left;
            box-sizing: content-box;
            font-family: 'HP Simplified Regular', 'Helvetica Neue', Helvetica, Arial, sans-serif;
        }

        .pc-contact-us-new .companyIcon {
            background: url('https://media.hpstore.cn/wysiwyg/.thumbs/banner/companyIcon.png') no-repeat;
            background-size: contain;
            float: left;
            box-sizing: content-box;
            font-family: 'HP Simplified Regular', 'Helvetica Neue', Helvetica, Arial, sans-serif;
        }

        .pc-contact-us-new .phoneIcon {
            background: url('https://media.hpstore.cn/wysiwyg/.thumbs/banner/phoneIcon.png') no-repeat;
            background-size: contain;
            float: left;
            box-sizing: content-box;
            font-family: 'HP Simplified Regular', 'Helvetica Neue', Helvetica, Arial, sans-serif;
        }

        .pc-contact-us-new .right_show {
            right: 79px;
            position: absolute;
            top: 0;
            color: #444444;
            text-align: center;
            font-size: 12px;
            border: 1px solid #0197d6;
            background-color: #FFFFFF;
            display: none;
            box-sizing: content-box;
            font-family: 'HP Simplified Regular', 'Helvetica Neue', Helvetica, Arial, sans-serif;
        }

        .pc-contact-us-new .right_show p {
            font-size: 14px;
            background-color: #c9efff;
            line-height: 12px;
            text-align: left;
            padding: 0 !important;
            margin-top: 3px;
            color: #0199d5;
            box-sizing: content-box;
            font-family: 'HP Simplified Regular', 'Helvetica Neue', Helvetica, Arial, sans-serif;
        }

        .pc-contact-us-new .right_show .one {
            line-height: 37px;
            box-sizing: content-box;
            font-family: 'HP Simplified Regular', 'Helvetica Neue', Helvetica, Arial, sans-serif;
        }

        .pc-contact-us-new .right_show .two {
            margin: 7px 0px;
            line-height: 14px;
            float: left;
            box-sizing: content-box;
            font-family: 'HP Simplified Regular', 'Helvetica Neue', Helvetica, Arial, sans-serif;
        }

        .pc-contact-us-new .right_show li:hover {
            background-color: #fff;
            box-sizing: content-box;
            font-family: 'HP Simplified Regular', 'Helvetica Neue', Helvetica, Arial, sans-serif;
        }

        .pc-contact-us-new .right_show li:hover p {
            background-color: #fff;
            box-sizing: content-box;
            font-family: 'HP Simplified Regular', 'Helvetica Neue', Helvetica, Arial, sans-serif;
        }

        .pc-contact-us-new .right_show li {
            border-bottom: 1px solid #0197d6;
            background-color: #c9efff;
            list-style: none;
            float: left;
            width: 100%;
            padding: 0;
            height: auto;
            box-sizing: content-box;
            font-family: 'HP Simplified Regular', 'Helvetica Neue', Helvetica, Arial, sans-serif;
        }

        .pc-contact-us-new .rightbar_show_hotline {
            width: 260px;
            border-bottom: none;
            padding: 0;
            box-sizing: content-box;
            font-family: 'HP Simplified Regular', 'Helvetica Neue', Helvetica, Arial, sans-serif;
        }

        .pc-contact-us-new .rightbar_show_hotline .backUl {
            width: 260px;
            box-sizing: content-box;
            font-family: 'HP Simplified Regular', 'Helvetica Neue', Helvetica, Arial, sans-serif;
        }

        .pc-contact-us-new .rightbar_show_hotline .callBack {
            margin-left: 10px;
            box-sizing: content-box;
            font-family: 'HP Simplified Regular', 'Helvetica Neue', Helvetica, Arial, sans-serif;
        }

        .pc-contact-us-new .supports li {
            border: none;
            border-bottom: 1px solid #0197d6;
            box-sizing: content-box;
            font-family: 'HP Simplified Regular', 'Helvetica Neue', Helvetica, Arial, sans-serif;
        }

        .pc-contact-us-new .supports {
            border-bottom: 1px solid #0197d6;
            box-sizing: content-box;
            font-family: 'HP Simplified Regular', 'Helvetica Neue', Helvetica, Arial, sans-serif;
        }

        .pc-contact-us-new .rightbar_show_wx p:nth-of-type(1) {
            width: auto;
            height: auto;
            background: none;
            background-position: inherit;
            margin-top: 0;
            text-align: center;
            box-sizing: content-box;
            font-family: 'HP Simplified Regular', 'Helvetica Neue', Helvetica, Arial, sans-serif;
        }

        .pc-contact-us-new .scrollTop {
            cursor: pointer;
            bottom: 50px;
            display: none;
            background-color: #AAAAAB;
            color: #666;
            box-sizing: content-box;
            font-family: 'HP Simplified Regular', 'Helvetica Neue', Helvetica, Arial, sans-serif;
        }

        .pc-contact-us-new .beforeSaleIcon {
            background: url('https://id-media.apjonlinecdn.com/wysiwyg/icon/image001-1.png') no-repeat;
            background-size: contain;
            box-sizing: content-box;
            font-family: 'HP Simplified Regular', 'Helvetica Neue', Helvetica, Arial, sans-serif;
        }

        .pc-contact-us-new .afterSaleIcon {
            background: url('https://id-media.apjonlinecdn.com/wysiwyg/icon/image019-1.png') no-repeat;
            background-size: contain;
            box-sizing: content-box;
            font-family: 'HP Simplified Regular', 'Helvetica Neue', Helvetica, Arial, sans-serif;
        }


        .pc-contact-us-new .HotlineIcon {
            background: url('https://id-media.apjonlinecdn.com/wysiwyg/icon/image004-1.png') no-repeat;
            background-size: contain;
            float: left;
            box-sizing: content-box;
            font-family: 'HP Simplified Regular', 'Helvetica Neue', Helvetica, Arial, sans-serif;
        }

        .pc-contact-us-new .WhatsAppIcon {
            background: url('https://id-media.apjonlinecdn.com/wysiwyg/icon/whatsapp.png') no-repeat;
            background-size: contain;
            float: left;
            box-sizing: content-box;
            font-family: 'HP Simplified Regular', 'Helvetica Neue', Helvetica, Arial, sans-serif;
        }

        .pc-contact-us-new .liveChatIcon {
            background: url('https://id-media.apjonlinecdn.com/wysiwyg/icon/image015-1.png') no-repeat;
            background-size: contain;
            float: left;
            box-sizing: content-box;
            font-family: 'HP Simplified Regular', 'Helvetica Neue', Helvetica, Arial, sans-serif;
        }

        .pc-contact-us-new .proLiveIcon {
            background: url('https://id-media.apjonlinecdn.com/wysiwyg/icon/image017-1.png') no-repeat;
            background-size: contain;
            float: left;
            box-sizing: content-box;
            font-family: 'HP Simplified Regular', 'Helvetica Neue', Helvetica, Arial, sans-serif;
        }

        .oneLine {
            line-height: 22px !important;
            box-sizing: content-box;
            font-family: 'HP Simplified Regular', 'Helvetica Neue', Helvetica, Arial, sans-serif;
        }

        .pointer {
            cursor: pointer !important;
            box-sizing: content-box;
            font-family: 'HP Simplified Regular', 'Helvetica Neue', Helvetica, Arial, sans-serif;
        }

        .one-rows>p {
            cursor: default;
            box-sizing: content-box;
            font-family: 'HP Simplified Regular', 'Helvetica Neue', Helvetica, Arial, sans-serif;
        }

        .supports {
            width: 371px !important;
            border: 1px solid #0197d6;
            box-sizing: content-box;
            font-family: 'HP Simplified Regular', 'Helvetica Neue', Helvetica, Arial, sans-serif;
        }

        .supports ul {
            display: block;
            float: left;
            width: 110px;
            border: none;
            list-style: none;
            margin: 0;
            padding: 0;
            box-sizing: content-box;
            font-family: 'HP Simplified Regular', 'Helvetica Neue', Helvetica, Arial, sans-serif;
        }

        .backUl li:last-child {
            height: 52px;
            padding-bottom: 0px;
            box-sizing: content-box;
            font-family: 'HP Simplified Regular', 'Helvetica Neue', Helvetica, Arial, sans-serif;
        }

        .pc-contact-us-new .action.location {
            font-style: normal;
            width: 35px;
            height: 33px;
            margin-top: 0px;
            margin-left: 5px;
            display: inline-block;
            zoom: 1;
            overflow: hidden;
        }

        .pc-contact-us-new .action.location::before {
            display: inline-block;
            font-family: 'luma-icons';
            font-size: 2.2rem;
            color: #8f8f8f;
            font-size: 26px;
            font-family: HPIcons;
            content: "\e601";
            color: #0194d4;
            font-family: 'iconfont';
        }
       .pc-contact-us-new .icon_store_local::before {
            color: #5dcce8 !important;
        }

        @media only screen and (max-width: 768px) {
.pc-contact-us-new{
display: none;
}
.pc-contact-us-new .action.location{
                 display:none;
}
            .pc-contact-us-new .one-rows {
                display: block;
                width: 75px;
                box-sizing: content-box;
                font-family: 'HP Simplified Regular', 'Helvetica Neue', Helvetica, Arial, sans-serif;
            }
            .pc-contact-us-new .one-rows > i{
                 display:none !important;
            }
            .pc-contact-us-new .one-rows > p {
                line-height: 50px !important;
                display: block;
                box-sizing: content-box;
                font-family: 'HP Simplified Regular', 'Helvetica Neue', Helvetica, Arial, sans-serif;
            }

            .pc-contact-us-new .right_show {
                right: 77px;
                box-sizing: content-box;
                font-family: 'HP Simplified Regular', 'Helvetica Neue', Helvetica, Arial, sans-serif;
            }

            .supports {
                width: auto !important;
                box-sizing: content-box;
                font-family: 'HP Simplified Regular', 'Helvetica Neue', Helvetica, Arial, sans-serif;
            }

            .supports ul {
                float: none;
                width: auto;
                box-sizing: content-box;
                font-family: 'HP Simplified Regular', 'Helvetica Neue', Helvetica, Arial, sans-serif;
            }

            .backUl li:last-child {
                padding-bottom: 0 !important;
                box-sizing: content-box;
                font-family: 'HP Simplified Regular', 'Helvetica Neue', Helvetica, Arial, sans-serif;
            }

            .pc-contact-us-new .scrollTop {
                background-color: #c8c8c8;
                opacity: 0.8;
                border-radius: 50%;
                width: 40px;
                height: 40px;
                overflow: hidden;
                position: fixed;
                right: 5px;
                box-sizing: content-box;
                font-family: 'HP Simplified Regular', 'Helvetica Neue', Helvetica, Arial, sans-serif;
            }

            .pc-contact-us-new .icon_totop {
                background-position: -10px -271px;
                height: 30px;
                box-sizing: content-box;
                font-family: 'HP Simplified Regular', 'Helvetica Neue', Helvetica, Arial, sans-serif;
            }
        }
--></style>
<div class="pc-contact-us-new show_right"><a class="hp_show_hide_right" style="position: absolute; left: -1px; top: 0px; background: #0197d6; -webkit-transform: rotate(90deg); transform: rotate(90deg); -webkit-transform-origin: top left; transform-origin: top left; padding: 0 10px; line-height: 28px; -webkit-box-shadow: 2px 2px 5px 0 rgba(0,0,0,.3); box-shadow: 2px 2px 5px 0 rgba(0,0,0,.3); z-index: -1; cursor: pointer;">
<div class="dds__drawer-tab-text" style="-webkit-transform: rotate(180deg); transform: rotate(180deg); color: #fff; font-size: 12px;">Contact Us</div>
</a>
<div class="one-rows"><i class="icon_top beforeSaleIcon">&nbsp;</i>
<p>Sales</p>
<div class="right_show rightbar_show_hotline rightbar_show_qq">
<ul>
<li contact_name="Find HP Store"><i class="icon_top HotlineIcon">&nbsp;</i>
<p class="two">Please call <span style="font-weight: bold;">007 803 331 5068</span><br> Mon-Fri 9AM to 6PM<br> Excluding public holidays</p>
</li>
<li contact_name="Whatsapp"><a class="pointer" href="https://wa.me/622150864288" target="_blank" rel="noopener"> <i class="icon_top WhatsAppIcon">&nbsp;</i>
<p class="two">Whatsapp instant enquiry with our agent<br>Mon-Fri 9AM to 6PM<br> Excluding public holidays</p>
</a></li>
<li contact_name="LiveChat"><a onclick="insideFrontInterface.openChatPane()"> <i class="icon_top liveChatIcon">&nbsp;</i>
<p class="two">Live Chat with our agent<br>Mon-Fri 9AM to 6PM<br> Excluding public holidays</p>
</a></li>
<!--li><a class="pointer" href="https://store.hp.com/hk-zh/default/live-stream" target="_blank" rel="noopener"> <i class="icon_top proLiveIcon">&nbsp;</i>
<p class="two oneLine">HP Pro Live</p>
</a></li--> <!--li contact_name="Find HP Store"><a class="pointer" href="https://www.hp.com/id-en/shop/storefinder" target="_blank" title="Store Finder" rel="noopener"> <i class="action location">&nbsp;</i>
<p class="two oneLine">Find HP shop</p>
</a></li--></ul>
<ul style="border-left: 1px solid #0197d6;">
<li style="height: auto; border-bottom: none;">
<p style="margin: 0; padding: 5px 0px!important; background-color: #0197d6; text-align: center;"><a style="color: #fff; justify-content: center;" href="https://wa.me/622150864288" target="_blank" rel="noopener">Instant Chat with Agent</a></p>
</li>
<li contact_name="Whatsapp QR" class="rightbar_show_wx" style="border-bottom: none; height: auto;"><a class="pointer" href="https://wa.me/622150864288" target="_blank" rel="noopener">
<p style="width: 100%;"><img  src="https://id-media.apjonlinecdn.com/wysiwyg/icon/IDbeforesales.jpg"  alt="" width="73"></p>
</a>
<p style="text-align: center; color: #000;">Before Sales Whatsapp Enquiry</p>
</li>
</ul>
</div>
</div>
<!--<div class="one-rows afterSale" style="border-bottom: none;"><i class="icon_top afterSaleIcon" style="float: none;">&nbsp;</i>
<p>Support</p>
<div class="right_show rightbar_show_hotline supports">
<ul class="backUl">
<li contact_name="Find HP Store"><i class="icon_top HotlineIcon">&nbsp;</i>
<p class="two">Please call <span style="font-weight: bold;">17864826615</span> for support<br>Mon-Fri 9AM to 6PM<br> Excluding public holidays</p>
</li>
<li contact_name="Whatsapp" style="border: none;"><a class="pointer" href="https://api.whatsapp.com/send?phone=17864826615&amp;text=SEA_EN" target="_blank" rel="noopener"> <i class="icon_top WhatsAppIcon">&nbsp;</i>
<p class="two">Instant whatsapp chat with <br> technical supports staff</p>
</a></li>
</ul>
<ul style="border-left: 1px solid #0197d6;">
<li style="height: auto; border-bottom: none;">
<p style="margin: 0; padding: 5px 0px!important; background-color: #0197d6; text-align: center;"><a style="color: #fff; justify-content: center;" href="https://api.whatsapp.com/send?phone=17864826615&amp;text=SEA_EN" target="_blank" rel="noopener">Service Center</a></p>
</li>
<li contact_name="Whatsapp QR" class="rightbar_show_wx" style="border-bottom: none; height: auto;"><a class="pointer" href="https://api.whatsapp.com/send?phone=17864826615&amp;text=SEA_EN" target="_blank" rel="noopener">
<p style="width: 100%;"><img  src="https://id-media.apjonlinecdn.com/wysiwyg/icon/IDtechEN.jpg"  alt="" width="73"></p>
</a>
<p style="text-align: center; color: #000;">Whatsapp Support</p>
</li>
</ul>
</div>
</div>-->
<div class="one-rows feedback" style="border-bottom: none; display: none; cursor: pointer;"><i class="icon_top beforeSaleIcon">&nbsp;</i>
<p>Feedback</p>
</div>
<a class="pointer" href="https://www.hp.com/id-en/shop/storefinder" target="_blank" title="Store Finder" rel="noopener">
<div class="one-rows store_finder store_event" style="border-bottom: none; cursor: pointer;"><i class="action location icon_store_local">&nbsp;</i>
<p class="two oneLine" style="width: 77px; color: #fff;">Stores</p>
</div>
</a>
<div class="scrollTop"><i class="icon_top icon_totop">&nbsp;</i></div>
</div>
<script>// <![CDATA[
require([
            'jquery'
        ], function ($) {
            // show/hide right menu event
            var pcunTimer;
            $(".pc-contact-us-new").on("mouseout", function () {
                pcunTimer = setTimeout(function () {
                    $(".pc-contact-us-new").removeClass("show_right");
                }, 5000)
            });
            $(".pc-contact-us-new").on("mouseover", function () {
                clearTimeout(pcunTimer);
            })
            $(".hp_show_hide_right").on("click", function () {
                if ($(".pc-contact-us-new").hasClass("show_right")) {
                    $(".pc-contact-us-new").removeClass("show_right");
                } else {
                    $(".pc-contact-us-new").addClass("show_right");
                }
            })

            $(window).scroll(function () {
                var objetsTop = document.body.scrollTop;
                if ($(window).scrollTop() > 100) {
                    $('.scrollTop').fadeIn(1500);
                } else {
                    $('.scrollTop').fadeOut(1500);
                }
            });
            $('.scrollTop').click(function () {
                $('body,html').animate({
                    scrollTop: 0
                },
                    1000);
                return false;
            });

            //new right bar
            $(".pc-contact-us-new .one-rows").hover(function () {
                if ($(this).find('.right_show').hasClass('rightbar_show_qq')) {
                    if ($('#inside_liveChatTab').length < 1) {
                        $('.openChatButton').hide();
                    } else {
                        $('.openChatButton').show();
                    }
                }
                $(this).find('.right_show').show();
            }, function () {
                var _this = $(this);
                _this.find('.right_show').hide();
            });
            // feedback
            var timers = setInterval(function () {
                if ($('#kampyleButtonContainer').length) {
                    clearInterval(timers);
                    $('#kampyleButtonContainer').hide();
                    $('.pc-contact-us-new').removeClass('hide');
                    $('.feedback').show();
                    $('.afterSale').css({ 'border-bottom': '1px solid #036f9c;' })
                    console.log($('#kampyleButtonContainer').length);
                    $('.feedback').on('click', function () {
                        $('#nebula_div_btn').trigger('click');
                    })
                }
            }, 50);

            setTimeout(function () {
                $('.pc-contact-us-new').removeClass('hide');
                setTimeout(function () {
                    $(".hp_show_hide_right").trigger("click")
                }, 5000)
            }, 6000);

        });
// ]]></script></div></div></div><footer class="page-footer"><div class="footer content"><div class="footer-additional-info"><div class="footer-additional-info-left"><div data-content-type="row" data-appearance="contained" data-element="main"><div data-enable-parallax="0" data-parallax-speed="0.5" data-background-images="{}" data-background-type="image" data-video-loop="true" data-video-play-only-visible="true" data-video-lazy-load="true" data-video-fallback-src="" data-element="inner" style="justify-content: flex-start; display: flex; flex-direction: column; background-position: left top; background-size: cover; background-repeat: no-repeat; background-attachment: scroll; border-style: none; border-width: 1px; border-radius: 0px; margin: 0px 0px 10px; padding: 0px;"><div data-content-type="text" data-appearance="default" data-element="main" style="border-style: none; border-width: 1px; border-radius: 0px; margin: 0px; padding: 0px;"><style>
.fonter_contact_us {
     margin-top: 28px;
}

.fonter_contact_us .block-title {
    font-size: 16px;
    color: #fff;
}

.fonter_contact_us .block-title strong {
    font-weight: 400;
} 

.fonter_contact_us .contact_us_info {
    margin-top: 30px !important;
}

.fonter_contact_us .contact_us_info li span {
    padding: 5px 0;
    color: #ABABAB;
    text-decoration: none;
    display: inline-block;
    font-size: 14px;
}

@media screen and (min-width: 768px) and (max-width:1024px) {
    .fonter_contact_us .block-title {
        font-size:1.2rem;
    }
}

@media screen and (min-width: 768px) {
    .footer-additional-info-left .fonter_contact_us {
        margin-left: 15px;
    }
}

</style>
<div class="fonter_contact_us">
<div class="block-title"><strong>Contact Us</strong></div>
<ul class="contact_us_info">
<li><span>007 803 331 5068</span></li>
<li><span>Mon-Fri 9am - 6 pm</span></li>
<li><span>(excl. public holidays)</span></li>
</ul>
</div></div></div></div></div><div class="footer-additional-info-right"><div data-content-type="row" data-appearance="full-bleed" data-enable-parallax="0" data-parallax-speed="0.5" data-background-images="{}" data-video-fallback-src="" data-element="main" style="justify-content: flex-start; display: flex; flex-direction: column; background-position: left top; background-size: cover; background-repeat: no-repeat; background-attachment: scroll; border-style: none; border-width: 0px; border-radius: 0px; margin: 0px; padding: 0px;"><div data-content-type="text" data-appearance="default" data-element="main" style="border-style: none; border-width: 0px; border-radius: 0px; margin: 0px; padding: 0px;"><div class="footer-links active">
<div class="block-title"><strong>Shop for Products</strong></div>
<ul>
<li><a href="https://www.hp.com/id-en/shop/laptops-tablets.html">Laptops</a></li>
<li><a href="https://www.hp.com/id-en/shop/desktops.html">Desktops</a></li>
<li><a href="https://www.hp.com/id-en/shop/printers.html">Printers</a></li>
<li><a href="https://www.hp.com/id-en/shop/hp-inkntoner-family">Ink &amp; Toner</a></li>
<li><a href="https://www.hp.com/id-en/shop/monitors.html">Monitors</a></li>
<li><a href="https://www.hp.com/id-en/shop/accessories.html">Accessories</a></li>
<li><a href="https://www.hp.com/id-en/shop/carepackfinder">Care Pack</a></li>
<li><a href="https://support.hp.com/id-en" target="_blank" rel="noopener">Support</a></li>
<li><a href="https://www.hp.com/id-en/shop/promotion/offer">Latest Offers</a></li>
<li><a href="https://www.hp.com/id-en/shop/latestproducts">Latest Products</a></li>
</ul>
</div></div></div><div data-content-type="row" data-appearance="full-bleed" data-enable-parallax="0" data-parallax-speed="0.5" data-background-images="{}" data-video-fallback-src="" data-element="main" style="justify-content: flex-start; display: flex; flex-direction: column; background-position: left top; background-size: cover; background-repeat: no-repeat; background-attachment: scroll; border-style: none; border-width: 0px; border-radius: 0px; margin: 0px; padding: 0px;"><div data-content-type="text" data-appearance="default" data-element="main" style="border-style: none; border-width: 0px; border-radius: 0px; margin: 0px; padding: 0px;"><div class="footer-links active">
<div class="block-title"><strong>Customer Service</strong></div>
<ul>
<li><a href="https://www.hp.com/id-en/shop/about-us">About Us</a></li>
<li><a href="https://support.hp.com/id-en" target="_blank" rel="noopener">Technical Support</a></li>
<li><a href="https://support.hp.com/id-en/drivers" target="_blank" rel="noopener">Software &amp; Drivers</a></li>
<li><a href="https://www.hp.com/id-en/shop/terms-conditions">Terms &amp; Conditions</a></li>
<li><a href="https://www.hp.com/id-en/shop/faqs">FAQs</a></li>
<li><a href="https://www.hp.com/id-en/shop/contact-us">Contact Us</a></li>
<li><a href="mailto:hpstoreindonesia@hp.com">Feedback &amp; Complaints</a></li>
<li><a href="https://www.hp.com/id-en/shop/howtoorder/">How to Order</a></li>
<li><a href="https://www.hp.com/id-en/shop/hpreview">Product Review</a></li>
</ul>
</div></div></div><div data-content-type="row" data-appearance="full-bleed" data-enable-parallax="0" data-parallax-speed="0.5" data-background-images="{}" data-video-fallback-src="" data-element="main" style="justify-content: flex-start; display: flex; flex-direction: column; background-position: left top; background-size: cover; background-repeat: no-repeat; background-attachment: scroll; border-style: none; border-width: 0px; border-radius: 0px; margin: 0px; padding: 0px;"><div data-content-type="text" data-appearance="default" data-element="main" style="border-style: none; border-width: 0px; border-radius: 0px; margin: 0px; padding: 0px;"><div class="footer-links active">
<div class="block-title"><strong>My HP</strong></div>
<ul>
<li><a href="https://www.hp.com/id-en/shop/customer/account/edit">My Account</a></li>
<li><a href="https://www.hp.com/id-en/shop/sales/guest/form">Track My Order</a></li>
<li><a href="https://www.hp.com/id-en/shop/storefinder"><span>Store locator</span> </a></li>
<li><a href="https://www.hp.com/id-en/shop/tech-takes" target="_blank" rel="noopener">Tech Info</a></li>
<li><a href="https://www.hp.com/id-en/shop/buying-guides"> <span>Buying Guides</span> </a></li>
<li><a href="https://www8.hp.com/us/en/hp-information/global-citizenship/index.html"><span>Sustainable Impact</span> </a></li>
</ul>
</div></div></div><div data-content-type="row" data-appearance="full-bleed" data-enable-parallax="0" data-parallax-speed="0.5" data-background-images="{}" data-video-fallback-src="" data-element="main" style="justify-content: flex-start; display: flex; flex-direction: column; background-position: left top; background-size: cover; background-repeat: no-repeat; background-attachment: scroll; border-style: none; border-width: 0px; border-radius: 0px; margin: 0px; padding: 0px;"><div data-content-type="text" data-appearance="default" data-element="main" style="border-style: none; border-width: 0px; border-radius: 0px; margin: 0px; padding: 0px;"><div class="footer-links active"><!--footer_links_private_store-->
<div class="block-title"><strong>Private Program</strong></div>
<ul>
<li><a href="https://www.hp.com/id-en/shop/epp-about-the-program" target="_blank" rel="noopener">HP Employee Store</a></li>
<li><a href="https://www.hp.com/id-en/shop/corporate-employee-program" target="_blank" rel="noopener">Corporate Employee Offers</a></li>
<li><a href="https://www.hp.com/id-en/shop/hp-for-business" target="_blank" rel="noopener">HP for Business</a></li>
<li><a href="https://www.hp.com/id-en/shop/education-store" target="_blank" rel="noopener">HP Student Store</a></li>
</ul>
</div></div></div><script type="text/x-magento-init">
    {
         "*": {
             "Magento_Theme/js/footer-links-adction": {}
         }
    }
</script>

<script>
    /**
     * Fix session expired bug: if you add to cart when the page is not ready
     *
     * NOTE:
     * It caused by the form key is changed, but page form key is old when re-render,
     * and reset form key when page-cache.js is load, so when in this time we click "Add to Cart" button,
     * it will throw session expired issue.
     * @type {string}
     */
    var loadingImg = "https://id-media.apjonlinecdn.com/static/version1640122770/frontend/HPOLS/stellar/en_AU/images/loader-1.gif";

    require(['jquery', 'domReady'],
        function(
            $, domReady
        ) {
            domReady(function () {
                $('.action.tocart').attr('disabled', 'disabled');
                $('.action.tocart span').prepend('<img class="cart-button-loading" style="height: 14px;" src="' + loadingImg + '">');
            });
        }
    );

    require(['jquery', 'domReady', 'pageCache'],
        function(
            $, domReady, pageCache
        ) {
            function removeCartButtonDisabledAttribute()
            {
                $('.action.tocart').attr('disabled', false);
                $('.action.tocart span .cart-button-loading').remove();
            }

            domReady(function () {
                removeCartButtonDisabledAttribute();
            });

            // According to PDP avg load time
            setTimeout(function () {
                removeCartButtonDisabledAttribute();
            }, 10000);
        }
    );
</script>
<div class="block newsletter add-newsletter-captcha" id="add-newsletter-captcha">
    <div class="title"><strong>Newsletter</strong></div>
    <div class="content">
        <form class="form subscribe"
            novalidate
            action="https://www.hp.com/id-en/shop/newsletter/subscriber/new/"
            method="post"
            data-mage-init='{"validation": {"errorClass": "mage-error"}}'
            id="newsletter-validate-detail">
            <div class="field newsletter">
                <label class="label" for="newsletter"><span>Sign Up for Our Newsletter:</span></label>
                <div class="control">
                    <input name="email" type="email" id="newsletter"
                                placeholder="Enter your email address"
                                data-validate="{required:true, 'validate-email':true}"/>
                </div>
            </div>
            <div class="add-captcha-newsletter">
                <!-- BLOCK captcha1 --><!-- /BLOCK captcha1 -->            </div>
            <div class="actions">
                <button class="action subscribe primary" title="Subscribe" type="submit">
                    <span>Subscribe</span>
                </button>
            </div>
        </form>
    </div>
</div>
</div></div><div class="copyright-container">
        <small class="copyright">
        <span>© Copyright 2021 HP Development Company, L.P. </span>
    </small>
</div>
<div class="footer-additional-links"><div data-content-type="row" data-appearance="full-bleed" data-enable-parallax="0" data-parallax-speed="0.5" data-background-images="{}" data-element="main" style="justify-content: flex-start; display: flex; flex-direction: column; background-position: left top; background-size: cover; background-repeat: no-repeat; background-attachment: scroll; border-style: none; border-width: 0px; border-radius: 0px; margin: 0px; padding: 0px;"><div data-content-type="text" data-appearance="default" data-element="main" style="border-style: none; border-width: 0px; border-radius: 0px; margin: 0px; padding: 0px;">
<div data-content-type="row" data-appearance="full-bleed" data-enable-parallax="0" data-parallax-speed="0.5" data-background-images="{}" data-video-fallback-src="" data-element="main" style="justify-content: flex-start; display: flex; flex-direction: column; background-position: left top; background-size: cover; background-repeat: no-repeat; background-attachment: scroll; border-style: none; border-width: 0px; border-radius: 0px; margin: 0px; padding: 0px;"><div data-content-type="text" data-appearance="default" data-element="main" style="border-style: none; border-width: 0px; border-radius: 0px; margin: 0px; padding: 0px;"><ul class="footer additional-links">
<li><a href="https://www.hp.com/id-en/shop/sitemap">Sitemap</a></li>
<li><a href="https://www.hp.com/us-en/privacy/privacy.html" target="_blank" rel="noopener">Privacy</a></li>
<li><a href="https://www.hp.com/id-en/shop/terms-of-use">Terms of Use</a></li>
</ul></div></div></div></div><div data-content-type="row" data-appearance="full-bleed" data-enable-parallax="0" data-parallax-speed="0.5" data-background-images="{}" data-element="main" style="justify-content: flex-start; display: flex; flex-direction: column; background-position: left top; background-size: cover; background-repeat: no-repeat; background-attachment: scroll; border-style: none; border-width: 0px; border-radius: 0px; margin: 0px; padding: 0px;"><div data-content-type="text" data-appearance="default" data-element="main" style="border-style: none; border-width: 0px; border-radius: 0px; margin: 0px; padding: 0px;"><div class="footer connected"><label><strong>Stay connected</strong></label>
<ul class="connections">
<li><a class="fa fa-facebook" title="Facebook" href="https://www.facebook.com/HPindonesia" target="_blank"></a></li>
<li><a class="fa fa-youtube-play" title="Youtube Play" href="https://www.youtube.com/channel/UCVc8LD8L1hR0P0iH10_qIhg" target="_blank"></a></li>
<li><a class="fa fa-twitter" title="Twitter" href="https://twitter.com/hanyaHPuntukku" target="_blank"></a></li>
</ul>
</div></div></div></div><div
    class="field-recaptcha"
    id="msp-recaptcha-58312e2256fb5bcda606e9b5046e00ef-container"
    data-bind="scope:'msp-recaptcha-58312e2256fb5bcda606e9b5046e00ef'"
>
    <!-- ko template: getTemplate() --><!-- /ko -->
</div>

<script type="text/javascript">
    require(['jquery', 'domReady!'], function ($) {
        $('#msp-recaptcha-58312e2256fb5bcda606e9b5046e00ef-container')
            .appendTo('#newsletter-validate-detail');
    });
</script>

<script type="text/x-magento-init">
{
    "#msp-recaptcha-58312e2256fb5bcda606e9b5046e00ef-container": {
        "Magento_Ui/js/core/app": {"components":{"msp-recaptcha-58312e2256fb5bcda606e9b5046e00ef":{"component":"MSP_ReCaptcha\/js\/reCaptcha","reCaptchaId":"msp-recaptcha-58312e2256fb5bcda606e9b5046e00ef","zone":"newsletter","badge":"bottomright","settings":{"siteKey":"6LeeUtwZAAAAAD3OtImYt6ea1_5e3Z9D_chCsm0g","size":"invisible","badge":null,"theme":"light","lang":null,"enabled":{"login":false,"create":false,"forgot":false,"contact":false,"review":false,"newsletter":false,"sendfriend":false,"sales_guest_form":false,"share_cart":true}}}}}    }
}
</script>
</div></footer><style>
.page-wrapper .footer-disclaimer p {
    font-size: 1.3rem;
}

.product-items .product-item .product-desc-features ul li {
    font-size: 1.4rem;
}

 .product-item-photo-box .discount-tag {
    font-size: 1.4rem;
}

.notify-slider.products.wrapper.grid {
margin-bottom: 0 !important;
}
.slider.products.list.items.product-items.slides {
margin-bottom: 0 !important;
}
.slider.products.list.items.product-items.slides .product-item-info{
    padding: 0 !important;
}
.product.details.product-item-details.products-textlink.clearfix {
margin-top: 0 !important;
}

 @media (min-width: 769px) {
          .modals-wrapper .modal-popup.catalog-product-plots_pop .modal-inner-wrap {
            max-width: 700px;
        }

        .modal-popup.catalog-product-plots_pop .modal-header {
            z-index: 0;
        }

        .modal-popup.catalog-product-plots_pop  .action-close:before {
             display: inline-block;
            color: white;
        }
    }

@media only screen and (max-width: 768px) {
   .pagebuilder-mobile-hidden {
       display: none !important;
   }
}

.ad-adbutler img {
    height: auto;
}
/* hide price in what's new */
.flexsliderContent .lowest-price {
    display: none;
}

.checkout-cart-index .customer-share-link-v1:after {
content: '\e90e' !important;
}

.checkout-cart-index div.customer-v2.shared .shared-cart-icon:after {
content: '\e90e' !important;
}

.customer-share-v1 .shared-cart-content .shared-cart-right .shared-cart-copy-link .copy-link-button #shared-link-button:hover span:after {
    content: '\e90a';
    font-family: 'icomoon';
    position: absolute;
    top: 1px;
    right: -20px;
    transition: all 0.5s;
}
</style>

<style>
.catalog-product-view .product-dynamic-discount .recommended-products .block.related .products.list li {
    width: 12.5%;
}

.promotion-offer-index .promotion-offers-container .toolbar-sorter.sorter .right {
    float: right;
    box-shadow: unset;
    margin: 0;
    min-height: unset;
    line-height: unset;
}
</style>
<style>
.checkout-cart-index .cart-container .cart.table-wrapper #shopping-cart-table .product-item-details .promotion-message>a {
   color: #CF4900 !important;
}

.checkout-cart-index .cart-container .cart.table-wrapper #shopping-cart-table .product-item-details .promotion-message-secondly>a  {
   color: #CF4900 !important;
}

.checkout-cart-index .product-item-info a .product-item-photo p:nth-of-type(1) {
    display: -webkit-box;
    -webkit-box-orient: vertical;
    -webkit-line-clamp: 5;
    line-height: 27px;
    overflow: hidden;
    color: #2c3038;
    font-size: 14px;
}
</style>
<script> window._peq = window._peq || []; window._peq.push(["init"]); </script>
<script src="https://clientcdn.pushengage.com/core/e16652b8-bbeb-4ed8-a669-b4b7038b2cfe.js" async></script>
<style>
@media screen and (min-width: 768px) {
    .elasticsearch-product-filter.account>.page-wrapper>#maincontent.page-main>.columns .sidebar.sidebar-main {
        width: 18.3%;
        padding-right: 0;
    }
}

@media screen and (min-width: 768px) and (max-width: 1024px) {
	.elasticsearch-product-filter.account>.page-wrapper>#maincontent.page-main>.columns .sidebar.sidebar-main {
		width: 18.3%;
        padding-right: 0;
	}
}
</style>
<script type="text/x-magento-init">
        {
            "*": {
                "Magento_Ui/js/core/app": {
                    "components": {
                        "storage-manager": {
                            "component": "Magento_Catalog/js/storage-manager",
                            "appendTo": "",
                            "storagesConfiguration" : {"recently_viewed_product":{"requestConfig":{"syncUrl":"https:\/\/www.hp.com\/id-en\/shop\/catalog\/product\/frontend_action_synchronize\/"},"lifetime":"1000","allowToSendRequest":null},"recently_compared_product":{"requestConfig":{"syncUrl":"https:\/\/www.hp.com\/id-en\/shop\/catalog\/product\/frontend_action_synchronize\/"},"lifetime":"1000","allowToSendRequest":null},"product_data_storage":{"updateRequestConfig":{"url":"https:\/\/www.hp.com\/id-en\/shop\/rest\/en\/V1\/products-render-info"},"requestConfig":{"syncUrl":"https:\/\/www.hp.com\/id-en\/shop\/catalog\/product\/frontend_action_synchronize\/"},"allowToSendRequest":null}}                        }
                    }
                }
            }
        }
</script>


<script  data-mfmofile="true">
    require(['jquery', 'domReady!'], function($) {

        $('.mf-ytw-wrapper').click(function(){

            var $e = $(this);
            if ($e.data('iframe-created')) return;
            $e.data('iframe-created', 1);

            var eh = $e.width() / 1.777777;
            var maxH = parseInt($e.data('height'));
            if (eh > maxH) {
                eh = maxH;
            }

            var iframe = document.createElement("iframe");
            iframe.setAttribute("width", "100%");
            iframe.setAttribute("height", eh);
            iframe.setAttribute("frameborder", "0");
            iframe.setAttribute("allow", "autoplay");
            if ($e.data('allowfullscreen')) {
                iframe.setAttribute("allowfullscreen", "");
            }
            iframe.setAttribute("src", $e.data('iframe-src'));
            $e.html('');
            $e.append(iframe);
        });

        function resize() {
            $('.mf-ytw-wrapper').each(function () {

                var $e = $(this);
                var w = $e.data('width');
                if (w.indexOf('px') != -1) {
                    w = parseInt(w);

                    var pw = $e.parent().width();
                    if (pw < w) {
                        var ew = pw;
                    }
                    var ew = (pw < w) ? pw : w;
                    $e.width(ew);
                }
                var eh = $e.width() / 1.777777;
                var maxH = parseInt($e.data('height'));
                if (eh > maxH) {
                    eh = maxH;
                }
                $e.find('.mf-ytw-youtube').height(eh);

                $e.find('iframe').height(eh);
            });
        }

        resize();
        $(window).resize(resize);
    });


    require(['jquery', 'domReady!'], function($){

        if (!$('.mf-ytw-youtube').length) {
            return;
        }

        var $w = $(window);
        function lazyload() {
            var inview = $('.mf-ytw-youtube').filter(function() {
                var th = 300;
                var $e = $(this);
                if ($e.is(":hidden")) return;

                var wt = $w.scrollTop(),
                    wb = wt + $w.height(),
                    et = $e.offset().top,
                    eb = et + $e.height();

                return eb >= wt - th && et <= wb + th;
            });

            inview.each(function () {
                var $e = $(this);
                var a = ['background', 'background-size'];
                for (var i=0;i<a.length;i++) {
                    if ($e.data(a[i])) {
                        $e.css(a[i], $e.data(a[i]));
                        $e.data(a[i], false);
                    }
                }
            });
        }

        lazyload();
        $w.on("scroll.mf-ytw-youtube resize.mf-ytw-youtube lookup.mf-ytw-youtube", lazyload);
    });

    require([
        'jquery',
        'domReady!'
    ], function($) {
        $('[data-mf-ytw-youtube-link]').click(function(event){
            var $this = $(this);
            require([
                'Magento_Ui/js/modal/alert',
            ], function(alert) {
                var url = $this.data('mf-ytw-youtube-link');
                if (!url) return;

                var rg = /^.*(youtu\.be\/|vi?\/|u\/\w\/|embed\/|\?vi?=|\&vi?=)([^#\&\?]*).*/;
                var id = url.match(rg);
                if (!id || id.length < 3) return;
                
                event.stopImmediatePropagation();

                url = 'https://www.youtube.com/embed/'+id[2]+'?start=1&amp;rel=0&amp;showinfo=0&amp;autoplay=1&modestbranding=1';
                if ($this.data('mf-ytw-start-at')) {
                    url += '&start=' + $this.data('mf-ytw-start-at')
                }

                var width = $this.data('mf-ytw-width');
                var height = '500px';
                if ($this.data('mf-ytw-height')) {
                    height = $this.data('mf-ytw-height');   
                }

                var popupClass = 'mf-ytw-youtube-popup-' + Math.ceil(Math.random() * 1000000);

                alert({
                    title: '',
                    modalClass: 'mf-ytw-youtube-popup ' + popupClass,
                    content: '<iframe width="100%" height="' + height + '" frameborder="0" allow="autoplay" ' +
                         ( $this.data('mf-ytw-allowfullscreen') ? 'allowfullscreen=""' : '') + 
                         ' src="' + url + '"></iframe>',
                    actions: {
                        always: function () {
                        }
                    },
                    buttons: [
                       
                    ]
                });

                if (width && $(window).width() >= 1024) {
                    setTimeout(function(){
                        var $e = $('.' + popupClass + ' .modal-inner-wrap');
                        $e.attr('style', 
                            ($e.attr('style') ? $e.attr('style') + '; ' : '') + 
                            'width:' + width + '!important'
                        );
                    }, 500);
                }
                return false;
            });
        });
    });
</script>


<div data-content-type="row" data-appearance="full-bleed" data-enable-parallax="0" data-parallax-speed="0.5" data-background-images="{}" data-video-fallback-src="" data-element="main" style="justify-content: flex-start; display: flex; flex-direction: column; background-position: left top; background-size: cover; background-repeat: no-repeat; background-attachment: scroll; border-style: none; border-width: 0px; border-radius: 0px; margin: 0px; padding: 0px;"><div data-content-type="text" data-appearance="default" data-element="main" style="border-style: none; border-width: 0px; border-radius: 0px; margin: 0px; padding: 0px;"><div class="footer-disclaimer">
<p>Price is inclusive of 10% VAT (where applicable).</p>
<p id="FVGKCNV">Ultrabook, Celeron, Celeron Inside, Core Inside, Intel, Intel Logo, Intel Atom, Intel Atom Inside, Intel Core, Intel Inside, Intel Inside Logo, Intel vPro, Intel Evo, Pentium, Pentium Inside, vPro Inside, Xeon, Xeon Inside, Intel Agilex, Arria, Cyclone, Movidius, eASIC, Ethernet, Iris, Killer, MAX, Select Solutions, Si Photonics, Stratix, Tofino, and Intel Optane are trademarks of Intel Corporation or its subsidiaries.</p>
<p>Not all features are available in all editions or versions of Windows. Systems may require upgraded and/or separately purchased hardware, drivers and/or software to take full advantage of Windows functionality. See <a href="https://www.microsoft.com" rel="external nofollow">www.microsoft.com</a></p>
<p>The following applies to HP systems with Intel Skylake or next-generation silicon chip-based system shipping with Windows 7, Windows 8, Windows 8.1 or Windows 10 Pro systems downgraded to Windows 7 Professional, Windows 8 Pro, or Windows 8.1: This version of Windows running with the processor or chipsets used in this system has limited support from Microsoft. For more information about Microsoft&rsquo;s support, please see Microsoft's Support Lifecycle FAQ at <a href="https://support.microsoft.com/lifecycle" rel="external nofollow">www.support.microsoft.com/lifecycle</a></p>
<p>In accordance with the <a href="https://blogs.windows.com/business/2016/08/11/updates-to-silicon-support-policy-for-windows/" rel="external nofollow">Microsoft Silicon Support Policy</a>, HP does not support or provide drivers for Windows 8 or Windows 7 on products configured with Intel or AMD 7th generation and forward processors</p>
<p id="TXM6BHG"><strong>Covid-19 Disclaimer: </strong>We are working to meet the current extraordinary customer demand for our products. Our website reflects current product availability but circumstances are dynamic. You may check your order status via our Track My Order page (Click <a href="sales/order/history/">Here</a> to log in). We will send updates by email as soon as they are available. We greatly value your business and appreciate your ongoing patience as we work to get your order to you.</p>
<p><strong>Please note</strong>: The product colour and look &amp; feel may vary from the visual representation on the Website. While all efforts are made to check pricing, product specifications and other errors, inadvertent errors do occur from time to time and HP reserves the right to decline orders arising from such errors.&nbsp;For pen drives, please reach out to respective manufacturers for any service queries.</p>
<div></div>
</div></div></div>

<script>
    require(['magentoStorefrontEvents'], function (magentoStorefrontEvents) {
        magentoStorefrontEvents.context.setPage({
            pageType: "Product"
        });
        magentoStorefrontEvents.context.setContext("pageExtended", {
            action: "product-view"
        });
        magentoStorefrontEvents.context.setProduct({"productId":7651,"name":"OMEN by HP Gaming Laptop 16-c0099AX","sku":"488F4PA","topLevelSku":"488F4PA","specialFromDate":null,"specialToDate":null,"newFromDate":null,"newToDate":null,"createdAt":"2021-09-14 09:20:16","updatedAt":"2021-12-24 08:33:57","categories":["6"],"productType":"simple","canonicalUrl":"https:\/\/www.hp.com\/id-en\/shop\/omen-by-hp-laptop-16-c0099ax-488f4pa.html?___store=en","mainImageUrl":"https:\/\/id-media.apjonlinecdn.com\/catalog\/product\/2\/1\/21c1_omen_vanellope_16_60w_nonnumpad_4zone_lcd_micasilver_front_1.png"})
    });
</script>

<script type="text/x-magento-init">
    {
         "*": {
              "Magento_GoogleTagManager/js/detailproduct": {"configData":null,"productName":"OMEN by HP Gaming Laptop 16-c0099AX"}         }
    }
</script><script type="text/x-magento-init">
    {
        "#bloatfish-socialproofnotifications-container": {
            "Magento_Ui/js/core/app": {
                "components": {
                    "bloatfish-socialproofnotifications": {
                        "component": "Bloatfish_SocialProofNotifications/js/view/notification",
                            "id": "7651",
                            "icons": {"live":"https:\/\/id-media.apjonlinecdn.com\/bloatfish\/socialproofnotifications\/icon\/catalog_product\/live.svg","viewed":"https:\/\/id-media.apjonlinecdn.com\/bloatfish\/socialproofnotifications\/icon\/catalog_product\/viewed.svg","orders":"https:\/\/id-media.apjonlinecdn.com\/bloatfish\/socialproofnotifications\/icon\/catalog_product\/orders.svg"},
                            "iconSize": {"width":"32","height":"32"},
                            "stylesheet": "#bloatfish-socialproofnotifications-container{ pointer-events:none; position:fixed; bottom:15px; right:20px; z-index:9; }\n#bloatfish-socialproofnotifications-container > *{ opacity:0; border:1px solid #c1c1c1; border-radius:2px; background-color:rgba(255,255, 255, 0.92); box-shadow:6px 6px 13px -8px rgba(209,209,209,1); color:#333333; padding:12px; width:300px; margin-bottom:5px; text-align:left; }\n#bloatfish-socialproofnotifications-container .text{ width:100%; }\n#bloatfish-socialproofnotifications-container .icon{ max-width:none; margin-right:10px; }\n#bloatfish-socialproofnotifications-container .container-inner{ display:flex; align-items:center; }\n@keyframes socialProofNotificationsFadeIn{ from{ opacity:0; } to{ opacity:1; } }\n@keyframes socialProofNotificationsFadeOut{ from{ opacity:1; } to{ opacity:0; } }",
                            "animation": {"speed":"1","show":"0,2,4","duration":"10"},
                            "useThemeStyles": "",
                            "pageType": "catalog_product",
                            "ajaxUrl": "https\u003A\u002F\u002Fwww.hp.com\u002Fid\u002Den\u002Fshop\u002Fbloatfish_socialproofnotifications\u002Fcatalogproduct\u002Ffetch\u002F"
                    }
                }
            }
        }
    }
</script>

<div data-bind="scope: 'bloatfish-socialproofnotifications'"
     id="bloatfish-socialproofnotifications-container"
     class="no-display">
    <!-- ko template: getTemplate() --><!-- /ko -->
</div>
<div id="cookie-modal" style="display: none" data-mage-init='{"addressCookiePopup": {"contentSelector":"#cookie-modal"}}'>
    <div class="modal-body-content">
        <h2>Your privacy</h2>
        <p>We want to use your data input to help improve your shopping experience. Would you like to share your online data (such as location pin code) to get a better customer experience?</p>
    </div>
</div>
<div class="footer-vendor-service-address-container">
<div data-content-type="row" data-appearance="full-bleed" data-enable-parallax="0" data-parallax-speed="0.5" data-background-images="{}" data-element="main" style="justify-content: flex-start; display: flex; flex-direction: column; background-position: left top; background-size: cover; background-repeat: no-repeat; background-attachment: scroll; border-style: none; border-width: 0px; border-radius: 0px; margin: 0px; padding: 0px;"><div data-content-type="text" data-appearance="default" data-element="main" style="border-style: none; border-width: 0px; border-radius: 0px; margin: 0px; padding: 0px;"><div></div></div></div></div>
<div class="bugs-container">
    <small class="bugs">
        <a class="bugs-link" href="mailto:hpstoreindonesia@hp.com">
            <span class="icn_bug">HP employees: Report website issues</span>
        </a>
<!--        <a href="http://www.magentocommerce.com/bug-tracking" target="_blank">-->
<!--            --><!--        </a>-->
    </small>
</div>
    <!--suppress HtmlUnknownTarget -->
    <script type="text/javascript" src="//apps.bazaarvoice.com/deployments/hp-en_id/main_site/production/en_ID/bv.js"></script>
</div>    <script type="text/javascript">window.NREUM||(NREUM={});NREUM.info={"beacon":"bam-cell.nr-data.net","licenseKey":"1a5b7260fe","applicationID":"163144472","transactionName":"MVxSZxBTVxACUhVeCQgWcVAWW1YNTFIAQwcKVlccEkBWBxZSFRgQD1xH","queueTime":0,"applicationTime":1552,"atts":"HRtFEVhJRE9BUEMNHRtE","errorBeacon":"bam-cell.nr-data.net","agent":""}</script><noscript><img src="https://www.hp.com/akam/11/pixel_3cdae8a1?a=dD1mZjRlNjMwYTI3YWVkMjE5ZjJjNTYzMjllMThmYzA2MjIxNWIzODYzJmpzPW9mZg==" style="visibility: hidden; position: absolute; left: -999px; top: -999px;" /></noscript><script type="text/javascript" nonce="b00147d5f6e093472a9b3ca05e8d464e" src="/ARYbBN/ltxN/tW5g/bWSL/swrb2g/t5D5rkNf3p/YmoAVGE0AQ/AC0CcVIx/J0oB"></script></body>
</html>

<?=$this->endSection()?>