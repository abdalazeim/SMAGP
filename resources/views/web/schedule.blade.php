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
<html>
    <head>
        <meta charset="utf-8">
        <title>شركة تطويرات لتكنولوجيا المعلومات</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" type="text/css" href="style_whmcs-blue.css">
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
                            <div class="Social_Icon">
                                <ul>
                                    <li class="facebook"><a href="#" target="_blank" title="facebook"></a></li>
                                    <li class="twitter"><a href="#" target="_blank" title="twitter"></a></li>
                                    <li class="youtube"><a href="#" target="_blank" title="youtube"></a></li>
                                    <li class="rss"><a href="#" target="_blank" title="rss"></a></li>
                                </ul>
                            </div>
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
                                                <li><a href="#">  تقويم الطالب</a></li>
                                                <li><a href="#">    تقويم الكلية</a></li>
                                               
                                            </ul>
                                        
                                        </li>
                                        <li><a href="#">مشروعي</a></li>
                                        <li><a href="#">خطة البحث  </a>
                                            <ul>
                                                <li><a href="#">   كيفة كتابة خطة البحث</a></li>
                                                <li><a href="#">  شروط خطة البحث</a></li>
                                                <li><a href="#">  شروط رفع خطة البحث</a></li>
                                                <li><a href="#">خطط بحث قديمة  </a></li>
                                                <li><a href="#">موعد تقديم خطة البحث</a></li>
                                                <li><a href="#">تقديم خطة بحث</a></li>
                                            </ul>
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
                                    <h1>خطط انجاز المشاريع</h1>
                                    <h2>وفقا مبدا دورة حياة تطوير النظم.</h2>
                                    <p>سيتم انجاز النظام على مرحلتين تبعا للهيكل التنظيمي للمشروع.</p>
                                </div>
                            </div>
                            <!--/spacer-->
                            <div class="Design">
                               <h2>الفصل الاول الجز1 <span>350 <b>30</b></span></h2>
                                <ul>
                                     <li><li><div class="Live_Support"><a href="#"><img src="images/add.jpg" alt=""></a></div</li></li>
                                    
                                </ul>
                            </div>
                            <!--Design-->
                            <div class="Design">
                                <h2>   الفصل الثاني<span>30 <b>30</b></span></h2>
                                <ul>
                                    <li><li><div class="Live_Support"><a href="#"><img src="images/two.jpg" alt=""></a></div</li></li>
                                    
                            </div>
                            <!--Design-->
                            <div class="Design">
                                <h2>الفصل الثاني   <span>350 <b>30</b></span></h2>
                                <ul>
								 <li><li><div class="Live_Support"><a href="#"><img src="images/two2.jpg" alt=""></a></div</li></li>

                                    
                                </ul>
                            </div>
                            <!--Design-->
                            <div class="Design">
                                <h2>المناقشة   <span>350 <b>30</b></span></h2>
                                <ul>
                                    <li></li>
                                    <
                                </ul>
                            </div>
                            <!--Design-->
                        </div>
                        <!--/Content-->
                        <div id="Sidebar">
                            <div class="Widget">
                                <h2 class="login">دخول طالب او مشرف<span>-</span></h2>
                                <div class="Widget_Login">
                                 اختار النوع
    <select name="topic_cat">
    <option value="web">مشرف </Option>
        <option value="web">طالب </Option>

     </select>
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
                                                                                                                    <li><a href="#">خطة البحث</a></li>

                                        <li><a href="#">مشروعي</a></li>
<li><a href="{{ route('products.index') }}">المشاريع المختراحة </a></li>
                                        <li><a href="{{ route('pprojecs.index') }}">افضل المشاريع </a></li>
                                        <li><a href="#"> المشاريع السابقة</a></li>
                                                                        <h2 class="links"> التقويم<span>-</span></h2>

                                        <li><a href="#">  تقويم الطالب</a></li>
                                        <li><a href="#">تقويم الكليه</a></li>
                                         <h2 class="links"> منتدى النقاش<span>-</span></h2>
                                        <li><a href="{{ route('messages.create') }}">  ارسال رسالة الى مشرف</a></li>
                                        <li><a href="#">كيفة هيكلة المشروع </a></li>
                                        <li><a href="#">انشاء منشور </a></li>
                                    </ul>
                                </div>
                                <!--/Widget_Links--> 
                            </div>
                            <!--/Widget-->
                            <div class="Widget">
                                <h2 class="likes">  معجبين النظام <span>-</span></h2>
                                <div class="Widget_Likes">
                                     <iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2Ftatwerat&amp;width=230&amp;height=355&amp;show_faces=true&amp;colorscheme=light&amp;stream=false&amp;show_border=false&amp;header=false&amp;appId=562036360495444"  style="border:none; overflow:hidden; width:230px; height:355px;"></iframe>
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
