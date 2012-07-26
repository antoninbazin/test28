<?php
$this->breadcrumbs=array(
	'Guests'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Guest', 'url'=>array('index')),
	array('label'=>'Create Guest', 'url'=>array('create')),
	array('label'=>'View Guest', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Guest', 'url'=>array('admin')),
);
?>

<h1>Update Guest <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>