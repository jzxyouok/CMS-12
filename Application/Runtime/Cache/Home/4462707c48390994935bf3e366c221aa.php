<?php if (!defined('THINK_PATH')) exit(); session_start(); ?>
<!DOCTYPE html>
<!-- saved from url=(0025)https://start.me/p/VjXLqa -->
<html class="no-js is-chrome is-x11 default-background history no-mobile no-touch-api no-touch can-hover fine-pointer device-type-mouse" data-background="backgrounds/pkgyelq7jbk5dvf6yuhb" id="startme" lang="zh-CN" style="background-image: url(https://static.start.me/f_webp,q_auto/backgrounds/pkgyelq7jbk5dvf6yuhb);"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<script type="text/javascript" src="./main_files/67cfc3c03a"></script><script src="./main_files/nr-974.min.js"></script><script async="" src="https://www.googletagmanager.com/gtm.js?id=GTM-PV67T8"></script><script src="./main_files/measuring-3cb0605b467d74ad353f2b9947702c4a5384fc7b0e8917b5a32ba43c2a8d346c.js"></script>
<script>
  measure('loading');
  measure('beforeInit');
</script>


<title>首页 - start.me</title>
<meta content="首页" name="description">
<meta content="start.me" name="author">
<link href="https://start.me/p/VjXLqa" rel="canonical">

<meta content="IE=EDGE" http-equiv="X-UA-Compatible">
<script type="text/javascript">window.NREUM||(NREUM={});NREUM.info={"beacon":"bam.nr-data.net","errorBeacon":"bam.nr-data.net","licenseKey":"67cfc3c03a","applicationID":"1930998","transactionName":"dAtZQhNXXFlUFhwVBFABRBkGXUQ=","queueTime":0,"applicationTime":94,"agent":""}</script>
<script type="text/javascript">(window.NREUM||(NREUM={})).loader_config={xpid:"VQMPVVZUGwIJV1FbDgk="};window.NREUM||(NREUM={}),__nr_require=function(t,e,n){function r(n){if(!e[n]){var o=e[n]={exports:{}};t[n][0].call(o.exports,function(e){var o=t[n][1][e];return r(o||e)},o,o.exports)}return e[n].exports}if("function"==typeof __nr_require)return __nr_require;for(var o=0;o<n.length;o++)r(n[o]);return r}({1:[function(t,e,n){function r(t){try{s.console&&console.log(t)}catch(e){}}var o,i=t("ee"),a=t(15),s={};try{o=localStorage.getItem("__nr_flags").split(","),console&&"function"==typeof console.log&&(s.console=!0,o.indexOf("dev")!==-1&&(s.dev=!0),o.indexOf("nr_dev")!==-1&&(s.nrDev=!0))}catch(c){}s.nrDev&&i.on("internal-error",function(t){r(t.stack)}),s.dev&&i.on("fn-err",function(t,e,n){r(n.stack)}),s.dev&&(r("NR AGENT IN DEVELOPMENT MODE"),r("flags: "+a(s,function(t,e){return t}).join(", ")))},{}],2:[function(t,e,n){function r(t,e,n,r,o){try{d?d-=1:i("err",[o||new UncaughtException(t,e,n)])}catch(s){try{i("ierr",[s,(new Date).getTime(),!0])}catch(c){}}return"function"==typeof f&&f.apply(this,a(arguments))}function UncaughtException(t,e,n){this.message=t||"Uncaught error with no additional information",this.sourceURL=e,this.line=n}function o(t){i("err",[t,(new Date).getTime()])}var i=t("handle"),a=t(16),s=t("ee"),c=t("loader"),f=window.onerror,u=!1,d=0;c.features.err=!0,t(1),window.onerror=r;try{throw new Error}catch(l){"stack"in l&&(t(8),t(7),"addEventListener"in window&&t(5),c.xhrWrappable&&t(9),u=!0)}s.on("fn-start",function(t,e,n){u&&(d+=1)}),s.on("fn-err",function(t,e,n){u&&(this.thrown=!0,o(n))}),s.on("fn-end",function(){u&&!this.thrown&&d>0&&(d-=1)}),s.on("internal-error",function(t){i("ierr",[t,(new Date).getTime(),!0])})},{}],3:[function(t,e,n){t("loader").features.ins=!0},{}],4:[function(t,e,n){function r(t){}if(window.performance&&window.performance.timing&&window.performance.getEntriesByType){var o=t("ee"),i=t("handle"),a=t(8),s=t(7),c="learResourceTimings",f="addEventListener",u="resourcetimingbufferfull",d="bstResource",l="resource",p="-start",h="-end",m="fn"+p,w="fn"+h,v="bstTimer",y="pushState";t("loader").features.stn=!0,t(6);var g=NREUM.o.EV;o.on(m,function(t,e){var n=t[0];n instanceof g&&(this.bstStart=Date.now())}),o.on(w,function(t,e){var n=t[0];n instanceof g&&i("bst",[n,e,this.bstStart,Date.now()])}),a.on(m,function(t,e,n){this.bstStart=Date.now(),this.bstType=n}),a.on(w,function(t,e){i(v,[e,this.bstStart,Date.now(),this.bstType])}),s.on(m,function(){this.bstStart=Date.now()}),s.on(w,function(t,e){i(v,[e,this.bstStart,Date.now(),"requestAnimationFrame"])}),o.on(y+p,function(t){this.time=Date.now(),this.startPath=location.pathname+location.hash}),o.on(y+h,function(t){i("bstHist",[location.pathname+location.hash,this.startPath,this.time])}),f in window.performance&&(window.performance["c"+c]?window.performance[f](u,function(t){i(d,[window.performance.getEntriesByType(l)]),window.performance["c"+c]()},!1):window.performance[f]("webkit"+u,function(t){i(d,[window.performance.getEntriesByType(l)]),window.performance["webkitC"+c]()},!1)),document[f]("scroll",r,!1),document[f]("keypress",r,!1),document[f]("click",r,!1)}},{}],5:[function(t,e,n){function r(t){for(var e=t;e&&!e.hasOwnProperty(u);)e=Object.getPrototypeOf(e);e&&o(e)}function o(t){s.inPlace(t,[u,d],"-",i)}function i(t,e){return t[1]}var a=t("ee").get("events"),s=t(17)(a),c=t("gos"),f=XMLHttpRequest,u="addEventListener",d="removeEventListener";e.exports=a,"getPrototypeOf"in Object?(r(document),r(window),r(f.prototype)):f.prototype.hasOwnProperty(u)&&(o(window),o(f.prototype)),a.on(u+"-start",function(t,e){if(t[1]){var n=t[1];if("function"==typeof n){var r=c(n,"nr@wrapped",function(){return s(n,"fn-",null,n.name||"anonymous")});this.wrapped=t[1]=r}else"function"==typeof n.handleEvent&&s.inPlace(n,["handleEvent"],"fn-")}}),a.on(d+"-start",function(t){var e=this.wrapped;e&&(t[1]=e)})},{}],6:[function(t,e,n){var r=t("ee").get("history"),o=t(17)(r);e.exports=r,o.inPlace(window.history,["pushState","replaceState"],"-")},{}],7:[function(t,e,n){var r=t("ee").get("raf"),o=t(17)(r),i="equestAnimationFrame";e.exports=r,o.inPlace(window,["r"+i,"mozR"+i,"webkitR"+i,"msR"+i],"raf-"),r.on("raf-start",function(t){t[0]=o(t[0],"fn-")})},{}],8:[function(t,e,n){function r(t,e,n){t[0]=a(t[0],"fn-",null,n)}function o(t,e,n){this.method=n,this.timerDuration="number"==typeof t[1]?t[1]:0,t[0]=a(t[0],"fn-",this,n)}var i=t("ee").get("timer"),a=t(17)(i),s="setTimeout",c="setInterval",f="clearTimeout",u="-start",d="-";e.exports=i,a.inPlace(window,[s,"setImmediate"],s+d),a.inPlace(window,[c],c+d),a.inPlace(window,[f,"clearImmediate"],f+d),i.on(c+u,r),i.on(s+u,o)},{}],9:[function(t,e,n){function r(t,e){d.inPlace(e,["onreadystatechange"],"fn-",s)}function o(){var t=this,e=u.context(t);t.readyState>3&&!e.resolved&&(e.resolved=!0,u.emit("xhr-resolved",[],t)),d.inPlace(t,w,"fn-",s)}function i(t){v.push(t),h&&(g=-g,b.data=g)}function a(){for(var t=0;t<v.length;t++)r([],v[t]);v.length&&(v=[])}function s(t,e){return e}function c(t,e){for(var n in t)e[n]=t[n];return e}t(5);var f=t("ee"),u=f.get("xhr"),d=t(17)(u),l=NREUM.o,p=l.XHR,h=l.MO,m="readystatechange",w=["onload","onerror","onabort","onloadstart","onloadend","onprogress","ontimeout"],v=[];e.exports=u;var y=window.XMLHttpRequest=function(t){var e=new p(t);try{u.emit("new-xhr",[e],e),e.addEventListener(m,o,!1)}catch(n){try{u.emit("internal-error",[n])}catch(r){}}return e};if(c(p,y),y.prototype=p.prototype,d.inPlace(y.prototype,["open","send"],"-xhr-",s),u.on("send-xhr-start",function(t,e){r(t,e),i(e)}),u.on("open-xhr-start",r),h){var g=1,b=document.createTextNode(g);new h(a).observe(b,{characterData:!0})}else f.on("fn-end",function(t){t[0]&&t[0].type===m||a()})},{}],10:[function(t,e,n){function r(t){var e=this.params,n=this.metrics;if(!this.ended){this.ended=!0;for(var r=0;r<d;r++)t.removeEventListener(u[r],this.listener,!1);if(!e.aborted){if(n.duration=(new Date).getTime()-this.startTime,4===t.readyState){e.status=t.status;var i=o(t,this.lastSize);if(i&&(n.rxSize=i),this.sameOrigin){var a=t.getResponseHeader("X-NewRelic-App-Data");a&&(e.cat=a.split(", ").pop())}}else e.status=0;n.cbTime=this.cbTime,f.emit("xhr-done",[t],t),s("xhr",[e,n,this.startTime])}}}function o(t,e){var n=t.responseType;if("json"===n&&null!==e)return e;var r="arraybuffer"===n||"blob"===n||"json"===n?t.response:t.responseText;return h(r)}function i(t,e){var n=c(e),r=t.params;r.host=n.hostname+":"+n.port,r.pathname=n.pathname,t.sameOrigin=n.sameOrigin}var a=t("loader");if(a.xhrWrappable){var s=t("handle"),c=t(11),f=t("ee"),u=["load","error","abort","timeout"],d=u.length,l=t("id"),p=t(14),h=t(13),m=window.XMLHttpRequest;a.features.xhr=!0,t(9),f.on("new-xhr",function(t){var e=this;e.totalCbs=0,e.called=0,e.cbTime=0,e.end=r,e.ended=!1,e.xhrGuids={},e.lastSize=null,p&&(p>34||p<10)||window.opera||t.addEventListener("progress",function(t){e.lastSize=t.loaded},!1)}),f.on("open-xhr-start",function(t){this.params={method:t[0]},i(this,t[1]),this.metrics={}}),f.on("open-xhr-end",function(t,e){"loader_config"in NREUM&&"xpid"in NREUM.loader_config&&this.sameOrigin&&e.setRequestHeader("X-NewRelic-ID",NREUM.loader_config.xpid)}),f.on("send-xhr-start",function(t,e){var n=this.metrics,r=t[0],o=this;if(n&&r){var i=h(r);i&&(n.txSize=i)}this.startTime=(new Date).getTime(),this.listener=function(t){try{"abort"===t.type&&(o.params.aborted=!0),("load"!==t.type||o.called===o.totalCbs&&(o.onloadCalled||"function"!=typeof e.onload))&&o.end(e)}catch(n){try{f.emit("internal-error",[n])}catch(r){}}};for(var a=0;a<d;a++)e.addEventListener(u[a],this.listener,!1)}),f.on("xhr-cb-time",function(t,e,n){this.cbTime+=t,e?this.onloadCalled=!0:this.called+=1,this.called!==this.totalCbs||!this.onloadCalled&&"function"==typeof n.onload||this.end(n)}),f.on("xhr-load-added",function(t,e){var n=""+l(t)+!!e;this.xhrGuids&&!this.xhrGuids[n]&&(this.xhrGuids[n]=!0,this.totalCbs+=1)}),f.on("xhr-load-removed",function(t,e){var n=""+l(t)+!!e;this.xhrGuids&&this.xhrGuids[n]&&(delete this.xhrGuids[n],this.totalCbs-=1)}),f.on("addEventListener-end",function(t,e){e instanceof m&&"load"===t[0]&&f.emit("xhr-load-added",[t[1],t[2]],e)}),f.on("removeEventListener-end",function(t,e){e instanceof m&&"load"===t[0]&&f.emit("xhr-load-removed",[t[1],t[2]],e)}),f.on("fn-start",function(t,e,n){e instanceof m&&("onload"===n&&(this.onload=!0),("load"===(t[0]&&t[0].type)||this.onload)&&(this.xhrCbStart=(new Date).getTime()))}),f.on("fn-end",function(t,e){this.xhrCbStart&&f.emit("xhr-cb-time",[(new Date).getTime()-this.xhrCbStart,this.onload,e],e)})}},{}],11:[function(t,e,n){e.exports=function(t){var e=document.createElement("a"),n=window.location,r={};e.href=t,r.port=e.port;var o=e.href.split("://");!r.port&&o[1]&&(r.port=o[1].split("/")[0].split("@").pop().split(":")[1]),r.port&&"0"!==r.port||(r.port="https"===o[0]?"443":"80"),r.hostname=e.hostname||n.hostname,r.pathname=e.pathname,r.protocol=o[0],"/"!==r.pathname.charAt(0)&&(r.pathname="/"+r.pathname);var i=!e.protocol||":"===e.protocol||e.protocol===n.protocol,a=e.hostname===document.domain&&e.port===n.port;return r.sameOrigin=i&&(!e.hostname||a),r}},{}],12:[function(t,e,n){function r(){}function o(t,e,n){return function(){return i(t,[(new Date).getTime()].concat(s(arguments)),e?null:this,n),e?void 0:this}}var i=t("handle"),a=t(15),s=t(16),c=t("ee").get("tracer"),f=NREUM;"undefined"==typeof window.newrelic&&(newrelic=f);var u=["setPageViewName","setCustomAttribute","setErrorHandler","finished","addToTrace","inlineHit"],d="api-",l=d+"ixn-";a(u,function(t,e){f[e]=o(d+e,!0,"api")}),f.addPageAction=o(d+"addPageAction",!0),e.exports=newrelic,f.interaction=function(){return(new r).get()};var p=r.prototype={createTracer:function(t,e){var n={},r=this,o="function"==typeof e;return i(l+"tracer",[Date.now(),t,n],r),function(){if(c.emit((o?"":"no-")+"fn-start",[Date.now(),r,o],n),o)try{return e.apply(this,arguments)}finally{c.emit("fn-end",[Date.now()],n)}}}};a("setName,setAttribute,save,ignore,onEnd,getContext,end,get".split(","),function(t,e){p[e]=o(l+e)}),newrelic.noticeError=function(t){"string"==typeof t&&(t=new Error(t)),i("err",[t,(new Date).getTime()])}},{}],13:[function(t,e,n){e.exports=function(t){if("string"==typeof t&&t.length)return t.length;if("object"==typeof t){if("undefined"!=typeof ArrayBuffer&&t instanceof ArrayBuffer&&t.byteLength)return t.byteLength;if("undefined"!=typeof Blob&&t instanceof Blob&&t.size)return t.size;if(!("undefined"!=typeof FormData&&t instanceof FormData))try{return JSON.stringify(t).length}catch(e){return}}}},{}],14:[function(t,e,n){var r=0,o=navigator.userAgent.match(/Firefox[\/\s](\d+\.\d+)/);o&&(r=+o[1]),e.exports=r},{}],15:[function(t,e,n){function r(t,e){var n=[],r="",i=0;for(r in t)o.call(t,r)&&(n[i]=e(r,t[r]),i+=1);return n}var o=Object.prototype.hasOwnProperty;e.exports=r},{}],16:[function(t,e,n){function r(t,e,n){e||(e=0),"undefined"==typeof n&&(n=t?t.length:0);for(var r=-1,o=n-e||0,i=Array(o<0?0:o);++r<o;)i[r]=t[e+r];return i}e.exports=r},{}],17:[function(t,e,n){function r(t){return!(t&&"function"==typeof t&&t.apply&&!t[a])}var o=t("ee"),i=t(16),a="nr@original",s=Object.prototype.hasOwnProperty,c=!1;e.exports=function(t){function e(t,e,n,o){function nrWrapper(){var r,a,s,c;try{a=this,r=i(arguments),s="function"==typeof n?n(r,a):n||{}}catch(u){d([u,"",[r,a,o],s])}f(e+"start",[r,a,o],s);try{return c=t.apply(a,r)}catch(l){throw f(e+"err",[r,a,l],s),l}finally{f(e+"end",[r,a,c],s)}}return r(t)?t:(e||(e=""),nrWrapper[a]=t,u(t,nrWrapper),nrWrapper)}function n(t,n,o,i){o||(o="");var a,s,c,f="-"===o.charAt(0);for(c=0;c<n.length;c++)s=n[c],a=t[s],r(a)||(t[s]=e(a,f?s+o:o,i,s))}function f(e,n,r){if(!c){c=!0;try{t.emit(e,n,r)}catch(o){d([o,e,n,r])}c=!1}}function u(t,e){if(Object.defineProperty&&Object.keys)try{var n=Object.keys(t);return n.forEach(function(n){Object.defineProperty(e,n,{get:function(){return t[n]},set:function(e){return t[n]=e,e}})}),e}catch(r){d([r])}for(var o in t)s.call(t,o)&&(e[o]=t[o]);return e}function d(e){try{t.emit("internal-error",e)}catch(n){}}return t||(t=o),e.inPlace=n,e.flag=a,e}},{}],ee:[function(t,e,n){function r(){}function o(t){function e(t){return t&&t instanceof r?t:t?s(t,a,i):i()}function n(n,r,o){t&&t(n,r,o);for(var i=e(o),a=l(n),s=a.length,c=0;c<s;c++)a[c].apply(i,r);var u=f[w[n]];return u&&u.push([v,n,r,i]),i}function d(t,e){m[t]=l(t).concat(e)}function l(t){return m[t]||[]}function p(t){return u[t]=u[t]||o(n)}function h(t,e){c(t,function(t,n){e=e||"feature",w[n]=e,e in f||(f[e]=[])})}var m={},w={},v={on:d,emit:n,get:p,listeners:l,context:e,buffer:h};return v}function i(){return new r}var a="nr@context",s=t("gos"),c=t(15),f={},u={},d=e.exports=o();d.backlog=f},{}],gos:[function(t,e,n){function r(t,e,n){if(o.call(t,e))return t[e];var r=n();if(Object.defineProperty&&Object.keys)try{return Object.defineProperty(t,e,{value:r,writable:!0,enumerable:!1}),r}catch(i){}return t[e]=r,r}var o=Object.prototype.hasOwnProperty;e.exports=r},{}],handle:[function(t,e,n){function r(t,e,n,r){o.buffer([t],r),o.emit(t,e,n)}var o=t("ee").get("handle");e.exports=r,r.ee=o},{}],id:[function(t,e,n){function r(t){var e=typeof t;return!t||"object"!==e&&"function"!==e?-1:t===window?0:a(t,i,function(){return o++})}var o=1,i="nr@id",a=t("gos");e.exports=r},{}],loader:[function(t,e,n){function r(){if(!g++){var t=y.info=NREUM.info,e=u.getElementsByTagName("script")[0];if(t&&t.licenseKey&&t.applicationID&&e){c(w,function(e,n){t[e]||(t[e]=n)});var n="https"===m.split(":")[0]||t.sslForHttp;y.proto=n?"https://":"http://",s("mark",["onload",a()],null,"api");var r=u.createElement("script");r.src=y.proto+t.agent,e.parentNode.insertBefore(r,e)}}}function o(){"complete"===u.readyState&&i()}function i(){s("mark",["domContent",a()],null,"api")}function a(){return(new Date).getTime()}var s=t("handle"),c=t(15),f=window,u=f.document,d="addEventListener",l="attachEvent",p=f.XMLHttpRequest,h=p&&p.prototype;NREUM.o={ST:setTimeout,CT:clearTimeout,XHR:p,REQ:f.Request,EV:f.Event,PR:f.Promise,MO:f.MutationObserver},t(12);var m=""+location,w={beacon:"bam.nr-data.net",errorBeacon:"bam.nr-data.net",agent:"js-agent.newrelic.com/nr-974.min.js"},v=p&&h&&h[d]&&!/CriOS/.test(navigator.userAgent),y=e.exports={offset:a(),origin:m,features:{},xhrWrappable:v};u[d]?(u[d]("DOMContentLoaded",i,!1),f[d]("load",r,!1)):(u[l]("onreadystatechange",o),f[l]("onload",r)),s("mark",["firstbyte",a()],null,"api");var g=0},{}]},{},["loader",2,10,4,3]);</script><style type="text/css" adt="123"></style>
<meta name="csrf-param" content="authenticity_token">
<meta name="csrf-token" content="LYAruKGr40Ik3enTiWz/LzLcsaQwbJVbPYa9tfnTQCIdDOqVbV4tfZ0H3ZC8DU+a6HHp961dzpIs8MpXTMwv+w==">
<meta content="noindex" name="robots">
<script type="application/ld+json">
{ "@context" : "http://schema.org",
  "@type" : "WebSite",
  "name" : "start.me",
  "url" : "http://start.me"
}


</script>
<meta content="首页 - start.me" property="og:title">
<meta content="https://start.me/p/VjXLqa" property="og:url">
<meta content="website" property="og:type">
<meta content="start.me" property="og:site_name">
<meta content="https://assets.start.me/assets/og-logo-abdb1e40384ec68dae3e0a89aa52277feaeab72ed0ef47e50d5311d48c44039c.png" property="og:image">
<meta content="256485647863321" property="fb:app_id">
<link href="https://assets.start.me/assets/favicons/favicon-16-d0ea6e85850f3376e7b2f59edd02b85c0cfaf03b3599bd1ba28aee0ddc89a6fd.png" rel="icon" sizes="16x16">
<link href="https://assets.start.me/assets/favicons/favicon-32-d9804a22114ac97e688dd80c76477470becc1982fa652515782e06ad7fbbb587.png" rel="icon" sizes="32x32">
<link href="https://assets.start.me/assets/favicons/favicon-64-d380f65fbf9ef9c7cc1a006e7d6068ca14b2a5585960c28634d654d8d05566c9.png" rel="icon" sizes="64x64">
<link href="https://assets.start.me/assets/favicons/favicon-128-98077173bffc047a32f4bda6c995898ee0a884e245b78efa18d99c1cdd02e0a6.png" rel="icon" sizes="128x128">
<link href="https://assets.start.me/assets/favicons/favicon-192-59c61618a9b091092edd68fea4036158cfaf13e77bc9e6db1a5d61f11c469e04.png" rel="icon" sizes="192x192">
<link href="https://assets.start.me/assets/favicons/favicon-256-d25cfb75f825ddf44161a7f1ae1e689280165b1761771ca0a1d043cb198b0f62.png" rel="icon" sizes="256x256">
<meta content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<link href="https://assets.start.me/assets/favicons/favicon-76-aff57cbc1b0b96dfe0fb5bda2830e8303327bc73408f5a5c1140d3dee82712ef.png" rel="apple-touch-icon-precomposed" sizes="76x76">
<link href="https://assets.start.me/assets/favicons/favicon-76-aff57cbc1b0b96dfe0fb5bda2830e8303327bc73408f5a5c1140d3dee82712ef.png" rel="apple-touch-icon" sizes="76x76">
<link href="https://assets.start.me/assets/favicons/favicon-120-7f2e04a24c769c99e57fdef3e0f5f24c993c6bbfa13928547f2416e56ddbc125.png" rel="apple-touch-icon-precomposed" sizes="120x120">
<link href="https://assets.start.me/assets/favicons/favicon-120-7f2e04a24c769c99e57fdef3e0f5f24c993c6bbfa13928547f2416e56ddbc125.png" rel="apple-touch-icon" sizes="120x120">
<link href="https://assets.start.me/assets/favicons/favicon-152-ec8077a4481cef82fc7938488136630b13734937e84f18e602d40b6a5c95c702.png" rel="apple-touch-icon-precomposed" sizes="152x152">
<link href="https://assets.start.me/assets/favicons/favicon-152-ec8077a4481cef82fc7938488136630b13734937e84f18e602d40b6a5c95c702.png" rel="apple-touch-icon" sizes="152x152">
<link href="https://assets.start.me/assets/favicons/favicon-180-147af1eeb303abfd213a22f1b35bdb9705cc2401ef0b4d38b652aa37a79e3605.png" rel="apple-touch-icon-precomposed" sizes="180x180">
<link href="https://assets.start.me/assets/favicons/favicon-180-147af1eeb303abfd213a22f1b35bdb9705cc2401ef0b4d38b652aa37a79e3605.png" rel="apple-touch-icon" sizes="180x180">
<!--[if IE]>
<link href="/favicon.ico" rel="shortcut icon">
<![endif]-->
<meta content="#6392ff" name="msapplication-TileColor">
<meta content="https://assets.start.me/assets/favicons/favicon-150-2e7828d102dd6d5d5007f5dec62f4d0d076e3ea8eda0526ee4997a94c443bc0f.png" name="msapplication-TileImage">
<meta content="yes" name="mobile-web-app-capable">
<meta content="yes" name="apple-mobile-web-app-capable">
<link href="https://chrome.google.com/webstore/detail/cfmnkhhioonhiehehedmnjibmampjiab" rel="chrome-webstore-item">
<link data-hash="sha256:a6157ad8d992ac54ae72757c81b9eb4c98d48630c771bc93c25b28e54a2aa252" href="https://addons.mozilla.org/firefox/downloads/file/340328/startme_jouw_persoonlijke_firefox_startpagina-1.4.3.xpi" rel="firefox-extension-xpi">
<meta content="obieelmbnhmflidokdjooeeibeaiialm" property="aoc:app_id">
<link href="https://start.me/opensearch.xml" rel="search" title="start.me" type="application/opensearchdescription+xml">
<link rel="stylesheet" media="all" href="./main_files/application-97aea26ad930716d9eb71469fbb6d0f28374b9fd2e40bd97ae3c5a01806792bf.css">
<!--[if lt IE 9]>
<script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
<![endif]-->
<meta data-asset-path="https://assets.start.me/assets/" data-bugsnag-apikey="5654d99e67d265e2573a74ec6819f01f" data-cloudinary-cloud="hp20rcdax" data-country="cn" data-current-user="{&quot;id&quot;:707542,&quot;name&quot;:&quot;Meshren&quot;,&quot;email&quot;:&quot;meshren@163.com&quot;,&quot;firstname&quot;:null,&quot;raw_name&quot;:null,&quot;role&quot;:&quot;user&quot;,&quot;is_anonymous&quot;:false,&quot;is_premium&quot;:false,&quot;dummy_email&quot;:false,&quot;url&quot;:&quot;/u/WEO7GQ/meshren&quot;,&quot;sign_in_count&quot;:65,&quot;notifications&quot;:{&quot;tour&quot;:&quot;2016-10-21 06:59:53 +0000&quot;,&quot;chrome-notification-shown&quot;:&quot;2016-10-18 12:30:33 +0000&quot;},&quot;is_impersonated&quot;:false,&quot;organizations&quot;:[],&quot;no_context_menus&quot;:false,&quot;country&quot;:&quot;cn&quot;}" data-environment="production" data-favicon-provider="https://favicon.start.me/%{domain}" data-flash="{}" data-locale="zh-CN" data-primary-base-url="https://start.me" data-primary-domain="start.me" data-proxy-domain="proxy.start.me" data-skimlinks-site-id="68773X1516876" data-viglink-api-key="81bf6f0ffb36fad31ddf86eacb7dd8e7" id="configuration" name="configuration">

<script>!
    function e(t, n, i) {
        function o(a, s) {
            if (!n[a]) {
                if (!t[a]) {
                    var l = "function" == typeof require && require;
                    if (!s && l) return l(a, !0);
                    if (r) return r(a, !0);
                    var c = new Error("Cannot find module '" + a + "'");
                    throw c.code = "MODULE_NOT_FOUND",
                        c
                }
                var d = n[a] = {
                    exports: {}
                };
                t[a][0].call(d.exports, function (e) {
                    var n = t[a][1][e];
                    return o(n ? n : e)
                }, d, d.exports, e, t, n, i)
            }
            return n[a].exports
        }
        for (var r = "function" == typeof require && require, a = 0; a < i.length; a++) o(i[a]);
        return o
    }({
        1: [function (e) {
            var t = window.location.href,
                n = document.createElement("div"),
                i = document.createElement("i");
            if (i.setAttribute("id", "ADT-PlayHTML5-btn"), i.innerText = "HTML5\u89c6\u9891", i.setAttribute("style", "display:inline-block;font-size: 20px;padding:5px 10px;font-weight: 700;line-height:34px;color: #fff;text-align: center;vertical-align: baseline;border-radius:10px;background-color: #428bca;cursor: pointer;font-style: normal;"), n.setAttribute("style", "float:right;margin-top:-50px;width:300px;height:50px;padding-top:8px;"), n.appendChild(i), /v\.youku\.com\/v_show\/.*/.test(t)) document.querySelector(".s_main div.base").appendChild(n);
            else if (/www\.tudou\.com\/(albumplay|programs)\/.*/.test(t)) document.querySelector("#summary").appendChild(n);
            else if (/www\.mgtv\.com\/v\/.*/.test(t)) {
                var i = document.createElement("i"),
                    o = document.createElement("div"),
                    r = document.createElement("em");
                i.setAttribute("style", "display:inline-block;margin:auto 20px;cursor:pointer;"),
                    i.innerText = "HTML5\u89c6\u9891",
                    r.innerText = "|",
                    r.setAttribute("class", "v-panel-dividing"),
                    o.setAttribute("style", "margin-right: 10px;height: 28px;overflow: hidden;position: relative;top: -1px;float: left;"),
                    o.appendChild(r),
                    o.appendChild(i),
                    document.querySelector("div.v-panel-box").appendChild(o)
            }
            i.addEventListener("click", function () {
                function t(e, t) {
                    if (!e) return console.log("\u89e3\u6790\u5185\u5bb9\u5730\u5740\u5931\u8d25"),
                        void delete window[s];
                    console.log("\u89e3\u6790\u5185\u5bb9\u5730\u5740\u5b8c\u6210" + e.map(function (e) {
                            return '<a href="' + e[1] + '" target="_blank">' + e[0] + "</a>"
                        }).join(" "));
                    var n = o("div", {
                        appendTo: document.body,
                        style: {
                            position: "fixed",
                            background: "rgba(0,0,0,0.8)",
                            top: "0",
                            left: "0",
                            width: "100%",
                            height: "100%",
                            zIndex: "999999"
                        }
                    });
                    o("div", {
                        appendTo: n,
                        style: {
                            width: "1120px",
                            height: "630px",
                            position: "absolute",
                            top: "40%",
                            left: "50%",
                            marginTop: "-250px",
                            marginLeft: "-560px",
                            borderRadius: "2px",
                            boxShadow: "0 0 2px #000000, 0 0 200px #000000"
                        }
                    }),
                        o("div", {
                            appendTo: n,
                            style: {
                                position: "absolute",
                                bottom: "10px",
                                left: "0",
                                right: "0",
                                height: "20px",
                                lineHeight: "20px",
                                textAlign: "center",
                                fontSize: "12px",
                                fontFamily: "arial, sans-serif"
                            }
                        });
                    var a = o("div", {
                        appendTo: n,
                        innerHTML: '<div id="html5_Player_placeHolder"></div>',
                        style: {
                            width: "1120px",
                            height: "630px",
                            position: "absolute",
                            backgroundColor: "#000000",
                            top: "40%",
                            left: "50%",
                            marginTop: "-250px",
                            marginLeft: "-560px",
                            borderRadius: "2px",
                            overflow: "hidden"
                        }
                    });
                    o("div", {
                        appendTo: a,
                        innerHTML: "&times;",
                        style: {
                            width: "20px",
                            height: "20px",
                            lineHeight: "20px",
                            textAlign: "center",
                            position: "absolute",
                            color: "#ffffff",
                            fontSize: "20px",
                            top: "5px",
                            right: "5px",
                            textShadow: "0 0 2px #000000",
                            fontWeight: "bold",
                            fontFamily: 'Garamond, "Apple Garamond"',
                            cursor: "pointer"
                        }
                    }).onclick = function () {
                        document.body.removeChild(n),
                            l.video.src = "about:blank",
                            delete window[s]
                    };
                    var l = new r("html5_Player_placeHolder", "1120x630", e, t);
                    l.iframe.contentWindow.focus(),
                        i(),
                        l.iframe.style.display = "block",
                        window[s] = !0
                }
                var n, i = e("./flashBlocker"),
                    o = e("./createElement"),
                    r = e("./player"),
                    a = e("./purl"),
                    s = e("./h5key"),
                    l = e("./seekers");
                if (1 != window[s]) {
                    var c = a(location.href);
                    "zythum.sinaapp.com" === c.attr("host") && "/mama2/ps4/" === c.attr("directory") && c.param("url") && (c = a(c.param("url"))),
                        l.forEach(function (e) {
                            n !== !0 && !! e.match(c) == !0 && (console.log("\u5f00\u59cb\u89e3\u6790\u5185\u5bb9\u5730\u5740"), n = !0, e.getVideos(c, t))
                        }),
                    void 0 === n && console.log("\u627e\u4e0d\u5230\u89e3\u6790")
                }
            })
        },
            {
                "./createElement": 4,
                "./flashBlocker": 5,
                "./h5key": 6,
                "./player": 9,
                "./purl": 10,
                "./seekers": 15
            }],
        2: [function (e, t) {
            function n(e, t) {
                return void 0 === e ? t : e
            }
            function i(e, t) {
                return 0 === t.length ? e : e + (-1 === e.indexOf("?") ? "?" : "&") + t
            }
            function o(e) {
                var t = n(e.url, ""),
                    o = s(n(e.param, {})),
                    l = n(e.method, "GET"),
                    c = n(e.callback, a),
                    d = n(e.contentType, "json"),
                    u = n(e.context, null);
                if (e.jsonp) return r(i(t, o), c.bind(u), "string" == typeof e.jsonp ? e.jsonp : void 0);
                var h = new XMLHttpRequest;
                "get" === l.toLowerCase() && (t = i(t, o), o = ""),
                    h.open(l, t, !0),
                    h.setRequestHeader("Content-Type", "application/x-www-form-urlencoded; charset=UTF-8"),
                    h.send(o),
                    h.onreadystatechange = function () {
                        if (4 === h.readyState) {
                            if (200 === h.status) {
                                var e = h.responseText;
                                if ("json" === d.toLowerCase()) try {
                                    e = JSON.parse(e)
                                } catch (t) {
                                    e = -1
                                }
                                return c.call(u, e)
                            }
                            return c.call(u, -1)
                        }
                    }
            }
            var r = e("./jsonp"),
                a = e("./noop"),
                s = e("./queryString");
            t.exports = o
        },
            {
                "./jsonp": 7,
                "./noop": 8,
                "./queryString": 11
            }],
        3: [function (e, t) {
            t.exports = !! document.createElement("video").canPlayType("application/x-mpegURL")
        },
            {}],
        4: [function (e, t) {
            function n(e, t) {
                var n = document.createElement(e);
                if ("function" == typeof t) t.call(n);
                else for (var i in t) if (t.hasOwnProperty(i)) switch (i) {
                    case "appendTo":
                        t[i].appendChild(n);
                        break;
                    case "innerHTML":
                    case "className":
                    case "id":
                        n[i] = t[i];
                        break;
                    case "style":
                        var o = t[i];
                        for (var r in o) o.hasOwnProperty(r) && (n.style[r] = o[r]);
                        break;
                    default:
                        n.setAttribute(i, t[i] + "")
                }
                return n
            }
            t.exports = n
        },
            {}],
        5: [function (e, t) {
            var n = '<div style="text-shadow:0 0 2px #eee;letter-spacing:-1px;background:#eee;font-weight:bold;padding:0;font-family:arial,sans-serif;font-size:30px;color:#ccc;width:152px;height:52px;border:4px solid #ccc;border-radius:12px;position:absolute;top:50%;left:50%;margin:-30px 0 0 -80px;text-align:center;line-height:52px;">Flash</div>',
                i = 0,
                o = {},
                r = function () {
                    var e = this.getAttribute("data-flash-index"),
                        t = o[e];
                    t.setAttribute("data-flash-show", "isshow"),
                        this.parentNode.insertBefore(t, this),
                        this.parentNode.removeChild(this),
                        this.removeEventListener("click", r, !1)
                },
                a = function (e, t, a) {
                    var s = i++,
                        l = document.defaultView.getComputedStyle(e, null),
                        c = l.position;
                    c = "static" === c ? "relative" : c;
                    var d = l.margin,
                        u = "inline" == l.display ? "inline-block" : l.display,
                        l = ["", "width:" + t + "px", "height:" + a + "px", "position:" + c, "margin:" + d, "display:" + u, "margin:0", "padding:0", "border:0", "border-radius:1px", "cursor:pointer", "background:-webkit-linear-gradient(top, rgba(240,240,240,1)0%,rgba(220,220,220,1)100%)", ""];
                    o[s] = e;
                    var h = document.createElement("div");
                    return h.setAttribute("title", "&#x70B9;&#x6211;&#x8FD8;&#x539F;Flash"),
                        h.setAttribute("data-flash-index", "" + s),
                        e.parentNode.insertBefore(h, e),
                        e.parentNode.removeChild(e),
                        h.addEventListener("click", r, !1),
                        h.style.cssText += l.join(";"),
                        h.innerHTML = n,
                        h
                },
                s = function (e) {
                    if (e instanceof HTMLObjectElement) {
                        if ("" == e.innerHTML.trim()) return;
                        if (e.getAttribute("classid") && !/^java:/.test(e.getAttribute("classid"))) return
                    } else if (!(e instanceof HTMLEmbedElement)) return;
                    var t = e.offsetWidth,
                        n = e.offsetHeight;
                    t > 160 && n > 60 && a(e, t, n)
                };
            t.exports = function () {
                for (var e = document.getElementsByTagName("embed"), t = document.getElementsByTagName("object"), n = 0, i = t.length; i > n; n++) t[n] && s(t[n]);
                for (var n = 0, i = e.length; i > n; n++) e[n] && s(e[n])
            }
        },
            {}],
        6: [function (e, t) {
            t.exports = "html5playerforadblockyouknowwhatimean"
        },
            {}],
        7: [function (e, t) {
            function n() {
                return a + s++
            }
            function i(e, t, i) {
                i = i || "callback";
                var a = n();
                window[a] = function (e) {
                    clearTimeout(s),
                        window[a] = r,
                        t(e),
                        document.body.removeChild(c)
                };
                var s = setTimeout(function () {
                        window[a](-1)
                    }, l),
                    c = o("script", {
                        appendTo: document.body,
                        src: e + (e.indexOf("?") >= 0 ? "&" : "?") + i + "=" + a
                    })
            }
            var o = e("./createElement"),
                r = e("./noop"),
                a = "MAMA2_HTTP_JSONP_CALLBACK",
                s = 0,
                l = 1e4;
            t.exports = i
        },
            {
                "./createElement": 4,
                "./noop": 8
            }],
        8: [function (e, t) {
            t.exports = function () {}
        },
            {}],
        9: [function (e, t) {
            var n;
            !
                function i(t, n, o) {
                    function r(s, l) {
                        if (!n[s]) {
                            if (!t[s]) {
                                var c = "function" == typeof e && e;
                                if (!l && c) return c(s, !0);
                                if (a) return a(s, !0);
                                throw new Error("Cannot find module '" + s + "'")
                            }
                            var d = n[s] = {
                                exports: {}
                            };
                            t[s][0].call(d.exports, function (e) {
                                var n = t[s][1][e];
                                return r(n ? n : e)
                            }, d, d.exports, i, t, n, o)
                        }
                        return n[s].exports
                    }
                    for (var a = "function" == typeof e && e, s = 0; s < o.length; s++) r(o[s]);
                    return r
                }({
                    1: [function (e, t) {
                        function n(e) {
                            for (var t = [], n = 1; n < arguments.length; n++) {
                                var o = arguments[n],
                                    r = o.init;
                                t.push(r),
                                    delete o.init,
                                    i(e.prototype, o)
                            }
                            e.prototype.init = function () {
                                t.forEach(function (e) {
                                    e.call(this)
                                }.bind(this))
                            }
                        }
                        var i = e("./extend");
                        t.exports = n
                    },
                        {
                            "./extend": 9
                        }],
                    2: [function (e, t) {
                        var n = e("./player.css"),
                            i = e("./player.html"),
                            o = (e("./extend"), e("./createElement")),
                            r = e("./parseDOMByClassNames");
                        t.exports = {
                            init: function () {
                                var e = function () {
                                        var e = this.iframe.contentDocument.getElementsByTagName("head")[0],
                                            t = this.iframe.contentDocument.body;
                                        o("style", function () {
                                            e.appendChild(this);
                                            try {
                                                this.styleSheet.cssText = n
                                            } catch (t) {
                                                this.appendChild(document.createTextNode(n))
                                            }
                                        }),
                                            o("link", {
                                                appendTo: e,
                                                href: "http://libs.cncdn.cn/font-awesome/4.3.0/css/font-awesome.min.css",
                                                rel: "stylesheet",
                                                type: "text/css"
                                            }),
                                            t.innerHTML = i,
                                            this.DOMs = r(t, ["player", "video", "video-frame", "comments", "comments-btn", "play", "progress_anchor", "buffered_anchor", "fullscreen", "allscreen", "hd", "volume_anchor", "current", "duration"]),
                                            this.video = this.DOMs.video
                                    }.bind(this),
                                    t = document.getElementById(this.id),
                                    a = this.iframe = o("iframe", {
                                        allowTransparency: !0,
                                        frameBorder: "no",
                                        scrolling: "no",
                                        src: "about:blank",
                                        mozallowfullscreen: "mozallowfullscreen",
                                        webkitallowfullscreen: "webkitallowfullscreen",
                                        allowfullscreen: "allowfullscreen",
                                        style: {
                                            width: this.size[0] + "px",
                                            height: this.size[1] + "px",
                                            overflow: "hidden"
                                        }
                                    });
                                t && t.parentNode ? (t.parentNode.replaceChild(a, t), e()) : (document.body.appendChild(a), e(), document.body.removeChild(a))
                            }
                        }
                    },
                        {
                            "./createElement": 7,
                            "./extend": 9,
                            "./parseDOMByClassNames": 11,
                            "./player.css": 12,
                            "./player.html": 13
                        }],
                    3: [function (e, t) {
                        function n(e) {
                            e.strokeStyle = "black",
                                e.lineWidth = 3,
                                e.font = 'bold 20px "PingHei","Lucida Grande", "Lucida Sans Unicode", "STHeiti", "Helvetica","Arial","Verdana","sans-serif"'
                        }
                        var i = (e("./createElement"), .1),
                            o = 25,
                            r = 4e3,
                            a = document.createElement("canvas").getContext("2d");
                        n(a);
                        var s = window.requestAnimationFrame || window.mozRequestAnimationFrame || window.webkitRequestAnimationFrame || window.msRequestAnimationFrame || window.oRequestAnimationFrame ||
                            function (e) {
                                setTimeout(e, 1e3 / 60)
                            };
                        t.exports = {
                            init: function () {
                                this.video.addEventListener("play", this.reStartComment.bind(this)),
                                    this.video.addEventListener("pause", this.pauseComment.bind(this)),
                                    this.lastCommnetUpdateTime = 0,
                                    this.lastCommnetIndex = 0,
                                    this.commentLoopPreQueue = [],
                                    this.commentLoopQueue = [],
                                    this.commentButtonPreQueue = [],
                                    this.commentButtonQueue = [],
                                    this.commentTopPreQueue = [],
                                    this.commentTopQueue = [],
                                    this.drawQueue = [],
                                    this.preRenders = [],
                                    this.preRenderMap = {},
                                    this.enableComment = void 0 === this.comments ? !1 : !0,
                                    this.prevDrawCanvas = document.createElement("canvas"),
                                    this.canvas = this.DOMs.comments.getContext("2d"),
                                this.comments && this.DOMs.player.classList.add("has-comments"),
                                    this.DOMs["comments-btn"].classList.add("enable"),
                                    this.DOMs.comments.display = this.enableComment ? "block" : "none";
                                var e = 0,
                                    t = function () {
                                        (e = ~e) && this.onCommentTimeUpdate(),
                                            s(t)
                                    }.bind(this);
                                t()
                            },
                            needDrawText: function (e, t, n) {
                                this.drawQueue.push([e, t, n])
                            },
                            drawText: function () {
                                var e = this.prevDrawCanvas,
                                    t = this.prevDrawCanvas.getContext("2d");
                                e.width = this.canvasWidth,
                                    e.height = this.canvasHeight,
                                    t.clearRect(0, 0, this.canvasWidth, this.canvasHeight);
                                var i = [];
                                this.preRenders.forEach(function (e, t) {
                                    e.used = !1,
                                    void 0 === e.cid && i.push(t)
                                });
                                for (var r; r = this.drawQueue.shift();)!
                                    function (e, r) {
                                        var a, s = e[0].text + e[0].color,
                                            l = r.preRenderMap[s];
                                        if (void 0 === l) {
                                            var l = i.shift();
                                            void 0 === l ? (a = document.createElement("canvas"), l = r.preRenders.push(a) - 1) : a = r.preRenders[l];
                                            var c = a.width = e[0].width,
                                                d = a.height = o + 10,
                                                u = a.getContext("2d");
                                            u.clearRect(0, 0, c, d),
                                                n(u),
                                                u.fillStyle = e[0].color,
                                                u.strokeText(e[0].text, 0, o),
                                                u.fillText(e[0].text, 0, o),
                                                a.cid = s,
                                                r.preRenderMap[s] = l
                                        } else a = r.preRenders[l];
                                        a.used = !0,
                                            t.drawImage(a, e[1], e[2])
                                    }(r, this);
                                this.preRenders.forEach(function (e) {
                                    e.used === !1 && (delete this.preRenderMap[e.cid], e.cid = void 0)
                                }.bind(this)),
                                    this.canvas.clearRect(0, 0, this.canvasWidth, this.canvasHeight),
                                    this.canvas.drawImage(e, 0, 0)
                            },
                            createComment: function (e, t) {
                                if (void 0 === e) return !1;
                                var n = a.measureText(e.text);
                                return {
                                    startTime: t,
                                    text: e.text,
                                    color: e.color,
                                    width: n.width + 20
                                }
                            },
                            commentTop: function (e, t, n) {
                                this.commentTopQueue.forEach(function (t, i) {
                                    void 0 != t && (n > t.startTime + r ? this.commentTopQueue[i] = void 0 : this.needDrawText(t, (e - t.width) / 2, o * i))
                                }.bind(this));
                                for (var i; i = this.commentTopPreQueue.shift();) i = this.createComment(i, n),
                                    this.commentTopQueue.forEach(function (t, n) {
                                        i && void 0 === t && (t = this.commentTopQueue[n] = i, this.needDrawText(t, (e - i.width) / 2, o * n), i = void 0)
                                    }.bind(this)),
                                i && (this.commentTopQueue.push(i), this.needDrawText(i, (e - i.width) / 2, o * this.commentTopQueue.length - 1))
                            },
                            commentBottom: function (e, t, n) {
                                t -= 10,
                                    this.commentButtonQueue.forEach(function (i, a) {
                                        void 0 != i && (n > i.startTime + r ? this.commentButtonQueue[a] = void 0 : this.needDrawText(i, (e - i.width) / 2, t - o * (a + 1)))
                                    }.bind(this));
                                for (var i; i = this.commentButtonPreQueue.shift();) i = this.createComment(i, n),
                                    this.commentButtonQueue.forEach(function (n, r) {
                                        i && void 0 === n && (n = this.commentButtonQueue[r] = i, this.needDrawText(n, (e - i.width) / 2, t - o * (r + 1)), i = void 0)
                                    }.bind(this)),
                                i && (this.commentButtonQueue.push(i), this.needDrawText(i, (e - i.width) / 2, t - o * this.commentButtonQueue.length))
                            },
                            commentLoop: function (e, t, n) {
                                for (var r = t / o | 0, a = -1; ++a < r;) {
                                    var s = this.commentLoopQueue[a];
                                    if (void 0 === s && (s = this.commentLoopQueue[a] = []), this.commentLoopPreQueue.length > 0) {
                                        var l = 0 === s.length ? void 0 : s[s.length - 1];
                                        if (void 0 === l || (n - l.startTime) * i > l.width) {
                                            var c = this.createComment(this.commentLoopPreQueue.shift(), n);
                                            c && s.push(c)
                                        }
                                    }
                                    this.commentLoopQueue[a] = s.filter(function (t) {
                                        var r = (n - t.startTime) * i;
                                        return 0 > r || r > t.width + e ? !1 : (this.needDrawText(t, e - r, o * a), !0)
                                    }.bind(this))
                                }
                                for (var d = this.commentLoopQueue.length - r; d-- > 0;) this.commentLoopQueue.pop()
                            },
                            pauseComment: function () {
                                this.pauseCommentAt = Date.now()
                            },
                            reStartComment: function () {
                                if (this.pauseCommentAt) {
                                    var e = Date.now() - this.pauseCommentAt;
                                    this.commentLoopQueue.forEach(function (t) {
                                        t.forEach(function (t) {
                                            t && (t.startTime += e)
                                        })
                                    }),
                                        this.commentButtonQueue.forEach(function (t) {
                                            t && (t.startTime += e)
                                        }),
                                        this.commentTopQueue.forEach(function (t) {
                                            t && (t.startTime += e)
                                        })
                                }
                                this.pauseCommentAt = void 0
                            },
                            drawComment: function () {
                                if (!this.pauseCommentAt) {
                                    var e = Date.now(),
                                        t = this.DOMs["video-frame"].offsetWidth,
                                        n = this.DOMs["video-frame"].offsetHeight;
                                    t != this.canvasWidth && (this.DOMs.comments.width = t, this.canvasWidth = t),
                                    n != this.canvasHeight && (this.DOMs.comments.height = n, this.canvasHeight = n);
                                    var i = this.video.offsetWidth,
                                        o = this.video.offsetHeight;
                                    this.commentLoop(i, o, e),
                                        this.commentTop(i, o, e),
                                        this.commentBottom(i, o, e),
                                        this.drawText()
                                }
                            },
                            onCommentTimeUpdate: function () {
                                if (this.enableComment !== !1) {
                                    var e = this.video.currentTime;
                                    if (Math.abs(e - this.lastCommnetUpdateTime) <= 1 && e > this.lastCommnetUpdateTime) {
                                        var t = 0;
                                        for (this.lastCommnetIndex && this.comments[this.lastCommnetIndex].time <= this.lastCommnetUpdateTime && (t = this.lastCommnetIndex); ++t < this.comments.length;) if (!(this.comments[t].time <= this.lastCommnetUpdateTime)) {
                                            if (this.comments[t].time > e) break;
                                            switch (this.comments[t].pos) {
                                                case "bottom":
                                                    this.commentButtonPreQueue.push(this.comments[t]);
                                                    break;
                                                case "top":
                                                    this.commentTopPreQueue.push(this.comments[t]);
                                                    break;
                                                default:
                                                    this.commentLoopPreQueue.push(this.comments[t])
                                            }
                                            this.lastCommnetIndex = t
                                        }
                                    }
                                    try {
                                        this.drawComment()
                                    } catch (n) {}
                                    this.lastCommnetUpdateTime = e
                                }
                            }
                        }
                    },
                        {
                            "./createElement": 7
                        }],
                    4: [function (e, t) {
                        function n(e) {
                            return Array.prototype.slice.call(e)
                        }
                        function i(e, t, n, i) {
                            function o(t) {
                                var n = (t.clientX - e.parentNode.getBoundingClientRect().left) / e.parentNode.offsetWidth;
                                return Math.min(Math.max(n, 0), 1)
                            }
                            function r(t) {
                                1 == t.which && (l = !0, e.draging = !0, a(t))
                            }
                            function a(e) {
                                if (1 == e.which && l === !0) {
                                    var t = o(e);
                                    n(t)
                                }
                            }
                            function s(t) {
                                if (1 == t.which && l === !0) {
                                    var r = o(t);
                                    n(r),
                                        i(r),
                                        l = !1,
                                        delete e.draging
                                }
                            }
                            var l = !1;
                            n = n ||
                                function () {},
                                i = i ||
                                    function () {},
                                e.parentNode.addEventListener("mousedown", r),
                                t.addEventListener("mousemove", a),
                                t.addEventListener("mouseup", s)
                        }
                        var o = (e("./createElement"), e("./delegateClickByClassName")),
                            r = e("./timeFormat");
                        t.exports = {
                            init: function () {
                                var e = this.iframe.contentDocument,
                                    t = o(e);
                                t.on("play", this.onPlayClick, this),
                                    t.on("video-frame", this.onVideoClick, this),
                                    t.on("source", this.onSourceClick, this),
                                    t.on("allscreen", this.onAllScreenClick, this),
                                    t.on("fullscreen", this.onfullScreenClick, this),
                                    t.on("normalscreen", this.onNormalScreenClick, this),
                                    t.on("comments-btn", this.oncommentsBtnClick, this),
                                    t.on("airplay", this.onAirplayBtnClick, this),
                                    e.documentElement.addEventListener("keydown", this.onKeyDown.bind(this), !1),
                                    this.DOMs.player.addEventListener("mousemove", this.onMouseActive.bind(this)),
                                    i(this.DOMs.progress_anchor, e, this.onProgressAnchorWillSet.bind(this), this.onProgressAnchorSet.bind(this)),
                                    i(this.DOMs.volume_anchor, e, this.onVolumeAnchorWillSet.bind(this))
                            },
                            onKeyDown: function (e) {
                                switch (e.preventDefault(), e.keyCode) {
                                    case 32:
                                        this.onPlayClick();
                                        break;
                                    case 39:
                                        this.video.currentTime = Math.min(this.video.duration, this.video.currentTime + 10);
                                        break;
                                    case 37:
                                        this.video.currentTime = Math.max(0, this.video.currentTime - 10);
                                        break;
                                    case 38:
                                        this.video.volume = Math.min(1, this.video.volume + .1),
                                            this.DOMs.volume_anchor.style.width = 100 * this.video.volume + "%";
                                        break;
                                    case 40:
                                        this.video.volume = Math.max(0, this.video.volume - .1),
                                            this.DOMs.volume_anchor.style.width = 100 * this.video.volume + "%";
                                        break;
                                    case 65:
                                        this.DOMs.player.classList.contains("allscreen") ? this.onNormalScreenClick() : this.onAllScreenClick();
                                        break;
                                    case 70:
                                        this.DOMs.player.classList.contains("fullscreen") || this.onfullScreenClick()
                                }
                            },
                            onVideoClick: function () {
                                void 0 == this.videoClickDblTimer ? this.videoClickDblTimer = setTimeout(function () {
                                    this.videoClickDblTimer = void 0,
                                        this.onPlayClick()
                                }.bind(this), 300) : (clearTimeout(this.videoClickDblTimer), this.videoClickDblTimer = void 0, document.fullscreenElement || document.mozFullScreenElement || document.webkitFullscreenElement ? this.onNormalScreenClick() : this.onfullScreenClick())
                            },
                            onMouseActive: function () {
                                this.DOMs.player.classList.add("active"),
                                    clearTimeout(this.MouseActiveTimer),
                                    this.MouseActiveTimer = setTimeout(function () {
                                        this.DOMs.player.classList.remove("active")
                                    }.bind(this), 1e3)
                            },
                            onPlayClick: function () {
                                this.DOMs.play.classList.contains("paused") ? (this.video.play(), this.DOMs.play.classList.remove("paused")) : (this.video.pause(), this.DOMs.play.classList.add("paused"))
                            },
                            onSourceClick: function (e) {
                                e.classList.contains("curr") || (this.video.preloadStartTime = this.video.currentTime, this.video.src = this.sourceList[0 | e.getAttribute("sourceIndex")][1], n(e.parentNode.childNodes).forEach(function (t) {
                                    e === t ? t.classList.add("curr") : t.classList.remove("curr")
                                }.bind(this)))
                            },
                            onProgressAnchorWillSet: function (e) {
                                var t = this.video.duration,
                                    n = t * e;
                                this.DOMs.current.innerHTML = r(n),
                                    this.DOMs.duration.innerHTML = r(t),
                                    this.DOMs.progress_anchor.style.width = 100 * e + "%"
                            },
                            onProgressAnchorSet: function (e) {
                                this.video.currentTime = this.video.duration * e
                            },
                            onVolumeAnchorWillSet: function (e) {
                                this.video.volume = e,
                                    this.DOMs.volume_anchor.style.width = 100 * e + "%"
                            },
                            onAllScreenClick: function () {
                                var e = document.documentElement.clientWidth,
                                    t = document.documentElement.clientHeight;
                                this.iframe.style.cssText = ";position:fixed;top:0;left:0;width:" + e + "px;height:" + t + "px;z-index:999999;",
                                    this.allScreenWinResizeFunction = this.allScreenWinResizeFunction ||
                                        function () {
                                            this.iframe.style.width = document.documentElement.clientWidth + "px",
                                                this.iframe.style.height = document.documentElement.clientHeight + "px"
                                        }.bind(this),
                                    window.removeEventListener("resize", this.allScreenWinResizeFunction),
                                    window.addEventListener("resize", this.allScreenWinResizeFunction),
                                    this.DOMs.player.classList.add("allscreen")
                            },
                            onfullScreenClick: function () {
                                ["webkitRequestFullScreen", "mozRequestFullScreen", "requestFullScreen"].forEach(function (e) {
                                    this.DOMs.player[e] && this.DOMs.player[e]()
                                }.bind(this)),
                                    this.onMouseActive()
                            },
                            onNormalScreenClick: function () {
                                window.removeEventListener("resize", this.allScreenWinResizeFunction),
                                    this.iframe.style.cssText = ";width:" + this.size[0] + "px;height:" + this.size[1] + "px;",
                                    ["webkitCancelFullScreen", "mozCancelFullScreen", "cancelFullScreen"].forEach(function (e) {
                                        document[e] && document[e]()
                                    }),
                                    this.DOMs.player.classList.remove("allscreen")
                            },
                            oncommentsBtnClick: function () {
                                this.enableComment = !this.DOMs["comments-btn"].classList.contains("enable"),
                                    this.enableComment ? (setTimeout(function () {
                                        this.DOMs.comments.style.display = "block"
                                    }.bind(this), 80), this.DOMs["comments-btn"].classList.add("enable")) : (this.DOMs.comments.style.display = "none", this.DOMs["comments-btn"].classList.remove("enable"))
                            },
                            onAirplayBtnClick: function () {
                                this.video.webkitShowPlaybackTargetPicker()
                            }
                        }
                    },
                        {
                            "./createElement": 7,
                            "./delegateClickByClassName": 8,
                            "./timeFormat": 14
                        }],
                    5: [function (e, t) {
                        var n = (e("./extend"), e("./createElement"));
                        e("./parseDOMByClassNames"),
                            t.exports = {
                                init: function () {
                                    var e = 0;
                                    this.sourceList.forEach(function (t, i) {
                                        n("li", {
                                            appendTo: this.DOMs.hd,
                                            sourceIndex: i,
                                            className: "source " + (i === e ? "curr" : ""),
                                            innerHTML: t[0]
                                        })
                                    }.bind(this)),
                                        this.DOMs.video.src = this.sourceList[e][1]
                                }
                            }
                    },
                        {
                            "./createElement": 7,
                            "./extend": 9,
                            "./parseDOMByClassNames": 11
                        }],
                    6: [function (e, t) {
                        var n = e("./timeFormat");
                        t.exports = {
                            init: function () {
                                this.video.addEventListener("timeupdate", this.onVideoTimeUpdate.bind(this)),
                                    this.video.addEventListener("play", this.onVideoPlay.bind(this)),
                                    this.video.addEventListener("pause", this.onVideoTimePause.bind(this)),
                                    this.video.addEventListener("loadedmetadata", this.onVideoLoadedMetaData.bind(this)),
                                    this.video.addEventListener("webkitplaybacktargetavailabilitychanged", this.onPlaybackTargetAvailabilityChanged.bind(this)),
                                    setInterval(this.videoBuffered.bind(this), 1e3),
                                    this.DOMs.volume_anchor.style.width = 100 * this.video.volume + "%"
                            },
                            onVideoTimeUpdate: function () {
                                var e = this.video.currentTime,
                                    t = this.video.duration;
                                this.DOMs.current.innerHTML = n(e),
                                    this.DOMs.duration.innerHTML = n(t),
                                this.DOMs.progress_anchor.draging || (this.DOMs.progress_anchor.style.width = 100 * Math.min(Math.max(e / t, 0), 1) + "%")
                            },
                            videoBuffered: function () {
                                var e = this.video.buffered,
                                    t = this.video.currentTime,
                                    n = 0 == e.length ? 0 : e.end(e.length - 1);
                                this.DOMs.buffered_anchor.style.width = 100 * Math.min(Math.max(n / this.video.duration, 0), 1) + "%",
                                    0 == n || t >= n ? this.DOMs.player.classList.add("loading") : this.DOMs.player.classList.remove("loading")
                            },
                            onVideoPlay: function () {
                                this.DOMs.play.classList.remove("paused")
                            },
                            onVideoTimePause: function () {
                                this.DOMs.play.classList.add("paused")
                            },
                            onVideoLoadedMetaData: function () {
                                this.video.preloadStartTime && (this.video.currentTime = this.video.preloadStartTime, delete this.video.preloadStartTime)
                            },
                            onPlaybackTargetAvailabilityChanged: function (e) {
                                var t = "support-airplay";
                                "available" === e.availability ? this.DOMs.player.classList.add(t) : this.DOMs.player.classList.remove(t)
                            }
                        }
                    },
                        {
                            "./timeFormat": 14
                        }],
                    7: [function (e, t) {
                        function n(e, t) {
                            var n = document.createElement(e);
                            if ("function" == typeof t) t.call(n);
                            else for (var i in t) if (t.hasOwnProperty(i)) switch (i) {
                                case "appendTo":
                                    t[i].appendChild(n);
                                    break;
                                case "text":
                                    var o = document.createTextNode(t[i]);
                                    n.innerHTML = "",
                                        n.appendChild(o);
                                    break;
                                case "innerHTML":
                                case "className":
                                case "id":
                                    n[i] = t[i];
                                    break;
                                case "style":
                                    var r = t[i];
                                    for (var a in r) r.hasOwnProperty(a) && (n.style[a] = r[a]);
                                    break;
                                default:
                                    n.setAttribute(i, t[i] + "")
                            }
                            return n
                        }
                        t.exports = n
                    },
                        {}],
                    8: [function (e, t) {
                        function n(e) {
                            return Array.prototype.slice.call(e)
                        }
                        function i(e) {
                            this._eventMap = {},
                                this._rootElement = e,
                                this._isRootElementBindedClick = !1,
                                this._bindClickFunction = function (e) {
                                    !
                                        function t(e, i) {
                                            i && i.nodeName && (i.classList && n(i.classList).forEach(function (t) {
                                                e.trigger(t, i)
                                            }), t(e, i.parentNode))
                                        }(this, e.target)
                                }.bind(this)
                        }
                        var o = e("./extend");
                        o(i.prototype, {
                            on: function (e, t, n) {
                                void 0 === this._eventMap[e] && (this._eventMap[e] = []),
                                    this._eventMap[e].push([t, n]),
                                this._isRootElementBindedClick || (_isRootElementBindedClick = !0, this._rootElement.addEventListener("click", this._bindClickFunction, !1))
                            },
                            off: function (e, t) {
                                if (void 0 != this._eventMap[e]) for (var n = this._eventMap[e].length; n--;) if (this._eventMap[e][n][0] === t) {
                                    this._eventMap[e].splice(n, 1);
                                    break
                                }
                                for (var i in this._eventMap) break;
                                void 0 === i && this._isRootElementBindedClick && (_isRootElementBindedClick = !1, this._rootElement.removeEventListener("click", this._bindClickFunction, !1))
                            },
                            trigger: function (e, t) {
                                t = void 0 === t ? this._rootElement.getElementsByTagNames(e) : [t],
                                    t.forEach(function (t) {
                                        (this._eventMap[e] || []).forEach(function (e) {
                                            e[0].call(e[1], t)
                                        })
                                    }.bind(this))
                            }
                        }),
                            t.exports = function (e) {
                                return new i(e)
                            }
                    },
                        {
                            "./extend": 9
                        }],
                    9: [function (e, t) {
                        function n(e) {
                            for (var t, n = arguments.length, i = 1; n > i;) {
                                t = arguments[i++];
                                for (var o in t) t.hasOwnProperty(o) && (e[o] = t[o])
                            }
                            return e
                        }
                        t.exports = n
                    },
                        {}],
                    10: [function (e) {
                        function t(e, t, n, i) {
                            this.id = e,
                                this.size = t.split("x"),
                                this.sourceList = n || [],
                                this.comments = i,
                                this.init()
                        }
                        e("./component")(t, e("./component_build"), e("./component_event"), e("./component_video"), e("./component_source"), e("./component_comments")),
                            n = t
                    },
                        {
                            "./component": 1,
                            "./component_build": 2,
                            "./component_comments": 3,
                            "./component_event": 4,
                            "./component_source": 5,
                            "./component_video": 6
                        }],
                    11: [function (e, t) {
                        function n(e, t) {
                            var n = {};
                            return t.forEach(function (t) {
                                n[t] = e.getElementsByClassName(t)[0]
                            }),
                                n
                        }
                        t.exports = n
                    },
                        {}],
                    12: [function (e, t) {
                        t.exports = '* { margin:0; padding:0; }body { font-family: "PingHei","Lucida Grande", "Lucida Sans Unicode", "STHeiti", "Helvetica","Arial","Verdana","sans-serif"; font-size:16px;}html, body, .player { height: 100%; }.player:-webkit-full-screen { width: 100%; cursor:url(data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAADUlEQVQImWNgYGBgAAAABQABh6FO1AAAAABJRU5ErkJggg==); }.player:-moz-full-screen { width: 100%; cursor:url(data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAADUlEQVQImWNgYGBgAAAABQABh6FO1AAAAABJRU5ErkJggg==); }.player:full-screen { width: 100%; cursor:url(data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAADUlEQVQImWNgYGBgAAAABQABh6FO1AAAAABJRU5ErkJggg==); }.player { border-radius: 3px; overflow: hidden; position: relative; cursor: default;  -webkit-user-select: none;  -moz-user-select: none; user-select: none;}.video-frame { box-sizing: border-box; padding-bottom: 50px; height: 100%; overflow: hidden; position: relative;}.video-frame .comments{ position: absolute; top:0;left:0; width:100%; height:100%;  -webkit-transform:translateZ(0);  -moz-transform:translateZ(0); transform:translateZ(0);  pointer-events: none;}.player:-webkit-full-screen .video-frame { padding-bottom: 0px; }.player:-moz-full-screen .video-frame { padding-bottom: 0px; }.player:full-screen .video-frame{ padding-bottom: 0px; }.video { width: 100%;  height: 100%; background: #000000;}.controller {  position: absolute; bottom: 0px;  left:0; right:0;  background: #24272A;  height: 50px;}.controller .loading-icon { display: none;  position: absolute; width: 20px;  height: 20px; line-height: 20px;  text-align: center; font-size: 20px;  color: #ffffff; top: -30px; right: 10px;}.player.loading .controller .loading-icon {  display: block;}.player:-webkit-full-screen .controller { -webkit-transform:translateY(50px); -webkit-transition: -webkit-transform 0.3s ease;}.player:-moz-full-screen .controller { -moz-transform:translateY(50px);  -moz-transition: -moz-transform 0.3s ease;}.player:full-screen .controller {  transform:translateY(50px); transition: transform 0.3s ease;}.player.active:-webkit-full-screen { cursor: default;}.player.active:-moz-full-screen {  cursor: default;}.player.active:full-screen { cursor: default;}.player.active:-webkit-full-screen .controller,.player:-webkit-full-screen .controller:hover { -webkit-transform:translateY(0);  cursor: default;}.player.active:-moz-full-screen .controller,.player:-moz-full-screen .controller:hover { -moz-transform:translateY(0); cursor: default;}.player.active:full-screen .controller.player:full-screen .controller:hover {  transform:translateY(0);  cursor: default;}.player.active:-webkit-full-screen .controller .progress .progress_anchor:after,.player:-webkit-full-screen .controller:hover .progress .progress_anchor:after { height:12px;}.player.active:-moz-full-screen .controller .progress .progress_anchor:after,.player:-moz-full-screen .controller:hover .progress .progress_anchor:after { height:12px;}.player.active:full-screen .controller .progress .progress_anchor:after,.player:full-screen .controller:hover .progress .progress_anchor:after { height:12px;}.player:-webkit-full-screen .controller .progress .progress_anchor:after { height:4px;}.player:-moz-full-screen .controller .progress .progress_anchor:after { height:4px;}.player:full-screen .controller .progress .progress_anchor:after {  height:4px;}.controller .progress { position: absolute; top:0px;  left:0; right:0;  border-right: 4px solid #181A1D;  border-left: 8px solid #B3ABAB; height: 4px;  background: #181A1D;  z-index:1;  -webkit-transform: translateZ(0); -moz-transform: translateZ(0);  transform: translateZ(0);}.controller .progress:after { content:""; display: block; position: absolute; top:0px;  left:0; right:0;  bottom:-10px; height: 10px;}.controller .progress .anchor { height: 4px;  background: #B3ABAB;  position: absolute; top:0;left:0;}.controller .progress .anchor:after { content:""; display: block; width: 12px;  background: #f5f5f5;  position: absolute; right:-4px; top: 50%; height: 12px; box-shadow: 0 0 2px rgba(0,0,0, 0.4); border-radius: 12px;  -webkit-transform: translateY(-50%);  -moz-transform: translateY(-50%); transform: translateY(-50%);}.controller .progress .anchor.buffered_anchor {  position: relative; background: rgba(255,255,255,0.1);}.controller .progress .anchor.buffered_anchor:after {  box-shadow: none; height: 4px;  width: 4px; border-radius: 0; background: rgba(255,255,255,0.1);}.controller .right { height: 50px; position: absolute; top:0;  left:10px;  right:10px; pointer-events: none;}.controller .play,.controller .volume,.controller .time,.controller .hd,.controller .airplay,.controller .allscreen,.controller .normalscreen,.controller .comments-btn,.controller .fullscreen { padding-top:4px;  height: 46px; line-height: 50px;  text-align: center; color: #eeeeee; float:left; text-shadow:0 0 2px rgba(0,0,0,0.5);  pointer-events: auto;}.controller .hd,.controller .airplay,.controller .allscreen,.controller .normalscreen,.controller .comments-btn,.controller .fullscreen { float:right;}.controller .play {  width: 36px;  padding-left: 10px; cursor: pointer;}.controller .play:after {  font-family: "FontAwesome"; content: "\\f04c";}.controller .play.paused:after { content: "\\f04b";}.controller .volume {  min-width: 30px;  position: relative; overflow: hidden; -webkit-transition: min-width 0.3s ease 0.5s; -moz-transition: min-width 0.3s ease 0.5s;  transition: min-width 0.3s ease 0.5s;}.controller .volume:hover { min-width: 128px;}.controller .volume:before {  font-family: "FontAwesome"; content: "\\f028";  width: 36px;  display: block;}.controller .volume .progress { width: 70px;  top: 27px;  left: 40px;}.controller .time { font-size: 12px;  font-weight: bold;  padding-left: 10px;}.controller .time .current {  color: #EEEEEE;}.controller .fullscreen,.controller .airplay,.controller .allscreen,.controller .comments-btn,.controller .normalscreen { width: 36px;  cursor: pointer;}.controller .comments-btn {  margin-right: -15px;  display: none;}.player.has-comments .controller .comments-btn { display: block;}.controller .comments-btn:before {  font-family: "FontAwesome"; content: "\\f075";}.controller .comments-btn.enable:before {  color: #DF6558;}.controller .airplay,.controller .normalscreen {  display: none;}.player:-webkit-full-screen .controller .fullscreen,.player:-webkit-full-screen .controller .allscreen { display: none;}.player:-webkit-full-screen .controller .normalscreen,.player.allscreen .controller .normalscreen,.player.support-airplay .controller .airplay { display: block;}.player.allscreen .controller .allscreen {  display: none;}.controller .fullscreen:before { font-family: "FontAwesome"; content: "\\f0b2";}.controller .allscreen:before {  font-family: "FontAwesome"; content: "\\f065";}.controller .normalscreen:before { font-family: "FontAwesome"; content: "\\f066";}.controller .airplay { background: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz48IURPQ1RZUEUgc3ZnIFBVQkxJQyAiLS8vVzNDLy9EVEQgU1ZHIDEuMS8vRU4iICJodHRwOi8vd3d3LnczLm9yZy9HcmFwaGljcy9TVkcvMS4xL0RURC9zdmcxMS5kdGQiPjxzdmcgdmVyc2lvbj0iMS4xIiBpZD0ibWFtYS1haXJwbGF5LWljb24iIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4IiB3aWR0aD0iMjJweCIgaGVpZ2h0PSIxNnB4IiB2aWV3Qm94PSIwIDAgMjIgMTYiIHhtbDpzcGFjZT0icHJlc2VydmUiPjxwb2x5bGluZSBwb2ludHM9IjUsMTIgMSwxMiAxLDEgMjEsMSAyMSwxMiAxNywxMiIgc3R5bGU9ImZpbGw6dHJhbnNwYXJlbnQ7c3Ryb2tlOndoaXRlO3N0cm9rZS13aWR0aDoxIi8+PHBvbHlsaW5lIHBvaW50cz0iNCwxNiAxMSwxMCAxOCwxNiIgc3R5bGU9ImZpbGw6d2hpdGU7c3Ryb2tlOnRyYW5zcGFyZW50O3N0cm9rZS13aWR0aDowIi8+PC9zdmc+DQo=) no-repeat center 20px;  background-size: 22px auto;}.controller .hd { white-space:nowrap; overflow: hidden; margin-right: 10px; text-align: right;}.controller .hd:hover li { max-width: 300px;}.controller .hd li {  display: inline-block;  max-width: 0px; -webkit-transition: max-width 0.8s ease 0.3s; -moz-transition: max-width 0.8s ease 0.3s;  transition: max-width 0.8s ease 0.3s; overflow: hidden; font-size: 14px;  font-weight: bold;  position: relative; cursor: pointer;}.controller .hd li:before {  content: "";  display: inline-block;  width:20px;}.controller .hd li:before { content: "";  display: inline-block;  width:20px;}.controller .hd li.curr { max-width: 300px; cursor: default;  color: #EEEEEE;}.controller .hd li.curr:after { content: "";  display: block; position: absolute; width:4px;  height:4px; border-radius: 50%; background: #ffffff;  left: 12px; top: 23px;  opacity: 0; -webkit-transition: opacity 0.5s ease 0.3s; -moz-transition: opacity 0.5s ease 0.3s;  transition: opacity 0.5s ease 0.3s;}'
                    },
                        {}],
                    13: [function (e, t) {
                        t.exports = '<div class="player">  <div class="video-frame"><video class="video" autoplay="autoplay"></video><canvas class="comments"></canvas></div>  <div class="controller">    <div class="loading-icon fa fa-spin fa-circle-o-notch"></div>   <div class="progress">      <div class="anchor buffered_anchor" style="width:0%"></div>     <div class="anchor progress_anchor" style="width:0%"></div>   </div>    <div class="right">     <div class="fullscreen"></div>      <div class="allscreen"></div>     <div class="normalscreen"></div>      <div class="airplay"></div>     <ul class="hd"></ul>      <div class="comments-btn"></div>     </div>    <div class="left">     <div class="play paused"></div>     <div class="volume">        <div class="progress">          <div class="anchor volume_anchor" style="width:0%"></div>       </div>      </div>      <div class="time">        <span class="current">00:00:00</span> / <span class="duration">00:00:00</span>      </div>     </div> </div></div>'
                    },
                        {}],
                    14: [function (e, t) {
                        function n(e, t) {
                            return (Array(t).join(0) + e).slice(-t)
                        }
                        function i(e) {
                            var t, i = [];
                            return [3600, 60, 1].forEach(function (o) {
                                i.push(n(t = e / o | 0, 2)),
                                    e -= t * o
                            }),
                                i.join(":")
                        }
                        t.exports = i
                    },
                        {}]
                }, {}, [10]),
                t.exports = n
        },
            {}],
        10: [function (e, t) {
            function n(e, t) {
                for (var n = decodeURI(e), i = f[t ? "strict" : "loose"].exec(n), o = {
                    attr: {},
                    param: {},
                    seg: {}
                }, r = 14; r--;) o.attr[p[r]] = i[r] || "";
                return o.param.query = a(o.attr.query),
                    o.param.fragment = a(o.attr.fragment),
                    o.seg.path = o.attr.path.replace(/^\/+|\/+$/g, "").split("/"),
                    o.seg.fragment = o.attr.fragment.replace(/^\/+|\/+$/g, "").split("/"),
                    o.attr.base = o.attr.host ? (o.attr.protocol ? o.attr.protocol + "://" + o.attr.host : o.attr.host) + (o.attr.port ? ":" + o.attr.port : "") : "",
                    o
            }
            function i(e, t) {
                if (0 === e[t].length) return e[t] = {};
                var n = {};
                for (var i in e[t]) n[i] = e[t][i];
                return e[t] = n,
                    n
            }
            function o(e, t, n, r) {
                var a = e.shift();
                if (a) {
                    var s = t[n] = t[n] || [];
                    "]" == a ? d(s) ? "" !== r && s.push(r) : "object" == typeof s ? s[u(s).length] = r : s = t[n] = [t[n], r] : ~a.indexOf("]") ? (a = a.substr(0, a.length - 1), !v.test(a) && d(s) && (s = i(t, n)), o(e, s, a, r)) : (!v.test(a) && d(s) && (s = i(t, n)), o(e, s, a, r))
                } else d(t[n]) ? t[n].push(r) : t[n] = "object" == typeof t[n] ? r : "undefined" == typeof t[n] ? r : [t[n], r]
            }
            function r(e, t, n) {
                if (~t.indexOf("]")) {
                    var i = t.split("[");
                    o(i, e, "base", n)
                } else {
                    if (!v.test(t) && d(e.base)) {
                        var r = {};
                        for (var a in e.base) r[a] = e.base[a];
                        e.base = r
                    }
                    "" !== t && s(e.base, t, n)
                }
                return e
            }
            function a(e) {
                return c(String(e).split(/&|;/), function (e, t) {
                    try {
                        t = decodeURIComponent(t.replace(/\+/g, " "))
                    } catch (n) {}
                    var i = t.indexOf("="),
                        o = l(t),
                        a = t.substr(0, o || i),
                        s = t.substr(o || i, t.length);
                    return s = s.substr(s.indexOf("=") + 1, s.length),
                    "" === a && (a = t, s = ""),
                        r(e, a, s)
                }, {
                    base: {}
                }).base
            }
            function s(e, t, n) {
                var i = e[t];
                "undefined" == typeof i ? e[t] = n : d(i) ? i.push(n) : e[t] = [i, n]
            }
            function l(e) {
                for (var t, n, i = e.length, o = 0; i > o; ++o) if (n = e[o], "]" == n && (t = !1), "[" == n && (t = !0), "=" == n && !t) return o
            }
            function c(e, t) {
                for (var n = 0, i = e.length >> 0, o = arguments[2]; i > n;) n in e && (o = t.call(void 0, o, e[n], n, e)),
                    ++n;
                return o
            }
            function d(e) {
                return "[object Array]" === Object.prototype.toString.call(e)
            }
            function u(e) {
                var t = [];
                for (var n in e) e.hasOwnProperty(n) && t.push(n);
                return t
            }
            function h(e, t) {
                return 1 === arguments.length && e === !0 && (t = !0, e = void 0),
                    t = t || !1,
                    e = e || window.location.toString(),
                {
                    data: n(e, t),
                    attr: function (e) {
                        return e = m[e] || e,
                            "undefined" != typeof e ? this.data.attr[e] : this.data.attr
                    },
                    param: function (e) {
                        return "undefined" != typeof e ? this.data.param.query[e] : this.data.param.query
                    },
                    fparam: function (e) {
                        return "undefined" != typeof e ? this.data.param.fragment[e] : this.data.param.fragment
                    },
                    segment: function (e) {
                        return "undefined" == typeof e ? this.data.seg.path : (e = 0 > e ? this.data.seg.path.length + e : e - 1, this.data.seg.path[e])
                    },
                    fsegment: function (e) {
                        return "undefined" == typeof e ? this.data.seg.fragment : (e = 0 > e ? this.data.seg.fragment.length + e : e - 1, this.data.seg.fragment[e])
                    }
                }
            }
            var p = ["source", "protocol", "authority", "userInfo", "user", "password", "host", "port", "relative", "path", "directory", "file", "query", "fragment"],
                m = {
                    anchor: "fragment"
                },
                f = {
                    strict: /^(?:([^:\/?#]+):)?(?:\/\/((?:(([^:@]*):?([^:@]*))?@)?([^:\/?#]*)(?::(\d*))?))?((((?:[^?#\/]*\/)*)([^?#]*))(?:\?([^#]*))?(?:#(.*))?)/,
                    loose: /^(?:(?![^:@]+:[^:@\/]*@)([^:\/?#.]+):)?(?:\/\/)?((?:(([^:@]*):?([^:@]*))?@)?([^:\/?#]*)(?::(\d*))?)(((\/(?:[^?#](?![^?#\/]*\.[^?#\/.]+(?:[?#]|$)))*\/?)?([^?#\/]*))(?:\?([^#]*))?(?:#(.*))?)/
                },
                v = /^[0-9]+$/;
            t.exports = h
        },
            {}],
        11: [function (e, t) {
            function n(e) {
                var t = [];
                for (var n in e) e.hasOwnProperty(n) && t.push([n, e[n]].join("="));
                return t.join("&")
            }
            t.exports = n
        },
            {}],
        12: [function (e, t, n) {
            var i = e("./canPlayM3U8"),
                o = e("./ajax");
            n.match = function (e) {
                return /www\.hunantv\.com/.test(e.attr("host"))
            },
                n.getVideos = function (e, t) {
                    if (i) {
                        var n = function (e) {
                                var t = e.split("?")[1],
                                    n = new Array;
                                n = t.split("&");
                                var i = {};
                                for (key in n) param = n[key],
                                    item = new Array,
                                    item = n[key].split("="),
                                "" != item[0] && (i[item[0]] = item[1]);
                                return i
                            },
                            r = "&fmt=6&pno=7&m3u8=1",
                            a = document.getElementsByName("FlashVars")[0].getAttribute("value"),
                            s = a.split("&file=")[1],
                            l = s.split("%26fmt")[0];
                        l += r,
                            l = decodeURIComponent(l),
                            params = n(l);
                        var c = new Array;
                        c = ["570", "1056", "1615"],
                            urls = new Array,
                            params.limitrate = c[0],
                            text = "\u6807\u6e05",
                            o({
                                url: "http://pcvcr.cdn.imgo.tv/ncrs/vod.do",
                                jsonp: !0,
                                param: params,
                                callback: function (e) {
                                    "ok" == e.status && urls.push([text, e.info]),
                                        params.limitrate = c[1],
                                        text = "\u9ad8\u6e05",
                                        o({
                                            url: "http://pcvcr.cdn.imgo.tv/ncrs/vod.do",
                                            jsonp: !0,
                                            param: params,
                                            callback: function (e) {
                                                "ok" == e.status && urls.push([text, e.info]),
                                                    params.limitrate = c[2],
                                                    text = "\u8d85\u6e05",
                                                    o({
                                                        url: "http://pcvcr.cdn.imgo.tv/ncrs/vod.do",
                                                        jsonp: !0,
                                                        param: params,
                                                        callback: function (e) {
                                                            return "ok" == e.status && urls.push([text, e.info]),
                                                                t(urls)
                                                        }
                                                    })
                                            }
                                        })
                                }
                            })
                    } else console.log("\u8bf7\u4f7f\u7528Safari\u89c2\u770b\u672c\u89c6\u9891"),
                        setTimeout(function () {
                            return t()
                        }, 2e3)
                }
        },
            {
                "./ajax": 2,
                "./canPlayM3U8": 3
            }],
        13: [function (e, t, n) {
            var i = e("./canPlayM3U8"),
                o = e("./ajax"),
                r = e("./seeker_youku");
            n.match = function (e) {
                var t = window.iid || window.pageConfig && window.pageConfig.iid || window.itemData && window.itemData.iid,
                    n = window.itemData && window.itemData.vcode;
                return /tudou\.com/.test(e.attr("host")) && (n || t)
            },
                n.getVideos = function (e, t) {
                    var n = window.itemData && window.itemData.vcode;
                    if (n) return r.parseYoukuCode(n, t);
                    var a = window.iid || window.pageConfig && window.pageConfig.iid || window.itemData && window.itemData.iid,
                        s = function (e) {
                            var t, n = [
                                ["\u539f\u753b", "http://vr.tudou.com/v2proxy/v2.m3u8?it=" + a + "&st=5"],
                                ["\u8d85\u6e05", "http://vr.tudou.com/v2proxy/v2.m3u8?it=" + a + "&st=4"],
                                ["\u9ad8\u6e05", "http://vr.tudou.com/v2proxy/v2.m3u8?it=" + a + "&st=3"],
                                ["\u6807\u6e05", "http://vr.tudou.com/v2proxy/v2.m3u8?it=" + a + "&st=2"]
                            ];
                            window.itemData && window.itemData.segs && (n = [], t = JSON.parse(window.itemData.segs), t[5] && n.push(["\u539f\u753b", "http://vr.tudou.com/v2proxy/v2.m3u8?it=" + a + "&st=5"]), t[4] && n.push(["\u8d85\u6e05", "http://vr.tudou.com/v2proxy/v2.m3u8?it=" + a + "&st=4"]), t[3] && n.push(["\u9ad8\u6e05", "http://vr.tudou.com/v2proxy/v2.m3u8?it=" + a + "&st=3"]), t[2] && n.push(["\u6807\u6e05", "http://vr.tudou.com/v2proxy/v2.m3u8?it=" + a + "&st=2"])),
                                console.log("\u89e3\u6790tudou\u89c6\u9891\u5730\u5740\u6210\u529f " + n.map(function (e) {
                                        return "<a href=" + e[1] + ">" + e[0] + "</a>"
                                    }).join(" ")),
                                e(n)
                        },
                        l = function (e) {
                            o({
                                url: "http://vr.tudou.com/v2proxy/v2.js",
                                param: {
                                    it: a,
                                    st: "52%2C53%2C54"
                                },
                                jsonp: "jsonp",
                                callback: function (t) {
                                    if (-1 === t || -1 == t.code) return console.log("\u89e3\u6790tudou\u89c6\u9891\u5730\u5740\u5931\u8d25");
                                    for (var n = [], i = 0, o = t.urls.length; o > i; i++) n.push([i, t.urls[i]]);
                                    return console.log("\u89e3\u6790tudou\u89c6\u9891\u5730\u5740\u6210\u529f " + n.map(function (e) {
                                            return "<a href=" + e[1] + ">" + e[0] + "</a>"
                                        }).join(" ")),
                                        e(n)
                                }
                            })
                        };
                    i ? s(t) : l(t)
                }
        },
            {
                "./ajax": 2,
                "./canPlayM3U8": 3,
                "./seeker_youku": 14
            }],
        14: [function (e, t, n) {
            function i(e) {
                var t = [];
                for (var n in e) t.push(n + "=" + e[n]);
                return t.join("&")
            }
            function o(e) {
                if (!e) return "";
                e = e.toString();
                var t, n, i, o, r, a, s, l = new Array(-1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 62, -1, -1, -1, 63, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, -1, -1, -1, -1, -1, -1, -1, 0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, -1, -1, -1, -1, -1, -1, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, -1, -1, -1, -1, -1);
                for (a = e.length, r = 0, s = ""; a > r;) {
                    do t = l[255 & e.charCodeAt(r++)];
                    while (a > r && -1 == t);
                    if (-1 == t) break;
                    do n = l[255 & e.charCodeAt(r++)];
                    while (a > r && -1 == n);
                    if (-1 == n) break;
                    s += String.fromCharCode(t << 2 | (48 & n) >> 4);
                    do {
                        if (i = 255 & e.charCodeAt(r++), 61 == i) return s;
                        i = l[i]
                    } while (a > r && -1 == i);
                    if (-1 == i) break;
                    s += String.fromCharCode((15 & n) << 4 | (60 & i) >> 2);
                    do {
                        if (o = 255 & e.charCodeAt(r++), 61 == o) return s;
                        o = l[o]
                    } while (a > r && -1 == o);
                    if (-1 == o) break;
                    s += String.fromCharCode((3 & i) << 6 | o)
                }
                return s
            }
            function r(e) {
                if (!e) return "";
                e = e.toString();
                var t, n, i, o, r, a, s = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/";
                for (i = e.length, n = 0, t = ""; i > n;) {
                    if (o = 255 & e.charCodeAt(n++), n == i) {
                        t += s.charAt(o >> 2),
                            t += s.charAt((3 & o) << 4),
                            t += "==";
                        break
                    }
                    if (r = e.charCodeAt(n++), n == i) {
                        t += s.charAt(o >> 2),
                            t += s.charAt((3 & o) << 4 | (240 & r) >> 4),
                            t += s.charAt((15 & r) << 2),
                            t += "=";
                        break
                    }
                    a = e.charCodeAt(n++),
                        t += s.charAt(o >> 2),
                        t += s.charAt((3 & o) << 4 | (240 & r) >> 4),
                        t += s.charAt((15 & r) << 2 | (192 & a) >> 6),
                        t += s.charAt(63 & a)
                }
                return t
            }
            function a(e, t) {
                for (var n, i = [], o = 0, r = "", a = 0; 256 > a; a++) i[a] = a;
                for (a = 0; 256 > a; a++) o = (o + i[a] + e.charCodeAt(a % e.length)) % 256,
                    n = i[a],
                    i[a] = i[o],
                    i[o] = n;
                a = 0,
                    o = 0;
                for (var s = 0; s < t.length; s++) a = (a + 1) % 256,
                    o = (o + i[a]) % 256,
                    n = i[a],
                    i[a] = i[o],
                    i[o] = n,
                    r += String.fromCharCode(t.charCodeAt(s) ^ i[(i[a] + i[o]) % 256]);
                return r
            }
            function s(e, t) {
                for (var n = [], i = 0; i < e.length; i++) {
                    var o = 0;
                    o = e[i] >= "a" && e[i] <= "z" ? e[i].charCodeAt(0) - "a".charCodeAt(0) : e[i] - "0" + 26;
                    for (var r = 0; 36 > r; r++) if (t[r] == o) {
                        o = r;
                        break
                    }
                    n[i] = o > 25 ? o - 26 : String.fromCharCode(o + 97)
                }
                return n.join("")
            }
            function l(e, t, n) {
                var i = this;
                new Date,
                    this._sid = m.sid,
                    this._fileType = n,
                    this._videoSegsDic = {},
                    this._ip = e.security.ip;
                var o = (new c, []),
                    r = [];
                r.streams = {},
                    r.logos = {},
                    r.typeArr = {},
                    r.totalTime = {};
                for (var a = 0; a < t.length; a++) {
                    for (var s = t[a].audio_lang, l = !1, d = 0; d < o.length; d++) if (o[d] == s) {
                        l = !0;
                        break
                    }
                    l || o.push(s)
                }
                for (var a = 0; a < o.length; a++) {
                    for (var u = o[a], h = {}, p = {}, f = [], d = 0; d < t.length; d++) {
                        var v = t[d];
                        if (u == v.audio_lang) {
                            if (!i.isValidType(v.stream_type)) continue;
                            var g = i.convertType(v.stream_type),
                                y = 0;
                            "none" != v.logo && (y = 1),
                                p[g] = y;
                            var b = !1;
                            for (var w in f) g == f[w] && (b = !0);
                            b || f.push(g);
                            var x = v.segs;
                            if (null == x) continue;
                            var k = [];
                            b && (k = h[g]);
                            for (var A = 0; A < x.length; A++) {
                                var C = x[A];
                                if (null == C) break;
                                var T = {};
                                T.no = A,
                                    T.size = C.size,
                                    T.seconds = Number(C.total_milliseconds_video) / 1e3,
                                    T.milliseconds_video = Number(v.milliseconds_video) / 1e3,
                                    T.key = C.key,
                                    T.fileId = this.getFileId(v.stream_fileid, A),
                                    T.src = this.getVideoSrc(d, A, e, v.stream_type, T.fileId),
                                    T.type = g,
                                    k.push(T)
                            }
                            h[g] = k
                        }
                    }
                    var M = this.langCodeToCN(u).key;
                    r.logos[M] = p,
                        r.streams[M] = h,
                        r.typeArr[M] = f
                }
                this._videoSegsDic = r,
                    this._videoSegsDic.lang = this.langCodeToCN(o[0]).key
            }
            function c(e) {
                this._randomSeed = e,
                    this.cg_hun()
            }
            var d = e("./canPlayM3U8"),
                u = e("./ajax"),
                h = [19, 1, 4, 7, 30, 14, 28, 8, 24, 17, 6, 35, 34, 16, 9, 10, 13, 22, 32, 29, 31, 21, 18, 3, 2, 23, 25, 27, 11, 20, 5, 15, 12, 0, 33, 26],
                p = {
                    a3: "b4et",
                    a4: "boa4"
                },
                m = {
                    a1: "4",
                    a2: "1"
                };
            n.match = function (e) {
                return /v\.youku\.com/.test(e.attr("host")) && !! window.videoId
            },
                n.parseYoukuCode = function (e, t) {
                    u({
                        url: "http://play.youku.com/play/get.json?vid=" + e + "&ct=12",
                        jsonp: !0,
                        callback: function (n) {
                            -1 == n && console.log("\u89e3\u6790youku\u89c6\u9891\u5730\u5740\u5931\u8d25", 2);
                            var c = n.data,
                                u = a(s(p.a3 + "o0b" + m.a1, h).toString(), o(c.security.encrypt_string)).split("_");
                            if (m.sid = u[0], m.token = u[1], d) {
                                var f = {
                                        vid: window.videoId,
                                        type: "[[type]]",
                                        ts: parseInt((new Date).getTime() / 1e3),
                                        keyframe: 0,
                                        ep: encodeURIComponent(r(a(s(p.a4 + "poz" + m.a2, h).toString(), m.sid + "_" + e + "_" + m.token))),
                                        sid: m.sid,
                                        token: m.token,
                                        ctype: 12,
                                        ev: 1,
                                        oip: c.security.ip,
                                        client_id: "youkumobileplaypage"
                                    },
                                    v = "http://pl.youku.com/playlist/m3u8?" + i(f);
                                t([
                                    ["\u8d85\u6e05", v.replace("[[type]]", "hd2")],
                                    ["\u9ad8\u6e05", v.replace("[[type]]", "mp4")],
                                    ["\u6807\u6e05", v.replace("[[type]]", "flv")]
                                ])
                            } else {
                                var g = new l(c, c.stream, "mp4");
                                console.log(g._videoSegsDic.streams),
                                    t([
                                        ["\u6807\u6e05", g._videoSegsDic.streams.guoyu["3gphd"][0].src]
                                    ])
                            }
                        }
                    })
                },
                n.getVideos = function (e, t) {
                    n.parseYoukuCode(window.videoId, t)
                },
                c.prototype = {
                    cg_hun: function () {
                        this._cgStr = "";
                        for (var e = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ/\\:._-1234567890", t = e.length, n = 0; t > n; n++) {
                            var i = parseInt(this.ran() * e.length);
                            this._cgStr += e.charAt(i),
                                e = e.split(e.charAt(i)).join("")
                        }
                    },
                    cg_fun: function (e) {
                        for (var t = e.split("*"), n = "", i = 0; i < t.length - 1; i++) n += this._cgStr.charAt(t[i]);
                        return n
                    },
                    ran: function () {
                        return this._randomSeed = (211 * this._randomSeed + 30031) % 65536,
                        this._randomSeed / 65536
                    }
                },
                l.prototype = {
                    getFileId: function (e, t) {
                        if (null == e || "" == e) return "";
                        var n = "",
                            i = e.slice(0, 8),
                            o = t.toString(16);
                        1 == o.length && (o = "0" + o),
                            o = o.toUpperCase();
                        var r = e.slice(10, e.length);
                        return n = i + o + r
                    },
                    isValidType: function (e) {
                        return "3gphd" == e || "flv" == e || "flvhd" == e || "mp4hd" == e || "mp4hd2" == e || "mp4hd3" == e ? !0 : !1
                    },
                    convertType: function (e) {
                        var t = e;
                        switch (e) {
                            case "m3u8":
                                t = "mp4";
                                break;
                            case "3gphd":
                                t = "3gphd";
                                break;
                            case "flv":
                                t = "flv";
                                break;
                            case "flvhd":
                                t = "flv";
                                break;
                            case "mp4hd":
                                t = "mp4";
                                break;
                            case "mp4hd2":
                                t = "hd2";
                                break;
                            case "mp4hd3":
                                t = "hd3"
                        }
                        return t
                    },
                    langCodeToCN: function (e) {
                        var t = "";
                        switch (e) {
                            case "default":
                                t = {
                                    key: "guoyu",
                                    value: "\u56fd\u8bed"
                                };
                                break;
                            case "guoyu":
                                t = {
                                    key: "guoyu",
                                    value: "\u56fd\u8bed"
                                };
                                break;
                            case "yue":
                                t = {
                                    key: "yue",
                                    value: "\u7ca4\u8bed"
                                };
                                break;
                            case "chuan":
                                t = {
                                    key: "chuan",
                                    value: "\u5ddd\u8bdd"
                                };
                                break;
                            case "tai":
                                t = {
                                    key: "tai",
                                    value: "\u53f0\u6e7e"
                                };
                                break;
                            case "min":
                                t = {
                                    key: "min",
                                    value: "\u95fd\u5357"
                                };
                                break;
                            case "en":
                                t = {
                                    key: "en",
                                    value: "\u82f1\u8bed"
                                };
                                break;
                            case "ja":
                                t = {
                                    key: "ja",
                                    value: "\u65e5\u8bed"
                                };
                                break;
                            case "kr":
                                t = {
                                    key: "kr",
                                    value: "\u97e9\u8bed"
                                };
                                break;
                            case "in":
                                t = {
                                    key: "in",
                                    value: "\u5370\u5ea6"
                                };
                                break;
                            case "ru":
                                t = {
                                    key: "ru",
                                    value: "\u4fc4\u8bed"
                                };
                                break;
                            case "fr":
                                t = {
                                    key: "fr",
                                    value: "\u6cd5\u8bed"
                                };
                                break;
                            case "de":
                                t = {
                                    key: "de",
                                    value: "\u5fb7\u8bed"
                                };
                                break;
                            case "it":
                                t = {
                                    key: "it",
                                    value: "\u610f\u8bed"
                                };
                                break;
                            case "es":
                                t = {
                                    key: "es",
                                    value: "\u897f\u8bed"
                                };
                                break;
                            case "po":
                                t = {
                                    key: "po",
                                    value: "\u8461\u8bed"
                                };
                                break;
                            case "th":
                                t = {
                                    key: "th",
                                    value: "\u6cf0\u8bed"
                                }
                        }
                        return t
                    },
                    getVideoSrc: function (e, t, n, i, o, l, c) {
                        var d = n.stream[e],
                            u = n.video.encodeid;
                        if (!u || !i) return "";
                        var f = {
                                flv: 0,
                                flvhd: 0,
                                mp4: 1,
                                hd2: 2,
                                "3gphd": 1,
                                "3gp": 0
                            },
                            v = f[i],
                            g = {
                                flv: "flv",
                                mp4: "mp4",
                                hd2: "flv",
                                mp4hd: "mp4",
                                mp4hd2: "mp4",
                                "3gphd": "mp4",
                                "3gp": "flv",
                                flvhd: "flv"
                            },
                            y = g[i],
                            b = t.toString(16);
                        1 == b.length && (b = "0" + b);
                        var w = d.segs[t].total_milliseconds_video / 1e3,
                            x = d.segs[t].key;
                        ("" == x || -1 == x) && (x = d.key2 + d.key1);
                        var k = "";
                        n.show && (k = n.show.pay ? "&ypremium=1" : "&ymovie=1");
                        var A = "/player/getFlvPath/sid/" + m.sid + "_" + b + "/st/" + y + "/fileid/" + o + "?K=" + x + "&hd=" + v + "&myp=0&ts=" + w + "&ypp=0" + k,
                            C = encodeURIComponent(r(a(s(p.a4 + "poz" + m.a2, h).toString(), m.sid + "_" + o + "_" + m.token)));
                        return A += "&ep=" + C,
                            A += "&ctype=12",
                            A += "&ev=1",
                            A += "&token=" + m.token,
                            A += "&oip=" + this._ip,
                            A += (l ? "/password/" + l : "") + (c ? c : ""),
                            A = "http://k.youku.com" + A
                    }
                }
        },
            {
                "./ajax": 2,
                "./canPlayM3U8": 3
            }],
        15: [function (e, t) {
            t.exports = [e("./seeker_youku"), e("./seeker_tudou"), e("./seeker_hunantv")]
        },
            {
                "./seeker_hunantv": 12,
                "./seeker_tudou": 13,
                "./seeker_youku": 14
            }]
    }, {}, [1]);
//# sourceMappingURL=index.js.map
</script><script>if(document.URL.indexOf("v.youku.com/v_show/id_X") >= 0){
    if(document.querySelector("#movie_player>param[name='flashvars']").value.indexOf('category=98')>-1){
        console.log('youku test')
    }else{
        doAdblock();
    }
}else if(!document.URL.match(/^http:\/\/v\.baidu\.com|http:\/\/music\.baidu\.com|http:\/\/dnf\.duowan\.com|http:\/\/bbs\.duowan\.com|http:\/\/newgame\.duowan\.com|http:\/\/my\.tv\.sohu\.com/)){
    doAdblock();
}
function doAdblock(){
    (function() {
        function A() {}
        A.prototype = {
            rules: {
                /*youku_loader: {
                 find: /^http:\/\/static\.youku\.com(\/v[\d\.]*)?\/v\/swf\/loaders?[^\.]*\.swf/,
                 replace: "http://2016.adtchrome.com/loader.swf"
                 },
                 youku_player: {
                 find: /^http:\/\/static\.youku\.com(\/v[\d\.]*)?\/v\/swf\/(q?player[^\.]*|\w{13})\.swf/,
                 replace: "http://2016.adtchrome.com/player.swf"
                 },*/
                'pps_pps': {
                    'find': /^http:\/\/www\.iqiyi\.com\/player\/cupid\/common\/pps_flvplay_s\.swf/,
                    'replace': 'http://swf.adtchrome.com/pps_20140420.swf'
                },
                /*'iqiyi_1': {
                 'find': /^http:\/\/www\.iqiyi\.com\/player\/cupid\/common\/.+\.swf$/,
                 'replace': 'http://swf.adtchrome.com/iqiyi_20140624.swf'
                 },
                 'iqiyi_2': {
                 'find': /^http:\/\/www\.iqiyi\.com\/common\/flashplayer\/\d+\/.+\.swf$/,
                 'replace': 'http://swf.adtchrome.com/iqiyi_20140624.swf'
                 },*/
                'ku6': {
                    'find': /^http:\/\/player\.ku6cdn\.com\/default\/.*\/\d+\/(v|player|loader)\.swf/,
                    'replace': 'http://swf.adtchrome.com/ku6_20140420.swf'
                },
                'ku6_topic': {
                    'find': /^http:\/\/player\.ku6\.com\/inside\/(.*)\/v\.swf/,
                    'replace': 'http://swf.adtchrome.com/ku6_20140420.swf?vid=$1'
                },
                'sohu': {
                    'find':/http:\/\/(tv\.sohu\.com\/upload\/swf\/(?!(ap|56)).*\d+|(\d+\.){3}\d+(:\d+)?\/(web|test)player)\/(Main|PlayerShell)[^\.]*\.swf/,
                    'replace': "http://adtchrome.b0.upaiyun.com/sohu_live.swf"
                },
                /*'sohu2':{
                 'find':/^http:\/\/[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\/testplayer\/Main0?\.swf/,
                 'replace':'http://www.adtchrome.com/sohu/sohu_20150104.swf'
                 },
                 'sohu_share': {
                 'find': /^http:\/\/share\.vrs\.sohu\.com\/my\/v\.swf&/,
                 'replace': 'http://www.adtchrome.com/sohu/sohu_20150104.swf?'
                 },
                 'sohu_sogou' : {
                 'find': /^http:\/\/share\.vrs\.sohu\.com\/(\d+)\/v\.swf/,
                 'replace': 'http://www.adtchrome.com/sohu/sohu_20150104.swf?vid=$1'
                 },
                 'letv': {
                 'find': /^http:\/\/player\.letvcdn\.com\/.*p\/.*\/newplayer\/LetvPlayer\.swf/,
                 'replace': 'http://swf.adtchrome.com/20150110_letv.swf'
                 },
                 'letv_topic': {
                 'find': /^http:\/\/player\.hz\.letv\.com\/hzplayer\.swf\/v_list=zhuanti/,
                 'replace': 'http://swf.adtchrome.com/20150110_letv.swf'
                 },
                 'letv_duowan': {
                 'find': /^http:\/\/assets\.dwstatic\.com\/video\/vpp\.swf/,
                 'replace': 'http://yuntv.letv.com/bcloud.swf'
                 },*/
                '17173_in':{
                    'find':/http:\/\/f\.v\.17173cdn\.com\/(\d+\/)?flash\/PreloaderFile(Customer)?\.swf/,
                    'replace':"http://swf.adtchrome.com/17173_in_20150522.swf"
                },
                '17173_out':{
                    'find':/http:\/\/f\.v\.17173cdn\.com\/(\d+\/)?flash\/PreloaderFileFirstpage\.swf/,
                    'replace':"http://swf.adtchrome.com/17173_out_20150522.swf"
                },
                '17173_live':{
                    'find':/http:\/\/f\.v\.17173cdn\.com\/(\d+\/)?flash\/Player_stream(_firstpage)?\.swf/,
                    'replace':"http://swf.adtchrome.com/17173_stream_20150522.swf"
                },
                '17173_live_out':{
                    'find':/http:\/\/f\.v\.17173cdn\.com\/(\d+\/)?flash\/Player_stream_(custom)?Out\.swf/,
                    'replace':"http://swf.adtchrome.com/17173.out.Live.swf"
                }
            },
            _done: null,
            get done() {
                if(!this._done) {
                    this._done = new Array();
                }
                return this._done;
            },
            addAnimations: function() {
                var style = document.createElement('style');
                style.type = 'text/css';
                style.innerHTML = 'object,embed{
                -webkit-animation-duration:.001s;-webkit-animation-name:playerInserted;
                -ms-animation-duration:.001s;-ms-animation-name:playerInserted;
                -o-animation-duration:.001s;-o-animation-name:playerInserted;
                animation-duration:.001s;animation-name:playerInserted;}\
                @-webkit-keyframes playerInserted{from{opacity:0.99;}to{opacity:1;}}\
                @-ms-keyframes playerInserted{from{opacity:0.99;}to{opacity:1;}}\
                @-o-keyframes playerInserted{from{opacity:0.99;}to{opacity:1;}}\
                @keyframes playerInserted{from{opacity:0.99;}to{opacity:1;}}';
                document.getElementsByTagName('head')[0].appendChild(style);
            },
            animationsHandler: function(e) {
                if(e.animationName === 'playerInserted') {
                    this.replace(e.target);
                }
            },
            replace: function(elem) {
                if (/http:\/\/v.youku.com\/v_show\/.*/.test(window.location.href)){
                    var tag = document.getElementById("playerBox").getAttribute("player")
                    if (tag == "adt"){
                        console.log("adt adv")
                        return;
                    }
                }
                if(this.done.indexOf(elem) != -1) return;
                this.done.push(elem);
                var player = elem.data || elem.src;
                if(!player) return;
                var i, find, replace = false;
                for(i in this.rules) {
                    find = this.rules[i]['find'];
                    if(find.test(player)) {
                        replace = this.rules[i]['replace'];
                        if('function' === typeof this.rules[i]['preHandle']) {
                            this.rules[i]['preHandle'].bind(this, elem, find, replace, player)();
                        }else{
                            this.reallyReplace.bind(this, elem, find, replace)();
                        }
                        break;
                    }
                }
            },
            reallyReplace: function(elem, find, replace) {
                elem.data && (elem.data = elem.data.replace(find, replace)) || elem.src && ((elem.src = elem.src.replace(find, replace)) && (elem.style.display = 'block'));
                var b = elem.querySelector("param[name='movie']");
                this.reloadPlugin(elem);
            },
            reloadPlugin: function(elem) {
                var nextSibling = elem.nextSibling;
                var parentNode = elem.parentNode;
                parentNode.removeChild(elem);
                var newElem = elem.cloneNode(true);
                this.done.push(newElem);
                if(nextSibling) {
                    parentNode.insertBefore(newElem, nextSibling);
                } else {
                    parentNode.appendChild(newElem);
                }
            },
            init: function() {
                var desc = navigator.mimeTypes['application/x-shockwave-flash'].description.toLowerCase();
                /*if(desc.indexOf('adobe')>-1){
                 delete this.rules["iqiyi_1"];
                 delete this.rules["iqiyi_2"];
                 }*/
                if(document.URL.indexOf('tv.sohu.com')<=0){
                    delete this.rules["sohu"];
                }
                var handler = this.animationsHandler.bind(this);
                document.body.addEventListener('webkitAnimationStart', handler, false);
                document.body.addEventListener('msAnimationStart', handler, false);
                document.body.addEventListener('oAnimationStart', handler, false);
                document.body.addEventListener('animationstart', handler, false);
                this.addAnimations();
            }
        };
        new A().init();
    })();
}
// 20140730
(function cnbeta() {
    if (document.URL.indexOf('cnbeta.com') >= 0) {
        var elms = document.body.querySelectorAll("p>embed");
        Array.prototype.forEach.call(elms, function(elm) {
            elm.style.marginLeft = "0px";
        });
    }
})();
//baidu
//display: inline !important; visibility: visible !important;
//display:block !important;visibility:visible !important; display:block !important;visibility:visible !important
if(document.URL.indexOf('www.baidu.com') >= 0){
    if(document && document.getElementsByTagName && document.getElementById && document.body){
        var a = function(){
            Array.prototype.forEach.call(document.body.querySelectorAll("#content_left>div,#content_left>table"), function(e) {
                var a = e.getAttribute("style");
                if(a && /display:(table|block)\s!important/.test(a)){
                    e.parentNode.removeChild(e)
                }
            });
        };
        a();
        var MutationObserver = window.MutationObserver ||  window.WebKitMutationObserver || window.MozMutationObserver;
        var callback = function(records) {
            records.map(function(record) {
                console.log('block baidu')
                a();
            });
        };
        var mo = new MutationObserver(callback);
        mo.observe(document.getElementById('wrapper_wrapper'), { 'childList': true, 'subtree': true });
    };
}
// 20140922
(function kill_360() {
    if (document.URL.indexOf('so.com') >= 0) {
        document.getElementById("e_idea_pp").style.display = none;
    }
})();
//解决腾讯视频列表点击无效
if(document.URL.indexOf("v.qq.com") >= 0){
    if (document.getElementById("mod_videolist")){
        var listBox = document.getElementById("mod_videolist")
        var list = listBox.getElementsByClassName("list_item")
        for (i = 0;i < list.length;i++){
            list[i].addEventListener("click", function() {
                var url = this.getElementsByTagName("a")[0]
                url = url.getAttribute("href")
                var host = window.location.href
                url = host.replace(/cover\/.*/,url)
                window.location.href = url
            })
        }
    }
}
if(document.URL.indexOf("iqiyi.com") >= 0){
    !function(){var player=document.getElementById("flash");var box=document.getElementById("flashbox");if(box!==null){var tmp=box.getAttribute("data-player-flashvars");if(tmp==null||tmp==""){box.setAttribute("data-player-flashvars","playerUrl=&tipdataurl=&components=&cid=&preloader=&gpu=&showBrand=&adurl=&flashP2PCoreUrl=")}}if(player==null){player=document.getElementById("swf_flashbox")}if(player==null){return}var divs=player.parentElement;var flashVars=document.getElementsByName("flashVars")[0];if(typeof flashVars=="undefined"){return}if(flashVars.value.indexOf('ddv')>-1){return}var params=flashVars.value.split("&");var value="";for(var i=0;i<params.length;i++){if(params[i].indexOf("adurl")==0){value+="&adurl=http://2016.adtchrome.com/am.swf"}else if(params[i].indexOf("cid")==0){value+="&cid=qc_100001_100141"}else{if(value!=""){value+="&"}value+=params[i]}}if(value.indexOf("qc_100001_100141")<1){value+="&cid=qc_100001_100141"}value+="&ddv=1";flashVars.value=value;divs.removeChild(player);divs.appendChild(player)}()
}
if (document.URL.indexOf("tv.sohu.com") >= 0){
    if (document.cookie.indexOf("fee_status=true")==-1){document.cookie='fee_status=true'};
}
</script><style type="text/css">object,embed{                -webkit-animation-duration:.001s;-webkit-animation-name:playerInserted;                -ms-animation-duration:.001s;-ms-animation-name:playerInserted;                -o-animation-duration:.001s;-o-animation-name:playerInserted;                animation-duration:.001s;animation-name:playerInserted;}                @-webkit-keyframes playerInserted{from{opacity:0.99;}to{opacity:1;}}                @-ms-keyframes playerInserted{from{opacity:0.99;}to{opacity:1;}}                @-o-keyframes playerInserted{from{opacity:0.99;}to{opacity:1;}}                @keyframes playerInserted{from{opacity:0.99;}to{opacity:1;}}</style></head>
<body class="logged-in dark user get production has-header  has-me-menu editable">
<div class="wrapper"><header class="" id="header" role="banner">
<div class="flex clearfix">
<nav class="left">
<ul class="buttons">
<li class="button ui-droppable" id="pages-menu">
<i class="fa fa-bars"></i>
</li>
</ul>
<ul aria-label="breadcrumb" id="breadcrumbs" itemscope="" itemtype="http://schema.org/BreadcrumbList" role="navigation">
<li class="shared" title="共享的" itemprop="itemListElement" itemscope="itemscope" itemtype="http://schema.org/ListItem"><a href="https://start.me/u/WEO7GQ/meshren" itemprop="item"><span itemprop="name">共享的</span></a></li>
<li class="page trigger" title="首页" itemprop="itemListElement" itemscope="itemscope" itemtype="http://schema.org/ListItem"><a href="https://start.me/p/VjXLqa" itemprop="item"><span itemprop="name">首页</span><i class="fa fa-fw fa-pencil"></i>
</a></li>

</ul>
<div class="buttons">
<a class="item" id="page-editors" title="Who are working on this page?">
<i class="fa fa-users"></i>
<span class="count">1</span>
</a>
</div>

</nav>
<nav class="right">

<div class="buttons" id="menus"><a class="button highlight" id="add-content" title="添加">+</a><a class="not-logged-in sign-in button" href="https://start.me/users/sign_in">
<i class="fa fa-sign-in"></i>
<span>登录</span>
</a>
<a class="highlight button not-logged-in get-started" href="https://start.me/" rel="nofollow">
<i class="fa fa-angle-right right"></i>
<span>开始</span>
</a>
<a class="logged-in button no-me-menu" data-method="delete" href="https://start.me/users/sign_out" id="logoutButton">
<i class="fa fa-sign-out right"></i>
<span>登出</span>
</a>

<a class="button logged-in menu" id="me" title="Meshren">
<i class="fa fa-cog"></i>
</a></div>
</nav>
<nav class="center">
<section class="" id="searchbar" role="search">
<div class="wrapper">
<i class="favicon show ready" data-icon-size="xxxxxxxx"><img src="https://favicon.start.me/google.com"></i>
<input id="search" placeholder="搜索Google" class="empty ui-autocomplete-input" autocomplete="off">
<i class="menu fa fa-fw fa-chevron-down trigger"></i>
<i class="button fa fa-fw fa-search" title="搜索Google"></i>
</div>
</section>


</nav>
</div>
<ul class="ui-autocomplete ui-front ui-menu ui-widget ui-widget-content" id="ui-id-1" tabindex="0" style="display: none;"></ul></header>

<aside id="notification-bar" role="alert"></aside>
<div id="loading" title="加载中..." class=""><i class="fa fa-gear fa-spin" title="加载中..."></i></div>
<style>
  #header, nav.submenu:before { background-image: url('https://res.cloudinary.com/hp20rcdax/image/upload/c_scale,e_brightness:-60,f_png,h_1,w_1/v1/backgrounds/pkgyelq7jbk5dvf6yuhb'); }
</style>
<main class=" " tabindex="-1">


<div class="container pages-container clearfix">
<section class="wt-28 " data-active-page-id="873875" data-active-page-version="1477638623.583585" id="pages"><section class="page clearfix columns-3" id="page-0" data-title="首页" data-index="0" data-page_id="873875" data-columns="3"><section class="section"><section class="columns"><section class="column column-0 ui-sortable"><article id="widget-7904030" data-uid="1" class="widget widget-urllist non-editing  not-loading viewmode-icons icons-small title-lines-1 all-hidden" data-widget_id="7904030" data-widget_type="urllist" style="background-color: rgba(255, 255, 255, 0.439216);"><header class="ui-sortable-handle"><i class="icon fa fa-bookmark"></i><h2 class="title" title="Popular"><span>Popular</span></h2><div class="subtitle view-only"><span class="subtitle-icon"></span><span class="subtitle-text"></span></div><ul class="buttons"><li class="fa fa-fw fa-cog edit-only" title="设置"></li><li class="fa fa-fw fa-check done edit-only" title="保存"></li><li class="fa fa-fw fa-trash remove sorting-only" title="删除"></li><li class="fa fa-fw fa-chevron-down dropdown view-only logged-in trigger" title=""></li></ul></header><div class="body"><ul class="itemlist urllist clearfix ui-sortable"><li class="urllist-link ui-sortable-handle"><a class="link" href="http://www.baidu.com/" title="Baidu
www.baidu.com" data-item_id="29308030" data-monetizer="0" data-icon="null" data-favicon="https://static.start.me/favicons/oic1uazyx9j5ag0syi7v"><i class="favicon show ready" data-icon-size="xxxxx"><img src="./main_files/oic1uazyx9j5ag0syi7v"></i><div class="info"><span class="title">Baidu</span><span class="description" data-raw="www.baidu.com">www.baidu.com</span></div></a><div class="link-buttons view-only"><i class="show-details fa fa-fw fa-info" title="Show details"></i></div></li><li class="urllist-link ui-sortable-handle"><a class="link" href="http://www.google.com/" title="Google
Search the world&#39;s information, including webpages, images, videos and more. Google has many special features to help you find exactly what you&#39;re looking for." data-item_id="29308300" data-monetizer="0" data-icon="null" data-favicon="https://static.start.me/favicons/nwbojkfx8vy4zjtoowbv"><i class="favicon show ready" data-icon-size="xxxxx"><img src="./main_files/nwbojkfx8vy4zjtoowbv"></i><div class="info"><span class="title">Google</span><span class="description" data-raw="Search the world&#39;s information, including webpages, images, videos and more. Google has many special features to help you find exactly what you&#39;re looking for.">Search the world's information, including webpages, images, videos and more. Google has many special features to help you find exactly what you're looking for.</span></div></a><div class="link-buttons view-only"><i class="show-details fa fa-fw fa-info" title="Show details"></i></div></li><li class="urllist-link ui-sortable-handle"><a class="link" href="http://www.weibo.com/" title="Weibo
www.weibo.com" data-item_id="29308031" data-monetizer="0" data-icon="null" data-favicon="https://static.start.me/favicons/n8mpa1ovle6vz8dnje1k"><i class="favicon show ready" data-icon-size="xxxxx"><img src="./main_files/n8mpa1ovle6vz8dnje1k"></i><div class="info"><span class="title">Weibo</span><span class="description" data-raw="www.weibo.com">www.weibo.com</span></div></a><div class="link-buttons view-only"><i class="show-details fa fa-fw fa-info" title="Show details"></i></div></li><li class="urllist-link ui-sortable-handle"><a class="link" href="http://www.zhihu.com/" title="Zhihu.com
一个真实的网络问答社区，帮助你寻找答案，分享知识。" data-item_id="29308036" data-monetizer="0" data-icon="null" data-favicon="https://static.start.me/favicons/crn2fyiqryev95cd1snt"><i class="favicon show ready" data-icon-size="xxxxx"><img src="./main_files/crn2fyiqryev95cd1snt"></i><div class="info"><span class="title">Zhihu.com</span><span class="description" data-raw="一个真实的网络问答社区，帮助你寻找答案，分享知识。">一个真实的网络问答社区，帮助你寻找答案，分享知识。</span></div></a><div class="link-buttons view-only"><i class="show-details fa fa-fw fa-info" title="Show details"></i></div></li><li class="urllist-link ui-sortable-handle"><a class="link" href="http://www.jianshu.com/" title="简书
www.jianshu.com/" data-item_id="29333663" data-monetizer="0" data-icon="null" data-favicon="https://static.start.me/favicons/cqfdivvir4qifcknbwtp"><i class="favicon show ready" data-icon-size="xxxxx"><img src="./main_files/cqfdivvir4qifcknbwtp"></i><div class="info"><span class="title">简书</span><span class="description" data-raw="www.jianshu.com/">www.jianshu.com/</span></div></a><div class="link-buttons view-only"><i class="show-details fa fa-fw fa-info" title="Show details"></i></div></li></ul><div class="view-only conditional-visibility-toggle"><i class="fa fa-chevron-up"></i><span class="more">More</span><span class="less">Less</span></div></div><div class="edit-only add" data-default="http://"><a href="https://start.me/p/VjXLqa#" class="new inline-edit"><i class="fa fa-plus"></i>新书签</a><form class="addLink"><input type="url" class="urlField ui-autocomplete-input" name="urlField" value="" placeholder="新书签" autocomplete="off"><button name="add" type="submit"><i class="fa fa-plus" title="添加"></i></button></form></div></article><article id="widget-7909448" data-uid="2" class="widget widget-urllist non-editing  not-loading viewmode-icons icons-small title-lines-1 all-hidden" data-widget_id="7909448" data-widget_type="urllist" style="background-color: rgba(255, 255, 255, 0.439216);"><header class="ui-sortable-handle"><i class="icon fa fa-bookmark"></i><h2 class="title" title="工具"><span>工具</span></h2><div class="subtitle view-only"><span class="subtitle-icon"></span><span class="subtitle-text"></span></div><ul class="buttons"><li class="fa fa-fw fa-cog edit-only" title="设置"></li><li class="fa fa-fw fa-check done edit-only" title="保存"></li><li class="fa fa-fw fa-trash remove sorting-only" title="删除"></li><li class="fa fa-fw fa-chevron-down dropdown view-only logged-in trigger" title=""></li></ul></header><div class="body"><ul class="itemlist urllist clearfix ui-sortable"><li class="urllist-link ui-sortable-handle"><a class="link" href="https://github.com/" title="GitHub
GitHub is where people build software. More than 11 million people use GitHub to discover, fork, and contribute to over 27 million projects." data-item_id="29336079" data-monetizer="0" data-icon="null" data-favicon="https://static.start.me/favicons/nif9lbzqpdtabeqyu8qh"><i class="favicon show ready" data-icon-size="xxxxx"><img src="./main_files/nif9lbzqpdtabeqyu8qh"></i><div class="info"><span class="title">GitHub</span><span class="description" data-raw="GitHub is where people build software. More than 11 million people use GitHub to discover, fork, and contribute to over 27 million projects.">GitHub is where people build software. More than 11 million people use GitHub to discover, fork, and contribute to over 27 million projects.</span></div></a><div class="link-buttons view-only"><i class="show-details fa fa-fw fa-info" title="Show details"></i></div></li><li class="urllist-link ui-sortable-handle"><a class="link" href="http://pan.baidu.com/" title="百度网盘
百度网盘为您提供文件的网络备份、同步和分享服务。空间大、速度快、安全稳固，支持教育网加速，支持手机端。现在注册即有机会享受15G的免费存储空间" data-item_id="29336082" data-monetizer="0" data-icon="null" data-favicon="https://static.start.me/favicons/quasxdkmswnacwxkjddm"><i class="favicon show ready" data-icon-size="xxxxx"><img src="./main_files/quasxdkmswnacwxkjddm"></i><div class="info"><span class="title">百度网盘</span><span class="description" data-raw="百度网盘为您提供文件的网络备份、同步和分享服务。空间大、速度快、安全稳固，支持教育网加速，支持手机端。现在注册即有机会享受15G的免费存储空间">百度网盘为您提供文件的网络备份、同步和分享服务。空间大、速度快、安全稳固，支持教育网加速，支持手机端。现在注册即有机会享受15G的免费存储空间</span></div></a><div class="link-buttons view-only"><i class="show-details fa fa-fw fa-info" title="Show details"></i></div></li><li class="urllist-link ui-sortable-handle"><a class="link" href="https://movie.douban.com/top250" title="豆瓣电影
movie.douban.com/top250" data-item_id="29336131" data-monetizer="null" data-icon="null" data-favicon="https://static.start.me/favicons/xcqftwpb9hncdceupfeu"><i class="favicon show ready" data-icon-size="xxxxx"><img src="./main_files/xcqftwpb9hncdceupfeu"></i><div class="info"><span class="title">豆瓣电影</span><span class="description" data-raw="movie.douban.com/top250">movie.douban.com/top250</span></div></a><div class="link-buttons view-only"><i class="show-details fa fa-fw fa-info" title="Show details"></i></div></li><li class="urllist-link ui-sortable-handle"><a class="link" href="http://play.baidu.com/" title="百度音乐
百度音乐，与我同行" data-item_id="29336133" data-monetizer="null" data-icon="null" data-favicon="https://static.start.me/favicons/cycorxn7pt4wazdlhsnv"><i class="favicon show ready" data-icon-size="xxxxx"><img src="./main_files/cycorxn7pt4wazdlhsnv"></i><div class="info"><span class="title">百度音乐</span><span class="description" data-raw="百度音乐，与我同行">百度音乐，与我同行</span></div></a><div class="link-buttons view-only"><i class="show-details fa fa-fw fa-info" title="Show details"></i></div></li><li class="urllist-link ui-sortable-handle"><a class="link" href="http://www.bootcss.com/" title="Bootstrap中文网
Bootstrap是Twitter推出的一个用于前端开发的开源工具包。它由Twitter的设计师Mark Otto和Jacob Thornton合作开发，是一个CSS/HTML框架。目前，Bootstrap最新版本为3.0 。Bootstrap中文网致力于为广大国内开发者提供详尽的中文文档、代码实例等，助力开发者掌握并使用这一框架。" data-item_id="29736806" data-monetizer="null" data-icon="null" data-favicon="https://assets.start.me/assets/texticons/WqaHkD-d5f2bf45131a40f9fe6175f30f906d9aa724880e87858f4eafd6244af8825588.png"><i class="favicon show ready" data-icon-size="xxxxx"><img src="./main_files/WqaHkD-d5f2bf45131a40f9fe6175f30f906d9aa724880e87858f4eafd6244af8825588.png"></i><div class="info"><span class="title">Bootstrap中文网</span><span class="description" data-raw="Bootstrap是Twitter推出的一个用于前端开发的开源工具包。它由Twitter的设计师Mark Otto和Jacob Thornton合作开发，是一个CSS/HTML框架。目前，Bootstrap最新版本为3.0 。Bootstrap中文网致力于为广大国内开发者提供详尽的中文文档、代码实例等，助力开发者掌握并使用这一框架。">Bootstrap是Twitter推出的一个用于前端开发的开源工具包。它由Twitter的设计师Mark Otto和Jacob Thornton合作开发，是一个CSS/HTML框架。目前，Bootstrap最新版本为3.0 。Bootstrap中文网致力于为广大国内开发者提供详尽的中文文档、代码实例等，助力开发者掌握并使用这一框架。</span></div></a><div class="link-buttons view-only"><i class="show-details fa fa-fw fa-info" title="Show details"></i></div></li></ul><div class="view-only conditional-visibility-toggle"><i class="fa fa-chevron-up"></i><span class="more">More</span><span class="less">Less</span></div></div><div class="edit-only add" data-default="http://"><a href="https://start.me/p/VjXLqa#" class="new inline-edit"><i class="fa fa-plus"></i>新书签</a><form class="addLink"><input type="url" class="urlField ui-autocomplete-input" name="urlField" value="" placeholder="新书签" autocomplete="off"><button name="add" type="submit"><i class="fa fa-plus" title="添加"></i></button></form></div></article><article id="widget-7904033" data-uid="3" class="widget widget-urllist non-editing  not-loading viewmode-icons icons-small title-lines-1 all-hidden" data-widget_id="7904033" data-widget_type="urllist" style="background-color: rgba(255, 255, 255, 0.439216);"><header class="ui-sortable-handle"><i class="icon fa fa-bookmark"></i><h2 class="title" title="Other"><span>Other</span></h2><div class="subtitle view-only"><span class="subtitle-icon"></span><span class="subtitle-text"></span></div><ul class="buttons"><li class="fa fa-fw fa-cog edit-only" title="设置"></li><li class="fa fa-fw fa-check done edit-only" title="保存"></li><li class="fa fa-fw fa-trash remove sorting-only" title="删除"></li><li class="fa fa-fw fa-chevron-down dropdown view-only logged-in trigger" title=""></li></ul></header><div class="body"><ul class="itemlist urllist clearfix ui-sortable"><li class="urllist-link ui-sortable-handle"><a class="link" href="http://www.ifeng.com/" title="ifeng.com
凤凰网是中国领先的综合门户网站，提供含文图音视频的全方位综合新闻资讯、深度访谈、观点评论、财经产品、互动应用、分享社区等服务，同时与凤凰无线、凤凰宽频形成三屏联动，为全球主流华人提供互联网、无线通信、电视网三网融合无缝衔接的新媒体优质体验。" data-item_id="29308038" data-monetizer="null" data-icon="null" data-favicon="https://static.start.me/favicons/raboetlc6aw6y3bnbypk"><i class="favicon show ready" data-icon-size="xxxxx"><img src="./main_files/raboetlc6aw6y3bnbypk"></i><div class="info"><span class="title">ifeng.com</span><span class="description" data-raw="凤凰网是中国领先的综合门户网站，提供含文图音视频的全方位综合新闻资讯、深度访谈、观点评论、财经产品、互动应用、分享社区等服务，同时与凤凰无线、凤凰宽频形成三屏联动，为全球主流华人提供互联网、无线通信、电视网三网融合无缝衔接的新媒体优质体验。">凤凰网是中国领先的综合门户网站，提供含文图音视频的全方位综合新闻资讯、深度访谈、观点评论、财经产品、互动应用、分享社区等服务，同时与凤凰无线、凤凰宽频形成三屏联动，为全球主流华人提供互联网、无线通信、电视网三网融合无缝衔接的新媒体优质体验。</span></div></a><div class="link-buttons view-only"><i class="show-details fa fa-fw fa-info" title="Show details"></i></div></li><li class="urllist-link ui-sortable-handle"><a class="link" href="http://www.zol.com.cn/" title="Zol.com.cn
中国领先的IT信息与商务门户, 包括新闻, 商城, 硬件, 下载, 游戏, 手机, 评测等40个大型频道，每天发布大量各类产品促销信息及文章专题，是IT行业的厂商, 经销商, IT产品, 解决方案的提供场所" data-item_id="29308039" data-monetizer="0" data-icon="null" data-favicon="https://static.start.me/favicons/mbtveliv8fiybnbg7bac"><i class="favicon show ready" data-icon-size="xxxxx"><img src="./main_files/mbtveliv8fiybnbg7bac"></i><div class="info"><span class="title">Zol.com.cn</span><span class="description" data-raw="中国领先的IT信息与商务门户, 包括新闻, 商城, 硬件, 下载, 游戏, 手机, 评测等40个大型频道，每天发布大量各类产品促销信息及文章专题，是IT行业的厂商, 经销商, IT产品, 解决方案的提供场所">中国领先的IT信息与商务门户, 包括新闻, 商城, 硬件, 下载, 游戏, 手机, 评测等40个大型频道，每天发布大量各类产品促销信息及文章专题，是IT行业的厂商, 经销商, IT产品, 解决方案的提供场所</span></div></a><div class="link-buttons view-only"><i class="show-details fa fa-fw fa-info" title="Show details"></i></div></li><li class="urllist-link ui-sortable-handle"><a class="link" href="http://www.163.com/" title="163.com
网易是中国领先的互联网技术公司，为用户提供免费邮箱、游戏、搜索引擎服务，开设新闻、娱乐、体育等30多个内容频道，及博客、视频、论坛等互动交流，网聚人的力量。" data-item_id="29308034" data-monetizer="null" data-icon="null" data-favicon="https://static.start.me/favicons/ne9tsyobangnq0f7soob"><i class="favicon show ready" data-icon-size="xxxxx"><img src="./main_files/ne9tsyobangnq0f7soob"></i><div class="info"><span class="title">163.com</span><span class="description" data-raw="网易是中国领先的互联网技术公司，为用户提供免费邮箱、游戏、搜索引擎服务，开设新闻、娱乐、体育等30多个内容频道，及博客、视频、论坛等互动交流，网聚人的力量。">网易是中国领先的互联网技术公司，为用户提供免费邮箱、游戏、搜索引擎服务，开设新闻、娱乐、体育等30多个内容频道，及博客、视频、论坛等互动交流，网聚人的力量。</span></div></a><div class="link-buttons view-only"><i class="show-details fa fa-fw fa-info" title="Show details"></i></div></li><li class="urllist-link ui-sortable-handle"><a class="link" href="http://www.zhaopin.com/" title="智联
智联招聘是全国性权威人才网站,为求职者提供最新最全的招聘信息,为企业提供网络招聘,校园招聘,猎头,培训,测评和人事外包等一站式专业人力资源服务.好工作上智联招聘." data-item_id="29336119" data-monetizer="null" data-icon="null" data-favicon="https://static.start.me/favicons/obqah6fnsbrs61fseyp6"><i class="favicon show ready" data-icon-size="xxxxx"><img src="./main_files/obqah6fnsbrs61fseyp6"></i><div class="info"><span class="title">智联</span><span class="description" data-raw="智联招聘是全国性权威人才网站,为求职者提供最新最全的招聘信息,为企业提供网络招聘,校园招聘,猎头,培训,测评和人事外包等一站式专业人力资源服务.好工作上智联招聘.">智联招聘是全国性权威人才网站,为求职者提供最新最全的招聘信息,为企业提供网络招聘,校园招聘,猎头,培训,测评和人事外包等一站式专业人力资源服务.好工作上智联招聘.</span></div></a><div class="link-buttons view-only"><i class="show-details fa fa-fw fa-info" title="Show details"></i></div></li><li class="urllist-link ui-sortable-handle"><a class="link" href="http://www.21cn.com/" title="21cn.com
21CN是中国电信全资子公司，中国最早的互联网企业之一，近年来致力于移动互联网和云计算领域的产品研发，为个人与企业提供媒体资讯、电子邮箱、移动应用与云存储等方面的服务" data-item_id="29308041" data-monetizer="null" data-icon="null" data-favicon="https://static.start.me/favicons/b8if0zith14lmftz0b5m"><i class="favicon show ready" data-icon-size="xxxxx"><img src="./main_files/b8if0zith14lmftz0b5m"></i><div class="info"><span class="title">21cn.com</span><span class="description" data-raw="21CN是中国电信全资子公司，中国最早的互联网企业之一，近年来致力于移动互联网和云计算领域的产品研发，为个人与企业提供媒体资讯、电子邮箱、移动应用与云存储等方面的服务">21CN是中国电信全资子公司，中国最早的互联网企业之一，近年来致力于移动互联网和云计算领域的产品研发，为个人与企业提供媒体资讯、电子邮箱、移动应用与云存储等方面的服务</span></div></a><div class="link-buttons view-only"><i class="show-details fa fa-fw fa-info" title="Show details"></i></div></li><li class="urllist-link ui-sortable-handle"><a class="link" href="http://www.cnn.com/" title="CNN
View the latest breaking news and daily news for U.S., world, weather, entertainment, politics and health at CNN.com." data-item_id="29308043" data-monetizer="0" data-icon="null" data-favicon="https://static.start.me/favicons/dvgqy3lwhlz4y7jhbxrr"><i class="favicon show ready" data-icon-size="xxxxx"><img src="./main_files/dvgqy3lwhlz4y7jhbxrr"></i><div class="info"><span class="title">CNN</span><span class="description" data-raw="View the latest breaking news and daily news for U.S., world, weather, entertainment, politics and health at CNN.com.">View the latest breaking news and daily news for U.S., world, weather, entertainment, politics and health at CNN.com.</span></div></a><div class="link-buttons view-only"><i class="show-details fa fa-fw fa-info" title="Show details"></i></div></li><li class="urllist-link ui-sortable-handle"><a class="link" href="http://www.ishadowsocks.org/" title="ishadowsocks
iss为大家长期更新免费ss账号,在windows/Mac/Android上的使用教程和ss各种平台的软件下载,带各位小伙伴零基础轻松学
会和玩转ss" data-item_id="29336175" data-monetizer="null" data-icon="null" data-favicon="https://assets.start.me/assets/texticons/ZY1U7x-c841c209db39fd4c1128f1064a93ef5212937bf0b033a39059db6bc1832449fd.png"><i class="favicon show ready" data-icon-size="xxxxx"><img src="./main_files/ZY1U7x-c841c209db39fd4c1128f1064a93ef5212937bf0b033a39059db6bc1832449fd.png"></i><div class="info"><span class="title">ishadowsocks</span><span class="description" data-raw="iss为大家长期更新免费ss账号,在windows/Mac/Android上的使用教程和ss各种平台的软件下载,带各位小伙伴零基础轻松学
会和玩转ss">iss为大家长期更新免费ss账号,在windows/Mac/Android上的使用教程和ss各种平台的软件下载,带各位小伙伴零基础轻松学
会和玩转ss</span></div></a><div class="link-buttons view-only"><i class="show-details fa fa-fw fa-info" title="Show details"></i></div></li><li class="urllist-link ui-sortable-handle"><a class="link" href="https://www.facebook.com/" title="Facebook
Create an account or log into Facebook. Connect with friends, family and other people you know. Share photos and videos, send messages and get updates." data-item_id="29336544" data-monetizer="0" data-icon="null" data-favicon="https://static.start.me/favicons/bvuqbzm2aaium0xufcr8"><i class="favicon show ready" data-icon-size="xxxxx"><img src="./main_files/bvuqbzm2aaium0xufcr8"></i><div class="info"><span class="title">Facebook</span><span class="description" data-raw="Create an account or log into Facebook. Connect with friends, family and other people you know. Share photos and videos, send messages and get updates.">Create an account or log into Facebook. Connect with friends, family and other people you know. Share photos and videos, send messages and get updates.</span></div></a><div class="link-buttons view-only"><i class="show-details fa fa-fw fa-info" title="Show details"></i></div></li><li class="urllist-link ui-sortable-handle"><a class="link" href="http://tieba.baidu.com/" title="百度贴吧
百度贴吧——全球最大的中文社区。贴吧的使命是让志同道合的人相聚。不论是大众话题还是小众话题，都能精准地聚集大批同好网友，展示自我风采，结交知音，搭建别具特色的“兴趣主题“互动平台。贴吧目录涵盖游戏、地区、文学、动漫、娱乐明星、生活、体育、电脑数码等方方面面，是全球最大的中文交流平台，它为人们提供一个表达和交流思想的自由网络空间，并以此汇集志同道合的网友。" data-item_id="29336546" data-monetizer="0" data-icon="null" data-favicon="https://static.start.me/favicons/njdartqcsiiaxyoxwcbm"><i class="favicon show ready" data-icon-size="xxxxx"><img src="./main_files/njdartqcsiiaxyoxwcbm"></i><div class="info"><span class="title">百度贴吧</span><span class="description" data-raw="百度贴吧——全球最大的中文社区。贴吧的使命是让志同道合的人相聚。不论是大众话题还是小众话题，都能精准地聚集大批同好网友，展示自我风采，结交知音，搭建别具特色的“兴趣主题“互动平台。贴吧目录涵盖游戏、地区、文学、动漫、娱乐明星、生活、体育、电脑数码等方方面面，是全球最大的中文交流平台，它为人们提供一个表达和交流思想的自由网络空间，并以此汇集志同道合的网友。">百度贴吧——全球最大的中文社区。贴吧的使命是让志同道合的人相聚。不论是大众话题还是小众话题，都能精准地聚集大批同好网友，展示自我风采，结交知音，搭建别具特色的“兴趣主题“互动平台。贴吧目录涵盖游戏、地区、文学、动漫、娱乐明星、生活、体育、电脑数码等方方面面，是全球最大的中文交流平台，它为人们提供一个表达和交流思想的自由网络空间，并以此汇集志同道合的网友。</span></div></a><div class="link-buttons view-only"><i class="show-details fa fa-fw fa-info" title="Show details"></i></div></li><li class="urllist-link ui-sortable-handle"><a class="link" href="http://www.people.com.cn/" title="人民网
人民网，是世界十大报纸之一《人民日报》建设的以新闻为主的大型网上信息发布平台，也是互联网上最大的中文和多语种新闻网站之一。作为国家重点新闻网站，人民网以新闻报道的权威性、及时性、多样性和评论性为特色，在网民中树立起了“权威媒体、大众网站”的形象。" data-item_id="29336552" data-monetizer="0" data-icon="null" data-favicon="https://static.start.me/favicons/ixb5vltjrne2opzkatk7"><i class="favicon show ready" data-icon-size="xxxx"><img src="./main_files/ixb5vltjrne2opzkatk7"></i><div class="info"><span class="title">人民网</span><span class="description" data-raw="人民网，是世界十大报纸之一《人民日报》建设的以新闻为主的大型网上信息发布平台，也是互联网上最大的中文和多语种新闻网站之一。作为国家重点新闻网站，人民网以新闻报道的权威性、及时性、多样性和评论性为特色，在网民中树立起了“权威媒体、大众网站”的形象。">人民网，是世界十大报纸之一《人民日报》建设的以新闻为主的大型网上信息发布平台，也是互联网上最大的中文和多语种新闻网站之一。作为国家重点新闻网站，人民网以新闻报道的权威性、及时性、多样性和评论性为特色，在网民中树立起了“权威媒体、大众网站”的形象。</span></div></a><div class="link-buttons view-only"><i class="show-details fa fa-fw fa-info" title="Show details"></i></div></li><li class="urllist-link ui-sortable-handle"><a class="link" href="https://www.oschina.net/p/PointDownload" title="点载
PointDownload 点载,是一个能帮助你方便地从网络上下载各种文件的软件。现在已经支持主流的各种下载协议，包括迅雷的thunder://和QQ旋风的下载协议。 当前提供的软件安装包支持的操作系统有：LinuxDeepin2014, Ubuntu14.04, UbuntuKy14.04. 安装包在LinuxDeepin论坛页面 发布，提供下载 其他Linux发行版本的安装包暂时没..." data-item_id="29400397" data-monetizer="0" data-icon="null" data-favicon="https://static.start.me/favicons/sozr44sd2y7wopjfvpxl"><i class="favicon show ready" data-icon-size="xxxxx"><img src="./main_files/sozr44sd2y7wopjfvpxl"></i><div class="info"><span class="title">点载</span><span class="description" data-raw="PointDownload 点载,是一个能帮助你方便地从网络上下载各种文件的软件。现在已经支持主流的各种下载协议，包括迅雷的thunder://和QQ旋风的下载协议。 当前提供的软件安装包支持的操作系统有：LinuxDeepin2014, Ubuntu14.04, UbuntuKy14.04. 安装包在LinuxDeepin论坛页面 发布，提供下载 其他Linux发行版本的安装包暂时没...">PointDownload 点载,是一个能帮助你方便地从网络上下载各种文件的软件。现在已经支持主流的各种下载协议，包括迅雷的thunder://和QQ旋风的下载协议。 当前提供的软件安装包支持的操作系统有：LinuxDeepin2014, Ubuntu14.04, UbuntuKy14.04. 安装包在LinuxDeepin论坛页面 发布，提供下载 其他Linux发行版本的安装包暂时没...</span></div></a><div class="link-buttons view-only"><i class="show-details fa fa-fw fa-info" title="Show details"></i></div></li><li class="urllist-link ui-sortable-handle"><a class="link" href="https://console.preview.openshift.com/console/project/meshren/overview" title="OpenShift Web Console
console.preview.openshift.com/console/project/meshren/overview" data-item_id="29561516" data-monetizer="null" data-icon="null" data-favicon="https://assets.start.me/assets/texticons/WEXiwO-6a9cf0138aaffdfe78bcaf10bfbc0d87cae2c6de6f507462f228a789421a414f.png"><i class="favicon show ready" data-icon-size="xxxxx"><img src="./main_files/WEXiwO-6a9cf0138aaffdfe78bcaf10bfbc0d87cae2c6de6f507462f228a789421a414f.png"></i><div class="info"><span class="title">OpenShift Web Console</span><span class="description" data-raw="console.preview.openshift.com/console/project/meshren/overview">console.preview.openshift.com/console/project/meshren/overview</span></div></a><div class="link-buttons view-only"><i class="show-details fa fa-fw fa-info" title="Show details"></i></div></li><li class="urllist-link ui-sortable-handle"><a class="link" href="http://ethanzhu.leanote.com/post/deepin%E4%B8%8B%E4%BD%BF%E7%94%A8ssh%E7%BF%BB%E5%A2%99" title="SSH
leanote, not only a notebook" data-item_id="29562490" data-monetizer="null" data-icon="null" data-favicon="https://assets.start.me/assets/texticons/ZYah7P-6ec7f52eb46b1f383d060b281cf4b1f3eaa394762cb0078b868d46d650fb370e.png"><i class="favicon show ready" data-icon-size="xxxxx"><img src="./main_files/ZYah7P-6ec7f52eb46b1f383d060b281cf4b1f3eaa394762cb0078b868d46d650fb370e.png"></i><div class="info"><span class="title">SSH</span><span class="description" data-raw="leanote, not only a notebook">leanote, not only a notebook</span></div></a><div class="link-buttons view-only"><i class="show-details fa fa-fw fa-info" title="Show details"></i></div></li><li class="urllist-link ui-sortable-handle"><a class="link" href="http://chromecj.com/chrome/2014-09/177/download.html" title="chrome插件
chromecj.com/chrome/2014-09/177/download.html" data-item_id="29647880" data-monetizer="null" data-icon="null" data-favicon="https://assets.start.me/assets/texticons/WPMUab-61d4b236e913b83932060ef477f484040b3bbbdee9fc35fd5e4a20cd21b88812.png"><i class="favicon show ready" data-icon-size="xxxxx"><img src="./main_files/WPMUab-61d4b236e913b83932060ef477f484040b3bbbdee9fc35fd5e4a20cd21b88812.png"></i><div class="info"><span class="title">chrome插件</span><span class="description" data-raw="chromecj.com/chrome/2014-09/177/download.html">chromecj.com/chrome/2014-09/177/download.html</span></div></a><div class="link-buttons view-only"><i class="show-details fa fa-fw fa-info" title="Show details"></i></div></li></ul><div class="view-only conditional-visibility-toggle"><i class="fa fa-chevron-up"></i><span class="more">More</span><span class="less">Less</span></div></div><div class="edit-only add" data-default="http://"><a href="https://start.me/p/VjXLqa#" class="new inline-edit"><i class="fa fa-plus"></i>新书签</a><form class="addLink"><input type="url" class="urlField ui-autocomplete-input" name="urlField" value="" placeholder="新书签" autocomplete="off"><button name="add" type="submit"><i class="fa fa-plus" title="添加"></i></button></form></div></article><article id="widget-7909593" data-uid="4" class="widget widget-notes non-editing  not-loading height-0" data-widget_id="7909593" data-widget_type="notes" style="background-color: rgba(255, 255, 221, 0.439216);"><header class="ui-sortable-handle"><i class="icon fa fa-sticky-note"></i><h2 class="title" title="附注"><span>附注</span></h2><div class="subtitle view-only"><span class="subtitle-icon"></span><span class="subtitle-text"></span></div><ul class="buttons"><li class="fa fa-fw fa-cog edit-only" title="设置"></li><li class="fa fa-fw fa-check done edit-only" title="保存"></li><li class="fa fa-fw fa-trash remove sorting-only" title="删除"></li><li class="fa fa-fw fa-chevron-down dropdown view-only logged-in trigger" title=""></li></ul></header><div class="body"><div class="markdown view-only"></div><div class="edit-only"><textarea class="editor" style="height: 0px;"></textarea></div></div></article><article class="editable-only add-widget-placeholder"><span class="button" title="添加工具"><span class="caption">+</span></span></article></section><section class="column column-1 ui-sortable"><article id="widget-7909424" data-uid="5" class="widget widget-urllist non-editing  not-loading viewmode-icons icons-small title-lines-1 all-hidden" data-widget_id="7909424" data-widget_type="urllist" style="background-color: rgba(255, 255, 255, 0.439216);"><header class="ui-sortable-handle"><i class="icon fa fa-bookmark"></i><h2 class="title" title="购物"><span>购物</span></h2><div class="subtitle view-only"><span class="subtitle-icon"></span><span class="subtitle-text"></span></div><ul class="buttons"><li class="fa fa-fw fa-cog edit-only" title="设置"></li><li class="fa fa-fw fa-check done edit-only" title="保存"></li><li class="fa fa-fw fa-trash remove sorting-only" title="删除"></li><li class="fa fa-fw fa-chevron-down dropdown view-only logged-in trigger" title=""></li></ul></header><div class="body"><ul class="itemlist urllist clearfix ui-sortable"><li class="urllist-link ui-sortable-handle"><a class="link" href="https://www.taobao.com/" title="淘宝网
淘宝海外全球站提供流行服饰、鞋包配件、3C、居家、母婴、运动等上亿件商品，服务于美国、香港、台湾、马来西亚等几十个国家和地区，让您享受网路超低价，同时提供担保交易（先收货后付款）、先行赔付、假一赔三、七天无理由退换货、数码免费维修等安全交易保障服务，安心享受购物乐趣！" data-item_id="29336000" data-monetizer="0" data-icon="null" data-favicon="https://static.start.me/favicons/a7num2gf0unkgaxiy6b4"><i class="favicon show ready" data-icon-size="xxxxx"><img src="./main_files/a7num2gf0unkgaxiy6b4"></i><div class="info"><span class="title">淘宝网</span><span class="description" data-raw="淘宝海外全球站提供流行服饰、鞋包配件、3C、居家、母婴、运动等上亿件商品，服务于美国、香港、台湾、马来西亚等几十个国家和地区，让您享受网路超低价，同时提供担保交易（先收货后付款）、先行赔付、假一赔三、七天无理由退换货、数码免费维修等安全交易保障服务，安心享受购物乐趣！">淘宝海外全球站提供流行服饰、鞋包配件、3C、居家、母婴、运动等上亿件商品，服务于美国、香港、台湾、马来西亚等几十个国家和地区，让您享受网路超低价，同时提供担保交易（先收货后付款）、先行赔付、假一赔三、七天无理由退换货、数码免费维修等安全交易保障服务，安心享受购物乐趣！</span></div></a><div class="link-buttons view-only"><i class="show-details fa fa-fw fa-info" title="Show details"></i></div></li><li class="urllist-link ui-sortable-handle"><a class="link" href="https://www.jd.com/" title="京东
京东JD.COM-专业的综合网上购物商城,销售家电、数码通讯、电脑、家居百货、服装服饰、母婴、图书、食品等数万个品牌优质商品.便捷、诚信的服务，为您提供愉悦的网上购物体验!" data-item_id="29336046" data-monetizer="0" data-icon="null" data-favicon="https://static.start.me/favicons/khb7noawzhgidyaunvpm"><i class="favicon show ready" data-icon-size="xxxxx"><img src="./main_files/khb7noawzhgidyaunvpm"></i><div class="info"><span class="title">京东</span><span class="description" data-raw="京东JD.COM-专业的综合网上购物商城,销售家电、数码通讯、电脑、家居百货、服装服饰、母婴、图书、食品等数万个品牌优质商品.便捷、诚信的服务，为您提供愉悦的网上购物体验!">京东JD.COM-专业的综合网上购物商城,销售家电、数码通讯、电脑、家居百货、服装服饰、母婴、图书、食品等数万个品牌优质商品.便捷、诚信的服务，为您提供愉悦的网上购物体验!</span></div></a><div class="link-buttons view-only"><i class="show-details fa fa-fw fa-info" title="Show details"></i></div></li><li class="urllist-link ui-sortable-handle"><a class="link" href="https://www.amazon.cn/" title="亚马逊
亚马逊中国（z.cn）坚持“以客户为中心”的理念，秉承“天天低价，正品行货”信念，销售图书、电脑、数码家电、母婴百货、服饰箱包等上千万种产品。亚马逊中国提供专业服务：正品行货天天低价，机打发票全国联保。货到付款，30天内可退换货。亚马逊为中国消费者提供便利、快捷的网购体验。" data-item_id="29336052" data-monetizer="1" data-icon="null" data-favicon="https://static.start.me/favicons/sat0gg56rg3kd1pdbuki"><i class="favicon show ready" data-icon-size="xxxxx"><img src="./main_files/sat0gg56rg3kd1pdbuki"></i><div class="info"><span class="title">亚马逊</span><span class="description" data-raw="亚马逊中国（z.cn）坚持“以客户为中心”的理念，秉承“天天低价，正品行货”信念，销售图书、电脑、数码家电、母婴百货、服饰箱包等上千万种产品。亚马逊中国提供专业服务：正品行货天天低价，机打发票全国联保。货到付款，30天内可退换货。亚马逊为中国消费者提供便利、快捷的网购体验。">亚马逊中国（z.cn）坚持“以客户为中心”的理念，秉承“天天低价，正品行货”信念，销售图书、电脑、数码家电、母婴百货、服饰箱包等上千万种产品。亚马逊中国提供专业服务：正品行货天天低价，机打发票全国联保。货到付款，30天内可退换货。亚马逊为中国消费者提供便利、快捷的网购体验。</span></div></a><div class="link-buttons view-only"><i class="show-details fa fa-fw fa-info" title="Show details"></i></div></li><li class="urllist-link ui-sortable-handle"><a class="link" href="http://www.haitao.com/" title="海淘
海淘网haitao.com是专业的海淘购物网站，3000多家海外购物网站的商品推荐,最新海淘值得买商品，以及许多会员的海淘晒单，帮助你开始一场简单而充满惊喜的海淘之旅。来海淘网官网，感受那未知的全球网购，体验那陌生却愉悦的海淘购物！" data-item_id="29336057" data-monetizer="null" data-icon="null" data-favicon="https://static.start.me/favicons/dooc4bwrxpoy8kfds8yp"><i class="favicon show ready" data-icon-size="xxxxx"><img src="./main_files/dooc4bwrxpoy8kfds8yp"></i><div class="info"><span class="title">海淘</span><span class="description" data-raw="海淘网haitao.com是专业的海淘购物网站，3000多家海外购物网站的商品推荐,最新海淘值得买商品，以及许多会员的海淘晒单，帮助你开始一场简单而充满惊喜的海淘之旅。来海淘网官网，感受那未知的全球网购，体验那陌生却愉悦的海淘购物！">海淘网haitao.com是专业的海淘购物网站，3000多家海外购物网站的商品推荐,最新海淘值得买商品，以及许多会员的海淘晒单，帮助你开始一场简单而充满惊喜的海淘之旅。来海淘网官网，感受那未知的全球网购，体验那陌生却愉悦的海淘购物！</span></div></a><div class="link-buttons view-only"><i class="show-details fa fa-fw fa-info" title="Show details"></i></div></li><li class="urllist-link ui-sortable-handle"><a class="link" href="https://www.1688.com/" title="阿里巴巴
阿里巴巴（1688.com）是全球企业间（B2B）电子商务的著名品牌，为数千万网商提供海量商机信息和便捷安全的在线交易市场，也是商人们以商会友、真实互动的社区平台。目前1688.com已覆盖原材料、工业品、服装服饰、家居百货、小商品等12个行业大类，提供从原料--生产--加工--现货等一系列的供应产品和服务。" data-item_id="29440136" data-monetizer="null" data-icon="null" data-favicon="https://assets.start.me/assets/texticons/ZmAHwG-093cac2895b21e924895863e6189d7419c70119ffa5b361ec21cbc04d6fa4da5.png"><i class="favicon show ready" data-icon-size="xxxxx"><img src="./main_files/ZmAHwG-093cac2895b21e924895863e6189d7419c70119ffa5b361ec21cbc04d6fa4da5.png"></i><div class="info"><span class="title">阿里巴巴</span><span class="description" data-raw="阿里巴巴（1688.com）是全球企业间（B2B）电子商务的著名品牌，为数千万网商提供海量商机信息和便捷安全的在线交易市场，也是商人们以商会友、真实互动的社区平台。目前1688.com已覆盖原材料、工业品、服装服饰、家居百货、小商品等12个行业大类，提供从原料--生产--加工--现货等一系列的供应产品和服务。">阿里巴巴（1688.com）是全球企业间（B2B）电子商务的著名品牌，为数千万网商提供海量商机信息和便捷安全的在线交易市场，也是商人们以商会友、真实互动的社区平台。目前1688.com已覆盖原材料、工业品、服装服饰、家居百货、小商品等12个行业大类，提供从原料--生产--加工--现货等一系列的供应产品和服务。</span></div></a><div class="link-buttons view-only"><i class="show-details fa fa-fw fa-info" title="Show details"></i></div></li></ul><div class="view-only conditional-visibility-toggle"><i class="fa fa-chevron-up"></i><span class="more">More</span><span class="less">Less</span></div></div><div class="edit-only add" data-default="http://"><a href="https://start.me/p/VjXLqa#" class="new inline-edit"><i class="fa fa-plus"></i>新书签</a><form class="addLink"><input type="url" class="urlField ui-autocomplete-input" name="urlField" value="" placeholder="新书签" autocomplete="off"><button name="add" type="submit"><i class="fa fa-plus" title="添加"></i></button></form></div></article><article id="widget-7908941" data-uid="6" class="widget widget-urllist non-editing  not-loading viewmode-icons icons-small title-lines-1 all-hidden" data-widget_id="7908941" data-widget_type="urllist" style="background-color: rgba(255, 255, 255, 0.439216);"><header class="ui-sortable-handle"><i class="icon fa fa-bookmark"></i><h2 class="title" title="学习"><span>学习</span></h2><div class="subtitle view-only"><span class="subtitle-icon"></span><span class="subtitle-text"></span></div><ul class="buttons"><li class="fa fa-fw fa-cog edit-only" title="设置"></li><li class="fa fa-fw fa-check done edit-only" title="保存"></li><li class="fa fa-fw fa-trash remove sorting-only" title="删除"></li><li class="fa fa-fw fa-chevron-down dropdown view-only logged-in trigger" title=""></li></ul></header><div class="body"><ul class="itemlist urllist clearfix ui-sortable"><li class="urllist-link ui-sortable-handle"><a class="link" href="http://study.163.com/category/php" title="云课堂
在网易云课堂PHP频道，发现好课！云课堂是网易公司(163.com)旗下实用技能学习平台。与顶级机构、院校和优秀讲师合作，为您提供海量优质课程，以及创新的在线学习体验。涉及IT互联网、设计、职场提升、经管、法律、语言、留学、考试、亲子育儿、兴趣生活等多个领域。帮助您获得全新的个人发展和能力提升。" data-item_id="29333656" data-monetizer="null" data-icon="null" data-favicon="https://static.start.me/favicons/pnhacfouc5lhk9xgn4pa"><i class="favicon show ready" data-icon-size="xxxxx"><img src="./main_files/pnhacfouc5lhk9xgn4pa"></i><div class="info"><span class="title">云课堂</span><span class="description" data-raw="在网易云课堂PHP频道，发现好课！云课堂是网易公司(163.com)旗下实用技能学习平台。与顶级机构、院校和优秀讲师合作，为您提供海量优质课程，以及创新的在线学习体验。涉及IT互联网、设计、职场提升、经管、法律、语言、留学、考试、亲子育儿、兴趣生活等多个领域。帮助您获得全新的个人发展和能力提升。">在网易云课堂PHP频道，发现好课！云课堂是网易公司(163.com)旗下实用技能学习平台。与顶级机构、院校和优秀讲师合作，为您提供海量优质课程，以及创新的在线学习体验。涉及IT互联网、设计、职场提升、经管、法律、语言、留学、考试、亲子育儿、兴趣生活等多个领域。帮助您获得全新的个人发展和能力提升。</span></div></a><div class="link-buttons view-only"><i class="show-details fa fa-fw fa-info" title="Show details"></i></div></li><li class="urllist-link ui-sortable-handle"><a class="link" href="http://document.thinkphp.cn/manual_3_2.html#template_define" title="TP手册
document.thinkphp.cn/manual_3_2.html#template_define" data-item_id="29393461" data-monetizer="null" data-icon="null" data-favicon="https://static.start.me/favicons/l1pijqjomp5tm6sugqsl"><i class="favicon show ready" data-icon-size="xxxx"><img src="./main_files/l1pijqjomp5tm6sugqsl"></i><div class="info"><span class="title">TP手册</span><span class="description" data-raw="document.thinkphp.cn/manual_3_2.html#template_define">document.thinkphp.cn/manual_3_2.html#template_define</span></div></a><div class="link-buttons view-only"><i class="show-details fa fa-fw fa-info" title="Show details"></i></div></li><li class="urllist-link ui-sortable-handle"><a class="link" href="https://www.shiyanlou.com/courses/96" title="实验楼
ThinkPHP是国人开发的优秀PHP框架，本课将从ThinkPHP的入门安装开始，详细讲解ThinkPHP的配置，路由，控制器，模型，视图，模版等几大板块，掌握ThinkPHP的主要技术点。" data-item_id="29333657" data-monetizer="null" data-icon="null" data-favicon="https://assets.start.me/assets/texticons/WE2swk-bbaecb040182150ec20610f929680113e657705d04817f0c5f2431ccd2a2ffb3.png"><i class="favicon show ready" data-icon-size="xxxxx"><img src="./main_files/WE2swk-bbaecb040182150ec20610f929680113e657705d04817f0c5f2431ccd2a2ffb3.png"></i><div class="info"><span class="title">实验楼</span><span class="description" data-raw="ThinkPHP是国人开发的优秀PHP框架，本课将从ThinkPHP的入门安装开始，详细讲解ThinkPHP的配置，路由，控制器，模型，视图，模版等几大板块，掌握ThinkPHP的主要技术点。">ThinkPHP是国人开发的优秀PHP框架，本课将从ThinkPHP的入门安装开始，详细讲解ThinkPHP的配置，路由，控制器，模型，视图，模版等几大板块，掌握ThinkPHP的主要技术点。</span></div></a><div class="link-buttons view-only"><i class="show-details fa fa-fw fa-info" title="Show details"></i></div></li><li class="urllist-link ui-sortable-handle"><a class="link" href="http://www.w3school.com.cn/index.html" title="w3school
全球最大的中文 Web 技术教程。" data-item_id="29333660" data-monetizer="0" data-icon="null" data-favicon="https://static.start.me/favicons/bf7npiayxsubl4ntibov"><i class="favicon show ready" data-icon-size="xxxxx"><img src="./main_files/bf7npiayxsubl4ntibov"></i><div class="info"><span class="title">w3school</span><span class="description" data-raw="全球最大的中文 Web 技术教程。">全球最大的中文 Web 技术教程。</span></div></a><div class="link-buttons view-only"><i class="show-details fa fa-fw fa-info" title="Show details"></i></div></li><li class="urllist-link ui-sortable-handle"><a class="link" href="http://www.imooc.com/learn/26" title="Imooc
www.imooc.com/learn/26" data-item_id="29333662" data-monetizer="null" data-icon="null" data-favicon="https://static.start.me/favicons/aur5lkiuv8bib5l1n1fu"><i class="favicon show ready" data-icon-size="xxxxx"><img src="./main_files/aur5lkiuv8bib5l1n1fu"></i><div class="info"><span class="title">Imooc</span><span class="description" data-raw="www.imooc.com/learn/26">www.imooc.com/learn/26</span></div></a><div class="link-buttons view-only"><i class="show-details fa fa-fw fa-info" title="Show details"></i></div></li></ul><div class="view-only conditional-visibility-toggle"><i class="fa fa-chevron-up"></i><span class="more">More</span><span class="less">Less</span></div></div><div class="edit-only add" data-default="http://"><a href="https://start.me/p/VjXLqa#" class="new inline-edit"><i class="fa fa-plus"></i>新书签</a><form class="addLink"><input type="url" class="urlField ui-autocomplete-input" name="urlField" value="" placeholder="新书签" autocomplete="off"><button name="add" type="submit"><i class="fa fa-plus" title="添加"></i></button></form></div></article><article id="widget-7904034" data-uid="7" class="widget widget-urllist non-editing  not-loading viewmode-icons icons-small title-lines-1 all-hidden" data-widget_id="7904034" data-widget_type="urllist" style="background-color: rgba(255, 255, 255, 0.439216);"><header class="ui-sortable-handle"><i class="icon fa fa-bookmark"></i><h2 class="title" title="娱乐"><span>娱乐</span></h2><div class="subtitle view-only"><span class="subtitle-icon"></span><span class="subtitle-text"></span></div><ul class="buttons"><li class="fa fa-fw fa-cog edit-only" title="设置"></li><li class="fa fa-fw fa-check done edit-only" title="保存"></li><li class="fa fa-fw fa-trash remove sorting-only" title="删除"></li><li class="fa fa-fw fa-chevron-down dropdown view-only logged-in trigger" title=""></li></ul></header><div class="body"><ul class="itemlist urllist clearfix ui-sortable"><li class="urllist-link ui-sortable-handle"><a class="link" href="http://www.dotamax.com/" title="DotaMax
Trade and bet on competitive games your Dota 2 cosmetics items." data-item_id="29333535" data-monetizer="null" data-icon="null" data-favicon="https://static.start.me/favicons/yvp7daabvmenzvb1rgph"><i class="favicon show ready" data-icon-size="xxxx"><img src="./main_files/yvp7daabvmenzvb1rgph"></i><div class="info"><span class="title">DotaMax</span><span class="description" data-raw="Trade and bet on competitive games your Dota 2 cosmetics items.">Trade and bet on competitive games your Dota 2 cosmetics items.</span></div></a><div class="link-buttons view-only"><i class="show-details fa fa-fw fa-info" title="Show details"></i></div></li><li class="urllist-link ui-sortable-handle"><a class="link" href="http://www.panda.tv/cate/dota2" title="熊猫TV
DOTA2直播专区，第一时间为您提供最精彩的赛事直播和知名主播高清视频直播，内容丰富，精彩直播尽在最娱乐的熊猫直播。" data-item_id="29333490" data-monetizer="null" data-icon="null" data-favicon="https://static.start.me/favicons/e0e3ez75njtiqflhpck1"><i class="favicon show ready" data-icon-size="xxxx"><img src="./main_files/e0e3ez75njtiqflhpck1"></i><div class="info"><span class="title">熊猫TV</span><span class="description" data-raw="DOTA2直播专区，第一时间为您提供最精彩的赛事直播和知名主播高清视频直播，内容丰富，精彩直播尽在最娱乐的熊猫直播。">DOTA2直播专区，第一时间为您提供最精彩的赛事直播和知名主播高清视频直播，内容丰富，精彩直播尽在最娱乐的熊猫直播。</span></div></a><div class="link-buttons view-only"><i class="show-details fa fa-fw fa-info" title="Show details"></i></div></li><li class="urllist-link ui-sortable-handle"><a class="link" href="http://www.douyu.com/directory/game/DOTA2" title="斗鱼
斗鱼 - 每个人的直播平台提供高清、快捷、流畅的视频直播和游戏赛事直播服务，包含DOTA2等各类热门游戏赛事直播和各种名家大神游戏直播，内容丰富，推送及时，带给你不一样的视听体验，一切尽在斗鱼 - 每个人的直播平台。" data-item_id="29333532" data-monetizer="null" data-icon="null" data-favicon="https://assets.start.me/assets/texticons/W2phnr-a8d9721897b1f29e10ce4bf9b6372dae7f4d516a7264c4f8225ff28ca5e47ebe.png"><i class="favicon show ready" data-icon-size="xxxxx"><img src="./main_files/W2phnr-a8d9721897b1f29e10ce4bf9b6372dae7f4d516a7264c4f8225ff28ca5e47ebe.png"></i><div class="info"><span class="title">斗鱼</span><span class="description" data-raw="斗鱼 - 每个人的直播平台提供高清、快捷、流畅的视频直播和游戏赛事直播服务，包含DOTA2等各类热门游戏赛事直播和各种名家大神游戏直播，内容丰富，推送及时，带给你不一样的视听体验，一切尽在斗鱼 - 每个人的直播平台。">斗鱼 - 每个人的直播平台提供高清、快捷、流畅的视频直播和游戏赛事直播服务，包含DOTA2等各类热门游戏赛事直播和各种名家大神游戏直播，内容丰富，推送及时，带给你不一样的视听体验，一切尽在斗鱼 - 每个人的直播平台。</span></div></a><div class="link-buttons view-only"><i class="show-details fa fa-fw fa-info" title="Show details"></i></div></li><li class="urllist-link ui-sortable-handle"><a class="link" href="http://www.youku.com/" title="优酷
视频服务平台,提供视频播放,视频发布,视频搜索,视频分享" data-item_id="29333665" data-monetizer="null" data-icon="null" data-favicon="https://static.start.me/favicons/ygeqxj7bmmzdwsojklq9"><i class="favicon show ready" data-icon-size="xxxxx"><img src="./main_files/ygeqxj7bmmzdwsojklq9"></i><div class="info"><span class="title">优酷</span><span class="description" data-raw="视频服务平台,提供视频播放,视频发布,视频搜索,视频分享">视频服务平台,提供视频播放,视频发布,视频搜索,视频分享</span></div></a><div class="link-buttons view-only"><i class="show-details fa fa-fw fa-info" title="Show details"></i></div></li></ul><div class="view-only conditional-visibility-toggle"><i class="fa fa-chevron-up"></i><span class="more">More</span><span class="less">Less</span></div></div><div class="edit-only add" data-default="http://"><a href="https://start.me/p/VjXLqa#" class="new inline-edit"><i class="fa fa-plus"></i>新书签</a><form class="addLink"><input type="url" class="urlField ui-autocomplete-input" name="urlField" value="" placeholder="新书签" autocomplete="off"><button name="add" type="submit"><i class="fa fa-plus" title="添加"></i></button></form></div></article><article id="widget-7908915" data-uid="8" class="widget widget-urllist non-editing  not-loading viewmode-icons icons-small title-lines-1 all-hidden" data-widget_id="7908915" data-widget_type="urllist" style="background-color: rgba(255, 255, 255, 0.439216);"><header class="ui-sortable-handle"><i class="icon fa fa-bookmark"></i><h2 class="title" title="邮箱"><span>邮箱</span></h2><div class="subtitle view-only"><span class="subtitle-icon"></span><span class="subtitle-text"></span></div><ul class="buttons"><li class="fa fa-fw fa-cog edit-only" title="设置"></li><li class="fa fa-fw fa-check done edit-only" title="保存"></li><li class="fa fa-fw fa-trash remove sorting-only" title="删除"></li><li class="fa fa-fw fa-chevron-down dropdown view-only logged-in trigger" title=""></li></ul></header><div class="body"><ul class="itemlist urllist clearfix ui-sortable"><li class="urllist-link ui-sortable-handle"><a class="link" href="https://mail.google.com/mail/" title="Gmail
Gmail is email that&#39;s intuitive, efficient, and useful. 15 GB of storage, less spam, and mobile access." data-item_id="29333596" data-monetizer="0" data-icon="null" data-favicon="https://static.start.me/favicons/cmmesetudeda1z9r98sz"><i class="favicon show ready" data-icon-size="xxxxx"><img src="./main_files/cmmesetudeda1z9r98sz"></i><div class="info"><span class="title">Gmail</span><span class="description" data-raw="Gmail is email that&#39;s intuitive, efficient, and useful. 15 GB of storage, less spam, and mobile access.">Gmail is email that's intuitive, efficient, and useful. 15 GB of storage, less spam, and mobile access.</span></div></a><div class="link-buttons view-only"><i class="show-details fa fa-fw fa-info" title="Show details"></i></div></li><li class="urllist-link ui-sortable-handle"><a class="link" href="http://mail.163.com/" title="网易邮箱
网易163免费邮箱--中文邮箱第一品牌。容量自动翻倍，支持50兆附件,免费开通手机号码邮箱赠送3G超大附件服务。支持各种客户端软件收发，垃圾邮件拦截率超过98%。" data-item_id="29333597" data-monetizer="null" data-icon="null" data-favicon="https://static.start.me/favicons/lnspsvxrufnfyuqxgmkf"><i class="favicon show ready" data-icon-size="xxxxx"><img src="./main_files/lnspsvxrufnfyuqxgmkf"></i><div class="info"><span class="title">网易邮箱</span><span class="description" data-raw="网易163免费邮箱--中文邮箱第一品牌。容量自动翻倍，支持50兆附件,免费开通手机号码邮箱赠送3G超大附件服务。支持各种客户端软件收发，垃圾邮件拦截率超过98%。">网易163免费邮箱--中文邮箱第一品牌。容量自动翻倍，支持50兆附件,免费开通手机号码邮箱赠送3G超大附件服务。支持各种客户端软件收发，垃圾邮件拦截率超过98%。</span></div></a><div class="link-buttons view-only"><i class="show-details fa fa-fw fa-info" title="Show details"></i></div></li><li class="urllist-link ui-sortable-handle"><a class="link" href="https://col125.mail.live.com/default.aspx" title="Hotmail
Outlook.com is a free, personal email service from Microsoft. Keep your inbox clutter-free with powerful organizational tools, and collaborate easily with OneDrive and Office Online integration." data-item_id="29333647" data-monetizer="null" data-icon="null" data-favicon="https://static.start.me/favicons/tdl6jjqdi2ugw18vhsyw"><i class="favicon show ready" data-icon-size="xxxxx"><img src="./main_files/tdl6jjqdi2ugw18vhsyw"></i><div class="info"><span class="title">Hotmail</span><span class="description" data-raw="Outlook.com is a free, personal email service from Microsoft. Keep your inbox clutter-free with powerful organizational tools, and collaborate easily with OneDrive and Office Online integration.">Outlook.com is a free, personal email service from Microsoft. Keep your inbox clutter-free with powerful organizational tools, and collaborate easily with OneDrive and Office Online integration.</span></div></a><div class="link-buttons view-only"><i class="show-details fa fa-fw fa-info" title="Show details"></i></div></li><li class="urllist-link ui-sortable-handle"><a class="link" href="http://note.youdao.com/" title="有道笔记
有道云笔记是网易出品，获得4600万用户的青睐的笔记软件。提供了PC端、移动端、网页端等多端应用，用户可以随时随地对线上资料进行编辑、分享以及协同。" data-item_id="29333649" data-monetizer="null" data-icon="null" data-favicon="https://assets.start.me/assets/texticons/Vbpun1-9f0f1530af86e64fec5ba5a3437b045c39e4fec176d60b5472959f478b88732c.png"><i class="favicon show ready" data-icon-size="xxxxx"><img src="./main_files/Vbpun1-9f0f1530af86e64fec5ba5a3437b045c39e4fec176d60b5472959f478b88732c.png"></i><div class="info"><span class="title">有道笔记</span><span class="description" data-raw="有道云笔记是网易出品，获得4600万用户的青睐的笔记软件。提供了PC端、移动端、网页端等多端应用，用户可以随时随地对线上资料进行编辑、分享以及协同。">有道云笔记是网易出品，获得4600万用户的青睐的笔记软件。提供了PC端、移动端、网页端等多端应用，用户可以随时随地对线上资料进行编辑、分享以及协同。</span></div></a><div class="link-buttons view-only"><i class="show-details fa fa-fw fa-info" title="Show details"></i></div></li></ul><div class="view-only conditional-visibility-toggle"><i class="fa fa-chevron-up"></i><span class="more">More</span><span class="less">Less</span></div></div><div class="edit-only add" data-default="http://"><a href="https://start.me/p/VjXLqa#" class="new inline-edit"><i class="fa fa-plus"></i>新书签</a><form class="addLink"><input type="url" class="urlField ui-autocomplete-input" name="urlField" value="" placeholder="新书签" autocomplete="off"><button name="add" type="submit"><i class="fa fa-plus" title="添加"></i></button></form></div></article><article class="editable-only add-widget-placeholder"><span class="button" title="添加工具"><span class="caption">+</span></span></article></section><section class="column column-2 ui-sortable"><article id="widget-7918667" data-uid="9" class="widget widget-calendar non-editing not-loading" data-widget_id="7918667" data-widget_type="calendar" style="background-color: rgba(255, 255, 255, 0.439216);"><header class="ui-sortable-handle"><i class="icon fa fa-calendar"></i><h2 class="title" title="Calendar"><span>Calendar</span></h2><div class="subtitle view-only"><span class="subtitle-icon"></span><span class="subtitle-text"></span></div><ul class="buttons"><li class="fa fa-fw fa-cog edit-only" title="设置"></li><li class="fa fa-fw fa-check done edit-only" title="保存"></li><li class="fa fa-fw fa-trash remove sorting-only" title="删除"></li><li class="fa fa-fw fa-chevron-down dropdown view-only logged-in trigger" title=""></li></ul></header><div class="body no-padding"><div class="view-only toolbar clearfix"><div class="toolbar-left"><span class="buttons"><a href="https://start.me/p/VjXLqa#" class="button prev"><i class="fa fa-fw fa-chevron-left"></i></a><a href="https://start.me/p/VjXLqa#" class="button next"><i class="fa fa-fw fa-chevron-right"></i></a></span><span class="title">October (2016)</span></div><div class="toolbar-right"><span class="buttons"><a href="https://start.me/p/VjXLqa#" class="button month-view active">Month</a><a href="https://start.me/p/VjXLqa#" class="button agenda-view">Agenda</a></span></div></div><div class="view-only calendar-body clearfix month"><div class="row row_"><div class="heading"> 日 </div><div class="heading"> 一 </div><div class="heading"> 二 </div><div class="heading"> 三 </div><div class="heading"> 四 </div><div class="heading"> 五 </div><div class="heading"> 六 </div></div><div class="row row_0"><div class="cell date_2016-09-25 day_25 weekday_0 disabled " data-date="2016-09-25" title="September 25, 2016"><span class="cell-title">25</span><ul></ul><p class="more-events" style="display: none"> [missing {{count}} value] more </p></div><div class="cell date_2016-09-26 day_26 weekday_1 disabled " data-date="2016-09-26" title="September 26, 2016"><span class="cell-title">26</span><ul></ul><p class="more-events" style="display: none"> [missing {{count}} value] more </p></div><div class="cell date_2016-09-27 day_27 weekday_2 disabled " data-date="2016-09-27" title="September 27, 2016"><span class="cell-title">27</span><ul></ul><p class="more-events" style="display: none"> [missing {{count}} value] more </p></div><div class="cell date_2016-09-28 day_28 weekday_3 disabled " data-date="2016-09-28" title="September 28, 2016"><span class="cell-title">28</span><ul></ul><p class="more-events" style="display: none"> [missing {{count}} value] more </p></div><div class="cell date_2016-09-29 day_29 weekday_4 disabled " data-date="2016-09-29" title="September 29, 2016"><span class="cell-title">29</span><ul></ul><p class="more-events" style="display: none"> [missing {{count}} value] more </p></div><div class="cell date_2016-09-30 day_30 weekday_5 disabled " data-date="2016-09-30" title="September 30, 2016"><span class="cell-title">30</span><ul></ul><p class="more-events" style="display: none"> [missing {{count}} value] more </p></div><div class="cell date_2016-10-01 day_1 weekday_6  " data-date="2016-10-01" title="October 1, 2016"><span class="cell-title">1</span><ul></ul><p class="more-events" style="display: none"> [missing {{count}} value] more </p></div></div><div class="row row_1"><div class="cell date_2016-10-02 day_2 weekday_0  " data-date="2016-10-02" title="October 2, 2016"><span class="cell-title">2</span><ul></ul><p class="more-events" style="display: none"> [missing {{count}} value] more </p></div><div class="cell date_2016-10-03 day_3 weekday_1  " data-date="2016-10-03" title="October 3, 2016"><span class="cell-title">3</span><ul></ul><p class="more-events" style="display: none"> [missing {{count}} value] more </p></div><div class="cell date_2016-10-04 day_4 weekday_2  " data-date="2016-10-04" title="October 4, 2016"><span class="cell-title">4</span><ul></ul><p class="more-events" style="display: none"> [missing {{count}} value] more </p></div><div class="cell date_2016-10-05 day_5 weekday_3  " data-date="2016-10-05" title="October 5, 2016"><span class="cell-title">5</span><ul></ul><p class="more-events" style="display: none"> [missing {{count}} value] more </p></div><div class="cell date_2016-10-06 day_6 weekday_4  " data-date="2016-10-06" title="October 6, 2016"><span class="cell-title">6</span><ul></ul><p class="more-events" style="display: none"> [missing {{count}} value] more </p></div><div class="cell date_2016-10-07 day_7 weekday_5  " data-date="2016-10-07" title="October 7, 2016"><span class="cell-title">7</span><ul></ul><p class="more-events" style="display: none"> [missing {{count}} value] more </p></div><div class="cell date_2016-10-08 day_8 weekday_6  " data-date="2016-10-08" title="October 8, 2016"><span class="cell-title">8</span><ul></ul><p class="more-events" style="display: none"> [missing {{count}} value] more </p></div></div><div class="row row_2"><div class="cell date_2016-10-09 day_9 weekday_0  " data-date="2016-10-09" title="October 9, 2016"><span class="cell-title">9</span><ul></ul><p class="more-events" style="display: none"> [missing {{count}} value] more </p></div><div class="cell date_2016-10-10 day_10 weekday_1  " data-date="2016-10-10" title="October 10, 2016"><span class="cell-title">10</span><ul></ul><p class="more-events" style="display: none"> [missing {{count}} value] more </p></div><div class="cell date_2016-10-11 day_11 weekday_2  " data-date="2016-10-11" title="October 11, 2016"><span class="cell-title">11</span><ul></ul><p class="more-events" style="display: none"> [missing {{count}} value] more </p></div><div class="cell date_2016-10-12 day_12 weekday_3  " data-date="2016-10-12" title="October 12, 2016"><span class="cell-title">12</span><ul></ul><p class="more-events" style="display: none"> [missing {{count}} value] more </p></div><div class="cell date_2016-10-13 day_13 weekday_4  " data-date="2016-10-13" title="October 13, 2016"><span class="cell-title">13</span><ul></ul><p class="more-events" style="display: none"> [missing {{count}} value] more </p></div><div class="cell date_2016-10-14 day_14 weekday_5  " data-date="2016-10-14" title="October 14, 2016"><span class="cell-title">14</span><ul></ul><p class="more-events" style="display: none"> [missing {{count}} value] more </p></div><div class="cell date_2016-10-15 day_15 weekday_6  " data-date="2016-10-15" title="October 15, 2016"><span class="cell-title">15</span><ul></ul><p class="more-events" style="display: none"> [missing {{count}} value] more </p></div></div><div class="row row_3"><div class="cell date_2016-10-16 day_16 weekday_0  " data-date="2016-10-16" title="October 16, 2016"><span class="cell-title">16</span><ul></ul><p class="more-events" style="display: none"> [missing {{count}} value] more </p></div><div class="cell date_2016-10-17 day_17 weekday_1  " data-date="2016-10-17" title="October 17, 2016"><span class="cell-title">17</span><ul></ul><p class="more-events" style="display: none"> [missing {{count}} value] more </p></div><div class="cell date_2016-10-18 day_18 weekday_2  " data-date="2016-10-18" title="October 18, 2016"><span class="cell-title">18</span><ul></ul><p class="more-events" style="display: none"> [missing {{count}} value] more </p></div><div class="cell date_2016-10-19 day_19 weekday_3  " data-date="2016-10-19" title="October 19, 2016"><span class="cell-title">19</span><ul></ul><p class="more-events" style="display: none"> [missing {{count}} value] more </p></div><div class="cell date_2016-10-20 day_20 weekday_4  " data-date="2016-10-20" title="October 20, 2016"><span class="cell-title">20</span><ul></ul><p class="more-events" style="display: none"> [missing {{count}} value] more </p></div><div class="cell date_2016-10-21 day_21 weekday_5  " data-date="2016-10-21" title="October 21, 2016"><span class="cell-title">21</span><ul></ul><p class="more-events" style="display: none"> [missing {{count}} value] more </p></div><div class="cell date_2016-10-22 day_22 weekday_6  " data-date="2016-10-22" title="October 22, 2016"><span class="cell-title">22</span><ul></ul><p class="more-events" style="display: none"> [missing {{count}} value] more </p></div></div><div class="row row_4"><div class="cell date_2016-10-23 day_23 weekday_0  " data-date="2016-10-23" title="October 23, 2016"><span class="cell-title">23</span><ul></ul><p class="more-events" style="display: none"> [missing {{count}} value] more </p></div><div class="cell date_2016-10-24 day_24 weekday_1  " data-date="2016-10-24" title="October 24, 2016"><span class="cell-title">24</span><ul></ul><p class="more-events" style="display: none"> [missing {{count}} value] more </p></div><div class="cell date_2016-10-25 day_25 weekday_2  " data-date="2016-10-25" title="October 25, 2016"><span class="cell-title">25</span><ul></ul><p class="more-events" style="display: none"> [missing {{count}} value] more </p></div><div class="cell date_2016-10-26 day_26 weekday_3  " data-date="2016-10-26" title="October 26, 2016"><span class="cell-title">26</span><ul></ul><p class="more-events" style="display: none"> [missing {{count}} value] more </p></div><div class="cell date_2016-10-27 day_27 weekday_4  " data-date="2016-10-27" title="October 27, 2016"><span class="cell-title">27</span><ul></ul><p class="more-events" style="display: none"> [missing {{count}} value] more </p></div><div class="cell date_2016-10-28 day_28 weekday_5  " data-date="2016-10-28" title="October 28, 2016"><span class="cell-title">28</span><ul></ul><p class="more-events" style="display: none"> [missing {{count}} value] more </p></div><div class="cell date_2016-10-29 day_29 weekday_6  " data-date="2016-10-29" title="October 29, 2016"><span class="cell-title">29</span><ul></ul><p class="more-events" style="display: none"> [missing {{count}} value] more </p></div></div><div class="row row_5"><div class="cell date_2016-10-30 day_30 weekday_0  today" data-date="2016-10-30" title="October 30, 2016"><span class="cell-title">30</span><ul></ul><p class="more-events" style="display: none"> [missing {{count}} value] more </p></div><div class="cell date_2016-10-31 day_31 weekday_1  " data-date="2016-10-31" title="October 31, 2016"><span class="cell-title">31</span><ul></ul><p class="more-events" style="display: none"> [missing {{count}} value] more </p></div><div class="cell date_2016-11-01 day_1 weekday_2 disabled " data-date="2016-11-01" title="November 1, 2016"><span class="cell-title">1</span><ul></ul><p class="more-events" style="display: none"> [missing {{count}} value] more </p></div><div class="cell date_2016-11-02 day_2 weekday_3 disabled " data-date="2016-11-02" title="November 2, 2016"><span class="cell-title">2</span><ul></ul><p class="more-events" style="display: none"> [missing {{count}} value] more </p></div><div class="cell date_2016-11-03 day_3 weekday_4 disabled " data-date="2016-11-03" title="November 3, 2016"><span class="cell-title">3</span><ul></ul><p class="more-events" style="display: none"> [missing {{count}} value] more </p></div><div class="cell date_2016-11-04 day_4 weekday_5 disabled " data-date="2016-11-04" title="November 4, 2016"><span class="cell-title">4</span><ul></ul><p class="more-events" style="display: none"> [missing {{count}} value] more </p></div><div class="cell date_2016-11-05 day_5 weekday_6 disabled " data-date="2016-11-05" title="November 5, 2016"><span class="cell-title">5</span><ul></ul><p class="more-events" style="display: none"> [missing {{count}} value] more </p></div></div></div><div class="edit-only calendar-list"></div></div><div class="edit-only add"><a href="https://start.me/p/VjXLqa#" class="new"><i class="fa fa-plus"></i>Add calendar</a></div></article><article id="widget-7904032" data-uid="10" class="widget widget-rsslist non-editing  ui-droppable not-loading" data-widget_id="7904032" data-widget_type="rsslist" style="background-color: rgba(255, 255, 255, 0.439216);"><header class="clickable ui-sortable-handle"><i class="icon favicon show ready" data-icon-size="xxxx"><img src="./main_files/chinanews.com"></i><h2 class="title" title="新闻"><span>新闻</span></h2><div class="subtitle view-only"><span class="subtitle-icon"></span><span class="subtitle-text"></span></div><ul class="buttons"><li class="fa fa-fw fa-cog edit-only" title="设置"></li><li class="fa fa-fw fa-external-link view-only" title="了解更多"></li><li class="fa fa-fw fa-check done edit-only" title="保存"></li><li class="fa fa-fw fa-trash remove sorting-only" title="删除"></li><li class="fa fa-fw fa-chevron-down dropdown view-only logged-in trigger" title=""></li></ul></header><div class="body no-padding"><ul class="view-only itemlist articlelist"><li class="article focus clearfix  large-image  no-image" data-item_id="344791701" data-feed_id="92259" data-date="2016-10-30T03:06:51.000000Z" title="
				黄磊孙莉过二人世界 贴脸自拍尽显夫妻相
			">  <div class="summary"><a href="http://go.rss.sina.com.cn/redirect.php?url=http://ent.sina.com.cn/s/m/2016-10-30/doc-ifxxfuff7220826.shtml" class="link" data-item_id="344791701">
				黄磊孙莉过二人世界 贴脸自拍尽显夫妻相
			</a><wbr><time datetime="2016-10-30T03:06:51.000Z" title="">大约1小时之前</time> 　　新浪娱乐讯 近日，孙莉在微博晒出一组游玩重庆的照片，照片取景街头，构图精细。同时还配上与老公黄磊[微博]的自拍合影，二人戴着口罩，大眼相像，尽显夫妻相，孙莉还配文称“两个人的大重庆”，似抛下女儿享受夫妻二人世界。
　　二人的自拍引得网友大呼有爱：“夫妻相我给满.... </div></li><li class="article focus clearfix  large-image  no-image" data-item_id="344788887" data-feed_id="92259" data-date="2016-10-30T02:34:28.000000Z" title="
				真吃货!舒淇为林熙蕾庆生眼中却只有蛋糕
			" id="ui-id-9">  <div class="summary"><a href="http://go.rss.sina.com.cn/redirect.php?url=http://ent.sina.com.cn/s/h/2016-10-30/doc-ifxxfysn8114272.shtml" class="link" data-item_id="344788887">
				真吃货!舒淇为林熙蕾庆生眼中却只有蛋糕
			</a><wbr><time datetime="2016-10-30T02:34:28.000Z" title="">大约2小时之前</time> 　　新浪娱乐讯 据港媒报道，今年九月舒淇[微博]和秘密拍拖四年的冯德伦[微博]宣布结婚，荣升人妻不到三个月，舒淇已有“第三者”！昨日（29日）是女星林熙蕾[微博]的41岁生日，视林熙蕾为超级好姐妹的舒淇，当然不放过为对方庆生的机会。今日凌晨接近一时，舒淇在社交网站上传和.... </div></li><li class="article no-focus first-no-focus" data-item_id="344788886" data-feed_id="92259" data-date="2016-10-30T02:14:14.000000Z" title="
				电视剧《红高粱》剧本被告抄袭：法院受理
			"><a href="http://go.rss.sina.com.cn/redirect.php?url=http://ent.sina.com.cn/v/m/2016-10-30/doc-ifxxfuff7217810.shtml" class="link" data-item_id=""> <i class="bullet fa fa-chevron-right"></i> <span>
				电视剧《红高粱》剧本被告抄袭：法院受理
			</span></a></li><li class="article no-focus " data-item_id="344788885" data-feed_id="92259" data-date="2016-10-30T01:18:20.000000Z" title="
				周慧敏避谈关淑怡意外堕海:尊重朋友隐私
			"><a href="http://go.rss.sina.com.cn/redirect.php?url=http://ent.sina.com.cn/s/h/2016-10-30/doc-ifxxfuff7214501.shtml" class="link" data-item_id=""> <i class="bullet fa fa-chevron-right"></i> <span>
				周慧敏避谈关淑怡意外堕海:尊重朋友隐私
			</span></a></li><li class="article no-focus " data-item_id="344788884" data-feed_id="92259" data-date="2016-10-30T01:09:04.000000Z" title="
				小h儿紫裙小马甲扮巫师 眉眼超像汪小菲
			"><a href="http://go.rss.sina.com.cn/redirect.php?url=http://ent.sina.com.cn/s/m/2016-10-30/doc-ifxxfuff7214053.shtml" class="link" data-item_id=""> <i class="bullet fa fa-chevron-right"></i> <span>
				小h儿紫裙小马甲扮巫师 眉眼超像汪小菲
			</span></a></li><li class="article no-focus " data-item_id="344788883" data-feed_id="92259" data-date="2016-10-30T01:02:50.000000Z" title="
				美国A咖女星艳照门黑客被判入狱18个月
			"><a href="http://go.rss.sina.com.cn/redirect.php?url=http://ent.sina.com.cn/s/u/2016-10-30/doc-ifxxfysn8109180.shtml" class="link" data-item_id=""> <i class="bullet fa fa-chevron-right"></i> <span>
				美国A咖女星艳照门黑客被判入狱18个月
			</span></a></li><li class="article no-focus " data-item_id="344788882" data-feed_id="92259" data-date="2016-10-30T00:59:14.000000Z" title="
				邓丽欣:方力申感情专一 想跟他做回朋友
			"><a href="http://go.rss.sina.com.cn/redirect.php?url=http://ent.sina.com.cn/v/h/2016-10-30/doc-ifxxfysn8108775.shtml" class="link" data-item_id=""> <i class="bullet fa fa-chevron-right"></i> <span>
				邓丽欣:方力申感情专一 想跟他做回朋友
			</span></a></li></ul><nav class="view-only pager"><a href="https://start.me/p/VjXLqa#" class="prev" disabled="disabled"><i class="fa fa-fw fa-chevron-left"></i></a><span class="current">1</span><span class="separator">/</span><span class="total">8</span><a href="https://start.me/p/VjXLqa#" class="next"><i class="fa fa-fw fa-chevron-right"></i></a></nav><ul class="edit-only itemlist large feedlist ui-sortable"><li class="feed ui-sortable-handle" data-item_id="92259" data-status="1" data-name="焦点新闻-新浪娱乐" data-index=""><a href="http://rss.sina.com.cn/news/allnews/ent.xml" class="link" data-item_id="92259"><i title="焦点新闻-新浪娱乐" class="favicon show ready" data-placeholder="fa-rss" data-icon-size="xxxxx"><img src="./main_files/rss.sina.com.cn"></i><i class="fa fa-warning error hide" title="该RSS订阅是无效的，无法被加载。请用正确的RSS订阅再次尝试"></i><span>焦点新闻-新浪娱乐</span><i class="edit-only edit-link fa fa-pencil" title="编辑"></i></a><a href="https://start.me/p/VjXLqa#" class="edit-only delete"><i class="edit-only fa fa-trash" title="删除"></i></a></li></ul></div><div class="edit-only add"><a href="https://start.me/p/VjXLqa#" class="new"><i class="fa fa-plus"></i>新RSS订阅</a></div></article><article class="editable-only add-widget-placeholder"><span class="button" title="添加工具"><span class="caption">+</span></span></article></section></section></section></section></section>
</div>

</main>
<footer class=" collapsed " id="footer" role="contentinfo">
<div class="container clearfix">
<section>
<h5>公司</h5>
<ul>
<li>
<a href="https://start.me/about" target="_top" title="关于我们">关于我们</a>
</li>
<li>
<a href="http://blog.start.me/" target="_top" title="博客">博客</a>
</li>
<li>
<a href="https://start.me/contribute" target="_top" title="Contribute">Contribute</a>
</li>
<li>
<a href="https://support.start.me/account/dropboxes/20215422" onclick="script: Yourls.showFeedbackDialog(); return false;" target="_top" title="反馈">反馈</a>
</li>
<li>
<a href="https://start.me/terms" target="_top" title="Terms of Service">Terms of Service</a>
</li>
<li>
<a href="https://start.me/privacy" target="_top" title="隐私政策">隐私政策</a>
</li>
</ul>
</section><section>
<h5>产品</h5>
<ul>
<li>
<a href="https://start.me/zh-CN" target="_top" title="For You">For You</a>
</li>
<li>
<a href="https://start.me/zh-CN/teams" target="_top" title="For Teams">For Teams</a>
</li>
<li>
<a href="https://start.me/zh-CN/%25E6%2595%2599%25E8%2582%25B2" target="_top" title="用于教育">用于教育</a>
</li>
</ul>
</section><section>
<h5>支持</h5>
<ul>
<li>
<a href="https://start.me/support/sections/200052612-FAQ" target="_top" title="常见问题">常见问题</a>
</li>
<li>
<a href="https://start.me/support" target="_top" title="帮助">帮助</a>
</li>
<li>
<a href="https://start.me/support/sections/200053752-Widgets" target="_top" title="工具">工具</a>
</li>
<li>
<a href="https://start.me/support/articles/200153732" target="_top" title="iGoogle用户">iGoogle用户</a>
</li>
</ul>
</section><section>
<h5>浏览器</h5>
<ul>
<li>
<a class="icon-chrome" href="https://start.me/chrome" target="_top" title="Chrome">Chrome</a>
</li>
<li>
<a class="icon-firefox" href="https://start.me/firefox" target="_top" title="Firefox">Firefox</a>
</li>
<li>
<a class="icon-bookmarklet" href="https://start.me/support/articles/200964881-Add-Bookmarklet" target="_top" title="书签工具">书签工具</a>
</li>
<li>
<a class="icon-startme" href="https://start.me/support/sections/200061581-Set-as-startpage" target="_top" title="设为起始页">设为起始页</a>
</li>
</ul>
</section><section>
<h5>跟随我们</h5>
<ul>
<li>
<a class="icon-facebook" href="https://www.facebook.com/STARTMEpage" target="_top" title="Facebook">Facebook</a>
</li>
<li>
<a class="icon-googleplus" href="https://plus.google.com/+StartMe" target="_top" title="Google+">Google+</a>
</li>
<li>
<a class="icon-twitter" href="https://twitter.com/startme" target="_top" title="Twitter">Twitter</a>
</li>
</ul>
</section><div id="copyright">
©
2016
start.me
<i class="fa fa-fw fa-chevron-down"></i>
</div>

</div>
</footer>
</div>
<script src="./main_files/application-safetynet-0f34a7d0189b757b194c00fbe766c4af38f43afaf1c74a28baab5cb2f8444ab2.js"></script>
<!--[if lt IE 9]>
<script src="https://assets.start.me/assets/application-jquery-1-fd8af822f2790892de822fb462f629d5c08831c287cea978721c166f379c027d.js"></script>
<![endif]-->
<!--[if gte IE 9]><!-->
<script src="./main_files/application-jquery-3-5c8464b287170dc1f9032c3e730a821ba9b30c14f9124ab7f5beb7f54337c834.js"></script>
<!--<![endif]-->
<script src="./main_files/application-libraries-dbf379d8cf90d8565fd62571a872e032eb012a9d66484de3fd4e5df228776cfa.js"></script>
<script src="./main_files/application-content-zh-CN-f7e9d3d67c8b52e0c01a21d8b4e7cf4283e22ec4ea80a347a1d9c3938cef9762.js"></script>
<script src="./main_files/application-1b086bf2e2b7accb63bc9dd3a04df3ac394f8c0971c911f7be88f1ee3fdecbc5.js"></script>

<script id="data" type="application/json">{"timestamp":"2016-10-30T04:03:43.939+00:00","notifications":[],"menu":[{"id":873875,"public_id":"VjXLqa","title":"u9996u9875","description":null,"type":"urllist","index":0,"last_updated":"2016-10-28T07:10:23.583Z","version":1477638623.58359,"is_default":false,"is_public":true,"is_listed":false,"owner_id":707542,"organization_id":null,"is_organization_only":false,"editor_count":0,"persisted":true,"background":"backgrounds/pkgyelq7jbk5dvf6yuhb","column_count":3,"widget_transparency":143,"screenshot_url":"https://screenshots.start.me/shoot/page/VjXLqa?","url":"https://start.me/p/VjXLqa","share_url":"http://start.me/p/VjXLqa","is_owner":true,"is_editor":true,"pinned":false,"pinnable":false,"owner":{"id":707542,"name":"Meshren","firstname":null,"raw_name":null,"role":"user","is_anonymous":false,"is_premium":false,"dummy_email":false,"url":"/u/WEO7GQ/meshren","sign_in_count":65,"notifications":{"tour":"2016-10-21 06:59:53 +0000","chrome-notification-shown":"2016-10-18 12:30:33 +0000"}}}],"user":{"id":707542,"name":"Meshren","email":"meshren@163.com","firstname":null,"raw_name":null,"role":"user","is_anonymous":false,"is_premium":false,"dummy_email":false,"url":"/u/WEO7GQ/meshren","sign_in_count":65,"notifications":{"tour":"2016-10-21 06:59:53 +0000","chrome-notification-shown":"2016-10-18 12:30:33 +0000"}},"settings":{"open_links_in_new_window":true,"start_with_last_tab":false,"show_favicons":true},"pages":[{"id":873875,"public_id":"VjXLqa","title":"u9996u9875","description":null,"type":"urllist","index":0,"last_updated":"2016-10-28T07:10:23.583Z","version":1477638623.58359,"is_default":false,"is_public":true,"is_listed":false,"owner_id":707542,"organization_id":null,"is_organization_only":false,"editor_count":0,"persisted":true,"background":"backgrounds/pkgyelq7jbk5dvf6yuhb","column_count":3,"widget_transparency":143,"screenshot_url":"https://screenshots.start.me/shoot/page/VjXLqa?","url":"https://start.me/p/VjXLqa","share_url":"http://start.me/p/VjXLqa","is_owner":true,"is_editor":true,"pinned":false,"pinnable":false,"owner":{"id":707542,"name":"Meshren","firstname":null,"raw_name":null,"role":"user","is_anonymous":false,"is_premium":false,"dummy_email":false,"url":"/u/WEO7GQ/meshren","sign_in_count":65,"notifications":{"tour":"2016-10-21 06:59:53 +0000","chrome-notification-shown":"2016-10-18 12:30:33 +0000"}}}],"search_providers":[{"id":1,"name":"Google","url":"/search/google?q=%su0026p=1u0026r=873875","icon":"https://google.com","default":true,"show":true,"index":0,"user_default":true},{"id":158178,"name":"Pitkin Country","url":"http://pitkincounty.com/Search/Results?searchPhrase=%s","icon":null,"default":true,"show":true,"index":1,"user_default":false},{"id":3218,"name":"Baidu","url":"http://www.baidu.com/s?wd=%s","icon":null,"default":true,"show":true,"index":2,"user_default":false},{"id":3219,"name":"360.cn","url":"http://www.so.com/s?q=%s","icon":null,"default":true,"show":true,"index":3,"user_default":false},{"id":3220,"name":"Sogou","url":"http://www.sogou.com/sohu?query=%s","icon":null,"default":true,"show":true,"index":4,"user_default":false},{"id":3221,"name":"Google (hk)","url":"https://www.google.com.hk/webhp?q=%s","icon":null,"default":true,"show":true,"index":5,"user_default":false},{"id":3225,"name":"Bing","url":"http://www.bing.com/search?q=%s","icon":null,"default":true,"show":true,"index":6,"user_default":false},{"id":3228,"name":"Yahoo","url":"http://search.yahoo.com/search?p=%s","icon":null,"default":true,"show":true,"index":7,"user_default":false},{"id":3229,"name":"Yahoo","url":"http://search.yahoo.com/search?p=%s","icon":null,"default":true,"show":true,"index":8,"user_default":false}]}</script>
<script>
  Yourls.boot()
    .then(function afterBootScript() {
      ;
      Yourls.postpone(function() {
    if (Math.random() < 0.1) $.post('/statistics', { data: measures });
    Yourls.gtmEvent('Measures', measures);
  });
  ;
    })
    .fail(function(error) {
      // Report error
      Bugsnag.notifyException(typeof(error) == "string" ? new Error(error) : error, 'Boot failure', {}, 'error');
    })
  ;
</script>
<noscript>
&lt;iframe height="0" src="//www.googletagmanager.com/ns.html?id=GTM-PV67T8" style="display:none;visibility:hidden" width="0"&gt;&lt;/iframe&gt;
</noscript>

<script>
  (function(w,d,s,l,i) {
    w[l]=w[l]||[];
    w[l].push({'gtm.start':new Date().getTime(),event:'gtm.js'});
    var f=d.getElementsByTagName(s)[0], j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';
    j.async=true;
    j.src='//www.googletagmanager.com/gtm.js?id='+i+dl;
    f.parentNode.insertBefore(j,f);
  })(window,document,'script','dataLayer','GTM-PV67T8');
</script>




<div role="log" aria-live="assertive" aria-relevant="additions" class="ui-helper-hidden-accessible"></div><span role="status" aria-live="assertive" aria-relevant="additions" class="ui-helper-hidden-accessible"></span><ul class="ui-autocomplete ui-front ui-menu ui-widget ui-widget-content" id="ui-id-2" tabindex="0" style="display: none;"></ul><span role="status" aria-live="assertive" aria-relevant="additions" class="ui-helper-hidden-accessible"></span><ul class="ui-autocomplete ui-front ui-menu ui-widget ui-widget-content" id="ui-id-3" tabindex="0" style="display: none;"></ul><span role="status" aria-live="assertive" aria-relevant="additions" class="ui-helper-hidden-accessible"></span><ul class="ui-autocomplete ui-front ui-menu ui-widget ui-widget-content" id="ui-id-4" tabindex="0" style="display: none;"></ul><span role="status" aria-live="assertive" aria-relevant="additions" class="ui-helper-hidden-accessible"></span><ul class="ui-autocomplete ui-front ui-menu ui-widget ui-widget-content" id="ui-id-5" tabindex="0" style="display: none;"></ul><span role="status" aria-live="assertive" aria-relevant="additions" class="ui-helper-hidden-accessible"></span><ul class="ui-autocomplete ui-front ui-menu ui-widget ui-widget-content" id="ui-id-6" tabindex="0" style="display: none;"></ul><span role="status" aria-live="assertive" aria-relevant="additions" class="ui-helper-hidden-accessible"></span><ul class="ui-autocomplete ui-front ui-menu ui-widget ui-widget-content" id="ui-id-7" tabindex="0" style="display: none;"></ul><span role="status" aria-live="assertive" aria-relevant="additions" class="ui-helper-hidden-accessible"></span><ul class="ui-autocomplete ui-front ui-menu ui-widget ui-widget-content" id="ui-id-8" tabindex="0" style="display: none;"></ul><span role="status" aria-live="assertive" aria-relevant="additions" class="ui-helper-hidden-accessible"></span><div role="log" aria-live="assertive" aria-relevant="additions" class="ui-helper-hidden-accessible"><div> <h1>
				真吃货!舒淇为林熙蕾庆生眼中却只有蛋糕
			</h1> <p><time datetime="2016-10-30T02:34:28.000Z">大约2小时之前</time> 　　新浪娱乐讯 据港媒报道，今年九月舒淇[微博]和秘密拍拖四年的冯德伦[微博]宣布结婚，荣升人妻不到三个月，舒淇已有“第三者”！昨日（29日）是女星林熙蕾[微博]的41岁生日，视林熙蕾为超级好姐妹的舒淇，当然不放过为对方庆生的机会。今日凌晨接近一时，舒淇在社交网站上传和.... …</p></div></div></body></html>