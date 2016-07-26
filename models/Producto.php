<?php

namespace humhub\modules\inventory\models;

use Yii;

/**
 * This is the model class for table "producto".
 *
 * @property string $id
 * @property string $codigo
 * @property string $nombre
 * @property string $descripcion
 * @property string $categoria_id
 * @property string $unidad_medida_id
 * @property double $valor
 * @property integer $removed
 *
 * @property Categoria $categoria
 * @property UnidadMedida $unidadMedida
 */
class Producto extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'producto';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['codigo', 'nombre', 'categoria_id', 'unidad_medida_id', 'valor'], 'required'],
            [['categoria_id', 'unidad_medida_id', 'removed'], 'integer'],
            [['valor'], 'number'],
            [['codigo'], 'string', 'max' => 10],
            [['nombre', 'descripcion'], 'string', 'max' => 255],
            [['codigo'], 'unique'],
            [['categoria_id'], 'exist', 'skipOnError' => true, 'targetClass' => Categoria::className(), 'targetAttribute' => ['categoria_id' => 'id']],
            [['unidad_medida_id'], 'exist', 'skipOnError' => true, 'targetClass' => UnidadMedida::className(), 'targetAttribute' => ['unidad_medida_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'codigo' => 'Codigo',
            'nombre' => 'Nombre',
            'descripcion' => 'Descripcion',
            'categoria_id' => 'Categoria',
            'unidad_medida_id' => 'Unidad de Medida',
            'valor' => 'Valor',
            'removed' => 'Removed',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategoria()
    {
        return $this->hasOne(Categoria::className(), ['id' => 'categoria_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUnidadMedida()
    {
        return $this->hasOne(UnidadMedida::className(), ['id' => 'unidad_medida_id']);
    }
}
