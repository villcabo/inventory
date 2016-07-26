<?php

use yii\helpers\Html;
use humhub\widgets\GridView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel humhub\modules\inventory\models\ProductoFind */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Productos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="panel-heading"><?= Html::encode($this->title) ?></div>
<div class="panel-body">

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Nuevo Producto', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?=
    GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            'codigo',
            'nombre',
            [
                'label' => 'Unidad de Medida',
                'value' => 'unidadMedida.nombre'
            ],
            [
                'label' => 'Categoria',
                'value' => 'categoria.nombre'
            ],
            [
                'header' => Yii::t('AdminModule.views_user_index', 'Acción'),
                'class' => 'yii\grid\ActionColumn',
                'options' => ['style' => 'width:90px; min-width:90px;'],
                'buttons' => [
                    'view' => function($url, $model) {
                        return Html::a('<i class="fa fa-eye"></i>', Url::toRoute(['view', 'id' => $model->id]), ['class' => 'btn btn-primary btn-xs tt']);
                    },
                            'update' => function($url, $model) {
                        return Html::a('<i class="fa fa-pencil"></i>', Url::toRoute(['update', 'id' => $model->id]), ['class' => 'btn btn-primary btn-xs tt']);
                    },
                            'delete' => function($url, $model) {
                        return Html::a('<i class="fa fa-times"></i>', ['delete', 'id' => $model->id], [
                                    'class' => 'btn btn-danger btn-xs tt',
                                    'data' => [
                                        'confirm' => 'Estas seguro de eliminar este registro?',
                                        'method' => 'post',
                                    ],
                        ]);
                    }
                        ],
                    ],
                ],
            ]);
            ?>
</div>
