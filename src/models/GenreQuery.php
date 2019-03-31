<?php

namespace pravda1979\book\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the ActiveQuery class for [[Genre]].
 *
 * @see Genre
 */
class GenreQuery extends \yii\db\ActiveQuery
{
    /**
     * @inheritdoc
     * @return Genre[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Genre|array|null
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
    public function hidden(int $hidden = Genre::HIDDEN_NO)
    {
        $this->andWhere([Genre::tableName() . '.[[hidden]]' => $hidden]);

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

        $this->andWhere([Genre::tableName() . '.[[language]]' => $language]);

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
