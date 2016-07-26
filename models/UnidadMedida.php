<?php

namespace humhub\modules\inventory\models;

use Yii;

/**
 * This is the model class for table "unidad_medida".
 *
 * @property string $id
 * @property string $nombre_corto
 * @property string $nombre
 * @property integer $removed
 *
 * @property Producto[] $productos
 */
class UnidadMedida extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'unidad_medida';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre_corto', 'nombre'], 'required'],
            [['removed'], 'integer'],
            [['nombre_corto', 'nombre'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nombre_corto' => 'Nombre Corto',
            'nombre' => 'Nombre',
            'removed' => 'Removed',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProductos()
    {
        return $this->hasMany(Producto::className(), ['unidad_medida_id' => 'id']);
    }
}
