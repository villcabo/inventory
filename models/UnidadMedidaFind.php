<?php

namespace humhub\modules\inventory\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use humhub\modules\inventory\models\UnidadMedida;

/**
 * UnidadMedidaFind represents the model behind the search form about `humhub\modules\inventory\models\UnidadMedida`.
 */
class UnidadMedidaFind extends UnidadMedida
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'removed'], 'integer'],
            [['nombre_corto', 'nombre'], 'safe'],
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
        $query = UnidadMedida::find();

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
            'removed' => false,
        ]);

        $query->andFilterWhere(['like', 'nombre_corto', $this->nombre_corto])
            ->andFilterWhere(['like', 'nombre', $this->nombre]);

        return $dataProvider;
    }
}
