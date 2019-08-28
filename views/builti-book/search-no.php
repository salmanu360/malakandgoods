<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;
$this->title="Search";
/* @var $this yii\web\View */
/* @var $model app\models\BuiltiBook */
/* @var $form yii\widgets\ActiveForm */
?>
<div class="row">
	<div class="col-md-3">
		<?php $form = ActiveForm::begin(); ?>
			 <?= $form->field($model, 'builti_no')->textInput() ?>
		
	</div>
	<div class="col-md-3">
		<div class="form-group" style="margin-top: 23px">
        <?= Html::submitButton('Search', ['class' => 'btn btn-success']) ?>
    </div>
	</div>
	 <?php ActiveForm::end(); ?>
</div>
<?php $data=Yii::$app->request->post('BuiltiBook'); 
	  if(isset($data)){?>
<div class="row">
	<div class="col-md-12 table-responsive">
		<table class="table table-striped table-bordered">
	    <thead>
	      <tr class="success">
	      	<th>#</th>
	        <th><?php echo $model->getAttributeLabel('builti_no') ?></th>
	        <th><?php echo $model->getAttributeLabel('truck_no') ?></th>
	        <th><?php echo $model->getAttributeLabel('aaz_batkhela_ta') ?></th>
	        <th><?php echo $model->getAttributeLabel('arsaal_kunninda') ?></th>
	        <th><?php echo $model->getAttributeLabel('wasool_kunninda') ?></th>
	        <th><?php echo $model->getAttributeLabel('nagg_count') ?></th>
	        <th><?php echo $model->getAttributeLabel('aamda_buitli_no') ?></th>
	        <th><?php echo $model->getAttributeLabel('batkhela_fair') ?></th>
	        <th><?php echo $model->getAttributeLabel('onloading_mazdori') ?></th>
	        <th><?php echo $model->getAttributeLabel('loading_mazdori') ?></th>
	        <th><?php echo $model->getAttributeLabel('bazar_local_kharcha') ?></th>
	        <th><?php echo $model->getAttributeLabel('panjab_aamad_fair') ?></th>
	        <th><?php echo $model->getAttributeLabel('adda_builti_charges') ?></th>
	        <th><?php echo $model->getAttributeLabel('advance') ?></th>
	        <th><?php echo $model->getAttributeLabel('remaining_fair') ?></th>
	        <th><?php echo $model->getAttributeLabel('date') ?></th>
	        <th>ٹوٹل</th>
	      </tr>
	    </thead>
	    <tbody>
	    	<?php $i=1;
	    	if (count($query)>0) {
	    	foreach ($query as $key => $value):  ?>
	      <tr>
	      	<td><?php echo $i++; ?></td>
	        <td><?php echo $value->builti_no; ?></td>
	        <td><?php echo $value->truck_no; ?></td>
	        <td><?php echo $value->aaz_batkhela_ta; ?></td>
	        <td><?php echo $value->arsaal_kunninda; ?></td>
	        <td><?php echo $value->wasool_kunninda; ?></td>
	        <td><?php echo $value->nagg_count; ?></td>
	        <td><?php echo $value->aamda_buitli_no; ?></td>
	        <td><?php echo $value->batkhela_fair; ?></td>
	        <td><?php echo $value->onloading_mazdori; ?></td>
	        <td><?php echo $value->loading_mazdori; ?></td>
	        <td><?php echo $value->bazar_local_kharcha; ?></td>
	        <td><?php echo $value->panjab_aamad_fair; ?></td>
	        <td><?php echo $value->adda_builti_charges; ?></td>
	        <td><?php echo $value->advance; ?></td>
	        <td><?php echo $value->remaining_fair; ?></td>
	        <td><?php echo date('d M Y',strtotime($value->date)); ?></td>
	        <td><?php echo $value->batkhela_fair+$value->onloading_mazdori+$value->loading_mazdori+$value->bazar_local_kharcha+$value->panjab_aamad_fair+$value->adda_builti_charges; ?></td>
	      </tr>
	      <?php endforeach;}else{?>
			<tr>
				<th colspan="17">No record found</th>
			</tr>
	      <?php } ?>
	    </tbody>
  </table>	
	</div>
</div>
<?php } ?>