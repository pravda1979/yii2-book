<?php

namespace pravda1979\book\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the ActiveQuery class for [[Book]].
 *
 * @see Book
 */
class BookQuery extends \yii\db\ActiveQuery
{
    /**
     * @inheritdoc
     * @return Book[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Book|array|null
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
    public function hidden(int $hidden = Book::HIDDEN_NO)
    {
        $this->andWhere([Book::tableName() . '.[[hidden]]' => $hidden]);

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

        $this->andWhere([Book::tableName() . '.[[language]]' => $language]);

        return $this;
    }

    /**
     * @param int|null $createdBy
     *
     * @return $this
     */
    public function createdBy(?int $createdBy = null)
    {
        $this->andWhere([Book::tableName() . '.[[createdBy]]' => $createdBy]);

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
