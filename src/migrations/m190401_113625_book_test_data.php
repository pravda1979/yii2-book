<?php

use yii\db\Migration;
use krok\extend\interfaces\HiddenAttributeInterface;

/**
 * Class m190401_113625_book_test_data
 */
class m190401_113625_book_test_data extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->batchInsert('{{%book_author}}',
            [
                'id',
                'title',
                'language',
                'hidden',
                'createdBy',
                'createdAt',
                'updatedAt',
            ],
            [
                [
                    1,
                    'Лев Николаевич Толстой',
                    Yii::$app->language,
                    HiddenAttributeInterface::HIDDEN_NO,
                    1,
                    (new DateTime())->format('Y-m-d H:i:s'),
                    (new DateTime())->format('Y-m-d H:i:s'),
                ],
                [
                    2,
                    'Чарльз Диккенс',
                    Yii::$app->language,
                    HiddenAttributeInterface::HIDDEN_NO,
                    1,
                    (new DateTime())->format('Y-m-d H:i:s'),
                    (new DateTime())->format('Y-m-d H:i:s'),
                ],
                [
                    3,
                    'Джейн Остин',
                    Yii::$app->language,
                    HiddenAttributeInterface::HIDDEN_NO,
                    1,
                    (new DateTime())->format('Y-m-d H:i:s'),
                    (new DateTime())->format('Y-m-d H:i:s'),
                ],
                [
                    4,
                    'Иоганн Вольфганг фон Гете',
                    Yii::$app->language,
                    HiddenAttributeInterface::HIDDEN_NO,
                    1,
                    (new DateTime())->format('Y-m-d H:i:s'),
                    (new DateTime())->format('Y-m-d H:i:s'),
                ],
                [
                    5,
                    'Эрих Мария Ремарк',
                    Yii::$app->language,
                    HiddenAttributeInterface::HIDDEN_NO,
                    1,
                    (new DateTime())->format('Y-m-d H:i:s'),
                    (new DateTime())->format('Y-m-d H:i:s'),
                ]
            ]
        );

        $this->batchInsert('{{%book_genre}}',
            [
                'id',
                'title',
                'language',
                'hidden',
                'createdBy',
                'createdAt',
                'updatedAt',
            ],
            [
                [
                    1,
                    'Фантастика',
                    Yii::$app->language,
                    HiddenAttributeInterface::HIDDEN_NO,
                    1,
                    (new DateTime())->format('Y-m-d H:i:s'),
                    (new DateTime())->format('Y-m-d H:i:s'),
                ],
                [
                    2,
                    'Детектив',
                    Yii::$app->language,
                    HiddenAttributeInterface::HIDDEN_NO,
                    1,
                    (new DateTime())->format('Y-m-d H:i:s'),
                    (new DateTime())->format('Y-m-d H:i:s'),
                ],
                [
                    3,
                    'Приключения',
                    Yii::$app->language,
                    HiddenAttributeInterface::HIDDEN_NO,
                    1,
                    (new DateTime())->format('Y-m-d H:i:s'),
                    (new DateTime())->format('Y-m-d H:i:s'),
                ],
                [
                    4,
                    'Роман',
                    Yii::$app->language,
                    HiddenAttributeInterface::HIDDEN_NO,
                    1,
                    (new DateTime())->format('Y-m-d H:i:s'),
                    (new DateTime())->format('Y-m-d H:i:s'),
                ],
            ]
        );

        $this->batchInsert('{{%book}}',
            [
                'id',
                'title',
                'annotation',
                'authorId',
                'language',
                'hidden',
                'createdBy',
                'createdAt',
                'updatedAt',
            ],
            [
                [
                    1,
                    'Приключения Оливера Твиста',
                    '<div class="articleParagraph">
<p><strong>Чарльз Диккенс &laquo;Приключения Оливера Твиста&raquo;</strong></p>
<p>Новаторский роман, показывающий реальную жизнь без прикрас, Диккенс сочинил в возрасте 26 лет. Сильно напрягать воображение ему не пришлось: главный герой, живший в нищете - это сам автор, чья семья разорилась, когда будущий писатель был совсем ребенком. И даже фамилию главного злодея Фейгина Диккенс взял из жизни, позаимствовав, впрочем, у лучшего друга.</p>
<p>Выход &laquo;Оливера Твиста&raquo; произвел в Англии эффект разорвавшейся бомбы: общество, в частности, наперебой обсуждало - и осудило - детский труд. Благодаря роману читатели узнали, что литература может выполнять функции зеркала.</p>
</div>
<div class="articleImage  block-js  articleImage_size_triple" data-modifiers1="articleImage_size_single" data-modifiers2="articleImage_size_triple" data-modifiers3="articleImage_size_triple" data-modifiers4="articleImage_size_quad">
<div class="articleImage__wrapper"><img class="articleImage__photoSrc ll-js ll-loaded" title="Чарльз Диккенс" src="https://n1s1.elle.ru/43/28/f2/4328f2d37a021e8f0d7c53696cd9a9d6/297x450_0xd42ee429_14484556791375287348.jpg" alt="классика мировой литературы" data-id="566419" data-index="1" data-pic2="https://n1s1.elle.ru/43/28/f2/4328f2d37a021e8f0d7c53696cd9a9d6/297x450_0xd42ee429_14484556791375287348.jpg" data-pic4="https://n1s1.elle.ru/43/28/f2/4328f2d37a021e8f0d7c53696cd9a9d6/297x450_0xd42ee429_14484556791375287348.jpg" /></div>
</div>',
                    2,
                    Yii::$app->language,
                    HiddenAttributeInterface::HIDDEN_NO,
                    1,
                    (new DateTime())->format('Y-m-d H:i:s'),
                    (new DateTime())->format('Y-m-d H:i:s'),
                ],
                [
                    2,
                    'Война и мир',
                    '<div class="articleParagraph">
<p>Эпический четырехтомный шедевр, писавшийся с нескольких заходов, в итоге занял у Толстого без малого шесть лет. &laquo;Войну и мир&raquo; населяют 559 героев, имена главных из них, - Безухов, Наташа Ростова, Болконский, стали нарицательными. Этот роман - масштабное (многие считают, что и вовсе исчерпывающее) высказывание обо всем на свете - войне, любви, государстве и т.д. Сам автор довольно быстро охладел к &laquo;Войне и миру&raquo;, спустя несколько лет назвав книгу &laquo;многословной&raquo;, а в конце жизни - просто &laquo;ерундой&raquo;.</p>
</div>
<div class="articleImage  block-js  articleImage_size_triple" data-modifiers1="articleImage_size_single" data-modifiers2="articleImage_size_triple" data-modifiers3="articleImage_size_triple" data-modifiers4="articleImage_size_quad">
<div class="articleImage__wrapper"><img class="articleImage__photoSrc ll-js ll-loaded" title="Лев Николаевич Толстой" src="https://n1s1.elle.ru/be/da/81/beda81174b3d96697332e379b8ffb236/286x450_0xd42ee429_15060621191375287348.jpg" alt="толстой лучшие книги" data-id="566419" data-index="6" data-pic2="https://n1s1.elle.ru/be/da/81/beda81174b3d96697332e379b8ffb236/286x450_0xd42ee429_15060621191375287348.jpg" data-pic4="https://n1s1.elle.ru/be/da/81/beda81174b3d96697332e379b8ffb236/286x450_0xd42ee429_15060621191375287348.jpg" /></div>
</div>',
                    1,
                    Yii::$app->language,
                    HiddenAttributeInterface::HIDDEN_NO,
                    1,
                    (new DateTime())->format('Y-m-d H:i:s'),
                    (new DateTime())->format('Y-m-d H:i:s'),
                ],
                [
                    3,
                    'Фауст',
                    '<div class="articleParagraph">
<p>Последнюю, вторую часть &laquo;Фауста&raquo; 82-летний Гете закончил за полгода до смерти. Начал же работу над текстом, когда ему было двадцать пять. Всю доставшуюся от педанта-отца скрупулезность, работоспособность и внимание к деталям Гете вложил в этот амбициозный труд. Жизнь, смерть, мироустройство, добро, зло - &laquo;Фауст&raquo;, как и &laquo;Война и мир&raquo;, по-своему является исчерпывающей книгой, в которой каждый найдет ответы на любые ответы.</p>
</div>
<div class="articleImage  block-js  articleImage_size_triple" data-modifiers1="articleImage_size_single" data-modifiers2="articleImage_size_triple" data-modifiers3="articleImage_size_triple" data-modifiers4="articleImage_size_quad">
<div class="articleImage__wrapper"><img class="articleImage__photoSrc ll-js ll-loaded" title="Иоганн Вольфганг фон Гете" src="https://n1s1.elle.ru/7b/4d/0d/7b4d0d83a2bf5ecc8cd2c486c9b512a6/287x450_0xd42ee429_5441623381375287348.jpg" alt="классика зарубежной литературы" data-id="566419" data-index="3" data-pic2="https://n1s1.elle.ru/7b/4d/0d/7b4d0d83a2bf5ecc8cd2c486c9b512a6/287x450_0xd42ee429_5441623381375287348.jpg" data-pic4="https://n1s1.elle.ru/7b/4d/0d/7b4d0d83a2bf5ecc8cd2c486c9b512a6/287x450_0xd42ee429_5441623381375287348.jpg" /></div>
</div>',
                    4,
                    Yii::$app->language,
                    HiddenAttributeInterface::HIDDEN_NO,
                    1,
                    (new DateTime())->format('Y-m-d H:i:s'),
                    (new DateTime())->format('Y-m-d H:i:s'),
                ],
                [
                    4,
                    'Анна Каренина',
                    '<p>&laquo;Анна Каренина&raquo; &ndash; пронзительная драма о вечных ценностях. Школьникам книгу не задают, и выпускники зачастую не знают даже, кто написал &laquo;Анна Каренина&raquo;. Это&nbsp;<strong>первое в русской литературе</strong>&nbsp;произведение такого масштаба, где на передний план выходит этика и психология семейной жизни. Так называемый современный человек, образованный, не чуждый цивилизации, уже не слишком верит в бога, не слишком боится греха и зачастую пренебрегает традиционными ценностями: верностью, долгом, честью. XIX век, наследующий эпохе Просвещения, привнес в общество легкомысленное отношение к пороку, и Лев Толстой рисует, как эти новые типажи взаимодействуют с теми, кто остался верен домостроевским традициям.</p>
<p>Сюжетных линии три, и ни в коем случае нельзя думать, будто одна из них главная, а другие второстепенные: любовь Анны и Вронского, любовь Левина и Кити, нелюбовь Стивы и Долли. Все герои важны, все несут смысловую нагрузку, и проходных персонажей в романе нет.</p>
<p><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/c7/AnnaKareninaTitle.jpg/250px-AnnaKareninaTitle.jpg" width="250" height="381" /></p>',
                    1,
                    Yii::$app->language,
                    HiddenAttributeInterface::HIDDEN_NO,
                    1,
                    (new DateTime())->format('Y-m-d H:i:s'),
                    (new DateTime())->format('Y-m-d H:i:s'),
                ],
            ]
        );

        /**
         * Связь книг и жанров
         */
        $this->batchInsert('{{%book_relation}}',
            [
                'id',
                'bookId',
                'genreId',
            ],
            [
                [1, 1, 3],
                [2, 1, 4],
                [3, 2, 4],
                [4, 3, 4],
                [5, 4, 4],
            ]
        );

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->execute("delete from {{%book_relation}} where bookId <= 4");
        $this->execute("delete from {{%book}} where id <= 4");
        $this->execute("delete from {{%book_genre}} where id <= 4");
        $this->execute("delete from {{%book_author}} where id <= 5");
    }
}
