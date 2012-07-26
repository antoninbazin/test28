<?php
$this->breadcrumbs=array(
	'Guests'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Guest', 'url'=>array('index')),
	array('label'=>'Manage Guest', 'url'=>array('admin')),
);
?>

<h1>Create Guest</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>