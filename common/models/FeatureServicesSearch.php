<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\FeatureServices;

/**
 * FeatureServicesSearch represents the model behind the search form about `common\models\FeatureServices`.
 */
class FeatureServicesSearch extends FeatureServices
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['mtitle', 'mkeywords', 'mdesc', 'link', 'image', 'name', 'content', 'category', 'first_shortdesk', 'second_shortdesk', 'sub_name', 'mainpage_footer'], 'safe'],
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
        $query = FeatureServices::find();

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
        ]);

        $query->andFilterWhere(['like', 'mtitle', $this->mtitle])
            ->andFilterWhere(['like', 'mkeywords', $this->mkeywords])
            ->andFilterWhere(['like', 'mdesc', $this->mdesc])
            ->andFilterWhere(['like', 'link', $this->link])
            ->andFilterWhere(['like', 'image', $this->image])
            ->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'content', $this->content])
            ->andFilterWhere(['like', 'category', $this->category])
            ->andFilterWhere(['like', 'first_shortdesk', $this->first_shortdesk])
            ->andFilterWhere(['like', 'second_shortdesk', $this->second_shortdesk])
            ->andFilterWhere(['like', 'sub_name', $this->sub_name])
            ->andFilterWhere(['like', 'mainpage_footer', $this->mainpage_footer]);

        return $dataProvider;
    }
}
