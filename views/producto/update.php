<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model humhub\modules\inventory\models\Producto */

$this->title = 'Actualizar Producto: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Productos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="panel-heading"><?= Html::encode($this->title) ?></div>
<div class="panel-body">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
