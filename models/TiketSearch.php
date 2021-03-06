<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Tiket;

/**
 * TiketSearch represents the model behind the search form of `app\models\Tiket`.
 */
class TiketSearch extends Tiket
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_tiket', 'id_event'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = Tiket::find();

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
            'id_tiket' => $this->id_tiket,
            'id_event' => $this->id_event,
        ]);

        return $dataProvider;
    }
}
