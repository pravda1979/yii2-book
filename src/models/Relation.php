<?php

namespace pravda1979\book\models;

/**
 * This is the model class for table "{{%book_relation}}".
 *
 * @property integer $id
 * @property integer $bookId
 * @property integer $genreId
 *
 * @property Book $book
 * @property Genre $genre
 */
class Relation extends \yii\db\ActiveRecord
{
    /**
     * @return array
     */
    public function transactions()
    {
        return [
            self::SCENARIO_DEFAULT => self::OP_ALL,
        ];
    }

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%book_relation}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['bookId', 'genreId'], 'required'],
            [['bookId', 'genreId'], 'integer'],
            [
                ['bookId'],
                'exist',
                'skipOnError' => true,
                'targetClass' => Book::className(),
                'targetAttribute' => ['bookId' => 'id']
            ],
            [
                ['genreId'],
                'exist',
                'skipOnError' => true,
                'targetClass' => Genre::className(),
                'targetAttribute' => ['genreId' => 'id']
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'bookId' => 'Book ID',
            'genreId' => 'Genre ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBook()
    {
        return $this->hasOne(Book::className(), ['id' => 'bookId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGenre()
    {
        return $this->hasOne(Genre::className(), ['id' => 'genreId']);
    }

    /**
     * @inheritdoc
     * @return RelationQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new RelationQuery(get_called_class());
    }
}
