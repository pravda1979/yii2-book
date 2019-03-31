Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist pravda1979/yii2-book "*"
```

or add

```
"pravda1979/yii2-book": "*"
```

to the require section of your `composer.json` file.

Use:
====

backend:

```
    'modules' => [
        'book' => [
            'class' => \pravda1979\book\Module::class,
            'viewPath' => '@pravda1979/book/views/backend',
            'controllerNamespace' => 'pravda1979\book\controllers\backend',
        ],
    ],
```

console:

```
    'controllerMap' => [
        'migrate' => [
            'class' => \yii\console\controllers\MigrateController::class,
            'migrationTable' => '{{%migration}}',
            'useTablePrefix' => true,
            'interactive' => false,
            'migrationPath' => [
                '@pravda1979/book/migrations',
            ],
        ],

        ...

        'access' => [
            'class' => \krok\access\AccessController::class,
            'userIds' => [
                1,
            ],
            'rules' => [
                \krok\auth\rbac\AuthorRule::class,
            ],
            'config' => [
                [
                    'label' => 'Book',
                    'name' => 'book',
                    'controllers' => [
                        'default' => [
                            'label' => 'Book',
                            'actions' => [],
                        ],
                        'author' => [
                            'label' => 'Book Author',
                            'actions' => [],
                        ],
                        'genre' => [
                            'label' => 'Book Genre',
                            'actions' => [],
                        ],
                    ],
                ],
            ],
        ],
    ],
```

frontend:

```
    'modules' => [
        'book' => [
            'class' => \pravda1979\book\Module::class,
            'viewPath' => '@pravda1979/book/views/frontend',
            'controllerNamespace' => 'pravda1979\book\controllers\frontend',
        ],
    ],
```

params:

```
    'menu' => [
        [
            'label' => 'Material',
            'icon' => 'ti-files',
            'items' => [
                [
                    'label' => 'Book',
                    'icon' => 'ti-files',
                    'items' => [
                        [
                            'label' => 'Book',
                            'url' => ['/book/default'],
                        ],
                        [
                            'label' => 'Book Author',
                            'url' => ['/book/author'],
                        ],
                        [
                            'label' => 'Book Genre',
                            'url' => ['/book/genre'],
                        ],
                    ],
                ],
            ],
        ],
    ],
```

add translates in file `messages/{lang}/system.php`:

```
    /**
     * Модуль книг
     */
    'Book' => 'Книги',
    'Book Author' => 'Авторы',
    'Book Genre' => 'Жанры',
```

Замечания, вопросы
=

* Если используется Pjax, не работает HiddenColumn в GridView. Вместо Select2 обычный Dropdown. 
* На "index" страницах не хватает кнопки сброса фильтра по всем полям.
* На "index" страницах не хватает формы фильтра, чтоб фильтровать одним махом по многим полям, задавать доп. условия, такие как промежуток дат и тд. и т.п.
  
 