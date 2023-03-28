<!doctype html>
<style>
/* 
        Theme Name: Tatwerat
        Theme URI: http://www.tatwerat.com
        Description: Designed by <a href="http://www.tatwerat.com">Tatwerat</a> 
        Version: 1.0
        Author: Tatwerat.com

*/
/*Start Reset Form Tatwerat.com*/
@import "http://fonts.googleapis.com/earlyaccess/droidarabickufi.css";
@import "http://fonts.googleapis.com/earlyaccess/droidarabicnaskh.css";
html {
    margin: 0px;
    padding: 0px;
    font-family: tahoma;
    font-size: 11px;
    color: #666;
}
body {
    background: #f3f3f3 url(images/Bg.jpg) no-repeat top center;
    margin: 0px;
    padding: 0px;
    font-family: 'Tatwerat_Light';
    font-size: 11px;
    color: #888;
    direction:rtl;
}
div {
    overflow:hidden;
}
ul, li, ol, h1, h2, h3, h4 {
    margin: 0px;
    padding: 0px;
    list-style: none;
    list-style-position: inside;
    border: none;
    border: 0;
}
h3 {
    font-size:12px;
    direction:rtl;
}
img {
    border: none;
    outline:  none;
}
:focus {
    outline: none;
}
input, textarea, sub, select {
    text-decoration: none;
    outline: 0px none;
    margin: 0px;
    padding: 0px;
}
input, textarea, sub, select {
    font: Normal 11px Tahoma;
    text-decoration: none;
    outline: 0px none;
    margin: 0px;
    padding: 0px;
}
p {
    margin:0;
    padding:0;
    direction:rtl;
    overflow:hidden;
}
h6 {
    display:none;
}
.clear {
    clear:both;
}
fieldset {
    margin-bottom: 6px;
    border: 1px #FFFFFF solid;
}
hr {
    background: #EFEFEF;
    border-color: #FFFFFF;
}
a {
    color: #555;
    text-decoration: none;
}
/* Fonts */
@font-face {
    font-family: "Tatwerat_Gess";
    src: url("fonts/GE_SS_Unique_Bold.otf");
    src: url("fonts/GE_SS_Unique_Bold.eot?") format("eot"), url("fonts/GE_SS_Unique_Bold.otf") format("opentype"), url("fonts/GE_SS_Unique_Bold.otf") format("truetype");
}
@font-face {
    font-family: "Tatwerat_Gess_light";
    src: url("fonts/GE_SS_Unique_Light.otf");
    src: url("fonts/GE_SS_Unique_Light.eot?") format("eot"), url("fonts/GE_SS_Unique_Light.otf") format("opentype"), url("fonts/GE_SS_Unique_Light.otf") format("truetype");
}
@font-face {
    font-family: "Tatwerat_Helv";
    src: url("fonts/HelveticaNeueW23-Bd.ttf");
    src: url("fonts/HelveticaNeueW23-Bd.ttf?") format("eot"), url("fonts/HelveticaNeueW23-Bd.ttf") format("opentype"), url("fonts/HelveticaNeueW23-Bd.ttf") format("truetype");
}
@font-face {
    font-family: 'Tatwerat_Light';
    src: url('fonts/DroidKufi-Regular.eot');
    src: url('fonts/DroidKufi-Regular.eot?#iefix') format('embedded-opentype'), url('fonts/DroidKufi-Regular.woff') format('woff'), url('fonts/DroidKufi-Regular.ttf') format('truetype');
}
@font-face {
    font-family: 'GESSTOW_Light';
    src: url('fonts/GE_SS_Two_Light.eot');
    src: url('fonts/GE_SS_Two_Light.eot?#iefix') format('embedded-opentype'), url('fonts/GE_SS_Two_Light.woff') format('woff'), url('fonts/GE_SS_Two_Light.otf') format('truetype');
    font-weight: normal;
    font-style: normal;
}
@font-face {
    font-family: 'GESSTOW_Medium';
    src: url('fonts/GE_SS_Two_Medium.eot');
    src: url('fonts/GE_SS_Two_Medium.eot?#iefix') format('embedded-opentype'), url('fonts/GE_SS_Two_Medium.woff') format('woff'), url('.fonts/GE_SS_Two_Medium.otf') format('truetype');
    font-weight: normal;
    font-style: normal;
}
@font-face {
    font-family: 'GESSTOW_Bold';
    src: url('fonts/GE_SS_Two_Bold.eot');
    src: url('fonts/GE_SS_Two_Bold.eot?#iefix') format('embedded-opentype'), url('fonts/GE_SS_Two_Bold.woff') format('woff'), url('fonts/GE_SS_Two_Bold.otf') format('truetype');
    font-weight: normal;
    font-style: normal;
}
@font-face {
    font-family: "Tatwerat_H";
    src: url("fonts/Hacen_Vanilla.ttf");
    src: url("fonts/Hacen_Vanilla.eot?") format("eot"), url("fonts/Hacen_Vanilla.otf") format("opentype"), url("fonts/Hacen_Vanilla.ttf") format("truetype");
}
@font-face {
    font-family: "Tatwerat_K";
    src: url("fonts/KHoma.ttf");
    src: url("fonts/KHoma.eot?") format("eot"), url("fonts/KHoma.otf") format("opentype"), url("fonts/KHoma.ttf") format("truetype");
}
@font-face {
    font-family: "Tatwerat_D";
    src: url("fonts/SC_DUBAI.ttf");
    src: url("fonts/SC_DUBAI.eot?") format("eot"), url("fonts/SC_DUBAI.otf") format("opentype"), url("fonts/SC_DUBAI.ttf") format("truetype");
}
@font-face {
    font-family: "Tatwerat_English";
    src: url("fonts/HoboStd.otf");
    src: url("fonts/HoboStd.eot?") format("eot"), url("fonts/HoboStd.otf") format("opentype"), url("fonts/HoboStd.ttf") format("truetype");
}
/* End Tatwerat.com Reset Coder */
/*Start Code Form Tatwerat.com*/
#Wrapper {
    background: url(images/Wrapper.jpg) repeat-x top center;
    width: 100%;
    height: 100%;
    min-width: 1000px;
}
#Wrapper #Wrapper_Content {
    background: url(images/Wrapper_Content.jpg) repeat-x bottom center;
    width: 100%;
    height: 100%;
    min-width: 1000px;
}
#Wrapper #Wrapper_Content #Container {
    width: 1000px;
    margin: 0px auto;
}
#Wrapper #Wrapper_Content #Container #Header {
    width: 1000px;
    height: 190px;
    position: relative;
    overflow: visible;
}
#Wrapper #Wrapper_Content #Container #Header .Logo {
    background: url(images/Logo.png) no-repeat top center;
    width: 300px;
    height: 105px;
    float: right;
    margin: 23px 0px 0px 0px;
}
#Wrapper #Wrapper_Content #Container #Header .Social_Icon {
    *background: url(images/Header_Social.jpg) no-repeat top center;
    width: 218px;
    height: 42px;
    float: left;
    margin: 18px 0px 0px 0px;
}
#Wrapper #Wrapper_Content #Container #Header .Social_Icon ul {
    width: 240px;
    height: 42px;
    display: block;
    margin: 0px 0px 0px 0px;
}
#Wrapper #Wrapper_Content #Container #Header .Social_Icon ul li {
    float: right;
    margin: 0px 0px 0px 18px;
}
#Wrapper #Wrapper_Content #Container #Header .Social_Icon ul li a {
    background: #fff;
    border: 2px solid #aaa;
    width: 37px;
    height: 37px;
    display: block;
    border-radius: 10pc;
    -moz-border-radius: 10pc;
    -webkit-border-radius: 10pc;
    transition: all 0.3s ease-in-out;
    -moz-transition: all 0.3s ease-in-out;
    -ms-transition: all 0.3s ease-in-out;
    -o-transition: all 0.3s ease-in-out;
    -webkit-transition: all 0.3s ease-in-out;
}
#Wrapper #Wrapper_Content #Container #Header .Social_Icon ul li.facebook a {
    background: #fff url(images/Social_icons.png) no-repeat -209px 5px !important;
    border: 2px solid #5081cb;
}
#Wrapper #Wrapper_Content #Container #Header .Social_Icon ul li.facebook a:hover {
    background: #5081cb url(images/Social_icons.png) no-repeat -209px -83px !important;
    border: 2px solid #5081cb;
}
#Wrapper #Wrapper_Content #Container #Header .Social_Icon ul li.twitter a {
    background: #fff url(images/Social_icons.png) no-repeat -136px 6px !important;
    border: 2px solid #5bc1de;
}
#Wrapper #Wrapper_Content #Container #Header .Social_Icon ul li.twitter a:hover {
    background: #5bc1de url(images/Social_icons.png) no-repeat -136px -84px !important;
    border: 2px solid #5bc1de;
}
#Wrapper #Wrapper_Content #Container #Header .Social_Icon ul li.youtube a {
    background: #fff url(images/Social_icons.png) no-repeat -64px 5px !important;
    border: 2px solid #ef4d27;
}
#Wrapper #Wrapper_Content #Container #Header .Social_Icon ul li.youtube a:hover {
    background: #ef4d27 url(images/Social_icons.png) no-repeat -64px -83px !important;
    border: 2px solid #ef4d27;
}
#Wrapper #Wrapper_Content #Container #Header .Social_Icon ul li.rss a {
    background: #fff url(images/Social_icons.png) no-repeat 9px 5px !important;
    border: 2px solid #f59334;
}
#Wrapper #Wrapper_Content #Container #Header .Social_Icon ul li.rss a:hover {
    background: #f59334 url(images/Social_icons.png) no-repeat 9px -85px !important;
    border: 2px solid #f59334;
}
#Wrapper #Wrapper_Content #Container #Header .Live_Support {
    width: 220px;
    height: 65px;
    display: block;
    position: absolute;
    left: 0px;
    bottom: 55px;
}
#Wrapper #Wrapper_Content #Container #Header .Live_Support img {
    width: 220px;
    height: 65px;
    transition: all 0.3s ease-in-out;
    -moz-transition: all 0.3s ease-in-out;
    -ms-transition: all 0.3s ease-in-out;
    -o-transition: all 0.3s ease-in-out;
    -webkit-transition: all 0.3s ease-in-out;
}
#Wrapper #Wrapper_Content #Container #Header .Live_Support img:hover {
    opacity: .7;
}
#Wrapper #Wrapper_Content #Container #Header .Menu {
    background: #6d6d6d url(images/Menu_bg.jpg) repeat-x top center;
    width: 1000px;
    height: 52px;
    float: right;
    margin: 16px 0px 0px 0px;
    border-radius: 4px;
    -moz-border-radius: 4px;
    -webkit-border-radius: 4px;
}
#Wrapper #Wrapper_Content #Container #Header .Menu ul {
    margin: 0px 0px 0px 0px;
    width: 825px;
    height: 52px;
    float: right;
    display: block;
    overflow: hidden;
}
#Wrapper #Wrapper_Content #Container #Header .Menu ul li {
    float: right;
    margin: 2px 0px 0px 0px;
}
#Wrapper #Wrapper_Content #Container #Header .Menu ul li a {
    background: url(images/Menu_li.jpg) no-repeat center right;
    width: auto;
    height: 48px;
    display: block;
    line-height: 48px;
    font-size: 13px;
    color: #fff;
    font-family: Tatwerat_Light;
    padding: 0px 12px;
    font-weight: bold;
    transition: all 0.2s ease-in-out;
    -moz-transition: all 0.2s ease-in-out;
    -ms-transition: all 0.2s ease-in-out;
    -o-transition: all 0.2s ease-in-out;
    -webkit-transition: all 0.2s ease-in-out;
}
#Wrapper #Wrapper_Content #Container #Header .Menu ul li a:hover {
    background: #4f4f4f url(images/Menu_li.jpg) no-repeat center right;
    color: #89c2fd;
}
#Wrapper #Wrapper_Content #Container #Header .Menu ul li:hover > a {
    background: #4f4f4f url(images/Menu_li.jpg) no-repeat center right;
    color: #89c2fd;
}
#Wrapper #Wrapper_Content #Container #Header .Menu ul li ul {
    position: absolute;
    width: 300px;
    height: auto;
    background: #4f4f4f;
    display: none;
    margin: 0px 2px 0px 0px;
    padding: 0px 0px 5px 0px;
    border-radius: 0px 0px 3px 3px;
    -moz-border-radius: 0px 0px 3px 3px;
    -webkit-border-radius: 0px 0px 3px 3px;
    z-index: 9999;
}
#Wrapper #Wrapper_Content #Container #Header .Menu ul li:hover > ul {
    display: block;
}
#Wrapper #Wrapper_Content #Container #Header .Menu ul li ul li {
    float: right;
    margin: 10px 5px 0px 5px !important;
}
#Wrapper #Wrapper_Content #Container #Header .Menu ul li ul li a {
    background: #777 !important;
    border-right: 5px solid #999 !important;
    width: 135px !important;
    height: 28px !important;
    line-height: 26px !important;
    padding: 0px !important;
    font-size: 13px !important;
    font-weight: normal !important;
    text-indent: 4px;
}
#Wrapper #Wrapper_Content #Container #Header .Menu ul li ul li a:hover {
    border-right: 5px solid #77b4ff !important;
    color: #000 !important;
    text-indent: 10px !important;
    text-shadow: 1px 1px 0px #999 !important;
}
#Wrapper #Wrapper_Content #Container #Header .Menu .Menu_right {
    background: url(images/Menu_Right.jpg) no-repeat top right;
    width: 62px;
    height: 52px;
    float: right;
}
#Wrapper #Wrapper_Content #Container #Header .Menu .Menu_right a {
    background: url(images/icons/home_link.png) no-repeat center -58px;
    width: 62px;
    height: 52px;
    display: block;
    transition: all 0.2s ease-in-out;
    -moz-transition: all 0.2s ease-in-out;
    -ms-transition: all 0.2s ease-in-out;
    -o-transition: all 0.2s ease-in-out;
    -webkit-transition: all 0.2s ease-in-out;
}
#Wrapper #Wrapper_Content #Container #Header .Menu .Menu_right a:hover {
    background: url(images/icons/home_link.png) no-repeat center 12px;
}
#Wrapper #Wrapper_Content #Container #Header .Menu .Menu_left {
    background: url(images/Menu_Left.jpg) no-repeat top left;
    width: 109px;
    height: 52px;
    float: left;
}
#Wrapper #Wrapper_Content #Container #Header .Menu .Menu_left a {
    width: 109px;
    height: 52px;
    display: block;
    text-align: center;
    line-height: 52px;
    font-family: Tatwerat_Helv;
    font-size: 16px;
    color: #fff;
    text-shadow: 1px 1px 1px #333;
    transition: all 0.2s ease-in-out;
    -moz-transition: all 0.2s ease-in-out;
    -ms-transition: all 0.2s ease-in-out;
    -o-transition: all 0.2s ease-in-out;
    -webkit-transition: all 0.2s ease-in-out;
}
#Wrapper #Wrapper_Content #Container #Header .Menu .Menu_left a:hover {
    color: #112e4c;
    text-shadow: 1px 1px 0px #5fa9f6;
}
/*End Header*/
#Wrapper #Wrapper_Content #Container #Body {
    width: 1000px;
    min-height: 500px;
    margin: 18px 0px 0px 0px;
}
#Wrapper #Wrapper_Content #Container #Body #Content {
    width: 730px;
    float: left;
}
#Wrapper #Wrapper_Content #Container #Body #Content #Slider {
    background: #fff;
    border: 1px solid #dadada;
    width: 728px;
    height: 260px;
    position: relative;
    overflow: visible;
    margin-bottom: 30px;
}
#Wrapper #Wrapper_Content #Container #Body #Content #Slider .slider_shadow {
    background: url(images/icons/Slider_shadow.png) no-repeat top center;
    width: 730px;
    height: 11px;
    position: absolute;
    z-index: 999;
    bottom: -11px;
    right: 0px;
}
#Wrapper #Wrapper_Content #Container #Body #Content #Slider .Slider {
    width: 708px;
    min-height: 240px;
    margin: 10px 10px 0px 0px;
    background: #fff;
}
/*Our Serv*/
#Wrapper #Wrapper_Content #Container #Body #Content #Our_Services {
    background: url(images/services_shadow.png) no-repeat center bottom;
    width: 728px;
    padding: 0px 0px 11px 0px;
    margin: 80px 0px 0px 0px;
    overflow: visible;
}
#Wrapper #Wrapper_Content #Container #Body #Content #Our_Services .Our_Services {
    background: #fff;
    border: 1px solid #d5d5d5;
    overflow: visible;
    width: 728px;
    height: 188px;
}
#Wrapper #Wrapper_Content #Container #Body #Content #Our_Services .Our_Services ul li {
    width: 215px;
    min-height: 188px;
    display: block;
    float: right;
    text-align: center;
    margin: 0px 14px 0px 0px;
    padding: 0px 5px;
    position: relative;
}
#Wrapper #Wrapper_Content #Container #Body #Content #Our_Services .Our_Services ul li a {
    width: 215px;
    height: 188px;
    display: block;
    position: absolute;
    right: 0px;
    top: 0px;
    z-index: 999;
}
#Wrapper #Wrapper_Content #Container #Body #Content #Our_Services .Our_Services ul li div.img {
    background: #ccc;
    border: 6px solid #fff;
    width: 81px;
    height: 81px;
    display: block;
    border-radius: 30pc;
    margin: -41px auto 0px auto;
    transition: all 0.5s ease-in-out;
    -moz-transition: all 0.5s ease-in-out;
    -ms-transition: all 0.5s ease-in-out;
    -o-transition: all 0.5s ease-in-out;
    -webkit-transition: all 0.5s ease-in-out;
}
#Wrapper #Wrapper_Content #Container #Body #Content #Our_Services .Our_Services ul li h2 {
    width: 215px;
    height: 30px;
    display: block;
    line-height: 30px;
    text-align: center;
    font-family: Tatwerat_Light;
    font-size: 18px;
}
#Wrapper #Wrapper_Content #Container #Body #Content #Our_Services .Our_Services ul li p {
    font-family: 'Droid Arabic Naskh';
    font-size: 13px;
    line-height: 20px;
    color: #888;
}
#Wrapper #Wrapper_Content #Container #Body #Content #Our_Services .Our_Services ul li.how_share div.img {
    background: url(images/dev.png) no-repeat center center;
}
#Wrapper #Wrapper_Content #Container #Body #Content #Our_Services .Our_Services ul li.how_share:hover div.img {
    border: 6px solid #91d5c4;
    transform: rotate(360deg);
    -moz-transform: rotate(360deg);
    -ms-transform: rotate(360deg);
    -o-transform: rotate(360deg);
    -webkit-transform: rotate(360deg);
}
#Wrapper #Wrapper_Content #Container #Body #Content #Our_Services .Our_Services ul li.how_share h2 {
    color: #64bba5;
}
#Wrapper #Wrapper_Content #Container #Body #Content #Our_Services .Our_Services ul li.how_win div.img {
    background: url(images/art.png) no-repeat center center;
}
#Wrapper #Wrapper_Content #Container #Body #Content #Our_Services .Our_Services ul li.how_win:hover div.img {
    border: 6px solid #eead77;
    transform: rotate(360deg);
    -moz-transform: rotate(360deg);
    -ms-transform: rotate(360deg);
    -o-transform: rotate(360deg);
    -webkit-transform: rotate(360deg);
}
#Wrapper #Wrapper_Content #Container #Body #Content #Our_Services .Our_Services ul li.how_win h2 {
    color: #e48f48;
}
#Wrapper #Wrapper_Content #Container #Body #Content #Our_Services .Our_Services ul li.how_adv div.img {
    background: url(images/how_adv.png) no-repeat center center;
}
#Wrapper #Wrapper_Content #Container #Body #Content #Our_Services .Our_Services ul li.how_adv:hover div.img {
    border: 6px solid #ee7e7e;
    transform: rotate(360deg);
    -moz-transform: rotate(360deg);
    -ms-transform: rotate(360deg);
    -o-transform: rotate(360deg);
    -webkit-transform: rotate(360deg);
}
#Wrapper #Wrapper_Content #Container #Body #Content #Our_Services .Our_Services ul li.how_adv h2 {
    color: #dc5454;
}
/*Host_Table*/
#Wrapper #Wrapper_Content #Container #Body #Content #Host_Table {
    width: 730px;
    height: 440px;
    margin: 50px 0px 40px 0px;
    position: relative;
    overflow: visible;
}
#Wrapper #Wrapper_Content #Container #Body #Content #Host_Table .Table_top {
    background-color: #dadada;
    background-image: linear-gradient(bottom, #cbcbcb 10%, #dadada 90%);
    background-image: -moz-linear-gradient(bottom, #cbcbcb 10%, #dadada 90%);
    background-image: -ms-linear-gradient(bottom, #cbcbcb 10%, #dadada 90%);
    background-image: -o-linear-gradient(bottom, #cbcbcb 10%, #dadada 90%);
    background-image: -webkit-linear-gradient(bottom, #cbcbcb 10%, #dadada 90%);
    box-shadow: inset 0px 1px 0px #ecebeb;
    -moz-box-shadow: inset 0px 1px 0px #ecebeb;
    -webkit-box-shadow: inset 0px 1px 0px #ecebeb;
    border-radius: 6px 6px 0px 0px;
    -moz-border-radius: 6px 6px 0px 0px;
    -webkit-border-radius: 6px 6px 0px 0px;
    width: 728px;
    height: 80px;
    border: 1px solid #cfcfcf;
}
#Wrapper #Wrapper_Content #Container #Body #Content #Host_Table .Table_shadow {
    background: url(images/icons/Host_Table_shadow.png) no-repeat top center;
    width: 730px;
    height: 30px;
}
#Wrapper #Wrapper_Content #Container #Body #Content #Host_Table .Table_options {
    background-color: #ededed;
    /*background-image: linear-gradient(bottom, #e9e7e7 10%, #ededed 90%);
    background-image: -moz-linear-gradient(bottom, #e9e7e7 10%, #ededed 90%);
    background-image: -ms-linear-gradient(bottom, #e9e7e7 10%, #ededed 90%);
    background-image: -o-linear-gradient(bottom, #e9e7e7 10%, #ededed 90%);
    background-image: -webkit-linear-gradient(bottom, #e9e7e7 10%, #ededed 90%);*/
    box-shadow: inset 0px 1px 0px #fff;
    -moz-box-shadow: inset 0px 1px 0px #fff;
    -webkit-box-shadow: inset 0px 1px 0px #fff;
    width: 728px;
    height: 102px;
    border: 1px solid #dddcdc;
    border-top: none;
}
#Wrapper #Wrapper_Content #Container #Body #Content #Host_Table .Table_details {
    background-color: #fff;
    /*background-image: linear-gradient(bottom, #e9e7e7 10%, #ededed 90%);
    background-image: -moz-linear-gradient(bottom, #e9e7e7 10%, #ededed 90%);
    background-image: -ms-linear-gradient(bottom, #e9e7e7 10%, #ededed 90%);
    background-image: -o-linear-gradient(bottom, #e9e7e7 10%, #ededed 90%);
    background-image: -webkit-linear-gradient(bottom, #e9e7e7 10%, #ededed 90%);*/
    box-shadow: inset 0px 1px 0px #fff;
    -moz-box-shadow: inset 0px 1px 0px #fff;
    -webkit-box-shadow: inset 0px 1px 0px #fff;
    width: 728px;
    height: 150px;
    border: 1px solid #dddcdc;
    border-top: none;
    border-bottom: none;
}
#Wrapper #Wrapper_Content #Container #Body #Content #Host_Table .Table_bottom {
    background-color: #f1f1f1;
    /*background-image: linear-gradient(bottom, #e9e7e7 10%, #ededed 90%);
    background-image: -moz-linear-gradient(bottom, #e9e7e7 10%, #ededed 90%);
    background-image: -ms-linear-gradient(bottom, #e9e7e7 10%, #ededed 90%);
    background-image: -o-linear-gradient(bottom, #e9e7e7 10%, #ededed 90%);
    background-image: -webkit-linear-gradient(bottom, #e9e7e7 10%, #ededed 90%);*/
    box-shadow: inset 0px 1px 0px #fff;
    -moz-box-shadow: inset 0px 1px 0px #fff;
    -webkit-box-shadow: inset 0px 1px 0px #fff;
    border-radius: 0px 0px 6px 6px;
    -moz-border-radius: 0px 0px 6px 6px;
    -webkit-border-radius: 0px 0px 6px 6px;
    width: 728px;
    height: 82px;
    border: 1px solid #dddcdc;
}
#Wrapper #Wrapper_Content #Container #Body #Content #Host_Table .Host_Center {
    box-shadow: 0px 0px 15px #bbb;
    width: 240px;
    height: 490px;
    position: absolute;
    right: 243px;
    top: -35px;
    z-index: 9999;
    border-radius: 4px 4px 4px 4px;
}
#Wrapper #Wrapper_Content #Container #Body #Content #Host_Table .Host_Center h2 {
    background-color: #98c5fa;
    background-image: linear-gradient(bottom, #83b0e5 10%, #98c5fa 90%);
    background-image: -moz-linear-gradient(bottom, #83b0e5 10%, #98c5fa 90%);
    background-image: -ms-linear-gradient(bottom, #83b0e5 10%, #98c5fa 90%);
    background-image: -o-linear-gradient(bottom, #83b0e5 10%, #98c5fa 90%);
    background-image: -webkit-linear-gradient(bottom, #83b0e5 10%, #98c5fa 90%);
    box-shadow: inset 0px 1px 0px #bddafb;
    -moz-box-shadow: inset 0px 1px 0px #bddafb;
    -webkit-box-shadow: inset 0px 1px 0px #bddafb;
    border-radius: 4px 4px 0px 0px;
    -moz-border-radius: 4px 4px 0px 0px;
    -webkit-border-radius: 4px 4px 0px 0px;
    width: 238px;
    height: 85px;
    border: 1px solid #7face0;
    border-bottom: 1px solid #5d91ce;
    font-size: 35px;
    color: #fff;
    line-height: 80px;
    text-indent: 15px;
    font-family: GESSTOW_Medium;
    text-shadow: 1px 1px 1px #102f53;
    position: relative;
    overflow: hidden;
}
#Wrapper #Wrapper_Content #Container #Body #Content #Host_Table .Host_Center h2 span {
    position: absolute;
    left: 15px;
    font-family: Tatwerat_English;
    font-size: 48px;
    color: #3c6faa;
    text-shadow: 1px 1px 0px #bbdafe;
    line-height: 85px;
}
#Wrapper #Wrapper_Content #Container #Body #Content #Host_Table .Host_Center h2 b {
    position: absolute;
    left: 81px;
    top: 32px;
    font-size: 14px;
    font-family: Tatwerat_English;
    font-weight: normal;
    color: #000;
    text-shadow: 1px 1px 0px #bbdafe;
}
#Wrapper #Wrapper_Content #Container #Body #Content #Host_Table .Host_Center ul.options {
    background-color: #ededed;
    /*background-image: linear-gradient(bottom, #e9e7e7 10%, #ededed 90%);
    background-image: -moz-linear-gradient(bottom, #e9e7e7 10%, #ededed 90%);
    background-image: -ms-linear-gradient(bottom, #e9e7e7 10%, #ededed 90%);
    background-image: -o-linear-gradient(bottom, #e9e7e7 10%, #ededed 90%);
    background-image: -webkit-linear-gradient(bottom, #e9e7e7 10%, #ededed 90%);*/
    box-shadow: inset 0px 1px 0px #fff;
    -moz-box-shadow: inset 0px 1px 0px #fff;
    -webkit-box-shadow: inset 0px 1px 0px #fff;
    width: 238px;
    height: 155px;
    display: block;
    overflow: hidden;
    border: 1px solid #dddcdc;
    border-top: none;
}
#Wrapper #Wrapper_Content #Container #Body #Content #Host_Table .Host_Center ul.options li {
    background: url(images/icons/host_plane_li.png) no-repeat center right;
    width: 100%;
    height: 33px;
    display: block;
    font-size: 13px;
    *font-weight: bold;
    position: relative;
    top: 12px;
    text-indent: 18px;
    text-shadow: 1px 1px 0px #fff;
    line-height: 31px;
    right: 5px;
    color: #555;
}
#Wrapper #Wrapper_Content #Container #Body #Content #Host_Table .Host_Center ul.options li span {
    margin: 0px 10px 0px 10px;
    color: #2868b2;
}
#Wrapper #Wrapper_Content #Container #Body #Content #Host_Table .Host_Center ul.details {
    background-color: #fff;
    /*background-image: linear-gradient(bottom, #e9e7e7 10%, #ededed 90%);
    background-image: -moz-linear-gradient(bottom, #e9e7e7 10%, #ededed 90%);
    background-image: -ms-linear-gradient(bottom, #e9e7e7 10%, #ededed 90%);
    background-image: -o-linear-gradient(bottom, #e9e7e7 10%, #ededed 90%);
    background-image: -webkit-linear-gradient(bottom, #e9e7e7 10%, #ededed 90%);*/
    box-shadow: inset 0px 1px 0px #fff;
    -moz-box-shadow: inset 0px 1px 0px #fff;
    -webkit-box-shadow: inset 0px 1px 0px #fff;
    width: 238px;
    height: 163px;
    border: 1px solid #dddcdc;
    border-top: none;
    border-bottom: none;
}
#Wrapper #Wrapper_Content #Container #Body #Content #Host_Table .Host_Center ul.details li {
    background: url(images/icons/host_plane_true.png) no-repeat center right;
    width: 100%;
    height: 30px;
    position: relative;
    right: 5px;
    text-indent: 32px;
    font-size: 13px;
    *font-weight: bold;
    line-height: 32px;
    color: #777;
    top: 6px;
}
#Wrapper #Wrapper_Content #Container #Body #Content #Host_Table .Host_Center .center_bottom {
    background-color: #f1f1f1;
    /*background-image: linear-gradient(bottom, #e9e7e7 10%, #ededed 90%);
    background-image: -moz-linear-gradient(bottom, #e9e7e7 10%, #ededed 90%);
    background-image: -ms-linear-gradient(bottom, #e9e7e7 10%, #ededed 90%);
    background-image: -o-linear-gradient(bottom, #e9e7e7 10%, #ededed 90%);
    background-image: -webkit-linear-gradient(bottom, #e9e7e7 10%, #ededed 90%);*/
    box-shadow: inset 0px 1px 0px #fff;
    -moz-box-shadow: inset 0px 1px 0px #fff;
    -webkit-box-shadow: inset 0px 1px 0px #fff;
    border-radius: 0px 0px 4px 4px;
    -moz-border-radius: 0px 0px 4px 4px;
    -webkit-border-radius: 0px 0px 4px 4px;
    width: 238px;
    height: 82px;
    border: 1px solid #dddcdc;
}
#Wrapper #Wrapper_Content #Container #Body #Content #Host_Table .Host_Center .center_bottom a {
    background-image: linear-gradient(top, #d55e5e 10%, #c85151 90%);
    background-image: -moz-linear-gradient(top, #d55e5e 10%, #c85151 90%);
    background-image: -ms-linear-gradient(top, #d55e5e 10%, #c85151 90%);
    background-image: -o-linear-gradient(top, #d55e5e 10%, #c85151 90%);
    background-image: -webkit-linear-gradient(top, #d55e5e 10%, #c85151 90%);
    box-shadow: inset 0px 1px 0px #ff8a8a;
    -moz-box-shadow: inset 0px 1px 0px #ff8a8a;
    -webkit-box-shadow: inset 0px 1px 0px #ff8a8a;
    background-color: #d55e5e;
    border: 1px solid #c34c4c;
    border-radius: 4px 4px 4px 4px;
    width: 130px;
    height: 40px;
    display: block;
    margin: 18px auto 0px auto;
    font-size: 18px;
    font-family: Tatwerat_Helv;
    line-height: 40px;
    text-align: center;
    color: #fff;
    text-shadow: 1px 1px 1px #771f1f;
}
#Wrapper #Wrapper_Content #Container #Body #Content #Host_Table .Host_Center .center_bottom a:hover {
    background-image: linear-gradient(top, #4e94e6 10%, #3c81d2 90%);
    background-image: -moz-linear-gradient(top, #4e94e6 10%, #3c81d2 90%);
    background-image: -ms-linear-gradient(top, #4e94e6 10%, #3c81d2 90%);
    background-image: -o-linear-gradient(top, #4e94e6 10%, #3c81d2 90%);
    background-image: -webkit-linear-gradient(top, #4e94e6 10%, #3c81d2 90%);
    box-shadow: inset 0px 1px 0px #7cb8ff;
    -moz-box-shadow: inset 0px 1px 0px #7cb8ff;
    -webkit-box-shadow: inset 0px 1px 0px #7cb8ff;
    background-color: #4e94e6;
    border: 1px solid #377ccd;
    color: #fff;
    text-shadow: 1px 1px 1px #255b9b;
}
#Wrapper #Wrapper_Content #Container #Body #Content #Host_Table .Table_top h2.right {
    width: 230px;
    height: 65px;
    font-size: 30px;
    color: #777;
    line-height: 65px;
    text-indent: 15px;
    font-family: Tatwerat_Gess;
    text-shadow: 1px 1px 0px #fff;
    position: relative;
    float: right;
}
#Wrapper #Wrapper_Content #Container #Body #Content #Host_Table .Table_top h2.right span {
    position: absolute;
    left: 15px;
    font-family: Tatwerat_English;
    font-size: 48px;
    color: #6193ce;
    text-shadow: 1px 1px 0px #fff;
    line-height: 65px;
}
#Wrapper #Wrapper_Content #Container #Body #Content #Host_Table .Table_top h2.right b {
    position: absolute;
    left: 81px;
    top: 32px;
    font-size: 14px;
    font-family: Tatwerat_English;
    font-weight: normal;
    color: #333;
    text-shadow: 1px 1px 0px #fff;
}
#Wrapper #Wrapper_Content #Container #Body #Content #Host_Table .Table_top h2.left {
    width: 230px;
    height: 65px;
    font-size: 30px;
    color: #777;
    line-height: 65px;
    text-indent: 0px;
    font-family: Tatwerat_Gess;
    text-shadow: 1px 1px 0px #fff;
    position: relative;
    float: left;
}
#Wrapper #Wrapper_Content #Container #Body #Content #Host_Table .Table_top h2.left span {
    position: absolute;
    left: 30px;
    font-family: Tatwerat_English;
    font-size: 48px;
    color: #6193ce;
    text-shadow: 1px 1px 0px #fff;
    line-height: 65px;
}
#Wrapper #Wrapper_Content #Container #Body #Content #Host_Table .Table_top h2.left b {
    position: absolute;
    left: 95px;
    top: 32px;
    font-size: 14px;
    font-family: Tatwerat_English;
    font-weight: normal;
    color: #333;
    text-shadow: 1px 1px 0px #fff;
}
#Wrapper #Wrapper_Content #Container #Body #Content #Host_Table .Table_options ul.options_right {
    width: 238px;
    height: 155px;
    display: block;
    overflow: hidden;
    border: 1px solid #dddcdc;
    border-top: none;
    float: right;
}
#Wrapper #Wrapper_Content #Container #Body #Content #Host_Table .Table_options ul.options_right li {
    background: url(images/icons/host_plane_li.png) no-repeat center right;
    width: 100%;
    height: 30px;
    display: block;
    font-size: 13px;
    *font-weight: bold;
    position: relative;
    top: 7px;
    text-indent: 18px;
    text-shadow: 1px 1px 0px #fff;
    line-height: 28px;
    right: 5px;
    color: #555;
}
#Wrapper #Wrapper_Content #Container #Body #Content #Host_Table .Table_options ul.options_right li span {
    margin: 0px 10px 0px 10px;
    color: #2868b2;
}
#Wrapper #Wrapper_Content #Container #Body #Content #Host_Table .Table_options ul.options_left {
    width: 238px;
    height: 155px;
    display: block;
    overflow: hidden;
    float: left;
}
#Wrapper #Wrapper_Content #Container #Body #Content #Host_Table .Table_options ul.options_left li {
    background: url(images/icons/host_plane_li.png) no-repeat center right;
    width: 100%;
    height: 30px;
    display: block;
    font-size: 13px;
    *font-weight: bold;
    position: relative;
    top: 7px;
    text-indent: 18px;
    text-shadow: 1px 1px 0px #fff;
    line-height: 28px;
    right: 0px;
    color: #555;
}
#Wrapper #Wrapper_Content #Container #Body #Content #Host_Table .Table_options ul.options_left li span {
    margin: 0px 10px 0px 10px;
    color: #2868b2;
}
#Wrapper #Wrapper_Content #Container #Body #Content #Host_Table .Table_details ul.details_right {
    width: 238px;
    height: 163px;
    display: block;
    overflow: hidden;
    float: right;
    margin: 0px 0px 0px 0px;
}
#Wrapper #Wrapper_Content #Container #Body #Content #Host_Table .Table_details ul.details_right li {
    background: url(images/icons/host_plane_true.png) no-repeat center right;
    width: 100%;
    height: 28px;
    position: relative;
    right: 5px;
    text-indent: 32px;
    font-size: 13px;
    *font-weight: bold;
    line-height: 30px;
    color: #777;
    top: 6px;
}
#Wrapper #Wrapper_Content #Container #Body #Content #Host_Table .Table_details ul.details_left {
    width: 238px;
    height: 163px;
    display: block;
    overflow: hidden;
    float: left;
    margin: 0px 0px 0px 0px;
}
#Wrapper #Wrapper_Content #Container #Body #Content #Host_Table .Table_details ul.details_left li {
    background: url(images/icons/host_plane_true.png) no-repeat center right;
    width: 100%;
    height: 28px;
    position: relative;
    right: 5px;
    text-indent: 32px;
    font-size: 13px;
    *font-weight: bold;
    line-height: 30px;
    color: #777;
    top: 6px;
}
#Wrapper #Wrapper_Content #Container #Body #Content #Host_Table .Table_details ul.details_right li.false,#Wrapper #Wrapper_Content #Container #Body #Content #Host_Table .Table_details ul.details_left li.false {
    background: url(images/icons/host_plane_false.png) no-repeat center right;
}
#Wrapper #Wrapper_Content #Container #Body #Content #Host_Table .Table_bottom a.right {
    background-image: linear-gradient(top, #858585 10%, #757575 90%);
    background-image: -moz-linear-gradient(top, #858585 10%, #757575 90%);
    background-image: -ms-linear-gradient(top, #858585 10%, #757575 90%);
    background-image: -o-linear-gradient(top, #858585 10%, #757575 90%);
    background-image: -webkit-linear-gradient(top, #858585 10%, #757575 90%);
    box-shadow: inset 0px 1px 0px #adadad;
    -moz-box-shadow: inset 0px 1px 0px #adadad;
    -webkit-box-shadow: inset 0px 1px 0px #adadad;
    background-color: #858585;
    border: 1px solid #707070;
    border-radius: 4px 4px 4px 4px;
    width: 130px;
    height: 40px;
    display: block;
    float: right;
    margin: 19px 54px 0px 0px;
    font-size: 18px;
    font-family: Tatwerat_Helv;
    line-height: 40px;
    text-align: center;
    color: #fff;
    text-shadow: 1px 1px 1px #333;
}
#Wrapper #Wrapper_Content #Container #Body #Content #Host_Table .Table_bottom a.right:hover {
    background-image: linear-gradient(top, #4e94e6 10%, #3c81d2 90%);
    background-image: -moz-linear-gradient(top, #4e94e6 10%, #3c81d2 90%);
    background-image: -ms-linear-gradient(top, #4e94e6 10%, #3c81d2 90%);
    background-image: -o-linear-gradient(top, #4e94e6 10%, #3c81d2 90%);
    background-image: -webkit-linear-gradient(top, #4e94e6 10%, #3c81d2 90%);
    box-shadow: inset 0px 1px 0px #7cb8ff;
    -moz-box-shadow: inset 0px 1px 0px #7cb8ff;
    -webkit-box-shadow: inset 0px 1px 0px #7cb8ff;
    background-color: #4e94e6;
    border: 1px solid #377ccd;
    color: #fff;
    text-shadow: 1px 1px 1px #255b9b;
}
#Wrapper #Wrapper_Content #Container #Body #Content #Host_Table .Table_bottom a.left {
    background-image: linear-gradient(top, #858585 10%, #757575 90%);
    background-image: -moz-linear-gradient(top, #858585 10%, #757575 90%);
    background-image: -ms-linear-gradient(top, #858585 10%, #757575 90%);
    background-image: -o-linear-gradient(top, #858585 10%, #757575 90%);
    background-image: -webkit-linear-gradient(top, #858585 10%, #757575 90%);
    box-shadow: inset 0px 1px 0px #adadad;
    -moz-box-shadow: inset 0px 1px 0px #adadad;
    -webkit-box-shadow: inset 0px 1px 0px #adadad;
    background-color: #858585;
    border: 1px solid #707070;
    border-radius: 4px 4px 4px 4px;
    width: 130px;
    height: 40px;
    display: block;
    float: left;
    margin: 19px 0px 0px 54px;
    font-size: 18px;
    font-family: Tatwerat_Helv;
    line-height: 40px;
    text-align: center;
    color: #fff;
    text-shadow: 1px 1px 1px #333;
}
#Wrapper #Wrapper_Content #Container #Body #Content #Host_Table .Table_bottom a.left:hover {
    background-image: linear-gradient(top, #4e94e6 10%, #3c81d2 90%);
    background-image: -moz-linear-gradient(top, #4e94e6 10%, #3c81d2 90%);
    background-image: -ms-linear-gradient(top, #4e94e6 10%, #3c81d2 90%);
    background-image: -o-linear-gradient(top, #4e94e6 10%, #3c81d2 90%);
    background-image: -webkit-linear-gradient(top, #4e94e6 10%, #3c81d2 90%);
    box-shadow: inset 0px 1px 0px #7cb8ff;
    -moz-box-shadow: inset 0px 1px 0px #7cb8ff;
    -webkit-box-shadow: inset 0px 1px 0px #7cb8ff;
    background-color: #4e94e6;
    border: 1px solid #377ccd;
    color: #fff;
    text-shadow: 1px 1px 1px #255b9b;
}
/*end host table*/
#Wrapper #Wrapper_Content #Container #Body #Content #Domain_Search {
    background: #fff url(images/Domain_bg.jpg) repeat-x top center;
    border: 1px solid #dedede;
    border-radius: 4px 4px 4px 4px;
    -moz-border-radius: 4px 4px 4px 4px;
    -webkit-border-radius: 4px 4px 4px 4px;
    width: 728px;
    height: 126px;
    position: relative;
}
#Wrapper #Wrapper_Content #Container #Body #Content #Domain_Search h2 {
    background: url(images/icons/domain_h2.png) no-repeat center right;
    width: 350px;
    height: 34px;
    margin: 6px 7px 0px 0px;
    text-indent: 38px;
    font-family: GESSTOW_Medium;
    font-size: 18px;
    color: #999;
    text-shadow: 1px 1px 0px #fff;
    line-height: 34px;
    float: right;
}
#Wrapper #Wrapper_Content #Container #Body #Content #Domain_Search nav {
    width: 300px;
    height: 30px;
    float: left;
    margin: 7px 0px 8px 0px;
}
#Wrapper #Wrapper_Content #Container #Body #Content #Domain_Search nav a {
    float: left;
    margin: 0px 0px 0px 10px;
    font-size: 13px;
    text-shadow: 1px 1px 0px #fff;
    color: #444;
    transition: all 0.2s ease-in-out;
    -moz-transition: all 0.2s ease-in-out;
    -ms-transition: all 0.2s ease-in-out;
    -o-transition: all 0.2s ease-in-out;
    -webkit-transition: all 0.2s ease-in-out;
}
#Wrapper #Wrapper_Content #Container #Body #Content #Domain_Search nav a:hover {
    color: #1783c3;
}
#Wrapper #Wrapper_Content #Container #Body #Content #Domain_Search form .domain_text {
    background: #fff;
    border: 1px solid #ddd;
    width: 315px;
    height: 40px;
    border-radius: 4px 4px 4px 4px;
    -moz-border-radius: 4px 4px 4px 4px;
    -webkit-border-radius: 4px 4px 4px 4px;
    box-shadow: inset -1px 1px 3px #ddd;
    -moz-box-shadow: inset -1px 1px 3px #ddd;
    -webkit-box-shadow: inset -1px 1px 3px #ddd;
    position: absolute;
    bottom: 19px;
    left: 110px;
    font-size: 14px;
    text-indent: 3px;
    color: #666;
    transition: all 0.2s ease-in-out;
    -moz-transition: all 0.2s ease-in-out;
    -ms-transition: all 0.2s ease-in-out;
    -o-transition: all 0.2s ease-in-out;
    -webkit-transition: all 0.2s ease-in-out;
}
#Wrapper #Wrapper_Content #Container #Body #Content #Domain_Search form .domain_text:hover {
    border: 1px solid #c6c6c6;
}
#Wrapper #Wrapper_Content #Container #Body #Content #Domain_Search form .domain_text:focus {
    border: 1px solid #7dccfa;
    box-shadow: inset -1px 1px 3px #ddd, 0px 0px 4px #7dccfa;
    -moz-box-shadow: inset -1px 1px 3px #ddd, 0px 0px 4px #7dccfa;
    -webkit-box-shadow: inset -1px 1px 3px #ddd, 0px 0px 4px #7dccfa;
}
#Wrapper #Wrapper_Content #Container #Body #Content #Domain_Search form .domain_go {
    background-image: linear-gradient(top, #858585 10%, #757575 90%);
    background-image: -moz-linear-gradient(top, #858585 10%, #757575 90%);
    background-image: -ms-linear-gradient(top, #858585 10%, #757575 90%);
    background-image: -o-linear-gradient(top, #858585 10%, #757575 90%);
    background-image: -webkit-linear-gradient(top, #858585 10%, #757575 90%);
    box-shadow: inset 0px 1px 0px #adadad;
    -moz-box-shadow: inset 0px 1px 0px #adadad;
    -webkit-box-shadow: inset 0px 1px 0px #adadad;
    background-color: #858585;
    border: 1px solid #707070;
    border-radius: 4px 4px 4px 4px;
    width: 70px;
    height: 40px;
    display: block;
    font-size: 18px;
    font-family: Tatwerat_Helv;
    line-height: 40px;
    text-align: center;
    color: #fff;
    text-shadow: 1px 1px 1px #333;
    position: absolute;
    bottom: 1px;
    left: 22px;
    cursor: pointer;
}
#Wrapper #Wrapper_Content #Container #Body #Content #Domain_Search form .domain_go:hover {
    background-image: linear-gradient(top, #4e94e6 10%, #3c81d2 90%);
    background-image: -moz-linear-gradient(top, #4e94e6 10%, #3c81d2 90%);
    background-image: -ms-linear-gradient(top, #4e94e6 10%, #3c81d2 90%);
    background-image: -o-linear-gradient(top, #4e94e6 10%, #3c81d2 90%);
    background-image: -webkit-linear-gradient(top, #4e94e6 10%, #3c81d2 90%);
    box-shadow: inset 0px 1px 0px #7cb8ff;
    -moz-box-shadow: inset 0px 1px 0px #7cb8ff;
    -webkit-box-shadow: inset 0px 1px 0px #7cb8ff;
    background-color: #4e94e6;
    border: 1px solid #377ccd;
    color: #fff;
    text-shadow: 1px 1px 1px #255b9b;
}
#Wrapper #Wrapper_Content #Container #Body #Content #Domain_Search form div.domain_options {
    width: 270px;
    height: 35px;
    float: right;
    margin: 36px 28px 0px 0px;
}
#Wrapper #Wrapper_Content #Container #Body #Content #Domain_Search form div.domain_options p {
    direction: ltr;
    margin: 0px 0px 0px 15px;
    display: block;
    float: right;
    height: 35px;
    width: 52px;
}
#Wrapper #Wrapper_Content #Container #Body #Content #Domain_Search form div.domain_options p label {
    cursor: pointer;
    float: right;
    line-height: 20px;
    font-family: tahoma;
    font-size: 13px;
    color: #444;
}
/*End Content*/
#Wrapper #Wrapper_Content #Container #Body #Sidebar {
    width: 252px;
    float: right;
}
#Wrapper #Wrapper_Content #Container #Body #Sidebar .Widget {
    background: #fbfbfb;
    border: 1px solid #d7d7d7;
    border-radius: 4px 4px 3px 3px;
    -moz-border-radius: 3px 3px 3px 3px;
    -webkit-border-radius: 3px 3px 3px 3px;
    width: 250px;
    margin: 0px 0px 20px 0px;
}
#Wrapper #Wrapper_Content #Container #Body #Sidebar .Widget h2 {
    box-shadow: inset 0px 1px 0px #fff, inset 0px 5px 10px #e5e5e5;
    -moz-box-shadow: inset 0px 1px 0px #fff, inset 0px 5px 10px #e5e5e5;
    -webkit-box-shadow: inset 0px 1px 0px #fff, inset 0px 5px 10px #e5e5e5;
    border-radius: 3px 3px 0px 0px;
    -moz-border-radius: 3px 3px 0px 0px;
    -webkit-border-radius: 3px 3px 0px 0px;
    border-bottom: 3px solid #549fec;
    width: 250px;
    height: 43px;
    position: relative;
    font-size: 18px;
    font-family: Tatwerat_Helv;
    line-height: 46px;
    text-indent: 45px;
    color: #888;
    text-shadow: 1px 1px 0px #fff;
}
#Wrapper #Wrapper_Content #Container #Body #Sidebar .Widget h2.login {
    background: #f5f5f5 url(images/icons/login_widget_h2.png) no-repeat 210px 7px;
}
#Wrapper #Wrapper_Content #Container #Body #Sidebar .Widget h2 span {
    background: #549fec;
    box-shadow: inset 0px 1px 0px #86bbf2, inset 0px 4px 6px #428dda;
    -moz-box-shadow: inset 0px 1px 0px #86bbf2, inset 0px 4px 6px #428dda;
    -webkit-box-shadow: inset 0px 1px 0px #86bbf2, inset 0px 4px 6px #428dda;
    border: 1px solid #3169a3;
    border-bottom: none;
    border-radius: 4px 4px 0px 0px;
    -moz-border-radius: 4px 4px 0px 0px;
    -webkit-border-radius: 4px 4px 0px 0px;
    width: 33px;
    height: 24px;
    display: block;
    position: absolute;
    z-index: 999;
    bottom: 0px;
    left: 18px;
    overflow: hidden;
    text-align: center;
    line-height: 25px;
    font-size: 24px;
    font-weight: normal;
    text-shadow: none;
    font-family: Arial, Helvetica, sans-serif;
    color: #fff;
    cursor: pointer;
    text-indent: 0px;
}
#Wrapper #Wrapper_Content #Container #Body #Sidebar .Widget .Widget_Login {
    padding: 10px;
}
#Wrapper #Wrapper_Content #Container #Body #Sidebar .Widget .Widget_Login .login_email {
    background: #fff url(images/icons/login_name.png) no-repeat 210px center;
    border:  1px solid #d3d3d3;
    border-radius: 4px 4px 4px 4px;
    -moz-border-radius: 4px 4px 4px 4px;
    -webkit-border-radius: 4px 4px 4px 4px;
    box-shadow: inset -1px 1px 3px #ddd;
    -moz-box-shadow: inset -1px 1px 3px #ddd;
    -webkit-box-shadow: inset -1px 1px 3px #ddd;
    margin: 0px 0px 10px 0px;
    width: 100%;
    height: 35px;
    line-height: 35px;
    text-indent: 20px;
    color: #444;
    font-size: 12px;
    transition: all 0.2s ease-in-out;
    -moz-transition: all 0.2s ease-in-out;
    -ms-transition: all 0.2s ease-in-out;
    -o-transition: all 0.2s ease-in-out;
    -webkit-transition: all 0.2s ease-in-out;
}
#Wrapper #Wrapper_Content #Container #Body #Sidebar .Widget .Widget_Login .login_pass {
    background: #fff url(images/icons/login_password.png) no-repeat 210px center;
    border:  1px solid #d3d3d3;
    border-radius: 4px 4px 4px 4px;
    -moz-border-radius: 4px 4px 4px 4px;
    -webkit-border-radius: 4px 4px 4px 4px;
    box-shadow: inset -1px 1px 3px #ddd;
    -moz-box-shadow: inset -1px 1px 3px #ddd;
    -webkit-box-shadow: inset -1px 1px 3px #ddd;
    margin: 0px 0px 10px 0px;
    width: 100%;
    height: 35px;
    line-height: 35px;
    text-indent: 20px;
    color: #444;
    font-size: 12px;
    transition: all 0.2s ease-in-out;
    -moz-transition: all 0.2s ease-in-out;
    -ms-transition: all 0.2s ease-in-out;
    -o-transition: all 0.2s ease-in-out;
    -webkit-transition: all 0.2s ease-in-out;
}
#Wrapper #Wrapper_Content #Container #Body #Sidebar .Widget .Widget_Login .login_email:hover , #Wrapper #Wrapper_Content #Container #Body #Sidebar .Widget .Widget_Login .login_pass:hover {
    border:  1px solid #aaa;
}
#Wrapper #Wrapper_Content #Container #Body #Sidebar .Widget .Widget_Login .login_email:focus , #Wrapper #Wrapper_Content #Container #Body #Sidebar .Widget .Widget_Login .login_pass:focus {
    border:  1px solid #a6cbf1;
    box-shadow: inset -1px 1px 3px #ddd, 0px 0px 5px #8ebcea;
}
#Wrapper_Content #Container #Body #Sidebar .Widget .Widget_Login .login_go {
    background-image: linear-gradient(bottom, #edecec 15%, #f6f6f6 85%);
    background-image: -moz-linear-gradient(bottom, #edecec 15%, #f6f6f6 85%);
    background-image: -ms-linear-gradient(bottom, #edecec 15%, #f6f6f6 85%);
    background-image: -o-linear-gradient(bottom, #edecec 15%, #f6f6f6 85%);
    background-image: -webkit-linear-gradient(bottom, #edecec 15%, #f6f6f6 85%);
    box-shadow: inset 0px 1px 0px #fff, inset 0px 6px 6px #edecec;
    -moz-box-shadow: inset 0px 1px 0px #fff, inset 0px 6px 6px #edecec;
    -webkit-box-shadow: inset 0px 1px 0px #fff, inset 0px 6px 6px #edecec;
    transition: all 0.2s ease-in-out;
    -moz-transition: all 0.2s ease-in-out;
    -ms-transition: all 0.2s ease-in-out;
    -o-transition: all 0.2s ease-in-out;
    -webkit-transition: all 0.2s ease-in-out;
    background-color: #edecec;
    border: 1px solid #d6d6d6;
    border-radius: 4px;
    -moz-border-radius: 4px;
    -webkit-border-radius: 4px;
    text-shadow: 1px 1px 0px #fff;
    -moz-text-shadow: 1px 1px 0px #fff;
    -webkit-text-shadow: 1px 1px 0px #fff;
    width: 86px;
    height: 40px;
    line-height: 40px;
    font-family: Tatwerat_Gess;
    font-size: 16px;
    font-weight: bold;
    color: #666;
    cursor: pointer;
    margin: 0px 0px 0px 0px;
}
#Wrapper_Content #Container #Body #Sidebar .Widget .Widget_Login .login_go:hover {
    color: #3d8cdc;
}
#Wrapper_Content #Container #Body #Sidebar .Widget .Widget_Login ul {
    margin: 0px 0px 0px 0px;
}
#Wrapper_Content #Container #Body #Sidebar .Widget .Widget_Login ul li {
    display: block;
    width: 100%;
    height: 18px;
    margin: 10px 0px 0px 0px;
}
#Wrapper_Content #Container #Body #Sidebar .Widget .Widget_Login ul li a {
    background: url(images/icons/login_links.png) no-repeat bottom right;
    display: inline-block;
    height: 18px;
    line-height: 16px;
    text-indent: 22px;
    font-family: Tatwerat_Light;
    font-size: 13px;
    color: #616161;
    transition: all 0.2s ease-in-out;
    -moz-transition: all 0.2s ease-in-out;
    -ms-transition: all 0.2s ease-in-out;
    -o-transition: all 0.2s ease-in-out;
    -webkit-transition: all 0.2s ease-in-out;
}
#Wrapper_Content #Container #Body #Sidebar .Widget .Widget_Login ul li a:hover {
    background: url(images/icons/login_links.png) no-repeat top right;
    color: #3f8edf;
    text-indent: 28px;
}
#Wrapper #Wrapper_Content #Container #Body #Sidebar .Widget h2.links {
    background: #f5f5f5 url(images/icons/links_widget_h2.png) no-repeat 210px 7px;
}
#Wrapper_Content #Container #Body #Sidebar .Widget .Widget_Links {
    padding: 0px 0px 0px 0px;
}
#Wrapper_Content #Container #Body #Sidebar .Widget .Widget_Links ul {
    margin: 0px 0px 0px 0px;
}
#Wrapper_Content #Container #Body #Sidebar .Widget .Widget_Links ul li {
    background: url(images/links_widget_li.jpg) repeat-x bottom center;
    margin: 0px 0px 0px 0px;
    display: block;
    height: 34px;
    line-height: 30px;
    font-family: Tatwerat_Light;
    font-size: 13px;
    font-weight: bold;
    transition: all 0.2s ease-in-out;
    -moz-transition: all 0.2s ease-in-out;
    -ms-transition: all 0.2s ease-in-out;
    -o-transition: all 0.2s ease-in-out;
    -webkit-transition: all 0.2s ease-in-out;
}
#Wrapper_Content #Container #Body #Sidebar .Widget .Widget_Links ul li:last-child {
    background: none;
}

#Wrapper_Content #Container #Body #Sidebar .Widget .Widget_Links ul li a {
    background: url(images/icons/links_widget_li.png) no-repeat 225px -26px;
    display: block;
    height: 34px;
    color: #777;
    text-indent: 30px;
    transition: all 0.2s ease-in-out;
    -moz-transition: all 0.2s ease-in-out;
    -ms-transition: all 0.2s ease-in-out;
    -o-transition: all 0.2s ease-in-out;
    -webkit-transition: all 0.2s ease-in-out;
}
#Wrapper_Content #Container #Body #Sidebar .Widget .Widget_Links ul li:hover {
    background-color: #fff;
}
#Wrapper_Content #Container #Body #Sidebar .Widget .Widget_Links ul li a:hover {
    background:  url(images/icons/links_widget_li.png) no-repeat 225px 6px;
    color: #3f9af8;
    text-indent: 36px;
}
#Wrapper_Content #Container #Body #Sidebar .Widget .Widget_Likes {
    padding: 10px 10px 10px 10px;
}
#Wrapper #Wrapper_Content #Container #Body #Sidebar .Widget h2.likes {
    background: #f5f5f5 url(images/icons/facebook_widget_h2.png) no-repeat 220px 7px;
    text-indent: 40px !important;
}
/*End Sidebar*/
#Wrapper #Wrapper_Content #Container #Our_Clients {
    width: 460px;
    height: 130px;
    margin: 22px 0px 20px 0px;
    position: relative;
    float: right;
}
#Wrapper #Wrapper_Content #Container #Our_Clients h2 {
    background: url(images/icons/portfolio_h2.png) no-repeat center right;
    width: 460px;
    height: 32px;
    display: block;
    line-height: 44px;
    text-indent: 32px;
    font-family: Tatwerat_Helv;
    font-size: 18px;
    color: #777;
    text-shadow: 1px 1px 0px #fff;
}
#Wrapper #Wrapper_Content #Container #Our_Clients nav a.next {
    background: #fafafa url(images/icons/portfolio_slider_next.png) no-repeat -30px center;
    border: 1px solid #cfcfcf;
    box-shadow: inset 0px 1px 0px #fff,inset 0px 4px 8px #ddd,inset 0px -5px 8px #ddd;
    border-radius: 4px 4px 4px 4px;
    -moz-border-radius: 4px 4px 4px 4px;
    -webkit-border-radius: 4px 4px 4px 4px;
    display: block;
    width: 32px;
    height: 30px;
    position: absolute;
    z-index: 999;
    top: 0px;
    left: 48px;
    transition: all 0.2s ease-in-out;
    -moz-transition: all 0.2s ease-in-out;
    -ms-transition: all 0.2s ease-in-out;
    -o-transition: all 0.2s ease-in-out;
    -webkit-transition: all 0.2s ease-in-out;
}
#Wrapper #Wrapper_Content #Container #Our_Clients nav a.next:hover {
    background: #fafafa url(images/icons/portfolio_slider_next.png) no-repeat 12px center;
}
#Wrapper #Wrapper_Content #Container #Our_Clients nav a.back {
    background: #fafafa url(images/icons/portfolio_slider_back.png) no-repeat 12px center;
    border: 1px solid #cfcfcf;
    box-shadow: inset 0px 1px 0px #fff,inset 0px 4px 8px #ddd,inset 0px -5px 8px #ddd;
    border-radius: 4px 4px 4px 4px;
    -moz-border-radius: 4px 4px 4px 4px;
    -webkit-border-radius: 4px 4px 4px 4px;
    display: block;
    width: 32px;
    height: 30px;
    position: absolute;
    z-index: 999;
    top: 0px;
    left: 0px;
    transition: all 0.2s ease-in-out;
    -moz-transition: all 0.2s ease-in-out;
    -ms-transition: all 0.2s ease-in-out;
    -o-transition: all 0.2s ease-in-out;
    -webkit-transition: all 0.2s ease-in-out;
}
#Wrapper #Wrapper_Content #Container #Our_Clients nav a.back:hover {
    background: #fafafa url(images/icons/portfolio_slider_back.png) no-repeat -30px center;
}
#Wrapper #Wrapper_Content #Container #Our_Clients .Clients_Slider {
    width: 460px;
    height: 86px;
    margin: 12px 0px 0px 0px;
}
#Wrapper #Wrapper_Content #Container #Our_Clients .Clients_Slider ul {
    margin: 0px 0px 0px 0px;
}
#Wrapper #Wrapper_Content #Container #Our_Clients .Clients_Slider ul li {
    background: #ffff;
    width: 88px;
    height: 74px;
    border: 1px solid #ccc;
    position: relative;
    transition: all 0.2s ease-in-out;
    -moz-transition: all 0.2s ease-in-out;
    -ms-transition: all 0.2s ease-in-out;
    -o-transition: all 0.2s ease-in-out;
    -webkit-transition: all 0.2s ease-in-out;
    padding: 5px;
    margin: 0px 0px 0px 20px;
}
#Wrapper #Wrapper_Content #Container #Our_Clients .Clients_Slider ul li img {
    width: 88px;
    height: 74px;
}
#Wrapper #Wrapper_Content #Container #Our_Clients .Clients_Slider ul li:hover img {
    opacity: .5;
}
#Wrapper #Wrapper_Content #Container #Our_Clients .Clients_Slider ul li a {
    width: 100px;
    height: 86px;
    position: absolute;
    z-index: 9999;
    background: url(images/icons/portfolio_link.png) no-repeat center -40px;
    top: 0px;
    right: 0px;
    transition: all 0.2s ease-in-out;
    -moz-transition: all 0.2s ease-in-out;
    -ms-transition: all 0.2s ease-in-out;
    -o-transition: all 0.2s ease-in-out;
    -webkit-transition: all 0.2s ease-in-out;
}
#Wrapper #Wrapper_Content #Container #Our_Clients .Clients_Slider ul li:hover a {
    background: url(images/icons/portfolio_link.png) no-repeat center center;
}
/* Our_Clients */
#Wrapper #Wrapper_Content #Container #Services {
    width: 515px;
    height: 130px;
    float: left;
    margin: 22px 0px 20px 0px;
    position: relative;
}
#Wrapper #Wrapper_Content #Container #Services .Services_Slider {
    width: 451px;
    height: 130px;
    margin: 0px auto 0px auto;
}
#Wrapper #Wrapper_Content #Container #Services .Services_Slider ul {
    margin: 0px 0px 0px 0px;
}
#Wrapper #Wrapper_Content #Container #Services .Services_Slider ul li {
    background: url(images/slider_border.jpg) repeat-y 293px top;
    display: block;
    width: 451px;
    height: 130px;
}
#Wrapper #Wrapper_Content #Container #Services .Services_Slider ul li h2 {
    font-size: 20px;
    font-family: Tatwerat_Helv;
    text-shadow: 1px 1px 0px #fff;
    margin: 5px 0px 5px 0px;
}
#Wrapper #Wrapper_Content #Container #Services .Services_Slider ul li p {
    font-size: 13px;
    font-family: Tatwerat_light;
    line-height: 21px;
    text-shadow: 1px 1px 0px #fff;
    color: #666;
}
#Wrapper #Wrapper_Content #Container #Services .Services_Slider ul li img {
    float: right;
    margin: 2px 10px 0px 25px;
}
#Wrapper #Wrapper_Content #Container #Services nav a.next {
    background: #fff url(images/icons/services_slider_next.png) no-repeat -31px center;
    border: 1px solid #bbb;
    width: 30px;
    height: 128px;
    display: block;
    position: absolute;
    top: 0px;
    right: 0px;
    transition: all 0.2s ease-in-out;
    -moz-transition: all 0.2s ease-in-out;
    -ms-transition: all 0.2s ease-in-out;
    -o-transition: all 0.2s ease-in-out;
    -webkit-transition: all 0.2s ease-in-out;
}
#Wrapper #Wrapper_Content #Container #Services nav a.next:hover {
    background: #fff url(images/icons/services_slider_next.png) no-repeat 9px center;
}
#Wrapper #Wrapper_Content #Container #Services nav a.back {
    background: #fff url(images/icons/services_slider_back.png) no-repeat 9px center;
    border: 1px solid #bbb;
    width: 30px;
    height: 128px;
    display: block;
    position: absolute;
    top: 0px;
    left: 0px;
    transition: all 0.2s ease-in-out;
    -moz-transition: all 0.2s ease-in-out;
    -ms-transition: all 0.2s ease-in-out;
    -o-transition: all 0.2s ease-in-out;
    -webkit-transition: all 0.2s ease-in-out;
}
#Wrapper #Wrapper_Content #Container #Services nav a.back:hover {
    background: #fff url(images/icons/services_slider_back.png) no-repeat -31px center;
}
/*End Body*/
#Wrapper #Wrapper_Content #Container #Footer {
    width: 1000px;
    height: 226px;
}
#Wrapper #Wrapper_Content #Container #Footer .Footer_About {
    background: url(images/footer_line.jpg) repeat-x center 40px;
    width: 370px;
    height: 155px;
    float: right;
    margin: 9px 0px 0px 0px;
    position: relative;
}
#Wrapper #Wrapper_Content #Container #Footer .Footer_About h2 {
    background: url(images/footer_info_h2.jpg) no-repeat center right;
    width: 370px;
    height: 35px;
    display: block;
    line-height: 35px;
    text-indent: 38px;
    font-family: Tatwerat_Helv;
    font-size: 18px;
    font-weight: bold;
    color: #000;
    text-shadow: 1px 1px 0px #515151;
}
#Wrapper #Wrapper_Content #Container #Footer .Footer_About p {
    font-family: 'Droid Arabic Naskh';
    font-size: 13px;
    margin: 10px 0px 0px 0px;
    line-height: 21px;
    color: #a5a5a5;
}
#Wrapper #Wrapper_Content #Container #Footer .Footer_About a {
    background: #b2b2b2;
    box-shadow: inset 0px 1px 0px #ccc, inset 0px 5px 10px #888, inset 0px -5px 10px #888;
    -moz-box-shadow: inset 0px 1px 0px #ccc, inset 0px 5px 10px #888, inset 0px -5px 10px #888;
    -webkit-box-shadow: inset 0px 1px 0px #ccc, inset 0px 5px 10px #888, inset 0px -5px 10px #888;
    text-shadow: 1px 1px 0px #ccc;
    border-radius: 4px;
    width: 85px;
    height: 33px;
    display: block;
    position: absolute;
    left: 0px;
    bottom: 0px;
    text-align: center;
    line-height: 32px;
    font-family: Tatwerat_Helv;
    font-size: 16px;
    color: #333;
    transition: all 0.3s ease-in-out;
    -moz-transition: all 0.3s ease-in-out;
    -ms-transition: all 0.3s ease-in-out;
    -o-transition: all 0.3s ease-in-out;
    -webkit-transition: all 0.3s ease-in-out;
}
#Wrapper #Wrapper_Content #Container #Footer .Footer_About a:hover {
    background: #61a8f0;
    box-shadow: inset 0px 1px 0px #69b1fa, inset 0px 5px 10px #2b78c7, inset 0px -5px 10px #2b78c7;
    -moz-box-shadow: inset 0px 1px 0px #69b1fa, inset 0px 5px 10px #2b78c7, inset 0px -5px 10px #2b78c7;
    -webkit-box-shadow: inset 0px 1px 0px #69b1fa, inset 0px 5px 10px #2b78c7, inset 0px -5px 10px #2b78c7;
    text-shadow: 1px 1px 1px #0a233d;
    color: #fff;
}
#Wrapper #Wrapper_Content #Container #Footer .Footer_Links {
    background: url(images/footer_line.jpg) repeat-x center 40px;
    width: 275px;
    height: 155px;
    float: right;
    margin: 9px 42px 0px 0px;
    position: relative;
}
#Wrapper #Wrapper_Content #Container #Footer .Footer_Links h2 {
    background: url(images/footer_links_h2.jpg) no-repeat center right;
    width: 275px;
    height: 35px;
    display: block;
    line-height: 35px;
    text-indent: 38px;
    font-family: Tatwerat_Helv;
    font-size: 18px;
    font-weight: bold;
    color: #000;
    text-shadow: 1px 1px 0px #515151;
}
#Wrapper #Wrapper_Content #Container #Footer .Footer_Links ul {
    margin: 13px 0px 0px 0px;
    width: 300px;
    display: block;
    overflow: hidden;
}
#Wrapper #Wrapper_Content #Container #Footer .Footer_Links ul li {
    float: right;
    margin: 0px 0px 0px 5px;
}
#Wrapper #Wrapper_Content #Container #Footer .Footer_Links ul li a {
    background: url(images/footer_links_li.jpg) no-repeat center right;
    width: 130px;
    height: 28px;
    line-height: 24px;
    display: block;
    font-family: Tatwerat_Light;
    font-size: 13px;
    text-indent: 19px;
    color: #aaa;
    transition: all 0.2s ease-in-out;
    -moz-transition: all 0.2s ease-in-out;
    -ms-transition: all 0.2s ease-in-out;
    -o-transition: all 0.2s ease-in-out;
    -webkit-transition: all 0.2s ease-in-out;
}
#Wrapper #Wrapper_Content #Container #Footer .Footer_Links ul li a:hover {
    color: #44b6f9;
    text-indent: 25px;
}
#Wrapper #Wrapper_Content #Container #Footer .Footer_Contact {
    background: url(images/footer_line.jpg) repeat-x center 40px;
    width: 270px;
    height: 155px;
    float: left;
    margin: 9px 0px 0px 0px;
    position: relative;
}
#Wrapper #Wrapper_Content #Container #Footer .Footer_Contact h2 {
    background: url(images/footer_contact_h2.jpg) no-repeat center right;
    width: 270px;
    height: 35px;
    display: block;
    line-height: 35px;
    text-indent: 38px;
    font-family: Tatwerat_Helv;
    font-size: 18px;
    font-weight: bold;
    color: #000;
    text-shadow: 1px 1px 0px #515151;
    margin-bottom: 15px;
}
#Wrapper #Wrapper_Content #Container #Footer .Footer_Contact p {
    width: 270px;
    height: 20px;
    display: block;
    line-height: 18px;
    text-indent: 26px;
    font-size: 14px;
    color: #999;
    margin: 7px 0px 0px 0px;
}
#Wrapper #Wrapper_Content #Container #Footer .Footer_Contact p.email {
    background: url(images/footer_contact_li.jpg) no-repeat right 3px;
}
#Wrapper #Wrapper_Content #Container #Footer .Footer_Contact p.phone {
    background: url(images/footer_contact_li.jpg) no-repeat right -22px;
}
#Wrapper #Wrapper_Content #Container #Footer .Footer_Bottom {
    width: 1000px;
    height: 52px;
    float: right;
    margin: 10px 0px 0px 0px;
    line-height: 50px;
    font-family: 'Droid Arabic Naskh';
}
#Wrapper #Wrapper_Content #Container #Footer .Footer_Bottom p {
    font-size: 13px;
    color: #606060;
    text-shadow: 1px 1px 0px #fff;
    float: right;
    margin: 0px 0px 0px 0px;
}
#Wrapper #Wrapper_Content #Container #Footer .Footer_Bottom ul {
    float: left;
}
#Wrapper #Wrapper_Content #Container #Footer .Footer_Bottom ul li {
    float: right;
    margin: 0px 5px 0px 0px;
}
#Wrapper #Wrapper_Content #Container #Footer .Footer_Bottom ul li a {
    font-size: 13px;
    color: #10689c;
    text-shadow: 1px 1px 0px #fff;
    transition: all 0.2s ease-in-out;
    -moz-transition: all 0.2s ease-in-out;
    -ms-transition: all 0.2s ease-in-out;
    -o-transition: all 0.2s ease-in-out;
    -webkit-transition: all 0.2s ease-in-out;
}
#Wrapper #Wrapper_Content #Container #Footer .Footer_Bottom ul li a:hover {
    color: #000;
}
/*End Footer*/
</style>
    <style>
    @charset "utf-8";
/* Tatwerat Whmcs */
.Login_Form {
    background: #fff;
    border: 1px solid #d0d0d0;
    border-top: 5px solid #7db4f9;
    width: 350px;
    height: 278px;
    float: right;
    margin: 0px 0px 0x 0px;
}
.Login_Form div.top {
    border-bottom: 1px solid #c0c0c0;
    width: 326px;
    height: 95px;
    display: block;
    overflow: hidden;
    margin: 12px auto;
}
.Login_Form div.top h2 {
    background: url(images/icons/Login_h2.png) no-repeat center right;
    width: 326px;
    height: 30px;
    line-height: 36px;
    text-indent: 28px;
    font-family: Tatwerat_Light;
    font-size: 18px;
    font-weight: bold;
    color: #67a2eb;
}
.Login_Form div.top p {
    font-size: 12px;
    color: #999;
    line-height: 18px;
    margin: 4px 0px 0px 0px;
    padding-bottom: 15px;
}
.Login_Form form label {
    display: block;
    overflow: hidden;
    width: 326px;
    height: 42px;
    margin: 12px auto;
    line-height: 40px;
    font-size: 13px;
    cursor: pointer;
}
.Login_Form form input.login_email {
    background: #fff url(images/icons/email_input.png) no-repeat 193px center;
    width: 220px;
    height: 30px;
    line-height: 40px;
    border: 1px solid #ccc;
    float: left;
    box-shadow: inset -1px 1px 4px #ddd;
    -moz-box-shadow: inset -1px 1px 4px #ddd;
    -webkit-box-shadow: inset -1px 1px 4px #ddd;
    font-size: 13px;
    color: #777;
    text-indent: 34px;
    transition: all 0.2s ease-in-out;
    -moz-transition: all 0.2s ease-in-out;
    -ms-transition: all 0.2s ease-in-out;
    -o-transition: all 0.2s ease-in-out;
    -webkit-transition: all 0.2s ease-in-out;
    margin: 0px;
}
.Login_Form form input.login_email:hover {
    border: 1px solid #b5b5b5;
}
.Login_Form form input.login_email:focus {
    border: 1px solid #9bc5fa;
}
.Login_Form form input.login_pass {
    background: #fff url(images/icons/pass_input.png) no-repeat 198px center;
    width: 220px;
    height: 30px;
    line-height: 40px;
    border: 1px solid #ccc;
    float: left;
    box-shadow: inset -1px 1px 4px #ddd;
    -moz-box-shadow: inset -1px 1px 4px #ddd;
    -webkit-box-shadow: inset -1px 1px 4px #ddd;
    font-size: 13px;
    color: #777;
    text-indent: 34px;
    transition: all 0.2s ease-in-out;
    -moz-transition: all 0.2s ease-in-out;
    -ms-transition: all 0.2s ease-in-out;
    -o-transition: all 0.2s ease-in-out;
    -webkit-transition: all 0.2s ease-in-out;
    margin: 0px;
}
.Login_Form form input.login_pass:hover {
    border: 1px solid #b5b5b5;
}
.Login_Form form input.login_pass:focus {
    border: 1px solid #9bc5fa;
}
.Login_Form label.remmber {
    width: 85px;
    float: right;
    margin-right: 115px;
    line-height: 20px;
}
.Login_Form form input.login_button {
    background-color: #77aaeb;
    background-image: linear-gradient(bottom, #ee8276 15%, #77aaeb 85%);
    background-image: -moz-linear-gradient(bottom, #6396d6 15%, #77aaeb 85%);
    background-image: -ms-linear-gradient(bottom, #6396d6 15%, #77aaeb 85%);
    background-image: -o-linear-gradient(bottom, #6396d6 15%, #77aaeb 85%);
    background-image: -webkit-linear-gradient(bottom, #6396d6 15%, #77aaeb 85%);
    box-shadow: inset 0px 1px 0px #9ec7fa;
    -moz-box-shadow: inset 0px 1px 0px #9ec7fa;
    -webkit-box-shadow: inset 0px 1px 0px #9ec7fa;
    border: 1px solid #568acc;
    color: #fff;
    text-shadow: 1px 1px 0px #395578;
    -moz-text-shadow: 1px 1px 0px #395578;
    -webkit-text-shadow: 1px 1px 0px #395578;
    width: 123px;
    height: 40px;
    float: left;
    margin: 0px 0px 0px 12px;
    font-family: Tatwerat_Light;
    font-size: 16px;
    font-weight: bold;
    cursor: pointer;
}
.Login_Form form input.login_button:hover {
    background-color: #858585;
    background-image: linear-gradient(bottom, #797979 15%, #858585 85%);
    background-image: -moz-linear-gradient(bottom, #797979 15%, #858585 85%);
    background-image: -ms-linear-gradient(bottom, #797979 15%, #858585 85%);
    background-image: -o-linear-gradient(bottom, #797979 15%, #858585 85%);
    background-image: -webkit-linear-gradient(bottom, #797979 15%, #858585 85%);
    box-shadow: inset 0px 1px 0px #b0b0b0;
    -moz-box-shadow: inset 0px 1px 0px #b0b0b0;
    -webkit-box-shadow: inset 0px 1px 0px #b0b0b0;
    border: 1px solid #676767;
    text-shadow: 1px 1px 0px #666;
    -moz-text-shadow: 1px 1px 0px #666;
    -webkit-text-shadow: 1px 1px 0px #666;
}
.Lost_Pass {
    background: #fff;
    border: 1px solid #d0d0d0;
    border-top: 5px solid #7db4f9;
    width: 330px;
    height: 58px;
    float: left;
    margin: 25px 0px 0px 0px;
    font-family: GESSTOW_Medium;
    font-size: 17px;
    line-height: 57px;
    padding: 0px 10px;
}
.Lost_Pass a {
    padding: 0px 8px;
}
.Register_Info {
    background: #fff;
    border: 1px solid #d0d0d0;
    border-top: 5px solid #7db4f9;
    width: 350px;
    height: 208px;
    float: left;
    margin: 0px 0px 0x 0px;
}
.Register_Info div.top {
    border-bottom: 1px solid #c0c0c0;
    width: 326px;
    height: 115px;
    display: block;
    overflow: hidden;
    margin: 12px auto;
}
.Register_Info div.top h2 {
    background: url(images/icons/Register_h2.png) no-repeat center right;
    width: 568px;
    height: 30px;
    line-height: 36px;
    text-indent: 38px;
    font-family: Tatwerat_Light;
    font-size: 18px;
    font-weight: bold;
    color: #67a2eb;
}
.Register_Info div.top p {
    font-size: 12px;
    color: #999;
    line-height: 18px;
    margin: 4px 0px 0px 0px;
}
.Register_Info a {
    background-color: #858585;
    background-image: linear-gradient(bottom, #797979 15%, #858585 85%);
    background-image: -moz-linear-gradient(bottom, #797979 15%, #858585 85%);
    background-image: -ms-linear-gradient(bottom, #797979 15%, #858585 85%);
    background-image: -o-linear-gradient(bottom, #797979 15%, #858585 85%);
    background-image: -webkit-linear-gradient(bottom, #797979 15%, #858585 85%);
    box-shadow: inset 0px 1px 0px #b0b0b0;
    -moz-box-shadow: inset 0px 1px 0px #b0b0b0;
    -webkit-box-shadow: inset 0px 1px 0px #b0b0b0;
    border: 1px solid #676767;
    width: 210px;
    height: 44px;
    line-height: 44px;
    text-align: center;
    display: block;
    margin: 19px auto 0px auto;
    font-family: Tatwerat_Light;
    font-size: 18px;
    font-weight: bold;
    color: #fff;
    text-shadow: 1px 1px 0px #555;
    -moz-text-shadow: 1px 1px 0px #555;
    -webkit-text-shadow: 1px 1px 0px #555;
    cursor: pointer;
}
.Register_Info a:hover {
    background-color: #77aaeb;
    background-image: linear-gradient(bottom, #ee8276 15%, #77aaeb 85%);
    background-image: -moz-linear-gradient(bottom, #6396d6 15%, #77aaeb 85%);
    background-image: -ms-linear-gradient(bottom, #6396d6 15%, #77aaeb 85%);
    background-image: -o-linear-gradient(bottom, #6396d6 15%, #77aaeb 85%);
    background-image: -webkit-linear-gradient(bottom, #6396d6 15%, #77aaeb 85%);
    box-shadow: inset 0px 1px 0px #9ec7fa;
    -moz-box-shadow: inset 0px 1px 0px #9ec7fa;
    -webkit-box-shadow: inset 0px 1px 0px #9ec7fa;
    border: 1px solid #568acc;
    color: #fff;
    text-shadow: 1px 1px 0px #395578;
    -moz-text-shadow: 1px 1px 0px #395578;
    -webkit-text-shadow: 1px 1px 0px #395578;
}
.col2half {
    background: #fff;
    border: 1px solid #d0d0d0;
    border-top: 5px solid #7db4f9;
    width: 485px;
    height: auto;
    margin: 0px 0px 26px 25px;
    float: right;
    font-size: 13px;
    line-height: 20px;
    font-family: Tahoma, Geneva, sans-serif;
    text-indent: 10px;
    padding: 8px 0px;
}
.col2half div.top {
    border-bottom: 1px solid #c0c0c0;
    width: 465px;
    height: 45px;
    display: block;
    overflow: hidden;
    margin: 12px auto;
}
.col2half div.top h2 {
    background: url(images/icons/Register_h2.png) no-repeat center right;
    width: 465px;
    height: 30px;
    line-height: 36px;
    text-indent: 38px;
    font-family: Tatwerat_Light;
    font-size: 18px;
    font-weight: bold;
    color: #67a2eb;
}
.reg_capatacha {
    background: #fff;
    border: 1px solid #d0d0d0;
    border-top: 5px solid #7db4f9;
    width: 99.8%;
    height: auto;
    display: block;
    margin: 0px 0px 26px 25px;
    float: right;
    font-size: 12px;
    line-height: 20px;
    font-family: Tahoma, Geneva, sans-serif;
    text-indent: 10px;
}
.reg_capatacha div.top {
    border-bottom: 1px solid #c0c0c0;
    width: 970px;
    height: 65px;
    display: block;
    overflow: hidden;
    margin: 12px auto;
}
.reg_capatacha div.top h3 {
    background: url(images/icons/lost_input.png) no-repeat center right;
    width: 970px;
    height: 30px;
    line-height: 43px;
    text-indent: 32px;
    font-family: Tatwerat_Light;
    font-size: 18px;
    font-weight: bold;
    color: #67a2eb;
}
.reg_capatacha div.top p {
    font-size: 12px;
    color: #999;
    line-height: 23px;
    margin: 4px 0px 0px 0px;
}
.reg_capatacha input[type=text] {
    background: #fff;
    width: 200px;
    height: 30px;
    line-height: 40px;
    border: 1px solid #ccc;
    box-shadow: inset -1px 1px 4px #ddd;
    -moz-box-shadow: inset -1px 1px 4px #ddd;
    -webkit-box-shadow: inset -1px 1px 4px #ddd;
    color: #777;
    text-indent: 4px;
    transition: all 0.2s ease-in-out;
    -moz-transition: all 0.2s ease-in-out;
    -ms-transition: all 0.2s ease-in-out;
    -o-transition: all 0.2s ease-in-out;
    -webkit-transition: all 0.2s ease-in-out;
    margin: 5px 0px 8px 0px;
    position: relative;
    top: 8px;
    text-align: center;
    font-size: 18px;
    color: #f3685a;
}
.reg_capatacha input[type=text]:hover {
    border: 1px solid #b5b5b5;
}
.reg_capatacha input[type=text]:focus {
    border: 1px solid #9bc5fa;
}
.btn {
    background-color: #858585;
    background-image: linear-gradient(bottom, #797979 15%, #858585 85%);
    background-image: -moz-linear-gradient(bottom, #797979 15%, #858585 85%);
    background-image: -ms-linear-gradient(bottom, #797979 15%, #858585 85%);
    background-image: -o-linear-gradient(bottom, #797979 15%, #858585 85%);
    background-image: -webkit-linear-gradient(bottom, #797979 15%, #858585 85%);
    box-shadow: inset 0px 1px 0px #b0b0b0;
    -moz-box-shadow: inset 0px 1px 0px #b0b0b0;
    -webkit-box-shadow: inset 0px 1px 0px #b0b0b0;
    border: 1px solid #676767;
    width: auto;
    height: 44px;
    padding: 0px 20px;
    line-height: 44px;
    text-align: center;
    display: block;
    margin: 5px auto 19px auto;
    font-family: Tatwerat_Light;
    font-size: 18px;
    font-weight: bold;
    color: #fff;
    text-shadow: 1px 1px 0px #555;
    -moz-text-shadow: 1px 1px 0px #555;
    -webkit-text-shadow: 1px 1px 0px #555;
    cursor: pointer;
}
.btn:hover {
    background-color: #77aaeb;
    background-image: linear-gradient(bottom, #ee8276 15%, #77aaeb 85%);
    background-image: -moz-linear-gradient(bottom, #6396d6 15%, #77aaeb 85%);
    background-image: -ms-linear-gradient(bottom, #6396d6 15%, #77aaeb 85%);
    background-image: -o-linear-gradient(bottom, #6396d6 15%, #77aaeb 85%);
    background-image: -webkit-linear-gradient(bottom, #6396d6 15%, #77aaeb 85%);
    box-shadow: inset 0px 1px 0px #9ec7fa;
    -moz-box-shadow: inset 0px 1px 0px #9ec7fa;
    -webkit-box-shadow: inset 0px 1px 0px #9ec7fa;
    border: 1px solid #568acc;
    color: #fff;
    text-shadow: 1px 1px 0px #395578;
    -moz-text-shadow: 1px 1px 0px #395578;
    -webkit-text-shadow: 1px 1px 0px #395578;
}
.Pwreset {
    background: #fff;
    border: 1px solid #d0d0d0;
    border-top: 5px solid #7db4f9;
    width: 99.8%;
    height: auto;
    display: block;
    margin: 0px 0px 26px 25px;
    float: right;
    font-size: 12px;
    line-height: 20px;
    font-family: Tahoma, Geneva, sans-serif;
    text-indent: 10px;
}
.Pwreset div.top {
    border-bottom: 1px solid #c0c0c0;
    width: 970px;
    height: 45px;
    display: block;
    overflow: hidden;
    margin: 12px auto;
}
.Pwreset div.top p {
    font-size: 12px;
    color: #999;
    line-height: 18px;
}
.Pwreset div.input input[type=text] {
    background: #fff;
    width: 280px;
    height: 30px;
    line-height: 40px;
    border: 1px solid #ccc;
    float: left;
    box-shadow: inset -1px 1px 4px #ddd;
    -moz-box-shadow: inset -1px 1px 4px #ddd;
    -webkit-box-shadow: inset -1px 1px 4px #ddd;
    font-size: 13px;
    color: #777;
    text-indent: 4px;
    transition: all 0.2s ease-in-out;
    -moz-transition: all 0.2s ease-in-out;
    -ms-transition: all 0.2s ease-in-out;
    -o-transition: all 0.2s ease-in-out;
    -webkit-transition: all 0.2s ease-in-out;
    margin: 0px 0px 0px 570px;
    margin: 0px;
}
.Pwreset div.input input[type=text]:hover {
    border: 1px solid #b5b5b5;
}
.Pwreset div.input input[type=text]:focus {
    border: 1px solid #9bc5fa;
}
.Pwreset div.input {
    float: left;
    margin: 14px 0px;
}
.Pwreset .clearfix label {
    line-height: 65px;
    margin: 0px 12px 0px 0px;
    font-size: 13px;
}
.col2half .clearfix {
    padding: 6px;
}
.col2half .clearfix div.input {
    float: left;
}
.col2half .clearfix div.input input[type=text] {
    background: #fff;
    width: 300px;
    height: 30px !important;
    line-height: 40px;
    border: 1px solid #ccc;
    float: left;
    box-shadow: inset -1px 1px 4px #ddd;
    -moz-box-shadow: inset -1px 1px 4px #ddd;
    -webkit-box-shadow: inset -1px 1px 4px #ddd;
    font-size: 13px;
    color: #777;
    text-indent: 4px;
    transition: all 0.2s ease-in-out;
    -moz-transition: all 0.2s ease-in-out;
    -ms-transition: all 0.2s ease-in-out;
    -o-transition: all 0.2s ease-in-out;
    -webkit-transition: all 0.2s ease-in-out;
    margin: 0px;
}
.col2half .clearfix div.input input[type=text]:hover {
    border: 1px solid #b5b5b5;
}
.col2half .clearfix div.input input[type=text]:focus {
    border: 1px solid #9bc5fa;
}
.col2half .clearfix div.input input[type=password] {
    background: #fff;
    width: 300px;
    height: 30px !important;
    line-height: 40px;
    border: 1px solid #ccc;
    float: left;
    box-shadow: inset -1px 1px 4px #ddd;
    -moz-box-shadow: inset -1px 1px 4px #ddd;
    -webkit-box-shadow: inset -1px 1px 4px #ddd;
    font-size: 13px;
    color: #777;
    text-indent: 4px;
    transition: all 0.2s ease-in-out;
    -moz-transition: all 0.2s ease-in-out;
    -ms-transition: all 0.2s ease-in-out;
    -o-transition: all 0.2s ease-in-out;
    -webkit-transition: all 0.2s ease-in-out;
    margin: 0px;
}
.col2half .clearfix div.input input[type=password]:hover {
    border: 1px solid #b5b5b5;
}
.col2half .clearfix div.input input[type=password]:focus {
    border: 1px solid #9bc5fa;
}
.col2half .clearfix div.input select {
    background: #fff url(images/icons/add_32.png) no-repeat 214px center;
    width: 250px;
    height: 40px;
    border: 1px solid #ccc;
    padding: 10px 5px;
    float: left;
    box-shadow: inset -1px 1px 4px #ddd;
    -moz-box-shadow: inset -1px 1px 4px #ddd;
    -webkit-box-shadow: inset -1px 1px 4px #ddd;
    font-size: 13px;
    color: #777;
    text-align: center;
    transition: all 0.2s ease-in-out;
    -moz-transition: all 0.2s ease-in-out;
    -ms-transition: all 0.2s ease-in-out;
    -o-transition: all 0.2s ease-in-out;
    -webkit-transition: all 0.2s ease-in-out;
    cursor: pointer;
    margin: 0px;
}
.col2half .clearfix div.input select:hover {
    border: 1px solid #b5b5b5;
}
.col2half .clearfix div.input select:focus {
    border: 1px solid #9bc5fa;
}
#pwstrengthbox {
    background: #fff;
    border: 1px solid #ccc;
    width: 200px;
    height: 30px;
    text-align: center;
    line-height: 28px;
    font-size: 13px;
    margin: 4px 0px;
}
#pwstrengthbox.weak {
    background: #ff9696 url(images/icons/close_32.png) no-repeat 6px center !important;
    border: 1px solid #ec6a6a !important;
    color: #a02121 !important;
}
#pwstrengthbox.strong {
    background: #d3e96b url(images/icons/tick_32.png) no-repeat 6px center;
    border: 1px solid #9db62a;
    color: #6c7f11;
}
#pwstrengthbox.moderate {
    background: #ffc867 url(images/icons/warning_32.png) no-repeat 6px center;
    border: 1px solid #edb34f;
    color: #97650d;
}
.col2half .clearfix label {
    padding: 0px 4px;
    font-size: 13px;
    cursor: pointer;
    line-height: 35px;
}
.row .row_content {
    background: #fff;
    border: 1px solid #d0d0d0;
    border-top: 5px solid #7db4f9;
    width: 465px;
    height: auto;
    margin: 0px 0px 26px 25px;
    float: right;
    font-size: 12px;
    line-height: 20px;
    font-family: Tahoma, Geneva, sans-serif;
    text-indent: 10px;
    padding: 10px;
}
.internalpadding input.btn {
    margin: 10px 0px 0px 15px;
}
.support_step_2 {
    background: #fff;
    border: 1px solid #d0d0d0;
    border-top: 5px solid #7db4f9;
    width: 97.8%;
    height: auto;
    margin: 0px 0px 26px 25px;
    font-size: 12px;
    line-height: 20px;
    font-family: Tahoma, Geneva, sans-serif;
    text-indent: 10px;
    padding: 10px;
}
.support_step_2 div.input {
    width: 800px;
    padding: 0px;
    float: left;
    margin: 14px 0px 0px 0px;
}
.support_step_2 div.input input, .support_step_2 div.input select, .support_step_2 div.input textarea {
    float: right;
    margin: 0px;
}
.support_step_2 .clearfix label {
    line-height: 62px;
    margin: 0px 12px 0px 0px;
    font-size: 13px;
}
.add_files {
    background: #f5f5f5;
    padding: 10px;
    border: 1px solid #ddd;
}
.add_files input[type=file] {
    background: #fff url(images/icons/up_32.png) no-repeat 10px center;
    padding: 10px;
    border: 1px solid #ddd;
    width: 350px !important;
    height: 30px;
    display: block;
    margin: 0px 0px;
    cursor: pointer;
}
.h2_msg {
    background: #fff;
    border: 1px solid #d0d0d0;
    border-right: 5px solid #7db4f9;
    height: 45px;
    margin: 0px auto 10px auto;
    font-size: 12px;
    line-height: 20px;
    font-family: Tahoma, Geneva, sans-serif;
    text-indent: 10px;
}
.errorbox {
    background: #ffd7d7 url(images/icons/delete_32.png) no-repeat 10px center;
    border: 1px solid #ec7a7a;
    width: 99.8%;
    min-height: 40px;
    margin: 0px auto 25px auto;
    font-size: 12px;
    font-weight: normal;
    line-height: 40px;
    text-indent: 10px;
    color: #e15e5e;
    text-align: right !important;
}
.success {
    background: #ddf78e url(images/icons/tick_32.png) no-repeat 10px center;
    border: 1px solid #badb55;
    width: 99.8%;
    min-height: 40px;
    margin: 0px auto 25px auto;
    font-size: 13px;
    font-weight: bold;
    line-height: 35px;
    text-indent: 10px;
    color: #799917;
    padding: 5px 0px;
}
.error {
    background: #ffd7d7 url(images/icons/delete_32.png) no-repeat 10px center;
    border: 1px solid #ec7a7a;
    width: 99.8%;
    min-height: 40px;
    margin: 0px auto 25px auto;
    font-size: 13px;
    font-weight: bold;
    line-height: 20px;
    text-indent: 10px;
    color: #e15e5e;
    padding: 5px 0px;
}
.error li {
    font-family: Tahoma, Geneva, sans-serif;
    font-size: 12px;
    font-weight: normal;
}
.page-header {
    background: url(images/icons/user_add_32.png) no-repeat right top;
    border-bottom: 1px solid #ccc;
    width: 100%;
    min-height: 32px;
    line-height: 36px;
    font-family: Tatwerat_Gess;
    text-indent: 45px;
    color: #888;
    margin-bottom: 23px;
    text-shadow: 1px 1px 0px #fff;
    -moz-text-shadow: 1px 1px 0px #fff;
    -webkit-text-shadow: 1px 1px 0px #fff;
}
.page-header small {
    color: #6aa7f3;
}
#View_Tecket {
    margin: 0px 0px 0px 0px;
}
#View_Tecket h2 {
    font-family: Tatwerat_Light;
    font-size: 18px;
    color: #6ea8f1;
}
#View_Tecket .ticketdetailscontainer {
    width: auto;
    font-size: 13px;
}
#View_Tecket .ticketdetailscontainer .col4 {
    height: 28px;
    line-height: 28px;
}
#View_Tecket .ticketdetailscontainer .detail {
    display: inline;
    margin: 5px 15px 0px 0px;
    color: #7db4f9;
}
#View_Tecket div.time {
    background: url(images/icons/clock.png) no-repeat center right;
    padding: 4px 26px 4px 10px;
    position: relative;
    top: -2px;
    color: #6ea8f1;
}
#View_Tecket .client_header {
    background: #f5f5f5 url(images/icons/comment.png) no-repeat 8px center;
    height: 18px;
    box-shadow: inset 0px 1px 0px #fff, inset 0px 5px 10px #eaeaea, inset 0px -5px 10px #eaeaea;
    -moz-box-shadow: inset 0px 1px 0px #fff, inset 0px 5px 10px #eaeaea, inset 0px -5px 10px #eaeaea;
    -webkit-box-shadow: inset 0px 1px 0px #fff, inset 0px 5px 10px #eaeaea, inset 0px -5px 10px #eaeaea;
    border: 1px solid #ddd;
    padding: 15px 5px;
    font-size: 12px;
    margin-top: 15px;
}
#View_Tecket .client_msg {
    background: #fff;
    border: 1px solid #ddd;
    border-top: none;
    padding: 15px 5px;
    font-size: 13px;
    margin-bottom: 15px;
}
#View_Tecket .admin_header {
    background: #f5f5f5 url(images/icons/comments.png) no-repeat 8px center;
    height: 18px;
    box-shadow: inset 0px 1px 0px #fff, inset 0px 5px 10px #eaeaea, inset 0px -5px 10px #eaeaea;
    -moz-box-shadow: inset 0px 1px 0px #fff, inset 0px 5px 10px #eaeaea, inset 0px -5px 10px #eaeaea;
    -webkit-box-shadow: inset 0px 1px 0px #fff, inset 0px 5px 10px #eaeaea, inset 0px -5px 10px #eaeaea;
    border: 1px solid #ddd;
    border-bottom: 5px solid #88bdff;
    padding: 15px 5px;
    font-size: 12px;
    margin-top: 15px;
}
#View_Tecket .admin_msg {
    background: #fff;
    border: 1px solid #ddd;
    border-top: none;
    padding: 15px 5px;
    font-size: 13px;
    margin-bottom: 15px;
}
#View_Tecket .ticketrating {
    border-top: 1px solid #ddd !important;
    border: none;
    width: 980px;
    text-align: center;
    display: block;
    margin: 10px auto 0px auto;
    padding: 5px 0px 0px 0px;
}
#View_Tecket .ticketrating td.star {
    width: 15px !important;
    height: 15px !important;
    cursor: pointer;
}
.tabs {
    width: auto;
    height: 35px;
    display: block;
    margin: 0px auto 25px auto;
    text-align: center;
}
.tabs li {
    margin: 0px 0px 0px 0px;
    display: inline;
}
.tabs li a {
    background: #f4f4f4;
    box-shadow: inset 0px 1px 0px #fff, inset 0px 6px 10px #e5e5e5, inset 0px -6px 10px #e5e5e5;
    border: 1px solid #ddd;
    display: inline-block;
    width: auto;
    height: 33px;
    padding: 3px 14px;
    line-height: 32px;
    margin: 0px 0px 0px 15px;
    font-family: GESSTOW_Light;
    font-size: 15px;
    color: #888;
}
.tabs li.active a {
    color: #f17b6e;
}
.pagination {
    width: auto;
    height: 45px;
    display: block;
    margin: 0px auto 25px auto;
    text-align: center;
}
.pagination li {
    margin: 0px 0px 0px 0px;
    display: inline;
    padding: 0px;
}
.pagination li a {
    background: #f4f4f4;
    box-shadow: inset 0px 1px 0px #fff, inset 0px 6px 10px #e5e5e5, inset 0px -6px 10px #e5e5e5;
    border: 1px solid #ddd;
    display: inline-block;
    width: auto;
    height: 33px;
    padding: 3px 14px;
    line-height: 32px;
    margin: 0px 0px 0px 15px;
    font-family: GESSTOW_Light;
    font-size: 15px;
    color: #888;
}
.pagination li a:hover {
    color: #f17b6e;
}
td.domcheckererror {
    background: url(images/icons/close.png) no-repeat center right;
    padding: 8px 0px;
    color: #C30;
}
td.domcheckersuccess {
    background: url(images/icons/tick_32.png) no-repeat center right;
    padding: 8px 0px;
    color: #86aa24;
}
p.domcheckererror {
    background: #ffd7d7 url(images/icons/delete_32.png) no-repeat 10px center;
    border: 1px solid #ec7a7a;
    width: 99.8%;
    min-height: 40px;
    margin: 0px auto 25px auto;
    font-size: 14px;
    font-weight: bold;
    line-height: 38px;
    text-indent: 10px;
    color: #e15e5e;
    padding: 5px 0px;
}
p.domcheckersuccess {
    background: #ddf78e url(images/icons/tick_32.png) no-repeat 10px center;
    border: 1px solid #badb55;
    width: 99.8%;
    min-height: 40px;
    margin: 0px auto 25px auto;
    font-size: 14px;
    font-weight: bold;
    line-height: 38px;
    text-indent: 10px;
    color: #799917;
    padding: 5px 0px;
}
p.textcenter {
    font-family: Tatwerat_Light;
    font-size: 15px;
}
.not_article {
    color: #C30;
}
.inputs-list {
    margin: 15px 0px;
}
.inputs-list li {
    padding: 6px 0px;
    font-size: 12px;
}
.inputs-list li label {
    cursor: pointer;
}
span.pending, span.unpaid {
    background: url(images/icons/warning_32.png) no-repeat center right;
    background-size: 20px;
    padding: 3px 24px 3px 0px;
    color: #c7881b;
}
span.active, span.paid {
    background: url(images/icons/tick_32.png) no-repeat center right;
    background-size: 20px;
    padding: 3px 24px 3px 0px;
    color: #84a10f;
}
span.cancelled {
    background: url(images/icons/close_32.png) no-repeat center right;
    background-size: 20px;
    padding: 3px 24px 3px 0px;
    color: #CC0000;
}
.Contact_Form {
    background: #fff;
    border: 1px solid #d0d0d0;
    border-top: 5px solid #7db4f9;
    width: 485px;
    height: auto;
    margin: 0px 0px 26px 25px;
    float: right;
    font-size: 13px;
    line-height: 20px;
    font-family: Tahoma, Geneva, sans-serif;
    text-indent: 10px;
    padding: 8px 0px;
}
.Contact_Form div.top {
    border-bottom: 1px solid #c0c0c0;
    width: 465px;
    height: 45px;
    display: block;
    overflow: hidden;
    margin: 12px auto;
}
.Contact_Form div.top h2 {
    background: url(images/icons/Register_h2.png) no-repeat center right;
    width: 465px;
    height: 30px;
    line-height: 36px;
    text-indent: 38px;
    font-family: Tatwerat_Light;
    font-size: 18px;
    font-weight: bold;
    color: #67a2eb;
}
.Contact_Form div.input {
    float: left;
    margin: 0px 0px 0px 12px;
}
.Contact_Form .clearfix label {
    line-height: 65px;
    margin: 0px 12px 0px 0px;
    font-size: 13px;
    overflow: hidden;
    cursor: pointer;
}
.Contact_Form ul {
    margin: 10px 10px;
}
.Contact_Form ul li {
    margin: 0px 0px 8px 0px;
    height: 26px;
    line-height: 24px;
    padding: 0px 26px 0px 0px;
    font-size: 13px;
    color: #555;
}
.Contact_Form ul li.email {
    background: url(images/icons/contact_icon.png) no-repeat right center;
}
.Contact_Form ul li.phone {
    background: url(images/icons/phone_icon.png) no-repeat right center;
}
.Contact_Form ul li.place {
    background: url(images/icons/map_icon.png) no-repeat right center;
}
.Contact_Form .clearfix {
    padding: 0px;
}
.Contact_Form div.input input {
    width: 340px;
}
.tab_content .internalpadding {
    background: #fff;
    border: 1px solid #ddd;
    border-top: 5px solid #7db4f9;
    padding: 10px;
    font-size: 12px;
    margin: 10px auto;
}
.tab_content .domain_list_details p {
    display: block;
    margin: 10px;
}
.tab_content .domain_list_details h4 {
    float: right;
    margin: 0px 0px 0px 15px;
}
.tab_content .domain_list_details span {
    color: #f2766a;
}
.Users_Controls {
    background: #fff;
    border-top: 5px solid #f2766a;
    border: 1px solid #ddd;
    margin: 0px 0px 0px 0px;
    height: 35px;
    margin: 0px 0px 0px 0px;
}
.Users_Controls ul {
    margin: 0px 4px 0px 0px;
}
.Users_Controls ul li {
    margin: 0px 0px 0px 10px;
    float: right;
}
.Users_Controls ul li a {
    width: auto;
    height: 35px;
    line-height: 33px;
    display: block;
    padding: 0px 10px;
    color: #888;
    font-size: 13px;
    font-weight: bold;
}
.Users_Controls ul li a:hover {
    color: #ef7063;
}
.Users_Controls ul li.clientarea a {
    background: url(images/icons/user_2.png) no-repeat center right;
    padding: 0px 26px 0px 18px;
}
.Users_Controls ul li.cart a {
    background: url(images/icons/shopping_cart.png) no-repeat center right;
    padding: 0px 26px 0px 18px;
}
.Users_Controls ul li.products a {
    background: url(images/icons/toolbox.png) no-repeat center right;
    padding: 0px 26px 0px 18px;
}
.Users_Controls ul li.domain a {
    background: url(images/icons/globe.png) no-repeat center right;
    padding: 0px 26px 0px 18px;
}
.Users_Controls ul li.invoices a {
    background: url(images/icons/note.png) no-repeat center right;
    padding: 0px 26px 0px 18px;
}
.Users_Controls ul li.supporttickets a {
    background: url(images/icons/puzzle.png) no-repeat center right;
    padding: 0px 26px 0px 18px;
}
.Users_Controls ul li.logout a {
    background: url(images/icons/shut_down.png) no-repeat center right;
    padding: 0px 26px 0px 18px;
}
/*Tables*/

.styled_title h3 {
    width: 99.8;
    min-height: 25px;
    line-height: 23px;
    margin: 10px 0px;
    text-indent: 4px;
    font-size: 16px;
    font-family: Tatwerat_Light;
    font-weight: bold;
}
table {
    background: #fff;
    border: 1px solid #ddd;
    width: 99.8;
    display: block;
    overflow: hidden;
    margin: 10px 0px;
}
table thead th {
    width: 1000px;
    background: #eee;
    box-shadow: inset 0px 1px 0px #fff, inset 0px 3px 8px #ddd;
    padding: 12px 10px;
    font-size: 12px;
}
table td {
    text-align: center;
    font-size: 12px;
}
/*All Forms Inputs*/

select {
    background: #fff;
    width: auto;
    height: 40px;
    border: 1px solid #ccc;
    padding: 6px !important;
    box-shadow: inset -1px 1px 4px #ddd;
    -moz-box-shadow: inset -1px 1px 4px #ddd;
    -webkit-box-shadow: inset -1px 1px 4px #ddd;
    font-size: 13px;
    color: #777;
    text-align: right;
    transition: all 0.2s ease-in-out;
    -moz-transition: all 0.2s ease-in-out;
    -ms-transition: all 0.2s ease-in-out;
    -o-transition: all 0.2s ease-in-out;
    -webkit-transition: all 0.2s ease-in-out;
    cursor: pointer;
    margin: 15px 8px;
    text-align: center !important;
}
select:hover {
    border: 1px solid #b5b5b5;
}
select:focus {
    border: 1px solid #9bc5fa;
}
input[type=text] {
    background: #fff;
    width: 300px;
    height: 30px !important;
    border: 1px solid #ccc;
    text-indent: 4px;
    box-shadow: inset -1px 1px 4px #ddd;
    -moz-box-shadow: inset -1px 1px 4px #ddd;
    -webkit-box-shadow: inset -1px 1px 4px #ddd;
    font-size: 13px;
    color: #777;
    transition: all 0.2s ease-in-out;
    -moz-transition: all 0.2s ease-in-out;
    -ms-transition: all 0.2s ease-in-out;
    -o-transition: all 0.2s ease-in-out;
    -webkit-transition: all 0.2s ease-in-out;
    margin: 15px 0px;
}
input[type=text]:hover {
    border: 1px solid #b5b5b5;
}
input[type=text]:focus {
    border: 1px solid #9bc5fa;
}
input[type=password] {
    background: #fff;
    width: 300px;
    height: 30px !important;
    border: 1px solid #ccc;
    text-indent: 4px;
    box-shadow: inset -1px 1px 4px #ddd;
    -moz-box-shadow: inset -1px 1px 4px #ddd;
    -webkit-box-shadow: inset -1px 1px 4px #ddd;
    font-size: 13px;
    color: #777;
    transition: all 0.2s ease-in-out;
    -moz-transition: all 0.2s ease-in-out;
    -ms-transition: all 0.2s ease-in-out;
    -o-transition: all 0.2s ease-in-out;
    -webkit-transition: all 0.2s ease-in-out;
    margin: 15px 0px;
}
input[type=password]:hover {
    border: 1px solid #b5b5b5;
}
input[type=password]:focus {
    border: 1px solid #9bc5fa;
}
.bigfield {
    background: #fff;
    width: 350px;
    height: 40px;
    border: 1px solid #ccc;
    text-indent: 4px;
    box-shadow: inset -1px 1px 4px #ddd;
    -moz-box-shadow: inset -1px 1px 4px #ddd;
    -webkit-box-shadow: inset -1px 1px 4px #ddd;
    font-size: 13px;
    color: #777;
    transition: all 0.2s ease-in-out;
    -moz-transition: all 0.2s ease-in-out;
    -ms-transition: all 0.2s ease-in-out;
    -o-transition: all 0.2s ease-in-out;
    -webkit-transition: all 0.2s ease-in-out;
    margin: 15px 0px;
}
.bigfield:hover {
    border: 1px solid #b5b5b5;
}
.bigfield:focus {
    border: 1px solid #9bc5fa;
}
textarea {
    background: #fff;
    width: 350px;
    min-height: 150px;
    border: 1px solid #ccc;
    text-indent: 4px;
    box-shadow: inset -1px 1px 4px #ddd;
    -moz-box-shadow: inset -1px 1px 4px #ddd;
    -webkit-box-shadow: inset -1px 1px 4px #ddd;
    font-size: 13px;
    color: #777;
    transition: all 0.2s ease-in-out;
    -moz-transition: all 0.2s ease-in-out;
    -ms-transition: all 0.2s ease-in-out;
    -o-transition: all 0.2s ease-in-out;
    -webkit-transition: all 0.2s ease-in-out;
    margin: 15px 0px;
}
textarea:hover {
    border: 1px solid #b5b5b5;
}
textarea:focus {
    border: 1px solid #9bc5fa;
}
input[type=button] {
    background-color: #858585;
    background-image: linear-gradient(bottom, #797979 15%, #858585 85%);
    background-image: -moz-linear-gradient(bottom, #797979 15%, #858585 85%);
    background-image: -ms-linear-gradient(bottom, #797979 15%, #858585 85%);
    background-image: -o-linear-gradient(bottom, #797979 15%, #858585 85%);
    background-image: -webkit-linear-gradient(bottom, #797979 15%, #858585 85%);
    box-shadow: inset 0px 1px 0px #b0b0b0;
    -moz-box-shadow: inset 0px 1px 0px #b0b0b0;
    -webkit-box-shadow: inset 0px 1px 0px #b0b0b0;
    border: 1px solid #676767;
    width: auto;
    height: 44px;
    padding: 0px 20px;
    line-height: 44px;
    text-align: center;
    display: inline-block;
    margin: 5px auto 19px auto;
    font-family: Tatwerat_Light;
    font-size: 18px;
    font-weight: bold;
    color: #fff;
    text-shadow: 1px 1px 0px #555;
    -moz-text-shadow: 1px 1px 0px #555;
    -webkit-text-shadow: 1px 1px 0px #555;
    cursor: pointer;
}
input[type=button]:hover {
    background-color: #77aaeb;
    background-image: linear-gradient(bottom, #ee8276 15%, #77aaeb 85%);
    background-image: -moz-linear-gradient(bottom, #6396d6 15%, #77aaeb 85%);
    background-image: -ms-linear-gradient(bottom, #6396d6 15%, #77aaeb 85%);
    background-image: -o-linear-gradient(bottom, #6396d6 15%, #77aaeb 85%);
    background-image: -webkit-linear-gradient(bottom, #6396d6 15%, #77aaeb 85%);
    box-shadow: inset 0px 1px 0px #9ec7fa;
    -moz-box-shadow: inset 0px 1px 0px #9ec7fa;
    -webkit-box-shadow: inset 0px 1px 0px #9ec7fa;
    border: 1px solid #568acc;
    color: #fff;
    text-shadow: 1px 1px 0px #395578;
    -moz-text-shadow: 1px 1px 0px #395578;
    -webkit-text-shadow: 1px 1px 0px #395578;
}
input[type=submit] {
    background-color: #858585;
    background-image: linear-gradient(bottom, #797979 15%, #858585 85%);
    background-image: -moz-linear-gradient(bottom, #797979 15%, #858585 85%);
    background-image: -ms-linear-gradient(bottom, #797979 15%, #858585 85%);
    background-image: -o-linear-gradient(bottom, #797979 15%, #858585 85%);
    background-image: -webkit-linear-gradient(bottom, #797979 15%, #858585 85%);
    box-shadow: inset 0px 1px 0px #b0b0b0;
    -moz-box-shadow: inset 0px 1px 0px #b0b0b0;
    -webkit-box-shadow: inset 0px 1px 0px #b0b0b0;
    border: 1px solid #676767;
    width: auto;
    height: 44px;
    padding: 0px 20px;
    line-height: 44px;
    text-align: center;
    display: inline-block;
    margin: 5px auto 19px auto;
    font-family: Tatwerat_Light;
    font-size: 18px;
    font-weight: bold;
    color: #fff;
    text-shadow: 1px 1px 0px #555;
    -moz-text-shadow: 1px 1px 0px #555;
    -webkit-text-shadow: 1px 1px 0px #555;
    cursor: pointer;
}
input[type=submit]:hover {
    background-color: #77aaeb;
    background-image: linear-gradient(bottom, #ee8276 15%, #77aaeb 85%);
    background-image: -moz-linear-gradient(bottom, #6396d6 15%, #77aaeb 85%);
    background-image: -ms-linear-gradient(bottom, #6396d6 15%, #77aaeb 85%);
    background-image: -o-linear-gradient(bottom, #6396d6 15%, #77aaeb 85%);
    background-image: -webkit-linear-gradient(bottom, #6396d6 15%, #77aaeb 85%);
    box-shadow: inset 0px 1px 0px #9ec7fa;
    -moz-box-shadow: inset 0px 1px 0px #9ec7fa;
    -webkit-box-shadow: inset 0px 1px 0px #9ec7fa;
    border: 1px solid #568acc;
    color: #fff;
    text-shadow: 1px 1px 0px #395578;
    -moz-text-shadow: 1px 1px 0px #395578;
    -webkit-text-shadow: 1px 1px 0px #395578;
}
/* spacer */
.spacer {
    background: url(images/page_h2.png) no-repeat center right;
    margin: 14px auto 60px auto;
    text-shadow: #FFF 0px 1px 0px;
    padding: 0px 80px 0px 0px;
}
.spacer .spacer_content h1 {
    font-family: Tatwerat_Gess;
    font-size: 20px;
    color: #3382D0;
    text-shadow: #fff 1px 1px 1px;
}
.spacer .spacer_content h2 {
    font-family: Tatwerat_Gess_light;
    font-weight: normal;
    font-size: 14px;
    color: #696969;
    text-shadow: #FFF 0px 1px 0px;
    padding: 0 0 5px 0;
}
.spacer .spacer_content p {
    font-size: 13px;
}
.host_pricing {
    height: 560px;
    background: url(images/host_pricing_bg.png) no-repeat;
    display: block;
    position: relative;
    margin: 20px auto 0px auto;
    overflow: visible;
}
.host_pricing ul {
    margin: 0px 5px 0 0;
}
.host_pricing ul li {
    float: right;
    z-index: 2;
    width: 235px;
}
.host_pricing ul li .pricing_b01 {
    font-family: Arial, Helvetica, sans-serif;
    font-size: 45px;
    font-weight: 800;
    text-align: center;
    margin: 19px 0 0 0;
    color: #777;
    text-shadow: 0px 1px 0px #FFF;
    direction: ltr;
}
.host_pricing ul> li .pricing_b02 {
    position: relative;
    right: 120px;
    top: -10px;
    font-weight: bold;
    color: #999
}
.host_pricing ul> li .pricing_b03 {
    font-size: 28px;
    text-align: center;
    color: #d438c4;
    text-shadow: 0px 1px 0px #FFF;
    margin: -5px 5px 10px 0;
    font-family: Tatwerat_Gess;
    font-size: 23px;
    position: relative;
}
.host_pricing ul li.pricing_02 {
    position: absolute;
    right: 215px;
    z-index: 99;
    background: url(images/host_pricing_top_bg.png) no-repeat;
    width: 260px;
    height: 563px;
    top: -40px;
    padding: 25px 25px 0 0;
}
.host_pricing ul li.pricing_02 .pricing_b01 {
    color: #d438c4;
}
.host_pricing ul li.pricing_02 .pricing_b03 {
    color: #222;
    font-family: Tatwerat_Gess;
    font-size: 23px;
    position: relative;
    top: 3px;
    right: -15px;
}
.host_pricing ul li ol {
    margin: 0 0 10px 0;
    overflow: hidden;
}
.host_pricing ul li .pricing_b04 li {
    background: url(images/host_pricing_td_bg.png) no-repeat;
    height: 35px;
    line-height: 30px;
    text-indent: 25px;
    text-shadow: #222 0px 1px 0px;
    position: relative;
    right: -40px;
    font-size: 12px;
    color: #fff;
}
.pricing_b04 li span span {
    color: #ff91f4 !important;
}
.host_pricing ul li.pricing_01 {
    float: right;
    margin-left: 15px
}
.host_pricing ul li.pricing_03 {
    float: right;
    margin-right: 218px;
}
.host_pricing ul li.pricing_04 {
    float: right;
}
.host_pricing ul li.pricing_04 ol li {
    border-right: #3e3e3e 1px solid;
}
.color_01, .color_01 a {
    color: #7ddaff;
}
.color_02, .color_02 a {
    color: #9c9c9c;
    font-family: Arial, Helvetica, sans-serif;
    font-size: 18px;
    direction: ltr;
    display: inline;
    float: left;
}
.t {
    width: 100px;
    float: right;
    margin: 3px 0;
}
.pricing_b05 {
    width: 195px;
    height: 32px;
    line-height: 30px;
    display: block;
    float: right;
    margin: 2px 20px 0 0;
    background: url(images/host_pricing_button_01.png) no-repeat -6px -6px;
    color: #353535;
    text-shadow: #dddddd 0px 1px 0px;
    cursor: pointer;
    text-indent: 10px;
}
.pricing_b05 .pricing_b07 {
    font-weight: bold;
    padding: 0 25px 0 0;
}
.pricing_b05:hover {
    background: url(images/host_pricing_button_01.png) no-repeat -6px -41px;
    color: #FFF;
    text-shadow: #00659c 0px 1px 1px;
}
.pricing_b09 {
    margin: 10px 33px 0 0;
    padding: 0 0 0 0;
    border: none;
    background: url(images/host_pricing_go.png) no-repeat -172px -6px;
    width: 161px;
    height: 58px;
    text-indent: -9999px;
    cursor: pointer;
}
.pricing_b09:hover {
    background: url(images/host_pricing_go.png) no-repeat -0px -6px;
}
.selectT {
    margin: 10px 33px 0 0;
    padding: 0 0 0 0;
    border: none;
    width: 161px;
    height: 58px;
    text-indent: -9999px;
    cursor: pointer;
    background: url(images/host_pricing_go2.png) no-repeat -0px -6px;
}
.selectT:hover {
    background: url(images/host_pricing_go2.png) no-repeat -172px -6px;
}
.text_a li {
    margin: 0px;
}
.words_c {
    width: 780px;
    margin: -15px  auto 15px auto;
    overflow: hidden;
}
.words_c li {
    float: right;
    width: 300px;
    background: url(images/database.png) no-repeat center right;
    padding: 8px 55px 8px 30px;
}
.words_c li .icons2 {
    float: right;
}
.words_c li h3 {
    width: 300px;
    color: #3e8cea;
    font-family: Tatwerat_Gess_light;
    font-size: 15px;
}
.words_c li .text {
    width: 300px;
}
.words_c li .more {
    margin: 5px 0;
}
.text_b {
    padding: 0 0px;
}
/*-/End Hosting/-*/
.Design {
    background-image: linear-gradient(top, #f6f6f6 5%, #fff 95%);
    background-image: -moz-linear-gradient(top, #f6f6f6 5%, #fff 95%);
    background-image: -ms-linear-gradient(top, #f6f6f6 5%, #fff 95%);
    background-image: -o-linear-gradient(top, #f6f6f6 5%, #fff 95%);
    background-image: -webkit-linear-gradient(top, #f6f6f6 5%, #fff 95%);
    width: 998x;
    margin: -50px auto 65px auto;
    padding: 10px;
    box-shadow: inset 0px 1px 0px #fff;
    border: 1px solid #ddd;
}
.Design h2 {
    background: url(images/design_h2.png) no-repeat center right;
    width: 930px;
    height: 50px;
    line-height: 55px;
    font-family: Tatwerat_Gess;
    font-size: 18px;
    color: #58a4ff;
    padding-right: 55px;
    font-weight: normal;
}
.Design h2 span {
    background: #fff !important;
    border: 4px solid #ddd;
    box-shadow: inset 0px 0px 2px #fa86e9;
    width: auto;
    height: 42px;
    line-height: 46px;
    display: block;
    font-size: 21px;
    margin: 0px 0px 0px 10px;
    text-align: center;
    color: #888;
    background: #eee;
    border-radius: 7px;
    float: left;
    padding: 0px 12px;
}
.Design h2 span b {
    color: #a95b9e;
}
.Design ul {
    margin: 6px 0px 0px 0px;
}
.Design ul li {
    background: url(images/terms_dot.png) no-repeat center right;
    margin: 0px 0px 0px 0px;
    display: block;
    width: 700px;
    line-height: 18px;
    text-indent: 22px;
    font-size: 13px;
    color: #888;
    cursor: pointer;
    transition: all 0.2s ease-in-out;
    -moz-transition: all 0.2s ease-in-out;
    -ms-transition: all 0.2s ease-in-out;
    -o-transition: all 0.2s ease-in-out;
    -webkit-transition: all 0.2s ease-in-out;
    padding: 8px 0px;
}
.Design ul li:hover {
    text-indent: 32px;
    color: #555;
}
#Portfolio {
    width: 1000px;
    margin: 20px 0px 20px 0px;
}
.portfolio_menu {
    width: 1000px;
    height: 50px;
    margin: 0px 0px 0px 0px;
    position: relative;
}
#Portfolio h2 {
    background: url(images/portfolio_h2.png) no-repeat center right;
    width: 1000px;
    height: 45px;
    margin: 15px auto 22px auto;
    line-height: 45px;
    text-indent: 55px;
    font-family: Tatwerat_Gess;
    font-size: 20px;
}
.portfolio_menu ul {
    margin: 0px 0px 0px 0px;
}
.portfolio_menu ul li {
    margin: 0px 0px 0px 15px;
    float: right;
}
.portfolio_menu ul li a {
    /*background-image:-moz-linear-gradient(center top , #f7f7f7, #e7e7e7);
    background-image:-webkit-linear-gradient(center top , #f7f7f7, #e7e7e7);*/
    background: #fff;
    box-shadow: inset 0px 0px 3px #aaa;
    width: auto;
    height: 40px;
    display: block;
    line-height: 40px;
    padding: 0px 8px;
    border: 4px solid #eee;
    border-radius: 6px;
    font-family: Tatwerat_Gess;
    font-size: 17px;
    font-weight: bold;
    color: #666;
    text-shadow: 1px 1px 0px #fff;
}
.portfolio_menu ul li a:hover {
    background-image: -moz-linear-gradient(center top, #f88ded, #d661ca);
    background-image: -webkit-linear-gradient(center top, #f88ded, #d661ca);
    box-shadow: inset 0px 0px 3px #9f1691;
    border: 4px solid #ddd;
    text-shadow: 1px 1px 0px #faa8f2;
    color: #6b0c61;
}
.portfolio_menu ul li.portfolio_tab a {
    background-image: -moz-linear-gradient(center top, #f88ded, #d661ca);
    background-image: -webkit-linear-gradient(center top, #f88ded, #d661ca);
    box-shadow: inset 0px -15px 25px #9f1691, inset 0px 0px 0px #fff;
    border: 4px solid #ddd;
    text-shadow: 1px 1px 0px #e279d8;
    color: #6b0c61;
}
.Portfolio_Content {
    width: 1100px;
    margin: 15px 0px 0px 0px;
    height: 370px;
}
.Portfolio_Content ul {
    margin: 15px 0px 0px 0px;
    position: relative;
}
.Portfolio_Content ul li {
    float: right;
    margin: 0px 1px 0px 26px;
    position: relative;
    *overflow: hidden !important;
}
.Portfolio_Content ul li img {
    width: 212px;
    height: 95px;
    margin: 0px 0px 20px 0px;
    border: 4px solid #fff;
    box-shadow: 0px 0px 1px #666;
    position: relative;
    transition: all 0.3s ease-in-out;
    -moz-transition: all 0.3s ease-in-out;
    -webkit-transition: all 0.3s ease-in-out;
}
.Portfolio_Content ul li a {
    background: #000 url(images/link.png) no-repeat center center;
    width: 212px;
    height: 95px;
    position: absolute;
    z-index: 999;
    top: 4px;
    right: 4px;
}
.Portfolio_next {
    background: url(images/portfolio_arrow.png) no-repeat top right;
    width: 40px;
    height: 41px;
    display: block;
    position: absolute;
    z-index: 9999;
    top: 4px;
    left: 50px;
}
.Portfolio_next:hover {
    background: url(images/portfolio_arrow.png) no-repeat right -40px;
}
.Portfolio_back {
    background: url(images/portfolio_arrow.png) no-repeat top left;
    width: 40px;
    height: 41px;
    display: block;
    position: absolute;
    z-index: 9999;
    top: 4px;
    left: 0px;
}
.Portfolio_back:hover {
    background: url(images/portfolio_arrow.png) no-repeat left -40px;
}
.Bank {
    background: #fafafa;
    width: 320px;
    padding: 5px;
    float: right;
    border: 1px solid #ccc;
    text-align: center;
    border-radius: 7px;
    margin: 5px 0px 15px 15px;
    position: relative;
    right: 50px;
}
.Bank h2 {
    background: #549fec;
    width: 90%;
    height: 40px;
    border: 4px solid #ddd;
    text-shadow: 1px 1px 0px #356697;
    color: #fff;
    margin: 10px auto;
    font-family: Tatwerat_Gess;
    font-size: 15px;
    line-height: 40px;
    border-radius: 7px;
}
.Bank img {
    width: 250px;
    height: 120px;
    border: 5px solid #ddd;
    border-radius: 7px;
}
.Bank p {
    font-size: 12px;
    font-weight: bold;
    margin: 10px 0px;
}
/*End bank*/
.contact_block {
    background: #fafafa;
    width: 320px;
    padding: 5px;
    float: right;
    border: 1px solid #ccc;
    text-align: center;
    border-radius: 7px;
    margin: 5px 0px 15px 15px;
    position: relative;
    right: 50px;
}
.contact_block h2 {
    background: #549fec;
    width: 90%;
    height: 40px;
    border: 4px solid #ddd;
    text-shadow: 1px 1px 0px #356697;
    color: #fff;
    margin: 10px auto;
    font-family: Tatwerat_Gess;
    font-size: 15px;
    line-height: 40px;
    border-radius: 7px;
}
.contact_block p {
    font-size: 12px;
    font-weight: bold;
    margin: 10px 0px;
    line-height: 18px;
}
.contact_block a {
    background: url(images/host_pricing_button_01.png) no-repeat center -4px;
    width: 206px;
    display: block;
    margin: 10px auto;
    height: 36px;
    line-height: 35px;
    font-size: 12px;
    font-weight: bold;
    color: #555;
    text-shadow: 1px 1px 0px #eee;
    *transition: all 0.0s ease-in-out;
}
.contact_block a:hover {
    background: url(images/host_pricing_button_01.png) no-repeat center -39px;
    color: #fff;
    text-shadow: 1px 1px 1px #222;
}
/*Hosting Plane*/
.et-pricing {
    margin: 0px auto 0px auto;
    padding: 36px 0px;
}
.pricing-table {
    float: right;
    width: 33%;
    margin-bottom: 0px;
    position: relative;
    margin-left: -1px;
}
.pricing-table-wrap {
    border: 1px solid #ddd;
    border-bottom: none;
}
.pricing-heading {
    background-color: #fafafa;
    background-image: -moz-linear-gradient(center top ,#fcfcfc ,#f2f2f2);
    background-image: -webkit-linear-gradient(center top ,#fcfcfc ,#f2f2f2);
    background-image: -ms-linear-gradient(center top ,#fcfcfc ,#f2f2f2);
    background-image: -o-linear-gradient(center top ,#fcfcfc ,#f2f2f2);
    border-bottom: 1px solid #ddd;
    padding: 23px 10px 22px;
    text-shadow: 1px 1px 0 #fff;
    font-size: 12px;
    color: #999;
    text-align: center;
    -moz-box-shadow: inset 1px 1px 0 0 #fff;
    -webkit-box-shadow: inset 1px 1px 0 0 #fff;
    box-shadow: inset 1px 1px 0 0 #fff;
}
.pricing-title {
    text-transform: uppercase;
    font-family: Tatwerat_Gess;
    font-size: 20px;
    color: #61a3f3 !important;
    font-weight: bold;
    text-shadow: none !important;
    position: relative;
    top: -15px;
}
.pricing-heading p {
    padding-bottom: 0 !important;
    font-family: Tatwerat_Gess_light;
    font-size: 16px;
}
.pricing-table ul.pricing {
    padding: 0 !important;
    list-style: none !important;
    margin: 0 !important;
    list-style-image: none !important;
    line-height: 26px;
}
.pricing-table ul.pricing li {
    list-style: none !important;
    border-top: 1px solid #fff;
    border-bottom: 1px solid #ddd;
    background: #f5f5f5;
    display: block;
    width: 100%;
    background: -moz-linear-gradient(top, #f5f5f5 0%, #fefefe 7%, #ffffff 100%);
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #f5f5f5), color-stop(7%, #fefefe), color-stop(100%, #ffffff));
    background: -webkit-linear-gradient(top, #f5f5f5 0%, #fefefe 7%, #ffffff 100%);
    background: -o-linear-gradient(top, #f5f5f5 0%, #fefefe 7%, #ffffff 100%);
    background: -ms-linear-gradient(top, #f5f5f5 0%, #fefefe 7%, #ffffff 100%);
    background: linear-gradient(to bottom, #f5f5f5 0%, #fefefe 7%, #ffffff 100%);
    padding: 14px 0px 14px 10px;
    position: relative;
    font-family: Tatwerat_Light;
    font-size: 14px;
    color: #777;
    text-shadow: none !important;
    transition: all 0.2s ease-in-out;
    -moz-transition: all 0.2s ease-in-out;
    -webkit-transition: all 0.2s ease-in-out;
    -ms-transition: all 0.2s ease-in-out;
    -o-transition: all 0.2s ease-in-out;
    text-align: right;
    text-indent: 42px;
}
.pricing-table ul.pricing li span {
    position: absolute;
    top: 19px;
    right: 10px;
    width: 22px;
    height: 18px;
    background: url(images/shortcodes-sprite.png) no-repeat -74px -2px;
}
.pricing-table ul.pricing li.x-mark span {
    background-position: -74px -20px;
}
.pricing-table ul.pricing li:hover {
    color: #488fe4;
}
.pricing-content-bottom {
    border-top: 1px solid #fff;
    border-bottom: 1px solid #ddd;
    -webkit-box-shadow: inset 1px 0 0 0 #fff;
    -moz-box-shadow: inset 1px 0 0 0 #fff;
    box-shadow: inset 1px 0 0 0 #fff;
    padding: 5px 5px 63px 0px;
    text-align: center;
}
span.et-price {
    font-size: 48px;
    color: #488fe4;
    text-shadow: 0 1px 0 #fff;
    font-family: 'Tatwerat_English';
}
span.et-price sup {
    font-size: 14px;
    font-weight: normal;
    bottom: 13px;
    left: 1px;
    font-family: 'Tatwerat_English';
    color: #333;
}
span.et-price span.dollar-sign {
    font-size: 26px;
}
.pricing-table a.icon-button {
    background-color: #858585;
    background-image: linear-gradient(bottom, #797979 15%, #858585 85%);
    background-image: -moz-linear-gradient(bottom, #797979 15%, #858585 85%);
    background-image: -ms-linear-gradient(bottom, #797979 15%, #858585 85%);
    background-image: -o-linear-gradient(bottom, #797979 15%, #858585 85%);
    background-image: -webkit-linear-gradient(bottom, #797979 15%, #858585 85%);
    box-shadow: inset 0px 1px 0px #b0b0b0;
    -moz-box-shadow: inset 0px 1px 0px #b0b0b0;
    -webkit-box-shadow: inset 0px 1px 0px #b0b0b0;
    border: 1px solid #676767;
    font-family: Tatwerat_Light;
    font-size: 18px;
    font-weight: normal;
    color: #fff;
    cursor: pointer;
    position: absolute;
    bottom: 15px;
    left: 28%;
    z-index: 9999;
    width: auto;
    height: 35px;
    padding: 0px 20px;
    line-height: 33px;
}
.pricing-table a.icon-button:hover {
    background-color: #77aaeb;
    background-image: linear-gradient(bottom, #ee8276 15%, #77aaeb 85%);
    background-image: -moz-linear-gradient(bottom, #6396d6 15%, #77aaeb 85%);
    background-image: -ms-linear-gradient(bottom, #6396d6 15%, #77aaeb 85%);
    background-image: -o-linear-gradient(bottom, #6396d6 15%, #77aaeb 85%);
    background-image: -webkit-linear-gradient(bottom, #6396d6 15%, #77aaeb 85%);
    box-shadow: inset 0px 1px 0px #9ec7fa;
    -moz-box-shadow: inset 0px 1px 0px #9ec7fa;
    -webkit-box-shadow: inset 0px 1px 0px #9ec7fa;
    border: 1px solid #568acc;
    color: #fff;
    text-shadow: 1px 1px 0px #395578;
    -moz-text-shadow: 1px 1px 0px #395578;
    -webkit-text-shadow: 1px 1px 0px #395578;
}
.pricing-big {
    top: -15px;
    -webkit-box-shadow: 0 0 18px rgba(0,0,0,0.2);
    -moz-box-shadow: 0 0 18px rgba(0,0,0,0.2);
    box-shadow: 0 0 18px rgba(0,0,0,0.2);
    z-index: 2;
}
.pricing-big .pricing-table-wrap {
    border-color: #d6d5d5;
}
.pricing-big .pricing-heading {
    padding-top: 43px;
}
.pricing-big .pricing-content-bottom {
    padding-bottom: 93px;
    border-bottom: 1px solid #d6d5d5;
}
/* Page_Content */
h2.about_title {
    color: #8e2f80;
    font-family: Tatwerat_Gess;
    font-weight: bold;
    font-size: 21px;
    text-shadow: 1px 1px 0px #fff;
    transition: all 0.2s ease-in-out;
    -moz-transition: all 0.2s ease-in-out;
    -webkit-transition: all 0.2s ease-in-out;
}
.About_content {
    width: 986px;
    height: auto;
    padding: 10px 10px 10px 10px;
    background: #fff;
    border: 1px solid #ddd;
    float: right;
    margin: 10px 0px 10px 0px;
    font-size: 13px;
    font-weight: bold;
    padding: 6px;
    line-height: 25px;
    text-align: center;
}
.About_content h2 {
    background-color: #4983c9;
    width: 500px;
    height: 35px;
    display: block;
    margin: 2px auto 10px auto;
    text-align: center;
    line-height: 35px;
    font-family: Tatwerat_Gess;
    font-size: 19px;
    font-weight: normal;
    color: #fff;
    text-shadow: 1px 1px 1px #222;
}
/*tooltip*/
.desciption {
    padding: 5px;
    font-size: 10px;
    background-repeat: no-repeat;
}
.interieur {
    padding: 5px 5px 7px 5px;
    background-color: #000;
    color: #fff;
    max-width: 200px;
    text-align: center;
    font-size: 13px;
}
.sud {
    background-image: url(images/Blue/tipsy-north.gif);
    background-position: center top;
}
.nord {
    background-image: url(images/Blue/tipsy-south.gif);
    background-position: center bottom;
}
.est {
    background-image: url(images/Blue/tipsy-east.gif);
    background-position: right center;
}
.ouest {
    background-image: url(images/Blue/tipsy-west.gif);
    background-position: left center;
}
.scroll_top {
    background: url(images/Blue/go-up.png) no-repeat top center;
    width: 48px;
    height: 48px;
    position: fixed;
    bottom: 20px;
    right: 20px;
    cursor: pointer;
}

    </style>
<html>
    <head>
        <meta charset="utf-8">
        <title>System for managing and archiving graduation projects</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="css/style_whmcs-blue.css">
        <link rel="stylesheet" type="text/css" href="css/slicebox.css">
        <link rel="stylesheet" type="text/css" href="css/custom.css">
        <link rel="stylesheet" type="text/css" href="css/skins/blue.css">
        <script type="text/javascript" src="js/jquery.js"></script>
    </head>
    <body>
        <div id="Wrapper">
            <div id="Wrapper_Content">
                <div id="Container">
                    <header>
                        <div id="Header">
                            <div class="Logo"></div>
                            
                            <!--/Social_Icon-->
                            <div class="Live_Support"><a href="#"><img src="images/Live_Support.jpg" alt=""></a></div>
                            <nav>
                                <div class="Menu">
                                    <div class="Menu_right"><a href="#"></a></div>
                                    <ul>
                                        <li><a href="#">المشاريع السابقة</a>
                                            <ul>
                                                <li><a href="#">مشاريع عام 2020</a></li>
                                                <li><a href="#">مشاريع عام 2019</a></li>
                                                <li><a href="#">مشاريع عام 2018  </a></li>
                                                <li><a href="#">مشاريع عام 2017  </a></li>
                                                <li><a href="#">  مشاريع عام 2016</a></li>
                                                <li><a href="#"> مشاريع عام 2015 </a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">التقويم</a>
                                        <ul>
                                                <li><a href="schedule.blade.php">  تقويم الطالب</a></li>
                                                <li><a href="#">    تقويم الكلية</a></li>
                                               
                                            </ul>
                                        
                                        </li>
                                        <li><a href="#">مشاريعي</a></li>
                                        <li><a href="#">خطط البحوث    </a>
                                           
                                            
                                        </li>
                                        <li><a href="#">المساعدة</a>
                                        <ul>
                                                <li><a href="#">المساعدة في خطة البحث</a></li>
                                                <li><a href="#">المساعدة في التحليل والتصيم</a></li>
                                                <li><a href="#">    المساعدة في البرمجة</a></li>
                                                
                                            </ul>
                                        </li>
                                        <li><a href="#">الاخباروالجديد</a></li>
                                        <li><a href="#">الدعم الفني</a></li>
                                        <li><a href="#">إتصل بنا</a></li>
                                    </ul>
                                    <div class="Menu_left"><a href="#">محادثة مباشرة </a></div>
                                </div>
                            </nav>
                            <!--/Menu--> 
                        </div>
                    </header>
                    <!--/Header-->
                    <div id="Body">
                        <div id="Content">
                            <div class="spacer">
                                <div class="spacer_content">
                                    <h1>لقد قمنا بختيار افضل المشاريع </h1>
                                    
                                </div>
                            </div>
                            <!--/spacer-->
                            <div class='et-pricing clearfix' style="margin:-40px 0px 0px 0px;">
                                <p>
                                <div class='pricing-table'>
                                    <div class='pricing-table-wrap'>
                                        <div class='pricing-heading'>
                                            <h2 class='pricing-title'> مشاريع قسم علوم حاسوب</h2>
                                            <p>2020 </p>
                                        </div>
                                        <!-- end .pricing-heading -->
                                        <div class='pricing-content'>
                                            <ul class='pricing'>
                                                <li>نظام إدارة مستشفى<span></span></li>
                                 <li>المشرف علي <span></span></li>
                                                <li>عن المشروع   <span></span></li>
                                                
                                            </ul>
                                        </div>
                                        <!-- end .pricing-content -->
                                        <div class='pricing-content-bottom'> <span class='et-price'></div>
                                        <!-- end .pricing-content-bottom --> 
                                        
                                        <a href='' class='icon-button' target="_blank">عرض </a> </div>
                                    <!-- end .pricing-table-wrap --> 
                                </div>
                                <!-- end .pricing-table -->
                                <div class='pricing-table pricing-big'>
                                    <div class='pricing-table-wrap'>
                                        <div class='pricing-heading'>
                                            <h2 class='pricing-title'>مشاريع قسم نظم المعلومات </h2>
                                            <p>2020</p>
                                        </div>
                                        <!-- end .pricing-heading -->
                                        <div class='pricing-content'>
                                            <ul class='pricing'>
                                                <li>نظام ادراة <span></span></li>
                                                <li>المشرف علي <span></span></li>
                                                <li>عن المشروع   <span></span></li>
                                               
                                            </ul>
                                        </div>
                                        <!-- end .pricing-content -->
                                        <div class='pricing-content-bottom'> <span class='et-price'></div>
                                        <!-- end .pricing-content-bottom --> 
                                        <a href='' class='icon-button' target="_blank">عرض </a> </div>
                                    <!-- end .pricing-table-wrap --> 
                                </div>
                                <!-- end .pricing-table -->
                                <div class='pricing-table'>
                                    <div class='pricing-table-wrap'>
                                        <div class='pricing-heading'>
                                            <h2 class='pricing-title'>مشاريع قسم تقنية معلومات</h2>
                                            <p>2020</p>
                                        </div>
                                        <!-- end .pricing-heading -->
                                        <div class='pricing-content'>
                                            <ul class='pricing'>
                                                <li>نظام مخزن<span></span></li>
                                                <li> المشرف ممد <span></span></li>
                                                <li>عن المشروع <span></span></li>
                                              
                                            </ul>
                                        </div>
                                        <!-- end .pricing-content -->
                                        <div class='pricing-content-bottom'> <span class='et-price'></div>
                                        <!-- end .pricing-content-bottom --> 
                                        <a href='ddd.php' class='icon-button' target="_blank">عرض </a> </div>
                                    <!-- end .pricing-table-wrap --> 
                                </div>
                                <!-- end .pricing-table -->
                            </div>
                            <!-- end .et-pricing -->
                            <div class="words_c">
                                <ul class="text_a">
                                   
                            </div>
                            <!--/words_a-->
                        </div>
                        <!--/Content-->
                        <div id="Sidebar">
                            <div class="Widget">
                                <h2 class="login">دخول النظام كمشرف<span>-</span></h2>
                                <div class="Widget_Login">
                               
   
    </label>
           
                                    <form action="#" method="post" id="Login_Form">
                                        <input type="text" name="log" class="login_email" placeholder="البريد الالكترونى ...">
                                    
                                    <label>
                               <input type="password" name="pwd" class="login_pass" placeholder="كلمة المرور ...">
                                        <input type="submit" value="دخول" class="login_go">
                                        <ul>
                                           
                                            <li><a href="#">استرجاع كلمة المرور</a></li>
                                        </ul>
                                    </form>
                                </div>
                                <!--/Widget_Login--> 
                            </div>
                            <!--/Widget-->
                            <div class="Widget">
                                <h2 class="links">مجموعة المشاريع<span>-</span></h2>
                                <div class="Widget_Links">
                                    <ul>
                                                                                                                    <li><a href="#">خطط البحوث</a></li>

                                        <li><a href="#">مشاريعي</a></li>
                                                                   <h2 class="links"> التقويم<span>-</span></h2>

                                        <li><a href="#">  تقويم الطالب</a></li>
                                        <li><a href="#">تقويم الكليه</a></li>
                                         <h2 class="links"> منتدى النقاش<span>-</span></h2>
                                        <li><a href="{{ route('messages.create') }}">  صندوق الوارد والمراسلة</a></li>
                               
                                        <li><a href="#">إنشاء مهام</a></li>
                                    </ul>
                                </div>
                                <!--/Widget_Links--> 
                            </div>
                            <!--/Widget-->
                            <div class="Widget">
                                
                                <div class="Widget_Likes">
                                       </div>
                                <!--/Widget_Likes--> 
                            </div>
                            <!--/Widget--> 
                        </div>
                        <!--/Sidebar--> 
                    </div>
                    <!--/Body-->
                    <div id="Footer">
                        <footer>
                            <div class="Footer_About">
                                <h2>عن نظام ادراة و ارشفة المشاريع </h2>
                                <a href="#">المزيد ..</a>
                                <p>مشروع نظام إدارة وأرشفة مشاريع التخرج ستكون خير معين للطلاب والمشرفين , حيث ستوفر الوقت للطلاب من حيث امكانية الرجوع للمشاريع القديمة وسهولة الوصول إليها , وعدم التضارب في إختيار المشاريع وسهولة إدارة المشرفين للمشاريع ومتابعتها.

 </p>
                            </div>
                            <!--/Footer_About-->
                            <div class="Footer_Links">
                                <h2> خدمات اخرى</h2>
                                <ul>
                                    <li><a href="#">برمجة </a></li>
                                    <li><a href="#">تحليل </a></li>
                                    <li><a href="#"> تصميم</a></li>
                                    <li><a href="#"> تطوير  </a></li>
                                    
                                </ul>
                            </div>
                            <!--/Footer_Links-->
                            <div class="Footer_Contact">
                                <h2>تواصل معنا</h2>
                                <p class="email">alazeema7@gmail.com</p>
                                <p class="email">alazeema7@tatwerat.com</p>
                                <p class="phone"> 0917130445</p>
                                <p class="phone"> 0917130445</p>
                            </div>
                            <!--/Footer_Contact-->
                            <div class="Footer_Bottom">
                                <p>جميع الحقوق محفوظة نظام ادراة وارشفة المشاريع&reg; &copy;</p>
                                <ul>
                                    <li><a href="#">عن النظام</a> | </li>
                                   
                                    <li><a href="#">من نحن</a> | </li>
                                    <li><a href="#">إتصل بنا</a></li>
                                </ul>
                            </div>
                            <!--/Footer_Bottom--> 
                        </footer>
                    </div>
                    <!--/Footer--> 
                </div>
                <!--/Container--> 
            </div>
            <!--/Wrapper_Conten--> 
        </div>
        <!--/Wrapper-->
        <script type="text/javascript" src="js/jquery_easing.js"></script>
        <script type="text/javascript" src="js/jcarousel.js"></script>
        <script type="text/javascript" src="js/slide-show.js"></script>
        <script type="text/javascript" src="js/toll_tip.js"></script>
        <script type="text/javascript" src="js/modernizr.custom.46884.js"></script>
        <script type="text/javascript" src="js/jquery.slicebox.js"></script>
        <script type="text/javascript" src="js/jquery.icheck.js"></script>
        <script type="text/javascript" src="js/tatwerat.js"></script>
    </body>
</html>
