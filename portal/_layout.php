<!-- begin:: Page -->
<?php
    $page = $_GET['page'];
?>


<?php include('partials/_header-base-mobile.php') ?>
<div class="kt-grid kt-grid--hor kt-grid--root">
    <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">
        <?php include('partials/_aside-base.php') ?>
        <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">
            <?php include('partials/_header-base.php') ?>
            <div class="kt-content kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
                <?php include('partials/_subheader-subheader-v1.php') ?>
                <?php
                    if ($page == "index" || $page == ""){
                        include('partials/_content-base.php');
                    } else {
                        include("pages/page-".$page.".php");
                    }


                 ?>
            </div>
            <?php include('partials/_footer-base.php') ?>
        </div>
    </div>
</div>
<!-- end:: Page -->
<?php include('partials/_layout-quick-panel.php') ?>
<?php include('partials/_layout-scrolltop.php') ?>
<?php //include('partials/_layout-toolbar.php') ?>
<?php include('partials/_layout-demo-panel.php') ?>
<?php include('partials/_layout-chat.php') ?>