<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use zhuravljov\yii\widgets\DatePicker;

/* @var $this yii\web\View */
/* @var $model app\models\Author */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="author-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'birth_date')->widget(DatePicker::class, [
        'clientOptions' => [
            'format' => 'yyyy-mm-dd',
            'language' => 'ru',
            'autoclose' => true,
            'todayHighlight' => true,
        ],
    ]) ?>

    <?= $form->field($model, 'rating')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
