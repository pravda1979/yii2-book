<?php

namespace pravda1979\book;

use krok\system\components\backend\NameInterface;
use Yii;

/**
 * yii2-book module definition class
 */
class Module extends \yii\base\Module implements NameInterface
{
    /**
     * @inheritdoc
     */
    public $controllerNamespace = null;

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();
    }

    /**
     * @return string
     */
    public static function getName()
    {
        return Yii::t('system', 'Yii2 Book');
    }
}
