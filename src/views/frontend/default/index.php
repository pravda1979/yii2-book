<?php

use yii\widgets\ListView;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Книги';
$this->params['breadcrumbs'][] = $this->title;
?>
<h1><?= $this->title ?></h1>

<?php Pjax::begin()?>

<?= ListView::widget([
    'dataProvider' => $dataProvider,
    'separator' => '<br />',
    'itemView' => '_item',
    'layout' => "<div>{pager}</div><div>{items}</div><div>{pager}</div>",
]) ?>

<?php Pjax::end()?>