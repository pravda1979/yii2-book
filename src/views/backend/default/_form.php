<?php

use krok\editor\EditorWidget;

/* @var $this yii\web\View */
/* @var $form yii\widgets\ActiveForm */
/* @var $model pravda1979\book\models\Book */
/* @var $authors array */
/* @var $genres array */
?>

<?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

<?= $form->field($model, 'authorId')->dropDownList($authors, [
    'multiple' => false,
]) ?>

<?= $form->field($model, 'genreIds')->dropDownList($genres, [
    'multiple' => true,
]) ?>

<?= $form->field($model, 'annotation')->widget(EditorWidget::class) ?>

<?= $form->field($model, 'hidden')->dropDownList($model::getHiddenList()) ?>

