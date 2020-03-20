<?php
/* @var $this yii\web\View */
/* @var $posts */
/* @var $pagination */
/* @var $provider */

use kop\y2sp\ScrollPager;
use yii\widgets\ListView;

?>

<div class="col-md-2">

</div>

<div class="col-sm-8">

<?php

echo ListView::widget([
    'dataProvider' => $provider,
    'summary' => false,
    'itemOptions' => ['class' => 'item'],
    'itemView' => '_post',
    'pager' => [
        'class' => ScrollPager::className(),
        'triggerOffset' => 5,
    ],
]);

?>

</div>

<div class="col-md-2">

</div>