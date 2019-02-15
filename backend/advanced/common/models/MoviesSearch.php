<?php

namespace common\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Movies;

/**
 * MoviesSearch represents the model behind the search form of `common\models\Movies`.
 */
class MoviesSearch extends Movies
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'ticket_id', 'artist_id', 'category_id', 'language_id', 'location_id', 'mv_pic', 'mv_category', 'mv_name', 'mv_art_name', 'mv_ticket', 'mv_language', 'mv_location', 'is_active', 'create_at', 'update_at'], 'integer'],
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
        $query = Movies::find();

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
            'ticket_id' => $this->ticket_id,
            'artist_id' => $this->artist_id,
            'category_id' => $this->category_id,
            'language_id' => $this->language_id,
            'location_id' => $this->location_id,
            'mv_pic' => $this->mv_pic,
            'mv_category' => $this->mv_category,
            'mv_name' => $this->mv_name,
            'mv_art_name' => $this->mv_art_name,
            'mv_ticket' => $this->mv_ticket,
            'mv_language' => $this->mv_language,
            'mv_location' => $this->mv_location,
            'is_active' => $this->is_active,
            'create_at' => $this->create_at,
            'update_at' => $this->update_at,
        ]);

        return $dataProvider;
    }
}
