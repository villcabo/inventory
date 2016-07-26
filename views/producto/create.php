<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model humhub\modules\inventory\models\Producto */

$this->title = 'Nuevo Producto';
$this->params['breadcrumbs'][] = ['label' => 'Productos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="panel-heading"><?= Html::encode($this->title) ?></div>
<div class="panel-body">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
