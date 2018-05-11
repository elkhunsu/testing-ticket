<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Lokasi;

/**
 * LokasiSearch represents the model behind the search form about `app\models\Lokasi`.
 */
class LokasiSearch extends Lokasi
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_lokasi', 'description'], 'integer'],
            [['nama_lokasi', 'foto_lokasi'], 'safe'],
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
        $query = Lokasi::find();

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
            'id_lokasi' => $this->id_lokasi,
            'description' => $this->description,
        ]);

        $query->andFilterWhere(['like', 'nama_lokasi', $this->nama_lokasi])
            ->andFilterWhere(['like', 'foto_lokasi', $this->foto_lokasi]);

        return $dataProvider;
    }
}
