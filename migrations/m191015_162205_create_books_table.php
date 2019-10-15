<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%books}}`.
 */
class m191015_162205_create_books_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%books}}', [
            'id'           => $this->primaryKey(),
            'author_id'    => $this->integer(),
            'title'        => $this->string()->notNull(),
            'release_year' => $this->integer()->notNull(),
            'rating'       => $this->decimal(10, 0)->defaultValue(0),
        ]);

        $this->createIndex(
            'idx-books-author_id',
            'books',
            'author_id',
        );

        $this->addForeignKey(
            'fk-books-author_id',
            'books',
            'author_id',
            'authors',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey(
            'fk-books-author_id',
            'books'
        );

        $this->dropIndex(
            'idx-books-author_id',
            'books'
        );

        $this->dropTable('{{%books}}');
    }
}
