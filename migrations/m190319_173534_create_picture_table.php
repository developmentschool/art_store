<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%picture}}`.
 */
class m190319_173534_create_picture_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%picture}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string(255)->notNull()->unique(),
            'ext' => $this->string(12)->notNull(),
            'created_at' => $this->datetime()->notNull(),
            'updated_at' => $this->datetime(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%picture}}');
    }
}
