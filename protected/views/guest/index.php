<?php
$this->breadcrumbs=array(
	'Guests',
);

$this->menu=array(
	array('label'=>'Créer un invité', 'url'=>array('create')),
	array('label'=>'Gérer un invité', 'url'=>array('admin')),
);
?>

<h1>Guests</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
