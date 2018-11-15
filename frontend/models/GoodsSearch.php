<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\goods;

/**
 * GoodsSearch represents the model behind the search form of `common\models\goods`.
 */
class GoodsSearch extends goods
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'typeid', 'state', 'store', 'num', 'clicknum', 'addtime'], 'integer'],
            [['goods', 'company', 'descr', 'picname'], 'safe'],
            [['price'], 'number'],
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
        $query = goods::find();

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
            'typeid' => $this->typeid,
            'price' => $this->price,
            'state' => $this->state,
            'store' => $this->store,
            'num' => $this->num,
            'clicknum' => $this->clicknum,
            'addtime' => $this->addtime,
        ]);

        $query->andFilterWhere(['like', 'goods', $this->goods])
            ->andFilterWhere(['like', 'company', $this->company])
            ->andFilterWhere(['like', 'descr', $this->descr])
            ->andFilterWhere(['like', 'picname', $this->picname]);

        return $dataProvider;
    }
}
