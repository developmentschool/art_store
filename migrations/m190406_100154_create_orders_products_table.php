<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%orders_products}}`.
 */
class m190406_100154_create_orders_products_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%orders_products}}', [
            'order_id' => $this->integer()->notNull(),
            'product_id'=>$this->integer()->notNull(),
            'quantity'=>$this->integer()->defaultValue(1),
            'created_at' => $this->datetime()->notNull(),
            'updated_at' => $this->datetime(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%orders_products}}');
    }
}
