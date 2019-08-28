<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\BuiltiBook */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Builti Books', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="builti-book-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'builti_no',
            'truck_no',
            'date',
            'aaz_batkhela_ta',
            'arsaal_kunninda',
            'wasool_kunninda',
            'nagg_count',
            'maal_tafseel:ntext',
            'aamda_buitli_no',
            'batkhela_fair',
            'onloading_mazdori',
            'loading_mazdori',
            'bazar_local_kharcha',
            'panjab_aamad_fair',
            'adda_builti_charges',
            'advance',
            'remaining_fair',
            'mazdori',
            'weight',
        ],
    ]) ?>

</div>
