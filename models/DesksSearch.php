<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Desks;

/**
 * DesksSearch represents the model behind the search form about `app\models\Desks`.
 */
class DesksSearch extends Desks
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'idroom', 'ip_addressv6'], 'integer'],
            [['ip_address'], 'safe'],
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
        $query = Desks::find();

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
            'idroom' => $this->idroom,
            'ip_addressv6' => $this->ip_addressv6,
        ]);

        $query->andFilterWhere(['like', 'ip_address', $this->ip_address]);

        return $dataProvider;
    }
}
