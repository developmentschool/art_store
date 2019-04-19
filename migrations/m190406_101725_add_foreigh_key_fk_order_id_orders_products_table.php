<?php

use yii\db\Migration;

/**
 * Class m190406_101725_add_foreigh_key_fk_order_id_orders_products_table
 */
class m190406_101725_add_foreigh_key_fk_order_id_orders_products_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addForeignKey('fk_order_id_orders_products_table', 'orders_products', 'order_id', 'orders', 'id');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk_order_id_orders_products_table', 'orders_products');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190406_101725_add_foreigh_key_fk_order_id_orders_products_table cannot be reverted.\n";

        return false;
    }
    */
}
