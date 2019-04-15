<?php


namespace app\widgets;


use Yii;
use yii\helpers\Html;

class ActionColumn extends \yii\grid\ActionColumn
{

    /**
     * {@inheritDoc}
     */
    protected function initDefaultButtons()
    {
        $this->initDefaultButton('view', 'fa-eye', ['data-pjax' => '0']);
        $this->initDefaultButton('update', 'fa-edit', ['data-pjax' => '0']);
        $this->initDefaultButton('delete', 'fa-trash-alt', [
            'data-confirm' => Yii::t('yii', 'Are you sure you want to delete this item?'),
            'data-method' => 'post',
            'data-pjax' => '',
        ]);
    }

    /**
     * {@inheritDoc}
     */
    protected function initDefaultButton($name, $iconName, $additionalOptions = [])
    {
        if (!isset($this->buttons[$name]) && strpos($this->template, '{' . $name . '}') !== false) {
            $this->buttons[$name] = function ($url, $model, $key) use ($name, $iconName, $additionalOptions) {
                switch ($name) {
                    case 'view':
                        $title = Yii::t('yii', 'View');
                        break;
                    case 'update':
                        $title = Yii::t('yii', 'Update');
                        break;
                    case 'delete':
                        $title = Yii::t('yii', 'Delete');
                        break;
                    default:
                        $title = ucfirst($name);
                }
                $specificButtonOptions = [];
                if (isset($this->buttonOptions[$name])) {
                    $specificButtonOptions = $this->buttonOptions[$name];
                }
                $commonButtonOptions = $this->buttonOptions;
                foreach (['view', 'update', 'delete'] as $item) {
                    if (isset($commonButtonOptions[$item])) {
                        unset($commonButtonOptions[$item]);
                    }
                }
                $options = array_merge([
                    'title' => $title,
                    'aria-label' => $title,
                ], $additionalOptions, $commonButtonOptions, $specificButtonOptions);
                $icon = Html::tag('i', '', ['class' => "far $iconName"]);
                return Html::a($icon, $url, $options);
            };
        }
    }


}