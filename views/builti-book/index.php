<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\ActiveForm;
/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Today Builti Books';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="builti-book-index">

    <h1><?= Html::encode($this->title) ?></h1>
  <?php $form = ActiveForm::begin(); ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            [
            'class' => 'yii\grid\CheckboxColumn',
            'checkboxOptions' => ["value" => $dataProvider->id,]
            ],
            'builti_no',
            'truck_no',
            'aaz_batkhela_ta',
            'arsaal_kunninda',
            'wasool_kunninda',
            //'nagg_count',
            //'maal_tafseel:ntext',
            //'aamda_buitli_no',
            //'batkhela_fair',
            //'onloading_mazdori',
            //'loading_mazdori',
            //'bazar_local_kharcha',
            //'panjab_aamad_fair',
            //'adda_builti_charges',
            //'advance',
            //'remaining_fair',

            ['class' => 'yii\grid\ActionColumn',
            'template'=>'{view} {update} {delete} {print}',
             'buttons' => [
                'print' => function ($url, $model, $key)
                    {
                        return Html::a('<span class="glyphicon glyphicon-file title="Print"></span>', ['book','id'=>$key],['target'=>'_blank']);
                    },
             ],
        ],
        ],
    ]); ?>
    <div class="form-group">
        <?= Html::submitButton('Print', ['class' => 'btn btn-primary']) ?>
    </div>
    <?php ActiveForm::end(); ?>


</div>
