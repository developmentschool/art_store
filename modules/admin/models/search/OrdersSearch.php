<?php

namespace app\modules\admin\models\search;

use app\modules\admin\models\Orders;
use yii\base\Model;
use yii\data\ActiveDataProvider;

/**
 * OrdersSearch represents the model behind the search form of `app\modules\admin\models\Orders`.
 */
class OrdersSearch extends Orders
{
    public $username;

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'user_id', 'status'], 'integer'],
            [['shipment_addr', 'created_at', 'updated_at'], 'safe'],
            [['username'], 'string']
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
        $query = Orders::find();

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
            'orders.id' => $this->id,
            'orders.user_id' => $this->user_id,
            'orders.status' => $this->status,
            'orders.created_at' => $this->created_at,
            'orders.updated_at' => $this->updated_at,
        ]);


        $query->joinWith('user');
        $query->andFilterWhere(['like', 'users.username', $this->username]);


        $query->andFilterWhere(['like', 'shipment_addr', $this->shipment_addr]);

        return $dataProvider;
    }
}
