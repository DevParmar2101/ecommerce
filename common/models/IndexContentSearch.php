<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\IndexContent;

/**
 * IndexContentSearch represents the model behind the search form of `common\models\IndexContent`.
 */
class IndexContentSearch extends IndexContent
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'section_content_one_id', 'section_content_two_id', 'section_content_three_id'], 'integer'],
            [['banner_title', 'banner_sub_title', 'banner_button_title', 'banner_image', 'section_one_title', 'section_two_title', 'section_three_title'], 'safe'],
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
        $query = IndexContent::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'sort' => ['defaultOrder' => ['id' => SORT_DESC]]
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
            'section_content_one_id' => $this->section_content_one_id,
            'section_content_two_id' => $this->section_content_two_id,
            'section_content_three_id' => $this->section_content_three_id,
        ]);

        $query->andFilterWhere(['like', 'banner_title', $this->banner_title])
            ->andFilterWhere(['like', 'banner_sub_title', $this->banner_sub_title])
            ->andFilterWhere(['like', 'banner_button_title', $this->banner_button_title])
            ->andFilterWhere(['like', 'banner_image', $this->banner_image])
            ->andFilterWhere(['like', 'section_one_title', $this->section_one_title])
            ->andFilterWhere(['like', 'section_two_title', $this->section_two_title])
            ->andFilterWhere(['like', 'section_three_title', $this->section_three_title]);

        return $dataProvider;
    }
}
