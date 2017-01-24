<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\SubPoojalu;

/**
 * SubSearch represents the model behind the search form about `frontend\models\SubPoojalu`.
 */
class SubSearch extends SubPoojalu
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'icon', 'god_name', 'advance_price', 'price_without_material', 'price_with_material', 'pooja_duration', 'top_service_order', 'status', 'cat_id', 'astottaram_id', 'day', 'master_id'], 'integer'],
            [['meta_title', 'meta_keyword', 'meta_desc', 'slug', 'link', 'image', 'puja_name', 'main_content', 'sub_content', 'side_content1', 'side_content2', 'audio_file', 'archana_name', 'archana_content', 'poojasamagri_name', 'poojasamagri_pdf', 'slokam_name', 'slokam_pdf', 'stotram_name', 'stotram_pdf', 'astottaram_name', 'astottaram_pdf', 'flower', 'naivedyam'], 'safe'],
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
        $query = SubPoojalu::find();

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
            'icon' => $this->icon,
            'god_name' => $this->god_name,
            'advance_price' => $this->advance_price,
            'price_without_material' => $this->price_without_material,
            'price_with_material' => $this->price_with_material,
            'pooja_duration' => $this->pooja_duration,
            'top_service_order' => $this->top_service_order,
            'status' => $this->status,
            'cat_id' => $this->cat_id,
            'astottaram_id' => $this->astottaram_id,
            'day' => $this->day,
            'master_id' => $this->master_id,
        ]);

        $query->andFilterWhere(['like', 'meta_title', $this->meta_title])
            ->andFilterWhere(['like', 'meta_keyword', $this->meta_keyword])
            ->andFilterWhere(['like', 'meta_desc', $this->meta_desc])
            ->andFilterWhere(['like', 'slug', $this->slug])
            ->andFilterWhere(['like', 'link', $this->link])
            ->andFilterWhere(['like', 'image', $this->image])
            ->andFilterWhere(['like', 'puja_name', $this->puja_name])
            ->andFilterWhere(['like', 'main_content', $this->main_content])
            ->andFilterWhere(['like', 'sub_content', $this->sub_content])
            ->andFilterWhere(['like', 'side_content1', $this->side_content1])
            ->andFilterWhere(['like', 'side_content2', $this->side_content2])
            ->andFilterWhere(['like', 'audio_file', $this->audio_file])
            ->andFilterWhere(['like', 'archana_name', $this->archana_name])
            ->andFilterWhere(['like', 'archana_content', $this->archana_content])
            ->andFilterWhere(['like', 'poojasamagri_name', $this->poojasamagri_name])
            ->andFilterWhere(['like', 'poojasamagri_pdf', $this->poojasamagri_pdf])
            ->andFilterWhere(['like', 'slokam_name', $this->slokam_name])
            ->andFilterWhere(['like', 'slokam_pdf', $this->slokam_pdf])
            ->andFilterWhere(['like', 'stotram_name', $this->stotram_name])
            ->andFilterWhere(['like', 'stotram_pdf', $this->stotram_pdf])
            ->andFilterWhere(['like', 'astottaram_name', $this->astottaram_name])
            ->andFilterWhere(['like', 'astottaram_pdf', $this->astottaram_pdf])
            ->andFilterWhere(['like', 'flower', $this->flower])
            ->andFilterWhere(['like', 'naivedyam', $this->naivedyam]);

        return $dataProvider;
    }
}
