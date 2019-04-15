<?php

namespace rbac\models\search;

use yii\base\Model;
use yii\data\ActiveDataProvider;

/**
 * Class AssignmentSearch
 *
 * @package rbac\models\search
 */
class AssignmentSearch extends Model
{
    /**
     * @var string user id
     */
    public $id;

    /**
     * @var string username
     */
    public $username;

    /**
     * @var string email
     */
    public $email;

    /**
     * @var string role
     */
    public $roleName;

    /**
     * @var int the default page size
     */
    public $pageSize = 25;

    /**
     * @inheritdoc
     */
    public function rules(): array
    {
        return [
            [['id', 'username', 'roleName', 'email'], 'safe'],
        ];
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     * @param \yii\db\ActiveRecord $class
     * @param $idField
     * @param string $usernameField
     * @param string $emailField
     * @param array $otherFilters
     *
     * @return ActiveDataProvider
     */
    public function search(
        array $params,
        $class,
        string $idField,
        string $usernameField,
        string $emailField,
        array $otherFilters
    ): ActiveDataProvider
    {
        $query = $class::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'pageSize' => $this->pageSize,
            ],
        ]);

        $this->load($params);

        if (!$this->validate()) {
            return $dataProvider;
        }

        $query->andFilterWhere([$idField => $this->id]);
        $query->andFilterWhere(['like', $usernameField, $this->username]);
        $query->andFilterWhere(['like', $emailField, $this->email]);

        foreach ($otherFilters as $filter) {
            $query->andFilterWhere($filter);
        }

        if ($this->roleName) {
            $query->leftJoin('auth_assignment', '`auth_assignment`.`user_id` = `users`.`id`');
            $query->andFilterWhere(['auth_assignment.item_name' => $this->roleName]);
        }

        return $dataProvider;
    }
}
