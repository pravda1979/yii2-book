<?php

namespace pravda1979\book\column;

use pravda1979\book\models\Book;
use pravda1979\book\models\Genre;
use yii\grid\DataColumn;

/**
 * Class GenreColumn
 *
 * @package pravda1979\book\column
 */
class GenreColumn extends DataColumn
{
    /**
     * @var string
     */
    public $attribute = 'genreIds';

    /**
     * @var string
     */
    public $format = 'html';

    /**
     * @var array
     */
    public $filterInputOptions = [
        'class' => 'form-control',
        'multiple' => true,
    ];

    /**
     * @param mixed $model
     * @param mixed $key
     * @param int $index
     *
     * @return string
     */
    public function getDataCellValue($model, $key, $index)
    {
        if ($this->value === null) {
            if ($model instanceof Book) {
                return $model->getGenre();
            }
        }

        return parent::getDataCellValue($model, $key, $index);
    }

    /**
     * @return string
     */
    protected function renderFilterCellContent()
    {
        if ($this->filter === null) {
            $filterModel = $this->grid->filterModel;
            if ($filterModel instanceof Book) {
                $this->filter = Genre::find()->asDropDown();
            }
        }

        return parent::renderFilterCellContent();
    }
}
