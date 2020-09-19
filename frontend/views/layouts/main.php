<?php

/* @var $this \yii\web\View */
/* @var $content string */

$this->beginContent('@frontend/views/layouts/base.php');
?>
<!-- MAIN WRAPPER
============================================= -->
<div id="main-wrapper" class="animsition clearfix">
<?php
echo \frontend\widgets\HeaderWidget::widget();
echo $content;
echo \frontend\widgets\FooterWidget::widget();
?>
</div>
    <!-- MAIN WRAPPER END -->
<?php
$this->endContent();
