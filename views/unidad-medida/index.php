<?php

use yii\helpers\Html;
use humhub\widgets\GridView;

/* @var $this yii\web\View */
/* @var $searchModel humhub\modules\inventory\models\UnidadMedidaFind */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Unidades de Medidas';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="panel-heading"><?= Html::encode($this->title) ?></div>
<div class="panel-body">

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Nueva Unidad de Medida', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?=
    GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            'id',
            'nombre_corto',
            'nombre',
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]);
    ?>
</div>
