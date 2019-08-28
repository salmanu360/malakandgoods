<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\BuiltiBook */

$this->title = 'Create Builti Book';
$this->params['breadcrumbs'][] = ['label' => 'Builti Books', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="builti-book-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
