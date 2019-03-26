<?php

namespace app\services;


use yii\base\Component;
use yii\db\ActiveRecord;


class MenuService extends Component
{
    /**
     * @var ActiveRecord
     */
    public $class;

    /**
     * @var string
     */
    public $linkCssClass = 'dropdown-item';

    /**
     * @var string
     */
    public $submenuCssClass = 'dropdown-menu';

    /**
     * @var string
     */
    public $linkSubmenuCssClass = 'dropdown-toggle';

    /**
     * @var string
     */
    public $activeCssClass = 'active';

    /**
     * @var bool
     */
    public $activateItems = true;

    /**
     * @var string
     */
    public $linkTemplate = '<a href="{url}" {class}>{label}</a>';

    /**
     * @var string
     */
    public $submenuTemplate = "\n<ul {class}>\n{items}\n</ul>\n";

    /**
     * @param array $params
     * @return array
     */
    public static function getItems(array $params)
    {
        $service = new static($params);

        return $service->arrayForMenu();

    }

    /**
     * @return array
     */
    public function arrayForMenu(): array
    {
        $models = $this->class::findAll(['parent_id' => null]);

        return static::createArrayItems($models);
    }

    /**
     * @param array $models
     * @return array
     */
    protected function createArrayItems(array $models)
    {
        $outArray = [];
        foreach ($models as $model) {
            $linkClass = [];
            $array = [
                'label' => $model->title,
                'url' => ['category/view', 'id' => $model->id]
            ];
            $linkClass[] = $this->linkCssClass;
            if ($children = $model->categories) {
                $array['items'] = $this->createArrayItems($children);
                $array['submenuTemplate'] = strtr($this->submenuTemplate, [
                    '{class}' => $this->submenuCssClass ? "class='{$this->submenuCssClass}'" : ''
                ]);
                $linkClass[] = $this->linkSubmenuCssClass;
            }
            $this->activateItems && $this->isItemActive($model) && $linkClass[] = $this->activeCssClass;
            $array['template'] = strtr($this->linkTemplate, [
                '{class}' => $linkClass ? "class='" . implode(' ', $linkClass) . "'" : ''
            ]);
            $outArray[] = $array;
        }

        return $outArray;
    }

    /**
     * @param ActiveRecord $model
     * @return bool
     */
    protected function isItemActive(ActiveRecord $model)
    {
        return \Yii::$app->request->get('id') == $model->id;
    }
}