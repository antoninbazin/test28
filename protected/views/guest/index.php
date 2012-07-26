<?php
$this->breadcrumbs=array(
	'Guests',
);

$this->menu=array(
	array('label'=>'Create Guest', 'url'=>array('create')),
	array('label'=>'Manage Guest', 'url'=>array('admin')),
);
?>

<h1>Guests</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
