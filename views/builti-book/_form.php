<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;
/* @var $this yii\web\View */
/* @var $model app\models\BuiltiBook */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="builti-book-form">

    <?php $form = ActiveForm::begin(); ?>
    <div class="row">
        <div class="col-md-6">
            <?= $form->field($model, 'builti_no')->textInput() ?>
            
            <?= $form->field($model, 'truck_no')->textInput(['maxlength' => true]) ?>

            <?php  echo  $form->field($model, 'date')->widget(DatePicker::classname(), [
                         'options' => ['value' => date('Y/m/d')],
                         'pluginOptions' => [
                             'autoclose'=>true,
                             'format' => 'yyyy/mm/dd',
                             'todayHighlight' => true,
                             'endDate' => '+0d',
                         ]
                     ]); ?>

            <?= $form->field($model, 'aaz_batkhela_ta')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'arsaal_kunninda')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'wasool_kunninda')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'nagg_count')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'maal_tafseel')->textarea(['rows' => 6]) ?>

            <?= $form->field($model, 'aamda_buitli_no')->textInput(['maxlength' => true]) ?>
        </div> <!-- first div-->
        <div class="col-md-6">
     <?= $form->field($model, 'batkhela_fair')->textInput() ?>

    <?= $form->field($model, 'onloading_mazdori')->textInput() ?>

    <?= $form->field($model, 'loading_mazdori')->textInput() ?>

    <?= $form->field($model, 'bazar_local_kharcha')->textInput() ?>

    <?= $form->field($model, 'panjab_aamad_fair')->textInput() ?>

    <?= $form->field($model, 'adda_builti_charges')->textInput() ?>

    <?= $form->field($model, 'advance')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'remaining_fair')->textInput() ?>
    <?= $form->field($model, 'mazdori')->textInput() ?>
    <?= $form->field($model, 'weight')->textInput() ?>
        </div>
    </div>
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>
    <?php ActiveForm::end(); ?>
</div>