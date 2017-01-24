<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Monthinfo;

/**
 * MonthinfoSearch represents the model behind the search form about `common\models\Monthinfo`.
 */
class MonthinfoSearch extends Monthinfo
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['month', 'mtitle', 'mkeywords', 'mdesc', 'month_data'], 'safe'],
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
        $query = Monthinfo::find();

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

        $query->andFilterWhere(['like', 'month', $this->month])
            ->andFilterWhere(['like', 'mtitle', $this->mtitle])
            ->andFilterWhere(['like', 'mkeywords', $this->mkeywords])
            ->andFilterWhere(['like', 'mdesc', $this->mdesc])
            ->andFilterWhere(['like', 'month_data', $this->month_data]);

        return $dataProvider;
    }
}
