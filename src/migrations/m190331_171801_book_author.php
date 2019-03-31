<?php

use yii\db\Migration;

/**
 * Class m190331_171801_book_author
 */
class m190331_171801_book_author extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $options = ($this->db->getDriverName() === 'mysql') ? 'ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci' : null;

        $this->createTable('{{%book_author}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string(128)->notNull()->unique(),
            'language' => $this->string(8)->null()->defaultValue(null),
            'hidden' => $this->tinyInteger()->notNull()->defaultValue(0),
            'createdBy' => $this->integer(11)->null()->defaultValue(null),
            'createdAt' => $this->dateTime()->notNull()->defaultValue(null),
            'updatedAt' => $this->dateTime()->notNull()->defaultValue(null),
        ], $options);

        $this->createIndex('idx-language', '{{%book_author}}', 'language');
        $this->createIndex('idx-hidden', '{{%book_author}}', 'hidden');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%book_author}}');
    }
}
