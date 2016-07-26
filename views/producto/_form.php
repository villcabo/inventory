<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model humhub\modules\inventory\models\Producto */
/* @var $form yii\widgets\ActiveForm */

$categorias = ArrayHelper::map(humhub\modules\inventory\models\Categoria::find()->asArray()->all(), 'id', 'nombre');
$unidaMedidas = ArrayHelper::map(\humhub\modules\inventory\models\UnidadMedida::find()->asArray()->all(), 'id', 'nombre');
?>

<div class="producto-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'codigo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nombre')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'descripcion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'valor')->textInput() ?>

    <?= $form->field($model, 'unidad_medida_id')->dropDownList($unidaMedidas, ['id' => 'nombre']) ?>

    <?= $form->field($model, 'categoria_id')->dropDownList($categorias, ['id' => 'nombre']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Guardar' : 'Actualizar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
