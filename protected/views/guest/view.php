<?php
$this->breadcrumbs=array(
	'Guests'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Guest', 'url'=>array('index')),
	array('label'=>'Create Guest', 'url'=>array('create')),
	array('label'=>'Update Guest', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Guest', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Guest', 'url'=>array('admin')),
);
?>

<h1>View Guest #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'first_name',
		'last_name',
		'mail',
		'gender',
		'age',
		'arrival_date',
		'stuff',
		'phone',
		'name_party',
	),
)); ?>
