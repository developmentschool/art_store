<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%product_picture}}`.
 */
class m190327_172838_create_product_picture_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%product_picture}}', [
            'id' => $this->primaryKey(),
            'product_id'=>$this->integer()->notNull(),
            'picture_id'=>$this->integer()->notNull(),
            'is_main'=>$this->boolean()->notNull(),
            'created_at' => $this->datetime()->notNull(),
            'updated_at' => $this->datetime(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%product_picture}}');
    }
}
