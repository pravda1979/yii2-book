<?php

namespace pravda1979\book\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the ActiveQuery class for [[Author]].
 *
 * @see Author
 */
class AuthorQuery extends \yii\db\ActiveQuery
{
    /**
     * @inheritdoc
     * @return Author[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Author|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }

    /**
     * @param int $hidden
     *
     * @return $this
     */
    public function hidden(int $hidden = Author::HIDDEN_NO)
    {
        $this->andWhere([Author::tableName() . '.[[hidden]]' => $hidden]);

        return $this;
    }

    /**
     * @param null|string $language
     *
     * @return $this
     */
    public function language(?string $language = null)
    {
        if ($language === null) {
            $language = Yii::$app->language;
        }

        $this->andWhere([Author::tableName() . '.[[language]]' => $language]);

        return $this;
    }

    /**
     * @return array
     */
    public function asDropDown(): array
    {
        return ArrayHelper::map($this->asArray()->all(), 'id', 'title');
    }
}
