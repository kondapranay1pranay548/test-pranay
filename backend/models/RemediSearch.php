<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\RemedialPuja;

/**
 * RemediSearch represents the model behind the search form about `frontend\models\RemedialPuja`.
 */
class RemediSearch extends RemedialPuja
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'sub_poojalu_id'], 'integer'],
            [['meta_keyword', 'meta_title', 'meta_desc', 'icon', 'link', 'slug', 'image', 'puja_name', 'god_name', 'content'], 'safe'],
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
        $query = RemedialPuja::find();

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
            'sub_poojalu_id' => $this->sub_poojalu_id,
        ]);

        $query->andFilterWhere(['like', 'meta_keyword', $this->meta_keyword])
            ->andFilterWhere(['like', 'meta_title', $this->meta_title])
            ->andFilterWhere(['like', 'meta_desc', $this->meta_desc])
            ->andFilterWhere(['like', 'icon', $this->icon])
            ->andFilterWhere(['like', 'link', $this->link])
            ->andFilterWhere(['like', 'slug', $this->slug])
            ->andFilterWhere(['like', 'image', $this->image])
            ->andFilterWhere(['like', 'puja_name', $this->puja_name])
            ->andFilterWhere(['like', 'god_name', $this->god_name])
            ->andFilterWhere(['like', 'content', $this->content]);

        return $dataProvider;
    }
}
