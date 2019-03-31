<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%category_picture}}`.
 */
class m190329_171812_create_category_picture_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%category_picture}}', [
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
        $this->dropTable('{{%category_picture}}');
    }
}
