<?php

namespace app\modules\admin\models\search;

use app\modules\admin\models\Product;
use yii\base\Model;
use yii\data\ActiveDataProvider;

/**
 * ProductSearch represents the model behind the search form of `app\modules\admin\models\Product`.
 */
class ProductSearch extends Product
{
    public $category;


    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'category_id', 'status'], 'integer'],
            [['title', 'description', 'created_at', 'updated_at'], 'safe'],
            [['price'], 'number'],
            [['category'], 'string']
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
        $query = Product::find();

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
            'product.id' => $this->id,
            'product.price' => $this->price,
            'product.category_id' => $this->category_id,
            'product.status' => $this->status,
            'product.created_at' => $this->created_at,
            'product.updated_at' => $this->updated_at,
        ]);

        $query->joinWith('category');
        $query->andFilterWhere(['like', 'category.title', $this->category]);

        $query->andFilterWhere(['like', 'product.title', $this->title])
            ->andFilterWhere(['like', 'product.description', $this->description]);

        return $dataProvider;
    }
}
