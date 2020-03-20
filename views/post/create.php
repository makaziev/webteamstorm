<?php
/* @var $this yii\web\View */
/* @var $posts */


use mihaildev\ckeditor\CKEditor;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>

<div class="col-md-2">

</div>

<div class="col-sm-8">

    <?php $form = ActiveForm::begin() ?>
        <?= $form->field($posts, 'title') ?>
        <?= $form->field($posts, 'description') ?>
        <?= $form->field($posts, 'content')->textarea(['rows' => 10])->widget(CKEditor::className(), []) ?>
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-primary']) ?>
    <?php ActiveForm::end() ?>

</div>

<div class="col-md-2">

</div>