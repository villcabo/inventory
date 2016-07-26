<?php

use yii\helpers\Html;
use humhub\widgets\GridView;

/* @var $this yii\web\View */
/* @var $searchModel humhub\modules\inventory\models\CategoriaFind */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Categorias';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="panel-heading"><?= Html::encode($this->title) ?></div>
<div class="panel-body">

    <p>
        <?= Html::a('Nueva Categoria', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?=
    GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            'id',
            'nombre',
            'descripcion',
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]);
    ?>
</div>
