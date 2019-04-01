<?php

namespace pravda1979\book\controllers\frontend;

use Yii;
use pravda1979\book\models\BookSearch;
use krok\system\components\backend\Controller;

/**
 * BookController implements the CRUD actions for Book model.
 */
class DefaultController extends Controller
{

    /**
     * Lists all Book models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new BookSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $dataProvider->pagination->pageSize = 3;

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
}
