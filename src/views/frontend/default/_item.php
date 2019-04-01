<?php

use yii\helpers\Url;

/* @var $this \yii\web\View */
/* @var $model \pravda1979\book\models\Book */
/* @var $widget \yii\widgets\ListView */
?>
<div class="row">

    <div class="panel panel-default">
        <div class="panel-heading">
            <h4><?= $model->author->title ?>: <?= $model->title ?></h4>
        </div>
        <div class="panel-body">
            <?= $model->annotation ?>
        </div>
    </div>

</div>
