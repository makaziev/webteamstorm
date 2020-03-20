<?php
/* @var $this yii\web\View */
/* @var $model */

use yii\helpers\Html;
use app\service\MyHelper;

?>


<div class="article">
    <h1>
        <?= $model->title ?>
    </h1>
    <h4>
        <?= $model->description ?>
    </h4>
    <p>
        <?= MyHelper::mbCutString($model->content) ?>
        <?= Html::a('читать', ['post/view', 'id' => $model->id], ['class' => '']) ?>
    </p>
</div>