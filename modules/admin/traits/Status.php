<?php


namespace app\modules\admin\traits;


use yii\helpers\Html;
use yii\validators\DefaultValueValidator;

trait Status
{
    /**
     *Returns an inverted array of constants defining user status
     *
     * @return array|null
     * @throws \ReflectionException
     */
    public static function getStatuses()
    {
        $arr = array_filter(
            (new \ReflectionClass(static::class))->getConstants(),
            function ($key) {
                return strpos($key, 'STATUS') !== false;
            }, ARRAY_FILTER_USE_KEY);

        return array_flip(array_change_key_case($arr, CASE_LOWER));
    }

    /**
     * Returns the default status value.
     *
     * @return bool|mixed
     */
    public function getDefaultStatus()
    {
        $validators = $this->getActiveValidators('status');
        foreach ($validators as $validator) {
            if ($validator instanceof DefaultValueValidator) {
                return $validator->value;
            }
        }
        return false;
    }

    /**
     * @return string
     * @throws \ReflectionException
     */
    public function statusRender()
    {
        $options = ['class' => 'align-middle badge'];

        Html::addCssClass($options, $this->getStatusesCssClass()[$this->status]);

        return Html::tag('span', static::getStatuses()[$this->status], $options);
    }

    /**
     * @return array
     * @throws \ReflectionException
     */
    public static function getStatusColumnForWidget()
    {
        return [
            'attribute' => 'status',
            'value' => function ($model) {
                /* @var $model static */
                return $model->statusRender();
            },
            'filter' => static::getStatuses(),
            'format' => 'html'
        ];
    }

    /**
     * @return array
     */
    protected function getStatusesCssClass(): array
    {
        return [
            static::STATUS_ACTIVE => 'badge-success',
            static::STATUS_INACTIVE => 'badge-warning',
            static::STATUS_DELETED => 'badge-dark',
        ];
    }

}