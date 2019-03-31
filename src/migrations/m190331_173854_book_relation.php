<?php

use yii\db\Migration;

/**
 * Class m190331_173854_book_relation
 */
class m190331_173854_book_relation extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $options = ($this->db->getDriverName() === 'mysql') ? 'ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci' : null;

        $this->createTable('{{%book_relation}}', [
            'id' => $this->primaryKey(),
            'bookId' => $this->integer(11)->notNull(),
            'genreId' => $this->integer(11)->notNull(),
        ], $options);

        $this->addForeignKey(
            'fk-bookId',
            '{{%book_relation}}',
            'bookId',
            '{{%book}}',
            'id',
            'CASCADE',
            'RESTRICT'
        );

        $this->addForeignKey(
            'fk-genreId',
            '{{%book_relation}}',
            'genreId',
            '{{%book_genre}}',
            'id',
            'CASCADE',
            'RESTRICT'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk-genreId', '{{%book_relation}}');
        $this->dropForeignKey('fk-bookId', '{{%book_relation}}');

        $this->dropTable('{{%book_relation}}');
    }
}
