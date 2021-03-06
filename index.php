<!--
__________________________________________________________________________________________
|  _____                       _     _                    _____                  _         |
| / ____|                     (_)   | |                  / ____|                | |        |
|| |  __  ___ _ __   ___   ___ _  __| | ___    ___ _____| (___  _ __   ___  _ __| |_ ___   |
|| | |_ |/ _ \ '_ \ / _ \ / __| |/ _` |/ _ \  / _ \______\___ \| '_ \ / _ \| '__| __/ __|  |
|| |__| |  __/ | | | (_) | (__| | (_| |  __/ |  __/      ____) | |_) | (_) | |  | |_\__ \  |
| \_____|\___|_| |_|\___/ \___|_|\__,_|\___|  \___|     |_____/| .__/ \___/|_|   \__|___/  |
|                                                              | |                         |
|                                                              |_|    CoD4SS -  V.0.1      |
|__________________________________________________________________________________________|
 -->
<?php
    $options = array(
      'pagetitle' => '', // page heading 
      'quantity'  => 12, // how many screenshots to display for each page
      'around'    => 2,  // how many page buttons to show around the current page button
    );
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="http://66.42.49.82/gncss/gncstyle/style.css" />
    <script src="http://66.42.49.82/gncss/gncjs/modernizr.custom.72111.js"></script>
    <link rel="icon" href="http://66.42.49.82/gncss/img/favicon.png" type="img/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-604wwakM23pEysLJAhja8Lm42IIwYrJ0dEAqzFsj9pJ/P5buiujjywArgPCi8eoz" crossorigin="anonymous">
    <title><?php echo $options['pagetitle']; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style type="text/css">
      #baguetteBox-overlay{display:none;opacity:0;position:fixed;overflow:hidden;top:0;left:0;width:100%;height:100%;z-index:1000000;background-color:#222;background-color:rgba(0,0,0,.8);-webkit-transition:opacity .5s ease;transition:opacity .5s ease}#baguetteBox-overlay.visible{opacity:1}#baguetteBox-overlay .full-image{display:inline-block;position:relative;width:100%;height:100%;text-align:center}#baguetteBox-overlay .full-image figure{display:inline;margin:0;height:100%}#baguetteBox-overlay .full-image img{display:inline-block;width:auto;height:auto;max-height:100%;max-width:100%;vertical-align:middle;-webkit-box-shadow:0 0 8px rgba(0,0,0,.6);-moz-box-shadow:0 0 8px rgba(0,0,0,.6);box-shadow:0 0 8px rgba(0,0,0,.6)}#baguetteBox-overlay .full-image figcaption{display:block;position:absolute;bottom:0;width:100%;text-align:center;line-height:1.8;white-space:normal;color:#ccc;background-color:#000;background-color:rgba(0,0,0,.6);font-family:sans-serif}#baguetteBox-overlay .full-image:before{content:"";display:inline-block;height:50%;width:1px;margin-right:-1px}#baguetteBox-slider{position:absolute;left:0;top:0;height:100%;width:100%;white-space:nowrap;-webkit-transition:left .4s ease,-webkit-transform .4s ease;transition:left .4s ease,-webkit-transform .4s ease;transition:left .4s ease,transform .4s ease;transition:left .4s ease,transform .4s ease,-webkit-transform .4s ease,-moz-transform .4s ease}#baguetteBox-slider.bounce-from-right{-webkit-animation:bounceFromRight .4s ease-out;animation:bounceFromRight .4s ease-out}#baguetteBox-slider.bounce-from-left{-webkit-animation:bounceFromLeft .4s ease-out;animation:bounceFromLeft .4s ease-out}@-webkit-keyframes bounceFromRight{0%,100%{margin-left:0}50%{margin-left:-30px}}@keyframes bounceFromRight{0%,100%{margin-left:0}50%{margin-left:-30px}}@-webkit-keyframes bounceFromLeft{0%,100%{margin-left:0}50%{margin-left:30px}}@keyframes bounceFromLeft{0%,100%{margin-left:0}50%{margin-left:30px}}.baguetteBox-button#next-button,.baguetteBox-button#previous-button{top:50%;top:calc(50% - 30px);width:44px;height:60px}.baguetteBox-button{position:absolute;cursor:pointer;outline:0;padding:0;margin:0;border:0;-moz-border-radius:15%;border-radius:15%;background-color:#323232;background-color:rgba(50,50,50,.5);color:#ddd;font:1.6em sans-serif;-webkit-transition:background-color .4s ease;transition:background-color .4s ease}.baguetteBox-button:focus,.baguetteBox-button:hover{background-color:rgba(50,50,50,.9)}.baguetteBox-button#next-button{right:2%}.baguetteBox-button#previous-button{left:2%}.baguetteBox-button#close-button{top:20px;right:2%;right:calc(2% + 6px);width:30px;height:30px}.baguetteBox-button svg{position:absolute;left:0;top:0}.baguetteBox-spinner{width:40px;height:40px;display:inline-block;position:absolute;top:50%;left:50%;margin-top:-20px;margin-left:-20px}.baguetteBox-double-bounce1,.baguetteBox-double-bounce2{width:100%;height:100%;-moz-border-radius:50%;border-radius:50%;background-color:#fff;opacity:.6;position:absolute;top:0;left:0;-webkit-animation:bounce 2s infinite ease-in-out;animation:bounce 2s infinite ease-in-out}.baguetteBox-double-bounce2{-webkit-animation-delay:-1s;animation-delay:-1s}@-webkit-keyframes bounce{0%,100%{-webkit-transform:scale(0);transform:scale(0)}50%{-webkit-transform:scale(1);transform:scale(1)}}@keyframes bounce{0%,100%{-webkit-transform:scale(0);-moz-transform:scale(0);transform:scale(0)}50%{-webkit-transform:scale(1);-moz-transform:scale(1);transform:scale(1)}}.thumbnail .caption{padding:3px;text-align:center;}body{margin-bottom:10px;margin-top:10px;background-color:#34495E;}
    </style>
  </head>
  <body>
<!--
<form class="example" action="/.php">
  <input type="text" placeholder="Search Playername..." name="search">
  <button type="submit"><i class="fa fa-search"></i></button>
</form>-->
<img src="http://66.42.49.82/images/2021-03-25_08-34_58am_textlogo.png" width="360">
    <div class="container">
    <div>
      <h2 class="text-center"><?php echo $options['pagetitle']; ?></h2>
    </div>
    <?php
    $page = isset($_GET['page']) ? $_GET['page'] : 1;
    $offset = ($page - 1) * $options['quantity']; // $page base index is 1
    $filelist = glob('*.jpg');
    usort($filelist, create_function('$a,$b', 'return filemtime($b) - filemtime($a);'));
     //get subset of file array
    $selectedFiles = array_slice($filelist, $offset, $options['quantity']);
    echo '<div class="mchnnubdotcom">';
    echo '<div class="row">';
    foreach ($selectedFiles as $file) {
      if (is_array(getimagesize($file))) {
        $nameNumber = str_replace('.jpg', '', $file);
        $name = substr($nameNumber, 0, -4);
        $filedata = file_get_contents($file);
        $metadata = strpos($filedata, "CoD4X");
        $metastring = substr($filedata, $metadata);
        $exifdata = explode("\0", $metastring);
        $map = $exifdata[2];
        $playername = strip_tags($exifdata[3]);
        $guid = $exifdata[4];
        $time = $exifdata[6];
        $ssdate = new DateTime($time);
        $shortdate = $ssdate->format('Y-m-d');
        $shorttime = $ssdate->format('g:i:s A');
        $caption = $playername .' &nbsp; &nbsp; '. $shortdate . ' - ' . $shorttime .' &nbsp; &nbsp; '. $map .' &nbsp; &nbsp; '. $guid ;
      ?>
        <a href="<?php echo rawurlencode($file); ?>" data-caption="<?php echo $caption; ?>">
          <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
              <img style="object-fit : cover; width:100%; height:190px;" src="<?php echo rawurlencode($file); ?>" alt="<?php echo $name; ?>">
              <div class="caption">
                <span><?php echo '<b>' .substr($name, 0, 16) . '</b> &nbsp; ' . $shortdate; ?> </span>
              </div>
            </div>
          </div>
        </a>  
    <?php
      }
    }
  echo '  </div>';
  echo '</div>';
  ?>
      <div class="pagination">
        <a class="btn btn-default" <?= $page <= 1 ? 'disabled' : '' ?> href="?page=<?= $page - 1 ?>">&lt;</a>
        <?php
          $len = count($filelist) / $options['quantity'];
          for ($i = 1; $i < $len + 1; $i++) {
            if (($i == 1 || $i > $len) || ($i > $page - $options['around'] && $i < $page + $options['around'])) {
              echo '<a class="btn btn-default '. ($page == $i ? 'active' : '') .'" href="?page='.$i.'">'. $i .'</a>';
            } elseif ($i > $page - $options['around'] - 1 && $i < $page + $options['around'] + 1) {
              echo '<a disabled class="btn btn-default">&hellip;</a>';
            }
          }
        ?>
        <a class="btn btn-default" <?= $page >= $len ? 'disabled' : '' ?> href="?page=<?= $page + 1 ?>">&gt;</a>
      </div>
    </div>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js" integrity="sha384-EKxMxgJ+EnnZ5yB3ygGPe1lXaPvlAzKFXU+wW7kO9Bn9ZCgFRrc3wWtCnsDHbemf" crossorigin="anonymous"></script>
    <script type="text/javascript">
      !function(e,t){"use strict";"function"==typeof define&&define.amd?define(t):"object"==typeof exports?module.exports=t():e.baguetteBox=t()}(this,function(){"use strict";var r,l,u,c,d,f='<svg width="44" height="60"><polyline points="30 10 10 30 30 50" stroke="rgba(255,255,255,0.5)" stroke-width="4"stroke-linecap="butt" fill="none" stroke-linejoin="round"/></svg>',g='<svg width="44" height="60"><polyline points="14 10 34 30 14 50" stroke="rgba(255,255,255,0.5)" stroke-width="4"stroke-linecap="butt" fill="none" stroke-linejoin="round"/></svg>',p='<svg width="30" height="30"><g stroke="rgb(160,160,160)" stroke-width="4"><line x1="5" y1="5" x2="25" y2="25"/><line x1="5" y1="25" x2="25" y2="5"/></g></svg>',b={},v={captions:!0,buttons:"auto",fullScreen:!1,noScrollbars:!1,bodyClass:"baguetteBox-open",titleTag:!1,async:!1,preload:2,animation:"slideIn",afterShow:null,afterHide:null,onChange:null,overlayBackgroundColor:"rgba(0,0,0,.8)"},m={},h=[],o=0,n=!1,i={},a=!1,y=/.+\.(gif|jpe?g|png|webp)/i,w={},k=[],s=null,x=function(e){-1!==e.target.id.indexOf("baguette-img")&&j()},E=function(e){e.stopPropagation?e.stopPropagation():e.cancelBubble=!0,D()},C=function(e){e.stopPropagation?e.stopPropagation():e.cancelBubble=!0,X()},B=function(e){e.stopPropagation?e.stopPropagation():e.cancelBubble=!0,j()},T=function(e){i.count++,1<i.count&&(i.multitouch=!0),i.startX=e.changedTouches[0].pageX,i.startY=e.changedTouches[0].pageY},N=function(e){if(!a&&!i.multitouch){e.preventDefault?e.preventDefault():e.returnValue=!1;var t=e.touches[0]||e.changedTouches[0];40<t.pageX-i.startX?(a=!0,D()):t.pageX-i.startX<-40?(a=!0,X()):100<i.startY-t.pageY&&j()}},L=function(){i.count--,i.count<=0&&(i.multitouch=!1),a=!1},A=function(){L()},P=function(e){"block"===r.style.display&&r.contains&&!r.contains(e.target)&&(e.stopPropagation(),Y())};function S(e){if(w.hasOwnProperty(e)){var t=w[e].galleries;[].forEach.call(t,function(e){[].forEach.call(e,function(e){W(e.imageElement,"click",e.eventHandler)}),h===e&&(h=[])}),delete w[e]}}function F(e){switch(e.keyCode){case 37:D();break;case 39:X();break;case 27:j();break;case 36:!function t(e){e&&e.preventDefault();return M(0)}(e);break;case 35:!function n(e){e&&e.preventDefault();return M(h.length-1)}(e)}}function H(e,t){if(h!==e){for(h=e,function s(e){e=e||{};for(var t in v)b[t]=v[t],"undefined"!=typeof e[t]&&(b[t]=e[t]);l.style.transition=l.style.webkitTransition="fadeIn"===b.animation?"opacity .4s ease":"slideIn"===b.animation?"":"none","auto"===b.buttons&&("ontouchstart"in window||1===h.length)&&(b.buttons=!1);u.style.display=c.style.display=b.buttons?"":"none";try{r.style.backgroundColor=b.overlayBackgroundColor}catch(n){}}(t);l.firstChild;)l.removeChild(l.firstChild);for(var n,o=[],i=[],a=k.length=0;a<e.length;a++)(n=J("div")).className="full-image",n.id="baguette-img-"+a,k.push(n),o.push("baguetteBox-figure-"+a),i.push("baguetteBox-figcaption-"+a),l.appendChild(k[a]);r.setAttribute("aria-labelledby",o.join(" ")),r.setAttribute("aria-describedby",i.join(" "))}}function I(e){b.noScrollbars&&(document.documentElement.style.overflowY="hidden",document.body.style.overflowY="scroll"),"block"!==r.style.display&&(U(document,"keydown",F),i={count:0,startX:null,startY:null},q(o=e,function(){z(o),V(o)}),R(),r.style.display="block",b.fullScreen&&function t(){r.requestFullscreen?r.requestFullscreen():r.webkitRequestFullscreen?r.webkitRequestFullscreen():r.mozRequestFullScreen&&r.mozRequestFullScreen()}(),setTimeout(function(){r.className="visible",b.bodyClass&&document.body.classList&&document.body.classList.add(b.bodyClass),b.afterShow&&b.afterShow()},50),b.onChange&&b.onChange(o,k.length),s=document.activeElement,Y(),n=!0)}function Y(){b.buttons?u.focus():d.focus()}function j(){b.noScrollbars&&(document.documentElement.style.overflowY="auto",document.body.style.overflowY="auto"),"none"!==r.style.display&&(W(document,"keydown",F),r.className="",setTimeout(function(){r.style.display="none",document.fullscreen&&function e(){document.exitFullscreen?document.exitFullscreen():document.mozCancelFullScreen?document.mozCancelFullScreen():document.webkitExitFullscreen&&document.webkitExitFullscreen()}(),b.bodyClass&&document.body.classList&&document.body.classList.remove(b.bodyClass),b.afterHide&&b.afterHide(),s&&s.focus(),n=!1},500))}function q(t,n){var e=k[t],o=h[t];if(void 0!==e&&void 0!==o)if(e.getElementsByTagName("img")[0])n&&n();else{var i=o.imageElement,a=i.getElementsByTagName("img")[0],s="function"==typeof b.captions?b.captions.call(h,i):i.getAttribute("data-caption")||i.title,r=function d(e){var t=e.href;if(e.dataset){var n=[];for(var o in e.dataset)"at-"!==o.substring(0,3)||isNaN(o.substring(3))||(n[o.replace("at-","")]=e.dataset[o]);for(var i=Object.keys(n).sort(function(e,t){return parseInt(e,10)<parseInt(t,10)?-1:1}),a=window.innerWidth*window.devicePixelRatio,s=0;s<i.length-1&&i[s]<a;)s++;t=n[i[s]]||t}return t}(i),l=J("figure");if(l.id="baguetteBox-figure-"+t,l.innerHTML='<div class="baguetteBox-spinner"><div class="baguetteBox-double-bounce1"></div><div class="baguetteBox-double-bounce2"></div></div>',b.captions&&s){var u=J("figcaption");u.id="baguetteBox-figcaption-"+t,u.innerHTML=s,l.appendChild(u)}e.appendChild(l);var c=J("img");c.onload=function(){var e=document.querySelector("#baguette-img-"+t+" .baguetteBox-spinner");l.removeChild(e),!b.async&&n&&n()},c.setAttribute("src",r),c.alt=a&&a.alt||"",b.titleTag&&s&&(c.title=s),l.appendChild(c),b.async&&n&&n()}}function X(){return M(o+1)}function D(){return M(o-1)}function M(e,t){return!n&&0<=e&&e<t.length?(H(t,b),I(e),!0):e<0?(b.animation&&O("left"),!1):e>=k.length?(b.animation&&O("right"),!1):(q(o=e,function(){z(o),V(o)}),R(),b.onChange&&b.onChange(o,k.length),!0)}function O(e){l.className="bounce-from-"+e,setTimeout(function(){l.className=""},400)}function R(){var e=100*-o+"%";"fadeIn"===b.animation?(l.style.opacity=0,setTimeout(function(){m.transforms?l.style.transform=l.style.webkitTransform="translate3d("+e+",0,0)":l.style.left=e,l.style.opacity=1},400)):m.transforms?l.style.transform=l.style.webkitTransform="translate3d("+e+",0,0)":l.style.left=e}function z(e){e-o>=b.preload||q(e+1,function(){z(e+1)})}function V(e){o-e>=b.preload||q(e-1,function(){V(e-1)})}function U(e,t,n,o){e.addEventListener?e.addEventListener(t,n,o):e.attachEvent("on"+t,function(e){(e=e||window.event).target=e.target||e.srcElement,n(e)})}function W(e,t,n,o){e.removeEventListener?e.removeEventListener(t,n,o):e.detachEvent("on"+t,n)}function G(e){return document.getElementById(e)}function J(e){return document.createElement(e)}return[].forEach||(Array.prototype.forEach=function(e,t){for(var n=0;n<this.length;n++)e.call(t,this[n],n,this)}),[].filter||(Array.prototype.filter=function(e,t,n,o,i){for(n=this,o=[],i=0;i<n.length;i++)e.call(t,n[i],i,n)&&o.push(n[i]);return o}),{run:function K(e,t){return m.transforms=function n(){var e=J("div");return"undefined"!=typeof e.style.perspective||"undefined"!=typeof e.style.webkitPerspective}(),m.svg=function o(){var e=J("div");return e.innerHTML="<svg/>","http://www.w3.org/2000/svg"===(e.firstChild&&e.firstChild.namespaceURI)}(),m.passiveEvents=function i(){var e=!1;try{var t=Object.defineProperty({},"passive",{get:function(){e=!0}});window.addEventListener("test",null,t)}catch(n){}return e}(),function a(){if(r=G("baguetteBox-overlay"))return l=G("baguetteBox-slider"),u=G("previous-button"),c=G("next-button"),void(d=G("close-button"));(r=J("div")).setAttribute("role","dialog"),r.id="baguetteBox-overlay",document.getElementsByTagName("body")[0].appendChild(r),(l=J("div")).id="baguetteBox-slider",r.appendChild(l),(u=J("button")).setAttribute("type","button"),u.id="previous-button",u.setAttribute("aria-label","Previous"),u.innerHTML=m.svg?f:"&lt;",r.appendChild(u),(c=J("button")).setAttribute("type","button"),c.id="next-button",c.setAttribute("aria-label","Next"),c.innerHTML=m.svg?g:"&gt;",r.appendChild(c),(d=J("button")).setAttribute("type","button"),d.id="close-button",d.setAttribute("aria-label","Close"),d.innerHTML=m.svg?p:"&times;",r.appendChild(d),u.className=c.className=d.className="baguetteBox-button",function n(){var e=m.passiveEvents?{passive:!1}:null,t=m.passiveEvents?{passive:!0}:null;U(r,"click",x),U(u,"click",E),U(c,"click",C),U(d,"click",B),U(l,"contextmenu",A),U(r,"touchstart",T,t),U(r,"touchmove",N,e),U(r,"touchend",L),U(document,"focus",P,!0)}()}(),S(e),function s(e,a){var t=document.querySelectorAll(e),n={galleries:[],nodeList:t};return w[e]=n,[].forEach.call(t,function(e){a&&a.filter&&(y=a.filter);var t=[];if(t="A"===e.tagName?[e]:e.getElementsByTagName("a"),0!==(t=[].filter.call(t,function(e){if(-1===e.className.indexOf(a&&a.ignoreClass))return y.test(e.href)})).length){var i=[];[].forEach.call(t,function(e,t){var n=function(e){e.preventDefault?e.preventDefault():e.returnValue=!1,H(i,a),I(t)},o={eventHandler:n,imageElement:e};U(e,"click",n),i.push(o)}),n.galleries.push(i)}}),n.galleries}(e,t)},show:M,showNext:X,showPrevious:D,hide:j,destroy:function e(){!function n(){var e=m.passiveEvents?{passive:!1}:null,t=m.passiveEvents?{passive:!0}:null;W(r,"click",x),W(u,"click",E),W(c,"click",C),W(d,"click",B),W(l,"contextmenu",A),W(r,"touchstart",T,t),W(r,"touchmove",N,e),W(r,"touchend",L),W(document,"focus",P,!0)}(),function t(){for(var e in w)w.hasOwnProperty(e)&&S(e)}(),W(document,"keydown",F),document.getElementsByTagName("body")[0].removeChild(document.getElementById("baguetteBox-overlay")),w={},h=[],o=0}}});window.onload = function() { baguetteBox.run('.mchnnubdotcom'); };
    </script>
                  <br>
  <br>
  </body>
<footer>
  <!--GNcfooter---->
<?php

function ip_info($ip = NULL, $purpose = "location", $deep_detect = TRUE) {
    $output = NULL;
    if (filter_var($ip, FILTER_VALIDATE_IP) === FALSE) {
        $ip = $_SERVER["REMOTE_ADDR"];
        if ($deep_detect) {
            if (filter_var(@$_SERVER['HTTP_X_FORWARDED_FOR'], FILTER_VALIDATE_IP))
                $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
            if (filter_var(@$_SERVER['HTTP_CLIENT_IP'], FILTER_VALIDATE_IP))
                $ip = $_SERVER['HTTP_CLIENT_IP'];
        }
    }
    $purpose    = str_replace(array("name", "\n", "\t", " ", "-", "_"), NULL, strtolower(trim($purpose)));
    $support    = array("country", "countrycode", "state", "region", "city", "location", "address");
    $continents = array(
        "AF" => "Africa",
        "AN" => "Antarctica",
        "AS" => "Asia",
        "EU" => "Europe",
        "OC" => "Australia (Oceania)",
        "NA" => "North America",
        "SA" => "South America"
    );
    if (filter_var($ip, FILTER_VALIDATE_IP) && in_array($purpose, $support)) {
        $ipdat = @json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=" . $ip));
        if (@strlen(trim($ipdat->geoplugin_countryCode)) == 2) {
            switch ($purpose) {
                case "location":
                    $output = array(
                        "city"           => @$ipdat->geoplugin_city,
                        "state"          => @$ipdat->geoplugin_regionName,
                        "country"        => @$ipdat->geoplugin_countryName,
                        "country_code"   => @$ipdat->geoplugin_countryCode,
                        "continent"      => @$continents[strtoupper($ipdat->geoplugin_continentCode)],
                        "continent_code" => @$ipdat->geoplugin_continentCode
                    );
                    break;
                case "address":
                    $address = array($ipdat->geoplugin_countryName);
                    if (@strlen($ipdat->geoplugin_regionName) >= 1)
                        $address[] = $ipdat->geoplugin_regionName;
                    if (@strlen($ipdat->geoplugin_city) >= 1)
                        $address[] = $ipdat->geoplugin_city;
                    $output = implode(", ", array_reverse($address));
                    break;
                case "city":
                    $output = @$ipdat->geoplugin_city;
                    break;
                case "state":
                    $output = @$ipdat->geoplugin_regionName;
                    break;
                case "region":
                    $output = @$ipdat->geoplugin_regionName;
                    break;
                case "country":
                    $output = @$ipdat->geoplugin_countryName;
                    break;
                case "countrycode":
                    $output = @$ipdat->geoplugin_countryCode;
                    break;
            }
        }
    }
    return $output;
}

?>
  <footer>
    <div class="footer">
          <section class="rw-wrapper">
          <h8 class="rw-sentence">

            <span>Your ip <?php echo $_SERVER['REMOTE_ADDR']; ?> &nbsp;&nbsp; From <img src="http://66.42.49.82/gncss/info/<?php echo ip_info("Visitor", "Country Code"); ?>.png" height="16">&nbsp;<?php echo ip_info("Visitor", "Country"); ?>,&nbsp;<?php echo ip_info("Visitor", "City"); ?>&nbsp;&nbsp;&nbsp;&nbsp;<img src="http://66.42.49.82/gncss/img/favicon.png" width="17" height="17"> ?? <?php echo date("Y"); ?> v.0.1 | &nbsp; Genocide <font color="red">e</font>-Sports &nbsp; - </span>
            <div class="rw-words rw-words-1">
              <?php
                        // wish design by CHUKz!
                        date_default_timezone_set('asia/colombo');
                        $Hour = date('G');

                        if ( $Hour >= 00 && $Hour <= 11 ) {
                            echo '<span>&nbsp;Good Morning..!</span>';
                        } else if ( $Hour >= 12 && $Hour <= 16 ) {
                            echo '<span>&nbsp;Good Afternoon..!</span>';
                        } else if ( $Hour >= 17 || $Hour <= 23 ) {
                            echo '<span>&nbsp;Good Evening..!</span>';
                        }
                    ?>
              <span>&nbsp;<i class="fa fa-internet-explorer"></i> Official Website : htt://66.42.49.82/</span>
              <span>&nbsp;<img src="http://66.42.49.82/gncss/img/gncts17.png">&nbsp; Teamspeak  : 66.42.49.82</span>
              <span>&nbsp;<img src="http://66.42.49.82/gncss/img/gnccod.png"> e-Sports SnD PROMOD: snd.esportlk.ml:28960</span>
              <span>&nbsp;<img src="http://66.42.49.82/gncss/img/gnccod.png"> e-Sports TDM PROMOD: 35.198.224.120:28960</span>
              <span>&nbsp; Have Fun </span>
            </div>
          </p>
          </section>
        </p>
        </div>
    </footer>
    <!--done-->
  <script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/5ea59d4469e9320caac774d4/default';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
    })();
  </script>
</footer>
</html>
<!--
____________________________________________________________________________________________
|  _____                       _     _                    _____                  _         |
| / ____|                     (_)   | |                  / ____|                | |        |
|| |  __  ___ _ __   ___   ___ _  __| | ___    ___ _____| (___  _ __   ___  _ __| |_ ___   |
|| | |_ |/ _ \ '_ \ / _ \ / __| |/ _` |/ _ \  / _ \______\___ \| '_ \ / _ \| '__| __/ __|  |
|| |__| |  __/ | | | (_) | (__| | (_| |  __/ |  __/      ____) | |_) | (_) | |  | |_\__ \  |
| \_____|\___|_| |_|\___/ \___|_|\__,_|\___|  \___|     |_____/| .__/ \___/|_|   \__|___/  |
|                                                              | |                         |
|                                                              |_|                         |
|__________________________________________________________________________________________|
 -->