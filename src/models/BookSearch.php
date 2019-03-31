<?php

namespace pravda1979\book\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use yii\helpers\ArrayHelper;

/**
 * BookSearch represents the model behind the search form about `pravda1979\book\models\Book`.
 */
class BookSearch extends Book
{
    /**
     * @var int
     */
    public $genreIds;

    /**
     * @var string
     */
    public $authorTitle;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'authorId', 'hidden', 'createdBy'], 'integer'],
            [['authorTitle', 'title', 'annotation', 'language', 'createdAt', 'updatedAt'], 'safe'],
            [['genreIds'], 'each', 'rule' => ['integer']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
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
        $query = Book::find()->language();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            return $dataProvider;
        }

        \Yii::warning($this->genreIds);

        /**
         * Filter by genres
         */
        $query->joinWith([
            'genreRelations' => function (GenreQuery $query) {
                $query->language();
            },
        ]);
        $query->andFilterWhere([
            Genre::tableName() . '.[[id]]' => $this->genreIds,
        ]);

        /**
         * Filter by author
         */
        $query->joinWith([
            'author' => function (AuthorQuery $query) {
                $query->language();
            },
        ]);
        $query->andFilterWhere(['like', Author::tableName() . '.[[title]]', $this->authorTitle]);

        $query->andFilterWhere([
            Book::tableName() . '.[[id]]' => $this->id,
            Book::tableName() . '.[[authorId]]' => $this->authorId,
            Book::tableName() . '.[[hidden]]' => $this->hidden,
            Book::tableName() . '.[[createdBy]]' => $this->createdBy,
            Book::tableName() . '.[[createdAt]]' => $this->createdAt,
            Book::tableName() . '.[[updatedAt]]' => $this->updatedAt,
        ]);

        $query->andFilterWhere(['like', Book::tableName() . '.[[title]]', $this->title])
            ->andFilterWhere(['like', Book::tableName() . '.[[annotation]]', $this->annotation]);

        return $dataProvider;
    }
}
