<?php

use yii\db\Migration;

/**
 * Class m190331_173724_book
 */
class m190331_173724_book extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $options = ($this->db->getDriverName() === 'mysql') ? 'ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci' : null;

        $this->createTable('{{%book}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string(128)->notNull(),
            'annotation' => $this->text()->notNull(),
            'authorId' => $this->integer(11)->notNull(),
            'hidden' => $this->smallInteger(1)->notNull(),
            'language' => $this->string(8)->notNull(),
            'createdBy' => $this->integer(11)->null()->defaultValue(null),
            'createdAt' => $this->dateTime()->null()->defaultValue(null),
            'updatedAt' => $this->dateTime()->null()->defaultValue(null),
        ], $options);

        $this->addForeignKey(
            'fk-authorId',
            '{{%book}}',
            'authorId',
            '{{%book_author}}',
            'id',
            'CASCADE',
            'RESTRICT'
        );

        $this->createIndex('idx-unique', '{{%book}}', ['title', 'authorId'], true);
        $this->createIndex('idx-hidden-language', '{{%book}}', ['hidden', 'language']);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%book}}');
    }
}
