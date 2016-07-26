<?php

namespace humhub\modules\inventory\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use humhub\modules\inventory\models\Producto;

/**
 * ProductoFind represents the model behind the search form about `humhub\modules\inventory\models\Producto`.
 */
class ProductoFind extends Producto
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'categoria_id', 'unidad_medida_id', 'removed'], 'integer'],
            [['codigo', 'nombre', 'descripcion'], 'safe'],
            [['valor'], 'number'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Producto::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'categoria_id' => $this->categoria_id,
            'unidad_medida_id' => $this->unidad_medida_id,
            'valor' => $this->valor,
            'removed' => false,
        ]);

        $query->andFilterWhere(['like', 'codigo', $this->codigo])
            ->andFilterWhere(['like', 'nombre', $this->nombre])
            ->andFilterWhere(['like', 'descripcion', $this->descripcion]);

        return $dataProvider;
    }
}
