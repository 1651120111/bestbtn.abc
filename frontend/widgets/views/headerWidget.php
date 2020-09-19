<?php
use yii\helpers\Url;
use yii\helpers\Html;
?>
<!-- HEADER
    ============================================= -->
<header id="header" class="site-header transparent-header clearfix">

    <div class="header-navigation">
        <div class="container">
            <div class="row">
                <div class="logo wow fadeInDown col-md-3" data-wow-delay="1s">
                    <div class="logo-image">
                        <a href="<?=Url::home()?>"><img src="img/logo.png" alt=""></a>
                    </div>
                </div>

                <!-- MOBILE MENU START
                ============================================= -->
                <div class="mobile-menu wow fadeInDown" data-wow-delay="1s">
                    <button id="slide-buttons" class="icon icon-navicon-round"></button>
                </div>

                <nav id="c-menu--slide-right" class="c-menu c-menu--slide-right">
                    <button class="c-menu__close icon icon-remove-delete"></button>
                    <ul class="menus-mobile">
                        <li><a href="<?=Url::home()?>">Home</a></li>
                        <li><a href="<?=Url::toRoute(['/room-detail'])?>">Room Detail</a></li>
                        <li class="has-child">
                            <a href="<?=Url::toRoute('/blog') ?>">Blog</a>
                            <ul class="child">
                                <li><a href="single-post.html">Single Post</a></li>
                            </ul>
                        </li>
                        <li><a href="<?=Url::toRoute('/contact') ?>">Contact Agent</a></li>
                    </ul>
                </nav>
                <div id="slide-overlay" class="slide-overlay"></div>
                <!-- MOBILE MENU END -->

                <div class="navigation wow fadeInDown col-md-9" data-wow-delay="1s">
                    <nav id="main-menu" class="menu">
                        <ul id="menu-top-menu" class="menus">
                            <li <?php if (Yii::$app->controller->id == 'site') echo ' class="active"'; ?>><a href="<?=Url::home()?>">Home</a></li>
                            <li <?php if (Yii::$app->controller->id == 'room-detail') echo ' class="active"'; ?>><a href="<?=Url::toRoute(['/room-detail'])?>">Room Detail</a></li>
                            <li  class="has-child <?php if ((Yii::$app->controller->id == 'blog') || (Yii::$app->controller->id == 'single-blog' )) echo ' active'; ?>" >
                                <a href="<?=Url::toRoute('/blog') ?>">Blog</a>
                                <ul class="child">
                                    <li><a href="<?=Url::toRoute('/single-blog')  ?>">Single Post</a></li>
                                </ul>
                            </li>
                            <li <?php if (Yii::$app->controller->id == 'contact') echo ' class="active"'; ?>> <a href="<?=Url::toRoute('/contact') ?>">Contact Agent</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- HEADER END -->
