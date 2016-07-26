<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model humhub\modules\inventory\models\Producto */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Productos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="panel-heading"><?= Html::encode($this->title) ?></div>
<div class="panel-body">

    <p>
        <?= Html::a('Actualizar', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Eliminar', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Estas seguro de eliminar este producto?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'codigo',
            'nombre',
            'descripcion',
            [
                'label' => 'Categoria',
                'value' => $model->categoria->nombre,
            ],
            [
                'label' => 'Unidad de Medida',
                'value' => $model->valor.' '.$model->unidadMedida->nombre_corto.' ('.$model->unidadMedida->nombre.')',
            ],
        ],
    ]) ?>

</div>
