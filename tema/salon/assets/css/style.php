<?php 
require_once('../../../../system/baglan.php');
require_once('../../../../system/fonk.php');
Header('Content-type: text/css; charset:UTF-8');
?>
@import url('https://fonts.googleapis.com/css2?family=Roboto:wght@300;500;700&display=swap');
 @import url('https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i');
 @import url('https://fonts.googleapis.com/css?family=Courgette');
 @import url(imp.css);
 @import url(bootstrap.min.css);
 @import url(font-awesome.min.css);
 @import url(hover.css);
 @import url(jquery.bxslider.css);
 @import url(owl.carousel.css);
 @import url(owl.theme.default.min.css);
 @import url(animate.css);
 @import url(jquery.bootstrap-touchspin.css);
 @import url('jquery.fancybox.min.css');
/*** Flaticon css ***/
 @import url(../fonts/flaticon/flaticon.css);
/*** Price filter***/
 @import url(../assets/price-filter/nouislider.css);
 @import url(../assets/price-filter/nouislider.pips.css);
/*** single shop slide ***/
 @import url(flexslider.css);
/*** Time picker css ***/
 @import url(../assets/timepicker/timePicker.css);
/*** Jquery ui css ***/
 @import url(../assets/jquery-ui-1.11.4/jquery-ui.css);
/*** Revolution slider ***/
 @import url(../assets/revolution/css/settings.css);
 @import url(../assets/revolution/css/layers.css);
 @import url(../assets/revolution/css/navigation.css);
/*** Bootstrap select picker css ***/
 @import url(../assets/bootstrap-sl-1.12.1/bootstrap-select.css);
/*============================================== Base Css ===============================================*/
 html, body {
     height: 100% 
}
 body {
     font-family: 'Open Sans', sans-serif;
     font-size: 14px;
     color: #888888;
     line-height: 24px;
     font-weight: 400;
}
 button:focus{
     outline: none;
}
 h1, h2, h3, h4, h5, h6 {
     font-family: 'Roboto', sans-serif;
     color: #404040;
     margin: 0;
}
 h3 {
     font-size: 18px;
     font-weight: 600;
}
 .float_left {
     float: left;
}
 .float_right {
     float: right;
}
 h4 {
}
 a, a:hover, a:active, a:focus {
     transition: all 0.5s ease 0s;
     text-decoration: none;
     outline: none;
     color: #fff;
}
 img {
     max-width: 100%;
     height: auto;
}
 i {
     font-style: normal;
}
 ul, li {
     list-style: none;
     margin: 0;
     padding: 0;
}
 .sec-padding{
     padding: 80px 0;
}
 button{
     border: none;
     background: transparent;
}
 .thm-btn {
     text-align: center;
     font-size: 14px;
     font-weight: 700;
     text-transform: uppercase;
     font-family: 'Roboto', sans-serif;
     display: block;
     border-radius: 30px;
     padding: 12px 30px 12px;
     transition: all 500ms ease;
}
 .bgclr-1{
     background: <?php echo RENK1;?>;
     border: 2px solid <?php echo RENK1;?>;
     color: #ffffff;
}
 .thm-btn:hover{
     background: transparent;
     color: #222222;
}
 .sec-title {
     margin-top: -6px;
     padding-bottom: 36px;
     position: relative;
}
 .sec-title.pdb-50{
     padding-bottom: 50px;
}
 .sec-title.pdb-30{
     padding-bottom: 30px;
}
 .sec-title .border.mar0auto{
     margin: 0 auto;
}
 .sec-title h1 {
     color: #404040;
     font-size: 32px;
     font-weight: 700;
     line-height: 36px;
     text-transform: none;
     margin: 0 0 9px;
}
 .sec-title .border {
     width: 152px;
     height: 30px;
     position: relative;
     overflow: hidden;
     display: block;
     text-align: center;
}
 .sec-title .border span:before{
     color: <?php echo RENK1;?>;
     font-size: 30px;
     line-height: 30px;
}
 .sec-title .border:before {
     position: absolute;
     top: 0;
     left: 0;
     width: 50px;
     height: 2px;
     background: <?php echo RENK1;?>;
     content: "";
     margin: 14px 0;
}
 .sec-title .border:after {
     position: absolute;
     top: 0;
     right: 0;
     width: 50px;
     height: 2px;
     background: <?php echo RENK1;?>;
     content: "";
     margin: 14px 0;
}
 .sec-title h3 {
     color: #222222;
     font-size: 24px;
     line-height: 30px;
     font-weight: 400;
     margin: 0 0 17px;
}
 .sec-title h2 {
     color: #ffffff;
     font-size: 24px;
     font-weight: 400;
     line-height: 36px;
     text-transform: none;
     margin: 0 0 16px;
}
 .sec-title p {
     color: #888888;
     font-size: 14px;
     font-weight: 400;
     margin: 0;
     line-height: 26px;
}
 .boxed_wrapper {
     background: #fff none repeat scroll 0 0;
     position: relative;
     margin: 0 auto;
     width: 100%;
     min-width: 320px;
     min-height: 400px;
     overflow: hidden;
}
/*________________Preloader_______________ */
 .preloader{
     position:fixed;
     left:0px;
     top:0px;
     width:100%;
     height:100%;
     z-index:999999999999;
     background-color:rgba(255,255,255,1);
     background-position:center center;
     background-repeat:no-repeat;
     background-image:url(../images/icon/preloader.gif);
}
/* Update Mainmenu area Style */
 @-webkit-keyframes menu_sticky {
     0% {
        margin-top:-150px;
    }
     50% {
        margin-top: -130px;
    }
     100% {
        margin-top: 0;
    }
}
 @keyframes menu_sticky {
     0% {
        margin-top:-150px;
    }
     50% {
        margin-top: -130px;
    }
     100% {
        margin-top: 0;
    }
}
 .mainmenu-area.stricky-fixed {
     position: fixed;
     top: 0;
     left: 0;
     margin: 0;
     width: 100%;
     z-index: 10000;
     background: #F7F7F7;
     z-index: 99999;
     -webkit-animation-name: menu_sticky;
     animation-name: menu_sticky;
     -webkit-animation-duration: 0.60s;
     animation-duration: 0.60s;
     -webkit-animation-timing-function: ease-out;
     animation-timing-function: ease-out;
}
 .mainmenu-area.stricky-fixed .arrow {
     display: none;
}
/* Scroll To Top styles */
 .scroll-to-top {
     background: transparent;
     border: 2px solid <?php echo RENK1;?>;
     bottom: 25px;
     color: <?php echo RENK1;?>;
     cursor: pointer;
     display: none;
     font-weight: normal;
     height: 45px;
     line-height: 38px;
     position: fixed;
     right: 15px;
     text-align: center;
     transition: all 500ms ease 0s;
     width: 50px;
     font-size: 30px;
     z-index: 99999;
     -webkit-box-shadow: 0px 8px 23px -6px rgba(27,27,27,1);
     -moz-box-shadow: 0px 8px 23px -6px rgba(27,27,27,1);
     box-shadow: 0px 8px 23px -6px rgba(27,27,27,1);
}
 .scroll-to-top:hover {
     background: <?php echo RENK1;?>;
     color: #fff;
}
/*Form validation styles */
 input:focus, textarea:focus, select:focus {
     border-color: #43c3ea;
     outline: none;
}
/* Post pagination styles */
 .post-pagination li {
     display: inline-block;
     margin: 0 3px;
}
 .post-pagination li a {
     background: #fff none repeat scroll 0 0;
     border: 2px solid #f0f0f0;
     color: #222222;
     display: block;
     font-size: 20px;
     font-weight: 500;
     height: 55px;
     padding: 14px 0;
     transition: all 500ms ease 0s;
     width: 55px;
     font-family: 'Roboto', sans-serif;
     border-radius: 50%;
}
 .post-pagination li.active a, .post-pagination li:hover a {
     background: <?php echo RENK1;?>;
     color: #fff;
     border: 2px solid <?php echo RENK1;?>;
}
/* Overlay styles */
 .overlay-style-one{
     position: relative;
     height: 270px;
     width: 270px;
     margin-top:-270px;
     margin-left:auto;
     margin-right:auto;
     top: 0;
     background: <?php echo RENK1;?>a6;
     color: #fff;
     transition: all 500ms ease;
     opacity: 0;
     -webkit-transform: scale(0.5);
     transform: scale(0.5);
}
 .overlay-style-one .box{
     display: table;
     height: 100%;
     width: 100%;
}
 .overlay-style-one .box .content{
     display: table-cell;
     text-align: center;
     vertical-align: middle;
}
 .review-box {
}
 .review-box ul {
     margin-left: -1px;
     margin-right: -1px;
}
 .review-box ul li {
     display: inline-block;
     margin: 0 1px;
}
 .review-box ul li i {
     color: <?php echo RENK1;?>;
     font-size: 12px;
}
/*** ============================================= Top bar area style ============================================= ***/
 .top-bar-area {
     position: relative;
     background: <?php echo RENK2;?>;
     padding: 10px 0 10px;
}
 .top-bar-area .top-left {
     overflow: hidden;
}
 .top-bar-area .top-left ul li{
     display: inline-block;
     float: left;
     border-right: 1px solid <?php echo RENK3;?>;
     padding-right: 15px;
     color: #888888;
     font-size: 14px;
     font-weight: 400;
}
 .top-bar-area .top-left ul li:last-child{
     border-left: 1px solid <?php echo RENK3;?>;
     padding-left: 15px;
     border-right: 0px solid;
}
 .top-bar-area .top-left ul li span:before{
     color: <?php echo RENK1;?>;
     font-size: 18px;
     position: relative;
     top: 2px;
     display: inline-block;
     padding-right: 8px;
}
 .top-bar-area .top-right {
     float: right;
     margin: 2px 0 0;
}
 .top-bar-area .top-right .location {
     display: inline-block;
     float: left;
     border-right: 1px solid #353637;
     padding-right: 15px;
}
 .top-bar-area .top-right .location li {
     font-size: 14px;
     color: #888888;
     font-weight: 400;
     line-height: 26px;
}
 .top-bar-area .top-right .location li span:before {
     color: <?php echo RENK1;?>;
     font-size: 18px;
     line-height: 18px;
     display: inline-block;
     padding-right: 6px;
     position: relative;
     top: 2px;
}
 .top-bar-area .top-right .social-links {
     overflow: hidden;
     float: left;
     border-left: 1px solid #161a1e;
     padding-left: 15px;
}
 .top-bar-area .top-right .social-links li {
     display: inline-block;
     float: left;
     margin-right: 20px;
     line-height: 26px;
     position: relative;
}
 .top-bar-area .top-right .social-links li:last-child {
     margin: 0px;
}
 .top-bar-area .top-right .social-links li a i {
     color: #888888;
     font-size: 14px;
     transition: all 500ms ease;
}
 .top-bar-area .top-right .social-links li a:hover i{
     color: <?php echo RENK1;?>;
}
/*============================================== Mainmenu Area Css ===============================================*/
 .mainmenu-area {
     position: relative;
     z-index: 99;
     background: #ffffff;
}
 .mainmenu-area .logo {
     position: absolute;
     left: 0px;
     top: 15px;
     width: 100%;
     height: auto;
     text-align: center;
}
 .mainmenu-area .arrow {
     position: absolute;
     left: 0px;
     width: 100%;
     height: auto;
     text-align: center;
     bottom: -39px;
}
 .mainmenu-area .logo a {
     display: inline-block;
}
 .mainmenu-area .logo .logo-image {
     position: relative;
     display: inline-block;
     width: auto;
    max-width: 190px;
     height: auto;
     z-index: 5;
     margin-top: 0px;
}
 .main-menu .nav-container {
     position: relative;
     float: left;
     width: 50%;
}
 .main-menu .nav-container.nav-left {
     padding-right: 150px;
}
 .main-menu .nav-container.nav-right {
     padding-left: 180px;
}
 .main-menu .nav-container > ul{
     position:relative;
     width:100%;
}
 .main-menu {
     position: relative;
}
 .main-menu .navbar-collapse {
     padding: 0px 
}
 .main-menu .navigation {
     float: left;
     margin: 0;
     position: relative;
     z-index: 2;
}
 .main-menu .navigation li {
     position: relative;
     display: inline-block;
     float: left;
     margin-right: 5px;
}
 .main-menu .navigation li:last-child{
     margin-right: 0;
}
 .main-menu .navigation li a {
     color: #303030;
     display: block;
     font-size: 14px;
     font-weight: 500;
     line-height: 20px;
     opacity: 1;
     padding: 35px 10px;
     position: relative;
     text-transform: uppercase;
     transition: all 500ms ease 0s;
font-family: 'Roboto', sans-serif;

}
 .main-menu .navigation li:first-child a {
     padding-left: 0;
}
 .main-menu .navigation > li:hover > a, .main-menu .navigation > li.current > a {
     color: <?php echo RENK1;?>;
}
 .main-menu .navigation li a:after {
     font-family: "Flaticon";
     content: '\f129';
     position: absolute;
     right: 0;
     top: 16px;
     width: 100%;
     height: 25px;
     font-size: 25px;
     color: <?php echo RENK1;?>;
     line-height: 25px;
     opacity: 0;
     font-weight: 400;
     text-align: right;
     transition: all 500ms ease;
}
 .main-menu .navigation > li:hover a:after, .main-menu .navigation > li.current a:after{
     width: 100%;
     opacity: 1;
}
 .main-menu .navigation > li.dropdown > a {
}
 .main-menu .navigation > li.dropdown > a:after {
}
 .main-menu .navigation > li > ul {
     border-top: 2px solid <?php echo RENK1;?>;
     position: absolute;
     left: 0px;
     top: 130%;
     width: 250px;
     padding: 0px;
     z-index: 100;
     visibility: hidden;
     opacity: 0;
     background: #ffffff;
     transition: all 500ms ease;
}
 .main-menu .navigation > li:hover > ul {
     top: 100%;
     opacity: 1;
     visibility: visible;
}
 .main-menu .navigation > li > ul > li {
     border-bottom: 1px solid #f4f4f4;
     display: block;
     float: none;
     margin: 0;
     padding: 0;
     position: relative;
     width: 100%;
}
 .main-menu .navigation > li > ul > li:last-child{
     border-bottom: none;
}
 .main-menu .navigation > li > ul > li > a {
     width: 100%;
     display: block;
     background: none;
     padding: 10px 0px 10px 10px;
     color: #303030;
     font-weight: 500;
     font-size: 14px;
     text-decoration: none;
     display: block;
     float: none;
     text-transform: capitalize;
     position: relative;
     transition: all 500ms ease;
     font-family: 'Roboto', sans-serif;
     z-index: 1;
}
 .main-menu .navigation > li > ul > li > a:first-child{
     padding-left: 20px;
}
 .main-menu .navigation > li > ul > li > a:after{
     display: none;
}
 .main-menu .navigation > li > ul > li > a:before {
     font-family: FontAwesome;
     content: '\f0da';
     position: absolute;
     top: 0;
     left: 0;
     width: 10px;
     height: 100%;
     font-size: 20px;
     color: #ffffff;
     line-height: 38px;
     font-weight: 400;
     text-align: left;
     transition: all 500ms ease;
     transform: translate3d(-2px, 0px, 0px);
     opacity: 0;
     z-index: -1;
}
 .main-menu .navigation > li > ul > li:hover > a {
     color: #ffffff;
     background-color: <?php echo RENK1;?>;
}
 .main-menu .navigation > li > ul > li:hover > a:before{
     transform: translate3d(0px, 0px, 0px);
     opacity: 1;
}
 .main-menu .navigation > li > ul > li.dropdown > a:after{
}
 .main-menu .navigation > li > ul > li.dropdown:hover > a:after{
}
 .main-menu .navigation > li > ul > li > ul{
}
 .main-menu .navigation > li > ul li:hover ul {
}
 .main-menu .navigation > li > ul > li ul li {
}
 .main-menu .navigation > li > ul > li ul li:first-child{
}
 .main-menu .navigation > li > ul > li ul li a{
}
 .main-menu .navigation > li > ul > li > ul > li:hover > a{
}
 .main-menu .nav-container > ul li.dropdown .dropdown-btn {
     position: absolute;
     right: 10px;
     top: 6px;
     width: 34px;
     height: 30px;
     border: 2px solid #ffffff;
     background: url(../images/icon/submenu-icon.png) center center no-repeat;
     background-size: 20px;
     cursor: pointer;
     z-index: 5;
     display: none;
     border-radius: 3px;
     -webkit-border-radius: 3px;
     -ms-border-radius: 3px;
     -o-border-radius: 3px;
     -moz-border-radius: 3px;
}
 .outer-search-box {
     float: right;
     position: absolute;
     top: 0;
     right: 15px;
     z-index: 5;
     display: block;
     padding: 25px 0;
}
 .outer-search-box .seach-toggle {
     border: 1px solid #efeded;
     width: 40px;
     height: 40px;
     background: transparent;
     color: #222222;
     cursor: pointer;
     display: block;
     font-size: 15px;
     line-height: 20px;
     margin: 0;
     padding: 10px 0px;
     position: relative;
     text-align: center;
     transition: all 500ms ease;
}
 .outer-search-box .seach-toggle:hover, .outer-search-box .seach-toggle.active{
     background:#8A5E99;
     border-color: <?php echo RENK1;?>;
     color: #fff;
}
 .search-box {
     background: <?php echo RENK1;?>;
     border-top: 2px dashed #05a710;
     opacity: 0;
     padding: 20px;
     position: absolute;
     right: 0px;
     top: 150%;
     transition: all 500ms ease 0s;
     visibility: hidden;
}
 .search-box.now-visible{
     top:100%;
     opacity:1;
     visibility:visible;
}
 .search-box .form-group{
     position:relative;
     padding:0px;
     margin:0px;
     width:100%;
     min-width:250px;
}
 .search-box .form-group input[type="search"] {
     background: #ffffff none repeat scroll 0 0;
     border: 1px solid #252525;
     color: #000;
     display: block;
     font-size: 13px;
     line-height: 24px;
     position: relative;
     transition: all 500ms ease 0s;
     width: 100%;
     height: 40px;
     padding-left: 15px;
     padding-right: 50px;
}
 .search-box .form-group input[type="search"]:focus{
     border-color:#05800d;
}
 .search-box .form-group button, .search-box .form-group input[type="submit"] {
     background: #252525;
     color: #fff;
     cursor: pointer;
     display: block;
     font-size: 13px;
     height: 40px;
     line-height: 40px;
     position: absolute;
     right: 0;
     top: 0;
     width: 40px;
     transition: all 500ms ease 0s;
}
 .search-box .form-group button:hover, .search-box .form-group input:focus + button{
     color:#fff;
     background: #05800d;
}
/*** ============================================= Rev Slider Wrapper style ============================================= ***/
 .rev_slider_wrapper .slide-content-box h2 {
     color: #fff;
     font-size: 30px;
     font-weight: 400;
     line-height: 40px;
     text-transform: none;
     font-family: 'Courgette', cursive;
}
 .rev_slider_wrapper .slide-content-box h1 {
     color: #ffffff;
     font-size: 60px;
     font-weight: 700;
     line-height: 66px;
     text-transform: none;
     font-family: 'Roboto', sans-serif;
}
 .rev_slider_wrapper .slide-content-box p{
     font-size: 18px;
     color: #f4f4f4;
     font-weight: 300;
     line-height: 26px;
     font-family: 'Rubik', sans-serif;
}
 .rev_slider_wrapper .slide-content-box.middle-slide h2{
     text-align: center;
}
 .rev_slider_wrapper .slide-content-box.middle-slide h1{
     text-align: center;
     color: #ffffff;
}
 .rev_slider_wrapper .slide-content-box.middle-slide p{
     text-align: center;
     color: #353535;
}
 .rev_slider_wrapper .slide-content-box.lastslide h2{
     margin: 0 0 8px;
}
 .rev_slider_wrapper .slide-content-box.lastslide h1{
     margin: 0 0 22px;
}
 .rev_slider_wrapper .slide-content-box.lastslide p{
     margin-bottom: 33px;
}
 .tparrows {
     background: #000000;
     border: 2px solid #f4f4f4;
     cursor: pointer;
     display: block;
     height: 50px;
     position: absolute;
     width: 50px;
     z-index: 1000;
     transition: all 500ms ease;
     border-radius: 4px;
}
 .tparrows:before{
     font-size:18px;
     font-weight: 700;
     color:#fff;
     display:block;
     line-height: 46px;
     text-align: center;
     transition: all 500ms ease;
}
 .tparrows:hover{
     background:#8A5E99;
     border-color: <?php echo RENK1;?>;
}
 .tparrows:hover:before{
     color: #333333;
}
 .rev_slider_wrapper .slotholder:before {
     content: '';
     position: absolute;
     top: 0;
     left: 0;
     right: 0;
     bottom: 0;
     background: rgba(0, 0, 0, 0.15);
     z-index: 9;
}
/*** ============================================= Welcome Area style ============================================= ***/
 .welcome-area {
     padding-top: 15px;
     padding-bottom: 80px;
     background: #ffffff;
     position: relative;
     overflow: hidden;
}
 .welcome-area .text-holder h4 {
     font-size: 18px;
     line-height: 26px;
     font-family: 'Courgette', cursive;
     color: #888888;
     margin-top: -4px;
}
 .welcome-area .inner-content {
     display: block;
     overflow: hidden;
     margin-top: 30px;
}
 .welcome-area .inner-content .single-item {
     float: left;
     width: 310px;
     padding-right: 30px;
}
 .welcome-area .inner-content .single-item.border {
     border-left: 1px solid #f5f4f3;
     padding-left: 30px;
}
 .welcome-area .inner-content .single-item h3 {
     margin: 0 0 15px;
}
 .welcome-area .text-holder .bottom {
     margin: 30px 0 0;
     position: relative;
}
 .welcome-area .text-holder .bottom .read-more-button {
     width: 180px;
}
 .welcome-area .text-holder .bottom .read-more-button a{
     padding: 12px 30px 12px;
}
 .welcome-area .text-holder .bottom .read-more-button, .welcome-area .text-holder .bottom .title{
     display: table-cell;
     vertical-align: middle;
}
 .welcome-area .text-holder .bottom .title{
     padding-left: 30px;
}
 .welcome-area .text-holder .bottom .title h2 {
     font-size: 24px;
     font-weight: 600;
     line-height: 28px;
}
 .welcome-area .text-holder .bottom .title h2 span{
     color: <?php echo RENK1;?>;
}
 .welcome-area .img-holder {
     margin-top: -75px;
}
 .welcome-area .img-holder img{
     width: 100%;
}
/*** ============================================= procedures Area style ============================================= ***/
 .procedures-area {
     background: #ffffff;
     padding-top: 80px;
     padding-bottom: 40px;
     position: relative;
}
 .procedures-area .arrow {
     position: absolute;
     left: 0px;
     width: 100%;
     height: auto;
     text-align: center;
     top: 0px;
}
 .procedures-area .iconbox-left-top {
     position: absolute;
     top: 50px;
     left: 70px;
}
 .procedures-area .iconbox-left-top span:before{
     font-size: 200px;
     line-height: 200px;
     color: rgba(0, 0, 0, .03);
}
 .procedures-area .iconbox-left-bottom {
     position: absolute;
     bottom: 40px;
     left: 30px;
}
 .procedures-area .iconbox-left-bottom span:before{
     font-size: 200px;
     line-height: 200px;
     color: rgba(0, 0, 0, .03);
}
 .procedures-area .iconbox-right-top {
     position: absolute;
     top: 20px;
     right: 40px;
}
 .procedures-area .iconbox-right-top span:before{
     font-size: 200px;
     line-height: 200px;
     color: rgba(0, 0, 0, .03);
}
 .procedures-area .iconbox-right-bottom {
     position: absolute;
     bottom: 50px;
     right: 50px;
}
 .procedures-area .iconbox-right-bottom span:before{
     font-size: 200px;
     line-height: 200px;
     color: rgba(0, 0, 0, .03);
}
 .procedures-area .single-item{
     margin-bottom: 30px;
}
 .procedures-area .single-item .img-holder {
     position: relative;
     overflow: hidden;
     display: block;
}
 .procedures-area .single-item .img-holder img {
     width: 100%;
}
 .procedures-area .single-item:hover .img-holder img {
}
 .procedures-area .single-item .img-holder .overlay-style-one{
     border-radius: 50%;
     width: 270px;
     margin-left: auto;
     margin-right: auto;
}
 .procedures-area .single-item .img-holder .overlay-style-one .icon-holder span:before {
     width: 75px;
     height: 75px;
     background: #ffffff;
     display: inline-block;
     border-radius: 50%;
     color: <?php echo RENK1;?>;
     font-size: 40px;
     line-height: 40px;
     padding: 17px 0;
}
 .procedures-area .single-item:hover .img-holder .overlay-style-one {
     -webkit-transform: scale(1);
     transform: scale(1);
     opacity: 1;
}
 .procedures-area .single-item .text-holder{
     position: relative;
}
 .procedures-area .single-item .text-holder .show-content {
     padding: 23px 0 7px;
     background: transparent;
     transition: all 500ms ease;
     transition-delay: 0.10s;
}
 .procedures-area .single-item:hover .text-holder .show-content{
     transform: scale(0);
}
 .procedures-area .single-item .text-holder .show-content .iocn-holder span:before {
     color: <?php echo RENK1;?>;
     font-size: 40px;
     line-height: 40px;
}
 .procedures-area .single-item .text-holder .show-content h3 {
     margin: 15px 0 0;
}
 .procedures-area .single-item .text-holder .hover-content {
     position: absolute;
     background: transparent;
     top: 0;
     left: 0;
     width: 100%;
     height: 100%;
     transform: scale(0);
     transition: all 500ms ease 0.5s;
}
 .procedures-area .single-item:hover .text-holder .hover-content{
     -webkit-transform: scale(1);
     transform: scale(1);
}
 .procedures-area .single-item .text-holder .hover-content h3 {
     margin: 27px 0 17px;
     color: <?php echo RENK1;?>;
}
 .procedures-area .single-item .text-holder .hover-content .border{
     width: 50px;
     height: 1px;
     background: <?php echo RENK1;?>;
     display: block;
     margin: 0 auto;
}
 .procedures-area .single-item .text-holder .hover-content p{
     margin: 14px 0 0;
}
/*** ============================================= slogan Area style ============================================= ***/
 .slogan-area {
     background-position: center top;
     background-repeat: no-repeat;
     background-size: cover;
     padding-bottom: 80px;
     padding-top: 75px;
     position: relative;
     z-index: 1;
     overflow: hidden;
}
 .slogan-area h1{
     color: #ffffff;
     font-size: 36px;
     font-weight: 600;
     line-height: 42px;
     margin: 0 0 13px;
}
 .slogan-area p{
     color: #ffffff;
     font-size: 18px;
     font-weight: 400;
     line-height: 26px;
     margin: 0;
     font-family: 'Courgette', cursive;
}
 .slogan-area a{
     width: 230px;
     margin: 33px auto 0;
     padding: 12px 0;
}
/*** ============================================= choosing Area style ============================================= ***/
 .choosing-area {
     padding-top: 15px;
     padding-bottom: 10px;
}
 .choosing-area ul{
     display: block;
     overflow: hidden;
}
 .choosing-area .single-item {
     position: relative;
     overflow: hidden;
     display: block;
     width: 360px;
     float: left;
     margin-right: 20px;
     padding-right: 25px;
     padding-bottom: 30px;
     margin-bottom: 35px;
     padding-left: 90px;
}
 .choosing-area li:after {
     position: absolute;
     bottom: 30px;
     top: 0;
     right: 0;
     width: 1px;
     height: initial;
     border: 1px dashed #e9e9e9;
     content: "";
}
 .choosing-area li:last-child:after{
     display: none;
}
 .choosing-area .single-item.bdr-btm:before {
     position: absolute;
     bottom: 0px;
     left: 0;
     right: 30px;
     height: 1px;
     border: 1px dashed #e9e9e9;
     content: "";
}
 .choosing-area .single-item .iocn-holder{
     position: absolute;
     top: 0;
     left: 0;
     width: 90px;
     height: 90px;
     background: <?php echo RENK1;?>;
     display: block;
     border-radius: 50%;
     text-align: center;
     padding: 5px;
}
 .choosing-area .single-item .iocn-holder:before {
     content: "\f0d7";
     font-family: FontAwesome;
     color: <?php echo RENK1;?>;
     font-size: 25px;
     position: absolute;
     bottom: -15px;
     left: 0;
     right: 0;
     text-align: center;
     transition: all 900ms ease;
}
 .choosing-area .single-item:hover .iocn-holder:before {
     transform: translate3d(0px, -10px, 0px);
     opacity: 0;
}
 .choosing-area .single-item .iocn-holder:after {
     content: "\f0da";
     font-family: FontAwesome;
     height: 20px;
     color: <?php echo RENK1;?>;
     font-size: 25px;
     position: absolute;
     right: 0px;
     top: 50%;
     bottom: 0;
     text-align: center;
     margin-top: -10px;
     opacity: 0;
     transition: all 0.5s;
}
 .choosing-area .single-item:hover .iocn-holder:after {
     right: -8px;
     opacity: 1;
}
 .choosing-area .single-item .iocn-holder .inner-border {
     display: block;
     overflow: hidden;
     height: 100%;
     width: 100%;
     border: 2px dashed #ffffff;
     border-radius: 50%;
}
 .choosing-area .single-item .iocn-holder span:before {
     font-size: 35px;
     color: #fff;
     line-height: 30px;
     display: block;
     padding: 23px 0;
}
 .choosing-area .single-item .text-holder{
     padding-left: 20px;
}
 .choosing-area .single-item .text-holder h3 {
     margin: 0 0 16px;
     transition: all 0.7s;
}
 .choosing-area .single-item:hover .text-holder h3{
     color: <?php echo RENK1;?>;
}
 .choosing-area .single-item .text-holder p{
     margin: 0;
}
/*** ============================================= Testimonial Area style ============================================= ***/
 .testimonial-area {
     background-position: center top;
     background-repeat: no-repeat;
     background-size: cover;
     padding-bottom: 30px;
     padding-top: 80px;
     position: relative;
     z-index: 1;
     overflow: hidden;
}
 .testimonial-area .mar-top{
     margin-top: 40px;
}
 .testimonial-area .more-button {
     margin-top: 6px;
}
 .testimonial-area .more-button a {
     border: 2px solid <?php echo RENK1;?>;
     height: 50px;
     width: 170px;
     display: block;
     text-align: center;
     border-radius: 30px;
     color: <?php echo RENK1;?>;
     font-size: 14px;
     font-weight: 700;
     text-transform: uppercase;
     line-height: 48px;
     font-family: 'Roboto', sans-serif;
     transition: all 500ms ease;
}
 .testimonial-area .more-button a:hover{
     background: <?php echo RENK1;?>;
     color: #fff;
}
 .single-testimonial-item {
     position: initial;
     overflow: hidden;
     background: transparent;
     margin-bottom: 50px;
     display: block;
     padding: 0px;
}
 .single-testimonial-item .img-holder {
     background: #ffffff;
     border: 5px solid #ffffff;
     border-radius: 50%;
     display: block;
     height: 85px;
     margin: 0 auto;
     overflow: hidden;
     width: 85px;
     z-index: 1;
     position: relative;
     -webkit-transition: all 0.7s ease;
     transition: all 0.7s ease;
     position: absolute;
     top: -45px;
     left: 0;
     right: 0;
}
 .single-testimonial-item:hover .img-holder{
     background: <?php echo RENK1;?>;
     border-color: <?php echo RENK1;?>;
}
 .single-testimonial-item .text-holder {
     padding-top: 65px;
     transition: all 0.7s ease;
     background: #ffffff;
     padding-bottom: 15px;
     padding-left: 20px;
     padding-right: 20px;
}
 .single-testimonial-item:hover .text-holder{
     border-color: #e7e3e3;
}
 .single-testimonial-item .text-holder h3 {
     color: <?php echo RENK1;?>;
     font-size: 20px;
     font-weight: 400;
     font-family: 'Courgette', cursive;
     text-transform: none;
     margin: 0 0 12px;
}
 .single-testimonial-item .text-holder p {
     margin: 0 0 23px;
}
 .single-testimonial-item .border{
     width: 190px;
     height: 1px;
     background: #f5f4f4;
     display: block;
     margin: 0 auto;
}
 .single-testimonial-item .name h3 {
     padding-top: 19px;
     font-size: 18px;
     color: #303030;
     font-weight: 600;
     font-family: 'Roboto', sans-serif;
}
/*** ============================================= Appointment-area style ============================================= ***/
 .appointment-area {
     position: relative;
     padding-top: 20px;
     padding-bottom: 40px;
}
 .appointment-area .icon-holder {
     position: absolute;
     bottom: 0px;
     right: -50px;
}
 .appointment-area .icon-holder span:before{
     font-size: 200px;
     color: #eff1ef;
}
 .appointment-area .sec-title{
     padding-bottom: 76px;
}
 .appointment-box{
     position: relative;
     padding-left: 330px;
}
 .appointment-box .experince {
     position: absolute;
     top: 0;
     left: 0;
     width: 330px;
     min-height: 340px;
     background: #ffffff;
     border: 3px solid #ebf8ec;
     z-index: 2;
     padding-top: 30px;
}
 .appointment-box .experince h3{
     color: #303030;
     font-size: 18px;
     font-weight: 600;
     line-height: 28px;
     margin: 0 0 10px;
}
 .appointment-box .experince h3 span{
     color: <?php echo RENK1;?>;
}
 .appointment-box .experince .inner-content{
     width: 170px;
     margin: 0 auto 0;
     position: relative;
     overflow: hidden;
     display: block;
}
 .appointment-box .experince .inner-content span:before {
     font-size: 165px;
     line-height: 165px;
     color: #ecf6ec;
     font-weight: 300;
}
 .appointment-box .experince .inner-content h1 {
     position: absolute;
     top: 50px;
     left: 0;
     right: 0;
     font-size: 35px;
     line-height: 35px;
     color: <?php echo RENK1;?>;
     font-weight: 700;
}
 .appointment-box .experince .inner-content h3 {
     color: <?php echo RENK1;?>;
     font-size: 17px;
     position: absolute;
     bottom: 40px;
     left: 0;
     right: 0;
}
 .appointment-box .experince p{
     margin: 0;
}
 .appointment-box .form {
     border: 1px solid #f5f4f3;
     position: relative;
     top: -40px;
     padding-top: 39px;
     padding-left: 70px;
     left: -40px;
     margin-right: -40px;
     padding-right: 30px;
     min-height: 420px;
}
 .appointment-box .form .input-box{
     position: relative;
     overflow: hidden;
     display: block;
}
 .appointment-box .form .input-box input[type="text"], .appointment-box .form .input-box input[type="email"], .appointment-box .form .input-box input[type="date"], .appointment-box .form .input-box input[type="time"], .appointment-box .form textarea{
     background: #ffffff;
     border: 1px solid #f4f4f4;
     color: #888888;
     display: block;
     font-size: 14px;
     height: 50px;
     padding: 0 15px;
     width: 100%;
     transition: all 500ms ease;
     box-shadow: none;
     line-height: 44px;
     font-family: 'Open Sans', sans-serif;
     margin-bottom: 10px;
}
 .appointment-box .form textarea{
     height: 95px;
     margin-bottom: 10px;
     padding: 10px 20px;
     margin-top: 23px;
}
 .appointment-box .form .input-box input[type="text"]:focus{
     border-color: <?php echo RENK1;?>;
}
 .appointment-box .form .input-box input[type="email"]:focus{
     border-color: <?php echo RENK1;?>;
}
 .appointment-box .form textarea:focus{
     border-color: <?php echo RENK1;?>;
}
 .appointment-box .form button {
     padding: 12px 35px 10px;
     width: 220px;
     margin: 0 auto;
}
 .quick-contact {
     overflow: hidden;
}
 .quick-contact .title{
     padding-bottom: 20px;
}
 .quick-contact .title h2{
     color: <?php echo RENK1;?>;
     font-size: 26px;
     font-weight: 400;
     font-family: 'Courgette', cursive;
}
 .quick-contact .contact-info{
}
 .quick-contact .contact-info li {
     border-bottom: 1px solid #f4f4f4;
     margin-bottom: 21px;
     padding-left: 35px;
     padding-bottom: 21px;
     position: relative;
}
 .quick-contact .contact-info li:last-child{
     margin-bottom: 0;
     padding-bottom: 0;
     border-bottom: none;
}
 .quick-contact .contact-info li .icon-holder {
     position: absolute;
     top: 5px;
     left: 0;
}
 .quick-contact .contact-info li .icon-holder span:before{
     color: <?php echo RENK1;?>;
     font-size: 20px;
     line-height: 20px;
     font-weight: 500;
}
 .quick-contact .contact-info li .text-holder {
}
 .quick-contact .contact-info li .text-holder h5 {
     color: #888888;
     font-size: 14px;
     font-weight: 400;
     line-height: 24px;
     font-family: 'Open Sans', sans-serif;
}
 .quick-contact .contact-info li .text-holder h5 span {
     color: #333333;
     font-weight: 400;
}
/*** ============================================= Pricing Plan Area style ============================================= ***/
 .pricing-plan-area {
     background-position: center top;
     background-repeat: no-repeat;
     background-size: cover;
     padding-bottom: 40px;
     padding-top: 80px;
     position: relative;
     z-index: 1;
     overflow: hidden;
}
 .pricing-plan-area .sec-title h1 {
     color: #ffffff;
}
 .pricing-plan-area .single-price-box {
     background: #ffffff;
     display: block;
     margin-bottom: 40px;
     padding: 0 0px 40px;
     position: relative;
     transition: all 500ms ease;
     z-index: 1;
}
 .pricing-plan-area .single-price-box:hover{
     -webkit-transform:scale(1.1,1.1);
     -ms-transform:scale(1.1,1.1);
     -o-transform:scale(1.1,1.1);
     -moz-transform:scale(1.1,1.1);
     transform:scale(1.1,1.1);
}
 .pricing-plan-area .single-price-box:before {
     position: absolute;
     top: 0;
     left: 0;
     width: 100%;
     height: 0%;
     background: #0aab15;
     content: "";
     z-index: -1;
     transition: all 500ms ease;
     transition-delay: 0.15s;
}
 .pricing-plan-area .single-price-box:hover::before{
     height: 100%;
     opacity: 1;
}
 .pricing-plan-area .single-price-box .table-header {
     background: <?php echo RENK1;?>;
     display: block;
     position: relative;
     overflow: hidden;
}
 .pricing-plan-area .single-price-box .table-header .package {
     display: block;
     padding: 32px 0 50px;
}
 .pricing-plan-area .single-price-box .table-header .package h1 {
     color: #ffffff;
     font-size: 80px;
     line-height: 80px;
     font-weight: 400;
     font-family: 'Roboto', sans-serif;
     position: relative;
     transition: all 500ms ease;
}
 .pricing-plan-area .single-price-box:hover .table-header .package h1{
     color: #000000;
}
 .pricing-plan-area .single-price-box .table-header .package h1 span {
     font-size: 24px;
     font-weight: 400;
     display: inline-block;
     line-height: 24px;
}
 .pricing-plan-area .single-price-box .table-header .package h1 b {
     font-size: 20px;
     font-weight: 400;
     line-height: 45px;
}
 .pricing-plan-area .single-price-box .pack-name {
     position: absolute;
     top: 143px;
     left: 0;
     background: #ffffff;
     width: 180px;
     border: 1px solid #f4f4f4;
     height: 45px;
     border-radius: 30px;
     right: 0;
     margin: 0 auto;
}
 .pricing-plan-area .single-price-box .pack-name h3 {
     color: <?php echo RENK1;?>;
     font-size: 22px;
     font-weight: 400;
     display: block;
     padding: 10px 0;
}
 .pricing-plan-area .single-price-box .price-list {
     display: block;
}
 .pricing-plan-area .single-price-box .price-list ul {
     display: block;
     padding-top: 46px;
}
 .pricing-plan-area .single-price-box .price-list ul li {
     color: #888888;
     font-size: 14px;
     font-weight: 400;
     border-bottom: 1px solid #f4f4f4;
     margin-bottom: 13px;
     padding-bottom: 13px;
     font-family: 'Open Sans', sans-serif;
     transition: all 500ms ease;
}
 .pricing-plan-area .single-price-box .price-list ul li:last-child{
     border-bottom: none;
     margin-bottom: 0;
     padding-bottom: 0;
}
 .pricing-plan-area .single-price-box:hover .price-list ul li{
     color: #fff;
}
 .pricing-plan-area .single-price-box .table-footer {
     margin: 33px 0 0;
}
 .pricing-plan-area .single-price-box .table-footer a {
     padding: 10px 0px 10px;
     width: 170px;
     margin: 0 auto;
     background: #fff;
     border: 2px solid <?php echo RENK1;?>;
     color: <?php echo RENK1;?>;
}
/*** ============================================= Latest blog area style ============================================= ***/
 .latest-blog-area {
     position: relative;
     overflow: hidden;
}
 .latest-blog-area .readmore-blog {
     margin-top: 5px;
}
 .latest-blog-area .readmore-blog a {
     padding: 11px 30px 11px;
}
 .single-blog-item {
     position: relative;
     overflow: hidden;
     display: block;
     min-height: 457px;
     border-bottom: 1px solid #f4f4f4;
     background: #ddd;
}
 .single-blog-item .img-holder{
     overflow: hidden;
     position: relative;
     display: block;
}
 .single-blog-item .img-holder img {
     transform: scale(1.1, 1.1);
     transition: all 0.5s ease 0s;
     width: 100%;
}
 .single-blog-item:hover .img-holder .overlay-style-one{
     -webkit-transform: scale(1);
     transform: scale(1);
     opacity: 1;
}
 .single-blog-item .img-holder .overlay-style-one .box .content a i{
     background: rgba(0, 0, 0, 0.85) none repeat scroll 0 0;
     border: 1px solid transparent;
     border-radius: 3%;
     color: #ffffff;
     display: inline-block;
     font-size: 15px;
     height: 40px;
     line-height: 42px;
     transition: all 500ms ease 0s;
     width: 40px;
}
 .single-blog-item .img-holder .overlay-style-one .box .content a:hover i{
     background: #ffffff;
     color: #252525;
}
 .single-blog-item:hover .img-holder img {
     transform: scale(1, 1);
}
 .single-blog-item .img-holder .categories {
     background: <?php echo RENK1;?>;
     position: absolute;
     bottom: 15px;
     left: 15px;
     width: 110px;
     height: 35px;
     transform: translate3d(0px, 0%, 0px);
     transition: all 500ms ease;
}
 .single-blog-item:hover .img-holder .categories {
     transform: translate3d(0px, -89px, 0px);
}
 .single-blog-item .img-holder .categories a {
     text-align: center;
     padding: 6px 0;
     color: #ffffff;
     font-size: 14px;
     font-weight: 700;
     font-family: 'Roboto', sans-serif;
     text-transform: uppercase;
     display: block;
}
 .single-blog-item .text-holder {
     border: 1px solid #f4f4f4;
     border-top: none;
     padding-left: 20px;
     padding-right: 20px;
     padding-bottom: 22px;
     text-align: center;
     transition: all 500ms ease;
     bottom: -89px;
     position: absolute;
     width: 100%;
     left: 0;
     background: #ffffff;
     z-index: 3;
     transition: all 500ms ease;
}
 .single-blog-item:hover .text-holder {
     bottom: 0;
     border-bottom: none;
}
 .single-blog-item .text-holder .meta-info {
     overflow: hidden;
     padding-top: 25px;
     text-align: center;
}
 .single-blog-item .text-holder .meta-info li {
     display: inline-block;
     float: none;
     line-height: 16px;
     border-right: 1px solid #dfdfdf;
     padding-right: 10px;
     margin-right: 5px;
}
 .single-blog-item .text-holder .meta-info li:last-child{
     margin-right: 0;
     padding-right: 0;
     border-right: none;
}
 .single-blog-item .text-holder .meta-info li a{
     color: #888888;
     font-size: 14px;
     font-weight: 400;
}
 .single-blog-item .text-holder .meta-info li a:hover{
     color: <?php echo RENK1;?>;
}
 .single-blog-item .text-holder .blog-title {
     color: #404040;
     font-size: 18px;
     font-weight: 600;
     line-height: 28px;
     padding: 10px 0 10px;
     display: block;
     transition: all 500ms ease;
}
 .single-blog-item .text-holder .blog-title:hover{
     color: <?php echo RENK1;?>;
}
 .single-blog-item .text-holder .text {
}
 .single-blog-item .text-holder .text p {
     margin: 0;
}
 .latest-blog-area .single-blog-item:hover{
}
/*** ============================================= Footer area style ============================================= ***/
 .footer-area {
     background: <?php echo RENK3;?>;
     padding-top: 35px;
     padding-bottom: 0px;
     position: relative;
}
 .footer-area .arrow {
     position: absolute;
     left: 0px;
     width: 100%;
     height: auto;
     text-align: center;
     top: 0px;
}
 .footer-area .footer-image-box {
     position: absolute;
     left: 15px;
     bottom: -30px;
     opacity: 0.05;
}
 .footer-area .footer-logo {
     padding-bottom: 10px;
     margin-bottom: 0px;
}
 .footer-area .footer-logo a {
     display: inline-block;
	     width: 210px;
    margin-top: 18px;
	
}
 .single-footer-widget {
     position: relative;
     overflow: hidden;
}
 .single-footer-widget.mar-top{
     margin-top: 20px;
}
 .single-footer-widget.martop-minus {
     margin-top: -20px;
}
 .single-footer-widget .title {
     padding-bottom: 40px;
     margin-top: -2px;
}
 .single-footer-widget .title h3 {
     color: #ffffff;
     font-size: 18px;
     font-weight: 600;
     text-transform: uppercase;
}
 .single-footer-widget .our-info{
     overflow: hidden;
     margin-top: -9px;
}
 .single-footer-widget .our-info p{
     color: #888888;
     font-size: 14px;
     margin: 0;
}
 .single-footer-widget .footer-contact-info {
     overflow: hidden;
     display: block;
     margin: 25px 0 0;
}
 .single-footer-widget .footer-contact-info li {
     padding-left: 40px;
     position: relative;
     border-bottom: 1px solid #212121;
     padding-bottom: 17px;
     margin-bottom: 17px;
}
 .single-footer-widget .footer-contact-info li:last-child{
     border: none;
     padding-bottom: 0;
     margin-bottom: 0;
}
 .single-footer-widget .footer-contact-info li .icon-holder {
     position: absolute;
     top: 4px;
     left: 0;
}
 .single-footer-widget .footer-contact-info li .icon-holder span:before{
     color: <?php echo RENK1;?>;
     font-size: 20px;
     line-height: 20px;
}
 .single-footer-widget .footer-contact-info li .icon-holder span.flaticon-location:before{
     position: relative;
     top: 3px;
}
 .single-footer-widget .footer-contact-info li .text-holder{
}
 .single-footer-widget .footer-contact-info li .text-holder h5{
     color: #888888;
     font-size: 14px;
     font-weight: 400;
     line-height: 24px;
     font-family: 'Open Sans', sans-serif;
}
 .single-footer-widget .usefull-links {
     overflow: hidden;
     margin-top: -5px;
}
 .single-footer-widget .usefull-links.fl-lft {
     float: left;
     width: 130px;
     border-right: 1px solid #212121;
     padding-right: 40px;
     margin-right: 35px;
}
 .single-footer-widget .usefull-links li {
     margin-bottom: 20px;
     line-height: 14px;
}
 .single-footer-widget .usefull-links li:last-child{
     margin-bottom: 0px;
}
 .single-footer-widget .usefull-links li a{
     position: relative;
     color: #888888;
     font-size: 14px;
     font-weight: 400;
     transition: all 500ms ease;
}
 .single-footer-widget .usefull-links li a:hover{
     color: <?php echo RENK1;?>;
     padding-left:5px;
     text-decoration: underline;
}
 .single-footer-widget .latest-post {
     margin-top: -5px;
}
 .single-footer-widget .latest-post .single-post {
     position: relative;
     margin-bottom: 28px;
     padding-bottom: 28px;
     border-bottom: 1px solid #212121;
     min-height: 70px;
}
 .single-footer-widget .latest-post .single-post:last-child{
     margin-bottom: 0;
     padding-bottom: 0;
     border-bottom: none;
}
 .single-footer-widget .latest-post .single-post .img-holder {
     width: 70px;
}
 .single-footer-widget .latest-post .single-post .img-holder img {
     transition: all 0.5s ease 0s;
     width: 100%;
}
 .single-footer-widget .latest-post .single-post .img-holder, .single-footer-widget .latest-post .single-post .text-holder{
     display: table-cell;
     vertical-align: middle;
}
 .single-footer-widget .latest-post .single-post .text-holder {
     padding-left: 20px;
     position: relative;
}
 .single-footer-widget .latest-post .single-post .text-holder a.post-title{
     color: #888888;
     font-size: 14px;
     line-height: 24px;
     font-weight: 400;
     font-family: 'Open Sans', sans-serif;
     transition: all 500ms ease;
}
 .single-footer-widget .latest-post .single-post .text-holder a.post-title:hover{
     color: <?php echo RENK1;?>;
}
 .single-footer-widget .latest-post .single-post .text-holder .post-info {
     overflow: hidden;
     margin: 3px 0 0;
}
 .single-footer-widget .latest-post .single-post .text-holder .post-info span {
     color: <?php echo RENK1;?>;
     font-size: 14px;
}
 .single-footer-widget .more-news{
     overflow: hidden;
     margin-top: 25px;
}
 .single-footer-widget .more-news a{
     color: #ffffff;
     font-size: 14px;
     font-weight: 700;
     text-transform: uppercase;
     font-family: 'Roboto', sans-serif;
     transition: all 500ms ease;
}
 .single-footer-widget .more-news a:hover{
     color: <?php echo RENK1;?> 
}
 .single-footer-widget .more-news a i{
     display: inline-block;
     padding-left: 3px;
     font-size: 14px;
     transition: all 500ms ease;
}
 .single-footer-widget .more-news a:hover i{
     padding-left: 6px;
}
 .single-footer-widget .newsletter-box {
     margin-top: -9px;
     margin-bottom: 40px;
}
 .single-footer-widget .newsletter-box p{
     margin: 0;
}
 .single-footer-widget .newsletter-box .newsletter-form {
     position: relative;
     overflow: hidden;
     display: block;
}
 .single-footer-widget .newsletter-box form.newsletter-form {
     position: relative;
     margin-top: 10px;
}
 .single-footer-widget .newsletter-box form.newsletter-form input[type="text"] {
     background: #151515;
     border: 1px solid #212121;
     color: #7d7a7a;
     display: block;
     font-size: 14px;
     font-weight: 500;
     height: 45px;
     letter-spacing: 1px;
     padding-left: 50px;
     padding-right: 55px;
     position: relative;
     -webkit-transition: all 500ms ease 0s;
     transition: all 500ms ease 0s;
     width: 100%;
}
 .single-footer-widget .newsletter-box form.newsletter-form button {
     background: <?php echo RENK1;?> none repeat scroll 0 0;
     color: #fff;
     display: block;
     height: 45px;
     padding: 9px 0;
     position: absolute;
     right: 0;
     text-align: center;
     top: 0;
     -webkit-transition: all 500ms ease 0s;
     transition: all 500ms ease 0s;
     width: 45px;
}
 .single-footer-widget .newsletter-box form.newsletter-form button i {
     font-size: 14px 
}
 .single-footer-widget .newsletter-box form.newsletter-form input[type="text"]:focus {
     border: 1px solid #424141;
     background: #fff;
     color: #000;
}
 .single-footer-widget .newsletter-box form.newsletter-form input[type="text"]:focus + button, .single-footer-widget .newsletter-box form.newsletter-form button:hover {
     background: #424141 none repeat scroll 0 0;
     color: #fff;
}
 .single-footer-widget .newsletter-box form.newsletter-form .envelope {
     position: absolute;
     top: 13px;
     left: 0;
     width: 40px;
     height: 20px;
     display: block;
     text-align: center;
     border-right: 1px solid #1b1c1e;
}
 .single-footer-widget .newsletter-box form.newsletter-form .envelope i {
     color: #48494c;
     font-size: 14px;
     display: block;
     line-height: 18px;
}
 .single-footer-widget .working-hours {
     overflow: hidden;
     display: block;
     padding: 0 20px;
     background: #151515;
     border: 1px solid #212121;
     margin-top: -14px;
}
 .single-footer-widget .working-hours li{
     border-bottom: 1px solid #212121;
     line-height: 40px;
}
 .single-footer-widget .working-hours li:last-child{
     border-bottom: none;
}
 .single-footer-widget .working-hours li span{
     float: right;
}
 .single-footer-widget .working-hours li span.closed{
     color: <?php echo RENK1;?>;
}
/*** ============================================= Footer Bottom area style ============================================= ***/
 .footer-bottom-area {
     background: <?php echo RENK2;?>;
     padding: 20px 0 20px;
}
 .copyright-text {
     padding: 7px 0;
}
 .copyright-text p {
     margin: 0;
     color: #888888;
     font-size: 14px;
     font-weight: 400;
     font-family: 'Roboto', sans-serif;
     line-height: 26px;
}
 .copyright-text p a{
     font-weight: 500;
     color: <?php echo RENK1;?>;
     transition: all 500ms ease;
}
 .copyright-text p a:hover{
     color: #888888;
}
 .footer-bottom-area .footer-social-links {
     overflow: hidden;
     float: right;
}
 .footer-bottom-area .footer-social-links li{
     display: inline-block;
     float: left;
     margin-right: 10px;
}
 .footer-bottom-area .footer-social-links li:last-child{
     margin-right: 0;
}
 .footer-bottom-area .footer-social-links li a i{
     height: 40px;
     width: 40px;
     border: 2px solid #323232;
     display: block;
     border-radius: 50%;
     color: #999999;
     font-size: 14px;
     text-align: center;
     line-height: 38px;
     transition: all 500ms ease;
}
 .footer-bottom-area .footer-social-links li a:hover i{
     background: <?php echo RENK1;?>;
     color: #fff;
     border-color: <?php echo RENK1;?>;
}
/*** ============================================= Breadcrumb area style ============================================= ***/
 .breadcrumb-area {
     background-position: center top;
     background-repeat: no-repeat;
     background-size: cover;
     padding-top: 75px;
     padding-bottom: 60px;
     position: relative;
     z-index: 1;
}
 .breadcrumb-area::before {
         background: #1e1e1e26;
     background-position: center top;
     content: "";
     height: 100%;
     left: 0;
     position: absolute;
     top: 0;
     width: 100%;
     z-index: -1;
}
 .breadcrumb-area .breadcrumbs {
}
 .breadcrumb-area .breadcrumbs h1 {
     color: #ffffff;
     font-size: 40px;
     font-weight: 600;
     line-height: 50px;
     text-transform: capitalize;
     text-align: center;
}
 .breadcrumb-bottom-area{
     position: relative;
     overflow: hidden;
     background: #ffffff;
     padding: 18px 0 15px;
     border-top: 1px solid #f4f4f4;
     border-bottom: 1px solid #f4f4f4;
}
 .breadcrumb-bottom .left ul{
}
 .breadcrumb-bottom .left ul li{
     color: <?php echo RENK1;?>;
     font-weight: 600;
     display: inline-block;
     margin-right: 6px;
     line-height: 20px;
     font-size: 16px;
     font-weight: 400;
     font-family: 'Roboto', sans-serif;
}
 .breadcrumb-bottom .left ul li:last-child{
     margin-right: 0;
}
 .breadcrumb-bottom .left ul li a{
     color: #303030;
     text-transform: capitalize;
     font-family: 'Roboto', sans-serif;
     transition: all 500ms ease;
}
 .breadcrumb-bottom .left ul li.active a{
     color: <?php echo RENK1;?>;
}
 .breadcrumb-bottom .left ul li a:hover{
     color: <?php echo RENK1;?>;
}
 .breadcrumb-bottom .left ul li i{
     font-size: 16px;
     color: <?php echo RENK1;?>;
}
 .breadcrumb-bottom .right span{
     color: <?php echo RENK1;?>;
     font-size: 16px;
     font-weight: 400;
     font-family: 'Open Sans', sans-serif;
     text-transform: capitalize;
     transition: all 500ms ease;
}
 .breadcrumb-bottom .right span i {
     font-size: 16px;
     display: inline-block;
     padding-right: 6px;
}
 .breadcrumb-bottom .right a {
     display: inline-block;
}
 .breadcrumb-bottom .right span:hover{
     color: #303030;
}
/*** ============================================= Fact counter Area style ============================================= ***/
 .fact-counter-area {
     background-position: center top;
     background-repeat: no-repeat;
     background-size: cover;
     padding-top: 80px;
     padding-bottom: 47px;
     position: relative;
     z-index: 1;
}
 .fact-counter-area .single-item {
     width: 220px;
     margin: 0 auto 30px;
}
 .fact-counter-area .single-item .icon-holder {
     width: 220px;
     height: 220px;
     border-radius: 50%;
     display: block;
     padding: 45px 0 45px;
     overflow: hidden;
     position: relative;
     background: transparent;
     border: 2px solid #142818;
     transition: all 500ms ease;
}
 .fact-counter-area .single-item:hover .icon-holder{
     border-color: <?php echo RENK1;?>;
}
 .fact-counter-area .single-item .icon-holder span:before{
     font-size: 65px;
     line-height: 65px;
     color: <?php echo RENK1;?>;
}
 .fact-counter-area .single-item h1{
     margin-top: 18px;
}
 .fact-counter-area .single-item h1 span{
     color: <?php echo RENK1;?>;
     font-size: 48px;
     font-weight: 400;
}
 .fact-counter-area .single-item h3 {
     color: #ffffff;
     font-size: 18px;
     font-weight: 500;
     text-transform: uppercase;
     margin: 27px 0 0;
}
/*** ============================================= Facilities Area style ============================================= ***/
 .facilities-area {
     position: relative;
     background: #ffffff;
     overflow: hidden;
}
 .facilities-area .text-holder {
     padding-top: 95px;
     padding-bottom: 0px;
     overflow: hidden;
}
 .facilities-area .text-holder .sec-title{
     padding-bottom: 50px;
}
 .facilities-area .text-holder .sec-title p {
     margin: 30px 0 0;
     color: #888888;
     font-size: 18px;
     font-family: 'Courgette', cursive;
}
 .facilities-area .text-holder ul {
     overflow: hidden;
     display: block;
}
 .facilities-area .text-holder ul li{
     position: relative;
     overflow: hidden;
     display: block;
}
 .facilities-area .text-holder ul li:after {
     position: absolute;
     bottom: 20px;
     top: 0;
     right: 0;
     width: 1px;
     height: initial;
     border-right: 1px solid #e7f2e7;
     content: "";
}
 .facilities-area .text-holder ul li:last-child:after{
     display: none;
}
 .facilities-area .text-holder ul .single-item {
     position: relative;
     overflow: hidden;
     display: block;
     width: 170px;
     float: left;
     margin-right: 20px;
     padding-right: 20px;
     padding-bottom: 35px;
     margin-bottom: 35px;
     text-align: center;
}
 .facilities-area .text-holder ul .single-item.bdr-btm:before {
     position: absolute;
     bottom: 0px;
     left: 0;
     right: 20px;
     height: 1px;
     height: 100%;
     border-bottom: 1px solid #e7f2e7;
     content: "";
}
 .facilities-area .text-holder ul .single-item .iocn-holder {
     margin: 0 0 15px;
}
 .facilities-area .text-holder ul .single-item .iocn-holder span:before{
     color: <?php echo RENK1;?>;
     font-size: 50px;
     line-height: 50px;
}
 .facilities-area .text-holder ul .single-item .title-holder h3 {
}
 .facilities-area .img-holder {
     background: #ffffff;
     padding: 40px 0 40px;
}
 .facilities-area .img-holder img {
     max-width: none;
     float: left;
}
/*** ============================================= Experts Area style ============================================= ***/
 .experts-area {
     padding-top: 80px;
     padding-bottom: 40px;
}
 .single-team-member{
     margin-bottom: 40px;
}
 .single-team-member .inner-content{
     position: relative;
}
 .single-team-member .img-holder{
     overflow: hidden;
     position: relative;
     display: block;
}
 .single-team-member .img-holder img{
     transform: scale(1.1, 1.1);
     transition: all 0.5s ease 0s;
     width: 100%;
}
 .single-team-member:hover .img-holder img{
     transform: scale(1, 1);
}
 .single-team-member .img-holder .overlay-style-one .box .content ul{
}
 .single-team-member .img-holder .overlay-style-one .box .content ul li{
     display: inline-block;
     margin: 0 5px;
}
 .single-team-member .img-holder .overlay-style-one .box .content ul li a i{
     height: 40px;
     width: 40px;
     border-radius: 50%;
     border: 2px solid #fff;
     color: #fff;
     font-size: 14px;
     line-height: 36px;
     transition: all 500ms ease;
}
 .single-team-member .img-holder .overlay-style-one .box .content ul li a:hover i{
     background: <?php echo RENK1;?>;
}
 .single-team-member:hover .img-holder .overlay-style-one{
     -webkit-transform: scale(1);
     transform: scale(1);
     opacity: 1;
}
 .single-team-member .icon-holder {
     position: absolute;
     bottom: -39px;
     left: 0;
     right: 0;
     text-align: center;
}
 .single-team-member .icon-holder .inner {
     border: 2px solid <?php echo RENK1;?>;
     width: 78px;
     height: 78px;
     border-radius: 50%;
     padding: 2px;
     margin: 0 auto;
     transition: all 900ms ease;
}
 .single-team-member:hover .icon-holder .inner{
     border-color: #ffffff;
}
 .single-team-member .icon-holder span:before {
     width: 70px;
     height: 70px;
     display: inline-block;
     background: <?php echo RENK1;?>;
     border-radius: 50%;
     color: #fff;
     font-size: 35px;
     line-height: 35px;
     padding: 17px 0;
}
 .single-team-member .text-holder {
     display: block;
     border: 1px solid #f4f4f4;
     border-top: none;
     display: block;
     padding: 60px 0 25px;
}
 .single-team-member .text-holder h3 {
     margin: 0 0 15px;
}
 .single-team-member .text-holder h4 {
     color: <?php echo RENK1;?>;
     font-size: 18px;
     font-family: 'Courgette', cursive;
     margin: 0px 0 17px;
}
 .single-team-member .text-holder .border{
     width: 70px;
     height: 1px;
     display: block;
     background: #f4f4f4;
     margin: 0 auto;
}
 .single-team-member .text-holder p {
     margin: 14px 0 0;
}
 .single-team-member .text-holder p span:before {
     color: <?php echo RENK1;?>;
     font-size: 16px;
     line-height: 20px;
     display: inline-block;
     padding-right: 4px;
     position: relative;
     top: 1px;
}
/*** ============================================= Brand Area style ============================================= ***/
 .brand-area {
     background: #ffffff;
     border-top: 1px solid #f4f4f4;
     padding-bottom: 40px;
     padding-top: 40px;
}
 .brand-area .sec-title {
     padding-bottom: 0;
}
 .brand-area .tooltip-inner {
     background: <?php echo RENK1;?>;
}
 .brand-area .tooltip.top .tooltip-arrow {
     border-top-color: <?php echo RENK1;?>;
}
 .brand-area .brand .owl-stage-outer{
     position: relative;
     overflow: hidden;
     -webkit-transform: translate3d(0px, 0px, 0px);
     padding-top: 45px;
}
 .brand-area .brand .single-item {
     border: 2px solid #f4f4f4;
     height: 105px;
     display: table-cell;
     width: 100%;
     -webkit-transition: all 300ms ease-in 0s;
     transition: all 300ms ease-in 0s;
     text-align: center;
     padding: 5px;
     vertical-align: middle;
}
 .brand-area .brand .single-item a{
}
 .brand-area .brand .single-item:hover{
     border: 2px solid <?php echo RENK1;?>;
}
 .brand-area .brand .single-item:hover img{
     opacity: .9;
}
 .brand-area .owl-controls {
     position: absolute;
     right: 0;
     top: -54px;
}
 .brand-area .owl-theme .owl-nav [class*="owl-"] {
     background: #ffffff none repeat scroll 0 0;
     border-radius: 0;
     color: #ababab;
     font-size: 20px;
     font-weight: 700;
     height: 40px;
     line-height: 36px;
     margin: 0 0 0 0px;
     padding: 0;
     width: 40px;
     border: 2px solid #f7f7f7;
     transition: all 700ms ease 0s;
}
 .brand-area .owl-theme .owl-nav .owl-next {
     margin-left: 10px;
}
 .brand-area .owl-theme .owl-nav [class*="owl-"]:hover{
     border-color: <?php echo RENK1;?>;
     color: <?php echo RENK1;?>;
}
/*** ============================================= Faq content area style ============================================= ***/
 .faq-content-area{
     background: #ffffff;
     padding-top: 30px;
     padding-bottom: 65px;
}
 .faq-content-area .tab-menu {
     margin-bottom: 50px;
     border: none;
}
 .faq-content-area .tab-menu li {
     background: #ffffff;
     display: block;
     margin-bottom: 5px;
     float: none;
     width: 100%;
}
 .faq-content-area .tab-menu li:last-child{
     margin-bottom: none;
}
 .faq-content-area .tab-menu li a {
     border: none;
     border-radius: 0;
     display: block;
     margin: 0;
     padding: 15px 20px 13px;
     color: #848484;
     font-size: 16px;
     font-weight: 300;
     text-transform: capitalize;
     background: #ffffff;
     font-family: 'Roboto', sans-serif;
     transition: all 500ms ease;
}
 .faq-content-area .tab-menu li.active a, .faq-content-area .tab-menu li:hover a{
     background: <?php echo RENK1;?>;
     color: #ffffff;
     border: none;
}
 .accordion-box {
     display: block;
     overflow: hidden;
     padding: 0;
}
 .accordion-box .accordion {
     margin-bottom: 15px;
     position: relative;
}
 .accordion-box .accordion .accord-btn {
     border: 1px solid #f0f0f0;
     cursor: pointer;
     padding: 10px 15px 10px 55px;
     position: relative;
     transition: all 500ms ease;
}
 .accordion-box .accordion .accord-btn h4 {
     color: #222222;
     font-size: 16px;
     font-weight: 400;
     line-height: 26px;
     transition: all 500ms ease;
}
 .accordion-box .accordion .accord-btn::after {
     color: #c7c7c7;
     content: "\f10e";
     font-family: "Flaticon";
     font-size: 12px;
     font-weight: 400;
     line-height: 28px;
     margin-top: -25px;
     position: absolute;
     left: 10px;
     top: 33px;
     transition: all 500ms ease 0s;
     width: 30px;
     height: 30px;
     border-radius: 0%;
     border: 1px solid #f8f8f8;
     text-align: center;
}
 .accordion-box .accordion .accord-btn.active{
     border-bottom: 1px solid #f0f0f0;
     transition: all 500ms ease;
}
 .accordion-box .accordion .accord-btn.active h4 {
     color: <?php echo RENK1;?>;
}
 .accordion-box .accordion .accord-btn.active:after{
     content: "\f10f";
     border: 1px solid <?php echo RENK1;?>;
     color: <?php echo RENK1;?>;
     background: transparent;
}
 .accordion-box .accordion .accord-content {
     display: none;
     padding: 14px 20px 10px 55px;
     position: relative;
     border: 1px solid #f0f0f0;
     border-top: none;
}
 .accordion-box .accordion .accord-content.collapsed {
     display: block;
}
 .accordion-box .accordion .accord-content p {
     margin: 0;
}
/*** ============================================= Faq question Form Area style ============================================= ***/
 .faq-question-form-area{
     border-top: 1px solid #f4f4f4;
     padding-top: 80px;
     padding-bottom: 80px;
}
 .faq-question-form-area .question-form form input[type="text"], .faq-question-form-area .question-form form input[type="email"], .faq-question-form-area .question-form form textarea{
     background: #ffffff none repeat scroll 0 0;
     border: 1px solid #f0f0f0;
     display: block;
     height: 50px;
     margin-bottom: 30px;
     padding: 0 20px;
     width: 100%;
     color: #848484;
     font-size: 16px;
     font-weight: 300;
     transition: all 500ms ease;
}
 .faq-question-form-area .question-form form input[type="text"]:focus{
     border: 1px solid <?php echo RENK1;?>;
}
 .faq-question-form-area .question-form form input[type="email"]:focus{
     border: 1px solid <?php echo RENK1;?>;
}
 .faq-question-form-area .question-form form textarea:focus{
     border: 1px solid <?php echo RENK1;?>;
}
 .faq-question-form-area .question-form form textarea{
     height: 140px;
     padding: 15px 20px;
}
 .faq-question-form-area .question-form form button {
     padding: 12px 35px 10px;
     width: 220px;
     margin: 0 auto;
}
/*** ============================================= appointment page Area style ============================================= ***/
 .appointment-page-area {
     padding-bottom: 80px;
}
 .appointment-page-area .sec-title {
     padding-bottom: 36px;
}
 .appointment-page-area .appointment-box {
     padding: 0;
}
 .appointment-page-area .appointment-box .form {
     border: none;
     position: static;
     min-height: initial;
     margin: 0;
     padding: 0;
}
 .appointment-page-area .appointment-box .form .input-box .icon-box {
     position: absolute;
     top: 13px;
     right: 15px;
}
 .appointment-page-area .appointment-box .form textarea{
     margin-top: 0;
}
/*** ============================================= Offer box Area style ============================================= ***/
 .offer-box-area {
     padding-bottom: 80px;
}
 .offer-box-area .offer-box {
     overflow: hidden;
     border: 1px solid #f4f4f4;
     padding: 10px;
}
 .offer-box-area .offer-box .inner-content {
     position: relative;
     overflow: hidden;
     padding: 35px 40px 35px;
     background-position: center top;
     background-repeat: no-repeat;
     background-size: cover;
     display: block;
     z-index: 1;
}
 .offer-box-area .offer-box .inner-content::before {
     background: rgba(138, 94, 153, 0.80) none repeat scroll 0 0;
     background-position: center top;
     content: "";
     height: 100%;
     left: 0;
     position: absolute;
     top: 0;
     width: 100%;
     z-index: -1;
}
 .offer-box-area .offer-box .inner-content .left h2 {
     color: #ffffff;
     font-size: 24px;
     font-weight: 700;
     line-height: 30px;
     margin: 9px 0;
}
 .offer-box-area .offer-box .inner-content .right a {
     background: #ffffff;
     color: <?php echo RENK1;?>;
}
 .offer-box-area .offer-box .inner-content .right a:hover{
     background: <?php echo RENK1;?>;
     color: #ffffff;
}
/*** ============================================= Testimonial Section style ============================================= ***/
 .testimonial-page {
     background: #ffffff;
     padding-top: 125px;
     padding-bottom: 0px;
}
 .testimonial-page .single-testimonial-item{
     margin-bottom: 85px;
}
 .testimonial-page .single-testimonial-item .text-holder {
     padding-top: 65px;
     transition: all 0.7s ease;
     background: #ffffff;
     padding-bottom: 15px;
     padding-left: 20px;
     padding-right: 20px;
}
/*** ============================================= Blog Default Area style ============================================= ***/
 .blog-default-area{
     padding-top: 20px;
     padding-bottom: 80px;
}
 .blog-default-area .blog-post {
}
 .blog-default-area .blog-post .single-blog-item {
     margin-bottom: 40px;
}
 .blog-default-area .blog-post .post-pagination {
     border-top: 1px solid #f4f4f4;
     padding-top: 50px;
     margin-top: 10px;
}
 .blog-default-area .sidebar-wrapper {
     border-left: 1px solid #f4f4f4;
     padding-left: 30px;
     margin-top: -80px;
     padding-top: 80px;
     margin-bottom: -80px;
     padding-bottom: 80px;
}
 .sidebar-wrapper {
     position: relative;
     display: block;
     overflow: hidden;
}
 .sidebar-wrapper .single-sidebar {
     overflow: hidden;
     margin-bottom: 50px;
     position: relative;
}
 .sidebar-wrapper .single-sidebar .sec-title {
     overflow: hidden;
     padding-bottom: 25px;
     margin-top: 0;
}
 .sidebar-wrapper .single-sidebar .sec-title h3 {
     color: #222222;
     font-size: 22px;
     font-weight: 400;
     font-family: 'Roboto', sans-serif;
     text-transform: capitalize;
     margin: 0;
}
 .sidebar-wrapper .single-sidebar form.search-form {
     position: relative 
}
 .sidebar-wrapper .single-sidebar .search-form input[type="text"] {
     background: #fff;
     border: 1px solid #f4f4f4;
     color: #ababab;
     display: block;
     font-size: 14px;
     font-weight: 500;
     height: 50px;
     letter-spacing: 1px;
     padding-left: 15px;
     padding-right: 55px;
     position: relative;
     -webkit-transition: all 500ms ease 0s;
     transition: all 500ms ease 0s;
     width: 100%;
}
 .sidebar-wrapper .single-sidebar .search-form button {
     background: <?php echo RENK1;?> none repeat scroll 0 0;
     color: #fff;
     display: block;
     height: 50px;
     padding: 12px 0;
     position: absolute;
     right: 0;
     text-align: center;
     top: 0;
     -webkit-transition: all 500ms ease 0s;
     transition: all 500ms ease 0s;
     width: 50px;
}
 .sidebar-wrapper .single-sidebar .search-form button i {
     font-size: 14px 
}
 .sidebar-wrapper .single-sidebar .search-form input[type="text"]:focus {
     border: 1px solid #0b9f15;
     background: #fff;
     color: #000;
}
 .sidebar-wrapper .single-sidebar .search-form input[type="text"]:focus + button, .sidebar-wrapper .single-sidebar .search-form button:hover {
     background: #0b9f15 none repeat scroll 0 0;
     color: #000000;
}
 .single-sidebar .categories {
     background: #ffffff;
     display: block;
     border: 1px solid #f4f4f4;
     padding: 24px 30px 24px;
}
 .single-sidebar .categories li {
     border-bottom: 1px solid #f4f4f4;
     margin-bottom: 12px;
     padding-bottom: 9px;
}
 .single-sidebar .categories li:last-child {
     margin-bottom: 0;
     padding-bottom: 0;
     border-bottom: none;
}
 .single-sidebar .categories li a {
     color: #888888;
     transition: all 500ms ease;
     font-size: 14px;
     font-weight: 400;
     position: relative;
}
 .single-sidebar .categories li a span{
     float: right;
}
 .single-sidebar .categories li a:hover{
     color: <?php echo RENK1;?>;
}
 .single-sidebar .popular-post {
}
 .single-sidebar .popular-post li {
     margin-bottom: 25px;
     padding-left: 70px;
     position: relative;
     border-bottom: 1px solid #f4f4f4;
     padding-bottom: 25px;
}
 .single-sidebar .popular-post li:last-child {
     padding-bottom: 2px;
     border-bottom: none;
}
 .single-sidebar .popular-post li .img-holder {
     display: block;
     left: 0;
     overflow: hidden;
     position: absolute;
     top: 0px;
     width: 90px;
     height: auto;
}
 .single-sidebar .popular-post li .img-holder img {
     -webkit-transition: all 0.7s ease;
     transition: all 0.7s ease;
     width: auto;
}
 .single-sidebar .popular-post li .img-holder .overlay-style-one{
     border-radius: 0;
}
 .single-sidebar .popular-post li .img-holder .overlay-style-one .box .content a i{
     color: #fff;
     font-size: 16px;
     transition: all 500ms ease;
}
 .single-sidebar .popular-post li:hover .img-holder .overlay-style-one{
     -webkit-transform: scale(1);
     transform: scale(1);
     opacity: 1;
}
 .single-sidebar .popular-post li .img-holder .overlay-style-one .box .content a:hover i{
     color: #000000;
}
 .single-sidebar .popular-post li .title-holder {
     padding-left: 30px;
}
 .single-sidebar .popular-post li .title-holder a .post-title {
     color: #222222;
     font-size: 16px;
     line-height: 26px;
     position: relative;
     font-weight: 400;
     margin: 0 0 2px;
     font-family: 'Roboto', sans-serif;
     transition: all 500ms ease;
     top: -5px;
}
 .single-sidebar .popular-post li .title-holder a:hover .post-title{
     color: <?php echo RENK1;?>;
}
 .single-sidebar .popular-post li .title-holder .post-date {
     color: <?php echo RENK1;?>;
     display: block;
     transition: all 500ms ease;
     font-weight: 400;
     font-size: 14px;
}
 .single-sidebar .follow-us {
     color: #ababab;
     font-size: 14px;
     margin-top: 0px;
}
 .single-sidebar .instagram {
     overflow: hidden;
     display: block;
     margin-left: -6px;
     margin-right: -6px;
}
 .single-sidebar .instagram li {
     display: inline-block;
     float: left;
     margin: 0 5px 10px;
}
 .single-sidebar .instagram li .img-holder {
     overflow: hidden;
     position: relative;
     display: block;
}
 .single-sidebar .instagram li .img-holder img {
     transform: scale(1.1, 1.1);
     transition: all 0.5s ease 0s;
     width: 100%;
}
 .single-sidebar .instagram li .img-holder .overlay-style-one .box .content a i{
     color: #fff;
     font-size: 15px;
}
 .single-sidebar .instagram li:hover .img-holder .overlay-style-one {
     -webkit-transform: scale(1);
     transform: scale(1);
     opacity: 1;
}
 .single-sidebar .instagram li:hover .img-holder img {
     transform: scale(1, 1);
}
 .single-sidebar .popular-tag {
     margin-left: -3px;
     margin-right: -3px;
     margin-top: -5px;
}
 .single-sidebar .popular-tag li {
     display: inline-block;
     margin: 0 3px 10px;
}
 .single-sidebar .popular-tag li a {
     border: 1px solid #f4f4f4;
     color: #888888;
     display: block;
     font-size: 14px;
     font-weight: 400;
     padding: 4px 12px 4px;
     transition: all 500ms ease 0s;
}
 .single-sidebar .popular-tag li a:hover{
     background: <?php echo RENK1;?>;
     border-color: <?php echo RENK1;?>;
     color: #fff;
}
/*** ============================================= Blog Large Area style ============================================= ***/
 .blog-large-area{
     padding-top: 80px;
     padding-bottom: 80px;
}
 .blog-large-area .blog-post {
     border-right: 1px solid #f4f4f4;
     margin-right: -30px;
     padding-right: 30px;
     margin-top: 0px;
     padding-top: 0px;
     margin-bottom: -80px;
     padding-bottom: 80px;
}
 .blog-large-area .single-blog-item {
     margin-bottom: 50px;
     min-height: inherit;
     border-bottom: none;
     background: #ffffff;
}
 .blog-large-area .single-blog-item .img-holder img {
     -webkit-transition: all 0.7s ease;
     transition: all 0.7s ease;
     width: 100%;
}
 .blog-large-area .single-blog-item .img-holder .overlay-style-one .box .content a i {
     background: rgba(0, 0, 0, 0.85) none repeat scroll 0 0;
     border: 1px solid transparent;
     border-radius: 3%;
     color: #ffffff;
     display: inline-block;
     font-size: 18px;
     height: 50px;
     line-height: 50px;
     transition: all 500ms ease 0s;
     width: 50px;
}
 .blog-large-area .single-blog-item .img-holder .overlay-style-one .box .content a:hover i{
     background: #05930e;
     color: #ffffff;
}
 .blog-large-area .single-blog-item:hover .img-holder .categories {
     transform: translate3d(0px, 0, 0px);
}
 .blog-large-area .single-blog-item .text-holder .meta-info {
     text-align: left;
     display: block;
     padding: 25px 0 12px;
}
 .blog-large-area .single-blog-item .text-holder .meta-info li {
     display: inline-block;
     float: none;
     line-height: 18px;
     border-right: 1px solid #dfdfdf;
     padding-right: 15px;
     margin-right: 12px;
}
 .blog-large-area .single-blog-item .text-holder .meta-info li:last-child{
     border-right: none;
     padding-right: 0;
     margin-right: 0;
}
 .blog-large-area .single-blog-item .text-holder .meta-info li a i {
     display: inline-block;
     padding-right: 7px;
}
 .blog-large-area .single-blog-item .text-holder {
     position: static;
     border: 1px solid #f4f4f4;
     border-top: none;
     padding-left: 20px;
     padding-right: 20px;
     padding-bottom: 22px;
     text-align: left;
     transition: all 500ms ease;
     width: 100%;
}
 .blog-large-area .single-blog-item .text-holder .blog-title {
     font-size: 24px;
     padding: 0;
     line-height: 30px;
}
 .blog-large-area .single-blog-item .text-holder .text {
     margin: 15px 0 0;
}
 .blog-large-area .single-blog-item .text-holder .read-more-button {
     margin-top: 16px;
}
 .blog-large-area .single-blog-item .text-holder .read-more-button a{
     color: #303030;
     font-size: 14px;
     font-weight: 700;
     text-transform: uppercase;
     letter-spacing: 0px;
}
 .blog-large-area .single-blog-item .text-holder .read-more-button a:hover{
     color: <?php echo RENK1;?>;
     letter-spacing: 1px;
}
 .blog-large-area .blog-post .post-pagination {
}
 .blog-large-area .sidebar-wrapper {
     padding-left: 30px;
}
/*** ============================================= Blog Single Area style ============================================= ***/
 .blog-single-area {
     padding-top: 20px;
     padding-bottom: 80px;
}
 .blog-single-area .sidebar-wrapper {
     padding-left: 30px;
}
 .blog-single-area .single-blog-item {
     margin-bottom: 50px;
}
 .blog-single-area .single-blog-item .text-holder {
     padding-bottom: 3px;
}
 .blog-single-area .sec-title h2 {
     font-size: 24px;
     color: #303030;
     font-weight: 600;
     margin: 0;
     text-transform: uppercase;
}
 .blog-single-area .single-blog-item .text-holder {
}
 .blog-single-area .single-blog-item .img-holder img {
     transform: none;
}
 .blog-single-area .single-blog-item .text-holder .blog-title {
     font-size: 24px;
     padding: 0;
     margin: 0;
}
 .blog-single-area .single-blog-item .text-holder .blog-title:hover{
     color: #222222;
}
 .blog-single-area .single-blog-item .text-holder .text {
     border: none;
     padding-bottom: 20px;
}
 .blog-single-area .single-blog-item .text-holder .text .top {
     margin: 0 0 15px;
}
 .blog-single-area .middle-content-box {
     margin: 0px 0 33px;
     overflow: hidden;
}
 .blog-single-area .middle-content-box .img-holder {
     width: 340px;
}
 .blog-single-area .middle-content-box .img-holder, .blog-single-area .middle-content-box .text-box{
     display: table-cell;
     vertical-align: top;
}
 .blog-single-area .middle-content-box .text-box {
     padding-left: 30px;
     position: relative;
}
 .blog-single-area .middle-content-box .text-box:before{
     content: "\f10d";
     font-family: FontAwesome;
     font-style: normal;
     font-weight: normal;
     text-decoration: inherit;
     color: #f1f1f1;
     font-size: 24px;
     padding-right: ;
     position: absolute;
     top: -3px;
     left: 30px;
}
 .blog-single-area .middle-content-box .text-box {
     padding-left: 30px;
     padding-top: 32px;
     position: relative;
}
 .blog-single-area .middle-content-box .text-box h3 {
     color: #222;
     font-size: 18px;
     font-weight: 500;
     margin: 20px 0 7px;
}
 .blog-single-area .middle-content-box .text-box h5 {
     color: <?php echo RENK1;?>;
     font-size: 16px;
     font-weight: 400;
     margin: 0;
}
 .blog-single-area .bottom-content-box {
     border-bottom: 1px solid #f7f7f7;
     padding-bottom: 20px;
}
 .blog-single-area .tag-social-share-box {
     overflow: hidden;
     padding-bottom: 5px;
     padding-top: 20px;
}
 .blog-single-area .tag-social-share-box .tag-box {
     margin: 8px 0;
}
 .blog-single-area .tag-social-share-box .tag-box h5 {
     color: #303030;
     font-size: 16px;
     font-weight: 600;
     display: inline-block;
     float: left;
     line-height: 22px;
     margin-right: 5px;
}
 .blog-single-area .tag-social-share-box .tag-box ul{
     overflow: hidden;
}
 .blog-single-area .tag-social-share-box .tag-box ul li{
     display: inline-block;
     float: left;
     margin-right: 8px;
}
 .blog-single-area .tag-social-share-box .tag-box ul li:last-child{
     margin-right: 0;
}
 .blog-single-area .tag-social-share-box .tag-box ul li a{
     color: <?php echo RENK1;?>;
     font-weight: 500;
}
 .blog-single-area .tag-social-share-box .social-share {
     overflow: hidden;
     padding: 6px 0;
}
 .blog-single-area .tag-social-share-box .social-share h5 {
     color: #222222;
     display: inline-block;
     float: left;
     font-size: 16px;
     font-weight: 600;
     text-transform: capitalize;
     position: relative;
     margin: 6px 0;
}
 .blog-single-area .tag-social-share-box .social-share i {
     padding-left: 10px;
     display: inline-block;
}
 .blog-single-area .tag-social-share-box .social-share .social-share-links {
     display: inline-block;
     float: left;
     margin-left: -3px;
     margin-right: -3px;
     padding-left: 20px;
     position: relative;
     top: -6px;
}
 .blog-single-area .tag-social-share-box .social-share .social-share-links li {
     display: inline-block;
     margin: 0 3px;
}
 .blog-single-area .tag-social-share-box .social-share .social-share-links li a i {
     border: 2px solid #f7f7f7;
     border-radius: 50%;
     color: #c1c1c1;
     font-size: 14px;
     height: 40px;
     line-height: 36px;
     padding: 0;
     text-align: center;
     transition: all 500ms ease 0s;
     width: 40px;
     transition: all 500ms ease;
}
 .blog-single-area .tag-social-share-box .social-share .social-share-links li a:hover i{
     background: <?php echo RENK1;?>;
     border-color: <?php echo RENK1;?>;
     color: #fff;
}
 .blog-single-area .author-box {
     background: #f7f7f7 none repeat scroll 0 0;
     display: block;
     padding: 30px 30px 22px;
     position: relative;
}
 .blog-single-area .author-box .img-holder{
     width: 85px;
}
 .blog-single-area .author-box .img-holder, .blog-single-area .author-box .text-holder{
     display: table-cell;
     vertical-align: top;
}
 .blog-single-area .author-box .text-holder {
     padding-left: 30px;
}
 .blog-single-area .author-box .text-holder h3 {
     color: #222;
     font-size: 20px;
     font-weight: 500;
     margin: -2px 0 14px;
     text-transform: capitalize;
}
 .blog-single-area .author-box .text-holder p{
}
 .blog-single-area .author-box .text-holder .social-link {
     margin-left: -6px;
     margin-right: -6px;
     overflow: hidden;
}
 .blog-single-area .author-box .text-holder .social-link li{
     display: inline-block;
     margin: 0 6px;
}
 .blog-single-area .author-box .text-holder .social-link li a i{
     color: #9a9a9a;
     font-size: 14px;
     transition: all 500ms ease;
}
 .blog-single-area .author-box .text-holder .social-link li a:hover i{
     color: <?php echo RENK1;?>;
}
 .blog-single-area .comment-box {
     overflow: hidden;
     padding-bottom: 50px;
     padding-top: 60px;
}
 .blog-single-area .comment-box .single-comment-box {
     padding-left: 60px;
     position: relative;
     margin-bottom: 30px;
}
 .blog-single-area .comment-box .single-comment-box .img-holder {
     left: 0;
     position: absolute;
     top: 0;
}
 .blog-single-area .comment-box .single-comment-box .text-holder {
     border: 1px solid #f7f7f7;
     margin-left: 20px;
     padding: 15px 20px 5px;
}
 .blog-single-area .comment-box .single-comment-box .text-holder .top {
     overflow: hidden;
     padding-bottom: 8px;
}
 .blog-single-area .comment-box .single-comment-box .text-holder .top .date h5 {
     color: #222;
     font-size: 16px;
     font-weight: 400;
}
 .blog-single-area .comment-box .single-comment-box .text-holder .top .review-box {
     position: relative;
     top: -3px;
}
 .blog-single-area .comment-box .single-comment-box .text-holder .top .review-box ul {
     margin-left: -0.5px;
     margin-right: -0.5px;
     overflow: hidden;
}
 .blog-single-area .comment-box .single-comment-box .text-holder .top .review-box ul li {
     display: inline-block;
     margin: 0 0.5px;
}
 .blog-single-area .comment-box .single-comment-box .text-holder .top .review-box ul li i {
     color: <?php echo RENK1;?>;
     font-size: 14px;
}
 .blog-single-area .add-comment-box {
     overflow: hidden;
}
 .blog-single-area .add-comment-box .add-rating-box {
     padding-bottom: 20px;
}
 .blog-single-area .add-comment-box .add-rating-box h4 {
     color: #9a9a9a;
     font-size: 16px;
     font-weight: 300;
     margin: 0 0 12px;
}
 .blog-single-area .add-comment-box .add-rating-box ul {
}
 .blog-single-area .add-comment-box .add-rating-box ul li {
     border-right: 1px solid #ebebeb;
     display: inline-block;
     line-height: 20px;
     margin-right: 6px;
     padding-right: 10px;
}
 .blog-single-area .add-comment-box .add-rating-box ul li:last-child{
     border-right: none;
     margin-right: 0;
     padding-right: 0;
}
 .blog-single-area .add-comment-box .add-rating-box ul li a i{
     color: #d6d6d6;
     font-size: 12px;
}
 .blog-single-area .add-comment-box .add-rating-box ul li a:hover i{
     color: <?php echo RENK1;?>;
     transition: all 500ms ease;
}
 .blog-single-area .add-comment-box #add-comment-form {
}
 .blog-single-area .add-comment-box #add-comment-form .field-label {
     color: #848484;
     display: block;
     font-size: 16px;
     font-weight: 400;
     padding: 0 0 2px;
}
 .blog-single-area .add-comment-box #add-comment-form input[type="text"], .blog-single-area .add-comment-box #add-comment-form input[type="email"], .blog-single-area .add-comment-box #add-comment-form textarea{
     background: #f7f7f7 none repeat scroll 0 0;
     border: 1px solid transparent;
     display: block;
     font-size: 16px;
     font-weight: 400;
     height: 50px;
     padding: 0 15px;
     width: 100%;
     margin-bottom: 12px;
     transition: all 500ms ease;
}
 .blog-single-area .add-comment-box #add-comment-form textarea {
     height: 100px;
     padding: 10px 15px;
     margin-bottom: 30px;
     transition: all 500ms ease;
}
 .blog-single-area .add-comment-box #add-comment-form input[type="text"]:focus{
     border-color: <?php echo RENK1;?>;
}
 .blog-single-area .add-comment-box #add-comment-form input[type="email"]:focus{
     border-color: <?php echo RENK1;?>;
}
 .blog-single-area .add-comment-box #add-comment-form textarea:focus{
     border-color: <?php echo RENK1;?>;
}
 .blog-single-area .add-comment-box #add-comment-form button {
     padding: 11px 30px 9px;
}
/*** ============================================= Contact Form area style ============================================= ***/
 .contact-form-area {
     padding-top: 80px;
     padding-bottom: 80px;
     position: relative;
     overflow: hidden;
     z-index: 1;
}
 .contact-form-img {
     position: absolute;
     right: 50px;
     top: 50px;
     max-width: 470px;
     height: 300px;
     z-index: -1;
}
 .contact-form-area .sec-title {
     position: relative;
     padding-bottom: 40px;
}
 .contact-form-area .sec-title p {
     font-size: 18px;
     color: #888888;
     font-family: 'Courgette', cursive;
     margin: 22px 0 0;
}
 .contact-form-area .quick-contact {
     border: 1px solid #f5f4f3;
     display: block;
     padding: 40px 25px 34px;
}
 .contact-form-area .quick-contact .title {
     padding-bottom: 30px;
}
 .contact-form-area .quick-contact ul li .text-holder h5 {
     line-height: 26px;
}
 .contact-form-area .quick-contact ul li .text-holder h5 span.closes{
     color: <?php echo RENK1;?>;
}
 .contact-form-area .contact-form form {
     background: #fcfcfc;
     border: 1px solid #f0f0f0;
     display: block;
     padding: 39px 30px 39px;
}
 .contact-form-area .contact-form form h2 {
     color: #222222;
     font-size: 24px;
     font-weight: 400;
     text-transform: capitalize;
     margin: 0 0 35px;
}
 .contact-form-area .contact-form form input[type="text"], .contact-form-area .contact-form form input[type="email"], .contact-form-area .contact-form form textarea{
     background: #ffffff;
     border: 1px solid #ececec;
     color: #999999;
     display: block;
     font-size: 14px;
     height: 50px;
     margin-bottom: 30px;
     padding: 0 20px;
     width: 100%;
     transition: all 500ms ease;
}
 .contact-form-area .contact-form form textarea{
     height: 120px;
     margin-bottom: 30px;
     padding: 10px 20px;
}
 .contact-form-area .contact-form form input[type="text"]:focus{
     border-color: <?php echo RENK1;?>;
}
 .contact-form-area .contact-form form input[type="email"]:focus{
     border-color: <?php echo RENK1;?>;
}
 .contact-form-area .contact-form form textarea:focus{
     border-color: <?php echo RENK1;?>;
}
 .contact-form-area .contact-form form button {
     width: 100%;
     padding: 14px 0 13px;
}
/*** ============================================= Contact map Area style ============================================= ***/
 .contact-map-area {
     position: relative;
     background: #ffffff;
}
 #contact-google-map {
     height: 480px;
     width: 100%;
}
/*** ============================================= Main Project Area style ============================================= ***/
 .main-project-area{
     padding-top: 15px;
     padding-bottom: 80px;
}
 .main-project-area .single-project-item{
     margin-bottom: 30px;
}
 .single-project-item {
     position: relative;
     overflow: hidden;
     display: block;
}
 .single-project-item .img-holder{
     display: block;
     overflow: hidden;
     position: relative;
}
 .single-project-item .img-holder img {
     transform: scale(1.1, 1.1);
     transition: all .9s ease;
     width: 100%;
}
 .single-project-item:hover .img-holder img{
     transform: scale(1.2, 1.2);
}
 .single-project-item .img-holder .overlay-style-one{
     background: rgba(0, 0, 0, .8);
     transition: all 700ms ease;
}
 .single-project-item:hover .img-holder .overlay-style-one{
     -webkit-transform: scale(1);
     transform: scale(1);
     opacity: 1;
}
 .single-project-item .img-holder .overlay-style-one .box .content a {
     font-size: 18px;
     color: #ffffff;
     font-weight: 600;
     text-transform: capitalize;
     font-family: 'Roboto', sans-serif;
     position: relative;
     right: 100%;
     transition: all .9s ease;
}
 .single-project-item:hover .img-holder .overlay-style-one .box .content a{
     right: 0;
}
 .single-project-item .img-holder .overlay-style-one .box .content p{
     color: <?php echo RENK1;?>;
     font-size: 14px;
     font-weight: 400;
     font-family: 'Open Sans', sans-serif;
     margin: 0;
     position: relative;
     left: 100%;
     transition: all .9s ease;
}
 .single-project-item:hover .img-holder .overlay-style-one .box .content p{
     left: 0;
}
 .single-project-item .img-holder .overlay-style-one .box .content .border {
     display: block;
     width: 50px;
     height: 1px;
     background: rgba(255, 255, 255, 0.40);
     margin: 13px auto 9px;
}
 .main-project-area .post-pagination{
     margin-top: 20px;
}
/*** ============================================= Project withoutgrid Area style ============================================= ***/
 .project-withoutgrid-area{
     padding-top: 80px;
     padding-bottom: 80px;
}
 .project-filter {
     margin-bottom: 40px 
}
 .project-filter li {
     display: inline-block;
     margin: 0 5.5px;
}
 .project-filter li span {
     background: #ffffff;
     border: 1px solid #f4f4f4;
     color: #888888;
     display: block;
     font-size: 14px;
     font-weight: 700;
     padding: 9px 18px;
     text-transform: uppercase;
     font-family: 'Open Sans', sans-serif;
     border-radius: 30px;
     cursor: pointer;
     transition: all 500ms ease;
     -moz-transition: all 500ms ease;
     -webkit-transition: all 500ms ease;
     -ms-transition: all 500ms ease;
     -o-transition: all 500ms ease;
}
 .project-filter li.active span, .project-filter li:hover span {
     background: <?php echo RENK1;?>;
     color: #fff;
     border: 1px solid <?php echo RENK1;?>;
}
 .project-withoutgrid-area .mar0{
     margin: 0;
}
 .project-withoutgrid-area .pd0{
     padding: 0;
}
 .project-withoutgrid-area .post-pagination{
     padding-top: 50px;
}
/*** ============================================= Project Single Area style ============================================= ***/
 #project-single-area{
     padding-top: 80px;
     padding-bottom: 80px;
}
 #project-single-area .owl-theme .owl-nav {
     margin-top: 0px;
}
 #project-single-area .owl-theme .owl-dots {
     text-align: center;
}
 #project-single-area .owl-theme .owl-dots .owl-dot {
     display: inline-block;
}
 #project-single-area .owl-theme .owl-dots {
     position: absolute;
     top: 90%;
     left: 0;
     right: 0;
}
 #project-single-area .owl-dots .owl-dot{
     background-image:none;
     background-color: #fff;
     width:12px;
     height:12px;
     margin:6px;
     padding:0px;
     border:2px solid #fff;
     background:none;
     border-radius:50%;
     -webkit-border-radius:50%;
     -ms-border-radius:50%;
     -o-border-radius:50%;
     -moz-border-radius:50%;
     transition: all 500ms ease;
}
 #project-single-area .owl-dots .owl-dot span{
     display:none;
}
 #project-single-area .owl-dots .owl-dot.active{
     border: 2px solid <?php echo RENK1;?>;
     background: <?php echo RENK1;?>;
}
 #project-single-area .project-info {
}
 #project-single-area .sec-title{
     padding-bottom: 14px;
}
 #project-single-area .sec-title h2 {
     color: #303030;
     font-size: 24px;
     font-weight: 700;
     margin: 0;
     text-transform: uppercase;
}
 #project-single-area .project-info .project-info-list {
     overflow: hidden;
     margin-top: 30px;
     margin-left: -30px;
     margin-right: -30px;
}
 #project-single-area .project-info .project-info-list li {
     border-bottom: 1px solid #f7f7f7;
     float: left;
     margin: 0 30px 25px;
     overflow: hidden;
     padding-bottom: 16px;
     padding-left: 20px;
     position: relative;
     width: 190px;
}
 #project-single-area .project-info .project-info-list li .icon-holder {
     left: 0;
     position: absolute;
     top: -5px;
}
 #project-single-area .project-info .project-info-list li .icon-holder i {
     font-size: 14px;
     color: <?php echo RENK1;?>;
}
 #project-single-area .project-info .project-info-list li .text-holder {
}
 #project-single-area .project-info .project-info-list li .text-holder h5 {
     color: #1c1c1c;
     font-size: 14px;
     font-weight: 600;
     text-transform: uppercase;
     margin: 0 0 3px;
}
 #project-single-area .project-info .project-info-list li .text-holder p {
     margin: 0;
     color: #949494;
     font-size: 14px;
}
 #project-single-area .project-description{
     padding-top: 60px;
}
 #project-single-area .bottom {
     border-bottom: 1px solid #f7f7f7;
     border-top: 1px solid #f7f7f7;
     margin: 43px 0 0;
     overflow: hidden;
     padding-bottom: 20px;
     padding-top: 21px;
}
 #project-single-area .bottom .button a {
     color: #1c1c1c;
     font-size: 16px;
     font-weight: 700;
     text-transform: uppercase;
     transition: all 500ms ease;
}
 #project-single-area .bottom .button a:hover{
     color: <?php echo RENK1;?>;
}
 #project-single-area .bottom .button a i {
     display: inline-block;
     font-size: 18px;
     padding-right: 10px;
     position: relative;
     top: 1px;
}
 #project-single-area .bottom .button.next a i{
     padding-right: 0px;
     padding-left: 10px;
}
 #project-single-area .bottom .icon-holder a i {
     color: #1c1c1c;
     font-size: 24px;
     position: relative;
     top: 4px;
     transition: all 500ms ease 0s;
}
 #project-single-area .bottom .icon-holder a:hover i{
     color: <?php echo RENK1;?>;
}
/*** ============================================= Procedures Page area style ============================================= ***/
 #procedures-page-area{
     background: #ffffff;
}
 #procedures-page-area .sidebar {
     overflow: hidden;
}
 #procedures-page-area .sidebar .single-sidebar{
     display: block;
     overflow: hidden;
     margin-bottom: 50px;
}
 #procedures-page-area .sidebar .single-sidebar .title{
     padding-bottom: 27px;
}
 #procedures-page-area .sidebar .single-sidebar .title h3 {
     color: #303030;
     font-size: 18px;
     font-weight: 600;
     display: block;
     text-transform: uppercase;
}
 #procedures-page-area .sidebar .single-sidebar .inner-border{
     overflow: hidden;
     background: #ffffff;
     padding: 10px;
}
 #procedures-page-area .sidebar .single-sidebar .topics {
     border: 1px dashed #d6e2d7;
}
 #procedures-page-area .sidebar .single-sidebar .topics li{
     position: relative;
     overflow: hidden;
     display: block;
}
 #procedures-page-area .sidebar .single-sidebar .topics li:before {
     content: "\f105";
     font-family: FontAwesome;
     font-weight: normal;
     color: <?php echo RENK1;?>;
     font-size: 18px;
     position: absolute;
     top: 0px;
     left: 0;
     margin: 13px 0;
     transform: translate3d(15px, 0px, 0px);
     transition: all 0.4s ease 0s;
     opacity: 0 
}
 #procedures-page-area .sidebar .single-sidebar .topics li.active:before{
     opacity: 1;
     transform: translate3d(20px, 0px, 0px);
     transition: all 500ms ease;
}
 #procedures-page-area .sidebar .single-sidebar .topics li:hover:before{
     opacity: 1;
     transform: translate3d(20px, 0px, 0px);
     transition: all 500ms ease;
}
 #procedures-page-area .sidebar .single-sidebar .topics li a {
     color: #888888;
     font-size: 14px;
     font-weight: 400;
     border-bottom: 1px dashed #d6e2d7;
     display: block;
     padding: 13px 20px 13px;
     transition: all 500ms ease;
     font-family: 'Roboto', sans-serif;
}
 #procedures-page-area .sidebar .single-sidebar .topics li:last-child a{
     border-bottom: 1px solid transparent;
}
 #procedures-page-area .sidebar .single-sidebar .topics li a:hover, #procedures-page-area .sidebar .single-sidebar .topics li.active a{
     color: <?php echo RENK1;?>;
     padding: 13px 35px 13px;
     transition: all 500ms ease;
     border-bottom: 1px dashed <?php echo RENK1;?>;
}
 #procedures-page-area .sidebar .single-sidebar .topics li:last-child a:hover, #procedures-page-area .sidebar .single-sidebar .topics li:last-child.active a{
     border-bottom: 1px solid transparent;
}
 #procedures-page-area .sidebar .single-sidebar .brochures-dwn-link {
     overflow: hidden;
}
 #procedures-page-area .sidebar .single-sidebar .brochures-dwn-link li{
     margin-bottom: 10px;
}
 #procedures-page-area .sidebar .single-sidebar .brochures-dwn-link li:last-child{
     margin-bottom: 0;
}
 #procedures-page-area .sidebar .single-sidebar .brochures-dwn-link li a {
     border: 1px solid #f4f4f4;
     display: block;
     padding: 15px 22px 13px;
     transition: all 500ms ease;
}
 #procedures-page-area .sidebar .single-sidebar .brochures-dwn-link li a:hover{
     background: #ffffff;
     border-color: <?php echo RENK1;?>;
}
 #procedures-page-area .sidebar .single-sidebar .brochures-dwn-link li a .icon-holder{
     width: 35px;
}
 #procedures-page-area .sidebar .single-sidebar .brochures-dwn-link li a .icon-holder span:before{
     color: #303030;
     font-size: 25px;
     line-height: 25px;
}
 #procedures-page-area .sidebar .single-sidebar .brochures-dwn-link li a .icon-holder, #procedures-page-area .sidebar .single-sidebar .brochures-dwn-link li a .title-holder{
     display: table-cell;
     vertical-align: middle;
}
 #procedures-page-area .sidebar .single-sidebar .brochures-dwn-link li a .title-holder h5 {
     font-size: 16px;
     color: #303030;
     text-transform: capitalize;
     font-weight: 400;
     line-height: 20px;
     margin: 0 0 3px;
}
 #procedures-page-area .sidebar .single-sidebar .brochures-dwn-link li a .title-holder span{
     color: #888888;
     font-size: 14px;
}
 #procedures-page-area .sidebar .single-sidebar .contact-us {
     background: #ffffff;
     display: block;
     overflow: hidden;
}
 #procedures-page-area .sidebar .single-sidebar .contact-us .contact-info {
     display: block;
     padding: 10px 20px 10px;
}
 #procedures-page-area .sidebar .single-sidebar .contact-us .contact-info li {
     position: relative;
     border-bottom: 1px dashed #d6e2d7;
     padding-left: 45px;
     padding-bottom: 13px;
     padding-top: 15px;
}
 #procedures-page-area .sidebar .single-sidebar .contact-us .contact-info li:last-child{
     border-bottom: none;
     padding-bottom: none;
}
 #procedures-page-area .sidebar .single-sidebar .contact-us .contact-info li .icon-holder {
     position: absolute;
     top: 17px;
     left: 15px;
     width: 20px;
     height: 30px;
}
 #procedures-page-area .sidebar .single-sidebar .contact-us .contact-info li .icon-holder span:before{
     color: <?php echo RENK1;?>;
     font-size: 18px;
     line-height: 18px;
}
 #procedures-page-area .sidebar .single-sidebar .contact-us .contact-info li .icon-holder span.phone:before {
     position: relative;
     top: 4px;
}
 #procedures-page-area .sidebar .single-sidebar .contact-us .contact-info li .icon-holder span.map-marker:before {
     position: relative;
     top: 4px;
}
 #procedures-page-area .sidebar .single-sidebar .contact-us .contact-info li .text-holder h5{
     color: #888888;
     font-size: 14px;
     font-weight: 400;
     line-height: 24px;
     font-family: 'Roboto', sans-serif;
}
 #procedures-page-area hr.line {
     border-top: 1px solid #f4f4f4;
     margin: 10px 0 50px;
}
/*** ============================================= Single Procedures area style ============================================= ***/
 #procedures-page-area.single-procedures-area {
     padding-bottom: 80px;
}
 #procedures-page-area.single-procedures-area li:after{
     display: none;
}
 .sec-title.reduce-f-size{
     padding-bottom: 40px;
}
 .sec-title.reduce-f-size h1 {
     font-size: 24px;
     margin: 0 0 15px;
}
 .sec-title.reduce-f-size .line {
     width: 50px;
     height: 2px;
     background: <?php echo RENK1;?>;
     display: block;
}
 .single-procedures-area .top-content {
     overflow: hidden;
     margin-bottom: 50px;
}
 .single-procedures-area .top-content .img-holder{
     display: block;
}
 .single-procedures-area .top-content .img-holder img{
     width: 100%;
}
 .single-procedures-area .top-content .text-holder{
     overflow: hidden;
     margin-top: 34px;
}
 #procedures-page-area.single-procedures-area .offer-content-box li:after{
     display: block;
}
 #procedures-page-area.single-procedures-area .offer-content-box li:last-child:after{
     display: none;
}
 .single-procedures-area .offer-content-box .single-item {
     width: 405px;
     margin-right: 30px;
}
 .single-procedures-area .features-box-content{
     overflow: hidden;
}
 .single-procedures-area .features-box-content .sec-title.reduce-f-size p {
     margin: 33px 0 0;
}
 .single-procedures-area .features-box-content .img-holder {
     overflow: hidden;
     display: block;
}
 .single-procedures-area .features-box-content .img-holder img {
     width: 100%;
}
 .single-procedures-area .features-box-content .text-holder{
     overflow: hidden;
}
 .single-procedures-area .features-box-content .text-holder ul {
     display: block;
     overflow: hidden;
     margin: 20px 0;
}
 .single-procedures-area .features-box-content .text-holder ul li {
     line-height: 40px;
     font-weight: 500;
     font-family: 'Roboto', sans-serif;
}
 .single-procedures-area .features-box-content .text-holder ul li span:before{
     color: <?php echo RENK1;?>;
     font-size: 20px;
     display: inline-block;
     padding-right: 7px;
}
 .single-procedures-area .pricing-plan-box {
     overflow: hidden;
     display: block;
     padding-top: 0px;
}
 .single-procedures-area .pricing-plan-box ul {
}
 .single-procedures-area .pricing-plan-box ul li {
     overflow: hidden;
     display: block;
     width: 100%;
     margin-bottom: 30px;
     border: 1px solid #f4f4f4;
}
 .single-procedures-area .pricing-plan-box ul li:last-child {
     margin-bottom: 0px;
}
 .single-procedures-area .pricing-plan-box ul li .left{
     width: 80%;
}
 .single-procedures-area .pricing-plan-box ul li .left .inner-content{
}
 .single-procedures-area .pricing-plan-box ul li .left .inner-content .img-box {
     width: 145px;
     text-align: center;
     border-right: 1px solid #f4f4f4;
     padding: 29px 0px;
}
 .single-procedures-area .pricing-plan-box ul li .left .inner-content .img-box, .single-procedures-area .pricing-plan-box ul li .left .inner-content .text-box{
     display: table-cell;
     vertical-align: middle;
}
 .single-procedures-area .pricing-plan-box ul li .left .inner-content .text-box {
     padding-left: 30px;
     padding-right: 20px;
}
 .single-procedures-area .pricing-plan-box ul li .left .inner-content .text-box h3 {
     margin: 0 0 16px;
}
 .single-procedures-area .pricing-plan-box ul li .left .inner-content .text-box p{
     margin: 0;
}
 .single-procedures-area .pricing-plan-box ul li .right {
     border-left: 1px solid #f4f4f4;
     width: 20%;
     text-align: center;
     display: block;
     padding: 24px 0 29px;
}
 .single-procedures-area .pricing-plan-box ul li .right h1 {
     font-size: 30px;
     font-weight: 400;
}
 .single-procedures-area .pricing-plan-box ul li .right a {
     border: 1px solid #f4f4f4;
     color: #303030;
     padding: 9px 0px 9px;
     width: 150px;
     margin: 30px auto 0;
}
 .single-procedures-area .pricing-plan-box ul li .right a:hover{
     background: <?php echo RENK1;?>;
     color: #ffffff;
     border-color: <?php echo RENK1;?>;
}
/*** ============================================= Shop Area style ============================================= ***/
 .shop-area {
     padding-top: 80px;
     padding-bottom: 80px;
}
 .shop-area .sidebar-wrapper .single-sidebar .sec-title {
     padding-bottom: 30px;
}
 .shop-area .shop-content {
     overflow: hidden;
}
 .shop-area .showing-result-shorting {
     overflow: hidden;
     padding-bottom: 20px;
}
 .shop-area .showing-result-shorting .showing{
}
 .shop-area .showing-result-shorting .shorting{
}
 .shop-area .showing-result-shorting .showing p {
     color: #848484;
     font-size: 16px;
     font-weight: 400;
     margin: 5px 0;
}
 .single-product-item{
     background: #fff;
     margin-bottom: 30px;
     transition: all 0.7s ease;
}
 .single-product-item:hover{
}
 .single-product-item .img-holder {
     display: block;
     overflow: hidden;
     position: relative;
     border: 1px solid #f5f4f3;
}
 .single-product-item .img-holder img{
     -webkit-transition: all 0.7s ease;
     transition: all 0.7s ease;
     width: 100%;
}
 .single-product-item:hover .img-holder img{
     transform: scale(1.1);
}
 .single-product-item:hover .img-holder .overlay-style-one{
     -webkit-transform: scale(1);
     transform: scale(1);
     opacity: 1;
}
 .single-product-item .img-holder .overlay-style-one .box .content a {
     display: inline-block;
     width: 170px;
     transition: all 500ms ease;
     background: #ffffff;
     color: #222222;
}
 .single-product-item .img-holder .overlay-style-one .box .content a:hover{
     background: #222222;
     color: #ffffff;
}
 .single-product-item .title-holder {
     padding: 15px 15px 17px;
     border: 1px solid #f4f4f4;
     border-top: none;
}
 .single-product-item .title-holder .top {
     overflow: hidden;
     margin-bottom: 5px;
}
 .single-product-item .title-holder .top .product-title{
}
 .single-product-item .title-holder .top .product-title h5 {
     color: #222222;
     font-size: 16px;
     font-weight: 600;
     text-transform: capitalize;
     line-height: 26px;
     font-family: 'Roboto', sans-serif;
}
 .single-product-item .title-holder .top .review-box{
}
 .single-product-item .title-holder .top .review-box ul li i{
}
 .single-product-item .title-holder .product-value h4 {
     color: <?php echo RENK1;?>;
     font-size: 14px;
     font-weight: 400;
     text-transform: capitalize;
     font-family: 'Roboto', sans-serif;
}
 .single-product-item .title-holder .product-value h4 del{
     color: #888888;
     font-size: 13px;
}
 .shop-area .post-pagination{
     margin-top: 20px;
}
 .single-sidebar .price-ranger{
}
 .single-sidebar .price-ranger .ui-widget-content {
     background: #e5e5e5;
     border: none;
     height: 2px;
     position: relative;
}
 .single-sidebar .price-ranger .ui-widget-content:before{
     position: absolute;
     bottom: 0;
     left: 0;
     width: 100%;
     height: 1px;
     background: #f0f0f0;
     content: "";
}
 .single-sidebar .price-ranger .ui-slider-handle {
     background: <?php echo RENK1;?> none repeat scroll 0 0;
     border: 2px solid #252525;
     border-radius: 50%;
     height: 10px;
     margin-left: -4px;
     outline: medium none;
     width: 10px;
     cursor: pointer;
}
 .single-sidebar .price-ranger .ui-slider-horizontal .ui-slider-handle {
     top: -4px;
}
 .single-sidebar .price-ranger .ui-slider .ui-slider-range {
     background: #252525;
}
 .single-sidebar .price-ranger #slider-range {
     margin-left: 4px;
     margin-right: 6px;
     margin-top: 0;
}
 .single-sidebar .price-ranger .ranger-min-max-block {
     margin-bottom: 0px;
     margin-top: 30px;
     overflow: hidden;
}
 .single-sidebar .price-ranger .ranger-min-max-block input {
     display: inline-block;
}
 .single-sidebar .price-ranger .ranger-min-max-block input[type="submit"] {
     float: left;
     margin-right: 20px;
     padding: 6px 0px 5px;
     text-align: center;
     width: 80px;
     border: none;
     background: <?php echo RENK1;?>;
     color: #fff;
     font-size: 15px;
     font-weight: 700;
     border-radius: 3px;
     transition: all 500ms ease;
}
 .single-sidebar .price-ranger .ranger-min-max-block input[type="submit"]:hover{
     background: <?php echo RENK1;?>;
}
 .single-sidebar .price-ranger .ranger-min-max-block input[type="text"] {
     border: medium none;
     color: #999999;
     font-size: 14px;
     font-weight: 400;
     outline: medium none;
     text-align: right;
     width: 40px;
     margin: 6px 0 0;
}
 .single-sidebar .price-ranger .ranger-min-max-block input[type='text'].max {
}
 .single-sidebar .price-ranger .ranger-min-max-block span {
     color: #999999;
     font-weight: 600;
     font-size: 16px;
}
 .sidebar-wrapper .single-sidebar .popular-product {
}
 .sidebar-wrapper .single-sidebar .popular-product li {
     border-bottom: 1px solid #f7f7f7;
     margin-bottom: 25px;
     overflow: hidden;
     padding-bottom: 25px;
     padding-left: 70px;
     position: relative;
}
 .sidebar-wrapper .single-sidebar .popular-product li:last-child {
     margin-bottom: 0px;
}
 .sidebar-wrapper .single-sidebar .popular-product li .img-holder{
     display: block;
     overflow: hidden;
     position: absolute;
     width: 70px;
     min-height: 70px;
     top: 0;
     left: 0;
}
 .sidebar-wrapper .single-sidebar .popular-product li .img-holder img{
     border: 1px solid #f5f4f3;
     transition: all 0.5s ease 0s;
     width: 100%;
}
 .sidebar-wrapper .single-sidebar .popular-product li:hover .img-holder img{
}
 .sidebar-wrapper .single-sidebar .popular-product li .img-holder .overlay-style-one .box .content a i {
     opacity: 0;
     font-size: 16px;
     color: #fff;
     transition: all 500ms ease;
}
 .sidebar-wrapper .single-sidebar .popular-product li .img-holder .overlay-style-one .box .content a:hover i{
     color: #000000;
}
 .sidebar-wrapper .single-sidebar .popular-product li:hover .img-holder .overlay-style-one .box .content a i{
     opacity: 1;
}
 .sidebar-wrapper .single-sidebar .popular-product li:hover .img-holder .overlay-style-one{
     -webkit-transform: scale(1);
     transform: scale(1);
     opacity: 1;
}
 .sidebar-wrapper .single-sidebar .popular-product li .title-holder {
     padding-left: 20px;
}
 .sidebar-wrapper .single-sidebar .popular-product li .title-holder a h4 {
     color: #404040;
     font-size: 16px;
     font-weight: 400;
     text-transform: capitalize;
     margin: 0 0 10px;
     transition: all 500ms ease;
}
 .sidebar-wrapper .single-sidebar .popular-product li .title-holder h5 {
     color: <?php echo RENK1;?>;
     font-size: 14px;
     font-weight: 400;
     text-transform: capitalize;
     font-family: 'Open Sans', sans-serif;
}
 .sidebar-wrapper .single-sidebar .popular-product li .title-holder .review-box {
     line-height: 14px;
     margin: 10px 0 0;
}
 .sidebar-wrapper .single-sidebar .popular-product li .title-holder .review-box li {
     display: inline-block;
     margin: 0 1px;
     position: static;
     padding: 0;
     border: none;
}
 .sidebar-wrapper .single-sidebar .popular-product li .title-holder .review-box li i{
     font-size: 12px;
     color: <?php echo RENK1;?>;
}
 .sidebar-wrapper .single-sidebar .popular-product li .title-holder a:hover h4{
     color: #000;
}
/*** ============================================= Checkout Area style ============================================= ***/
 .checkout-area {
     padding-bottom: 80px;
     padding-top: 80px;
}
 .checkout-area .sec-title {
     padding-bottom: 40px;
}
 .checkout-area .sec-title h1 {
     color: #222;
     font-size: 24px;
     text-transform: none;
}
 .checkout-area .exisitng-customer {
     background: #f7f7f7;
     display: block;
     padding: 20px 28px 21px;
     position: relative;
     margin-bottom: 20px;
}
 .checkout-area .exisitng-customer:before{
     position: absolute;
     top: 0;
     left: 0;
     width: 2px;
     height: 100%;
     background: <?php echo RENK1;?>;
     content: "";
}
 .checkout-area .exisitng-customer h5{
     color: #222222;
     font-size: 16px;
     font-weight: 400;
}
 .checkout-area .exisitng-customer h5 a{
     color: <?php echo RENK1;?>;
     display: inline-block;
     padding-left: 15px;
}
 .checkout-area .coupon {
     background: #f7f7f7;
     display: block;
     padding: 20px 28px 21px;
     position: relative;
     margin-bottom: 60px;
}
 .checkout-area .coupon:before {
     position: absolute;
     top: 0;
     left: 0;
     width: 2px;
     height: 100%;
     background: <?php echo RENK1;?>;
     content: "";
}
 .checkout-area .coupon h5 {
     color: #222222;
     font-size: 16px;
     font-weight: 400;
}
 .checkout-area .coupon h5 a {
     color: <?php echo RENK1;?>;
     display: inline-block;
     padding-left: 15px;
}
 .checkout-area .form form .field-label {
     color: #222222;
     font-size: 16px;
     font-weight: 400;
     margin: 0 0 3px;
     text-transform: capitalize;
     font-family: 'Roboto', sans-serif;
}
 .checkout-area .form form .field-input input[type="text"] {
     border: 2px solid #f4f4f4;
     color: #999999;
     display: block;
     font-size: 14px;
     height: 48px;
     margin-bottom: 23px;
     padding: 0 15px;
     width: 100%;
     transition: all 500ms ease;
     -moz-transition: all 500ms ease;
     -webkit-transition: all 500ms ease;
     -ms-transition: all 500ms ease;
     -o-transition: all 500ms ease;
}
 .checkout-area .form form .field-input input[type="text"]:focus{
     border: 2px solid <?php echo RENK1;?>;
}
 .checkout-area .create-acc .checkbox {
     margin: 7px 0 0;
}
 .checkout-area .create-acc .checkbox label {
     color: <?php echo RENK1;?>;
     font-weight: 400;
     font-size: 16px;
}
 .checkout-area .create-acc .checkbox input {
     margin-top: 6px;
}
 .checkout-area .shipping-info input[type="checkbox"] {
     cursor: pointer;
     display: inline-block;
     margin: 0 0 0 25px;
     position: relative;
     top: 0px;
     vertical-align: middle;
}
 .checkout-area .form form .field-input textarea {
     border: 2px solid #f4f4f4;
     color: #999;
     display: block;
     font-size: 14px;
     height: 119px;
     padding: 10px 15px;
     width: 100%;
     transition: all 500ms ease;
     -moz-transition: all 500ms ease;
     -webkit-transition: all 500ms ease;
     -ms-transition: all 500ms ease;
     -o-transition: all 500ms ease;
}
 .checkout-area .form form .field-input textarea:focus{
     border-color: <?php echo RENK1;?>;
}
 .checkout-area .bottom {
     padding-top: 60px 
}
 .checkout-area .table {
     overflow-x: auto;
     position: relative;
     width: 100%;
     margin-bottom: 0;
}
 .checkout-area .table .cart-table {
     min-width: auto;
     width: 100%;
}
 .checkout-area .table .cart-table .cart-header {
     background: #f7f7f7;
     color: #222222;
     font-size: 16px;
     position: relative;
     text-transform: capitalize;
     width: 100%;
     font-family: 'Roboto', sans-serif;
}
 .checkout-area .table .cart-table thead tr th {
     font-weight: 400;
     line-height: 24px;
     min-width: 110px;
     padding: 19px 30px 17px;
}
 .checkout-area .table .cart-table thead tr th.product-column {
     padding-left: 30px;
     text-align: left;
}
 .checkout-area .table .cart-table tbody tr {
     border-bottom: 1px solid #f7f7f7;
}
 .checkout-area .table .cart-table tbody tr td {
     vertical-align: middle 
}
 .checkout-area .table .cart-table tbody tr td {
     min-width: 110px;
     padding: 25px 20px;
}
 .checkout-area .table .cart-table tbody tr .product-column .column-box {
     min-height: 70px;
}
 .checkout-area .table .cart-table tbody tr .product-column .column-box .prod-thumb {
     width: 70px;
     border: 2px solid #f7f7f7;
     padding: 3px;
}
 .checkout-area .table .cart-table tbody tr .product-column .column-box .prod-thumb img {
     display: block;
     max-width: 100%;
}
 .checkout-area .table .cart-table tbody tr .product-column .column-box .prod-thumb, .checkout-area .table .cart-table tbody tr .product-column .column-box .product-title{
     display: table-cell;
     vertical-align: middle;
}
 .checkout-area .table .cart-table tbody tr .product-column .column-box .product-title{
     padding-left: 15px;
}
 .checkout-area .table .cart-table tbody tr .product-column .column-box .product-title h3 {
     color: #222222;
     font-size: 16px;
     font-weight: 400;
     text-transform: capitalize;
     font-family: 'Roboto', sans-serif;
}
 .checkout-area .table .cart-table tbody tr .qty {
     padding-right: 30px;
     width: 130px;
}
 .checkout-area .table .cart-table tbody tr .qty .input-group.bootstrap-touchspin {
     float: right;
     width: 60px;
}
 .checkout-area .table .cart-table tbody tr .qty .form-control {
     background-color: #fff;
     background-image: none;
     border: 1px solid #ccc;
     border-radius: 0;
     box-shadow: none;
     color: #252525;
     display: block;
     font-size: 18px;
     font-weight: 400;
     height: 34px;
     padding: 6px 0;
     text-align: center;
}
 .checkout-area .table .cart-table tbody tr .qty .bootstrap-touchspin .input-group-btn-vertical .bootstrap-touchspin-up {
     border-radius: 0;
}
 .checkout-area .table .cart-table tbody tr .qty .btn-default {
     background-color: <?php echo RENK1;?>;
     border-color: #0e9d17;
     color: #fff;
}
 .checkout-area .table .cart-table tbody tr .qty .bootstrap-touchspin .input-group-btn-vertical .bootstrap-touchspin-down {
     border-radius: 0;
     margin-top: -2px;
}
 .checkout-area .table .cart-table tbody tr td.price {
     color: #0e9d17;
     font-size: 18px;
     font-weight: 400;
}
 .cart-total{
}
 .cart-total-table {
     border: 2px solid #f7f7f7 
}
 .cart-total-table li {
     border-bottom: 1px solid #f7f7f7 
}
 .cart-total-table li:last-child {
     border-bottom: none 
}
 .cart-total-table li span.col.col-title {
     border-right: 1px solid #f7f7f7;
     color: #222222;
     display: block;
     float: left;
     font-size: 16px;
     font-weight: 400;
     line-height: 28px;
     padding: 10px 18px;
     position: relative;
     width: 50%;
     font-family: 'Roboto', sans-serif;
}
 .cart-total-table li span.col {
     color: #999999;
     display: block;
     float: left;
     font-size: 16px;
     font-weight: 400;
     line-height: 28px;
     padding: 10px 18px;
     position: relative;
     width: 50%;
     font-family: 'Open Sans', sans-serif;
}
 .cart-total-table li span.col b {
     color: #0e9d17;
     font-weight: 300;
     text-decoration: underline;
}
 .cart-total .payment-options {
     background: #f7f7f7 none repeat scroll 0 0;
     margin-top: 30px;
     overflow: hidden;
     padding: 23px 20px 35px;
}
 .cart-total .payment-options .option-block {
     margin-bottom: 14px 
}
 .cart-total .payment-options .option-block .checkbox {
     margin: 0 0 5px;
}
 .cart-total .payment-options .option-block .checkbox label {
     font-weight: 700;
     min-height: 20px;
     padding-left: 20px;
}
 .cart-total .payment-options .option-block .checkbox label input {
     position: relative;
     top: 1px;
}
 .cart-total .payment-options .option-block .checkbox label span {
     color: #222222;
     font-size: 16px;
     padding-left: 10px;
     font-weight: 400;
     font-family: 'Roboto', sans-serif;
}
 .cart-total .payment-options .option-block .checkbox label span b {
     color: #0e9d17;
     display: inline-block;
     font-size: 14px;
     font-weight: 400;
     padding-left: 25px;
     text-decoration: underline;
}
 .cart-total .payment-options .option-block .text{
     padding-left: 30px;
}
 .cart-total .payment-options .option-block .text p {
     margin: 0;
     line-height: 28px;
}
 .placeorder-button button {
     padding: 11px 40px 9px;
     margin-top: 20px;
}
/*** ============================================= Login Register Area style ============================================= ***/
 .login-register-area {
     padding-bottom: 80px;
     padding-top: 80px;
}
 .login-register-area .form .sec-title {
     padding-bottom: 40px;
}
 .login-register-area .form .sec-title h1 {
}
 .login-register-area .form .input-field {
     position: relative;
}
 .login-register-area .form .input-field input[type="text"] {
     border: 2px solid #f4f4f4;
     color: #777;
     font-size: 15px;
     height: 50px;
     margin-bottom: 30px;
     padding-left: 15px;
     padding-right: 50px;
     width: 100%;
     transition: all 700ms ease 0s;
}
 .login-register-area .form .input-field .icon-holder {
     position: absolute;
     right: 20px;
     top: 11px;
}
 .login-register-area .form .input-field .icon-holder i {
     color: #777;
     font-size: 14px;
     font-weight: 400;
}
 .login-register-area .form button {
     margin-top: 10px;
     padding: 11px 45px 11px;
}
 .login-register-area .form .remember-text {
     margin-top: 19px;
}
 .login-register-area .form .remember-text .checkbox label {
     color: #222222;
     font-size: 16px;
     font-weight: 400;
     font-family: 'Roboto', sans-serif;
}
 .login-register-area .form .remember-text .checkbox input {
     margin-top: 5px;
}
 .login-register-area .form .social-icon {
     float: right;
     margin-right: -8px;
     margin-top: 15px;
     position: relative;
}
 .login-register-area .form .social-icon .login-with {
     display: inline-block;
     left: -100px;
     position: absolute;
     top: 8px;
}
 .login-register-area .form .social-icon li {
     display: inline-block;
     margin: 0 8px;
}
 .login-register-area .form .social-icon li a i {
     background: #3b5998 none repeat scroll 0 0;
     border-radius: 50%;
     color: #fff;
     display: block;
     font-size: 14px;
     font-weight: 100;
     height: 40px;
     line-height: 24px;
     padding: 8px 0;
     text-align: center;
     transition: all 700ms ease 0s;
     width: 40px;
}
 .login-register-area .form .social-icon li a i.twitter {
     background: #33ccfe none repeat scroll 0 0;
}
 .login-register-area .form .social-icon li a i.gplus {
     background: #dd4b39 none repeat scroll 0 0;
}
 .login-register-area .form a.forgot-password {
     color: <?php echo RENK1;?>;
     float: right;
     font-weight: 700;
     margin: 20px 0 0;
     font-family: 'Open Sans', sans-serif;
}
 .login-register-area .form h6 {
     color: #848484;
     float: left;
     font-size: 14px;
     font-family: 'Hind', sans-serif;
     padding-left: 10px;
     overflow: hidden;
     margin-left: -40px;
     margin-top: 28px;
}
 .login-register-area .form .input-field input[type="text"]:focus{
     border: 2px solid <?php echo RENK1;?>;
}
 .login-register-area .form .social-icon li a:hover i{
     background: #18387b;
}
 .login-register-area .form .social-icon li a:hover i.twitter{
     background: #12addf;
}
 .login-register-area .form .social-icon li a:hover i.gplus{
     background: #c62d1a;
}
/*** ============================================= Cart area style ============================================= ***/
 .cart-area {
     padding-bottom: 80px;
     padding-top: 80px;
}
 .cart-area .sec-title{
     padding-bottom: 32px;
}
 .cart-area .sec-title h1{
     font-size: 24px;
     margin: 0;
}
 .cart-area .table-outer {
     overflow-x: auto;
     position: relative;
     width: 100%;
}
 .cart-area .cart-table {
     min-width: 1024px;
     width: 100%;
}
 .cart-area .cart-table .cart-header {
     background: #f7f7f7;
     color: #222222;
     font-family: 'Roboto', sans-serif;
     font-size: 16px;
     position: relative;
     text-transform: capitalize;
     width: 100%;
}
 .cart-area .cart-table thead tr th {
     font-weight: 400;
     line-height: 24px;
     min-width: 110px;
     padding: 20px 25px;
}
 .cart-area .cart-table thead tr th.prod-column {
     padding-left: 30px;
     text-align: left;
}
 .cart-area .cart-table thead tr th.availability {
     padding: 0 40px 
}
 .cart-area .cart-table tbody tr {
     border-bottom: 1px solid #f7f7f7;
}
 .cart-area .cart-table tbody tr td {
     color: #999999;
     font-family: 'Roboto', sans-serif;
     font-size: 14px;
     font-weight: 400;
     line-height: 20px;
     min-width: 100px;
     padding: 27.5px 25px;
}
 .cart-area .cart-table tbody tr .prod-column .column-box {
     min-height: 70px;
     position: relative;
}
 .cart-area .cart-table tbody tr .prod-column .column-box .prod-thumb {
     width: 70px;
     border: 2px solid #f7f7f7;
     padding: 3px;
}
 .cart-area .cart-table tbody tr .prod-column .column-box .prod-thumb img {
     display: block;
     max-width: 100%;
}
 .cart-area .cart-table tbody tr .prod-column .column-box .prod-thumb, .cart-area .cart-table tbody tr .prod-column .column-box .title{
     display: table-cell;
     vertical-align: middle;
}
 .cart-area .cart-table tbody tr .prod-column .column-box .title{
     padding-left: 20px;
}
 .cart-area .cart-table tbody tr .prod-column .column-box .title h3 {
     color: #222222;
     font-size: 16px;
     font-weight: 400;
     text-transform: capitalize;
     font-family: 'Roboto', sans-serif;
}
 .cart-area .cart-table tbody tr .qty {
     padding-right: 25px;
     width: 120px;
}
 .cart-area .cart-table tbody tr .qty .input-group.bootstrap-touchspin {
}
 .cart-area .cart-table tbody tr .qty .bootstrap-touchspin .input-group-btn-vertical .bootstrap-touchspin-up {
     border-radius: 0;
     margin-left: 0;
     padding: 11px;
}
 .cart-area .cart-table tbody tr .qty .btn-default {
     background-color: #e0dcdc;
     border-color: #ababab;
     color: #fff;
}
 .cart-area .cart-table tbody tr .qty .bootstrap-touchspin .input-group-btn-vertical .bootstrap-touchspin-down {
     border-radius: 0;
     margin-left: 0;
     margin-top: -1px;
     padding: 10px;
}
 .cart-area .cart-table tbody tr .qty .bootstrap-touchspin .input-group-btn-vertical i {
     font-size: 9px;
     left: 6px;
     top: 6px;
}
 .cart-area .cart-table tbody tr td.unit-price {
     padding-left: 40px;
     padding-right: 20px;
}
 .cart-area .cart-table tbody .available-info {
     color: #999999;
     font-size: 14px;
     font-weight: 400;
     line-height: 20px;
     padding-left: 50px;
     position: relative;
}
 .cart-area .cart-table tbody .available-info .icon {
     background: <?php echo RENK1;?> none repeat scroll 0 0;
     border-radius: 50%;
     color: #ffffff;
     font-size: 18px;
     height: 40px;
     left: 0;
     line-height: 40px;
     position: absolute;
     text-align: center;
     top: 0px;
     width: 40px;
}
 .cart-area .cart-table tbody tr td.price {
     color: #999999;
     font-size: 18px;
     font-weight: 400;
}
 .cart-area .cart-table tbody tr .sub-total {
     color: <?php echo RENK1;?>;
     font-weight: 400;
     font-size: 18px;
}
 .cart-area .cart-table tbody tr td .remove{
}
 .cart-area .cart-table tbody tr td .remove .checkbox label {
     color: #777;
     font-size: 16px;
     font-weight: 400;
}
 .cart-area .cart-table tbody tr td .remove .checkbox label input[type="checkbox"] {
     display: inline-block;
     position: relative;
     top: 1px;
}
 .cart-middle {
     padding-top: 30px 
}
 .cart-middle .apply-coupon {
     padding-left: 245px;
     position: relative;
}
 .cart-middle .apply-coupon input[type="text"] {
     border: 2px solid #f7f7f7;
     color: #777;
     font-size: 14px;
     font-weight: 400;
     height: 50px;
     left: 0;
     padding: 0 15px;
     position: absolute;
     text-transform: capitalize;
     top: 0;
     transition: all 500ms ease 0s;
     width: 225px;
}
 .cart-middle .apply-coupon input[type="text"]:focus {
     border: 2px solid <?php echo RENK1;?>;
}
 .cart-middle .apply-coupon .apply-coupon-button button {
     padding: 11px 45px 11px;
}
 .cart-middle .update-cart button {
     padding: 11px 45px 11px;
     background: #f7f7f7;
     color: #222222;
     border-color: #f7f7f7;
}
 .cart-middle .update-cart button:hover{
     background: <?php echo RENK1;?>;
     color: #fff;
}
 .cart-bottom {
     overflow: hidden;
     padding-top: 76px;
}
 .cart-bottom .calculate-shipping {
}
 .cart-bottom .calculate-shipping .ui-state-default .ui-icon {
}
 .cart-bottom .calculate-shipping .ui-selectmenu-button span.ui-icon {
     border-left: 2px solid #f7f7f7;
     display: block;
     float: right;
     height: 41px;
     text-indent: 0;
     top: 8px;
     width: 45px;
     position: absolute;
     right: 0;
     display: block;
     background-image: none;
}
 .cart-bottom .calculate-shipping .ui-selectmenu-button span.ui-icon::before {
     color: #ababae;
     content: "\f107";
     font-family: FontAwesome;
     font-size: 20px;
     overflow: visible;
     position: absolute;
     right: 14px;
     top: 8px;
}
 .cart-bottom .calculate-shipping .ui-selectmenu-button span.ui-selectmenu-text {
     display: block;
     line-height: 18px;
     overflow: hidden;
     padding: 12px 17px;
     text-align: left;
}
 .cart-bottom .calculate-shipping input[type="text"] {
     border: 2px solid #f7f7f7;
     color: #777;
     display: block;
     font-size: 14px;
     height: 45px;
     padding: 0 18px;
     width: 100%;
     font-weight: 400;
     margin-bottom: 30px;
     transition: all 500ms ease;
     -moz-transition: all 500ms ease;
     -webkit-transition: all 500ms ease;
     -ms-transition: all 500ms ease;
     -o-transition: all 500ms ease;
}
 .cart-bottom .calculate-shipping input[type="text"]:focus {
     border: 2px solid <?php echo RENK1;?>;
}
 .cart-bottom .calculate-shipping button {
     padding: 11px 45px 11px;
     background: #f7f7f7;
     border-color: #f7f7f7;
     color: #222222;
}
 .cart-bottom button.checkout-btn{
     padding: 11px 45px 11px;
     margin-top: 30px;
     float: right;
}
/*** ============================================= Single Shop Area style ============================================= ***/
 .single-shop-area{
     padding-top: 80px;
     padding-bottom: 40px;
}
 .single-shop-content .img-holder {
     margin-right: 50px;
}
 .single-shop-content .img-holder img {
     border: 1px solid #f5f4f3;
}
 .single-shop-content .content-box {
     margin-left: -50px;
}
 .single-shop-content .content-box h3 {
     color: #222222;
     font-size: 24px;
     font-weight: 400;
     margin: 0 0 8px;
     text-transform: capitalize;
}
 .single-shop-content .content-box .review-box {
     margin: 0 0 15px;
}
 .single-shop-content .content-box .review-box ul {
}
 .single-shop-content .content-box .review-box ul li {
}
 .single-shop-content .content-box .review-box ul li i {
     color: <?php echo RENK1;?>;
     font-size: 15px;
}
 .single-shop-content .content-box span.price {
     color: <?php echo RENK1;?>;
     font-size: 22px;
     font-weight: 400;
     font-family: 'Roboto', sans-serif;
}
 .single-shop-content .content-box .text {
     overflow: hidden;
     padding: 25px 0 9px;
}
 .single-shop-content .content-box .location-box {
     margin: 4px 0 20px;
}
 .single-shop-content .content-box .location-box p {
     color: #222222;
     font-size: 16px;
     font-weight: 400;
     margin: 0 0 12px;
}
 .single-shop-content .content-box .location-box form input {
     border: 2px solid #f7f7f7;
     height: 40px;
     padding-left: 10px;
     padding-right: 10px;
     width: 170px;
     transition: all 500ms ease;
     margin: 0 0 15px;
}
 .single-shop-content .content-box .location-box form input:focus{
     border-color: <?php echo RENK1;?>;
}
 .single-shop-content .content-box .location-box form button {
     background: #f7f7f7 none repeat scroll 0 0;
     border: medium none;
     color: #252525;
     font-size: 14px;
     font-weight: 700;
     height: 40px;
     margin-left: 6px;
     padding: 0;
     text-align: center;
     text-transform: uppercase;
     transition: all 500ms ease 0s;
     width: 95px;
     position: relative;
     top: 0px;
     padding-top: 2px;
}
 .single-shop-content .content-box .location-box form button:hover{
     background: <?php echo RENK1;?>;
     color: #fff;
}
 .single-shop-content .content-box .location-box form span {
     color: <?php echo RENK1;?>;
}
 .single-shop-content .content-box .addto-cart-box {
}
 .single-shop-content .content-box .addto-cart-box .input-group.bootstrap-touchspin {
     float: left;
     width: 70px;
}
 .single-shop-content .content-box .addto-cart-box .bootstrap-touchspin .input-group-btn-vertical .bootstrap-touchspin-up {
     border-radius: 0 
}
 .single-shop-content .content-box .addto-cart-box .bootstrap-touchspin .input-group-btn-vertical .bootstrap-touchspin-down {
     border-radius: 0;
     margin-top: -2px;
}
 .single-shop-content .content-box .addto-cart-box .bootstrap-touchspin .input-group-btn-vertical > .btn {
     display: block;
     float: none;
     margin-left: -1px;
     max-width: 100%;
     padding: 12px 12px;
     position: relative;
     width: 100%;
}
 .single-shop-content .content-box .addto-cart-box .btn-default {
     background-color: #efefef;
     border-color: #efefef;
     color: #9e9e9e;
}
 .single-shop-content .content-box .addto-cart-box .bootstrap-touchspin .input-group-btn-vertical i {
     color: #9e9e9e;
     font-weight: normal;
     left: 8px;
     position: absolute;
     top: 7px;
}
 .single-shop-content .content-box .addto-cart-box button.addtocart {
     margin-left: 95px;
     padding: 11px 30px 9px;
}
 .product-tab-box {
     border: 1px solid #ececec;
     border-top: none;
     border-right: none;
     border-left: none;
     overflow: hidden;
     margin-top: 80px;
}
 .product-tab-box .tab-menu {
     border-bottom: 1px solid #ececec;
     margin-bottom: 30px;
}
 .product-tab-box .tab-menu li {
     display: inline-block;
     float: left;
     margin-bottom: -1px;
     margin-right: 3px;
}
 .product-tab-box .tab-menu li a {
     background: #f7f7f7;
     border-top: 1px solid #ececec;
     border-left: 1px solid #ececec;
     border-right: 1px solid #ececec;
     border-bottom: 1px solid transparent;
     border-radius: 0;
     display: block;
     margin-right: 1px;
     padding: 15px 30px 13px;
     color: #222222;
     font-size: 16px;
     font-weight: 600;
     text-transform: capitalize;
     background: #f7f7f7;
     transition: all 500ms ease;
}
 .product-tab-box .tab-menu li.active a, .product-tab-box .tab-menu li:hover a{
     background: #ffffff;
     color: <?php echo RENK1;?>;
     border-left-color: #ececec;
     border-top-color: #ececec;
     border-right-color: #ececec;
}
 .product-tab-box .tab-content {
     border-left: 1px solid #ececec;
     border-right: 1px solid #ececec;
     margin-top: -30px;
     padding: 30px 30px 40px;
}
 .product-tab-box .tab-content .review-box {
}
 .product-tab-box .tab-content .review-box .title {
     margin-top: 3px;
     padding-bottom: 25px;
}
 .product-tab-box .tab-content .review-box .title h3 {
     color: #3d3d3d;
     font-size: 20px;
     font-weight: 400;
     text-transform: capitalize;
}
 .product-tab-box .tab-content .review-box .single-review-box {
     margin-bottom: 30px;
     padding-left: 60px;
     position: relative;
}
 .product-tab-box .tab-content .review-box .single-review-box .img-holder {
     left: 0;
     position: absolute;
     top: 0;
}
 .product-tab-box .tab-content .review-box .single-review-box .text-holder {
     border: 1px solid #ececec;
     margin-left: 20px;
     padding: 17px 20px 12px;
}
 .product-tab-box .tab-content .review-box .single-review-box .text-holder .top {
     margin: 0 0 10px;
     overflow: hidden;
}
 .product-tab-box .tab-content .review-box .single-review-box .text-holder .top .name h4 {
     color: #3d3d3d;
     font-size: 16px;
     font-weight: 400;
     margin: 0;
     text-transform: capitalize;
}
 .product-tab-box .tab-content .review-box .single-review-box .text-holder .top .review-box ul {
     margin-top: -2px;
     padding-left: 0px;
     position: relative;
}
 .product-tab-box .tab-content .review-box .single-review-box .text-holder .top .review-box ul li {
     display: inline-block;
     margin-right: 1px;
}
 .product-tab-box .tab-content .review-box .single-review-box .text-holder .top .review-box ul li i {
     color: <?php echo RENK1;?>;
     font-size: 14px;
}
 .product-tab-box .tab-content .review-box .single-review-box .text-holder .text p {
     margin: 0;
}
 .product-tab-box .tab-content .review-form .title{
}
 .product-tab-box .tab-content .review-form .title h3 {
     margin: 0 0 15px;
}
 .product-tab-box .tab-content .review-form .add-rating-box {
     margin: 0 0 20px;
}
 .product-tab-box .tab-content .review-form .add-rating-box .add-rating-title h4 {
     color: #848484;
     font-size: 16px;
     font-weight: 400;
     margin: 0 0 10px;
     text-transform: none;
}
 .product-tab-box .tab-content .review-form .add-rating-box ul li {
     border-right: 1px solid #ebebeb;
     display: inline-block;
     line-height: 20px;
     margin-right: 10px;
     padding-right: 10px;
}
 .product-tab-box .tab-content .review-form .add-rating-box ul li:last-child{
     margin-right: 0px;
     padding-right: 0px;
     border-right: 0px solid #ebebeb;
}
 .product-tab-box .tab-content .review-form .add-rating-box ul li a i {
     color: #d6d6d6;
     font-size: 12px;
     line-height: 20px;
     margin-right: 1px;
     opacity: 0.9;
     transition: all 500ms ease 0s;
}
 .product-tab-box .tab-content .review-form form .field-label p {
     color: #848484;
     font-size: 16px;
     font-weight: 400;
     margin: 0 0 3px;
}
 .product-tab-box .tab-content .review-form form input[type="text"], .product-tab-box .tab-content .review-form form input[type="email"], .product-tab-box .tab-content .review-form form textarea {
     background: #fff;
     height: 50px;
     width: 100%;
     border: 1px solid #ececec;
     color: #252525;
     font-size: 14px;
     padding: 0 15px;
     margin-bottom: 20px;
     transition: all 500ms ease;
}
 .product-tab-box .tab-content .review-form form textarea {
     height: 110px;
     padding: 10px 15px;
     margin-bottom: 25px;
}
 .product-tab-box .tab-content .review-form form button {
     padding: 11px 35px 9px;
}
 .product-tab-box .tab-content .review-form form button:hover{
}
 .product-tab-box .tab-content .review-form .add-rating-box ul li:hover a i{
     opacity: 1;
     color: <?php echo RENK1;?>;
}
 .product-tab-box .tab-content .review-form form input[type="text"]:focus{
     border-color: <?php echo RENK1;?>;
}
 .product-tab-box .tab-content .review-form form input[type="email"]:focus{
     border-color: <?php echo RENK1;?>;
}
 .product-tab-box .tab-content .review-form form textarea:focus{
     border-color: <?php echo RENK1;?>;
}
 .related-product {
     padding-top: 70px;
}
 .related-product .sec-title {
     padding-bottom: 40px;
}
 .related-product .single-product-item {
}
 .single-shop-area .sidebar-wrapper .single-sidebar .sec-title {
     overflow: hidden;
     padding-bottom: 30px;
}
/*** ============================================= DatePicker style ============================================= ***/
 .ui-datepicker-calendar .ui-state-default{
     border: 1px solid #d3d3d3;
     background: none;
     font-weight: 400;
     color: #252525;
     background-color: #ffffff;
     text-align: center;
     display: block;
     font-size: 14px;
     border-radius: 0px;
}
 input#datepicker {
     cursor: pointer;
}
 #ui-datepicker-div.ui-widget-content {
     border: 1px solid #c5c5c5;
     background: #fff none repeat scroll 0 0;
     border: 1px solid #777;
     color: #252525;
     font-family: "Poppins",sans-serif;
     font-size: 14px;
     border-radius: 0px;
     width: 270px;
     padding: 5px;
}
 #ui-datepicker-div.ui-datepicker .ui-datepicker-header {
     background: <?php echo RENK1;?> none repeat scroll 0 0;
     border: 2px solid #252525;
     border-radius: 0;
     color: #fff;
     font-weight: 700;
     padding: 5px 0;
     position: relative;
}
 .ui-datepicker .ui-datepicker-prev {
     left: 5px;
}
 .ui-datepicker .ui-datepicker-prev, .ui-datepicker .ui-datepicker-next {
     border-radius: 30%;
     height: 20px;
     position: absolute;
     top: 7px;
     width: 20px;
     transition: all 500ms ease;
     cursor: pointer;
}
 .ui-datepicker .ui-datepicker-next {
     right: 5px;
}
 .ui-datepicker .ui-datepicker-prev:hover, .ui-datepicker .ui-datepicker-next:hover {
     top: 7px;
     background: #fff;
     border: none;
}
 .ui-datepicker table {
     border-collapse: collapse;
     font-size: 13px;
     margin: 0 0 0.4em;
     width: 100%;
}
 .ui-datepicker th {
     border: medium none;
     font-weight: 600;
     padding: 2px 3px;
     text-align: center;
     border: 1px solid #ddd;
}
 .ui-datepicker-calendar .ui-state-default:hover, .ui-datepicker-calendar .ui-state-default:active{
     background: <?php echo RENK1;?>;
     color: #fff;
     border-color: <?php echo RENK1;?>;
}
 #HizmetResim{
     width:270px;
     height:270px;
     border-radius:100%;
     background-position: center;
     background-repeat: no-repeat;
     background-size: cover;
     margin-left: auto;
     margin-right: auto;
}
 .single-blog-item {
     position: relative;
     overflow: hidden;
     display: block;
     min-height: 312px;
     border-bottom: 1px solid #f4f4f4;
     background: #ddd;
}
 .form-div{
     margin-bottom: 0px;
     clear: both;
     overflow: hidden;
}
 .form-div.capt-cont .captcha {
     margin-left: 0;
     width: 48%;
}
 .form-div.capt-cont .captcha {
     width: 98%;
     position:relative;
     margin-left: 5px;
     border: 2px solid rgba(0, 0, 0, 0.1);
     padding: 1.5px 0px;
}
 .form-div.capt-cont .captcha img {
     border: none !important;
     margin: 0 !important;
     display: block;
     max-height: 100%;
}
 .form-div.capt-cont .captcha img {
     border: none !important;
     display: block;
     max-height: 100%;
}
 .captcha a>img {
     position: absolute;
     width: 25px;
     right: 10px;
     top: 12px;
     -webkit-transition-duration: 0.8s;
     -o-transition-duration: 0.8s;
     transition-duration: 0.8s;
     -webkit-transition-property: -webkit-transform;
     -o-transition-property: -o-transform;
     transition-property: -webkit-transform;
     -o-transition-property: transform;
     transition-property: transform;
     transition-property: transform, -webkit-transform;
}
 .post.post9 {
     color: #fff;
     font-size: 14px;
     position: relative;
}
 .post {
     overflow: hidden;
}
 .mar-b-xs {
     margin-bottom: 30px;
}
 .post.post9 a {
     color: inherit;
}
 .post.post9 .img-holder {
     transition: all 0.25s linear;
}
 .img-responsive2 {
     width: 100%;
     height: auto;
     display: block;
}
 .post.post9 .txt-holder {
     top: 0;
     left: 0;
     right: 0;
     margin: 0;
     bottom: 0;
     padding: 0;
     position: absolute;
     background: linear-gradient(top, rgba(50, 48, 49, 0.01) 0%, rgba(50, 48, 49, 0.03) 16%, rgba(50, 48, 49, 0.11) 28%, rgba(50, 48, 49, 0.18) 34%, rgba(50, 48, 49, 0.22) 38%, rgba(50, 48, 49, 0.25) 40%, rgba(50, 48, 49, 0.26) 41%, rgba(50, 48, 49, 0.29) 42%, rgba(50, 48, 49, 0.32) 44%, rgba(50, 48, 49, 0.33) 46%, rgba(50, 48, 49, 0.36) 47%, rgba(50, 48, 49, 0.43) 52%, rgba(50, 48, 49, 0.46) 53%, rgba(50, 48, 49, 0.51) 57%, rgba(50, 48, 49, 0.55) 58%, rgba(50, 48, 49, 0.55) 59%, rgba(50, 48, 49, 0.59) 61%, rgba(50, 48, 49, 0.59) 62%, rgba(50, 48, 49, 0.62) 63%, rgba(50, 48, 49, 0.62) 64%, rgba(50, 48, 49, 0.67) 67%, rgba(50, 48, 49, 0.74) 73%, rgba(50, 48, 49, 0.79) 81%, rgba(50, 48, 49, 0.83) 87%, rgba(50, 48, 49, 0.87) 100%);
     background: -moz-linear-gradient(top, rgba(50, 48, 49, 0.01) 0%, rgba(50, 48, 49, 0.03) 16%, rgba(50, 48, 49, 0.11) 28%, rgba(50, 48, 49, 0.18) 34%, rgba(50, 48, 49, 0.22) 38%, rgba(50, 48, 49, 0.25) 40%, rgba(50, 48, 49, 0.26) 41%, rgba(50, 48, 49, 0.29) 42%, rgba(50, 48, 49, 0.32) 44%, rgba(50, 48, 49, 0.33) 46%, rgba(50, 48, 49, 0.36) 47%, rgba(50, 48, 49, 0.43) 52%, rgba(50, 48, 49, 0.46) 53%, rgba(50, 48, 49, 0.51) 57%, rgba(50, 48, 49, 0.55) 58%, rgba(50, 48, 49, 0.55) 59%, rgba(50, 48, 49, 0.59) 61%, rgba(50, 48, 49, 0.59) 62%, rgba(50, 48, 49, 0.62) 63%, rgba(50, 48, 49, 0.62) 64%, rgba(50, 48, 49, 0.67) 67%, rgba(50, 48, 49, 0.74) 73%, rgba(50, 48, 49, 0.79) 81%, rgba(50, 48, 49, 0.83) 87%, rgba(50, 48, 49, 0.87) 100%);
     background: -webkit-linear-gradient(top, rgba(50, 48, 49, 0.01) 0%, rgba(50, 48, 49, 0.03) 16%, rgba(50, 48, 49, 0.11) 28%, rgba(50, 48, 49, 0.18) 34%, rgba(50, 48, 49, 0.22) 38%, rgba(50, 48, 49, 0.25) 40%, rgba(50, 48, 49, 0.26) 41%, rgba(50, 48, 49, 0.29) 42%, rgba(50, 48, 49, 0.32) 44%, rgba(50, 48, 49, 0.33) 46%, rgba(50, 48, 49, 0.36) 47%, rgba(50, 48, 49, 0.43) 52%, rgba(50, 48, 49, 0.46) 53%, rgba(50, 48, 49, 0.51) 57%, rgba(50, 48, 49, 0.55) 58%, rgba(50, 48, 49, 0.55) 59%, rgba(50, 48, 49, 0.59) 61%, rgba(50, 48, 49, 0.59) 62%, rgba(50, 48, 49, 0.62) 63%, rgba(50, 48, 49, 0.62) 64%, rgba(50, 48, 49, 0.67) 67%, rgba(50, 48, 49, 0.74) 73%, rgba(50, 48, 49, 0.79) 81%, rgba(50, 48, 49, 0.83) 87%, rgba(50, 48, 49, 0.87) 100%);
     background: linear-gradient(to bottom, rgba(50, 48, 49, 0.01) 0%, rgba(50, 48, 49, 0.03) 16%, rgba(50, 48, 49, 0.11) 28%, rgba(50, 48, 49, 0.18) 34%, rgba(50, 48, 49, 0.22) 38%, rgba(50, 48, 49, 0.25) 40%, rgba(50, 48, 49, 0.26) 41%, rgba(50, 48, 49, 0.29) 42%, rgba(50, 48, 49, 0.32) 44%, rgba(50, 48, 49, 0.33) 46%, rgba(50, 48, 49, 0.36) 47%, rgba(50, 48, 49, 0.43) 52%, rgba(50, 48, 49, 0.46) 53%, rgba(50, 48, 49, 0.51) 57%, rgba(50, 48, 49, 0.55) 58%, rgba(50, 48, 49, 0.55) 59%, rgba(50, 48, 49, 0.59) 61%, rgba(50, 48, 49, 0.59) 62%, rgba(50, 48, 49, 0.62) 63%, rgba(50, 48, 49, 0.62) 64%, rgba(50, 48, 49, 0.67) 67%, rgba(50, 48, 49, 0.74) 73%, rgba(50, 48, 49, 0.79) 81%, rgba(50, 48, 49, 0.83) 87%, rgba(50, 48, 49, 0.87) 100%);
}
 .post.post9:hover .header {
     transform: translateY(-20px);
}
 .post.post9:hover .img-holder {
     transform: rotate(3deg) scale(1.1);
}
 .post .txt-holder {
     z-index: 1;
     padding: 0 8%;
     margin: -70px 0 0;
     position: relative;
}
 .post.post9 .header {
     left: 0;
     right: 0;
     bottom: 0;
     padding: 7px 18px;
     position: absolute;
     transition: all 0.25s linear;
}
 .post.post9 h3 {
     color: #fff;
     font-size: 20px;
     margin: 0 0 10px;
     font-weight: bold;
     font-family: "Exo 2", "Helvetica Neue", Helvetica, Arial, sans-serif;
}
 .text-uppercase, .initialism {
     text-transform: uppercase;
}
 .album-item {
     width: auto;
     height: auto;
     border-radius: 8px;
     background-color: #fff;
     border: solid 1px #eef7fa;
     padding: 10px;
     float: left;
     width: 100%;
     -webkit-transition: all 0.5s ease-in;
     -o-transition: all 0.5s ease-in;
     transition: all 0.5s ease-in;
     top: 0;
     position: relative;
     margin-bottom: 20px;
}
 span.slide-show i {
     display: block;
     text-align: center;
     font-style: normal;
     position: relative;
     color: #f47524;
     line-height: normal 
}
 span.slide-show i+i {
     margin-top: 10px;
     font-size: 11px;
     padding: 0 6px;
     color: #fff;
}
 section.album {
     padding: 0;
}
 section.album-detay {
     padding-top: 0;
}
 .album-isim.wdth100 {
     width: 100%;
     max-height: 16px;
     -webkit-line-clamp: 1;
     -webkit-box-orient: vertical;
     overflow: hidden;
}
 .album-bg {
     height: 174px;
     background-size: cover!important;
     background-position: center center!important;
     background-repeat: no-repeat!important;
     border-radius: 8px;
     float: left;
     width: 100%;
     display: -webkit-box;
     display: -ms-flexbox;
     display: flex;
     -webkit-box-align: center;
     -ms-flex-align: center;
     align-items: center;
     -webkit-box-pack: center;
     -ms-flex-pack: center;
     justify-content: center;
     position: relative 
}
 .album-galeri .col-md-3.col-sm-6.col-xs-12, .video-galeri .col-md-3.col-sm-6.col-xs-12, .fotograf-galeri .col-md-3.col-sm-6.col-xs-12, .video-galeri .col-md-3.col-sm-6.col-xs-12 {
     margin-bottom: 30px 
}
 .album-aciklama {
     font-size: 14px;
     font-weight: 600;
     font-style: normal;
     font-stretch: normal;
     line-height: normal;
     letter-spacing: -.3px;
     text-align: left;
     color: #a0c9da;
     margin: 20px 0 10px 
}
 .clear {
     clear: both 
}
 .clear2 {
     clear: both;
     display: none 
}
 .album-genel {
     float: left;
     width: 100%;
     margin-top: 15px 
}
 .album-isim {
     font-size: 12px;
     font-weight: 600;
     font-style: normal;
     font-stretch: normal;
     line-height: normal;
     letter-spacing: -.3px;
     color: #f47524;
     float: left;
     width: 140px;
     max-height: 32px;
     display: -webkit-box;
     -webkit-line-clamp: 2;
     -webkit-box-orient: vertical;
     overflow: hidden;
}
 .album-tarih {
     float: right;
     font-size: 12px;
     font-weight: 400;
     font-style: normal;
     font-stretch: normal;
     line-height: normal;
     letter-spacing: -.3px;
     color: #f47524 
}
 a.album-item:hover {
     -webkit-box-shadow: 0 8px 15px -3px rgba(0, 0, 0, .24);
     box-shadow: 0 8px 15px -3px rgba(0, 0, 0, .24);
     position: relative;
     top: -10px;
     -webkit-transition: all 0.5s ease-in;
     -o-transition: all 0.5s ease-in;
     transition: all 0.5s ease-in;
}
 .album-bg:before {
     content: "";
     position: absolute;
     left: 0;
     right: 0;
     top: 0;
     bottom: 0;
     background: rgba(42, 67, 91, .59);
     opacity: 0;
     -webkit-transition: all 0.5s ease-in;
     -o-transition: all 0.5s ease-in;
     transition: all 0.5s ease-in 
}
 .album-bg:hover:before {
     opacity: 1;
     visibility: visible;
     -webkit-transition: all 0.5s ease-in;
     -o-transition: all 0.5s ease-in;
     transition: all 0.5s ease-in 
}
 .fotograf-galeri span.slide-show i:before {
     font-size: 30px 
}
 span.slide-show i:before {
     margin: 0;
     color: #f47524;
     font-size: 60px;
     line-height: normal 
}
 span.slide-show {
     opacity: 0;
     visibility: hidden;
     -webkit-transition: all 0.5s ease-in;
     -o-transition: all 0.5s ease-in;
     transition: all 0.5s ease-in;
     position: relative 
}
 .album-bg:hover span {
     opacity: 1;
     visibility: visible;
     -webkit-transition: all 0.5s ease-in;
     -o-transition: all 0.5s ease-in;
     transition: all 0.5s ease-in 
}
 .fotograf-galeri {
     display: block;
     position: relative;
}
 .album-isim-ic {
     position: absolute;
     top: 0;
     left: 190px;
     font-size: 15px;
     font-weight: 700;
     font-style: normal;
     font-stretch: normal;
     line-height: normal;
     text-align: center;
     color: #f47524;
     text-transform: uppercase;
     line-height: 50px;
}
 .album-isim-ic:before {
     content: "";
     position: absolute;
     right: -830px;
     width: 820px;
     height: 1px;
     top: 50%;
     margin-top: .5px;
     background: #eef7fa 
}
 .load-more-link {
     margin: 0;
     display: block;
     width: 300px;
     text-align: center;
     font-weight: 700;
     border-radius: 50px;
     color: #000;
     padding: 10px;
     font-size: 18px;
     margin-left: auto;
     margin-right: auto;
     border: 1px solid #ddd;
}
 .load-more-link:hover {
     color:#ddd;
}
 .load-more-wrapper{
     overflow:hidden;
}
 .load-more-container {
     position: relative 
}
 .load-more-container .icon-spin1 {
     position: absolute;
     top: 0;
     opacity: 0;
     visibility: hidden;
     left: 0;
     right: 0;
     bottom: 0;
     text-align: center;
     z-index: 999;
     transition: all .3s linear;
     line-height: 100%;
     width: 100%;
     height: 100%;
     background-color: rgba(255, 255, 255, .7) 
}
 .load-more-container .icon-spin1:before {
     top: 50%;
     -moz-animation: spin 2s infinite linear;
     -o-animation: spin 2s infinite linear;
     -webkit-animation: spin 2s infinite linear;
     animation: spin 2s infinite linear;
     left: 50%;
     position: absolute;
     -webkit-transform: translate(-50%, -50%);
     -ms-transform: translate(-50%, -50%);
     transform: translate(-50%, -50%);
     font-size: 3em 
}
 .load-more-container .icon-spin1.is_active {
     opacity: 1;
     visibility: visible 
}
 .referans a {
     background: #fff none repeat scroll 0 0;
     box-shadow: 0 0 10px rgba(0, 0, 0, 0.12);
     float: left;
     width: 100%;
}
 .referans a, .innerPageReferences .photo .content {
     height: 140px;
     margin-bottom: 20px;
     margin-top: 10px;
}
 .innerPageReferences .photo {
     overflow: hidden;
}
 .innerPageReferences .photo .content {
     display: table-cell;
     padding: 20px;
     vertical-align: middle;
     width: inherit;
}
 .innerPageReferences .photo .content img {
     max-height: 80px;
     object-fit: contain;
     width: 100%;
}
.lang{
    display: inline-block;
    align-items: center;
	float:right;
	margin:0;
	background:<?php echo RENK3;?>;
}
.lang>ul{
}
.lang>ul:hover{
    background: <?php echo RENK2;?>;
}
.lang>ul>li{
    position: relative !important;
}
.lang>ul>li>a{
    color:#fff !important;
    padding: 2px 5px !important;
    display: block !important;
	float: none !important;
	font-size:14px !important;
}
.lang>ul>li>a>i{
    color:#fff !important;
}
.lang>ul:hover i{
    color: #fff !important
}
.lang>ul:hover a{
    color: #fff !important
}
.lang>ul>li:hover>ul{
    opacity: 1;
    visibility: visible !important;
}
.lang>ul>li>ul{
    opacity: 0;
    visibility: hidden;
    position: absolute;
    top:100%;
    left: 0;
	z-index:9999;
    background:<?php echo RENK3;?>;
    width: 100%;
    -webkit-transition: all 250ms;
    -o-transition: all 250ms;
    transition: all 250ms;
}
.lang>ul>li>ul>li{
}
.lang>ul>li>ul>li>a{
    color:#fff;
    display: block;
    padding: 2px 5px;
    border-top: 1px solid #fff;
	float:none !important;
	font-size:13px !important;
}
@media only screen and (max-width: 767px){
.main-menu .nav-container > ul > li > a:hover, .main-menu .nav-container > ul > li > a:active, .main-menu .nav-container > ul > li > a:focus, .main-menu .nav-container > ul > li:hover > a, .main-menu .nav-container > ul > li.current > a, .main-menu .nav-container > ul > li.current-menu-item > a {
    background: <?php echo RENK3;?> !important;
    color: #ffffff;
}
.sec-title .border {
    margin-left: auto;
    margin-right: auto;
}
.sec-title h1 {
    text-align: center;
}
.latest-blog-area .readmore-blog {
    margin-left: auto;
    margin-right: auto;
}
}